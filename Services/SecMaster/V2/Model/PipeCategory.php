<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class PipeCategory
{
    /**
     * Possible values of this enum
     */
    const STREAMING_TO_INDEX = 'STREAMING_TO_INDEX';
    const STREAMING_TO_LAKE = 'STREAMING_TO_LAKE';
    const STREAMING_TO_INDEX_LAKE = 'STREAMING_TO_INDEX_LAKE';
    const STREAMING = 'STREAMING';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::STREAMING_TO_INDEX,
            self::STREAMING_TO_LAKE,
            self::STREAMING_TO_INDEX_LAKE,
            self::STREAMING,
        ];
    }
}

