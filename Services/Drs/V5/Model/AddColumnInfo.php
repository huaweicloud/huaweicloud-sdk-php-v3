<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddColumnInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddColumnInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * columnType  列类型
    * columnName  列名称
    * columnValue  列填充值
    * dataType  填充列的数据类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'columnType' => 'string',
            'columnName' => 'string',
            'columnValue' => 'string',
            'dataType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * columnType  列类型
    * columnName  列名称
    * columnValue  列填充值
    * dataType  填充列的数据类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'columnType' => null,
        'columnName' => null,
        'columnValue' => null,
        'dataType' => null
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
    * columnType  列类型
    * columnName  列名称
    * columnValue  列填充值
    * dataType  填充列的数据类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'columnType' => 'column_type',
            'columnName' => 'column_name',
            'columnValue' => 'column_value',
            'dataType' => 'data_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * columnType  列类型
    * columnName  列名称
    * columnValue  列填充值
    * dataType  填充列的数据类型
    *
    * @var string[]
    */
    protected static $setters = [
            'columnType' => 'setColumnType',
            'columnName' => 'setColumnName',
            'columnValue' => 'setColumnValue',
            'dataType' => 'setDataType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * columnType  列类型
    * columnName  列名称
    * columnValue  列填充值
    * dataType  填充列的数据类型
    *
    * @var string[]
    */
    protected static $getters = [
            'columnType' => 'getColumnType',
            'columnName' => 'getColumnName',
            'columnValue' => 'getColumnValue',
            'dataType' => 'getDataType'
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
        $this->container['columnName'] = isset($data['columnName']) ? $data['columnName'] : null;
        $this->container['columnValue'] = isset($data['columnValue']) ? $data['columnValue'] : null;
        $this->container['dataType'] = isset($data['dataType']) ? $data['dataType'] : null;
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
    *  列类型
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
    * @param string|null $columnType 列类型
    *
    * @return $this
    */
    public function setColumnType($columnType)
    {
        $this->container['columnType'] = $columnType;
        return $this;
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
    * Gets columnValue
    *  列填充值
    *
    * @return string|null
    */
    public function getColumnValue()
    {
        return $this->container['columnValue'];
    }

    /**
    * Sets columnValue
    *
    * @param string|null $columnValue 列填充值
    *
    * @return $this
    */
    public function setColumnValue($columnValue)
    {
        $this->container['columnValue'] = $columnValue;
        return $this;
    }

    /**
    * Gets dataType
    *  填充列的数据类型
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
    * @param string|null $dataType 填充列的数据类型
    *
    * @return $this
    */
    public function setDataType($dataType)
    {
        $this->container['dataType'] = $dataType;
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

