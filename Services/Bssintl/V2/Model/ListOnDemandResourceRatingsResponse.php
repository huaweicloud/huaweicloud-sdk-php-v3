<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListOnDemandResourceRatingsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListOnDemandResourceRatingsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * amount  折扣的金额。
    * discountAmount  优惠额（官网价和总价的差）。
    * officialWebsiteAmount  按需产品的官网价。
    * measureId  度量单位标识。 1：元
    * currency  币种。 USD：美元。 值为空代表美元。
    * productRatingResults  产品询价结果，具体参见表2。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'amount' => 'double',
            'discountAmount' => 'double',
            'officialWebsiteAmount' => 'double',
            'measureId' => 'int',
            'currency' => 'string',
            'productRatingResults' => '\HuaweiCloud\SDK\Bssintl\V2\Model\DemandProductRatingResult[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * amount  折扣的金额。
    * discountAmount  优惠额（官网价和总价的差）。
    * officialWebsiteAmount  按需产品的官网价。
    * measureId  度量单位标识。 1：元
    * currency  币种。 USD：美元。 值为空代表美元。
    * productRatingResults  产品询价结果，具体参见表2。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'amount' => 'double',
        'discountAmount' => 'double',
        'officialWebsiteAmount' => 'double',
        'measureId' => 'int32',
        'currency' => null,
        'productRatingResults' => null
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
    * amount  折扣的金额。
    * discountAmount  优惠额（官网价和总价的差）。
    * officialWebsiteAmount  按需产品的官网价。
    * measureId  度量单位标识。 1：元
    * currency  币种。 USD：美元。 值为空代表美元。
    * productRatingResults  产品询价结果，具体参见表2。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'amount' => 'amount',
            'discountAmount' => 'discount_amount',
            'officialWebsiteAmount' => 'official_website_amount',
            'measureId' => 'measure_id',
            'currency' => 'currency',
            'productRatingResults' => 'product_rating_results'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * amount  折扣的金额。
    * discountAmount  优惠额（官网价和总价的差）。
    * officialWebsiteAmount  按需产品的官网价。
    * measureId  度量单位标识。 1：元
    * currency  币种。 USD：美元。 值为空代表美元。
    * productRatingResults  产品询价结果，具体参见表2。
    *
    * @var string[]
    */
    protected static $setters = [
            'amount' => 'setAmount',
            'discountAmount' => 'setDiscountAmount',
            'officialWebsiteAmount' => 'setOfficialWebsiteAmount',
            'measureId' => 'setMeasureId',
            'currency' => 'setCurrency',
            'productRatingResults' => 'setProductRatingResults'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * amount  折扣的金额。
    * discountAmount  优惠额（官网价和总价的差）。
    * officialWebsiteAmount  按需产品的官网价。
    * measureId  度量单位标识。 1：元
    * currency  币种。 USD：美元。 值为空代表美元。
    * productRatingResults  产品询价结果，具体参见表2。
    *
    * @var string[]
    */
    protected static $getters = [
            'amount' => 'getAmount',
            'discountAmount' => 'getDiscountAmount',
            'officialWebsiteAmount' => 'getOfficialWebsiteAmount',
            'measureId' => 'getMeasureId',
            'currency' => 'getCurrency',
            'productRatingResults' => 'getProductRatingResults'
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
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['discountAmount'] = isset($data['discountAmount']) ? $data['discountAmount'] : null;
        $this->container['officialWebsiteAmount'] = isset($data['officialWebsiteAmount']) ? $data['officialWebsiteAmount'] : null;
        $this->container['measureId'] = isset($data['measureId']) ? $data['measureId'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['productRatingResults'] = isset($data['productRatingResults']) ? $data['productRatingResults'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['measureId']) && ($this->container['measureId'] > 4)) {
                $invalidProperties[] = "invalid value for 'measureId', must be smaller than or equal to 4.";
            }
            if (!is_null($this->container['measureId']) && ($this->container['measureId'] < 1)) {
                $invalidProperties[] = "invalid value for 'measureId', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['currency']) && (mb_strlen($this->container['currency']) > 20)) {
                $invalidProperties[] = "invalid value for 'currency', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['currency']) && (mb_strlen($this->container['currency']) < 0)) {
                $invalidProperties[] = "invalid value for 'currency', the character length must be bigger than or equal to 0.";
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
    * Gets amount
    *  折扣的金额。
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
    * @param double|null $amount 折扣的金额。
    *
    * @return $this
    */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;
        return $this;
    }

    /**
    * Gets discountAmount
    *  优惠额（官网价和总价的差）。
    *
    * @return double|null
    */
    public function getDiscountAmount()
    {
        return $this->container['discountAmount'];
    }

    /**
    * Sets discountAmount
    *
    * @param double|null $discountAmount 优惠额（官网价和总价的差）。
    *
    * @return $this
    */
    public function setDiscountAmount($discountAmount)
    {
        $this->container['discountAmount'] = $discountAmount;
        return $this;
    }

    /**
    * Gets officialWebsiteAmount
    *  按需产品的官网价。
    *
    * @return double|null
    */
    public function getOfficialWebsiteAmount()
    {
        return $this->container['officialWebsiteAmount'];
    }

    /**
    * Sets officialWebsiteAmount
    *
    * @param double|null $officialWebsiteAmount 按需产品的官网价。
    *
    * @return $this
    */
    public function setOfficialWebsiteAmount($officialWebsiteAmount)
    {
        $this->container['officialWebsiteAmount'] = $officialWebsiteAmount;
        return $this;
    }

    /**
    * Gets measureId
    *  度量单位标识。 1：元
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
    * @param int|null $measureId 度量单位标识。 1：元
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
    *  币种。 USD：美元。 值为空代表美元。
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
    * @param string|null $currency 币种。 USD：美元。 值为空代表美元。
    *
    * @return $this
    */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;
        return $this;
    }

    /**
    * Gets productRatingResults
    *  产品询价结果，具体参见表2。
    *
    * @return \HuaweiCloud\SDK\Bssintl\V2\Model\DemandProductRatingResult[]|null
    */
    public function getProductRatingResults()
    {
        return $this->container['productRatingResults'];
    }

    /**
    * Sets productRatingResults
    *
    * @param \HuaweiCloud\SDK\Bssintl\V2\Model\DemandProductRatingResult[]|null $productRatingResults 产品询价结果，具体参见表2。
    *
    * @return $this
    */
    public function setProductRatingResults($productRatingResults)
    {
        $this->container['productRatingResults'] = $productRatingResults;
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

