<?php


namespace HuaweiCloud\SDK\Core\Exceptions;

class ClientRequestException extends ServiceResponseException
{
    public function __construct($httpStatusCode, SdkErrorMessage $sdkErrorMessage) {
        parent::__construct($httpStatusCode, $sdkErrorMessage);
    }
}