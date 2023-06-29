<?php

namespace HuaweiCloud\SDK\Ga\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class ListenerAccessControlType
{
    /**
     * Possible values of this enum
     */
    const BLACK = 'BLACK';
    const WHITE = 'WHITE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BLACK,
            self::WHITE,
        ];
    }
}

