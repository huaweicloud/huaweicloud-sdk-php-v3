<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryColumnInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryColumnInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * columnName  列名
    * columnType  列类型
    * primaryKeyOrUniqueIndex  主键或者唯一索引
    * columnMappedName  列映射后的名称
    * isFiltered  该列是否过滤
    * isPartitionKey  该列是否partitionKey
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'columnName' => 'string',
            'columnType' => 'string',
            'primaryKeyOrUniqueIndex' => 'string',
            'columnMappedName' => 'string',
            'isFiltered' => 'bool',
            'isPartitionKey' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * columnName  列名
    * columnType  列类型
    * primaryKeyOrUniqueIndex  主键或者唯一索引
    * columnMappedName  列映射后的名称
    * isFiltered  该列是否过滤
    * isPartitionKey  该列是否partitionKey
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'columnName' => null,
        'columnType' => null,
        'primaryKeyOrUniqueIndex' => null,
        'columnMappedName' => null,
        'isFiltered' => null,
        'isPartitionKey' => null
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
    * columnName  列名
    * columnType  列类型
    * primaryKeyOrUniqueIndex  主键或者唯一索引
    * columnMappedName  列映射后的名称
    * isFiltered  该列是否过滤
    * isPartitionKey  该列是否partitionKey
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'columnName' => 'column_name',
            'columnType' => 'column_type',
            'primaryKeyOrUniqueIndex' => 'primary_key_or_unique_index',
            'columnMappedName' => 'column_mapped_name',
            'isFiltered' => 'is_filtered',
            'isPartitionKey' => 'is_partition_key'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * columnName  列名
    * columnType  列类型
    * primaryKeyOrUniqueIndex  主键或者唯一索引
    * columnMappedName  列映射后的名称
    * isFiltered  该列是否过滤
    * isPartitionKey  该列是否partitionKey
    *
    * @var string[]
    */
    protected static $setters = [
            'columnName' => 'setColumnName',
            'columnType' => 'setColumnType',
            'primaryKeyOrUniqueIndex' => 'setPrimaryKeyOrUniqueIndex',
            'columnMappedName' => 'setColumnMappedName',
            'isFiltered' => 'setIsFiltered',
            'isPartitionKey' => 'setIsPartitionKey'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * columnName  列名
    * columnType  列类型
    * primaryKeyOrUniqueIndex  主键或者唯一索引
    * columnMappedName  列映射后的名称
    * isFiltered  该列是否过滤
    * isPartitionKey  该列是否partitionKey
    *
    * @var string[]
    */
    protected static $getters = [
            'columnName' => 'getColumnName',
            'columnType' => 'getColumnType',
            'primaryKeyOrUniqueIndex' => 'getPrimaryKeyOrUniqueIndex',
            'columnMappedName' => 'getColumnMappedName',
            'isFiltered' => 'getIsFiltered',
            'isPartitionKey' => 'getIsPartitionKey'
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
        $this->container['columnType'] = isset($data['columnType']) ? $data['columnType'] : null;
        $this->container['primaryKeyOrUniqueIndex'] = isset($data['primaryKeyOrUniqueIndex']) ? $data['primaryKeyOrUniqueIndex'] : null;
        $this->container['columnMappedName'] = isset($data['columnMappedName']) ? $data['columnMappedName'] : null;
        $this->container['isFiltered'] = isset($data['isFiltered']) ? $data['isFiltered'] : null;
        $this->container['isPartitionKey'] = isset($data['isPartitionKey']) ? $data['isPartitionKey'] : null;
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
    * Gets primaryKeyOrUniqueIndex
    *  主键或者唯一索引
    *
    * @return string|null
    */
    public function getPrimaryKeyOrUniqueIndex()
    {
        return $this->container['primaryKeyOrUniqueIndex'];
    }

    /**
    * Sets primaryKeyOrUniqueIndex
    *
    * @param string|null $primaryKeyOrUniqueIndex 主键或者唯一索引
    *
    * @return $this
    */
    public function setPrimaryKeyOrUniqueIndex($primaryKeyOrUniqueIndex)
    {
        $this->container['primaryKeyOrUniqueIndex'] = $primaryKeyOrUniqueIndex;
        return $this;
    }

    /**
    * Gets columnMappedName
    *  列映射后的名称
    *
    * @return string|null
    */
    public function getColumnMappedName()
    {
        return $this->container['columnMappedName'];
    }

    /**
    * Sets columnMappedName
    *
    * @param string|null $columnMappedName 列映射后的名称
    *
    * @return $this
    */
    public function setColumnMappedName($columnMappedName)
    {
        $this->container['columnMappedName'] = $columnMappedName;
        return $this;
    }

    /**
    * Gets isFiltered
    *  该列是否过滤
    *
    * @return bool|null
    */
    public function getIsFiltered()
    {
        return $this->container['isFiltered'];
    }

    /**
    * Sets isFiltered
    *
    * @param bool|null $isFiltered 该列是否过滤
    *
    * @return $this
    */
    public function setIsFiltered($isFiltered)
    {
        $this->container['isFiltered'] = $isFiltered;
        return $this;
    }

    /**
    * Gets isPartitionKey
    *  该列是否partitionKey
    *
    * @return bool|null
    */
    public function getIsPartitionKey()
    {
        return $this->container['isPartitionKey'];
    }

    /**
    * Sets isPartitionKey
    *
    * @param bool|null $isPartitionKey 该列是否partitionKey
    *
    * @return $this
    */
    public function setIsPartitionKey($isPartitionKey)
    {
        $this->container['isPartitionKey'] = $isPartitionKey;
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

