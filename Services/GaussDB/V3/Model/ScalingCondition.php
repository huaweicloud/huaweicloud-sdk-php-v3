<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScalingCondition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScalingCondition';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * conditionId  **参数描述**:  变配条件名称。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字和中划线组成，且长度不超过32个字符，不能为空。  **默认取值**：  不涉及。
    * duration  **参数描述**：  持续时间，单位是毫秒。  **约束限制**：  不涉及。  **取值范围**：  2000-5000。  **默认取值**：  不涉及。
    * interval  **参数解释**:  间隔时间，单位是毫秒。  **约束限制**：  不涉及。  **取值范围**：  1000-5000。  **默认取值**：  不涉及。
    * metricConditions  **参数描述**:  指标变配条件。  **约束条件**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'conditionId' => 'string',
            'duration' => 'int',
            'interval' => 'int',
            'metricConditions' => '\HuaweiCloud\SDK\GaussDB\V3\Model\MetricCondition[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * conditionId  **参数描述**:  变配条件名称。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字和中划线组成，且长度不超过32个字符，不能为空。  **默认取值**：  不涉及。
    * duration  **参数描述**：  持续时间，单位是毫秒。  **约束限制**：  不涉及。  **取值范围**：  2000-5000。  **默认取值**：  不涉及。
    * interval  **参数解释**:  间隔时间，单位是毫秒。  **约束限制**：  不涉及。  **取值范围**：  1000-5000。  **默认取值**：  不涉及。
    * metricConditions  **参数描述**:  指标变配条件。  **约束条件**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'conditionId' => null,
        'duration' => null,
        'interval' => null,
        'metricConditions' => null
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
    * conditionId  **参数描述**:  变配条件名称。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字和中划线组成，且长度不超过32个字符，不能为空。  **默认取值**：  不涉及。
    * duration  **参数描述**：  持续时间，单位是毫秒。  **约束限制**：  不涉及。  **取值范围**：  2000-5000。  **默认取值**：  不涉及。
    * interval  **参数解释**:  间隔时间，单位是毫秒。  **约束限制**：  不涉及。  **取值范围**：  1000-5000。  **默认取值**：  不涉及。
    * metricConditions  **参数描述**:  指标变配条件。  **约束条件**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'conditionId' => 'condition_id',
            'duration' => 'duration',
            'interval' => 'interval',
            'metricConditions' => 'metric_conditions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * conditionId  **参数描述**:  变配条件名称。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字和中划线组成，且长度不超过32个字符，不能为空。  **默认取值**：  不涉及。
    * duration  **参数描述**：  持续时间，单位是毫秒。  **约束限制**：  不涉及。  **取值范围**：  2000-5000。  **默认取值**：  不涉及。
    * interval  **参数解释**:  间隔时间，单位是毫秒。  **约束限制**：  不涉及。  **取值范围**：  1000-5000。  **默认取值**：  不涉及。
    * metricConditions  **参数描述**:  指标变配条件。  **约束条件**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'conditionId' => 'setConditionId',
            'duration' => 'setDuration',
            'interval' => 'setInterval',
            'metricConditions' => 'setMetricConditions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * conditionId  **参数描述**:  变配条件名称。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字和中划线组成，且长度不超过32个字符，不能为空。  **默认取值**：  不涉及。
    * duration  **参数描述**：  持续时间，单位是毫秒。  **约束限制**：  不涉及。  **取值范围**：  2000-5000。  **默认取值**：  不涉及。
    * interval  **参数解释**:  间隔时间，单位是毫秒。  **约束限制**：  不涉及。  **取值范围**：  1000-5000。  **默认取值**：  不涉及。
    * metricConditions  **参数描述**:  指标变配条件。  **约束条件**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'conditionId' => 'getConditionId',
            'duration' => 'getDuration',
            'interval' => 'getInterval',
            'metricConditions' => 'getMetricConditions'
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
        $this->container['conditionId'] = isset($data['conditionId']) ? $data['conditionId'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['metricConditions'] = isset($data['metricConditions']) ? $data['metricConditions'] : null;
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
    * Gets conditionId
    *  **参数描述**:  变配条件名称。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字和中划线组成，且长度不超过32个字符，不能为空。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getConditionId()
    {
        return $this->container['conditionId'];
    }

    /**
    * Sets conditionId
    *
    * @param string|null $conditionId **参数描述**:  变配条件名称。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字和中划线组成，且长度不超过32个字符，不能为空。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setConditionId($conditionId)
    {
        $this->container['conditionId'] = $conditionId;
        return $this;
    }

    /**
    * Gets duration
    *  **参数描述**：  持续时间，单位是毫秒。  **约束限制**：  不涉及。  **取值范围**：  2000-5000。  **默认取值**：  不涉及。
    *
    * @return int|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param int|null $duration **参数描述**：  持续时间，单位是毫秒。  **约束限制**：  不涉及。  **取值范围**：  2000-5000。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets interval
    *  **参数解释**:  间隔时间，单位是毫秒。  **约束限制**：  不涉及。  **取值范围**：  1000-5000。  **默认取值**：  不涉及。
    *
    * @return int|null
    */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
    * Sets interval
    *
    * @param int|null $interval **参数解释**:  间隔时间，单位是毫秒。  **约束限制**：  不涉及。  **取值范围**：  1000-5000。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;
        return $this;
    }

    /**
    * Gets metricConditions
    *  **参数描述**:  指标变配条件。  **约束条件**：  不涉及。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\MetricCondition[]|null
    */
    public function getMetricConditions()
    {
        return $this->container['metricConditions'];
    }

    /**
    * Sets metricConditions
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\MetricCondition[]|null $metricConditions **参数描述**:  指标变配条件。  **约束条件**：  不涉及。
    *
    * @return $this
    */
    public function setMetricConditions($metricConditions)
    {
        $this->container['metricConditions'] = $metricConditions;
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

