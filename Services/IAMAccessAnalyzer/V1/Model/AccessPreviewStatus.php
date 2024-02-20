<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class AccessPreviewStatus
{
    /**
     * Possible values of this enum
     */
    const CREATING = 'creating';
    const COMPLETED = 'completed';
    const FAILED = 'failed';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CREATING,
            self::COMPLETED,
            self::FAILED,
        ];
    }
}

