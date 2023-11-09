<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataobjectSearchConditionData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataobjectSearch_condition_data';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * filed  字段
    * expression  逻辑表达式
    * value  字段值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'filed' => 'string',
            'expression' => 'string',
            'value' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * filed  字段
    * expression  逻辑表达式
    * value  字段值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'filed' => null,
        'expression' => null,
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
    * filed  字段
    * expression  逻辑表达式
    * value  字段值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'filed' => 'filed',
            'expression' => 'expression',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * filed  字段
    * expression  逻辑表达式
    * value  字段值
    *
    * @var string[]
    */
    protected static $setters = [
            'filed' => 'setFiled',
            'expression' => 'setExpression',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * filed  字段
    * expression  逻辑表达式
    * value  字段值
    *
    * @var string[]
    */
    protected static $getters = [
            'filed' => 'getFiled',
            'expression' => 'getExpression',
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
        $this->container['filed'] = isset($data['filed']) ? $data['filed'] : null;
        $this->container['expression'] = isset($data['expression']) ? $data['expression'] : null;
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
            if (!is_null($this->container['filed']) && (mb_strlen($this->container['filed']) > 64)) {
                $invalidProperties[] = "invalid value for 'filed', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['filed']) && (mb_strlen($this->container['filed']) < 0)) {
                $invalidProperties[] = "invalid value for 'filed', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['expression']) && (mb_strlen($this->container['expression']) > 64)) {
                $invalidProperties[] = "invalid value for 'expression', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['expression']) && (mb_strlen($this->container['expression']) < 0)) {
                $invalidProperties[] = "invalid value for 'expression', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) > 64)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) < 0)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be bigger than or equal to 0.";
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
    * Gets filed
    *  字段
    *
    * @return string|null
    */
    public function getFiled()
    {
        return $this->container['filed'];
    }

    /**
    * Sets filed
    *
    * @param string|null $filed 字段
    *
    * @return $this
    */
    public function setFiled($filed)
    {
        $this->container['filed'] = $filed;
        return $this;
    }

    /**
    * Gets expression
    *  逻辑表达式
    *
    * @return string|null
    */
    public function getExpression()
    {
        return $this->container['expression'];
    }

    /**
    * Sets expression
    *
    * @param string|null $expression 逻辑表达式
    *
    * @return $this
    */
    public function setExpression($expression)
    {
        $this->container['expression'] = $expression;
        return $this;
    }

    /**
    * Gets value
    *  字段值
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
    * @param string|null $value 字段值
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

