<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSmartChatJobResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSmartChatJobResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  数字人智能交互对话任务ID。
    * state  数字人智能交互对话任务的状态。 * WAITING: 等待 * PROCESSING: 处理中 * SUCCEED: 成功 * FAILED: 失败 * CANCELED: 取消 * HEARTBEAT: 心跳
    * duration  数字人智能交互对话时长，单位秒。
    * startTime  数字人智能交互对话任务开始时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * endTime  数字人智能交互对话任务结束时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * errorInfo  errorInfo
    * createTime  数字人智能交互对话任务创建时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * lastupdateTime  数字人智能交互对话任务最后更新时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * rtcRoomInfo  rtcRoomInfo
    * chatSubtitleConfig  chatSubtitleConfig
    * videoConfig  videoConfig
    * voiceConfigList  语音配置参数列表。
    * chatState  数字人智能交互对话的状态。 0: 等待建链 1: 等待关闭链路 2: 建链成功 3: 进入休眠 4: 等待休眠
    * language  language
    * chatVideoType  智能交互对话端配置。 * COMPUTER: 电脑端 * MOBILE: 手机端 * HUB: 大屏
    * chatAccessAddress  智能交互接入地址。
    * chatAccessRestAddress  智能交互Rest接口接入地址。
    * isTransparent  是否透明背景
    * defaultLanguage  默认语言，智能交互接口使用。默认值CN。 * CN：中文。 * EN：英文。 * ESP：西班牙语（仅海外站点支持） * por：葡萄牙语（仅海外站点支持） * Arabic：阿拉伯语（仅海外站点支持） * Thai：泰语（仅海外站点支持）
    * clientId  clientId
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'state' => 'string',
            'duration' => 'float',
            'startTime' => 'string',
            'endTime' => 'string',
            'errorInfo' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ErrorResponse',
            'createTime' => 'string',
            'lastupdateTime' => 'string',
            'rtcRoomInfo' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\RTCRoomInfoList',
            'chatSubtitleConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\SmartChatSubtitleConfig',
            'videoConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\SmartChatVideoConfig',
            'voiceConfigList' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\SmartChatVoiceConfig[]',
            'chatState' => 'int',
            'language' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LanguageEnum',
            'chatVideoType' => 'string',
            'chatAccessAddress' => 'string',
            'chatAccessRestAddress' => 'string',
            'isTransparent' => 'bool',
            'defaultLanguage' => 'string',
            'clientId' => 'string',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  数字人智能交互对话任务ID。
    * state  数字人智能交互对话任务的状态。 * WAITING: 等待 * PROCESSING: 处理中 * SUCCEED: 成功 * FAILED: 失败 * CANCELED: 取消 * HEARTBEAT: 心跳
    * duration  数字人智能交互对话时长，单位秒。
    * startTime  数字人智能交互对话任务开始时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * endTime  数字人智能交互对话任务结束时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * errorInfo  errorInfo
    * createTime  数字人智能交互对话任务创建时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * lastupdateTime  数字人智能交互对话任务最后更新时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * rtcRoomInfo  rtcRoomInfo
    * chatSubtitleConfig  chatSubtitleConfig
    * videoConfig  videoConfig
    * voiceConfigList  语音配置参数列表。
    * chatState  数字人智能交互对话的状态。 0: 等待建链 1: 等待关闭链路 2: 建链成功 3: 进入休眠 4: 等待休眠
    * language  language
    * chatVideoType  智能交互对话端配置。 * COMPUTER: 电脑端 * MOBILE: 手机端 * HUB: 大屏
    * chatAccessAddress  智能交互接入地址。
    * chatAccessRestAddress  智能交互Rest接口接入地址。
    * isTransparent  是否透明背景
    * defaultLanguage  默认语言，智能交互接口使用。默认值CN。 * CN：中文。 * EN：英文。 * ESP：西班牙语（仅海外站点支持） * por：葡萄牙语（仅海外站点支持） * Arabic：阿拉伯语（仅海外站点支持） * Thai：泰语（仅海外站点支持）
    * clientId  clientId
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'state' => null,
        'duration' => 'float',
        'startTime' => null,
        'endTime' => null,
        'errorInfo' => null,
        'createTime' => null,
        'lastupdateTime' => null,
        'rtcRoomInfo' => null,
        'chatSubtitleConfig' => null,
        'videoConfig' => null,
        'voiceConfigList' => null,
        'chatState' => null,
        'language' => null,
        'chatVideoType' => null,
        'chatAccessAddress' => null,
        'chatAccessRestAddress' => null,
        'isTransparent' => null,
        'defaultLanguage' => null,
        'clientId' => null,
        'xRequestId' => null
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
    * jobId  数字人智能交互对话任务ID。
    * state  数字人智能交互对话任务的状态。 * WAITING: 等待 * PROCESSING: 处理中 * SUCCEED: 成功 * FAILED: 失败 * CANCELED: 取消 * HEARTBEAT: 心跳
    * duration  数字人智能交互对话时长，单位秒。
    * startTime  数字人智能交互对话任务开始时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * endTime  数字人智能交互对话任务结束时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * errorInfo  errorInfo
    * createTime  数字人智能交互对话任务创建时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * lastupdateTime  数字人智能交互对话任务最后更新时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * rtcRoomInfo  rtcRoomInfo
    * chatSubtitleConfig  chatSubtitleConfig
    * videoConfig  videoConfig
    * voiceConfigList  语音配置参数列表。
    * chatState  数字人智能交互对话的状态。 0: 等待建链 1: 等待关闭链路 2: 建链成功 3: 进入休眠 4: 等待休眠
    * language  language
    * chatVideoType  智能交互对话端配置。 * COMPUTER: 电脑端 * MOBILE: 手机端 * HUB: 大屏
    * chatAccessAddress  智能交互接入地址。
    * chatAccessRestAddress  智能交互Rest接口接入地址。
    * isTransparent  是否透明背景
    * defaultLanguage  默认语言，智能交互接口使用。默认值CN。 * CN：中文。 * EN：英文。 * ESP：西班牙语（仅海外站点支持） * por：葡萄牙语（仅海外站点支持） * Arabic：阿拉伯语（仅海外站点支持） * Thai：泰语（仅海外站点支持）
    * clientId  clientId
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'state' => 'state',
            'duration' => 'duration',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'errorInfo' => 'error_info',
            'createTime' => 'create_time',
            'lastupdateTime' => 'lastupdate_time',
            'rtcRoomInfo' => 'rtc_room_info',
            'chatSubtitleConfig' => 'chat_subtitle_config',
            'videoConfig' => 'video_config',
            'voiceConfigList' => 'voice_config_list',
            'chatState' => 'chat_state',
            'language' => 'language',
            'chatVideoType' => 'chat_video_type',
            'chatAccessAddress' => 'chat_access_address',
            'chatAccessRestAddress' => 'chat_access_rest_address',
            'isTransparent' => 'is_transparent',
            'defaultLanguage' => 'default_language',
            'clientId' => 'client_id',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  数字人智能交互对话任务ID。
    * state  数字人智能交互对话任务的状态。 * WAITING: 等待 * PROCESSING: 处理中 * SUCCEED: 成功 * FAILED: 失败 * CANCELED: 取消 * HEARTBEAT: 心跳
    * duration  数字人智能交互对话时长，单位秒。
    * startTime  数字人智能交互对话任务开始时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * endTime  数字人智能交互对话任务结束时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * errorInfo  errorInfo
    * createTime  数字人智能交互对话任务创建时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * lastupdateTime  数字人智能交互对话任务最后更新时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * rtcRoomInfo  rtcRoomInfo
    * chatSubtitleConfig  chatSubtitleConfig
    * videoConfig  videoConfig
    * voiceConfigList  语音配置参数列表。
    * chatState  数字人智能交互对话的状态。 0: 等待建链 1: 等待关闭链路 2: 建链成功 3: 进入休眠 4: 等待休眠
    * language  language
    * chatVideoType  智能交互对话端配置。 * COMPUTER: 电脑端 * MOBILE: 手机端 * HUB: 大屏
    * chatAccessAddress  智能交互接入地址。
    * chatAccessRestAddress  智能交互Rest接口接入地址。
    * isTransparent  是否透明背景
    * defaultLanguage  默认语言，智能交互接口使用。默认值CN。 * CN：中文。 * EN：英文。 * ESP：西班牙语（仅海外站点支持） * por：葡萄牙语（仅海外站点支持） * Arabic：阿拉伯语（仅海外站点支持） * Thai：泰语（仅海外站点支持）
    * clientId  clientId
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'state' => 'setState',
            'duration' => 'setDuration',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'errorInfo' => 'setErrorInfo',
            'createTime' => 'setCreateTime',
            'lastupdateTime' => 'setLastupdateTime',
            'rtcRoomInfo' => 'setRtcRoomInfo',
            'chatSubtitleConfig' => 'setChatSubtitleConfig',
            'videoConfig' => 'setVideoConfig',
            'voiceConfigList' => 'setVoiceConfigList',
            'chatState' => 'setChatState',
            'language' => 'setLanguage',
            'chatVideoType' => 'setChatVideoType',
            'chatAccessAddress' => 'setChatAccessAddress',
            'chatAccessRestAddress' => 'setChatAccessRestAddress',
            'isTransparent' => 'setIsTransparent',
            'defaultLanguage' => 'setDefaultLanguage',
            'clientId' => 'setClientId',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  数字人智能交互对话任务ID。
    * state  数字人智能交互对话任务的状态。 * WAITING: 等待 * PROCESSING: 处理中 * SUCCEED: 成功 * FAILED: 失败 * CANCELED: 取消 * HEARTBEAT: 心跳
    * duration  数字人智能交互对话时长，单位秒。
    * startTime  数字人智能交互对话任务开始时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * endTime  数字人智能交互对话任务结束时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * errorInfo  errorInfo
    * createTime  数字人智能交互对话任务创建时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * lastupdateTime  数字人智能交互对话任务最后更新时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * rtcRoomInfo  rtcRoomInfo
    * chatSubtitleConfig  chatSubtitleConfig
    * videoConfig  videoConfig
    * voiceConfigList  语音配置参数列表。
    * chatState  数字人智能交互对话的状态。 0: 等待建链 1: 等待关闭链路 2: 建链成功 3: 进入休眠 4: 等待休眠
    * language  language
    * chatVideoType  智能交互对话端配置。 * COMPUTER: 电脑端 * MOBILE: 手机端 * HUB: 大屏
    * chatAccessAddress  智能交互接入地址。
    * chatAccessRestAddress  智能交互Rest接口接入地址。
    * isTransparent  是否透明背景
    * defaultLanguage  默认语言，智能交互接口使用。默认值CN。 * CN：中文。 * EN：英文。 * ESP：西班牙语（仅海外站点支持） * por：葡萄牙语（仅海外站点支持） * Arabic：阿拉伯语（仅海外站点支持） * Thai：泰语（仅海外站点支持）
    * clientId  clientId
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'state' => 'getState',
            'duration' => 'getDuration',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'errorInfo' => 'getErrorInfo',
            'createTime' => 'getCreateTime',
            'lastupdateTime' => 'getLastupdateTime',
            'rtcRoomInfo' => 'getRtcRoomInfo',
            'chatSubtitleConfig' => 'getChatSubtitleConfig',
            'videoConfig' => 'getVideoConfig',
            'voiceConfigList' => 'getVoiceConfigList',
            'chatState' => 'getChatState',
            'language' => 'getLanguage',
            'chatVideoType' => 'getChatVideoType',
            'chatAccessAddress' => 'getChatAccessAddress',
            'chatAccessRestAddress' => 'getChatAccessRestAddress',
            'isTransparent' => 'getIsTransparent',
            'defaultLanguage' => 'getDefaultLanguage',
            'clientId' => 'getClientId',
            'xRequestId' => 'getXRequestId'
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
    const STATE_WAITING = 'WAITING';
    const STATE_PROCESSING = 'PROCESSING';
    const STATE_SUCCEED = 'SUCCEED';
    const STATE_FAILED = 'FAILED';
    const STATE_CANCELED = 'CANCELED';
    const STATE_HEARTBEAT = 'HEARTBEAT';
    const CHAT_VIDEO_TYPE_COMPUTER = 'COMPUTER';
    const CHAT_VIDEO_TYPE_MOBILE = 'MOBILE';
    const CHAT_VIDEO_TYPE_HUB = 'HUB';
    const DEFAULT_LANGUAGE_CN = 'CN';
    const DEFAULT_LANGUAGE_EN = 'EN';
    const DEFAULT_LANGUAGE_ESP = 'ESP';
    const DEFAULT_LANGUAGE_POR = 'por';
    const DEFAULT_LANGUAGE_ARABIC = 'Arabic';
    const DEFAULT_LANGUAGE_THAI = 'Thai';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_WAITING,
            self::STATE_PROCESSING,
            self::STATE_SUCCEED,
            self::STATE_FAILED,
            self::STATE_CANCELED,
            self::STATE_HEARTBEAT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChatVideoTypeAllowableValues()
    {
        return [
            self::CHAT_VIDEO_TYPE_COMPUTER,
            self::CHAT_VIDEO_TYPE_MOBILE,
            self::CHAT_VIDEO_TYPE_HUB,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDefaultLanguageAllowableValues()
    {
        return [
            self::DEFAULT_LANGUAGE_CN,
            self::DEFAULT_LANGUAGE_EN,
            self::DEFAULT_LANGUAGE_ESP,
            self::DEFAULT_LANGUAGE_POR,
            self::DEFAULT_LANGUAGE_ARABIC,
            self::DEFAULT_LANGUAGE_THAI,
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['errorInfo'] = isset($data['errorInfo']) ? $data['errorInfo'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['lastupdateTime'] = isset($data['lastupdateTime']) ? $data['lastupdateTime'] : null;
        $this->container['rtcRoomInfo'] = isset($data['rtcRoomInfo']) ? $data['rtcRoomInfo'] : null;
        $this->container['chatSubtitleConfig'] = isset($data['chatSubtitleConfig']) ? $data['chatSubtitleConfig'] : null;
        $this->container['videoConfig'] = isset($data['videoConfig']) ? $data['videoConfig'] : null;
        $this->container['voiceConfigList'] = isset($data['voiceConfigList']) ? $data['voiceConfigList'] : null;
        $this->container['chatState'] = isset($data['chatState']) ? $data['chatState'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['chatVideoType'] = isset($data['chatVideoType']) ? $data['chatVideoType'] : null;
        $this->container['chatAccessAddress'] = isset($data['chatAccessAddress']) ? $data['chatAccessAddress'] : null;
        $this->container['chatAccessRestAddress'] = isset($data['chatAccessRestAddress']) ? $data['chatAccessRestAddress'] : null;
        $this->container['isTransparent'] = isset($data['isTransparent']) ? $data['isTransparent'] : null;
        $this->container['defaultLanguage'] = isset($data['defaultLanguage']) ? $data['defaultLanguage'] : null;
        $this->container['clientId'] = isset($data['clientId']) ? $data['clientId'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) > 64)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 64)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) < 1)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['duration']) && ($this->container['duration'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'duration', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['duration']) && ($this->container['duration'] < 0)) {
                $invalidProperties[] = "invalid value for 'duration', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['lastupdateTime']) && (mb_strlen($this->container['lastupdateTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'lastupdateTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['lastupdateTime']) && (mb_strlen($this->container['lastupdateTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'lastupdateTime', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['chatState']) && ($this->container['chatState'] > 32)) {
                $invalidProperties[] = "invalid value for 'chatState', must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['chatState']) && ($this->container['chatState'] < 0)) {
                $invalidProperties[] = "invalid value for 'chatState', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getChatVideoTypeAllowableValues();
                if (!is_null($this->container['chatVideoType']) && !in_array($this->container['chatVideoType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chatVideoType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['chatVideoType']) && (mb_strlen($this->container['chatVideoType']) > 64)) {
                $invalidProperties[] = "invalid value for 'chatVideoType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['chatVideoType']) && (mb_strlen($this->container['chatVideoType']) < 1)) {
                $invalidProperties[] = "invalid value for 'chatVideoType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['chatAccessAddress']) && (mb_strlen($this->container['chatAccessAddress']) > 128)) {
                $invalidProperties[] = "invalid value for 'chatAccessAddress', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['chatAccessAddress']) && (mb_strlen($this->container['chatAccessAddress']) < 1)) {
                $invalidProperties[] = "invalid value for 'chatAccessAddress', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['chatAccessRestAddress']) && (mb_strlen($this->container['chatAccessRestAddress']) > 128)) {
                $invalidProperties[] = "invalid value for 'chatAccessRestAddress', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['chatAccessRestAddress']) && (mb_strlen($this->container['chatAccessRestAddress']) < 1)) {
                $invalidProperties[] = "invalid value for 'chatAccessRestAddress', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getDefaultLanguageAllowableValues();
                if (!is_null($this->container['defaultLanguage']) && !in_array($this->container['defaultLanguage'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'defaultLanguage', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['clientId']) && (mb_strlen($this->container['clientId']) > 64)) {
                $invalidProperties[] = "invalid value for 'clientId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['clientId']) && (mb_strlen($this->container['clientId']) < 0)) {
                $invalidProperties[] = "invalid value for 'clientId', the character length must be bigger than or equal to 0.";
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
    * Gets jobId
    *  数字人智能交互对话任务ID。
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId 数字人智能交互对话任务ID。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets state
    *  数字人智能交互对话任务的状态。 * WAITING: 等待 * PROCESSING: 处理中 * SUCCEED: 成功 * FAILED: 失败 * CANCELED: 取消 * HEARTBEAT: 心跳
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 数字人智能交互对话任务的状态。 * WAITING: 等待 * PROCESSING: 处理中 * SUCCEED: 成功 * FAILED: 失败 * CANCELED: 取消 * HEARTBEAT: 心跳
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets duration
    *  数字人智能交互对话时长，单位秒。
    *
    * @return float|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param float|null $duration 数字人智能交互对话时长，单位秒。
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets startTime
    *  数字人智能交互对话任务开始时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
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
    * @param string|null $startTime 数字人智能交互对话任务开始时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
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
    *  数字人智能交互对话任务结束时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
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
    * @param string|null $endTime 数字人智能交互对话任务结束时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets errorInfo
    *  errorInfo
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ErrorResponse|null
    */
    public function getErrorInfo()
    {
        return $this->container['errorInfo'];
    }

    /**
    * Sets errorInfo
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ErrorResponse|null $errorInfo errorInfo
    *
    * @return $this
    */
    public function setErrorInfo($errorInfo)
    {
        $this->container['errorInfo'] = $errorInfo;
        return $this;
    }

    /**
    * Gets createTime
    *  数字人智能交互对话任务创建时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 数字人智能交互对话任务创建时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets lastupdateTime
    *  数字人智能交互对话任务最后更新时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return string|null
    */
    public function getLastupdateTime()
    {
        return $this->container['lastupdateTime'];
    }

    /**
    * Sets lastupdateTime
    *
    * @param string|null $lastupdateTime 数字人智能交互对话任务最后更新时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return $this
    */
    public function setLastupdateTime($lastupdateTime)
    {
        $this->container['lastupdateTime'] = $lastupdateTime;
        return $this;
    }

    /**
    * Gets rtcRoomInfo
    *  rtcRoomInfo
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\RTCRoomInfoList|null
    */
    public function getRtcRoomInfo()
    {
        return $this->container['rtcRoomInfo'];
    }

    /**
    * Sets rtcRoomInfo
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\RTCRoomInfoList|null $rtcRoomInfo rtcRoomInfo
    *
    * @return $this
    */
    public function setRtcRoomInfo($rtcRoomInfo)
    {
        $this->container['rtcRoomInfo'] = $rtcRoomInfo;
        return $this;
    }

    /**
    * Gets chatSubtitleConfig
    *  chatSubtitleConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\SmartChatSubtitleConfig|null
    */
    public function getChatSubtitleConfig()
    {
        return $this->container['chatSubtitleConfig'];
    }

    /**
    * Sets chatSubtitleConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\SmartChatSubtitleConfig|null $chatSubtitleConfig chatSubtitleConfig
    *
    * @return $this
    */
    public function setChatSubtitleConfig($chatSubtitleConfig)
    {
        $this->container['chatSubtitleConfig'] = $chatSubtitleConfig;
        return $this;
    }

    /**
    * Gets videoConfig
    *  videoConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\SmartChatVideoConfig|null
    */
    public function getVideoConfig()
    {
        return $this->container['videoConfig'];
    }

    /**
    * Sets videoConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\SmartChatVideoConfig|null $videoConfig videoConfig
    *
    * @return $this
    */
    public function setVideoConfig($videoConfig)
    {
        $this->container['videoConfig'] = $videoConfig;
        return $this;
    }

    /**
    * Gets voiceConfigList
    *  语音配置参数列表。
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\SmartChatVoiceConfig[]|null
    */
    public function getVoiceConfigList()
    {
        return $this->container['voiceConfigList'];
    }

    /**
    * Sets voiceConfigList
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\SmartChatVoiceConfig[]|null $voiceConfigList 语音配置参数列表。
    *
    * @return $this
    */
    public function setVoiceConfigList($voiceConfigList)
    {
        $this->container['voiceConfigList'] = $voiceConfigList;
        return $this;
    }

    /**
    * Gets chatState
    *  数字人智能交互对话的状态。 0: 等待建链 1: 等待关闭链路 2: 建链成功 3: 进入休眠 4: 等待休眠
    *
    * @return int|null
    */
    public function getChatState()
    {
        return $this->container['chatState'];
    }

    /**
    * Sets chatState
    *
    * @param int|null $chatState 数字人智能交互对话的状态。 0: 等待建链 1: 等待关闭链路 2: 建链成功 3: 进入休眠 4: 等待休眠
    *
    * @return $this
    */
    public function setChatState($chatState)
    {
        $this->container['chatState'] = $chatState;
        return $this;
    }

    /**
    * Gets language
    *  language
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\LanguageEnum|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\LanguageEnum|null $language language
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets chatVideoType
    *  智能交互对话端配置。 * COMPUTER: 电脑端 * MOBILE: 手机端 * HUB: 大屏
    *
    * @return string|null
    */
    public function getChatVideoType()
    {
        return $this->container['chatVideoType'];
    }

    /**
    * Sets chatVideoType
    *
    * @param string|null $chatVideoType 智能交互对话端配置。 * COMPUTER: 电脑端 * MOBILE: 手机端 * HUB: 大屏
    *
    * @return $this
    */
    public function setChatVideoType($chatVideoType)
    {
        $this->container['chatVideoType'] = $chatVideoType;
        return $this;
    }

    /**
    * Gets chatAccessAddress
    *  智能交互接入地址。
    *
    * @return string|null
    */
    public function getChatAccessAddress()
    {
        return $this->container['chatAccessAddress'];
    }

    /**
    * Sets chatAccessAddress
    *
    * @param string|null $chatAccessAddress 智能交互接入地址。
    *
    * @return $this
    */
    public function setChatAccessAddress($chatAccessAddress)
    {
        $this->container['chatAccessAddress'] = $chatAccessAddress;
        return $this;
    }

    /**
    * Gets chatAccessRestAddress
    *  智能交互Rest接口接入地址。
    *
    * @return string|null
    */
    public function getChatAccessRestAddress()
    {
        return $this->container['chatAccessRestAddress'];
    }

    /**
    * Sets chatAccessRestAddress
    *
    * @param string|null $chatAccessRestAddress 智能交互Rest接口接入地址。
    *
    * @return $this
    */
    public function setChatAccessRestAddress($chatAccessRestAddress)
    {
        $this->container['chatAccessRestAddress'] = $chatAccessRestAddress;
        return $this;
    }

    /**
    * Gets isTransparent
    *  是否透明背景
    *
    * @return bool|null
    */
    public function getIsTransparent()
    {
        return $this->container['isTransparent'];
    }

    /**
    * Sets isTransparent
    *
    * @param bool|null $isTransparent 是否透明背景
    *
    * @return $this
    */
    public function setIsTransparent($isTransparent)
    {
        $this->container['isTransparent'] = $isTransparent;
        return $this;
    }

    /**
    * Gets defaultLanguage
    *  默认语言，智能交互接口使用。默认值CN。 * CN：中文。 * EN：英文。 * ESP：西班牙语（仅海外站点支持） * por：葡萄牙语（仅海外站点支持） * Arabic：阿拉伯语（仅海外站点支持） * Thai：泰语（仅海外站点支持）
    *
    * @return string|null
    */
    public function getDefaultLanguage()
    {
        return $this->container['defaultLanguage'];
    }

    /**
    * Sets defaultLanguage
    *
    * @param string|null $defaultLanguage 默认语言，智能交互接口使用。默认值CN。 * CN：中文。 * EN：英文。 * ESP：西班牙语（仅海外站点支持） * por：葡萄牙语（仅海外站点支持） * Arabic：阿拉伯语（仅海外站点支持） * Thai：泰语（仅海外站点支持）
    *
    * @return $this
    */
    public function setDefaultLanguage($defaultLanguage)
    {
        $this->container['defaultLanguage'] = $defaultLanguage;
        return $this;
    }

    /**
    * Gets clientId
    *  clientId
    *
    * @return string|null
    */
    public function getClientId()
    {
        return $this->container['clientId'];
    }

    /**
    * Sets clientId
    *
    * @param string|null $clientId clientId
    *
    * @return $this
    */
    public function setClientId($clientId)
    {
        $this->container['clientId'] = $clientId;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

