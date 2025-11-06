<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class Filter
{
    /**
     * Possible values of this enum
     */
    const AVERAGE = 'average';
    const VARIANCE = 'variance';
    const MIN = 'min';
    const MAX = 'max';
    const SUM = 'sum';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AVERAGE,
            self::VARIANCE,
            self::MIN,
            self::MAX,
            self::SUM,
        ];
    }
}

