<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProgressInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProgressInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * completed  完成进度
    * remainingTime  预计剩余时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'completed' => 'string',
            'remainingTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * completed  完成进度
    * remainingTime  预计剩余时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'completed' => null,
        'remainingTime' => null
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
    * completed  完成进度
    * remainingTime  预计剩余时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'completed' => 'completed',
            'remainingTime' => 'remaining_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * completed  完成进度
    * remainingTime  预计剩余时间
    *
    * @var string[]
    */
    protected static $setters = [
            'completed' => 'setCompleted',
            'remainingTime' => 'setRemainingTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * completed  完成进度
    * remainingTime  预计剩余时间
    *
    * @var string[]
    */
    protected static $getters = [
            'completed' => 'getCompleted',
            'remainingTime' => 'getRemainingTime'
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
        $this->container['completed'] = isset($data['completed']) ? $data['completed'] : null;
        $this->container['remainingTime'] = isset($data['remainingTime']) ? $data['remainingTime'] : null;
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
    * Gets completed
    *  完成进度
    *
    * @return string|null
    */
    public function getCompleted()
    {
        return $this->container['completed'];
    }

    /**
    * Sets completed
    *
    * @param string|null $completed 完成进度
    *
    * @return $this
    */
    public function setCompleted($completed)
    {
        $this->container['completed'] = $completed;
        return $this;
    }

    /**
    * Gets remainingTime
    *  预计剩余时间
    *
    * @return string|null
    */
    public function getRemainingTime()
    {
        return $this->container['remainingTime'];
    }

    /**
    * Sets remainingTime
    *
    * @param string|null $remainingTime 预计剩余时间
    *
    * @return $this
    */
    public function setRemainingTime($remainingTime)
    {
        $this->container['remainingTime'] = $remainingTime;
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

