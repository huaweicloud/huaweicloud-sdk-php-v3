<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class AnalysisScriptType
{
    /**
     * Possible values of this enum
     */
    const SEC_MASTER_SQL = 'SEC_MASTER_SQL';
    const RETRIEVE_SQL = 'RETRIEVE_SQL';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SEC_MASTER_SQL,
            self::RETRIEVE_SQL,
        ];
    }
}

