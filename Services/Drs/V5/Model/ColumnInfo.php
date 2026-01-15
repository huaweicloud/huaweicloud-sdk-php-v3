<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

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
    * columnName  列名
    * columnType  列类型
    * keyType  列的键类型。
    * columnMappedName  列映射后的名称
    * status  该列是否过滤
    * partition  该列是否partitionKey
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'columnName' => 'string',
            'columnType' => 'string',
            'keyType' => 'string',
            'columnMappedName' => 'string',
            'status' => 'bool',
            'partition' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * columnName  列名
    * columnType  列类型
    * keyType  列的键类型。
    * columnMappedName  列映射后的名称
    * status  该列是否过滤
    * partition  该列是否partitionKey
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'columnName' => null,
        'columnType' => null,
        'keyType' => null,
        'columnMappedName' => null,
        'status' => null,
        'partition' => null
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
    * keyType  列的键类型。
    * columnMappedName  列映射后的名称
    * status  该列是否过滤
    * partition  该列是否partitionKey
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'columnName' => 'column_name',
            'columnType' => 'column_type',
            'keyType' => 'key_type',
            'columnMappedName' => 'column_mapped_name',
            'status' => 'status',
            'partition' => 'partition'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * columnName  列名
    * columnType  列类型
    * keyType  列的键类型。
    * columnMappedName  列映射后的名称
    * status  该列是否过滤
    * partition  该列是否partitionKey
    *
    * @var string[]
    */
    protected static $setters = [
            'columnName' => 'setColumnName',
            'columnType' => 'setColumnType',
            'keyType' => 'setKeyType',
            'columnMappedName' => 'setColumnMappedName',
            'status' => 'setStatus',
            'partition' => 'setPartition'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * columnName  列名
    * columnType  列类型
    * keyType  列的键类型。
    * columnMappedName  列映射后的名称
    * status  该列是否过滤
    * partition  该列是否partitionKey
    *
    * @var string[]
    */
    protected static $getters = [
            'columnName' => 'getColumnName',
            'columnType' => 'getColumnType',
            'keyType' => 'getKeyType',
            'columnMappedName' => 'getColumnMappedName',
            'status' => 'getStatus',
            'partition' => 'getPartition'
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
        $this->container['keyType'] = isset($data['keyType']) ? $data['keyType'] : null;
        $this->container['columnMappedName'] = isset($data['columnMappedName']) ? $data['columnMappedName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['partition'] = isset($data['partition']) ? $data['partition'] : null;
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
    * Gets keyType
    *  列的键类型。
    *
    * @return string|null
    */
    public function getKeyType()
    {
        return $this->container['keyType'];
    }

    /**
    * Sets keyType
    *
    * @param string|null $keyType 列的键类型。
    *
    * @return $this
    */
    public function setKeyType($keyType)
    {
        $this->container['keyType'] = $keyType;
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
    * Gets status
    *  该列是否过滤
    *
    * @return bool|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param bool|null $status 该列是否过滤
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets partition
    *  该列是否partitionKey
    *
    * @return bool|null
    */
    public function getPartition()
    {
        return $this->container['partition'];
    }

    /**
    * Sets partition
    *
    * @param bool|null $partition 该列是否partitionKey
    *
    * @return $this
    */
    public function setPartition($partition)
    {
        $this->container['partition'] = $partition;
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

