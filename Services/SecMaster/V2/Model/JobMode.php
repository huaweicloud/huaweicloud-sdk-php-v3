<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class JobMode
{
    /**
     * Possible values of this enum
     */
    const STREAMING = 'STREAMING';
    const BATCH = 'BATCH';
    const SEARCH = 'SEARCH';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::STREAMING,
            self::BATCH,
            self::SEARCH,
        ];
    }
}

