<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BalanceTypePay implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BalanceTypePay';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * balanceTypeId  账户类型。 BALANCE_TYPE_DEBIT：现金账户BALANCE_TYPE_CREDIT：信用账户BALANCE_TYPE_BONUS：奖励账户（该账户已下线）BALANCE_TYPE_COUPON：代金券账户BALANCE_TYPE_DEBIT_RATE：折扣账户
    * deductAmount  支出金额。 单位：分
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'balanceTypeId' => 'string',
            'deductAmount' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * balanceTypeId  账户类型。 BALANCE_TYPE_DEBIT：现金账户BALANCE_TYPE_CREDIT：信用账户BALANCE_TYPE_BONUS：奖励账户（该账户已下线）BALANCE_TYPE_COUPON：代金券账户BALANCE_TYPE_DEBIT_RATE：折扣账户
    * deductAmount  支出金额。 单位：分
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'balanceTypeId' => null,
        'deductAmount' => 'bigdecimal'
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
    * balanceTypeId  账户类型。 BALANCE_TYPE_DEBIT：现金账户BALANCE_TYPE_CREDIT：信用账户BALANCE_TYPE_BONUS：奖励账户（该账户已下线）BALANCE_TYPE_COUPON：代金券账户BALANCE_TYPE_DEBIT_RATE：折扣账户
    * deductAmount  支出金额。 单位：分
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'balanceTypeId' => 'balance_type_id',
            'deductAmount' => 'deduct_amount'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * balanceTypeId  账户类型。 BALANCE_TYPE_DEBIT：现金账户BALANCE_TYPE_CREDIT：信用账户BALANCE_TYPE_BONUS：奖励账户（该账户已下线）BALANCE_TYPE_COUPON：代金券账户BALANCE_TYPE_DEBIT_RATE：折扣账户
    * deductAmount  支出金额。 单位：分
    *
    * @var string[]
    */
    protected static $setters = [
            'balanceTypeId' => 'setBalanceTypeId',
            'deductAmount' => 'setDeductAmount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * balanceTypeId  账户类型。 BALANCE_TYPE_DEBIT：现金账户BALANCE_TYPE_CREDIT：信用账户BALANCE_TYPE_BONUS：奖励账户（该账户已下线）BALANCE_TYPE_COUPON：代金券账户BALANCE_TYPE_DEBIT_RATE：折扣账户
    * deductAmount  支出金额。 单位：分
    *
    * @var string[]
    */
    protected static $getters = [
            'balanceTypeId' => 'getBalanceTypeId',
            'deductAmount' => 'getDeductAmount'
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
        $this->container['balanceTypeId'] = isset($data['balanceTypeId']) ? $data['balanceTypeId'] : null;
        $this->container['deductAmount'] = isset($data['deductAmount']) ? $data['deductAmount'] : null;
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
    * Gets balanceTypeId
    *  账户类型。 BALANCE_TYPE_DEBIT：现金账户BALANCE_TYPE_CREDIT：信用账户BALANCE_TYPE_BONUS：奖励账户（该账户已下线）BALANCE_TYPE_COUPON：代金券账户BALANCE_TYPE_DEBIT_RATE：折扣账户
    *
    * @return string|null
    */
    public function getBalanceTypeId()
    {
        return $this->container['balanceTypeId'];
    }

    /**
    * Sets balanceTypeId
    *
    * @param string|null $balanceTypeId 账户类型。 BALANCE_TYPE_DEBIT：现金账户BALANCE_TYPE_CREDIT：信用账户BALANCE_TYPE_BONUS：奖励账户（该账户已下线）BALANCE_TYPE_COUPON：代金券账户BALANCE_TYPE_DEBIT_RATE：折扣账户
    *
    * @return $this
    */
    public function setBalanceTypeId($balanceTypeId)
    {
        $this->container['balanceTypeId'] = $balanceTypeId;
        return $this;
    }

    /**
    * Gets deductAmount
    *  支出金额。 单位：分
    *
    * @return float|null
    */
    public function getDeductAmount()
    {
        return $this->container['deductAmount'];
    }

    /**
    * Sets deductAmount
    *
    * @param float|null $deductAmount 支出金额。 单位：分
    *
    * @return $this
    */
    public function setDeductAmount($deductAmount)
    {
        $this->container['deductAmount'] = $deductAmount;
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

