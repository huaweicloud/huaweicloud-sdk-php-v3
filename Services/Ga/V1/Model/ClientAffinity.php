<?php

namespace HuaweiCloud\SDK\Ga\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class ClientAffinity
{
    /**
     * Possible values of this enum
     */
    const SOURCE_IP = 'SOURCE_IP';
    const NONE = 'NONE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SOURCE_IP,
            self::NONE,
        ];
    }
}

