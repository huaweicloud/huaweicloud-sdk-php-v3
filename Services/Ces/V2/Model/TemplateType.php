<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class TemplateType
{
    /**
     * Possible values of this enum
     */
    const SYSTEM = 'system';
    const CUSTOM = 'custom';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SYSTEM,
            self::CUSTOM,
        ];
    }
}

