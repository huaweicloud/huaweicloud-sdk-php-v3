<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class ApprovedStateEnum
{
    /**
     * Possible values of this enum
     */
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
            self::APPROVING,
            self::APPROVED,
            self::UNAPPROVED,
        ];
    }
}

