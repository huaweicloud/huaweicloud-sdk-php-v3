<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MetricDataPoint implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MetricDataPoint';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dimensions  **参数解释**： 维度信息
    * timestamp  **参数解释**： 指标采集时间 **取值范围**： 最小值为0
    * value  **参数解释**： 指标值 **取值范围**： 不涉及
    * unit  **参数解释**： 数据的单位。    **取值范围**： 长度为[0,32]个字符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dimensions' => '\HuaweiCloud\SDK\Ces\V2\Model\MetricDataPointDimensions[]',
            'timestamp' => 'int',
            'value' => 'double',
            'unit' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dimensions  **参数解释**： 维度信息
    * timestamp  **参数解释**： 指标采集时间 **取值范围**： 最小值为0
    * value  **参数解释**： 指标值 **取值范围**： 不涉及
    * unit  **参数解释**： 数据的单位。    **取值范围**： 长度为[0,32]个字符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dimensions' => null,
        'timestamp' => 'int64',
        'value' => 'double',
        'unit' => null
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
    * dimensions  **参数解释**： 维度信息
    * timestamp  **参数解释**： 指标采集时间 **取值范围**： 最小值为0
    * value  **参数解释**： 指标值 **取值范围**： 不涉及
    * unit  **参数解释**： 数据的单位。    **取值范围**： 长度为[0,32]个字符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dimensions' => 'dimensions',
            'timestamp' => 'timestamp',
            'value' => 'value',
            'unit' => 'unit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dimensions  **参数解释**： 维度信息
    * timestamp  **参数解释**： 指标采集时间 **取值范围**： 最小值为0
    * value  **参数解释**： 指标值 **取值范围**： 不涉及
    * unit  **参数解释**： 数据的单位。    **取值范围**： 长度为[0,32]个字符。
    *
    * @var string[]
    */
    protected static $setters = [
            'dimensions' => 'setDimensions',
            'timestamp' => 'setTimestamp',
            'value' => 'setValue',
            'unit' => 'setUnit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dimensions  **参数解释**： 维度信息
    * timestamp  **参数解释**： 指标采集时间 **取值范围**： 最小值为0
    * value  **参数解释**： 指标值 **取值范围**： 不涉及
    * unit  **参数解释**： 数据的单位。    **取值范围**： 长度为[0,32]个字符。
    *
    * @var string[]
    */
    protected static $getters = [
            'dimensions' => 'getDimensions',
            'timestamp' => 'getTimestamp',
            'value' => 'getValue',
            'unit' => 'getUnit'
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
        $this->container['dimensions'] = isset($data['dimensions']) ? $data['dimensions'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['timestamp']) && ($this->container['timestamp'] < 0)) {
                $invalidProperties[] = "invalid value for 'timestamp', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['unit']) && (mb_strlen($this->container['unit']) > 32)) {
                $invalidProperties[] = "invalid value for 'unit', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['unit']) && (mb_strlen($this->container['unit']) < 0)) {
                $invalidProperties[] = "invalid value for 'unit', the character length must be bigger than or equal to 0.";
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
    * Gets dimensions
    *  **参数解释**： 维度信息
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\MetricDataPointDimensions[]|null
    */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
    * Sets dimensions
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\MetricDataPointDimensions[]|null $dimensions **参数解释**： 维度信息
    *
    * @return $this
    */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;
        return $this;
    }

    /**
    * Gets timestamp
    *  **参数解释**： 指标采集时间 **取值范围**： 最小值为0
    *
    * @return int|null
    */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
    * Sets timestamp
    *
    * @param int|null $timestamp **参数解释**： 指标采集时间 **取值范围**： 最小值为0
    *
    * @return $this
    */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;
        return $this;
    }

    /**
    * Gets value
    *  **参数解释**： 指标值 **取值范围**： 不涉及
    *
    * @return double|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param double|null $value **参数解释**： 指标值 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets unit
    *  **参数解释**： 数据的单位。    **取值范围**： 长度为[0,32]个字符。
    *
    * @return string|null
    */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
    * Sets unit
    *
    * @param string|null $unit **参数解释**： 数据的单位。    **取值范围**： 长度为[0,32]个字符。
    *
    * @return $this
    */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;
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

