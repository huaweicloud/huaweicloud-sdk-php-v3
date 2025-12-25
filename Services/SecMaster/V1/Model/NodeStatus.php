<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class NodeStatus
{
    /**
     * Possible values of this enum
     */
    const RUN = 'RUN';
    const STOP = 'STOP';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::RUN,
            self::STOP,
        ];
    }
}

