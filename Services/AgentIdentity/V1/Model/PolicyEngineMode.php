<?php

namespace HuaweiCloud\SDK\AgentIdentity\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class PolicyEngineMode
{
    /**
     * Possible values of this enum
     */
    const LOG_ONLY = 'LOG_ONLY';
    const ENFORCE = 'ENFORCE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::LOG_ONLY,
            self::ENFORCE,
        ];
    }
}

