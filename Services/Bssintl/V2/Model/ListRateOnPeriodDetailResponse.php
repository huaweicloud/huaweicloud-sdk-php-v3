<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRateOnPeriodDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRateOnPeriodDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * officialWebsiteRatingResult  officialWebsiteRatingResult
    * optionalDiscountRatingResults  存在可选折扣优惠时返回折扣优惠维度询价结果，每个折扣优惠一组询价结果，具体参见表4。
    * currency  币种。 USD：美元。 值为空代表美元。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'officialWebsiteRatingResult' => '\HuaweiCloud\SDK\Bssintl\V2\Model\OfficialWebsiteRatingResult',
            'optionalDiscountRatingResults' => '\HuaweiCloud\SDK\Bssintl\V2\Model\OptionalDiscountRatingResult[]',
            'currency' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * officialWebsiteRatingResult  officialWebsiteRatingResult
    * optionalDiscountRatingResults  存在可选折扣优惠时返回折扣优惠维度询价结果，每个折扣优惠一组询价结果，具体参见表4。
    * currency  币种。 USD：美元。 值为空代表美元。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'officialWebsiteRatingResult' => null,
        'optionalDiscountRatingResults' => null,
        'currency' => null
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
    * officialWebsiteRatingResult  officialWebsiteRatingResult
    * optionalDiscountRatingResults  存在可选折扣优惠时返回折扣优惠维度询价结果，每个折扣优惠一组询价结果，具体参见表4。
    * currency  币种。 USD：美元。 值为空代表美元。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'officialWebsiteRatingResult' => 'official_website_rating_result',
            'optionalDiscountRatingResults' => 'optional_discount_rating_results',
            'currency' => 'currency'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * officialWebsiteRatingResult  officialWebsiteRatingResult
    * optionalDiscountRatingResults  存在可选折扣优惠时返回折扣优惠维度询价结果，每个折扣优惠一组询价结果，具体参见表4。
    * currency  币种。 USD：美元。 值为空代表美元。
    *
    * @var string[]
    */
    protected static $setters = [
            'officialWebsiteRatingResult' => 'setOfficialWebsiteRatingResult',
            'optionalDiscountRatingResults' => 'setOptionalDiscountRatingResults',
            'currency' => 'setCurrency'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * officialWebsiteRatingResult  officialWebsiteRatingResult
    * optionalDiscountRatingResults  存在可选折扣优惠时返回折扣优惠维度询价结果，每个折扣优惠一组询价结果，具体参见表4。
    * currency  币种。 USD：美元。 值为空代表美元。
    *
    * @var string[]
    */
    protected static $getters = [
            'officialWebsiteRatingResult' => 'getOfficialWebsiteRatingResult',
            'optionalDiscountRatingResults' => 'getOptionalDiscountRatingResults',
            'currency' => 'getCurrency'
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
        $this->container['officialWebsiteRatingResult'] = isset($data['officialWebsiteRatingResult']) ? $data['officialWebsiteRatingResult'] : null;
        $this->container['optionalDiscountRatingResults'] = isset($data['optionalDiscountRatingResults']) ? $data['optionalDiscountRatingResults'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets officialWebsiteRatingResult
    *  officialWebsiteRatingResult
    *
    * @return \HuaweiCloud\SDK\Bssintl\V2\Model\OfficialWebsiteRatingResult|null
    */
    public function getOfficialWebsiteRatingResult()
    {
        return $this->container['officialWebsiteRatingResult'];
    }

    /**
    * Sets officialWebsiteRatingResult
    *
    * @param \HuaweiCloud\SDK\Bssintl\V2\Model\OfficialWebsiteRatingResult|null $officialWebsiteRatingResult officialWebsiteRatingResult
    *
    * @return $this
    */
    public function setOfficialWebsiteRatingResult($officialWebsiteRatingResult)
    {
        $this->container['officialWebsiteRatingResult'] = $officialWebsiteRatingResult;
        return $this;
    }

    /**
    * Gets optionalDiscountRatingResults
    *  存在可选折扣优惠时返回折扣优惠维度询价结果，每个折扣优惠一组询价结果，具体参见表4。
    *
    * @return \HuaweiCloud\SDK\Bssintl\V2\Model\OptionalDiscountRatingResult[]|null
    */
    public function getOptionalDiscountRatingResults()
    {
        return $this->container['optionalDiscountRatingResults'];
    }

    /**
    * Sets optionalDiscountRatingResults
    *
    * @param \HuaweiCloud\SDK\Bssintl\V2\Model\OptionalDiscountRatingResult[]|null $optionalDiscountRatingResults 存在可选折扣优惠时返回折扣优惠维度询价结果，每个折扣优惠一组询价结果，具体参见表4。
    *
    * @return $this
    */
    public function setOptionalDiscountRatingResults($optionalDiscountRatingResults)
    {
        $this->container['optionalDiscountRatingResults'] = $optionalDiscountRatingResults;
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

