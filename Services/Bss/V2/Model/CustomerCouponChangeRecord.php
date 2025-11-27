<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CustomerCouponChangeRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CustomerCouponChangeRecord';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * couponId  |参数名称：优惠券ID| |参数约束及描述：优惠券ID，范围限制:0-64|
    * tradeDetailType  |参数名称：交易详细类型| |参数约束及描述：交易详细类型，范围限制:0-128， SOURCE_OPERAIION_DEDEUCT：消费(包年/包月) SOURCE_OPERAIION_USAGE：消费(按需) SOURCE_OPERAIION_SAVINGS_PLANS：消费(节省计划) SOURCE_OPERAIION_WRITEOFF：消费(欠费还款) SOURCE_OPERAIION_EXPIRECLEAR：过期清零 SOURCE_OPERAIION_UNSUBSCRIBE：退券(退订) SOURCE_OPERAIION_UNFROZEN：退券(流程中) SOURCE_OPERAIION_RFROZEN：退券(流程中) SOURCE_OPERAIION_PRIZE：激活 SOURCE_OPERAIION_BILLREFUND：调账(华为核销) SOURCE_OPERATION_COUPONCANCEL：优惠券回收 SOURCE_OPERATION_DEPOSIT_FROZEN：保证金冻结 SOURCE_OPERATION_DEPOSIT_UNFROZEN：保证金解冻 SOURCE_OPERATION_RETRIEVE：回收(企业回收) SOURCE_OPERATION_TRANSFER：划拨(企业划拨)|
    * tradeTime  |参数名称：交易时间| |参数约束及描述：交易时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ|
    * tradeId  |参数名称：交易ID/订单ID| |参数约束及描述：交易ID/订单ID，范围限制：0-128|
    * changeAmount  |参数名称：变更金额| |参数约束及描述：变更金额|
    * balanceAfterChange  |参数名称：变更后余额| |参数约束及描述：变更后余额|
    * revenueExpenseType  |参数名称：收支类型| |参数约束及描述：收支类型。REVENUE：收入 EXPENSE：支出|
    * billCycle  |参数名称：账期| |参数约束及描述：账期|
    * accountName  |参数名称：账号名称| |参数约束及描述：账号名称，范围限制：0-128|
    * cloudServiceTypeName  |参数名称：云服务类型名称| |参数约束及描述：产品的云服务名称，范围限制：0-200|
    * resourceTypeName  |参数名称：资源类型名称| |参数约束及描述：产品的资源类型名称，范围限制：0-200|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'couponId' => 'string',
            'tradeDetailType' => 'string',
            'tradeTime' => 'string',
            'tradeId' => 'string',
            'changeAmount' => 'string',
            'balanceAfterChange' => 'string',
            'revenueExpenseType' => 'string',
            'billCycle' => 'string',
            'accountName' => 'string',
            'cloudServiceTypeName' => 'string',
            'resourceTypeName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * couponId  |参数名称：优惠券ID| |参数约束及描述：优惠券ID，范围限制:0-64|
    * tradeDetailType  |参数名称：交易详细类型| |参数约束及描述：交易详细类型，范围限制:0-128， SOURCE_OPERAIION_DEDEUCT：消费(包年/包月) SOURCE_OPERAIION_USAGE：消费(按需) SOURCE_OPERAIION_SAVINGS_PLANS：消费(节省计划) SOURCE_OPERAIION_WRITEOFF：消费(欠费还款) SOURCE_OPERAIION_EXPIRECLEAR：过期清零 SOURCE_OPERAIION_UNSUBSCRIBE：退券(退订) SOURCE_OPERAIION_UNFROZEN：退券(流程中) SOURCE_OPERAIION_RFROZEN：退券(流程中) SOURCE_OPERAIION_PRIZE：激活 SOURCE_OPERAIION_BILLREFUND：调账(华为核销) SOURCE_OPERATION_COUPONCANCEL：优惠券回收 SOURCE_OPERATION_DEPOSIT_FROZEN：保证金冻结 SOURCE_OPERATION_DEPOSIT_UNFROZEN：保证金解冻 SOURCE_OPERATION_RETRIEVE：回收(企业回收) SOURCE_OPERATION_TRANSFER：划拨(企业划拨)|
    * tradeTime  |参数名称：交易时间| |参数约束及描述：交易时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ|
    * tradeId  |参数名称：交易ID/订单ID| |参数约束及描述：交易ID/订单ID，范围限制：0-128|
    * changeAmount  |参数名称：变更金额| |参数约束及描述：变更金额|
    * balanceAfterChange  |参数名称：变更后余额| |参数约束及描述：变更后余额|
    * revenueExpenseType  |参数名称：收支类型| |参数约束及描述：收支类型。REVENUE：收入 EXPENSE：支出|
    * billCycle  |参数名称：账期| |参数约束及描述：账期|
    * accountName  |参数名称：账号名称| |参数约束及描述：账号名称，范围限制：0-128|
    * cloudServiceTypeName  |参数名称：云服务类型名称| |参数约束及描述：产品的云服务名称，范围限制：0-200|
    * resourceTypeName  |参数名称：资源类型名称| |参数约束及描述：产品的资源类型名称，范围限制：0-200|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'couponId' => null,
        'tradeDetailType' => null,
        'tradeTime' => null,
        'tradeId' => null,
        'changeAmount' => null,
        'balanceAfterChange' => null,
        'revenueExpenseType' => null,
        'billCycle' => null,
        'accountName' => null,
        'cloudServiceTypeName' => null,
        'resourceTypeName' => null
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
    * couponId  |参数名称：优惠券ID| |参数约束及描述：优惠券ID，范围限制:0-64|
    * tradeDetailType  |参数名称：交易详细类型| |参数约束及描述：交易详细类型，范围限制:0-128， SOURCE_OPERAIION_DEDEUCT：消费(包年/包月) SOURCE_OPERAIION_USAGE：消费(按需) SOURCE_OPERAIION_SAVINGS_PLANS：消费(节省计划) SOURCE_OPERAIION_WRITEOFF：消费(欠费还款) SOURCE_OPERAIION_EXPIRECLEAR：过期清零 SOURCE_OPERAIION_UNSUBSCRIBE：退券(退订) SOURCE_OPERAIION_UNFROZEN：退券(流程中) SOURCE_OPERAIION_RFROZEN：退券(流程中) SOURCE_OPERAIION_PRIZE：激活 SOURCE_OPERAIION_BILLREFUND：调账(华为核销) SOURCE_OPERATION_COUPONCANCEL：优惠券回收 SOURCE_OPERATION_DEPOSIT_FROZEN：保证金冻结 SOURCE_OPERATION_DEPOSIT_UNFROZEN：保证金解冻 SOURCE_OPERATION_RETRIEVE：回收(企业回收) SOURCE_OPERATION_TRANSFER：划拨(企业划拨)|
    * tradeTime  |参数名称：交易时间| |参数约束及描述：交易时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ|
    * tradeId  |参数名称：交易ID/订单ID| |参数约束及描述：交易ID/订单ID，范围限制：0-128|
    * changeAmount  |参数名称：变更金额| |参数约束及描述：变更金额|
    * balanceAfterChange  |参数名称：变更后余额| |参数约束及描述：变更后余额|
    * revenueExpenseType  |参数名称：收支类型| |参数约束及描述：收支类型。REVENUE：收入 EXPENSE：支出|
    * billCycle  |参数名称：账期| |参数约束及描述：账期|
    * accountName  |参数名称：账号名称| |参数约束及描述：账号名称，范围限制：0-128|
    * cloudServiceTypeName  |参数名称：云服务类型名称| |参数约束及描述：产品的云服务名称，范围限制：0-200|
    * resourceTypeName  |参数名称：资源类型名称| |参数约束及描述：产品的资源类型名称，范围限制：0-200|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'couponId' => 'coupon_id',
            'tradeDetailType' => 'trade_detail_type',
            'tradeTime' => 'trade_time',
            'tradeId' => 'trade_id',
            'changeAmount' => 'change_amount',
            'balanceAfterChange' => 'balance_after_change',
            'revenueExpenseType' => 'revenue_expense_type',
            'billCycle' => 'bill_cycle',
            'accountName' => 'account_name',
            'cloudServiceTypeName' => 'cloud_service_type_name',
            'resourceTypeName' => 'resource_type_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * couponId  |参数名称：优惠券ID| |参数约束及描述：优惠券ID，范围限制:0-64|
    * tradeDetailType  |参数名称：交易详细类型| |参数约束及描述：交易详细类型，范围限制:0-128， SOURCE_OPERAIION_DEDEUCT：消费(包年/包月) SOURCE_OPERAIION_USAGE：消费(按需) SOURCE_OPERAIION_SAVINGS_PLANS：消费(节省计划) SOURCE_OPERAIION_WRITEOFF：消费(欠费还款) SOURCE_OPERAIION_EXPIRECLEAR：过期清零 SOURCE_OPERAIION_UNSUBSCRIBE：退券(退订) SOURCE_OPERAIION_UNFROZEN：退券(流程中) SOURCE_OPERAIION_RFROZEN：退券(流程中) SOURCE_OPERAIION_PRIZE：激活 SOURCE_OPERAIION_BILLREFUND：调账(华为核销) SOURCE_OPERATION_COUPONCANCEL：优惠券回收 SOURCE_OPERATION_DEPOSIT_FROZEN：保证金冻结 SOURCE_OPERATION_DEPOSIT_UNFROZEN：保证金解冻 SOURCE_OPERATION_RETRIEVE：回收(企业回收) SOURCE_OPERATION_TRANSFER：划拨(企业划拨)|
    * tradeTime  |参数名称：交易时间| |参数约束及描述：交易时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ|
    * tradeId  |参数名称：交易ID/订单ID| |参数约束及描述：交易ID/订单ID，范围限制：0-128|
    * changeAmount  |参数名称：变更金额| |参数约束及描述：变更金额|
    * balanceAfterChange  |参数名称：变更后余额| |参数约束及描述：变更后余额|
    * revenueExpenseType  |参数名称：收支类型| |参数约束及描述：收支类型。REVENUE：收入 EXPENSE：支出|
    * billCycle  |参数名称：账期| |参数约束及描述：账期|
    * accountName  |参数名称：账号名称| |参数约束及描述：账号名称，范围限制：0-128|
    * cloudServiceTypeName  |参数名称：云服务类型名称| |参数约束及描述：产品的云服务名称，范围限制：0-200|
    * resourceTypeName  |参数名称：资源类型名称| |参数约束及描述：产品的资源类型名称，范围限制：0-200|
    *
    * @var string[]
    */
    protected static $setters = [
            'couponId' => 'setCouponId',
            'tradeDetailType' => 'setTradeDetailType',
            'tradeTime' => 'setTradeTime',
            'tradeId' => 'setTradeId',
            'changeAmount' => 'setChangeAmount',
            'balanceAfterChange' => 'setBalanceAfterChange',
            'revenueExpenseType' => 'setRevenueExpenseType',
            'billCycle' => 'setBillCycle',
            'accountName' => 'setAccountName',
            'cloudServiceTypeName' => 'setCloudServiceTypeName',
            'resourceTypeName' => 'setResourceTypeName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * couponId  |参数名称：优惠券ID| |参数约束及描述：优惠券ID，范围限制:0-64|
    * tradeDetailType  |参数名称：交易详细类型| |参数约束及描述：交易详细类型，范围限制:0-128， SOURCE_OPERAIION_DEDEUCT：消费(包年/包月) SOURCE_OPERAIION_USAGE：消费(按需) SOURCE_OPERAIION_SAVINGS_PLANS：消费(节省计划) SOURCE_OPERAIION_WRITEOFF：消费(欠费还款) SOURCE_OPERAIION_EXPIRECLEAR：过期清零 SOURCE_OPERAIION_UNSUBSCRIBE：退券(退订) SOURCE_OPERAIION_UNFROZEN：退券(流程中) SOURCE_OPERAIION_RFROZEN：退券(流程中) SOURCE_OPERAIION_PRIZE：激活 SOURCE_OPERAIION_BILLREFUND：调账(华为核销) SOURCE_OPERATION_COUPONCANCEL：优惠券回收 SOURCE_OPERATION_DEPOSIT_FROZEN：保证金冻结 SOURCE_OPERATION_DEPOSIT_UNFROZEN：保证金解冻 SOURCE_OPERATION_RETRIEVE：回收(企业回收) SOURCE_OPERATION_TRANSFER：划拨(企业划拨)|
    * tradeTime  |参数名称：交易时间| |参数约束及描述：交易时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ|
    * tradeId  |参数名称：交易ID/订单ID| |参数约束及描述：交易ID/订单ID，范围限制：0-128|
    * changeAmount  |参数名称：变更金额| |参数约束及描述：变更金额|
    * balanceAfterChange  |参数名称：变更后余额| |参数约束及描述：变更后余额|
    * revenueExpenseType  |参数名称：收支类型| |参数约束及描述：收支类型。REVENUE：收入 EXPENSE：支出|
    * billCycle  |参数名称：账期| |参数约束及描述：账期|
    * accountName  |参数名称：账号名称| |参数约束及描述：账号名称，范围限制：0-128|
    * cloudServiceTypeName  |参数名称：云服务类型名称| |参数约束及描述：产品的云服务名称，范围限制：0-200|
    * resourceTypeName  |参数名称：资源类型名称| |参数约束及描述：产品的资源类型名称，范围限制：0-200|
    *
    * @var string[]
    */
    protected static $getters = [
            'couponId' => 'getCouponId',
            'tradeDetailType' => 'getTradeDetailType',
            'tradeTime' => 'getTradeTime',
            'tradeId' => 'getTradeId',
            'changeAmount' => 'getChangeAmount',
            'balanceAfterChange' => 'getBalanceAfterChange',
            'revenueExpenseType' => 'getRevenueExpenseType',
            'billCycle' => 'getBillCycle',
            'accountName' => 'getAccountName',
            'cloudServiceTypeName' => 'getCloudServiceTypeName',
            'resourceTypeName' => 'getResourceTypeName'
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
        $this->container['couponId'] = isset($data['couponId']) ? $data['couponId'] : null;
        $this->container['tradeDetailType'] = isset($data['tradeDetailType']) ? $data['tradeDetailType'] : null;
        $this->container['tradeTime'] = isset($data['tradeTime']) ? $data['tradeTime'] : null;
        $this->container['tradeId'] = isset($data['tradeId']) ? $data['tradeId'] : null;
        $this->container['changeAmount'] = isset($data['changeAmount']) ? $data['changeAmount'] : null;
        $this->container['balanceAfterChange'] = isset($data['balanceAfterChange']) ? $data['balanceAfterChange'] : null;
        $this->container['revenueExpenseType'] = isset($data['revenueExpenseType']) ? $data['revenueExpenseType'] : null;
        $this->container['billCycle'] = isset($data['billCycle']) ? $data['billCycle'] : null;
        $this->container['accountName'] = isset($data['accountName']) ? $data['accountName'] : null;
        $this->container['cloudServiceTypeName'] = isset($data['cloudServiceTypeName']) ? $data['cloudServiceTypeName'] : null;
        $this->container['resourceTypeName'] = isset($data['resourceTypeName']) ? $data['resourceTypeName'] : null;
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
    * Gets couponId
    *  |参数名称：优惠券ID| |参数约束及描述：优惠券ID，范围限制:0-64|
    *
    * @return string|null
    */
    public function getCouponId()
    {
        return $this->container['couponId'];
    }

    /**
    * Sets couponId
    *
    * @param string|null $couponId |参数名称：优惠券ID| |参数约束及描述：优惠券ID，范围限制:0-64|
    *
    * @return $this
    */
    public function setCouponId($couponId)
    {
        $this->container['couponId'] = $couponId;
        return $this;
    }

    /**
    * Gets tradeDetailType
    *  |参数名称：交易详细类型| |参数约束及描述：交易详细类型，范围限制:0-128， SOURCE_OPERAIION_DEDEUCT：消费(包年/包月) SOURCE_OPERAIION_USAGE：消费(按需) SOURCE_OPERAIION_SAVINGS_PLANS：消费(节省计划) SOURCE_OPERAIION_WRITEOFF：消费(欠费还款) SOURCE_OPERAIION_EXPIRECLEAR：过期清零 SOURCE_OPERAIION_UNSUBSCRIBE：退券(退订) SOURCE_OPERAIION_UNFROZEN：退券(流程中) SOURCE_OPERAIION_RFROZEN：退券(流程中) SOURCE_OPERAIION_PRIZE：激活 SOURCE_OPERAIION_BILLREFUND：调账(华为核销) SOURCE_OPERATION_COUPONCANCEL：优惠券回收 SOURCE_OPERATION_DEPOSIT_FROZEN：保证金冻结 SOURCE_OPERATION_DEPOSIT_UNFROZEN：保证金解冻 SOURCE_OPERATION_RETRIEVE：回收(企业回收) SOURCE_OPERATION_TRANSFER：划拨(企业划拨)|
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
    * @param string|null $tradeDetailType |参数名称：交易详细类型| |参数约束及描述：交易详细类型，范围限制:0-128， SOURCE_OPERAIION_DEDEUCT：消费(包年/包月) SOURCE_OPERAIION_USAGE：消费(按需) SOURCE_OPERAIION_SAVINGS_PLANS：消费(节省计划) SOURCE_OPERAIION_WRITEOFF：消费(欠费还款) SOURCE_OPERAIION_EXPIRECLEAR：过期清零 SOURCE_OPERAIION_UNSUBSCRIBE：退券(退订) SOURCE_OPERAIION_UNFROZEN：退券(流程中) SOURCE_OPERAIION_RFROZEN：退券(流程中) SOURCE_OPERAIION_PRIZE：激活 SOURCE_OPERAIION_BILLREFUND：调账(华为核销) SOURCE_OPERATION_COUPONCANCEL：优惠券回收 SOURCE_OPERATION_DEPOSIT_FROZEN：保证金冻结 SOURCE_OPERATION_DEPOSIT_UNFROZEN：保证金解冻 SOURCE_OPERATION_RETRIEVE：回收(企业回收) SOURCE_OPERATION_TRANSFER：划拨(企业划拨)|
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
    *  |参数名称：交易时间| |参数约束及描述：交易时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ|
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
    * @param string|null $tradeTime |参数名称：交易时间| |参数约束及描述：交易时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ|
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
    *  |参数名称：交易ID/订单ID| |参数约束及描述：交易ID/订单ID，范围限制：0-128|
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
    * @param string|null $tradeId |参数名称：交易ID/订单ID| |参数约束及描述：交易ID/订单ID，范围限制：0-128|
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
    *  |参数名称：收支类型| |参数约束及描述：收支类型。REVENUE：收入 EXPENSE：支出|
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
    * @param string|null $revenueExpenseType |参数名称：收支类型| |参数约束及描述：收支类型。REVENUE：收入 EXPENSE：支出|
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
    * Gets accountName
    *  |参数名称：账号名称| |参数约束及描述：账号名称，范围限制：0-128|
    *
    * @return string|null
    */
    public function getAccountName()
    {
        return $this->container['accountName'];
    }

    /**
    * Sets accountName
    *
    * @param string|null $accountName |参数名称：账号名称| |参数约束及描述：账号名称，范围限制：0-128|
    *
    * @return $this
    */
    public function setAccountName($accountName)
    {
        $this->container['accountName'] = $accountName;
        return $this;
    }

    /**
    * Gets cloudServiceTypeName
    *  |参数名称：云服务类型名称| |参数约束及描述：产品的云服务名称，范围限制：0-200|
    *
    * @return string|null
    */
    public function getCloudServiceTypeName()
    {
        return $this->container['cloudServiceTypeName'];
    }

    /**
    * Sets cloudServiceTypeName
    *
    * @param string|null $cloudServiceTypeName |参数名称：云服务类型名称| |参数约束及描述：产品的云服务名称，范围限制：0-200|
    *
    * @return $this
    */
    public function setCloudServiceTypeName($cloudServiceTypeName)
    {
        $this->container['cloudServiceTypeName'] = $cloudServiceTypeName;
        return $this;
    }

    /**
    * Gets resourceTypeName
    *  |参数名称：资源类型名称| |参数约束及描述：产品的资源类型名称，范围限制：0-200|
    *
    * @return string|null
    */
    public function getResourceTypeName()
    {
        return $this->container['resourceTypeName'];
    }

    /**
    * Sets resourceTypeName
    *
    * @param string|null $resourceTypeName |参数名称：资源类型名称| |参数约束及描述：产品的资源类型名称，范围限制：0-200|
    *
    * @return $this
    */
    public function setResourceTypeName($resourceTypeName)
    {
        $this->container['resourceTypeName'] = $resourceTypeName;
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

