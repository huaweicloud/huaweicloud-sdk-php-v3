<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class OperatorArgTypeEnum
{
    /**
     * Possible values of this enum
     */
    const INT = 'INT';
    const FLOAT = 'FLOAT';
    const STRING = 'STRING';
    const ENUM = 'ENUM';
    const _LIST = 'LIST';
    const BOOLEAN = 'BOOLEAN';
    const LARGE_MODEL = 'LARGE_MODEL';
    const OBS = 'OBS';
    const LABEL_FILTER = 'LABEL_FILTER';
    const DATASET = 'DATASET';
    const DYNAMIC_INPUT_LIST = 'DYNAMIC_INPUT_LIST';
    const PROMPT = 'PROMPT';
    const OUTPUT_TASK_CATEGORY = 'OUTPUT_TASK_CATEGORY';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INT,
            self::FLOAT,
            self::STRING,
            self::ENUM,
            self::_LIST,
            self::BOOLEAN,
            self::LARGE_MODEL,
            self::OBS,
            self::LABEL_FILTER,
            self::DATASET,
            self::DYNAMIC_INPUT_LIST,
            self::PROMPT,
            self::OUTPUT_TASK_CATEGORY,
        ];
    }
}

