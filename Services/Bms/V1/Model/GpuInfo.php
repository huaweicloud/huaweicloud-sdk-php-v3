<?php

namespace HuaweiCloud\SDK\Bms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GpuInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GpuInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  GPU设备名称。
    * count  GPU设备数量。
    * memoryMb  GPU设备的内存，单位为MB。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'count' => 'int',
            'memoryMb' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  GPU设备名称。
    * count  GPU设备数量。
    * memoryMb  GPU设备的内存，单位为MB。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'count' => null,
        'memoryMb' => null
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
    * name  GPU设备名称。
    * count  GPU设备数量。
    * memoryMb  GPU设备的内存，单位为MB。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'count' => 'count',
            'memoryMb' => 'memory_mb'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  GPU设备名称。
    * count  GPU设备数量。
    * memoryMb  GPU设备的内存，单位为MB。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'count' => 'setCount',
            'memoryMb' => 'setMemoryMb'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  GPU设备名称。
    * count  GPU设备数量。
    * memoryMb  GPU设备的内存，单位为MB。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'count' => 'getCount',
            'memoryMb' => 'getMemoryMb'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['memoryMb'] = isset($data['memoryMb']) ? $data['memoryMb'] : null;
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
    * Gets name
    *  GPU设备名称。
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
    * @param string|null $name GPU设备名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets count
    *  GPU设备数量。
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count GPU设备数量。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets memoryMb
    *  GPU设备的内存，单位为MB。
    *
    * @return int|null
    */
    public function getMemoryMb()
    {
        return $this->container['memoryMb'];
    }

    /**
    * Sets memoryMb
    *
    * @param int|null $memoryMb GPU设备的内存，单位为MB。
    *
    * @return $this
    */
    public function setMemoryMb($memoryMb)
    {
        $this->container['memoryMb'] = $memoryMb;
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

