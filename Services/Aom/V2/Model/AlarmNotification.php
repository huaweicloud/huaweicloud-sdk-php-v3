<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlarmNotification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlarmNotification';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * notificationType  通知类型。 - “direct”：直接告警 - “alarm_policy”：告警降噪
    * routeGroupEnable  启用分组规则。 - 当通知类型为“alarm_policy”时：true - 当通知类型为“direct”时：false
    * routeGroupRule  分组规则名称。 - 当route_group_enable 为true时，填分组规则名称 - 当route_group_enable 为false时，填“”
    * notificationEnable  是否启用告警行动规则。 - 当通知类型为“direct”时，填true - 当通知类型为“alarm_policy”时，填false
    * bindNotificationRuleId  告警行动策略id。 - 当notification_enable为true时，填告警行动策略id - 当notification_enable为false时，填“”
    * notifyResolved  告警解决是否通知。 - true：通知 - false：不通知
    * notifyTriggered  告警触发是否通知。 - true：通知 - false：不通知
    * notifyFrequency  通知频率 - 当通知类型为“alarm_policy”时，填“-1” - 当通知类型为“direct”时，    - “0”：只告警一次    - “300”：每5分钟    - “600”：每10分钟    - “900”：每15分钟    - “1800”：每30分钟    - “3600”：每1小时    - “10800”：每3小时    - “21600”：每6小时    - “43200”：每12小时    - “86400”：每天
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'notificationType' => 'string',
            'routeGroupEnable' => 'bool',
            'routeGroupRule' => 'string',
            'notificationEnable' => 'bool',
            'bindNotificationRuleId' => 'string',
            'notifyResolved' => 'bool',
            'notifyTriggered' => 'bool',
            'notifyFrequency' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * notificationType  通知类型。 - “direct”：直接告警 - “alarm_policy”：告警降噪
    * routeGroupEnable  启用分组规则。 - 当通知类型为“alarm_policy”时：true - 当通知类型为“direct”时：false
    * routeGroupRule  分组规则名称。 - 当route_group_enable 为true时，填分组规则名称 - 当route_group_enable 为false时，填“”
    * notificationEnable  是否启用告警行动规则。 - 当通知类型为“direct”时，填true - 当通知类型为“alarm_policy”时，填false
    * bindNotificationRuleId  告警行动策略id。 - 当notification_enable为true时，填告警行动策略id - 当notification_enable为false时，填“”
    * notifyResolved  告警解决是否通知。 - true：通知 - false：不通知
    * notifyTriggered  告警触发是否通知。 - true：通知 - false：不通知
    * notifyFrequency  通知频率 - 当通知类型为“alarm_policy”时，填“-1” - 当通知类型为“direct”时，    - “0”：只告警一次    - “300”：每5分钟    - “600”：每10分钟    - “900”：每15分钟    - “1800”：每30分钟    - “3600”：每1小时    - “10800”：每3小时    - “21600”：每6小时    - “43200”：每12小时    - “86400”：每天
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'notificationType' => null,
        'routeGroupEnable' => null,
        'routeGroupRule' => null,
        'notificationEnable' => null,
        'bindNotificationRuleId' => null,
        'notifyResolved' => null,
        'notifyTriggered' => null,
        'notifyFrequency' => 'int32'
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
    * notificationType  通知类型。 - “direct”：直接告警 - “alarm_policy”：告警降噪
    * routeGroupEnable  启用分组规则。 - 当通知类型为“alarm_policy”时：true - 当通知类型为“direct”时：false
    * routeGroupRule  分组规则名称。 - 当route_group_enable 为true时，填分组规则名称 - 当route_group_enable 为false时，填“”
    * notificationEnable  是否启用告警行动规则。 - 当通知类型为“direct”时，填true - 当通知类型为“alarm_policy”时，填false
    * bindNotificationRuleId  告警行动策略id。 - 当notification_enable为true时，填告警行动策略id - 当notification_enable为false时，填“”
    * notifyResolved  告警解决是否通知。 - true：通知 - false：不通知
    * notifyTriggered  告警触发是否通知。 - true：通知 - false：不通知
    * notifyFrequency  通知频率 - 当通知类型为“alarm_policy”时，填“-1” - 当通知类型为“direct”时，    - “0”：只告警一次    - “300”：每5分钟    - “600”：每10分钟    - “900”：每15分钟    - “1800”：每30分钟    - “3600”：每1小时    - “10800”：每3小时    - “21600”：每6小时    - “43200”：每12小时    - “86400”：每天
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'notificationType' => 'notification_type',
            'routeGroupEnable' => 'route_group_enable',
            'routeGroupRule' => 'route_group_rule',
            'notificationEnable' => 'notification_enable',
            'bindNotificationRuleId' => 'bind_notification_rule_id',
            'notifyResolved' => 'notify_resolved',
            'notifyTriggered' => 'notify_triggered',
            'notifyFrequency' => 'notify_frequency'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * notificationType  通知类型。 - “direct”：直接告警 - “alarm_policy”：告警降噪
    * routeGroupEnable  启用分组规则。 - 当通知类型为“alarm_policy”时：true - 当通知类型为“direct”时：false
    * routeGroupRule  分组规则名称。 - 当route_group_enable 为true时，填分组规则名称 - 当route_group_enable 为false时，填“”
    * notificationEnable  是否启用告警行动规则。 - 当通知类型为“direct”时，填true - 当通知类型为“alarm_policy”时，填false
    * bindNotificationRuleId  告警行动策略id。 - 当notification_enable为true时，填告警行动策略id - 当notification_enable为false时，填“”
    * notifyResolved  告警解决是否通知。 - true：通知 - false：不通知
    * notifyTriggered  告警触发是否通知。 - true：通知 - false：不通知
    * notifyFrequency  通知频率 - 当通知类型为“alarm_policy”时，填“-1” - 当通知类型为“direct”时，    - “0”：只告警一次    - “300”：每5分钟    - “600”：每10分钟    - “900”：每15分钟    - “1800”：每30分钟    - “3600”：每1小时    - “10800”：每3小时    - “21600”：每6小时    - “43200”：每12小时    - “86400”：每天
    *
    * @var string[]
    */
    protected static $setters = [
            'notificationType' => 'setNotificationType',
            'routeGroupEnable' => 'setRouteGroupEnable',
            'routeGroupRule' => 'setRouteGroupRule',
            'notificationEnable' => 'setNotificationEnable',
            'bindNotificationRuleId' => 'setBindNotificationRuleId',
            'notifyResolved' => 'setNotifyResolved',
            'notifyTriggered' => 'setNotifyTriggered',
            'notifyFrequency' => 'setNotifyFrequency'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * notificationType  通知类型。 - “direct”：直接告警 - “alarm_policy”：告警降噪
    * routeGroupEnable  启用分组规则。 - 当通知类型为“alarm_policy”时：true - 当通知类型为“direct”时：false
    * routeGroupRule  分组规则名称。 - 当route_group_enable 为true时，填分组规则名称 - 当route_group_enable 为false时，填“”
    * notificationEnable  是否启用告警行动规则。 - 当通知类型为“direct”时，填true - 当通知类型为“alarm_policy”时，填false
    * bindNotificationRuleId  告警行动策略id。 - 当notification_enable为true时，填告警行动策略id - 当notification_enable为false时，填“”
    * notifyResolved  告警解决是否通知。 - true：通知 - false：不通知
    * notifyTriggered  告警触发是否通知。 - true：通知 - false：不通知
    * notifyFrequency  通知频率 - 当通知类型为“alarm_policy”时，填“-1” - 当通知类型为“direct”时，    - “0”：只告警一次    - “300”：每5分钟    - “600”：每10分钟    - “900”：每15分钟    - “1800”：每30分钟    - “3600”：每1小时    - “10800”：每3小时    - “21600”：每6小时    - “43200”：每12小时    - “86400”：每天
    *
    * @var string[]
    */
    protected static $getters = [
            'notificationType' => 'getNotificationType',
            'routeGroupEnable' => 'getRouteGroupEnable',
            'routeGroupRule' => 'getRouteGroupRule',
            'notificationEnable' => 'getNotificationEnable',
            'bindNotificationRuleId' => 'getBindNotificationRuleId',
            'notifyResolved' => 'getNotifyResolved',
            'notifyTriggered' => 'getNotifyTriggered',
            'notifyFrequency' => 'getNotifyFrequency'
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
    const NOTIFICATION_TYPE_DIRECT = 'direct';
    const NOTIFICATION_TYPE_ALARM_POLICY = 'alarm_policy';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNotificationTypeAllowableValues()
    {
        return [
            self::NOTIFICATION_TYPE_DIRECT,
            self::NOTIFICATION_TYPE_ALARM_POLICY,
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
        $this->container['notificationType'] = isset($data['notificationType']) ? $data['notificationType'] : null;
        $this->container['routeGroupEnable'] = isset($data['routeGroupEnable']) ? $data['routeGroupEnable'] : null;
        $this->container['routeGroupRule'] = isset($data['routeGroupRule']) ? $data['routeGroupRule'] : null;
        $this->container['notificationEnable'] = isset($data['notificationEnable']) ? $data['notificationEnable'] : null;
        $this->container['bindNotificationRuleId'] = isset($data['bindNotificationRuleId']) ? $data['bindNotificationRuleId'] : null;
        $this->container['notifyResolved'] = isset($data['notifyResolved']) ? $data['notifyResolved'] : null;
        $this->container['notifyTriggered'] = isset($data['notifyTriggered']) ? $data['notifyTriggered'] : null;
        $this->container['notifyFrequency'] = isset($data['notifyFrequency']) ? $data['notifyFrequency'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['notificationType'] === null) {
            $invalidProperties[] = "'notificationType' can't be null";
        }
            $allowedValues = $this->getNotificationTypeAllowableValues();
                if (!is_null($this->container['notificationType']) && !in_array($this->container['notificationType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'notificationType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['routeGroupEnable'] === null) {
            $invalidProperties[] = "'routeGroupEnable' can't be null";
        }
        if ($this->container['routeGroupRule'] === null) {
            $invalidProperties[] = "'routeGroupRule' can't be null";
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
    * Gets notificationType
    *  通知类型。 - “direct”：直接告警 - “alarm_policy”：告警降噪
    *
    * @return string
    */
    public function getNotificationType()
    {
        return $this->container['notificationType'];
    }

    /**
    * Sets notificationType
    *
    * @param string $notificationType 通知类型。 - “direct”：直接告警 - “alarm_policy”：告警降噪
    *
    * @return $this
    */
    public function setNotificationType($notificationType)
    {
        $this->container['notificationType'] = $notificationType;
        return $this;
    }

    /**
    * Gets routeGroupEnable
    *  启用分组规则。 - 当通知类型为“alarm_policy”时：true - 当通知类型为“direct”时：false
    *
    * @return bool
    */
    public function getRouteGroupEnable()
    {
        return $this->container['routeGroupEnable'];
    }

    /**
    * Sets routeGroupEnable
    *
    * @param bool $routeGroupEnable 启用分组规则。 - 当通知类型为“alarm_policy”时：true - 当通知类型为“direct”时：false
    *
    * @return $this
    */
    public function setRouteGroupEnable($routeGroupEnable)
    {
        $this->container['routeGroupEnable'] = $routeGroupEnable;
        return $this;
    }

    /**
    * Gets routeGroupRule
    *  分组规则名称。 - 当route_group_enable 为true时，填分组规则名称 - 当route_group_enable 为false时，填“”
    *
    * @return string
    */
    public function getRouteGroupRule()
    {
        return $this->container['routeGroupRule'];
    }

    /**
    * Sets routeGroupRule
    *
    * @param string $routeGroupRule 分组规则名称。 - 当route_group_enable 为true时，填分组规则名称 - 当route_group_enable 为false时，填“”
    *
    * @return $this
    */
    public function setRouteGroupRule($routeGroupRule)
    {
        $this->container['routeGroupRule'] = $routeGroupRule;
        return $this;
    }

    /**
    * Gets notificationEnable
    *  是否启用告警行动规则。 - 当通知类型为“direct”时，填true - 当通知类型为“alarm_policy”时，填false
    *
    * @return bool|null
    */
    public function getNotificationEnable()
    {
        return $this->container['notificationEnable'];
    }

    /**
    * Sets notificationEnable
    *
    * @param bool|null $notificationEnable 是否启用告警行动规则。 - 当通知类型为“direct”时，填true - 当通知类型为“alarm_policy”时，填false
    *
    * @return $this
    */
    public function setNotificationEnable($notificationEnable)
    {
        $this->container['notificationEnable'] = $notificationEnable;
        return $this;
    }

    /**
    * Gets bindNotificationRuleId
    *  告警行动策略id。 - 当notification_enable为true时，填告警行动策略id - 当notification_enable为false时，填“”
    *
    * @return string|null
    */
    public function getBindNotificationRuleId()
    {
        return $this->container['bindNotificationRuleId'];
    }

    /**
    * Sets bindNotificationRuleId
    *
    * @param string|null $bindNotificationRuleId 告警行动策略id。 - 当notification_enable为true时，填告警行动策略id - 当notification_enable为false时，填“”
    *
    * @return $this
    */
    public function setBindNotificationRuleId($bindNotificationRuleId)
    {
        $this->container['bindNotificationRuleId'] = $bindNotificationRuleId;
        return $this;
    }

    /**
    * Gets notifyResolved
    *  告警解决是否通知。 - true：通知 - false：不通知
    *
    * @return bool|null
    */
    public function getNotifyResolved()
    {
        return $this->container['notifyResolved'];
    }

    /**
    * Sets notifyResolved
    *
    * @param bool|null $notifyResolved 告警解决是否通知。 - true：通知 - false：不通知
    *
    * @return $this
    */
    public function setNotifyResolved($notifyResolved)
    {
        $this->container['notifyResolved'] = $notifyResolved;
        return $this;
    }

    /**
    * Gets notifyTriggered
    *  告警触发是否通知。 - true：通知 - false：不通知
    *
    * @return bool|null
    */
    public function getNotifyTriggered()
    {
        return $this->container['notifyTriggered'];
    }

    /**
    * Sets notifyTriggered
    *
    * @param bool|null $notifyTriggered 告警触发是否通知。 - true：通知 - false：不通知
    *
    * @return $this
    */
    public function setNotifyTriggered($notifyTriggered)
    {
        $this->container['notifyTriggered'] = $notifyTriggered;
        return $this;
    }

    /**
    * Gets notifyFrequency
    *  通知频率 - 当通知类型为“alarm_policy”时，填“-1” - 当通知类型为“direct”时，    - “0”：只告警一次    - “300”：每5分钟    - “600”：每10分钟    - “900”：每15分钟    - “1800”：每30分钟    - “3600”：每1小时    - “10800”：每3小时    - “21600”：每6小时    - “43200”：每12小时    - “86400”：每天
    *
    * @return int|null
    */
    public function getNotifyFrequency()
    {
        return $this->container['notifyFrequency'];
    }

    /**
    * Sets notifyFrequency
    *
    * @param int|null $notifyFrequency 通知频率 - 当通知类型为“alarm_policy”时，填“-1” - 当通知类型为“direct”时，    - “0”：只告警一次    - “300”：每5分钟    - “600”：每10分钟    - “900”：每15分钟    - “1800”：每30分钟    - “3600”：每1小时    - “10800”：每3小时    - “21600”：每6小时    - “43200”：每12小时    - “86400”：每天
    *
    * @return $this
    */
    public function setNotifyFrequency($notifyFrequency)
    {
        $this->container['notifyFrequency'] = $notifyFrequency;
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

