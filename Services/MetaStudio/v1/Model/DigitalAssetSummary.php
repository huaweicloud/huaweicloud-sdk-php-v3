<?php

namespace HuaweiCloud\SDK\MetaStudio\v1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DigitalAssetSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DigitalAssetSummary';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * assetId  资产ID。
    * assetName  资产名称。
    * assetType  资产类型。 * HUMAN_MODEL：数字人模型 * VOICE_MODEL：音色模型 * SCENE：场景模型 * ANIMATION：动作动画 * VIDEO：视频文件 * IMAGE：图片文件 * PPT：幻灯片文件 * MATERIAL：风格化素材 * HUMAN_MODEL_2D:2D数字人网络模型 * BUSINESS_CARD_TEMPLET: 数字人名片模板 * MUSIC: 音乐
    * coverUrl  封面图片路径。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'assetId' => 'string',
            'assetName' => 'string',
            'assetType' => 'string',
            'coverUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * assetId  资产ID。
    * assetName  资产名称。
    * assetType  资产类型。 * HUMAN_MODEL：数字人模型 * VOICE_MODEL：音色模型 * SCENE：场景模型 * ANIMATION：动作动画 * VIDEO：视频文件 * IMAGE：图片文件 * PPT：幻灯片文件 * MATERIAL：风格化素材 * HUMAN_MODEL_2D:2D数字人网络模型 * BUSINESS_CARD_TEMPLET: 数字人名片模板 * MUSIC: 音乐
    * coverUrl  封面图片路径。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'assetId' => null,
        'assetName' => null,
        'assetType' => null,
        'coverUrl' => null
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
    * assetId  资产ID。
    * assetName  资产名称。
    * assetType  资产类型。 * HUMAN_MODEL：数字人模型 * VOICE_MODEL：音色模型 * SCENE：场景模型 * ANIMATION：动作动画 * VIDEO：视频文件 * IMAGE：图片文件 * PPT：幻灯片文件 * MATERIAL：风格化素材 * HUMAN_MODEL_2D:2D数字人网络模型 * BUSINESS_CARD_TEMPLET: 数字人名片模板 * MUSIC: 音乐
    * coverUrl  封面图片路径。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'assetId' => 'asset_id',
            'assetName' => 'asset_name',
            'assetType' => 'asset_type',
            'coverUrl' => 'cover_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * assetId  资产ID。
    * assetName  资产名称。
    * assetType  资产类型。 * HUMAN_MODEL：数字人模型 * VOICE_MODEL：音色模型 * SCENE：场景模型 * ANIMATION：动作动画 * VIDEO：视频文件 * IMAGE：图片文件 * PPT：幻灯片文件 * MATERIAL：风格化素材 * HUMAN_MODEL_2D:2D数字人网络模型 * BUSINESS_CARD_TEMPLET: 数字人名片模板 * MUSIC: 音乐
    * coverUrl  封面图片路径。
    *
    * @var string[]
    */
    protected static $setters = [
            'assetId' => 'setAssetId',
            'assetName' => 'setAssetName',
            'assetType' => 'setAssetType',
            'coverUrl' => 'setCoverUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * assetId  资产ID。
    * assetName  资产名称。
    * assetType  资产类型。 * HUMAN_MODEL：数字人模型 * VOICE_MODEL：音色模型 * SCENE：场景模型 * ANIMATION：动作动画 * VIDEO：视频文件 * IMAGE：图片文件 * PPT：幻灯片文件 * MATERIAL：风格化素材 * HUMAN_MODEL_2D:2D数字人网络模型 * BUSINESS_CARD_TEMPLET: 数字人名片模板 * MUSIC: 音乐
    * coverUrl  封面图片路径。
    *
    * @var string[]
    */
    protected static $getters = [
            'assetId' => 'getAssetId',
            'assetName' => 'getAssetName',
            'assetType' => 'getAssetType',
            'coverUrl' => 'getCoverUrl'
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
    const ASSET_TYPE_HUMAN_MODEL = 'HUMAN_MODEL';
    const ASSET_TYPE_MODEL = 'MODEL';
    const ASSET_TYPE_ANIMATION = 'ANIMATION';
    const ASSET_TYPE_SCENE = 'SCENE';
    const ASSET_TYPE_PPT = 'PPT';
    const ASSET_TYPE_VIDEO = 'VIDEO';
    const ASSET_TYPE_IMAGE = 'IMAGE';
    const ASSET_TYPE_MATERIAL = 'MATERIAL';
    const ASSET_TYPE_VOICE_MODEL = 'VOICE_MODEL';
    const ASSET_TYPE_HUMAN_MODEL_2_D = 'HUMAN_MODEL_2D';
    const ASSET_TYPE_BUSINESS_CARD_TEMPLET = 'BUSINESS_CARD_TEMPLET';
    const ASSET_TYPE_MUSIC = 'MUSIC';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAssetTypeAllowableValues()
    {
        return [
            self::ASSET_TYPE_HUMAN_MODEL,
            self::ASSET_TYPE_MODEL,
            self::ASSET_TYPE_ANIMATION,
            self::ASSET_TYPE_SCENE,
            self::ASSET_TYPE_PPT,
            self::ASSET_TYPE_VIDEO,
            self::ASSET_TYPE_IMAGE,
            self::ASSET_TYPE_MATERIAL,
            self::ASSET_TYPE_VOICE_MODEL,
            self::ASSET_TYPE_HUMAN_MODEL_2_D,
            self::ASSET_TYPE_BUSINESS_CARD_TEMPLET,
            self::ASSET_TYPE_MUSIC,
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
        $this->container['assetId'] = isset($data['assetId']) ? $data['assetId'] : null;
        $this->container['assetName'] = isset($data['assetName']) ? $data['assetName'] : null;
        $this->container['assetType'] = isset($data['assetType']) ? $data['assetType'] : null;
        $this->container['coverUrl'] = isset($data['coverUrl']) ? $data['coverUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['assetId']) && (mb_strlen($this->container['assetId']) > 2048)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['assetId']) && (mb_strlen($this->container['assetId']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetName']) && (mb_strlen($this->container['assetName']) > 2048)) {
                $invalidProperties[] = "invalid value for 'assetName', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['assetName']) && (mb_strlen($this->container['assetName']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetName', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getAssetTypeAllowableValues();
                if (!is_null($this->container['assetType']) && !in_array($this->container['assetType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'assetType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['coverUrl']) && (mb_strlen($this->container['coverUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'coverUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['coverUrl']) && (mb_strlen($this->container['coverUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'coverUrl', the character length must be bigger than or equal to 0.";
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
    * Gets assetId
    *  资产ID。
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
    * @param string|null $assetId 资产ID。
    *
    * @return $this
    */
    public function setAssetId($assetId)
    {
        $this->container['assetId'] = $assetId;
        return $this;
    }

    /**
    * Gets assetName
    *  资产名称。
    *
    * @return string|null
    */
    public function getAssetName()
    {
        return $this->container['assetName'];
    }

    /**
    * Sets assetName
    *
    * @param string|null $assetName 资产名称。
    *
    * @return $this
    */
    public function setAssetName($assetName)
    {
        $this->container['assetName'] = $assetName;
        return $this;
    }

    /**
    * Gets assetType
    *  资产类型。 * HUMAN_MODEL：数字人模型 * VOICE_MODEL：音色模型 * SCENE：场景模型 * ANIMATION：动作动画 * VIDEO：视频文件 * IMAGE：图片文件 * PPT：幻灯片文件 * MATERIAL：风格化素材 * HUMAN_MODEL_2D:2D数字人网络模型 * BUSINESS_CARD_TEMPLET: 数字人名片模板 * MUSIC: 音乐
    *
    * @return string|null
    */
    public function getAssetType()
    {
        return $this->container['assetType'];
    }

    /**
    * Sets assetType
    *
    * @param string|null $assetType 资产类型。 * HUMAN_MODEL：数字人模型 * VOICE_MODEL：音色模型 * SCENE：场景模型 * ANIMATION：动作动画 * VIDEO：视频文件 * IMAGE：图片文件 * PPT：幻灯片文件 * MATERIAL：风格化素材 * HUMAN_MODEL_2D:2D数字人网络模型 * BUSINESS_CARD_TEMPLET: 数字人名片模板 * MUSIC: 音乐
    *
    * @return $this
    */
    public function setAssetType($assetType)
    {
        $this->container['assetType'] = $assetType;
        return $this;
    }

    /**
    * Gets coverUrl
    *  封面图片路径。
    *
    * @return string|null
    */
    public function getCoverUrl()
    {
        return $this->container['coverUrl'];
    }

    /**
    * Sets coverUrl
    *
    * @param string|null $coverUrl 封面图片路径。
    *
    * @return $this
    */
    public function setCoverUrl($coverUrl)
    {
        $this->container['coverUrl'] = $coverUrl;
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

