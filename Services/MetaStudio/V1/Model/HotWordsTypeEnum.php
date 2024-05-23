<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class HotWordsTypeEnum
{
    /**
     * Possible values of this enum
     */
    const SIS = 'SIS';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SIS,
        ];
    }
}

