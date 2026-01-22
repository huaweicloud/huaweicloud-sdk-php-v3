<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LivePullTaskInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LivePullTaskInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  任务id
    * status  任务状态
    * createTime  创建时间
    * region  任务执行区域
    * sourceType  拉流源类型 PullLivePushLive：拉转推（拉直播推直播） PullVodPushLive：轮播（拉点播推直播）
    * sourceUrls  拉流源URL 当 source_type 为 PullLivePushLive 时，只能填写一个URL 当 source_type 为 PullVodPushLive 时，可以指定多个轮播源文件URL
    * domain  推流域名
    * appName  推流app
    * streamName  推流流名
    * pushArgs  推流参数
    * destinationUrl  完整的目标URL。 如果指定此参数，domain、app_name和stream_name需要传入空字符串或不传。
    * startTime  任务启动时间，时间格式： \"2006-01-02T15:04:05Z\"
    * endTime  任务结束时间，时间格式： \"2006-01-02T15:04:05Z\"  1. 结束时间必须大于开始时间； 2. 结束时间必须大于当前时间； 3. 结束时间 和 开始时间 间隔必须小于七天。
    * callbackEvents  要回调的事件列表（不填则回调全部） - TaskStart：任务启动回调 - TaskExit：任务停止回调 - VodSourceFileStart：仅PullVodPushLive可用，文件启动切换 - VodSourceFileFinish：仅PullVodPushLive可用，文件播放完毕 - ResetTaskConfig：仅PullVodPushLive可用，任务更新 - TaskAlarm：用于告警事件通知
    * callbackUrl  回调接收地址
    * backupSourceType  备源的类型 - PullLivePushLive：直播 注意事项： 1. 仅当source_type为PullVodPushLive生效。 2. 主直播源拉流中断时，自动使用备源进行拉流。
    * backupSourceUrls  备源URL，仅当source_type为PullVodPushLive生效。
    * vodLoopTime  缺省值”-1” -1：无限轮播，以结束时间为准；N：按文件列表播放N轮，以播放完成和结束时间先到为准。 不传、为空（\"\"）时按缺省值生效
    * vodStartVideoIndex  指定播放文件的下标，从0开始表示第一个文件，最大值 len(source_urls)-1
    * vodStartVideoTime  指定从上述指定文件的第几秒开始播放
    * vodRefreshType  修改任务时文件切换方式 immediate_new_source：立即播放新的拉流源内容 continue_from_file_start：从上次断流url文件重新开始推流 continue_from_break_point：从上次断流url文件断流位置开始推流（续上）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'status' => 'string',
            'createTime' => '\DateTime',
            'region' => 'string',
            'sourceType' => 'string',
            'sourceUrls' => 'string[]',
            'domain' => 'string',
            'appName' => 'string',
            'streamName' => 'string',
            'pushArgs' => 'string',
            'destinationUrl' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'callbackEvents' => 'string[]',
            'callbackUrl' => 'string',
            'backupSourceType' => 'string',
            'backupSourceUrls' => 'string[]',
            'vodLoopTime' => 'string',
            'vodStartVideoIndex' => 'int',
            'vodStartVideoTime' => 'int',
            'vodRefreshType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  任务id
    * status  任务状态
    * createTime  创建时间
    * region  任务执行区域
    * sourceType  拉流源类型 PullLivePushLive：拉转推（拉直播推直播） PullVodPushLive：轮播（拉点播推直播）
    * sourceUrls  拉流源URL 当 source_type 为 PullLivePushLive 时，只能填写一个URL 当 source_type 为 PullVodPushLive 时，可以指定多个轮播源文件URL
    * domain  推流域名
    * appName  推流app
    * streamName  推流流名
    * pushArgs  推流参数
    * destinationUrl  完整的目标URL。 如果指定此参数，domain、app_name和stream_name需要传入空字符串或不传。
    * startTime  任务启动时间，时间格式： \"2006-01-02T15:04:05Z\"
    * endTime  任务结束时间，时间格式： \"2006-01-02T15:04:05Z\"  1. 结束时间必须大于开始时间； 2. 结束时间必须大于当前时间； 3. 结束时间 和 开始时间 间隔必须小于七天。
    * callbackEvents  要回调的事件列表（不填则回调全部） - TaskStart：任务启动回调 - TaskExit：任务停止回调 - VodSourceFileStart：仅PullVodPushLive可用，文件启动切换 - VodSourceFileFinish：仅PullVodPushLive可用，文件播放完毕 - ResetTaskConfig：仅PullVodPushLive可用，任务更新 - TaskAlarm：用于告警事件通知
    * callbackUrl  回调接收地址
    * backupSourceType  备源的类型 - PullLivePushLive：直播 注意事项： 1. 仅当source_type为PullVodPushLive生效。 2. 主直播源拉流中断时，自动使用备源进行拉流。
    * backupSourceUrls  备源URL，仅当source_type为PullVodPushLive生效。
    * vodLoopTime  缺省值”-1” -1：无限轮播，以结束时间为准；N：按文件列表播放N轮，以播放完成和结束时间先到为准。 不传、为空（\"\"）时按缺省值生效
    * vodStartVideoIndex  指定播放文件的下标，从0开始表示第一个文件，最大值 len(source_urls)-1
    * vodStartVideoTime  指定从上述指定文件的第几秒开始播放
    * vodRefreshType  修改任务时文件切换方式 immediate_new_source：立即播放新的拉流源内容 continue_from_file_start：从上次断流url文件重新开始推流 continue_from_break_point：从上次断流url文件断流位置开始推流（续上）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'status' => null,
        'createTime' => 'date-time',
        'region' => null,
        'sourceType' => null,
        'sourceUrls' => null,
        'domain' => null,
        'appName' => null,
        'streamName' => null,
        'pushArgs' => null,
        'destinationUrl' => null,
        'startTime' => null,
        'endTime' => null,
        'callbackEvents' => null,
        'callbackUrl' => null,
        'backupSourceType' => null,
        'backupSourceUrls' => null,
        'vodLoopTime' => null,
        'vodStartVideoIndex' => null,
        'vodStartVideoTime' => null,
        'vodRefreshType' => null
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
    * status  任务状态
    * createTime  创建时间
    * region  任务执行区域
    * sourceType  拉流源类型 PullLivePushLive：拉转推（拉直播推直播） PullVodPushLive：轮播（拉点播推直播）
    * sourceUrls  拉流源URL 当 source_type 为 PullLivePushLive 时，只能填写一个URL 当 source_type 为 PullVodPushLive 时，可以指定多个轮播源文件URL
    * domain  推流域名
    * appName  推流app
    * streamName  推流流名
    * pushArgs  推流参数
    * destinationUrl  完整的目标URL。 如果指定此参数，domain、app_name和stream_name需要传入空字符串或不传。
    * startTime  任务启动时间，时间格式： \"2006-01-02T15:04:05Z\"
    * endTime  任务结束时间，时间格式： \"2006-01-02T15:04:05Z\"  1. 结束时间必须大于开始时间； 2. 结束时间必须大于当前时间； 3. 结束时间 和 开始时间 间隔必须小于七天。
    * callbackEvents  要回调的事件列表（不填则回调全部） - TaskStart：任务启动回调 - TaskExit：任务停止回调 - VodSourceFileStart：仅PullVodPushLive可用，文件启动切换 - VodSourceFileFinish：仅PullVodPushLive可用，文件播放完毕 - ResetTaskConfig：仅PullVodPushLive可用，任务更新 - TaskAlarm：用于告警事件通知
    * callbackUrl  回调接收地址
    * backupSourceType  备源的类型 - PullLivePushLive：直播 注意事项： 1. 仅当source_type为PullVodPushLive生效。 2. 主直播源拉流中断时，自动使用备源进行拉流。
    * backupSourceUrls  备源URL，仅当source_type为PullVodPushLive生效。
    * vodLoopTime  缺省值”-1” -1：无限轮播，以结束时间为准；N：按文件列表播放N轮，以播放完成和结束时间先到为准。 不传、为空（\"\"）时按缺省值生效
    * vodStartVideoIndex  指定播放文件的下标，从0开始表示第一个文件，最大值 len(source_urls)-1
    * vodStartVideoTime  指定从上述指定文件的第几秒开始播放
    * vodRefreshType  修改任务时文件切换方式 immediate_new_source：立即播放新的拉流源内容 continue_from_file_start：从上次断流url文件重新开始推流 continue_from_break_point：从上次断流url文件断流位置开始推流（续上）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'status' => 'status',
            'createTime' => 'create_time',
            'region' => 'region',
            'sourceType' => 'source_type',
            'sourceUrls' => 'source_urls',
            'domain' => 'domain',
            'appName' => 'app_name',
            'streamName' => 'stream_name',
            'pushArgs' => 'push_args',
            'destinationUrl' => 'destination_url',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'callbackEvents' => 'callback_events',
            'callbackUrl' => 'callback_url',
            'backupSourceType' => 'backup_source_type',
            'backupSourceUrls' => 'backup_source_urls',
            'vodLoopTime' => 'vod_loop_time',
            'vodStartVideoIndex' => 'vod_start_video_index',
            'vodStartVideoTime' => 'vod_start_video_time',
            'vodRefreshType' => 'vod_refresh_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  任务id
    * status  任务状态
    * createTime  创建时间
    * region  任务执行区域
    * sourceType  拉流源类型 PullLivePushLive：拉转推（拉直播推直播） PullVodPushLive：轮播（拉点播推直播）
    * sourceUrls  拉流源URL 当 source_type 为 PullLivePushLive 时，只能填写一个URL 当 source_type 为 PullVodPushLive 时，可以指定多个轮播源文件URL
    * domain  推流域名
    * appName  推流app
    * streamName  推流流名
    * pushArgs  推流参数
    * destinationUrl  完整的目标URL。 如果指定此参数，domain、app_name和stream_name需要传入空字符串或不传。
    * startTime  任务启动时间，时间格式： \"2006-01-02T15:04:05Z\"
    * endTime  任务结束时间，时间格式： \"2006-01-02T15:04:05Z\"  1. 结束时间必须大于开始时间； 2. 结束时间必须大于当前时间； 3. 结束时间 和 开始时间 间隔必须小于七天。
    * callbackEvents  要回调的事件列表（不填则回调全部） - TaskStart：任务启动回调 - TaskExit：任务停止回调 - VodSourceFileStart：仅PullVodPushLive可用，文件启动切换 - VodSourceFileFinish：仅PullVodPushLive可用，文件播放完毕 - ResetTaskConfig：仅PullVodPushLive可用，任务更新 - TaskAlarm：用于告警事件通知
    * callbackUrl  回调接收地址
    * backupSourceType  备源的类型 - PullLivePushLive：直播 注意事项： 1. 仅当source_type为PullVodPushLive生效。 2. 主直播源拉流中断时，自动使用备源进行拉流。
    * backupSourceUrls  备源URL，仅当source_type为PullVodPushLive生效。
    * vodLoopTime  缺省值”-1” -1：无限轮播，以结束时间为准；N：按文件列表播放N轮，以播放完成和结束时间先到为准。 不传、为空（\"\"）时按缺省值生效
    * vodStartVideoIndex  指定播放文件的下标，从0开始表示第一个文件，最大值 len(source_urls)-1
    * vodStartVideoTime  指定从上述指定文件的第几秒开始播放
    * vodRefreshType  修改任务时文件切换方式 immediate_new_source：立即播放新的拉流源内容 continue_from_file_start：从上次断流url文件重新开始推流 continue_from_break_point：从上次断流url文件断流位置开始推流（续上）
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'status' => 'setStatus',
            'createTime' => 'setCreateTime',
            'region' => 'setRegion',
            'sourceType' => 'setSourceType',
            'sourceUrls' => 'setSourceUrls',
            'domain' => 'setDomain',
            'appName' => 'setAppName',
            'streamName' => 'setStreamName',
            'pushArgs' => 'setPushArgs',
            'destinationUrl' => 'setDestinationUrl',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'callbackEvents' => 'setCallbackEvents',
            'callbackUrl' => 'setCallbackUrl',
            'backupSourceType' => 'setBackupSourceType',
            'backupSourceUrls' => 'setBackupSourceUrls',
            'vodLoopTime' => 'setVodLoopTime',
            'vodStartVideoIndex' => 'setVodStartVideoIndex',
            'vodStartVideoTime' => 'setVodStartVideoTime',
            'vodRefreshType' => 'setVodRefreshType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  任务id
    * status  任务状态
    * createTime  创建时间
    * region  任务执行区域
    * sourceType  拉流源类型 PullLivePushLive：拉转推（拉直播推直播） PullVodPushLive：轮播（拉点播推直播）
    * sourceUrls  拉流源URL 当 source_type 为 PullLivePushLive 时，只能填写一个URL 当 source_type 为 PullVodPushLive 时，可以指定多个轮播源文件URL
    * domain  推流域名
    * appName  推流app
    * streamName  推流流名
    * pushArgs  推流参数
    * destinationUrl  完整的目标URL。 如果指定此参数，domain、app_name和stream_name需要传入空字符串或不传。
    * startTime  任务启动时间，时间格式： \"2006-01-02T15:04:05Z\"
    * endTime  任务结束时间，时间格式： \"2006-01-02T15:04:05Z\"  1. 结束时间必须大于开始时间； 2. 结束时间必须大于当前时间； 3. 结束时间 和 开始时间 间隔必须小于七天。
    * callbackEvents  要回调的事件列表（不填则回调全部） - TaskStart：任务启动回调 - TaskExit：任务停止回调 - VodSourceFileStart：仅PullVodPushLive可用，文件启动切换 - VodSourceFileFinish：仅PullVodPushLive可用，文件播放完毕 - ResetTaskConfig：仅PullVodPushLive可用，任务更新 - TaskAlarm：用于告警事件通知
    * callbackUrl  回调接收地址
    * backupSourceType  备源的类型 - PullLivePushLive：直播 注意事项： 1. 仅当source_type为PullVodPushLive生效。 2. 主直播源拉流中断时，自动使用备源进行拉流。
    * backupSourceUrls  备源URL，仅当source_type为PullVodPushLive生效。
    * vodLoopTime  缺省值”-1” -1：无限轮播，以结束时间为准；N：按文件列表播放N轮，以播放完成和结束时间先到为准。 不传、为空（\"\"）时按缺省值生效
    * vodStartVideoIndex  指定播放文件的下标，从0开始表示第一个文件，最大值 len(source_urls)-1
    * vodStartVideoTime  指定从上述指定文件的第几秒开始播放
    * vodRefreshType  修改任务时文件切换方式 immediate_new_source：立即播放新的拉流源内容 continue_from_file_start：从上次断流url文件重新开始推流 continue_from_break_point：从上次断流url文件断流位置开始推流（续上）
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'status' => 'getStatus',
            'createTime' => 'getCreateTime',
            'region' => 'getRegion',
            'sourceType' => 'getSourceType',
            'sourceUrls' => 'getSourceUrls',
            'domain' => 'getDomain',
            'appName' => 'getAppName',
            'streamName' => 'getStreamName',
            'pushArgs' => 'getPushArgs',
            'destinationUrl' => 'getDestinationUrl',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'callbackEvents' => 'getCallbackEvents',
            'callbackUrl' => 'getCallbackUrl',
            'backupSourceType' => 'getBackupSourceType',
            'backupSourceUrls' => 'getBackupSourceUrls',
            'vodLoopTime' => 'getVodLoopTime',
            'vodStartVideoIndex' => 'getVodStartVideoIndex',
            'vodStartVideoTime' => 'getVodStartVideoTime',
            'vodRefreshType' => 'getVodRefreshType'
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
    const VOD_REFRESH_TYPE_IMMEDIATE_NEW_SOURCE = 'immediate_new_source';
    const VOD_REFRESH_TYPE_CONTINUE_FROM_FILE_START = 'continue_from_file_start';
    const VOD_REFRESH_TYPE_CONTINUE_FROM_BREAK_POINT = 'continue_from_break_point';
    

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
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['sourceUrls'] = isset($data['sourceUrls']) ? $data['sourceUrls'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['streamName'] = isset($data['streamName']) ? $data['streamName'] : null;
        $this->container['pushArgs'] = isset($data['pushArgs']) ? $data['pushArgs'] : null;
        $this->container['destinationUrl'] = isset($data['destinationUrl']) ? $data['destinationUrl'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['callbackEvents'] = isset($data['callbackEvents']) ? $data['callbackEvents'] : null;
        $this->container['callbackUrl'] = isset($data['callbackUrl']) ? $data['callbackUrl'] : null;
        $this->container['backupSourceType'] = isset($data['backupSourceType']) ? $data['backupSourceType'] : null;
        $this->container['backupSourceUrls'] = isset($data['backupSourceUrls']) ? $data['backupSourceUrls'] : null;
        $this->container['vodLoopTime'] = isset($data['vodLoopTime']) ? $data['vodLoopTime'] : null;
        $this->container['vodStartVideoIndex'] = isset($data['vodStartVideoIndex']) ? $data['vodStartVideoIndex'] : null;
        $this->container['vodStartVideoTime'] = isset($data['vodStartVideoTime']) ? $data['vodStartVideoTime'] : null;
        $this->container['vodRefreshType'] = isset($data['vodRefreshType']) ? $data['vodRefreshType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['vodLoopTime']) && (mb_strlen($this->container['vodLoopTime']) > 10)) {
                $invalidProperties[] = "invalid value for 'vodLoopTime', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['vodLoopTime']) && (mb_strlen($this->container['vodLoopTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'vodLoopTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vodStartVideoIndex']) && ($this->container['vodStartVideoIndex'] > 8192)) {
                $invalidProperties[] = "invalid value for 'vodStartVideoIndex', must be smaller than or equal to 8192.";
            }
            if (!is_null($this->container['vodStartVideoIndex']) && ($this->container['vodStartVideoIndex'] < 0)) {
                $invalidProperties[] = "invalid value for 'vodStartVideoIndex', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vodStartVideoTime']) && ($this->container['vodStartVideoTime'] > 2100000000)) {
                $invalidProperties[] = "invalid value for 'vodStartVideoTime', must be smaller than or equal to 2100000000.";
            }
            if (!is_null($this->container['vodStartVideoTime']) && ($this->container['vodStartVideoTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'vodStartVideoTime', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getVodRefreshTypeAllowableValues();
                if (!is_null($this->container['vodRefreshType']) && !in_array($this->container['vodRefreshType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'vodRefreshType', must be one of '%s'",
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
    * Gets taskId
    *  任务id
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId 任务id
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
    *  任务状态
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
    * @param string|null $status 任务状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets region
    *  任务执行区域
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 任务执行区域
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets sourceType
    *  拉流源类型 PullLivePushLive：拉转推（拉直播推直播） PullVodPushLive：轮播（拉点播推直播）
    *
    * @return string|null
    */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
    * Sets sourceType
    *
    * @param string|null $sourceType 拉流源类型 PullLivePushLive：拉转推（拉直播推直播） PullVodPushLive：轮播（拉点播推直播）
    *
    * @return $this
    */
    public function setSourceType($sourceType)
    {
        $this->container['sourceType'] = $sourceType;
        return $this;
    }

    /**
    * Gets sourceUrls
    *  拉流源URL 当 source_type 为 PullLivePushLive 时，只能填写一个URL 当 source_type 为 PullVodPushLive 时，可以指定多个轮播源文件URL
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
    * @param string[]|null $sourceUrls 拉流源URL 当 source_type 为 PullLivePushLive 时，只能填写一个URL 当 source_type 为 PullVodPushLive 时，可以指定多个轮播源文件URL
    *
    * @return $this
    */
    public function setSourceUrls($sourceUrls)
    {
        $this->container['sourceUrls'] = $sourceUrls;
        return $this;
    }

    /**
    * Gets domain
    *  推流域名
    *
    * @return string|null
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string|null $domain 推流域名
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets appName
    *  推流app
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName 推流app
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets streamName
    *  推流流名
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
    * @param string|null $streamName 推流流名
    *
    * @return $this
    */
    public function setStreamName($streamName)
    {
        $this->container['streamName'] = $streamName;
        return $this;
    }

    /**
    * Gets pushArgs
    *  推流参数
    *
    * @return string|null
    */
    public function getPushArgs()
    {
        return $this->container['pushArgs'];
    }

    /**
    * Sets pushArgs
    *
    * @param string|null $pushArgs 推流参数
    *
    * @return $this
    */
    public function setPushArgs($pushArgs)
    {
        $this->container['pushArgs'] = $pushArgs;
        return $this;
    }

    /**
    * Gets destinationUrl
    *  完整的目标URL。 如果指定此参数，domain、app_name和stream_name需要传入空字符串或不传。
    *
    * @return string|null
    */
    public function getDestinationUrl()
    {
        return $this->container['destinationUrl'];
    }

    /**
    * Sets destinationUrl
    *
    * @param string|null $destinationUrl 完整的目标URL。 如果指定此参数，domain、app_name和stream_name需要传入空字符串或不传。
    *
    * @return $this
    */
    public function setDestinationUrl($destinationUrl)
    {
        $this->container['destinationUrl'] = $destinationUrl;
        return $this;
    }

    /**
    * Gets startTime
    *  任务启动时间，时间格式： \"2006-01-02T15:04:05Z\"
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
    * @param string|null $startTime 任务启动时间，时间格式： \"2006-01-02T15:04:05Z\"
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
    *  任务结束时间，时间格式： \"2006-01-02T15:04:05Z\"  1. 结束时间必须大于开始时间； 2. 结束时间必须大于当前时间； 3. 结束时间 和 开始时间 间隔必须小于七天。
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
    * @param string|null $endTime 任务结束时间，时间格式： \"2006-01-02T15:04:05Z\"  1. 结束时间必须大于开始时间； 2. 结束时间必须大于当前时间； 3. 结束时间 和 开始时间 间隔必须小于七天。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets callbackEvents
    *  要回调的事件列表（不填则回调全部） - TaskStart：任务启动回调 - TaskExit：任务停止回调 - VodSourceFileStart：仅PullVodPushLive可用，文件启动切换 - VodSourceFileFinish：仅PullVodPushLive可用，文件播放完毕 - ResetTaskConfig：仅PullVodPushLive可用，任务更新 - TaskAlarm：用于告警事件通知
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
    * @param string[]|null $callbackEvents 要回调的事件列表（不填则回调全部） - TaskStart：任务启动回调 - TaskExit：任务停止回调 - VodSourceFileStart：仅PullVodPushLive可用，文件启动切换 - VodSourceFileFinish：仅PullVodPushLive可用，文件播放完毕 - ResetTaskConfig：仅PullVodPushLive可用，任务更新 - TaskAlarm：用于告警事件通知
    *
    * @return $this
    */
    public function setCallbackEvents($callbackEvents)
    {
        $this->container['callbackEvents'] = $callbackEvents;
        return $this;
    }

    /**
    * Gets callbackUrl
    *  回调接收地址
    *
    * @return string|null
    */
    public function getCallbackUrl()
    {
        return $this->container['callbackUrl'];
    }

    /**
    * Sets callbackUrl
    *
    * @param string|null $callbackUrl 回调接收地址
    *
    * @return $this
    */
    public function setCallbackUrl($callbackUrl)
    {
        $this->container['callbackUrl'] = $callbackUrl;
        return $this;
    }

    /**
    * Gets backupSourceType
    *  备源的类型 - PullLivePushLive：直播 注意事项： 1. 仅当source_type为PullVodPushLive生效。 2. 主直播源拉流中断时，自动使用备源进行拉流。
    *
    * @return string|null
    */
    public function getBackupSourceType()
    {
        return $this->container['backupSourceType'];
    }

    /**
    * Sets backupSourceType
    *
    * @param string|null $backupSourceType 备源的类型 - PullLivePushLive：直播 注意事项： 1. 仅当source_type为PullVodPushLive生效。 2. 主直播源拉流中断时，自动使用备源进行拉流。
    *
    * @return $this
    */
    public function setBackupSourceType($backupSourceType)
    {
        $this->container['backupSourceType'] = $backupSourceType;
        return $this;
    }

    /**
    * Gets backupSourceUrls
    *  备源URL，仅当source_type为PullVodPushLive生效。
    *
    * @return string[]|null
    */
    public function getBackupSourceUrls()
    {
        return $this->container['backupSourceUrls'];
    }

    /**
    * Sets backupSourceUrls
    *
    * @param string[]|null $backupSourceUrls 备源URL，仅当source_type为PullVodPushLive生效。
    *
    * @return $this
    */
    public function setBackupSourceUrls($backupSourceUrls)
    {
        $this->container['backupSourceUrls'] = $backupSourceUrls;
        return $this;
    }

    /**
    * Gets vodLoopTime
    *  缺省值”-1” -1：无限轮播，以结束时间为准；N：按文件列表播放N轮，以播放完成和结束时间先到为准。 不传、为空（\"\"）时按缺省值生效
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
    * @param string|null $vodLoopTime 缺省值”-1” -1：无限轮播，以结束时间为准；N：按文件列表播放N轮，以播放完成和结束时间先到为准。 不传、为空（\"\"）时按缺省值生效
    *
    * @return $this
    */
    public function setVodLoopTime($vodLoopTime)
    {
        $this->container['vodLoopTime'] = $vodLoopTime;
        return $this;
    }

    /**
    * Gets vodStartVideoIndex
    *  指定播放文件的下标，从0开始表示第一个文件，最大值 len(source_urls)-1
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
    * @param int|null $vodStartVideoIndex 指定播放文件的下标，从0开始表示第一个文件，最大值 len(source_urls)-1
    *
    * @return $this
    */
    public function setVodStartVideoIndex($vodStartVideoIndex)
    {
        $this->container['vodStartVideoIndex'] = $vodStartVideoIndex;
        return $this;
    }

    /**
    * Gets vodStartVideoTime
    *  指定从上述指定文件的第几秒开始播放
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
    * @param int|null $vodStartVideoTime 指定从上述指定文件的第几秒开始播放
    *
    * @return $this
    */
    public function setVodStartVideoTime($vodStartVideoTime)
    {
        $this->container['vodStartVideoTime'] = $vodStartVideoTime;
        return $this;
    }

    /**
    * Gets vodRefreshType
    *  修改任务时文件切换方式 immediate_new_source：立即播放新的拉流源内容 continue_from_file_start：从上次断流url文件重新开始推流 continue_from_break_point：从上次断流url文件断流位置开始推流（续上）
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
    * @param string|null $vodRefreshType 修改任务时文件切换方式 immediate_new_source：立即播放新的拉流源内容 continue_from_file_start：从上次断流url文件重新开始推流 continue_from_break_point：从上次断流url文件断流位置开始推流（续上）
    *
    * @return $this
    */
    public function setVodRefreshType($vodRefreshType)
    {
        $this->container['vodRefreshType'] = $vodRefreshType;
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

