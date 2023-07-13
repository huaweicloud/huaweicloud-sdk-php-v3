<?php

namespace HuaweiCloud\SDK\Live\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class VideoFormatVar
{
    /**
     * Possible values of this enum
     */
    const FLV = 'FLV';
    const HLS = 'HLS';
    const MP4 = 'MP4';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FLV,
            self::HLS,
            self::MP4,
        ];
    }
}

