<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class MeetingStatus
{
    /**
     * Possible values of this enum
     */
    const SCHEDULE = 'schedule';
    const CREATED = 'created';
    const DESTROYED = 'destroyed';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SCHEDULE,
            self::CREATED,
            self::DESTROYED,
        ];
    }
}

