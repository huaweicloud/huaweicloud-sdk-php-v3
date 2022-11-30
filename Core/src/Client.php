<?php
/**
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache LICENSE, Version 2.0 (the
 * "LICENSE"); you may not use this file except in compliance
 * with the LICENSE.  You may obtain a copy of the LICENSE at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the LICENSE is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the LICENSE for the
 * specific language governing permissions and limitations
 * under the LICENSE.
 */

namespace HuaweiCloud\SDK\Core;

use GuzzleHttp\Psr7\MultipartStream;
use HuaweiCloud\SDK\Core\Http\HttpClient;
use HuaweiCloud\SDK\Core\Http\HttpHandler;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use Monolog\Formatter\LineFormatter;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class Client
{
    private $defaultHeaders = [];
    private $Agent = [];
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
        $this->Agent = ['User-Agent' => 'huaweicloud-usdk-php/3.0'];
    }

    /**
     * @param mixed $httpConfig
     *
     * @return Client
     */
    public function withHttpConfig($httpConfig)
    {
        $this->httpConfig = $httpConfig;

        return $this;
    }

    /**
     * @param mixed $credentials
     *
     * @return Client
     */
    public function withCredentials($credentials)
    {
        $this->credentials = $credentials;

        return $this;
    }

    /**
     * @param mixed $endpoint
     *
     * @return Client
     */
    public function withEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;

        return $this;
    }

    /**
     * @param null $httpHandler
     *
     * @return Client
     */
    public function withHttpHandler($httpHandler)
    {
        if (isset($httpHandler)) {
            $this->httpHandler = $httpHandler;
        } else {
            $this->httpHandler = new HttpHandler();
        }

        return $this;
    }

    /**
     * @param $logPath
     * @param $logLevel
     * @param int  $logMaxFiles
     * @param null $formatString
     *
     * @return Client
     */
    public function withFileLogger($logPath,
                                   $logLevel = Logger::INFO,
                                   $logMaxFiles = 10485760,
                                   $formatString = null
    ) {
        $this->fileLoggerHandler = ['path' => $logPath, 'logLevel' =>
            $logLevel, 'logMaxFiles' => $logMaxFiles, 'formatString' =>
            $formatString];

        return $this;
    }

    /**
     * @param $stream
     * @param $logLevel
     * @param null $formatString
     *
     * @return Client
     */
    public function withStreamLogger($stream,
                                     $logLevel,
                                     $formatString = null)
    {
        $this->streamLoggerHandler = ['stream' => $stream, 'logLevel' =>
            $logLevel, 'formatString' => $formatString];

        return $this;
    }

    public function initHttpClient()
    {
        $this->httpClient = new HttpClient($this->httpConfig,
            $this->httpHandler, $this->logger);
    }

    private function initLogger($name, $formatString = null)
    {
        if (null == $formatString) {
            $formatString = '[%datetime%][%level_name%]'.'%message%'."\n";
        }
        $this->logger = new Logger($name);
        $this->logFormat = new LineFormatter($formatString);
    }

    public function addStreamLogger($streamLoggerHandler)
    {
        if (!isset($this->logger)) {
            $this->initLogger('Logger', $streamLoggerHandler['formatString']);
        }
        $streamHandler = new StreamHandler($streamLoggerHandler['stream'],
            $streamLoggerHandler['logLevel']);
        $streamHandler->setFormatter($this->logFormat);
        $this->logger->pushHandler($streamHandler);
    }

    public function addFileLogger($fileLoggerHandler)
    {
        if (!isset($this->logger)) {
            $this->initLogger('Logger', $fileLoggerHandler['formatString']);
        }
        $fileHandler = new RotatingFileHandler($fileLoggerHandler['logPath'],
            $fileLoggerHandler['logMaxFiles'], $fileLoggerHandler['logLevel']);
        $fileHandler->setFormatter($this->logFormat);
        $this->logger->pushHandler($fileHandler);
    }

    /**
     * @param null $logger
     */
    public function setLogger($logger)
    {
        $this->logger = $logger;
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
     * @param mixed $endpoint
     */
    public function setEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;
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
        $pathParams = $this->postProcessParams($pathParams) ?: [];
        if (isset($pathParams)) {
            foreach ($pathParams as $k => $v) {
                $resourcePath = str_replace(sprintf('{%s}', $k),
                    urlencode(strval($v)), $resourcePath);
            }
        }

        if (isset($updatePathParams)) {
            foreach ($updatePathParams as $k => $v) {
                $resourcePath = str_replace(sprintf('{%s}', $k),
                    urlencode(strval($v)), $resourcePath);
            }
        }

        return $resourcePath;
    }

    private function parseHeaderParams($collectionFormats, $headerParams)
    {
        $headerParams = $this->postProcessParams($headerParams) ?: [];
        $headerParams = array_merge($headerParams, $this->defaultHeaders);
        if (isset($headerParams)) {
            $headerParams = ObjectSerializer::sanitizeForSerialization($headerParams);
        }
        $headerParams = array_merge($headerParams, $this->Agent);

        return $headerParams;
    }

    private function parseQueryParams($collectionFormats, $queryParams)
    {
        $queryParams = $this->postProcessParams($queryParams) ?: [];
        if (isset($queryParams)) {
            $queryParams = ObjectSerializer::sanitizeForSerialization($queryParams);
        }

        return $queryParams;
    }

    private function parsePostParams($collectionFormats, $postParams)
    {
        $postParams = $this->postProcessParams($postParams) ?: [];
        if (isset($postParams)) {
            $postParams = ObjectSerializer::sanitizeForSerialization($postParams);
        }

        return $postParams;
    }

    private function parseBody($body, $multipart, $formParams, $headerParams)
    {
        $httpBody = null;
        if (isset($body)&&!$multipart) {
            // $_tempBody is the method argument, if present
            if ('application/json' === $headerParams['Content-Type']) {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
             if($multipart){
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ?
                        $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => fopen($formParamValueItem->getPathname(),'r'),
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);
            } elseif ('application/json' === $headerParams['Content-Type']) {
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
                                  $pathParams = null,
                                  $queryParams = null,
                                  $headerParams = null,
                                  $body = null,
                                  $multipart = null,
                                  $postParams = null,
                                  $responseType = null,
                                  $collectionFormats = null,
                                  $requestType = null,
                                  $async_request = false
    ) {
        $urlParseResult = parse_url($this->endpoint);
        $scheme = $urlParseResult['scheme'];
        $host = $urlParseResult['host'];
        if(count($urlParseResult) === 3){
            $host = $host.':'.$urlParseResult['port'];
        }
        $headerParams = $this->parseHeaderParams($collectionFormats,
            $headerParams);
        $resourcePath = $this->parsePathParams($collectionFormats,
            $pathParams, $resourcePath,
            $this->credentials->getUpdatePathParams());
        $queryParams = $this->parseQueryParams($collectionFormats, $queryParams);
        if(!$multipart){
        $postParams = $this->parsePostParams($collectionFormats, $postParams);
        }
        $body = $this->parseBody($body, $multipart, $postParams, $headerParams);
        $sdkRequest = new SdkRequest($method = $method, $scheme = $scheme,
            $host = $host, $resourcePath = $resourcePath, $uri = '',$urL = '',
            $queryParams = $queryParams, $headerParams = $headerParams,
            $body = $body, $stream = false);
        $sdkRequest = $this->credentials->processAuthRequest($sdkRequest);
        if ($async_request) {
            return $this->httpClient->doRequestAsync($sdkRequest)
                ->then(
                    function ($response) use ($responseType) {
                        $returnData = $this->SyncResponseHandler($response, $responseType);

                        return $returnData;
                    });
        } else {
            $response = $this->httpClient->doRequestSync($sdkRequest);
            $returnData = $this->SyncResponseHandler($response, $responseType);

            return $returnData;
        }
    }

    public function SyncResponseHandler($response, $responseType)
    {
        $statusCode = $response->getStatusCode();
        $responseBody = $response->getBody();
        $responseHeader = $response->getHeaders();
        $returnData = ObjectSerializer::deserialize((string) $responseBody, $responseType);
        $returnData->setStatusCode($statusCode);
        $returnData->setHeaderParams($responseHeader);
        $returnData->setBody((string) $responseBody);

        return $returnData;
    }
}
