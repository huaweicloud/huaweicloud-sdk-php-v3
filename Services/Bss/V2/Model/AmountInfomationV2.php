<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AmountInfomationV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AmountInfomationV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * discounts  费用项。 具体请参见表7。
    * flexipurchaseCouponAmount  现金券金额。
    * couponAmount  代金券金额。
    * storedCardAmount  储值卡金额。
    * commissionAmount  手续费（仅退订订单存在）。
    * consumedAmount  消费金额（仅退订订单存在）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'discounts' => '\HuaweiCloud\SDK\Bss\V2\Model\DiscountItemV2[]',
            'flexipurchaseCouponAmount' => 'double',
            'couponAmount' => 'double',
            'storedCardAmount' => 'double',
            'commissionAmount' => 'double',
            'consumedAmount' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * discounts  费用项。 具体请参见表7。
    * flexipurchaseCouponAmount  现金券金额。
    * couponAmount  代金券金额。
    * storedCardAmount  储值卡金额。
    * commissionAmount  手续费（仅退订订单存在）。
    * consumedAmount  消费金额（仅退订订单存在）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'discounts' => null,
        'flexipurchaseCouponAmount' => 'double',
        'couponAmount' => 'double',
        'storedCardAmount' => 'double',
        'commissionAmount' => 'double',
        'consumedAmount' => 'double'
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
    * discounts  费用项。 具体请参见表7。
    * flexipurchaseCouponAmount  现金券金额。
    * couponAmount  代金券金额。
    * storedCardAmount  储值卡金额。
    * commissionAmount  手续费（仅退订订单存在）。
    * consumedAmount  消费金额（仅退订订单存在）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'discounts' => 'discounts',
            'flexipurchaseCouponAmount' => 'flexipurchase_coupon_amount',
            'couponAmount' => 'coupon_amount',
            'storedCardAmount' => 'stored_card_amount',
            'commissionAmount' => 'commission_amount',
            'consumedAmount' => 'consumed_amount'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * discounts  费用项。 具体请参见表7。
    * flexipurchaseCouponAmount  现金券金额。
    * couponAmount  代金券金额。
    * storedCardAmount  储值卡金额。
    * commissionAmount  手续费（仅退订订单存在）。
    * consumedAmount  消费金额（仅退订订单存在）。
    *
    * @var string[]
    */
    protected static $setters = [
            'discounts' => 'setDiscounts',
            'flexipurchaseCouponAmount' => 'setFlexipurchaseCouponAmount',
            'couponAmount' => 'setCouponAmount',
            'storedCardAmount' => 'setStoredCardAmount',
            'commissionAmount' => 'setCommissionAmount',
            'consumedAmount' => 'setConsumedAmount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * discounts  费用项。 具体请参见表7。
    * flexipurchaseCouponAmount  现金券金额。
    * couponAmount  代金券金额。
    * storedCardAmount  储值卡金额。
    * commissionAmount  手续费（仅退订订单存在）。
    * consumedAmount  消费金额（仅退订订单存在）。
    *
    * @var string[]
    */
    protected static $getters = [
            'discounts' => 'getDiscounts',
            'flexipurchaseCouponAmount' => 'getFlexipurchaseCouponAmount',
            'couponAmount' => 'getCouponAmount',
            'storedCardAmount' => 'getStoredCardAmount',
            'commissionAmount' => 'getCommissionAmount',
            'consumedAmount' => 'getConsumedAmount'
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
        $this->container['discounts'] = isset($data['discounts']) ? $data['discounts'] : null;
        $this->container['flexipurchaseCouponAmount'] = isset($data['flexipurchaseCouponAmount']) ? $data['flexipurchaseCouponAmount'] : null;
        $this->container['couponAmount'] = isset($data['couponAmount']) ? $data['couponAmount'] : null;
        $this->container['storedCardAmount'] = isset($data['storedCardAmount']) ? $data['storedCardAmount'] : null;
        $this->container['commissionAmount'] = isset($data['commissionAmount']) ? $data['commissionAmount'] : null;
        $this->container['consumedAmount'] = isset($data['consumedAmount']) ? $data['consumedAmount'] : null;
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
    * Gets discounts
    *  费用项。 具体请参见表7。
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\DiscountItemV2[]|null
    */
    public function getDiscounts()
    {
        return $this->container['discounts'];
    }

    /**
    * Sets discounts
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\DiscountItemV2[]|null $discounts 费用项。 具体请参见表7。
    *
    * @return $this
    */
    public function setDiscounts($discounts)
    {
        $this->container['discounts'] = $discounts;
        return $this;
    }

    /**
    * Gets flexipurchaseCouponAmount
    *  现金券金额。
    *
    * @return double|null
    */
    public function getFlexipurchaseCouponAmount()
    {
        return $this->container['flexipurchaseCouponAmount'];
    }

    /**
    * Sets flexipurchaseCouponAmount
    *
    * @param double|null $flexipurchaseCouponAmount 现金券金额。
    *
    * @return $this
    */
    public function setFlexipurchaseCouponAmount($flexipurchaseCouponAmount)
    {
        $this->container['flexipurchaseCouponAmount'] = $flexipurchaseCouponAmount;
        return $this;
    }

    /**
    * Gets couponAmount
    *  代金券金额。
    *
    * @return double|null
    */
    public function getCouponAmount()
    {
        return $this->container['couponAmount'];
    }

    /**
    * Sets couponAmount
    *
    * @param double|null $couponAmount 代金券金额。
    *
    * @return $this
    */
    public function setCouponAmount($couponAmount)
    {
        $this->container['couponAmount'] = $couponAmount;
        return $this;
    }

    /**
    * Gets storedCardAmount
    *  储值卡金额。
    *
    * @return double|null
    */
    public function getStoredCardAmount()
    {
        return $this->container['storedCardAmount'];
    }

    /**
    * Sets storedCardAmount
    *
    * @param double|null $storedCardAmount 储值卡金额。
    *
    * @return $this
    */
    public function setStoredCardAmount($storedCardAmount)
    {
        $this->container['storedCardAmount'] = $storedCardAmount;
        return $this;
    }

    /**
    * Gets commissionAmount
    *  手续费（仅退订订单存在）。
    *
    * @return double|null
    */
    public function getCommissionAmount()
    {
        return $this->container['commissionAmount'];
    }

    /**
    * Sets commissionAmount
    *
    * @param double|null $commissionAmount 手续费（仅退订订单存在）。
    *
    * @return $this
    */
    public function setCommissionAmount($commissionAmount)
    {
        $this->container['commissionAmount'] = $commissionAmount;
        return $this;
    }

    /**
    * Gets consumedAmount
    *  消费金额（仅退订订单存在）。
    *
    * @return double|null
    */
    public function getConsumedAmount()
    {
        return $this->container['consumedAmount'];
    }

    /**
    * Sets consumedAmount
    *
    * @param double|null $consumedAmount 消费金额（仅退订订单存在）。
    *
    * @return $this
    */
    public function setConsumedAmount($consumedAmount)
    {
        $this->container['consumedAmount'] = $consumedAmount;
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

