<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class TableFormat
{
    /**
     * Possible values of this enum
     */
    const JSON = 'JSON';
    const DEBEZIUM_JSON = 'DEBEZIUM_JSON';
    const CSV = 'CSV';
    const PARQUET = 'PARQUET';
    const ORC = 'ORC';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::JSON,
            self::DEBEZIUM_JSON,
            self::CSV,
            self::PARQUET,
            self::ORC,
        ];
    }
}

