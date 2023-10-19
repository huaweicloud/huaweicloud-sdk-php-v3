<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class AttachmentInstanceTypeEnum
{
    /**
     * Possible values of this enum
     */
    const GDGW = 'GDGW';
    const ER_ROUTE_TABLE = 'ER_ROUTE_TABLE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GDGW,
            self::ER_ROUTE_TABLE,
        ];
    }
}

