<?php

namespace HuaweiCloud\SDK\Dsc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExtractedDatabaseWatermark implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExtractedDatabaseWatermark';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * watermarkKey  水印密钥
    * columns  字段类型列表，最大长度100。使用时，要包含嵌入时所有“primary_key”为true的字段，和至少一个为false的字段用来提取水印
    * data  水印数据，数据条数不超过30,000条
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'watermarkKey' => 'string',
            'columns' => '\HuaweiCloud\SDK\Dsc\V1\Model\Columns[]',
            'data' => 'map[string,object][]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * watermarkKey  水印密钥
    * columns  字段类型列表，最大长度100。使用时，要包含嵌入时所有“primary_key”为true的字段，和至少一个为false的字段用来提取水印
    * data  水印数据，数据条数不超过30,000条
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'watermarkKey' => null,
        'columns' => null,
        'data' => null
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
    * watermarkKey  水印密钥
    * columns  字段类型列表，最大长度100。使用时，要包含嵌入时所有“primary_key”为true的字段，和至少一个为false的字段用来提取水印
    * data  水印数据，数据条数不超过30,000条
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'watermarkKey' => 'watermark_key',
            'columns' => 'columns',
            'data' => 'data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * watermarkKey  水印密钥
    * columns  字段类型列表，最大长度100。使用时，要包含嵌入时所有“primary_key”为true的字段，和至少一个为false的字段用来提取水印
    * data  水印数据，数据条数不超过30,000条
    *
    * @var string[]
    */
    protected static $setters = [
            'watermarkKey' => 'setWatermarkKey',
            'columns' => 'setColumns',
            'data' => 'setData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * watermarkKey  水印密钥
    * columns  字段类型列表，最大长度100。使用时，要包含嵌入时所有“primary_key”为true的字段，和至少一个为false的字段用来提取水印
    * data  水印数据，数据条数不超过30,000条
    *
    * @var string[]
    */
    protected static $getters = [
            'watermarkKey' => 'getWatermarkKey',
            'columns' => 'getColumns',
            'data' => 'getData'
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
        $this->container['watermarkKey'] = isset($data['watermarkKey']) ? $data['watermarkKey'] : null;
        $this->container['columns'] = isset($data['columns']) ? $data['columns'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['watermarkKey'] === null) {
            $invalidProperties[] = "'watermarkKey' can't be null";
        }
            if ((mb_strlen($this->container['watermarkKey']) > 32)) {
                $invalidProperties[] = "invalid value for 'watermarkKey', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['watermarkKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'watermarkKey', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['columns'] === null) {
            $invalidProperties[] = "'columns' can't be null";
        }
        if ($this->container['data'] === null) {
            $invalidProperties[] = "'data' can't be null";
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
    * Gets watermarkKey
    *  水印密钥
    *
    * @return string
    */
    public function getWatermarkKey()
    {
        return $this->container['watermarkKey'];
    }

    /**
    * Sets watermarkKey
    *
    * @param string $watermarkKey 水印密钥
    *
    * @return $this
    */
    public function setWatermarkKey($watermarkKey)
    {
        $this->container['watermarkKey'] = $watermarkKey;
        return $this;
    }

    /**
    * Gets columns
    *  字段类型列表，最大长度100。使用时，要包含嵌入时所有“primary_key”为true的字段，和至少一个为false的字段用来提取水印
    *
    * @return \HuaweiCloud\SDK\Dsc\V1\Model\Columns[]
    */
    public function getColumns()
    {
        return $this->container['columns'];
    }

    /**
    * Sets columns
    *
    * @param \HuaweiCloud\SDK\Dsc\V1\Model\Columns[] $columns 字段类型列表，最大长度100。使用时，要包含嵌入时所有“primary_key”为true的字段，和至少一个为false的字段用来提取水印
    *
    * @return $this
    */
    public function setColumns($columns)
    {
        $this->container['columns'] = $columns;
        return $this;
    }

    /**
    * Gets data
    *  水印数据，数据条数不超过30,000条
    *
    * @return map[string,object][]
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param map[string,object][] $data 水印数据，数据条数不超过30,000条
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
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

