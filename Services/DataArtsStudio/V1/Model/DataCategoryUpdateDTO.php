<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataCategoryUpdateDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataCategoryUpdateDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * categoryName  分类名称。
    * description  分类描述。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'categoryName' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * categoryName  分类名称。
    * description  分类描述。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'categoryName' => null,
        'description' => null
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
    * categoryName  分类名称。
    * description  分类描述。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'categoryName' => 'category_name',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * categoryName  分类名称。
    * description  分类描述。
    *
    * @var string[]
    */
    protected static $setters = [
            'categoryName' => 'setCategoryName',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * categoryName  分类名称。
    * description  分类描述。
    *
    * @var string[]
    */
    protected static $getters = [
            'categoryName' => 'getCategoryName',
            'description' => 'getDescription'
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
        $this->container['categoryName'] = isset($data['categoryName']) ? $data['categoryName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['categoryName'] === null) {
            $invalidProperties[] = "'categoryName' can't be null";
        }
            if ((mb_strlen($this->container['categoryName']) > 128)) {
                $invalidProperties[] = "invalid value for 'categoryName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['categoryName']) < 1)) {
                $invalidProperties[] = "invalid value for 'categoryName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    * Gets categoryName
    *  分类名称。
    *
    * @return string
    */
    public function getCategoryName()
    {
        return $this->container['categoryName'];
    }

    /**
    * Sets categoryName
    *
    * @param string $categoryName 分类名称。
    *
    * @return $this
    */
    public function setCategoryName($categoryName)
    {
        $this->container['categoryName'] = $categoryName;
        return $this;
    }

    /**
    * Gets description
    *  分类描述。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 分类描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

