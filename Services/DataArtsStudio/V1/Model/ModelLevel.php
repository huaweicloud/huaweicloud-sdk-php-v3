<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class ModelLevel
{
    /**
     * Possible values of this enum
     */
    const SDI = 'SDI';
    const DWI = 'DWI';
    const DWR = 'DWR';
    const DM = 'DM';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SDI,
            self::DWI,
            self::DWR,
            self::DM,
        ];
    }
}

