<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class HostedCloudEnum
{
    /**
     * Possible values of this enum
     */
    const HW_CLOUD = 'HWCloud';
    const IRELAND = 'Ireland';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::HW_CLOUD,
            self::IRELAND,
        ];
    }
}

