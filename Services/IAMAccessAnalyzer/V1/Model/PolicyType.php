<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class PolicyType
{
    /**
     * Possible values of this enum
     */
    const IDENTITY_POLICY = 'identity_policy';
    const RESOURCE_POLICY = 'resource_policy';
    const SERVICE_CONTROL_POLICY = 'service_control_policy';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::IDENTITY_POLICY,
            self::RESOURCE_POLICY,
            self::SERVICE_CONTROL_POLICY,
        ];
    }
}

