<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SystemInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SystemInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cpuUse  CPU使用量
    * id  记录ID
    * memUse  内存使用量
    * time  记录时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cpuUse' => 'double',
            'id' => 'string',
            'memUse' => 'double',
            'time' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cpuUse  CPU使用量
    * id  记录ID
    * memUse  内存使用量
    * time  记录时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cpuUse' => 'double',
        'id' => null,
        'memUse' => 'double',
        'time' => null
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
    * cpuUse  CPU使用量
    * id  记录ID
    * memUse  内存使用量
    * time  记录时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cpuUse' => 'cpu_use',
            'id' => 'id',
            'memUse' => 'mem_use',
            'time' => 'time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cpuUse  CPU使用量
    * id  记录ID
    * memUse  内存使用量
    * time  记录时间
    *
    * @var string[]
    */
    protected static $setters = [
            'cpuUse' => 'setCpuUse',
            'id' => 'setId',
            'memUse' => 'setMemUse',
            'time' => 'setTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cpuUse  CPU使用量
    * id  记录ID
    * memUse  内存使用量
    * time  记录时间
    *
    * @var string[]
    */
    protected static $getters = [
            'cpuUse' => 'getCpuUse',
            'id' => 'getId',
            'memUse' => 'getMemUse',
            'time' => 'getTime'
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
        $this->container['cpuUse'] = isset($data['cpuUse']) ? $data['cpuUse'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['memUse'] = isset($data['memUse']) ? $data['memUse'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
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
    * Gets cpuUse
    *  CPU使用量
    *
    * @return double|null
    */
    public function getCpuUse()
    {
        return $this->container['cpuUse'];
    }

    /**
    * Sets cpuUse
    *
    * @param double|null $cpuUse CPU使用量
    *
    * @return $this
    */
    public function setCpuUse($cpuUse)
    {
        $this->container['cpuUse'] = $cpuUse;
        return $this;
    }

    /**
    * Gets id
    *  记录ID
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
    * @param string|null $id 记录ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets memUse
    *  内存使用量
    *
    * @return double|null
    */
    public function getMemUse()
    {
        return $this->container['memUse'];
    }

    /**
    * Sets memUse
    *
    * @param double|null $memUse 内存使用量
    *
    * @return $this
    */
    public function setMemUse($memUse)
    {
        $this->container['memUse'] = $memUse;
        return $this;
    }

    /**
    * Gets time
    *  记录时间
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
    * @param string|null $time 记录时间
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
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

