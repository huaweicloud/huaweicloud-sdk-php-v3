<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CategoryDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'categoryDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * key  **参数解释：** 检视意见分类key。
    * nameZh  **参数解释：** 检视意见分类中文名。
    * nameEn  **参数解释：** 检视意见分类英文名。
    * subCategories  **参数解释：** 子检视意见分类。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'key' => 'string',
            'nameZh' => 'string',
            'nameEn' => 'string',
            'subCategories' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CategoryDto[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * key  **参数解释：** 检视意见分类key。
    * nameZh  **参数解释：** 检视意见分类中文名。
    * nameEn  **参数解释：** 检视意见分类英文名。
    * subCategories  **参数解释：** 子检视意见分类。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'key' => null,
        'nameZh' => null,
        'nameEn' => null,
        'subCategories' => null
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
    * key  **参数解释：** 检视意见分类key。
    * nameZh  **参数解释：** 检视意见分类中文名。
    * nameEn  **参数解释：** 检视意见分类英文名。
    * subCategories  **参数解释：** 子检视意见分类。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'key' => 'key',
            'nameZh' => 'name_zh',
            'nameEn' => 'name_en',
            'subCategories' => 'sub_categories'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * key  **参数解释：** 检视意见分类key。
    * nameZh  **参数解释：** 检视意见分类中文名。
    * nameEn  **参数解释：** 检视意见分类英文名。
    * subCategories  **参数解释：** 子检视意见分类。
    *
    * @var string[]
    */
    protected static $setters = [
            'key' => 'setKey',
            'nameZh' => 'setNameZh',
            'nameEn' => 'setNameEn',
            'subCategories' => 'setSubCategories'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * key  **参数解释：** 检视意见分类key。
    * nameZh  **参数解释：** 检视意见分类中文名。
    * nameEn  **参数解释：** 检视意见分类英文名。
    * subCategories  **参数解释：** 子检视意见分类。
    *
    * @var string[]
    */
    protected static $getters = [
            'key' => 'getKey',
            'nameZh' => 'getNameZh',
            'nameEn' => 'getNameEn',
            'subCategories' => 'getSubCategories'
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
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['nameZh'] = isset($data['nameZh']) ? $data['nameZh'] : null;
        $this->container['nameEn'] = isset($data['nameEn']) ? $data['nameEn'] : null;
        $this->container['subCategories'] = isset($data['subCategories']) ? $data['subCategories'] : null;
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
    * Gets key
    *  **参数解释：** 检视意见分类key。
    *
    * @return string|null
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string|null $key **参数解释：** 检视意见分类key。
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets nameZh
    *  **参数解释：** 检视意见分类中文名。
    *
    * @return string|null
    */
    public function getNameZh()
    {
        return $this->container['nameZh'];
    }

    /**
    * Sets nameZh
    *
    * @param string|null $nameZh **参数解释：** 检视意见分类中文名。
    *
    * @return $this
    */
    public function setNameZh($nameZh)
    {
        $this->container['nameZh'] = $nameZh;
        return $this;
    }

    /**
    * Gets nameEn
    *  **参数解释：** 检视意见分类英文名。
    *
    * @return string|null
    */
    public function getNameEn()
    {
        return $this->container['nameEn'];
    }

    /**
    * Sets nameEn
    *
    * @param string|null $nameEn **参数解释：** 检视意见分类英文名。
    *
    * @return $this
    */
    public function setNameEn($nameEn)
    {
        $this->container['nameEn'] = $nameEn;
        return $this;
    }

    /**
    * Gets subCategories
    *  **参数解释：** 子检视意见分类。
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CategoryDto[]|null
    */
    public function getSubCategories()
    {
        return $this->container['subCategories'];
    }

    /**
    * Sets subCategories
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CategoryDto[]|null $subCategories **参数解释：** 子检视意见分类。
    *
    * @return $this
    */
    public function setSubCategories($subCategories)
    {
        $this->container['subCategories'] = $subCategories;
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

