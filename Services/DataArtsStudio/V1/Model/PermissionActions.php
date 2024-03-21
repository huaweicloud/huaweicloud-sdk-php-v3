<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class PermissionActions
{
    /**
     * Possible values of this enum
     */
    const ALL = 'ALL';
    const SELECT = 'SELECT';
    const UPDATE = 'UPDATE';
    const CREATE = 'CREATE';
    const DROP = 'DROP';
    const ALTER = 'ALTER';
    const INDEX = 'INDEX';
    const READ = 'READ';
    const WRITE = 'WRITE';
    const INSERT = 'INSERT';
    const CREATE_TABLE = 'CREATE_TABLE';
    const DELETE = 'DELETE';
    const CREATE_SCHEMA = 'CREATE_SCHEMA';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ALL,
            self::SELECT,
            self::UPDATE,
            self::CREATE,
            self::DROP,
            self::ALTER,
            self::INDEX,
            self::READ,
            self::WRITE,
            self::INSERT,
            self::CREATE_TABLE,
            self::DELETE,
            self::CREATE_SCHEMA,
        ];
    }
}

