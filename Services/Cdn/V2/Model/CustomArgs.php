<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CustomArgs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'customArgs';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  参数类型，custom_var：自定义，nginx_preset_var：预置的变量。
    * key  参数,长度支持1-256，由数字0-9、字符a-z、A-Z，及特殊字符._-*#%|+^@?=组成。
    * value  取值,长度支持1-256，由数字0-9、字符a-z、A-Z，及特殊字符._-*#%|+^@?=组成。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'key' => 'string',
            'value' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  参数类型，custom_var：自定义，nginx_preset_var：预置的变量。
    * key  参数,长度支持1-256，由数字0-9、字符a-z、A-Z，及特殊字符._-*#%|+^@?=组成。
    * value  取值,长度支持1-256，由数字0-9、字符a-z、A-Z，及特殊字符._-*#%|+^@?=组成。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'key' => null,
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
    * type  参数类型，custom_var：自定义，nginx_preset_var：预置的变量。
    * key  参数,长度支持1-256，由数字0-9、字符a-z、A-Z，及特殊字符._-*#%|+^@?=组成。
    * value  取值,长度支持1-256，由数字0-9、字符a-z、A-Z，及特殊字符._-*#%|+^@?=组成。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'key' => 'key',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  参数类型，custom_var：自定义，nginx_preset_var：预置的变量。
    * key  参数,长度支持1-256，由数字0-9、字符a-z、A-Z，及特殊字符._-*#%|+^@?=组成。
    * value  取值,长度支持1-256，由数字0-9、字符a-z、A-Z，及特殊字符._-*#%|+^@?=组成。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'key' => 'setKey',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  参数类型，custom_var：自定义，nginx_preset_var：预置的变量。
    * key  参数,长度支持1-256，由数字0-9、字符a-z、A-Z，及特殊字符._-*#%|+^@?=组成。
    * value  取值,长度支持1-256，由数字0-9、字符a-z、A-Z，及特殊字符._-*#%|+^@?=组成。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'key' => 'getKey',
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
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
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
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
    * Gets type
    *  参数类型，custom_var：自定义，nginx_preset_var：预置的变量。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 参数类型，custom_var：自定义，nginx_preset_var：预置的变量。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets key
    *  参数,长度支持1-256，由数字0-9、字符a-z、A-Z，及特殊字符._-*#%|+^@?=组成。
    *
    * @return string
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string $key 参数,长度支持1-256，由数字0-9、字符a-z、A-Z，及特殊字符._-*#%|+^@?=组成。
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets value
    *  取值,长度支持1-256，由数字0-9、字符a-z、A-Z，及特殊字符._-*#%|+^@?=组成。
    *
    * @return string
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string $value 取值,长度支持1-256，由数字0-9、字符a-z、A-Z，及特殊字符._-*#%|+^@?=组成。
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

