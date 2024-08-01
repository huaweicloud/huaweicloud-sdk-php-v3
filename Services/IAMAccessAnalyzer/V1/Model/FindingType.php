<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class FindingType
{
    /**
     * Possible values of this enum
     */
    const EXTERNAL_ACCESS = 'external_access';
    const UNUSED_IAM_USER_ACCESS_KEY = 'unused_iam_user_access_key';
    const UNUSED_IAM_USER_PASSWORD = 'unused_iam_user_password';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::EXTERNAL_ACCESS,
            self::UNUSED_IAM_USER_ACCESS_KEY,
            self::UNUSED_IAM_USER_PASSWORD,
        ];
    }
}

