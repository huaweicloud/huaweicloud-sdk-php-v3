<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class DataTypeDomainEnum
{
    /**
     * Possible values of this enum
     */
    const NUMBER = 'NUMBER';
    const STRING = 'STRING';
    const DATETIME = 'DATETIME';
    const BLOB = 'BLOB';
    const OTHER = 'OTHER';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NUMBER,
            self::STRING,
            self::DATETIME,
            self::BLOB,
            self::OTHER,
        ];
    }
}

