<?php

namespace HuaweiCloud\SDK\Cse\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EngineSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EngineSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * availableCpuMemory  CPU及内存规格。
    * linear  是否为线性规格。
    * availablePrefix  可用节点规格类型前缀。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'availableCpuMemory' => 'string',
            'linear' => 'string',
            'availablePrefix' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * availableCpuMemory  CPU及内存规格。
    * linear  是否为线性规格。
    * availablePrefix  可用节点规格类型前缀。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'availableCpuMemory' => null,
        'linear' => null,
        'availablePrefix' => null
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
    * availableCpuMemory  CPU及内存规格。
    * linear  是否为线性规格。
    * availablePrefix  可用节点规格类型前缀。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'availableCpuMemory' => 'availableCpuMemory',
            'linear' => 'linear',
            'availablePrefix' => 'availablePrefix'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * availableCpuMemory  CPU及内存规格。
    * linear  是否为线性规格。
    * availablePrefix  可用节点规格类型前缀。
    *
    * @var string[]
    */
    protected static $setters = [
            'availableCpuMemory' => 'setAvailableCpuMemory',
            'linear' => 'setLinear',
            'availablePrefix' => 'setAvailablePrefix'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * availableCpuMemory  CPU及内存规格。
    * linear  是否为线性规格。
    * availablePrefix  可用节点规格类型前缀。
    *
    * @var string[]
    */
    protected static $getters = [
            'availableCpuMemory' => 'getAvailableCpuMemory',
            'linear' => 'getLinear',
            'availablePrefix' => 'getAvailablePrefix'
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
        $this->container['availableCpuMemory'] = isset($data['availableCpuMemory']) ? $data['availableCpuMemory'] : null;
        $this->container['linear'] = isset($data['linear']) ? $data['linear'] : null;
        $this->container['availablePrefix'] = isset($data['availablePrefix']) ? $data['availablePrefix'] : null;
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
    * Gets availableCpuMemory
    *  CPU及内存规格。
    *
    * @return string|null
    */
    public function getAvailableCpuMemory()
    {
        return $this->container['availableCpuMemory'];
    }

    /**
    * Sets availableCpuMemory
    *
    * @param string|null $availableCpuMemory CPU及内存规格。
    *
    * @return $this
    */
    public function setAvailableCpuMemory($availableCpuMemory)
    {
        $this->container['availableCpuMemory'] = $availableCpuMemory;
        return $this;
    }

    /**
    * Gets linear
    *  是否为线性规格。
    *
    * @return string|null
    */
    public function getLinear()
    {
        return $this->container['linear'];
    }

    /**
    * Sets linear
    *
    * @param string|null $linear 是否为线性规格。
    *
    * @return $this
    */
    public function setLinear($linear)
    {
        $this->container['linear'] = $linear;
        return $this;
    }

    /**
    * Gets availablePrefix
    *  可用节点规格类型前缀。
    *
    * @return string|null
    */
    public function getAvailablePrefix()
    {
        return $this->container['availablePrefix'];
    }

    /**
    * Sets availablePrefix
    *
    * @param string|null $availablePrefix 可用节点规格类型前缀。
    *
    * @return $this
    */
    public function setAvailablePrefix($availablePrefix)
    {
        $this->container['availablePrefix'] = $availablePrefix;
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

