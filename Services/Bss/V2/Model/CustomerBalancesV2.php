<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CustomerBalancesV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CustomerBalancesV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * customerId  客户账号ID。
    * debtAmount  客户欠款总额度。
    * amount  客户可用总额度。
    * currency  币种。 CNY：人民币。
    * measureId  度量单位： 1：元
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'customerId' => 'string',
            'debtAmount' => 'double',
            'amount' => 'double',
            'currency' => 'string',
            'measureId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * customerId  客户账号ID。
    * debtAmount  客户欠款总额度。
    * amount  客户可用总额度。
    * currency  币种。 CNY：人民币。
    * measureId  度量单位： 1：元
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'customerId' => null,
        'debtAmount' => 'double',
        'amount' => 'double',
        'currency' => null,
        'measureId' => 'int32'
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
    * customerId  客户账号ID。
    * debtAmount  客户欠款总额度。
    * amount  客户可用总额度。
    * currency  币种。 CNY：人民币。
    * measureId  度量单位： 1：元
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'customerId' => 'customer_id',
            'debtAmount' => 'debt_amount',
            'amount' => 'amount',
            'currency' => 'currency',
            'measureId' => 'measure_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * customerId  客户账号ID。
    * debtAmount  客户欠款总额度。
    * amount  客户可用总额度。
    * currency  币种。 CNY：人民币。
    * measureId  度量单位： 1：元
    *
    * @var string[]
    */
    protected static $setters = [
            'customerId' => 'setCustomerId',
            'debtAmount' => 'setDebtAmount',
            'amount' => 'setAmount',
            'currency' => 'setCurrency',
            'measureId' => 'setMeasureId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * customerId  客户账号ID。
    * debtAmount  客户欠款总额度。
    * amount  客户可用总额度。
    * currency  币种。 CNY：人民币。
    * measureId  度量单位： 1：元
    *
    * @var string[]
    */
    protected static $getters = [
            'customerId' => 'getCustomerId',
            'debtAmount' => 'getDebtAmount',
            'amount' => 'getAmount',
            'currency' => 'getCurrency',
            'measureId' => 'getMeasureId'
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
        $this->container['customerId'] = isset($data['customerId']) ? $data['customerId'] : null;
        $this->container['debtAmount'] = isset($data['debtAmount']) ? $data['debtAmount'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['measureId'] = isset($data['measureId']) ? $data['measureId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['customerId'] === null) {
            $invalidProperties[] = "'customerId' can't be null";
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
    * Gets customerId
    *  客户账号ID。
    *
    * @return string
    */
    public function getCustomerId()
    {
        return $this->container['customerId'];
    }

    /**
    * Sets customerId
    *
    * @param string $customerId 客户账号ID。
    *
    * @return $this
    */
    public function setCustomerId($customerId)
    {
        $this->container['customerId'] = $customerId;
        return $this;
    }

    /**
    * Gets debtAmount
    *  客户欠款总额度。
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
    * @param double|null $debtAmount 客户欠款总额度。
    *
    * @return $this
    */
    public function setDebtAmount($debtAmount)
    {
        $this->container['debtAmount'] = $debtAmount;
        return $this;
    }

    /**
    * Gets amount
    *  客户可用总额度。
    *
    * @return double|null
    */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
    * Sets amount
    *
    * @param double|null $amount 客户可用总额度。
    *
    * @return $this
    */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;
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
    * Gets measureId
    *  度量单位： 1：元
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
    * @param int|null $measureId 度量单位： 1：元
    *
    * @return $this
    */
    public function setMeasureId($measureId)
    {
        $this->container['measureId'] = $measureId;
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

