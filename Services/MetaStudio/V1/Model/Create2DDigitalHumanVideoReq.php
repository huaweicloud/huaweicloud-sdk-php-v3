<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Create2DDigitalHumanVideoReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Create2DDigitalHumanVideoReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scriptId  剧本ID。 > * 如果填写了script_id，model_asset_id、voice_config、scene_asset_id、video_config、shoot_scripts可以不填，以脚本中的配置为准。 > * 如果填写了script_id，并且同时也填写了model_asset_id、voice_config、scene_asset_id、video_config、shoot_scripts则以本接口中的配置为准。
    * modelAssetId  分身数字人模型资产ID。
    * voiceConfig  voiceConfig
    * videoConfig  videoConfig
    * shootScripts  拍摄脚本列表。
    * outputAssetConfig  outputAssetConfig
    * backgroundMusicConfig  backgroundMusicConfig
    * reviewConfig  reviewConfig
    * callbackConfig  callbackConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scriptId' => 'string',
            'modelAssetId' => 'string',
            'voiceConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\VoiceConfig',
            'videoConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\VideoConfig',
            'shootScripts' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ShootScriptItem[]',
            'outputAssetConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\OutputAssetConfig',
            'backgroundMusicConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\BackgroundMusicConfig',
            'reviewConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ReviewConfig',
            'callbackConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\CallBackConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scriptId  剧本ID。 > * 如果填写了script_id，model_asset_id、voice_config、scene_asset_id、video_config、shoot_scripts可以不填，以脚本中的配置为准。 > * 如果填写了script_id，并且同时也填写了model_asset_id、voice_config、scene_asset_id、video_config、shoot_scripts则以本接口中的配置为准。
    * modelAssetId  分身数字人模型资产ID。
    * voiceConfig  voiceConfig
    * videoConfig  videoConfig
    * shootScripts  拍摄脚本列表。
    * outputAssetConfig  outputAssetConfig
    * backgroundMusicConfig  backgroundMusicConfig
    * reviewConfig  reviewConfig
    * callbackConfig  callbackConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scriptId' => null,
        'modelAssetId' => null,
        'voiceConfig' => null,
        'videoConfig' => null,
        'shootScripts' => null,
        'outputAssetConfig' => null,
        'backgroundMusicConfig' => null,
        'reviewConfig' => null,
        'callbackConfig' => null
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
    * scriptId  剧本ID。 > * 如果填写了script_id，model_asset_id、voice_config、scene_asset_id、video_config、shoot_scripts可以不填，以脚本中的配置为准。 > * 如果填写了script_id，并且同时也填写了model_asset_id、voice_config、scene_asset_id、video_config、shoot_scripts则以本接口中的配置为准。
    * modelAssetId  分身数字人模型资产ID。
    * voiceConfig  voiceConfig
    * videoConfig  videoConfig
    * shootScripts  拍摄脚本列表。
    * outputAssetConfig  outputAssetConfig
    * backgroundMusicConfig  backgroundMusicConfig
    * reviewConfig  reviewConfig
    * callbackConfig  callbackConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scriptId' => 'script_id',
            'modelAssetId' => 'model_asset_id',
            'voiceConfig' => 'voice_config',
            'videoConfig' => 'video_config',
            'shootScripts' => 'shoot_scripts',
            'outputAssetConfig' => 'output_asset_config',
            'backgroundMusicConfig' => 'background_music_config',
            'reviewConfig' => 'review_config',
            'callbackConfig' => 'callback_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scriptId  剧本ID。 > * 如果填写了script_id，model_asset_id、voice_config、scene_asset_id、video_config、shoot_scripts可以不填，以脚本中的配置为准。 > * 如果填写了script_id，并且同时也填写了model_asset_id、voice_config、scene_asset_id、video_config、shoot_scripts则以本接口中的配置为准。
    * modelAssetId  分身数字人模型资产ID。
    * voiceConfig  voiceConfig
    * videoConfig  videoConfig
    * shootScripts  拍摄脚本列表。
    * outputAssetConfig  outputAssetConfig
    * backgroundMusicConfig  backgroundMusicConfig
    * reviewConfig  reviewConfig
    * callbackConfig  callbackConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'scriptId' => 'setScriptId',
            'modelAssetId' => 'setModelAssetId',
            'voiceConfig' => 'setVoiceConfig',
            'videoConfig' => 'setVideoConfig',
            'shootScripts' => 'setShootScripts',
            'outputAssetConfig' => 'setOutputAssetConfig',
            'backgroundMusicConfig' => 'setBackgroundMusicConfig',
            'reviewConfig' => 'setReviewConfig',
            'callbackConfig' => 'setCallbackConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scriptId  剧本ID。 > * 如果填写了script_id，model_asset_id、voice_config、scene_asset_id、video_config、shoot_scripts可以不填，以脚本中的配置为准。 > * 如果填写了script_id，并且同时也填写了model_asset_id、voice_config、scene_asset_id、video_config、shoot_scripts则以本接口中的配置为准。
    * modelAssetId  分身数字人模型资产ID。
    * voiceConfig  voiceConfig
    * videoConfig  videoConfig
    * shootScripts  拍摄脚本列表。
    * outputAssetConfig  outputAssetConfig
    * backgroundMusicConfig  backgroundMusicConfig
    * reviewConfig  reviewConfig
    * callbackConfig  callbackConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'scriptId' => 'getScriptId',
            'modelAssetId' => 'getModelAssetId',
            'voiceConfig' => 'getVoiceConfig',
            'videoConfig' => 'getVideoConfig',
            'shootScripts' => 'getShootScripts',
            'outputAssetConfig' => 'getOutputAssetConfig',
            'backgroundMusicConfig' => 'getBackgroundMusicConfig',
            'reviewConfig' => 'getReviewConfig',
            'callbackConfig' => 'getCallbackConfig'
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
        $this->container['scriptId'] = isset($data['scriptId']) ? $data['scriptId'] : null;
        $this->container['modelAssetId'] = isset($data['modelAssetId']) ? $data['modelAssetId'] : null;
        $this->container['voiceConfig'] = isset($data['voiceConfig']) ? $data['voiceConfig'] : null;
        $this->container['videoConfig'] = isset($data['videoConfig']) ? $data['videoConfig'] : null;
        $this->container['shootScripts'] = isset($data['shootScripts']) ? $data['shootScripts'] : null;
        $this->container['outputAssetConfig'] = isset($data['outputAssetConfig']) ? $data['outputAssetConfig'] : null;
        $this->container['backgroundMusicConfig'] = isset($data['backgroundMusicConfig']) ? $data['backgroundMusicConfig'] : null;
        $this->container['reviewConfig'] = isset($data['reviewConfig']) ? $data['reviewConfig'] : null;
        $this->container['callbackConfig'] = isset($data['callbackConfig']) ? $data['callbackConfig'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['scriptId']) && (mb_strlen($this->container['scriptId']) > 64)) {
                $invalidProperties[] = "invalid value for 'scriptId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['scriptId']) && (mb_strlen($this->container['scriptId']) < 1)) {
                $invalidProperties[] = "invalid value for 'scriptId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['modelAssetId']) && (mb_strlen($this->container['modelAssetId']) > 64)) {
                $invalidProperties[] = "invalid value for 'modelAssetId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['modelAssetId']) && (mb_strlen($this->container['modelAssetId']) < 0)) {
                $invalidProperties[] = "invalid value for 'modelAssetId', the character length must be bigger than or equal to 0.";
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
    * Gets scriptId
    *  剧本ID。 > * 如果填写了script_id，model_asset_id、voice_config、scene_asset_id、video_config、shoot_scripts可以不填，以脚本中的配置为准。 > * 如果填写了script_id，并且同时也填写了model_asset_id、voice_config、scene_asset_id、video_config、shoot_scripts则以本接口中的配置为准。
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
    * @param string|null $scriptId 剧本ID。 > * 如果填写了script_id，model_asset_id、voice_config、scene_asset_id、video_config、shoot_scripts可以不填，以脚本中的配置为准。 > * 如果填写了script_id，并且同时也填写了model_asset_id、voice_config、scene_asset_id、video_config、shoot_scripts则以本接口中的配置为准。
    *
    * @return $this
    */
    public function setScriptId($scriptId)
    {
        $this->container['scriptId'] = $scriptId;
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
    * Gets outputAssetConfig
    *  outputAssetConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\OutputAssetConfig|null
    */
    public function getOutputAssetConfig()
    {
        return $this->container['outputAssetConfig'];
    }

    /**
    * Sets outputAssetConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\OutputAssetConfig|null $outputAssetConfig outputAssetConfig
    *
    * @return $this
    */
    public function setOutputAssetConfig($outputAssetConfig)
    {
        $this->container['outputAssetConfig'] = $outputAssetConfig;
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
    * Gets callbackConfig
    *  callbackConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\CallBackConfig|null
    */
    public function getCallbackConfig()
    {
        return $this->container['callbackConfig'];
    }

    /**
    * Sets callbackConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\CallBackConfig|null $callbackConfig callbackConfig
    *
    * @return $this
    */
    public function setCallbackConfig($callbackConfig)
    {
        $this->container['callbackConfig'] = $callbackConfig;
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

