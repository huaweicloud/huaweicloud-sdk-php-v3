<?php

namespace HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PhoneNumberItemDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PhoneNumberItemDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * value  包含电话号码的字符串
    * type  表示电话号码类型的字符串
    * primary  一个布尔值，表示这是否是用户的主电话号码
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'value' => 'string',
            'type' => 'string',
            'primary' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * value  包含电话号码的字符串
    * type  表示电话号码类型的字符串
    * primary  一个布尔值，表示这是否是用户的主电话号码
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'value' => null,
        'type' => null,
        'primary' => null
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
    * value  包含电话号码的字符串
    * type  表示电话号码类型的字符串
    * primary  一个布尔值，表示这是否是用户的主电话号码
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'value' => 'value',
            'type' => 'type',
            'primary' => 'primary'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * value  包含电话号码的字符串
    * type  表示电话号码类型的字符串
    * primary  一个布尔值，表示这是否是用户的主电话号码
    *
    * @var string[]
    */
    protected static $setters = [
            'value' => 'setValue',
            'type' => 'setType',
            'primary' => 'setPrimary'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * value  包含电话号码的字符串
    * type  表示电话号码类型的字符串
    * primary  一个布尔值，表示这是否是用户的主电话号码
    *
    * @var string[]
    */
    protected static $getters = [
            'value' => 'getValue',
            'type' => 'getType',
            'primary' => 'getPrimary'
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
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['primary'] = isset($data['primary']) ? $data['primary'] : null;
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
    * Gets value
    *  包含电话号码的字符串
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
    * @param string|null $value 包含电话号码的字符串
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets type
    *  表示电话号码类型的字符串
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 表示电话号码类型的字符串
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets primary
    *  一个布尔值，表示这是否是用户的主电话号码
    *
    * @return bool|null
    */
    public function getPrimary()
    {
        return $this->container['primary'];
    }

    /**
    * Sets primary
    *
    * @param bool|null $primary 一个布尔值，表示这是否是用户的主电话号码
    *
    * @return $this
    */
    public function setPrimary($primary)
    {
        $this->container['primary'] = $primary;
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

