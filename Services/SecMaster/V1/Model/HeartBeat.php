<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class HeartBeat
{
    /**
     * Possible values of this enum
     */
    const ONLINE = 'ONLINE';
    const OFFLINE = 'OFFLINE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ONLINE,
            self::OFFLINE,
        ];
    }
}

