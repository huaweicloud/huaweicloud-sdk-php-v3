<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class IsapTableProcessStatus
{
    /**
     * Possible values of this enum
     */
    const COMPLETED = 'COMPLETED';
    const CREATING = 'CREATING';
    const UPDATING = 'UPDATING';
    const DELETING = 'DELETING';
    const TRUNCATING = 'TRUNCATING';
    const UPGRADING = 'UPGRADING';
    const CREATE_FAILED = 'CREATE_FAILED';
    const UPDATE_FAILED = 'UPDATE_FAILED';
    const DELETING_FAILED = 'DELETING_FAILED';
    const TRUNCATE_FAILED = 'TRUNCATE_FAILED';
    const UPGRADE_FAILED = 'UPGRADE_FAILED';
    
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
            self::DELETING,
            self::TRUNCATING,
            self::UPGRADING,
            self::CREATE_FAILED,
            self::UPDATE_FAILED,
            self::DELETING_FAILED,
            self::TRUNCATE_FAILED,
            self::UPGRADE_FAILED,
        ];
    }
}

