<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobInfoRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobInfoRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  作业名称，只能包含六种字符：英文字母、数字、中文、中划线、下划线和点号。作业名称不能重复。
    * nodes  节点清单
    * schedule  schedule
    * params  作业参数清单
    * logPath  日志路径
    * directory  目录路径
    * processType  作业类型:  - REAL_TIME: 实时处理  - BATCH: 批处理
    * singleNodeJobFlag  是否选择单任务，默认为false
    * singleNodeJobType  单任务类型
    * createUser  创建用户
    * owner  责任人
    * priority  优先级
    * lastUpdateUser  作业最后修改人
    * targetStatus  在开启审批开关后，需要填写该字段。表示创建作业的目标状态。  - SAVED: 保存态，表示作业仅保存，无法调度运行，需要提交并审核通过后才能运行。  - SUBMITTED: 提交态，表示作业保存后会自动提交，需要审核通过才能运行。  - PRODUCTION: 生产态，表示作业跳过审批环节，创建后可以直接运行。注意：只有工作空间的管理员用户才能创建生产态的作业。
    * approvers  作业审批人
    * basicConfig  basicConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'nodes' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\Node[]',
            'schedule' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\Schedule',
            'params' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\JobParam[]',
            'logPath' => 'string',
            'directory' => 'string',
            'processType' => 'string',
            'singleNodeJobFlag' => 'bool',
            'singleNodeJobType' => 'string',
            'createUser' => 'string',
            'owner' => 'string',
            'priority' => 'string',
            'lastUpdateUser' => 'string',
            'targetStatus' => 'string',
            'approvers' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\Approver[]',
            'basicConfig' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BasicInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  作业名称，只能包含六种字符：英文字母、数字、中文、中划线、下划线和点号。作业名称不能重复。
    * nodes  节点清单
    * schedule  schedule
    * params  作业参数清单
    * logPath  日志路径
    * directory  目录路径
    * processType  作业类型:  - REAL_TIME: 实时处理  - BATCH: 批处理
    * singleNodeJobFlag  是否选择单任务，默认为false
    * singleNodeJobType  单任务类型
    * createUser  创建用户
    * owner  责任人
    * priority  优先级
    * lastUpdateUser  作业最后修改人
    * targetStatus  在开启审批开关后，需要填写该字段。表示创建作业的目标状态。  - SAVED: 保存态，表示作业仅保存，无法调度运行，需要提交并审核通过后才能运行。  - SUBMITTED: 提交态，表示作业保存后会自动提交，需要审核通过才能运行。  - PRODUCTION: 生产态，表示作业跳过审批环节，创建后可以直接运行。注意：只有工作空间的管理员用户才能创建生产态的作业。
    * approvers  作业审批人
    * basicConfig  basicConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'nodes' => null,
        'schedule' => null,
        'params' => null,
        'logPath' => null,
        'directory' => null,
        'processType' => null,
        'singleNodeJobFlag' => null,
        'singleNodeJobType' => null,
        'createUser' => null,
        'owner' => null,
        'priority' => null,
        'lastUpdateUser' => null,
        'targetStatus' => null,
        'approvers' => null,
        'basicConfig' => null
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
    * name  作业名称，只能包含六种字符：英文字母、数字、中文、中划线、下划线和点号。作业名称不能重复。
    * nodes  节点清单
    * schedule  schedule
    * params  作业参数清单
    * logPath  日志路径
    * directory  目录路径
    * processType  作业类型:  - REAL_TIME: 实时处理  - BATCH: 批处理
    * singleNodeJobFlag  是否选择单任务，默认为false
    * singleNodeJobType  单任务类型
    * createUser  创建用户
    * owner  责任人
    * priority  优先级
    * lastUpdateUser  作业最后修改人
    * targetStatus  在开启审批开关后，需要填写该字段。表示创建作业的目标状态。  - SAVED: 保存态，表示作业仅保存，无法调度运行，需要提交并审核通过后才能运行。  - SUBMITTED: 提交态，表示作业保存后会自动提交，需要审核通过才能运行。  - PRODUCTION: 生产态，表示作业跳过审批环节，创建后可以直接运行。注意：只有工作空间的管理员用户才能创建生产态的作业。
    * approvers  作业审批人
    * basicConfig  basicConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'nodes' => 'nodes',
            'schedule' => 'schedule',
            'params' => 'params',
            'logPath' => 'log_path',
            'directory' => 'directory',
            'processType' => 'process_type',
            'singleNodeJobFlag' => 'single_node_job_flag',
            'singleNodeJobType' => 'single_node_job_type',
            'createUser' => 'create_user',
            'owner' => 'owner',
            'priority' => 'priority',
            'lastUpdateUser' => 'last_update_user',
            'targetStatus' => 'target_status',
            'approvers' => 'approvers',
            'basicConfig' => 'basic_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  作业名称，只能包含六种字符：英文字母、数字、中文、中划线、下划线和点号。作业名称不能重复。
    * nodes  节点清单
    * schedule  schedule
    * params  作业参数清单
    * logPath  日志路径
    * directory  目录路径
    * processType  作业类型:  - REAL_TIME: 实时处理  - BATCH: 批处理
    * singleNodeJobFlag  是否选择单任务，默认为false
    * singleNodeJobType  单任务类型
    * createUser  创建用户
    * owner  责任人
    * priority  优先级
    * lastUpdateUser  作业最后修改人
    * targetStatus  在开启审批开关后，需要填写该字段。表示创建作业的目标状态。  - SAVED: 保存态，表示作业仅保存，无法调度运行，需要提交并审核通过后才能运行。  - SUBMITTED: 提交态，表示作业保存后会自动提交，需要审核通过才能运行。  - PRODUCTION: 生产态，表示作业跳过审批环节，创建后可以直接运行。注意：只有工作空间的管理员用户才能创建生产态的作业。
    * approvers  作业审批人
    * basicConfig  basicConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'nodes' => 'setNodes',
            'schedule' => 'setSchedule',
            'params' => 'setParams',
            'logPath' => 'setLogPath',
            'directory' => 'setDirectory',
            'processType' => 'setProcessType',
            'singleNodeJobFlag' => 'setSingleNodeJobFlag',
            'singleNodeJobType' => 'setSingleNodeJobType',
            'createUser' => 'setCreateUser',
            'owner' => 'setOwner',
            'priority' => 'setPriority',
            'lastUpdateUser' => 'setLastUpdateUser',
            'targetStatus' => 'setTargetStatus',
            'approvers' => 'setApprovers',
            'basicConfig' => 'setBasicConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  作业名称，只能包含六种字符：英文字母、数字、中文、中划线、下划线和点号。作业名称不能重复。
    * nodes  节点清单
    * schedule  schedule
    * params  作业参数清单
    * logPath  日志路径
    * directory  目录路径
    * processType  作业类型:  - REAL_TIME: 实时处理  - BATCH: 批处理
    * singleNodeJobFlag  是否选择单任务，默认为false
    * singleNodeJobType  单任务类型
    * createUser  创建用户
    * owner  责任人
    * priority  优先级
    * lastUpdateUser  作业最后修改人
    * targetStatus  在开启审批开关后，需要填写该字段。表示创建作业的目标状态。  - SAVED: 保存态，表示作业仅保存，无法调度运行，需要提交并审核通过后才能运行。  - SUBMITTED: 提交态，表示作业保存后会自动提交，需要审核通过才能运行。  - PRODUCTION: 生产态，表示作业跳过审批环节，创建后可以直接运行。注意：只有工作空间的管理员用户才能创建生产态的作业。
    * approvers  作业审批人
    * basicConfig  basicConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'nodes' => 'getNodes',
            'schedule' => 'getSchedule',
            'params' => 'getParams',
            'logPath' => 'getLogPath',
            'directory' => 'getDirectory',
            'processType' => 'getProcessType',
            'singleNodeJobFlag' => 'getSingleNodeJobFlag',
            'singleNodeJobType' => 'getSingleNodeJobType',
            'createUser' => 'getCreateUser',
            'owner' => 'getOwner',
            'priority' => 'getPriority',
            'lastUpdateUser' => 'getLastUpdateUser',
            'targetStatus' => 'getTargetStatus',
            'approvers' => 'getApprovers',
            'basicConfig' => 'getBasicConfig'
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
    const PROCESS_TYPE_BATCH = 'BATCH';
    const PROCESS_TYPE_REAL_TIME = 'REAL_TIME';
    const SINGLE_NODE_JOB_TYPE_DLI_SQL = 'DliSQL';
    const SINGLE_NODE_JOB_TYPE_DWS_SQL = 'DwsSQL';
    const SINGLE_NODE_JOB_TYPE_HIVE_SQL = 'HiveSQL';
    const SINGLE_NODE_JOB_TYPE_SPARK_SQL = 'SparkSQL';
    const SINGLE_NODE_JOB_TYPE_RDS_SQL = 'RdsSQL';
    const SINGLE_NODE_JOB_TYPE_DORIS_SQL = 'DorisSQL';
    const SINGLE_NODE_JOB_TYPE_ASSIGNMENT = 'ASSIGNMENT';
    const SINGLE_NODE_JOB_TYPE_BRANCH = 'BRANCH';
    const SINGLE_NODE_JOB_TYPE_MERGE = 'MERGE';
    const SINGLE_NODE_JOB_TYPE_NORMAL_JOB = 'NormalJob';
    const SINGLE_NODE_JOB_TYPE_ONE_CLICK = 'OneClick';
    const SINGLE_NODE_JOB_TYPE_MRS_FLINK = 'MrsFlink';
    const SINGLE_NODE_JOB_TYPE_FLINK_SQL = 'FlinkSQL';
    const SINGLE_NODE_JOB_TYPE_FLINK_JAR = 'FlinkJar';
    const SINGLE_NODE_JOB_TYPE_DLI_SPARK = 'DLISpark';
    const TARGET_STATUS_SAVED = 'SAVED';
    const TARGET_STATUS_SUBMITTED = 'SUBMITTED';
    const TARGET_STATUS_PRODUCTION = 'PRODUCTION';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProcessTypeAllowableValues()
    {
        return [
            self::PROCESS_TYPE_BATCH,
            self::PROCESS_TYPE_REAL_TIME,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSingleNodeJobTypeAllowableValues()
    {
        return [
            self::SINGLE_NODE_JOB_TYPE_DLI_SQL,
            self::SINGLE_NODE_JOB_TYPE_DWS_SQL,
            self::SINGLE_NODE_JOB_TYPE_HIVE_SQL,
            self::SINGLE_NODE_JOB_TYPE_SPARK_SQL,
            self::SINGLE_NODE_JOB_TYPE_RDS_SQL,
            self::SINGLE_NODE_JOB_TYPE_DORIS_SQL,
            self::SINGLE_NODE_JOB_TYPE_ASSIGNMENT,
            self::SINGLE_NODE_JOB_TYPE_BRANCH,
            self::SINGLE_NODE_JOB_TYPE_MERGE,
            self::SINGLE_NODE_JOB_TYPE_NORMAL_JOB,
            self::SINGLE_NODE_JOB_TYPE_ONE_CLICK,
            self::SINGLE_NODE_JOB_TYPE_MRS_FLINK,
            self::SINGLE_NODE_JOB_TYPE_FLINK_SQL,
            self::SINGLE_NODE_JOB_TYPE_FLINK_JAR,
            self::SINGLE_NODE_JOB_TYPE_DLI_SPARK,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTargetStatusAllowableValues()
    {
        return [
            self::TARGET_STATUS_SAVED,
            self::TARGET_STATUS_SUBMITTED,
            self::TARGET_STATUS_PRODUCTION,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nodes'] = isset($data['nodes']) ? $data['nodes'] : null;
        $this->container['schedule'] = isset($data['schedule']) ? $data['schedule'] : null;
        $this->container['params'] = isset($data['params']) ? $data['params'] : null;
        $this->container['logPath'] = isset($data['logPath']) ? $data['logPath'] : null;
        $this->container['directory'] = isset($data['directory']) ? $data['directory'] : null;
        $this->container['processType'] = isset($data['processType']) ? $data['processType'] : null;
        $this->container['singleNodeJobFlag'] = isset($data['singleNodeJobFlag']) ? $data['singleNodeJobFlag'] : null;
        $this->container['singleNodeJobType'] = isset($data['singleNodeJobType']) ? $data['singleNodeJobType'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['lastUpdateUser'] = isset($data['lastUpdateUser']) ? $data['lastUpdateUser'] : null;
        $this->container['targetStatus'] = isset($data['targetStatus']) ? $data['targetStatus'] : null;
        $this->container['approvers'] = isset($data['approvers']) ? $data['approvers'] : null;
        $this->container['basicConfig'] = isset($data['basicConfig']) ? $data['basicConfig'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
        if ($this->container['nodes'] === null) {
            $invalidProperties[] = "'nodes' can't be null";
        }
        if ($this->container['schedule'] === null) {
            $invalidProperties[] = "'schedule' can't be null";
        }
        if ($this->container['processType'] === null) {
            $invalidProperties[] = "'processType' can't be null";
        }
            $allowedValues = $this->getProcessTypeAllowableValues();
                if (!is_null($this->container['processType']) && !in_array($this->container['processType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'processType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSingleNodeJobTypeAllowableValues();
                if (!is_null($this->container['singleNodeJobType']) && !in_array($this->container['singleNodeJobType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'singleNodeJobType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getTargetStatusAllowableValues();
                if (!is_null($this->container['targetStatus']) && !in_array($this->container['targetStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'targetStatus', must be one of '%s'",
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
    * Gets name
    *  作业名称，只能包含六种字符：英文字母、数字、中文、中划线、下划线和点号。作业名称不能重复。
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
    * @param string $name 作业名称，只能包含六种字符：英文字母、数字、中文、中划线、下划线和点号。作业名称不能重复。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets nodes
    *  节点清单
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Node[]
    */
    public function getNodes()
    {
        return $this->container['nodes'];
    }

    /**
    * Sets nodes
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Node[] $nodes 节点清单
    *
    * @return $this
    */
    public function setNodes($nodes)
    {
        $this->container['nodes'] = $nodes;
        return $this;
    }

    /**
    * Gets schedule
    *  schedule
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Schedule
    */
    public function getSchedule()
    {
        return $this->container['schedule'];
    }

    /**
    * Sets schedule
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Schedule $schedule schedule
    *
    * @return $this
    */
    public function setSchedule($schedule)
    {
        $this->container['schedule'] = $schedule;
        return $this;
    }

    /**
    * Gets params
    *  作业参数清单
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\JobParam[]|null
    */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
    * Sets params
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\JobParam[]|null $params 作业参数清单
    *
    * @return $this
    */
    public function setParams($params)
    {
        $this->container['params'] = $params;
        return $this;
    }

    /**
    * Gets logPath
    *  日志路径
    *
    * @return string|null
    */
    public function getLogPath()
    {
        return $this->container['logPath'];
    }

    /**
    * Sets logPath
    *
    * @param string|null $logPath 日志路径
    *
    * @return $this
    */
    public function setLogPath($logPath)
    {
        $this->container['logPath'] = $logPath;
        return $this;
    }

    /**
    * Gets directory
    *  目录路径
    *
    * @return string|null
    */
    public function getDirectory()
    {
        return $this->container['directory'];
    }

    /**
    * Sets directory
    *
    * @param string|null $directory 目录路径
    *
    * @return $this
    */
    public function setDirectory($directory)
    {
        $this->container['directory'] = $directory;
        return $this;
    }

    /**
    * Gets processType
    *  作业类型:  - REAL_TIME: 实时处理  - BATCH: 批处理
    *
    * @return string
    */
    public function getProcessType()
    {
        return $this->container['processType'];
    }

    /**
    * Sets processType
    *
    * @param string $processType 作业类型:  - REAL_TIME: 实时处理  - BATCH: 批处理
    *
    * @return $this
    */
    public function setProcessType($processType)
    {
        $this->container['processType'] = $processType;
        return $this;
    }

    /**
    * Gets singleNodeJobFlag
    *  是否选择单任务，默认为false
    *
    * @return bool|null
    */
    public function getSingleNodeJobFlag()
    {
        return $this->container['singleNodeJobFlag'];
    }

    /**
    * Sets singleNodeJobFlag
    *
    * @param bool|null $singleNodeJobFlag 是否选择单任务，默认为false
    *
    * @return $this
    */
    public function setSingleNodeJobFlag($singleNodeJobFlag)
    {
        $this->container['singleNodeJobFlag'] = $singleNodeJobFlag;
        return $this;
    }

    /**
    * Gets singleNodeJobType
    *  单任务类型
    *
    * @return string|null
    */
    public function getSingleNodeJobType()
    {
        return $this->container['singleNodeJobType'];
    }

    /**
    * Sets singleNodeJobType
    *
    * @param string|null $singleNodeJobType 单任务类型
    *
    * @return $this
    */
    public function setSingleNodeJobType($singleNodeJobType)
    {
        $this->container['singleNodeJobType'] = $singleNodeJobType;
        return $this;
    }

    /**
    * Gets createUser
    *  创建用户
    *
    * @return string|null
    */
    public function getCreateUser()
    {
        return $this->container['createUser'];
    }

    /**
    * Sets createUser
    *
    * @param string|null $createUser 创建用户
    *
    * @return $this
    */
    public function setCreateUser($createUser)
    {
        $this->container['createUser'] = $createUser;
        return $this;
    }

    /**
    * Gets owner
    *  责任人
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner 责任人
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets priority
    *  优先级
    *
    * @return string|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param string|null $priority 优先级
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets lastUpdateUser
    *  作业最后修改人
    *
    * @return string|null
    */
    public function getLastUpdateUser()
    {
        return $this->container['lastUpdateUser'];
    }

    /**
    * Sets lastUpdateUser
    *
    * @param string|null $lastUpdateUser 作业最后修改人
    *
    * @return $this
    */
    public function setLastUpdateUser($lastUpdateUser)
    {
        $this->container['lastUpdateUser'] = $lastUpdateUser;
        return $this;
    }

    /**
    * Gets targetStatus
    *  在开启审批开关后，需要填写该字段。表示创建作业的目标状态。  - SAVED: 保存态，表示作业仅保存，无法调度运行，需要提交并审核通过后才能运行。  - SUBMITTED: 提交态，表示作业保存后会自动提交，需要审核通过才能运行。  - PRODUCTION: 生产态，表示作业跳过审批环节，创建后可以直接运行。注意：只有工作空间的管理员用户才能创建生产态的作业。
    *
    * @return string|null
    */
    public function getTargetStatus()
    {
        return $this->container['targetStatus'];
    }

    /**
    * Sets targetStatus
    *
    * @param string|null $targetStatus 在开启审批开关后，需要填写该字段。表示创建作业的目标状态。  - SAVED: 保存态，表示作业仅保存，无法调度运行，需要提交并审核通过后才能运行。  - SUBMITTED: 提交态，表示作业保存后会自动提交，需要审核通过才能运行。  - PRODUCTION: 生产态，表示作业跳过审批环节，创建后可以直接运行。注意：只有工作空间的管理员用户才能创建生产态的作业。
    *
    * @return $this
    */
    public function setTargetStatus($targetStatus)
    {
        $this->container['targetStatus'] = $targetStatus;
        return $this;
    }

    /**
    * Gets approvers
    *  作业审批人
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Approver[]|null
    */
    public function getApprovers()
    {
        return $this->container['approvers'];
    }

    /**
    * Sets approvers
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Approver[]|null $approvers 作业审批人
    *
    * @return $this
    */
    public function setApprovers($approvers)
    {
        $this->container['approvers'] = $approvers;
        return $this;
    }

    /**
    * Gets basicConfig
    *  basicConfig
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BasicInfo|null
    */
    public function getBasicConfig()
    {
        return $this->container['basicConfig'];
    }

    /**
    * Sets basicConfig
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BasicInfo|null $basicConfig basicConfig
    *
    * @return $this
    */
    public function setBasicConfig($basicConfig)
    {
        $this->container['basicConfig'] = $basicConfig;
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

