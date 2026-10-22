<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AbuseCondition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AbuseCondition';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dimension  算力消耗统计维度。input: 仅输入, output: 仅输出, input_output: 输入+输出。call_count仅支持input
    * metric  阈值指标类型。call_count: 调用次数, char_count: 字符数
    * value  阈值数值，必须大于0；call_count最大1000000，char_count最大100000000000000
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dimension' => 'string',
            'metric' => 'string',
            'value' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dimension  算力消耗统计维度。input: 仅输入, output: 仅输出, input_output: 输入+输出。call_count仅支持input
    * metric  阈值指标类型。call_count: 调用次数, char_count: 字符数
    * value  阈值数值，必须大于0；call_count最大1000000，char_count最大100000000000000
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dimension' => null,
        'metric' => null,
        'value' => 'int64'
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
    * dimension  算力消耗统计维度。input: 仅输入, output: 仅输出, input_output: 输入+输出。call_count仅支持input
    * metric  阈值指标类型。call_count: 调用次数, char_count: 字符数
    * value  阈值数值，必须大于0；call_count最大1000000，char_count最大100000000000000
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dimension' => 'dimension',
            'metric' => 'metric',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dimension  算力消耗统计维度。input: 仅输入, output: 仅输出, input_output: 输入+输出。call_count仅支持input
    * metric  阈值指标类型。call_count: 调用次数, char_count: 字符数
    * value  阈值数值，必须大于0；call_count最大1000000，char_count最大100000000000000
    *
    * @var string[]
    */
    protected static $setters = [
            'dimension' => 'setDimension',
            'metric' => 'setMetric',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dimension  算力消耗统计维度。input: 仅输入, output: 仅输出, input_output: 输入+输出。call_count仅支持input
    * metric  阈值指标类型。call_count: 调用次数, char_count: 字符数
    * value  阈值数值，必须大于0；call_count最大1000000，char_count最大100000000000000
    *
    * @var string[]
    */
    protected static $getters = [
            'dimension' => 'getDimension',
            'metric' => 'getMetric',
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
    const DIMENSION_INPUT = 'input';
    const DIMENSION_OUTPUT = 'output';
    const DIMENSION_INPUT_OUTPUT = 'input_output';
    const METRIC_CALL_COUNT = 'call_count';
    const METRIC_CHAR_COUNT = 'char_count';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDimensionAllowableValues()
    {
        return [
            self::DIMENSION_INPUT,
            self::DIMENSION_OUTPUT,
            self::DIMENSION_INPUT_OUTPUT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMetricAllowableValues()
    {
        return [
            self::METRIC_CALL_COUNT,
            self::METRIC_CHAR_COUNT,
        ];
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
        $this->container['dimension'] = isset($data['dimension']) ? $data['dimension'] : null;
        $this->container['metric'] = isset($data['metric']) ? $data['metric'] : null;
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
            $allowedValues = $this->getDimensionAllowableValues();
                if (!is_null($this->container['dimension']) && !in_array($this->container['dimension'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dimension', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getMetricAllowableValues();
                if (!is_null($this->container['metric']) && !in_array($this->container['metric'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'metric', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['value']) && ($this->container['value'] > 100000000000000)) {
                $invalidProperties[] = "invalid value for 'value', must be smaller than or equal to 100000000000000.";
            }
            if (!is_null($this->container['value']) && ($this->container['value'] < 1)) {
                $invalidProperties[] = "invalid value for 'value', must be bigger than or equal to 1.";
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
    * Gets dimension
    *  算力消耗统计维度。input: 仅输入, output: 仅输出, input_output: 输入+输出。call_count仅支持input
    *
    * @return string|null
    */
    public function getDimension()
    {
        return $this->container['dimension'];
    }

    /**
    * Sets dimension
    *
    * @param string|null $dimension 算力消耗统计维度。input: 仅输入, output: 仅输出, input_output: 输入+输出。call_count仅支持input
    *
    * @return $this
    */
    public function setDimension($dimension)
    {
        $this->container['dimension'] = $dimension;
        return $this;
    }

    /**
    * Gets metric
    *  阈值指标类型。call_count: 调用次数, char_count: 字符数
    *
    * @return string|null
    */
    public function getMetric()
    {
        return $this->container['metric'];
    }

    /**
    * Sets metric
    *
    * @param string|null $metric 阈值指标类型。call_count: 调用次数, char_count: 字符数
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
    *  阈值数值，必须大于0；call_count最大1000000，char_count最大100000000000000
    *
    * @return int|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param int|null $value 阈值数值，必须大于0；call_count最大1000000，char_count最大100000000000000
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

