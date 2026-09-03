<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MetaLockInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MetaLockInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * lockId  MDL锁ID
    * threadId  线程ID
    * lockStatus  MDL锁状态
    * lockMode  MDL锁等待模式
    * lockType  MDL锁等待信息
    * lockDuration  MDL锁等待持续时间
    * tableSchema  库表schema信息
    * tableName  表名称
    * user  用户名称
    * time  MDL锁等待时间
    * blockNumber  MDL锁等待阻塞数量
    * waitNumber  MDL锁等待数量
    * host  主机
    * dbName  数据库名称
    * command  MDL锁等待SQL语句
    * state  MDL锁等待状态
    * info  MDL锁等待额外信息
    * sqlLimitRule  关联的SQL限流规则
    * trxExecTime  事务执行时间
    * blockProcessInfo  阻塞的事务信息列表
    * waitProcessInfo  等待的事务信息列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'lockId' => 'string',
            'threadId' => 'string',
            'lockStatus' => 'string',
            'lockMode' => 'string',
            'lockType' => 'string',
            'lockDuration' => 'string',
            'tableSchema' => 'string',
            'tableName' => 'string',
            'user' => 'string',
            'time' => 'string',
            'blockNumber' => 'int',
            'waitNumber' => 'int',
            'host' => 'string',
            'dbName' => 'string',
            'command' => 'string',
            'state' => 'string',
            'info' => 'string',
            'sqlLimitRule' => 'string',
            'trxExecTime' => 'string',
            'blockProcessInfo' => '\HuaweiCloud\SDK\Das\V3\Model\ProcessInfo[]',
            'waitProcessInfo' => '\HuaweiCloud\SDK\Das\V3\Model\ProcessInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * lockId  MDL锁ID
    * threadId  线程ID
    * lockStatus  MDL锁状态
    * lockMode  MDL锁等待模式
    * lockType  MDL锁等待信息
    * lockDuration  MDL锁等待持续时间
    * tableSchema  库表schema信息
    * tableName  表名称
    * user  用户名称
    * time  MDL锁等待时间
    * blockNumber  MDL锁等待阻塞数量
    * waitNumber  MDL锁等待数量
    * host  主机
    * dbName  数据库名称
    * command  MDL锁等待SQL语句
    * state  MDL锁等待状态
    * info  MDL锁等待额外信息
    * sqlLimitRule  关联的SQL限流规则
    * trxExecTime  事务执行时间
    * blockProcessInfo  阻塞的事务信息列表
    * waitProcessInfo  等待的事务信息列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'lockId' => null,
        'threadId' => null,
        'lockStatus' => null,
        'lockMode' => null,
        'lockType' => null,
        'lockDuration' => null,
        'tableSchema' => null,
        'tableName' => null,
        'user' => null,
        'time' => null,
        'blockNumber' => 'int32',
        'waitNumber' => 'int32',
        'host' => null,
        'dbName' => null,
        'command' => null,
        'state' => null,
        'info' => null,
        'sqlLimitRule' => null,
        'trxExecTime' => null,
        'blockProcessInfo' => null,
        'waitProcessInfo' => null
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
    * lockId  MDL锁ID
    * threadId  线程ID
    * lockStatus  MDL锁状态
    * lockMode  MDL锁等待模式
    * lockType  MDL锁等待信息
    * lockDuration  MDL锁等待持续时间
    * tableSchema  库表schema信息
    * tableName  表名称
    * user  用户名称
    * time  MDL锁等待时间
    * blockNumber  MDL锁等待阻塞数量
    * waitNumber  MDL锁等待数量
    * host  主机
    * dbName  数据库名称
    * command  MDL锁等待SQL语句
    * state  MDL锁等待状态
    * info  MDL锁等待额外信息
    * sqlLimitRule  关联的SQL限流规则
    * trxExecTime  事务执行时间
    * blockProcessInfo  阻塞的事务信息列表
    * waitProcessInfo  等待的事务信息列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'lockId' => 'lock_id',
            'threadId' => 'thread_id',
            'lockStatus' => 'lock_status',
            'lockMode' => 'lock_mode',
            'lockType' => 'lock_type',
            'lockDuration' => 'lock_duration',
            'tableSchema' => 'table_schema',
            'tableName' => 'table_name',
            'user' => 'user',
            'time' => 'time',
            'blockNumber' => 'block_number',
            'waitNumber' => 'wait_number',
            'host' => 'host',
            'dbName' => 'db_name',
            'command' => 'command',
            'state' => 'state',
            'info' => 'info',
            'sqlLimitRule' => 'sql_limit_rule',
            'trxExecTime' => 'trx_exec_time',
            'blockProcessInfo' => 'block_process_info',
            'waitProcessInfo' => 'wait_process_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * lockId  MDL锁ID
    * threadId  线程ID
    * lockStatus  MDL锁状态
    * lockMode  MDL锁等待模式
    * lockType  MDL锁等待信息
    * lockDuration  MDL锁等待持续时间
    * tableSchema  库表schema信息
    * tableName  表名称
    * user  用户名称
    * time  MDL锁等待时间
    * blockNumber  MDL锁等待阻塞数量
    * waitNumber  MDL锁等待数量
    * host  主机
    * dbName  数据库名称
    * command  MDL锁等待SQL语句
    * state  MDL锁等待状态
    * info  MDL锁等待额外信息
    * sqlLimitRule  关联的SQL限流规则
    * trxExecTime  事务执行时间
    * blockProcessInfo  阻塞的事务信息列表
    * waitProcessInfo  等待的事务信息列表
    *
    * @var string[]
    */
    protected static $setters = [
            'lockId' => 'setLockId',
            'threadId' => 'setThreadId',
            'lockStatus' => 'setLockStatus',
            'lockMode' => 'setLockMode',
            'lockType' => 'setLockType',
            'lockDuration' => 'setLockDuration',
            'tableSchema' => 'setTableSchema',
            'tableName' => 'setTableName',
            'user' => 'setUser',
            'time' => 'setTime',
            'blockNumber' => 'setBlockNumber',
            'waitNumber' => 'setWaitNumber',
            'host' => 'setHost',
            'dbName' => 'setDbName',
            'command' => 'setCommand',
            'state' => 'setState',
            'info' => 'setInfo',
            'sqlLimitRule' => 'setSqlLimitRule',
            'trxExecTime' => 'setTrxExecTime',
            'blockProcessInfo' => 'setBlockProcessInfo',
            'waitProcessInfo' => 'setWaitProcessInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * lockId  MDL锁ID
    * threadId  线程ID
    * lockStatus  MDL锁状态
    * lockMode  MDL锁等待模式
    * lockType  MDL锁等待信息
    * lockDuration  MDL锁等待持续时间
    * tableSchema  库表schema信息
    * tableName  表名称
    * user  用户名称
    * time  MDL锁等待时间
    * blockNumber  MDL锁等待阻塞数量
    * waitNumber  MDL锁等待数量
    * host  主机
    * dbName  数据库名称
    * command  MDL锁等待SQL语句
    * state  MDL锁等待状态
    * info  MDL锁等待额外信息
    * sqlLimitRule  关联的SQL限流规则
    * trxExecTime  事务执行时间
    * blockProcessInfo  阻塞的事务信息列表
    * waitProcessInfo  等待的事务信息列表
    *
    * @var string[]
    */
    protected static $getters = [
            'lockId' => 'getLockId',
            'threadId' => 'getThreadId',
            'lockStatus' => 'getLockStatus',
            'lockMode' => 'getLockMode',
            'lockType' => 'getLockType',
            'lockDuration' => 'getLockDuration',
            'tableSchema' => 'getTableSchema',
            'tableName' => 'getTableName',
            'user' => 'getUser',
            'time' => 'getTime',
            'blockNumber' => 'getBlockNumber',
            'waitNumber' => 'getWaitNumber',
            'host' => 'getHost',
            'dbName' => 'getDbName',
            'command' => 'getCommand',
            'state' => 'getState',
            'info' => 'getInfo',
            'sqlLimitRule' => 'getSqlLimitRule',
            'trxExecTime' => 'getTrxExecTime',
            'blockProcessInfo' => 'getBlockProcessInfo',
            'waitProcessInfo' => 'getWaitProcessInfo'
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
        $this->container['lockId'] = isset($data['lockId']) ? $data['lockId'] : null;
        $this->container['threadId'] = isset($data['threadId']) ? $data['threadId'] : null;
        $this->container['lockStatus'] = isset($data['lockStatus']) ? $data['lockStatus'] : null;
        $this->container['lockMode'] = isset($data['lockMode']) ? $data['lockMode'] : null;
        $this->container['lockType'] = isset($data['lockType']) ? $data['lockType'] : null;
        $this->container['lockDuration'] = isset($data['lockDuration']) ? $data['lockDuration'] : null;
        $this->container['tableSchema'] = isset($data['tableSchema']) ? $data['tableSchema'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['blockNumber'] = isset($data['blockNumber']) ? $data['blockNumber'] : null;
        $this->container['waitNumber'] = isset($data['waitNumber']) ? $data['waitNumber'] : null;
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['command'] = isset($data['command']) ? $data['command'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['info'] = isset($data['info']) ? $data['info'] : null;
        $this->container['sqlLimitRule'] = isset($data['sqlLimitRule']) ? $data['sqlLimitRule'] : null;
        $this->container['trxExecTime'] = isset($data['trxExecTime']) ? $data['trxExecTime'] : null;
        $this->container['blockProcessInfo'] = isset($data['blockProcessInfo']) ? $data['blockProcessInfo'] : null;
        $this->container['waitProcessInfo'] = isset($data['waitProcessInfo']) ? $data['waitProcessInfo'] : null;
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
    * Gets lockId
    *  MDL锁ID
    *
    * @return string|null
    */
    public function getLockId()
    {
        return $this->container['lockId'];
    }

    /**
    * Sets lockId
    *
    * @param string|null $lockId MDL锁ID
    *
    * @return $this
    */
    public function setLockId($lockId)
    {
        $this->container['lockId'] = $lockId;
        return $this;
    }

    /**
    * Gets threadId
    *  线程ID
    *
    * @return string|null
    */
    public function getThreadId()
    {
        return $this->container['threadId'];
    }

    /**
    * Sets threadId
    *
    * @param string|null $threadId 线程ID
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
    *  MDL锁状态
    *
    * @return string|null
    */
    public function getLockStatus()
    {
        return $this->container['lockStatus'];
    }

    /**
    * Sets lockStatus
    *
    * @param string|null $lockStatus MDL锁状态
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
    *  MDL锁等待模式
    *
    * @return string|null
    */
    public function getLockMode()
    {
        return $this->container['lockMode'];
    }

    /**
    * Sets lockMode
    *
    * @param string|null $lockMode MDL锁等待模式
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
    *  MDL锁等待信息
    *
    * @return string|null
    */
    public function getLockType()
    {
        return $this->container['lockType'];
    }

    /**
    * Sets lockType
    *
    * @param string|null $lockType MDL锁等待信息
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
    *  MDL锁等待持续时间
    *
    * @return string|null
    */
    public function getLockDuration()
    {
        return $this->container['lockDuration'];
    }

    /**
    * Sets lockDuration
    *
    * @param string|null $lockDuration MDL锁等待持续时间
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
    *  库表schema信息
    *
    * @return string|null
    */
    public function getTableSchema()
    {
        return $this->container['tableSchema'];
    }

    /**
    * Sets tableSchema
    *
    * @param string|null $tableSchema 库表schema信息
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
    *  表名称
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
    * @param string|null $tableName 表名称
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
    *  用户名称
    *
    * @return string|null
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param string|null $user 用户名称
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
    *  MDL锁等待时间
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
    * @param string|null $time MDL锁等待时间
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets blockNumber
    *  MDL锁等待阻塞数量
    *
    * @return int|null
    */
    public function getBlockNumber()
    {
        return $this->container['blockNumber'];
    }

    /**
    * Sets blockNumber
    *
    * @param int|null $blockNumber MDL锁等待阻塞数量
    *
    * @return $this
    */
    public function setBlockNumber($blockNumber)
    {
        $this->container['blockNumber'] = $blockNumber;
        return $this;
    }

    /**
    * Gets waitNumber
    *  MDL锁等待数量
    *
    * @return int|null
    */
    public function getWaitNumber()
    {
        return $this->container['waitNumber'];
    }

    /**
    * Sets waitNumber
    *
    * @param int|null $waitNumber MDL锁等待数量
    *
    * @return $this
    */
    public function setWaitNumber($waitNumber)
    {
        $this->container['waitNumber'] = $waitNumber;
        return $this;
    }

    /**
    * Gets host
    *  主机
    *
    * @return string|null
    */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
    * Sets host
    *
    * @param string|null $host 主机
    *
    * @return $this
    */
    public function setHost($host)
    {
        $this->container['host'] = $host;
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
    * Gets command
    *  MDL锁等待SQL语句
    *
    * @return string|null
    */
    public function getCommand()
    {
        return $this->container['command'];
    }

    /**
    * Sets command
    *
    * @param string|null $command MDL锁等待SQL语句
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
    *  MDL锁等待状态
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state MDL锁等待状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets info
    *  MDL锁等待额外信息
    *
    * @return string|null
    */
    public function getInfo()
    {
        return $this->container['info'];
    }

    /**
    * Sets info
    *
    * @param string|null $info MDL锁等待额外信息
    *
    * @return $this
    */
    public function setInfo($info)
    {
        $this->container['info'] = $info;
        return $this;
    }

    /**
    * Gets sqlLimitRule
    *  关联的SQL限流规则
    *
    * @return string|null
    */
    public function getSqlLimitRule()
    {
        return $this->container['sqlLimitRule'];
    }

    /**
    * Sets sqlLimitRule
    *
    * @param string|null $sqlLimitRule 关联的SQL限流规则
    *
    * @return $this
    */
    public function setSqlLimitRule($sqlLimitRule)
    {
        $this->container['sqlLimitRule'] = $sqlLimitRule;
        return $this;
    }

    /**
    * Gets trxExecTime
    *  事务执行时间
    *
    * @return string|null
    */
    public function getTrxExecTime()
    {
        return $this->container['trxExecTime'];
    }

    /**
    * Sets trxExecTime
    *
    * @param string|null $trxExecTime 事务执行时间
    *
    * @return $this
    */
    public function setTrxExecTime($trxExecTime)
    {
        $this->container['trxExecTime'] = $trxExecTime;
        return $this;
    }

    /**
    * Gets blockProcessInfo
    *  阻塞的事务信息列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\ProcessInfo[]|null
    */
    public function getBlockProcessInfo()
    {
        return $this->container['blockProcessInfo'];
    }

    /**
    * Sets blockProcessInfo
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\ProcessInfo[]|null $blockProcessInfo 阻塞的事务信息列表
    *
    * @return $this
    */
    public function setBlockProcessInfo($blockProcessInfo)
    {
        $this->container['blockProcessInfo'] = $blockProcessInfo;
        return $this;
    }

    /**
    * Gets waitProcessInfo
    *  等待的事务信息列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\ProcessInfo[]|null
    */
    public function getWaitProcessInfo()
    {
        return $this->container['waitProcessInfo'];
    }

    /**
    * Sets waitProcessInfo
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\ProcessInfo[]|null $waitProcessInfo 等待的事务信息列表
    *
    * @return $this
    */
    public function setWaitProcessInfo($waitProcessInfo)
    {
        $this->container['waitProcessInfo'] = $waitProcessInfo;
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

