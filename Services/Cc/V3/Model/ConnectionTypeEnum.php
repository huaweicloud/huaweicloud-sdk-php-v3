<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class ConnectionTypeEnum
{
    /**
     * Possible values of this enum
     */
    const ER_ER = 'ER-ER';
    const ER_GDGW = 'ER-GDGW';
    const ER_ER_ROUTE_TABLE = 'ER-ER_ROUTE_TABLE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ER_ER,
            self::ER_GDGW,
            self::ER_ER_ROUTE_TABLE,
        ];
    }
}

