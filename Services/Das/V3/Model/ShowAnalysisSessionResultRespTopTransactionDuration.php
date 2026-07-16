<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAnalysisSessionResultRespTopTransactionDuration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAnalysisSessionResultResp_top_transaction_duration';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sessionId  会话ID
    * user  用户名
    * host  主机IP
    * databaseName  数据库名
    * executionStatus  执行状态
    * command  命令类型
    * sqlStatement  SQL语句
    * stateDuration  状态持续时间（秒）
    * transactionDuration  事务持续时间（秒）
    * transactionId  事务ID
    * transactionLockWaitTime  事务锁等待时长（秒）
    * transactionStatus  事务状态
    * rowsLockedByTransactions  事务锁定行数
    * tablesLockedByTransactions  事务锁定表数量
    * rowsUpdatedByTransactions  事务更新行数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sessionId' => 'string',
            'user' => 'string',
            'host' => 'string',
            'databaseName' => 'string',
            'executionStatus' => 'string',
            'command' => 'string',
            'sqlStatement' => 'string',
            'stateDuration' => 'string',
            'transactionDuration' => 'string',
            'transactionId' => 'string',
            'transactionLockWaitTime' => 'string',
            'transactionStatus' => 'string',
            'rowsLockedByTransactions' => 'string',
            'tablesLockedByTransactions' => 'string',
            'rowsUpdatedByTransactions' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sessionId  会话ID
    * user  用户名
    * host  主机IP
    * databaseName  数据库名
    * executionStatus  执行状态
    * command  命令类型
    * sqlStatement  SQL语句
    * stateDuration  状态持续时间（秒）
    * transactionDuration  事务持续时间（秒）
    * transactionId  事务ID
    * transactionLockWaitTime  事务锁等待时长（秒）
    * transactionStatus  事务状态
    * rowsLockedByTransactions  事务锁定行数
    * tablesLockedByTransactions  事务锁定表数量
    * rowsUpdatedByTransactions  事务更新行数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sessionId' => null,
        'user' => null,
        'host' => null,
        'databaseName' => null,
        'executionStatus' => null,
        'command' => null,
        'sqlStatement' => null,
        'stateDuration' => null,
        'transactionDuration' => null,
        'transactionId' => null,
        'transactionLockWaitTime' => null,
        'transactionStatus' => null,
        'rowsLockedByTransactions' => null,
        'tablesLockedByTransactions' => null,
        'rowsUpdatedByTransactions' => null
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
    * sessionId  会话ID
    * user  用户名
    * host  主机IP
    * databaseName  数据库名
    * executionStatus  执行状态
    * command  命令类型
    * sqlStatement  SQL语句
    * stateDuration  状态持续时间（秒）
    * transactionDuration  事务持续时间（秒）
    * transactionId  事务ID
    * transactionLockWaitTime  事务锁等待时长（秒）
    * transactionStatus  事务状态
    * rowsLockedByTransactions  事务锁定行数
    * tablesLockedByTransactions  事务锁定表数量
    * rowsUpdatedByTransactions  事务更新行数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sessionId' => 'session_id',
            'user' => 'user',
            'host' => 'host',
            'databaseName' => 'database_name',
            'executionStatus' => 'execution_status',
            'command' => 'command',
            'sqlStatement' => 'sql_statement',
            'stateDuration' => 'state_duration',
            'transactionDuration' => 'transaction_duration',
            'transactionId' => 'transaction_id',
            'transactionLockWaitTime' => 'transaction_lock_wait_time',
            'transactionStatus' => 'transaction_status',
            'rowsLockedByTransactions' => 'rows_locked_by_transactions',
            'tablesLockedByTransactions' => 'tables_locked_by_transactions',
            'rowsUpdatedByTransactions' => 'rows_updated_by_transactions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sessionId  会话ID
    * user  用户名
    * host  主机IP
    * databaseName  数据库名
    * executionStatus  执行状态
    * command  命令类型
    * sqlStatement  SQL语句
    * stateDuration  状态持续时间（秒）
    * transactionDuration  事务持续时间（秒）
    * transactionId  事务ID
    * transactionLockWaitTime  事务锁等待时长（秒）
    * transactionStatus  事务状态
    * rowsLockedByTransactions  事务锁定行数
    * tablesLockedByTransactions  事务锁定表数量
    * rowsUpdatedByTransactions  事务更新行数
    *
    * @var string[]
    */
    protected static $setters = [
            'sessionId' => 'setSessionId',
            'user' => 'setUser',
            'host' => 'setHost',
            'databaseName' => 'setDatabaseName',
            'executionStatus' => 'setExecutionStatus',
            'command' => 'setCommand',
            'sqlStatement' => 'setSqlStatement',
            'stateDuration' => 'setStateDuration',
            'transactionDuration' => 'setTransactionDuration',
            'transactionId' => 'setTransactionId',
            'transactionLockWaitTime' => 'setTransactionLockWaitTime',
            'transactionStatus' => 'setTransactionStatus',
            'rowsLockedByTransactions' => 'setRowsLockedByTransactions',
            'tablesLockedByTransactions' => 'setTablesLockedByTransactions',
            'rowsUpdatedByTransactions' => 'setRowsUpdatedByTransactions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sessionId  会话ID
    * user  用户名
    * host  主机IP
    * databaseName  数据库名
    * executionStatus  执行状态
    * command  命令类型
    * sqlStatement  SQL语句
    * stateDuration  状态持续时间（秒）
    * transactionDuration  事务持续时间（秒）
    * transactionId  事务ID
    * transactionLockWaitTime  事务锁等待时长（秒）
    * transactionStatus  事务状态
    * rowsLockedByTransactions  事务锁定行数
    * tablesLockedByTransactions  事务锁定表数量
    * rowsUpdatedByTransactions  事务更新行数
    *
    * @var string[]
    */
    protected static $getters = [
            'sessionId' => 'getSessionId',
            'user' => 'getUser',
            'host' => 'getHost',
            'databaseName' => 'getDatabaseName',
            'executionStatus' => 'getExecutionStatus',
            'command' => 'getCommand',
            'sqlStatement' => 'getSqlStatement',
            'stateDuration' => 'getStateDuration',
            'transactionDuration' => 'getTransactionDuration',
            'transactionId' => 'getTransactionId',
            'transactionLockWaitTime' => 'getTransactionLockWaitTime',
            'transactionStatus' => 'getTransactionStatus',
            'rowsLockedByTransactions' => 'getRowsLockedByTransactions',
            'tablesLockedByTransactions' => 'getTablesLockedByTransactions',
            'rowsUpdatedByTransactions' => 'getRowsUpdatedByTransactions'
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
        $this->container['sessionId'] = isset($data['sessionId']) ? $data['sessionId'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['executionStatus'] = isset($data['executionStatus']) ? $data['executionStatus'] : null;
        $this->container['command'] = isset($data['command']) ? $data['command'] : null;
        $this->container['sqlStatement'] = isset($data['sqlStatement']) ? $data['sqlStatement'] : null;
        $this->container['stateDuration'] = isset($data['stateDuration']) ? $data['stateDuration'] : null;
        $this->container['transactionDuration'] = isset($data['transactionDuration']) ? $data['transactionDuration'] : null;
        $this->container['transactionId'] = isset($data['transactionId']) ? $data['transactionId'] : null;
        $this->container['transactionLockWaitTime'] = isset($data['transactionLockWaitTime']) ? $data['transactionLockWaitTime'] : null;
        $this->container['transactionStatus'] = isset($data['transactionStatus']) ? $data['transactionStatus'] : null;
        $this->container['rowsLockedByTransactions'] = isset($data['rowsLockedByTransactions']) ? $data['rowsLockedByTransactions'] : null;
        $this->container['tablesLockedByTransactions'] = isset($data['tablesLockedByTransactions']) ? $data['tablesLockedByTransactions'] : null;
        $this->container['rowsUpdatedByTransactions'] = isset($data['rowsUpdatedByTransactions']) ? $data['rowsUpdatedByTransactions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sessionId'] === null) {
            $invalidProperties[] = "'sessionId' can't be null";
        }
        if ($this->container['user'] === null) {
            $invalidProperties[] = "'user' can't be null";
        }
        if ($this->container['host'] === null) {
            $invalidProperties[] = "'host' can't be null";
        }
        if ($this->container['databaseName'] === null) {
            $invalidProperties[] = "'databaseName' can't be null";
        }
        if ($this->container['executionStatus'] === null) {
            $invalidProperties[] = "'executionStatus' can't be null";
        }
        if ($this->container['command'] === null) {
            $invalidProperties[] = "'command' can't be null";
        }
        if ($this->container['sqlStatement'] === null) {
            $invalidProperties[] = "'sqlStatement' can't be null";
        }
        if ($this->container['stateDuration'] === null) {
            $invalidProperties[] = "'stateDuration' can't be null";
        }
        if ($this->container['transactionDuration'] === null) {
            $invalidProperties[] = "'transactionDuration' can't be null";
        }
        if ($this->container['transactionId'] === null) {
            $invalidProperties[] = "'transactionId' can't be null";
        }
        if ($this->container['transactionLockWaitTime'] === null) {
            $invalidProperties[] = "'transactionLockWaitTime' can't be null";
        }
        if ($this->container['transactionStatus'] === null) {
            $invalidProperties[] = "'transactionStatus' can't be null";
        }
        if ($this->container['rowsLockedByTransactions'] === null) {
            $invalidProperties[] = "'rowsLockedByTransactions' can't be null";
        }
        if ($this->container['tablesLockedByTransactions'] === null) {
            $invalidProperties[] = "'tablesLockedByTransactions' can't be null";
        }
        if ($this->container['rowsUpdatedByTransactions'] === null) {
            $invalidProperties[] = "'rowsUpdatedByTransactions' can't be null";
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
    * Gets sessionId
    *  会话ID
    *
    * @return string
    */
    public function getSessionId()
    {
        return $this->container['sessionId'];
    }

    /**
    * Sets sessionId
    *
    * @param string $sessionId 会话ID
    *
    * @return $this
    */
    public function setSessionId($sessionId)
    {
        $this->container['sessionId'] = $sessionId;
        return $this;
    }

    /**
    * Gets user
    *  用户名
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
    * @param string $user 用户名
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets host
    *  主机IP
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
    * @param string $host 主机IP
    *
    * @return $this
    */
    public function setHost($host)
    {
        $this->container['host'] = $host;
        return $this;
    }

    /**
    * Gets databaseName
    *  数据库名
    *
    * @return string
    */
    public function getDatabaseName()
    {
        return $this->container['databaseName'];
    }

    /**
    * Sets databaseName
    *
    * @param string $databaseName 数据库名
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets executionStatus
    *  执行状态
    *
    * @return string
    */
    public function getExecutionStatus()
    {
        return $this->container['executionStatus'];
    }

    /**
    * Sets executionStatus
    *
    * @param string $executionStatus 执行状态
    *
    * @return $this
    */
    public function setExecutionStatus($executionStatus)
    {
        $this->container['executionStatus'] = $executionStatus;
        return $this;
    }

    /**
    * Gets command
    *  命令类型
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
    * @param string $command 命令类型
    *
    * @return $this
    */
    public function setCommand($command)
    {
        $this->container['command'] = $command;
        return $this;
    }

    /**
    * Gets sqlStatement
    *  SQL语句
    *
    * @return string
    */
    public function getSqlStatement()
    {
        return $this->container['sqlStatement'];
    }

    /**
    * Sets sqlStatement
    *
    * @param string $sqlStatement SQL语句
    *
    * @return $this
    */
    public function setSqlStatement($sqlStatement)
    {
        $this->container['sqlStatement'] = $sqlStatement;
        return $this;
    }

    /**
    * Gets stateDuration
    *  状态持续时间（秒）
    *
    * @return string
    */
    public function getStateDuration()
    {
        return $this->container['stateDuration'];
    }

    /**
    * Sets stateDuration
    *
    * @param string $stateDuration 状态持续时间（秒）
    *
    * @return $this
    */
    public function setStateDuration($stateDuration)
    {
        $this->container['stateDuration'] = $stateDuration;
        return $this;
    }

    /**
    * Gets transactionDuration
    *  事务持续时间（秒）
    *
    * @return string
    */
    public function getTransactionDuration()
    {
        return $this->container['transactionDuration'];
    }

    /**
    * Sets transactionDuration
    *
    * @param string $transactionDuration 事务持续时间（秒）
    *
    * @return $this
    */
    public function setTransactionDuration($transactionDuration)
    {
        $this->container['transactionDuration'] = $transactionDuration;
        return $this;
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
    * Gets transactionLockWaitTime
    *  事务锁等待时长（秒）
    *
    * @return string
    */
    public function getTransactionLockWaitTime()
    {
        return $this->container['transactionLockWaitTime'];
    }

    /**
    * Sets transactionLockWaitTime
    *
    * @param string $transactionLockWaitTime 事务锁等待时长（秒）
    *
    * @return $this
    */
    public function setTransactionLockWaitTime($transactionLockWaitTime)
    {
        $this->container['transactionLockWaitTime'] = $transactionLockWaitTime;
        return $this;
    }

    /**
    * Gets transactionStatus
    *  事务状态
    *
    * @return string
    */
    public function getTransactionStatus()
    {
        return $this->container['transactionStatus'];
    }

    /**
    * Sets transactionStatus
    *
    * @param string $transactionStatus 事务状态
    *
    * @return $this
    */
    public function setTransactionStatus($transactionStatus)
    {
        $this->container['transactionStatus'] = $transactionStatus;
        return $this;
    }

    /**
    * Gets rowsLockedByTransactions
    *  事务锁定行数
    *
    * @return string
    */
    public function getRowsLockedByTransactions()
    {
        return $this->container['rowsLockedByTransactions'];
    }

    /**
    * Sets rowsLockedByTransactions
    *
    * @param string $rowsLockedByTransactions 事务锁定行数
    *
    * @return $this
    */
    public function setRowsLockedByTransactions($rowsLockedByTransactions)
    {
        $this->container['rowsLockedByTransactions'] = $rowsLockedByTransactions;
        return $this;
    }

    /**
    * Gets tablesLockedByTransactions
    *  事务锁定表数量
    *
    * @return string
    */
    public function getTablesLockedByTransactions()
    {
        return $this->container['tablesLockedByTransactions'];
    }

    /**
    * Sets tablesLockedByTransactions
    *
    * @param string $tablesLockedByTransactions 事务锁定表数量
    *
    * @return $this
    */
    public function setTablesLockedByTransactions($tablesLockedByTransactions)
    {
        $this->container['tablesLockedByTransactions'] = $tablesLockedByTransactions;
        return $this;
    }

    /**
    * Gets rowsUpdatedByTransactions
    *  事务更新行数
    *
    * @return string
    */
    public function getRowsUpdatedByTransactions()
    {
        return $this->container['rowsUpdatedByTransactions'];
    }

    /**
    * Sets rowsUpdatedByTransactions
    *
    * @param string $rowsUpdatedByTransactions 事务更新行数
    *
    * @return $this
    */
    public function setRowsUpdatedByTransactions($rowsUpdatedByTransactions)
    {
        $this->container['rowsUpdatedByTransactions'] = $rowsUpdatedByTransactions;
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

