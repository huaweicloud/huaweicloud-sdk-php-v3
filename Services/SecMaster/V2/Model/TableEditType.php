<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class TableEditType
{
    /**
     * Possible values of this enum
     */
    const MODIFIABLE = 'MODIFIABLE';
    const APPENDED = 'APPENDED';
    const LOCKED = 'LOCKED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MODIFIABLE,
            self::APPENDED,
            self::LOCKED,
        ];
    }
}

