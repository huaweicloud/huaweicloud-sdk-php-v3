<?php

namespace HuaweiCloud\SDK\Cdn\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HttpResponseHeader implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HttpResponseHeader';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  设置HTTP响应头参数。取值：\"Content-Disposition\", \"Content-Language\", \"Access-Control-Allow-Origin\",\"Access-Control-Allow-Methods\", \"Access-Control-Max-Age\", \"Access-Control-Expose-Headers\"或自定义头部。格式要求：长度1~100，以字母开头，可以使用字母、数字和短横杠。
    * value  设置HTTP响应头参数的值。自定义HTTP响应头参数长度范围1~256，支持字母、数字和特定字符（.-_*#!%&+|^~'\"/:;,=@?）。
    * action  设置http响应头操作类型，取值“set/delete”。set代表设置，delete代表删除。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'value' => 'string',
            'action' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  设置HTTP响应头参数。取值：\"Content-Disposition\", \"Content-Language\", \"Access-Control-Allow-Origin\",\"Access-Control-Allow-Methods\", \"Access-Control-Max-Age\", \"Access-Control-Expose-Headers\"或自定义头部。格式要求：长度1~100，以字母开头，可以使用字母、数字和短横杠。
    * value  设置HTTP响应头参数的值。自定义HTTP响应头参数长度范围1~256，支持字母、数字和特定字符（.-_*#!%&+|^~'\"/:;,=@?）。
    * action  设置http响应头操作类型，取值“set/delete”。set代表设置，delete代表删除。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'value' => null,
        'action' => null
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
    * name  设置HTTP响应头参数。取值：\"Content-Disposition\", \"Content-Language\", \"Access-Control-Allow-Origin\",\"Access-Control-Allow-Methods\", \"Access-Control-Max-Age\", \"Access-Control-Expose-Headers\"或自定义头部。格式要求：长度1~100，以字母开头，可以使用字母、数字和短横杠。
    * value  设置HTTP响应头参数的值。自定义HTTP响应头参数长度范围1~256，支持字母、数字和特定字符（.-_*#!%&+|^~'\"/:;,=@?）。
    * action  设置http响应头操作类型，取值“set/delete”。set代表设置，delete代表删除。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'value' => 'value',
            'action' => 'action'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  设置HTTP响应头参数。取值：\"Content-Disposition\", \"Content-Language\", \"Access-Control-Allow-Origin\",\"Access-Control-Allow-Methods\", \"Access-Control-Max-Age\", \"Access-Control-Expose-Headers\"或自定义头部。格式要求：长度1~100，以字母开头，可以使用字母、数字和短横杠。
    * value  设置HTTP响应头参数的值。自定义HTTP响应头参数长度范围1~256，支持字母、数字和特定字符（.-_*#!%&+|^~'\"/:;,=@?）。
    * action  设置http响应头操作类型，取值“set/delete”。set代表设置，delete代表删除。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'value' => 'setValue',
            'action' => 'setAction'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  设置HTTP响应头参数。取值：\"Content-Disposition\", \"Content-Language\", \"Access-Control-Allow-Origin\",\"Access-Control-Allow-Methods\", \"Access-Control-Max-Age\", \"Access-Control-Expose-Headers\"或自定义头部。格式要求：长度1~100，以字母开头，可以使用字母、数字和短横杠。
    * value  设置HTTP响应头参数的值。自定义HTTP响应头参数长度范围1~256，支持字母、数字和特定字符（.-_*#!%&+|^~'\"/:;,=@?）。
    * action  设置http响应头操作类型，取值“set/delete”。set代表设置，delete代表删除。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'value' => 'getValue',
            'action' => 'getAction'
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
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
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
    * Gets name
    *  设置HTTP响应头参数。取值：\"Content-Disposition\", \"Content-Language\", \"Access-Control-Allow-Origin\",\"Access-Control-Allow-Methods\", \"Access-Control-Max-Age\", \"Access-Control-Expose-Headers\"或自定义头部。格式要求：长度1~100，以字母开头，可以使用字母、数字和短横杠。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 设置HTTP响应头参数。取值：\"Content-Disposition\", \"Content-Language\", \"Access-Control-Allow-Origin\",\"Access-Control-Allow-Methods\", \"Access-Control-Max-Age\", \"Access-Control-Expose-Headers\"或自定义头部。格式要求：长度1~100，以字母开头，可以使用字母、数字和短横杠。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets value
    *  设置HTTP响应头参数的值。自定义HTTP响应头参数长度范围1~256，支持字母、数字和特定字符（.-_*#!%&+|^~'\"/:;,=@?）。
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
    * @param string|null $value 设置HTTP响应头参数的值。自定义HTTP响应头参数长度范围1~256，支持字母、数字和特定字符（.-_*#!%&+|^~'\"/:;,=@?）。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets action
    *  设置http响应头操作类型，取值“set/delete”。set代表设置，delete代表删除。
    *
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action 设置http响应头操作类型，取值“set/delete”。set代表设置，delete代表删除。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
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

