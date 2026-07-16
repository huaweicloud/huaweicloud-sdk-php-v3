<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkflowStepPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkflowStepPolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pollIntervalSeconds  节点执行间隔。
    * maxExecutionMinutes  最大执行时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pollIntervalSeconds' => 'string',
            'maxExecutionMinutes' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pollIntervalSeconds  节点执行间隔。
    * maxExecutionMinutes  最大执行时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pollIntervalSeconds' => null,
        'maxExecutionMinutes' => null
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
    * pollIntervalSeconds  节点执行间隔。
    * maxExecutionMinutes  最大执行时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pollIntervalSeconds' => 'poll_interval_seconds',
            'maxExecutionMinutes' => 'max_execution_minutes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pollIntervalSeconds  节点执行间隔。
    * maxExecutionMinutes  最大执行时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'pollIntervalSeconds' => 'setPollIntervalSeconds',
            'maxExecutionMinutes' => 'setMaxExecutionMinutes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pollIntervalSeconds  节点执行间隔。
    * maxExecutionMinutes  最大执行时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'pollIntervalSeconds' => 'getPollIntervalSeconds',
            'maxExecutionMinutes' => 'getMaxExecutionMinutes'
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
        $this->container['pollIntervalSeconds'] = isset($data['pollIntervalSeconds']) ? $data['pollIntervalSeconds'] : null;
        $this->container['maxExecutionMinutes'] = isset($data['maxExecutionMinutes']) ? $data['maxExecutionMinutes'] : null;
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
    * Gets pollIntervalSeconds
    *  节点执行间隔。
    *
    * @return string|null
    */
    public function getPollIntervalSeconds()
    {
        return $this->container['pollIntervalSeconds'];
    }

    /**
    * Sets pollIntervalSeconds
    *
    * @param string|null $pollIntervalSeconds 节点执行间隔。
    *
    * @return $this
    */
    public function setPollIntervalSeconds($pollIntervalSeconds)
    {
        $this->container['pollIntervalSeconds'] = $pollIntervalSeconds;
        return $this;
    }

    /**
    * Gets maxExecutionMinutes
    *  最大执行时间。
    *
    * @return string|null
    */
    public function getMaxExecutionMinutes()
    {
        return $this->container['maxExecutionMinutes'];
    }

    /**
    * Sets maxExecutionMinutes
    *
    * @param string|null $maxExecutionMinutes 最大执行时间。
    *
    * @return $this
    */
    public function setMaxExecutionMinutes($maxExecutionMinutes)
    {
        $this->container['maxExecutionMinutes'] = $maxExecutionMinutes;
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

