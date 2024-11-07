<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class SiteNetworkStateEnum
{
    /**
     * Possible values of this enum
     */
    const AVAILABLE = 'AVAILABLE';
    const UPDATING = 'UPDATING';
    const FAILED = 'FAILED';
    const CREATING = 'CREATING';
    const DELETING = 'DELETING';
    const DELETED = 'DELETED';
    const NON_COMPLETE = 'NON-COMPLETE';
    const RESTORING = 'RESTORING';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AVAILABLE,
            self::UPDATING,
            self::FAILED,
            self::CREATING,
            self::DELETING,
            self::DELETED,
            self::NON_COMPLETE,
            self::RESTORING,
        ];
    }
}

