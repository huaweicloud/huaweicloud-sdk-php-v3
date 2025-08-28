<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class LlmSourceEnum
{
    /**
     * Possible values of this enum
     */
    const LLM_CONFIG = 'LLM_CONFIG';
    const DEEP_SEEK = 'DEEP_SEEK';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::LLM_CONFIG,
            self::DEEP_SEEK,
        ];
    }
}

