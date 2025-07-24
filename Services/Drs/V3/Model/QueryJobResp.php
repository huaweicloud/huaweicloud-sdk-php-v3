<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryJobResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryJobResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  任务id
    * parentId  父任务id。
    * name  任务名称
    * status  任务状态。 - CREATING：创建中 - CREATE_FAILED：创建失败 - CONFIGURATION：配置中 - STARTJOBING：启动中 - WAITING_FOR_START：等待启动中 - START_JOB_FAILED：启动失败 - PAUSING：已暂停 - FULL_TRANSFER_STARTED：全量开始，灾备场景下为初始化 - FULL_TRANSFER_FAILED：全量失败，灾备场景下为初始化失败 - FULL_TRANSFER_COMPLETE：全量完成，灾备场景下为初始化完成 - INCRE_TRANSFER_STARTED：增量开始，灾备场景下为灾备中 - INCRE_TRANSFER_FAILED：增量失败，灾备场景下为灾备异常 - RELEASE_RESOURCE_STARTED：结束任务中 - RELEASE_RESOURCE_FAILED：结束任务失败 - RELEASE_RESOURCE_COMPLETE：已结束 - REBUILD_NODE_STARTED：故障恢复中 - REBUILD_NODE_FAILED：故障恢复失败 - CHANGE_JOB_STARTED：任务变更中 - CHANGE_JOB_FAILED：任务变更失败 - DELETED：已删除 - CHILD_TRANSFER_STARTING：再编辑子任务启动中 - CHILD_TRANSFER_STARTED：再编辑子任务迁移中 - CHILD_TRANSFER_COMPLETE：再编辑子任务迁移完成 - CHILD_TRANSFER_FAILED：再编辑子任务迁移失败 - RELEASE_CHILD_TRANSFER_STARTED：再编辑子任务结束中 - RELEASE_CHILD_TRANSFER_COMPLETE：再编辑子任务已结束 - NODE_UPGRADE_START：升级开始 - NODE_UPGRADE_COMPLETE：升级完成 - NODE_UPGRADE_FAILED：升级失败
    * description  描述信息
    * createTime  创建时间，时间戳格式。
    * taskType  迁移模式
    * sourceEndpoint  sourceEndpoint
    * dmqEndpoint  dmqEndpoint
    * sourceSharding  物理源库信息。
    * targetEndpoint  targetEndpoint
    * netType  网络类型
    * failedReason  失败原因。
    * instInfo  instInfo
    * actualStartTime  实际启动时间，时间戳格式。
    * fullTransferCompleteTime  全量完成时间，时间戳格式。
    * updateTime  更新时间，时间戳格式
    * jobDirection  任务方向
    * dbUseType  迁移场景 - migration：实时迁移 - sync：实时同步 - cloudDataGuard：实时灾备
    * needRestart  是否需要重启
    * isTargetReadonly  指定目标实例是否限制为只读
    * conflictPolicy  冲突忽略策略 - stop：冲突失败 - overwrite：冲突覆盖 - ignore：冲突忽略
    * filterDdlPolicy  过滤DDL策略 - drop_database：过滤drop_database - drop_databasefilter_all：过滤所有ddl - \"\"：不过滤
    * speedLimit  迁移速度限制。
    * schemaType  迁移方案 - Replication-主从复制 - Tungsten-日志解析 - PGBaseBackup-PG备份
    * nodeNum  节点个数。
    * objectSwitch  对象选择开关
    * masterJobId  主任务Id。
    * fullMode  全量快照模式。
    * structTrans  是否迁移结构。
    * indexTrans  否迁移索引。
    * replaceDefiner  是否使用目标库的用户替换掉definer。
    * migrateUser  是否迁移用户。
    * syncDatabase  是否库级同步。
    * errorCode  错误码
    * errorMessage  错误信息。
    * targetRootDb  targetRootDb
    * azCode  node所在AZ
    * vpcId  node所在VPC
    * subnetId  node所在子网
    * securityGroupId  node所在安全组
    * multiWrite  是否多主灾备任务,双主灾备时有值为true
    * supportIpV6  是否支持IPV6
    * inheritId  继承的任务ID，Oracle_Mrskafka链路时使用。
    * gtid  断点的GTID集合
    * alarmNotify  alarmNotify
    * increStartPosition  增量任务启动位点
    * isMultiAz  是否是主备任务。
    * azName  node所在节点AZ名称。
    * masterAz  主备任务主AZ。
    * slaveAz  主备任务备AZ。
    * nodeRole  任务主备角色。
    * periodOrder  periodOrder
    * objectInfos  已同步对象信息。
    * originalJobDirection  初始任务方向。 取值： - up：入云，灾备场景时对应本云为备。 - down：出云，灾备场景时对应本云为主。 - non-dbs：自建。
    * dataTransformation  dataTransformation
    * tags  DRS任务标签。
    * publicIpList  指定公网Ip的信息。
    * bindPublicIpState  是否成功绑定公网IP。
    * children  多任务时，存在子任务绑定失败时，返回子任务的信息。
    * isOpenFastClean  是否开启云数据库RDS for MySQL/MariaDB的binlog快速清理。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'parentId' => 'string',
            'name' => 'string',
            'status' => 'string',
            'description' => 'string',
            'createTime' => 'string',
            'taskType' => 'string',
            'sourceEndpoint' => '\HuaweiCloud\SDK\Drs\V3\Model\Endpoint',
            'dmqEndpoint' => '\HuaweiCloud\SDK\Drs\V3\Model\Endpoint',
            'sourceSharding' => '\HuaweiCloud\SDK\Drs\V3\Model\Endpoint[]',
            'targetEndpoint' => '\HuaweiCloud\SDK\Drs\V3\Model\Endpoint',
            'netType' => 'string',
            'failedReason' => 'string',
            'instInfo' => '\HuaweiCloud\SDK\Drs\V3\Model\InstInfo',
            'actualStartTime' => 'string',
            'fullTransferCompleteTime' => 'string',
            'updateTime' => 'string',
            'jobDirection' => 'string',
            'dbUseType' => 'string',
            'needRestart' => 'bool',
            'isTargetReadonly' => 'bool',
            'conflictPolicy' => 'string',
            'filterDdlPolicy' => 'string',
            'speedLimit' => '\HuaweiCloud\SDK\Drs\V3\Model\SpeedLimitInfo[]',
            'schemaType' => 'string',
            'nodeNum' => 'int',
            'objectSwitch' => 'bool',
            'masterJobId' => 'string',
            'fullMode' => 'string',
            'structTrans' => 'bool',
            'indexTrans' => 'bool',
            'replaceDefiner' => 'bool',
            'migrateUser' => 'bool',
            'syncDatabase' => 'bool',
            'errorCode' => 'string',
            'errorMessage' => 'string',
            'targetRootDb' => '\HuaweiCloud\SDK\Drs\V3\Model\DefaultRootDb',
            'azCode' => 'string',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'securityGroupId' => 'string',
            'multiWrite' => 'bool',
            'supportIpV6' => 'bool',
            'inheritId' => 'string',
            'gtid' => 'string',
            'alarmNotify' => '\HuaweiCloud\SDK\Drs\V3\Model\QuerySmnInfoResp',
            'increStartPosition' => 'string',
            'isMultiAz' => 'bool',
            'azName' => 'string',
            'masterAz' => 'string',
            'slaveAz' => 'string',
            'nodeRole' => 'string',
            'periodOrder' => '\HuaweiCloud\SDK\Drs\V3\Model\PeriodOrderResp',
            'objectInfos' => '\HuaweiCloud\SDK\Drs\V3\Model\DatabaseObjectInfo[]',
            'originalJobDirection' => 'string',
            'dataTransformation' => '\HuaweiCloud\SDK\Drs\V3\Model\GetDataTransformationResp',
            'tags' => '\HuaweiCloud\SDK\Drs\V3\Model\Tag[]',
            'publicIpList' => '\HuaweiCloud\SDK\Drs\V3\Model\PublicIpConfig[]',
            'bindPublicIpState' => 'string',
            'children' => '\HuaweiCloud\SDK\Drs\V3\Model\FailedToBindEipChildInfo[]',
            'isOpenFastClean' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  任务id
    * parentId  父任务id。
    * name  任务名称
    * status  任务状态。 - CREATING：创建中 - CREATE_FAILED：创建失败 - CONFIGURATION：配置中 - STARTJOBING：启动中 - WAITING_FOR_START：等待启动中 - START_JOB_FAILED：启动失败 - PAUSING：已暂停 - FULL_TRANSFER_STARTED：全量开始，灾备场景下为初始化 - FULL_TRANSFER_FAILED：全量失败，灾备场景下为初始化失败 - FULL_TRANSFER_COMPLETE：全量完成，灾备场景下为初始化完成 - INCRE_TRANSFER_STARTED：增量开始，灾备场景下为灾备中 - INCRE_TRANSFER_FAILED：增量失败，灾备场景下为灾备异常 - RELEASE_RESOURCE_STARTED：结束任务中 - RELEASE_RESOURCE_FAILED：结束任务失败 - RELEASE_RESOURCE_COMPLETE：已结束 - REBUILD_NODE_STARTED：故障恢复中 - REBUILD_NODE_FAILED：故障恢复失败 - CHANGE_JOB_STARTED：任务变更中 - CHANGE_JOB_FAILED：任务变更失败 - DELETED：已删除 - CHILD_TRANSFER_STARTING：再编辑子任务启动中 - CHILD_TRANSFER_STARTED：再编辑子任务迁移中 - CHILD_TRANSFER_COMPLETE：再编辑子任务迁移完成 - CHILD_TRANSFER_FAILED：再编辑子任务迁移失败 - RELEASE_CHILD_TRANSFER_STARTED：再编辑子任务结束中 - RELEASE_CHILD_TRANSFER_COMPLETE：再编辑子任务已结束 - NODE_UPGRADE_START：升级开始 - NODE_UPGRADE_COMPLETE：升级完成 - NODE_UPGRADE_FAILED：升级失败
    * description  描述信息
    * createTime  创建时间，时间戳格式。
    * taskType  迁移模式
    * sourceEndpoint  sourceEndpoint
    * dmqEndpoint  dmqEndpoint
    * sourceSharding  物理源库信息。
    * targetEndpoint  targetEndpoint
    * netType  网络类型
    * failedReason  失败原因。
    * instInfo  instInfo
    * actualStartTime  实际启动时间，时间戳格式。
    * fullTransferCompleteTime  全量完成时间，时间戳格式。
    * updateTime  更新时间，时间戳格式
    * jobDirection  任务方向
    * dbUseType  迁移场景 - migration：实时迁移 - sync：实时同步 - cloudDataGuard：实时灾备
    * needRestart  是否需要重启
    * isTargetReadonly  指定目标实例是否限制为只读
    * conflictPolicy  冲突忽略策略 - stop：冲突失败 - overwrite：冲突覆盖 - ignore：冲突忽略
    * filterDdlPolicy  过滤DDL策略 - drop_database：过滤drop_database - drop_databasefilter_all：过滤所有ddl - \"\"：不过滤
    * speedLimit  迁移速度限制。
    * schemaType  迁移方案 - Replication-主从复制 - Tungsten-日志解析 - PGBaseBackup-PG备份
    * nodeNum  节点个数。
    * objectSwitch  对象选择开关
    * masterJobId  主任务Id。
    * fullMode  全量快照模式。
    * structTrans  是否迁移结构。
    * indexTrans  否迁移索引。
    * replaceDefiner  是否使用目标库的用户替换掉definer。
    * migrateUser  是否迁移用户。
    * syncDatabase  是否库级同步。
    * errorCode  错误码
    * errorMessage  错误信息。
    * targetRootDb  targetRootDb
    * azCode  node所在AZ
    * vpcId  node所在VPC
    * subnetId  node所在子网
    * securityGroupId  node所在安全组
    * multiWrite  是否多主灾备任务,双主灾备时有值为true
    * supportIpV6  是否支持IPV6
    * inheritId  继承的任务ID，Oracle_Mrskafka链路时使用。
    * gtid  断点的GTID集合
    * alarmNotify  alarmNotify
    * increStartPosition  增量任务启动位点
    * isMultiAz  是否是主备任务。
    * azName  node所在节点AZ名称。
    * masterAz  主备任务主AZ。
    * slaveAz  主备任务备AZ。
    * nodeRole  任务主备角色。
    * periodOrder  periodOrder
    * objectInfos  已同步对象信息。
    * originalJobDirection  初始任务方向。 取值： - up：入云，灾备场景时对应本云为备。 - down：出云，灾备场景时对应本云为主。 - non-dbs：自建。
    * dataTransformation  dataTransformation
    * tags  DRS任务标签。
    * publicIpList  指定公网Ip的信息。
    * bindPublicIpState  是否成功绑定公网IP。
    * children  多任务时，存在子任务绑定失败时，返回子任务的信息。
    * isOpenFastClean  是否开启云数据库RDS for MySQL/MariaDB的binlog快速清理。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'parentId' => null,
        'name' => null,
        'status' => null,
        'description' => null,
        'createTime' => null,
        'taskType' => null,
        'sourceEndpoint' => null,
        'dmqEndpoint' => null,
        'sourceSharding' => null,
        'targetEndpoint' => null,
        'netType' => null,
        'failedReason' => null,
        'instInfo' => null,
        'actualStartTime' => null,
        'fullTransferCompleteTime' => null,
        'updateTime' => null,
        'jobDirection' => null,
        'dbUseType' => null,
        'needRestart' => null,
        'isTargetReadonly' => null,
        'conflictPolicy' => null,
        'filterDdlPolicy' => null,
        'speedLimit' => null,
        'schemaType' => null,
        'nodeNum' => 'int32',
        'objectSwitch' => null,
        'masterJobId' => null,
        'fullMode' => null,
        'structTrans' => null,
        'indexTrans' => null,
        'replaceDefiner' => null,
        'migrateUser' => null,
        'syncDatabase' => null,
        'errorCode' => null,
        'errorMessage' => null,
        'targetRootDb' => null,
        'azCode' => null,
        'vpcId' => null,
        'subnetId' => null,
        'securityGroupId' => null,
        'multiWrite' => null,
        'supportIpV6' => null,
        'inheritId' => null,
        'gtid' => null,
        'alarmNotify' => null,
        'increStartPosition' => null,
        'isMultiAz' => null,
        'azName' => null,
        'masterAz' => null,
        'slaveAz' => null,
        'nodeRole' => null,
        'periodOrder' => null,
        'objectInfos' => null,
        'originalJobDirection' => null,
        'dataTransformation' => null,
        'tags' => null,
        'publicIpList' => null,
        'bindPublicIpState' => null,
        'children' => null,
        'isOpenFastClean' => null
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
    * id  任务id
    * parentId  父任务id。
    * name  任务名称
    * status  任务状态。 - CREATING：创建中 - CREATE_FAILED：创建失败 - CONFIGURATION：配置中 - STARTJOBING：启动中 - WAITING_FOR_START：等待启动中 - START_JOB_FAILED：启动失败 - PAUSING：已暂停 - FULL_TRANSFER_STARTED：全量开始，灾备场景下为初始化 - FULL_TRANSFER_FAILED：全量失败，灾备场景下为初始化失败 - FULL_TRANSFER_COMPLETE：全量完成，灾备场景下为初始化完成 - INCRE_TRANSFER_STARTED：增量开始，灾备场景下为灾备中 - INCRE_TRANSFER_FAILED：增量失败，灾备场景下为灾备异常 - RELEASE_RESOURCE_STARTED：结束任务中 - RELEASE_RESOURCE_FAILED：结束任务失败 - RELEASE_RESOURCE_COMPLETE：已结束 - REBUILD_NODE_STARTED：故障恢复中 - REBUILD_NODE_FAILED：故障恢复失败 - CHANGE_JOB_STARTED：任务变更中 - CHANGE_JOB_FAILED：任务变更失败 - DELETED：已删除 - CHILD_TRANSFER_STARTING：再编辑子任务启动中 - CHILD_TRANSFER_STARTED：再编辑子任务迁移中 - CHILD_TRANSFER_COMPLETE：再编辑子任务迁移完成 - CHILD_TRANSFER_FAILED：再编辑子任务迁移失败 - RELEASE_CHILD_TRANSFER_STARTED：再编辑子任务结束中 - RELEASE_CHILD_TRANSFER_COMPLETE：再编辑子任务已结束 - NODE_UPGRADE_START：升级开始 - NODE_UPGRADE_COMPLETE：升级完成 - NODE_UPGRADE_FAILED：升级失败
    * description  描述信息
    * createTime  创建时间，时间戳格式。
    * taskType  迁移模式
    * sourceEndpoint  sourceEndpoint
    * dmqEndpoint  dmqEndpoint
    * sourceSharding  物理源库信息。
    * targetEndpoint  targetEndpoint
    * netType  网络类型
    * failedReason  失败原因。
    * instInfo  instInfo
    * actualStartTime  实际启动时间，时间戳格式。
    * fullTransferCompleteTime  全量完成时间，时间戳格式。
    * updateTime  更新时间，时间戳格式
    * jobDirection  任务方向
    * dbUseType  迁移场景 - migration：实时迁移 - sync：实时同步 - cloudDataGuard：实时灾备
    * needRestart  是否需要重启
    * isTargetReadonly  指定目标实例是否限制为只读
    * conflictPolicy  冲突忽略策略 - stop：冲突失败 - overwrite：冲突覆盖 - ignore：冲突忽略
    * filterDdlPolicy  过滤DDL策略 - drop_database：过滤drop_database - drop_databasefilter_all：过滤所有ddl - \"\"：不过滤
    * speedLimit  迁移速度限制。
    * schemaType  迁移方案 - Replication-主从复制 - Tungsten-日志解析 - PGBaseBackup-PG备份
    * nodeNum  节点个数。
    * objectSwitch  对象选择开关
    * masterJobId  主任务Id。
    * fullMode  全量快照模式。
    * structTrans  是否迁移结构。
    * indexTrans  否迁移索引。
    * replaceDefiner  是否使用目标库的用户替换掉definer。
    * migrateUser  是否迁移用户。
    * syncDatabase  是否库级同步。
    * errorCode  错误码
    * errorMessage  错误信息。
    * targetRootDb  targetRootDb
    * azCode  node所在AZ
    * vpcId  node所在VPC
    * subnetId  node所在子网
    * securityGroupId  node所在安全组
    * multiWrite  是否多主灾备任务,双主灾备时有值为true
    * supportIpV6  是否支持IPV6
    * inheritId  继承的任务ID，Oracle_Mrskafka链路时使用。
    * gtid  断点的GTID集合
    * alarmNotify  alarmNotify
    * increStartPosition  增量任务启动位点
    * isMultiAz  是否是主备任务。
    * azName  node所在节点AZ名称。
    * masterAz  主备任务主AZ。
    * slaveAz  主备任务备AZ。
    * nodeRole  任务主备角色。
    * periodOrder  periodOrder
    * objectInfos  已同步对象信息。
    * originalJobDirection  初始任务方向。 取值： - up：入云，灾备场景时对应本云为备。 - down：出云，灾备场景时对应本云为主。 - non-dbs：自建。
    * dataTransformation  dataTransformation
    * tags  DRS任务标签。
    * publicIpList  指定公网Ip的信息。
    * bindPublicIpState  是否成功绑定公网IP。
    * children  多任务时，存在子任务绑定失败时，返回子任务的信息。
    * isOpenFastClean  是否开启云数据库RDS for MySQL/MariaDB的binlog快速清理。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'parentId' => 'parent_id',
            'name' => 'name',
            'status' => 'status',
            'description' => 'description',
            'createTime' => 'create_time',
            'taskType' => 'task_type',
            'sourceEndpoint' => 'source_endpoint',
            'dmqEndpoint' => 'dmq_endpoint',
            'sourceSharding' => 'source_sharding',
            'targetEndpoint' => 'target_endpoint',
            'netType' => 'net_type',
            'failedReason' => 'failed_reason',
            'instInfo' => 'inst_info',
            'actualStartTime' => 'actual_start_time',
            'fullTransferCompleteTime' => 'full_transfer_complete_time',
            'updateTime' => 'update_time',
            'jobDirection' => 'job_direction',
            'dbUseType' => 'db_use_type',
            'needRestart' => 'need_restart',
            'isTargetReadonly' => 'is_target_readonly',
            'conflictPolicy' => 'conflict_policy',
            'filterDdlPolicy' => 'filter_ddl_policy',
            'speedLimit' => 'speed_limit',
            'schemaType' => 'schema_type',
            'nodeNum' => 'node_num',
            'objectSwitch' => 'object_switch',
            'masterJobId' => 'master_job_id',
            'fullMode' => 'full_mode',
            'structTrans' => 'struct_trans',
            'indexTrans' => 'index_trans',
            'replaceDefiner' => 'replace_definer',
            'migrateUser' => 'migrate_user',
            'syncDatabase' => 'sync_database',
            'errorCode' => 'error_code',
            'errorMessage' => 'error_message',
            'targetRootDb' => 'target_root_db',
            'azCode' => 'az_code',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'securityGroupId' => 'security_group_id',
            'multiWrite' => 'multi_write',
            'supportIpV6' => 'support_ip_v6',
            'inheritId' => 'inherit_id',
            'gtid' => 'gtid',
            'alarmNotify' => 'alarm_notify',
            'increStartPosition' => 'incre_start_position',
            'isMultiAz' => 'is_multi_az',
            'azName' => 'az_name',
            'masterAz' => 'master_az',
            'slaveAz' => 'slave_az',
            'nodeRole' => 'node_role',
            'periodOrder' => 'period_order',
            'objectInfos' => 'object_infos',
            'originalJobDirection' => 'original_job_direction',
            'dataTransformation' => 'data_transformation',
            'tags' => 'tags',
            'publicIpList' => 'public_ip_list',
            'bindPublicIpState' => 'bind_public_ip_state',
            'children' => 'children',
            'isOpenFastClean' => 'is_open_fast_clean'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  任务id
    * parentId  父任务id。
    * name  任务名称
    * status  任务状态。 - CREATING：创建中 - CREATE_FAILED：创建失败 - CONFIGURATION：配置中 - STARTJOBING：启动中 - WAITING_FOR_START：等待启动中 - START_JOB_FAILED：启动失败 - PAUSING：已暂停 - FULL_TRANSFER_STARTED：全量开始，灾备场景下为初始化 - FULL_TRANSFER_FAILED：全量失败，灾备场景下为初始化失败 - FULL_TRANSFER_COMPLETE：全量完成，灾备场景下为初始化完成 - INCRE_TRANSFER_STARTED：增量开始，灾备场景下为灾备中 - INCRE_TRANSFER_FAILED：增量失败，灾备场景下为灾备异常 - RELEASE_RESOURCE_STARTED：结束任务中 - RELEASE_RESOURCE_FAILED：结束任务失败 - RELEASE_RESOURCE_COMPLETE：已结束 - REBUILD_NODE_STARTED：故障恢复中 - REBUILD_NODE_FAILED：故障恢复失败 - CHANGE_JOB_STARTED：任务变更中 - CHANGE_JOB_FAILED：任务变更失败 - DELETED：已删除 - CHILD_TRANSFER_STARTING：再编辑子任务启动中 - CHILD_TRANSFER_STARTED：再编辑子任务迁移中 - CHILD_TRANSFER_COMPLETE：再编辑子任务迁移完成 - CHILD_TRANSFER_FAILED：再编辑子任务迁移失败 - RELEASE_CHILD_TRANSFER_STARTED：再编辑子任务结束中 - RELEASE_CHILD_TRANSFER_COMPLETE：再编辑子任务已结束 - NODE_UPGRADE_START：升级开始 - NODE_UPGRADE_COMPLETE：升级完成 - NODE_UPGRADE_FAILED：升级失败
    * description  描述信息
    * createTime  创建时间，时间戳格式。
    * taskType  迁移模式
    * sourceEndpoint  sourceEndpoint
    * dmqEndpoint  dmqEndpoint
    * sourceSharding  物理源库信息。
    * targetEndpoint  targetEndpoint
    * netType  网络类型
    * failedReason  失败原因。
    * instInfo  instInfo
    * actualStartTime  实际启动时间，时间戳格式。
    * fullTransferCompleteTime  全量完成时间，时间戳格式。
    * updateTime  更新时间，时间戳格式
    * jobDirection  任务方向
    * dbUseType  迁移场景 - migration：实时迁移 - sync：实时同步 - cloudDataGuard：实时灾备
    * needRestart  是否需要重启
    * isTargetReadonly  指定目标实例是否限制为只读
    * conflictPolicy  冲突忽略策略 - stop：冲突失败 - overwrite：冲突覆盖 - ignore：冲突忽略
    * filterDdlPolicy  过滤DDL策略 - drop_database：过滤drop_database - drop_databasefilter_all：过滤所有ddl - \"\"：不过滤
    * speedLimit  迁移速度限制。
    * schemaType  迁移方案 - Replication-主从复制 - Tungsten-日志解析 - PGBaseBackup-PG备份
    * nodeNum  节点个数。
    * objectSwitch  对象选择开关
    * masterJobId  主任务Id。
    * fullMode  全量快照模式。
    * structTrans  是否迁移结构。
    * indexTrans  否迁移索引。
    * replaceDefiner  是否使用目标库的用户替换掉definer。
    * migrateUser  是否迁移用户。
    * syncDatabase  是否库级同步。
    * errorCode  错误码
    * errorMessage  错误信息。
    * targetRootDb  targetRootDb
    * azCode  node所在AZ
    * vpcId  node所在VPC
    * subnetId  node所在子网
    * securityGroupId  node所在安全组
    * multiWrite  是否多主灾备任务,双主灾备时有值为true
    * supportIpV6  是否支持IPV6
    * inheritId  继承的任务ID，Oracle_Mrskafka链路时使用。
    * gtid  断点的GTID集合
    * alarmNotify  alarmNotify
    * increStartPosition  增量任务启动位点
    * isMultiAz  是否是主备任务。
    * azName  node所在节点AZ名称。
    * masterAz  主备任务主AZ。
    * slaveAz  主备任务备AZ。
    * nodeRole  任务主备角色。
    * periodOrder  periodOrder
    * objectInfos  已同步对象信息。
    * originalJobDirection  初始任务方向。 取值： - up：入云，灾备场景时对应本云为备。 - down：出云，灾备场景时对应本云为主。 - non-dbs：自建。
    * dataTransformation  dataTransformation
    * tags  DRS任务标签。
    * publicIpList  指定公网Ip的信息。
    * bindPublicIpState  是否成功绑定公网IP。
    * children  多任务时，存在子任务绑定失败时，返回子任务的信息。
    * isOpenFastClean  是否开启云数据库RDS for MySQL/MariaDB的binlog快速清理。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'parentId' => 'setParentId',
            'name' => 'setName',
            'status' => 'setStatus',
            'description' => 'setDescription',
            'createTime' => 'setCreateTime',
            'taskType' => 'setTaskType',
            'sourceEndpoint' => 'setSourceEndpoint',
            'dmqEndpoint' => 'setDmqEndpoint',
            'sourceSharding' => 'setSourceSharding',
            'targetEndpoint' => 'setTargetEndpoint',
            'netType' => 'setNetType',
            'failedReason' => 'setFailedReason',
            'instInfo' => 'setInstInfo',
            'actualStartTime' => 'setActualStartTime',
            'fullTransferCompleteTime' => 'setFullTransferCompleteTime',
            'updateTime' => 'setUpdateTime',
            'jobDirection' => 'setJobDirection',
            'dbUseType' => 'setDbUseType',
            'needRestart' => 'setNeedRestart',
            'isTargetReadonly' => 'setIsTargetReadonly',
            'conflictPolicy' => 'setConflictPolicy',
            'filterDdlPolicy' => 'setFilterDdlPolicy',
            'speedLimit' => 'setSpeedLimit',
            'schemaType' => 'setSchemaType',
            'nodeNum' => 'setNodeNum',
            'objectSwitch' => 'setObjectSwitch',
            'masterJobId' => 'setMasterJobId',
            'fullMode' => 'setFullMode',
            'structTrans' => 'setStructTrans',
            'indexTrans' => 'setIndexTrans',
            'replaceDefiner' => 'setReplaceDefiner',
            'migrateUser' => 'setMigrateUser',
            'syncDatabase' => 'setSyncDatabase',
            'errorCode' => 'setErrorCode',
            'errorMessage' => 'setErrorMessage',
            'targetRootDb' => 'setTargetRootDb',
            'azCode' => 'setAzCode',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'securityGroupId' => 'setSecurityGroupId',
            'multiWrite' => 'setMultiWrite',
            'supportIpV6' => 'setSupportIpV6',
            'inheritId' => 'setInheritId',
            'gtid' => 'setGtid',
            'alarmNotify' => 'setAlarmNotify',
            'increStartPosition' => 'setIncreStartPosition',
            'isMultiAz' => 'setIsMultiAz',
            'azName' => 'setAzName',
            'masterAz' => 'setMasterAz',
            'slaveAz' => 'setSlaveAz',
            'nodeRole' => 'setNodeRole',
            'periodOrder' => 'setPeriodOrder',
            'objectInfos' => 'setObjectInfos',
            'originalJobDirection' => 'setOriginalJobDirection',
            'dataTransformation' => 'setDataTransformation',
            'tags' => 'setTags',
            'publicIpList' => 'setPublicIpList',
            'bindPublicIpState' => 'setBindPublicIpState',
            'children' => 'setChildren',
            'isOpenFastClean' => 'setIsOpenFastClean'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  任务id
    * parentId  父任务id。
    * name  任务名称
    * status  任务状态。 - CREATING：创建中 - CREATE_FAILED：创建失败 - CONFIGURATION：配置中 - STARTJOBING：启动中 - WAITING_FOR_START：等待启动中 - START_JOB_FAILED：启动失败 - PAUSING：已暂停 - FULL_TRANSFER_STARTED：全量开始，灾备场景下为初始化 - FULL_TRANSFER_FAILED：全量失败，灾备场景下为初始化失败 - FULL_TRANSFER_COMPLETE：全量完成，灾备场景下为初始化完成 - INCRE_TRANSFER_STARTED：增量开始，灾备场景下为灾备中 - INCRE_TRANSFER_FAILED：增量失败，灾备场景下为灾备异常 - RELEASE_RESOURCE_STARTED：结束任务中 - RELEASE_RESOURCE_FAILED：结束任务失败 - RELEASE_RESOURCE_COMPLETE：已结束 - REBUILD_NODE_STARTED：故障恢复中 - REBUILD_NODE_FAILED：故障恢复失败 - CHANGE_JOB_STARTED：任务变更中 - CHANGE_JOB_FAILED：任务变更失败 - DELETED：已删除 - CHILD_TRANSFER_STARTING：再编辑子任务启动中 - CHILD_TRANSFER_STARTED：再编辑子任务迁移中 - CHILD_TRANSFER_COMPLETE：再编辑子任务迁移完成 - CHILD_TRANSFER_FAILED：再编辑子任务迁移失败 - RELEASE_CHILD_TRANSFER_STARTED：再编辑子任务结束中 - RELEASE_CHILD_TRANSFER_COMPLETE：再编辑子任务已结束 - NODE_UPGRADE_START：升级开始 - NODE_UPGRADE_COMPLETE：升级完成 - NODE_UPGRADE_FAILED：升级失败
    * description  描述信息
    * createTime  创建时间，时间戳格式。
    * taskType  迁移模式
    * sourceEndpoint  sourceEndpoint
    * dmqEndpoint  dmqEndpoint
    * sourceSharding  物理源库信息。
    * targetEndpoint  targetEndpoint
    * netType  网络类型
    * failedReason  失败原因。
    * instInfo  instInfo
    * actualStartTime  实际启动时间，时间戳格式。
    * fullTransferCompleteTime  全量完成时间，时间戳格式。
    * updateTime  更新时间，时间戳格式
    * jobDirection  任务方向
    * dbUseType  迁移场景 - migration：实时迁移 - sync：实时同步 - cloudDataGuard：实时灾备
    * needRestart  是否需要重启
    * isTargetReadonly  指定目标实例是否限制为只读
    * conflictPolicy  冲突忽略策略 - stop：冲突失败 - overwrite：冲突覆盖 - ignore：冲突忽略
    * filterDdlPolicy  过滤DDL策略 - drop_database：过滤drop_database - drop_databasefilter_all：过滤所有ddl - \"\"：不过滤
    * speedLimit  迁移速度限制。
    * schemaType  迁移方案 - Replication-主从复制 - Tungsten-日志解析 - PGBaseBackup-PG备份
    * nodeNum  节点个数。
    * objectSwitch  对象选择开关
    * masterJobId  主任务Id。
    * fullMode  全量快照模式。
    * structTrans  是否迁移结构。
    * indexTrans  否迁移索引。
    * replaceDefiner  是否使用目标库的用户替换掉definer。
    * migrateUser  是否迁移用户。
    * syncDatabase  是否库级同步。
    * errorCode  错误码
    * errorMessage  错误信息。
    * targetRootDb  targetRootDb
    * azCode  node所在AZ
    * vpcId  node所在VPC
    * subnetId  node所在子网
    * securityGroupId  node所在安全组
    * multiWrite  是否多主灾备任务,双主灾备时有值为true
    * supportIpV6  是否支持IPV6
    * inheritId  继承的任务ID，Oracle_Mrskafka链路时使用。
    * gtid  断点的GTID集合
    * alarmNotify  alarmNotify
    * increStartPosition  增量任务启动位点
    * isMultiAz  是否是主备任务。
    * azName  node所在节点AZ名称。
    * masterAz  主备任务主AZ。
    * slaveAz  主备任务备AZ。
    * nodeRole  任务主备角色。
    * periodOrder  periodOrder
    * objectInfos  已同步对象信息。
    * originalJobDirection  初始任务方向。 取值： - up：入云，灾备场景时对应本云为备。 - down：出云，灾备场景时对应本云为主。 - non-dbs：自建。
    * dataTransformation  dataTransformation
    * tags  DRS任务标签。
    * publicIpList  指定公网Ip的信息。
    * bindPublicIpState  是否成功绑定公网IP。
    * children  多任务时，存在子任务绑定失败时，返回子任务的信息。
    * isOpenFastClean  是否开启云数据库RDS for MySQL/MariaDB的binlog快速清理。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'parentId' => 'getParentId',
            'name' => 'getName',
            'status' => 'getStatus',
            'description' => 'getDescription',
            'createTime' => 'getCreateTime',
            'taskType' => 'getTaskType',
            'sourceEndpoint' => 'getSourceEndpoint',
            'dmqEndpoint' => 'getDmqEndpoint',
            'sourceSharding' => 'getSourceSharding',
            'targetEndpoint' => 'getTargetEndpoint',
            'netType' => 'getNetType',
            'failedReason' => 'getFailedReason',
            'instInfo' => 'getInstInfo',
            'actualStartTime' => 'getActualStartTime',
            'fullTransferCompleteTime' => 'getFullTransferCompleteTime',
            'updateTime' => 'getUpdateTime',
            'jobDirection' => 'getJobDirection',
            'dbUseType' => 'getDbUseType',
            'needRestart' => 'getNeedRestart',
            'isTargetReadonly' => 'getIsTargetReadonly',
            'conflictPolicy' => 'getConflictPolicy',
            'filterDdlPolicy' => 'getFilterDdlPolicy',
            'speedLimit' => 'getSpeedLimit',
            'schemaType' => 'getSchemaType',
            'nodeNum' => 'getNodeNum',
            'objectSwitch' => 'getObjectSwitch',
            'masterJobId' => 'getMasterJobId',
            'fullMode' => 'getFullMode',
            'structTrans' => 'getStructTrans',
            'indexTrans' => 'getIndexTrans',
            'replaceDefiner' => 'getReplaceDefiner',
            'migrateUser' => 'getMigrateUser',
            'syncDatabase' => 'getSyncDatabase',
            'errorCode' => 'getErrorCode',
            'errorMessage' => 'getErrorMessage',
            'targetRootDb' => 'getTargetRootDb',
            'azCode' => 'getAzCode',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'securityGroupId' => 'getSecurityGroupId',
            'multiWrite' => 'getMultiWrite',
            'supportIpV6' => 'getSupportIpV6',
            'inheritId' => 'getInheritId',
            'gtid' => 'getGtid',
            'alarmNotify' => 'getAlarmNotify',
            'increStartPosition' => 'getIncreStartPosition',
            'isMultiAz' => 'getIsMultiAz',
            'azName' => 'getAzName',
            'masterAz' => 'getMasterAz',
            'slaveAz' => 'getSlaveAz',
            'nodeRole' => 'getNodeRole',
            'periodOrder' => 'getPeriodOrder',
            'objectInfos' => 'getObjectInfos',
            'originalJobDirection' => 'getOriginalJobDirection',
            'dataTransformation' => 'getDataTransformation',
            'tags' => 'getTags',
            'publicIpList' => 'getPublicIpList',
            'bindPublicIpState' => 'getBindPublicIpState',
            'children' => 'getChildren',
            'isOpenFastClean' => 'getIsOpenFastClean'
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
    const STATUS_CREATING = 'CREATING';
    const STATUS_CREATE_FAILED = 'CREATE_FAILED';
    const STATUS_CONFIGURATION = 'CONFIGURATION';
    const STATUS_STARTJOBING = 'STARTJOBING';
    const STATUS_WAITING_FOR_START = 'WAITING_FOR_START';
    const STATUS_START_JOB_FAILED = 'START_JOB_FAILED';
    const STATUS_PAUSING = 'PAUSING';
    const STATUS_FULL_TRANSFER_STARTED = 'FULL_TRANSFER_STARTED';
    const STATUS_FULL_TRANSFER_FAILED = 'FULL_TRANSFER_FAILED';
    const STATUS_FULL_TRANSFER_COMPLETE = 'FULL_TRANSFER_COMPLETE';
    const STATUS_INCRE_TRANSFER_STARTED = 'INCRE_TRANSFER_STARTED';
    const STATUS_INCRE_TRANSFER_FAILED = 'INCRE_TRANSFER_FAILED';
    const STATUS_RELEASE_RESOURCE_STARTED = 'RELEASE_RESOURCE_STARTED';
    const STATUS_RELEASE_RESOURCE_FAILED = 'RELEASE_RESOURCE_FAILED';
    const STATUS_RELEASE_RESOURCE_COMPLETE = 'RELEASE_RESOURCE_COMPLETE';
    const STATUS_REBUILD_NODE_STARTED = 'REBUILD_NODE_STARTED';
    const STATUS_REBUILD_NODE_FAILED = 'REBUILD_NODE_FAILED';
    const STATUS_CHANGE_JOB_STARTED = 'CHANGE_JOB_STARTED';
    const STATUS_CHANGE_JOB_FAILED = 'CHANGE_JOB_FAILED';
    const STATUS_DELETED = 'DELETED';
    const STATUS_CHILD_TRANSFER_STARTING = 'CHILD_TRANSFER_STARTING';
    const STATUS_CHILD_TRANSFER_STARTED = 'CHILD_TRANSFER_STARTED';
    const STATUS_CHILD_TRANSFER_COMPLETE = 'CHILD_TRANSFER_COMPLETE';
    const STATUS_CHILD_TRANSFER_FAILED = 'CHILD_TRANSFER_FAILED';
    const STATUS_RELEASE_CHILD_TRANSFER_STARTED = 'RELEASE_CHILD_TRANSFER_STARTED';
    const STATUS_RELEASE_CHILD_TRANSFER_COMPLETE = 'RELEASE_CHILD_TRANSFER_COMPLETE';
    const STATUS_NODE_UPGRADE_START = 'NODE_UPGRADE_START';
    const STATUS_NODE_UPGRADE_COMPLETE = 'NODE_UPGRADE_COMPLETE';
    const STATUS_NODE_UPGRADE_FAILED = 'NODE_UPGRADE_FAILED';
    const TASK_TYPE_FULL_TRANS = 'FULL_TRANS';
    const TASK_TYPE_FULL_INCR_TRANS = 'FULL_INCR_TRANS';
    const TASK_TYPE_INCR_TRANS = 'INCR_TRANS';
    const NET_TYPE_VPN = 'vpn';
    const NET_TYPE_VPC = 'vpc';
    const NET_TYPE_EIP = 'eip';
    const JOB_DIRECTION_UP = 'up';
    const JOB_DIRECTION_DOWN = 'down';
    const JOB_DIRECTION_NON_DBS = 'non-dbs';
    const DB_USE_TYPE_MIGRATION = 'migration';
    const DB_USE_TYPE_SYNC = 'sync';
    const DB_USE_TYPE_CLOUD_DATA_GUARD = 'cloudDataGuard';
    const CONFLICT_POLICY_STOP = 'stop';
    const CONFLICT_POLICY_OVERWRITE = 'overwrite';
    const CONFLICT_POLICY_IGNORE = 'ignore';
    const SCHEMA_TYPE_REPLICATION = 'Replication';
    const SCHEMA_TYPE_TUNGSTEN = 'Tungsten';
    const SCHEMA_TYPE_PG_BASE_BACKUP = 'PGBaseBackup';
    const ORIGINAL_JOB_DIRECTION_UP = 'up';
    const ORIGINAL_JOB_DIRECTION_DOWN = 'down';
    const ORIGINAL_JOB_DIRECTION_NON_DBS = 'non-dbs';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CREATING,
            self::STATUS_CREATE_FAILED,
            self::STATUS_CONFIGURATION,
            self::STATUS_STARTJOBING,
            self::STATUS_WAITING_FOR_START,
            self::STATUS_START_JOB_FAILED,
            self::STATUS_PAUSING,
            self::STATUS_FULL_TRANSFER_STARTED,
            self::STATUS_FULL_TRANSFER_FAILED,
            self::STATUS_FULL_TRANSFER_COMPLETE,
            self::STATUS_INCRE_TRANSFER_STARTED,
            self::STATUS_INCRE_TRANSFER_FAILED,
            self::STATUS_RELEASE_RESOURCE_STARTED,
            self::STATUS_RELEASE_RESOURCE_FAILED,
            self::STATUS_RELEASE_RESOURCE_COMPLETE,
            self::STATUS_REBUILD_NODE_STARTED,
            self::STATUS_REBUILD_NODE_FAILED,
            self::STATUS_CHANGE_JOB_STARTED,
            self::STATUS_CHANGE_JOB_FAILED,
            self::STATUS_DELETED,
            self::STATUS_CHILD_TRANSFER_STARTING,
            self::STATUS_CHILD_TRANSFER_STARTED,
            self::STATUS_CHILD_TRANSFER_COMPLETE,
            self::STATUS_CHILD_TRANSFER_FAILED,
            self::STATUS_RELEASE_CHILD_TRANSFER_STARTED,
            self::STATUS_RELEASE_CHILD_TRANSFER_COMPLETE,
            self::STATUS_NODE_UPGRADE_START,
            self::STATUS_NODE_UPGRADE_COMPLETE,
            self::STATUS_NODE_UPGRADE_FAILED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTaskTypeAllowableValues()
    {
        return [
            self::TASK_TYPE_FULL_TRANS,
            self::TASK_TYPE_FULL_INCR_TRANS,
            self::TASK_TYPE_INCR_TRANS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNetTypeAllowableValues()
    {
        return [
            self::NET_TYPE_VPN,
            self::NET_TYPE_VPC,
            self::NET_TYPE_EIP,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getJobDirectionAllowableValues()
    {
        return [
            self::JOB_DIRECTION_UP,
            self::JOB_DIRECTION_DOWN,
            self::JOB_DIRECTION_NON_DBS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDbUseTypeAllowableValues()
    {
        return [
            self::DB_USE_TYPE_MIGRATION,
            self::DB_USE_TYPE_SYNC,
            self::DB_USE_TYPE_CLOUD_DATA_GUARD,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getConflictPolicyAllowableValues()
    {
        return [
            self::CONFLICT_POLICY_STOP,
            self::CONFLICT_POLICY_OVERWRITE,
            self::CONFLICT_POLICY_IGNORE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSchemaTypeAllowableValues()
    {
        return [
            self::SCHEMA_TYPE_REPLICATION,
            self::SCHEMA_TYPE_TUNGSTEN,
            self::SCHEMA_TYPE_PG_BASE_BACKUP,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOriginalJobDirectionAllowableValues()
    {
        return [
            self::ORIGINAL_JOB_DIRECTION_UP,
            self::ORIGINAL_JOB_DIRECTION_DOWN,
            self::ORIGINAL_JOB_DIRECTION_NON_DBS,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['sourceEndpoint'] = isset($data['sourceEndpoint']) ? $data['sourceEndpoint'] : null;
        $this->container['dmqEndpoint'] = isset($data['dmqEndpoint']) ? $data['dmqEndpoint'] : null;
        $this->container['sourceSharding'] = isset($data['sourceSharding']) ? $data['sourceSharding'] : null;
        $this->container['targetEndpoint'] = isset($data['targetEndpoint']) ? $data['targetEndpoint'] : null;
        $this->container['netType'] = isset($data['netType']) ? $data['netType'] : null;
        $this->container['failedReason'] = isset($data['failedReason']) ? $data['failedReason'] : null;
        $this->container['instInfo'] = isset($data['instInfo']) ? $data['instInfo'] : null;
        $this->container['actualStartTime'] = isset($data['actualStartTime']) ? $data['actualStartTime'] : null;
        $this->container['fullTransferCompleteTime'] = isset($data['fullTransferCompleteTime']) ? $data['fullTransferCompleteTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['jobDirection'] = isset($data['jobDirection']) ? $data['jobDirection'] : null;
        $this->container['dbUseType'] = isset($data['dbUseType']) ? $data['dbUseType'] : null;
        $this->container['needRestart'] = isset($data['needRestart']) ? $data['needRestart'] : null;
        $this->container['isTargetReadonly'] = isset($data['isTargetReadonly']) ? $data['isTargetReadonly'] : null;
        $this->container['conflictPolicy'] = isset($data['conflictPolicy']) ? $data['conflictPolicy'] : null;
        $this->container['filterDdlPolicy'] = isset($data['filterDdlPolicy']) ? $data['filterDdlPolicy'] : null;
        $this->container['speedLimit'] = isset($data['speedLimit']) ? $data['speedLimit'] : null;
        $this->container['schemaType'] = isset($data['schemaType']) ? $data['schemaType'] : null;
        $this->container['nodeNum'] = isset($data['nodeNum']) ? $data['nodeNum'] : null;
        $this->container['objectSwitch'] = isset($data['objectSwitch']) ? $data['objectSwitch'] : null;
        $this->container['masterJobId'] = isset($data['masterJobId']) ? $data['masterJobId'] : null;
        $this->container['fullMode'] = isset($data['fullMode']) ? $data['fullMode'] : null;
        $this->container['structTrans'] = isset($data['structTrans']) ? $data['structTrans'] : null;
        $this->container['indexTrans'] = isset($data['indexTrans']) ? $data['indexTrans'] : null;
        $this->container['replaceDefiner'] = isset($data['replaceDefiner']) ? $data['replaceDefiner'] : null;
        $this->container['migrateUser'] = isset($data['migrateUser']) ? $data['migrateUser'] : null;
        $this->container['syncDatabase'] = isset($data['syncDatabase']) ? $data['syncDatabase'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
        $this->container['targetRootDb'] = isset($data['targetRootDb']) ? $data['targetRootDb'] : null;
        $this->container['azCode'] = isset($data['azCode']) ? $data['azCode'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['multiWrite'] = isset($data['multiWrite']) ? $data['multiWrite'] : null;
        $this->container['supportIpV6'] = isset($data['supportIpV6']) ? $data['supportIpV6'] : null;
        $this->container['inheritId'] = isset($data['inheritId']) ? $data['inheritId'] : null;
        $this->container['gtid'] = isset($data['gtid']) ? $data['gtid'] : null;
        $this->container['alarmNotify'] = isset($data['alarmNotify']) ? $data['alarmNotify'] : null;
        $this->container['increStartPosition'] = isset($data['increStartPosition']) ? $data['increStartPosition'] : null;
        $this->container['isMultiAz'] = isset($data['isMultiAz']) ? $data['isMultiAz'] : null;
        $this->container['azName'] = isset($data['azName']) ? $data['azName'] : null;
        $this->container['masterAz'] = isset($data['masterAz']) ? $data['masterAz'] : null;
        $this->container['slaveAz'] = isset($data['slaveAz']) ? $data['slaveAz'] : null;
        $this->container['nodeRole'] = isset($data['nodeRole']) ? $data['nodeRole'] : null;
        $this->container['periodOrder'] = isset($data['periodOrder']) ? $data['periodOrder'] : null;
        $this->container['objectInfos'] = isset($data['objectInfos']) ? $data['objectInfos'] : null;
        $this->container['originalJobDirection'] = isset($data['originalJobDirection']) ? $data['originalJobDirection'] : null;
        $this->container['dataTransformation'] = isset($data['dataTransformation']) ? $data['dataTransformation'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['publicIpList'] = isset($data['publicIpList']) ? $data['publicIpList'] : null;
        $this->container['bindPublicIpState'] = isset($data['bindPublicIpState']) ? $data['bindPublicIpState'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
        $this->container['isOpenFastClean'] = isset($data['isOpenFastClean']) ? $data['isOpenFastClean'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getTaskTypeAllowableValues();
                if (!is_null($this->container['taskType']) && !in_array($this->container['taskType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'taskType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getNetTypeAllowableValues();
                if (!is_null($this->container['netType']) && !in_array($this->container['netType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'netType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getJobDirectionAllowableValues();
                if (!is_null($this->container['jobDirection']) && !in_array($this->container['jobDirection'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'jobDirection', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getDbUseTypeAllowableValues();
                if (!is_null($this->container['dbUseType']) && !in_array($this->container['dbUseType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dbUseType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getConflictPolicyAllowableValues();
                if (!is_null($this->container['conflictPolicy']) && !in_array($this->container['conflictPolicy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'conflictPolicy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSchemaTypeAllowableValues();
                if (!is_null($this->container['schemaType']) && !in_array($this->container['schemaType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'schemaType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['nodeNum']) && ($this->container['nodeNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'nodeNum', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getOriginalJobDirectionAllowableValues();
                if (!is_null($this->container['originalJobDirection']) && !in_array($this->container['originalJobDirection'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'originalJobDirection', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets id
    *  任务id
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 任务id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets parentId
    *  父任务id。
    *
    * @return string|null
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param string|null $parentId 父任务id。
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets name
    *  任务名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 任务名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  任务状态。 - CREATING：创建中 - CREATE_FAILED：创建失败 - CONFIGURATION：配置中 - STARTJOBING：启动中 - WAITING_FOR_START：等待启动中 - START_JOB_FAILED：启动失败 - PAUSING：已暂停 - FULL_TRANSFER_STARTED：全量开始，灾备场景下为初始化 - FULL_TRANSFER_FAILED：全量失败，灾备场景下为初始化失败 - FULL_TRANSFER_COMPLETE：全量完成，灾备场景下为初始化完成 - INCRE_TRANSFER_STARTED：增量开始，灾备场景下为灾备中 - INCRE_TRANSFER_FAILED：增量失败，灾备场景下为灾备异常 - RELEASE_RESOURCE_STARTED：结束任务中 - RELEASE_RESOURCE_FAILED：结束任务失败 - RELEASE_RESOURCE_COMPLETE：已结束 - REBUILD_NODE_STARTED：故障恢复中 - REBUILD_NODE_FAILED：故障恢复失败 - CHANGE_JOB_STARTED：任务变更中 - CHANGE_JOB_FAILED：任务变更失败 - DELETED：已删除 - CHILD_TRANSFER_STARTING：再编辑子任务启动中 - CHILD_TRANSFER_STARTED：再编辑子任务迁移中 - CHILD_TRANSFER_COMPLETE：再编辑子任务迁移完成 - CHILD_TRANSFER_FAILED：再编辑子任务迁移失败 - RELEASE_CHILD_TRANSFER_STARTED：再编辑子任务结束中 - RELEASE_CHILD_TRANSFER_COMPLETE：再编辑子任务已结束 - NODE_UPGRADE_START：升级开始 - NODE_UPGRADE_COMPLETE：升级完成 - NODE_UPGRADE_FAILED：升级失败
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 任务状态。 - CREATING：创建中 - CREATE_FAILED：创建失败 - CONFIGURATION：配置中 - STARTJOBING：启动中 - WAITING_FOR_START：等待启动中 - START_JOB_FAILED：启动失败 - PAUSING：已暂停 - FULL_TRANSFER_STARTED：全量开始，灾备场景下为初始化 - FULL_TRANSFER_FAILED：全量失败，灾备场景下为初始化失败 - FULL_TRANSFER_COMPLETE：全量完成，灾备场景下为初始化完成 - INCRE_TRANSFER_STARTED：增量开始，灾备场景下为灾备中 - INCRE_TRANSFER_FAILED：增量失败，灾备场景下为灾备异常 - RELEASE_RESOURCE_STARTED：结束任务中 - RELEASE_RESOURCE_FAILED：结束任务失败 - RELEASE_RESOURCE_COMPLETE：已结束 - REBUILD_NODE_STARTED：故障恢复中 - REBUILD_NODE_FAILED：故障恢复失败 - CHANGE_JOB_STARTED：任务变更中 - CHANGE_JOB_FAILED：任务变更失败 - DELETED：已删除 - CHILD_TRANSFER_STARTING：再编辑子任务启动中 - CHILD_TRANSFER_STARTED：再编辑子任务迁移中 - CHILD_TRANSFER_COMPLETE：再编辑子任务迁移完成 - CHILD_TRANSFER_FAILED：再编辑子任务迁移失败 - RELEASE_CHILD_TRANSFER_STARTED：再编辑子任务结束中 - RELEASE_CHILD_TRANSFER_COMPLETE：再编辑子任务已结束 - NODE_UPGRADE_START：升级开始 - NODE_UPGRADE_COMPLETE：升级完成 - NODE_UPGRADE_FAILED：升级失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets description
    *  描述信息
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间，时间戳格式。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间，时间戳格式。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets taskType
    *  迁移模式
    *
    * @return string|null
    */
    public function getTaskType()
    {
        return $this->container['taskType'];
    }

    /**
    * Sets taskType
    *
    * @param string|null $taskType 迁移模式
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
        return $this;
    }

    /**
    * Gets sourceEndpoint
    *  sourceEndpoint
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\Endpoint|null
    */
    public function getSourceEndpoint()
    {
        return $this->container['sourceEndpoint'];
    }

    /**
    * Sets sourceEndpoint
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\Endpoint|null $sourceEndpoint sourceEndpoint
    *
    * @return $this
    */
    public function setSourceEndpoint($sourceEndpoint)
    {
        $this->container['sourceEndpoint'] = $sourceEndpoint;
        return $this;
    }

    /**
    * Gets dmqEndpoint
    *  dmqEndpoint
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\Endpoint|null
    */
    public function getDmqEndpoint()
    {
        return $this->container['dmqEndpoint'];
    }

    /**
    * Sets dmqEndpoint
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\Endpoint|null $dmqEndpoint dmqEndpoint
    *
    * @return $this
    */
    public function setDmqEndpoint($dmqEndpoint)
    {
        $this->container['dmqEndpoint'] = $dmqEndpoint;
        return $this;
    }

    /**
    * Gets sourceSharding
    *  物理源库信息。
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\Endpoint[]|null
    */
    public function getSourceSharding()
    {
        return $this->container['sourceSharding'];
    }

    /**
    * Sets sourceSharding
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\Endpoint[]|null $sourceSharding 物理源库信息。
    *
    * @return $this
    */
    public function setSourceSharding($sourceSharding)
    {
        $this->container['sourceSharding'] = $sourceSharding;
        return $this;
    }

    /**
    * Gets targetEndpoint
    *  targetEndpoint
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\Endpoint|null
    */
    public function getTargetEndpoint()
    {
        return $this->container['targetEndpoint'];
    }

    /**
    * Sets targetEndpoint
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\Endpoint|null $targetEndpoint targetEndpoint
    *
    * @return $this
    */
    public function setTargetEndpoint($targetEndpoint)
    {
        $this->container['targetEndpoint'] = $targetEndpoint;
        return $this;
    }

    /**
    * Gets netType
    *  网络类型
    *
    * @return string|null
    */
    public function getNetType()
    {
        return $this->container['netType'];
    }

    /**
    * Sets netType
    *
    * @param string|null $netType 网络类型
    *
    * @return $this
    */
    public function setNetType($netType)
    {
        $this->container['netType'] = $netType;
        return $this;
    }

    /**
    * Gets failedReason
    *  失败原因。
    *
    * @return string|null
    */
    public function getFailedReason()
    {
        return $this->container['failedReason'];
    }

    /**
    * Sets failedReason
    *
    * @param string|null $failedReason 失败原因。
    *
    * @return $this
    */
    public function setFailedReason($failedReason)
    {
        $this->container['failedReason'] = $failedReason;
        return $this;
    }

    /**
    * Gets instInfo
    *  instInfo
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\InstInfo|null
    */
    public function getInstInfo()
    {
        return $this->container['instInfo'];
    }

    /**
    * Sets instInfo
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\InstInfo|null $instInfo instInfo
    *
    * @return $this
    */
    public function setInstInfo($instInfo)
    {
        $this->container['instInfo'] = $instInfo;
        return $this;
    }

    /**
    * Gets actualStartTime
    *  实际启动时间，时间戳格式。
    *
    * @return string|null
    */
    public function getActualStartTime()
    {
        return $this->container['actualStartTime'];
    }

    /**
    * Sets actualStartTime
    *
    * @param string|null $actualStartTime 实际启动时间，时间戳格式。
    *
    * @return $this
    */
    public function setActualStartTime($actualStartTime)
    {
        $this->container['actualStartTime'] = $actualStartTime;
        return $this;
    }

    /**
    * Gets fullTransferCompleteTime
    *  全量完成时间，时间戳格式。
    *
    * @return string|null
    */
    public function getFullTransferCompleteTime()
    {
        return $this->container['fullTransferCompleteTime'];
    }

    /**
    * Sets fullTransferCompleteTime
    *
    * @param string|null $fullTransferCompleteTime 全量完成时间，时间戳格式。
    *
    * @return $this
    */
    public function setFullTransferCompleteTime($fullTransferCompleteTime)
    {
        $this->container['fullTransferCompleteTime'] = $fullTransferCompleteTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间，时间戳格式
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 更新时间，时间戳格式
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets jobDirection
    *  任务方向
    *
    * @return string|null
    */
    public function getJobDirection()
    {
        return $this->container['jobDirection'];
    }

    /**
    * Sets jobDirection
    *
    * @param string|null $jobDirection 任务方向
    *
    * @return $this
    */
    public function setJobDirection($jobDirection)
    {
        $this->container['jobDirection'] = $jobDirection;
        return $this;
    }

    /**
    * Gets dbUseType
    *  迁移场景 - migration：实时迁移 - sync：实时同步 - cloudDataGuard：实时灾备
    *
    * @return string|null
    */
    public function getDbUseType()
    {
        return $this->container['dbUseType'];
    }

    /**
    * Sets dbUseType
    *
    * @param string|null $dbUseType 迁移场景 - migration：实时迁移 - sync：实时同步 - cloudDataGuard：实时灾备
    *
    * @return $this
    */
    public function setDbUseType($dbUseType)
    {
        $this->container['dbUseType'] = $dbUseType;
        return $this;
    }

    /**
    * Gets needRestart
    *  是否需要重启
    *
    * @return bool|null
    */
    public function getNeedRestart()
    {
        return $this->container['needRestart'];
    }

    /**
    * Sets needRestart
    *
    * @param bool|null $needRestart 是否需要重启
    *
    * @return $this
    */
    public function setNeedRestart($needRestart)
    {
        $this->container['needRestart'] = $needRestart;
        return $this;
    }

    /**
    * Gets isTargetReadonly
    *  指定目标实例是否限制为只读
    *
    * @return bool|null
    */
    public function getIsTargetReadonly()
    {
        return $this->container['isTargetReadonly'];
    }

    /**
    * Sets isTargetReadonly
    *
    * @param bool|null $isTargetReadonly 指定目标实例是否限制为只读
    *
    * @return $this
    */
    public function setIsTargetReadonly($isTargetReadonly)
    {
        $this->container['isTargetReadonly'] = $isTargetReadonly;
        return $this;
    }

    /**
    * Gets conflictPolicy
    *  冲突忽略策略 - stop：冲突失败 - overwrite：冲突覆盖 - ignore：冲突忽略
    *
    * @return string|null
    */
    public function getConflictPolicy()
    {
        return $this->container['conflictPolicy'];
    }

    /**
    * Sets conflictPolicy
    *
    * @param string|null $conflictPolicy 冲突忽略策略 - stop：冲突失败 - overwrite：冲突覆盖 - ignore：冲突忽略
    *
    * @return $this
    */
    public function setConflictPolicy($conflictPolicy)
    {
        $this->container['conflictPolicy'] = $conflictPolicy;
        return $this;
    }

    /**
    * Gets filterDdlPolicy
    *  过滤DDL策略 - drop_database：过滤drop_database - drop_databasefilter_all：过滤所有ddl - \"\"：不过滤
    *
    * @return string|null
    */
    public function getFilterDdlPolicy()
    {
        return $this->container['filterDdlPolicy'];
    }

    /**
    * Sets filterDdlPolicy
    *
    * @param string|null $filterDdlPolicy 过滤DDL策略 - drop_database：过滤drop_database - drop_databasefilter_all：过滤所有ddl - \"\"：不过滤
    *
    * @return $this
    */
    public function setFilterDdlPolicy($filterDdlPolicy)
    {
        $this->container['filterDdlPolicy'] = $filterDdlPolicy;
        return $this;
    }

    /**
    * Gets speedLimit
    *  迁移速度限制。
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\SpeedLimitInfo[]|null
    */
    public function getSpeedLimit()
    {
        return $this->container['speedLimit'];
    }

    /**
    * Sets speedLimit
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\SpeedLimitInfo[]|null $speedLimit 迁移速度限制。
    *
    * @return $this
    */
    public function setSpeedLimit($speedLimit)
    {
        $this->container['speedLimit'] = $speedLimit;
        return $this;
    }

    /**
    * Gets schemaType
    *  迁移方案 - Replication-主从复制 - Tungsten-日志解析 - PGBaseBackup-PG备份
    *
    * @return string|null
    */
    public function getSchemaType()
    {
        return $this->container['schemaType'];
    }

    /**
    * Sets schemaType
    *
    * @param string|null $schemaType 迁移方案 - Replication-主从复制 - Tungsten-日志解析 - PGBaseBackup-PG备份
    *
    * @return $this
    */
    public function setSchemaType($schemaType)
    {
        $this->container['schemaType'] = $schemaType;
        return $this;
    }

    /**
    * Gets nodeNum
    *  节点个数。
    *
    * @return int|null
    */
    public function getNodeNum()
    {
        return $this->container['nodeNum'];
    }

    /**
    * Sets nodeNum
    *
    * @param int|null $nodeNum 节点个数。
    *
    * @return $this
    */
    public function setNodeNum($nodeNum)
    {
        $this->container['nodeNum'] = $nodeNum;
        return $this;
    }

    /**
    * Gets objectSwitch
    *  对象选择开关
    *
    * @return bool|null
    */
    public function getObjectSwitch()
    {
        return $this->container['objectSwitch'];
    }

    /**
    * Sets objectSwitch
    *
    * @param bool|null $objectSwitch 对象选择开关
    *
    * @return $this
    */
    public function setObjectSwitch($objectSwitch)
    {
        $this->container['objectSwitch'] = $objectSwitch;
        return $this;
    }

    /**
    * Gets masterJobId
    *  主任务Id。
    *
    * @return string|null
    */
    public function getMasterJobId()
    {
        return $this->container['masterJobId'];
    }

    /**
    * Sets masterJobId
    *
    * @param string|null $masterJobId 主任务Id。
    *
    * @return $this
    */
    public function setMasterJobId($masterJobId)
    {
        $this->container['masterJobId'] = $masterJobId;
        return $this;
    }

    /**
    * Gets fullMode
    *  全量快照模式。
    *
    * @return string|null
    */
    public function getFullMode()
    {
        return $this->container['fullMode'];
    }

    /**
    * Sets fullMode
    *
    * @param string|null $fullMode 全量快照模式。
    *
    * @return $this
    */
    public function setFullMode($fullMode)
    {
        $this->container['fullMode'] = $fullMode;
        return $this;
    }

    /**
    * Gets structTrans
    *  是否迁移结构。
    *
    * @return bool|null
    */
    public function getStructTrans()
    {
        return $this->container['structTrans'];
    }

    /**
    * Sets structTrans
    *
    * @param bool|null $structTrans 是否迁移结构。
    *
    * @return $this
    */
    public function setStructTrans($structTrans)
    {
        $this->container['structTrans'] = $structTrans;
        return $this;
    }

    /**
    * Gets indexTrans
    *  否迁移索引。
    *
    * @return bool|null
    */
    public function getIndexTrans()
    {
        return $this->container['indexTrans'];
    }

    /**
    * Sets indexTrans
    *
    * @param bool|null $indexTrans 否迁移索引。
    *
    * @return $this
    */
    public function setIndexTrans($indexTrans)
    {
        $this->container['indexTrans'] = $indexTrans;
        return $this;
    }

    /**
    * Gets replaceDefiner
    *  是否使用目标库的用户替换掉definer。
    *
    * @return bool|null
    */
    public function getReplaceDefiner()
    {
        return $this->container['replaceDefiner'];
    }

    /**
    * Sets replaceDefiner
    *
    * @param bool|null $replaceDefiner 是否使用目标库的用户替换掉definer。
    *
    * @return $this
    */
    public function setReplaceDefiner($replaceDefiner)
    {
        $this->container['replaceDefiner'] = $replaceDefiner;
        return $this;
    }

    /**
    * Gets migrateUser
    *  是否迁移用户。
    *
    * @return bool|null
    */
    public function getMigrateUser()
    {
        return $this->container['migrateUser'];
    }

    /**
    * Sets migrateUser
    *
    * @param bool|null $migrateUser 是否迁移用户。
    *
    * @return $this
    */
    public function setMigrateUser($migrateUser)
    {
        $this->container['migrateUser'] = $migrateUser;
        return $this;
    }

    /**
    * Gets syncDatabase
    *  是否库级同步。
    *
    * @return bool|null
    */
    public function getSyncDatabase()
    {
        return $this->container['syncDatabase'];
    }

    /**
    * Sets syncDatabase
    *
    * @param bool|null $syncDatabase 是否库级同步。
    *
    * @return $this
    */
    public function setSyncDatabase($syncDatabase)
    {
        $this->container['syncDatabase'] = $syncDatabase;
        return $this;
    }

    /**
    * Gets errorCode
    *  错误码
    *
    * @return string|null
    */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
    * Sets errorCode
    *
    * @param string|null $errorCode 错误码
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
    }

    /**
    * Gets errorMessage
    *  错误信息。
    *
    * @return string|null
    */
    public function getErrorMessage()
    {
        return $this->container['errorMessage'];
    }

    /**
    * Sets errorMessage
    *
    * @param string|null $errorMessage 错误信息。
    *
    * @return $this
    */
    public function setErrorMessage($errorMessage)
    {
        $this->container['errorMessage'] = $errorMessage;
        return $this;
    }

    /**
    * Gets targetRootDb
    *  targetRootDb
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\DefaultRootDb|null
    */
    public function getTargetRootDb()
    {
        return $this->container['targetRootDb'];
    }

    /**
    * Sets targetRootDb
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\DefaultRootDb|null $targetRootDb targetRootDb
    *
    * @return $this
    */
    public function setTargetRootDb($targetRootDb)
    {
        $this->container['targetRootDb'] = $targetRootDb;
        return $this;
    }

    /**
    * Gets azCode
    *  node所在AZ
    *
    * @return string|null
    */
    public function getAzCode()
    {
        return $this->container['azCode'];
    }

    /**
    * Sets azCode
    *
    * @param string|null $azCode node所在AZ
    *
    * @return $this
    */
    public function setAzCode($azCode)
    {
        $this->container['azCode'] = $azCode;
        return $this;
    }

    /**
    * Gets vpcId
    *  node所在VPC
    *
    * @return string|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string|null $vpcId node所在VPC
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets subnetId
    *  node所在子网
    *
    * @return string|null
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string|null $subnetId node所在子网
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  node所在安全组
    *
    * @return string|null
    */
    public function getSecurityGroupId()
    {
        return $this->container['securityGroupId'];
    }

    /**
    * Sets securityGroupId
    *
    * @param string|null $securityGroupId node所在安全组
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets multiWrite
    *  是否多主灾备任务,双主灾备时有值为true
    *
    * @return bool|null
    */
    public function getMultiWrite()
    {
        return $this->container['multiWrite'];
    }

    /**
    * Sets multiWrite
    *
    * @param bool|null $multiWrite 是否多主灾备任务,双主灾备时有值为true
    *
    * @return $this
    */
    public function setMultiWrite($multiWrite)
    {
        $this->container['multiWrite'] = $multiWrite;
        return $this;
    }

    /**
    * Gets supportIpV6
    *  是否支持IPV6
    *
    * @return bool|null
    */
    public function getSupportIpV6()
    {
        return $this->container['supportIpV6'];
    }

    /**
    * Sets supportIpV6
    *
    * @param bool|null $supportIpV6 是否支持IPV6
    *
    * @return $this
    */
    public function setSupportIpV6($supportIpV6)
    {
        $this->container['supportIpV6'] = $supportIpV6;
        return $this;
    }

    /**
    * Gets inheritId
    *  继承的任务ID，Oracle_Mrskafka链路时使用。
    *
    * @return string|null
    */
    public function getInheritId()
    {
        return $this->container['inheritId'];
    }

    /**
    * Sets inheritId
    *
    * @param string|null $inheritId 继承的任务ID，Oracle_Mrskafka链路时使用。
    *
    * @return $this
    */
    public function setInheritId($inheritId)
    {
        $this->container['inheritId'] = $inheritId;
        return $this;
    }

    /**
    * Gets gtid
    *  断点的GTID集合
    *
    * @return string|null
    */
    public function getGtid()
    {
        return $this->container['gtid'];
    }

    /**
    * Sets gtid
    *
    * @param string|null $gtid 断点的GTID集合
    *
    * @return $this
    */
    public function setGtid($gtid)
    {
        $this->container['gtid'] = $gtid;
        return $this;
    }

    /**
    * Gets alarmNotify
    *  alarmNotify
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\QuerySmnInfoResp|null
    */
    public function getAlarmNotify()
    {
        return $this->container['alarmNotify'];
    }

    /**
    * Sets alarmNotify
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\QuerySmnInfoResp|null $alarmNotify alarmNotify
    *
    * @return $this
    */
    public function setAlarmNotify($alarmNotify)
    {
        $this->container['alarmNotify'] = $alarmNotify;
        return $this;
    }

    /**
    * Gets increStartPosition
    *  增量任务启动位点
    *
    * @return string|null
    */
    public function getIncreStartPosition()
    {
        return $this->container['increStartPosition'];
    }

    /**
    * Sets increStartPosition
    *
    * @param string|null $increStartPosition 增量任务启动位点
    *
    * @return $this
    */
    public function setIncreStartPosition($increStartPosition)
    {
        $this->container['increStartPosition'] = $increStartPosition;
        return $this;
    }

    /**
    * Gets isMultiAz
    *  是否是主备任务。
    *
    * @return bool|null
    */
    public function getIsMultiAz()
    {
        return $this->container['isMultiAz'];
    }

    /**
    * Sets isMultiAz
    *
    * @param bool|null $isMultiAz 是否是主备任务。
    *
    * @return $this
    */
    public function setIsMultiAz($isMultiAz)
    {
        $this->container['isMultiAz'] = $isMultiAz;
        return $this;
    }

    /**
    * Gets azName
    *  node所在节点AZ名称。
    *
    * @return string|null
    */
    public function getAzName()
    {
        return $this->container['azName'];
    }

    /**
    * Sets azName
    *
    * @param string|null $azName node所在节点AZ名称。
    *
    * @return $this
    */
    public function setAzName($azName)
    {
        $this->container['azName'] = $azName;
        return $this;
    }

    /**
    * Gets masterAz
    *  主备任务主AZ。
    *
    * @return string|null
    */
    public function getMasterAz()
    {
        return $this->container['masterAz'];
    }

    /**
    * Sets masterAz
    *
    * @param string|null $masterAz 主备任务主AZ。
    *
    * @return $this
    */
    public function setMasterAz($masterAz)
    {
        $this->container['masterAz'] = $masterAz;
        return $this;
    }

    /**
    * Gets slaveAz
    *  主备任务备AZ。
    *
    * @return string|null
    */
    public function getSlaveAz()
    {
        return $this->container['slaveAz'];
    }

    /**
    * Sets slaveAz
    *
    * @param string|null $slaveAz 主备任务备AZ。
    *
    * @return $this
    */
    public function setSlaveAz($slaveAz)
    {
        $this->container['slaveAz'] = $slaveAz;
        return $this;
    }

    /**
    * Gets nodeRole
    *  任务主备角色。
    *
    * @return string|null
    */
    public function getNodeRole()
    {
        return $this->container['nodeRole'];
    }

    /**
    * Sets nodeRole
    *
    * @param string|null $nodeRole 任务主备角色。
    *
    * @return $this
    */
    public function setNodeRole($nodeRole)
    {
        $this->container['nodeRole'] = $nodeRole;
        return $this;
    }

    /**
    * Gets periodOrder
    *  periodOrder
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\PeriodOrderResp|null
    */
    public function getPeriodOrder()
    {
        return $this->container['periodOrder'];
    }

    /**
    * Sets periodOrder
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\PeriodOrderResp|null $periodOrder periodOrder
    *
    * @return $this
    */
    public function setPeriodOrder($periodOrder)
    {
        $this->container['periodOrder'] = $periodOrder;
        return $this;
    }

    /**
    * Gets objectInfos
    *  已同步对象信息。
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\DatabaseObjectInfo[]|null
    */
    public function getObjectInfos()
    {
        return $this->container['objectInfos'];
    }

    /**
    * Sets objectInfos
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\DatabaseObjectInfo[]|null $objectInfos 已同步对象信息。
    *
    * @return $this
    */
    public function setObjectInfos($objectInfos)
    {
        $this->container['objectInfos'] = $objectInfos;
        return $this;
    }

    /**
    * Gets originalJobDirection
    *  初始任务方向。 取值： - up：入云，灾备场景时对应本云为备。 - down：出云，灾备场景时对应本云为主。 - non-dbs：自建。
    *
    * @return string|null
    */
    public function getOriginalJobDirection()
    {
        return $this->container['originalJobDirection'];
    }

    /**
    * Sets originalJobDirection
    *
    * @param string|null $originalJobDirection 初始任务方向。 取值： - up：入云，灾备场景时对应本云为备。 - down：出云，灾备场景时对应本云为主。 - non-dbs：自建。
    *
    * @return $this
    */
    public function setOriginalJobDirection($originalJobDirection)
    {
        $this->container['originalJobDirection'] = $originalJobDirection;
        return $this;
    }

    /**
    * Gets dataTransformation
    *  dataTransformation
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\GetDataTransformationResp|null
    */
    public function getDataTransformation()
    {
        return $this->container['dataTransformation'];
    }

    /**
    * Sets dataTransformation
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\GetDataTransformationResp|null $dataTransformation dataTransformation
    *
    * @return $this
    */
    public function setDataTransformation($dataTransformation)
    {
        $this->container['dataTransformation'] = $dataTransformation;
        return $this;
    }

    /**
    * Gets tags
    *  DRS任务标签。
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\Tag[]|null $tags DRS任务标签。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets publicIpList
    *  指定公网Ip的信息。
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\PublicIpConfig[]|null
    */
    public function getPublicIpList()
    {
        return $this->container['publicIpList'];
    }

    /**
    * Sets publicIpList
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\PublicIpConfig[]|null $publicIpList 指定公网Ip的信息。
    *
    * @return $this
    */
    public function setPublicIpList($publicIpList)
    {
        $this->container['publicIpList'] = $publicIpList;
        return $this;
    }

    /**
    * Gets bindPublicIpState
    *  是否成功绑定公网IP。
    *
    * @return string|null
    */
    public function getBindPublicIpState()
    {
        return $this->container['bindPublicIpState'];
    }

    /**
    * Sets bindPublicIpState
    *
    * @param string|null $bindPublicIpState 是否成功绑定公网IP。
    *
    * @return $this
    */
    public function setBindPublicIpState($bindPublicIpState)
    {
        $this->container['bindPublicIpState'] = $bindPublicIpState;
        return $this;
    }

    /**
    * Gets children
    *  多任务时，存在子任务绑定失败时，返回子任务的信息。
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\FailedToBindEipChildInfo[]|null
    */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
    * Sets children
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\FailedToBindEipChildInfo[]|null $children 多任务时，存在子任务绑定失败时，返回子任务的信息。
    *
    * @return $this
    */
    public function setChildren($children)
    {
        $this->container['children'] = $children;
        return $this;
    }

    /**
    * Gets isOpenFastClean
    *  是否开启云数据库RDS for MySQL/MariaDB的binlog快速清理。
    *
    * @return bool|null
    */
    public function getIsOpenFastClean()
    {
        return $this->container['isOpenFastClean'];
    }

    /**
    * Sets isOpenFastClean
    *
    * @param bool|null $isOpenFastClean 是否开启云数据库RDS for MySQL/MariaDB的binlog快速清理。
    *
    * @return $this
    */
    public function setIsOpenFastClean($isOpenFastClean)
    {
        $this->container['isOpenFastClean'] = $isOpenFastClean;
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

