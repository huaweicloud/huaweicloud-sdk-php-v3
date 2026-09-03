<?php

namespace HuaweiCloud\SDK\AgentIdentity\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class PolicyStatus
{
    /**
     * Possible values of this enum
     */
    const CREATING = 'CREATING';
    const ACTIVE = 'ACTIVE';
    const UPDATING = 'UPDATING';
    const DELETING = 'DELETING';
    const CREATE_FAILED = 'CREATE_FAILED';
    const UPDATE_FAILED = 'UPDATE_FAILED';
    const DELETE_FAILED = 'DELETE_FAILED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CREATING,
            self::ACTIVE,
            self::UPDATING,
            self::DELETING,
            self::CREATE_FAILED,
            self::UPDATE_FAILED,
            self::DELETE_FAILED,
        ];
    }
}

