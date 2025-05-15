<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RestScheduleConfDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RestScheduleConfDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startTime  会议开始时间（UTC时间）。格式：yyyy-MM-dd HH:mm。 > * 创建预约会议时，如果没有指定开始时间或填空串，则表示会议马上开始 > * 时间是UTC时间，即0时区的时间
    * length  会议持续时长，单位分钟。默认30分钟。最大1440分钟（24小时），最小15分钟。
    * subject  会议主题。最多128个字符。
    * mediaTypes  会议的媒体类型。 - Voice: 语音会议 - HDVideo: 视频会议
    * groupuri  软终端创建即时会议时在当前字段带临时群组ID，由服务器在邀请其他与会者时在或者conference-info头域中携带。长度限制为31个字符。
    * attendees  与会者列表。
    * isAutoRecord  会议是否自动启动录制，在录播类型为:录播、直播+录播时有效。默认为不自动启动。 - 0: 不自动启动录制 - 1: 自动启动录制
    * encryptMode  会议媒体加密模式。默认值由企业级的配置填充。 - 0: 自适应加密 - 1: 强制加密 - 2: 不加密
    * language  会议通知短信或邮件的语言。默认中文。 - zh-CN: 简体中文 - en-US: 美国英文
    * timeZoneId  会议通知中会议时间的时区信息。时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。 > * 举例：“timeZoneID”:\"26\"，则通过华为云会议发送的会议通知中的时间将会标记为如“2021/11/11 星期四 00:00 - 02:00 (GMT) 格林威治标准时间:都柏林, 爱丁堡, 里斯本, 伦敦”。 > * 非周期会议，如果会议通知是通过第三方系统发送，则这个字段不用填写。
    * recordType  录播类型。默认为禁用。 - 0: 禁用 - 1: 直播 - 2: 录播 - 3: 直播+录播
    * liveAddress  主流直播推流地址，在录播类型为 :直播、直播+录播时有效。最大不超过255个字符。
    * auxAddress  辅流直播推流地址，在录播类型为 :直播、直播+录播时有效。最大不超过255个字符。
    * recordAuxStream  是否录制辅流，在录播类型为：录播、录播+直播时有效。默认只录制视频主流，不录制辅流。  - 0: 不录制  - 1: 录制
    * confConfigInfo  confConfigInfo
    * recordAuthType  录播观看鉴权方式，在录播类型为:录播、直播+录播时有效。 - 0: 可通过链接观看/下载 - 1: 企业用户可观看/下载 - 2: 与会者可观看/下载
    * vmrFlag  是否使用云会议室或者个人会议ID召开预约会议。默认0。 - 0: 不使用云会议室或者个人会议ID - 1: 使用云会议室或者个人会议ID
    * cycleParams  cycleParams
    * vmrId  绑定给当前创会帐号的VMR ID。通过[[查询云会议室及个人会议ID](https://support.huaweicloud.com/api-meeting/meeting_21_1106.html)](tag:hws)[[查询云会议室及个人会议ID](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_1106.html)](tag:hk)接口获取。 > * vmrID取上述查询接口中返回的id，不是vmrId > * 创建个人会议ID的会议时，使用vmrMode=0的VMR；创建云会议室的会议时，使用vmrMode=1的VMR
    * concurrentParticipants  会议最大与会人数。默认值0。 * 0：无限制 * 大于0：会议最大与会人数
    * supportSimultaneousInterpretation  会议是否支持同声传译。默认值false。 * true:支持 * false:不支持
    * confResType  会议资源类型：  * 0: 并发 * 1: 云会议室 * 2: 网络研讨会 * 3: 预留模式，暂未开放
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startTime' => 'string',
            'length' => 'int',
            'subject' => 'string',
            'mediaTypes' => 'string',
            'groupuri' => 'string',
            'attendees' => '\HuaweiCloud\SDK\Meeting\V1\Model\RestAttendeeDTO[]',
            'isAutoRecord' => 'int',
            'encryptMode' => 'int',
            'language' => 'string',
            'timeZoneId' => 'string',
            'recordType' => 'int',
            'liveAddress' => 'string',
            'auxAddress' => 'string',
            'recordAuxStream' => 'int',
            'confConfigInfo' => '\HuaweiCloud\SDK\Meeting\V1\Model\RestConfConfigDTO',
            'recordAuthType' => 'int',
            'vmrFlag' => 'int',
            'cycleParams' => '\HuaweiCloud\SDK\Meeting\V1\Model\CycleParams',
            'vmrId' => 'string',
            'concurrentParticipants' => 'int',
            'supportSimultaneousInterpretation' => 'bool',
            'confResType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startTime  会议开始时间（UTC时间）。格式：yyyy-MM-dd HH:mm。 > * 创建预约会议时，如果没有指定开始时间或填空串，则表示会议马上开始 > * 时间是UTC时间，即0时区的时间
    * length  会议持续时长，单位分钟。默认30分钟。最大1440分钟（24小时），最小15分钟。
    * subject  会议主题。最多128个字符。
    * mediaTypes  会议的媒体类型。 - Voice: 语音会议 - HDVideo: 视频会议
    * groupuri  软终端创建即时会议时在当前字段带临时群组ID，由服务器在邀请其他与会者时在或者conference-info头域中携带。长度限制为31个字符。
    * attendees  与会者列表。
    * isAutoRecord  会议是否自动启动录制，在录播类型为:录播、直播+录播时有效。默认为不自动启动。 - 0: 不自动启动录制 - 1: 自动启动录制
    * encryptMode  会议媒体加密模式。默认值由企业级的配置填充。 - 0: 自适应加密 - 1: 强制加密 - 2: 不加密
    * language  会议通知短信或邮件的语言。默认中文。 - zh-CN: 简体中文 - en-US: 美国英文
    * timeZoneId  会议通知中会议时间的时区信息。时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。 > * 举例：“timeZoneID”:\"26\"，则通过华为云会议发送的会议通知中的时间将会标记为如“2021/11/11 星期四 00:00 - 02:00 (GMT) 格林威治标准时间:都柏林, 爱丁堡, 里斯本, 伦敦”。 > * 非周期会议，如果会议通知是通过第三方系统发送，则这个字段不用填写。
    * recordType  录播类型。默认为禁用。 - 0: 禁用 - 1: 直播 - 2: 录播 - 3: 直播+录播
    * liveAddress  主流直播推流地址，在录播类型为 :直播、直播+录播时有效。最大不超过255个字符。
    * auxAddress  辅流直播推流地址，在录播类型为 :直播、直播+录播时有效。最大不超过255个字符。
    * recordAuxStream  是否录制辅流，在录播类型为：录播、录播+直播时有效。默认只录制视频主流，不录制辅流。  - 0: 不录制  - 1: 录制
    * confConfigInfo  confConfigInfo
    * recordAuthType  录播观看鉴权方式，在录播类型为:录播、直播+录播时有效。 - 0: 可通过链接观看/下载 - 1: 企业用户可观看/下载 - 2: 与会者可观看/下载
    * vmrFlag  是否使用云会议室或者个人会议ID召开预约会议。默认0。 - 0: 不使用云会议室或者个人会议ID - 1: 使用云会议室或者个人会议ID
    * cycleParams  cycleParams
    * vmrId  绑定给当前创会帐号的VMR ID。通过[[查询云会议室及个人会议ID](https://support.huaweicloud.com/api-meeting/meeting_21_1106.html)](tag:hws)[[查询云会议室及个人会议ID](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_1106.html)](tag:hk)接口获取。 > * vmrID取上述查询接口中返回的id，不是vmrId > * 创建个人会议ID的会议时，使用vmrMode=0的VMR；创建云会议室的会议时，使用vmrMode=1的VMR
    * concurrentParticipants  会议最大与会人数。默认值0。 * 0：无限制 * 大于0：会议最大与会人数
    * supportSimultaneousInterpretation  会议是否支持同声传译。默认值false。 * true:支持 * false:不支持
    * confResType  会议资源类型：  * 0: 并发 * 1: 云会议室 * 2: 网络研讨会 * 3: 预留模式，暂未开放
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startTime' => null,
        'length' => 'int32',
        'subject' => null,
        'mediaTypes' => null,
        'groupuri' => null,
        'attendees' => null,
        'isAutoRecord' => 'int32',
        'encryptMode' => 'int32',
        'language' => null,
        'timeZoneId' => null,
        'recordType' => 'int32',
        'liveAddress' => null,
        'auxAddress' => null,
        'recordAuxStream' => 'int32',
        'confConfigInfo' => null,
        'recordAuthType' => 'int32',
        'vmrFlag' => 'int32',
        'cycleParams' => null,
        'vmrId' => null,
        'concurrentParticipants' => 'int32',
        'supportSimultaneousInterpretation' => null,
        'confResType' => 'int32'
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
    * startTime  会议开始时间（UTC时间）。格式：yyyy-MM-dd HH:mm。 > * 创建预约会议时，如果没有指定开始时间或填空串，则表示会议马上开始 > * 时间是UTC时间，即0时区的时间
    * length  会议持续时长，单位分钟。默认30分钟。最大1440分钟（24小时），最小15分钟。
    * subject  会议主题。最多128个字符。
    * mediaTypes  会议的媒体类型。 - Voice: 语音会议 - HDVideo: 视频会议
    * groupuri  软终端创建即时会议时在当前字段带临时群组ID，由服务器在邀请其他与会者时在或者conference-info头域中携带。长度限制为31个字符。
    * attendees  与会者列表。
    * isAutoRecord  会议是否自动启动录制，在录播类型为:录播、直播+录播时有效。默认为不自动启动。 - 0: 不自动启动录制 - 1: 自动启动录制
    * encryptMode  会议媒体加密模式。默认值由企业级的配置填充。 - 0: 自适应加密 - 1: 强制加密 - 2: 不加密
    * language  会议通知短信或邮件的语言。默认中文。 - zh-CN: 简体中文 - en-US: 美国英文
    * timeZoneId  会议通知中会议时间的时区信息。时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。 > * 举例：“timeZoneID”:\"26\"，则通过华为云会议发送的会议通知中的时间将会标记为如“2021/11/11 星期四 00:00 - 02:00 (GMT) 格林威治标准时间:都柏林, 爱丁堡, 里斯本, 伦敦”。 > * 非周期会议，如果会议通知是通过第三方系统发送，则这个字段不用填写。
    * recordType  录播类型。默认为禁用。 - 0: 禁用 - 1: 直播 - 2: 录播 - 3: 直播+录播
    * liveAddress  主流直播推流地址，在录播类型为 :直播、直播+录播时有效。最大不超过255个字符。
    * auxAddress  辅流直播推流地址，在录播类型为 :直播、直播+录播时有效。最大不超过255个字符。
    * recordAuxStream  是否录制辅流，在录播类型为：录播、录播+直播时有效。默认只录制视频主流，不录制辅流。  - 0: 不录制  - 1: 录制
    * confConfigInfo  confConfigInfo
    * recordAuthType  录播观看鉴权方式，在录播类型为:录播、直播+录播时有效。 - 0: 可通过链接观看/下载 - 1: 企业用户可观看/下载 - 2: 与会者可观看/下载
    * vmrFlag  是否使用云会议室或者个人会议ID召开预约会议。默认0。 - 0: 不使用云会议室或者个人会议ID - 1: 使用云会议室或者个人会议ID
    * cycleParams  cycleParams
    * vmrId  绑定给当前创会帐号的VMR ID。通过[[查询云会议室及个人会议ID](https://support.huaweicloud.com/api-meeting/meeting_21_1106.html)](tag:hws)[[查询云会议室及个人会议ID](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_1106.html)](tag:hk)接口获取。 > * vmrID取上述查询接口中返回的id，不是vmrId > * 创建个人会议ID的会议时，使用vmrMode=0的VMR；创建云会议室的会议时，使用vmrMode=1的VMR
    * concurrentParticipants  会议最大与会人数。默认值0。 * 0：无限制 * 大于0：会议最大与会人数
    * supportSimultaneousInterpretation  会议是否支持同声传译。默认值false。 * true:支持 * false:不支持
    * confResType  会议资源类型：  * 0: 并发 * 1: 云会议室 * 2: 网络研讨会 * 3: 预留模式，暂未开放
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startTime' => 'startTime',
            'length' => 'length',
            'subject' => 'subject',
            'mediaTypes' => 'mediaTypes',
            'groupuri' => 'groupuri',
            'attendees' => 'attendees',
            'isAutoRecord' => 'isAutoRecord',
            'encryptMode' => 'encryptMode',
            'language' => 'language',
            'timeZoneId' => 'timeZoneID',
            'recordType' => 'recordType',
            'liveAddress' => 'liveAddress',
            'auxAddress' => 'auxAddress',
            'recordAuxStream' => 'recordAuxStream',
            'confConfigInfo' => 'confConfigInfo',
            'recordAuthType' => 'recordAuthType',
            'vmrFlag' => 'vmrFlag',
            'cycleParams' => 'cycleParams',
            'vmrId' => 'vmrID',
            'concurrentParticipants' => 'concurrentParticipants',
            'supportSimultaneousInterpretation' => 'supportSimultaneousInterpretation',
            'confResType' => 'confResType'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startTime  会议开始时间（UTC时间）。格式：yyyy-MM-dd HH:mm。 > * 创建预约会议时，如果没有指定开始时间或填空串，则表示会议马上开始 > * 时间是UTC时间，即0时区的时间
    * length  会议持续时长，单位分钟。默认30分钟。最大1440分钟（24小时），最小15分钟。
    * subject  会议主题。最多128个字符。
    * mediaTypes  会议的媒体类型。 - Voice: 语音会议 - HDVideo: 视频会议
    * groupuri  软终端创建即时会议时在当前字段带临时群组ID，由服务器在邀请其他与会者时在或者conference-info头域中携带。长度限制为31个字符。
    * attendees  与会者列表。
    * isAutoRecord  会议是否自动启动录制，在录播类型为:录播、直播+录播时有效。默认为不自动启动。 - 0: 不自动启动录制 - 1: 自动启动录制
    * encryptMode  会议媒体加密模式。默认值由企业级的配置填充。 - 0: 自适应加密 - 1: 强制加密 - 2: 不加密
    * language  会议通知短信或邮件的语言。默认中文。 - zh-CN: 简体中文 - en-US: 美国英文
    * timeZoneId  会议通知中会议时间的时区信息。时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。 > * 举例：“timeZoneID”:\"26\"，则通过华为云会议发送的会议通知中的时间将会标记为如“2021/11/11 星期四 00:00 - 02:00 (GMT) 格林威治标准时间:都柏林, 爱丁堡, 里斯本, 伦敦”。 > * 非周期会议，如果会议通知是通过第三方系统发送，则这个字段不用填写。
    * recordType  录播类型。默认为禁用。 - 0: 禁用 - 1: 直播 - 2: 录播 - 3: 直播+录播
    * liveAddress  主流直播推流地址，在录播类型为 :直播、直播+录播时有效。最大不超过255个字符。
    * auxAddress  辅流直播推流地址，在录播类型为 :直播、直播+录播时有效。最大不超过255个字符。
    * recordAuxStream  是否录制辅流，在录播类型为：录播、录播+直播时有效。默认只录制视频主流，不录制辅流。  - 0: 不录制  - 1: 录制
    * confConfigInfo  confConfigInfo
    * recordAuthType  录播观看鉴权方式，在录播类型为:录播、直播+录播时有效。 - 0: 可通过链接观看/下载 - 1: 企业用户可观看/下载 - 2: 与会者可观看/下载
    * vmrFlag  是否使用云会议室或者个人会议ID召开预约会议。默认0。 - 0: 不使用云会议室或者个人会议ID - 1: 使用云会议室或者个人会议ID
    * cycleParams  cycleParams
    * vmrId  绑定给当前创会帐号的VMR ID。通过[[查询云会议室及个人会议ID](https://support.huaweicloud.com/api-meeting/meeting_21_1106.html)](tag:hws)[[查询云会议室及个人会议ID](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_1106.html)](tag:hk)接口获取。 > * vmrID取上述查询接口中返回的id，不是vmrId > * 创建个人会议ID的会议时，使用vmrMode=0的VMR；创建云会议室的会议时，使用vmrMode=1的VMR
    * concurrentParticipants  会议最大与会人数。默认值0。 * 0：无限制 * 大于0：会议最大与会人数
    * supportSimultaneousInterpretation  会议是否支持同声传译。默认值false。 * true:支持 * false:不支持
    * confResType  会议资源类型：  * 0: 并发 * 1: 云会议室 * 2: 网络研讨会 * 3: 预留模式，暂未开放
    *
    * @var string[]
    */
    protected static $setters = [
            'startTime' => 'setStartTime',
            'length' => 'setLength',
            'subject' => 'setSubject',
            'mediaTypes' => 'setMediaTypes',
            'groupuri' => 'setGroupuri',
            'attendees' => 'setAttendees',
            'isAutoRecord' => 'setIsAutoRecord',
            'encryptMode' => 'setEncryptMode',
            'language' => 'setLanguage',
            'timeZoneId' => 'setTimeZoneId',
            'recordType' => 'setRecordType',
            'liveAddress' => 'setLiveAddress',
            'auxAddress' => 'setAuxAddress',
            'recordAuxStream' => 'setRecordAuxStream',
            'confConfigInfo' => 'setConfConfigInfo',
            'recordAuthType' => 'setRecordAuthType',
            'vmrFlag' => 'setVmrFlag',
            'cycleParams' => 'setCycleParams',
            'vmrId' => 'setVmrId',
            'concurrentParticipants' => 'setConcurrentParticipants',
            'supportSimultaneousInterpretation' => 'setSupportSimultaneousInterpretation',
            'confResType' => 'setConfResType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startTime  会议开始时间（UTC时间）。格式：yyyy-MM-dd HH:mm。 > * 创建预约会议时，如果没有指定开始时间或填空串，则表示会议马上开始 > * 时间是UTC时间，即0时区的时间
    * length  会议持续时长，单位分钟。默认30分钟。最大1440分钟（24小时），最小15分钟。
    * subject  会议主题。最多128个字符。
    * mediaTypes  会议的媒体类型。 - Voice: 语音会议 - HDVideo: 视频会议
    * groupuri  软终端创建即时会议时在当前字段带临时群组ID，由服务器在邀请其他与会者时在或者conference-info头域中携带。长度限制为31个字符。
    * attendees  与会者列表。
    * isAutoRecord  会议是否自动启动录制，在录播类型为:录播、直播+录播时有效。默认为不自动启动。 - 0: 不自动启动录制 - 1: 自动启动录制
    * encryptMode  会议媒体加密模式。默认值由企业级的配置填充。 - 0: 自适应加密 - 1: 强制加密 - 2: 不加密
    * language  会议通知短信或邮件的语言。默认中文。 - zh-CN: 简体中文 - en-US: 美国英文
    * timeZoneId  会议通知中会议时间的时区信息。时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。 > * 举例：“timeZoneID”:\"26\"，则通过华为云会议发送的会议通知中的时间将会标记为如“2021/11/11 星期四 00:00 - 02:00 (GMT) 格林威治标准时间:都柏林, 爱丁堡, 里斯本, 伦敦”。 > * 非周期会议，如果会议通知是通过第三方系统发送，则这个字段不用填写。
    * recordType  录播类型。默认为禁用。 - 0: 禁用 - 1: 直播 - 2: 录播 - 3: 直播+录播
    * liveAddress  主流直播推流地址，在录播类型为 :直播、直播+录播时有效。最大不超过255个字符。
    * auxAddress  辅流直播推流地址，在录播类型为 :直播、直播+录播时有效。最大不超过255个字符。
    * recordAuxStream  是否录制辅流，在录播类型为：录播、录播+直播时有效。默认只录制视频主流，不录制辅流。  - 0: 不录制  - 1: 录制
    * confConfigInfo  confConfigInfo
    * recordAuthType  录播观看鉴权方式，在录播类型为:录播、直播+录播时有效。 - 0: 可通过链接观看/下载 - 1: 企业用户可观看/下载 - 2: 与会者可观看/下载
    * vmrFlag  是否使用云会议室或者个人会议ID召开预约会议。默认0。 - 0: 不使用云会议室或者个人会议ID - 1: 使用云会议室或者个人会议ID
    * cycleParams  cycleParams
    * vmrId  绑定给当前创会帐号的VMR ID。通过[[查询云会议室及个人会议ID](https://support.huaweicloud.com/api-meeting/meeting_21_1106.html)](tag:hws)[[查询云会议室及个人会议ID](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_1106.html)](tag:hk)接口获取。 > * vmrID取上述查询接口中返回的id，不是vmrId > * 创建个人会议ID的会议时，使用vmrMode=0的VMR；创建云会议室的会议时，使用vmrMode=1的VMR
    * concurrentParticipants  会议最大与会人数。默认值0。 * 0：无限制 * 大于0：会议最大与会人数
    * supportSimultaneousInterpretation  会议是否支持同声传译。默认值false。 * true:支持 * false:不支持
    * confResType  会议资源类型：  * 0: 并发 * 1: 云会议室 * 2: 网络研讨会 * 3: 预留模式，暂未开放
    *
    * @var string[]
    */
    protected static $getters = [
            'startTime' => 'getStartTime',
            'length' => 'getLength',
            'subject' => 'getSubject',
            'mediaTypes' => 'getMediaTypes',
            'groupuri' => 'getGroupuri',
            'attendees' => 'getAttendees',
            'isAutoRecord' => 'getIsAutoRecord',
            'encryptMode' => 'getEncryptMode',
            'language' => 'getLanguage',
            'timeZoneId' => 'getTimeZoneId',
            'recordType' => 'getRecordType',
            'liveAddress' => 'getLiveAddress',
            'auxAddress' => 'getAuxAddress',
            'recordAuxStream' => 'getRecordAuxStream',
            'confConfigInfo' => 'getConfConfigInfo',
            'recordAuthType' => 'getRecordAuthType',
            'vmrFlag' => 'getVmrFlag',
            'cycleParams' => 'getCycleParams',
            'vmrId' => 'getVmrId',
            'concurrentParticipants' => 'getConcurrentParticipants',
            'supportSimultaneousInterpretation' => 'getSupportSimultaneousInterpretation',
            'confResType' => 'getConfResType'
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
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['length'] = isset($data['length']) ? $data['length'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['mediaTypes'] = isset($data['mediaTypes']) ? $data['mediaTypes'] : null;
        $this->container['groupuri'] = isset($data['groupuri']) ? $data['groupuri'] : null;
        $this->container['attendees'] = isset($data['attendees']) ? $data['attendees'] : null;
        $this->container['isAutoRecord'] = isset($data['isAutoRecord']) ? $data['isAutoRecord'] : null;
        $this->container['encryptMode'] = isset($data['encryptMode']) ? $data['encryptMode'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['timeZoneId'] = isset($data['timeZoneId']) ? $data['timeZoneId'] : null;
        $this->container['recordType'] = isset($data['recordType']) ? $data['recordType'] : null;
        $this->container['liveAddress'] = isset($data['liveAddress']) ? $data['liveAddress'] : null;
        $this->container['auxAddress'] = isset($data['auxAddress']) ? $data['auxAddress'] : null;
        $this->container['recordAuxStream'] = isset($data['recordAuxStream']) ? $data['recordAuxStream'] : null;
        $this->container['confConfigInfo'] = isset($data['confConfigInfo']) ? $data['confConfigInfo'] : null;
        $this->container['recordAuthType'] = isset($data['recordAuthType']) ? $data['recordAuthType'] : null;
        $this->container['vmrFlag'] = isset($data['vmrFlag']) ? $data['vmrFlag'] : null;
        $this->container['cycleParams'] = isset($data['cycleParams']) ? $data['cycleParams'] : null;
        $this->container['vmrId'] = isset($data['vmrId']) ? $data['vmrId'] : null;
        $this->container['concurrentParticipants'] = isset($data['concurrentParticipants']) ? $data['concurrentParticipants'] : null;
        $this->container['supportSimultaneousInterpretation'] = isset($data['supportSimultaneousInterpretation']) ? $data['supportSimultaneousInterpretation'] : null;
        $this->container['confResType'] = isset($data['confResType']) ? $data['confResType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['length']) && ($this->container['length'] > 1440)) {
                $invalidProperties[] = "invalid value for 'length', must be smaller than or equal to 1440.";
            }
            if (!is_null($this->container['length']) && ($this->container['length'] < 15)) {
                $invalidProperties[] = "invalid value for 'length', must be bigger than or equal to 15.";
            }
            if (!is_null($this->container['subject']) && (mb_strlen($this->container['subject']) > 128)) {
                $invalidProperties[] = "invalid value for 'subject', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['subject']) && (mb_strlen($this->container['subject']) < 0)) {
                $invalidProperties[] = "invalid value for 'subject', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['mediaTypes'] === null) {
            $invalidProperties[] = "'mediaTypes' can't be null";
        }
            if (!is_null($this->container['groupuri']) && (mb_strlen($this->container['groupuri']) > 31)) {
                $invalidProperties[] = "invalid value for 'groupuri', the character length must be smaller than or equal to 31.";
            }
            if (!is_null($this->container['groupuri']) && (mb_strlen($this->container['groupuri']) < 0)) {
                $invalidProperties[] = "invalid value for 'groupuri', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['isAutoRecord']) && ($this->container['isAutoRecord'] > 1)) {
                $invalidProperties[] = "invalid value for 'isAutoRecord', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['isAutoRecord']) && ($this->container['isAutoRecord'] < 0)) {
                $invalidProperties[] = "invalid value for 'isAutoRecord', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['encryptMode']) && ($this->container['encryptMode'] > 2)) {
                $invalidProperties[] = "invalid value for 'encryptMode', must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['encryptMode']) && ($this->container['encryptMode'] < 0)) {
                $invalidProperties[] = "invalid value for 'encryptMode', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['timeZoneId']) && (mb_strlen($this->container['timeZoneId']) > 77)) {
                $invalidProperties[] = "invalid value for 'timeZoneId', the character length must be smaller than or equal to 77.";
            }
            if (!is_null($this->container['timeZoneId']) && (mb_strlen($this->container['timeZoneId']) < 1)) {
                $invalidProperties[] = "invalid value for 'timeZoneId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['recordType']) && ($this->container['recordType'] > 3)) {
                $invalidProperties[] = "invalid value for 'recordType', must be smaller than or equal to 3.";
            }
            if (!is_null($this->container['recordType']) && ($this->container['recordType'] < 0)) {
                $invalidProperties[] = "invalid value for 'recordType', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['liveAddress']) && (mb_strlen($this->container['liveAddress']) > 255)) {
                $invalidProperties[] = "invalid value for 'liveAddress', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['liveAddress']) && (mb_strlen($this->container['liveAddress']) < 0)) {
                $invalidProperties[] = "invalid value for 'liveAddress', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['auxAddress']) && (mb_strlen($this->container['auxAddress']) > 255)) {
                $invalidProperties[] = "invalid value for 'auxAddress', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['auxAddress']) && (mb_strlen($this->container['auxAddress']) < 0)) {
                $invalidProperties[] = "invalid value for 'auxAddress', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['recordAuxStream']) && ($this->container['recordAuxStream'] > 1)) {
                $invalidProperties[] = "invalid value for 'recordAuxStream', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['recordAuxStream']) && ($this->container['recordAuxStream'] < 0)) {
                $invalidProperties[] = "invalid value for 'recordAuxStream', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['recordAuthType']) && ($this->container['recordAuthType'] > 2)) {
                $invalidProperties[] = "invalid value for 'recordAuthType', must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['recordAuthType']) && ($this->container['recordAuthType'] < 0)) {
                $invalidProperties[] = "invalid value for 'recordAuthType', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vmrFlag']) && ($this->container['vmrFlag'] > 1)) {
                $invalidProperties[] = "invalid value for 'vmrFlag', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['vmrFlag']) && ($this->container['vmrFlag'] < 0)) {
                $invalidProperties[] = "invalid value for 'vmrFlag', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vmrId']) && (mb_strlen($this->container['vmrId']) > 512)) {
                $invalidProperties[] = "invalid value for 'vmrId', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['vmrId']) && (mb_strlen($this->container['vmrId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vmrId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['confResType']) && ($this->container['confResType'] > 4)) {
                $invalidProperties[] = "invalid value for 'confResType', must be smaller than or equal to 4.";
            }
            if (!is_null($this->container['confResType']) && ($this->container['confResType'] < 0)) {
                $invalidProperties[] = "invalid value for 'confResType', must be bigger than or equal to 0.";
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
    * Gets startTime
    *  会议开始时间（UTC时间）。格式：yyyy-MM-dd HH:mm。 > * 创建预约会议时，如果没有指定开始时间或填空串，则表示会议马上开始 > * 时间是UTC时间，即0时区的时间
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
    * @param string|null $startTime 会议开始时间（UTC时间）。格式：yyyy-MM-dd HH:mm。 > * 创建预约会议时，如果没有指定开始时间或填空串，则表示会议马上开始 > * 时间是UTC时间，即0时区的时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets length
    *  会议持续时长，单位分钟。默认30分钟。最大1440分钟（24小时），最小15分钟。
    *
    * @return int|null
    */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
    * Sets length
    *
    * @param int|null $length 会议持续时长，单位分钟。默认30分钟。最大1440分钟（24小时），最小15分钟。
    *
    * @return $this
    */
    public function setLength($length)
    {
        $this->container['length'] = $length;
        return $this;
    }

    /**
    * Gets subject
    *  会议主题。最多128个字符。
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
    * @param string|null $subject 会议主题。最多128个字符。
    *
    * @return $this
    */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;
        return $this;
    }

    /**
    * Gets mediaTypes
    *  会议的媒体类型。 - Voice: 语音会议 - HDVideo: 视频会议
    *
    * @return string
    */
    public function getMediaTypes()
    {
        return $this->container['mediaTypes'];
    }

    /**
    * Sets mediaTypes
    *
    * @param string $mediaTypes 会议的媒体类型。 - Voice: 语音会议 - HDVideo: 视频会议
    *
    * @return $this
    */
    public function setMediaTypes($mediaTypes)
    {
        $this->container['mediaTypes'] = $mediaTypes;
        return $this;
    }

    /**
    * Gets groupuri
    *  软终端创建即时会议时在当前字段带临时群组ID，由服务器在邀请其他与会者时在或者conference-info头域中携带。长度限制为31个字符。
    *
    * @return string|null
    */
    public function getGroupuri()
    {
        return $this->container['groupuri'];
    }

    /**
    * Sets groupuri
    *
    * @param string|null $groupuri 软终端创建即时会议时在当前字段带临时群组ID，由服务器在邀请其他与会者时在或者conference-info头域中携带。长度限制为31个字符。
    *
    * @return $this
    */
    public function setGroupuri($groupuri)
    {
        $this->container['groupuri'] = $groupuri;
        return $this;
    }

    /**
    * Gets attendees
    *  与会者列表。
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\RestAttendeeDTO[]|null
    */
    public function getAttendees()
    {
        return $this->container['attendees'];
    }

    /**
    * Sets attendees
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\RestAttendeeDTO[]|null $attendees 与会者列表。
    *
    * @return $this
    */
    public function setAttendees($attendees)
    {
        $this->container['attendees'] = $attendees;
        return $this;
    }

    /**
    * Gets isAutoRecord
    *  会议是否自动启动录制，在录播类型为:录播、直播+录播时有效。默认为不自动启动。 - 0: 不自动启动录制 - 1: 自动启动录制
    *
    * @return int|null
    */
    public function getIsAutoRecord()
    {
        return $this->container['isAutoRecord'];
    }

    /**
    * Sets isAutoRecord
    *
    * @param int|null $isAutoRecord 会议是否自动启动录制，在录播类型为:录播、直播+录播时有效。默认为不自动启动。 - 0: 不自动启动录制 - 1: 自动启动录制
    *
    * @return $this
    */
    public function setIsAutoRecord($isAutoRecord)
    {
        $this->container['isAutoRecord'] = $isAutoRecord;
        return $this;
    }

    /**
    * Gets encryptMode
    *  会议媒体加密模式。默认值由企业级的配置填充。 - 0: 自适应加密 - 1: 强制加密 - 2: 不加密
    *
    * @return int|null
    */
    public function getEncryptMode()
    {
        return $this->container['encryptMode'];
    }

    /**
    * Sets encryptMode
    *
    * @param int|null $encryptMode 会议媒体加密模式。默认值由企业级的配置填充。 - 0: 自适应加密 - 1: 强制加密 - 2: 不加密
    *
    * @return $this
    */
    public function setEncryptMode($encryptMode)
    {
        $this->container['encryptMode'] = $encryptMode;
        return $this;
    }

    /**
    * Gets language
    *  会议通知短信或邮件的语言。默认中文。 - zh-CN: 简体中文 - en-US: 美国英文
    *
    * @return string|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string|null $language 会议通知短信或邮件的语言。默认中文。 - zh-CN: 简体中文 - en-US: 美国英文
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets timeZoneId
    *  会议通知中会议时间的时区信息。时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。 > * 举例：“timeZoneID”:\"26\"，则通过华为云会议发送的会议通知中的时间将会标记为如“2021/11/11 星期四 00:00 - 02:00 (GMT) 格林威治标准时间:都柏林, 爱丁堡, 里斯本, 伦敦”。 > * 非周期会议，如果会议通知是通过第三方系统发送，则这个字段不用填写。
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
    * @param string|null $timeZoneId 会议通知中会议时间的时区信息。时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。 > * 举例：“timeZoneID”:\"26\"，则通过华为云会议发送的会议通知中的时间将会标记为如“2021/11/11 星期四 00:00 - 02:00 (GMT) 格林威治标准时间:都柏林, 爱丁堡, 里斯本, 伦敦”。 > * 非周期会议，如果会议通知是通过第三方系统发送，则这个字段不用填写。
    *
    * @return $this
    */
    public function setTimeZoneId($timeZoneId)
    {
        $this->container['timeZoneId'] = $timeZoneId;
        return $this;
    }

    /**
    * Gets recordType
    *  录播类型。默认为禁用。 - 0: 禁用 - 1: 直播 - 2: 录播 - 3: 直播+录播
    *
    * @return int|null
    */
    public function getRecordType()
    {
        return $this->container['recordType'];
    }

    /**
    * Sets recordType
    *
    * @param int|null $recordType 录播类型。默认为禁用。 - 0: 禁用 - 1: 直播 - 2: 录播 - 3: 直播+录播
    *
    * @return $this
    */
    public function setRecordType($recordType)
    {
        $this->container['recordType'] = $recordType;
        return $this;
    }

    /**
    * Gets liveAddress
    *  主流直播推流地址，在录播类型为 :直播、直播+录播时有效。最大不超过255个字符。
    *
    * @return string|null
    */
    public function getLiveAddress()
    {
        return $this->container['liveAddress'];
    }

    /**
    * Sets liveAddress
    *
    * @param string|null $liveAddress 主流直播推流地址，在录播类型为 :直播、直播+录播时有效。最大不超过255个字符。
    *
    * @return $this
    */
    public function setLiveAddress($liveAddress)
    {
        $this->container['liveAddress'] = $liveAddress;
        return $this;
    }

    /**
    * Gets auxAddress
    *  辅流直播推流地址，在录播类型为 :直播、直播+录播时有效。最大不超过255个字符。
    *
    * @return string|null
    */
    public function getAuxAddress()
    {
        return $this->container['auxAddress'];
    }

    /**
    * Sets auxAddress
    *
    * @param string|null $auxAddress 辅流直播推流地址，在录播类型为 :直播、直播+录播时有效。最大不超过255个字符。
    *
    * @return $this
    */
    public function setAuxAddress($auxAddress)
    {
        $this->container['auxAddress'] = $auxAddress;
        return $this;
    }

    /**
    * Gets recordAuxStream
    *  是否录制辅流，在录播类型为：录播、录播+直播时有效。默认只录制视频主流，不录制辅流。  - 0: 不录制  - 1: 录制
    *
    * @return int|null
    */
    public function getRecordAuxStream()
    {
        return $this->container['recordAuxStream'];
    }

    /**
    * Sets recordAuxStream
    *
    * @param int|null $recordAuxStream 是否录制辅流，在录播类型为：录播、录播+直播时有效。默认只录制视频主流，不录制辅流。  - 0: 不录制  - 1: 录制
    *
    * @return $this
    */
    public function setRecordAuxStream($recordAuxStream)
    {
        $this->container['recordAuxStream'] = $recordAuxStream;
        return $this;
    }

    /**
    * Gets confConfigInfo
    *  confConfigInfo
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\RestConfConfigDTO|null
    */
    public function getConfConfigInfo()
    {
        return $this->container['confConfigInfo'];
    }

    /**
    * Sets confConfigInfo
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\RestConfConfigDTO|null $confConfigInfo confConfigInfo
    *
    * @return $this
    */
    public function setConfConfigInfo($confConfigInfo)
    {
        $this->container['confConfigInfo'] = $confConfigInfo;
        return $this;
    }

    /**
    * Gets recordAuthType
    *  录播观看鉴权方式，在录播类型为:录播、直播+录播时有效。 - 0: 可通过链接观看/下载 - 1: 企业用户可观看/下载 - 2: 与会者可观看/下载
    *
    * @return int|null
    */
    public function getRecordAuthType()
    {
        return $this->container['recordAuthType'];
    }

    /**
    * Sets recordAuthType
    *
    * @param int|null $recordAuthType 录播观看鉴权方式，在录播类型为:录播、直播+录播时有效。 - 0: 可通过链接观看/下载 - 1: 企业用户可观看/下载 - 2: 与会者可观看/下载
    *
    * @return $this
    */
    public function setRecordAuthType($recordAuthType)
    {
        $this->container['recordAuthType'] = $recordAuthType;
        return $this;
    }

    /**
    * Gets vmrFlag
    *  是否使用云会议室或者个人会议ID召开预约会议。默认0。 - 0: 不使用云会议室或者个人会议ID - 1: 使用云会议室或者个人会议ID
    *
    * @return int|null
    */
    public function getVmrFlag()
    {
        return $this->container['vmrFlag'];
    }

    /**
    * Sets vmrFlag
    *
    * @param int|null $vmrFlag 是否使用云会议室或者个人会议ID召开预约会议。默认0。 - 0: 不使用云会议室或者个人会议ID - 1: 使用云会议室或者个人会议ID
    *
    * @return $this
    */
    public function setVmrFlag($vmrFlag)
    {
        $this->container['vmrFlag'] = $vmrFlag;
        return $this;
    }

    /**
    * Gets cycleParams
    *  cycleParams
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\CycleParams|null
    */
    public function getCycleParams()
    {
        return $this->container['cycleParams'];
    }

    /**
    * Sets cycleParams
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\CycleParams|null $cycleParams cycleParams
    *
    * @return $this
    */
    public function setCycleParams($cycleParams)
    {
        $this->container['cycleParams'] = $cycleParams;
        return $this;
    }

    /**
    * Gets vmrId
    *  绑定给当前创会帐号的VMR ID。通过[[查询云会议室及个人会议ID](https://support.huaweicloud.com/api-meeting/meeting_21_1106.html)](tag:hws)[[查询云会议室及个人会议ID](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_1106.html)](tag:hk)接口获取。 > * vmrID取上述查询接口中返回的id，不是vmrId > * 创建个人会议ID的会议时，使用vmrMode=0的VMR；创建云会议室的会议时，使用vmrMode=1的VMR
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
    * @param string|null $vmrId 绑定给当前创会帐号的VMR ID。通过[[查询云会议室及个人会议ID](https://support.huaweicloud.com/api-meeting/meeting_21_1106.html)](tag:hws)[[查询云会议室及个人会议ID](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_1106.html)](tag:hk)接口获取。 > * vmrID取上述查询接口中返回的id，不是vmrId > * 创建个人会议ID的会议时，使用vmrMode=0的VMR；创建云会议室的会议时，使用vmrMode=1的VMR
    *
    * @return $this
    */
    public function setVmrId($vmrId)
    {
        $this->container['vmrId'] = $vmrId;
        return $this;
    }

    /**
    * Gets concurrentParticipants
    *  会议最大与会人数。默认值0。 * 0：无限制 * 大于0：会议最大与会人数
    *
    * @return int|null
    */
    public function getConcurrentParticipants()
    {
        return $this->container['concurrentParticipants'];
    }

    /**
    * Sets concurrentParticipants
    *
    * @param int|null $concurrentParticipants 会议最大与会人数。默认值0。 * 0：无限制 * 大于0：会议最大与会人数
    *
    * @return $this
    */
    public function setConcurrentParticipants($concurrentParticipants)
    {
        $this->container['concurrentParticipants'] = $concurrentParticipants;
        return $this;
    }

    /**
    * Gets supportSimultaneousInterpretation
    *  会议是否支持同声传译。默认值false。 * true:支持 * false:不支持
    *
    * @return bool|null
    */
    public function getSupportSimultaneousInterpretation()
    {
        return $this->container['supportSimultaneousInterpretation'];
    }

    /**
    * Sets supportSimultaneousInterpretation
    *
    * @param bool|null $supportSimultaneousInterpretation 会议是否支持同声传译。默认值false。 * true:支持 * false:不支持
    *
    * @return $this
    */
    public function setSupportSimultaneousInterpretation($supportSimultaneousInterpretation)
    {
        $this->container['supportSimultaneousInterpretation'] = $supportSimultaneousInterpretation;
        return $this;
    }

    /**
    * Gets confResType
    *  会议资源类型：  * 0: 并发 * 1: 云会议室 * 2: 网络研讨会 * 3: 预留模式，暂未开放
    *
    * @return int|null
    */
    public function getConfResType()
    {
        return $this->container['confResType'];
    }

    /**
    * Sets confResType
    *
    * @param int|null $confResType 会议资源类型：  * 0: 并发 * 1: 云会议室 * 2: 网络研讨会 * 3: 预留模式，暂未开放
    *
    * @return $this
    */
    public function setConfResType($confResType)
    {
        $this->container['confResType'] = $confResType;
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

