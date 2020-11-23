<?php

namespace HuaweiCloud\SDK\Core\Exceptions;

class CallTimeoutException extends RequestTimeoutException
{
    public function __construct($message, $code = 0, RequestTimeoutException $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}