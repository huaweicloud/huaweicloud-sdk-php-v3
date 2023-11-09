<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class ComponentCategory
{
    /**
     * Possible values of this enum
     */
    const WEBAPP = 'Webapp';
    const MICRO_SERVICE = 'MicroService';
    const COMMON = 'Common';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::WEBAPP,
            self::MICRO_SERVICE,
            self::COMMON,
        ];
    }
}

