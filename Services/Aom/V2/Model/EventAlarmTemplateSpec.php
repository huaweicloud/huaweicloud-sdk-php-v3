<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventAlarmTemplateSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventAlarmTemplateSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alarmSubtype  告警规则类别。
    * alarmSource  告警规则来源云服务：CCE 创建标识。
    * eventSource  告警来源。
    * monitorObjectTemplates  监控对象模板（创建告警时需要补齐里面的内容）。
    * monitorObjects  监控对象列表。键值对形式，键值为： - “event_type”：通知类型 - “event_severity”：告警级别 - “event_name”：事件名称 - “namespace”：命名空间 - “clusterId”：集群id - “customField”：用户自定义字段
    * triggerConditions  触发条件。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alarmSubtype' => 'string',
            'alarmSource' => 'string',
            'eventSource' => 'string',
            'monitorObjectTemplates' => 'string[]',
            'monitorObjects' => 'map[string,string][]',
            'triggerConditions' => '\HuaweiCloud\SDK\Aom\V2\Model\EventTriggerCondition[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alarmSubtype  告警规则类别。
    * alarmSource  告警规则来源云服务：CCE 创建标识。
    * eventSource  告警来源。
    * monitorObjectTemplates  监控对象模板（创建告警时需要补齐里面的内容）。
    * monitorObjects  监控对象列表。键值对形式，键值为： - “event_type”：通知类型 - “event_severity”：告警级别 - “event_name”：事件名称 - “namespace”：命名空间 - “clusterId”：集群id - “customField”：用户自定义字段
    * triggerConditions  触发条件。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alarmSubtype' => null,
        'alarmSource' => null,
        'eventSource' => null,
        'monitorObjectTemplates' => null,
        'monitorObjects' => null,
        'triggerConditions' => null
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
    * alarmSubtype  告警规则类别。
    * alarmSource  告警规则来源云服务：CCE 创建标识。
    * eventSource  告警来源。
    * monitorObjectTemplates  监控对象模板（创建告警时需要补齐里面的内容）。
    * monitorObjects  监控对象列表。键值对形式，键值为： - “event_type”：通知类型 - “event_severity”：告警级别 - “event_name”：事件名称 - “namespace”：命名空间 - “clusterId”：集群id - “customField”：用户自定义字段
    * triggerConditions  触发条件。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alarmSubtype' => 'alarm_subtype',
            'alarmSource' => 'alarm_source',
            'eventSource' => 'event_source',
            'monitorObjectTemplates' => 'monitor_object_templates',
            'monitorObjects' => 'monitor_objects',
            'triggerConditions' => 'trigger_conditions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alarmSubtype  告警规则类别。
    * alarmSource  告警规则来源云服务：CCE 创建标识。
    * eventSource  告警来源。
    * monitorObjectTemplates  监控对象模板（创建告警时需要补齐里面的内容）。
    * monitorObjects  监控对象列表。键值对形式，键值为： - “event_type”：通知类型 - “event_severity”：告警级别 - “event_name”：事件名称 - “namespace”：命名空间 - “clusterId”：集群id - “customField”：用户自定义字段
    * triggerConditions  触发条件。
    *
    * @var string[]
    */
    protected static $setters = [
            'alarmSubtype' => 'setAlarmSubtype',
            'alarmSource' => 'setAlarmSource',
            'eventSource' => 'setEventSource',
            'monitorObjectTemplates' => 'setMonitorObjectTemplates',
            'monitorObjects' => 'setMonitorObjects',
            'triggerConditions' => 'setTriggerConditions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alarmSubtype  告警规则类别。
    * alarmSource  告警规则来源云服务：CCE 创建标识。
    * eventSource  告警来源。
    * monitorObjectTemplates  监控对象模板（创建告警时需要补齐里面的内容）。
    * monitorObjects  监控对象列表。键值对形式，键值为： - “event_type”：通知类型 - “event_severity”：告警级别 - “event_name”：事件名称 - “namespace”：命名空间 - “clusterId”：集群id - “customField”：用户自定义字段
    * triggerConditions  触发条件。
    *
    * @var string[]
    */
    protected static $getters = [
            'alarmSubtype' => 'getAlarmSubtype',
            'alarmSource' => 'getAlarmSource',
            'eventSource' => 'getEventSource',
            'monitorObjectTemplates' => 'getMonitorObjectTemplates',
            'monitorObjects' => 'getMonitorObjects',
            'triggerConditions' => 'getTriggerConditions'
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
        $this->container['alarmSubtype'] = isset($data['alarmSubtype']) ? $data['alarmSubtype'] : null;
        $this->container['alarmSource'] = isset($data['alarmSource']) ? $data['alarmSource'] : null;
        $this->container['eventSource'] = isset($data['eventSource']) ? $data['eventSource'] : null;
        $this->container['monitorObjectTemplates'] = isset($data['monitorObjectTemplates']) ? $data['monitorObjectTemplates'] : null;
        $this->container['monitorObjects'] = isset($data['monitorObjects']) ? $data['monitorObjects'] : null;
        $this->container['triggerConditions'] = isset($data['triggerConditions']) ? $data['triggerConditions'] : null;
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
    * Gets alarmSubtype
    *  告警规则类别。
    *
    * @return string|null
    */
    public function getAlarmSubtype()
    {
        return $this->container['alarmSubtype'];
    }

    /**
    * Sets alarmSubtype
    *
    * @param string|null $alarmSubtype 告警规则类别。
    *
    * @return $this
    */
    public function setAlarmSubtype($alarmSubtype)
    {
        $this->container['alarmSubtype'] = $alarmSubtype;
        return $this;
    }

    /**
    * Gets alarmSource
    *  告警规则来源云服务：CCE 创建标识。
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
    * @param string|null $alarmSource 告警规则来源云服务：CCE 创建标识。
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
    *  告警来源。
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
    * @param string|null $eventSource 告警来源。
    *
    * @return $this
    */
    public function setEventSource($eventSource)
    {
        $this->container['eventSource'] = $eventSource;
        return $this;
    }

    /**
    * Gets monitorObjectTemplates
    *  监控对象模板（创建告警时需要补齐里面的内容）。
    *
    * @return string[]|null
    */
    public function getMonitorObjectTemplates()
    {
        return $this->container['monitorObjectTemplates'];
    }

    /**
    * Sets monitorObjectTemplates
    *
    * @param string[]|null $monitorObjectTemplates 监控对象模板（创建告警时需要补齐里面的内容）。
    *
    * @return $this
    */
    public function setMonitorObjectTemplates($monitorObjectTemplates)
    {
        $this->container['monitorObjectTemplates'] = $monitorObjectTemplates;
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
    * @return \HuaweiCloud\SDK\Aom\V2\Model\EventTriggerCondition[]|null
    */
    public function getTriggerConditions()
    {
        return $this->container['triggerConditions'];
    }

    /**
    * Sets triggerConditions
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\EventTriggerCondition[]|null $triggerConditions 触发条件。
    *
    * @return $this
    */
    public function setTriggerConditions($triggerConditions)
    {
        $this->container['triggerConditions'] = $triggerConditions;
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

