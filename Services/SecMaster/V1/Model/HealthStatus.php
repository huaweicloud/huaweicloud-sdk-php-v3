<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class HealthStatus
{
    /**
     * Possible values of this enum
     */
    const SUCCESS_PART = 'SUCCESS_PART';
    const SUCCESS_ALL = 'SUCCESS_ALL';
    const SUCCESS_NO = 'SUCCESS_NO';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SUCCESS_PART,
            self::SUCCESS_ALL,
            self::SUCCESS_NO,
        ];
    }
}

