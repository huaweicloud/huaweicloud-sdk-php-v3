<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class GlobalDcGatewayStatus
{
    /**
     * Possible values of this enum
     */
    const DOWN = 'DOWN';
    const PENDING_UPDATE = 'PENDING_UPDATE';
    const ACTIVE = 'ACTIVE';
    const ERROR = 'ERROR';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DOWN,
            self::PENDING_UPDATE,
            self::ACTIVE,
            self::ERROR,
        ];
    }
}

