<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class ConnectionType
{
    /**
     * Possible values of this enum
     */
    const WEBHOOK = 'WEBHOOK';
    const KAFKA = 'KAFKA';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::WEBHOOK,
            self::KAFKA,
        ];
    }
}

