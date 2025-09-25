<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WaitEventResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WaitEventResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sessionId  **参数解释**: 会话ID。 **取值范围**: 不涉及。
    * pid  **参数解释**: 线程ID。 **取值范围**: 不涉及。
    * waitEvent  **参数解释**: 等待事件。 参见“开发指南 > 系统表和系统视图 > 系统视图 > 其他系统视图 > PG_THREAD_WAIT_STATUS”中的wait_event字段。 **取值范围**: 不涉及。
    * waitStatus  **参数解释**: 等待状态。 参见“开发指南 > 系统表和系统视图 > 系统视图 > 其他系统视图 > PG_THREAD_WAIT_STATUS”中的等待状态列表。 **取值范围**: 不涉及。
    * databaseName  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    * userName  **参数解释**: 用户名称。 **取值范围**: 不涉及。
    * clientAddr  **参数解释**: 客户端地址。 **取值范围**: 不涉及。
    * clientPort  **参数解释**: 客户端用于与后台通讯的TCP端口号。 **取值范围**: 不涉及。
    * sessionTime  **参数解释**: 会话持续时间，单位：秒。 **取值范围**: 不涉及。
    * xactStart  **参数解释**: 会话开始时间。 **取值范围**: 不涉及。
    * transactionTime  **参数解释**: 事务持续时间，单位秒。 **取值范围**: 不涉及。
    * queryStart  **参数解释**: 查询开始时间。 **取值范围**: 不涉及。
    * stateChange  **参数解释**: 上次状态改变的时间。 **取值范围**: 不涉及。
    * queryTime  **参数解释**: 查询持续时间，单位秒。 **取值范围**: 不涉及。
    * backendStart  **参数解释**: 会话开始时间。 **取值范围**: 不涉及。
    * waiting  **参数解释**: 是否在等待锁。 **取值范围**: 不涉及。
    * lockmode  **参数解释**: （等待获取的）锁模式。 **取值范围**: 不涉及。
    * blockSessionid  **参数解释**: 阻塞会话ID。 **取值范围**: 不涉及。
    * blockCount  **参数解释**: 阻塞会话数。 **取值范围**: 不涉及。
    * uniqueSqlId  **参数解释**: 归一化SQL ID。 **取值范围**: 不涉及。
    * queryId  **参数解释**: 查询 ID。 **取值范围**: 不涉及。
    * query  **参数解释**: SQL文本。 **取值范围**: 不涉及。
    * currentXid  **参数解释**: 当前事务ID。 **取值范围**: 不涉及。
    * topXid  **参数解释**: 顶层事务ID。 **取值范围**: 不涉及。
    * xlogQuantity  **参数解释**: 事务当前使用的XLOG量，单位为字节。 **取值范围**: 不涉及。
    * state  **参数解释**: 该会话当前总体状态。 **取值范围**: -active：后台正在执行一个查询。 -idle：后台正在等待一个新的客户端命令。 -idle in transaction：后台在事务中，但事务中没有语句在执行。 -fastpath function call：后台正在执行一个fast-path函数。 -disabled：如果后台禁用track_activities，则事务显示此状态。
    * applicationName  **参数解释**: 应用名称。 **取值范围**: 不涉及。
    * connectionInfo  **参数解释**: 连接信息。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sessionId' => 'string',
            'pid' => 'string',
            'waitEvent' => 'string',
            'waitStatus' => 'string',
            'databaseName' => 'string',
            'userName' => 'string',
            'clientAddr' => 'string',
            'clientPort' => 'string',
            'sessionTime' => 'string',
            'xactStart' => 'string',
            'transactionTime' => 'string',
            'queryStart' => 'string',
            'stateChange' => 'string',
            'queryTime' => 'string',
            'backendStart' => 'string',
            'waiting' => 'string',
            'lockmode' => 'string',
            'blockSessionid' => 'string',
            'blockCount' => 'string',
            'uniqueSqlId' => 'string',
            'queryId' => 'string',
            'query' => 'string',
            'currentXid' => 'string',
            'topXid' => 'string',
            'xlogQuantity' => 'string',
            'state' => 'string',
            'applicationName' => 'string',
            'connectionInfo' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sessionId  **参数解释**: 会话ID。 **取值范围**: 不涉及。
    * pid  **参数解释**: 线程ID。 **取值范围**: 不涉及。
    * waitEvent  **参数解释**: 等待事件。 参见“开发指南 > 系统表和系统视图 > 系统视图 > 其他系统视图 > PG_THREAD_WAIT_STATUS”中的wait_event字段。 **取值范围**: 不涉及。
    * waitStatus  **参数解释**: 等待状态。 参见“开发指南 > 系统表和系统视图 > 系统视图 > 其他系统视图 > PG_THREAD_WAIT_STATUS”中的等待状态列表。 **取值范围**: 不涉及。
    * databaseName  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    * userName  **参数解释**: 用户名称。 **取值范围**: 不涉及。
    * clientAddr  **参数解释**: 客户端地址。 **取值范围**: 不涉及。
    * clientPort  **参数解释**: 客户端用于与后台通讯的TCP端口号。 **取值范围**: 不涉及。
    * sessionTime  **参数解释**: 会话持续时间，单位：秒。 **取值范围**: 不涉及。
    * xactStart  **参数解释**: 会话开始时间。 **取值范围**: 不涉及。
    * transactionTime  **参数解释**: 事务持续时间，单位秒。 **取值范围**: 不涉及。
    * queryStart  **参数解释**: 查询开始时间。 **取值范围**: 不涉及。
    * stateChange  **参数解释**: 上次状态改变的时间。 **取值范围**: 不涉及。
    * queryTime  **参数解释**: 查询持续时间，单位秒。 **取值范围**: 不涉及。
    * backendStart  **参数解释**: 会话开始时间。 **取值范围**: 不涉及。
    * waiting  **参数解释**: 是否在等待锁。 **取值范围**: 不涉及。
    * lockmode  **参数解释**: （等待获取的）锁模式。 **取值范围**: 不涉及。
    * blockSessionid  **参数解释**: 阻塞会话ID。 **取值范围**: 不涉及。
    * blockCount  **参数解释**: 阻塞会话数。 **取值范围**: 不涉及。
    * uniqueSqlId  **参数解释**: 归一化SQL ID。 **取值范围**: 不涉及。
    * queryId  **参数解释**: 查询 ID。 **取值范围**: 不涉及。
    * query  **参数解释**: SQL文本。 **取值范围**: 不涉及。
    * currentXid  **参数解释**: 当前事务ID。 **取值范围**: 不涉及。
    * topXid  **参数解释**: 顶层事务ID。 **取值范围**: 不涉及。
    * xlogQuantity  **参数解释**: 事务当前使用的XLOG量，单位为字节。 **取值范围**: 不涉及。
    * state  **参数解释**: 该会话当前总体状态。 **取值范围**: -active：后台正在执行一个查询。 -idle：后台正在等待一个新的客户端命令。 -idle in transaction：后台在事务中，但事务中没有语句在执行。 -fastpath function call：后台正在执行一个fast-path函数。 -disabled：如果后台禁用track_activities，则事务显示此状态。
    * applicationName  **参数解释**: 应用名称。 **取值范围**: 不涉及。
    * connectionInfo  **参数解释**: 连接信息。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sessionId' => null,
        'pid' => null,
        'waitEvent' => null,
        'waitStatus' => null,
        'databaseName' => null,
        'userName' => null,
        'clientAddr' => null,
        'clientPort' => null,
        'sessionTime' => null,
        'xactStart' => null,
        'transactionTime' => null,
        'queryStart' => null,
        'stateChange' => null,
        'queryTime' => null,
        'backendStart' => null,
        'waiting' => null,
        'lockmode' => null,
        'blockSessionid' => null,
        'blockCount' => null,
        'uniqueSqlId' => null,
        'queryId' => null,
        'query' => null,
        'currentXid' => null,
        'topXid' => null,
        'xlogQuantity' => null,
        'state' => null,
        'applicationName' => null,
        'connectionInfo' => null
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
    * sessionId  **参数解释**: 会话ID。 **取值范围**: 不涉及。
    * pid  **参数解释**: 线程ID。 **取值范围**: 不涉及。
    * waitEvent  **参数解释**: 等待事件。 参见“开发指南 > 系统表和系统视图 > 系统视图 > 其他系统视图 > PG_THREAD_WAIT_STATUS”中的wait_event字段。 **取值范围**: 不涉及。
    * waitStatus  **参数解释**: 等待状态。 参见“开发指南 > 系统表和系统视图 > 系统视图 > 其他系统视图 > PG_THREAD_WAIT_STATUS”中的等待状态列表。 **取值范围**: 不涉及。
    * databaseName  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    * userName  **参数解释**: 用户名称。 **取值范围**: 不涉及。
    * clientAddr  **参数解释**: 客户端地址。 **取值范围**: 不涉及。
    * clientPort  **参数解释**: 客户端用于与后台通讯的TCP端口号。 **取值范围**: 不涉及。
    * sessionTime  **参数解释**: 会话持续时间，单位：秒。 **取值范围**: 不涉及。
    * xactStart  **参数解释**: 会话开始时间。 **取值范围**: 不涉及。
    * transactionTime  **参数解释**: 事务持续时间，单位秒。 **取值范围**: 不涉及。
    * queryStart  **参数解释**: 查询开始时间。 **取值范围**: 不涉及。
    * stateChange  **参数解释**: 上次状态改变的时间。 **取值范围**: 不涉及。
    * queryTime  **参数解释**: 查询持续时间，单位秒。 **取值范围**: 不涉及。
    * backendStart  **参数解释**: 会话开始时间。 **取值范围**: 不涉及。
    * waiting  **参数解释**: 是否在等待锁。 **取值范围**: 不涉及。
    * lockmode  **参数解释**: （等待获取的）锁模式。 **取值范围**: 不涉及。
    * blockSessionid  **参数解释**: 阻塞会话ID。 **取值范围**: 不涉及。
    * blockCount  **参数解释**: 阻塞会话数。 **取值范围**: 不涉及。
    * uniqueSqlId  **参数解释**: 归一化SQL ID。 **取值范围**: 不涉及。
    * queryId  **参数解释**: 查询 ID。 **取值范围**: 不涉及。
    * query  **参数解释**: SQL文本。 **取值范围**: 不涉及。
    * currentXid  **参数解释**: 当前事务ID。 **取值范围**: 不涉及。
    * topXid  **参数解释**: 顶层事务ID。 **取值范围**: 不涉及。
    * xlogQuantity  **参数解释**: 事务当前使用的XLOG量，单位为字节。 **取值范围**: 不涉及。
    * state  **参数解释**: 该会话当前总体状态。 **取值范围**: -active：后台正在执行一个查询。 -idle：后台正在等待一个新的客户端命令。 -idle in transaction：后台在事务中，但事务中没有语句在执行。 -fastpath function call：后台正在执行一个fast-path函数。 -disabled：如果后台禁用track_activities，则事务显示此状态。
    * applicationName  **参数解释**: 应用名称。 **取值范围**: 不涉及。
    * connectionInfo  **参数解释**: 连接信息。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sessionId' => 'session_id',
            'pid' => 'pid',
            'waitEvent' => 'wait_event',
            'waitStatus' => 'wait_status',
            'databaseName' => 'database_name',
            'userName' => 'user_name',
            'clientAddr' => 'client_addr',
            'clientPort' => 'client_port',
            'sessionTime' => 'session_time',
            'xactStart' => 'xact_start',
            'transactionTime' => 'transaction_time',
            'queryStart' => 'query_start',
            'stateChange' => 'state_change',
            'queryTime' => 'query_time',
            'backendStart' => 'backend_start',
            'waiting' => 'waiting',
            'lockmode' => 'lockmode',
            'blockSessionid' => 'block_sessionid',
            'blockCount' => 'block_count',
            'uniqueSqlId' => 'unique_sql_id',
            'queryId' => 'query_id',
            'query' => 'query',
            'currentXid' => 'current_xid',
            'topXid' => 'top_xid',
            'xlogQuantity' => 'xlog_quantity',
            'state' => 'state',
            'applicationName' => 'application_name',
            'connectionInfo' => 'connection_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sessionId  **参数解释**: 会话ID。 **取值范围**: 不涉及。
    * pid  **参数解释**: 线程ID。 **取值范围**: 不涉及。
    * waitEvent  **参数解释**: 等待事件。 参见“开发指南 > 系统表和系统视图 > 系统视图 > 其他系统视图 > PG_THREAD_WAIT_STATUS”中的wait_event字段。 **取值范围**: 不涉及。
    * waitStatus  **参数解释**: 等待状态。 参见“开发指南 > 系统表和系统视图 > 系统视图 > 其他系统视图 > PG_THREAD_WAIT_STATUS”中的等待状态列表。 **取值范围**: 不涉及。
    * databaseName  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    * userName  **参数解释**: 用户名称。 **取值范围**: 不涉及。
    * clientAddr  **参数解释**: 客户端地址。 **取值范围**: 不涉及。
    * clientPort  **参数解释**: 客户端用于与后台通讯的TCP端口号。 **取值范围**: 不涉及。
    * sessionTime  **参数解释**: 会话持续时间，单位：秒。 **取值范围**: 不涉及。
    * xactStart  **参数解释**: 会话开始时间。 **取值范围**: 不涉及。
    * transactionTime  **参数解释**: 事务持续时间，单位秒。 **取值范围**: 不涉及。
    * queryStart  **参数解释**: 查询开始时间。 **取值范围**: 不涉及。
    * stateChange  **参数解释**: 上次状态改变的时间。 **取值范围**: 不涉及。
    * queryTime  **参数解释**: 查询持续时间，单位秒。 **取值范围**: 不涉及。
    * backendStart  **参数解释**: 会话开始时间。 **取值范围**: 不涉及。
    * waiting  **参数解释**: 是否在等待锁。 **取值范围**: 不涉及。
    * lockmode  **参数解释**: （等待获取的）锁模式。 **取值范围**: 不涉及。
    * blockSessionid  **参数解释**: 阻塞会话ID。 **取值范围**: 不涉及。
    * blockCount  **参数解释**: 阻塞会话数。 **取值范围**: 不涉及。
    * uniqueSqlId  **参数解释**: 归一化SQL ID。 **取值范围**: 不涉及。
    * queryId  **参数解释**: 查询 ID。 **取值范围**: 不涉及。
    * query  **参数解释**: SQL文本。 **取值范围**: 不涉及。
    * currentXid  **参数解释**: 当前事务ID。 **取值范围**: 不涉及。
    * topXid  **参数解释**: 顶层事务ID。 **取值范围**: 不涉及。
    * xlogQuantity  **参数解释**: 事务当前使用的XLOG量，单位为字节。 **取值范围**: 不涉及。
    * state  **参数解释**: 该会话当前总体状态。 **取值范围**: -active：后台正在执行一个查询。 -idle：后台正在等待一个新的客户端命令。 -idle in transaction：后台在事务中，但事务中没有语句在执行。 -fastpath function call：后台正在执行一个fast-path函数。 -disabled：如果后台禁用track_activities，则事务显示此状态。
    * applicationName  **参数解释**: 应用名称。 **取值范围**: 不涉及。
    * connectionInfo  **参数解释**: 连接信息。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'sessionId' => 'setSessionId',
            'pid' => 'setPid',
            'waitEvent' => 'setWaitEvent',
            'waitStatus' => 'setWaitStatus',
            'databaseName' => 'setDatabaseName',
            'userName' => 'setUserName',
            'clientAddr' => 'setClientAddr',
            'clientPort' => 'setClientPort',
            'sessionTime' => 'setSessionTime',
            'xactStart' => 'setXactStart',
            'transactionTime' => 'setTransactionTime',
            'queryStart' => 'setQueryStart',
            'stateChange' => 'setStateChange',
            'queryTime' => 'setQueryTime',
            'backendStart' => 'setBackendStart',
            'waiting' => 'setWaiting',
            'lockmode' => 'setLockmode',
            'blockSessionid' => 'setBlockSessionid',
            'blockCount' => 'setBlockCount',
            'uniqueSqlId' => 'setUniqueSqlId',
            'queryId' => 'setQueryId',
            'query' => 'setQuery',
            'currentXid' => 'setCurrentXid',
            'topXid' => 'setTopXid',
            'xlogQuantity' => 'setXlogQuantity',
            'state' => 'setState',
            'applicationName' => 'setApplicationName',
            'connectionInfo' => 'setConnectionInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sessionId  **参数解释**: 会话ID。 **取值范围**: 不涉及。
    * pid  **参数解释**: 线程ID。 **取值范围**: 不涉及。
    * waitEvent  **参数解释**: 等待事件。 参见“开发指南 > 系统表和系统视图 > 系统视图 > 其他系统视图 > PG_THREAD_WAIT_STATUS”中的wait_event字段。 **取值范围**: 不涉及。
    * waitStatus  **参数解释**: 等待状态。 参见“开发指南 > 系统表和系统视图 > 系统视图 > 其他系统视图 > PG_THREAD_WAIT_STATUS”中的等待状态列表。 **取值范围**: 不涉及。
    * databaseName  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    * userName  **参数解释**: 用户名称。 **取值范围**: 不涉及。
    * clientAddr  **参数解释**: 客户端地址。 **取值范围**: 不涉及。
    * clientPort  **参数解释**: 客户端用于与后台通讯的TCP端口号。 **取值范围**: 不涉及。
    * sessionTime  **参数解释**: 会话持续时间，单位：秒。 **取值范围**: 不涉及。
    * xactStart  **参数解释**: 会话开始时间。 **取值范围**: 不涉及。
    * transactionTime  **参数解释**: 事务持续时间，单位秒。 **取值范围**: 不涉及。
    * queryStart  **参数解释**: 查询开始时间。 **取值范围**: 不涉及。
    * stateChange  **参数解释**: 上次状态改变的时间。 **取值范围**: 不涉及。
    * queryTime  **参数解释**: 查询持续时间，单位秒。 **取值范围**: 不涉及。
    * backendStart  **参数解释**: 会话开始时间。 **取值范围**: 不涉及。
    * waiting  **参数解释**: 是否在等待锁。 **取值范围**: 不涉及。
    * lockmode  **参数解释**: （等待获取的）锁模式。 **取值范围**: 不涉及。
    * blockSessionid  **参数解释**: 阻塞会话ID。 **取值范围**: 不涉及。
    * blockCount  **参数解释**: 阻塞会话数。 **取值范围**: 不涉及。
    * uniqueSqlId  **参数解释**: 归一化SQL ID。 **取值范围**: 不涉及。
    * queryId  **参数解释**: 查询 ID。 **取值范围**: 不涉及。
    * query  **参数解释**: SQL文本。 **取值范围**: 不涉及。
    * currentXid  **参数解释**: 当前事务ID。 **取值范围**: 不涉及。
    * topXid  **参数解释**: 顶层事务ID。 **取值范围**: 不涉及。
    * xlogQuantity  **参数解释**: 事务当前使用的XLOG量，单位为字节。 **取值范围**: 不涉及。
    * state  **参数解释**: 该会话当前总体状态。 **取值范围**: -active：后台正在执行一个查询。 -idle：后台正在等待一个新的客户端命令。 -idle in transaction：后台在事务中，但事务中没有语句在执行。 -fastpath function call：后台正在执行一个fast-path函数。 -disabled：如果后台禁用track_activities，则事务显示此状态。
    * applicationName  **参数解释**: 应用名称。 **取值范围**: 不涉及。
    * connectionInfo  **参数解释**: 连接信息。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'sessionId' => 'getSessionId',
            'pid' => 'getPid',
            'waitEvent' => 'getWaitEvent',
            'waitStatus' => 'getWaitStatus',
            'databaseName' => 'getDatabaseName',
            'userName' => 'getUserName',
            'clientAddr' => 'getClientAddr',
            'clientPort' => 'getClientPort',
            'sessionTime' => 'getSessionTime',
            'xactStart' => 'getXactStart',
            'transactionTime' => 'getTransactionTime',
            'queryStart' => 'getQueryStart',
            'stateChange' => 'getStateChange',
            'queryTime' => 'getQueryTime',
            'backendStart' => 'getBackendStart',
            'waiting' => 'getWaiting',
            'lockmode' => 'getLockmode',
            'blockSessionid' => 'getBlockSessionid',
            'blockCount' => 'getBlockCount',
            'uniqueSqlId' => 'getUniqueSqlId',
            'queryId' => 'getQueryId',
            'query' => 'getQuery',
            'currentXid' => 'getCurrentXid',
            'topXid' => 'getTopXid',
            'xlogQuantity' => 'getXlogQuantity',
            'state' => 'getState',
            'applicationName' => 'getApplicationName',
            'connectionInfo' => 'getConnectionInfo'
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
        $this->container['waitEvent'] = isset($data['waitEvent']) ? $data['waitEvent'] : null;
        $this->container['waitStatus'] = isset($data['waitStatus']) ? $data['waitStatus'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['clientAddr'] = isset($data['clientAddr']) ? $data['clientAddr'] : null;
        $this->container['clientPort'] = isset($data['clientPort']) ? $data['clientPort'] : null;
        $this->container['sessionTime'] = isset($data['sessionTime']) ? $data['sessionTime'] : null;
        $this->container['xactStart'] = isset($data['xactStart']) ? $data['xactStart'] : null;
        $this->container['transactionTime'] = isset($data['transactionTime']) ? $data['transactionTime'] : null;
        $this->container['queryStart'] = isset($data['queryStart']) ? $data['queryStart'] : null;
        $this->container['stateChange'] = isset($data['stateChange']) ? $data['stateChange'] : null;
        $this->container['queryTime'] = isset($data['queryTime']) ? $data['queryTime'] : null;
        $this->container['backendStart'] = isset($data['backendStart']) ? $data['backendStart'] : null;
        $this->container['waiting'] = isset($data['waiting']) ? $data['waiting'] : null;
        $this->container['lockmode'] = isset($data['lockmode']) ? $data['lockmode'] : null;
        $this->container['blockSessionid'] = isset($data['blockSessionid']) ? $data['blockSessionid'] : null;
        $this->container['blockCount'] = isset($data['blockCount']) ? $data['blockCount'] : null;
        $this->container['uniqueSqlId'] = isset($data['uniqueSqlId']) ? $data['uniqueSqlId'] : null;
        $this->container['queryId'] = isset($data['queryId']) ? $data['queryId'] : null;
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['currentXid'] = isset($data['currentXid']) ? $data['currentXid'] : null;
        $this->container['topXid'] = isset($data['topXid']) ? $data['topXid'] : null;
        $this->container['xlogQuantity'] = isset($data['xlogQuantity']) ? $data['xlogQuantity'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['applicationName'] = isset($data['applicationName']) ? $data['applicationName'] : null;
        $this->container['connectionInfo'] = isset($data['connectionInfo']) ? $data['connectionInfo'] : null;
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
    * Gets pid
    *  **参数解释**: 线程ID。 **取值范围**: 不涉及。
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
    * @param string|null $pid **参数解释**: 线程ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setPid($pid)
    {
        $this->container['pid'] = $pid;
        return $this;
    }

    /**
    * Gets waitEvent
    *  **参数解释**: 等待事件。 参见“开发指南 > 系统表和系统视图 > 系统视图 > 其他系统视图 > PG_THREAD_WAIT_STATUS”中的wait_event字段。 **取值范围**: 不涉及。
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
    * @param string|null $waitEvent **参数解释**: 等待事件。 参见“开发指南 > 系统表和系统视图 > 系统视图 > 其他系统视图 > PG_THREAD_WAIT_STATUS”中的wait_event字段。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setWaitEvent($waitEvent)
    {
        $this->container['waitEvent'] = $waitEvent;
        return $this;
    }

    /**
    * Gets waitStatus
    *  **参数解释**: 等待状态。 参见“开发指南 > 系统表和系统视图 > 系统视图 > 其他系统视图 > PG_THREAD_WAIT_STATUS”中的等待状态列表。 **取值范围**: 不涉及。
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
    * @param string|null $waitStatus **参数解释**: 等待状态。 参见“开发指南 > 系统表和系统视图 > 系统视图 > 其他系统视图 > PG_THREAD_WAIT_STATUS”中的等待状态列表。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setWaitStatus($waitStatus)
    {
        $this->container['waitStatus'] = $waitStatus;
        return $this;
    }

    /**
    * Gets databaseName
    *  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
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
    * @param string|null $databaseName **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets userName
    *  **参数解释**: 用户名称。 **取值范围**: 不涉及。
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
    * @param string|null $userName **参数解释**: 用户名称。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets clientAddr
    *  **参数解释**: 客户端地址。 **取值范围**: 不涉及。
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
    * @param string|null $clientAddr **参数解释**: 客户端地址。 **取值范围**: 不涉及。
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
    *  **参数解释**: 客户端用于与后台通讯的TCP端口号。 **取值范围**: 不涉及。
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
    * @param string|null $clientPort **参数解释**: 客户端用于与后台通讯的TCP端口号。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setClientPort($clientPort)
    {
        $this->container['clientPort'] = $clientPort;
        return $this;
    }

    /**
    * Gets sessionTime
    *  **参数解释**: 会话持续时间，单位：秒。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getSessionTime()
    {
        return $this->container['sessionTime'];
    }

    /**
    * Sets sessionTime
    *
    * @param string|null $sessionTime **参数解释**: 会话持续时间，单位：秒。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setSessionTime($sessionTime)
    {
        $this->container['sessionTime'] = $sessionTime;
        return $this;
    }

    /**
    * Gets xactStart
    *  **参数解释**: 会话开始时间。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getXactStart()
    {
        return $this->container['xactStart'];
    }

    /**
    * Sets xactStart
    *
    * @param string|null $xactStart **参数解释**: 会话开始时间。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setXactStart($xactStart)
    {
        $this->container['xactStart'] = $xactStart;
        return $this;
    }

    /**
    * Gets transactionTime
    *  **参数解释**: 事务持续时间，单位秒。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getTransactionTime()
    {
        return $this->container['transactionTime'];
    }

    /**
    * Sets transactionTime
    *
    * @param string|null $transactionTime **参数解释**: 事务持续时间，单位秒。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setTransactionTime($transactionTime)
    {
        $this->container['transactionTime'] = $transactionTime;
        return $this;
    }

    /**
    * Gets queryStart
    *  **参数解释**: 查询开始时间。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getQueryStart()
    {
        return $this->container['queryStart'];
    }

    /**
    * Sets queryStart
    *
    * @param string|null $queryStart **参数解释**: 查询开始时间。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setQueryStart($queryStart)
    {
        $this->container['queryStart'] = $queryStart;
        return $this;
    }

    /**
    * Gets stateChange
    *  **参数解释**: 上次状态改变的时间。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getStateChange()
    {
        return $this->container['stateChange'];
    }

    /**
    * Sets stateChange
    *
    * @param string|null $stateChange **参数解释**: 上次状态改变的时间。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setStateChange($stateChange)
    {
        $this->container['stateChange'] = $stateChange;
        return $this;
    }

    /**
    * Gets queryTime
    *  **参数解释**: 查询持续时间，单位秒。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getQueryTime()
    {
        return $this->container['queryTime'];
    }

    /**
    * Sets queryTime
    *
    * @param string|null $queryTime **参数解释**: 查询持续时间，单位秒。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setQueryTime($queryTime)
    {
        $this->container['queryTime'] = $queryTime;
        return $this;
    }

    /**
    * Gets backendStart
    *  **参数解释**: 会话开始时间。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getBackendStart()
    {
        return $this->container['backendStart'];
    }

    /**
    * Sets backendStart
    *
    * @param string|null $backendStart **参数解释**: 会话开始时间。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setBackendStart($backendStart)
    {
        $this->container['backendStart'] = $backendStart;
        return $this;
    }

    /**
    * Gets waiting
    *  **参数解释**: 是否在等待锁。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getWaiting()
    {
        return $this->container['waiting'];
    }

    /**
    * Sets waiting
    *
    * @param string|null $waiting **参数解释**: 是否在等待锁。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setWaiting($waiting)
    {
        $this->container['waiting'] = $waiting;
        return $this;
    }

    /**
    * Gets lockmode
    *  **参数解释**: （等待获取的）锁模式。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getLockmode()
    {
        return $this->container['lockmode'];
    }

    /**
    * Sets lockmode
    *
    * @param string|null $lockmode **参数解释**: （等待获取的）锁模式。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setLockmode($lockmode)
    {
        $this->container['lockmode'] = $lockmode;
        return $this;
    }

    /**
    * Gets blockSessionid
    *  **参数解释**: 阻塞会话ID。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getBlockSessionid()
    {
        return $this->container['blockSessionid'];
    }

    /**
    * Sets blockSessionid
    *
    * @param string|null $blockSessionid **参数解释**: 阻塞会话ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setBlockSessionid($blockSessionid)
    {
        $this->container['blockSessionid'] = $blockSessionid;
        return $this;
    }

    /**
    * Gets blockCount
    *  **参数解释**: 阻塞会话数。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getBlockCount()
    {
        return $this->container['blockCount'];
    }

    /**
    * Sets blockCount
    *
    * @param string|null $blockCount **参数解释**: 阻塞会话数。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setBlockCount($blockCount)
    {
        $this->container['blockCount'] = $blockCount;
        return $this;
    }

    /**
    * Gets uniqueSqlId
    *  **参数解释**: 归一化SQL ID。 **取值范围**: 不涉及。
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
    * @param string|null $uniqueSqlId **参数解释**: 归一化SQL ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setUniqueSqlId($uniqueSqlId)
    {
        $this->container['uniqueSqlId'] = $uniqueSqlId;
        return $this;
    }

    /**
    * Gets queryId
    *  **参数解释**: 查询 ID。 **取值范围**: 不涉及。
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
    * @param string|null $queryId **参数解释**: 查询 ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setQueryId($queryId)
    {
        $this->container['queryId'] = $queryId;
        return $this;
    }

    /**
    * Gets query
    *  **参数解释**: SQL文本。 **取值范围**: 不涉及。
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
    * @param string|null $query **参数解释**: SQL文本。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setQuery($query)
    {
        $this->container['query'] = $query;
        return $this;
    }

    /**
    * Gets currentXid
    *  **参数解释**: 当前事务ID。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getCurrentXid()
    {
        return $this->container['currentXid'];
    }

    /**
    * Sets currentXid
    *
    * @param string|null $currentXid **参数解释**: 当前事务ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setCurrentXid($currentXid)
    {
        $this->container['currentXid'] = $currentXid;
        return $this;
    }

    /**
    * Gets topXid
    *  **参数解释**: 顶层事务ID。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getTopXid()
    {
        return $this->container['topXid'];
    }

    /**
    * Sets topXid
    *
    * @param string|null $topXid **参数解释**: 顶层事务ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setTopXid($topXid)
    {
        $this->container['topXid'] = $topXid;
        return $this;
    }

    /**
    * Gets xlogQuantity
    *  **参数解释**: 事务当前使用的XLOG量，单位为字节。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getXlogQuantity()
    {
        return $this->container['xlogQuantity'];
    }

    /**
    * Sets xlogQuantity
    *
    * @param string|null $xlogQuantity **参数解释**: 事务当前使用的XLOG量，单位为字节。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setXlogQuantity($xlogQuantity)
    {
        $this->container['xlogQuantity'] = $xlogQuantity;
        return $this;
    }

    /**
    * Gets state
    *  **参数解释**: 该会话当前总体状态。 **取值范围**: -active：后台正在执行一个查询。 -idle：后台正在等待一个新的客户端命令。 -idle in transaction：后台在事务中，但事务中没有语句在执行。 -fastpath function call：后台正在执行一个fast-path函数。 -disabled：如果后台禁用track_activities，则事务显示此状态。
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
    * @param string|null $state **参数解释**: 该会话当前总体状态。 **取值范围**: -active：后台正在执行一个查询。 -idle：后台正在等待一个新的客户端命令。 -idle in transaction：后台在事务中，但事务中没有语句在执行。 -fastpath function call：后台正在执行一个fast-path函数。 -disabled：如果后台禁用track_activities，则事务显示此状态。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets applicationName
    *  **参数解释**: 应用名称。 **取值范围**: 不涉及。
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
    * @param string|null $applicationName **参数解释**: 应用名称。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setApplicationName($applicationName)
    {
        $this->container['applicationName'] = $applicationName;
        return $this;
    }

    /**
    * Gets connectionInfo
    *  **参数解释**: 连接信息。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getConnectionInfo()
    {
        return $this->container['connectionInfo'];
    }

    /**
    * Sets connectionInfo
    *
    * @param string|null $connectionInfo **参数解释**: 连接信息。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setConnectionInfo($connectionInfo)
    {
        $this->container['connectionInfo'] = $connectionInfo;
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

