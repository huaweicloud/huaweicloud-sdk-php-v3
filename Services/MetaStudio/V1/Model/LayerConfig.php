<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LayerConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LayerConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * layerType  **参数解释**： 图层类型。 **约束限制**： 不涉及。 **取值范围**： * HUMAN:  人物图层 * IMAGE： 素材图片图层 * VIDEO： 素材视频图层 * TEXT: 素材文字图层  **默认取值**： 不涉及
    * assetId  **参数解释**： 图层所需资产的资产id，外部资产信息无需填写。 **约束限制**： 不涉及。 **取值范围**： 字符长度0-64位 **默认取值**： 不涉及
    * groupId  **参数解释**： 多场景素材编组。同一group_id的素材，在应用全局时共享位置信息。 **约束限制**： 不涉及。 **取值范围**： 字符长度0-64位 **默认取值**： 不涉及
    * position  position
    * size  size
    * rotation  rotation
    * imageConfig  imageConfig
    * videoConfig  videoConfig
    * textConfig  textConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'layerType' => 'string',
            'assetId' => 'string',
            'groupId' => 'string',
            'position' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LayerPositionConfig',
            'size' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LayerSizeConfig',
            'rotation' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LayerRotationConfig',
            'imageConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ImageLayerConfig',
            'videoConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\VideoLayerConfig',
            'textConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\TextLayerConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * layerType  **参数解释**： 图层类型。 **约束限制**： 不涉及。 **取值范围**： * HUMAN:  人物图层 * IMAGE： 素材图片图层 * VIDEO： 素材视频图层 * TEXT: 素材文字图层  **默认取值**： 不涉及
    * assetId  **参数解释**： 图层所需资产的资产id，外部资产信息无需填写。 **约束限制**： 不涉及。 **取值范围**： 字符长度0-64位 **默认取值**： 不涉及
    * groupId  **参数解释**： 多场景素材编组。同一group_id的素材，在应用全局时共享位置信息。 **约束限制**： 不涉及。 **取值范围**： 字符长度0-64位 **默认取值**： 不涉及
    * position  position
    * size  size
    * rotation  rotation
    * imageConfig  imageConfig
    * videoConfig  videoConfig
    * textConfig  textConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'layerType' => null,
        'assetId' => null,
        'groupId' => null,
        'position' => null,
        'size' => null,
        'rotation' => null,
        'imageConfig' => null,
        'videoConfig' => null,
        'textConfig' => null
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
    * layerType  **参数解释**： 图层类型。 **约束限制**： 不涉及。 **取值范围**： * HUMAN:  人物图层 * IMAGE： 素材图片图层 * VIDEO： 素材视频图层 * TEXT: 素材文字图层  **默认取值**： 不涉及
    * assetId  **参数解释**： 图层所需资产的资产id，外部资产信息无需填写。 **约束限制**： 不涉及。 **取值范围**： 字符长度0-64位 **默认取值**： 不涉及
    * groupId  **参数解释**： 多场景素材编组。同一group_id的素材，在应用全局时共享位置信息。 **约束限制**： 不涉及。 **取值范围**： 字符长度0-64位 **默认取值**： 不涉及
    * position  position
    * size  size
    * rotation  rotation
    * imageConfig  imageConfig
    * videoConfig  videoConfig
    * textConfig  textConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'layerType' => 'layer_type',
            'assetId' => 'asset_id',
            'groupId' => 'group_id',
            'position' => 'position',
            'size' => 'size',
            'rotation' => 'rotation',
            'imageConfig' => 'image_config',
            'videoConfig' => 'video_config',
            'textConfig' => 'text_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * layerType  **参数解释**： 图层类型。 **约束限制**： 不涉及。 **取值范围**： * HUMAN:  人物图层 * IMAGE： 素材图片图层 * VIDEO： 素材视频图层 * TEXT: 素材文字图层  **默认取值**： 不涉及
    * assetId  **参数解释**： 图层所需资产的资产id，外部资产信息无需填写。 **约束限制**： 不涉及。 **取值范围**： 字符长度0-64位 **默认取值**： 不涉及
    * groupId  **参数解释**： 多场景素材编组。同一group_id的素材，在应用全局时共享位置信息。 **约束限制**： 不涉及。 **取值范围**： 字符长度0-64位 **默认取值**： 不涉及
    * position  position
    * size  size
    * rotation  rotation
    * imageConfig  imageConfig
    * videoConfig  videoConfig
    * textConfig  textConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'layerType' => 'setLayerType',
            'assetId' => 'setAssetId',
            'groupId' => 'setGroupId',
            'position' => 'setPosition',
            'size' => 'setSize',
            'rotation' => 'setRotation',
            'imageConfig' => 'setImageConfig',
            'videoConfig' => 'setVideoConfig',
            'textConfig' => 'setTextConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * layerType  **参数解释**： 图层类型。 **约束限制**： 不涉及。 **取值范围**： * HUMAN:  人物图层 * IMAGE： 素材图片图层 * VIDEO： 素材视频图层 * TEXT: 素材文字图层  **默认取值**： 不涉及
    * assetId  **参数解释**： 图层所需资产的资产id，外部资产信息无需填写。 **约束限制**： 不涉及。 **取值范围**： 字符长度0-64位 **默认取值**： 不涉及
    * groupId  **参数解释**： 多场景素材编组。同一group_id的素材，在应用全局时共享位置信息。 **约束限制**： 不涉及。 **取值范围**： 字符长度0-64位 **默认取值**： 不涉及
    * position  position
    * size  size
    * rotation  rotation
    * imageConfig  imageConfig
    * videoConfig  videoConfig
    * textConfig  textConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'layerType' => 'getLayerType',
            'assetId' => 'getAssetId',
            'groupId' => 'getGroupId',
            'position' => 'getPosition',
            'size' => 'getSize',
            'rotation' => 'getRotation',
            'imageConfig' => 'getImageConfig',
            'videoConfig' => 'getVideoConfig',
            'textConfig' => 'getTextConfig'
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
    const LAYER_TYPE_HUMAN = 'HUMAN';
    const LAYER_TYPE_IMAGE = 'IMAGE';
    const LAYER_TYPE_VIDEO = 'VIDEO';
    const LAYER_TYPE_TEXT = 'TEXT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLayerTypeAllowableValues()
    {
        return [
            self::LAYER_TYPE_HUMAN,
            self::LAYER_TYPE_IMAGE,
            self::LAYER_TYPE_VIDEO,
            self::LAYER_TYPE_TEXT,
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
        $this->container['layerType'] = isset($data['layerType']) ? $data['layerType'] : null;
        $this->container['assetId'] = isset($data['assetId']) ? $data['assetId'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['rotation'] = isset($data['rotation']) ? $data['rotation'] : null;
        $this->container['imageConfig'] = isset($data['imageConfig']) ? $data['imageConfig'] : null;
        $this->container['videoConfig'] = isset($data['videoConfig']) ? $data['videoConfig'] : null;
        $this->container['textConfig'] = isset($data['textConfig']) ? $data['textConfig'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['layerType'] === null) {
            $invalidProperties[] = "'layerType' can't be null";
        }
            $allowedValues = $this->getLayerTypeAllowableValues();
                if (!is_null($this->container['layerType']) && !in_array($this->container['layerType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'layerType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['assetId']) && (mb_strlen($this->container['assetId']) > 64)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['assetId']) && (mb_strlen($this->container['assetId']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 64)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) < 0)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 0.";
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
    * Gets layerType
    *  **参数解释**： 图层类型。 **约束限制**： 不涉及。 **取值范围**： * HUMAN:  人物图层 * IMAGE： 素材图片图层 * VIDEO： 素材视频图层 * TEXT: 素材文字图层  **默认取值**： 不涉及
    *
    * @return string
    */
    public function getLayerType()
    {
        return $this->container['layerType'];
    }

    /**
    * Sets layerType
    *
    * @param string $layerType **参数解释**： 图层类型。 **约束限制**： 不涉及。 **取值范围**： * HUMAN:  人物图层 * IMAGE： 素材图片图层 * VIDEO： 素材视频图层 * TEXT: 素材文字图层  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setLayerType($layerType)
    {
        $this->container['layerType'] = $layerType;
        return $this;
    }

    /**
    * Gets assetId
    *  **参数解释**： 图层所需资产的资产id，外部资产信息无需填写。 **约束限制**： 不涉及。 **取值范围**： 字符长度0-64位 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getAssetId()
    {
        return $this->container['assetId'];
    }

    /**
    * Sets assetId
    *
    * @param string|null $assetId **参数解释**： 图层所需资产的资产id，外部资产信息无需填写。 **约束限制**： 不涉及。 **取值范围**： 字符长度0-64位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAssetId($assetId)
    {
        $this->container['assetId'] = $assetId;
        return $this;
    }

    /**
    * Gets groupId
    *  **参数解释**： 多场景素材编组。同一group_id的素材，在应用全局时共享位置信息。 **约束限制**： 不涉及。 **取值范围**： 字符长度0-64位 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId **参数解释**： 多场景素材编组。同一group_id的素材，在应用全局时共享位置信息。 **约束限制**： 不涉及。 **取值范围**： 字符长度0-64位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets position
    *  position
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\LayerPositionConfig|null
    */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
    * Sets position
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\LayerPositionConfig|null $position position
    *
    * @return $this
    */
    public function setPosition($position)
    {
        $this->container['position'] = $position;
        return $this;
    }

    /**
    * Gets size
    *  size
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\LayerSizeConfig|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\LayerSizeConfig|null $size size
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets rotation
    *  rotation
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\LayerRotationConfig|null
    */
    public function getRotation()
    {
        return $this->container['rotation'];
    }

    /**
    * Sets rotation
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\LayerRotationConfig|null $rotation rotation
    *
    * @return $this
    */
    public function setRotation($rotation)
    {
        $this->container['rotation'] = $rotation;
        return $this;
    }

    /**
    * Gets imageConfig
    *  imageConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ImageLayerConfig|null
    */
    public function getImageConfig()
    {
        return $this->container['imageConfig'];
    }

    /**
    * Sets imageConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ImageLayerConfig|null $imageConfig imageConfig
    *
    * @return $this
    */
    public function setImageConfig($imageConfig)
    {
        $this->container['imageConfig'] = $imageConfig;
        return $this;
    }

    /**
    * Gets videoConfig
    *  videoConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\VideoLayerConfig|null
    */
    public function getVideoConfig()
    {
        return $this->container['videoConfig'];
    }

    /**
    * Sets videoConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\VideoLayerConfig|null $videoConfig videoConfig
    *
    * @return $this
    */
    public function setVideoConfig($videoConfig)
    {
        $this->container['videoConfig'] = $videoConfig;
        return $this;
    }

    /**
    * Gets textConfig
    *  textConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\TextLayerConfig|null
    */
    public function getTextConfig()
    {
        return $this->container['textConfig'];
    }

    /**
    * Sets textConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\TextLayerConfig|null $textConfig textConfig
    *
    * @return $this
    */
    public function setTextConfig($textConfig)
    {
        $this->container['textConfig'] = $textConfig;
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

