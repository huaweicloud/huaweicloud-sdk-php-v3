<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MetricsStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MetricsStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * metricsCategory  **参数解释**: 目录指标 - STATUS 状态  **约束限制** 不涉及 **取值范围**: - STATUS  **默认值** 不涉及
    * statusMetric  statusMetric
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'metricsCategory' => 'string',
            'statusMetric' => '\HuaweiCloud\SDK\SecMaster\V2\Model\StatusMetric'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * metricsCategory  **参数解释**: 目录指标 - STATUS 状态  **约束限制** 不涉及 **取值范围**: - STATUS  **默认值** 不涉及
    * statusMetric  statusMetric
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'metricsCategory' => null,
        'statusMetric' => null
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
    * metricsCategory  **参数解释**: 目录指标 - STATUS 状态  **约束限制** 不涉及 **取值范围**: - STATUS  **默认值** 不涉及
    * statusMetric  statusMetric
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'metricsCategory' => 'metrics_category',
            'statusMetric' => 'status_metric'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * metricsCategory  **参数解释**: 目录指标 - STATUS 状态  **约束限制** 不涉及 **取值范围**: - STATUS  **默认值** 不涉及
    * statusMetric  statusMetric
    *
    * @var string[]
    */
    protected static $setters = [
            'metricsCategory' => 'setMetricsCategory',
            'statusMetric' => 'setStatusMetric'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * metricsCategory  **参数解释**: 目录指标 - STATUS 状态  **约束限制** 不涉及 **取值范围**: - STATUS  **默认值** 不涉及
    * statusMetric  statusMetric
    *
    * @var string[]
    */
    protected static $getters = [
            'metricsCategory' => 'getMetricsCategory',
            'statusMetric' => 'getStatusMetric'
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
    const METRICS_CATEGORY_STATUS = 'STATUS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMetricsCategoryAllowableValues()
    {
        return [
            self::METRICS_CATEGORY_STATUS,
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
        $this->container['metricsCategory'] = isset($data['metricsCategory']) ? $data['metricsCategory'] : null;
        $this->container['statusMetric'] = isset($data['statusMetric']) ? $data['statusMetric'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getMetricsCategoryAllowableValues();
                if (!is_null($this->container['metricsCategory']) && !in_array($this->container['metricsCategory'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'metricsCategory', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets metricsCategory
    *  **参数解释**: 目录指标 - STATUS 状态  **约束限制** 不涉及 **取值范围**: - STATUS  **默认值** 不涉及
    *
    * @return string|null
    */
    public function getMetricsCategory()
    {
        return $this->container['metricsCategory'];
    }

    /**
    * Sets metricsCategory
    *
    * @param string|null $metricsCategory **参数解释**: 目录指标 - STATUS 状态  **约束限制** 不涉及 **取值范围**: - STATUS  **默认值** 不涉及
    *
    * @return $this
    */
    public function setMetricsCategory($metricsCategory)
    {
        $this->container['metricsCategory'] = $metricsCategory;
        return $this;
    }

    /**
    * Gets statusMetric
    *  statusMetric
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\StatusMetric|null
    */
    public function getStatusMetric()
    {
        return $this->container['statusMetric'];
    }

    /**
    * Sets statusMetric
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\StatusMetric|null $statusMetric statusMetric
    *
    * @return $this
    */
    public function setStatusMetric($statusMetric)
    {
        $this->container['statusMetric'] = $statusMetric;
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

