<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LimitValue implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LimitValue';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * value1  属性值1。
    * value2  属性值2。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'value1' => 'string',
            'value2' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * value1  属性值1。
    * value2  属性值2。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'value1' => null,
        'value2' => null
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
    * value1  属性值1。
    * value2  属性值2。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'value1' => 'value1',
            'value2' => 'value2'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * value1  属性值1。
    * value2  属性值2。
    *
    * @var string[]
    */
    protected static $setters = [
            'value1' => 'setValue1',
            'value2' => 'setValue2'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * value1  属性值1。
    * value2  属性值2。
    *
    * @var string[]
    */
    protected static $getters = [
            'value1' => 'getValue1',
            'value2' => 'getValue2'
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
        $this->container['value1'] = isset($data['value1']) ? $data['value1'] : null;
        $this->container['value2'] = isset($data['value2']) ? $data['value2'] : null;
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
    * Gets value1
    *  属性值1。
    *
    * @return string|null
    */
    public function getValue1()
    {
        return $this->container['value1'];
    }

    /**
    * Sets value1
    *
    * @param string|null $value1 属性值1。
    *
    * @return $this
    */
    public function setValue1($value1)
    {
        $this->container['value1'] = $value1;
        return $this;
    }

    /**
    * Gets value2
    *  属性值2。
    *
    * @return string|null
    */
    public function getValue2()
    {
        return $this->container['value2'];
    }

    /**
    * Sets value2
    *
    * @param string|null $value2 属性值2。
    *
    * @return $this
    */
    public function setValue2($value2)
    {
        $this->container['value2'] = $value2;
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

