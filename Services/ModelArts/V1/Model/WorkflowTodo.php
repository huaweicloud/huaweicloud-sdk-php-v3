<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkflowTodo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkflowTodo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * time  时间。
    * duration  运行时长。
    * workflowId  Workflow工作流ID。
    * workflowName  工作流名称。填写1-64位，仅包含英文、数字、下划线（_）和中划线（-），并且以英文开头的名称。
    * executionId  工作流执行ID。
    * stepName  节点名称。
    * stepTitle  节点的Title。
    * status  状态。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'time' => 'string',
            'duration' => 'int',
            'workflowId' => 'string',
            'workflowName' => 'string',
            'executionId' => 'string',
            'stepName' => 'string',
            'stepTitle' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * time  时间。
    * duration  运行时长。
    * workflowId  Workflow工作流ID。
    * workflowName  工作流名称。填写1-64位，仅包含英文、数字、下划线（_）和中划线（-），并且以英文开头的名称。
    * executionId  工作流执行ID。
    * stepName  节点名称。
    * stepTitle  节点的Title。
    * status  状态。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'time' => null,
        'duration' => null,
        'workflowId' => null,
        'workflowName' => null,
        'executionId' => null,
        'stepName' => null,
        'stepTitle' => null,
        'status' => null
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
    * time  时间。
    * duration  运行时长。
    * workflowId  Workflow工作流ID。
    * workflowName  工作流名称。填写1-64位，仅包含英文、数字、下划线（_）和中划线（-），并且以英文开头的名称。
    * executionId  工作流执行ID。
    * stepName  节点名称。
    * stepTitle  节点的Title。
    * status  状态。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'time' => 'time',
            'duration' => 'duration',
            'workflowId' => 'workflow_id',
            'workflowName' => 'workflow_name',
            'executionId' => 'execution_id',
            'stepName' => 'step_name',
            'stepTitle' => 'step_title',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * time  时间。
    * duration  运行时长。
    * workflowId  Workflow工作流ID。
    * workflowName  工作流名称。填写1-64位，仅包含英文、数字、下划线（_）和中划线（-），并且以英文开头的名称。
    * executionId  工作流执行ID。
    * stepName  节点名称。
    * stepTitle  节点的Title。
    * status  状态。
    *
    * @var string[]
    */
    protected static $setters = [
            'time' => 'setTime',
            'duration' => 'setDuration',
            'workflowId' => 'setWorkflowId',
            'workflowName' => 'setWorkflowName',
            'executionId' => 'setExecutionId',
            'stepName' => 'setStepName',
            'stepTitle' => 'setStepTitle',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * time  时间。
    * duration  运行时长。
    * workflowId  Workflow工作流ID。
    * workflowName  工作流名称。填写1-64位，仅包含英文、数字、下划线（_）和中划线（-），并且以英文开头的名称。
    * executionId  工作流执行ID。
    * stepName  节点名称。
    * stepTitle  节点的Title。
    * status  状态。
    *
    * @var string[]
    */
    protected static $getters = [
            'time' => 'getTime',
            'duration' => 'getDuration',
            'workflowId' => 'getWorkflowId',
            'workflowName' => 'getWorkflowName',
            'executionId' => 'getExecutionId',
            'stepName' => 'getStepName',
            'stepTitle' => 'getStepTitle',
            'status' => 'getStatus'
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
    const STATUS_WAIT_INPUTS = 'wait_inputs';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_WAIT_INPUTS,
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
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['workflowId'] = isset($data['workflowId']) ? $data['workflowId'] : null;
        $this->container['workflowName'] = isset($data['workflowName']) ? $data['workflowName'] : null;
        $this->container['executionId'] = isset($data['executionId']) ? $data['executionId'] : null;
        $this->container['stepName'] = isset($data['stepName']) ? $data['stepName'] : null;
        $this->container['stepTitle'] = isset($data['stepTitle']) ? $data['stepTitle'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
    * Gets time
    *  时间。
    *
    * @return string|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param string|null $time 时间。
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets duration
    *  运行时长。
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
    * @param int|null $duration 运行时长。
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets workflowId
    *  Workflow工作流ID。
    *
    * @return string|null
    */
    public function getWorkflowId()
    {
        return $this->container['workflowId'];
    }

    /**
    * Sets workflowId
    *
    * @param string|null $workflowId Workflow工作流ID。
    *
    * @return $this
    */
    public function setWorkflowId($workflowId)
    {
        $this->container['workflowId'] = $workflowId;
        return $this;
    }

    /**
    * Gets workflowName
    *  工作流名称。填写1-64位，仅包含英文、数字、下划线（_）和中划线（-），并且以英文开头的名称。
    *
    * @return string|null
    */
    public function getWorkflowName()
    {
        return $this->container['workflowName'];
    }

    /**
    * Sets workflowName
    *
    * @param string|null $workflowName 工作流名称。填写1-64位，仅包含英文、数字、下划线（_）和中划线（-），并且以英文开头的名称。
    *
    * @return $this
    */
    public function setWorkflowName($workflowName)
    {
        $this->container['workflowName'] = $workflowName;
        return $this;
    }

    /**
    * Gets executionId
    *  工作流执行ID。
    *
    * @return string|null
    */
    public function getExecutionId()
    {
        return $this->container['executionId'];
    }

    /**
    * Sets executionId
    *
    * @param string|null $executionId 工作流执行ID。
    *
    * @return $this
    */
    public function setExecutionId($executionId)
    {
        $this->container['executionId'] = $executionId;
        return $this;
    }

    /**
    * Gets stepName
    *  节点名称。
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
    * @param string|null $stepName 节点名称。
    *
    * @return $this
    */
    public function setStepName($stepName)
    {
        $this->container['stepName'] = $stepName;
        return $this;
    }

    /**
    * Gets stepTitle
    *  节点的Title。
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
    * @param string|null $stepTitle 节点的Title。
    *
    * @return $this
    */
    public function setStepTitle($stepTitle)
    {
        $this->container['stepTitle'] = $stepTitle;
        return $this;
    }

    /**
    * Gets status
    *  状态。
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
    * @param string|null $status 状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

