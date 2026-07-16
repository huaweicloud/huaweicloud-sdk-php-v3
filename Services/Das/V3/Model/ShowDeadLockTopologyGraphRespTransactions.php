<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDeadLockTopologyGraphRespTransactions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDeadLockTopologyGraphResp_transactions';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * transactionId  事务ID
    * threadId  线程ID
    * rollbackTarget  是否被回滚
    * sql  SQL语句
    * table  操作的表名
    * operator  操作类型
    * rowLockCount  行锁数量
    * undoLogEntries  Undo日志条数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'transactionId' => 'string',
            'threadId' => 'int',
            'rollbackTarget' => 'bool',
            'sql' => 'string',
            'table' => 'string',
            'operator' => 'string',
            'rowLockCount' => 'int',
            'undoLogEntries' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * transactionId  事务ID
    * threadId  线程ID
    * rollbackTarget  是否被回滚
    * sql  SQL语句
    * table  操作的表名
    * operator  操作类型
    * rowLockCount  行锁数量
    * undoLogEntries  Undo日志条数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'transactionId' => null,
        'threadId' => 'int64',
        'rollbackTarget' => null,
        'sql' => null,
        'table' => null,
        'operator' => null,
        'rowLockCount' => 'int64',
        'undoLogEntries' => 'int64'
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
    * transactionId  事务ID
    * threadId  线程ID
    * rollbackTarget  是否被回滚
    * sql  SQL语句
    * table  操作的表名
    * operator  操作类型
    * rowLockCount  行锁数量
    * undoLogEntries  Undo日志条数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'transactionId' => 'transaction_id',
            'threadId' => 'thread_id',
            'rollbackTarget' => 'rollback_target',
            'sql' => 'sql',
            'table' => 'table',
            'operator' => 'operator',
            'rowLockCount' => 'row_lock_count',
            'undoLogEntries' => 'undo_log_entries'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * transactionId  事务ID
    * threadId  线程ID
    * rollbackTarget  是否被回滚
    * sql  SQL语句
    * table  操作的表名
    * operator  操作类型
    * rowLockCount  行锁数量
    * undoLogEntries  Undo日志条数
    *
    * @var string[]
    */
    protected static $setters = [
            'transactionId' => 'setTransactionId',
            'threadId' => 'setThreadId',
            'rollbackTarget' => 'setRollbackTarget',
            'sql' => 'setSql',
            'table' => 'setTable',
            'operator' => 'setOperator',
            'rowLockCount' => 'setRowLockCount',
            'undoLogEntries' => 'setUndoLogEntries'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * transactionId  事务ID
    * threadId  线程ID
    * rollbackTarget  是否被回滚
    * sql  SQL语句
    * table  操作的表名
    * operator  操作类型
    * rowLockCount  行锁数量
    * undoLogEntries  Undo日志条数
    *
    * @var string[]
    */
    protected static $getters = [
            'transactionId' => 'getTransactionId',
            'threadId' => 'getThreadId',
            'rollbackTarget' => 'getRollbackTarget',
            'sql' => 'getSql',
            'table' => 'getTable',
            'operator' => 'getOperator',
            'rowLockCount' => 'getRowLockCount',
            'undoLogEntries' => 'getUndoLogEntries'
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
        $this->container['transactionId'] = isset($data['transactionId']) ? $data['transactionId'] : null;
        $this->container['threadId'] = isset($data['threadId']) ? $data['threadId'] : null;
        $this->container['rollbackTarget'] = isset($data['rollbackTarget']) ? $data['rollbackTarget'] : null;
        $this->container['sql'] = isset($data['sql']) ? $data['sql'] : null;
        $this->container['table'] = isset($data['table']) ? $data['table'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['rowLockCount'] = isset($data['rowLockCount']) ? $data['rowLockCount'] : null;
        $this->container['undoLogEntries'] = isset($data['undoLogEntries']) ? $data['undoLogEntries'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['transactionId'] === null) {
            $invalidProperties[] = "'transactionId' can't be null";
        }
        if ($this->container['threadId'] === null) {
            $invalidProperties[] = "'threadId' can't be null";
        }
        if ($this->container['rollbackTarget'] === null) {
            $invalidProperties[] = "'rollbackTarget' can't be null";
        }
        if ($this->container['sql'] === null) {
            $invalidProperties[] = "'sql' can't be null";
        }
        if ($this->container['table'] === null) {
            $invalidProperties[] = "'table' can't be null";
        }
        if ($this->container['operator'] === null) {
            $invalidProperties[] = "'operator' can't be null";
        }
        if ($this->container['rowLockCount'] === null) {
            $invalidProperties[] = "'rowLockCount' can't be null";
        }
        if ($this->container['undoLogEntries'] === null) {
            $invalidProperties[] = "'undoLogEntries' can't be null";
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
    * Gets transactionId
    *  事务ID
    *
    * @return string
    */
    public function getTransactionId()
    {
        return $this->container['transactionId'];
    }

    /**
    * Sets transactionId
    *
    * @param string $transactionId 事务ID
    *
    * @return $this
    */
    public function setTransactionId($transactionId)
    {
        $this->container['transactionId'] = $transactionId;
        return $this;
    }

    /**
    * Gets threadId
    *  线程ID
    *
    * @return int
    */
    public function getThreadId()
    {
        return $this->container['threadId'];
    }

    /**
    * Sets threadId
    *
    * @param int $threadId 线程ID
    *
    * @return $this
    */
    public function setThreadId($threadId)
    {
        $this->container['threadId'] = $threadId;
        return $this;
    }

    /**
    * Gets rollbackTarget
    *  是否被回滚
    *
    * @return bool
    */
    public function getRollbackTarget()
    {
        return $this->container['rollbackTarget'];
    }

    /**
    * Sets rollbackTarget
    *
    * @param bool $rollbackTarget 是否被回滚
    *
    * @return $this
    */
    public function setRollbackTarget($rollbackTarget)
    {
        $this->container['rollbackTarget'] = $rollbackTarget;
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
    * Gets table
    *  操作的表名
    *
    * @return string
    */
    public function getTable()
    {
        return $this->container['table'];
    }

    /**
    * Sets table
    *
    * @param string $table 操作的表名
    *
    * @return $this
    */
    public function setTable($table)
    {
        $this->container['table'] = $table;
        return $this;
    }

    /**
    * Gets operator
    *  操作类型
    *
    * @return string
    */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
    * Sets operator
    *
    * @param string $operator 操作类型
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
        return $this;
    }

    /**
    * Gets rowLockCount
    *  行锁数量
    *
    * @return int
    */
    public function getRowLockCount()
    {
        return $this->container['rowLockCount'];
    }

    /**
    * Sets rowLockCount
    *
    * @param int $rowLockCount 行锁数量
    *
    * @return $this
    */
    public function setRowLockCount($rowLockCount)
    {
        $this->container['rowLockCount'] = $rowLockCount;
        return $this;
    }

    /**
    * Gets undoLogEntries
    *  Undo日志条数
    *
    * @return int
    */
    public function getUndoLogEntries()
    {
        return $this->container['undoLogEntries'];
    }

    /**
    * Sets undoLogEntries
    *
    * @param int $undoLogEntries Undo日志条数
    *
    * @return $this
    */
    public function setUndoLogEntries($undoLogEntries)
    {
        $this->container['undoLogEntries'] = $undoLogEntries;
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

