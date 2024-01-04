<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class TaskType
{
    /**
     * Possible values of this enum
     */
    const CLUSTER = 'Cluster';
    const PRE_CHECK = 'PreCheck';
    const ROLLBACK = 'Rollback';
    const SNAPSHOT = 'Snapshot';
    const POST_CHECK = 'PostCheck';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CLUSTER,
            self::PRE_CHECK,
            self::ROLLBACK,
            self::SNAPSHOT,
            self::POST_CHECK,
        ];
    }
}

