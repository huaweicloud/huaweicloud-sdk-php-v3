<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QualificationCategoryConfidence implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QualificationCategoryConfidence';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * category  诚信考核信息（非必有，依赖对应从业资格证板式）。
    * initialIssueDate  初次领证日期（非必有，依赖对应从业资格证板式）
    * issueDate  有效起始日期（非必有，依赖对应从业资格证板式）
    * expiryDate  有效期至
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'category' => 'float',
            'initialIssueDate' => 'float',
            'issueDate' => 'float',
            'expiryDate' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * category  诚信考核信息（非必有，依赖对应从业资格证板式）。
    * initialIssueDate  初次领证日期（非必有，依赖对应从业资格证板式）
    * issueDate  有效起始日期（非必有，依赖对应从业资格证板式）
    * expiryDate  有效期至
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'category' => 'float',
        'initialIssueDate' => 'float',
        'issueDate' => 'float',
        'expiryDate' => 'float'
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
    * category  诚信考核信息（非必有，依赖对应从业资格证板式）。
    * initialIssueDate  初次领证日期（非必有，依赖对应从业资格证板式）
    * issueDate  有效起始日期（非必有，依赖对应从业资格证板式）
    * expiryDate  有效期至
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'category' => 'category',
            'initialIssueDate' => 'initial_issue_date',
            'issueDate' => 'issue_date',
            'expiryDate' => 'expiry_date'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * category  诚信考核信息（非必有，依赖对应从业资格证板式）。
    * initialIssueDate  初次领证日期（非必有，依赖对应从业资格证板式）
    * issueDate  有效起始日期（非必有，依赖对应从业资格证板式）
    * expiryDate  有效期至
    *
    * @var string[]
    */
    protected static $setters = [
            'category' => 'setCategory',
            'initialIssueDate' => 'setInitialIssueDate',
            'issueDate' => 'setIssueDate',
            'expiryDate' => 'setExpiryDate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * category  诚信考核信息（非必有，依赖对应从业资格证板式）。
    * initialIssueDate  初次领证日期（非必有，依赖对应从业资格证板式）
    * issueDate  有效起始日期（非必有，依赖对应从业资格证板式）
    * expiryDate  有效期至
    *
    * @var string[]
    */
    protected static $getters = [
            'category' => 'getCategory',
            'initialIssueDate' => 'getInitialIssueDate',
            'issueDate' => 'getIssueDate',
            'expiryDate' => 'getExpiryDate'
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['initialIssueDate'] = isset($data['initialIssueDate']) ? $data['initialIssueDate'] : null;
        $this->container['issueDate'] = isset($data['issueDate']) ? $data['issueDate'] : null;
        $this->container['expiryDate'] = isset($data['expiryDate']) ? $data['expiryDate'] : null;
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
    * Gets category
    *  诚信考核信息（非必有，依赖对应从业资格证板式）。
    *
    * @return float|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param float|null $category 诚信考核信息（非必有，依赖对应从业资格证板式）。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets initialIssueDate
    *  初次领证日期（非必有，依赖对应从业资格证板式）
    *
    * @return float|null
    */
    public function getInitialIssueDate()
    {
        return $this->container['initialIssueDate'];
    }

    /**
    * Sets initialIssueDate
    *
    * @param float|null $initialIssueDate 初次领证日期（非必有，依赖对应从业资格证板式）
    *
    * @return $this
    */
    public function setInitialIssueDate($initialIssueDate)
    {
        $this->container['initialIssueDate'] = $initialIssueDate;
        return $this;
    }

    /**
    * Gets issueDate
    *  有效起始日期（非必有，依赖对应从业资格证板式）
    *
    * @return float|null
    */
    public function getIssueDate()
    {
        return $this->container['issueDate'];
    }

    /**
    * Sets issueDate
    *
    * @param float|null $issueDate 有效起始日期（非必有，依赖对应从业资格证板式）
    *
    * @return $this
    */
    public function setIssueDate($issueDate)
    {
        $this->container['issueDate'] = $issueDate;
        return $this;
    }

    /**
    * Gets expiryDate
    *  有效期至
    *
    * @return float|null
    */
    public function getExpiryDate()
    {
        return $this->container['expiryDate'];
    }

    /**
    * Sets expiryDate
    *
    * @param float|null $expiryDate 有效期至
    *
    * @return $this
    */
    public function setExpiryDate($expiryDate)
    {
        $this->container['expiryDate'] = $expiryDate;
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

