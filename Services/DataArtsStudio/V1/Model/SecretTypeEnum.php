<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class SecretTypeEnum
{
    /**
     * Possible values of this enum
     */
    const _PUBLIC = 'PUBLIC';
    const SECRET = 'SECRET';
    const CONFIDENTIAL = 'CONFIDENTIAL';
    const SUPER_SECRET = 'SUPER_SECRET';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_PUBLIC,
            self::SECRET,
            self::CONFIDENTIAL,
            self::SUPER_SECRET,
        ];
    }
}

