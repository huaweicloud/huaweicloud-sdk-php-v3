<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class RouteTypeOfGdgw
{
    /**
     * Possible values of this enum
     */
    const VIF_PEER = 'vif_peer';
    const GDGW = 'gdgw';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::VIF_PEER,
            self::GDGW,
        ];
    }
}

