<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Session implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Session';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sampleTime  采样时间
    * blockedProcessId  阻塞进程ID
    * databaseOid  数据库OID
    * databaseName  数据库名
    * sessionId  会话ID
    * parallelLeaderId  并行会话ID
    * backendUserOid  后端用户OID
    * userName  用户名
    * appName  应用名
    * clientIpAddress  客户端地址
    * clientHostName  客户端名称
    * clientPort  客户端端口
    * sessionStartTime  会话建立时间
    * transactionStartTime  事务启动时间
    * transactionExecutionTime  事务执行时间(s)
    * queryStartTime  查询开始时间
    * stateChangeTime  state改变时间
    * waitEventType  等待事件类型
    * waitEventName  等待事件名称
    * sessionStatus  会话状态
    * backendXid  Backend XID
    * backendXmin  Backend Xmin
    * queryId  Query ID
    * sqlStatement  SQL语句
    * processType  进程类型
    * memoryUsage  内存占比(%)
    * processStatus  进程状态
    * cpuUsage  3秒内平均CPU占用率(%)
    * ioWaitStatus  I/O等待时间(s)
    * diskReadRate  磁盘读速率(MB/s)
    * diskWriteRate  磁盘写速率(MB/s)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sampleTime' => 'string',
            'blockedProcessId' => 'string',
            'databaseOid' => 'int',
            'databaseName' => 'string',
            'sessionId' => 'int',
            'parallelLeaderId' => 'int',
            'backendUserOid' => 'int',
            'userName' => 'string',
            'appName' => 'string',
            'clientIpAddress' => 'string',
            'clientHostName' => 'string',
            'clientPort' => 'int',
            'sessionStartTime' => 'string',
            'transactionStartTime' => 'string',
            'transactionExecutionTime' => 'int',
            'queryStartTime' => 'string',
            'stateChangeTime' => 'string',
            'waitEventType' => 'string',
            'waitEventName' => 'string',
            'sessionStatus' => 'string',
            'backendXid' => 'int',
            'backendXmin' => 'int',
            'queryId' => 'string',
            'sqlStatement' => 'string',
            'processType' => 'string',
            'memoryUsage' => 'float',
            'processStatus' => 'string',
            'cpuUsage' => 'float',
            'ioWaitStatus' => 'float',
            'diskReadRate' => 'float',
            'diskWriteRate' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sampleTime  采样时间
    * blockedProcessId  阻塞进程ID
    * databaseOid  数据库OID
    * databaseName  数据库名
    * sessionId  会话ID
    * parallelLeaderId  并行会话ID
    * backendUserOid  后端用户OID
    * userName  用户名
    * appName  应用名
    * clientIpAddress  客户端地址
    * clientHostName  客户端名称
    * clientPort  客户端端口
    * sessionStartTime  会话建立时间
    * transactionStartTime  事务启动时间
    * transactionExecutionTime  事务执行时间(s)
    * queryStartTime  查询开始时间
    * stateChangeTime  state改变时间
    * waitEventType  等待事件类型
    * waitEventName  等待事件名称
    * sessionStatus  会话状态
    * backendXid  Backend XID
    * backendXmin  Backend Xmin
    * queryId  Query ID
    * sqlStatement  SQL语句
    * processType  进程类型
    * memoryUsage  内存占比(%)
    * processStatus  进程状态
    * cpuUsage  3秒内平均CPU占用率(%)
    * ioWaitStatus  I/O等待时间(s)
    * diskReadRate  磁盘读速率(MB/s)
    * diskWriteRate  磁盘写速率(MB/s)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sampleTime' => null,
        'blockedProcessId' => null,
        'databaseOid' => 'int32',
        'databaseName' => null,
        'sessionId' => 'int32',
        'parallelLeaderId' => 'int32',
        'backendUserOid' => 'int32',
        'userName' => null,
        'appName' => null,
        'clientIpAddress' => null,
        'clientHostName' => null,
        'clientPort' => 'int32',
        'sessionStartTime' => null,
        'transactionStartTime' => null,
        'transactionExecutionTime' => 'int32',
        'queryStartTime' => null,
        'stateChangeTime' => null,
        'waitEventType' => null,
        'waitEventName' => null,
        'sessionStatus' => null,
        'backendXid' => 'int32',
        'backendXmin' => 'int32',
        'queryId' => null,
        'sqlStatement' => null,
        'processType' => null,
        'memoryUsage' => 'float',
        'processStatus' => null,
        'cpuUsage' => 'float',
        'ioWaitStatus' => 'float',
        'diskReadRate' => 'float',
        'diskWriteRate' => 'float'
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
    * sampleTime  采样时间
    * blockedProcessId  阻塞进程ID
    * databaseOid  数据库OID
    * databaseName  数据库名
    * sessionId  会话ID
    * parallelLeaderId  并行会话ID
    * backendUserOid  后端用户OID
    * userName  用户名
    * appName  应用名
    * clientIpAddress  客户端地址
    * clientHostName  客户端名称
    * clientPort  客户端端口
    * sessionStartTime  会话建立时间
    * transactionStartTime  事务启动时间
    * transactionExecutionTime  事务执行时间(s)
    * queryStartTime  查询开始时间
    * stateChangeTime  state改变时间
    * waitEventType  等待事件类型
    * waitEventName  等待事件名称
    * sessionStatus  会话状态
    * backendXid  Backend XID
    * backendXmin  Backend Xmin
    * queryId  Query ID
    * sqlStatement  SQL语句
    * processType  进程类型
    * memoryUsage  内存占比(%)
    * processStatus  进程状态
    * cpuUsage  3秒内平均CPU占用率(%)
    * ioWaitStatus  I/O等待时间(s)
    * diskReadRate  磁盘读速率(MB/s)
    * diskWriteRate  磁盘写速率(MB/s)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sampleTime' => 'sample_time',
            'blockedProcessId' => 'blocked_process_id',
            'databaseOid' => 'database_oid',
            'databaseName' => 'database_name',
            'sessionId' => 'session_id',
            'parallelLeaderId' => 'parallel_leader_id',
            'backendUserOid' => 'backend_user_oid',
            'userName' => 'user_name',
            'appName' => 'app_name',
            'clientIpAddress' => 'client_ip_address',
            'clientHostName' => 'client_host_name',
            'clientPort' => 'client_port',
            'sessionStartTime' => 'session_start_time',
            'transactionStartTime' => 'transaction_start_time',
            'transactionExecutionTime' => 'transaction_execution_time',
            'queryStartTime' => 'query_start_time',
            'stateChangeTime' => 'state_change_time',
            'waitEventType' => 'wait_event_type',
            'waitEventName' => 'wait_event_name',
            'sessionStatus' => 'session_status',
            'backendXid' => 'backend_xid',
            'backendXmin' => 'backend_xmin',
            'queryId' => 'query_id',
            'sqlStatement' => 'sql_statement',
            'processType' => 'process_type',
            'memoryUsage' => 'memory_usage',
            'processStatus' => 'process_status',
            'cpuUsage' => 'cpu_usage',
            'ioWaitStatus' => 'io_wait_status',
            'diskReadRate' => 'disk_read_rate',
            'diskWriteRate' => 'disk_write_rate'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sampleTime  采样时间
    * blockedProcessId  阻塞进程ID
    * databaseOid  数据库OID
    * databaseName  数据库名
    * sessionId  会话ID
    * parallelLeaderId  并行会话ID
    * backendUserOid  后端用户OID
    * userName  用户名
    * appName  应用名
    * clientIpAddress  客户端地址
    * clientHostName  客户端名称
    * clientPort  客户端端口
    * sessionStartTime  会话建立时间
    * transactionStartTime  事务启动时间
    * transactionExecutionTime  事务执行时间(s)
    * queryStartTime  查询开始时间
    * stateChangeTime  state改变时间
    * waitEventType  等待事件类型
    * waitEventName  等待事件名称
    * sessionStatus  会话状态
    * backendXid  Backend XID
    * backendXmin  Backend Xmin
    * queryId  Query ID
    * sqlStatement  SQL语句
    * processType  进程类型
    * memoryUsage  内存占比(%)
    * processStatus  进程状态
    * cpuUsage  3秒内平均CPU占用率(%)
    * ioWaitStatus  I/O等待时间(s)
    * diskReadRate  磁盘读速率(MB/s)
    * diskWriteRate  磁盘写速率(MB/s)
    *
    * @var string[]
    */
    protected static $setters = [
            'sampleTime' => 'setSampleTime',
            'blockedProcessId' => 'setBlockedProcessId',
            'databaseOid' => 'setDatabaseOid',
            'databaseName' => 'setDatabaseName',
            'sessionId' => 'setSessionId',
            'parallelLeaderId' => 'setParallelLeaderId',
            'backendUserOid' => 'setBackendUserOid',
            'userName' => 'setUserName',
            'appName' => 'setAppName',
            'clientIpAddress' => 'setClientIpAddress',
            'clientHostName' => 'setClientHostName',
            'clientPort' => 'setClientPort',
            'sessionStartTime' => 'setSessionStartTime',
            'transactionStartTime' => 'setTransactionStartTime',
            'transactionExecutionTime' => 'setTransactionExecutionTime',
            'queryStartTime' => 'setQueryStartTime',
            'stateChangeTime' => 'setStateChangeTime',
            'waitEventType' => 'setWaitEventType',
            'waitEventName' => 'setWaitEventName',
            'sessionStatus' => 'setSessionStatus',
            'backendXid' => 'setBackendXid',
            'backendXmin' => 'setBackendXmin',
            'queryId' => 'setQueryId',
            'sqlStatement' => 'setSqlStatement',
            'processType' => 'setProcessType',
            'memoryUsage' => 'setMemoryUsage',
            'processStatus' => 'setProcessStatus',
            'cpuUsage' => 'setCpuUsage',
            'ioWaitStatus' => 'setIoWaitStatus',
            'diskReadRate' => 'setDiskReadRate',
            'diskWriteRate' => 'setDiskWriteRate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sampleTime  采样时间
    * blockedProcessId  阻塞进程ID
    * databaseOid  数据库OID
    * databaseName  数据库名
    * sessionId  会话ID
    * parallelLeaderId  并行会话ID
    * backendUserOid  后端用户OID
    * userName  用户名
    * appName  应用名
    * clientIpAddress  客户端地址
    * clientHostName  客户端名称
    * clientPort  客户端端口
    * sessionStartTime  会话建立时间
    * transactionStartTime  事务启动时间
    * transactionExecutionTime  事务执行时间(s)
    * queryStartTime  查询开始时间
    * stateChangeTime  state改变时间
    * waitEventType  等待事件类型
    * waitEventName  等待事件名称
    * sessionStatus  会话状态
    * backendXid  Backend XID
    * backendXmin  Backend Xmin
    * queryId  Query ID
    * sqlStatement  SQL语句
    * processType  进程类型
    * memoryUsage  内存占比(%)
    * processStatus  进程状态
    * cpuUsage  3秒内平均CPU占用率(%)
    * ioWaitStatus  I/O等待时间(s)
    * diskReadRate  磁盘读速率(MB/s)
    * diskWriteRate  磁盘写速率(MB/s)
    *
    * @var string[]
    */
    protected static $getters = [
            'sampleTime' => 'getSampleTime',
            'blockedProcessId' => 'getBlockedProcessId',
            'databaseOid' => 'getDatabaseOid',
            'databaseName' => 'getDatabaseName',
            'sessionId' => 'getSessionId',
            'parallelLeaderId' => 'getParallelLeaderId',
            'backendUserOid' => 'getBackendUserOid',
            'userName' => 'getUserName',
            'appName' => 'getAppName',
            'clientIpAddress' => 'getClientIpAddress',
            'clientHostName' => 'getClientHostName',
            'clientPort' => 'getClientPort',
            'sessionStartTime' => 'getSessionStartTime',
            'transactionStartTime' => 'getTransactionStartTime',
            'transactionExecutionTime' => 'getTransactionExecutionTime',
            'queryStartTime' => 'getQueryStartTime',
            'stateChangeTime' => 'getStateChangeTime',
            'waitEventType' => 'getWaitEventType',
            'waitEventName' => 'getWaitEventName',
            'sessionStatus' => 'getSessionStatus',
            'backendXid' => 'getBackendXid',
            'backendXmin' => 'getBackendXmin',
            'queryId' => 'getQueryId',
            'sqlStatement' => 'getSqlStatement',
            'processType' => 'getProcessType',
            'memoryUsage' => 'getMemoryUsage',
            'processStatus' => 'getProcessStatus',
            'cpuUsage' => 'getCpuUsage',
            'ioWaitStatus' => 'getIoWaitStatus',
            'diskReadRate' => 'getDiskReadRate',
            'diskWriteRate' => 'getDiskWriteRate'
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
        $this->container['sampleTime'] = isset($data['sampleTime']) ? $data['sampleTime'] : null;
        $this->container['blockedProcessId'] = isset($data['blockedProcessId']) ? $data['blockedProcessId'] : null;
        $this->container['databaseOid'] = isset($data['databaseOid']) ? $data['databaseOid'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['sessionId'] = isset($data['sessionId']) ? $data['sessionId'] : null;
        $this->container['parallelLeaderId'] = isset($data['parallelLeaderId']) ? $data['parallelLeaderId'] : null;
        $this->container['backendUserOid'] = isset($data['backendUserOid']) ? $data['backendUserOid'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['clientIpAddress'] = isset($data['clientIpAddress']) ? $data['clientIpAddress'] : null;
        $this->container['clientHostName'] = isset($data['clientHostName']) ? $data['clientHostName'] : null;
        $this->container['clientPort'] = isset($data['clientPort']) ? $data['clientPort'] : null;
        $this->container['sessionStartTime'] = isset($data['sessionStartTime']) ? $data['sessionStartTime'] : null;
        $this->container['transactionStartTime'] = isset($data['transactionStartTime']) ? $data['transactionStartTime'] : null;
        $this->container['transactionExecutionTime'] = isset($data['transactionExecutionTime']) ? $data['transactionExecutionTime'] : null;
        $this->container['queryStartTime'] = isset($data['queryStartTime']) ? $data['queryStartTime'] : null;
        $this->container['stateChangeTime'] = isset($data['stateChangeTime']) ? $data['stateChangeTime'] : null;
        $this->container['waitEventType'] = isset($data['waitEventType']) ? $data['waitEventType'] : null;
        $this->container['waitEventName'] = isset($data['waitEventName']) ? $data['waitEventName'] : null;
        $this->container['sessionStatus'] = isset($data['sessionStatus']) ? $data['sessionStatus'] : null;
        $this->container['backendXid'] = isset($data['backendXid']) ? $data['backendXid'] : null;
        $this->container['backendXmin'] = isset($data['backendXmin']) ? $data['backendXmin'] : null;
        $this->container['queryId'] = isset($data['queryId']) ? $data['queryId'] : null;
        $this->container['sqlStatement'] = isset($data['sqlStatement']) ? $data['sqlStatement'] : null;
        $this->container['processType'] = isset($data['processType']) ? $data['processType'] : null;
        $this->container['memoryUsage'] = isset($data['memoryUsage']) ? $data['memoryUsage'] : null;
        $this->container['processStatus'] = isset($data['processStatus']) ? $data['processStatus'] : null;
        $this->container['cpuUsage'] = isset($data['cpuUsage']) ? $data['cpuUsage'] : null;
        $this->container['ioWaitStatus'] = isset($data['ioWaitStatus']) ? $data['ioWaitStatus'] : null;
        $this->container['diskReadRate'] = isset($data['diskReadRate']) ? $data['diskReadRate'] : null;
        $this->container['diskWriteRate'] = isset($data['diskWriteRate']) ? $data['diskWriteRate'] : null;
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
    * Gets sampleTime
    *  采样时间
    *
    * @return string|null
    */
    public function getSampleTime()
    {
        return $this->container['sampleTime'];
    }

    /**
    * Sets sampleTime
    *
    * @param string|null $sampleTime 采样时间
    *
    * @return $this
    */
    public function setSampleTime($sampleTime)
    {
        $this->container['sampleTime'] = $sampleTime;
        return $this;
    }

    /**
    * Gets blockedProcessId
    *  阻塞进程ID
    *
    * @return string|null
    */
    public function getBlockedProcessId()
    {
        return $this->container['blockedProcessId'];
    }

    /**
    * Sets blockedProcessId
    *
    * @param string|null $blockedProcessId 阻塞进程ID
    *
    * @return $this
    */
    public function setBlockedProcessId($blockedProcessId)
    {
        $this->container['blockedProcessId'] = $blockedProcessId;
        return $this;
    }

    /**
    * Gets databaseOid
    *  数据库OID
    *
    * @return int|null
    */
    public function getDatabaseOid()
    {
        return $this->container['databaseOid'];
    }

    /**
    * Sets databaseOid
    *
    * @param int|null $databaseOid 数据库OID
    *
    * @return $this
    */
    public function setDatabaseOid($databaseOid)
    {
        $this->container['databaseOid'] = $databaseOid;
        return $this;
    }

    /**
    * Gets databaseName
    *  数据库名
    *
    * @return string|null
    */
    public function getDatabaseName()
    {
        return $this->container['databaseName'];
    }

    /**
    * Sets databaseName
    *
    * @param string|null $databaseName 数据库名
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets sessionId
    *  会话ID
    *
    * @return int|null
    */
    public function getSessionId()
    {
        return $this->container['sessionId'];
    }

    /**
    * Sets sessionId
    *
    * @param int|null $sessionId 会话ID
    *
    * @return $this
    */
    public function setSessionId($sessionId)
    {
        $this->container['sessionId'] = $sessionId;
        return $this;
    }

    /**
    * Gets parallelLeaderId
    *  并行会话ID
    *
    * @return int|null
    */
    public function getParallelLeaderId()
    {
        return $this->container['parallelLeaderId'];
    }

    /**
    * Sets parallelLeaderId
    *
    * @param int|null $parallelLeaderId 并行会话ID
    *
    * @return $this
    */
    public function setParallelLeaderId($parallelLeaderId)
    {
        $this->container['parallelLeaderId'] = $parallelLeaderId;
        return $this;
    }

    /**
    * Gets backendUserOid
    *  后端用户OID
    *
    * @return int|null
    */
    public function getBackendUserOid()
    {
        return $this->container['backendUserOid'];
    }

    /**
    * Sets backendUserOid
    *
    * @param int|null $backendUserOid 后端用户OID
    *
    * @return $this
    */
    public function setBackendUserOid($backendUserOid)
    {
        $this->container['backendUserOid'] = $backendUserOid;
        return $this;
    }

    /**
    * Gets userName
    *  用户名
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 用户名
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets appName
    *  应用名
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName 应用名
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets clientIpAddress
    *  客户端地址
    *
    * @return string|null
    */
    public function getClientIpAddress()
    {
        return $this->container['clientIpAddress'];
    }

    /**
    * Sets clientIpAddress
    *
    * @param string|null $clientIpAddress 客户端地址
    *
    * @return $this
    */
    public function setClientIpAddress($clientIpAddress)
    {
        $this->container['clientIpAddress'] = $clientIpAddress;
        return $this;
    }

    /**
    * Gets clientHostName
    *  客户端名称
    *
    * @return string|null
    */
    public function getClientHostName()
    {
        return $this->container['clientHostName'];
    }

    /**
    * Sets clientHostName
    *
    * @param string|null $clientHostName 客户端名称
    *
    * @return $this
    */
    public function setClientHostName($clientHostName)
    {
        $this->container['clientHostName'] = $clientHostName;
        return $this;
    }

    /**
    * Gets clientPort
    *  客户端端口
    *
    * @return int|null
    */
    public function getClientPort()
    {
        return $this->container['clientPort'];
    }

    /**
    * Sets clientPort
    *
    * @param int|null $clientPort 客户端端口
    *
    * @return $this
    */
    public function setClientPort($clientPort)
    {
        $this->container['clientPort'] = $clientPort;
        return $this;
    }

    /**
    * Gets sessionStartTime
    *  会话建立时间
    *
    * @return string|null
    */
    public function getSessionStartTime()
    {
        return $this->container['sessionStartTime'];
    }

    /**
    * Sets sessionStartTime
    *
    * @param string|null $sessionStartTime 会话建立时间
    *
    * @return $this
    */
    public function setSessionStartTime($sessionStartTime)
    {
        $this->container['sessionStartTime'] = $sessionStartTime;
        return $this;
    }

    /**
    * Gets transactionStartTime
    *  事务启动时间
    *
    * @return string|null
    */
    public function getTransactionStartTime()
    {
        return $this->container['transactionStartTime'];
    }

    /**
    * Sets transactionStartTime
    *
    * @param string|null $transactionStartTime 事务启动时间
    *
    * @return $this
    */
    public function setTransactionStartTime($transactionStartTime)
    {
        $this->container['transactionStartTime'] = $transactionStartTime;
        return $this;
    }

    /**
    * Gets transactionExecutionTime
    *  事务执行时间(s)
    *
    * @return int|null
    */
    public function getTransactionExecutionTime()
    {
        return $this->container['transactionExecutionTime'];
    }

    /**
    * Sets transactionExecutionTime
    *
    * @param int|null $transactionExecutionTime 事务执行时间(s)
    *
    * @return $this
    */
    public function setTransactionExecutionTime($transactionExecutionTime)
    {
        $this->container['transactionExecutionTime'] = $transactionExecutionTime;
        return $this;
    }

    /**
    * Gets queryStartTime
    *  查询开始时间
    *
    * @return string|null
    */
    public function getQueryStartTime()
    {
        return $this->container['queryStartTime'];
    }

    /**
    * Sets queryStartTime
    *
    * @param string|null $queryStartTime 查询开始时间
    *
    * @return $this
    */
    public function setQueryStartTime($queryStartTime)
    {
        $this->container['queryStartTime'] = $queryStartTime;
        return $this;
    }

    /**
    * Gets stateChangeTime
    *  state改变时间
    *
    * @return string|null
    */
    public function getStateChangeTime()
    {
        return $this->container['stateChangeTime'];
    }

    /**
    * Sets stateChangeTime
    *
    * @param string|null $stateChangeTime state改变时间
    *
    * @return $this
    */
    public function setStateChangeTime($stateChangeTime)
    {
        $this->container['stateChangeTime'] = $stateChangeTime;
        return $this;
    }

    /**
    * Gets waitEventType
    *  等待事件类型
    *
    * @return string|null
    */
    public function getWaitEventType()
    {
        return $this->container['waitEventType'];
    }

    /**
    * Sets waitEventType
    *
    * @param string|null $waitEventType 等待事件类型
    *
    * @return $this
    */
    public function setWaitEventType($waitEventType)
    {
        $this->container['waitEventType'] = $waitEventType;
        return $this;
    }

    /**
    * Gets waitEventName
    *  等待事件名称
    *
    * @return string|null
    */
    public function getWaitEventName()
    {
        return $this->container['waitEventName'];
    }

    /**
    * Sets waitEventName
    *
    * @param string|null $waitEventName 等待事件名称
    *
    * @return $this
    */
    public function setWaitEventName($waitEventName)
    {
        $this->container['waitEventName'] = $waitEventName;
        return $this;
    }

    /**
    * Gets sessionStatus
    *  会话状态
    *
    * @return string|null
    */
    public function getSessionStatus()
    {
        return $this->container['sessionStatus'];
    }

    /**
    * Sets sessionStatus
    *
    * @param string|null $sessionStatus 会话状态
    *
    * @return $this
    */
    public function setSessionStatus($sessionStatus)
    {
        $this->container['sessionStatus'] = $sessionStatus;
        return $this;
    }

    /**
    * Gets backendXid
    *  Backend XID
    *
    * @return int|null
    */
    public function getBackendXid()
    {
        return $this->container['backendXid'];
    }

    /**
    * Sets backendXid
    *
    * @param int|null $backendXid Backend XID
    *
    * @return $this
    */
    public function setBackendXid($backendXid)
    {
        $this->container['backendXid'] = $backendXid;
        return $this;
    }

    /**
    * Gets backendXmin
    *  Backend Xmin
    *
    * @return int|null
    */
    public function getBackendXmin()
    {
        return $this->container['backendXmin'];
    }

    /**
    * Sets backendXmin
    *
    * @param int|null $backendXmin Backend Xmin
    *
    * @return $this
    */
    public function setBackendXmin($backendXmin)
    {
        $this->container['backendXmin'] = $backendXmin;
        return $this;
    }

    /**
    * Gets queryId
    *  Query ID
    *
    * @return string|null
    */
    public function getQueryId()
    {
        return $this->container['queryId'];
    }

    /**
    * Sets queryId
    *
    * @param string|null $queryId Query ID
    *
    * @return $this
    */
    public function setQueryId($queryId)
    {
        $this->container['queryId'] = $queryId;
        return $this;
    }

    /**
    * Gets sqlStatement
    *  SQL语句
    *
    * @return string|null
    */
    public function getSqlStatement()
    {
        return $this->container['sqlStatement'];
    }

    /**
    * Sets sqlStatement
    *
    * @param string|null $sqlStatement SQL语句
    *
    * @return $this
    */
    public function setSqlStatement($sqlStatement)
    {
        $this->container['sqlStatement'] = $sqlStatement;
        return $this;
    }

    /**
    * Gets processType
    *  进程类型
    *
    * @return string|null
    */
    public function getProcessType()
    {
        return $this->container['processType'];
    }

    /**
    * Sets processType
    *
    * @param string|null $processType 进程类型
    *
    * @return $this
    */
    public function setProcessType($processType)
    {
        $this->container['processType'] = $processType;
        return $this;
    }

    /**
    * Gets memoryUsage
    *  内存占比(%)
    *
    * @return float|null
    */
    public function getMemoryUsage()
    {
        return $this->container['memoryUsage'];
    }

    /**
    * Sets memoryUsage
    *
    * @param float|null $memoryUsage 内存占比(%)
    *
    * @return $this
    */
    public function setMemoryUsage($memoryUsage)
    {
        $this->container['memoryUsage'] = $memoryUsage;
        return $this;
    }

    /**
    * Gets processStatus
    *  进程状态
    *
    * @return string|null
    */
    public function getProcessStatus()
    {
        return $this->container['processStatus'];
    }

    /**
    * Sets processStatus
    *
    * @param string|null $processStatus 进程状态
    *
    * @return $this
    */
    public function setProcessStatus($processStatus)
    {
        $this->container['processStatus'] = $processStatus;
        return $this;
    }

    /**
    * Gets cpuUsage
    *  3秒内平均CPU占用率(%)
    *
    * @return float|null
    */
    public function getCpuUsage()
    {
        return $this->container['cpuUsage'];
    }

    /**
    * Sets cpuUsage
    *
    * @param float|null $cpuUsage 3秒内平均CPU占用率(%)
    *
    * @return $this
    */
    public function setCpuUsage($cpuUsage)
    {
        $this->container['cpuUsage'] = $cpuUsage;
        return $this;
    }

    /**
    * Gets ioWaitStatus
    *  I/O等待时间(s)
    *
    * @return float|null
    */
    public function getIoWaitStatus()
    {
        return $this->container['ioWaitStatus'];
    }

    /**
    * Sets ioWaitStatus
    *
    * @param float|null $ioWaitStatus I/O等待时间(s)
    *
    * @return $this
    */
    public function setIoWaitStatus($ioWaitStatus)
    {
        $this->container['ioWaitStatus'] = $ioWaitStatus;
        return $this;
    }

    /**
    * Gets diskReadRate
    *  磁盘读速率(MB/s)
    *
    * @return float|null
    */
    public function getDiskReadRate()
    {
        return $this->container['diskReadRate'];
    }

    /**
    * Sets diskReadRate
    *
    * @param float|null $diskReadRate 磁盘读速率(MB/s)
    *
    * @return $this
    */
    public function setDiskReadRate($diskReadRate)
    {
        $this->container['diskReadRate'] = $diskReadRate;
        return $this;
    }

    /**
    * Gets diskWriteRate
    *  磁盘写速率(MB/s)
    *
    * @return float|null
    */
    public function getDiskWriteRate()
    {
        return $this->container['diskWriteRate'];
    }

    /**
    * Sets diskWriteRate
    *
    * @param float|null $diskWriteRate 磁盘写速率(MB/s)
    *
    * @return $this
    */
    public function setDiskWriteRate($diskWriteRate)
    {
        $this->container['diskWriteRate'] = $diskWriteRate;
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

