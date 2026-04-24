<?php

namespace HuaweiCloud\SDK\AgentIdentity\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class AuthorizerType
{
    /**
     * Possible values of this enum
     */
    const CUSTOM_JWT = 'CUSTOM_JWT';
    const IAM = 'IAM';
    const API_KEY = 'API_KEY';
    const NONE = 'NONE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CUSTOM_JWT,
            self::IAM,
            self::API_KEY,
            self::NONE,
        ];
    }
}

