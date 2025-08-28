<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MetadataLock implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MetadataLock';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * threadId  会话ID
    * lockStatus  锁状态，取值为PENDING和GRANTED，分别表示等待锁和持有锁。
    * lockMode  加锁模式，取值为MDL_SHARED 、MDL_EXCLUSIVE 、MDL_SHARED_READ、MDL_SHARED_WRITE等。
    * lockType  锁类型，取值为Table metadata lock、Schema metadata lock、Tablespace lock、Global read lock，分别表示表元数据锁、库元数据锁、表空间锁、全局读锁。
    * lockDuration  锁范围，取值为MDL_STATEMENT、MDL_TRANSACTION、MDL_EXPLICIT，分别表示语句级别、事务级别、global级别
    * tableSchema  锁所在的数据库，对于部分Global read lock级别的元数据锁，该值为空。
    * tableName  表名
    * user  用户
    * time  时间
    * host  主机
    * database  会话所在的数据库
    * command  命令
    * state  状态
    * sql  SQL语句
    * trxExecTime  事务执行时间
    * blockProcess  阻塞会话列表
    * waitProcess  等待会话列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'threadId' => 'string',
            'lockStatus' => 'string',
            'lockMode' => 'string',
            'lockType' => 'string',
            'lockDuration' => 'string',
            'tableSchema' => 'string',
            'tableName' => 'string',
            'user' => 'string',
            'time' => 'string',
            'host' => 'string',
            'database' => 'string',
            'command' => 'string',
            'state' => 'string',
            'sql' => 'string',
            'trxExecTime' => 'string',
            'blockProcess' => '\HuaweiCloud\SDK\Das\V3\Model\Process[]',
            'waitProcess' => '\HuaweiCloud\SDK\Das\V3\Model\Process[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * threadId  会话ID
    * lockStatus  锁状态，取值为PENDING和GRANTED，分别表示等待锁和持有锁。
    * lockMode  加锁模式，取值为MDL_SHARED 、MDL_EXCLUSIVE 、MDL_SHARED_READ、MDL_SHARED_WRITE等。
    * lockType  锁类型，取值为Table metadata lock、Schema metadata lock、Tablespace lock、Global read lock，分别表示表元数据锁、库元数据锁、表空间锁、全局读锁。
    * lockDuration  锁范围，取值为MDL_STATEMENT、MDL_TRANSACTION、MDL_EXPLICIT，分别表示语句级别、事务级别、global级别
    * tableSchema  锁所在的数据库，对于部分Global read lock级别的元数据锁，该值为空。
    * tableName  表名
    * user  用户
    * time  时间
    * host  主机
    * database  会话所在的数据库
    * command  命令
    * state  状态
    * sql  SQL语句
    * trxExecTime  事务执行时间
    * blockProcess  阻塞会话列表
    * waitProcess  等待会话列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'threadId' => null,
        'lockStatus' => null,
        'lockMode' => null,
        'lockType' => null,
        'lockDuration' => null,
        'tableSchema' => null,
        'tableName' => null,
        'user' => null,
        'time' => null,
        'host' => null,
        'database' => null,
        'command' => null,
        'state' => null,
        'sql' => null,
        'trxExecTime' => null,
        'blockProcess' => null,
        'waitProcess' => null
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
    * threadId  会话ID
    * lockStatus  锁状态，取值为PENDING和GRANTED，分别表示等待锁和持有锁。
    * lockMode  加锁模式，取值为MDL_SHARED 、MDL_EXCLUSIVE 、MDL_SHARED_READ、MDL_SHARED_WRITE等。
    * lockType  锁类型，取值为Table metadata lock、Schema metadata lock、Tablespace lock、Global read lock，分别表示表元数据锁、库元数据锁、表空间锁、全局读锁。
    * lockDuration  锁范围，取值为MDL_STATEMENT、MDL_TRANSACTION、MDL_EXPLICIT，分别表示语句级别、事务级别、global级别
    * tableSchema  锁所在的数据库，对于部分Global read lock级别的元数据锁，该值为空。
    * tableName  表名
    * user  用户
    * time  时间
    * host  主机
    * database  会话所在的数据库
    * command  命令
    * state  状态
    * sql  SQL语句
    * trxExecTime  事务执行时间
    * blockProcess  阻塞会话列表
    * waitProcess  等待会话列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'threadId' => 'thread_id',
            'lockStatus' => 'lock_status',
            'lockMode' => 'lock_mode',
            'lockType' => 'lock_type',
            'lockDuration' => 'lock_duration',
            'tableSchema' => 'table_schema',
            'tableName' => 'table_name',
            'user' => 'user',
            'time' => 'time',
            'host' => 'host',
            'database' => 'database',
            'command' => 'command',
            'state' => 'state',
            'sql' => 'sql',
            'trxExecTime' => 'trx_exec_time',
            'blockProcess' => 'block_process',
            'waitProcess' => 'wait_process'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * threadId  会话ID
    * lockStatus  锁状态，取值为PENDING和GRANTED，分别表示等待锁和持有锁。
    * lockMode  加锁模式，取值为MDL_SHARED 、MDL_EXCLUSIVE 、MDL_SHARED_READ、MDL_SHARED_WRITE等。
    * lockType  锁类型，取值为Table metadata lock、Schema metadata lock、Tablespace lock、Global read lock，分别表示表元数据锁、库元数据锁、表空间锁、全局读锁。
    * lockDuration  锁范围，取值为MDL_STATEMENT、MDL_TRANSACTION、MDL_EXPLICIT，分别表示语句级别、事务级别、global级别
    * tableSchema  锁所在的数据库，对于部分Global read lock级别的元数据锁，该值为空。
    * tableName  表名
    * user  用户
    * time  时间
    * host  主机
    * database  会话所在的数据库
    * command  命令
    * state  状态
    * sql  SQL语句
    * trxExecTime  事务执行时间
    * blockProcess  阻塞会话列表
    * waitProcess  等待会话列表
    *
    * @var string[]
    */
    protected static $setters = [
            'threadId' => 'setThreadId',
            'lockStatus' => 'setLockStatus',
            'lockMode' => 'setLockMode',
            'lockType' => 'setLockType',
            'lockDuration' => 'setLockDuration',
            'tableSchema' => 'setTableSchema',
            'tableName' => 'setTableName',
            'user' => 'setUser',
            'time' => 'setTime',
            'host' => 'setHost',
            'database' => 'setDatabase',
            'command' => 'setCommand',
            'state' => 'setState',
            'sql' => 'setSql',
            'trxExecTime' => 'setTrxExecTime',
            'blockProcess' => 'setBlockProcess',
            'waitProcess' => 'setWaitProcess'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * threadId  会话ID
    * lockStatus  锁状态，取值为PENDING和GRANTED，分别表示等待锁和持有锁。
    * lockMode  加锁模式，取值为MDL_SHARED 、MDL_EXCLUSIVE 、MDL_SHARED_READ、MDL_SHARED_WRITE等。
    * lockType  锁类型，取值为Table metadata lock、Schema metadata lock、Tablespace lock、Global read lock，分别表示表元数据锁、库元数据锁、表空间锁、全局读锁。
    * lockDuration  锁范围，取值为MDL_STATEMENT、MDL_TRANSACTION、MDL_EXPLICIT，分别表示语句级别、事务级别、global级别
    * tableSchema  锁所在的数据库，对于部分Global read lock级别的元数据锁，该值为空。
    * tableName  表名
    * user  用户
    * time  时间
    * host  主机
    * database  会话所在的数据库
    * command  命令
    * state  状态
    * sql  SQL语句
    * trxExecTime  事务执行时间
    * blockProcess  阻塞会话列表
    * waitProcess  等待会话列表
    *
    * @var string[]
    */
    protected static $getters = [
            'threadId' => 'getThreadId',
            'lockStatus' => 'getLockStatus',
            'lockMode' => 'getLockMode',
            'lockType' => 'getLockType',
            'lockDuration' => 'getLockDuration',
            'tableSchema' => 'getTableSchema',
            'tableName' => 'getTableName',
            'user' => 'getUser',
            'time' => 'getTime',
            'host' => 'getHost',
            'database' => 'getDatabase',
            'command' => 'getCommand',
            'state' => 'getState',
            'sql' => 'getSql',
            'trxExecTime' => 'getTrxExecTime',
            'blockProcess' => 'getBlockProcess',
            'waitProcess' => 'getWaitProcess'
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
        $this->container['threadId'] = isset($data['threadId']) ? $data['threadId'] : null;
        $this->container['lockStatus'] = isset($data['lockStatus']) ? $data['lockStatus'] : null;
        $this->container['lockMode'] = isset($data['lockMode']) ? $data['lockMode'] : null;
        $this->container['lockType'] = isset($data['lockType']) ? $data['lockType'] : null;
        $this->container['lockDuration'] = isset($data['lockDuration']) ? $data['lockDuration'] : null;
        $this->container['tableSchema'] = isset($data['tableSchema']) ? $data['tableSchema'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['command'] = isset($data['command']) ? $data['command'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['sql'] = isset($data['sql']) ? $data['sql'] : null;
        $this->container['trxExecTime'] = isset($data['trxExecTime']) ? $data['trxExecTime'] : null;
        $this->container['blockProcess'] = isset($data['blockProcess']) ? $data['blockProcess'] : null;
        $this->container['waitProcess'] = isset($data['waitProcess']) ? $data['waitProcess'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['threadId'] === null) {
            $invalidProperties[] = "'threadId' can't be null";
        }
        if ($this->container['lockStatus'] === null) {
            $invalidProperties[] = "'lockStatus' can't be null";
        }
        if ($this->container['lockMode'] === null) {
            $invalidProperties[] = "'lockMode' can't be null";
        }
        if ($this->container['lockType'] === null) {
            $invalidProperties[] = "'lockType' can't be null";
        }
        if ($this->container['lockDuration'] === null) {
            $invalidProperties[] = "'lockDuration' can't be null";
        }
        if ($this->container['tableSchema'] === null) {
            $invalidProperties[] = "'tableSchema' can't be null";
        }
        if ($this->container['tableName'] === null) {
            $invalidProperties[] = "'tableName' can't be null";
        }
        if ($this->container['user'] === null) {
            $invalidProperties[] = "'user' can't be null";
        }
        if ($this->container['time'] === null) {
            $invalidProperties[] = "'time' can't be null";
        }
        if ($this->container['host'] === null) {
            $invalidProperties[] = "'host' can't be null";
        }
        if ($this->container['database'] === null) {
            $invalidProperties[] = "'database' can't be null";
        }
        if ($this->container['command'] === null) {
            $invalidProperties[] = "'command' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['sql'] === null) {
            $invalidProperties[] = "'sql' can't be null";
        }
        if ($this->container['trxExecTime'] === null) {
            $invalidProperties[] = "'trxExecTime' can't be null";
        }
        if ($this->container['blockProcess'] === null) {
            $invalidProperties[] = "'blockProcess' can't be null";
        }
        if ($this->container['waitProcess'] === null) {
            $invalidProperties[] = "'waitProcess' can't be null";
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
    * Gets threadId
    *  会话ID
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
    * @param string $threadId 会话ID
    *
    * @return $this
    */
    public function setThreadId($threadId)
    {
        $this->container['threadId'] = $threadId;
        return $this;
    }

    /**
    * Gets lockStatus
    *  锁状态，取值为PENDING和GRANTED，分别表示等待锁和持有锁。
    *
    * @return string
    */
    public function getLockStatus()
    {
        return $this->container['lockStatus'];
    }

    /**
    * Sets lockStatus
    *
    * @param string $lockStatus 锁状态，取值为PENDING和GRANTED，分别表示等待锁和持有锁。
    *
    * @return $this
    */
    public function setLockStatus($lockStatus)
    {
        $this->container['lockStatus'] = $lockStatus;
        return $this;
    }

    /**
    * Gets lockMode
    *  加锁模式，取值为MDL_SHARED 、MDL_EXCLUSIVE 、MDL_SHARED_READ、MDL_SHARED_WRITE等。
    *
    * @return string
    */
    public function getLockMode()
    {
        return $this->container['lockMode'];
    }

    /**
    * Sets lockMode
    *
    * @param string $lockMode 加锁模式，取值为MDL_SHARED 、MDL_EXCLUSIVE 、MDL_SHARED_READ、MDL_SHARED_WRITE等。
    *
    * @return $this
    */
    public function setLockMode($lockMode)
    {
        $this->container['lockMode'] = $lockMode;
        return $this;
    }

    /**
    * Gets lockType
    *  锁类型，取值为Table metadata lock、Schema metadata lock、Tablespace lock、Global read lock，分别表示表元数据锁、库元数据锁、表空间锁、全局读锁。
    *
    * @return string
    */
    public function getLockType()
    {
        return $this->container['lockType'];
    }

    /**
    * Sets lockType
    *
    * @param string $lockType 锁类型，取值为Table metadata lock、Schema metadata lock、Tablespace lock、Global read lock，分别表示表元数据锁、库元数据锁、表空间锁、全局读锁。
    *
    * @return $this
    */
    public function setLockType($lockType)
    {
        $this->container['lockType'] = $lockType;
        return $this;
    }

    /**
    * Gets lockDuration
    *  锁范围，取值为MDL_STATEMENT、MDL_TRANSACTION、MDL_EXPLICIT，分别表示语句级别、事务级别、global级别
    *
    * @return string
    */
    public function getLockDuration()
    {
        return $this->container['lockDuration'];
    }

    /**
    * Sets lockDuration
    *
    * @param string $lockDuration 锁范围，取值为MDL_STATEMENT、MDL_TRANSACTION、MDL_EXPLICIT，分别表示语句级别、事务级别、global级别
    *
    * @return $this
    */
    public function setLockDuration($lockDuration)
    {
        $this->container['lockDuration'] = $lockDuration;
        return $this;
    }

    /**
    * Gets tableSchema
    *  锁所在的数据库，对于部分Global read lock级别的元数据锁，该值为空。
    *
    * @return string
    */
    public function getTableSchema()
    {
        return $this->container['tableSchema'];
    }

    /**
    * Sets tableSchema
    *
    * @param string $tableSchema 锁所在的数据库，对于部分Global read lock级别的元数据锁，该值为空。
    *
    * @return $this
    */
    public function setTableSchema($tableSchema)
    {
        $this->container['tableSchema'] = $tableSchema;
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
    * Gets user
    *  用户
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
    * @param string $user 用户
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets time
    *  时间
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
    * @param string $time 时间
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets host
    *  主机
    *
    * @return string
    */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
    * Sets host
    *
    * @param string $host 主机
    *
    * @return $this
    */
    public function setHost($host)
    {
        $this->container['host'] = $host;
        return $this;
    }

    /**
    * Gets database
    *  会话所在的数据库
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
    * @param string $database 会话所在的数据库
    *
    * @return $this
    */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;
        return $this;
    }

    /**
    * Gets command
    *  命令
    *
    * @return string
    */
    public function getCommand()
    {
        return $this->container['command'];
    }

    /**
    * Sets command
    *
    * @param string $command 命令
    *
    * @return $this
    */
    public function setCommand($command)
    {
        $this->container['command'] = $command;
        return $this;
    }

    /**
    * Gets state
    *  状态
    *
    * @return string
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string $state 状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets sql
    *  SQL语句
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
    * @param string $sql SQL语句
    *
    * @return $this
    */
    public function setSql($sql)
    {
        $this->container['sql'] = $sql;
        return $this;
    }

    /**
    * Gets trxExecTime
    *  事务执行时间
    *
    * @return string
    */
    public function getTrxExecTime()
    {
        return $this->container['trxExecTime'];
    }

    /**
    * Sets trxExecTime
    *
    * @param string $trxExecTime 事务执行时间
    *
    * @return $this
    */
    public function setTrxExecTime($trxExecTime)
    {
        $this->container['trxExecTime'] = $trxExecTime;
        return $this;
    }

    /**
    * Gets blockProcess
    *  阻塞会话列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\Process[]
    */
    public function getBlockProcess()
    {
        return $this->container['blockProcess'];
    }

    /**
    * Sets blockProcess
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\Process[] $blockProcess 阻塞会话列表
    *
    * @return $this
    */
    public function setBlockProcess($blockProcess)
    {
        $this->container['blockProcess'] = $blockProcess;
        return $this;
    }

    /**
    * Gets waitProcess
    *  等待会话列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\Process[]
    */
    public function getWaitProcess()
    {
        return $this->container['waitProcess'];
    }

    /**
    * Sets waitProcess
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\Process[] $waitProcess 等待会话列表
    *
    * @return $this
    */
    public function setWaitProcess($waitProcess)
    {
        $this->container['waitProcess'] = $waitProcess;
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

