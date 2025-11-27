<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCustomerCouponChangeRecordsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCustomerCouponChangeRecordsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * balanceType  |参数名称：账户类型| |参数的约束及描述：该参数必填，BALANCE_TYPE_COUPON：代金券账户|
    * revenueExpenseType  |参数名称：收支类型| |参数的约束及描述：该参数非必填，REVENUE：收入 EXPENSE：支出。此参数不携带时，不作为筛选条件；此参数携带值不允许为空、空串，有枚举值校验。|
    * tradeType  |参数名称：交易类型| |参数的约束及描述：该参数非必填，ADJUST：激活 DEDEUCT：消费 REFUND：退券 RFROZEN：冻结 EXPIRED：过期清零 COUPONADJUST：划拨 COUPONCANCEL：回收。此参数不携带时，不作为筛选条件；此参数携带值不允许为空、空串，有枚举值校验。|
    * tradeId  |参数名称：交易ID/订单ID| |参数的约束及描述：该参数非必填，范围限制：0-128。此参数不携带或携带值为空时，不作为筛选条件。|
    * tradeTimeBegin  |参数名称：查询收支明细的开始日期| |参数的约束及描述：该参数非必填，东八区时间，格式为YYYY-MM-DD，此参数不携带、携带值为空时，默认值为一年前的当天日期；此参数不允许携带值为空串，有参数校验。|
    * tradeTimeEnd  |参数名称：查询收支明细的结束日期| |参数的约束及描述：该参数非必填，东八区时间，格式为YYYY-MM-DD，此参数不携带、携带值为空时，默认值为当前日期；此参数不允许携带值为空串，有参数校验。|
    * couponId  |参数名称：优惠券ID。| |参数的约束及描述：该参数非必填，范围限制：0-64。此参数不携带或携带值为空时，不作为筛选条件。|
    * offset  |参数名称：偏移量| |参数的约束及描述：该参数非必填，范围限制：0-2147483647，默认值为0。此参数不携带或携带值为空时，默认传参为0。|
    * limit  |参数名称：每次查询的数量| |参数的约束及描述：该参数非必填，范围限制：1-100，默认值为10。此参数不携带或携带值为空时，默认传参为10。|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'balanceType' => 'string',
            'revenueExpenseType' => 'string',
            'tradeType' => 'string',
            'tradeId' => 'string',
            'tradeTimeBegin' => 'string',
            'tradeTimeEnd' => 'string',
            'couponId' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * balanceType  |参数名称：账户类型| |参数的约束及描述：该参数必填，BALANCE_TYPE_COUPON：代金券账户|
    * revenueExpenseType  |参数名称：收支类型| |参数的约束及描述：该参数非必填，REVENUE：收入 EXPENSE：支出。此参数不携带时，不作为筛选条件；此参数携带值不允许为空、空串，有枚举值校验。|
    * tradeType  |参数名称：交易类型| |参数的约束及描述：该参数非必填，ADJUST：激活 DEDEUCT：消费 REFUND：退券 RFROZEN：冻结 EXPIRED：过期清零 COUPONADJUST：划拨 COUPONCANCEL：回收。此参数不携带时，不作为筛选条件；此参数携带值不允许为空、空串，有枚举值校验。|
    * tradeId  |参数名称：交易ID/订单ID| |参数的约束及描述：该参数非必填，范围限制：0-128。此参数不携带或携带值为空时，不作为筛选条件。|
    * tradeTimeBegin  |参数名称：查询收支明细的开始日期| |参数的约束及描述：该参数非必填，东八区时间，格式为YYYY-MM-DD，此参数不携带、携带值为空时，默认值为一年前的当天日期；此参数不允许携带值为空串，有参数校验。|
    * tradeTimeEnd  |参数名称：查询收支明细的结束日期| |参数的约束及描述：该参数非必填，东八区时间，格式为YYYY-MM-DD，此参数不携带、携带值为空时，默认值为当前日期；此参数不允许携带值为空串，有参数校验。|
    * couponId  |参数名称：优惠券ID。| |参数的约束及描述：该参数非必填，范围限制：0-64。此参数不携带或携带值为空时，不作为筛选条件。|
    * offset  |参数名称：偏移量| |参数的约束及描述：该参数非必填，范围限制：0-2147483647，默认值为0。此参数不携带或携带值为空时，默认传参为0。|
    * limit  |参数名称：每次查询的数量| |参数的约束及描述：该参数非必填，范围限制：1-100，默认值为10。此参数不携带或携带值为空时，默认传参为10。|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'balanceType' => null,
        'revenueExpenseType' => null,
        'tradeType' => null,
        'tradeId' => null,
        'tradeTimeBegin' => null,
        'tradeTimeEnd' => null,
        'couponId' => null,
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
    * balanceType  |参数名称：账户类型| |参数的约束及描述：该参数必填，BALANCE_TYPE_COUPON：代金券账户|
    * revenueExpenseType  |参数名称：收支类型| |参数的约束及描述：该参数非必填，REVENUE：收入 EXPENSE：支出。此参数不携带时，不作为筛选条件；此参数携带值不允许为空、空串，有枚举值校验。|
    * tradeType  |参数名称：交易类型| |参数的约束及描述：该参数非必填，ADJUST：激活 DEDEUCT：消费 REFUND：退券 RFROZEN：冻结 EXPIRED：过期清零 COUPONADJUST：划拨 COUPONCANCEL：回收。此参数不携带时，不作为筛选条件；此参数携带值不允许为空、空串，有枚举值校验。|
    * tradeId  |参数名称：交易ID/订单ID| |参数的约束及描述：该参数非必填，范围限制：0-128。此参数不携带或携带值为空时，不作为筛选条件。|
    * tradeTimeBegin  |参数名称：查询收支明细的开始日期| |参数的约束及描述：该参数非必填，东八区时间，格式为YYYY-MM-DD，此参数不携带、携带值为空时，默认值为一年前的当天日期；此参数不允许携带值为空串，有参数校验。|
    * tradeTimeEnd  |参数名称：查询收支明细的结束日期| |参数的约束及描述：该参数非必填，东八区时间，格式为YYYY-MM-DD，此参数不携带、携带值为空时，默认值为当前日期；此参数不允许携带值为空串，有参数校验。|
    * couponId  |参数名称：优惠券ID。| |参数的约束及描述：该参数非必填，范围限制：0-64。此参数不携带或携带值为空时，不作为筛选条件。|
    * offset  |参数名称：偏移量| |参数的约束及描述：该参数非必填，范围限制：0-2147483647，默认值为0。此参数不携带或携带值为空时，默认传参为0。|
    * limit  |参数名称：每次查询的数量| |参数的约束及描述：该参数非必填，范围限制：1-100，默认值为10。此参数不携带或携带值为空时，默认传参为10。|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'balanceType' => 'balance_type',
            'revenueExpenseType' => 'revenue_expense_type',
            'tradeType' => 'trade_type',
            'tradeId' => 'trade_id',
            'tradeTimeBegin' => 'trade_time_begin',
            'tradeTimeEnd' => 'trade_time_end',
            'couponId' => 'coupon_id',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * balanceType  |参数名称：账户类型| |参数的约束及描述：该参数必填，BALANCE_TYPE_COUPON：代金券账户|
    * revenueExpenseType  |参数名称：收支类型| |参数的约束及描述：该参数非必填，REVENUE：收入 EXPENSE：支出。此参数不携带时，不作为筛选条件；此参数携带值不允许为空、空串，有枚举值校验。|
    * tradeType  |参数名称：交易类型| |参数的约束及描述：该参数非必填，ADJUST：激活 DEDEUCT：消费 REFUND：退券 RFROZEN：冻结 EXPIRED：过期清零 COUPONADJUST：划拨 COUPONCANCEL：回收。此参数不携带时，不作为筛选条件；此参数携带值不允许为空、空串，有枚举值校验。|
    * tradeId  |参数名称：交易ID/订单ID| |参数的约束及描述：该参数非必填，范围限制：0-128。此参数不携带或携带值为空时，不作为筛选条件。|
    * tradeTimeBegin  |参数名称：查询收支明细的开始日期| |参数的约束及描述：该参数非必填，东八区时间，格式为YYYY-MM-DD，此参数不携带、携带值为空时，默认值为一年前的当天日期；此参数不允许携带值为空串，有参数校验。|
    * tradeTimeEnd  |参数名称：查询收支明细的结束日期| |参数的约束及描述：该参数非必填，东八区时间，格式为YYYY-MM-DD，此参数不携带、携带值为空时，默认值为当前日期；此参数不允许携带值为空串，有参数校验。|
    * couponId  |参数名称：优惠券ID。| |参数的约束及描述：该参数非必填，范围限制：0-64。此参数不携带或携带值为空时，不作为筛选条件。|
    * offset  |参数名称：偏移量| |参数的约束及描述：该参数非必填，范围限制：0-2147483647，默认值为0。此参数不携带或携带值为空时，默认传参为0。|
    * limit  |参数名称：每次查询的数量| |参数的约束及描述：该参数非必填，范围限制：1-100，默认值为10。此参数不携带或携带值为空时，默认传参为10。|
    *
    * @var string[]
    */
    protected static $setters = [
            'balanceType' => 'setBalanceType',
            'revenueExpenseType' => 'setRevenueExpenseType',
            'tradeType' => 'setTradeType',
            'tradeId' => 'setTradeId',
            'tradeTimeBegin' => 'setTradeTimeBegin',
            'tradeTimeEnd' => 'setTradeTimeEnd',
            'couponId' => 'setCouponId',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * balanceType  |参数名称：账户类型| |参数的约束及描述：该参数必填，BALANCE_TYPE_COUPON：代金券账户|
    * revenueExpenseType  |参数名称：收支类型| |参数的约束及描述：该参数非必填，REVENUE：收入 EXPENSE：支出。此参数不携带时，不作为筛选条件；此参数携带值不允许为空、空串，有枚举值校验。|
    * tradeType  |参数名称：交易类型| |参数的约束及描述：该参数非必填，ADJUST：激活 DEDEUCT：消费 REFUND：退券 RFROZEN：冻结 EXPIRED：过期清零 COUPONADJUST：划拨 COUPONCANCEL：回收。此参数不携带时，不作为筛选条件；此参数携带值不允许为空、空串，有枚举值校验。|
    * tradeId  |参数名称：交易ID/订单ID| |参数的约束及描述：该参数非必填，范围限制：0-128。此参数不携带或携带值为空时，不作为筛选条件。|
    * tradeTimeBegin  |参数名称：查询收支明细的开始日期| |参数的约束及描述：该参数非必填，东八区时间，格式为YYYY-MM-DD，此参数不携带、携带值为空时，默认值为一年前的当天日期；此参数不允许携带值为空串，有参数校验。|
    * tradeTimeEnd  |参数名称：查询收支明细的结束日期| |参数的约束及描述：该参数非必填，东八区时间，格式为YYYY-MM-DD，此参数不携带、携带值为空时，默认值为当前日期；此参数不允许携带值为空串，有参数校验。|
    * couponId  |参数名称：优惠券ID。| |参数的约束及描述：该参数非必填，范围限制：0-64。此参数不携带或携带值为空时，不作为筛选条件。|
    * offset  |参数名称：偏移量| |参数的约束及描述：该参数非必填，范围限制：0-2147483647，默认值为0。此参数不携带或携带值为空时，默认传参为0。|
    * limit  |参数名称：每次查询的数量| |参数的约束及描述：该参数非必填，范围限制：1-100，默认值为10。此参数不携带或携带值为空时，默认传参为10。|
    *
    * @var string[]
    */
    protected static $getters = [
            'balanceType' => 'getBalanceType',
            'revenueExpenseType' => 'getRevenueExpenseType',
            'tradeType' => 'getTradeType',
            'tradeId' => 'getTradeId',
            'tradeTimeBegin' => 'getTradeTimeBegin',
            'tradeTimeEnd' => 'getTradeTimeEnd',
            'couponId' => 'getCouponId',
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
        $this->container['tradeId'] = isset($data['tradeId']) ? $data['tradeId'] : null;
        $this->container['tradeTimeBegin'] = isset($data['tradeTimeBegin']) ? $data['tradeTimeBegin'] : null;
        $this->container['tradeTimeEnd'] = isset($data['tradeTimeEnd']) ? $data['tradeTimeEnd'] : null;
        $this->container['couponId'] = isset($data['couponId']) ? $data['couponId'] : null;
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
            if ((mb_strlen($this->container['balanceType']) > 20)) {
                $invalidProperties[] = "invalid value for 'balanceType', the character length must be smaller than or equal to 20.";
            }
            if ((mb_strlen($this->container['balanceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'balanceType', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/BALANCE_TYPE_COUPON/", $this->container['balanceType'])) {
                $invalidProperties[] = "invalid value for 'balanceType', must be conform to the pattern /BALANCE_TYPE_COUPON/.";
            }
            if (!is_null($this->container['revenueExpenseType']) && (mb_strlen($this->container['revenueExpenseType']) > 10)) {
                $invalidProperties[] = "invalid value for 'revenueExpenseType', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['revenueExpenseType']) && (mb_strlen($this->container['revenueExpenseType']) < 1)) {
                $invalidProperties[] = "invalid value for 'revenueExpenseType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['revenueExpenseType']) && !preg_match("/REVENUE|EXPENSE/", $this->container['revenueExpenseType'])) {
                $invalidProperties[] = "invalid value for 'revenueExpenseType', must be conform to the pattern /REVENUE|EXPENSE/.";
            }
            if (!is_null($this->container['tradeType']) && (mb_strlen($this->container['tradeType']) > 20)) {
                $invalidProperties[] = "invalid value for 'tradeType', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['tradeType']) && (mb_strlen($this->container['tradeType']) < 1)) {
                $invalidProperties[] = "invalid value for 'tradeType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tradeType']) && !preg_match("/ADJUST|DEDEUCT|REFUND|RFROZEN|EXPIRED|COUPONADJUST|COUPONCANCEL/", $this->container['tradeType'])) {
                $invalidProperties[] = "invalid value for 'tradeType', must be conform to the pattern /ADJUST|DEDEUCT|REFUND|RFROZEN|EXPIRED|COUPONADJUST|COUPONCANCEL/.";
            }
            if (!is_null($this->container['tradeId']) && (mb_strlen($this->container['tradeId']) > 128)) {
                $invalidProperties[] = "invalid value for 'tradeId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['tradeId']) && (mb_strlen($this->container['tradeId']) < 0)) {
                $invalidProperties[] = "invalid value for 'tradeId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['tradeTimeBegin']) && (mb_strlen($this->container['tradeTimeBegin']) > 10)) {
                $invalidProperties[] = "invalid value for 'tradeTimeBegin', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['tradeTimeBegin']) && (mb_strlen($this->container['tradeTimeBegin']) < 0)) {
                $invalidProperties[] = "invalid value for 'tradeTimeBegin', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['tradeTimeEnd']) && (mb_strlen($this->container['tradeTimeEnd']) > 10)) {
                $invalidProperties[] = "invalid value for 'tradeTimeEnd', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['tradeTimeEnd']) && (mb_strlen($this->container['tradeTimeEnd']) < 0)) {
                $invalidProperties[] = "invalid value for 'tradeTimeEnd', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['couponId']) && (mb_strlen($this->container['couponId']) > 64)) {
                $invalidProperties[] = "invalid value for 'couponId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['couponId']) && (mb_strlen($this->container['couponId']) < 0)) {
                $invalidProperties[] = "invalid value for 'couponId', the character length must be bigger than or equal to 0.";
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
    *  |参数名称：账户类型| |参数的约束及描述：该参数必填，BALANCE_TYPE_COUPON：代金券账户|
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
    * @param string $balanceType |参数名称：账户类型| |参数的约束及描述：该参数必填，BALANCE_TYPE_COUPON：代金券账户|
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
    *  |参数名称：收支类型| |参数的约束及描述：该参数非必填，REVENUE：收入 EXPENSE：支出。此参数不携带时，不作为筛选条件；此参数携带值不允许为空、空串，有枚举值校验。|
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
    * @param string|null $revenueExpenseType |参数名称：收支类型| |参数的约束及描述：该参数非必填，REVENUE：收入 EXPENSE：支出。此参数不携带时，不作为筛选条件；此参数携带值不允许为空、空串，有枚举值校验。|
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
    *  |参数名称：交易类型| |参数的约束及描述：该参数非必填，ADJUST：激活 DEDEUCT：消费 REFUND：退券 RFROZEN：冻结 EXPIRED：过期清零 COUPONADJUST：划拨 COUPONCANCEL：回收。此参数不携带时，不作为筛选条件；此参数携带值不允许为空、空串，有枚举值校验。|
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
    * @param string|null $tradeType |参数名称：交易类型| |参数的约束及描述：该参数非必填，ADJUST：激活 DEDEUCT：消费 REFUND：退券 RFROZEN：冻结 EXPIRED：过期清零 COUPONADJUST：划拨 COUPONCANCEL：回收。此参数不携带时，不作为筛选条件；此参数携带值不允许为空、空串，有枚举值校验。|
    *
    * @return $this
    */
    public function setTradeType($tradeType)
    {
        $this->container['tradeType'] = $tradeType;
        return $this;
    }

    /**
    * Gets tradeId
    *  |参数名称：交易ID/订单ID| |参数的约束及描述：该参数非必填，范围限制：0-128。此参数不携带或携带值为空时，不作为筛选条件。|
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
    * @param string|null $tradeId |参数名称：交易ID/订单ID| |参数的约束及描述：该参数非必填，范围限制：0-128。此参数不携带或携带值为空时，不作为筛选条件。|
    *
    * @return $this
    */
    public function setTradeId($tradeId)
    {
        $this->container['tradeId'] = $tradeId;
        return $this;
    }

    /**
    * Gets tradeTimeBegin
    *  |参数名称：查询收支明细的开始日期| |参数的约束及描述：该参数非必填，东八区时间，格式为YYYY-MM-DD，此参数不携带、携带值为空时，默认值为一年前的当天日期；此参数不允许携带值为空串，有参数校验。|
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
    * @param string|null $tradeTimeBegin |参数名称：查询收支明细的开始日期| |参数的约束及描述：该参数非必填，东八区时间，格式为YYYY-MM-DD，此参数不携带、携带值为空时，默认值为一年前的当天日期；此参数不允许携带值为空串，有参数校验。|
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
    *  |参数名称：查询收支明细的结束日期| |参数的约束及描述：该参数非必填，东八区时间，格式为YYYY-MM-DD，此参数不携带、携带值为空时，默认值为当前日期；此参数不允许携带值为空串，有参数校验。|
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
    * @param string|null $tradeTimeEnd |参数名称：查询收支明细的结束日期| |参数的约束及描述：该参数非必填，东八区时间，格式为YYYY-MM-DD，此参数不携带、携带值为空时，默认值为当前日期；此参数不允许携带值为空串，有参数校验。|
    *
    * @return $this
    */
    public function setTradeTimeEnd($tradeTimeEnd)
    {
        $this->container['tradeTimeEnd'] = $tradeTimeEnd;
        return $this;
    }

    /**
    * Gets couponId
    *  |参数名称：优惠券ID。| |参数的约束及描述：该参数非必填，范围限制：0-64。此参数不携带或携带值为空时，不作为筛选条件。|
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
    * @param string|null $couponId |参数名称：优惠券ID。| |参数的约束及描述：该参数非必填，范围限制：0-64。此参数不携带或携带值为空时，不作为筛选条件。|
    *
    * @return $this
    */
    public function setCouponId($couponId)
    {
        $this->container['couponId'] = $couponId;
        return $this;
    }

    /**
    * Gets offset
    *  |参数名称：偏移量| |参数的约束及描述：该参数非必填，范围限制：0-2147483647，默认值为0。此参数不携带或携带值为空时，默认传参为0。|
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
    * @param int|null $offset |参数名称：偏移量| |参数的约束及描述：该参数非必填，范围限制：0-2147483647，默认值为0。此参数不携带或携带值为空时，默认传参为0。|
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
    *  |参数名称：每次查询的数量| |参数的约束及描述：该参数非必填，范围限制：1-100，默认值为10。此参数不携带或携带值为空时，默认传参为10。|
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
    * @param int|null $limit |参数名称：每次查询的数量| |参数的约束及描述：该参数非必填，范围限制：1-100，默认值为10。此参数不携带或携带值为空时，默认传参为10。|
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

