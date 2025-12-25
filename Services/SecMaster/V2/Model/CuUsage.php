<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CuUsage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CuUsage';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * usageCategory  **参数解释**: 目录 - USAGE 使用  **约束限制** 不涉及 **取值范围**: - USAGE  **默认值** 不涉及
    * usageMetric  usageMetric
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'usageCategory' => 'string',
            'usageMetric' => '\HuaweiCloud\SDK\SecMaster\V2\Model\UsageMetric'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * usageCategory  **参数解释**: 目录 - USAGE 使用  **约束限制** 不涉及 **取值范围**: - USAGE  **默认值** 不涉及
    * usageMetric  usageMetric
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'usageCategory' => null,
        'usageMetric' => null
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
    * usageCategory  **参数解释**: 目录 - USAGE 使用  **约束限制** 不涉及 **取值范围**: - USAGE  **默认值** 不涉及
    * usageMetric  usageMetric
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'usageCategory' => 'usage_category',
            'usageMetric' => 'usage_metric'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * usageCategory  **参数解释**: 目录 - USAGE 使用  **约束限制** 不涉及 **取值范围**: - USAGE  **默认值** 不涉及
    * usageMetric  usageMetric
    *
    * @var string[]
    */
    protected static $setters = [
            'usageCategory' => 'setUsageCategory',
            'usageMetric' => 'setUsageMetric'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * usageCategory  **参数解释**: 目录 - USAGE 使用  **约束限制** 不涉及 **取值范围**: - USAGE  **默认值** 不涉及
    * usageMetric  usageMetric
    *
    * @var string[]
    */
    protected static $getters = [
            'usageCategory' => 'getUsageCategory',
            'usageMetric' => 'getUsageMetric'
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
    const USAGE_CATEGORY_USAGE = 'USAGE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getUsageCategoryAllowableValues()
    {
        return [
            self::USAGE_CATEGORY_USAGE,
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
        $this->container['usageCategory'] = isset($data['usageCategory']) ? $data['usageCategory'] : null;
        $this->container['usageMetric'] = isset($data['usageMetric']) ? $data['usageMetric'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getUsageCategoryAllowableValues();
                if (!is_null($this->container['usageCategory']) && !in_array($this->container['usageCategory'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'usageCategory', must be one of '%s'",
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
    * Gets usageCategory
    *  **参数解释**: 目录 - USAGE 使用  **约束限制** 不涉及 **取值范围**: - USAGE  **默认值** 不涉及
    *
    * @return string|null
    */
    public function getUsageCategory()
    {
        return $this->container['usageCategory'];
    }

    /**
    * Sets usageCategory
    *
    * @param string|null $usageCategory **参数解释**: 目录 - USAGE 使用  **约束限制** 不涉及 **取值范围**: - USAGE  **默认值** 不涉及
    *
    * @return $this
    */
    public function setUsageCategory($usageCategory)
    {
        $this->container['usageCategory'] = $usageCategory;
        return $this;
    }

    /**
    * Gets usageMetric
    *  usageMetric
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\UsageMetric|null
    */
    public function getUsageMetric()
    {
        return $this->container['usageMetric'];
    }

    /**
    * Sets usageMetric
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\UsageMetric|null $usageMetric usageMetric
    *
    * @return $this
    */
    public function setUsageMetric($usageMetric)
    {
        $this->container['usageMetric'] = $usageMetric;
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

