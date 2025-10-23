<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchUpdateActionRules implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchUpdateActionRules';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alarmRuleId  告警规则id。
    * alarmRuleName  告警规则名称。
    * alarmRuleType  告警规则类型。
    * bindNotificationRuleId  待绑定的告警行动规则名称。
    * frequency  通知频率 - 当通知类型为“alarm_policy”时，填“-1” - 当通知类型为“direct”时，    - “0”：只告警一次    - “300”：每5分钟    - “600”：每10分钟    - “900”：每15分钟    - “1800”：每30分钟    - “3600”：每1小时    - “10800”：每3小时    - “21600”：每6小时    - “43200”：每12小时    - “86400”：每天
    * notificationEnable  是否启用告警通知规则。 - 当通知类型为“direct”时，填true - 当通知类型为“alarm_policy”时，填false 如果告警触发“notify_triggered”或告警恢复“notify_resolved”都设置为false（即都不进行告警通知），则notification_enable需设置为false。
    * notificationType  通知类型。 - “direct”：直接告警 - “alarm_policy”：告警降噪
    * notifyResolved  告警解决是否通知。 - true：通知 - false：不通知
    * notifyTriggered  告警触发是否通知。 - true：通知 - false：不通知
    * routeGroupEnable  启用告警分组规则。 - 当通知类型为“alarm_policy”时：true - 当通知类型为“direct”时：false 如果告警触发“notify_triggered”或告警恢复“notify_resolved”都设置为false（即都不进行告警通知），则route_group_enable需设置为false。
    * routeGroupRule  告警分组规则名称。 - 当route_group_enable 为true时，填告警分组规则名称 - 当route_group_enable 为false时，填“”
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alarmRuleId' => 'int',
            'alarmRuleName' => 'string',
            'alarmRuleType' => 'string',
            'bindNotificationRuleId' => 'string',
            'frequency' => 'string',
            'notificationEnable' => 'bool',
            'notificationType' => 'string',
            'notifyResolved' => 'bool',
            'notifyTriggered' => 'bool',
            'routeGroupEnable' => 'bool',
            'routeGroupRule' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alarmRuleId  告警规则id。
    * alarmRuleName  告警规则名称。
    * alarmRuleType  告警规则类型。
    * bindNotificationRuleId  待绑定的告警行动规则名称。
    * frequency  通知频率 - 当通知类型为“alarm_policy”时，填“-1” - 当通知类型为“direct”时，    - “0”：只告警一次    - “300”：每5分钟    - “600”：每10分钟    - “900”：每15分钟    - “1800”：每30分钟    - “3600”：每1小时    - “10800”：每3小时    - “21600”：每6小时    - “43200”：每12小时    - “86400”：每天
    * notificationEnable  是否启用告警通知规则。 - 当通知类型为“direct”时，填true - 当通知类型为“alarm_policy”时，填false 如果告警触发“notify_triggered”或告警恢复“notify_resolved”都设置为false（即都不进行告警通知），则notification_enable需设置为false。
    * notificationType  通知类型。 - “direct”：直接告警 - “alarm_policy”：告警降噪
    * notifyResolved  告警解决是否通知。 - true：通知 - false：不通知
    * notifyTriggered  告警触发是否通知。 - true：通知 - false：不通知
    * routeGroupEnable  启用告警分组规则。 - 当通知类型为“alarm_policy”时：true - 当通知类型为“direct”时：false 如果告警触发“notify_triggered”或告警恢复“notify_resolved”都设置为false（即都不进行告警通知），则route_group_enable需设置为false。
    * routeGroupRule  告警分组规则名称。 - 当route_group_enable 为true时，填告警分组规则名称 - 当route_group_enable 为false时，填“”
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alarmRuleId' => 'int64',
        'alarmRuleName' => null,
        'alarmRuleType' => null,
        'bindNotificationRuleId' => null,
        'frequency' => null,
        'notificationEnable' => null,
        'notificationType' => null,
        'notifyResolved' => null,
        'notifyTriggered' => null,
        'routeGroupEnable' => null,
        'routeGroupRule' => null
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
    * alarmRuleId  告警规则id。
    * alarmRuleName  告警规则名称。
    * alarmRuleType  告警规则类型。
    * bindNotificationRuleId  待绑定的告警行动规则名称。
    * frequency  通知频率 - 当通知类型为“alarm_policy”时，填“-1” - 当通知类型为“direct”时，    - “0”：只告警一次    - “300”：每5分钟    - “600”：每10分钟    - “900”：每15分钟    - “1800”：每30分钟    - “3600”：每1小时    - “10800”：每3小时    - “21600”：每6小时    - “43200”：每12小时    - “86400”：每天
    * notificationEnable  是否启用告警通知规则。 - 当通知类型为“direct”时，填true - 当通知类型为“alarm_policy”时，填false 如果告警触发“notify_triggered”或告警恢复“notify_resolved”都设置为false（即都不进行告警通知），则notification_enable需设置为false。
    * notificationType  通知类型。 - “direct”：直接告警 - “alarm_policy”：告警降噪
    * notifyResolved  告警解决是否通知。 - true：通知 - false：不通知
    * notifyTriggered  告警触发是否通知。 - true：通知 - false：不通知
    * routeGroupEnable  启用告警分组规则。 - 当通知类型为“alarm_policy”时：true - 当通知类型为“direct”时：false 如果告警触发“notify_triggered”或告警恢复“notify_resolved”都设置为false（即都不进行告警通知），则route_group_enable需设置为false。
    * routeGroupRule  告警分组规则名称。 - 当route_group_enable 为true时，填告警分组规则名称 - 当route_group_enable 为false时，填“”
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alarmRuleId' => 'alarm_rule_id',
            'alarmRuleName' => 'alarm_rule_name',
            'alarmRuleType' => 'alarm_rule_type',
            'bindNotificationRuleId' => 'bind_notification_rule_id',
            'frequency' => 'frequency',
            'notificationEnable' => 'notification_enable',
            'notificationType' => 'notification_type',
            'notifyResolved' => 'notify_resolved',
            'notifyTriggered' => 'notify_triggered',
            'routeGroupEnable' => 'route_group_enable',
            'routeGroupRule' => 'route_group_rule'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alarmRuleId  告警规则id。
    * alarmRuleName  告警规则名称。
    * alarmRuleType  告警规则类型。
    * bindNotificationRuleId  待绑定的告警行动规则名称。
    * frequency  通知频率 - 当通知类型为“alarm_policy”时，填“-1” - 当通知类型为“direct”时，    - “0”：只告警一次    - “300”：每5分钟    - “600”：每10分钟    - “900”：每15分钟    - “1800”：每30分钟    - “3600”：每1小时    - “10800”：每3小时    - “21600”：每6小时    - “43200”：每12小时    - “86400”：每天
    * notificationEnable  是否启用告警通知规则。 - 当通知类型为“direct”时，填true - 当通知类型为“alarm_policy”时，填false 如果告警触发“notify_triggered”或告警恢复“notify_resolved”都设置为false（即都不进行告警通知），则notification_enable需设置为false。
    * notificationType  通知类型。 - “direct”：直接告警 - “alarm_policy”：告警降噪
    * notifyResolved  告警解决是否通知。 - true：通知 - false：不通知
    * notifyTriggered  告警触发是否通知。 - true：通知 - false：不通知
    * routeGroupEnable  启用告警分组规则。 - 当通知类型为“alarm_policy”时：true - 当通知类型为“direct”时：false 如果告警触发“notify_triggered”或告警恢复“notify_resolved”都设置为false（即都不进行告警通知），则route_group_enable需设置为false。
    * routeGroupRule  告警分组规则名称。 - 当route_group_enable 为true时，填告警分组规则名称 - 当route_group_enable 为false时，填“”
    *
    * @var string[]
    */
    protected static $setters = [
            'alarmRuleId' => 'setAlarmRuleId',
            'alarmRuleName' => 'setAlarmRuleName',
            'alarmRuleType' => 'setAlarmRuleType',
            'bindNotificationRuleId' => 'setBindNotificationRuleId',
            'frequency' => 'setFrequency',
            'notificationEnable' => 'setNotificationEnable',
            'notificationType' => 'setNotificationType',
            'notifyResolved' => 'setNotifyResolved',
            'notifyTriggered' => 'setNotifyTriggered',
            'routeGroupEnable' => 'setRouteGroupEnable',
            'routeGroupRule' => 'setRouteGroupRule'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alarmRuleId  告警规则id。
    * alarmRuleName  告警规则名称。
    * alarmRuleType  告警规则类型。
    * bindNotificationRuleId  待绑定的告警行动规则名称。
    * frequency  通知频率 - 当通知类型为“alarm_policy”时，填“-1” - 当通知类型为“direct”时，    - “0”：只告警一次    - “300”：每5分钟    - “600”：每10分钟    - “900”：每15分钟    - “1800”：每30分钟    - “3600”：每1小时    - “10800”：每3小时    - “21600”：每6小时    - “43200”：每12小时    - “86400”：每天
    * notificationEnable  是否启用告警通知规则。 - 当通知类型为“direct”时，填true - 当通知类型为“alarm_policy”时，填false 如果告警触发“notify_triggered”或告警恢复“notify_resolved”都设置为false（即都不进行告警通知），则notification_enable需设置为false。
    * notificationType  通知类型。 - “direct”：直接告警 - “alarm_policy”：告警降噪
    * notifyResolved  告警解决是否通知。 - true：通知 - false：不通知
    * notifyTriggered  告警触发是否通知。 - true：通知 - false：不通知
    * routeGroupEnable  启用告警分组规则。 - 当通知类型为“alarm_policy”时：true - 当通知类型为“direct”时：false 如果告警触发“notify_triggered”或告警恢复“notify_resolved”都设置为false（即都不进行告警通知），则route_group_enable需设置为false。
    * routeGroupRule  告警分组规则名称。 - 当route_group_enable 为true时，填告警分组规则名称 - 当route_group_enable 为false时，填“”
    *
    * @var string[]
    */
    protected static $getters = [
            'alarmRuleId' => 'getAlarmRuleId',
            'alarmRuleName' => 'getAlarmRuleName',
            'alarmRuleType' => 'getAlarmRuleType',
            'bindNotificationRuleId' => 'getBindNotificationRuleId',
            'frequency' => 'getFrequency',
            'notificationEnable' => 'getNotificationEnable',
            'notificationType' => 'getNotificationType',
            'notifyResolved' => 'getNotifyResolved',
            'notifyTriggered' => 'getNotifyTriggered',
            'routeGroupEnable' => 'getRouteGroupEnable',
            'routeGroupRule' => 'getRouteGroupRule'
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
        $this->container['alarmRuleId'] = isset($data['alarmRuleId']) ? $data['alarmRuleId'] : null;
        $this->container['alarmRuleName'] = isset($data['alarmRuleName']) ? $data['alarmRuleName'] : null;
        $this->container['alarmRuleType'] = isset($data['alarmRuleType']) ? $data['alarmRuleType'] : null;
        $this->container['bindNotificationRuleId'] = isset($data['bindNotificationRuleId']) ? $data['bindNotificationRuleId'] : null;
        $this->container['frequency'] = isset($data['frequency']) ? $data['frequency'] : null;
        $this->container['notificationEnable'] = isset($data['notificationEnable']) ? $data['notificationEnable'] : null;
        $this->container['notificationType'] = isset($data['notificationType']) ? $data['notificationType'] : null;
        $this->container['notifyResolved'] = isset($data['notifyResolved']) ? $data['notifyResolved'] : null;
        $this->container['notifyTriggered'] = isset($data['notifyTriggered']) ? $data['notifyTriggered'] : null;
        $this->container['routeGroupEnable'] = isset($data['routeGroupEnable']) ? $data['routeGroupEnable'] : null;
        $this->container['routeGroupRule'] = isset($data['routeGroupRule']) ? $data['routeGroupRule'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['alarmRuleId'] === null) {
            $invalidProperties[] = "'alarmRuleId' can't be null";
        }
        if ($this->container['alarmRuleName'] === null) {
            $invalidProperties[] = "'alarmRuleName' can't be null";
        }
        if ($this->container['alarmRuleType'] === null) {
            $invalidProperties[] = "'alarmRuleType' can't be null";
        }
        if ($this->container['frequency'] === null) {
            $invalidProperties[] = "'frequency' can't be null";
        }
        if ($this->container['notifyResolved'] === null) {
            $invalidProperties[] = "'notifyResolved' can't be null";
        }
        if ($this->container['notifyTriggered'] === null) {
            $invalidProperties[] = "'notifyTriggered' can't be null";
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
    * Gets alarmRuleId
    *  告警规则id。
    *
    * @return int
    */
    public function getAlarmRuleId()
    {
        return $this->container['alarmRuleId'];
    }

    /**
    * Sets alarmRuleId
    *
    * @param int $alarmRuleId 告警规则id。
    *
    * @return $this
    */
    public function setAlarmRuleId($alarmRuleId)
    {
        $this->container['alarmRuleId'] = $alarmRuleId;
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
    *  告警规则类型。
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
    * @param string $alarmRuleType 告警规则类型。
    *
    * @return $this
    */
    public function setAlarmRuleType($alarmRuleType)
    {
        $this->container['alarmRuleType'] = $alarmRuleType;
        return $this;
    }

    /**
    * Gets bindNotificationRuleId
    *  待绑定的告警行动规则名称。
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
    * @param string|null $bindNotificationRuleId 待绑定的告警行动规则名称。
    *
    * @return $this
    */
    public function setBindNotificationRuleId($bindNotificationRuleId)
    {
        $this->container['bindNotificationRuleId'] = $bindNotificationRuleId;
        return $this;
    }

    /**
    * Gets frequency
    *  通知频率 - 当通知类型为“alarm_policy”时，填“-1” - 当通知类型为“direct”时，    - “0”：只告警一次    - “300”：每5分钟    - “600”：每10分钟    - “900”：每15分钟    - “1800”：每30分钟    - “3600”：每1小时    - “10800”：每3小时    - “21600”：每6小时    - “43200”：每12小时    - “86400”：每天
    *
    * @return string
    */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
    * Sets frequency
    *
    * @param string $frequency 通知频率 - 当通知类型为“alarm_policy”时，填“-1” - 当通知类型为“direct”时，    - “0”：只告警一次    - “300”：每5分钟    - “600”：每10分钟    - “900”：每15分钟    - “1800”：每30分钟    - “3600”：每1小时    - “10800”：每3小时    - “21600”：每6小时    - “43200”：每12小时    - “86400”：每天
    *
    * @return $this
    */
    public function setFrequency($frequency)
    {
        $this->container['frequency'] = $frequency;
        return $this;
    }

    /**
    * Gets notificationEnable
    *  是否启用告警通知规则。 - 当通知类型为“direct”时，填true - 当通知类型为“alarm_policy”时，填false 如果告警触发“notify_triggered”或告警恢复“notify_resolved”都设置为false（即都不进行告警通知），则notification_enable需设置为false。
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
    * @param bool|null $notificationEnable 是否启用告警通知规则。 - 当通知类型为“direct”时，填true - 当通知类型为“alarm_policy”时，填false 如果告警触发“notify_triggered”或告警恢复“notify_resolved”都设置为false（即都不进行告警通知），则notification_enable需设置为false。
    *
    * @return $this
    */
    public function setNotificationEnable($notificationEnable)
    {
        $this->container['notificationEnable'] = $notificationEnable;
        return $this;
    }

    /**
    * Gets notificationType
    *  通知类型。 - “direct”：直接告警 - “alarm_policy”：告警降噪
    *
    * @return string|null
    */
    public function getNotificationType()
    {
        return $this->container['notificationType'];
    }

    /**
    * Sets notificationType
    *
    * @param string|null $notificationType 通知类型。 - “direct”：直接告警 - “alarm_policy”：告警降噪
    *
    * @return $this
    */
    public function setNotificationType($notificationType)
    {
        $this->container['notificationType'] = $notificationType;
        return $this;
    }

    /**
    * Gets notifyResolved
    *  告警解决是否通知。 - true：通知 - false：不通知
    *
    * @return bool
    */
    public function getNotifyResolved()
    {
        return $this->container['notifyResolved'];
    }

    /**
    * Sets notifyResolved
    *
    * @param bool $notifyResolved 告警解决是否通知。 - true：通知 - false：不通知
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
    * @return bool
    */
    public function getNotifyTriggered()
    {
        return $this->container['notifyTriggered'];
    }

    /**
    * Sets notifyTriggered
    *
    * @param bool $notifyTriggered 告警触发是否通知。 - true：通知 - false：不通知
    *
    * @return $this
    */
    public function setNotifyTriggered($notifyTriggered)
    {
        $this->container['notifyTriggered'] = $notifyTriggered;
        return $this;
    }

    /**
    * Gets routeGroupEnable
    *  启用告警分组规则。 - 当通知类型为“alarm_policy”时：true - 当通知类型为“direct”时：false 如果告警触发“notify_triggered”或告警恢复“notify_resolved”都设置为false（即都不进行告警通知），则route_group_enable需设置为false。
    *
    * @return bool|null
    */
    public function getRouteGroupEnable()
    {
        return $this->container['routeGroupEnable'];
    }

    /**
    * Sets routeGroupEnable
    *
    * @param bool|null $routeGroupEnable 启用告警分组规则。 - 当通知类型为“alarm_policy”时：true - 当通知类型为“direct”时：false 如果告警触发“notify_triggered”或告警恢复“notify_resolved”都设置为false（即都不进行告警通知），则route_group_enable需设置为false。
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
    *  告警分组规则名称。 - 当route_group_enable 为true时，填告警分组规则名称 - 当route_group_enable 为false时，填“”
    *
    * @return string|null
    */
    public function getRouteGroupRule()
    {
        return $this->container['routeGroupRule'];
    }

    /**
    * Sets routeGroupRule
    *
    * @param string|null $routeGroupRule 告警分组规则名称。 - 当route_group_enable 为true时，填告警分组规则名称 - 当route_group_enable 为false时，填“”
    *
    * @return $this
    */
    public function setRouteGroupRule($routeGroupRule)
    {
        $this->container['routeGroupRule'] = $routeGroupRule;
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

