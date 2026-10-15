<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportJobsReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportJobsReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobType  DRS任务的业务场景类型。用于筛选导出特定业务场景类型的任务列表。 取值： - migration 实时迁移 - sync 实时同步 - backupMigration 备份迁移 - subscription 订阅 - cloudDataGuard 实时灾备
    * name  任务名称。
    * status  任务状态。默认查询所有状态的任务 - 当job_type取值：migration,sync,cloudDataGuard     对应的任务状态取值如下：     CREATING：创建中。     CREATE_FAILED：创建失败。     CONFIGURATION：配置中。     STARTJOBING：启动中。     WAITING_FOR_START：等待启动中。     START_JOB_FAILED：任务启动失败。     FULL_TRANSFER_STARTED：全量迁移中，灾备场景为初始化。     FULL_TRANSFER_FAILED：全量迁移失败，灾备场景为初始化失败。     FULL_TRANSFER_COMPLETE：全量迁移完成，灾备场景为初始化完成。     INCRE_TRANSFER_STARTED：增量迁移中，灾备场景为灾备中。     INCRE_TRANSFER_FAILED：增量迁移失败，灾备场景为灾备异常。     RELEASE_RESOURCE_STARTED：结束任务中。     RELEASE_RESOURCE_FAILED：结束任务失败。     RELEASE_RESOURCE_COMPLETE：已结束。     CHANGE_JOB_STARTED：任务变更中。     CHANGE_JOB_FAILED：任务变更失败。     CHILD_TRANSFER_STARTING：子任务启动中。     CHILD_TRANSFER_STARTED：子任务迁移中。     CHILD_TRANSFER_COMPLETE：子任务迁移完成。     CHILD_TRANSFER_FAILED：子任务迁移失败。     RELEASE_CHILD_TRANSFER_STARTED：子任务结束中。     RELEASE_CHILD_TRANSFER_COMPLETE：子任务已结束。其中，异常状态可单独查询，也可以通过以下方式查询全部异常任务：CREATE_FAILED，START_JOB_FAILED，FULL_TRANSFER_FAILED，INCRE_TRANSFER_FAILED，RELEASE_RESOURCE_FAILED，CHANGE_JOB_FAILED，CHILD_TRANSFER_FAILED。 - 当job_type取值：backupMigration   对应的任务状态取值如下：     SUBSCRIPTION_STARTED：创建中。     CREATE_FAILED：创建失败。     SUBSCRIPTION_FAILED：订阅失败。     CONFIGURATION：配置中。     STARTJOBING：启动中。     REBUILD_NODE_STARTED：故障恢复。     REBUILD_NODE_FAILED：故障恢复失败。     START_JOB_FAILED：任务启动失败。 - 当job_type取值：subscription   对应的任务状态取值如下：     SUCCESS：成功。     TRANSFERRING：备份迁移中。     FAILED：失败。     PRECHECK FAILED：预检查失败。
    * dbsInstanceIds  数据库实例ID，最大数量为10。
    * description  描述。
    * createAt  创建时间。 当job_type取值：migration,sync,cloudDataGuard， 任务创建时间，比如\"2026-05-25T13:41:00.127Z|2026-05-28T13:41:00.999Z\" 当job_type取值：backupMigration， 表示任务创建时间，比如\"2026-05-25T13:41:00.127Z|2026-05-28T13:41:00.999Z\" 当job_type取值：subscription，表示消费时间点，比如\"2026-05-25T13:25:46.383Z|2026-05-28T13:25:46.999Z\"
    * completedAt  完成时间。在job_type是backupMigration时支持该参数填写， 表示任务完成时间，比如\"2026-05-25T13:41:00.127Z|2026-05-28T13:41:00.999Z\"
    * enterpriseProjectId  企业项目ID。
    * engineType  引擎类型。当job_type取值：migration,sync,cloudDataGuard，该参数支持填写。当job_type取值：backupMigration 时，该参数默认值是sqlserver
    * netType  网络类型。取值： eip：公网网络。 vpc：VPC网络。 vpn：VPN、专线网络。 当job_type取值：migration,sync,cloudDataGuard，该参数支持填写。
    * billingTag  计费标识。当job_type取值：migration,sync,cloudDataGuard,subscription，该参数支持填写。取值\"0\"表示计费中，\"1\"表示未计费
    * billingMode  计费模式。当job_type取值：migration,sync,cloudDataGuard，支持该参数填写。取值：\"1\"表示包年包月，\"0\"表示按需计费
    * publicIp  实例绑定的公网IP。当job_type取值：migration,sync,cloudDataGuard，支持该参数填写。
    * instanceIp  DRS绑定的数据库实例IP。当job_type取值：migration,sync,cloudDataGuard，支持该参数填写。
    * innerIp  DRS绑定的内网IP。当job_type取值：migration,sync,cloudDataGuard，支持该参数填写。
    * specType  规格类型。当job_type取值：migration,sync,cloudDataGuard，支持该参数填写。 取值如下： 2xlarge：极大规格。 xlarge：超大规格。 high：大规格。 medium：中规格。 small：小规格。 micro：极小规格。
    * direction  数据流动方向。 当job_type取值migration,sync时支持传值。 取值： - up：入云 - down：出云 - non-dbs：自建 - multiWrite：双向同步。 当job_type取值cloudDataGuard时支持传值， 取值： - up：本云为备 - down：本云为主 - multiWrite：双主灾备
    * taskType  同步类型。当job_type取值migration,sync时支持传值。
    * sortKey  返回结果按该关键字排序，默认为“create_time”。 当前支持排序的关键字： name status create_time net_type job_direction pay_mode
    * sortDir  降序或升序（分别对应desc和asc，默认为“desc”）。
    * tag  标签
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobType' => 'string',
            'name' => 'string',
            'status' => 'string',
            'dbsInstanceIds' => 'string[]',
            'description' => 'string',
            'createAt' => 'string',
            'completedAt' => 'string',
            'enterpriseProjectId' => 'string',
            'engineType' => 'string',
            'netType' => 'string',
            'billingTag' => 'string',
            'billingMode' => 'string',
            'publicIp' => 'string',
            'instanceIp' => 'string',
            'innerIp' => 'string',
            'specType' => 'string',
            'direction' => 'string',
            'taskType' => 'string',
            'sortKey' => 'string',
            'sortDir' => 'string',
            'tag' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobType  DRS任务的业务场景类型。用于筛选导出特定业务场景类型的任务列表。 取值： - migration 实时迁移 - sync 实时同步 - backupMigration 备份迁移 - subscription 订阅 - cloudDataGuard 实时灾备
    * name  任务名称。
    * status  任务状态。默认查询所有状态的任务 - 当job_type取值：migration,sync,cloudDataGuard     对应的任务状态取值如下：     CREATING：创建中。     CREATE_FAILED：创建失败。     CONFIGURATION：配置中。     STARTJOBING：启动中。     WAITING_FOR_START：等待启动中。     START_JOB_FAILED：任务启动失败。     FULL_TRANSFER_STARTED：全量迁移中，灾备场景为初始化。     FULL_TRANSFER_FAILED：全量迁移失败，灾备场景为初始化失败。     FULL_TRANSFER_COMPLETE：全量迁移完成，灾备场景为初始化完成。     INCRE_TRANSFER_STARTED：增量迁移中，灾备场景为灾备中。     INCRE_TRANSFER_FAILED：增量迁移失败，灾备场景为灾备异常。     RELEASE_RESOURCE_STARTED：结束任务中。     RELEASE_RESOURCE_FAILED：结束任务失败。     RELEASE_RESOURCE_COMPLETE：已结束。     CHANGE_JOB_STARTED：任务变更中。     CHANGE_JOB_FAILED：任务变更失败。     CHILD_TRANSFER_STARTING：子任务启动中。     CHILD_TRANSFER_STARTED：子任务迁移中。     CHILD_TRANSFER_COMPLETE：子任务迁移完成。     CHILD_TRANSFER_FAILED：子任务迁移失败。     RELEASE_CHILD_TRANSFER_STARTED：子任务结束中。     RELEASE_CHILD_TRANSFER_COMPLETE：子任务已结束。其中，异常状态可单独查询，也可以通过以下方式查询全部异常任务：CREATE_FAILED，START_JOB_FAILED，FULL_TRANSFER_FAILED，INCRE_TRANSFER_FAILED，RELEASE_RESOURCE_FAILED，CHANGE_JOB_FAILED，CHILD_TRANSFER_FAILED。 - 当job_type取值：backupMigration   对应的任务状态取值如下：     SUBSCRIPTION_STARTED：创建中。     CREATE_FAILED：创建失败。     SUBSCRIPTION_FAILED：订阅失败。     CONFIGURATION：配置中。     STARTJOBING：启动中。     REBUILD_NODE_STARTED：故障恢复。     REBUILD_NODE_FAILED：故障恢复失败。     START_JOB_FAILED：任务启动失败。 - 当job_type取值：subscription   对应的任务状态取值如下：     SUCCESS：成功。     TRANSFERRING：备份迁移中。     FAILED：失败。     PRECHECK FAILED：预检查失败。
    * dbsInstanceIds  数据库实例ID，最大数量为10。
    * description  描述。
    * createAt  创建时间。 当job_type取值：migration,sync,cloudDataGuard， 任务创建时间，比如\"2026-05-25T13:41:00.127Z|2026-05-28T13:41:00.999Z\" 当job_type取值：backupMigration， 表示任务创建时间，比如\"2026-05-25T13:41:00.127Z|2026-05-28T13:41:00.999Z\" 当job_type取值：subscription，表示消费时间点，比如\"2026-05-25T13:25:46.383Z|2026-05-28T13:25:46.999Z\"
    * completedAt  完成时间。在job_type是backupMigration时支持该参数填写， 表示任务完成时间，比如\"2026-05-25T13:41:00.127Z|2026-05-28T13:41:00.999Z\"
    * enterpriseProjectId  企业项目ID。
    * engineType  引擎类型。当job_type取值：migration,sync,cloudDataGuard，该参数支持填写。当job_type取值：backupMigration 时，该参数默认值是sqlserver
    * netType  网络类型。取值： eip：公网网络。 vpc：VPC网络。 vpn：VPN、专线网络。 当job_type取值：migration,sync,cloudDataGuard，该参数支持填写。
    * billingTag  计费标识。当job_type取值：migration,sync,cloudDataGuard,subscription，该参数支持填写。取值\"0\"表示计费中，\"1\"表示未计费
    * billingMode  计费模式。当job_type取值：migration,sync,cloudDataGuard，支持该参数填写。取值：\"1\"表示包年包月，\"0\"表示按需计费
    * publicIp  实例绑定的公网IP。当job_type取值：migration,sync,cloudDataGuard，支持该参数填写。
    * instanceIp  DRS绑定的数据库实例IP。当job_type取值：migration,sync,cloudDataGuard，支持该参数填写。
    * innerIp  DRS绑定的内网IP。当job_type取值：migration,sync,cloudDataGuard，支持该参数填写。
    * specType  规格类型。当job_type取值：migration,sync,cloudDataGuard，支持该参数填写。 取值如下： 2xlarge：极大规格。 xlarge：超大规格。 high：大规格。 medium：中规格。 small：小规格。 micro：极小规格。
    * direction  数据流动方向。 当job_type取值migration,sync时支持传值。 取值： - up：入云 - down：出云 - non-dbs：自建 - multiWrite：双向同步。 当job_type取值cloudDataGuard时支持传值， 取值： - up：本云为备 - down：本云为主 - multiWrite：双主灾备
    * taskType  同步类型。当job_type取值migration,sync时支持传值。
    * sortKey  返回结果按该关键字排序，默认为“create_time”。 当前支持排序的关键字： name status create_time net_type job_direction pay_mode
    * sortDir  降序或升序（分别对应desc和asc，默认为“desc”）。
    * tag  标签
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobType' => null,
        'name' => null,
        'status' => null,
        'dbsInstanceIds' => null,
        'description' => null,
        'createAt' => null,
        'completedAt' => null,
        'enterpriseProjectId' => null,
        'engineType' => null,
        'netType' => null,
        'billingTag' => null,
        'billingMode' => null,
        'publicIp' => null,
        'instanceIp' => null,
        'innerIp' => null,
        'specType' => null,
        'direction' => null,
        'taskType' => null,
        'sortKey' => null,
        'sortDir' => null,
        'tag' => null
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
    * jobType  DRS任务的业务场景类型。用于筛选导出特定业务场景类型的任务列表。 取值： - migration 实时迁移 - sync 实时同步 - backupMigration 备份迁移 - subscription 订阅 - cloudDataGuard 实时灾备
    * name  任务名称。
    * status  任务状态。默认查询所有状态的任务 - 当job_type取值：migration,sync,cloudDataGuard     对应的任务状态取值如下：     CREATING：创建中。     CREATE_FAILED：创建失败。     CONFIGURATION：配置中。     STARTJOBING：启动中。     WAITING_FOR_START：等待启动中。     START_JOB_FAILED：任务启动失败。     FULL_TRANSFER_STARTED：全量迁移中，灾备场景为初始化。     FULL_TRANSFER_FAILED：全量迁移失败，灾备场景为初始化失败。     FULL_TRANSFER_COMPLETE：全量迁移完成，灾备场景为初始化完成。     INCRE_TRANSFER_STARTED：增量迁移中，灾备场景为灾备中。     INCRE_TRANSFER_FAILED：增量迁移失败，灾备场景为灾备异常。     RELEASE_RESOURCE_STARTED：结束任务中。     RELEASE_RESOURCE_FAILED：结束任务失败。     RELEASE_RESOURCE_COMPLETE：已结束。     CHANGE_JOB_STARTED：任务变更中。     CHANGE_JOB_FAILED：任务变更失败。     CHILD_TRANSFER_STARTING：子任务启动中。     CHILD_TRANSFER_STARTED：子任务迁移中。     CHILD_TRANSFER_COMPLETE：子任务迁移完成。     CHILD_TRANSFER_FAILED：子任务迁移失败。     RELEASE_CHILD_TRANSFER_STARTED：子任务结束中。     RELEASE_CHILD_TRANSFER_COMPLETE：子任务已结束。其中，异常状态可单独查询，也可以通过以下方式查询全部异常任务：CREATE_FAILED，START_JOB_FAILED，FULL_TRANSFER_FAILED，INCRE_TRANSFER_FAILED，RELEASE_RESOURCE_FAILED，CHANGE_JOB_FAILED，CHILD_TRANSFER_FAILED。 - 当job_type取值：backupMigration   对应的任务状态取值如下：     SUBSCRIPTION_STARTED：创建中。     CREATE_FAILED：创建失败。     SUBSCRIPTION_FAILED：订阅失败。     CONFIGURATION：配置中。     STARTJOBING：启动中。     REBUILD_NODE_STARTED：故障恢复。     REBUILD_NODE_FAILED：故障恢复失败。     START_JOB_FAILED：任务启动失败。 - 当job_type取值：subscription   对应的任务状态取值如下：     SUCCESS：成功。     TRANSFERRING：备份迁移中。     FAILED：失败。     PRECHECK FAILED：预检查失败。
    * dbsInstanceIds  数据库实例ID，最大数量为10。
    * description  描述。
    * createAt  创建时间。 当job_type取值：migration,sync,cloudDataGuard， 任务创建时间，比如\"2026-05-25T13:41:00.127Z|2026-05-28T13:41:00.999Z\" 当job_type取值：backupMigration， 表示任务创建时间，比如\"2026-05-25T13:41:00.127Z|2026-05-28T13:41:00.999Z\" 当job_type取值：subscription，表示消费时间点，比如\"2026-05-25T13:25:46.383Z|2026-05-28T13:25:46.999Z\"
    * completedAt  完成时间。在job_type是backupMigration时支持该参数填写， 表示任务完成时间，比如\"2026-05-25T13:41:00.127Z|2026-05-28T13:41:00.999Z\"
    * enterpriseProjectId  企业项目ID。
    * engineType  引擎类型。当job_type取值：migration,sync,cloudDataGuard，该参数支持填写。当job_type取值：backupMigration 时，该参数默认值是sqlserver
    * netType  网络类型。取值： eip：公网网络。 vpc：VPC网络。 vpn：VPN、专线网络。 当job_type取值：migration,sync,cloudDataGuard，该参数支持填写。
    * billingTag  计费标识。当job_type取值：migration,sync,cloudDataGuard,subscription，该参数支持填写。取值\"0\"表示计费中，\"1\"表示未计费
    * billingMode  计费模式。当job_type取值：migration,sync,cloudDataGuard，支持该参数填写。取值：\"1\"表示包年包月，\"0\"表示按需计费
    * publicIp  实例绑定的公网IP。当job_type取值：migration,sync,cloudDataGuard，支持该参数填写。
    * instanceIp  DRS绑定的数据库实例IP。当job_type取值：migration,sync,cloudDataGuard，支持该参数填写。
    * innerIp  DRS绑定的内网IP。当job_type取值：migration,sync,cloudDataGuard，支持该参数填写。
    * specType  规格类型。当job_type取值：migration,sync,cloudDataGuard，支持该参数填写。 取值如下： 2xlarge：极大规格。 xlarge：超大规格。 high：大规格。 medium：中规格。 small：小规格。 micro：极小规格。
    * direction  数据流动方向。 当job_type取值migration,sync时支持传值。 取值： - up：入云 - down：出云 - non-dbs：自建 - multiWrite：双向同步。 当job_type取值cloudDataGuard时支持传值， 取值： - up：本云为备 - down：本云为主 - multiWrite：双主灾备
    * taskType  同步类型。当job_type取值migration,sync时支持传值。
    * sortKey  返回结果按该关键字排序，默认为“create_time”。 当前支持排序的关键字： name status create_time net_type job_direction pay_mode
    * sortDir  降序或升序（分别对应desc和asc，默认为“desc”）。
    * tag  标签
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobType' => 'job_type',
            'name' => 'name',
            'status' => 'status',
            'dbsInstanceIds' => 'dbs_instance_ids',
            'description' => 'description',
            'createAt' => 'create_at',
            'completedAt' => 'completed_at',
            'enterpriseProjectId' => 'enterprise_project_id',
            'engineType' => 'engine_type',
            'netType' => 'net_type',
            'billingTag' => 'billing_tag',
            'billingMode' => 'billing_mode',
            'publicIp' => 'public_ip',
            'instanceIp' => 'instance_ip',
            'innerIp' => 'inner_ip',
            'specType' => 'spec_type',
            'direction' => 'direction',
            'taskType' => 'task_type',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'tag' => 'tag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobType  DRS任务的业务场景类型。用于筛选导出特定业务场景类型的任务列表。 取值： - migration 实时迁移 - sync 实时同步 - backupMigration 备份迁移 - subscription 订阅 - cloudDataGuard 实时灾备
    * name  任务名称。
    * status  任务状态。默认查询所有状态的任务 - 当job_type取值：migration,sync,cloudDataGuard     对应的任务状态取值如下：     CREATING：创建中。     CREATE_FAILED：创建失败。     CONFIGURATION：配置中。     STARTJOBING：启动中。     WAITING_FOR_START：等待启动中。     START_JOB_FAILED：任务启动失败。     FULL_TRANSFER_STARTED：全量迁移中，灾备场景为初始化。     FULL_TRANSFER_FAILED：全量迁移失败，灾备场景为初始化失败。     FULL_TRANSFER_COMPLETE：全量迁移完成，灾备场景为初始化完成。     INCRE_TRANSFER_STARTED：增量迁移中，灾备场景为灾备中。     INCRE_TRANSFER_FAILED：增量迁移失败，灾备场景为灾备异常。     RELEASE_RESOURCE_STARTED：结束任务中。     RELEASE_RESOURCE_FAILED：结束任务失败。     RELEASE_RESOURCE_COMPLETE：已结束。     CHANGE_JOB_STARTED：任务变更中。     CHANGE_JOB_FAILED：任务变更失败。     CHILD_TRANSFER_STARTING：子任务启动中。     CHILD_TRANSFER_STARTED：子任务迁移中。     CHILD_TRANSFER_COMPLETE：子任务迁移完成。     CHILD_TRANSFER_FAILED：子任务迁移失败。     RELEASE_CHILD_TRANSFER_STARTED：子任务结束中。     RELEASE_CHILD_TRANSFER_COMPLETE：子任务已结束。其中，异常状态可单独查询，也可以通过以下方式查询全部异常任务：CREATE_FAILED，START_JOB_FAILED，FULL_TRANSFER_FAILED，INCRE_TRANSFER_FAILED，RELEASE_RESOURCE_FAILED，CHANGE_JOB_FAILED，CHILD_TRANSFER_FAILED。 - 当job_type取值：backupMigration   对应的任务状态取值如下：     SUBSCRIPTION_STARTED：创建中。     CREATE_FAILED：创建失败。     SUBSCRIPTION_FAILED：订阅失败。     CONFIGURATION：配置中。     STARTJOBING：启动中。     REBUILD_NODE_STARTED：故障恢复。     REBUILD_NODE_FAILED：故障恢复失败。     START_JOB_FAILED：任务启动失败。 - 当job_type取值：subscription   对应的任务状态取值如下：     SUCCESS：成功。     TRANSFERRING：备份迁移中。     FAILED：失败。     PRECHECK FAILED：预检查失败。
    * dbsInstanceIds  数据库实例ID，最大数量为10。
    * description  描述。
    * createAt  创建时间。 当job_type取值：migration,sync,cloudDataGuard， 任务创建时间，比如\"2026-05-25T13:41:00.127Z|2026-05-28T13:41:00.999Z\" 当job_type取值：backupMigration， 表示任务创建时间，比如\"2026-05-25T13:41:00.127Z|2026-05-28T13:41:00.999Z\" 当job_type取值：subscription，表示消费时间点，比如\"2026-05-25T13:25:46.383Z|2026-05-28T13:25:46.999Z\"
    * completedAt  完成时间。在job_type是backupMigration时支持该参数填写， 表示任务完成时间，比如\"2026-05-25T13:41:00.127Z|2026-05-28T13:41:00.999Z\"
    * enterpriseProjectId  企业项目ID。
    * engineType  引擎类型。当job_type取值：migration,sync,cloudDataGuard，该参数支持填写。当job_type取值：backupMigration 时，该参数默认值是sqlserver
    * netType  网络类型。取值： eip：公网网络。 vpc：VPC网络。 vpn：VPN、专线网络。 当job_type取值：migration,sync,cloudDataGuard，该参数支持填写。
    * billingTag  计费标识。当job_type取值：migration,sync,cloudDataGuard,subscription，该参数支持填写。取值\"0\"表示计费中，\"1\"表示未计费
    * billingMode  计费模式。当job_type取值：migration,sync,cloudDataGuard，支持该参数填写。取值：\"1\"表示包年包月，\"0\"表示按需计费
    * publicIp  实例绑定的公网IP。当job_type取值：migration,sync,cloudDataGuard，支持该参数填写。
    * instanceIp  DRS绑定的数据库实例IP。当job_type取值：migration,sync,cloudDataGuard，支持该参数填写。
    * innerIp  DRS绑定的内网IP。当job_type取值：migration,sync,cloudDataGuard，支持该参数填写。
    * specType  规格类型。当job_type取值：migration,sync,cloudDataGuard，支持该参数填写。 取值如下： 2xlarge：极大规格。 xlarge：超大规格。 high：大规格。 medium：中规格。 small：小规格。 micro：极小规格。
    * direction  数据流动方向。 当job_type取值migration,sync时支持传值。 取值： - up：入云 - down：出云 - non-dbs：自建 - multiWrite：双向同步。 当job_type取值cloudDataGuard时支持传值， 取值： - up：本云为备 - down：本云为主 - multiWrite：双主灾备
    * taskType  同步类型。当job_type取值migration,sync时支持传值。
    * sortKey  返回结果按该关键字排序，默认为“create_time”。 当前支持排序的关键字： name status create_time net_type job_direction pay_mode
    * sortDir  降序或升序（分别对应desc和asc，默认为“desc”）。
    * tag  标签
    *
    * @var string[]
    */
    protected static $setters = [
            'jobType' => 'setJobType',
            'name' => 'setName',
            'status' => 'setStatus',
            'dbsInstanceIds' => 'setDbsInstanceIds',
            'description' => 'setDescription',
            'createAt' => 'setCreateAt',
            'completedAt' => 'setCompletedAt',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'engineType' => 'setEngineType',
            'netType' => 'setNetType',
            'billingTag' => 'setBillingTag',
            'billingMode' => 'setBillingMode',
            'publicIp' => 'setPublicIp',
            'instanceIp' => 'setInstanceIp',
            'innerIp' => 'setInnerIp',
            'specType' => 'setSpecType',
            'direction' => 'setDirection',
            'taskType' => 'setTaskType',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'tag' => 'setTag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobType  DRS任务的业务场景类型。用于筛选导出特定业务场景类型的任务列表。 取值： - migration 实时迁移 - sync 实时同步 - backupMigration 备份迁移 - subscription 订阅 - cloudDataGuard 实时灾备
    * name  任务名称。
    * status  任务状态。默认查询所有状态的任务 - 当job_type取值：migration,sync,cloudDataGuard     对应的任务状态取值如下：     CREATING：创建中。     CREATE_FAILED：创建失败。     CONFIGURATION：配置中。     STARTJOBING：启动中。     WAITING_FOR_START：等待启动中。     START_JOB_FAILED：任务启动失败。     FULL_TRANSFER_STARTED：全量迁移中，灾备场景为初始化。     FULL_TRANSFER_FAILED：全量迁移失败，灾备场景为初始化失败。     FULL_TRANSFER_COMPLETE：全量迁移完成，灾备场景为初始化完成。     INCRE_TRANSFER_STARTED：增量迁移中，灾备场景为灾备中。     INCRE_TRANSFER_FAILED：增量迁移失败，灾备场景为灾备异常。     RELEASE_RESOURCE_STARTED：结束任务中。     RELEASE_RESOURCE_FAILED：结束任务失败。     RELEASE_RESOURCE_COMPLETE：已结束。     CHANGE_JOB_STARTED：任务变更中。     CHANGE_JOB_FAILED：任务变更失败。     CHILD_TRANSFER_STARTING：子任务启动中。     CHILD_TRANSFER_STARTED：子任务迁移中。     CHILD_TRANSFER_COMPLETE：子任务迁移完成。     CHILD_TRANSFER_FAILED：子任务迁移失败。     RELEASE_CHILD_TRANSFER_STARTED：子任务结束中。     RELEASE_CHILD_TRANSFER_COMPLETE：子任务已结束。其中，异常状态可单独查询，也可以通过以下方式查询全部异常任务：CREATE_FAILED，START_JOB_FAILED，FULL_TRANSFER_FAILED，INCRE_TRANSFER_FAILED，RELEASE_RESOURCE_FAILED，CHANGE_JOB_FAILED，CHILD_TRANSFER_FAILED。 - 当job_type取值：backupMigration   对应的任务状态取值如下：     SUBSCRIPTION_STARTED：创建中。     CREATE_FAILED：创建失败。     SUBSCRIPTION_FAILED：订阅失败。     CONFIGURATION：配置中。     STARTJOBING：启动中。     REBUILD_NODE_STARTED：故障恢复。     REBUILD_NODE_FAILED：故障恢复失败。     START_JOB_FAILED：任务启动失败。 - 当job_type取值：subscription   对应的任务状态取值如下：     SUCCESS：成功。     TRANSFERRING：备份迁移中。     FAILED：失败。     PRECHECK FAILED：预检查失败。
    * dbsInstanceIds  数据库实例ID，最大数量为10。
    * description  描述。
    * createAt  创建时间。 当job_type取值：migration,sync,cloudDataGuard， 任务创建时间，比如\"2026-05-25T13:41:00.127Z|2026-05-28T13:41:00.999Z\" 当job_type取值：backupMigration， 表示任务创建时间，比如\"2026-05-25T13:41:00.127Z|2026-05-28T13:41:00.999Z\" 当job_type取值：subscription，表示消费时间点，比如\"2026-05-25T13:25:46.383Z|2026-05-28T13:25:46.999Z\"
    * completedAt  完成时间。在job_type是backupMigration时支持该参数填写， 表示任务完成时间，比如\"2026-05-25T13:41:00.127Z|2026-05-28T13:41:00.999Z\"
    * enterpriseProjectId  企业项目ID。
    * engineType  引擎类型。当job_type取值：migration,sync,cloudDataGuard，该参数支持填写。当job_type取值：backupMigration 时，该参数默认值是sqlserver
    * netType  网络类型。取值： eip：公网网络。 vpc：VPC网络。 vpn：VPN、专线网络。 当job_type取值：migration,sync,cloudDataGuard，该参数支持填写。
    * billingTag  计费标识。当job_type取值：migration,sync,cloudDataGuard,subscription，该参数支持填写。取值\"0\"表示计费中，\"1\"表示未计费
    * billingMode  计费模式。当job_type取值：migration,sync,cloudDataGuard，支持该参数填写。取值：\"1\"表示包年包月，\"0\"表示按需计费
    * publicIp  实例绑定的公网IP。当job_type取值：migration,sync,cloudDataGuard，支持该参数填写。
    * instanceIp  DRS绑定的数据库实例IP。当job_type取值：migration,sync,cloudDataGuard，支持该参数填写。
    * innerIp  DRS绑定的内网IP。当job_type取值：migration,sync,cloudDataGuard，支持该参数填写。
    * specType  规格类型。当job_type取值：migration,sync,cloudDataGuard，支持该参数填写。 取值如下： 2xlarge：极大规格。 xlarge：超大规格。 high：大规格。 medium：中规格。 small：小规格。 micro：极小规格。
    * direction  数据流动方向。 当job_type取值migration,sync时支持传值。 取值： - up：入云 - down：出云 - non-dbs：自建 - multiWrite：双向同步。 当job_type取值cloudDataGuard时支持传值， 取值： - up：本云为备 - down：本云为主 - multiWrite：双主灾备
    * taskType  同步类型。当job_type取值migration,sync时支持传值。
    * sortKey  返回结果按该关键字排序，默认为“create_time”。 当前支持排序的关键字： name status create_time net_type job_direction pay_mode
    * sortDir  降序或升序（分别对应desc和asc，默认为“desc”）。
    * tag  标签
    *
    * @var string[]
    */
    protected static $getters = [
            'jobType' => 'getJobType',
            'name' => 'getName',
            'status' => 'getStatus',
            'dbsInstanceIds' => 'getDbsInstanceIds',
            'description' => 'getDescription',
            'createAt' => 'getCreateAt',
            'completedAt' => 'getCompletedAt',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'engineType' => 'getEngineType',
            'netType' => 'getNetType',
            'billingTag' => 'getBillingTag',
            'billingMode' => 'getBillingMode',
            'publicIp' => 'getPublicIp',
            'instanceIp' => 'getInstanceIp',
            'innerIp' => 'getInnerIp',
            'specType' => 'getSpecType',
            'direction' => 'getDirection',
            'taskType' => 'getTaskType',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
            'tag' => 'getTag'
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
    const JOB_TYPE_MIGRATION = 'migration';
    const JOB_TYPE_SYNC = 'sync';
    const JOB_TYPE_CLOUD_DATA_GUARD = 'cloudDataGuard';
    const JOB_TYPE_BACKUP_MIGRATION = 'backupMigration';
    const JOB_TYPE_SUBSCRIPTION = 'subscription';
    const STATUS_CREATING = 'CREATING';
    const STATUS_CREATE_FAILED = 'CREATE_FAILED';
    const STATUS_CONFIGURATION = 'CONFIGURATION';
    const STATUS_STARTJOBING = 'STARTJOBING';
    const STATUS_WAITING_FOR_START = 'WAITING_FOR_START';
    const STATUS_START_JOB_FAILED = 'START_JOB_FAILED';
    const STATUS_FULL_TRANSFER_STARTED = 'FULL_TRANSFER_STARTED';
    const STATUS_FULL_TRANSFER_FAILED = 'FULL_TRANSFER_FAILED';
    const STATUS_FULL_TRANSFER_COMPLETE = 'FULL_TRANSFER_COMPLETE';
    const STATUS_INCRE_TRANSFER_STARTED = 'INCRE_TRANSFER_STARTED';
    const STATUS_INCRE_TRANSFER_FAILED = 'INCRE_TRANSFER_FAILED';
    const STATUS_RELEASE_RESOURCE_STARTED = 'RELEASE_RESOURCE_STARTED';
    const STATUS_RELEASE_RESOURCE_FAILED = 'RELEASE_RESOURCE_FAILED';
    const STATUS_RELEASE_RESOURCE_COMPLETE = 'RELEASE_RESOURCE_COMPLETE';
    const STATUS_CHANGE_JOB_STARTED = 'CHANGE_JOB_STARTED';
    const STATUS_CHANGE_JOB_FAILED = 'CHANGE_JOB_FAILED';
    const STATUS_CHILD_TRANSFER_STARTING = 'CHILD_TRANSFER_STARTING';
    const STATUS_CHILD_TRANSFER_STARTED = 'CHILD_TRANSFER_STARTED';
    const STATUS_CHILD_TRANSFER_COMPLETE = 'CHILD_TRANSFER_COMPLETE';
    const STATUS_CHILD_TRANSFER_FAILED = 'CHILD_TRANSFER_FAILED';
    const STATUS_RELEASE_CHILD_TRANSFER_STARTED = 'RELEASE_CHILD_TRANSFER_STARTED';
    const STATUS_RELEASE_CHILD_TRANSFER_COMPLETE = 'RELEASE_CHILD_TRANSFER_COMPLETE';
    const STATUS_SUBSCRIPTION_STARTED = 'SUBSCRIPTION_STARTED';
    const STATUS_SUBSCRIPTION_FAILED = 'SUBSCRIPTION_FAILED';
    const STATUS_EMPTY = '';
    const STATUS_REBUILD_NODE_FAILED = 'REBUILD_NODE_FAILED';
    const STATUS_SUCCESS = 'SUCCESS';
    const STATUS_TRANSFERRING = 'TRANSFERRING';
    const STATUS_FAILED = 'FAILED';
    const STATUS_PRECHECK_FAILED = 'PRECHECK FAILED';
    const NET_TYPE_EIP = 'eip';
    const NET_TYPE_VPC = 'vpc';
    const NET_TYPE_VPN = 'vpn';
    const BILLING_TAG__0 = '0';
    const BILLING_TAG__1 = '1';
    const BILLING_MODE__0 = '0';
    const BILLING_MODE__1 = '1';
    const SPEC_TYPE__2XLARGE = '2xlarge';
    const SPEC_TYPE_XLARGE = 'xlarge';
    const SPEC_TYPE_HIGH = 'high';
    const SPEC_TYPE_MEDIUM = 'medium';
    const SPEC_TYPE_SMALL = 'small';
    const SPEC_TYPE_MICRO = 'micro';
    const DIRECTION_UP = 'up';
    const DIRECTION_DOWN = 'down';
    const DIRECTION_NON_DBS = 'non-dbs';
    const DIRECTION_MULTI_WRITE = 'multiWrite';
    const TASK_TYPE_FULL_INCR_TRANS = 'FULL_INCR_TRANS';
    const TASK_TYPE_FULL_TRANS = 'FULL_TRANS';
    const TASK_TYPE_INCR_TRANS = 'INCR_TRANS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getJobTypeAllowableValues()
    {
        return [
            self::JOB_TYPE_MIGRATION,
            self::JOB_TYPE_SYNC,
            self::JOB_TYPE_CLOUD_DATA_GUARD,
            self::JOB_TYPE_BACKUP_MIGRATION,
            self::JOB_TYPE_SUBSCRIPTION,
        ];
    }

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
            self::STATUS_FULL_TRANSFER_STARTED,
            self::STATUS_FULL_TRANSFER_FAILED,
            self::STATUS_FULL_TRANSFER_COMPLETE,
            self::STATUS_INCRE_TRANSFER_STARTED,
            self::STATUS_INCRE_TRANSFER_FAILED,
            self::STATUS_RELEASE_RESOURCE_STARTED,
            self::STATUS_RELEASE_RESOURCE_FAILED,
            self::STATUS_RELEASE_RESOURCE_COMPLETE,
            self::STATUS_CHANGE_JOB_STARTED,
            self::STATUS_CHANGE_JOB_FAILED,
            self::STATUS_CHILD_TRANSFER_STARTING,
            self::STATUS_CHILD_TRANSFER_STARTED,
            self::STATUS_CHILD_TRANSFER_COMPLETE,
            self::STATUS_CHILD_TRANSFER_FAILED,
            self::STATUS_RELEASE_CHILD_TRANSFER_STARTED,
            self::STATUS_RELEASE_CHILD_TRANSFER_COMPLETE,
            self::STATUS_SUBSCRIPTION_STARTED,
            self::STATUS_SUBSCRIPTION_FAILED,
            self::STATUS_EMPTY,
            self::STATUS_REBUILD_NODE_FAILED,
            self::STATUS_SUCCESS,
            self::STATUS_TRANSFERRING,
            self::STATUS_FAILED,
            self::STATUS_PRECHECK_FAILED,
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
            self::NET_TYPE_EIP,
            self::NET_TYPE_VPC,
            self::NET_TYPE_VPN,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBillingTagAllowableValues()
    {
        return [
            self::BILLING_TAG__0,
            self::BILLING_TAG__1,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBillingModeAllowableValues()
    {
        return [
            self::BILLING_MODE__0,
            self::BILLING_MODE__1,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSpecTypeAllowableValues()
    {
        return [
            self::SPEC_TYPE__2XLARGE,
            self::SPEC_TYPE_XLARGE,
            self::SPEC_TYPE_HIGH,
            self::SPEC_TYPE_MEDIUM,
            self::SPEC_TYPE_SMALL,
            self::SPEC_TYPE_MICRO,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDirectionAllowableValues()
    {
        return [
            self::DIRECTION_UP,
            self::DIRECTION_DOWN,
            self::DIRECTION_NON_DBS,
            self::DIRECTION_MULTI_WRITE,
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
            self::TASK_TYPE_FULL_INCR_TRANS,
            self::TASK_TYPE_FULL_TRANS,
            self::TASK_TYPE_INCR_TRANS,
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
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['dbsInstanceIds'] = isset($data['dbsInstanceIds']) ? $data['dbsInstanceIds'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['completedAt'] = isset($data['completedAt']) ? $data['completedAt'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['netType'] = isset($data['netType']) ? $data['netType'] : null;
        $this->container['billingTag'] = isset($data['billingTag']) ? $data['billingTag'] : null;
        $this->container['billingMode'] = isset($data['billingMode']) ? $data['billingMode'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['instanceIp'] = isset($data['instanceIp']) ? $data['instanceIp'] : null;
        $this->container['innerIp'] = isset($data['innerIp']) ? $data['innerIp'] : null;
        $this->container['specType'] = isset($data['specType']) ? $data['specType'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['jobType'] === null) {
            $invalidProperties[] = "'jobType' can't be null";
        }
            $allowedValues = $this->getJobTypeAllowableValues();
                if (!is_null($this->container['jobType']) && !in_array($this->container['jobType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'jobType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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

            $allowedValues = $this->getBillingTagAllowableValues();
                if (!is_null($this->container['billingTag']) && !in_array($this->container['billingTag'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'billingTag', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getBillingModeAllowableValues();
                if (!is_null($this->container['billingMode']) && !in_array($this->container['billingMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'billingMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSpecTypeAllowableValues();
                if (!is_null($this->container['specType']) && !in_array($this->container['specType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'specType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getDirectionAllowableValues();
                if (!is_null($this->container['direction']) && !in_array($this->container['direction'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'direction', must be one of '%s'",
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
    * Gets jobType
    *  DRS任务的业务场景类型。用于筛选导出特定业务场景类型的任务列表。 取值： - migration 实时迁移 - sync 实时同步 - backupMigration 备份迁移 - subscription 订阅 - cloudDataGuard 实时灾备
    *
    * @return string
    */
    public function getJobType()
    {
        return $this->container['jobType'];
    }

    /**
    * Sets jobType
    *
    * @param string $jobType DRS任务的业务场景类型。用于筛选导出特定业务场景类型的任务列表。 取值： - migration 实时迁移 - sync 实时同步 - backupMigration 备份迁移 - subscription 订阅 - cloudDataGuard 实时灾备
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets name
    *  任务名称。
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
    * @param string|null $name 任务名称。
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
    *  任务状态。默认查询所有状态的任务 - 当job_type取值：migration,sync,cloudDataGuard     对应的任务状态取值如下：     CREATING：创建中。     CREATE_FAILED：创建失败。     CONFIGURATION：配置中。     STARTJOBING：启动中。     WAITING_FOR_START：等待启动中。     START_JOB_FAILED：任务启动失败。     FULL_TRANSFER_STARTED：全量迁移中，灾备场景为初始化。     FULL_TRANSFER_FAILED：全量迁移失败，灾备场景为初始化失败。     FULL_TRANSFER_COMPLETE：全量迁移完成，灾备场景为初始化完成。     INCRE_TRANSFER_STARTED：增量迁移中，灾备场景为灾备中。     INCRE_TRANSFER_FAILED：增量迁移失败，灾备场景为灾备异常。     RELEASE_RESOURCE_STARTED：结束任务中。     RELEASE_RESOURCE_FAILED：结束任务失败。     RELEASE_RESOURCE_COMPLETE：已结束。     CHANGE_JOB_STARTED：任务变更中。     CHANGE_JOB_FAILED：任务变更失败。     CHILD_TRANSFER_STARTING：子任务启动中。     CHILD_TRANSFER_STARTED：子任务迁移中。     CHILD_TRANSFER_COMPLETE：子任务迁移完成。     CHILD_TRANSFER_FAILED：子任务迁移失败。     RELEASE_CHILD_TRANSFER_STARTED：子任务结束中。     RELEASE_CHILD_TRANSFER_COMPLETE：子任务已结束。其中，异常状态可单独查询，也可以通过以下方式查询全部异常任务：CREATE_FAILED，START_JOB_FAILED，FULL_TRANSFER_FAILED，INCRE_TRANSFER_FAILED，RELEASE_RESOURCE_FAILED，CHANGE_JOB_FAILED，CHILD_TRANSFER_FAILED。 - 当job_type取值：backupMigration   对应的任务状态取值如下：     SUBSCRIPTION_STARTED：创建中。     CREATE_FAILED：创建失败。     SUBSCRIPTION_FAILED：订阅失败。     CONFIGURATION：配置中。     STARTJOBING：启动中。     REBUILD_NODE_STARTED：故障恢复。     REBUILD_NODE_FAILED：故障恢复失败。     START_JOB_FAILED：任务启动失败。 - 当job_type取值：subscription   对应的任务状态取值如下：     SUCCESS：成功。     TRANSFERRING：备份迁移中。     FAILED：失败。     PRECHECK FAILED：预检查失败。
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
    * @param string|null $status 任务状态。默认查询所有状态的任务 - 当job_type取值：migration,sync,cloudDataGuard     对应的任务状态取值如下：     CREATING：创建中。     CREATE_FAILED：创建失败。     CONFIGURATION：配置中。     STARTJOBING：启动中。     WAITING_FOR_START：等待启动中。     START_JOB_FAILED：任务启动失败。     FULL_TRANSFER_STARTED：全量迁移中，灾备场景为初始化。     FULL_TRANSFER_FAILED：全量迁移失败，灾备场景为初始化失败。     FULL_TRANSFER_COMPLETE：全量迁移完成，灾备场景为初始化完成。     INCRE_TRANSFER_STARTED：增量迁移中，灾备场景为灾备中。     INCRE_TRANSFER_FAILED：增量迁移失败，灾备场景为灾备异常。     RELEASE_RESOURCE_STARTED：结束任务中。     RELEASE_RESOURCE_FAILED：结束任务失败。     RELEASE_RESOURCE_COMPLETE：已结束。     CHANGE_JOB_STARTED：任务变更中。     CHANGE_JOB_FAILED：任务变更失败。     CHILD_TRANSFER_STARTING：子任务启动中。     CHILD_TRANSFER_STARTED：子任务迁移中。     CHILD_TRANSFER_COMPLETE：子任务迁移完成。     CHILD_TRANSFER_FAILED：子任务迁移失败。     RELEASE_CHILD_TRANSFER_STARTED：子任务结束中。     RELEASE_CHILD_TRANSFER_COMPLETE：子任务已结束。其中，异常状态可单独查询，也可以通过以下方式查询全部异常任务：CREATE_FAILED，START_JOB_FAILED，FULL_TRANSFER_FAILED，INCRE_TRANSFER_FAILED，RELEASE_RESOURCE_FAILED，CHANGE_JOB_FAILED，CHILD_TRANSFER_FAILED。 - 当job_type取值：backupMigration   对应的任务状态取值如下：     SUBSCRIPTION_STARTED：创建中。     CREATE_FAILED：创建失败。     SUBSCRIPTION_FAILED：订阅失败。     CONFIGURATION：配置中。     STARTJOBING：启动中。     REBUILD_NODE_STARTED：故障恢复。     REBUILD_NODE_FAILED：故障恢复失败。     START_JOB_FAILED：任务启动失败。 - 当job_type取值：subscription   对应的任务状态取值如下：     SUCCESS：成功。     TRANSFERRING：备份迁移中。     FAILED：失败。     PRECHECK FAILED：预检查失败。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets dbsInstanceIds
    *  数据库实例ID，最大数量为10。
    *
    * @return string[]|null
    */
    public function getDbsInstanceIds()
    {
        return $this->container['dbsInstanceIds'];
    }

    /**
    * Sets dbsInstanceIds
    *
    * @param string[]|null $dbsInstanceIds 数据库实例ID，最大数量为10。
    *
    * @return $this
    */
    public function setDbsInstanceIds($dbsInstanceIds)
    {
        $this->container['dbsInstanceIds'] = $dbsInstanceIds;
        return $this;
    }

    /**
    * Gets description
    *  描述。
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
    * @param string|null $description 描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets createAt
    *  创建时间。 当job_type取值：migration,sync,cloudDataGuard， 任务创建时间，比如\"2026-05-25T13:41:00.127Z|2026-05-28T13:41:00.999Z\" 当job_type取值：backupMigration， 表示任务创建时间，比如\"2026-05-25T13:41:00.127Z|2026-05-28T13:41:00.999Z\" 当job_type取值：subscription，表示消费时间点，比如\"2026-05-25T13:25:46.383Z|2026-05-28T13:25:46.999Z\"
    *
    * @return string|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param string|null $createAt 创建时间。 当job_type取值：migration,sync,cloudDataGuard， 任务创建时间，比如\"2026-05-25T13:41:00.127Z|2026-05-28T13:41:00.999Z\" 当job_type取值：backupMigration， 表示任务创建时间，比如\"2026-05-25T13:41:00.127Z|2026-05-28T13:41:00.999Z\" 当job_type取值：subscription，表示消费时间点，比如\"2026-05-25T13:25:46.383Z|2026-05-28T13:25:46.999Z\"
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets completedAt
    *  完成时间。在job_type是backupMigration时支持该参数填写， 表示任务完成时间，比如\"2026-05-25T13:41:00.127Z|2026-05-28T13:41:00.999Z\"
    *
    * @return string|null
    */
    public function getCompletedAt()
    {
        return $this->container['completedAt'];
    }

    /**
    * Sets completedAt
    *
    * @param string|null $completedAt 完成时间。在job_type是backupMigration时支持该参数填写， 表示任务完成时间，比如\"2026-05-25T13:41:00.127Z|2026-05-28T13:41:00.999Z\"
    *
    * @return $this
    */
    public function setCompletedAt($completedAt)
    {
        $this->container['completedAt'] = $completedAt;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。
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
    * @param string|null $enterpriseProjectId 企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets engineType
    *  引擎类型。当job_type取值：migration,sync,cloudDataGuard，该参数支持填写。当job_type取值：backupMigration 时，该参数默认值是sqlserver
    *
    * @return string|null
    */
    public function getEngineType()
    {
        return $this->container['engineType'];
    }

    /**
    * Sets engineType
    *
    * @param string|null $engineType 引擎类型。当job_type取值：migration,sync,cloudDataGuard，该参数支持填写。当job_type取值：backupMigration 时，该参数默认值是sqlserver
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
        return $this;
    }

    /**
    * Gets netType
    *  网络类型。取值： eip：公网网络。 vpc：VPC网络。 vpn：VPN、专线网络。 当job_type取值：migration,sync,cloudDataGuard，该参数支持填写。
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
    * @param string|null $netType 网络类型。取值： eip：公网网络。 vpc：VPC网络。 vpn：VPN、专线网络。 当job_type取值：migration,sync,cloudDataGuard，该参数支持填写。
    *
    * @return $this
    */
    public function setNetType($netType)
    {
        $this->container['netType'] = $netType;
        return $this;
    }

    /**
    * Gets billingTag
    *  计费标识。当job_type取值：migration,sync,cloudDataGuard,subscription，该参数支持填写。取值\"0\"表示计费中，\"1\"表示未计费
    *
    * @return string|null
    */
    public function getBillingTag()
    {
        return $this->container['billingTag'];
    }

    /**
    * Sets billingTag
    *
    * @param string|null $billingTag 计费标识。当job_type取值：migration,sync,cloudDataGuard,subscription，该参数支持填写。取值\"0\"表示计费中，\"1\"表示未计费
    *
    * @return $this
    */
    public function setBillingTag($billingTag)
    {
        $this->container['billingTag'] = $billingTag;
        return $this;
    }

    /**
    * Gets billingMode
    *  计费模式。当job_type取值：migration,sync,cloudDataGuard，支持该参数填写。取值：\"1\"表示包年包月，\"0\"表示按需计费
    *
    * @return string|null
    */
    public function getBillingMode()
    {
        return $this->container['billingMode'];
    }

    /**
    * Sets billingMode
    *
    * @param string|null $billingMode 计费模式。当job_type取值：migration,sync,cloudDataGuard，支持该参数填写。取值：\"1\"表示包年包月，\"0\"表示按需计费
    *
    * @return $this
    */
    public function setBillingMode($billingMode)
    {
        $this->container['billingMode'] = $billingMode;
        return $this;
    }

    /**
    * Gets publicIp
    *  实例绑定的公网IP。当job_type取值：migration,sync,cloudDataGuard，支持该参数填写。
    *
    * @return string|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param string|null $publicIp 实例绑定的公网IP。当job_type取值：migration,sync,cloudDataGuard，支持该参数填写。
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets instanceIp
    *  DRS绑定的数据库实例IP。当job_type取值：migration,sync,cloudDataGuard，支持该参数填写。
    *
    * @return string|null
    */
    public function getInstanceIp()
    {
        return $this->container['instanceIp'];
    }

    /**
    * Sets instanceIp
    *
    * @param string|null $instanceIp DRS绑定的数据库实例IP。当job_type取值：migration,sync,cloudDataGuard，支持该参数填写。
    *
    * @return $this
    */
    public function setInstanceIp($instanceIp)
    {
        $this->container['instanceIp'] = $instanceIp;
        return $this;
    }

    /**
    * Gets innerIp
    *  DRS绑定的内网IP。当job_type取值：migration,sync,cloudDataGuard，支持该参数填写。
    *
    * @return string|null
    */
    public function getInnerIp()
    {
        return $this->container['innerIp'];
    }

    /**
    * Sets innerIp
    *
    * @param string|null $innerIp DRS绑定的内网IP。当job_type取值：migration,sync,cloudDataGuard，支持该参数填写。
    *
    * @return $this
    */
    public function setInnerIp($innerIp)
    {
        $this->container['innerIp'] = $innerIp;
        return $this;
    }

    /**
    * Gets specType
    *  规格类型。当job_type取值：migration,sync,cloudDataGuard，支持该参数填写。 取值如下： 2xlarge：极大规格。 xlarge：超大规格。 high：大规格。 medium：中规格。 small：小规格。 micro：极小规格。
    *
    * @return string|null
    */
    public function getSpecType()
    {
        return $this->container['specType'];
    }

    /**
    * Sets specType
    *
    * @param string|null $specType 规格类型。当job_type取值：migration,sync,cloudDataGuard，支持该参数填写。 取值如下： 2xlarge：极大规格。 xlarge：超大规格。 high：大规格。 medium：中规格。 small：小规格。 micro：极小规格。
    *
    * @return $this
    */
    public function setSpecType($specType)
    {
        $this->container['specType'] = $specType;
        return $this;
    }

    /**
    * Gets direction
    *  数据流动方向。 当job_type取值migration,sync时支持传值。 取值： - up：入云 - down：出云 - non-dbs：自建 - multiWrite：双向同步。 当job_type取值cloudDataGuard时支持传值， 取值： - up：本云为备 - down：本云为主 - multiWrite：双主灾备
    *
    * @return string|null
    */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
    * Sets direction
    *
    * @param string|null $direction 数据流动方向。 当job_type取值migration,sync时支持传值。 取值： - up：入云 - down：出云 - non-dbs：自建 - multiWrite：双向同步。 当job_type取值cloudDataGuard时支持传值， 取值： - up：本云为备 - down：本云为主 - multiWrite：双主灾备
    *
    * @return $this
    */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;
        return $this;
    }

    /**
    * Gets taskType
    *  同步类型。当job_type取值migration,sync时支持传值。
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
    * @param string|null $taskType 同步类型。当job_type取值migration,sync时支持传值。
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
        return $this;
    }

    /**
    * Gets sortKey
    *  返回结果按该关键字排序，默认为“create_time”。 当前支持排序的关键字： name status create_time net_type job_direction pay_mode
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey 返回结果按该关键字排序，默认为“create_time”。 当前支持排序的关键字： name status create_time net_type job_direction pay_mode
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets sortDir
    *  降序或升序（分别对应desc和asc，默认为“desc”）。
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir 降序或升序（分别对应desc和asc，默认为“desc”）。
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets tag
    *  标签
    *
    * @return string|null
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param string|null $tag 标签
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
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

