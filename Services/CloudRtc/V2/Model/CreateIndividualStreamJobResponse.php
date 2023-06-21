<?php

namespace HuaweiCloud\SDK\CloudRTC\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateIndividualStreamJobResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateIndividualStreamJobResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  任务编号
    * streamName  流名
    * appId  应用id
    * roomId  房间id
    * userId  选看的用户id，单个录制任务内保证唯一
    * isRecordAudio  是否录制音频。  - true：录制音频 - false：不录制音频  缺省为true。
    * videoType  标识视频流的类型，可选摄像头流或者屏幕分享流，未填写表示不录制视频。  - CAMERASTREAM：摄像头视频流 - SCREENSTREAM：屏幕分享视频流  默认为CAMERASTREAM。
    * selectStreamType  指定窗口拉取的分辨率档位。  - LD - SD - HD - FHD  缺省为FHD。
    * maxIdleTime  最长空闲频道时间。  取值范围：[5，43200]，默认值为30。  单位：秒。  如果频道内无连麦方的状态持续超过该时间，录制程序会自动退出。退出后，再次调用start请求，会产生新的录制任务。  连麦方指：joiner或者publisher的用户。
    * recordParam  recordParam
    * createTime  创建时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * updateTime  更新时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * state  任务状态。  - INIT：任务正在初始化 - RUNNING：任务正在运行 - STOPPED：任务已停止
    * stopReason  任务结束原因 - TENANT_STOP - EXCEED_MAX_IDLE_TIME - INTERNAL_ERROR
    * description  针对任务状态的详细信息描述
    * startTime  任务开始时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * stopTime  任务完成时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'streamName' => 'string',
            'appId' => 'string',
            'roomId' => 'string',
            'userId' => 'string',
            'isRecordAudio' => 'bool',
            'videoType' => 'string',
            'selectStreamType' => 'string',
            'maxIdleTime' => 'int',
            'recordParam' => '\HuaweiCloud\SDK\CloudRTC\V2\Model\RecordParam',
            'createTime' => 'string',
            'updateTime' => 'string',
            'state' => 'string',
            'stopReason' => 'string',
            'description' => 'string',
            'startTime' => 'string',
            'stopTime' => 'string',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  任务编号
    * streamName  流名
    * appId  应用id
    * roomId  房间id
    * userId  选看的用户id，单个录制任务内保证唯一
    * isRecordAudio  是否录制音频。  - true：录制音频 - false：不录制音频  缺省为true。
    * videoType  标识视频流的类型，可选摄像头流或者屏幕分享流，未填写表示不录制视频。  - CAMERASTREAM：摄像头视频流 - SCREENSTREAM：屏幕分享视频流  默认为CAMERASTREAM。
    * selectStreamType  指定窗口拉取的分辨率档位。  - LD - SD - HD - FHD  缺省为FHD。
    * maxIdleTime  最长空闲频道时间。  取值范围：[5，43200]，默认值为30。  单位：秒。  如果频道内无连麦方的状态持续超过该时间，录制程序会自动退出。退出后，再次调用start请求，会产生新的录制任务。  连麦方指：joiner或者publisher的用户。
    * recordParam  recordParam
    * createTime  创建时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * updateTime  更新时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * state  任务状态。  - INIT：任务正在初始化 - RUNNING：任务正在运行 - STOPPED：任务已停止
    * stopReason  任务结束原因 - TENANT_STOP - EXCEED_MAX_IDLE_TIME - INTERNAL_ERROR
    * description  针对任务状态的详细信息描述
    * startTime  任务开始时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * stopTime  任务完成时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'streamName' => null,
        'appId' => null,
        'roomId' => null,
        'userId' => null,
        'isRecordAudio' => null,
        'videoType' => null,
        'selectStreamType' => null,
        'maxIdleTime' => null,
        'recordParam' => null,
        'createTime' => null,
        'updateTime' => null,
        'state' => null,
        'stopReason' => null,
        'description' => null,
        'startTime' => null,
        'stopTime' => null,
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
    * jobId  任务编号
    * streamName  流名
    * appId  应用id
    * roomId  房间id
    * userId  选看的用户id，单个录制任务内保证唯一
    * isRecordAudio  是否录制音频。  - true：录制音频 - false：不录制音频  缺省为true。
    * videoType  标识视频流的类型，可选摄像头流或者屏幕分享流，未填写表示不录制视频。  - CAMERASTREAM：摄像头视频流 - SCREENSTREAM：屏幕分享视频流  默认为CAMERASTREAM。
    * selectStreamType  指定窗口拉取的分辨率档位。  - LD - SD - HD - FHD  缺省为FHD。
    * maxIdleTime  最长空闲频道时间。  取值范围：[5，43200]，默认值为30。  单位：秒。  如果频道内无连麦方的状态持续超过该时间，录制程序会自动退出。退出后，再次调用start请求，会产生新的录制任务。  连麦方指：joiner或者publisher的用户。
    * recordParam  recordParam
    * createTime  创建时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * updateTime  更新时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * state  任务状态。  - INIT：任务正在初始化 - RUNNING：任务正在运行 - STOPPED：任务已停止
    * stopReason  任务结束原因 - TENANT_STOP - EXCEED_MAX_IDLE_TIME - INTERNAL_ERROR
    * description  针对任务状态的详细信息描述
    * startTime  任务开始时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * stopTime  任务完成时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'streamName' => 'stream_name',
            'appId' => 'app_id',
            'roomId' => 'room_id',
            'userId' => 'user_id',
            'isRecordAudio' => 'is_record_audio',
            'videoType' => 'video_type',
            'selectStreamType' => 'select_stream_type',
            'maxIdleTime' => 'max_idle_time',
            'recordParam' => 'record_param',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'state' => 'state',
            'stopReason' => 'stop_reason',
            'description' => 'description',
            'startTime' => 'start_time',
            'stopTime' => 'stop_time',
            'xRequestId' => 'X-request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  任务编号
    * streamName  流名
    * appId  应用id
    * roomId  房间id
    * userId  选看的用户id，单个录制任务内保证唯一
    * isRecordAudio  是否录制音频。  - true：录制音频 - false：不录制音频  缺省为true。
    * videoType  标识视频流的类型，可选摄像头流或者屏幕分享流，未填写表示不录制视频。  - CAMERASTREAM：摄像头视频流 - SCREENSTREAM：屏幕分享视频流  默认为CAMERASTREAM。
    * selectStreamType  指定窗口拉取的分辨率档位。  - LD - SD - HD - FHD  缺省为FHD。
    * maxIdleTime  最长空闲频道时间。  取值范围：[5，43200]，默认值为30。  单位：秒。  如果频道内无连麦方的状态持续超过该时间，录制程序会自动退出。退出后，再次调用start请求，会产生新的录制任务。  连麦方指：joiner或者publisher的用户。
    * recordParam  recordParam
    * createTime  创建时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * updateTime  更新时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * state  任务状态。  - INIT：任务正在初始化 - RUNNING：任务正在运行 - STOPPED：任务已停止
    * stopReason  任务结束原因 - TENANT_STOP - EXCEED_MAX_IDLE_TIME - INTERNAL_ERROR
    * description  针对任务状态的详细信息描述
    * startTime  任务开始时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * stopTime  任务完成时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'streamName' => 'setStreamName',
            'appId' => 'setAppId',
            'roomId' => 'setRoomId',
            'userId' => 'setUserId',
            'isRecordAudio' => 'setIsRecordAudio',
            'videoType' => 'setVideoType',
            'selectStreamType' => 'setSelectStreamType',
            'maxIdleTime' => 'setMaxIdleTime',
            'recordParam' => 'setRecordParam',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'state' => 'setState',
            'stopReason' => 'setStopReason',
            'description' => 'setDescription',
            'startTime' => 'setStartTime',
            'stopTime' => 'setStopTime',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  任务编号
    * streamName  流名
    * appId  应用id
    * roomId  房间id
    * userId  选看的用户id，单个录制任务内保证唯一
    * isRecordAudio  是否录制音频。  - true：录制音频 - false：不录制音频  缺省为true。
    * videoType  标识视频流的类型，可选摄像头流或者屏幕分享流，未填写表示不录制视频。  - CAMERASTREAM：摄像头视频流 - SCREENSTREAM：屏幕分享视频流  默认为CAMERASTREAM。
    * selectStreamType  指定窗口拉取的分辨率档位。  - LD - SD - HD - FHD  缺省为FHD。
    * maxIdleTime  最长空闲频道时间。  取值范围：[5，43200]，默认值为30。  单位：秒。  如果频道内无连麦方的状态持续超过该时间，录制程序会自动退出。退出后，再次调用start请求，会产生新的录制任务。  连麦方指：joiner或者publisher的用户。
    * recordParam  recordParam
    * createTime  创建时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * updateTime  更新时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * state  任务状态。  - INIT：任务正在初始化 - RUNNING：任务正在运行 - STOPPED：任务已停止
    * stopReason  任务结束原因 - TENANT_STOP - EXCEED_MAX_IDLE_TIME - INTERNAL_ERROR
    * description  针对任务状态的详细信息描述
    * startTime  任务开始时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * stopTime  任务完成时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'streamName' => 'getStreamName',
            'appId' => 'getAppId',
            'roomId' => 'getRoomId',
            'userId' => 'getUserId',
            'isRecordAudio' => 'getIsRecordAudio',
            'videoType' => 'getVideoType',
            'selectStreamType' => 'getSelectStreamType',
            'maxIdleTime' => 'getMaxIdleTime',
            'recordParam' => 'getRecordParam',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'state' => 'getState',
            'stopReason' => 'getStopReason',
            'description' => 'getDescription',
            'startTime' => 'getStartTime',
            'stopTime' => 'getStopTime',
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
    const VIDEO_TYPE_CAMERASTREAM = 'CAMERASTREAM';
    const VIDEO_TYPE_SCREENSTREAM = 'SCREENSTREAM';
    const VIDEO_TYPE_EMPTY = '';
    const SELECT_STREAM_TYPE_LD = 'LD';
    const SELECT_STREAM_TYPE_SD = 'SD';
    const SELECT_STREAM_TYPE_HD = 'HD';
    const SELECT_STREAM_TYPE_FHD = 'FHD';
    const STATE_INIT = 'INIT';
    const STATE_RUNNING = 'RUNNING';
    const STATE_STOPPED = 'STOPPED';
    const STOP_REASON_TENANT_STOP = 'TENANT_STOP';
    const STOP_REASON_EXCEED_MAX_IDLE_TIME = 'EXCEED_MAX_IDLE_TIME';
    const STOP_REASON_INTERNAL_ERROR = 'INTERNAL_ERROR';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVideoTypeAllowableValues()
    {
        return [
            self::VIDEO_TYPE_CAMERASTREAM,
            self::VIDEO_TYPE_SCREENSTREAM,
            self::VIDEO_TYPE_EMPTY,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSelectStreamTypeAllowableValues()
    {
        return [
            self::SELECT_STREAM_TYPE_LD,
            self::SELECT_STREAM_TYPE_SD,
            self::SELECT_STREAM_TYPE_HD,
            self::SELECT_STREAM_TYPE_FHD,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_INIT,
            self::STATE_RUNNING,
            self::STATE_STOPPED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStopReasonAllowableValues()
    {
        return [
            self::STOP_REASON_TENANT_STOP,
            self::STOP_REASON_EXCEED_MAX_IDLE_TIME,
            self::STOP_REASON_INTERNAL_ERROR,
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
        $this->container['streamName'] = isset($data['streamName']) ? $data['streamName'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['roomId'] = isset($data['roomId']) ? $data['roomId'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['isRecordAudio'] = isset($data['isRecordAudio']) ? $data['isRecordAudio'] : true;
        $this->container['videoType'] = isset($data['videoType']) ? $data['videoType'] : '';
        $this->container['selectStreamType'] = isset($data['selectStreamType']) ? $data['selectStreamType'] : 'FHD';
        $this->container['maxIdleTime'] = isset($data['maxIdleTime']) ? $data['maxIdleTime'] : null;
        $this->container['recordParam'] = isset($data['recordParam']) ? $data['recordParam'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['stopReason'] = isset($data['stopReason']) ? $data['stopReason'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['stopTime'] = isset($data['stopTime']) ? $data['stopTime'] : null;
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
            if (!is_null($this->container['streamName']) && (mb_strlen($this->container['streamName']) > 256)) {
                $invalidProperties[] = "invalid value for 'streamName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['streamName']) && (mb_strlen($this->container['streamName']) < 1)) {
                $invalidProperties[] = "invalid value for 'streamName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['appId']) && (mb_strlen($this->container['appId']) > 32)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['appId']) && (mb_strlen($this->container['appId']) < 1)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['roomId']) && (mb_strlen($this->container['roomId']) > 64)) {
                $invalidProperties[] = "invalid value for 'roomId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['roomId']) && (mb_strlen($this->container['roomId']) < 1)) {
                $invalidProperties[] = "invalid value for 'roomId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userId']) && (mb_strlen($this->container['userId']) > 64)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['userId']) && (mb_strlen($this->container['userId']) < 1)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getVideoTypeAllowableValues();
                if (!is_null($this->container['videoType']) && !in_array($this->container['videoType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'videoType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['videoType']) && (mb_strlen($this->container['videoType']) > 64)) {
                $invalidProperties[] = "invalid value for 'videoType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['videoType']) && (mb_strlen($this->container['videoType']) < 0)) {
                $invalidProperties[] = "invalid value for 'videoType', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getSelectStreamTypeAllowableValues();
                if (!is_null($this->container['selectStreamType']) && !in_array($this->container['selectStreamType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'selectStreamType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['selectStreamType']) && (mb_strlen($this->container['selectStreamType']) > 64)) {
                $invalidProperties[] = "invalid value for 'selectStreamType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['selectStreamType']) && (mb_strlen($this->container['selectStreamType']) < 0)) {
                $invalidProperties[] = "invalid value for 'selectStreamType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['maxIdleTime']) && ($this->container['maxIdleTime'] > 43200)) {
                $invalidProperties[] = "invalid value for 'maxIdleTime', must be smaller than or equal to 43200.";
            }
            if (!is_null($this->container['maxIdleTime']) && ($this->container['maxIdleTime'] < 5)) {
                $invalidProperties[] = "invalid value for 'maxIdleTime', must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 32)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) < 1)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getStopReasonAllowableValues();
                if (!is_null($this->container['stopReason']) && !in_array($this->container['stopReason'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'stopReason', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['stopReason']) && (mb_strlen($this->container['stopReason']) > 32)) {
                $invalidProperties[] = "invalid value for 'stopReason', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['stopReason']) && (mb_strlen($this->container['stopReason']) < 1)) {
                $invalidProperties[] = "invalid value for 'stopReason', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 128)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['stopTime']) && (mb_strlen($this->container['stopTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'stopTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['stopTime']) && (mb_strlen($this->container['stopTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'stopTime', the character length must be bigger than or equal to 1.";
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
    *  任务编号
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
    * @param string|null $jobId 任务编号
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets streamName
    *  流名
    *
    * @return string|null
    */
    public function getStreamName()
    {
        return $this->container['streamName'];
    }

    /**
    * Sets streamName
    *
    * @param string|null $streamName 流名
    *
    * @return $this
    */
    public function setStreamName($streamName)
    {
        $this->container['streamName'] = $streamName;
        return $this;
    }

    /**
    * Gets appId
    *  应用id
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId 应用id
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets roomId
    *  房间id
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
    * @param string|null $roomId 房间id
    *
    * @return $this
    */
    public function setRoomId($roomId)
    {
        $this->container['roomId'] = $roomId;
        return $this;
    }

    /**
    * Gets userId
    *  选看的用户id，单个录制任务内保证唯一
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId 选看的用户id，单个录制任务内保证唯一
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets isRecordAudio
    *  是否录制音频。  - true：录制音频 - false：不录制音频  缺省为true。
    *
    * @return bool|null
    */
    public function getIsRecordAudio()
    {
        return $this->container['isRecordAudio'];
    }

    /**
    * Sets isRecordAudio
    *
    * @param bool|null $isRecordAudio 是否录制音频。  - true：录制音频 - false：不录制音频  缺省为true。
    *
    * @return $this
    */
    public function setIsRecordAudio($isRecordAudio)
    {
        $this->container['isRecordAudio'] = $isRecordAudio;
        return $this;
    }

    /**
    * Gets videoType
    *  标识视频流的类型，可选摄像头流或者屏幕分享流，未填写表示不录制视频。  - CAMERASTREAM：摄像头视频流 - SCREENSTREAM：屏幕分享视频流  默认为CAMERASTREAM。
    *
    * @return string|null
    */
    public function getVideoType()
    {
        return $this->container['videoType'];
    }

    /**
    * Sets videoType
    *
    * @param string|null $videoType 标识视频流的类型，可选摄像头流或者屏幕分享流，未填写表示不录制视频。  - CAMERASTREAM：摄像头视频流 - SCREENSTREAM：屏幕分享视频流  默认为CAMERASTREAM。
    *
    * @return $this
    */
    public function setVideoType($videoType)
    {
        $this->container['videoType'] = $videoType;
        return $this;
    }

    /**
    * Gets selectStreamType
    *  指定窗口拉取的分辨率档位。  - LD - SD - HD - FHD  缺省为FHD。
    *
    * @return string|null
    */
    public function getSelectStreamType()
    {
        return $this->container['selectStreamType'];
    }

    /**
    * Sets selectStreamType
    *
    * @param string|null $selectStreamType 指定窗口拉取的分辨率档位。  - LD - SD - HD - FHD  缺省为FHD。
    *
    * @return $this
    */
    public function setSelectStreamType($selectStreamType)
    {
        $this->container['selectStreamType'] = $selectStreamType;
        return $this;
    }

    /**
    * Gets maxIdleTime
    *  最长空闲频道时间。  取值范围：[5，43200]，默认值为30。  单位：秒。  如果频道内无连麦方的状态持续超过该时间，录制程序会自动退出。退出后，再次调用start请求，会产生新的录制任务。  连麦方指：joiner或者publisher的用户。
    *
    * @return int|null
    */
    public function getMaxIdleTime()
    {
        return $this->container['maxIdleTime'];
    }

    /**
    * Sets maxIdleTime
    *
    * @param int|null $maxIdleTime 最长空闲频道时间。  取值范围：[5，43200]，默认值为30。  单位：秒。  如果频道内无连麦方的状态持续超过该时间，录制程序会自动退出。退出后，再次调用start请求，会产生新的录制任务。  连麦方指：joiner或者publisher的用户。
    *
    * @return $this
    */
    public function setMaxIdleTime($maxIdleTime)
    {
        $this->container['maxIdleTime'] = $maxIdleTime;
        return $this;
    }

    /**
    * Gets recordParam
    *  recordParam
    *
    * @return \HuaweiCloud\SDK\CloudRTC\V2\Model\RecordParam|null
    */
    public function getRecordParam()
    {
        return $this->container['recordParam'];
    }

    /**
    * Sets recordParam
    *
    * @param \HuaweiCloud\SDK\CloudRTC\V2\Model\RecordParam|null $recordParam recordParam
    *
    * @return $this
    */
    public function setRecordParam($recordParam)
    {
        $this->container['recordParam'] = $recordParam;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
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
    * @param string|null $createTime 创建时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 更新时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets state
    *  任务状态。  - INIT：任务正在初始化 - RUNNING：任务正在运行 - STOPPED：任务已停止
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
    * @param string|null $state 任务状态。  - INIT：任务正在初始化 - RUNNING：任务正在运行 - STOPPED：任务已停止
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets stopReason
    *  任务结束原因 - TENANT_STOP - EXCEED_MAX_IDLE_TIME - INTERNAL_ERROR
    *
    * @return string|null
    */
    public function getStopReason()
    {
        return $this->container['stopReason'];
    }

    /**
    * Sets stopReason
    *
    * @param string|null $stopReason 任务结束原因 - TENANT_STOP - EXCEED_MAX_IDLE_TIME - INTERNAL_ERROR
    *
    * @return $this
    */
    public function setStopReason($stopReason)
    {
        $this->container['stopReason'] = $stopReason;
        return $this;
    }

    /**
    * Gets description
    *  针对任务状态的详细信息描述
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
    * @param string|null $description 针对任务状态的详细信息描述
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
    *  任务开始时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
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
    * @param string|null $startTime 任务开始时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets stopTime
    *  任务完成时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    *
    * @return string|null
    */
    public function getStopTime()
    {
        return $this->container['stopTime'];
    }

    /**
    * Sets stopTime
    *
    * @param string|null $stopTime 任务完成时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    *
    * @return $this
    */
    public function setStopTime($stopTime)
    {
        $this->container['stopTime'] = $stopTime;
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

