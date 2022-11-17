<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryRedisConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryRedisConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * paramValue  配置参数值。
    * valueType  配置参数的值类型。
    * valueRange  配置参数的取值范围。
    * description  配置项的描述。
    * defaultValue  配置参数的默认值。
    * paramName  配置参数名称。
    * paramId  配置参数ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'paramValue' => 'string',
            'valueType' => 'string',
            'valueRange' => 'string',
            'description' => 'string',
            'defaultValue' => 'string',
            'paramName' => 'string',
            'paramId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * paramValue  配置参数值。
    * valueType  配置参数的值类型。
    * valueRange  配置参数的取值范围。
    * description  配置项的描述。
    * defaultValue  配置参数的默认值。
    * paramName  配置参数名称。
    * paramId  配置参数ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'paramValue' => 'String',
        'valueType' => 'String',
        'valueRange' => 'String',
        'description' => 'String',
        'defaultValue' => 'String',
        'paramName' => 'String',
        'paramId' => null
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
    * paramValue  配置参数值。
    * valueType  配置参数的值类型。
    * valueRange  配置参数的取值范围。
    * description  配置项的描述。
    * defaultValue  配置参数的默认值。
    * paramName  配置参数名称。
    * paramId  配置参数ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'paramValue' => 'param_value',
            'valueType' => 'value_type',
            'valueRange' => 'value_range',
            'description' => 'description',
            'defaultValue' => 'default_value',
            'paramName' => 'param_name',
            'paramId' => 'param_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * paramValue  配置参数值。
    * valueType  配置参数的值类型。
    * valueRange  配置参数的取值范围。
    * description  配置项的描述。
    * defaultValue  配置参数的默认值。
    * paramName  配置参数名称。
    * paramId  配置参数ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'paramValue' => 'setParamValue',
            'valueType' => 'setValueType',
            'valueRange' => 'setValueRange',
            'description' => 'setDescription',
            'defaultValue' => 'setDefaultValue',
            'paramName' => 'setParamName',
            'paramId' => 'setParamId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * paramValue  配置参数值。
    * valueType  配置参数的值类型。
    * valueRange  配置参数的取值范围。
    * description  配置项的描述。
    * defaultValue  配置参数的默认值。
    * paramName  配置参数名称。
    * paramId  配置参数ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'paramValue' => 'getParamValue',
            'valueType' => 'getValueType',
            'valueRange' => 'getValueRange',
            'description' => 'getDescription',
            'defaultValue' => 'getDefaultValue',
            'paramName' => 'getParamName',
            'paramId' => 'getParamId'
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
        $this->container['paramValue'] = isset($data['paramValue']) ? $data['paramValue'] : null;
        $this->container['valueType'] = isset($data['valueType']) ? $data['valueType'] : null;
        $this->container['valueRange'] = isset($data['valueRange']) ? $data['valueRange'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['defaultValue'] = isset($data['defaultValue']) ? $data['defaultValue'] : null;
        $this->container['paramName'] = isset($data['paramName']) ? $data['paramName'] : null;
        $this->container['paramId'] = isset($data['paramId']) ? $data['paramId'] : null;
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
    * Gets paramValue
    *  配置参数值。
    *
    * @return string|null
    */
    public function getParamValue()
    {
        return $this->container['paramValue'];
    }

    /**
    * Sets paramValue
    *
    * @param string|null $paramValue 配置参数值。
    *
    * @return $this
    */
    public function setParamValue($paramValue)
    {
        $this->container['paramValue'] = $paramValue;
        return $this;
    }

    /**
    * Gets valueType
    *  配置参数的值类型。
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
    * @param string|null $valueType 配置参数的值类型。
    *
    * @return $this
    */
    public function setValueType($valueType)
    {
        $this->container['valueType'] = $valueType;
        return $this;
    }

    /**
    * Gets valueRange
    *  配置参数的取值范围。
    *
    * @return string|null
    */
    public function getValueRange()
    {
        return $this->container['valueRange'];
    }

    /**
    * Sets valueRange
    *
    * @param string|null $valueRange 配置参数的取值范围。
    *
    * @return $this
    */
    public function setValueRange($valueRange)
    {
        $this->container['valueRange'] = $valueRange;
        return $this;
    }

    /**
    * Gets description
    *  配置项的描述。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 配置项的描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets defaultValue
    *  配置参数的默认值。
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
    * @param string|null $defaultValue 配置参数的默认值。
    *
    * @return $this
    */
    public function setDefaultValue($defaultValue)
    {
        $this->container['defaultValue'] = $defaultValue;
        return $this;
    }

    /**
    * Gets paramName
    *  配置参数名称。
    *
    * @return string|null
    */
    public function getParamName()
    {
        return $this->container['paramName'];
    }

    /**
    * Sets paramName
    *
    * @param string|null $paramName 配置参数名称。
    *
    * @return $this
    */
    public function setParamName($paramName)
    {
        $this->container['paramName'] = $paramName;
        return $this;
    }

    /**
    * Gets paramId
    *  配置参数ID。
    *
    * @return string|null
    */
    public function getParamId()
    {
        return $this->container['paramId'];
    }

    /**
    * Sets paramId
    *
    * @param string|null $paramId 配置参数ID。
    *
    * @return $this
    */
    public function setParamId($paramId)
    {
        $this->container['paramId'] = $paramId;
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

