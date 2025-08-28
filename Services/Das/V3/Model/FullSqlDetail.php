<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FullSqlDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FullSqlDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sql  SQL语句。
    * sqlTemplateId  SQL模板ID。
    * operateType  操作类型。
    * status  状态。
    * errorNo  错误码。
    * database  数据库。
    * threadId  线程ID。
    * client  客户端。
    * user  用户。
    * executeAt  执行开始时间（Unix timestamp），单位：毫秒。
    * queryTime  执行耗时（毫秒）。
    * lockTime  锁等待耗时（毫秒）。
    * rowsExamined  扫描行数。
    * rowsSent  返回行数。
    * rowsAffected  更新行数。
    * trxId  事务ID。
    * cpuTime  CPU耗时（微秒）。
    * sendBytes  网络发送字节数。
    * queryTables  查询中所有的表名（格式：库名.表名|库名.表名）。
    * innodbIoReadBytes  物理I/O读字节数。
    * innodbIoRead  物理I/O读次数。
    * innodbIoReadWait  物理I/O读取等待耗时（毫秒）。
    * innodbLockWait  行锁等待耗时（毫秒）。
    * innodbQueueWait  进入innodb的等待耗时（毫秒）。
    * kernelVersion  内核版本号，DDM实例使用。
    * queryTimeDetail  SQL执行各阶段细分耗时，DDM实例使用。
    * sessionId  会话ID。
    * nodeId  节点ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sql' => 'string',
            'sqlTemplateId' => 'string',
            'operateType' => 'string',
            'status' => 'string',
            'errorNo' => 'string',
            'database' => 'string',
            'threadId' => 'string',
            'client' => 'string',
            'user' => 'string',
            'executeAt' => 'int',
            'queryTime' => 'double',
            'lockTime' => 'double',
            'rowsExamined' => 'int',
            'rowsSent' => 'int',
            'rowsAffected' => 'int',
            'trxId' => 'int',
            'cpuTime' => 'double',
            'sendBytes' => 'int',
            'queryTables' => 'string',
            'innodbIoReadBytes' => 'int',
            'innodbIoRead' => 'int',
            'innodbIoReadWait' => 'double',
            'innodbLockWait' => 'double',
            'innodbQueueWait' => 'double',
            'kernelVersion' => 'string',
            'queryTimeDetail' => 'string',
            'sessionId' => 'string',
            'nodeId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sql  SQL语句。
    * sqlTemplateId  SQL模板ID。
    * operateType  操作类型。
    * status  状态。
    * errorNo  错误码。
    * database  数据库。
    * threadId  线程ID。
    * client  客户端。
    * user  用户。
    * executeAt  执行开始时间（Unix timestamp），单位：毫秒。
    * queryTime  执行耗时（毫秒）。
    * lockTime  锁等待耗时（毫秒）。
    * rowsExamined  扫描行数。
    * rowsSent  返回行数。
    * rowsAffected  更新行数。
    * trxId  事务ID。
    * cpuTime  CPU耗时（微秒）。
    * sendBytes  网络发送字节数。
    * queryTables  查询中所有的表名（格式：库名.表名|库名.表名）。
    * innodbIoReadBytes  物理I/O读字节数。
    * innodbIoRead  物理I/O读次数。
    * innodbIoReadWait  物理I/O读取等待耗时（毫秒）。
    * innodbLockWait  行锁等待耗时（毫秒）。
    * innodbQueueWait  进入innodb的等待耗时（毫秒）。
    * kernelVersion  内核版本号，DDM实例使用。
    * queryTimeDetail  SQL执行各阶段细分耗时，DDM实例使用。
    * sessionId  会话ID。
    * nodeId  节点ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sql' => null,
        'sqlTemplateId' => null,
        'operateType' => null,
        'status' => null,
        'errorNo' => null,
        'database' => null,
        'threadId' => null,
        'client' => null,
        'user' => null,
        'executeAt' => 'int64',
        'queryTime' => 'double',
        'lockTime' => 'double',
        'rowsExamined' => 'int64',
        'rowsSent' => 'int64',
        'rowsAffected' => 'int64',
        'trxId' => 'int64',
        'cpuTime' => 'double',
        'sendBytes' => 'int64',
        'queryTables' => null,
        'innodbIoReadBytes' => 'int64',
        'innodbIoRead' => 'int32',
        'innodbIoReadWait' => 'double',
        'innodbLockWait' => 'double',
        'innodbQueueWait' => 'double',
        'kernelVersion' => null,
        'queryTimeDetail' => null,
        'sessionId' => null,
        'nodeId' => null
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
    * sql  SQL语句。
    * sqlTemplateId  SQL模板ID。
    * operateType  操作类型。
    * status  状态。
    * errorNo  错误码。
    * database  数据库。
    * threadId  线程ID。
    * client  客户端。
    * user  用户。
    * executeAt  执行开始时间（Unix timestamp），单位：毫秒。
    * queryTime  执行耗时（毫秒）。
    * lockTime  锁等待耗时（毫秒）。
    * rowsExamined  扫描行数。
    * rowsSent  返回行数。
    * rowsAffected  更新行数。
    * trxId  事务ID。
    * cpuTime  CPU耗时（微秒）。
    * sendBytes  网络发送字节数。
    * queryTables  查询中所有的表名（格式：库名.表名|库名.表名）。
    * innodbIoReadBytes  物理I/O读字节数。
    * innodbIoRead  物理I/O读次数。
    * innodbIoReadWait  物理I/O读取等待耗时（毫秒）。
    * innodbLockWait  行锁等待耗时（毫秒）。
    * innodbQueueWait  进入innodb的等待耗时（毫秒）。
    * kernelVersion  内核版本号，DDM实例使用。
    * queryTimeDetail  SQL执行各阶段细分耗时，DDM实例使用。
    * sessionId  会话ID。
    * nodeId  节点ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sql' => 'sql',
            'sqlTemplateId' => 'sql_template_id',
            'operateType' => 'operate_type',
            'status' => 'status',
            'errorNo' => 'error_no',
            'database' => 'database',
            'threadId' => 'thread_id',
            'client' => 'client',
            'user' => 'user',
            'executeAt' => 'execute_at',
            'queryTime' => 'query_time',
            'lockTime' => 'lock_time',
            'rowsExamined' => 'rows_examined',
            'rowsSent' => 'rows_sent',
            'rowsAffected' => 'rows_affected',
            'trxId' => 'trx_id',
            'cpuTime' => 'cpu_time',
            'sendBytes' => 'send_bytes',
            'queryTables' => 'query_tables',
            'innodbIoReadBytes' => 'innodb_io_read_bytes',
            'innodbIoRead' => 'innodb_io_read',
            'innodbIoReadWait' => 'innodb_io_read_wait',
            'innodbLockWait' => 'innodb_lock_wait',
            'innodbQueueWait' => 'innodb_queue_wait',
            'kernelVersion' => 'kernel_version',
            'queryTimeDetail' => 'query_time_detail',
            'sessionId' => 'session_id',
            'nodeId' => 'node_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sql  SQL语句。
    * sqlTemplateId  SQL模板ID。
    * operateType  操作类型。
    * status  状态。
    * errorNo  错误码。
    * database  数据库。
    * threadId  线程ID。
    * client  客户端。
    * user  用户。
    * executeAt  执行开始时间（Unix timestamp），单位：毫秒。
    * queryTime  执行耗时（毫秒）。
    * lockTime  锁等待耗时（毫秒）。
    * rowsExamined  扫描行数。
    * rowsSent  返回行数。
    * rowsAffected  更新行数。
    * trxId  事务ID。
    * cpuTime  CPU耗时（微秒）。
    * sendBytes  网络发送字节数。
    * queryTables  查询中所有的表名（格式：库名.表名|库名.表名）。
    * innodbIoReadBytes  物理I/O读字节数。
    * innodbIoRead  物理I/O读次数。
    * innodbIoReadWait  物理I/O读取等待耗时（毫秒）。
    * innodbLockWait  行锁等待耗时（毫秒）。
    * innodbQueueWait  进入innodb的等待耗时（毫秒）。
    * kernelVersion  内核版本号，DDM实例使用。
    * queryTimeDetail  SQL执行各阶段细分耗时，DDM实例使用。
    * sessionId  会话ID。
    * nodeId  节点ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'sql' => 'setSql',
            'sqlTemplateId' => 'setSqlTemplateId',
            'operateType' => 'setOperateType',
            'status' => 'setStatus',
            'errorNo' => 'setErrorNo',
            'database' => 'setDatabase',
            'threadId' => 'setThreadId',
            'client' => 'setClient',
            'user' => 'setUser',
            'executeAt' => 'setExecuteAt',
            'queryTime' => 'setQueryTime',
            'lockTime' => 'setLockTime',
            'rowsExamined' => 'setRowsExamined',
            'rowsSent' => 'setRowsSent',
            'rowsAffected' => 'setRowsAffected',
            'trxId' => 'setTrxId',
            'cpuTime' => 'setCpuTime',
            'sendBytes' => 'setSendBytes',
            'queryTables' => 'setQueryTables',
            'innodbIoReadBytes' => 'setInnodbIoReadBytes',
            'innodbIoRead' => 'setInnodbIoRead',
            'innodbIoReadWait' => 'setInnodbIoReadWait',
            'innodbLockWait' => 'setInnodbLockWait',
            'innodbQueueWait' => 'setInnodbQueueWait',
            'kernelVersion' => 'setKernelVersion',
            'queryTimeDetail' => 'setQueryTimeDetail',
            'sessionId' => 'setSessionId',
            'nodeId' => 'setNodeId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sql  SQL语句。
    * sqlTemplateId  SQL模板ID。
    * operateType  操作类型。
    * status  状态。
    * errorNo  错误码。
    * database  数据库。
    * threadId  线程ID。
    * client  客户端。
    * user  用户。
    * executeAt  执行开始时间（Unix timestamp），单位：毫秒。
    * queryTime  执行耗时（毫秒）。
    * lockTime  锁等待耗时（毫秒）。
    * rowsExamined  扫描行数。
    * rowsSent  返回行数。
    * rowsAffected  更新行数。
    * trxId  事务ID。
    * cpuTime  CPU耗时（微秒）。
    * sendBytes  网络发送字节数。
    * queryTables  查询中所有的表名（格式：库名.表名|库名.表名）。
    * innodbIoReadBytes  物理I/O读字节数。
    * innodbIoRead  物理I/O读次数。
    * innodbIoReadWait  物理I/O读取等待耗时（毫秒）。
    * innodbLockWait  行锁等待耗时（毫秒）。
    * innodbQueueWait  进入innodb的等待耗时（毫秒）。
    * kernelVersion  内核版本号，DDM实例使用。
    * queryTimeDetail  SQL执行各阶段细分耗时，DDM实例使用。
    * sessionId  会话ID。
    * nodeId  节点ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'sql' => 'getSql',
            'sqlTemplateId' => 'getSqlTemplateId',
            'operateType' => 'getOperateType',
            'status' => 'getStatus',
            'errorNo' => 'getErrorNo',
            'database' => 'getDatabase',
            'threadId' => 'getThreadId',
            'client' => 'getClient',
            'user' => 'getUser',
            'executeAt' => 'getExecuteAt',
            'queryTime' => 'getQueryTime',
            'lockTime' => 'getLockTime',
            'rowsExamined' => 'getRowsExamined',
            'rowsSent' => 'getRowsSent',
            'rowsAffected' => 'getRowsAffected',
            'trxId' => 'getTrxId',
            'cpuTime' => 'getCpuTime',
            'sendBytes' => 'getSendBytes',
            'queryTables' => 'getQueryTables',
            'innodbIoReadBytes' => 'getInnodbIoReadBytes',
            'innodbIoRead' => 'getInnodbIoRead',
            'innodbIoReadWait' => 'getInnodbIoReadWait',
            'innodbLockWait' => 'getInnodbLockWait',
            'innodbQueueWait' => 'getInnodbQueueWait',
            'kernelVersion' => 'getKernelVersion',
            'queryTimeDetail' => 'getQueryTimeDetail',
            'sessionId' => 'getSessionId',
            'nodeId' => 'getNodeId'
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
        $this->container['sqlTemplateId'] = isset($data['sqlTemplateId']) ? $data['sqlTemplateId'] : null;
        $this->container['operateType'] = isset($data['operateType']) ? $data['operateType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['errorNo'] = isset($data['errorNo']) ? $data['errorNo'] : null;
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['threadId'] = isset($data['threadId']) ? $data['threadId'] : null;
        $this->container['client'] = isset($data['client']) ? $data['client'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['executeAt'] = isset($data['executeAt']) ? $data['executeAt'] : null;
        $this->container['queryTime'] = isset($data['queryTime']) ? $data['queryTime'] : null;
        $this->container['lockTime'] = isset($data['lockTime']) ? $data['lockTime'] : null;
        $this->container['rowsExamined'] = isset($data['rowsExamined']) ? $data['rowsExamined'] : null;
        $this->container['rowsSent'] = isset($data['rowsSent']) ? $data['rowsSent'] : null;
        $this->container['rowsAffected'] = isset($data['rowsAffected']) ? $data['rowsAffected'] : null;
        $this->container['trxId'] = isset($data['trxId']) ? $data['trxId'] : null;
        $this->container['cpuTime'] = isset($data['cpuTime']) ? $data['cpuTime'] : null;
        $this->container['sendBytes'] = isset($data['sendBytes']) ? $data['sendBytes'] : null;
        $this->container['queryTables'] = isset($data['queryTables']) ? $data['queryTables'] : null;
        $this->container['innodbIoReadBytes'] = isset($data['innodbIoReadBytes']) ? $data['innodbIoReadBytes'] : null;
        $this->container['innodbIoRead'] = isset($data['innodbIoRead']) ? $data['innodbIoRead'] : null;
        $this->container['innodbIoReadWait'] = isset($data['innodbIoReadWait']) ? $data['innodbIoReadWait'] : null;
        $this->container['innodbLockWait'] = isset($data['innodbLockWait']) ? $data['innodbLockWait'] : null;
        $this->container['innodbQueueWait'] = isset($data['innodbQueueWait']) ? $data['innodbQueueWait'] : null;
        $this->container['kernelVersion'] = isset($data['kernelVersion']) ? $data['kernelVersion'] : null;
        $this->container['queryTimeDetail'] = isset($data['queryTimeDetail']) ? $data['queryTimeDetail'] : null;
        $this->container['sessionId'] = isset($data['sessionId']) ? $data['sessionId'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
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
        if ($this->container['sqlTemplateId'] === null) {
            $invalidProperties[] = "'sqlTemplateId' can't be null";
        }
        if ($this->container['operateType'] === null) {
            $invalidProperties[] = "'operateType' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['errorNo'] === null) {
            $invalidProperties[] = "'errorNo' can't be null";
        }
        if ($this->container['database'] === null) {
            $invalidProperties[] = "'database' can't be null";
        }
        if ($this->container['threadId'] === null) {
            $invalidProperties[] = "'threadId' can't be null";
        }
        if ($this->container['client'] === null) {
            $invalidProperties[] = "'client' can't be null";
        }
        if ($this->container['user'] === null) {
            $invalidProperties[] = "'user' can't be null";
        }
        if ($this->container['executeAt'] === null) {
            $invalidProperties[] = "'executeAt' can't be null";
        }
        if ($this->container['queryTime'] === null) {
            $invalidProperties[] = "'queryTime' can't be null";
        }
        if ($this->container['lockTime'] === null) {
            $invalidProperties[] = "'lockTime' can't be null";
        }
        if ($this->container['rowsExamined'] === null) {
            $invalidProperties[] = "'rowsExamined' can't be null";
        }
        if ($this->container['rowsSent'] === null) {
            $invalidProperties[] = "'rowsSent' can't be null";
        }
        if ($this->container['rowsAffected'] === null) {
            $invalidProperties[] = "'rowsAffected' can't be null";
        }
        if ($this->container['trxId'] === null) {
            $invalidProperties[] = "'trxId' can't be null";
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
        if ($this->container['kernelVersion'] === null) {
            $invalidProperties[] = "'kernelVersion' can't be null";
        }
        if ($this->container['queryTimeDetail'] === null) {
            $invalidProperties[] = "'queryTimeDetail' can't be null";
        }
        if ($this->container['sessionId'] === null) {
            $invalidProperties[] = "'sessionId' can't be null";
        }
        if ($this->container['nodeId'] === null) {
            $invalidProperties[] = "'nodeId' can't be null";
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
    *  SQL语句。
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
    * @param string $sql SQL语句。
    *
    * @return $this
    */
    public function setSql($sql)
    {
        $this->container['sql'] = $sql;
        return $this;
    }

    /**
    * Gets sqlTemplateId
    *  SQL模板ID。
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
    * @param string $sqlTemplateId SQL模板ID。
    *
    * @return $this
    */
    public function setSqlTemplateId($sqlTemplateId)
    {
        $this->container['sqlTemplateId'] = $sqlTemplateId;
        return $this;
    }

    /**
    * Gets operateType
    *  操作类型。
    *
    * @return string
    */
    public function getOperateType()
    {
        return $this->container['operateType'];
    }

    /**
    * Sets operateType
    *
    * @param string $operateType 操作类型。
    *
    * @return $this
    */
    public function setOperateType($operateType)
    {
        $this->container['operateType'] = $operateType;
        return $this;
    }

    /**
    * Gets status
    *  状态。
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 状态。
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
    *  错误码。
    *
    * @return string
    */
    public function getErrorNo()
    {
        return $this->container['errorNo'];
    }

    /**
    * Sets errorNo
    *
    * @param string $errorNo 错误码。
    *
    * @return $this
    */
    public function setErrorNo($errorNo)
    {
        $this->container['errorNo'] = $errorNo;
        return $this;
    }

    /**
    * Gets database
    *  数据库。
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
    * @param string $database 数据库。
    *
    * @return $this
    */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;
        return $this;
    }

    /**
    * Gets threadId
    *  线程ID。
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
    * @param string $threadId 线程ID。
    *
    * @return $this
    */
    public function setThreadId($threadId)
    {
        $this->container['threadId'] = $threadId;
        return $this;
    }

    /**
    * Gets client
    *  客户端。
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
    * @param string $client 客户端。
    *
    * @return $this
    */
    public function setClient($client)
    {
        $this->container['client'] = $client;
        return $this;
    }

    /**
    * Gets user
    *  用户。
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
    * @param string $user 用户。
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets executeAt
    *  执行开始时间（Unix timestamp），单位：毫秒。
    *
    * @return int
    */
    public function getExecuteAt()
    {
        return $this->container['executeAt'];
    }

    /**
    * Sets executeAt
    *
    * @param int $executeAt 执行开始时间（Unix timestamp），单位：毫秒。
    *
    * @return $this
    */
    public function setExecuteAt($executeAt)
    {
        $this->container['executeAt'] = $executeAt;
        return $this;
    }

    /**
    * Gets queryTime
    *  执行耗时（毫秒）。
    *
    * @return double
    */
    public function getQueryTime()
    {
        return $this->container['queryTime'];
    }

    /**
    * Sets queryTime
    *
    * @param double $queryTime 执行耗时（毫秒）。
    *
    * @return $this
    */
    public function setQueryTime($queryTime)
    {
        $this->container['queryTime'] = $queryTime;
        return $this;
    }

    /**
    * Gets lockTime
    *  锁等待耗时（毫秒）。
    *
    * @return double
    */
    public function getLockTime()
    {
        return $this->container['lockTime'];
    }

    /**
    * Sets lockTime
    *
    * @param double $lockTime 锁等待耗时（毫秒）。
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
    *  扫描行数。
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
    * @param int $rowsExamined 扫描行数。
    *
    * @return $this
    */
    public function setRowsExamined($rowsExamined)
    {
        $this->container['rowsExamined'] = $rowsExamined;
        return $this;
    }

    /**
    * Gets rowsSent
    *  返回行数。
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
    * @param int $rowsSent 返回行数。
    *
    * @return $this
    */
    public function setRowsSent($rowsSent)
    {
        $this->container['rowsSent'] = $rowsSent;
        return $this;
    }

    /**
    * Gets rowsAffected
    *  更新行数。
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
    * @param int $rowsAffected 更新行数。
    *
    * @return $this
    */
    public function setRowsAffected($rowsAffected)
    {
        $this->container['rowsAffected'] = $rowsAffected;
        return $this;
    }

    /**
    * Gets trxId
    *  事务ID。
    *
    * @return int
    */
    public function getTrxId()
    {
        return $this->container['trxId'];
    }

    /**
    * Sets trxId
    *
    * @param int $trxId 事务ID。
    *
    * @return $this
    */
    public function setTrxId($trxId)
    {
        $this->container['trxId'] = $trxId;
        return $this;
    }

    /**
    * Gets cpuTime
    *  CPU耗时（微秒）。
    *
    * @return double
    */
    public function getCpuTime()
    {
        return $this->container['cpuTime'];
    }

    /**
    * Sets cpuTime
    *
    * @param double $cpuTime CPU耗时（微秒）。
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
    *  网络发送字节数。
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
    * @param int $sendBytes 网络发送字节数。
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
    *  查询中所有的表名（格式：库名.表名|库名.表名）。
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
    * @param string $queryTables 查询中所有的表名（格式：库名.表名|库名.表名）。
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
    *  物理I/O读字节数。
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
    * @param int $innodbIoReadBytes 物理I/O读字节数。
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
    *  物理I/O读次数。
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
    * @param int $innodbIoRead 物理I/O读次数。
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
    *  物理I/O读取等待耗时（毫秒）。
    *
    * @return double
    */
    public function getInnodbIoReadWait()
    {
        return $this->container['innodbIoReadWait'];
    }

    /**
    * Sets innodbIoReadWait
    *
    * @param double $innodbIoReadWait 物理I/O读取等待耗时（毫秒）。
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
    *  行锁等待耗时（毫秒）。
    *
    * @return double
    */
    public function getInnodbLockWait()
    {
        return $this->container['innodbLockWait'];
    }

    /**
    * Sets innodbLockWait
    *
    * @param double $innodbLockWait 行锁等待耗时（毫秒）。
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
    *  进入innodb的等待耗时（毫秒）。
    *
    * @return double
    */
    public function getInnodbQueueWait()
    {
        return $this->container['innodbQueueWait'];
    }

    /**
    * Sets innodbQueueWait
    *
    * @param double $innodbQueueWait 进入innodb的等待耗时（毫秒）。
    *
    * @return $this
    */
    public function setInnodbQueueWait($innodbQueueWait)
    {
        $this->container['innodbQueueWait'] = $innodbQueueWait;
        return $this;
    }

    /**
    * Gets kernelVersion
    *  内核版本号，DDM实例使用。
    *
    * @return string
    */
    public function getKernelVersion()
    {
        return $this->container['kernelVersion'];
    }

    /**
    * Sets kernelVersion
    *
    * @param string $kernelVersion 内核版本号，DDM实例使用。
    *
    * @return $this
    */
    public function setKernelVersion($kernelVersion)
    {
        $this->container['kernelVersion'] = $kernelVersion;
        return $this;
    }

    /**
    * Gets queryTimeDetail
    *  SQL执行各阶段细分耗时，DDM实例使用。
    *
    * @return string
    */
    public function getQueryTimeDetail()
    {
        return $this->container['queryTimeDetail'];
    }

    /**
    * Sets queryTimeDetail
    *
    * @param string $queryTimeDetail SQL执行各阶段细分耗时，DDM实例使用。
    *
    * @return $this
    */
    public function setQueryTimeDetail($queryTimeDetail)
    {
        $this->container['queryTimeDetail'] = $queryTimeDetail;
        return $this;
    }

    /**
    * Gets sessionId
    *  会话ID。
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
    * @param string $sessionId 会话ID。
    *
    * @return $this
    */
    public function setSessionId($sessionId)
    {
        $this->container['sessionId'] = $sessionId;
        return $this;
    }

    /**
    * Gets nodeId
    *  节点ID。
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
    * @param string $nodeId 节点ID。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
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

