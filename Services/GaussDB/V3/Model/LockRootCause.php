<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LockRootCause implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LockRootCause';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * lockedPid  **参数解释**： 被锁会话ID。 **取值范围**： 不涉及。
    * lockedSql  **参数解释**： 被锁会话当前执行的SQL。 **取值范围**： 不涉及。
    * waitSeconds  **参数解释**： 等待持续时间（秒）。 **取值范围**： 不涉及。
    * lockDb  **参数解释**： 锁所在数据库。 **取值范围**： 不涉及。
    * lockTable  **参数解释**： 锁所在表。 **取值范围**： 不涉及。
    * lockIndex  **参数解释**： 锁所在索引。 **取值范围**： 不涉及。
    * lockMode  **参数解释**： 锁模式。 **取值范围**： - IX：表级排他锁。 - X,REC_NOT_GAP：排他记录锁。 - X,GAP：间隙锁。 - X：行级排他锁。
    * lockData  **参数解释**： 锁住的具体数据行的标识。 **取值范围**： 不涉及。
    * blockerPid  **参数解释**： 阻塞源会话ID。 **取值范围**： 不涉及。
    * blockerState  **参数解释**： 阻塞源事务状态。 **取值范围**： - RUNNING：运行中。 - LOCK WAIT：锁等待。 - ROLLING BACK：回滚中。 - COMMITTING：提交中。
    * blockerAge  **参数解释**： 阻塞源事务持续时间（秒）。 **取值范围**： 不涉及。
    * blockerRowsLocked  **参数解释**： 阻塞源锁定的行数。 **取值范围**： 不涉及。
    * blockerRowsModified  **参数解释**： 阻塞源修改的行数。 **取值范围**： 不涉及。
    * blockerCurrentSql  **参数解释**： 阻塞源当前执行的SQL列表。
    * blockerHost  **参数解释**： 阻塞源主机。 **取值范围**： 不涉及。
    * blockerCommand  **参数解释**： 阻塞源命令。 **取值范围**： 不涉及。
    * blockerThreadId  **参数解释**： 阻塞源线程ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'lockedPid' => 'int',
            'lockedSql' => 'string',
            'waitSeconds' => 'int',
            'lockDb' => 'string',
            'lockTable' => 'string',
            'lockIndex' => 'string',
            'lockMode' => 'string',
            'lockData' => 'string',
            'blockerPid' => 'int',
            'blockerState' => 'string',
            'blockerAge' => 'int',
            'blockerRowsLocked' => 'int',
            'blockerRowsModified' => 'int',
            'blockerCurrentSql' => 'string[]',
            'blockerHost' => 'string',
            'blockerCommand' => 'string',
            'blockerThreadId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * lockedPid  **参数解释**： 被锁会话ID。 **取值范围**： 不涉及。
    * lockedSql  **参数解释**： 被锁会话当前执行的SQL。 **取值范围**： 不涉及。
    * waitSeconds  **参数解释**： 等待持续时间（秒）。 **取值范围**： 不涉及。
    * lockDb  **参数解释**： 锁所在数据库。 **取值范围**： 不涉及。
    * lockTable  **参数解释**： 锁所在表。 **取值范围**： 不涉及。
    * lockIndex  **参数解释**： 锁所在索引。 **取值范围**： 不涉及。
    * lockMode  **参数解释**： 锁模式。 **取值范围**： - IX：表级排他锁。 - X,REC_NOT_GAP：排他记录锁。 - X,GAP：间隙锁。 - X：行级排他锁。
    * lockData  **参数解释**： 锁住的具体数据行的标识。 **取值范围**： 不涉及。
    * blockerPid  **参数解释**： 阻塞源会话ID。 **取值范围**： 不涉及。
    * blockerState  **参数解释**： 阻塞源事务状态。 **取值范围**： - RUNNING：运行中。 - LOCK WAIT：锁等待。 - ROLLING BACK：回滚中。 - COMMITTING：提交中。
    * blockerAge  **参数解释**： 阻塞源事务持续时间（秒）。 **取值范围**： 不涉及。
    * blockerRowsLocked  **参数解释**： 阻塞源锁定的行数。 **取值范围**： 不涉及。
    * blockerRowsModified  **参数解释**： 阻塞源修改的行数。 **取值范围**： 不涉及。
    * blockerCurrentSql  **参数解释**： 阻塞源当前执行的SQL列表。
    * blockerHost  **参数解释**： 阻塞源主机。 **取值范围**： 不涉及。
    * blockerCommand  **参数解释**： 阻塞源命令。 **取值范围**： 不涉及。
    * blockerThreadId  **参数解释**： 阻塞源线程ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'lockedPid' => 'int64',
        'lockedSql' => null,
        'waitSeconds' => 'int64',
        'lockDb' => null,
        'lockTable' => null,
        'lockIndex' => null,
        'lockMode' => null,
        'lockData' => null,
        'blockerPid' => 'int64',
        'blockerState' => null,
        'blockerAge' => null,
        'blockerRowsLocked' => 'int64',
        'blockerRowsModified' => 'int64',
        'blockerCurrentSql' => null,
        'blockerHost' => null,
        'blockerCommand' => null,
        'blockerThreadId' => 'int64'
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
    * lockedPid  **参数解释**： 被锁会话ID。 **取值范围**： 不涉及。
    * lockedSql  **参数解释**： 被锁会话当前执行的SQL。 **取值范围**： 不涉及。
    * waitSeconds  **参数解释**： 等待持续时间（秒）。 **取值范围**： 不涉及。
    * lockDb  **参数解释**： 锁所在数据库。 **取值范围**： 不涉及。
    * lockTable  **参数解释**： 锁所在表。 **取值范围**： 不涉及。
    * lockIndex  **参数解释**： 锁所在索引。 **取值范围**： 不涉及。
    * lockMode  **参数解释**： 锁模式。 **取值范围**： - IX：表级排他锁。 - X,REC_NOT_GAP：排他记录锁。 - X,GAP：间隙锁。 - X：行级排他锁。
    * lockData  **参数解释**： 锁住的具体数据行的标识。 **取值范围**： 不涉及。
    * blockerPid  **参数解释**： 阻塞源会话ID。 **取值范围**： 不涉及。
    * blockerState  **参数解释**： 阻塞源事务状态。 **取值范围**： - RUNNING：运行中。 - LOCK WAIT：锁等待。 - ROLLING BACK：回滚中。 - COMMITTING：提交中。
    * blockerAge  **参数解释**： 阻塞源事务持续时间（秒）。 **取值范围**： 不涉及。
    * blockerRowsLocked  **参数解释**： 阻塞源锁定的行数。 **取值范围**： 不涉及。
    * blockerRowsModified  **参数解释**： 阻塞源修改的行数。 **取值范围**： 不涉及。
    * blockerCurrentSql  **参数解释**： 阻塞源当前执行的SQL列表。
    * blockerHost  **参数解释**： 阻塞源主机。 **取值范围**： 不涉及。
    * blockerCommand  **参数解释**： 阻塞源命令。 **取值范围**： 不涉及。
    * blockerThreadId  **参数解释**： 阻塞源线程ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'lockedPid' => 'locked_pid',
            'lockedSql' => 'locked_sql',
            'waitSeconds' => 'wait_seconds',
            'lockDb' => 'lock_db',
            'lockTable' => 'lock_table',
            'lockIndex' => 'lock_index',
            'lockMode' => 'lock_mode',
            'lockData' => 'lock_data',
            'blockerPid' => 'blocker_pid',
            'blockerState' => 'blocker_state',
            'blockerAge' => 'blocker_age',
            'blockerRowsLocked' => 'blocker_rows_locked',
            'blockerRowsModified' => 'blocker_rows_modified',
            'blockerCurrentSql' => 'blocker_current_sql',
            'blockerHost' => 'blocker_host',
            'blockerCommand' => 'blocker_command',
            'blockerThreadId' => 'blocker_thread_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * lockedPid  **参数解释**： 被锁会话ID。 **取值范围**： 不涉及。
    * lockedSql  **参数解释**： 被锁会话当前执行的SQL。 **取值范围**： 不涉及。
    * waitSeconds  **参数解释**： 等待持续时间（秒）。 **取值范围**： 不涉及。
    * lockDb  **参数解释**： 锁所在数据库。 **取值范围**： 不涉及。
    * lockTable  **参数解释**： 锁所在表。 **取值范围**： 不涉及。
    * lockIndex  **参数解释**： 锁所在索引。 **取值范围**： 不涉及。
    * lockMode  **参数解释**： 锁模式。 **取值范围**： - IX：表级排他锁。 - X,REC_NOT_GAP：排他记录锁。 - X,GAP：间隙锁。 - X：行级排他锁。
    * lockData  **参数解释**： 锁住的具体数据行的标识。 **取值范围**： 不涉及。
    * blockerPid  **参数解释**： 阻塞源会话ID。 **取值范围**： 不涉及。
    * blockerState  **参数解释**： 阻塞源事务状态。 **取值范围**： - RUNNING：运行中。 - LOCK WAIT：锁等待。 - ROLLING BACK：回滚中。 - COMMITTING：提交中。
    * blockerAge  **参数解释**： 阻塞源事务持续时间（秒）。 **取值范围**： 不涉及。
    * blockerRowsLocked  **参数解释**： 阻塞源锁定的行数。 **取值范围**： 不涉及。
    * blockerRowsModified  **参数解释**： 阻塞源修改的行数。 **取值范围**： 不涉及。
    * blockerCurrentSql  **参数解释**： 阻塞源当前执行的SQL列表。
    * blockerHost  **参数解释**： 阻塞源主机。 **取值范围**： 不涉及。
    * blockerCommand  **参数解释**： 阻塞源命令。 **取值范围**： 不涉及。
    * blockerThreadId  **参数解释**： 阻塞源线程ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'lockedPid' => 'setLockedPid',
            'lockedSql' => 'setLockedSql',
            'waitSeconds' => 'setWaitSeconds',
            'lockDb' => 'setLockDb',
            'lockTable' => 'setLockTable',
            'lockIndex' => 'setLockIndex',
            'lockMode' => 'setLockMode',
            'lockData' => 'setLockData',
            'blockerPid' => 'setBlockerPid',
            'blockerState' => 'setBlockerState',
            'blockerAge' => 'setBlockerAge',
            'blockerRowsLocked' => 'setBlockerRowsLocked',
            'blockerRowsModified' => 'setBlockerRowsModified',
            'blockerCurrentSql' => 'setBlockerCurrentSql',
            'blockerHost' => 'setBlockerHost',
            'blockerCommand' => 'setBlockerCommand',
            'blockerThreadId' => 'setBlockerThreadId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * lockedPid  **参数解释**： 被锁会话ID。 **取值范围**： 不涉及。
    * lockedSql  **参数解释**： 被锁会话当前执行的SQL。 **取值范围**： 不涉及。
    * waitSeconds  **参数解释**： 等待持续时间（秒）。 **取值范围**： 不涉及。
    * lockDb  **参数解释**： 锁所在数据库。 **取值范围**： 不涉及。
    * lockTable  **参数解释**： 锁所在表。 **取值范围**： 不涉及。
    * lockIndex  **参数解释**： 锁所在索引。 **取值范围**： 不涉及。
    * lockMode  **参数解释**： 锁模式。 **取值范围**： - IX：表级排他锁。 - X,REC_NOT_GAP：排他记录锁。 - X,GAP：间隙锁。 - X：行级排他锁。
    * lockData  **参数解释**： 锁住的具体数据行的标识。 **取值范围**： 不涉及。
    * blockerPid  **参数解释**： 阻塞源会话ID。 **取值范围**： 不涉及。
    * blockerState  **参数解释**： 阻塞源事务状态。 **取值范围**： - RUNNING：运行中。 - LOCK WAIT：锁等待。 - ROLLING BACK：回滚中。 - COMMITTING：提交中。
    * blockerAge  **参数解释**： 阻塞源事务持续时间（秒）。 **取值范围**： 不涉及。
    * blockerRowsLocked  **参数解释**： 阻塞源锁定的行数。 **取值范围**： 不涉及。
    * blockerRowsModified  **参数解释**： 阻塞源修改的行数。 **取值范围**： 不涉及。
    * blockerCurrentSql  **参数解释**： 阻塞源当前执行的SQL列表。
    * blockerHost  **参数解释**： 阻塞源主机。 **取值范围**： 不涉及。
    * blockerCommand  **参数解释**： 阻塞源命令。 **取值范围**： 不涉及。
    * blockerThreadId  **参数解释**： 阻塞源线程ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'lockedPid' => 'getLockedPid',
            'lockedSql' => 'getLockedSql',
            'waitSeconds' => 'getWaitSeconds',
            'lockDb' => 'getLockDb',
            'lockTable' => 'getLockTable',
            'lockIndex' => 'getLockIndex',
            'lockMode' => 'getLockMode',
            'lockData' => 'getLockData',
            'blockerPid' => 'getBlockerPid',
            'blockerState' => 'getBlockerState',
            'blockerAge' => 'getBlockerAge',
            'blockerRowsLocked' => 'getBlockerRowsLocked',
            'blockerRowsModified' => 'getBlockerRowsModified',
            'blockerCurrentSql' => 'getBlockerCurrentSql',
            'blockerHost' => 'getBlockerHost',
            'blockerCommand' => 'getBlockerCommand',
            'blockerThreadId' => 'getBlockerThreadId'
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
        $this->container['lockedPid'] = isset($data['lockedPid']) ? $data['lockedPid'] : null;
        $this->container['lockedSql'] = isset($data['lockedSql']) ? $data['lockedSql'] : null;
        $this->container['waitSeconds'] = isset($data['waitSeconds']) ? $data['waitSeconds'] : null;
        $this->container['lockDb'] = isset($data['lockDb']) ? $data['lockDb'] : null;
        $this->container['lockTable'] = isset($data['lockTable']) ? $data['lockTable'] : null;
        $this->container['lockIndex'] = isset($data['lockIndex']) ? $data['lockIndex'] : null;
        $this->container['lockMode'] = isset($data['lockMode']) ? $data['lockMode'] : null;
        $this->container['lockData'] = isset($data['lockData']) ? $data['lockData'] : null;
        $this->container['blockerPid'] = isset($data['blockerPid']) ? $data['blockerPid'] : null;
        $this->container['blockerState'] = isset($data['blockerState']) ? $data['blockerState'] : null;
        $this->container['blockerAge'] = isset($data['blockerAge']) ? $data['blockerAge'] : null;
        $this->container['blockerRowsLocked'] = isset($data['blockerRowsLocked']) ? $data['blockerRowsLocked'] : null;
        $this->container['blockerRowsModified'] = isset($data['blockerRowsModified']) ? $data['blockerRowsModified'] : null;
        $this->container['blockerCurrentSql'] = isset($data['blockerCurrentSql']) ? $data['blockerCurrentSql'] : null;
        $this->container['blockerHost'] = isset($data['blockerHost']) ? $data['blockerHost'] : null;
        $this->container['blockerCommand'] = isset($data['blockerCommand']) ? $data['blockerCommand'] : null;
        $this->container['blockerThreadId'] = isset($data['blockerThreadId']) ? $data['blockerThreadId'] : null;
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
    * Gets lockedPid
    *  **参数解释**： 被锁会话ID。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getLockedPid()
    {
        return $this->container['lockedPid'];
    }

    /**
    * Sets lockedPid
    *
    * @param int|null $lockedPid **参数解释**： 被锁会话ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLockedPid($lockedPid)
    {
        $this->container['lockedPid'] = $lockedPid;
        return $this;
    }

    /**
    * Gets lockedSql
    *  **参数解释**： 被锁会话当前执行的SQL。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getLockedSql()
    {
        return $this->container['lockedSql'];
    }

    /**
    * Sets lockedSql
    *
    * @param string|null $lockedSql **参数解释**： 被锁会话当前执行的SQL。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLockedSql($lockedSql)
    {
        $this->container['lockedSql'] = $lockedSql;
        return $this;
    }

    /**
    * Gets waitSeconds
    *  **参数解释**： 等待持续时间（秒）。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getWaitSeconds()
    {
        return $this->container['waitSeconds'];
    }

    /**
    * Sets waitSeconds
    *
    * @param int|null $waitSeconds **参数解释**： 等待持续时间（秒）。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setWaitSeconds($waitSeconds)
    {
        $this->container['waitSeconds'] = $waitSeconds;
        return $this;
    }

    /**
    * Gets lockDb
    *  **参数解释**： 锁所在数据库。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getLockDb()
    {
        return $this->container['lockDb'];
    }

    /**
    * Sets lockDb
    *
    * @param string|null $lockDb **参数解释**： 锁所在数据库。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLockDb($lockDb)
    {
        $this->container['lockDb'] = $lockDb;
        return $this;
    }

    /**
    * Gets lockTable
    *  **参数解释**： 锁所在表。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getLockTable()
    {
        return $this->container['lockTable'];
    }

    /**
    * Sets lockTable
    *
    * @param string|null $lockTable **参数解释**： 锁所在表。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLockTable($lockTable)
    {
        $this->container['lockTable'] = $lockTable;
        return $this;
    }

    /**
    * Gets lockIndex
    *  **参数解释**： 锁所在索引。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getLockIndex()
    {
        return $this->container['lockIndex'];
    }

    /**
    * Sets lockIndex
    *
    * @param string|null $lockIndex **参数解释**： 锁所在索引。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLockIndex($lockIndex)
    {
        $this->container['lockIndex'] = $lockIndex;
        return $this;
    }

    /**
    * Gets lockMode
    *  **参数解释**： 锁模式。 **取值范围**： - IX：表级排他锁。 - X,REC_NOT_GAP：排他记录锁。 - X,GAP：间隙锁。 - X：行级排他锁。
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
    * @param string|null $lockMode **参数解释**： 锁模式。 **取值范围**： - IX：表级排他锁。 - X,REC_NOT_GAP：排他记录锁。 - X,GAP：间隙锁。 - X：行级排他锁。
    *
    * @return $this
    */
    public function setLockMode($lockMode)
    {
        $this->container['lockMode'] = $lockMode;
        return $this;
    }

    /**
    * Gets lockData
    *  **参数解释**： 锁住的具体数据行的标识。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getLockData()
    {
        return $this->container['lockData'];
    }

    /**
    * Sets lockData
    *
    * @param string|null $lockData **参数解释**： 锁住的具体数据行的标识。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLockData($lockData)
    {
        $this->container['lockData'] = $lockData;
        return $this;
    }

    /**
    * Gets blockerPid
    *  **参数解释**： 阻塞源会话ID。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getBlockerPid()
    {
        return $this->container['blockerPid'];
    }

    /**
    * Sets blockerPid
    *
    * @param int|null $blockerPid **参数解释**： 阻塞源会话ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBlockerPid($blockerPid)
    {
        $this->container['blockerPid'] = $blockerPid;
        return $this;
    }

    /**
    * Gets blockerState
    *  **参数解释**： 阻塞源事务状态。 **取值范围**： - RUNNING：运行中。 - LOCK WAIT：锁等待。 - ROLLING BACK：回滚中。 - COMMITTING：提交中。
    *
    * @return string|null
    */
    public function getBlockerState()
    {
        return $this->container['blockerState'];
    }

    /**
    * Sets blockerState
    *
    * @param string|null $blockerState **参数解释**： 阻塞源事务状态。 **取值范围**： - RUNNING：运行中。 - LOCK WAIT：锁等待。 - ROLLING BACK：回滚中。 - COMMITTING：提交中。
    *
    * @return $this
    */
    public function setBlockerState($blockerState)
    {
        $this->container['blockerState'] = $blockerState;
        return $this;
    }

    /**
    * Gets blockerAge
    *  **参数解释**： 阻塞源事务持续时间（秒）。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getBlockerAge()
    {
        return $this->container['blockerAge'];
    }

    /**
    * Sets blockerAge
    *
    * @param int|null $blockerAge **参数解释**： 阻塞源事务持续时间（秒）。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBlockerAge($blockerAge)
    {
        $this->container['blockerAge'] = $blockerAge;
        return $this;
    }

    /**
    * Gets blockerRowsLocked
    *  **参数解释**： 阻塞源锁定的行数。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getBlockerRowsLocked()
    {
        return $this->container['blockerRowsLocked'];
    }

    /**
    * Sets blockerRowsLocked
    *
    * @param int|null $blockerRowsLocked **参数解释**： 阻塞源锁定的行数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBlockerRowsLocked($blockerRowsLocked)
    {
        $this->container['blockerRowsLocked'] = $blockerRowsLocked;
        return $this;
    }

    /**
    * Gets blockerRowsModified
    *  **参数解释**： 阻塞源修改的行数。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getBlockerRowsModified()
    {
        return $this->container['blockerRowsModified'];
    }

    /**
    * Sets blockerRowsModified
    *
    * @param int|null $blockerRowsModified **参数解释**： 阻塞源修改的行数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBlockerRowsModified($blockerRowsModified)
    {
        $this->container['blockerRowsModified'] = $blockerRowsModified;
        return $this;
    }

    /**
    * Gets blockerCurrentSql
    *  **参数解释**： 阻塞源当前执行的SQL列表。
    *
    * @return string[]|null
    */
    public function getBlockerCurrentSql()
    {
        return $this->container['blockerCurrentSql'];
    }

    /**
    * Sets blockerCurrentSql
    *
    * @param string[]|null $blockerCurrentSql **参数解释**： 阻塞源当前执行的SQL列表。
    *
    * @return $this
    */
    public function setBlockerCurrentSql($blockerCurrentSql)
    {
        $this->container['blockerCurrentSql'] = $blockerCurrentSql;
        return $this;
    }

    /**
    * Gets blockerHost
    *  **参数解释**： 阻塞源主机。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getBlockerHost()
    {
        return $this->container['blockerHost'];
    }

    /**
    * Sets blockerHost
    *
    * @param string|null $blockerHost **参数解释**： 阻塞源主机。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBlockerHost($blockerHost)
    {
        $this->container['blockerHost'] = $blockerHost;
        return $this;
    }

    /**
    * Gets blockerCommand
    *  **参数解释**： 阻塞源命令。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getBlockerCommand()
    {
        return $this->container['blockerCommand'];
    }

    /**
    * Sets blockerCommand
    *
    * @param string|null $blockerCommand **参数解释**： 阻塞源命令。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBlockerCommand($blockerCommand)
    {
        $this->container['blockerCommand'] = $blockerCommand;
        return $this;
    }

    /**
    * Gets blockerThreadId
    *  **参数解释**： 阻塞源线程ID。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getBlockerThreadId()
    {
        return $this->container['blockerThreadId'];
    }

    /**
    * Sets blockerThreadId
    *
    * @param int|null $blockerThreadId **参数解释**： 阻塞源线程ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBlockerThreadId($blockerThreadId)
    {
        $this->container['blockerThreadId'] = $blockerThreadId;
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

