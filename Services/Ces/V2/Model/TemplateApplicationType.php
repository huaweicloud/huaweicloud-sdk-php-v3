<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class TemplateApplicationType
{
    /**
     * Possible values of this enum
     */
    const ALL_DIMENSION = 'ALL_DIMENSION';
    const ONE_DIMENSION = 'ONE_DIMENSION';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ALL_DIMENSION,
            self::ONE_DIMENSION,
        ];
    }
}

