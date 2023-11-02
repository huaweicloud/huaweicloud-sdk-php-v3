<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class RelationType
{
    /**
     * Possible values of this enum
     */
    const ONE = 'ONE';
    const ZERO_OR_ONE = 'ZERO_OR_ONE';
    const ZERO_OR_N = 'ZERO_OR_N';
    const ONE_OR_N = 'ONE_OR_N';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ONE,
            self::ZERO_OR_ONE,
            self::ZERO_OR_N,
            self::ONE_OR_N,
        ];
    }
}

