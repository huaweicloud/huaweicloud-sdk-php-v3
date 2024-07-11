<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RocketMQConfigResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RocketMQConfigResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  RocketMQ配置名称。
    * value  RocketMQ配置当前值。
    * configType  RocketMQ配置的类型。
    * defaultValue  RocketMQ配置的默认值。
    * validValues  RocketMQ配置取值的范围。
    * valueType  RocketMQ配置值的类型。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'value' => 'string',
            'configType' => 'string',
            'defaultValue' => 'string',
            'validValues' => 'string',
            'valueType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  RocketMQ配置名称。
    * value  RocketMQ配置当前值。
    * configType  RocketMQ配置的类型。
    * defaultValue  RocketMQ配置的默认值。
    * validValues  RocketMQ配置取值的范围。
    * valueType  RocketMQ配置值的类型。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'value' => null,
        'configType' => null,
        'defaultValue' => null,
        'validValues' => null,
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
    * name  RocketMQ配置名称。
    * value  RocketMQ配置当前值。
    * configType  RocketMQ配置的类型。
    * defaultValue  RocketMQ配置的默认值。
    * validValues  RocketMQ配置取值的范围。
    * valueType  RocketMQ配置值的类型。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'value' => 'value',
            'configType' => 'config_type',
            'defaultValue' => 'default_value',
            'validValues' => 'valid_values',
            'valueType' => 'value_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  RocketMQ配置名称。
    * value  RocketMQ配置当前值。
    * configType  RocketMQ配置的类型。
    * defaultValue  RocketMQ配置的默认值。
    * validValues  RocketMQ配置取值的范围。
    * valueType  RocketMQ配置值的类型。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'value' => 'setValue',
            'configType' => 'setConfigType',
            'defaultValue' => 'setDefaultValue',
            'validValues' => 'setValidValues',
            'valueType' => 'setValueType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  RocketMQ配置名称。
    * value  RocketMQ配置当前值。
    * configType  RocketMQ配置的类型。
    * defaultValue  RocketMQ配置的默认值。
    * validValues  RocketMQ配置取值的范围。
    * valueType  RocketMQ配置值的类型。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'value' => 'getValue',
            'configType' => 'getConfigType',
            'defaultValue' => 'getDefaultValue',
            'validValues' => 'getValidValues',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['configType'] = isset($data['configType']) ? $data['configType'] : null;
        $this->container['defaultValue'] = isset($data['defaultValue']) ? $data['defaultValue'] : null;
        $this->container['validValues'] = isset($data['validValues']) ? $data['validValues'] : null;
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
    *  RocketMQ配置名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name RocketMQ配置名称。
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
    *  RocketMQ配置当前值。
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
    * @param string|null $value RocketMQ配置当前值。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets configType
    *  RocketMQ配置的类型。
    *
    * @return string|null
    */
    public function getConfigType()
    {
        return $this->container['configType'];
    }

    /**
    * Sets configType
    *
    * @param string|null $configType RocketMQ配置的类型。
    *
    * @return $this
    */
    public function setConfigType($configType)
    {
        $this->container['configType'] = $configType;
        return $this;
    }

    /**
    * Gets defaultValue
    *  RocketMQ配置的默认值。
    *
    * @return string|null
    */
    public function getDefaultValue()
    {
        return $this->container['defaultValue'];
    }

    /**
    * Sets defaultValue
    *
    * @param string|null $defaultValue RocketMQ配置的默认值。
    *
    * @return $this
    */
    public function setDefaultValue($defaultValue)
    {
        $this->container['defaultValue'] = $defaultValue;
        return $this;
    }

    /**
    * Gets validValues
    *  RocketMQ配置取值的范围。
    *
    * @return string|null
    */
    public function getValidValues()
    {
        return $this->container['validValues'];
    }

    /**
    * Sets validValues
    *
    * @param string|null $validValues RocketMQ配置取值的范围。
    *
    * @return $this
    */
    public function setValidValues($validValues)
    {
        $this->container['validValues'] = $validValues;
        return $this;
    }

    /**
    * Gets valueType
    *  RocketMQ配置值的类型。
    *
    * @return string|null
    */
    public function getValueType()
    {
        return $this->container['valueType'];
    }

    /**
    * Sets valueType
    *
    * @param string|null $valueType RocketMQ配置值的类型。
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

