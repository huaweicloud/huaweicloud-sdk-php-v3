<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class LayerType
{
    /**
     * Possible values of this enum
     */
    const THIRD_NF = 'THIRD_NF';
    const DIMENSION = 'DIMENSION';
    const DM = 'DM';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::THIRD_NF,
            self::DIMENSION,
            self::DM,
        ];
    }
}

