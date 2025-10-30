<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TuningParameter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TuningParameter';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * paramName  参数名称。
    * paramValue  参数取值。
    * availability  是否可用。
    * range  参数取值范围。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'paramName' => 'string',
            'paramValue' => 'string',
            'availability' => 'string',
            'range' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * paramName  参数名称。
    * paramValue  参数取值。
    * availability  是否可用。
    * range  参数取值范围。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'paramName' => null,
        'paramValue' => null,
        'availability' => null,
        'range' => null
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
    * paramName  参数名称。
    * paramValue  参数取值。
    * availability  是否可用。
    * range  参数取值范围。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'paramName' => 'param_name',
            'paramValue' => 'param_value',
            'availability' => 'availability',
            'range' => 'range'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * paramName  参数名称。
    * paramValue  参数取值。
    * availability  是否可用。
    * range  参数取值范围。
    *
    * @var string[]
    */
    protected static $setters = [
            'paramName' => 'setParamName',
            'paramValue' => 'setParamValue',
            'availability' => 'setAvailability',
            'range' => 'setRange'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * paramName  参数名称。
    * paramValue  参数取值。
    * availability  是否可用。
    * range  参数取值范围。
    *
    * @var string[]
    */
    protected static $getters = [
            'paramName' => 'getParamName',
            'paramValue' => 'getParamValue',
            'availability' => 'getAvailability',
            'range' => 'getRange'
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
        $this->container['paramName'] = isset($data['paramName']) ? $data['paramName'] : null;
        $this->container['paramValue'] = isset($data['paramValue']) ? $data['paramValue'] : null;
        $this->container['availability'] = isset($data['availability']) ? $data['availability'] : null;
        $this->container['range'] = isset($data['range']) ? $data['range'] : null;
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
    * Gets paramName
    *  参数名称。
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
    * @param string|null $paramName 参数名称。
    *
    * @return $this
    */
    public function setParamName($paramName)
    {
        $this->container['paramName'] = $paramName;
        return $this;
    }

    /**
    * Gets paramValue
    *  参数取值。
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
    * @param string|null $paramValue 参数取值。
    *
    * @return $this
    */
    public function setParamValue($paramValue)
    {
        $this->container['paramValue'] = $paramValue;
        return $this;
    }

    /**
    * Gets availability
    *  是否可用。
    *
    * @return string|null
    */
    public function getAvailability()
    {
        return $this->container['availability'];
    }

    /**
    * Sets availability
    *
    * @param string|null $availability 是否可用。
    *
    * @return $this
    */
    public function setAvailability($availability)
    {
        $this->container['availability'] = $availability;
        return $this;
    }

    /**
    * Gets range
    *  参数取值范围。
    *
    * @return string|null
    */
    public function getRange()
    {
        return $this->container['range'];
    }

    /**
    * Sets range
    *
    * @param string|null $range 参数取值范围。
    *
    * @return $this
    */
    public function setRange($range)
    {
        $this->container['range'] = $range;
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

