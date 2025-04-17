<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class MaskResourceType
{
    /**
     * Possible values of this enum
     */
    const ALL_INSTANCE = 'ALL_INSTANCE';
    const MULTI_INSTANCE = 'MULTI_INSTANCE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ALL_INSTANCE,
            self::MULTI_INSTANCE,
        ];
    }
}

