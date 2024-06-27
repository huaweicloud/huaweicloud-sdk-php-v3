<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChSlowLogDetailResponseSlowLogList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChSlowLogDetailResponse_slow_log_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeId  ClickHouse实例节点ID。
    * time  数据库语句执行时间。
    * lockTime  数据库语句等待锁时间。
    * rowsSent  数据库语句执行结果行数。
    * rowsExamined  数据库语句扫描行数。
    * database  所属数据库名。
    * users  执行语句账号。
    * querySample  数据库执行语句。
    * type  数据库语句类型。
    * clientIp  IP地址。
    * startTime  数据库语句发生时间。
    * lineNum  日志单行序列号，第一次查询时不需要此参数，后续分页查询时需要使用，可从上次查询的返回信息中获取。
    * count  慢日志数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeId' => 'string',
            'time' => 'string',
            'lockTime' => 'string',
            'rowsSent' => 'int',
            'rowsExamined' => 'int',
            'database' => 'string',
            'users' => 'string',
            'querySample' => 'string',
            'type' => 'string',
            'clientIp' => 'string',
            'startTime' => 'string',
            'lineNum' => 'string',
            'count' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeId  ClickHouse实例节点ID。
    * time  数据库语句执行时间。
    * lockTime  数据库语句等待锁时间。
    * rowsSent  数据库语句执行结果行数。
    * rowsExamined  数据库语句扫描行数。
    * database  所属数据库名。
    * users  执行语句账号。
    * querySample  数据库执行语句。
    * type  数据库语句类型。
    * clientIp  IP地址。
    * startTime  数据库语句发生时间。
    * lineNum  日志单行序列号，第一次查询时不需要此参数，后续分页查询时需要使用，可从上次查询的返回信息中获取。
    * count  慢日志数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeId' => null,
        'time' => null,
        'lockTime' => null,
        'rowsSent' => 'int32',
        'rowsExamined' => 'int32',
        'database' => null,
        'users' => null,
        'querySample' => null,
        'type' => null,
        'clientIp' => null,
        'startTime' => null,
        'lineNum' => null,
        'count' => null
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
    * nodeId  ClickHouse实例节点ID。
    * time  数据库语句执行时间。
    * lockTime  数据库语句等待锁时间。
    * rowsSent  数据库语句执行结果行数。
    * rowsExamined  数据库语句扫描行数。
    * database  所属数据库名。
    * users  执行语句账号。
    * querySample  数据库执行语句。
    * type  数据库语句类型。
    * clientIp  IP地址。
    * startTime  数据库语句发生时间。
    * lineNum  日志单行序列号，第一次查询时不需要此参数，后续分页查询时需要使用，可从上次查询的返回信息中获取。
    * count  慢日志数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeId' => 'node_id',
            'time' => 'time',
            'lockTime' => 'lock_time',
            'rowsSent' => 'rows_sent',
            'rowsExamined' => 'rows_examined',
            'database' => 'database',
            'users' => 'users',
            'querySample' => 'query_sample',
            'type' => 'type',
            'clientIp' => 'client_ip',
            'startTime' => 'start_time',
            'lineNum' => 'line_num',
            'count' => 'count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeId  ClickHouse实例节点ID。
    * time  数据库语句执行时间。
    * lockTime  数据库语句等待锁时间。
    * rowsSent  数据库语句执行结果行数。
    * rowsExamined  数据库语句扫描行数。
    * database  所属数据库名。
    * users  执行语句账号。
    * querySample  数据库执行语句。
    * type  数据库语句类型。
    * clientIp  IP地址。
    * startTime  数据库语句发生时间。
    * lineNum  日志单行序列号，第一次查询时不需要此参数，后续分页查询时需要使用，可从上次查询的返回信息中获取。
    * count  慢日志数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeId' => 'setNodeId',
            'time' => 'setTime',
            'lockTime' => 'setLockTime',
            'rowsSent' => 'setRowsSent',
            'rowsExamined' => 'setRowsExamined',
            'database' => 'setDatabase',
            'users' => 'setUsers',
            'querySample' => 'setQuerySample',
            'type' => 'setType',
            'clientIp' => 'setClientIp',
            'startTime' => 'setStartTime',
            'lineNum' => 'setLineNum',
            'count' => 'setCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeId  ClickHouse实例节点ID。
    * time  数据库语句执行时间。
    * lockTime  数据库语句等待锁时间。
    * rowsSent  数据库语句执行结果行数。
    * rowsExamined  数据库语句扫描行数。
    * database  所属数据库名。
    * users  执行语句账号。
    * querySample  数据库执行语句。
    * type  数据库语句类型。
    * clientIp  IP地址。
    * startTime  数据库语句发生时间。
    * lineNum  日志单行序列号，第一次查询时不需要此参数，后续分页查询时需要使用，可从上次查询的返回信息中获取。
    * count  慢日志数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeId' => 'getNodeId',
            'time' => 'getTime',
            'lockTime' => 'getLockTime',
            'rowsSent' => 'getRowsSent',
            'rowsExamined' => 'getRowsExamined',
            'database' => 'getDatabase',
            'users' => 'getUsers',
            'querySample' => 'getQuerySample',
            'type' => 'getType',
            'clientIp' => 'getClientIp',
            'startTime' => 'getStartTime',
            'lineNum' => 'getLineNum',
            'count' => 'getCount'
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
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['lockTime'] = isset($data['lockTime']) ? $data['lockTime'] : null;
        $this->container['rowsSent'] = isset($data['rowsSent']) ? $data['rowsSent'] : null;
        $this->container['rowsExamined'] = isset($data['rowsExamined']) ? $data['rowsExamined'] : null;
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['users'] = isset($data['users']) ? $data['users'] : null;
        $this->container['querySample'] = isset($data['querySample']) ? $data['querySample'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['clientIp'] = isset($data['clientIp']) ? $data['clientIp'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['lineNum'] = isset($data['lineNum']) ? $data['lineNum'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nodeId'] === null) {
            $invalidProperties[] = "'nodeId' can't be null";
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
        if ($this->container['users'] === null) {
            $invalidProperties[] = "'users' can't be null";
        }
        if ($this->container['querySample'] === null) {
            $invalidProperties[] = "'querySample' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['clientIp'] === null) {
            $invalidProperties[] = "'clientIp' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['lineNum'] === null) {
            $invalidProperties[] = "'lineNum' can't be null";
        }
        if ($this->container['count'] === null) {
            $invalidProperties[] = "'count' can't be null";
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
    * Gets nodeId
    *  ClickHouse实例节点ID。
    *
    * @return string
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string $nodeId ClickHouse实例节点ID。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets time
    *  数据库语句执行时间。
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
    * @param string $time 数据库语句执行时间。
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
    *  数据库语句等待锁时间。
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
    * @param string $lockTime 数据库语句等待锁时间。
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
    *  数据库语句执行结果行数。
    *
    * @return int
    */
    public function getRowsSent()
    {
        return $this->container['rowsSent'];
    }

    /**
    * Sets rowsSent
    *
    * @param int $rowsSent 数据库语句执行结果行数。
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
    *  数据库语句扫描行数。
    *
    * @return int
    */
    public function getRowsExamined()
    {
        return $this->container['rowsExamined'];
    }

    /**
    * Sets rowsExamined
    *
    * @param int $rowsExamined 数据库语句扫描行数。
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
    *  所属数据库名。
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
    * @param string $database 所属数据库名。
    *
    * @return $this
    */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;
        return $this;
    }

    /**
    * Gets users
    *  执行语句账号。
    *
    * @return string
    */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
    * Sets users
    *
    * @param string $users 执行语句账号。
    *
    * @return $this
    */
    public function setUsers($users)
    {
        $this->container['users'] = $users;
        return $this;
    }

    /**
    * Gets querySample
    *  数据库执行语句。
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
    * @param string $querySample 数据库执行语句。
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
    *  数据库语句类型。
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
    * @param string $type 数据库语句类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets clientIp
    *  IP地址。
    *
    * @return string
    */
    public function getClientIp()
    {
        return $this->container['clientIp'];
    }

    /**
    * Sets clientIp
    *
    * @param string $clientIp IP地址。
    *
    * @return $this
    */
    public function setClientIp($clientIp)
    {
        $this->container['clientIp'] = $clientIp;
        return $this;
    }

    /**
    * Gets startTime
    *  数据库语句发生时间。
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
    * @param string $startTime 数据库语句发生时间。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets lineNum
    *  日志单行序列号，第一次查询时不需要此参数，后续分页查询时需要使用，可从上次查询的返回信息中获取。
    *
    * @return string
    */
    public function getLineNum()
    {
        return $this->container['lineNum'];
    }

    /**
    * Sets lineNum
    *
    * @param string $lineNum 日志单行序列号，第一次查询时不需要此参数，后续分页查询时需要使用，可从上次查询的返回信息中获取。
    *
    * @return $this
    */
    public function setLineNum($lineNum)
    {
        $this->container['lineNum'] = $lineNum;
        return $this;
    }

    /**
    * Gets count
    *  慢日志数量。
    *
    * @return string
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param string $count 慢日志数量。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
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

