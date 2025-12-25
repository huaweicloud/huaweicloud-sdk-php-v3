<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class PipeOwnerType
{
    /**
     * Possible values of this enum
     */
    const SYSTEM = 'SYSTEM';
    const USER = 'USER';
    const CLOUD_LOG = 'CLOUD_LOG';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SYSTEM,
            self::USER,
            self::CLOUD_LOG,
        ];
    }
}

