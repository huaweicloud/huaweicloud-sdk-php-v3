<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModifyLivePullStreamTask implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModifyLivePullStreamTask';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  任务id
    * status  pause停用/enable启用
    * sourceUrls  拉流源URL
    * vodLoopTime  缺省值”-1”。-1：无限轮播，以结束时间为准；N：按文件列表播放N轮，以播放完成和结束时间先到的为准。不传、为空（\"\"）时按缺省值生效
    * vodRefreshType  缺省值 immediate_new_source，可选 immediate_new_source、continue_from_file_start、continue_from_break_point
    * vodStartVideoIndex  缺省值 0，指定播放文件的下标，从0开始表示第一个文件，最大值 len(source_urls)-1
    * startTime  任务启动时间，时间格式： \"2006-01-02T15:04:05Z\" 必须小于结束时间，缺省为当前时间
    * endTime  任务结束时间，时间格式： \"2006-01-02T15:04:05Z\" 必须大于开始时间，至多为开始时间+7天
    * vodStartVideoTime  缺省值 0，指定从上述指定文件的第几秒开始播放
    * callbackEvents  要回调的事件列表（不填则回调全部） - TaskStart：任务启动回调 - TaskExit：任务停止回调 - VodSourceFileStart 仅PullVodPushLive可用，文件启动切换 - VodSourceFileFinish 仅PullVodPushLive可用，文件播放完毕 - ResetTaskConfig 仅PullVodPushLive可用，任务更新 - TaskAlarm: 用于告警事件通知
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'status' => 'string',
            'sourceUrls' => 'string[]',
            'vodLoopTime' => 'string',
            'vodRefreshType' => 'string',
            'vodStartVideoIndex' => 'int',
            'startTime' => '\DateTime',
            'endTime' => '\DateTime',
            'vodStartVideoTime' => 'int',
            'callbackEvents' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  任务id
    * status  pause停用/enable启用
    * sourceUrls  拉流源URL
    * vodLoopTime  缺省值”-1”。-1：无限轮播，以结束时间为准；N：按文件列表播放N轮，以播放完成和结束时间先到的为准。不传、为空（\"\"）时按缺省值生效
    * vodRefreshType  缺省值 immediate_new_source，可选 immediate_new_source、continue_from_file_start、continue_from_break_point
    * vodStartVideoIndex  缺省值 0，指定播放文件的下标，从0开始表示第一个文件，最大值 len(source_urls)-1
    * startTime  任务启动时间，时间格式： \"2006-01-02T15:04:05Z\" 必须小于结束时间，缺省为当前时间
    * endTime  任务结束时间，时间格式： \"2006-01-02T15:04:05Z\" 必须大于开始时间，至多为开始时间+7天
    * vodStartVideoTime  缺省值 0，指定从上述指定文件的第几秒开始播放
    * callbackEvents  要回调的事件列表（不填则回调全部） - TaskStart：任务启动回调 - TaskExit：任务停止回调 - VodSourceFileStart 仅PullVodPushLive可用，文件启动切换 - VodSourceFileFinish 仅PullVodPushLive可用，文件播放完毕 - ResetTaskConfig 仅PullVodPushLive可用，任务更新 - TaskAlarm: 用于告警事件通知
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'status' => null,
        'sourceUrls' => null,
        'vodLoopTime' => null,
        'vodRefreshType' => null,
        'vodStartVideoIndex' => null,
        'startTime' => 'date-time',
        'endTime' => 'date-time',
        'vodStartVideoTime' => null,
        'callbackEvents' => null
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
    * taskId  任务id
    * status  pause停用/enable启用
    * sourceUrls  拉流源URL
    * vodLoopTime  缺省值”-1”。-1：无限轮播，以结束时间为准；N：按文件列表播放N轮，以播放完成和结束时间先到的为准。不传、为空（\"\"）时按缺省值生效
    * vodRefreshType  缺省值 immediate_new_source，可选 immediate_new_source、continue_from_file_start、continue_from_break_point
    * vodStartVideoIndex  缺省值 0，指定播放文件的下标，从0开始表示第一个文件，最大值 len(source_urls)-1
    * startTime  任务启动时间，时间格式： \"2006-01-02T15:04:05Z\" 必须小于结束时间，缺省为当前时间
    * endTime  任务结束时间，时间格式： \"2006-01-02T15:04:05Z\" 必须大于开始时间，至多为开始时间+7天
    * vodStartVideoTime  缺省值 0，指定从上述指定文件的第几秒开始播放
    * callbackEvents  要回调的事件列表（不填则回调全部） - TaskStart：任务启动回调 - TaskExit：任务停止回调 - VodSourceFileStart 仅PullVodPushLive可用，文件启动切换 - VodSourceFileFinish 仅PullVodPushLive可用，文件播放完毕 - ResetTaskConfig 仅PullVodPushLive可用，任务更新 - TaskAlarm: 用于告警事件通知
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'status' => 'status',
            'sourceUrls' => 'source_urls',
            'vodLoopTime' => 'vod_loop_time',
            'vodRefreshType' => 'vod_refresh_type',
            'vodStartVideoIndex' => 'vod_start_video_index',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'vodStartVideoTime' => 'vod_start_video_time',
            'callbackEvents' => 'callback_events'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  任务id
    * status  pause停用/enable启用
    * sourceUrls  拉流源URL
    * vodLoopTime  缺省值”-1”。-1：无限轮播，以结束时间为准；N：按文件列表播放N轮，以播放完成和结束时间先到的为准。不传、为空（\"\"）时按缺省值生效
    * vodRefreshType  缺省值 immediate_new_source，可选 immediate_new_source、continue_from_file_start、continue_from_break_point
    * vodStartVideoIndex  缺省值 0，指定播放文件的下标，从0开始表示第一个文件，最大值 len(source_urls)-1
    * startTime  任务启动时间，时间格式： \"2006-01-02T15:04:05Z\" 必须小于结束时间，缺省为当前时间
    * endTime  任务结束时间，时间格式： \"2006-01-02T15:04:05Z\" 必须大于开始时间，至多为开始时间+7天
    * vodStartVideoTime  缺省值 0，指定从上述指定文件的第几秒开始播放
    * callbackEvents  要回调的事件列表（不填则回调全部） - TaskStart：任务启动回调 - TaskExit：任务停止回调 - VodSourceFileStart 仅PullVodPushLive可用，文件启动切换 - VodSourceFileFinish 仅PullVodPushLive可用，文件播放完毕 - ResetTaskConfig 仅PullVodPushLive可用，任务更新 - TaskAlarm: 用于告警事件通知
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'status' => 'setStatus',
            'sourceUrls' => 'setSourceUrls',
            'vodLoopTime' => 'setVodLoopTime',
            'vodRefreshType' => 'setVodRefreshType',
            'vodStartVideoIndex' => 'setVodStartVideoIndex',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'vodStartVideoTime' => 'setVodStartVideoTime',
            'callbackEvents' => 'setCallbackEvents'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  任务id
    * status  pause停用/enable启用
    * sourceUrls  拉流源URL
    * vodLoopTime  缺省值”-1”。-1：无限轮播，以结束时间为准；N：按文件列表播放N轮，以播放完成和结束时间先到的为准。不传、为空（\"\"）时按缺省值生效
    * vodRefreshType  缺省值 immediate_new_source，可选 immediate_new_source、continue_from_file_start、continue_from_break_point
    * vodStartVideoIndex  缺省值 0，指定播放文件的下标，从0开始表示第一个文件，最大值 len(source_urls)-1
    * startTime  任务启动时间，时间格式： \"2006-01-02T15:04:05Z\" 必须小于结束时间，缺省为当前时间
    * endTime  任务结束时间，时间格式： \"2006-01-02T15:04:05Z\" 必须大于开始时间，至多为开始时间+7天
    * vodStartVideoTime  缺省值 0，指定从上述指定文件的第几秒开始播放
    * callbackEvents  要回调的事件列表（不填则回调全部） - TaskStart：任务启动回调 - TaskExit：任务停止回调 - VodSourceFileStart 仅PullVodPushLive可用，文件启动切换 - VodSourceFileFinish 仅PullVodPushLive可用，文件播放完毕 - ResetTaskConfig 仅PullVodPushLive可用，任务更新 - TaskAlarm: 用于告警事件通知
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'status' => 'getStatus',
            'sourceUrls' => 'getSourceUrls',
            'vodLoopTime' => 'getVodLoopTime',
            'vodRefreshType' => 'getVodRefreshType',
            'vodStartVideoIndex' => 'getVodStartVideoIndex',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'vodStartVideoTime' => 'getVodStartVideoTime',
            'callbackEvents' => 'getCallbackEvents'
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
    const STATUS_PAUSE = 'pause';
    const STATUS_ENABLE = 'enable';
    const VOD_REFRESH_TYPE_IMMEDIATE_NEW_SOURCE = 'immediate_new_source';
    const VOD_REFRESH_TYPE_CONTINUE_FROM_FILE_START = 'continue_from_file_start';
    const VOD_REFRESH_TYPE_CONTINUE_FROM_BREAK_POINT = 'continue_from_break_point';
    const CALLBACK_EVENTS_TASK_START = 'TaskStart';
    const CALLBACK_EVENTS_VOD_SOURCE_FILE_START = 'VodSourceFileStart';
    const CALLBACK_EVENTS_VOD_SOURCE_FILE_FINISH = 'VodSourceFileFinish';
    const CALLBACK_EVENTS_RESET_TASK_CONFIG = 'ResetTaskConfig';
    const CALLBACK_EVENTS_TASK_EXIT = 'TaskExit';
    const CALLBACK_EVENTS_TASK_ALARM = 'TaskAlarm';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PAUSE,
            self::STATUS_ENABLE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVodRefreshTypeAllowableValues()
    {
        return [
            self::VOD_REFRESH_TYPE_IMMEDIATE_NEW_SOURCE,
            self::VOD_REFRESH_TYPE_CONTINUE_FROM_FILE_START,
            self::VOD_REFRESH_TYPE_CONTINUE_FROM_BREAK_POINT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCallbackEventsAllowableValues()
    {
        return [
            self::CALLBACK_EVENTS_TASK_START,
            self::CALLBACK_EVENTS_VOD_SOURCE_FILE_START,
            self::CALLBACK_EVENTS_VOD_SOURCE_FILE_FINISH,
            self::CALLBACK_EVENTS_RESET_TASK_CONFIG,
            self::CALLBACK_EVENTS_TASK_EXIT,
            self::CALLBACK_EVENTS_TASK_ALARM,
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['sourceUrls'] = isset($data['sourceUrls']) ? $data['sourceUrls'] : null;
        $this->container['vodLoopTime'] = isset($data['vodLoopTime']) ? $data['vodLoopTime'] : null;
        $this->container['vodRefreshType'] = isset($data['vodRefreshType']) ? $data['vodRefreshType'] : null;
        $this->container['vodStartVideoIndex'] = isset($data['vodStartVideoIndex']) ? $data['vodStartVideoIndex'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['vodStartVideoTime'] = isset($data['vodStartVideoTime']) ? $data['vodStartVideoTime'] : null;
        $this->container['callbackEvents'] = isset($data['callbackEvents']) ? $data['callbackEvents'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['taskId'] === null) {
            $invalidProperties[] = "'taskId' can't be null";
        }
            if ((mb_strlen($this->container['taskId']) > 64)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['taskId']) < 0)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vodLoopTime']) && (mb_strlen($this->container['vodLoopTime']) > 10)) {
                $invalidProperties[] = "invalid value for 'vodLoopTime', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['vodLoopTime']) && (mb_strlen($this->container['vodLoopTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'vodLoopTime', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getVodRefreshTypeAllowableValues();
                if (!is_null($this->container['vodRefreshType']) && !in_array($this->container['vodRefreshType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'vodRefreshType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['vodRefreshType']) && (mb_strlen($this->container['vodRefreshType']) > 64)) {
                $invalidProperties[] = "invalid value for 'vodRefreshType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['vodRefreshType']) && (mb_strlen($this->container['vodRefreshType']) < 1)) {
                $invalidProperties[] = "invalid value for 'vodRefreshType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['vodStartVideoIndex']) && ($this->container['vodStartVideoIndex'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'vodStartVideoIndex', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['vodStartVideoIndex']) && ($this->container['vodStartVideoIndex'] < 0)) {
                $invalidProperties[] = "invalid value for 'vodStartVideoIndex', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vodStartVideoTime']) && ($this->container['vodStartVideoTime'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'vodStartVideoTime', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['vodStartVideoTime']) && ($this->container['vodStartVideoTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'vodStartVideoTime', must be bigger than or equal to 0.";
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
    * Gets taskId
    *  任务id
    *
    * @return string
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string $taskId 任务id
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets status
    *  pause停用/enable启用
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status pause停用/enable启用
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets sourceUrls
    *  拉流源URL
    *
    * @return string[]|null
    */
    public function getSourceUrls()
    {
        return $this->container['sourceUrls'];
    }

    /**
    * Sets sourceUrls
    *
    * @param string[]|null $sourceUrls 拉流源URL
    *
    * @return $this
    */
    public function setSourceUrls($sourceUrls)
    {
        $this->container['sourceUrls'] = $sourceUrls;
        return $this;
    }

    /**
    * Gets vodLoopTime
    *  缺省值”-1”。-1：无限轮播，以结束时间为准；N：按文件列表播放N轮，以播放完成和结束时间先到的为准。不传、为空（\"\"）时按缺省值生效
    *
    * @return string|null
    */
    public function getVodLoopTime()
    {
        return $this->container['vodLoopTime'];
    }

    /**
    * Sets vodLoopTime
    *
    * @param string|null $vodLoopTime 缺省值”-1”。-1：无限轮播，以结束时间为准；N：按文件列表播放N轮，以播放完成和结束时间先到的为准。不传、为空（\"\"）时按缺省值生效
    *
    * @return $this
    */
    public function setVodLoopTime($vodLoopTime)
    {
        $this->container['vodLoopTime'] = $vodLoopTime;
        return $this;
    }

    /**
    * Gets vodRefreshType
    *  缺省值 immediate_new_source，可选 immediate_new_source、continue_from_file_start、continue_from_break_point
    *
    * @return string|null
    */
    public function getVodRefreshType()
    {
        return $this->container['vodRefreshType'];
    }

    /**
    * Sets vodRefreshType
    *
    * @param string|null $vodRefreshType 缺省值 immediate_new_source，可选 immediate_new_source、continue_from_file_start、continue_from_break_point
    *
    * @return $this
    */
    public function setVodRefreshType($vodRefreshType)
    {
        $this->container['vodRefreshType'] = $vodRefreshType;
        return $this;
    }

    /**
    * Gets vodStartVideoIndex
    *  缺省值 0，指定播放文件的下标，从0开始表示第一个文件，最大值 len(source_urls)-1
    *
    * @return int|null
    */
    public function getVodStartVideoIndex()
    {
        return $this->container['vodStartVideoIndex'];
    }

    /**
    * Sets vodStartVideoIndex
    *
    * @param int|null $vodStartVideoIndex 缺省值 0，指定播放文件的下标，从0开始表示第一个文件，最大值 len(source_urls)-1
    *
    * @return $this
    */
    public function setVodStartVideoIndex($vodStartVideoIndex)
    {
        $this->container['vodStartVideoIndex'] = $vodStartVideoIndex;
        return $this;
    }

    /**
    * Gets startTime
    *  任务启动时间，时间格式： \"2006-01-02T15:04:05Z\" 必须小于结束时间，缺省为当前时间
    *
    * @return \DateTime|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param \DateTime|null $startTime 任务启动时间，时间格式： \"2006-01-02T15:04:05Z\" 必须小于结束时间，缺省为当前时间
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
    *  任务结束时间，时间格式： \"2006-01-02T15:04:05Z\" 必须大于开始时间，至多为开始时间+7天
    *
    * @return \DateTime|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param \DateTime|null $endTime 任务结束时间，时间格式： \"2006-01-02T15:04:05Z\" 必须大于开始时间，至多为开始时间+7天
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets vodStartVideoTime
    *  缺省值 0，指定从上述指定文件的第几秒开始播放
    *
    * @return int|null
    */
    public function getVodStartVideoTime()
    {
        return $this->container['vodStartVideoTime'];
    }

    /**
    * Sets vodStartVideoTime
    *
    * @param int|null $vodStartVideoTime 缺省值 0，指定从上述指定文件的第几秒开始播放
    *
    * @return $this
    */
    public function setVodStartVideoTime($vodStartVideoTime)
    {
        $this->container['vodStartVideoTime'] = $vodStartVideoTime;
        return $this;
    }

    /**
    * Gets callbackEvents
    *  要回调的事件列表（不填则回调全部） - TaskStart：任务启动回调 - TaskExit：任务停止回调 - VodSourceFileStart 仅PullVodPushLive可用，文件启动切换 - VodSourceFileFinish 仅PullVodPushLive可用，文件播放完毕 - ResetTaskConfig 仅PullVodPushLive可用，任务更新 - TaskAlarm: 用于告警事件通知
    *
    * @return string[]|null
    */
    public function getCallbackEvents()
    {
        return $this->container['callbackEvents'];
    }

    /**
    * Sets callbackEvents
    *
    * @param string[]|null $callbackEvents 要回调的事件列表（不填则回调全部） - TaskStart：任务启动回调 - TaskExit：任务停止回调 - VodSourceFileStart 仅PullVodPushLive可用，文件启动切换 - VodSourceFileFinish 仅PullVodPushLive可用，文件播放完毕 - ResetTaskConfig 仅PullVodPushLive可用，任务更新 - TaskAlarm: 用于告警事件通知
    *
    * @return $this
    */
    public function setCallbackEvents($callbackEvents)
    {
        $this->container['callbackEvents'] = $callbackEvents;
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

