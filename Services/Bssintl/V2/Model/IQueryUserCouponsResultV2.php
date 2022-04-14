<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IQueryUserCouponsResultV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IQueryUserCouponsResultV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * couponId  优惠券实例ID。
    * couponCode  优惠券编码。
    * status  优惠券状态： 1：未激活2：待使用3：已使用4：已过期5：已回收
    * customerId  客户账号ID。
    * couponType  优惠券类型： 1：代金券2：折扣券（预留）3：产品券（预留）4：现金券（预留）
    * measureId  度量单位。 1：元
    * faceValue  优惠券金额。
    * validTime  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * expireTime  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * orderId  订单ID。
    * promotionPlanId  促销计划ID。
    * planName  促销计划名称。
    * planDesc  促销计划描述。
    * mediaType  介质类型。 1：电子券2：纸质券
    * fetchMethod  获取方式： 1：线上领取2：线上兑换3：线上发放4：线下获取5：事件赠送
    * useLimits  优惠券使用限制。 具体请参见表3。
    * activeTime  激活时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * reserveTime  使用时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * promotionId  促销ID。
    * createTime  创建时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * couponVersion  优惠券版本： 1：老版本，老版本优惠券只能使用一次2：新版本，新版本优惠券可以反复使用
    * balance  优惠券余额。单位：元。 如果为老版本优惠券，该值为空。
    * lockOrderId  锁定优惠券的订单ID。 如果为老版本优惠券，该值为空。
    * couponUsage  优惠券用途。
    * isFrozen  优惠券是否冻结： 0：否1：是
    * currency  币种。 USD：美元
    * extendParam1  扩展字段。
    * sourceId  发券来源。 如果是合作伙伴发送的券，此处为伙伴ID。如果是活动发券，此处为活动ID：云豆兑换优惠券：云豆计划ID累计送优惠券：累计送计划ID抽奖送优惠券：抽奖计划ID事件送优惠券：事件计划ID定制优惠券：创建人ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'couponId' => 'string',
            'couponCode' => 'string',
            'status' => 'int',
            'customerId' => 'string',
            'couponType' => 'int',
            'measureId' => 'int',
            'faceValue' => 'double',
            'validTime' => 'string',
            'expireTime' => 'string',
            'orderId' => 'string',
            'promotionPlanId' => 'string',
            'planName' => 'string',
            'planDesc' => 'string',
            'mediaType' => 'int',
            'fetchMethod' => 'int',
            'useLimits' => '\HuaweiCloud\SDK\Bssintl\V2\Model\ICouponUseLimitInfoV2[]',
            'activeTime' => 'string',
            'reserveTime' => 'string',
            'promotionId' => 'string',
            'createTime' => 'string',
            'couponVersion' => 'int',
            'balance' => 'double',
            'lockOrderId' => 'string',
            'couponUsage' => 'string',
            'isFrozen' => 'string',
            'currency' => 'string',
            'extendParam1' => 'string',
            'sourceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * couponId  优惠券实例ID。
    * couponCode  优惠券编码。
    * status  优惠券状态： 1：未激活2：待使用3：已使用4：已过期5：已回收
    * customerId  客户账号ID。
    * couponType  优惠券类型： 1：代金券2：折扣券（预留）3：产品券（预留）4：现金券（预留）
    * measureId  度量单位。 1：元
    * faceValue  优惠券金额。
    * validTime  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * expireTime  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * orderId  订单ID。
    * promotionPlanId  促销计划ID。
    * planName  促销计划名称。
    * planDesc  促销计划描述。
    * mediaType  介质类型。 1：电子券2：纸质券
    * fetchMethod  获取方式： 1：线上领取2：线上兑换3：线上发放4：线下获取5：事件赠送
    * useLimits  优惠券使用限制。 具体请参见表3。
    * activeTime  激活时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * reserveTime  使用时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * promotionId  促销ID。
    * createTime  创建时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * couponVersion  优惠券版本： 1：老版本，老版本优惠券只能使用一次2：新版本，新版本优惠券可以反复使用
    * balance  优惠券余额。单位：元。 如果为老版本优惠券，该值为空。
    * lockOrderId  锁定优惠券的订单ID。 如果为老版本优惠券，该值为空。
    * couponUsage  优惠券用途。
    * isFrozen  优惠券是否冻结： 0：否1：是
    * currency  币种。 USD：美元
    * extendParam1  扩展字段。
    * sourceId  发券来源。 如果是合作伙伴发送的券，此处为伙伴ID。如果是活动发券，此处为活动ID：云豆兑换优惠券：云豆计划ID累计送优惠券：累计送计划ID抽奖送优惠券：抽奖计划ID事件送优惠券：事件计划ID定制优惠券：创建人ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'couponId' => null,
        'couponCode' => null,
        'status' => 'int32',
        'customerId' => null,
        'couponType' => 'int32',
        'measureId' => 'int32',
        'faceValue' => 'double',
        'validTime' => null,
        'expireTime' => null,
        'orderId' => null,
        'promotionPlanId' => null,
        'planName' => null,
        'planDesc' => null,
        'mediaType' => 'int32',
        'fetchMethod' => 'int32',
        'useLimits' => null,
        'activeTime' => null,
        'reserveTime' => null,
        'promotionId' => null,
        'createTime' => null,
        'couponVersion' => 'int32',
        'balance' => 'double',
        'lockOrderId' => null,
        'couponUsage' => null,
        'isFrozen' => null,
        'currency' => null,
        'extendParam1' => null,
        'sourceId' => null
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
    * couponId  优惠券实例ID。
    * couponCode  优惠券编码。
    * status  优惠券状态： 1：未激活2：待使用3：已使用4：已过期5：已回收
    * customerId  客户账号ID。
    * couponType  优惠券类型： 1：代金券2：折扣券（预留）3：产品券（预留）4：现金券（预留）
    * measureId  度量单位。 1：元
    * faceValue  优惠券金额。
    * validTime  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * expireTime  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * orderId  订单ID。
    * promotionPlanId  促销计划ID。
    * planName  促销计划名称。
    * planDesc  促销计划描述。
    * mediaType  介质类型。 1：电子券2：纸质券
    * fetchMethod  获取方式： 1：线上领取2：线上兑换3：线上发放4：线下获取5：事件赠送
    * useLimits  优惠券使用限制。 具体请参见表3。
    * activeTime  激活时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * reserveTime  使用时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * promotionId  促销ID。
    * createTime  创建时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * couponVersion  优惠券版本： 1：老版本，老版本优惠券只能使用一次2：新版本，新版本优惠券可以反复使用
    * balance  优惠券余额。单位：元。 如果为老版本优惠券，该值为空。
    * lockOrderId  锁定优惠券的订单ID。 如果为老版本优惠券，该值为空。
    * couponUsage  优惠券用途。
    * isFrozen  优惠券是否冻结： 0：否1：是
    * currency  币种。 USD：美元
    * extendParam1  扩展字段。
    * sourceId  发券来源。 如果是合作伙伴发送的券，此处为伙伴ID。如果是活动发券，此处为活动ID：云豆兑换优惠券：云豆计划ID累计送优惠券：累计送计划ID抽奖送优惠券：抽奖计划ID事件送优惠券：事件计划ID定制优惠券：创建人ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'couponId' => 'coupon_id',
            'couponCode' => 'coupon_code',
            'status' => 'status',
            'customerId' => 'customer_id',
            'couponType' => 'coupon_type',
            'measureId' => 'measure_id',
            'faceValue' => 'face_value',
            'validTime' => 'valid_time',
            'expireTime' => 'expire_time',
            'orderId' => 'order_id',
            'promotionPlanId' => 'promotion_plan_id',
            'planName' => 'plan_name',
            'planDesc' => 'plan_desc',
            'mediaType' => 'media_type',
            'fetchMethod' => 'fetch_method',
            'useLimits' => 'use_limits',
            'activeTime' => 'active_time',
            'reserveTime' => 'reserve_time',
            'promotionId' => 'promotion_id',
            'createTime' => 'create_time',
            'couponVersion' => 'coupon_version',
            'balance' => 'balance',
            'lockOrderId' => 'lock_order_id',
            'couponUsage' => 'coupon_usage',
            'isFrozen' => 'is_frozen',
            'currency' => 'currency',
            'extendParam1' => 'extend_param1',
            'sourceId' => 'source_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * couponId  优惠券实例ID。
    * couponCode  优惠券编码。
    * status  优惠券状态： 1：未激活2：待使用3：已使用4：已过期5：已回收
    * customerId  客户账号ID。
    * couponType  优惠券类型： 1：代金券2：折扣券（预留）3：产品券（预留）4：现金券（预留）
    * measureId  度量单位。 1：元
    * faceValue  优惠券金额。
    * validTime  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * expireTime  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * orderId  订单ID。
    * promotionPlanId  促销计划ID。
    * planName  促销计划名称。
    * planDesc  促销计划描述。
    * mediaType  介质类型。 1：电子券2：纸质券
    * fetchMethod  获取方式： 1：线上领取2：线上兑换3：线上发放4：线下获取5：事件赠送
    * useLimits  优惠券使用限制。 具体请参见表3。
    * activeTime  激活时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * reserveTime  使用时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * promotionId  促销ID。
    * createTime  创建时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * couponVersion  优惠券版本： 1：老版本，老版本优惠券只能使用一次2：新版本，新版本优惠券可以反复使用
    * balance  优惠券余额。单位：元。 如果为老版本优惠券，该值为空。
    * lockOrderId  锁定优惠券的订单ID。 如果为老版本优惠券，该值为空。
    * couponUsage  优惠券用途。
    * isFrozen  优惠券是否冻结： 0：否1：是
    * currency  币种。 USD：美元
    * extendParam1  扩展字段。
    * sourceId  发券来源。 如果是合作伙伴发送的券，此处为伙伴ID。如果是活动发券，此处为活动ID：云豆兑换优惠券：云豆计划ID累计送优惠券：累计送计划ID抽奖送优惠券：抽奖计划ID事件送优惠券：事件计划ID定制优惠券：创建人ID
    *
    * @var string[]
    */
    protected static $setters = [
            'couponId' => 'setCouponId',
            'couponCode' => 'setCouponCode',
            'status' => 'setStatus',
            'customerId' => 'setCustomerId',
            'couponType' => 'setCouponType',
            'measureId' => 'setMeasureId',
            'faceValue' => 'setFaceValue',
            'validTime' => 'setValidTime',
            'expireTime' => 'setExpireTime',
            'orderId' => 'setOrderId',
            'promotionPlanId' => 'setPromotionPlanId',
            'planName' => 'setPlanName',
            'planDesc' => 'setPlanDesc',
            'mediaType' => 'setMediaType',
            'fetchMethod' => 'setFetchMethod',
            'useLimits' => 'setUseLimits',
            'activeTime' => 'setActiveTime',
            'reserveTime' => 'setReserveTime',
            'promotionId' => 'setPromotionId',
            'createTime' => 'setCreateTime',
            'couponVersion' => 'setCouponVersion',
            'balance' => 'setBalance',
            'lockOrderId' => 'setLockOrderId',
            'couponUsage' => 'setCouponUsage',
            'isFrozen' => 'setIsFrozen',
            'currency' => 'setCurrency',
            'extendParam1' => 'setExtendParam1',
            'sourceId' => 'setSourceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * couponId  优惠券实例ID。
    * couponCode  优惠券编码。
    * status  优惠券状态： 1：未激活2：待使用3：已使用4：已过期5：已回收
    * customerId  客户账号ID。
    * couponType  优惠券类型： 1：代金券2：折扣券（预留）3：产品券（预留）4：现金券（预留）
    * measureId  度量单位。 1：元
    * faceValue  优惠券金额。
    * validTime  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * expireTime  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * orderId  订单ID。
    * promotionPlanId  促销计划ID。
    * planName  促销计划名称。
    * planDesc  促销计划描述。
    * mediaType  介质类型。 1：电子券2：纸质券
    * fetchMethod  获取方式： 1：线上领取2：线上兑换3：线上发放4：线下获取5：事件赠送
    * useLimits  优惠券使用限制。 具体请参见表3。
    * activeTime  激活时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * reserveTime  使用时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * promotionId  促销ID。
    * createTime  创建时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * couponVersion  优惠券版本： 1：老版本，老版本优惠券只能使用一次2：新版本，新版本优惠券可以反复使用
    * balance  优惠券余额。单位：元。 如果为老版本优惠券，该值为空。
    * lockOrderId  锁定优惠券的订单ID。 如果为老版本优惠券，该值为空。
    * couponUsage  优惠券用途。
    * isFrozen  优惠券是否冻结： 0：否1：是
    * currency  币种。 USD：美元
    * extendParam1  扩展字段。
    * sourceId  发券来源。 如果是合作伙伴发送的券，此处为伙伴ID。如果是活动发券，此处为活动ID：云豆兑换优惠券：云豆计划ID累计送优惠券：累计送计划ID抽奖送优惠券：抽奖计划ID事件送优惠券：事件计划ID定制优惠券：创建人ID
    *
    * @var string[]
    */
    protected static $getters = [
            'couponId' => 'getCouponId',
            'couponCode' => 'getCouponCode',
            'status' => 'getStatus',
            'customerId' => 'getCustomerId',
            'couponType' => 'getCouponType',
            'measureId' => 'getMeasureId',
            'faceValue' => 'getFaceValue',
            'validTime' => 'getValidTime',
            'expireTime' => 'getExpireTime',
            'orderId' => 'getOrderId',
            'promotionPlanId' => 'getPromotionPlanId',
            'planName' => 'getPlanName',
            'planDesc' => 'getPlanDesc',
            'mediaType' => 'getMediaType',
            'fetchMethod' => 'getFetchMethod',
            'useLimits' => 'getUseLimits',
            'activeTime' => 'getActiveTime',
            'reserveTime' => 'getReserveTime',
            'promotionId' => 'getPromotionId',
            'createTime' => 'getCreateTime',
            'couponVersion' => 'getCouponVersion',
            'balance' => 'getBalance',
            'lockOrderId' => 'getLockOrderId',
            'couponUsage' => 'getCouponUsage',
            'isFrozen' => 'getIsFrozen',
            'currency' => 'getCurrency',
            'extendParam1' => 'getExtendParam1',
            'sourceId' => 'getSourceId'
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
        $this->container['couponCode'] = isset($data['couponCode']) ? $data['couponCode'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['customerId'] = isset($data['customerId']) ? $data['customerId'] : null;
        $this->container['couponType'] = isset($data['couponType']) ? $data['couponType'] : null;
        $this->container['measureId'] = isset($data['measureId']) ? $data['measureId'] : null;
        $this->container['faceValue'] = isset($data['faceValue']) ? $data['faceValue'] : null;
        $this->container['validTime'] = isset($data['validTime']) ? $data['validTime'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['promotionPlanId'] = isset($data['promotionPlanId']) ? $data['promotionPlanId'] : null;
        $this->container['planName'] = isset($data['planName']) ? $data['planName'] : null;
        $this->container['planDesc'] = isset($data['planDesc']) ? $data['planDesc'] : null;
        $this->container['mediaType'] = isset($data['mediaType']) ? $data['mediaType'] : null;
        $this->container['fetchMethod'] = isset($data['fetchMethod']) ? $data['fetchMethod'] : null;
        $this->container['useLimits'] = isset($data['useLimits']) ? $data['useLimits'] : null;
        $this->container['activeTime'] = isset($data['activeTime']) ? $data['activeTime'] : null;
        $this->container['reserveTime'] = isset($data['reserveTime']) ? $data['reserveTime'] : null;
        $this->container['promotionId'] = isset($data['promotionId']) ? $data['promotionId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['couponVersion'] = isset($data['couponVersion']) ? $data['couponVersion'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['lockOrderId'] = isset($data['lockOrderId']) ? $data['lockOrderId'] : null;
        $this->container['couponUsage'] = isset($data['couponUsage']) ? $data['couponUsage'] : null;
        $this->container['isFrozen'] = isset($data['isFrozen']) ? $data['isFrozen'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['extendParam1'] = isset($data['extendParam1']) ? $data['extendParam1'] : null;
        $this->container['sourceId'] = isset($data['sourceId']) ? $data['sourceId'] : null;
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
    *  优惠券实例ID。
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
    * @param string|null $couponId 优惠券实例ID。
    *
    * @return $this
    */
    public function setCouponId($couponId)
    {
        $this->container['couponId'] = $couponId;
        return $this;
    }

    /**
    * Gets couponCode
    *  优惠券编码。
    *
    * @return string|null
    */
    public function getCouponCode()
    {
        return $this->container['couponCode'];
    }

    /**
    * Sets couponCode
    *
    * @param string|null $couponCode 优惠券编码。
    *
    * @return $this
    */
    public function setCouponCode($couponCode)
    {
        $this->container['couponCode'] = $couponCode;
        return $this;
    }

    /**
    * Gets status
    *  优惠券状态： 1：未激活2：待使用3：已使用4：已过期5：已回收
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
    * @param int|null $status 优惠券状态： 1：未激活2：待使用3：已使用4：已过期5：已回收
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
    *  优惠券类型： 1：代金券2：折扣券（预留）3：产品券（预留）4：现金券（预留）
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
    * @param int|null $couponType 优惠券类型： 1：代金券2：折扣券（预留）3：产品券（预留）4：现金券（预留）
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
    *  度量单位。 1：元
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
    * @param int|null $measureId 度量单位。 1：元
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
    *  优惠券金额。
    *
    * @return double|null
    */
    public function getFaceValue()
    {
        return $this->container['faceValue'];
    }

    /**
    * Sets faceValue
    *
    * @param double|null $faceValue 优惠券金额。
    *
    * @return $this
    */
    public function setFaceValue($faceValue)
    {
        $this->container['faceValue'] = $faceValue;
        return $this;
    }

    /**
    * Gets validTime
    *  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    *
    * @return string|null
    */
    public function getValidTime()
    {
        return $this->container['validTime'];
    }

    /**
    * Sets validTime
    *
    * @param string|null $validTime 生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    *
    * @return $this
    */
    public function setValidTime($validTime)
    {
        $this->container['validTime'] = $validTime;
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
    * Gets planName
    *  促销计划名称。
    *
    * @return string|null
    */
    public function getPlanName()
    {
        return $this->container['planName'];
    }

    /**
    * Sets planName
    *
    * @param string|null $planName 促销计划名称。
    *
    * @return $this
    */
    public function setPlanName($planName)
    {
        $this->container['planName'] = $planName;
        return $this;
    }

    /**
    * Gets planDesc
    *  促销计划描述。
    *
    * @return string|null
    */
    public function getPlanDesc()
    {
        return $this->container['planDesc'];
    }

    /**
    * Sets planDesc
    *
    * @param string|null $planDesc 促销计划描述。
    *
    * @return $this
    */
    public function setPlanDesc($planDesc)
    {
        $this->container['planDesc'] = $planDesc;
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
    *  获取方式： 1：线上领取2：线上兑换3：线上发放4：线下获取5：事件赠送
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
    * @param int|null $fetchMethod 获取方式： 1：线上领取2：线上兑换3：线上发放4：线下获取5：事件赠送
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
    *  优惠券使用限制。 具体请参见表3。
    *
    * @return \HuaweiCloud\SDK\Bssintl\V2\Model\ICouponUseLimitInfoV2[]|null
    */
    public function getUseLimits()
    {
        return $this->container['useLimits'];
    }

    /**
    * Sets useLimits
    *
    * @param \HuaweiCloud\SDK\Bssintl\V2\Model\ICouponUseLimitInfoV2[]|null $useLimits 优惠券使用限制。 具体请参见表3。
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
    *  激活时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
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
    * @param string|null $activeTime 激活时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    *
    * @return $this
    */
    public function setActiveTime($activeTime)
    {
        $this->container['activeTime'] = $activeTime;
        return $this;
    }

    /**
    * Gets reserveTime
    *  使用时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    *
    * @return string|null
    */
    public function getReserveTime()
    {
        return $this->container['reserveTime'];
    }

    /**
    * Sets reserveTime
    *
    * @param string|null $reserveTime 使用时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    *
    * @return $this
    */
    public function setReserveTime($reserveTime)
    {
        $this->container['reserveTime'] = $reserveTime;
        return $this;
    }

    /**
    * Gets promotionId
    *  促销ID。
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
    * @param string|null $promotionId 促销ID。
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
    *  创建时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
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
    * @param string|null $createTime 创建时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets couponVersion
    *  优惠券版本： 1：老版本，老版本优惠券只能使用一次2：新版本，新版本优惠券可以反复使用
    *
    * @return int|null
    */
    public function getCouponVersion()
    {
        return $this->container['couponVersion'];
    }

    /**
    * Sets couponVersion
    *
    * @param int|null $couponVersion 优惠券版本： 1：老版本，老版本优惠券只能使用一次2：新版本，新版本优惠券可以反复使用
    *
    * @return $this
    */
    public function setCouponVersion($couponVersion)
    {
        $this->container['couponVersion'] = $couponVersion;
        return $this;
    }

    /**
    * Gets balance
    *  优惠券余额。单位：元。 如果为老版本优惠券，该值为空。
    *
    * @return double|null
    */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
    * Sets balance
    *
    * @param double|null $balance 优惠券余额。单位：元。 如果为老版本优惠券，该值为空。
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
    * Gets couponUsage
    *  优惠券用途。
    *
    * @return string|null
    */
    public function getCouponUsage()
    {
        return $this->container['couponUsage'];
    }

    /**
    * Sets couponUsage
    *
    * @param string|null $couponUsage 优惠券用途。
    *
    * @return $this
    */
    public function setCouponUsage($couponUsage)
    {
        $this->container['couponUsage'] = $couponUsage;
        return $this;
    }

    /**
    * Gets isFrozen
    *  优惠券是否冻结： 0：否1：是
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
    * @param string|null $isFrozen 优惠券是否冻结： 0：否1：是
    *
    * @return $this
    */
    public function setIsFrozen($isFrozen)
    {
        $this->container['isFrozen'] = $isFrozen;
        return $this;
    }

    /**
    * Gets currency
    *  币种。 USD：美元
    *
    * @return string|null
    */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
    * Sets currency
    *
    * @param string|null $currency 币种。 USD：美元
    *
    * @return $this
    */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;
        return $this;
    }

    /**
    * Gets extendParam1
    *  扩展字段。
    *
    * @return string|null
    */
    public function getExtendParam1()
    {
        return $this->container['extendParam1'];
    }

    /**
    * Sets extendParam1
    *
    * @param string|null $extendParam1 扩展字段。
    *
    * @return $this
    */
    public function setExtendParam1($extendParam1)
    {
        $this->container['extendParam1'] = $extendParam1;
        return $this;
    }

    /**
    * Gets sourceId
    *  发券来源。 如果是合作伙伴发送的券，此处为伙伴ID。如果是活动发券，此处为活动ID：云豆兑换优惠券：云豆计划ID累计送优惠券：累计送计划ID抽奖送优惠券：抽奖计划ID事件送优惠券：事件计划ID定制优惠券：创建人ID
    *
    * @return string|null
    */
    public function getSourceId()
    {
        return $this->container['sourceId'];
    }

    /**
    * Sets sourceId
    *
    * @param string|null $sourceId 发券来源。 如果是合作伙伴发送的券，此处为伙伴ID。如果是活动发券，此处为活动ID：云豆兑换优惠券：云豆计划ID累计送优惠券：累计送计划ID抽奖送优惠券：抽奖计划ID事件送优惠券：事件计划ID定制优惠券：创建人ID
    *
    * @return $this
    */
    public function setSourceId($sourceId)
    {
        $this->container['sourceId'] = $sourceId;
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

