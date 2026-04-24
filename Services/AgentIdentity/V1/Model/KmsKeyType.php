<?php

namespace HuaweiCloud\SDK\AgentIdentity\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class KmsKeyType
{
    /**
     * Possible values of this enum
     */
    const CUSTOMER_MANAGED_KEY = 'CustomerManagedKey';
    const SERVICE_MANAGED_KEY = 'ServiceManagedKey';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CUSTOMER_MANAGED_KEY,
            self::SERVICE_MANAGED_KEY,
        ];
    }
}

