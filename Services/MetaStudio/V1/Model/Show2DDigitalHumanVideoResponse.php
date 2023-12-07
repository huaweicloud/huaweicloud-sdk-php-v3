<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Show2DDigitalHumanVideoResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Show2DDigitalHumanVideoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  任务ID。
    * state  任务的状态。 * WAITING：等待 * PROCESSING：处理中 * SUCCEED：成功 * FAILED：失败 * CANCELED：取消
    * startTime  数字人视频制作开始时间。
    * endTime  数字人视频制作结束时间。
    * duration  数字人视频内容时长。
    * outputAssetConfig  outputAssetConfig
    * errorInfo  errorInfo
    * createTime  任务创建时间。
    * lastupdateTime  任务更新时间。
    * scriptId  剧本ID。
    * videoMakingType  视频生成类型。该参数取值是MODEL时，model_asset_id必填；取值是PICTURE时，human_image必填。 * MODEL：通过分数数字人模型生成视频 * PICTURE： 通过单张照片生成视频
    * humanImage  人物照片，需要Base64编码。
    * modelAssetId  分身数字人模型资产ID。
    * voiceConfig  voiceConfig
    * videoConfig  videoConfig
    * shootScripts  拍摄脚本列表。
    * backgroundMusicConfig  backgroundMusicConfig
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'state' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'duration' => 'float',
            'outputAssetConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\OutputAssetInfo',
            'errorInfo' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ErrorResponse',
            'createTime' => 'string',
            'lastupdateTime' => 'string',
            'scriptId' => 'string',
            'videoMakingType' => 'string',
            'humanImage' => 'string',
            'modelAssetId' => 'string',
            'voiceConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\VoiceConfig',
            'videoConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\VideoConfig',
            'shootScripts' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ShootScriptItem[]',
            'backgroundMusicConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\BackgroundMusicConfig',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  任务ID。
    * state  任务的状态。 * WAITING：等待 * PROCESSING：处理中 * SUCCEED：成功 * FAILED：失败 * CANCELED：取消
    * startTime  数字人视频制作开始时间。
    * endTime  数字人视频制作结束时间。
    * duration  数字人视频内容时长。
    * outputAssetConfig  outputAssetConfig
    * errorInfo  errorInfo
    * createTime  任务创建时间。
    * lastupdateTime  任务更新时间。
    * scriptId  剧本ID。
    * videoMakingType  视频生成类型。该参数取值是MODEL时，model_asset_id必填；取值是PICTURE时，human_image必填。 * MODEL：通过分数数字人模型生成视频 * PICTURE： 通过单张照片生成视频
    * humanImage  人物照片，需要Base64编码。
    * modelAssetId  分身数字人模型资产ID。
    * voiceConfig  voiceConfig
    * videoConfig  videoConfig
    * shootScripts  拍摄脚本列表。
    * backgroundMusicConfig  backgroundMusicConfig
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'state' => null,
        'startTime' => null,
        'endTime' => null,
        'duration' => 'float',
        'outputAssetConfig' => null,
        'errorInfo' => null,
        'createTime' => null,
        'lastupdateTime' => null,
        'scriptId' => null,
        'videoMakingType' => null,
        'humanImage' => null,
        'modelAssetId' => null,
        'voiceConfig' => null,
        'videoConfig' => null,
        'shootScripts' => null,
        'backgroundMusicConfig' => null,
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
    * jobId  任务ID。
    * state  任务的状态。 * WAITING：等待 * PROCESSING：处理中 * SUCCEED：成功 * FAILED：失败 * CANCELED：取消
    * startTime  数字人视频制作开始时间。
    * endTime  数字人视频制作结束时间。
    * duration  数字人视频内容时长。
    * outputAssetConfig  outputAssetConfig
    * errorInfo  errorInfo
    * createTime  任务创建时间。
    * lastupdateTime  任务更新时间。
    * scriptId  剧本ID。
    * videoMakingType  视频生成类型。该参数取值是MODEL时，model_asset_id必填；取值是PICTURE时，human_image必填。 * MODEL：通过分数数字人模型生成视频 * PICTURE： 通过单张照片生成视频
    * humanImage  人物照片，需要Base64编码。
    * modelAssetId  分身数字人模型资产ID。
    * voiceConfig  voiceConfig
    * videoConfig  videoConfig
    * shootScripts  拍摄脚本列表。
    * backgroundMusicConfig  backgroundMusicConfig
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'state' => 'state',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'duration' => 'duration',
            'outputAssetConfig' => 'output_asset_config',
            'errorInfo' => 'error_info',
            'createTime' => 'create_time',
            'lastupdateTime' => 'lastupdate_time',
            'scriptId' => 'script_id',
            'videoMakingType' => 'video_making_type',
            'humanImage' => 'human_image',
            'modelAssetId' => 'model_asset_id',
            'voiceConfig' => 'voice_config',
            'videoConfig' => 'video_config',
            'shootScripts' => 'shoot_scripts',
            'backgroundMusicConfig' => 'background_music_config',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  任务ID。
    * state  任务的状态。 * WAITING：等待 * PROCESSING：处理中 * SUCCEED：成功 * FAILED：失败 * CANCELED：取消
    * startTime  数字人视频制作开始时间。
    * endTime  数字人视频制作结束时间。
    * duration  数字人视频内容时长。
    * outputAssetConfig  outputAssetConfig
    * errorInfo  errorInfo
    * createTime  任务创建时间。
    * lastupdateTime  任务更新时间。
    * scriptId  剧本ID。
    * videoMakingType  视频生成类型。该参数取值是MODEL时，model_asset_id必填；取值是PICTURE时，human_image必填。 * MODEL：通过分数数字人模型生成视频 * PICTURE： 通过单张照片生成视频
    * humanImage  人物照片，需要Base64编码。
    * modelAssetId  分身数字人模型资产ID。
    * voiceConfig  voiceConfig
    * videoConfig  videoConfig
    * shootScripts  拍摄脚本列表。
    * backgroundMusicConfig  backgroundMusicConfig
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'state' => 'setState',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'duration' => 'setDuration',
            'outputAssetConfig' => 'setOutputAssetConfig',
            'errorInfo' => 'setErrorInfo',
            'createTime' => 'setCreateTime',
            'lastupdateTime' => 'setLastupdateTime',
            'scriptId' => 'setScriptId',
            'videoMakingType' => 'setVideoMakingType',
            'humanImage' => 'setHumanImage',
            'modelAssetId' => 'setModelAssetId',
            'voiceConfig' => 'setVoiceConfig',
            'videoConfig' => 'setVideoConfig',
            'shootScripts' => 'setShootScripts',
            'backgroundMusicConfig' => 'setBackgroundMusicConfig',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  任务ID。
    * state  任务的状态。 * WAITING：等待 * PROCESSING：处理中 * SUCCEED：成功 * FAILED：失败 * CANCELED：取消
    * startTime  数字人视频制作开始时间。
    * endTime  数字人视频制作结束时间。
    * duration  数字人视频内容时长。
    * outputAssetConfig  outputAssetConfig
    * errorInfo  errorInfo
    * createTime  任务创建时间。
    * lastupdateTime  任务更新时间。
    * scriptId  剧本ID。
    * videoMakingType  视频生成类型。该参数取值是MODEL时，model_asset_id必填；取值是PICTURE时，human_image必填。 * MODEL：通过分数数字人模型生成视频 * PICTURE： 通过单张照片生成视频
    * humanImage  人物照片，需要Base64编码。
    * modelAssetId  分身数字人模型资产ID。
    * voiceConfig  voiceConfig
    * videoConfig  videoConfig
    * shootScripts  拍摄脚本列表。
    * backgroundMusicConfig  backgroundMusicConfig
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'state' => 'getState',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'duration' => 'getDuration',
            'outputAssetConfig' => 'getOutputAssetConfig',
            'errorInfo' => 'getErrorInfo',
            'createTime' => 'getCreateTime',
            'lastupdateTime' => 'getLastupdateTime',
            'scriptId' => 'getScriptId',
            'videoMakingType' => 'getVideoMakingType',
            'humanImage' => 'getHumanImage',
            'modelAssetId' => 'getModelAssetId',
            'voiceConfig' => 'getVoiceConfig',
            'videoConfig' => 'getVideoConfig',
            'shootScripts' => 'getShootScripts',
            'backgroundMusicConfig' => 'getBackgroundMusicConfig',
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
    const VIDEO_MAKING_TYPE_MODEL = 'MODEL';
    const VIDEO_MAKING_TYPE_PICTURE = 'PICTURE';
    

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
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVideoMakingTypeAllowableValues()
    {
        return [
            self::VIDEO_MAKING_TYPE_MODEL,
            self::VIDEO_MAKING_TYPE_PICTURE,
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
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['outputAssetConfig'] = isset($data['outputAssetConfig']) ? $data['outputAssetConfig'] : null;
        $this->container['errorInfo'] = isset($data['errorInfo']) ? $data['errorInfo'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['lastupdateTime'] = isset($data['lastupdateTime']) ? $data['lastupdateTime'] : null;
        $this->container['scriptId'] = isset($data['scriptId']) ? $data['scriptId'] : null;
        $this->container['videoMakingType'] = isset($data['videoMakingType']) ? $data['videoMakingType'] : null;
        $this->container['humanImage'] = isset($data['humanImage']) ? $data['humanImage'] : null;
        $this->container['modelAssetId'] = isset($data['modelAssetId']) ? $data['modelAssetId'] : null;
        $this->container['voiceConfig'] = isset($data['voiceConfig']) ? $data['voiceConfig'] : null;
        $this->container['videoConfig'] = isset($data['videoConfig']) ? $data['videoConfig'] : null;
        $this->container['shootScripts'] = isset($data['shootScripts']) ? $data['shootScripts'] : null;
        $this->container['backgroundMusicConfig'] = isset($data['backgroundMusicConfig']) ? $data['backgroundMusicConfig'] : null;
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
        if ($this->container['jobId'] === null) {
            $invalidProperties[] = "'jobId' can't be null";
        }
            if ((mb_strlen($this->container['jobId']) > 64)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['jobId']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['state']) > 64)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['state']) < 1)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 1.";
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
            if (!is_null($this->container['duration']) && ($this->container['duration'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'duration', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['duration']) && ($this->container['duration'] < 0)) {
                $invalidProperties[] = "invalid value for 'duration', must be bigger than or equal to 0.";
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
            if (!is_null($this->container['scriptId']) && (mb_strlen($this->container['scriptId']) > 64)) {
                $invalidProperties[] = "invalid value for 'scriptId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['scriptId']) && (mb_strlen($this->container['scriptId']) < 1)) {
                $invalidProperties[] = "invalid value for 'scriptId', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getVideoMakingTypeAllowableValues();
                if (!is_null($this->container['videoMakingType']) && !in_array($this->container['videoMakingType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'videoMakingType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['humanImage']) && (mb_strlen($this->container['humanImage']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'humanImage', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['humanImage']) && (mb_strlen($this->container['humanImage']) < 1)) {
                $invalidProperties[] = "invalid value for 'humanImage', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['modelAssetId']) && (mb_strlen($this->container['modelAssetId']) > 64)) {
                $invalidProperties[] = "invalid value for 'modelAssetId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['modelAssetId']) && (mb_strlen($this->container['modelAssetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'modelAssetId', the character length must be bigger than or equal to 1.";
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
    *  任务ID。
    *
    * @return string
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string $jobId 任务ID。
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
    *  任务的状态。 * WAITING：等待 * PROCESSING：处理中 * SUCCEED：成功 * FAILED：失败 * CANCELED：取消
    *
    * @return string
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string $state 任务的状态。 * WAITING：等待 * PROCESSING：处理中 * SUCCEED：成功 * FAILED：失败 * CANCELED：取消
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets startTime
    *  数字人视频制作开始时间。
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
    * @param string|null $startTime 数字人视频制作开始时间。
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
    *  数字人视频制作结束时间。
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
    * @param string|null $endTime 数字人视频制作结束时间。
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
    *  数字人视频内容时长。
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
    * @param float|null $duration 数字人视频内容时长。
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets outputAssetConfig
    *  outputAssetConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\OutputAssetInfo|null
    */
    public function getOutputAssetConfig()
    {
        return $this->container['outputAssetConfig'];
    }

    /**
    * Sets outputAssetConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\OutputAssetInfo|null $outputAssetConfig outputAssetConfig
    *
    * @return $this
    */
    public function setOutputAssetConfig($outputAssetConfig)
    {
        $this->container['outputAssetConfig'] = $outputAssetConfig;
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
    *  任务创建时间。
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
    * @param string|null $createTime 任务创建时间。
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
    *  任务更新时间。
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
    * @param string|null $lastupdateTime 任务更新时间。
    *
    * @return $this
    */
    public function setLastupdateTime($lastupdateTime)
    {
        $this->container['lastupdateTime'] = $lastupdateTime;
        return $this;
    }

    /**
    * Gets scriptId
    *  剧本ID。
    *
    * @return string|null
    */
    public function getScriptId()
    {
        return $this->container['scriptId'];
    }

    /**
    * Sets scriptId
    *
    * @param string|null $scriptId 剧本ID。
    *
    * @return $this
    */
    public function setScriptId($scriptId)
    {
        $this->container['scriptId'] = $scriptId;
        return $this;
    }

    /**
    * Gets videoMakingType
    *  视频生成类型。该参数取值是MODEL时，model_asset_id必填；取值是PICTURE时，human_image必填。 * MODEL：通过分数数字人模型生成视频 * PICTURE： 通过单张照片生成视频
    *
    * @return string|null
    */
    public function getVideoMakingType()
    {
        return $this->container['videoMakingType'];
    }

    /**
    * Sets videoMakingType
    *
    * @param string|null $videoMakingType 视频生成类型。该参数取值是MODEL时，model_asset_id必填；取值是PICTURE时，human_image必填。 * MODEL：通过分数数字人模型生成视频 * PICTURE： 通过单张照片生成视频
    *
    * @return $this
    */
    public function setVideoMakingType($videoMakingType)
    {
        $this->container['videoMakingType'] = $videoMakingType;
        return $this;
    }

    /**
    * Gets humanImage
    *  人物照片，需要Base64编码。
    *
    * @return string|null
    */
    public function getHumanImage()
    {
        return $this->container['humanImage'];
    }

    /**
    * Sets humanImage
    *
    * @param string|null $humanImage 人物照片，需要Base64编码。
    *
    * @return $this
    */
    public function setHumanImage($humanImage)
    {
        $this->container['humanImage'] = $humanImage;
        return $this;
    }

    /**
    * Gets modelAssetId
    *  分身数字人模型资产ID。
    *
    * @return string|null
    */
    public function getModelAssetId()
    {
        return $this->container['modelAssetId'];
    }

    /**
    * Sets modelAssetId
    *
    * @param string|null $modelAssetId 分身数字人模型资产ID。
    *
    * @return $this
    */
    public function setModelAssetId($modelAssetId)
    {
        $this->container['modelAssetId'] = $modelAssetId;
        return $this;
    }

    /**
    * Gets voiceConfig
    *  voiceConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\VoiceConfig|null
    */
    public function getVoiceConfig()
    {
        return $this->container['voiceConfig'];
    }

    /**
    * Sets voiceConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\VoiceConfig|null $voiceConfig voiceConfig
    *
    * @return $this
    */
    public function setVoiceConfig($voiceConfig)
    {
        $this->container['voiceConfig'] = $voiceConfig;
        return $this;
    }

    /**
    * Gets videoConfig
    *  videoConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\VideoConfig|null
    */
    public function getVideoConfig()
    {
        return $this->container['videoConfig'];
    }

    /**
    * Sets videoConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\VideoConfig|null $videoConfig videoConfig
    *
    * @return $this
    */
    public function setVideoConfig($videoConfig)
    {
        $this->container['videoConfig'] = $videoConfig;
        return $this;
    }

    /**
    * Gets shootScripts
    *  拍摄脚本列表。
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ShootScriptItem[]|null
    */
    public function getShootScripts()
    {
        return $this->container['shootScripts'];
    }

    /**
    * Sets shootScripts
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ShootScriptItem[]|null $shootScripts 拍摄脚本列表。
    *
    * @return $this
    */
    public function setShootScripts($shootScripts)
    {
        $this->container['shootScripts'] = $shootScripts;
        return $this;
    }

    /**
    * Gets backgroundMusicConfig
    *  backgroundMusicConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\BackgroundMusicConfig|null
    */
    public function getBackgroundMusicConfig()
    {
        return $this->container['backgroundMusicConfig'];
    }

    /**
    * Sets backgroundMusicConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\BackgroundMusicConfig|null $backgroundMusicConfig backgroundMusicConfig
    *
    * @return $this
    */
    public function setBackgroundMusicConfig($backgroundMusicConfig)
    {
        $this->container['backgroundMusicConfig'] = $backgroundMusicConfig;
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

