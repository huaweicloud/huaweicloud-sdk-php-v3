<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class StatusSchemaResp
{
    /**
     * Possible values of this enum
     */
    const HEALTH = 'health';
    const UNHEALTH = 'unhealth';
    const NO_ALARM_RULE = 'no_alarm_rule';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::HEALTH,
            self::UNHEALTH,
            self::NO_ALARM_RULE,
        ];
    }
}

