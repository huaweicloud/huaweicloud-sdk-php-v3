<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShootScriptDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShootScriptDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scriptType  脚本类型，即视频制作的驱动方式。默认TEXT * TEXT: 文本驱动，即通过TTS合成语音 * AUDIO: 语音驱动
    * textConfig  textConfig
    * backgroundConfig  背景配置。
    * layerConfig  图层配置。
    * thumbnailUrl  剧本场景缩略图url。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scriptType' => 'string',
            'textConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\TextConfig',
            'backgroundConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\BackgroundConfigInfo[]',
            'layerConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LayerConfig[]',
            'thumbnailUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scriptType  脚本类型，即视频制作的驱动方式。默认TEXT * TEXT: 文本驱动，即通过TTS合成语音 * AUDIO: 语音驱动
    * textConfig  textConfig
    * backgroundConfig  背景配置。
    * layerConfig  图层配置。
    * thumbnailUrl  剧本场景缩略图url。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scriptType' => null,
        'textConfig' => null,
        'backgroundConfig' => null,
        'layerConfig' => null,
        'thumbnailUrl' => null
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
    * scriptType  脚本类型，即视频制作的驱动方式。默认TEXT * TEXT: 文本驱动，即通过TTS合成语音 * AUDIO: 语音驱动
    * textConfig  textConfig
    * backgroundConfig  背景配置。
    * layerConfig  图层配置。
    * thumbnailUrl  剧本场景缩略图url。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scriptType' => 'script_type',
            'textConfig' => 'text_config',
            'backgroundConfig' => 'background_config',
            'layerConfig' => 'layer_config',
            'thumbnailUrl' => 'thumbnail_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scriptType  脚本类型，即视频制作的驱动方式。默认TEXT * TEXT: 文本驱动，即通过TTS合成语音 * AUDIO: 语音驱动
    * textConfig  textConfig
    * backgroundConfig  背景配置。
    * layerConfig  图层配置。
    * thumbnailUrl  剧本场景缩略图url。
    *
    * @var string[]
    */
    protected static $setters = [
            'scriptType' => 'setScriptType',
            'textConfig' => 'setTextConfig',
            'backgroundConfig' => 'setBackgroundConfig',
            'layerConfig' => 'setLayerConfig',
            'thumbnailUrl' => 'setThumbnailUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scriptType  脚本类型，即视频制作的驱动方式。默认TEXT * TEXT: 文本驱动，即通过TTS合成语音 * AUDIO: 语音驱动
    * textConfig  textConfig
    * backgroundConfig  背景配置。
    * layerConfig  图层配置。
    * thumbnailUrl  剧本场景缩略图url。
    *
    * @var string[]
    */
    protected static $getters = [
            'scriptType' => 'getScriptType',
            'textConfig' => 'getTextConfig',
            'backgroundConfig' => 'getBackgroundConfig',
            'layerConfig' => 'getLayerConfig',
            'thumbnailUrl' => 'getThumbnailUrl'
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
    const SCRIPT_TYPE_TEXT = 'TEXT';
    const SCRIPT_TYPE_AUDIO = 'AUDIO';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getScriptTypeAllowableValues()
    {
        return [
            self::SCRIPT_TYPE_TEXT,
            self::SCRIPT_TYPE_AUDIO,
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
        $this->container['scriptType'] = isset($data['scriptType']) ? $data['scriptType'] : null;
        $this->container['textConfig'] = isset($data['textConfig']) ? $data['textConfig'] : null;
        $this->container['backgroundConfig'] = isset($data['backgroundConfig']) ? $data['backgroundConfig'] : null;
        $this->container['layerConfig'] = isset($data['layerConfig']) ? $data['layerConfig'] : null;
        $this->container['thumbnailUrl'] = isset($data['thumbnailUrl']) ? $data['thumbnailUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getScriptTypeAllowableValues();
                if (!is_null($this->container['scriptType']) && !in_array($this->container['scriptType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'scriptType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['thumbnailUrl']) && (mb_strlen($this->container['thumbnailUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'thumbnailUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['thumbnailUrl']) && (mb_strlen($this->container['thumbnailUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'thumbnailUrl', the character length must be bigger than or equal to 1.";
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
    * Gets scriptType
    *  脚本类型，即视频制作的驱动方式。默认TEXT * TEXT: 文本驱动，即通过TTS合成语音 * AUDIO: 语音驱动
    *
    * @return string|null
    */
    public function getScriptType()
    {
        return $this->container['scriptType'];
    }

    /**
    * Sets scriptType
    *
    * @param string|null $scriptType 脚本类型，即视频制作的驱动方式。默认TEXT * TEXT: 文本驱动，即通过TTS合成语音 * AUDIO: 语音驱动
    *
    * @return $this
    */
    public function setScriptType($scriptType)
    {
        $this->container['scriptType'] = $scriptType;
        return $this;
    }

    /**
    * Gets textConfig
    *  textConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\TextConfig|null
    */
    public function getTextConfig()
    {
        return $this->container['textConfig'];
    }

    /**
    * Sets textConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\TextConfig|null $textConfig textConfig
    *
    * @return $this
    */
    public function setTextConfig($textConfig)
    {
        $this->container['textConfig'] = $textConfig;
        return $this;
    }

    /**
    * Gets backgroundConfig
    *  背景配置。
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\BackgroundConfigInfo[]|null
    */
    public function getBackgroundConfig()
    {
        return $this->container['backgroundConfig'];
    }

    /**
    * Sets backgroundConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\BackgroundConfigInfo[]|null $backgroundConfig 背景配置。
    *
    * @return $this
    */
    public function setBackgroundConfig($backgroundConfig)
    {
        $this->container['backgroundConfig'] = $backgroundConfig;
        return $this;
    }

    /**
    * Gets layerConfig
    *  图层配置。
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\LayerConfig[]|null
    */
    public function getLayerConfig()
    {
        return $this->container['layerConfig'];
    }

    /**
    * Sets layerConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\LayerConfig[]|null $layerConfig 图层配置。
    *
    * @return $this
    */
    public function setLayerConfig($layerConfig)
    {
        $this->container['layerConfig'] = $layerConfig;
        return $this;
    }

    /**
    * Gets thumbnailUrl
    *  剧本场景缩略图url。
    *
    * @return string|null
    */
    public function getThumbnailUrl()
    {
        return $this->container['thumbnailUrl'];
    }

    /**
    * Sets thumbnailUrl
    *
    * @param string|null $thumbnailUrl 剧本场景缩略图url。
    *
    * @return $this
    */
    public function setThumbnailUrl($thumbnailUrl)
    {
        $this->container['thumbnailUrl'] = $thumbnailUrl;
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

