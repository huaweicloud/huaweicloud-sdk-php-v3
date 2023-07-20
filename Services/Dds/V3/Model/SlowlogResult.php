<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SlowlogResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SlowlogResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeName  节点名称。
    * querySample  执行语法。
    * type  语句类型。
    * time  执行时间。
    * lockTime  等待锁时间。
    * rowsSent  角色所在数据库名称。
    * rowsExamined  扫描的行数量。
    * database  所属数据库。
    * startTime  发生时间，UTC时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeName' => 'string',
            'querySample' => 'string',
            'type' => 'string',
            'time' => 'string',
            'lockTime' => 'string',
            'rowsSent' => 'string',
            'rowsExamined' => 'string',
            'database' => 'string',
            'startTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeName  节点名称。
    * querySample  执行语法。
    * type  语句类型。
    * time  执行时间。
    * lockTime  等待锁时间。
    * rowsSent  角色所在数据库名称。
    * rowsExamined  扫描的行数量。
    * database  所属数据库。
    * startTime  发生时间，UTC时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeName' => null,
        'querySample' => null,
        'type' => null,
        'time' => null,
        'lockTime' => null,
        'rowsSent' => null,
        'rowsExamined' => null,
        'database' => null,
        'startTime' => null
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
    * nodeName  节点名称。
    * querySample  执行语法。
    * type  语句类型。
    * time  执行时间。
    * lockTime  等待锁时间。
    * rowsSent  角色所在数据库名称。
    * rowsExamined  扫描的行数量。
    * database  所属数据库。
    * startTime  发生时间，UTC时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeName' => 'node_name',
            'querySample' => 'query_sample',
            'type' => 'type',
            'time' => 'time',
            'lockTime' => 'lock_time',
            'rowsSent' => 'rows_sent',
            'rowsExamined' => 'rows_examined',
            'database' => 'database',
            'startTime' => 'start_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeName  节点名称。
    * querySample  执行语法。
    * type  语句类型。
    * time  执行时间。
    * lockTime  等待锁时间。
    * rowsSent  角色所在数据库名称。
    * rowsExamined  扫描的行数量。
    * database  所属数据库。
    * startTime  发生时间，UTC时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeName' => 'setNodeName',
            'querySample' => 'setQuerySample',
            'type' => 'setType',
            'time' => 'setTime',
            'lockTime' => 'setLockTime',
            'rowsSent' => 'setRowsSent',
            'rowsExamined' => 'setRowsExamined',
            'database' => 'setDatabase',
            'startTime' => 'setStartTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeName  节点名称。
    * querySample  执行语法。
    * type  语句类型。
    * time  执行时间。
    * lockTime  等待锁时间。
    * rowsSent  角色所在数据库名称。
    * rowsExamined  扫描的行数量。
    * database  所属数据库。
    * startTime  发生时间，UTC时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeName' => 'getNodeName',
            'querySample' => 'getQuerySample',
            'type' => 'getType',
            'time' => 'getTime',
            'lockTime' => 'getLockTime',
            'rowsSent' => 'getRowsSent',
            'rowsExamined' => 'getRowsExamined',
            'database' => 'getDatabase',
            'startTime' => 'getStartTime'
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
        $this->container['nodeName'] = isset($data['nodeName']) ? $data['nodeName'] : null;
        $this->container['querySample'] = isset($data['querySample']) ? $data['querySample'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['lockTime'] = isset($data['lockTime']) ? $data['lockTime'] : null;
        $this->container['rowsSent'] = isset($data['rowsSent']) ? $data['rowsSent'] : null;
        $this->container['rowsExamined'] = isset($data['rowsExamined']) ? $data['rowsExamined'] : null;
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nodeName'] === null) {
            $invalidProperties[] = "'nodeName' can't be null";
        }
        if ($this->container['querySample'] === null) {
            $invalidProperties[] = "'querySample' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['time'] === null) {
            $invalidProperties[] = "'time' can't be null";
        }
        if ($this->container['lockTime'] === null) {
            $invalidProperties[] = "'lockTime' can't be null";
        }
        if ($this->container['rowsSent'] === null) {
            $invalidProperties[] = "'rowsSent' can't be null";
        }
        if ($this->container['rowsExamined'] === null) {
            $invalidProperties[] = "'rowsExamined' can't be null";
        }
        if ($this->container['database'] === null) {
            $invalidProperties[] = "'database' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
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
    * Gets nodeName
    *  节点名称。
    *
    * @return string
    */
    public function getNodeName()
    {
        return $this->container['nodeName'];
    }

    /**
    * Sets nodeName
    *
    * @param string $nodeName 节点名称。
    *
    * @return $this
    */
    public function setNodeName($nodeName)
    {
        $this->container['nodeName'] = $nodeName;
        return $this;
    }

    /**
    * Gets querySample
    *  执行语法。
    *
    * @return string
    */
    public function getQuerySample()
    {
        return $this->container['querySample'];
    }

    /**
    * Sets querySample
    *
    * @param string $querySample 执行语法。
    *
    * @return $this
    */
    public function setQuerySample($querySample)
    {
        $this->container['querySample'] = $querySample;
        return $this;
    }

    /**
    * Gets type
    *  语句类型。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 语句类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets time
    *  执行时间。
    *
    * @return string
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param string $time 执行时间。
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets lockTime
    *  等待锁时间。
    *
    * @return string
    */
    public function getLockTime()
    {
        return $this->container['lockTime'];
    }

    /**
    * Sets lockTime
    *
    * @param string $lockTime 等待锁时间。
    *
    * @return $this
    */
    public function setLockTime($lockTime)
    {
        $this->container['lockTime'] = $lockTime;
        return $this;
    }

    /**
    * Gets rowsSent
    *  角色所在数据库名称。
    *
    * @return string
    */
    public function getRowsSent()
    {
        return $this->container['rowsSent'];
    }

    /**
    * Sets rowsSent
    *
    * @param string $rowsSent 角色所在数据库名称。
    *
    * @return $this
    */
    public function setRowsSent($rowsSent)
    {
        $this->container['rowsSent'] = $rowsSent;
        return $this;
    }

    /**
    * Gets rowsExamined
    *  扫描的行数量。
    *
    * @return string
    */
    public function getRowsExamined()
    {
        return $this->container['rowsExamined'];
    }

    /**
    * Sets rowsExamined
    *
    * @param string $rowsExamined 扫描的行数量。
    *
    * @return $this
    */
    public function setRowsExamined($rowsExamined)
    {
        $this->container['rowsExamined'] = $rowsExamined;
        return $this;
    }

    /**
    * Gets database
    *  所属数据库。
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
    * @param string $database 所属数据库。
    *
    * @return $this
    */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;
        return $this;
    }

    /**
    * Gets startTime
    *  发生时间，UTC时间。
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime 发生时间，UTC时间。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
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

