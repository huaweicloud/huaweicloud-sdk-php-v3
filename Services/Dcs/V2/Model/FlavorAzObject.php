<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlavorAzObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlavorAzObject';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * capacity  缓存容量（G Byte）。
    * azCodes  有资源的可用区编码。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'capacity' => 'string',
            'azCodes' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * capacity  缓存容量（G Byte）。
    * azCodes  有资源的可用区编码。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'capacity' => null,
        'azCodes' => null
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
    * capacity  缓存容量（G Byte）。
    * azCodes  有资源的可用区编码。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'capacity' => 'capacity',
            'azCodes' => 'az_codes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * capacity  缓存容量（G Byte）。
    * azCodes  有资源的可用区编码。
    *
    * @var string[]
    */
    protected static $setters = [
            'capacity' => 'setCapacity',
            'azCodes' => 'setAzCodes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * capacity  缓存容量（G Byte）。
    * azCodes  有资源的可用区编码。
    *
    * @var string[]
    */
    protected static $getters = [
            'capacity' => 'getCapacity',
            'azCodes' => 'getAzCodes'
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
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
        $this->container['azCodes'] = isset($data['azCodes']) ? $data['azCodes'] : null;
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
    * Gets capacity
    *  缓存容量（G Byte）。
    *
    * @return string|null
    */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
    * Sets capacity
    *
    * @param string|null $capacity 缓存容量（G Byte）。
    *
    * @return $this
    */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;
        return $this;
    }

    /**
    * Gets azCodes
    *  有资源的可用区编码。
    *
    * @return string[]|null
    */
    public function getAzCodes()
    {
        return $this->container['azCodes'];
    }

    /**
    * Sets azCodes
    *
    * @param string[]|null $azCodes 有资源的可用区编码。
    *
    * @return $this
    */
    public function setAzCodes($azCodes)
    {
        $this->container['azCodes'] = $azCodes;
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

