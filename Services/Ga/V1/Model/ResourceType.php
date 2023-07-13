<?php

namespace HuaweiCloud\SDK\Ga\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class ResourceType
{
    /**
     * Possible values of this enum
     */
    const GA_ACCELERATORS = 'ga-accelerators';
    const GA_LISTENERS = 'ga-listeners';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GA_ACCELERATORS,
            self::GA_LISTENERS,
        ];
    }
}

