<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class NodeHealthStatus
{
    /**
     * Possible values of this enum
     */
    const NORMAL = 'NORMAL';
    const ANOMALIES = 'ANOMALIES';
    const FAULTS = 'FAULTS';
    const LOST_CONTACT = 'LOST_CONTACT';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NORMAL,
            self::ANOMALIES,
            self::FAULTS,
            self::LOST_CONTACT,
        ];
    }
}

