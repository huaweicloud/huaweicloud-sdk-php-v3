<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ColumnInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ColumnInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * columnName  列名称
    * dataType  数据类型
    * characterSetName  字符集名称
    * primaryKey  是否为主键
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'columnName' => 'string',
            'dataType' => 'string',
            'characterSetName' => 'string',
            'primaryKey' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * columnName  列名称
    * dataType  数据类型
    * characterSetName  字符集名称
    * primaryKey  是否为主键
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'columnName' => null,
        'dataType' => null,
        'characterSetName' => null,
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
    * columnName  列名称
    * dataType  数据类型
    * characterSetName  字符集名称
    * primaryKey  是否为主键
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'columnName' => 'column_name',
            'dataType' => 'data_type',
            'characterSetName' => 'character_set_name',
            'primaryKey' => 'primary_key'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * columnName  列名称
    * dataType  数据类型
    * characterSetName  字符集名称
    * primaryKey  是否为主键
    *
    * @var string[]
    */
    protected static $setters = [
            'columnName' => 'setColumnName',
            'dataType' => 'setDataType',
            'characterSetName' => 'setCharacterSetName',
            'primaryKey' => 'setPrimaryKey'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * columnName  列名称
    * dataType  数据类型
    * characterSetName  字符集名称
    * primaryKey  是否为主键
    *
    * @var string[]
    */
    protected static $getters = [
            'columnName' => 'getColumnName',
            'dataType' => 'getDataType',
            'characterSetName' => 'getCharacterSetName',
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
        $this->container['columnName'] = isset($data['columnName']) ? $data['columnName'] : null;
        $this->container['dataType'] = isset($data['dataType']) ? $data['dataType'] : null;
        $this->container['characterSetName'] = isset($data['characterSetName']) ? $data['characterSetName'] : null;
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
    * Gets columnName
    *  列名称
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
    * @param string|null $columnName 列名称
    *
    * @return $this
    */
    public function setColumnName($columnName)
    {
        $this->container['columnName'] = $columnName;
        return $this;
    }

    /**
    * Gets dataType
    *  数据类型
    *
    * @return string|null
    */
    public function getDataType()
    {
        return $this->container['dataType'];
    }

    /**
    * Sets dataType
    *
    * @param string|null $dataType 数据类型
    *
    * @return $this
    */
    public function setDataType($dataType)
    {
        $this->container['dataType'] = $dataType;
        return $this;
    }

    /**
    * Gets characterSetName
    *  字符集名称
    *
    * @return string|null
    */
    public function getCharacterSetName()
    {
        return $this->container['characterSetName'];
    }

    /**
    * Sets characterSetName
    *
    * @param string|null $characterSetName 字符集名称
    *
    * @return $this
    */
    public function setCharacterSetName($characterSetName)
    {
        $this->container['characterSetName'] = $characterSetName;
        return $this;
    }

    /**
    * Gets primaryKey
    *  是否为主键
    *
    * @return bool|null
    */
    public function getPrimaryKey()
    {
        return $this->container['primaryKey'];
    }

    /**
    * Sets primaryKey
    *
    * @param bool|null $primaryKey 是否为主键
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

