<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class JobType
{
    /**
     * Possible values of this enum
     */
    const BASIC = 'BASIC';
    const MIDDLE = 'MIDDLE';
    const ADVANCE = 'ADVANCE';
    const THIRD_PARTY = 'THIRD_PARTY';
    const THIRD_PARTY_LJZN = 'THIRD_PARTY_LJZN';
    const FLEXUS = 'FLEXUS';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BASIC,
            self::MIDDLE,
            self::ADVANCE,
            self::THIRD_PARTY,
            self::THIRD_PARTY_LJZN,
            self::FLEXUS,
        ];
    }
}

