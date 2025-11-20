<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class NotificationMode
{
    /**
     * Possible values of this enum
     */
    const _1 = '1';
    const _2 = '2';
    const _3 = '3';
    const _4 = '4';
    const _5 = '5';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_1,
            self::_2,
            self::_3,
            self::_4,
            self::_5,
        ];
    }
}

