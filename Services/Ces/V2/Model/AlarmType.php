<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class AlarmType
{
    /**
     * Possible values of this enum
     */
    const EVENT_SYS = 'EVENT.SYS';
    const EVENT_CUSTOM = 'EVENT.CUSTOM';
    const DNS_HEALTH_CHECK = 'DNSHealthCheck';
    const RESOURCE_GROUP = 'RESOURCE_GROUP';
    const MULTI_INSTANCE = 'MULTI_INSTANCE';
    const ALL_INSTANCE = 'ALL_INSTANCE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::EVENT_SYS,
            self::EVENT_CUSTOM,
            self::DNS_HEALTH_CHECK,
            self::RESOURCE_GROUP,
            self::MULTI_INSTANCE,
            self::ALL_INSTANCE,
        ];
    }
}

