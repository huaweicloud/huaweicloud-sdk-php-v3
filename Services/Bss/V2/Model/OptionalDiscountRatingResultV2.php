<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OptionalDiscountRatingResultV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OptionalDiscountRatingResultV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * discountId  |参数名称：折扣优惠ID| |参数约束及描述：折扣优惠ID|
    * amount  |参数名称：总额，即最终优惠后的金额。单位为元。amount= official_website_amount - discount_amount| |参数约束及描述：总额，即最终优惠后的金额。单位为元。amount= official_website_amount - discount_amount|
    * officialWebsiteAmount  |参数名称：官网价。单位为元| |参数约束及描述：官网价。单位为元|
    * discountAmount  |参数名称：可选折扣优惠额，如商务折扣、伙伴折扣、促销折扣和折扣券选用时的优惠额。单位为| |参数约束及描述：可选折扣优惠额，如商务折扣、伙伴折扣、促销折扣和折扣券选用时的优惠额。单位为|
    * discountType  |参数名称：折扣优惠类型| |参数约束及描述：折扣优惠类型。商务授权折扣：605(华为云BE场景下的合同商务折扣)、伙伴授予折扣：606(分销商BE场景下的合同商务折扣)、伙伴设置折扣：607(合作伙伴设置折扣-折扣率)|
    * discountName  |参数名称：折扣名称| |参数约束及描述：折扣名称|
    * bestOffer  |参数名称：是否为最优折扣。0：不是最优折扣，为缺省值。1：是最优折扣最优折扣：在商务折扣、伙伴折扣中选择（优惠金额最大的折扣为最优，优惠金额相等则按此顺序排优先级），促销折扣，折扣券不参与最优折扣的计算| |参数的约束及描述：是否为最优折扣。0：不是最优折扣，为缺省值。1：是最优折扣最优折扣：在商务折扣、伙伴折扣中选择（优惠金额最大的折扣为最优，优惠金额相等则按此顺序排优先级），促销折扣，折扣券不参与最优折扣的计算|
    * installmentOfficialWebsiteAmount  |参数名称：分期金额的官网价。单位为元| |参数约束及描述：分期金额的官网价。单位为元|
    * installmentOfficialDiscountAmount  |参数名称：分期金额的折扣价。单位为元| |参数约束及描述：分期金额的折扣价。单位为元|
    * installmentAmount  |参数名称：分期金额的成交价。单位为元| |参数约束及描述：分期金额的成交价。单位为元|
    * installmentPeriodType  |参数名称：分期付款的周期类型。2：月| |参数的约束及描述：分期付款的周期类型。2：月|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'discountId' => 'string',
            'amount' => 'string',
            'officialWebsiteAmount' => 'string',
            'discountAmount' => 'string',
            'discountType' => 'int',
            'discountName' => 'string',
            'bestOffer' => 'int',
            'installmentOfficialWebsiteAmount' => 'string',
            'installmentOfficialDiscountAmount' => 'string',
            'installmentAmount' => 'string',
            'installmentPeriodType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * discountId  |参数名称：折扣优惠ID| |参数约束及描述：折扣优惠ID|
    * amount  |参数名称：总额，即最终优惠后的金额。单位为元。amount= official_website_amount - discount_amount| |参数约束及描述：总额，即最终优惠后的金额。单位为元。amount= official_website_amount - discount_amount|
    * officialWebsiteAmount  |参数名称：官网价。单位为元| |参数约束及描述：官网价。单位为元|
    * discountAmount  |参数名称：可选折扣优惠额，如商务折扣、伙伴折扣、促销折扣和折扣券选用时的优惠额。单位为| |参数约束及描述：可选折扣优惠额，如商务折扣、伙伴折扣、促销折扣和折扣券选用时的优惠额。单位为|
    * discountType  |参数名称：折扣优惠类型| |参数约束及描述：折扣优惠类型。商务授权折扣：605(华为云BE场景下的合同商务折扣)、伙伴授予折扣：606(分销商BE场景下的合同商务折扣)、伙伴设置折扣：607(合作伙伴设置折扣-折扣率)|
    * discountName  |参数名称：折扣名称| |参数约束及描述：折扣名称|
    * bestOffer  |参数名称：是否为最优折扣。0：不是最优折扣，为缺省值。1：是最优折扣最优折扣：在商务折扣、伙伴折扣中选择（优惠金额最大的折扣为最优，优惠金额相等则按此顺序排优先级），促销折扣，折扣券不参与最优折扣的计算| |参数的约束及描述：是否为最优折扣。0：不是最优折扣，为缺省值。1：是最优折扣最优折扣：在商务折扣、伙伴折扣中选择（优惠金额最大的折扣为最优，优惠金额相等则按此顺序排优先级），促销折扣，折扣券不参与最优折扣的计算|
    * installmentOfficialWebsiteAmount  |参数名称：分期金额的官网价。单位为元| |参数约束及描述：分期金额的官网价。单位为元|
    * installmentOfficialDiscountAmount  |参数名称：分期金额的折扣价。单位为元| |参数约束及描述：分期金额的折扣价。单位为元|
    * installmentAmount  |参数名称：分期金额的成交价。单位为元| |参数约束及描述：分期金额的成交价。单位为元|
    * installmentPeriodType  |参数名称：分期付款的周期类型。2：月| |参数的约束及描述：分期付款的周期类型。2：月|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'discountId' => null,
        'amount' => null,
        'officialWebsiteAmount' => null,
        'discountAmount' => null,
        'discountType' => 'int32',
        'discountName' => null,
        'bestOffer' => 'int32',
        'installmentOfficialWebsiteAmount' => null,
        'installmentOfficialDiscountAmount' => null,
        'installmentAmount' => null,
        'installmentPeriodType' => 'int32'
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
    * discountId  |参数名称：折扣优惠ID| |参数约束及描述：折扣优惠ID|
    * amount  |参数名称：总额，即最终优惠后的金额。单位为元。amount= official_website_amount - discount_amount| |参数约束及描述：总额，即最终优惠后的金额。单位为元。amount= official_website_amount - discount_amount|
    * officialWebsiteAmount  |参数名称：官网价。单位为元| |参数约束及描述：官网价。单位为元|
    * discountAmount  |参数名称：可选折扣优惠额，如商务折扣、伙伴折扣、促销折扣和折扣券选用时的优惠额。单位为| |参数约束及描述：可选折扣优惠额，如商务折扣、伙伴折扣、促销折扣和折扣券选用时的优惠额。单位为|
    * discountType  |参数名称：折扣优惠类型| |参数约束及描述：折扣优惠类型。商务授权折扣：605(华为云BE场景下的合同商务折扣)、伙伴授予折扣：606(分销商BE场景下的合同商务折扣)、伙伴设置折扣：607(合作伙伴设置折扣-折扣率)|
    * discountName  |参数名称：折扣名称| |参数约束及描述：折扣名称|
    * bestOffer  |参数名称：是否为最优折扣。0：不是最优折扣，为缺省值。1：是最优折扣最优折扣：在商务折扣、伙伴折扣中选择（优惠金额最大的折扣为最优，优惠金额相等则按此顺序排优先级），促销折扣，折扣券不参与最优折扣的计算| |参数的约束及描述：是否为最优折扣。0：不是最优折扣，为缺省值。1：是最优折扣最优折扣：在商务折扣、伙伴折扣中选择（优惠金额最大的折扣为最优，优惠金额相等则按此顺序排优先级），促销折扣，折扣券不参与最优折扣的计算|
    * installmentOfficialWebsiteAmount  |参数名称：分期金额的官网价。单位为元| |参数约束及描述：分期金额的官网价。单位为元|
    * installmentOfficialDiscountAmount  |参数名称：分期金额的折扣价。单位为元| |参数约束及描述：分期金额的折扣价。单位为元|
    * installmentAmount  |参数名称：分期金额的成交价。单位为元| |参数约束及描述：分期金额的成交价。单位为元|
    * installmentPeriodType  |参数名称：分期付款的周期类型。2：月| |参数的约束及描述：分期付款的周期类型。2：月|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'discountId' => 'discount_id',
            'amount' => 'amount',
            'officialWebsiteAmount' => 'official_website_amount',
            'discountAmount' => 'discount_amount',
            'discountType' => 'discount_type',
            'discountName' => 'discount_name',
            'bestOffer' => 'best_offer',
            'installmentOfficialWebsiteAmount' => 'installment_official_website_amount',
            'installmentOfficialDiscountAmount' => 'installment_official_discount_amount',
            'installmentAmount' => 'installment_amount',
            'installmentPeriodType' => 'installment_period_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * discountId  |参数名称：折扣优惠ID| |参数约束及描述：折扣优惠ID|
    * amount  |参数名称：总额，即最终优惠后的金额。单位为元。amount= official_website_amount - discount_amount| |参数约束及描述：总额，即最终优惠后的金额。单位为元。amount= official_website_amount - discount_amount|
    * officialWebsiteAmount  |参数名称：官网价。单位为元| |参数约束及描述：官网价。单位为元|
    * discountAmount  |参数名称：可选折扣优惠额，如商务折扣、伙伴折扣、促销折扣和折扣券选用时的优惠额。单位为| |参数约束及描述：可选折扣优惠额，如商务折扣、伙伴折扣、促销折扣和折扣券选用时的优惠额。单位为|
    * discountType  |参数名称：折扣优惠类型| |参数约束及描述：折扣优惠类型。商务授权折扣：605(华为云BE场景下的合同商务折扣)、伙伴授予折扣：606(分销商BE场景下的合同商务折扣)、伙伴设置折扣：607(合作伙伴设置折扣-折扣率)|
    * discountName  |参数名称：折扣名称| |参数约束及描述：折扣名称|
    * bestOffer  |参数名称：是否为最优折扣。0：不是最优折扣，为缺省值。1：是最优折扣最优折扣：在商务折扣、伙伴折扣中选择（优惠金额最大的折扣为最优，优惠金额相等则按此顺序排优先级），促销折扣，折扣券不参与最优折扣的计算| |参数的约束及描述：是否为最优折扣。0：不是最优折扣，为缺省值。1：是最优折扣最优折扣：在商务折扣、伙伴折扣中选择（优惠金额最大的折扣为最优，优惠金额相等则按此顺序排优先级），促销折扣，折扣券不参与最优折扣的计算|
    * installmentOfficialWebsiteAmount  |参数名称：分期金额的官网价。单位为元| |参数约束及描述：分期金额的官网价。单位为元|
    * installmentOfficialDiscountAmount  |参数名称：分期金额的折扣价。单位为元| |参数约束及描述：分期金额的折扣价。单位为元|
    * installmentAmount  |参数名称：分期金额的成交价。单位为元| |参数约束及描述：分期金额的成交价。单位为元|
    * installmentPeriodType  |参数名称：分期付款的周期类型。2：月| |参数的约束及描述：分期付款的周期类型。2：月|
    *
    * @var string[]
    */
    protected static $setters = [
            'discountId' => 'setDiscountId',
            'amount' => 'setAmount',
            'officialWebsiteAmount' => 'setOfficialWebsiteAmount',
            'discountAmount' => 'setDiscountAmount',
            'discountType' => 'setDiscountType',
            'discountName' => 'setDiscountName',
            'bestOffer' => 'setBestOffer',
            'installmentOfficialWebsiteAmount' => 'setInstallmentOfficialWebsiteAmount',
            'installmentOfficialDiscountAmount' => 'setInstallmentOfficialDiscountAmount',
            'installmentAmount' => 'setInstallmentAmount',
            'installmentPeriodType' => 'setInstallmentPeriodType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * discountId  |参数名称：折扣优惠ID| |参数约束及描述：折扣优惠ID|
    * amount  |参数名称：总额，即最终优惠后的金额。单位为元。amount= official_website_amount - discount_amount| |参数约束及描述：总额，即最终优惠后的金额。单位为元。amount= official_website_amount - discount_amount|
    * officialWebsiteAmount  |参数名称：官网价。单位为元| |参数约束及描述：官网价。单位为元|
    * discountAmount  |参数名称：可选折扣优惠额，如商务折扣、伙伴折扣、促销折扣和折扣券选用时的优惠额。单位为| |参数约束及描述：可选折扣优惠额，如商务折扣、伙伴折扣、促销折扣和折扣券选用时的优惠额。单位为|
    * discountType  |参数名称：折扣优惠类型| |参数约束及描述：折扣优惠类型。商务授权折扣：605(华为云BE场景下的合同商务折扣)、伙伴授予折扣：606(分销商BE场景下的合同商务折扣)、伙伴设置折扣：607(合作伙伴设置折扣-折扣率)|
    * discountName  |参数名称：折扣名称| |参数约束及描述：折扣名称|
    * bestOffer  |参数名称：是否为最优折扣。0：不是最优折扣，为缺省值。1：是最优折扣最优折扣：在商务折扣、伙伴折扣中选择（优惠金额最大的折扣为最优，优惠金额相等则按此顺序排优先级），促销折扣，折扣券不参与最优折扣的计算| |参数的约束及描述：是否为最优折扣。0：不是最优折扣，为缺省值。1：是最优折扣最优折扣：在商务折扣、伙伴折扣中选择（优惠金额最大的折扣为最优，优惠金额相等则按此顺序排优先级），促销折扣，折扣券不参与最优折扣的计算|
    * installmentOfficialWebsiteAmount  |参数名称：分期金额的官网价。单位为元| |参数约束及描述：分期金额的官网价。单位为元|
    * installmentOfficialDiscountAmount  |参数名称：分期金额的折扣价。单位为元| |参数约束及描述：分期金额的折扣价。单位为元|
    * installmentAmount  |参数名称：分期金额的成交价。单位为元| |参数约束及描述：分期金额的成交价。单位为元|
    * installmentPeriodType  |参数名称：分期付款的周期类型。2：月| |参数的约束及描述：分期付款的周期类型。2：月|
    *
    * @var string[]
    */
    protected static $getters = [
            'discountId' => 'getDiscountId',
            'amount' => 'getAmount',
            'officialWebsiteAmount' => 'getOfficialWebsiteAmount',
            'discountAmount' => 'getDiscountAmount',
            'discountType' => 'getDiscountType',
            'discountName' => 'getDiscountName',
            'bestOffer' => 'getBestOffer',
            'installmentOfficialWebsiteAmount' => 'getInstallmentOfficialWebsiteAmount',
            'installmentOfficialDiscountAmount' => 'getInstallmentOfficialDiscountAmount',
            'installmentAmount' => 'getInstallmentAmount',
            'installmentPeriodType' => 'getInstallmentPeriodType'
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
        $this->container['discountId'] = isset($data['discountId']) ? $data['discountId'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['officialWebsiteAmount'] = isset($data['officialWebsiteAmount']) ? $data['officialWebsiteAmount'] : null;
        $this->container['discountAmount'] = isset($data['discountAmount']) ? $data['discountAmount'] : null;
        $this->container['discountType'] = isset($data['discountType']) ? $data['discountType'] : null;
        $this->container['discountName'] = isset($data['discountName']) ? $data['discountName'] : null;
        $this->container['bestOffer'] = isset($data['bestOffer']) ? $data['bestOffer'] : null;
        $this->container['installmentOfficialWebsiteAmount'] = isset($data['installmentOfficialWebsiteAmount']) ? $data['installmentOfficialWebsiteAmount'] : null;
        $this->container['installmentOfficialDiscountAmount'] = isset($data['installmentOfficialDiscountAmount']) ? $data['installmentOfficialDiscountAmount'] : null;
        $this->container['installmentAmount'] = isset($data['installmentAmount']) ? $data['installmentAmount'] : null;
        $this->container['installmentPeriodType'] = isset($data['installmentPeriodType']) ? $data['installmentPeriodType'] : null;
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
    * Gets discountId
    *  |参数名称：折扣优惠ID| |参数约束及描述：折扣优惠ID|
    *
    * @return string|null
    */
    public function getDiscountId()
    {
        return $this->container['discountId'];
    }

    /**
    * Sets discountId
    *
    * @param string|null $discountId |参数名称：折扣优惠ID| |参数约束及描述：折扣优惠ID|
    *
    * @return $this
    */
    public function setDiscountId($discountId)
    {
        $this->container['discountId'] = $discountId;
        return $this;
    }

    /**
    * Gets amount
    *  |参数名称：总额，即最终优惠后的金额。单位为元。amount= official_website_amount - discount_amount| |参数约束及描述：总额，即最终优惠后的金额。单位为元。amount= official_website_amount - discount_amount|
    *
    * @return string|null
    */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
    * Sets amount
    *
    * @param string|null $amount |参数名称：总额，即最终优惠后的金额。单位为元。amount= official_website_amount - discount_amount| |参数约束及描述：总额，即最终优惠后的金额。单位为元。amount= official_website_amount - discount_amount|
    *
    * @return $this
    */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;
        return $this;
    }

    /**
    * Gets officialWebsiteAmount
    *  |参数名称：官网价。单位为元| |参数约束及描述：官网价。单位为元|
    *
    * @return string|null
    */
    public function getOfficialWebsiteAmount()
    {
        return $this->container['officialWebsiteAmount'];
    }

    /**
    * Sets officialWebsiteAmount
    *
    * @param string|null $officialWebsiteAmount |参数名称：官网价。单位为元| |参数约束及描述：官网价。单位为元|
    *
    * @return $this
    */
    public function setOfficialWebsiteAmount($officialWebsiteAmount)
    {
        $this->container['officialWebsiteAmount'] = $officialWebsiteAmount;
        return $this;
    }

    /**
    * Gets discountAmount
    *  |参数名称：可选折扣优惠额，如商务折扣、伙伴折扣、促销折扣和折扣券选用时的优惠额。单位为| |参数约束及描述：可选折扣优惠额，如商务折扣、伙伴折扣、促销折扣和折扣券选用时的优惠额。单位为|
    *
    * @return string|null
    */
    public function getDiscountAmount()
    {
        return $this->container['discountAmount'];
    }

    /**
    * Sets discountAmount
    *
    * @param string|null $discountAmount |参数名称：可选折扣优惠额，如商务折扣、伙伴折扣、促销折扣和折扣券选用时的优惠额。单位为| |参数约束及描述：可选折扣优惠额，如商务折扣、伙伴折扣、促销折扣和折扣券选用时的优惠额。单位为|
    *
    * @return $this
    */
    public function setDiscountAmount($discountAmount)
    {
        $this->container['discountAmount'] = $discountAmount;
        return $this;
    }

    /**
    * Gets discountType
    *  |参数名称：折扣优惠类型| |参数约束及描述：折扣优惠类型。商务授权折扣：605(华为云BE场景下的合同商务折扣)、伙伴授予折扣：606(分销商BE场景下的合同商务折扣)、伙伴设置折扣：607(合作伙伴设置折扣-折扣率)|
    *
    * @return int|null
    */
    public function getDiscountType()
    {
        return $this->container['discountType'];
    }

    /**
    * Sets discountType
    *
    * @param int|null $discountType |参数名称：折扣优惠类型| |参数约束及描述：折扣优惠类型。商务授权折扣：605(华为云BE场景下的合同商务折扣)、伙伴授予折扣：606(分销商BE场景下的合同商务折扣)、伙伴设置折扣：607(合作伙伴设置折扣-折扣率)|
    *
    * @return $this
    */
    public function setDiscountType($discountType)
    {
        $this->container['discountType'] = $discountType;
        return $this;
    }

    /**
    * Gets discountName
    *  |参数名称：折扣名称| |参数约束及描述：折扣名称|
    *
    * @return string|null
    */
    public function getDiscountName()
    {
        return $this->container['discountName'];
    }

    /**
    * Sets discountName
    *
    * @param string|null $discountName |参数名称：折扣名称| |参数约束及描述：折扣名称|
    *
    * @return $this
    */
    public function setDiscountName($discountName)
    {
        $this->container['discountName'] = $discountName;
        return $this;
    }

    /**
    * Gets bestOffer
    *  |参数名称：是否为最优折扣。0：不是最优折扣，为缺省值。1：是最优折扣最优折扣：在商务折扣、伙伴折扣中选择（优惠金额最大的折扣为最优，优惠金额相等则按此顺序排优先级），促销折扣，折扣券不参与最优折扣的计算| |参数的约束及描述：是否为最优折扣。0：不是最优折扣，为缺省值。1：是最优折扣最优折扣：在商务折扣、伙伴折扣中选择（优惠金额最大的折扣为最优，优惠金额相等则按此顺序排优先级），促销折扣，折扣券不参与最优折扣的计算|
    *
    * @return int|null
    */
    public function getBestOffer()
    {
        return $this->container['bestOffer'];
    }

    /**
    * Sets bestOffer
    *
    * @param int|null $bestOffer |参数名称：是否为最优折扣。0：不是最优折扣，为缺省值。1：是最优折扣最优折扣：在商务折扣、伙伴折扣中选择（优惠金额最大的折扣为最优，优惠金额相等则按此顺序排优先级），促销折扣，折扣券不参与最优折扣的计算| |参数的约束及描述：是否为最优折扣。0：不是最优折扣，为缺省值。1：是最优折扣最优折扣：在商务折扣、伙伴折扣中选择（优惠金额最大的折扣为最优，优惠金额相等则按此顺序排优先级），促销折扣，折扣券不参与最优折扣的计算|
    *
    * @return $this
    */
    public function setBestOffer($bestOffer)
    {
        $this->container['bestOffer'] = $bestOffer;
        return $this;
    }

    /**
    * Gets installmentOfficialWebsiteAmount
    *  |参数名称：分期金额的官网价。单位为元| |参数约束及描述：分期金额的官网价。单位为元|
    *
    * @return string|null
    */
    public function getInstallmentOfficialWebsiteAmount()
    {
        return $this->container['installmentOfficialWebsiteAmount'];
    }

    /**
    * Sets installmentOfficialWebsiteAmount
    *
    * @param string|null $installmentOfficialWebsiteAmount |参数名称：分期金额的官网价。单位为元| |参数约束及描述：分期金额的官网价。单位为元|
    *
    * @return $this
    */
    public function setInstallmentOfficialWebsiteAmount($installmentOfficialWebsiteAmount)
    {
        $this->container['installmentOfficialWebsiteAmount'] = $installmentOfficialWebsiteAmount;
        return $this;
    }

    /**
    * Gets installmentOfficialDiscountAmount
    *  |参数名称：分期金额的折扣价。单位为元| |参数约束及描述：分期金额的折扣价。单位为元|
    *
    * @return string|null
    */
    public function getInstallmentOfficialDiscountAmount()
    {
        return $this->container['installmentOfficialDiscountAmount'];
    }

    /**
    * Sets installmentOfficialDiscountAmount
    *
    * @param string|null $installmentOfficialDiscountAmount |参数名称：分期金额的折扣价。单位为元| |参数约束及描述：分期金额的折扣价。单位为元|
    *
    * @return $this
    */
    public function setInstallmentOfficialDiscountAmount($installmentOfficialDiscountAmount)
    {
        $this->container['installmentOfficialDiscountAmount'] = $installmentOfficialDiscountAmount;
        return $this;
    }

    /**
    * Gets installmentAmount
    *  |参数名称：分期金额的成交价。单位为元| |参数约束及描述：分期金额的成交价。单位为元|
    *
    * @return string|null
    */
    public function getInstallmentAmount()
    {
        return $this->container['installmentAmount'];
    }

    /**
    * Sets installmentAmount
    *
    * @param string|null $installmentAmount |参数名称：分期金额的成交价。单位为元| |参数约束及描述：分期金额的成交价。单位为元|
    *
    * @return $this
    */
    public function setInstallmentAmount($installmentAmount)
    {
        $this->container['installmentAmount'] = $installmentAmount;
        return $this;
    }

    /**
    * Gets installmentPeriodType
    *  |参数名称：分期付款的周期类型。2：月| |参数的约束及描述：分期付款的周期类型。2：月|
    *
    * @return int|null
    */
    public function getInstallmentPeriodType()
    {
        return $this->container['installmentPeriodType'];
    }

    /**
    * Sets installmentPeriodType
    *
    * @param int|null $installmentPeriodType |参数名称：分期付款的周期类型。2：月| |参数的约束及描述：分期付款的周期类型。2：月|
    *
    * @return $this
    */
    public function setInstallmentPeriodType($installmentPeriodType)
    {
        $this->container['installmentPeriodType'] = $installmentPeriodType;
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

