<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDeadLockAnalysisResultRespSqlList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDeadLockAnalysisResultResp_sql_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sql  SQL语句
    * occurrenceTime  发生时间
    * queryTime  执行耗时毫秒
    * transactionId  事务ID
    * sqlTemplateId  模板ID
    * nodeId  节点ID
    * dbUser  用户名
    * database  数据库
    * client  客户端IP
    * sqlType  SQL类型
    * status  执行状态
    * errorNo  错误码
    * rowsAffected  更新行数
    * rowsSent  返回行数
    * lockTime  锁等待时间毫秒
    * rowsExamined  扫描行数
    * sessionId  线程ID
    * cpuTime  CPU耗时(us)
    * sendBytes  网络发送字节数
    * queryTables  查询中所有的表名
    * innodbIoReadBytes  物理I/O读字节数
    * innodbIoRead  物理I/O读次数
    * innodbIoReadWait  物理I/O读取等待耗时(ms)
    * innodbLockWait  物理I/O读取等待耗时(ms)
    * innodbQueueWait  行锁等待耗时(ms)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sql' => 'string',
            'occurrenceTime' => 'int',
            'queryTime' => 'int',
            'transactionId' => 'string',
            'sqlTemplateId' => 'string',
            'nodeId' => 'string',
            'dbUser' => 'string',
            'database' => 'string',
            'client' => 'string',
            'sqlType' => 'string',
            'status' => 'int',
            'errorNo' => 'int',
            'rowsAffected' => 'int',
            'rowsSent' => 'int',
            'lockTime' => 'int',
            'rowsExamined' => 'int',
            'sessionId' => 'string',
            'cpuTime' => 'int',
            'sendBytes' => 'int',
            'queryTables' => 'string',
            'innodbIoReadBytes' => 'int',
            'innodbIoRead' => 'int',
            'innodbIoReadWait' => 'int',
            'innodbLockWait' => 'int',
            'innodbQueueWait' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sql  SQL语句
    * occurrenceTime  发生时间
    * queryTime  执行耗时毫秒
    * transactionId  事务ID
    * sqlTemplateId  模板ID
    * nodeId  节点ID
    * dbUser  用户名
    * database  数据库
    * client  客户端IP
    * sqlType  SQL类型
    * status  执行状态
    * errorNo  错误码
    * rowsAffected  更新行数
    * rowsSent  返回行数
    * lockTime  锁等待时间毫秒
    * rowsExamined  扫描行数
    * sessionId  线程ID
    * cpuTime  CPU耗时(us)
    * sendBytes  网络发送字节数
    * queryTables  查询中所有的表名
    * innodbIoReadBytes  物理I/O读字节数
    * innodbIoRead  物理I/O读次数
    * innodbIoReadWait  物理I/O读取等待耗时(ms)
    * innodbLockWait  物理I/O读取等待耗时(ms)
    * innodbQueueWait  行锁等待耗时(ms)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sql' => null,
        'occurrenceTime' => 'int64',
        'queryTime' => 'int64',
        'transactionId' => null,
        'sqlTemplateId' => null,
        'nodeId' => null,
        'dbUser' => null,
        'database' => null,
        'client' => null,
        'sqlType' => null,
        'status' => 'int64',
        'errorNo' => 'int64',
        'rowsAffected' => 'int64',
        'rowsSent' => 'int64',
        'lockTime' => 'int64',
        'rowsExamined' => 'int64',
        'sessionId' => null,
        'cpuTime' => 'int64',
        'sendBytes' => 'int64',
        'queryTables' => null,
        'innodbIoReadBytes' => 'int64',
        'innodbIoRead' => 'int64',
        'innodbIoReadWait' => 'int64',
        'innodbLockWait' => 'int64',
        'innodbQueueWait' => 'int64'
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
    * sql  SQL语句
    * occurrenceTime  发生时间
    * queryTime  执行耗时毫秒
    * transactionId  事务ID
    * sqlTemplateId  模板ID
    * nodeId  节点ID
    * dbUser  用户名
    * database  数据库
    * client  客户端IP
    * sqlType  SQL类型
    * status  执行状态
    * errorNo  错误码
    * rowsAffected  更新行数
    * rowsSent  返回行数
    * lockTime  锁等待时间毫秒
    * rowsExamined  扫描行数
    * sessionId  线程ID
    * cpuTime  CPU耗时(us)
    * sendBytes  网络发送字节数
    * queryTables  查询中所有的表名
    * innodbIoReadBytes  物理I/O读字节数
    * innodbIoRead  物理I/O读次数
    * innodbIoReadWait  物理I/O读取等待耗时(ms)
    * innodbLockWait  物理I/O读取等待耗时(ms)
    * innodbQueueWait  行锁等待耗时(ms)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sql' => 'sql',
            'occurrenceTime' => 'occurrence_time',
            'queryTime' => 'query_time',
            'transactionId' => 'transaction_id',
            'sqlTemplateId' => 'sql_template_id',
            'nodeId' => 'node_id',
            'dbUser' => 'db_user',
            'database' => 'database',
            'client' => 'client',
            'sqlType' => 'sql_type',
            'status' => 'status',
            'errorNo' => 'error_no',
            'rowsAffected' => 'rows_affected',
            'rowsSent' => 'rows_sent',
            'lockTime' => 'lock_time',
            'rowsExamined' => 'rows_examined',
            'sessionId' => 'session_id',
            'cpuTime' => 'cpu_time',
            'sendBytes' => 'send_bytes',
            'queryTables' => 'query_tables',
            'innodbIoReadBytes' => 'innodb_io_read_bytes',
            'innodbIoRead' => 'innodb_io_read',
            'innodbIoReadWait' => 'innodb_io_read_wait',
            'innodbLockWait' => 'innodb_lock_wait',
            'innodbQueueWait' => 'innodb_queue_wait'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sql  SQL语句
    * occurrenceTime  发生时间
    * queryTime  执行耗时毫秒
    * transactionId  事务ID
    * sqlTemplateId  模板ID
    * nodeId  节点ID
    * dbUser  用户名
    * database  数据库
    * client  客户端IP
    * sqlType  SQL类型
    * status  执行状态
    * errorNo  错误码
    * rowsAffected  更新行数
    * rowsSent  返回行数
    * lockTime  锁等待时间毫秒
    * rowsExamined  扫描行数
    * sessionId  线程ID
    * cpuTime  CPU耗时(us)
    * sendBytes  网络发送字节数
    * queryTables  查询中所有的表名
    * innodbIoReadBytes  物理I/O读字节数
    * innodbIoRead  物理I/O读次数
    * innodbIoReadWait  物理I/O读取等待耗时(ms)
    * innodbLockWait  物理I/O读取等待耗时(ms)
    * innodbQueueWait  行锁等待耗时(ms)
    *
    * @var string[]
    */
    protected static $setters = [
            'sql' => 'setSql',
            'occurrenceTime' => 'setOccurrenceTime',
            'queryTime' => 'setQueryTime',
            'transactionId' => 'setTransactionId',
            'sqlTemplateId' => 'setSqlTemplateId',
            'nodeId' => 'setNodeId',
            'dbUser' => 'setDbUser',
            'database' => 'setDatabase',
            'client' => 'setClient',
            'sqlType' => 'setSqlType',
            'status' => 'setStatus',
            'errorNo' => 'setErrorNo',
            'rowsAffected' => 'setRowsAffected',
            'rowsSent' => 'setRowsSent',
            'lockTime' => 'setLockTime',
            'rowsExamined' => 'setRowsExamined',
            'sessionId' => 'setSessionId',
            'cpuTime' => 'setCpuTime',
            'sendBytes' => 'setSendBytes',
            'queryTables' => 'setQueryTables',
            'innodbIoReadBytes' => 'setInnodbIoReadBytes',
            'innodbIoRead' => 'setInnodbIoRead',
            'innodbIoReadWait' => 'setInnodbIoReadWait',
            'innodbLockWait' => 'setInnodbLockWait',
            'innodbQueueWait' => 'setInnodbQueueWait'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sql  SQL语句
    * occurrenceTime  发生时间
    * queryTime  执行耗时毫秒
    * transactionId  事务ID
    * sqlTemplateId  模板ID
    * nodeId  节点ID
    * dbUser  用户名
    * database  数据库
    * client  客户端IP
    * sqlType  SQL类型
    * status  执行状态
    * errorNo  错误码
    * rowsAffected  更新行数
    * rowsSent  返回行数
    * lockTime  锁等待时间毫秒
    * rowsExamined  扫描行数
    * sessionId  线程ID
    * cpuTime  CPU耗时(us)
    * sendBytes  网络发送字节数
    * queryTables  查询中所有的表名
    * innodbIoReadBytes  物理I/O读字节数
    * innodbIoRead  物理I/O读次数
    * innodbIoReadWait  物理I/O读取等待耗时(ms)
    * innodbLockWait  物理I/O读取等待耗时(ms)
    * innodbQueueWait  行锁等待耗时(ms)
    *
    * @var string[]
    */
    protected static $getters = [
            'sql' => 'getSql',
            'occurrenceTime' => 'getOccurrenceTime',
            'queryTime' => 'getQueryTime',
            'transactionId' => 'getTransactionId',
            'sqlTemplateId' => 'getSqlTemplateId',
            'nodeId' => 'getNodeId',
            'dbUser' => 'getDbUser',
            'database' => 'getDatabase',
            'client' => 'getClient',
            'sqlType' => 'getSqlType',
            'status' => 'getStatus',
            'errorNo' => 'getErrorNo',
            'rowsAffected' => 'getRowsAffected',
            'rowsSent' => 'getRowsSent',
            'lockTime' => 'getLockTime',
            'rowsExamined' => 'getRowsExamined',
            'sessionId' => 'getSessionId',
            'cpuTime' => 'getCpuTime',
            'sendBytes' => 'getSendBytes',
            'queryTables' => 'getQueryTables',
            'innodbIoReadBytes' => 'getInnodbIoReadBytes',
            'innodbIoRead' => 'getInnodbIoRead',
            'innodbIoReadWait' => 'getInnodbIoReadWait',
            'innodbLockWait' => 'getInnodbLockWait',
            'innodbQueueWait' => 'getInnodbQueueWait'
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
        $this->container['occurrenceTime'] = isset($data['occurrenceTime']) ? $data['occurrenceTime'] : null;
        $this->container['queryTime'] = isset($data['queryTime']) ? $data['queryTime'] : null;
        $this->container['transactionId'] = isset($data['transactionId']) ? $data['transactionId'] : null;
        $this->container['sqlTemplateId'] = isset($data['sqlTemplateId']) ? $data['sqlTemplateId'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['dbUser'] = isset($data['dbUser']) ? $data['dbUser'] : null;
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['client'] = isset($data['client']) ? $data['client'] : null;
        $this->container['sqlType'] = isset($data['sqlType']) ? $data['sqlType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['errorNo'] = isset($data['errorNo']) ? $data['errorNo'] : null;
        $this->container['rowsAffected'] = isset($data['rowsAffected']) ? $data['rowsAffected'] : null;
        $this->container['rowsSent'] = isset($data['rowsSent']) ? $data['rowsSent'] : null;
        $this->container['lockTime'] = isset($data['lockTime']) ? $data['lockTime'] : null;
        $this->container['rowsExamined'] = isset($data['rowsExamined']) ? $data['rowsExamined'] : null;
        $this->container['sessionId'] = isset($data['sessionId']) ? $data['sessionId'] : null;
        $this->container['cpuTime'] = isset($data['cpuTime']) ? $data['cpuTime'] : null;
        $this->container['sendBytes'] = isset($data['sendBytes']) ? $data['sendBytes'] : null;
        $this->container['queryTables'] = isset($data['queryTables']) ? $data['queryTables'] : null;
        $this->container['innodbIoReadBytes'] = isset($data['innodbIoReadBytes']) ? $data['innodbIoReadBytes'] : null;
        $this->container['innodbIoRead'] = isset($data['innodbIoRead']) ? $data['innodbIoRead'] : null;
        $this->container['innodbIoReadWait'] = isset($data['innodbIoReadWait']) ? $data['innodbIoReadWait'] : null;
        $this->container['innodbLockWait'] = isset($data['innodbLockWait']) ? $data['innodbLockWait'] : null;
        $this->container['innodbQueueWait'] = isset($data['innodbQueueWait']) ? $data['innodbQueueWait'] : null;
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
        if ($this->container['occurrenceTime'] === null) {
            $invalidProperties[] = "'occurrenceTime' can't be null";
        }
        if ($this->container['queryTime'] === null) {
            $invalidProperties[] = "'queryTime' can't be null";
        }
        if ($this->container['transactionId'] === null) {
            $invalidProperties[] = "'transactionId' can't be null";
        }
        if ($this->container['sqlTemplateId'] === null) {
            $invalidProperties[] = "'sqlTemplateId' can't be null";
        }
        if ($this->container['nodeId'] === null) {
            $invalidProperties[] = "'nodeId' can't be null";
        }
        if ($this->container['dbUser'] === null) {
            $invalidProperties[] = "'dbUser' can't be null";
        }
        if ($this->container['database'] === null) {
            $invalidProperties[] = "'database' can't be null";
        }
        if ($this->container['client'] === null) {
            $invalidProperties[] = "'client' can't be null";
        }
        if ($this->container['sqlType'] === null) {
            $invalidProperties[] = "'sqlType' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['errorNo'] === null) {
            $invalidProperties[] = "'errorNo' can't be null";
        }
        if ($this->container['rowsAffected'] === null) {
            $invalidProperties[] = "'rowsAffected' can't be null";
        }
        if ($this->container['rowsSent'] === null) {
            $invalidProperties[] = "'rowsSent' can't be null";
        }
        if ($this->container['lockTime'] === null) {
            $invalidProperties[] = "'lockTime' can't be null";
        }
        if ($this->container['rowsExamined'] === null) {
            $invalidProperties[] = "'rowsExamined' can't be null";
        }
        if ($this->container['sessionId'] === null) {
            $invalidProperties[] = "'sessionId' can't be null";
        }
        if ($this->container['cpuTime'] === null) {
            $invalidProperties[] = "'cpuTime' can't be null";
        }
        if ($this->container['sendBytes'] === null) {
            $invalidProperties[] = "'sendBytes' can't be null";
        }
        if ($this->container['queryTables'] === null) {
            $invalidProperties[] = "'queryTables' can't be null";
        }
        if ($this->container['innodbIoReadBytes'] === null) {
            $invalidProperties[] = "'innodbIoReadBytes' can't be null";
        }
        if ($this->container['innodbIoRead'] === null) {
            $invalidProperties[] = "'innodbIoRead' can't be null";
        }
        if ($this->container['innodbIoReadWait'] === null) {
            $invalidProperties[] = "'innodbIoReadWait' can't be null";
        }
        if ($this->container['innodbLockWait'] === null) {
            $invalidProperties[] = "'innodbLockWait' can't be null";
        }
        if ($this->container['innodbQueueWait'] === null) {
            $invalidProperties[] = "'innodbQueueWait' can't be null";
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
    * Gets occurrenceTime
    *  发生时间
    *
    * @return int
    */
    public function getOccurrenceTime()
    {
        return $this->container['occurrenceTime'];
    }

    /**
    * Sets occurrenceTime
    *
    * @param int $occurrenceTime 发生时间
    *
    * @return $this
    */
    public function setOccurrenceTime($occurrenceTime)
    {
        $this->container['occurrenceTime'] = $occurrenceTime;
        return $this;
    }

    /**
    * Gets queryTime
    *  执行耗时毫秒
    *
    * @return int
    */
    public function getQueryTime()
    {
        return $this->container['queryTime'];
    }

    /**
    * Sets queryTime
    *
    * @param int $queryTime 执行耗时毫秒
    *
    * @return $this
    */
    public function setQueryTime($queryTime)
    {
        $this->container['queryTime'] = $queryTime;
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
    * Gets sqlTemplateId
    *  模板ID
    *
    * @return string
    */
    public function getSqlTemplateId()
    {
        return $this->container['sqlTemplateId'];
    }

    /**
    * Sets sqlTemplateId
    *
    * @param string $sqlTemplateId 模板ID
    *
    * @return $this
    */
    public function setSqlTemplateId($sqlTemplateId)
    {
        $this->container['sqlTemplateId'] = $sqlTemplateId;
        return $this;
    }

    /**
    * Gets nodeId
    *  节点ID
    *
    * @return string
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string $nodeId 节点ID
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets dbUser
    *  用户名
    *
    * @return string
    */
    public function getDbUser()
    {
        return $this->container['dbUser'];
    }

    /**
    * Sets dbUser
    *
    * @param string $dbUser 用户名
    *
    * @return $this
    */
    public function setDbUser($dbUser)
    {
        $this->container['dbUser'] = $dbUser;
        return $this;
    }

    /**
    * Gets database
    *  数据库
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
    * @param string $database 数据库
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
    *  客户端IP
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
    * @param string $client 客户端IP
    *
    * @return $this
    */
    public function setClient($client)
    {
        $this->container['client'] = $client;
        return $this;
    }

    /**
    * Gets sqlType
    *  SQL类型
    *
    * @return string
    */
    public function getSqlType()
    {
        return $this->container['sqlType'];
    }

    /**
    * Sets sqlType
    *
    * @param string $sqlType SQL类型
    *
    * @return $this
    */
    public function setSqlType($sqlType)
    {
        $this->container['sqlType'] = $sqlType;
        return $this;
    }

    /**
    * Gets status
    *  执行状态
    *
    * @return int
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int $status 执行状态
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
    *  错误码
    *
    * @return int
    */
    public function getErrorNo()
    {
        return $this->container['errorNo'];
    }

    /**
    * Sets errorNo
    *
    * @param int $errorNo 错误码
    *
    * @return $this
    */
    public function setErrorNo($errorNo)
    {
        $this->container['errorNo'] = $errorNo;
        return $this;
    }

    /**
    * Gets rowsAffected
    *  更新行数
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
    * @param int $rowsAffected 更新行数
    *
    * @return $this
    */
    public function setRowsAffected($rowsAffected)
    {
        $this->container['rowsAffected'] = $rowsAffected;
        return $this;
    }

    /**
    * Gets rowsSent
    *  返回行数
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
    * @param int $rowsSent 返回行数
    *
    * @return $this
    */
    public function setRowsSent($rowsSent)
    {
        $this->container['rowsSent'] = $rowsSent;
        return $this;
    }

    /**
    * Gets lockTime
    *  锁等待时间毫秒
    *
    * @return int
    */
    public function getLockTime()
    {
        return $this->container['lockTime'];
    }

    /**
    * Sets lockTime
    *
    * @param int $lockTime 锁等待时间毫秒
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
    *  扫描行数
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
    * @param int $rowsExamined 扫描行数
    *
    * @return $this
    */
    public function setRowsExamined($rowsExamined)
    {
        $this->container['rowsExamined'] = $rowsExamined;
        return $this;
    }

    /**
    * Gets sessionId
    *  线程ID
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
    * @param string $sessionId 线程ID
    *
    * @return $this
    */
    public function setSessionId($sessionId)
    {
        $this->container['sessionId'] = $sessionId;
        return $this;
    }

    /**
    * Gets cpuTime
    *  CPU耗时(us)
    *
    * @return int
    */
    public function getCpuTime()
    {
        return $this->container['cpuTime'];
    }

    /**
    * Sets cpuTime
    *
    * @param int $cpuTime CPU耗时(us)
    *
    * @return $this
    */
    public function setCpuTime($cpuTime)
    {
        $this->container['cpuTime'] = $cpuTime;
        return $this;
    }

    /**
    * Gets sendBytes
    *  网络发送字节数
    *
    * @return int
    */
    public function getSendBytes()
    {
        return $this->container['sendBytes'];
    }

    /**
    * Sets sendBytes
    *
    * @param int $sendBytes 网络发送字节数
    *
    * @return $this
    */
    public function setSendBytes($sendBytes)
    {
        $this->container['sendBytes'] = $sendBytes;
        return $this;
    }

    /**
    * Gets queryTables
    *  查询中所有的表名
    *
    * @return string
    */
    public function getQueryTables()
    {
        return $this->container['queryTables'];
    }

    /**
    * Sets queryTables
    *
    * @param string $queryTables 查询中所有的表名
    *
    * @return $this
    */
    public function setQueryTables($queryTables)
    {
        $this->container['queryTables'] = $queryTables;
        return $this;
    }

    /**
    * Gets innodbIoReadBytes
    *  物理I/O读字节数
    *
    * @return int
    */
    public function getInnodbIoReadBytes()
    {
        return $this->container['innodbIoReadBytes'];
    }

    /**
    * Sets innodbIoReadBytes
    *
    * @param int $innodbIoReadBytes 物理I/O读字节数
    *
    * @return $this
    */
    public function setInnodbIoReadBytes($innodbIoReadBytes)
    {
        $this->container['innodbIoReadBytes'] = $innodbIoReadBytes;
        return $this;
    }

    /**
    * Gets innodbIoRead
    *  物理I/O读次数
    *
    * @return int
    */
    public function getInnodbIoRead()
    {
        return $this->container['innodbIoRead'];
    }

    /**
    * Sets innodbIoRead
    *
    * @param int $innodbIoRead 物理I/O读次数
    *
    * @return $this
    */
    public function setInnodbIoRead($innodbIoRead)
    {
        $this->container['innodbIoRead'] = $innodbIoRead;
        return $this;
    }

    /**
    * Gets innodbIoReadWait
    *  物理I/O读取等待耗时(ms)
    *
    * @return int
    */
    public function getInnodbIoReadWait()
    {
        return $this->container['innodbIoReadWait'];
    }

    /**
    * Sets innodbIoReadWait
    *
    * @param int $innodbIoReadWait 物理I/O读取等待耗时(ms)
    *
    * @return $this
    */
    public function setInnodbIoReadWait($innodbIoReadWait)
    {
        $this->container['innodbIoReadWait'] = $innodbIoReadWait;
        return $this;
    }

    /**
    * Gets innodbLockWait
    *  物理I/O读取等待耗时(ms)
    *
    * @return int
    */
    public function getInnodbLockWait()
    {
        return $this->container['innodbLockWait'];
    }

    /**
    * Sets innodbLockWait
    *
    * @param int $innodbLockWait 物理I/O读取等待耗时(ms)
    *
    * @return $this
    */
    public function setInnodbLockWait($innodbLockWait)
    {
        $this->container['innodbLockWait'] = $innodbLockWait;
        return $this;
    }

    /**
    * Gets innodbQueueWait
    *  行锁等待耗时(ms)
    *
    * @return int
    */
    public function getInnodbQueueWait()
    {
        return $this->container['innodbQueueWait'];
    }

    /**
    * Sets innodbQueueWait
    *
    * @param int $innodbQueueWait 行锁等待耗时(ms)
    *
    * @return $this
    */
    public function setInnodbQueueWait($innodbQueueWait)
    {
        $this->container['innodbQueueWait'] = $innodbQueueWait;
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

