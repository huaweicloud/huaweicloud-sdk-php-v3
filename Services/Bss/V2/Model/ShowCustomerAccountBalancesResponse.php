<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowCustomerAccountBalancesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowCustomerAccountBalancesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accountBalances  账户余额列表。 具体请参见表1。
    * debtAmount  欠款总金额。
    * measureId  度量单位。 1：元
    * currency  币种。 CNY：人民币。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accountBalances' => '\HuaweiCloud\SDK\Bss\V2\Model\AccountBalanceV3[]',
            'debtAmount' => 'double',
            'measureId' => 'int',
            'currency' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accountBalances  账户余额列表。 具体请参见表1。
    * debtAmount  欠款总金额。
    * measureId  度量单位。 1：元
    * currency  币种。 CNY：人民币。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accountBalances' => null,
        'debtAmount' => 'double',
        'measureId' => 'int32',
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
    * accountBalances  账户余额列表。 具体请参见表1。
    * debtAmount  欠款总金额。
    * measureId  度量单位。 1：元
    * currency  币种。 CNY：人民币。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accountBalances' => 'account_balances',
            'debtAmount' => 'debt_amount',
            'measureId' => 'measure_id',
            'currency' => 'currency'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accountBalances  账户余额列表。 具体请参见表1。
    * debtAmount  欠款总金额。
    * measureId  度量单位。 1：元
    * currency  币种。 CNY：人民币。
    *
    * @var string[]
    */
    protected static $setters = [
            'accountBalances' => 'setAccountBalances',
            'debtAmount' => 'setDebtAmount',
            'measureId' => 'setMeasureId',
            'currency' => 'setCurrency'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accountBalances  账户余额列表。 具体请参见表1。
    * debtAmount  欠款总金额。
    * measureId  度量单位。 1：元
    * currency  币种。 CNY：人民币。
    *
    * @var string[]
    */
    protected static $getters = [
            'accountBalances' => 'getAccountBalances',
            'debtAmount' => 'getDebtAmount',
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
        $this->container['accountBalances'] = isset($data['accountBalances']) ? $data['accountBalances'] : null;
        $this->container['debtAmount'] = isset($data['debtAmount']) ? $data['debtAmount'] : null;
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
    * Gets accountBalances
    *  账户余额列表。 具体请参见表1。
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\AccountBalanceV3[]|null
    */
    public function getAccountBalances()
    {
        return $this->container['accountBalances'];
    }

    /**
    * Sets accountBalances
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\AccountBalanceV3[]|null $accountBalances 账户余额列表。 具体请参见表1。
    *
    * @return $this
    */
    public function setAccountBalances($accountBalances)
    {
        $this->container['accountBalances'] = $accountBalances;
        return $this;
    }

    /**
    * Gets debtAmount
    *  欠款总金额。
    *
    * @return double|null
    */
    public function getDebtAmount()
    {
        return $this->container['debtAmount'];
    }

    /**
    * Sets debtAmount
    *
    * @param double|null $debtAmount 欠款总金额。
    *
    * @return $this
    */
    public function setDebtAmount($debtAmount)
    {
        $this->container['debtAmount'] = $debtAmount;
        return $this;
    }

    /**
    * Gets measureId
    *  度量单位。 1：元
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
    * @param int|null $measureId 度量单位。 1：元
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
    *  币种。 CNY：人民币。
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
    * @param string|null $currency 币种。 CNY：人民币。
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

