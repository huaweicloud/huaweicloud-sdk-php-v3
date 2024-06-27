<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddOrUpdateAlarmRuleV4RequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddOrUpdateAlarmRuleV4RequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alarmNotifications  alarmNotifications
    * alarmRuleDescription  告警规则描述。
    * alarmRuleEnable  是否启用。
    * alarmRuleName  告警规则名称。
    * alarmRuleType  告警规则类型。 - “metric”：指标告警规则 - “event”：事件告警规则
    * eventAlarmSpec  eventAlarmSpec
    * metricAlarmSpec  metricAlarmSpec
    * promInstanceId  Prometheus实例id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alarmNotifications' => '\HuaweiCloud\SDK\Aom\V2\Model\AlarmNotification',
            'alarmRuleDescription' => 'string',
            'alarmRuleEnable' => 'bool',
            'alarmRuleName' => 'string',
            'alarmRuleType' => 'string',
            'eventAlarmSpec' => '\HuaweiCloud\SDK\Aom\V2\Model\EventAlarmSpec',
            'metricAlarmSpec' => '\HuaweiCloud\SDK\Aom\V2\Model\MetricAlarmSpec',
            'promInstanceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alarmNotifications  alarmNotifications
    * alarmRuleDescription  告警规则描述。
    * alarmRuleEnable  是否启用。
    * alarmRuleName  告警规则名称。
    * alarmRuleType  告警规则类型。 - “metric”：指标告警规则 - “event”：事件告警规则
    * eventAlarmSpec  eventAlarmSpec
    * metricAlarmSpec  metricAlarmSpec
    * promInstanceId  Prometheus实例id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alarmNotifications' => null,
        'alarmRuleDescription' => null,
        'alarmRuleEnable' => null,
        'alarmRuleName' => null,
        'alarmRuleType' => null,
        'eventAlarmSpec' => null,
        'metricAlarmSpec' => null,
        'promInstanceId' => null
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
    * alarmNotifications  alarmNotifications
    * alarmRuleDescription  告警规则描述。
    * alarmRuleEnable  是否启用。
    * alarmRuleName  告警规则名称。
    * alarmRuleType  告警规则类型。 - “metric”：指标告警规则 - “event”：事件告警规则
    * eventAlarmSpec  eventAlarmSpec
    * metricAlarmSpec  metricAlarmSpec
    * promInstanceId  Prometheus实例id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alarmNotifications' => 'alarm_notifications',
            'alarmRuleDescription' => 'alarm_rule_description',
            'alarmRuleEnable' => 'alarm_rule_enable',
            'alarmRuleName' => 'alarm_rule_name',
            'alarmRuleType' => 'alarm_rule_type',
            'eventAlarmSpec' => 'event_alarm_spec',
            'metricAlarmSpec' => 'metric_alarm_spec',
            'promInstanceId' => 'prom_instance_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alarmNotifications  alarmNotifications
    * alarmRuleDescription  告警规则描述。
    * alarmRuleEnable  是否启用。
    * alarmRuleName  告警规则名称。
    * alarmRuleType  告警规则类型。 - “metric”：指标告警规则 - “event”：事件告警规则
    * eventAlarmSpec  eventAlarmSpec
    * metricAlarmSpec  metricAlarmSpec
    * promInstanceId  Prometheus实例id。
    *
    * @var string[]
    */
    protected static $setters = [
            'alarmNotifications' => 'setAlarmNotifications',
            'alarmRuleDescription' => 'setAlarmRuleDescription',
            'alarmRuleEnable' => 'setAlarmRuleEnable',
            'alarmRuleName' => 'setAlarmRuleName',
            'alarmRuleType' => 'setAlarmRuleType',
            'eventAlarmSpec' => 'setEventAlarmSpec',
            'metricAlarmSpec' => 'setMetricAlarmSpec',
            'promInstanceId' => 'setPromInstanceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alarmNotifications  alarmNotifications
    * alarmRuleDescription  告警规则描述。
    * alarmRuleEnable  是否启用。
    * alarmRuleName  告警规则名称。
    * alarmRuleType  告警规则类型。 - “metric”：指标告警规则 - “event”：事件告警规则
    * eventAlarmSpec  eventAlarmSpec
    * metricAlarmSpec  metricAlarmSpec
    * promInstanceId  Prometheus实例id。
    *
    * @var string[]
    */
    protected static $getters = [
            'alarmNotifications' => 'getAlarmNotifications',
            'alarmRuleDescription' => 'getAlarmRuleDescription',
            'alarmRuleEnable' => 'getAlarmRuleEnable',
            'alarmRuleName' => 'getAlarmRuleName',
            'alarmRuleType' => 'getAlarmRuleType',
            'eventAlarmSpec' => 'getEventAlarmSpec',
            'metricAlarmSpec' => 'getMetricAlarmSpec',
            'promInstanceId' => 'getPromInstanceId'
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
    const ALARM_RULE_TYPE_METRIC = 'metric';
    const ALARM_RULE_TYPE_EVENT = 'event';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAlarmRuleTypeAllowableValues()
    {
        return [
            self::ALARM_RULE_TYPE_METRIC,
            self::ALARM_RULE_TYPE_EVENT,
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
        $this->container['alarmNotifications'] = isset($data['alarmNotifications']) ? $data['alarmNotifications'] : null;
        $this->container['alarmRuleDescription'] = isset($data['alarmRuleDescription']) ? $data['alarmRuleDescription'] : null;
        $this->container['alarmRuleEnable'] = isset($data['alarmRuleEnable']) ? $data['alarmRuleEnable'] : null;
        $this->container['alarmRuleName'] = isset($data['alarmRuleName']) ? $data['alarmRuleName'] : null;
        $this->container['alarmRuleType'] = isset($data['alarmRuleType']) ? $data['alarmRuleType'] : null;
        $this->container['eventAlarmSpec'] = isset($data['eventAlarmSpec']) ? $data['eventAlarmSpec'] : null;
        $this->container['metricAlarmSpec'] = isset($data['metricAlarmSpec']) ? $data['metricAlarmSpec'] : null;
        $this->container['promInstanceId'] = isset($data['promInstanceId']) ? $data['promInstanceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['alarmRuleName'] === null) {
            $invalidProperties[] = "'alarmRuleName' can't be null";
        }
        if ($this->container['alarmRuleType'] === null) {
            $invalidProperties[] = "'alarmRuleType' can't be null";
        }
            $allowedValues = $this->getAlarmRuleTypeAllowableValues();
                if (!is_null($this->container['alarmRuleType']) && !in_array($this->container['alarmRuleType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'alarmRuleType', must be one of '%s'",
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
    * Gets alarmNotifications
    *  alarmNotifications
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\AlarmNotification|null
    */
    public function getAlarmNotifications()
    {
        return $this->container['alarmNotifications'];
    }

    /**
    * Sets alarmNotifications
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\AlarmNotification|null $alarmNotifications alarmNotifications
    *
    * @return $this
    */
    public function setAlarmNotifications($alarmNotifications)
    {
        $this->container['alarmNotifications'] = $alarmNotifications;
        return $this;
    }

    /**
    * Gets alarmRuleDescription
    *  告警规则描述。
    *
    * @return string|null
    */
    public function getAlarmRuleDescription()
    {
        return $this->container['alarmRuleDescription'];
    }

    /**
    * Sets alarmRuleDescription
    *
    * @param string|null $alarmRuleDescription 告警规则描述。
    *
    * @return $this
    */
    public function setAlarmRuleDescription($alarmRuleDescription)
    {
        $this->container['alarmRuleDescription'] = $alarmRuleDescription;
        return $this;
    }

    /**
    * Gets alarmRuleEnable
    *  是否启用。
    *
    * @return bool|null
    */
    public function getAlarmRuleEnable()
    {
        return $this->container['alarmRuleEnable'];
    }

    /**
    * Sets alarmRuleEnable
    *
    * @param bool|null $alarmRuleEnable 是否启用。
    *
    * @return $this
    */
    public function setAlarmRuleEnable($alarmRuleEnable)
    {
        $this->container['alarmRuleEnable'] = $alarmRuleEnable;
        return $this;
    }

    /**
    * Gets alarmRuleName
    *  告警规则名称。
    *
    * @return string
    */
    public function getAlarmRuleName()
    {
        return $this->container['alarmRuleName'];
    }

    /**
    * Sets alarmRuleName
    *
    * @param string $alarmRuleName 告警规则名称。
    *
    * @return $this
    */
    public function setAlarmRuleName($alarmRuleName)
    {
        $this->container['alarmRuleName'] = $alarmRuleName;
        return $this;
    }

    /**
    * Gets alarmRuleType
    *  告警规则类型。 - “metric”：指标告警规则 - “event”：事件告警规则
    *
    * @return string
    */
    public function getAlarmRuleType()
    {
        return $this->container['alarmRuleType'];
    }

    /**
    * Sets alarmRuleType
    *
    * @param string $alarmRuleType 告警规则类型。 - “metric”：指标告警规则 - “event”：事件告警规则
    *
    * @return $this
    */
    public function setAlarmRuleType($alarmRuleType)
    {
        $this->container['alarmRuleType'] = $alarmRuleType;
        return $this;
    }

    /**
    * Gets eventAlarmSpec
    *  eventAlarmSpec
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\EventAlarmSpec|null
    */
    public function getEventAlarmSpec()
    {
        return $this->container['eventAlarmSpec'];
    }

    /**
    * Sets eventAlarmSpec
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\EventAlarmSpec|null $eventAlarmSpec eventAlarmSpec
    *
    * @return $this
    */
    public function setEventAlarmSpec($eventAlarmSpec)
    {
        $this->container['eventAlarmSpec'] = $eventAlarmSpec;
        return $this;
    }

    /**
    * Gets metricAlarmSpec
    *  metricAlarmSpec
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\MetricAlarmSpec|null
    */
    public function getMetricAlarmSpec()
    {
        return $this->container['metricAlarmSpec'];
    }

    /**
    * Sets metricAlarmSpec
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\MetricAlarmSpec|null $metricAlarmSpec metricAlarmSpec
    *
    * @return $this
    */
    public function setMetricAlarmSpec($metricAlarmSpec)
    {
        $this->container['metricAlarmSpec'] = $metricAlarmSpec;
        return $this;
    }

    /**
    * Gets promInstanceId
    *  Prometheus实例id。
    *
    * @return string|null
    */
    public function getPromInstanceId()
    {
        return $this->container['promInstanceId'];
    }

    /**
    * Sets promInstanceId
    *
    * @param string|null $promInstanceId Prometheus实例id。
    *
    * @return $this
    */
    public function setPromInstanceId($promInstanceId)
    {
        $this->container['promInstanceId'] = $promInstanceId;
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

