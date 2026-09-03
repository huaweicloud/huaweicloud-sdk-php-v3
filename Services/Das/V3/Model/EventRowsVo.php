<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventRowsVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventRowsVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eventId  事件ID
    * fileName  文件名称
    * position  解析位置
    * timestamp  事件发生时间，单位毫秒
    * dbName  变更的数据库名称
    * tableName  变更的表名称
    * sqlType  变更的SQL类型。取值范围：insert、update、delete、ddl
    * sqlStatement  变更的SQL语句
    * columnNames  变更的列名称列表
    * primaryKeys  变更的主键列表
    * affectRows  变更影响的行数
    * rowPairs  变更数据详情
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eventId' => 'int',
            'fileName' => 'string',
            'position' => 'int',
            'timestamp' => 'int',
            'dbName' => 'string',
            'tableName' => 'string',
            'sqlType' => 'string',
            'sqlStatement' => 'string',
            'columnNames' => 'string[]',
            'primaryKeys' => 'string[]',
            'affectRows' => 'int',
            'rowPairs' => '\HuaweiCloud\SDK\Das\V3\Model\RowPairDto[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eventId  事件ID
    * fileName  文件名称
    * position  解析位置
    * timestamp  事件发生时间，单位毫秒
    * dbName  变更的数据库名称
    * tableName  变更的表名称
    * sqlType  变更的SQL类型。取值范围：insert、update、delete、ddl
    * sqlStatement  变更的SQL语句
    * columnNames  变更的列名称列表
    * primaryKeys  变更的主键列表
    * affectRows  变更影响的行数
    * rowPairs  变更数据详情
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eventId' => 'int64',
        'fileName' => null,
        'position' => 'int64',
        'timestamp' => 'int64',
        'dbName' => null,
        'tableName' => null,
        'sqlType' => null,
        'sqlStatement' => null,
        'columnNames' => null,
        'primaryKeys' => null,
        'affectRows' => 'int32',
        'rowPairs' => null
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
    * eventId  事件ID
    * fileName  文件名称
    * position  解析位置
    * timestamp  事件发生时间，单位毫秒
    * dbName  变更的数据库名称
    * tableName  变更的表名称
    * sqlType  变更的SQL类型。取值范围：insert、update、delete、ddl
    * sqlStatement  变更的SQL语句
    * columnNames  变更的列名称列表
    * primaryKeys  变更的主键列表
    * affectRows  变更影响的行数
    * rowPairs  变更数据详情
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eventId' => 'event_id',
            'fileName' => 'file_name',
            'position' => 'position',
            'timestamp' => 'timestamp',
            'dbName' => 'db_name',
            'tableName' => 'table_name',
            'sqlType' => 'sql_type',
            'sqlStatement' => 'sql_statement',
            'columnNames' => 'column_names',
            'primaryKeys' => 'primary_keys',
            'affectRows' => 'affect_rows',
            'rowPairs' => 'row_pairs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eventId  事件ID
    * fileName  文件名称
    * position  解析位置
    * timestamp  事件发生时间，单位毫秒
    * dbName  变更的数据库名称
    * tableName  变更的表名称
    * sqlType  变更的SQL类型。取值范围：insert、update、delete、ddl
    * sqlStatement  变更的SQL语句
    * columnNames  变更的列名称列表
    * primaryKeys  变更的主键列表
    * affectRows  变更影响的行数
    * rowPairs  变更数据详情
    *
    * @var string[]
    */
    protected static $setters = [
            'eventId' => 'setEventId',
            'fileName' => 'setFileName',
            'position' => 'setPosition',
            'timestamp' => 'setTimestamp',
            'dbName' => 'setDbName',
            'tableName' => 'setTableName',
            'sqlType' => 'setSqlType',
            'sqlStatement' => 'setSqlStatement',
            'columnNames' => 'setColumnNames',
            'primaryKeys' => 'setPrimaryKeys',
            'affectRows' => 'setAffectRows',
            'rowPairs' => 'setRowPairs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eventId  事件ID
    * fileName  文件名称
    * position  解析位置
    * timestamp  事件发生时间，单位毫秒
    * dbName  变更的数据库名称
    * tableName  变更的表名称
    * sqlType  变更的SQL类型。取值范围：insert、update、delete、ddl
    * sqlStatement  变更的SQL语句
    * columnNames  变更的列名称列表
    * primaryKeys  变更的主键列表
    * affectRows  变更影响的行数
    * rowPairs  变更数据详情
    *
    * @var string[]
    */
    protected static $getters = [
            'eventId' => 'getEventId',
            'fileName' => 'getFileName',
            'position' => 'getPosition',
            'timestamp' => 'getTimestamp',
            'dbName' => 'getDbName',
            'tableName' => 'getTableName',
            'sqlType' => 'getSqlType',
            'sqlStatement' => 'getSqlStatement',
            'columnNames' => 'getColumnNames',
            'primaryKeys' => 'getPrimaryKeys',
            'affectRows' => 'getAffectRows',
            'rowPairs' => 'getRowPairs'
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
        $this->container['eventId'] = isset($data['eventId']) ? $data['eventId'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['sqlType'] = isset($data['sqlType']) ? $data['sqlType'] : null;
        $this->container['sqlStatement'] = isset($data['sqlStatement']) ? $data['sqlStatement'] : null;
        $this->container['columnNames'] = isset($data['columnNames']) ? $data['columnNames'] : null;
        $this->container['primaryKeys'] = isset($data['primaryKeys']) ? $data['primaryKeys'] : null;
        $this->container['affectRows'] = isset($data['affectRows']) ? $data['affectRows'] : null;
        $this->container['rowPairs'] = isset($data['rowPairs']) ? $data['rowPairs'] : null;
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
    * Gets eventId
    *  事件ID
    *
    * @return int|null
    */
    public function getEventId()
    {
        return $this->container['eventId'];
    }

    /**
    * Sets eventId
    *
    * @param int|null $eventId 事件ID
    *
    * @return $this
    */
    public function setEventId($eventId)
    {
        $this->container['eventId'] = $eventId;
        return $this;
    }

    /**
    * Gets fileName
    *  文件名称
    *
    * @return string|null
    */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
    * Sets fileName
    *
    * @param string|null $fileName 文件名称
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets position
    *  解析位置
    *
    * @return int|null
    */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
    * Sets position
    *
    * @param int|null $position 解析位置
    *
    * @return $this
    */
    public function setPosition($position)
    {
        $this->container['position'] = $position;
        return $this;
    }

    /**
    * Gets timestamp
    *  事件发生时间，单位毫秒
    *
    * @return int|null
    */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
    * Sets timestamp
    *
    * @param int|null $timestamp 事件发生时间，单位毫秒
    *
    * @return $this
    */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;
        return $this;
    }

    /**
    * Gets dbName
    *  变更的数据库名称
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
    * @param string|null $dbName 变更的数据库名称
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
    *  变更的表名称
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
    * @param string|null $tableName 变更的表名称
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets sqlType
    *  变更的SQL类型。取值范围：insert、update、delete、ddl
    *
    * @return string|null
    */
    public function getSqlType()
    {
        return $this->container['sqlType'];
    }

    /**
    * Sets sqlType
    *
    * @param string|null $sqlType 变更的SQL类型。取值范围：insert、update、delete、ddl
    *
    * @return $this
    */
    public function setSqlType($sqlType)
    {
        $this->container['sqlType'] = $sqlType;
        return $this;
    }

    /**
    * Gets sqlStatement
    *  变更的SQL语句
    *
    * @return string|null
    */
    public function getSqlStatement()
    {
        return $this->container['sqlStatement'];
    }

    /**
    * Sets sqlStatement
    *
    * @param string|null $sqlStatement 变更的SQL语句
    *
    * @return $this
    */
    public function setSqlStatement($sqlStatement)
    {
        $this->container['sqlStatement'] = $sqlStatement;
        return $this;
    }

    /**
    * Gets columnNames
    *  变更的列名称列表
    *
    * @return string[]|null
    */
    public function getColumnNames()
    {
        return $this->container['columnNames'];
    }

    /**
    * Sets columnNames
    *
    * @param string[]|null $columnNames 变更的列名称列表
    *
    * @return $this
    */
    public function setColumnNames($columnNames)
    {
        $this->container['columnNames'] = $columnNames;
        return $this;
    }

    /**
    * Gets primaryKeys
    *  变更的主键列表
    *
    * @return string[]|null
    */
    public function getPrimaryKeys()
    {
        return $this->container['primaryKeys'];
    }

    /**
    * Sets primaryKeys
    *
    * @param string[]|null $primaryKeys 变更的主键列表
    *
    * @return $this
    */
    public function setPrimaryKeys($primaryKeys)
    {
        $this->container['primaryKeys'] = $primaryKeys;
        return $this;
    }

    /**
    * Gets affectRows
    *  变更影响的行数
    *
    * @return int|null
    */
    public function getAffectRows()
    {
        return $this->container['affectRows'];
    }

    /**
    * Sets affectRows
    *
    * @param int|null $affectRows 变更影响的行数
    *
    * @return $this
    */
    public function setAffectRows($affectRows)
    {
        $this->container['affectRows'] = $affectRows;
        return $this;
    }

    /**
    * Gets rowPairs
    *  变更数据详情
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\RowPairDto[]|null
    */
    public function getRowPairs()
    {
        return $this->container['rowPairs'];
    }

    /**
    * Sets rowPairs
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\RowPairDto[]|null $rowPairs 变更数据详情
    *
    * @return $this
    */
    public function setRowPairs($rowPairs)
    {
        $this->container['rowPairs'] = $rowPairs;
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

