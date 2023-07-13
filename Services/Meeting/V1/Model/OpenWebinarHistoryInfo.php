<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OpenWebinarHistoryInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OpenWebinarHistoryInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * conferenceId  网络研讨会ID。
    * confUuid  网络研讨会UUID。
    * subject  网络研讨会主题。
    * scheduserName  网络研讨会预定者名称。
    * moderator  网络研讨主持人名称。
    * deptName  预订人部门名称。
    * timeZoneId  会议通知中会议时间的时区信息。时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。 > * 举例：“timeZoneID”:\"26\"，则通过华为云会议发送的会议通知中的时间将会标记为如“2021/11/11 星期四 00:00 - 02:00 (GMT) 格林威治标准时间:都柏林, 爱丁堡, 里斯本, 伦敦”。
    * startTime  网络研讨会开始时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    * duration  网络研讨会持续时长，单位分钟。
    * actualStartTime  网络研讨会实际召开时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    * endTime  网络研讨会结束时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    * actualDuration  网络研讨会实际时长，单位分钟。
    * attendeeCount  与会人数。
    * chairCount  主持人数。
    * guestCount  嘉宾数。
    * audienceCount  观众人数。
    * vmrId  VMR ID。
    * vmrPkgAudienceParties  网络研讨会VMR最大观众数。
    * vmrPkgName  网络研讨会VMR名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'conferenceId' => 'string',
            'confUuid' => 'string',
            'subject' => 'string',
            'scheduserName' => 'string',
            'moderator' => 'string',
            'deptName' => 'string',
            'timeZoneId' => 'int',
            'startTime' => 'string',
            'duration' => 'int',
            'actualStartTime' => 'string',
            'endTime' => 'string',
            'actualDuration' => 'int',
            'attendeeCount' => 'int',
            'chairCount' => 'int',
            'guestCount' => 'int',
            'audienceCount' => 'int',
            'vmrId' => 'string',
            'vmrPkgAudienceParties' => 'int',
            'vmrPkgName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * conferenceId  网络研讨会ID。
    * confUuid  网络研讨会UUID。
    * subject  网络研讨会主题。
    * scheduserName  网络研讨会预定者名称。
    * moderator  网络研讨主持人名称。
    * deptName  预订人部门名称。
    * timeZoneId  会议通知中会议时间的时区信息。时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。 > * 举例：“timeZoneID”:\"26\"，则通过华为云会议发送的会议通知中的时间将会标记为如“2021/11/11 星期四 00:00 - 02:00 (GMT) 格林威治标准时间:都柏林, 爱丁堡, 里斯本, 伦敦”。
    * startTime  网络研讨会开始时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    * duration  网络研讨会持续时长，单位分钟。
    * actualStartTime  网络研讨会实际召开时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    * endTime  网络研讨会结束时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    * actualDuration  网络研讨会实际时长，单位分钟。
    * attendeeCount  与会人数。
    * chairCount  主持人数。
    * guestCount  嘉宾数。
    * audienceCount  观众人数。
    * vmrId  VMR ID。
    * vmrPkgAudienceParties  网络研讨会VMR最大观众数。
    * vmrPkgName  网络研讨会VMR名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'conferenceId' => null,
        'confUuid' => null,
        'subject' => null,
        'scheduserName' => null,
        'moderator' => null,
        'deptName' => null,
        'timeZoneId' => 'int32',
        'startTime' => null,
        'duration' => 'int32',
        'actualStartTime' => null,
        'endTime' => null,
        'actualDuration' => 'int32',
        'attendeeCount' => 'int32',
        'chairCount' => 'int32',
        'guestCount' => 'int32',
        'audienceCount' => 'int32',
        'vmrId' => null,
        'vmrPkgAudienceParties' => 'int32',
        'vmrPkgName' => null
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
    * confUuid  网络研讨会UUID。
    * subject  网络研讨会主题。
    * scheduserName  网络研讨会预定者名称。
    * moderator  网络研讨主持人名称。
    * deptName  预订人部门名称。
    * timeZoneId  会议通知中会议时间的时区信息。时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。 > * 举例：“timeZoneID”:\"26\"，则通过华为云会议发送的会议通知中的时间将会标记为如“2021/11/11 星期四 00:00 - 02:00 (GMT) 格林威治标准时间:都柏林, 爱丁堡, 里斯本, 伦敦”。
    * startTime  网络研讨会开始时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    * duration  网络研讨会持续时长，单位分钟。
    * actualStartTime  网络研讨会实际召开时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    * endTime  网络研讨会结束时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    * actualDuration  网络研讨会实际时长，单位分钟。
    * attendeeCount  与会人数。
    * chairCount  主持人数。
    * guestCount  嘉宾数。
    * audienceCount  观众人数。
    * vmrId  VMR ID。
    * vmrPkgAudienceParties  网络研讨会VMR最大观众数。
    * vmrPkgName  网络研讨会VMR名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'conferenceId' => 'conferenceId',
            'confUuid' => 'confUUID',
            'subject' => 'subject',
            'scheduserName' => 'scheduserName',
            'moderator' => 'moderator',
            'deptName' => 'deptName',
            'timeZoneId' => 'timeZoneId',
            'startTime' => 'startTime',
            'duration' => 'duration',
            'actualStartTime' => 'actualStartTime',
            'endTime' => 'endTime',
            'actualDuration' => 'actualDuration',
            'attendeeCount' => 'attendeeCount',
            'chairCount' => 'chairCount',
            'guestCount' => 'guestCount',
            'audienceCount' => 'audienceCount',
            'vmrId' => 'vmrId',
            'vmrPkgAudienceParties' => 'vmrPkgAudienceParties',
            'vmrPkgName' => 'vmrPkgName'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * conferenceId  网络研讨会ID。
    * confUuid  网络研讨会UUID。
    * subject  网络研讨会主题。
    * scheduserName  网络研讨会预定者名称。
    * moderator  网络研讨主持人名称。
    * deptName  预订人部门名称。
    * timeZoneId  会议通知中会议时间的时区信息。时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。 > * 举例：“timeZoneID”:\"26\"，则通过华为云会议发送的会议通知中的时间将会标记为如“2021/11/11 星期四 00:00 - 02:00 (GMT) 格林威治标准时间:都柏林, 爱丁堡, 里斯本, 伦敦”。
    * startTime  网络研讨会开始时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    * duration  网络研讨会持续时长，单位分钟。
    * actualStartTime  网络研讨会实际召开时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    * endTime  网络研讨会结束时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    * actualDuration  网络研讨会实际时长，单位分钟。
    * attendeeCount  与会人数。
    * chairCount  主持人数。
    * guestCount  嘉宾数。
    * audienceCount  观众人数。
    * vmrId  VMR ID。
    * vmrPkgAudienceParties  网络研讨会VMR最大观众数。
    * vmrPkgName  网络研讨会VMR名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'conferenceId' => 'setConferenceId',
            'confUuid' => 'setConfUuid',
            'subject' => 'setSubject',
            'scheduserName' => 'setScheduserName',
            'moderator' => 'setModerator',
            'deptName' => 'setDeptName',
            'timeZoneId' => 'setTimeZoneId',
            'startTime' => 'setStartTime',
            'duration' => 'setDuration',
            'actualStartTime' => 'setActualStartTime',
            'endTime' => 'setEndTime',
            'actualDuration' => 'setActualDuration',
            'attendeeCount' => 'setAttendeeCount',
            'chairCount' => 'setChairCount',
            'guestCount' => 'setGuestCount',
            'audienceCount' => 'setAudienceCount',
            'vmrId' => 'setVmrId',
            'vmrPkgAudienceParties' => 'setVmrPkgAudienceParties',
            'vmrPkgName' => 'setVmrPkgName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * conferenceId  网络研讨会ID。
    * confUuid  网络研讨会UUID。
    * subject  网络研讨会主题。
    * scheduserName  网络研讨会预定者名称。
    * moderator  网络研讨主持人名称。
    * deptName  预订人部门名称。
    * timeZoneId  会议通知中会议时间的时区信息。时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。 > * 举例：“timeZoneID”:\"26\"，则通过华为云会议发送的会议通知中的时间将会标记为如“2021/11/11 星期四 00:00 - 02:00 (GMT) 格林威治标准时间:都柏林, 爱丁堡, 里斯本, 伦敦”。
    * startTime  网络研讨会开始时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    * duration  网络研讨会持续时长，单位分钟。
    * actualStartTime  网络研讨会实际召开时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    * endTime  网络研讨会结束时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    * actualDuration  网络研讨会实际时长，单位分钟。
    * attendeeCount  与会人数。
    * chairCount  主持人数。
    * guestCount  嘉宾数。
    * audienceCount  观众人数。
    * vmrId  VMR ID。
    * vmrPkgAudienceParties  网络研讨会VMR最大观众数。
    * vmrPkgName  网络研讨会VMR名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'conferenceId' => 'getConferenceId',
            'confUuid' => 'getConfUuid',
            'subject' => 'getSubject',
            'scheduserName' => 'getScheduserName',
            'moderator' => 'getModerator',
            'deptName' => 'getDeptName',
            'timeZoneId' => 'getTimeZoneId',
            'startTime' => 'getStartTime',
            'duration' => 'getDuration',
            'actualStartTime' => 'getActualStartTime',
            'endTime' => 'getEndTime',
            'actualDuration' => 'getActualDuration',
            'attendeeCount' => 'getAttendeeCount',
            'chairCount' => 'getChairCount',
            'guestCount' => 'getGuestCount',
            'audienceCount' => 'getAudienceCount',
            'vmrId' => 'getVmrId',
            'vmrPkgAudienceParties' => 'getVmrPkgAudienceParties',
            'vmrPkgName' => 'getVmrPkgName'
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
        $this->container['confUuid'] = isset($data['confUuid']) ? $data['confUuid'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['scheduserName'] = isset($data['scheduserName']) ? $data['scheduserName'] : null;
        $this->container['moderator'] = isset($data['moderator']) ? $data['moderator'] : null;
        $this->container['deptName'] = isset($data['deptName']) ? $data['deptName'] : null;
        $this->container['timeZoneId'] = isset($data['timeZoneId']) ? $data['timeZoneId'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['actualStartTime'] = isset($data['actualStartTime']) ? $data['actualStartTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['actualDuration'] = isset($data['actualDuration']) ? $data['actualDuration'] : null;
        $this->container['attendeeCount'] = isset($data['attendeeCount']) ? $data['attendeeCount'] : null;
        $this->container['chairCount'] = isset($data['chairCount']) ? $data['chairCount'] : null;
        $this->container['guestCount'] = isset($data['guestCount']) ? $data['guestCount'] : null;
        $this->container['audienceCount'] = isset($data['audienceCount']) ? $data['audienceCount'] : null;
        $this->container['vmrId'] = isset($data['vmrId']) ? $data['vmrId'] : null;
        $this->container['vmrPkgAudienceParties'] = isset($data['vmrPkgAudienceParties']) ? $data['vmrPkgAudienceParties'] : null;
        $this->container['vmrPkgName'] = isset($data['vmrPkgName']) ? $data['vmrPkgName'] : null;
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
    * Gets confUuid
    *  网络研讨会UUID。
    *
    * @return string|null
    */
    public function getConfUuid()
    {
        return $this->container['confUuid'];
    }

    /**
    * Sets confUuid
    *
    * @param string|null $confUuid 网络研讨会UUID。
    *
    * @return $this
    */
    public function setConfUuid($confUuid)
    {
        $this->container['confUuid'] = $confUuid;
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
    * Gets scheduserName
    *  网络研讨会预定者名称。
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
    * @param string|null $scheduserName 网络研讨会预定者名称。
    *
    * @return $this
    */
    public function setScheduserName($scheduserName)
    {
        $this->container['scheduserName'] = $scheduserName;
        return $this;
    }

    /**
    * Gets moderator
    *  网络研讨主持人名称。
    *
    * @return string|null
    */
    public function getModerator()
    {
        return $this->container['moderator'];
    }

    /**
    * Sets moderator
    *
    * @param string|null $moderator 网络研讨主持人名称。
    *
    * @return $this
    */
    public function setModerator($moderator)
    {
        $this->container['moderator'] = $moderator;
        return $this;
    }

    /**
    * Gets deptName
    *  预订人部门名称。
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
    * @param string|null $deptName 预订人部门名称。
    *
    * @return $this
    */
    public function setDeptName($deptName)
    {
        $this->container['deptName'] = $deptName;
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
    *  网络研讨会持续时长，单位分钟。
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
    * @param int|null $duration 网络研讨会持续时长，单位分钟。
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets actualStartTime
    *  网络研讨会实际召开时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    *
    * @return string|null
    */
    public function getActualStartTime()
    {
        return $this->container['actualStartTime'];
    }

    /**
    * Sets actualStartTime
    *
    * @param string|null $actualStartTime 网络研讨会实际召开时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    *
    * @return $this
    */
    public function setActualStartTime($actualStartTime)
    {
        $this->container['actualStartTime'] = $actualStartTime;
        return $this;
    }

    /**
    * Gets endTime
    *  网络研讨会结束时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 网络研讨会结束时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets actualDuration
    *  网络研讨会实际时长，单位分钟。
    *
    * @return int|null
    */
    public function getActualDuration()
    {
        return $this->container['actualDuration'];
    }

    /**
    * Sets actualDuration
    *
    * @param int|null $actualDuration 网络研讨会实际时长，单位分钟。
    *
    * @return $this
    */
    public function setActualDuration($actualDuration)
    {
        $this->container['actualDuration'] = $actualDuration;
        return $this;
    }

    /**
    * Gets attendeeCount
    *  与会人数。
    *
    * @return int|null
    */
    public function getAttendeeCount()
    {
        return $this->container['attendeeCount'];
    }

    /**
    * Sets attendeeCount
    *
    * @param int|null $attendeeCount 与会人数。
    *
    * @return $this
    */
    public function setAttendeeCount($attendeeCount)
    {
        $this->container['attendeeCount'] = $attendeeCount;
        return $this;
    }

    /**
    * Gets chairCount
    *  主持人数。
    *
    * @return int|null
    */
    public function getChairCount()
    {
        return $this->container['chairCount'];
    }

    /**
    * Sets chairCount
    *
    * @param int|null $chairCount 主持人数。
    *
    * @return $this
    */
    public function setChairCount($chairCount)
    {
        $this->container['chairCount'] = $chairCount;
        return $this;
    }

    /**
    * Gets guestCount
    *  嘉宾数。
    *
    * @return int|null
    */
    public function getGuestCount()
    {
        return $this->container['guestCount'];
    }

    /**
    * Sets guestCount
    *
    * @param int|null $guestCount 嘉宾数。
    *
    * @return $this
    */
    public function setGuestCount($guestCount)
    {
        $this->container['guestCount'] = $guestCount;
        return $this;
    }

    /**
    * Gets audienceCount
    *  观众人数。
    *
    * @return int|null
    */
    public function getAudienceCount()
    {
        return $this->container['audienceCount'];
    }

    /**
    * Sets audienceCount
    *
    * @param int|null $audienceCount 观众人数。
    *
    * @return $this
    */
    public function setAudienceCount($audienceCount)
    {
        $this->container['audienceCount'] = $audienceCount;
        return $this;
    }

    /**
    * Gets vmrId
    *  VMR ID。
    *
    * @return string|null
    */
    public function getVmrId()
    {
        return $this->container['vmrId'];
    }

    /**
    * Sets vmrId
    *
    * @param string|null $vmrId VMR ID。
    *
    * @return $this
    */
    public function setVmrId($vmrId)
    {
        $this->container['vmrId'] = $vmrId;
        return $this;
    }

    /**
    * Gets vmrPkgAudienceParties
    *  网络研讨会VMR最大观众数。
    *
    * @return int|null
    */
    public function getVmrPkgAudienceParties()
    {
        return $this->container['vmrPkgAudienceParties'];
    }

    /**
    * Sets vmrPkgAudienceParties
    *
    * @param int|null $vmrPkgAudienceParties 网络研讨会VMR最大观众数。
    *
    * @return $this
    */
    public function setVmrPkgAudienceParties($vmrPkgAudienceParties)
    {
        $this->container['vmrPkgAudienceParties'] = $vmrPkgAudienceParties;
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

