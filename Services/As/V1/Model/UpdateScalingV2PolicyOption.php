<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateScalingV2PolicyOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateScalingV2PolicyOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scalingPolicyName  策略名称（1-64）字符，可以用中文、字母、数字、下划线、中划线的组合。
    * scalingResourceId  伸缩资源ID，伸缩组唯一标识或带宽唯一标识。如果scaling_resource_type为SCALING_GROUP，对应伸缩组唯一标识。如果scaling_resource_type为BANDWIDTH，对应带宽唯一标识。
    * scalingResourceType  伸缩资源类型。伸缩组：SCALING_GROUP。带宽：BANDWIDTH。
    * scalingPolicyType  策略类型。告警策略：ALARM（与alarm_id对应）；定时策略：SCHEDULED（与scheduled_policy对应）；周期策略：RECURRENCE（与scheduled_policy对应）
    * alarmId  告警ID，即告警规则的ID，当scaling_policy_type为ALARM时该项必选，此时scheduled_policy不生效。创建告警策略成功后，会自动为该告警ID对应的告警规则的alarm_actions字段增加类型为autoscaling的告警触发动作。告警ID通过查询云监控告警规则列表获取，详见《云监控API参考》的“查询告警规则列表”。
    * scheduledPolicy  scheduledPolicy
    * scalingPolicyAction  scalingPolicyAction
    * intervalAlarmActions  intervalAlarmActions
    * coolDownTime  冷却时间，取值范围0-86400，默认为300，单位是秒。
    * description  伸缩策略描述（1-256个字符）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scalingPolicyName' => 'string',
            'scalingResourceId' => 'string',
            'scalingResourceType' => 'string',
            'scalingPolicyType' => 'string',
            'alarmId' => 'string',
            'scheduledPolicy' => '\HuaweiCloud\SDK\_As\V1\Model\ScheduledPolicy',
            'scalingPolicyAction' => '\HuaweiCloud\SDK\_As\V1\Model\ScalingPolicyActionV2',
            'intervalAlarmActions' => '\HuaweiCloud\SDK\_As\V1\Model\IntervalAlarmActionsV2[]',
            'coolDownTime' => 'int',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scalingPolicyName  策略名称（1-64）字符，可以用中文、字母、数字、下划线、中划线的组合。
    * scalingResourceId  伸缩资源ID，伸缩组唯一标识或带宽唯一标识。如果scaling_resource_type为SCALING_GROUP，对应伸缩组唯一标识。如果scaling_resource_type为BANDWIDTH，对应带宽唯一标识。
    * scalingResourceType  伸缩资源类型。伸缩组：SCALING_GROUP。带宽：BANDWIDTH。
    * scalingPolicyType  策略类型。告警策略：ALARM（与alarm_id对应）；定时策略：SCHEDULED（与scheduled_policy对应）；周期策略：RECURRENCE（与scheduled_policy对应）
    * alarmId  告警ID，即告警规则的ID，当scaling_policy_type为ALARM时该项必选，此时scheduled_policy不生效。创建告警策略成功后，会自动为该告警ID对应的告警规则的alarm_actions字段增加类型为autoscaling的告警触发动作。告警ID通过查询云监控告警规则列表获取，详见《云监控API参考》的“查询告警规则列表”。
    * scheduledPolicy  scheduledPolicy
    * scalingPolicyAction  scalingPolicyAction
    * intervalAlarmActions  intervalAlarmActions
    * coolDownTime  冷却时间，取值范围0-86400，默认为300，单位是秒。
    * description  伸缩策略描述（1-256个字符）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scalingPolicyName' => null,
        'scalingResourceId' => null,
        'scalingResourceType' => null,
        'scalingPolicyType' => null,
        'alarmId' => null,
        'scheduledPolicy' => null,
        'scalingPolicyAction' => null,
        'intervalAlarmActions' => null,
        'coolDownTime' => null,
        'description' => null
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
    * scalingPolicyName  策略名称（1-64）字符，可以用中文、字母、数字、下划线、中划线的组合。
    * scalingResourceId  伸缩资源ID，伸缩组唯一标识或带宽唯一标识。如果scaling_resource_type为SCALING_GROUP，对应伸缩组唯一标识。如果scaling_resource_type为BANDWIDTH，对应带宽唯一标识。
    * scalingResourceType  伸缩资源类型。伸缩组：SCALING_GROUP。带宽：BANDWIDTH。
    * scalingPolicyType  策略类型。告警策略：ALARM（与alarm_id对应）；定时策略：SCHEDULED（与scheduled_policy对应）；周期策略：RECURRENCE（与scheduled_policy对应）
    * alarmId  告警ID，即告警规则的ID，当scaling_policy_type为ALARM时该项必选，此时scheduled_policy不生效。创建告警策略成功后，会自动为该告警ID对应的告警规则的alarm_actions字段增加类型为autoscaling的告警触发动作。告警ID通过查询云监控告警规则列表获取，详见《云监控API参考》的“查询告警规则列表”。
    * scheduledPolicy  scheduledPolicy
    * scalingPolicyAction  scalingPolicyAction
    * intervalAlarmActions  intervalAlarmActions
    * coolDownTime  冷却时间，取值范围0-86400，默认为300，单位是秒。
    * description  伸缩策略描述（1-256个字符）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scalingPolicyName' => 'scaling_policy_name',
            'scalingResourceId' => 'scaling_resource_id',
            'scalingResourceType' => 'scaling_resource_type',
            'scalingPolicyType' => 'scaling_policy_type',
            'alarmId' => 'alarm_id',
            'scheduledPolicy' => 'scheduled_policy',
            'scalingPolicyAction' => 'scaling_policy_action',
            'intervalAlarmActions' => 'interval_alarm_actions',
            'coolDownTime' => 'cool_down_time',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scalingPolicyName  策略名称（1-64）字符，可以用中文、字母、数字、下划线、中划线的组合。
    * scalingResourceId  伸缩资源ID，伸缩组唯一标识或带宽唯一标识。如果scaling_resource_type为SCALING_GROUP，对应伸缩组唯一标识。如果scaling_resource_type为BANDWIDTH，对应带宽唯一标识。
    * scalingResourceType  伸缩资源类型。伸缩组：SCALING_GROUP。带宽：BANDWIDTH。
    * scalingPolicyType  策略类型。告警策略：ALARM（与alarm_id对应）；定时策略：SCHEDULED（与scheduled_policy对应）；周期策略：RECURRENCE（与scheduled_policy对应）
    * alarmId  告警ID，即告警规则的ID，当scaling_policy_type为ALARM时该项必选，此时scheduled_policy不生效。创建告警策略成功后，会自动为该告警ID对应的告警规则的alarm_actions字段增加类型为autoscaling的告警触发动作。告警ID通过查询云监控告警规则列表获取，详见《云监控API参考》的“查询告警规则列表”。
    * scheduledPolicy  scheduledPolicy
    * scalingPolicyAction  scalingPolicyAction
    * intervalAlarmActions  intervalAlarmActions
    * coolDownTime  冷却时间，取值范围0-86400，默认为300，单位是秒。
    * description  伸缩策略描述（1-256个字符）
    *
    * @var string[]
    */
    protected static $setters = [
            'scalingPolicyName' => 'setScalingPolicyName',
            'scalingResourceId' => 'setScalingResourceId',
            'scalingResourceType' => 'setScalingResourceType',
            'scalingPolicyType' => 'setScalingPolicyType',
            'alarmId' => 'setAlarmId',
            'scheduledPolicy' => 'setScheduledPolicy',
            'scalingPolicyAction' => 'setScalingPolicyAction',
            'intervalAlarmActions' => 'setIntervalAlarmActions',
            'coolDownTime' => 'setCoolDownTime',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scalingPolicyName  策略名称（1-64）字符，可以用中文、字母、数字、下划线、中划线的组合。
    * scalingResourceId  伸缩资源ID，伸缩组唯一标识或带宽唯一标识。如果scaling_resource_type为SCALING_GROUP，对应伸缩组唯一标识。如果scaling_resource_type为BANDWIDTH，对应带宽唯一标识。
    * scalingResourceType  伸缩资源类型。伸缩组：SCALING_GROUP。带宽：BANDWIDTH。
    * scalingPolicyType  策略类型。告警策略：ALARM（与alarm_id对应）；定时策略：SCHEDULED（与scheduled_policy对应）；周期策略：RECURRENCE（与scheduled_policy对应）
    * alarmId  告警ID，即告警规则的ID，当scaling_policy_type为ALARM时该项必选，此时scheduled_policy不生效。创建告警策略成功后，会自动为该告警ID对应的告警规则的alarm_actions字段增加类型为autoscaling的告警触发动作。告警ID通过查询云监控告警规则列表获取，详见《云监控API参考》的“查询告警规则列表”。
    * scheduledPolicy  scheduledPolicy
    * scalingPolicyAction  scalingPolicyAction
    * intervalAlarmActions  intervalAlarmActions
    * coolDownTime  冷却时间，取值范围0-86400，默认为300，单位是秒。
    * description  伸缩策略描述（1-256个字符）
    *
    * @var string[]
    */
    protected static $getters = [
            'scalingPolicyName' => 'getScalingPolicyName',
            'scalingResourceId' => 'getScalingResourceId',
            'scalingResourceType' => 'getScalingResourceType',
            'scalingPolicyType' => 'getScalingPolicyType',
            'alarmId' => 'getAlarmId',
            'scheduledPolicy' => 'getScheduledPolicy',
            'scalingPolicyAction' => 'getScalingPolicyAction',
            'intervalAlarmActions' => 'getIntervalAlarmActions',
            'coolDownTime' => 'getCoolDownTime',
            'description' => 'getDescription'
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
    const SCALING_RESOURCE_TYPE_SCALING_GROUP = 'SCALING_GROUP';
    const SCALING_RESOURCE_TYPE_BANDWIDTH = 'BANDWIDTH';
    const SCALING_POLICY_TYPE_ALARM = 'ALARM';
    const SCALING_POLICY_TYPE_SCHEDULED = 'SCHEDULED';
    const SCALING_POLICY_TYPE_RECURRENCE = 'RECURRENCE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getScalingResourceTypeAllowableValues()
    {
        return [
            self::SCALING_RESOURCE_TYPE_SCALING_GROUP,
            self::SCALING_RESOURCE_TYPE_BANDWIDTH,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getScalingPolicyTypeAllowableValues()
    {
        return [
            self::SCALING_POLICY_TYPE_ALARM,
            self::SCALING_POLICY_TYPE_SCHEDULED,
            self::SCALING_POLICY_TYPE_RECURRENCE,
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
        $this->container['scalingPolicyName'] = isset($data['scalingPolicyName']) ? $data['scalingPolicyName'] : null;
        $this->container['scalingResourceId'] = isset($data['scalingResourceId']) ? $data['scalingResourceId'] : null;
        $this->container['scalingResourceType'] = isset($data['scalingResourceType']) ? $data['scalingResourceType'] : null;
        $this->container['scalingPolicyType'] = isset($data['scalingPolicyType']) ? $data['scalingPolicyType'] : null;
        $this->container['alarmId'] = isset($data['alarmId']) ? $data['alarmId'] : null;
        $this->container['scheduledPolicy'] = isset($data['scheduledPolicy']) ? $data['scheduledPolicy'] : null;
        $this->container['scalingPolicyAction'] = isset($data['scalingPolicyAction']) ? $data['scalingPolicyAction'] : null;
        $this->container['intervalAlarmActions'] = isset($data['intervalAlarmActions']) ? $data['intervalAlarmActions'] : null;
        $this->container['coolDownTime'] = isset($data['coolDownTime']) ? $data['coolDownTime'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['scalingPolicyName']) && (mb_strlen($this->container['scalingPolicyName']) > 64)) {
                $invalidProperties[] = "invalid value for 'scalingPolicyName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['scalingPolicyName']) && (mb_strlen($this->container['scalingPolicyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'scalingPolicyName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['scalingResourceId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['scalingResourceId'])) {
                $invalidProperties[] = "invalid value for 'scalingResourceId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            $allowedValues = $this->getScalingResourceTypeAllowableValues();
                if (!is_null($this->container['scalingResourceType']) && !in_array($this->container['scalingResourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'scalingResourceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getScalingPolicyTypeAllowableValues();
                if (!is_null($this->container['scalingPolicyType']) && !in_array($this->container['scalingPolicyType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'scalingPolicyType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['coolDownTime']) && ($this->container['coolDownTime'] > 86400)) {
                $invalidProperties[] = "invalid value for 'coolDownTime', must be smaller than or equal to 86400.";
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
    * Gets scalingPolicyName
    *  策略名称（1-64）字符，可以用中文、字母、数字、下划线、中划线的组合。
    *
    * @return string|null
    */
    public function getScalingPolicyName()
    {
        return $this->container['scalingPolicyName'];
    }

    /**
    * Sets scalingPolicyName
    *
    * @param string|null $scalingPolicyName 策略名称（1-64）字符，可以用中文、字母、数字、下划线、中划线的组合。
    *
    * @return $this
    */
    public function setScalingPolicyName($scalingPolicyName)
    {
        $this->container['scalingPolicyName'] = $scalingPolicyName;
        return $this;
    }

    /**
    * Gets scalingResourceId
    *  伸缩资源ID，伸缩组唯一标识或带宽唯一标识。如果scaling_resource_type为SCALING_GROUP，对应伸缩组唯一标识。如果scaling_resource_type为BANDWIDTH，对应带宽唯一标识。
    *
    * @return string|null
    */
    public function getScalingResourceId()
    {
        return $this->container['scalingResourceId'];
    }

    /**
    * Sets scalingResourceId
    *
    * @param string|null $scalingResourceId 伸缩资源ID，伸缩组唯一标识或带宽唯一标识。如果scaling_resource_type为SCALING_GROUP，对应伸缩组唯一标识。如果scaling_resource_type为BANDWIDTH，对应带宽唯一标识。
    *
    * @return $this
    */
    public function setScalingResourceId($scalingResourceId)
    {
        $this->container['scalingResourceId'] = $scalingResourceId;
        return $this;
    }

    /**
    * Gets scalingResourceType
    *  伸缩资源类型。伸缩组：SCALING_GROUP。带宽：BANDWIDTH。
    *
    * @return string|null
    */
    public function getScalingResourceType()
    {
        return $this->container['scalingResourceType'];
    }

    /**
    * Sets scalingResourceType
    *
    * @param string|null $scalingResourceType 伸缩资源类型。伸缩组：SCALING_GROUP。带宽：BANDWIDTH。
    *
    * @return $this
    */
    public function setScalingResourceType($scalingResourceType)
    {
        $this->container['scalingResourceType'] = $scalingResourceType;
        return $this;
    }

    /**
    * Gets scalingPolicyType
    *  策略类型。告警策略：ALARM（与alarm_id对应）；定时策略：SCHEDULED（与scheduled_policy对应）；周期策略：RECURRENCE（与scheduled_policy对应）
    *
    * @return string|null
    */
    public function getScalingPolicyType()
    {
        return $this->container['scalingPolicyType'];
    }

    /**
    * Sets scalingPolicyType
    *
    * @param string|null $scalingPolicyType 策略类型。告警策略：ALARM（与alarm_id对应）；定时策略：SCHEDULED（与scheduled_policy对应）；周期策略：RECURRENCE（与scheduled_policy对应）
    *
    * @return $this
    */
    public function setScalingPolicyType($scalingPolicyType)
    {
        $this->container['scalingPolicyType'] = $scalingPolicyType;
        return $this;
    }

    /**
    * Gets alarmId
    *  告警ID，即告警规则的ID，当scaling_policy_type为ALARM时该项必选，此时scheduled_policy不生效。创建告警策略成功后，会自动为该告警ID对应的告警规则的alarm_actions字段增加类型为autoscaling的告警触发动作。告警ID通过查询云监控告警规则列表获取，详见《云监控API参考》的“查询告警规则列表”。
    *
    * @return string|null
    */
    public function getAlarmId()
    {
        return $this->container['alarmId'];
    }

    /**
    * Sets alarmId
    *
    * @param string|null $alarmId 告警ID，即告警规则的ID，当scaling_policy_type为ALARM时该项必选，此时scheduled_policy不生效。创建告警策略成功后，会自动为该告警ID对应的告警规则的alarm_actions字段增加类型为autoscaling的告警触发动作。告警ID通过查询云监控告警规则列表获取，详见《云监控API参考》的“查询告警规则列表”。
    *
    * @return $this
    */
    public function setAlarmId($alarmId)
    {
        $this->container['alarmId'] = $alarmId;
        return $this;
    }

    /**
    * Gets scheduledPolicy
    *  scheduledPolicy
    *
    * @return \HuaweiCloud\SDK\_As\V1\Model\ScheduledPolicy|null
    */
    public function getScheduledPolicy()
    {
        return $this->container['scheduledPolicy'];
    }

    /**
    * Sets scheduledPolicy
    *
    * @param \HuaweiCloud\SDK\_As\V1\Model\ScheduledPolicy|null $scheduledPolicy scheduledPolicy
    *
    * @return $this
    */
    public function setScheduledPolicy($scheduledPolicy)
    {
        $this->container['scheduledPolicy'] = $scheduledPolicy;
        return $this;
    }

    /**
    * Gets scalingPolicyAction
    *  scalingPolicyAction
    *
    * @return \HuaweiCloud\SDK\_As\V1\Model\ScalingPolicyActionV2|null
    */
    public function getScalingPolicyAction()
    {
        return $this->container['scalingPolicyAction'];
    }

    /**
    * Sets scalingPolicyAction
    *
    * @param \HuaweiCloud\SDK\_As\V1\Model\ScalingPolicyActionV2|null $scalingPolicyAction scalingPolicyAction
    *
    * @return $this
    */
    public function setScalingPolicyAction($scalingPolicyAction)
    {
        $this->container['scalingPolicyAction'] = $scalingPolicyAction;
        return $this;
    }

    /**
    * Gets intervalAlarmActions
    *  intervalAlarmActions
    *
    * @return \HuaweiCloud\SDK\_As\V1\Model\IntervalAlarmActionsV2[]|null
    */
    public function getIntervalAlarmActions()
    {
        return $this->container['intervalAlarmActions'];
    }

    /**
    * Sets intervalAlarmActions
    *
    * @param \HuaweiCloud\SDK\_As\V1\Model\IntervalAlarmActionsV2[]|null $intervalAlarmActions intervalAlarmActions
    *
    * @return $this
    */
    public function setIntervalAlarmActions($intervalAlarmActions)
    {
        $this->container['intervalAlarmActions'] = $intervalAlarmActions;
        return $this;
    }

    /**
    * Gets coolDownTime
    *  冷却时间，取值范围0-86400，默认为300，单位是秒。
    *
    * @return int|null
    */
    public function getCoolDownTime()
    {
        return $this->container['coolDownTime'];
    }

    /**
    * Sets coolDownTime
    *
    * @param int|null $coolDownTime 冷却时间，取值范围0-86400，默认为300，单位是秒。
    *
    * @return $this
    */
    public function setCoolDownTime($coolDownTime)
    {
        $this->container['coolDownTime'] = $coolDownTime;
        return $this;
    }

    /**
    * Gets description
    *  伸缩策略描述（1-256个字符）
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 伸缩策略描述（1-256个字符）
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

