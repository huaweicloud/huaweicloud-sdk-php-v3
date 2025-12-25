<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class IsapTableCategory
{
    /**
     * Possible values of this enum
     */
    const STREAMING = 'STREAMING';
    const INDEX = 'INDEX';
    const APPLICATION = 'APPLICATION';
    const TENANT_BUCKET = 'TENANT_BUCKET';
    const LAKE = 'LAKE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::STREAMING,
            self::INDEX,
            self::APPLICATION,
            self::TENANT_BUCKET,
            self::LAKE,
        ];
    }
}

