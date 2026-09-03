<?php

namespace HuaweiCloud\SDK\AgentIdentity\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class ValidationMode
{
    /**
     * Possible values of this enum
     */
    const FAIL_ON_ANY_FINDINGS = 'FAIL_ON_ANY_FINDINGS';
    const IGNORE_ALL_FINDINGS = 'IGNORE_ALL_FINDINGS';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FAIL_ON_ANY_FINDINGS,
            self::IGNORE_ALL_FINDINGS,
        ];
    }
}

