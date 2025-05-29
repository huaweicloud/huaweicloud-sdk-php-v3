<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OptionalDiscountRatingResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OptionalDiscountRatingResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * discountId  折扣优惠ID。
    * amount  总额，即最终优惠后的金额。 amount= official_website_amount - discountAmount。
    * officialWebsiteAmount  包年/包月产品的官网价。
    * discountAmount  可选折扣优惠额，如商务折扣、伙伴折扣、促销折扣和折扣券选用时的优惠额。
    * measureId  价格度量单位标识。 1：元
    * discountType  折扣优惠类型。商务授权折扣：605(华为云BE场景下的合同商务折扣)、伙伴授予折扣：606(分销商BE场景下的合同商务折扣)、伙伴设置折扣：607(合作伙伴设置折扣-折扣率)
    * discountName  折扣名称。
    * bestOffer  是否为最优折扣。 0：不是最优折扣，为缺省值。1：是最优折扣最优折扣：在商务折扣、伙伴折扣中选择（优惠金额最大的折扣为最优，优惠金额相等则按此顺序排优先级），促销折扣，折扣券不参与最优折扣的计算。
    * productRatingResults  产品询价结果，具体参见表5。
    * installmentOfficialWebsiteAmount  分期金额的官网价。  说明： 暂只支持CloudPond产品。
    * installmentOfficialDiscountAmount  分期金额的折扣价。  说明： 暂只支持CloudPond产品。
    * installmentAmount  分期金额的成交价。  说明： 分期金额的成交价=分期金额的官网价-分期金额的折扣价。暂只支持CloudPond产品。
    * installmentPeriodType  分期付款的周期类型。 2：月 3：年 说明： 暂只支持CloudPond产品。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'discountId' => 'string',
            'amount' => 'float',
            'officialWebsiteAmount' => 'float',
            'discountAmount' => 'float',
            'measureId' => 'int',
            'discountType' => 'int',
            'discountName' => 'string',
            'bestOffer' => 'int',
            'productRatingResults' => '\HuaweiCloud\SDK\Bss\V2\Model\PeriodProductRatingResult[]',
            'installmentOfficialWebsiteAmount' => 'string',
            'installmentOfficialDiscountAmount' => 'string',
            'installmentAmount' => 'string',
            'installmentPeriodType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * discountId  折扣优惠ID。
    * amount  总额，即最终优惠后的金额。 amount= official_website_amount - discountAmount。
    * officialWebsiteAmount  包年/包月产品的官网价。
    * discountAmount  可选折扣优惠额，如商务折扣、伙伴折扣、促销折扣和折扣券选用时的优惠额。
    * measureId  价格度量单位标识。 1：元
    * discountType  折扣优惠类型。商务授权折扣：605(华为云BE场景下的合同商务折扣)、伙伴授予折扣：606(分销商BE场景下的合同商务折扣)、伙伴设置折扣：607(合作伙伴设置折扣-折扣率)
    * discountName  折扣名称。
    * bestOffer  是否为最优折扣。 0：不是最优折扣，为缺省值。1：是最优折扣最优折扣：在商务折扣、伙伴折扣中选择（优惠金额最大的折扣为最优，优惠金额相等则按此顺序排优先级），促销折扣，折扣券不参与最优折扣的计算。
    * productRatingResults  产品询价结果，具体参见表5。
    * installmentOfficialWebsiteAmount  分期金额的官网价。  说明： 暂只支持CloudPond产品。
    * installmentOfficialDiscountAmount  分期金额的折扣价。  说明： 暂只支持CloudPond产品。
    * installmentAmount  分期金额的成交价。  说明： 分期金额的成交价=分期金额的官网价-分期金额的折扣价。暂只支持CloudPond产品。
    * installmentPeriodType  分期付款的周期类型。 2：月 3：年 说明： 暂只支持CloudPond产品。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'discountId' => null,
        'amount' => 'bigdecimal',
        'officialWebsiteAmount' => 'bigdecimal',
        'discountAmount' => 'bigdecimal',
        'measureId' => 'int32',
        'discountType' => 'int32',
        'discountName' => null,
        'bestOffer' => 'int32',
        'productRatingResults' => null,
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
    * discountId  折扣优惠ID。
    * amount  总额，即最终优惠后的金额。 amount= official_website_amount - discountAmount。
    * officialWebsiteAmount  包年/包月产品的官网价。
    * discountAmount  可选折扣优惠额，如商务折扣、伙伴折扣、促销折扣和折扣券选用时的优惠额。
    * measureId  价格度量单位标识。 1：元
    * discountType  折扣优惠类型。商务授权折扣：605(华为云BE场景下的合同商务折扣)、伙伴授予折扣：606(分销商BE场景下的合同商务折扣)、伙伴设置折扣：607(合作伙伴设置折扣-折扣率)
    * discountName  折扣名称。
    * bestOffer  是否为最优折扣。 0：不是最优折扣，为缺省值。1：是最优折扣最优折扣：在商务折扣、伙伴折扣中选择（优惠金额最大的折扣为最优，优惠金额相等则按此顺序排优先级），促销折扣，折扣券不参与最优折扣的计算。
    * productRatingResults  产品询价结果，具体参见表5。
    * installmentOfficialWebsiteAmount  分期金额的官网价。  说明： 暂只支持CloudPond产品。
    * installmentOfficialDiscountAmount  分期金额的折扣价。  说明： 暂只支持CloudPond产品。
    * installmentAmount  分期金额的成交价。  说明： 分期金额的成交价=分期金额的官网价-分期金额的折扣价。暂只支持CloudPond产品。
    * installmentPeriodType  分期付款的周期类型。 2：月 3：年 说明： 暂只支持CloudPond产品。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'discountId' => 'discount_id',
            'amount' => 'amount',
            'officialWebsiteAmount' => 'official_website_amount',
            'discountAmount' => 'discount_amount',
            'measureId' => 'measure_id',
            'discountType' => 'discount_type',
            'discountName' => 'discount_name',
            'bestOffer' => 'best_offer',
            'productRatingResults' => 'product_rating_results',
            'installmentOfficialWebsiteAmount' => 'installment_official_website_amount',
            'installmentOfficialDiscountAmount' => 'installment_official_discount_amount',
            'installmentAmount' => 'installment_amount',
            'installmentPeriodType' => 'installment_period_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * discountId  折扣优惠ID。
    * amount  总额，即最终优惠后的金额。 amount= official_website_amount - discountAmount。
    * officialWebsiteAmount  包年/包月产品的官网价。
    * discountAmount  可选折扣优惠额，如商务折扣、伙伴折扣、促销折扣和折扣券选用时的优惠额。
    * measureId  价格度量单位标识。 1：元
    * discountType  折扣优惠类型。商务授权折扣：605(华为云BE场景下的合同商务折扣)、伙伴授予折扣：606(分销商BE场景下的合同商务折扣)、伙伴设置折扣：607(合作伙伴设置折扣-折扣率)
    * discountName  折扣名称。
    * bestOffer  是否为最优折扣。 0：不是最优折扣，为缺省值。1：是最优折扣最优折扣：在商务折扣、伙伴折扣中选择（优惠金额最大的折扣为最优，优惠金额相等则按此顺序排优先级），促销折扣，折扣券不参与最优折扣的计算。
    * productRatingResults  产品询价结果，具体参见表5。
    * installmentOfficialWebsiteAmount  分期金额的官网价。  说明： 暂只支持CloudPond产品。
    * installmentOfficialDiscountAmount  分期金额的折扣价。  说明： 暂只支持CloudPond产品。
    * installmentAmount  分期金额的成交价。  说明： 分期金额的成交价=分期金额的官网价-分期金额的折扣价。暂只支持CloudPond产品。
    * installmentPeriodType  分期付款的周期类型。 2：月 3：年 说明： 暂只支持CloudPond产品。
    *
    * @var string[]
    */
    protected static $setters = [
            'discountId' => 'setDiscountId',
            'amount' => 'setAmount',
            'officialWebsiteAmount' => 'setOfficialWebsiteAmount',
            'discountAmount' => 'setDiscountAmount',
            'measureId' => 'setMeasureId',
            'discountType' => 'setDiscountType',
            'discountName' => 'setDiscountName',
            'bestOffer' => 'setBestOffer',
            'productRatingResults' => 'setProductRatingResults',
            'installmentOfficialWebsiteAmount' => 'setInstallmentOfficialWebsiteAmount',
            'installmentOfficialDiscountAmount' => 'setInstallmentOfficialDiscountAmount',
            'installmentAmount' => 'setInstallmentAmount',
            'installmentPeriodType' => 'setInstallmentPeriodType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * discountId  折扣优惠ID。
    * amount  总额，即最终优惠后的金额。 amount= official_website_amount - discountAmount。
    * officialWebsiteAmount  包年/包月产品的官网价。
    * discountAmount  可选折扣优惠额，如商务折扣、伙伴折扣、促销折扣和折扣券选用时的优惠额。
    * measureId  价格度量单位标识。 1：元
    * discountType  折扣优惠类型。商务授权折扣：605(华为云BE场景下的合同商务折扣)、伙伴授予折扣：606(分销商BE场景下的合同商务折扣)、伙伴设置折扣：607(合作伙伴设置折扣-折扣率)
    * discountName  折扣名称。
    * bestOffer  是否为最优折扣。 0：不是最优折扣，为缺省值。1：是最优折扣最优折扣：在商务折扣、伙伴折扣中选择（优惠金额最大的折扣为最优，优惠金额相等则按此顺序排优先级），促销折扣，折扣券不参与最优折扣的计算。
    * productRatingResults  产品询价结果，具体参见表5。
    * installmentOfficialWebsiteAmount  分期金额的官网价。  说明： 暂只支持CloudPond产品。
    * installmentOfficialDiscountAmount  分期金额的折扣价。  说明： 暂只支持CloudPond产品。
    * installmentAmount  分期金额的成交价。  说明： 分期金额的成交价=分期金额的官网价-分期金额的折扣价。暂只支持CloudPond产品。
    * installmentPeriodType  分期付款的周期类型。 2：月 3：年 说明： 暂只支持CloudPond产品。
    *
    * @var string[]
    */
    protected static $getters = [
            'discountId' => 'getDiscountId',
            'amount' => 'getAmount',
            'officialWebsiteAmount' => 'getOfficialWebsiteAmount',
            'discountAmount' => 'getDiscountAmount',
            'measureId' => 'getMeasureId',
            'discountType' => 'getDiscountType',
            'discountName' => 'getDiscountName',
            'bestOffer' => 'getBestOffer',
            'productRatingResults' => 'getProductRatingResults',
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
        $this->container['measureId'] = isset($data['measureId']) ? $data['measureId'] : null;
        $this->container['discountType'] = isset($data['discountType']) ? $data['discountType'] : null;
        $this->container['discountName'] = isset($data['discountName']) ? $data['discountName'] : null;
        $this->container['bestOffer'] = isset($data['bestOffer']) ? $data['bestOffer'] : null;
        $this->container['productRatingResults'] = isset($data['productRatingResults']) ? $data['productRatingResults'] : null;
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
            if (!is_null($this->container['discountId']) && (mb_strlen($this->container['discountId']) > 64)) {
                $invalidProperties[] = "invalid value for 'discountId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['discountId']) && (mb_strlen($this->container['discountId']) < 1)) {
                $invalidProperties[] = "invalid value for 'discountId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['discountName']) && (mb_strlen($this->container['discountName']) > 256)) {
                $invalidProperties[] = "invalid value for 'discountName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['discountName']) && (mb_strlen($this->container['discountName']) < 0)) {
                $invalidProperties[] = "invalid value for 'discountName', the character length must be bigger than or equal to 0.";
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
    * Gets discountId
    *  折扣优惠ID。
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
    * @param string|null $discountId 折扣优惠ID。
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
    *  总额，即最终优惠后的金额。 amount= official_website_amount - discountAmount。
    *
    * @return float|null
    */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
    * Sets amount
    *
    * @param float|null $amount 总额，即最终优惠后的金额。 amount= official_website_amount - discountAmount。
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
    *  包年/包月产品的官网价。
    *
    * @return float|null
    */
    public function getOfficialWebsiteAmount()
    {
        return $this->container['officialWebsiteAmount'];
    }

    /**
    * Sets officialWebsiteAmount
    *
    * @param float|null $officialWebsiteAmount 包年/包月产品的官网价。
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
    *  可选折扣优惠额，如商务折扣、伙伴折扣、促销折扣和折扣券选用时的优惠额。
    *
    * @return float|null
    */
    public function getDiscountAmount()
    {
        return $this->container['discountAmount'];
    }

    /**
    * Sets discountAmount
    *
    * @param float|null $discountAmount 可选折扣优惠额，如商务折扣、伙伴折扣、促销折扣和折扣券选用时的优惠额。
    *
    * @return $this
    */
    public function setDiscountAmount($discountAmount)
    {
        $this->container['discountAmount'] = $discountAmount;
        return $this;
    }

    /**
    * Gets measureId
    *  价格度量单位标识。 1：元
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
    * @param int|null $measureId 价格度量单位标识。 1：元
    *
    * @return $this
    */
    public function setMeasureId($measureId)
    {
        $this->container['measureId'] = $measureId;
        return $this;
    }

    /**
    * Gets discountType
    *  折扣优惠类型。商务授权折扣：605(华为云BE场景下的合同商务折扣)、伙伴授予折扣：606(分销商BE场景下的合同商务折扣)、伙伴设置折扣：607(合作伙伴设置折扣-折扣率)
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
    * @param int|null $discountType 折扣优惠类型。商务授权折扣：605(华为云BE场景下的合同商务折扣)、伙伴授予折扣：606(分销商BE场景下的合同商务折扣)、伙伴设置折扣：607(合作伙伴设置折扣-折扣率)
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
    *  折扣名称。
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
    * @param string|null $discountName 折扣名称。
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
    *  是否为最优折扣。 0：不是最优折扣，为缺省值。1：是最优折扣最优折扣：在商务折扣、伙伴折扣中选择（优惠金额最大的折扣为最优，优惠金额相等则按此顺序排优先级），促销折扣，折扣券不参与最优折扣的计算。
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
    * @param int|null $bestOffer 是否为最优折扣。 0：不是最优折扣，为缺省值。1：是最优折扣最优折扣：在商务折扣、伙伴折扣中选择（优惠金额最大的折扣为最优，优惠金额相等则按此顺序排优先级），促销折扣，折扣券不参与最优折扣的计算。
    *
    * @return $this
    */
    public function setBestOffer($bestOffer)
    {
        $this->container['bestOffer'] = $bestOffer;
        return $this;
    }

    /**
    * Gets productRatingResults
    *  产品询价结果，具体参见表5。
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\PeriodProductRatingResult[]|null
    */
    public function getProductRatingResults()
    {
        return $this->container['productRatingResults'];
    }

    /**
    * Sets productRatingResults
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\PeriodProductRatingResult[]|null $productRatingResults 产品询价结果，具体参见表5。
    *
    * @return $this
    */
    public function setProductRatingResults($productRatingResults)
    {
        $this->container['productRatingResults'] = $productRatingResults;
        return $this;
    }

    /**
    * Gets installmentOfficialWebsiteAmount
    *  分期金额的官网价。  说明： 暂只支持CloudPond产品。
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
    * @param string|null $installmentOfficialWebsiteAmount 分期金额的官网价。  说明： 暂只支持CloudPond产品。
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
    *  分期金额的折扣价。  说明： 暂只支持CloudPond产品。
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
    * @param string|null $installmentOfficialDiscountAmount 分期金额的折扣价。  说明： 暂只支持CloudPond产品。
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
    *  分期金额的成交价。  说明： 分期金额的成交价=分期金额的官网价-分期金额的折扣价。暂只支持CloudPond产品。
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
    * @param string|null $installmentAmount 分期金额的成交价。  说明： 分期金额的成交价=分期金额的官网价-分期金额的折扣价。暂只支持CloudPond产品。
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
    *  分期付款的周期类型。 2：月 3：年 说明： 暂只支持CloudPond产品。
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
    * @param int|null $installmentPeriodType 分期付款的周期类型。 2：月 3：年 说明： 暂只支持CloudPond产品。
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

