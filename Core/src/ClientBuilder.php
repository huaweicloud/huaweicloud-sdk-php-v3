<?php

namespace HuaweiCloud\SDK\Core;

use HuaweiCloud\SDK\Core\Auth\Credentials;
use Monolog\Logger;

class ClientBuilder
{
    private $httpConfig;
    private $credentials = null;
    private $endpoint;
    private $clientType;
    private $credential_type = Array();

    private $httpHandler = null;
    private $fileLoggerHandler = null;
    private $streamLoggerHandler = null;
    /**
     * ClientBuilder constructor.
     * @param $clientType
     * @param null $credential_type_name
     */
    public function __construct($clientType, $credential_type_name = null)
    {
        $this->clientType = $clientType;
        if(! isset($credential_type_namec)){
            $class_arr = explode('\\', Credentials::class);
            $this->credential_type = (array_slice($class_arr,-1));
        } else {
            $this->credential_type =  explode(' ', $credential_type_name);
        }
    }

    /**
     * @param mixed $httpConfig
     * @return ClientBuilder
     */
    public function withHttpConfig($httpConfig)
    {
        $this->httpConfig = $httpConfig;
        return $this;
    }

    /**
     * @param mixed $credentials
     * @return ClientBuilder
     */
    public function withCredentials($credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @param mixed $endpoint
     * @return ClientBuilder
     */
    public function withEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * @param null $httpHandler
     * @return ClientBuilder
     */
    public function withHttpHandler($httpHandler)
    {
        $this->httpHandler = $httpHandler;
        return $this;
    }

    /**
     * @param $logPath
     * @param int $logLevel
     * @param int $logMaxFiles
     * @param null $formatString
     * @return ClientBuilder
     */
    public function withFileLogger($logPath,
                                   $logLevel = Logger::INFO,
                                   $logMaxFiles = 5,
                                   $formatString = null
    ) {
        $this->fileLoggerHandler = array('logPath' => $logPath, 'logLevel' =>
            $logLevel, 'logMaxFiles' => $logMaxFiles, 'formatString' => $formatString);
        return $this;
    }

    /**
     * @param string $stream
     * @param int $logLevel
     * @param null $formatString
     * @return ClientBuilder
     */
    public function withStreamLogger($stream = 'php://stdout',
                                            $logLevel = Logger::INFO,
                                            $formatString = null
    ) {
        $this->streamLoggerHandler = array('stream' => $stream, 'logLevel' =>
            $logLevel, 'formatString' => $formatString);
        return $this;
    }
    public function build()
    {
        if ($this->credentials == null) {
            $this->credentials = Credentials::getCredentialFromEnvironment(
                $this->clientType, $this->credential_type[0]);
        }
        $client = $this->clientType
            ->withCredentials($this->credentials)
            ->withEndpoint($this->endpoint)
            ->withHttpConfig($this->httpConfig);
        if (isset($this->streamLoggerHandler)) {
            $client->addStreamLogger($this->streamLoggerHandler);
        }
        if (isset($this->fileLoggerHandler)) {
            $client->addFileLogger($this->fileLoggerHandler);
        }
        $client->initHttpClient();
        return $client;
    }
}