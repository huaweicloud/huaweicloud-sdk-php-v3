<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TopDataInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TopDataInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbName  库名
    * tableName  表名
    * file  物理文件大小，单位MB
    * data  数据空间，单位MB
    * free  碎片空间，单位MB
    * freeRate  碎片率
    * index  索引空间，单位MB
    * rowsCount  行数
    * time  采集时间（Unix timestamp），单位：毫秒
    * growth  增长量，单位MB
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbName' => 'string',
            'tableName' => 'string',
            'file' => 'double',
            'data' => 'double',
            'free' => 'double',
            'freeRate' => 'double',
            'index' => 'double',
            'rowsCount' => 'double',
            'time' => 'double',
            'growth' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbName  库名
    * tableName  表名
    * file  物理文件大小，单位MB
    * data  数据空间，单位MB
    * free  碎片空间，单位MB
    * freeRate  碎片率
    * index  索引空间，单位MB
    * rowsCount  行数
    * time  采集时间（Unix timestamp），单位：毫秒
    * growth  增长量，单位MB
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbName' => null,
        'tableName' => null,
        'file' => 'double',
        'data' => 'double',
        'free' => 'double',
        'freeRate' => 'double',
        'index' => 'double',
        'rowsCount' => 'double',
        'time' => 'double',
        'growth' => 'double'
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
    * file  物理文件大小，单位MB
    * data  数据空间，单位MB
    * free  碎片空间，单位MB
    * freeRate  碎片率
    * index  索引空间，单位MB
    * rowsCount  行数
    * time  采集时间（Unix timestamp），单位：毫秒
    * growth  增长量，单位MB
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbName' => 'db_name',
            'tableName' => 'table_name',
            'file' => 'file',
            'data' => 'data',
            'free' => 'free',
            'freeRate' => 'free_rate',
            'index' => 'index',
            'rowsCount' => 'rows_count',
            'time' => 'time',
            'growth' => 'growth'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbName  库名
    * tableName  表名
    * file  物理文件大小，单位MB
    * data  数据空间，单位MB
    * free  碎片空间，单位MB
    * freeRate  碎片率
    * index  索引空间，单位MB
    * rowsCount  行数
    * time  采集时间（Unix timestamp），单位：毫秒
    * growth  增长量，单位MB
    *
    * @var string[]
    */
    protected static $setters = [
            'dbName' => 'setDbName',
            'tableName' => 'setTableName',
            'file' => 'setFile',
            'data' => 'setData',
            'free' => 'setFree',
            'freeRate' => 'setFreeRate',
            'index' => 'setIndex',
            'rowsCount' => 'setRowsCount',
            'time' => 'setTime',
            'growth' => 'setGrowth'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbName  库名
    * tableName  表名
    * file  物理文件大小，单位MB
    * data  数据空间，单位MB
    * free  碎片空间，单位MB
    * freeRate  碎片率
    * index  索引空间，单位MB
    * rowsCount  行数
    * time  采集时间（Unix timestamp），单位：毫秒
    * growth  增长量，单位MB
    *
    * @var string[]
    */
    protected static $getters = [
            'dbName' => 'getDbName',
            'tableName' => 'getTableName',
            'file' => 'getFile',
            'data' => 'getData',
            'free' => 'getFree',
            'freeRate' => 'getFreeRate',
            'index' => 'getIndex',
            'rowsCount' => 'getRowsCount',
            'time' => 'getTime',
            'growth' => 'getGrowth'
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
        $this->container['file'] = isset($data['file']) ? $data['file'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['free'] = isset($data['free']) ? $data['free'] : null;
        $this->container['freeRate'] = isset($data['freeRate']) ? $data['freeRate'] : null;
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['rowsCount'] = isset($data['rowsCount']) ? $data['rowsCount'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['growth'] = isset($data['growth']) ? $data['growth'] : null;
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
    * Gets dbName
    *  库名
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
    * @param string|null $dbName 库名
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
    * @return string|null
    */
    public function getTableName()
    {
        return $this->container['tableName'];
    }

    /**
    * Sets tableName
    *
    * @param string|null $tableName 表名
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets file
    *  物理文件大小，单位MB
    *
    * @return double|null
    */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
    * Sets file
    *
    * @param double|null $file 物理文件大小，单位MB
    *
    * @return $this
    */
    public function setFile($file)
    {
        $this->container['file'] = $file;
        return $this;
    }

    /**
    * Gets data
    *  数据空间，单位MB
    *
    * @return double|null
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param double|null $data 数据空间，单位MB
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
        return $this;
    }

    /**
    * Gets free
    *  碎片空间，单位MB
    *
    * @return double|null
    */
    public function getFree()
    {
        return $this->container['free'];
    }

    /**
    * Sets free
    *
    * @param double|null $free 碎片空间，单位MB
    *
    * @return $this
    */
    public function setFree($free)
    {
        $this->container['free'] = $free;
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
    * Gets index
    *  索引空间，单位MB
    *
    * @return double|null
    */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
    * Sets index
    *
    * @param double|null $index 索引空间，单位MB
    *
    * @return $this
    */
    public function setIndex($index)
    {
        $this->container['index'] = $index;
        return $this;
    }

    /**
    * Gets rowsCount
    *  行数
    *
    * @return double|null
    */
    public function getRowsCount()
    {
        return $this->container['rowsCount'];
    }

    /**
    * Sets rowsCount
    *
    * @param double|null $rowsCount 行数
    *
    * @return $this
    */
    public function setRowsCount($rowsCount)
    {
        $this->container['rowsCount'] = $rowsCount;
        return $this;
    }

    /**
    * Gets time
    *  采集时间（Unix timestamp），单位：毫秒
    *
    * @return double|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param double|null $time 采集时间（Unix timestamp），单位：毫秒
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets growth
    *  增长量，单位MB
    *
    * @return double|null
    */
    public function getGrowth()
    {
        return $this->container['growth'];
    }

    /**
    * Sets growth
    *
    * @param double|null $growth 增长量，单位MB
    *
    * @return $this
    */
    public function setGrowth($growth)
    {
        $this->container['growth'] = $growth;
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

