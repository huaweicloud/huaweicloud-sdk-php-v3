<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryLatestDeadLockRespMysqlDeadLockMysqlTransactions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryLatestDeadLockResp_mysql_dead_lock_mysql_transactions';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * table  事务操作的具体表
    * sql  前正在执行或最近执行的 SQL 语句
    * sessionId  会话的 ID
    * threadId  线程id
    * requestType  请求类型
    * transactionId  内部的事务 ID
    * waitingLock  事务正在等待的锁的详细描述
    * waitingLockIndex  正在等待的锁是针对表的索引
    * waitingLockType  正在等待的锁的具体类型
    * holdingLock  该事务当前持有的锁的详细描述
    * holdingLockIndex  持有的锁的针对表的索引
    * holdingLockType  持有的锁的具体类型。X 是排他锁，rec 是记录锁
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'table' => 'string',
            'sql' => 'string',
            'sessionId' => 'string',
            'threadId' => 'string',
            'requestType' => 'string',
            'transactionId' => 'string',
            'waitingLock' => 'string',
            'waitingLockIndex' => 'string',
            'waitingLockType' => 'string',
            'holdingLock' => 'string',
            'holdingLockIndex' => 'string',
            'holdingLockType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * table  事务操作的具体表
    * sql  前正在执行或最近执行的 SQL 语句
    * sessionId  会话的 ID
    * threadId  线程id
    * requestType  请求类型
    * transactionId  内部的事务 ID
    * waitingLock  事务正在等待的锁的详细描述
    * waitingLockIndex  正在等待的锁是针对表的索引
    * waitingLockType  正在等待的锁的具体类型
    * holdingLock  该事务当前持有的锁的详细描述
    * holdingLockIndex  持有的锁的针对表的索引
    * holdingLockType  持有的锁的具体类型。X 是排他锁，rec 是记录锁
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'table' => null,
        'sql' => null,
        'sessionId' => null,
        'threadId' => null,
        'requestType' => null,
        'transactionId' => null,
        'waitingLock' => null,
        'waitingLockIndex' => null,
        'waitingLockType' => null,
        'holdingLock' => null,
        'holdingLockIndex' => null,
        'holdingLockType' => null
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
    * table  事务操作的具体表
    * sql  前正在执行或最近执行的 SQL 语句
    * sessionId  会话的 ID
    * threadId  线程id
    * requestType  请求类型
    * transactionId  内部的事务 ID
    * waitingLock  事务正在等待的锁的详细描述
    * waitingLockIndex  正在等待的锁是针对表的索引
    * waitingLockType  正在等待的锁的具体类型
    * holdingLock  该事务当前持有的锁的详细描述
    * holdingLockIndex  持有的锁的针对表的索引
    * holdingLockType  持有的锁的具体类型。X 是排他锁，rec 是记录锁
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'table' => 'table',
            'sql' => 'sql',
            'sessionId' => 'session_id',
            'threadId' => 'thread_id',
            'requestType' => 'request_type',
            'transactionId' => 'transaction_id',
            'waitingLock' => 'waiting_lock',
            'waitingLockIndex' => 'waiting_lock_index',
            'waitingLockType' => 'waiting_lock_type',
            'holdingLock' => 'holding_lock',
            'holdingLockIndex' => 'holding_lock_index',
            'holdingLockType' => 'holding_lock_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * table  事务操作的具体表
    * sql  前正在执行或最近执行的 SQL 语句
    * sessionId  会话的 ID
    * threadId  线程id
    * requestType  请求类型
    * transactionId  内部的事务 ID
    * waitingLock  事务正在等待的锁的详细描述
    * waitingLockIndex  正在等待的锁是针对表的索引
    * waitingLockType  正在等待的锁的具体类型
    * holdingLock  该事务当前持有的锁的详细描述
    * holdingLockIndex  持有的锁的针对表的索引
    * holdingLockType  持有的锁的具体类型。X 是排他锁，rec 是记录锁
    *
    * @var string[]
    */
    protected static $setters = [
            'table' => 'setTable',
            'sql' => 'setSql',
            'sessionId' => 'setSessionId',
            'threadId' => 'setThreadId',
            'requestType' => 'setRequestType',
            'transactionId' => 'setTransactionId',
            'waitingLock' => 'setWaitingLock',
            'waitingLockIndex' => 'setWaitingLockIndex',
            'waitingLockType' => 'setWaitingLockType',
            'holdingLock' => 'setHoldingLock',
            'holdingLockIndex' => 'setHoldingLockIndex',
            'holdingLockType' => 'setHoldingLockType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * table  事务操作的具体表
    * sql  前正在执行或最近执行的 SQL 语句
    * sessionId  会话的 ID
    * threadId  线程id
    * requestType  请求类型
    * transactionId  内部的事务 ID
    * waitingLock  事务正在等待的锁的详细描述
    * waitingLockIndex  正在等待的锁是针对表的索引
    * waitingLockType  正在等待的锁的具体类型
    * holdingLock  该事务当前持有的锁的详细描述
    * holdingLockIndex  持有的锁的针对表的索引
    * holdingLockType  持有的锁的具体类型。X 是排他锁，rec 是记录锁
    *
    * @var string[]
    */
    protected static $getters = [
            'table' => 'getTable',
            'sql' => 'getSql',
            'sessionId' => 'getSessionId',
            'threadId' => 'getThreadId',
            'requestType' => 'getRequestType',
            'transactionId' => 'getTransactionId',
            'waitingLock' => 'getWaitingLock',
            'waitingLockIndex' => 'getWaitingLockIndex',
            'waitingLockType' => 'getWaitingLockType',
            'holdingLock' => 'getHoldingLock',
            'holdingLockIndex' => 'getHoldingLockIndex',
            'holdingLockType' => 'getHoldingLockType'
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
        $this->container['table'] = isset($data['table']) ? $data['table'] : null;
        $this->container['sql'] = isset($data['sql']) ? $data['sql'] : null;
        $this->container['sessionId'] = isset($data['sessionId']) ? $data['sessionId'] : null;
        $this->container['threadId'] = isset($data['threadId']) ? $data['threadId'] : null;
        $this->container['requestType'] = isset($data['requestType']) ? $data['requestType'] : null;
        $this->container['transactionId'] = isset($data['transactionId']) ? $data['transactionId'] : null;
        $this->container['waitingLock'] = isset($data['waitingLock']) ? $data['waitingLock'] : null;
        $this->container['waitingLockIndex'] = isset($data['waitingLockIndex']) ? $data['waitingLockIndex'] : null;
        $this->container['waitingLockType'] = isset($data['waitingLockType']) ? $data['waitingLockType'] : null;
        $this->container['holdingLock'] = isset($data['holdingLock']) ? $data['holdingLock'] : null;
        $this->container['holdingLockIndex'] = isset($data['holdingLockIndex']) ? $data['holdingLockIndex'] : null;
        $this->container['holdingLockType'] = isset($data['holdingLockType']) ? $data['holdingLockType'] : null;
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
    * Gets table
    *  事务操作的具体表
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
    * @param string|null $table 事务操作的具体表
    *
    * @return $this
    */
    public function setTable($table)
    {
        $this->container['table'] = $table;
        return $this;
    }

    /**
    * Gets sql
    *  前正在执行或最近执行的 SQL 语句
    *
    * @return string|null
    */
    public function getSql()
    {
        return $this->container['sql'];
    }

    /**
    * Sets sql
    *
    * @param string|null $sql 前正在执行或最近执行的 SQL 语句
    *
    * @return $this
    */
    public function setSql($sql)
    {
        $this->container['sql'] = $sql;
        return $this;
    }

    /**
    * Gets sessionId
    *  会话的 ID
    *
    * @return string|null
    */
    public function getSessionId()
    {
        return $this->container['sessionId'];
    }

    /**
    * Sets sessionId
    *
    * @param string|null $sessionId 会话的 ID
    *
    * @return $this
    */
    public function setSessionId($sessionId)
    {
        $this->container['sessionId'] = $sessionId;
        return $this;
    }

    /**
    * Gets threadId
    *  线程id
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
    * @param string|null $threadId 线程id
    *
    * @return $this
    */
    public function setThreadId($threadId)
    {
        $this->container['threadId'] = $threadId;
        return $this;
    }

    /**
    * Gets requestType
    *  请求类型
    *
    * @return string|null
    */
    public function getRequestType()
    {
        return $this->container['requestType'];
    }

    /**
    * Sets requestType
    *
    * @param string|null $requestType 请求类型
    *
    * @return $this
    */
    public function setRequestType($requestType)
    {
        $this->container['requestType'] = $requestType;
        return $this;
    }

    /**
    * Gets transactionId
    *  内部的事务 ID
    *
    * @return string|null
    */
    public function getTransactionId()
    {
        return $this->container['transactionId'];
    }

    /**
    * Sets transactionId
    *
    * @param string|null $transactionId 内部的事务 ID
    *
    * @return $this
    */
    public function setTransactionId($transactionId)
    {
        $this->container['transactionId'] = $transactionId;
        return $this;
    }

    /**
    * Gets waitingLock
    *  事务正在等待的锁的详细描述
    *
    * @return string|null
    */
    public function getWaitingLock()
    {
        return $this->container['waitingLock'];
    }

    /**
    * Sets waitingLock
    *
    * @param string|null $waitingLock 事务正在等待的锁的详细描述
    *
    * @return $this
    */
    public function setWaitingLock($waitingLock)
    {
        $this->container['waitingLock'] = $waitingLock;
        return $this;
    }

    /**
    * Gets waitingLockIndex
    *  正在等待的锁是针对表的索引
    *
    * @return string|null
    */
    public function getWaitingLockIndex()
    {
        return $this->container['waitingLockIndex'];
    }

    /**
    * Sets waitingLockIndex
    *
    * @param string|null $waitingLockIndex 正在等待的锁是针对表的索引
    *
    * @return $this
    */
    public function setWaitingLockIndex($waitingLockIndex)
    {
        $this->container['waitingLockIndex'] = $waitingLockIndex;
        return $this;
    }

    /**
    * Gets waitingLockType
    *  正在等待的锁的具体类型
    *
    * @return string|null
    */
    public function getWaitingLockType()
    {
        return $this->container['waitingLockType'];
    }

    /**
    * Sets waitingLockType
    *
    * @param string|null $waitingLockType 正在等待的锁的具体类型
    *
    * @return $this
    */
    public function setWaitingLockType($waitingLockType)
    {
        $this->container['waitingLockType'] = $waitingLockType;
        return $this;
    }

    /**
    * Gets holdingLock
    *  该事务当前持有的锁的详细描述
    *
    * @return string|null
    */
    public function getHoldingLock()
    {
        return $this->container['holdingLock'];
    }

    /**
    * Sets holdingLock
    *
    * @param string|null $holdingLock 该事务当前持有的锁的详细描述
    *
    * @return $this
    */
    public function setHoldingLock($holdingLock)
    {
        $this->container['holdingLock'] = $holdingLock;
        return $this;
    }

    /**
    * Gets holdingLockIndex
    *  持有的锁的针对表的索引
    *
    * @return string|null
    */
    public function getHoldingLockIndex()
    {
        return $this->container['holdingLockIndex'];
    }

    /**
    * Sets holdingLockIndex
    *
    * @param string|null $holdingLockIndex 持有的锁的针对表的索引
    *
    * @return $this
    */
    public function setHoldingLockIndex($holdingLockIndex)
    {
        $this->container['holdingLockIndex'] = $holdingLockIndex;
        return $this;
    }

    /**
    * Gets holdingLockType
    *  持有的锁的具体类型。X 是排他锁，rec 是记录锁
    *
    * @return string|null
    */
    public function getHoldingLockType()
    {
        return $this->container['holdingLockType'];
    }

    /**
    * Sets holdingLockType
    *
    * @param string|null $holdingLockType 持有的锁的具体类型。X 是排他锁，rec 是记录锁
    *
    * @return $this
    */
    public function setHoldingLockType($holdingLockType)
    {
        $this->container['holdingLockType'] = $holdingLockType;
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

