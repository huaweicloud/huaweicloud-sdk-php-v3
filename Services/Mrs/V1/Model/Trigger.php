<?php

namespace HuaweiCloud\SDK\Mrs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Trigger implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Trigger';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * metricName  指标名称。  该触发条件会依据该名称对应指标的值来进行判断。  最大长度为64个字符。
    * metricValue  指标阈值。  触发该条件的指标阈值，只允许输入整数或者带两位小数的数。
    * comparisonOperator  指标判断逻辑运算符，包括：  - LT：小于 - GT：大于 - LTOE：小于等于 - GTOE：大于等于
    * evaluationPeriods  判断连续满足指标阈值的周期数(一个周期为5分钟)。  取值范围[1～288]
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'metricName' => 'string',
            'metricValue' => 'string',
            'comparisonOperator' => 'string',
            'evaluationPeriods' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * metricName  指标名称。  该触发条件会依据该名称对应指标的值来进行判断。  最大长度为64个字符。
    * metricValue  指标阈值。  触发该条件的指标阈值，只允许输入整数或者带两位小数的数。
    * comparisonOperator  指标判断逻辑运算符，包括：  - LT：小于 - GT：大于 - LTOE：小于等于 - GTOE：大于等于
    * evaluationPeriods  判断连续满足指标阈值的周期数(一个周期为5分钟)。  取值范围[1～288]
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'metricName' => null,
        'metricValue' => null,
        'comparisonOperator' => null,
        'evaluationPeriods' => 'int32'
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
    * metricName  指标名称。  该触发条件会依据该名称对应指标的值来进行判断。  最大长度为64个字符。
    * metricValue  指标阈值。  触发该条件的指标阈值，只允许输入整数或者带两位小数的数。
    * comparisonOperator  指标判断逻辑运算符，包括：  - LT：小于 - GT：大于 - LTOE：小于等于 - GTOE：大于等于
    * evaluationPeriods  判断连续满足指标阈值的周期数(一个周期为5分钟)。  取值范围[1～288]
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'metricName' => 'metric_name',
            'metricValue' => 'metric_value',
            'comparisonOperator' => 'comparison_operator',
            'evaluationPeriods' => 'evaluation_periods'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * metricName  指标名称。  该触发条件会依据该名称对应指标的值来进行判断。  最大长度为64个字符。
    * metricValue  指标阈值。  触发该条件的指标阈值，只允许输入整数或者带两位小数的数。
    * comparisonOperator  指标判断逻辑运算符，包括：  - LT：小于 - GT：大于 - LTOE：小于等于 - GTOE：大于等于
    * evaluationPeriods  判断连续满足指标阈值的周期数(一个周期为5分钟)。  取值范围[1～288]
    *
    * @var string[]
    */
    protected static $setters = [
            'metricName' => 'setMetricName',
            'metricValue' => 'setMetricValue',
            'comparisonOperator' => 'setComparisonOperator',
            'evaluationPeriods' => 'setEvaluationPeriods'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * metricName  指标名称。  该触发条件会依据该名称对应指标的值来进行判断。  最大长度为64个字符。
    * metricValue  指标阈值。  触发该条件的指标阈值，只允许输入整数或者带两位小数的数。
    * comparisonOperator  指标判断逻辑运算符，包括：  - LT：小于 - GT：大于 - LTOE：小于等于 - GTOE：大于等于
    * evaluationPeriods  判断连续满足指标阈值的周期数(一个周期为5分钟)。  取值范围[1～288]
    *
    * @var string[]
    */
    protected static $getters = [
            'metricName' => 'getMetricName',
            'metricValue' => 'getMetricValue',
            'comparisonOperator' => 'getComparisonOperator',
            'evaluationPeriods' => 'getEvaluationPeriods'
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
        $this->container['metricName'] = isset($data['metricName']) ? $data['metricName'] : null;
        $this->container['metricValue'] = isset($data['metricValue']) ? $data['metricValue'] : null;
        $this->container['comparisonOperator'] = isset($data['comparisonOperator']) ? $data['comparisonOperator'] : null;
        $this->container['evaluationPeriods'] = isset($data['evaluationPeriods']) ? $data['evaluationPeriods'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['metricName'] === null) {
            $invalidProperties[] = "'metricName' can't be null";
        }
            if ((mb_strlen($this->container['metricName']) > 64)) {
                $invalidProperties[] = "invalid value for 'metricName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['metricName']) < 0)) {
                $invalidProperties[] = "invalid value for 'metricName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['metricValue'] === null) {
            $invalidProperties[] = "'metricValue' can't be null";
        }
        if ($this->container['evaluationPeriods'] === null) {
            $invalidProperties[] = "'evaluationPeriods' can't be null";
        }
            if (($this->container['evaluationPeriods'] > 288)) {
                $invalidProperties[] = "invalid value for 'evaluationPeriods', must be smaller than or equal to 288.";
            }
            if (($this->container['evaluationPeriods'] < 1)) {
                $invalidProperties[] = "invalid value for 'evaluationPeriods', must be bigger than or equal to 1.";
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
    * Gets metricName
    *  指标名称。  该触发条件会依据该名称对应指标的值来进行判断。  最大长度为64个字符。
    *
    * @return string
    */
    public function getMetricName()
    {
        return $this->container['metricName'];
    }

    /**
    * Sets metricName
    *
    * @param string $metricName 指标名称。  该触发条件会依据该名称对应指标的值来进行判断。  最大长度为64个字符。
    *
    * @return $this
    */
    public function setMetricName($metricName)
    {
        $this->container['metricName'] = $metricName;
        return $this;
    }

    /**
    * Gets metricValue
    *  指标阈值。  触发该条件的指标阈值，只允许输入整数或者带两位小数的数。
    *
    * @return string
    */
    public function getMetricValue()
    {
        return $this->container['metricValue'];
    }

    /**
    * Sets metricValue
    *
    * @param string $metricValue 指标阈值。  触发该条件的指标阈值，只允许输入整数或者带两位小数的数。
    *
    * @return $this
    */
    public function setMetricValue($metricValue)
    {
        $this->container['metricValue'] = $metricValue;
        return $this;
    }

    /**
    * Gets comparisonOperator
    *  指标判断逻辑运算符，包括：  - LT：小于 - GT：大于 - LTOE：小于等于 - GTOE：大于等于
    *
    * @return string|null
    */
    public function getComparisonOperator()
    {
        return $this->container['comparisonOperator'];
    }

    /**
    * Sets comparisonOperator
    *
    * @param string|null $comparisonOperator 指标判断逻辑运算符，包括：  - LT：小于 - GT：大于 - LTOE：小于等于 - GTOE：大于等于
    *
    * @return $this
    */
    public function setComparisonOperator($comparisonOperator)
    {
        $this->container['comparisonOperator'] = $comparisonOperator;
        return $this;
    }

    /**
    * Gets evaluationPeriods
    *  判断连续满足指标阈值的周期数(一个周期为5分钟)。  取值范围[1～288]
    *
    * @return int
    */
    public function getEvaluationPeriods()
    {
        return $this->container['evaluationPeriods'];
    }

    /**
    * Sets evaluationPeriods
    *
    * @param int $evaluationPeriods 判断连续满足指标阈值的周期数(一个周期为5分钟)。  取值范围[1～288]
    *
    * @return $this
    */
    public function setEvaluationPeriods($evaluationPeriods)
    {
        $this->container['evaluationPeriods'] = $evaluationPeriods;
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

