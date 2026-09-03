<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SqlItemDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SqlItemDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  SQL的ID值
    * operateType  操作类型
    * sqlTemplateId  模板ID
    * instanceId  实例ID
    * sql  SQL文本
    * database  数据库名称
    * threadId  线程ID
    * username  用户名称
    * clientIp  客户端IP
    * status  执行状态
    * executeCost  执行耗时(ms)
    * executeAt  执行时间点(ms)
    * rowsAffected  更新行数
    * rowsExamined  扫描行数
    * lockWaitTime  锁等待时间
    * rowsReturned  返回行数
    * trxId  事务ID
    * cpuTime  CPU耗时
    * sendBytes  网络发送字节数
    * queryTables  查询中所有的表名（格式：库名.表名|库名.表名）
    * innodbIoReadBytes  物理IO读字节数
    * innodbIoRead  物理IO读次数
    * innodbIoReadWait  物理IO读取等待耗时（ms）
    * innodbLockWait  行锁等待耗时（ms）
    * innodbQueueWait  进入innodb的等待耗时（ms）
    * kernelVersion  内核版本号
    * queryTimeDetail  SQL执行各阶段细分耗时
    * sessionId  会话ID
    * errorNo  错误码
    * nodeId  节点ID，实例节点的唯一标识
    * logicalReads  sqlserver IO逻辑读
    * physicalReads  sqlserver IO物理读
    * writes  sqlserver IO写
    * appName  sqlserver 应用名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'operateType' => 'string',
            'sqlTemplateId' => 'string',
            'instanceId' => 'string',
            'sql' => 'string',
            'database' => 'string',
            'threadId' => 'int',
            'username' => 'string',
            'clientIp' => 'string',
            'status' => 'int',
            'executeCost' => 'double',
            'executeAt' => 'double',
            'rowsAffected' => 'int',
            'rowsExamined' => 'int',
            'lockWaitTime' => 'double',
            'rowsReturned' => 'int',
            'trxId' => 'int',
            'cpuTime' => 'int',
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
            'errorNo' => 'int',
            'nodeId' => 'string',
            'logicalReads' => 'int',
            'physicalReads' => 'int',
            'writes' => 'int',
            'appName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  SQL的ID值
    * operateType  操作类型
    * sqlTemplateId  模板ID
    * instanceId  实例ID
    * sql  SQL文本
    * database  数据库名称
    * threadId  线程ID
    * username  用户名称
    * clientIp  客户端IP
    * status  执行状态
    * executeCost  执行耗时(ms)
    * executeAt  执行时间点(ms)
    * rowsAffected  更新行数
    * rowsExamined  扫描行数
    * lockWaitTime  锁等待时间
    * rowsReturned  返回行数
    * trxId  事务ID
    * cpuTime  CPU耗时
    * sendBytes  网络发送字节数
    * queryTables  查询中所有的表名（格式：库名.表名|库名.表名）
    * innodbIoReadBytes  物理IO读字节数
    * innodbIoRead  物理IO读次数
    * innodbIoReadWait  物理IO读取等待耗时（ms）
    * innodbLockWait  行锁等待耗时（ms）
    * innodbQueueWait  进入innodb的等待耗时（ms）
    * kernelVersion  内核版本号
    * queryTimeDetail  SQL执行各阶段细分耗时
    * sessionId  会话ID
    * errorNo  错误码
    * nodeId  节点ID，实例节点的唯一标识
    * logicalReads  sqlserver IO逻辑读
    * physicalReads  sqlserver IO物理读
    * writes  sqlserver IO写
    * appName  sqlserver 应用名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'operateType' => null,
        'sqlTemplateId' => null,
        'instanceId' => null,
        'sql' => null,
        'database' => null,
        'threadId' => 'int64',
        'username' => null,
        'clientIp' => null,
        'status' => 'int32',
        'executeCost' => 'double',
        'executeAt' => 'double',
        'rowsAffected' => 'int32',
        'rowsExamined' => 'int32',
        'lockWaitTime' => 'double',
        'rowsReturned' => 'int32',
        'trxId' => 'int64',
        'cpuTime' => 'int32',
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
        'errorNo' => 'int32',
        'nodeId' => null,
        'logicalReads' => 'int64',
        'physicalReads' => 'int64',
        'writes' => 'int64',
        'appName' => null
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
    * id  SQL的ID值
    * operateType  操作类型
    * sqlTemplateId  模板ID
    * instanceId  实例ID
    * sql  SQL文本
    * database  数据库名称
    * threadId  线程ID
    * username  用户名称
    * clientIp  客户端IP
    * status  执行状态
    * executeCost  执行耗时(ms)
    * executeAt  执行时间点(ms)
    * rowsAffected  更新行数
    * rowsExamined  扫描行数
    * lockWaitTime  锁等待时间
    * rowsReturned  返回行数
    * trxId  事务ID
    * cpuTime  CPU耗时
    * sendBytes  网络发送字节数
    * queryTables  查询中所有的表名（格式：库名.表名|库名.表名）
    * innodbIoReadBytes  物理IO读字节数
    * innodbIoRead  物理IO读次数
    * innodbIoReadWait  物理IO读取等待耗时（ms）
    * innodbLockWait  行锁等待耗时（ms）
    * innodbQueueWait  进入innodb的等待耗时（ms）
    * kernelVersion  内核版本号
    * queryTimeDetail  SQL执行各阶段细分耗时
    * sessionId  会话ID
    * errorNo  错误码
    * nodeId  节点ID，实例节点的唯一标识
    * logicalReads  sqlserver IO逻辑读
    * physicalReads  sqlserver IO物理读
    * writes  sqlserver IO写
    * appName  sqlserver 应用名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'operateType' => 'operate_type',
            'sqlTemplateId' => 'sql_template_id',
            'instanceId' => 'instance_id',
            'sql' => 'sql',
            'database' => 'database',
            'threadId' => 'thread_id',
            'username' => 'username',
            'clientIp' => 'client_ip',
            'status' => 'status',
            'executeCost' => 'execute_cost',
            'executeAt' => 'execute_at',
            'rowsAffected' => 'rows_affected',
            'rowsExamined' => 'rows_examined',
            'lockWaitTime' => 'lock_wait_time',
            'rowsReturned' => 'rows_returned',
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
            'errorNo' => 'error_no',
            'nodeId' => 'node_id',
            'logicalReads' => 'logical_reads',
            'physicalReads' => 'physical_reads',
            'writes' => 'writes',
            'appName' => 'app_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  SQL的ID值
    * operateType  操作类型
    * sqlTemplateId  模板ID
    * instanceId  实例ID
    * sql  SQL文本
    * database  数据库名称
    * threadId  线程ID
    * username  用户名称
    * clientIp  客户端IP
    * status  执行状态
    * executeCost  执行耗时(ms)
    * executeAt  执行时间点(ms)
    * rowsAffected  更新行数
    * rowsExamined  扫描行数
    * lockWaitTime  锁等待时间
    * rowsReturned  返回行数
    * trxId  事务ID
    * cpuTime  CPU耗时
    * sendBytes  网络发送字节数
    * queryTables  查询中所有的表名（格式：库名.表名|库名.表名）
    * innodbIoReadBytes  物理IO读字节数
    * innodbIoRead  物理IO读次数
    * innodbIoReadWait  物理IO读取等待耗时（ms）
    * innodbLockWait  行锁等待耗时（ms）
    * innodbQueueWait  进入innodb的等待耗时（ms）
    * kernelVersion  内核版本号
    * queryTimeDetail  SQL执行各阶段细分耗时
    * sessionId  会话ID
    * errorNo  错误码
    * nodeId  节点ID，实例节点的唯一标识
    * logicalReads  sqlserver IO逻辑读
    * physicalReads  sqlserver IO物理读
    * writes  sqlserver IO写
    * appName  sqlserver 应用名
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'operateType' => 'setOperateType',
            'sqlTemplateId' => 'setSqlTemplateId',
            'instanceId' => 'setInstanceId',
            'sql' => 'setSql',
            'database' => 'setDatabase',
            'threadId' => 'setThreadId',
            'username' => 'setUsername',
            'clientIp' => 'setClientIp',
            'status' => 'setStatus',
            'executeCost' => 'setExecuteCost',
            'executeAt' => 'setExecuteAt',
            'rowsAffected' => 'setRowsAffected',
            'rowsExamined' => 'setRowsExamined',
            'lockWaitTime' => 'setLockWaitTime',
            'rowsReturned' => 'setRowsReturned',
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
            'errorNo' => 'setErrorNo',
            'nodeId' => 'setNodeId',
            'logicalReads' => 'setLogicalReads',
            'physicalReads' => 'setPhysicalReads',
            'writes' => 'setWrites',
            'appName' => 'setAppName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  SQL的ID值
    * operateType  操作类型
    * sqlTemplateId  模板ID
    * instanceId  实例ID
    * sql  SQL文本
    * database  数据库名称
    * threadId  线程ID
    * username  用户名称
    * clientIp  客户端IP
    * status  执行状态
    * executeCost  执行耗时(ms)
    * executeAt  执行时间点(ms)
    * rowsAffected  更新行数
    * rowsExamined  扫描行数
    * lockWaitTime  锁等待时间
    * rowsReturned  返回行数
    * trxId  事务ID
    * cpuTime  CPU耗时
    * sendBytes  网络发送字节数
    * queryTables  查询中所有的表名（格式：库名.表名|库名.表名）
    * innodbIoReadBytes  物理IO读字节数
    * innodbIoRead  物理IO读次数
    * innodbIoReadWait  物理IO读取等待耗时（ms）
    * innodbLockWait  行锁等待耗时（ms）
    * innodbQueueWait  进入innodb的等待耗时（ms）
    * kernelVersion  内核版本号
    * queryTimeDetail  SQL执行各阶段细分耗时
    * sessionId  会话ID
    * errorNo  错误码
    * nodeId  节点ID，实例节点的唯一标识
    * logicalReads  sqlserver IO逻辑读
    * physicalReads  sqlserver IO物理读
    * writes  sqlserver IO写
    * appName  sqlserver 应用名
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'operateType' => 'getOperateType',
            'sqlTemplateId' => 'getSqlTemplateId',
            'instanceId' => 'getInstanceId',
            'sql' => 'getSql',
            'database' => 'getDatabase',
            'threadId' => 'getThreadId',
            'username' => 'getUsername',
            'clientIp' => 'getClientIp',
            'status' => 'getStatus',
            'executeCost' => 'getExecuteCost',
            'executeAt' => 'getExecuteAt',
            'rowsAffected' => 'getRowsAffected',
            'rowsExamined' => 'getRowsExamined',
            'lockWaitTime' => 'getLockWaitTime',
            'rowsReturned' => 'getRowsReturned',
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
            'errorNo' => 'getErrorNo',
            'nodeId' => 'getNodeId',
            'logicalReads' => 'getLogicalReads',
            'physicalReads' => 'getPhysicalReads',
            'writes' => 'getWrites',
            'appName' => 'getAppName'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['operateType'] = isset($data['operateType']) ? $data['operateType'] : null;
        $this->container['sqlTemplateId'] = isset($data['sqlTemplateId']) ? $data['sqlTemplateId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['sql'] = isset($data['sql']) ? $data['sql'] : null;
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['threadId'] = isset($data['threadId']) ? $data['threadId'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['clientIp'] = isset($data['clientIp']) ? $data['clientIp'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['executeCost'] = isset($data['executeCost']) ? $data['executeCost'] : null;
        $this->container['executeAt'] = isset($data['executeAt']) ? $data['executeAt'] : null;
        $this->container['rowsAffected'] = isset($data['rowsAffected']) ? $data['rowsAffected'] : null;
        $this->container['rowsExamined'] = isset($data['rowsExamined']) ? $data['rowsExamined'] : null;
        $this->container['lockWaitTime'] = isset($data['lockWaitTime']) ? $data['lockWaitTime'] : null;
        $this->container['rowsReturned'] = isset($data['rowsReturned']) ? $data['rowsReturned'] : null;
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
        $this->container['errorNo'] = isset($data['errorNo']) ? $data['errorNo'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['logicalReads'] = isset($data['logicalReads']) ? $data['logicalReads'] : null;
        $this->container['physicalReads'] = isset($data['physicalReads']) ? $data['physicalReads'] : null;
        $this->container['writes'] = isset($data['writes']) ? $data['writes'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
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
    * Gets id
    *  SQL的ID值
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id SQL的ID值
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets operateType
    *  操作类型
    *
    * @return string|null
    */
    public function getOperateType()
    {
        return $this->container['operateType'];
    }

    /**
    * Sets operateType
    *
    * @param string|null $operateType 操作类型
    *
    * @return $this
    */
    public function setOperateType($operateType)
    {
        $this->container['operateType'] = $operateType;
        return $this;
    }

    /**
    * Gets sqlTemplateId
    *  模板ID
    *
    * @return string|null
    */
    public function getSqlTemplateId()
    {
        return $this->container['sqlTemplateId'];
    }

    /**
    * Sets sqlTemplateId
    *
    * @param string|null $sqlTemplateId 模板ID
    *
    * @return $this
    */
    public function setSqlTemplateId($sqlTemplateId)
    {
        $this->container['sqlTemplateId'] = $sqlTemplateId;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets sql
    *  SQL文本
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
    * @param string|null $sql SQL文本
    *
    * @return $this
    */
    public function setSql($sql)
    {
        $this->container['sql'] = $sql;
        return $this;
    }

    /**
    * Gets database
    *  数据库名称
    *
    * @return string|null
    */
    public function getDatabase()
    {
        return $this->container['database'];
    }

    /**
    * Sets database
    *
    * @param string|null $database 数据库名称
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
    *  线程ID
    *
    * @return int|null
    */
    public function getThreadId()
    {
        return $this->container['threadId'];
    }

    /**
    * Sets threadId
    *
    * @param int|null $threadId 线程ID
    *
    * @return $this
    */
    public function setThreadId($threadId)
    {
        $this->container['threadId'] = $threadId;
        return $this;
    }

    /**
    * Gets username
    *  用户名称
    *
    * @return string|null
    */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
    * Sets username
    *
    * @param string|null $username 用户名称
    *
    * @return $this
    */
    public function setUsername($username)
    {
        $this->container['username'] = $username;
        return $this;
    }

    /**
    * Gets clientIp
    *  客户端IP
    *
    * @return string|null
    */
    public function getClientIp()
    {
        return $this->container['clientIp'];
    }

    /**
    * Sets clientIp
    *
    * @param string|null $clientIp 客户端IP
    *
    * @return $this
    */
    public function setClientIp($clientIp)
    {
        $this->container['clientIp'] = $clientIp;
        return $this;
    }

    /**
    * Gets status
    *  执行状态
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 执行状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets executeCost
    *  执行耗时(ms)
    *
    * @return double|null
    */
    public function getExecuteCost()
    {
        return $this->container['executeCost'];
    }

    /**
    * Sets executeCost
    *
    * @param double|null $executeCost 执行耗时(ms)
    *
    * @return $this
    */
    public function setExecuteCost($executeCost)
    {
        $this->container['executeCost'] = $executeCost;
        return $this;
    }

    /**
    * Gets executeAt
    *  执行时间点(ms)
    *
    * @return double|null
    */
    public function getExecuteAt()
    {
        return $this->container['executeAt'];
    }

    /**
    * Sets executeAt
    *
    * @param double|null $executeAt 执行时间点(ms)
    *
    * @return $this
    */
    public function setExecuteAt($executeAt)
    {
        $this->container['executeAt'] = $executeAt;
        return $this;
    }

    /**
    * Gets rowsAffected
    *  更新行数
    *
    * @return int|null
    */
    public function getRowsAffected()
    {
        return $this->container['rowsAffected'];
    }

    /**
    * Sets rowsAffected
    *
    * @param int|null $rowsAffected 更新行数
    *
    * @return $this
    */
    public function setRowsAffected($rowsAffected)
    {
        $this->container['rowsAffected'] = $rowsAffected;
        return $this;
    }

    /**
    * Gets rowsExamined
    *  扫描行数
    *
    * @return int|null
    */
    public function getRowsExamined()
    {
        return $this->container['rowsExamined'];
    }

    /**
    * Sets rowsExamined
    *
    * @param int|null $rowsExamined 扫描行数
    *
    * @return $this
    */
    public function setRowsExamined($rowsExamined)
    {
        $this->container['rowsExamined'] = $rowsExamined;
        return $this;
    }

    /**
    * Gets lockWaitTime
    *  锁等待时间
    *
    * @return double|null
    */
    public function getLockWaitTime()
    {
        return $this->container['lockWaitTime'];
    }

    /**
    * Sets lockWaitTime
    *
    * @param double|null $lockWaitTime 锁等待时间
    *
    * @return $this
    */
    public function setLockWaitTime($lockWaitTime)
    {
        $this->container['lockWaitTime'] = $lockWaitTime;
        return $this;
    }

    /**
    * Gets rowsReturned
    *  返回行数
    *
    * @return int|null
    */
    public function getRowsReturned()
    {
        return $this->container['rowsReturned'];
    }

    /**
    * Sets rowsReturned
    *
    * @param int|null $rowsReturned 返回行数
    *
    * @return $this
    */
    public function setRowsReturned($rowsReturned)
    {
        $this->container['rowsReturned'] = $rowsReturned;
        return $this;
    }

    /**
    * Gets trxId
    *  事务ID
    *
    * @return int|null
    */
    public function getTrxId()
    {
        return $this->container['trxId'];
    }

    /**
    * Sets trxId
    *
    * @param int|null $trxId 事务ID
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
    *  CPU耗时
    *
    * @return int|null
    */
    public function getCpuTime()
    {
        return $this->container['cpuTime'];
    }

    /**
    * Sets cpuTime
    *
    * @param int|null $cpuTime CPU耗时
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
    * @return int|null
    */
    public function getSendBytes()
    {
        return $this->container['sendBytes'];
    }

    /**
    * Sets sendBytes
    *
    * @param int|null $sendBytes 网络发送字节数
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
    *  查询中所有的表名（格式：库名.表名|库名.表名）
    *
    * @return string|null
    */
    public function getQueryTables()
    {
        return $this->container['queryTables'];
    }

    /**
    * Sets queryTables
    *
    * @param string|null $queryTables 查询中所有的表名（格式：库名.表名|库名.表名）
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
    *  物理IO读字节数
    *
    * @return int|null
    */
    public function getInnodbIoReadBytes()
    {
        return $this->container['innodbIoReadBytes'];
    }

    /**
    * Sets innodbIoReadBytes
    *
    * @param int|null $innodbIoReadBytes 物理IO读字节数
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
    *  物理IO读次数
    *
    * @return int|null
    */
    public function getInnodbIoRead()
    {
        return $this->container['innodbIoRead'];
    }

    /**
    * Sets innodbIoRead
    *
    * @param int|null $innodbIoRead 物理IO读次数
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
    *  物理IO读取等待耗时（ms）
    *
    * @return double|null
    */
    public function getInnodbIoReadWait()
    {
        return $this->container['innodbIoReadWait'];
    }

    /**
    * Sets innodbIoReadWait
    *
    * @param double|null $innodbIoReadWait 物理IO读取等待耗时（ms）
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
    *  行锁等待耗时（ms）
    *
    * @return double|null
    */
    public function getInnodbLockWait()
    {
        return $this->container['innodbLockWait'];
    }

    /**
    * Sets innodbLockWait
    *
    * @param double|null $innodbLockWait 行锁等待耗时（ms）
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
    *  进入innodb的等待耗时（ms）
    *
    * @return double|null
    */
    public function getInnodbQueueWait()
    {
        return $this->container['innodbQueueWait'];
    }

    /**
    * Sets innodbQueueWait
    *
    * @param double|null $innodbQueueWait 进入innodb的等待耗时（ms）
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
    *  内核版本号
    *
    * @return string|null
    */
    public function getKernelVersion()
    {
        return $this->container['kernelVersion'];
    }

    /**
    * Sets kernelVersion
    *
    * @param string|null $kernelVersion 内核版本号
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
    *  SQL执行各阶段细分耗时
    *
    * @return string|null
    */
    public function getQueryTimeDetail()
    {
        return $this->container['queryTimeDetail'];
    }

    /**
    * Sets queryTimeDetail
    *
    * @param string|null $queryTimeDetail SQL执行各阶段细分耗时
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
    *  会话ID
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
    * @param string|null $sessionId 会话ID
    *
    * @return $this
    */
    public function setSessionId($sessionId)
    {
        $this->container['sessionId'] = $sessionId;
        return $this;
    }

    /**
    * Gets errorNo
    *  错误码
    *
    * @return int|null
    */
    public function getErrorNo()
    {
        return $this->container['errorNo'];
    }

    /**
    * Sets errorNo
    *
    * @param int|null $errorNo 错误码
    *
    * @return $this
    */
    public function setErrorNo($errorNo)
    {
        $this->container['errorNo'] = $errorNo;
        return $this;
    }

    /**
    * Gets nodeId
    *  节点ID，实例节点的唯一标识
    *
    * @return string|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string|null $nodeId 节点ID，实例节点的唯一标识
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets logicalReads
    *  sqlserver IO逻辑读
    *
    * @return int|null
    */
    public function getLogicalReads()
    {
        return $this->container['logicalReads'];
    }

    /**
    * Sets logicalReads
    *
    * @param int|null $logicalReads sqlserver IO逻辑读
    *
    * @return $this
    */
    public function setLogicalReads($logicalReads)
    {
        $this->container['logicalReads'] = $logicalReads;
        return $this;
    }

    /**
    * Gets physicalReads
    *  sqlserver IO物理读
    *
    * @return int|null
    */
    public function getPhysicalReads()
    {
        return $this->container['physicalReads'];
    }

    /**
    * Sets physicalReads
    *
    * @param int|null $physicalReads sqlserver IO物理读
    *
    * @return $this
    */
    public function setPhysicalReads($physicalReads)
    {
        $this->container['physicalReads'] = $physicalReads;
        return $this;
    }

    /**
    * Gets writes
    *  sqlserver IO写
    *
    * @return int|null
    */
    public function getWrites()
    {
        return $this->container['writes'];
    }

    /**
    * Sets writes
    *
    * @param int|null $writes sqlserver IO写
    *
    * @return $this
    */
    public function setWrites($writes)
    {
        $this->container['writes'] = $writes;
        return $this;
    }

    /**
    * Gets appName
    *  sqlserver 应用名
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
    * @param string|null $appName sqlserver 应用名
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
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

