<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class AnalyzerType
{
    /**
     * Possible values of this enum
     */
    const ACCOUNT = 'account';
    const ORGANIZATION = 'organization';
    const ACCOUNT_UNUSED_ACCESS = 'account_unused_access';
    const ORGANIZATION_UNUSED_ACCESS = 'organization_unused_access';
    const ACCOUNT_PRIVILEGE_ESCALATION = 'account_privilege_escalation';
    const ACCOUNT_IAM_BEST_PRACTICE = 'account_iam_best_practice';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ACCOUNT,
            self::ORGANIZATION,
            self::ACCOUNT_UNUSED_ACCESS,
            self::ORGANIZATION_UNUSED_ACCESS,
            self::ACCOUNT_PRIVILEGE_ESCALATION,
            self::ACCOUNT_IAM_BEST_PRACTICE,
        ];
    }
}

