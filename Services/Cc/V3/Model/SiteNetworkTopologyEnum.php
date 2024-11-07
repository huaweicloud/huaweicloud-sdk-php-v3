<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class SiteNetworkTopologyEnum
{
    /**
     * Possible values of this enum
     */
    const P2P = 'p2p';
    const MESH = 'mesh';
    const STAR = 'star';
    const HYBRID = 'hybrid';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::P2P,
            self::MESH,
            self::STAR,
            self::HYBRID,
        ];
    }
}

