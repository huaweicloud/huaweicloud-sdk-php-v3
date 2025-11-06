<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDefaultReviewCategoriesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDefaultReviewCategoriesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * codehubDefaultCategories  **参数解释：** 检视意见分类(所有可勾选的，需传参with_default_review_categories: true才返回)。
    * hicodeDefaultCategories  **参数解释：** 系统预置检视意见分类(需传参with_default_review_categories: true才返回)。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'codehubDefaultCategories' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CategoryDto[]',
            'hicodeDefaultCategories' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CategoryDto[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * codehubDefaultCategories  **参数解释：** 检视意见分类(所有可勾选的，需传参with_default_review_categories: true才返回)。
    * hicodeDefaultCategories  **参数解释：** 系统预置检视意见分类(需传参with_default_review_categories: true才返回)。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'codehubDefaultCategories' => null,
        'hicodeDefaultCategories' => null
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
    * codehubDefaultCategories  **参数解释：** 检视意见分类(所有可勾选的，需传参with_default_review_categories: true才返回)。
    * hicodeDefaultCategories  **参数解释：** 系统预置检视意见分类(需传参with_default_review_categories: true才返回)。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'codehubDefaultCategories' => 'codehub_default_categories',
            'hicodeDefaultCategories' => 'hicode_default_categories'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * codehubDefaultCategories  **参数解释：** 检视意见分类(所有可勾选的，需传参with_default_review_categories: true才返回)。
    * hicodeDefaultCategories  **参数解释：** 系统预置检视意见分类(需传参with_default_review_categories: true才返回)。
    *
    * @var string[]
    */
    protected static $setters = [
            'codehubDefaultCategories' => 'setCodehubDefaultCategories',
            'hicodeDefaultCategories' => 'setHicodeDefaultCategories'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * codehubDefaultCategories  **参数解释：** 检视意见分类(所有可勾选的，需传参with_default_review_categories: true才返回)。
    * hicodeDefaultCategories  **参数解释：** 系统预置检视意见分类(需传参with_default_review_categories: true才返回)。
    *
    * @var string[]
    */
    protected static $getters = [
            'codehubDefaultCategories' => 'getCodehubDefaultCategories',
            'hicodeDefaultCategories' => 'getHicodeDefaultCategories'
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
        $this->container['codehubDefaultCategories'] = isset($data['codehubDefaultCategories']) ? $data['codehubDefaultCategories'] : null;
        $this->container['hicodeDefaultCategories'] = isset($data['hicodeDefaultCategories']) ? $data['hicodeDefaultCategories'] : null;
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
    * Gets codehubDefaultCategories
    *  **参数解释：** 检视意见分类(所有可勾选的，需传参with_default_review_categories: true才返回)。
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CategoryDto[]|null
    */
    public function getCodehubDefaultCategories()
    {
        return $this->container['codehubDefaultCategories'];
    }

    /**
    * Sets codehubDefaultCategories
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CategoryDto[]|null $codehubDefaultCategories **参数解释：** 检视意见分类(所有可勾选的，需传参with_default_review_categories: true才返回)。
    *
    * @return $this
    */
    public function setCodehubDefaultCategories($codehubDefaultCategories)
    {
        $this->container['codehubDefaultCategories'] = $codehubDefaultCategories;
        return $this;
    }

    /**
    * Gets hicodeDefaultCategories
    *  **参数解释：** 系统预置检视意见分类(需传参with_default_review_categories: true才返回)。
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CategoryDto[]|null
    */
    public function getHicodeDefaultCategories()
    {
        return $this->container['hicodeDefaultCategories'];
    }

    /**
    * Sets hicodeDefaultCategories
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CategoryDto[]|null $hicodeDefaultCategories **参数解释：** 系统预置检视意见分类(需传参with_default_review_categories: true才返回)。
    *
    * @return $this
    */
    public function setHicodeDefaultCategories($hicodeDefaultCategories)
    {
        $this->container['hicodeDefaultCategories'] = $hicodeDefaultCategories;
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

