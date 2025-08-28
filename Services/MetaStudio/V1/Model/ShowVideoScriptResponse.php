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
    * scriptName  **参数解释**： 剧本名称。 **约束限制**： 不涉及。 **取值范围**： 只能使用中英文字符，字符长度1-256位。 **默认取值**： 不涉及。
    * scriptDescription  **参数解释**： 剧本描述。 **约束限制**： 不涉及。 **取值范围**： 字符长度0-1024位。 **默认取值**： 不涉及。
    * viewMode  **参数解释**： 横竖屏类型。 **约束限制**： 不涉及。 **取值范围**： * LANDSCAPE：横屏。 * VERTICAL：竖屏。
    * modelAssetId  **参数解释**： 数字人模型资产ID。 **约束限制**： 不涉及 **取值范围**： 字符长度0-64位。 **默认取值**： 不涉及
    * modelAssetType  **参数解释**： 数字人模型类型。 **约束限制**： 不涉及 **取值范围**： * HUMAN_MODEL_2D：分身数字人  **默认取值**： 不涉及
    * voiceConfig  voiceConfig
    * videoConfig  videoConfig
    * privData  **参数解释**： 私有数据，用户填写，原样带回。 **约束限制**： 不涉及 **取值范围**： 字符长度0-8192位 **默认取值**： 不涉及
    * backgroundMusicConfig  backgroundMusicConfig
    * reviewConfig  reviewConfig
    * audioFiles  audioFiles
    * actionConfig  actionConfig
    * shootScripts  拍摄脚本列表。
    * scriptId  剧本ID。
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * scriptCoverUrl  剧本封面下载url。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scriptName' => 'string',
            'scriptDescription' => 'string',
            'viewMode' => 'string',
            'modelAssetId' => 'string',
            'modelAssetType' => 'string',
            'voiceConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\VoiceConfig',
            'videoConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\VideoConfig',
            'privData' => 'string',
            'backgroundMusicConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\BackgroundMusicConfig',
            'reviewConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ReviewConfig',
            'audioFiles' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ShootScriptAudioFiles',
            'actionConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ActionConfig',
            'shootScripts' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ShootScriptShowItem[]',
            'scriptId' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string',
            'scriptCoverUrl' => 'string',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scriptName  **参数解释**： 剧本名称。 **约束限制**： 不涉及。 **取值范围**： 只能使用中英文字符，字符长度1-256位。 **默认取值**： 不涉及。
    * scriptDescription  **参数解释**： 剧本描述。 **约束限制**： 不涉及。 **取值范围**： 字符长度0-1024位。 **默认取值**： 不涉及。
    * viewMode  **参数解释**： 横竖屏类型。 **约束限制**： 不涉及。 **取值范围**： * LANDSCAPE：横屏。 * VERTICAL：竖屏。
    * modelAssetId  **参数解释**： 数字人模型资产ID。 **约束限制**： 不涉及 **取值范围**： 字符长度0-64位。 **默认取值**： 不涉及
    * modelAssetType  **参数解释**： 数字人模型类型。 **约束限制**： 不涉及 **取值范围**： * HUMAN_MODEL_2D：分身数字人  **默认取值**： 不涉及
    * voiceConfig  voiceConfig
    * videoConfig  videoConfig
    * privData  **参数解释**： 私有数据，用户填写，原样带回。 **约束限制**： 不涉及 **取值范围**： 字符长度0-8192位 **默认取值**： 不涉及
    * backgroundMusicConfig  backgroundMusicConfig
    * reviewConfig  reviewConfig
    * audioFiles  audioFiles
    * actionConfig  actionConfig
    * shootScripts  拍摄脚本列表。
    * scriptId  剧本ID。
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * scriptCoverUrl  剧本封面下载url。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scriptName' => null,
        'scriptDescription' => null,
        'viewMode' => null,
        'modelAssetId' => null,
        'modelAssetType' => null,
        'voiceConfig' => null,
        'videoConfig' => null,
        'privData' => null,
        'backgroundMusicConfig' => null,
        'reviewConfig' => null,
        'audioFiles' => null,
        'actionConfig' => null,
        'shootScripts' => null,
        'scriptId' => null,
        'createTime' => null,
        'updateTime' => null,
        'scriptCoverUrl' => null,
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
    * scriptName  **参数解释**： 剧本名称。 **约束限制**： 不涉及。 **取值范围**： 只能使用中英文字符，字符长度1-256位。 **默认取值**： 不涉及。
    * scriptDescription  **参数解释**： 剧本描述。 **约束限制**： 不涉及。 **取值范围**： 字符长度0-1024位。 **默认取值**： 不涉及。
    * viewMode  **参数解释**： 横竖屏类型。 **约束限制**： 不涉及。 **取值范围**： * LANDSCAPE：横屏。 * VERTICAL：竖屏。
    * modelAssetId  **参数解释**： 数字人模型资产ID。 **约束限制**： 不涉及 **取值范围**： 字符长度0-64位。 **默认取值**： 不涉及
    * modelAssetType  **参数解释**： 数字人模型类型。 **约束限制**： 不涉及 **取值范围**： * HUMAN_MODEL_2D：分身数字人  **默认取值**： 不涉及
    * voiceConfig  voiceConfig
    * videoConfig  videoConfig
    * privData  **参数解释**： 私有数据，用户填写，原样带回。 **约束限制**： 不涉及 **取值范围**： 字符长度0-8192位 **默认取值**： 不涉及
    * backgroundMusicConfig  backgroundMusicConfig
    * reviewConfig  reviewConfig
    * audioFiles  audioFiles
    * actionConfig  actionConfig
    * shootScripts  拍摄脚本列表。
    * scriptId  剧本ID。
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * scriptCoverUrl  剧本封面下载url。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scriptName' => 'script_name',
            'scriptDescription' => 'script_description',
            'viewMode' => 'view_mode',
            'modelAssetId' => 'model_asset_id',
            'modelAssetType' => 'model_asset_type',
            'voiceConfig' => 'voice_config',
            'videoConfig' => 'video_config',
            'privData' => 'priv_data',
            'backgroundMusicConfig' => 'background_music_config',
            'reviewConfig' => 'review_config',
            'audioFiles' => 'audio_files',
            'actionConfig' => 'action_config',
            'shootScripts' => 'shoot_scripts',
            'scriptId' => 'script_id',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'scriptCoverUrl' => 'script_cover_url',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scriptName  **参数解释**： 剧本名称。 **约束限制**： 不涉及。 **取值范围**： 只能使用中英文字符，字符长度1-256位。 **默认取值**： 不涉及。
    * scriptDescription  **参数解释**： 剧本描述。 **约束限制**： 不涉及。 **取值范围**： 字符长度0-1024位。 **默认取值**： 不涉及。
    * viewMode  **参数解释**： 横竖屏类型。 **约束限制**： 不涉及。 **取值范围**： * LANDSCAPE：横屏。 * VERTICAL：竖屏。
    * modelAssetId  **参数解释**： 数字人模型资产ID。 **约束限制**： 不涉及 **取值范围**： 字符长度0-64位。 **默认取值**： 不涉及
    * modelAssetType  **参数解释**： 数字人模型类型。 **约束限制**： 不涉及 **取值范围**： * HUMAN_MODEL_2D：分身数字人  **默认取值**： 不涉及
    * voiceConfig  voiceConfig
    * videoConfig  videoConfig
    * privData  **参数解释**： 私有数据，用户填写，原样带回。 **约束限制**： 不涉及 **取值范围**： 字符长度0-8192位 **默认取值**： 不涉及
    * backgroundMusicConfig  backgroundMusicConfig
    * reviewConfig  reviewConfig
    * audioFiles  audioFiles
    * actionConfig  actionConfig
    * shootScripts  拍摄脚本列表。
    * scriptId  剧本ID。
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * scriptCoverUrl  剧本封面下载url。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'scriptName' => 'setScriptName',
            'scriptDescription' => 'setScriptDescription',
            'viewMode' => 'setViewMode',
            'modelAssetId' => 'setModelAssetId',
            'modelAssetType' => 'setModelAssetType',
            'voiceConfig' => 'setVoiceConfig',
            'videoConfig' => 'setVideoConfig',
            'privData' => 'setPrivData',
            'backgroundMusicConfig' => 'setBackgroundMusicConfig',
            'reviewConfig' => 'setReviewConfig',
            'audioFiles' => 'setAudioFiles',
            'actionConfig' => 'setActionConfig',
            'shootScripts' => 'setShootScripts',
            'scriptId' => 'setScriptId',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'scriptCoverUrl' => 'setScriptCoverUrl',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scriptName  **参数解释**： 剧本名称。 **约束限制**： 不涉及。 **取值范围**： 只能使用中英文字符，字符长度1-256位。 **默认取值**： 不涉及。
    * scriptDescription  **参数解释**： 剧本描述。 **约束限制**： 不涉及。 **取值范围**： 字符长度0-1024位。 **默认取值**： 不涉及。
    * viewMode  **参数解释**： 横竖屏类型。 **约束限制**： 不涉及。 **取值范围**： * LANDSCAPE：横屏。 * VERTICAL：竖屏。
    * modelAssetId  **参数解释**： 数字人模型资产ID。 **约束限制**： 不涉及 **取值范围**： 字符长度0-64位。 **默认取值**： 不涉及
    * modelAssetType  **参数解释**： 数字人模型类型。 **约束限制**： 不涉及 **取值范围**： * HUMAN_MODEL_2D：分身数字人  **默认取值**： 不涉及
    * voiceConfig  voiceConfig
    * videoConfig  videoConfig
    * privData  **参数解释**： 私有数据，用户填写，原样带回。 **约束限制**： 不涉及 **取值范围**： 字符长度0-8192位 **默认取值**： 不涉及
    * backgroundMusicConfig  backgroundMusicConfig
    * reviewConfig  reviewConfig
    * audioFiles  audioFiles
    * actionConfig  actionConfig
    * shootScripts  拍摄脚本列表。
    * scriptId  剧本ID。
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * scriptCoverUrl  剧本封面下载url。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'scriptName' => 'getScriptName',
            'scriptDescription' => 'getScriptDescription',
            'viewMode' => 'getViewMode',
            'modelAssetId' => 'getModelAssetId',
            'modelAssetType' => 'getModelAssetType',
            'voiceConfig' => 'getVoiceConfig',
            'videoConfig' => 'getVideoConfig',
            'privData' => 'getPrivData',
            'backgroundMusicConfig' => 'getBackgroundMusicConfig',
            'reviewConfig' => 'getReviewConfig',
            'audioFiles' => 'getAudioFiles',
            'actionConfig' => 'getActionConfig',
            'shootScripts' => 'getShootScripts',
            'scriptId' => 'getScriptId',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'scriptCoverUrl' => 'getScriptCoverUrl',
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
    const VIEW_MODE_LANDSCAPE = 'LANDSCAPE';
    const VIEW_MODE_VERTICAL = 'VERTICAL';
    const MODEL_ASSET_TYPE_HUMAN_MODEL_2_D = 'HUMAN_MODEL_2D';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getViewModeAllowableValues()
    {
        return [
            self::VIEW_MODE_LANDSCAPE,
            self::VIEW_MODE_VERTICAL,
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
        $this->container['viewMode'] = isset($data['viewMode']) ? $data['viewMode'] : null;
        $this->container['modelAssetId'] = isset($data['modelAssetId']) ? $data['modelAssetId'] : null;
        $this->container['modelAssetType'] = isset($data['modelAssetType']) ? $data['modelAssetType'] : null;
        $this->container['voiceConfig'] = isset($data['voiceConfig']) ? $data['voiceConfig'] : null;
        $this->container['videoConfig'] = isset($data['videoConfig']) ? $data['videoConfig'] : null;
        $this->container['privData'] = isset($data['privData']) ? $data['privData'] : null;
        $this->container['backgroundMusicConfig'] = isset($data['backgroundMusicConfig']) ? $data['backgroundMusicConfig'] : null;
        $this->container['reviewConfig'] = isset($data['reviewConfig']) ? $data['reviewConfig'] : null;
        $this->container['audioFiles'] = isset($data['audioFiles']) ? $data['audioFiles'] : null;
        $this->container['actionConfig'] = isset($data['actionConfig']) ? $data['actionConfig'] : null;
        $this->container['shootScripts'] = isset($data['shootScripts']) ? $data['shootScripts'] : null;
        $this->container['scriptId'] = isset($data['scriptId']) ? $data['scriptId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['scriptCoverUrl'] = isset($data['scriptCoverUrl']) ? $data['scriptCoverUrl'] : null;
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
            if (!is_null($this->container['scriptName']) && (mb_strlen($this->container['scriptName']) > 256)) {
                $invalidProperties[] = "invalid value for 'scriptName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['scriptName']) && (mb_strlen($this->container['scriptName']) < 1)) {
                $invalidProperties[] = "invalid value for 'scriptName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['scriptDescription']) && (mb_strlen($this->container['scriptDescription']) > 1024)) {
                $invalidProperties[] = "invalid value for 'scriptDescription', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['scriptDescription']) && (mb_strlen($this->container['scriptDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'scriptDescription', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getViewModeAllowableValues();
                if (!is_null($this->container['viewMode']) && !in_array($this->container['viewMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'viewMode', must be one of '%s'",
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
            if (!is_null($this->container['scriptCoverUrl']) && (mb_strlen($this->container['scriptCoverUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'scriptCoverUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['scriptCoverUrl']) && (mb_strlen($this->container['scriptCoverUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'scriptCoverUrl', the character length must be bigger than or equal to 1.";
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
    *  **参数解释**： 剧本名称。 **约束限制**： 不涉及。 **取值范围**： 只能使用中英文字符，字符长度1-256位。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getScriptName()
    {
        return $this->container['scriptName'];
    }

    /**
    * Sets scriptName
    *
    * @param string|null $scriptName **参数解释**： 剧本名称。 **约束限制**： 不涉及。 **取值范围**： 只能使用中英文字符，字符长度1-256位。 **默认取值**： 不涉及。
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
    *  **参数解释**： 剧本描述。 **约束限制**： 不涉及。 **取值范围**： 字符长度0-1024位。 **默认取值**： 不涉及。
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
    * @param string|null $scriptDescription **参数解释**： 剧本描述。 **约束限制**： 不涉及。 **取值范围**： 字符长度0-1024位。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setScriptDescription($scriptDescription)
    {
        $this->container['scriptDescription'] = $scriptDescription;
        return $this;
    }

    /**
    * Gets viewMode
    *  **参数解释**： 横竖屏类型。 **约束限制**： 不涉及。 **取值范围**： * LANDSCAPE：横屏。 * VERTICAL：竖屏。
    *
    * @return string|null
    */
    public function getViewMode()
    {
        return $this->container['viewMode'];
    }

    /**
    * Sets viewMode
    *
    * @param string|null $viewMode **参数解释**： 横竖屏类型。 **约束限制**： 不涉及。 **取值范围**： * LANDSCAPE：横屏。 * VERTICAL：竖屏。
    *
    * @return $this
    */
    public function setViewMode($viewMode)
    {
        $this->container['viewMode'] = $viewMode;
        return $this;
    }

    /**
    * Gets modelAssetId
    *  **参数解释**： 数字人模型资产ID。 **约束限制**： 不涉及 **取值范围**： 字符长度0-64位。 **默认取值**： 不涉及
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
    * @param string|null $modelAssetId **参数解释**： 数字人模型资产ID。 **约束限制**： 不涉及 **取值范围**： 字符长度0-64位。 **默认取值**： 不涉及
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
    *  **参数解释**： 数字人模型类型。 **约束限制**： 不涉及 **取值范围**： * HUMAN_MODEL_2D：分身数字人  **默认取值**： 不涉及
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
    * @param string|null $modelAssetType **参数解释**： 数字人模型类型。 **约束限制**： 不涉及 **取值范围**： * HUMAN_MODEL_2D：分身数字人  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setModelAssetType($modelAssetType)
    {
        $this->container['modelAssetType'] = $modelAssetType;
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
    * Gets privData
    *  **参数解释**： 私有数据，用户填写，原样带回。 **约束限制**： 不涉及 **取值范围**： 字符长度0-8192位 **默认取值**： 不涉及
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
    * @param string|null $privData **参数解释**： 私有数据，用户填写，原样带回。 **约束限制**： 不涉及 **取值范围**： 字符长度0-8192位 **默认取值**： 不涉及
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
    * Gets reviewConfig
    *  reviewConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ReviewConfig|null
    */
    public function getReviewConfig()
    {
        return $this->container['reviewConfig'];
    }

    /**
    * Sets reviewConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ReviewConfig|null $reviewConfig reviewConfig
    *
    * @return $this
    */
    public function setReviewConfig($reviewConfig)
    {
        $this->container['reviewConfig'] = $reviewConfig;
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
    * Gets actionConfig
    *  actionConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ActionConfig|null
    */
    public function getActionConfig()
    {
        return $this->container['actionConfig'];
    }

    /**
    * Sets actionConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ActionConfig|null $actionConfig actionConfig
    *
    * @return $this
    */
    public function setActionConfig($actionConfig)
    {
        $this->container['actionConfig'] = $actionConfig;
        return $this;
    }

    /**
    * Gets shootScripts
    *  拍摄脚本列表。
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ShootScriptShowItem[]|null
    */
    public function getShootScripts()
    {
        return $this->container['shootScripts'];
    }

    /**
    * Sets shootScripts
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ShootScriptShowItem[]|null $shootScripts 拍摄脚本列表。
    *
    * @return $this
    */
    public function setShootScripts($shootScripts)
    {
        $this->container['shootScripts'] = $shootScripts;
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
    * Gets scriptCoverUrl
    *  剧本封面下载url。
    *
    * @return string|null
    */
    public function getScriptCoverUrl()
    {
        return $this->container['scriptCoverUrl'];
    }

    /**
    * Sets scriptCoverUrl
    *
    * @param string|null $scriptCoverUrl 剧本封面下载url。
    *
    * @return $this
    */
    public function setScriptCoverUrl($scriptCoverUrl)
    {
        $this->container['scriptCoverUrl'] = $scriptCoverUrl;
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

