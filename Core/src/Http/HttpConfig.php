<?php

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

    /**
     * @param string $proxyPort
     */
    public function setProxyPort($proxyPort)
    {
        $this->proxyPort = $proxyPort;
    }

    public function withProxyPort($proxyPort)
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

    /**
     * @param string $proxyUser
     */
    public function setProxyUser($proxyUser)
    {
        $this->proxyUser = $proxyUser;
    }

    public function withProxyUser($proxyUser)
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

    /**
     * @param string $proxyPassword
     */
    public function setProxyPassword($proxyPassword)
    {
        $this->proxyPassword = $proxyPassword;
    }

    public function withProxyPassword($proxyPassword)
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

    /**
     * @param string $sslCaCert
     */
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

    /**
     * @param string $certFile
     */
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

    /**
     * @param string $keyFile
     */
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
    public function getProxy(){
        if ($this->proxyHost != null and $this->proxyUser != null and
            $this->proxyPort != null) {
            return array('https' => $this->proxyProtocol . '://'.
                $this->proxyUser .':'.
                $this->proxyPassword .'@'. $this->proxyHost . ':'
                .$this->proxyPort);
        } elseif ($this->proxyHost != null and $this->proxyUser != null) {
            return array('https' => $this->proxyProtocol . '://'.
                $this->proxyUser . ':'. $this->proxyPassword .'@'.
                $this->proxyHost);
        } elseif ($this->proxyHost != null and $this->proxyPort != null) {
            return array('https' => $this->proxyProtocol . '://'.
                $this->proxyHost . ':' . $this->proxyPort);
        } elseif ($this->proxyHost != null) {
            return array('https' => $this->proxyProtocol . '://'.
                $this->proxyHost);
        } else {
            return array();
        }
    }

    public static function getDefaultConfig()
    {
        return new HttpConfig();
    }

}