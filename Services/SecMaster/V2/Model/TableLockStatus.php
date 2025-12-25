<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class TableLockStatus
{
    /**
     * Possible values of this enum
     */
    const LOCKED = 'LOCKED';
    const UNLOCKED = 'UNLOCKED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::LOCKED,
            self::UNLOCKED,
        ];
    }
}

