<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class LanguageEnum
{
    /**
     * Possible values of this enum
     */
    const ZH_CN = 'zh_CN';
    const EN_US = 'en_US';
    const CN = 'CN';
    const EN = 'EN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ZH_CN,
            self::EN_US,
            self::CN,
            self::EN,
        ];
    }
}

