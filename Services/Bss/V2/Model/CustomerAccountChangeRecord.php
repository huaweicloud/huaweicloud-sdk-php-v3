<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CustomerAccountChangeRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CustomerAccountChangeRecord';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accountChangeId  |参数名称：收支明细流水号| |参数约束及描述：收支明细流水号|
    * tradeDetailType  |参数名称：交易详细类型| |参数约束及描述：交易详细类型|
    * tradeTime  |参数名称：交易时间| |参数约束及描述：交易时间|
    * tradeId  |参数名称：交易ID/订单ID| |参数约束及描述：交易ID/订单ID|
    * changeAmount  |参数名称：变更金额| |参数约束及描述：变更金额|
    * balanceAfterChange  |参数名称：变更后余额| |参数约束及描述：变更后余额|
    * revenueExpenseType  |参数名称：收支类型| |参数约束及描述：收支类型|
    * billCycle  |参数名称：账期| |参数约束及描述：账期|
    * paymentChannelId  |参数名称：交易渠道| |参数约束及描述：交易渠道|
    * paymentChannelNo  |参数名称：交易渠道流水号| |参数约束及描述：交易渠道流水号|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accountChangeId' => 'string',
            'tradeDetailType' => 'string',
            'tradeTime' => 'string',
            'tradeId' => 'string',
            'changeAmount' => 'string',
            'balanceAfterChange' => 'string',
            'revenueExpenseType' => 'string',
            'billCycle' => 'string',
            'paymentChannelId' => 'string',
            'paymentChannelNo' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accountChangeId  |参数名称：收支明细流水号| |参数约束及描述：收支明细流水号|
    * tradeDetailType  |参数名称：交易详细类型| |参数约束及描述：交易详细类型|
    * tradeTime  |参数名称：交易时间| |参数约束及描述：交易时间|
    * tradeId  |参数名称：交易ID/订单ID| |参数约束及描述：交易ID/订单ID|
    * changeAmount  |参数名称：变更金额| |参数约束及描述：变更金额|
    * balanceAfterChange  |参数名称：变更后余额| |参数约束及描述：变更后余额|
    * revenueExpenseType  |参数名称：收支类型| |参数约束及描述：收支类型|
    * billCycle  |参数名称：账期| |参数约束及描述：账期|
    * paymentChannelId  |参数名称：交易渠道| |参数约束及描述：交易渠道|
    * paymentChannelNo  |参数名称：交易渠道流水号| |参数约束及描述：交易渠道流水号|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accountChangeId' => null,
        'tradeDetailType' => null,
        'tradeTime' => null,
        'tradeId' => null,
        'changeAmount' => null,
        'balanceAfterChange' => null,
        'revenueExpenseType' => null,
        'billCycle' => null,
        'paymentChannelId' => null,
        'paymentChannelNo' => null
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
    * accountChangeId  |参数名称：收支明细流水号| |参数约束及描述：收支明细流水号|
    * tradeDetailType  |参数名称：交易详细类型| |参数约束及描述：交易详细类型|
    * tradeTime  |参数名称：交易时间| |参数约束及描述：交易时间|
    * tradeId  |参数名称：交易ID/订单ID| |参数约束及描述：交易ID/订单ID|
    * changeAmount  |参数名称：变更金额| |参数约束及描述：变更金额|
    * balanceAfterChange  |参数名称：变更后余额| |参数约束及描述：变更后余额|
    * revenueExpenseType  |参数名称：收支类型| |参数约束及描述：收支类型|
    * billCycle  |参数名称：账期| |参数约束及描述：账期|
    * paymentChannelId  |参数名称：交易渠道| |参数约束及描述：交易渠道|
    * paymentChannelNo  |参数名称：交易渠道流水号| |参数约束及描述：交易渠道流水号|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accountChangeId' => 'account_change_id',
            'tradeDetailType' => 'trade_detail_type',
            'tradeTime' => 'trade_time',
            'tradeId' => 'trade_id',
            'changeAmount' => 'change_amount',
            'balanceAfterChange' => 'balance_after_change',
            'revenueExpenseType' => 'revenue_expense_type',
            'billCycle' => 'bill_cycle',
            'paymentChannelId' => 'payment_channel_id',
            'paymentChannelNo' => 'payment_channel_no'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accountChangeId  |参数名称：收支明细流水号| |参数约束及描述：收支明细流水号|
    * tradeDetailType  |参数名称：交易详细类型| |参数约束及描述：交易详细类型|
    * tradeTime  |参数名称：交易时间| |参数约束及描述：交易时间|
    * tradeId  |参数名称：交易ID/订单ID| |参数约束及描述：交易ID/订单ID|
    * changeAmount  |参数名称：变更金额| |参数约束及描述：变更金额|
    * balanceAfterChange  |参数名称：变更后余额| |参数约束及描述：变更后余额|
    * revenueExpenseType  |参数名称：收支类型| |参数约束及描述：收支类型|
    * billCycle  |参数名称：账期| |参数约束及描述：账期|
    * paymentChannelId  |参数名称：交易渠道| |参数约束及描述：交易渠道|
    * paymentChannelNo  |参数名称：交易渠道流水号| |参数约束及描述：交易渠道流水号|
    *
    * @var string[]
    */
    protected static $setters = [
            'accountChangeId' => 'setAccountChangeId',
            'tradeDetailType' => 'setTradeDetailType',
            'tradeTime' => 'setTradeTime',
            'tradeId' => 'setTradeId',
            'changeAmount' => 'setChangeAmount',
            'balanceAfterChange' => 'setBalanceAfterChange',
            'revenueExpenseType' => 'setRevenueExpenseType',
            'billCycle' => 'setBillCycle',
            'paymentChannelId' => 'setPaymentChannelId',
            'paymentChannelNo' => 'setPaymentChannelNo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accountChangeId  |参数名称：收支明细流水号| |参数约束及描述：收支明细流水号|
    * tradeDetailType  |参数名称：交易详细类型| |参数约束及描述：交易详细类型|
    * tradeTime  |参数名称：交易时间| |参数约束及描述：交易时间|
    * tradeId  |参数名称：交易ID/订单ID| |参数约束及描述：交易ID/订单ID|
    * changeAmount  |参数名称：变更金额| |参数约束及描述：变更金额|
    * balanceAfterChange  |参数名称：变更后余额| |参数约束及描述：变更后余额|
    * revenueExpenseType  |参数名称：收支类型| |参数约束及描述：收支类型|
    * billCycle  |参数名称：账期| |参数约束及描述：账期|
    * paymentChannelId  |参数名称：交易渠道| |参数约束及描述：交易渠道|
    * paymentChannelNo  |参数名称：交易渠道流水号| |参数约束及描述：交易渠道流水号|
    *
    * @var string[]
    */
    protected static $getters = [
            'accountChangeId' => 'getAccountChangeId',
            'tradeDetailType' => 'getTradeDetailType',
            'tradeTime' => 'getTradeTime',
            'tradeId' => 'getTradeId',
            'changeAmount' => 'getChangeAmount',
            'balanceAfterChange' => 'getBalanceAfterChange',
            'revenueExpenseType' => 'getRevenueExpenseType',
            'billCycle' => 'getBillCycle',
            'paymentChannelId' => 'getPaymentChannelId',
            'paymentChannelNo' => 'getPaymentChannelNo'
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
        $this->container['accountChangeId'] = isset($data['accountChangeId']) ? $data['accountChangeId'] : null;
        $this->container['tradeDetailType'] = isset($data['tradeDetailType']) ? $data['tradeDetailType'] : null;
        $this->container['tradeTime'] = isset($data['tradeTime']) ? $data['tradeTime'] : null;
        $this->container['tradeId'] = isset($data['tradeId']) ? $data['tradeId'] : null;
        $this->container['changeAmount'] = isset($data['changeAmount']) ? $data['changeAmount'] : null;
        $this->container['balanceAfterChange'] = isset($data['balanceAfterChange']) ? $data['balanceAfterChange'] : null;
        $this->container['revenueExpenseType'] = isset($data['revenueExpenseType']) ? $data['revenueExpenseType'] : null;
        $this->container['billCycle'] = isset($data['billCycle']) ? $data['billCycle'] : null;
        $this->container['paymentChannelId'] = isset($data['paymentChannelId']) ? $data['paymentChannelId'] : null;
        $this->container['paymentChannelNo'] = isset($data['paymentChannelNo']) ? $data['paymentChannelNo'] : null;
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
    * Gets accountChangeId
    *  |参数名称：收支明细流水号| |参数约束及描述：收支明细流水号|
    *
    * @return string|null
    */
    public function getAccountChangeId()
    {
        return $this->container['accountChangeId'];
    }

    /**
    * Sets accountChangeId
    *
    * @param string|null $accountChangeId |参数名称：收支明细流水号| |参数约束及描述：收支明细流水号|
    *
    * @return $this
    */
    public function setAccountChangeId($accountChangeId)
    {
        $this->container['accountChangeId'] = $accountChangeId;
        return $this;
    }

    /**
    * Gets tradeDetailType
    *  |参数名称：交易详细类型| |参数约束及描述：交易详细类型|
    *
    * @return string|null
    */
    public function getTradeDetailType()
    {
        return $this->container['tradeDetailType'];
    }

    /**
    * Sets tradeDetailType
    *
    * @param string|null $tradeDetailType |参数名称：交易详细类型| |参数约束及描述：交易详细类型|
    *
    * @return $this
    */
    public function setTradeDetailType($tradeDetailType)
    {
        $this->container['tradeDetailType'] = $tradeDetailType;
        return $this;
    }

    /**
    * Gets tradeTime
    *  |参数名称：交易时间| |参数约束及描述：交易时间|
    *
    * @return string|null
    */
    public function getTradeTime()
    {
        return $this->container['tradeTime'];
    }

    /**
    * Sets tradeTime
    *
    * @param string|null $tradeTime |参数名称：交易时间| |参数约束及描述：交易时间|
    *
    * @return $this
    */
    public function setTradeTime($tradeTime)
    {
        $this->container['tradeTime'] = $tradeTime;
        return $this;
    }

    /**
    * Gets tradeId
    *  |参数名称：交易ID/订单ID| |参数约束及描述：交易ID/订单ID|
    *
    * @return string|null
    */
    public function getTradeId()
    {
        return $this->container['tradeId'];
    }

    /**
    * Sets tradeId
    *
    * @param string|null $tradeId |参数名称：交易ID/订单ID| |参数约束及描述：交易ID/订单ID|
    *
    * @return $this
    */
    public function setTradeId($tradeId)
    {
        $this->container['tradeId'] = $tradeId;
        return $this;
    }

    /**
    * Gets changeAmount
    *  |参数名称：变更金额| |参数约束及描述：变更金额|
    *
    * @return string|null
    */
    public function getChangeAmount()
    {
        return $this->container['changeAmount'];
    }

    /**
    * Sets changeAmount
    *
    * @param string|null $changeAmount |参数名称：变更金额| |参数约束及描述：变更金额|
    *
    * @return $this
    */
    public function setChangeAmount($changeAmount)
    {
        $this->container['changeAmount'] = $changeAmount;
        return $this;
    }

    /**
    * Gets balanceAfterChange
    *  |参数名称：变更后余额| |参数约束及描述：变更后余额|
    *
    * @return string|null
    */
    public function getBalanceAfterChange()
    {
        return $this->container['balanceAfterChange'];
    }

    /**
    * Sets balanceAfterChange
    *
    * @param string|null $balanceAfterChange |参数名称：变更后余额| |参数约束及描述：变更后余额|
    *
    * @return $this
    */
    public function setBalanceAfterChange($balanceAfterChange)
    {
        $this->container['balanceAfterChange'] = $balanceAfterChange;
        return $this;
    }

    /**
    * Gets revenueExpenseType
    *  |参数名称：收支类型| |参数约束及描述：收支类型|
    *
    * @return string|null
    */
    public function getRevenueExpenseType()
    {
        return $this->container['revenueExpenseType'];
    }

    /**
    * Sets revenueExpenseType
    *
    * @param string|null $revenueExpenseType |参数名称：收支类型| |参数约束及描述：收支类型|
    *
    * @return $this
    */
    public function setRevenueExpenseType($revenueExpenseType)
    {
        $this->container['revenueExpenseType'] = $revenueExpenseType;
        return $this;
    }

    /**
    * Gets billCycle
    *  |参数名称：账期| |参数约束及描述：账期|
    *
    * @return string|null
    */
    public function getBillCycle()
    {
        return $this->container['billCycle'];
    }

    /**
    * Sets billCycle
    *
    * @param string|null $billCycle |参数名称：账期| |参数约束及描述：账期|
    *
    * @return $this
    */
    public function setBillCycle($billCycle)
    {
        $this->container['billCycle'] = $billCycle;
        return $this;
    }

    /**
    * Gets paymentChannelId
    *  |参数名称：交易渠道| |参数约束及描述：交易渠道|
    *
    * @return string|null
    */
    public function getPaymentChannelId()
    {
        return $this->container['paymentChannelId'];
    }

    /**
    * Sets paymentChannelId
    *
    * @param string|null $paymentChannelId |参数名称：交易渠道| |参数约束及描述：交易渠道|
    *
    * @return $this
    */
    public function setPaymentChannelId($paymentChannelId)
    {
        $this->container['paymentChannelId'] = $paymentChannelId;
        return $this;
    }

    /**
    * Gets paymentChannelNo
    *  |参数名称：交易渠道流水号| |参数约束及描述：交易渠道流水号|
    *
    * @return string|null
    */
    public function getPaymentChannelNo()
    {
        return $this->container['paymentChannelNo'];
    }

    /**
    * Sets paymentChannelNo
    *
    * @param string|null $paymentChannelNo |参数名称：交易渠道流水号| |参数约束及描述：交易渠道流水号|
    *
    * @return $this
    */
    public function setPaymentChannelNo($paymentChannelNo)
    {
        $this->container['paymentChannelNo'] = $paymentChannelNo;
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

