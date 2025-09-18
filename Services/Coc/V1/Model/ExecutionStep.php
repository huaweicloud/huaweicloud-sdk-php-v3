<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExecutionStep implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExecutionStep';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * executionStepId  工单步骤id
    * action  原子能力action
    * startTime  工单步骤开始时间
    * endTime  工单步骤结束时间
    * message  工单步骤执行信息
    * name  工单步骤名称
    * status  工单步骤执行状态
    * inputs  步骤输入参数
    * outputs  步骤输出参数
    * properties  工单步骤附加属性，map形式存储，如展示内网ip，则为{\"fixed_ip\": \"192.168.1.228\"}
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'executionStepId' => 'string',
            'action' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'message' => 'string',
            'name' => 'string',
            'status' => 'string',
            'inputs' => '\HuaweiCloud\SDK\Coc\V1\Model\ExecutionStepInputs[]',
            'outputs' => '\HuaweiCloud\SDK\Coc\V1\Model\ExecutionStepInputs[]',
            'properties' => 'map[string,string]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * executionStepId  工单步骤id
    * action  原子能力action
    * startTime  工单步骤开始时间
    * endTime  工单步骤结束时间
    * message  工单步骤执行信息
    * name  工单步骤名称
    * status  工单步骤执行状态
    * inputs  步骤输入参数
    * outputs  步骤输出参数
    * properties  工单步骤附加属性，map形式存储，如展示内网ip，则为{\"fixed_ip\": \"192.168.1.228\"}
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'executionStepId' => null,
        'action' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'message' => null,
        'name' => null,
        'status' => null,
        'inputs' => null,
        'outputs' => null,
        'properties' => null
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
    * executionStepId  工单步骤id
    * action  原子能力action
    * startTime  工单步骤开始时间
    * endTime  工单步骤结束时间
    * message  工单步骤执行信息
    * name  工单步骤名称
    * status  工单步骤执行状态
    * inputs  步骤输入参数
    * outputs  步骤输出参数
    * properties  工单步骤附加属性，map形式存储，如展示内网ip，则为{\"fixed_ip\": \"192.168.1.228\"}
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'executionStepId' => 'execution_step_id',
            'action' => 'action',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'message' => 'message',
            'name' => 'name',
            'status' => 'status',
            'inputs' => 'inputs',
            'outputs' => 'outputs',
            'properties' => 'properties'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * executionStepId  工单步骤id
    * action  原子能力action
    * startTime  工单步骤开始时间
    * endTime  工单步骤结束时间
    * message  工单步骤执行信息
    * name  工单步骤名称
    * status  工单步骤执行状态
    * inputs  步骤输入参数
    * outputs  步骤输出参数
    * properties  工单步骤附加属性，map形式存储，如展示内网ip，则为{\"fixed_ip\": \"192.168.1.228\"}
    *
    * @var string[]
    */
    protected static $setters = [
            'executionStepId' => 'setExecutionStepId',
            'action' => 'setAction',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'message' => 'setMessage',
            'name' => 'setName',
            'status' => 'setStatus',
            'inputs' => 'setInputs',
            'outputs' => 'setOutputs',
            'properties' => 'setProperties'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * executionStepId  工单步骤id
    * action  原子能力action
    * startTime  工单步骤开始时间
    * endTime  工单步骤结束时间
    * message  工单步骤执行信息
    * name  工单步骤名称
    * status  工单步骤执行状态
    * inputs  步骤输入参数
    * outputs  步骤输出参数
    * properties  工单步骤附加属性，map形式存储，如展示内网ip，则为{\"fixed_ip\": \"192.168.1.228\"}
    *
    * @var string[]
    */
    protected static $getters = [
            'executionStepId' => 'getExecutionStepId',
            'action' => 'getAction',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'message' => 'getMessage',
            'name' => 'getName',
            'status' => 'getStatus',
            'inputs' => 'getInputs',
            'outputs' => 'getOutputs',
            'properties' => 'getProperties'
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
        $this->container['executionStepId'] = isset($data['executionStepId']) ? $data['executionStepId'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['inputs'] = isset($data['inputs']) ? $data['inputs'] : null;
        $this->container['outputs'] = isset($data['outputs']) ? $data['outputs'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets executionStepId
    *  工单步骤id
    *
    * @return string|null
    */
    public function getExecutionStepId()
    {
        return $this->container['executionStepId'];
    }

    /**
    * Sets executionStepId
    *
    * @param string|null $executionStepId 工单步骤id
    *
    * @return $this
    */
    public function setExecutionStepId($executionStepId)
    {
        $this->container['executionStepId'] = $executionStepId;
        return $this;
    }

    /**
    * Gets action
    *  原子能力action
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action 原子能力action
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets startTime
    *  工单步骤开始时间
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime 工单步骤开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  工单步骤结束时间
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 工单步骤结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets message
    *  工单步骤执行信息
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 工单步骤执行信息
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets name
    *  工单步骤名称
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
    * @param string|null $name 工单步骤名称
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
    *  工单步骤执行状态
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
    * @param string|null $status 工单步骤执行状态
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
    *  步骤输入参数
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\ExecutionStepInputs[]|null
    */
    public function getInputs()
    {
        return $this->container['inputs'];
    }

    /**
    * Sets inputs
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\ExecutionStepInputs[]|null $inputs 步骤输入参数
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
    *  步骤输出参数
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\ExecutionStepInputs[]|null
    */
    public function getOutputs()
    {
        return $this->container['outputs'];
    }

    /**
    * Sets outputs
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\ExecutionStepInputs[]|null $outputs 步骤输出参数
    *
    * @return $this
    */
    public function setOutputs($outputs)
    {
        $this->container['outputs'] = $outputs;
        return $this;
    }

    /**
    * Gets properties
    *  工单步骤附加属性，map形式存储，如展示内网ip，则为{\"fixed_ip\": \"192.168.1.228\"}
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
    * @param map[string,string]|null $properties 工单步骤附加属性，map形式存储，如展示内网ip，则为{\"fixed_ip\": \"192.168.1.228\"}
    *
    * @return $this
    */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;
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

