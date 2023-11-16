<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RuleProperty implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RuleProperty';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * key  属性键
    * type  类型
    * name  展示名称
    * operator  比较运算符
    * value  属性值
    * valueType  数据类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'key' => 'string',
            'type' => 'string',
            'name' => 'string',
            'operator' => 'string',
            'value' => 'string',
            'valueType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * key  属性键
    * type  类型
    * name  展示名称
    * operator  比较运算符
    * value  属性值
    * valueType  数据类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'key' => null,
        'type' => null,
        'name' => null,
        'operator' => null,
        'value' => null,
        'valueType' => null
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
    * key  属性键
    * type  类型
    * name  展示名称
    * operator  比较运算符
    * value  属性值
    * valueType  数据类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'key' => 'key',
            'type' => 'type',
            'name' => 'name',
            'operator' => 'operator',
            'value' => 'value',
            'valueType' => 'value_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * key  属性键
    * type  类型
    * name  展示名称
    * operator  比较运算符
    * value  属性值
    * valueType  数据类型
    *
    * @var string[]
    */
    protected static $setters = [
            'key' => 'setKey',
            'type' => 'setType',
            'name' => 'setName',
            'operator' => 'setOperator',
            'value' => 'setValue',
            'valueType' => 'setValueType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * key  属性键
    * type  类型
    * name  展示名称
    * operator  比较运算符
    * value  属性值
    * valueType  数据类型
    *
    * @var string[]
    */
    protected static $getters = [
            'key' => 'getKey',
            'type' => 'getType',
            'name' => 'getName',
            'operator' => 'getOperator',
            'value' => 'getValue',
            'valueType' => 'getValueType'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['valueType'] = isset($data['valueType']) ? $data['valueType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
        }
            if ((mb_strlen($this->container['key']) > 255)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be smaller than or equal to 255.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 85)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 85.";
            }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if ($this->container['valueType'] === null) {
            $invalidProperties[] = "'valueType' can't be null";
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
    *  属性键
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
    * @param string $key 属性键
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
    *  类型
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
    * @param string $type 类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets name
    *  展示名称
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
    * @param string $name 展示名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets operator
    *  比较运算符
    *
    * @return string|null
    */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
    * Sets operator
    *
    * @param string|null $operator 比较运算符
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
        return $this;
    }

    /**
    * Gets value
    *  属性值
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
    * @param string $value 属性值
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets valueType
    *  数据类型
    *
    * @return string
    */
    public function getValueType()
    {
        return $this->container['valueType'];
    }

    /**
    * Sets valueType
    *
    * @param string $valueType 数据类型
    *
    * @return $this
    */
    public function setValueType($valueType)
    {
        $this->container['valueType'] = $valueType;
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

