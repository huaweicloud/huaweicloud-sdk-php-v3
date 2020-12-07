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

class HttpConfig
{
    public $proxyProtocol = '';
    public $proxyHost = '';
    public $proxyPort = '';
    public $proxyUser = '';
    public $proxyPassword = '';

    public $ignoreSslVerification = false;
    public $sslCaCert = '';
    public $certFile = '';

    public $keyFile = '';
    public $timeout = 10;
    public $connectTimeout = 10;
    public $poolConnections = 1;
    public $poolMaxsize = 1;

    /**
     * @return string
     */
    public function getProxyPort()
    {
        return $this->proxyPort;
    }

    public function setProxyPort(string $proxyPort)
    {
        $this->proxyPort = $proxyPort;
    }

    public function withProxyPort(string $proxyPort)
    {
        $this->proxyPort = $proxyPort;

        return $this;
    }

    /**
     * @return string
     */
    public function getProxyUser()
    {
        return $this->proxyUser;
    }

    public function setProxyUser(string $proxyUser)
    {
        $this->proxyUser = $proxyUser;
    }

    public function withProxyUser(string $proxyUser)
    {
        $this->proxyUser = $proxyUser;

        return $this;
    }

    /**
     * @return string
     */
    public function getProxyPassword()
    {
        return $this->proxyPassword;
    }

    public function setProxyPassword(string $proxyPassword)
    {
        $this->proxyPassword = $proxyPassword;
    }

    public function withProxyPassword(string $proxyPassword)
    {
        $this->proxyPassword = $proxyPassword;

        return $this;
    }

    /**
     * @return string
     */
    public function getSslCaCert()
    {
        return $this->sslCaCert;
    }

    public function setSslCaCert(string $sslCaCert)
    {
        $this->sslCaCert = $sslCaCert;
    }

    public function withSslCaCert(string $sslCaCert)
    {
        $this->sslCaCert = $sslCaCert;

        return $this;
    }

    /**
     * @return string
     */
    public function getCertFile()
    {
        return $this->certFile;
    }

    public function setCertFile(string $certFile)
    {
        $this->certFile = $certFile;
    }

    public function withCertFile(string $certFile)
    {
        $this->certFile = $certFile;

        return $this;
    }

    /**
     * @return string
     */
    public function getKeyFile()
    {
        return $this->keyFile;
    }

    public function setKeyFile(string $keyFile)
    {
        $this->keyFile = $keyFile;
    }

    public function withKeyFile(string $keyFile)
    {
        $this->keyFile = $keyFile;

        return $this;
    }

    /**
     * @return int
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     * @param int $timeout
     */
    public function setTimeout($timeout)
    {
        $this->timeout = $timeout;
    }

    public function withTimeout($timeout)
    {
        $this->timeout = $timeout;

        return $this;
    }

    /**
     * @return int
     */
    public function getConnectTimeout()
    {
        return $this->connectTimeout;
    }

    /**
     * @param int $connectTimeout
     */
    public function setConnectTimeout($connectTimeout)
    {
        $this->connectTimeout = $connectTimeout;
    }

    public function withConnectTimeout($connectTimeout)
    {
        $this->connectTimeout = $connectTimeout;

        return $this;
    }

    /**
     * @return int
     */
    public function getPoolConnections()
    {
        return $this->poolConnections;
    }

    /**
     * @param int $poolConnections
     */
    public function setPoolConnections($poolConnections)
    {
        $this->poolConnections = $poolConnections;
    }

    public function withPoolConnections($poolConnections)
    {
        $this->poolConnections = $poolConnections;

        return $this;
    }

    /**
     * @return int
     */
    public function getPoolMaxsize()
    {
        return $this->poolMaxsize;
    }

    /**
     * @param int $poolMaxsize
     */
    public function setPoolMaxsize($poolMaxsize)
    {
        $this->poolMaxsize = $poolMaxsize;
    }

    public function withPoolMaxsize($poolMaxsize)
    {
        $this->poolMaxsize = $poolMaxsize;

        return $this;
    }

    /**
     * @return string
     */
    public function getProxyProtocol()
    {
        return $this->proxyProtocol;
    }

    /**
     * @param string $proxyProtocol
     */
    public function setProxyProtocol($proxyProtocol)
    {
        $this->proxyProtocol = $proxyProtocol;
    }

    public function withProxyProtocol($proxyProtocol)
    {
        $this->proxyProtocol = $proxyProtocol;

        return $this;
    }

    /**
     * @return string
     */
    public function getProxyHost()
    {
        return $this->proxyHost;
    }

    /**
     * @param string $proxyHost
     */
    public function setProxyHost($proxyHost)
    {
        $this->proxyHost = $proxyHost;
    }

    public function withProxyHost($proxyHost)
    {
        $this->proxyHost = $proxyHost;

        return $this;
    }

    /**
     * @return bool
     */
    public function isIgnoreSslVerification()
    {
        return $this->ignoreSslVerification;
    }

    /**
     * @param bool $ignoreSslVerification
     */
    public function setIgnoreSslVerification($ignoreSslVerification)
    {
        $this->ignoreSslVerification = $ignoreSslVerification;
    }

    public function withIgnoreSslVerification($ignoreSslVerification)
    {
        $this->ignoreSslVerification = $ignoreSslVerification;

        return $this;
    }

    public function getProxy()
    {
        if (null != $this->proxyHost and null != $this->proxyUser and
            null != $this->proxyPort) {
            return ['https' => $this->proxyProtocol.'://'.
                $this->proxyUser.':'.
                $this->proxyPassword.'@'.$this->proxyHost.':'
                .$this->proxyPort, ];
        } elseif (null != $this->proxyHost and null != $this->proxyUser) {
            return ['https' => $this->proxyProtocol.'://'.
                $this->proxyUser.':'.$this->proxyPassword.'@'.
                $this->proxyHost, ];
        } elseif (null != $this->proxyHost and null != $this->proxyPort) {
            return ['https' => $this->proxyProtocol.'://'.
                $this->proxyHost.':'.$this->proxyPort, ];
        } elseif (null != $this->proxyHost) {
            return ['https' => $this->proxyProtocol.'://'.
                $this->proxyHost, ];
        } else {
            return [];
        }
    }

    public static function getDefaultConfig()
    {
        return new HttpConfig();
    }
}
