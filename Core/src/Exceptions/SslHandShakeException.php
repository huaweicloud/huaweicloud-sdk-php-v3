<?php

namespace HuaweiCloud\SDK\Core\Exceptions;

class SslHandShakeException extends ConnectionException
{
    public function __construct($message, $code = 0, ConnectionException
    $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}