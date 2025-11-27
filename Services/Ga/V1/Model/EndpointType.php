<?php

namespace HuaweiCloud\SDK\Ga\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class EndpointType
{
    /**
     * Possible values of this enum
     */
    const EIP = 'EIP';
    const ECS = 'ECS';
    const ELB = 'ELB';
    const CUSTOM_IP = 'CUSTOM_IP';
    const CUSTOM_DOMAIN_NAME = 'CUSTOM_DOMAIN_NAME';
    const CUSTOM_EIP = 'CUSTOM_EIP';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::EIP,
            self::ECS,
            self::ELB,
            self::CUSTOM_IP,
            self::CUSTOM_DOMAIN_NAME,
            self::CUSTOM_EIP,
        ];
    }
}

