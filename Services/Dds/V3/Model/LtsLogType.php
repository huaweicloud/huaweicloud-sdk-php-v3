<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class LtsLogType
{
    /**
     * Possible values of this enum
     */
    const AUDIT_LOG = 'audit_log';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AUDIT_LOG,
        ];
    }
}

