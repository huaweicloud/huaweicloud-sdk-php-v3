<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Constraint implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Constraint';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * attribute  条件属性，参数的某个字段值。
    * operator  操作，当前只支持equal操作。
    * value  取值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'attribute' => 'string',
            'operator' => 'string',
            'value' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * attribute  条件属性，参数的某个字段值。
    * operator  操作，当前只支持equal操作。
    * value  取值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'attribute' => null,
        'operator' => null,
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
    * attribute  条件属性，参数的某个字段值。
    * operator  操作，当前只支持equal操作。
    * value  取值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'attribute' => 'attribute',
            'operator' => 'operator',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * attribute  条件属性，参数的某个字段值。
    * operator  操作，当前只支持equal操作。
    * value  取值。
    *
    * @var string[]
    */
    protected static $setters = [
            'attribute' => 'setAttribute',
            'operator' => 'setOperator',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * attribute  条件属性，参数的某个字段值。
    * operator  操作，当前只支持equal操作。
    * value  取值。
    *
    * @var string[]
    */
    protected static $getters = [
            'attribute' => 'getAttribute',
            'operator' => 'getOperator',
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
        $this->container['attribute'] = isset($data['attribute']) ? $data['attribute'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
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
    * Gets attribute
    *  条件属性，参数的某个字段值。
    *
    * @return string|null
    */
    public function getAttribute()
    {
        return $this->container['attribute'];
    }

    /**
    * Sets attribute
    *
    * @param string|null $attribute 条件属性，参数的某个字段值。
    *
    * @return $this
    */
    public function setAttribute($attribute)
    {
        $this->container['attribute'] = $attribute;
        return $this;
    }

    /**
    * Gets operator
    *  操作，当前只支持equal操作。
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
    * @param string|null $operator 操作，当前只支持equal操作。
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
    *  取值。
    *
    * @return object|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param object|null $value 取值。
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

