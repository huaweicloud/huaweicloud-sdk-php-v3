<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FullSqlResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FullSqlResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**: SQL记录唯一键ID。 **取值范围**: 不涉及。
    * instanceId  **参数解释**: 实例ID。 **取值范围**: 不涉及。
    * nodeId  **参数解释**: 节点ID。 **取值范围**: 不涉及。
    * componentId  **参数解释**: 组件ID。 **取值范围**: 不涉及。
    * dbName  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    * schemaName  **参数解释**: schema名称。 **取值范围**: 不涉及。
    * username  **参数解释**: 用户名称。 **取值范围**: 不涉及。
    * applicationName  **参数解释**: 用户发起的请求的应用程序名称。 **取值范围**: 不涉及。
    * clientAddr  **参数解释**: 用户发起的请求的客户端地址。 **取值范围**: 不涉及。
    * clientPort  **参数解释**: 用户发起请求的客户端端口。 **取值范围**: 不涉及。
    * sqlId  **参数解释**: 归一化SQL ID，对应内核字段：unique_sql_id。 **取值范围**: 不涉及。
    * sqlExecId  **参数解释**: 唯一SQL ID，对应内核字段：debug_query_id。 **取值范围**: 不涉及。
    * transactionId  **参数解释**: 事务ID，对应内核字段：debug_query_id。 **取值范围**: 不涉及。
    * traceId  **参数解释**: 链路ID。 **取值范围**: 不涉及。
    * query  **参数解释**: 归一化SQL。 **取值范围**: 不涉及。
    * sql  **参数解释**: 解析后的原始SQL文本。 **取值范围**: 开启track_stmt_parameter参数后，会把SQL文本中的变量替换成真实值，展示原始的SQL。对于track_stmt_parameter参数关闭时采集的SQL文本，无法获取到SQL参数变量的值，展示的内容为空。
    * beginTime  **参数解释**: 开始时间，格式为“yyyy-mm-ddThh:mm:ss.SSSSSZ”。 **取值范围**: 不涉及。
    * endTime  **参数解释**: 结束时间，格式为“yyyy-mm-ddThh:mm:ss.SSSSSZ”。 **取值范围**: 不涉及。
    * allTime  **参数解释**: 执行总时间（单位：微秒）。 **取值范围**: 不涉及。
    * dbTime  **参数解释**: 有效DB时间（单位：微秒）。 **取值范围**: 不涉及。
    * cpuTime  **参数解释**: CPU时间（单位：微秒）。 **取值范围**: 不涉及。
    * dataIoTime  **参数解释**: IO时间（单位：微秒）。 **取值范围**: 不涉及。
    * executionTime  **参数解释**: 执行器内执行时间（单位：微秒）。 **取值范围**: 不涉及。
    * scanLines  **参数解释**: 扫描行。 **取值范围**: 不涉及。
    * insertRows  **参数解释**: 插入行。 **取值范围**: 不涉及。
    * updateRows  **参数解释**: 更新行。 **取值范围**: 不涉及。
    * deleteRows  **参数解释**: 删除行。 **取值范围**: 不涉及。
    * isSlowSql  **参数解释**: 是否慢SQL。 **取值范围**: 不涉及。
    * startTimestamp  **参数解释**: SQL开始时间。格式为13位标准时间戳，如1754647168354。 **取值范围**: 不涉及。
    * finishTimestamp  **参数解释**: SQL结束时间，格式为13位标准时间戳，如1754647168355。 **取值范围**: 不涉及。
    * hitRate  **参数解释**: SQL命中率。 计划即将下线，请勿使用。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'instanceId' => 'string',
            'nodeId' => 'string',
            'componentId' => 'string',
            'dbName' => 'string',
            'schemaName' => 'string',
            'username' => 'string',
            'applicationName' => 'string',
            'clientAddr' => 'string',
            'clientPort' => 'string',
            'sqlId' => 'string',
            'sqlExecId' => 'string',
            'transactionId' => 'string',
            'traceId' => 'string',
            'query' => 'string',
            'sql' => 'string',
            'beginTime' => 'string',
            'endTime' => 'string',
            'allTime' => 'int',
            'dbTime' => 'int',
            'cpuTime' => 'int',
            'dataIoTime' => 'int',
            'executionTime' => 'int',
            'scanLines' => 'int',
            'insertRows' => 'int',
            'updateRows' => 'int',
            'deleteRows' => 'int',
            'isSlowSql' => 'bool',
            'startTimestamp' => 'int',
            'finishTimestamp' => 'int',
            'hitRate' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**: SQL记录唯一键ID。 **取值范围**: 不涉及。
    * instanceId  **参数解释**: 实例ID。 **取值范围**: 不涉及。
    * nodeId  **参数解释**: 节点ID。 **取值范围**: 不涉及。
    * componentId  **参数解释**: 组件ID。 **取值范围**: 不涉及。
    * dbName  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    * schemaName  **参数解释**: schema名称。 **取值范围**: 不涉及。
    * username  **参数解释**: 用户名称。 **取值范围**: 不涉及。
    * applicationName  **参数解释**: 用户发起的请求的应用程序名称。 **取值范围**: 不涉及。
    * clientAddr  **参数解释**: 用户发起的请求的客户端地址。 **取值范围**: 不涉及。
    * clientPort  **参数解释**: 用户发起请求的客户端端口。 **取值范围**: 不涉及。
    * sqlId  **参数解释**: 归一化SQL ID，对应内核字段：unique_sql_id。 **取值范围**: 不涉及。
    * sqlExecId  **参数解释**: 唯一SQL ID，对应内核字段：debug_query_id。 **取值范围**: 不涉及。
    * transactionId  **参数解释**: 事务ID，对应内核字段：debug_query_id。 **取值范围**: 不涉及。
    * traceId  **参数解释**: 链路ID。 **取值范围**: 不涉及。
    * query  **参数解释**: 归一化SQL。 **取值范围**: 不涉及。
    * sql  **参数解释**: 解析后的原始SQL文本。 **取值范围**: 开启track_stmt_parameter参数后，会把SQL文本中的变量替换成真实值，展示原始的SQL。对于track_stmt_parameter参数关闭时采集的SQL文本，无法获取到SQL参数变量的值，展示的内容为空。
    * beginTime  **参数解释**: 开始时间，格式为“yyyy-mm-ddThh:mm:ss.SSSSSZ”。 **取值范围**: 不涉及。
    * endTime  **参数解释**: 结束时间，格式为“yyyy-mm-ddThh:mm:ss.SSSSSZ”。 **取值范围**: 不涉及。
    * allTime  **参数解释**: 执行总时间（单位：微秒）。 **取值范围**: 不涉及。
    * dbTime  **参数解释**: 有效DB时间（单位：微秒）。 **取值范围**: 不涉及。
    * cpuTime  **参数解释**: CPU时间（单位：微秒）。 **取值范围**: 不涉及。
    * dataIoTime  **参数解释**: IO时间（单位：微秒）。 **取值范围**: 不涉及。
    * executionTime  **参数解释**: 执行器内执行时间（单位：微秒）。 **取值范围**: 不涉及。
    * scanLines  **参数解释**: 扫描行。 **取值范围**: 不涉及。
    * insertRows  **参数解释**: 插入行。 **取值范围**: 不涉及。
    * updateRows  **参数解释**: 更新行。 **取值范围**: 不涉及。
    * deleteRows  **参数解释**: 删除行。 **取值范围**: 不涉及。
    * isSlowSql  **参数解释**: 是否慢SQL。 **取值范围**: 不涉及。
    * startTimestamp  **参数解释**: SQL开始时间。格式为13位标准时间戳，如1754647168354。 **取值范围**: 不涉及。
    * finishTimestamp  **参数解释**: SQL结束时间，格式为13位标准时间戳，如1754647168355。 **取值范围**: 不涉及。
    * hitRate  **参数解释**: SQL命中率。 计划即将下线，请勿使用。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'instanceId' => null,
        'nodeId' => null,
        'componentId' => null,
        'dbName' => null,
        'schemaName' => null,
        'username' => null,
        'applicationName' => null,
        'clientAddr' => null,
        'clientPort' => null,
        'sqlId' => null,
        'sqlExecId' => null,
        'transactionId' => null,
        'traceId' => null,
        'query' => null,
        'sql' => null,
        'beginTime' => null,
        'endTime' => null,
        'allTime' => 'int64',
        'dbTime' => 'int64',
        'cpuTime' => 'int64',
        'dataIoTime' => 'int64',
        'executionTime' => 'int64',
        'scanLines' => 'int64',
        'insertRows' => 'int64',
        'updateRows' => 'int64',
        'deleteRows' => 'int64',
        'isSlowSql' => null,
        'startTimestamp' => 'int64',
        'finishTimestamp' => 'int64',
        'hitRate' => 'double'
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
    * id  **参数解释**: SQL记录唯一键ID。 **取值范围**: 不涉及。
    * instanceId  **参数解释**: 实例ID。 **取值范围**: 不涉及。
    * nodeId  **参数解释**: 节点ID。 **取值范围**: 不涉及。
    * componentId  **参数解释**: 组件ID。 **取值范围**: 不涉及。
    * dbName  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    * schemaName  **参数解释**: schema名称。 **取值范围**: 不涉及。
    * username  **参数解释**: 用户名称。 **取值范围**: 不涉及。
    * applicationName  **参数解释**: 用户发起的请求的应用程序名称。 **取值范围**: 不涉及。
    * clientAddr  **参数解释**: 用户发起的请求的客户端地址。 **取值范围**: 不涉及。
    * clientPort  **参数解释**: 用户发起请求的客户端端口。 **取值范围**: 不涉及。
    * sqlId  **参数解释**: 归一化SQL ID，对应内核字段：unique_sql_id。 **取值范围**: 不涉及。
    * sqlExecId  **参数解释**: 唯一SQL ID，对应内核字段：debug_query_id。 **取值范围**: 不涉及。
    * transactionId  **参数解释**: 事务ID，对应内核字段：debug_query_id。 **取值范围**: 不涉及。
    * traceId  **参数解释**: 链路ID。 **取值范围**: 不涉及。
    * query  **参数解释**: 归一化SQL。 **取值范围**: 不涉及。
    * sql  **参数解释**: 解析后的原始SQL文本。 **取值范围**: 开启track_stmt_parameter参数后，会把SQL文本中的变量替换成真实值，展示原始的SQL。对于track_stmt_parameter参数关闭时采集的SQL文本，无法获取到SQL参数变量的值，展示的内容为空。
    * beginTime  **参数解释**: 开始时间，格式为“yyyy-mm-ddThh:mm:ss.SSSSSZ”。 **取值范围**: 不涉及。
    * endTime  **参数解释**: 结束时间，格式为“yyyy-mm-ddThh:mm:ss.SSSSSZ”。 **取值范围**: 不涉及。
    * allTime  **参数解释**: 执行总时间（单位：微秒）。 **取值范围**: 不涉及。
    * dbTime  **参数解释**: 有效DB时间（单位：微秒）。 **取值范围**: 不涉及。
    * cpuTime  **参数解释**: CPU时间（单位：微秒）。 **取值范围**: 不涉及。
    * dataIoTime  **参数解释**: IO时间（单位：微秒）。 **取值范围**: 不涉及。
    * executionTime  **参数解释**: 执行器内执行时间（单位：微秒）。 **取值范围**: 不涉及。
    * scanLines  **参数解释**: 扫描行。 **取值范围**: 不涉及。
    * insertRows  **参数解释**: 插入行。 **取值范围**: 不涉及。
    * updateRows  **参数解释**: 更新行。 **取值范围**: 不涉及。
    * deleteRows  **参数解释**: 删除行。 **取值范围**: 不涉及。
    * isSlowSql  **参数解释**: 是否慢SQL。 **取值范围**: 不涉及。
    * startTimestamp  **参数解释**: SQL开始时间。格式为13位标准时间戳，如1754647168354。 **取值范围**: 不涉及。
    * finishTimestamp  **参数解释**: SQL结束时间，格式为13位标准时间戳，如1754647168355。 **取值范围**: 不涉及。
    * hitRate  **参数解释**: SQL命中率。 计划即将下线，请勿使用。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'instanceId' => 'instance_id',
            'nodeId' => 'node_id',
            'componentId' => 'component_id',
            'dbName' => 'db_name',
            'schemaName' => 'schema_name',
            'username' => 'username',
            'applicationName' => 'application_name',
            'clientAddr' => 'client_addr',
            'clientPort' => 'client_port',
            'sqlId' => 'sql_id',
            'sqlExecId' => 'sql_exec_id',
            'transactionId' => 'transaction_id',
            'traceId' => 'trace_id',
            'query' => 'query',
            'sql' => 'sql',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'allTime' => 'all_time',
            'dbTime' => 'db_time',
            'cpuTime' => 'cpu_time',
            'dataIoTime' => 'data_io_time',
            'executionTime' => 'execution_time',
            'scanLines' => 'scan_lines',
            'insertRows' => 'insert_rows',
            'updateRows' => 'update_rows',
            'deleteRows' => 'delete_rows',
            'isSlowSql' => 'is_slow_sql',
            'startTimestamp' => 'start_timestamp',
            'finishTimestamp' => 'finish_timestamp',
            'hitRate' => 'hit_rate'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**: SQL记录唯一键ID。 **取值范围**: 不涉及。
    * instanceId  **参数解释**: 实例ID。 **取值范围**: 不涉及。
    * nodeId  **参数解释**: 节点ID。 **取值范围**: 不涉及。
    * componentId  **参数解释**: 组件ID。 **取值范围**: 不涉及。
    * dbName  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    * schemaName  **参数解释**: schema名称。 **取值范围**: 不涉及。
    * username  **参数解释**: 用户名称。 **取值范围**: 不涉及。
    * applicationName  **参数解释**: 用户发起的请求的应用程序名称。 **取值范围**: 不涉及。
    * clientAddr  **参数解释**: 用户发起的请求的客户端地址。 **取值范围**: 不涉及。
    * clientPort  **参数解释**: 用户发起请求的客户端端口。 **取值范围**: 不涉及。
    * sqlId  **参数解释**: 归一化SQL ID，对应内核字段：unique_sql_id。 **取值范围**: 不涉及。
    * sqlExecId  **参数解释**: 唯一SQL ID，对应内核字段：debug_query_id。 **取值范围**: 不涉及。
    * transactionId  **参数解释**: 事务ID，对应内核字段：debug_query_id。 **取值范围**: 不涉及。
    * traceId  **参数解释**: 链路ID。 **取值范围**: 不涉及。
    * query  **参数解释**: 归一化SQL。 **取值范围**: 不涉及。
    * sql  **参数解释**: 解析后的原始SQL文本。 **取值范围**: 开启track_stmt_parameter参数后，会把SQL文本中的变量替换成真实值，展示原始的SQL。对于track_stmt_parameter参数关闭时采集的SQL文本，无法获取到SQL参数变量的值，展示的内容为空。
    * beginTime  **参数解释**: 开始时间，格式为“yyyy-mm-ddThh:mm:ss.SSSSSZ”。 **取值范围**: 不涉及。
    * endTime  **参数解释**: 结束时间，格式为“yyyy-mm-ddThh:mm:ss.SSSSSZ”。 **取值范围**: 不涉及。
    * allTime  **参数解释**: 执行总时间（单位：微秒）。 **取值范围**: 不涉及。
    * dbTime  **参数解释**: 有效DB时间（单位：微秒）。 **取值范围**: 不涉及。
    * cpuTime  **参数解释**: CPU时间（单位：微秒）。 **取值范围**: 不涉及。
    * dataIoTime  **参数解释**: IO时间（单位：微秒）。 **取值范围**: 不涉及。
    * executionTime  **参数解释**: 执行器内执行时间（单位：微秒）。 **取值范围**: 不涉及。
    * scanLines  **参数解释**: 扫描行。 **取值范围**: 不涉及。
    * insertRows  **参数解释**: 插入行。 **取值范围**: 不涉及。
    * updateRows  **参数解释**: 更新行。 **取值范围**: 不涉及。
    * deleteRows  **参数解释**: 删除行。 **取值范围**: 不涉及。
    * isSlowSql  **参数解释**: 是否慢SQL。 **取值范围**: 不涉及。
    * startTimestamp  **参数解释**: SQL开始时间。格式为13位标准时间戳，如1754647168354。 **取值范围**: 不涉及。
    * finishTimestamp  **参数解释**: SQL结束时间，格式为13位标准时间戳，如1754647168355。 **取值范围**: 不涉及。
    * hitRate  **参数解释**: SQL命中率。 计划即将下线，请勿使用。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'instanceId' => 'setInstanceId',
            'nodeId' => 'setNodeId',
            'componentId' => 'setComponentId',
            'dbName' => 'setDbName',
            'schemaName' => 'setSchemaName',
            'username' => 'setUsername',
            'applicationName' => 'setApplicationName',
            'clientAddr' => 'setClientAddr',
            'clientPort' => 'setClientPort',
            'sqlId' => 'setSqlId',
            'sqlExecId' => 'setSqlExecId',
            'transactionId' => 'setTransactionId',
            'traceId' => 'setTraceId',
            'query' => 'setQuery',
            'sql' => 'setSql',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'allTime' => 'setAllTime',
            'dbTime' => 'setDbTime',
            'cpuTime' => 'setCpuTime',
            'dataIoTime' => 'setDataIoTime',
            'executionTime' => 'setExecutionTime',
            'scanLines' => 'setScanLines',
            'insertRows' => 'setInsertRows',
            'updateRows' => 'setUpdateRows',
            'deleteRows' => 'setDeleteRows',
            'isSlowSql' => 'setIsSlowSql',
            'startTimestamp' => 'setStartTimestamp',
            'finishTimestamp' => 'setFinishTimestamp',
            'hitRate' => 'setHitRate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**: SQL记录唯一键ID。 **取值范围**: 不涉及。
    * instanceId  **参数解释**: 实例ID。 **取值范围**: 不涉及。
    * nodeId  **参数解释**: 节点ID。 **取值范围**: 不涉及。
    * componentId  **参数解释**: 组件ID。 **取值范围**: 不涉及。
    * dbName  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    * schemaName  **参数解释**: schema名称。 **取值范围**: 不涉及。
    * username  **参数解释**: 用户名称。 **取值范围**: 不涉及。
    * applicationName  **参数解释**: 用户发起的请求的应用程序名称。 **取值范围**: 不涉及。
    * clientAddr  **参数解释**: 用户发起的请求的客户端地址。 **取值范围**: 不涉及。
    * clientPort  **参数解释**: 用户发起请求的客户端端口。 **取值范围**: 不涉及。
    * sqlId  **参数解释**: 归一化SQL ID，对应内核字段：unique_sql_id。 **取值范围**: 不涉及。
    * sqlExecId  **参数解释**: 唯一SQL ID，对应内核字段：debug_query_id。 **取值范围**: 不涉及。
    * transactionId  **参数解释**: 事务ID，对应内核字段：debug_query_id。 **取值范围**: 不涉及。
    * traceId  **参数解释**: 链路ID。 **取值范围**: 不涉及。
    * query  **参数解释**: 归一化SQL。 **取值范围**: 不涉及。
    * sql  **参数解释**: 解析后的原始SQL文本。 **取值范围**: 开启track_stmt_parameter参数后，会把SQL文本中的变量替换成真实值，展示原始的SQL。对于track_stmt_parameter参数关闭时采集的SQL文本，无法获取到SQL参数变量的值，展示的内容为空。
    * beginTime  **参数解释**: 开始时间，格式为“yyyy-mm-ddThh:mm:ss.SSSSSZ”。 **取值范围**: 不涉及。
    * endTime  **参数解释**: 结束时间，格式为“yyyy-mm-ddThh:mm:ss.SSSSSZ”。 **取值范围**: 不涉及。
    * allTime  **参数解释**: 执行总时间（单位：微秒）。 **取值范围**: 不涉及。
    * dbTime  **参数解释**: 有效DB时间（单位：微秒）。 **取值范围**: 不涉及。
    * cpuTime  **参数解释**: CPU时间（单位：微秒）。 **取值范围**: 不涉及。
    * dataIoTime  **参数解释**: IO时间（单位：微秒）。 **取值范围**: 不涉及。
    * executionTime  **参数解释**: 执行器内执行时间（单位：微秒）。 **取值范围**: 不涉及。
    * scanLines  **参数解释**: 扫描行。 **取值范围**: 不涉及。
    * insertRows  **参数解释**: 插入行。 **取值范围**: 不涉及。
    * updateRows  **参数解释**: 更新行。 **取值范围**: 不涉及。
    * deleteRows  **参数解释**: 删除行。 **取值范围**: 不涉及。
    * isSlowSql  **参数解释**: 是否慢SQL。 **取值范围**: 不涉及。
    * startTimestamp  **参数解释**: SQL开始时间。格式为13位标准时间戳，如1754647168354。 **取值范围**: 不涉及。
    * finishTimestamp  **参数解释**: SQL结束时间，格式为13位标准时间戳，如1754647168355。 **取值范围**: 不涉及。
    * hitRate  **参数解释**: SQL命中率。 计划即将下线，请勿使用。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'instanceId' => 'getInstanceId',
            'nodeId' => 'getNodeId',
            'componentId' => 'getComponentId',
            'dbName' => 'getDbName',
            'schemaName' => 'getSchemaName',
            'username' => 'getUsername',
            'applicationName' => 'getApplicationName',
            'clientAddr' => 'getClientAddr',
            'clientPort' => 'getClientPort',
            'sqlId' => 'getSqlId',
            'sqlExecId' => 'getSqlExecId',
            'transactionId' => 'getTransactionId',
            'traceId' => 'getTraceId',
            'query' => 'getQuery',
            'sql' => 'getSql',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'allTime' => 'getAllTime',
            'dbTime' => 'getDbTime',
            'cpuTime' => 'getCpuTime',
            'dataIoTime' => 'getDataIoTime',
            'executionTime' => 'getExecutionTime',
            'scanLines' => 'getScanLines',
            'insertRows' => 'getInsertRows',
            'updateRows' => 'getUpdateRows',
            'deleteRows' => 'getDeleteRows',
            'isSlowSql' => 'getIsSlowSql',
            'startTimestamp' => 'getStartTimestamp',
            'finishTimestamp' => 'getFinishTimestamp',
            'hitRate' => 'getHitRate'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['componentId'] = isset($data['componentId']) ? $data['componentId'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['schemaName'] = isset($data['schemaName']) ? $data['schemaName'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['applicationName'] = isset($data['applicationName']) ? $data['applicationName'] : null;
        $this->container['clientAddr'] = isset($data['clientAddr']) ? $data['clientAddr'] : null;
        $this->container['clientPort'] = isset($data['clientPort']) ? $data['clientPort'] : null;
        $this->container['sqlId'] = isset($data['sqlId']) ? $data['sqlId'] : null;
        $this->container['sqlExecId'] = isset($data['sqlExecId']) ? $data['sqlExecId'] : null;
        $this->container['transactionId'] = isset($data['transactionId']) ? $data['transactionId'] : null;
        $this->container['traceId'] = isset($data['traceId']) ? $data['traceId'] : null;
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['sql'] = isset($data['sql']) ? $data['sql'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['allTime'] = isset($data['allTime']) ? $data['allTime'] : null;
        $this->container['dbTime'] = isset($data['dbTime']) ? $data['dbTime'] : null;
        $this->container['cpuTime'] = isset($data['cpuTime']) ? $data['cpuTime'] : null;
        $this->container['dataIoTime'] = isset($data['dataIoTime']) ? $data['dataIoTime'] : null;
        $this->container['executionTime'] = isset($data['executionTime']) ? $data['executionTime'] : null;
        $this->container['scanLines'] = isset($data['scanLines']) ? $data['scanLines'] : null;
        $this->container['insertRows'] = isset($data['insertRows']) ? $data['insertRows'] : null;
        $this->container['updateRows'] = isset($data['updateRows']) ? $data['updateRows'] : null;
        $this->container['deleteRows'] = isset($data['deleteRows']) ? $data['deleteRows'] : null;
        $this->container['isSlowSql'] = isset($data['isSlowSql']) ? $data['isSlowSql'] : null;
        $this->container['startTimestamp'] = isset($data['startTimestamp']) ? $data['startTimestamp'] : null;
        $this->container['finishTimestamp'] = isset($data['finishTimestamp']) ? $data['finishTimestamp'] : null;
        $this->container['hitRate'] = isset($data['hitRate']) ? $data['hitRate'] : null;
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
    *  **参数解释**: SQL记录唯一键ID。 **取值范围**: 不涉及。
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
    * @param string|null $id **参数解释**: SQL记录唯一键ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数解释**: 实例ID。 **取值范围**: 不涉及。
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
    * @param string|null $instanceId **参数解释**: 实例ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets nodeId
    *  **参数解释**: 节点ID。 **取值范围**: 不涉及。
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
    * @param string|null $nodeId **参数解释**: 节点ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
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
    * Gets username
    *  **参数解释**: 用户名称。 **取值范围**: 不涉及。
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
    * @param string|null $username **参数解释**: 用户名称。 **取值范围**: 不涉及。
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
    * Gets sql
    *  **参数解释**: 解析后的原始SQL文本。 **取值范围**: 开启track_stmt_parameter参数后，会把SQL文本中的变量替换成真实值，展示原始的SQL。对于track_stmt_parameter参数关闭时采集的SQL文本，无法获取到SQL参数变量的值，展示的内容为空。
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
    * @param string|null $sql **参数解释**: 解析后的原始SQL文本。 **取值范围**: 开启track_stmt_parameter参数后，会把SQL文本中的变量替换成真实值，展示原始的SQL。对于track_stmt_parameter参数关闭时采集的SQL文本，无法获取到SQL参数变量的值，展示的内容为空。
    *
    * @return $this
    */
    public function setSql($sql)
    {
        $this->container['sql'] = $sql;
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
    * Gets allTime
    *  **参数解释**: 执行总时间（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getAllTime()
    {
        return $this->container['allTime'];
    }

    /**
    * Sets allTime
    *
    * @param int|null $allTime **参数解释**: 执行总时间（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setAllTime($allTime)
    {
        $this->container['allTime'] = $allTime;
        return $this;
    }

    /**
    * Gets dbTime
    *  **参数解释**: 有效DB时间（单位：微秒）。 **取值范围**: 不涉及。
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
    * @param int|null $dbTime **参数解释**: 有效DB时间（单位：微秒）。 **取值范围**: 不涉及。
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
    * Gets scanLines
    *  **参数解释**: 扫描行。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getScanLines()
    {
        return $this->container['scanLines'];
    }

    /**
    * Sets scanLines
    *
    * @param int|null $scanLines **参数解释**: 扫描行。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setScanLines($scanLines)
    {
        $this->container['scanLines'] = $scanLines;
        return $this;
    }

    /**
    * Gets insertRows
    *  **参数解释**: 插入行。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getInsertRows()
    {
        return $this->container['insertRows'];
    }

    /**
    * Sets insertRows
    *
    * @param int|null $insertRows **参数解释**: 插入行。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setInsertRows($insertRows)
    {
        $this->container['insertRows'] = $insertRows;
        return $this;
    }

    /**
    * Gets updateRows
    *  **参数解释**: 更新行。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getUpdateRows()
    {
        return $this->container['updateRows'];
    }

    /**
    * Sets updateRows
    *
    * @param int|null $updateRows **参数解释**: 更新行。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setUpdateRows($updateRows)
    {
        $this->container['updateRows'] = $updateRows;
        return $this;
    }

    /**
    * Gets deleteRows
    *  **参数解释**: 删除行。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getDeleteRows()
    {
        return $this->container['deleteRows'];
    }

    /**
    * Sets deleteRows
    *
    * @param int|null $deleteRows **参数解释**: 删除行。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setDeleteRows($deleteRows)
    {
        $this->container['deleteRows'] = $deleteRows;
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
    * Gets startTimestamp
    *  **参数解释**: SQL开始时间。格式为13位标准时间戳，如1754647168354。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getStartTimestamp()
    {
        return $this->container['startTimestamp'];
    }

    /**
    * Sets startTimestamp
    *
    * @param int|null $startTimestamp **参数解释**: SQL开始时间。格式为13位标准时间戳，如1754647168354。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setStartTimestamp($startTimestamp)
    {
        $this->container['startTimestamp'] = $startTimestamp;
        return $this;
    }

    /**
    * Gets finishTimestamp
    *  **参数解释**: SQL结束时间，格式为13位标准时间戳，如1754647168355。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getFinishTimestamp()
    {
        return $this->container['finishTimestamp'];
    }

    /**
    * Sets finishTimestamp
    *
    * @param int|null $finishTimestamp **参数解释**: SQL结束时间，格式为13位标准时间戳，如1754647168355。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setFinishTimestamp($finishTimestamp)
    {
        $this->container['finishTimestamp'] = $finishTimestamp;
        return $this;
    }

    /**
    * Gets hitRate
    *  **参数解释**: SQL命中率。 计划即将下线，请勿使用。 **取值范围**: 不涉及。
    *
    * @return double|null
    */
    public function getHitRate()
    {
        return $this->container['hitRate'];
    }

    /**
    * Sets hitRate
    *
    * @param double|null $hitRate **参数解释**: SQL命中率。 计划即将下线，请勿使用。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setHitRate($hitRate)
    {
        $this->container['hitRate'] = $hitRate;
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

