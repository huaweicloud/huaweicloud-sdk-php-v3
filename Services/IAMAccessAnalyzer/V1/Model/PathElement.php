<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PathElement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PathElement';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * index  数组中的索引，从0开始。
    * key  对象中的键。
    * substring  substring
    * value  与对象中给定键关联的值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'index' => 'int',
            'key' => 'string',
            'substring' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\Substring',
            'value' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * index  数组中的索引，从0开始。
    * key  对象中的键。
    * substring  substring
    * value  与对象中给定键关联的值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'index' => 'int32',
        'key' => null,
        'substring' => null,
        'value' => null
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
    * index  数组中的索引，从0开始。
    * key  对象中的键。
    * substring  substring
    * value  与对象中给定键关联的值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'index' => 'index',
            'key' => 'key',
            'substring' => 'substring',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * index  数组中的索引，从0开始。
    * key  对象中的键。
    * substring  substring
    * value  与对象中给定键关联的值。
    *
    * @var string[]
    */
    protected static $setters = [
            'index' => 'setIndex',
            'key' => 'setKey',
            'substring' => 'setSubstring',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * index  数组中的索引，从0开始。
    * key  对象中的键。
    * substring  substring
    * value  与对象中给定键关联的值。
    *
    * @var string[]
    */
    protected static $getters = [
            'index' => 'getIndex',
            'key' => 'getKey',
            'substring' => 'getSubstring',
            'value' => 'getValue'
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
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['substring'] = isset($data['substring']) ? $data['substring'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
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
    * Gets index
    *  数组中的索引，从0开始。
    *
    * @return int|null
    */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
    * Sets index
    *
    * @param int|null $index 数组中的索引，从0开始。
    *
    * @return $this
    */
    public function setIndex($index)
    {
        $this->container['index'] = $index;
        return $this;
    }

    /**
    * Gets key
    *  对象中的键。
    *
    * @return string|null
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string|null $key 对象中的键。
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets substring
    *  substring
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\Substring|null
    */
    public function getSubstring()
    {
        return $this->container['substring'];
    }

    /**
    * Sets substring
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\Substring|null $substring substring
    *
    * @return $this
    */
    public function setSubstring($substring)
    {
        $this->container['substring'] = $substring;
        return $this;
    }

    /**
    * Gets value
    *  与对象中给定键关联的值。
    *
    * @return string|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string|null $value 与对象中给定键关联的值。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
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

