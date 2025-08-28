<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InnodbTrx implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InnodbTrx';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * trxId  事务ID
    * trxState  事务状态
    * trxStarted  事务开始时间
    * trxWaitStarted  事务等待开始时间
    * trxMysqlThreadId  会话ID，同ListProcesses接口返回的id。
    * trxQuery  事务运行的SQL语句
    * trxTablesLocked  加行锁的表数量
    * trxRowsLocked  锁定的行数量（近似值）
    * trxRowsModified  事务插入或者修改的行数
    * trxIsolationLevel  隔离级别
    * innodbWaitLocks  等待锁信息
    * innodbHoldLocks  持有锁信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'trxId' => 'string',
            'trxState' => 'string',
            'trxStarted' => 'string',
            'trxWaitStarted' => 'string',
            'trxMysqlThreadId' => 'string',
            'trxQuery' => 'string',
            'trxTablesLocked' => 'string',
            'trxRowsLocked' => 'string',
            'trxRowsModified' => 'string',
            'trxIsolationLevel' => 'string',
            'innodbWaitLocks' => '\HuaweiCloud\SDK\Das\V3\Model\InnodbLock[]',
            'innodbHoldLocks' => '\HuaweiCloud\SDK\Das\V3\Model\InnodbLock[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * trxId  事务ID
    * trxState  事务状态
    * trxStarted  事务开始时间
    * trxWaitStarted  事务等待开始时间
    * trxMysqlThreadId  会话ID，同ListProcesses接口返回的id。
    * trxQuery  事务运行的SQL语句
    * trxTablesLocked  加行锁的表数量
    * trxRowsLocked  锁定的行数量（近似值）
    * trxRowsModified  事务插入或者修改的行数
    * trxIsolationLevel  隔离级别
    * innodbWaitLocks  等待锁信息
    * innodbHoldLocks  持有锁信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'trxId' => null,
        'trxState' => null,
        'trxStarted' => null,
        'trxWaitStarted' => null,
        'trxMysqlThreadId' => null,
        'trxQuery' => null,
        'trxTablesLocked' => null,
        'trxRowsLocked' => null,
        'trxRowsModified' => null,
        'trxIsolationLevel' => null,
        'innodbWaitLocks' => null,
        'innodbHoldLocks' => null
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
    * trxWaitStarted  事务等待开始时间
    * trxMysqlThreadId  会话ID，同ListProcesses接口返回的id。
    * trxQuery  事务运行的SQL语句
    * trxTablesLocked  加行锁的表数量
    * trxRowsLocked  锁定的行数量（近似值）
    * trxRowsModified  事务插入或者修改的行数
    * trxIsolationLevel  隔离级别
    * innodbWaitLocks  等待锁信息
    * innodbHoldLocks  持有锁信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'trxId' => 'trx_id',
            'trxState' => 'trx_state',
            'trxStarted' => 'trx_started',
            'trxWaitStarted' => 'trx_wait_started',
            'trxMysqlThreadId' => 'trx_mysql_thread_id',
            'trxQuery' => 'trx_query',
            'trxTablesLocked' => 'trx_tables_locked',
            'trxRowsLocked' => 'trx_rows_locked',
            'trxRowsModified' => 'trx_rows_modified',
            'trxIsolationLevel' => 'trx_isolation_level',
            'innodbWaitLocks' => 'innodb_wait_locks',
            'innodbHoldLocks' => 'innodb_hold_locks'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * trxId  事务ID
    * trxState  事务状态
    * trxStarted  事务开始时间
    * trxWaitStarted  事务等待开始时间
    * trxMysqlThreadId  会话ID，同ListProcesses接口返回的id。
    * trxQuery  事务运行的SQL语句
    * trxTablesLocked  加行锁的表数量
    * trxRowsLocked  锁定的行数量（近似值）
    * trxRowsModified  事务插入或者修改的行数
    * trxIsolationLevel  隔离级别
    * innodbWaitLocks  等待锁信息
    * innodbHoldLocks  持有锁信息
    *
    * @var string[]
    */
    protected static $setters = [
            'trxId' => 'setTrxId',
            'trxState' => 'setTrxState',
            'trxStarted' => 'setTrxStarted',
            'trxWaitStarted' => 'setTrxWaitStarted',
            'trxMysqlThreadId' => 'setTrxMysqlThreadId',
            'trxQuery' => 'setTrxQuery',
            'trxTablesLocked' => 'setTrxTablesLocked',
            'trxRowsLocked' => 'setTrxRowsLocked',
            'trxRowsModified' => 'setTrxRowsModified',
            'trxIsolationLevel' => 'setTrxIsolationLevel',
            'innodbWaitLocks' => 'setInnodbWaitLocks',
            'innodbHoldLocks' => 'setInnodbHoldLocks'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * trxId  事务ID
    * trxState  事务状态
    * trxStarted  事务开始时间
    * trxWaitStarted  事务等待开始时间
    * trxMysqlThreadId  会话ID，同ListProcesses接口返回的id。
    * trxQuery  事务运行的SQL语句
    * trxTablesLocked  加行锁的表数量
    * trxRowsLocked  锁定的行数量（近似值）
    * trxRowsModified  事务插入或者修改的行数
    * trxIsolationLevel  隔离级别
    * innodbWaitLocks  等待锁信息
    * innodbHoldLocks  持有锁信息
    *
    * @var string[]
    */
    protected static $getters = [
            'trxId' => 'getTrxId',
            'trxState' => 'getTrxState',
            'trxStarted' => 'getTrxStarted',
            'trxWaitStarted' => 'getTrxWaitStarted',
            'trxMysqlThreadId' => 'getTrxMysqlThreadId',
            'trxQuery' => 'getTrxQuery',
            'trxTablesLocked' => 'getTrxTablesLocked',
            'trxRowsLocked' => 'getTrxRowsLocked',
            'trxRowsModified' => 'getTrxRowsModified',
            'trxIsolationLevel' => 'getTrxIsolationLevel',
            'innodbWaitLocks' => 'getInnodbWaitLocks',
            'innodbHoldLocks' => 'getInnodbHoldLocks'
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
        $this->container['trxWaitStarted'] = isset($data['trxWaitStarted']) ? $data['trxWaitStarted'] : null;
        $this->container['trxMysqlThreadId'] = isset($data['trxMysqlThreadId']) ? $data['trxMysqlThreadId'] : null;
        $this->container['trxQuery'] = isset($data['trxQuery']) ? $data['trxQuery'] : null;
        $this->container['trxTablesLocked'] = isset($data['trxTablesLocked']) ? $data['trxTablesLocked'] : null;
        $this->container['trxRowsLocked'] = isset($data['trxRowsLocked']) ? $data['trxRowsLocked'] : null;
        $this->container['trxRowsModified'] = isset($data['trxRowsModified']) ? $data['trxRowsModified'] : null;
        $this->container['trxIsolationLevel'] = isset($data['trxIsolationLevel']) ? $data['trxIsolationLevel'] : null;
        $this->container['innodbWaitLocks'] = isset($data['innodbWaitLocks']) ? $data['innodbWaitLocks'] : null;
        $this->container['innodbHoldLocks'] = isset($data['innodbHoldLocks']) ? $data['innodbHoldLocks'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['trxId'] === null) {
            $invalidProperties[] = "'trxId' can't be null";
        }
        if ($this->container['trxState'] === null) {
            $invalidProperties[] = "'trxState' can't be null";
        }
        if ($this->container['trxStarted'] === null) {
            $invalidProperties[] = "'trxStarted' can't be null";
        }
        if ($this->container['trxWaitStarted'] === null) {
            $invalidProperties[] = "'trxWaitStarted' can't be null";
        }
        if ($this->container['trxMysqlThreadId'] === null) {
            $invalidProperties[] = "'trxMysqlThreadId' can't be null";
        }
        if ($this->container['trxQuery'] === null) {
            $invalidProperties[] = "'trxQuery' can't be null";
        }
        if ($this->container['trxTablesLocked'] === null) {
            $invalidProperties[] = "'trxTablesLocked' can't be null";
        }
        if ($this->container['trxRowsLocked'] === null) {
            $invalidProperties[] = "'trxRowsLocked' can't be null";
        }
        if ($this->container['trxRowsModified'] === null) {
            $invalidProperties[] = "'trxRowsModified' can't be null";
        }
        if ($this->container['trxIsolationLevel'] === null) {
            $invalidProperties[] = "'trxIsolationLevel' can't be null";
        }
        if ($this->container['innodbWaitLocks'] === null) {
            $invalidProperties[] = "'innodbWaitLocks' can't be null";
        }
        if ($this->container['innodbHoldLocks'] === null) {
            $invalidProperties[] = "'innodbHoldLocks' can't be null";
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
    * Gets trxId
    *  事务ID
    *
    * @return string
    */
    public function getTrxId()
    {
        return $this->container['trxId'];
    }

    /**
    * Sets trxId
    *
    * @param string $trxId 事务ID
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
    * @return string
    */
    public function getTrxState()
    {
        return $this->container['trxState'];
    }

    /**
    * Sets trxState
    *
    * @param string $trxState 事务状态
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
    * @return string
    */
    public function getTrxStarted()
    {
        return $this->container['trxStarted'];
    }

    /**
    * Sets trxStarted
    *
    * @param string $trxStarted 事务开始时间
    *
    * @return $this
    */
    public function setTrxStarted($trxStarted)
    {
        $this->container['trxStarted'] = $trxStarted;
        return $this;
    }

    /**
    * Gets trxWaitStarted
    *  事务等待开始时间
    *
    * @return string
    */
    public function getTrxWaitStarted()
    {
        return $this->container['trxWaitStarted'];
    }

    /**
    * Sets trxWaitStarted
    *
    * @param string $trxWaitStarted 事务等待开始时间
    *
    * @return $this
    */
    public function setTrxWaitStarted($trxWaitStarted)
    {
        $this->container['trxWaitStarted'] = $trxWaitStarted;
        return $this;
    }

    /**
    * Gets trxMysqlThreadId
    *  会话ID，同ListProcesses接口返回的id。
    *
    * @return string
    */
    public function getTrxMysqlThreadId()
    {
        return $this->container['trxMysqlThreadId'];
    }

    /**
    * Sets trxMysqlThreadId
    *
    * @param string $trxMysqlThreadId 会话ID，同ListProcesses接口返回的id。
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
    *  事务运行的SQL语句
    *
    * @return string
    */
    public function getTrxQuery()
    {
        return $this->container['trxQuery'];
    }

    /**
    * Sets trxQuery
    *
    * @param string $trxQuery 事务运行的SQL语句
    *
    * @return $this
    */
    public function setTrxQuery($trxQuery)
    {
        $this->container['trxQuery'] = $trxQuery;
        return $this;
    }

    /**
    * Gets trxTablesLocked
    *  加行锁的表数量
    *
    * @return string
    */
    public function getTrxTablesLocked()
    {
        return $this->container['trxTablesLocked'];
    }

    /**
    * Sets trxTablesLocked
    *
    * @param string $trxTablesLocked 加行锁的表数量
    *
    * @return $this
    */
    public function setTrxTablesLocked($trxTablesLocked)
    {
        $this->container['trxTablesLocked'] = $trxTablesLocked;
        return $this;
    }

    /**
    * Gets trxRowsLocked
    *  锁定的行数量（近似值）
    *
    * @return string
    */
    public function getTrxRowsLocked()
    {
        return $this->container['trxRowsLocked'];
    }

    /**
    * Sets trxRowsLocked
    *
    * @param string $trxRowsLocked 锁定的行数量（近似值）
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
    *  事务插入或者修改的行数
    *
    * @return string
    */
    public function getTrxRowsModified()
    {
        return $this->container['trxRowsModified'];
    }

    /**
    * Sets trxRowsModified
    *
    * @param string $trxRowsModified 事务插入或者修改的行数
    *
    * @return $this
    */
    public function setTrxRowsModified($trxRowsModified)
    {
        $this->container['trxRowsModified'] = $trxRowsModified;
        return $this;
    }

    /**
    * Gets trxIsolationLevel
    *  隔离级别
    *
    * @return string
    */
    public function getTrxIsolationLevel()
    {
        return $this->container['trxIsolationLevel'];
    }

    /**
    * Sets trxIsolationLevel
    *
    * @param string $trxIsolationLevel 隔离级别
    *
    * @return $this
    */
    public function setTrxIsolationLevel($trxIsolationLevel)
    {
        $this->container['trxIsolationLevel'] = $trxIsolationLevel;
        return $this;
    }

    /**
    * Gets innodbWaitLocks
    *  等待锁信息
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\InnodbLock[]
    */
    public function getInnodbWaitLocks()
    {
        return $this->container['innodbWaitLocks'];
    }

    /**
    * Sets innodbWaitLocks
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\InnodbLock[] $innodbWaitLocks 等待锁信息
    *
    * @return $this
    */
    public function setInnodbWaitLocks($innodbWaitLocks)
    {
        $this->container['innodbWaitLocks'] = $innodbWaitLocks;
        return $this;
    }

    /**
    * Gets innodbHoldLocks
    *  持有锁信息
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\InnodbLock[]
    */
    public function getInnodbHoldLocks()
    {
        return $this->container['innodbHoldLocks'];
    }

    /**
    * Sets innodbHoldLocks
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\InnodbLock[] $innodbHoldLocks 持有锁信息
    *
    * @return $this
    */
    public function setInnodbHoldLocks($innodbHoldLocks)
    {
        $this->container['innodbHoldLocks'] = $innodbHoldLocks;
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

