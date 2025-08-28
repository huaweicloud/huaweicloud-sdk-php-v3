<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class PluginTypeEnum
{
    /**
     * Possible values of this enum
     */
    const WEATHER_QUERY = 'WEATHER_QUERY';
    const WEB_SEARCH = 'WEB_SEARCH';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::WEATHER_QUERY,
            self::WEB_SEARCH,
        ];
    }
}

