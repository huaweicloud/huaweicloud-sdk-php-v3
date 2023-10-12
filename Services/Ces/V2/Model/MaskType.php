<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class MaskType
{
    /**
     * Possible values of this enum
     */
    const START_END_TIME = 'START_END_TIME';
    const FOREVER_TIME = 'FOREVER_TIME';
    const CYCLE_TIME = 'CYCLE_TIME';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::START_END_TIME,
            self::FOREVER_TIME,
            self::CYCLE_TIME,
        ];
    }
}

