<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataFilteringAdvancedSetting implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataFilteringAdvancedSetting';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbName  库名
    * tableName  表名
    * colNames  列名
    * primKeyOrIndexes  主键或唯一索引
    * indexes  优化查询所需的索引
    * values  过滤条件
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbName' => 'string',
            'tableName' => 'string',
            'colNames' => 'string',
            'primKeyOrIndexes' => 'string',
            'indexes' => 'string',
            'values' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbName  库名
    * tableName  表名
    * colNames  列名
    * primKeyOrIndexes  主键或唯一索引
    * indexes  优化查询所需的索引
    * values  过滤条件
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbName' => null,
        'tableName' => null,
        'colNames' => null,
        'primKeyOrIndexes' => null,
        'indexes' => null,
        'values' => null
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
    * dbName  库名
    * tableName  表名
    * colNames  列名
    * primKeyOrIndexes  主键或唯一索引
    * indexes  优化查询所需的索引
    * values  过滤条件
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbName' => 'db_name',
            'tableName' => 'table_name',
            'colNames' => 'col_names',
            'primKeyOrIndexes' => 'prim_key_or_indexes',
            'indexes' => 'indexes',
            'values' => 'values'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbName  库名
    * tableName  表名
    * colNames  列名
    * primKeyOrIndexes  主键或唯一索引
    * indexes  优化查询所需的索引
    * values  过滤条件
    *
    * @var string[]
    */
    protected static $setters = [
            'dbName' => 'setDbName',
            'tableName' => 'setTableName',
            'colNames' => 'setColNames',
            'primKeyOrIndexes' => 'setPrimKeyOrIndexes',
            'indexes' => 'setIndexes',
            'values' => 'setValues'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbName  库名
    * tableName  表名
    * colNames  列名
    * primKeyOrIndexes  主键或唯一索引
    * indexes  优化查询所需的索引
    * values  过滤条件
    *
    * @var string[]
    */
    protected static $getters = [
            'dbName' => 'getDbName',
            'tableName' => 'getTableName',
            'colNames' => 'getColNames',
            'primKeyOrIndexes' => 'getPrimKeyOrIndexes',
            'indexes' => 'getIndexes',
            'values' => 'getValues'
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
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['colNames'] = isset($data['colNames']) ? $data['colNames'] : null;
        $this->container['primKeyOrIndexes'] = isset($data['primKeyOrIndexes']) ? $data['primKeyOrIndexes'] : null;
        $this->container['indexes'] = isset($data['indexes']) ? $data['indexes'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dbName'] === null) {
            $invalidProperties[] = "'dbName' can't be null";
        }
        if ($this->container['tableName'] === null) {
            $invalidProperties[] = "'tableName' can't be null";
        }
        if ($this->container['colNames'] === null) {
            $invalidProperties[] = "'colNames' can't be null";
        }
        if ($this->container['primKeyOrIndexes'] === null) {
            $invalidProperties[] = "'primKeyOrIndexes' can't be null";
        }
        if ($this->container['indexes'] === null) {
            $invalidProperties[] = "'indexes' can't be null";
        }
        if ($this->container['values'] === null) {
            $invalidProperties[] = "'values' can't be null";
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
    * Gets dbName
    *  库名
    *
    * @return string
    */
    public function getDbName()
    {
        return $this->container['dbName'];
    }

    /**
    * Sets dbName
    *
    * @param string $dbName 库名
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets tableName
    *  表名
    *
    * @return string
    */
    public function getTableName()
    {
        return $this->container['tableName'];
    }

    /**
    * Sets tableName
    *
    * @param string $tableName 表名
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets colNames
    *  列名
    *
    * @return string
    */
    public function getColNames()
    {
        return $this->container['colNames'];
    }

    /**
    * Sets colNames
    *
    * @param string $colNames 列名
    *
    * @return $this
    */
    public function setColNames($colNames)
    {
        $this->container['colNames'] = $colNames;
        return $this;
    }

    /**
    * Gets primKeyOrIndexes
    *  主键或唯一索引
    *
    * @return string
    */
    public function getPrimKeyOrIndexes()
    {
        return $this->container['primKeyOrIndexes'];
    }

    /**
    * Sets primKeyOrIndexes
    *
    * @param string $primKeyOrIndexes 主键或唯一索引
    *
    * @return $this
    */
    public function setPrimKeyOrIndexes($primKeyOrIndexes)
    {
        $this->container['primKeyOrIndexes'] = $primKeyOrIndexes;
        return $this;
    }

    /**
    * Gets indexes
    *  优化查询所需的索引
    *
    * @return string
    */
    public function getIndexes()
    {
        return $this->container['indexes'];
    }

    /**
    * Sets indexes
    *
    * @param string $indexes 优化查询所需的索引
    *
    * @return $this
    */
    public function setIndexes($indexes)
    {
        $this->container['indexes'] = $indexes;
        return $this;
    }

    /**
    * Gets values
    *  过滤条件
    *
    * @return string
    */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
    * Sets values
    *
    * @param string $values 过滤条件
    *
    * @return $this
    */
    public function setValues($values)
    {
        $this->container['values'] = $values;
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

