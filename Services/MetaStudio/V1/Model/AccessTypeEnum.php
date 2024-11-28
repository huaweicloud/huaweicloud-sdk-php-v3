<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class AccessTypeEnum
{
    /**
     * Possible values of this enum
     */
    const MEITUAN_OFFICIAL = 'MEITUAN_OFFICIAL';
    const MSS_STANDARD = 'MSS_STANDARD';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MEITUAN_OFFICIAL,
            self::MSS_STANDARD,
        ];
    }
}

