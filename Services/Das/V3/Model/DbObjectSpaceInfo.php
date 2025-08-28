<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DbObjectSpaceInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DbObjectSpaceInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * objectType  对象类型，如果是table，同时需要传database_id
    * objectName  对象名称
    * objectId  对象ID
    * usedSize  已使用空间，以字节为单位
    * dataSize  数据空间，以字节为单位
    * indexSize  索引空间，以字节为单位
    * freeSize  碎片空间，以字节为单位
    * freeRate  碎片率
    * estimatedRows  估算值行数，以字节为单位
    * dbName  数据库名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'objectType' => 'string',
            'objectName' => 'string',
            'objectId' => 'string',
            'usedSize' => 'int',
            'dataSize' => 'int',
            'indexSize' => 'int',
            'freeSize' => 'int',
            'freeRate' => 'double',
            'estimatedRows' => 'int',
            'dbName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * objectType  对象类型，如果是table，同时需要传database_id
    * objectName  对象名称
    * objectId  对象ID
    * usedSize  已使用空间，以字节为单位
    * dataSize  数据空间，以字节为单位
    * indexSize  索引空间，以字节为单位
    * freeSize  碎片空间，以字节为单位
    * freeRate  碎片率
    * estimatedRows  估算值行数，以字节为单位
    * dbName  数据库名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'objectType' => null,
        'objectName' => null,
        'objectId' => null,
        'usedSize' => 'int64',
        'dataSize' => 'int64',
        'indexSize' => 'int64',
        'freeSize' => 'int64',
        'freeRate' => 'double',
        'estimatedRows' => 'int64',
        'dbName' => null
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
    * objectType  对象类型，如果是table，同时需要传database_id
    * objectName  对象名称
    * objectId  对象ID
    * usedSize  已使用空间，以字节为单位
    * dataSize  数据空间，以字节为单位
    * indexSize  索引空间，以字节为单位
    * freeSize  碎片空间，以字节为单位
    * freeRate  碎片率
    * estimatedRows  估算值行数，以字节为单位
    * dbName  数据库名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'objectType' => 'object_type',
            'objectName' => 'object_name',
            'objectId' => 'object_id',
            'usedSize' => 'used_size',
            'dataSize' => 'data_size',
            'indexSize' => 'index_size',
            'freeSize' => 'free_size',
            'freeRate' => 'free_rate',
            'estimatedRows' => 'estimated_rows',
            'dbName' => 'db_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * objectType  对象类型，如果是table，同时需要传database_id
    * objectName  对象名称
    * objectId  对象ID
    * usedSize  已使用空间，以字节为单位
    * dataSize  数据空间，以字节为单位
    * indexSize  索引空间，以字节为单位
    * freeSize  碎片空间，以字节为单位
    * freeRate  碎片率
    * estimatedRows  估算值行数，以字节为单位
    * dbName  数据库名称
    *
    * @var string[]
    */
    protected static $setters = [
            'objectType' => 'setObjectType',
            'objectName' => 'setObjectName',
            'objectId' => 'setObjectId',
            'usedSize' => 'setUsedSize',
            'dataSize' => 'setDataSize',
            'indexSize' => 'setIndexSize',
            'freeSize' => 'setFreeSize',
            'freeRate' => 'setFreeRate',
            'estimatedRows' => 'setEstimatedRows',
            'dbName' => 'setDbName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * objectType  对象类型，如果是table，同时需要传database_id
    * objectName  对象名称
    * objectId  对象ID
    * usedSize  已使用空间，以字节为单位
    * dataSize  数据空间，以字节为单位
    * indexSize  索引空间，以字节为单位
    * freeSize  碎片空间，以字节为单位
    * freeRate  碎片率
    * estimatedRows  估算值行数，以字节为单位
    * dbName  数据库名称
    *
    * @var string[]
    */
    protected static $getters = [
            'objectType' => 'getObjectType',
            'objectName' => 'getObjectName',
            'objectId' => 'getObjectId',
            'usedSize' => 'getUsedSize',
            'dataSize' => 'getDataSize',
            'indexSize' => 'getIndexSize',
            'freeSize' => 'getFreeSize',
            'freeRate' => 'getFreeRate',
            'estimatedRows' => 'getEstimatedRows',
            'dbName' => 'getDbName'
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
    const OBJECT_TYPE_DATABASE = 'database';
    const OBJECT_TYPE_TABLE = 'table';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getObjectTypeAllowableValues()
    {
        return [
            self::OBJECT_TYPE_DATABASE,
            self::OBJECT_TYPE_TABLE,
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
        $this->container['objectType'] = isset($data['objectType']) ? $data['objectType'] : null;
        $this->container['objectName'] = isset($data['objectName']) ? $data['objectName'] : null;
        $this->container['objectId'] = isset($data['objectId']) ? $data['objectId'] : null;
        $this->container['usedSize'] = isset($data['usedSize']) ? $data['usedSize'] : null;
        $this->container['dataSize'] = isset($data['dataSize']) ? $data['dataSize'] : null;
        $this->container['indexSize'] = isset($data['indexSize']) ? $data['indexSize'] : null;
        $this->container['freeSize'] = isset($data['freeSize']) ? $data['freeSize'] : null;
        $this->container['freeRate'] = isset($data['freeRate']) ? $data['freeRate'] : null;
        $this->container['estimatedRows'] = isset($data['estimatedRows']) ? $data['estimatedRows'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['objectType'] === null) {
            $invalidProperties[] = "'objectType' can't be null";
        }
            $allowedValues = $this->getObjectTypeAllowableValues();
                if (!is_null($this->container['objectType']) && !in_array($this->container['objectType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'objectType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['objectName'] === null) {
            $invalidProperties[] = "'objectName' can't be null";
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
    * Gets objectType
    *  对象类型，如果是table，同时需要传database_id
    *
    * @return string
    */
    public function getObjectType()
    {
        return $this->container['objectType'];
    }

    /**
    * Sets objectType
    *
    * @param string $objectType 对象类型，如果是table，同时需要传database_id
    *
    * @return $this
    */
    public function setObjectType($objectType)
    {
        $this->container['objectType'] = $objectType;
        return $this;
    }

    /**
    * Gets objectName
    *  对象名称
    *
    * @return string
    */
    public function getObjectName()
    {
        return $this->container['objectName'];
    }

    /**
    * Sets objectName
    *
    * @param string $objectName 对象名称
    *
    * @return $this
    */
    public function setObjectName($objectName)
    {
        $this->container['objectName'] = $objectName;
        return $this;
    }

    /**
    * Gets objectId
    *  对象ID
    *
    * @return string|null
    */
    public function getObjectId()
    {
        return $this->container['objectId'];
    }

    /**
    * Sets objectId
    *
    * @param string|null $objectId 对象ID
    *
    * @return $this
    */
    public function setObjectId($objectId)
    {
        $this->container['objectId'] = $objectId;
        return $this;
    }

    /**
    * Gets usedSize
    *  已使用空间，以字节为单位
    *
    * @return int|null
    */
    public function getUsedSize()
    {
        return $this->container['usedSize'];
    }

    /**
    * Sets usedSize
    *
    * @param int|null $usedSize 已使用空间，以字节为单位
    *
    * @return $this
    */
    public function setUsedSize($usedSize)
    {
        $this->container['usedSize'] = $usedSize;
        return $this;
    }

    /**
    * Gets dataSize
    *  数据空间，以字节为单位
    *
    * @return int|null
    */
    public function getDataSize()
    {
        return $this->container['dataSize'];
    }

    /**
    * Sets dataSize
    *
    * @param int|null $dataSize 数据空间，以字节为单位
    *
    * @return $this
    */
    public function setDataSize($dataSize)
    {
        $this->container['dataSize'] = $dataSize;
        return $this;
    }

    /**
    * Gets indexSize
    *  索引空间，以字节为单位
    *
    * @return int|null
    */
    public function getIndexSize()
    {
        return $this->container['indexSize'];
    }

    /**
    * Sets indexSize
    *
    * @param int|null $indexSize 索引空间，以字节为单位
    *
    * @return $this
    */
    public function setIndexSize($indexSize)
    {
        $this->container['indexSize'] = $indexSize;
        return $this;
    }

    /**
    * Gets freeSize
    *  碎片空间，以字节为单位
    *
    * @return int|null
    */
    public function getFreeSize()
    {
        return $this->container['freeSize'];
    }

    /**
    * Sets freeSize
    *
    * @param int|null $freeSize 碎片空间，以字节为单位
    *
    * @return $this
    */
    public function setFreeSize($freeSize)
    {
        $this->container['freeSize'] = $freeSize;
        return $this;
    }

    /**
    * Gets freeRate
    *  碎片率
    *
    * @return double|null
    */
    public function getFreeRate()
    {
        return $this->container['freeRate'];
    }

    /**
    * Sets freeRate
    *
    * @param double|null $freeRate 碎片率
    *
    * @return $this
    */
    public function setFreeRate($freeRate)
    {
        $this->container['freeRate'] = $freeRate;
        return $this;
    }

    /**
    * Gets estimatedRows
    *  估算值行数，以字节为单位
    *
    * @return int|null
    */
    public function getEstimatedRows()
    {
        return $this->container['estimatedRows'];
    }

    /**
    * Sets estimatedRows
    *
    * @param int|null $estimatedRows 估算值行数，以字节为单位
    *
    * @return $this
    */
    public function setEstimatedRows($estimatedRows)
    {
        $this->container['estimatedRows'] = $estimatedRows;
        return $this;
    }

    /**
    * Gets dbName
    *  数据库名称
    *
    * @return string|null
    */
    public function getDbName()
    {
        return $this->container['dbName'];
    }

    /**
    * Sets dbName
    *
    * @param string|null $dbName 数据库名称
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
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

