<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class ApprovalStatusEnum
{
    /**
     * Possible values of this enum
     */
    const DEVELOPING = 'DEVELOPING';
    const APPROVED = 'APPROVED';
    const REJECT = 'REJECT';
    const WITHDREW = 'WITHDREW';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DEVELOPING,
            self::APPROVED,
            self::REJECT,
            self::WITHDREW,
        ];
    }
}

