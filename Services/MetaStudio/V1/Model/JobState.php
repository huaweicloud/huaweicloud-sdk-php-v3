<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class JobState
{
    /**
     * Possible values of this enum
     */
    const CREATING = 'CREATING';
    const SYSTEM_AUDITING = 'SYSTEM_AUDITING';
    const AUDITING = 'AUDITING';
    const WAITING = 'WAITING';
    const PROCESSING = 'PROCESSING';
    const RESULT_REVIEW = 'RESULT_REVIEW';
    const AUDIT_FAILED = 'AUDIT_FAILED';
    const FAILED = 'FAILED';
    const SUCCEED = 'SUCCEED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CREATING,
            self::SYSTEM_AUDITING,
            self::AUDITING,
            self::WAITING,
            self::PROCESSING,
            self::RESULT_REVIEW,
            self::AUDIT_FAILED,
            self::FAILED,
            self::SUCCEED,
        ];
    }
}

