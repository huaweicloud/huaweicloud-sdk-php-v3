<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class OrganizationalUnitTypeForSetup
{
    /**
     * Possible values of this enum
     */
    const CORE = 'CORE';
    const CUSTOM = 'CUSTOM';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CORE,
            self::CUSTOM,
        ];
    }
}

