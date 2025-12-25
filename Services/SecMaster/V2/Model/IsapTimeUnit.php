<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class IsapTimeUnit
{
    /**
     * Possible values of this enum
     */
    const MINUTE = 'MINUTE';
    const HOUR = 'HOUR';
    const DAY = 'DAY';
    const MONTH = 'MONTH';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MINUTE,
            self::HOUR,
            self::DAY,
            self::MONTH,
        ];
    }
}

