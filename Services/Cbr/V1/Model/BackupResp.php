<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackupResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackupResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * checkpointId  还原点ID
    * createdAt  创建时间，例如:\"2020-02-05T10:38:34.209782\"
    * description  备份描述
    * expiredAt  过期时间，例如:\"2020-02-05T10:38:34.209782\"
    * extendInfo  extendInfo
    * id  备份ID
    * imageType  [备份类型。取值为backup和replication。](tag:hws,hws_hk,ocb) [备份类型。取值为backup。](tag:g42,hk_g42,sbc,dt,fcs_vm,ctc,tm,tlf,cmcc,hcso_dt)
    * name  备份名称
    * parentId  父备份ID
    * projectId  项目ID
    * protectedAt  备份时间
    * resourceAz  资源可用区
    * resourceId  资源ID
    * resourceName  资源名称
    * resourceSize  资源大小，单位为GB
    * resourceType  [资源类型: OS::Nova::Server, OS::Cinder::Volume, OS::Ironic::BareMetalServer, OS::Native::Server, OS::Sfs::Turbo, OS::Workspace::DesktopV2](tag:hws,hws_hk) [资源类型: OS::Nova::Server, OS::Cinder::Volume, OS::Sfs::Turbo](tag:hk_g42,sbc,dt) [资源类型: OS::Nova::Server, OS::Cinder::Volume, OS::Ironic::BareMetalServer, OS::Sfs::Turbo](tag:fcs_vm,ctc,ocb,tm) [资源类型: OS::Nova::Server, OS::Cinder::Volume](tag:tlf,cmcc,hcso_dt) [资源类型: OS::Nova::Server, OS::Cinder::Volume, OS::Sfs::Turbo, OS::Workspace::DesktopV2](tag:g42)
    * status  备份状态 - available: 可用 - protecting: 保护中 - deleting: 删除中 - restoring: 恢复中 - error: 异常 - waiting_protect: 等待保护 - waiting_delete: 等待删除 - waiting_restore: 等待恢复
    * updatedAt  更新时间，例如:\"2020-02-05T10:38:34.209782\"
    * vaultId  存储库ID
    * replicationRecords  复制记录
    * enterpriseProjectId  企业项目id,默认为‘0’。
    * providerId  备份提供商ID，用于区分备份对象。当前取值包含： [0daac4c5-6707-4851-97ba-169e36266b66，该值代表备份对象为云服务器。d1603440-187d-4516-af25-121250c7cc97，该值代表备份对象为云硬盘。3f3c3220-245c-4805-b811-758870015881， 该值代表备份对象为SFS Turbo。a13639de-00be-4e94-af30-26912d75e4a2，该值代表备份对象为混合云VMware备份。](tag:hws,hws_hk) [0daac4c5-6707-4851-97ba-169e36266b66，该值代表备份对象为云服务器。d1603440-187d-4516-af25-121250c7cc97，该值代表备份对象为云硬盘。3f3c3220-245c-4805-b811-758870015881，该值代表备份对象为SFS Turbo。](tag:ocb,tlf,sbc,fcs_vm,g42,tm,dt,cmcc) [0daac4c5-6707-4851-97ba-169e36266b66，该值代表备份对象为云服务器。d1603440-187d-4516-af25-121250c7cc97，该值代表备份对象为云硬盘。3f3c3220-245c-4805-b811-758870015881，该值代表备份对象为SFS Turbo。86a80900-71bf-4961-956a-d52df944f84a，该值代表备份对象为Workspace。](tag:ctc) [0daac4c5-6707-4851-97ba-169e36266b66，该值代表备份对象为云服务器。d1603440-187d-4516-af25-121250c7cc97，该值代表备份对象为云硬盘。](tag:hcso_dt)
    * children  子副本列表
    * incremental  是否是增备
    * version  备份副本快照类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'checkpointId' => 'string',
            'createdAt' => '\DateTime',
            'description' => 'string',
            'expiredAt' => '\DateTime',
            'extendInfo' => '\HuaweiCloud\SDK\Cbr\V1\Model\BackupExtendInfo',
            'id' => 'string',
            'imageType' => 'string',
            'name' => 'string',
            'parentId' => 'string',
            'projectId' => 'string',
            'protectedAt' => '\DateTime',
            'resourceAz' => 'string',
            'resourceId' => 'string',
            'resourceName' => 'string',
            'resourceSize' => 'int',
            'resourceType' => 'string',
            'status' => 'string',
            'updatedAt' => '\DateTime',
            'vaultId' => 'string',
            'replicationRecords' => '\HuaweiCloud\SDK\Cbr\V1\Model\ReplicationRecordGet[]',
            'enterpriseProjectId' => 'string',
            'providerId' => 'string',
            'children' => '\HuaweiCloud\SDK\Cbr\V1\Model\BackupResp[]',
            'incremental' => 'bool',
            'version' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * checkpointId  还原点ID
    * createdAt  创建时间，例如:\"2020-02-05T10:38:34.209782\"
    * description  备份描述
    * expiredAt  过期时间，例如:\"2020-02-05T10:38:34.209782\"
    * extendInfo  extendInfo
    * id  备份ID
    * imageType  [备份类型。取值为backup和replication。](tag:hws,hws_hk,ocb) [备份类型。取值为backup。](tag:g42,hk_g42,sbc,dt,fcs_vm,ctc,tm,tlf,cmcc,hcso_dt)
    * name  备份名称
    * parentId  父备份ID
    * projectId  项目ID
    * protectedAt  备份时间
    * resourceAz  资源可用区
    * resourceId  资源ID
    * resourceName  资源名称
    * resourceSize  资源大小，单位为GB
    * resourceType  [资源类型: OS::Nova::Server, OS::Cinder::Volume, OS::Ironic::BareMetalServer, OS::Native::Server, OS::Sfs::Turbo, OS::Workspace::DesktopV2](tag:hws,hws_hk) [资源类型: OS::Nova::Server, OS::Cinder::Volume, OS::Sfs::Turbo](tag:hk_g42,sbc,dt) [资源类型: OS::Nova::Server, OS::Cinder::Volume, OS::Ironic::BareMetalServer, OS::Sfs::Turbo](tag:fcs_vm,ctc,ocb,tm) [资源类型: OS::Nova::Server, OS::Cinder::Volume](tag:tlf,cmcc,hcso_dt) [资源类型: OS::Nova::Server, OS::Cinder::Volume, OS::Sfs::Turbo, OS::Workspace::DesktopV2](tag:g42)
    * status  备份状态 - available: 可用 - protecting: 保护中 - deleting: 删除中 - restoring: 恢复中 - error: 异常 - waiting_protect: 等待保护 - waiting_delete: 等待删除 - waiting_restore: 等待恢复
    * updatedAt  更新时间，例如:\"2020-02-05T10:38:34.209782\"
    * vaultId  存储库ID
    * replicationRecords  复制记录
    * enterpriseProjectId  企业项目id,默认为‘0’。
    * providerId  备份提供商ID，用于区分备份对象。当前取值包含： [0daac4c5-6707-4851-97ba-169e36266b66，该值代表备份对象为云服务器。d1603440-187d-4516-af25-121250c7cc97，该值代表备份对象为云硬盘。3f3c3220-245c-4805-b811-758870015881， 该值代表备份对象为SFS Turbo。a13639de-00be-4e94-af30-26912d75e4a2，该值代表备份对象为混合云VMware备份。](tag:hws,hws_hk) [0daac4c5-6707-4851-97ba-169e36266b66，该值代表备份对象为云服务器。d1603440-187d-4516-af25-121250c7cc97，该值代表备份对象为云硬盘。3f3c3220-245c-4805-b811-758870015881，该值代表备份对象为SFS Turbo。](tag:ocb,tlf,sbc,fcs_vm,g42,tm,dt,cmcc) [0daac4c5-6707-4851-97ba-169e36266b66，该值代表备份对象为云服务器。d1603440-187d-4516-af25-121250c7cc97，该值代表备份对象为云硬盘。3f3c3220-245c-4805-b811-758870015881，该值代表备份对象为SFS Turbo。86a80900-71bf-4961-956a-d52df944f84a，该值代表备份对象为Workspace。](tag:ctc) [0daac4c5-6707-4851-97ba-169e36266b66，该值代表备份对象为云服务器。d1603440-187d-4516-af25-121250c7cc97，该值代表备份对象为云硬盘。](tag:hcso_dt)
    * children  子副本列表
    * incremental  是否是增备
    * version  备份副本快照类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'checkpointId' => null,
        'createdAt' => 'date-time',
        'description' => null,
        'expiredAt' => 'date-time',
        'extendInfo' => null,
        'id' => null,
        'imageType' => null,
        'name' => null,
        'parentId' => null,
        'projectId' => null,
        'protectedAt' => 'date',
        'resourceAz' => null,
        'resourceId' => null,
        'resourceName' => null,
        'resourceSize' => 'int32',
        'resourceType' => null,
        'status' => null,
        'updatedAt' => 'date-time',
        'vaultId' => null,
        'replicationRecords' => null,
        'enterpriseProjectId' => null,
        'providerId' => null,
        'children' => null,
        'incremental' => null,
        'version' => 'int32'
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * checkpointId  还原点ID
    * createdAt  创建时间，例如:\"2020-02-05T10:38:34.209782\"
    * description  备份描述
    * expiredAt  过期时间，例如:\"2020-02-05T10:38:34.209782\"
    * extendInfo  extendInfo
    * id  备份ID
    * imageType  [备份类型。取值为backup和replication。](tag:hws,hws_hk,ocb) [备份类型。取值为backup。](tag:g42,hk_g42,sbc,dt,fcs_vm,ctc,tm,tlf,cmcc,hcso_dt)
    * name  备份名称
    * parentId  父备份ID
    * projectId  项目ID
    * protectedAt  备份时间
    * resourceAz  资源可用区
    * resourceId  资源ID
    * resourceName  资源名称
    * resourceSize  资源大小，单位为GB
    * resourceType  [资源类型: OS::Nova::Server, OS::Cinder::Volume, OS::Ironic::BareMetalServer, OS::Native::Server, OS::Sfs::Turbo, OS::Workspace::DesktopV2](tag:hws,hws_hk) [资源类型: OS::Nova::Server, OS::Cinder::Volume, OS::Sfs::Turbo](tag:hk_g42,sbc,dt) [资源类型: OS::Nova::Server, OS::Cinder::Volume, OS::Ironic::BareMetalServer, OS::Sfs::Turbo](tag:fcs_vm,ctc,ocb,tm) [资源类型: OS::Nova::Server, OS::Cinder::Volume](tag:tlf,cmcc,hcso_dt) [资源类型: OS::Nova::Server, OS::Cinder::Volume, OS::Sfs::Turbo, OS::Workspace::DesktopV2](tag:g42)
    * status  备份状态 - available: 可用 - protecting: 保护中 - deleting: 删除中 - restoring: 恢复中 - error: 异常 - waiting_protect: 等待保护 - waiting_delete: 等待删除 - waiting_restore: 等待恢复
    * updatedAt  更新时间，例如:\"2020-02-05T10:38:34.209782\"
    * vaultId  存储库ID
    * replicationRecords  复制记录
    * enterpriseProjectId  企业项目id,默认为‘0’。
    * providerId  备份提供商ID，用于区分备份对象。当前取值包含： [0daac4c5-6707-4851-97ba-169e36266b66，该值代表备份对象为云服务器。d1603440-187d-4516-af25-121250c7cc97，该值代表备份对象为云硬盘。3f3c3220-245c-4805-b811-758870015881， 该值代表备份对象为SFS Turbo。a13639de-00be-4e94-af30-26912d75e4a2，该值代表备份对象为混合云VMware备份。](tag:hws,hws_hk) [0daac4c5-6707-4851-97ba-169e36266b66，该值代表备份对象为云服务器。d1603440-187d-4516-af25-121250c7cc97，该值代表备份对象为云硬盘。3f3c3220-245c-4805-b811-758870015881，该值代表备份对象为SFS Turbo。](tag:ocb,tlf,sbc,fcs_vm,g42,tm,dt,cmcc) [0daac4c5-6707-4851-97ba-169e36266b66，该值代表备份对象为云服务器。d1603440-187d-4516-af25-121250c7cc97，该值代表备份对象为云硬盘。3f3c3220-245c-4805-b811-758870015881，该值代表备份对象为SFS Turbo。86a80900-71bf-4961-956a-d52df944f84a，该值代表备份对象为Workspace。](tag:ctc) [0daac4c5-6707-4851-97ba-169e36266b66，该值代表备份对象为云服务器。d1603440-187d-4516-af25-121250c7cc97，该值代表备份对象为云硬盘。](tag:hcso_dt)
    * children  子副本列表
    * incremental  是否是增备
    * version  备份副本快照类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'checkpointId' => 'checkpoint_id',
            'createdAt' => 'created_at',
            'description' => 'description',
            'expiredAt' => 'expired_at',
            'extendInfo' => 'extend_info',
            'id' => 'id',
            'imageType' => 'image_type',
            'name' => 'name',
            'parentId' => 'parent_id',
            'projectId' => 'project_id',
            'protectedAt' => 'protected_at',
            'resourceAz' => 'resource_az',
            'resourceId' => 'resource_id',
            'resourceName' => 'resource_name',
            'resourceSize' => 'resource_size',
            'resourceType' => 'resource_type',
            'status' => 'status',
            'updatedAt' => 'updated_at',
            'vaultId' => 'vault_id',
            'replicationRecords' => 'replication_records',
            'enterpriseProjectId' => 'enterprise_project_id',
            'providerId' => 'provider_id',
            'children' => 'children',
            'incremental' => 'incremental',
            'version' => 'version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * checkpointId  还原点ID
    * createdAt  创建时间，例如:\"2020-02-05T10:38:34.209782\"
    * description  备份描述
    * expiredAt  过期时间，例如:\"2020-02-05T10:38:34.209782\"
    * extendInfo  extendInfo
    * id  备份ID
    * imageType  [备份类型。取值为backup和replication。](tag:hws,hws_hk,ocb) [备份类型。取值为backup。](tag:g42,hk_g42,sbc,dt,fcs_vm,ctc,tm,tlf,cmcc,hcso_dt)
    * name  备份名称
    * parentId  父备份ID
    * projectId  项目ID
    * protectedAt  备份时间
    * resourceAz  资源可用区
    * resourceId  资源ID
    * resourceName  资源名称
    * resourceSize  资源大小，单位为GB
    * resourceType  [资源类型: OS::Nova::Server, OS::Cinder::Volume, OS::Ironic::BareMetalServer, OS::Native::Server, OS::Sfs::Turbo, OS::Workspace::DesktopV2](tag:hws,hws_hk) [资源类型: OS::Nova::Server, OS::Cinder::Volume, OS::Sfs::Turbo](tag:hk_g42,sbc,dt) [资源类型: OS::Nova::Server, OS::Cinder::Volume, OS::Ironic::BareMetalServer, OS::Sfs::Turbo](tag:fcs_vm,ctc,ocb,tm) [资源类型: OS::Nova::Server, OS::Cinder::Volume](tag:tlf,cmcc,hcso_dt) [资源类型: OS::Nova::Server, OS::Cinder::Volume, OS::Sfs::Turbo, OS::Workspace::DesktopV2](tag:g42)
    * status  备份状态 - available: 可用 - protecting: 保护中 - deleting: 删除中 - restoring: 恢复中 - error: 异常 - waiting_protect: 等待保护 - waiting_delete: 等待删除 - waiting_restore: 等待恢复
    * updatedAt  更新时间，例如:\"2020-02-05T10:38:34.209782\"
    * vaultId  存储库ID
    * replicationRecords  复制记录
    * enterpriseProjectId  企业项目id,默认为‘0’。
    * providerId  备份提供商ID，用于区分备份对象。当前取值包含： [0daac4c5-6707-4851-97ba-169e36266b66，该值代表备份对象为云服务器。d1603440-187d-4516-af25-121250c7cc97，该值代表备份对象为云硬盘。3f3c3220-245c-4805-b811-758870015881， 该值代表备份对象为SFS Turbo。a13639de-00be-4e94-af30-26912d75e4a2，该值代表备份对象为混合云VMware备份。](tag:hws,hws_hk) [0daac4c5-6707-4851-97ba-169e36266b66，该值代表备份对象为云服务器。d1603440-187d-4516-af25-121250c7cc97，该值代表备份对象为云硬盘。3f3c3220-245c-4805-b811-758870015881，该值代表备份对象为SFS Turbo。](tag:ocb,tlf,sbc,fcs_vm,g42,tm,dt,cmcc) [0daac4c5-6707-4851-97ba-169e36266b66，该值代表备份对象为云服务器。d1603440-187d-4516-af25-121250c7cc97，该值代表备份对象为云硬盘。3f3c3220-245c-4805-b811-758870015881，该值代表备份对象为SFS Turbo。86a80900-71bf-4961-956a-d52df944f84a，该值代表备份对象为Workspace。](tag:ctc) [0daac4c5-6707-4851-97ba-169e36266b66，该值代表备份对象为云服务器。d1603440-187d-4516-af25-121250c7cc97，该值代表备份对象为云硬盘。](tag:hcso_dt)
    * children  子副本列表
    * incremental  是否是增备
    * version  备份副本快照类型
    *
    * @var string[]
    */
    protected static $setters = [
            'checkpointId' => 'setCheckpointId',
            'createdAt' => 'setCreatedAt',
            'description' => 'setDescription',
            'expiredAt' => 'setExpiredAt',
            'extendInfo' => 'setExtendInfo',
            'id' => 'setId',
            'imageType' => 'setImageType',
            'name' => 'setName',
            'parentId' => 'setParentId',
            'projectId' => 'setProjectId',
            'protectedAt' => 'setProtectedAt',
            'resourceAz' => 'setResourceAz',
            'resourceId' => 'setResourceId',
            'resourceName' => 'setResourceName',
            'resourceSize' => 'setResourceSize',
            'resourceType' => 'setResourceType',
            'status' => 'setStatus',
            'updatedAt' => 'setUpdatedAt',
            'vaultId' => 'setVaultId',
            'replicationRecords' => 'setReplicationRecords',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'providerId' => 'setProviderId',
            'children' => 'setChildren',
            'incremental' => 'setIncremental',
            'version' => 'setVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * checkpointId  还原点ID
    * createdAt  创建时间，例如:\"2020-02-05T10:38:34.209782\"
    * description  备份描述
    * expiredAt  过期时间，例如:\"2020-02-05T10:38:34.209782\"
    * extendInfo  extendInfo
    * id  备份ID
    * imageType  [备份类型。取值为backup和replication。](tag:hws,hws_hk,ocb) [备份类型。取值为backup。](tag:g42,hk_g42,sbc,dt,fcs_vm,ctc,tm,tlf,cmcc,hcso_dt)
    * name  备份名称
    * parentId  父备份ID
    * projectId  项目ID
    * protectedAt  备份时间
    * resourceAz  资源可用区
    * resourceId  资源ID
    * resourceName  资源名称
    * resourceSize  资源大小，单位为GB
    * resourceType  [资源类型: OS::Nova::Server, OS::Cinder::Volume, OS::Ironic::BareMetalServer, OS::Native::Server, OS::Sfs::Turbo, OS::Workspace::DesktopV2](tag:hws,hws_hk) [资源类型: OS::Nova::Server, OS::Cinder::Volume, OS::Sfs::Turbo](tag:hk_g42,sbc,dt) [资源类型: OS::Nova::Server, OS::Cinder::Volume, OS::Ironic::BareMetalServer, OS::Sfs::Turbo](tag:fcs_vm,ctc,ocb,tm) [资源类型: OS::Nova::Server, OS::Cinder::Volume](tag:tlf,cmcc,hcso_dt) [资源类型: OS::Nova::Server, OS::Cinder::Volume, OS::Sfs::Turbo, OS::Workspace::DesktopV2](tag:g42)
    * status  备份状态 - available: 可用 - protecting: 保护中 - deleting: 删除中 - restoring: 恢复中 - error: 异常 - waiting_protect: 等待保护 - waiting_delete: 等待删除 - waiting_restore: 等待恢复
    * updatedAt  更新时间，例如:\"2020-02-05T10:38:34.209782\"
    * vaultId  存储库ID
    * replicationRecords  复制记录
    * enterpriseProjectId  企业项目id,默认为‘0’。
    * providerId  备份提供商ID，用于区分备份对象。当前取值包含： [0daac4c5-6707-4851-97ba-169e36266b66，该值代表备份对象为云服务器。d1603440-187d-4516-af25-121250c7cc97，该值代表备份对象为云硬盘。3f3c3220-245c-4805-b811-758870015881， 该值代表备份对象为SFS Turbo。a13639de-00be-4e94-af30-26912d75e4a2，该值代表备份对象为混合云VMware备份。](tag:hws,hws_hk) [0daac4c5-6707-4851-97ba-169e36266b66，该值代表备份对象为云服务器。d1603440-187d-4516-af25-121250c7cc97，该值代表备份对象为云硬盘。3f3c3220-245c-4805-b811-758870015881，该值代表备份对象为SFS Turbo。](tag:ocb,tlf,sbc,fcs_vm,g42,tm,dt,cmcc) [0daac4c5-6707-4851-97ba-169e36266b66，该值代表备份对象为云服务器。d1603440-187d-4516-af25-121250c7cc97，该值代表备份对象为云硬盘。3f3c3220-245c-4805-b811-758870015881，该值代表备份对象为SFS Turbo。86a80900-71bf-4961-956a-d52df944f84a，该值代表备份对象为Workspace。](tag:ctc) [0daac4c5-6707-4851-97ba-169e36266b66，该值代表备份对象为云服务器。d1603440-187d-4516-af25-121250c7cc97，该值代表备份对象为云硬盘。](tag:hcso_dt)
    * children  子副本列表
    * incremental  是否是增备
    * version  备份副本快照类型
    *
    * @var string[]
    */
    protected static $getters = [
            'checkpointId' => 'getCheckpointId',
            'createdAt' => 'getCreatedAt',
            'description' => 'getDescription',
            'expiredAt' => 'getExpiredAt',
            'extendInfo' => 'getExtendInfo',
            'id' => 'getId',
            'imageType' => 'getImageType',
            'name' => 'getName',
            'parentId' => 'getParentId',
            'projectId' => 'getProjectId',
            'protectedAt' => 'getProtectedAt',
            'resourceAz' => 'getResourceAz',
            'resourceId' => 'getResourceId',
            'resourceName' => 'getResourceName',
            'resourceSize' => 'getResourceSize',
            'resourceType' => 'getResourceType',
            'status' => 'getStatus',
            'updatedAt' => 'getUpdatedAt',
            'vaultId' => 'getVaultId',
            'replicationRecords' => 'getReplicationRecords',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'providerId' => 'getProviderId',
            'children' => 'getChildren',
            'incremental' => 'getIncremental',
            'version' => 'getVersion'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    const STATUS_AVAILABLE = 'available';
    const STATUS_PROTECTING = 'protecting';
    const STATUS_DELETING = 'deleting';
    const STATUS_RESTORING = 'restoring';
    const STATUS_ERROR = 'error';
    const STATUS_WAITING_PROTECT = 'waiting_protect';
    const STATUS_WAITING_DELETE = 'waiting_delete';
    const STATUS_WAITING_RESTORE = 'waiting_restore';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_AVAILABLE,
            self::STATUS_PROTECTING,
            self::STATUS_DELETING,
            self::STATUS_RESTORING,
            self::STATUS_ERROR,
            self::STATUS_WAITING_PROTECT,
            self::STATUS_WAITING_DELETE,
            self::STATUS_WAITING_RESTORE,
        ];
    }


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['checkpointId'] = isset($data['checkpointId']) ? $data['checkpointId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['expiredAt'] = isset($data['expiredAt']) ? $data['expiredAt'] : null;
        $this->container['extendInfo'] = isset($data['extendInfo']) ? $data['extendInfo'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['protectedAt'] = isset($data['protectedAt']) ? $data['protectedAt'] : null;
        $this->container['resourceAz'] = isset($data['resourceAz']) ? $data['resourceAz'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['resourceSize'] = isset($data['resourceSize']) ? $data['resourceSize'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['vaultId'] = isset($data['vaultId']) ? $data['vaultId'] : null;
        $this->container['replicationRecords'] = isset($data['replicationRecords']) ? $data['replicationRecords'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['providerId'] = isset($data['providerId']) ? $data['providerId'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
        $this->container['incremental'] = isset($data['incremental']) ? $data['incremental'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['checkpointId'] === null) {
            $invalidProperties[] = "'checkpointId' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['expiredAt'] === null) {
            $invalidProperties[] = "'expiredAt' can't be null";
        }
        if ($this->container['extendInfo'] === null) {
            $invalidProperties[] = "'extendInfo' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['imageType'] === null) {
            $invalidProperties[] = "'imageType' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['parentId'] === null) {
            $invalidProperties[] = "'parentId' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['protectedAt'] === null) {
            $invalidProperties[] = "'protectedAt' can't be null";
        }
        if ($this->container['resourceAz'] === null) {
            $invalidProperties[] = "'resourceAz' can't be null";
        }
        if ($this->container['resourceId'] === null) {
            $invalidProperties[] = "'resourceId' can't be null";
        }
        if ($this->container['resourceName'] === null) {
            $invalidProperties[] = "'resourceName' can't be null";
        }
        if ($this->container['resourceSize'] === null) {
            $invalidProperties[] = "'resourceSize' can't be null";
        }
        if ($this->container['resourceType'] === null) {
            $invalidProperties[] = "'resourceType' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['vaultId'] === null) {
            $invalidProperties[] = "'vaultId' can't be null";
        }
        if ($this->container['providerId'] === null) {
            $invalidProperties[] = "'providerId' can't be null";
        }
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets checkpointId
    *  还原点ID
    *
    * @return string
    */
    public function getCheckpointId()
    {
        return $this->container['checkpointId'];
    }

    /**
    * Sets checkpointId
    *
    * @param string $checkpointId 还原点ID
    *
    * @return $this
    */
    public function setCheckpointId($checkpointId)
    {
        $this->container['checkpointId'] = $checkpointId;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间，例如:\"2020-02-05T10:38:34.209782\"
    *
    * @return \DateTime
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime $createdAt 创建时间，例如:\"2020-02-05T10:38:34.209782\"
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets description
    *  备份描述
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 备份描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets expiredAt
    *  过期时间，例如:\"2020-02-05T10:38:34.209782\"
    *
    * @return \DateTime
    */
    public function getExpiredAt()
    {
        return $this->container['expiredAt'];
    }

    /**
    * Sets expiredAt
    *
    * @param \DateTime $expiredAt 过期时间，例如:\"2020-02-05T10:38:34.209782\"
    *
    * @return $this
    */
    public function setExpiredAt($expiredAt)
    {
        $this->container['expiredAt'] = $expiredAt;
        return $this;
    }

    /**
    * Gets extendInfo
    *  extendInfo
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\BackupExtendInfo
    */
    public function getExtendInfo()
    {
        return $this->container['extendInfo'];
    }

    /**
    * Sets extendInfo
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\BackupExtendInfo $extendInfo extendInfo
    *
    * @return $this
    */
    public function setExtendInfo($extendInfo)
    {
        $this->container['extendInfo'] = $extendInfo;
        return $this;
    }

    /**
    * Gets id
    *  备份ID
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 备份ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets imageType
    *  [备份类型。取值为backup和replication。](tag:hws,hws_hk,ocb) [备份类型。取值为backup。](tag:g42,hk_g42,sbc,dt,fcs_vm,ctc,tm,tlf,cmcc,hcso_dt)
    *
    * @return string
    */
    public function getImageType()
    {
        return $this->container['imageType'];
    }

    /**
    * Sets imageType
    *
    * @param string $imageType [备份类型。取值为backup和replication。](tag:hws,hws_hk,ocb) [备份类型。取值为backup。](tag:g42,hk_g42,sbc,dt,fcs_vm,ctc,tm,tlf,cmcc,hcso_dt)
    *
    * @return $this
    */
    public function setImageType($imageType)
    {
        $this->container['imageType'] = $imageType;
        return $this;
    }

    /**
    * Gets name
    *  备份名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 备份名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets parentId
    *  父备份ID
    *
    * @return string
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param string $parentId 父备份ID
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets protectedAt
    *  备份时间
    *
    * @return \DateTime
    */
    public function getProtectedAt()
    {
        return $this->container['protectedAt'];
    }

    /**
    * Sets protectedAt
    *
    * @param \DateTime $protectedAt 备份时间
    *
    * @return $this
    */
    public function setProtectedAt($protectedAt)
    {
        $this->container['protectedAt'] = $protectedAt;
        return $this;
    }

    /**
    * Gets resourceAz
    *  资源可用区
    *
    * @return string
    */
    public function getResourceAz()
    {
        return $this->container['resourceAz'];
    }

    /**
    * Sets resourceAz
    *
    * @param string $resourceAz 资源可用区
    *
    * @return $this
    */
    public function setResourceAz($resourceAz)
    {
        $this->container['resourceAz'] = $resourceAz;
        return $this;
    }

    /**
    * Gets resourceId
    *  资源ID
    *
    * @return string
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string $resourceId 资源ID
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets resourceName
    *  资源名称
    *
    * @return string
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string $resourceName 资源名称
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets resourceSize
    *  资源大小，单位为GB
    *
    * @return int
    */
    public function getResourceSize()
    {
        return $this->container['resourceSize'];
    }

    /**
    * Sets resourceSize
    *
    * @param int $resourceSize 资源大小，单位为GB
    *
    * @return $this
    */
    public function setResourceSize($resourceSize)
    {
        $this->container['resourceSize'] = $resourceSize;
        return $this;
    }

    /**
    * Gets resourceType
    *  [资源类型: OS::Nova::Server, OS::Cinder::Volume, OS::Ironic::BareMetalServer, OS::Native::Server, OS::Sfs::Turbo, OS::Workspace::DesktopV2](tag:hws,hws_hk) [资源类型: OS::Nova::Server, OS::Cinder::Volume, OS::Sfs::Turbo](tag:hk_g42,sbc,dt) [资源类型: OS::Nova::Server, OS::Cinder::Volume, OS::Ironic::BareMetalServer, OS::Sfs::Turbo](tag:fcs_vm,ctc,ocb,tm) [资源类型: OS::Nova::Server, OS::Cinder::Volume](tag:tlf,cmcc,hcso_dt) [资源类型: OS::Nova::Server, OS::Cinder::Volume, OS::Sfs::Turbo, OS::Workspace::DesktopV2](tag:g42)
    *
    * @return string
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string $resourceType [资源类型: OS::Nova::Server, OS::Cinder::Volume, OS::Ironic::BareMetalServer, OS::Native::Server, OS::Sfs::Turbo, OS::Workspace::DesktopV2](tag:hws,hws_hk) [资源类型: OS::Nova::Server, OS::Cinder::Volume, OS::Sfs::Turbo](tag:hk_g42,sbc,dt) [资源类型: OS::Nova::Server, OS::Cinder::Volume, OS::Ironic::BareMetalServer, OS::Sfs::Turbo](tag:fcs_vm,ctc,ocb,tm) [资源类型: OS::Nova::Server, OS::Cinder::Volume](tag:tlf,cmcc,hcso_dt) [资源类型: OS::Nova::Server, OS::Cinder::Volume, OS::Sfs::Turbo, OS::Workspace::DesktopV2](tag:g42)
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets status
    *  备份状态 - available: 可用 - protecting: 保护中 - deleting: 删除中 - restoring: 恢复中 - error: 异常 - waiting_protect: 等待保护 - waiting_delete: 等待删除 - waiting_restore: 等待恢复
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 备份状态 - available: 可用 - protecting: 保护中 - deleting: 删除中 - restoring: 恢复中 - error: 异常 - waiting_protect: 等待保护 - waiting_delete: 等待删除 - waiting_restore: 等待恢复
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets updatedAt
    *  更新时间，例如:\"2020-02-05T10:38:34.209782\"
    *
    * @return \DateTime
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime $updatedAt 更新时间，例如:\"2020-02-05T10:38:34.209782\"
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets vaultId
    *  存储库ID
    *
    * @return string
    */
    public function getVaultId()
    {
        return $this->container['vaultId'];
    }

    /**
    * Sets vaultId
    *
    * @param string $vaultId 存储库ID
    *
    * @return $this
    */
    public function setVaultId($vaultId)
    {
        $this->container['vaultId'] = $vaultId;
        return $this;
    }

    /**
    * Gets replicationRecords
    *  复制记录
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\ReplicationRecordGet[]|null
    */
    public function getReplicationRecords()
    {
        return $this->container['replicationRecords'];
    }

    /**
    * Sets replicationRecords
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\ReplicationRecordGet[]|null $replicationRecords 复制记录
    *
    * @return $this
    */
    public function setReplicationRecords($replicationRecords)
    {
        $this->container['replicationRecords'] = $replicationRecords;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id,默认为‘0’。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目id,默认为‘0’。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets providerId
    *  备份提供商ID，用于区分备份对象。当前取值包含： [0daac4c5-6707-4851-97ba-169e36266b66，该值代表备份对象为云服务器。d1603440-187d-4516-af25-121250c7cc97，该值代表备份对象为云硬盘。3f3c3220-245c-4805-b811-758870015881， 该值代表备份对象为SFS Turbo。a13639de-00be-4e94-af30-26912d75e4a2，该值代表备份对象为混合云VMware备份。](tag:hws,hws_hk) [0daac4c5-6707-4851-97ba-169e36266b66，该值代表备份对象为云服务器。d1603440-187d-4516-af25-121250c7cc97，该值代表备份对象为云硬盘。3f3c3220-245c-4805-b811-758870015881，该值代表备份对象为SFS Turbo。](tag:ocb,tlf,sbc,fcs_vm,g42,tm,dt,cmcc) [0daac4c5-6707-4851-97ba-169e36266b66，该值代表备份对象为云服务器。d1603440-187d-4516-af25-121250c7cc97，该值代表备份对象为云硬盘。3f3c3220-245c-4805-b811-758870015881，该值代表备份对象为SFS Turbo。86a80900-71bf-4961-956a-d52df944f84a，该值代表备份对象为Workspace。](tag:ctc) [0daac4c5-6707-4851-97ba-169e36266b66，该值代表备份对象为云服务器。d1603440-187d-4516-af25-121250c7cc97，该值代表备份对象为云硬盘。](tag:hcso_dt)
    *
    * @return string
    */
    public function getProviderId()
    {
        return $this->container['providerId'];
    }

    /**
    * Sets providerId
    *
    * @param string $providerId 备份提供商ID，用于区分备份对象。当前取值包含： [0daac4c5-6707-4851-97ba-169e36266b66，该值代表备份对象为云服务器。d1603440-187d-4516-af25-121250c7cc97，该值代表备份对象为云硬盘。3f3c3220-245c-4805-b811-758870015881， 该值代表备份对象为SFS Turbo。a13639de-00be-4e94-af30-26912d75e4a2，该值代表备份对象为混合云VMware备份。](tag:hws,hws_hk) [0daac4c5-6707-4851-97ba-169e36266b66，该值代表备份对象为云服务器。d1603440-187d-4516-af25-121250c7cc97，该值代表备份对象为云硬盘。3f3c3220-245c-4805-b811-758870015881，该值代表备份对象为SFS Turbo。](tag:ocb,tlf,sbc,fcs_vm,g42,tm,dt,cmcc) [0daac4c5-6707-4851-97ba-169e36266b66，该值代表备份对象为云服务器。d1603440-187d-4516-af25-121250c7cc97，该值代表备份对象为云硬盘。3f3c3220-245c-4805-b811-758870015881，该值代表备份对象为SFS Turbo。86a80900-71bf-4961-956a-d52df944f84a，该值代表备份对象为Workspace。](tag:ctc) [0daac4c5-6707-4851-97ba-169e36266b66，该值代表备份对象为云服务器。d1603440-187d-4516-af25-121250c7cc97，该值代表备份对象为云硬盘。](tag:hcso_dt)
    *
    * @return $this
    */
    public function setProviderId($providerId)
    {
        $this->container['providerId'] = $providerId;
        return $this;
    }

    /**
    * Gets children
    *  子副本列表
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\BackupResp[]|null
    */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
    * Sets children
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\BackupResp[]|null $children 子副本列表
    *
    * @return $this
    */
    public function setChildren($children)
    {
        $this->container['children'] = $children;
        return $this;
    }

    /**
    * Gets incremental
    *  是否是增备
    *
    * @return bool|null
    */
    public function getIncremental()
    {
        return $this->container['incremental'];
    }

    /**
    * Sets incremental
    *
    * @param bool|null $incremental 是否是增备
    *
    * @return $this
    */
    public function setIncremental($incremental)
    {
        $this->container['incremental'] = $incremental;
        return $this;
    }

    /**
    * Gets version
    *  备份副本快照类型
    *
    * @return int|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param int|null $version 备份副本快照类型
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

