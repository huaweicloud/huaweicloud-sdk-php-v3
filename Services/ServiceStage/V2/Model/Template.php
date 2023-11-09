<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class Template
{
    /**
     * Possible values of this enum
     */
    const MAGENTO = 'magento';
    const MBAAS = 'mbaas';
    const WORDPRESS = 'wordpress';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MAGENTO,
            self::MBAAS,
            self::WORDPRESS,
        ];
    }
}

