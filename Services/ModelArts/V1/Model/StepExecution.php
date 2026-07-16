<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StepExecution implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StepExecution';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * stepName  节点的名称，在一个DAG中唯一，1到64位只包含中英文，数字，空格，下划线（_）和中划线（-），并且以中英文开头。
    * duration  Execution执行的运行时长。
    * type  节点的类型。
    * instanceId  实例ID。
    * status  节点的状态。枚举值如下： - init：初始化 - wait_inputs：等待输入 - pending：等待 - creating：创建中 - created：创建成功 - create_failed：创建失败 - running：运行中 - stopping：停止中 - stopped：停止 - timeout：超时 - completed：完成 - failed：失败 - hold：持有 - skipped：跳过
    * inputs  节点的输入项。
    * outputs  节点的输出项。
    * stepUuid  节点的UUID，唯一性标识。
    * properties  节点的属性。
    * events  节点发生的事件。
    * errorInfo  errorInfo
    * policy  policy
    * conditionsExecution  conditionsExecution
    * stepTitle  节点标题。
    * conditions  conditions
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'stepName' => 'string',
            'duration' => 'int',
            'type' => 'string',
            'instanceId' => 'string',
            'status' => 'string',
            'inputs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\JobInput[]',
            'outputs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\JobOutput[]',
            'stepUuid' => 'string',
            'properties' => 'map[string,object]',
            'events' => 'string[]',
            'errorInfo' => '\HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowErrorInfo',
            'policy' => '\HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowStepExecutionPolicy',
            'conditionsExecution' => '\HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowConditionExecution',
            'stepTitle' => 'string',
            'conditions' => '\HuaweiCloud\SDK\ModelArts\V1\Model\StepCondition[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * stepName  节点的名称，在一个DAG中唯一，1到64位只包含中英文，数字，空格，下划线（_）和中划线（-），并且以中英文开头。
    * duration  Execution执行的运行时长。
    * type  节点的类型。
    * instanceId  实例ID。
    * status  节点的状态。枚举值如下： - init：初始化 - wait_inputs：等待输入 - pending：等待 - creating：创建中 - created：创建成功 - create_failed：创建失败 - running：运行中 - stopping：停止中 - stopped：停止 - timeout：超时 - completed：完成 - failed：失败 - hold：持有 - skipped：跳过
    * inputs  节点的输入项。
    * outputs  节点的输出项。
    * stepUuid  节点的UUID，唯一性标识。
    * properties  节点的属性。
    * events  节点发生的事件。
    * errorInfo  errorInfo
    * policy  policy
    * conditionsExecution  conditionsExecution
    * stepTitle  节点标题。
    * conditions  conditions
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'stepName' => null,
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
    * stepName  节点的名称，在一个DAG中唯一，1到64位只包含中英文，数字，空格，下划线（_）和中划线（-），并且以中英文开头。
    * duration  Execution执行的运行时长。
    * type  节点的类型。
    * instanceId  实例ID。
    * status  节点的状态。枚举值如下： - init：初始化 - wait_inputs：等待输入 - pending：等待 - creating：创建中 - created：创建成功 - create_failed：创建失败 - running：运行中 - stopping：停止中 - stopped：停止 - timeout：超时 - completed：完成 - failed：失败 - hold：持有 - skipped：跳过
    * inputs  节点的输入项。
    * outputs  节点的输出项。
    * stepUuid  节点的UUID，唯一性标识。
    * properties  节点的属性。
    * events  节点发生的事件。
    * errorInfo  errorInfo
    * policy  policy
    * conditionsExecution  conditionsExecution
    * stepTitle  节点标题。
    * conditions  conditions
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'stepName' => 'step_name',
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
    * stepName  节点的名称，在一个DAG中唯一，1到64位只包含中英文，数字，空格，下划线（_）和中划线（-），并且以中英文开头。
    * duration  Execution执行的运行时长。
    * type  节点的类型。
    * instanceId  实例ID。
    * status  节点的状态。枚举值如下： - init：初始化 - wait_inputs：等待输入 - pending：等待 - creating：创建中 - created：创建成功 - create_failed：创建失败 - running：运行中 - stopping：停止中 - stopped：停止 - timeout：超时 - completed：完成 - failed：失败 - hold：持有 - skipped：跳过
    * inputs  节点的输入项。
    * outputs  节点的输出项。
    * stepUuid  节点的UUID，唯一性标识。
    * properties  节点的属性。
    * events  节点发生的事件。
    * errorInfo  errorInfo
    * policy  policy
    * conditionsExecution  conditionsExecution
    * stepTitle  节点标题。
    * conditions  conditions
    *
    * @var string[]
    */
    protected static $setters = [
            'stepName' => 'setStepName',
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
    * stepName  节点的名称，在一个DAG中唯一，1到64位只包含中英文，数字，空格，下划线（_）和中划线（-），并且以中英文开头。
    * duration  Execution执行的运行时长。
    * type  节点的类型。
    * instanceId  实例ID。
    * status  节点的状态。枚举值如下： - init：初始化 - wait_inputs：等待输入 - pending：等待 - creating：创建中 - created：创建成功 - create_failed：创建失败 - running：运行中 - stopping：停止中 - stopped：停止 - timeout：超时 - completed：完成 - failed：失败 - hold：持有 - skipped：跳过
    * inputs  节点的输入项。
    * outputs  节点的输出项。
    * stepUuid  节点的UUID，唯一性标识。
    * properties  节点的属性。
    * events  节点发生的事件。
    * errorInfo  errorInfo
    * policy  policy
    * conditionsExecution  conditionsExecution
    * stepTitle  节点标题。
    * conditions  conditions
    *
    * @var string[]
    */
    protected static $getters = [
            'stepName' => 'getStepName',
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
    *  节点的名称，在一个DAG中唯一，1到64位只包含中英文，数字，空格，下划线（_）和中划线（-），并且以中英文开头。
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
    * @param string|null $stepName 节点的名称，在一个DAG中唯一，1到64位只包含中英文，数字，空格，下划线（_）和中划线（-），并且以中英文开头。
    *
    * @return $this
    */
    public function setStepName($stepName)
    {
        $this->container['stepName'] = $stepName;
        return $this;
    }

    /**
    * Gets duration
    *  Execution执行的运行时长。
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
    * @param int|null $duration Execution执行的运行时长。
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
    *  节点的类型。
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
    * @param string|null $type 节点的类型。
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
    *  实例ID。
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
    * @param string|null $instanceId 实例ID。
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
    *  节点的状态。枚举值如下： - init：初始化 - wait_inputs：等待输入 - pending：等待 - creating：创建中 - created：创建成功 - create_failed：创建失败 - running：运行中 - stopping：停止中 - stopped：停止 - timeout：超时 - completed：完成 - failed：失败 - hold：持有 - skipped：跳过
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
    * @param string|null $status 节点的状态。枚举值如下： - init：初始化 - wait_inputs：等待输入 - pending：等待 - creating：创建中 - created：创建成功 - create_failed：创建失败 - running：运行中 - stopping：停止中 - stopped：停止 - timeout：超时 - completed：完成 - failed：失败 - hold：持有 - skipped：跳过
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
    *  节点的输入项。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\JobInput[]|null
    */
    public function getInputs()
    {
        return $this->container['inputs'];
    }

    /**
    * Sets inputs
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\JobInput[]|null $inputs 节点的输入项。
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
    *  节点的输出项。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\JobOutput[]|null
    */
    public function getOutputs()
    {
        return $this->container['outputs'];
    }

    /**
    * Sets outputs
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\JobOutput[]|null $outputs 节点的输出项。
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
    *  节点的UUID，唯一性标识。
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
    * @param string|null $stepUuid 节点的UUID，唯一性标识。
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
    *  节点的属性。
    *
    * @return map[string,object]|null
    */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
    * Sets properties
    *
    * @param map[string,object]|null $properties 节点的属性。
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
    *  节点发生的事件。
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
    * @param string[]|null $events 节点发生的事件。
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
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowErrorInfo|null
    */
    public function getErrorInfo()
    {
        return $this->container['errorInfo'];
    }

    /**
    * Sets errorInfo
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowErrorInfo|null $errorInfo errorInfo
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
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowStepExecutionPolicy|null
    */
    public function getPolicy()
    {
        return $this->container['policy'];
    }

    /**
    * Sets policy
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowStepExecutionPolicy|null $policy policy
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
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowConditionExecution|null
    */
    public function getConditionsExecution()
    {
        return $this->container['conditionsExecution'];
    }

    /**
    * Sets conditionsExecution
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowConditionExecution|null $conditionsExecution conditionsExecution
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
    *  节点标题。
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
    * @param string|null $stepTitle 节点标题。
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
    *  conditions
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\StepCondition[]|null
    */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
    * Sets conditions
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\StepCondition[]|null $conditions conditions
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

