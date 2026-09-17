<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RetryBinlogPartRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RetryBinlogPartRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  binlog解析任务ID
    * errorId  binlog解析错误ID
    * dbName  数据库名称
    * tableName  数据库表名称
    * columnList  列表信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'int',
            'errorId' => 'string[]',
            'dbName' => 'string',
            'tableName' => 'string',
            'columnList' => '\HuaweiCloud\SDK\Das\V3\Model\ColumnInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  binlog解析任务ID
    * errorId  binlog解析错误ID
    * dbName  数据库名称
    * tableName  数据库表名称
    * columnList  列表信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => 'int64',
        'errorId' => null,
        'dbName' => null,
        'tableName' => null,
        'columnList' => null
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
    * taskId  binlog解析任务ID
    * errorId  binlog解析错误ID
    * dbName  数据库名称
    * tableName  数据库表名称
    * columnList  列表信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'errorId' => 'error_id',
            'dbName' => 'db_name',
            'tableName' => 'table_name',
            'columnList' => 'column_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  binlog解析任务ID
    * errorId  binlog解析错误ID
    * dbName  数据库名称
    * tableName  数据库表名称
    * columnList  列表信息
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'errorId' => 'setErrorId',
            'dbName' => 'setDbName',
            'tableName' => 'setTableName',
            'columnList' => 'setColumnList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  binlog解析任务ID
    * errorId  binlog解析错误ID
    * dbName  数据库名称
    * tableName  数据库表名称
    * columnList  列表信息
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'errorId' => 'getErrorId',
            'dbName' => 'getDbName',
            'tableName' => 'getTableName',
            'columnList' => 'getColumnList'
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['errorId'] = isset($data['errorId']) ? $data['errorId'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['columnList'] = isset($data['columnList']) ? $data['columnList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['taskId'] === null) {
            $invalidProperties[] = "'taskId' can't be null";
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
    * Gets taskId
    *  binlog解析任务ID
    *
    * @return int
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param int $taskId binlog解析任务ID
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets errorId
    *  binlog解析错误ID
    *
    * @return string[]|null
    */
    public function getErrorId()
    {
        return $this->container['errorId'];
    }

    /**
    * Sets errorId
    *
    * @param string[]|null $errorId binlog解析错误ID
    *
    * @return $this
    */
    public function setErrorId($errorId)
    {
        $this->container['errorId'] = $errorId;
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
    * Gets tableName
    *  数据库表名称
    *
    * @return string|null
    */
    public function getTableName()
    {
        return $this->container['tableName'];
    }

    /**
    * Sets tableName
    *
    * @param string|null $tableName 数据库表名称
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets columnList
    *  列表信息
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\ColumnInfo[]|null
    */
    public function getColumnList()
    {
        return $this->container['columnList'];
    }

    /**
    * Sets columnList
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\ColumnInfo[]|null $columnList 列表信息
    *
    * @return $this
    */
    public function setColumnList($columnList)
    {
        $this->container['columnList'] = $columnList;
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

