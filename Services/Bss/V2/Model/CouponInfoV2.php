<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CouponInfoV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CouponInfoV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * couponId  优惠券实例ID。
    * couponCode  优惠券编码。
    * status  优惠券状态： 1：未激活2：待使用
    * couponType  优惠券类型。 1：代金券2：折扣券3：产品券4：现金券
    * measureId  面额单位： 1：元。
    * faceValue  面值。
    * effectiveTime  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * expireTime  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * planName  促销计划名称。
    * planDesc  促销计划描述。
    * useLimits  优惠券限制。 具体请参见表3。
    * activeTime  激活时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * lastUsedTime  上一次使用时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * createTime  创建时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * couponVersion  优惠券版本。 1：老版本（包含三种：代金券、折扣券和奖金券）2：新版本（只有代金券）
    * balance  余额。
    * usedByOrderId  使用优惠券的订单ID。表示有订单正在使用这个优惠券，优惠券已被锁定，只有锁定优惠券的订单才能使用这个优惠券，其他订单不能使用该优惠券。
    * couponUsage  优惠券用途。
    * couponGroup  优惠券分组。 1：云市场发放的券2：华为云券-1024-专用代金券3：华为云券-使用限制-抵扣硬件的券0：华为云服务券（排除上述取值之外的券）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'couponId' => 'string',
            'couponCode' => 'string',
            'status' => 'int',
            'couponType' => 'int',
            'measureId' => 'int',
            'faceValue' => 'double',
            'effectiveTime' => 'string',
            'expireTime' => 'string',
            'planName' => 'string',
            'planDesc' => 'string',
            'useLimits' => '\HuaweiCloud\SDK\Bss\V2\Model\LimitInfoV2[]',
            'activeTime' => 'string',
            'lastUsedTime' => 'string',
            'createTime' => 'string',
            'couponVersion' => 'int',
            'balance' => 'double',
            'usedByOrderId' => 'string',
            'couponUsage' => 'string',
            'couponGroup' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * couponId  优惠券实例ID。
    * couponCode  优惠券编码。
    * status  优惠券状态： 1：未激活2：待使用
    * couponType  优惠券类型。 1：代金券2：折扣券3：产品券4：现金券
    * measureId  面额单位： 1：元。
    * faceValue  面值。
    * effectiveTime  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * expireTime  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * planName  促销计划名称。
    * planDesc  促销计划描述。
    * useLimits  优惠券限制。 具体请参见表3。
    * activeTime  激活时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * lastUsedTime  上一次使用时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * createTime  创建时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * couponVersion  优惠券版本。 1：老版本（包含三种：代金券、折扣券和奖金券）2：新版本（只有代金券）
    * balance  余额。
    * usedByOrderId  使用优惠券的订单ID。表示有订单正在使用这个优惠券，优惠券已被锁定，只有锁定优惠券的订单才能使用这个优惠券，其他订单不能使用该优惠券。
    * couponUsage  优惠券用途。
    * couponGroup  优惠券分组。 1：云市场发放的券2：华为云券-1024-专用代金券3：华为云券-使用限制-抵扣硬件的券0：华为云服务券（排除上述取值之外的券）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'couponId' => null,
        'couponCode' => null,
        'status' => 'int32',
        'couponType' => 'int32',
        'measureId' => 'int32',
        'faceValue' => 'double',
        'effectiveTime' => null,
        'expireTime' => null,
        'planName' => null,
        'planDesc' => null,
        'useLimits' => null,
        'activeTime' => null,
        'lastUsedTime' => null,
        'createTime' => null,
        'couponVersion' => 'int32',
        'balance' => 'double',
        'usedByOrderId' => null,
        'couponUsage' => null,
        'couponGroup' => 'int32'
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
    * status  优惠券状态： 1：未激活2：待使用
    * couponType  优惠券类型。 1：代金券2：折扣券3：产品券4：现金券
    * measureId  面额单位： 1：元。
    * faceValue  面值。
    * effectiveTime  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * expireTime  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * planName  促销计划名称。
    * planDesc  促销计划描述。
    * useLimits  优惠券限制。 具体请参见表3。
    * activeTime  激活时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * lastUsedTime  上一次使用时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * createTime  创建时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * couponVersion  优惠券版本。 1：老版本（包含三种：代金券、折扣券和奖金券）2：新版本（只有代金券）
    * balance  余额。
    * usedByOrderId  使用优惠券的订单ID。表示有订单正在使用这个优惠券，优惠券已被锁定，只有锁定优惠券的订单才能使用这个优惠券，其他订单不能使用该优惠券。
    * couponUsage  优惠券用途。
    * couponGroup  优惠券分组。 1：云市场发放的券2：华为云券-1024-专用代金券3：华为云券-使用限制-抵扣硬件的券0：华为云服务券（排除上述取值之外的券）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'couponId' => 'coupon_id',
            'couponCode' => 'coupon_code',
            'status' => 'status',
            'couponType' => 'coupon_type',
            'measureId' => 'measure_id',
            'faceValue' => 'face_value',
            'effectiveTime' => 'effective_time',
            'expireTime' => 'expire_time',
            'planName' => 'plan_name',
            'planDesc' => 'plan_desc',
            'useLimits' => 'use_limits',
            'activeTime' => 'active_time',
            'lastUsedTime' => 'last_used_time',
            'createTime' => 'create_time',
            'couponVersion' => 'coupon_version',
            'balance' => 'balance',
            'usedByOrderId' => 'used_by_order_id',
            'couponUsage' => 'coupon_usage',
            'couponGroup' => 'coupon_group'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * couponId  优惠券实例ID。
    * couponCode  优惠券编码。
    * status  优惠券状态： 1：未激活2：待使用
    * couponType  优惠券类型。 1：代金券2：折扣券3：产品券4：现金券
    * measureId  面额单位： 1：元。
    * faceValue  面值。
    * effectiveTime  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * expireTime  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * planName  促销计划名称。
    * planDesc  促销计划描述。
    * useLimits  优惠券限制。 具体请参见表3。
    * activeTime  激活时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * lastUsedTime  上一次使用时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * createTime  创建时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * couponVersion  优惠券版本。 1：老版本（包含三种：代金券、折扣券和奖金券）2：新版本（只有代金券）
    * balance  余额。
    * usedByOrderId  使用优惠券的订单ID。表示有订单正在使用这个优惠券，优惠券已被锁定，只有锁定优惠券的订单才能使用这个优惠券，其他订单不能使用该优惠券。
    * couponUsage  优惠券用途。
    * couponGroup  优惠券分组。 1：云市场发放的券2：华为云券-1024-专用代金券3：华为云券-使用限制-抵扣硬件的券0：华为云服务券（排除上述取值之外的券）
    *
    * @var string[]
    */
    protected static $setters = [
            'couponId' => 'setCouponId',
            'couponCode' => 'setCouponCode',
            'status' => 'setStatus',
            'couponType' => 'setCouponType',
            'measureId' => 'setMeasureId',
            'faceValue' => 'setFaceValue',
            'effectiveTime' => 'setEffectiveTime',
            'expireTime' => 'setExpireTime',
            'planName' => 'setPlanName',
            'planDesc' => 'setPlanDesc',
            'useLimits' => 'setUseLimits',
            'activeTime' => 'setActiveTime',
            'lastUsedTime' => 'setLastUsedTime',
            'createTime' => 'setCreateTime',
            'couponVersion' => 'setCouponVersion',
            'balance' => 'setBalance',
            'usedByOrderId' => 'setUsedByOrderId',
            'couponUsage' => 'setCouponUsage',
            'couponGroup' => 'setCouponGroup'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * couponId  优惠券实例ID。
    * couponCode  优惠券编码。
    * status  优惠券状态： 1：未激活2：待使用
    * couponType  优惠券类型。 1：代金券2：折扣券3：产品券4：现金券
    * measureId  面额单位： 1：元。
    * faceValue  面值。
    * effectiveTime  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * expireTime  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * planName  促销计划名称。
    * planDesc  促销计划描述。
    * useLimits  优惠券限制。 具体请参见表3。
    * activeTime  激活时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * lastUsedTime  上一次使用时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * createTime  创建时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * couponVersion  优惠券版本。 1：老版本（包含三种：代金券、折扣券和奖金券）2：新版本（只有代金券）
    * balance  余额。
    * usedByOrderId  使用优惠券的订单ID。表示有订单正在使用这个优惠券，优惠券已被锁定，只有锁定优惠券的订单才能使用这个优惠券，其他订单不能使用该优惠券。
    * couponUsage  优惠券用途。
    * couponGroup  优惠券分组。 1：云市场发放的券2：华为云券-1024-专用代金券3：华为云券-使用限制-抵扣硬件的券0：华为云服务券（排除上述取值之外的券）
    *
    * @var string[]
    */
    protected static $getters = [
            'couponId' => 'getCouponId',
            'couponCode' => 'getCouponCode',
            'status' => 'getStatus',
            'couponType' => 'getCouponType',
            'measureId' => 'getMeasureId',
            'faceValue' => 'getFaceValue',
            'effectiveTime' => 'getEffectiveTime',
            'expireTime' => 'getExpireTime',
            'planName' => 'getPlanName',
            'planDesc' => 'getPlanDesc',
            'useLimits' => 'getUseLimits',
            'activeTime' => 'getActiveTime',
            'lastUsedTime' => 'getLastUsedTime',
            'createTime' => 'getCreateTime',
            'couponVersion' => 'getCouponVersion',
            'balance' => 'getBalance',
            'usedByOrderId' => 'getUsedByOrderId',
            'couponUsage' => 'getCouponUsage',
            'couponGroup' => 'getCouponGroup'
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
        $this->container['couponType'] = isset($data['couponType']) ? $data['couponType'] : null;
        $this->container['measureId'] = isset($data['measureId']) ? $data['measureId'] : null;
        $this->container['faceValue'] = isset($data['faceValue']) ? $data['faceValue'] : null;
        $this->container['effectiveTime'] = isset($data['effectiveTime']) ? $data['effectiveTime'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['planName'] = isset($data['planName']) ? $data['planName'] : null;
        $this->container['planDesc'] = isset($data['planDesc']) ? $data['planDesc'] : null;
        $this->container['useLimits'] = isset($data['useLimits']) ? $data['useLimits'] : null;
        $this->container['activeTime'] = isset($data['activeTime']) ? $data['activeTime'] : null;
        $this->container['lastUsedTime'] = isset($data['lastUsedTime']) ? $data['lastUsedTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['couponVersion'] = isset($data['couponVersion']) ? $data['couponVersion'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['usedByOrderId'] = isset($data['usedByOrderId']) ? $data['usedByOrderId'] : null;
        $this->container['couponUsage'] = isset($data['couponUsage']) ? $data['couponUsage'] : null;
        $this->container['couponGroup'] = isset($data['couponGroup']) ? $data['couponGroup'] : null;
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
    *  优惠券状态： 1：未激活2：待使用
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
    * @param int|null $status 优惠券状态： 1：未激活2：待使用
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets couponType
    *  优惠券类型。 1：代金券2：折扣券3：产品券4：现金券
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
    * @param int|null $couponType 优惠券类型。 1：代金券2：折扣券3：产品券4：现金券
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
    *  面额单位： 1：元。
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
    * @param int|null $measureId 面额单位： 1：元。
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
    *  面值。
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
    * @param double|null $faceValue 面值。
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
    * Gets useLimits
    *  优惠券限制。 具体请参见表3。
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\LimitInfoV2[]|null
    */
    public function getUseLimits()
    {
        return $this->container['useLimits'];
    }

    /**
    * Sets useLimits
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\LimitInfoV2[]|null $useLimits 优惠券限制。 具体请参见表3。
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
    * Gets lastUsedTime
    *  上一次使用时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
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
    * @param string|null $lastUsedTime 上一次使用时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    *
    * @return $this
    */
    public function setLastUsedTime($lastUsedTime)
    {
        $this->container['lastUsedTime'] = $lastUsedTime;
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
    *  优惠券版本。 1：老版本（包含三种：代金券、折扣券和奖金券）2：新版本（只有代金券）
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
    * @param int|null $couponVersion 优惠券版本。 1：老版本（包含三种：代金券、折扣券和奖金券）2：新版本（只有代金券）
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
    *  余额。
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
    * @param double|null $balance 余额。
    *
    * @return $this
    */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;
        return $this;
    }

    /**
    * Gets usedByOrderId
    *  使用优惠券的订单ID。表示有订单正在使用这个优惠券，优惠券已被锁定，只有锁定优惠券的订单才能使用这个优惠券，其他订单不能使用该优惠券。
    *
    * @return string|null
    */
    public function getUsedByOrderId()
    {
        return $this->container['usedByOrderId'];
    }

    /**
    * Sets usedByOrderId
    *
    * @param string|null $usedByOrderId 使用优惠券的订单ID。表示有订单正在使用这个优惠券，优惠券已被锁定，只有锁定优惠券的订单才能使用这个优惠券，其他订单不能使用该优惠券。
    *
    * @return $this
    */
    public function setUsedByOrderId($usedByOrderId)
    {
        $this->container['usedByOrderId'] = $usedByOrderId;
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
    * Gets couponGroup
    *  优惠券分组。 1：云市场发放的券2：华为云券-1024-专用代金券3：华为云券-使用限制-抵扣硬件的券0：华为云服务券（排除上述取值之外的券）
    *
    * @return int|null
    */
    public function getCouponGroup()
    {
        return $this->container['couponGroup'];
    }

    /**
    * Sets couponGroup
    *
    * @param int|null $couponGroup 优惠券分组。 1：云市场发放的券2：华为云券-1024-专用代金券3：华为云券-使用限制-抵扣硬件的券0：华为云服务券（排除上述取值之外的券）
    *
    * @return $this
    */
    public function setCouponGroup($couponGroup)
    {
        $this->container['couponGroup'] = $couponGroup;
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

