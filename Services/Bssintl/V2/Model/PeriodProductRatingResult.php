<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PeriodProductRatingResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PeriodProductRatingResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  ID标识，来源于请求中的ID。
    * productId  包年/包月产品的ID。
    * amount  总额，即最终优惠后的金额。 amount= official_website_amount - discountAmount。
    * officialWebsiteAmount  包年/包月产品的官网价。
    * discountAmount  可选折扣优惠额，如商务折扣、伙伴折扣、促销折扣和折扣券选用时的优惠额。
    * measureId  价格度量单位标识。 1：元
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'productId' => 'string',
            'amount' => 'float',
            'officialWebsiteAmount' => 'float',
            'discountAmount' => 'float',
            'measureId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  ID标识，来源于请求中的ID。
    * productId  包年/包月产品的ID。
    * amount  总额，即最终优惠后的金额。 amount= official_website_amount - discountAmount。
    * officialWebsiteAmount  包年/包月产品的官网价。
    * discountAmount  可选折扣优惠额，如商务折扣、伙伴折扣、促销折扣和折扣券选用时的优惠额。
    * measureId  价格度量单位标识。 1：元
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'productId' => null,
        'amount' => 'bigdecimal',
        'officialWebsiteAmount' => 'bigdecimal',
        'discountAmount' => 'bigdecimal',
        'measureId' => 'int32'
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
    * id  ID标识，来源于请求中的ID。
    * productId  包年/包月产品的ID。
    * amount  总额，即最终优惠后的金额。 amount= official_website_amount - discountAmount。
    * officialWebsiteAmount  包年/包月产品的官网价。
    * discountAmount  可选折扣优惠额，如商务折扣、伙伴折扣、促销折扣和折扣券选用时的优惠额。
    * measureId  价格度量单位标识。 1：元
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'productId' => 'product_id',
            'amount' => 'amount',
            'officialWebsiteAmount' => 'official_website_amount',
            'discountAmount' => 'discount_amount',
            'measureId' => 'measure_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  ID标识，来源于请求中的ID。
    * productId  包年/包月产品的ID。
    * amount  总额，即最终优惠后的金额。 amount= official_website_amount - discountAmount。
    * officialWebsiteAmount  包年/包月产品的官网价。
    * discountAmount  可选折扣优惠额，如商务折扣、伙伴折扣、促销折扣和折扣券选用时的优惠额。
    * measureId  价格度量单位标识。 1：元
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'productId' => 'setProductId',
            'amount' => 'setAmount',
            'officialWebsiteAmount' => 'setOfficialWebsiteAmount',
            'discountAmount' => 'setDiscountAmount',
            'measureId' => 'setMeasureId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  ID标识，来源于请求中的ID。
    * productId  包年/包月产品的ID。
    * amount  总额，即最终优惠后的金额。 amount= official_website_amount - discountAmount。
    * officialWebsiteAmount  包年/包月产品的官网价。
    * discountAmount  可选折扣优惠额，如商务折扣、伙伴折扣、促销折扣和折扣券选用时的优惠额。
    * measureId  价格度量单位标识。 1：元
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'productId' => 'getProductId',
            'amount' => 'getAmount',
            'officialWebsiteAmount' => 'getOfficialWebsiteAmount',
            'discountAmount' => 'getDiscountAmount',
            'measureId' => 'getMeasureId'
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
        $this->container['officialWebsiteAmount'] = isset($data['officialWebsiteAmount']) ? $data['officialWebsiteAmount'] : null;
        $this->container['discountAmount'] = isset($data['discountAmount']) ? $data['discountAmount'] : null;
        $this->container['measureId'] = isset($data['measureId']) ? $data['measureId'] : null;
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
            if (!is_null($this->container['measureId']) && ($this->container['measureId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'measureId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['measureId']) && ($this->container['measureId'] < 1)) {
                $invalidProperties[] = "invalid value for 'measureId', must be bigger than or equal to 1.";
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
    *  ID标识，来源于请求中的ID。
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
    * @param string|null $id ID标识，来源于请求中的ID。
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
    *  包年/包月产品的ID。
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
    * @param string|null $productId 包年/包月产品的ID。
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

