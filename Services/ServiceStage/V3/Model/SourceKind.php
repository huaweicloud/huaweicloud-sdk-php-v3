<?php

namespace HuaweiCloud\SDK\ServiceStage\V3\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class SourceKind
{
    /**
     * Possible values of this enum
     */
    const CODE = 'code';
    const PACKAGE = 'package';
    const IMAGE = 'image';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CODE,
            self::PACKAGE,
            self::IMAGE,
        ];
    }
}

