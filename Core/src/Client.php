<?php

namespace HuaweiCloud\SDK\Core;

use GuzzleHttp\Psr7\MultipartStream;
use HuaweiCloud\SDK\Core\Http\HttpClient;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use Monolog\Formatter\LineFormatter;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class Client
{
    private $defaultHeaders = Array();
    private $Agent = Array();
    private $httpConfig;
    private $credentials;
    private $endpoint;
    private $httpClient;

    private $httpHandler = null;
    private $fileLoggerHandler = null;
    private $streamLoggerHandler = null;
    private $logger = null;
    private $logFormat = null;


    public function __construct()
    {
        $this->Agent = Array('User-Agent' => 'huaweicloud-sdk-php/3.0');
    }

    /**
     * @param mixed $httpConfig
     * @return Client
     */
    public function withHttpConfig($httpConfig)
    {
        $this->httpConfig = $httpConfig;
        return $this;
    }

    /**
     * @param mixed $credentials
     * @return Client
     */
    public function withCredentials($credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @param mixed $endpoint
     * @return Client
     */
    public function withEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * @param null $httpHandler
     * @return Client
     */
    public function withHttpHandler($httpHandler)
    {
        $this->httpHandler = $httpHandler;
        return $this;
    }

    /**
     * @param $logPath
     * @param $logLevel
     * @param int $logMaxFiles
     * @param null $formatString
     * @return Client
     */
    public function withFileLogger($logPath,
                                          $logLevel = Logger::INFO,
                                          $logMaxFiles = 10485760,
                                          $formatString = null
    ) {
        $this->fileLoggerHandler = array('path' => $logPath, 'logLevel' =>
            $logLevel, 'logMaxFiles' => $logMaxFiles, 'formatString' => $formatString);
        return $this;
    }

    /**
     * @param $stream
     * @param $logLevel
     * @param null $formatString
     * @return Client
     */
    public function withStreamLogger($stream,
                                            $logLevel,
                                            $formatString = null)
    {
        $this->streamLoggerHandler = array('stream' => $stream, 'logLevel' =>
            $logLevel, 'formatString' => $formatString);
        return $this;
    }

    public function initHttpClient()
    {
        $this->httpClient = new HttpClient($this->httpConfig,$this->logger);
    }

    private function initLogger($name, $formatString = null)
    {
        if ($formatString == null) {
            $formatString = '[%datetime%][%level_name%]'.'%message%' . "\n";
        }
        $this->logger = new Logger($name);
        $this->logFormat = new LineFormatter($formatString);
    }

    public function addStreamLogger($streamLoggerHandler)
    {
        if (! isset($this->logger)) {
            $this->initLogger('Logger', $streamLoggerHandler['formatString']);
        }
        $streamHandler = new StreamHandler($streamLoggerHandler['stream'],
            $streamLoggerHandler['logLevel']);
        $streamHandler->setFormatter($this->logFormat);
//        $this->logger->getHandlers();
        $this->logger->pushHandler($streamHandler);
    }

    public function addFileLogger($fileLoggerHandler)
    {
        if (! isset($this->logger)) {
            $this->initLogger('Logger', $fileLoggerHandler['formatString']);
        }
        $fileHandler = new RotatingFileHandler($fileLoggerHandler['logPath'],
            $fileLoggerHandler['logMaxFiles'], $fileLoggerHandler['logLevel']);
        $fileHandler->setFormatter($this->logFormat);
        $this->logger->pushHandler($fileHandler);
    }

    /**
     * @return array
     */
    public function getAgent()
    {
        return $this->Agent;
    }

    /**
     * @return mixed
     */
    public function getHttpConfig()
    {
        return $this->httpConfig;
    }

    /**
     * @return mixed
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * @return mixed
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * @return mixed
     */
    public function getHttpClient()
    {
        return $this->httpClient;
    }

    private function parsePathParams($collectionFormats,
                                     $pathParams,
                                     $resourcePath,
                                     $updatePathParams)
    {
        $pathParams = $this->postProcessParams($pathParams) ?: array();
        if (isset($pathParams)) {
            foreach ($pathParams as $k=>$v) {
                $resourcePath = str_replace(sprintf('{%s}',$k),
                    urlencode(strval($v)), $resourcePath);
            }
        }

        if (isset($updatePathParams)) {
            foreach ($updatePathParams as $k=>$v) {
                $resourcePath = str_replace(sprintf('{%s}',$k),
                    urlencode(strval($v)), $resourcePath);
            }
        }
        return $resourcePath;
    }

    private function parseHeaderParams($collectionFormats,$headerParams)
    {
        $headerParams = $this->postProcessParams($headerParams) ?: array();
        $headerParams = array_merge($headerParams,$this->defaultHeaders);
        if (isset($headerParams)) {
            $headerParams = ObjectSerializer::sanitizeForSerialization($headerParams);
        }
        $headerParams = array_merge($headerParams,$this->Agent);
        return $headerParams;
    }

    private function parseQueryParams($collectionFormats, $queryParams)
    {
        $queryParams = $this->postProcessParams($queryParams) ?: array();
        if (isset($queryParams)) {
            $queryParams = ObjectSerializer::sanitizeForSerialization($queryParams);
        }
        return $queryParams;
    }

    private function parsePostParams($collectionFormats, $postParams)
    {
        $postParams = $this->postProcessParams($postParams) ?: array();
        if (isset($postParams)) {
            $postParams = ObjectSerializer::sanitizeForSerialization($postParams);
        }
        return $postParams;
    }

    private function parseBody($body, $multipart, $formParams, $headerParams)
    {
        $httpBody = null;
        if (isset($body)) {
            // $_tempBody is the method argument, if present
            if ($headerParams['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ?
                        $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);
            } elseif ($headerParams['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }
        return $httpBody;
    }

    public function postProcessParams($headerParams)
    {
        foreach ($headerParams as $headerParamName => $headerParamValue) {
            if (!isset($headerParamValue)) {
                unset($headerParams[$headerParamName]);
            }
        }
        return $headerParams;
    }

    public function doHttpRequest($method,
                                  $resourcePath,
                                  $pathParams=null,
                                  $queryParams=null,
                                  $headerParams=null,
                                  $body=null,
                                  $multipart=null,
                                  $postParams=null,
                                  $responseType=null,
                                  $collectionFormats=null,
                                  $requestType=null,
                                  $async_request=false
    ) {
        $urlParseResult = parse_url($this->endpoint);
        $scheme = $urlParseResult['scheme'];
        $host = $urlParseResult['host'];
        $headerParams = $this->parseHeaderParams($collectionFormats,
            $headerParams);
        $resourcePath = $this->parsePathParams($collectionFormats,
            $pathParams, $resourcePath,
            $this->credentials->getUpdatePathParams());
        $queryParams = $this->parseQueryParams($collectionFormats, $queryParams);
        $postParams = $this->parsePostParams($collectionFormats, $postParams);
        $body = $this->parseBody($body, $multipart,$postParams, $headerParams);
        $sdkRequest = new SdkRequest($method=$method, $scheme=$scheme,
            $host=$host, $resourcePath=$resourcePath, $uri='',$urL='',
            $queryParams=$queryParams, $headerParams=$headerParams,
            $body=$body, $stream=FALSE);
        $sdkRequest = $this->credentials->processAuthRequest($sdkRequest);
        if ($async_request) {
            return $this->httpClient->doRequestAsync($sdkRequest)
                ->then(
                    function ($response) use ($responseType)
                    {
                        $returnData = $this->SyncResponseHandler($response,$responseType);
                        echo $returnData->getBody();
                        return $returnData;
                    });
        } else {
            $response = $this->httpClient->doRequestSync($sdkRequest);
            $returnData = $this->SyncResponseHandler($response,$responseType);
            return $returnData;
        }
    }

    public function SyncResponseHandler($response, $responseType)
    {
        $statusCode = $response->getStatusCode();
        $responseBody = $response->getBody();
        $responseHeader = $response->getHeaders();
        $returnData = ObjectSerializer::deserialize((string) $responseBody,$responseType);
        $returnData->setStatusCode($statusCode);
        $returnData->setHeaderParams($responseHeader);
        $returnData->setBody((string) $responseBody);
        return $returnData;
    }
}