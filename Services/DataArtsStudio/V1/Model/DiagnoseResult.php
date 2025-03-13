<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class DiagnoseResult
{
    /**
     * Possible values of this enum
     */
    const NO_RISK = 'NO_RISK';
    const MEDIUM_RISK = 'MEDIUM_RISK';
    const HIGH_RISK = 'HIGH_RISK';
    const NOT_SCANNED = 'NOT_SCANNED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NO_RISK,
            self::MEDIUM_RISK,
            self::HIGH_RISK,
            self::NOT_SCANNED,
        ];
    }
}

