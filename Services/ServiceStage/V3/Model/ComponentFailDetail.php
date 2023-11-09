<?php

namespace HuaweiCloud\SDK\ServiceStage\V3\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class ComponentFailDetail
{
    /**
     * Possible values of this enum
     */
    const CLUSTER_DELETED = 'cluster_deleted';
    const CLUSTER_UNAVAILABLE = 'cluster_unavailable';
    const CLUSTER_INACCESSIBLE = 'cluster_inaccessible';
    const NAMESPACE_DELETED = 'namespace_deleted';
    const NAMESPACE_UNAVAILABLE = 'namespace_unavailable';
    const NAMESPACE_INACCESSIBLE = 'namespace_inaccessible';
    const RESOURCE_DELETED = 'resource_deleted';
    const CREATE_FAILED = 'create_failed';
    const DELETE_FAILED = 'delete_failed';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CLUSTER_DELETED,
            self::CLUSTER_UNAVAILABLE,
            self::CLUSTER_INACCESSIBLE,
            self::NAMESPACE_DELETED,
            self::NAMESPACE_UNAVAILABLE,
            self::NAMESPACE_INACCESSIBLE,
            self::RESOURCE_DELETED,
            self::CREATE_FAILED,
            self::DELETE_FAILED,
        ];
    }
}

