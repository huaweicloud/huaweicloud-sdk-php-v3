<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class JobType
{
    /**
     * Possible values of this enum
     */
    const BASIC = 'BASIC';
    const MIDDLE = 'MIDDLE';
    const ADVANCE = 'ADVANCE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BASIC,
            self::MIDDLE,
            self::ADVANCE,
        ];
    }
}

