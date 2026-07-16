<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExecutionBrief implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExecutionBrief';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * executionId  工作流执行ID。
    * createdAt  工作流执行的创建时间。
    * status  工作流状态。
    * runningSteps  运行的节点。
    * currentSteps  当前节点。
    * duration  运行时长。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'executionId' => 'string',
            'createdAt' => 'string',
            'status' => 'string',
            'runningSteps' => 'string[]',
            'currentSteps' => 'string[]',
            'duration' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * executionId  工作流执行ID。
    * createdAt  工作流执行的创建时间。
    * status  工作流状态。
    * runningSteps  运行的节点。
    * currentSteps  当前节点。
    * duration  运行时长。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'executionId' => null,
        'createdAt' => null,
        'status' => null,
        'runningSteps' => null,
        'currentSteps' => null,
        'duration' => 'int64'
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
    * executionId  工作流执行ID。
    * createdAt  工作流执行的创建时间。
    * status  工作流状态。
    * runningSteps  运行的节点。
    * currentSteps  当前节点。
    * duration  运行时长。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'executionId' => 'execution_id',
            'createdAt' => 'created_at',
            'status' => 'status',
            'runningSteps' => 'running_steps',
            'currentSteps' => 'current_steps',
            'duration' => 'duration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * executionId  工作流执行ID。
    * createdAt  工作流执行的创建时间。
    * status  工作流状态。
    * runningSteps  运行的节点。
    * currentSteps  当前节点。
    * duration  运行时长。
    *
    * @var string[]
    */
    protected static $setters = [
            'executionId' => 'setExecutionId',
            'createdAt' => 'setCreatedAt',
            'status' => 'setStatus',
            'runningSteps' => 'setRunningSteps',
            'currentSteps' => 'setCurrentSteps',
            'duration' => 'setDuration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * executionId  工作流执行ID。
    * createdAt  工作流执行的创建时间。
    * status  工作流状态。
    * runningSteps  运行的节点。
    * currentSteps  当前节点。
    * duration  运行时长。
    *
    * @var string[]
    */
    protected static $getters = [
            'executionId' => 'getExecutionId',
            'createdAt' => 'getCreatedAt',
            'status' => 'getStatus',
            'runningSteps' => 'getRunningSteps',
            'currentSteps' => 'getCurrentSteps',
            'duration' => 'getDuration'
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
        $this->container['executionId'] = isset($data['executionId']) ? $data['executionId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['runningSteps'] = isset($data['runningSteps']) ? $data['runningSteps'] : null;
        $this->container['currentSteps'] = isset($data['currentSteps']) ? $data['currentSteps'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
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
    * Gets createdAt
    *  工作流执行的创建时间。
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
    * @param string|null $createdAt 工作流执行的创建时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets status
    *  工作流状态。
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
    * @param string|null $status 工作流状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets runningSteps
    *  运行的节点。
    *
    * @return string[]|null
    */
    public function getRunningSteps()
    {
        return $this->container['runningSteps'];
    }

    /**
    * Sets runningSteps
    *
    * @param string[]|null $runningSteps 运行的节点。
    *
    * @return $this
    */
    public function setRunningSteps($runningSteps)
    {
        $this->container['runningSteps'] = $runningSteps;
        return $this;
    }

    /**
    * Gets currentSteps
    *  当前节点。
    *
    * @return string[]|null
    */
    public function getCurrentSteps()
    {
        return $this->container['currentSteps'];
    }

    /**
    * Sets currentSteps
    *
    * @param string[]|null $currentSteps 当前节点。
    *
    * @return $this
    */
    public function setCurrentSteps($currentSteps)
    {
        $this->container['currentSteps'] = $currentSteps;
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

