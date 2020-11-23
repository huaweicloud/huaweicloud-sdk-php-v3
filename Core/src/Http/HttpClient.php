<?php

namespace HuaweiCloud\SDK\Core\Http;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;
use HuaweiCloud\SDK\Core\Exceptions\CallTimeoutException;
use HuaweiCloud\SDK\Core\Exceptions\HostUnreachableException;
use HuaweiCloud\SDK\Core\Exceptions\RetryOutageException;
use HuaweiCloud\SDK\Core\Exceptions\SslHandShakeException;
use HuaweiCloud\SDK\Core\SdkRequest;
use HuaweiCloud\SDK\Core\Exceptions\SdkException;
use HuaweiCloud\SDK\Core\Exceptions\SdkErrorMessage;
use HuaweiCloud\SDK\Core\Exceptions\ClientRequestException;
use HuaweiCloud\SDK\Core\Exceptions\ServerResponseException;
use Monolog\Logger;

class HttpClient
{
    protected $httpConfig;
    protected $client;
    protected $logger;


    public function __construct(
        HttpConfig $httpConfig = null,
        Logger $logger = null
    ) {
        $this->httpConfig = $httpConfig ?: new HttpConfig();
        $this->logger = $logger;
        $this->client = new Client();
    }

    private function createHttpClientOption(HttpConfig $config)
    {
        $httpOption = ['http_errors' => true];
        // proxy
        $proxyOption = array('proxy' => $config->getProxy());
        // ssl
        if (!$config->ignoreSslVerification) {
            $sslOption = array('verify' => true,
            );
        } else {
            $sslOption = array('verify' => false,
            );
        }
        // time
        $timeOption = array('timeout' => $config->timeout,
            'connect_timeout' => $config->connectTimeout);
        return array_merge($httpOption, $proxyOption, $sslOption, $timeOption);
    }

