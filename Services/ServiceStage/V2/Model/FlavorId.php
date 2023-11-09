<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class FlavorId
{
    /**
     * Possible values of this enum
     */
    const MICRO_5_G0_5_C1_G = 'MICRO-5G:0.5C:1G';
    const SMALL_10_G1_0_C2_G = 'SMALL-10G:1.0C:2G';
    const STANDARD_30_G2_0_C4_G = 'STANDARD-30G:2.0C:4G';
    const LARGE_50_G4_0_C8_G = 'LARGE-50G:4.0C:8G';
    const XLARGE_100_G4_0_C16_G = 'XLARGE-100G:4.0C:16G';
    const CUSTOM_XGX_XX_X = 'CUSTOM-XG:X-X:X-X';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MICRO_5_G0_5_C1_G,
            self::SMALL_10_G1_0_C2_G,
            self::STANDARD_30_G2_0_C4_G,
            self::LARGE_50_G4_0_C8_G,
            self::XLARGE_100_G4_0_C16_G,
            self::CUSTOM_XGX_XX_X,
        ];
    }
}

