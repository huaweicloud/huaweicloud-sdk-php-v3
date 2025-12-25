<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class ChannelAction
{
    /**
     * Possible values of this enum
     */
    const START = 'START';
    const STOP = 'STOP';
    const REMOVE = 'REMOVE';
    const RESTART = 'RESTART';
    const REFRESH = 'REFRESH';
    const INSTALL = 'INSTALL';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::START,
            self::STOP,
            self::REMOVE,
            self::RESTART,
            self::REFRESH,
            self::INSTALL,
        ];
    }
}

