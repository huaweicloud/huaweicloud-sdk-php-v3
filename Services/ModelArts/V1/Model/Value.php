<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Value implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Value';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cpu  cpu量，即计算资源量。
    * memory  内存。
    * tnt004  GPU卡的数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cpu' => 'string',
            'memory' => 'string',
            'tnt004' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cpu  cpu量，即计算资源量。
    * memory  内存。
    * tnt004  GPU卡的数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cpu' => null,
        'memory' => null,
        'tnt004' => null
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
    * cpu  cpu量，即计算资源量。
    * memory  内存。
    * tnt004  GPU卡的数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cpu' => 'cpu',
            'memory' => 'memory',
            'tnt004' => 'tnt004'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cpu  cpu量，即计算资源量。
    * memory  内存。
    * tnt004  GPU卡的数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'cpu' => 'setCpu',
            'memory' => 'setMemory',
            'tnt004' => 'setTnt004'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cpu  cpu量，即计算资源量。
    * memory  内存。
    * tnt004  GPU卡的数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'cpu' => 'getCpu',
            'memory' => 'getMemory',
            'tnt004' => 'getTnt004'
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
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
        $this->container['memory'] = isset($data['memory']) ? $data['memory'] : null;
        $this->container['tnt004'] = isset($data['tnt004']) ? $data['tnt004'] : null;
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
    * Gets cpu
    *  cpu量，即计算资源量。
    *
    * @return string|null
    */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
    * Sets cpu
    *
    * @param string|null $cpu cpu量，即计算资源量。
    *
    * @return $this
    */
    public function setCpu($cpu)
    {
        $this->container['cpu'] = $cpu;
        return $this;
    }

    /**
    * Gets memory
    *  内存。
    *
    * @return string|null
    */
    public function getMemory()
    {
        return $this->container['memory'];
    }

    /**
    * Sets memory
    *
    * @param string|null $memory 内存。
    *
    * @return $this
    */
    public function setMemory($memory)
    {
        $this->container['memory'] = $memory;
        return $this;
    }

    /**
    * Gets tnt004
    *  GPU卡的数量。
    *
    * @return string|null
    */
    public function getTnt004()
    {
        return $this->container['tnt004'];
    }

    /**
    * Sets tnt004
    *
    * @param string|null $tnt004 GPU卡的数量。
    *
    * @return $this
    */
    public function setTnt004($tnt004)
    {
        $this->container['tnt004'] = $tnt004;
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

