<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OfficialWebsiteRatingResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OfficialWebsiteRatingResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * officialWebsiteAmount  |参数名称：官网价| |参数约束及描述：官网价|
    * measureId  |参数名称：度量单位标识1：元|
    * productRatingResults  |参数名称：产品询价结果| |参数的约束及描述：产品询价结果|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'officialWebsiteAmount' => 'float',
            'measureId' => 'int',
            'productRatingResults' => '\HuaweiCloud\SDK\Bssintl\V2\Model\PeriodProductOfficialRatingResult[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * officialWebsiteAmount  |参数名称：官网价| |参数约束及描述：官网价|
    * measureId  |参数名称：度量单位标识1：元|
    * productRatingResults  |参数名称：产品询价结果| |参数的约束及描述：产品询价结果|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'officialWebsiteAmount' => 'bigdecimal',
        'measureId' => 'int32',
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
    * officialWebsiteAmount  |参数名称：官网价| |参数约束及描述：官网价|
    * measureId  |参数名称：度量单位标识1：元|
    * productRatingResults  |参数名称：产品询价结果| |参数的约束及描述：产品询价结果|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'officialWebsiteAmount' => 'official_website_amount',
            'measureId' => 'measure_id',
            'productRatingResults' => 'product_rating_results'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * officialWebsiteAmount  |参数名称：官网价| |参数约束及描述：官网价|
    * measureId  |参数名称：度量单位标识1：元|
    * productRatingResults  |参数名称：产品询价结果| |参数的约束及描述：产品询价结果|
    *
    * @var string[]
    */
    protected static $setters = [
            'officialWebsiteAmount' => 'setOfficialWebsiteAmount',
            'measureId' => 'setMeasureId',
            'productRatingResults' => 'setProductRatingResults'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * officialWebsiteAmount  |参数名称：官网价| |参数约束及描述：官网价|
    * measureId  |参数名称：度量单位标识1：元|
    * productRatingResults  |参数名称：产品询价结果| |参数的约束及描述：产品询价结果|
    *
    * @var string[]
    */
    protected static $getters = [
            'officialWebsiteAmount' => 'getOfficialWebsiteAmount',
            'measureId' => 'getMeasureId',
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
        $this->container['officialWebsiteAmount'] = isset($data['officialWebsiteAmount']) ? $data['officialWebsiteAmount'] : null;
        $this->container['measureId'] = isset($data['measureId']) ? $data['measureId'] : null;
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
    * Gets officialWebsiteAmount
    *  |参数名称：官网价| |参数约束及描述：官网价|
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
    * @param float|null $officialWebsiteAmount |参数名称：官网价| |参数约束及描述：官网价|
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
    *  |参数名称：度量单位标识1：元|
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
    * @param int|null $measureId |参数名称：度量单位标识1：元|
    *
    * @return $this
    */
    public function setMeasureId($measureId)
    {
        $this->container['measureId'] = $measureId;
        return $this;
    }

    /**
    * Gets productRatingResults
    *  |参数名称：产品询价结果| |参数的约束及描述：产品询价结果|
    *
    * @return \HuaweiCloud\SDK\Bssintl\V2\Model\PeriodProductOfficialRatingResult[]|null
    */
    public function getProductRatingResults()
    {
        return $this->container['productRatingResults'];
    }

    /**
    * Sets productRatingResults
    *
    * @param \HuaweiCloud\SDK\Bssintl\V2\Model\PeriodProductOfficialRatingResult[]|null $productRatingResults |参数名称：产品询价结果| |参数的约束及描述：产品询价结果|
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

