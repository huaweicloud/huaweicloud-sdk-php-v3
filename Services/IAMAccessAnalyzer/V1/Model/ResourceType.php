<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class ResourceType
{
    /**
     * Possible values of this enum
     */
    const IAMAGENCY = 'iam:agency';
    const OBSBUCKET = 'obs:bucket';
    const KMSCMK = 'kms:cmk';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::IAMAGENCY,
            self::OBSBUCKET,
            self::KMSCMK,
        ];
    }
}

