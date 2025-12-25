<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class TableRWType
{
    /**
     * Possible values of this enum
     */
    const READ_ONLY = 'READ_ONLY';
    const READ_WRITE = 'READ_WRITE';
    const WRITE_ONLY = 'WRITE_ONLY';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::READ_ONLY,
            self::READ_WRITE,
            self::WRITE_ONLY,
        ];
    }
}

