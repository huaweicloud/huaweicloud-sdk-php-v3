<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListBusinessDiscountInfoResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListBusinessDiscountInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalCount  总条数
    * commerceId  商务ID
    * commerceCode  商务编号
    * effectiveTime  商务生效时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    * expireTime  商务失效时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    * productQuotingItems  产品报价项列表（quoting_item_type=PRODUCT_ITEM时有值返回，否则返回空列表）
    * categoryQuotingItems  分类报价项列表（quoting_item_type=CATEGORY_ITEM时有值返回，否则返回空列表）
    * categoryQuotingItemSteps  分类报价项阶梯列表（quoting_item_type=CATEGORY_ITEM时有值返回，否则返回空列表）
    * accumulationCycleType  阶梯累计周期类型，category_quoting_item_steps有值返回时返回
    * sites  运营站点列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalCount' => 'int',
            'commerceId' => 'string',
            'commerceCode' => 'string',
            'effectiveTime' => 'string',
            'expireTime' => 'string',
            'productQuotingItems' => '\HuaweiCloud\SDK\Bss\V2\Model\ProductQuotingItem[]',
            'categoryQuotingItems' => '\HuaweiCloud\SDK\Bss\V2\Model\CategoryQuotingItem[]',
            'categoryQuotingItemSteps' => '\HuaweiCloud\SDK\Bss\V2\Model\CategoryQuotingItemStep[]',
            'accumulationCycleType' => 'string',
            'sites' => '\HuaweiCloud\SDK\Bss\V2\Model\SiteInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalCount  总条数
    * commerceId  商务ID
    * commerceCode  商务编号
    * effectiveTime  商务生效时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    * expireTime  商务失效时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    * productQuotingItems  产品报价项列表（quoting_item_type=PRODUCT_ITEM时有值返回，否则返回空列表）
    * categoryQuotingItems  分类报价项列表（quoting_item_type=CATEGORY_ITEM时有值返回，否则返回空列表）
    * categoryQuotingItemSteps  分类报价项阶梯列表（quoting_item_type=CATEGORY_ITEM时有值返回，否则返回空列表）
    * accumulationCycleType  阶梯累计周期类型，category_quoting_item_steps有值返回时返回
    * sites  运营站点列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalCount' => 'int32',
        'commerceId' => null,
        'commerceCode' => null,
        'effectiveTime' => null,
        'expireTime' => null,
        'productQuotingItems' => null,
        'categoryQuotingItems' => null,
        'categoryQuotingItemSteps' => null,
        'accumulationCycleType' => null,
        'sites' => null
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
    * totalCount  总条数
    * commerceId  商务ID
    * commerceCode  商务编号
    * effectiveTime  商务生效时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    * expireTime  商务失效时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    * productQuotingItems  产品报价项列表（quoting_item_type=PRODUCT_ITEM时有值返回，否则返回空列表）
    * categoryQuotingItems  分类报价项列表（quoting_item_type=CATEGORY_ITEM时有值返回，否则返回空列表）
    * categoryQuotingItemSteps  分类报价项阶梯列表（quoting_item_type=CATEGORY_ITEM时有值返回，否则返回空列表）
    * accumulationCycleType  阶梯累计周期类型，category_quoting_item_steps有值返回时返回
    * sites  运营站点列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalCount' => 'total_count',
            'commerceId' => 'commerce_id',
            'commerceCode' => 'commerce_code',
            'effectiveTime' => 'effective_time',
            'expireTime' => 'expire_time',
            'productQuotingItems' => 'product_quoting_items',
            'categoryQuotingItems' => 'category_quoting_items',
            'categoryQuotingItemSteps' => 'category_quoting_item_steps',
            'accumulationCycleType' => 'accumulation_cycle_type',
            'sites' => 'sites'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalCount  总条数
    * commerceId  商务ID
    * commerceCode  商务编号
    * effectiveTime  商务生效时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    * expireTime  商务失效时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    * productQuotingItems  产品报价项列表（quoting_item_type=PRODUCT_ITEM时有值返回，否则返回空列表）
    * categoryQuotingItems  分类报价项列表（quoting_item_type=CATEGORY_ITEM时有值返回，否则返回空列表）
    * categoryQuotingItemSteps  分类报价项阶梯列表（quoting_item_type=CATEGORY_ITEM时有值返回，否则返回空列表）
    * accumulationCycleType  阶梯累计周期类型，category_quoting_item_steps有值返回时返回
    * sites  运营站点列表
    *
    * @var string[]
    */
    protected static $setters = [
            'totalCount' => 'setTotalCount',
            'commerceId' => 'setCommerceId',
            'commerceCode' => 'setCommerceCode',
            'effectiveTime' => 'setEffectiveTime',
            'expireTime' => 'setExpireTime',
            'productQuotingItems' => 'setProductQuotingItems',
            'categoryQuotingItems' => 'setCategoryQuotingItems',
            'categoryQuotingItemSteps' => 'setCategoryQuotingItemSteps',
            'accumulationCycleType' => 'setAccumulationCycleType',
            'sites' => 'setSites'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalCount  总条数
    * commerceId  商务ID
    * commerceCode  商务编号
    * effectiveTime  商务生效时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    * expireTime  商务失效时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    * productQuotingItems  产品报价项列表（quoting_item_type=PRODUCT_ITEM时有值返回，否则返回空列表）
    * categoryQuotingItems  分类报价项列表（quoting_item_type=CATEGORY_ITEM时有值返回，否则返回空列表）
    * categoryQuotingItemSteps  分类报价项阶梯列表（quoting_item_type=CATEGORY_ITEM时有值返回，否则返回空列表）
    * accumulationCycleType  阶梯累计周期类型，category_quoting_item_steps有值返回时返回
    * sites  运营站点列表
    *
    * @var string[]
    */
    protected static $getters = [
            'totalCount' => 'getTotalCount',
            'commerceId' => 'getCommerceId',
            'commerceCode' => 'getCommerceCode',
            'effectiveTime' => 'getEffectiveTime',
            'expireTime' => 'getExpireTime',
            'productQuotingItems' => 'getProductQuotingItems',
            'categoryQuotingItems' => 'getCategoryQuotingItems',
            'categoryQuotingItemSteps' => 'getCategoryQuotingItemSteps',
            'accumulationCycleType' => 'getAccumulationCycleType',
            'sites' => 'getSites'
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
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['commerceId'] = isset($data['commerceId']) ? $data['commerceId'] : null;
        $this->container['commerceCode'] = isset($data['commerceCode']) ? $data['commerceCode'] : null;
        $this->container['effectiveTime'] = isset($data['effectiveTime']) ? $data['effectiveTime'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['productQuotingItems'] = isset($data['productQuotingItems']) ? $data['productQuotingItems'] : null;
        $this->container['categoryQuotingItems'] = isset($data['categoryQuotingItems']) ? $data['categoryQuotingItems'] : null;
        $this->container['categoryQuotingItemSteps'] = isset($data['categoryQuotingItemSteps']) ? $data['categoryQuotingItemSteps'] : null;
        $this->container['accumulationCycleType'] = isset($data['accumulationCycleType']) ? $data['accumulationCycleType'] : null;
        $this->container['sites'] = isset($data['sites']) ? $data['sites'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['commerceId']) && (mb_strlen($this->container['commerceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'commerceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['commerceId']) && (mb_strlen($this->container['commerceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'commerceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['commerceCode']) && (mb_strlen($this->container['commerceCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'commerceCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['commerceCode']) && (mb_strlen($this->container['commerceCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'commerceCode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['effectiveTime']) && (mb_strlen($this->container['effectiveTime']) > 32)) {
                $invalidProperties[] = "invalid value for 'effectiveTime', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['effectiveTime']) && (mb_strlen($this->container['effectiveTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'effectiveTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['expireTime']) && (mb_strlen($this->container['expireTime']) > 32)) {
                $invalidProperties[] = "invalid value for 'expireTime', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['expireTime']) && (mb_strlen($this->container['expireTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'expireTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['accumulationCycleType']) && (mb_strlen($this->container['accumulationCycleType']) > 32)) {
                $invalidProperties[] = "invalid value for 'accumulationCycleType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['accumulationCycleType']) && (mb_strlen($this->container['accumulationCycleType']) < 0)) {
                $invalidProperties[] = "invalid value for 'accumulationCycleType', the character length must be bigger than or equal to 0.";
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
    * Gets totalCount
    *  总条数
    *
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount 总条数
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets commerceId
    *  商务ID
    *
    * @return string|null
    */
    public function getCommerceId()
    {
        return $this->container['commerceId'];
    }

    /**
    * Sets commerceId
    *
    * @param string|null $commerceId 商务ID
    *
    * @return $this
    */
    public function setCommerceId($commerceId)
    {
        $this->container['commerceId'] = $commerceId;
        return $this;
    }

    /**
    * Gets commerceCode
    *  商务编号
    *
    * @return string|null
    */
    public function getCommerceCode()
    {
        return $this->container['commerceCode'];
    }

    /**
    * Sets commerceCode
    *
    * @param string|null $commerceCode 商务编号
    *
    * @return $this
    */
    public function setCommerceCode($commerceCode)
    {
        $this->container['commerceCode'] = $commerceCode;
        return $this;
    }

    /**
    * Gets effectiveTime
    *  商务生效时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    *
    * @return string|null
    */
    public function getEffectiveTime()
    {
        return $this->container['effectiveTime'];
    }

    /**
    * Sets effectiveTime
    *
    * @param string|null $effectiveTime 商务生效时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    *
    * @return $this
    */
    public function setEffectiveTime($effectiveTime)
    {
        $this->container['effectiveTime'] = $effectiveTime;
        return $this;
    }

    /**
    * Gets expireTime
    *  商务失效时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    *
    * @return string|null
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param string|null $expireTime 商务失效时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets productQuotingItems
    *  产品报价项列表（quoting_item_type=PRODUCT_ITEM时有值返回，否则返回空列表）
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\ProductQuotingItem[]|null
    */
    public function getProductQuotingItems()
    {
        return $this->container['productQuotingItems'];
    }

    /**
    * Sets productQuotingItems
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\ProductQuotingItem[]|null $productQuotingItems 产品报价项列表（quoting_item_type=PRODUCT_ITEM时有值返回，否则返回空列表）
    *
    * @return $this
    */
    public function setProductQuotingItems($productQuotingItems)
    {
        $this->container['productQuotingItems'] = $productQuotingItems;
        return $this;
    }

    /**
    * Gets categoryQuotingItems
    *  分类报价项列表（quoting_item_type=CATEGORY_ITEM时有值返回，否则返回空列表）
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\CategoryQuotingItem[]|null
    */
    public function getCategoryQuotingItems()
    {
        return $this->container['categoryQuotingItems'];
    }

    /**
    * Sets categoryQuotingItems
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\CategoryQuotingItem[]|null $categoryQuotingItems 分类报价项列表（quoting_item_type=CATEGORY_ITEM时有值返回，否则返回空列表）
    *
    * @return $this
    */
    public function setCategoryQuotingItems($categoryQuotingItems)
    {
        $this->container['categoryQuotingItems'] = $categoryQuotingItems;
        return $this;
    }

    /**
    * Gets categoryQuotingItemSteps
    *  分类报价项阶梯列表（quoting_item_type=CATEGORY_ITEM时有值返回，否则返回空列表）
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\CategoryQuotingItemStep[]|null
    */
    public function getCategoryQuotingItemSteps()
    {
        return $this->container['categoryQuotingItemSteps'];
    }

    /**
    * Sets categoryQuotingItemSteps
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\CategoryQuotingItemStep[]|null $categoryQuotingItemSteps 分类报价项阶梯列表（quoting_item_type=CATEGORY_ITEM时有值返回，否则返回空列表）
    *
    * @return $this
    */
    public function setCategoryQuotingItemSteps($categoryQuotingItemSteps)
    {
        $this->container['categoryQuotingItemSteps'] = $categoryQuotingItemSteps;
        return $this;
    }

    /**
    * Gets accumulationCycleType
    *  阶梯累计周期类型，category_quoting_item_steps有值返回时返回
    *
    * @return string|null
    */
    public function getAccumulationCycleType()
    {
        return $this->container['accumulationCycleType'];
    }

    /**
    * Sets accumulationCycleType
    *
    * @param string|null $accumulationCycleType 阶梯累计周期类型，category_quoting_item_steps有值返回时返回
    *
    * @return $this
    */
    public function setAccumulationCycleType($accumulationCycleType)
    {
        $this->container['accumulationCycleType'] = $accumulationCycleType;
        return $this;
    }

    /**
    * Gets sites
    *  运营站点列表
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\SiteInfo[]|null
    */
    public function getSites()
    {
        return $this->container['sites'];
    }

    /**
    * Sets sites
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\SiteInfo[]|null $sites 运营站点列表
    *
    * @return $this
    */
    public function setSites($sites)
    {
        $this->container['sites'] = $sites;
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

