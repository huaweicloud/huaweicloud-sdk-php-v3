<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCustomerAccountChangeRecordsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCustomerAccountChangeRecordsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * balanceType  |参数名称：账户类型。BALANCE_TYPE_DEBIT：现金账户BALANCE_TYPE_CREDIT：信用账户| |参数的约束及描述：必填|
    * revenueExpenseType  |参数名称：收支类型。REVENUE：收入EXPENSE：支出| |参数的约束及描述：非必填|
    * tradeType  |参数名称：交易类型。RECHARGE：充值DEDEUCT：消费REFUND：退款RFROZEN：冻结TRANS：转账，余额和保证金互换（老商务模式，当前已无保证金账户）ADJUST：调账（华为核销等）BEADJUST：经销商拨款BERETRIEVE：经销商回收BEUNBIND：解绑/关联模式切换导致的回收EXPIRED：过期清零BONUSCONVERT：奖励金转换（老商务模式，当前已无奖励金账户）TRADE_MODE_TRANSFER：交易模式变更DEPOSIT：保证金| |参数的约束及描述：非必填|
    * tradeTimeBegin  |参数名称：查询收支明细的开始日期| |参数的约束及描述：非必填|
    * tradeTimeEnd  |参数名称：查询收支明细的结束日期| |参数的约束及描述：非必填|
    * tradeId  |参数名称：交易ID/订单ID| |参数的约束及描述：非必填|
    * paymentChannelId  |参数名称：交易渠道。可以一次查询多个，用逗号分隔。1：支付宝2：银行转账4：支付宝/网银5：微信支付6：提现7：激励返点10：交易模式变更11：调账317：银联（统一支付平台）319：Huawei Pay320：华为支付| |参数的约束及描述：非必填|
    * paymentChannelNo  |参数名称：交易渠道流水号| |参数的约束及描述：非必填|
    * offset  |参数名称：偏移量| |参数的约束及描述：非必填|
    * limit  |参数名称：每页的显示条数| |参数的约束及描述：非必填|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'balanceType' => 'string',
            'revenueExpenseType' => 'string',
            'tradeType' => 'string',
            'tradeTimeBegin' => 'string',
            'tradeTimeEnd' => 'string',
            'tradeId' => 'string',
            'paymentChannelId' => 'string',
            'paymentChannelNo' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * balanceType  |参数名称：账户类型。BALANCE_TYPE_DEBIT：现金账户BALANCE_TYPE_CREDIT：信用账户| |参数的约束及描述：必填|
    * revenueExpenseType  |参数名称：收支类型。REVENUE：收入EXPENSE：支出| |参数的约束及描述：非必填|
    * tradeType  |参数名称：交易类型。RECHARGE：充值DEDEUCT：消费REFUND：退款RFROZEN：冻结TRANS：转账，余额和保证金互换（老商务模式，当前已无保证金账户）ADJUST：调账（华为核销等）BEADJUST：经销商拨款BERETRIEVE：经销商回收BEUNBIND：解绑/关联模式切换导致的回收EXPIRED：过期清零BONUSCONVERT：奖励金转换（老商务模式，当前已无奖励金账户）TRADE_MODE_TRANSFER：交易模式变更DEPOSIT：保证金| |参数的约束及描述：非必填|
    * tradeTimeBegin  |参数名称：查询收支明细的开始日期| |参数的约束及描述：非必填|
    * tradeTimeEnd  |参数名称：查询收支明细的结束日期| |参数的约束及描述：非必填|
    * tradeId  |参数名称：交易ID/订单ID| |参数的约束及描述：非必填|
    * paymentChannelId  |参数名称：交易渠道。可以一次查询多个，用逗号分隔。1：支付宝2：银行转账4：支付宝/网银5：微信支付6：提现7：激励返点10：交易模式变更11：调账317：银联（统一支付平台）319：Huawei Pay320：华为支付| |参数的约束及描述：非必填|
    * paymentChannelNo  |参数名称：交易渠道流水号| |参数的约束及描述：非必填|
    * offset  |参数名称：偏移量| |参数的约束及描述：非必填|
    * limit  |参数名称：每页的显示条数| |参数的约束及描述：非必填|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'balanceType' => null,
        'revenueExpenseType' => null,
        'tradeType' => null,
        'tradeTimeBegin' => null,
        'tradeTimeEnd' => null,
        'tradeId' => null,
        'paymentChannelId' => null,
        'paymentChannelNo' => null,
        'offset' => 'int32',
        'limit' => 'int32'
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
    * balanceType  |参数名称：账户类型。BALANCE_TYPE_DEBIT：现金账户BALANCE_TYPE_CREDIT：信用账户| |参数的约束及描述：必填|
    * revenueExpenseType  |参数名称：收支类型。REVENUE：收入EXPENSE：支出| |参数的约束及描述：非必填|
    * tradeType  |参数名称：交易类型。RECHARGE：充值DEDEUCT：消费REFUND：退款RFROZEN：冻结TRANS：转账，余额和保证金互换（老商务模式，当前已无保证金账户）ADJUST：调账（华为核销等）BEADJUST：经销商拨款BERETRIEVE：经销商回收BEUNBIND：解绑/关联模式切换导致的回收EXPIRED：过期清零BONUSCONVERT：奖励金转换（老商务模式，当前已无奖励金账户）TRADE_MODE_TRANSFER：交易模式变更DEPOSIT：保证金| |参数的约束及描述：非必填|
    * tradeTimeBegin  |参数名称：查询收支明细的开始日期| |参数的约束及描述：非必填|
    * tradeTimeEnd  |参数名称：查询收支明细的结束日期| |参数的约束及描述：非必填|
    * tradeId  |参数名称：交易ID/订单ID| |参数的约束及描述：非必填|
    * paymentChannelId  |参数名称：交易渠道。可以一次查询多个，用逗号分隔。1：支付宝2：银行转账4：支付宝/网银5：微信支付6：提现7：激励返点10：交易模式变更11：调账317：银联（统一支付平台）319：Huawei Pay320：华为支付| |参数的约束及描述：非必填|
    * paymentChannelNo  |参数名称：交易渠道流水号| |参数的约束及描述：非必填|
    * offset  |参数名称：偏移量| |参数的约束及描述：非必填|
    * limit  |参数名称：每页的显示条数| |参数的约束及描述：非必填|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'balanceType' => 'balance_type',
            'revenueExpenseType' => 'revenue_expense_type',
            'tradeType' => 'trade_type',
            'tradeTimeBegin' => 'trade_time_begin',
            'tradeTimeEnd' => 'trade_time_end',
            'tradeId' => 'trade_id',
            'paymentChannelId' => 'payment_channel_id',
            'paymentChannelNo' => 'payment_channel_no',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * balanceType  |参数名称：账户类型。BALANCE_TYPE_DEBIT：现金账户BALANCE_TYPE_CREDIT：信用账户| |参数的约束及描述：必填|
    * revenueExpenseType  |参数名称：收支类型。REVENUE：收入EXPENSE：支出| |参数的约束及描述：非必填|
    * tradeType  |参数名称：交易类型。RECHARGE：充值DEDEUCT：消费REFUND：退款RFROZEN：冻结TRANS：转账，余额和保证金互换（老商务模式，当前已无保证金账户）ADJUST：调账（华为核销等）BEADJUST：经销商拨款BERETRIEVE：经销商回收BEUNBIND：解绑/关联模式切换导致的回收EXPIRED：过期清零BONUSCONVERT：奖励金转换（老商务模式，当前已无奖励金账户）TRADE_MODE_TRANSFER：交易模式变更DEPOSIT：保证金| |参数的约束及描述：非必填|
    * tradeTimeBegin  |参数名称：查询收支明细的开始日期| |参数的约束及描述：非必填|
    * tradeTimeEnd  |参数名称：查询收支明细的结束日期| |参数的约束及描述：非必填|
    * tradeId  |参数名称：交易ID/订单ID| |参数的约束及描述：非必填|
    * paymentChannelId  |参数名称：交易渠道。可以一次查询多个，用逗号分隔。1：支付宝2：银行转账4：支付宝/网银5：微信支付6：提现7：激励返点10：交易模式变更11：调账317：银联（统一支付平台）319：Huawei Pay320：华为支付| |参数的约束及描述：非必填|
    * paymentChannelNo  |参数名称：交易渠道流水号| |参数的约束及描述：非必填|
    * offset  |参数名称：偏移量| |参数的约束及描述：非必填|
    * limit  |参数名称：每页的显示条数| |参数的约束及描述：非必填|
    *
    * @var string[]
    */
    protected static $setters = [
            'balanceType' => 'setBalanceType',
            'revenueExpenseType' => 'setRevenueExpenseType',
            'tradeType' => 'setTradeType',
            'tradeTimeBegin' => 'setTradeTimeBegin',
            'tradeTimeEnd' => 'setTradeTimeEnd',
            'tradeId' => 'setTradeId',
            'paymentChannelId' => 'setPaymentChannelId',
            'paymentChannelNo' => 'setPaymentChannelNo',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * balanceType  |参数名称：账户类型。BALANCE_TYPE_DEBIT：现金账户BALANCE_TYPE_CREDIT：信用账户| |参数的约束及描述：必填|
    * revenueExpenseType  |参数名称：收支类型。REVENUE：收入EXPENSE：支出| |参数的约束及描述：非必填|
    * tradeType  |参数名称：交易类型。RECHARGE：充值DEDEUCT：消费REFUND：退款RFROZEN：冻结TRANS：转账，余额和保证金互换（老商务模式，当前已无保证金账户）ADJUST：调账（华为核销等）BEADJUST：经销商拨款BERETRIEVE：经销商回收BEUNBIND：解绑/关联模式切换导致的回收EXPIRED：过期清零BONUSCONVERT：奖励金转换（老商务模式，当前已无奖励金账户）TRADE_MODE_TRANSFER：交易模式变更DEPOSIT：保证金| |参数的约束及描述：非必填|
    * tradeTimeBegin  |参数名称：查询收支明细的开始日期| |参数的约束及描述：非必填|
    * tradeTimeEnd  |参数名称：查询收支明细的结束日期| |参数的约束及描述：非必填|
    * tradeId  |参数名称：交易ID/订单ID| |参数的约束及描述：非必填|
    * paymentChannelId  |参数名称：交易渠道。可以一次查询多个，用逗号分隔。1：支付宝2：银行转账4：支付宝/网银5：微信支付6：提现7：激励返点10：交易模式变更11：调账317：银联（统一支付平台）319：Huawei Pay320：华为支付| |参数的约束及描述：非必填|
    * paymentChannelNo  |参数名称：交易渠道流水号| |参数的约束及描述：非必填|
    * offset  |参数名称：偏移量| |参数的约束及描述：非必填|
    * limit  |参数名称：每页的显示条数| |参数的约束及描述：非必填|
    *
    * @var string[]
    */
    protected static $getters = [
            'balanceType' => 'getBalanceType',
            'revenueExpenseType' => 'getRevenueExpenseType',
            'tradeType' => 'getTradeType',
            'tradeTimeBegin' => 'getTradeTimeBegin',
            'tradeTimeEnd' => 'getTradeTimeEnd',
            'tradeId' => 'getTradeId',
            'paymentChannelId' => 'getPaymentChannelId',
            'paymentChannelNo' => 'getPaymentChannelNo',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
        $this->container['revenueExpenseType'] = isset($data['revenueExpenseType']) ? $data['revenueExpenseType'] : null;
        $this->container['tradeType'] = isset($data['tradeType']) ? $data['tradeType'] : null;
        $this->container['tradeTimeBegin'] = isset($data['tradeTimeBegin']) ? $data['tradeTimeBegin'] : null;
        $this->container['tradeTimeEnd'] = isset($data['tradeTimeEnd']) ? $data['tradeTimeEnd'] : null;
        $this->container['tradeId'] = isset($data['tradeId']) ? $data['tradeId'] : null;
        $this->container['paymentChannelId'] = isset($data['paymentChannelId']) ? $data['paymentChannelId'] : null;
        $this->container['paymentChannelNo'] = isset($data['paymentChannelNo']) ? $data['paymentChannelNo'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['balanceType'] === null) {
            $invalidProperties[] = "'balanceType' can't be null";
        }
            if (!preg_match("/BALANCE_TYPE_DEBIT|BALANCE_TYPE_CREDIT/", $this->container['balanceType'])) {
                $invalidProperties[] = "invalid value for 'balanceType', must be conform to the pattern /BALANCE_TYPE_DEBIT|BALANCE_TYPE_CREDIT/.";
            }
            if (!is_null($this->container['revenueExpenseType']) && !preg_match("/REVENUE|EXPENSE/", $this->container['revenueExpenseType'])) {
                $invalidProperties[] = "invalid value for 'revenueExpenseType', must be conform to the pattern /REVENUE|EXPENSE/.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets balanceType
    *  |参数名称：账户类型。BALANCE_TYPE_DEBIT：现金账户BALANCE_TYPE_CREDIT：信用账户| |参数的约束及描述：必填|
    *
    * @return string
    */
    public function getBalanceType()
    {
        return $this->container['balanceType'];
    }

    /**
    * Sets balanceType
    *
    * @param string $balanceType |参数名称：账户类型。BALANCE_TYPE_DEBIT：现金账户BALANCE_TYPE_CREDIT：信用账户| |参数的约束及描述：必填|
    *
    * @return $this
    */
    public function setBalanceType($balanceType)
    {
        $this->container['balanceType'] = $balanceType;
        return $this;
    }

    /**
    * Gets revenueExpenseType
    *  |参数名称：收支类型。REVENUE：收入EXPENSE：支出| |参数的约束及描述：非必填|
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
    * @param string|null $revenueExpenseType |参数名称：收支类型。REVENUE：收入EXPENSE：支出| |参数的约束及描述：非必填|
    *
    * @return $this
    */
    public function setRevenueExpenseType($revenueExpenseType)
    {
        $this->container['revenueExpenseType'] = $revenueExpenseType;
        return $this;
    }

    /**
    * Gets tradeType
    *  |参数名称：交易类型。RECHARGE：充值DEDEUCT：消费REFUND：退款RFROZEN：冻结TRANS：转账，余额和保证金互换（老商务模式，当前已无保证金账户）ADJUST：调账（华为核销等）BEADJUST：经销商拨款BERETRIEVE：经销商回收BEUNBIND：解绑/关联模式切换导致的回收EXPIRED：过期清零BONUSCONVERT：奖励金转换（老商务模式，当前已无奖励金账户）TRADE_MODE_TRANSFER：交易模式变更DEPOSIT：保证金| |参数的约束及描述：非必填|
    *
    * @return string|null
    */
    public function getTradeType()
    {
        return $this->container['tradeType'];
    }

    /**
    * Sets tradeType
    *
    * @param string|null $tradeType |参数名称：交易类型。RECHARGE：充值DEDEUCT：消费REFUND：退款RFROZEN：冻结TRANS：转账，余额和保证金互换（老商务模式，当前已无保证金账户）ADJUST：调账（华为核销等）BEADJUST：经销商拨款BERETRIEVE：经销商回收BEUNBIND：解绑/关联模式切换导致的回收EXPIRED：过期清零BONUSCONVERT：奖励金转换（老商务模式，当前已无奖励金账户）TRADE_MODE_TRANSFER：交易模式变更DEPOSIT：保证金| |参数的约束及描述：非必填|
    *
    * @return $this
    */
    public function setTradeType($tradeType)
    {
        $this->container['tradeType'] = $tradeType;
        return $this;
    }

    /**
    * Gets tradeTimeBegin
    *  |参数名称：查询收支明细的开始日期| |参数的约束及描述：非必填|
    *
    * @return string|null
    */
    public function getTradeTimeBegin()
    {
        return $this->container['tradeTimeBegin'];
    }

    /**
    * Sets tradeTimeBegin
    *
    * @param string|null $tradeTimeBegin |参数名称：查询收支明细的开始日期| |参数的约束及描述：非必填|
    *
    * @return $this
    */
    public function setTradeTimeBegin($tradeTimeBegin)
    {
        $this->container['tradeTimeBegin'] = $tradeTimeBegin;
        return $this;
    }

    /**
    * Gets tradeTimeEnd
    *  |参数名称：查询收支明细的结束日期| |参数的约束及描述：非必填|
    *
    * @return string|null
    */
    public function getTradeTimeEnd()
    {
        return $this->container['tradeTimeEnd'];
    }

    /**
    * Sets tradeTimeEnd
    *
    * @param string|null $tradeTimeEnd |参数名称：查询收支明细的结束日期| |参数的约束及描述：非必填|
    *
    * @return $this
    */
    public function setTradeTimeEnd($tradeTimeEnd)
    {
        $this->container['tradeTimeEnd'] = $tradeTimeEnd;
        return $this;
    }

    /**
    * Gets tradeId
    *  |参数名称：交易ID/订单ID| |参数的约束及描述：非必填|
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
    * @param string|null $tradeId |参数名称：交易ID/订单ID| |参数的约束及描述：非必填|
    *
    * @return $this
    */
    public function setTradeId($tradeId)
    {
        $this->container['tradeId'] = $tradeId;
        return $this;
    }

    /**
    * Gets paymentChannelId
    *  |参数名称：交易渠道。可以一次查询多个，用逗号分隔。1：支付宝2：银行转账4：支付宝/网银5：微信支付6：提现7：激励返点10：交易模式变更11：调账317：银联（统一支付平台）319：Huawei Pay320：华为支付| |参数的约束及描述：非必填|
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
    * @param string|null $paymentChannelId |参数名称：交易渠道。可以一次查询多个，用逗号分隔。1：支付宝2：银行转账4：支付宝/网银5：微信支付6：提现7：激励返点10：交易模式变更11：调账317：银联（统一支付平台）319：Huawei Pay320：华为支付| |参数的约束及描述：非必填|
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
    *  |参数名称：交易渠道流水号| |参数的约束及描述：非必填|
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
    * @param string|null $paymentChannelNo |参数名称：交易渠道流水号| |参数的约束及描述：非必填|
    *
    * @return $this
    */
    public function setPaymentChannelNo($paymentChannelNo)
    {
        $this->container['paymentChannelNo'] = $paymentChannelNo;
        return $this;
    }

    /**
    * Gets offset
    *  |参数名称：偏移量| |参数的约束及描述：非必填|
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset |参数名称：偏移量| |参数的约束及描述：非必填|
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  |参数名称：每页的显示条数| |参数的约束及描述：非必填|
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit |参数名称：每页的显示条数| |参数的约束及描述：非必填|
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

