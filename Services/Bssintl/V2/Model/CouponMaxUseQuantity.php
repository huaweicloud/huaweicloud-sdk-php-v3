<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CouponMaxUseQuantity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CouponMaxUseQuantity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * couponType  |参数名称：优惠券类型| |参数的约束及描述：1：代金券，2：折扣券，3：产品券,4: 现金券|
    * couponGroup  |参数名称：优惠券分组| |参数的约束及描述：1: 云市场发放的券 3: 华为云券-使用限制-抵扣硬件的券 0: 华为云服务券（排除上述取值之外的券）|
    * useQuantityValue  |参数名称：优惠券使用数量value| |参数的约束及描述：优惠券使用数量value。注：专用券使用数量仅指单个订单内，对于合并支付，每个订单都可以使用一张专用券|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'couponType' => 'int',
            'couponGroup' => 'int',
            'useQuantityValue' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * couponType  |参数名称：优惠券类型| |参数的约束及描述：1：代金券，2：折扣券，3：产品券,4: 现金券|
    * couponGroup  |参数名称：优惠券分组| |参数的约束及描述：1: 云市场发放的券 3: 华为云券-使用限制-抵扣硬件的券 0: 华为云服务券（排除上述取值之外的券）|
    * useQuantityValue  |参数名称：优惠券使用数量value| |参数的约束及描述：优惠券使用数量value。注：专用券使用数量仅指单个订单内，对于合并支付，每个订单都可以使用一张专用券|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'couponType' => 'int32',
        'couponGroup' => 'int32',
        'useQuantityValue' => 'int32'
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
    * couponType  |参数名称：优惠券类型| |参数的约束及描述：1：代金券，2：折扣券，3：产品券,4: 现金券|
    * couponGroup  |参数名称：优惠券分组| |参数的约束及描述：1: 云市场发放的券 3: 华为云券-使用限制-抵扣硬件的券 0: 华为云服务券（排除上述取值之外的券）|
    * useQuantityValue  |参数名称：优惠券使用数量value| |参数的约束及描述：优惠券使用数量value。注：专用券使用数量仅指单个订单内，对于合并支付，每个订单都可以使用一张专用券|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'couponType' => 'coupon_type',
            'couponGroup' => 'coupon_group',
            'useQuantityValue' => 'use_quantity_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * couponType  |参数名称：优惠券类型| |参数的约束及描述：1：代金券，2：折扣券，3：产品券,4: 现金券|
    * couponGroup  |参数名称：优惠券分组| |参数的约束及描述：1: 云市场发放的券 3: 华为云券-使用限制-抵扣硬件的券 0: 华为云服务券（排除上述取值之外的券）|
    * useQuantityValue  |参数名称：优惠券使用数量value| |参数的约束及描述：优惠券使用数量value。注：专用券使用数量仅指单个订单内，对于合并支付，每个订单都可以使用一张专用券|
    *
    * @var string[]
    */
    protected static $setters = [
            'couponType' => 'setCouponType',
            'couponGroup' => 'setCouponGroup',
            'useQuantityValue' => 'setUseQuantityValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * couponType  |参数名称：优惠券类型| |参数的约束及描述：1：代金券，2：折扣券，3：产品券,4: 现金券|
    * couponGroup  |参数名称：优惠券分组| |参数的约束及描述：1: 云市场发放的券 3: 华为云券-使用限制-抵扣硬件的券 0: 华为云服务券（排除上述取值之外的券）|
    * useQuantityValue  |参数名称：优惠券使用数量value| |参数的约束及描述：优惠券使用数量value。注：专用券使用数量仅指单个订单内，对于合并支付，每个订单都可以使用一张专用券|
    *
    * @var string[]
    */
    protected static $getters = [
            'couponType' => 'getCouponType',
            'couponGroup' => 'getCouponGroup',
            'useQuantityValue' => 'getUseQuantityValue'
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
        $this->container['couponType'] = isset($data['couponType']) ? $data['couponType'] : null;
        $this->container['couponGroup'] = isset($data['couponGroup']) ? $data['couponGroup'] : null;
        $this->container['useQuantityValue'] = isset($data['useQuantityValue']) ? $data['useQuantityValue'] : null;
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
    * Gets couponType
    *  |参数名称：优惠券类型| |参数的约束及描述：1：代金券，2：折扣券，3：产品券,4: 现金券|
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
    * @param int|null $couponType |参数名称：优惠券类型| |参数的约束及描述：1：代金券，2：折扣券，3：产品券,4: 现金券|
    *
    * @return $this
    */
    public function setCouponType($couponType)
    {
        $this->container['couponType'] = $couponType;
        return $this;
    }

    /**
    * Gets couponGroup
    *  |参数名称：优惠券分组| |参数的约束及描述：1: 云市场发放的券 3: 华为云券-使用限制-抵扣硬件的券 0: 华为云服务券（排除上述取值之外的券）|
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
    * @param int|null $couponGroup |参数名称：优惠券分组| |参数的约束及描述：1: 云市场发放的券 3: 华为云券-使用限制-抵扣硬件的券 0: 华为云服务券（排除上述取值之外的券）|
    *
    * @return $this
    */
    public function setCouponGroup($couponGroup)
    {
        $this->container['couponGroup'] = $couponGroup;
        return $this;
    }

    /**
    * Gets useQuantityValue
    *  |参数名称：优惠券使用数量value| |参数的约束及描述：优惠券使用数量value。注：专用券使用数量仅指单个订单内，对于合并支付，每个订单都可以使用一张专用券|
    *
    * @return int|null
    */
    public function getUseQuantityValue()
    {
        return $this->container['useQuantityValue'];
    }

    /**
    * Sets useQuantityValue
    *
    * @param int|null $useQuantityValue |参数名称：优惠券使用数量value| |参数的约束及描述：优惠券使用数量value。注：专用券使用数量仅指单个订单内，对于合并支付，每个订单都可以使用一张专用券|
    *
    * @return $this
    */
    public function setUseQuantityValue($useQuantityValue)
    {
        $this->container['useQuantityValue'] = $useQuantityValue;
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

