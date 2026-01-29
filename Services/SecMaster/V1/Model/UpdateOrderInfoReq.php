<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateOrderInfoReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateOrderInfoReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scene  操作场景，包周期场景：PREPAID 或者 按需场景：POSTPAID
    * operateType  按需或者包周期场景下，要进行的操作类型 比如增减配额，规格升降配，按需转包周期 规格升级：UPGRADE，配额增加：ADDITION，配额减少：DECREASE，按需转包周期：POSTPAID_2_PREPAID 注：目前不支持规格降级，比如不支持从专业版降级为标准版或基础版
    * promotionInfo  促销折扣信息
    * tagList  计费标签
    * productList  要进行变更的商品列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scene' => 'string',
            'operateType' => 'string',
            'promotionInfo' => 'string',
            'tagList' => '\HuaweiCloud\SDK\SecMaster\V1\Model\SubscriptionTag[]',
            'productList' => '\HuaweiCloud\SDK\SecMaster\V1\Model\UpdateProduct[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scene  操作场景，包周期场景：PREPAID 或者 按需场景：POSTPAID
    * operateType  按需或者包周期场景下，要进行的操作类型 比如增减配额，规格升降配，按需转包周期 规格升级：UPGRADE，配额增加：ADDITION，配额减少：DECREASE，按需转包周期：POSTPAID_2_PREPAID 注：目前不支持规格降级，比如不支持从专业版降级为标准版或基础版
    * promotionInfo  促销折扣信息
    * tagList  计费标签
    * productList  要进行变更的商品列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scene' => null,
        'operateType' => null,
        'promotionInfo' => null,
        'tagList' => null,
        'productList' => null
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
    * scene  操作场景，包周期场景：PREPAID 或者 按需场景：POSTPAID
    * operateType  按需或者包周期场景下，要进行的操作类型 比如增减配额，规格升降配，按需转包周期 规格升级：UPGRADE，配额增加：ADDITION，配额减少：DECREASE，按需转包周期：POSTPAID_2_PREPAID 注：目前不支持规格降级，比如不支持从专业版降级为标准版或基础版
    * promotionInfo  促销折扣信息
    * tagList  计费标签
    * productList  要进行变更的商品列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scene' => 'scene',
            'operateType' => 'operate_type',
            'promotionInfo' => 'promotion_info',
            'tagList' => 'tag_list',
            'productList' => 'product_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scene  操作场景，包周期场景：PREPAID 或者 按需场景：POSTPAID
    * operateType  按需或者包周期场景下，要进行的操作类型 比如增减配额，规格升降配，按需转包周期 规格升级：UPGRADE，配额增加：ADDITION，配额减少：DECREASE，按需转包周期：POSTPAID_2_PREPAID 注：目前不支持规格降级，比如不支持从专业版降级为标准版或基础版
    * promotionInfo  促销折扣信息
    * tagList  计费标签
    * productList  要进行变更的商品列表
    *
    * @var string[]
    */
    protected static $setters = [
            'scene' => 'setScene',
            'operateType' => 'setOperateType',
            'promotionInfo' => 'setPromotionInfo',
            'tagList' => 'setTagList',
            'productList' => 'setProductList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scene  操作场景，包周期场景：PREPAID 或者 按需场景：POSTPAID
    * operateType  按需或者包周期场景下，要进行的操作类型 比如增减配额，规格升降配，按需转包周期 规格升级：UPGRADE，配额增加：ADDITION，配额减少：DECREASE，按需转包周期：POSTPAID_2_PREPAID 注：目前不支持规格降级，比如不支持从专业版降级为标准版或基础版
    * promotionInfo  促销折扣信息
    * tagList  计费标签
    * productList  要进行变更的商品列表
    *
    * @var string[]
    */
    protected static $getters = [
            'scene' => 'getScene',
            'operateType' => 'getOperateType',
            'promotionInfo' => 'getPromotionInfo',
            'tagList' => 'getTagList',
            'productList' => 'getProductList'
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
    const SCENE_PREPAID = 'PREPAID';
    const SCENE_POSTPAID = 'POSTPAID';
    const OPERATE_TYPE_UPGRADE = 'UPGRADE';
    const OPERATE_TYPE_ADDITION = 'ADDITION';
    const OPERATE_TYPE_DECREASE = 'DECREASE';
    const OPERATE_TYPE_POSTPAID_2_PREPAID = 'POSTPAID_2_PREPAID';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSceneAllowableValues()
    {
        return [
            self::SCENE_PREPAID,
            self::SCENE_POSTPAID,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOperateTypeAllowableValues()
    {
        return [
            self::OPERATE_TYPE_UPGRADE,
            self::OPERATE_TYPE_ADDITION,
            self::OPERATE_TYPE_DECREASE,
            self::OPERATE_TYPE_POSTPAID_2_PREPAID,
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
        $this->container['scene'] = isset($data['scene']) ? $data['scene'] : null;
        $this->container['operateType'] = isset($data['operateType']) ? $data['operateType'] : null;
        $this->container['promotionInfo'] = isset($data['promotionInfo']) ? $data['promotionInfo'] : null;
        $this->container['tagList'] = isset($data['tagList']) ? $data['tagList'] : null;
        $this->container['productList'] = isset($data['productList']) ? $data['productList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['scene'] === null) {
            $invalidProperties[] = "'scene' can't be null";
        }
            $allowedValues = $this->getSceneAllowableValues();
                if (!is_null($this->container['scene']) && !in_array($this->container['scene'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'scene', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['scene']) > 20)) {
                $invalidProperties[] = "invalid value for 'scene', the character length must be smaller than or equal to 20.";
            }
            if ((mb_strlen($this->container['scene']) < 2)) {
                $invalidProperties[] = "invalid value for 'scene', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['operateType'] === null) {
            $invalidProperties[] = "'operateType' can't be null";
        }
            $allowedValues = $this->getOperateTypeAllowableValues();
                if (!is_null($this->container['operateType']) && !in_array($this->container['operateType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'operateType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['operateType']) > 10)) {
                $invalidProperties[] = "invalid value for 'operateType', the character length must be smaller than or equal to 10.";
            }
            if ((mb_strlen($this->container['operateType']) < 2)) {
                $invalidProperties[] = "invalid value for 'operateType', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['promotionInfo']) && (mb_strlen($this->container['promotionInfo']) > 64)) {
                $invalidProperties[] = "invalid value for 'promotionInfo', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['promotionInfo']) && (mb_strlen($this->container['promotionInfo']) < 2)) {
                $invalidProperties[] = "invalid value for 'promotionInfo', the character length must be bigger than or equal to 2.";
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
    * Gets scene
    *  操作场景，包周期场景：PREPAID 或者 按需场景：POSTPAID
    *
    * @return string
    */
    public function getScene()
    {
        return $this->container['scene'];
    }

    /**
    * Sets scene
    *
    * @param string $scene 操作场景，包周期场景：PREPAID 或者 按需场景：POSTPAID
    *
    * @return $this
    */
    public function setScene($scene)
    {
        $this->container['scene'] = $scene;
        return $this;
    }

    /**
    * Gets operateType
    *  按需或者包周期场景下，要进行的操作类型 比如增减配额，规格升降配，按需转包周期 规格升级：UPGRADE，配额增加：ADDITION，配额减少：DECREASE，按需转包周期：POSTPAID_2_PREPAID 注：目前不支持规格降级，比如不支持从专业版降级为标准版或基础版
    *
    * @return string
    */
    public function getOperateType()
    {
        return $this->container['operateType'];
    }

    /**
    * Sets operateType
    *
    * @param string $operateType 按需或者包周期场景下，要进行的操作类型 比如增减配额，规格升降配，按需转包周期 规格升级：UPGRADE，配额增加：ADDITION，配额减少：DECREASE，按需转包周期：POSTPAID_2_PREPAID 注：目前不支持规格降级，比如不支持从专业版降级为标准版或基础版
    *
    * @return $this
    */
    public function setOperateType($operateType)
    {
        $this->container['operateType'] = $operateType;
        return $this;
    }

    /**
    * Gets promotionInfo
    *  促销折扣信息
    *
    * @return string|null
    */
    public function getPromotionInfo()
    {
        return $this->container['promotionInfo'];
    }

    /**
    * Sets promotionInfo
    *
    * @param string|null $promotionInfo 促销折扣信息
    *
    * @return $this
    */
    public function setPromotionInfo($promotionInfo)
    {
        $this->container['promotionInfo'] = $promotionInfo;
        return $this;
    }

    /**
    * Gets tagList
    *  计费标签
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\SubscriptionTag[]|null
    */
    public function getTagList()
    {
        return $this->container['tagList'];
    }

    /**
    * Sets tagList
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\SubscriptionTag[]|null $tagList 计费标签
    *
    * @return $this
    */
    public function setTagList($tagList)
    {
        $this->container['tagList'] = $tagList;
        return $this;
    }

    /**
    * Gets productList
    *  要进行变更的商品列表
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\UpdateProduct[]|null
    */
    public function getProductList()
    {
        return $this->container['productList'];
    }

    /**
    * Sets productList
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\UpdateProduct[]|null $productList 要进行变更的商品列表
    *
    * @return $this
    */
    public function setProductList($productList)
    {
        $this->container['productList'] = $productList;
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

