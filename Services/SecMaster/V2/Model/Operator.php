<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class Operator
{
    /**
     * Possible values of this enum
     */
    const GT = 'GT';
    const LT = 'LT';
    const EQ = 'EQ';
    const NE = 'NE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GT,
            self::LT,
            self::EQ,
            self::NE,
        ];
    }
}

