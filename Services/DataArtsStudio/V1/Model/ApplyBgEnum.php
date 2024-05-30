<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class ApplyBgEnum
{
    /**
     * Possible values of this enum
     */
    const CLOUD_BU = 'CLOUD_BU';
    const BG1 = 'BG1';
    const BG2 = 'BG2';
    const BG3 = 'BG3';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CLOUD_BU,
            self::BG1,
            self::BG2,
            self::BG3,
        ];
    }
}

