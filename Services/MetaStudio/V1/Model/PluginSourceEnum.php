<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class PluginSourceEnum
{
    /**
     * Possible values of this enum
     */
    const PLUGIN_CONFIG = 'PLUGIN_CONFIG';
    const _DEFAULT = 'DEFAULT';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PLUGIN_CONFIG,
            self::_DEFAULT,
        ];
    }
}

