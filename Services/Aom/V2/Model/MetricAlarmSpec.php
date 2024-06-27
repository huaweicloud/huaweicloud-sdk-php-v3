<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MetricAlarmSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MetricAlarmSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * monitorType  监控类型。 - “all_metric”：全量指标 - “promql”：PromQL - “resource”：（日落）资源类型
    * noDataConditions  无数据处理。
    * alarmTags  告警标签。
    * monitorObjects  监控对象列表。
    * recoveryConditions  recoveryConditions
    * triggerConditions  触发条件。
    * alarmRuleTemplateBindEnable  是否绑定告警规则模版（废弃）。
    * alarmRuleTemplateId  告警规则模版id（废弃）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'monitorType' => 'string',
            'noDataConditions' => '\HuaweiCloud\SDK\Aom\V2\Model\NoDataCondition[]',
            'alarmTags' => '\HuaweiCloud\SDK\Aom\V2\Model\AlarmTags[]',
            'monitorObjects' => 'map[string,string][]',
            'recoveryConditions' => '\HuaweiCloud\SDK\Aom\V2\Model\RecoveryCondition',
            'triggerConditions' => '\HuaweiCloud\SDK\Aom\V2\Model\TriggerCondition[]',
            'alarmRuleTemplateBindEnable' => 'bool',
            'alarmRuleTemplateId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * monitorType  监控类型。 - “all_metric”：全量指标 - “promql”：PromQL - “resource”：（日落）资源类型
    * noDataConditions  无数据处理。
    * alarmTags  告警标签。
    * monitorObjects  监控对象列表。
    * recoveryConditions  recoveryConditions
    * triggerConditions  触发条件。
    * alarmRuleTemplateBindEnable  是否绑定告警规则模版（废弃）。
    * alarmRuleTemplateId  告警规则模版id（废弃）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'monitorType' => null,
        'noDataConditions' => null,
        'alarmTags' => null,
        'monitorObjects' => null,
        'recoveryConditions' => null,
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
    * monitorType  监控类型。 - “all_metric”：全量指标 - “promql”：PromQL - “resource”：（日落）资源类型
    * noDataConditions  无数据处理。
    * alarmTags  告警标签。
    * monitorObjects  监控对象列表。
    * recoveryConditions  recoveryConditions
    * triggerConditions  触发条件。
    * alarmRuleTemplateBindEnable  是否绑定告警规则模版（废弃）。
    * alarmRuleTemplateId  告警规则模版id（废弃）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'monitorType' => 'monitor_type',
            'noDataConditions' => 'no_data_conditions',
            'alarmTags' => 'alarm_tags',
            'monitorObjects' => 'monitor_objects',
            'recoveryConditions' => 'recovery_conditions',
            'triggerConditions' => 'trigger_conditions',
            'alarmRuleTemplateBindEnable' => 'alarm_rule_template_bind_enable',
            'alarmRuleTemplateId' => 'alarm_rule_template_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * monitorType  监控类型。 - “all_metric”：全量指标 - “promql”：PromQL - “resource”：（日落）资源类型
    * noDataConditions  无数据处理。
    * alarmTags  告警标签。
    * monitorObjects  监控对象列表。
    * recoveryConditions  recoveryConditions
    * triggerConditions  触发条件。
    * alarmRuleTemplateBindEnable  是否绑定告警规则模版（废弃）。
    * alarmRuleTemplateId  告警规则模版id（废弃）。
    *
    * @var string[]
    */
    protected static $setters = [
            'monitorType' => 'setMonitorType',
            'noDataConditions' => 'setNoDataConditions',
            'alarmTags' => 'setAlarmTags',
            'monitorObjects' => 'setMonitorObjects',
            'recoveryConditions' => 'setRecoveryConditions',
            'triggerConditions' => 'setTriggerConditions',
            'alarmRuleTemplateBindEnable' => 'setAlarmRuleTemplateBindEnable',
            'alarmRuleTemplateId' => 'setAlarmRuleTemplateId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * monitorType  监控类型。 - “all_metric”：全量指标 - “promql”：PromQL - “resource”：（日落）资源类型
    * noDataConditions  无数据处理。
    * alarmTags  告警标签。
    * monitorObjects  监控对象列表。
    * recoveryConditions  recoveryConditions
    * triggerConditions  触发条件。
    * alarmRuleTemplateBindEnable  是否绑定告警规则模版（废弃）。
    * alarmRuleTemplateId  告警规则模版id（废弃）。
    *
    * @var string[]
    */
    protected static $getters = [
            'monitorType' => 'getMonitorType',
            'noDataConditions' => 'getNoDataConditions',
            'alarmTags' => 'getAlarmTags',
            'monitorObjects' => 'getMonitorObjects',
            'recoveryConditions' => 'getRecoveryConditions',
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
    const MONITOR_TYPE_ALL_METRIC = 'all_metric';
    const MONITOR_TYPE_PROMQL = 'promql';
    const MONITOR_TYPE_RESOURCE = 'resource';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMonitorTypeAllowableValues()
    {
        return [
            self::MONITOR_TYPE_ALL_METRIC,
            self::MONITOR_TYPE_PROMQL,
            self::MONITOR_TYPE_RESOURCE,
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
        $this->container['monitorType'] = isset($data['monitorType']) ? $data['monitorType'] : null;
        $this->container['noDataConditions'] = isset($data['noDataConditions']) ? $data['noDataConditions'] : null;
        $this->container['alarmTags'] = isset($data['alarmTags']) ? $data['alarmTags'] : null;
        $this->container['monitorObjects'] = isset($data['monitorObjects']) ? $data['monitorObjects'] : null;
        $this->container['recoveryConditions'] = isset($data['recoveryConditions']) ? $data['recoveryConditions'] : null;
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
        if ($this->container['monitorType'] === null) {
            $invalidProperties[] = "'monitorType' can't be null";
        }
            $allowedValues = $this->getMonitorTypeAllowableValues();
                if (!is_null($this->container['monitorType']) && !in_array($this->container['monitorType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'monitorType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['alarmTags'] === null) {
            $invalidProperties[] = "'alarmTags' can't be null";
        }
        if ($this->container['recoveryConditions'] === null) {
            $invalidProperties[] = "'recoveryConditions' can't be null";
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
    * Gets monitorType
    *  监控类型。 - “all_metric”：全量指标 - “promql”：PromQL - “resource”：（日落）资源类型
    *
    * @return string
    */
    public function getMonitorType()
    {
        return $this->container['monitorType'];
    }

    /**
    * Sets monitorType
    *
    * @param string $monitorType 监控类型。 - “all_metric”：全量指标 - “promql”：PromQL - “resource”：（日落）资源类型
    *
    * @return $this
    */
    public function setMonitorType($monitorType)
    {
        $this->container['monitorType'] = $monitorType;
        return $this;
    }

    /**
    * Gets noDataConditions
    *  无数据处理。
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\NoDataCondition[]|null
    */
    public function getNoDataConditions()
    {
        return $this->container['noDataConditions'];
    }

    /**
    * Sets noDataConditions
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\NoDataCondition[]|null $noDataConditions 无数据处理。
    *
    * @return $this
    */
    public function setNoDataConditions($noDataConditions)
    {
        $this->container['noDataConditions'] = $noDataConditions;
        return $this;
    }

    /**
    * Gets alarmTags
    *  告警标签。
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\AlarmTags[]
    */
    public function getAlarmTags()
    {
        return $this->container['alarmTags'];
    }

    /**
    * Sets alarmTags
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\AlarmTags[] $alarmTags 告警标签。
    *
    * @return $this
    */
    public function setAlarmTags($alarmTags)
    {
        $this->container['alarmTags'] = $alarmTags;
        return $this;
    }

    /**
    * Gets monitorObjects
    *  监控对象列表。
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
    * @param map[string,string][]|null $monitorObjects 监控对象列表。
    *
    * @return $this
    */
    public function setMonitorObjects($monitorObjects)
    {
        $this->container['monitorObjects'] = $monitorObjects;
        return $this;
    }

    /**
    * Gets recoveryConditions
    *  recoveryConditions
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\RecoveryCondition
    */
    public function getRecoveryConditions()
    {
        return $this->container['recoveryConditions'];
    }

    /**
    * Sets recoveryConditions
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\RecoveryCondition $recoveryConditions recoveryConditions
    *
    * @return $this
    */
    public function setRecoveryConditions($recoveryConditions)
    {
        $this->container['recoveryConditions'] = $recoveryConditions;
        return $this;
    }

    /**
    * Gets triggerConditions
    *  触发条件。
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\TriggerCondition[]
    */
    public function getTriggerConditions()
    {
        return $this->container['triggerConditions'];
    }

    /**
    * Sets triggerConditions
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\TriggerCondition[] $triggerConditions 触发条件。
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
    *  是否绑定告警规则模版（废弃）。
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
    * @param bool|null $alarmRuleTemplateBindEnable 是否绑定告警规则模版（废弃）。
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
    *  告警规则模版id（废弃）。
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
    * @param string|null $alarmRuleTemplateId 告警规则模版id（废弃）。
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

