<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class RollupFilter
{
    /**
     * Possible values of this enum
     */
    const LAST = 'last';
    const MAX = 'max';
    const MIN = 'min';
    const AVERAGE = 'average';
    const SUM = 'sum';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::LAST,
            self::MAX,
            self::MIN,
            self::AVERAGE,
            self::SUM,
        ];
    }
}

