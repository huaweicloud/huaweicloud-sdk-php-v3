<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class CentralNetworkConnectionStateEnum
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
    const DELETED = 'DELETED';
    const APPROVING = 'APPROVING';
    const APPROVED = 'APPROVED';
    const UNAPPROVED = 'UNAPPROVED';
    
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
            self::DELETED,
            self::APPROVING,
            self::APPROVED,
            self::UNAPPROVED,
        ];
    }
}

