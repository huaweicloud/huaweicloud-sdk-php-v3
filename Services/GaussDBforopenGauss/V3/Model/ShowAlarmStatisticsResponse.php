<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAlarmStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAlarmStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalAlarmCount  **参数解释**: 告警总数。 **取值范围**: 不涉及。
    * ringPercentage  **参数解释**: 环比比率。 **取值范围**: 值为0表示环比没有变化，值为空表示上一周期没有告警。
    * instanceAlarmLevelStatistics  **参数解释**: 实例级别的告警统计。
    * totalAlarmLevelStatistics  **参数解释**: 全量告警统计。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalAlarmCount' => 'int',
            'ringPercentage' => 'float',
            'instanceAlarmLevelStatistics' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\InstanceAlarmLevelStatisticResult[]',
            'totalAlarmLevelStatistics' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\AlarmLevelStatisticsResult[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalAlarmCount  **参数解释**: 告警总数。 **取值范围**: 不涉及。
    * ringPercentage  **参数解释**: 环比比率。 **取值范围**: 值为0表示环比没有变化，值为空表示上一周期没有告警。
    * instanceAlarmLevelStatistics  **参数解释**: 实例级别的告警统计。
    * totalAlarmLevelStatistics  **参数解释**: 全量告警统计。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalAlarmCount' => null,
        'ringPercentage' => null,
        'instanceAlarmLevelStatistics' => null,
        'totalAlarmLevelStatistics' => null
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
    * totalAlarmCount  **参数解释**: 告警总数。 **取值范围**: 不涉及。
    * ringPercentage  **参数解释**: 环比比率。 **取值范围**: 值为0表示环比没有变化，值为空表示上一周期没有告警。
    * instanceAlarmLevelStatistics  **参数解释**: 实例级别的告警统计。
    * totalAlarmLevelStatistics  **参数解释**: 全量告警统计。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalAlarmCount' => 'total_alarm_count',
            'ringPercentage' => 'ring_percentage',
            'instanceAlarmLevelStatistics' => 'instance_alarm_level_statistics',
            'totalAlarmLevelStatistics' => 'total_alarm_level_statistics'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalAlarmCount  **参数解释**: 告警总数。 **取值范围**: 不涉及。
    * ringPercentage  **参数解释**: 环比比率。 **取值范围**: 值为0表示环比没有变化，值为空表示上一周期没有告警。
    * instanceAlarmLevelStatistics  **参数解释**: 实例级别的告警统计。
    * totalAlarmLevelStatistics  **参数解释**: 全量告警统计。
    *
    * @var string[]
    */
    protected static $setters = [
            'totalAlarmCount' => 'setTotalAlarmCount',
            'ringPercentage' => 'setRingPercentage',
            'instanceAlarmLevelStatistics' => 'setInstanceAlarmLevelStatistics',
            'totalAlarmLevelStatistics' => 'setTotalAlarmLevelStatistics'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalAlarmCount  **参数解释**: 告警总数。 **取值范围**: 不涉及。
    * ringPercentage  **参数解释**: 环比比率。 **取值范围**: 值为0表示环比没有变化，值为空表示上一周期没有告警。
    * instanceAlarmLevelStatistics  **参数解释**: 实例级别的告警统计。
    * totalAlarmLevelStatistics  **参数解释**: 全量告警统计。
    *
    * @var string[]
    */
    protected static $getters = [
            'totalAlarmCount' => 'getTotalAlarmCount',
            'ringPercentage' => 'getRingPercentage',
            'instanceAlarmLevelStatistics' => 'getInstanceAlarmLevelStatistics',
            'totalAlarmLevelStatistics' => 'getTotalAlarmLevelStatistics'
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
        $this->container['totalAlarmCount'] = isset($data['totalAlarmCount']) ? $data['totalAlarmCount'] : null;
        $this->container['ringPercentage'] = isset($data['ringPercentage']) ? $data['ringPercentage'] : null;
        $this->container['instanceAlarmLevelStatistics'] = isset($data['instanceAlarmLevelStatistics']) ? $data['instanceAlarmLevelStatistics'] : null;
        $this->container['totalAlarmLevelStatistics'] = isset($data['totalAlarmLevelStatistics']) ? $data['totalAlarmLevelStatistics'] : null;
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
    * Gets totalAlarmCount
    *  **参数解释**: 告警总数。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getTotalAlarmCount()
    {
        return $this->container['totalAlarmCount'];
    }

    /**
    * Sets totalAlarmCount
    *
    * @param int|null $totalAlarmCount **参数解释**: 告警总数。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setTotalAlarmCount($totalAlarmCount)
    {
        $this->container['totalAlarmCount'] = $totalAlarmCount;
        return $this;
    }

    /**
    * Gets ringPercentage
    *  **参数解释**: 环比比率。 **取值范围**: 值为0表示环比没有变化，值为空表示上一周期没有告警。
    *
    * @return float|null
    */
    public function getRingPercentage()
    {
        return $this->container['ringPercentage'];
    }

    /**
    * Sets ringPercentage
    *
    * @param float|null $ringPercentage **参数解释**: 环比比率。 **取值范围**: 值为0表示环比没有变化，值为空表示上一周期没有告警。
    *
    * @return $this
    */
    public function setRingPercentage($ringPercentage)
    {
        $this->container['ringPercentage'] = $ringPercentage;
        return $this;
    }

    /**
    * Gets instanceAlarmLevelStatistics
    *  **参数解释**: 实例级别的告警统计。
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\InstanceAlarmLevelStatisticResult[]|null
    */
    public function getInstanceAlarmLevelStatistics()
    {
        return $this->container['instanceAlarmLevelStatistics'];
    }

    /**
    * Sets instanceAlarmLevelStatistics
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\InstanceAlarmLevelStatisticResult[]|null $instanceAlarmLevelStatistics **参数解释**: 实例级别的告警统计。
    *
    * @return $this
    */
    public function setInstanceAlarmLevelStatistics($instanceAlarmLevelStatistics)
    {
        $this->container['instanceAlarmLevelStatistics'] = $instanceAlarmLevelStatistics;
        return $this;
    }

    /**
    * Gets totalAlarmLevelStatistics
    *  **参数解释**: 全量告警统计。
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\AlarmLevelStatisticsResult[]|null
    */
    public function getTotalAlarmLevelStatistics()
    {
        return $this->container['totalAlarmLevelStatistics'];
    }

    /**
    * Sets totalAlarmLevelStatistics
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\AlarmLevelStatisticsResult[]|null $totalAlarmLevelStatistics **参数解释**: 全量告警统计。
    *
    * @return $this
    */
    public function setTotalAlarmLevelStatistics($totalAlarmLevelStatistics)
    {
        $this->container['totalAlarmLevelStatistics'] = $totalAlarmLevelStatistics;
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

