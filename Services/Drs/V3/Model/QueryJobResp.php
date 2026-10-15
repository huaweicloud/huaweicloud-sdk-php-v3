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
    * id  **参数解释**：  任务ID，用于唯一标识一个数据复制任务。  **约束限制**：  不涉及。  **取值范围**：  UUID格式字符串。  **默认取值**：  不涉及
    * parentId  **参数解释**：  父任务ID，多任务场景下子任务所归属的父任务标识。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * name  **参数解释**：  任务名称，用户创建任务时自定义的名称，用于区分和识别不同的数据复制任务。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * status  **参数解释**：  任务当前运行状态。  **约束限制**：  不涉及。  **取值范围**：  - CREATING：创建中 - CREATE_FAILED：创建失败 - CONFIGURATION：配置中 - STARTJOBING：启动中 - WAITING_FOR_START：等待启动中 - START_JOB_FAILED：启动失败 - PAUSING：已暂停 - FULL_TRANSFER_STARTED：全量开始，灾备场景下为初始化 - FULL_TRANSFER_FAILED：全量失败，灾备场景下为初始化失败 - FULL_TRANSFER_COMPLETE：全量完成，灾备场景下为初始化完成 - INCRE_TRANSFER_STARTED：增量开始，灾备场景下为灾备中 - INCRE_TRANSFER_FAILED：增量失败，灾备场景下为灾备异常 - RELEASE_RESOURCE_STARTED：结束任务中 - RELEASE_RESOURCE_FAILED：结束任务失败 - RELEASE_RESOURCE_COMPLETE：已结束 - REBUILD_NODE_STARTED：故障恢复中 - REBUILD_NODE_FAILED：故障恢复失败 - CHANGE_JOB_STARTED：任务变更中 - CHANGE_JOB_FAILED：任务变更失败 - DELETED：已删除 - CHILD_TRANSFER_STARTING：再编辑子任务启动中 - CHILD_TRANSFER_STARTED：再编辑子任务迁移中 - CHILD_TRANSFER_COMPLETE：再编辑子任务迁移完成 - CHILD_TRANSFER_FAILED：再编辑子任务迁移失败 - RELEASE_CHILD_TRANSFER_STARTED：再编辑子任务结束中 - RELEASE_CHILD_TRANSFER_COMPLETE：再编辑子任务已结束 - NODE_UPGRADE_START：升级开始 - NODE_UPGRADE_COMPLETE：升级完成 - NODE_UPGRADE_FAILED：升级失败  **默认取值**：  不涉及
    * description  **参数解释**：  任务描述信息，用户创建任务时自定义的备注说明。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * createTime  **参数解释**：  任务的创建时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * taskType  **参数解释**：  任务迁移模式，指定数据复制任务的执行方式。  **约束限制**：  不涉及。  **取值范围**：  - FULL_TRANS：全量迁移，仅迁移历史数据 - FULL_INCR_TRANS：全量+增量迁移，先迁移历史数据再持续同步增量 - INCR_TRANS：增量迁移，仅同步数据变更  **默认取值**：  不涉及
    * sourceEndpoint  sourceEndpoint
    * dmqEndpoint  dmqEndpoint
    * sourceSharding  **参数解释**：  物理分片源库信息列表，多对一场景下存在多个源库时返回，每个元素为Endpoint结构。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * targetEndpoint  targetEndpoint
    * netType  **参数解释**：  任务使用的网络类型。  **约束限制**：  不涉及。  **取值范围**：  - vpn：虚拟专用网络 - vpc：虚拟私有云 - eip：弹性公网IP  **默认取值**：  不涉及
    * failedReason  **参数解释**：  任务失败原因，任务状态为失败时返回该字段。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * instInfo  instInfo
    * actualStartTime  **参数解释**：  任务实际启动时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * fullTransferCompleteTime  **参数解释**：  全量迁移完成时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * updateTime  **参数解释**：  任务最近一次更新时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * jobDirection  **参数解释**：  任务的迁移方向。  **约束限制**：  不涉及。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主 - non-dbs：自建  **默认取值**：  不涉及
    * dbUseType  **参数解释**：  迁移任务的业务场景类型。  **约束限制**：  不涉及。  **取值范围**：  - migration：实时迁移 - sync：实时同步 - cloudDataGuard：实时灾备  **默认取值**：  不涉及
    * needRestart  **参数解释**：  任务配置变更后是否需要重启迁移实例才能生效。  **约束限制**：  不涉及。  **取值范围**：  - true：需要重启 - false：不需要重启  **默认取值**：  不涉及
    * isTargetReadonly  **参数解释**：  指定目标数据库实例在迁移过程中是否限制为只读状态。  **约束限制**：  不涉及。  **取值范围**：  - true：目标实例限制为只读 - false：目标实例不限制为只读  **默认取值**：  不涉及
    * conflictPolicy  **参数解释**：  数据迁移过程中的冲突忽略策略，指定当目标库已存在相同数据时的处理方式。  **约束限制**：  不涉及。  **取值范围**：  - stop：冲突失败，遇到冲突时停止任务 - overwrite：冲突覆盖，用源库数据覆盖目标库已有数据 - ignore：冲突忽略，跳过冲突数据继续迁移  **默认取值**：  不涉及
    * filterDdlPolicy  **参数解释**：  过滤DDL策略，指定迁移过程中需要过滤的DDL操作类型。  **约束限制**：  不涉及。  **取值范围**：  - drop_database：过滤drop_database操作 - drop_databasefilter_all：过滤所有DDL操作 - \"\"：不过滤  **默认取值**：  不涉及
    * speedLimit  **参数解释**：  迁移速度限制信息，详情请参见SpeedLimitInfo对象定义。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * schemaType  **参数解释**：  DRS任务的迁移方案，指定数据复制的底层实现方式。  **约束限制**：  不涉及。  **取值范围**：  - Replication：主从复制 - Tungsten：日志解析 - PGBaseBackup：PG备份  **默认取值**：  不涉及
    * nodeNum  **参数解释**：  迁移实例节点个数。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * objectSwitch  **参数解释**：  对象选择开关，标识是否已开启对象选择功能。  **约束限制**：  不涉及。  **取值范围**：  - true：开启对象选择 - false：关闭对象选择  **默认取值**：  不涉及
    * masterJobId  **参数解释**：  主任务ID，多任务场景下子任务所归属的主任务标识。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * fullMode  **参数解释**：  全量快照模式。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * structTrans  **参数解释**：  是否迁移结构。  **约束限制**：  不涉及。  **取值范围**：  - true：迁移结构 - false：不迁移结构  **默认取值**：  不涉及
    * indexTrans  **参数解释**：  是否迁移索引。  **约束限制**：  不涉及。  **取值范围**：  - true：迁移索引 - false：不迁移索引  **默认取值**：  不涉及
    * replaceDefiner  **参数解释**：  是否使用目标库的用户替换掉definer。  **约束限制**：  不涉及。  **取值范围**：  - true：使用目标库用户替换definer - false：不替换definer  **默认取值**：  不涉及
    * migrateUser  **参数解释**：  是否迁移用户。  **约束限制**：  不涉及。  **取值范围**：  - true：迁移用户 - false：不迁移用户  **默认取值**：  不涉及
    * syncDatabase  **参数解释**：  是否库级同步。  **约束限制**：  不涉及。  **取值范围**：  - true：库级同步 - false：非库级同步  **默认取值**：  不涉及
    * errorCode  **参数解释**：  错误码，当任务报错时返回的错误代码。  **约束限制**：  不涉及。  **取值范围**：  格式为DRS.XXXXXX。  **默认取值**：  不涉及
    * errorMessage  **参数解释**：  错误详细信息，当任务执行失败时返回的具体错误描述。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * targetRootDb  targetRootDb
    * azCode  **参数解释**：  迁移实例节点所在的可用区（AZ，Availability Zone）编码。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * vpcId  **参数解释**：  迁移实例节点所在的虚拟私有云（VPC，Virtual Private Cloud）ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * subnetId  **参数解释**：  迁移实例节点所在的子网ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * securityGroupId  **参数解释**：  迁移实例节点所在的安全组ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * multiWrite  **参数解释**：  是否多主灾备任务，双主灾备场景下该值为true。  **约束限制**：  不涉及。  **取值范围**：  - true：多主灾备任务 - false：非多主灾备任务  **默认取值**：  不涉及
    * supportIpV6  **参数解释**：  是否支持IPv6。  **约束限制**：  不涉及。  **取值范围**：  - true：支持IPv6 - false：不支持IPv6  **默认取值**：  不涉及
    * inheritId  **参数解释**：  继承的任务ID，Oracle到Kafka链路时使用。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * gtid  **参数解释**：  断点的GTID（Global Transaction Identifier）集合，用于记录增量同步的断点位置。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * alarmNotify  alarmNotify
    * increStartPosition  **参数解释**：  增量任务启动位点，标识增量同步起始的数据位置。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * isMultiAz  **参数解释**：  标识任务是否为跨可用区（AZ）部署的主备任务。  **约束限制**：  不涉及。  **取值范围**：  - true：跨AZ主备任务 - false：非跨AZ任务  **默认取值**：  不涉及
    * azName  **参数解释**：  迁移实例节点所在的可用区（AZ）名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * masterAz  **参数解释**：  主备任务中主实例所在的可用区（AZ）。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * slaveAz  **参数解释**：  主备任务中备实例所在的可用区（AZ）。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * nodeRole  **参数解释**：  任务主备角色，标识当前节点在主备任务中的角色。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * periodOrder  periodOrder
    * objectInfos  **参数解释**：  已同步对象信息列表，每个元素为DatabaseObjectInfo结构。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * originalJobDirection  **参数解释**：  任务创建时的初始方向，表示任务首次创建时配置的迁移方向，不会随灾备倒换而改变。  **约束限制**：  不涉及。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主 - non-dbs：自建  **默认取值**：  不涉及
    * dataTransformation  dataTransformation
    * tags  **参数解释**：  DRS任务标签列表，每个元素为Tag结构。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * publicIpList  **参数解释**：  指定公网IP的信息列表，每个元素为PublicIpConfig结构。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * bindPublicIpState  **参数解释**：  公网IP绑定状态，标识是否成功绑定公网IP。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * children  **参数解释**：  子任务绑定失败信息列表，多任务场景下存在子任务绑定公网IP失败时返回，每个元素为FailedToBindEipChildInfo结构。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * isOpenFastClean  **参数解释**：  是否开启云数据库RDS for MySQL或MariaDB的Binlog快速清理。  **约束限制**：  不涉及。  **取值范围**：  - true：开启Binlog快速清理 - false：不开启Binlog快速清理  **默认取值**：  不涉及
    * jobKernelDirection  **参数解释**：  灾备任务内核方向。非倒换中与job_direction取值相同，倒换中与job_direction取值相反。  **约束限制**：  不涉及。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主  **默认取值**：  不涉及
    * syncMode  **参数解释**：  同步任务的同步模式，指定数据同步的粒度级别。  **约束限制**：  不涉及。  **取值范围**：  - DB_LEVEL：库级同步 - SCHEMA_LEVEL：schema级同步 - TABLE_LEVEL：表级同步 - FILE_IMPORT：文件导入 - INSTANCE_LEVEL：实例级同步  **默认取值**：  不涉及
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
            'isOpenFastClean' => 'bool',
            'jobKernelDirection' => 'string',
            'syncMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**：  任务ID，用于唯一标识一个数据复制任务。  **约束限制**：  不涉及。  **取值范围**：  UUID格式字符串。  **默认取值**：  不涉及
    * parentId  **参数解释**：  父任务ID，多任务场景下子任务所归属的父任务标识。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * name  **参数解释**：  任务名称，用户创建任务时自定义的名称，用于区分和识别不同的数据复制任务。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * status  **参数解释**：  任务当前运行状态。  **约束限制**：  不涉及。  **取值范围**：  - CREATING：创建中 - CREATE_FAILED：创建失败 - CONFIGURATION：配置中 - STARTJOBING：启动中 - WAITING_FOR_START：等待启动中 - START_JOB_FAILED：启动失败 - PAUSING：已暂停 - FULL_TRANSFER_STARTED：全量开始，灾备场景下为初始化 - FULL_TRANSFER_FAILED：全量失败，灾备场景下为初始化失败 - FULL_TRANSFER_COMPLETE：全量完成，灾备场景下为初始化完成 - INCRE_TRANSFER_STARTED：增量开始，灾备场景下为灾备中 - INCRE_TRANSFER_FAILED：增量失败，灾备场景下为灾备异常 - RELEASE_RESOURCE_STARTED：结束任务中 - RELEASE_RESOURCE_FAILED：结束任务失败 - RELEASE_RESOURCE_COMPLETE：已结束 - REBUILD_NODE_STARTED：故障恢复中 - REBUILD_NODE_FAILED：故障恢复失败 - CHANGE_JOB_STARTED：任务变更中 - CHANGE_JOB_FAILED：任务变更失败 - DELETED：已删除 - CHILD_TRANSFER_STARTING：再编辑子任务启动中 - CHILD_TRANSFER_STARTED：再编辑子任务迁移中 - CHILD_TRANSFER_COMPLETE：再编辑子任务迁移完成 - CHILD_TRANSFER_FAILED：再编辑子任务迁移失败 - RELEASE_CHILD_TRANSFER_STARTED：再编辑子任务结束中 - RELEASE_CHILD_TRANSFER_COMPLETE：再编辑子任务已结束 - NODE_UPGRADE_START：升级开始 - NODE_UPGRADE_COMPLETE：升级完成 - NODE_UPGRADE_FAILED：升级失败  **默认取值**：  不涉及
    * description  **参数解释**：  任务描述信息，用户创建任务时自定义的备注说明。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * createTime  **参数解释**：  任务的创建时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * taskType  **参数解释**：  任务迁移模式，指定数据复制任务的执行方式。  **约束限制**：  不涉及。  **取值范围**：  - FULL_TRANS：全量迁移，仅迁移历史数据 - FULL_INCR_TRANS：全量+增量迁移，先迁移历史数据再持续同步增量 - INCR_TRANS：增量迁移，仅同步数据变更  **默认取值**：  不涉及
    * sourceEndpoint  sourceEndpoint
    * dmqEndpoint  dmqEndpoint
    * sourceSharding  **参数解释**：  物理分片源库信息列表，多对一场景下存在多个源库时返回，每个元素为Endpoint结构。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * targetEndpoint  targetEndpoint
    * netType  **参数解释**：  任务使用的网络类型。  **约束限制**：  不涉及。  **取值范围**：  - vpn：虚拟专用网络 - vpc：虚拟私有云 - eip：弹性公网IP  **默认取值**：  不涉及
    * failedReason  **参数解释**：  任务失败原因，任务状态为失败时返回该字段。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * instInfo  instInfo
    * actualStartTime  **参数解释**：  任务实际启动时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * fullTransferCompleteTime  **参数解释**：  全量迁移完成时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * updateTime  **参数解释**：  任务最近一次更新时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * jobDirection  **参数解释**：  任务的迁移方向。  **约束限制**：  不涉及。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主 - non-dbs：自建  **默认取值**：  不涉及
    * dbUseType  **参数解释**：  迁移任务的业务场景类型。  **约束限制**：  不涉及。  **取值范围**：  - migration：实时迁移 - sync：实时同步 - cloudDataGuard：实时灾备  **默认取值**：  不涉及
    * needRestart  **参数解释**：  任务配置变更后是否需要重启迁移实例才能生效。  **约束限制**：  不涉及。  **取值范围**：  - true：需要重启 - false：不需要重启  **默认取值**：  不涉及
    * isTargetReadonly  **参数解释**：  指定目标数据库实例在迁移过程中是否限制为只读状态。  **约束限制**：  不涉及。  **取值范围**：  - true：目标实例限制为只读 - false：目标实例不限制为只读  **默认取值**：  不涉及
    * conflictPolicy  **参数解释**：  数据迁移过程中的冲突忽略策略，指定当目标库已存在相同数据时的处理方式。  **约束限制**：  不涉及。  **取值范围**：  - stop：冲突失败，遇到冲突时停止任务 - overwrite：冲突覆盖，用源库数据覆盖目标库已有数据 - ignore：冲突忽略，跳过冲突数据继续迁移  **默认取值**：  不涉及
    * filterDdlPolicy  **参数解释**：  过滤DDL策略，指定迁移过程中需要过滤的DDL操作类型。  **约束限制**：  不涉及。  **取值范围**：  - drop_database：过滤drop_database操作 - drop_databasefilter_all：过滤所有DDL操作 - \"\"：不过滤  **默认取值**：  不涉及
    * speedLimit  **参数解释**：  迁移速度限制信息，详情请参见SpeedLimitInfo对象定义。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * schemaType  **参数解释**：  DRS任务的迁移方案，指定数据复制的底层实现方式。  **约束限制**：  不涉及。  **取值范围**：  - Replication：主从复制 - Tungsten：日志解析 - PGBaseBackup：PG备份  **默认取值**：  不涉及
    * nodeNum  **参数解释**：  迁移实例节点个数。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * objectSwitch  **参数解释**：  对象选择开关，标识是否已开启对象选择功能。  **约束限制**：  不涉及。  **取值范围**：  - true：开启对象选择 - false：关闭对象选择  **默认取值**：  不涉及
    * masterJobId  **参数解释**：  主任务ID，多任务场景下子任务所归属的主任务标识。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * fullMode  **参数解释**：  全量快照模式。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * structTrans  **参数解释**：  是否迁移结构。  **约束限制**：  不涉及。  **取值范围**：  - true：迁移结构 - false：不迁移结构  **默认取值**：  不涉及
    * indexTrans  **参数解释**：  是否迁移索引。  **约束限制**：  不涉及。  **取值范围**：  - true：迁移索引 - false：不迁移索引  **默认取值**：  不涉及
    * replaceDefiner  **参数解释**：  是否使用目标库的用户替换掉definer。  **约束限制**：  不涉及。  **取值范围**：  - true：使用目标库用户替换definer - false：不替换definer  **默认取值**：  不涉及
    * migrateUser  **参数解释**：  是否迁移用户。  **约束限制**：  不涉及。  **取值范围**：  - true：迁移用户 - false：不迁移用户  **默认取值**：  不涉及
    * syncDatabase  **参数解释**：  是否库级同步。  **约束限制**：  不涉及。  **取值范围**：  - true：库级同步 - false：非库级同步  **默认取值**：  不涉及
    * errorCode  **参数解释**：  错误码，当任务报错时返回的错误代码。  **约束限制**：  不涉及。  **取值范围**：  格式为DRS.XXXXXX。  **默认取值**：  不涉及
    * errorMessage  **参数解释**：  错误详细信息，当任务执行失败时返回的具体错误描述。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * targetRootDb  targetRootDb
    * azCode  **参数解释**：  迁移实例节点所在的可用区（AZ，Availability Zone）编码。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * vpcId  **参数解释**：  迁移实例节点所在的虚拟私有云（VPC，Virtual Private Cloud）ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * subnetId  **参数解释**：  迁移实例节点所在的子网ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * securityGroupId  **参数解释**：  迁移实例节点所在的安全组ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * multiWrite  **参数解释**：  是否多主灾备任务，双主灾备场景下该值为true。  **约束限制**：  不涉及。  **取值范围**：  - true：多主灾备任务 - false：非多主灾备任务  **默认取值**：  不涉及
    * supportIpV6  **参数解释**：  是否支持IPv6。  **约束限制**：  不涉及。  **取值范围**：  - true：支持IPv6 - false：不支持IPv6  **默认取值**：  不涉及
    * inheritId  **参数解释**：  继承的任务ID，Oracle到Kafka链路时使用。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * gtid  **参数解释**：  断点的GTID（Global Transaction Identifier）集合，用于记录增量同步的断点位置。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * alarmNotify  alarmNotify
    * increStartPosition  **参数解释**：  增量任务启动位点，标识增量同步起始的数据位置。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * isMultiAz  **参数解释**：  标识任务是否为跨可用区（AZ）部署的主备任务。  **约束限制**：  不涉及。  **取值范围**：  - true：跨AZ主备任务 - false：非跨AZ任务  **默认取值**：  不涉及
    * azName  **参数解释**：  迁移实例节点所在的可用区（AZ）名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * masterAz  **参数解释**：  主备任务中主实例所在的可用区（AZ）。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * slaveAz  **参数解释**：  主备任务中备实例所在的可用区（AZ）。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * nodeRole  **参数解释**：  任务主备角色，标识当前节点在主备任务中的角色。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * periodOrder  periodOrder
    * objectInfos  **参数解释**：  已同步对象信息列表，每个元素为DatabaseObjectInfo结构。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * originalJobDirection  **参数解释**：  任务创建时的初始方向，表示任务首次创建时配置的迁移方向，不会随灾备倒换而改变。  **约束限制**：  不涉及。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主 - non-dbs：自建  **默认取值**：  不涉及
    * dataTransformation  dataTransformation
    * tags  **参数解释**：  DRS任务标签列表，每个元素为Tag结构。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * publicIpList  **参数解释**：  指定公网IP的信息列表，每个元素为PublicIpConfig结构。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * bindPublicIpState  **参数解释**：  公网IP绑定状态，标识是否成功绑定公网IP。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * children  **参数解释**：  子任务绑定失败信息列表，多任务场景下存在子任务绑定公网IP失败时返回，每个元素为FailedToBindEipChildInfo结构。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * isOpenFastClean  **参数解释**：  是否开启云数据库RDS for MySQL或MariaDB的Binlog快速清理。  **约束限制**：  不涉及。  **取值范围**：  - true：开启Binlog快速清理 - false：不开启Binlog快速清理  **默认取值**：  不涉及
    * jobKernelDirection  **参数解释**：  灾备任务内核方向。非倒换中与job_direction取值相同，倒换中与job_direction取值相反。  **约束限制**：  不涉及。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主  **默认取值**：  不涉及
    * syncMode  **参数解释**：  同步任务的同步模式，指定数据同步的粒度级别。  **约束限制**：  不涉及。  **取值范围**：  - DB_LEVEL：库级同步 - SCHEMA_LEVEL：schema级同步 - TABLE_LEVEL：表级同步 - FILE_IMPORT：文件导入 - INSTANCE_LEVEL：实例级同步  **默认取值**：  不涉及
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
        'isOpenFastClean' => null,
        'jobKernelDirection' => null,
        'syncMode' => null
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
    * id  **参数解释**：  任务ID，用于唯一标识一个数据复制任务。  **约束限制**：  不涉及。  **取值范围**：  UUID格式字符串。  **默认取值**：  不涉及
    * parentId  **参数解释**：  父任务ID，多任务场景下子任务所归属的父任务标识。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * name  **参数解释**：  任务名称，用户创建任务时自定义的名称，用于区分和识别不同的数据复制任务。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * status  **参数解释**：  任务当前运行状态。  **约束限制**：  不涉及。  **取值范围**：  - CREATING：创建中 - CREATE_FAILED：创建失败 - CONFIGURATION：配置中 - STARTJOBING：启动中 - WAITING_FOR_START：等待启动中 - START_JOB_FAILED：启动失败 - PAUSING：已暂停 - FULL_TRANSFER_STARTED：全量开始，灾备场景下为初始化 - FULL_TRANSFER_FAILED：全量失败，灾备场景下为初始化失败 - FULL_TRANSFER_COMPLETE：全量完成，灾备场景下为初始化完成 - INCRE_TRANSFER_STARTED：增量开始，灾备场景下为灾备中 - INCRE_TRANSFER_FAILED：增量失败，灾备场景下为灾备异常 - RELEASE_RESOURCE_STARTED：结束任务中 - RELEASE_RESOURCE_FAILED：结束任务失败 - RELEASE_RESOURCE_COMPLETE：已结束 - REBUILD_NODE_STARTED：故障恢复中 - REBUILD_NODE_FAILED：故障恢复失败 - CHANGE_JOB_STARTED：任务变更中 - CHANGE_JOB_FAILED：任务变更失败 - DELETED：已删除 - CHILD_TRANSFER_STARTING：再编辑子任务启动中 - CHILD_TRANSFER_STARTED：再编辑子任务迁移中 - CHILD_TRANSFER_COMPLETE：再编辑子任务迁移完成 - CHILD_TRANSFER_FAILED：再编辑子任务迁移失败 - RELEASE_CHILD_TRANSFER_STARTED：再编辑子任务结束中 - RELEASE_CHILD_TRANSFER_COMPLETE：再编辑子任务已结束 - NODE_UPGRADE_START：升级开始 - NODE_UPGRADE_COMPLETE：升级完成 - NODE_UPGRADE_FAILED：升级失败  **默认取值**：  不涉及
    * description  **参数解释**：  任务描述信息，用户创建任务时自定义的备注说明。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * createTime  **参数解释**：  任务的创建时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * taskType  **参数解释**：  任务迁移模式，指定数据复制任务的执行方式。  **约束限制**：  不涉及。  **取值范围**：  - FULL_TRANS：全量迁移，仅迁移历史数据 - FULL_INCR_TRANS：全量+增量迁移，先迁移历史数据再持续同步增量 - INCR_TRANS：增量迁移，仅同步数据变更  **默认取值**：  不涉及
    * sourceEndpoint  sourceEndpoint
    * dmqEndpoint  dmqEndpoint
    * sourceSharding  **参数解释**：  物理分片源库信息列表，多对一场景下存在多个源库时返回，每个元素为Endpoint结构。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * targetEndpoint  targetEndpoint
    * netType  **参数解释**：  任务使用的网络类型。  **约束限制**：  不涉及。  **取值范围**：  - vpn：虚拟专用网络 - vpc：虚拟私有云 - eip：弹性公网IP  **默认取值**：  不涉及
    * failedReason  **参数解释**：  任务失败原因，任务状态为失败时返回该字段。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * instInfo  instInfo
    * actualStartTime  **参数解释**：  任务实际启动时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * fullTransferCompleteTime  **参数解释**：  全量迁移完成时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * updateTime  **参数解释**：  任务最近一次更新时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * jobDirection  **参数解释**：  任务的迁移方向。  **约束限制**：  不涉及。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主 - non-dbs：自建  **默认取值**：  不涉及
    * dbUseType  **参数解释**：  迁移任务的业务场景类型。  **约束限制**：  不涉及。  **取值范围**：  - migration：实时迁移 - sync：实时同步 - cloudDataGuard：实时灾备  **默认取值**：  不涉及
    * needRestart  **参数解释**：  任务配置变更后是否需要重启迁移实例才能生效。  **约束限制**：  不涉及。  **取值范围**：  - true：需要重启 - false：不需要重启  **默认取值**：  不涉及
    * isTargetReadonly  **参数解释**：  指定目标数据库实例在迁移过程中是否限制为只读状态。  **约束限制**：  不涉及。  **取值范围**：  - true：目标实例限制为只读 - false：目标实例不限制为只读  **默认取值**：  不涉及
    * conflictPolicy  **参数解释**：  数据迁移过程中的冲突忽略策略，指定当目标库已存在相同数据时的处理方式。  **约束限制**：  不涉及。  **取值范围**：  - stop：冲突失败，遇到冲突时停止任务 - overwrite：冲突覆盖，用源库数据覆盖目标库已有数据 - ignore：冲突忽略，跳过冲突数据继续迁移  **默认取值**：  不涉及
    * filterDdlPolicy  **参数解释**：  过滤DDL策略，指定迁移过程中需要过滤的DDL操作类型。  **约束限制**：  不涉及。  **取值范围**：  - drop_database：过滤drop_database操作 - drop_databasefilter_all：过滤所有DDL操作 - \"\"：不过滤  **默认取值**：  不涉及
    * speedLimit  **参数解释**：  迁移速度限制信息，详情请参见SpeedLimitInfo对象定义。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * schemaType  **参数解释**：  DRS任务的迁移方案，指定数据复制的底层实现方式。  **约束限制**：  不涉及。  **取值范围**：  - Replication：主从复制 - Tungsten：日志解析 - PGBaseBackup：PG备份  **默认取值**：  不涉及
    * nodeNum  **参数解释**：  迁移实例节点个数。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * objectSwitch  **参数解释**：  对象选择开关，标识是否已开启对象选择功能。  **约束限制**：  不涉及。  **取值范围**：  - true：开启对象选择 - false：关闭对象选择  **默认取值**：  不涉及
    * masterJobId  **参数解释**：  主任务ID，多任务场景下子任务所归属的主任务标识。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * fullMode  **参数解释**：  全量快照模式。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * structTrans  **参数解释**：  是否迁移结构。  **约束限制**：  不涉及。  **取值范围**：  - true：迁移结构 - false：不迁移结构  **默认取值**：  不涉及
    * indexTrans  **参数解释**：  是否迁移索引。  **约束限制**：  不涉及。  **取值范围**：  - true：迁移索引 - false：不迁移索引  **默认取值**：  不涉及
    * replaceDefiner  **参数解释**：  是否使用目标库的用户替换掉definer。  **约束限制**：  不涉及。  **取值范围**：  - true：使用目标库用户替换definer - false：不替换definer  **默认取值**：  不涉及
    * migrateUser  **参数解释**：  是否迁移用户。  **约束限制**：  不涉及。  **取值范围**：  - true：迁移用户 - false：不迁移用户  **默认取值**：  不涉及
    * syncDatabase  **参数解释**：  是否库级同步。  **约束限制**：  不涉及。  **取值范围**：  - true：库级同步 - false：非库级同步  **默认取值**：  不涉及
    * errorCode  **参数解释**：  错误码，当任务报错时返回的错误代码。  **约束限制**：  不涉及。  **取值范围**：  格式为DRS.XXXXXX。  **默认取值**：  不涉及
    * errorMessage  **参数解释**：  错误详细信息，当任务执行失败时返回的具体错误描述。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * targetRootDb  targetRootDb
    * azCode  **参数解释**：  迁移实例节点所在的可用区（AZ，Availability Zone）编码。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * vpcId  **参数解释**：  迁移实例节点所在的虚拟私有云（VPC，Virtual Private Cloud）ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * subnetId  **参数解释**：  迁移实例节点所在的子网ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * securityGroupId  **参数解释**：  迁移实例节点所在的安全组ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * multiWrite  **参数解释**：  是否多主灾备任务，双主灾备场景下该值为true。  **约束限制**：  不涉及。  **取值范围**：  - true：多主灾备任务 - false：非多主灾备任务  **默认取值**：  不涉及
    * supportIpV6  **参数解释**：  是否支持IPv6。  **约束限制**：  不涉及。  **取值范围**：  - true：支持IPv6 - false：不支持IPv6  **默认取值**：  不涉及
    * inheritId  **参数解释**：  继承的任务ID，Oracle到Kafka链路时使用。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * gtid  **参数解释**：  断点的GTID（Global Transaction Identifier）集合，用于记录增量同步的断点位置。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * alarmNotify  alarmNotify
    * increStartPosition  **参数解释**：  增量任务启动位点，标识增量同步起始的数据位置。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * isMultiAz  **参数解释**：  标识任务是否为跨可用区（AZ）部署的主备任务。  **约束限制**：  不涉及。  **取值范围**：  - true：跨AZ主备任务 - false：非跨AZ任务  **默认取值**：  不涉及
    * azName  **参数解释**：  迁移实例节点所在的可用区（AZ）名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * masterAz  **参数解释**：  主备任务中主实例所在的可用区（AZ）。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * slaveAz  **参数解释**：  主备任务中备实例所在的可用区（AZ）。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * nodeRole  **参数解释**：  任务主备角色，标识当前节点在主备任务中的角色。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * periodOrder  periodOrder
    * objectInfos  **参数解释**：  已同步对象信息列表，每个元素为DatabaseObjectInfo结构。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * originalJobDirection  **参数解释**：  任务创建时的初始方向，表示任务首次创建时配置的迁移方向，不会随灾备倒换而改变。  **约束限制**：  不涉及。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主 - non-dbs：自建  **默认取值**：  不涉及
    * dataTransformation  dataTransformation
    * tags  **参数解释**：  DRS任务标签列表，每个元素为Tag结构。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * publicIpList  **参数解释**：  指定公网IP的信息列表，每个元素为PublicIpConfig结构。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * bindPublicIpState  **参数解释**：  公网IP绑定状态，标识是否成功绑定公网IP。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * children  **参数解释**：  子任务绑定失败信息列表，多任务场景下存在子任务绑定公网IP失败时返回，每个元素为FailedToBindEipChildInfo结构。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * isOpenFastClean  **参数解释**：  是否开启云数据库RDS for MySQL或MariaDB的Binlog快速清理。  **约束限制**：  不涉及。  **取值范围**：  - true：开启Binlog快速清理 - false：不开启Binlog快速清理  **默认取值**：  不涉及
    * jobKernelDirection  **参数解释**：  灾备任务内核方向。非倒换中与job_direction取值相同，倒换中与job_direction取值相反。  **约束限制**：  不涉及。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主  **默认取值**：  不涉及
    * syncMode  **参数解释**：  同步任务的同步模式，指定数据同步的粒度级别。  **约束限制**：  不涉及。  **取值范围**：  - DB_LEVEL：库级同步 - SCHEMA_LEVEL：schema级同步 - TABLE_LEVEL：表级同步 - FILE_IMPORT：文件导入 - INSTANCE_LEVEL：实例级同步  **默认取值**：  不涉及
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
            'isOpenFastClean' => 'is_open_fast_clean',
            'jobKernelDirection' => 'job_kernel_direction',
            'syncMode' => 'sync_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**：  任务ID，用于唯一标识一个数据复制任务。  **约束限制**：  不涉及。  **取值范围**：  UUID格式字符串。  **默认取值**：  不涉及
    * parentId  **参数解释**：  父任务ID，多任务场景下子任务所归属的父任务标识。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * name  **参数解释**：  任务名称，用户创建任务时自定义的名称，用于区分和识别不同的数据复制任务。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * status  **参数解释**：  任务当前运行状态。  **约束限制**：  不涉及。  **取值范围**：  - CREATING：创建中 - CREATE_FAILED：创建失败 - CONFIGURATION：配置中 - STARTJOBING：启动中 - WAITING_FOR_START：等待启动中 - START_JOB_FAILED：启动失败 - PAUSING：已暂停 - FULL_TRANSFER_STARTED：全量开始，灾备场景下为初始化 - FULL_TRANSFER_FAILED：全量失败，灾备场景下为初始化失败 - FULL_TRANSFER_COMPLETE：全量完成，灾备场景下为初始化完成 - INCRE_TRANSFER_STARTED：增量开始，灾备场景下为灾备中 - INCRE_TRANSFER_FAILED：增量失败，灾备场景下为灾备异常 - RELEASE_RESOURCE_STARTED：结束任务中 - RELEASE_RESOURCE_FAILED：结束任务失败 - RELEASE_RESOURCE_COMPLETE：已结束 - REBUILD_NODE_STARTED：故障恢复中 - REBUILD_NODE_FAILED：故障恢复失败 - CHANGE_JOB_STARTED：任务变更中 - CHANGE_JOB_FAILED：任务变更失败 - DELETED：已删除 - CHILD_TRANSFER_STARTING：再编辑子任务启动中 - CHILD_TRANSFER_STARTED：再编辑子任务迁移中 - CHILD_TRANSFER_COMPLETE：再编辑子任务迁移完成 - CHILD_TRANSFER_FAILED：再编辑子任务迁移失败 - RELEASE_CHILD_TRANSFER_STARTED：再编辑子任务结束中 - RELEASE_CHILD_TRANSFER_COMPLETE：再编辑子任务已结束 - NODE_UPGRADE_START：升级开始 - NODE_UPGRADE_COMPLETE：升级完成 - NODE_UPGRADE_FAILED：升级失败  **默认取值**：  不涉及
    * description  **参数解释**：  任务描述信息，用户创建任务时自定义的备注说明。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * createTime  **参数解释**：  任务的创建时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * taskType  **参数解释**：  任务迁移模式，指定数据复制任务的执行方式。  **约束限制**：  不涉及。  **取值范围**：  - FULL_TRANS：全量迁移，仅迁移历史数据 - FULL_INCR_TRANS：全量+增量迁移，先迁移历史数据再持续同步增量 - INCR_TRANS：增量迁移，仅同步数据变更  **默认取值**：  不涉及
    * sourceEndpoint  sourceEndpoint
    * dmqEndpoint  dmqEndpoint
    * sourceSharding  **参数解释**：  物理分片源库信息列表，多对一场景下存在多个源库时返回，每个元素为Endpoint结构。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * targetEndpoint  targetEndpoint
    * netType  **参数解释**：  任务使用的网络类型。  **约束限制**：  不涉及。  **取值范围**：  - vpn：虚拟专用网络 - vpc：虚拟私有云 - eip：弹性公网IP  **默认取值**：  不涉及
    * failedReason  **参数解释**：  任务失败原因，任务状态为失败时返回该字段。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * instInfo  instInfo
    * actualStartTime  **参数解释**：  任务实际启动时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * fullTransferCompleteTime  **参数解释**：  全量迁移完成时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * updateTime  **参数解释**：  任务最近一次更新时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * jobDirection  **参数解释**：  任务的迁移方向。  **约束限制**：  不涉及。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主 - non-dbs：自建  **默认取值**：  不涉及
    * dbUseType  **参数解释**：  迁移任务的业务场景类型。  **约束限制**：  不涉及。  **取值范围**：  - migration：实时迁移 - sync：实时同步 - cloudDataGuard：实时灾备  **默认取值**：  不涉及
    * needRestart  **参数解释**：  任务配置变更后是否需要重启迁移实例才能生效。  **约束限制**：  不涉及。  **取值范围**：  - true：需要重启 - false：不需要重启  **默认取值**：  不涉及
    * isTargetReadonly  **参数解释**：  指定目标数据库实例在迁移过程中是否限制为只读状态。  **约束限制**：  不涉及。  **取值范围**：  - true：目标实例限制为只读 - false：目标实例不限制为只读  **默认取值**：  不涉及
    * conflictPolicy  **参数解释**：  数据迁移过程中的冲突忽略策略，指定当目标库已存在相同数据时的处理方式。  **约束限制**：  不涉及。  **取值范围**：  - stop：冲突失败，遇到冲突时停止任务 - overwrite：冲突覆盖，用源库数据覆盖目标库已有数据 - ignore：冲突忽略，跳过冲突数据继续迁移  **默认取值**：  不涉及
    * filterDdlPolicy  **参数解释**：  过滤DDL策略，指定迁移过程中需要过滤的DDL操作类型。  **约束限制**：  不涉及。  **取值范围**：  - drop_database：过滤drop_database操作 - drop_databasefilter_all：过滤所有DDL操作 - \"\"：不过滤  **默认取值**：  不涉及
    * speedLimit  **参数解释**：  迁移速度限制信息，详情请参见SpeedLimitInfo对象定义。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * schemaType  **参数解释**：  DRS任务的迁移方案，指定数据复制的底层实现方式。  **约束限制**：  不涉及。  **取值范围**：  - Replication：主从复制 - Tungsten：日志解析 - PGBaseBackup：PG备份  **默认取值**：  不涉及
    * nodeNum  **参数解释**：  迁移实例节点个数。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * objectSwitch  **参数解释**：  对象选择开关，标识是否已开启对象选择功能。  **约束限制**：  不涉及。  **取值范围**：  - true：开启对象选择 - false：关闭对象选择  **默认取值**：  不涉及
    * masterJobId  **参数解释**：  主任务ID，多任务场景下子任务所归属的主任务标识。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * fullMode  **参数解释**：  全量快照模式。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * structTrans  **参数解释**：  是否迁移结构。  **约束限制**：  不涉及。  **取值范围**：  - true：迁移结构 - false：不迁移结构  **默认取值**：  不涉及
    * indexTrans  **参数解释**：  是否迁移索引。  **约束限制**：  不涉及。  **取值范围**：  - true：迁移索引 - false：不迁移索引  **默认取值**：  不涉及
    * replaceDefiner  **参数解释**：  是否使用目标库的用户替换掉definer。  **约束限制**：  不涉及。  **取值范围**：  - true：使用目标库用户替换definer - false：不替换definer  **默认取值**：  不涉及
    * migrateUser  **参数解释**：  是否迁移用户。  **约束限制**：  不涉及。  **取值范围**：  - true：迁移用户 - false：不迁移用户  **默认取值**：  不涉及
    * syncDatabase  **参数解释**：  是否库级同步。  **约束限制**：  不涉及。  **取值范围**：  - true：库级同步 - false：非库级同步  **默认取值**：  不涉及
    * errorCode  **参数解释**：  错误码，当任务报错时返回的错误代码。  **约束限制**：  不涉及。  **取值范围**：  格式为DRS.XXXXXX。  **默认取值**：  不涉及
    * errorMessage  **参数解释**：  错误详细信息，当任务执行失败时返回的具体错误描述。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * targetRootDb  targetRootDb
    * azCode  **参数解释**：  迁移实例节点所在的可用区（AZ，Availability Zone）编码。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * vpcId  **参数解释**：  迁移实例节点所在的虚拟私有云（VPC，Virtual Private Cloud）ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * subnetId  **参数解释**：  迁移实例节点所在的子网ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * securityGroupId  **参数解释**：  迁移实例节点所在的安全组ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * multiWrite  **参数解释**：  是否多主灾备任务，双主灾备场景下该值为true。  **约束限制**：  不涉及。  **取值范围**：  - true：多主灾备任务 - false：非多主灾备任务  **默认取值**：  不涉及
    * supportIpV6  **参数解释**：  是否支持IPv6。  **约束限制**：  不涉及。  **取值范围**：  - true：支持IPv6 - false：不支持IPv6  **默认取值**：  不涉及
    * inheritId  **参数解释**：  继承的任务ID，Oracle到Kafka链路时使用。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * gtid  **参数解释**：  断点的GTID（Global Transaction Identifier）集合，用于记录增量同步的断点位置。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * alarmNotify  alarmNotify
    * increStartPosition  **参数解释**：  增量任务启动位点，标识增量同步起始的数据位置。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * isMultiAz  **参数解释**：  标识任务是否为跨可用区（AZ）部署的主备任务。  **约束限制**：  不涉及。  **取值范围**：  - true：跨AZ主备任务 - false：非跨AZ任务  **默认取值**：  不涉及
    * azName  **参数解释**：  迁移实例节点所在的可用区（AZ）名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * masterAz  **参数解释**：  主备任务中主实例所在的可用区（AZ）。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * slaveAz  **参数解释**：  主备任务中备实例所在的可用区（AZ）。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * nodeRole  **参数解释**：  任务主备角色，标识当前节点在主备任务中的角色。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * periodOrder  periodOrder
    * objectInfos  **参数解释**：  已同步对象信息列表，每个元素为DatabaseObjectInfo结构。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * originalJobDirection  **参数解释**：  任务创建时的初始方向，表示任务首次创建时配置的迁移方向，不会随灾备倒换而改变。  **约束限制**：  不涉及。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主 - non-dbs：自建  **默认取值**：  不涉及
    * dataTransformation  dataTransformation
    * tags  **参数解释**：  DRS任务标签列表，每个元素为Tag结构。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * publicIpList  **参数解释**：  指定公网IP的信息列表，每个元素为PublicIpConfig结构。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * bindPublicIpState  **参数解释**：  公网IP绑定状态，标识是否成功绑定公网IP。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * children  **参数解释**：  子任务绑定失败信息列表，多任务场景下存在子任务绑定公网IP失败时返回，每个元素为FailedToBindEipChildInfo结构。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * isOpenFastClean  **参数解释**：  是否开启云数据库RDS for MySQL或MariaDB的Binlog快速清理。  **约束限制**：  不涉及。  **取值范围**：  - true：开启Binlog快速清理 - false：不开启Binlog快速清理  **默认取值**：  不涉及
    * jobKernelDirection  **参数解释**：  灾备任务内核方向。非倒换中与job_direction取值相同，倒换中与job_direction取值相反。  **约束限制**：  不涉及。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主  **默认取值**：  不涉及
    * syncMode  **参数解释**：  同步任务的同步模式，指定数据同步的粒度级别。  **约束限制**：  不涉及。  **取值范围**：  - DB_LEVEL：库级同步 - SCHEMA_LEVEL：schema级同步 - TABLE_LEVEL：表级同步 - FILE_IMPORT：文件导入 - INSTANCE_LEVEL：实例级同步  **默认取值**：  不涉及
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
            'isOpenFastClean' => 'setIsOpenFastClean',
            'jobKernelDirection' => 'setJobKernelDirection',
            'syncMode' => 'setSyncMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**：  任务ID，用于唯一标识一个数据复制任务。  **约束限制**：  不涉及。  **取值范围**：  UUID格式字符串。  **默认取值**：  不涉及
    * parentId  **参数解释**：  父任务ID，多任务场景下子任务所归属的父任务标识。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * name  **参数解释**：  任务名称，用户创建任务时自定义的名称，用于区分和识别不同的数据复制任务。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * status  **参数解释**：  任务当前运行状态。  **约束限制**：  不涉及。  **取值范围**：  - CREATING：创建中 - CREATE_FAILED：创建失败 - CONFIGURATION：配置中 - STARTJOBING：启动中 - WAITING_FOR_START：等待启动中 - START_JOB_FAILED：启动失败 - PAUSING：已暂停 - FULL_TRANSFER_STARTED：全量开始，灾备场景下为初始化 - FULL_TRANSFER_FAILED：全量失败，灾备场景下为初始化失败 - FULL_TRANSFER_COMPLETE：全量完成，灾备场景下为初始化完成 - INCRE_TRANSFER_STARTED：增量开始，灾备场景下为灾备中 - INCRE_TRANSFER_FAILED：增量失败，灾备场景下为灾备异常 - RELEASE_RESOURCE_STARTED：结束任务中 - RELEASE_RESOURCE_FAILED：结束任务失败 - RELEASE_RESOURCE_COMPLETE：已结束 - REBUILD_NODE_STARTED：故障恢复中 - REBUILD_NODE_FAILED：故障恢复失败 - CHANGE_JOB_STARTED：任务变更中 - CHANGE_JOB_FAILED：任务变更失败 - DELETED：已删除 - CHILD_TRANSFER_STARTING：再编辑子任务启动中 - CHILD_TRANSFER_STARTED：再编辑子任务迁移中 - CHILD_TRANSFER_COMPLETE：再编辑子任务迁移完成 - CHILD_TRANSFER_FAILED：再编辑子任务迁移失败 - RELEASE_CHILD_TRANSFER_STARTED：再编辑子任务结束中 - RELEASE_CHILD_TRANSFER_COMPLETE：再编辑子任务已结束 - NODE_UPGRADE_START：升级开始 - NODE_UPGRADE_COMPLETE：升级完成 - NODE_UPGRADE_FAILED：升级失败  **默认取值**：  不涉及
    * description  **参数解释**：  任务描述信息，用户创建任务时自定义的备注说明。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * createTime  **参数解释**：  任务的创建时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * taskType  **参数解释**：  任务迁移模式，指定数据复制任务的执行方式。  **约束限制**：  不涉及。  **取值范围**：  - FULL_TRANS：全量迁移，仅迁移历史数据 - FULL_INCR_TRANS：全量+增量迁移，先迁移历史数据再持续同步增量 - INCR_TRANS：增量迁移，仅同步数据变更  **默认取值**：  不涉及
    * sourceEndpoint  sourceEndpoint
    * dmqEndpoint  dmqEndpoint
    * sourceSharding  **参数解释**：  物理分片源库信息列表，多对一场景下存在多个源库时返回，每个元素为Endpoint结构。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * targetEndpoint  targetEndpoint
    * netType  **参数解释**：  任务使用的网络类型。  **约束限制**：  不涉及。  **取值范围**：  - vpn：虚拟专用网络 - vpc：虚拟私有云 - eip：弹性公网IP  **默认取值**：  不涉及
    * failedReason  **参数解释**：  任务失败原因，任务状态为失败时返回该字段。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * instInfo  instInfo
    * actualStartTime  **参数解释**：  任务实际启动时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * fullTransferCompleteTime  **参数解释**：  全量迁移完成时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * updateTime  **参数解释**：  任务最近一次更新时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * jobDirection  **参数解释**：  任务的迁移方向。  **约束限制**：  不涉及。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主 - non-dbs：自建  **默认取值**：  不涉及
    * dbUseType  **参数解释**：  迁移任务的业务场景类型。  **约束限制**：  不涉及。  **取值范围**：  - migration：实时迁移 - sync：实时同步 - cloudDataGuard：实时灾备  **默认取值**：  不涉及
    * needRestart  **参数解释**：  任务配置变更后是否需要重启迁移实例才能生效。  **约束限制**：  不涉及。  **取值范围**：  - true：需要重启 - false：不需要重启  **默认取值**：  不涉及
    * isTargetReadonly  **参数解释**：  指定目标数据库实例在迁移过程中是否限制为只读状态。  **约束限制**：  不涉及。  **取值范围**：  - true：目标实例限制为只读 - false：目标实例不限制为只读  **默认取值**：  不涉及
    * conflictPolicy  **参数解释**：  数据迁移过程中的冲突忽略策略，指定当目标库已存在相同数据时的处理方式。  **约束限制**：  不涉及。  **取值范围**：  - stop：冲突失败，遇到冲突时停止任务 - overwrite：冲突覆盖，用源库数据覆盖目标库已有数据 - ignore：冲突忽略，跳过冲突数据继续迁移  **默认取值**：  不涉及
    * filterDdlPolicy  **参数解释**：  过滤DDL策略，指定迁移过程中需要过滤的DDL操作类型。  **约束限制**：  不涉及。  **取值范围**：  - drop_database：过滤drop_database操作 - drop_databasefilter_all：过滤所有DDL操作 - \"\"：不过滤  **默认取值**：  不涉及
    * speedLimit  **参数解释**：  迁移速度限制信息，详情请参见SpeedLimitInfo对象定义。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * schemaType  **参数解释**：  DRS任务的迁移方案，指定数据复制的底层实现方式。  **约束限制**：  不涉及。  **取值范围**：  - Replication：主从复制 - Tungsten：日志解析 - PGBaseBackup：PG备份  **默认取值**：  不涉及
    * nodeNum  **参数解释**：  迁移实例节点个数。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * objectSwitch  **参数解释**：  对象选择开关，标识是否已开启对象选择功能。  **约束限制**：  不涉及。  **取值范围**：  - true：开启对象选择 - false：关闭对象选择  **默认取值**：  不涉及
    * masterJobId  **参数解释**：  主任务ID，多任务场景下子任务所归属的主任务标识。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * fullMode  **参数解释**：  全量快照模式。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * structTrans  **参数解释**：  是否迁移结构。  **约束限制**：  不涉及。  **取值范围**：  - true：迁移结构 - false：不迁移结构  **默认取值**：  不涉及
    * indexTrans  **参数解释**：  是否迁移索引。  **约束限制**：  不涉及。  **取值范围**：  - true：迁移索引 - false：不迁移索引  **默认取值**：  不涉及
    * replaceDefiner  **参数解释**：  是否使用目标库的用户替换掉definer。  **约束限制**：  不涉及。  **取值范围**：  - true：使用目标库用户替换definer - false：不替换definer  **默认取值**：  不涉及
    * migrateUser  **参数解释**：  是否迁移用户。  **约束限制**：  不涉及。  **取值范围**：  - true：迁移用户 - false：不迁移用户  **默认取值**：  不涉及
    * syncDatabase  **参数解释**：  是否库级同步。  **约束限制**：  不涉及。  **取值范围**：  - true：库级同步 - false：非库级同步  **默认取值**：  不涉及
    * errorCode  **参数解释**：  错误码，当任务报错时返回的错误代码。  **约束限制**：  不涉及。  **取值范围**：  格式为DRS.XXXXXX。  **默认取值**：  不涉及
    * errorMessage  **参数解释**：  错误详细信息，当任务执行失败时返回的具体错误描述。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * targetRootDb  targetRootDb
    * azCode  **参数解释**：  迁移实例节点所在的可用区（AZ，Availability Zone）编码。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * vpcId  **参数解释**：  迁移实例节点所在的虚拟私有云（VPC，Virtual Private Cloud）ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * subnetId  **参数解释**：  迁移实例节点所在的子网ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * securityGroupId  **参数解释**：  迁移实例节点所在的安全组ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * multiWrite  **参数解释**：  是否多主灾备任务，双主灾备场景下该值为true。  **约束限制**：  不涉及。  **取值范围**：  - true：多主灾备任务 - false：非多主灾备任务  **默认取值**：  不涉及
    * supportIpV6  **参数解释**：  是否支持IPv6。  **约束限制**：  不涉及。  **取值范围**：  - true：支持IPv6 - false：不支持IPv6  **默认取值**：  不涉及
    * inheritId  **参数解释**：  继承的任务ID，Oracle到Kafka链路时使用。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * gtid  **参数解释**：  断点的GTID（Global Transaction Identifier）集合，用于记录增量同步的断点位置。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * alarmNotify  alarmNotify
    * increStartPosition  **参数解释**：  增量任务启动位点，标识增量同步起始的数据位置。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * isMultiAz  **参数解释**：  标识任务是否为跨可用区（AZ）部署的主备任务。  **约束限制**：  不涉及。  **取值范围**：  - true：跨AZ主备任务 - false：非跨AZ任务  **默认取值**：  不涉及
    * azName  **参数解释**：  迁移实例节点所在的可用区（AZ）名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * masterAz  **参数解释**：  主备任务中主实例所在的可用区（AZ）。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * slaveAz  **参数解释**：  主备任务中备实例所在的可用区（AZ）。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * nodeRole  **参数解释**：  任务主备角色，标识当前节点在主备任务中的角色。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * periodOrder  periodOrder
    * objectInfos  **参数解释**：  已同步对象信息列表，每个元素为DatabaseObjectInfo结构。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * originalJobDirection  **参数解释**：  任务创建时的初始方向，表示任务首次创建时配置的迁移方向，不会随灾备倒换而改变。  **约束限制**：  不涉及。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主 - non-dbs：自建  **默认取值**：  不涉及
    * dataTransformation  dataTransformation
    * tags  **参数解释**：  DRS任务标签列表，每个元素为Tag结构。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * publicIpList  **参数解释**：  指定公网IP的信息列表，每个元素为PublicIpConfig结构。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * bindPublicIpState  **参数解释**：  公网IP绑定状态，标识是否成功绑定公网IP。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * children  **参数解释**：  子任务绑定失败信息列表，多任务场景下存在子任务绑定公网IP失败时返回，每个元素为FailedToBindEipChildInfo结构。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * isOpenFastClean  **参数解释**：  是否开启云数据库RDS for MySQL或MariaDB的Binlog快速清理。  **约束限制**：  不涉及。  **取值范围**：  - true：开启Binlog快速清理 - false：不开启Binlog快速清理  **默认取值**：  不涉及
    * jobKernelDirection  **参数解释**：  灾备任务内核方向。非倒换中与job_direction取值相同，倒换中与job_direction取值相反。  **约束限制**：  不涉及。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主  **默认取值**：  不涉及
    * syncMode  **参数解释**：  同步任务的同步模式，指定数据同步的粒度级别。  **约束限制**：  不涉及。  **取值范围**：  - DB_LEVEL：库级同步 - SCHEMA_LEVEL：schema级同步 - TABLE_LEVEL：表级同步 - FILE_IMPORT：文件导入 - INSTANCE_LEVEL：实例级同步  **默认取值**：  不涉及
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
            'isOpenFastClean' => 'getIsOpenFastClean',
            'jobKernelDirection' => 'getJobKernelDirection',
            'syncMode' => 'getSyncMode'
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
    const JOB_KERNEL_DIRECTION_UP = 'up';
    const JOB_KERNEL_DIRECTION_DOWN = 'down';
    const SYNC_MODE_DB_LEVEL = 'DB_LEVEL';
    const SYNC_MODE_SCHEMA_LEVEL = 'SCHEMA_LEVEL';
    const SYNC_MODE_TABLE_LEVEL = 'TABLE_LEVEL';
    const SYNC_MODE_FILE_IMPORT = 'FILE_IMPORT';
    const SYNC_MODE_INSTANCE_LEVEL = 'INSTANCE_LEVEL';
    

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
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getJobKernelDirectionAllowableValues()
    {
        return [
            self::JOB_KERNEL_DIRECTION_UP,
            self::JOB_KERNEL_DIRECTION_DOWN,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSyncModeAllowableValues()
    {
        return [
            self::SYNC_MODE_DB_LEVEL,
            self::SYNC_MODE_SCHEMA_LEVEL,
            self::SYNC_MODE_TABLE_LEVEL,
            self::SYNC_MODE_FILE_IMPORT,
            self::SYNC_MODE_INSTANCE_LEVEL,
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
        $this->container['jobKernelDirection'] = isset($data['jobKernelDirection']) ? $data['jobKernelDirection'] : null;
        $this->container['syncMode'] = isset($data['syncMode']) ? $data['syncMode'] : null;
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

            $allowedValues = $this->getJobKernelDirectionAllowableValues();
                if (!is_null($this->container['jobKernelDirection']) && !in_array($this->container['jobKernelDirection'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'jobKernelDirection', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSyncModeAllowableValues();
                if (!is_null($this->container['syncMode']) && !in_array($this->container['syncMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'syncMode', must be one of '%s'",
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
    *  **参数解释**：  任务ID，用于唯一标识一个数据复制任务。  **约束限制**：  不涉及。  **取值范围**：  UUID格式字符串。  **默认取值**：  不涉及
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
    * @param string|null $id **参数解释**：  任务ID，用于唯一标识一个数据复制任务。  **约束限制**：  不涉及。  **取值范围**：  UUID格式字符串。  **默认取值**：  不涉及
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
    *  **参数解释**：  父任务ID，多任务场景下子任务所归属的父任务标识。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $parentId **参数解释**：  父任务ID，多任务场景下子任务所归属的父任务标识。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  任务名称，用户创建任务时自定义的名称，用于区分和识别不同的数据复制任务。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $name **参数解释**：  任务名称，用户创建任务时自定义的名称，用于区分和识别不同的数据复制任务。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  任务当前运行状态。  **约束限制**：  不涉及。  **取值范围**：  - CREATING：创建中 - CREATE_FAILED：创建失败 - CONFIGURATION：配置中 - STARTJOBING：启动中 - WAITING_FOR_START：等待启动中 - START_JOB_FAILED：启动失败 - PAUSING：已暂停 - FULL_TRANSFER_STARTED：全量开始，灾备场景下为初始化 - FULL_TRANSFER_FAILED：全量失败，灾备场景下为初始化失败 - FULL_TRANSFER_COMPLETE：全量完成，灾备场景下为初始化完成 - INCRE_TRANSFER_STARTED：增量开始，灾备场景下为灾备中 - INCRE_TRANSFER_FAILED：增量失败，灾备场景下为灾备异常 - RELEASE_RESOURCE_STARTED：结束任务中 - RELEASE_RESOURCE_FAILED：结束任务失败 - RELEASE_RESOURCE_COMPLETE：已结束 - REBUILD_NODE_STARTED：故障恢复中 - REBUILD_NODE_FAILED：故障恢复失败 - CHANGE_JOB_STARTED：任务变更中 - CHANGE_JOB_FAILED：任务变更失败 - DELETED：已删除 - CHILD_TRANSFER_STARTING：再编辑子任务启动中 - CHILD_TRANSFER_STARTED：再编辑子任务迁移中 - CHILD_TRANSFER_COMPLETE：再编辑子任务迁移完成 - CHILD_TRANSFER_FAILED：再编辑子任务迁移失败 - RELEASE_CHILD_TRANSFER_STARTED：再编辑子任务结束中 - RELEASE_CHILD_TRANSFER_COMPLETE：再编辑子任务已结束 - NODE_UPGRADE_START：升级开始 - NODE_UPGRADE_COMPLETE：升级完成 - NODE_UPGRADE_FAILED：升级失败  **默认取值**：  不涉及
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
    * @param string|null $status **参数解释**：  任务当前运行状态。  **约束限制**：  不涉及。  **取值范围**：  - CREATING：创建中 - CREATE_FAILED：创建失败 - CONFIGURATION：配置中 - STARTJOBING：启动中 - WAITING_FOR_START：等待启动中 - START_JOB_FAILED：启动失败 - PAUSING：已暂停 - FULL_TRANSFER_STARTED：全量开始，灾备场景下为初始化 - FULL_TRANSFER_FAILED：全量失败，灾备场景下为初始化失败 - FULL_TRANSFER_COMPLETE：全量完成，灾备场景下为初始化完成 - INCRE_TRANSFER_STARTED：增量开始，灾备场景下为灾备中 - INCRE_TRANSFER_FAILED：增量失败，灾备场景下为灾备异常 - RELEASE_RESOURCE_STARTED：结束任务中 - RELEASE_RESOURCE_FAILED：结束任务失败 - RELEASE_RESOURCE_COMPLETE：已结束 - REBUILD_NODE_STARTED：故障恢复中 - REBUILD_NODE_FAILED：故障恢复失败 - CHANGE_JOB_STARTED：任务变更中 - CHANGE_JOB_FAILED：任务变更失败 - DELETED：已删除 - CHILD_TRANSFER_STARTING：再编辑子任务启动中 - CHILD_TRANSFER_STARTED：再编辑子任务迁移中 - CHILD_TRANSFER_COMPLETE：再编辑子任务迁移完成 - CHILD_TRANSFER_FAILED：再编辑子任务迁移失败 - RELEASE_CHILD_TRANSFER_STARTED：再编辑子任务结束中 - RELEASE_CHILD_TRANSFER_COMPLETE：再编辑子任务已结束 - NODE_UPGRADE_START：升级开始 - NODE_UPGRADE_COMPLETE：升级完成 - NODE_UPGRADE_FAILED：升级失败  **默认取值**：  不涉及
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
    *  **参数解释**：  任务描述信息，用户创建任务时自定义的备注说明。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $description **参数解释**：  任务描述信息，用户创建任务时自定义的备注说明。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  任务的创建时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $createTime **参数解释**：  任务的创建时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  任务迁移模式，指定数据复制任务的执行方式。  **约束限制**：  不涉及。  **取值范围**：  - FULL_TRANS：全量迁移，仅迁移历史数据 - FULL_INCR_TRANS：全量+增量迁移，先迁移历史数据再持续同步增量 - INCR_TRANS：增量迁移，仅同步数据变更  **默认取值**：  不涉及
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
    * @param string|null $taskType **参数解释**：  任务迁移模式，指定数据复制任务的执行方式。  **约束限制**：  不涉及。  **取值范围**：  - FULL_TRANS：全量迁移，仅迁移历史数据 - FULL_INCR_TRANS：全量+增量迁移，先迁移历史数据再持续同步增量 - INCR_TRANS：增量迁移，仅同步数据变更  **默认取值**：  不涉及
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
    *  **参数解释**：  物理分片源库信息列表，多对一场景下存在多个源库时返回，每个元素为Endpoint结构。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param \HuaweiCloud\SDK\Drs\V3\Model\Endpoint[]|null $sourceSharding **参数解释**：  物理分片源库信息列表，多对一场景下存在多个源库时返回，每个元素为Endpoint结构。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  任务使用的网络类型。  **约束限制**：  不涉及。  **取值范围**：  - vpn：虚拟专用网络 - vpc：虚拟私有云 - eip：弹性公网IP  **默认取值**：  不涉及
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
    * @param string|null $netType **参数解释**：  任务使用的网络类型。  **约束限制**：  不涉及。  **取值范围**：  - vpn：虚拟专用网络 - vpc：虚拟私有云 - eip：弹性公网IP  **默认取值**：  不涉及
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
    *  **参数解释**：  任务失败原因，任务状态为失败时返回该字段。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $failedReason **参数解释**：  任务失败原因，任务状态为失败时返回该字段。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  任务实际启动时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $actualStartTime **参数解释**：  任务实际启动时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  全量迁移完成时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $fullTransferCompleteTime **参数解释**：  全量迁移完成时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  任务最近一次更新时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $updateTime **参数解释**：  任务最近一次更新时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  任务的迁移方向。  **约束限制**：  不涉及。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主 - non-dbs：自建  **默认取值**：  不涉及
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
    * @param string|null $jobDirection **参数解释**：  任务的迁移方向。  **约束限制**：  不涉及。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主 - non-dbs：自建  **默认取值**：  不涉及
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
    *  **参数解释**：  迁移任务的业务场景类型。  **约束限制**：  不涉及。  **取值范围**：  - migration：实时迁移 - sync：实时同步 - cloudDataGuard：实时灾备  **默认取值**：  不涉及
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
    * @param string|null $dbUseType **参数解释**：  迁移任务的业务场景类型。  **约束限制**：  不涉及。  **取值范围**：  - migration：实时迁移 - sync：实时同步 - cloudDataGuard：实时灾备  **默认取值**：  不涉及
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
    *  **参数解释**：  任务配置变更后是否需要重启迁移实例才能生效。  **约束限制**：  不涉及。  **取值范围**：  - true：需要重启 - false：不需要重启  **默认取值**：  不涉及
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
    * @param bool|null $needRestart **参数解释**：  任务配置变更后是否需要重启迁移实例才能生效。  **约束限制**：  不涉及。  **取值范围**：  - true：需要重启 - false：不需要重启  **默认取值**：  不涉及
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
    *  **参数解释**：  指定目标数据库实例在迁移过程中是否限制为只读状态。  **约束限制**：  不涉及。  **取值范围**：  - true：目标实例限制为只读 - false：目标实例不限制为只读  **默认取值**：  不涉及
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
    * @param bool|null $isTargetReadonly **参数解释**：  指定目标数据库实例在迁移过程中是否限制为只读状态。  **约束限制**：  不涉及。  **取值范围**：  - true：目标实例限制为只读 - false：目标实例不限制为只读  **默认取值**：  不涉及
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
    *  **参数解释**：  数据迁移过程中的冲突忽略策略，指定当目标库已存在相同数据时的处理方式。  **约束限制**：  不涉及。  **取值范围**：  - stop：冲突失败，遇到冲突时停止任务 - overwrite：冲突覆盖，用源库数据覆盖目标库已有数据 - ignore：冲突忽略，跳过冲突数据继续迁移  **默认取值**：  不涉及
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
    * @param string|null $conflictPolicy **参数解释**：  数据迁移过程中的冲突忽略策略，指定当目标库已存在相同数据时的处理方式。  **约束限制**：  不涉及。  **取值范围**：  - stop：冲突失败，遇到冲突时停止任务 - overwrite：冲突覆盖，用源库数据覆盖目标库已有数据 - ignore：冲突忽略，跳过冲突数据继续迁移  **默认取值**：  不涉及
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
    *  **参数解释**：  过滤DDL策略，指定迁移过程中需要过滤的DDL操作类型。  **约束限制**：  不涉及。  **取值范围**：  - drop_database：过滤drop_database操作 - drop_databasefilter_all：过滤所有DDL操作 - \"\"：不过滤  **默认取值**：  不涉及
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
    * @param string|null $filterDdlPolicy **参数解释**：  过滤DDL策略，指定迁移过程中需要过滤的DDL操作类型。  **约束限制**：  不涉及。  **取值范围**：  - drop_database：过滤drop_database操作 - drop_databasefilter_all：过滤所有DDL操作 - \"\"：不过滤  **默认取值**：  不涉及
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
    *  **参数解释**：  迁移速度限制信息，详情请参见SpeedLimitInfo对象定义。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param \HuaweiCloud\SDK\Drs\V3\Model\SpeedLimitInfo[]|null $speedLimit **参数解释**：  迁移速度限制信息，详情请参见SpeedLimitInfo对象定义。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  DRS任务的迁移方案，指定数据复制的底层实现方式。  **约束限制**：  不涉及。  **取值范围**：  - Replication：主从复制 - Tungsten：日志解析 - PGBaseBackup：PG备份  **默认取值**：  不涉及
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
    * @param string|null $schemaType **参数解释**：  DRS任务的迁移方案，指定数据复制的底层实现方式。  **约束限制**：  不涉及。  **取值范围**：  - Replication：主从复制 - Tungsten：日志解析 - PGBaseBackup：PG备份  **默认取值**：  不涉及
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
    *  **参数解释**：  迁移实例节点个数。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param int|null $nodeNum **参数解释**：  迁移实例节点个数。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  对象选择开关，标识是否已开启对象选择功能。  **约束限制**：  不涉及。  **取值范围**：  - true：开启对象选择 - false：关闭对象选择  **默认取值**：  不涉及
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
    * @param bool|null $objectSwitch **参数解释**：  对象选择开关，标识是否已开启对象选择功能。  **约束限制**：  不涉及。  **取值范围**：  - true：开启对象选择 - false：关闭对象选择  **默认取值**：  不涉及
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
    *  **参数解释**：  主任务ID，多任务场景下子任务所归属的主任务标识。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $masterJobId **参数解释**：  主任务ID，多任务场景下子任务所归属的主任务标识。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  全量快照模式。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $fullMode **参数解释**：  全量快照模式。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  是否迁移结构。  **约束限制**：  不涉及。  **取值范围**：  - true：迁移结构 - false：不迁移结构  **默认取值**：  不涉及
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
    * @param bool|null $structTrans **参数解释**：  是否迁移结构。  **约束限制**：  不涉及。  **取值范围**：  - true：迁移结构 - false：不迁移结构  **默认取值**：  不涉及
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
    *  **参数解释**：  是否迁移索引。  **约束限制**：  不涉及。  **取值范围**：  - true：迁移索引 - false：不迁移索引  **默认取值**：  不涉及
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
    * @param bool|null $indexTrans **参数解释**：  是否迁移索引。  **约束限制**：  不涉及。  **取值范围**：  - true：迁移索引 - false：不迁移索引  **默认取值**：  不涉及
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
    *  **参数解释**：  是否使用目标库的用户替换掉definer。  **约束限制**：  不涉及。  **取值范围**：  - true：使用目标库用户替换definer - false：不替换definer  **默认取值**：  不涉及
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
    * @param bool|null $replaceDefiner **参数解释**：  是否使用目标库的用户替换掉definer。  **约束限制**：  不涉及。  **取值范围**：  - true：使用目标库用户替换definer - false：不替换definer  **默认取值**：  不涉及
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
    *  **参数解释**：  是否迁移用户。  **约束限制**：  不涉及。  **取值范围**：  - true：迁移用户 - false：不迁移用户  **默认取值**：  不涉及
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
    * @param bool|null $migrateUser **参数解释**：  是否迁移用户。  **约束限制**：  不涉及。  **取值范围**：  - true：迁移用户 - false：不迁移用户  **默认取值**：  不涉及
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
    *  **参数解释**：  是否库级同步。  **约束限制**：  不涉及。  **取值范围**：  - true：库级同步 - false：非库级同步  **默认取值**：  不涉及
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
    * @param bool|null $syncDatabase **参数解释**：  是否库级同步。  **约束限制**：  不涉及。  **取值范围**：  - true：库级同步 - false：非库级同步  **默认取值**：  不涉及
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
    *  **参数解释**：  错误码，当任务报错时返回的错误代码。  **约束限制**：  不涉及。  **取值范围**：  格式为DRS.XXXXXX。  **默认取值**：  不涉及
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
    * @param string|null $errorCode **参数解释**：  错误码，当任务报错时返回的错误代码。  **约束限制**：  不涉及。  **取值范围**：  格式为DRS.XXXXXX。  **默认取值**：  不涉及
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
    *  **参数解释**：  错误详细信息，当任务执行失败时返回的具体错误描述。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $errorMessage **参数解释**：  错误详细信息，当任务执行失败时返回的具体错误描述。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  迁移实例节点所在的可用区（AZ，Availability Zone）编码。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $azCode **参数解释**：  迁移实例节点所在的可用区（AZ，Availability Zone）编码。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  迁移实例节点所在的虚拟私有云（VPC，Virtual Private Cloud）ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $vpcId **参数解释**：  迁移实例节点所在的虚拟私有云（VPC，Virtual Private Cloud）ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  迁移实例节点所在的子网ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $subnetId **参数解释**：  迁移实例节点所在的子网ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  迁移实例节点所在的安全组ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $securityGroupId **参数解释**：  迁移实例节点所在的安全组ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  是否多主灾备任务，双主灾备场景下该值为true。  **约束限制**：  不涉及。  **取值范围**：  - true：多主灾备任务 - false：非多主灾备任务  **默认取值**：  不涉及
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
    * @param bool|null $multiWrite **参数解释**：  是否多主灾备任务，双主灾备场景下该值为true。  **约束限制**：  不涉及。  **取值范围**：  - true：多主灾备任务 - false：非多主灾备任务  **默认取值**：  不涉及
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
    *  **参数解释**：  是否支持IPv6。  **约束限制**：  不涉及。  **取值范围**：  - true：支持IPv6 - false：不支持IPv6  **默认取值**：  不涉及
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
    * @param bool|null $supportIpV6 **参数解释**：  是否支持IPv6。  **约束限制**：  不涉及。  **取值范围**：  - true：支持IPv6 - false：不支持IPv6  **默认取值**：  不涉及
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
    *  **参数解释**：  继承的任务ID，Oracle到Kafka链路时使用。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $inheritId **参数解释**：  继承的任务ID，Oracle到Kafka链路时使用。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  断点的GTID（Global Transaction Identifier）集合，用于记录增量同步的断点位置。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $gtid **参数解释**：  断点的GTID（Global Transaction Identifier）集合，用于记录增量同步的断点位置。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  增量任务启动位点，标识增量同步起始的数据位置。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $increStartPosition **参数解释**：  增量任务启动位点，标识增量同步起始的数据位置。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  标识任务是否为跨可用区（AZ）部署的主备任务。  **约束限制**：  不涉及。  **取值范围**：  - true：跨AZ主备任务 - false：非跨AZ任务  **默认取值**：  不涉及
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
    * @param bool|null $isMultiAz **参数解释**：  标识任务是否为跨可用区（AZ）部署的主备任务。  **约束限制**：  不涉及。  **取值范围**：  - true：跨AZ主备任务 - false：非跨AZ任务  **默认取值**：  不涉及
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
    *  **参数解释**：  迁移实例节点所在的可用区（AZ）名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $azName **参数解释**：  迁移实例节点所在的可用区（AZ）名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  主备任务中主实例所在的可用区（AZ）。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $masterAz **参数解释**：  主备任务中主实例所在的可用区（AZ）。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  主备任务中备实例所在的可用区（AZ）。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $slaveAz **参数解释**：  主备任务中备实例所在的可用区（AZ）。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  任务主备角色，标识当前节点在主备任务中的角色。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $nodeRole **参数解释**：  任务主备角色，标识当前节点在主备任务中的角色。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  已同步对象信息列表，每个元素为DatabaseObjectInfo结构。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param \HuaweiCloud\SDK\Drs\V3\Model\DatabaseObjectInfo[]|null $objectInfos **参数解释**：  已同步对象信息列表，每个元素为DatabaseObjectInfo结构。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  任务创建时的初始方向，表示任务首次创建时配置的迁移方向，不会随灾备倒换而改变。  **约束限制**：  不涉及。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主 - non-dbs：自建  **默认取值**：  不涉及
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
    * @param string|null $originalJobDirection **参数解释**：  任务创建时的初始方向，表示任务首次创建时配置的迁移方向，不会随灾备倒换而改变。  **约束限制**：  不涉及。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主 - non-dbs：自建  **默认取值**：  不涉及
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
    *  **参数解释**：  DRS任务标签列表，每个元素为Tag结构。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param \HuaweiCloud\SDK\Drs\V3\Model\Tag[]|null $tags **参数解释**：  DRS任务标签列表，每个元素为Tag结构。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  指定公网IP的信息列表，每个元素为PublicIpConfig结构。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param \HuaweiCloud\SDK\Drs\V3\Model\PublicIpConfig[]|null $publicIpList **参数解释**：  指定公网IP的信息列表，每个元素为PublicIpConfig结构。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  公网IP绑定状态，标识是否成功绑定公网IP。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $bindPublicIpState **参数解释**：  公网IP绑定状态，标识是否成功绑定公网IP。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  子任务绑定失败信息列表，多任务场景下存在子任务绑定公网IP失败时返回，每个元素为FailedToBindEipChildInfo结构。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param \HuaweiCloud\SDK\Drs\V3\Model\FailedToBindEipChildInfo[]|null $children **参数解释**：  子任务绑定失败信息列表，多任务场景下存在子任务绑定公网IP失败时返回，每个元素为FailedToBindEipChildInfo结构。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  是否开启云数据库RDS for MySQL或MariaDB的Binlog快速清理。  **约束限制**：  不涉及。  **取值范围**：  - true：开启Binlog快速清理 - false：不开启Binlog快速清理  **默认取值**：  不涉及
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
    * @param bool|null $isOpenFastClean **参数解释**：  是否开启云数据库RDS for MySQL或MariaDB的Binlog快速清理。  **约束限制**：  不涉及。  **取值范围**：  - true：开启Binlog快速清理 - false：不开启Binlog快速清理  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setIsOpenFastClean($isOpenFastClean)
    {
        $this->container['isOpenFastClean'] = $isOpenFastClean;
        return $this;
    }

    /**
    * Gets jobKernelDirection
    *  **参数解释**：  灾备任务内核方向。非倒换中与job_direction取值相同，倒换中与job_direction取值相反。  **约束限制**：  不涉及。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主  **默认取值**：  不涉及
    *
    * @return string|null
    */
    public function getJobKernelDirection()
    {
        return $this->container['jobKernelDirection'];
    }

    /**
    * Sets jobKernelDirection
    *
    * @param string|null $jobKernelDirection **参数解释**：  灾备任务内核方向。非倒换中与job_direction取值相同，倒换中与job_direction取值相反。  **约束限制**：  不涉及。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setJobKernelDirection($jobKernelDirection)
    {
        $this->container['jobKernelDirection'] = $jobKernelDirection;
        return $this;
    }

    /**
    * Gets syncMode
    *  **参数解释**：  同步任务的同步模式，指定数据同步的粒度级别。  **约束限制**：  不涉及。  **取值范围**：  - DB_LEVEL：库级同步 - SCHEMA_LEVEL：schema级同步 - TABLE_LEVEL：表级同步 - FILE_IMPORT：文件导入 - INSTANCE_LEVEL：实例级同步  **默认取值**：  不涉及
    *
    * @return string|null
    */
    public function getSyncMode()
    {
        return $this->container['syncMode'];
    }

    /**
    * Sets syncMode
    *
    * @param string|null $syncMode **参数解释**：  同步任务的同步模式，指定数据同步的粒度级别。  **约束限制**：  不涉及。  **取值范围**：  - DB_LEVEL：库级同步 - SCHEMA_LEVEL：schema级同步 - TABLE_LEVEL：表级同步 - FILE_IMPORT：文件导入 - INSTANCE_LEVEL：实例级同步  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setSyncMode($syncMode)
    {
        $this->container['syncMode'] = $syncMode;
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

