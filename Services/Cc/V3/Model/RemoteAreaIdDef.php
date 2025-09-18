<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class RemoteAreaIdDef
{
    /**
     * Possible values of this enum
     */
    const CHINESE_MAINLAND = 'Chinese-Mainland';
    const ASIA_PACIFIC = 'Asia-Pacific';
    const AFRICA = 'Africa';
    const WESTERN_LATIN_AMERICA = 'Western-Latin-America';
    const EASTERN_LATIN_AMERICA = 'Eastern-Latin-America';
    const NORTHERN_LATIN_AMERICA = 'Northern-Latin-America';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CHINESE_MAINLAND,
            self::ASIA_PACIFIC,
            self::AFRICA,
            self::WESTERN_LATIN_AMERICA,
            self::EASTERN_LATIN_AMERICA,
            self::NORTHERN_LATIN_AMERICA,
        ];
    }
}

