<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Create2dModelTrainingJobReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Create2dModelTrainingJobReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  分身数字人模型名称。该名称会作为资产库中分身数字人模型资产名称。
    * contact  分身数字人训练任务创建者的手机号。
    * commandMessage  命令类型： * UPDATE_VIDEO: 更新视频 * UPLOAD_VIDEO：上传视频 * CONFIRM_ACTION_VIDEO: 确认动作编排视频 * GET_ACTION_VIDEO_MULTIPART: 获取动作编排视频分片
    * videoMultipartCount  训练视频上传分片数（上传时对唯一训练视频文件的数据分片，用于对该文件的并发上传，不是分多个视频文件上传）。
    * actionVideoMultipartCount  动作视频上传分片数。
    * isBackgroundReplacement  分身数字人是否需要背景替换。需要背景替换的分身数字人训练视频需要绿幕拍摄。
    * batchName  分身数字人训练任务的批次名称。
    * tags  分身数字人训练任务标签。
    * modelVersion  分身数字人模型版本。默认是V3.2版本模型。 * V3.2：V3.2版本模型 > * V3和V2版本已废弃不用
    * isFlexus  是否是基础版的形象训练
    * isOnlyHumanModel  是否只训练形象模型，不训练声音模型。仅Flexus版本时有效，默认false。
    * audioSourceType  声音来源类型 * VIDEO：视频中抽取音频 * AUDIO：单独上传的音频
    * voiceProperties  voiceProperties
    * supportedService  该任务所生成的模型支持的业务类型，可多选
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'contact' => 'string',
            'commandMessage' => 'string',
            'videoMultipartCount' => 'int',
            'actionVideoMultipartCount' => 'int',
            'isBackgroundReplacement' => 'bool',
            'batchName' => 'string',
            'tags' => 'string[]',
            'modelVersion' => 'string',
            'isFlexus' => 'bool',
            'isOnlyHumanModel' => 'bool',
            'audioSourceType' => 'string',
            'voiceProperties' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\VoiceProperties',
            'supportedService' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\SupportedServiceEnum[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  分身数字人模型名称。该名称会作为资产库中分身数字人模型资产名称。
    * contact  分身数字人训练任务创建者的手机号。
    * commandMessage  命令类型： * UPDATE_VIDEO: 更新视频 * UPLOAD_VIDEO：上传视频 * CONFIRM_ACTION_VIDEO: 确认动作编排视频 * GET_ACTION_VIDEO_MULTIPART: 获取动作编排视频分片
    * videoMultipartCount  训练视频上传分片数（上传时对唯一训练视频文件的数据分片，用于对该文件的并发上传，不是分多个视频文件上传）。
    * actionVideoMultipartCount  动作视频上传分片数。
    * isBackgroundReplacement  分身数字人是否需要背景替换。需要背景替换的分身数字人训练视频需要绿幕拍摄。
    * batchName  分身数字人训练任务的批次名称。
    * tags  分身数字人训练任务标签。
    * modelVersion  分身数字人模型版本。默认是V3.2版本模型。 * V3.2：V3.2版本模型 > * V3和V2版本已废弃不用
    * isFlexus  是否是基础版的形象训练
    * isOnlyHumanModel  是否只训练形象模型，不训练声音模型。仅Flexus版本时有效，默认false。
    * audioSourceType  声音来源类型 * VIDEO：视频中抽取音频 * AUDIO：单独上传的音频
    * voiceProperties  voiceProperties
    * supportedService  该任务所生成的模型支持的业务类型，可多选
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'contact' => null,
        'commandMessage' => null,
        'videoMultipartCount' => 'int32',
        'actionVideoMultipartCount' => 'int32',
        'isBackgroundReplacement' => null,
        'batchName' => null,
        'tags' => null,
        'modelVersion' => null,
        'isFlexus' => null,
        'isOnlyHumanModel' => null,
        'audioSourceType' => null,
        'voiceProperties' => null,
        'supportedService' => null
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
    * name  分身数字人模型名称。该名称会作为资产库中分身数字人模型资产名称。
    * contact  分身数字人训练任务创建者的手机号。
    * commandMessage  命令类型： * UPDATE_VIDEO: 更新视频 * UPLOAD_VIDEO：上传视频 * CONFIRM_ACTION_VIDEO: 确认动作编排视频 * GET_ACTION_VIDEO_MULTIPART: 获取动作编排视频分片
    * videoMultipartCount  训练视频上传分片数（上传时对唯一训练视频文件的数据分片，用于对该文件的并发上传，不是分多个视频文件上传）。
    * actionVideoMultipartCount  动作视频上传分片数。
    * isBackgroundReplacement  分身数字人是否需要背景替换。需要背景替换的分身数字人训练视频需要绿幕拍摄。
    * batchName  分身数字人训练任务的批次名称。
    * tags  分身数字人训练任务标签。
    * modelVersion  分身数字人模型版本。默认是V3.2版本模型。 * V3.2：V3.2版本模型 > * V3和V2版本已废弃不用
    * isFlexus  是否是基础版的形象训练
    * isOnlyHumanModel  是否只训练形象模型，不训练声音模型。仅Flexus版本时有效，默认false。
    * audioSourceType  声音来源类型 * VIDEO：视频中抽取音频 * AUDIO：单独上传的音频
    * voiceProperties  voiceProperties
    * supportedService  该任务所生成的模型支持的业务类型，可多选
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'contact' => 'contact',
            'commandMessage' => 'command_message',
            'videoMultipartCount' => 'video_multipart_count',
            'actionVideoMultipartCount' => 'action_video_multipart_count',
            'isBackgroundReplacement' => 'is_background_replacement',
            'batchName' => 'batch_name',
            'tags' => 'tags',
            'modelVersion' => 'model_version',
            'isFlexus' => 'is_flexus',
            'isOnlyHumanModel' => 'is_only_human_model',
            'audioSourceType' => 'audio_source_type',
            'voiceProperties' => 'voice_properties',
            'supportedService' => 'supported_service'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  分身数字人模型名称。该名称会作为资产库中分身数字人模型资产名称。
    * contact  分身数字人训练任务创建者的手机号。
    * commandMessage  命令类型： * UPDATE_VIDEO: 更新视频 * UPLOAD_VIDEO：上传视频 * CONFIRM_ACTION_VIDEO: 确认动作编排视频 * GET_ACTION_VIDEO_MULTIPART: 获取动作编排视频分片
    * videoMultipartCount  训练视频上传分片数（上传时对唯一训练视频文件的数据分片，用于对该文件的并发上传，不是分多个视频文件上传）。
    * actionVideoMultipartCount  动作视频上传分片数。
    * isBackgroundReplacement  分身数字人是否需要背景替换。需要背景替换的分身数字人训练视频需要绿幕拍摄。
    * batchName  分身数字人训练任务的批次名称。
    * tags  分身数字人训练任务标签。
    * modelVersion  分身数字人模型版本。默认是V3.2版本模型。 * V3.2：V3.2版本模型 > * V3和V2版本已废弃不用
    * isFlexus  是否是基础版的形象训练
    * isOnlyHumanModel  是否只训练形象模型，不训练声音模型。仅Flexus版本时有效，默认false。
    * audioSourceType  声音来源类型 * VIDEO：视频中抽取音频 * AUDIO：单独上传的音频
    * voiceProperties  voiceProperties
    * supportedService  该任务所生成的模型支持的业务类型，可多选
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'contact' => 'setContact',
            'commandMessage' => 'setCommandMessage',
            'videoMultipartCount' => 'setVideoMultipartCount',
            'actionVideoMultipartCount' => 'setActionVideoMultipartCount',
            'isBackgroundReplacement' => 'setIsBackgroundReplacement',
            'batchName' => 'setBatchName',
            'tags' => 'setTags',
            'modelVersion' => 'setModelVersion',
            'isFlexus' => 'setIsFlexus',
            'isOnlyHumanModel' => 'setIsOnlyHumanModel',
            'audioSourceType' => 'setAudioSourceType',
            'voiceProperties' => 'setVoiceProperties',
            'supportedService' => 'setSupportedService'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  分身数字人模型名称。该名称会作为资产库中分身数字人模型资产名称。
    * contact  分身数字人训练任务创建者的手机号。
    * commandMessage  命令类型： * UPDATE_VIDEO: 更新视频 * UPLOAD_VIDEO：上传视频 * CONFIRM_ACTION_VIDEO: 确认动作编排视频 * GET_ACTION_VIDEO_MULTIPART: 获取动作编排视频分片
    * videoMultipartCount  训练视频上传分片数（上传时对唯一训练视频文件的数据分片，用于对该文件的并发上传，不是分多个视频文件上传）。
    * actionVideoMultipartCount  动作视频上传分片数。
    * isBackgroundReplacement  分身数字人是否需要背景替换。需要背景替换的分身数字人训练视频需要绿幕拍摄。
    * batchName  分身数字人训练任务的批次名称。
    * tags  分身数字人训练任务标签。
    * modelVersion  分身数字人模型版本。默认是V3.2版本模型。 * V3.2：V3.2版本模型 > * V3和V2版本已废弃不用
    * isFlexus  是否是基础版的形象训练
    * isOnlyHumanModel  是否只训练形象模型，不训练声音模型。仅Flexus版本时有效，默认false。
    * audioSourceType  声音来源类型 * VIDEO：视频中抽取音频 * AUDIO：单独上传的音频
    * voiceProperties  voiceProperties
    * supportedService  该任务所生成的模型支持的业务类型，可多选
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'contact' => 'getContact',
            'commandMessage' => 'getCommandMessage',
            'videoMultipartCount' => 'getVideoMultipartCount',
            'actionVideoMultipartCount' => 'getActionVideoMultipartCount',
            'isBackgroundReplacement' => 'getIsBackgroundReplacement',
            'batchName' => 'getBatchName',
            'tags' => 'getTags',
            'modelVersion' => 'getModelVersion',
            'isFlexus' => 'getIsFlexus',
            'isOnlyHumanModel' => 'getIsOnlyHumanModel',
            'audioSourceType' => 'getAudioSourceType',
            'voiceProperties' => 'getVoiceProperties',
            'supportedService' => 'getSupportedService'
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
    const COMMAND_MESSAGE_UPDATE_VIDEO = 'UPDATE_VIDEO';
    const COMMAND_MESSAGE_UPLOAD_VIDEO = 'UPLOAD_VIDEO';
    const COMMAND_MESSAGE_CONFIRM_ACTION_VIDEO = 'CONFIRM_ACTION_VIDEO';
    const COMMAND_MESSAGE_GET_ACTION_VIDEO_MULTIPART = 'GET_ACTION_VIDEO_MULTIPART';
    const MODEL_VERSION_V2 = 'V2';
    const MODEL_VERSION_V3 = 'V3';
    const MODEL_VERSION_V3_2 = 'V3.2';
    const AUDIO_SOURCE_TYPE_VIDEO = 'VIDEO';
    const AUDIO_SOURCE_TYPE_AUDIO = 'AUDIO';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCommandMessageAllowableValues()
    {
        return [
            self::COMMAND_MESSAGE_UPDATE_VIDEO,
            self::COMMAND_MESSAGE_UPLOAD_VIDEO,
            self::COMMAND_MESSAGE_CONFIRM_ACTION_VIDEO,
            self::COMMAND_MESSAGE_GET_ACTION_VIDEO_MULTIPART,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getModelVersionAllowableValues()
    {
        return [
            self::MODEL_VERSION_V2,
            self::MODEL_VERSION_V3,
            self::MODEL_VERSION_V3_2,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAudioSourceTypeAllowableValues()
    {
        return [
            self::AUDIO_SOURCE_TYPE_VIDEO,
            self::AUDIO_SOURCE_TYPE_AUDIO,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['commandMessage'] = isset($data['commandMessage']) ? $data['commandMessage'] : null;
        $this->container['videoMultipartCount'] = isset($data['videoMultipartCount']) ? $data['videoMultipartCount'] : null;
        $this->container['actionVideoMultipartCount'] = isset($data['actionVideoMultipartCount']) ? $data['actionVideoMultipartCount'] : null;
        $this->container['isBackgroundReplacement'] = isset($data['isBackgroundReplacement']) ? $data['isBackgroundReplacement'] : null;
        $this->container['batchName'] = isset($data['batchName']) ? $data['batchName'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['modelVersion'] = isset($data['modelVersion']) ? $data['modelVersion'] : null;
        $this->container['isFlexus'] = isset($data['isFlexus']) ? $data['isFlexus'] : null;
        $this->container['isOnlyHumanModel'] = isset($data['isOnlyHumanModel']) ? $data['isOnlyHumanModel'] : null;
        $this->container['audioSourceType'] = isset($data['audioSourceType']) ? $data['audioSourceType'] : null;
        $this->container['voiceProperties'] = isset($data['voiceProperties']) ? $data['voiceProperties'] : null;
        $this->container['supportedService'] = isset($data['supportedService']) ? $data['supportedService'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['contact']) && (mb_strlen($this->container['contact']) > 64)) {
                $invalidProperties[] = "invalid value for 'contact', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['contact']) && (mb_strlen($this->container['contact']) < 1)) {
                $invalidProperties[] = "invalid value for 'contact', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getCommandMessageAllowableValues();
                if (!is_null($this->container['commandMessage']) && !in_array($this->container['commandMessage'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'commandMessage', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['videoMultipartCount']) && ($this->container['videoMultipartCount'] > 1000)) {
                $invalidProperties[] = "invalid value for 'videoMultipartCount', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['videoMultipartCount']) && ($this->container['videoMultipartCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'videoMultipartCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['actionVideoMultipartCount']) && ($this->container['actionVideoMultipartCount'] > 1000)) {
                $invalidProperties[] = "invalid value for 'actionVideoMultipartCount', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['actionVideoMultipartCount']) && ($this->container['actionVideoMultipartCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'actionVideoMultipartCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['batchName']) && (mb_strlen($this->container['batchName']) > 256)) {
                $invalidProperties[] = "invalid value for 'batchName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['batchName']) && (mb_strlen($this->container['batchName']) < 1)) {
                $invalidProperties[] = "invalid value for 'batchName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getModelVersionAllowableValues();
                if (!is_null($this->container['modelVersion']) && !in_array($this->container['modelVersion'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'modelVersion', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getAudioSourceTypeAllowableValues();
                if (!is_null($this->container['audioSourceType']) && !in_array($this->container['audioSourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'audioSourceType', must be one of '%s'",
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
    * Gets name
    *  分身数字人模型名称。该名称会作为资产库中分身数字人模型资产名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 分身数字人模型名称。该名称会作为资产库中分身数字人模型资产名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets contact
    *  分身数字人训练任务创建者的手机号。
    *
    * @return string|null
    */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
    * Sets contact
    *
    * @param string|null $contact 分身数字人训练任务创建者的手机号。
    *
    * @return $this
    */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;
        return $this;
    }

    /**
    * Gets commandMessage
    *  命令类型： * UPDATE_VIDEO: 更新视频 * UPLOAD_VIDEO：上传视频 * CONFIRM_ACTION_VIDEO: 确认动作编排视频 * GET_ACTION_VIDEO_MULTIPART: 获取动作编排视频分片
    *
    * @return string|null
    */
    public function getCommandMessage()
    {
        return $this->container['commandMessage'];
    }

    /**
    * Sets commandMessage
    *
    * @param string|null $commandMessage 命令类型： * UPDATE_VIDEO: 更新视频 * UPLOAD_VIDEO：上传视频 * CONFIRM_ACTION_VIDEO: 确认动作编排视频 * GET_ACTION_VIDEO_MULTIPART: 获取动作编排视频分片
    *
    * @return $this
    */
    public function setCommandMessage($commandMessage)
    {
        $this->container['commandMessage'] = $commandMessage;
        return $this;
    }

    /**
    * Gets videoMultipartCount
    *  训练视频上传分片数（上传时对唯一训练视频文件的数据分片，用于对该文件的并发上传，不是分多个视频文件上传）。
    *
    * @return int|null
    */
    public function getVideoMultipartCount()
    {
        return $this->container['videoMultipartCount'];
    }

    /**
    * Sets videoMultipartCount
    *
    * @param int|null $videoMultipartCount 训练视频上传分片数（上传时对唯一训练视频文件的数据分片，用于对该文件的并发上传，不是分多个视频文件上传）。
    *
    * @return $this
    */
    public function setVideoMultipartCount($videoMultipartCount)
    {
        $this->container['videoMultipartCount'] = $videoMultipartCount;
        return $this;
    }

    /**
    * Gets actionVideoMultipartCount
    *  动作视频上传分片数。
    *
    * @return int|null
    */
    public function getActionVideoMultipartCount()
    {
        return $this->container['actionVideoMultipartCount'];
    }

    /**
    * Sets actionVideoMultipartCount
    *
    * @param int|null $actionVideoMultipartCount 动作视频上传分片数。
    *
    * @return $this
    */
    public function setActionVideoMultipartCount($actionVideoMultipartCount)
    {
        $this->container['actionVideoMultipartCount'] = $actionVideoMultipartCount;
        return $this;
    }

    /**
    * Gets isBackgroundReplacement
    *  分身数字人是否需要背景替换。需要背景替换的分身数字人训练视频需要绿幕拍摄。
    *
    * @return bool|null
    */
    public function getIsBackgroundReplacement()
    {
        return $this->container['isBackgroundReplacement'];
    }

    /**
    * Sets isBackgroundReplacement
    *
    * @param bool|null $isBackgroundReplacement 分身数字人是否需要背景替换。需要背景替换的分身数字人训练视频需要绿幕拍摄。
    *
    * @return $this
    */
    public function setIsBackgroundReplacement($isBackgroundReplacement)
    {
        $this->container['isBackgroundReplacement'] = $isBackgroundReplacement;
        return $this;
    }

    /**
    * Gets batchName
    *  分身数字人训练任务的批次名称。
    *
    * @return string|null
    */
    public function getBatchName()
    {
        return $this->container['batchName'];
    }

    /**
    * Sets batchName
    *
    * @param string|null $batchName 分身数字人训练任务的批次名称。
    *
    * @return $this
    */
    public function setBatchName($batchName)
    {
        $this->container['batchName'] = $batchName;
        return $this;
    }

    /**
    * Gets tags
    *  分身数字人训练任务标签。
    *
    * @return string[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string[]|null $tags 分身数字人训练任务标签。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets modelVersion
    *  分身数字人模型版本。默认是V3.2版本模型。 * V3.2：V3.2版本模型 > * V3和V2版本已废弃不用
    *
    * @return string|null
    */
    public function getModelVersion()
    {
        return $this->container['modelVersion'];
    }

    /**
    * Sets modelVersion
    *
    * @param string|null $modelVersion 分身数字人模型版本。默认是V3.2版本模型。 * V3.2：V3.2版本模型 > * V3和V2版本已废弃不用
    *
    * @return $this
    */
    public function setModelVersion($modelVersion)
    {
        $this->container['modelVersion'] = $modelVersion;
        return $this;
    }

    /**
    * Gets isFlexus
    *  是否是基础版的形象训练
    *
    * @return bool|null
    */
    public function getIsFlexus()
    {
        return $this->container['isFlexus'];
    }

    /**
    * Sets isFlexus
    *
    * @param bool|null $isFlexus 是否是基础版的形象训练
    *
    * @return $this
    */
    public function setIsFlexus($isFlexus)
    {
        $this->container['isFlexus'] = $isFlexus;
        return $this;
    }

    /**
    * Gets isOnlyHumanModel
    *  是否只训练形象模型，不训练声音模型。仅Flexus版本时有效，默认false。
    *
    * @return bool|null
    */
    public function getIsOnlyHumanModel()
    {
        return $this->container['isOnlyHumanModel'];
    }

    /**
    * Sets isOnlyHumanModel
    *
    * @param bool|null $isOnlyHumanModel 是否只训练形象模型，不训练声音模型。仅Flexus版本时有效，默认false。
    *
    * @return $this
    */
    public function setIsOnlyHumanModel($isOnlyHumanModel)
    {
        $this->container['isOnlyHumanModel'] = $isOnlyHumanModel;
        return $this;
    }

    /**
    * Gets audioSourceType
    *  声音来源类型 * VIDEO：视频中抽取音频 * AUDIO：单独上传的音频
    *
    * @return string|null
    */
    public function getAudioSourceType()
    {
        return $this->container['audioSourceType'];
    }

    /**
    * Sets audioSourceType
    *
    * @param string|null $audioSourceType 声音来源类型 * VIDEO：视频中抽取音频 * AUDIO：单独上传的音频
    *
    * @return $this
    */
    public function setAudioSourceType($audioSourceType)
    {
        $this->container['audioSourceType'] = $audioSourceType;
        return $this;
    }

    /**
    * Gets voiceProperties
    *  voiceProperties
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\VoiceProperties|null
    */
    public function getVoiceProperties()
    {
        return $this->container['voiceProperties'];
    }

    /**
    * Sets voiceProperties
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\VoiceProperties|null $voiceProperties voiceProperties
    *
    * @return $this
    */
    public function setVoiceProperties($voiceProperties)
    {
        $this->container['voiceProperties'] = $voiceProperties;
        return $this;
    }

    /**
    * Gets supportedService
    *  该任务所生成的模型支持的业务类型，可多选
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\SupportedServiceEnum[]|null
    */
    public function getSupportedService()
    {
        return $this->container['supportedService'];
    }

    /**
    * Sets supportedService
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\SupportedServiceEnum[]|null $supportedService 该任务所生成的模型支持的业务类型，可多选
    *
    * @return $this
    */
    public function setSupportedService($supportedService)
    {
        $this->container['supportedService'] = $supportedService;
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

