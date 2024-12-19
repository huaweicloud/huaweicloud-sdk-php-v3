<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class AddressFamily
{
    /**
     * Possible values of this enum
     */
    const IPV4 = 'ipv4';
    const IPV6 = 'ipv6';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::IPV4,
            self::IPV6,
        ];
    }
}

