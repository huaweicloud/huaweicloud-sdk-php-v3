<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class SiteConnectionStateEnum
{
    /**
     * Possible values of this enum
     */
    const AVAILABLE = 'AVAILABLE';
    const CREATING = 'CREATING';
    const UPDATING = 'UPDATING';
    const DELETING = 'DELETING';
    const FREEZING = 'FREEZING';
    const UNFREEZING = 'UNFREEZING';
    const RECOVERING = 'RECOVERING';
    const FAILED = 'FAILED';
    const FREEZED = 'FREEZED';
    const DELETED = 'DELETED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AVAILABLE,
            self::CREATING,
            self::UPDATING,
            self::DELETING,
            self::FREEZING,
            self::UNFREEZING,
            self::RECOVERING,
            self::FAILED,
            self::FREEZED,
            self::DELETED,
        ];
    }
}

