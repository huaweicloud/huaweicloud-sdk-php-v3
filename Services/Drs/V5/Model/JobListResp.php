<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobListResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobListResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  任务ID。
    * name  任务名称。
    * status  任务状态。取值： - CREATING：创建中。 - CREATE_FAILED：创建失败。 - CONFIGURATION：配置中。 - STARTJOBING：启动中。 - WAITING_FOR_START：等待启动中。 - START_JOB_FAILED：任务启动失败。 - FULL_TRANSFER_STARTED：全量迁移中 灾备场景为初始化。 - FULL_TRANSFER_FAILED：全量迁移失败 灾备场景为初始化失败。 - FULL_TRANSFER_COMPLETE：全量迁移完成 灾备场景为初始化完成。 - INCRE_TRANSFER_STARTED：增量迁移中 灾备场景为灾备中。 - INCRE_TRANSFER_FAILED：增量迁移失败 灾备场景为灾备异常。 - RELEASE_RESOURCE_STARTED：结束任务中。 - RELEASE_RESOURCE_FAILED：结束任务失败。 - RELEASE_RESOURCE_COMPLETE：已结束。 - CHANGE_JOB_STARTED：任务变更中。 - CHANGE_JOB_FAILED：任务变更失败。 - CHILD_TRANSFER_STARTING：子任务启动中。 - CHILD_TRANSFER_STARTED：子任务迁移中。 - CHILD_TRANSFER_COMPLETE：子任务迁移完成。 - CHILD_TRANSFER_FAILED：子任务迁移失败。 - RELEASE_CHILD_TRANSFER_STARTED：子任务结束中。 - RELEASE_CHILD_TRANSFER_COMPLETE：子任务已结束。
    * description  任务描述。
    * createTime  任务创建时间。
    * engineType  引擎类型。取值： - oracle-to-gaussdbv5：Oracle同步到GaussDB分布式版，实时同步场景使用。
    * netType  网络类型。取值： - eip：公网网络。 - vpc：VPC网络，灾备场景不支持选择VPC网络。 - vpn：VPN、专线网络。
    * chargingMode  计费模式。取值： - period：包周期。 - on_demand：按需。
    * billingTag  是否计费。
    * jobDirection  任务方向。取值： - up：入云 ，灾备场景时对应本云为备。 - down：出云，灾备场景时对应本云为主。 - non-dbs：自建。
    * jobType  任务场景。取值： - migration：实时迁移。 - sync：实时同步。 - cloudDataGuard：实时灾备。
    * taskType  任务模式。取值： - FULL_TRANS ：全量。 - FULL_INCR_TRANS：全量+增量。 - INCR_TRANS：增量。
    * enterpriseProjectId  企业项目ID。
    * jobMode  任务模式。取值： - single：单任务。 - sync_child：同步子任务。 - multi_to_single：多对一任务。
    * jobModeRole  任务角色。取值： - parent：父任务。 - child：子任务。 - master：主任务。 - slave：备任务。
    * isMultiAz  是否跨AZ任务。
    * nodeRole  任务节点角色。
    * nodeNewFramework  是否新框架。
    * jobAction  jobAction
    * children  子任务列表信息体。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'status' => 'string',
            'description' => 'string',
            'createTime' => 'string',
            'engineType' => 'string',
            'netType' => 'string',
            'chargingMode' => 'string',
            'billingTag' => 'bool',
            'jobDirection' => 'string',
            'jobType' => 'string',
            'taskType' => 'string',
            'enterpriseProjectId' => 'string',
            'jobMode' => 'string',
            'jobModeRole' => 'string',
            'isMultiAz' => 'bool',
            'nodeRole' => 'string',
            'nodeNewFramework' => 'bool',
            'jobAction' => '\HuaweiCloud\SDK\Drs\V5\Model\JobActions',
            'children' => '\HuaweiCloud\SDK\Drs\V5\Model\ChildrenJobListResp[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  任务ID。
    * name  任务名称。
    * status  任务状态。取值： - CREATING：创建中。 - CREATE_FAILED：创建失败。 - CONFIGURATION：配置中。 - STARTJOBING：启动中。 - WAITING_FOR_START：等待启动中。 - START_JOB_FAILED：任务启动失败。 - FULL_TRANSFER_STARTED：全量迁移中 灾备场景为初始化。 - FULL_TRANSFER_FAILED：全量迁移失败 灾备场景为初始化失败。 - FULL_TRANSFER_COMPLETE：全量迁移完成 灾备场景为初始化完成。 - INCRE_TRANSFER_STARTED：增量迁移中 灾备场景为灾备中。 - INCRE_TRANSFER_FAILED：增量迁移失败 灾备场景为灾备异常。 - RELEASE_RESOURCE_STARTED：结束任务中。 - RELEASE_RESOURCE_FAILED：结束任务失败。 - RELEASE_RESOURCE_COMPLETE：已结束。 - CHANGE_JOB_STARTED：任务变更中。 - CHANGE_JOB_FAILED：任务变更失败。 - CHILD_TRANSFER_STARTING：子任务启动中。 - CHILD_TRANSFER_STARTED：子任务迁移中。 - CHILD_TRANSFER_COMPLETE：子任务迁移完成。 - CHILD_TRANSFER_FAILED：子任务迁移失败。 - RELEASE_CHILD_TRANSFER_STARTED：子任务结束中。 - RELEASE_CHILD_TRANSFER_COMPLETE：子任务已结束。
    * description  任务描述。
    * createTime  任务创建时间。
    * engineType  引擎类型。取值： - oracle-to-gaussdbv5：Oracle同步到GaussDB分布式版，实时同步场景使用。
    * netType  网络类型。取值： - eip：公网网络。 - vpc：VPC网络，灾备场景不支持选择VPC网络。 - vpn：VPN、专线网络。
    * chargingMode  计费模式。取值： - period：包周期。 - on_demand：按需。
    * billingTag  是否计费。
    * jobDirection  任务方向。取值： - up：入云 ，灾备场景时对应本云为备。 - down：出云，灾备场景时对应本云为主。 - non-dbs：自建。
    * jobType  任务场景。取值： - migration：实时迁移。 - sync：实时同步。 - cloudDataGuard：实时灾备。
    * taskType  任务模式。取值： - FULL_TRANS ：全量。 - FULL_INCR_TRANS：全量+增量。 - INCR_TRANS：增量。
    * enterpriseProjectId  企业项目ID。
    * jobMode  任务模式。取值： - single：单任务。 - sync_child：同步子任务。 - multi_to_single：多对一任务。
    * jobModeRole  任务角色。取值： - parent：父任务。 - child：子任务。 - master：主任务。 - slave：备任务。
    * isMultiAz  是否跨AZ任务。
    * nodeRole  任务节点角色。
    * nodeNewFramework  是否新框架。
    * jobAction  jobAction
    * children  子任务列表信息体。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'status' => null,
        'description' => null,
        'createTime' => null,
        'engineType' => null,
        'netType' => null,
        'chargingMode' => null,
        'billingTag' => null,
        'jobDirection' => null,
        'jobType' => null,
        'taskType' => null,
        'enterpriseProjectId' => null,
        'jobMode' => null,
        'jobModeRole' => null,
        'isMultiAz' => null,
        'nodeRole' => null,
        'nodeNewFramework' => null,
        'jobAction' => null,
        'children' => null
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
    * name  任务名称。
    * status  任务状态。取值： - CREATING：创建中。 - CREATE_FAILED：创建失败。 - CONFIGURATION：配置中。 - STARTJOBING：启动中。 - WAITING_FOR_START：等待启动中。 - START_JOB_FAILED：任务启动失败。 - FULL_TRANSFER_STARTED：全量迁移中 灾备场景为初始化。 - FULL_TRANSFER_FAILED：全量迁移失败 灾备场景为初始化失败。 - FULL_TRANSFER_COMPLETE：全量迁移完成 灾备场景为初始化完成。 - INCRE_TRANSFER_STARTED：增量迁移中 灾备场景为灾备中。 - INCRE_TRANSFER_FAILED：增量迁移失败 灾备场景为灾备异常。 - RELEASE_RESOURCE_STARTED：结束任务中。 - RELEASE_RESOURCE_FAILED：结束任务失败。 - RELEASE_RESOURCE_COMPLETE：已结束。 - CHANGE_JOB_STARTED：任务变更中。 - CHANGE_JOB_FAILED：任务变更失败。 - CHILD_TRANSFER_STARTING：子任务启动中。 - CHILD_TRANSFER_STARTED：子任务迁移中。 - CHILD_TRANSFER_COMPLETE：子任务迁移完成。 - CHILD_TRANSFER_FAILED：子任务迁移失败。 - RELEASE_CHILD_TRANSFER_STARTED：子任务结束中。 - RELEASE_CHILD_TRANSFER_COMPLETE：子任务已结束。
    * description  任务描述。
    * createTime  任务创建时间。
    * engineType  引擎类型。取值： - oracle-to-gaussdbv5：Oracle同步到GaussDB分布式版，实时同步场景使用。
    * netType  网络类型。取值： - eip：公网网络。 - vpc：VPC网络，灾备场景不支持选择VPC网络。 - vpn：VPN、专线网络。
    * chargingMode  计费模式。取值： - period：包周期。 - on_demand：按需。
    * billingTag  是否计费。
    * jobDirection  任务方向。取值： - up：入云 ，灾备场景时对应本云为备。 - down：出云，灾备场景时对应本云为主。 - non-dbs：自建。
    * jobType  任务场景。取值： - migration：实时迁移。 - sync：实时同步。 - cloudDataGuard：实时灾备。
    * taskType  任务模式。取值： - FULL_TRANS ：全量。 - FULL_INCR_TRANS：全量+增量。 - INCR_TRANS：增量。
    * enterpriseProjectId  企业项目ID。
    * jobMode  任务模式。取值： - single：单任务。 - sync_child：同步子任务。 - multi_to_single：多对一任务。
    * jobModeRole  任务角色。取值： - parent：父任务。 - child：子任务。 - master：主任务。 - slave：备任务。
    * isMultiAz  是否跨AZ任务。
    * nodeRole  任务节点角色。
    * nodeNewFramework  是否新框架。
    * jobAction  jobAction
    * children  子任务列表信息体。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'status' => 'status',
            'description' => 'description',
            'createTime' => 'create_time',
            'engineType' => 'engine_type',
            'netType' => 'net_type',
            'chargingMode' => 'charging_mode',
            'billingTag' => 'billing_tag',
            'jobDirection' => 'job_direction',
            'jobType' => 'job_type',
            'taskType' => 'task_type',
            'enterpriseProjectId' => 'enterprise_project_id',
            'jobMode' => 'job_mode',
            'jobModeRole' => 'job_mode_role',
            'isMultiAz' => 'is_multi_az',
            'nodeRole' => 'node_role',
            'nodeNewFramework' => 'node_new_framework',
            'jobAction' => 'job_action',
            'children' => 'children'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  任务ID。
    * name  任务名称。
    * status  任务状态。取值： - CREATING：创建中。 - CREATE_FAILED：创建失败。 - CONFIGURATION：配置中。 - STARTJOBING：启动中。 - WAITING_FOR_START：等待启动中。 - START_JOB_FAILED：任务启动失败。 - FULL_TRANSFER_STARTED：全量迁移中 灾备场景为初始化。 - FULL_TRANSFER_FAILED：全量迁移失败 灾备场景为初始化失败。 - FULL_TRANSFER_COMPLETE：全量迁移完成 灾备场景为初始化完成。 - INCRE_TRANSFER_STARTED：增量迁移中 灾备场景为灾备中。 - INCRE_TRANSFER_FAILED：增量迁移失败 灾备场景为灾备异常。 - RELEASE_RESOURCE_STARTED：结束任务中。 - RELEASE_RESOURCE_FAILED：结束任务失败。 - RELEASE_RESOURCE_COMPLETE：已结束。 - CHANGE_JOB_STARTED：任务变更中。 - CHANGE_JOB_FAILED：任务变更失败。 - CHILD_TRANSFER_STARTING：子任务启动中。 - CHILD_TRANSFER_STARTED：子任务迁移中。 - CHILD_TRANSFER_COMPLETE：子任务迁移完成。 - CHILD_TRANSFER_FAILED：子任务迁移失败。 - RELEASE_CHILD_TRANSFER_STARTED：子任务结束中。 - RELEASE_CHILD_TRANSFER_COMPLETE：子任务已结束。
    * description  任务描述。
    * createTime  任务创建时间。
    * engineType  引擎类型。取值： - oracle-to-gaussdbv5：Oracle同步到GaussDB分布式版，实时同步场景使用。
    * netType  网络类型。取值： - eip：公网网络。 - vpc：VPC网络，灾备场景不支持选择VPC网络。 - vpn：VPN、专线网络。
    * chargingMode  计费模式。取值： - period：包周期。 - on_demand：按需。
    * billingTag  是否计费。
    * jobDirection  任务方向。取值： - up：入云 ，灾备场景时对应本云为备。 - down：出云，灾备场景时对应本云为主。 - non-dbs：自建。
    * jobType  任务场景。取值： - migration：实时迁移。 - sync：实时同步。 - cloudDataGuard：实时灾备。
    * taskType  任务模式。取值： - FULL_TRANS ：全量。 - FULL_INCR_TRANS：全量+增量。 - INCR_TRANS：增量。
    * enterpriseProjectId  企业项目ID。
    * jobMode  任务模式。取值： - single：单任务。 - sync_child：同步子任务。 - multi_to_single：多对一任务。
    * jobModeRole  任务角色。取值： - parent：父任务。 - child：子任务。 - master：主任务。 - slave：备任务。
    * isMultiAz  是否跨AZ任务。
    * nodeRole  任务节点角色。
    * nodeNewFramework  是否新框架。
    * jobAction  jobAction
    * children  子任务列表信息体。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'status' => 'setStatus',
            'description' => 'setDescription',
            'createTime' => 'setCreateTime',
            'engineType' => 'setEngineType',
            'netType' => 'setNetType',
            'chargingMode' => 'setChargingMode',
            'billingTag' => 'setBillingTag',
            'jobDirection' => 'setJobDirection',
            'jobType' => 'setJobType',
            'taskType' => 'setTaskType',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'jobMode' => 'setJobMode',
            'jobModeRole' => 'setJobModeRole',
            'isMultiAz' => 'setIsMultiAz',
            'nodeRole' => 'setNodeRole',
            'nodeNewFramework' => 'setNodeNewFramework',
            'jobAction' => 'setJobAction',
            'children' => 'setChildren'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  任务ID。
    * name  任务名称。
    * status  任务状态。取值： - CREATING：创建中。 - CREATE_FAILED：创建失败。 - CONFIGURATION：配置中。 - STARTJOBING：启动中。 - WAITING_FOR_START：等待启动中。 - START_JOB_FAILED：任务启动失败。 - FULL_TRANSFER_STARTED：全量迁移中 灾备场景为初始化。 - FULL_TRANSFER_FAILED：全量迁移失败 灾备场景为初始化失败。 - FULL_TRANSFER_COMPLETE：全量迁移完成 灾备场景为初始化完成。 - INCRE_TRANSFER_STARTED：增量迁移中 灾备场景为灾备中。 - INCRE_TRANSFER_FAILED：增量迁移失败 灾备场景为灾备异常。 - RELEASE_RESOURCE_STARTED：结束任务中。 - RELEASE_RESOURCE_FAILED：结束任务失败。 - RELEASE_RESOURCE_COMPLETE：已结束。 - CHANGE_JOB_STARTED：任务变更中。 - CHANGE_JOB_FAILED：任务变更失败。 - CHILD_TRANSFER_STARTING：子任务启动中。 - CHILD_TRANSFER_STARTED：子任务迁移中。 - CHILD_TRANSFER_COMPLETE：子任务迁移完成。 - CHILD_TRANSFER_FAILED：子任务迁移失败。 - RELEASE_CHILD_TRANSFER_STARTED：子任务结束中。 - RELEASE_CHILD_TRANSFER_COMPLETE：子任务已结束。
    * description  任务描述。
    * createTime  任务创建时间。
    * engineType  引擎类型。取值： - oracle-to-gaussdbv5：Oracle同步到GaussDB分布式版，实时同步场景使用。
    * netType  网络类型。取值： - eip：公网网络。 - vpc：VPC网络，灾备场景不支持选择VPC网络。 - vpn：VPN、专线网络。
    * chargingMode  计费模式。取值： - period：包周期。 - on_demand：按需。
    * billingTag  是否计费。
    * jobDirection  任务方向。取值： - up：入云 ，灾备场景时对应本云为备。 - down：出云，灾备场景时对应本云为主。 - non-dbs：自建。
    * jobType  任务场景。取值： - migration：实时迁移。 - sync：实时同步。 - cloudDataGuard：实时灾备。
    * taskType  任务模式。取值： - FULL_TRANS ：全量。 - FULL_INCR_TRANS：全量+增量。 - INCR_TRANS：增量。
    * enterpriseProjectId  企业项目ID。
    * jobMode  任务模式。取值： - single：单任务。 - sync_child：同步子任务。 - multi_to_single：多对一任务。
    * jobModeRole  任务角色。取值： - parent：父任务。 - child：子任务。 - master：主任务。 - slave：备任务。
    * isMultiAz  是否跨AZ任务。
    * nodeRole  任务节点角色。
    * nodeNewFramework  是否新框架。
    * jobAction  jobAction
    * children  子任务列表信息体。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'status' => 'getStatus',
            'description' => 'getDescription',
            'createTime' => 'getCreateTime',
            'engineType' => 'getEngineType',
            'netType' => 'getNetType',
            'chargingMode' => 'getChargingMode',
            'billingTag' => 'getBillingTag',
            'jobDirection' => 'getJobDirection',
            'jobType' => 'getJobType',
            'taskType' => 'getTaskType',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'jobMode' => 'getJobMode',
            'jobModeRole' => 'getJobModeRole',
            'isMultiAz' => 'getIsMultiAz',
            'nodeRole' => 'getNodeRole',
            'nodeNewFramework' => 'getNodeNewFramework',
            'jobAction' => 'getJobAction',
            'children' => 'getChildren'
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
    const ENGINE_TYPE_ORACLE_TO_GAUSSDBV5 = 'oracle-to-gaussdbv5';
    const NET_TYPE_EIP = 'eip';
    const NET_TYPE_VPC = 'vpc';
    const NET_TYPE_VPN = 'vpn';
    const CHARGING_MODE_PERIOD = 'period';
    const CHARGING_MODE_ON_DEMAND = 'on_demand';
    const JOB_DIRECTION_UP = 'up';
    const JOB_DIRECTION_DOWN = 'down';
    const JOB_DIRECTION_NON_DBS = 'non-dbs';
    const JOB_TYPE_MIGRATION = 'migration';
    const JOB_TYPE_SYNC = 'sync';
    const JOB_TYPE_CLOUD_DATA_GUARD = 'cloudDataGuard';
    const TASK_TYPE_FULL_TRANS = 'FULL_TRANS';
    const TASK_TYPE_FULL_INCR_TRANS = 'FULL_INCR_TRANS';
    const TASK_TYPE_INCR_TRANS = 'INCR_TRANS';
    const JOB_MODE_SINGLE = 'single';
    const JOB_MODE_SYNC_CHILD = 'sync_child';
    const JOB_MODE_MULTI_TO_SINGLE = 'multi_to_single';
    const JOB_MODE_ROLE_PARENT = 'parent';
    const JOB_MODE_ROLE_CHILD = 'child';
    const JOB_MODE_ROLE_MASTER = 'master';
    const JOB_MODE_ROLE_SLAVE = 'slave';
    

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
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEngineTypeAllowableValues()
    {
        return [
            self::ENGINE_TYPE_ORACLE_TO_GAUSSDBV5,
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
    public function getChargingModeAllowableValues()
    {
        return [
            self::CHARGING_MODE_PERIOD,
            self::CHARGING_MODE_ON_DEMAND,
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
    public function getJobTypeAllowableValues()
    {
        return [
            self::JOB_TYPE_MIGRATION,
            self::JOB_TYPE_SYNC,
            self::JOB_TYPE_CLOUD_DATA_GUARD,
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
    public function getJobModeAllowableValues()
    {
        return [
            self::JOB_MODE_SINGLE,
            self::JOB_MODE_SYNC_CHILD,
            self::JOB_MODE_MULTI_TO_SINGLE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getJobModeRoleAllowableValues()
    {
        return [
            self::JOB_MODE_ROLE_PARENT,
            self::JOB_MODE_ROLE_CHILD,
            self::JOB_MODE_ROLE_MASTER,
            self::JOB_MODE_ROLE_SLAVE,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['netType'] = isset($data['netType']) ? $data['netType'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['billingTag'] = isset($data['billingTag']) ? $data['billingTag'] : null;
        $this->container['jobDirection'] = isset($data['jobDirection']) ? $data['jobDirection'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['jobMode'] = isset($data['jobMode']) ? $data['jobMode'] : null;
        $this->container['jobModeRole'] = isset($data['jobModeRole']) ? $data['jobModeRole'] : null;
        $this->container['isMultiAz'] = isset($data['isMultiAz']) ? $data['isMultiAz'] : null;
        $this->container['nodeRole'] = isset($data['nodeRole']) ? $data['nodeRole'] : null;
        $this->container['nodeNewFramework'] = isset($data['nodeNewFramework']) ? $data['nodeNewFramework'] : null;
        $this->container['jobAction'] = isset($data['jobAction']) ? $data['jobAction'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
        if ($this->container['engineType'] === null) {
            $invalidProperties[] = "'engineType' can't be null";
        }
            $allowedValues = $this->getEngineTypeAllowableValues();
                if (!is_null($this->container['engineType']) && !in_array($this->container['engineType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'engineType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['netType'] === null) {
            $invalidProperties[] = "'netType' can't be null";
        }
            $allowedValues = $this->getNetTypeAllowableValues();
                if (!is_null($this->container['netType']) && !in_array($this->container['netType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'netType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['chargingMode'] === null) {
            $invalidProperties[] = "'chargingMode' can't be null";
        }
            $allowedValues = $this->getChargingModeAllowableValues();
                if (!is_null($this->container['chargingMode']) && !in_array($this->container['chargingMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chargingMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['billingTag'] === null) {
            $invalidProperties[] = "'billingTag' can't be null";
        }
        if ($this->container['jobDirection'] === null) {
            $invalidProperties[] = "'jobDirection' can't be null";
        }
            $allowedValues = $this->getJobDirectionAllowableValues();
                if (!is_null($this->container['jobDirection']) && !in_array($this->container['jobDirection'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'jobDirection', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

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

        if ($this->container['taskType'] === null) {
            $invalidProperties[] = "'taskType' can't be null";
        }
            $allowedValues = $this->getTaskTypeAllowableValues();
                if (!is_null($this->container['taskType']) && !in_array($this->container['taskType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'taskType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
        }
        if ($this->container['jobMode'] === null) {
            $invalidProperties[] = "'jobMode' can't be null";
        }
            $allowedValues = $this->getJobModeAllowableValues();
                if (!is_null($this->container['jobMode']) && !in_array($this->container['jobMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'jobMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['jobModeRole'] === null) {
            $invalidProperties[] = "'jobModeRole' can't be null";
        }
            $allowedValues = $this->getJobModeRoleAllowableValues();
                if (!is_null($this->container['jobModeRole']) && !in_array($this->container['jobModeRole'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'jobModeRole', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['isMultiAz'] === null) {
            $invalidProperties[] = "'isMultiAz' can't be null";
        }
        if ($this->container['nodeRole'] === null) {
            $invalidProperties[] = "'nodeRole' can't be null";
        }
        if ($this->container['nodeNewFramework'] === null) {
            $invalidProperties[] = "'nodeNewFramework' can't be null";
        }
        if ($this->container['jobAction'] === null) {
            $invalidProperties[] = "'jobAction' can't be null";
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
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 任务ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  任务名称。
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
    * @param string $name 任务名称。
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
    *  任务状态。取值： - CREATING：创建中。 - CREATE_FAILED：创建失败。 - CONFIGURATION：配置中。 - STARTJOBING：启动中。 - WAITING_FOR_START：等待启动中。 - START_JOB_FAILED：任务启动失败。 - FULL_TRANSFER_STARTED：全量迁移中 灾备场景为初始化。 - FULL_TRANSFER_FAILED：全量迁移失败 灾备场景为初始化失败。 - FULL_TRANSFER_COMPLETE：全量迁移完成 灾备场景为初始化完成。 - INCRE_TRANSFER_STARTED：增量迁移中 灾备场景为灾备中。 - INCRE_TRANSFER_FAILED：增量迁移失败 灾备场景为灾备异常。 - RELEASE_RESOURCE_STARTED：结束任务中。 - RELEASE_RESOURCE_FAILED：结束任务失败。 - RELEASE_RESOURCE_COMPLETE：已结束。 - CHANGE_JOB_STARTED：任务变更中。 - CHANGE_JOB_FAILED：任务变更失败。 - CHILD_TRANSFER_STARTING：子任务启动中。 - CHILD_TRANSFER_STARTED：子任务迁移中。 - CHILD_TRANSFER_COMPLETE：子任务迁移完成。 - CHILD_TRANSFER_FAILED：子任务迁移失败。 - RELEASE_CHILD_TRANSFER_STARTED：子任务结束中。 - RELEASE_CHILD_TRANSFER_COMPLETE：子任务已结束。
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
    * @param string $status 任务状态。取值： - CREATING：创建中。 - CREATE_FAILED：创建失败。 - CONFIGURATION：配置中。 - STARTJOBING：启动中。 - WAITING_FOR_START：等待启动中。 - START_JOB_FAILED：任务启动失败。 - FULL_TRANSFER_STARTED：全量迁移中 灾备场景为初始化。 - FULL_TRANSFER_FAILED：全量迁移失败 灾备场景为初始化失败。 - FULL_TRANSFER_COMPLETE：全量迁移完成 灾备场景为初始化完成。 - INCRE_TRANSFER_STARTED：增量迁移中 灾备场景为灾备中。 - INCRE_TRANSFER_FAILED：增量迁移失败 灾备场景为灾备异常。 - RELEASE_RESOURCE_STARTED：结束任务中。 - RELEASE_RESOURCE_FAILED：结束任务失败。 - RELEASE_RESOURCE_COMPLETE：已结束。 - CHANGE_JOB_STARTED：任务变更中。 - CHANGE_JOB_FAILED：任务变更失败。 - CHILD_TRANSFER_STARTING：子任务启动中。 - CHILD_TRANSFER_STARTED：子任务迁移中。 - CHILD_TRANSFER_COMPLETE：子任务迁移完成。 - CHILD_TRANSFER_FAILED：子任务迁移失败。 - RELEASE_CHILD_TRANSFER_STARTED：子任务结束中。 - RELEASE_CHILD_TRANSFER_COMPLETE：子任务已结束。
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
    *  任务描述。
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
    * @param string $description 任务描述。
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
    *  任务创建时间。
    *
    * @return string
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string $createTime 任务创建时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets engineType
    *  引擎类型。取值： - oracle-to-gaussdbv5：Oracle同步到GaussDB分布式版，实时同步场景使用。
    *
    * @return string
    */
    public function getEngineType()
    {
        return $this->container['engineType'];
    }

    /**
    * Sets engineType
    *
    * @param string $engineType 引擎类型。取值： - oracle-to-gaussdbv5：Oracle同步到GaussDB分布式版，实时同步场景使用。
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
    *  网络类型。取值： - eip：公网网络。 - vpc：VPC网络，灾备场景不支持选择VPC网络。 - vpn：VPN、专线网络。
    *
    * @return string
    */
    public function getNetType()
    {
        return $this->container['netType'];
    }

    /**
    * Sets netType
    *
    * @param string $netType 网络类型。取值： - eip：公网网络。 - vpc：VPC网络，灾备场景不支持选择VPC网络。 - vpn：VPN、专线网络。
    *
    * @return $this
    */
    public function setNetType($netType)
    {
        $this->container['netType'] = $netType;
        return $this;
    }

    /**
    * Gets chargingMode
    *  计费模式。取值： - period：包周期。 - on_demand：按需。
    *
    * @return string
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param string $chargingMode 计费模式。取值： - period：包周期。 - on_demand：按需。
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets billingTag
    *  是否计费。
    *
    * @return bool
    */
    public function getBillingTag()
    {
        return $this->container['billingTag'];
    }

    /**
    * Sets billingTag
    *
    * @param bool $billingTag 是否计费。
    *
    * @return $this
    */
    public function setBillingTag($billingTag)
    {
        $this->container['billingTag'] = $billingTag;
        return $this;
    }

    /**
    * Gets jobDirection
    *  任务方向。取值： - up：入云 ，灾备场景时对应本云为备。 - down：出云，灾备场景时对应本云为主。 - non-dbs：自建。
    *
    * @return string
    */
    public function getJobDirection()
    {
        return $this->container['jobDirection'];
    }

    /**
    * Sets jobDirection
    *
    * @param string $jobDirection 任务方向。取值： - up：入云 ，灾备场景时对应本云为备。 - down：出云，灾备场景时对应本云为主。 - non-dbs：自建。
    *
    * @return $this
    */
    public function setJobDirection($jobDirection)
    {
        $this->container['jobDirection'] = $jobDirection;
        return $this;
    }

    /**
    * Gets jobType
    *  任务场景。取值： - migration：实时迁移。 - sync：实时同步。 - cloudDataGuard：实时灾备。
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
    * @param string $jobType 任务场景。取值： - migration：实时迁移。 - sync：实时同步。 - cloudDataGuard：实时灾备。
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets taskType
    *  任务模式。取值： - FULL_TRANS ：全量。 - FULL_INCR_TRANS：全量+增量。 - INCR_TRANS：增量。
    *
    * @return string
    */
    public function getTaskType()
    {
        return $this->container['taskType'];
    }

    /**
    * Sets taskType
    *
    * @param string $taskType 任务模式。取值： - FULL_TRANS ：全量。 - FULL_INCR_TRANS：全量+增量。 - INCR_TRANS：增量。
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。
    *
    * @return string
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string $enterpriseProjectId 企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets jobMode
    *  任务模式。取值： - single：单任务。 - sync_child：同步子任务。 - multi_to_single：多对一任务。
    *
    * @return string
    */
    public function getJobMode()
    {
        return $this->container['jobMode'];
    }

    /**
    * Sets jobMode
    *
    * @param string $jobMode 任务模式。取值： - single：单任务。 - sync_child：同步子任务。 - multi_to_single：多对一任务。
    *
    * @return $this
    */
    public function setJobMode($jobMode)
    {
        $this->container['jobMode'] = $jobMode;
        return $this;
    }

    /**
    * Gets jobModeRole
    *  任务角色。取值： - parent：父任务。 - child：子任务。 - master：主任务。 - slave：备任务。
    *
    * @return string
    */
    public function getJobModeRole()
    {
        return $this->container['jobModeRole'];
    }

    /**
    * Sets jobModeRole
    *
    * @param string $jobModeRole 任务角色。取值： - parent：父任务。 - child：子任务。 - master：主任务。 - slave：备任务。
    *
    * @return $this
    */
    public function setJobModeRole($jobModeRole)
    {
        $this->container['jobModeRole'] = $jobModeRole;
        return $this;
    }

    /**
    * Gets isMultiAz
    *  是否跨AZ任务。
    *
    * @return bool
    */
    public function getIsMultiAz()
    {
        return $this->container['isMultiAz'];
    }

    /**
    * Sets isMultiAz
    *
    * @param bool $isMultiAz 是否跨AZ任务。
    *
    * @return $this
    */
    public function setIsMultiAz($isMultiAz)
    {
        $this->container['isMultiAz'] = $isMultiAz;
        return $this;
    }

    /**
    * Gets nodeRole
    *  任务节点角色。
    *
    * @return string
    */
    public function getNodeRole()
    {
        return $this->container['nodeRole'];
    }

    /**
    * Sets nodeRole
    *
    * @param string $nodeRole 任务节点角色。
    *
    * @return $this
    */
    public function setNodeRole($nodeRole)
    {
        $this->container['nodeRole'] = $nodeRole;
        return $this;
    }

    /**
    * Gets nodeNewFramework
    *  是否新框架。
    *
    * @return bool
    */
    public function getNodeNewFramework()
    {
        return $this->container['nodeNewFramework'];
    }

    /**
    * Sets nodeNewFramework
    *
    * @param bool $nodeNewFramework 是否新框架。
    *
    * @return $this
    */
    public function setNodeNewFramework($nodeNewFramework)
    {
        $this->container['nodeNewFramework'] = $nodeNewFramework;
        return $this;
    }

    /**
    * Gets jobAction
    *  jobAction
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\JobActions
    */
    public function getJobAction()
    {
        return $this->container['jobAction'];
    }

    /**
    * Sets jobAction
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\JobActions $jobAction jobAction
    *
    * @return $this
    */
    public function setJobAction($jobAction)
    {
        $this->container['jobAction'] = $jobAction;
        return $this;
    }

    /**
    * Gets children
    *  子任务列表信息体。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\ChildrenJobListResp[]|null
    */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
    * Sets children
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\ChildrenJobListResp[]|null $children 子任务列表信息体。
    *
    * @return $this
    */
    public function setChildren($children)
    {
        $this->container['children'] = $children;
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

