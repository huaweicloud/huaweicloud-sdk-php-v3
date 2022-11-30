<?php

namespace HuaweiCloud\SDK\Ga\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class ConfigStatus
{
    /**
     * Possible values of this enum
     */
    const ACTIVE = 'ACTIVE';
    const PENDING = 'PENDING';
    const ERROR = 'ERROR';
    const DELETING = 'DELETING';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ACTIVE,
            self::PENDING,
            self::ERROR,
            self::DELETING,
        ];
    }
}

