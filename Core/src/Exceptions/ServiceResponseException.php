<?php

namespace HuaweiCloud\SDK\Core\Exceptions;

class ServiceResponseException extends SdkException
{
    private $httpStatusCode = '';
    private $errorMsg = '';
    private $errorCode = '';
    private $requestId = '';

    public function __construct(string $httpStatusCode,
                                SdkErrorMessage $sdkErrorMessage = null
    ) {
        $this->httpStatusCode = $httpStatusCode;
        $this->errorMsg = $sdkErrorMessage->getErrorMsg();
        $this->errorCode = $sdkErrorMessage->getErrorCode();
        $this->requestId = $sdkErrorMessage->getRequestId();
    }

    /**
     * @return string
     */
    public function getHttpStatusCode()
    {
        return $this->httpStatusCode;
    }

    /**
     * @param string $httpStatusCode
     */
    public function setHttpStatusCode(string $httpStatusCode)
    {
        $this->httpStatusCode = $httpStatusCode;
    }

    /**
     * @return string
     */
    public function getErrorMsg()
    {
        return $this->errorMsg;
    }

    /**
     * @param string $errorMsg
     */
    public function setErrorMsg(string $errorMsg)
    {
        $this->errorMsg = $errorMsg;
    }

    /**
     * @return string
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * @param string $errorCode
     */
    public function setErrorCode(string $errorCode)
    {
        $this->errorCode = $errorCode;
    }

    /**
     * @return string
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * @param string $requestId
     */
    public function setRequestId(string $requestId)
    {
        $this->requestId = $requestId;
    }

}