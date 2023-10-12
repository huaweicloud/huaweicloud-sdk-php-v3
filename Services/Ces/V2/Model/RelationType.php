<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class RelationType
{
    /**
     * Possible values of this enum
     */
    const ALARM_RULE = 'ALARM_RULE';
    const RESOURCE = 'RESOURCE';
    const RESOURCE_POLICY_NOTIFICATION = 'RESOURCE_POLICY_NOTIFICATION';
    const RESOURCE_POLICY_ALARM = 'RESOURCE_POLICY_ALARM';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ALARM_RULE,
            self::RESOURCE,
            self::RESOURCE_POLICY_NOTIFICATION,
            self::RESOURCE_POLICY_ALARM,
        ];
    }
}

