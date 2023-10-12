<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class MaskStatus
{
    /**
     * Possible values of this enum
     */
    const UN_MASKED = 'UN_MASKED';
    const MASK_EFFECTIVE = 'MASK_EFFECTIVE';
    const MASK_INEFFECTIVE = 'MASK_INEFFECTIVE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UN_MASKED,
            self::MASK_EFFECTIVE,
            self::MASK_INEFFECTIVE,
        ];
    }
}

