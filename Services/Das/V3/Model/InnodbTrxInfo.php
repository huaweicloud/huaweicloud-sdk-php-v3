<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InnodbTrxInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InnodbTrxInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * trxId  事务ID
    * trxState  事务状态
    * trxStarted  事务开始时间
    * trxStartedTimestamp  事务开始时间戳
    * trxRequestedLockId  事务当前正在等待锁的Id
    * trxWaitStarted  事务开始等待时间
    * trxWaitStartedTimestamp  事务开始等待时间戳
    * trxWeight  事务权重
    * trxMysqlThreadId  会话ID
    * trxQuery  事务正在执行的SQL语句
    * trxOperationState  事务当前操作状态
    * trxTablesInUse  当前事务执行的SQL中使用的表个数
    * trxTablesLocked  当前执行SQL的行锁数量
    * trxLockStructs  事务保留的锁数量
    * trxLockMemoryBytes  事务锁住的内存大小
    * trxRowsLocked  事务锁住的行记录数
    * trxRowsModified  事务更改的行数
    * trxConcurrencyTickets  事务并发票数
    * trxIsolationLevel  事务隔离级别
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'trxId' => 'string',
            'trxState' => 'string',
            'trxStarted' => 'string',
            'trxStartedTimestamp' => 'int',
            'trxRequestedLockId' => 'string',
            'trxWaitStarted' => 'string',
            'trxWaitStartedTimestamp' => 'int',
            'trxWeight' => 'string',
            'trxMysqlThreadId' => 'string',
            'trxQuery' => 'string',
            'trxOperationState' => 'string',
            'trxTablesInUse' => 'string',
            'trxTablesLocked' => 'string',
            'trxLockStructs' => 'string',
            'trxLockMemoryBytes' => 'string',
            'trxRowsLocked' => 'string',
            'trxRowsModified' => 'string',
            'trxConcurrencyTickets' => 'string',
            'trxIsolationLevel' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * trxId  事务ID
    * trxState  事务状态
    * trxStarted  事务开始时间
    * trxStartedTimestamp  事务开始时间戳
    * trxRequestedLockId  事务当前正在等待锁的Id
    * trxWaitStarted  事务开始等待时间
    * trxWaitStartedTimestamp  事务开始等待时间戳
    * trxWeight  事务权重
    * trxMysqlThreadId  会话ID
    * trxQuery  事务正在执行的SQL语句
    * trxOperationState  事务当前操作状态
    * trxTablesInUse  当前事务执行的SQL中使用的表个数
    * trxTablesLocked  当前执行SQL的行锁数量
    * trxLockStructs  事务保留的锁数量
    * trxLockMemoryBytes  事务锁住的内存大小
    * trxRowsLocked  事务锁住的行记录数
    * trxRowsModified  事务更改的行数
    * trxConcurrencyTickets  事务并发票数
    * trxIsolationLevel  事务隔离级别
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'trxId' => null,
        'trxState' => null,
        'trxStarted' => null,
        'trxStartedTimestamp' => 'int64',
        'trxRequestedLockId' => null,
        'trxWaitStarted' => null,
        'trxWaitStartedTimestamp' => 'int64',
        'trxWeight' => null,
        'trxMysqlThreadId' => null,
        'trxQuery' => null,
        'trxOperationState' => null,
        'trxTablesInUse' => null,
        'trxTablesLocked' => null,
        'trxLockStructs' => null,
        'trxLockMemoryBytes' => null,
        'trxRowsLocked' => null,
        'trxRowsModified' => null,
        'trxConcurrencyTickets' => null,
        'trxIsolationLevel' => null
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
    * trxId  事务ID
    * trxState  事务状态
    * trxStarted  事务开始时间
    * trxStartedTimestamp  事务开始时间戳
    * trxRequestedLockId  事务当前正在等待锁的Id
    * trxWaitStarted  事务开始等待时间
    * trxWaitStartedTimestamp  事务开始等待时间戳
    * trxWeight  事务权重
    * trxMysqlThreadId  会话ID
    * trxQuery  事务正在执行的SQL语句
    * trxOperationState  事务当前操作状态
    * trxTablesInUse  当前事务执行的SQL中使用的表个数
    * trxTablesLocked  当前执行SQL的行锁数量
    * trxLockStructs  事务保留的锁数量
    * trxLockMemoryBytes  事务锁住的内存大小
    * trxRowsLocked  事务锁住的行记录数
    * trxRowsModified  事务更改的行数
    * trxConcurrencyTickets  事务并发票数
    * trxIsolationLevel  事务隔离级别
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'trxId' => 'trx_id',
            'trxState' => 'trx_state',
            'trxStarted' => 'trx_started',
            'trxStartedTimestamp' => 'trx_started_timestamp',
            'trxRequestedLockId' => 'trx_requested_lock_id',
            'trxWaitStarted' => 'trx_wait_started',
            'trxWaitStartedTimestamp' => 'trx_wait_started_timestamp',
            'trxWeight' => 'trx_weight',
            'trxMysqlThreadId' => 'trx_mysql_thread_id',
            'trxQuery' => 'trx_query',
            'trxOperationState' => 'trx_operation_state',
            'trxTablesInUse' => 'trx_tables_in_use',
            'trxTablesLocked' => 'trx_tables_locked',
            'trxLockStructs' => 'trx_lock_structs',
            'trxLockMemoryBytes' => 'trx_lock_memory_bytes',
            'trxRowsLocked' => 'trx_rows_locked',
            'trxRowsModified' => 'trx_rows_modified',
            'trxConcurrencyTickets' => 'trx_concurrency_tickets',
            'trxIsolationLevel' => 'trx_isolation_level'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * trxId  事务ID
    * trxState  事务状态
    * trxStarted  事务开始时间
    * trxStartedTimestamp  事务开始时间戳
    * trxRequestedLockId  事务当前正在等待锁的Id
    * trxWaitStarted  事务开始等待时间
    * trxWaitStartedTimestamp  事务开始等待时间戳
    * trxWeight  事务权重
    * trxMysqlThreadId  会话ID
    * trxQuery  事务正在执行的SQL语句
    * trxOperationState  事务当前操作状态
    * trxTablesInUse  当前事务执行的SQL中使用的表个数
    * trxTablesLocked  当前执行SQL的行锁数量
    * trxLockStructs  事务保留的锁数量
    * trxLockMemoryBytes  事务锁住的内存大小
    * trxRowsLocked  事务锁住的行记录数
    * trxRowsModified  事务更改的行数
    * trxConcurrencyTickets  事务并发票数
    * trxIsolationLevel  事务隔离级别
    *
    * @var string[]
    */
    protected static $setters = [
            'trxId' => 'setTrxId',
            'trxState' => 'setTrxState',
            'trxStarted' => 'setTrxStarted',
            'trxStartedTimestamp' => 'setTrxStartedTimestamp',
            'trxRequestedLockId' => 'setTrxRequestedLockId',
            'trxWaitStarted' => 'setTrxWaitStarted',
            'trxWaitStartedTimestamp' => 'setTrxWaitStartedTimestamp',
            'trxWeight' => 'setTrxWeight',
            'trxMysqlThreadId' => 'setTrxMysqlThreadId',
            'trxQuery' => 'setTrxQuery',
            'trxOperationState' => 'setTrxOperationState',
            'trxTablesInUse' => 'setTrxTablesInUse',
            'trxTablesLocked' => 'setTrxTablesLocked',
            'trxLockStructs' => 'setTrxLockStructs',
            'trxLockMemoryBytes' => 'setTrxLockMemoryBytes',
            'trxRowsLocked' => 'setTrxRowsLocked',
            'trxRowsModified' => 'setTrxRowsModified',
            'trxConcurrencyTickets' => 'setTrxConcurrencyTickets',
            'trxIsolationLevel' => 'setTrxIsolationLevel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * trxId  事务ID
    * trxState  事务状态
    * trxStarted  事务开始时间
    * trxStartedTimestamp  事务开始时间戳
    * trxRequestedLockId  事务当前正在等待锁的Id
    * trxWaitStarted  事务开始等待时间
    * trxWaitStartedTimestamp  事务开始等待时间戳
    * trxWeight  事务权重
    * trxMysqlThreadId  会话ID
    * trxQuery  事务正在执行的SQL语句
    * trxOperationState  事务当前操作状态
    * trxTablesInUse  当前事务执行的SQL中使用的表个数
    * trxTablesLocked  当前执行SQL的行锁数量
    * trxLockStructs  事务保留的锁数量
    * trxLockMemoryBytes  事务锁住的内存大小
    * trxRowsLocked  事务锁住的行记录数
    * trxRowsModified  事务更改的行数
    * trxConcurrencyTickets  事务并发票数
    * trxIsolationLevel  事务隔离级别
    *
    * @var string[]
    */
    protected static $getters = [
            'trxId' => 'getTrxId',
            'trxState' => 'getTrxState',
            'trxStarted' => 'getTrxStarted',
            'trxStartedTimestamp' => 'getTrxStartedTimestamp',
            'trxRequestedLockId' => 'getTrxRequestedLockId',
            'trxWaitStarted' => 'getTrxWaitStarted',
            'trxWaitStartedTimestamp' => 'getTrxWaitStartedTimestamp',
            'trxWeight' => 'getTrxWeight',
            'trxMysqlThreadId' => 'getTrxMysqlThreadId',
            'trxQuery' => 'getTrxQuery',
            'trxOperationState' => 'getTrxOperationState',
            'trxTablesInUse' => 'getTrxTablesInUse',
            'trxTablesLocked' => 'getTrxTablesLocked',
            'trxLockStructs' => 'getTrxLockStructs',
            'trxLockMemoryBytes' => 'getTrxLockMemoryBytes',
            'trxRowsLocked' => 'getTrxRowsLocked',
            'trxRowsModified' => 'getTrxRowsModified',
            'trxConcurrencyTickets' => 'getTrxConcurrencyTickets',
            'trxIsolationLevel' => 'getTrxIsolationLevel'
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
        $this->container['trxId'] = isset($data['trxId']) ? $data['trxId'] : null;
        $this->container['trxState'] = isset($data['trxState']) ? $data['trxState'] : null;
        $this->container['trxStarted'] = isset($data['trxStarted']) ? $data['trxStarted'] : null;
        $this->container['trxStartedTimestamp'] = isset($data['trxStartedTimestamp']) ? $data['trxStartedTimestamp'] : null;
        $this->container['trxRequestedLockId'] = isset($data['trxRequestedLockId']) ? $data['trxRequestedLockId'] : null;
        $this->container['trxWaitStarted'] = isset($data['trxWaitStarted']) ? $data['trxWaitStarted'] : null;
        $this->container['trxWaitStartedTimestamp'] = isset($data['trxWaitStartedTimestamp']) ? $data['trxWaitStartedTimestamp'] : null;
        $this->container['trxWeight'] = isset($data['trxWeight']) ? $data['trxWeight'] : null;
        $this->container['trxMysqlThreadId'] = isset($data['trxMysqlThreadId']) ? $data['trxMysqlThreadId'] : null;
        $this->container['trxQuery'] = isset($data['trxQuery']) ? $data['trxQuery'] : null;
        $this->container['trxOperationState'] = isset($data['trxOperationState']) ? $data['trxOperationState'] : null;
        $this->container['trxTablesInUse'] = isset($data['trxTablesInUse']) ? $data['trxTablesInUse'] : null;
        $this->container['trxTablesLocked'] = isset($data['trxTablesLocked']) ? $data['trxTablesLocked'] : null;
        $this->container['trxLockStructs'] = isset($data['trxLockStructs']) ? $data['trxLockStructs'] : null;
        $this->container['trxLockMemoryBytes'] = isset($data['trxLockMemoryBytes']) ? $data['trxLockMemoryBytes'] : null;
        $this->container['trxRowsLocked'] = isset($data['trxRowsLocked']) ? $data['trxRowsLocked'] : null;
        $this->container['trxRowsModified'] = isset($data['trxRowsModified']) ? $data['trxRowsModified'] : null;
        $this->container['trxConcurrencyTickets'] = isset($data['trxConcurrencyTickets']) ? $data['trxConcurrencyTickets'] : null;
        $this->container['trxIsolationLevel'] = isset($data['trxIsolationLevel']) ? $data['trxIsolationLevel'] : null;
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
    * Gets trxId
    *  事务ID
    *
    * @return string|null
    */
    public function getTrxId()
    {
        return $this->container['trxId'];
    }

    /**
    * Sets trxId
    *
    * @param string|null $trxId 事务ID
    *
    * @return $this
    */
    public function setTrxId($trxId)
    {
        $this->container['trxId'] = $trxId;
        return $this;
    }

    /**
    * Gets trxState
    *  事务状态
    *
    * @return string|null
    */
    public function getTrxState()
    {
        return $this->container['trxState'];
    }

    /**
    * Sets trxState
    *
    * @param string|null $trxState 事务状态
    *
    * @return $this
    */
    public function setTrxState($trxState)
    {
        $this->container['trxState'] = $trxState;
        return $this;
    }

    /**
    * Gets trxStarted
    *  事务开始时间
    *
    * @return string|null
    */
    public function getTrxStarted()
    {
        return $this->container['trxStarted'];
    }

    /**
    * Sets trxStarted
    *
    * @param string|null $trxStarted 事务开始时间
    *
    * @return $this
    */
    public function setTrxStarted($trxStarted)
    {
        $this->container['trxStarted'] = $trxStarted;
        return $this;
    }

    /**
    * Gets trxStartedTimestamp
    *  事务开始时间戳
    *
    * @return int|null
    */
    public function getTrxStartedTimestamp()
    {
        return $this->container['trxStartedTimestamp'];
    }

    /**
    * Sets trxStartedTimestamp
    *
    * @param int|null $trxStartedTimestamp 事务开始时间戳
    *
    * @return $this
    */
    public function setTrxStartedTimestamp($trxStartedTimestamp)
    {
        $this->container['trxStartedTimestamp'] = $trxStartedTimestamp;
        return $this;
    }

    /**
    * Gets trxRequestedLockId
    *  事务当前正在等待锁的Id
    *
    * @return string|null
    */
    public function getTrxRequestedLockId()
    {
        return $this->container['trxRequestedLockId'];
    }

    /**
    * Sets trxRequestedLockId
    *
    * @param string|null $trxRequestedLockId 事务当前正在等待锁的Id
    *
    * @return $this
    */
    public function setTrxRequestedLockId($trxRequestedLockId)
    {
        $this->container['trxRequestedLockId'] = $trxRequestedLockId;
        return $this;
    }

    /**
    * Gets trxWaitStarted
    *  事务开始等待时间
    *
    * @return string|null
    */
    public function getTrxWaitStarted()
    {
        return $this->container['trxWaitStarted'];
    }

    /**
    * Sets trxWaitStarted
    *
    * @param string|null $trxWaitStarted 事务开始等待时间
    *
    * @return $this
    */
    public function setTrxWaitStarted($trxWaitStarted)
    {
        $this->container['trxWaitStarted'] = $trxWaitStarted;
        return $this;
    }

    /**
    * Gets trxWaitStartedTimestamp
    *  事务开始等待时间戳
    *
    * @return int|null
    */
    public function getTrxWaitStartedTimestamp()
    {
        return $this->container['trxWaitStartedTimestamp'];
    }

    /**
    * Sets trxWaitStartedTimestamp
    *
    * @param int|null $trxWaitStartedTimestamp 事务开始等待时间戳
    *
    * @return $this
    */
    public function setTrxWaitStartedTimestamp($trxWaitStartedTimestamp)
    {
        $this->container['trxWaitStartedTimestamp'] = $trxWaitStartedTimestamp;
        return $this;
    }

    /**
    * Gets trxWeight
    *  事务权重
    *
    * @return string|null
    */
    public function getTrxWeight()
    {
        return $this->container['trxWeight'];
    }

    /**
    * Sets trxWeight
    *
    * @param string|null $trxWeight 事务权重
    *
    * @return $this
    */
    public function setTrxWeight($trxWeight)
    {
        $this->container['trxWeight'] = $trxWeight;
        return $this;
    }

    /**
    * Gets trxMysqlThreadId
    *  会话ID
    *
    * @return string|null
    */
    public function getTrxMysqlThreadId()
    {
        return $this->container['trxMysqlThreadId'];
    }

    /**
    * Sets trxMysqlThreadId
    *
    * @param string|null $trxMysqlThreadId 会话ID
    *
    * @return $this
    */
    public function setTrxMysqlThreadId($trxMysqlThreadId)
    {
        $this->container['trxMysqlThreadId'] = $trxMysqlThreadId;
        return $this;
    }

    /**
    * Gets trxQuery
    *  事务正在执行的SQL语句
    *
    * @return string|null
    */
    public function getTrxQuery()
    {
        return $this->container['trxQuery'];
    }

    /**
    * Sets trxQuery
    *
    * @param string|null $trxQuery 事务正在执行的SQL语句
    *
    * @return $this
    */
    public function setTrxQuery($trxQuery)
    {
        $this->container['trxQuery'] = $trxQuery;
        return $this;
    }

    /**
    * Gets trxOperationState
    *  事务当前操作状态
    *
    * @return string|null
    */
    public function getTrxOperationState()
    {
        return $this->container['trxOperationState'];
    }

    /**
    * Sets trxOperationState
    *
    * @param string|null $trxOperationState 事务当前操作状态
    *
    * @return $this
    */
    public function setTrxOperationState($trxOperationState)
    {
        $this->container['trxOperationState'] = $trxOperationState;
        return $this;
    }

    /**
    * Gets trxTablesInUse
    *  当前事务执行的SQL中使用的表个数
    *
    * @return string|null
    */
    public function getTrxTablesInUse()
    {
        return $this->container['trxTablesInUse'];
    }

    /**
    * Sets trxTablesInUse
    *
    * @param string|null $trxTablesInUse 当前事务执行的SQL中使用的表个数
    *
    * @return $this
    */
    public function setTrxTablesInUse($trxTablesInUse)
    {
        $this->container['trxTablesInUse'] = $trxTablesInUse;
        return $this;
    }

    /**
    * Gets trxTablesLocked
    *  当前执行SQL的行锁数量
    *
    * @return string|null
    */
    public function getTrxTablesLocked()
    {
        return $this->container['trxTablesLocked'];
    }

    /**
    * Sets trxTablesLocked
    *
    * @param string|null $trxTablesLocked 当前执行SQL的行锁数量
    *
    * @return $this
    */
    public function setTrxTablesLocked($trxTablesLocked)
    {
        $this->container['trxTablesLocked'] = $trxTablesLocked;
        return $this;
    }

    /**
    * Gets trxLockStructs
    *  事务保留的锁数量
    *
    * @return string|null
    */
    public function getTrxLockStructs()
    {
        return $this->container['trxLockStructs'];
    }

    /**
    * Sets trxLockStructs
    *
    * @param string|null $trxLockStructs 事务保留的锁数量
    *
    * @return $this
    */
    public function setTrxLockStructs($trxLockStructs)
    {
        $this->container['trxLockStructs'] = $trxLockStructs;
        return $this;
    }

    /**
    * Gets trxLockMemoryBytes
    *  事务锁住的内存大小
    *
    * @return string|null
    */
    public function getTrxLockMemoryBytes()
    {
        return $this->container['trxLockMemoryBytes'];
    }

    /**
    * Sets trxLockMemoryBytes
    *
    * @param string|null $trxLockMemoryBytes 事务锁住的内存大小
    *
    * @return $this
    */
    public function setTrxLockMemoryBytes($trxLockMemoryBytes)
    {
        $this->container['trxLockMemoryBytes'] = $trxLockMemoryBytes;
        return $this;
    }

    /**
    * Gets trxRowsLocked
    *  事务锁住的行记录数
    *
    * @return string|null
    */
    public function getTrxRowsLocked()
    {
        return $this->container['trxRowsLocked'];
    }

    /**
    * Sets trxRowsLocked
    *
    * @param string|null $trxRowsLocked 事务锁住的行记录数
    *
    * @return $this
    */
    public function setTrxRowsLocked($trxRowsLocked)
    {
        $this->container['trxRowsLocked'] = $trxRowsLocked;
        return $this;
    }

    /**
    * Gets trxRowsModified
    *  事务更改的行数
    *
    * @return string|null
    */
    public function getTrxRowsModified()
    {
        return $this->container['trxRowsModified'];
    }

    /**
    * Sets trxRowsModified
    *
    * @param string|null $trxRowsModified 事务更改的行数
    *
    * @return $this
    */
    public function setTrxRowsModified($trxRowsModified)
    {
        $this->container['trxRowsModified'] = $trxRowsModified;
        return $this;
    }

    /**
    * Gets trxConcurrencyTickets
    *  事务并发票数
    *
    * @return string|null
    */
    public function getTrxConcurrencyTickets()
    {
        return $this->container['trxConcurrencyTickets'];
    }

    /**
    * Sets trxConcurrencyTickets
    *
    * @param string|null $trxConcurrencyTickets 事务并发票数
    *
    * @return $this
    */
    public function setTrxConcurrencyTickets($trxConcurrencyTickets)
    {
        $this->container['trxConcurrencyTickets'] = $trxConcurrencyTickets;
        return $this;
    }

    /**
    * Gets trxIsolationLevel
    *  事务隔离级别
    *
    * @return string|null
    */
    public function getTrxIsolationLevel()
    {
        return $this->container['trxIsolationLevel'];
    }

    /**
    * Sets trxIsolationLevel
    *
    * @param string|null $trxIsolationLevel 事务隔离级别
    *
    * @return $this
    */
    public function setTrxIsolationLevel($trxIsolationLevel)
    {
        $this->container['trxIsolationLevel'] = $trxIsolationLevel;
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

