<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TmsKeyValues implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TmsKeyValues';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * key  键。  支持可用 UTF-8 格式表示的字母(包含中文)、数字和空格，以及以下字符： _ . : = + - @； \\_sys\\_开头属于系统标签，租户不能输入
    * values  值。            支持可用 UTF-8 格式表示的字母(包含中文)、数字和空格，以及以下字符： _ . : / = + - @
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'key' => 'string',
            'values' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * key  键。  支持可用 UTF-8 格式表示的字母(包含中文)、数字和空格，以及以下字符： _ . : = + - @； \\_sys\\_开头属于系统标签，租户不能输入
    * values  值。            支持可用 UTF-8 格式表示的字母(包含中文)、数字和空格，以及以下字符： _ . : / = + - @
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'key' => null,
        'values' => null
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
    * key  键。  支持可用 UTF-8 格式表示的字母(包含中文)、数字和空格，以及以下字符： _ . : = + - @； \\_sys\\_开头属于系统标签，租户不能输入
    * values  值。            支持可用 UTF-8 格式表示的字母(包含中文)、数字和空格，以及以下字符： _ . : / = + - @
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'key' => 'key',
            'values' => 'values'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * key  键。  支持可用 UTF-8 格式表示的字母(包含中文)、数字和空格，以及以下字符： _ . : = + - @； \\_sys\\_开头属于系统标签，租户不能输入
    * values  值。            支持可用 UTF-8 格式表示的字母(包含中文)、数字和空格，以及以下字符： _ . : / = + - @
    *
    * @var string[]
    */
    protected static $setters = [
            'key' => 'setKey',
            'values' => 'setValues'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * key  键。  支持可用 UTF-8 格式表示的字母(包含中文)、数字和空格，以及以下字符： _ . : = + - @； \\_sys\\_开头属于系统标签，租户不能输入
    * values  值。            支持可用 UTF-8 格式表示的字母(包含中文)、数字和空格，以及以下字符： _ . : / = + - @
    *
    * @var string[]
    */
    protected static $getters = [
            'key' => 'getKey',
            'values' => 'getValues'
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
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['key']) && (mb_strlen($this->container['key']) > 128)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['key']) && (mb_strlen($this->container['key']) < 1)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be bigger than or equal to 1.";
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
    * Gets key
    *  键。  支持可用 UTF-8 格式表示的字母(包含中文)、数字和空格，以及以下字符： _ . : = + - @； \\_sys\\_开头属于系统标签，租户不能输入
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
    * @param string|null $key 键。  支持可用 UTF-8 格式表示的字母(包含中文)、数字和空格，以及以下字符： _ . : = + - @； \\_sys\\_开头属于系统标签，租户不能输入
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets values
    *  值。            支持可用 UTF-8 格式表示的字母(包含中文)、数字和空格，以及以下字符： _ . : / = + - @
    *
    * @return string[]|null
    */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
    * Sets values
    *
    * @param string[]|null $values 值。            支持可用 UTF-8 格式表示的字母(包含中文)、数字和空格，以及以下字符： _ . : / = + - @
    *
    * @return $this
    */
    public function setValues($values)
    {
        $this->container['values'] = $values;
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

