<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class ChannelErrorType
{
    /**
     * Possible values of this enum
     */
    const SUCCESS = 'SUCCESS';
    const FILE_UPLOAD_ERROR = 'FILE_UPLOAD_ERROR';
    const FILE_COPY_ERROR = 'FILE_COPY_ERROR';
    const FILE_ZIP_ERROR = 'FILE_ZIP_ERROR';
    const SALT_EXECUTE_ERROR = 'SALT_EXECUTE_ERROR';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SUCCESS,
            self::FILE_UPLOAD_ERROR,
            self::FILE_COPY_ERROR,
            self::FILE_ZIP_ERROR,
            self::SALT_EXECUTE_ERROR,
        ];
    }
}

