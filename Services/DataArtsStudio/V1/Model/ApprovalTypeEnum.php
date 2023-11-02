<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class ApprovalTypeEnum
{
    /**
     * Possible values of this enum
     */
    const PUBLISH = 'PUBLISH';
    const OFFLINE = 'OFFLINE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PUBLISH,
            self::OFFLINE,
        ];
    }
}

