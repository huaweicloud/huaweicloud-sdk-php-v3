<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventAlarmSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventAlarmSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alarmSource  告警规则来源。 - “systemEvent”：系统事件 - “customEvent”：自定义事件
    * eventSource  告警来源。 - “RDS” - “EVS” - “CCE” - “LTS” - “AOM”
    * monitorObjects  监控对象列表。键值对形式，键值为： - “event_type”：通知类型 - “event_severity”：告警级别 - “event_name”：事件名称 - “namespace”：命名空间 - “clusterId”：集群id - “customField”：用户自定义字段
    * triggerConditions  触发条件。
    * alarmRuleTemplateBindEnable  是否绑定告警模板（废弃）。
    * alarmRuleTemplateId  告警模板id（废弃）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alarmSource' => 'string',
            'eventSource' => 'string',
            'monitorObjects' => 'map[string,string][]',
            'triggerConditions' => '\HuaweiCloud\SDK\Aom\V2\Model\EventTriggerCondition[]',
            'alarmRuleTemplateBindEnable' => 'bool',
            'alarmRuleTemplateId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alarmSource  告警规则来源。 - “systemEvent”：系统事件 - “customEvent”：自定义事件
    * eventSource  告警来源。 - “RDS” - “EVS” - “CCE” - “LTS” - “AOM”
    * monitorObjects  监控对象列表。键值对形式，键值为： - “event_type”：通知类型 - “event_severity”：告警级别 - “event_name”：事件名称 - “namespace”：命名空间 - “clusterId”：集群id - “customField”：用户自定义字段
    * triggerConditions  触发条件。
    * alarmRuleTemplateBindEnable  是否绑定告警模板（废弃）。
    * alarmRuleTemplateId  告警模板id（废弃）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alarmSource' => null,
        'eventSource' => null,
        'monitorObjects' => null,
        'triggerConditions' => null,
        'alarmRuleTemplateBindEnable' => null,
        'alarmRuleTemplateId' => null
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
    * alarmSource  告警规则来源。 - “systemEvent”：系统事件 - “customEvent”：自定义事件
    * eventSource  告警来源。 - “RDS” - “EVS” - “CCE” - “LTS” - “AOM”
    * monitorObjects  监控对象列表。键值对形式，键值为： - “event_type”：通知类型 - “event_severity”：告警级别 - “event_name”：事件名称 - “namespace”：命名空间 - “clusterId”：集群id - “customField”：用户自定义字段
    * triggerConditions  触发条件。
    * alarmRuleTemplateBindEnable  是否绑定告警模板（废弃）。
    * alarmRuleTemplateId  告警模板id（废弃）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alarmSource' => 'alarm_source',
            'eventSource' => 'event_source',
            'monitorObjects' => 'monitor_objects',
            'triggerConditions' => 'trigger_conditions',
            'alarmRuleTemplateBindEnable' => 'alarm_rule_template_bind_enable',
            'alarmRuleTemplateId' => 'alarm_rule_template_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alarmSource  告警规则来源。 - “systemEvent”：系统事件 - “customEvent”：自定义事件
    * eventSource  告警来源。 - “RDS” - “EVS” - “CCE” - “LTS” - “AOM”
    * monitorObjects  监控对象列表。键值对形式，键值为： - “event_type”：通知类型 - “event_severity”：告警级别 - “event_name”：事件名称 - “namespace”：命名空间 - “clusterId”：集群id - “customField”：用户自定义字段
    * triggerConditions  触发条件。
    * alarmRuleTemplateBindEnable  是否绑定告警模板（废弃）。
    * alarmRuleTemplateId  告警模板id（废弃）。
    *
    * @var string[]
    */
    protected static $setters = [
            'alarmSource' => 'setAlarmSource',
            'eventSource' => 'setEventSource',
            'monitorObjects' => 'setMonitorObjects',
            'triggerConditions' => 'setTriggerConditions',
            'alarmRuleTemplateBindEnable' => 'setAlarmRuleTemplateBindEnable',
            'alarmRuleTemplateId' => 'setAlarmRuleTemplateId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alarmSource  告警规则来源。 - “systemEvent”：系统事件 - “customEvent”：自定义事件
    * eventSource  告警来源。 - “RDS” - “EVS” - “CCE” - “LTS” - “AOM”
    * monitorObjects  监控对象列表。键值对形式，键值为： - “event_type”：通知类型 - “event_severity”：告警级别 - “event_name”：事件名称 - “namespace”：命名空间 - “clusterId”：集群id - “customField”：用户自定义字段
    * triggerConditions  触发条件。
    * alarmRuleTemplateBindEnable  是否绑定告警模板（废弃）。
    * alarmRuleTemplateId  告警模板id（废弃）。
    *
    * @var string[]
    */
    protected static $getters = [
            'alarmSource' => 'getAlarmSource',
            'eventSource' => 'getEventSource',
            'monitorObjects' => 'getMonitorObjects',
            'triggerConditions' => 'getTriggerConditions',
            'alarmRuleTemplateBindEnable' => 'getAlarmRuleTemplateBindEnable',
            'alarmRuleTemplateId' => 'getAlarmRuleTemplateId'
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
    const ALARM_SOURCE_SYSTEM_EVENT = 'systemEvent';
    const ALARM_SOURCE_CUSTOM_EVENT = 'customEvent';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAlarmSourceAllowableValues()
    {
        return [
            self::ALARM_SOURCE_SYSTEM_EVENT,
            self::ALARM_SOURCE_CUSTOM_EVENT,
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
        $this->container['alarmSource'] = isset($data['alarmSource']) ? $data['alarmSource'] : null;
        $this->container['eventSource'] = isset($data['eventSource']) ? $data['eventSource'] : null;
        $this->container['monitorObjects'] = isset($data['monitorObjects']) ? $data['monitorObjects'] : null;
        $this->container['triggerConditions'] = isset($data['triggerConditions']) ? $data['triggerConditions'] : null;
        $this->container['alarmRuleTemplateBindEnable'] = isset($data['alarmRuleTemplateBindEnable']) ? $data['alarmRuleTemplateBindEnable'] : null;
        $this->container['alarmRuleTemplateId'] = isset($data['alarmRuleTemplateId']) ? $data['alarmRuleTemplateId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getAlarmSourceAllowableValues();
                if (!is_null($this->container['alarmSource']) && !in_array($this->container['alarmSource'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'alarmSource', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['triggerConditions'] === null) {
            $invalidProperties[] = "'triggerConditions' can't be null";
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
    * Gets alarmSource
    *  告警规则来源。 - “systemEvent”：系统事件 - “customEvent”：自定义事件
    *
    * @return string|null
    */
    public function getAlarmSource()
    {
        return $this->container['alarmSource'];
    }

    /**
    * Sets alarmSource
    *
    * @param string|null $alarmSource 告警规则来源。 - “systemEvent”：系统事件 - “customEvent”：自定义事件
    *
    * @return $this
    */
    public function setAlarmSource($alarmSource)
    {
        $this->container['alarmSource'] = $alarmSource;
        return $this;
    }

    /**
    * Gets eventSource
    *  告警来源。 - “RDS” - “EVS” - “CCE” - “LTS” - “AOM”
    *
    * @return string|null
    */
    public function getEventSource()
    {
        return $this->container['eventSource'];
    }

    /**
    * Sets eventSource
    *
    * @param string|null $eventSource 告警来源。 - “RDS” - “EVS” - “CCE” - “LTS” - “AOM”
    *
    * @return $this
    */
    public function setEventSource($eventSource)
    {
        $this->container['eventSource'] = $eventSource;
        return $this;
    }

    /**
    * Gets monitorObjects
    *  监控对象列表。键值对形式，键值为： - “event_type”：通知类型 - “event_severity”：告警级别 - “event_name”：事件名称 - “namespace”：命名空间 - “clusterId”：集群id - “customField”：用户自定义字段
    *
    * @return map[string,string][]|null
    */
    public function getMonitorObjects()
    {
        return $this->container['monitorObjects'];
    }

    /**
    * Sets monitorObjects
    *
    * @param map[string,string][]|null $monitorObjects 监控对象列表。键值对形式，键值为： - “event_type”：通知类型 - “event_severity”：告警级别 - “event_name”：事件名称 - “namespace”：命名空间 - “clusterId”：集群id - “customField”：用户自定义字段
    *
    * @return $this
    */
    public function setMonitorObjects($monitorObjects)
    {
        $this->container['monitorObjects'] = $monitorObjects;
        return $this;
    }

    /**
    * Gets triggerConditions
    *  触发条件。
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\EventTriggerCondition[]
    */
    public function getTriggerConditions()
    {
        return $this->container['triggerConditions'];
    }

    /**
    * Sets triggerConditions
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\EventTriggerCondition[] $triggerConditions 触发条件。
    *
    * @return $this
    */
    public function setTriggerConditions($triggerConditions)
    {
        $this->container['triggerConditions'] = $triggerConditions;
        return $this;
    }

    /**
    * Gets alarmRuleTemplateBindEnable
    *  是否绑定告警模板（废弃）。
    *
    * @return bool|null
    */
    public function getAlarmRuleTemplateBindEnable()
    {
        return $this->container['alarmRuleTemplateBindEnable'];
    }

    /**
    * Sets alarmRuleTemplateBindEnable
    *
    * @param bool|null $alarmRuleTemplateBindEnable 是否绑定告警模板（废弃）。
    *
    * @return $this
    */
    public function setAlarmRuleTemplateBindEnable($alarmRuleTemplateBindEnable)
    {
        $this->container['alarmRuleTemplateBindEnable'] = $alarmRuleTemplateBindEnable;
        return $this;
    }

    /**
    * Gets alarmRuleTemplateId
    *  告警模板id（废弃）。
    *
    * @return string|null
    */
    public function getAlarmRuleTemplateId()
    {
        return $this->container['alarmRuleTemplateId'];
    }

    /**
    * Sets alarmRuleTemplateId
    *
    * @param string|null $alarmRuleTemplateId 告警模板id（废弃）。
    *
    * @return $this
    */
    public function setAlarmRuleTemplateId($alarmRuleTemplateId)
    {
        $this->container['alarmRuleTemplateId'] = $alarmRuleTemplateId;
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

