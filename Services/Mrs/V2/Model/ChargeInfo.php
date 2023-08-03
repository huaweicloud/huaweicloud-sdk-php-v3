<?php

namespace HuaweiCloud\SDK\Mrs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChargeInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChargeInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * chargeMode  计费模式。 取值范围： - prePaid：预付费，即包年/包月。（创建集群接口现已支持预付费，创建集群并提交作业接口暂不支持预付费。） - postPaid：后付费，即按需计费。
    * periodType  周期类型。取值范围： - month：包月。 - year： 包年。 - day：按需计费。
    * periodNum  周期数，“charge_mode”为“prePaid”时生效，且为必选值，指定订购的时间。取值范围： - 当“period_type”为“month”时，取值为1~9。 - 当“period_type”为“year”时，取值为1~3。
    * isAutoPay  是否自动支付，包周期模式下使用，下单订购后，是否自动从客户的账户中支付，而不需要客户手动去进行支付，默认为手动支付。取值范围： - true：自动支付，会自动选择折扣和优惠券进行优惠，然后自动从客户账户中支付，自动支付失败后会生成订单成功、但订单状态为“待支付”，等待客户手动支付。 - false：手动支付，需要客户手动去支付，客户可以选择折扣和优惠券。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'chargeMode' => 'string',
            'periodType' => 'string',
            'periodNum' => 'int',
            'isAutoPay' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * chargeMode  计费模式。 取值范围： - prePaid：预付费，即包年/包月。（创建集群接口现已支持预付费，创建集群并提交作业接口暂不支持预付费。） - postPaid：后付费，即按需计费。
    * periodType  周期类型。取值范围： - month：包月。 - year： 包年。 - day：按需计费。
    * periodNum  周期数，“charge_mode”为“prePaid”时生效，且为必选值，指定订购的时间。取值范围： - 当“period_type”为“month”时，取值为1~9。 - 当“period_type”为“year”时，取值为1~3。
    * isAutoPay  是否自动支付，包周期模式下使用，下单订购后，是否自动从客户的账户中支付，而不需要客户手动去进行支付，默认为手动支付。取值范围： - true：自动支付，会自动选择折扣和优惠券进行优惠，然后自动从客户账户中支付，自动支付失败后会生成订单成功、但订单状态为“待支付”，等待客户手动支付。 - false：手动支付，需要客户手动去支付，客户可以选择折扣和优惠券。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'chargeMode' => null,
        'periodType' => null,
        'periodNum' => 'int32',
        'isAutoPay' => null
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
    * chargeMode  计费模式。 取值范围： - prePaid：预付费，即包年/包月。（创建集群接口现已支持预付费，创建集群并提交作业接口暂不支持预付费。） - postPaid：后付费，即按需计费。
    * periodType  周期类型。取值范围： - month：包月。 - year： 包年。 - day：按需计费。
    * periodNum  周期数，“charge_mode”为“prePaid”时生效，且为必选值，指定订购的时间。取值范围： - 当“period_type”为“month”时，取值为1~9。 - 当“period_type”为“year”时，取值为1~3。
    * isAutoPay  是否自动支付，包周期模式下使用，下单订购后，是否自动从客户的账户中支付，而不需要客户手动去进行支付，默认为手动支付。取值范围： - true：自动支付，会自动选择折扣和优惠券进行优惠，然后自动从客户账户中支付，自动支付失败后会生成订单成功、但订单状态为“待支付”，等待客户手动支付。 - false：手动支付，需要客户手动去支付，客户可以选择折扣和优惠券。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'chargeMode' => 'charge_mode',
            'periodType' => 'period_type',
            'periodNum' => 'period_num',
            'isAutoPay' => 'is_auto_pay'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * chargeMode  计费模式。 取值范围： - prePaid：预付费，即包年/包月。（创建集群接口现已支持预付费，创建集群并提交作业接口暂不支持预付费。） - postPaid：后付费，即按需计费。
    * periodType  周期类型。取值范围： - month：包月。 - year： 包年。 - day：按需计费。
    * periodNum  周期数，“charge_mode”为“prePaid”时生效，且为必选值，指定订购的时间。取值范围： - 当“period_type”为“month”时，取值为1~9。 - 当“period_type”为“year”时，取值为1~3。
    * isAutoPay  是否自动支付，包周期模式下使用，下单订购后，是否自动从客户的账户中支付，而不需要客户手动去进行支付，默认为手动支付。取值范围： - true：自动支付，会自动选择折扣和优惠券进行优惠，然后自动从客户账户中支付，自动支付失败后会生成订单成功、但订单状态为“待支付”，等待客户手动支付。 - false：手动支付，需要客户手动去支付，客户可以选择折扣和优惠券。
    *
    * @var string[]
    */
    protected static $setters = [
            'chargeMode' => 'setChargeMode',
            'periodType' => 'setPeriodType',
            'periodNum' => 'setPeriodNum',
            'isAutoPay' => 'setIsAutoPay'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * chargeMode  计费模式。 取值范围： - prePaid：预付费，即包年/包月。（创建集群接口现已支持预付费，创建集群并提交作业接口暂不支持预付费。） - postPaid：后付费，即按需计费。
    * periodType  周期类型。取值范围： - month：包月。 - year： 包年。 - day：按需计费。
    * periodNum  周期数，“charge_mode”为“prePaid”时生效，且为必选值，指定订购的时间。取值范围： - 当“period_type”为“month”时，取值为1~9。 - 当“period_type”为“year”时，取值为1~3。
    * isAutoPay  是否自动支付，包周期模式下使用，下单订购后，是否自动从客户的账户中支付，而不需要客户手动去进行支付，默认为手动支付。取值范围： - true：自动支付，会自动选择折扣和优惠券进行优惠，然后自动从客户账户中支付，自动支付失败后会生成订单成功、但订单状态为“待支付”，等待客户手动支付。 - false：手动支付，需要客户手动去支付，客户可以选择折扣和优惠券。
    *
    * @var string[]
    */
    protected static $getters = [
            'chargeMode' => 'getChargeMode',
            'periodType' => 'getPeriodType',
            'periodNum' => 'getPeriodNum',
            'isAutoPay' => 'getIsAutoPay'
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
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['periodNum'] = isset($data['periodNum']) ? $data['periodNum'] : null;
        $this->container['isAutoPay'] = isset($data['isAutoPay']) ? $data['isAutoPay'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['chargeMode'] === null) {
            $invalidProperties[] = "'chargeMode' can't be null";
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
    * Gets chargeMode
    *  计费模式。 取值范围： - prePaid：预付费，即包年/包月。（创建集群接口现已支持预付费，创建集群并提交作业接口暂不支持预付费。） - postPaid：后付费，即按需计费。
    *
    * @return string
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param string $chargeMode 计费模式。 取值范围： - prePaid：预付费，即包年/包月。（创建集群接口现已支持预付费，创建集群并提交作业接口暂不支持预付费。） - postPaid：后付费，即按需计费。
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets periodType
    *  周期类型。取值范围： - month：包月。 - year： 包年。 - day：按需计费。
    *
    * @return string|null
    */
    public function getPeriodType()
    {
        return $this->container['periodType'];
    }

    /**
    * Sets periodType
    *
    * @param string|null $periodType 周期类型。取值范围： - month：包月。 - year： 包年。 - day：按需计费。
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
    *  周期数，“charge_mode”为“prePaid”时生效，且为必选值，指定订购的时间。取值范围： - 当“period_type”为“month”时，取值为1~9。 - 当“period_type”为“year”时，取值为1~3。
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
    * @param int|null $periodNum 周期数，“charge_mode”为“prePaid”时生效，且为必选值，指定订购的时间。取值范围： - 当“period_type”为“month”时，取值为1~9。 - 当“period_type”为“year”时，取值为1~3。
    *
    * @return $this
    */
    public function setPeriodNum($periodNum)
    {
        $this->container['periodNum'] = $periodNum;
        return $this;
    }

    /**
    * Gets isAutoPay
    *  是否自动支付，包周期模式下使用，下单订购后，是否自动从客户的账户中支付，而不需要客户手动去进行支付，默认为手动支付。取值范围： - true：自动支付，会自动选择折扣和优惠券进行优惠，然后自动从客户账户中支付，自动支付失败后会生成订单成功、但订单状态为“待支付”，等待客户手动支付。 - false：手动支付，需要客户手动去支付，客户可以选择折扣和优惠券。
    *
    * @return bool|null
    */
    public function getIsAutoPay()
    {
        return $this->container['isAutoPay'];
    }

    /**
    * Sets isAutoPay
    *
    * @param bool|null $isAutoPay 是否自动支付，包周期模式下使用，下单订购后，是否自动从客户的账户中支付，而不需要客户手动去进行支付，默认为手动支付。取值范围： - true：自动支付，会自动选择折扣和优惠券进行优惠，然后自动从客户账户中支付，自动支付失败后会生成订单成功、但订单状态为“待支付”，等待客户手动支付。 - false：手动支付，需要客户手动去支付，客户可以选择折扣和优惠券。
    *
    * @return $this
    */
    public function setIsAutoPay($isAutoPay)
    {
        $this->container['isAutoPay'] = $isAutoPay;
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

