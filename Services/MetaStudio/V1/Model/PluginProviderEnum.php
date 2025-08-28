<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class PluginProviderEnum
{
    /**
     * Possible values of this enum
     */
    const AMAP_WEATHER = 'AMAP_WEATHER';
    const BOCHA = 'BOCHA';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AMAP_WEATHER,
            self::BOCHA,
        ];
    }
}

