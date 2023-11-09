<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class InstanceStatusType
{
    /**
     * Possible values of this enum
     */
    const INITIALIZING = 'INITIALIZING';
    const UPGRADING = 'UPGRADING';
    const FAILED = 'FAILED';
    const RUNNING = 'RUNNING';
    const DOWN = 'DOWN';
    const DELETING = 'DELETING';
    const DELETED = 'DELETED';
    const RESERVED = 'RESERVED';
    const STARTING = 'STARTING';
    const STOPPING = 'STOPPING';
    const STOPPED = 'STOPPED';
    const RESTARTING = 'RESTARTING';
    const PENDING = 'PENDING';
    const UNKNOWN = 'UNKNOWN';
    const PARTIALLY_FAILED = 'PARTIALLY_FAILED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INITIALIZING,
            self::UPGRADING,
            self::FAILED,
            self::RUNNING,
            self::DOWN,
            self::DELETING,
            self::DELETED,
            self::RESERVED,
            self::STARTING,
            self::STOPPING,
            self::STOPPED,
            self::RESTARTING,
            self::PENDING,
            self::UNKNOWN,
            self::PARTIALLY_FAILED,
        ];
    }
}

