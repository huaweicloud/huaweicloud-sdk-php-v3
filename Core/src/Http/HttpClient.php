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
use HuaweiCloud\SDK\Core\Exceptions\ConnectionException;
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

    const X_REQUEST_ID = "X-Request-Id";
    const X_REQUEST_ID_LOWER = "x-request-id";

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

        // redirect
        $redirectOption = ['allow_redirects' => $config->allowRedirect];

        return array_merge($httpOption, $proxyOption, $sslOption, $timeOption, $redirectOption);
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
                $requestId = $this->parseRequestId($response);
                $responseBody = $response->getBody();
                $sdkError = $this->getSdkErrorMessage($requestId,
                    $responseBody, $responseStatusCode);
                $this->recordRequestIdToLog($sdkRequest, $response);
                if (400 <= $responseStatusCode and $responseStatusCode < 500) {
                    throw new ClientRequestException($responseStatusCode, $sdkError);
                } else {
                    throw new ServerResponseException($responseStatusCode, $sdkError);
                }
            } else {
                $this->parseExceptionType($e->getMessage());
            }
        }
        $this->recordRequestIdToLog($sdkRequest, $response);
        return $response;
    }

    private function getFirstIdFromArray($headers, $key) {
        $requestKeys = $headers[$key];
        if (count($requestKeys) < 1) {
            return '';
        }
        return $requestKeys[0];
    }

    /**
     * @param $response http response
     * @return mixed|string request id from response header
     */
    public function parseRequestId($response) {
        if ($response->hasHeader(self::X_REQUEST_ID)) {
            $headers = $response->getHeaders();
            if (array_key_exists(self::X_REQUEST_ID, $headers)) {
                return $this->getFirstIdFromArray($headers, self::X_REQUEST_ID);
            }
            if (array_key_exists(self::X_REQUEST_ID_LOWER, $headers)) {
                return $this->getFirstIdFromArray($headers, self::X_REQUEST_ID_LOWER);
            }
            return '';
        }
        // parse requestId from other key
        $requestKeys = array_filter(array_keys($response->getHeaders()), function ($key){
            return preg_match('/^x-([a-zA-z\-]+)?request-id$/', (string) $key);
        });
        $requestKey = array_shift($requestKeys);
        return $requestKey != null && isset($response->getHeaders()[$requestKey]) ?
            $response->getHeaders()[$requestKey][0] : '';
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
                    $this->recordRequestIdToLog($sdkRequest, $response);
                    return $response;
                },
                function (RequestException $e) use ($sdkRequest) {
                    if ($e->hasResponse()) {
                        $response = $e->getResponse();
                        $responseStatusCode = $response->getStatusCode();
                        $requestId = $this->parseRequestId($response);
                        $responseBody = $response->getBody();
                        $sdkError = $this->getSdkErrorMessage($requestId,
                            $responseBody, $responseStatusCode);
                        $this->recordRequestIdToLog($sdkRequest, $response);
                        if (400 <= $responseStatusCode and
                            $responseStatusCode < 500) {
                            throw new ClientRequestException($responseStatusCode, $sdkError);
                        } else {
                            throw new ServerResponseException($responseStatusCode, $sdkError);
                        }
                    } else {
                        $this->parseExceptionType($e->getMessage());
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
        try {
            $responseBodyArr = json_decode((string) $responseBody, true);
            if ($responseBodyArr == null) {
                // ��Ӧ�岻��json��ʽ���ݵ����������json_decode����������$responseBodyArr��null,
                // ��ʱȡ״̬����Ϊ������, ��Ӧbodyֱ����Ϊ������Ϣ����
                return new SdkErrorMessage($requestId, $responseStatusCode, $responseBody);
            }
            if (isset($responseBodyArr['error_code']) and
                isset($responseBodyArr['error_msg'])) {
                $sdkError = new SdkErrorMessage($requestId,
                    $responseBodyArr['error_code'], $responseBodyArr['error_msg']);
            } elseif (isset($responseBodyArr['code']) and
                isset($responseBodyArr['message'])) {
                $sdkError = new SdkErrorMessage($requestId,
                    $responseBodyArr['code'], $responseBodyArr['message']);
            } elseif (isset($responseBodyArr['errorCode']) and
                isset($responseBodyArr['message'])) {
                $sdkError = new SdkErrorMessage($requestId,
                    $responseBodyArr['errorCode'], $responseBodyArr['message']);
            } else {
                $sdkError = $this->handleSdkErrorForArrayBody($requestId, $responseBodyArr);
            }
        } catch (\Exception $e) {
            throw new ServerResponseException($responseStatusCode, new
            SdkErrorMessage((string) $responseBody));
        }
        // if can not get error code and error msg from body, should set the whole response body to error message
        $sdkErrorMsg = $sdkError->getErrorMsg();
        if (!isset($sdkErrorMsg)) {
            $sdkError = new SdkErrorMessage((string) $responseBody);
        }
        return $sdkError;
    }

    private function handleSdkErrorForArrayBody($requestId, $responseBodyArr) {
        // should parse response body to find error code and error message
        $sdkError = new SdkErrorMessage();
        foreach ($responseBodyArr as $key => $value) {
            if (!is_array($responseBodyArr[$key])) {
                continue;
            }
            if (isset($responseBodyArr[$key]['code']) and
                isset($responseBodyArr[$key]['message'])) {
                $sdkError = new SdkErrorMessage($requestId,
                    $responseBodyArr[$key]['code'],
                    $responseBodyArr[$key]['message']);
            } elseif (isset($responseBodyArr[$key]['code']) and
                isset($responseBodyArr[$key]['details'])) {
                $sdkError = new SdkErrorMessage($requestId,
                    $responseBodyArr[$key]['code'],
                    $responseBodyArr[$key]['details']);
            } else if (isset($responseBodyArr[$key]['error_code']) and
                isset($responseBodyArr[$key]['error_msg'])) {
                $sdkError = new SdkErrorMessage($requestId,
                    $responseBodyArr[$key]['error_code'],
                    $responseBodyArr[$key]['error_msg']);
            } else if (isset($responseBodyArr[$key]['errorCode']) and
                isset($responseBodyArr[$key]['message'])) {
                // the 400 response for mrs should return errorCode and message
                $sdkError = new SdkErrorMessage($requestId,
                    $responseBodyArr[$key]['errorCode'],
                    $responseBodyArr[$key]['message']);
            } else if (sizeof($responseBodyArr[$key]) >= 1) {
                // if there are many errors, use the first error to generate sdk error which will published to user
                $sdkError = $this->parseErrorCodeAndMessageFromFirstArrayElem($responseBodyArr, $key, $requestId);
            }
        }
        return $sdkError;
    }

    private function parseExceptionType($errorMessage)
    {
        $errorKey = explode(':', $errorMessage, 2)[0];
        $msg = explode(':', $errorMessage, 2)[1];
        echo "\n" . $errorMessage . "\n";
        switch ($errorKey) {
            case 'cURL error 6':
                if (isset($this->logger)) {
                    $this->logger->error('HostUnreachableException occurred.'
                        .$msg);
                }
                throw new HostUnreachableException($msg);
            case 'cURL error 60':
                if (isset($this->logger)) {
                    $this->logger->error('SslHandShakeException occurred.'
                        .$msg);
                }
                throw new SslHandShakeException($msg);
            case 'cURL error 28':
                if (isset($this->logger)) {
                    $this->logger->error('CallTimeoutException occurred.'
                        .$msg);
                }
                throw new CallTimeoutException($msg);
            case 'cURL error 47':
                if (isset($this->logger)) {
                    $this->logger->error('RetryOutageException occurred.'
                        .$msg);
                }
                throw new RetryOutageException($msg);
            case 'CURL error 55':
                // should handle error for reset by peer, throw connection exception
                if (isset($this->logger)) {
                    $this->logger->error('reset by server error occurred.'
                        .$msg);
                }
                throw new ConnectionException($msg, 504, null);
            default:
                if (isset($this->logger)) {
                    $this->logger->error('SdkException occurred.'
                        .$msg);
                }
                throw new SdkException($errorMessage);
        }
    }

    /**
     * @param $response the http response
     * @return int|mixed content length of the response body
     */
    public function getContentLength($response)
    {
        if (!isset($response->getHeaders()['Content-Length'])) {
            return 0;
        }
        return $response->getHeaders()['Content-Length'][0];
    }

    /**
     * @param $responseBodyArr the response body
     * @param $requestId the request id in the response header
     * @return SdkErrorMessage sdk error message object
     */
    private function parseErrorCodeAndMessageFromFirstArrayElem($responseBodyArr, $key, $requestId)
    {
        $firstError = $responseBodyArr[$key][0];
        $sdkError = new SdkErrorMessage();
        if (isset($firstError["error_code"]) && isset($firstError['error_msg'])) {
            $sdkError = new SdkErrorMessage($requestId,
                $firstError['error_code'], $firstError['error_msg']);
        } else if (isset($firstError["errorCode"]) && isset($firstError['message'])) {
            $sdkError = new SdkErrorMessage($requestId,
                $firstError['error_code'], $firstError['error_msg']);
        }
        return $sdkError;
    }

    /**
     * @param $response the http response
     * @param $sdkRequest the http request
     */
    private function recordRequestIdToLog($sdkRequest, $response)
    {
        $contentLength = $this->getContentLength($response);
        $requestId = $this->parseRequestId($response);
        if (isset($this->logger)) {
            $this->logger->info(' "'.$sdkRequest->method.' '.
                $sdkRequest->url.'" '
                .' '.$response->getStatusCode().' '.$contentLength
                .' '.$requestId);
        }
    }
}
