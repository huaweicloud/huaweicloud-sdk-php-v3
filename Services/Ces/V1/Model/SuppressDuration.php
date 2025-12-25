<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class SuppressDuration
{
    /**
     * Possible values of this enum
     */
    const 0 = 0;
    const 300 = 300;
    const 600 = 600;
    const 900 = 900;
    const 1800 = 1800;
    const 3600 = 3600;
    const 10800 = 10800;
    const 21600 = 21600;
    const 43200 = 43200;
    const 86400 = 86400;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::0,
            self::300,
            self::600,
            self::900,
            self::1800,
            self::3600,
            self::10800,
            self::21600,
            self::43200,
            self::86400,
        ];
    }
}

