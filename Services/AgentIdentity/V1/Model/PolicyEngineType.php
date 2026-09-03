<?php

namespace HuaweiCloud\SDK\AgentIdentity\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class PolicyEngineType
{
    /**
     * Possible values of this enum
     */
    const GATEWAY = 'GATEWAY';
    const TOKEN_VAULT = 'TOKEN_VAULT';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GATEWAY,
            self::TOKEN_VAULT,
        ];
    }
}

