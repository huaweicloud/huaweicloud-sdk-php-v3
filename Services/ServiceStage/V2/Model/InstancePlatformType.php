<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class InstancePlatformType
{
    /**
     * Possible values of this enum
     */
    const CCE = 'cce';
    const VMAPP = 'vmapp';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CCE,
            self::VMAPP,
        ];
    }
}

