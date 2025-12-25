<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class SkuEnum
{
    /**
     * Possible values of this enum
     */
    const FLOW_DATA_BANDWIDTH = 'FLOW_DATA_BANDWIDTH';
    const CSS_CAPACITY = 'CSS_CAPACITY';
    const PAIMON_CAPACITY = 'PAIMON_CAPACITY';
    const OBS_CAPACITY = 'OBS_CAPACITY';
    const JOB_CAPACITY = 'JOB_CAPACITY';
    const AD_HOC_COUNT = 'AD_HOC_COUNT';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FLOW_DATA_BANDWIDTH,
            self::CSS_CAPACITY,
            self::PAIMON_CAPACITY,
            self::OBS_CAPACITY,
            self::JOB_CAPACITY,
            self::AD_HOC_COUNT,
        ];
    }
}

