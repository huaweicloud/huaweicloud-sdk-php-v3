<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PayCustomerOrderV3Req implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PayCustomerOrderV3Req';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * orderId  订单编号。 取值为调用“查询订单列表”接口时响应消息中的“order_id”字段的值或调用“续订包年/包月资源”接口时响应消息“order_ids”中的订单ID。
    * useCoupon  本次订单支付是否使用优惠券。传递“YES”时，coupon_infos字段必选，传递“NO”时，会忽略coupon_infos字段的传值。 使用优惠券：YES，不使用优惠券：NO
    * useDiscount  本次订单支付是否使用折扣。传递“YES”时，discount_infos字段必选，传递“NO”时，会忽略discount_infos字段的传值。 使用折扣：YES，不使用折扣：NO
    * couponInfos  优惠券ID列表，目前支持传递最多三个优惠券ID。 请从“查询订单可用优惠券”接口的响应参数中获取。 具体参见表1。 当use_coupon参数取值为“YES”，本字段必填；当use_coupon参数取值为“NO”，本字段不可填写，否则报参数错误。
    * discountInfos  折扣ID列表，目前仅支持传递一个折扣ID。 请从“查询订单可用折扣”接口的响应参数中获取。 具体参见表2。 当use_discount参数取值为“YES”，本字段必填；当use_discount参数取值为“NO”，本字段不可填写，否则报参数错误。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'orderId' => 'string',
            'useCoupon' => 'string',
            'useDiscount' => 'string',
            'couponInfos' => '\HuaweiCloud\SDK\Bssintl\V2\Model\CouponSimpleInfoOrderPayV3[]',
            'discountInfos' => '\HuaweiCloud\SDK\Bssintl\V2\Model\DiscountSimpleInfoV3[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * orderId  订单编号。 取值为调用“查询订单列表”接口时响应消息中的“order_id”字段的值或调用“续订包年/包月资源”接口时响应消息“order_ids”中的订单ID。
    * useCoupon  本次订单支付是否使用优惠券。传递“YES”时，coupon_infos字段必选，传递“NO”时，会忽略coupon_infos字段的传值。 使用优惠券：YES，不使用优惠券：NO
    * useDiscount  本次订单支付是否使用折扣。传递“YES”时，discount_infos字段必选，传递“NO”时，会忽略discount_infos字段的传值。 使用折扣：YES，不使用折扣：NO
    * couponInfos  优惠券ID列表，目前支持传递最多三个优惠券ID。 请从“查询订单可用优惠券”接口的响应参数中获取。 具体参见表1。 当use_coupon参数取值为“YES”，本字段必填；当use_coupon参数取值为“NO”，本字段不可填写，否则报参数错误。
    * discountInfos  折扣ID列表，目前仅支持传递一个折扣ID。 请从“查询订单可用折扣”接口的响应参数中获取。 具体参见表2。 当use_discount参数取值为“YES”，本字段必填；当use_discount参数取值为“NO”，本字段不可填写，否则报参数错误。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'orderId' => null,
        'useCoupon' => null,
        'useDiscount' => null,
        'couponInfos' => null,
        'discountInfos' => null
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
    * orderId  订单编号。 取值为调用“查询订单列表”接口时响应消息中的“order_id”字段的值或调用“续订包年/包月资源”接口时响应消息“order_ids”中的订单ID。
    * useCoupon  本次订单支付是否使用优惠券。传递“YES”时，coupon_infos字段必选，传递“NO”时，会忽略coupon_infos字段的传值。 使用优惠券：YES，不使用优惠券：NO
    * useDiscount  本次订单支付是否使用折扣。传递“YES”时，discount_infos字段必选，传递“NO”时，会忽略discount_infos字段的传值。 使用折扣：YES，不使用折扣：NO
    * couponInfos  优惠券ID列表，目前支持传递最多三个优惠券ID。 请从“查询订单可用优惠券”接口的响应参数中获取。 具体参见表1。 当use_coupon参数取值为“YES”，本字段必填；当use_coupon参数取值为“NO”，本字段不可填写，否则报参数错误。
    * discountInfos  折扣ID列表，目前仅支持传递一个折扣ID。 请从“查询订单可用折扣”接口的响应参数中获取。 具体参见表2。 当use_discount参数取值为“YES”，本字段必填；当use_discount参数取值为“NO”，本字段不可填写，否则报参数错误。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'orderId' => 'order_id',
            'useCoupon' => 'use_coupon',
            'useDiscount' => 'use_discount',
            'couponInfos' => 'coupon_infos',
            'discountInfos' => 'discount_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * orderId  订单编号。 取值为调用“查询订单列表”接口时响应消息中的“order_id”字段的值或调用“续订包年/包月资源”接口时响应消息“order_ids”中的订单ID。
    * useCoupon  本次订单支付是否使用优惠券。传递“YES”时，coupon_infos字段必选，传递“NO”时，会忽略coupon_infos字段的传值。 使用优惠券：YES，不使用优惠券：NO
    * useDiscount  本次订单支付是否使用折扣。传递“YES”时，discount_infos字段必选，传递“NO”时，会忽略discount_infos字段的传值。 使用折扣：YES，不使用折扣：NO
    * couponInfos  优惠券ID列表，目前支持传递最多三个优惠券ID。 请从“查询订单可用优惠券”接口的响应参数中获取。 具体参见表1。 当use_coupon参数取值为“YES”，本字段必填；当use_coupon参数取值为“NO”，本字段不可填写，否则报参数错误。
    * discountInfos  折扣ID列表，目前仅支持传递一个折扣ID。 请从“查询订单可用折扣”接口的响应参数中获取。 具体参见表2。 当use_discount参数取值为“YES”，本字段必填；当use_discount参数取值为“NO”，本字段不可填写，否则报参数错误。
    *
    * @var string[]
    */
    protected static $setters = [
            'orderId' => 'setOrderId',
            'useCoupon' => 'setUseCoupon',
            'useDiscount' => 'setUseDiscount',
            'couponInfos' => 'setCouponInfos',
            'discountInfos' => 'setDiscountInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * orderId  订单编号。 取值为调用“查询订单列表”接口时响应消息中的“order_id”字段的值或调用“续订包年/包月资源”接口时响应消息“order_ids”中的订单ID。
    * useCoupon  本次订单支付是否使用优惠券。传递“YES”时，coupon_infos字段必选，传递“NO”时，会忽略coupon_infos字段的传值。 使用优惠券：YES，不使用优惠券：NO
    * useDiscount  本次订单支付是否使用折扣。传递“YES”时，discount_infos字段必选，传递“NO”时，会忽略discount_infos字段的传值。 使用折扣：YES，不使用折扣：NO
    * couponInfos  优惠券ID列表，目前支持传递最多三个优惠券ID。 请从“查询订单可用优惠券”接口的响应参数中获取。 具体参见表1。 当use_coupon参数取值为“YES”，本字段必填；当use_coupon参数取值为“NO”，本字段不可填写，否则报参数错误。
    * discountInfos  折扣ID列表，目前仅支持传递一个折扣ID。 请从“查询订单可用折扣”接口的响应参数中获取。 具体参见表2。 当use_discount参数取值为“YES”，本字段必填；当use_discount参数取值为“NO”，本字段不可填写，否则报参数错误。
    *
    * @var string[]
    */
    protected static $getters = [
            'orderId' => 'getOrderId',
            'useCoupon' => 'getUseCoupon',
            'useDiscount' => 'getUseDiscount',
            'couponInfos' => 'getCouponInfos',
            'discountInfos' => 'getDiscountInfos'
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
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['useCoupon'] = isset($data['useCoupon']) ? $data['useCoupon'] : null;
        $this->container['useDiscount'] = isset($data['useDiscount']) ? $data['useDiscount'] : null;
        $this->container['couponInfos'] = isset($data['couponInfos']) ? $data['couponInfos'] : null;
        $this->container['discountInfos'] = isset($data['discountInfos']) ? $data['discountInfos'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['orderId'] === null) {
            $invalidProperties[] = "'orderId' can't be null";
        }
            if ((mb_strlen($this->container['orderId']) > 64)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['orderId']) < 1)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['useCoupon'] === null) {
            $invalidProperties[] = "'useCoupon' can't be null";
        }
            if ((mb_strlen($this->container['useCoupon']) > 3)) {
                $invalidProperties[] = "invalid value for 'useCoupon', the character length must be smaller than or equal to 3.";
            }
            if ((mb_strlen($this->container['useCoupon']) < 1)) {
                $invalidProperties[] = "invalid value for 'useCoupon', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/YES|NO/", $this->container['useCoupon'])) {
                $invalidProperties[] = "invalid value for 'useCoupon', must be conform to the pattern /YES|NO/.";
            }
        if ($this->container['useDiscount'] === null) {
            $invalidProperties[] = "'useDiscount' can't be null";
        }
            if ((mb_strlen($this->container['useDiscount']) > 3)) {
                $invalidProperties[] = "invalid value for 'useDiscount', the character length must be smaller than or equal to 3.";
            }
            if ((mb_strlen($this->container['useDiscount']) < 1)) {
                $invalidProperties[] = "invalid value for 'useDiscount', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/YES|NO/", $this->container['useDiscount'])) {
                $invalidProperties[] = "invalid value for 'useDiscount', must be conform to the pattern /YES|NO/.";
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
    * Gets orderId
    *  订单编号。 取值为调用“查询订单列表”接口时响应消息中的“order_id”字段的值或调用“续订包年/包月资源”接口时响应消息“order_ids”中的订单ID。
    *
    * @return string
    */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
    * Sets orderId
    *
    * @param string $orderId 订单编号。 取值为调用“查询订单列表”接口时响应消息中的“order_id”字段的值或调用“续订包年/包月资源”接口时响应消息“order_ids”中的订单ID。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets useCoupon
    *  本次订单支付是否使用优惠券。传递“YES”时，coupon_infos字段必选，传递“NO”时，会忽略coupon_infos字段的传值。 使用优惠券：YES，不使用优惠券：NO
    *
    * @return string
    */
    public function getUseCoupon()
    {
        return $this->container['useCoupon'];
    }

    /**
    * Sets useCoupon
    *
    * @param string $useCoupon 本次订单支付是否使用优惠券。传递“YES”时，coupon_infos字段必选，传递“NO”时，会忽略coupon_infos字段的传值。 使用优惠券：YES，不使用优惠券：NO
    *
    * @return $this
    */
    public function setUseCoupon($useCoupon)
    {
        $this->container['useCoupon'] = $useCoupon;
        return $this;
    }

    /**
    * Gets useDiscount
    *  本次订单支付是否使用折扣。传递“YES”时，discount_infos字段必选，传递“NO”时，会忽略discount_infos字段的传值。 使用折扣：YES，不使用折扣：NO
    *
    * @return string
    */
    public function getUseDiscount()
    {
        return $this->container['useDiscount'];
    }

    /**
    * Sets useDiscount
    *
    * @param string $useDiscount 本次订单支付是否使用折扣。传递“YES”时，discount_infos字段必选，传递“NO”时，会忽略discount_infos字段的传值。 使用折扣：YES，不使用折扣：NO
    *
    * @return $this
    */
    public function setUseDiscount($useDiscount)
    {
        $this->container['useDiscount'] = $useDiscount;
        return $this;
    }

    /**
    * Gets couponInfos
    *  优惠券ID列表，目前支持传递最多三个优惠券ID。 请从“查询订单可用优惠券”接口的响应参数中获取。 具体参见表1。 当use_coupon参数取值为“YES”，本字段必填；当use_coupon参数取值为“NO”，本字段不可填写，否则报参数错误。
    *
    * @return \HuaweiCloud\SDK\Bssintl\V2\Model\CouponSimpleInfoOrderPayV3[]|null
    */
    public function getCouponInfos()
    {
        return $this->container['couponInfos'];
    }

    /**
    * Sets couponInfos
    *
    * @param \HuaweiCloud\SDK\Bssintl\V2\Model\CouponSimpleInfoOrderPayV3[]|null $couponInfos 优惠券ID列表，目前支持传递最多三个优惠券ID。 请从“查询订单可用优惠券”接口的响应参数中获取。 具体参见表1。 当use_coupon参数取值为“YES”，本字段必填；当use_coupon参数取值为“NO”，本字段不可填写，否则报参数错误。
    *
    * @return $this
    */
    public function setCouponInfos($couponInfos)
    {
        $this->container['couponInfos'] = $couponInfos;
        return $this;
    }

    /**
    * Gets discountInfos
    *  折扣ID列表，目前仅支持传递一个折扣ID。 请从“查询订单可用折扣”接口的响应参数中获取。 具体参见表2。 当use_discount参数取值为“YES”，本字段必填；当use_discount参数取值为“NO”，本字段不可填写，否则报参数错误。
    *
    * @return \HuaweiCloud\SDK\Bssintl\V2\Model\DiscountSimpleInfoV3[]|null
    */
    public function getDiscountInfos()
    {
        return $this->container['discountInfos'];
    }

    /**
    * Sets discountInfos
    *
    * @param \HuaweiCloud\SDK\Bssintl\V2\Model\DiscountSimpleInfoV3[]|null $discountInfos 折扣ID列表，目前仅支持传递一个折扣ID。 请从“查询订单可用折扣”接口的响应参数中获取。 具体参见表2。 当use_discount参数取值为“YES”，本字段必填；当use_discount参数取值为“NO”，本字段不可填写，否则报参数错误。
    *
    * @return $this
    */
    public function setDiscountInfos($discountInfos)
    {
        $this->container['discountInfos'] = $discountInfos;
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

