<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QosConferenceInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QosConferenceInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * confUuid  会议UUID。
    * conferenceId  会议ID。
    * subject  会议主题。
    * scheduserName  会议预订者名称。
    * deptName  部门名称。
    * alarm  总体告警 。 * YES：会议的音频、视频、屏幕共享、CPU任一项产生告警，总体告警就为YES * NO：无告警
    * audioAlarm  音频告警 。 * YES：会议中任一与会者存在音频告警，会议音频告警就为YES * NO：无音频告警
    * videoAlarm  视频告警。 * YES：会议中任一与会者存在视频告警，会议视频告警就为YES * NO：无音视频警
    * screenAlarm  屏幕共享告警 YES/NO。 * YES：会议中任一与会者存在屏幕共享告警，会议屏幕共享告警就为YES * NO：无屏幕共享告警
    * cpuAlarm  CPU告警。 * YES：会议中任一与会者存在CPU告警，会议CPU告警就为YES * NO：无CPU告警
    * timeZoneId  时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。 > 举例：“timeZoneID”:\"26\"，则通过华为云会议发送的会议通知中的时间将会标记为如“2021/11/11 星期四 00:00 - 02:00 (GMT) 格林威治标准时间:都柏林, 爱丁堡, 里斯本, 伦敦”。
    * startTime  会议开始时间(UTC时间), Unix时间戳（单位毫秒）。
    * endTime  会议结束时间(UTC时间), Unix时间戳（单位毫秒）。 > * 在线会议：会议召开中，endTime = 会议预计结束时间 > * 历史会议：会议已结束，endTime = 会议实际结束时间
    * duration  会议召开时长（分钟）。 > * 在线会议：会议召开中，duration = 0 > * 历史会议：会议已结束，duration = 会议实际召开时间
    * participants  与会方数。 > 同一用户多次进出会议属于不同的与会方，与会方数计算多次。
    * webinar  是否网络研讨会。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'confUuid' => 'string',
            'conferenceId' => 'string',
            'subject' => 'string',
            'scheduserName' => 'string',
            'deptName' => 'string',
            'alarm' => 'string',
            'audioAlarm' => 'string',
            'videoAlarm' => 'string',
            'screenAlarm' => 'string',
            'cpuAlarm' => 'string',
            'timeZoneId' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'duration' => 'int',
            'participants' => 'int',
            'webinar' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * confUuid  会议UUID。
    * conferenceId  会议ID。
    * subject  会议主题。
    * scheduserName  会议预订者名称。
    * deptName  部门名称。
    * alarm  总体告警 。 * YES：会议的音频、视频、屏幕共享、CPU任一项产生告警，总体告警就为YES * NO：无告警
    * audioAlarm  音频告警 。 * YES：会议中任一与会者存在音频告警，会议音频告警就为YES * NO：无音频告警
    * videoAlarm  视频告警。 * YES：会议中任一与会者存在视频告警，会议视频告警就为YES * NO：无音视频警
    * screenAlarm  屏幕共享告警 YES/NO。 * YES：会议中任一与会者存在屏幕共享告警，会议屏幕共享告警就为YES * NO：无屏幕共享告警
    * cpuAlarm  CPU告警。 * YES：会议中任一与会者存在CPU告警，会议CPU告警就为YES * NO：无CPU告警
    * timeZoneId  时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。 > 举例：“timeZoneID”:\"26\"，则通过华为云会议发送的会议通知中的时间将会标记为如“2021/11/11 星期四 00:00 - 02:00 (GMT) 格林威治标准时间:都柏林, 爱丁堡, 里斯本, 伦敦”。
    * startTime  会议开始时间(UTC时间), Unix时间戳（单位毫秒）。
    * endTime  会议结束时间(UTC时间), Unix时间戳（单位毫秒）。 > * 在线会议：会议召开中，endTime = 会议预计结束时间 > * 历史会议：会议已结束，endTime = 会议实际结束时间
    * duration  会议召开时长（分钟）。 > * 在线会议：会议召开中，duration = 0 > * 历史会议：会议已结束，duration = 会议实际召开时间
    * participants  与会方数。 > 同一用户多次进出会议属于不同的与会方，与会方数计算多次。
    * webinar  是否网络研讨会。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'confUuid' => null,
        'conferenceId' => null,
        'subject' => null,
        'scheduserName' => null,
        'deptName' => null,
        'alarm' => null,
        'audioAlarm' => null,
        'videoAlarm' => null,
        'screenAlarm' => null,
        'cpuAlarm' => null,
        'timeZoneId' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'duration' => null,
        'participants' => null,
        'webinar' => null
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
    * confUuid  会议UUID。
    * conferenceId  会议ID。
    * subject  会议主题。
    * scheduserName  会议预订者名称。
    * deptName  部门名称。
    * alarm  总体告警 。 * YES：会议的音频、视频、屏幕共享、CPU任一项产生告警，总体告警就为YES * NO：无告警
    * audioAlarm  音频告警 。 * YES：会议中任一与会者存在音频告警，会议音频告警就为YES * NO：无音频告警
    * videoAlarm  视频告警。 * YES：会议中任一与会者存在视频告警，会议视频告警就为YES * NO：无音视频警
    * screenAlarm  屏幕共享告警 YES/NO。 * YES：会议中任一与会者存在屏幕共享告警，会议屏幕共享告警就为YES * NO：无屏幕共享告警
    * cpuAlarm  CPU告警。 * YES：会议中任一与会者存在CPU告警，会议CPU告警就为YES * NO：无CPU告警
    * timeZoneId  时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。 > 举例：“timeZoneID”:\"26\"，则通过华为云会议发送的会议通知中的时间将会标记为如“2021/11/11 星期四 00:00 - 02:00 (GMT) 格林威治标准时间:都柏林, 爱丁堡, 里斯本, 伦敦”。
    * startTime  会议开始时间(UTC时间), Unix时间戳（单位毫秒）。
    * endTime  会议结束时间(UTC时间), Unix时间戳（单位毫秒）。 > * 在线会议：会议召开中，endTime = 会议预计结束时间 > * 历史会议：会议已结束，endTime = 会议实际结束时间
    * duration  会议召开时长（分钟）。 > * 在线会议：会议召开中，duration = 0 > * 历史会议：会议已结束，duration = 会议实际召开时间
    * participants  与会方数。 > 同一用户多次进出会议属于不同的与会方，与会方数计算多次。
    * webinar  是否网络研讨会。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'confUuid' => 'confUUID',
            'conferenceId' => 'conferenceID',
            'subject' => 'subject',
            'scheduserName' => 'scheduserName',
            'deptName' => 'deptName',
            'alarm' => 'alarm',
            'audioAlarm' => 'audioAlarm',
            'videoAlarm' => 'videoAlarm',
            'screenAlarm' => 'screenAlarm',
            'cpuAlarm' => 'cpuAlarm',
            'timeZoneId' => 'timeZoneID',
            'startTime' => 'startTime',
            'endTime' => 'endTime',
            'duration' => 'duration',
            'participants' => 'participants',
            'webinar' => 'webinar'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * confUuid  会议UUID。
    * conferenceId  会议ID。
    * subject  会议主题。
    * scheduserName  会议预订者名称。
    * deptName  部门名称。
    * alarm  总体告警 。 * YES：会议的音频、视频、屏幕共享、CPU任一项产生告警，总体告警就为YES * NO：无告警
    * audioAlarm  音频告警 。 * YES：会议中任一与会者存在音频告警，会议音频告警就为YES * NO：无音频告警
    * videoAlarm  视频告警。 * YES：会议中任一与会者存在视频告警，会议视频告警就为YES * NO：无音视频警
    * screenAlarm  屏幕共享告警 YES/NO。 * YES：会议中任一与会者存在屏幕共享告警，会议屏幕共享告警就为YES * NO：无屏幕共享告警
    * cpuAlarm  CPU告警。 * YES：会议中任一与会者存在CPU告警，会议CPU告警就为YES * NO：无CPU告警
    * timeZoneId  时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。 > 举例：“timeZoneID”:\"26\"，则通过华为云会议发送的会议通知中的时间将会标记为如“2021/11/11 星期四 00:00 - 02:00 (GMT) 格林威治标准时间:都柏林, 爱丁堡, 里斯本, 伦敦”。
    * startTime  会议开始时间(UTC时间), Unix时间戳（单位毫秒）。
    * endTime  会议结束时间(UTC时间), Unix时间戳（单位毫秒）。 > * 在线会议：会议召开中，endTime = 会议预计结束时间 > * 历史会议：会议已结束，endTime = 会议实际结束时间
    * duration  会议召开时长（分钟）。 > * 在线会议：会议召开中，duration = 0 > * 历史会议：会议已结束，duration = 会议实际召开时间
    * participants  与会方数。 > 同一用户多次进出会议属于不同的与会方，与会方数计算多次。
    * webinar  是否网络研讨会。
    *
    * @var string[]
    */
    protected static $setters = [
            'confUuid' => 'setConfUuid',
            'conferenceId' => 'setConferenceId',
            'subject' => 'setSubject',
            'scheduserName' => 'setScheduserName',
            'deptName' => 'setDeptName',
            'alarm' => 'setAlarm',
            'audioAlarm' => 'setAudioAlarm',
            'videoAlarm' => 'setVideoAlarm',
            'screenAlarm' => 'setScreenAlarm',
            'cpuAlarm' => 'setCpuAlarm',
            'timeZoneId' => 'setTimeZoneId',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'duration' => 'setDuration',
            'participants' => 'setParticipants',
            'webinar' => 'setWebinar'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * confUuid  会议UUID。
    * conferenceId  会议ID。
    * subject  会议主题。
    * scheduserName  会议预订者名称。
    * deptName  部门名称。
    * alarm  总体告警 。 * YES：会议的音频、视频、屏幕共享、CPU任一项产生告警，总体告警就为YES * NO：无告警
    * audioAlarm  音频告警 。 * YES：会议中任一与会者存在音频告警，会议音频告警就为YES * NO：无音频告警
    * videoAlarm  视频告警。 * YES：会议中任一与会者存在视频告警，会议视频告警就为YES * NO：无音视频警
    * screenAlarm  屏幕共享告警 YES/NO。 * YES：会议中任一与会者存在屏幕共享告警，会议屏幕共享告警就为YES * NO：无屏幕共享告警
    * cpuAlarm  CPU告警。 * YES：会议中任一与会者存在CPU告警，会议CPU告警就为YES * NO：无CPU告警
    * timeZoneId  时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。 > 举例：“timeZoneID”:\"26\"，则通过华为云会议发送的会议通知中的时间将会标记为如“2021/11/11 星期四 00:00 - 02:00 (GMT) 格林威治标准时间:都柏林, 爱丁堡, 里斯本, 伦敦”。
    * startTime  会议开始时间(UTC时间), Unix时间戳（单位毫秒）。
    * endTime  会议结束时间(UTC时间), Unix时间戳（单位毫秒）。 > * 在线会议：会议召开中，endTime = 会议预计结束时间 > * 历史会议：会议已结束，endTime = 会议实际结束时间
    * duration  会议召开时长（分钟）。 > * 在线会议：会议召开中，duration = 0 > * 历史会议：会议已结束，duration = 会议实际召开时间
    * participants  与会方数。 > 同一用户多次进出会议属于不同的与会方，与会方数计算多次。
    * webinar  是否网络研讨会。
    *
    * @var string[]
    */
    protected static $getters = [
            'confUuid' => 'getConfUuid',
            'conferenceId' => 'getConferenceId',
            'subject' => 'getSubject',
            'scheduserName' => 'getScheduserName',
            'deptName' => 'getDeptName',
            'alarm' => 'getAlarm',
            'audioAlarm' => 'getAudioAlarm',
            'videoAlarm' => 'getVideoAlarm',
            'screenAlarm' => 'getScreenAlarm',
            'cpuAlarm' => 'getCpuAlarm',
            'timeZoneId' => 'getTimeZoneId',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'duration' => 'getDuration',
            'participants' => 'getParticipants',
            'webinar' => 'getWebinar'
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
        $this->container['confUuid'] = isset($data['confUuid']) ? $data['confUuid'] : null;
        $this->container['conferenceId'] = isset($data['conferenceId']) ? $data['conferenceId'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['scheduserName'] = isset($data['scheduserName']) ? $data['scheduserName'] : null;
        $this->container['deptName'] = isset($data['deptName']) ? $data['deptName'] : null;
        $this->container['alarm'] = isset($data['alarm']) ? $data['alarm'] : null;
        $this->container['audioAlarm'] = isset($data['audioAlarm']) ? $data['audioAlarm'] : null;
        $this->container['videoAlarm'] = isset($data['videoAlarm']) ? $data['videoAlarm'] : null;
        $this->container['screenAlarm'] = isset($data['screenAlarm']) ? $data['screenAlarm'] : null;
        $this->container['cpuAlarm'] = isset($data['cpuAlarm']) ? $data['cpuAlarm'] : null;
        $this->container['timeZoneId'] = isset($data['timeZoneId']) ? $data['timeZoneId'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['participants'] = isset($data['participants']) ? $data['participants'] : null;
        $this->container['webinar'] = isset($data['webinar']) ? $data['webinar'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['confUuid']) && (mb_strlen($this->container['confUuid']) > 64)) {
                $invalidProperties[] = "invalid value for 'confUuid', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['confUuid']) && (mb_strlen($this->container['confUuid']) < 0)) {
                $invalidProperties[] = "invalid value for 'confUuid', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['conferenceId']) && (mb_strlen($this->container['conferenceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'conferenceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['conferenceId']) && (mb_strlen($this->container['conferenceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'conferenceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['subject']) && (mb_strlen($this->container['subject']) > 512)) {
                $invalidProperties[] = "invalid value for 'subject', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['subject']) && (mb_strlen($this->container['subject']) < 0)) {
                $invalidProperties[] = "invalid value for 'subject', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scheduserName']) && (mb_strlen($this->container['scheduserName']) > 512)) {
                $invalidProperties[] = "invalid value for 'scheduserName', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['scheduserName']) && (mb_strlen($this->container['scheduserName']) < 0)) {
                $invalidProperties[] = "invalid value for 'scheduserName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['deptName']) && (mb_strlen($this->container['deptName']) > 64)) {
                $invalidProperties[] = "invalid value for 'deptName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['deptName']) && (mb_strlen($this->container['deptName']) < 0)) {
                $invalidProperties[] = "invalid value for 'deptName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['alarm']) && (mb_strlen($this->container['alarm']) > 32)) {
                $invalidProperties[] = "invalid value for 'alarm', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['alarm']) && (mb_strlen($this->container['alarm']) < 0)) {
                $invalidProperties[] = "invalid value for 'alarm', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['audioAlarm']) && (mb_strlen($this->container['audioAlarm']) > 32)) {
                $invalidProperties[] = "invalid value for 'audioAlarm', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['audioAlarm']) && (mb_strlen($this->container['audioAlarm']) < 0)) {
                $invalidProperties[] = "invalid value for 'audioAlarm', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['videoAlarm']) && (mb_strlen($this->container['videoAlarm']) > 32)) {
                $invalidProperties[] = "invalid value for 'videoAlarm', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['videoAlarm']) && (mb_strlen($this->container['videoAlarm']) < 0)) {
                $invalidProperties[] = "invalid value for 'videoAlarm', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['screenAlarm']) && (mb_strlen($this->container['screenAlarm']) > 32)) {
                $invalidProperties[] = "invalid value for 'screenAlarm', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['screenAlarm']) && (mb_strlen($this->container['screenAlarm']) < 0)) {
                $invalidProperties[] = "invalid value for 'screenAlarm', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cpuAlarm']) && (mb_strlen($this->container['cpuAlarm']) > 32)) {
                $invalidProperties[] = "invalid value for 'cpuAlarm', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['cpuAlarm']) && (mb_strlen($this->container['cpuAlarm']) < 0)) {
                $invalidProperties[] = "invalid value for 'cpuAlarm', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['timeZoneId']) && (mb_strlen($this->container['timeZoneId']) > 20)) {
                $invalidProperties[] = "invalid value for 'timeZoneId', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['timeZoneId']) && (mb_strlen($this->container['timeZoneId']) < 0)) {
                $invalidProperties[] = "invalid value for 'timeZoneId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['duration']) && ($this->container['duration'] < 0)) {
                $invalidProperties[] = "invalid value for 'duration', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['participants']) && ($this->container['participants'] < 0)) {
                $invalidProperties[] = "invalid value for 'participants', must be bigger than or equal to 0.";
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
    * Gets confUuid
    *  会议UUID。
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
    * @param string|null $confUuid 会议UUID。
    *
    * @return $this
    */
    public function setConfUuid($confUuid)
    {
        $this->container['confUuid'] = $confUuid;
        return $this;
    }

    /**
    * Gets conferenceId
    *  会议ID。
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
    * @param string|null $conferenceId 会议ID。
    *
    * @return $this
    */
    public function setConferenceId($conferenceId)
    {
        $this->container['conferenceId'] = $conferenceId;
        return $this;
    }

    /**
    * Gets subject
    *  会议主题。
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
    * @param string|null $subject 会议主题。
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
    *  会议预订者名称。
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
    * @param string|null $scheduserName 会议预订者名称。
    *
    * @return $this
    */
    public function setScheduserName($scheduserName)
    {
        $this->container['scheduserName'] = $scheduserName;
        return $this;
    }

    /**
    * Gets deptName
    *  部门名称。
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
    * @param string|null $deptName 部门名称。
    *
    * @return $this
    */
    public function setDeptName($deptName)
    {
        $this->container['deptName'] = $deptName;
        return $this;
    }

    /**
    * Gets alarm
    *  总体告警 。 * YES：会议的音频、视频、屏幕共享、CPU任一项产生告警，总体告警就为YES * NO：无告警
    *
    * @return string|null
    */
    public function getAlarm()
    {
        return $this->container['alarm'];
    }

    /**
    * Sets alarm
    *
    * @param string|null $alarm 总体告警 。 * YES：会议的音频、视频、屏幕共享、CPU任一项产生告警，总体告警就为YES * NO：无告警
    *
    * @return $this
    */
    public function setAlarm($alarm)
    {
        $this->container['alarm'] = $alarm;
        return $this;
    }

    /**
    * Gets audioAlarm
    *  音频告警 。 * YES：会议中任一与会者存在音频告警，会议音频告警就为YES * NO：无音频告警
    *
    * @return string|null
    */
    public function getAudioAlarm()
    {
        return $this->container['audioAlarm'];
    }

    /**
    * Sets audioAlarm
    *
    * @param string|null $audioAlarm 音频告警 。 * YES：会议中任一与会者存在音频告警，会议音频告警就为YES * NO：无音频告警
    *
    * @return $this
    */
    public function setAudioAlarm($audioAlarm)
    {
        $this->container['audioAlarm'] = $audioAlarm;
        return $this;
    }

    /**
    * Gets videoAlarm
    *  视频告警。 * YES：会议中任一与会者存在视频告警，会议视频告警就为YES * NO：无音视频警
    *
    * @return string|null
    */
    public function getVideoAlarm()
    {
        return $this->container['videoAlarm'];
    }

    /**
    * Sets videoAlarm
    *
    * @param string|null $videoAlarm 视频告警。 * YES：会议中任一与会者存在视频告警，会议视频告警就为YES * NO：无音视频警
    *
    * @return $this
    */
    public function setVideoAlarm($videoAlarm)
    {
        $this->container['videoAlarm'] = $videoAlarm;
        return $this;
    }

    /**
    * Gets screenAlarm
    *  屏幕共享告警 YES/NO。 * YES：会议中任一与会者存在屏幕共享告警，会议屏幕共享告警就为YES * NO：无屏幕共享告警
    *
    * @return string|null
    */
    public function getScreenAlarm()
    {
        return $this->container['screenAlarm'];
    }

    /**
    * Sets screenAlarm
    *
    * @param string|null $screenAlarm 屏幕共享告警 YES/NO。 * YES：会议中任一与会者存在屏幕共享告警，会议屏幕共享告警就为YES * NO：无屏幕共享告警
    *
    * @return $this
    */
    public function setScreenAlarm($screenAlarm)
    {
        $this->container['screenAlarm'] = $screenAlarm;
        return $this;
    }

    /**
    * Gets cpuAlarm
    *  CPU告警。 * YES：会议中任一与会者存在CPU告警，会议CPU告警就为YES * NO：无CPU告警
    *
    * @return string|null
    */
    public function getCpuAlarm()
    {
        return $this->container['cpuAlarm'];
    }

    /**
    * Sets cpuAlarm
    *
    * @param string|null $cpuAlarm CPU告警。 * YES：会议中任一与会者存在CPU告警，会议CPU告警就为YES * NO：无CPU告警
    *
    * @return $this
    */
    public function setCpuAlarm($cpuAlarm)
    {
        $this->container['cpuAlarm'] = $cpuAlarm;
        return $this;
    }

    /**
    * Gets timeZoneId
    *  时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。 > 举例：“timeZoneID”:\"26\"，则通过华为云会议发送的会议通知中的时间将会标记为如“2021/11/11 星期四 00:00 - 02:00 (GMT) 格林威治标准时间:都柏林, 爱丁堡, 里斯本, 伦敦”。
    *
    * @return string|null
    */
    public function getTimeZoneId()
    {
        return $this->container['timeZoneId'];
    }

    /**
    * Sets timeZoneId
    *
    * @param string|null $timeZoneId 时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。 > 举例：“timeZoneID”:\"26\"，则通过华为云会议发送的会议通知中的时间将会标记为如“2021/11/11 星期四 00:00 - 02:00 (GMT) 格林威治标准时间:都柏林, 爱丁堡, 里斯本, 伦敦”。
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
    *  会议开始时间(UTC时间), Unix时间戳（单位毫秒）。
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime 会议开始时间(UTC时间), Unix时间戳（单位毫秒）。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  会议结束时间(UTC时间), Unix时间戳（单位毫秒）。 > * 在线会议：会议召开中，endTime = 会议预计结束时间 > * 历史会议：会议已结束，endTime = 会议实际结束时间
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 会议结束时间(UTC时间), Unix时间戳（单位毫秒）。 > * 在线会议：会议召开中，endTime = 会议预计结束时间 > * 历史会议：会议已结束，endTime = 会议实际结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets duration
    *  会议召开时长（分钟）。 > * 在线会议：会议召开中，duration = 0 > * 历史会议：会议已结束，duration = 会议实际召开时间
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
    * @param int|null $duration 会议召开时长（分钟）。 > * 在线会议：会议召开中，duration = 0 > * 历史会议：会议已结束，duration = 会议实际召开时间
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets participants
    *  与会方数。 > 同一用户多次进出会议属于不同的与会方，与会方数计算多次。
    *
    * @return int|null
    */
    public function getParticipants()
    {
        return $this->container['participants'];
    }

    /**
    * Sets participants
    *
    * @param int|null $participants 与会方数。 > 同一用户多次进出会议属于不同的与会方，与会方数计算多次。
    *
    * @return $this
    */
    public function setParticipants($participants)
    {
        $this->container['participants'] = $participants;
        return $this;
    }

    /**
    * Gets webinar
    *  是否网络研讨会。
    *
    * @return bool|null
    */
    public function getWebinar()
    {
        return $this->container['webinar'];
    }

    /**
    * Sets webinar
    *
    * @param bool|null $webinar 是否网络研讨会。
    *
    * @return $this
    */
    public function setWebinar($webinar)
    {
        $this->container['webinar'] = $webinar;
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

