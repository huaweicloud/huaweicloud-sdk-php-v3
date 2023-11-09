<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class InstanceActionType
{
    /**
     * Possible values of this enum
     */
    const START = 'start';
    const STOP = 'stop';
    const RESTART = 'restart';
    const SCALE = 'scale';
    const ROLLBACK = 'rollback';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::START,
            self::STOP,
            self::RESTART,
            self::SCALE,
            self::ROLLBACK,
        ];
    }
}

