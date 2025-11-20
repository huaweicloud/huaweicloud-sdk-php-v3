<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class ResourceType
{
    /**
     * Possible values of this enum
     */
    const IAMAGENCY = 'iam:agency';
    const IAMUSER = 'iam:user';
    const KMSCMK = 'kms:cmk';
    const OBSBUCKET = 'obs:bucket';
    const SWRREPO = 'swr:repo';
    const CBRBACKUP = 'cbr:backup';
    const IMSIMAGE = 'ims:image';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::IAMAGENCY,
            self::IAMUSER,
            self::KMSCMK,
            self::OBSBUCKET,
            self::SWRREPO,
            self::CBRBACKUP,
            self::IMSIMAGE,
        ];
    }
}

