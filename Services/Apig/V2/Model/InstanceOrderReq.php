<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceOrderReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceOrderReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * productId  产品编号
    * chargingMode  计费模式。
    * paymentMode  支付模式。
    * periodType  订购周期类型： - 2：月 - 3：年
    * periodNum  订购周期数
    * isAutoRenew  是否支持自动续费
    * promotionId  促销产品编号
    * promotionPlanId  促销计划编号
    * promotionInfo  促销信息
    * compositeProductId  组合产品编号
    * instanceInfo  instanceInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'productId' => 'string',
            'chargingMode' => 'int',
            'paymentMode' => 'string',
            'periodType' => 'int',
            'periodNum' => 'int',
            'isAutoRenew' => 'int',
            'promotionId' => 'string',
            'promotionPlanId' => 'string',
            'promotionInfo' => 'string',
            'compositeProductId' => 'string',
            'instanceInfo' => '\HuaweiCloud\SDK\Apig\V2\Model\InstanceCreateReqV2'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * productId  产品编号
    * chargingMode  计费模式。
    * paymentMode  支付模式。
    * periodType  订购周期类型： - 2：月 - 3：年
    * periodNum  订购周期数
    * isAutoRenew  是否支持自动续费
    * promotionId  促销产品编号
    * promotionPlanId  促销计划编号
    * promotionInfo  促销信息
    * compositeProductId  组合产品编号
    * instanceInfo  instanceInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'productId' => null,
        'chargingMode' => null,
        'paymentMode' => null,
        'periodType' => null,
        'periodNum' => null,
        'isAutoRenew' => null,
        'promotionId' => null,
        'promotionPlanId' => null,
        'promotionInfo' => null,
        'compositeProductId' => null,
        'instanceInfo' => null
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
    * productId  产品编号
    * chargingMode  计费模式。
    * paymentMode  支付模式。
    * periodType  订购周期类型： - 2：月 - 3：年
    * periodNum  订购周期数
    * isAutoRenew  是否支持自动续费
    * promotionId  促销产品编号
    * promotionPlanId  促销计划编号
    * promotionInfo  促销信息
    * compositeProductId  组合产品编号
    * instanceInfo  instanceInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'productId' => 'product_id',
            'chargingMode' => 'charging_mode',
            'paymentMode' => 'payment_mode',
            'periodType' => 'period_type',
            'periodNum' => 'period_num',
            'isAutoRenew' => 'is_auto_renew',
            'promotionId' => 'promotion_id',
            'promotionPlanId' => 'promotion_plan_id',
            'promotionInfo' => 'promotion_info',
            'compositeProductId' => 'composite_product_id',
            'instanceInfo' => 'instance_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * productId  产品编号
    * chargingMode  计费模式。
    * paymentMode  支付模式。
    * periodType  订购周期类型： - 2：月 - 3：年
    * periodNum  订购周期数
    * isAutoRenew  是否支持自动续费
    * promotionId  促销产品编号
    * promotionPlanId  促销计划编号
    * promotionInfo  促销信息
    * compositeProductId  组合产品编号
    * instanceInfo  instanceInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'productId' => 'setProductId',
            'chargingMode' => 'setChargingMode',
            'paymentMode' => 'setPaymentMode',
            'periodType' => 'setPeriodType',
            'periodNum' => 'setPeriodNum',
            'isAutoRenew' => 'setIsAutoRenew',
            'promotionId' => 'setPromotionId',
            'promotionPlanId' => 'setPromotionPlanId',
            'promotionInfo' => 'setPromotionInfo',
            'compositeProductId' => 'setCompositeProductId',
            'instanceInfo' => 'setInstanceInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * productId  产品编号
    * chargingMode  计费模式。
    * paymentMode  支付模式。
    * periodType  订购周期类型： - 2：月 - 3：年
    * periodNum  订购周期数
    * isAutoRenew  是否支持自动续费
    * promotionId  促销产品编号
    * promotionPlanId  促销计划编号
    * promotionInfo  促销信息
    * compositeProductId  组合产品编号
    * instanceInfo  instanceInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'productId' => 'getProductId',
            'chargingMode' => 'getChargingMode',
            'paymentMode' => 'getPaymentMode',
            'periodType' => 'getPeriodType',
            'periodNum' => 'getPeriodNum',
            'isAutoRenew' => 'getIsAutoRenew',
            'promotionId' => 'getPromotionId',
            'promotionPlanId' => 'getPromotionPlanId',
            'promotionInfo' => 'getPromotionInfo',
            'compositeProductId' => 'getCompositeProductId',
            'instanceInfo' => 'getInstanceInfo'
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
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['paymentMode'] = isset($data['paymentMode']) ? $data['paymentMode'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['periodNum'] = isset($data['periodNum']) ? $data['periodNum'] : null;
        $this->container['isAutoRenew'] = isset($data['isAutoRenew']) ? $data['isAutoRenew'] : null;
        $this->container['promotionId'] = isset($data['promotionId']) ? $data['promotionId'] : null;
        $this->container['promotionPlanId'] = isset($data['promotionPlanId']) ? $data['promotionPlanId'] : null;
        $this->container['promotionInfo'] = isset($data['promotionInfo']) ? $data['promotionInfo'] : null;
        $this->container['compositeProductId'] = isset($data['compositeProductId']) ? $data['compositeProductId'] : null;
        $this->container['instanceInfo'] = isset($data['instanceInfo']) ? $data['instanceInfo'] : null;
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
    * Gets productId
    *  产品编号
    *
    * @return string|null
    */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
    * Sets productId
    *
    * @param string|null $productId 产品编号
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets chargingMode
    *  计费模式。
    *
    * @return int|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param int|null $chargingMode 计费模式。
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets paymentMode
    *  支付模式。
    *
    * @return string|null
    */
    public function getPaymentMode()
    {
        return $this->container['paymentMode'];
    }

    /**
    * Sets paymentMode
    *
    * @param string|null $paymentMode 支付模式。
    *
    * @return $this
    */
    public function setPaymentMode($paymentMode)
    {
        $this->container['paymentMode'] = $paymentMode;
        return $this;
    }

    /**
    * Gets periodType
    *  订购周期类型： - 2：月 - 3：年
    *
    * @return int|null
    */
    public function getPeriodType()
    {
        return $this->container['periodType'];
    }

    /**
    * Sets periodType
    *
    * @param int|null $periodType 订购周期类型： - 2：月 - 3：年
    *
    * @return $this
    */
    public function setPeriodType($periodType)
    {
        $this->container['periodType'] = $periodType;
        return $this;
    }

    /**
    * Gets periodNum
    *  订购周期数
    *
    * @return int|null
    */
    public function getPeriodNum()
    {
        return $this->container['periodNum'];
    }

    /**
    * Sets periodNum
    *
    * @param int|null $periodNum 订购周期数
    *
    * @return $this
    */
    public function setPeriodNum($periodNum)
    {
        $this->container['periodNum'] = $periodNum;
        return $this;
    }

    /**
    * Gets isAutoRenew
    *  是否支持自动续费
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
    * @param int|null $isAutoRenew 是否支持自动续费
    *
    * @return $this
    */
    public function setIsAutoRenew($isAutoRenew)
    {
        $this->container['isAutoRenew'] = $isAutoRenew;
        return $this;
    }

    /**
    * Gets promotionId
    *  促销产品编号
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
    * @param string|null $promotionId 促销产品编号
    *
    * @return $this
    */
    public function setPromotionId($promotionId)
    {
        $this->container['promotionId'] = $promotionId;
        return $this;
    }

    /**
    * Gets promotionPlanId
    *  促销计划编号
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
    * @param string|null $promotionPlanId 促销计划编号
    *
    * @return $this
    */
    public function setPromotionPlanId($promotionPlanId)
    {
        $this->container['promotionPlanId'] = $promotionPlanId;
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
    * Gets compositeProductId
    *  组合产品编号
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
    * @param string|null $compositeProductId 组合产品编号
    *
    * @return $this
    */
    public function setCompositeProductId($compositeProductId)
    {
        $this->container['compositeProductId'] = $compositeProductId;
        return $this;
    }

    /**
    * Gets instanceInfo
    *  instanceInfo
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\InstanceCreateReqV2|null
    */
    public function getInstanceInfo()
    {
        return $this->container['instanceInfo'];
    }

    /**
    * Sets instanceInfo
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\InstanceCreateReqV2|null $instanceInfo instanceInfo
    *
    * @return $this
    */
    public function setInstanceInfo($instanceInfo)
    {
        $this->container['instanceInfo'] = $instanceInfo;
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

