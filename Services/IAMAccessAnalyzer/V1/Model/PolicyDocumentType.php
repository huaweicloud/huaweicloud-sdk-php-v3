<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class PolicyDocumentType
{
    /**
     * Possible values of this enum
     */
    const IDENTITY_POLICY = 'identity_policy';
    const AGENCY_TRUST_POLICY = 'agency_trust_policy';
    const BUCKET_POLICY = 'bucket_policy';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::IDENTITY_POLICY,
            self::AGENCY_TRUST_POLICY,
            self::BUCKET_POLICY,
        ];
    }
}

