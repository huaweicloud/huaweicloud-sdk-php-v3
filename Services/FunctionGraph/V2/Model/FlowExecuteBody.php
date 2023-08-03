<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlowExecuteBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlowExecuteBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * headers  函数执行时需要的Header
    * input  定义函数执行时的入参，支持使用JSONPATH进行映射，以及指定默认值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'headers' => 'object',
            'input' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * headers  函数执行时需要的Header
    * input  定义函数执行时的入参，支持使用JSONPATH进行映射，以及指定默认值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'headers' => null,
        'input' => null
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
    * headers  函数执行时需要的Header
    * input  定义函数执行时的入参，支持使用JSONPATH进行映射，以及指定默认值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'headers' => 'headers',
            'input' => 'input'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * headers  函数执行时需要的Header
    * input  定义函数执行时的入参，支持使用JSONPATH进行映射，以及指定默认值
    *
    * @var string[]
    */
    protected static $setters = [
            'headers' => 'setHeaders',
            'input' => 'setInput'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * headers  函数执行时需要的Header
    * input  定义函数执行时的入参，支持使用JSONPATH进行映射，以及指定默认值
    *
    * @var string[]
    */
    protected static $getters = [
            'headers' => 'getHeaders',
            'input' => 'getInput'
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
        $this->container['headers'] = isset($data['headers']) ? $data['headers'] : null;
        $this->container['input'] = isset($data['input']) ? $data['input'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['input'] === null) {
            $invalidProperties[] = "'input' can't be null";
        }
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
    * Gets headers
    *  函数执行时需要的Header
    *
    * @return object|null
    */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
    * Sets headers
    *
    * @param object|null $headers 函数执行时需要的Header
    *
    * @return $this
    */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;
        return $this;
    }

    /**
    * Gets input
    *  定义函数执行时的入参，支持使用JSONPATH进行映射，以及指定默认值
    *
    * @return object
    */
    public function getInput()
    {
        return $this->container['input'];
    }

    /**
    * Sets input
    *
    * @param object $input 定义函数执行时的入参，支持使用JSONPATH进行映射，以及指定默认值
    *
    * @return $this
    */
    public function setInput($input)
    {
        $this->container['input'] = $input;
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

