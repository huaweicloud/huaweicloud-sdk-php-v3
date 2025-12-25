<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class NodeApplyFailEnum
{
    /**
     * Possible values of this enum
     */
    const COLLECTOR_USE = 'COLLECTOR_USE';
    const NODE_OFFLINE = 'NODE_OFFLINE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::COLLECTOR_USE,
            self::NODE_OFFLINE,
        ];
    }
}

