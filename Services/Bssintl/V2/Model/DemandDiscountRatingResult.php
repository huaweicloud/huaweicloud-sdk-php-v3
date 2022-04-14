<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DemandDiscountRatingResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DemandDiscountRatingResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * discountId  优惠标识ID。
    * discountType  折扣优惠类型。 合同商务折扣：605：华为云BE场景下的合同商务折扣606：分销商BE场景下的合同商务折扣 伙伴授予折扣：607：合作伙伴授予折扣-折扣率
    * amount  折扣的金额。
    * measureId  度量单位标识。 1：元
    * discountName  折扣名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'discountId' => 'string',
            'discountType' => 'int',
            'amount' => 'double',
            'measureId' => 'int',
            'discountName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * discountId  优惠标识ID。
    * discountType  折扣优惠类型。 合同商务折扣：605：华为云BE场景下的合同商务折扣606：分销商BE场景下的合同商务折扣 伙伴授予折扣：607：合作伙伴授予折扣-折扣率
    * amount  折扣的金额。
    * measureId  度量单位标识。 1：元
    * discountName  折扣名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'discountId' => null,
        'discountType' => 'int32',
        'amount' => 'double',
        'measureId' => 'int32',
        'discountName' => null
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
    * discountId  优惠标识ID。
    * discountType  折扣优惠类型。 合同商务折扣：605：华为云BE场景下的合同商务折扣606：分销商BE场景下的合同商务折扣 伙伴授予折扣：607：合作伙伴授予折扣-折扣率
    * amount  折扣的金额。
    * measureId  度量单位标识。 1：元
    * discountName  折扣名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'discountId' => 'discount_id',
            'discountType' => 'discount_type',
            'amount' => 'amount',
            'measureId' => 'measure_id',
            'discountName' => 'discount_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * discountId  优惠标识ID。
    * discountType  折扣优惠类型。 合同商务折扣：605：华为云BE场景下的合同商务折扣606：分销商BE场景下的合同商务折扣 伙伴授予折扣：607：合作伙伴授予折扣-折扣率
    * amount  折扣的金额。
    * measureId  度量单位标识。 1：元
    * discountName  折扣名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'discountId' => 'setDiscountId',
            'discountType' => 'setDiscountType',
            'amount' => 'setAmount',
            'measureId' => 'setMeasureId',
            'discountName' => 'setDiscountName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * discountId  优惠标识ID。
    * discountType  折扣优惠类型。 合同商务折扣：605：华为云BE场景下的合同商务折扣606：分销商BE场景下的合同商务折扣 伙伴授予折扣：607：合作伙伴授予折扣-折扣率
    * amount  折扣的金额。
    * measureId  度量单位标识。 1：元
    * discountName  折扣名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'discountId' => 'getDiscountId',
            'discountType' => 'getDiscountType',
            'amount' => 'getAmount',
            'measureId' => 'getMeasureId',
            'discountName' => 'getDiscountName'
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
        $this->container['discountType'] = isset($data['discountType']) ? $data['discountType'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['measureId'] = isset($data['measureId']) ? $data['measureId'] : null;
        $this->container['discountName'] = isset($data['discountName']) ? $data['discountName'] : null;
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
    *  优惠标识ID。
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
    * @param string|null $discountId 优惠标识ID。
    *
    * @return $this
    */
    public function setDiscountId($discountId)
    {
        $this->container['discountId'] = $discountId;
        return $this;
    }

    /**
    * Gets discountType
    *  折扣优惠类型。 合同商务折扣：605：华为云BE场景下的合同商务折扣606：分销商BE场景下的合同商务折扣 伙伴授予折扣：607：合作伙伴授予折扣-折扣率
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
    * @param int|null $discountType 折扣优惠类型。 合同商务折扣：605：华为云BE场景下的合同商务折扣606：分销商BE场景下的合同商务折扣 伙伴授予折扣：607：合作伙伴授予折扣-折扣率
    *
    * @return $this
    */
    public function setDiscountType($discountType)
    {
        $this->container['discountType'] = $discountType;
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

