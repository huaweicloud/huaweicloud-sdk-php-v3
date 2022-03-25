<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AccountChangeRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AccountChangeRecord';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accountChangeId  |参数名称：收支明细流水号| |参数约束及描述：数据表主键|
    * tradeDetailType  交易详细类型。 SOURCE_OPERAIION_ADJUST_CREDIT：调账(信用额度调整)SOURCE_OPERAIION_RECHARGE：充值SOURCE_OPERAIION_DEDEUCT：消费(包年/包月)SOURCE_OPERAIION_MANUALFROZE：冻结(人工冻结)SOURCE_OPERAIION_MANUALUNFROZE：冻结(人工解冻)SOURCE_OPERAIION_MANUALCLEARFROZEN：冻结(人工清零)SOURCE_OPERAIION_TRANS_TO_BALANCE：转账(保证金转余额)SOURCE_OPERATION_BEADJUST：伙伴拨款SOURCE_OPERATION_BEUNBIND：交易模式变更(切换/解除关联回收)SOURCE_OPERAIION_EXPIRECLEAR：过期清零SOURCE_OPERAIION_ONETIME：消费(一次性扣费)SOURCE_OPERAIION_REFUND：退款SOURCE_OPERAIION_UNFROZEN：退款(退款解冻)SOURCE_OPERAIION_CLEARFROZEN：退款(退款清零)SOURCE_OPERAIION_ADJUST：调账(余额调整)SOURCE_OPERAIION_USAGE：消费(按需)SOURCE_OPERAIION_WRITEOFF：消费(欠费还款)SOURCE_OPERAIION_UNSUBSCRIBE：退款SOURCE_OPERAIION_RFROZEN：退款(退款冻结)SOURCE_OPERAIION_TRANS_TO_FOREGIFT：转账(余额转保证金)SOURCE_OPERAIION_PRIZE：调账(赠送)SOURCE_OPERATION_BERETRIEVE：伙伴回收SOURCE_OPERAIION_PRECISIONCOMP：消费(精度补扣)SOURCE_OPERAIION_FREERESDEDUCT：消费(免费资源扣减)SOURCE_OPERAIION_MERGE：奖励金转换(合并)SOURCE_OPERAIION_CONVERT_BONUS：奖励金转换SOURCE_OPERAIION_RECHARGE_REBATE：充值(激励返点)SOURCE_OPERATION_COUPONCANCEL：优惠券回收SOURCE_OPERAIION_BILLREFUND：调账(华为核销)SOURCE_OPERATION_TRADEMODE_TRANSFER：交易模式变更(和伙伴关联)SOURCE_OPERATION_SYSTEM_FROZEN：系统冻结（购买标销合同的伙伴涉及该模式）SOURCE_OPERATION_SYSTEM_UNFROZEN：系统解冻（购买标销合同的伙伴涉及该模式）SOURCE_OPERATION_COUPON_QUOTA_TRANSFER：调账(兑换现金券额度)SOURCE_OPERATIION_RIDEDUCT：消费(预留实例)SOURCE_OPERATION_COUPON_QUOTA_RECLAIM：代金券回收
    * tradeTime  交易时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2016-03-28T14:45:38Z”。
    * tradeId  交易ID/订单ID。
    * changeAmount  变更金额，单位为元。
    * balanceAfterChange  变更后余额，单位为元。
    * type  收支类型。 1：收入2：支出
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
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accountChangeId  |参数名称：收支明细流水号| |参数约束及描述：数据表主键|
    * tradeDetailType  交易详细类型。 SOURCE_OPERAIION_ADJUST_CREDIT：调账(信用额度调整)SOURCE_OPERAIION_RECHARGE：充值SOURCE_OPERAIION_DEDEUCT：消费(包年/包月)SOURCE_OPERAIION_MANUALFROZE：冻结(人工冻结)SOURCE_OPERAIION_MANUALUNFROZE：冻结(人工解冻)SOURCE_OPERAIION_MANUALCLEARFROZEN：冻结(人工清零)SOURCE_OPERAIION_TRANS_TO_BALANCE：转账(保证金转余额)SOURCE_OPERATION_BEADJUST：伙伴拨款SOURCE_OPERATION_BEUNBIND：交易模式变更(切换/解除关联回收)SOURCE_OPERAIION_EXPIRECLEAR：过期清零SOURCE_OPERAIION_ONETIME：消费(一次性扣费)SOURCE_OPERAIION_REFUND：退款SOURCE_OPERAIION_UNFROZEN：退款(退款解冻)SOURCE_OPERAIION_CLEARFROZEN：退款(退款清零)SOURCE_OPERAIION_ADJUST：调账(余额调整)SOURCE_OPERAIION_USAGE：消费(按需)SOURCE_OPERAIION_WRITEOFF：消费(欠费还款)SOURCE_OPERAIION_UNSUBSCRIBE：退款SOURCE_OPERAIION_RFROZEN：退款(退款冻结)SOURCE_OPERAIION_TRANS_TO_FOREGIFT：转账(余额转保证金)SOURCE_OPERAIION_PRIZE：调账(赠送)SOURCE_OPERATION_BERETRIEVE：伙伴回收SOURCE_OPERAIION_PRECISIONCOMP：消费(精度补扣)SOURCE_OPERAIION_FREERESDEDUCT：消费(免费资源扣减)SOURCE_OPERAIION_MERGE：奖励金转换(合并)SOURCE_OPERAIION_CONVERT_BONUS：奖励金转换SOURCE_OPERAIION_RECHARGE_REBATE：充值(激励返点)SOURCE_OPERATION_COUPONCANCEL：优惠券回收SOURCE_OPERAIION_BILLREFUND：调账(华为核销)SOURCE_OPERATION_TRADEMODE_TRANSFER：交易模式变更(和伙伴关联)SOURCE_OPERATION_SYSTEM_FROZEN：系统冻结（购买标销合同的伙伴涉及该模式）SOURCE_OPERATION_SYSTEM_UNFROZEN：系统解冻（购买标销合同的伙伴涉及该模式）SOURCE_OPERATION_COUPON_QUOTA_TRANSFER：调账(兑换现金券额度)SOURCE_OPERATIION_RIDEDUCT：消费(预留实例)SOURCE_OPERATION_COUPON_QUOTA_RECLAIM：代金券回收
    * tradeTime  交易时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2016-03-28T14:45:38Z”。
    * tradeId  交易ID/订单ID。
    * changeAmount  变更金额，单位为元。
    * balanceAfterChange  变更后余额，单位为元。
    * type  收支类型。 1：收入2：支出
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
        'type' => null
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
    * accountChangeId  |参数名称：收支明细流水号| |参数约束及描述：数据表主键|
    * tradeDetailType  交易详细类型。 SOURCE_OPERAIION_ADJUST_CREDIT：调账(信用额度调整)SOURCE_OPERAIION_RECHARGE：充值SOURCE_OPERAIION_DEDEUCT：消费(包年/包月)SOURCE_OPERAIION_MANUALFROZE：冻结(人工冻结)SOURCE_OPERAIION_MANUALUNFROZE：冻结(人工解冻)SOURCE_OPERAIION_MANUALCLEARFROZEN：冻结(人工清零)SOURCE_OPERAIION_TRANS_TO_BALANCE：转账(保证金转余额)SOURCE_OPERATION_BEADJUST：伙伴拨款SOURCE_OPERATION_BEUNBIND：交易模式变更(切换/解除关联回收)SOURCE_OPERAIION_EXPIRECLEAR：过期清零SOURCE_OPERAIION_ONETIME：消费(一次性扣费)SOURCE_OPERAIION_REFUND：退款SOURCE_OPERAIION_UNFROZEN：退款(退款解冻)SOURCE_OPERAIION_CLEARFROZEN：退款(退款清零)SOURCE_OPERAIION_ADJUST：调账(余额调整)SOURCE_OPERAIION_USAGE：消费(按需)SOURCE_OPERAIION_WRITEOFF：消费(欠费还款)SOURCE_OPERAIION_UNSUBSCRIBE：退款SOURCE_OPERAIION_RFROZEN：退款(退款冻结)SOURCE_OPERAIION_TRANS_TO_FOREGIFT：转账(余额转保证金)SOURCE_OPERAIION_PRIZE：调账(赠送)SOURCE_OPERATION_BERETRIEVE：伙伴回收SOURCE_OPERAIION_PRECISIONCOMP：消费(精度补扣)SOURCE_OPERAIION_FREERESDEDUCT：消费(免费资源扣减)SOURCE_OPERAIION_MERGE：奖励金转换(合并)SOURCE_OPERAIION_CONVERT_BONUS：奖励金转换SOURCE_OPERAIION_RECHARGE_REBATE：充值(激励返点)SOURCE_OPERATION_COUPONCANCEL：优惠券回收SOURCE_OPERAIION_BILLREFUND：调账(华为核销)SOURCE_OPERATION_TRADEMODE_TRANSFER：交易模式变更(和伙伴关联)SOURCE_OPERATION_SYSTEM_FROZEN：系统冻结（购买标销合同的伙伴涉及该模式）SOURCE_OPERATION_SYSTEM_UNFROZEN：系统解冻（购买标销合同的伙伴涉及该模式）SOURCE_OPERATION_COUPON_QUOTA_TRANSFER：调账(兑换现金券额度)SOURCE_OPERATIION_RIDEDUCT：消费(预留实例)SOURCE_OPERATION_COUPON_QUOTA_RECLAIM：代金券回收
    * tradeTime  交易时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2016-03-28T14:45:38Z”。
    * tradeId  交易ID/订单ID。
    * changeAmount  变更金额，单位为元。
    * balanceAfterChange  变更后余额，单位为元。
    * type  收支类型。 1：收入2：支出
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
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accountChangeId  |参数名称：收支明细流水号| |参数约束及描述：数据表主键|
    * tradeDetailType  交易详细类型。 SOURCE_OPERAIION_ADJUST_CREDIT：调账(信用额度调整)SOURCE_OPERAIION_RECHARGE：充值SOURCE_OPERAIION_DEDEUCT：消费(包年/包月)SOURCE_OPERAIION_MANUALFROZE：冻结(人工冻结)SOURCE_OPERAIION_MANUALUNFROZE：冻结(人工解冻)SOURCE_OPERAIION_MANUALCLEARFROZEN：冻结(人工清零)SOURCE_OPERAIION_TRANS_TO_BALANCE：转账(保证金转余额)SOURCE_OPERATION_BEADJUST：伙伴拨款SOURCE_OPERATION_BEUNBIND：交易模式变更(切换/解除关联回收)SOURCE_OPERAIION_EXPIRECLEAR：过期清零SOURCE_OPERAIION_ONETIME：消费(一次性扣费)SOURCE_OPERAIION_REFUND：退款SOURCE_OPERAIION_UNFROZEN：退款(退款解冻)SOURCE_OPERAIION_CLEARFROZEN：退款(退款清零)SOURCE_OPERAIION_ADJUST：调账(余额调整)SOURCE_OPERAIION_USAGE：消费(按需)SOURCE_OPERAIION_WRITEOFF：消费(欠费还款)SOURCE_OPERAIION_UNSUBSCRIBE：退款SOURCE_OPERAIION_RFROZEN：退款(退款冻结)SOURCE_OPERAIION_TRANS_TO_FOREGIFT：转账(余额转保证金)SOURCE_OPERAIION_PRIZE：调账(赠送)SOURCE_OPERATION_BERETRIEVE：伙伴回收SOURCE_OPERAIION_PRECISIONCOMP：消费(精度补扣)SOURCE_OPERAIION_FREERESDEDUCT：消费(免费资源扣减)SOURCE_OPERAIION_MERGE：奖励金转换(合并)SOURCE_OPERAIION_CONVERT_BONUS：奖励金转换SOURCE_OPERAIION_RECHARGE_REBATE：充值(激励返点)SOURCE_OPERATION_COUPONCANCEL：优惠券回收SOURCE_OPERAIION_BILLREFUND：调账(华为核销)SOURCE_OPERATION_TRADEMODE_TRANSFER：交易模式变更(和伙伴关联)SOURCE_OPERATION_SYSTEM_FROZEN：系统冻结（购买标销合同的伙伴涉及该模式）SOURCE_OPERATION_SYSTEM_UNFROZEN：系统解冻（购买标销合同的伙伴涉及该模式）SOURCE_OPERATION_COUPON_QUOTA_TRANSFER：调账(兑换现金券额度)SOURCE_OPERATIION_RIDEDUCT：消费(预留实例)SOURCE_OPERATION_COUPON_QUOTA_RECLAIM：代金券回收
    * tradeTime  交易时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2016-03-28T14:45:38Z”。
    * tradeId  交易ID/订单ID。
    * changeAmount  变更金额，单位为元。
    * balanceAfterChange  变更后余额，单位为元。
    * type  收支类型。 1：收入2：支出
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
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accountChangeId  |参数名称：收支明细流水号| |参数约束及描述：数据表主键|
    * tradeDetailType  交易详细类型。 SOURCE_OPERAIION_ADJUST_CREDIT：调账(信用额度调整)SOURCE_OPERAIION_RECHARGE：充值SOURCE_OPERAIION_DEDEUCT：消费(包年/包月)SOURCE_OPERAIION_MANUALFROZE：冻结(人工冻结)SOURCE_OPERAIION_MANUALUNFROZE：冻结(人工解冻)SOURCE_OPERAIION_MANUALCLEARFROZEN：冻结(人工清零)SOURCE_OPERAIION_TRANS_TO_BALANCE：转账(保证金转余额)SOURCE_OPERATION_BEADJUST：伙伴拨款SOURCE_OPERATION_BEUNBIND：交易模式变更(切换/解除关联回收)SOURCE_OPERAIION_EXPIRECLEAR：过期清零SOURCE_OPERAIION_ONETIME：消费(一次性扣费)SOURCE_OPERAIION_REFUND：退款SOURCE_OPERAIION_UNFROZEN：退款(退款解冻)SOURCE_OPERAIION_CLEARFROZEN：退款(退款清零)SOURCE_OPERAIION_ADJUST：调账(余额调整)SOURCE_OPERAIION_USAGE：消费(按需)SOURCE_OPERAIION_WRITEOFF：消费(欠费还款)SOURCE_OPERAIION_UNSUBSCRIBE：退款SOURCE_OPERAIION_RFROZEN：退款(退款冻结)SOURCE_OPERAIION_TRANS_TO_FOREGIFT：转账(余额转保证金)SOURCE_OPERAIION_PRIZE：调账(赠送)SOURCE_OPERATION_BERETRIEVE：伙伴回收SOURCE_OPERAIION_PRECISIONCOMP：消费(精度补扣)SOURCE_OPERAIION_FREERESDEDUCT：消费(免费资源扣减)SOURCE_OPERAIION_MERGE：奖励金转换(合并)SOURCE_OPERAIION_CONVERT_BONUS：奖励金转换SOURCE_OPERAIION_RECHARGE_REBATE：充值(激励返点)SOURCE_OPERATION_COUPONCANCEL：优惠券回收SOURCE_OPERAIION_BILLREFUND：调账(华为核销)SOURCE_OPERATION_TRADEMODE_TRANSFER：交易模式变更(和伙伴关联)SOURCE_OPERATION_SYSTEM_FROZEN：系统冻结（购买标销合同的伙伴涉及该模式）SOURCE_OPERATION_SYSTEM_UNFROZEN：系统解冻（购买标销合同的伙伴涉及该模式）SOURCE_OPERATION_COUPON_QUOTA_TRANSFER：调账(兑换现金券额度)SOURCE_OPERATIION_RIDEDUCT：消费(预留实例)SOURCE_OPERATION_COUPON_QUOTA_RECLAIM：代金券回收
    * tradeTime  交易时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2016-03-28T14:45:38Z”。
    * tradeId  交易ID/订单ID。
    * changeAmount  变更金额，单位为元。
    * balanceAfterChange  变更后余额，单位为元。
    * type  收支类型。 1：收入2：支出
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
            'type' => 'getType'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
    *  |参数名称：收支明细流水号| |参数约束及描述：数据表主键|
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
    * @param string|null $accountChangeId |参数名称：收支明细流水号| |参数约束及描述：数据表主键|
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
    *  交易详细类型。 SOURCE_OPERAIION_ADJUST_CREDIT：调账(信用额度调整)SOURCE_OPERAIION_RECHARGE：充值SOURCE_OPERAIION_DEDEUCT：消费(包年/包月)SOURCE_OPERAIION_MANUALFROZE：冻结(人工冻结)SOURCE_OPERAIION_MANUALUNFROZE：冻结(人工解冻)SOURCE_OPERAIION_MANUALCLEARFROZEN：冻结(人工清零)SOURCE_OPERAIION_TRANS_TO_BALANCE：转账(保证金转余额)SOURCE_OPERATION_BEADJUST：伙伴拨款SOURCE_OPERATION_BEUNBIND：交易模式变更(切换/解除关联回收)SOURCE_OPERAIION_EXPIRECLEAR：过期清零SOURCE_OPERAIION_ONETIME：消费(一次性扣费)SOURCE_OPERAIION_REFUND：退款SOURCE_OPERAIION_UNFROZEN：退款(退款解冻)SOURCE_OPERAIION_CLEARFROZEN：退款(退款清零)SOURCE_OPERAIION_ADJUST：调账(余额调整)SOURCE_OPERAIION_USAGE：消费(按需)SOURCE_OPERAIION_WRITEOFF：消费(欠费还款)SOURCE_OPERAIION_UNSUBSCRIBE：退款SOURCE_OPERAIION_RFROZEN：退款(退款冻结)SOURCE_OPERAIION_TRANS_TO_FOREGIFT：转账(余额转保证金)SOURCE_OPERAIION_PRIZE：调账(赠送)SOURCE_OPERATION_BERETRIEVE：伙伴回收SOURCE_OPERAIION_PRECISIONCOMP：消费(精度补扣)SOURCE_OPERAIION_FREERESDEDUCT：消费(免费资源扣减)SOURCE_OPERAIION_MERGE：奖励金转换(合并)SOURCE_OPERAIION_CONVERT_BONUS：奖励金转换SOURCE_OPERAIION_RECHARGE_REBATE：充值(激励返点)SOURCE_OPERATION_COUPONCANCEL：优惠券回收SOURCE_OPERAIION_BILLREFUND：调账(华为核销)SOURCE_OPERATION_TRADEMODE_TRANSFER：交易模式变更(和伙伴关联)SOURCE_OPERATION_SYSTEM_FROZEN：系统冻结（购买标销合同的伙伴涉及该模式）SOURCE_OPERATION_SYSTEM_UNFROZEN：系统解冻（购买标销合同的伙伴涉及该模式）SOURCE_OPERATION_COUPON_QUOTA_TRANSFER：调账(兑换现金券额度)SOURCE_OPERATIION_RIDEDUCT：消费(预留实例)SOURCE_OPERATION_COUPON_QUOTA_RECLAIM：代金券回收
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
    * @param string|null $tradeDetailType 交易详细类型。 SOURCE_OPERAIION_ADJUST_CREDIT：调账(信用额度调整)SOURCE_OPERAIION_RECHARGE：充值SOURCE_OPERAIION_DEDEUCT：消费(包年/包月)SOURCE_OPERAIION_MANUALFROZE：冻结(人工冻结)SOURCE_OPERAIION_MANUALUNFROZE：冻结(人工解冻)SOURCE_OPERAIION_MANUALCLEARFROZEN：冻结(人工清零)SOURCE_OPERAIION_TRANS_TO_BALANCE：转账(保证金转余额)SOURCE_OPERATION_BEADJUST：伙伴拨款SOURCE_OPERATION_BEUNBIND：交易模式变更(切换/解除关联回收)SOURCE_OPERAIION_EXPIRECLEAR：过期清零SOURCE_OPERAIION_ONETIME：消费(一次性扣费)SOURCE_OPERAIION_REFUND：退款SOURCE_OPERAIION_UNFROZEN：退款(退款解冻)SOURCE_OPERAIION_CLEARFROZEN：退款(退款清零)SOURCE_OPERAIION_ADJUST：调账(余额调整)SOURCE_OPERAIION_USAGE：消费(按需)SOURCE_OPERAIION_WRITEOFF：消费(欠费还款)SOURCE_OPERAIION_UNSUBSCRIBE：退款SOURCE_OPERAIION_RFROZEN：退款(退款冻结)SOURCE_OPERAIION_TRANS_TO_FOREGIFT：转账(余额转保证金)SOURCE_OPERAIION_PRIZE：调账(赠送)SOURCE_OPERATION_BERETRIEVE：伙伴回收SOURCE_OPERAIION_PRECISIONCOMP：消费(精度补扣)SOURCE_OPERAIION_FREERESDEDUCT：消费(免费资源扣减)SOURCE_OPERAIION_MERGE：奖励金转换(合并)SOURCE_OPERAIION_CONVERT_BONUS：奖励金转换SOURCE_OPERAIION_RECHARGE_REBATE：充值(激励返点)SOURCE_OPERATION_COUPONCANCEL：优惠券回收SOURCE_OPERAIION_BILLREFUND：调账(华为核销)SOURCE_OPERATION_TRADEMODE_TRANSFER：交易模式变更(和伙伴关联)SOURCE_OPERATION_SYSTEM_FROZEN：系统冻结（购买标销合同的伙伴涉及该模式）SOURCE_OPERATION_SYSTEM_UNFROZEN：系统解冻（购买标销合同的伙伴涉及该模式）SOURCE_OPERATION_COUPON_QUOTA_TRANSFER：调账(兑换现金券额度)SOURCE_OPERATIION_RIDEDUCT：消费(预留实例)SOURCE_OPERATION_COUPON_QUOTA_RECLAIM：代金券回收
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
    *  交易时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2016-03-28T14:45:38Z”。
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
    * @param string|null $tradeTime 交易时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2016-03-28T14:45:38Z”。
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
    *  交易ID/订单ID。
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
    * @param string|null $tradeId 交易ID/订单ID。
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
    *  变更金额，单位为元。
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
    * @param string|null $changeAmount 变更金额，单位为元。
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
    *  变更后余额，单位为元。
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
    * @param string|null $balanceAfterChange 变更后余额，单位为元。
    *
    * @return $this
    */
    public function setBalanceAfterChange($balanceAfterChange)
    {
        $this->container['balanceAfterChange'] = $balanceAfterChange;
        return $this;
    }

    /**
    * Gets type
    *  收支类型。 1：收入2：支出
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 收支类型。 1：收入2：支出
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

