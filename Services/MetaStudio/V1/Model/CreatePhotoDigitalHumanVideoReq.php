<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePhotoDigitalHumanVideoReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePhotoDigitalHumanVideoReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scriptId  剧本ID。 > * 如果shoot_scripts中shoot_script.script_type为\"TEXT\"，则台词以shoot_scripts中的文本为准； > * 如果shoot_scripts中shoot_script.script_type为\"AUDIO\"，则台词以script_id对应剧本中的音频为准。
    * humanImage  人物照片，需要Base64编码。照片分辨率不超过1080P。
    * voiceConfig  voiceConfig
    * videoConfig  videoConfig
    * shootScripts  剧本列表。照片数字人仅支持传入一个剧本shoot_script，剧本参数仅支持shoot_script.script_type、shoot_script.text_config；
    * outputAssetConfig  outputAssetConfig
    * backgroundMusicConfig  backgroundMusicConfig
    * reviewConfig  reviewConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scriptId' => 'string',
            'humanImage' => 'string',
            'voiceConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\VoiceConfig',
            'videoConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\PhotoVideoConfig',
            'shootScripts' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ShootScriptItem[]',
            'outputAssetConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\OutputAssetConfig',
            'backgroundMusicConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\BackgroundMusicConfig',
            'reviewConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ReviewConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scriptId  剧本ID。 > * 如果shoot_scripts中shoot_script.script_type为\"TEXT\"，则台词以shoot_scripts中的文本为准； > * 如果shoot_scripts中shoot_script.script_type为\"AUDIO\"，则台词以script_id对应剧本中的音频为准。
    * humanImage  人物照片，需要Base64编码。照片分辨率不超过1080P。
    * voiceConfig  voiceConfig
    * videoConfig  videoConfig
    * shootScripts  剧本列表。照片数字人仅支持传入一个剧本shoot_script，剧本参数仅支持shoot_script.script_type、shoot_script.text_config；
    * outputAssetConfig  outputAssetConfig
    * backgroundMusicConfig  backgroundMusicConfig
    * reviewConfig  reviewConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scriptId' => null,
        'humanImage' => null,
        'voiceConfig' => null,
        'videoConfig' => null,
        'shootScripts' => null,
        'outputAssetConfig' => null,
        'backgroundMusicConfig' => null,
        'reviewConfig' => null
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
    * scriptId  剧本ID。 > * 如果shoot_scripts中shoot_script.script_type为\"TEXT\"，则台词以shoot_scripts中的文本为准； > * 如果shoot_scripts中shoot_script.script_type为\"AUDIO\"，则台词以script_id对应剧本中的音频为准。
    * humanImage  人物照片，需要Base64编码。照片分辨率不超过1080P。
    * voiceConfig  voiceConfig
    * videoConfig  videoConfig
    * shootScripts  剧本列表。照片数字人仅支持传入一个剧本shoot_script，剧本参数仅支持shoot_script.script_type、shoot_script.text_config；
    * outputAssetConfig  outputAssetConfig
    * backgroundMusicConfig  backgroundMusicConfig
    * reviewConfig  reviewConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scriptId' => 'script_id',
            'humanImage' => 'human_image',
            'voiceConfig' => 'voice_config',
            'videoConfig' => 'video_config',
            'shootScripts' => 'shoot_scripts',
            'outputAssetConfig' => 'output_asset_config',
            'backgroundMusicConfig' => 'background_music_config',
            'reviewConfig' => 'review_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scriptId  剧本ID。 > * 如果shoot_scripts中shoot_script.script_type为\"TEXT\"，则台词以shoot_scripts中的文本为准； > * 如果shoot_scripts中shoot_script.script_type为\"AUDIO\"，则台词以script_id对应剧本中的音频为准。
    * humanImage  人物照片，需要Base64编码。照片分辨率不超过1080P。
    * voiceConfig  voiceConfig
    * videoConfig  videoConfig
    * shootScripts  剧本列表。照片数字人仅支持传入一个剧本shoot_script，剧本参数仅支持shoot_script.script_type、shoot_script.text_config；
    * outputAssetConfig  outputAssetConfig
    * backgroundMusicConfig  backgroundMusicConfig
    * reviewConfig  reviewConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'scriptId' => 'setScriptId',
            'humanImage' => 'setHumanImage',
            'voiceConfig' => 'setVoiceConfig',
            'videoConfig' => 'setVideoConfig',
            'shootScripts' => 'setShootScripts',
            'outputAssetConfig' => 'setOutputAssetConfig',
            'backgroundMusicConfig' => 'setBackgroundMusicConfig',
            'reviewConfig' => 'setReviewConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scriptId  剧本ID。 > * 如果shoot_scripts中shoot_script.script_type为\"TEXT\"，则台词以shoot_scripts中的文本为准； > * 如果shoot_scripts中shoot_script.script_type为\"AUDIO\"，则台词以script_id对应剧本中的音频为准。
    * humanImage  人物照片，需要Base64编码。照片分辨率不超过1080P。
    * voiceConfig  voiceConfig
    * videoConfig  videoConfig
    * shootScripts  剧本列表。照片数字人仅支持传入一个剧本shoot_script，剧本参数仅支持shoot_script.script_type、shoot_script.text_config；
    * outputAssetConfig  outputAssetConfig
    * backgroundMusicConfig  backgroundMusicConfig
    * reviewConfig  reviewConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'scriptId' => 'getScriptId',
            'humanImage' => 'getHumanImage',
            'voiceConfig' => 'getVoiceConfig',
            'videoConfig' => 'getVideoConfig',
            'shootScripts' => 'getShootScripts',
            'outputAssetConfig' => 'getOutputAssetConfig',
            'backgroundMusicConfig' => 'getBackgroundMusicConfig',
            'reviewConfig' => 'getReviewConfig'
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
        $this->container['humanImage'] = isset($data['humanImage']) ? $data['humanImage'] : null;
        $this->container['voiceConfig'] = isset($data['voiceConfig']) ? $data['voiceConfig'] : null;
        $this->container['videoConfig'] = isset($data['videoConfig']) ? $data['videoConfig'] : null;
        $this->container['shootScripts'] = isset($data['shootScripts']) ? $data['shootScripts'] : null;
        $this->container['outputAssetConfig'] = isset($data['outputAssetConfig']) ? $data['outputAssetConfig'] : null;
        $this->container['backgroundMusicConfig'] = isset($data['backgroundMusicConfig']) ? $data['backgroundMusicConfig'] : null;
        $this->container['reviewConfig'] = isset($data['reviewConfig']) ? $data['reviewConfig'] : null;
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
        if ($this->container['humanImage'] === null) {
            $invalidProperties[] = "'humanImage' can't be null";
        }
            if ((mb_strlen($this->container['humanImage']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'humanImage', the character length must be smaller than or equal to 2147483647.";
            }
            if ((mb_strlen($this->container['humanImage']) < 1)) {
                $invalidProperties[] = "invalid value for 'humanImage', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['shootScripts'] === null) {
            $invalidProperties[] = "'shootScripts' can't be null";
        }
        if ($this->container['outputAssetConfig'] === null) {
            $invalidProperties[] = "'outputAssetConfig' can't be null";
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
    *  剧本ID。 > * 如果shoot_scripts中shoot_script.script_type为\"TEXT\"，则台词以shoot_scripts中的文本为准； > * 如果shoot_scripts中shoot_script.script_type为\"AUDIO\"，则台词以script_id对应剧本中的音频为准。
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
    * @param string|null $scriptId 剧本ID。 > * 如果shoot_scripts中shoot_script.script_type为\"TEXT\"，则台词以shoot_scripts中的文本为准； > * 如果shoot_scripts中shoot_script.script_type为\"AUDIO\"，则台词以script_id对应剧本中的音频为准。
    *
    * @return $this
    */
    public function setScriptId($scriptId)
    {
        $this->container['scriptId'] = $scriptId;
        return $this;
    }

    /**
    * Gets humanImage
    *  人物照片，需要Base64编码。照片分辨率不超过1080P。
    *
    * @return string
    */
    public function getHumanImage()
    {
        return $this->container['humanImage'];
    }

    /**
    * Sets humanImage
    *
    * @param string $humanImage 人物照片，需要Base64编码。照片分辨率不超过1080P。
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
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\PhotoVideoConfig|null
    */
    public function getVideoConfig()
    {
        return $this->container['videoConfig'];
    }

    /**
    * Sets videoConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\PhotoVideoConfig|null $videoConfig videoConfig
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
    *  剧本列表。照片数字人仅支持传入一个剧本shoot_script，剧本参数仅支持shoot_script.script_type、shoot_script.text_config；
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
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ShootScriptItem[] $shootScripts 剧本列表。照片数字人仅支持传入一个剧本shoot_script，剧本参数仅支持shoot_script.script_type、shoot_script.text_config；
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
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\OutputAssetConfig
    */
    public function getOutputAssetConfig()
    {
        return $this->container['outputAssetConfig'];
    }

    /**
    * Sets outputAssetConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\OutputAssetConfig $outputAssetConfig outputAssetConfig
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

