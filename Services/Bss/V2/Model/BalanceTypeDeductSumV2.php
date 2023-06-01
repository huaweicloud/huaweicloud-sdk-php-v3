<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BalanceTypeDeductSumV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BalanceTypeDeductSumV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * balanceType  账户类型。 BALANCE_TYPE_DEBIT：现金BALANCE_TYPE_CREDIT：信用BALANCE_TYPE_BONUS：奖励BALANCE_TYPE_COUPON：代金券BALANCE_TYPE_RCASH_COUPON 现金券。BALANCE_TYPE_STORED_VALUE_CARD：储值卡消费
    * amount  金额。 对于billType=1或者2的账单，该金额为负值。
    * billType  账单类型。 0：正常1：退订2：华为核销
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'balanceType' => 'string',
            'amount' => 'float',
            'billType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * balanceType  账户类型。 BALANCE_TYPE_DEBIT：现金BALANCE_TYPE_CREDIT：信用BALANCE_TYPE_BONUS：奖励BALANCE_TYPE_COUPON：代金券BALANCE_TYPE_RCASH_COUPON 现金券。BALANCE_TYPE_STORED_VALUE_CARD：储值卡消费
    * amount  金额。 对于billType=1或者2的账单，该金额为负值。
    * billType  账单类型。 0：正常1：退订2：华为核销
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'balanceType' => null,
        'amount' => 'bigdecimal',
        'billType' => null
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
    * balanceType  账户类型。 BALANCE_TYPE_DEBIT：现金BALANCE_TYPE_CREDIT：信用BALANCE_TYPE_BONUS：奖励BALANCE_TYPE_COUPON：代金券BALANCE_TYPE_RCASH_COUPON 现金券。BALANCE_TYPE_STORED_VALUE_CARD：储值卡消费
    * amount  金额。 对于billType=1或者2的账单，该金额为负值。
    * billType  账单类型。 0：正常1：退订2：华为核销
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'balanceType' => 'balance_type',
            'amount' => 'amount',
            'billType' => 'bill_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * balanceType  账户类型。 BALANCE_TYPE_DEBIT：现金BALANCE_TYPE_CREDIT：信用BALANCE_TYPE_BONUS：奖励BALANCE_TYPE_COUPON：代金券BALANCE_TYPE_RCASH_COUPON 现金券。BALANCE_TYPE_STORED_VALUE_CARD：储值卡消费
    * amount  金额。 对于billType=1或者2的账单，该金额为负值。
    * billType  账单类型。 0：正常1：退订2：华为核销
    *
    * @var string[]
    */
    protected static $setters = [
            'balanceType' => 'setBalanceType',
            'amount' => 'setAmount',
            'billType' => 'setBillType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * balanceType  账户类型。 BALANCE_TYPE_DEBIT：现金BALANCE_TYPE_CREDIT：信用BALANCE_TYPE_BONUS：奖励BALANCE_TYPE_COUPON：代金券BALANCE_TYPE_RCASH_COUPON 现金券。BALANCE_TYPE_STORED_VALUE_CARD：储值卡消费
    * amount  金额。 对于billType=1或者2的账单，该金额为负值。
    * billType  账单类型。 0：正常1：退订2：华为核销
    *
    * @var string[]
    */
    protected static $getters = [
            'balanceType' => 'getBalanceType',
            'amount' => 'getAmount',
            'billType' => 'getBillType'
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
        $this->container['balanceType'] = isset($data['balanceType']) ? $data['balanceType'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['billType'] = isset($data['billType']) ? $data['billType'] : null;
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
    * Gets balanceType
    *  账户类型。 BALANCE_TYPE_DEBIT：现金BALANCE_TYPE_CREDIT：信用BALANCE_TYPE_BONUS：奖励BALANCE_TYPE_COUPON：代金券BALANCE_TYPE_RCASH_COUPON 现金券。BALANCE_TYPE_STORED_VALUE_CARD：储值卡消费
    *
    * @return string|null
    */
    public function getBalanceType()
    {
        return $this->container['balanceType'];
    }

    /**
    * Sets balanceType
    *
    * @param string|null $balanceType 账户类型。 BALANCE_TYPE_DEBIT：现金BALANCE_TYPE_CREDIT：信用BALANCE_TYPE_BONUS：奖励BALANCE_TYPE_COUPON：代金券BALANCE_TYPE_RCASH_COUPON 现金券。BALANCE_TYPE_STORED_VALUE_CARD：储值卡消费
    *
    * @return $this
    */
    public function setBalanceType($balanceType)
    {
        $this->container['balanceType'] = $balanceType;
        return $this;
    }

    /**
    * Gets amount
    *  金额。 对于billType=1或者2的账单，该金额为负值。
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
    * @param float|null $amount 金额。 对于billType=1或者2的账单，该金额为负值。
    *
    * @return $this
    */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;
        return $this;
    }

    /**
    * Gets billType
    *  账单类型。 0：正常1：退订2：华为核销
    *
    * @return string|null
    */
    public function getBillType()
    {
        return $this->container['billType'];
    }

    /**
    * Sets billType
    *
    * @param string|null $billType 账单类型。 0：正常1：退订2：华为核销
    *
    * @return $this
    */
    public function setBillType($billType)
    {
        $this->container['billType'] = $billType;
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

