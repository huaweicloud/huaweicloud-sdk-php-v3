<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ParamGroupParameterDifferences implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ParamGroupParameterDifferences';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * parameterName  参数名称。
    * sourceValue  源参数模板中的参数值。
    * targetValue  目标参数模板中的参数值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'parameterName' => 'string',
            'sourceValue' => 'string',
            'targetValue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * parameterName  参数名称。
    * sourceValue  源参数模板中的参数值。
    * targetValue  目标参数模板中的参数值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'parameterName' => null,
        'sourceValue' => null,
        'targetValue' => null
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
    * parameterName  参数名称。
    * sourceValue  源参数模板中的参数值。
    * targetValue  目标参数模板中的参数值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'parameterName' => 'parameter_name',
            'sourceValue' => 'source_value',
            'targetValue' => 'target_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * parameterName  参数名称。
    * sourceValue  源参数模板中的参数值。
    * targetValue  目标参数模板中的参数值。
    *
    * @var string[]
    */
    protected static $setters = [
            'parameterName' => 'setParameterName',
            'sourceValue' => 'setSourceValue',
            'targetValue' => 'setTargetValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * parameterName  参数名称。
    * sourceValue  源参数模板中的参数值。
    * targetValue  目标参数模板中的参数值。
    *
    * @var string[]
    */
    protected static $getters = [
            'parameterName' => 'getParameterName',
            'sourceValue' => 'getSourceValue',
            'targetValue' => 'getTargetValue'
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
        $this->container['parameterName'] = isset($data['parameterName']) ? $data['parameterName'] : null;
        $this->container['sourceValue'] = isset($data['sourceValue']) ? $data['sourceValue'] : null;
        $this->container['targetValue'] = isset($data['targetValue']) ? $data['targetValue'] : null;
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
    * Gets parameterName
    *  参数名称。
    *
    * @return string|null
    */
    public function getParameterName()
    {
        return $this->container['parameterName'];
    }

    /**
    * Sets parameterName
    *
    * @param string|null $parameterName 参数名称。
    *
    * @return $this
    */
    public function setParameterName($parameterName)
    {
        $this->container['parameterName'] = $parameterName;
        return $this;
    }

    /**
    * Gets sourceValue
    *  源参数模板中的参数值。
    *
    * @return string|null
    */
    public function getSourceValue()
    {
        return $this->container['sourceValue'];
    }

    /**
    * Sets sourceValue
    *
    * @param string|null $sourceValue 源参数模板中的参数值。
    *
    * @return $this
    */
    public function setSourceValue($sourceValue)
    {
        $this->container['sourceValue'] = $sourceValue;
        return $this;
    }

    /**
    * Gets targetValue
    *  目标参数模板中的参数值。
    *
    * @return string|null
    */
    public function getTargetValue()
    {
        return $this->container['targetValue'];
    }

    /**
    * Sets targetValue
    *
    * @param string|null $targetValue 目标参数模板中的参数值。
    *
    * @return $this
    */
    public function setTargetValue($targetValue)
    {
        $this->container['targetValue'] = $targetValue;
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

