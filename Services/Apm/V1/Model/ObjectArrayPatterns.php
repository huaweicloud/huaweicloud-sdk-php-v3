<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ObjectArrayPatterns implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'object_array_patterns';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * key  键
    * type  对象类型
    * maxLength  最大长度
    * maxValue  最大值
    * minValue  最小值
    * nullable  是否可以为空值
    * hint  提示信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'key' => 'string',
            'type' => 'string',
            'maxLength' => 'int',
            'maxValue' => 'double',
            'minValue' => 'double',
            'nullable' => 'bool',
            'hint' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * key  键
    * type  对象类型
    * maxLength  最大长度
    * maxValue  最大值
    * minValue  最小值
    * nullable  是否可以为空值
    * hint  提示信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'key' => null,
        'type' => null,
        'maxLength' => 'int32',
        'maxValue' => 'double',
        'minValue' => 'double',
        'nullable' => null,
        'hint' => null
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
    * key  键
    * type  对象类型
    * maxLength  最大长度
    * maxValue  最大值
    * minValue  最小值
    * nullable  是否可以为空值
    * hint  提示信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'key' => 'key',
            'type' => 'type',
            'maxLength' => 'max_length',
            'maxValue' => 'max_value',
            'minValue' => 'min_value',
            'nullable' => 'nullable',
            'hint' => 'hint'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * key  键
    * type  对象类型
    * maxLength  最大长度
    * maxValue  最大值
    * minValue  最小值
    * nullable  是否可以为空值
    * hint  提示信息
    *
    * @var string[]
    */
    protected static $setters = [
            'key' => 'setKey',
            'type' => 'setType',
            'maxLength' => 'setMaxLength',
            'maxValue' => 'setMaxValue',
            'minValue' => 'setMinValue',
            'nullable' => 'setNullable',
            'hint' => 'setHint'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * key  键
    * type  对象类型
    * maxLength  最大长度
    * maxValue  最大值
    * minValue  最小值
    * nullable  是否可以为空值
    * hint  提示信息
    *
    * @var string[]
    */
    protected static $getters = [
            'key' => 'getKey',
            'type' => 'getType',
            'maxLength' => 'getMaxLength',
            'maxValue' => 'getMaxValue',
            'minValue' => 'getMinValue',
            'nullable' => 'getNullable',
            'hint' => 'getHint'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['maxLength'] = isset($data['maxLength']) ? $data['maxLength'] : null;
        $this->container['maxValue'] = isset($data['maxValue']) ? $data['maxValue'] : null;
        $this->container['minValue'] = isset($data['minValue']) ? $data['minValue'] : null;
        $this->container['nullable'] = isset($data['nullable']) ? $data['nullable'] : null;
        $this->container['hint'] = isset($data['hint']) ? $data['hint'] : null;
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
    * Gets key
    *  键
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
    * @param string|null $key 键
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets type
    *  对象类型
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
    * @param string|null $type 对象类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets maxLength
    *  最大长度
    *
    * @return int|null
    */
    public function getMaxLength()
    {
        return $this->container['maxLength'];
    }

    /**
    * Sets maxLength
    *
    * @param int|null $maxLength 最大长度
    *
    * @return $this
    */
    public function setMaxLength($maxLength)
    {
        $this->container['maxLength'] = $maxLength;
        return $this;
    }

    /**
    * Gets maxValue
    *  最大值
    *
    * @return double|null
    */
    public function getMaxValue()
    {
        return $this->container['maxValue'];
    }

    /**
    * Sets maxValue
    *
    * @param double|null $maxValue 最大值
    *
    * @return $this
    */
    public function setMaxValue($maxValue)
    {
        $this->container['maxValue'] = $maxValue;
        return $this;
    }

    /**
    * Gets minValue
    *  最小值
    *
    * @return double|null
    */
    public function getMinValue()
    {
        return $this->container['minValue'];
    }

    /**
    * Sets minValue
    *
    * @param double|null $minValue 最小值
    *
    * @return $this
    */
    public function setMinValue($minValue)
    {
        $this->container['minValue'] = $minValue;
        return $this;
    }

    /**
    * Gets nullable
    *  是否可以为空值
    *
    * @return bool|null
    */
    public function getNullable()
    {
        return $this->container['nullable'];
    }

    /**
    * Sets nullable
    *
    * @param bool|null $nullable 是否可以为空值
    *
    * @return $this
    */
    public function setNullable($nullable)
    {
        $this->container['nullable'] = $nullable;
        return $this;
    }

    /**
    * Gets hint
    *  提示信息
    *
    * @return string|null
    */
    public function getHint()
    {
        return $this->container['hint'];
    }

    /**
    * Sets hint
    *
    * @param string|null $hint 提示信息
    *
    * @return $this
    */
    public function setHint($hint)
    {
        $this->container['hint'] = $hint;
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

