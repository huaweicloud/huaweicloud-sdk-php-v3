<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChildrenJobInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChildrenJobInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * billingTag  是否计费字段。
    * createTime  任务创建时间
    * dbUseType  复制场景
    * description  任务描述
    * engineType  引擎类型
    * errorMsg  任务失败原因
    * id  任务id
    * jobDirection  迁移方向
    * name  任务名称
    * netType  网络类型
    * nodeNewFramework  新框架
    * status  任务状态。 - CREATING：创建中 - CREATE_FAILED：创建失败 - CONFIGURATION：配置中 - STARTJOBING：启动中 - WAITING_FOR_START：等待启动中 - START_JOB_FAILED：启动失败 - PAUSING：已暂停 - FULL_TRANSFER_STARTED：全量开始，灾备场景下为初始化 - FULL_TRANSFER_FAILED：全量失败，灾备场景下为初始化失败 - FULL_TRANSFER_COMPLETE：全量完成，灾备场景下为初始化完成 - INCRE_TRANSFER_STARTED：增量开始，灾备场景下为灾备中 - INCRE_TRANSFER_FAILED：增量失败，灾备场景下为灾备异常 - RELEASE_RESOURCE_STARTED：结束任务中 - RELEASE_RESOURCE_FAILED：结束任务失败 - RELEASE_RESOURCE_COMPLETE：已结束 - REBUILD_NODE_STARTED：故障恢复中 - REBUILD_NODE_FAILED：故障恢复失败 - CHANGE_JOB_STARTED：任务变更中 - CHANGE_JOB_FAILED：任务变更失败 - DELETED：已删除 - CHILD_TRANSFER_STARTING：再编辑子任务启动中 - CHILD_TRANSFER_STARTED：再编辑子任务迁移中 - CHILD_TRANSFER_COMPLETE：再编辑子任务迁移完成 - CHILD_TRANSFER_FAILED：再编辑子任务迁移失败 - RELEASE_CHILD_TRANSFER_STARTED：再编辑子任务结束中 - RELEASE_CHILD_TRANSFER_COMPLETE：再编辑子任务已结束 - NODE_UPGRADE_START：升级开始 - NODE_UPGRADE_COMPLETE：升级完成 - NODE_UPGRADE_FAILED：升级失败
    * taskType  迁移模式
    * jobAction  jobAction
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'billingTag' => 'bool',
            'createTime' => 'string',
            'dbUseType' => 'string',
            'description' => 'string',
            'engineType' => 'string',
            'errorMsg' => 'string',
            'id' => 'string',
            'jobDirection' => 'string',
            'name' => 'string',
            'netType' => 'string',
            'nodeNewFramework' => 'bool',
            'status' => 'string',
            'taskType' => 'string',
            'jobAction' => '\HuaweiCloud\SDK\Drs\V3\Model\JobActionResp'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * billingTag  是否计费字段。
    * createTime  任务创建时间
    * dbUseType  复制场景
    * description  任务描述
    * engineType  引擎类型
    * errorMsg  任务失败原因
    * id  任务id
    * jobDirection  迁移方向
    * name  任务名称
    * netType  网络类型
    * nodeNewFramework  新框架
    * status  任务状态。 - CREATING：创建中 - CREATE_FAILED：创建失败 - CONFIGURATION：配置中 - STARTJOBING：启动中 - WAITING_FOR_START：等待启动中 - START_JOB_FAILED：启动失败 - PAUSING：已暂停 - FULL_TRANSFER_STARTED：全量开始，灾备场景下为初始化 - FULL_TRANSFER_FAILED：全量失败，灾备场景下为初始化失败 - FULL_TRANSFER_COMPLETE：全量完成，灾备场景下为初始化完成 - INCRE_TRANSFER_STARTED：增量开始，灾备场景下为灾备中 - INCRE_TRANSFER_FAILED：增量失败，灾备场景下为灾备异常 - RELEASE_RESOURCE_STARTED：结束任务中 - RELEASE_RESOURCE_FAILED：结束任务失败 - RELEASE_RESOURCE_COMPLETE：已结束 - REBUILD_NODE_STARTED：故障恢复中 - REBUILD_NODE_FAILED：故障恢复失败 - CHANGE_JOB_STARTED：任务变更中 - CHANGE_JOB_FAILED：任务变更失败 - DELETED：已删除 - CHILD_TRANSFER_STARTING：再编辑子任务启动中 - CHILD_TRANSFER_STARTED：再编辑子任务迁移中 - CHILD_TRANSFER_COMPLETE：再编辑子任务迁移完成 - CHILD_TRANSFER_FAILED：再编辑子任务迁移失败 - RELEASE_CHILD_TRANSFER_STARTED：再编辑子任务结束中 - RELEASE_CHILD_TRANSFER_COMPLETE：再编辑子任务已结束 - NODE_UPGRADE_START：升级开始 - NODE_UPGRADE_COMPLETE：升级完成 - NODE_UPGRADE_FAILED：升级失败
    * taskType  迁移模式
    * jobAction  jobAction
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'billingTag' => null,
        'createTime' => null,
        'dbUseType' => null,
        'description' => null,
        'engineType' => null,
        'errorMsg' => null,
        'id' => null,
        'jobDirection' => null,
        'name' => null,
        'netType' => null,
        'nodeNewFramework' => null,
        'status' => null,
        'taskType' => null,
        'jobAction' => null
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
    * billingTag  是否计费字段。
    * createTime  任务创建时间
    * dbUseType  复制场景
    * description  任务描述
    * engineType  引擎类型
    * errorMsg  任务失败原因
    * id  任务id
    * jobDirection  迁移方向
    * name  任务名称
    * netType  网络类型
    * nodeNewFramework  新框架
    * status  任务状态。 - CREATING：创建中 - CREATE_FAILED：创建失败 - CONFIGURATION：配置中 - STARTJOBING：启动中 - WAITING_FOR_START：等待启动中 - START_JOB_FAILED：启动失败 - PAUSING：已暂停 - FULL_TRANSFER_STARTED：全量开始，灾备场景下为初始化 - FULL_TRANSFER_FAILED：全量失败，灾备场景下为初始化失败 - FULL_TRANSFER_COMPLETE：全量完成，灾备场景下为初始化完成 - INCRE_TRANSFER_STARTED：增量开始，灾备场景下为灾备中 - INCRE_TRANSFER_FAILED：增量失败，灾备场景下为灾备异常 - RELEASE_RESOURCE_STARTED：结束任务中 - RELEASE_RESOURCE_FAILED：结束任务失败 - RELEASE_RESOURCE_COMPLETE：已结束 - REBUILD_NODE_STARTED：故障恢复中 - REBUILD_NODE_FAILED：故障恢复失败 - CHANGE_JOB_STARTED：任务变更中 - CHANGE_JOB_FAILED：任务变更失败 - DELETED：已删除 - CHILD_TRANSFER_STARTING：再编辑子任务启动中 - CHILD_TRANSFER_STARTED：再编辑子任务迁移中 - CHILD_TRANSFER_COMPLETE：再编辑子任务迁移完成 - CHILD_TRANSFER_FAILED：再编辑子任务迁移失败 - RELEASE_CHILD_TRANSFER_STARTED：再编辑子任务结束中 - RELEASE_CHILD_TRANSFER_COMPLETE：再编辑子任务已结束 - NODE_UPGRADE_START：升级开始 - NODE_UPGRADE_COMPLETE：升级完成 - NODE_UPGRADE_FAILED：升级失败
    * taskType  迁移模式
    * jobAction  jobAction
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'billingTag' => 'billing_tag',
            'createTime' => 'create_time',
            'dbUseType' => 'db_use_type',
            'description' => 'description',
            'engineType' => 'engine_type',
            'errorMsg' => 'error_msg',
            'id' => 'id',
            'jobDirection' => 'job_direction',
            'name' => 'name',
            'netType' => 'net_type',
            'nodeNewFramework' => 'node_newFramework',
            'status' => 'status',
            'taskType' => 'task_type',
            'jobAction' => 'job_action'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * billingTag  是否计费字段。
    * createTime  任务创建时间
    * dbUseType  复制场景
    * description  任务描述
    * engineType  引擎类型
    * errorMsg  任务失败原因
    * id  任务id
    * jobDirection  迁移方向
    * name  任务名称
    * netType  网络类型
    * nodeNewFramework  新框架
    * status  任务状态。 - CREATING：创建中 - CREATE_FAILED：创建失败 - CONFIGURATION：配置中 - STARTJOBING：启动中 - WAITING_FOR_START：等待启动中 - START_JOB_FAILED：启动失败 - PAUSING：已暂停 - FULL_TRANSFER_STARTED：全量开始，灾备场景下为初始化 - FULL_TRANSFER_FAILED：全量失败，灾备场景下为初始化失败 - FULL_TRANSFER_COMPLETE：全量完成，灾备场景下为初始化完成 - INCRE_TRANSFER_STARTED：增量开始，灾备场景下为灾备中 - INCRE_TRANSFER_FAILED：增量失败，灾备场景下为灾备异常 - RELEASE_RESOURCE_STARTED：结束任务中 - RELEASE_RESOURCE_FAILED：结束任务失败 - RELEASE_RESOURCE_COMPLETE：已结束 - REBUILD_NODE_STARTED：故障恢复中 - REBUILD_NODE_FAILED：故障恢复失败 - CHANGE_JOB_STARTED：任务变更中 - CHANGE_JOB_FAILED：任务变更失败 - DELETED：已删除 - CHILD_TRANSFER_STARTING：再编辑子任务启动中 - CHILD_TRANSFER_STARTED：再编辑子任务迁移中 - CHILD_TRANSFER_COMPLETE：再编辑子任务迁移完成 - CHILD_TRANSFER_FAILED：再编辑子任务迁移失败 - RELEASE_CHILD_TRANSFER_STARTED：再编辑子任务结束中 - RELEASE_CHILD_TRANSFER_COMPLETE：再编辑子任务已结束 - NODE_UPGRADE_START：升级开始 - NODE_UPGRADE_COMPLETE：升级完成 - NODE_UPGRADE_FAILED：升级失败
    * taskType  迁移模式
    * jobAction  jobAction
    *
    * @var string[]
    */
    protected static $setters = [
            'billingTag' => 'setBillingTag',
            'createTime' => 'setCreateTime',
            'dbUseType' => 'setDbUseType',
            'description' => 'setDescription',
            'engineType' => 'setEngineType',
            'errorMsg' => 'setErrorMsg',
            'id' => 'setId',
            'jobDirection' => 'setJobDirection',
            'name' => 'setName',
            'netType' => 'setNetType',
            'nodeNewFramework' => 'setNodeNewFramework',
            'status' => 'setStatus',
            'taskType' => 'setTaskType',
            'jobAction' => 'setJobAction'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * billingTag  是否计费字段。
    * createTime  任务创建时间
    * dbUseType  复制场景
    * description  任务描述
    * engineType  引擎类型
    * errorMsg  任务失败原因
    * id  任务id
    * jobDirection  迁移方向
    * name  任务名称
    * netType  网络类型
    * nodeNewFramework  新框架
    * status  任务状态。 - CREATING：创建中 - CREATE_FAILED：创建失败 - CONFIGURATION：配置中 - STARTJOBING：启动中 - WAITING_FOR_START：等待启动中 - START_JOB_FAILED：启动失败 - PAUSING：已暂停 - FULL_TRANSFER_STARTED：全量开始，灾备场景下为初始化 - FULL_TRANSFER_FAILED：全量失败，灾备场景下为初始化失败 - FULL_TRANSFER_COMPLETE：全量完成，灾备场景下为初始化完成 - INCRE_TRANSFER_STARTED：增量开始，灾备场景下为灾备中 - INCRE_TRANSFER_FAILED：增量失败，灾备场景下为灾备异常 - RELEASE_RESOURCE_STARTED：结束任务中 - RELEASE_RESOURCE_FAILED：结束任务失败 - RELEASE_RESOURCE_COMPLETE：已结束 - REBUILD_NODE_STARTED：故障恢复中 - REBUILD_NODE_FAILED：故障恢复失败 - CHANGE_JOB_STARTED：任务变更中 - CHANGE_JOB_FAILED：任务变更失败 - DELETED：已删除 - CHILD_TRANSFER_STARTING：再编辑子任务启动中 - CHILD_TRANSFER_STARTED：再编辑子任务迁移中 - CHILD_TRANSFER_COMPLETE：再编辑子任务迁移完成 - CHILD_TRANSFER_FAILED：再编辑子任务迁移失败 - RELEASE_CHILD_TRANSFER_STARTED：再编辑子任务结束中 - RELEASE_CHILD_TRANSFER_COMPLETE：再编辑子任务已结束 - NODE_UPGRADE_START：升级开始 - NODE_UPGRADE_COMPLETE：升级完成 - NODE_UPGRADE_FAILED：升级失败
    * taskType  迁移模式
    * jobAction  jobAction
    *
    * @var string[]
    */
    protected static $getters = [
            'billingTag' => 'getBillingTag',
            'createTime' => 'getCreateTime',
            'dbUseType' => 'getDbUseType',
            'description' => 'getDescription',
            'engineType' => 'getEngineType',
            'errorMsg' => 'getErrorMsg',
            'id' => 'getId',
            'jobDirection' => 'getJobDirection',
            'name' => 'getName',
            'netType' => 'getNetType',
            'nodeNewFramework' => 'getNodeNewFramework',
            'status' => 'getStatus',
            'taskType' => 'getTaskType',
            'jobAction' => 'getJobAction'
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
    const DB_USE_TYPE_MIGRATION = 'migration';
    const DB_USE_TYPE_SYNC = 'sync';
    const DB_USE_TYPE_CLOUD_DATA_GUARD = 'cloudDataGuard';
    const ENGINE_TYPE_CLOUD_DATA_GUARD_CASSANDRA = 'cloudDataGuard-cassandra';
    const ENGINE_TYPE_CLOUD_DATA_GUARD_DDM = 'cloudDataGuard-ddm';
    const ENGINE_TYPE_CLOUD_DATA_GUARD_TAURUS_TO_MYSQL = 'cloudDataGuard-taurus-to-mysql';
    const ENGINE_TYPE_CLOUD_DATA_GUARD_MYSQL = 'cloudDataGuard-mysql';
    const ENGINE_TYPE_CLOUD_DATA_GUARD_MYSQL_TO_TAURUS = 'cloudDataGuard-mysql-to-taurus';
    const JOB_DIRECTION_UP = 'up';
    const JOB_DIRECTION_DOWN = 'down';
    const JOB_DIRECTION_NO_DBS = 'no-dbs';
    const NET_TYPE_VPC = 'vpc';
    const NET_TYPE_VPN = 'vpn';
    const NET_TYPE_EIP = 'eip';
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
    public function getEngineTypeAllowableValues()
    {
        return [
            self::ENGINE_TYPE_CLOUD_DATA_GUARD_CASSANDRA,
            self::ENGINE_TYPE_CLOUD_DATA_GUARD_DDM,
            self::ENGINE_TYPE_CLOUD_DATA_GUARD_TAURUS_TO_MYSQL,
            self::ENGINE_TYPE_CLOUD_DATA_GUARD_MYSQL,
            self::ENGINE_TYPE_CLOUD_DATA_GUARD_MYSQL_TO_TAURUS,
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
            self::JOB_DIRECTION_NO_DBS,
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
            self::NET_TYPE_VPC,
            self::NET_TYPE_VPN,
            self::NET_TYPE_EIP,
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
        $this->container['billingTag'] = isset($data['billingTag']) ? $data['billingTag'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['dbUseType'] = isset($data['dbUseType']) ? $data['dbUseType'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['jobDirection'] = isset($data['jobDirection']) ? $data['jobDirection'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['netType'] = isset($data['netType']) ? $data['netType'] : null;
        $this->container['nodeNewFramework'] = isset($data['nodeNewFramework']) ? $data['nodeNewFramework'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['jobAction'] = isset($data['jobAction']) ? $data['jobAction'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getDbUseTypeAllowableValues();
                if (!is_null($this->container['dbUseType']) && !in_array($this->container['dbUseType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dbUseType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getEngineTypeAllowableValues();
                if (!is_null($this->container['engineType']) && !in_array($this->container['engineType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'engineType', must be one of '%s'",
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

            $allowedValues = $this->getNetTypeAllowableValues();
                if (!is_null($this->container['netType']) && !in_array($this->container['netType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'netType', must be one of '%s'",
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
    * Gets billingTag
    *  是否计费字段。
    *
    * @return bool|null
    */
    public function getBillingTag()
    {
        return $this->container['billingTag'];
    }

    /**
    * Sets billingTag
    *
    * @param bool|null $billingTag 是否计费字段。
    *
    * @return $this
    */
    public function setBillingTag($billingTag)
    {
        $this->container['billingTag'] = $billingTag;
        return $this;
    }

    /**
    * Gets createTime
    *  任务创建时间
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
    * @param string|null $createTime 任务创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets dbUseType
    *  复制场景
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
    * @param string|null $dbUseType 复制场景
    *
    * @return $this
    */
    public function setDbUseType($dbUseType)
    {
        $this->container['dbUseType'] = $dbUseType;
        return $this;
    }

    /**
    * Gets description
    *  任务描述
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
    * @param string|null $description 任务描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets engineType
    *  引擎类型
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
    * @param string|null $engineType 引擎类型
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
        return $this;
    }

    /**
    * Gets errorMsg
    *  任务失败原因
    *
    * @return string|null
    */
    public function getErrorMsg()
    {
        return $this->container['errorMsg'];
    }

    /**
    * Sets errorMsg
    *
    * @param string|null $errorMsg 任务失败原因
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
        return $this;
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
    * Gets jobDirection
    *  迁移方向
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
    * @param string|null $jobDirection 迁移方向
    *
    * @return $this
    */
    public function setJobDirection($jobDirection)
    {
        $this->container['jobDirection'] = $jobDirection;
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
    * Gets nodeNewFramework
    *  新框架
    *
    * @return bool|null
    */
    public function getNodeNewFramework()
    {
        return $this->container['nodeNewFramework'];
    }

    /**
    * Sets nodeNewFramework
    *
    * @param bool|null $nodeNewFramework 新框架
    *
    * @return $this
    */
    public function setNodeNewFramework($nodeNewFramework)
    {
        $this->container['nodeNewFramework'] = $nodeNewFramework;
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
    * Gets jobAction
    *  jobAction
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\JobActionResp|null
    */
    public function getJobAction()
    {
        return $this->container['jobAction'];
    }

    /**
    * Sets jobAction
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\JobActionResp|null $jobAction jobAction
    *
    * @return $this
    */
    public function setJobAction($jobAction)
    {
        $this->container['jobAction'] = $jobAction;
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

