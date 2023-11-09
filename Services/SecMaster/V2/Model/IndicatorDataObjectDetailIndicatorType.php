<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IndicatorDataObjectDetailIndicatorType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IndicatorDataObjectDetail_indicator_type';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * indicatorType  情报类型
    * id  情报类型ID
    * category  目录
    * layoutId  布局ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'indicatorType' => 'string',
            'id' => 'string',
            'category' => 'string',
            'layoutId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * indicatorType  情报类型
    * id  情报类型ID
    * category  目录
    * layoutId  布局ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'indicatorType' => null,
        'id' => null,
        'category' => null,
        'layoutId' => null
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
    * indicatorType  情报类型
    * id  情报类型ID
    * category  目录
    * layoutId  布局ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'indicatorType' => 'indicator_type',
            'id' => 'id',
            'category' => 'category',
            'layoutId' => 'layout_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * indicatorType  情报类型
    * id  情报类型ID
    * category  目录
    * layoutId  布局ID
    *
    * @var string[]
    */
    protected static $setters = [
            'indicatorType' => 'setIndicatorType',
            'id' => 'setId',
            'category' => 'setCategory',
            'layoutId' => 'setLayoutId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * indicatorType  情报类型
    * id  情报类型ID
    * category  目录
    * layoutId  布局ID
    *
    * @var string[]
    */
    protected static $getters = [
            'indicatorType' => 'getIndicatorType',
            'id' => 'getId',
            'category' => 'getCategory',
            'layoutId' => 'getLayoutId'
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
        $this->container['indicatorType'] = isset($data['indicatorType']) ? $data['indicatorType'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['layoutId'] = isset($data['layoutId']) ? $data['layoutId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['indicatorType']) && (mb_strlen($this->container['indicatorType']) > 32)) {
                $invalidProperties[] = "invalid value for 'indicatorType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['indicatorType']) && (mb_strlen($this->container['indicatorType']) < 1)) {
                $invalidProperties[] = "invalid value for 'indicatorType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) > 64)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) < 1)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['layoutId']) && (mb_strlen($this->container['layoutId']) > 64)) {
                $invalidProperties[] = "invalid value for 'layoutId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['layoutId']) && (mb_strlen($this->container['layoutId']) < 1)) {
                $invalidProperties[] = "invalid value for 'layoutId', the character length must be bigger than or equal to 1.";
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
    * Gets indicatorType
    *  情报类型
    *
    * @return string|null
    */
    public function getIndicatorType()
    {
        return $this->container['indicatorType'];
    }

    /**
    * Sets indicatorType
    *
    * @param string|null $indicatorType 情报类型
    *
    * @return $this
    */
    public function setIndicatorType($indicatorType)
    {
        $this->container['indicatorType'] = $indicatorType;
        return $this;
    }

    /**
    * Gets id
    *  情报类型ID
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
    * @param string|null $id 情报类型ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets category
    *  目录
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category 目录
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets layoutId
    *  布局ID
    *
    * @return string|null
    */
    public function getLayoutId()
    {
        return $this->container['layoutId'];
    }

    /**
    * Sets layoutId
    *
    * @param string|null $layoutId 布局ID
    *
    * @return $this
    */
    public function setLayoutId($layoutId)
    {
        $this->container['layoutId'] = $layoutId;
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

