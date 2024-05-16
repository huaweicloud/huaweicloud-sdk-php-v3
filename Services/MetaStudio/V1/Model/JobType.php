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
    const LLM_MAJOR = 'LLM_MAJOR';
    const LLM_MINOR = 'LLM_MINOR';
    const BASIC = 'BASIC';
    const MIDDLE = 'MIDDLE';
    const ADVANCE = 'ADVANCE';
    const THIRD_PARTY = 'THIRD_PARTY';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::LLM_MAJOR,
            self::LLM_MINOR,
            self::BASIC,
            self::MIDDLE,
            self::ADVANCE,
            self::THIRD_PARTY,
        ];
    }
}

