<?php

namespace HuaweiCloud\SDK\IoTDM\V5\Model;

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
    * chargeMode  **参数说明**：实例的付费方式。 **取值范围**： - prePaid：包年/包月 - postPaid：按需计费
    * periodType  **参数说明**：订购设备接入实例的周期类型（包年、包月等）。charge_mode为prePaid时生效，且为必选值。 **取值范围**： - month：包月 - year：包年
    * periodNum  **参数说明**：订购设备接入实例的周期数。charge_mode为prePaid时生效，且为必选值。 **取值范围**：period_type=month（周期类型为月）时，取值为[1，9]；period_type=year（周期类型为年）时，取值为[1，3]\"
    * isAutoRenew  **参数说明**：创建包年/包月实例时可指定，表示是否自动续订，续订的周期和原周期相同，且续订时会自动支付。 **取值范围**： - true：自动续订 - false：默认值，不自动续订
    * isAutoPay  **参数说明**：创建包年/包月实例时可指定，表示是否自动从客户的账户中支付，此字段不影响自动续订的支付方式。 **取值范围**：true - 自动支付，从账户余额自动扣费; false - 默认值，只提交订单不支付。[需要客户参考[\"支付包年/包月产品订单\"](https://support.huaweicloud.com/api-bpconsole/api_order_00016.html#section0)进行支付，或者在华为云官网页面使用进行支付。](tag:hws)
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
    * chargeMode  **参数说明**：实例的付费方式。 **取值范围**： - prePaid：包年/包月 - postPaid：按需计费
    * periodType  **参数说明**：订购设备接入实例的周期类型（包年、包月等）。charge_mode为prePaid时生效，且为必选值。 **取值范围**： - month：包月 - year：包年
    * periodNum  **参数说明**：订购设备接入实例的周期数。charge_mode为prePaid时生效，且为必选值。 **取值范围**：period_type=month（周期类型为月）时，取值为[1，9]；period_type=year（周期类型为年）时，取值为[1，3]\"
    * isAutoRenew  **参数说明**：创建包年/包月实例时可指定，表示是否自动续订，续订的周期和原周期相同，且续订时会自动支付。 **取值范围**： - true：自动续订 - false：默认值，不自动续订
    * isAutoPay  **参数说明**：创建包年/包月实例时可指定，表示是否自动从客户的账户中支付，此字段不影响自动续订的支付方式。 **取值范围**：true - 自动支付，从账户余额自动扣费; false - 默认值，只提交订单不支付。[需要客户参考[\"支付包年/包月产品订单\"](https://support.huaweicloud.com/api-bpconsole/api_order_00016.html#section0)进行支付，或者在华为云官网页面使用进行支付。](tag:hws)
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
    * chargeMode  **参数说明**：实例的付费方式。 **取值范围**： - prePaid：包年/包月 - postPaid：按需计费
    * periodType  **参数说明**：订购设备接入实例的周期类型（包年、包月等）。charge_mode为prePaid时生效，且为必选值。 **取值范围**： - month：包月 - year：包年
    * periodNum  **参数说明**：订购设备接入实例的周期数。charge_mode为prePaid时生效，且为必选值。 **取值范围**：period_type=month（周期类型为月）时，取值为[1，9]；period_type=year（周期类型为年）时，取值为[1，3]\"
    * isAutoRenew  **参数说明**：创建包年/包月实例时可指定，表示是否自动续订，续订的周期和原周期相同，且续订时会自动支付。 **取值范围**： - true：自动续订 - false：默认值，不自动续订
    * isAutoPay  **参数说明**：创建包年/包月实例时可指定，表示是否自动从客户的账户中支付，此字段不影响自动续订的支付方式。 **取值范围**：true - 自动支付，从账户余额自动扣费; false - 默认值，只提交订单不支付。[需要客户参考[\"支付包年/包月产品订单\"](https://support.huaweicloud.com/api-bpconsole/api_order_00016.html#section0)进行支付，或者在华为云官网页面使用进行支付。](tag:hws)
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
    * chargeMode  **参数说明**：实例的付费方式。 **取值范围**： - prePaid：包年/包月 - postPaid：按需计费
    * periodType  **参数说明**：订购设备接入实例的周期类型（包年、包月等）。charge_mode为prePaid时生效，且为必选值。 **取值范围**： - month：包月 - year：包年
    * periodNum  **参数说明**：订购设备接入实例的周期数。charge_mode为prePaid时生效，且为必选值。 **取值范围**：period_type=month（周期类型为月）时，取值为[1，9]；period_type=year（周期类型为年）时，取值为[1，3]\"
    * isAutoRenew  **参数说明**：创建包年/包月实例时可指定，表示是否自动续订，续订的周期和原周期相同，且续订时会自动支付。 **取值范围**： - true：自动续订 - false：默认值，不自动续订
    * isAutoPay  **参数说明**：创建包年/包月实例时可指定，表示是否自动从客户的账户中支付，此字段不影响自动续订的支付方式。 **取值范围**：true - 自动支付，从账户余额自动扣费; false - 默认值，只提交订单不支付。[需要客户参考[\"支付包年/包月产品订单\"](https://support.huaweicloud.com/api-bpconsole/api_order_00016.html#section0)进行支付，或者在华为云官网页面使用进行支付。](tag:hws)
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
    * chargeMode  **参数说明**：实例的付费方式。 **取值范围**： - prePaid：包年/包月 - postPaid：按需计费
    * periodType  **参数说明**：订购设备接入实例的周期类型（包年、包月等）。charge_mode为prePaid时生效，且为必选值。 **取值范围**： - month：包月 - year：包年
    * periodNum  **参数说明**：订购设备接入实例的周期数。charge_mode为prePaid时生效，且为必选值。 **取值范围**：period_type=month（周期类型为月）时，取值为[1，9]；period_type=year（周期类型为年）时，取值为[1，3]\"
    * isAutoRenew  **参数说明**：创建包年/包月实例时可指定，表示是否自动续订，续订的周期和原周期相同，且续订时会自动支付。 **取值范围**： - true：自动续订 - false：默认值，不自动续订
    * isAutoPay  **参数说明**：创建包年/包月实例时可指定，表示是否自动从客户的账户中支付，此字段不影响自动续订的支付方式。 **取值范围**：true - 自动支付，从账户余额自动扣费; false - 默认值，只提交订单不支付。[需要客户参考[\"支付包年/包月产品订单\"](https://support.huaweicloud.com/api-bpconsole/api_order_00016.html#section0)进行支付，或者在华为云官网页面使用进行支付。](tag:hws)
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
            if (!preg_match("/prePaid|postPaid/", $this->container['chargeMode'])) {
                $invalidProperties[] = "invalid value for 'chargeMode', must be conform to the pattern /prePaid|postPaid/.";
            }
            if (!is_null($this->container['periodType']) && !preg_match("/(month|year)/", $this->container['periodType'])) {
                $invalidProperties[] = "invalid value for 'periodType', must be conform to the pattern /(month|year)/.";
            }
            if (!is_null($this->container['periodNum']) && ($this->container['periodNum'] > 9)) {
                $invalidProperties[] = "invalid value for 'periodNum', must be smaller than or equal to 9.";
            }
            if (!is_null($this->container['periodNum']) && ($this->container['periodNum'] < 1)) {
                $invalidProperties[] = "invalid value for 'periodNum', must be bigger than or equal to 1.";
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
    *  **参数说明**：实例的付费方式。 **取值范围**： - prePaid：包年/包月 - postPaid：按需计费
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
    * @param string $chargeMode **参数说明**：实例的付费方式。 **取值范围**： - prePaid：包年/包月 - postPaid：按需计费
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
    *  **参数说明**：订购设备接入实例的周期类型（包年、包月等）。charge_mode为prePaid时生效，且为必选值。 **取值范围**： - month：包月 - year：包年
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
    * @param string|null $periodType **参数说明**：订购设备接入实例的周期类型（包年、包月等）。charge_mode为prePaid时生效，且为必选值。 **取值范围**： - month：包月 - year：包年
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
    *  **参数说明**：订购设备接入实例的周期数。charge_mode为prePaid时生效，且为必选值。 **取值范围**：period_type=month（周期类型为月）时，取值为[1，9]；period_type=year（周期类型为年）时，取值为[1，3]\"
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
    * @param int|null $periodNum **参数说明**：订购设备接入实例的周期数。charge_mode为prePaid时生效，且为必选值。 **取值范围**：period_type=month（周期类型为月）时，取值为[1，9]；period_type=year（周期类型为年）时，取值为[1，3]\"
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
    *  **参数说明**：创建包年/包月实例时可指定，表示是否自动续订，续订的周期和原周期相同，且续订时会自动支付。 **取值范围**： - true：自动续订 - false：默认值，不自动续订
    *
    * @return bool|null
    */
    public function getIsAutoRenew()
    {
        return $this->container['isAutoRenew'];
    }

    /**
    * Sets isAutoRenew
    *
    * @param bool|null $isAutoRenew **参数说明**：创建包年/包月实例时可指定，表示是否自动续订，续订的周期和原周期相同，且续订时会自动支付。 **取值范围**： - true：自动续订 - false：默认值，不自动续订
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
    *  **参数说明**：创建包年/包月实例时可指定，表示是否自动从客户的账户中支付，此字段不影响自动续订的支付方式。 **取值范围**：true - 自动支付，从账户余额自动扣费; false - 默认值，只提交订单不支付。[需要客户参考[\"支付包年/包月产品订单\"](https://support.huaweicloud.com/api-bpconsole/api_order_00016.html#section0)进行支付，或者在华为云官网页面使用进行支付。](tag:hws)
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
    * @param bool|null $isAutoPay **参数说明**：创建包年/包月实例时可指定，表示是否自动从客户的账户中支付，此字段不影响自动续订的支付方式。 **取值范围**：true - 自动支付，从账户余额自动扣费; false - 默认值，只提交订单不支付。[需要客户参考[\"支付包年/包月产品订单\"](https://support.huaweicloud.com/api-bpconsole/api_order_00016.html#section0)进行支付，或者在华为云官网页面使用进行支付。](tag:hws)
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

