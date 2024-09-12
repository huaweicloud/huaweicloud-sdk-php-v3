<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSmartLiveResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSmartLiveResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  数字人直播任务ID。
    * roomId  直播间ID
    * roomName  直播间名称
    * state  数字人直播任务的状态。 * WAITING: 等待 * PROCESSING: 处理中 * SUCCEED: 成功 * FAILED: 失败 * BLOCKED: 封禁
    * duration  **参数解释**： 数字人直播时长，单位秒。
    * startTime  数字人直播任务开始时间。格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    * endTime  数字人直播任务结束时间。格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    * errorInfo  errorInfo
    * createTime  数字人直播任务创建时间。格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    * lastupdateTime  数字人直播任务最后更新时间。格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    * rtcRoomInfo  rtcRoomInfo
    * liveEventReportUrl  直播事件上报地址。用户将自行获取的直播间事件上报到此地址，用于触发智能互动，自动回复话术。
    * liveEventCallbackConfig  liveEventCallbackConfig
    * rtcCallbackConfig  rtcCallbackConfig
    * streamDuration  **参数解释**： 数字人直播推流时长，单位秒。
    * blockReason  封禁信息
    * coverUrl  直播间封面图URL
    * coStreamerConfig  coStreamerConfig
    * liveJobLog  liveJobLog
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'roomId' => 'string',
            'roomName' => 'string',
            'state' => 'string',
            'duration' => 'float',
            'startTime' => 'string',
            'endTime' => 'string',
            'errorInfo' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ErrorResponse',
            'createTime' => 'string',
            'lastupdateTime' => 'string',
            'rtcRoomInfo' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\RTCRoomInfoList',
            'liveEventReportUrl' => 'string',
            'liveEventCallbackConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LiveEventCallBackConfig',
            'rtcCallbackConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\RTCLiveEventCallBackConfig',
            'streamDuration' => 'float',
            'blockReason' => 'string',
            'coverUrl' => 'string',
            'coStreamerConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\CoStreamerConfig',
            'liveJobLog' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LiveJobLog',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  数字人直播任务ID。
    * roomId  直播间ID
    * roomName  直播间名称
    * state  数字人直播任务的状态。 * WAITING: 等待 * PROCESSING: 处理中 * SUCCEED: 成功 * FAILED: 失败 * BLOCKED: 封禁
    * duration  **参数解释**： 数字人直播时长，单位秒。
    * startTime  数字人直播任务开始时间。格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    * endTime  数字人直播任务结束时间。格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    * errorInfo  errorInfo
    * createTime  数字人直播任务创建时间。格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    * lastupdateTime  数字人直播任务最后更新时间。格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    * rtcRoomInfo  rtcRoomInfo
    * liveEventReportUrl  直播事件上报地址。用户将自行获取的直播间事件上报到此地址，用于触发智能互动，自动回复话术。
    * liveEventCallbackConfig  liveEventCallbackConfig
    * rtcCallbackConfig  rtcCallbackConfig
    * streamDuration  **参数解释**： 数字人直播推流时长，单位秒。
    * blockReason  封禁信息
    * coverUrl  直播间封面图URL
    * coStreamerConfig  coStreamerConfig
    * liveJobLog  liveJobLog
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'roomId' => null,
        'roomName' => null,
        'state' => null,
        'duration' => 'float',
        'startTime' => null,
        'endTime' => null,
        'errorInfo' => null,
        'createTime' => null,
        'lastupdateTime' => null,
        'rtcRoomInfo' => null,
        'liveEventReportUrl' => null,
        'liveEventCallbackConfig' => null,
        'rtcCallbackConfig' => null,
        'streamDuration' => 'float',
        'blockReason' => null,
        'coverUrl' => null,
        'coStreamerConfig' => null,
        'liveJobLog' => null,
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
    * jobId  数字人直播任务ID。
    * roomId  直播间ID
    * roomName  直播间名称
    * state  数字人直播任务的状态。 * WAITING: 等待 * PROCESSING: 处理中 * SUCCEED: 成功 * FAILED: 失败 * BLOCKED: 封禁
    * duration  **参数解释**： 数字人直播时长，单位秒。
    * startTime  数字人直播任务开始时间。格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    * endTime  数字人直播任务结束时间。格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    * errorInfo  errorInfo
    * createTime  数字人直播任务创建时间。格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    * lastupdateTime  数字人直播任务最后更新时间。格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    * rtcRoomInfo  rtcRoomInfo
    * liveEventReportUrl  直播事件上报地址。用户将自行获取的直播间事件上报到此地址，用于触发智能互动，自动回复话术。
    * liveEventCallbackConfig  liveEventCallbackConfig
    * rtcCallbackConfig  rtcCallbackConfig
    * streamDuration  **参数解释**： 数字人直播推流时长，单位秒。
    * blockReason  封禁信息
    * coverUrl  直播间封面图URL
    * coStreamerConfig  coStreamerConfig
    * liveJobLog  liveJobLog
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'roomId' => 'room_id',
            'roomName' => 'room_name',
            'state' => 'state',
            'duration' => 'duration',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'errorInfo' => 'error_info',
            'createTime' => 'create_time',
            'lastupdateTime' => 'lastupdate_time',
            'rtcRoomInfo' => 'rtc_room_info',
            'liveEventReportUrl' => 'live_event_report_url',
            'liveEventCallbackConfig' => 'live_event_callback_config',
            'rtcCallbackConfig' => 'rtc_callback_config',
            'streamDuration' => 'stream_duration',
            'blockReason' => 'block_reason',
            'coverUrl' => 'cover_url',
            'coStreamerConfig' => 'co_streamer_config',
            'liveJobLog' => 'live_job_log',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  数字人直播任务ID。
    * roomId  直播间ID
    * roomName  直播间名称
    * state  数字人直播任务的状态。 * WAITING: 等待 * PROCESSING: 处理中 * SUCCEED: 成功 * FAILED: 失败 * BLOCKED: 封禁
    * duration  **参数解释**： 数字人直播时长，单位秒。
    * startTime  数字人直播任务开始时间。格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    * endTime  数字人直播任务结束时间。格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    * errorInfo  errorInfo
    * createTime  数字人直播任务创建时间。格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    * lastupdateTime  数字人直播任务最后更新时间。格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    * rtcRoomInfo  rtcRoomInfo
    * liveEventReportUrl  直播事件上报地址。用户将自行获取的直播间事件上报到此地址，用于触发智能互动，自动回复话术。
    * liveEventCallbackConfig  liveEventCallbackConfig
    * rtcCallbackConfig  rtcCallbackConfig
    * streamDuration  **参数解释**： 数字人直播推流时长，单位秒。
    * blockReason  封禁信息
    * coverUrl  直播间封面图URL
    * coStreamerConfig  coStreamerConfig
    * liveJobLog  liveJobLog
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'roomId' => 'setRoomId',
            'roomName' => 'setRoomName',
            'state' => 'setState',
            'duration' => 'setDuration',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'errorInfo' => 'setErrorInfo',
            'createTime' => 'setCreateTime',
            'lastupdateTime' => 'setLastupdateTime',
            'rtcRoomInfo' => 'setRtcRoomInfo',
            'liveEventReportUrl' => 'setLiveEventReportUrl',
            'liveEventCallbackConfig' => 'setLiveEventCallbackConfig',
            'rtcCallbackConfig' => 'setRtcCallbackConfig',
            'streamDuration' => 'setStreamDuration',
            'blockReason' => 'setBlockReason',
            'coverUrl' => 'setCoverUrl',
            'coStreamerConfig' => 'setCoStreamerConfig',
            'liveJobLog' => 'setLiveJobLog',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  数字人直播任务ID。
    * roomId  直播间ID
    * roomName  直播间名称
    * state  数字人直播任务的状态。 * WAITING: 等待 * PROCESSING: 处理中 * SUCCEED: 成功 * FAILED: 失败 * BLOCKED: 封禁
    * duration  **参数解释**： 数字人直播时长，单位秒。
    * startTime  数字人直播任务开始时间。格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    * endTime  数字人直播任务结束时间。格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    * errorInfo  errorInfo
    * createTime  数字人直播任务创建时间。格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    * lastupdateTime  数字人直播任务最后更新时间。格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    * rtcRoomInfo  rtcRoomInfo
    * liveEventReportUrl  直播事件上报地址。用户将自行获取的直播间事件上报到此地址，用于触发智能互动，自动回复话术。
    * liveEventCallbackConfig  liveEventCallbackConfig
    * rtcCallbackConfig  rtcCallbackConfig
    * streamDuration  **参数解释**： 数字人直播推流时长，单位秒。
    * blockReason  封禁信息
    * coverUrl  直播间封面图URL
    * coStreamerConfig  coStreamerConfig
    * liveJobLog  liveJobLog
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'roomId' => 'getRoomId',
            'roomName' => 'getRoomName',
            'state' => 'getState',
            'duration' => 'getDuration',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'errorInfo' => 'getErrorInfo',
            'createTime' => 'getCreateTime',
            'lastupdateTime' => 'getLastupdateTime',
            'rtcRoomInfo' => 'getRtcRoomInfo',
            'liveEventReportUrl' => 'getLiveEventReportUrl',
            'liveEventCallbackConfig' => 'getLiveEventCallbackConfig',
            'rtcCallbackConfig' => 'getRtcCallbackConfig',
            'streamDuration' => 'getStreamDuration',
            'blockReason' => 'getBlockReason',
            'coverUrl' => 'getCoverUrl',
            'coStreamerConfig' => 'getCoStreamerConfig',
            'liveJobLog' => 'getLiveJobLog',
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
    const STATE_BLOCKED = 'BLOCKED';
    

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
            self::STATE_BLOCKED,
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
        $this->container['roomId'] = isset($data['roomId']) ? $data['roomId'] : null;
        $this->container['roomName'] = isset($data['roomName']) ? $data['roomName'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['errorInfo'] = isset($data['errorInfo']) ? $data['errorInfo'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['lastupdateTime'] = isset($data['lastupdateTime']) ? $data['lastupdateTime'] : null;
        $this->container['rtcRoomInfo'] = isset($data['rtcRoomInfo']) ? $data['rtcRoomInfo'] : null;
        $this->container['liveEventReportUrl'] = isset($data['liveEventReportUrl']) ? $data['liveEventReportUrl'] : null;
        $this->container['liveEventCallbackConfig'] = isset($data['liveEventCallbackConfig']) ? $data['liveEventCallbackConfig'] : null;
        $this->container['rtcCallbackConfig'] = isset($data['rtcCallbackConfig']) ? $data['rtcCallbackConfig'] : null;
        $this->container['streamDuration'] = isset($data['streamDuration']) ? $data['streamDuration'] : null;
        $this->container['blockReason'] = isset($data['blockReason']) ? $data['blockReason'] : null;
        $this->container['coverUrl'] = isset($data['coverUrl']) ? $data['coverUrl'] : null;
        $this->container['coStreamerConfig'] = isset($data['coStreamerConfig']) ? $data['coStreamerConfig'] : null;
        $this->container['liveJobLog'] = isset($data['liveJobLog']) ? $data['liveJobLog'] : null;
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
            if (!is_null($this->container['roomId']) && (mb_strlen($this->container['roomId']) > 64)) {
                $invalidProperties[] = "invalid value for 'roomId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['roomId']) && (mb_strlen($this->container['roomId']) < 0)) {
                $invalidProperties[] = "invalid value for 'roomId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['roomName']) && (mb_strlen($this->container['roomName']) > 256)) {
                $invalidProperties[] = "invalid value for 'roomName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['roomName']) && (mb_strlen($this->container['roomName']) < 1)) {
                $invalidProperties[] = "invalid value for 'roomName', the character length must be bigger than or equal to 1.";
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
            if (!is_null($this->container['liveEventReportUrl']) && (mb_strlen($this->container['liveEventReportUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'liveEventReportUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['liveEventReportUrl']) && (mb_strlen($this->container['liveEventReportUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'liveEventReportUrl', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['streamDuration']) && ($this->container['streamDuration'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'streamDuration', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['streamDuration']) && ($this->container['streamDuration'] < 0)) {
                $invalidProperties[] = "invalid value for 'streamDuration', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['blockReason']) && (mb_strlen($this->container['blockReason']) > 2000)) {
                $invalidProperties[] = "invalid value for 'blockReason', the character length must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['blockReason']) && (mb_strlen($this->container['blockReason']) < 0)) {
                $invalidProperties[] = "invalid value for 'blockReason', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['coverUrl']) && (mb_strlen($this->container['coverUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'coverUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['coverUrl']) && (mb_strlen($this->container['coverUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'coverUrl', the character length must be bigger than or equal to 0.";
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
    *  数字人直播任务ID。
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
    * @param string|null $jobId 数字人直播任务ID。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets roomId
    *  直播间ID
    *
    * @return string|null
    */
    public function getRoomId()
    {
        return $this->container['roomId'];
    }

    /**
    * Sets roomId
    *
    * @param string|null $roomId 直播间ID
    *
    * @return $this
    */
    public function setRoomId($roomId)
    {
        $this->container['roomId'] = $roomId;
        return $this;
    }

    /**
    * Gets roomName
    *  直播间名称
    *
    * @return string|null
    */
    public function getRoomName()
    {
        return $this->container['roomName'];
    }

    /**
    * Sets roomName
    *
    * @param string|null $roomName 直播间名称
    *
    * @return $this
    */
    public function setRoomName($roomName)
    {
        $this->container['roomName'] = $roomName;
        return $this;
    }

    /**
    * Gets state
    *  数字人直播任务的状态。 * WAITING: 等待 * PROCESSING: 处理中 * SUCCEED: 成功 * FAILED: 失败 * BLOCKED: 封禁
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
    * @param string|null $state 数字人直播任务的状态。 * WAITING: 等待 * PROCESSING: 处理中 * SUCCEED: 成功 * FAILED: 失败 * BLOCKED: 封禁
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
    *  **参数解释**： 数字人直播时长，单位秒。
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
    * @param float|null $duration **参数解释**： 数字人直播时长，单位秒。
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
    *  数字人直播任务开始时间。格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
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
    * @param string|null $startTime 数字人直播任务开始时间。格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
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
    *  数字人直播任务结束时间。格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
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
    * @param string|null $endTime 数字人直播任务结束时间。格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
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
    *  数字人直播任务创建时间。格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
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
    * @param string|null $createTime 数字人直播任务创建时间。格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
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
    *  数字人直播任务最后更新时间。格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
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
    * @param string|null $lastupdateTime 数字人直播任务最后更新时间。格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
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
    * Gets liveEventReportUrl
    *  直播事件上报地址。用户将自行获取的直播间事件上报到此地址，用于触发智能互动，自动回复话术。
    *
    * @return string|null
    */
    public function getLiveEventReportUrl()
    {
        return $this->container['liveEventReportUrl'];
    }

    /**
    * Sets liveEventReportUrl
    *
    * @param string|null $liveEventReportUrl 直播事件上报地址。用户将自行获取的直播间事件上报到此地址，用于触发智能互动，自动回复话术。
    *
    * @return $this
    */
    public function setLiveEventReportUrl($liveEventReportUrl)
    {
        $this->container['liveEventReportUrl'] = $liveEventReportUrl;
        return $this;
    }

    /**
    * Gets liveEventCallbackConfig
    *  liveEventCallbackConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\LiveEventCallBackConfig|null
    */
    public function getLiveEventCallbackConfig()
    {
        return $this->container['liveEventCallbackConfig'];
    }

    /**
    * Sets liveEventCallbackConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\LiveEventCallBackConfig|null $liveEventCallbackConfig liveEventCallbackConfig
    *
    * @return $this
    */
    public function setLiveEventCallbackConfig($liveEventCallbackConfig)
    {
        $this->container['liveEventCallbackConfig'] = $liveEventCallbackConfig;
        return $this;
    }

    /**
    * Gets rtcCallbackConfig
    *  rtcCallbackConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\RTCLiveEventCallBackConfig|null
    */
    public function getRtcCallbackConfig()
    {
        return $this->container['rtcCallbackConfig'];
    }

    /**
    * Sets rtcCallbackConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\RTCLiveEventCallBackConfig|null $rtcCallbackConfig rtcCallbackConfig
    *
    * @return $this
    */
    public function setRtcCallbackConfig($rtcCallbackConfig)
    {
        $this->container['rtcCallbackConfig'] = $rtcCallbackConfig;
        return $this;
    }

    /**
    * Gets streamDuration
    *  **参数解释**： 数字人直播推流时长，单位秒。
    *
    * @return float|null
    */
    public function getStreamDuration()
    {
        return $this->container['streamDuration'];
    }

    /**
    * Sets streamDuration
    *
    * @param float|null $streamDuration **参数解释**： 数字人直播推流时长，单位秒。
    *
    * @return $this
    */
    public function setStreamDuration($streamDuration)
    {
        $this->container['streamDuration'] = $streamDuration;
        return $this;
    }

    /**
    * Gets blockReason
    *  封禁信息
    *
    * @return string|null
    */
    public function getBlockReason()
    {
        return $this->container['blockReason'];
    }

    /**
    * Sets blockReason
    *
    * @param string|null $blockReason 封禁信息
    *
    * @return $this
    */
    public function setBlockReason($blockReason)
    {
        $this->container['blockReason'] = $blockReason;
        return $this;
    }

    /**
    * Gets coverUrl
    *  直播间封面图URL
    *
    * @return string|null
    */
    public function getCoverUrl()
    {
        return $this->container['coverUrl'];
    }

    /**
    * Sets coverUrl
    *
    * @param string|null $coverUrl 直播间封面图URL
    *
    * @return $this
    */
    public function setCoverUrl($coverUrl)
    {
        $this->container['coverUrl'] = $coverUrl;
        return $this;
    }

    /**
    * Gets coStreamerConfig
    *  coStreamerConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\CoStreamerConfig|null
    */
    public function getCoStreamerConfig()
    {
        return $this->container['coStreamerConfig'];
    }

    /**
    * Sets coStreamerConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\CoStreamerConfig|null $coStreamerConfig coStreamerConfig
    *
    * @return $this
    */
    public function setCoStreamerConfig($coStreamerConfig)
    {
        $this->container['coStreamerConfig'] = $coStreamerConfig;
        return $this;
    }

    /**
    * Gets liveJobLog
    *  liveJobLog
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\LiveJobLog|null
    */
    public function getLiveJobLog()
    {
        return $this->container['liveJobLog'];
    }

    /**
    * Sets liveJobLog
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\LiveJobLog|null $liveJobLog liveJobLog
    *
    * @return $this
    */
    public function setLiveJobLog($liveJobLog)
    {
        $this->container['liveJobLog'] = $liveJobLog;
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

