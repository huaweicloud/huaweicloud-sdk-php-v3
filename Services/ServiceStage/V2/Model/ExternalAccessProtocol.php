<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class ExternalAccessProtocol
{
    /**
     * Possible values of this enum
     */
    const HTTP = 'HTTP';
    const HTTPS = 'HTTPS';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::HTTP,
            self::HTTPS,
        ];
    }
}

