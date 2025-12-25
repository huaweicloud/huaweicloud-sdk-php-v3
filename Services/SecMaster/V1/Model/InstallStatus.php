<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class InstallStatus
{
    /**
     * Possible values of this enum
     */
    const READY = 'READY';
    const ALL_SUCCESS = 'ALL_SUCCESS';
    const PARTIAL_SUCCESS = 'PARTIAL_SUCCESS';
    const EXCEPTION = 'EXCEPTION';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::READY,
            self::ALL_SUCCESS,
            self::PARTIAL_SUCCESS,
            self::EXCEPTION,
        ];
    }
}

