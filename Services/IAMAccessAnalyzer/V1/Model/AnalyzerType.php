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
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ACCOUNT,
            self::ORGANIZATION,
        ];
    }
}

