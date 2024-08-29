<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class SupportedServiceEnum
{
    /**
     * Possible values of this enum
     */
    const VIDEO_2_D = 'VIDEO_2D';
    const LIVE_2_D = 'LIVE_2D';
    const CHAT_2_D = 'CHAT_2D';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::VIDEO_2_D,
            self::LIVE_2_D,
            self::CHAT_2_D,
        ];
    }
}

