<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EnableOneClickAlarmRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EnableOneClickAlarmRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * oneClickAlarmId  一键告警ID
    * dimensionNames  dimensionNames
    * notificationEnabled  是否开启告警通知
    * alarmNotifications  告警触发的动作
    * okNotifications  告警恢复触发的动作
    * notificationBeginTime  告警通知开启时间
    * notificationEndTime  告警通知关闭时间
    * notificationManner  NOTIFICATION_GROUP(通知组)/TOPIC_SUBSCRIPTION(主题订阅)/NOTIFICATION_POLICY(通知策略)
    * notificationPolicyIds  关联的通知策略ID列表
    * isReset  是否以默认一键告警规则重置创建
    * oneClickUpdateAlarms  打开一键告警需要同时修改告警策略及通知(当前仅支持通知策略修改)时传递的参数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'oneClickAlarmId' => 'string',
            'dimensionNames' => '\HuaweiCloud\SDK\Ces\V2\Model\DimensionNames',
            'notificationEnabled' => 'bool',
            'alarmNotifications' => '\HuaweiCloud\SDK\Ces\V2\Model\Notification[]',
            'okNotifications' => '\HuaweiCloud\SDK\Ces\V2\Model\Notification[]',
            'notificationBeginTime' => 'string',
            'notificationEndTime' => 'string',
            'notificationManner' => 'string',
            'notificationPolicyIds' => 'string[]',
            'isReset' => 'bool',
            'oneClickUpdateAlarms' => '\HuaweiCloud\SDK\Ces\V2\Model\EnableOneClickAlarmRequestBodyOneClickUpdateAlarms[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * oneClickAlarmId  一键告警ID
    * dimensionNames  dimensionNames
    * notificationEnabled  是否开启告警通知
    * alarmNotifications  告警触发的动作
    * okNotifications  告警恢复触发的动作
    * notificationBeginTime  告警通知开启时间
    * notificationEndTime  告警通知关闭时间
    * notificationManner  NOTIFICATION_GROUP(通知组)/TOPIC_SUBSCRIPTION(主题订阅)/NOTIFICATION_POLICY(通知策略)
    * notificationPolicyIds  关联的通知策略ID列表
    * isReset  是否以默认一键告警规则重置创建
    * oneClickUpdateAlarms  打开一键告警需要同时修改告警策略及通知(当前仅支持通知策略修改)时传递的参数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'oneClickAlarmId' => null,
        'dimensionNames' => null,
        'notificationEnabled' => null,
        'alarmNotifications' => null,
        'okNotifications' => null,
        'notificationBeginTime' => null,
        'notificationEndTime' => null,
        'notificationManner' => null,
        'notificationPolicyIds' => null,
        'isReset' => null,
        'oneClickUpdateAlarms' => null
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
    * oneClickAlarmId  一键告警ID
    * dimensionNames  dimensionNames
    * notificationEnabled  是否开启告警通知
    * alarmNotifications  告警触发的动作
    * okNotifications  告警恢复触发的动作
    * notificationBeginTime  告警通知开启时间
    * notificationEndTime  告警通知关闭时间
    * notificationManner  NOTIFICATION_GROUP(通知组)/TOPIC_SUBSCRIPTION(主题订阅)/NOTIFICATION_POLICY(通知策略)
    * notificationPolicyIds  关联的通知策略ID列表
    * isReset  是否以默认一键告警规则重置创建
    * oneClickUpdateAlarms  打开一键告警需要同时修改告警策略及通知(当前仅支持通知策略修改)时传递的参数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'oneClickAlarmId' => 'one_click_alarm_id',
            'dimensionNames' => 'dimension_names',
            'notificationEnabled' => 'notification_enabled',
            'alarmNotifications' => 'alarm_notifications',
            'okNotifications' => 'ok_notifications',
            'notificationBeginTime' => 'notification_begin_time',
            'notificationEndTime' => 'notification_end_time',
            'notificationManner' => 'notification_manner',
            'notificationPolicyIds' => 'notification_policy_ids',
            'isReset' => 'is_reset',
            'oneClickUpdateAlarms' => 'one_click_update_alarms'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * oneClickAlarmId  一键告警ID
    * dimensionNames  dimensionNames
    * notificationEnabled  是否开启告警通知
    * alarmNotifications  告警触发的动作
    * okNotifications  告警恢复触发的动作
    * notificationBeginTime  告警通知开启时间
    * notificationEndTime  告警通知关闭时间
    * notificationManner  NOTIFICATION_GROUP(通知组)/TOPIC_SUBSCRIPTION(主题订阅)/NOTIFICATION_POLICY(通知策略)
    * notificationPolicyIds  关联的通知策略ID列表
    * isReset  是否以默认一键告警规则重置创建
    * oneClickUpdateAlarms  打开一键告警需要同时修改告警策略及通知(当前仅支持通知策略修改)时传递的参数
    *
    * @var string[]
    */
    protected static $setters = [
            'oneClickAlarmId' => 'setOneClickAlarmId',
            'dimensionNames' => 'setDimensionNames',
            'notificationEnabled' => 'setNotificationEnabled',
            'alarmNotifications' => 'setAlarmNotifications',
            'okNotifications' => 'setOkNotifications',
            'notificationBeginTime' => 'setNotificationBeginTime',
            'notificationEndTime' => 'setNotificationEndTime',
            'notificationManner' => 'setNotificationManner',
            'notificationPolicyIds' => 'setNotificationPolicyIds',
            'isReset' => 'setIsReset',
            'oneClickUpdateAlarms' => 'setOneClickUpdateAlarms'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * oneClickAlarmId  一键告警ID
    * dimensionNames  dimensionNames
    * notificationEnabled  是否开启告警通知
    * alarmNotifications  告警触发的动作
    * okNotifications  告警恢复触发的动作
    * notificationBeginTime  告警通知开启时间
    * notificationEndTime  告警通知关闭时间
    * notificationManner  NOTIFICATION_GROUP(通知组)/TOPIC_SUBSCRIPTION(主题订阅)/NOTIFICATION_POLICY(通知策略)
    * notificationPolicyIds  关联的通知策略ID列表
    * isReset  是否以默认一键告警规则重置创建
    * oneClickUpdateAlarms  打开一键告警需要同时修改告警策略及通知(当前仅支持通知策略修改)时传递的参数
    *
    * @var string[]
    */
    protected static $getters = [
            'oneClickAlarmId' => 'getOneClickAlarmId',
            'dimensionNames' => 'getDimensionNames',
            'notificationEnabled' => 'getNotificationEnabled',
            'alarmNotifications' => 'getAlarmNotifications',
            'okNotifications' => 'getOkNotifications',
            'notificationBeginTime' => 'getNotificationBeginTime',
            'notificationEndTime' => 'getNotificationEndTime',
            'notificationManner' => 'getNotificationManner',
            'notificationPolicyIds' => 'getNotificationPolicyIds',
            'isReset' => 'getIsReset',
            'oneClickUpdateAlarms' => 'getOneClickUpdateAlarms'
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
    const NOTIFICATION_MANNER_NOTIFICATION_GROUP = 'NOTIFICATION_GROUP';
    const NOTIFICATION_MANNER_TOPIC_SUBSCRIPTION = 'TOPIC_SUBSCRIPTION';
    const NOTIFICATION_MANNER_NOTIFICATION_POLICY = 'NOTIFICATION_POLICY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNotificationMannerAllowableValues()
    {
        return [
            self::NOTIFICATION_MANNER_NOTIFICATION_GROUP,
            self::NOTIFICATION_MANNER_TOPIC_SUBSCRIPTION,
            self::NOTIFICATION_MANNER_NOTIFICATION_POLICY,
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
        $this->container['oneClickAlarmId'] = isset($data['oneClickAlarmId']) ? $data['oneClickAlarmId'] : null;
        $this->container['dimensionNames'] = isset($data['dimensionNames']) ? $data['dimensionNames'] : null;
        $this->container['notificationEnabled'] = isset($data['notificationEnabled']) ? $data['notificationEnabled'] : null;
        $this->container['alarmNotifications'] = isset($data['alarmNotifications']) ? $data['alarmNotifications'] : null;
        $this->container['okNotifications'] = isset($data['okNotifications']) ? $data['okNotifications'] : null;
        $this->container['notificationBeginTime'] = isset($data['notificationBeginTime']) ? $data['notificationBeginTime'] : null;
        $this->container['notificationEndTime'] = isset($data['notificationEndTime']) ? $data['notificationEndTime'] : null;
        $this->container['notificationManner'] = isset($data['notificationManner']) ? $data['notificationManner'] : null;
        $this->container['notificationPolicyIds'] = isset($data['notificationPolicyIds']) ? $data['notificationPolicyIds'] : null;
        $this->container['isReset'] = isset($data['isReset']) ? $data['isReset'] : null;
        $this->container['oneClickUpdateAlarms'] = isset($data['oneClickUpdateAlarms']) ? $data['oneClickUpdateAlarms'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['oneClickAlarmId'] === null) {
            $invalidProperties[] = "'oneClickAlarmId' can't be null";
        }
            if ((mb_strlen($this->container['oneClickAlarmId']) > 64)) {
                $invalidProperties[] = "invalid value for 'oneClickAlarmId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['oneClickAlarmId']) < 1)) {
                $invalidProperties[] = "invalid value for 'oneClickAlarmId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^([a-z]|[A-Z]|[0-9]){1,64}$/", $this->container['oneClickAlarmId'])) {
                $invalidProperties[] = "invalid value for 'oneClickAlarmId', must be conform to the pattern /^([a-z]|[A-Z]|[0-9]){1,64}$/.";
            }
        if ($this->container['dimensionNames'] === null) {
            $invalidProperties[] = "'dimensionNames' can't be null";
        }
        if ($this->container['notificationEnabled'] === null) {
            $invalidProperties[] = "'notificationEnabled' can't be null";
        }
            if (!is_null($this->container['notificationBeginTime']) && (mb_strlen($this->container['notificationBeginTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'notificationBeginTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['notificationBeginTime']) && (mb_strlen($this->container['notificationBeginTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'notificationBeginTime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['notificationBeginTime']) && !preg_match("/^([01][0-9]|2[0-3]):([0-5][0-9])$/", $this->container['notificationBeginTime'])) {
                $invalidProperties[] = "invalid value for 'notificationBeginTime', must be conform to the pattern /^([01][0-9]|2[0-3]):([0-5][0-9])$/.";
            }
            if (!is_null($this->container['notificationEndTime']) && (mb_strlen($this->container['notificationEndTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'notificationEndTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['notificationEndTime']) && (mb_strlen($this->container['notificationEndTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'notificationEndTime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['notificationEndTime']) && !preg_match("/^([01][0-9]|2[0-3]):([0-5][0-9])$/", $this->container['notificationEndTime'])) {
                $invalidProperties[] = "invalid value for 'notificationEndTime', must be conform to the pattern /^([01][0-9]|2[0-3]):([0-5][0-9])$/.";
            }
            $allowedValues = $this->getNotificationMannerAllowableValues();
                if (!is_null($this->container['notificationManner']) && !in_array($this->container['notificationManner'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'notificationManner', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['notificationManner']) && (mb_strlen($this->container['notificationManner']) > 64)) {
                $invalidProperties[] = "invalid value for 'notificationManner', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['notificationManner']) && (mb_strlen($this->container['notificationManner']) < 0)) {
                $invalidProperties[] = "invalid value for 'notificationManner', the character length must be bigger than or equal to 0.";
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
    * Gets oneClickAlarmId
    *  一键告警ID
    *
    * @return string
    */
    public function getOneClickAlarmId()
    {
        return $this->container['oneClickAlarmId'];
    }

    /**
    * Sets oneClickAlarmId
    *
    * @param string $oneClickAlarmId 一键告警ID
    *
    * @return $this
    */
    public function setOneClickAlarmId($oneClickAlarmId)
    {
        $this->container['oneClickAlarmId'] = $oneClickAlarmId;
        return $this;
    }

    /**
    * Gets dimensionNames
    *  dimensionNames
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\DimensionNames
    */
    public function getDimensionNames()
    {
        return $this->container['dimensionNames'];
    }

    /**
    * Sets dimensionNames
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\DimensionNames $dimensionNames dimensionNames
    *
    * @return $this
    */
    public function setDimensionNames($dimensionNames)
    {
        $this->container['dimensionNames'] = $dimensionNames;
        return $this;
    }

    /**
    * Gets notificationEnabled
    *  是否开启告警通知
    *
    * @return bool
    */
    public function getNotificationEnabled()
    {
        return $this->container['notificationEnabled'];
    }

    /**
    * Sets notificationEnabled
    *
    * @param bool $notificationEnabled 是否开启告警通知
    *
    * @return $this
    */
    public function setNotificationEnabled($notificationEnabled)
    {
        $this->container['notificationEnabled'] = $notificationEnabled;
        return $this;
    }

    /**
    * Gets alarmNotifications
    *  告警触发的动作
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\Notification[]|null
    */
    public function getAlarmNotifications()
    {
        return $this->container['alarmNotifications'];
    }

    /**
    * Sets alarmNotifications
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\Notification[]|null $alarmNotifications 告警触发的动作
    *
    * @return $this
    */
    public function setAlarmNotifications($alarmNotifications)
    {
        $this->container['alarmNotifications'] = $alarmNotifications;
        return $this;
    }

    /**
    * Gets okNotifications
    *  告警恢复触发的动作
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\Notification[]|null
    */
    public function getOkNotifications()
    {
        return $this->container['okNotifications'];
    }

    /**
    * Sets okNotifications
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\Notification[]|null $okNotifications 告警恢复触发的动作
    *
    * @return $this
    */
    public function setOkNotifications($okNotifications)
    {
        $this->container['okNotifications'] = $okNotifications;
        return $this;
    }

    /**
    * Gets notificationBeginTime
    *  告警通知开启时间
    *
    * @return string|null
    */
    public function getNotificationBeginTime()
    {
        return $this->container['notificationBeginTime'];
    }

    /**
    * Sets notificationBeginTime
    *
    * @param string|null $notificationBeginTime 告警通知开启时间
    *
    * @return $this
    */
    public function setNotificationBeginTime($notificationBeginTime)
    {
        $this->container['notificationBeginTime'] = $notificationBeginTime;
        return $this;
    }

    /**
    * Gets notificationEndTime
    *  告警通知关闭时间
    *
    * @return string|null
    */
    public function getNotificationEndTime()
    {
        return $this->container['notificationEndTime'];
    }

    /**
    * Sets notificationEndTime
    *
    * @param string|null $notificationEndTime 告警通知关闭时间
    *
    * @return $this
    */
    public function setNotificationEndTime($notificationEndTime)
    {
        $this->container['notificationEndTime'] = $notificationEndTime;
        return $this;
    }

    /**
    * Gets notificationManner
    *  NOTIFICATION_GROUP(通知组)/TOPIC_SUBSCRIPTION(主题订阅)/NOTIFICATION_POLICY(通知策略)
    *
    * @return string|null
    */
    public function getNotificationManner()
    {
        return $this->container['notificationManner'];
    }

    /**
    * Sets notificationManner
    *
    * @param string|null $notificationManner NOTIFICATION_GROUP(通知组)/TOPIC_SUBSCRIPTION(主题订阅)/NOTIFICATION_POLICY(通知策略)
    *
    * @return $this
    */
    public function setNotificationManner($notificationManner)
    {
        $this->container['notificationManner'] = $notificationManner;
        return $this;
    }

    /**
    * Gets notificationPolicyIds
    *  关联的通知策略ID列表
    *
    * @return string[]|null
    */
    public function getNotificationPolicyIds()
    {
        return $this->container['notificationPolicyIds'];
    }

    /**
    * Sets notificationPolicyIds
    *
    * @param string[]|null $notificationPolicyIds 关联的通知策略ID列表
    *
    * @return $this
    */
    public function setNotificationPolicyIds($notificationPolicyIds)
    {
        $this->container['notificationPolicyIds'] = $notificationPolicyIds;
        return $this;
    }

    /**
    * Gets isReset
    *  是否以默认一键告警规则重置创建
    *
    * @return bool|null
    */
    public function getIsReset()
    {
        return $this->container['isReset'];
    }

    /**
    * Sets isReset
    *
    * @param bool|null $isReset 是否以默认一键告警规则重置创建
    *
    * @return $this
    */
    public function setIsReset($isReset)
    {
        $this->container['isReset'] = $isReset;
        return $this;
    }

    /**
    * Gets oneClickUpdateAlarms
    *  打开一键告警需要同时修改告警策略及通知(当前仅支持通知策略修改)时传递的参数
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\EnableOneClickAlarmRequestBodyOneClickUpdateAlarms[]|null
    */
    public function getOneClickUpdateAlarms()
    {
        return $this->container['oneClickUpdateAlarms'];
    }

    /**
    * Sets oneClickUpdateAlarms
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\EnableOneClickAlarmRequestBodyOneClickUpdateAlarms[]|null $oneClickUpdateAlarms 打开一键告警需要同时修改告警策略及通知(当前仅支持通知策略修改)时传递的参数
    *
    * @return $this
    */
    public function setOneClickUpdateAlarms($oneClickUpdateAlarms)
    {
        $this->container['oneClickUpdateAlarms'] = $oneClickUpdateAlarms;
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

