<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowWebinarResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowWebinarResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * conferenceId  网络研讨会ID。
    * corpId  企业ID。
    * subject  网络研讨会主题。
    * description  网络研讨会描述。
    * startTime  网络研讨会开始时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    * duration  网络研讨会持续时长，单位分钟，取值范围[15,1440]。
    * timeZoneId  会议通知中会议时间的时区信息。时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。 > * 举例：“timeZoneID”:\"26\"，则通过华为云会议发送的会议通知中的时间将会标记为如“2021/11/11 星期四 00:00 - 02:00 (GMT) 格林威治标准时间:都柏林, 爱丁堡, 里斯本, 伦敦”。
    * state  state
    * scheduserId  网络研讨会预订者的用户UUID。
    * deptName  预订者部门命名。
    * scheduserName  预订者名称。
    * vmrPkgName  网络研讨会VMR名称。
    * callRestriction  入会范围开关。
    * scope  主持人、嘉宾入会范围。 * 0: 所有用户 * 2: 企业内用户 * 3: 被邀请用户
    * audienceScope  观众入会范围。 * 0: 所有用户 * 2: 企业内用户
    * chairJoinUri  主持人入会地址。
    * chairPasswd  主持人入会密码。
    * guestJoinUri  嘉宾入会地址。
    * guestPasswd  嘉宾入会密码。
    * audienceJoinUri  观众入会地址。
    * audiencePasswd  观众入会密码。
    * enableRecording  enableRecording
    * notifySetting  notifySetting
    * attendees  与会嘉宾名称列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'conferenceId' => 'string',
            'corpId' => 'string',
            'subject' => 'string',
            'description' => 'string',
            'startTime' => 'string',
            'duration' => 'int',
            'timeZoneId' => 'int',
            'state' => '\HuaweiCloud\SDK\Meeting\V1\Model\MeetingStatus',
            'scheduserId' => 'string',
            'deptName' => 'string',
            'scheduserName' => 'string',
            'vmrPkgName' => 'string',
            'callRestriction' => 'bool',
            'scope' => 'int',
            'audienceScope' => 'int',
            'chairJoinUri' => 'string',
            'chairPasswd' => 'string',
            'guestJoinUri' => 'string',
            'guestPasswd' => 'string',
            'audienceJoinUri' => 'string',
            'audiencePasswd' => 'string',
            'enableRecording' => '\HuaweiCloud\SDK\Meeting\V1\Model\YesNoEnum',
            'notifySetting' => '\HuaweiCloud\SDK\Meeting\V1\Model\OpenNotifySetting',
            'attendees' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * conferenceId  网络研讨会ID。
    * corpId  企业ID。
    * subject  网络研讨会主题。
    * description  网络研讨会描述。
    * startTime  网络研讨会开始时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    * duration  网络研讨会持续时长，单位分钟，取值范围[15,1440]。
    * timeZoneId  会议通知中会议时间的时区信息。时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。 > * 举例：“timeZoneID”:\"26\"，则通过华为云会议发送的会议通知中的时间将会标记为如“2021/11/11 星期四 00:00 - 02:00 (GMT) 格林威治标准时间:都柏林, 爱丁堡, 里斯本, 伦敦”。
    * state  state
    * scheduserId  网络研讨会预订者的用户UUID。
    * deptName  预订者部门命名。
    * scheduserName  预订者名称。
    * vmrPkgName  网络研讨会VMR名称。
    * callRestriction  入会范围开关。
    * scope  主持人、嘉宾入会范围。 * 0: 所有用户 * 2: 企业内用户 * 3: 被邀请用户
    * audienceScope  观众入会范围。 * 0: 所有用户 * 2: 企业内用户
    * chairJoinUri  主持人入会地址。
    * chairPasswd  主持人入会密码。
    * guestJoinUri  嘉宾入会地址。
    * guestPasswd  嘉宾入会密码。
    * audienceJoinUri  观众入会地址。
    * audiencePasswd  观众入会密码。
    * enableRecording  enableRecording
    * notifySetting  notifySetting
    * attendees  与会嘉宾名称列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'conferenceId' => null,
        'corpId' => null,
        'subject' => null,
        'description' => null,
        'startTime' => null,
        'duration' => 'int32',
        'timeZoneId' => 'int32',
        'state' => null,
        'scheduserId' => null,
        'deptName' => null,
        'scheduserName' => null,
        'vmrPkgName' => null,
        'callRestriction' => null,
        'scope' => null,
        'audienceScope' => null,
        'chairJoinUri' => null,
        'chairPasswd' => null,
        'guestJoinUri' => null,
        'guestPasswd' => null,
        'audienceJoinUri' => null,
        'audiencePasswd' => null,
        'enableRecording' => null,
        'notifySetting' => null,
        'attendees' => null
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
    * conferenceId  网络研讨会ID。
    * corpId  企业ID。
    * subject  网络研讨会主题。
    * description  网络研讨会描述。
    * startTime  网络研讨会开始时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    * duration  网络研讨会持续时长，单位分钟，取值范围[15,1440]。
    * timeZoneId  会议通知中会议时间的时区信息。时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。 > * 举例：“timeZoneID”:\"26\"，则通过华为云会议发送的会议通知中的时间将会标记为如“2021/11/11 星期四 00:00 - 02:00 (GMT) 格林威治标准时间:都柏林, 爱丁堡, 里斯本, 伦敦”。
    * state  state
    * scheduserId  网络研讨会预订者的用户UUID。
    * deptName  预订者部门命名。
    * scheduserName  预订者名称。
    * vmrPkgName  网络研讨会VMR名称。
    * callRestriction  入会范围开关。
    * scope  主持人、嘉宾入会范围。 * 0: 所有用户 * 2: 企业内用户 * 3: 被邀请用户
    * audienceScope  观众入会范围。 * 0: 所有用户 * 2: 企业内用户
    * chairJoinUri  主持人入会地址。
    * chairPasswd  主持人入会密码。
    * guestJoinUri  嘉宾入会地址。
    * guestPasswd  嘉宾入会密码。
    * audienceJoinUri  观众入会地址。
    * audiencePasswd  观众入会密码。
    * enableRecording  enableRecording
    * notifySetting  notifySetting
    * attendees  与会嘉宾名称列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'conferenceId' => 'conferenceId',
            'corpId' => 'corpId',
            'subject' => 'subject',
            'description' => 'description',
            'startTime' => 'startTime',
            'duration' => 'duration',
            'timeZoneId' => 'timeZoneId',
            'state' => 'state',
            'scheduserId' => 'scheduserId',
            'deptName' => 'deptName',
            'scheduserName' => 'scheduserName',
            'vmrPkgName' => 'vmrPkgName',
            'callRestriction' => 'callRestriction',
            'scope' => 'scope',
            'audienceScope' => 'audienceScope',
            'chairJoinUri' => 'chairJoinUri',
            'chairPasswd' => 'chairPasswd',
            'guestJoinUri' => 'guestJoinUri',
            'guestPasswd' => 'guestPasswd',
            'audienceJoinUri' => 'audienceJoinUri',
            'audiencePasswd' => 'audiencePasswd',
            'enableRecording' => 'enableRecording',
            'notifySetting' => 'notifySetting',
            'attendees' => 'attendees'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * conferenceId  网络研讨会ID。
    * corpId  企业ID。
    * subject  网络研讨会主题。
    * description  网络研讨会描述。
    * startTime  网络研讨会开始时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    * duration  网络研讨会持续时长，单位分钟，取值范围[15,1440]。
    * timeZoneId  会议通知中会议时间的时区信息。时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。 > * 举例：“timeZoneID”:\"26\"，则通过华为云会议发送的会议通知中的时间将会标记为如“2021/11/11 星期四 00:00 - 02:00 (GMT) 格林威治标准时间:都柏林, 爱丁堡, 里斯本, 伦敦”。
    * state  state
    * scheduserId  网络研讨会预订者的用户UUID。
    * deptName  预订者部门命名。
    * scheduserName  预订者名称。
    * vmrPkgName  网络研讨会VMR名称。
    * callRestriction  入会范围开关。
    * scope  主持人、嘉宾入会范围。 * 0: 所有用户 * 2: 企业内用户 * 3: 被邀请用户
    * audienceScope  观众入会范围。 * 0: 所有用户 * 2: 企业内用户
    * chairJoinUri  主持人入会地址。
    * chairPasswd  主持人入会密码。
    * guestJoinUri  嘉宾入会地址。
    * guestPasswd  嘉宾入会密码。
    * audienceJoinUri  观众入会地址。
    * audiencePasswd  观众入会密码。
    * enableRecording  enableRecording
    * notifySetting  notifySetting
    * attendees  与会嘉宾名称列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'conferenceId' => 'setConferenceId',
            'corpId' => 'setCorpId',
            'subject' => 'setSubject',
            'description' => 'setDescription',
            'startTime' => 'setStartTime',
            'duration' => 'setDuration',
            'timeZoneId' => 'setTimeZoneId',
            'state' => 'setState',
            'scheduserId' => 'setScheduserId',
            'deptName' => 'setDeptName',
            'scheduserName' => 'setScheduserName',
            'vmrPkgName' => 'setVmrPkgName',
            'callRestriction' => 'setCallRestriction',
            'scope' => 'setScope',
            'audienceScope' => 'setAudienceScope',
            'chairJoinUri' => 'setChairJoinUri',
            'chairPasswd' => 'setChairPasswd',
            'guestJoinUri' => 'setGuestJoinUri',
            'guestPasswd' => 'setGuestPasswd',
            'audienceJoinUri' => 'setAudienceJoinUri',
            'audiencePasswd' => 'setAudiencePasswd',
            'enableRecording' => 'setEnableRecording',
            'notifySetting' => 'setNotifySetting',
            'attendees' => 'setAttendees'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * conferenceId  网络研讨会ID。
    * corpId  企业ID。
    * subject  网络研讨会主题。
    * description  网络研讨会描述。
    * startTime  网络研讨会开始时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    * duration  网络研讨会持续时长，单位分钟，取值范围[15,1440]。
    * timeZoneId  会议通知中会议时间的时区信息。时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。 > * 举例：“timeZoneID”:\"26\"，则通过华为云会议发送的会议通知中的时间将会标记为如“2021/11/11 星期四 00:00 - 02:00 (GMT) 格林威治标准时间:都柏林, 爱丁堡, 里斯本, 伦敦”。
    * state  state
    * scheduserId  网络研讨会预订者的用户UUID。
    * deptName  预订者部门命名。
    * scheduserName  预订者名称。
    * vmrPkgName  网络研讨会VMR名称。
    * callRestriction  入会范围开关。
    * scope  主持人、嘉宾入会范围。 * 0: 所有用户 * 2: 企业内用户 * 3: 被邀请用户
    * audienceScope  观众入会范围。 * 0: 所有用户 * 2: 企业内用户
    * chairJoinUri  主持人入会地址。
    * chairPasswd  主持人入会密码。
    * guestJoinUri  嘉宾入会地址。
    * guestPasswd  嘉宾入会密码。
    * audienceJoinUri  观众入会地址。
    * audiencePasswd  观众入会密码。
    * enableRecording  enableRecording
    * notifySetting  notifySetting
    * attendees  与会嘉宾名称列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'conferenceId' => 'getConferenceId',
            'corpId' => 'getCorpId',
            'subject' => 'getSubject',
            'description' => 'getDescription',
            'startTime' => 'getStartTime',
            'duration' => 'getDuration',
            'timeZoneId' => 'getTimeZoneId',
            'state' => 'getState',
            'scheduserId' => 'getScheduserId',
            'deptName' => 'getDeptName',
            'scheduserName' => 'getScheduserName',
            'vmrPkgName' => 'getVmrPkgName',
            'callRestriction' => 'getCallRestriction',
            'scope' => 'getScope',
            'audienceScope' => 'getAudienceScope',
            'chairJoinUri' => 'getChairJoinUri',
            'chairPasswd' => 'getChairPasswd',
            'guestJoinUri' => 'getGuestJoinUri',
            'guestPasswd' => 'getGuestPasswd',
            'audienceJoinUri' => 'getAudienceJoinUri',
            'audiencePasswd' => 'getAudiencePasswd',
            'enableRecording' => 'getEnableRecording',
            'notifySetting' => 'getNotifySetting',
            'attendees' => 'getAttendees'
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
        $this->container['conferenceId'] = isset($data['conferenceId']) ? $data['conferenceId'] : null;
        $this->container['corpId'] = isset($data['corpId']) ? $data['corpId'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['timeZoneId'] = isset($data['timeZoneId']) ? $data['timeZoneId'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['scheduserId'] = isset($data['scheduserId']) ? $data['scheduserId'] : null;
        $this->container['deptName'] = isset($data['deptName']) ? $data['deptName'] : null;
        $this->container['scheduserName'] = isset($data['scheduserName']) ? $data['scheduserName'] : null;
        $this->container['vmrPkgName'] = isset($data['vmrPkgName']) ? $data['vmrPkgName'] : null;
        $this->container['callRestriction'] = isset($data['callRestriction']) ? $data['callRestriction'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['audienceScope'] = isset($data['audienceScope']) ? $data['audienceScope'] : null;
        $this->container['chairJoinUri'] = isset($data['chairJoinUri']) ? $data['chairJoinUri'] : null;
        $this->container['chairPasswd'] = isset($data['chairPasswd']) ? $data['chairPasswd'] : null;
        $this->container['guestJoinUri'] = isset($data['guestJoinUri']) ? $data['guestJoinUri'] : null;
        $this->container['guestPasswd'] = isset($data['guestPasswd']) ? $data['guestPasswd'] : null;
        $this->container['audienceJoinUri'] = isset($data['audienceJoinUri']) ? $data['audienceJoinUri'] : null;
        $this->container['audiencePasswd'] = isset($data['audiencePasswd']) ? $data['audiencePasswd'] : null;
        $this->container['enableRecording'] = isset($data['enableRecording']) ? $data['enableRecording'] : null;
        $this->container['notifySetting'] = isset($data['notifySetting']) ? $data['notifySetting'] : null;
        $this->container['attendees'] = isset($data['attendees']) ? $data['attendees'] : null;
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
    * Gets conferenceId
    *  网络研讨会ID。
    *
    * @return string|null
    */
    public function getConferenceId()
    {
        return $this->container['conferenceId'];
    }

    /**
    * Sets conferenceId
    *
    * @param string|null $conferenceId 网络研讨会ID。
    *
    * @return $this
    */
    public function setConferenceId($conferenceId)
    {
        $this->container['conferenceId'] = $conferenceId;
        return $this;
    }

    /**
    * Gets corpId
    *  企业ID。
    *
    * @return string|null
    */
    public function getCorpId()
    {
        return $this->container['corpId'];
    }

    /**
    * Sets corpId
    *
    * @param string|null $corpId 企业ID。
    *
    * @return $this
    */
    public function setCorpId($corpId)
    {
        $this->container['corpId'] = $corpId;
        return $this;
    }

    /**
    * Gets subject
    *  网络研讨会主题。
    *
    * @return string|null
    */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
    * Sets subject
    *
    * @param string|null $subject 网络研讨会主题。
    *
    * @return $this
    */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;
        return $this;
    }

    /**
    * Gets description
    *  网络研讨会描述。
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
    * @param string|null $description 网络研讨会描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets startTime
    *  网络研讨会开始时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 网络研讨会开始时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets duration
    *  网络研讨会持续时长，单位分钟，取值范围[15,1440]。
    *
    * @return int|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param int|null $duration 网络研讨会持续时长，单位分钟，取值范围[15,1440]。
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets timeZoneId
    *  会议通知中会议时间的时区信息。时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。 > * 举例：“timeZoneID”:\"26\"，则通过华为云会议发送的会议通知中的时间将会标记为如“2021/11/11 星期四 00:00 - 02:00 (GMT) 格林威治标准时间:都柏林, 爱丁堡, 里斯本, 伦敦”。
    *
    * @return int|null
    */
    public function getTimeZoneId()
    {
        return $this->container['timeZoneId'];
    }

    /**
    * Sets timeZoneId
    *
    * @param int|null $timeZoneId 会议通知中会议时间的时区信息。时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。 > * 举例：“timeZoneID”:\"26\"，则通过华为云会议发送的会议通知中的时间将会标记为如“2021/11/11 星期四 00:00 - 02:00 (GMT) 格林威治标准时间:都柏林, 爱丁堡, 里斯本, 伦敦”。
    *
    * @return $this
    */
    public function setTimeZoneId($timeZoneId)
    {
        $this->container['timeZoneId'] = $timeZoneId;
        return $this;
    }

    /**
    * Gets state
    *  state
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\MeetingStatus|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\MeetingStatus|null $state state
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets scheduserId
    *  网络研讨会预订者的用户UUID。
    *
    * @return string|null
    */
    public function getScheduserId()
    {
        return $this->container['scheduserId'];
    }

    /**
    * Sets scheduserId
    *
    * @param string|null $scheduserId 网络研讨会预订者的用户UUID。
    *
    * @return $this
    */
    public function setScheduserId($scheduserId)
    {
        $this->container['scheduserId'] = $scheduserId;
        return $this;
    }

    /**
    * Gets deptName
    *  预订者部门命名。
    *
    * @return string|null
    */
    public function getDeptName()
    {
        return $this->container['deptName'];
    }

    /**
    * Sets deptName
    *
    * @param string|null $deptName 预订者部门命名。
    *
    * @return $this
    */
    public function setDeptName($deptName)
    {
        $this->container['deptName'] = $deptName;
        return $this;
    }

    /**
    * Gets scheduserName
    *  预订者名称。
    *
    * @return string|null
    */
    public function getScheduserName()
    {
        return $this->container['scheduserName'];
    }

    /**
    * Sets scheduserName
    *
    * @param string|null $scheduserName 预订者名称。
    *
    * @return $this
    */
    public function setScheduserName($scheduserName)
    {
        $this->container['scheduserName'] = $scheduserName;
        return $this;
    }

    /**
    * Gets vmrPkgName
    *  网络研讨会VMR名称。
    *
    * @return string|null
    */
    public function getVmrPkgName()
    {
        return $this->container['vmrPkgName'];
    }

    /**
    * Sets vmrPkgName
    *
    * @param string|null $vmrPkgName 网络研讨会VMR名称。
    *
    * @return $this
    */
    public function setVmrPkgName($vmrPkgName)
    {
        $this->container['vmrPkgName'] = $vmrPkgName;
        return $this;
    }

    /**
    * Gets callRestriction
    *  入会范围开关。
    *
    * @return bool|null
    */
    public function getCallRestriction()
    {
        return $this->container['callRestriction'];
    }

    /**
    * Sets callRestriction
    *
    * @param bool|null $callRestriction 入会范围开关。
    *
    * @return $this
    */
    public function setCallRestriction($callRestriction)
    {
        $this->container['callRestriction'] = $callRestriction;
        return $this;
    }

    /**
    * Gets scope
    *  主持人、嘉宾入会范围。 * 0: 所有用户 * 2: 企业内用户 * 3: 被邀请用户
    *
    * @return int|null
    */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
    * Sets scope
    *
    * @param int|null $scope 主持人、嘉宾入会范围。 * 0: 所有用户 * 2: 企业内用户 * 3: 被邀请用户
    *
    * @return $this
    */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;
        return $this;
    }

    /**
    * Gets audienceScope
    *  观众入会范围。 * 0: 所有用户 * 2: 企业内用户
    *
    * @return int|null
    */
    public function getAudienceScope()
    {
        return $this->container['audienceScope'];
    }

    /**
    * Sets audienceScope
    *
    * @param int|null $audienceScope 观众入会范围。 * 0: 所有用户 * 2: 企业内用户
    *
    * @return $this
    */
    public function setAudienceScope($audienceScope)
    {
        $this->container['audienceScope'] = $audienceScope;
        return $this;
    }

    /**
    * Gets chairJoinUri
    *  主持人入会地址。
    *
    * @return string|null
    */
    public function getChairJoinUri()
    {
        return $this->container['chairJoinUri'];
    }

    /**
    * Sets chairJoinUri
    *
    * @param string|null $chairJoinUri 主持人入会地址。
    *
    * @return $this
    */
    public function setChairJoinUri($chairJoinUri)
    {
        $this->container['chairJoinUri'] = $chairJoinUri;
        return $this;
    }

    /**
    * Gets chairPasswd
    *  主持人入会密码。
    *
    * @return string|null
    */
    public function getChairPasswd()
    {
        return $this->container['chairPasswd'];
    }

    /**
    * Sets chairPasswd
    *
    * @param string|null $chairPasswd 主持人入会密码。
    *
    * @return $this
    */
    public function setChairPasswd($chairPasswd)
    {
        $this->container['chairPasswd'] = $chairPasswd;
        return $this;
    }

    /**
    * Gets guestJoinUri
    *  嘉宾入会地址。
    *
    * @return string|null
    */
    public function getGuestJoinUri()
    {
        return $this->container['guestJoinUri'];
    }

    /**
    * Sets guestJoinUri
    *
    * @param string|null $guestJoinUri 嘉宾入会地址。
    *
    * @return $this
    */
    public function setGuestJoinUri($guestJoinUri)
    {
        $this->container['guestJoinUri'] = $guestJoinUri;
        return $this;
    }

    /**
    * Gets guestPasswd
    *  嘉宾入会密码。
    *
    * @return string|null
    */
    public function getGuestPasswd()
    {
        return $this->container['guestPasswd'];
    }

    /**
    * Sets guestPasswd
    *
    * @param string|null $guestPasswd 嘉宾入会密码。
    *
    * @return $this
    */
    public function setGuestPasswd($guestPasswd)
    {
        $this->container['guestPasswd'] = $guestPasswd;
        return $this;
    }

    /**
    * Gets audienceJoinUri
    *  观众入会地址。
    *
    * @return string|null
    */
    public function getAudienceJoinUri()
    {
        return $this->container['audienceJoinUri'];
    }

    /**
    * Sets audienceJoinUri
    *
    * @param string|null $audienceJoinUri 观众入会地址。
    *
    * @return $this
    */
    public function setAudienceJoinUri($audienceJoinUri)
    {
        $this->container['audienceJoinUri'] = $audienceJoinUri;
        return $this;
    }

    /**
    * Gets audiencePasswd
    *  观众入会密码。
    *
    * @return string|null
    */
    public function getAudiencePasswd()
    {
        return $this->container['audiencePasswd'];
    }

    /**
    * Sets audiencePasswd
    *
    * @param string|null $audiencePasswd 观众入会密码。
    *
    * @return $this
    */
    public function setAudiencePasswd($audiencePasswd)
    {
        $this->container['audiencePasswd'] = $audiencePasswd;
        return $this;
    }

    /**
    * Gets enableRecording
    *  enableRecording
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\YesNoEnum|null
    */
    public function getEnableRecording()
    {
        return $this->container['enableRecording'];
    }

    /**
    * Sets enableRecording
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\YesNoEnum|null $enableRecording enableRecording
    *
    * @return $this
    */
    public function setEnableRecording($enableRecording)
    {
        $this->container['enableRecording'] = $enableRecording;
        return $this;
    }

    /**
    * Gets notifySetting
    *  notifySetting
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\OpenNotifySetting|null
    */
    public function getNotifySetting()
    {
        return $this->container['notifySetting'];
    }

    /**
    * Sets notifySetting
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\OpenNotifySetting|null $notifySetting notifySetting
    *
    * @return $this
    */
    public function setNotifySetting($notifySetting)
    {
        $this->container['notifySetting'] = $notifySetting;
        return $this;
    }

    /**
    * Gets attendees
    *  与会嘉宾名称列表。
    *
    * @return string[]|null
    */
    public function getAttendees()
    {
        return $this->container['attendees'];
    }

    /**
    * Sets attendees
    *
    * @param string[]|null $attendees 与会嘉宾名称列表。
    *
    * @return $this
    */
    public function setAttendees($attendees)
    {
        $this->container['attendees'] = $attendees;
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

