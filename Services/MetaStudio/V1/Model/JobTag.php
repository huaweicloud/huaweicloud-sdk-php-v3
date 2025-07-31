<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class JobTag
{
    /**
     * Possible values of this enum
     */
    const ECOMMERCE = 'ECOMMERCE';
    const NEWS = 'NEWS';
    const MARKETING = 'MARKETING';
    const LIVE = 'LIVE';
    const EDUCATION = 'EDUCATION';
    const CUSTOMER = 'CUSTOMER';
    const STORYTELLING = 'STORYTELLING';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ECOMMERCE,
            self::NEWS,
            self::MARKETING,
            self::LIVE,
            self::EDUCATION,
            self::CUSTOMER,
            self::STORYTELLING,
        ];
    }
}

