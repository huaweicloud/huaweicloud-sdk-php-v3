<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class JobProcessStatus
{
    /**
     * Possible values of this enum
     */
    const COMPLETED = 'COMPLETED';
    const CREATING = 'CREATING';
    const UPDATING = 'UPDATING';
    const ENABLING = 'ENABLING';
    const DISABLING = 'DISABLING';
    const DELETING = 'DELETING';
    const CREATE_FAILED = 'CREATE_FAILED';
    const UPDATE_FAILED = 'UPDATE_FAILED';
    const ENABLE_FAILED = 'ENABLE_FAILED';
    const DISABLE_FAILED = 'DISABLE_FAILED';
    const DELETE_FAILED = 'DELETE_FAILED';
    const RECOVERING = 'RECOVERING';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::COMPLETED,
            self::CREATING,
            self::UPDATING,
            self::ENABLING,
            self::DISABLING,
            self::DELETING,
            self::CREATE_FAILED,
            self::UPDATE_FAILED,
            self::ENABLE_FAILED,
            self::DISABLE_FAILED,
            self::DELETE_FAILED,
            self::RECOVERING,
        ];
    }
}

