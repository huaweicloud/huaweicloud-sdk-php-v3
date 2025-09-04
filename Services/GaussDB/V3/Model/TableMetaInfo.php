<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TableMetaInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TableMetaInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * columnType  列的数据类型
    * extra  额外的信息，例如是否是自动递增列
    * isNullable  是否允许为NULL
    * columnDefault  列的默认值
    * columnKey  是否是索引列
    * columnName  列名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'columnType' => 'string',
            'extra' => 'string',
            'isNullable' => 'string',
            'columnDefault' => 'string',
            'columnKey' => 'string',
            'columnName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * columnType  列的数据类型
    * extra  额外的信息，例如是否是自动递增列
    * isNullable  是否允许为NULL
    * columnDefault  列的默认值
    * columnKey  是否是索引列
    * columnName  列名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'columnType' => null,
        'extra' => null,
        'isNullable' => null,
        'columnDefault' => null,
        'columnKey' => null,
        'columnName' => null
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
    * columnType  列的数据类型
    * extra  额外的信息，例如是否是自动递增列
    * isNullable  是否允许为NULL
    * columnDefault  列的默认值
    * columnKey  是否是索引列
    * columnName  列名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'columnType' => 'column_type',
            'extra' => 'extra',
            'isNullable' => 'is_nullable',
            'columnDefault' => 'column_default',
            'columnKey' => 'column_key',
            'columnName' => 'column_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * columnType  列的数据类型
    * extra  额外的信息，例如是否是自动递增列
    * isNullable  是否允许为NULL
    * columnDefault  列的默认值
    * columnKey  是否是索引列
    * columnName  列名
    *
    * @var string[]
    */
    protected static $setters = [
            'columnType' => 'setColumnType',
            'extra' => 'setExtra',
            'isNullable' => 'setIsNullable',
            'columnDefault' => 'setColumnDefault',
            'columnKey' => 'setColumnKey',
            'columnName' => 'setColumnName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * columnType  列的数据类型
    * extra  额外的信息，例如是否是自动递增列
    * isNullable  是否允许为NULL
    * columnDefault  列的默认值
    * columnKey  是否是索引列
    * columnName  列名
    *
    * @var string[]
    */
    protected static $getters = [
            'columnType' => 'getColumnType',
            'extra' => 'getExtra',
            'isNullable' => 'getIsNullable',
            'columnDefault' => 'getColumnDefault',
            'columnKey' => 'getColumnKey',
            'columnName' => 'getColumnName'
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
        $this->container['columnType'] = isset($data['columnType']) ? $data['columnType'] : null;
        $this->container['extra'] = isset($data['extra']) ? $data['extra'] : null;
        $this->container['isNullable'] = isset($data['isNullable']) ? $data['isNullable'] : null;
        $this->container['columnDefault'] = isset($data['columnDefault']) ? $data['columnDefault'] : null;
        $this->container['columnKey'] = isset($data['columnKey']) ? $data['columnKey'] : null;
        $this->container['columnName'] = isset($data['columnName']) ? $data['columnName'] : null;
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
    * Gets columnType
    *  列的数据类型
    *
    * @return string|null
    */
    public function getColumnType()
    {
        return $this->container['columnType'];
    }

    /**
    * Sets columnType
    *
    * @param string|null $columnType 列的数据类型
    *
    * @return $this
    */
    public function setColumnType($columnType)
    {
        $this->container['columnType'] = $columnType;
        return $this;
    }

    /**
    * Gets extra
    *  额外的信息，例如是否是自动递增列
    *
    * @return string|null
    */
    public function getExtra()
    {
        return $this->container['extra'];
    }

    /**
    * Sets extra
    *
    * @param string|null $extra 额外的信息，例如是否是自动递增列
    *
    * @return $this
    */
    public function setExtra($extra)
    {
        $this->container['extra'] = $extra;
        return $this;
    }

    /**
    * Gets isNullable
    *  是否允许为NULL
    *
    * @return string|null
    */
    public function getIsNullable()
    {
        return $this->container['isNullable'];
    }

    /**
    * Sets isNullable
    *
    * @param string|null $isNullable 是否允许为NULL
    *
    * @return $this
    */
    public function setIsNullable($isNullable)
    {
        $this->container['isNullable'] = $isNullable;
        return $this;
    }

    /**
    * Gets columnDefault
    *  列的默认值
    *
    * @return string|null
    */
    public function getColumnDefault()
    {
        return $this->container['columnDefault'];
    }

    /**
    * Sets columnDefault
    *
    * @param string|null $columnDefault 列的默认值
    *
    * @return $this
    */
    public function setColumnDefault($columnDefault)
    {
        $this->container['columnDefault'] = $columnDefault;
        return $this;
    }

    /**
    * Gets columnKey
    *  是否是索引列
    *
    * @return string|null
    */
    public function getColumnKey()
    {
        return $this->container['columnKey'];
    }

    /**
    * Sets columnKey
    *
    * @param string|null $columnKey 是否是索引列
    *
    * @return $this
    */
    public function setColumnKey($columnKey)
    {
        $this->container['columnKey'] = $columnKey;
        return $this;
    }

    /**
    * Gets columnName
    *  列名
    *
    * @return string|null
    */
    public function getColumnName()
    {
        return $this->container['columnName'];
    }

    /**
    * Sets columnName
    *
    * @param string|null $columnName 列名
    *
    * @return $this
    */
    public function setColumnName($columnName)
    {
        $this->container['columnName'] = $columnName;
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

