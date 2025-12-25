<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class VpcServiceType
{
    /**
     * Possible values of this enum
     */
    const MANAGE = 'MANAGE';
    const DATA = 'DATA';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MANAGE,
            self::DATA,
        ];
    }
}

