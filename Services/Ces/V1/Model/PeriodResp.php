<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class PeriodResp
{
    /**
     * Possible values of this enum
     */
    const 0 = 0;
    const 1 = 1;
    const 300 = 300;
    const 1200 = 1200;
    const 3600 = 3600;
    const 14400 = 14400;
    const 86400 = 86400;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::0,
            self::1,
            self::300,
            self::1200,
            self::3600,
            self::14400,
            self::86400,
        ];
    }
}

