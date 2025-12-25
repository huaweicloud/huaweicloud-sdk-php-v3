<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class FilterConnectionType
{
    /**
     * Possible values of this enum
     */
    const FILTER = 'FILTER';
    const INPUT = 'INPUT';
    const OUTPUT = 'OUTPUT';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FILTER,
            self::INPUT,
            self::OUTPUT,
        ];
    }
}

