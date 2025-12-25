<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class BatchPeriod
{
    /**
     * Possible values of this enum
     */
    const _1 = '1';
    const _60 = '60';
    const _300 = '300';
    const _1200 = '1200';
    const _3600 = '3600';
    const _14400 = '14400';
    const _86400 = '86400';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_1,
            self::_60,
            self::_300,
            self::_1200,
            self::_3600,
            self::_14400,
            self::_86400,
        ];
    }
}

