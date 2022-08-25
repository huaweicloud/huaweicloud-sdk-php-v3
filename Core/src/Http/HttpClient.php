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

namespace HuaweiCloud\SDK\Core\Http;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;
use HuaweiCloud\SDK\Core\Exceptions\CallTimeoutException;
use HuaweiCloud\SDK\Core\Exceptions\ClientRequestException;
use HuaweiCloud\SDK\Core\Exceptions\HostUnreachableException;
use HuaweiCloud\SDK\Core\Exceptions\RetryOutageException;
use HuaweiCloud\SDK\Core\Exceptions\SdkErrorMessage;
use HuaweiCloud\SDK\Core\Exceptions\SdkException;
use HuaweiCloud\SDK\Core\Exceptions\ServerResponseException;
use HuaweiCloud\SDK\Core\Exceptions\SslHandShakeException;
use HuaweiCloud\SDK\Core\SdkRequest;
use Monolog\Logger;

class HttpClient
{
    protected $httpConfig;
    protected $client;
    protected $logger;
    protected $httpHandler;

    public function __construct(
        HttpConfig $httpConfig = null,
        HttpHandler $httpHandler = null,
        Logger $logger = null
    ) {
        $this->httpConfig = isset($httpConfig) ? $httpConfig : new HttpConfig();
        $this->logger = isset($logger) ? $logger : null;
        $this->httpHandler = isset($httpHandler) ? $httpHandler : null;
        $this->client = new Client();
    }

    /**
     * @param Logger|null $logger
     */
    public function setLogger($logger)
    {
        $this->logger = $logger;
    }

    private function createHttpClientOption(HttpConfig $config)
    {
        $httpOption = ['http_errors' => true];
        // proxy
        $proxyOption = ['proxy' => $config->getProxy()];

        // ssl
        if (!$config->ignoreSslVerification) {
            $sslOption = ['verify' => true,
            ];
        } else {
            $sslOption = ['verify' => false,
            ];
        }
        // time
        $timeOption = ['timeout' => $config->timeout,
            'connect_timeout' => $config->connectTimeout, ];

        return array_merge($httpOption, $proxyOption, $sslOption, $timeOption);
    }

    public function doRequestSync(SdkRequest $sdkRequest)
    {
        $request = new Request($sdkRequest->method,
            $sdkRequest->url,
            $sdkRequest->headerParams,
            $sdkRequest->body);
        if (isset($this->httpHandler)) {
            $this->httpHandler->processRequest(['request' => $sdkRequest, 'logger' => $this->logger]);
        }
        $httpOption = $this->createHttpClientOption($this->httpConfig);
        try {
            $response = $this->client->send($request, $httpOption);
            if (isset($this->httpHandler)) {
                $this->httpHandler->processResponse(['response' => $response, 'logger' => $this->logger]);
            }
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                $response = $e->getResponse();
                if (isset($this->httpHandler)) {
                    $this->httpHandler->processResponse(['response' =>
                        $response, 'logger' => $this->logger]);
                }
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
                    $this->logger->addInfo(' "'.$sdkRequest->method.' '.
                        $sdkRequest->url.'" '
                        .' '.$response->getStatusCode().' '.$contentLength
                        .' '.$response->getHeaders()['X-Request-Id'][0]);
                }
                if (400 <= $responseStatusCode and $responseStatusCode < 500) {
                    throw new ClientRequestException($responseStatusCode, $sdkError);
                } else {
                    throw new ServerResponseException($responseStatusCode, $sdkError);
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
            $this->logger->addInfo(' "'.$sdkRequest->method.' '.
                $sdkRequest->url.'" '
                .' '.$response->getStatusCode().' '.$contentLength
                .' '.$response->getHeaders()['X-Request-Id'][0]);
        }

        return $response;
    }

