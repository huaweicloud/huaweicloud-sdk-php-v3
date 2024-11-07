<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class ConnectionBandwidthChargeModeEnum
{
    /**
     * Possible values of this enum
     */
    const BWD = 'bwd';
    const TRF = 'trf';
    const _95 = '95';
    const _95AVR = '95avr';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BWD,
            self::TRF,
            self::_95,
            self::_95AVR,
        ];
    }
}

