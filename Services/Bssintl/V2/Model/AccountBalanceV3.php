<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AccountBalanceV3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AccountBalanceV3';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accountId  |参数名称：账户标识。| |参数约束及描述：账户标识。|
    * accountType  |参数名称：账户类型：1：余额2：信用5：奖励7：保证金8：可拨款| |参数的约束及描述：账户类型：1：余额2：信用5：奖励7：保证金8：可拨款|
    * amount  |参数名称：余额。| |参数的约束及描述：余额。|
    * currency  |参数名称：币种。当前固定为CNY。| |参数约束及描述：币种。当前固定为CNY。|
    * designatedAmount  |参数名称：专款专用余额。| |参数的约束及描述：专款专用余额。|
    * creditAmount  |参数名称：总信用额度。只有账户类型是2:信用的时候才有该字段| |参数的约束及描述：总信用额度。只有账户类型是2:信用的时候才有该字段|
    * measureId  |参数名称：度量单位。1：元。| |参数的约束及描述：度量单位。1：元。|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accountId' => 'string',
            'accountType' => 'int',
            'amount' => 'float',
            'currency' => 'string',
            'designatedAmount' => 'float',
            'creditAmount' => 'float',
            'measureId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accountId  |参数名称：账户标识。| |参数约束及描述：账户标识。|
    * accountType  |参数名称：账户类型：1：余额2：信用5：奖励7：保证金8：可拨款| |参数的约束及描述：账户类型：1：余额2：信用5：奖励7：保证金8：可拨款|
    * amount  |参数名称：余额。| |参数的约束及描述：余额。|
    * currency  |参数名称：币种。当前固定为CNY。| |参数约束及描述：币种。当前固定为CNY。|
    * designatedAmount  |参数名称：专款专用余额。| |参数的约束及描述：专款专用余额。|
    * creditAmount  |参数名称：总信用额度。只有账户类型是2:信用的时候才有该字段| |参数的约束及描述：总信用额度。只有账户类型是2:信用的时候才有该字段|
    * measureId  |参数名称：度量单位。1：元。| |参数的约束及描述：度量单位。1：元。|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accountId' => null,
        'accountType' => 'int32',
        'amount' => 'bigdecimal',
        'currency' => null,
        'designatedAmount' => 'bigdecimal',
        'creditAmount' => 'bigdecimal',
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
    * accountId  |参数名称：账户标识。| |参数约束及描述：账户标识。|
    * accountType  |参数名称：账户类型：1：余额2：信用5：奖励7：保证金8：可拨款| |参数的约束及描述：账户类型：1：余额2：信用5：奖励7：保证金8：可拨款|
    * amount  |参数名称：余额。| |参数的约束及描述：余额。|
    * currency  |参数名称：币种。当前固定为CNY。| |参数约束及描述：币种。当前固定为CNY。|
    * designatedAmount  |参数名称：专款专用余额。| |参数的约束及描述：专款专用余额。|
    * creditAmount  |参数名称：总信用额度。只有账户类型是2:信用的时候才有该字段| |参数的约束及描述：总信用额度。只有账户类型是2:信用的时候才有该字段|
    * measureId  |参数名称：度量单位。1：元。| |参数的约束及描述：度量单位。1：元。|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accountId' => 'account_id',
            'accountType' => 'account_type',
            'amount' => 'amount',
            'currency' => 'currency',
            'designatedAmount' => 'designated_amount',
            'creditAmount' => 'credit_amount',
            'measureId' => 'measure_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accountId  |参数名称：账户标识。| |参数约束及描述：账户标识。|
    * accountType  |参数名称：账户类型：1：余额2：信用5：奖励7：保证金8：可拨款| |参数的约束及描述：账户类型：1：余额2：信用5：奖励7：保证金8：可拨款|
    * amount  |参数名称：余额。| |参数的约束及描述：余额。|
    * currency  |参数名称：币种。当前固定为CNY。| |参数约束及描述：币种。当前固定为CNY。|
    * designatedAmount  |参数名称：专款专用余额。| |参数的约束及描述：专款专用余额。|
    * creditAmount  |参数名称：总信用额度。只有账户类型是2:信用的时候才有该字段| |参数的约束及描述：总信用额度。只有账户类型是2:信用的时候才有该字段|
    * measureId  |参数名称：度量单位。1：元。| |参数的约束及描述：度量单位。1：元。|
    *
    * @var string[]
    */
    protected static $setters = [
            'accountId' => 'setAccountId',
            'accountType' => 'setAccountType',
            'amount' => 'setAmount',
            'currency' => 'setCurrency',
            'designatedAmount' => 'setDesignatedAmount',
            'creditAmount' => 'setCreditAmount',
            'measureId' => 'setMeasureId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accountId  |参数名称：账户标识。| |参数约束及描述：账户标识。|
    * accountType  |参数名称：账户类型：1：余额2：信用5：奖励7：保证金8：可拨款| |参数的约束及描述：账户类型：1：余额2：信用5：奖励7：保证金8：可拨款|
    * amount  |参数名称：余额。| |参数的约束及描述：余额。|
    * currency  |参数名称：币种。当前固定为CNY。| |参数约束及描述：币种。当前固定为CNY。|
    * designatedAmount  |参数名称：专款专用余额。| |参数的约束及描述：专款专用余额。|
    * creditAmount  |参数名称：总信用额度。只有账户类型是2:信用的时候才有该字段| |参数的约束及描述：总信用额度。只有账户类型是2:信用的时候才有该字段|
    * measureId  |参数名称：度量单位。1：元。| |参数的约束及描述：度量单位。1：元。|
    *
    * @var string[]
    */
    protected static $getters = [
            'accountId' => 'getAccountId',
            'accountType' => 'getAccountType',
            'amount' => 'getAmount',
            'currency' => 'getCurrency',
            'designatedAmount' => 'getDesignatedAmount',
            'creditAmount' => 'getCreditAmount',
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
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['accountType'] = isset($data['accountType']) ? $data['accountType'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : 'CNY';
        $this->container['designatedAmount'] = isset($data['designatedAmount']) ? $data['designatedAmount'] : null;
        $this->container['creditAmount'] = isset($data['creditAmount']) ? $data['creditAmount'] : null;
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
        if ($this->container['accountId'] === null) {
            $invalidProperties[] = "'accountId' can't be null";
        }
        if ($this->container['accountType'] === null) {
            $invalidProperties[] = "'accountType' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['measureId'] === null) {
            $invalidProperties[] = "'measureId' can't be null";
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
    * Gets accountId
    *  |参数名称：账户标识。| |参数约束及描述：账户标识。|
    *
    * @return string
    */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
    * Sets accountId
    *
    * @param string $accountId |参数名称：账户标识。| |参数约束及描述：账户标识。|
    *
    * @return $this
    */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;
        return $this;
    }

    /**
    * Gets accountType
    *  |参数名称：账户类型：1：余额2：信用5：奖励7：保证金8：可拨款| |参数的约束及描述：账户类型：1：余额2：信用5：奖励7：保证金8：可拨款|
    *
    * @return int
    */
    public function getAccountType()
    {
        return $this->container['accountType'];
    }

    /**
    * Sets accountType
    *
    * @param int $accountType |参数名称：账户类型：1：余额2：信用5：奖励7：保证金8：可拨款| |参数的约束及描述：账户类型：1：余额2：信用5：奖励7：保证金8：可拨款|
    *
    * @return $this
    */
    public function setAccountType($accountType)
    {
        $this->container['accountType'] = $accountType;
        return $this;
    }

    /**
    * Gets amount
    *  |参数名称：余额。| |参数的约束及描述：余额。|
    *
    * @return float
    */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
    * Sets amount
    *
    * @param float $amount |参数名称：余额。| |参数的约束及描述：余额。|
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
    *  |参数名称：币种。当前固定为CNY。| |参数约束及描述：币种。当前固定为CNY。|
    *
    * @return string
    */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
    * Sets currency
    *
    * @param string $currency |参数名称：币种。当前固定为CNY。| |参数约束及描述：币种。当前固定为CNY。|
    *
    * @return $this
    */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;
        return $this;
    }

    /**
    * Gets designatedAmount
    *  |参数名称：专款专用余额。| |参数的约束及描述：专款专用余额。|
    *
    * @return float|null
    */
    public function getDesignatedAmount()
    {
        return $this->container['designatedAmount'];
    }

    /**
    * Sets designatedAmount
    *
    * @param float|null $designatedAmount |参数名称：专款专用余额。| |参数的约束及描述：专款专用余额。|
    *
    * @return $this
    */
    public function setDesignatedAmount($designatedAmount)
    {
        $this->container['designatedAmount'] = $designatedAmount;
        return $this;
    }

    /**
    * Gets creditAmount
    *  |参数名称：总信用额度。只有账户类型是2:信用的时候才有该字段| |参数的约束及描述：总信用额度。只有账户类型是2:信用的时候才有该字段|
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
    * @param float|null $creditAmount |参数名称：总信用额度。只有账户类型是2:信用的时候才有该字段| |参数的约束及描述：总信用额度。只有账户类型是2:信用的时候才有该字段|
    *
    * @return $this
    */
    public function setCreditAmount($creditAmount)
    {
        $this->container['creditAmount'] = $creditAmount;
        return $this;
    }

    /**
    * Gets measureId
    *  |参数名称：度量单位。1：元。| |参数的约束及描述：度量单位。1：元。|
    *
    * @return int
    */
    public function getMeasureId()
    {
        return $this->container['measureId'];
    }

    /**
    * Sets measureId
    *
    * @param int $measureId |参数名称：度量单位。1：元。| |参数的约束及描述：度量单位。1：元。|
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

