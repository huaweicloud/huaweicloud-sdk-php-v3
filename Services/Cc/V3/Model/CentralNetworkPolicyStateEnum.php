<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class CentralNetworkPolicyStateEnum
{
    /**
     * Possible values of this enum
     */
    const AVAILABLE = 'AVAILABLE';
    const CANCELING = 'CANCELING';
    const APPLYING = 'APPLYING';
    const FAILED = 'FAILED';
    const DELETED = 'DELETED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AVAILABLE,
            self::CANCELING,
            self::APPLYING,
            self::FAILED,
            self::DELETED,
        ];
    }
}

