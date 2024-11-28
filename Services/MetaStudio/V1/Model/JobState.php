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
    const WAITING_SPLIT = 'WAITING_SPLIT';
    const SPLITTING = 'SPLITTING';
    const SPLIT_FAILED = 'SPLIT_FAILED';
    const ANNOTATING = 'ANNOTATING';
    const WAITING = 'WAITING';
    const PROCESSING = 'PROCESSING';
    const RESULT_REVIEW = 'RESULT_REVIEW';
    const AUDIT_FAILED = 'AUDIT_FAILED';
    const USER_RESULT_REVIEW = 'USER_RESULT_REVIEW';
    const USER_REVIEW_REJECT = 'USER_REVIEW_REJECT';
    const UPLOADING = 'UPLOADING';
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
            self::WAITING_SPLIT,
            self::SPLITTING,
            self::SPLIT_FAILED,
            self::ANNOTATING,
            self::WAITING,
            self::PROCESSING,
            self::RESULT_REVIEW,
            self::AUDIT_FAILED,
            self::USER_RESULT_REVIEW,
            self::USER_REVIEW_REJECT,
            self::UPLOADING,
            self::FAILED,
            self::SUCCEED,
        ];
    }
}

