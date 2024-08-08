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

use HuaweiCloud\SDK\Core\Auth\Credentials;
use Monolog\Logger;
use HuaweiCloud\SDK\Core\Auth\BasicCredentials;
use HuaweiCloud\SDK\Core\Exceptions\SdkException;
use HuaweiCloud\SDK\Core\Utils\CommonUtils;

class ClientBuilder
{
    private $httpConfig;
    private $credentials = null;
    private $endpoint;
    private $clientType;
    private $credentialType = [];

    private $httpHandler = null;
    private $fileLoggerHandler = null;
    private $streamLoggerHandler = null;
    private $region = null;

    private $derivedAuthServiceName = null;

    /**
     * ClientBuilder constructor.
     *
     * @param $clientType
     * @param null $credentialTypeName
     */
    public function __construct($clientType, $credentialTypeName = null)
    {
        $this->clientType = $clientType;
        if (!isset($credentialTypeName)) {
            $class_arr = explode('\\', BasicCredentials::class);
            $this->credentialType = (array_slice($class_arr, -1));
        } else {
            $this->credentialType = explode(' ', $credentialTypeName);
        }
    }

    /**
     * @param mixed $httpConfig
     *
     * @return ClientBuilder
     */
    public function withHttpConfig($httpConfig)
    {
        $this->httpConfig = $httpConfig;

        return $this;
    }

    /**
     * @param mixed $credentials
     *
     * @return ClientBuilder
     */
    public function withCredentials($credentials)
    {
        $this->credentials = $credentials;

        return $this;
    }

    public function withDerivedAuthServiceName($derivedAuthServiceName) {
        $this->derivedAuthServiceName = $derivedAuthServiceName;

        return $this;
    }

    /**
     * @param mixed $endpoint
     *
     * @return ClientBuilder
     */
    public function withEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;

        return $this;
    }

    /**
     * @param null $httpHandler
     *
     * @return ClientBuilder
     */
    public function withHttpHandler($httpHandler)
    {
        $this->httpHandler = $httpHandler;

        return $this;
    }

    /**
     * @param mixed $region
     *
     * @return ClientBuilder
     */
    public function withRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * @param $logPath
     * @param int $logLevel
     * @param int $logMaxFiles
     * @param null $formatString
     *
     * @return ClientBuilder
     */
    public function withFileLogger($logPath,
                                   $logLevel = Logger::INFO,
                                   $logMaxFiles = 5,
                                   $formatString = null
    )
    {
        $this->fileLoggerHandler = ['logPath' => $logPath, 'logLevel' =>
            $logLevel, 'logMaxFiles' => $logMaxFiles, 'formatString' =>
            $formatString];

        return $this;
    }

    /**
     * @param string $stream
     * @param int $logLevel
     * @param null $formatString
     *
     * @return ClientBuilder
     */
    public function withStreamLogger($stream = 'php://stdout',
                                     $logLevel = Logger::INFO,
                                     $formatString = null
    )
    {
        $this->streamLoggerHandler = ['stream' => $stream, 'logLevel' =>
            $logLevel, 'formatString' => $formatString];

        return $this;
    }

    /**
     * @return array
     */
    public function getCredentialType()
    {
        return $this->credentialType;
    }
    
    public function build()
    {
        $credentialType = $this->credentialType[0];
        if (null == $this->credentials) {
            $this->credentials = Credentials::getCredentialFromEnvironment(
                $this->clientType, $credentialType);
        }
        try {
            $credentials = get_class($this->credentials);
            if (!CommonUtils::endsWith($credentials, $credentialType)) {
                throw new SdkException("the authentication type must is .$credentialType");
            }
        } catch (SdkException $e) {
            $msg = $e->getMessage();
            echo "\n" . $msg . "\n";
            exit();
        }
        $client = $this->clientType
            ->withCredentials($this->credentials)
            ->withEndpoint($this->endpoint)
            ->withHttpConfig($this->httpConfig)
            ->withHttpHandler($this->httpHandler);
        if (isset($this->streamLoggerHandler)) {
            $client->addStreamLogger($this->streamLoggerHandler);
        }
        if (isset($this->fileLoggerHandler)) {
            $client->addFileLogger($this->fileLoggerHandler);
        }
        $client->initHttpClient();
        $this->processRegion($client);
        return $client;
    }

    public function processRegion($client)
    {
        $region = $this->region;
        $credentials = $this->credentials;
        if (!empty($region)) {
            $this->endpoint = $region->getEndpoint();
            $credentials->processAuthParams($client, $region->getId());
            if ($this->credentials instanceof Credentials) {
                $this->credentials->processDerivedAuthParams($this->derivedAuthServiceName, $region->getId());
            }
        }
        if (!strpos($this->endpoint, "http") === 0) {
            $this->endPoint = "https://" . $this->endPoint;
        }
        $client->withEndpoint($this->endpoint);
    }
}
