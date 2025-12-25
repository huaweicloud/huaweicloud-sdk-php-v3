<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class ChannelOperationStatus
{
    /**
     * Possible values of this enum
     */
    const READY = 'READY';
    const START = 'START';
    const SUCCESS = 'SUCCESS';
    const FAIL = 'FAIL';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::READY,
            self::START,
            self::SUCCESS,
            self::FAIL,
        ];
    }
}

