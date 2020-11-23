<?php

namespace HuaweiCloud\SDK\Core\Exceptions;

class SdkErrorMessage
{
    private $requestId = '';
    private $errorCode = '';
    private $errorMsg = '';

    /**
     * SdkErrorMessage constructor.
     * @param string $requestId
     * @param string $errorCode
     * @param string $errorMsg
     */
    public function __construct(string $requestId = null,
                                string $errorCode = null,
                                string $errorMsg= null
    ) {
        $this->requestId = $requestId;
        $this->errorCode = $errorCode;
        $this->errorMsg = $errorMsg;
    }

    /**
     * @return string
     */
    public function getErrorMsg(): string
    {
        return $this->errorMsg;
    }

    /**
     * @param string $errorMsg
     */
    public function setErrorMsg(string $errorMsg): void
    {
        $this->errorMsg = $errorMsg;
    }

    /**
     * @return string
     */
    public function getErrorCode(): string
    {
        return $this->errorCode;
    }

    /**
     * @param string $errorCode
     */
    public function setErrorCode(string $errorCode): void
    {
        $this->errorCode = $errorCode;
    }

    /**
     * @return string
     */
    public function getRequestId(): string
    {
        return $this->requestId;
    }

    /**
     * @param string $requestId
     */
    public function setRequestId(string $requestId): void
    {
        $this->requestId = $requestId;
    }
}