<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListOrderCouponsByOrderIdResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListOrderCouponsByOrderIdResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * count  查询总数。
    * userCoupons  可用的优惠券列表。 具体请参见表2。
    * couponMaxUseQuantity  优惠券使用的最大数量。 具体请参见表4。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'count' => 'int',
            'userCoupons' => '\HuaweiCloud\SDK\Bss\V2\Model\CouponInfoV2[]',
            'couponMaxUseQuantity' => '\HuaweiCloud\SDK\Bss\V2\Model\CouponMaxUseQuantity[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * count  查询总数。
    * userCoupons  可用的优惠券列表。 具体请参见表2。
    * couponMaxUseQuantity  优惠券使用的最大数量。 具体请参见表4。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'count' => 'int32',
        'userCoupons' => null,
        'couponMaxUseQuantity' => null
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
    * count  查询总数。
    * userCoupons  可用的优惠券列表。 具体请参见表2。
    * couponMaxUseQuantity  优惠券使用的最大数量。 具体请参见表4。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'count' => 'count',
            'userCoupons' => 'user_coupons',
            'couponMaxUseQuantity' => 'coupon_max_use_quantity'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * count  查询总数。
    * userCoupons  可用的优惠券列表。 具体请参见表2。
    * couponMaxUseQuantity  优惠券使用的最大数量。 具体请参见表4。
    *
    * @var string[]
    */
    protected static $setters = [
            'count' => 'setCount',
            'userCoupons' => 'setUserCoupons',
            'couponMaxUseQuantity' => 'setCouponMaxUseQuantity'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * count  查询总数。
    * userCoupons  可用的优惠券列表。 具体请参见表2。
    * couponMaxUseQuantity  优惠券使用的最大数量。 具体请参见表4。
    *
    * @var string[]
    */
    protected static $getters = [
            'count' => 'getCount',
            'userCoupons' => 'getUserCoupons',
            'couponMaxUseQuantity' => 'getCouponMaxUseQuantity'
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
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['userCoupons'] = isset($data['userCoupons']) ? $data['userCoupons'] : null;
        $this->container['couponMaxUseQuantity'] = isset($data['couponMaxUseQuantity']) ? $data['couponMaxUseQuantity'] : null;
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
    * Gets count
    *  查询总数。
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 查询总数。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets userCoupons
    *  可用的优惠券列表。 具体请参见表2。
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\CouponInfoV2[]|null
    */
    public function getUserCoupons()
    {
        return $this->container['userCoupons'];
    }

    /**
    * Sets userCoupons
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\CouponInfoV2[]|null $userCoupons 可用的优惠券列表。 具体请参见表2。
    *
    * @return $this
    */
    public function setUserCoupons($userCoupons)
    {
        $this->container['userCoupons'] = $userCoupons;
        return $this;
    }

    /**
    * Gets couponMaxUseQuantity
    *  优惠券使用的最大数量。 具体请参见表4。
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\CouponMaxUseQuantity[]|null
    */
    public function getCouponMaxUseQuantity()
    {
        return $this->container['couponMaxUseQuantity'];
    }

    /**
    * Sets couponMaxUseQuantity
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\CouponMaxUseQuantity[]|null $couponMaxUseQuantity 优惠券使用的最大数量。 具体请参见表4。
    *
    * @return $this
    */
    public function setCouponMaxUseQuantity($couponMaxUseQuantity)
    {
        $this->container['couponMaxUseQuantity'] = $couponMaxUseQuantity;
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

