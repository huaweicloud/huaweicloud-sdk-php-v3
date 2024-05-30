<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class EnvTypeEnum
{
    /**
     * Possible values of this enum
     */
    const INVALID_TYPE = 'INVALID_TYPE';
    const DEV_TYPE = 'DEV_TYPE';
    const PROD_TYPE = 'PROD_TYPE';
    const DEV_PROD_TYPE = 'DEV_PROD_TYPE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INVALID_TYPE,
            self::DEV_TYPE,
            self::PROD_TYPE,
            self::DEV_PROD_TYPE,
        ];
    }
}

