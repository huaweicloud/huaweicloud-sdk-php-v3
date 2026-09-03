<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowBackupUsageAlarmConfigResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowBackupUsageAlarmConfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alarmEnabled  **参数解释**：  告警开关。  **约束限制**：  不涉及。  **取值范围**：  - ON - OFF  **默认取值**：  OFF。
    * thresholdPercent  **参数解释**：  阈值百分比，占免费备份空间大小的百分比。  **约束限制**：  不涉及。  **取值范围**：  1-100。  **默认取值**：  90。
    * incrementPercent  **参数解释**：  增量百分比，占免费备份空间大小的百分比。  **约束限制**：  不涉及。  **取值范围**：  1-100。  **默认取值**：  10。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alarmEnabled' => 'string',
            'thresholdPercent' => 'int',
            'incrementPercent' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alarmEnabled  **参数解释**：  告警开关。  **约束限制**：  不涉及。  **取值范围**：  - ON - OFF  **默认取值**：  OFF。
    * thresholdPercent  **参数解释**：  阈值百分比，占免费备份空间大小的百分比。  **约束限制**：  不涉及。  **取值范围**：  1-100。  **默认取值**：  90。
    * incrementPercent  **参数解释**：  增量百分比，占免费备份空间大小的百分比。  **约束限制**：  不涉及。  **取值范围**：  1-100。  **默认取值**：  10。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alarmEnabled' => null,
        'thresholdPercent' => 'int32',
        'incrementPercent' => 'int32'
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
    * alarmEnabled  **参数解释**：  告警开关。  **约束限制**：  不涉及。  **取值范围**：  - ON - OFF  **默认取值**：  OFF。
    * thresholdPercent  **参数解释**：  阈值百分比，占免费备份空间大小的百分比。  **约束限制**：  不涉及。  **取值范围**：  1-100。  **默认取值**：  90。
    * incrementPercent  **参数解释**：  增量百分比，占免费备份空间大小的百分比。  **约束限制**：  不涉及。  **取值范围**：  1-100。  **默认取值**：  10。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alarmEnabled' => 'alarm_enabled',
            'thresholdPercent' => 'threshold_percent',
            'incrementPercent' => 'increment_percent'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alarmEnabled  **参数解释**：  告警开关。  **约束限制**：  不涉及。  **取值范围**：  - ON - OFF  **默认取值**：  OFF。
    * thresholdPercent  **参数解释**：  阈值百分比，占免费备份空间大小的百分比。  **约束限制**：  不涉及。  **取值范围**：  1-100。  **默认取值**：  90。
    * incrementPercent  **参数解释**：  增量百分比，占免费备份空间大小的百分比。  **约束限制**：  不涉及。  **取值范围**：  1-100。  **默认取值**：  10。
    *
    * @var string[]
    */
    protected static $setters = [
            'alarmEnabled' => 'setAlarmEnabled',
            'thresholdPercent' => 'setThresholdPercent',
            'incrementPercent' => 'setIncrementPercent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alarmEnabled  **参数解释**：  告警开关。  **约束限制**：  不涉及。  **取值范围**：  - ON - OFF  **默认取值**：  OFF。
    * thresholdPercent  **参数解释**：  阈值百分比，占免费备份空间大小的百分比。  **约束限制**：  不涉及。  **取值范围**：  1-100。  **默认取值**：  90。
    * incrementPercent  **参数解释**：  增量百分比，占免费备份空间大小的百分比。  **约束限制**：  不涉及。  **取值范围**：  1-100。  **默认取值**：  10。
    *
    * @var string[]
    */
    protected static $getters = [
            'alarmEnabled' => 'getAlarmEnabled',
            'thresholdPercent' => 'getThresholdPercent',
            'incrementPercent' => 'getIncrementPercent'
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
    const ALARM_ENABLED_ON = 'ON';
    const ALARM_ENABLED_OFF = 'OFF';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAlarmEnabledAllowableValues()
    {
        return [
            self::ALARM_ENABLED_ON,
            self::ALARM_ENABLED_OFF,
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
        $this->container['alarmEnabled'] = isset($data['alarmEnabled']) ? $data['alarmEnabled'] : null;
        $this->container['thresholdPercent'] = isset($data['thresholdPercent']) ? $data['thresholdPercent'] : null;
        $this->container['incrementPercent'] = isset($data['incrementPercent']) ? $data['incrementPercent'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getAlarmEnabledAllowableValues();
                if (!is_null($this->container['alarmEnabled']) && !in_array($this->container['alarmEnabled'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'alarmEnabled', must be one of '%s'",
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
    * Gets alarmEnabled
    *  **参数解释**：  告警开关。  **约束限制**：  不涉及。  **取值范围**：  - ON - OFF  **默认取值**：  OFF。
    *
    * @return string|null
    */
    public function getAlarmEnabled()
    {
        return $this->container['alarmEnabled'];
    }

    /**
    * Sets alarmEnabled
    *
    * @param string|null $alarmEnabled **参数解释**：  告警开关。  **约束限制**：  不涉及。  **取值范围**：  - ON - OFF  **默认取值**：  OFF。
    *
    * @return $this
    */
    public function setAlarmEnabled($alarmEnabled)
    {
        $this->container['alarmEnabled'] = $alarmEnabled;
        return $this;
    }

    /**
    * Gets thresholdPercent
    *  **参数解释**：  阈值百分比，占免费备份空间大小的百分比。  **约束限制**：  不涉及。  **取值范围**：  1-100。  **默认取值**：  90。
    *
    * @return int|null
    */
    public function getThresholdPercent()
    {
        return $this->container['thresholdPercent'];
    }

    /**
    * Sets thresholdPercent
    *
    * @param int|null $thresholdPercent **参数解释**：  阈值百分比，占免费备份空间大小的百分比。  **约束限制**：  不涉及。  **取值范围**：  1-100。  **默认取值**：  90。
    *
    * @return $this
    */
    public function setThresholdPercent($thresholdPercent)
    {
        $this->container['thresholdPercent'] = $thresholdPercent;
        return $this;
    }

    /**
    * Gets incrementPercent
    *  **参数解释**：  增量百分比，占免费备份空间大小的百分比。  **约束限制**：  不涉及。  **取值范围**：  1-100。  **默认取值**：  10。
    *
    * @return int|null
    */
    public function getIncrementPercent()
    {
        return $this->container['incrementPercent'];
    }

    /**
    * Sets incrementPercent
    *
    * @param int|null $incrementPercent **参数解释**：  增量百分比，占免费备份空间大小的百分比。  **约束限制**：  不涉及。  **取值范围**：  1-100。  **默认取值**：  10。
    *
    * @return $this
    */
    public function setIncrementPercent($incrementPercent)
    {
        $this->container['incrementPercent'] = $incrementPercent;
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

