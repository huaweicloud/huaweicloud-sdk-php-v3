<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class ComponentSubCategory
{
    /**
     * Possible values of this enum
     */
    const WEB = 'Web';
    const MAGENTO = 'Magento';
    const WORDPRESS = 'Wordpress';
    const SPRING_CLOUD = 'SpringCloud';
    const JAVA_CHASSIS = 'Java Chassis';
    const GO_CHASSIS = 'Go Chassis';
    const MESHER = 'Mesher';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::WEB,
            self::MAGENTO,
            self::WORDPRESS,
            self::SPRING_CLOUD,
            self::JAVA_CHASSIS,
            self::GO_CHASSIS,
            self::MESHER,
        ];
    }
}

