<?php

namespace HuaweiCloud\SDK\Dsc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Columns implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Columns';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  数据的字段名称，最大支持长度256
    * type  数据的字段类型
    * primaryKey  标记该字段是否为主键。true为主键，表示用来定位水印位置；false为非主键，将在该列嵌入/提取水印内容。字段类型列表中可同时包含多个为true或为false的字段
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'type' => 'string',
            'primaryKey' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  数据的字段名称，最大支持长度256
    * type  数据的字段类型
    * primaryKey  标记该字段是否为主键。true为主键，表示用来定位水印位置；false为非主键，将在该列嵌入/提取水印内容。字段类型列表中可同时包含多个为true或为false的字段
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'type' => null,
        'primaryKey' => null
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
    * name  数据的字段名称，最大支持长度256
    * type  数据的字段类型
    * primaryKey  标记该字段是否为主键。true为主键，表示用来定位水印位置；false为非主键，将在该列嵌入/提取水印内容。字段类型列表中可同时包含多个为true或为false的字段
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'type' => 'type',
            'primaryKey' => 'primary_key'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  数据的字段名称，最大支持长度256
    * type  数据的字段类型
    * primaryKey  标记该字段是否为主键。true为主键，表示用来定位水印位置；false为非主键，将在该列嵌入/提取水印内容。字段类型列表中可同时包含多个为true或为false的字段
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'type' => 'setType',
            'primaryKey' => 'setPrimaryKey'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  数据的字段名称，最大支持长度256
    * type  数据的字段类型
    * primaryKey  标记该字段是否为主键。true为主键，表示用来定位水印位置；false为非主键，将在该列嵌入/提取水印内容。字段类型列表中可同时包含多个为true或为false的字段
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'type' => 'getType',
            'primaryKey' => 'getPrimaryKey'
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
    const TYPE_INTEGER = 'INTEGER';
    const TYPE_STRING = 'STRING';
    const TYPE_DOUBLE = 'DOUBLE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_INTEGER,
            self::TYPE_STRING,
            self::TYPE_DOUBLE,
        ];
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['primaryKey'] = isset($data['primaryKey']) ? $data['primaryKey'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['primaryKey'] === null) {
            $invalidProperties[] = "'primaryKey' can't be null";
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
    * Gets name
    *  数据的字段名称，最大支持长度256
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 数据的字段名称，最大支持长度256
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  数据的字段类型
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 数据的字段类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets primaryKey
    *  标记该字段是否为主键。true为主键，表示用来定位水印位置；false为非主键，将在该列嵌入/提取水印内容。字段类型列表中可同时包含多个为true或为false的字段
    *
    * @return bool
    */
    public function getPrimaryKey()
    {
        return $this->container['primaryKey'];
    }

    /**
    * Sets primaryKey
    *
    * @param bool $primaryKey 标记该字段是否为主键。true为主键，表示用来定位水印位置；false为非主键，将在该列嵌入/提取水印内容。字段类型列表中可同时包含多个为true或为false的字段
    *
    * @return $this
    */
    public function setPrimaryKey($primaryKey)
    {
        $this->container['primaryKey'] = $primaryKey;
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

