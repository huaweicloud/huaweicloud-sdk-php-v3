<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class UpgradeWorkflowTaskStatus
{
    /**
     * Possible values of this enum
     */
    const INIT = 'Init';
    const QUEUING = 'Queuing';
    const RUNNING = 'Running';
    const SUCCESS = 'Success';
    const FAILED = 'Failed';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INIT,
            self::QUEUING,
            self::RUNNING,
            self::SUCCESS,
            self::FAILED,
        ];
    }
}

