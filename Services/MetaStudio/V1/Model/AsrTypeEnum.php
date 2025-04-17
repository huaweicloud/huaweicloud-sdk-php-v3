<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class AsrTypeEnum
{
    /**
     * Possible values of this enum
     */
    const EI_SIS = 'EI_SIS';
    const MOBVOI = 'MOBVOI';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::EI_SIS,
            self::MOBVOI,
        ];
    }
}

