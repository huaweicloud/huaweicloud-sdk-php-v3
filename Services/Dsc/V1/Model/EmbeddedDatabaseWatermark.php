<?php

namespace HuaweiCloud\SDK\Dsc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EmbeddedDatabaseWatermark implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EmbeddedDatabaseWatermark';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * watermarkContent  添加水印的内容
    * watermarkKey  水印密钥
    * columns  字段类型列表，最大长度100。使用时，至少包含两个字段，一个“primary_key”为true表示主键，一个为false用来嵌入水印
    * data  数据字段的内容，最大支持长度2000
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'watermarkContent' => 'string',
            'watermarkKey' => 'string',
            'columns' => '\HuaweiCloud\SDK\Dsc\V1\Model\Columns[]',
            'data' => 'map[string,object][]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * watermarkContent  添加水印的内容
    * watermarkKey  水印密钥
    * columns  字段类型列表，最大长度100。使用时，至少包含两个字段，一个“primary_key”为true表示主键，一个为false用来嵌入水印
    * data  数据字段的内容，最大支持长度2000
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'watermarkContent' => null,
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
    * watermarkContent  添加水印的内容
    * watermarkKey  水印密钥
    * columns  字段类型列表，最大长度100。使用时，至少包含两个字段，一个“primary_key”为true表示主键，一个为false用来嵌入水印
    * data  数据字段的内容，最大支持长度2000
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'watermarkContent' => 'watermark_content',
            'watermarkKey' => 'watermark_key',
            'columns' => 'columns',
            'data' => 'data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * watermarkContent  添加水印的内容
    * watermarkKey  水印密钥
    * columns  字段类型列表，最大长度100。使用时，至少包含两个字段，一个“primary_key”为true表示主键，一个为false用来嵌入水印
    * data  数据字段的内容，最大支持长度2000
    *
    * @var string[]
    */
    protected static $setters = [
            'watermarkContent' => 'setWatermarkContent',
            'watermarkKey' => 'setWatermarkKey',
            'columns' => 'setColumns',
            'data' => 'setData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * watermarkContent  添加水印的内容
    * watermarkKey  水印密钥
    * columns  字段类型列表，最大长度100。使用时，至少包含两个字段，一个“primary_key”为true表示主键，一个为false用来嵌入水印
    * data  数据字段的内容，最大支持长度2000
    *
    * @var string[]
    */
    protected static $getters = [
            'watermarkContent' => 'getWatermarkContent',
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
        $this->container['watermarkContent'] = isset($data['watermarkContent']) ? $data['watermarkContent'] : null;
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
        if ($this->container['watermarkContent'] === null) {
            $invalidProperties[] = "'watermarkContent' can't be null";
        }
        if ($this->container['watermarkKey'] === null) {
            $invalidProperties[] = "'watermarkKey' can't be null";
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
    * Gets watermarkContent
    *  添加水印的内容
    *
    * @return string
    */
    public function getWatermarkContent()
    {
        return $this->container['watermarkContent'];
    }

    /**
    * Sets watermarkContent
    *
    * @param string $watermarkContent 添加水印的内容
    *
    * @return $this
    */
    public function setWatermarkContent($watermarkContent)
    {
        $this->container['watermarkContent'] = $watermarkContent;
        return $this;
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
    *  字段类型列表，最大长度100。使用时，至少包含两个字段，一个“primary_key”为true表示主键，一个为false用来嵌入水印
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
    * @param \HuaweiCloud\SDK\Dsc\V1\Model\Columns[] $columns 字段类型列表，最大长度100。使用时，至少包含两个字段，一个“primary_key”为true表示主键，一个为false用来嵌入水印
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
    *  数据字段的内容，最大支持长度2000
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
    * @param map[string,object][] $data 数据字段的内容，最大支持长度2000
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