    public function doRequestSync(SdkRequest $sdkRequest)
    {
        $request = new Request($sdkRequest->method,
            $sdkRequest->url,
            $sdkRequest->headerParams,
            $sdkRequest->body);
        $httpOption = $this->createHttpClientOption($this->httpConfig);
        try {
            $response = $this->client->send($request, $httpOption);
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                $response = $e->getResponse();
                $responseStatusCode = $response->getStatusCode();
                $requestId = $response->getHeaders()['X-Request-Id'][0];
                $responseBody = $response->getBody();
                $sdkError = $this->getSdkErrorMessage($requestId,
                    $responseBody, $responseStatusCode);
                if (isset($response->getHeaders()['Content-Length'])) {
                    $contentLength = $response->getHeaders()['Content-Length'][0];
                } else {
                    $contentLength = 0;
                }
                if (isset($this->logger)) {
                    $this->logger->addInfo(' "' . $sdkRequest->method . ' ' .
                        $sdkRequest->url . '" '
                        . ' ' . $response->getStatusCode() . ' ' . $contentLength
                        . ' ' . $response->getHeaders()['X-Request-Id'][0]);
                }
                if (400 <= $responseStatusCode and $responseStatusCode < 500) {
                    throw new ClientRequestException($responseStatusCode,
                        $sdkError);
                } else {
                    throw new ServerResponseException($responseStatusCode,
                        $sdkError);
                }
            } else {
                $this->getExceptionType($e->getMessage());
            }
        }
        if (isset($response->getHeaders()['Content-Length'])) {
            $contentLength = $response->getHeaders()['Content-Length'][0];
        } else {
            $contentLength = 0;
        }
        if (isset($this->logger)) {
            $this->logger->addInfo(' "' . $sdkRequest->method . ' ' .
                $sdkRequest->url . '" '
                . ' ' . $response->getStatusCode() . ' ' . $contentLength
                . ' ' . $response->getHeaders()['X-Request-Id'][0]);
        }
        return $response;
    }

    public function doRequestAsync(SdkRequest $sdkRequest)
    {
        $request = new Request($sdkRequest->method, $sdkRequest->url,
            $sdkRequest->headerParams, $sdkRequest->body);
        try {
            $httpOption = $this->createHttpClientOption($this->httpConfig);
            $promise = $this->client->sendAsync($request, $httpOption)->then(
                function ($response) use ($sdkRequest)
                {
                    if (isset($response->getHeaders()['Content-Length'])) {
                        $contentLength = $response->getHeaders()['Content-Length'][0];
                    } else {
                        $contentLength = 0;
                    }
                    if (isset($this->logger)) {
                        $this->logger->addInfo(' "' . $sdkRequest->method . ' ' .
                            $sdkRequest->url . '" '
                            . ' ' . $response->getStatusCode() . ' ' . $contentLength
                            . ' ' . $response->getHeaders()['X-Request-Id'][0]);
                    }
                    return $response;
                },
                function (RequestException $e) use ($sdkRequest)
                {
                    if ($e->hasResponse()) {
                        $response = $e->getResponse();
                        $responseStatusCode = $response->getStatusCode();
                        $requestId = $response->getHeaders()['X-Request-Id'][0];
                        $responseBody = $response->getBody();
                        $sdkError = $this->getSdkErrorMessage($requestId,
                            $responseBody, $responseStatusCode);
                        if (isset($response->getHeaders()['Content-Length'])) {
                            $contentLength = $response->getHeaders()['Content-Length'][0];
                        } else {
                            $contentLength = 0;
                        }
                        if (isset($this->logger)) {
                            $this->logger->addInfo(' "' . $sdkRequest->method . ' ' .
                                $sdkRequest->url . '" '
                                . ' ' . $response->getStatusCode() . ' ' . $contentLength
                                . ' ' . $response->getHeaders()['X-Request-Id'][0]);
                        }
                        if (400 <= $responseStatusCode and
                            $responseStatusCode < 500) {
                            throw new ClientRequestException
                            ($responseStatusCode, $sdkError);
                        } else {
                            throw new ServerResponseException
                            ($responseStatusCode, $sdkError);
                        }
                    } else {
                        $this->getExceptionType($e->getMessage());
                    }
                }

            );
        } catch (\Exception $e) {
            throw new SdkException($e->getMessage());
        }
        return $promise;
    }

    private function getSdkErrorMessage($requestId,
                                        $responseBody,
                                        $responseStatusCode
    ) {
        $sdkError = new SdkErrorMessage();
        try {
            $responseBody = json_decode((string)$responseBody, true);
            if (isset($responseBody["error_code"]) and
                isset($responseBody["error_msg"])) {
                $sdkError = new SdkErrorMessage($requestId,
                    $responseBody["error_code"], $responseBody["error_msg"]);
            } elseif (isset($responseBody["code"]) and
                isset($responseBody["message"])) {
                $sdkError = new SdkErrorMessage($requestId,
                    $responseBody["code"], $responseBody["message"]);
            } else {
                foreach ($responseBody as $key => $value) {
                    if (is_array($responseBody[$key]) and
                        isset($responseBody[$key]["code"]) and
                        isset($responseBody[$key]["message"])) {
                        $sdkError = new SdkErrorMessage($requestId,
                            $responseBody[$key]["code"],
                            $responseBody[$key]["message"]);
                    }
                }
            }
        } catch (\Exception $e) {
            throw new ServerResponseException($responseStatusCode,
                new SdkErrorMessage((string)$responseBody));
        }
        $sdkErrorMsg = $sdkError->getErrorMsg();
        if (!isset($sdkErrorMsg)) {
            $sdkError = new SdkErrorMessage((string)$responseBody);
        }
        return $sdkError;
    }

    private function getExceptionType($errorMessage)
    {
        $errorKey = explode(':', $errorMessage, 2)[0];
        $msg = explode(':', $errorMessage, 2)[1];
        switch ($errorKey) {
            case 'cURL error 6':
                if (isset($this->logger)) {
                    $this->logger->addError('HostUnreachableException occurred.'
                        . $msg);
                }
                throw new HostUnreachableException($msg);
                break;
            case 'cURL error 60':
                if (isset($this->logger)) {
                    $this->logger->addError('SslHandShakeException occurred.'
                        . $msg);
                }
                throw new SslHandShakeException($msg);
                break;
            case 'cURL error 28':
                if (isset($this->logger)) {
                    $this->logger->addError('CallTimeoutException occurred.'
                        . $msg);
                }
                throw new CallTimeoutException($msg);
                break;
            case 'cURL error 47':
                if (isset($this->logger)) {
                    $this->logger->addError('RetryOutageException occurred.'
                        . $msg);
                }
                throw new RetryOutageException($msg);
                break;
            default:
                if (isset($this->logger)) {
                    $this->logger->addError('SdkException occurred.'
                        . $msg);
                }
                throw new SdkException($errorMessage);
        }
    }
}
