<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class TableOwnerType
{
    /**
     * Possible values of this enum
     */
    const SYSTEM = 'SYSTEM';
    const USER = 'USER';
    const SYSTEM_ALLOWED_DELETE = 'SYSTEM_ALLOWED_DELETE';
    const USER_ALLOWED_DELETE = 'USER_ALLOWED_DELETE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SYSTEM,
            self::USER,
            self::SYSTEM_ALLOWED_DELETE,
            self::USER_ALLOWED_DELETE,
        ];
    }
}

