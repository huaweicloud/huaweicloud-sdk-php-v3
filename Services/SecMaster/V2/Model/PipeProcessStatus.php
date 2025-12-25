<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class PipeProcessStatus
{
    /**
     * Possible values of this enum
     */
    const COMPLETED = 'COMPLETED';
    const CREATING = 'CREATING';
    const UPDATING = 'UPDATING';
    const DELETING = 'DELETING';
    const CREATE_FAILED = 'CREATE_FAILED';
    const UPDATING_FAILED = 'UPDATING_FAILED';
    const DELETING_FAILED = 'DELETING_FAILED';
    
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
            self::CREATE_FAILED,
            self::UPDATING_FAILED,
            self::DELETING_FAILED,
        ];
    }
}

