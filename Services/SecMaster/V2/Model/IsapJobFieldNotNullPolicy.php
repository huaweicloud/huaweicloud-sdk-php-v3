<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class IsapJobFieldNotNullPolicy
{
    /**
     * Possible values of this enum
     */
    const LOOSE = 'LOOSE';
    const STRICT = 'STRICT';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::LOOSE,
            self::STRICT,
        ];
    }
}

