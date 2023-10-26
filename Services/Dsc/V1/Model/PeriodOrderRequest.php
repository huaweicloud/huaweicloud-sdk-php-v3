<?php

namespace HuaweiCloud\SDK\Dsc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PeriodOrderRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PeriodOrderRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * chargingMode  计费模式，0：包周期计费，1：按需计费，2：一次性计费
    * cloudServiceType  云服务类型
    * compositeProductId  组合套餐ID
    * discountId  折扣ID
    * isAutoRenew  是否自动续费
    * periodNum  订购周期数目
    * periodType  订购周期类型，2：月，3：年
    * productInfos  产品信息列表
    * promotionActivityId  促销ID
    * promotionInfo  促销信息
    * regionId  当前项目所在region的id，如：xx-xx-1。
    * zone  所属国家区域
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'chargingMode' => 'int',
            'cloudServiceType' => 'string',
            'compositeProductId' => 'string',
            'discountId' => 'string',
            'isAutoRenew' => 'int',
            'periodNum' => 'int',
            'periodType' => 'int',
            'productInfos' => '\HuaweiCloud\SDK\Dsc\V1\Model\ProductInfoBean[]',
            'promotionActivityId' => 'string',
            'promotionInfo' => 'string',
            'regionId' => 'string',
            'zone' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * chargingMode  计费模式，0：包周期计费，1：按需计费，2：一次性计费
    * cloudServiceType  云服务类型
    * compositeProductId  组合套餐ID
    * discountId  折扣ID
    * isAutoRenew  是否自动续费
    * periodNum  订购周期数目
    * periodType  订购周期类型，2：月，3：年
    * productInfos  产品信息列表
    * promotionActivityId  促销ID
    * promotionInfo  促销信息
    * regionId  当前项目所在region的id，如：xx-xx-1。
    * zone  所属国家区域
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'chargingMode' => 'int32',
        'cloudServiceType' => null,
        'compositeProductId' => null,
        'discountId' => null,
        'isAutoRenew' => 'int32',
        'periodNum' => 'int32',
        'periodType' => 'int32',
        'productInfos' => null,
        'promotionActivityId' => null,
        'promotionInfo' => null,
        'regionId' => null,
        'zone' => null
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
    * chargingMode  计费模式，0：包周期计费，1：按需计费，2：一次性计费
    * cloudServiceType  云服务类型
    * compositeProductId  组合套餐ID
    * discountId  折扣ID
    * isAutoRenew  是否自动续费
    * periodNum  订购周期数目
    * periodType  订购周期类型，2：月，3：年
    * productInfos  产品信息列表
    * promotionActivityId  促销ID
    * promotionInfo  促销信息
    * regionId  当前项目所在region的id，如：xx-xx-1。
    * zone  所属国家区域
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'chargingMode' => 'charging_mode',
            'cloudServiceType' => 'cloud_service_type',
            'compositeProductId' => 'composite_product_id',
            'discountId' => 'discount_id',
            'isAutoRenew' => 'is_auto_renew',
            'periodNum' => 'period_num',
            'periodType' => 'period_type',
            'productInfos' => 'product_infos',
            'promotionActivityId' => 'promotion_activity_id',
            'promotionInfo' => 'promotion_info',
            'regionId' => 'region_id',
            'zone' => 'zone'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * chargingMode  计费模式，0：包周期计费，1：按需计费，2：一次性计费
    * cloudServiceType  云服务类型
    * compositeProductId  组合套餐ID
    * discountId  折扣ID
    * isAutoRenew  是否自动续费
    * periodNum  订购周期数目
    * periodType  订购周期类型，2：月，3：年
    * productInfos  产品信息列表
    * promotionActivityId  促销ID
    * promotionInfo  促销信息
    * regionId  当前项目所在region的id，如：xx-xx-1。
    * zone  所属国家区域
    *
    * @var string[]
    */
    protected static $setters = [
            'chargingMode' => 'setChargingMode',
            'cloudServiceType' => 'setCloudServiceType',
            'compositeProductId' => 'setCompositeProductId',
            'discountId' => 'setDiscountId',
            'isAutoRenew' => 'setIsAutoRenew',
            'periodNum' => 'setPeriodNum',
            'periodType' => 'setPeriodType',
            'productInfos' => 'setProductInfos',
            'promotionActivityId' => 'setPromotionActivityId',
            'promotionInfo' => 'setPromotionInfo',
            'regionId' => 'setRegionId',
            'zone' => 'setZone'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * chargingMode  计费模式，0：包周期计费，1：按需计费，2：一次性计费
    * cloudServiceType  云服务类型
    * compositeProductId  组合套餐ID
    * discountId  折扣ID
    * isAutoRenew  是否自动续费
    * periodNum  订购周期数目
    * periodType  订购周期类型，2：月，3：年
    * productInfos  产品信息列表
    * promotionActivityId  促销ID
    * promotionInfo  促销信息
    * regionId  当前项目所在region的id，如：xx-xx-1。
    * zone  所属国家区域
    *
    * @var string[]
    */
    protected static $getters = [
            'chargingMode' => 'getChargingMode',
            'cloudServiceType' => 'getCloudServiceType',
            'compositeProductId' => 'getCompositeProductId',
            'discountId' => 'getDiscountId',
            'isAutoRenew' => 'getIsAutoRenew',
            'periodNum' => 'getPeriodNum',
            'periodType' => 'getPeriodType',
            'productInfos' => 'getProductInfos',
            'promotionActivityId' => 'getPromotionActivityId',
            'promotionInfo' => 'getPromotionInfo',
            'regionId' => 'getRegionId',
            'zone' => 'getZone'
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
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['cloudServiceType'] = isset($data['cloudServiceType']) ? $data['cloudServiceType'] : null;
        $this->container['compositeProductId'] = isset($data['compositeProductId']) ? $data['compositeProductId'] : null;
        $this->container['discountId'] = isset($data['discountId']) ? $data['discountId'] : null;
        $this->container['isAutoRenew'] = isset($data['isAutoRenew']) ? $data['isAutoRenew'] : null;
        $this->container['periodNum'] = isset($data['periodNum']) ? $data['periodNum'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['productInfos'] = isset($data['productInfos']) ? $data['productInfos'] : null;
        $this->container['promotionActivityId'] = isset($data['promotionActivityId']) ? $data['promotionActivityId'] : null;
        $this->container['promotionInfo'] = isset($data['promotionInfo']) ? $data['promotionInfo'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['zone'] = isset($data['zone']) ? $data['zone'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['chargingMode'] === null) {
            $invalidProperties[] = "'chargingMode' can't be null";
        }
        if ($this->container['cloudServiceType'] === null) {
            $invalidProperties[] = "'cloudServiceType' can't be null";
        }
        if ($this->container['periodNum'] === null) {
            $invalidProperties[] = "'periodNum' can't be null";
        }
        if ($this->container['periodType'] === null) {
            $invalidProperties[] = "'periodType' can't be null";
        }
        if ($this->container['productInfos'] === null) {
            $invalidProperties[] = "'productInfos' can't be null";
        }
        if ($this->container['regionId'] === null) {
            $invalidProperties[] = "'regionId' can't be null";
        }
        if ($this->container['zone'] === null) {
            $invalidProperties[] = "'zone' can't be null";
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
    * Gets chargingMode
    *  计费模式，0：包周期计费，1：按需计费，2：一次性计费
    *
    * @return int
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param int $chargingMode 计费模式，0：包周期计费，1：按需计费，2：一次性计费
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets cloudServiceType
    *  云服务类型
    *
    * @return string
    */
    public function getCloudServiceType()
    {
        return $this->container['cloudServiceType'];
    }

    /**
    * Sets cloudServiceType
    *
    * @param string $cloudServiceType 云服务类型
    *
    * @return $this
    */
    public function setCloudServiceType($cloudServiceType)
    {
        $this->container['cloudServiceType'] = $cloudServiceType;
        return $this;
    }

    /**
    * Gets compositeProductId
    *  组合套餐ID
    *
    * @return string|null
    */
    public function getCompositeProductId()
    {
        return $this->container['compositeProductId'];
    }

    /**
    * Sets compositeProductId
    *
    * @param string|null $compositeProductId 组合套餐ID
    *
    * @return $this
    */
    public function setCompositeProductId($compositeProductId)
    {
        $this->container['compositeProductId'] = $compositeProductId;
        return $this;
    }

    /**
    * Gets discountId
    *  折扣ID
    *
    * @return string|null
    */
    public function getDiscountId()
    {
        return $this->container['discountId'];
    }

    /**
    * Sets discountId
    *
    * @param string|null $discountId 折扣ID
    *
    * @return $this
    */
    public function setDiscountId($discountId)
    {
        $this->container['discountId'] = $discountId;
        return $this;
    }

    /**
    * Gets isAutoRenew
    *  是否自动续费
    *
    * @return int|null
    */
    public function getIsAutoRenew()
    {
        return $this->container['isAutoRenew'];
    }

    /**
    * Sets isAutoRenew
    *
    * @param int|null $isAutoRenew 是否自动续费
    *
    * @return $this
    */
    public function setIsAutoRenew($isAutoRenew)
    {
        $this->container['isAutoRenew'] = $isAutoRenew;
        return $this;
    }

    /**
    * Gets periodNum
    *  订购周期数目
    *
    * @return int
    */
    public function getPeriodNum()
    {
        return $this->container['periodNum'];
    }

    /**
    * Sets periodNum
    *
    * @param int $periodNum 订购周期数目
    *
    * @return $this
    */
    public function setPeriodNum($periodNum)
    {
        $this->container['periodNum'] = $periodNum;
        return $this;
    }

    /**
    * Gets periodType
    *  订购周期类型，2：月，3：年
    *
    * @return int
    */
    public function getPeriodType()
    {
        return $this->container['periodType'];
    }

    /**
    * Sets periodType
    *
    * @param int $periodType 订购周期类型，2：月，3：年
    *
    * @return $this
    */
    public function setPeriodType($periodType)
    {
        $this->container['periodType'] = $periodType;
        return $this;
    }

    /**
    * Gets productInfos
    *  产品信息列表
    *
    * @return \HuaweiCloud\SDK\Dsc\V1\Model\ProductInfoBean[]
    */
    public function getProductInfos()
    {
        return $this->container['productInfos'];
    }

    /**
    * Sets productInfos
    *
    * @param \HuaweiCloud\SDK\Dsc\V1\Model\ProductInfoBean[] $productInfos 产品信息列表
    *
    * @return $this
    */
    public function setProductInfos($productInfos)
    {
        $this->container['productInfos'] = $productInfos;
        return $this;
    }

    /**
    * Gets promotionActivityId
    *  促销ID
    *
    * @return string|null
    */
    public function getPromotionActivityId()
    {
        return $this->container['promotionActivityId'];
    }

    /**
    * Sets promotionActivityId
    *
    * @param string|null $promotionActivityId 促销ID
    *
    * @return $this
    */
    public function setPromotionActivityId($promotionActivityId)
    {
        $this->container['promotionActivityId'] = $promotionActivityId;
        return $this;
    }

    /**
    * Gets promotionInfo
    *  促销信息
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
    * @param string|null $promotionInfo 促销信息
    *
    * @return $this
    */
    public function setPromotionInfo($promotionInfo)
    {
        $this->container['promotionInfo'] = $promotionInfo;
        return $this;
    }

    /**
    * Gets regionId
    *  当前项目所在region的id，如：xx-xx-1。
    *
    * @return string
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string $regionId 当前项目所在region的id，如：xx-xx-1。
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets zone
    *  所属国家区域
    *
    * @return string
    */
    public function getZone()
    {
        return $this->container['zone'];
    }

    /**
    * Sets zone
    *
    * @param string $zone 所属国家区域
    *
    * @return $this
    */
    public function setZone($zone)
    {
        $this->container['zone'] = $zone;
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

