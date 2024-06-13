<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProductMediaInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProductMediaInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * assetId  资产ID
    * assetType  资产类型 * IMAGE：图片 * VIDEO：视频 * AUDIO：音频
    * order  资产次序。不设置或者0表示按照加入时间先后排序。业务上将次序最靠前的图片设置为商品封面。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'assetId' => 'string',
            'assetType' => 'string',
            'order' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * assetId  资产ID
    * assetType  资产类型 * IMAGE：图片 * VIDEO：视频 * AUDIO：音频
    * order  资产次序。不设置或者0表示按照加入时间先后排序。业务上将次序最靠前的图片设置为商品封面。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'assetId' => null,
        'assetType' => null,
        'order' => null
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
    * order  资产次序。不设置或者0表示按照加入时间先后排序。业务上将次序最靠前的图片设置为商品封面。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'assetId' => 'asset_id',
            'assetType' => 'asset_type',
            'order' => 'order'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * assetId  资产ID
    * assetType  资产类型 * IMAGE：图片 * VIDEO：视频 * AUDIO：音频
    * order  资产次序。不设置或者0表示按照加入时间先后排序。业务上将次序最靠前的图片设置为商品封面。
    *
    * @var string[]
    */
    protected static $setters = [
            'assetId' => 'setAssetId',
            'assetType' => 'setAssetType',
            'order' => 'setOrder'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * assetId  资产ID
    * assetType  资产类型 * IMAGE：图片 * VIDEO：视频 * AUDIO：音频
    * order  资产次序。不设置或者0表示按照加入时间先后排序。业务上将次序最靠前的图片设置为商品封面。
    *
    * @var string[]
    */
    protected static $getters = [
            'assetId' => 'getAssetId',
            'assetType' => 'getAssetType',
            'order' => 'getOrder'
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
    *  资产次序。不设置或者0表示按照加入时间先后排序。业务上将次序最靠前的图片设置为商品封面。
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
    * @param int|null $order 资产次序。不设置或者0表示按照加入时间先后排序。业务上将次序最靠前的图片设置为商品封面。
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
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