    public function doRequestAsync(SdkRequest $sdkRequest)
    {
        if (isset($this->httpHandler)) {
            $this->httpHandler->processRequest($sdkRequest);
        }
        $request = new Request($sdkRequest->method, $sdkRequest->url,
            $sdkRequest->headerParams, $sdkRequest->body);
        try {
            $httpOption = $this->createHttpClientOption($this->httpConfig);
            $promise = $this->client->sendAsync($request, $httpOption)->then(
                function ($response) use ($sdkRequest) {
                    if (isset($response->getHeaders()['Content-Length'])) {
                        $contentLength = $response->getHeaders()['Content-Length'][0];
                    } else {
                        $contentLength = 0;
                    }
                    if (isset($this->logger)) {
                        $this->logger->addInfo(' "'.$sdkRequest->method.' '.
                            $sdkRequest->url.'" '
                            .' '.$response->getStatusCode().' '.$contentLength
                            .' '.$response->getHeaders()['X-Request-Id'][0]);
                    }

                    return $response;
                },
                function (RequestException $e) use ($sdkRequest) {
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
                            $this->logger->addInfo(' "'.$sdkRequest->method.' '.
                                $sdkRequest->url.'" '
                                .' '.$response->getStatusCode().' '.$contentLength
                                .' '.$response->getHeaders()['X-Request-Id'][0]);
                        }
                        if (400 <= $responseStatusCode and
                            $responseStatusCode < 500) {
                            throw new ClientRequestException($responseStatusCode, $sdkError);
                        } else {
                            throw new ServerResponseException($responseStatusCode, $sdkError);
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
            $responseBodyArr = json_decode((string) $responseBody, true);
            if (isset($responseBodyArr['error_code']) and
                isset($responseBodyArr['error_msg'])) {
                $sdkError = new SdkErrorMessage($requestId,
                    $responseBodyArr['error_code'], $responseBodyArr['error_msg']);
            } elseif (isset($responseBodyArr['code']) and
                isset($responseBodyArr['message'])) {
                $sdkError = new SdkErrorMessage($requestId,
                    $responseBodyArr['code'], $responseBodyArr['message']);
            } else {
                foreach ($responseBodyArr as $key => $value) {
                    if (!is_array($responseBodyArr[$key])) {
                        return;
                    }
                    if (isset($responseBodyArr[$key]['code']) and
                        isset($responseBodyArr[$key]['message'])) {
                        $sdkError = new SdkErrorMessage($requestId,
                            $responseBodyArr[$key]['code'],
                            $responseBodyArr[$key]['message']);
                    } else {
                        $sdkError = new SdkErrorMessage($requestId,
                            $responseBodyArr[$key]['error_code'],
                            $responseBodyArr[$key]['error_msg']);
                    }
                }
            }
        } catch (\Exception $e) {
            throw new ServerResponseException($responseStatusCode, new
            SdkErrorMessage((string) $responseBody));
        }
        $sdkErrorMsg = $sdkError->getErrorMsg();
        if (!isset($sdkErrorMsg)) {
            $sdkError = new SdkErrorMessage((string) $responseBody);
        }

        return $sdkError;
    }

    private function getExceptionType($errorMessage)
    {
        $errorKey = explode(':', $errorMessage, 2)[0];
        $msg = explode(':', $errorMessage, 2)[1];
        echo "\n" . $errorMessage . "\n";
        switch ($errorKey) {
            case 'cURL error 6':
                if (isset($this->logger)) {
                    $this->logger->addError('HostUnreachableException occurred.'
                        .$msg);
                }
                throw new HostUnreachableException($msg);
                break;
            case 'cURL error 60':
                if (isset($this->logger)) {
                    $this->logger->addError('SslHandShakeException occurred.'
                        .$msg);
                }
                throw new SslHandShakeException($msg);
                break;
            case 'cURL error 28':
                if (isset($this->logger)) {
                    $this->logger->addError('CallTimeoutException occurred.'
                        .$msg);
                }
                throw new CallTimeoutException($msg);
                break;
            case 'cURL error 47':
                if (isset($this->logger)) {
                    $this->logger->addError('RetryOutageException occurred.'
                        .$msg);
                }
                throw new RetryOutageException($msg);
                break;
            default:
                if (isset($this->logger)) {
                    $this->logger->addError('SdkException occurred.'
                        .$msg);
                }
                throw new SdkException($errorMessage);
        }
    }
}
