<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TransferAmountInfoV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TransferAmountInfoV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * availTransferAmount  可拨款的金额。
    * measureId  金额单位。 1：元
    * currency  币种。 CNY：人民币
    * amount  账户余额（仅balance_type=信用账户时才有这个字段）。
    * creditAmount  信用额度（仅balance_type=信用账户时才有这个字段）。
    * expireTime  信用额度过期时间。 UTC时间，格式为：2016-03-28T14:45:38Z。 （仅balance_type=信用账户时才有这个字段）。 如果查询信用账户可拨款余额的查询结果没有失效时间，表示永久有效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'availTransferAmount' => 'float',
            'measureId' => 'int',
            'currency' => 'string',
            'amount' => 'float',
            'creditAmount' => 'float',
            'expireTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * availTransferAmount  可拨款的金额。
    * measureId  金额单位。 1：元
    * currency  币种。 CNY：人民币
    * amount  账户余额（仅balance_type=信用账户时才有这个字段）。
    * creditAmount  信用额度（仅balance_type=信用账户时才有这个字段）。
    * expireTime  信用额度过期时间。 UTC时间，格式为：2016-03-28T14:45:38Z。 （仅balance_type=信用账户时才有这个字段）。 如果查询信用账户可拨款余额的查询结果没有失效时间，表示永久有效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'availTransferAmount' => 'bigdecimal',
        'measureId' => 'int32',
        'currency' => null,
        'amount' => 'bigdecimal',
        'creditAmount' => 'bigdecimal',
        'expireTime' => null
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
    * availTransferAmount  可拨款的金额。
    * measureId  金额单位。 1：元
    * currency  币种。 CNY：人民币
    * amount  账户余额（仅balance_type=信用账户时才有这个字段）。
    * creditAmount  信用额度（仅balance_type=信用账户时才有这个字段）。
    * expireTime  信用额度过期时间。 UTC时间，格式为：2016-03-28T14:45:38Z。 （仅balance_type=信用账户时才有这个字段）。 如果查询信用账户可拨款余额的查询结果没有失效时间，表示永久有效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'availTransferAmount' => 'avail_transfer_amount',
            'measureId' => 'measure_id',
            'currency' => 'currency',
            'amount' => 'amount',
            'creditAmount' => 'credit_amount',
            'expireTime' => 'expire_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * availTransferAmount  可拨款的金额。
    * measureId  金额单位。 1：元
    * currency  币种。 CNY：人民币
    * amount  账户余额（仅balance_type=信用账户时才有这个字段）。
    * creditAmount  信用额度（仅balance_type=信用账户时才有这个字段）。
    * expireTime  信用额度过期时间。 UTC时间，格式为：2016-03-28T14:45:38Z。 （仅balance_type=信用账户时才有这个字段）。 如果查询信用账户可拨款余额的查询结果没有失效时间，表示永久有效。
    *
    * @var string[]
    */
    protected static $setters = [
            'availTransferAmount' => 'setAvailTransferAmount',
            'measureId' => 'setMeasureId',
            'currency' => 'setCurrency',
            'amount' => 'setAmount',
            'creditAmount' => 'setCreditAmount',
            'expireTime' => 'setExpireTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * availTransferAmount  可拨款的金额。
    * measureId  金额单位。 1：元
    * currency  币种。 CNY：人民币
    * amount  账户余额（仅balance_type=信用账户时才有这个字段）。
    * creditAmount  信用额度（仅balance_type=信用账户时才有这个字段）。
    * expireTime  信用额度过期时间。 UTC时间，格式为：2016-03-28T14:45:38Z。 （仅balance_type=信用账户时才有这个字段）。 如果查询信用账户可拨款余额的查询结果没有失效时间，表示永久有效。
    *
    * @var string[]
    */
    protected static $getters = [
            'availTransferAmount' => 'getAvailTransferAmount',
            'measureId' => 'getMeasureId',
            'currency' => 'getCurrency',
            'amount' => 'getAmount',
            'creditAmount' => 'getCreditAmount',
            'expireTime' => 'getExpireTime'
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
        $this->container['availTransferAmount'] = isset($data['availTransferAmount']) ? $data['availTransferAmount'] : null;
        $this->container['measureId'] = isset($data['measureId']) ? $data['measureId'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['creditAmount'] = isset($data['creditAmount']) ? $data['creditAmount'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
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
    * Gets availTransferAmount
    *  可拨款的金额。
    *
    * @return float|null
    */
    public function getAvailTransferAmount()
    {
        return $this->container['availTransferAmount'];
    }

    /**
    * Sets availTransferAmount
    *
    * @param float|null $availTransferAmount 可拨款的金额。
    *
    * @return $this
    */
    public function setAvailTransferAmount($availTransferAmount)
    {
        $this->container['availTransferAmount'] = $availTransferAmount;
        return $this;
    }

    /**
    * Gets measureId
    *  金额单位。 1：元
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
    * @param int|null $measureId 金额单位。 1：元
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
    *  币种。 CNY：人民币
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
    * @param string|null $currency 币种。 CNY：人民币
    *
    * @return $this
    */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;
        return $this;
    }

    /**
    * Gets amount
    *  账户余额（仅balance_type=信用账户时才有这个字段）。
    *
    * @return float|null
    */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
    * Sets amount
    *
    * @param float|null $amount 账户余额（仅balance_type=信用账户时才有这个字段）。
    *
    * @return $this
    */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;
        return $this;
    }

    /**
    * Gets creditAmount
    *  信用额度（仅balance_type=信用账户时才有这个字段）。
    *
    * @return float|null
    */
    public function getCreditAmount()
    {
        return $this->container['creditAmount'];
    }

    /**
    * Sets creditAmount
    *
    * @param float|null $creditAmount 信用额度（仅balance_type=信用账户时才有这个字段）。
    *
    * @return $this
    */
    public function setCreditAmount($creditAmount)
    {
        $this->container['creditAmount'] = $creditAmount;
        return $this;
    }

    /**
    * Gets expireTime
    *  信用额度过期时间。 UTC时间，格式为：2016-03-28T14:45:38Z。 （仅balance_type=信用账户时才有这个字段）。 如果查询信用账户可拨款余额的查询结果没有失效时间，表示永久有效。
    *
    * @return string|null
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param string|null $expireTime 信用额度过期时间。 UTC时间，格式为：2016-03-28T14:45:38Z。 （仅balance_type=信用账户时才有这个字段）。 如果查询信用账户可拨款余额的查询结果没有失效时间，表示永久有效。
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
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

