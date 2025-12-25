<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class ScriptCategory
{
    /**
     * Possible values of this enum
     */
    const RETRIEVE = 'RETRIEVE';
    const ANALYSIS = 'ANALYSIS';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::RETRIEVE,
            self::ANALYSIS,
        ];
    }
}

