<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConferenceInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConferenceInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * conferenceId  会议ID。
    * subject  会议主题。
    * size  会议预约时添加的会议者数量。
    * timeZoneId  会议通知中会议时间的时区信息。时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。
    * startTime  会议起始时间 (YYYY-MM-DD HH:MM )。
    * endTime  会议结束时间 (YYYY-MM-DD HH:MM )。
    * mediaTypes  会议的媒体类型。 由1个或多个枚举String组成，多个枚举时，每个枚举值之间通过”,”逗号分隔。 - Voice: 语音 - Video: 标清视频 - HDVideo: 高清视频 - Data: 数据
    * conferenceState  会议状态。 - Schedule: 预定状态 - Creating: 正在创建状态 - Created: 会议已经被创建，并正在召开 - Destroyed: 会议已经关闭
    * language  会议通知短信或邮件的语言。默认中文。 * zh-CN：中文 * en-US：英文
    * accessNumber  会议接入的SIP号码。
    * passwordEntry  会议密码。 > * 创建会议时，返回主持人密码和来宾密码 > * 主持人查询会议时，返回主持人密码和来宾密码来 > * 宾查询会议时，返回来宾密码
    * userUuid  会议预订者的用户UUID。
    * scheduserName  会议预订者名称。
    * conferenceType  会议类型。 - 0: 普通会议 - 2: 周期性会议
    * confType  会议类型。 - FUTURE：将来开始的会议（创建时） - IMMEDIATELY：立即开始的会议（创建时） - CYCLE：周期会议
    * cycleParams  cycleParams
    * isAutoMute  是否入会自动静音。 - 0: 不自动静音 - 1: 自动静音
    * isAutoRecord  是否自动开启云录制。 - 0: 不自动启动 - 1: 自动启动
    * chairJoinUri  主持人会议链接地址。
    * guestJoinUri  普通与会者会议链接地址。
    * audienceJoinUri  网络研讨会观众会议链接地址。
    * recordType  录播类型。 - 0: 禁用 - 1: 直播 - 2: 录播 - 3: 直播+录播
    * auxAddress  辅流直播推流地址。
    * liveAddress  主流直播推流地址。
    * recordAuxStream  是否录制辅流。  - 0: 否  - 1: 是
    * recordAuthType  观看/下载录播的鉴权方式。  - 0: 可通过链接观看/下载  - 1: 企业用户可观看/下载  - 2: 与会者可观看/下载
    * liveUrl  直播观看地址。
    * confConfigInfo  confConfigInfo
    * vmrFlag  是否使用云会议室或个人会议ID召开预约会议。 - 0: 不使用云会议室或个人会议ID - 1: 使用云会议室或个人会议ID
    * isHasRecordFile  是否有会议录制文件。仅历史会议查询时返回。 - true: 有录制文件 - false: 没有录制文件
    * vmrConferenceId  云会议室会议ID或个人会议ID，如果vmrFlag为\"1\"，则该字段不为空。
    * confUuid  会议的UUID。 > * 只有创建立即开始的会议才返回UUID，如果是预约未来的会议，不会返回UUID > * 可以通过[[查询历史会议列表](https://support.huaweicloud.com/api-meeting/meeting_21_0051.html)](tag:hws)[[查询历史会议列表](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0051.html)](tag:hk)获取历史会议的UUID
    * partAttendeeInfo  被邀请的部分与会者信息。 > * 只返回被邀请的前20条软终端与会者信息和前20条硬终端与会者信息 > * 不返回会中主动加入的与会者信息 > * “[[查询会议列表](https://support.huaweicloud.com/api-meeting/meeting_21_0017.html)](tag:hws)[[查询会议列表](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0017.html)](tag:hk)”和“[[查询会议详情](https://support.huaweicloud.com/api-meeting/meeting_21_0018.html)](tag:hws)[[查询会议详情](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0018.html)](tag:hk)”接口，返回预约会议时邀请的与会者和会中主持人邀请的与会者 > * “[[查询在线会议列表](https://support.huaweicloud.com/api-meeting/meeting_21_0025.html)](tag:hws)[[查询在线会议列表](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0025.html)](tag:hk)”、“[[查询在线会议详情](https://support.huaweicloud.com/api-meeting/meeting_21_0026.html)](tag:hws)[[查询在线会议详情](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0026.html)](tag:hk)”、“[[查询历史会议列表](https://support.huaweicloud.com/api-meeting/meeting_21_0051.html)](tag:hws)[[查询历史会议列表](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0051.html)](tag:hk)”和“[[查询历史会议详情](https://support.huaweicloud.com/api-meeting/meeting_21_0052.html)](tag:hws)[[查询历史会议详情](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0052.html)](tag:hk)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       ”接口返回预约会议时邀请的与会者。不返回会中主持人邀请的与会者
    * terminlCount  硬终端个数，如IdeaHub，TE30等。
    * normalCount  软终端个数，如PC端、手机端App等。
    * deptName  会议预定者的企业名称。
    * vmrId  云会议室的ID。
    * role  与会者角色。 * chair ：主持人 * general ：来宾 * audience ： 观众 > * 仅在查询会议详情时返回 > * 返回查询者本身的角色
    * webinar  是否是网络研讨会。
    * onlineAttendeeAmount  当前在线与会人数。包含被邀入会和主动入会的与会者。 > 仅在“[[查询在线会议列表](https://support.huaweicloud.com/api-meeting/meeting_21_0025.html)](tag:hws)[[查询在线会议列表](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0025.html)](tag:hk)”接口中返回。
    * multiStreamFlag  标识是否为多流视频会议。 * 1：多流会议
    * confMode  会议类型模型。 * COMMON：MCU会议 * RTC：MMR会议
    * scheduleVmr  VMR预约记录。 true: VMR预约记录 false：普通会议 > 该参数将废弃，请勿使用。
    * concurrentParticipants  会议最大与会人数。默认值0。 * 0：无限制 * 大于0：会议最大与会人数
    * picDisplay  picDisplay
    * subConfs  周期子会议列表。
    * cycleSubConfId  第一个周期子会议的UUID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'conferenceId' => 'string',
            'subject' => 'string',
            'size' => 'int',
            'timeZoneId' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'mediaTypes' => 'string',
            'conferenceState' => 'string',
            'language' => 'string',
            'accessNumber' => 'string',
            'passwordEntry' => '\HuaweiCloud\SDK\Meeting\V1\Model\PasswordEntry[]',
            'userUuid' => 'string',
            'scheduserName' => 'string',
            'conferenceType' => 'int',
            'confType' => 'string',
            'cycleParams' => '\HuaweiCloud\SDK\Meeting\V1\Model\CycleParams',
            'isAutoMute' => 'int',
            'isAutoRecord' => 'int',
            'chairJoinUri' => 'string',
            'guestJoinUri' => 'string',
            'audienceJoinUri' => 'string',
            'recordType' => 'int',
            'auxAddress' => 'string',
            'liveAddress' => 'string',
            'recordAuxStream' => 'int',
            'recordAuthType' => 'int',
            'liveUrl' => 'string',
            'confConfigInfo' => '\HuaweiCloud\SDK\Meeting\V1\Model\RestConfConfigDTO',
            'vmrFlag' => 'int',
            'isHasRecordFile' => 'bool',
            'vmrConferenceId' => 'string',
            'confUuid' => 'string',
            'partAttendeeInfo' => '\HuaweiCloud\SDK\Meeting\V1\Model\PartAttendee[]',
            'terminlCount' => 'int',
            'normalCount' => 'int',
            'deptName' => 'string',
            'vmrId' => 'string',
            'role' => 'string',
            'webinar' => 'bool',
            'onlineAttendeeAmount' => 'int',
            'multiStreamFlag' => 'int',
            'confMode' => 'string',
            'scheduleVmr' => 'bool',
            'concurrentParticipants' => 'int',
            'picDisplay' => '\HuaweiCloud\SDK\Meeting\V1\Model\MultiPicDisplayDO',
            'subConfs' => '\HuaweiCloud\SDK\Meeting\V1\Model\CycleSubConf[]',
            'cycleSubConfId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * conferenceId  会议ID。
    * subject  会议主题。
    * size  会议预约时添加的会议者数量。
    * timeZoneId  会议通知中会议时间的时区信息。时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。
    * startTime  会议起始时间 (YYYY-MM-DD HH:MM )。
    * endTime  会议结束时间 (YYYY-MM-DD HH:MM )。
    * mediaTypes  会议的媒体类型。 由1个或多个枚举String组成，多个枚举时，每个枚举值之间通过”,”逗号分隔。 - Voice: 语音 - Video: 标清视频 - HDVideo: 高清视频 - Data: 数据
    * conferenceState  会议状态。 - Schedule: 预定状态 - Creating: 正在创建状态 - Created: 会议已经被创建，并正在召开 - Destroyed: 会议已经关闭
    * language  会议通知短信或邮件的语言。默认中文。 * zh-CN：中文 * en-US：英文
    * accessNumber  会议接入的SIP号码。
    * passwordEntry  会议密码。 > * 创建会议时，返回主持人密码和来宾密码 > * 主持人查询会议时，返回主持人密码和来宾密码来 > * 宾查询会议时，返回来宾密码
    * userUuid  会议预订者的用户UUID。
    * scheduserName  会议预订者名称。
    * conferenceType  会议类型。 - 0: 普通会议 - 2: 周期性会议
    * confType  会议类型。 - FUTURE：将来开始的会议（创建时） - IMMEDIATELY：立即开始的会议（创建时） - CYCLE：周期会议
    * cycleParams  cycleParams
    * isAutoMute  是否入会自动静音。 - 0: 不自动静音 - 1: 自动静音
    * isAutoRecord  是否自动开启云录制。 - 0: 不自动启动 - 1: 自动启动
    * chairJoinUri  主持人会议链接地址。
    * guestJoinUri  普通与会者会议链接地址。
    * audienceJoinUri  网络研讨会观众会议链接地址。
    * recordType  录播类型。 - 0: 禁用 - 1: 直播 - 2: 录播 - 3: 直播+录播
    * auxAddress  辅流直播推流地址。
    * liveAddress  主流直播推流地址。
    * recordAuxStream  是否录制辅流。  - 0: 否  - 1: 是
    * recordAuthType  观看/下载录播的鉴权方式。  - 0: 可通过链接观看/下载  - 1: 企业用户可观看/下载  - 2: 与会者可观看/下载
    * liveUrl  直播观看地址。
    * confConfigInfo  confConfigInfo
    * vmrFlag  是否使用云会议室或个人会议ID召开预约会议。 - 0: 不使用云会议室或个人会议ID - 1: 使用云会议室或个人会议ID
    * isHasRecordFile  是否有会议录制文件。仅历史会议查询时返回。 - true: 有录制文件 - false: 没有录制文件
    * vmrConferenceId  云会议室会议ID或个人会议ID，如果vmrFlag为\"1\"，则该字段不为空。
    * confUuid  会议的UUID。 > * 只有创建立即开始的会议才返回UUID，如果是预约未来的会议，不会返回UUID > * 可以通过[[查询历史会议列表](https://support.huaweicloud.com/api-meeting/meeting_21_0051.html)](tag:hws)[[查询历史会议列表](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0051.html)](tag:hk)获取历史会议的UUID
    * partAttendeeInfo  被邀请的部分与会者信息。 > * 只返回被邀请的前20条软终端与会者信息和前20条硬终端与会者信息 > * 不返回会中主动加入的与会者信息 > * “[[查询会议列表](https://support.huaweicloud.com/api-meeting/meeting_21_0017.html)](tag:hws)[[查询会议列表](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0017.html)](tag:hk)”和“[[查询会议详情](https://support.huaweicloud.com/api-meeting/meeting_21_0018.html)](tag:hws)[[查询会议详情](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0018.html)](tag:hk)”接口，返回预约会议时邀请的与会者和会中主持人邀请的与会者 > * “[[查询在线会议列表](https://support.huaweicloud.com/api-meeting/meeting_21_0025.html)](tag:hws)[[查询在线会议列表](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0025.html)](tag:hk)”、“[[查询在线会议详情](https://support.huaweicloud.com/api-meeting/meeting_21_0026.html)](tag:hws)[[查询在线会议详情](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0026.html)](tag:hk)”、“[[查询历史会议列表](https://support.huaweicloud.com/api-meeting/meeting_21_0051.html)](tag:hws)[[查询历史会议列表](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0051.html)](tag:hk)”和“[[查询历史会议详情](https://support.huaweicloud.com/api-meeting/meeting_21_0052.html)](tag:hws)[[查询历史会议详情](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0052.html)](tag:hk)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       ”接口返回预约会议时邀请的与会者。不返回会中主持人邀请的与会者
    * terminlCount  硬终端个数，如IdeaHub，TE30等。
    * normalCount  软终端个数，如PC端、手机端App等。
    * deptName  会议预定者的企业名称。
    * vmrId  云会议室的ID。
    * role  与会者角色。 * chair ：主持人 * general ：来宾 * audience ： 观众 > * 仅在查询会议详情时返回 > * 返回查询者本身的角色
    * webinar  是否是网络研讨会。
    * onlineAttendeeAmount  当前在线与会人数。包含被邀入会和主动入会的与会者。 > 仅在“[[查询在线会议列表](https://support.huaweicloud.com/api-meeting/meeting_21_0025.html)](tag:hws)[[查询在线会议列表](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0025.html)](tag:hk)”接口中返回。
    * multiStreamFlag  标识是否为多流视频会议。 * 1：多流会议
    * confMode  会议类型模型。 * COMMON：MCU会议 * RTC：MMR会议
    * scheduleVmr  VMR预约记录。 true: VMR预约记录 false：普通会议 > 该参数将废弃，请勿使用。
    * concurrentParticipants  会议最大与会人数。默认值0。 * 0：无限制 * 大于0：会议最大与会人数
    * picDisplay  picDisplay
    * subConfs  周期子会议列表。
    * cycleSubConfId  第一个周期子会议的UUID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'conferenceId' => null,
        'subject' => null,
        'size' => 'int32',
        'timeZoneId' => null,
        'startTime' => null,
        'endTime' => null,
        'mediaTypes' => null,
        'conferenceState' => null,
        'language' => null,
        'accessNumber' => null,
        'passwordEntry' => null,
        'userUuid' => null,
        'scheduserName' => null,
        'conferenceType' => 'int32',
        'confType' => null,
        'cycleParams' => null,
        'isAutoMute' => 'int32',
        'isAutoRecord' => 'int32',
        'chairJoinUri' => null,
        'guestJoinUri' => null,
        'audienceJoinUri' => null,
        'recordType' => 'int32',
        'auxAddress' => null,
        'liveAddress' => null,
        'recordAuxStream' => 'int32',
        'recordAuthType' => 'int32',
        'liveUrl' => null,
        'confConfigInfo' => null,
        'vmrFlag' => 'int32',
        'isHasRecordFile' => null,
        'vmrConferenceId' => null,
        'confUuid' => null,
        'partAttendeeInfo' => null,
        'terminlCount' => 'int32',
        'normalCount' => 'int32',
        'deptName' => null,
        'vmrId' => null,
        'role' => null,
        'webinar' => null,
        'onlineAttendeeAmount' => 'int32',
        'multiStreamFlag' => 'int32',
        'confMode' => null,
        'scheduleVmr' => null,
        'concurrentParticipants' => 'int32',
        'picDisplay' => null,
        'subConfs' => null,
        'cycleSubConfId' => null
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
    * conferenceId  会议ID。
    * subject  会议主题。
    * size  会议预约时添加的会议者数量。
    * timeZoneId  会议通知中会议时间的时区信息。时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。
    * startTime  会议起始时间 (YYYY-MM-DD HH:MM )。
    * endTime  会议结束时间 (YYYY-MM-DD HH:MM )。
    * mediaTypes  会议的媒体类型。 由1个或多个枚举String组成，多个枚举时，每个枚举值之间通过”,”逗号分隔。 - Voice: 语音 - Video: 标清视频 - HDVideo: 高清视频 - Data: 数据
    * conferenceState  会议状态。 - Schedule: 预定状态 - Creating: 正在创建状态 - Created: 会议已经被创建，并正在召开 - Destroyed: 会议已经关闭
    * language  会议通知短信或邮件的语言。默认中文。 * zh-CN：中文 * en-US：英文
    * accessNumber  会议接入的SIP号码。
    * passwordEntry  会议密码。 > * 创建会议时，返回主持人密码和来宾密码 > * 主持人查询会议时，返回主持人密码和来宾密码来 > * 宾查询会议时，返回来宾密码
    * userUuid  会议预订者的用户UUID。
    * scheduserName  会议预订者名称。
    * conferenceType  会议类型。 - 0: 普通会议 - 2: 周期性会议
    * confType  会议类型。 - FUTURE：将来开始的会议（创建时） - IMMEDIATELY：立即开始的会议（创建时） - CYCLE：周期会议
    * cycleParams  cycleParams
    * isAutoMute  是否入会自动静音。 - 0: 不自动静音 - 1: 自动静音
    * isAutoRecord  是否自动开启云录制。 - 0: 不自动启动 - 1: 自动启动
    * chairJoinUri  主持人会议链接地址。
    * guestJoinUri  普通与会者会议链接地址。
    * audienceJoinUri  网络研讨会观众会议链接地址。
    * recordType  录播类型。 - 0: 禁用 - 1: 直播 - 2: 录播 - 3: 直播+录播
    * auxAddress  辅流直播推流地址。
    * liveAddress  主流直播推流地址。
    * recordAuxStream  是否录制辅流。  - 0: 否  - 1: 是
    * recordAuthType  观看/下载录播的鉴权方式。  - 0: 可通过链接观看/下载  - 1: 企业用户可观看/下载  - 2: 与会者可观看/下载
    * liveUrl  直播观看地址。
    * confConfigInfo  confConfigInfo
    * vmrFlag  是否使用云会议室或个人会议ID召开预约会议。 - 0: 不使用云会议室或个人会议ID - 1: 使用云会议室或个人会议ID
    * isHasRecordFile  是否有会议录制文件。仅历史会议查询时返回。 - true: 有录制文件 - false: 没有录制文件
    * vmrConferenceId  云会议室会议ID或个人会议ID，如果vmrFlag为\"1\"，则该字段不为空。
    * confUuid  会议的UUID。 > * 只有创建立即开始的会议才返回UUID，如果是预约未来的会议，不会返回UUID > * 可以通过[[查询历史会议列表](https://support.huaweicloud.com/api-meeting/meeting_21_0051.html)](tag:hws)[[查询历史会议列表](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0051.html)](tag:hk)获取历史会议的UUID
    * partAttendeeInfo  被邀请的部分与会者信息。 > * 只返回被邀请的前20条软终端与会者信息和前20条硬终端与会者信息 > * 不返回会中主动加入的与会者信息 > * “[[查询会议列表](https://support.huaweicloud.com/api-meeting/meeting_21_0017.html)](tag:hws)[[查询会议列表](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0017.html)](tag:hk)”和“[[查询会议详情](https://support.huaweicloud.com/api-meeting/meeting_21_0018.html)](tag:hws)[[查询会议详情](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0018.html)](tag:hk)”接口，返回预约会议时邀请的与会者和会中主持人邀请的与会者 > * “[[查询在线会议列表](https://support.huaweicloud.com/api-meeting/meeting_21_0025.html)](tag:hws)[[查询在线会议列表](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0025.html)](tag:hk)”、“[[查询在线会议详情](https://support.huaweicloud.com/api-meeting/meeting_21_0026.html)](tag:hws)[[查询在线会议详情](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0026.html)](tag:hk)”、“[[查询历史会议列表](https://support.huaweicloud.com/api-meeting/meeting_21_0051.html)](tag:hws)[[查询历史会议列表](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0051.html)](tag:hk)”和“[[查询历史会议详情](https://support.huaweicloud.com/api-meeting/meeting_21_0052.html)](tag:hws)[[查询历史会议详情](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0052.html)](tag:hk)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       ”接口返回预约会议时邀请的与会者。不返回会中主持人邀请的与会者
    * terminlCount  硬终端个数，如IdeaHub，TE30等。
    * normalCount  软终端个数，如PC端、手机端App等。
    * deptName  会议预定者的企业名称。
    * vmrId  云会议室的ID。
    * role  与会者角色。 * chair ：主持人 * general ：来宾 * audience ： 观众 > * 仅在查询会议详情时返回 > * 返回查询者本身的角色
    * webinar  是否是网络研讨会。
    * onlineAttendeeAmount  当前在线与会人数。包含被邀入会和主动入会的与会者。 > 仅在“[[查询在线会议列表](https://support.huaweicloud.com/api-meeting/meeting_21_0025.html)](tag:hws)[[查询在线会议列表](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0025.html)](tag:hk)”接口中返回。
    * multiStreamFlag  标识是否为多流视频会议。 * 1：多流会议
    * confMode  会议类型模型。 * COMMON：MCU会议 * RTC：MMR会议
    * scheduleVmr  VMR预约记录。 true: VMR预约记录 false：普通会议 > 该参数将废弃，请勿使用。
    * concurrentParticipants  会议最大与会人数。默认值0。 * 0：无限制 * 大于0：会议最大与会人数
    * picDisplay  picDisplay
    * subConfs  周期子会议列表。
    * cycleSubConfId  第一个周期子会议的UUID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'conferenceId' => 'conferenceID',
            'subject' => 'subject',
            'size' => 'size',
            'timeZoneId' => 'timeZoneID',
            'startTime' => 'startTime',
            'endTime' => 'endTime',
            'mediaTypes' => 'mediaTypes',
            'conferenceState' => 'conferenceState',
            'language' => 'language',
            'accessNumber' => 'accessNumber',
            'passwordEntry' => 'passwordEntry',
            'userUuid' => 'userUUID',
            'scheduserName' => 'scheduserName',
            'conferenceType' => 'conferenceType',
            'confType' => 'confType',
            'cycleParams' => 'cycleParams',
            'isAutoMute' => 'isAutoMute',
            'isAutoRecord' => 'isAutoRecord',
            'chairJoinUri' => 'chairJoinUri',
            'guestJoinUri' => 'guestJoinUri',
            'audienceJoinUri' => 'audienceJoinUri',
            'recordType' => 'recordType',
            'auxAddress' => 'auxAddress',
            'liveAddress' => 'liveAddress',
            'recordAuxStream' => 'recordAuxStream',
            'recordAuthType' => 'recordAuthType',
            'liveUrl' => 'liveUrl',
            'confConfigInfo' => 'confConfigInfo',
            'vmrFlag' => 'vmrFlag',
            'isHasRecordFile' => 'isHasRecordFile',
            'vmrConferenceId' => 'vmrConferenceID',
            'confUuid' => 'confUUID',
            'partAttendeeInfo' => 'partAttendeeInfo',
            'terminlCount' => 'terminlCount',
            'normalCount' => 'normalCount',
            'deptName' => 'deptName',
            'vmrId' => 'vmrID',
            'role' => 'role',
            'webinar' => 'webinar',
            'onlineAttendeeAmount' => 'onlineAttendeeAmount',
            'multiStreamFlag' => 'multiStreamFlag',
            'confMode' => 'confMode',
            'scheduleVmr' => 'scheduleVmr',
            'concurrentParticipants' => 'concurrentParticipants',
            'picDisplay' => 'picDisplay',
            'subConfs' => 'subConfs',
            'cycleSubConfId' => 'cycleSubConfID'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * conferenceId  会议ID。
    * subject  会议主题。
    * size  会议预约时添加的会议者数量。
    * timeZoneId  会议通知中会议时间的时区信息。时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。
    * startTime  会议起始时间 (YYYY-MM-DD HH:MM )。
    * endTime  会议结束时间 (YYYY-MM-DD HH:MM )。
    * mediaTypes  会议的媒体类型。 由1个或多个枚举String组成，多个枚举时，每个枚举值之间通过”,”逗号分隔。 - Voice: 语音 - Video: 标清视频 - HDVideo: 高清视频 - Data: 数据
    * conferenceState  会议状态。 - Schedule: 预定状态 - Creating: 正在创建状态 - Created: 会议已经被创建，并正在召开 - Destroyed: 会议已经关闭
    * language  会议通知短信或邮件的语言。默认中文。 * zh-CN：中文 * en-US：英文
    * accessNumber  会议接入的SIP号码。
    * passwordEntry  会议密码。 > * 创建会议时，返回主持人密码和来宾密码 > * 主持人查询会议时，返回主持人密码和来宾密码来 > * 宾查询会议时，返回来宾密码
    * userUuid  会议预订者的用户UUID。
    * scheduserName  会议预订者名称。
    * conferenceType  会议类型。 - 0: 普通会议 - 2: 周期性会议
    * confType  会议类型。 - FUTURE：将来开始的会议（创建时） - IMMEDIATELY：立即开始的会议（创建时） - CYCLE：周期会议
    * cycleParams  cycleParams
    * isAutoMute  是否入会自动静音。 - 0: 不自动静音 - 1: 自动静音
    * isAutoRecord  是否自动开启云录制。 - 0: 不自动启动 - 1: 自动启动
    * chairJoinUri  主持人会议链接地址。
    * guestJoinUri  普通与会者会议链接地址。
    * audienceJoinUri  网络研讨会观众会议链接地址。
    * recordType  录播类型。 - 0: 禁用 - 1: 直播 - 2: 录播 - 3: 直播+录播
    * auxAddress  辅流直播推流地址。
    * liveAddress  主流直播推流地址。
    * recordAuxStream  是否录制辅流。  - 0: 否  - 1: 是
    * recordAuthType  观看/下载录播的鉴权方式。  - 0: 可通过链接观看/下载  - 1: 企业用户可观看/下载  - 2: 与会者可观看/下载
    * liveUrl  直播观看地址。
    * confConfigInfo  confConfigInfo
    * vmrFlag  是否使用云会议室或个人会议ID召开预约会议。 - 0: 不使用云会议室或个人会议ID - 1: 使用云会议室或个人会议ID
    * isHasRecordFile  是否有会议录制文件。仅历史会议查询时返回。 - true: 有录制文件 - false: 没有录制文件
    * vmrConferenceId  云会议室会议ID或个人会议ID，如果vmrFlag为\"1\"，则该字段不为空。
    * confUuid  会议的UUID。 > * 只有创建立即开始的会议才返回UUID，如果是预约未来的会议，不会返回UUID > * 可以通过[[查询历史会议列表](https://support.huaweicloud.com/api-meeting/meeting_21_0051.html)](tag:hws)[[查询历史会议列表](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0051.html)](tag:hk)获取历史会议的UUID
    * partAttendeeInfo  被邀请的部分与会者信息。 > * 只返回被邀请的前20条软终端与会者信息和前20条硬终端与会者信息 > * 不返回会中主动加入的与会者信息 > * “[[查询会议列表](https://support.huaweicloud.com/api-meeting/meeting_21_0017.html)](tag:hws)[[查询会议列表](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0017.html)](tag:hk)”和“[[查询会议详情](https://support.huaweicloud.com/api-meeting/meeting_21_0018.html)](tag:hws)[[查询会议详情](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0018.html)](tag:hk)”接口，返回预约会议时邀请的与会者和会中主持人邀请的与会者 > * “[[查询在线会议列表](https://support.huaweicloud.com/api-meeting/meeting_21_0025.html)](tag:hws)[[查询在线会议列表](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0025.html)](tag:hk)”、“[[查询在线会议详情](https://support.huaweicloud.com/api-meeting/meeting_21_0026.html)](tag:hws)[[查询在线会议详情](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0026.html)](tag:hk)”、“[[查询历史会议列表](https://support.huaweicloud.com/api-meeting/meeting_21_0051.html)](tag:hws)[[查询历史会议列表](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0051.html)](tag:hk)”和“[[查询历史会议详情](https://support.huaweicloud.com/api-meeting/meeting_21_0052.html)](tag:hws)[[查询历史会议详情](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0052.html)](tag:hk)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       ”接口返回预约会议时邀请的与会者。不返回会中主持人邀请的与会者
    * terminlCount  硬终端个数，如IdeaHub，TE30等。
    * normalCount  软终端个数，如PC端、手机端App等。
    * deptName  会议预定者的企业名称。
    * vmrId  云会议室的ID。
    * role  与会者角色。 * chair ：主持人 * general ：来宾 * audience ： 观众 > * 仅在查询会议详情时返回 > * 返回查询者本身的角色
    * webinar  是否是网络研讨会。
    * onlineAttendeeAmount  当前在线与会人数。包含被邀入会和主动入会的与会者。 > 仅在“[[查询在线会议列表](https://support.huaweicloud.com/api-meeting/meeting_21_0025.html)](tag:hws)[[查询在线会议列表](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0025.html)](tag:hk)”接口中返回。
    * multiStreamFlag  标识是否为多流视频会议。 * 1：多流会议
    * confMode  会议类型模型。 * COMMON：MCU会议 * RTC：MMR会议
    * scheduleVmr  VMR预约记录。 true: VMR预约记录 false：普通会议 > 该参数将废弃，请勿使用。
    * concurrentParticipants  会议最大与会人数。默认值0。 * 0：无限制 * 大于0：会议最大与会人数
    * picDisplay  picDisplay
    * subConfs  周期子会议列表。
    * cycleSubConfId  第一个周期子会议的UUID。
    *
    * @var string[]
    */
    protected static $setters = [
            'conferenceId' => 'setConferenceId',
            'subject' => 'setSubject',
            'size' => 'setSize',
            'timeZoneId' => 'setTimeZoneId',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'mediaTypes' => 'setMediaTypes',
            'conferenceState' => 'setConferenceState',
            'language' => 'setLanguage',
            'accessNumber' => 'setAccessNumber',
            'passwordEntry' => 'setPasswordEntry',
            'userUuid' => 'setUserUuid',
            'scheduserName' => 'setScheduserName',
            'conferenceType' => 'setConferenceType',
            'confType' => 'setConfType',
            'cycleParams' => 'setCycleParams',
            'isAutoMute' => 'setIsAutoMute',
            'isAutoRecord' => 'setIsAutoRecord',
            'chairJoinUri' => 'setChairJoinUri',
            'guestJoinUri' => 'setGuestJoinUri',
            'audienceJoinUri' => 'setAudienceJoinUri',
            'recordType' => 'setRecordType',
            'auxAddress' => 'setAuxAddress',
            'liveAddress' => 'setLiveAddress',
            'recordAuxStream' => 'setRecordAuxStream',
            'recordAuthType' => 'setRecordAuthType',
            'liveUrl' => 'setLiveUrl',
            'confConfigInfo' => 'setConfConfigInfo',
            'vmrFlag' => 'setVmrFlag',
            'isHasRecordFile' => 'setIsHasRecordFile',
            'vmrConferenceId' => 'setVmrConferenceId',
            'confUuid' => 'setConfUuid',
            'partAttendeeInfo' => 'setPartAttendeeInfo',
            'terminlCount' => 'setTerminlCount',
            'normalCount' => 'setNormalCount',
            'deptName' => 'setDeptName',
            'vmrId' => 'setVmrId',
            'role' => 'setRole',
            'webinar' => 'setWebinar',
            'onlineAttendeeAmount' => 'setOnlineAttendeeAmount',
            'multiStreamFlag' => 'setMultiStreamFlag',
            'confMode' => 'setConfMode',
            'scheduleVmr' => 'setScheduleVmr',
            'concurrentParticipants' => 'setConcurrentParticipants',
            'picDisplay' => 'setPicDisplay',
            'subConfs' => 'setSubConfs',
            'cycleSubConfId' => 'setCycleSubConfId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * conferenceId  会议ID。
    * subject  会议主题。
    * size  会议预约时添加的会议者数量。
    * timeZoneId  会议通知中会议时间的时区信息。时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。
    * startTime  会议起始时间 (YYYY-MM-DD HH:MM )。
    * endTime  会议结束时间 (YYYY-MM-DD HH:MM )。
    * mediaTypes  会议的媒体类型。 由1个或多个枚举String组成，多个枚举时，每个枚举值之间通过”,”逗号分隔。 - Voice: 语音 - Video: 标清视频 - HDVideo: 高清视频 - Data: 数据
    * conferenceState  会议状态。 - Schedule: 预定状态 - Creating: 正在创建状态 - Created: 会议已经被创建，并正在召开 - Destroyed: 会议已经关闭
    * language  会议通知短信或邮件的语言。默认中文。 * zh-CN：中文 * en-US：英文
    * accessNumber  会议接入的SIP号码。
    * passwordEntry  会议密码。 > * 创建会议时，返回主持人密码和来宾密码 > * 主持人查询会议时，返回主持人密码和来宾密码来 > * 宾查询会议时，返回来宾密码
    * userUuid  会议预订者的用户UUID。
    * scheduserName  会议预订者名称。
    * conferenceType  会议类型。 - 0: 普通会议 - 2: 周期性会议
    * confType  会议类型。 - FUTURE：将来开始的会议（创建时） - IMMEDIATELY：立即开始的会议（创建时） - CYCLE：周期会议
    * cycleParams  cycleParams
    * isAutoMute  是否入会自动静音。 - 0: 不自动静音 - 1: 自动静音
    * isAutoRecord  是否自动开启云录制。 - 0: 不自动启动 - 1: 自动启动
    * chairJoinUri  主持人会议链接地址。
    * guestJoinUri  普通与会者会议链接地址。
    * audienceJoinUri  网络研讨会观众会议链接地址。
    * recordType  录播类型。 - 0: 禁用 - 1: 直播 - 2: 录播 - 3: 直播+录播
    * auxAddress  辅流直播推流地址。
    * liveAddress  主流直播推流地址。
    * recordAuxStream  是否录制辅流。  - 0: 否  - 1: 是
    * recordAuthType  观看/下载录播的鉴权方式。  - 0: 可通过链接观看/下载  - 1: 企业用户可观看/下载  - 2: 与会者可观看/下载
    * liveUrl  直播观看地址。
    * confConfigInfo  confConfigInfo
    * vmrFlag  是否使用云会议室或个人会议ID召开预约会议。 - 0: 不使用云会议室或个人会议ID - 1: 使用云会议室或个人会议ID
    * isHasRecordFile  是否有会议录制文件。仅历史会议查询时返回。 - true: 有录制文件 - false: 没有录制文件
    * vmrConferenceId  云会议室会议ID或个人会议ID，如果vmrFlag为\"1\"，则该字段不为空。
    * confUuid  会议的UUID。 > * 只有创建立即开始的会议才返回UUID，如果是预约未来的会议，不会返回UUID > * 可以通过[[查询历史会议列表](https://support.huaweicloud.com/api-meeting/meeting_21_0051.html)](tag:hws)[[查询历史会议列表](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0051.html)](tag:hk)获取历史会议的UUID
    * partAttendeeInfo  被邀请的部分与会者信息。 > * 只返回被邀请的前20条软终端与会者信息和前20条硬终端与会者信息 > * 不返回会中主动加入的与会者信息 > * “[[查询会议列表](https://support.huaweicloud.com/api-meeting/meeting_21_0017.html)](tag:hws)[[查询会议列表](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0017.html)](tag:hk)”和“[[查询会议详情](https://support.huaweicloud.com/api-meeting/meeting_21_0018.html)](tag:hws)[[查询会议详情](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0018.html)](tag:hk)”接口，返回预约会议时邀请的与会者和会中主持人邀请的与会者 > * “[[查询在线会议列表](https://support.huaweicloud.com/api-meeting/meeting_21_0025.html)](tag:hws)[[查询在线会议列表](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0025.html)](tag:hk)”、“[[查询在线会议详情](https://support.huaweicloud.com/api-meeting/meeting_21_0026.html)](tag:hws)[[查询在线会议详情](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0026.html)](tag:hk)”、“[[查询历史会议列表](https://support.huaweicloud.com/api-meeting/meeting_21_0051.html)](tag:hws)[[查询历史会议列表](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0051.html)](tag:hk)”和“[[查询历史会议详情](https://support.huaweicloud.com/api-meeting/meeting_21_0052.html)](tag:hws)[[查询历史会议详情](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0052.html)](tag:hk)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       ”接口返回预约会议时邀请的与会者。不返回会中主持人邀请的与会者
    * terminlCount  硬终端个数，如IdeaHub，TE30等。
    * normalCount  软终端个数，如PC端、手机端App等。
    * deptName  会议预定者的企业名称。
    * vmrId  云会议室的ID。
    * role  与会者角色。 * chair ：主持人 * general ：来宾 * audience ： 观众 > * 仅在查询会议详情时返回 > * 返回查询者本身的角色
    * webinar  是否是网络研讨会。
    * onlineAttendeeAmount  当前在线与会人数。包含被邀入会和主动入会的与会者。 > 仅在“[[查询在线会议列表](https://support.huaweicloud.com/api-meeting/meeting_21_0025.html)](tag:hws)[[查询在线会议列表](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0025.html)](tag:hk)”接口中返回。
    * multiStreamFlag  标识是否为多流视频会议。 * 1：多流会议
    * confMode  会议类型模型。 * COMMON：MCU会议 * RTC：MMR会议
    * scheduleVmr  VMR预约记录。 true: VMR预约记录 false：普通会议 > 该参数将废弃，请勿使用。
    * concurrentParticipants  会议最大与会人数。默认值0。 * 0：无限制 * 大于0：会议最大与会人数
    * picDisplay  picDisplay
    * subConfs  周期子会议列表。
    * cycleSubConfId  第一个周期子会议的UUID。
    *
    * @var string[]
    */
    protected static $getters = [
            'conferenceId' => 'getConferenceId',
            'subject' => 'getSubject',
            'size' => 'getSize',
            'timeZoneId' => 'getTimeZoneId',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'mediaTypes' => 'getMediaTypes',
            'conferenceState' => 'getConferenceState',
            'language' => 'getLanguage',
            'accessNumber' => 'getAccessNumber',
            'passwordEntry' => 'getPasswordEntry',
            'userUuid' => 'getUserUuid',
            'scheduserName' => 'getScheduserName',
            'conferenceType' => 'getConferenceType',
            'confType' => 'getConfType',
            'cycleParams' => 'getCycleParams',
            'isAutoMute' => 'getIsAutoMute',
            'isAutoRecord' => 'getIsAutoRecord',
            'chairJoinUri' => 'getChairJoinUri',
            'guestJoinUri' => 'getGuestJoinUri',
            'audienceJoinUri' => 'getAudienceJoinUri',
            'recordType' => 'getRecordType',
            'auxAddress' => 'getAuxAddress',
            'liveAddress' => 'getLiveAddress',
            'recordAuxStream' => 'getRecordAuxStream',
            'recordAuthType' => 'getRecordAuthType',
            'liveUrl' => 'getLiveUrl',
            'confConfigInfo' => 'getConfConfigInfo',
            'vmrFlag' => 'getVmrFlag',
            'isHasRecordFile' => 'getIsHasRecordFile',
            'vmrConferenceId' => 'getVmrConferenceId',
            'confUuid' => 'getConfUuid',
            'partAttendeeInfo' => 'getPartAttendeeInfo',
            'terminlCount' => 'getTerminlCount',
            'normalCount' => 'getNormalCount',
            'deptName' => 'getDeptName',
            'vmrId' => 'getVmrId',
            'role' => 'getRole',
            'webinar' => 'getWebinar',
            'onlineAttendeeAmount' => 'getOnlineAttendeeAmount',
            'multiStreamFlag' => 'getMultiStreamFlag',
            'confMode' => 'getConfMode',
            'scheduleVmr' => 'getScheduleVmr',
            'concurrentParticipants' => 'getConcurrentParticipants',
            'picDisplay' => 'getPicDisplay',
            'subConfs' => 'getSubConfs',
            'cycleSubConfId' => 'getCycleSubConfId'
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
    const ROLE_CHAIR = 'chair';
    const ROLE_GENERAL = 'general';
    const ROLE_AUDIENCE = 'audience';
    const CONF_MODE_COMMON = 'COMMON';
    const CONF_MODE_RTC = 'RTC';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRoleAllowableValues()
    {
        return [
            self::ROLE_CHAIR,
            self::ROLE_GENERAL,
            self::ROLE_AUDIENCE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getConfModeAllowableValues()
    {
        return [
            self::CONF_MODE_COMMON,
            self::CONF_MODE_RTC,
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
        $this->container['conferenceId'] = isset($data['conferenceId']) ? $data['conferenceId'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['timeZoneId'] = isset($data['timeZoneId']) ? $data['timeZoneId'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['mediaTypes'] = isset($data['mediaTypes']) ? $data['mediaTypes'] : null;
        $this->container['conferenceState'] = isset($data['conferenceState']) ? $data['conferenceState'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['accessNumber'] = isset($data['accessNumber']) ? $data['accessNumber'] : null;
        $this->container['passwordEntry'] = isset($data['passwordEntry']) ? $data['passwordEntry'] : null;
        $this->container['userUuid'] = isset($data['userUuid']) ? $data['userUuid'] : null;
        $this->container['scheduserName'] = isset($data['scheduserName']) ? $data['scheduserName'] : null;
        $this->container['conferenceType'] = isset($data['conferenceType']) ? $data['conferenceType'] : null;
        $this->container['confType'] = isset($data['confType']) ? $data['confType'] : null;
        $this->container['cycleParams'] = isset($data['cycleParams']) ? $data['cycleParams'] : null;
        $this->container['isAutoMute'] = isset($data['isAutoMute']) ? $data['isAutoMute'] : null;
        $this->container['isAutoRecord'] = isset($data['isAutoRecord']) ? $data['isAutoRecord'] : null;
        $this->container['chairJoinUri'] = isset($data['chairJoinUri']) ? $data['chairJoinUri'] : null;
        $this->container['guestJoinUri'] = isset($data['guestJoinUri']) ? $data['guestJoinUri'] : null;
        $this->container['audienceJoinUri'] = isset($data['audienceJoinUri']) ? $data['audienceJoinUri'] : null;
        $this->container['recordType'] = isset($data['recordType']) ? $data['recordType'] : null;
        $this->container['auxAddress'] = isset($data['auxAddress']) ? $data['auxAddress'] : null;
        $this->container['liveAddress'] = isset($data['liveAddress']) ? $data['liveAddress'] : null;
        $this->container['recordAuxStream'] = isset($data['recordAuxStream']) ? $data['recordAuxStream'] : null;
        $this->container['recordAuthType'] = isset($data['recordAuthType']) ? $data['recordAuthType'] : null;
        $this->container['liveUrl'] = isset($data['liveUrl']) ? $data['liveUrl'] : null;
        $this->container['confConfigInfo'] = isset($data['confConfigInfo']) ? $data['confConfigInfo'] : null;
        $this->container['vmrFlag'] = isset($data['vmrFlag']) ? $data['vmrFlag'] : null;
        $this->container['isHasRecordFile'] = isset($data['isHasRecordFile']) ? $data['isHasRecordFile'] : null;
        $this->container['vmrConferenceId'] = isset($data['vmrConferenceId']) ? $data['vmrConferenceId'] : null;
        $this->container['confUuid'] = isset($data['confUuid']) ? $data['confUuid'] : null;
        $this->container['partAttendeeInfo'] = isset($data['partAttendeeInfo']) ? $data['partAttendeeInfo'] : null;
        $this->container['terminlCount'] = isset($data['terminlCount']) ? $data['terminlCount'] : null;
        $this->container['normalCount'] = isset($data['normalCount']) ? $data['normalCount'] : null;
        $this->container['deptName'] = isset($data['deptName']) ? $data['deptName'] : null;
        $this->container['vmrId'] = isset($data['vmrId']) ? $data['vmrId'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['webinar'] = isset($data['webinar']) ? $data['webinar'] : null;
        $this->container['onlineAttendeeAmount'] = isset($data['onlineAttendeeAmount']) ? $data['onlineAttendeeAmount'] : null;
        $this->container['multiStreamFlag'] = isset($data['multiStreamFlag']) ? $data['multiStreamFlag'] : null;
        $this->container['confMode'] = isset($data['confMode']) ? $data['confMode'] : null;
        $this->container['scheduleVmr'] = isset($data['scheduleVmr']) ? $data['scheduleVmr'] : null;
        $this->container['concurrentParticipants'] = isset($data['concurrentParticipants']) ? $data['concurrentParticipants'] : null;
        $this->container['picDisplay'] = isset($data['picDisplay']) ? $data['picDisplay'] : null;
        $this->container['subConfs'] = isset($data['subConfs']) ? $data['subConfs'] : null;
        $this->container['cycleSubConfId'] = isset($data['cycleSubConfId']) ? $data['cycleSubConfId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getRoleAllowableValues();
                if (!is_null($this->container['role']) && !in_array($this->container['role'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'role', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['multiStreamFlag']) && ($this->container['multiStreamFlag'] > 1)) {
                $invalidProperties[] = "invalid value for 'multiStreamFlag', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['multiStreamFlag']) && ($this->container['multiStreamFlag'] < 1)) {
                $invalidProperties[] = "invalid value for 'multiStreamFlag', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getConfModeAllowableValues();
                if (!is_null($this->container['confMode']) && !in_array($this->container['confMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'confMode', must be one of '%s'",
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
    * Gets size
    *  会议预约时添加的会议者数量。
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 会议预约时添加的会议者数量。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets timeZoneId
    *  会议通知中会议时间的时区信息。时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。
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
    * @param string|null $timeZoneId 会议通知中会议时间的时区信息。时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。
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
    *  会议起始时间 (YYYY-MM-DD HH:MM )。
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
    * @param string|null $startTime 会议起始时间 (YYYY-MM-DD HH:MM )。
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
    *  会议结束时间 (YYYY-MM-DD HH:MM )。
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
    * @param string|null $endTime 会议结束时间 (YYYY-MM-DD HH:MM )。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets mediaTypes
    *  会议的媒体类型。 由1个或多个枚举String组成，多个枚举时，每个枚举值之间通过”,”逗号分隔。 - Voice: 语音 - Video: 标清视频 - HDVideo: 高清视频 - Data: 数据
    *
    * @return string|null
    */
    public function getMediaTypes()
    {
        return $this->container['mediaTypes'];
    }

    /**
    * Sets mediaTypes
    *
    * @param string|null $mediaTypes 会议的媒体类型。 由1个或多个枚举String组成，多个枚举时，每个枚举值之间通过”,”逗号分隔。 - Voice: 语音 - Video: 标清视频 - HDVideo: 高清视频 - Data: 数据
    *
    * @return $this
    */
    public function setMediaTypes($mediaTypes)
    {
        $this->container['mediaTypes'] = $mediaTypes;
        return $this;
    }

    /**
    * Gets conferenceState
    *  会议状态。 - Schedule: 预定状态 - Creating: 正在创建状态 - Created: 会议已经被创建，并正在召开 - Destroyed: 会议已经关闭
    *
    * @return string|null
    */
    public function getConferenceState()
    {
        return $this->container['conferenceState'];
    }

    /**
    * Sets conferenceState
    *
    * @param string|null $conferenceState 会议状态。 - Schedule: 预定状态 - Creating: 正在创建状态 - Created: 会议已经被创建，并正在召开 - Destroyed: 会议已经关闭
    *
    * @return $this
    */
    public function setConferenceState($conferenceState)
    {
        $this->container['conferenceState'] = $conferenceState;
        return $this;
    }

    /**
    * Gets language
    *  会议通知短信或邮件的语言。默认中文。 * zh-CN：中文 * en-US：英文
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
    * @param string|null $language 会议通知短信或邮件的语言。默认中文。 * zh-CN：中文 * en-US：英文
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets accessNumber
    *  会议接入的SIP号码。
    *
    * @return string|null
    */
    public function getAccessNumber()
    {
        return $this->container['accessNumber'];
    }

    /**
    * Sets accessNumber
    *
    * @param string|null $accessNumber 会议接入的SIP号码。
    *
    * @return $this
    */
    public function setAccessNumber($accessNumber)
    {
        $this->container['accessNumber'] = $accessNumber;
        return $this;
    }

    /**
    * Gets passwordEntry
    *  会议密码。 > * 创建会议时，返回主持人密码和来宾密码 > * 主持人查询会议时，返回主持人密码和来宾密码来 > * 宾查询会议时，返回来宾密码
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\PasswordEntry[]|null
    */
    public function getPasswordEntry()
    {
        return $this->container['passwordEntry'];
    }

    /**
    * Sets passwordEntry
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\PasswordEntry[]|null $passwordEntry 会议密码。 > * 创建会议时，返回主持人密码和来宾密码 > * 主持人查询会议时，返回主持人密码和来宾密码来 > * 宾查询会议时，返回来宾密码
    *
    * @return $this
    */
    public function setPasswordEntry($passwordEntry)
    {
        $this->container['passwordEntry'] = $passwordEntry;
        return $this;
    }

    /**
    * Gets userUuid
    *  会议预订者的用户UUID。
    *
    * @return string|null
    */
    public function getUserUuid()
    {
        return $this->container['userUuid'];
    }

    /**
    * Sets userUuid
    *
    * @param string|null $userUuid 会议预订者的用户UUID。
    *
    * @return $this
    */
    public function setUserUuid($userUuid)
    {
        $this->container['userUuid'] = $userUuid;
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
    * Gets conferenceType
    *  会议类型。 - 0: 普通会议 - 2: 周期性会议
    *
    * @return int|null
    */
    public function getConferenceType()
    {
        return $this->container['conferenceType'];
    }

    /**
    * Sets conferenceType
    *
    * @param int|null $conferenceType 会议类型。 - 0: 普通会议 - 2: 周期性会议
    *
    * @return $this
    */
    public function setConferenceType($conferenceType)
    {
        $this->container['conferenceType'] = $conferenceType;
        return $this;
    }

    /**
    * Gets confType
    *  会议类型。 - FUTURE：将来开始的会议（创建时） - IMMEDIATELY：立即开始的会议（创建时） - CYCLE：周期会议
    *
    * @return string|null
    */
    public function getConfType()
    {
        return $this->container['confType'];
    }

    /**
    * Sets confType
    *
    * @param string|null $confType 会议类型。 - FUTURE：将来开始的会议（创建时） - IMMEDIATELY：立即开始的会议（创建时） - CYCLE：周期会议
    *
    * @return $this
    */
    public function setConfType($confType)
    {
        $this->container['confType'] = $confType;
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
    * Gets isAutoMute
    *  是否入会自动静音。 - 0: 不自动静音 - 1: 自动静音
    *
    * @return int|null
    */
    public function getIsAutoMute()
    {
        return $this->container['isAutoMute'];
    }

    /**
    * Sets isAutoMute
    *
    * @param int|null $isAutoMute 是否入会自动静音。 - 0: 不自动静音 - 1: 自动静音
    *
    * @return $this
    */
    public function setIsAutoMute($isAutoMute)
    {
        $this->container['isAutoMute'] = $isAutoMute;
        return $this;
    }

    /**
    * Gets isAutoRecord
    *  是否自动开启云录制。 - 0: 不自动启动 - 1: 自动启动
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
    * @param int|null $isAutoRecord 是否自动开启云录制。 - 0: 不自动启动 - 1: 自动启动
    *
    * @return $this
    */
    public function setIsAutoRecord($isAutoRecord)
    {
        $this->container['isAutoRecord'] = $isAutoRecord;
        return $this;
    }

    /**
    * Gets chairJoinUri
    *  主持人会议链接地址。
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
    * @param string|null $chairJoinUri 主持人会议链接地址。
    *
    * @return $this
    */
    public function setChairJoinUri($chairJoinUri)
    {
        $this->container['chairJoinUri'] = $chairJoinUri;
        return $this;
    }

    /**
    * Gets guestJoinUri
    *  普通与会者会议链接地址。
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
    * @param string|null $guestJoinUri 普通与会者会议链接地址。
    *
    * @return $this
    */
    public function setGuestJoinUri($guestJoinUri)
    {
        $this->container['guestJoinUri'] = $guestJoinUri;
        return $this;
    }

    /**
    * Gets audienceJoinUri
    *  网络研讨会观众会议链接地址。
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
    * @param string|null $audienceJoinUri 网络研讨会观众会议链接地址。
    *
    * @return $this
    */
    public function setAudienceJoinUri($audienceJoinUri)
    {
        $this->container['audienceJoinUri'] = $audienceJoinUri;
        return $this;
    }

    /**
    * Gets recordType
    *  录播类型。 - 0: 禁用 - 1: 直播 - 2: 录播 - 3: 直播+录播
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
    * @param int|null $recordType 录播类型。 - 0: 禁用 - 1: 直播 - 2: 录播 - 3: 直播+录播
    *
    * @return $this
    */
    public function setRecordType($recordType)
    {
        $this->container['recordType'] = $recordType;
        return $this;
    }

    /**
    * Gets auxAddress
    *  辅流直播推流地址。
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
    * @param string|null $auxAddress 辅流直播推流地址。
    *
    * @return $this
    */
    public function setAuxAddress($auxAddress)
    {
        $this->container['auxAddress'] = $auxAddress;
        return $this;
    }

    /**
    * Gets liveAddress
    *  主流直播推流地址。
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
    * @param string|null $liveAddress 主流直播推流地址。
    *
    * @return $this
    */
    public function setLiveAddress($liveAddress)
    {
        $this->container['liveAddress'] = $liveAddress;
        return $this;
    }

    /**
    * Gets recordAuxStream
    *  是否录制辅流。  - 0: 否  - 1: 是
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
    * @param int|null $recordAuxStream 是否录制辅流。  - 0: 否  - 1: 是
    *
    * @return $this
    */
    public function setRecordAuxStream($recordAuxStream)
    {
        $this->container['recordAuxStream'] = $recordAuxStream;
        return $this;
    }

    /**
    * Gets recordAuthType
    *  观看/下载录播的鉴权方式。  - 0: 可通过链接观看/下载  - 1: 企业用户可观看/下载  - 2: 与会者可观看/下载
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
    * @param int|null $recordAuthType 观看/下载录播的鉴权方式。  - 0: 可通过链接观看/下载  - 1: 企业用户可观看/下载  - 2: 与会者可观看/下载
    *
    * @return $this
    */
    public function setRecordAuthType($recordAuthType)
    {
        $this->container['recordAuthType'] = $recordAuthType;
        return $this;
    }

    /**
    * Gets liveUrl
    *  直播观看地址。
    *
    * @return string|null
    */
    public function getLiveUrl()
    {
        return $this->container['liveUrl'];
    }

    /**
    * Sets liveUrl
    *
    * @param string|null $liveUrl 直播观看地址。
    *
    * @return $this
    */
    public function setLiveUrl($liveUrl)
    {
        $this->container['liveUrl'] = $liveUrl;
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
    * Gets vmrFlag
    *  是否使用云会议室或个人会议ID召开预约会议。 - 0: 不使用云会议室或个人会议ID - 1: 使用云会议室或个人会议ID
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
    * @param int|null $vmrFlag 是否使用云会议室或个人会议ID召开预约会议。 - 0: 不使用云会议室或个人会议ID - 1: 使用云会议室或个人会议ID
    *
    * @return $this
    */
    public function setVmrFlag($vmrFlag)
    {
        $this->container['vmrFlag'] = $vmrFlag;
        return $this;
    }

    /**
    * Gets isHasRecordFile
    *  是否有会议录制文件。仅历史会议查询时返回。 - true: 有录制文件 - false: 没有录制文件
    *
    * @return bool|null
    */
    public function getIsHasRecordFile()
    {
        return $this->container['isHasRecordFile'];
    }

    /**
    * Sets isHasRecordFile
    *
    * @param bool|null $isHasRecordFile 是否有会议录制文件。仅历史会议查询时返回。 - true: 有录制文件 - false: 没有录制文件
    *
    * @return $this
    */
    public function setIsHasRecordFile($isHasRecordFile)
    {
        $this->container['isHasRecordFile'] = $isHasRecordFile;
        return $this;
    }

    /**
    * Gets vmrConferenceId
    *  云会议室会议ID或个人会议ID，如果vmrFlag为\"1\"，则该字段不为空。
    *
    * @return string|null
    */
    public function getVmrConferenceId()
    {
        return $this->container['vmrConferenceId'];
    }

    /**
    * Sets vmrConferenceId
    *
    * @param string|null $vmrConferenceId 云会议室会议ID或个人会议ID，如果vmrFlag为\"1\"，则该字段不为空。
    *
    * @return $this
    */
    public function setVmrConferenceId($vmrConferenceId)
    {
        $this->container['vmrConferenceId'] = $vmrConferenceId;
        return $this;
    }

    /**
    * Gets confUuid
    *  会议的UUID。 > * 只有创建立即开始的会议才返回UUID，如果是预约未来的会议，不会返回UUID > * 可以通过[[查询历史会议列表](https://support.huaweicloud.com/api-meeting/meeting_21_0051.html)](tag:hws)[[查询历史会议列表](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0051.html)](tag:hk)获取历史会议的UUID
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
    * @param string|null $confUuid 会议的UUID。 > * 只有创建立即开始的会议才返回UUID，如果是预约未来的会议，不会返回UUID > * 可以通过[[查询历史会议列表](https://support.huaweicloud.com/api-meeting/meeting_21_0051.html)](tag:hws)[[查询历史会议列表](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0051.html)](tag:hk)获取历史会议的UUID
    *
    * @return $this
    */
    public function setConfUuid($confUuid)
    {
        $this->container['confUuid'] = $confUuid;
        return $this;
    }

    /**
    * Gets partAttendeeInfo
    *  被邀请的部分与会者信息。 > * 只返回被邀请的前20条软终端与会者信息和前20条硬终端与会者信息 > * 不返回会中主动加入的与会者信息 > * “[[查询会议列表](https://support.huaweicloud.com/api-meeting/meeting_21_0017.html)](tag:hws)[[查询会议列表](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0017.html)](tag:hk)”和“[[查询会议详情](https://support.huaweicloud.com/api-meeting/meeting_21_0018.html)](tag:hws)[[查询会议详情](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0018.html)](tag:hk)”接口，返回预约会议时邀请的与会者和会中主持人邀请的与会者 > * “[[查询在线会议列表](https://support.huaweicloud.com/api-meeting/meeting_21_0025.html)](tag:hws)[[查询在线会议列表](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0025.html)](tag:hk)”、“[[查询在线会议详情](https://support.huaweicloud.com/api-meeting/meeting_21_0026.html)](tag:hws)[[查询在线会议详情](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0026.html)](tag:hk)”、“[[查询历史会议列表](https://support.huaweicloud.com/api-meeting/meeting_21_0051.html)](tag:hws)[[查询历史会议列表](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0051.html)](tag:hk)”和“[[查询历史会议详情](https://support.huaweicloud.com/api-meeting/meeting_21_0052.html)](tag:hws)[[查询历史会议详情](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0052.html)](tag:hk)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       ”接口返回预约会议时邀请的与会者。不返回会中主持人邀请的与会者
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\PartAttendee[]|null
    */
    public function getPartAttendeeInfo()
    {
        return $this->container['partAttendeeInfo'];
    }

    /**
    * Sets partAttendeeInfo
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\PartAttendee[]|null $partAttendeeInfo 被邀请的部分与会者信息。 > * 只返回被邀请的前20条软终端与会者信息和前20条硬终端与会者信息 > * 不返回会中主动加入的与会者信息 > * “[[查询会议列表](https://support.huaweicloud.com/api-meeting/meeting_21_0017.html)](tag:hws)[[查询会议列表](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0017.html)](tag:hk)”和“[[查询会议详情](https://support.huaweicloud.com/api-meeting/meeting_21_0018.html)](tag:hws)[[查询会议详情](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0018.html)](tag:hk)”接口，返回预约会议时邀请的与会者和会中主持人邀请的与会者 > * “[[查询在线会议列表](https://support.huaweicloud.com/api-meeting/meeting_21_0025.html)](tag:hws)[[查询在线会议列表](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0025.html)](tag:hk)”、“[[查询在线会议详情](https://support.huaweicloud.com/api-meeting/meeting_21_0026.html)](tag:hws)[[查询在线会议详情](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0026.html)](tag:hk)”、“[[查询历史会议列表](https://support.huaweicloud.com/api-meeting/meeting_21_0051.html)](tag:hws)[[查询历史会议列表](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0051.html)](tag:hk)”和“[[查询历史会议详情](https://support.huaweicloud.com/api-meeting/meeting_21_0052.html)](tag:hws)[[查询历史会议详情](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0052.html)](tag:hk)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       ”接口返回预约会议时邀请的与会者。不返回会中主持人邀请的与会者
    *
    * @return $this
    */
    public function setPartAttendeeInfo($partAttendeeInfo)
    {
        $this->container['partAttendeeInfo'] = $partAttendeeInfo;
        return $this;
    }

    /**
    * Gets terminlCount
    *  硬终端个数，如IdeaHub，TE30等。
    *
    * @return int|null
    */
    public function getTerminlCount()
    {
        return $this->container['terminlCount'];
    }

    /**
    * Sets terminlCount
    *
    * @param int|null $terminlCount 硬终端个数，如IdeaHub，TE30等。
    *
    * @return $this
    */
    public function setTerminlCount($terminlCount)
    {
        $this->container['terminlCount'] = $terminlCount;
        return $this;
    }

    /**
    * Gets normalCount
    *  软终端个数，如PC端、手机端App等。
    *
    * @return int|null
    */
    public function getNormalCount()
    {
        return $this->container['normalCount'];
    }

    /**
    * Sets normalCount
    *
    * @param int|null $normalCount 软终端个数，如PC端、手机端App等。
    *
    * @return $this
    */
    public function setNormalCount($normalCount)
    {
        $this->container['normalCount'] = $normalCount;
        return $this;
    }

    /**
    * Gets deptName
    *  会议预定者的企业名称。
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
    * @param string|null $deptName 会议预定者的企业名称。
    *
    * @return $this
    */
    public function setDeptName($deptName)
    {
        $this->container['deptName'] = $deptName;
        return $this;
    }

    /**
    * Gets vmrId
    *  云会议室的ID。
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
    * @param string|null $vmrId 云会议室的ID。
    *
    * @return $this
    */
    public function setVmrId($vmrId)
    {
        $this->container['vmrId'] = $vmrId;
        return $this;
    }

    /**
    * Gets role
    *  与会者角色。 * chair ：主持人 * general ：来宾 * audience ： 观众 > * 仅在查询会议详情时返回 > * 返回查询者本身的角色
    *
    * @return string|null
    */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
    * Sets role
    *
    * @param string|null $role 与会者角色。 * chair ：主持人 * general ：来宾 * audience ： 观众 > * 仅在查询会议详情时返回 > * 返回查询者本身的角色
    *
    * @return $this
    */
    public function setRole($role)
    {
        $this->container['role'] = $role;
        return $this;
    }

    /**
    * Gets webinar
    *  是否是网络研讨会。
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
    * @param bool|null $webinar 是否是网络研讨会。
    *
    * @return $this
    */
    public function setWebinar($webinar)
    {
        $this->container['webinar'] = $webinar;
        return $this;
    }

    /**
    * Gets onlineAttendeeAmount
    *  当前在线与会人数。包含被邀入会和主动入会的与会者。 > 仅在“[[查询在线会议列表](https://support.huaweicloud.com/api-meeting/meeting_21_0025.html)](tag:hws)[[查询在线会议列表](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0025.html)](tag:hk)”接口中返回。
    *
    * @return int|null
    */
    public function getOnlineAttendeeAmount()
    {
        return $this->container['onlineAttendeeAmount'];
    }

    /**
    * Sets onlineAttendeeAmount
    *
    * @param int|null $onlineAttendeeAmount 当前在线与会人数。包含被邀入会和主动入会的与会者。 > 仅在“[[查询在线会议列表](https://support.huaweicloud.com/api-meeting/meeting_21_0025.html)](tag:hws)[[查询在线会议列表](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0025.html)](tag:hk)”接口中返回。
    *
    * @return $this
    */
    public function setOnlineAttendeeAmount($onlineAttendeeAmount)
    {
        $this->container['onlineAttendeeAmount'] = $onlineAttendeeAmount;
        return $this;
    }

    /**
    * Gets multiStreamFlag
    *  标识是否为多流视频会议。 * 1：多流会议
    *
    * @return int|null
    */
    public function getMultiStreamFlag()
    {
        return $this->container['multiStreamFlag'];
    }

    /**
    * Sets multiStreamFlag
    *
    * @param int|null $multiStreamFlag 标识是否为多流视频会议。 * 1：多流会议
    *
    * @return $this
    */
    public function setMultiStreamFlag($multiStreamFlag)
    {
        $this->container['multiStreamFlag'] = $multiStreamFlag;
        return $this;
    }

    /**
    * Gets confMode
    *  会议类型模型。 * COMMON：MCU会议 * RTC：MMR会议
    *
    * @return string|null
    */
    public function getConfMode()
    {
        return $this->container['confMode'];
    }

    /**
    * Sets confMode
    *
    * @param string|null $confMode 会议类型模型。 * COMMON：MCU会议 * RTC：MMR会议
    *
    * @return $this
    */
    public function setConfMode($confMode)
    {
        $this->container['confMode'] = $confMode;
        return $this;
    }

    /**
    * Gets scheduleVmr
    *  VMR预约记录。 true: VMR预约记录 false：普通会议 > 该参数将废弃，请勿使用。
    *
    * @return bool|null
    */
    public function getScheduleVmr()
    {
        return $this->container['scheduleVmr'];
    }

    /**
    * Sets scheduleVmr
    *
    * @param bool|null $scheduleVmr VMR预约记录。 true: VMR预约记录 false：普通会议 > 该参数将废弃，请勿使用。
    *
    * @return $this
    */
    public function setScheduleVmr($scheduleVmr)
    {
        $this->container['scheduleVmr'] = $scheduleVmr;
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
    * Gets picDisplay
    *  picDisplay
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\MultiPicDisplayDO|null
    */
    public function getPicDisplay()
    {
        return $this->container['picDisplay'];
    }

    /**
    * Sets picDisplay
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\MultiPicDisplayDO|null $picDisplay picDisplay
    *
    * @return $this
    */
    public function setPicDisplay($picDisplay)
    {
        $this->container['picDisplay'] = $picDisplay;
        return $this;
    }

    /**
    * Gets subConfs
    *  周期子会议列表。
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\CycleSubConf[]|null
    */
    public function getSubConfs()
    {
        return $this->container['subConfs'];
    }

    /**
    * Sets subConfs
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\CycleSubConf[]|null $subConfs 周期子会议列表。
    *
    * @return $this
    */
    public function setSubConfs($subConfs)
    {
        $this->container['subConfs'] = $subConfs;
        return $this;
    }

    /**
    * Gets cycleSubConfId
    *  第一个周期子会议的UUID。
    *
    * @return string|null
    */
    public function getCycleSubConfId()
    {
        return $this->container['cycleSubConfId'];
    }

    /**
    * Sets cycleSubConfId
    *
    * @param string|null $cycleSubConfId 第一个周期子会议的UUID。
    *
    * @return $this
    */
    public function setCycleSubConfId($cycleSubConfId)
    {
        $this->container['cycleSubConfId'] = $cycleSubConfId;
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

