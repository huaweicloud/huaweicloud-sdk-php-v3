<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class BizStatusEnum
{
    /**
     * Possible values of this enum
     */
    const DRAFT = 'DRAFT';
    const PUBLISH_DEVELOPING = 'PUBLISH_DEVELOPING';
    const PUBLISHED = 'PUBLISHED';
    const OFFLINE_DEVELOPING = 'OFFLINE_DEVELOPING';
    const OFFLINE = 'OFFLINE';
    const REJECT = 'REJECT';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DRAFT,
            self::PUBLISH_DEVELOPING,
            self::PUBLISHED,
            self::OFFLINE_DEVELOPING,
            self::OFFLINE,
            self::REJECT,
        ];
    }
}

