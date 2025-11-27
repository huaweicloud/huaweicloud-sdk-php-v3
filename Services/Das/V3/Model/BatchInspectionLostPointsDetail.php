<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchInspectionLostPointsDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchInspectionLostPointsDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * riskLevel  风险等级
    * metric  检查项
    * metricValue  指标值
    * deductedPoints  扣分值
    * deductedCondition  扣分条件
    * deductedFormula  扣分规则
    * suggestions  优化建议
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'riskLevel' => 'string',
            'metric' => 'string',
            'metricValue' => 'double',
            'deductedPoints' => 'double',
            'deductedCondition' => 'string',
            'deductedFormula' => 'string',
            'suggestions' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * riskLevel  风险等级
    * metric  检查项
    * metricValue  指标值
    * deductedPoints  扣分值
    * deductedCondition  扣分条件
    * deductedFormula  扣分规则
    * suggestions  优化建议
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'riskLevel' => null,
        'metric' => null,
        'metricValue' => 'double',
        'deductedPoints' => 'double',
        'deductedCondition' => null,
        'deductedFormula' => null,
        'suggestions' => null
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
    * riskLevel  风险等级
    * metric  检查项
    * metricValue  指标值
    * deductedPoints  扣分值
    * deductedCondition  扣分条件
    * deductedFormula  扣分规则
    * suggestions  优化建议
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'riskLevel' => 'risk_level',
            'metric' => 'metric',
            'metricValue' => 'metric_value',
            'deductedPoints' => 'deducted_points',
            'deductedCondition' => 'deducted_condition',
            'deductedFormula' => 'deducted_formula',
            'suggestions' => 'suggestions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * riskLevel  风险等级
    * metric  检查项
    * metricValue  指标值
    * deductedPoints  扣分值
    * deductedCondition  扣分条件
    * deductedFormula  扣分规则
    * suggestions  优化建议
    *
    * @var string[]
    */
    protected static $setters = [
            'riskLevel' => 'setRiskLevel',
            'metric' => 'setMetric',
            'metricValue' => 'setMetricValue',
            'deductedPoints' => 'setDeductedPoints',
            'deductedCondition' => 'setDeductedCondition',
            'deductedFormula' => 'setDeductedFormula',
            'suggestions' => 'setSuggestions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * riskLevel  风险等级
    * metric  检查项
    * metricValue  指标值
    * deductedPoints  扣分值
    * deductedCondition  扣分条件
    * deductedFormula  扣分规则
    * suggestions  优化建议
    *
    * @var string[]
    */
    protected static $getters = [
            'riskLevel' => 'getRiskLevel',
            'metric' => 'getMetric',
            'metricValue' => 'getMetricValue',
            'deductedPoints' => 'getDeductedPoints',
            'deductedCondition' => 'getDeductedCondition',
            'deductedFormula' => 'getDeductedFormula',
            'suggestions' => 'getSuggestions'
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
        $this->container['riskLevel'] = isset($data['riskLevel']) ? $data['riskLevel'] : null;
        $this->container['metric'] = isset($data['metric']) ? $data['metric'] : null;
        $this->container['metricValue'] = isset($data['metricValue']) ? $data['metricValue'] : null;
        $this->container['deductedPoints'] = isset($data['deductedPoints']) ? $data['deductedPoints'] : null;
        $this->container['deductedCondition'] = isset($data['deductedCondition']) ? $data['deductedCondition'] : null;
        $this->container['deductedFormula'] = isset($data['deductedFormula']) ? $data['deductedFormula'] : null;
        $this->container['suggestions'] = isset($data['suggestions']) ? $data['suggestions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['riskLevel'] === null) {
            $invalidProperties[] = "'riskLevel' can't be null";
        }
            if ((mb_strlen($this->container['riskLevel']) > 32)) {
                $invalidProperties[] = "invalid value for 'riskLevel', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['riskLevel']) < 1)) {
                $invalidProperties[] = "invalid value for 'riskLevel', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['metric'] === null) {
            $invalidProperties[] = "'metric' can't be null";
        }
            if ((mb_strlen($this->container['metric']) > 64)) {
                $invalidProperties[] = "invalid value for 'metric', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['metric']) < 1)) {
                $invalidProperties[] = "invalid value for 'metric', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['metricValue'] === null) {
            $invalidProperties[] = "'metricValue' can't be null";
        }
            if (($this->container['metricValue'] > 1E+2)) {
                $invalidProperties[] = "invalid value for 'metricValue', must be smaller than or equal to 1E+2.";
            }
            if (($this->container['metricValue'] < 0)) {
                $invalidProperties[] = "invalid value for 'metricValue', must be bigger than or equal to 0.";
            }
        if ($this->container['deductedPoints'] === null) {
            $invalidProperties[] = "'deductedPoints' can't be null";
        }
            if (($this->container['deductedPoints'] > 1E+2)) {
                $invalidProperties[] = "invalid value for 'deductedPoints', must be smaller than or equal to 1E+2.";
            }
            if (($this->container['deductedPoints'] < 0)) {
                $invalidProperties[] = "invalid value for 'deductedPoints', must be bigger than or equal to 0.";
            }
        if ($this->container['deductedCondition'] === null) {
            $invalidProperties[] = "'deductedCondition' can't be null";
        }
            if ((mb_strlen($this->container['deductedCondition']) > 1024)) {
                $invalidProperties[] = "invalid value for 'deductedCondition', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['deductedCondition']) < 1)) {
                $invalidProperties[] = "invalid value for 'deductedCondition', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['deductedFormula'] === null) {
            $invalidProperties[] = "'deductedFormula' can't be null";
        }
            if ((mb_strlen($this->container['deductedFormula']) > 1024)) {
                $invalidProperties[] = "invalid value for 'deductedFormula', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['deductedFormula']) < 1)) {
                $invalidProperties[] = "invalid value for 'deductedFormula', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['suggestions'] === null) {
            $invalidProperties[] = "'suggestions' can't be null";
        }
            if ((mb_strlen($this->container['suggestions']) > 1024)) {
                $invalidProperties[] = "invalid value for 'suggestions', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['suggestions']) < 1)) {
                $invalidProperties[] = "invalid value for 'suggestions', the character length must be bigger than or equal to 1.";
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
    * Gets riskLevel
    *  风险等级
    *
    * @return string
    */
    public function getRiskLevel()
    {
        return $this->container['riskLevel'];
    }

    /**
    * Sets riskLevel
    *
    * @param string $riskLevel 风险等级
    *
    * @return $this
    */
    public function setRiskLevel($riskLevel)
    {
        $this->container['riskLevel'] = $riskLevel;
        return $this;
    }

    /**
    * Gets metric
    *  检查项
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
    * @param string $metric 检查项
    *
    * @return $this
    */
    public function setMetric($metric)
    {
        $this->container['metric'] = $metric;
        return $this;
    }

    /**
    * Gets metricValue
    *  指标值
    *
    * @return double
    */
    public function getMetricValue()
    {
        return $this->container['metricValue'];
    }

    /**
    * Sets metricValue
    *
    * @param double $metricValue 指标值
    *
    * @return $this
    */
    public function setMetricValue($metricValue)
    {
        $this->container['metricValue'] = $metricValue;
        return $this;
    }

    /**
    * Gets deductedPoints
    *  扣分值
    *
    * @return double
    */
    public function getDeductedPoints()
    {
        return $this->container['deductedPoints'];
    }

    /**
    * Sets deductedPoints
    *
    * @param double $deductedPoints 扣分值
    *
    * @return $this
    */
    public function setDeductedPoints($deductedPoints)
    {
        $this->container['deductedPoints'] = $deductedPoints;
        return $this;
    }

    /**
    * Gets deductedCondition
    *  扣分条件
    *
    * @return string
    */
    public function getDeductedCondition()
    {
        return $this->container['deductedCondition'];
    }

    /**
    * Sets deductedCondition
    *
    * @param string $deductedCondition 扣分条件
    *
    * @return $this
    */
    public function setDeductedCondition($deductedCondition)
    {
        $this->container['deductedCondition'] = $deductedCondition;
        return $this;
    }

    /**
    * Gets deductedFormula
    *  扣分规则
    *
    * @return string
    */
    public function getDeductedFormula()
    {
        return $this->container['deductedFormula'];
    }

    /**
    * Sets deductedFormula
    *
    * @param string $deductedFormula 扣分规则
    *
    * @return $this
    */
    public function setDeductedFormula($deductedFormula)
    {
        $this->container['deductedFormula'] = $deductedFormula;
        return $this;
    }

    /**
    * Gets suggestions
    *  优化建议
    *
    * @return string
    */
    public function getSuggestions()
    {
        return $this->container['suggestions'];
    }

    /**
    * Sets suggestions
    *
    * @param string $suggestions 优化建议
    *
    * @return $this
    */
    public function setSuggestions($suggestions)
    {
        $this->container['suggestions'] = $suggestions;
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

