<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class ValidatePolicyResourceType
{
    /**
     * Possible values of this enum
     */
    const OBSBUCKET = 'obs:bucket';
    const IAMAGENCY = 'iam:agency';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OBSBUCKET,
            self::IAMAGENCY,
        ];
    }
}

