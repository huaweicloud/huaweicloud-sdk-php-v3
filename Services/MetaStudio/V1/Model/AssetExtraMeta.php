<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssetExtraMeta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssetExtraMeta';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * humanModelMeta  humanModelMeta
    * voiceModelMeta  voiceModelMeta
    * pptMeta  pptMeta
    * animationMeta  animationMeta
    * sceneMeta  sceneMeta
    * materialMeta  materialMeta
    * humanModel2dMeta  humanModel2dMeta
    * imageMeta  imageMeta
    * videoMeta  videoMeta
    * audioMeta  audioMeta
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'humanModelMeta' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\HumanModelAssetMeta',
            'voiceModelMeta' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\VoiceModelAssetMeta',
            'pptMeta' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\PPTAssetMeta',
            'animationMeta' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\AnimationAssetMeta',
            'sceneMeta' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\SceneAssetMeta',
            'materialMeta' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\MaterialAssetMeta',
            'humanModel2dMeta' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\HumanModel2DAssetMeta',
            'imageMeta' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ImageAssetMeta',
            'videoMeta' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\VideoAssetMeta',
            'audioMeta' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\AudioAssetMeta'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * humanModelMeta  humanModelMeta
    * voiceModelMeta  voiceModelMeta
    * pptMeta  pptMeta
    * animationMeta  animationMeta
    * sceneMeta  sceneMeta
    * materialMeta  materialMeta
    * humanModel2dMeta  humanModel2dMeta
    * imageMeta  imageMeta
    * videoMeta  videoMeta
    * audioMeta  audioMeta
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'humanModelMeta' => null,
        'voiceModelMeta' => null,
        'pptMeta' => null,
        'animationMeta' => null,
        'sceneMeta' => null,
        'materialMeta' => null,
        'humanModel2dMeta' => null,
        'imageMeta' => null,
        'videoMeta' => null,
        'audioMeta' => null
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
    * humanModelMeta  humanModelMeta
    * voiceModelMeta  voiceModelMeta
    * pptMeta  pptMeta
    * animationMeta  animationMeta
    * sceneMeta  sceneMeta
    * materialMeta  materialMeta
    * humanModel2dMeta  humanModel2dMeta
    * imageMeta  imageMeta
    * videoMeta  videoMeta
    * audioMeta  audioMeta
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'humanModelMeta' => 'human_model_meta',
            'voiceModelMeta' => 'voice_model_meta',
            'pptMeta' => 'ppt_meta',
            'animationMeta' => 'animation_meta',
            'sceneMeta' => 'scene_meta',
            'materialMeta' => 'material_meta',
            'humanModel2dMeta' => 'human_model_2d_meta',
            'imageMeta' => 'image_meta',
            'videoMeta' => 'video_meta',
            'audioMeta' => 'audio_meta'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * humanModelMeta  humanModelMeta
    * voiceModelMeta  voiceModelMeta
    * pptMeta  pptMeta
    * animationMeta  animationMeta
    * sceneMeta  sceneMeta
    * materialMeta  materialMeta
    * humanModel2dMeta  humanModel2dMeta
    * imageMeta  imageMeta
    * videoMeta  videoMeta
    * audioMeta  audioMeta
    *
    * @var string[]
    */
    protected static $setters = [
            'humanModelMeta' => 'setHumanModelMeta',
            'voiceModelMeta' => 'setVoiceModelMeta',
            'pptMeta' => 'setPptMeta',
            'animationMeta' => 'setAnimationMeta',
            'sceneMeta' => 'setSceneMeta',
            'materialMeta' => 'setMaterialMeta',
            'humanModel2dMeta' => 'setHumanModel2dMeta',
            'imageMeta' => 'setImageMeta',
            'videoMeta' => 'setVideoMeta',
            'audioMeta' => 'setAudioMeta'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * humanModelMeta  humanModelMeta
    * voiceModelMeta  voiceModelMeta
    * pptMeta  pptMeta
    * animationMeta  animationMeta
    * sceneMeta  sceneMeta
    * materialMeta  materialMeta
    * humanModel2dMeta  humanModel2dMeta
    * imageMeta  imageMeta
    * videoMeta  videoMeta
    * audioMeta  audioMeta
    *
    * @var string[]
    */
    protected static $getters = [
            'humanModelMeta' => 'getHumanModelMeta',
            'voiceModelMeta' => 'getVoiceModelMeta',
            'pptMeta' => 'getPptMeta',
            'animationMeta' => 'getAnimationMeta',
            'sceneMeta' => 'getSceneMeta',
            'materialMeta' => 'getMaterialMeta',
            'humanModel2dMeta' => 'getHumanModel2dMeta',
            'imageMeta' => 'getImageMeta',
            'videoMeta' => 'getVideoMeta',
            'audioMeta' => 'getAudioMeta'
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
        $this->container['humanModelMeta'] = isset($data['humanModelMeta']) ? $data['humanModelMeta'] : null;
        $this->container['voiceModelMeta'] = isset($data['voiceModelMeta']) ? $data['voiceModelMeta'] : null;
        $this->container['pptMeta'] = isset($data['pptMeta']) ? $data['pptMeta'] : null;
        $this->container['animationMeta'] = isset($data['animationMeta']) ? $data['animationMeta'] : null;
        $this->container['sceneMeta'] = isset($data['sceneMeta']) ? $data['sceneMeta'] : null;
        $this->container['materialMeta'] = isset($data['materialMeta']) ? $data['materialMeta'] : null;
        $this->container['humanModel2dMeta'] = isset($data['humanModel2dMeta']) ? $data['humanModel2dMeta'] : null;
        $this->container['imageMeta'] = isset($data['imageMeta']) ? $data['imageMeta'] : null;
        $this->container['videoMeta'] = isset($data['videoMeta']) ? $data['videoMeta'] : null;
        $this->container['audioMeta'] = isset($data['audioMeta']) ? $data['audioMeta'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets humanModelMeta
    *  humanModelMeta
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\HumanModelAssetMeta|null
    */
    public function getHumanModelMeta()
    {
        return $this->container['humanModelMeta'];
    }

    /**
    * Sets humanModelMeta
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\HumanModelAssetMeta|null $humanModelMeta humanModelMeta
    *
    * @return $this
    */
    public function setHumanModelMeta($humanModelMeta)
    {
        $this->container['humanModelMeta'] = $humanModelMeta;
        return $this;
    }

    /**
    * Gets voiceModelMeta
    *  voiceModelMeta
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\VoiceModelAssetMeta|null
    */
    public function getVoiceModelMeta()
    {
        return $this->container['voiceModelMeta'];
    }

    /**
    * Sets voiceModelMeta
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\VoiceModelAssetMeta|null $voiceModelMeta voiceModelMeta
    *
    * @return $this
    */
    public function setVoiceModelMeta($voiceModelMeta)
    {
        $this->container['voiceModelMeta'] = $voiceModelMeta;
        return $this;
    }

    /**
    * Gets pptMeta
    *  pptMeta
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\PPTAssetMeta|null
    */
    public function getPptMeta()
    {
        return $this->container['pptMeta'];
    }

    /**
    * Sets pptMeta
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\PPTAssetMeta|null $pptMeta pptMeta
    *
    * @return $this
    */
    public function setPptMeta($pptMeta)
    {
        $this->container['pptMeta'] = $pptMeta;
        return $this;
    }

    /**
    * Gets animationMeta
    *  animationMeta
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\AnimationAssetMeta|null
    */
    public function getAnimationMeta()
    {
        return $this->container['animationMeta'];
    }

    /**
    * Sets animationMeta
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\AnimationAssetMeta|null $animationMeta animationMeta
    *
    * @return $this
    */
    public function setAnimationMeta($animationMeta)
    {
        $this->container['animationMeta'] = $animationMeta;
        return $this;
    }

    /**
    * Gets sceneMeta
    *  sceneMeta
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\SceneAssetMeta|null
    */
    public function getSceneMeta()
    {
        return $this->container['sceneMeta'];
    }

    /**
    * Sets sceneMeta
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\SceneAssetMeta|null $sceneMeta sceneMeta
    *
    * @return $this
    */
    public function setSceneMeta($sceneMeta)
    {
        $this->container['sceneMeta'] = $sceneMeta;
        return $this;
    }

    /**
    * Gets materialMeta
    *  materialMeta
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\MaterialAssetMeta|null
    */
    public function getMaterialMeta()
    {
        return $this->container['materialMeta'];
    }

    /**
    * Sets materialMeta
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\MaterialAssetMeta|null $materialMeta materialMeta
    *
    * @return $this
    */
    public function setMaterialMeta($materialMeta)
    {
        $this->container['materialMeta'] = $materialMeta;
        return $this;
    }

    /**
    * Gets humanModel2dMeta
    *  humanModel2dMeta
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\HumanModel2DAssetMeta|null
    */
    public function getHumanModel2dMeta()
    {
        return $this->container['humanModel2dMeta'];
    }

    /**
    * Sets humanModel2dMeta
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\HumanModel2DAssetMeta|null $humanModel2dMeta humanModel2dMeta
    *
    * @return $this
    */
    public function setHumanModel2dMeta($humanModel2dMeta)
    {
        $this->container['humanModel2dMeta'] = $humanModel2dMeta;
        return $this;
    }

    /**
    * Gets imageMeta
    *  imageMeta
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ImageAssetMeta|null
    */
    public function getImageMeta()
    {
        return $this->container['imageMeta'];
    }

    /**
    * Sets imageMeta
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ImageAssetMeta|null $imageMeta imageMeta
    *
    * @return $this
    */
    public function setImageMeta($imageMeta)
    {
        $this->container['imageMeta'] = $imageMeta;
        return $this;
    }

    /**
    * Gets videoMeta
    *  videoMeta
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\VideoAssetMeta|null
    */
    public function getVideoMeta()
    {
        return $this->container['videoMeta'];
    }

    /**
    * Sets videoMeta
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\VideoAssetMeta|null $videoMeta videoMeta
    *
    * @return $this
    */
    public function setVideoMeta($videoMeta)
    {
        $this->container['videoMeta'] = $videoMeta;
        return $this;
    }

    /**
    * Gets audioMeta
    *  audioMeta
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\AudioAssetMeta|null
    */
    public function getAudioMeta()
    {
        return $this->container['audioMeta'];
    }

    /**
    * Sets audioMeta
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\AudioAssetMeta|null $audioMeta audioMeta
    *
    * @return $this
    */
    public function setAudioMeta($audioMeta)
    {
        $this->container['audioMeta'] = $audioMeta;
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

