<?php

namespace HuaweiCloud\SDK\Core\Exceptions;

class RequestTimeoutException extends SdkException
{
    public function __construct($message, $code = 0, SdkException $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}