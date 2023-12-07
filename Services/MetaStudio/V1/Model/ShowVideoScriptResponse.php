<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowVideoScriptResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowVideoScriptResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scriptName  剧本名称
    * scriptDescription  剧本描述。
    * videoMakingType  视频生成类型。该参数取值是MODEL时，model_asset_id必填；取值是PICTURE时，human_image必填。 * MODEL：通过分数数字人模型生成视频 * PICTURE： 通过单张照片生成视频
    * modelAssetId  数字人模型资产ID。
    * modelAssetType  数字人模型类型。  * HUMAN_MODEL_2D：分身数字人 * HUMAN_MODEL_3D：3D数字人
    * humanImage  人物照片下载URL。
    * voiceConfig  voiceConfig
    * videoConfig  videoConfig
    * sceneAssetId  场景资产ID。 > * 分身数字人视频制作不需要填写该参数。
    * shootScripts  拍摄脚本列表。
    * privData  私有数据，用户填写，原样带回。
    * backgroundMusicConfig  backgroundMusicConfig
    * scriptId  剧本ID。
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * audioFiles  audioFiles
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scriptName' => 'string',
            'scriptDescription' => 'string',
            'videoMakingType' => 'string',
            'modelAssetId' => 'string',
            'modelAssetType' => 'string',
            'humanImage' => 'string',
            'voiceConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\VoiceConfig',
            'videoConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\VideoConfig',
            'sceneAssetId' => 'string',
            'shootScripts' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ShootScriptItem[]',
            'privData' => 'string',
            'backgroundMusicConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\BackgroundMusicConfig',
            'scriptId' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string',
            'audioFiles' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ShootScriptAudioFiles',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scriptName  剧本名称
    * scriptDescription  剧本描述。
    * videoMakingType  视频生成类型。该参数取值是MODEL时，model_asset_id必填；取值是PICTURE时，human_image必填。 * MODEL：通过分数数字人模型生成视频 * PICTURE： 通过单张照片生成视频
    * modelAssetId  数字人模型资产ID。
    * modelAssetType  数字人模型类型。  * HUMAN_MODEL_2D：分身数字人 * HUMAN_MODEL_3D：3D数字人
    * humanImage  人物照片下载URL。
    * voiceConfig  voiceConfig
    * videoConfig  videoConfig
    * sceneAssetId  场景资产ID。 > * 分身数字人视频制作不需要填写该参数。
    * shootScripts  拍摄脚本列表。
    * privData  私有数据，用户填写，原样带回。
    * backgroundMusicConfig  backgroundMusicConfig
    * scriptId  剧本ID。
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * audioFiles  audioFiles
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scriptName' => null,
        'scriptDescription' => null,
        'videoMakingType' => null,
        'modelAssetId' => null,
        'modelAssetType' => null,
        'humanImage' => null,
        'voiceConfig' => null,
        'videoConfig' => null,
        'sceneAssetId' => null,
        'shootScripts' => null,
        'privData' => null,
        'backgroundMusicConfig' => null,
        'scriptId' => null,
        'createTime' => null,
        'updateTime' => null,
        'audioFiles' => null,
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
    * scriptName  剧本名称
    * scriptDescription  剧本描述。
    * videoMakingType  视频生成类型。该参数取值是MODEL时，model_asset_id必填；取值是PICTURE时，human_image必填。 * MODEL：通过分数数字人模型生成视频 * PICTURE： 通过单张照片生成视频
    * modelAssetId  数字人模型资产ID。
    * modelAssetType  数字人模型类型。  * HUMAN_MODEL_2D：分身数字人 * HUMAN_MODEL_3D：3D数字人
    * humanImage  人物照片下载URL。
    * voiceConfig  voiceConfig
    * videoConfig  videoConfig
    * sceneAssetId  场景资产ID。 > * 分身数字人视频制作不需要填写该参数。
    * shootScripts  拍摄脚本列表。
    * privData  私有数据，用户填写，原样带回。
    * backgroundMusicConfig  backgroundMusicConfig
    * scriptId  剧本ID。
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * audioFiles  audioFiles
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scriptName' => 'script_name',
            'scriptDescription' => 'script_description',
            'videoMakingType' => 'video_making_type',
            'modelAssetId' => 'model_asset_id',
            'modelAssetType' => 'model_asset_type',
            'humanImage' => 'human_image',
            'voiceConfig' => 'voice_config',
            'videoConfig' => 'video_config',
            'sceneAssetId' => 'scene_asset_id',
            'shootScripts' => 'shoot_scripts',
            'privData' => 'priv_data',
            'backgroundMusicConfig' => 'background_music_config',
            'scriptId' => 'script_id',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'audioFiles' => 'audio_files',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scriptName  剧本名称
    * scriptDescription  剧本描述。
    * videoMakingType  视频生成类型。该参数取值是MODEL时，model_asset_id必填；取值是PICTURE时，human_image必填。 * MODEL：通过分数数字人模型生成视频 * PICTURE： 通过单张照片生成视频
    * modelAssetId  数字人模型资产ID。
    * modelAssetType  数字人模型类型。  * HUMAN_MODEL_2D：分身数字人 * HUMAN_MODEL_3D：3D数字人
    * humanImage  人物照片下载URL。
    * voiceConfig  voiceConfig
    * videoConfig  videoConfig
    * sceneAssetId  场景资产ID。 > * 分身数字人视频制作不需要填写该参数。
    * shootScripts  拍摄脚本列表。
    * privData  私有数据，用户填写，原样带回。
    * backgroundMusicConfig  backgroundMusicConfig
    * scriptId  剧本ID。
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * audioFiles  audioFiles
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'scriptName' => 'setScriptName',
            'scriptDescription' => 'setScriptDescription',
            'videoMakingType' => 'setVideoMakingType',
            'modelAssetId' => 'setModelAssetId',
            'modelAssetType' => 'setModelAssetType',
            'humanImage' => 'setHumanImage',
            'voiceConfig' => 'setVoiceConfig',
            'videoConfig' => 'setVideoConfig',
            'sceneAssetId' => 'setSceneAssetId',
            'shootScripts' => 'setShootScripts',
            'privData' => 'setPrivData',
            'backgroundMusicConfig' => 'setBackgroundMusicConfig',
            'scriptId' => 'setScriptId',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'audioFiles' => 'setAudioFiles',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scriptName  剧本名称
    * scriptDescription  剧本描述。
    * videoMakingType  视频生成类型。该参数取值是MODEL时，model_asset_id必填；取值是PICTURE时，human_image必填。 * MODEL：通过分数数字人模型生成视频 * PICTURE： 通过单张照片生成视频
    * modelAssetId  数字人模型资产ID。
    * modelAssetType  数字人模型类型。  * HUMAN_MODEL_2D：分身数字人 * HUMAN_MODEL_3D：3D数字人
    * humanImage  人物照片下载URL。
    * voiceConfig  voiceConfig
    * videoConfig  videoConfig
    * sceneAssetId  场景资产ID。 > * 分身数字人视频制作不需要填写该参数。
    * shootScripts  拍摄脚本列表。
    * privData  私有数据，用户填写，原样带回。
    * backgroundMusicConfig  backgroundMusicConfig
    * scriptId  剧本ID。
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * audioFiles  audioFiles
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'scriptName' => 'getScriptName',
            'scriptDescription' => 'getScriptDescription',
            'videoMakingType' => 'getVideoMakingType',
            'modelAssetId' => 'getModelAssetId',
            'modelAssetType' => 'getModelAssetType',
            'humanImage' => 'getHumanImage',
            'voiceConfig' => 'getVoiceConfig',
            'videoConfig' => 'getVideoConfig',
            'sceneAssetId' => 'getSceneAssetId',
            'shootScripts' => 'getShootScripts',
            'privData' => 'getPrivData',
            'backgroundMusicConfig' => 'getBackgroundMusicConfig',
            'scriptId' => 'getScriptId',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'audioFiles' => 'getAudioFiles',
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
    const VIDEO_MAKING_TYPE_MODEL = 'MODEL';
    const VIDEO_MAKING_TYPE_PICTURE = 'PICTURE';
    const MODEL_ASSET_TYPE_HUMAN_MODEL_2_D = 'HUMAN_MODEL_2D';
    const MODEL_ASSET_TYPE_HUMAN_MODEL_3_D = 'HUMAN_MODEL_3D';
    

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
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getModelAssetTypeAllowableValues()
    {
        return [
            self::MODEL_ASSET_TYPE_HUMAN_MODEL_2_D,
            self::MODEL_ASSET_TYPE_HUMAN_MODEL_3_D,
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
        $this->container['scriptName'] = isset($data['scriptName']) ? $data['scriptName'] : null;
        $this->container['scriptDescription'] = isset($data['scriptDescription']) ? $data['scriptDescription'] : null;
        $this->container['videoMakingType'] = isset($data['videoMakingType']) ? $data['videoMakingType'] : null;
        $this->container['modelAssetId'] = isset($data['modelAssetId']) ? $data['modelAssetId'] : null;
        $this->container['modelAssetType'] = isset($data['modelAssetType']) ? $data['modelAssetType'] : null;
        $this->container['humanImage'] = isset($data['humanImage']) ? $data['humanImage'] : null;
        $this->container['voiceConfig'] = isset($data['voiceConfig']) ? $data['voiceConfig'] : null;
        $this->container['videoConfig'] = isset($data['videoConfig']) ? $data['videoConfig'] : null;
        $this->container['sceneAssetId'] = isset($data['sceneAssetId']) ? $data['sceneAssetId'] : null;
        $this->container['shootScripts'] = isset($data['shootScripts']) ? $data['shootScripts'] : null;
        $this->container['privData'] = isset($data['privData']) ? $data['privData'] : null;
        $this->container['backgroundMusicConfig'] = isset($data['backgroundMusicConfig']) ? $data['backgroundMusicConfig'] : null;
        $this->container['scriptId'] = isset($data['scriptId']) ? $data['scriptId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['audioFiles'] = isset($data['audioFiles']) ? $data['audioFiles'] : null;
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
        if ($this->container['scriptName'] === null) {
            $invalidProperties[] = "'scriptName' can't be null";
        }
            if ((mb_strlen($this->container['scriptName']) > 256)) {
                $invalidProperties[] = "invalid value for 'scriptName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['scriptName']) < 1)) {
                $invalidProperties[] = "invalid value for 'scriptName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['scriptDescription']) && (mb_strlen($this->container['scriptDescription']) > 1024)) {
                $invalidProperties[] = "invalid value for 'scriptDescription', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['scriptDescription']) && (mb_strlen($this->container['scriptDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'scriptDescription', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getVideoMakingTypeAllowableValues();
                if (!is_null($this->container['videoMakingType']) && !in_array($this->container['videoMakingType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'videoMakingType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['modelAssetId']) && (mb_strlen($this->container['modelAssetId']) > 64)) {
                $invalidProperties[] = "invalid value for 'modelAssetId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['modelAssetId']) && (mb_strlen($this->container['modelAssetId']) < 0)) {
                $invalidProperties[] = "invalid value for 'modelAssetId', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getModelAssetTypeAllowableValues();
                if (!is_null($this->container['modelAssetType']) && !in_array($this->container['modelAssetType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'modelAssetType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['humanImage']) && (mb_strlen($this->container['humanImage']) > 2048)) {
                $invalidProperties[] = "invalid value for 'humanImage', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['humanImage']) && (mb_strlen($this->container['humanImage']) < 1)) {
                $invalidProperties[] = "invalid value for 'humanImage', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['voiceConfig'] === null) {
            $invalidProperties[] = "'voiceConfig' can't be null";
        }
            if (!is_null($this->container['sceneAssetId']) && (mb_strlen($this->container['sceneAssetId']) > 64)) {
                $invalidProperties[] = "invalid value for 'sceneAssetId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sceneAssetId']) && (mb_strlen($this->container['sceneAssetId']) < 0)) {
                $invalidProperties[] = "invalid value for 'sceneAssetId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['shootScripts'] === null) {
            $invalidProperties[] = "'shootScripts' can't be null";
        }
            if (!is_null($this->container['privData']) && (mb_strlen($this->container['privData']) > 8192)) {
                $invalidProperties[] = "invalid value for 'privData', the character length must be smaller than or equal to 8192.";
            }
            if (!is_null($this->container['privData']) && (mb_strlen($this->container['privData']) < 0)) {
                $invalidProperties[] = "invalid value for 'privData', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scriptId']) && (mb_strlen($this->container['scriptId']) > 64)) {
                $invalidProperties[] = "invalid value for 'scriptId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['scriptId']) && (mb_strlen($this->container['scriptId']) < 1)) {
                $invalidProperties[] = "invalid value for 'scriptId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 20.";
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
    * Gets scriptName
    *  剧本名称
    *
    * @return string
    */
    public function getScriptName()
    {
        return $this->container['scriptName'];
    }

    /**
    * Sets scriptName
    *
    * @param string $scriptName 剧本名称
    *
    * @return $this
    */
    public function setScriptName($scriptName)
    {
        $this->container['scriptName'] = $scriptName;
        return $this;
    }

    /**
    * Gets scriptDescription
    *  剧本描述。
    *
    * @return string|null
    */
    public function getScriptDescription()
    {
        return $this->container['scriptDescription'];
    }

    /**
    * Sets scriptDescription
    *
    * @param string|null $scriptDescription 剧本描述。
    *
    * @return $this
    */
    public function setScriptDescription($scriptDescription)
    {
        $this->container['scriptDescription'] = $scriptDescription;
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
    * Gets modelAssetId
    *  数字人模型资产ID。
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
    * @param string|null $modelAssetId 数字人模型资产ID。
    *
    * @return $this
    */
    public function setModelAssetId($modelAssetId)
    {
        $this->container['modelAssetId'] = $modelAssetId;
        return $this;
    }

    /**
    * Gets modelAssetType
    *  数字人模型类型。  * HUMAN_MODEL_2D：分身数字人 * HUMAN_MODEL_3D：3D数字人
    *
    * @return string|null
    */
    public function getModelAssetType()
    {
        return $this->container['modelAssetType'];
    }

    /**
    * Sets modelAssetType
    *
    * @param string|null $modelAssetType 数字人模型类型。  * HUMAN_MODEL_2D：分身数字人 * HUMAN_MODEL_3D：3D数字人
    *
    * @return $this
    */
    public function setModelAssetType($modelAssetType)
    {
        $this->container['modelAssetType'] = $modelAssetType;
        return $this;
    }

    /**
    * Gets humanImage
    *  人物照片下载URL。
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
    * @param string|null $humanImage 人物照片下载URL。
    *
    * @return $this
    */
    public function setHumanImage($humanImage)
    {
        $this->container['humanImage'] = $humanImage;
        return $this;
    }

    /**
    * Gets voiceConfig
    *  voiceConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\VoiceConfig
    */
    public function getVoiceConfig()
    {
        return $this->container['voiceConfig'];
    }

    /**
    * Sets voiceConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\VoiceConfig $voiceConfig voiceConfig
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
    * Gets sceneAssetId
    *  场景资产ID。 > * 分身数字人视频制作不需要填写该参数。
    *
    * @return string|null
    */
    public function getSceneAssetId()
    {
        return $this->container['sceneAssetId'];
    }

    /**
    * Sets sceneAssetId
    *
    * @param string|null $sceneAssetId 场景资产ID。 > * 分身数字人视频制作不需要填写该参数。
    *
    * @return $this
    */
    public function setSceneAssetId($sceneAssetId)
    {
        $this->container['sceneAssetId'] = $sceneAssetId;
        return $this;
    }

    /**
    * Gets shootScripts
    *  拍摄脚本列表。
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ShootScriptItem[]
    */
    public function getShootScripts()
    {
        return $this->container['shootScripts'];
    }

    /**
    * Sets shootScripts
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ShootScriptItem[] $shootScripts 拍摄脚本列表。
    *
    * @return $this
    */
    public function setShootScripts($shootScripts)
    {
        $this->container['shootScripts'] = $shootScripts;
        return $this;
    }

    /**
    * Gets privData
    *  私有数据，用户填写，原样带回。
    *
    * @return string|null
    */
    public function getPrivData()
    {
        return $this->container['privData'];
    }

    /**
    * Sets privData
    *
    * @param string|null $privData 私有数据，用户填写，原样带回。
    *
    * @return $this
    */
    public function setPrivData($privData)
    {
        $this->container['privData'] = $privData;
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
    * Gets createTime
    *  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
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
    * @param string|null $createTime 创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
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
    *  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
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
    * @param string|null $updateTime 更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets audioFiles
    *  audioFiles
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ShootScriptAudioFiles|null
    */
    public function getAudioFiles()
    {
        return $this->container['audioFiles'];
    }

    /**
    * Sets audioFiles
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ShootScriptAudioFiles|null $audioFiles audioFiles
    *
    * @return $this
    */
    public function setAudioFiles($audioFiles)
    {
        $this->container['audioFiles'] = $audioFiles;
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

