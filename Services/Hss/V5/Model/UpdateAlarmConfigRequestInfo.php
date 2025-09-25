<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateAlarmConfigRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateAlarmConfigRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alarmType  告警类型
    * displayName  显示名称
    * topicUrn  是否发送短信
    * dailyAlarm  是否开启每日告警
    * realtimeAlarm  是否开启实时告警
    * alarmLevel  告警等级
    * ignoredEventClassList  忽略事件列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alarmType' => 'string',
            'displayName' => 'string',
            'topicUrn' => 'string',
            'dailyAlarm' => 'bool',
            'realtimeAlarm' => 'bool',
            'alarmLevel' => 'string',
            'ignoredEventClassList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alarmType  告警类型
    * displayName  显示名称
    * topicUrn  是否发送短信
    * dailyAlarm  是否开启每日告警
    * realtimeAlarm  是否开启实时告警
    * alarmLevel  告警等级
    * ignoredEventClassList  忽略事件列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alarmType' => null,
        'displayName' => null,
        'topicUrn' => null,
        'dailyAlarm' => null,
        'realtimeAlarm' => null,
        'alarmLevel' => null,
        'ignoredEventClassList' => null
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
    * alarmType  告警类型
    * displayName  显示名称
    * topicUrn  是否发送短信
    * dailyAlarm  是否开启每日告警
    * realtimeAlarm  是否开启实时告警
    * alarmLevel  告警等级
    * ignoredEventClassList  忽略事件列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alarmType' => 'alarm_type',
            'displayName' => 'display_name',
            'topicUrn' => 'topic_urn',
            'dailyAlarm' => 'daily_alarm',
            'realtimeAlarm' => 'realtime_alarm',
            'alarmLevel' => 'alarm_level',
            'ignoredEventClassList' => 'ignored_event_class_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alarmType  告警类型
    * displayName  显示名称
    * topicUrn  是否发送短信
    * dailyAlarm  是否开启每日告警
    * realtimeAlarm  是否开启实时告警
    * alarmLevel  告警等级
    * ignoredEventClassList  忽略事件列表
    *
    * @var string[]
    */
    protected static $setters = [
            'alarmType' => 'setAlarmType',
            'displayName' => 'setDisplayName',
            'topicUrn' => 'setTopicUrn',
            'dailyAlarm' => 'setDailyAlarm',
            'realtimeAlarm' => 'setRealtimeAlarm',
            'alarmLevel' => 'setAlarmLevel',
            'ignoredEventClassList' => 'setIgnoredEventClassList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alarmType  告警类型
    * displayName  显示名称
    * topicUrn  是否发送短信
    * dailyAlarm  是否开启每日告警
    * realtimeAlarm  是否开启实时告警
    * alarmLevel  告警等级
    * ignoredEventClassList  忽略事件列表
    *
    * @var string[]
    */
    protected static $getters = [
            'alarmType' => 'getAlarmType',
            'displayName' => 'getDisplayName',
            'topicUrn' => 'getTopicUrn',
            'dailyAlarm' => 'getDailyAlarm',
            'realtimeAlarm' => 'getRealtimeAlarm',
            'alarmLevel' => 'getAlarmLevel',
            'ignoredEventClassList' => 'getIgnoredEventClassList'
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
    const ALARM_TYPE_SMS = 'sms';
    const ALARM_TYPE_RSS = 'rss';
    const ALARM_LEVEL_INFO = 'info';
    const ALARM_LEVEL_LOW = 'low';
    const ALARM_LEVEL_MEDIUM = 'medium';
    const ALARM_LEVEL_HIGH = 'high';
    const ALARM_LEVEL_CRITICAL = 'critical';
    const IGNORED_EVENT_CLASS_LIST_DANGEROUS_PORTS = 'dangerous_ports';
    const IGNORED_EVENT_CLASS_LIST_CRITICAL_VULNERABILITIES = 'critical_vulnerabilities';
    const IGNORED_EVENT_CLASS_LIST_WEAK_PASSWORDS = 'weak_passwords';
    const IGNORED_EVENT_CLASS_LIST_UNSAFE_CONFIGURATIONS = 'unsafe_configurations';
    const IGNORED_EVENT_CLASS_LIST_RASP = 'RASP';
    const IGNORED_EVENT_CLASS_LIST_SECRASP = 'SECRASP';
    const IGNORED_EVENT_CLASS_LIST__8002 = '8002';
    const IGNORED_EVENT_CLASS_LIST__8003 = '8003';
    const IGNORED_EVENT_CLASS_LIST__1001 = '1001';
    const IGNORED_EVENT_CLASS_LIST__1010 = '1010';
    const IGNORED_EVENT_CLASS_LIST__1011 = '1011';
    const IGNORED_EVENT_CLASS_LIST__1015 = '1015';
    const IGNORED_EVENT_CLASS_LIST__1017 = '1017';
    const IGNORED_EVENT_CLASS_LIST__2047 = '2047';
    const IGNORED_EVENT_CLASS_LIST__2048 = '2048';
    const IGNORED_EVENT_CLASS_LIST__2049 = '2049';
    const IGNORED_EVENT_CLASS_LIST__3002 = '3002';
    const IGNORED_EVENT_CLASS_LIST__3003 = '3003';
    const IGNORED_EVENT_CLASS_LIST__3004 = '3004';
    const IGNORED_EVENT_CLASS_LIST__3005 = '3005';
    const IGNORED_EVENT_CLASS_LIST__3007 = '3007';
    const IGNORED_EVENT_CLASS_LIST__3015 = '3015';
    const IGNORED_EVENT_CLASS_LIST__3018 = '3018';
    const IGNORED_EVENT_CLASS_LIST__3027 = '3027';
    const IGNORED_EVENT_CLASS_LIST__4002 = '4002';
    const IGNORED_EVENT_CLASS_LIST__4007 = '4007';
    const IGNORED_EVENT_CLASS_LIST__4004 = '4004';
    const IGNORED_EVENT_CLASS_LIST__4006 = '4006';
    const IGNORED_EVENT_CLASS_LIST__2042 = '2042';
    const IGNORED_EVENT_CLASS_LIST__2044 = '2044';
    const IGNORED_EVENT_CLASS_LIST__3008 = '3008';
    const IGNORED_EVENT_CLASS_LIST__3009 = '3009';
    const IGNORED_EVENT_CLASS_LIST__3016 = '3016';
    const IGNORED_EVENT_CLASS_LIST__3021 = '3021';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAlarmTypeAllowableValues()
    {
        return [
            self::ALARM_TYPE_SMS,
            self::ALARM_TYPE_RSS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAlarmLevelAllowableValues()
    {
        return [
            self::ALARM_LEVEL_INFO,
            self::ALARM_LEVEL_LOW,
            self::ALARM_LEVEL_MEDIUM,
            self::ALARM_LEVEL_HIGH,
            self::ALARM_LEVEL_CRITICAL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIgnoredEventClassListAllowableValues()
    {
        return [
            self::IGNORED_EVENT_CLASS_LIST_DANGEROUS_PORTS,
            self::IGNORED_EVENT_CLASS_LIST_CRITICAL_VULNERABILITIES,
            self::IGNORED_EVENT_CLASS_LIST_WEAK_PASSWORDS,
            self::IGNORED_EVENT_CLASS_LIST_UNSAFE_CONFIGURATIONS,
            self::IGNORED_EVENT_CLASS_LIST_RASP,
            self::IGNORED_EVENT_CLASS_LIST_SECRASP,
            self::IGNORED_EVENT_CLASS_LIST__8002,
            self::IGNORED_EVENT_CLASS_LIST__8003,
            self::IGNORED_EVENT_CLASS_LIST__1001,
            self::IGNORED_EVENT_CLASS_LIST__1010,
            self::IGNORED_EVENT_CLASS_LIST__1011,
            self::IGNORED_EVENT_CLASS_LIST__1015,
            self::IGNORED_EVENT_CLASS_LIST__1017,
            self::IGNORED_EVENT_CLASS_LIST__2047,
            self::IGNORED_EVENT_CLASS_LIST__2048,
            self::IGNORED_EVENT_CLASS_LIST__2049,
            self::IGNORED_EVENT_CLASS_LIST__3002,
            self::IGNORED_EVENT_CLASS_LIST__3003,
            self::IGNORED_EVENT_CLASS_LIST__3004,
            self::IGNORED_EVENT_CLASS_LIST__3005,
            self::IGNORED_EVENT_CLASS_LIST__3007,
            self::IGNORED_EVENT_CLASS_LIST__3015,
            self::IGNORED_EVENT_CLASS_LIST__3018,
            self::IGNORED_EVENT_CLASS_LIST__3027,
            self::IGNORED_EVENT_CLASS_LIST__4002,
            self::IGNORED_EVENT_CLASS_LIST__4007,
            self::IGNORED_EVENT_CLASS_LIST__4004,
            self::IGNORED_EVENT_CLASS_LIST__4006,
            self::IGNORED_EVENT_CLASS_LIST__2042,
            self::IGNORED_EVENT_CLASS_LIST__2044,
            self::IGNORED_EVENT_CLASS_LIST__3008,
            self::IGNORED_EVENT_CLASS_LIST__3009,
            self::IGNORED_EVENT_CLASS_LIST__3016,
            self::IGNORED_EVENT_CLASS_LIST__3021,
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
        $this->container['alarmType'] = isset($data['alarmType']) ? $data['alarmType'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
        $this->container['dailyAlarm'] = isset($data['dailyAlarm']) ? $data['dailyAlarm'] : null;
        $this->container['realtimeAlarm'] = isset($data['realtimeAlarm']) ? $data['realtimeAlarm'] : null;
        $this->container['alarmLevel'] = isset($data['alarmLevel']) ? $data['alarmLevel'] : null;
        $this->container['ignoredEventClassList'] = isset($data['ignoredEventClassList']) ? $data['ignoredEventClassList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getAlarmTypeAllowableValues();
                if (!is_null($this->container['alarmType']) && !in_array($this->container['alarmType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'alarmType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getAlarmLevelAllowableValues();
                if (!is_null($this->container['alarmLevel']) && !in_array($this->container['alarmLevel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'alarmLevel', must be one of '%s'",
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
    * Gets alarmType
    *  告警类型
    *
    * @return string|null
    */
    public function getAlarmType()
    {
        return $this->container['alarmType'];
    }

    /**
    * Sets alarmType
    *
    * @param string|null $alarmType 告警类型
    *
    * @return $this
    */
    public function setAlarmType($alarmType)
    {
        $this->container['alarmType'] = $alarmType;
        return $this;
    }

    /**
    * Gets displayName
    *  显示名称
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName 显示名称
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets topicUrn
    *  是否发送短信
    *
    * @return string|null
    */
    public function getTopicUrn()
    {
        return $this->container['topicUrn'];
    }

    /**
    * Sets topicUrn
    *
    * @param string|null $topicUrn 是否发送短信
    *
    * @return $this
    */
    public function setTopicUrn($topicUrn)
    {
        $this->container['topicUrn'] = $topicUrn;
        return $this;
    }

    /**
    * Gets dailyAlarm
    *  是否开启每日告警
    *
    * @return bool|null
    */
    public function getDailyAlarm()
    {
        return $this->container['dailyAlarm'];
    }

    /**
    * Sets dailyAlarm
    *
    * @param bool|null $dailyAlarm 是否开启每日告警
    *
    * @return $this
    */
    public function setDailyAlarm($dailyAlarm)
    {
        $this->container['dailyAlarm'] = $dailyAlarm;
        return $this;
    }

    /**
    * Gets realtimeAlarm
    *  是否开启实时告警
    *
    * @return bool|null
    */
    public function getRealtimeAlarm()
    {
        return $this->container['realtimeAlarm'];
    }

    /**
    * Sets realtimeAlarm
    *
    * @param bool|null $realtimeAlarm 是否开启实时告警
    *
    * @return $this
    */
    public function setRealtimeAlarm($realtimeAlarm)
    {
        $this->container['realtimeAlarm'] = $realtimeAlarm;
        return $this;
    }

    /**
    * Gets alarmLevel
    *  告警等级
    *
    * @return string|null
    */
    public function getAlarmLevel()
    {
        return $this->container['alarmLevel'];
    }

    /**
    * Sets alarmLevel
    *
    * @param string|null $alarmLevel 告警等级
    *
    * @return $this
    */
    public function setAlarmLevel($alarmLevel)
    {
        $this->container['alarmLevel'] = $alarmLevel;
        return $this;
    }

    /**
    * Gets ignoredEventClassList
    *  忽略事件列表
    *
    * @return string[]|null
    */
    public function getIgnoredEventClassList()
    {
        return $this->container['ignoredEventClassList'];
    }

    /**
    * Sets ignoredEventClassList
    *
    * @param string[]|null $ignoredEventClassList 忽略事件列表
    *
    * @return $this
    */
    public function setIgnoredEventClassList($ignoredEventClassList)
    {
        $this->container['ignoredEventClassList'] = $ignoredEventClassList;
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

