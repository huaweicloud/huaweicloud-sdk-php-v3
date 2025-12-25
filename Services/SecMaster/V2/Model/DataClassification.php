<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class DataClassification
{
    /**
     * Possible values of this enum
     */
    const FACTUAL_DATA = 'FACTUAL_DATA';
    const DIMENSION_DATA = 'DIMENSION_DATA';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FACTUAL_DATA,
            self::DIMENSION_DATA,
        ];
    }
}

