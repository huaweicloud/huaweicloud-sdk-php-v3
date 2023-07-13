<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IQueryUserPartnerCouponsResultV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IQueryUserPartnerCouponsResultV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * couponId  优惠券ID。
    * status  优惠券状态： 1：未激活2：可使用3：已使用4：已过期5：已回收
    * customerId  客户账号ID。
    * couponType  优惠券类别： 1：代金券4：现金券
    * measureId  优惠券面额单位。 1：元。
    * faceValue  优惠券面值。
    * effectiveTime  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * expireTime  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * orderId  订单ID。
    * promotionPlanId  促销计划ID。
    * promotionPlanName  促销计划名称。
    * promotionPlanDesc  促销计划描述。
    * mediaType  介质类型。 1：电子券2：纸质券
    * fetchMethod  获取方式。 1：线上领取2：线上兑换3：线上发放4：线下获取5：事件赠送
    * useLimits  优惠券限制。 具体请参见表3。
    * activeTime  优惠券的激活时间。
    * lastUsedTime  优惠券的使用时间。
    * promotionId  促销活动ID。
    * createTime  优惠券的创建时间。
    * balance  优惠券余额。
    * lockOrderId  锁定优惠券的订单ID。 如果为老版本优惠券，该值为空。
    * isFrozen  优惠券是否冻结。 0：否1：是 可用优惠券接口返回时不包括冻结状态的优惠券。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'couponId' => 'string',
            'status' => 'int',
            'customerId' => 'string',
            'couponType' => 'int',
            'measureId' => 'int',
            'faceValue' => 'float',
            'effectiveTime' => 'string',
            'expireTime' => 'string',
            'orderId' => 'string',
            'promotionPlanId' => 'string',
            'promotionPlanName' => 'string',
            'promotionPlanDesc' => 'string',
            'mediaType' => 'int',
            'fetchMethod' => 'int',
            'useLimits' => '\HuaweiCloud\SDK\Bss\V2\Model\ICouponUseLimitInfoV2[]',
            'activeTime' => 'string',
            'lastUsedTime' => 'string',
            'promotionId' => 'string',
            'createTime' => 'string',
            'balance' => 'float',
            'lockOrderId' => 'string',
            'isFrozen' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * couponId  优惠券ID。
    * status  优惠券状态： 1：未激活2：可使用3：已使用4：已过期5：已回收
    * customerId  客户账号ID。
    * couponType  优惠券类别： 1：代金券4：现金券
    * measureId  优惠券面额单位。 1：元。
    * faceValue  优惠券面值。
    * effectiveTime  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * expireTime  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * orderId  订单ID。
    * promotionPlanId  促销计划ID。
    * promotionPlanName  促销计划名称。
    * promotionPlanDesc  促销计划描述。
    * mediaType  介质类型。 1：电子券2：纸质券
    * fetchMethod  获取方式。 1：线上领取2：线上兑换3：线上发放4：线下获取5：事件赠送
    * useLimits  优惠券限制。 具体请参见表3。
    * activeTime  优惠券的激活时间。
    * lastUsedTime  优惠券的使用时间。
    * promotionId  促销活动ID。
    * createTime  优惠券的创建时间。
    * balance  优惠券余额。
    * lockOrderId  锁定优惠券的订单ID。 如果为老版本优惠券，该值为空。
    * isFrozen  优惠券是否冻结。 0：否1：是 可用优惠券接口返回时不包括冻结状态的优惠券。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'couponId' => null,
        'status' => 'int32',
        'customerId' => null,
        'couponType' => 'int32',
        'measureId' => 'int32',
        'faceValue' => 'bigdecimal',
        'effectiveTime' => null,
        'expireTime' => null,
        'orderId' => null,
        'promotionPlanId' => null,
        'promotionPlanName' => null,
        'promotionPlanDesc' => null,
        'mediaType' => 'int32',
        'fetchMethod' => 'int32',
        'useLimits' => null,
        'activeTime' => null,
        'lastUsedTime' => null,
        'promotionId' => null,
        'createTime' => null,
        'balance' => 'bigdecimal',
        'lockOrderId' => null,
        'isFrozen' => null
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
    * couponId  优惠券ID。
    * status  优惠券状态： 1：未激活2：可使用3：已使用4：已过期5：已回收
    * customerId  客户账号ID。
    * couponType  优惠券类别： 1：代金券4：现金券
    * measureId  优惠券面额单位。 1：元。
    * faceValue  优惠券面值。
    * effectiveTime  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * expireTime  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * orderId  订单ID。
    * promotionPlanId  促销计划ID。
    * promotionPlanName  促销计划名称。
    * promotionPlanDesc  促销计划描述。
    * mediaType  介质类型。 1：电子券2：纸质券
    * fetchMethod  获取方式。 1：线上领取2：线上兑换3：线上发放4：线下获取5：事件赠送
    * useLimits  优惠券限制。 具体请参见表3。
    * activeTime  优惠券的激活时间。
    * lastUsedTime  优惠券的使用时间。
    * promotionId  促销活动ID。
    * createTime  优惠券的创建时间。
    * balance  优惠券余额。
    * lockOrderId  锁定优惠券的订单ID。 如果为老版本优惠券，该值为空。
    * isFrozen  优惠券是否冻结。 0：否1：是 可用优惠券接口返回时不包括冻结状态的优惠券。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'couponId' => 'coupon_id',
            'status' => 'status',
            'customerId' => 'customer_id',
            'couponType' => 'coupon_type',
            'measureId' => 'measure_id',
            'faceValue' => 'face_value',
            'effectiveTime' => 'effective_time',
            'expireTime' => 'expire_time',
            'orderId' => 'order_id',
            'promotionPlanId' => 'promotion_plan_id',
            'promotionPlanName' => 'promotion_plan_name',
            'promotionPlanDesc' => 'promotion_plan_desc',
            'mediaType' => 'media_type',
            'fetchMethod' => 'fetch_method',
            'useLimits' => 'use_limits',
            'activeTime' => 'active_time',
            'lastUsedTime' => 'last_used_time',
            'promotionId' => 'promotion_id',
            'createTime' => 'create_time',
            'balance' => 'balance',
            'lockOrderId' => 'lock_order_id',
            'isFrozen' => 'is_frozen'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * couponId  优惠券ID。
    * status  优惠券状态： 1：未激活2：可使用3：已使用4：已过期5：已回收
    * customerId  客户账号ID。
    * couponType  优惠券类别： 1：代金券4：现金券
    * measureId  优惠券面额单位。 1：元。
    * faceValue  优惠券面值。
    * effectiveTime  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * expireTime  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * orderId  订单ID。
    * promotionPlanId  促销计划ID。
    * promotionPlanName  促销计划名称。
    * promotionPlanDesc  促销计划描述。
    * mediaType  介质类型。 1：电子券2：纸质券
    * fetchMethod  获取方式。 1：线上领取2：线上兑换3：线上发放4：线下获取5：事件赠送
    * useLimits  优惠券限制。 具体请参见表3。
    * activeTime  优惠券的激活时间。
    * lastUsedTime  优惠券的使用时间。
    * promotionId  促销活动ID。
    * createTime  优惠券的创建时间。
    * balance  优惠券余额。
    * lockOrderId  锁定优惠券的订单ID。 如果为老版本优惠券，该值为空。
    * isFrozen  优惠券是否冻结。 0：否1：是 可用优惠券接口返回时不包括冻结状态的优惠券。
    *
    * @var string[]
    */
    protected static $setters = [
            'couponId' => 'setCouponId',
            'status' => 'setStatus',
            'customerId' => 'setCustomerId',
            'couponType' => 'setCouponType',
            'measureId' => 'setMeasureId',
            'faceValue' => 'setFaceValue',
            'effectiveTime' => 'setEffectiveTime',
            'expireTime' => 'setExpireTime',
            'orderId' => 'setOrderId',
            'promotionPlanId' => 'setPromotionPlanId',
            'promotionPlanName' => 'setPromotionPlanName',
            'promotionPlanDesc' => 'setPromotionPlanDesc',
            'mediaType' => 'setMediaType',
            'fetchMethod' => 'setFetchMethod',
            'useLimits' => 'setUseLimits',
            'activeTime' => 'setActiveTime',
            'lastUsedTime' => 'setLastUsedTime',
            'promotionId' => 'setPromotionId',
            'createTime' => 'setCreateTime',
            'balance' => 'setBalance',
            'lockOrderId' => 'setLockOrderId',
            'isFrozen' => 'setIsFrozen'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * couponId  优惠券ID。
    * status  优惠券状态： 1：未激活2：可使用3：已使用4：已过期5：已回收
    * customerId  客户账号ID。
    * couponType  优惠券类别： 1：代金券4：现金券
    * measureId  优惠券面额单位。 1：元。
    * faceValue  优惠券面值。
    * effectiveTime  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * expireTime  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * orderId  订单ID。
    * promotionPlanId  促销计划ID。
    * promotionPlanName  促销计划名称。
    * promotionPlanDesc  促销计划描述。
    * mediaType  介质类型。 1：电子券2：纸质券
    * fetchMethod  获取方式。 1：线上领取2：线上兑换3：线上发放4：线下获取5：事件赠送
    * useLimits  优惠券限制。 具体请参见表3。
    * activeTime  优惠券的激活时间。
    * lastUsedTime  优惠券的使用时间。
    * promotionId  促销活动ID。
    * createTime  优惠券的创建时间。
    * balance  优惠券余额。
    * lockOrderId  锁定优惠券的订单ID。 如果为老版本优惠券，该值为空。
    * isFrozen  优惠券是否冻结。 0：否1：是 可用优惠券接口返回时不包括冻结状态的优惠券。
    *
    * @var string[]
    */
    protected static $getters = [
            'couponId' => 'getCouponId',
            'status' => 'getStatus',
            'customerId' => 'getCustomerId',
            'couponType' => 'getCouponType',
            'measureId' => 'getMeasureId',
            'faceValue' => 'getFaceValue',
            'effectiveTime' => 'getEffectiveTime',
            'expireTime' => 'getExpireTime',
            'orderId' => 'getOrderId',
            'promotionPlanId' => 'getPromotionPlanId',
            'promotionPlanName' => 'getPromotionPlanName',
            'promotionPlanDesc' => 'getPromotionPlanDesc',
            'mediaType' => 'getMediaType',
            'fetchMethod' => 'getFetchMethod',
            'useLimits' => 'getUseLimits',
            'activeTime' => 'getActiveTime',
            'lastUsedTime' => 'getLastUsedTime',
            'promotionId' => 'getPromotionId',
            'createTime' => 'getCreateTime',
            'balance' => 'getBalance',
            'lockOrderId' => 'getLockOrderId',
            'isFrozen' => 'getIsFrozen'
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
        $this->container['couponId'] = isset($data['couponId']) ? $data['couponId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['customerId'] = isset($data['customerId']) ? $data['customerId'] : null;
        $this->container['couponType'] = isset($data['couponType']) ? $data['couponType'] : null;
        $this->container['measureId'] = isset($data['measureId']) ? $data['measureId'] : null;
        $this->container['faceValue'] = isset($data['faceValue']) ? $data['faceValue'] : null;
        $this->container['effectiveTime'] = isset($data['effectiveTime']) ? $data['effectiveTime'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['promotionPlanId'] = isset($data['promotionPlanId']) ? $data['promotionPlanId'] : null;
        $this->container['promotionPlanName'] = isset($data['promotionPlanName']) ? $data['promotionPlanName'] : null;
        $this->container['promotionPlanDesc'] = isset($data['promotionPlanDesc']) ? $data['promotionPlanDesc'] : null;
        $this->container['mediaType'] = isset($data['mediaType']) ? $data['mediaType'] : null;
        $this->container['fetchMethod'] = isset($data['fetchMethod']) ? $data['fetchMethod'] : null;
        $this->container['useLimits'] = isset($data['useLimits']) ? $data['useLimits'] : null;
        $this->container['activeTime'] = isset($data['activeTime']) ? $data['activeTime'] : null;
        $this->container['lastUsedTime'] = isset($data['lastUsedTime']) ? $data['lastUsedTime'] : null;
        $this->container['promotionId'] = isset($data['promotionId']) ? $data['promotionId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['lockOrderId'] = isset($data['lockOrderId']) ? $data['lockOrderId'] : null;
        $this->container['isFrozen'] = isset($data['isFrozen']) ? $data['isFrozen'] : null;
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
    * Gets couponId
    *  优惠券ID。
    *
    * @return string|null
    */
    public function getCouponId()
    {
        return $this->container['couponId'];
    }

    /**
    * Sets couponId
    *
    * @param string|null $couponId 优惠券ID。
    *
    * @return $this
    */
    public function setCouponId($couponId)
    {
        $this->container['couponId'] = $couponId;
        return $this;
    }

    /**
    * Gets status
    *  优惠券状态： 1：未激活2：可使用3：已使用4：已过期5：已回收
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 优惠券状态： 1：未激活2：可使用3：已使用4：已过期5：已回收
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets customerId
    *  客户账号ID。
    *
    * @return string|null
    */
    public function getCustomerId()
    {
        return $this->container['customerId'];
    }

    /**
    * Sets customerId
    *
    * @param string|null $customerId 客户账号ID。
    *
    * @return $this
    */
    public function setCustomerId($customerId)
    {
        $this->container['customerId'] = $customerId;
        return $this;
    }

    /**
    * Gets couponType
    *  优惠券类别： 1：代金券4：现金券
    *
    * @return int|null
    */
    public function getCouponType()
    {
        return $this->container['couponType'];
    }

    /**
    * Sets couponType
    *
    * @param int|null $couponType 优惠券类别： 1：代金券4：现金券
    *
    * @return $this
    */
    public function setCouponType($couponType)
    {
        $this->container['couponType'] = $couponType;
        return $this;
    }

    /**
    * Gets measureId
    *  优惠券面额单位。 1：元。
    *
    * @return int|null
    */
    public function getMeasureId()
    {
        return $this->container['measureId'];
    }

    /**
    * Sets measureId
    *
    * @param int|null $measureId 优惠券面额单位。 1：元。
    *
    * @return $this
    */
    public function setMeasureId($measureId)
    {
        $this->container['measureId'] = $measureId;
        return $this;
    }

    /**
    * Gets faceValue
    *  优惠券面值。
    *
    * @return float|null
    */
    public function getFaceValue()
    {
        return $this->container['faceValue'];
    }

    /**
    * Sets faceValue
    *
    * @param float|null $faceValue 优惠券面值。
    *
    * @return $this
    */
    public function setFaceValue($faceValue)
    {
        $this->container['faceValue'] = $faceValue;
        return $this;
    }

    /**
    * Gets effectiveTime
    *  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
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
    * @param string|null $effectiveTime 生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
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
    *  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
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
    * @param string|null $expireTime 失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets orderId
    *  订单ID。
    *
    * @return string|null
    */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
    * Sets orderId
    *
    * @param string|null $orderId 订单ID。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets promotionPlanId
    *  促销计划ID。
    *
    * @return string|null
    */
    public function getPromotionPlanId()
    {
        return $this->container['promotionPlanId'];
    }

    /**
    * Sets promotionPlanId
    *
    * @param string|null $promotionPlanId 促销计划ID。
    *
    * @return $this
    */
    public function setPromotionPlanId($promotionPlanId)
    {
        $this->container['promotionPlanId'] = $promotionPlanId;
        return $this;
    }

    /**
    * Gets promotionPlanName
    *  促销计划名称。
    *
    * @return string|null
    */
    public function getPromotionPlanName()
    {
        return $this->container['promotionPlanName'];
    }

    /**
    * Sets promotionPlanName
    *
    * @param string|null $promotionPlanName 促销计划名称。
    *
    * @return $this
    */
    public function setPromotionPlanName($promotionPlanName)
    {
        $this->container['promotionPlanName'] = $promotionPlanName;
        return $this;
    }

    /**
    * Gets promotionPlanDesc
    *  促销计划描述。
    *
    * @return string|null
    */
    public function getPromotionPlanDesc()
    {
        return $this->container['promotionPlanDesc'];
    }

    /**
    * Sets promotionPlanDesc
    *
    * @param string|null $promotionPlanDesc 促销计划描述。
    *
    * @return $this
    */
    public function setPromotionPlanDesc($promotionPlanDesc)
    {
        $this->container['promotionPlanDesc'] = $promotionPlanDesc;
        return $this;
    }

    /**
    * Gets mediaType
    *  介质类型。 1：电子券2：纸质券
    *
    * @return int|null
    */
    public function getMediaType()
    {
        return $this->container['mediaType'];
    }

    /**
    * Sets mediaType
    *
    * @param int|null $mediaType 介质类型。 1：电子券2：纸质券
    *
    * @return $this
    */
    public function setMediaType($mediaType)
    {
        $this->container['mediaType'] = $mediaType;
        return $this;
    }

    /**
    * Gets fetchMethod
    *  获取方式。 1：线上领取2：线上兑换3：线上发放4：线下获取5：事件赠送
    *
    * @return int|null
    */
    public function getFetchMethod()
    {
        return $this->container['fetchMethod'];
    }

    /**
    * Sets fetchMethod
    *
    * @param int|null $fetchMethod 获取方式。 1：线上领取2：线上兑换3：线上发放4：线下获取5：事件赠送
    *
    * @return $this
    */
    public function setFetchMethod($fetchMethod)
    {
        $this->container['fetchMethod'] = $fetchMethod;
        return $this;
    }

    /**
    * Gets useLimits
    *  优惠券限制。 具体请参见表3。
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\ICouponUseLimitInfoV2[]|null
    */
    public function getUseLimits()
    {
        return $this->container['useLimits'];
    }

    /**
    * Sets useLimits
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\ICouponUseLimitInfoV2[]|null $useLimits 优惠券限制。 具体请参见表3。
    *
    * @return $this
    */
    public function setUseLimits($useLimits)
    {
        $this->container['useLimits'] = $useLimits;
        return $this;
    }

    /**
    * Gets activeTime
    *  优惠券的激活时间。
    *
    * @return string|null
    */
    public function getActiveTime()
    {
        return $this->container['activeTime'];
    }

    /**
    * Sets activeTime
    *
    * @param string|null $activeTime 优惠券的激活时间。
    *
    * @return $this
    */
    public function setActiveTime($activeTime)
    {
        $this->container['activeTime'] = $activeTime;
        return $this;
    }

    /**
    * Gets lastUsedTime
    *  优惠券的使用时间。
    *
    * @return string|null
    */
    public function getLastUsedTime()
    {
        return $this->container['lastUsedTime'];
    }

    /**
    * Sets lastUsedTime
    *
    * @param string|null $lastUsedTime 优惠券的使用时间。
    *
    * @return $this
    */
    public function setLastUsedTime($lastUsedTime)
    {
        $this->container['lastUsedTime'] = $lastUsedTime;
        return $this;
    }

    /**
    * Gets promotionId
    *  促销活动ID。
    *
    * @return string|null
    */
    public function getPromotionId()
    {
        return $this->container['promotionId'];
    }

    /**
    * Sets promotionId
    *
    * @param string|null $promotionId 促销活动ID。
    *
    * @return $this
    */
    public function setPromotionId($promotionId)
    {
        $this->container['promotionId'] = $promotionId;
        return $this;
    }

    /**
    * Gets createTime
    *  优惠券的创建时间。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 优惠券的创建时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets balance
    *  优惠券余额。
    *
    * @return float|null
    */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
    * Sets balance
    *
    * @param float|null $balance 优惠券余额。
    *
    * @return $this
    */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;
        return $this;
    }

    /**
    * Gets lockOrderId
    *  锁定优惠券的订单ID。 如果为老版本优惠券，该值为空。
    *
    * @return string|null
    */
    public function getLockOrderId()
    {
        return $this->container['lockOrderId'];
    }

    /**
    * Sets lockOrderId
    *
    * @param string|null $lockOrderId 锁定优惠券的订单ID。 如果为老版本优惠券，该值为空。
    *
    * @return $this
    */
    public function setLockOrderId($lockOrderId)
    {
        $this->container['lockOrderId'] = $lockOrderId;
        return $this;
    }

    /**
    * Gets isFrozen
    *  优惠券是否冻结。 0：否1：是 可用优惠券接口返回时不包括冻结状态的优惠券。
    *
    * @return string|null
    */
    public function getIsFrozen()
    {
        return $this->container['isFrozen'];
    }

    /**
    * Sets isFrozen
    *
    * @param string|null $isFrozen 优惠券是否冻结。 0：否1：是 可用优惠券接口返回时不包括冻结状态的优惠券。
    *
    * @return $this
    */
    public function setIsFrozen($isFrozen)
    {
        $this->container['isFrozen'] = $isFrozen;
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

