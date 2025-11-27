<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceSummary';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * allocatable  可分配的资源
    * allocating  分配中的资源
    * allocated  已分配的资源
    * capacity  资源总量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'allocatable' => 'map[string,object]',
            'allocating' => 'map[string,object]',
            'allocated' => 'map[string,object]',
            'capacity' => 'map[string,object]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * allocatable  可分配的资源
    * allocating  分配中的资源
    * allocated  已分配的资源
    * capacity  资源总量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'allocatable' => null,
        'allocating' => null,
        'allocated' => null,
        'capacity' => null
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
    * allocatable  可分配的资源
    * allocating  分配中的资源
    * allocated  已分配的资源
    * capacity  资源总量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'allocatable' => 'allocatable',
            'allocating' => 'allocating',
            'allocated' => 'allocated',
            'capacity' => 'capacity'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * allocatable  可分配的资源
    * allocating  分配中的资源
    * allocated  已分配的资源
    * capacity  资源总量
    *
    * @var string[]
    */
    protected static $setters = [
            'allocatable' => 'setAllocatable',
            'allocating' => 'setAllocating',
            'allocated' => 'setAllocated',
            'capacity' => 'setCapacity'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * allocatable  可分配的资源
    * allocating  分配中的资源
    * allocated  已分配的资源
    * capacity  资源总量
    *
    * @var string[]
    */
    protected static $getters = [
            'allocatable' => 'getAllocatable',
            'allocating' => 'getAllocating',
            'allocated' => 'getAllocated',
            'capacity' => 'getCapacity'
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
        $this->container['allocatable'] = isset($data['allocatable']) ? $data['allocatable'] : null;
        $this->container['allocating'] = isset($data['allocating']) ? $data['allocating'] : null;
        $this->container['allocated'] = isset($data['allocated']) ? $data['allocated'] : null;
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
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
    * Gets allocatable
    *  可分配的资源
    *
    * @return map[string,object]|null
    */
    public function getAllocatable()
    {
        return $this->container['allocatable'];
    }

    /**
    * Sets allocatable
    *
    * @param map[string,object]|null $allocatable 可分配的资源
    *
    * @return $this
    */
    public function setAllocatable($allocatable)
    {
        $this->container['allocatable'] = $allocatable;
        return $this;
    }

    /**
    * Gets allocating
    *  分配中的资源
    *
    * @return map[string,object]|null
    */
    public function getAllocating()
    {
        return $this->container['allocating'];
    }

    /**
    * Sets allocating
    *
    * @param map[string,object]|null $allocating 分配中的资源
    *
    * @return $this
    */
    public function setAllocating($allocating)
    {
        $this->container['allocating'] = $allocating;
        return $this;
    }

    /**
    * Gets allocated
    *  已分配的资源
    *
    * @return map[string,object]|null
    */
    public function getAllocated()
    {
        return $this->container['allocated'];
    }

    /**
    * Sets allocated
    *
    * @param map[string,object]|null $allocated 已分配的资源
    *
    * @return $this
    */
    public function setAllocated($allocated)
    {
        $this->container['allocated'] = $allocated;
        return $this;
    }

    /**
    * Gets capacity
    *  资源总量
    *
    * @return map[string,object]|null
    */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
    * Sets capacity
    *
    * @param map[string,object]|null $capacity 资源总量
    *
    * @return $this
    */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;
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

