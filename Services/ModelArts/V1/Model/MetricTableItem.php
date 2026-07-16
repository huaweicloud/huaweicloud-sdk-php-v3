<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MetricTableItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MetricTableItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * allocated  allocated
    * capacity  capacity
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'allocated' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Allocated',
            'capacity' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Capacity'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * allocated  allocated
    * capacity  capacity
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
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
    * allocated  allocated
    * capacity  capacity
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'allocated' => 'allocated',
            'capacity' => 'capacity'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * allocated  allocated
    * capacity  capacity
    *
    * @var string[]
    */
    protected static $setters = [
            'allocated' => 'setAllocated',
            'capacity' => 'setCapacity'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * allocated  allocated
    * capacity  capacity
    *
    * @var string[]
    */
    protected static $getters = [
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
    * Gets allocated
    *  allocated
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Allocated|null
    */
    public function getAllocated()
    {
        return $this->container['allocated'];
    }

    /**
    * Sets allocated
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Allocated|null $allocated allocated
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
    *  capacity
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Capacity|null
    */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
    * Sets capacity
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Capacity|null $capacity capacity
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

