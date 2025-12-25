<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class FileType
{
    /**
     * Possible values of this enum
     */
    const JVM = 'JVM';
    const LOG4_J2 = 'LOG4J2';
    const YML = 'YML';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::JVM,
            self::LOG4_J2,
            self::YML,
        ];
    }
}

