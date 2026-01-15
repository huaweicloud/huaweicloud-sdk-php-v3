<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobDetailResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobDetailResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  任务ID。
    * status  任务状态。 - CREATING：创建中 - CREATE_FAILED：创建失败 - CONFIGURATION：配置中 - STARTJOBING：启动中 - WAITING_FOR_START：等待启动中 - START_JOB_FAILED：启动失败 - PAUSING：已暂停 - FULL_TRANSFER_STARTED：全量开始，灾备场景下为初始化 - FULL_TRANSFER_FAILED：全量失败，灾备场景下为初始化失败 - FULL_TRANSFER_COMPLETE：全量完成，灾备场景下为初始化完成 - INCRE_TRANSFER_STARTED：增量开始，灾备场景下为灾备中 - INCRE_TRANSFER_FAILED：增量失败，灾备场景下为灾备异常 - RELEASE_RESOURCE_STARTED：结束任务中 - RELEASE_RESOURCE_FAILED：结束任务失败 - RELEASE_RESOURCE_COMPLETE：已结束 - REBUILD_NODE_STARTED：故障恢复中 - REBUILD_NODE_FAILED：故障恢复失败 - CHANGE_JOB_STARTED：任务变更中 - CHANGE_JOB_FAILED：任务变更失败 - DELETED：已删除 - CHILD_TRANSFER_STARTING：再编辑子任务启动中 - CHILD_TRANSFER_STARTED：再编辑子任务迁移中 - CHILD_TRANSFER_COMPLETE：再编辑子任务迁移完成 - CHILD_TRANSFER_FAILED：再编辑子任务迁移失败 - RELEASE_CHILD_TRANSFER_STARTED：再编辑子任务结束中 - RELEASE_CHILD_TRANSFER_COMPLETE：再编辑子任务已结束 - NODE_UPGRADE_START：升级开始 - NODE_UPGRADE_COMPLETE：升级完成 - NODE_UPGRADE_FAILED：升级失败
    * createTime  任务创建时间。
    * totalCount  列表中的项目总数，与分页无关。
    * masterJobId  多任务主节点的任务ID。
    * baseInfo  baseInfo
    * sourceEndpoint  任务源数据库信息体。
    * targetEndpoint  任务目标数据库信息体。
    * alarmNotify  alarmNotify
    * speedLimit  限速信息体。 - 限速：自定义的最大迁移速度，迁移过程中的迁移速度将不会超过该速度。  - 不限速：对迁移速度不进行限制，通常会最大化使用源数据库的出口带宽。该流速模式同时会对源数据库造成读消耗，消耗取决于源数据库的出口带宽。比如：源数据库的出口带宽为100MB/s，假设高速模式使用了80%带宽，则迁移对源数据库将造成80MB/s的读操作IO消耗。
    * userMigration  userMigration
    * policyConfig  policyConfig
    * dbParam  dbParam
    * tuningParams  tuningParams
    * periodOrder  periodOrder
    * nodeInfo  nodeInfo
    * logs  日志查询结果信息体。
    * networkResults  网络打通测试结果信息体。
    * precheckResult  precheckResult
    * progressInfo  progressInfo
    * migrationObjectProgressInfo  migrationObjectProgressInfo
    * metrics  metrics
    * compareResult  compareResult
    * supportImportFileResp  supportImportFileResp
    * instanceFeatures  由开关和版本共同控制的任务级别的功能列表。
    * taskVersion  任务版本。
    * connectionManagement  connectionManagement
    * publicIpList  指定公网IP的信息
    * bindPublicIpState  是否成功绑定公网IP 取值：SUCCESS，FAILED
    * children  多任务时，存在子任务绑定失败时，返回子任务的信息
    * isWritable  解除目标库只读操作后，目标库解除只读是否成功。 - pending：目标库解除操作进行中。 - success：目标库解除只读操作成功。
    * diagnoses  一键诊断结果。
    * repairProgressInfo  repairProgressInfo
    * repairDetailInfo  repairDetailInfo
    * repairExportStatus  修复SQL导出状态。 INIT：初始状态，EXPORTING：比对结果导出中，EXPORT_COMPLETE：比对结果导出完成，EXPORT_COMMON_FAILED：比对结果导出失败
    * jobKernelDirection  灾备任务内核方向，up上云，down下云。当任务处于倒换中，与灾备任务方向相反，否则相同。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'status' => 'string',
            'createTime' => 'string',
            'totalCount' => 'int',
            'masterJobId' => 'string',
            'baseInfo' => '\HuaweiCloud\SDK\Drs\V5\Model\JobBaseInfo',
            'sourceEndpoint' => '\HuaweiCloud\SDK\Drs\V5\Model\JobEndpointInfo[]',
            'targetEndpoint' => '\HuaweiCloud\SDK\Drs\V5\Model\JobEndpointInfo[]',
            'alarmNotify' => '\HuaweiCloud\SDK\Drs\V5\Model\AlarmNotifyConfig',
            'speedLimit' => '\HuaweiCloud\SDK\Drs\V5\Model\SpeedLimitInfo[]',
            'userMigration' => '\HuaweiCloud\SDK\Drs\V5\Model\UserMigrationInfo',
            'policyConfig' => '\HuaweiCloud\SDK\Drs\V5\Model\PolicyConfig',
            'dbParam' => '\HuaweiCloud\SDK\Drs\V5\Model\DbParamInfo',
            'tuningParams' => '\HuaweiCloud\SDK\Drs\V5\Model\TuningParamInfo',
            'periodOrder' => '\HuaweiCloud\SDK\Drs\V5\Model\PeriodOrderInfo',
            'nodeInfo' => '\HuaweiCloud\SDK\Drs\V5\Model\JobNodeInfo',
            'logs' => '\HuaweiCloud\SDK\Drs\V5\Model\TaskLogInfo[]',
            'networkResults' => '\HuaweiCloud\SDK\Drs\V5\Model\QueryNetworkResult[]',
            'precheckResult' => '\HuaweiCloud\SDK\Drs\V5\Model\QueryPreCheckResult',
            'progressInfo' => '\HuaweiCloud\SDK\Drs\V5\Model\JobProgressInfo',
            'migrationObjectProgressInfo' => '\HuaweiCloud\SDK\Drs\V5\Model\QueryMigrationObjectProgressInfo',
            'metrics' => '\HuaweiCloud\SDK\Drs\V5\Model\QueryMetricResult',
            'compareResult' => '\HuaweiCloud\SDK\Drs\V5\Model\CompareResultInfo',
            'supportImportFileResp' => '\HuaweiCloud\SDK\Drs\V5\Model\SupportImportFileResult',
            'instanceFeatures' => 'map[string,string]',
            'taskVersion' => 'string',
            'connectionManagement' => '\HuaweiCloud\SDK\Drs\V5\Model\ConnectionManagement',
            'publicIpList' => '\HuaweiCloud\SDK\Drs\V5\Model\PublicIpConfig[]',
            'bindPublicIpState' => 'string',
            'children' => '\HuaweiCloud\SDK\Drs\V5\Model\FailedToBindEipChildInfo[]',
            'isWritable' => 'string',
            'diagnoses' => '\HuaweiCloud\SDK\Drs\V5\Model\QueryDiagnosisResult[]',
            'repairProgressInfo' => '\HuaweiCloud\SDK\Drs\V5\Model\JobDetailRespRepairProgressInfo',
            'repairDetailInfo' => '\HuaweiCloud\SDK\Drs\V5\Model\QueryRepairDetailResp',
            'repairExportStatus' => 'string',
            'jobKernelDirection' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  任务ID。
    * status  任务状态。 - CREATING：创建中 - CREATE_FAILED：创建失败 - CONFIGURATION：配置中 - STARTJOBING：启动中 - WAITING_FOR_START：等待启动中 - START_JOB_FAILED：启动失败 - PAUSING：已暂停 - FULL_TRANSFER_STARTED：全量开始，灾备场景下为初始化 - FULL_TRANSFER_FAILED：全量失败，灾备场景下为初始化失败 - FULL_TRANSFER_COMPLETE：全量完成，灾备场景下为初始化完成 - INCRE_TRANSFER_STARTED：增量开始，灾备场景下为灾备中 - INCRE_TRANSFER_FAILED：增量失败，灾备场景下为灾备异常 - RELEASE_RESOURCE_STARTED：结束任务中 - RELEASE_RESOURCE_FAILED：结束任务失败 - RELEASE_RESOURCE_COMPLETE：已结束 - REBUILD_NODE_STARTED：故障恢复中 - REBUILD_NODE_FAILED：故障恢复失败 - CHANGE_JOB_STARTED：任务变更中 - CHANGE_JOB_FAILED：任务变更失败 - DELETED：已删除 - CHILD_TRANSFER_STARTING：再编辑子任务启动中 - CHILD_TRANSFER_STARTED：再编辑子任务迁移中 - CHILD_TRANSFER_COMPLETE：再编辑子任务迁移完成 - CHILD_TRANSFER_FAILED：再编辑子任务迁移失败 - RELEASE_CHILD_TRANSFER_STARTED：再编辑子任务结束中 - RELEASE_CHILD_TRANSFER_COMPLETE：再编辑子任务已结束 - NODE_UPGRADE_START：升级开始 - NODE_UPGRADE_COMPLETE：升级完成 - NODE_UPGRADE_FAILED：升级失败
    * createTime  任务创建时间。
    * totalCount  列表中的项目总数，与分页无关。
    * masterJobId  多任务主节点的任务ID。
    * baseInfo  baseInfo
    * sourceEndpoint  任务源数据库信息体。
    * targetEndpoint  任务目标数据库信息体。
    * alarmNotify  alarmNotify
    * speedLimit  限速信息体。 - 限速：自定义的最大迁移速度，迁移过程中的迁移速度将不会超过该速度。  - 不限速：对迁移速度不进行限制，通常会最大化使用源数据库的出口带宽。该流速模式同时会对源数据库造成读消耗，消耗取决于源数据库的出口带宽。比如：源数据库的出口带宽为100MB/s，假设高速模式使用了80%带宽，则迁移对源数据库将造成80MB/s的读操作IO消耗。
    * userMigration  userMigration
    * policyConfig  policyConfig
    * dbParam  dbParam
    * tuningParams  tuningParams
    * periodOrder  periodOrder
    * nodeInfo  nodeInfo
    * logs  日志查询结果信息体。
    * networkResults  网络打通测试结果信息体。
    * precheckResult  precheckResult
    * progressInfo  progressInfo
    * migrationObjectProgressInfo  migrationObjectProgressInfo
    * metrics  metrics
    * compareResult  compareResult
    * supportImportFileResp  supportImportFileResp
    * instanceFeatures  由开关和版本共同控制的任务级别的功能列表。
    * taskVersion  任务版本。
    * connectionManagement  connectionManagement
    * publicIpList  指定公网IP的信息
    * bindPublicIpState  是否成功绑定公网IP 取值：SUCCESS，FAILED
    * children  多任务时，存在子任务绑定失败时，返回子任务的信息
    * isWritable  解除目标库只读操作后，目标库解除只读是否成功。 - pending：目标库解除操作进行中。 - success：目标库解除只读操作成功。
    * diagnoses  一键诊断结果。
    * repairProgressInfo  repairProgressInfo
    * repairDetailInfo  repairDetailInfo
    * repairExportStatus  修复SQL导出状态。 INIT：初始状态，EXPORTING：比对结果导出中，EXPORT_COMPLETE：比对结果导出完成，EXPORT_COMMON_FAILED：比对结果导出失败
    * jobKernelDirection  灾备任务内核方向，up上云，down下云。当任务处于倒换中，与灾备任务方向相反，否则相同。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'status' => null,
        'createTime' => null,
        'totalCount' => 'int32',
        'masterJobId' => null,
        'baseInfo' => null,
        'sourceEndpoint' => null,
        'targetEndpoint' => null,
        'alarmNotify' => null,
        'speedLimit' => null,
        'userMigration' => null,
        'policyConfig' => null,
        'dbParam' => null,
        'tuningParams' => null,
        'periodOrder' => null,
        'nodeInfo' => null,
        'logs' => null,
        'networkResults' => null,
        'precheckResult' => null,
        'progressInfo' => null,
        'migrationObjectProgressInfo' => null,
        'metrics' => null,
        'compareResult' => null,
        'supportImportFileResp' => null,
        'instanceFeatures' => null,
        'taskVersion' => null,
        'connectionManagement' => null,
        'publicIpList' => null,
        'bindPublicIpState' => null,
        'children' => null,
        'isWritable' => null,
        'diagnoses' => null,
        'repairProgressInfo' => null,
        'repairDetailInfo' => null,
        'repairExportStatus' => null,
        'jobKernelDirection' => null
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
    * id  任务ID。
    * status  任务状态。 - CREATING：创建中 - CREATE_FAILED：创建失败 - CONFIGURATION：配置中 - STARTJOBING：启动中 - WAITING_FOR_START：等待启动中 - START_JOB_FAILED：启动失败 - PAUSING：已暂停 - FULL_TRANSFER_STARTED：全量开始，灾备场景下为初始化 - FULL_TRANSFER_FAILED：全量失败，灾备场景下为初始化失败 - FULL_TRANSFER_COMPLETE：全量完成，灾备场景下为初始化完成 - INCRE_TRANSFER_STARTED：增量开始，灾备场景下为灾备中 - INCRE_TRANSFER_FAILED：增量失败，灾备场景下为灾备异常 - RELEASE_RESOURCE_STARTED：结束任务中 - RELEASE_RESOURCE_FAILED：结束任务失败 - RELEASE_RESOURCE_COMPLETE：已结束 - REBUILD_NODE_STARTED：故障恢复中 - REBUILD_NODE_FAILED：故障恢复失败 - CHANGE_JOB_STARTED：任务变更中 - CHANGE_JOB_FAILED：任务变更失败 - DELETED：已删除 - CHILD_TRANSFER_STARTING：再编辑子任务启动中 - CHILD_TRANSFER_STARTED：再编辑子任务迁移中 - CHILD_TRANSFER_COMPLETE：再编辑子任务迁移完成 - CHILD_TRANSFER_FAILED：再编辑子任务迁移失败 - RELEASE_CHILD_TRANSFER_STARTED：再编辑子任务结束中 - RELEASE_CHILD_TRANSFER_COMPLETE：再编辑子任务已结束 - NODE_UPGRADE_START：升级开始 - NODE_UPGRADE_COMPLETE：升级完成 - NODE_UPGRADE_FAILED：升级失败
    * createTime  任务创建时间。
    * totalCount  列表中的项目总数，与分页无关。
    * masterJobId  多任务主节点的任务ID。
    * baseInfo  baseInfo
    * sourceEndpoint  任务源数据库信息体。
    * targetEndpoint  任务目标数据库信息体。
    * alarmNotify  alarmNotify
    * speedLimit  限速信息体。 - 限速：自定义的最大迁移速度，迁移过程中的迁移速度将不会超过该速度。  - 不限速：对迁移速度不进行限制，通常会最大化使用源数据库的出口带宽。该流速模式同时会对源数据库造成读消耗，消耗取决于源数据库的出口带宽。比如：源数据库的出口带宽为100MB/s，假设高速模式使用了80%带宽，则迁移对源数据库将造成80MB/s的读操作IO消耗。
    * userMigration  userMigration
    * policyConfig  policyConfig
    * dbParam  dbParam
    * tuningParams  tuningParams
    * periodOrder  periodOrder
    * nodeInfo  nodeInfo
    * logs  日志查询结果信息体。
    * networkResults  网络打通测试结果信息体。
    * precheckResult  precheckResult
    * progressInfo  progressInfo
    * migrationObjectProgressInfo  migrationObjectProgressInfo
    * metrics  metrics
    * compareResult  compareResult
    * supportImportFileResp  supportImportFileResp
    * instanceFeatures  由开关和版本共同控制的任务级别的功能列表。
    * taskVersion  任务版本。
    * connectionManagement  connectionManagement
    * publicIpList  指定公网IP的信息
    * bindPublicIpState  是否成功绑定公网IP 取值：SUCCESS，FAILED
    * children  多任务时，存在子任务绑定失败时，返回子任务的信息
    * isWritable  解除目标库只读操作后，目标库解除只读是否成功。 - pending：目标库解除操作进行中。 - success：目标库解除只读操作成功。
    * diagnoses  一键诊断结果。
    * repairProgressInfo  repairProgressInfo
    * repairDetailInfo  repairDetailInfo
    * repairExportStatus  修复SQL导出状态。 INIT：初始状态，EXPORTING：比对结果导出中，EXPORT_COMPLETE：比对结果导出完成，EXPORT_COMMON_FAILED：比对结果导出失败
    * jobKernelDirection  灾备任务内核方向，up上云，down下云。当任务处于倒换中，与灾备任务方向相反，否则相同。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'status' => 'status',
            'createTime' => 'create_time',
            'totalCount' => 'total_count',
            'masterJobId' => 'master_job_id',
            'baseInfo' => 'base_info',
            'sourceEndpoint' => 'source_endpoint',
            'targetEndpoint' => 'target_endpoint',
            'alarmNotify' => 'alarm_notify',
            'speedLimit' => 'speed_limit',
            'userMigration' => 'user_migration',
            'policyConfig' => 'policy_config',
            'dbParam' => 'db_param',
            'tuningParams' => 'tuning_params',
            'periodOrder' => 'period_order',
            'nodeInfo' => 'node_info',
            'logs' => 'logs',
            'networkResults' => 'network_results',
            'precheckResult' => 'precheck_result',
            'progressInfo' => 'progress_info',
            'migrationObjectProgressInfo' => 'migration_object_progress_info',
            'metrics' => 'metrics',
            'compareResult' => 'compare_result',
            'supportImportFileResp' => 'support_import_file_resp',
            'instanceFeatures' => 'instance_features',
            'taskVersion' => 'task_version',
            'connectionManagement' => 'connection_management',
            'publicIpList' => 'public_ip_list',
            'bindPublicIpState' => 'bind_public_ip_state',
            'children' => 'children',
            'isWritable' => 'is_writable',
            'diagnoses' => 'diagnoses',
            'repairProgressInfo' => 'repair_progress_info',
            'repairDetailInfo' => 'repair_detail_info',
            'repairExportStatus' => 'repair_export_status',
            'jobKernelDirection' => 'job_kernel_direction'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  任务ID。
    * status  任务状态。 - CREATING：创建中 - CREATE_FAILED：创建失败 - CONFIGURATION：配置中 - STARTJOBING：启动中 - WAITING_FOR_START：等待启动中 - START_JOB_FAILED：启动失败 - PAUSING：已暂停 - FULL_TRANSFER_STARTED：全量开始，灾备场景下为初始化 - FULL_TRANSFER_FAILED：全量失败，灾备场景下为初始化失败 - FULL_TRANSFER_COMPLETE：全量完成，灾备场景下为初始化完成 - INCRE_TRANSFER_STARTED：增量开始，灾备场景下为灾备中 - INCRE_TRANSFER_FAILED：增量失败，灾备场景下为灾备异常 - RELEASE_RESOURCE_STARTED：结束任务中 - RELEASE_RESOURCE_FAILED：结束任务失败 - RELEASE_RESOURCE_COMPLETE：已结束 - REBUILD_NODE_STARTED：故障恢复中 - REBUILD_NODE_FAILED：故障恢复失败 - CHANGE_JOB_STARTED：任务变更中 - CHANGE_JOB_FAILED：任务变更失败 - DELETED：已删除 - CHILD_TRANSFER_STARTING：再编辑子任务启动中 - CHILD_TRANSFER_STARTED：再编辑子任务迁移中 - CHILD_TRANSFER_COMPLETE：再编辑子任务迁移完成 - CHILD_TRANSFER_FAILED：再编辑子任务迁移失败 - RELEASE_CHILD_TRANSFER_STARTED：再编辑子任务结束中 - RELEASE_CHILD_TRANSFER_COMPLETE：再编辑子任务已结束 - NODE_UPGRADE_START：升级开始 - NODE_UPGRADE_COMPLETE：升级完成 - NODE_UPGRADE_FAILED：升级失败
    * createTime  任务创建时间。
    * totalCount  列表中的项目总数，与分页无关。
    * masterJobId  多任务主节点的任务ID。
    * baseInfo  baseInfo
    * sourceEndpoint  任务源数据库信息体。
    * targetEndpoint  任务目标数据库信息体。
    * alarmNotify  alarmNotify
    * speedLimit  限速信息体。 - 限速：自定义的最大迁移速度，迁移过程中的迁移速度将不会超过该速度。  - 不限速：对迁移速度不进行限制，通常会最大化使用源数据库的出口带宽。该流速模式同时会对源数据库造成读消耗，消耗取决于源数据库的出口带宽。比如：源数据库的出口带宽为100MB/s，假设高速模式使用了80%带宽，则迁移对源数据库将造成80MB/s的读操作IO消耗。
    * userMigration  userMigration
    * policyConfig  policyConfig
    * dbParam  dbParam
    * tuningParams  tuningParams
    * periodOrder  periodOrder
    * nodeInfo  nodeInfo
    * logs  日志查询结果信息体。
    * networkResults  网络打通测试结果信息体。
    * precheckResult  precheckResult
    * progressInfo  progressInfo
    * migrationObjectProgressInfo  migrationObjectProgressInfo
    * metrics  metrics
    * compareResult  compareResult
    * supportImportFileResp  supportImportFileResp
    * instanceFeatures  由开关和版本共同控制的任务级别的功能列表。
    * taskVersion  任务版本。
    * connectionManagement  connectionManagement
    * publicIpList  指定公网IP的信息
    * bindPublicIpState  是否成功绑定公网IP 取值：SUCCESS，FAILED
    * children  多任务时，存在子任务绑定失败时，返回子任务的信息
    * isWritable  解除目标库只读操作后，目标库解除只读是否成功。 - pending：目标库解除操作进行中。 - success：目标库解除只读操作成功。
    * diagnoses  一键诊断结果。
    * repairProgressInfo  repairProgressInfo
    * repairDetailInfo  repairDetailInfo
    * repairExportStatus  修复SQL导出状态。 INIT：初始状态，EXPORTING：比对结果导出中，EXPORT_COMPLETE：比对结果导出完成，EXPORT_COMMON_FAILED：比对结果导出失败
    * jobKernelDirection  灾备任务内核方向，up上云，down下云。当任务处于倒换中，与灾备任务方向相反，否则相同。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'status' => 'setStatus',
            'createTime' => 'setCreateTime',
            'totalCount' => 'setTotalCount',
            'masterJobId' => 'setMasterJobId',
            'baseInfo' => 'setBaseInfo',
            'sourceEndpoint' => 'setSourceEndpoint',
            'targetEndpoint' => 'setTargetEndpoint',
            'alarmNotify' => 'setAlarmNotify',
            'speedLimit' => 'setSpeedLimit',
            'userMigration' => 'setUserMigration',
            'policyConfig' => 'setPolicyConfig',
            'dbParam' => 'setDbParam',
            'tuningParams' => 'setTuningParams',
            'periodOrder' => 'setPeriodOrder',
            'nodeInfo' => 'setNodeInfo',
            'logs' => 'setLogs',
            'networkResults' => 'setNetworkResults',
            'precheckResult' => 'setPrecheckResult',
            'progressInfo' => 'setProgressInfo',
            'migrationObjectProgressInfo' => 'setMigrationObjectProgressInfo',
            'metrics' => 'setMetrics',
            'compareResult' => 'setCompareResult',
            'supportImportFileResp' => 'setSupportImportFileResp',
            'instanceFeatures' => 'setInstanceFeatures',
            'taskVersion' => 'setTaskVersion',
            'connectionManagement' => 'setConnectionManagement',
            'publicIpList' => 'setPublicIpList',
            'bindPublicIpState' => 'setBindPublicIpState',
            'children' => 'setChildren',
            'isWritable' => 'setIsWritable',
            'diagnoses' => 'setDiagnoses',
            'repairProgressInfo' => 'setRepairProgressInfo',
            'repairDetailInfo' => 'setRepairDetailInfo',
            'repairExportStatus' => 'setRepairExportStatus',
            'jobKernelDirection' => 'setJobKernelDirection'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  任务ID。
    * status  任务状态。 - CREATING：创建中 - CREATE_FAILED：创建失败 - CONFIGURATION：配置中 - STARTJOBING：启动中 - WAITING_FOR_START：等待启动中 - START_JOB_FAILED：启动失败 - PAUSING：已暂停 - FULL_TRANSFER_STARTED：全量开始，灾备场景下为初始化 - FULL_TRANSFER_FAILED：全量失败，灾备场景下为初始化失败 - FULL_TRANSFER_COMPLETE：全量完成，灾备场景下为初始化完成 - INCRE_TRANSFER_STARTED：增量开始，灾备场景下为灾备中 - INCRE_TRANSFER_FAILED：增量失败，灾备场景下为灾备异常 - RELEASE_RESOURCE_STARTED：结束任务中 - RELEASE_RESOURCE_FAILED：结束任务失败 - RELEASE_RESOURCE_COMPLETE：已结束 - REBUILD_NODE_STARTED：故障恢复中 - REBUILD_NODE_FAILED：故障恢复失败 - CHANGE_JOB_STARTED：任务变更中 - CHANGE_JOB_FAILED：任务变更失败 - DELETED：已删除 - CHILD_TRANSFER_STARTING：再编辑子任务启动中 - CHILD_TRANSFER_STARTED：再编辑子任务迁移中 - CHILD_TRANSFER_COMPLETE：再编辑子任务迁移完成 - CHILD_TRANSFER_FAILED：再编辑子任务迁移失败 - RELEASE_CHILD_TRANSFER_STARTED：再编辑子任务结束中 - RELEASE_CHILD_TRANSFER_COMPLETE：再编辑子任务已结束 - NODE_UPGRADE_START：升级开始 - NODE_UPGRADE_COMPLETE：升级完成 - NODE_UPGRADE_FAILED：升级失败
    * createTime  任务创建时间。
    * totalCount  列表中的项目总数，与分页无关。
    * masterJobId  多任务主节点的任务ID。
    * baseInfo  baseInfo
    * sourceEndpoint  任务源数据库信息体。
    * targetEndpoint  任务目标数据库信息体。
    * alarmNotify  alarmNotify
    * speedLimit  限速信息体。 - 限速：自定义的最大迁移速度，迁移过程中的迁移速度将不会超过该速度。  - 不限速：对迁移速度不进行限制，通常会最大化使用源数据库的出口带宽。该流速模式同时会对源数据库造成读消耗，消耗取决于源数据库的出口带宽。比如：源数据库的出口带宽为100MB/s，假设高速模式使用了80%带宽，则迁移对源数据库将造成80MB/s的读操作IO消耗。
    * userMigration  userMigration
    * policyConfig  policyConfig
    * dbParam  dbParam
    * tuningParams  tuningParams
    * periodOrder  periodOrder
    * nodeInfo  nodeInfo
    * logs  日志查询结果信息体。
    * networkResults  网络打通测试结果信息体。
    * precheckResult  precheckResult
    * progressInfo  progressInfo
    * migrationObjectProgressInfo  migrationObjectProgressInfo
    * metrics  metrics
    * compareResult  compareResult
    * supportImportFileResp  supportImportFileResp
    * instanceFeatures  由开关和版本共同控制的任务级别的功能列表。
    * taskVersion  任务版本。
    * connectionManagement  connectionManagement
    * publicIpList  指定公网IP的信息
    * bindPublicIpState  是否成功绑定公网IP 取值：SUCCESS，FAILED
    * children  多任务时，存在子任务绑定失败时，返回子任务的信息
    * isWritable  解除目标库只读操作后，目标库解除只读是否成功。 - pending：目标库解除操作进行中。 - success：目标库解除只读操作成功。
    * diagnoses  一键诊断结果。
    * repairProgressInfo  repairProgressInfo
    * repairDetailInfo  repairDetailInfo
    * repairExportStatus  修复SQL导出状态。 INIT：初始状态，EXPORTING：比对结果导出中，EXPORT_COMPLETE：比对结果导出完成，EXPORT_COMMON_FAILED：比对结果导出失败
    * jobKernelDirection  灾备任务内核方向，up上云，down下云。当任务处于倒换中，与灾备任务方向相反，否则相同。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'status' => 'getStatus',
            'createTime' => 'getCreateTime',
            'totalCount' => 'getTotalCount',
            'masterJobId' => 'getMasterJobId',
            'baseInfo' => 'getBaseInfo',
            'sourceEndpoint' => 'getSourceEndpoint',
            'targetEndpoint' => 'getTargetEndpoint',
            'alarmNotify' => 'getAlarmNotify',
            'speedLimit' => 'getSpeedLimit',
            'userMigration' => 'getUserMigration',
            'policyConfig' => 'getPolicyConfig',
            'dbParam' => 'getDbParam',
            'tuningParams' => 'getTuningParams',
            'periodOrder' => 'getPeriodOrder',
            'nodeInfo' => 'getNodeInfo',
            'logs' => 'getLogs',
            'networkResults' => 'getNetworkResults',
            'precheckResult' => 'getPrecheckResult',
            'progressInfo' => 'getProgressInfo',
            'migrationObjectProgressInfo' => 'getMigrationObjectProgressInfo',
            'metrics' => 'getMetrics',
            'compareResult' => 'getCompareResult',
            'supportImportFileResp' => 'getSupportImportFileResp',
            'instanceFeatures' => 'getInstanceFeatures',
            'taskVersion' => 'getTaskVersion',
            'connectionManagement' => 'getConnectionManagement',
            'publicIpList' => 'getPublicIpList',
            'bindPublicIpState' => 'getBindPublicIpState',
            'children' => 'getChildren',
            'isWritable' => 'getIsWritable',
            'diagnoses' => 'getDiagnoses',
            'repairProgressInfo' => 'getRepairProgressInfo',
            'repairDetailInfo' => 'getRepairDetailInfo',
            'repairExportStatus' => 'getRepairExportStatus',
            'jobKernelDirection' => 'getJobKernelDirection'
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
    const IS_WRITABLE_PENDING = 'pending';
    const IS_WRITABLE_SUCCESS = 'success';
    const JOB_KERNEL_DIRECTION_UP = 'up';
    const JOB_KERNEL_DIRECTION_DOWN = 'down';
    

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
    public function getIsWritableAllowableValues()
    {
        return [
            self::IS_WRITABLE_PENDING,
            self::IS_WRITABLE_SUCCESS,
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['masterJobId'] = isset($data['masterJobId']) ? $data['masterJobId'] : null;
        $this->container['baseInfo'] = isset($data['baseInfo']) ? $data['baseInfo'] : null;
        $this->container['sourceEndpoint'] = isset($data['sourceEndpoint']) ? $data['sourceEndpoint'] : null;
        $this->container['targetEndpoint'] = isset($data['targetEndpoint']) ? $data['targetEndpoint'] : null;
        $this->container['alarmNotify'] = isset($data['alarmNotify']) ? $data['alarmNotify'] : null;
        $this->container['speedLimit'] = isset($data['speedLimit']) ? $data['speedLimit'] : null;
        $this->container['userMigration'] = isset($data['userMigration']) ? $data['userMigration'] : null;
        $this->container['policyConfig'] = isset($data['policyConfig']) ? $data['policyConfig'] : null;
        $this->container['dbParam'] = isset($data['dbParam']) ? $data['dbParam'] : null;
        $this->container['tuningParams'] = isset($data['tuningParams']) ? $data['tuningParams'] : null;
        $this->container['periodOrder'] = isset($data['periodOrder']) ? $data['periodOrder'] : null;
        $this->container['nodeInfo'] = isset($data['nodeInfo']) ? $data['nodeInfo'] : null;
        $this->container['logs'] = isset($data['logs']) ? $data['logs'] : null;
        $this->container['networkResults'] = isset($data['networkResults']) ? $data['networkResults'] : null;
        $this->container['precheckResult'] = isset($data['precheckResult']) ? $data['precheckResult'] : null;
        $this->container['progressInfo'] = isset($data['progressInfo']) ? $data['progressInfo'] : null;
        $this->container['migrationObjectProgressInfo'] = isset($data['migrationObjectProgressInfo']) ? $data['migrationObjectProgressInfo'] : null;
        $this->container['metrics'] = isset($data['metrics']) ? $data['metrics'] : null;
        $this->container['compareResult'] = isset($data['compareResult']) ? $data['compareResult'] : null;
        $this->container['supportImportFileResp'] = isset($data['supportImportFileResp']) ? $data['supportImportFileResp'] : null;
        $this->container['instanceFeatures'] = isset($data['instanceFeatures']) ? $data['instanceFeatures'] : null;
        $this->container['taskVersion'] = isset($data['taskVersion']) ? $data['taskVersion'] : null;
        $this->container['connectionManagement'] = isset($data['connectionManagement']) ? $data['connectionManagement'] : null;
        $this->container['publicIpList'] = isset($data['publicIpList']) ? $data['publicIpList'] : null;
        $this->container['bindPublicIpState'] = isset($data['bindPublicIpState']) ? $data['bindPublicIpState'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
        $this->container['isWritable'] = isset($data['isWritable']) ? $data['isWritable'] : null;
        $this->container['diagnoses'] = isset($data['diagnoses']) ? $data['diagnoses'] : null;
        $this->container['repairProgressInfo'] = isset($data['repairProgressInfo']) ? $data['repairProgressInfo'] : null;
        $this->container['repairDetailInfo'] = isset($data['repairDetailInfo']) ? $data['repairDetailInfo'] : null;
        $this->container['repairExportStatus'] = isset($data['repairExportStatus']) ? $data['repairExportStatus'] : null;
        $this->container['jobKernelDirection'] = isset($data['jobKernelDirection']) ? $data['jobKernelDirection'] : null;
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

            $allowedValues = $this->getIsWritableAllowableValues();
                if (!is_null($this->container['isWritable']) && !in_array($this->container['isWritable'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'isWritable', must be one of '%s'",
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
    *  任务ID。
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
    * @param string|null $id 任务ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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
    * Gets createTime
    *  任务创建时间。
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
    * @param string|null $createTime 任务创建时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets totalCount
    *  列表中的项目总数，与分页无关。
    *
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount 列表中的项目总数，与分页无关。
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets masterJobId
    *  多任务主节点的任务ID。
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
    * @param string|null $masterJobId 多任务主节点的任务ID。
    *
    * @return $this
    */
    public function setMasterJobId($masterJobId)
    {
        $this->container['masterJobId'] = $masterJobId;
        return $this;
    }

    /**
    * Gets baseInfo
    *  baseInfo
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\JobBaseInfo|null
    */
    public function getBaseInfo()
    {
        return $this->container['baseInfo'];
    }

    /**
    * Sets baseInfo
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\JobBaseInfo|null $baseInfo baseInfo
    *
    * @return $this
    */
    public function setBaseInfo($baseInfo)
    {
        $this->container['baseInfo'] = $baseInfo;
        return $this;
    }

    /**
    * Gets sourceEndpoint
    *  任务源数据库信息体。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\JobEndpointInfo[]|null
    */
    public function getSourceEndpoint()
    {
        return $this->container['sourceEndpoint'];
    }

    /**
    * Sets sourceEndpoint
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\JobEndpointInfo[]|null $sourceEndpoint 任务源数据库信息体。
    *
    * @return $this
    */
    public function setSourceEndpoint($sourceEndpoint)
    {
        $this->container['sourceEndpoint'] = $sourceEndpoint;
        return $this;
    }

    /**
    * Gets targetEndpoint
    *  任务目标数据库信息体。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\JobEndpointInfo[]|null
    */
    public function getTargetEndpoint()
    {
        return $this->container['targetEndpoint'];
    }

    /**
    * Sets targetEndpoint
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\JobEndpointInfo[]|null $targetEndpoint 任务目标数据库信息体。
    *
    * @return $this
    */
    public function setTargetEndpoint($targetEndpoint)
    {
        $this->container['targetEndpoint'] = $targetEndpoint;
        return $this;
    }

    /**
    * Gets alarmNotify
    *  alarmNotify
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\AlarmNotifyConfig|null
    */
    public function getAlarmNotify()
    {
        return $this->container['alarmNotify'];
    }

    /**
    * Sets alarmNotify
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\AlarmNotifyConfig|null $alarmNotify alarmNotify
    *
    * @return $this
    */
    public function setAlarmNotify($alarmNotify)
    {
        $this->container['alarmNotify'] = $alarmNotify;
        return $this;
    }

    /**
    * Gets speedLimit
    *  限速信息体。 - 限速：自定义的最大迁移速度，迁移过程中的迁移速度将不会超过该速度。  - 不限速：对迁移速度不进行限制，通常会最大化使用源数据库的出口带宽。该流速模式同时会对源数据库造成读消耗，消耗取决于源数据库的出口带宽。比如：源数据库的出口带宽为100MB/s，假设高速模式使用了80%带宽，则迁移对源数据库将造成80MB/s的读操作IO消耗。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\SpeedLimitInfo[]|null
    */
    public function getSpeedLimit()
    {
        return $this->container['speedLimit'];
    }

    /**
    * Sets speedLimit
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\SpeedLimitInfo[]|null $speedLimit 限速信息体。 - 限速：自定义的最大迁移速度，迁移过程中的迁移速度将不会超过该速度。  - 不限速：对迁移速度不进行限制，通常会最大化使用源数据库的出口带宽。该流速模式同时会对源数据库造成读消耗，消耗取决于源数据库的出口带宽。比如：源数据库的出口带宽为100MB/s，假设高速模式使用了80%带宽，则迁移对源数据库将造成80MB/s的读操作IO消耗。
    *
    * @return $this
    */
    public function setSpeedLimit($speedLimit)
    {
        $this->container['speedLimit'] = $speedLimit;
        return $this;
    }

    /**
    * Gets userMigration
    *  userMigration
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\UserMigrationInfo|null
    */
    public function getUserMigration()
    {
        return $this->container['userMigration'];
    }

    /**
    * Sets userMigration
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\UserMigrationInfo|null $userMigration userMigration
    *
    * @return $this
    */
    public function setUserMigration($userMigration)
    {
        $this->container['userMigration'] = $userMigration;
        return $this;
    }

    /**
    * Gets policyConfig
    *  policyConfig
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\PolicyConfig|null
    */
    public function getPolicyConfig()
    {
        return $this->container['policyConfig'];
    }

    /**
    * Sets policyConfig
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\PolicyConfig|null $policyConfig policyConfig
    *
    * @return $this
    */
    public function setPolicyConfig($policyConfig)
    {
        $this->container['policyConfig'] = $policyConfig;
        return $this;
    }

    /**
    * Gets dbParam
    *  dbParam
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\DbParamInfo|null
    */
    public function getDbParam()
    {
        return $this->container['dbParam'];
    }

    /**
    * Sets dbParam
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\DbParamInfo|null $dbParam dbParam
    *
    * @return $this
    */
    public function setDbParam($dbParam)
    {
        $this->container['dbParam'] = $dbParam;
        return $this;
    }

    /**
    * Gets tuningParams
    *  tuningParams
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\TuningParamInfo|null
    */
    public function getTuningParams()
    {
        return $this->container['tuningParams'];
    }

    /**
    * Sets tuningParams
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\TuningParamInfo|null $tuningParams tuningParams
    *
    * @return $this
    */
    public function setTuningParams($tuningParams)
    {
        $this->container['tuningParams'] = $tuningParams;
        return $this;
    }

    /**
    * Gets periodOrder
    *  periodOrder
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\PeriodOrderInfo|null
    */
    public function getPeriodOrder()
    {
        return $this->container['periodOrder'];
    }

    /**
    * Sets periodOrder
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\PeriodOrderInfo|null $periodOrder periodOrder
    *
    * @return $this
    */
    public function setPeriodOrder($periodOrder)
    {
        $this->container['periodOrder'] = $periodOrder;
        return $this;
    }

    /**
    * Gets nodeInfo
    *  nodeInfo
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\JobNodeInfo|null
    */
    public function getNodeInfo()
    {
        return $this->container['nodeInfo'];
    }

    /**
    * Sets nodeInfo
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\JobNodeInfo|null $nodeInfo nodeInfo
    *
    * @return $this
    */
    public function setNodeInfo($nodeInfo)
    {
        $this->container['nodeInfo'] = $nodeInfo;
        return $this;
    }

    /**
    * Gets logs
    *  日志查询结果信息体。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\TaskLogInfo[]|null
    */
    public function getLogs()
    {
        return $this->container['logs'];
    }

    /**
    * Sets logs
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\TaskLogInfo[]|null $logs 日志查询结果信息体。
    *
    * @return $this
    */
    public function setLogs($logs)
    {
        $this->container['logs'] = $logs;
        return $this;
    }

    /**
    * Gets networkResults
    *  网络打通测试结果信息体。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\QueryNetworkResult[]|null
    */
    public function getNetworkResults()
    {
        return $this->container['networkResults'];
    }

    /**
    * Sets networkResults
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\QueryNetworkResult[]|null $networkResults 网络打通测试结果信息体。
    *
    * @return $this
    */
    public function setNetworkResults($networkResults)
    {
        $this->container['networkResults'] = $networkResults;
        return $this;
    }

    /**
    * Gets precheckResult
    *  precheckResult
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\QueryPreCheckResult|null
    */
    public function getPrecheckResult()
    {
        return $this->container['precheckResult'];
    }

    /**
    * Sets precheckResult
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\QueryPreCheckResult|null $precheckResult precheckResult
    *
    * @return $this
    */
    public function setPrecheckResult($precheckResult)
    {
        $this->container['precheckResult'] = $precheckResult;
        return $this;
    }

    /**
    * Gets progressInfo
    *  progressInfo
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\JobProgressInfo|null
    */
    public function getProgressInfo()
    {
        return $this->container['progressInfo'];
    }

    /**
    * Sets progressInfo
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\JobProgressInfo|null $progressInfo progressInfo
    *
    * @return $this
    */
    public function setProgressInfo($progressInfo)
    {
        $this->container['progressInfo'] = $progressInfo;
        return $this;
    }

    /**
    * Gets migrationObjectProgressInfo
    *  migrationObjectProgressInfo
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\QueryMigrationObjectProgressInfo|null
    */
    public function getMigrationObjectProgressInfo()
    {
        return $this->container['migrationObjectProgressInfo'];
    }

    /**
    * Sets migrationObjectProgressInfo
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\QueryMigrationObjectProgressInfo|null $migrationObjectProgressInfo migrationObjectProgressInfo
    *
    * @return $this
    */
    public function setMigrationObjectProgressInfo($migrationObjectProgressInfo)
    {
        $this->container['migrationObjectProgressInfo'] = $migrationObjectProgressInfo;
        return $this;
    }

    /**
    * Gets metrics
    *  metrics
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\QueryMetricResult|null
    */
    public function getMetrics()
    {
        return $this->container['metrics'];
    }

    /**
    * Sets metrics
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\QueryMetricResult|null $metrics metrics
    *
    * @return $this
    */
    public function setMetrics($metrics)
    {
        $this->container['metrics'] = $metrics;
        return $this;
    }

    /**
    * Gets compareResult
    *  compareResult
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\CompareResultInfo|null
    */
    public function getCompareResult()
    {
        return $this->container['compareResult'];
    }

    /**
    * Sets compareResult
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\CompareResultInfo|null $compareResult compareResult
    *
    * @return $this
    */
    public function setCompareResult($compareResult)
    {
        $this->container['compareResult'] = $compareResult;
        return $this;
    }

    /**
    * Gets supportImportFileResp
    *  supportImportFileResp
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\SupportImportFileResult|null
    */
    public function getSupportImportFileResp()
    {
        return $this->container['supportImportFileResp'];
    }

    /**
    * Sets supportImportFileResp
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\SupportImportFileResult|null $supportImportFileResp supportImportFileResp
    *
    * @return $this
    */
    public function setSupportImportFileResp($supportImportFileResp)
    {
        $this->container['supportImportFileResp'] = $supportImportFileResp;
        return $this;
    }

    /**
    * Gets instanceFeatures
    *  由开关和版本共同控制的任务级别的功能列表。
    *
    * @return map[string,string]|null
    */
    public function getInstanceFeatures()
    {
        return $this->container['instanceFeatures'];
    }

    /**
    * Sets instanceFeatures
    *
    * @param map[string,string]|null $instanceFeatures 由开关和版本共同控制的任务级别的功能列表。
    *
    * @return $this
    */
    public function setInstanceFeatures($instanceFeatures)
    {
        $this->container['instanceFeatures'] = $instanceFeatures;
        return $this;
    }

    /**
    * Gets taskVersion
    *  任务版本。
    *
    * @return string|null
    */
    public function getTaskVersion()
    {
        return $this->container['taskVersion'];
    }

    /**
    * Sets taskVersion
    *
    * @param string|null $taskVersion 任务版本。
    *
    * @return $this
    */
    public function setTaskVersion($taskVersion)
    {
        $this->container['taskVersion'] = $taskVersion;
        return $this;
    }

    /**
    * Gets connectionManagement
    *  connectionManagement
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\ConnectionManagement|null
    */
    public function getConnectionManagement()
    {
        return $this->container['connectionManagement'];
    }

    /**
    * Sets connectionManagement
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\ConnectionManagement|null $connectionManagement connectionManagement
    *
    * @return $this
    */
    public function setConnectionManagement($connectionManagement)
    {
        $this->container['connectionManagement'] = $connectionManagement;
        return $this;
    }

    /**
    * Gets publicIpList
    *  指定公网IP的信息
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\PublicIpConfig[]|null
    */
    public function getPublicIpList()
    {
        return $this->container['publicIpList'];
    }

    /**
    * Sets publicIpList
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\PublicIpConfig[]|null $publicIpList 指定公网IP的信息
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
    *  是否成功绑定公网IP 取值：SUCCESS，FAILED
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
    * @param string|null $bindPublicIpState 是否成功绑定公网IP 取值：SUCCESS，FAILED
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
    *  多任务时，存在子任务绑定失败时，返回子任务的信息
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\FailedToBindEipChildInfo[]|null
    */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
    * Sets children
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\FailedToBindEipChildInfo[]|null $children 多任务时，存在子任务绑定失败时，返回子任务的信息
    *
    * @return $this
    */
    public function setChildren($children)
    {
        $this->container['children'] = $children;
        return $this;
    }

    /**
    * Gets isWritable
    *  解除目标库只读操作后，目标库解除只读是否成功。 - pending：目标库解除操作进行中。 - success：目标库解除只读操作成功。
    *
    * @return string|null
    */
    public function getIsWritable()
    {
        return $this->container['isWritable'];
    }

    /**
    * Sets isWritable
    *
    * @param string|null $isWritable 解除目标库只读操作后，目标库解除只读是否成功。 - pending：目标库解除操作进行中。 - success：目标库解除只读操作成功。
    *
    * @return $this
    */
    public function setIsWritable($isWritable)
    {
        $this->container['isWritable'] = $isWritable;
        return $this;
    }

    /**
    * Gets diagnoses
    *  一键诊断结果。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\QueryDiagnosisResult[]|null
    */
    public function getDiagnoses()
    {
        return $this->container['diagnoses'];
    }

    /**
    * Sets diagnoses
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\QueryDiagnosisResult[]|null $diagnoses 一键诊断结果。
    *
    * @return $this
    */
    public function setDiagnoses($diagnoses)
    {
        $this->container['diagnoses'] = $diagnoses;
        return $this;
    }

    /**
    * Gets repairProgressInfo
    *  repairProgressInfo
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\JobDetailRespRepairProgressInfo|null
    */
    public function getRepairProgressInfo()
    {
        return $this->container['repairProgressInfo'];
    }

    /**
    * Sets repairProgressInfo
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\JobDetailRespRepairProgressInfo|null $repairProgressInfo repairProgressInfo
    *
    * @return $this
    */
    public function setRepairProgressInfo($repairProgressInfo)
    {
        $this->container['repairProgressInfo'] = $repairProgressInfo;
        return $this;
    }

    /**
    * Gets repairDetailInfo
    *  repairDetailInfo
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\QueryRepairDetailResp|null
    */
    public function getRepairDetailInfo()
    {
        return $this->container['repairDetailInfo'];
    }

    /**
    * Sets repairDetailInfo
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\QueryRepairDetailResp|null $repairDetailInfo repairDetailInfo
    *
    * @return $this
    */
    public function setRepairDetailInfo($repairDetailInfo)
    {
        $this->container['repairDetailInfo'] = $repairDetailInfo;
        return $this;
    }

    /**
    * Gets repairExportStatus
    *  修复SQL导出状态。 INIT：初始状态，EXPORTING：比对结果导出中，EXPORT_COMPLETE：比对结果导出完成，EXPORT_COMMON_FAILED：比对结果导出失败
    *
    * @return string|null
    */
    public function getRepairExportStatus()
    {
        return $this->container['repairExportStatus'];
    }

    /**
    * Sets repairExportStatus
    *
    * @param string|null $repairExportStatus 修复SQL导出状态。 INIT：初始状态，EXPORTING：比对结果导出中，EXPORT_COMPLETE：比对结果导出完成，EXPORT_COMMON_FAILED：比对结果导出失败
    *
    * @return $this
    */
    public function setRepairExportStatus($repairExportStatus)
    {
        $this->container['repairExportStatus'] = $repairExportStatus;
        return $this;
    }

    /**
    * Gets jobKernelDirection
    *  灾备任务内核方向，up上云，down下云。当任务处于倒换中，与灾备任务方向相反，否则相同。
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
    * @param string|null $jobKernelDirection 灾备任务内核方向，up上云，down下云。当任务处于倒换中，与灾备任务方向相反，否则相同。
    *
    * @return $this
    */
    public function setJobKernelDirection($jobKernelDirection)
    {
        $this->container['jobKernelDirection'] = $jobKernelDirection;
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

