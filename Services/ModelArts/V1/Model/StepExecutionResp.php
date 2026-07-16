<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StepExecutionResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StepExecutionResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * stepName  **参数解释**：节点的名称，在一个DAG中唯一。 **取值范围**：不涉及。
    * executionName  **参数解释**：执行记录的名称。 **取值范围**：不涉及。
    * name  **参数解释**：执行记录与节点的组合名称。 **取值范围**：不涉及。
    * uuid  **参数解释**：唯一标识uuid。创建节点执行时，后台自动生成。 **取值范围**：不涉及。
    * executionUuid  **参数解释**：执行记录的UUID。 **取值范围**：不涉及。
    * createdAt  **参数解释**：Execution执行的创建时间。 **取值范围**：不涉及。
    * updatedAt  **参数解释**：Execution执行的更新时间。 **取值范围**：不涉及。
    * duration  **参数解释**：Execution执行的运行时长。 **取值范围**：不涉及。
    * type  **参数解释**：节点的类型。 **取值范围**：枚举值如下: - job：训练 - labeling：标注 - release_dataset：数据集发布 - model：模型发布 - service：服务部署 - mrs_job：MRS作业 - dataset_import：数据集导入 - create_dataset：创建数据集
    * instanceId  **参数解释**：实例ID。 **取值范围**：不涉及。
    * status  **参数解释**：节点的状态。 **取值范围**：枚举值如下： - init：初始化 - wait_inputs：等待输入 - pending：等待 - creating：创建中 - created：创建成功 - create_failed：创建失败 - running：运行中 - stopping：停止中 - stopped：停止 - timeout：超时 - completed：完成 - failed：失败 - hold：暂停 - skipped：跳过
    * inputs  **参数解释**：节点的输入项。
    * outputs  **参数解释**：节点的输出项。
    * stepUuid  **参数解释**：节点的UUID，唯一性标识。 **取值范围**：不涉及。
    * properties  **参数解释**：节点的属性。
    * events  **参数解释**：节点发生的事件。
    * errorInfo  errorInfo
    * policy  policy
    * conditionsExecution  conditionsExecution
    * stepTitle  **参数解释**：节点标题。 **取值范围**：不涉及。
    * conditions  **参数解释**：条件节点执行条件。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'stepName' => 'string',
            'executionName' => 'string',
            'name' => 'string',
            'uuid' => 'string',
            'executionUuid' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'duration' => 'int',
            'type' => 'string',
            'instanceId' => 'string',
            'status' => 'string',
            'inputs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\JobInputResp[]',
            'outputs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\JobOutputResp[]',
            'stepUuid' => 'string',
            'properties' => 'map[string,string]',
            'events' => 'string[]',
            'errorInfo' => '\HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowErrorInfoResp',
            'policy' => '\HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowStepExecutionPolicyResp',
            'conditionsExecution' => '\HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowConditionExecutionResp',
            'stepTitle' => 'string',
            'conditions' => '\HuaweiCloud\SDK\ModelArts\V1\Model\StepConditionResp[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * stepName  **参数解释**：节点的名称，在一个DAG中唯一。 **取值范围**：不涉及。
    * executionName  **参数解释**：执行记录的名称。 **取值范围**：不涉及。
    * name  **参数解释**：执行记录与节点的组合名称。 **取值范围**：不涉及。
    * uuid  **参数解释**：唯一标识uuid。创建节点执行时，后台自动生成。 **取值范围**：不涉及。
    * executionUuid  **参数解释**：执行记录的UUID。 **取值范围**：不涉及。
    * createdAt  **参数解释**：Execution执行的创建时间。 **取值范围**：不涉及。
    * updatedAt  **参数解释**：Execution执行的更新时间。 **取值范围**：不涉及。
    * duration  **参数解释**：Execution执行的运行时长。 **取值范围**：不涉及。
    * type  **参数解释**：节点的类型。 **取值范围**：枚举值如下: - job：训练 - labeling：标注 - release_dataset：数据集发布 - model：模型发布 - service：服务部署 - mrs_job：MRS作业 - dataset_import：数据集导入 - create_dataset：创建数据集
    * instanceId  **参数解释**：实例ID。 **取值范围**：不涉及。
    * status  **参数解释**：节点的状态。 **取值范围**：枚举值如下： - init：初始化 - wait_inputs：等待输入 - pending：等待 - creating：创建中 - created：创建成功 - create_failed：创建失败 - running：运行中 - stopping：停止中 - stopped：停止 - timeout：超时 - completed：完成 - failed：失败 - hold：暂停 - skipped：跳过
    * inputs  **参数解释**：节点的输入项。
    * outputs  **参数解释**：节点的输出项。
    * stepUuid  **参数解释**：节点的UUID，唯一性标识。 **取值范围**：不涉及。
    * properties  **参数解释**：节点的属性。
    * events  **参数解释**：节点发生的事件。
    * errorInfo  errorInfo
    * policy  policy
    * conditionsExecution  conditionsExecution
    * stepTitle  **参数解释**：节点标题。 **取值范围**：不涉及。
    * conditions  **参数解释**：条件节点执行条件。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'stepName' => null,
        'executionName' => null,
        'name' => null,
        'uuid' => null,
        'executionUuid' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'duration' => null,
        'type' => null,
        'instanceId' => null,
        'status' => null,
        'inputs' => null,
        'outputs' => null,
        'stepUuid' => null,
        'properties' => null,
        'events' => null,
        'errorInfo' => null,
        'policy' => null,
        'conditionsExecution' => null,
        'stepTitle' => null,
        'conditions' => null
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
    * stepName  **参数解释**：节点的名称，在一个DAG中唯一。 **取值范围**：不涉及。
    * executionName  **参数解释**：执行记录的名称。 **取值范围**：不涉及。
    * name  **参数解释**：执行记录与节点的组合名称。 **取值范围**：不涉及。
    * uuid  **参数解释**：唯一标识uuid。创建节点执行时，后台自动生成。 **取值范围**：不涉及。
    * executionUuid  **参数解释**：执行记录的UUID。 **取值范围**：不涉及。
    * createdAt  **参数解释**：Execution执行的创建时间。 **取值范围**：不涉及。
    * updatedAt  **参数解释**：Execution执行的更新时间。 **取值范围**：不涉及。
    * duration  **参数解释**：Execution执行的运行时长。 **取值范围**：不涉及。
    * type  **参数解释**：节点的类型。 **取值范围**：枚举值如下: - job：训练 - labeling：标注 - release_dataset：数据集发布 - model：模型发布 - service：服务部署 - mrs_job：MRS作业 - dataset_import：数据集导入 - create_dataset：创建数据集
    * instanceId  **参数解释**：实例ID。 **取值范围**：不涉及。
    * status  **参数解释**：节点的状态。 **取值范围**：枚举值如下： - init：初始化 - wait_inputs：等待输入 - pending：等待 - creating：创建中 - created：创建成功 - create_failed：创建失败 - running：运行中 - stopping：停止中 - stopped：停止 - timeout：超时 - completed：完成 - failed：失败 - hold：暂停 - skipped：跳过
    * inputs  **参数解释**：节点的输入项。
    * outputs  **参数解释**：节点的输出项。
    * stepUuid  **参数解释**：节点的UUID，唯一性标识。 **取值范围**：不涉及。
    * properties  **参数解释**：节点的属性。
    * events  **参数解释**：节点发生的事件。
    * errorInfo  errorInfo
    * policy  policy
    * conditionsExecution  conditionsExecution
    * stepTitle  **参数解释**：节点标题。 **取值范围**：不涉及。
    * conditions  **参数解释**：条件节点执行条件。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'stepName' => 'step_name',
            'executionName' => 'execution_name',
            'name' => 'name',
            'uuid' => 'uuid',
            'executionUuid' => 'execution_uuid',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'duration' => 'duration',
            'type' => 'type',
            'instanceId' => 'instance_id',
            'status' => 'status',
            'inputs' => 'inputs',
            'outputs' => 'outputs',
            'stepUuid' => 'step_uuid',
            'properties' => 'properties',
            'events' => 'events',
            'errorInfo' => 'error_info',
            'policy' => 'policy',
            'conditionsExecution' => 'conditions_execution',
            'stepTitle' => 'step_title',
            'conditions' => 'conditions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * stepName  **参数解释**：节点的名称，在一个DAG中唯一。 **取值范围**：不涉及。
    * executionName  **参数解释**：执行记录的名称。 **取值范围**：不涉及。
    * name  **参数解释**：执行记录与节点的组合名称。 **取值范围**：不涉及。
    * uuid  **参数解释**：唯一标识uuid。创建节点执行时，后台自动生成。 **取值范围**：不涉及。
    * executionUuid  **参数解释**：执行记录的UUID。 **取值范围**：不涉及。
    * createdAt  **参数解释**：Execution执行的创建时间。 **取值范围**：不涉及。
    * updatedAt  **参数解释**：Execution执行的更新时间。 **取值范围**：不涉及。
    * duration  **参数解释**：Execution执行的运行时长。 **取值范围**：不涉及。
    * type  **参数解释**：节点的类型。 **取值范围**：枚举值如下: - job：训练 - labeling：标注 - release_dataset：数据集发布 - model：模型发布 - service：服务部署 - mrs_job：MRS作业 - dataset_import：数据集导入 - create_dataset：创建数据集
    * instanceId  **参数解释**：实例ID。 **取值范围**：不涉及。
    * status  **参数解释**：节点的状态。 **取值范围**：枚举值如下： - init：初始化 - wait_inputs：等待输入 - pending：等待 - creating：创建中 - created：创建成功 - create_failed：创建失败 - running：运行中 - stopping：停止中 - stopped：停止 - timeout：超时 - completed：完成 - failed：失败 - hold：暂停 - skipped：跳过
    * inputs  **参数解释**：节点的输入项。
    * outputs  **参数解释**：节点的输出项。
    * stepUuid  **参数解释**：节点的UUID，唯一性标识。 **取值范围**：不涉及。
    * properties  **参数解释**：节点的属性。
    * events  **参数解释**：节点发生的事件。
    * errorInfo  errorInfo
    * policy  policy
    * conditionsExecution  conditionsExecution
    * stepTitle  **参数解释**：节点标题。 **取值范围**：不涉及。
    * conditions  **参数解释**：条件节点执行条件。
    *
    * @var string[]
    */
    protected static $setters = [
            'stepName' => 'setStepName',
            'executionName' => 'setExecutionName',
            'name' => 'setName',
            'uuid' => 'setUuid',
            'executionUuid' => 'setExecutionUuid',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'duration' => 'setDuration',
            'type' => 'setType',
            'instanceId' => 'setInstanceId',
            'status' => 'setStatus',
            'inputs' => 'setInputs',
            'outputs' => 'setOutputs',
            'stepUuid' => 'setStepUuid',
            'properties' => 'setProperties',
            'events' => 'setEvents',
            'errorInfo' => 'setErrorInfo',
            'policy' => 'setPolicy',
            'conditionsExecution' => 'setConditionsExecution',
            'stepTitle' => 'setStepTitle',
            'conditions' => 'setConditions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * stepName  **参数解释**：节点的名称，在一个DAG中唯一。 **取值范围**：不涉及。
    * executionName  **参数解释**：执行记录的名称。 **取值范围**：不涉及。
    * name  **参数解释**：执行记录与节点的组合名称。 **取值范围**：不涉及。
    * uuid  **参数解释**：唯一标识uuid。创建节点执行时，后台自动生成。 **取值范围**：不涉及。
    * executionUuid  **参数解释**：执行记录的UUID。 **取值范围**：不涉及。
    * createdAt  **参数解释**：Execution执行的创建时间。 **取值范围**：不涉及。
    * updatedAt  **参数解释**：Execution执行的更新时间。 **取值范围**：不涉及。
    * duration  **参数解释**：Execution执行的运行时长。 **取值范围**：不涉及。
    * type  **参数解释**：节点的类型。 **取值范围**：枚举值如下: - job：训练 - labeling：标注 - release_dataset：数据集发布 - model：模型发布 - service：服务部署 - mrs_job：MRS作业 - dataset_import：数据集导入 - create_dataset：创建数据集
    * instanceId  **参数解释**：实例ID。 **取值范围**：不涉及。
    * status  **参数解释**：节点的状态。 **取值范围**：枚举值如下： - init：初始化 - wait_inputs：等待输入 - pending：等待 - creating：创建中 - created：创建成功 - create_failed：创建失败 - running：运行中 - stopping：停止中 - stopped：停止 - timeout：超时 - completed：完成 - failed：失败 - hold：暂停 - skipped：跳过
    * inputs  **参数解释**：节点的输入项。
    * outputs  **参数解释**：节点的输出项。
    * stepUuid  **参数解释**：节点的UUID，唯一性标识。 **取值范围**：不涉及。
    * properties  **参数解释**：节点的属性。
    * events  **参数解释**：节点发生的事件。
    * errorInfo  errorInfo
    * policy  policy
    * conditionsExecution  conditionsExecution
    * stepTitle  **参数解释**：节点标题。 **取值范围**：不涉及。
    * conditions  **参数解释**：条件节点执行条件。
    *
    * @var string[]
    */
    protected static $getters = [
            'stepName' => 'getStepName',
            'executionName' => 'getExecutionName',
            'name' => 'getName',
            'uuid' => 'getUuid',
            'executionUuid' => 'getExecutionUuid',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'duration' => 'getDuration',
            'type' => 'getType',
            'instanceId' => 'getInstanceId',
            'status' => 'getStatus',
            'inputs' => 'getInputs',
            'outputs' => 'getOutputs',
            'stepUuid' => 'getStepUuid',
            'properties' => 'getProperties',
            'events' => 'getEvents',
            'errorInfo' => 'getErrorInfo',
            'policy' => 'getPolicy',
            'conditionsExecution' => 'getConditionsExecution',
            'stepTitle' => 'getStepTitle',
            'conditions' => 'getConditions'
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
    const TYPE_TRANING_JOB = 'traning_job';
    const STATUS_INIT = 'init';
    const STATUS_WAIT_INPUTS = 'wait_inputs';
    const STATUS_PENDING = 'pending';
    const STATUS_CREATING = 'creating';
    const STATUS_CREATED = 'created';
    const STATUS_CREATE_FAILED = 'create_failed';
    const STATUS_RUNNING = 'running';
    const STATUS_STOPPING = 'stopping';
    const STATUS_STOPPED = 'stopped';
    const STATUS_TIMEOUT = 'timeout';
    const STATUS_COMPLETED = 'completed';
    const STATUS_FAILED = 'failed';
    const STATUS_HOLD = 'hold';
    const STATUS_SKIPPED = 'skipped';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_TRANING_JOB,
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
            self::STATUS_INIT,
            self::STATUS_WAIT_INPUTS,
            self::STATUS_PENDING,
            self::STATUS_CREATING,
            self::STATUS_CREATED,
            self::STATUS_CREATE_FAILED,
            self::STATUS_RUNNING,
            self::STATUS_STOPPING,
            self::STATUS_STOPPED,
            self::STATUS_TIMEOUT,
            self::STATUS_COMPLETED,
            self::STATUS_FAILED,
            self::STATUS_HOLD,
            self::STATUS_SKIPPED,
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
        $this->container['stepName'] = isset($data['stepName']) ? $data['stepName'] : null;
        $this->container['executionName'] = isset($data['executionName']) ? $data['executionName'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['executionUuid'] = isset($data['executionUuid']) ? $data['executionUuid'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['inputs'] = isset($data['inputs']) ? $data['inputs'] : null;
        $this->container['outputs'] = isset($data['outputs']) ? $data['outputs'] : null;
        $this->container['stepUuid'] = isset($data['stepUuid']) ? $data['stepUuid'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['events'] = isset($data['events']) ? $data['events'] : null;
        $this->container['errorInfo'] = isset($data['errorInfo']) ? $data['errorInfo'] : null;
        $this->container['policy'] = isset($data['policy']) ? $data['policy'] : null;
        $this->container['conditionsExecution'] = isset($data['conditionsExecution']) ? $data['conditionsExecution'] : null;
        $this->container['stepTitle'] = isset($data['stepTitle']) ? $data['stepTitle'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['stepName']) && (mb_strlen($this->container['stepName']) > 64)) {
                $invalidProperties[] = "invalid value for 'stepName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['stepName']) && (mb_strlen($this->container['stepName']) < 1)) {
                $invalidProperties[] = "invalid value for 'stepName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['executionName']) && (mb_strlen($this->container['executionName']) > 32)) {
                $invalidProperties[] = "invalid value for 'executionName', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['executionName']) && (mb_strlen($this->container['executionName']) < 1)) {
                $invalidProperties[] = "invalid value for 'executionName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
    * Gets stepName
    *  **参数解释**：节点的名称，在一个DAG中唯一。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getStepName()
    {
        return $this->container['stepName'];
    }

    /**
    * Sets stepName
    *
    * @param string|null $stepName **参数解释**：节点的名称，在一个DAG中唯一。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setStepName($stepName)
    {
        $this->container['stepName'] = $stepName;
        return $this;
    }

    /**
    * Gets executionName
    *  **参数解释**：执行记录的名称。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getExecutionName()
    {
        return $this->container['executionName'];
    }

    /**
    * Sets executionName
    *
    * @param string|null $executionName **参数解释**：执行记录的名称。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setExecutionName($executionName)
    {
        $this->container['executionName'] = $executionName;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**：执行记录与节点的组合名称。 **取值范围**：不涉及。
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
    * @param string|null $name **参数解释**：执行记录与节点的组合名称。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets uuid
    *  **参数解释**：唯一标识uuid。创建节点执行时，后台自动生成。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
    * Sets uuid
    *
    * @param string|null $uuid **参数解释**：唯一标识uuid。创建节点执行时，后台自动生成。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;
        return $this;
    }

    /**
    * Gets executionUuid
    *  **参数解释**：执行记录的UUID。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getExecutionUuid()
    {
        return $this->container['executionUuid'];
    }

    /**
    * Sets executionUuid
    *
    * @param string|null $executionUuid **参数解释**：执行记录的UUID。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setExecutionUuid($executionUuid)
    {
        $this->container['executionUuid'] = $executionUuid;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释**：Execution执行的创建时间。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt **参数解释**：Execution执行的创建时间。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  **参数解释**：Execution执行的更新时间。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt **参数解释**：Execution执行的更新时间。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets duration
    *  **参数解释**：Execution执行的运行时长。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param int|null $duration **参数解释**：Execution执行的运行时长。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**：节点的类型。 **取值范围**：枚举值如下: - job：训练 - labeling：标注 - release_dataset：数据集发布 - model：模型发布 - service：服务部署 - mrs_job：MRS作业 - dataset_import：数据集导入 - create_dataset：创建数据集
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**：节点的类型。 **取值范围**：枚举值如下: - job：训练 - labeling：标注 - release_dataset：数据集发布 - model：模型发布 - service：服务部署 - mrs_job：MRS作业 - dataset_import：数据集导入 - create_dataset：创建数据集
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数解释**：实例ID。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId **参数解释**：实例ID。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**：节点的状态。 **取值范围**：枚举值如下： - init：初始化 - wait_inputs：等待输入 - pending：等待 - creating：创建中 - created：创建成功 - create_failed：创建失败 - running：运行中 - stopping：停止中 - stopped：停止 - timeout：超时 - completed：完成 - failed：失败 - hold：暂停 - skipped：跳过
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
    * @param string|null $status **参数解释**：节点的状态。 **取值范围**：枚举值如下： - init：初始化 - wait_inputs：等待输入 - pending：等待 - creating：创建中 - created：创建成功 - create_failed：创建失败 - running：运行中 - stopping：停止中 - stopped：停止 - timeout：超时 - completed：完成 - failed：失败 - hold：暂停 - skipped：跳过
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets inputs
    *  **参数解释**：节点的输入项。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\JobInputResp[]|null
    */
    public function getInputs()
    {
        return $this->container['inputs'];
    }

    /**
    * Sets inputs
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\JobInputResp[]|null $inputs **参数解释**：节点的输入项。
    *
    * @return $this
    */
    public function setInputs($inputs)
    {
        $this->container['inputs'] = $inputs;
        return $this;
    }

    /**
    * Gets outputs
    *  **参数解释**：节点的输出项。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\JobOutputResp[]|null
    */
    public function getOutputs()
    {
        return $this->container['outputs'];
    }

    /**
    * Sets outputs
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\JobOutputResp[]|null $outputs **参数解释**：节点的输出项。
    *
    * @return $this
    */
    public function setOutputs($outputs)
    {
        $this->container['outputs'] = $outputs;
        return $this;
    }

    /**
    * Gets stepUuid
    *  **参数解释**：节点的UUID，唯一性标识。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getStepUuid()
    {
        return $this->container['stepUuid'];
    }

    /**
    * Sets stepUuid
    *
    * @param string|null $stepUuid **参数解释**：节点的UUID，唯一性标识。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setStepUuid($stepUuid)
    {
        $this->container['stepUuid'] = $stepUuid;
        return $this;
    }

    /**
    * Gets properties
    *  **参数解释**：节点的属性。
    *
    * @return map[string,string]|null
    */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
    * Sets properties
    *
    * @param map[string,string]|null $properties **参数解释**：节点的属性。
    *
    * @return $this
    */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;
        return $this;
    }

    /**
    * Gets events
    *  **参数解释**：节点发生的事件。
    *
    * @return string[]|null
    */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
    * Sets events
    *
    * @param string[]|null $events **参数解释**：节点发生的事件。
    *
    * @return $this
    */
    public function setEvents($events)
    {
        $this->container['events'] = $events;
        return $this;
    }

    /**
    * Gets errorInfo
    *  errorInfo
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowErrorInfoResp|null
    */
    public function getErrorInfo()
    {
        return $this->container['errorInfo'];
    }

    /**
    * Sets errorInfo
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowErrorInfoResp|null $errorInfo errorInfo
    *
    * @return $this
    */
    public function setErrorInfo($errorInfo)
    {
        $this->container['errorInfo'] = $errorInfo;
        return $this;
    }

    /**
    * Gets policy
    *  policy
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowStepExecutionPolicyResp|null
    */
    public function getPolicy()
    {
        return $this->container['policy'];
    }

    /**
    * Sets policy
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowStepExecutionPolicyResp|null $policy policy
    *
    * @return $this
    */
    public function setPolicy($policy)
    {
        $this->container['policy'] = $policy;
        return $this;
    }

    /**
    * Gets conditionsExecution
    *  conditionsExecution
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowConditionExecutionResp|null
    */
    public function getConditionsExecution()
    {
        return $this->container['conditionsExecution'];
    }

    /**
    * Sets conditionsExecution
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowConditionExecutionResp|null $conditionsExecution conditionsExecution
    *
    * @return $this
    */
    public function setConditionsExecution($conditionsExecution)
    {
        $this->container['conditionsExecution'] = $conditionsExecution;
        return $this;
    }

    /**
    * Gets stepTitle
    *  **参数解释**：节点标题。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getStepTitle()
    {
        return $this->container['stepTitle'];
    }

    /**
    * Sets stepTitle
    *
    * @param string|null $stepTitle **参数解释**：节点标题。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setStepTitle($stepTitle)
    {
        $this->container['stepTitle'] = $stepTitle;
        return $this;
    }

    /**
    * Gets conditions
    *  **参数解释**：条件节点执行条件。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\StepConditionResp[]|null
    */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
    * Sets conditions
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\StepConditionResp[]|null $conditions **参数解释**：条件节点执行条件。
    *
    * @return $this
    */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;
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

