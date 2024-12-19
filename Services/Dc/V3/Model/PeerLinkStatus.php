<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class PeerLinkStatus
{
    /**
     * Possible values of this enum
     */
    const PENDING_CREATE = 'PENDING_CREATE';
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
            self::PENDING_CREATE,
            self::PENDING_UPDATE,
            self::ACTIVE,
            self::ERROR,
        ];
    }
}

