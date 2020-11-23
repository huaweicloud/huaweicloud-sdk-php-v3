<?php

namespace HuaweiCloud\SDK\Core;
trait SdkResponse
{
    private $statusCode;
    private $headerParams;
    private $body;

    /**
     * SdkResponse constructor.
     * @param $statusCode
     * @param $headerParams
     * @param $body
     */
    public function __construct($statusCode=null, $headerParams=null, $body=null)
    {
        $this->statusCode = $statusCode;
        $this->headerParams = $headerParams;
        $this->body = $body;
    }

    /**
     * @return mixed
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param mixed $statusCode
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
    }

    /**
     * @return mixed
     */
    public function getHeaderParams()
    {
        return $this->headerParams;
    }

    /**
     * @param mixed $headerParams
     */
    public function setHeaderParams($headerParams)
    {
        $this->headerParams = $headerParams;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }
}