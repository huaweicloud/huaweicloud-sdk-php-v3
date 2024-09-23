<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProductMediaDetailInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProductMediaDetailInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * assetId  资产ID
    * assetType  资产类型 * IMAGE：图片 * VIDEO：视频 * AUDIO：音频
    * order  **参数解释**： 资产次序。不设置或者0表示按照加入时间先后排序。业务上将次序最靠前的图片设置为商品封面。
    * assetName  资产名称。
    * assetState  资产状态。
    * coverUrl  封面图片路径。
    * thumbnailUrl  缩略图路径。
    * mainUrl  缩略图路径。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'assetId' => 'string',
            'assetType' => 'string',
            'order' => 'int',
            'assetName' => 'string',
            'assetState' => 'string',
            'coverUrl' => 'string',
            'thumbnailUrl' => 'string',
            'mainUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * assetId  资产ID
    * assetType  资产类型 * IMAGE：图片 * VIDEO：视频 * AUDIO：音频
    * order  **参数解释**： 资产次序。不设置或者0表示按照加入时间先后排序。业务上将次序最靠前的图片设置为商品封面。
    * assetName  资产名称。
    * assetState  资产状态。
    * coverUrl  封面图片路径。
    * thumbnailUrl  缩略图路径。
    * mainUrl  缩略图路径。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'assetId' => null,
        'assetType' => null,
        'order' => null,
        'assetName' => null,
        'assetState' => null,
        'coverUrl' => null,
        'thumbnailUrl' => null,
        'mainUrl' => null
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
    * assetId  资产ID
    * assetType  资产类型 * IMAGE：图片 * VIDEO：视频 * AUDIO：音频
    * order  **参数解释**： 资产次序。不设置或者0表示按照加入时间先后排序。业务上将次序最靠前的图片设置为商品封面。
    * assetName  资产名称。
    * assetState  资产状态。
    * coverUrl  封面图片路径。
    * thumbnailUrl  缩略图路径。
    * mainUrl  缩略图路径。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'assetId' => 'asset_id',
            'assetType' => 'asset_type',
            'order' => 'order',
            'assetName' => 'asset_name',
            'assetState' => 'asset_state',
            'coverUrl' => 'cover_url',
            'thumbnailUrl' => 'thumbnail_url',
            'mainUrl' => 'main_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * assetId  资产ID
    * assetType  资产类型 * IMAGE：图片 * VIDEO：视频 * AUDIO：音频
    * order  **参数解释**： 资产次序。不设置或者0表示按照加入时间先后排序。业务上将次序最靠前的图片设置为商品封面。
    * assetName  资产名称。
    * assetState  资产状态。
    * coverUrl  封面图片路径。
    * thumbnailUrl  缩略图路径。
    * mainUrl  缩略图路径。
    *
    * @var string[]
    */
    protected static $setters = [
            'assetId' => 'setAssetId',
            'assetType' => 'setAssetType',
            'order' => 'setOrder',
            'assetName' => 'setAssetName',
            'assetState' => 'setAssetState',
            'coverUrl' => 'setCoverUrl',
            'thumbnailUrl' => 'setThumbnailUrl',
            'mainUrl' => 'setMainUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * assetId  资产ID
    * assetType  资产类型 * IMAGE：图片 * VIDEO：视频 * AUDIO：音频
    * order  **参数解释**： 资产次序。不设置或者0表示按照加入时间先后排序。业务上将次序最靠前的图片设置为商品封面。
    * assetName  资产名称。
    * assetState  资产状态。
    * coverUrl  封面图片路径。
    * thumbnailUrl  缩略图路径。
    * mainUrl  缩略图路径。
    *
    * @var string[]
    */
    protected static $getters = [
            'assetId' => 'getAssetId',
            'assetType' => 'getAssetType',
            'order' => 'getOrder',
            'assetName' => 'getAssetName',
            'assetState' => 'getAssetState',
            'coverUrl' => 'getCoverUrl',
            'thumbnailUrl' => 'getThumbnailUrl',
            'mainUrl' => 'getMainUrl'
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
    const ASSET_TYPE_IMAGE = 'IMAGE';
    const ASSET_TYPE_VIDEO = 'VIDEO';
    const ASSET_TYPE_AUDIO = 'AUDIO';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAssetTypeAllowableValues()
    {
        return [
            self::ASSET_TYPE_IMAGE,
            self::ASSET_TYPE_VIDEO,
            self::ASSET_TYPE_AUDIO,
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
        $this->container['assetType'] = isset($data['assetType']) ? $data['assetType'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['assetName'] = isset($data['assetName']) ? $data['assetName'] : null;
        $this->container['assetState'] = isset($data['assetState']) ? $data['assetState'] : null;
        $this->container['coverUrl'] = isset($data['coverUrl']) ? $data['coverUrl'] : null;
        $this->container['thumbnailUrl'] = isset($data['thumbnailUrl']) ? $data['thumbnailUrl'] : null;
        $this->container['mainUrl'] = isset($data['mainUrl']) ? $data['mainUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['assetId']) && (mb_strlen($this->container['assetId']) > 64)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['assetId']) && (mb_strlen($this->container['assetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getAssetTypeAllowableValues();
                if (!is_null($this->container['assetType']) && !in_array($this->container['assetType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'assetType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['assetType']) && (mb_strlen($this->container['assetType']) > 32)) {
                $invalidProperties[] = "invalid value for 'assetType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['assetType']) && (mb_strlen($this->container['assetType']) < 1)) {
                $invalidProperties[] = "invalid value for 'assetType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['order']) && ($this->container['order'] > 300)) {
                $invalidProperties[] = "invalid value for 'order', must be smaller than or equal to 300.";
            }
            if (!is_null($this->container['order']) && ($this->container['order'] < 0)) {
                $invalidProperties[] = "invalid value for 'order', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetName']) && (mb_strlen($this->container['assetName']) > 2048)) {
                $invalidProperties[] = "invalid value for 'assetName', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['assetName']) && (mb_strlen($this->container['assetName']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetState']) && (mb_strlen($this->container['assetState']) > 32)) {
                $invalidProperties[] = "invalid value for 'assetState', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['assetState']) && (mb_strlen($this->container['assetState']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetState', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['coverUrl']) && (mb_strlen($this->container['coverUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'coverUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['coverUrl']) && (mb_strlen($this->container['coverUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'coverUrl', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['thumbnailUrl']) && (mb_strlen($this->container['thumbnailUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'thumbnailUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['thumbnailUrl']) && (mb_strlen($this->container['thumbnailUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'thumbnailUrl', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['mainUrl']) && (mb_strlen($this->container['mainUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'mainUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['mainUrl']) && (mb_strlen($this->container['mainUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'mainUrl', the character length must be bigger than or equal to 0.";
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
    *  资产ID
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
    * @param string|null $assetId 资产ID
    *
    * @return $this
    */
    public function setAssetId($assetId)
    {
        $this->container['assetId'] = $assetId;
        return $this;
    }

    /**
    * Gets assetType
    *  资产类型 * IMAGE：图片 * VIDEO：视频 * AUDIO：音频
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
    * @param string|null $assetType 资产类型 * IMAGE：图片 * VIDEO：视频 * AUDIO：音频
    *
    * @return $this
    */
    public function setAssetType($assetType)
    {
        $this->container['assetType'] = $assetType;
        return $this;
    }

    /**
    * Gets order
    *  **参数解释**： 资产次序。不设置或者0表示按照加入时间先后排序。业务上将次序最靠前的图片设置为商品封面。
    *
    * @return int|null
    */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
    * Sets order
    *
    * @param int|null $order **参数解释**： 资产次序。不设置或者0表示按照加入时间先后排序。业务上将次序最靠前的图片设置为商品封面。
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
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
    * Gets assetState
    *  资产状态。
    *
    * @return string|null
    */
    public function getAssetState()
    {
        return $this->container['assetState'];
    }

    /**
    * Sets assetState
    *
    * @param string|null $assetState 资产状态。
    *
    * @return $this
    */
    public function setAssetState($assetState)
    {
        $this->container['assetState'] = $assetState;
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
    * Gets thumbnailUrl
    *  缩略图路径。
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
    * @param string|null $thumbnailUrl 缩略图路径。
    *
    * @return $this
    */
    public function setThumbnailUrl($thumbnailUrl)
    {
        $this->container['thumbnailUrl'] = $thumbnailUrl;
        return $this;
    }

    /**
    * Gets mainUrl
    *  缩略图路径。
    *
    * @return string|null
    */
    public function getMainUrl()
    {
        return $this->container['mainUrl'];
    }

    /**
    * Sets mainUrl
    *
    * @param string|null $mainUrl 缩略图路径。
    *
    * @return $this
    */
    public function setMainUrl($mainUrl)
    {
        $this->container['mainUrl'] = $mainUrl;
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

