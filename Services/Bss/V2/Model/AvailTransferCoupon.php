<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AvailTransferCoupon implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AvailTransferCoupon';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * couponId  优惠券ID。
    * planName  促销计划名称。
    * balance  优惠券余额。单位为元
    * effectiveTime  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * expireTime  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * useLimits  优惠券限制。 具体请参见表3。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'couponId' => 'string',
            'planName' => 'string',
            'balance' => 'string',
            'effectiveTime' => 'string',
            'expireTime' => 'string',
            'useLimits' => '\HuaweiCloud\SDK\Bss\V2\Model\ICouponUseLimitInfoV2[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * couponId  优惠券ID。
    * planName  促销计划名称。
    * balance  优惠券余额。单位为元
    * effectiveTime  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * expireTime  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * useLimits  优惠券限制。 具体请参见表3。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'couponId' => null,
        'planName' => null,
        'balance' => null,
        'effectiveTime' => null,
        'expireTime' => null,
        'useLimits' => null
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
    * planName  促销计划名称。
    * balance  优惠券余额。单位为元
    * effectiveTime  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * expireTime  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * useLimits  优惠券限制。 具体请参见表3。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'couponId' => 'coupon_id',
            'planName' => 'plan_name',
            'balance' => 'balance',
            'effectiveTime' => 'effective_time',
            'expireTime' => 'expire_time',
            'useLimits' => 'use_limits'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * couponId  优惠券ID。
    * planName  促销计划名称。
    * balance  优惠券余额。单位为元
    * effectiveTime  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * expireTime  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * useLimits  优惠券限制。 具体请参见表3。
    *
    * @var string[]
    */
    protected static $setters = [
            'couponId' => 'setCouponId',
            'planName' => 'setPlanName',
            'balance' => 'setBalance',
            'effectiveTime' => 'setEffectiveTime',
            'expireTime' => 'setExpireTime',
            'useLimits' => 'setUseLimits'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * couponId  优惠券ID。
    * planName  促销计划名称。
    * balance  优惠券余额。单位为元
    * effectiveTime  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * expireTime  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * useLimits  优惠券限制。 具体请参见表3。
    *
    * @var string[]
    */
    protected static $getters = [
            'couponId' => 'getCouponId',
            'planName' => 'getPlanName',
            'balance' => 'getBalance',
            'effectiveTime' => 'getEffectiveTime',
            'expireTime' => 'getExpireTime',
            'useLimits' => 'getUseLimits'
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
        $this->container['planName'] = isset($data['planName']) ? $data['planName'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['effectiveTime'] = isset($data['effectiveTime']) ? $data['effectiveTime'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['useLimits'] = isset($data['useLimits']) ? $data['useLimits'] : null;
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
    * Gets balance
    *  优惠券余额。单位为元
    *
    * @return string|null
    */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
    * Sets balance
    *
    * @param string|null $balance 优惠券余额。单位为元
    *
    * @return $this
    */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;
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

