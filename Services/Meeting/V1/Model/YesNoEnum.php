<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class YesNoEnum
{
    /**
     * Possible values of this enum
     */
    const Y = 'Y';
    const N = 'N';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::Y,
            self::N,
        ];
    }
}

