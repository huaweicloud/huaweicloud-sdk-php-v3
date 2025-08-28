<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class KnowledgeTypeEnum
{
    /**
     * Possible values of this enum
     */
    const QUESTION_ANSWER = 'QUESTION_ANSWER';
    const DOCUMENT = 'DOCUMENT';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::QUESTION_ANSWER,
            self::DOCUMENT,
        ];
    }
}

