<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateInstanceExtendParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateInstanceExtendParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * chargeMode  计费模式，取值范围： - prePaid：预付费，即包年/包月。 - postPaid：后付费，即按需付费。 默认值为postPaid。
    * periodType  订购周期类型，取值范围： - month：月。 - year：年。 “charge_mode”参数配置为“prePaid”时该参数有效且为必选值。
    * periodNum  订购周期数，取值范围： - period_type=month（周期类型为月）时，取值为[1，9]。 - period_type=year（周期类型为年）时，取值为1。 “charge_mode”参数配置为“prePaid”时该参数有效且为必选值。
    * isAutoRenew  是否自动续订，取值范围： - “true”：自动续订。 - “false”：不自动续订。 “charge_mode”参数配置为“prePaid”时该参数有效，不传该字段时默认为不自动续订。\"
    * isAutoPay  下单订购后，是否自动从客户的账户的余额中支付，取值范围： - “true”：是（自动从客户账户的余额中支付）。 - “false”：否（需要客户手动支付）。 “charge_mode”参数配置为“prePaid”时该参数有效，不传该字段时默认为客户手动支付。\"
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'chargeMode' => 'string',
            'periodType' => 'string',
            'periodNum' => 'int',
            'isAutoRenew' => 'string',
            'isAutoPay' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * chargeMode  计费模式，取值范围： - prePaid：预付费，即包年/包月。 - postPaid：后付费，即按需付费。 默认值为postPaid。
    * periodType  订购周期类型，取值范围： - month：月。 - year：年。 “charge_mode”参数配置为“prePaid”时该参数有效且为必选值。
    * periodNum  订购周期数，取值范围： - period_type=month（周期类型为月）时，取值为[1，9]。 - period_type=year（周期类型为年）时，取值为1。 “charge_mode”参数配置为“prePaid”时该参数有效且为必选值。
    * isAutoRenew  是否自动续订，取值范围： - “true”：自动续订。 - “false”：不自动续订。 “charge_mode”参数配置为“prePaid”时该参数有效，不传该字段时默认为不自动续订。\"
    * isAutoPay  下单订购后，是否自动从客户的账户的余额中支付，取值范围： - “true”：是（自动从客户账户的余额中支付）。 - “false”：否（需要客户手动支付）。 “charge_mode”参数配置为“prePaid”时该参数有效，不传该字段时默认为客户手动支付。\"
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'chargeMode' => null,
        'periodType' => null,
        'periodNum' => null,
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
    * chargeMode  计费模式，取值范围： - prePaid：预付费，即包年/包月。 - postPaid：后付费，即按需付费。 默认值为postPaid。
    * periodType  订购周期类型，取值范围： - month：月。 - year：年。 “charge_mode”参数配置为“prePaid”时该参数有效且为必选值。
    * periodNum  订购周期数，取值范围： - period_type=month（周期类型为月）时，取值为[1，9]。 - period_type=year（周期类型为年）时，取值为1。 “charge_mode”参数配置为“prePaid”时该参数有效且为必选值。
    * isAutoRenew  是否自动续订，取值范围： - “true”：自动续订。 - “false”：不自动续订。 “charge_mode”参数配置为“prePaid”时该参数有效，不传该字段时默认为不自动续订。\"
    * isAutoPay  下单订购后，是否自动从客户的账户的余额中支付，取值范围： - “true”：是（自动从客户账户的余额中支付）。 - “false”：否（需要客户手动支付）。 “charge_mode”参数配置为“prePaid”时该参数有效，不传该字段时默认为客户手动支付。\"
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
    * chargeMode  计费模式，取值范围： - prePaid：预付费，即包年/包月。 - postPaid：后付费，即按需付费。 默认值为postPaid。
    * periodType  订购周期类型，取值范围： - month：月。 - year：年。 “charge_mode”参数配置为“prePaid”时该参数有效且为必选值。
    * periodNum  订购周期数，取值范围： - period_type=month（周期类型为月）时，取值为[1，9]。 - period_type=year（周期类型为年）时，取值为1。 “charge_mode”参数配置为“prePaid”时该参数有效且为必选值。
    * isAutoRenew  是否自动续订，取值范围： - “true”：自动续订。 - “false”：不自动续订。 “charge_mode”参数配置为“prePaid”时该参数有效，不传该字段时默认为不自动续订。\"
    * isAutoPay  下单订购后，是否自动从客户的账户的余额中支付，取值范围： - “true”：是（自动从客户账户的余额中支付）。 - “false”：否（需要客户手动支付）。 “charge_mode”参数配置为“prePaid”时该参数有效，不传该字段时默认为客户手动支付。\"
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
    * chargeMode  计费模式，取值范围： - prePaid：预付费，即包年/包月。 - postPaid：后付费，即按需付费。 默认值为postPaid。
    * periodType  订购周期类型，取值范围： - month：月。 - year：年。 “charge_mode”参数配置为“prePaid”时该参数有效且为必选值。
    * periodNum  订购周期数，取值范围： - period_type=month（周期类型为月）时，取值为[1，9]。 - period_type=year（周期类型为年）时，取值为1。 “charge_mode”参数配置为“prePaid”时该参数有效且为必选值。
    * isAutoRenew  是否自动续订，取值范围： - “true”：自动续订。 - “false”：不自动续订。 “charge_mode”参数配置为“prePaid”时该参数有效，不传该字段时默认为不自动续订。\"
    * isAutoPay  下单订购后，是否自动从客户的账户的余额中支付，取值范围： - “true”：是（自动从客户账户的余额中支付）。 - “false”：否（需要客户手动支付）。 “charge_mode”参数配置为“prePaid”时该参数有效，不传该字段时默认为客户手动支付。\"
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
    const CHARGE_MODE_PRE_PAID = 'prePaid';
    const CHARGE_MODE_POST_PAID = 'postPaid';
    const PERIOD_TYPE_MONTH = 'month';
    const PERIOD_TYPE_YEAR = 'year';
    const IS_AUTO_RENEW_TRUE = 'true';
    const IS_AUTO_RENEW_FALSE = 'false';
    const IS_AUTO_PAY_TRUE = 'true';
    const IS_AUTO_PAY_FALSE = 'false';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChargeModeAllowableValues()
    {
        return [
            self::CHARGE_MODE_PRE_PAID,
            self::CHARGE_MODE_POST_PAID,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPeriodTypeAllowableValues()
    {
        return [
            self::PERIOD_TYPE_MONTH,
            self::PERIOD_TYPE_YEAR,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIsAutoRenewAllowableValues()
    {
        return [
            self::IS_AUTO_RENEW_TRUE,
            self::IS_AUTO_RENEW_FALSE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIsAutoPayAllowableValues()
    {
        return [
            self::IS_AUTO_PAY_TRUE,
            self::IS_AUTO_PAY_FALSE,
        ];
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
            $allowedValues = $this->getChargeModeAllowableValues();
                if (!is_null($this->container['chargeMode']) && !in_array($this->container['chargeMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chargeMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getPeriodTypeAllowableValues();
                if (!is_null($this->container['periodType']) && !in_array($this->container['periodType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'periodType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getIsAutoRenewAllowableValues();
                if (!is_null($this->container['isAutoRenew']) && !in_array($this->container['isAutoRenew'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'isAutoRenew', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getIsAutoPayAllowableValues();
                if (!is_null($this->container['isAutoPay']) && !in_array($this->container['isAutoPay'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'isAutoPay', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  计费模式，取值范围： - prePaid：预付费，即包年/包月。 - postPaid：后付费，即按需付费。 默认值为postPaid。
    *
    * @return string|null
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param string|null $chargeMode 计费模式，取值范围： - prePaid：预付费，即包年/包月。 - postPaid：后付费，即按需付费。 默认值为postPaid。
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
    *  订购周期类型，取值范围： - month：月。 - year：年。 “charge_mode”参数配置为“prePaid”时该参数有效且为必选值。
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
    * @param string|null $periodType 订购周期类型，取值范围： - month：月。 - year：年。 “charge_mode”参数配置为“prePaid”时该参数有效且为必选值。
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
    *  订购周期数，取值范围： - period_type=month（周期类型为月）时，取值为[1，9]。 - period_type=year（周期类型为年）时，取值为1。 “charge_mode”参数配置为“prePaid”时该参数有效且为必选值。
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
    * @param int|null $periodNum 订购周期数，取值范围： - period_type=month（周期类型为月）时，取值为[1，9]。 - period_type=year（周期类型为年）时，取值为1。 “charge_mode”参数配置为“prePaid”时该参数有效且为必选值。
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
    *  是否自动续订，取值范围： - “true”：自动续订。 - “false”：不自动续订。 “charge_mode”参数配置为“prePaid”时该参数有效，不传该字段时默认为不自动续订。\"
    *
    * @return string|null
    */
    public function getIsAutoRenew()
    {
        return $this->container['isAutoRenew'];
    }

    /**
    * Sets isAutoRenew
    *
    * @param string|null $isAutoRenew 是否自动续订，取值范围： - “true”：自动续订。 - “false”：不自动续订。 “charge_mode”参数配置为“prePaid”时该参数有效，不传该字段时默认为不自动续订。\"
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
    *  下单订购后，是否自动从客户的账户的余额中支付，取值范围： - “true”：是（自动从客户账户的余额中支付）。 - “false”：否（需要客户手动支付）。 “charge_mode”参数配置为“prePaid”时该参数有效，不传该字段时默认为客户手动支付。\"
    *
    * @return string|null
    */
    public function getIsAutoPay()
    {
        return $this->container['isAutoPay'];
    }

    /**
    * Sets isAutoPay
    *
    * @param string|null $isAutoPay 下单订购后，是否自动从客户的账户的余额中支付，取值范围： - “true”：是（自动从客户账户的余额中支付）。 - “false”：否（需要客户手动支付）。 “charge_mode”参数配置为“prePaid”时该参数有效，不传该字段时默认为客户手动支付。\"
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

