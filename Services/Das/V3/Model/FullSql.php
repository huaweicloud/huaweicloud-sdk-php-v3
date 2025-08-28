<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FullSql implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FullSql';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sql  SQL语句。
    * operateType  操作类型。
    * status  状态。
    * errorNo  错误码。
    * database  数据库名。
    * client  客户端。
    * threadId  线程ID。
    * user  用户。
    * executeAt  执行开始时间（Unix timestamp），单位：毫秒。
    * queryTime  执行耗时（毫秒）。
    * lockTime  锁等待耗时（毫秒）。
    * rowsExamined  扫描行数。
    * rowsSent  返回行数。
    * rowsAffected  更新行数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sql' => 'string',
            'operateType' => 'string',
            'status' => 'string',
            'errorNo' => 'string',
            'database' => 'string',
            'client' => 'string',
            'threadId' => 'string',
            'user' => 'string',
            'executeAt' => 'int',
            'queryTime' => 'double',
            'lockTime' => 'double',
            'rowsExamined' => 'int',
            'rowsSent' => 'int',
            'rowsAffected' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sql  SQL语句。
    * operateType  操作类型。
    * status  状态。
    * errorNo  错误码。
    * database  数据库名。
    * client  客户端。
    * threadId  线程ID。
    * user  用户。
    * executeAt  执行开始时间（Unix timestamp），单位：毫秒。
    * queryTime  执行耗时（毫秒）。
    * lockTime  锁等待耗时（毫秒）。
    * rowsExamined  扫描行数。
    * rowsSent  返回行数。
    * rowsAffected  更新行数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sql' => null,
        'operateType' => null,
        'status' => null,
        'errorNo' => null,
        'database' => null,
        'client' => null,
        'threadId' => null,
        'user' => null,
        'executeAt' => 'int64',
        'queryTime' => 'double',
        'lockTime' => 'double',
        'rowsExamined' => 'int64',
        'rowsSent' => 'int64',
        'rowsAffected' => 'int64'
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
    * sql  SQL语句。
    * operateType  操作类型。
    * status  状态。
    * errorNo  错误码。
    * database  数据库名。
    * client  客户端。
    * threadId  线程ID。
    * user  用户。
    * executeAt  执行开始时间（Unix timestamp），单位：毫秒。
    * queryTime  执行耗时（毫秒）。
    * lockTime  锁等待耗时（毫秒）。
    * rowsExamined  扫描行数。
    * rowsSent  返回行数。
    * rowsAffected  更新行数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sql' => 'sql',
            'operateType' => 'operate_type',
            'status' => 'status',
            'errorNo' => 'error_no',
            'database' => 'database',
            'client' => 'client',
            'threadId' => 'thread_id',
            'user' => 'user',
            'executeAt' => 'execute_at',
            'queryTime' => 'query_time',
            'lockTime' => 'lock_time',
            'rowsExamined' => 'rows_examined',
            'rowsSent' => 'rows_sent',
            'rowsAffected' => 'rows_affected'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sql  SQL语句。
    * operateType  操作类型。
    * status  状态。
    * errorNo  错误码。
    * database  数据库名。
    * client  客户端。
    * threadId  线程ID。
    * user  用户。
    * executeAt  执行开始时间（Unix timestamp），单位：毫秒。
    * queryTime  执行耗时（毫秒）。
    * lockTime  锁等待耗时（毫秒）。
    * rowsExamined  扫描行数。
    * rowsSent  返回行数。
    * rowsAffected  更新行数。
    *
    * @var string[]
    */
    protected static $setters = [
            'sql' => 'setSql',
            'operateType' => 'setOperateType',
            'status' => 'setStatus',
            'errorNo' => 'setErrorNo',
            'database' => 'setDatabase',
            'client' => 'setClient',
            'threadId' => 'setThreadId',
            'user' => 'setUser',
            'executeAt' => 'setExecuteAt',
            'queryTime' => 'setQueryTime',
            'lockTime' => 'setLockTime',
            'rowsExamined' => 'setRowsExamined',
            'rowsSent' => 'setRowsSent',
            'rowsAffected' => 'setRowsAffected'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sql  SQL语句。
    * operateType  操作类型。
    * status  状态。
    * errorNo  错误码。
    * database  数据库名。
    * client  客户端。
    * threadId  线程ID。
    * user  用户。
    * executeAt  执行开始时间（Unix timestamp），单位：毫秒。
    * queryTime  执行耗时（毫秒）。
    * lockTime  锁等待耗时（毫秒）。
    * rowsExamined  扫描行数。
    * rowsSent  返回行数。
    * rowsAffected  更新行数。
    *
    * @var string[]
    */
    protected static $getters = [
            'sql' => 'getSql',
            'operateType' => 'getOperateType',
            'status' => 'getStatus',
            'errorNo' => 'getErrorNo',
            'database' => 'getDatabase',
            'client' => 'getClient',
            'threadId' => 'getThreadId',
            'user' => 'getUser',
            'executeAt' => 'getExecuteAt',
            'queryTime' => 'getQueryTime',
            'lockTime' => 'getLockTime',
            'rowsExamined' => 'getRowsExamined',
            'rowsSent' => 'getRowsSent',
            'rowsAffected' => 'getRowsAffected'
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
        $this->container['sql'] = isset($data['sql']) ? $data['sql'] : null;
        $this->container['operateType'] = isset($data['operateType']) ? $data['operateType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['errorNo'] = isset($data['errorNo']) ? $data['errorNo'] : null;
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['client'] = isset($data['client']) ? $data['client'] : null;
        $this->container['threadId'] = isset($data['threadId']) ? $data['threadId'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['executeAt'] = isset($data['executeAt']) ? $data['executeAt'] : null;
        $this->container['queryTime'] = isset($data['queryTime']) ? $data['queryTime'] : null;
        $this->container['lockTime'] = isset($data['lockTime']) ? $data['lockTime'] : null;
        $this->container['rowsExamined'] = isset($data['rowsExamined']) ? $data['rowsExamined'] : null;
        $this->container['rowsSent'] = isset($data['rowsSent']) ? $data['rowsSent'] : null;
        $this->container['rowsAffected'] = isset($data['rowsAffected']) ? $data['rowsAffected'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sql'] === null) {
            $invalidProperties[] = "'sql' can't be null";
        }
        if ($this->container['operateType'] === null) {
            $invalidProperties[] = "'operateType' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['errorNo'] === null) {
            $invalidProperties[] = "'errorNo' can't be null";
        }
        if ($this->container['database'] === null) {
            $invalidProperties[] = "'database' can't be null";
        }
        if ($this->container['client'] === null) {
            $invalidProperties[] = "'client' can't be null";
        }
        if ($this->container['threadId'] === null) {
            $invalidProperties[] = "'threadId' can't be null";
        }
        if ($this->container['user'] === null) {
            $invalidProperties[] = "'user' can't be null";
        }
        if ($this->container['executeAt'] === null) {
            $invalidProperties[] = "'executeAt' can't be null";
        }
        if ($this->container['queryTime'] === null) {
            $invalidProperties[] = "'queryTime' can't be null";
        }
        if ($this->container['lockTime'] === null) {
            $invalidProperties[] = "'lockTime' can't be null";
        }
        if ($this->container['rowsExamined'] === null) {
            $invalidProperties[] = "'rowsExamined' can't be null";
        }
        if ($this->container['rowsSent'] === null) {
            $invalidProperties[] = "'rowsSent' can't be null";
        }
        if ($this->container['rowsAffected'] === null) {
            $invalidProperties[] = "'rowsAffected' can't be null";
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
    * Gets sql
    *  SQL语句。
    *
    * @return string
    */
    public function getSql()
    {
        return $this->container['sql'];
    }

    /**
    * Sets sql
    *
    * @param string $sql SQL语句。
    *
    * @return $this
    */
    public function setSql($sql)
    {
        $this->container['sql'] = $sql;
        return $this;
    }

    /**
    * Gets operateType
    *  操作类型。
    *
    * @return string
    */
    public function getOperateType()
    {
        return $this->container['operateType'];
    }

    /**
    * Sets operateType
    *
    * @param string $operateType 操作类型。
    *
    * @return $this
    */
    public function setOperateType($operateType)
    {
        $this->container['operateType'] = $operateType;
        return $this;
    }

    /**
    * Gets status
    *  状态。
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets errorNo
    *  错误码。
    *
    * @return string
    */
    public function getErrorNo()
    {
        return $this->container['errorNo'];
    }

    /**
    * Sets errorNo
    *
    * @param string $errorNo 错误码。
    *
    * @return $this
    */
    public function setErrorNo($errorNo)
    {
        $this->container['errorNo'] = $errorNo;
        return $this;
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
    * Gets client
    *  客户端。
    *
    * @return string
    */
    public function getClient()
    {
        return $this->container['client'];
    }

    /**
    * Sets client
    *
    * @param string $client 客户端。
    *
    * @return $this
    */
    public function setClient($client)
    {
        $this->container['client'] = $client;
        return $this;
    }

    /**
    * Gets threadId
    *  线程ID。
    *
    * @return string
    */
    public function getThreadId()
    {
        return $this->container['threadId'];
    }

    /**
    * Sets threadId
    *
    * @param string $threadId 线程ID。
    *
    * @return $this
    */
    public function setThreadId($threadId)
    {
        $this->container['threadId'] = $threadId;
        return $this;
    }

    /**
    * Gets user
    *  用户。
    *
    * @return string
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param string $user 用户。
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets executeAt
    *  执行开始时间（Unix timestamp），单位：毫秒。
    *
    * @return int
    */
    public function getExecuteAt()
    {
        return $this->container['executeAt'];
    }

    /**
    * Sets executeAt
    *
    * @param int $executeAt 执行开始时间（Unix timestamp），单位：毫秒。
    *
    * @return $this
    */
    public function setExecuteAt($executeAt)
    {
        $this->container['executeAt'] = $executeAt;
        return $this;
    }

    /**
    * Gets queryTime
    *  执行耗时（毫秒）。
    *
    * @return double
    */
    public function getQueryTime()
    {
        return $this->container['queryTime'];
    }

    /**
    * Sets queryTime
    *
    * @param double $queryTime 执行耗时（毫秒）。
    *
    * @return $this
    */
    public function setQueryTime($queryTime)
    {
        $this->container['queryTime'] = $queryTime;
        return $this;
    }

    /**
    * Gets lockTime
    *  锁等待耗时（毫秒）。
    *
    * @return double
    */
    public function getLockTime()
    {
        return $this->container['lockTime'];
    }

    /**
    * Sets lockTime
    *
    * @param double $lockTime 锁等待耗时（毫秒）。
    *
    * @return $this
    */
    public function setLockTime($lockTime)
    {
        $this->container['lockTime'] = $lockTime;
        return $this;
    }

    /**
    * Gets rowsExamined
    *  扫描行数。
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
    * @param int $rowsExamined 扫描行数。
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
    *  返回行数。
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
    * @param int $rowsSent 返回行数。
    *
    * @return $this
    */
    public function setRowsSent($rowsSent)
    {
        $this->container['rowsSent'] = $rowsSent;
        return $this;
    }

    /**
    * Gets rowsAffected
    *  更新行数。
    *
    * @return int
    */
    public function getRowsAffected()
    {
        return $this->container['rowsAffected'];
    }

    /**
    * Sets rowsAffected
    *
    * @param int $rowsAffected 更新行数。
    *
    * @return $this
    */
    public function setRowsAffected($rowsAffected)
    {
        $this->container['rowsAffected'] = $rowsAffected;
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

