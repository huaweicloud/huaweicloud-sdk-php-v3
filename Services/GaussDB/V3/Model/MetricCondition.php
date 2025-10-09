<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MetricCondition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MetricCondition';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * metricName  **参数描述**:  指标名称。  **约束限制**：  不涉及。  **取值范围**： - cpuTotalUsage：CPU使用率。 - memoryTotalUsage：内存使用率。  **默认取值**：  不涉及。
    * metricValue  **参数描述**：  指标变配阈值。  **约束限制**：  取值为百分比的10000倍，比如50%对应的参数值为5000。  **取值范围**：  6000-8000。  **默认取值**：  不涉及。
    * compareMode  **参数描述**：  比较模式。  **约束限制**：  不涉及。。  **取值范围**：  GT：大于。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'metricName' => 'string',
            'metricValue' => 'int',
            'compareMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * metricName  **参数描述**:  指标名称。  **约束限制**：  不涉及。  **取值范围**： - cpuTotalUsage：CPU使用率。 - memoryTotalUsage：内存使用率。  **默认取值**：  不涉及。
    * metricValue  **参数描述**：  指标变配阈值。  **约束限制**：  取值为百分比的10000倍，比如50%对应的参数值为5000。  **取值范围**：  6000-8000。  **默认取值**：  不涉及。
    * compareMode  **参数描述**：  比较模式。  **约束限制**：  不涉及。。  **取值范围**：  GT：大于。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'metricName' => null,
        'metricValue' => 'int32',
        'compareMode' => null
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
    * metricName  **参数描述**:  指标名称。  **约束限制**：  不涉及。  **取值范围**： - cpuTotalUsage：CPU使用率。 - memoryTotalUsage：内存使用率。  **默认取值**：  不涉及。
    * metricValue  **参数描述**：  指标变配阈值。  **约束限制**：  取值为百分比的10000倍，比如50%对应的参数值为5000。  **取值范围**：  6000-8000。  **默认取值**：  不涉及。
    * compareMode  **参数描述**：  比较模式。  **约束限制**：  不涉及。。  **取值范围**：  GT：大于。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'metricName' => 'metric_name',
            'metricValue' => 'metric_value',
            'compareMode' => 'compare_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * metricName  **参数描述**:  指标名称。  **约束限制**：  不涉及。  **取值范围**： - cpuTotalUsage：CPU使用率。 - memoryTotalUsage：内存使用率。  **默认取值**：  不涉及。
    * metricValue  **参数描述**：  指标变配阈值。  **约束限制**：  取值为百分比的10000倍，比如50%对应的参数值为5000。  **取值范围**：  6000-8000。  **默认取值**：  不涉及。
    * compareMode  **参数描述**：  比较模式。  **约束限制**：  不涉及。。  **取值范围**：  GT：大于。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'metricName' => 'setMetricName',
            'metricValue' => 'setMetricValue',
            'compareMode' => 'setCompareMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * metricName  **参数描述**:  指标名称。  **约束限制**：  不涉及。  **取值范围**： - cpuTotalUsage：CPU使用率。 - memoryTotalUsage：内存使用率。  **默认取值**：  不涉及。
    * metricValue  **参数描述**：  指标变配阈值。  **约束限制**：  取值为百分比的10000倍，比如50%对应的参数值为5000。  **取值范围**：  6000-8000。  **默认取值**：  不涉及。
    * compareMode  **参数描述**：  比较模式。  **约束限制**：  不涉及。。  **取值范围**：  GT：大于。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'metricName' => 'getMetricName',
            'metricValue' => 'getMetricValue',
            'compareMode' => 'getCompareMode'
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
        $this->container['compareMode'] = isset($data['compareMode']) ? $data['compareMode'] : null;
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
    * Gets metricName
    *  **参数描述**:  指标名称。  **约束限制**：  不涉及。  **取值范围**： - cpuTotalUsage：CPU使用率。 - memoryTotalUsage：内存使用率。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getMetricName()
    {
        return $this->container['metricName'];
    }

    /**
    * Sets metricName
    *
    * @param string|null $metricName **参数描述**:  指标名称。  **约束限制**：  不涉及。  **取值范围**： - cpuTotalUsage：CPU使用率。 - memoryTotalUsage：内存使用率。  **默认取值**：  不涉及。
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
    *  **参数描述**：  指标变配阈值。  **约束限制**：  取值为百分比的10000倍，比如50%对应的参数值为5000。  **取值范围**：  6000-8000。  **默认取值**：  不涉及。
    *
    * @return int|null
    */
    public function getMetricValue()
    {
        return $this->container['metricValue'];
    }

    /**
    * Sets metricValue
    *
    * @param int|null $metricValue **参数描述**：  指标变配阈值。  **约束限制**：  取值为百分比的10000倍，比如50%对应的参数值为5000。  **取值范围**：  6000-8000。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setMetricValue($metricValue)
    {
        $this->container['metricValue'] = $metricValue;
        return $this;
    }

    /**
    * Gets compareMode
    *  **参数描述**：  比较模式。  **约束限制**：  不涉及。。  **取值范围**：  GT：大于。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getCompareMode()
    {
        return $this->container['compareMode'];
    }

    /**
    * Sets compareMode
    *
    * @param string|null $compareMode **参数描述**：  比较模式。  **约束限制**：  不涉及。。  **取值范围**：  GT：大于。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setCompareMode($compareMode)
    {
        $this->container['compareMode'] = $compareMode;
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

