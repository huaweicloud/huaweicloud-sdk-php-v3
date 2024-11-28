<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSlowLogStatisticsItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSlowLogStatisticsItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clientIp  IP地址。
    * count  执行次数。
    * database  所属数据库。
    * lockTime  平均等待锁时间。
    * nodeId  节点ID。
    * querySample  执行语法。
    * rowsExamined  平均扫描的行数量。
    * rowsSent  平均结果行统计数量。
    * time  平均执行时间。
    * type  语句类型。
    * users  账号。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clientIp' => 'string',
            'count' => 'string',
            'database' => 'string',
            'lockTime' => 'string',
            'nodeId' => 'string',
            'querySample' => 'string',
            'rowsExamined' => 'int',
            'rowsSent' => 'int',
            'time' => 'string',
            'type' => 'string',
            'users' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clientIp  IP地址。
    * count  执行次数。
    * database  所属数据库。
    * lockTime  平均等待锁时间。
    * nodeId  节点ID。
    * querySample  执行语法。
    * rowsExamined  平均扫描的行数量。
    * rowsSent  平均结果行统计数量。
    * time  平均执行时间。
    * type  语句类型。
    * users  账号。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clientIp' => null,
        'count' => null,
        'database' => null,
        'lockTime' => null,
        'nodeId' => null,
        'querySample' => null,
        'rowsExamined' => null,
        'rowsSent' => null,
        'time' => null,
        'type' => null,
        'users' => null
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
    * clientIp  IP地址。
    * count  执行次数。
    * database  所属数据库。
    * lockTime  平均等待锁时间。
    * nodeId  节点ID。
    * querySample  执行语法。
    * rowsExamined  平均扫描的行数量。
    * rowsSent  平均结果行统计数量。
    * time  平均执行时间。
    * type  语句类型。
    * users  账号。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clientIp' => 'client_ip',
            'count' => 'count',
            'database' => 'database',
            'lockTime' => 'lock_time',
            'nodeId' => 'node_id',
            'querySample' => 'query_sample',
            'rowsExamined' => 'rows_examined',
            'rowsSent' => 'rows_sent',
            'time' => 'time',
            'type' => 'type',
            'users' => 'users'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clientIp  IP地址。
    * count  执行次数。
    * database  所属数据库。
    * lockTime  平均等待锁时间。
    * nodeId  节点ID。
    * querySample  执行语法。
    * rowsExamined  平均扫描的行数量。
    * rowsSent  平均结果行统计数量。
    * time  平均执行时间。
    * type  语句类型。
    * users  账号。
    *
    * @var string[]
    */
    protected static $setters = [
            'clientIp' => 'setClientIp',
            'count' => 'setCount',
            'database' => 'setDatabase',
            'lockTime' => 'setLockTime',
            'nodeId' => 'setNodeId',
            'querySample' => 'setQuerySample',
            'rowsExamined' => 'setRowsExamined',
            'rowsSent' => 'setRowsSent',
            'time' => 'setTime',
            'type' => 'setType',
            'users' => 'setUsers'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clientIp  IP地址。
    * count  执行次数。
    * database  所属数据库。
    * lockTime  平均等待锁时间。
    * nodeId  节点ID。
    * querySample  执行语法。
    * rowsExamined  平均扫描的行数量。
    * rowsSent  平均结果行统计数量。
    * time  平均执行时间。
    * type  语句类型。
    * users  账号。
    *
    * @var string[]
    */
    protected static $getters = [
            'clientIp' => 'getClientIp',
            'count' => 'getCount',
            'database' => 'getDatabase',
            'lockTime' => 'getLockTime',
            'nodeId' => 'getNodeId',
            'querySample' => 'getQuerySample',
            'rowsExamined' => 'getRowsExamined',
            'rowsSent' => 'getRowsSent',
            'time' => 'getTime',
            'type' => 'getType',
            'users' => 'getUsers'
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
        $this->container['clientIp'] = isset($data['clientIp']) ? $data['clientIp'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['lockTime'] = isset($data['lockTime']) ? $data['lockTime'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['querySample'] = isset($data['querySample']) ? $data['querySample'] : null;
        $this->container['rowsExamined'] = isset($data['rowsExamined']) ? $data['rowsExamined'] : null;
        $this->container['rowsSent'] = isset($data['rowsSent']) ? $data['rowsSent'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['users'] = isset($data['users']) ? $data['users'] : null;
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
    * Gets clientIp
    *  IP地址。
    *
    * @return string|null
    */
    public function getClientIp()
    {
        return $this->container['clientIp'];
    }

    /**
    * Sets clientIp
    *
    * @param string|null $clientIp IP地址。
    *
    * @return $this
    */
    public function setClientIp($clientIp)
    {
        $this->container['clientIp'] = $clientIp;
        return $this;
    }

    /**
    * Gets count
    *  执行次数。
    *
    * @return string|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param string|null $count 执行次数。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets database
    *  所属数据库。
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
    * @param string|null $database 所属数据库。
    *
    * @return $this
    */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;
        return $this;
    }

    /**
    * Gets lockTime
    *  平均等待锁时间。
    *
    * @return string|null
    */
    public function getLockTime()
    {
        return $this->container['lockTime'];
    }

    /**
    * Sets lockTime
    *
    * @param string|null $lockTime 平均等待锁时间。
    *
    * @return $this
    */
    public function setLockTime($lockTime)
    {
        $this->container['lockTime'] = $lockTime;
        return $this;
    }

    /**
    * Gets nodeId
    *  节点ID。
    *
    * @return string|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string|null $nodeId 节点ID。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets querySample
    *  执行语法。
    *
    * @return string|null
    */
    public function getQuerySample()
    {
        return $this->container['querySample'];
    }

    /**
    * Sets querySample
    *
    * @param string|null $querySample 执行语法。
    *
    * @return $this
    */
    public function setQuerySample($querySample)
    {
        $this->container['querySample'] = $querySample;
        return $this;
    }

    /**
    * Gets rowsExamined
    *  平均扫描的行数量。
    *
    * @return int|null
    */
    public function getRowsExamined()
    {
        return $this->container['rowsExamined'];
    }

    /**
    * Sets rowsExamined
    *
    * @param int|null $rowsExamined 平均扫描的行数量。
    *
    * @return $this
    */
    public function setRowsExamined($rowsExamined)
    {
        $this->container['rowsExamined'] = $rowsExamined;
        return $this;
    }

    /**
    * Gets rowsSent
    *  平均结果行统计数量。
    *
    * @return int|null
    */
    public function getRowsSent()
    {
        return $this->container['rowsSent'];
    }

    /**
    * Sets rowsSent
    *
    * @param int|null $rowsSent 平均结果行统计数量。
    *
    * @return $this
    */
    public function setRowsSent($rowsSent)
    {
        $this->container['rowsSent'] = $rowsSent;
        return $this;
    }

    /**
    * Gets time
    *  平均执行时间。
    *
    * @return string|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param string|null $time 平均执行时间。
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets type
    *  语句类型。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 语句类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets users
    *  账号。
    *
    * @return string|null
    */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
    * Sets users
    *
    * @param string|null $users 账号。
    *
    * @return $this
    */
    public function setUsers($users)
    {
        $this->container['users'] = $users;
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

