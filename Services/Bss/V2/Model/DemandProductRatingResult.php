<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DemandProductRatingResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DemandProductRatingResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  同一次询价中不能重复，用于标识返回询价结果和请求的映射关系。
    * productId  按需产品的ID。
    * amount  折扣的金额。
    * discountAmount  优惠额（官网价和总价的差）。
    * officialWebsiteAmount  按需产品的官网价。
    * measureId  度量单位标识。 1：元
    * discountRatingResults  折扣优惠明细，包含产品本身的促销信息，同时包含商务或者伙伴折扣的优惠信息，具体参见表3。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'productId' => 'string',
            'amount' => 'double',
            'discountAmount' => 'double',
            'officialWebsiteAmount' => 'double',
            'measureId' => 'int',
            'discountRatingResults' => '\HuaweiCloud\SDK\Bss\V2\Model\DemandDiscountRatingResult[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  同一次询价中不能重复，用于标识返回询价结果和请求的映射关系。
    * productId  按需产品的ID。
    * amount  折扣的金额。
    * discountAmount  优惠额（官网价和总价的差）。
    * officialWebsiteAmount  按需产品的官网价。
    * measureId  度量单位标识。 1：元
    * discountRatingResults  折扣优惠明细，包含产品本身的促销信息，同时包含商务或者伙伴折扣的优惠信息，具体参见表3。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'productId' => null,
        'amount' => 'double',
        'discountAmount' => 'double',
        'officialWebsiteAmount' => 'double',
        'measureId' => 'int32',
        'discountRatingResults' => null
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
    * id  同一次询价中不能重复，用于标识返回询价结果和请求的映射关系。
    * productId  按需产品的ID。
    * amount  折扣的金额。
    * discountAmount  优惠额（官网价和总价的差）。
    * officialWebsiteAmount  按需产品的官网价。
    * measureId  度量单位标识。 1：元
    * discountRatingResults  折扣优惠明细，包含产品本身的促销信息，同时包含商务或者伙伴折扣的优惠信息，具体参见表3。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'productId' => 'product_id',
            'amount' => 'amount',
            'discountAmount' => 'discount_amount',
            'officialWebsiteAmount' => 'official_website_amount',
            'measureId' => 'measure_id',
            'discountRatingResults' => 'discount_rating_results'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  同一次询价中不能重复，用于标识返回询价结果和请求的映射关系。
    * productId  按需产品的ID。
    * amount  折扣的金额。
    * discountAmount  优惠额（官网价和总价的差）。
    * officialWebsiteAmount  按需产品的官网价。
    * measureId  度量单位标识。 1：元
    * discountRatingResults  折扣优惠明细，包含产品本身的促销信息，同时包含商务或者伙伴折扣的优惠信息，具体参见表3。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'productId' => 'setProductId',
            'amount' => 'setAmount',
            'discountAmount' => 'setDiscountAmount',
            'officialWebsiteAmount' => 'setOfficialWebsiteAmount',
            'measureId' => 'setMeasureId',
            'discountRatingResults' => 'setDiscountRatingResults'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  同一次询价中不能重复，用于标识返回询价结果和请求的映射关系。
    * productId  按需产品的ID。
    * amount  折扣的金额。
    * discountAmount  优惠额（官网价和总价的差）。
    * officialWebsiteAmount  按需产品的官网价。
    * measureId  度量单位标识。 1：元
    * discountRatingResults  折扣优惠明细，包含产品本身的促销信息，同时包含商务或者伙伴折扣的优惠信息，具体参见表3。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'productId' => 'getProductId',
            'amount' => 'getAmount',
            'discountAmount' => 'getDiscountAmount',
            'officialWebsiteAmount' => 'getOfficialWebsiteAmount',
            'measureId' => 'getMeasureId',
            'discountRatingResults' => 'getDiscountRatingResults'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['discountAmount'] = isset($data['discountAmount']) ? $data['discountAmount'] : null;
        $this->container['officialWebsiteAmount'] = isset($data['officialWebsiteAmount']) ? $data['officialWebsiteAmount'] : null;
        $this->container['measureId'] = isset($data['measureId']) ? $data['measureId'] : null;
        $this->container['discountRatingResults'] = isset($data['discountRatingResults']) ? $data['discountRatingResults'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['productId']) && (mb_strlen($this->container['productId']) > 64)) {
                $invalidProperties[] = "invalid value for 'productId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['productId']) && (mb_strlen($this->container['productId']) < 1)) {
                $invalidProperties[] = "invalid value for 'productId', the character length must be bigger than or equal to 1.";
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
    * Gets id
    *  同一次询价中不能重复，用于标识返回询价结果和请求的映射关系。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 同一次询价中不能重复，用于标识返回询价结果和请求的映射关系。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets productId
    *  按需产品的ID。
    *
    * @return string|null
    */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
    * Sets productId
    *
    * @param string|null $productId 按需产品的ID。
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
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
    * Gets discountRatingResults
    *  折扣优惠明细，包含产品本身的促销信息，同时包含商务或者伙伴折扣的优惠信息，具体参见表3。
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\DemandDiscountRatingResult[]|null
    */
    public function getDiscountRatingResults()
    {
        return $this->container['discountRatingResults'];
    }

    /**
    * Sets discountRatingResults
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\DemandDiscountRatingResult[]|null $discountRatingResults 折扣优惠明细，包含产品本身的促销信息，同时包含商务或者伙伴折扣的优惠信息，具体参见表3。
    *
    * @return $this
    */
    public function setDiscountRatingResults($discountRatingResults)
    {
        $this->container['discountRatingResults'] = $discountRatingResults;
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

