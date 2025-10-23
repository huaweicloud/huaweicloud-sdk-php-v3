<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FullSqlComponetResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FullSqlComponetResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * componentId  **参数解释**: 组件ID。 **取值范围**: 不涉及。
    * dbName  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    * schemaName  **参数解释**: schema名称。 **取值范围**: 不涉及。
    * originNode  **参数解释**: 原始节点。 **取值范围**: 不涉及。
    * username  **参数解释**: 用户名。 **取值范围**: 不涉及。
    * applicationName  **参数解释**: 用户发起的请求的应用程序名称。 **取值范围**: 不涉及。
    * clientAddr  **参数解释**: 用户发起的请求的客户端地址。 **取值范围**: 不涉及。
    * clientPort  **参数解释**: 用户发起请求的客户端端口。 **取值范围**: 不涉及。
    * parentSqlId  **参数解释**: 当前语句的外层SQL的归一化SQL ID。 **取值范围**: 不涉及。
    * sqlId  **参数解释**: 归一化SQL ID，对应内核字段：unique_sql_id。 **取值范围**: 不涉及。
    * sqlExecId  **参数解释**: 唯一SQL ID，对应内核字段：debug_query_id。 **取值范围**: 不涉及。
    * transactionId  **参数解释**: 事务ID，对应内核字段：debug_query_id。 **取值范围**: 不涉及。
    * traceId  **参数解释**: 链路ID。 **取值范围**: 不涉及。
    * query  **参数解释**: 归一化SQL。 **取值范围**: 不涉及。
    * threadId  **参数解释**: 线程ID。 **取值范围**: 不涉及。
    * sessionId  **参数解释**: 会话ID。 **取值范围**: 不涉及。
    * beginTime  **参数解释**: 开始时间，格式为“yyyy-mm-ddThh:mm:ss.SSSSSZ”。 **取值范围**: 不涉及。
    * endTime  **参数解释**: 结束时间，格式为“yyyy-mm-ddThh:mm:ss.SSSSSZ”。 **取值范围**: 不涉及。
    * slowQueryThreshold  **参数解释**: 慢SQL阈值。 **取值范围**: 不涉及。
    * nSoftParse  **参数解释**: 软解析次数。 **取值范围**: 不涉及。
    * nHardParse  **参数解释**: 硬解析次数。 **取值范围**: 不涉及。
    * queryPlan  **参数解释**: 执行计划。 **取值范围**: 不涉及。
    * nReturnRows  **参数解释**: SELECT语句的返回结果集行数。 **取值范围**: 不涉及。
    * nTuplesFetched  **参数解释**: 随机扫描行。 **取值范围**: 不涉及。
    * nTuplesReturned  **参数解释**: 顺序扫描行。 **取值范围**: 不涉及。
    * nTuplesInserted  **参数解释**: 插入行。 **取值范围**: 不涉及。
    * nTuplesUpdated  **参数解释**: 更新行。 **取值范围**: 不涉及。
    * nTuplesDeleted  **参数解释**: 删除行。 **取值范围**: 不涉及。
    * nBlocksFetched  **参数解释**: buffer的块访问次数。 **取值范围**: 不涉及。\"\"
    * nBlocksHit  **参数解释**: buffer的块命中次数。 **取值范围**: 不涉及。
    * dbTime  **参数解释**: 有效DB时间花费。 **取值范围**: 不涉及。
    * cpuTime  **参数解释**: CPU时间（单位：微秒）。 **取值范围**: 不涉及。
    * executionTime  **参数解释**: 执行器内执行时间（单位：微秒）。 **取值范围**: 不涉及。
    * parseTime  **参数解释**: SQL解析时间（单位：微秒）。 **取值范围**: 不涉及。
    * planTime  **参数解释**: 执行器内执行时间（单位：微秒）。 **取值范围**: 不涉及。
    * rewriteTime  **参数解释**: SQL重写时间（单位：微秒）。 **取值范围**: 不涉及。
    * plExecutionTime  **参数解释**: plpgsql上的执行时间（单位：微秒）。 **取值范围**: 不涉及。
    * plCompilationTime  **参数解释**: plpgsql上的编译时间（单位：微秒）。 **取值范围**: 不涉及。
    * dataIoTime  **参数解释**: IO时间（单位：微秒）。 **取值范围**: 不涉及。
    * lockCount  **参数解释**: 加锁次数。 **取值范围**: 不涉及。
    * lockTime  **参数解释**: 加锁耗时。 **取值范围**: 不涉及。
    * lockWaitCount  **参数解释**: 加锁等待次数。 **取值范围**: 不涉及。
    * lockWaitTime  **参数解释**: 加锁等待时间。 **取值范围**: 不涉及。
    * details  **参数解释**: 详细列表。 **取值范围**: 不涉及。
    * isSlowSql  **参数解释**: 是否慢SQL。 **取值范围**: 不涉及。
    * advise  **参数解释**: 可能导致该SQL为慢SQL的风险信息。 **取值范围**: 不涉及。
    * finishStatus  **参数解释**: 语句完成状态。 **取值范围**: 不涉及。
    * netSendInfo  **参数解释**: 通过物理连接发送消息的网络状态。 **取值范围**: 不涉及。
    * netRecvInfo  **参数解释**: 通过物理连接接收消息的网络状态。 **取值范围**: 不涉及。
    * netStreamSendInfo  **参数解释**: 通过逻辑连接发送消息的网络状态。 **取值范围**: 不涉及。
    * netStreamRecvInfo  **参数解释**: 通过逻辑连接接收消息的网络状态。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'componentId' => 'string',
            'dbName' => 'string',
            'schemaName' => 'string',
            'originNode' => 'string',
            'username' => 'string',
            'applicationName' => 'string',
            'clientAddr' => 'string',
            'clientPort' => 'string',
            'parentSqlId' => 'string',
            'sqlId' => 'string',
            'sqlExecId' => 'string',
            'transactionId' => 'string',
            'traceId' => 'string',
            'query' => 'string',
            'threadId' => 'string',
            'sessionId' => 'string',
            'beginTime' => 'string',
            'endTime' => 'string',
            'slowQueryThreshold' => 'int',
            'nSoftParse' => 'int',
            'nHardParse' => 'int',
            'queryPlan' => 'string',
            'nReturnRows' => 'int',
            'nTuplesFetched' => 'int',
            'nTuplesReturned' => 'int',
            'nTuplesInserted' => 'int',
            'nTuplesUpdated' => 'int',
            'nTuplesDeleted' => 'int',
            'nBlocksFetched' => 'int',
            'nBlocksHit' => 'int',
            'dbTime' => 'int',
            'cpuTime' => 'int',
            'executionTime' => 'int',
            'parseTime' => 'int',
            'planTime' => 'int',
            'rewriteTime' => 'int',
            'plExecutionTime' => 'int',
            'plCompilationTime' => 'int',
            'dataIoTime' => 'int',
            'lockCount' => 'int',
            'lockTime' => 'int',
            'lockWaitCount' => 'int',
            'lockWaitTime' => 'int',
            'details' => 'string',
            'isSlowSql' => 'bool',
            'advise' => 'string',
            'finishStatus' => 'string',
            'netSendInfo' => 'string',
            'netRecvInfo' => 'string',
            'netStreamSendInfo' => 'string',
            'netStreamRecvInfo' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * componentId  **参数解释**: 组件ID。 **取值范围**: 不涉及。
    * dbName  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    * schemaName  **参数解释**: schema名称。 **取值范围**: 不涉及。
    * originNode  **参数解释**: 原始节点。 **取值范围**: 不涉及。
    * username  **参数解释**: 用户名。 **取值范围**: 不涉及。
    * applicationName  **参数解释**: 用户发起的请求的应用程序名称。 **取值范围**: 不涉及。
    * clientAddr  **参数解释**: 用户发起的请求的客户端地址。 **取值范围**: 不涉及。
    * clientPort  **参数解释**: 用户发起请求的客户端端口。 **取值范围**: 不涉及。
    * parentSqlId  **参数解释**: 当前语句的外层SQL的归一化SQL ID。 **取值范围**: 不涉及。
    * sqlId  **参数解释**: 归一化SQL ID，对应内核字段：unique_sql_id。 **取值范围**: 不涉及。
    * sqlExecId  **参数解释**: 唯一SQL ID，对应内核字段：debug_query_id。 **取值范围**: 不涉及。
    * transactionId  **参数解释**: 事务ID，对应内核字段：debug_query_id。 **取值范围**: 不涉及。
    * traceId  **参数解释**: 链路ID。 **取值范围**: 不涉及。
    * query  **参数解释**: 归一化SQL。 **取值范围**: 不涉及。
    * threadId  **参数解释**: 线程ID。 **取值范围**: 不涉及。
    * sessionId  **参数解释**: 会话ID。 **取值范围**: 不涉及。
    * beginTime  **参数解释**: 开始时间，格式为“yyyy-mm-ddThh:mm:ss.SSSSSZ”。 **取值范围**: 不涉及。
    * endTime  **参数解释**: 结束时间，格式为“yyyy-mm-ddThh:mm:ss.SSSSSZ”。 **取值范围**: 不涉及。
    * slowQueryThreshold  **参数解释**: 慢SQL阈值。 **取值范围**: 不涉及。
    * nSoftParse  **参数解释**: 软解析次数。 **取值范围**: 不涉及。
    * nHardParse  **参数解释**: 硬解析次数。 **取值范围**: 不涉及。
    * queryPlan  **参数解释**: 执行计划。 **取值范围**: 不涉及。
    * nReturnRows  **参数解释**: SELECT语句的返回结果集行数。 **取值范围**: 不涉及。
    * nTuplesFetched  **参数解释**: 随机扫描行。 **取值范围**: 不涉及。
    * nTuplesReturned  **参数解释**: 顺序扫描行。 **取值范围**: 不涉及。
    * nTuplesInserted  **参数解释**: 插入行。 **取值范围**: 不涉及。
    * nTuplesUpdated  **参数解释**: 更新行。 **取值范围**: 不涉及。
    * nTuplesDeleted  **参数解释**: 删除行。 **取值范围**: 不涉及。
    * nBlocksFetched  **参数解释**: buffer的块访问次数。 **取值范围**: 不涉及。\"\"
    * nBlocksHit  **参数解释**: buffer的块命中次数。 **取值范围**: 不涉及。
    * dbTime  **参数解释**: 有效DB时间花费。 **取值范围**: 不涉及。
    * cpuTime  **参数解释**: CPU时间（单位：微秒）。 **取值范围**: 不涉及。
    * executionTime  **参数解释**: 执行器内执行时间（单位：微秒）。 **取值范围**: 不涉及。
    * parseTime  **参数解释**: SQL解析时间（单位：微秒）。 **取值范围**: 不涉及。
    * planTime  **参数解释**: 执行器内执行时间（单位：微秒）。 **取值范围**: 不涉及。
    * rewriteTime  **参数解释**: SQL重写时间（单位：微秒）。 **取值范围**: 不涉及。
    * plExecutionTime  **参数解释**: plpgsql上的执行时间（单位：微秒）。 **取值范围**: 不涉及。
    * plCompilationTime  **参数解释**: plpgsql上的编译时间（单位：微秒）。 **取值范围**: 不涉及。
    * dataIoTime  **参数解释**: IO时间（单位：微秒）。 **取值范围**: 不涉及。
    * lockCount  **参数解释**: 加锁次数。 **取值范围**: 不涉及。
    * lockTime  **参数解释**: 加锁耗时。 **取值范围**: 不涉及。
    * lockWaitCount  **参数解释**: 加锁等待次数。 **取值范围**: 不涉及。
    * lockWaitTime  **参数解释**: 加锁等待时间。 **取值范围**: 不涉及。
    * details  **参数解释**: 详细列表。 **取值范围**: 不涉及。
    * isSlowSql  **参数解释**: 是否慢SQL。 **取值范围**: 不涉及。
    * advise  **参数解释**: 可能导致该SQL为慢SQL的风险信息。 **取值范围**: 不涉及。
    * finishStatus  **参数解释**: 语句完成状态。 **取值范围**: 不涉及。
    * netSendInfo  **参数解释**: 通过物理连接发送消息的网络状态。 **取值范围**: 不涉及。
    * netRecvInfo  **参数解释**: 通过物理连接接收消息的网络状态。 **取值范围**: 不涉及。
    * netStreamSendInfo  **参数解释**: 通过逻辑连接发送消息的网络状态。 **取值范围**: 不涉及。
    * netStreamRecvInfo  **参数解释**: 通过逻辑连接接收消息的网络状态。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'componentId' => null,
        'dbName' => null,
        'schemaName' => null,
        'originNode' => null,
        'username' => null,
        'applicationName' => null,
        'clientAddr' => null,
        'clientPort' => null,
        'parentSqlId' => null,
        'sqlId' => null,
        'sqlExecId' => null,
        'transactionId' => null,
        'traceId' => null,
        'query' => null,
        'threadId' => null,
        'sessionId' => null,
        'beginTime' => null,
        'endTime' => null,
        'slowQueryThreshold' => 'int64',
        'nSoftParse' => 'int64',
        'nHardParse' => 'int64',
        'queryPlan' => null,
        'nReturnRows' => 'int64',
        'nTuplesFetched' => 'int64',
        'nTuplesReturned' => 'int64',
        'nTuplesInserted' => 'int64',
        'nTuplesUpdated' => 'int64',
        'nTuplesDeleted' => 'int64',
        'nBlocksFetched' => 'int64',
        'nBlocksHit' => 'int64',
        'dbTime' => 'int64',
        'cpuTime' => 'int64',
        'executionTime' => 'int64',
        'parseTime' => 'int64',
        'planTime' => 'int64',
        'rewriteTime' => 'int64',
        'plExecutionTime' => 'int64',
        'plCompilationTime' => 'int64',
        'dataIoTime' => 'int64',
        'lockCount' => 'int64',
        'lockTime' => 'int64',
        'lockWaitCount' => 'int64',
        'lockWaitTime' => 'int64',
        'details' => 'int64',
        'isSlowSql' => null,
        'advise' => null,
        'finishStatus' => null,
        'netSendInfo' => null,
        'netRecvInfo' => null,
        'netStreamSendInfo' => null,
        'netStreamRecvInfo' => null
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
    * componentId  **参数解释**: 组件ID。 **取值范围**: 不涉及。
    * dbName  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    * schemaName  **参数解释**: schema名称。 **取值范围**: 不涉及。
    * originNode  **参数解释**: 原始节点。 **取值范围**: 不涉及。
    * username  **参数解释**: 用户名。 **取值范围**: 不涉及。
    * applicationName  **参数解释**: 用户发起的请求的应用程序名称。 **取值范围**: 不涉及。
    * clientAddr  **参数解释**: 用户发起的请求的客户端地址。 **取值范围**: 不涉及。
    * clientPort  **参数解释**: 用户发起请求的客户端端口。 **取值范围**: 不涉及。
    * parentSqlId  **参数解释**: 当前语句的外层SQL的归一化SQL ID。 **取值范围**: 不涉及。
    * sqlId  **参数解释**: 归一化SQL ID，对应内核字段：unique_sql_id。 **取值范围**: 不涉及。
    * sqlExecId  **参数解释**: 唯一SQL ID，对应内核字段：debug_query_id。 **取值范围**: 不涉及。
    * transactionId  **参数解释**: 事务ID，对应内核字段：debug_query_id。 **取值范围**: 不涉及。
    * traceId  **参数解释**: 链路ID。 **取值范围**: 不涉及。
    * query  **参数解释**: 归一化SQL。 **取值范围**: 不涉及。
    * threadId  **参数解释**: 线程ID。 **取值范围**: 不涉及。
    * sessionId  **参数解释**: 会话ID。 **取值范围**: 不涉及。
    * beginTime  **参数解释**: 开始时间，格式为“yyyy-mm-ddThh:mm:ss.SSSSSZ”。 **取值范围**: 不涉及。
    * endTime  **参数解释**: 结束时间，格式为“yyyy-mm-ddThh:mm:ss.SSSSSZ”。 **取值范围**: 不涉及。
    * slowQueryThreshold  **参数解释**: 慢SQL阈值。 **取值范围**: 不涉及。
    * nSoftParse  **参数解释**: 软解析次数。 **取值范围**: 不涉及。
    * nHardParse  **参数解释**: 硬解析次数。 **取值范围**: 不涉及。
    * queryPlan  **参数解释**: 执行计划。 **取值范围**: 不涉及。
    * nReturnRows  **参数解释**: SELECT语句的返回结果集行数。 **取值范围**: 不涉及。
    * nTuplesFetched  **参数解释**: 随机扫描行。 **取值范围**: 不涉及。
    * nTuplesReturned  **参数解释**: 顺序扫描行。 **取值范围**: 不涉及。
    * nTuplesInserted  **参数解释**: 插入行。 **取值范围**: 不涉及。
    * nTuplesUpdated  **参数解释**: 更新行。 **取值范围**: 不涉及。
    * nTuplesDeleted  **参数解释**: 删除行。 **取值范围**: 不涉及。
    * nBlocksFetched  **参数解释**: buffer的块访问次数。 **取值范围**: 不涉及。\"\"
    * nBlocksHit  **参数解释**: buffer的块命中次数。 **取值范围**: 不涉及。
    * dbTime  **参数解释**: 有效DB时间花费。 **取值范围**: 不涉及。
    * cpuTime  **参数解释**: CPU时间（单位：微秒）。 **取值范围**: 不涉及。
    * executionTime  **参数解释**: 执行器内执行时间（单位：微秒）。 **取值范围**: 不涉及。
    * parseTime  **参数解释**: SQL解析时间（单位：微秒）。 **取值范围**: 不涉及。
    * planTime  **参数解释**: 执行器内执行时间（单位：微秒）。 **取值范围**: 不涉及。
    * rewriteTime  **参数解释**: SQL重写时间（单位：微秒）。 **取值范围**: 不涉及。
    * plExecutionTime  **参数解释**: plpgsql上的执行时间（单位：微秒）。 **取值范围**: 不涉及。
    * plCompilationTime  **参数解释**: plpgsql上的编译时间（单位：微秒）。 **取值范围**: 不涉及。
    * dataIoTime  **参数解释**: IO时间（单位：微秒）。 **取值范围**: 不涉及。
    * lockCount  **参数解释**: 加锁次数。 **取值范围**: 不涉及。
    * lockTime  **参数解释**: 加锁耗时。 **取值范围**: 不涉及。
    * lockWaitCount  **参数解释**: 加锁等待次数。 **取值范围**: 不涉及。
    * lockWaitTime  **参数解释**: 加锁等待时间。 **取值范围**: 不涉及。
    * details  **参数解释**: 详细列表。 **取值范围**: 不涉及。
    * isSlowSql  **参数解释**: 是否慢SQL。 **取值范围**: 不涉及。
    * advise  **参数解释**: 可能导致该SQL为慢SQL的风险信息。 **取值范围**: 不涉及。
    * finishStatus  **参数解释**: 语句完成状态。 **取值范围**: 不涉及。
    * netSendInfo  **参数解释**: 通过物理连接发送消息的网络状态。 **取值范围**: 不涉及。
    * netRecvInfo  **参数解释**: 通过物理连接接收消息的网络状态。 **取值范围**: 不涉及。
    * netStreamSendInfo  **参数解释**: 通过逻辑连接发送消息的网络状态。 **取值范围**: 不涉及。
    * netStreamRecvInfo  **参数解释**: 通过逻辑连接接收消息的网络状态。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'componentId' => 'component_id',
            'dbName' => 'db_name',
            'schemaName' => 'schema_name',
            'originNode' => 'origin_node',
            'username' => 'username',
            'applicationName' => 'application_name',
            'clientAddr' => 'client_addr',
            'clientPort' => 'client_port',
            'parentSqlId' => 'parent_sql_id',
            'sqlId' => 'sql_id',
            'sqlExecId' => 'sql_exec_id',
            'transactionId' => 'transaction_id',
            'traceId' => 'trace_id',
            'query' => 'query',
            'threadId' => 'thread_id',
            'sessionId' => 'session_id',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'slowQueryThreshold' => 'slow_query_threshold',
            'nSoftParse' => 'n_soft_parse',
            'nHardParse' => 'n_hard_parse',
            'queryPlan' => 'query_plan',
            'nReturnRows' => 'n_return_rows',
            'nTuplesFetched' => 'n_tuples_fetched',
            'nTuplesReturned' => 'n_tuples_returned',
            'nTuplesInserted' => 'n_tuples_inserted',
            'nTuplesUpdated' => 'n_tuples_updated',
            'nTuplesDeleted' => 'n_tuples_deleted',
            'nBlocksFetched' => 'n_blocks_fetched',
            'nBlocksHit' => 'n_blocks_hit',
            'dbTime' => 'db_time',
            'cpuTime' => 'cpu_time',
            'executionTime' => 'execution_time',
            'parseTime' => 'parse_time',
            'planTime' => 'plan_time',
            'rewriteTime' => 'rewrite_time',
            'plExecutionTime' => 'pl_execution_time',
            'plCompilationTime' => 'pl_compilation_time',
            'dataIoTime' => 'data_io_time',
            'lockCount' => 'lock_count',
            'lockTime' => 'lock_time',
            'lockWaitCount' => 'lock_wait_count',
            'lockWaitTime' => 'lock_wait_time',
            'details' => 'details',
            'isSlowSql' => 'is_slow_sql',
            'advise' => 'advise',
            'finishStatus' => 'finish_status',
            'netSendInfo' => 'net_send_info',
            'netRecvInfo' => 'net_recv_info',
            'netStreamSendInfo' => 'net_stream_send_info',
            'netStreamRecvInfo' => 'net_stream_recv_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * componentId  **参数解释**: 组件ID。 **取值范围**: 不涉及。
    * dbName  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    * schemaName  **参数解释**: schema名称。 **取值范围**: 不涉及。
    * originNode  **参数解释**: 原始节点。 **取值范围**: 不涉及。
    * username  **参数解释**: 用户名。 **取值范围**: 不涉及。
    * applicationName  **参数解释**: 用户发起的请求的应用程序名称。 **取值范围**: 不涉及。
    * clientAddr  **参数解释**: 用户发起的请求的客户端地址。 **取值范围**: 不涉及。
    * clientPort  **参数解释**: 用户发起请求的客户端端口。 **取值范围**: 不涉及。
    * parentSqlId  **参数解释**: 当前语句的外层SQL的归一化SQL ID。 **取值范围**: 不涉及。
    * sqlId  **参数解释**: 归一化SQL ID，对应内核字段：unique_sql_id。 **取值范围**: 不涉及。
    * sqlExecId  **参数解释**: 唯一SQL ID，对应内核字段：debug_query_id。 **取值范围**: 不涉及。
    * transactionId  **参数解释**: 事务ID，对应内核字段：debug_query_id。 **取值范围**: 不涉及。
    * traceId  **参数解释**: 链路ID。 **取值范围**: 不涉及。
    * query  **参数解释**: 归一化SQL。 **取值范围**: 不涉及。
    * threadId  **参数解释**: 线程ID。 **取值范围**: 不涉及。
    * sessionId  **参数解释**: 会话ID。 **取值范围**: 不涉及。
    * beginTime  **参数解释**: 开始时间，格式为“yyyy-mm-ddThh:mm:ss.SSSSSZ”。 **取值范围**: 不涉及。
    * endTime  **参数解释**: 结束时间，格式为“yyyy-mm-ddThh:mm:ss.SSSSSZ”。 **取值范围**: 不涉及。
    * slowQueryThreshold  **参数解释**: 慢SQL阈值。 **取值范围**: 不涉及。
    * nSoftParse  **参数解释**: 软解析次数。 **取值范围**: 不涉及。
    * nHardParse  **参数解释**: 硬解析次数。 **取值范围**: 不涉及。
    * queryPlan  **参数解释**: 执行计划。 **取值范围**: 不涉及。
    * nReturnRows  **参数解释**: SELECT语句的返回结果集行数。 **取值范围**: 不涉及。
    * nTuplesFetched  **参数解释**: 随机扫描行。 **取值范围**: 不涉及。
    * nTuplesReturned  **参数解释**: 顺序扫描行。 **取值范围**: 不涉及。
    * nTuplesInserted  **参数解释**: 插入行。 **取值范围**: 不涉及。
    * nTuplesUpdated  **参数解释**: 更新行。 **取值范围**: 不涉及。
    * nTuplesDeleted  **参数解释**: 删除行。 **取值范围**: 不涉及。
    * nBlocksFetched  **参数解释**: buffer的块访问次数。 **取值范围**: 不涉及。\"\"
    * nBlocksHit  **参数解释**: buffer的块命中次数。 **取值范围**: 不涉及。
    * dbTime  **参数解释**: 有效DB时间花费。 **取值范围**: 不涉及。
    * cpuTime  **参数解释**: CPU时间（单位：微秒）。 **取值范围**: 不涉及。
    * executionTime  **参数解释**: 执行器内执行时间（单位：微秒）。 **取值范围**: 不涉及。
    * parseTime  **参数解释**: SQL解析时间（单位：微秒）。 **取值范围**: 不涉及。
    * planTime  **参数解释**: 执行器内执行时间（单位：微秒）。 **取值范围**: 不涉及。
    * rewriteTime  **参数解释**: SQL重写时间（单位：微秒）。 **取值范围**: 不涉及。
    * plExecutionTime  **参数解释**: plpgsql上的执行时间（单位：微秒）。 **取值范围**: 不涉及。
    * plCompilationTime  **参数解释**: plpgsql上的编译时间（单位：微秒）。 **取值范围**: 不涉及。
    * dataIoTime  **参数解释**: IO时间（单位：微秒）。 **取值范围**: 不涉及。
    * lockCount  **参数解释**: 加锁次数。 **取值范围**: 不涉及。
    * lockTime  **参数解释**: 加锁耗时。 **取值范围**: 不涉及。
    * lockWaitCount  **参数解释**: 加锁等待次数。 **取值范围**: 不涉及。
    * lockWaitTime  **参数解释**: 加锁等待时间。 **取值范围**: 不涉及。
    * details  **参数解释**: 详细列表。 **取值范围**: 不涉及。
    * isSlowSql  **参数解释**: 是否慢SQL。 **取值范围**: 不涉及。
    * advise  **参数解释**: 可能导致该SQL为慢SQL的风险信息。 **取值范围**: 不涉及。
    * finishStatus  **参数解释**: 语句完成状态。 **取值范围**: 不涉及。
    * netSendInfo  **参数解释**: 通过物理连接发送消息的网络状态。 **取值范围**: 不涉及。
    * netRecvInfo  **参数解释**: 通过物理连接接收消息的网络状态。 **取值范围**: 不涉及。
    * netStreamSendInfo  **参数解释**: 通过逻辑连接发送消息的网络状态。 **取值范围**: 不涉及。
    * netStreamRecvInfo  **参数解释**: 通过逻辑连接接收消息的网络状态。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'componentId' => 'setComponentId',
            'dbName' => 'setDbName',
            'schemaName' => 'setSchemaName',
            'originNode' => 'setOriginNode',
            'username' => 'setUsername',
            'applicationName' => 'setApplicationName',
            'clientAddr' => 'setClientAddr',
            'clientPort' => 'setClientPort',
            'parentSqlId' => 'setParentSqlId',
            'sqlId' => 'setSqlId',
            'sqlExecId' => 'setSqlExecId',
            'transactionId' => 'setTransactionId',
            'traceId' => 'setTraceId',
            'query' => 'setQuery',
            'threadId' => 'setThreadId',
            'sessionId' => 'setSessionId',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'slowQueryThreshold' => 'setSlowQueryThreshold',
            'nSoftParse' => 'setNSoftParse',
            'nHardParse' => 'setNHardParse',
            'queryPlan' => 'setQueryPlan',
            'nReturnRows' => 'setNReturnRows',
            'nTuplesFetched' => 'setNTuplesFetched',
            'nTuplesReturned' => 'setNTuplesReturned',
            'nTuplesInserted' => 'setNTuplesInserted',
            'nTuplesUpdated' => 'setNTuplesUpdated',
            'nTuplesDeleted' => 'setNTuplesDeleted',
            'nBlocksFetched' => 'setNBlocksFetched',
            'nBlocksHit' => 'setNBlocksHit',
            'dbTime' => 'setDbTime',
            'cpuTime' => 'setCpuTime',
            'executionTime' => 'setExecutionTime',
            'parseTime' => 'setParseTime',
            'planTime' => 'setPlanTime',
            'rewriteTime' => 'setRewriteTime',
            'plExecutionTime' => 'setPlExecutionTime',
            'plCompilationTime' => 'setPlCompilationTime',
            'dataIoTime' => 'setDataIoTime',
            'lockCount' => 'setLockCount',
            'lockTime' => 'setLockTime',
            'lockWaitCount' => 'setLockWaitCount',
            'lockWaitTime' => 'setLockWaitTime',
            'details' => 'setDetails',
            'isSlowSql' => 'setIsSlowSql',
            'advise' => 'setAdvise',
            'finishStatus' => 'setFinishStatus',
            'netSendInfo' => 'setNetSendInfo',
            'netRecvInfo' => 'setNetRecvInfo',
            'netStreamSendInfo' => 'setNetStreamSendInfo',
            'netStreamRecvInfo' => 'setNetStreamRecvInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * componentId  **参数解释**: 组件ID。 **取值范围**: 不涉及。
    * dbName  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    * schemaName  **参数解释**: schema名称。 **取值范围**: 不涉及。
    * originNode  **参数解释**: 原始节点。 **取值范围**: 不涉及。
    * username  **参数解释**: 用户名。 **取值范围**: 不涉及。
    * applicationName  **参数解释**: 用户发起的请求的应用程序名称。 **取值范围**: 不涉及。
    * clientAddr  **参数解释**: 用户发起的请求的客户端地址。 **取值范围**: 不涉及。
    * clientPort  **参数解释**: 用户发起请求的客户端端口。 **取值范围**: 不涉及。
    * parentSqlId  **参数解释**: 当前语句的外层SQL的归一化SQL ID。 **取值范围**: 不涉及。
    * sqlId  **参数解释**: 归一化SQL ID，对应内核字段：unique_sql_id。 **取值范围**: 不涉及。
    * sqlExecId  **参数解释**: 唯一SQL ID，对应内核字段：debug_query_id。 **取值范围**: 不涉及。
    * transactionId  **参数解释**: 事务ID，对应内核字段：debug_query_id。 **取值范围**: 不涉及。
    * traceId  **参数解释**: 链路ID。 **取值范围**: 不涉及。
    * query  **参数解释**: 归一化SQL。 **取值范围**: 不涉及。
    * threadId  **参数解释**: 线程ID。 **取值范围**: 不涉及。
    * sessionId  **参数解释**: 会话ID。 **取值范围**: 不涉及。
    * beginTime  **参数解释**: 开始时间，格式为“yyyy-mm-ddThh:mm:ss.SSSSSZ”。 **取值范围**: 不涉及。
    * endTime  **参数解释**: 结束时间，格式为“yyyy-mm-ddThh:mm:ss.SSSSSZ”。 **取值范围**: 不涉及。
    * slowQueryThreshold  **参数解释**: 慢SQL阈值。 **取值范围**: 不涉及。
    * nSoftParse  **参数解释**: 软解析次数。 **取值范围**: 不涉及。
    * nHardParse  **参数解释**: 硬解析次数。 **取值范围**: 不涉及。
    * queryPlan  **参数解释**: 执行计划。 **取值范围**: 不涉及。
    * nReturnRows  **参数解释**: SELECT语句的返回结果集行数。 **取值范围**: 不涉及。
    * nTuplesFetched  **参数解释**: 随机扫描行。 **取值范围**: 不涉及。
    * nTuplesReturned  **参数解释**: 顺序扫描行。 **取值范围**: 不涉及。
    * nTuplesInserted  **参数解释**: 插入行。 **取值范围**: 不涉及。
    * nTuplesUpdated  **参数解释**: 更新行。 **取值范围**: 不涉及。
    * nTuplesDeleted  **参数解释**: 删除行。 **取值范围**: 不涉及。
    * nBlocksFetched  **参数解释**: buffer的块访问次数。 **取值范围**: 不涉及。\"\"
    * nBlocksHit  **参数解释**: buffer的块命中次数。 **取值范围**: 不涉及。
    * dbTime  **参数解释**: 有效DB时间花费。 **取值范围**: 不涉及。
    * cpuTime  **参数解释**: CPU时间（单位：微秒）。 **取值范围**: 不涉及。
    * executionTime  **参数解释**: 执行器内执行时间（单位：微秒）。 **取值范围**: 不涉及。
    * parseTime  **参数解释**: SQL解析时间（单位：微秒）。 **取值范围**: 不涉及。
    * planTime  **参数解释**: 执行器内执行时间（单位：微秒）。 **取值范围**: 不涉及。
    * rewriteTime  **参数解释**: SQL重写时间（单位：微秒）。 **取值范围**: 不涉及。
    * plExecutionTime  **参数解释**: plpgsql上的执行时间（单位：微秒）。 **取值范围**: 不涉及。
    * plCompilationTime  **参数解释**: plpgsql上的编译时间（单位：微秒）。 **取值范围**: 不涉及。
    * dataIoTime  **参数解释**: IO时间（单位：微秒）。 **取值范围**: 不涉及。
    * lockCount  **参数解释**: 加锁次数。 **取值范围**: 不涉及。
    * lockTime  **参数解释**: 加锁耗时。 **取值范围**: 不涉及。
    * lockWaitCount  **参数解释**: 加锁等待次数。 **取值范围**: 不涉及。
    * lockWaitTime  **参数解释**: 加锁等待时间。 **取值范围**: 不涉及。
    * details  **参数解释**: 详细列表。 **取值范围**: 不涉及。
    * isSlowSql  **参数解释**: 是否慢SQL。 **取值范围**: 不涉及。
    * advise  **参数解释**: 可能导致该SQL为慢SQL的风险信息。 **取值范围**: 不涉及。
    * finishStatus  **参数解释**: 语句完成状态。 **取值范围**: 不涉及。
    * netSendInfo  **参数解释**: 通过物理连接发送消息的网络状态。 **取值范围**: 不涉及。
    * netRecvInfo  **参数解释**: 通过物理连接接收消息的网络状态。 **取值范围**: 不涉及。
    * netStreamSendInfo  **参数解释**: 通过逻辑连接发送消息的网络状态。 **取值范围**: 不涉及。
    * netStreamRecvInfo  **参数解释**: 通过逻辑连接接收消息的网络状态。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'componentId' => 'getComponentId',
            'dbName' => 'getDbName',
            'schemaName' => 'getSchemaName',
            'originNode' => 'getOriginNode',
            'username' => 'getUsername',
            'applicationName' => 'getApplicationName',
            'clientAddr' => 'getClientAddr',
            'clientPort' => 'getClientPort',
            'parentSqlId' => 'getParentSqlId',
            'sqlId' => 'getSqlId',
            'sqlExecId' => 'getSqlExecId',
            'transactionId' => 'getTransactionId',
            'traceId' => 'getTraceId',
            'query' => 'getQuery',
            'threadId' => 'getThreadId',
            'sessionId' => 'getSessionId',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'slowQueryThreshold' => 'getSlowQueryThreshold',
            'nSoftParse' => 'getNSoftParse',
            'nHardParse' => 'getNHardParse',
            'queryPlan' => 'getQueryPlan',
            'nReturnRows' => 'getNReturnRows',
            'nTuplesFetched' => 'getNTuplesFetched',
            'nTuplesReturned' => 'getNTuplesReturned',
            'nTuplesInserted' => 'getNTuplesInserted',
            'nTuplesUpdated' => 'getNTuplesUpdated',
            'nTuplesDeleted' => 'getNTuplesDeleted',
            'nBlocksFetched' => 'getNBlocksFetched',
            'nBlocksHit' => 'getNBlocksHit',
            'dbTime' => 'getDbTime',
            'cpuTime' => 'getCpuTime',
            'executionTime' => 'getExecutionTime',
            'parseTime' => 'getParseTime',
            'planTime' => 'getPlanTime',
            'rewriteTime' => 'getRewriteTime',
            'plExecutionTime' => 'getPlExecutionTime',
            'plCompilationTime' => 'getPlCompilationTime',
            'dataIoTime' => 'getDataIoTime',
            'lockCount' => 'getLockCount',
            'lockTime' => 'getLockTime',
            'lockWaitCount' => 'getLockWaitCount',
            'lockWaitTime' => 'getLockWaitTime',
            'details' => 'getDetails',
            'isSlowSql' => 'getIsSlowSql',
            'advise' => 'getAdvise',
            'finishStatus' => 'getFinishStatus',
            'netSendInfo' => 'getNetSendInfo',
            'netRecvInfo' => 'getNetRecvInfo',
            'netStreamSendInfo' => 'getNetStreamSendInfo',
            'netStreamRecvInfo' => 'getNetStreamRecvInfo'
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
        $this->container['componentId'] = isset($data['componentId']) ? $data['componentId'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['schemaName'] = isset($data['schemaName']) ? $data['schemaName'] : null;
        $this->container['originNode'] = isset($data['originNode']) ? $data['originNode'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['applicationName'] = isset($data['applicationName']) ? $data['applicationName'] : null;
        $this->container['clientAddr'] = isset($data['clientAddr']) ? $data['clientAddr'] : null;
        $this->container['clientPort'] = isset($data['clientPort']) ? $data['clientPort'] : null;
        $this->container['parentSqlId'] = isset($data['parentSqlId']) ? $data['parentSqlId'] : null;
        $this->container['sqlId'] = isset($data['sqlId']) ? $data['sqlId'] : null;
        $this->container['sqlExecId'] = isset($data['sqlExecId']) ? $data['sqlExecId'] : null;
        $this->container['transactionId'] = isset($data['transactionId']) ? $data['transactionId'] : null;
        $this->container['traceId'] = isset($data['traceId']) ? $data['traceId'] : null;
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['threadId'] = isset($data['threadId']) ? $data['threadId'] : null;
        $this->container['sessionId'] = isset($data['sessionId']) ? $data['sessionId'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['slowQueryThreshold'] = isset($data['slowQueryThreshold']) ? $data['slowQueryThreshold'] : null;
        $this->container['nSoftParse'] = isset($data['nSoftParse']) ? $data['nSoftParse'] : null;
        $this->container['nHardParse'] = isset($data['nHardParse']) ? $data['nHardParse'] : null;
        $this->container['queryPlan'] = isset($data['queryPlan']) ? $data['queryPlan'] : null;
        $this->container['nReturnRows'] = isset($data['nReturnRows']) ? $data['nReturnRows'] : null;
        $this->container['nTuplesFetched'] = isset($data['nTuplesFetched']) ? $data['nTuplesFetched'] : null;
        $this->container['nTuplesReturned'] = isset($data['nTuplesReturned']) ? $data['nTuplesReturned'] : null;
        $this->container['nTuplesInserted'] = isset($data['nTuplesInserted']) ? $data['nTuplesInserted'] : null;
        $this->container['nTuplesUpdated'] = isset($data['nTuplesUpdated']) ? $data['nTuplesUpdated'] : null;
        $this->container['nTuplesDeleted'] = isset($data['nTuplesDeleted']) ? $data['nTuplesDeleted'] : null;
        $this->container['nBlocksFetched'] = isset($data['nBlocksFetched']) ? $data['nBlocksFetched'] : null;
        $this->container['nBlocksHit'] = isset($data['nBlocksHit']) ? $data['nBlocksHit'] : null;
        $this->container['dbTime'] = isset($data['dbTime']) ? $data['dbTime'] : null;
        $this->container['cpuTime'] = isset($data['cpuTime']) ? $data['cpuTime'] : null;
        $this->container['executionTime'] = isset($data['executionTime']) ? $data['executionTime'] : null;
        $this->container['parseTime'] = isset($data['parseTime']) ? $data['parseTime'] : null;
        $this->container['planTime'] = isset($data['planTime']) ? $data['planTime'] : null;
        $this->container['rewriteTime'] = isset($data['rewriteTime']) ? $data['rewriteTime'] : null;
        $this->container['plExecutionTime'] = isset($data['plExecutionTime']) ? $data['plExecutionTime'] : null;
        $this->container['plCompilationTime'] = isset($data['plCompilationTime']) ? $data['plCompilationTime'] : null;
        $this->container['dataIoTime'] = isset($data['dataIoTime']) ? $data['dataIoTime'] : null;
        $this->container['lockCount'] = isset($data['lockCount']) ? $data['lockCount'] : null;
        $this->container['lockTime'] = isset($data['lockTime']) ? $data['lockTime'] : null;
        $this->container['lockWaitCount'] = isset($data['lockWaitCount']) ? $data['lockWaitCount'] : null;
        $this->container['lockWaitTime'] = isset($data['lockWaitTime']) ? $data['lockWaitTime'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['isSlowSql'] = isset($data['isSlowSql']) ? $data['isSlowSql'] : null;
        $this->container['advise'] = isset($data['advise']) ? $data['advise'] : null;
        $this->container['finishStatus'] = isset($data['finishStatus']) ? $data['finishStatus'] : null;
        $this->container['netSendInfo'] = isset($data['netSendInfo']) ? $data['netSendInfo'] : null;
        $this->container['netRecvInfo'] = isset($data['netRecvInfo']) ? $data['netRecvInfo'] : null;
        $this->container['netStreamSendInfo'] = isset($data['netStreamSendInfo']) ? $data['netStreamSendInfo'] : null;
        $this->container['netStreamRecvInfo'] = isset($data['netStreamRecvInfo']) ? $data['netStreamRecvInfo'] : null;
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
    * Gets componentId
    *  **参数解释**: 组件ID。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getComponentId()
    {
        return $this->container['componentId'];
    }

    /**
    * Sets componentId
    *
    * @param string|null $componentId **参数解释**: 组件ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setComponentId($componentId)
    {
        $this->container['componentId'] = $componentId;
        return $this;
    }

    /**
    * Gets dbName
    *  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getDbName()
    {
        return $this->container['dbName'];
    }

    /**
    * Sets dbName
    *
    * @param string|null $dbName **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets schemaName
    *  **参数解释**: schema名称。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getSchemaName()
    {
        return $this->container['schemaName'];
    }

    /**
    * Sets schemaName
    *
    * @param string|null $schemaName **参数解释**: schema名称。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setSchemaName($schemaName)
    {
        $this->container['schemaName'] = $schemaName;
        return $this;
    }

    /**
    * Gets originNode
    *  **参数解释**: 原始节点。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getOriginNode()
    {
        return $this->container['originNode'];
    }

    /**
    * Sets originNode
    *
    * @param string|null $originNode **参数解释**: 原始节点。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setOriginNode($originNode)
    {
        $this->container['originNode'] = $originNode;
        return $this;
    }

    /**
    * Gets username
    *  **参数解释**: 用户名。 **取值范围**: 不涉及。
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
    * @param string|null $username **参数解释**: 用户名。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setUsername($username)
    {
        $this->container['username'] = $username;
        return $this;
    }

    /**
    * Gets applicationName
    *  **参数解释**: 用户发起的请求的应用程序名称。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getApplicationName()
    {
        return $this->container['applicationName'];
    }

    /**
    * Sets applicationName
    *
    * @param string|null $applicationName **参数解释**: 用户发起的请求的应用程序名称。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setApplicationName($applicationName)
    {
        $this->container['applicationName'] = $applicationName;
        return $this;
    }

    /**
    * Gets clientAddr
    *  **参数解释**: 用户发起的请求的客户端地址。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getClientAddr()
    {
        return $this->container['clientAddr'];
    }

    /**
    * Sets clientAddr
    *
    * @param string|null $clientAddr **参数解释**: 用户发起的请求的客户端地址。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setClientAddr($clientAddr)
    {
        $this->container['clientAddr'] = $clientAddr;
        return $this;
    }

    /**
    * Gets clientPort
    *  **参数解释**: 用户发起请求的客户端端口。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getClientPort()
    {
        return $this->container['clientPort'];
    }

    /**
    * Sets clientPort
    *
    * @param string|null $clientPort **参数解释**: 用户发起请求的客户端端口。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setClientPort($clientPort)
    {
        $this->container['clientPort'] = $clientPort;
        return $this;
    }

    /**
    * Gets parentSqlId
    *  **参数解释**: 当前语句的外层SQL的归一化SQL ID。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getParentSqlId()
    {
        return $this->container['parentSqlId'];
    }

    /**
    * Sets parentSqlId
    *
    * @param string|null $parentSqlId **参数解释**: 当前语句的外层SQL的归一化SQL ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setParentSqlId($parentSqlId)
    {
        $this->container['parentSqlId'] = $parentSqlId;
        return $this;
    }

    /**
    * Gets sqlId
    *  **参数解释**: 归一化SQL ID，对应内核字段：unique_sql_id。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getSqlId()
    {
        return $this->container['sqlId'];
    }

    /**
    * Sets sqlId
    *
    * @param string|null $sqlId **参数解释**: 归一化SQL ID，对应内核字段：unique_sql_id。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setSqlId($sqlId)
    {
        $this->container['sqlId'] = $sqlId;
        return $this;
    }

    /**
    * Gets sqlExecId
    *  **参数解释**: 唯一SQL ID，对应内核字段：debug_query_id。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getSqlExecId()
    {
        return $this->container['sqlExecId'];
    }

    /**
    * Sets sqlExecId
    *
    * @param string|null $sqlExecId **参数解释**: 唯一SQL ID，对应内核字段：debug_query_id。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setSqlExecId($sqlExecId)
    {
        $this->container['sqlExecId'] = $sqlExecId;
        return $this;
    }

    /**
    * Gets transactionId
    *  **参数解释**: 事务ID，对应内核字段：debug_query_id。 **取值范围**: 不涉及。
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
    * @param string|null $transactionId **参数解释**: 事务ID，对应内核字段：debug_query_id。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setTransactionId($transactionId)
    {
        $this->container['transactionId'] = $transactionId;
        return $this;
    }

    /**
    * Gets traceId
    *  **参数解释**: 链路ID。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getTraceId()
    {
        return $this->container['traceId'];
    }

    /**
    * Sets traceId
    *
    * @param string|null $traceId **参数解释**: 链路ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setTraceId($traceId)
    {
        $this->container['traceId'] = $traceId;
        return $this;
    }

    /**
    * Gets query
    *  **参数解释**: 归一化SQL。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
    * Sets query
    *
    * @param string|null $query **参数解释**: 归一化SQL。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setQuery($query)
    {
        $this->container['query'] = $query;
        return $this;
    }

    /**
    * Gets threadId
    *  **参数解释**: 线程ID。 **取值范围**: 不涉及。
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
    * @param string|null $threadId **参数解释**: 线程ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setThreadId($threadId)
    {
        $this->container['threadId'] = $threadId;
        return $this;
    }

    /**
    * Gets sessionId
    *  **参数解释**: 会话ID。 **取值范围**: 不涉及。
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
    * @param string|null $sessionId **参数解释**: 会话ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setSessionId($sessionId)
    {
        $this->container['sessionId'] = $sessionId;
        return $this;
    }

    /**
    * Gets beginTime
    *  **参数解释**: 开始时间，格式为“yyyy-mm-ddThh:mm:ss.SSSSSZ”。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param string|null $beginTime **参数解释**: 开始时间，格式为“yyyy-mm-ddThh:mm:ss.SSSSSZ”。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets endTime
    *  **参数解释**: 结束时间，格式为“yyyy-mm-ddThh:mm:ss.SSSSSZ”。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime **参数解释**: 结束时间，格式为“yyyy-mm-ddThh:mm:ss.SSSSSZ”。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets slowQueryThreshold
    *  **参数解释**: 慢SQL阈值。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getSlowQueryThreshold()
    {
        return $this->container['slowQueryThreshold'];
    }

    /**
    * Sets slowQueryThreshold
    *
    * @param int|null $slowQueryThreshold **参数解释**: 慢SQL阈值。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setSlowQueryThreshold($slowQueryThreshold)
    {
        $this->container['slowQueryThreshold'] = $slowQueryThreshold;
        return $this;
    }

    /**
    * Gets nSoftParse
    *  **参数解释**: 软解析次数。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getNSoftParse()
    {
        return $this->container['nSoftParse'];
    }

    /**
    * Sets nSoftParse
    *
    * @param int|null $nSoftParse **参数解释**: 软解析次数。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setNSoftParse($nSoftParse)
    {
        $this->container['nSoftParse'] = $nSoftParse;
        return $this;
    }

    /**
    * Gets nHardParse
    *  **参数解释**: 硬解析次数。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getNHardParse()
    {
        return $this->container['nHardParse'];
    }

    /**
    * Sets nHardParse
    *
    * @param int|null $nHardParse **参数解释**: 硬解析次数。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setNHardParse($nHardParse)
    {
        $this->container['nHardParse'] = $nHardParse;
        return $this;
    }

    /**
    * Gets queryPlan
    *  **参数解释**: 执行计划。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getQueryPlan()
    {
        return $this->container['queryPlan'];
    }

    /**
    * Sets queryPlan
    *
    * @param string|null $queryPlan **参数解释**: 执行计划。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setQueryPlan($queryPlan)
    {
        $this->container['queryPlan'] = $queryPlan;
        return $this;
    }

    /**
    * Gets nReturnRows
    *  **参数解释**: SELECT语句的返回结果集行数。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getNReturnRows()
    {
        return $this->container['nReturnRows'];
    }

    /**
    * Sets nReturnRows
    *
    * @param int|null $nReturnRows **参数解释**: SELECT语句的返回结果集行数。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setNReturnRows($nReturnRows)
    {
        $this->container['nReturnRows'] = $nReturnRows;
        return $this;
    }

    /**
    * Gets nTuplesFetched
    *  **参数解释**: 随机扫描行。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getNTuplesFetched()
    {
        return $this->container['nTuplesFetched'];
    }

    /**
    * Sets nTuplesFetched
    *
    * @param int|null $nTuplesFetched **参数解释**: 随机扫描行。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setNTuplesFetched($nTuplesFetched)
    {
        $this->container['nTuplesFetched'] = $nTuplesFetched;
        return $this;
    }

    /**
    * Gets nTuplesReturned
    *  **参数解释**: 顺序扫描行。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getNTuplesReturned()
    {
        return $this->container['nTuplesReturned'];
    }

    /**
    * Sets nTuplesReturned
    *
    * @param int|null $nTuplesReturned **参数解释**: 顺序扫描行。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setNTuplesReturned($nTuplesReturned)
    {
        $this->container['nTuplesReturned'] = $nTuplesReturned;
        return $this;
    }

    /**
    * Gets nTuplesInserted
    *  **参数解释**: 插入行。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getNTuplesInserted()
    {
        return $this->container['nTuplesInserted'];
    }

    /**
    * Sets nTuplesInserted
    *
    * @param int|null $nTuplesInserted **参数解释**: 插入行。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setNTuplesInserted($nTuplesInserted)
    {
        $this->container['nTuplesInserted'] = $nTuplesInserted;
        return $this;
    }

    /**
    * Gets nTuplesUpdated
    *  **参数解释**: 更新行。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getNTuplesUpdated()
    {
        return $this->container['nTuplesUpdated'];
    }

    /**
    * Sets nTuplesUpdated
    *
    * @param int|null $nTuplesUpdated **参数解释**: 更新行。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setNTuplesUpdated($nTuplesUpdated)
    {
        $this->container['nTuplesUpdated'] = $nTuplesUpdated;
        return $this;
    }

    /**
    * Gets nTuplesDeleted
    *  **参数解释**: 删除行。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getNTuplesDeleted()
    {
        return $this->container['nTuplesDeleted'];
    }

    /**
    * Sets nTuplesDeleted
    *
    * @param int|null $nTuplesDeleted **参数解释**: 删除行。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setNTuplesDeleted($nTuplesDeleted)
    {
        $this->container['nTuplesDeleted'] = $nTuplesDeleted;
        return $this;
    }

    /**
    * Gets nBlocksFetched
    *  **参数解释**: buffer的块访问次数。 **取值范围**: 不涉及。\"\"
    *
    * @return int|null
    */
    public function getNBlocksFetched()
    {
        return $this->container['nBlocksFetched'];
    }

    /**
    * Sets nBlocksFetched
    *
    * @param int|null $nBlocksFetched **参数解释**: buffer的块访问次数。 **取值范围**: 不涉及。\"\"
    *
    * @return $this
    */
    public function setNBlocksFetched($nBlocksFetched)
    {
        $this->container['nBlocksFetched'] = $nBlocksFetched;
        return $this;
    }

    /**
    * Gets nBlocksHit
    *  **参数解释**: buffer的块命中次数。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getNBlocksHit()
    {
        return $this->container['nBlocksHit'];
    }

    /**
    * Sets nBlocksHit
    *
    * @param int|null $nBlocksHit **参数解释**: buffer的块命中次数。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setNBlocksHit($nBlocksHit)
    {
        $this->container['nBlocksHit'] = $nBlocksHit;
        return $this;
    }

    /**
    * Gets dbTime
    *  **参数解释**: 有效DB时间花费。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getDbTime()
    {
        return $this->container['dbTime'];
    }

    /**
    * Sets dbTime
    *
    * @param int|null $dbTime **参数解释**: 有效DB时间花费。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setDbTime($dbTime)
    {
        $this->container['dbTime'] = $dbTime;
        return $this;
    }

    /**
    * Gets cpuTime
    *  **参数解释**: CPU时间（单位：微秒）。 **取值范围**: 不涉及。
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
    * @param int|null $cpuTime **参数解释**: CPU时间（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setCpuTime($cpuTime)
    {
        $this->container['cpuTime'] = $cpuTime;
        return $this;
    }

    /**
    * Gets executionTime
    *  **参数解释**: 执行器内执行时间（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getExecutionTime()
    {
        return $this->container['executionTime'];
    }

    /**
    * Sets executionTime
    *
    * @param int|null $executionTime **参数解释**: 执行器内执行时间（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setExecutionTime($executionTime)
    {
        $this->container['executionTime'] = $executionTime;
        return $this;
    }

    /**
    * Gets parseTime
    *  **参数解释**: SQL解析时间（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getParseTime()
    {
        return $this->container['parseTime'];
    }

    /**
    * Sets parseTime
    *
    * @param int|null $parseTime **参数解释**: SQL解析时间（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setParseTime($parseTime)
    {
        $this->container['parseTime'] = $parseTime;
        return $this;
    }

    /**
    * Gets planTime
    *  **参数解释**: 执行器内执行时间（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getPlanTime()
    {
        return $this->container['planTime'];
    }

    /**
    * Sets planTime
    *
    * @param int|null $planTime **参数解释**: 执行器内执行时间（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setPlanTime($planTime)
    {
        $this->container['planTime'] = $planTime;
        return $this;
    }

    /**
    * Gets rewriteTime
    *  **参数解释**: SQL重写时间（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getRewriteTime()
    {
        return $this->container['rewriteTime'];
    }

    /**
    * Sets rewriteTime
    *
    * @param int|null $rewriteTime **参数解释**: SQL重写时间（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setRewriteTime($rewriteTime)
    {
        $this->container['rewriteTime'] = $rewriteTime;
        return $this;
    }

    /**
    * Gets plExecutionTime
    *  **参数解释**: plpgsql上的执行时间（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getPlExecutionTime()
    {
        return $this->container['plExecutionTime'];
    }

    /**
    * Sets plExecutionTime
    *
    * @param int|null $plExecutionTime **参数解释**: plpgsql上的执行时间（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setPlExecutionTime($plExecutionTime)
    {
        $this->container['plExecutionTime'] = $plExecutionTime;
        return $this;
    }

    /**
    * Gets plCompilationTime
    *  **参数解释**: plpgsql上的编译时间（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getPlCompilationTime()
    {
        return $this->container['plCompilationTime'];
    }

    /**
    * Sets plCompilationTime
    *
    * @param int|null $plCompilationTime **参数解释**: plpgsql上的编译时间（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setPlCompilationTime($plCompilationTime)
    {
        $this->container['plCompilationTime'] = $plCompilationTime;
        return $this;
    }

    /**
    * Gets dataIoTime
    *  **参数解释**: IO时间（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getDataIoTime()
    {
        return $this->container['dataIoTime'];
    }

    /**
    * Sets dataIoTime
    *
    * @param int|null $dataIoTime **参数解释**: IO时间（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setDataIoTime($dataIoTime)
    {
        $this->container['dataIoTime'] = $dataIoTime;
        return $this;
    }

    /**
    * Gets lockCount
    *  **参数解释**: 加锁次数。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getLockCount()
    {
        return $this->container['lockCount'];
    }

    /**
    * Sets lockCount
    *
    * @param int|null $lockCount **参数解释**: 加锁次数。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setLockCount($lockCount)
    {
        $this->container['lockCount'] = $lockCount;
        return $this;
    }

    /**
    * Gets lockTime
    *  **参数解释**: 加锁耗时。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getLockTime()
    {
        return $this->container['lockTime'];
    }

    /**
    * Sets lockTime
    *
    * @param int|null $lockTime **参数解释**: 加锁耗时。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setLockTime($lockTime)
    {
        $this->container['lockTime'] = $lockTime;
        return $this;
    }

    /**
    * Gets lockWaitCount
    *  **参数解释**: 加锁等待次数。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getLockWaitCount()
    {
        return $this->container['lockWaitCount'];
    }

    /**
    * Sets lockWaitCount
    *
    * @param int|null $lockWaitCount **参数解释**: 加锁等待次数。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setLockWaitCount($lockWaitCount)
    {
        $this->container['lockWaitCount'] = $lockWaitCount;
        return $this;
    }

    /**
    * Gets lockWaitTime
    *  **参数解释**: 加锁等待时间。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getLockWaitTime()
    {
        return $this->container['lockWaitTime'];
    }

    /**
    * Sets lockWaitTime
    *
    * @param int|null $lockWaitTime **参数解释**: 加锁等待时间。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setLockWaitTime($lockWaitTime)
    {
        $this->container['lockWaitTime'] = $lockWaitTime;
        return $this;
    }

    /**
    * Gets details
    *  **参数解释**: 详细列表。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
    * Sets details
    *
    * @param string|null $details **参数解释**: 详细列表。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setDetails($details)
    {
        $this->container['details'] = $details;
        return $this;
    }

    /**
    * Gets isSlowSql
    *  **参数解释**: 是否慢SQL。 **取值范围**: 不涉及。
    *
    * @return bool|null
    */
    public function getIsSlowSql()
    {
        return $this->container['isSlowSql'];
    }

    /**
    * Sets isSlowSql
    *
    * @param bool|null $isSlowSql **参数解释**: 是否慢SQL。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setIsSlowSql($isSlowSql)
    {
        $this->container['isSlowSql'] = $isSlowSql;
        return $this;
    }

    /**
    * Gets advise
    *  **参数解释**: 可能导致该SQL为慢SQL的风险信息。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getAdvise()
    {
        return $this->container['advise'];
    }

    /**
    * Sets advise
    *
    * @param string|null $advise **参数解释**: 可能导致该SQL为慢SQL的风险信息。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setAdvise($advise)
    {
        $this->container['advise'] = $advise;
        return $this;
    }

    /**
    * Gets finishStatus
    *  **参数解释**: 语句完成状态。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getFinishStatus()
    {
        return $this->container['finishStatus'];
    }

    /**
    * Sets finishStatus
    *
    * @param string|null $finishStatus **参数解释**: 语句完成状态。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setFinishStatus($finishStatus)
    {
        $this->container['finishStatus'] = $finishStatus;
        return $this;
    }

    /**
    * Gets netSendInfo
    *  **参数解释**: 通过物理连接发送消息的网络状态。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getNetSendInfo()
    {
        return $this->container['netSendInfo'];
    }

    /**
    * Sets netSendInfo
    *
    * @param string|null $netSendInfo **参数解释**: 通过物理连接发送消息的网络状态。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setNetSendInfo($netSendInfo)
    {
        $this->container['netSendInfo'] = $netSendInfo;
        return $this;
    }

    /**
    * Gets netRecvInfo
    *  **参数解释**: 通过物理连接接收消息的网络状态。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getNetRecvInfo()
    {
        return $this->container['netRecvInfo'];
    }

    /**
    * Sets netRecvInfo
    *
    * @param string|null $netRecvInfo **参数解释**: 通过物理连接接收消息的网络状态。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setNetRecvInfo($netRecvInfo)
    {
        $this->container['netRecvInfo'] = $netRecvInfo;
        return $this;
    }

    /**
    * Gets netStreamSendInfo
    *  **参数解释**: 通过逻辑连接发送消息的网络状态。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getNetStreamSendInfo()
    {
        return $this->container['netStreamSendInfo'];
    }

    /**
    * Sets netStreamSendInfo
    *
    * @param string|null $netStreamSendInfo **参数解释**: 通过逻辑连接发送消息的网络状态。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setNetStreamSendInfo($netStreamSendInfo)
    {
        $this->container['netStreamSendInfo'] = $netStreamSendInfo;
        return $this;
    }

    /**
    * Gets netStreamRecvInfo
    *  **参数解释**: 通过逻辑连接接收消息的网络状态。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getNetStreamRecvInfo()
    {
        return $this->container['netStreamRecvInfo'];
    }

    /**
    * Sets netStreamRecvInfo
    *
    * @param string|null $netStreamRecvInfo **参数解释**: 通过逻辑连接接收消息的网络状态。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setNetStreamRecvInfo($netStreamRecvInfo)
    {
        $this->container['netStreamRecvInfo'] = $netStreamRecvInfo;
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

