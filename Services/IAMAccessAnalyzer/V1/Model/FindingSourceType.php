<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class FindingSourceType
{
    /**
     * Possible values of this enum
     */
    const BUCKET_ACL = 'bucket_acl';
    const BUCKET_POLICY = 'bucket_policy';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BUCKET_ACL,
            self::BUCKET_POLICY,
        ];
    }
}

