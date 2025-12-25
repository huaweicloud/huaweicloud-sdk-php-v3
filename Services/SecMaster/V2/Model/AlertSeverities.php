<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlertSeverities implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlertSeverities';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * severityCategory  **参数解释**: 目录 - SEVERITY 严重性  **约束限制** 不涉及 **取值范围**: - SEVERITY  **默认值** 不涉及
    * metric  metric
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'severityCategory' => 'string',
            'metric' => '\HuaweiCloud\SDK\SecMaster\V2\Model\MetricMap'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * severityCategory  **参数解释**: 目录 - SEVERITY 严重性  **约束限制** 不涉及 **取值范围**: - SEVERITY  **默认值** 不涉及
    * metric  metric
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'severityCategory' => null,
        'metric' => null
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
    * severityCategory  **参数解释**: 目录 - SEVERITY 严重性  **约束限制** 不涉及 **取值范围**: - SEVERITY  **默认值** 不涉及
    * metric  metric
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'severityCategory' => 'severity_category',
            'metric' => 'metric'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * severityCategory  **参数解释**: 目录 - SEVERITY 严重性  **约束限制** 不涉及 **取值范围**: - SEVERITY  **默认值** 不涉及
    * metric  metric
    *
    * @var string[]
    */
    protected static $setters = [
            'severityCategory' => 'setSeverityCategory',
            'metric' => 'setMetric'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * severityCategory  **参数解释**: 目录 - SEVERITY 严重性  **约束限制** 不涉及 **取值范围**: - SEVERITY  **默认值** 不涉及
    * metric  metric
    *
    * @var string[]
    */
    protected static $getters = [
            'severityCategory' => 'getSeverityCategory',
            'metric' => 'getMetric'
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
    const SEVERITY_CATEGORY_SEVERITY = 'SEVERITY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSeverityCategoryAllowableValues()
    {
        return [
            self::SEVERITY_CATEGORY_SEVERITY,
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
        $this->container['severityCategory'] = isset($data['severityCategory']) ? $data['severityCategory'] : null;
        $this->container['metric'] = isset($data['metric']) ? $data['metric'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getSeverityCategoryAllowableValues();
                if (!is_null($this->container['severityCategory']) && !in_array($this->container['severityCategory'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'severityCategory', must be one of '%s'",
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
    * Gets severityCategory
    *  **参数解释**: 目录 - SEVERITY 严重性  **约束限制** 不涉及 **取值范围**: - SEVERITY  **默认值** 不涉及
    *
    * @return string|null
    */
    public function getSeverityCategory()
    {
        return $this->container['severityCategory'];
    }

    /**
    * Sets severityCategory
    *
    * @param string|null $severityCategory **参数解释**: 目录 - SEVERITY 严重性  **约束限制** 不涉及 **取值范围**: - SEVERITY  **默认值** 不涉及
    *
    * @return $this
    */
    public function setSeverityCategory($severityCategory)
    {
        $this->container['severityCategory'] = $severityCategory;
        return $this;
    }

    /**
    * Gets metric
    *  metric
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\MetricMap|null
    */
    public function getMetric()
    {
        return $this->container['metric'];
    }

    /**
    * Sets metric
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\MetricMap|null $metric metric
    *
    * @return $this
    */
    public function setMetric($metric)
    {
        $this->container['metric'] = $metric;
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

