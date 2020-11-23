<?php

namespace HuaweiCloud\SDK\Core\Exceptions;

class ServerResponseException extends ServiceResponseException
{
    public function __construct($httpStatusCode, SdkErrorMessage $sdkErrorMessage) {
        parent::__construct($httpStatusCode, $sdkErrorMessage);
    }
}