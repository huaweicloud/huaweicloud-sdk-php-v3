<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class FrozenEffectEnum
{
    /**
     * Possible values of this enum
     */
    const RELEASABLE = 'RELEASABLE';
    const UNRELEASABLE = 'UNRELEASABLE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::RELEASABLE,
            self::UNRELEASABLE,
        ];
    }
}

