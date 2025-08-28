<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HealthReportSingleValueStat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HealthReportSingleValueStat';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * metric  指标名。
    * value  数值。
    * maxValue  最大值。
    * normalized  归一化值。
    * stage  当前状态。
    * timestamp  指标采集时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'metric' => 'string',
            'value' => 'double',
            'maxValue' => 'double',
            'normalized' => 'double',
            'stage' => 'string',
            'timestamp' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * metric  指标名。
    * value  数值。
    * maxValue  最大值。
    * normalized  归一化值。
    * stage  当前状态。
    * timestamp  指标采集时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'metric' => null,
        'value' => 'double',
        'maxValue' => 'double',
        'normalized' => 'double',
        'stage' => null,
        'timestamp' => 'int64'
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
    * metric  指标名。
    * value  数值。
    * maxValue  最大值。
    * normalized  归一化值。
    * stage  当前状态。
    * timestamp  指标采集时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'metric' => 'metric',
            'value' => 'value',
            'maxValue' => 'max_value',
            'normalized' => 'normalized',
            'stage' => 'stage',
            'timestamp' => 'timestamp'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * metric  指标名。
    * value  数值。
    * maxValue  最大值。
    * normalized  归一化值。
    * stage  当前状态。
    * timestamp  指标采集时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'metric' => 'setMetric',
            'value' => 'setValue',
            'maxValue' => 'setMaxValue',
            'normalized' => 'setNormalized',
            'stage' => 'setStage',
            'timestamp' => 'setTimestamp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * metric  指标名。
    * value  数值。
    * maxValue  最大值。
    * normalized  归一化值。
    * stage  当前状态。
    * timestamp  指标采集时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'metric' => 'getMetric',
            'value' => 'getValue',
            'maxValue' => 'getMaxValue',
            'normalized' => 'getNormalized',
            'stage' => 'getStage',
            'timestamp' => 'getTimestamp'
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
        $this->container['metric'] = isset($data['metric']) ? $data['metric'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['maxValue'] = isset($data['maxValue']) ? $data['maxValue'] : null;
        $this->container['normalized'] = isset($data['normalized']) ? $data['normalized'] : null;
        $this->container['stage'] = isset($data['stage']) ? $data['stage'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['metric'] === null) {
            $invalidProperties[] = "'metric' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if ($this->container['maxValue'] === null) {
            $invalidProperties[] = "'maxValue' can't be null";
        }
        if ($this->container['normalized'] === null) {
            $invalidProperties[] = "'normalized' can't be null";
        }
        if ($this->container['stage'] === null) {
            $invalidProperties[] = "'stage' can't be null";
        }
        if ($this->container['timestamp'] === null) {
            $invalidProperties[] = "'timestamp' can't be null";
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
    * Gets metric
    *  指标名。
    *
    * @return string
    */
    public function getMetric()
    {
        return $this->container['metric'];
    }

    /**
    * Sets metric
    *
    * @param string $metric 指标名。
    *
    * @return $this
    */
    public function setMetric($metric)
    {
        $this->container['metric'] = $metric;
        return $this;
    }

    /**
    * Gets value
    *  数值。
    *
    * @return double
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param double $value 数值。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets maxValue
    *  最大值。
    *
    * @return double
    */
    public function getMaxValue()
    {
        return $this->container['maxValue'];
    }

    /**
    * Sets maxValue
    *
    * @param double $maxValue 最大值。
    *
    * @return $this
    */
    public function setMaxValue($maxValue)
    {
        $this->container['maxValue'] = $maxValue;
        return $this;
    }

    /**
    * Gets normalized
    *  归一化值。
    *
    * @return double
    */
    public function getNormalized()
    {
        return $this->container['normalized'];
    }

    /**
    * Sets normalized
    *
    * @param double $normalized 归一化值。
    *
    * @return $this
    */
    public function setNormalized($normalized)
    {
        $this->container['normalized'] = $normalized;
        return $this;
    }

    /**
    * Gets stage
    *  当前状态。
    *
    * @return string
    */
    public function getStage()
    {
        return $this->container['stage'];
    }

    /**
    * Sets stage
    *
    * @param string $stage 当前状态。
    *
    * @return $this
    */
    public function setStage($stage)
    {
        $this->container['stage'] = $stage;
        return $this;
    }

    /**
    * Gets timestamp
    *  指标采集时间。
    *
    * @return int
    */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
    * Sets timestamp
    *
    * @param int $timestamp 指标采集时间。
    *
    * @return $this
    */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;
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

