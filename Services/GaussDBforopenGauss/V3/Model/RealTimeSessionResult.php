<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RealTimeSessionResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RealTimeSessionResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sessionId  **参数解释**： 会话ID。 **取值范围**： 不涉及。
    * pid  **参数解释**： 线程ID。 **取值范围**： 不涉及。
    * uniqueSqlId  **参数解释**： SQL ID。 **取值范围**： 不涉及。
    * databaseName  **参数解释**： 数据库名称。 **取值范围**： 不涉及。
    * clientIp  **参数解释**： 客户端IP。 **取值范围**： 不涉及。
    * userName  **参数解释**： 用户名称。 **取值范围**： 不涉及。
    * wait  **参数解释**： 是否等待。 **取值范围**： 不涉及。
    * blockSession  **参数解释**： 阻塞会话。 **取值范围**： 不涉及。
    * waitEvent  **参数解释**： 等待事件。 **取值范围**： 不涉及。
    * state  **参数解释**： 状态。 **取值范围**： 不涉及。
    * queryRuntime  **参数解释**： 语句执行时长。 **取值范围**： 不涉及。
    * query  **参数解释**： SQL文本。 **取值范围**： 不涉及。
    * backEndStart  **参数解释**： 会话开始时间。 **取值范围**： 不涉及。
    * transactionStart  **参数解释**： 事务开始时间。 **取值范围**： 不涉及。
    * queryStart  **参数解释**： 语句开始时间。 **取值范围**： 不涉及。
    * applicationName  **参数解释**： 应用名称。 **取值范围**： 不涉及。
    * execTime  **参数解释**： 会话执行时长（单位：秒）。 **取值范围**： 不涉及。
    * transNum  **参数解释**： 会话建立事务的数量。 **取值范围**： 不涉及。
    * rollbackNum  **参数解释**： 会话中事务回滚的次数。 **取值范围**： 不涉及。
    * sqlNum  **参数解释**： 会话执行的sql数。 **取值范围**： 不涉及。
    * clientPort  **参数解释**： 客户端用于与后台通讯的TCP端口号，如果使用Unix套接字，则为-1。 **取值范围**： 不涉及。
    * queryId  **参数解释**： 会话执行的sql数。 **取值范围**： 不涉及。
    * transactionTimeCost  **参数解释**： 当前用户上一次执行的事务持续时间。 **取值范围**： 不涉及。
    * traceId  **参数解释**： 驱动传入的trace id，用于标识应用的一次请求。 **取值范围**： 不涉及。
    * globalSessionId  **参数解释**： 当前用户上次执行的全局会话ID。 **取值范围**： 不涉及。
    * topTransactionId  **参数解释**： 当前用户上次执行的顶层事务ID。 **取值范围**： 不涉及。
    * currentTransactionId  **参数解释**： 当前用户上次执行的事务ID。 **取值范围**： 不涉及。
    * xlogQuantityPretty  **参数解释**： 当前用户上次执行的事务使用的XLOG量，易读格式。 **取值范围**： 不涉及。
    * waitStatus  **参数解释**： 实例线程等待状态。 **取值范围**： 不涉及。
    * lwtId  **参数解释**： 实例线程的轻量级线程号。 **取值范围**： 不涉及。
    * threadName  **参数解释**： 实例线程名。 **取值范围**： 不涉及。
    * lockMode  **参数解释**： 实例等锁模式。 **取值范围**： 不涉及。
    * parentSessionId  **参数解释**： 实例父会话ID。 **取值范围**： 不涉及。
    * smpId  **参数解释**： 实例并行线程的ID。 **取值范围**： 不涉及。
    * lockTag  **参数解释**： 实例线程正等待获取的锁的信息。 **取值范围**： 不涉及。
    * componentName  **参数解释**： 组件名称。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sessionId' => 'string',
            'pid' => 'string',
            'uniqueSqlId' => 'string',
            'databaseName' => 'string',
            'clientIp' => 'string',
            'userName' => 'string',
            'wait' => 'string',
            'blockSession' => 'string',
            'waitEvent' => 'string',
            'state' => 'string',
            'queryRuntime' => 'string',
            'query' => 'string',
            'backEndStart' => 'int',
            'transactionStart' => 'int',
            'queryStart' => 'int',
            'applicationName' => 'string',
            'execTime' => 'string',
            'transNum' => 'string',
            'rollbackNum' => 'string',
            'sqlNum' => 'string',
            'clientPort' => 'string',
            'queryId' => 'string',
            'transactionTimeCost' => 'string',
            'traceId' => 'string',
            'globalSessionId' => 'string',
            'topTransactionId' => 'string',
            'currentTransactionId' => 'string',
            'xlogQuantityPretty' => 'string',
            'waitStatus' => 'string',
            'lwtId' => 'string',
            'threadName' => 'string',
            'lockMode' => 'string',
            'parentSessionId' => 'string',
            'smpId' => 'string',
            'lockTag' => 'string',
            'componentName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sessionId  **参数解释**： 会话ID。 **取值范围**： 不涉及。
    * pid  **参数解释**： 线程ID。 **取值范围**： 不涉及。
    * uniqueSqlId  **参数解释**： SQL ID。 **取值范围**： 不涉及。
    * databaseName  **参数解释**： 数据库名称。 **取值范围**： 不涉及。
    * clientIp  **参数解释**： 客户端IP。 **取值范围**： 不涉及。
    * userName  **参数解释**： 用户名称。 **取值范围**： 不涉及。
    * wait  **参数解释**： 是否等待。 **取值范围**： 不涉及。
    * blockSession  **参数解释**： 阻塞会话。 **取值范围**： 不涉及。
    * waitEvent  **参数解释**： 等待事件。 **取值范围**： 不涉及。
    * state  **参数解释**： 状态。 **取值范围**： 不涉及。
    * queryRuntime  **参数解释**： 语句执行时长。 **取值范围**： 不涉及。
    * query  **参数解释**： SQL文本。 **取值范围**： 不涉及。
    * backEndStart  **参数解释**： 会话开始时间。 **取值范围**： 不涉及。
    * transactionStart  **参数解释**： 事务开始时间。 **取值范围**： 不涉及。
    * queryStart  **参数解释**： 语句开始时间。 **取值范围**： 不涉及。
    * applicationName  **参数解释**： 应用名称。 **取值范围**： 不涉及。
    * execTime  **参数解释**： 会话执行时长（单位：秒）。 **取值范围**： 不涉及。
    * transNum  **参数解释**： 会话建立事务的数量。 **取值范围**： 不涉及。
    * rollbackNum  **参数解释**： 会话中事务回滚的次数。 **取值范围**： 不涉及。
    * sqlNum  **参数解释**： 会话执行的sql数。 **取值范围**： 不涉及。
    * clientPort  **参数解释**： 客户端用于与后台通讯的TCP端口号，如果使用Unix套接字，则为-1。 **取值范围**： 不涉及。
    * queryId  **参数解释**： 会话执行的sql数。 **取值范围**： 不涉及。
    * transactionTimeCost  **参数解释**： 当前用户上一次执行的事务持续时间。 **取值范围**： 不涉及。
    * traceId  **参数解释**： 驱动传入的trace id，用于标识应用的一次请求。 **取值范围**： 不涉及。
    * globalSessionId  **参数解释**： 当前用户上次执行的全局会话ID。 **取值范围**： 不涉及。
    * topTransactionId  **参数解释**： 当前用户上次执行的顶层事务ID。 **取值范围**： 不涉及。
    * currentTransactionId  **参数解释**： 当前用户上次执行的事务ID。 **取值范围**： 不涉及。
    * xlogQuantityPretty  **参数解释**： 当前用户上次执行的事务使用的XLOG量，易读格式。 **取值范围**： 不涉及。
    * waitStatus  **参数解释**： 实例线程等待状态。 **取值范围**： 不涉及。
    * lwtId  **参数解释**： 实例线程的轻量级线程号。 **取值范围**： 不涉及。
    * threadName  **参数解释**： 实例线程名。 **取值范围**： 不涉及。
    * lockMode  **参数解释**： 实例等锁模式。 **取值范围**： 不涉及。
    * parentSessionId  **参数解释**： 实例父会话ID。 **取值范围**： 不涉及。
    * smpId  **参数解释**： 实例并行线程的ID。 **取值范围**： 不涉及。
    * lockTag  **参数解释**： 实例线程正等待获取的锁的信息。 **取值范围**： 不涉及。
    * componentName  **参数解释**： 组件名称。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sessionId' => null,
        'pid' => null,
        'uniqueSqlId' => null,
        'databaseName' => null,
        'clientIp' => null,
        'userName' => null,
        'wait' => null,
        'blockSession' => null,
        'waitEvent' => null,
        'state' => null,
        'queryRuntime' => null,
        'query' => null,
        'backEndStart' => null,
        'transactionStart' => null,
        'queryStart' => null,
        'applicationName' => null,
        'execTime' => null,
        'transNum' => null,
        'rollbackNum' => null,
        'sqlNum' => null,
        'clientPort' => null,
        'queryId' => null,
        'transactionTimeCost' => null,
        'traceId' => null,
        'globalSessionId' => null,
        'topTransactionId' => null,
        'currentTransactionId' => null,
        'xlogQuantityPretty' => null,
        'waitStatus' => null,
        'lwtId' => null,
        'threadName' => null,
        'lockMode' => null,
        'parentSessionId' => null,
        'smpId' => null,
        'lockTag' => null,
        'componentName' => null
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
    * sessionId  **参数解释**： 会话ID。 **取值范围**： 不涉及。
    * pid  **参数解释**： 线程ID。 **取值范围**： 不涉及。
    * uniqueSqlId  **参数解释**： SQL ID。 **取值范围**： 不涉及。
    * databaseName  **参数解释**： 数据库名称。 **取值范围**： 不涉及。
    * clientIp  **参数解释**： 客户端IP。 **取值范围**： 不涉及。
    * userName  **参数解释**： 用户名称。 **取值范围**： 不涉及。
    * wait  **参数解释**： 是否等待。 **取值范围**： 不涉及。
    * blockSession  **参数解释**： 阻塞会话。 **取值范围**： 不涉及。
    * waitEvent  **参数解释**： 等待事件。 **取值范围**： 不涉及。
    * state  **参数解释**： 状态。 **取值范围**： 不涉及。
    * queryRuntime  **参数解释**： 语句执行时长。 **取值范围**： 不涉及。
    * query  **参数解释**： SQL文本。 **取值范围**： 不涉及。
    * backEndStart  **参数解释**： 会话开始时间。 **取值范围**： 不涉及。
    * transactionStart  **参数解释**： 事务开始时间。 **取值范围**： 不涉及。
    * queryStart  **参数解释**： 语句开始时间。 **取值范围**： 不涉及。
    * applicationName  **参数解释**： 应用名称。 **取值范围**： 不涉及。
    * execTime  **参数解释**： 会话执行时长（单位：秒）。 **取值范围**： 不涉及。
    * transNum  **参数解释**： 会话建立事务的数量。 **取值范围**： 不涉及。
    * rollbackNum  **参数解释**： 会话中事务回滚的次数。 **取值范围**： 不涉及。
    * sqlNum  **参数解释**： 会话执行的sql数。 **取值范围**： 不涉及。
    * clientPort  **参数解释**： 客户端用于与后台通讯的TCP端口号，如果使用Unix套接字，则为-1。 **取值范围**： 不涉及。
    * queryId  **参数解释**： 会话执行的sql数。 **取值范围**： 不涉及。
    * transactionTimeCost  **参数解释**： 当前用户上一次执行的事务持续时间。 **取值范围**： 不涉及。
    * traceId  **参数解释**： 驱动传入的trace id，用于标识应用的一次请求。 **取值范围**： 不涉及。
    * globalSessionId  **参数解释**： 当前用户上次执行的全局会话ID。 **取值范围**： 不涉及。
    * topTransactionId  **参数解释**： 当前用户上次执行的顶层事务ID。 **取值范围**： 不涉及。
    * currentTransactionId  **参数解释**： 当前用户上次执行的事务ID。 **取值范围**： 不涉及。
    * xlogQuantityPretty  **参数解释**： 当前用户上次执行的事务使用的XLOG量，易读格式。 **取值范围**： 不涉及。
    * waitStatus  **参数解释**： 实例线程等待状态。 **取值范围**： 不涉及。
    * lwtId  **参数解释**： 实例线程的轻量级线程号。 **取值范围**： 不涉及。
    * threadName  **参数解释**： 实例线程名。 **取值范围**： 不涉及。
    * lockMode  **参数解释**： 实例等锁模式。 **取值范围**： 不涉及。
    * parentSessionId  **参数解释**： 实例父会话ID。 **取值范围**： 不涉及。
    * smpId  **参数解释**： 实例并行线程的ID。 **取值范围**： 不涉及。
    * lockTag  **参数解释**： 实例线程正等待获取的锁的信息。 **取值范围**： 不涉及。
    * componentName  **参数解释**： 组件名称。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sessionId' => 'session_id',
            'pid' => 'pid',
            'uniqueSqlId' => 'unique_sql_id',
            'databaseName' => 'database_name',
            'clientIp' => 'client_ip',
            'userName' => 'user_name',
            'wait' => 'wait',
            'blockSession' => 'block_session',
            'waitEvent' => 'wait_event',
            'state' => 'state',
            'queryRuntime' => 'query_runtime',
            'query' => 'query',
            'backEndStart' => 'back_end_start',
            'transactionStart' => 'transaction_start',
            'queryStart' => 'query_start',
            'applicationName' => 'application_name',
            'execTime' => 'exec_time',
            'transNum' => 'trans_num',
            'rollbackNum' => 'rollback_num',
            'sqlNum' => 'sql_num',
            'clientPort' => 'client_port',
            'queryId' => 'query_id',
            'transactionTimeCost' => 'transaction_time_cost',
            'traceId' => 'trace_id',
            'globalSessionId' => 'global_session_id',
            'topTransactionId' => 'top_transaction_id',
            'currentTransactionId' => 'current_transaction_id',
            'xlogQuantityPretty' => 'xlog_quantity_pretty',
            'waitStatus' => 'wait_status',
            'lwtId' => 'lwt_id',
            'threadName' => 'thread_name',
            'lockMode' => 'lock_mode',
            'parentSessionId' => 'parent_session_id',
            'smpId' => 'smp_id',
            'lockTag' => 'lock_tag',
            'componentName' => 'component_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sessionId  **参数解释**： 会话ID。 **取值范围**： 不涉及。
    * pid  **参数解释**： 线程ID。 **取值范围**： 不涉及。
    * uniqueSqlId  **参数解释**： SQL ID。 **取值范围**： 不涉及。
    * databaseName  **参数解释**： 数据库名称。 **取值范围**： 不涉及。
    * clientIp  **参数解释**： 客户端IP。 **取值范围**： 不涉及。
    * userName  **参数解释**： 用户名称。 **取值范围**： 不涉及。
    * wait  **参数解释**： 是否等待。 **取值范围**： 不涉及。
    * blockSession  **参数解释**： 阻塞会话。 **取值范围**： 不涉及。
    * waitEvent  **参数解释**： 等待事件。 **取值范围**： 不涉及。
    * state  **参数解释**： 状态。 **取值范围**： 不涉及。
    * queryRuntime  **参数解释**： 语句执行时长。 **取值范围**： 不涉及。
    * query  **参数解释**： SQL文本。 **取值范围**： 不涉及。
    * backEndStart  **参数解释**： 会话开始时间。 **取值范围**： 不涉及。
    * transactionStart  **参数解释**： 事务开始时间。 **取值范围**： 不涉及。
    * queryStart  **参数解释**： 语句开始时间。 **取值范围**： 不涉及。
    * applicationName  **参数解释**： 应用名称。 **取值范围**： 不涉及。
    * execTime  **参数解释**： 会话执行时长（单位：秒）。 **取值范围**： 不涉及。
    * transNum  **参数解释**： 会话建立事务的数量。 **取值范围**： 不涉及。
    * rollbackNum  **参数解释**： 会话中事务回滚的次数。 **取值范围**： 不涉及。
    * sqlNum  **参数解释**： 会话执行的sql数。 **取值范围**： 不涉及。
    * clientPort  **参数解释**： 客户端用于与后台通讯的TCP端口号，如果使用Unix套接字，则为-1。 **取值范围**： 不涉及。
    * queryId  **参数解释**： 会话执行的sql数。 **取值范围**： 不涉及。
    * transactionTimeCost  **参数解释**： 当前用户上一次执行的事务持续时间。 **取值范围**： 不涉及。
    * traceId  **参数解释**： 驱动传入的trace id，用于标识应用的一次请求。 **取值范围**： 不涉及。
    * globalSessionId  **参数解释**： 当前用户上次执行的全局会话ID。 **取值范围**： 不涉及。
    * topTransactionId  **参数解释**： 当前用户上次执行的顶层事务ID。 **取值范围**： 不涉及。
    * currentTransactionId  **参数解释**： 当前用户上次执行的事务ID。 **取值范围**： 不涉及。
    * xlogQuantityPretty  **参数解释**： 当前用户上次执行的事务使用的XLOG量，易读格式。 **取值范围**： 不涉及。
    * waitStatus  **参数解释**： 实例线程等待状态。 **取值范围**： 不涉及。
    * lwtId  **参数解释**： 实例线程的轻量级线程号。 **取值范围**： 不涉及。
    * threadName  **参数解释**： 实例线程名。 **取值范围**： 不涉及。
    * lockMode  **参数解释**： 实例等锁模式。 **取值范围**： 不涉及。
    * parentSessionId  **参数解释**： 实例父会话ID。 **取值范围**： 不涉及。
    * smpId  **参数解释**： 实例并行线程的ID。 **取值范围**： 不涉及。
    * lockTag  **参数解释**： 实例线程正等待获取的锁的信息。 **取值范围**： 不涉及。
    * componentName  **参数解释**： 组件名称。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'sessionId' => 'setSessionId',
            'pid' => 'setPid',
            'uniqueSqlId' => 'setUniqueSqlId',
            'databaseName' => 'setDatabaseName',
            'clientIp' => 'setClientIp',
            'userName' => 'setUserName',
            'wait' => 'setWait',
            'blockSession' => 'setBlockSession',
            'waitEvent' => 'setWaitEvent',
            'state' => 'setState',
            'queryRuntime' => 'setQueryRuntime',
            'query' => 'setQuery',
            'backEndStart' => 'setBackEndStart',
            'transactionStart' => 'setTransactionStart',
            'queryStart' => 'setQueryStart',
            'applicationName' => 'setApplicationName',
            'execTime' => 'setExecTime',
            'transNum' => 'setTransNum',
            'rollbackNum' => 'setRollbackNum',
            'sqlNum' => 'setSqlNum',
            'clientPort' => 'setClientPort',
            'queryId' => 'setQueryId',
            'transactionTimeCost' => 'setTransactionTimeCost',
            'traceId' => 'setTraceId',
            'globalSessionId' => 'setGlobalSessionId',
            'topTransactionId' => 'setTopTransactionId',
            'currentTransactionId' => 'setCurrentTransactionId',
            'xlogQuantityPretty' => 'setXlogQuantityPretty',
            'waitStatus' => 'setWaitStatus',
            'lwtId' => 'setLwtId',
            'threadName' => 'setThreadName',
            'lockMode' => 'setLockMode',
            'parentSessionId' => 'setParentSessionId',
            'smpId' => 'setSmpId',
            'lockTag' => 'setLockTag',
            'componentName' => 'setComponentName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sessionId  **参数解释**： 会话ID。 **取值范围**： 不涉及。
    * pid  **参数解释**： 线程ID。 **取值范围**： 不涉及。
    * uniqueSqlId  **参数解释**： SQL ID。 **取值范围**： 不涉及。
    * databaseName  **参数解释**： 数据库名称。 **取值范围**： 不涉及。
    * clientIp  **参数解释**： 客户端IP。 **取值范围**： 不涉及。
    * userName  **参数解释**： 用户名称。 **取值范围**： 不涉及。
    * wait  **参数解释**： 是否等待。 **取值范围**： 不涉及。
    * blockSession  **参数解释**： 阻塞会话。 **取值范围**： 不涉及。
    * waitEvent  **参数解释**： 等待事件。 **取值范围**： 不涉及。
    * state  **参数解释**： 状态。 **取值范围**： 不涉及。
    * queryRuntime  **参数解释**： 语句执行时长。 **取值范围**： 不涉及。
    * query  **参数解释**： SQL文本。 **取值范围**： 不涉及。
    * backEndStart  **参数解释**： 会话开始时间。 **取值范围**： 不涉及。
    * transactionStart  **参数解释**： 事务开始时间。 **取值范围**： 不涉及。
    * queryStart  **参数解释**： 语句开始时间。 **取值范围**： 不涉及。
    * applicationName  **参数解释**： 应用名称。 **取值范围**： 不涉及。
    * execTime  **参数解释**： 会话执行时长（单位：秒）。 **取值范围**： 不涉及。
    * transNum  **参数解释**： 会话建立事务的数量。 **取值范围**： 不涉及。
    * rollbackNum  **参数解释**： 会话中事务回滚的次数。 **取值范围**： 不涉及。
    * sqlNum  **参数解释**： 会话执行的sql数。 **取值范围**： 不涉及。
    * clientPort  **参数解释**： 客户端用于与后台通讯的TCP端口号，如果使用Unix套接字，则为-1。 **取值范围**： 不涉及。
    * queryId  **参数解释**： 会话执行的sql数。 **取值范围**： 不涉及。
    * transactionTimeCost  **参数解释**： 当前用户上一次执行的事务持续时间。 **取值范围**： 不涉及。
    * traceId  **参数解释**： 驱动传入的trace id，用于标识应用的一次请求。 **取值范围**： 不涉及。
    * globalSessionId  **参数解释**： 当前用户上次执行的全局会话ID。 **取值范围**： 不涉及。
    * topTransactionId  **参数解释**： 当前用户上次执行的顶层事务ID。 **取值范围**： 不涉及。
    * currentTransactionId  **参数解释**： 当前用户上次执行的事务ID。 **取值范围**： 不涉及。
    * xlogQuantityPretty  **参数解释**： 当前用户上次执行的事务使用的XLOG量，易读格式。 **取值范围**： 不涉及。
    * waitStatus  **参数解释**： 实例线程等待状态。 **取值范围**： 不涉及。
    * lwtId  **参数解释**： 实例线程的轻量级线程号。 **取值范围**： 不涉及。
    * threadName  **参数解释**： 实例线程名。 **取值范围**： 不涉及。
    * lockMode  **参数解释**： 实例等锁模式。 **取值范围**： 不涉及。
    * parentSessionId  **参数解释**： 实例父会话ID。 **取值范围**： 不涉及。
    * smpId  **参数解释**： 实例并行线程的ID。 **取值范围**： 不涉及。
    * lockTag  **参数解释**： 实例线程正等待获取的锁的信息。 **取值范围**： 不涉及。
    * componentName  **参数解释**： 组件名称。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'sessionId' => 'getSessionId',
            'pid' => 'getPid',
            'uniqueSqlId' => 'getUniqueSqlId',
            'databaseName' => 'getDatabaseName',
            'clientIp' => 'getClientIp',
            'userName' => 'getUserName',
            'wait' => 'getWait',
            'blockSession' => 'getBlockSession',
            'waitEvent' => 'getWaitEvent',
            'state' => 'getState',
            'queryRuntime' => 'getQueryRuntime',
            'query' => 'getQuery',
            'backEndStart' => 'getBackEndStart',
            'transactionStart' => 'getTransactionStart',
            'queryStart' => 'getQueryStart',
            'applicationName' => 'getApplicationName',
            'execTime' => 'getExecTime',
            'transNum' => 'getTransNum',
            'rollbackNum' => 'getRollbackNum',
            'sqlNum' => 'getSqlNum',
            'clientPort' => 'getClientPort',
            'queryId' => 'getQueryId',
            'transactionTimeCost' => 'getTransactionTimeCost',
            'traceId' => 'getTraceId',
            'globalSessionId' => 'getGlobalSessionId',
            'topTransactionId' => 'getTopTransactionId',
            'currentTransactionId' => 'getCurrentTransactionId',
            'xlogQuantityPretty' => 'getXlogQuantityPretty',
            'waitStatus' => 'getWaitStatus',
            'lwtId' => 'getLwtId',
            'threadName' => 'getThreadName',
            'lockMode' => 'getLockMode',
            'parentSessionId' => 'getParentSessionId',
            'smpId' => 'getSmpId',
            'lockTag' => 'getLockTag',
            'componentName' => 'getComponentName'
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
        $this->container['pid'] = isset($data['pid']) ? $data['pid'] : null;
        $this->container['uniqueSqlId'] = isset($data['uniqueSqlId']) ? $data['uniqueSqlId'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['clientIp'] = isset($data['clientIp']) ? $data['clientIp'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['wait'] = isset($data['wait']) ? $data['wait'] : null;
        $this->container['blockSession'] = isset($data['blockSession']) ? $data['blockSession'] : null;
        $this->container['waitEvent'] = isset($data['waitEvent']) ? $data['waitEvent'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['queryRuntime'] = isset($data['queryRuntime']) ? $data['queryRuntime'] : null;
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['backEndStart'] = isset($data['backEndStart']) ? $data['backEndStart'] : null;
        $this->container['transactionStart'] = isset($data['transactionStart']) ? $data['transactionStart'] : null;
        $this->container['queryStart'] = isset($data['queryStart']) ? $data['queryStart'] : null;
        $this->container['applicationName'] = isset($data['applicationName']) ? $data['applicationName'] : null;
        $this->container['execTime'] = isset($data['execTime']) ? $data['execTime'] : null;
        $this->container['transNum'] = isset($data['transNum']) ? $data['transNum'] : null;
        $this->container['rollbackNum'] = isset($data['rollbackNum']) ? $data['rollbackNum'] : null;
        $this->container['sqlNum'] = isset($data['sqlNum']) ? $data['sqlNum'] : null;
        $this->container['clientPort'] = isset($data['clientPort']) ? $data['clientPort'] : null;
        $this->container['queryId'] = isset($data['queryId']) ? $data['queryId'] : null;
        $this->container['transactionTimeCost'] = isset($data['transactionTimeCost']) ? $data['transactionTimeCost'] : null;
        $this->container['traceId'] = isset($data['traceId']) ? $data['traceId'] : null;
        $this->container['globalSessionId'] = isset($data['globalSessionId']) ? $data['globalSessionId'] : null;
        $this->container['topTransactionId'] = isset($data['topTransactionId']) ? $data['topTransactionId'] : null;
        $this->container['currentTransactionId'] = isset($data['currentTransactionId']) ? $data['currentTransactionId'] : null;
        $this->container['xlogQuantityPretty'] = isset($data['xlogQuantityPretty']) ? $data['xlogQuantityPretty'] : null;
        $this->container['waitStatus'] = isset($data['waitStatus']) ? $data['waitStatus'] : null;
        $this->container['lwtId'] = isset($data['lwtId']) ? $data['lwtId'] : null;
        $this->container['threadName'] = isset($data['threadName']) ? $data['threadName'] : null;
        $this->container['lockMode'] = isset($data['lockMode']) ? $data['lockMode'] : null;
        $this->container['parentSessionId'] = isset($data['parentSessionId']) ? $data['parentSessionId'] : null;
        $this->container['smpId'] = isset($data['smpId']) ? $data['smpId'] : null;
        $this->container['lockTag'] = isset($data['lockTag']) ? $data['lockTag'] : null;
        $this->container['componentName'] = isset($data['componentName']) ? $data['componentName'] : null;
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
    * Gets sessionId
    *  **参数解释**： 会话ID。 **取值范围**： 不涉及。
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
    * @param string|null $sessionId **参数解释**： 会话ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSessionId($sessionId)
    {
        $this->container['sessionId'] = $sessionId;
        return $this;
    }

    /**
    * Gets pid
    *  **参数解释**： 线程ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getPid()
    {
        return $this->container['pid'];
    }

    /**
    * Sets pid
    *
    * @param string|null $pid **参数解释**： 线程ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPid($pid)
    {
        $this->container['pid'] = $pid;
        return $this;
    }

    /**
    * Gets uniqueSqlId
    *  **参数解释**： SQL ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getUniqueSqlId()
    {
        return $this->container['uniqueSqlId'];
    }

    /**
    * Sets uniqueSqlId
    *
    * @param string|null $uniqueSqlId **参数解释**： SQL ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setUniqueSqlId($uniqueSqlId)
    {
        $this->container['uniqueSqlId'] = $uniqueSqlId;
        return $this;
    }

    /**
    * Gets databaseName
    *  **参数解释**： 数据库名称。 **取值范围**： 不涉及。
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
    * @param string|null $databaseName **参数解释**： 数据库名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets clientIp
    *  **参数解释**： 客户端IP。 **取值范围**： 不涉及。
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
    * @param string|null $clientIp **参数解释**： 客户端IP。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setClientIp($clientIp)
    {
        $this->container['clientIp'] = $clientIp;
        return $this;
    }

    /**
    * Gets userName
    *  **参数解释**： 用户名称。 **取值范围**： 不涉及。
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
    * @param string|null $userName **参数解释**： 用户名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets wait
    *  **参数解释**： 是否等待。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getWait()
    {
        return $this->container['wait'];
    }

    /**
    * Sets wait
    *
    * @param string|null $wait **参数解释**： 是否等待。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setWait($wait)
    {
        $this->container['wait'] = $wait;
        return $this;
    }

    /**
    * Gets blockSession
    *  **参数解释**： 阻塞会话。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getBlockSession()
    {
        return $this->container['blockSession'];
    }

    /**
    * Sets blockSession
    *
    * @param string|null $blockSession **参数解释**： 阻塞会话。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBlockSession($blockSession)
    {
        $this->container['blockSession'] = $blockSession;
        return $this;
    }

    /**
    * Gets waitEvent
    *  **参数解释**： 等待事件。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getWaitEvent()
    {
        return $this->container['waitEvent'];
    }

    /**
    * Sets waitEvent
    *
    * @param string|null $waitEvent **参数解释**： 等待事件。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setWaitEvent($waitEvent)
    {
        $this->container['waitEvent'] = $waitEvent;
        return $this;
    }

    /**
    * Gets state
    *  **参数解释**： 状态。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state **参数解释**： 状态。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets queryRuntime
    *  **参数解释**： 语句执行时长。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getQueryRuntime()
    {
        return $this->container['queryRuntime'];
    }

    /**
    * Sets queryRuntime
    *
    * @param string|null $queryRuntime **参数解释**： 语句执行时长。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setQueryRuntime($queryRuntime)
    {
        $this->container['queryRuntime'] = $queryRuntime;
        return $this;
    }

    /**
    * Gets query
    *  **参数解释**： SQL文本。 **取值范围**： 不涉及。
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
    * @param string|null $query **参数解释**： SQL文本。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setQuery($query)
    {
        $this->container['query'] = $query;
        return $this;
    }

    /**
    * Gets backEndStart
    *  **参数解释**： 会话开始时间。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getBackEndStart()
    {
        return $this->container['backEndStart'];
    }

    /**
    * Sets backEndStart
    *
    * @param int|null $backEndStart **参数解释**： 会话开始时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBackEndStart($backEndStart)
    {
        $this->container['backEndStart'] = $backEndStart;
        return $this;
    }

    /**
    * Gets transactionStart
    *  **参数解释**： 事务开始时间。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getTransactionStart()
    {
        return $this->container['transactionStart'];
    }

    /**
    * Sets transactionStart
    *
    * @param int|null $transactionStart **参数解释**： 事务开始时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTransactionStart($transactionStart)
    {
        $this->container['transactionStart'] = $transactionStart;
        return $this;
    }

    /**
    * Gets queryStart
    *  **参数解释**： 语句开始时间。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getQueryStart()
    {
        return $this->container['queryStart'];
    }

    /**
    * Sets queryStart
    *
    * @param int|null $queryStart **参数解释**： 语句开始时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setQueryStart($queryStart)
    {
        $this->container['queryStart'] = $queryStart;
        return $this;
    }

    /**
    * Gets applicationName
    *  **参数解释**： 应用名称。 **取值范围**： 不涉及。
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
    * @param string|null $applicationName **参数解释**： 应用名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setApplicationName($applicationName)
    {
        $this->container['applicationName'] = $applicationName;
        return $this;
    }

    /**
    * Gets execTime
    *  **参数解释**： 会话执行时长（单位：秒）。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getExecTime()
    {
        return $this->container['execTime'];
    }

    /**
    * Sets execTime
    *
    * @param string|null $execTime **参数解释**： 会话执行时长（单位：秒）。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setExecTime($execTime)
    {
        $this->container['execTime'] = $execTime;
        return $this;
    }

    /**
    * Gets transNum
    *  **参数解释**： 会话建立事务的数量。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getTransNum()
    {
        return $this->container['transNum'];
    }

    /**
    * Sets transNum
    *
    * @param string|null $transNum **参数解释**： 会话建立事务的数量。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTransNum($transNum)
    {
        $this->container['transNum'] = $transNum;
        return $this;
    }

    /**
    * Gets rollbackNum
    *  **参数解释**： 会话中事务回滚的次数。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getRollbackNum()
    {
        return $this->container['rollbackNum'];
    }

    /**
    * Sets rollbackNum
    *
    * @param string|null $rollbackNum **参数解释**： 会话中事务回滚的次数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRollbackNum($rollbackNum)
    {
        $this->container['rollbackNum'] = $rollbackNum;
        return $this;
    }

    /**
    * Gets sqlNum
    *  **参数解释**： 会话执行的sql数。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getSqlNum()
    {
        return $this->container['sqlNum'];
    }

    /**
    * Sets sqlNum
    *
    * @param string|null $sqlNum **参数解释**： 会话执行的sql数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSqlNum($sqlNum)
    {
        $this->container['sqlNum'] = $sqlNum;
        return $this;
    }

    /**
    * Gets clientPort
    *  **参数解释**： 客户端用于与后台通讯的TCP端口号，如果使用Unix套接字，则为-1。 **取值范围**： 不涉及。
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
    * @param string|null $clientPort **参数解释**： 客户端用于与后台通讯的TCP端口号，如果使用Unix套接字，则为-1。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setClientPort($clientPort)
    {
        $this->container['clientPort'] = $clientPort;
        return $this;
    }

    /**
    * Gets queryId
    *  **参数解释**： 会话执行的sql数。 **取值范围**： 不涉及。
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
    * @param string|null $queryId **参数解释**： 会话执行的sql数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setQueryId($queryId)
    {
        $this->container['queryId'] = $queryId;
        return $this;
    }

    /**
    * Gets transactionTimeCost
    *  **参数解释**： 当前用户上一次执行的事务持续时间。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getTransactionTimeCost()
    {
        return $this->container['transactionTimeCost'];
    }

    /**
    * Sets transactionTimeCost
    *
    * @param string|null $transactionTimeCost **参数解释**： 当前用户上一次执行的事务持续时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTransactionTimeCost($transactionTimeCost)
    {
        $this->container['transactionTimeCost'] = $transactionTimeCost;
        return $this;
    }

    /**
    * Gets traceId
    *  **参数解释**： 驱动传入的trace id，用于标识应用的一次请求。 **取值范围**： 不涉及。
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
    * @param string|null $traceId **参数解释**： 驱动传入的trace id，用于标识应用的一次请求。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTraceId($traceId)
    {
        $this->container['traceId'] = $traceId;
        return $this;
    }

    /**
    * Gets globalSessionId
    *  **参数解释**： 当前用户上次执行的全局会话ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getGlobalSessionId()
    {
        return $this->container['globalSessionId'];
    }

    /**
    * Sets globalSessionId
    *
    * @param string|null $globalSessionId **参数解释**： 当前用户上次执行的全局会话ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setGlobalSessionId($globalSessionId)
    {
        $this->container['globalSessionId'] = $globalSessionId;
        return $this;
    }

    /**
    * Gets topTransactionId
    *  **参数解释**： 当前用户上次执行的顶层事务ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getTopTransactionId()
    {
        return $this->container['topTransactionId'];
    }

    /**
    * Sets topTransactionId
    *
    * @param string|null $topTransactionId **参数解释**： 当前用户上次执行的顶层事务ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTopTransactionId($topTransactionId)
    {
        $this->container['topTransactionId'] = $topTransactionId;
        return $this;
    }

    /**
    * Gets currentTransactionId
    *  **参数解释**： 当前用户上次执行的事务ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getCurrentTransactionId()
    {
        return $this->container['currentTransactionId'];
    }

    /**
    * Sets currentTransactionId
    *
    * @param string|null $currentTransactionId **参数解释**： 当前用户上次执行的事务ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCurrentTransactionId($currentTransactionId)
    {
        $this->container['currentTransactionId'] = $currentTransactionId;
        return $this;
    }

    /**
    * Gets xlogQuantityPretty
    *  **参数解释**： 当前用户上次执行的事务使用的XLOG量，易读格式。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getXlogQuantityPretty()
    {
        return $this->container['xlogQuantityPretty'];
    }

    /**
    * Sets xlogQuantityPretty
    *
    * @param string|null $xlogQuantityPretty **参数解释**： 当前用户上次执行的事务使用的XLOG量，易读格式。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setXlogQuantityPretty($xlogQuantityPretty)
    {
        $this->container['xlogQuantityPretty'] = $xlogQuantityPretty;
        return $this;
    }

    /**
    * Gets waitStatus
    *  **参数解释**： 实例线程等待状态。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getWaitStatus()
    {
        return $this->container['waitStatus'];
    }

    /**
    * Sets waitStatus
    *
    * @param string|null $waitStatus **参数解释**： 实例线程等待状态。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setWaitStatus($waitStatus)
    {
        $this->container['waitStatus'] = $waitStatus;
        return $this;
    }

    /**
    * Gets lwtId
    *  **参数解释**： 实例线程的轻量级线程号。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getLwtId()
    {
        return $this->container['lwtId'];
    }

    /**
    * Sets lwtId
    *
    * @param string|null $lwtId **参数解释**： 实例线程的轻量级线程号。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLwtId($lwtId)
    {
        $this->container['lwtId'] = $lwtId;
        return $this;
    }

    /**
    * Gets threadName
    *  **参数解释**： 实例线程名。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getThreadName()
    {
        return $this->container['threadName'];
    }

    /**
    * Sets threadName
    *
    * @param string|null $threadName **参数解释**： 实例线程名。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setThreadName($threadName)
    {
        $this->container['threadName'] = $threadName;
        return $this;
    }

    /**
    * Gets lockMode
    *  **参数解释**： 实例等锁模式。 **取值范围**： 不涉及。
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
    * @param string|null $lockMode **参数解释**： 实例等锁模式。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLockMode($lockMode)
    {
        $this->container['lockMode'] = $lockMode;
        return $this;
    }

    /**
    * Gets parentSessionId
    *  **参数解释**： 实例父会话ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getParentSessionId()
    {
        return $this->container['parentSessionId'];
    }

    /**
    * Sets parentSessionId
    *
    * @param string|null $parentSessionId **参数解释**： 实例父会话ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setParentSessionId($parentSessionId)
    {
        $this->container['parentSessionId'] = $parentSessionId;
        return $this;
    }

    /**
    * Gets smpId
    *  **参数解释**： 实例并行线程的ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getSmpId()
    {
        return $this->container['smpId'];
    }

    /**
    * Sets smpId
    *
    * @param string|null $smpId **参数解释**： 实例并行线程的ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSmpId($smpId)
    {
        $this->container['smpId'] = $smpId;
        return $this;
    }

    /**
    * Gets lockTag
    *  **参数解释**： 实例线程正等待获取的锁的信息。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getLockTag()
    {
        return $this->container['lockTag'];
    }

    /**
    * Sets lockTag
    *
    * @param string|null $lockTag **参数解释**： 实例线程正等待获取的锁的信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLockTag($lockTag)
    {
        $this->container['lockTag'] = $lockTag;
        return $this;
    }

    /**
    * Gets componentName
    *  **参数解释**： 组件名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getComponentName()
    {
        return $this->container['componentName'];
    }

    /**
    * Sets componentName
    *
    * @param string|null $componentName **参数解释**： 组件名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setComponentName($componentName)
    {
        $this->container['componentName'] = $componentName;
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

