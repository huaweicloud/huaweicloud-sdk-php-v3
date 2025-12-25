<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class DataLayering
{
    /**
     * Possible values of this enum
     */
    const ODS = 'ODS';
    const DWS = 'DWS';
    const ADS = 'ADS';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ODS,
            self::DWS,
            self::ADS,
        ];
    }
}

