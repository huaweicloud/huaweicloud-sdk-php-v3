<?php

namespace HuaweiCloud\SDK\AgentIdentity\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class CredentialProviderVendor
{
    /**
     * Possible values of this enum
     */
    const MICROSOFT_OAUTH2 = 'MicrosoftOauth2';
    const GOOGLE_OAUTH2 = 'GoogleOauth2';
    const GITHUB_OAUTH2 = 'GithubOauth2';
    const CUSTOM_OAUTH2 = 'CustomOauth2';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MICROSOFT_OAUTH2,
            self::GOOGLE_OAUTH2,
            self::GITHUB_OAUTH2,
            self::CUSTOM_OAUTH2,
        ];
    }
}

