<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class CrossRegionTypeEnum
{
    /**
     * Possible values of this enum
     */
    const INTRA_REGION = 'intra-region';
    const INTER_REGION = 'inter-region';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INTRA_REGION,
            self::INTER_REGION,
        ];
    }
}

