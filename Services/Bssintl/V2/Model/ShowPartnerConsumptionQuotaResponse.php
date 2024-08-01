<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowPartnerConsumptionQuotaResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowPartnerConsumptionQuotaResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * consumptionQuota  |参数名称：总消费配额| |参数约束及描述：非必填|
    * amount  |参数名称：账户余额| |参数约束及描述：非必填|
    * couponAmount  |参数名称：代金券余额| |参数约束及描述：非必填|
    * dueAmount  |参数名称：应还金额| |参数约束及描述：非必填|
    * unbilledAmount  |参数名称：未出账预估金额| |参数约束及描述：非必填|
    * usedConsumptionQuota  |参数名称：已使用消费配额| |参数约束及描述：非必填，used_consumption_quota = due_amount + unbilled_amount - amount - coupon_amount|
    * measureId  |参数名称：金额单位| |参数约束及描述：金额单位，1：元|
    * currency  |参数名称：货币单位| |参数约束及描述：货币单位 |
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'consumptionQuota' => 'string',
            'amount' => 'string',
            'couponAmount' => 'string',
            'dueAmount' => 'string',
            'unbilledAmount' => 'string',
            'usedConsumptionQuota' => 'string',
            'measureId' => 'int',
            'currency' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * consumptionQuota  |参数名称：总消费配额| |参数约束及描述：非必填|
    * amount  |参数名称：账户余额| |参数约束及描述：非必填|
    * couponAmount  |参数名称：代金券余额| |参数约束及描述：非必填|
    * dueAmount  |参数名称：应还金额| |参数约束及描述：非必填|
    * unbilledAmount  |参数名称：未出账预估金额| |参数约束及描述：非必填|
    * usedConsumptionQuota  |参数名称：已使用消费配额| |参数约束及描述：非必填，used_consumption_quota = due_amount + unbilled_amount - amount - coupon_amount|
    * measureId  |参数名称：金额单位| |参数约束及描述：金额单位，1：元|
    * currency  |参数名称：货币单位| |参数约束及描述：货币单位 |
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'consumptionQuota' => null,
        'amount' => null,
        'couponAmount' => null,
        'dueAmount' => null,
        'unbilledAmount' => null,
        'usedConsumptionQuota' => null,
        'measureId' => null,
        'currency' => null
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
    * consumptionQuota  |参数名称：总消费配额| |参数约束及描述：非必填|
    * amount  |参数名称：账户余额| |参数约束及描述：非必填|
    * couponAmount  |参数名称：代金券余额| |参数约束及描述：非必填|
    * dueAmount  |参数名称：应还金额| |参数约束及描述：非必填|
    * unbilledAmount  |参数名称：未出账预估金额| |参数约束及描述：非必填|
    * usedConsumptionQuota  |参数名称：已使用消费配额| |参数约束及描述：非必填，used_consumption_quota = due_amount + unbilled_amount - amount - coupon_amount|
    * measureId  |参数名称：金额单位| |参数约束及描述：金额单位，1：元|
    * currency  |参数名称：货币单位| |参数约束及描述：货币单位 |
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'consumptionQuota' => 'consumption_quota',
            'amount' => 'amount',
            'couponAmount' => 'coupon_amount',
            'dueAmount' => 'due_amount',
            'unbilledAmount' => 'unbilled_amount',
            'usedConsumptionQuota' => 'used_consumption_quota',
            'measureId' => 'measure_id',
            'currency' => 'currency'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * consumptionQuota  |参数名称：总消费配额| |参数约束及描述：非必填|
    * amount  |参数名称：账户余额| |参数约束及描述：非必填|
    * couponAmount  |参数名称：代金券余额| |参数约束及描述：非必填|
    * dueAmount  |参数名称：应还金额| |参数约束及描述：非必填|
    * unbilledAmount  |参数名称：未出账预估金额| |参数约束及描述：非必填|
    * usedConsumptionQuota  |参数名称：已使用消费配额| |参数约束及描述：非必填，used_consumption_quota = due_amount + unbilled_amount - amount - coupon_amount|
    * measureId  |参数名称：金额单位| |参数约束及描述：金额单位，1：元|
    * currency  |参数名称：货币单位| |参数约束及描述：货币单位 |
    *
    * @var string[]
    */
    protected static $setters = [
            'consumptionQuota' => 'setConsumptionQuota',
            'amount' => 'setAmount',
            'couponAmount' => 'setCouponAmount',
            'dueAmount' => 'setDueAmount',
            'unbilledAmount' => 'setUnbilledAmount',
            'usedConsumptionQuota' => 'setUsedConsumptionQuota',
            'measureId' => 'setMeasureId',
            'currency' => 'setCurrency'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * consumptionQuota  |参数名称：总消费配额| |参数约束及描述：非必填|
    * amount  |参数名称：账户余额| |参数约束及描述：非必填|
    * couponAmount  |参数名称：代金券余额| |参数约束及描述：非必填|
    * dueAmount  |参数名称：应还金额| |参数约束及描述：非必填|
    * unbilledAmount  |参数名称：未出账预估金额| |参数约束及描述：非必填|
    * usedConsumptionQuota  |参数名称：已使用消费配额| |参数约束及描述：非必填，used_consumption_quota = due_amount + unbilled_amount - amount - coupon_amount|
    * measureId  |参数名称：金额单位| |参数约束及描述：金额单位，1：元|
    * currency  |参数名称：货币单位| |参数约束及描述：货币单位 |
    *
    * @var string[]
    */
    protected static $getters = [
            'consumptionQuota' => 'getConsumptionQuota',
            'amount' => 'getAmount',
            'couponAmount' => 'getCouponAmount',
            'dueAmount' => 'getDueAmount',
            'unbilledAmount' => 'getUnbilledAmount',
            'usedConsumptionQuota' => 'getUsedConsumptionQuota',
            'measureId' => 'getMeasureId',
            'currency' => 'getCurrency'
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
        $this->container['consumptionQuota'] = isset($data['consumptionQuota']) ? $data['consumptionQuota'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['couponAmount'] = isset($data['couponAmount']) ? $data['couponAmount'] : null;
        $this->container['dueAmount'] = isset($data['dueAmount']) ? $data['dueAmount'] : null;
        $this->container['unbilledAmount'] = isset($data['unbilledAmount']) ? $data['unbilledAmount'] : null;
        $this->container['usedConsumptionQuota'] = isset($data['usedConsumptionQuota']) ? $data['usedConsumptionQuota'] : null;
        $this->container['measureId'] = isset($data['measureId']) ? $data['measureId'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['consumptionQuota']) && (mb_strlen($this->container['consumptionQuota']) > 64)) {
                $invalidProperties[] = "invalid value for 'consumptionQuota', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['consumptionQuota']) && (mb_strlen($this->container['consumptionQuota']) < 0)) {
                $invalidProperties[] = "invalid value for 'consumptionQuota', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['amount']) && (mb_strlen($this->container['amount']) > 64)) {
                $invalidProperties[] = "invalid value for 'amount', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['amount']) && (mb_strlen($this->container['amount']) < 0)) {
                $invalidProperties[] = "invalid value for 'amount', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['couponAmount']) && (mb_strlen($this->container['couponAmount']) > 64)) {
                $invalidProperties[] = "invalid value for 'couponAmount', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['couponAmount']) && (mb_strlen($this->container['couponAmount']) < 0)) {
                $invalidProperties[] = "invalid value for 'couponAmount', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dueAmount']) && (mb_strlen($this->container['dueAmount']) > 64)) {
                $invalidProperties[] = "invalid value for 'dueAmount', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dueAmount']) && (mb_strlen($this->container['dueAmount']) < 0)) {
                $invalidProperties[] = "invalid value for 'dueAmount', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['unbilledAmount']) && (mb_strlen($this->container['unbilledAmount']) > 64)) {
                $invalidProperties[] = "invalid value for 'unbilledAmount', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['unbilledAmount']) && (mb_strlen($this->container['unbilledAmount']) < 0)) {
                $invalidProperties[] = "invalid value for 'unbilledAmount', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['usedConsumptionQuota']) && (mb_strlen($this->container['usedConsumptionQuota']) > 64)) {
                $invalidProperties[] = "invalid value for 'usedConsumptionQuota', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['usedConsumptionQuota']) && (mb_strlen($this->container['usedConsumptionQuota']) < 0)) {
                $invalidProperties[] = "invalid value for 'usedConsumptionQuota', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['measureId']) && ($this->container['measureId'] > 4)) {
                $invalidProperties[] = "invalid value for 'measureId', must be smaller than or equal to 4.";
            }
            if (!is_null($this->container['measureId']) && ($this->container['measureId'] < 1)) {
                $invalidProperties[] = "invalid value for 'measureId', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['currency']) && (mb_strlen($this->container['currency']) > 64)) {
                $invalidProperties[] = "invalid value for 'currency', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['currency']) && (mb_strlen($this->container['currency']) < 0)) {
                $invalidProperties[] = "invalid value for 'currency', the character length must be bigger than or equal to 0.";
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
    * Gets consumptionQuota
    *  |参数名称：总消费配额| |参数约束及描述：非必填|
    *
    * @return string|null
    */
    public function getConsumptionQuota()
    {
        return $this->container['consumptionQuota'];
    }

    /**
    * Sets consumptionQuota
    *
    * @param string|null $consumptionQuota |参数名称：总消费配额| |参数约束及描述：非必填|
    *
    * @return $this
    */
    public function setConsumptionQuota($consumptionQuota)
    {
        $this->container['consumptionQuota'] = $consumptionQuota;
        return $this;
    }

    /**
    * Gets amount
    *  |参数名称：账户余额| |参数约束及描述：非必填|
    *
    * @return string|null
    */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
    * Sets amount
    *
    * @param string|null $amount |参数名称：账户余额| |参数约束及描述：非必填|
    *
    * @return $this
    */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;
        return $this;
    }

    /**
    * Gets couponAmount
    *  |参数名称：代金券余额| |参数约束及描述：非必填|
    *
    * @return string|null
    */
    public function getCouponAmount()
    {
        return $this->container['couponAmount'];
    }

    /**
    * Sets couponAmount
    *
    * @param string|null $couponAmount |参数名称：代金券余额| |参数约束及描述：非必填|
    *
    * @return $this
    */
    public function setCouponAmount($couponAmount)
    {
        $this->container['couponAmount'] = $couponAmount;
        return $this;
    }

    /**
    * Gets dueAmount
    *  |参数名称：应还金额| |参数约束及描述：非必填|
    *
    * @return string|null
    */
    public function getDueAmount()
    {
        return $this->container['dueAmount'];
    }

    /**
    * Sets dueAmount
    *
    * @param string|null $dueAmount |参数名称：应还金额| |参数约束及描述：非必填|
    *
    * @return $this
    */
    public function setDueAmount($dueAmount)
    {
        $this->container['dueAmount'] = $dueAmount;
        return $this;
    }

    /**
    * Gets unbilledAmount
    *  |参数名称：未出账预估金额| |参数约束及描述：非必填|
    *
    * @return string|null
    */
    public function getUnbilledAmount()
    {
        return $this->container['unbilledAmount'];
    }

    /**
    * Sets unbilledAmount
    *
    * @param string|null $unbilledAmount |参数名称：未出账预估金额| |参数约束及描述：非必填|
    *
    * @return $this
    */
    public function setUnbilledAmount($unbilledAmount)
    {
        $this->container['unbilledAmount'] = $unbilledAmount;
        return $this;
    }

    /**
    * Gets usedConsumptionQuota
    *  |参数名称：已使用消费配额| |参数约束及描述：非必填，used_consumption_quota = due_amount + unbilled_amount - amount - coupon_amount|
    *
    * @return string|null
    */
    public function getUsedConsumptionQuota()
    {
        return $this->container['usedConsumptionQuota'];
    }

    /**
    * Sets usedConsumptionQuota
    *
    * @param string|null $usedConsumptionQuota |参数名称：已使用消费配额| |参数约束及描述：非必填，used_consumption_quota = due_amount + unbilled_amount - amount - coupon_amount|
    *
    * @return $this
    */
    public function setUsedConsumptionQuota($usedConsumptionQuota)
    {
        $this->container['usedConsumptionQuota'] = $usedConsumptionQuota;
        return $this;
    }

    /**
    * Gets measureId
    *  |参数名称：金额单位| |参数约束及描述：金额单位，1：元|
    *
    * @return int|null
    */
    public function getMeasureId()
    {
        return $this->container['measureId'];
    }

    /**
    * Sets measureId
    *
    * @param int|null $measureId |参数名称：金额单位| |参数约束及描述：金额单位，1：元|
    *
    * @return $this
    */
    public function setMeasureId($measureId)
    {
        $this->container['measureId'] = $measureId;
        return $this;
    }

    /**
    * Gets currency
    *  |参数名称：货币单位| |参数约束及描述：货币单位 |
    *
    * @return string|null
    */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
    * Sets currency
    *
    * @param string|null $currency |参数名称：货币单位| |参数约束及描述：货币单位 |
    *
    * @return $this
    */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;
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

