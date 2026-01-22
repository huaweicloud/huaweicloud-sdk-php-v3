<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateFirewallReqChargeInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateFirewallReq_charge_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * chargeMode  **参数解释**： 计费模式 **约束限制**： 不涉及 **取值范围**： - prePaid：预付费，即包年/包月。 - postPaid：后付费，即按需付费 **默认取值**： 不涉及
    * periodType  **参数解释**： 订购周期类型 **约束限制**： “charge_mode”为“prePaid”时生效，且为必选值。 **取值范围**： - month：包月。 - year：包年 **默认取值**： 不涉及
    * periodNum  **参数解释**： 订购时间 **约束限制**： “charge_mode”为“prePaid”时，“period_num”必填。 **取值范围**： - 当“period_type”为“month”时，此处取值为1~9。 - 当“period_type”为“year”时，此处取值为1~3。 **默认取值**： 不涉及
    * isAutoRenew  **参数解释**： 是否自动续订，续订的周期和原周期相同，且续订时会自动支付。 **约束限制**： 创建包周期实例时可指定 **取值范围**： - true，为自动续订。 - false，为不自动续订 **默认取值**： false
    * isAutoPay  **参数解释**： 是否自动从客户的账户中支付，此字段不影响自动续订的支付方式。 **约束限制**： 创建包周期时可指定 **取值范围**： - true：自动支付（会自动选择折扣和优惠券进行优惠，并自动从客户账户中支付），自动支付失败会生成订单、但订单状态为“待支付”，等待客户手动支付（手动支付时，可以修改系统自动选择的折扣和优惠券） - false：手动支付，默认该方式。（需要客户手动去支付，客户可以选择折扣和优惠券） **默认取值**： false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'chargeMode' => 'string',
            'periodType' => 'string',
            'periodNum' => 'int',
            'isAutoRenew' => 'bool',
            'isAutoPay' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * chargeMode  **参数解释**： 计费模式 **约束限制**： 不涉及 **取值范围**： - prePaid：预付费，即包年/包月。 - postPaid：后付费，即按需付费 **默认取值**： 不涉及
    * periodType  **参数解释**： 订购周期类型 **约束限制**： “charge_mode”为“prePaid”时生效，且为必选值。 **取值范围**： - month：包月。 - year：包年 **默认取值**： 不涉及
    * periodNum  **参数解释**： 订购时间 **约束限制**： “charge_mode”为“prePaid”时，“period_num”必填。 **取值范围**： - 当“period_type”为“month”时，此处取值为1~9。 - 当“period_type”为“year”时，此处取值为1~3。 **默认取值**： 不涉及
    * isAutoRenew  **参数解释**： 是否自动续订，续订的周期和原周期相同，且续订时会自动支付。 **约束限制**： 创建包周期实例时可指定 **取值范围**： - true，为自动续订。 - false，为不自动续订 **默认取值**： false
    * isAutoPay  **参数解释**： 是否自动从客户的账户中支付，此字段不影响自动续订的支付方式。 **约束限制**： 创建包周期时可指定 **取值范围**： - true：自动支付（会自动选择折扣和优惠券进行优惠，并自动从客户账户中支付），自动支付失败会生成订单、但订单状态为“待支付”，等待客户手动支付（手动支付时，可以修改系统自动选择的折扣和优惠券） - false：手动支付，默认该方式。（需要客户手动去支付，客户可以选择折扣和优惠券） **默认取值**： false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'chargeMode' => null,
        'periodType' => null,
        'periodNum' => 'int32',
        'isAutoRenew' => null,
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
    * chargeMode  **参数解释**： 计费模式 **约束限制**： 不涉及 **取值范围**： - prePaid：预付费，即包年/包月。 - postPaid：后付费，即按需付费 **默认取值**： 不涉及
    * periodType  **参数解释**： 订购周期类型 **约束限制**： “charge_mode”为“prePaid”时生效，且为必选值。 **取值范围**： - month：包月。 - year：包年 **默认取值**： 不涉及
    * periodNum  **参数解释**： 订购时间 **约束限制**： “charge_mode”为“prePaid”时，“period_num”必填。 **取值范围**： - 当“period_type”为“month”时，此处取值为1~9。 - 当“period_type”为“year”时，此处取值为1~3。 **默认取值**： 不涉及
    * isAutoRenew  **参数解释**： 是否自动续订，续订的周期和原周期相同，且续订时会自动支付。 **约束限制**： 创建包周期实例时可指定 **取值范围**： - true，为自动续订。 - false，为不自动续订 **默认取值**： false
    * isAutoPay  **参数解释**： 是否自动从客户的账户中支付，此字段不影响自动续订的支付方式。 **约束限制**： 创建包周期时可指定 **取值范围**： - true：自动支付（会自动选择折扣和优惠券进行优惠，并自动从客户账户中支付），自动支付失败会生成订单、但订单状态为“待支付”，等待客户手动支付（手动支付时，可以修改系统自动选择的折扣和优惠券） - false：手动支付，默认该方式。（需要客户手动去支付，客户可以选择折扣和优惠券） **默认取值**： false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'chargeMode' => 'charge_mode',
            'periodType' => 'period_type',
            'periodNum' => 'period_num',
            'isAutoRenew' => 'is_auto_renew',
            'isAutoPay' => 'is_auto_pay'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * chargeMode  **参数解释**： 计费模式 **约束限制**： 不涉及 **取值范围**： - prePaid：预付费，即包年/包月。 - postPaid：后付费，即按需付费 **默认取值**： 不涉及
    * periodType  **参数解释**： 订购周期类型 **约束限制**： “charge_mode”为“prePaid”时生效，且为必选值。 **取值范围**： - month：包月。 - year：包年 **默认取值**： 不涉及
    * periodNum  **参数解释**： 订购时间 **约束限制**： “charge_mode”为“prePaid”时，“period_num”必填。 **取值范围**： - 当“period_type”为“month”时，此处取值为1~9。 - 当“period_type”为“year”时，此处取值为1~3。 **默认取值**： 不涉及
    * isAutoRenew  **参数解释**： 是否自动续订，续订的周期和原周期相同，且续订时会自动支付。 **约束限制**： 创建包周期实例时可指定 **取值范围**： - true，为自动续订。 - false，为不自动续订 **默认取值**： false
    * isAutoPay  **参数解释**： 是否自动从客户的账户中支付，此字段不影响自动续订的支付方式。 **约束限制**： 创建包周期时可指定 **取值范围**： - true：自动支付（会自动选择折扣和优惠券进行优惠，并自动从客户账户中支付），自动支付失败会生成订单、但订单状态为“待支付”，等待客户手动支付（手动支付时，可以修改系统自动选择的折扣和优惠券） - false：手动支付，默认该方式。（需要客户手动去支付，客户可以选择折扣和优惠券） **默认取值**： false
    *
    * @var string[]
    */
    protected static $setters = [
            'chargeMode' => 'setChargeMode',
            'periodType' => 'setPeriodType',
            'periodNum' => 'setPeriodNum',
            'isAutoRenew' => 'setIsAutoRenew',
            'isAutoPay' => 'setIsAutoPay'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * chargeMode  **参数解释**： 计费模式 **约束限制**： 不涉及 **取值范围**： - prePaid：预付费，即包年/包月。 - postPaid：后付费，即按需付费 **默认取值**： 不涉及
    * periodType  **参数解释**： 订购周期类型 **约束限制**： “charge_mode”为“prePaid”时生效，且为必选值。 **取值范围**： - month：包月。 - year：包年 **默认取值**： 不涉及
    * periodNum  **参数解释**： 订购时间 **约束限制**： “charge_mode”为“prePaid”时，“period_num”必填。 **取值范围**： - 当“period_type”为“month”时，此处取值为1~9。 - 当“period_type”为“year”时，此处取值为1~3。 **默认取值**： 不涉及
    * isAutoRenew  **参数解释**： 是否自动续订，续订的周期和原周期相同，且续订时会自动支付。 **约束限制**： 创建包周期实例时可指定 **取值范围**： - true，为自动续订。 - false，为不自动续订 **默认取值**： false
    * isAutoPay  **参数解释**： 是否自动从客户的账户中支付，此字段不影响自动续订的支付方式。 **约束限制**： 创建包周期时可指定 **取值范围**： - true：自动支付（会自动选择折扣和优惠券进行优惠，并自动从客户账户中支付），自动支付失败会生成订单、但订单状态为“待支付”，等待客户手动支付（手动支付时，可以修改系统自动选择的折扣和优惠券） - false：手动支付，默认该方式。（需要客户手动去支付，客户可以选择折扣和优惠券） **默认取值**： false
    *
    * @var string[]
    */
    protected static $getters = [
            'chargeMode' => 'getChargeMode',
            'periodType' => 'getPeriodType',
            'periodNum' => 'getPeriodNum',
            'isAutoRenew' => 'getIsAutoRenew',
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
        $this->container['isAutoRenew'] = isset($data['isAutoRenew']) ? $data['isAutoRenew'] : null;
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
        if ($this->container['isAutoRenew'] === null) {
            $invalidProperties[] = "'isAutoRenew' can't be null";
        }
        if ($this->container['isAutoPay'] === null) {
            $invalidProperties[] = "'isAutoPay' can't be null";
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
    *  **参数解释**： 计费模式 **约束限制**： 不涉及 **取值范围**： - prePaid：预付费，即包年/包月。 - postPaid：后付费，即按需付费 **默认取值**： 不涉及
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
    * @param string $chargeMode **参数解释**： 计费模式 **约束限制**： 不涉及 **取值范围**： - prePaid：预付费，即包年/包月。 - postPaid：后付费，即按需付费 **默认取值**： 不涉及
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
    *  **参数解释**： 订购周期类型 **约束限制**： “charge_mode”为“prePaid”时生效，且为必选值。 **取值范围**： - month：包月。 - year：包年 **默认取值**： 不涉及
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
    * @param string|null $periodType **参数解释**： 订购周期类型 **约束限制**： “charge_mode”为“prePaid”时生效，且为必选值。 **取值范围**： - month：包月。 - year：包年 **默认取值**： 不涉及
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
    *  **参数解释**： 订购时间 **约束限制**： “charge_mode”为“prePaid”时，“period_num”必填。 **取值范围**： - 当“period_type”为“month”时，此处取值为1~9。 - 当“period_type”为“year”时，此处取值为1~3。 **默认取值**： 不涉及
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
    * @param int|null $periodNum **参数解释**： 订购时间 **约束限制**： “charge_mode”为“prePaid”时，“period_num”必填。 **取值范围**： - 当“period_type”为“month”时，此处取值为1~9。 - 当“period_type”为“year”时，此处取值为1~3。 **默认取值**： 不涉及
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
    *  **参数解释**： 是否自动续订，续订的周期和原周期相同，且续订时会自动支付。 **约束限制**： 创建包周期实例时可指定 **取值范围**： - true，为自动续订。 - false，为不自动续订 **默认取值**： false
    *
    * @return bool
    */
    public function getIsAutoRenew()
    {
        return $this->container['isAutoRenew'];
    }

    /**
    * Sets isAutoRenew
    *
    * @param bool $isAutoRenew **参数解释**： 是否自动续订，续订的周期和原周期相同，且续订时会自动支付。 **约束限制**： 创建包周期实例时可指定 **取值范围**： - true，为自动续订。 - false，为不自动续订 **默认取值**： false
    *
    * @return $this
    */
    public function setIsAutoRenew($isAutoRenew)
    {
        $this->container['isAutoRenew'] = $isAutoRenew;
        return $this;
    }

    /**
    * Gets isAutoPay
    *  **参数解释**： 是否自动从客户的账户中支付，此字段不影响自动续订的支付方式。 **约束限制**： 创建包周期时可指定 **取值范围**： - true：自动支付（会自动选择折扣和优惠券进行优惠，并自动从客户账户中支付），自动支付失败会生成订单、但订单状态为“待支付”，等待客户手动支付（手动支付时，可以修改系统自动选择的折扣和优惠券） - false：手动支付，默认该方式。（需要客户手动去支付，客户可以选择折扣和优惠券） **默认取值**： false
    *
    * @return bool
    */
    public function getIsAutoPay()
    {
        return $this->container['isAutoPay'];
    }

    /**
    * Sets isAutoPay
    *
    * @param bool $isAutoPay **参数解释**： 是否自动从客户的账户中支付，此字段不影响自动续订的支付方式。 **约束限制**： 创建包周期时可指定 **取值范围**： - true：自动支付（会自动选择折扣和优惠券进行优惠，并自动从客户账户中支付），自动支付失败会生成订单、但订单状态为“待支付”，等待客户手动支付（手动支付时，可以修改系统自动选择的折扣和优惠券） - false：手动支付，默认该方式。（需要客户手动去支付，客户可以选择折扣和优惠券） **默认取值**： false
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

