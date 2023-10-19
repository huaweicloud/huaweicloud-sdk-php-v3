<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class BandwidthTypeEnum
{
    /**
     * Possible values of this enum
     */
    const BANDWIDTH_PACKAGE = 'BandwidthPackage';
    const TEST_BANDWIDTH = 'TestBandwidth';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BANDWIDTH_PACKAGE,
            self::TEST_BANDWIDTH,
        ];
    }
}

