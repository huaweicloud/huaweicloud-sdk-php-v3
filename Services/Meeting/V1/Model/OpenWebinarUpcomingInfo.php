<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OpenWebinarUpcomingInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OpenWebinarUpcomingInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * conferenceId  网络研讨会ID。
    * corpId  企业ID。
    * subject  网络研讨会主题。
    * description  网络研讨会描述。
    * startTime  网络研讨会开始时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    * duration  网络研讨会开始时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    * timeZoneId  会议通知中会议时间的时区信息。时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。 > * 举例：“timeZoneID”:\"26\"，则通过华为云会议发送的会议通知中的时间将会标记为如“2021/11/11 星期四 00:00 - 02:00 (GMT) 格林威治标准时间:都柏林, 爱丁堡, 里斯本, 伦敦”。
    * scheduserId  网络研讨会预订者的用户UUID。
    * deptName  预订人部门名称。
    * scheduserName  预订者名称。
    * vmrPkgName  网络研讨会VMR名称。
    * chairJoinUri  主持人入会地址。
    * chairPasswd  主持人密码。
    * guestJoinUri  嘉宾入会地址。
    * guestPasswd  嘉宾密码。
    * audienceJoinUri  观众入会地址。
    * audiencePasswd  观众密码。
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
            'scheduserId' => 'string',
            'deptName' => 'string',
            'scheduserName' => 'string',
            'vmrPkgName' => 'string',
            'chairJoinUri' => 'string',
            'chairPasswd' => 'string',
            'guestJoinUri' => 'string',
            'guestPasswd' => 'string',
            'audienceJoinUri' => 'string',
            'audiencePasswd' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * conferenceId  网络研讨会ID。
    * corpId  企业ID。
    * subject  网络研讨会主题。
    * description  网络研讨会描述。
    * startTime  网络研讨会开始时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    * duration  网络研讨会开始时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    * timeZoneId  会议通知中会议时间的时区信息。时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。 > * 举例：“timeZoneID”:\"26\"，则通过华为云会议发送的会议通知中的时间将会标记为如“2021/11/11 星期四 00:00 - 02:00 (GMT) 格林威治标准时间:都柏林, 爱丁堡, 里斯本, 伦敦”。
    * scheduserId  网络研讨会预订者的用户UUID。
    * deptName  预订人部门名称。
    * scheduserName  预订者名称。
    * vmrPkgName  网络研讨会VMR名称。
    * chairJoinUri  主持人入会地址。
    * chairPasswd  主持人密码。
    * guestJoinUri  嘉宾入会地址。
    * guestPasswd  嘉宾密码。
    * audienceJoinUri  观众入会地址。
    * audiencePasswd  观众密码。
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
        'scheduserId' => null,
        'deptName' => null,
        'scheduserName' => null,
        'vmrPkgName' => null,
        'chairJoinUri' => null,
        'chairPasswd' => null,
        'guestJoinUri' => null,
        'guestPasswd' => null,
        'audienceJoinUri' => null,
        'audiencePasswd' => null
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
    * duration  网络研讨会开始时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    * timeZoneId  会议通知中会议时间的时区信息。时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。 > * 举例：“timeZoneID”:\"26\"，则通过华为云会议发送的会议通知中的时间将会标记为如“2021/11/11 星期四 00:00 - 02:00 (GMT) 格林威治标准时间:都柏林, 爱丁堡, 里斯本, 伦敦”。
    * scheduserId  网络研讨会预订者的用户UUID。
    * deptName  预订人部门名称。
    * scheduserName  预订者名称。
    * vmrPkgName  网络研讨会VMR名称。
    * chairJoinUri  主持人入会地址。
    * chairPasswd  主持人密码。
    * guestJoinUri  嘉宾入会地址。
    * guestPasswd  嘉宾密码。
    * audienceJoinUri  观众入会地址。
    * audiencePasswd  观众密码。
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
            'scheduserId' => 'scheduserId',
            'deptName' => 'deptName',
            'scheduserName' => 'scheduserName',
            'vmrPkgName' => 'vmrPkgName',
            'chairJoinUri' => 'chairJoinUri',
            'chairPasswd' => 'chairPasswd',
            'guestJoinUri' => 'guestJoinUri',
            'guestPasswd' => 'guestPasswd',
            'audienceJoinUri' => 'audienceJoinUri',
            'audiencePasswd' => 'audiencePasswd'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * conferenceId  网络研讨会ID。
    * corpId  企业ID。
    * subject  网络研讨会主题。
    * description  网络研讨会描述。
    * startTime  网络研讨会开始时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    * duration  网络研讨会开始时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    * timeZoneId  会议通知中会议时间的时区信息。时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。 > * 举例：“timeZoneID”:\"26\"，则通过华为云会议发送的会议通知中的时间将会标记为如“2021/11/11 星期四 00:00 - 02:00 (GMT) 格林威治标准时间:都柏林, 爱丁堡, 里斯本, 伦敦”。
    * scheduserId  网络研讨会预订者的用户UUID。
    * deptName  预订人部门名称。
    * scheduserName  预订者名称。
    * vmrPkgName  网络研讨会VMR名称。
    * chairJoinUri  主持人入会地址。
    * chairPasswd  主持人密码。
    * guestJoinUri  嘉宾入会地址。
    * guestPasswd  嘉宾密码。
    * audienceJoinUri  观众入会地址。
    * audiencePasswd  观众密码。
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
            'scheduserId' => 'setScheduserId',
            'deptName' => 'setDeptName',
            'scheduserName' => 'setScheduserName',
            'vmrPkgName' => 'setVmrPkgName',
            'chairJoinUri' => 'setChairJoinUri',
            'chairPasswd' => 'setChairPasswd',
            'guestJoinUri' => 'setGuestJoinUri',
            'guestPasswd' => 'setGuestPasswd',
            'audienceJoinUri' => 'setAudienceJoinUri',
            'audiencePasswd' => 'setAudiencePasswd'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * conferenceId  网络研讨会ID。
    * corpId  企业ID。
    * subject  网络研讨会主题。
    * description  网络研讨会描述。
    * startTime  网络研讨会开始时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    * duration  网络研讨会开始时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    * timeZoneId  会议通知中会议时间的时区信息。时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。 > * 举例：“timeZoneID”:\"26\"，则通过华为云会议发送的会议通知中的时间将会标记为如“2021/11/11 星期四 00:00 - 02:00 (GMT) 格林威治标准时间:都柏林, 爱丁堡, 里斯本, 伦敦”。
    * scheduserId  网络研讨会预订者的用户UUID。
    * deptName  预订人部门名称。
    * scheduserName  预订者名称。
    * vmrPkgName  网络研讨会VMR名称。
    * chairJoinUri  主持人入会地址。
    * chairPasswd  主持人密码。
    * guestJoinUri  嘉宾入会地址。
    * guestPasswd  嘉宾密码。
    * audienceJoinUri  观众入会地址。
    * audiencePasswd  观众密码。
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
            'scheduserId' => 'getScheduserId',
            'deptName' => 'getDeptName',
            'scheduserName' => 'getScheduserName',
            'vmrPkgName' => 'getVmrPkgName',
            'chairJoinUri' => 'getChairJoinUri',
            'chairPasswd' => 'getChairPasswd',
            'guestJoinUri' => 'getGuestJoinUri',
            'guestPasswd' => 'getGuestPasswd',
            'audienceJoinUri' => 'getAudienceJoinUri',
            'audiencePasswd' => 'getAudiencePasswd'
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
        $this->container['scheduserId'] = isset($data['scheduserId']) ? $data['scheduserId'] : null;
        $this->container['deptName'] = isset($data['deptName']) ? $data['deptName'] : null;
        $this->container['scheduserName'] = isset($data['scheduserName']) ? $data['scheduserName'] : null;
        $this->container['vmrPkgName'] = isset($data['vmrPkgName']) ? $data['vmrPkgName'] : null;
        $this->container['chairJoinUri'] = isset($data['chairJoinUri']) ? $data['chairJoinUri'] : null;
        $this->container['chairPasswd'] = isset($data['chairPasswd']) ? $data['chairPasswd'] : null;
        $this->container['guestJoinUri'] = isset($data['guestJoinUri']) ? $data['guestJoinUri'] : null;
        $this->container['guestPasswd'] = isset($data['guestPasswd']) ? $data['guestPasswd'] : null;
        $this->container['audienceJoinUri'] = isset($data['audienceJoinUri']) ? $data['audienceJoinUri'] : null;
        $this->container['audiencePasswd'] = isset($data['audiencePasswd']) ? $data['audiencePasswd'] : null;
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
    *  网络研讨会开始时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
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
    * @param int|null $duration 网络研讨会开始时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
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
    *  主持人密码。
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
    * @param string|null $chairPasswd 主持人密码。
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
    *  嘉宾密码。
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
    * @param string|null $guestPasswd 嘉宾密码。
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
    *  观众密码。
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
    * @param string|null $audiencePasswd 观众密码。
    *
    * @return $this
    */
    public function setAudiencePasswd($audiencePasswd)
    {
        $this->container['audiencePasswd'] = $audiencePasswd;
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

