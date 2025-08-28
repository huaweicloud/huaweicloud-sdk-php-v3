<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HealthReportTableSpaceInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HealthReportTableSpaceInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * database  数据库名。
    * table  表名。
    * dbEngine  数据库引擎。
    * tableSize  表大小。
    * dataSize  数据大小。
    * indexSize  索引大小。
    * rows  行数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'database' => 'string',
            'table' => 'string',
            'dbEngine' => 'string',
            'tableSize' => 'int',
            'dataSize' => 'int',
            'indexSize' => 'int',
            'rows' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * database  数据库名。
    * table  表名。
    * dbEngine  数据库引擎。
    * tableSize  表大小。
    * dataSize  数据大小。
    * indexSize  索引大小。
    * rows  行数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'database' => null,
        'table' => null,
        'dbEngine' => null,
        'tableSize' => 'int64',
        'dataSize' => 'int64',
        'indexSize' => 'int64',
        'rows' => 'int64'
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
    * database  数据库名。
    * table  表名。
    * dbEngine  数据库引擎。
    * tableSize  表大小。
    * dataSize  数据大小。
    * indexSize  索引大小。
    * rows  行数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'database' => 'database',
            'table' => 'table',
            'dbEngine' => 'db_engine',
            'tableSize' => 'table_size',
            'dataSize' => 'data_size',
            'indexSize' => 'index_size',
            'rows' => 'rows'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * database  数据库名。
    * table  表名。
    * dbEngine  数据库引擎。
    * tableSize  表大小。
    * dataSize  数据大小。
    * indexSize  索引大小。
    * rows  行数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'database' => 'setDatabase',
            'table' => 'setTable',
            'dbEngine' => 'setDbEngine',
            'tableSize' => 'setTableSize',
            'dataSize' => 'setDataSize',
            'indexSize' => 'setIndexSize',
            'rows' => 'setRows'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * database  数据库名。
    * table  表名。
    * dbEngine  数据库引擎。
    * tableSize  表大小。
    * dataSize  数据大小。
    * indexSize  索引大小。
    * rows  行数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'database' => 'getDatabase',
            'table' => 'getTable',
            'dbEngine' => 'getDbEngine',
            'tableSize' => 'getTableSize',
            'dataSize' => 'getDataSize',
            'indexSize' => 'getIndexSize',
            'rows' => 'getRows'
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
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['table'] = isset($data['table']) ? $data['table'] : null;
        $this->container['dbEngine'] = isset($data['dbEngine']) ? $data['dbEngine'] : null;
        $this->container['tableSize'] = isset($data['tableSize']) ? $data['tableSize'] : null;
        $this->container['dataSize'] = isset($data['dataSize']) ? $data['dataSize'] : null;
        $this->container['indexSize'] = isset($data['indexSize']) ? $data['indexSize'] : null;
        $this->container['rows'] = isset($data['rows']) ? $data['rows'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['database'] === null) {
            $invalidProperties[] = "'database' can't be null";
        }
        if ($this->container['table'] === null) {
            $invalidProperties[] = "'table' can't be null";
        }
        if ($this->container['dbEngine'] === null) {
            $invalidProperties[] = "'dbEngine' can't be null";
        }
        if ($this->container['tableSize'] === null) {
            $invalidProperties[] = "'tableSize' can't be null";
        }
        if ($this->container['dataSize'] === null) {
            $invalidProperties[] = "'dataSize' can't be null";
        }
        if ($this->container['indexSize'] === null) {
            $invalidProperties[] = "'indexSize' can't be null";
        }
        if ($this->container['rows'] === null) {
            $invalidProperties[] = "'rows' can't be null";
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
    * Gets database
    *  数据库名。
    *
    * @return string
    */
    public function getDatabase()
    {
        return $this->container['database'];
    }

    /**
    * Sets database
    *
    * @param string $database 数据库名。
    *
    * @return $this
    */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;
        return $this;
    }

    /**
    * Gets table
    *  表名。
    *
    * @return string
    */
    public function getTable()
    {
        return $this->container['table'];
    }

    /**
    * Sets table
    *
    * @param string $table 表名。
    *
    * @return $this
    */
    public function setTable($table)
    {
        $this->container['table'] = $table;
        return $this;
    }

    /**
    * Gets dbEngine
    *  数据库引擎。
    *
    * @return string
    */
    public function getDbEngine()
    {
        return $this->container['dbEngine'];
    }

    /**
    * Sets dbEngine
    *
    * @param string $dbEngine 数据库引擎。
    *
    * @return $this
    */
    public function setDbEngine($dbEngine)
    {
        $this->container['dbEngine'] = $dbEngine;
        return $this;
    }

    /**
    * Gets tableSize
    *  表大小。
    *
    * @return int
    */
    public function getTableSize()
    {
        return $this->container['tableSize'];
    }

    /**
    * Sets tableSize
    *
    * @param int $tableSize 表大小。
    *
    * @return $this
    */
    public function setTableSize($tableSize)
    {
        $this->container['tableSize'] = $tableSize;
        return $this;
    }

    /**
    * Gets dataSize
    *  数据大小。
    *
    * @return int
    */
    public function getDataSize()
    {
        return $this->container['dataSize'];
    }

    /**
    * Sets dataSize
    *
    * @param int $dataSize 数据大小。
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
    *  索引大小。
    *
    * @return int
    */
    public function getIndexSize()
    {
        return $this->container['indexSize'];
    }

    /**
    * Sets indexSize
    *
    * @param int $indexSize 索引大小。
    *
    * @return $this
    */
    public function setIndexSize($indexSize)
    {
        $this->container['indexSize'] = $indexSize;
        return $this;
    }

    /**
    * Gets rows
    *  行数量。
    *
    * @return int
    */
    public function getRows()
    {
        return $this->container['rows'];
    }

    /**
    * Sets rows
    *
    * @param int $rows 行数量。
    *
    * @return $this
    */
    public function setRows($rows)
    {
        $this->container['rows'] = $rows;
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

