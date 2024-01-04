<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class WorkFlowPhase
{
    /**
     * Possible values of this enum
     */
    const INIT = 'Init';
    const RUNNING = 'Running';
    const PENDING = 'Pending';
    const SUCCESS = 'Success';
    const CANCEL = 'Cancel';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INIT,
            self::RUNNING,
            self::PENDING,
            self::SUCCESS,
            self::CANCEL,
        ];
    }
}

