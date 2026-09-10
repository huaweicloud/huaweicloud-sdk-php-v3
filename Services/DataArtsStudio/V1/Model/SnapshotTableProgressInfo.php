<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SnapshotTableProgressInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SnapshotTableProgressInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * progress  单表全量同步进度。
    * database  数据库名或者逻辑库名。
    * table  表名或者逻辑表名。
    * recordsRead  读取的表的数据条数。
    * logicTable  是否是逻辑表。
    * subTableProgress  表级别全量同步进度，如果是分库分表作业，则这里为各个子表的同步进度。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'progress' => 'string',
            'database' => 'string',
            'table' => 'string',
            'recordsRead' => 'int',
            'logicTable' => 'bool',
            'subTableProgress' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SnapshotTableProgressInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * progress  单表全量同步进度。
    * database  数据库名或者逻辑库名。
    * table  表名或者逻辑表名。
    * recordsRead  读取的表的数据条数。
    * logicTable  是否是逻辑表。
    * subTableProgress  表级别全量同步进度，如果是分库分表作业，则这里为各个子表的同步进度。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'progress' => null,
        'database' => null,
        'table' => null,
        'recordsRead' => 'int64',
        'logicTable' => null,
        'subTableProgress' => null
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
    * progress  单表全量同步进度。
    * database  数据库名或者逻辑库名。
    * table  表名或者逻辑表名。
    * recordsRead  读取的表的数据条数。
    * logicTable  是否是逻辑表。
    * subTableProgress  表级别全量同步进度，如果是分库分表作业，则这里为各个子表的同步进度。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'progress' => 'progress',
            'database' => 'database',
            'table' => 'table',
            'recordsRead' => 'records_read',
            'logicTable' => 'logic_table',
            'subTableProgress' => 'sub_table_progress'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * progress  单表全量同步进度。
    * database  数据库名或者逻辑库名。
    * table  表名或者逻辑表名。
    * recordsRead  读取的表的数据条数。
    * logicTable  是否是逻辑表。
    * subTableProgress  表级别全量同步进度，如果是分库分表作业，则这里为各个子表的同步进度。
    *
    * @var string[]
    */
    protected static $setters = [
            'progress' => 'setProgress',
            'database' => 'setDatabase',
            'table' => 'setTable',
            'recordsRead' => 'setRecordsRead',
            'logicTable' => 'setLogicTable',
            'subTableProgress' => 'setSubTableProgress'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * progress  单表全量同步进度。
    * database  数据库名或者逻辑库名。
    * table  表名或者逻辑表名。
    * recordsRead  读取的表的数据条数。
    * logicTable  是否是逻辑表。
    * subTableProgress  表级别全量同步进度，如果是分库分表作业，则这里为各个子表的同步进度。
    *
    * @var string[]
    */
    protected static $getters = [
            'progress' => 'getProgress',
            'database' => 'getDatabase',
            'table' => 'getTable',
            'recordsRead' => 'getRecordsRead',
            'logicTable' => 'getLogicTable',
            'subTableProgress' => 'getSubTableProgress'
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
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['table'] = isset($data['table']) ? $data['table'] : null;
        $this->container['recordsRead'] = isset($data['recordsRead']) ? $data['recordsRead'] : null;
        $this->container['logicTable'] = isset($data['logicTable']) ? $data['logicTable'] : null;
        $this->container['subTableProgress'] = isset($data['subTableProgress']) ? $data['subTableProgress'] : null;
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
    * Gets progress
    *  单表全量同步进度。
    *
    * @return string|null
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param string|null $progress 单表全量同步进度。
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
        return $this;
    }

    /**
    * Gets database
    *  数据库名或者逻辑库名。
    *
    * @return string|null
    */
    public function getDatabase()
    {
        return $this->container['database'];
    }

    /**
    * Sets database
    *
    * @param string|null $database 数据库名或者逻辑库名。
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
    *  表名或者逻辑表名。
    *
    * @return string|null
    */
    public function getTable()
    {
        return $this->container['table'];
    }

    /**
    * Sets table
    *
    * @param string|null $table 表名或者逻辑表名。
    *
    * @return $this
    */
    public function setTable($table)
    {
        $this->container['table'] = $table;
        return $this;
    }

    /**
    * Gets recordsRead
    *  读取的表的数据条数。
    *
    * @return int|null
    */
    public function getRecordsRead()
    {
        return $this->container['recordsRead'];
    }

    /**
    * Sets recordsRead
    *
    * @param int|null $recordsRead 读取的表的数据条数。
    *
    * @return $this
    */
    public function setRecordsRead($recordsRead)
    {
        $this->container['recordsRead'] = $recordsRead;
        return $this;
    }

    /**
    * Gets logicTable
    *  是否是逻辑表。
    *
    * @return bool|null
    */
    public function getLogicTable()
    {
        return $this->container['logicTable'];
    }

    /**
    * Sets logicTable
    *
    * @param bool|null $logicTable 是否是逻辑表。
    *
    * @return $this
    */
    public function setLogicTable($logicTable)
    {
        $this->container['logicTable'] = $logicTable;
        return $this;
    }

    /**
    * Gets subTableProgress
    *  表级别全量同步进度，如果是分库分表作业，则这里为各个子表的同步进度。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SnapshotTableProgressInfo[]|null
    */
    public function getSubTableProgress()
    {
        return $this->container['subTableProgress'];
    }

    /**
    * Sets subTableProgress
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SnapshotTableProgressInfo[]|null $subTableProgress 表级别全量同步进度，如果是分库分表作业，则这里为各个子表的同步进度。
    *
    * @return $this
    */
    public function setSubTableProgress($subTableProgress)
    {
        $this->container['subTableProgress'] = $subTableProgress;
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

