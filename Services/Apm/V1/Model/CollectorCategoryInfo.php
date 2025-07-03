<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CollectorCategoryInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CollectorCategoryInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * categoryId  采集器类别id。
    * categoryName  采集器类别名称。
    * displayName  采集器类别展示名称。
    * sequence  序列号。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'categoryId' => 'int',
            'categoryName' => 'string',
            'displayName' => 'string',
            'sequence' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * categoryId  采集器类别id。
    * categoryName  采集器类别名称。
    * displayName  采集器类别展示名称。
    * sequence  序列号。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'categoryId' => 'int32',
        'categoryName' => null,
        'displayName' => null,
        'sequence' => 'int32'
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
    * categoryId  采集器类别id。
    * categoryName  采集器类别名称。
    * displayName  采集器类别展示名称。
    * sequence  序列号。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'categoryId' => 'category_id',
            'categoryName' => 'category_name',
            'displayName' => 'display_name',
            'sequence' => 'sequence'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * categoryId  采集器类别id。
    * categoryName  采集器类别名称。
    * displayName  采集器类别展示名称。
    * sequence  序列号。
    *
    * @var string[]
    */
    protected static $setters = [
            'categoryId' => 'setCategoryId',
            'categoryName' => 'setCategoryName',
            'displayName' => 'setDisplayName',
            'sequence' => 'setSequence'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * categoryId  采集器类别id。
    * categoryName  采集器类别名称。
    * displayName  采集器类别展示名称。
    * sequence  序列号。
    *
    * @var string[]
    */
    protected static $getters = [
            'categoryId' => 'getCategoryId',
            'categoryName' => 'getCategoryName',
            'displayName' => 'getDisplayName',
            'sequence' => 'getSequence'
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
        $this->container['categoryId'] = isset($data['categoryId']) ? $data['categoryId'] : null;
        $this->container['categoryName'] = isset($data['categoryName']) ? $data['categoryName'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
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
    * Gets categoryId
    *  采集器类别id。
    *
    * @return int|null
    */
    public function getCategoryId()
    {
        return $this->container['categoryId'];
    }

    /**
    * Sets categoryId
    *
    * @param int|null $categoryId 采集器类别id。
    *
    * @return $this
    */
    public function setCategoryId($categoryId)
    {
        $this->container['categoryId'] = $categoryId;
        return $this;
    }

    /**
    * Gets categoryName
    *  采集器类别名称。
    *
    * @return string|null
    */
    public function getCategoryName()
    {
        return $this->container['categoryName'];
    }

    /**
    * Sets categoryName
    *
    * @param string|null $categoryName 采集器类别名称。
    *
    * @return $this
    */
    public function setCategoryName($categoryName)
    {
        $this->container['categoryName'] = $categoryName;
        return $this;
    }

    /**
    * Gets displayName
    *  采集器类别展示名称。
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName 采集器类别展示名称。
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets sequence
    *  序列号。
    *
    * @return int|null
    */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
    * Sets sequence
    *
    * @param int|null $sequence 序列号。
    *
    * @return $this
    */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;
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

