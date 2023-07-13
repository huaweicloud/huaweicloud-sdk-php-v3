<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QosParticipantInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QosParticipantInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * confUuid  会议的UUID。
    * conferenceId  会议ID。
    * participantId  与会者标识。
    * userUuid  用户UUID。
    * displayName  与会者的名称。
    * deptName  部门名称。
    * terminalType  入会终端类型。 - PC: PC机 - MOBILE: 手机 - PAD：PAD设备 - MAC：MAC设备 - WEB：WEB方式入会，如通过WebRTC入会 - ROOM: 会议室 - 硬件终端：显示具体的硬件设备类型，如TE50, HUAWEI IDEAHUB, CISCO等 - OTHER: 其他设备
    * role  与会者角色。 - host：主持人 - guest：来宾 - audience：观众
    * ipAddress  与会者的IP地址。
    * country  国家。
    * province  省市（仅限中国）。
    * city  城市（仅限中国）。
    * appVersion  华为云会议APP版本。
    * joinTime  入会时间(UTC时间), Unix时间戳（单位毫秒）。
    * leftTime  离会时间(UTC时间), Unix时间戳（单位毫秒）。 > * 与会者未离会：leftTime = 0 > * 与会者已离会：leftTime = 实际离会时间
    * systemInfo  终端操作系统信息。
    * networkType  网络类型。
    * alarm  总体告警。 * YES：音频（发送/接收），视频（发送/接收），屏幕共享（发送/接收），CPU任一项产生告警，总体告警状态即为 YES * NO：无告警
    * audioAlarmSend  音频发送告警。 * YES ：发送音频的抖动，时延，丢包率任一项产生阈值告警，则音频发送告警状态为YES * NO：发送音频无告警
    * videoAlarmSend  视频发送告警。 * YES ：发送视频的抖动，时延，丢包率任一项产生阈值告警，则视频发送告警状态为YES * NO：发送视频无告警
    * screenAlarmSend  屏幕共享发送告警。 * YES：发送屏幕共享的抖动，时延，丢包率任一项产生阈值告警，则屏幕共享发送告警状态为YES * NO：发送屏幕共享无告警
    * audioAlarmRec  音频接收告警。 * YES：接收音频的抖动，时延，丢包率任一项产生阈值告警，则音频接收告警状态为YES * NO：接收音频无告警
    * videoAlarmRec  视频接收告警。 * YES：接收视频的抖动，时延，丢包率任一项产生阈值告警，则视频接收告警状态为YES * NO：接收视频无告警
    * screenAlarmRec  屏幕共享接收告警。 * YES：接收屏幕共享的抖动，时延，丢包率任一项产生阈值告警，则屏幕共享接收告警状态为YES * NO：接收屏幕共享无告警
    * cpuAlarm  CPU告警。 * YES：端侧的APP最大CPU使用率或系统最大CPU使用率任一项产生阈值告警，则CPU告警状态为YES * NO：CPU无告警
    * microphoneInfo  麦克风。
    * speakerInfo  扬声器。
    * cameraInfo  摄像头。
    * dataCenter  数据中心。
    * leftReason  离会原因。此字段仅标识离会原因，不做为是否已离会的判断依据。正在与会人员的离会原因初始值 = 0。 * 0：正常离会 * 1：网络异常离会
    * existQos  与会者是否存在QoS数据。 * true：存在QoS数据 * false：不存在QoS数据
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'confUuid' => 'string',
            'conferenceId' => 'string',
            'participantId' => 'string',
            'userUuid' => 'string',
            'displayName' => 'string',
            'deptName' => 'string',
            'terminalType' => 'string',
            'role' => 'string',
            'ipAddress' => 'string',
            'country' => 'string',
            'province' => 'string',
            'city' => 'string',
            'appVersion' => 'string',
            'joinTime' => 'int',
            'leftTime' => 'int',
            'systemInfo' => 'string',
            'networkType' => 'string',
            'alarm' => 'string',
            'audioAlarmSend' => 'string',
            'videoAlarmSend' => 'string',
            'screenAlarmSend' => 'string',
            'audioAlarmRec' => 'string',
            'videoAlarmRec' => 'string',
            'screenAlarmRec' => 'string',
            'cpuAlarm' => 'string',
            'microphoneInfo' => 'string',
            'speakerInfo' => 'string',
            'cameraInfo' => 'string',
            'dataCenter' => 'string',
            'leftReason' => 'int',
            'existQos' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * confUuid  会议的UUID。
    * conferenceId  会议ID。
    * participantId  与会者标识。
    * userUuid  用户UUID。
    * displayName  与会者的名称。
    * deptName  部门名称。
    * terminalType  入会终端类型。 - PC: PC机 - MOBILE: 手机 - PAD：PAD设备 - MAC：MAC设备 - WEB：WEB方式入会，如通过WebRTC入会 - ROOM: 会议室 - 硬件终端：显示具体的硬件设备类型，如TE50, HUAWEI IDEAHUB, CISCO等 - OTHER: 其他设备
    * role  与会者角色。 - host：主持人 - guest：来宾 - audience：观众
    * ipAddress  与会者的IP地址。
    * country  国家。
    * province  省市（仅限中国）。
    * city  城市（仅限中国）。
    * appVersion  华为云会议APP版本。
    * joinTime  入会时间(UTC时间), Unix时间戳（单位毫秒）。
    * leftTime  离会时间(UTC时间), Unix时间戳（单位毫秒）。 > * 与会者未离会：leftTime = 0 > * 与会者已离会：leftTime = 实际离会时间
    * systemInfo  终端操作系统信息。
    * networkType  网络类型。
    * alarm  总体告警。 * YES：音频（发送/接收），视频（发送/接收），屏幕共享（发送/接收），CPU任一项产生告警，总体告警状态即为 YES * NO：无告警
    * audioAlarmSend  音频发送告警。 * YES ：发送音频的抖动，时延，丢包率任一项产生阈值告警，则音频发送告警状态为YES * NO：发送音频无告警
    * videoAlarmSend  视频发送告警。 * YES ：发送视频的抖动，时延，丢包率任一项产生阈值告警，则视频发送告警状态为YES * NO：发送视频无告警
    * screenAlarmSend  屏幕共享发送告警。 * YES：发送屏幕共享的抖动，时延，丢包率任一项产生阈值告警，则屏幕共享发送告警状态为YES * NO：发送屏幕共享无告警
    * audioAlarmRec  音频接收告警。 * YES：接收音频的抖动，时延，丢包率任一项产生阈值告警，则音频接收告警状态为YES * NO：接收音频无告警
    * videoAlarmRec  视频接收告警。 * YES：接收视频的抖动，时延，丢包率任一项产生阈值告警，则视频接收告警状态为YES * NO：接收视频无告警
    * screenAlarmRec  屏幕共享接收告警。 * YES：接收屏幕共享的抖动，时延，丢包率任一项产生阈值告警，则屏幕共享接收告警状态为YES * NO：接收屏幕共享无告警
    * cpuAlarm  CPU告警。 * YES：端侧的APP最大CPU使用率或系统最大CPU使用率任一项产生阈值告警，则CPU告警状态为YES * NO：CPU无告警
    * microphoneInfo  麦克风。
    * speakerInfo  扬声器。
    * cameraInfo  摄像头。
    * dataCenter  数据中心。
    * leftReason  离会原因。此字段仅标识离会原因，不做为是否已离会的判断依据。正在与会人员的离会原因初始值 = 0。 * 0：正常离会 * 1：网络异常离会
    * existQos  与会者是否存在QoS数据。 * true：存在QoS数据 * false：不存在QoS数据
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'confUuid' => null,
        'conferenceId' => null,
        'participantId' => null,
        'userUuid' => null,
        'displayName' => null,
        'deptName' => null,
        'terminalType' => null,
        'role' => null,
        'ipAddress' => null,
        'country' => null,
        'province' => null,
        'city' => null,
        'appVersion' => null,
        'joinTime' => 'int64',
        'leftTime' => 'int64',
        'systemInfo' => null,
        'networkType' => null,
        'alarm' => null,
        'audioAlarmSend' => null,
        'videoAlarmSend' => null,
        'screenAlarmSend' => null,
        'audioAlarmRec' => null,
        'videoAlarmRec' => null,
        'screenAlarmRec' => null,
        'cpuAlarm' => null,
        'microphoneInfo' => null,
        'speakerInfo' => null,
        'cameraInfo' => null,
        'dataCenter' => null,
        'leftReason' => 'int32',
        'existQos' => null
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
    * confUuid  会议的UUID。
    * conferenceId  会议ID。
    * participantId  与会者标识。
    * userUuid  用户UUID。
    * displayName  与会者的名称。
    * deptName  部门名称。
    * terminalType  入会终端类型。 - PC: PC机 - MOBILE: 手机 - PAD：PAD设备 - MAC：MAC设备 - WEB：WEB方式入会，如通过WebRTC入会 - ROOM: 会议室 - 硬件终端：显示具体的硬件设备类型，如TE50, HUAWEI IDEAHUB, CISCO等 - OTHER: 其他设备
    * role  与会者角色。 - host：主持人 - guest：来宾 - audience：观众
    * ipAddress  与会者的IP地址。
    * country  国家。
    * province  省市（仅限中国）。
    * city  城市（仅限中国）。
    * appVersion  华为云会议APP版本。
    * joinTime  入会时间(UTC时间), Unix时间戳（单位毫秒）。
    * leftTime  离会时间(UTC时间), Unix时间戳（单位毫秒）。 > * 与会者未离会：leftTime = 0 > * 与会者已离会：leftTime = 实际离会时间
    * systemInfo  终端操作系统信息。
    * networkType  网络类型。
    * alarm  总体告警。 * YES：音频（发送/接收），视频（发送/接收），屏幕共享（发送/接收），CPU任一项产生告警，总体告警状态即为 YES * NO：无告警
    * audioAlarmSend  音频发送告警。 * YES ：发送音频的抖动，时延，丢包率任一项产生阈值告警，则音频发送告警状态为YES * NO：发送音频无告警
    * videoAlarmSend  视频发送告警。 * YES ：发送视频的抖动，时延，丢包率任一项产生阈值告警，则视频发送告警状态为YES * NO：发送视频无告警
    * screenAlarmSend  屏幕共享发送告警。 * YES：发送屏幕共享的抖动，时延，丢包率任一项产生阈值告警，则屏幕共享发送告警状态为YES * NO：发送屏幕共享无告警
    * audioAlarmRec  音频接收告警。 * YES：接收音频的抖动，时延，丢包率任一项产生阈值告警，则音频接收告警状态为YES * NO：接收音频无告警
    * videoAlarmRec  视频接收告警。 * YES：接收视频的抖动，时延，丢包率任一项产生阈值告警，则视频接收告警状态为YES * NO：接收视频无告警
    * screenAlarmRec  屏幕共享接收告警。 * YES：接收屏幕共享的抖动，时延，丢包率任一项产生阈值告警，则屏幕共享接收告警状态为YES * NO：接收屏幕共享无告警
    * cpuAlarm  CPU告警。 * YES：端侧的APP最大CPU使用率或系统最大CPU使用率任一项产生阈值告警，则CPU告警状态为YES * NO：CPU无告警
    * microphoneInfo  麦克风。
    * speakerInfo  扬声器。
    * cameraInfo  摄像头。
    * dataCenter  数据中心。
    * leftReason  离会原因。此字段仅标识离会原因，不做为是否已离会的判断依据。正在与会人员的离会原因初始值 = 0。 * 0：正常离会 * 1：网络异常离会
    * existQos  与会者是否存在QoS数据。 * true：存在QoS数据 * false：不存在QoS数据
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'confUuid' => 'confUUID',
            'conferenceId' => 'conferenceID',
            'participantId' => 'participantID',
            'userUuid' => 'userUUID',
            'displayName' => 'displayName',
            'deptName' => 'deptName',
            'terminalType' => 'terminalType',
            'role' => 'role',
            'ipAddress' => 'ipAddress',
            'country' => 'country',
            'province' => 'province',
            'city' => 'city',
            'appVersion' => 'appVersion',
            'joinTime' => 'joinTime',
            'leftTime' => 'leftTime',
            'systemInfo' => 'systemInfo',
            'networkType' => 'networkType',
            'alarm' => 'alarm',
            'audioAlarmSend' => 'audioAlarmSend',
            'videoAlarmSend' => 'videoAlarmSend',
            'screenAlarmSend' => 'screenAlarmSend',
            'audioAlarmRec' => 'audioAlarmRec',
            'videoAlarmRec' => 'videoAlarmRec',
            'screenAlarmRec' => 'screenAlarmRec',
            'cpuAlarm' => 'cpuAlarm',
            'microphoneInfo' => 'microphoneInfo',
            'speakerInfo' => 'speakerInfo',
            'cameraInfo' => 'cameraInfo',
            'dataCenter' => 'dataCenter',
            'leftReason' => 'leftReason',
            'existQos' => 'existQos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * confUuid  会议的UUID。
    * conferenceId  会议ID。
    * participantId  与会者标识。
    * userUuid  用户UUID。
    * displayName  与会者的名称。
    * deptName  部门名称。
    * terminalType  入会终端类型。 - PC: PC机 - MOBILE: 手机 - PAD：PAD设备 - MAC：MAC设备 - WEB：WEB方式入会，如通过WebRTC入会 - ROOM: 会议室 - 硬件终端：显示具体的硬件设备类型，如TE50, HUAWEI IDEAHUB, CISCO等 - OTHER: 其他设备
    * role  与会者角色。 - host：主持人 - guest：来宾 - audience：观众
    * ipAddress  与会者的IP地址。
    * country  国家。
    * province  省市（仅限中国）。
    * city  城市（仅限中国）。
    * appVersion  华为云会议APP版本。
    * joinTime  入会时间(UTC时间), Unix时间戳（单位毫秒）。
    * leftTime  离会时间(UTC时间), Unix时间戳（单位毫秒）。 > * 与会者未离会：leftTime = 0 > * 与会者已离会：leftTime = 实际离会时间
    * systemInfo  终端操作系统信息。
    * networkType  网络类型。
    * alarm  总体告警。 * YES：音频（发送/接收），视频（发送/接收），屏幕共享（发送/接收），CPU任一项产生告警，总体告警状态即为 YES * NO：无告警
    * audioAlarmSend  音频发送告警。 * YES ：发送音频的抖动，时延，丢包率任一项产生阈值告警，则音频发送告警状态为YES * NO：发送音频无告警
    * videoAlarmSend  视频发送告警。 * YES ：发送视频的抖动，时延，丢包率任一项产生阈值告警，则视频发送告警状态为YES * NO：发送视频无告警
    * screenAlarmSend  屏幕共享发送告警。 * YES：发送屏幕共享的抖动，时延，丢包率任一项产生阈值告警，则屏幕共享发送告警状态为YES * NO：发送屏幕共享无告警
    * audioAlarmRec  音频接收告警。 * YES：接收音频的抖动，时延，丢包率任一项产生阈值告警，则音频接收告警状态为YES * NO：接收音频无告警
    * videoAlarmRec  视频接收告警。 * YES：接收视频的抖动，时延，丢包率任一项产生阈值告警，则视频接收告警状态为YES * NO：接收视频无告警
    * screenAlarmRec  屏幕共享接收告警。 * YES：接收屏幕共享的抖动，时延，丢包率任一项产生阈值告警，则屏幕共享接收告警状态为YES * NO：接收屏幕共享无告警
    * cpuAlarm  CPU告警。 * YES：端侧的APP最大CPU使用率或系统最大CPU使用率任一项产生阈值告警，则CPU告警状态为YES * NO：CPU无告警
    * microphoneInfo  麦克风。
    * speakerInfo  扬声器。
    * cameraInfo  摄像头。
    * dataCenter  数据中心。
    * leftReason  离会原因。此字段仅标识离会原因，不做为是否已离会的判断依据。正在与会人员的离会原因初始值 = 0。 * 0：正常离会 * 1：网络异常离会
    * existQos  与会者是否存在QoS数据。 * true：存在QoS数据 * false：不存在QoS数据
    *
    * @var string[]
    */
    protected static $setters = [
            'confUuid' => 'setConfUuid',
            'conferenceId' => 'setConferenceId',
            'participantId' => 'setParticipantId',
            'userUuid' => 'setUserUuid',
            'displayName' => 'setDisplayName',
            'deptName' => 'setDeptName',
            'terminalType' => 'setTerminalType',
            'role' => 'setRole',
            'ipAddress' => 'setIpAddress',
            'country' => 'setCountry',
            'province' => 'setProvince',
            'city' => 'setCity',
            'appVersion' => 'setAppVersion',
            'joinTime' => 'setJoinTime',
            'leftTime' => 'setLeftTime',
            'systemInfo' => 'setSystemInfo',
            'networkType' => 'setNetworkType',
            'alarm' => 'setAlarm',
            'audioAlarmSend' => 'setAudioAlarmSend',
            'videoAlarmSend' => 'setVideoAlarmSend',
            'screenAlarmSend' => 'setScreenAlarmSend',
            'audioAlarmRec' => 'setAudioAlarmRec',
            'videoAlarmRec' => 'setVideoAlarmRec',
            'screenAlarmRec' => 'setScreenAlarmRec',
            'cpuAlarm' => 'setCpuAlarm',
            'microphoneInfo' => 'setMicrophoneInfo',
            'speakerInfo' => 'setSpeakerInfo',
            'cameraInfo' => 'setCameraInfo',
            'dataCenter' => 'setDataCenter',
            'leftReason' => 'setLeftReason',
            'existQos' => 'setExistQos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * confUuid  会议的UUID。
    * conferenceId  会议ID。
    * participantId  与会者标识。
    * userUuid  用户UUID。
    * displayName  与会者的名称。
    * deptName  部门名称。
    * terminalType  入会终端类型。 - PC: PC机 - MOBILE: 手机 - PAD：PAD设备 - MAC：MAC设备 - WEB：WEB方式入会，如通过WebRTC入会 - ROOM: 会议室 - 硬件终端：显示具体的硬件设备类型，如TE50, HUAWEI IDEAHUB, CISCO等 - OTHER: 其他设备
    * role  与会者角色。 - host：主持人 - guest：来宾 - audience：观众
    * ipAddress  与会者的IP地址。
    * country  国家。
    * province  省市（仅限中国）。
    * city  城市（仅限中国）。
    * appVersion  华为云会议APP版本。
    * joinTime  入会时间(UTC时间), Unix时间戳（单位毫秒）。
    * leftTime  离会时间(UTC时间), Unix时间戳（单位毫秒）。 > * 与会者未离会：leftTime = 0 > * 与会者已离会：leftTime = 实际离会时间
    * systemInfo  终端操作系统信息。
    * networkType  网络类型。
    * alarm  总体告警。 * YES：音频（发送/接收），视频（发送/接收），屏幕共享（发送/接收），CPU任一项产生告警，总体告警状态即为 YES * NO：无告警
    * audioAlarmSend  音频发送告警。 * YES ：发送音频的抖动，时延，丢包率任一项产生阈值告警，则音频发送告警状态为YES * NO：发送音频无告警
    * videoAlarmSend  视频发送告警。 * YES ：发送视频的抖动，时延，丢包率任一项产生阈值告警，则视频发送告警状态为YES * NO：发送视频无告警
    * screenAlarmSend  屏幕共享发送告警。 * YES：发送屏幕共享的抖动，时延，丢包率任一项产生阈值告警，则屏幕共享发送告警状态为YES * NO：发送屏幕共享无告警
    * audioAlarmRec  音频接收告警。 * YES：接收音频的抖动，时延，丢包率任一项产生阈值告警，则音频接收告警状态为YES * NO：接收音频无告警
    * videoAlarmRec  视频接收告警。 * YES：接收视频的抖动，时延，丢包率任一项产生阈值告警，则视频接收告警状态为YES * NO：接收视频无告警
    * screenAlarmRec  屏幕共享接收告警。 * YES：接收屏幕共享的抖动，时延，丢包率任一项产生阈值告警，则屏幕共享接收告警状态为YES * NO：接收屏幕共享无告警
    * cpuAlarm  CPU告警。 * YES：端侧的APP最大CPU使用率或系统最大CPU使用率任一项产生阈值告警，则CPU告警状态为YES * NO：CPU无告警
    * microphoneInfo  麦克风。
    * speakerInfo  扬声器。
    * cameraInfo  摄像头。
    * dataCenter  数据中心。
    * leftReason  离会原因。此字段仅标识离会原因，不做为是否已离会的判断依据。正在与会人员的离会原因初始值 = 0。 * 0：正常离会 * 1：网络异常离会
    * existQos  与会者是否存在QoS数据。 * true：存在QoS数据 * false：不存在QoS数据
    *
    * @var string[]
    */
    protected static $getters = [
            'confUuid' => 'getConfUuid',
            'conferenceId' => 'getConferenceId',
            'participantId' => 'getParticipantId',
            'userUuid' => 'getUserUuid',
            'displayName' => 'getDisplayName',
            'deptName' => 'getDeptName',
            'terminalType' => 'getTerminalType',
            'role' => 'getRole',
            'ipAddress' => 'getIpAddress',
            'country' => 'getCountry',
            'province' => 'getProvince',
            'city' => 'getCity',
            'appVersion' => 'getAppVersion',
            'joinTime' => 'getJoinTime',
            'leftTime' => 'getLeftTime',
            'systemInfo' => 'getSystemInfo',
            'networkType' => 'getNetworkType',
            'alarm' => 'getAlarm',
            'audioAlarmSend' => 'getAudioAlarmSend',
            'videoAlarmSend' => 'getVideoAlarmSend',
            'screenAlarmSend' => 'getScreenAlarmSend',
            'audioAlarmRec' => 'getAudioAlarmRec',
            'videoAlarmRec' => 'getVideoAlarmRec',
            'screenAlarmRec' => 'getScreenAlarmRec',
            'cpuAlarm' => 'getCpuAlarm',
            'microphoneInfo' => 'getMicrophoneInfo',
            'speakerInfo' => 'getSpeakerInfo',
            'cameraInfo' => 'getCameraInfo',
            'dataCenter' => 'getDataCenter',
            'leftReason' => 'getLeftReason',
            'existQos' => 'getExistQos'
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
        $this->container['participantId'] = isset($data['participantId']) ? $data['participantId'] : null;
        $this->container['userUuid'] = isset($data['userUuid']) ? $data['userUuid'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['deptName'] = isset($data['deptName']) ? $data['deptName'] : null;
        $this->container['terminalType'] = isset($data['terminalType']) ? $data['terminalType'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['ipAddress'] = isset($data['ipAddress']) ? $data['ipAddress'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['province'] = isset($data['province']) ? $data['province'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['appVersion'] = isset($data['appVersion']) ? $data['appVersion'] : null;
        $this->container['joinTime'] = isset($data['joinTime']) ? $data['joinTime'] : null;
        $this->container['leftTime'] = isset($data['leftTime']) ? $data['leftTime'] : null;
        $this->container['systemInfo'] = isset($data['systemInfo']) ? $data['systemInfo'] : null;
        $this->container['networkType'] = isset($data['networkType']) ? $data['networkType'] : null;
        $this->container['alarm'] = isset($data['alarm']) ? $data['alarm'] : null;
        $this->container['audioAlarmSend'] = isset($data['audioAlarmSend']) ? $data['audioAlarmSend'] : null;
        $this->container['videoAlarmSend'] = isset($data['videoAlarmSend']) ? $data['videoAlarmSend'] : null;
        $this->container['screenAlarmSend'] = isset($data['screenAlarmSend']) ? $data['screenAlarmSend'] : null;
        $this->container['audioAlarmRec'] = isset($data['audioAlarmRec']) ? $data['audioAlarmRec'] : null;
        $this->container['videoAlarmRec'] = isset($data['videoAlarmRec']) ? $data['videoAlarmRec'] : null;
        $this->container['screenAlarmRec'] = isset($data['screenAlarmRec']) ? $data['screenAlarmRec'] : null;
        $this->container['cpuAlarm'] = isset($data['cpuAlarm']) ? $data['cpuAlarm'] : null;
        $this->container['microphoneInfo'] = isset($data['microphoneInfo']) ? $data['microphoneInfo'] : null;
        $this->container['speakerInfo'] = isset($data['speakerInfo']) ? $data['speakerInfo'] : null;
        $this->container['cameraInfo'] = isset($data['cameraInfo']) ? $data['cameraInfo'] : null;
        $this->container['dataCenter'] = isset($data['dataCenter']) ? $data['dataCenter'] : null;
        $this->container['leftReason'] = isset($data['leftReason']) ? $data['leftReason'] : null;
        $this->container['existQos'] = isset($data['existQos']) ? $data['existQos'] : null;
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
            if (!is_null($this->container['conferenceId']) && (mb_strlen($this->container['conferenceId']) > 32)) {
                $invalidProperties[] = "invalid value for 'conferenceId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['conferenceId']) && (mb_strlen($this->container['conferenceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'conferenceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['participantId']) && (mb_strlen($this->container['participantId']) > 64)) {
                $invalidProperties[] = "invalid value for 'participantId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['participantId']) && (mb_strlen($this->container['participantId']) < 0)) {
                $invalidProperties[] = "invalid value for 'participantId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['userUuid']) && (mb_strlen($this->container['userUuid']) > 64)) {
                $invalidProperties[] = "invalid value for 'userUuid', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['userUuid']) && (mb_strlen($this->container['userUuid']) < 0)) {
                $invalidProperties[] = "invalid value for 'userUuid', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['displayName']) && (mb_strlen($this->container['displayName']) > 512)) {
                $invalidProperties[] = "invalid value for 'displayName', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['displayName']) && (mb_strlen($this->container['displayName']) < 0)) {
                $invalidProperties[] = "invalid value for 'displayName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['deptName']) && (mb_strlen($this->container['deptName']) > 512)) {
                $invalidProperties[] = "invalid value for 'deptName', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['deptName']) && (mb_strlen($this->container['deptName']) < 0)) {
                $invalidProperties[] = "invalid value for 'deptName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['terminalType']) && (mb_strlen($this->container['terminalType']) > 32)) {
                $invalidProperties[] = "invalid value for 'terminalType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['terminalType']) && (mb_strlen($this->container['terminalType']) < 0)) {
                $invalidProperties[] = "invalid value for 'terminalType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['role']) && (mb_strlen($this->container['role']) > 32)) {
                $invalidProperties[] = "invalid value for 'role', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['role']) && (mb_strlen($this->container['role']) < 0)) {
                $invalidProperties[] = "invalid value for 'role', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ipAddress']) && (mb_strlen($this->container['ipAddress']) > 64)) {
                $invalidProperties[] = "invalid value for 'ipAddress', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['ipAddress']) && (mb_strlen($this->container['ipAddress']) < 0)) {
                $invalidProperties[] = "invalid value for 'ipAddress', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) > 128)) {
                $invalidProperties[] = "invalid value for 'country', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) < 0)) {
                $invalidProperties[] = "invalid value for 'country', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['province']) && (mb_strlen($this->container['province']) > 128)) {
                $invalidProperties[] = "invalid value for 'province', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['province']) && (mb_strlen($this->container['province']) < 0)) {
                $invalidProperties[] = "invalid value for 'province', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) > 128)) {
                $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) < 0)) {
                $invalidProperties[] = "invalid value for 'city', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appVersion']) && (mb_strlen($this->container['appVersion']) > 128)) {
                $invalidProperties[] = "invalid value for 'appVersion', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['appVersion']) && (mb_strlen($this->container['appVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'appVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['systemInfo']) && (mb_strlen($this->container['systemInfo']) > 128)) {
                $invalidProperties[] = "invalid value for 'systemInfo', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['systemInfo']) && (mb_strlen($this->container['systemInfo']) < 0)) {
                $invalidProperties[] = "invalid value for 'systemInfo', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['networkType']) && (mb_strlen($this->container['networkType']) > 64)) {
                $invalidProperties[] = "invalid value for 'networkType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['networkType']) && (mb_strlen($this->container['networkType']) < 0)) {
                $invalidProperties[] = "invalid value for 'networkType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['alarm']) && (mb_strlen($this->container['alarm']) > 16)) {
                $invalidProperties[] = "invalid value for 'alarm', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['alarm']) && (mb_strlen($this->container['alarm']) < 0)) {
                $invalidProperties[] = "invalid value for 'alarm', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['audioAlarmSend']) && (mb_strlen($this->container['audioAlarmSend']) > 16)) {
                $invalidProperties[] = "invalid value for 'audioAlarmSend', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['audioAlarmSend']) && (mb_strlen($this->container['audioAlarmSend']) < 0)) {
                $invalidProperties[] = "invalid value for 'audioAlarmSend', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['videoAlarmSend']) && (mb_strlen($this->container['videoAlarmSend']) > 16)) {
                $invalidProperties[] = "invalid value for 'videoAlarmSend', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['videoAlarmSend']) && (mb_strlen($this->container['videoAlarmSend']) < 0)) {
                $invalidProperties[] = "invalid value for 'videoAlarmSend', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['screenAlarmSend']) && (mb_strlen($this->container['screenAlarmSend']) > 16)) {
                $invalidProperties[] = "invalid value for 'screenAlarmSend', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['screenAlarmSend']) && (mb_strlen($this->container['screenAlarmSend']) < 0)) {
                $invalidProperties[] = "invalid value for 'screenAlarmSend', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['audioAlarmRec']) && (mb_strlen($this->container['audioAlarmRec']) > 16)) {
                $invalidProperties[] = "invalid value for 'audioAlarmRec', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['audioAlarmRec']) && (mb_strlen($this->container['audioAlarmRec']) < 0)) {
                $invalidProperties[] = "invalid value for 'audioAlarmRec', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['videoAlarmRec']) && (mb_strlen($this->container['videoAlarmRec']) > 16)) {
                $invalidProperties[] = "invalid value for 'videoAlarmRec', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['videoAlarmRec']) && (mb_strlen($this->container['videoAlarmRec']) < 0)) {
                $invalidProperties[] = "invalid value for 'videoAlarmRec', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['screenAlarmRec']) && (mb_strlen($this->container['screenAlarmRec']) > 16)) {
                $invalidProperties[] = "invalid value for 'screenAlarmRec', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['screenAlarmRec']) && (mb_strlen($this->container['screenAlarmRec']) < 0)) {
                $invalidProperties[] = "invalid value for 'screenAlarmRec', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cpuAlarm']) && (mb_strlen($this->container['cpuAlarm']) > 16)) {
                $invalidProperties[] = "invalid value for 'cpuAlarm', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['cpuAlarm']) && (mb_strlen($this->container['cpuAlarm']) < 0)) {
                $invalidProperties[] = "invalid value for 'cpuAlarm', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['microphoneInfo']) && (mb_strlen($this->container['microphoneInfo']) > 512)) {
                $invalidProperties[] = "invalid value for 'microphoneInfo', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['microphoneInfo']) && (mb_strlen($this->container['microphoneInfo']) < 0)) {
                $invalidProperties[] = "invalid value for 'microphoneInfo', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['speakerInfo']) && (mb_strlen($this->container['speakerInfo']) > 512)) {
                $invalidProperties[] = "invalid value for 'speakerInfo', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['speakerInfo']) && (mb_strlen($this->container['speakerInfo']) < 0)) {
                $invalidProperties[] = "invalid value for 'speakerInfo', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cameraInfo']) && (mb_strlen($this->container['cameraInfo']) > 512)) {
                $invalidProperties[] = "invalid value for 'cameraInfo', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['cameraInfo']) && (mb_strlen($this->container['cameraInfo']) < 0)) {
                $invalidProperties[] = "invalid value for 'cameraInfo', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dataCenter']) && (mb_strlen($this->container['dataCenter']) > 64)) {
                $invalidProperties[] = "invalid value for 'dataCenter', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dataCenter']) && (mb_strlen($this->container['dataCenter']) < 0)) {
                $invalidProperties[] = "invalid value for 'dataCenter', the character length must be bigger than or equal to 0.";
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
    *  会议的UUID。
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
    * @param string|null $confUuid 会议的UUID。
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
    * Gets participantId
    *  与会者标识。
    *
    * @return string|null
    */
    public function getParticipantId()
    {
        return $this->container['participantId'];
    }

    /**
    * Sets participantId
    *
    * @param string|null $participantId 与会者标识。
    *
    * @return $this
    */
    public function setParticipantId($participantId)
    {
        $this->container['participantId'] = $participantId;
        return $this;
    }

    /**
    * Gets userUuid
    *  用户UUID。
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
    * @param string|null $userUuid 用户UUID。
    *
    * @return $this
    */
    public function setUserUuid($userUuid)
    {
        $this->container['userUuid'] = $userUuid;
        return $this;
    }

    /**
    * Gets displayName
    *  与会者的名称。
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
    * @param string|null $displayName 与会者的名称。
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
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
    * Gets terminalType
    *  入会终端类型。 - PC: PC机 - MOBILE: 手机 - PAD：PAD设备 - MAC：MAC设备 - WEB：WEB方式入会，如通过WebRTC入会 - ROOM: 会议室 - 硬件终端：显示具体的硬件设备类型，如TE50, HUAWEI IDEAHUB, CISCO等 - OTHER: 其他设备
    *
    * @return string|null
    */
    public function getTerminalType()
    {
        return $this->container['terminalType'];
    }

    /**
    * Sets terminalType
    *
    * @param string|null $terminalType 入会终端类型。 - PC: PC机 - MOBILE: 手机 - PAD：PAD设备 - MAC：MAC设备 - WEB：WEB方式入会，如通过WebRTC入会 - ROOM: 会议室 - 硬件终端：显示具体的硬件设备类型，如TE50, HUAWEI IDEAHUB, CISCO等 - OTHER: 其他设备
    *
    * @return $this
    */
    public function setTerminalType($terminalType)
    {
        $this->container['terminalType'] = $terminalType;
        return $this;
    }

    /**
    * Gets role
    *  与会者角色。 - host：主持人 - guest：来宾 - audience：观众
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
    * @param string|null $role 与会者角色。 - host：主持人 - guest：来宾 - audience：观众
    *
    * @return $this
    */
    public function setRole($role)
    {
        $this->container['role'] = $role;
        return $this;
    }

    /**
    * Gets ipAddress
    *  与会者的IP地址。
    *
    * @return string|null
    */
    public function getIpAddress()
    {
        return $this->container['ipAddress'];
    }

    /**
    * Sets ipAddress
    *
    * @param string|null $ipAddress 与会者的IP地址。
    *
    * @return $this
    */
    public function setIpAddress($ipAddress)
    {
        $this->container['ipAddress'] = $ipAddress;
        return $this;
    }

    /**
    * Gets country
    *  国家。
    *
    * @return string|null
    */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
    * Sets country
    *
    * @param string|null $country 国家。
    *
    * @return $this
    */
    public function setCountry($country)
    {
        $this->container['country'] = $country;
        return $this;
    }

    /**
    * Gets province
    *  省市（仅限中国）。
    *
    * @return string|null
    */
    public function getProvince()
    {
        return $this->container['province'];
    }

    /**
    * Sets province
    *
    * @param string|null $province 省市（仅限中国）。
    *
    * @return $this
    */
    public function setProvince($province)
    {
        $this->container['province'] = $province;
        return $this;
    }

    /**
    * Gets city
    *  城市（仅限中国）。
    *
    * @return string|null
    */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
    * Sets city
    *
    * @param string|null $city 城市（仅限中国）。
    *
    * @return $this
    */
    public function setCity($city)
    {
        $this->container['city'] = $city;
        return $this;
    }

    /**
    * Gets appVersion
    *  华为云会议APP版本。
    *
    * @return string|null
    */
    public function getAppVersion()
    {
        return $this->container['appVersion'];
    }

    /**
    * Sets appVersion
    *
    * @param string|null $appVersion 华为云会议APP版本。
    *
    * @return $this
    */
    public function setAppVersion($appVersion)
    {
        $this->container['appVersion'] = $appVersion;
        return $this;
    }

    /**
    * Gets joinTime
    *  入会时间(UTC时间), Unix时间戳（单位毫秒）。
    *
    * @return int|null
    */
    public function getJoinTime()
    {
        return $this->container['joinTime'];
    }

    /**
    * Sets joinTime
    *
    * @param int|null $joinTime 入会时间(UTC时间), Unix时间戳（单位毫秒）。
    *
    * @return $this
    */
    public function setJoinTime($joinTime)
    {
        $this->container['joinTime'] = $joinTime;
        return $this;
    }

    /**
    * Gets leftTime
    *  离会时间(UTC时间), Unix时间戳（单位毫秒）。 > * 与会者未离会：leftTime = 0 > * 与会者已离会：leftTime = 实际离会时间
    *
    * @return int|null
    */
    public function getLeftTime()
    {
        return $this->container['leftTime'];
    }

    /**
    * Sets leftTime
    *
    * @param int|null $leftTime 离会时间(UTC时间), Unix时间戳（单位毫秒）。 > * 与会者未离会：leftTime = 0 > * 与会者已离会：leftTime = 实际离会时间
    *
    * @return $this
    */
    public function setLeftTime($leftTime)
    {
        $this->container['leftTime'] = $leftTime;
        return $this;
    }

    /**
    * Gets systemInfo
    *  终端操作系统信息。
    *
    * @return string|null
    */
    public function getSystemInfo()
    {
        return $this->container['systemInfo'];
    }

    /**
    * Sets systemInfo
    *
    * @param string|null $systemInfo 终端操作系统信息。
    *
    * @return $this
    */
    public function setSystemInfo($systemInfo)
    {
        $this->container['systemInfo'] = $systemInfo;
        return $this;
    }

    /**
    * Gets networkType
    *  网络类型。
    *
    * @return string|null
    */
    public function getNetworkType()
    {
        return $this->container['networkType'];
    }

    /**
    * Sets networkType
    *
    * @param string|null $networkType 网络类型。
    *
    * @return $this
    */
    public function setNetworkType($networkType)
    {
        $this->container['networkType'] = $networkType;
        return $this;
    }

    /**
    * Gets alarm
    *  总体告警。 * YES：音频（发送/接收），视频（发送/接收），屏幕共享（发送/接收），CPU任一项产生告警，总体告警状态即为 YES * NO：无告警
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
    * @param string|null $alarm 总体告警。 * YES：音频（发送/接收），视频（发送/接收），屏幕共享（发送/接收），CPU任一项产生告警，总体告警状态即为 YES * NO：无告警
    *
    * @return $this
    */
    public function setAlarm($alarm)
    {
        $this->container['alarm'] = $alarm;
        return $this;
    }

    /**
    * Gets audioAlarmSend
    *  音频发送告警。 * YES ：发送音频的抖动，时延，丢包率任一项产生阈值告警，则音频发送告警状态为YES * NO：发送音频无告警
    *
    * @return string|null
    */
    public function getAudioAlarmSend()
    {
        return $this->container['audioAlarmSend'];
    }

    /**
    * Sets audioAlarmSend
    *
    * @param string|null $audioAlarmSend 音频发送告警。 * YES ：发送音频的抖动，时延，丢包率任一项产生阈值告警，则音频发送告警状态为YES * NO：发送音频无告警
    *
    * @return $this
    */
    public function setAudioAlarmSend($audioAlarmSend)
    {
        $this->container['audioAlarmSend'] = $audioAlarmSend;
        return $this;
    }

    /**
    * Gets videoAlarmSend
    *  视频发送告警。 * YES ：发送视频的抖动，时延，丢包率任一项产生阈值告警，则视频发送告警状态为YES * NO：发送视频无告警
    *
    * @return string|null
    */
    public function getVideoAlarmSend()
    {
        return $this->container['videoAlarmSend'];
    }

    /**
    * Sets videoAlarmSend
    *
    * @param string|null $videoAlarmSend 视频发送告警。 * YES ：发送视频的抖动，时延，丢包率任一项产生阈值告警，则视频发送告警状态为YES * NO：发送视频无告警
    *
    * @return $this
    */
    public function setVideoAlarmSend($videoAlarmSend)
    {
        $this->container['videoAlarmSend'] = $videoAlarmSend;
        return $this;
    }

    /**
    * Gets screenAlarmSend
    *  屏幕共享发送告警。 * YES：发送屏幕共享的抖动，时延，丢包率任一项产生阈值告警，则屏幕共享发送告警状态为YES * NO：发送屏幕共享无告警
    *
    * @return string|null
    */
    public function getScreenAlarmSend()
    {
        return $this->container['screenAlarmSend'];
    }

    /**
    * Sets screenAlarmSend
    *
    * @param string|null $screenAlarmSend 屏幕共享发送告警。 * YES：发送屏幕共享的抖动，时延，丢包率任一项产生阈值告警，则屏幕共享发送告警状态为YES * NO：发送屏幕共享无告警
    *
    * @return $this
    */
    public function setScreenAlarmSend($screenAlarmSend)
    {
        $this->container['screenAlarmSend'] = $screenAlarmSend;
        return $this;
    }

    /**
    * Gets audioAlarmRec
    *  音频接收告警。 * YES：接收音频的抖动，时延，丢包率任一项产生阈值告警，则音频接收告警状态为YES * NO：接收音频无告警
    *
    * @return string|null
    */
    public function getAudioAlarmRec()
    {
        return $this->container['audioAlarmRec'];
    }

    /**
    * Sets audioAlarmRec
    *
    * @param string|null $audioAlarmRec 音频接收告警。 * YES：接收音频的抖动，时延，丢包率任一项产生阈值告警，则音频接收告警状态为YES * NO：接收音频无告警
    *
    * @return $this
    */
    public function setAudioAlarmRec($audioAlarmRec)
    {
        $this->container['audioAlarmRec'] = $audioAlarmRec;
        return $this;
    }

    /**
    * Gets videoAlarmRec
    *  视频接收告警。 * YES：接收视频的抖动，时延，丢包率任一项产生阈值告警，则视频接收告警状态为YES * NO：接收视频无告警
    *
    * @return string|null
    */
    public function getVideoAlarmRec()
    {
        return $this->container['videoAlarmRec'];
    }

    /**
    * Sets videoAlarmRec
    *
    * @param string|null $videoAlarmRec 视频接收告警。 * YES：接收视频的抖动，时延，丢包率任一项产生阈值告警，则视频接收告警状态为YES * NO：接收视频无告警
    *
    * @return $this
    */
    public function setVideoAlarmRec($videoAlarmRec)
    {
        $this->container['videoAlarmRec'] = $videoAlarmRec;
        return $this;
    }

    /**
    * Gets screenAlarmRec
    *  屏幕共享接收告警。 * YES：接收屏幕共享的抖动，时延，丢包率任一项产生阈值告警，则屏幕共享接收告警状态为YES * NO：接收屏幕共享无告警
    *
    * @return string|null
    */
    public function getScreenAlarmRec()
    {
        return $this->container['screenAlarmRec'];
    }

    /**
    * Sets screenAlarmRec
    *
    * @param string|null $screenAlarmRec 屏幕共享接收告警。 * YES：接收屏幕共享的抖动，时延，丢包率任一项产生阈值告警，则屏幕共享接收告警状态为YES * NO：接收屏幕共享无告警
    *
    * @return $this
    */
    public function setScreenAlarmRec($screenAlarmRec)
    {
        $this->container['screenAlarmRec'] = $screenAlarmRec;
        return $this;
    }

    /**
    * Gets cpuAlarm
    *  CPU告警。 * YES：端侧的APP最大CPU使用率或系统最大CPU使用率任一项产生阈值告警，则CPU告警状态为YES * NO：CPU无告警
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
    * @param string|null $cpuAlarm CPU告警。 * YES：端侧的APP最大CPU使用率或系统最大CPU使用率任一项产生阈值告警，则CPU告警状态为YES * NO：CPU无告警
    *
    * @return $this
    */
    public function setCpuAlarm($cpuAlarm)
    {
        $this->container['cpuAlarm'] = $cpuAlarm;
        return $this;
    }

    /**
    * Gets microphoneInfo
    *  麦克风。
    *
    * @return string|null
    */
    public function getMicrophoneInfo()
    {
        return $this->container['microphoneInfo'];
    }

    /**
    * Sets microphoneInfo
    *
    * @param string|null $microphoneInfo 麦克风。
    *
    * @return $this
    */
    public function setMicrophoneInfo($microphoneInfo)
    {
        $this->container['microphoneInfo'] = $microphoneInfo;
        return $this;
    }

    /**
    * Gets speakerInfo
    *  扬声器。
    *
    * @return string|null
    */
    public function getSpeakerInfo()
    {
        return $this->container['speakerInfo'];
    }

    /**
    * Sets speakerInfo
    *
    * @param string|null $speakerInfo 扬声器。
    *
    * @return $this
    */
    public function setSpeakerInfo($speakerInfo)
    {
        $this->container['speakerInfo'] = $speakerInfo;
        return $this;
    }

    /**
    * Gets cameraInfo
    *  摄像头。
    *
    * @return string|null
    */
    public function getCameraInfo()
    {
        return $this->container['cameraInfo'];
    }

    /**
    * Sets cameraInfo
    *
    * @param string|null $cameraInfo 摄像头。
    *
    * @return $this
    */
    public function setCameraInfo($cameraInfo)
    {
        $this->container['cameraInfo'] = $cameraInfo;
        return $this;
    }

    /**
    * Gets dataCenter
    *  数据中心。
    *
    * @return string|null
    */
    public function getDataCenter()
    {
        return $this->container['dataCenter'];
    }

    /**
    * Sets dataCenter
    *
    * @param string|null $dataCenter 数据中心。
    *
    * @return $this
    */
    public function setDataCenter($dataCenter)
    {
        $this->container['dataCenter'] = $dataCenter;
        return $this;
    }

    /**
    * Gets leftReason
    *  离会原因。此字段仅标识离会原因，不做为是否已离会的判断依据。正在与会人员的离会原因初始值 = 0。 * 0：正常离会 * 1：网络异常离会
    *
    * @return int|null
    */
    public function getLeftReason()
    {
        return $this->container['leftReason'];
    }

    /**
    * Sets leftReason
    *
    * @param int|null $leftReason 离会原因。此字段仅标识离会原因，不做为是否已离会的判断依据。正在与会人员的离会原因初始值 = 0。 * 0：正常离会 * 1：网络异常离会
    *
    * @return $this
    */
    public function setLeftReason($leftReason)
    {
        $this->container['leftReason'] = $leftReason;
        return $this;
    }

    /**
    * Gets existQos
    *  与会者是否存在QoS数据。 * true：存在QoS数据 * false：不存在QoS数据
    *
    * @return bool|null
    */
    public function getExistQos()
    {
        return $this->container['existQos'];
    }

    /**
    * Sets existQos
    *
    * @param bool|null $existQos 与会者是否存在QoS数据。 * true：存在QoS数据 * false：不存在QoS数据
    *
    * @return $this
    */
    public function setExistQos($existQos)
    {
        $this->container['existQos'] = $existQos;
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

