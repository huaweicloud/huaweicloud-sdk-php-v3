<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class IsapJobStartupModeEnum
{
    /**
     * Possible values of this enum
     */
    const UPGRADE = 'UPGRADE';
    const REFRESH_NEW = 'REFRESH_NEW';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UPGRADE,
            self::REFRESH_NEW,
        ];
    }
}

