<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class SyncStatusEnum
{
    /**
     * Possible values of this enum
     */
    const NO_NEED = 'NO_NEED';
    const CREATE_SUCCESS = 'CREATE_SUCCESS';
    const CREATE_FAILED = 'CREATE_FAILED';
    const UPDATE_SUCCESS = 'UPDATE_SUCCESS';
    const UPDATE_FAILED = 'UPDATE_FAILED';
    const SUMMARY_SUCCESS = 'SUMMARY_SUCCESS';
    const SUMMARY_FAILED = 'SUMMARY_FAILED';
    const RUNNING = 'RUNNING';
    const OFFLINE = 'OFFLINE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NO_NEED,
            self::CREATE_SUCCESS,
            self::CREATE_FAILED,
            self::UPDATE_SUCCESS,
            self::UPDATE_FAILED,
            self::SUMMARY_SUCCESS,
            self::SUMMARY_FAILED,
            self::RUNNING,
            self::OFFLINE,
        ];
    }
}

