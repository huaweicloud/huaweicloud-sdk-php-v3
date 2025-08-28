<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateParametersReqValues implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateParametersReq_values';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bindTable  用于描述多个拆分表的内在数据关联性，用于告知优化器在处理join时，把join下推到MySQL层执行。格式为:[{tb.col1,tb2.col2},{tb.col2,tb3.col1},...]。
    * characterSetServer  DDM服务端字符集，如果需要存储emoji表情符号，请选择utf8mb4,并设置RDS字符集也为utf8mb4。修改DDM服务端字符集时，DDM服务端字符序必须同步修改为对应类型的值。
    * collationServer  DDM服务端字符序。修改DDM服务端字符序时，DDM服务端字符集必须同步修改为对应类型的值。
    * concurrentExecutionLevel  逻辑表扫描时的分片并发执行级别: DATA_NODE: 分库间并行扫描，同一分库内各分片串行扫描;RDS_INSTANCE: RDS实例间并行扫描，同一RDS实例内各分片串行扫描;PHY_TABLE: 各物理分片全部并行扫描。
    * connectionIdleTimeout  服务器关闭连接之前等待连接活动的秒数，以秒为单位，取值范围为60-28800，默认值28800，表示服务器关闭连接之前等待28800秒后，关闭连接。
    * enableTableRecycle  是否开启表回收站。
    * insertToLoadData  insert 常量值使用load data执行。
    * liveTransactionTimeoutOnShutdown  在途事务等待时间窗口，以秒为单位，取值范围为0-100，默认值为1，表示服务器关闭前端连接之前等待1秒后关闭连接。
    * longQueryTime  记录慢查询的最小秒数,以秒为单位，取值范围为0.01-10，默认值为1，表示如果sql执行大于等于1秒就定义为慢sql。
    * maxAllowedPacket  包或任何生成的中间字符串的最大值。包缓冲区初始化为net_buffer_length字节，但需要时可以增长到max_allowed_packet字节。该值默认很小，以捕获大的（可能是错误的）数据包。该值必须设置为1024的倍数。取值范围为1024~1073741824，默认值为16777216。
    * maxBackendConnections  允许每个DDM节点同时连接RDS的最大客户端总数。0为默认值标识符,实际值等于(RDS的最大连接数-20)/DDM节点数。取值范围为0-10000000。
    * maxConnections  允许同时连接的客户端总数。与后端RDS规格及数量有关。以个数为单位，取值范围为10-40000，默认值为20000，表示允许同时连接的客户端总数不能超过40000。
    * minBackendConnections  允许每个DDM节点同时连接RDS的最小客户端总数。默认值为10。取值范围为0-10000000。
    * notFromPushdown  是否强制下推查询语句中不含from的语句。
    * secondsBehindMaster  主从rds节点延迟时间阈值，以秒为单位，取值范围为0-7200，默认值为30，表示主rds与从rds之间的数据同步时间值不能超过30秒，如果超过30s，读数据指令就不走当前读节点。
    * sqlAudit  开启或关闭SQL审计。
    * sqlExecuteTimeout  SQL执行超时秒数，以秒为单位，取值范围为100-28800，默认值28800，表示sql执行大于等于28800秒超时。
    * supportDdlBinlogHint  DDL语句添加binlog hint。
    * transactionPolicy  XA：XA 事务，保证原子性，保证可见性；FREE：允许多写，不保证原子性，无性能损耗；NO_DTX：单分片事务。
    * ultimateOptimize  开启或关闭优化器中的极致下推优化功能。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bindTable' => 'string',
            'characterSetServer' => 'string',
            'collationServer' => 'string',
            'concurrentExecutionLevel' => 'string',
            'connectionIdleTimeout' => 'string',
            'enableTableRecycle' => 'string',
            'insertToLoadData' => 'string',
            'liveTransactionTimeoutOnShutdown' => 'string',
            'longQueryTime' => 'string',
            'maxAllowedPacket' => 'string',
            'maxBackendConnections' => 'string',
            'maxConnections' => 'string',
            'minBackendConnections' => 'string',
            'notFromPushdown' => 'string',
            'secondsBehindMaster' => 'string',
            'sqlAudit' => 'string',
            'sqlExecuteTimeout' => 'string',
            'supportDdlBinlogHint' => 'string',
            'transactionPolicy' => 'string',
            'ultimateOptimize' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bindTable  用于描述多个拆分表的内在数据关联性，用于告知优化器在处理join时，把join下推到MySQL层执行。格式为:[{tb.col1,tb2.col2},{tb.col2,tb3.col1},...]。
    * characterSetServer  DDM服务端字符集，如果需要存储emoji表情符号，请选择utf8mb4,并设置RDS字符集也为utf8mb4。修改DDM服务端字符集时，DDM服务端字符序必须同步修改为对应类型的值。
    * collationServer  DDM服务端字符序。修改DDM服务端字符序时，DDM服务端字符集必须同步修改为对应类型的值。
    * concurrentExecutionLevel  逻辑表扫描时的分片并发执行级别: DATA_NODE: 分库间并行扫描，同一分库内各分片串行扫描;RDS_INSTANCE: RDS实例间并行扫描，同一RDS实例内各分片串行扫描;PHY_TABLE: 各物理分片全部并行扫描。
    * connectionIdleTimeout  服务器关闭连接之前等待连接活动的秒数，以秒为单位，取值范围为60-28800，默认值28800，表示服务器关闭连接之前等待28800秒后，关闭连接。
    * enableTableRecycle  是否开启表回收站。
    * insertToLoadData  insert 常量值使用load data执行。
    * liveTransactionTimeoutOnShutdown  在途事务等待时间窗口，以秒为单位，取值范围为0-100，默认值为1，表示服务器关闭前端连接之前等待1秒后关闭连接。
    * longQueryTime  记录慢查询的最小秒数,以秒为单位，取值范围为0.01-10，默认值为1，表示如果sql执行大于等于1秒就定义为慢sql。
    * maxAllowedPacket  包或任何生成的中间字符串的最大值。包缓冲区初始化为net_buffer_length字节，但需要时可以增长到max_allowed_packet字节。该值默认很小，以捕获大的（可能是错误的）数据包。该值必须设置为1024的倍数。取值范围为1024~1073741824，默认值为16777216。
    * maxBackendConnections  允许每个DDM节点同时连接RDS的最大客户端总数。0为默认值标识符,实际值等于(RDS的最大连接数-20)/DDM节点数。取值范围为0-10000000。
    * maxConnections  允许同时连接的客户端总数。与后端RDS规格及数量有关。以个数为单位，取值范围为10-40000，默认值为20000，表示允许同时连接的客户端总数不能超过40000。
    * minBackendConnections  允许每个DDM节点同时连接RDS的最小客户端总数。默认值为10。取值范围为0-10000000。
    * notFromPushdown  是否强制下推查询语句中不含from的语句。
    * secondsBehindMaster  主从rds节点延迟时间阈值，以秒为单位，取值范围为0-7200，默认值为30，表示主rds与从rds之间的数据同步时间值不能超过30秒，如果超过30s，读数据指令就不走当前读节点。
    * sqlAudit  开启或关闭SQL审计。
    * sqlExecuteTimeout  SQL执行超时秒数，以秒为单位，取值范围为100-28800，默认值28800，表示sql执行大于等于28800秒超时。
    * supportDdlBinlogHint  DDL语句添加binlog hint。
    * transactionPolicy  XA：XA 事务，保证原子性，保证可见性；FREE：允许多写，不保证原子性，无性能损耗；NO_DTX：单分片事务。
    * ultimateOptimize  开启或关闭优化器中的极致下推优化功能。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bindTable' => null,
        'characterSetServer' => null,
        'collationServer' => null,
        'concurrentExecutionLevel' => null,
        'connectionIdleTimeout' => null,
        'enableTableRecycle' => null,
        'insertToLoadData' => null,
        'liveTransactionTimeoutOnShutdown' => null,
        'longQueryTime' => null,
        'maxAllowedPacket' => null,
        'maxBackendConnections' => null,
        'maxConnections' => null,
        'minBackendConnections' => null,
        'notFromPushdown' => null,
        'secondsBehindMaster' => null,
        'sqlAudit' => null,
        'sqlExecuteTimeout' => null,
        'supportDdlBinlogHint' => null,
        'transactionPolicy' => null,
        'ultimateOptimize' => null
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
    * bindTable  用于描述多个拆分表的内在数据关联性，用于告知优化器在处理join时，把join下推到MySQL层执行。格式为:[{tb.col1,tb2.col2},{tb.col2,tb3.col1},...]。
    * characterSetServer  DDM服务端字符集，如果需要存储emoji表情符号，请选择utf8mb4,并设置RDS字符集也为utf8mb4。修改DDM服务端字符集时，DDM服务端字符序必须同步修改为对应类型的值。
    * collationServer  DDM服务端字符序。修改DDM服务端字符序时，DDM服务端字符集必须同步修改为对应类型的值。
    * concurrentExecutionLevel  逻辑表扫描时的分片并发执行级别: DATA_NODE: 分库间并行扫描，同一分库内各分片串行扫描;RDS_INSTANCE: RDS实例间并行扫描，同一RDS实例内各分片串行扫描;PHY_TABLE: 各物理分片全部并行扫描。
    * connectionIdleTimeout  服务器关闭连接之前等待连接活动的秒数，以秒为单位，取值范围为60-28800，默认值28800，表示服务器关闭连接之前等待28800秒后，关闭连接。
    * enableTableRecycle  是否开启表回收站。
    * insertToLoadData  insert 常量值使用load data执行。
    * liveTransactionTimeoutOnShutdown  在途事务等待时间窗口，以秒为单位，取值范围为0-100，默认值为1，表示服务器关闭前端连接之前等待1秒后关闭连接。
    * longQueryTime  记录慢查询的最小秒数,以秒为单位，取值范围为0.01-10，默认值为1，表示如果sql执行大于等于1秒就定义为慢sql。
    * maxAllowedPacket  包或任何生成的中间字符串的最大值。包缓冲区初始化为net_buffer_length字节，但需要时可以增长到max_allowed_packet字节。该值默认很小，以捕获大的（可能是错误的）数据包。该值必须设置为1024的倍数。取值范围为1024~1073741824，默认值为16777216。
    * maxBackendConnections  允许每个DDM节点同时连接RDS的最大客户端总数。0为默认值标识符,实际值等于(RDS的最大连接数-20)/DDM节点数。取值范围为0-10000000。
    * maxConnections  允许同时连接的客户端总数。与后端RDS规格及数量有关。以个数为单位，取值范围为10-40000，默认值为20000，表示允许同时连接的客户端总数不能超过40000。
    * minBackendConnections  允许每个DDM节点同时连接RDS的最小客户端总数。默认值为10。取值范围为0-10000000。
    * notFromPushdown  是否强制下推查询语句中不含from的语句。
    * secondsBehindMaster  主从rds节点延迟时间阈值，以秒为单位，取值范围为0-7200，默认值为30，表示主rds与从rds之间的数据同步时间值不能超过30秒，如果超过30s，读数据指令就不走当前读节点。
    * sqlAudit  开启或关闭SQL审计。
    * sqlExecuteTimeout  SQL执行超时秒数，以秒为单位，取值范围为100-28800，默认值28800，表示sql执行大于等于28800秒超时。
    * supportDdlBinlogHint  DDL语句添加binlog hint。
    * transactionPolicy  XA：XA 事务，保证原子性，保证可见性；FREE：允许多写，不保证原子性，无性能损耗；NO_DTX：单分片事务。
    * ultimateOptimize  开启或关闭优化器中的极致下推优化功能。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bindTable' => 'bind_table',
            'characterSetServer' => 'character_set_server',
            'collationServer' => 'collation_server',
            'concurrentExecutionLevel' => 'concurrent_execution_level',
            'connectionIdleTimeout' => 'connection_idle_timeout',
            'enableTableRecycle' => 'enable_table_recycle',
            'insertToLoadData' => 'insert_to_load_data',
            'liveTransactionTimeoutOnShutdown' => 'live_transaction_timeout_on_shutdown',
            'longQueryTime' => 'long_query_time',
            'maxAllowedPacket' => 'max_allowed_packet',
            'maxBackendConnections' => 'max_backend_connections',
            'maxConnections' => 'max_connections',
            'minBackendConnections' => 'min_backend_connections',
            'notFromPushdown' => 'not_from_pushdown',
            'secondsBehindMaster' => 'seconds_behind_master',
            'sqlAudit' => 'sql_audit',
            'sqlExecuteTimeout' => 'sql_execute_timeout',
            'supportDdlBinlogHint' => 'support_ddl_binlog_hint',
            'transactionPolicy' => 'transaction_policy',
            'ultimateOptimize' => 'ultimate_optimize'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bindTable  用于描述多个拆分表的内在数据关联性，用于告知优化器在处理join时，把join下推到MySQL层执行。格式为:[{tb.col1,tb2.col2},{tb.col2,tb3.col1},...]。
    * characterSetServer  DDM服务端字符集，如果需要存储emoji表情符号，请选择utf8mb4,并设置RDS字符集也为utf8mb4。修改DDM服务端字符集时，DDM服务端字符序必须同步修改为对应类型的值。
    * collationServer  DDM服务端字符序。修改DDM服务端字符序时，DDM服务端字符集必须同步修改为对应类型的值。
    * concurrentExecutionLevel  逻辑表扫描时的分片并发执行级别: DATA_NODE: 分库间并行扫描，同一分库内各分片串行扫描;RDS_INSTANCE: RDS实例间并行扫描，同一RDS实例内各分片串行扫描;PHY_TABLE: 各物理分片全部并行扫描。
    * connectionIdleTimeout  服务器关闭连接之前等待连接活动的秒数，以秒为单位，取值范围为60-28800，默认值28800，表示服务器关闭连接之前等待28800秒后，关闭连接。
    * enableTableRecycle  是否开启表回收站。
    * insertToLoadData  insert 常量值使用load data执行。
    * liveTransactionTimeoutOnShutdown  在途事务等待时间窗口，以秒为单位，取值范围为0-100，默认值为1，表示服务器关闭前端连接之前等待1秒后关闭连接。
    * longQueryTime  记录慢查询的最小秒数,以秒为单位，取值范围为0.01-10，默认值为1，表示如果sql执行大于等于1秒就定义为慢sql。
    * maxAllowedPacket  包或任何生成的中间字符串的最大值。包缓冲区初始化为net_buffer_length字节，但需要时可以增长到max_allowed_packet字节。该值默认很小，以捕获大的（可能是错误的）数据包。该值必须设置为1024的倍数。取值范围为1024~1073741824，默认值为16777216。
    * maxBackendConnections  允许每个DDM节点同时连接RDS的最大客户端总数。0为默认值标识符,实际值等于(RDS的最大连接数-20)/DDM节点数。取值范围为0-10000000。
    * maxConnections  允许同时连接的客户端总数。与后端RDS规格及数量有关。以个数为单位，取值范围为10-40000，默认值为20000，表示允许同时连接的客户端总数不能超过40000。
    * minBackendConnections  允许每个DDM节点同时连接RDS的最小客户端总数。默认值为10。取值范围为0-10000000。
    * notFromPushdown  是否强制下推查询语句中不含from的语句。
    * secondsBehindMaster  主从rds节点延迟时间阈值，以秒为单位，取值范围为0-7200，默认值为30，表示主rds与从rds之间的数据同步时间值不能超过30秒，如果超过30s，读数据指令就不走当前读节点。
    * sqlAudit  开启或关闭SQL审计。
    * sqlExecuteTimeout  SQL执行超时秒数，以秒为单位，取值范围为100-28800，默认值28800，表示sql执行大于等于28800秒超时。
    * supportDdlBinlogHint  DDL语句添加binlog hint。
    * transactionPolicy  XA：XA 事务，保证原子性，保证可见性；FREE：允许多写，不保证原子性，无性能损耗；NO_DTX：单分片事务。
    * ultimateOptimize  开启或关闭优化器中的极致下推优化功能。
    *
    * @var string[]
    */
    protected static $setters = [
            'bindTable' => 'setBindTable',
            'characterSetServer' => 'setCharacterSetServer',
            'collationServer' => 'setCollationServer',
            'concurrentExecutionLevel' => 'setConcurrentExecutionLevel',
            'connectionIdleTimeout' => 'setConnectionIdleTimeout',
            'enableTableRecycle' => 'setEnableTableRecycle',
            'insertToLoadData' => 'setInsertToLoadData',
            'liveTransactionTimeoutOnShutdown' => 'setLiveTransactionTimeoutOnShutdown',
            'longQueryTime' => 'setLongQueryTime',
            'maxAllowedPacket' => 'setMaxAllowedPacket',
            'maxBackendConnections' => 'setMaxBackendConnections',
            'maxConnections' => 'setMaxConnections',
            'minBackendConnections' => 'setMinBackendConnections',
            'notFromPushdown' => 'setNotFromPushdown',
            'secondsBehindMaster' => 'setSecondsBehindMaster',
            'sqlAudit' => 'setSqlAudit',
            'sqlExecuteTimeout' => 'setSqlExecuteTimeout',
            'supportDdlBinlogHint' => 'setSupportDdlBinlogHint',
            'transactionPolicy' => 'setTransactionPolicy',
            'ultimateOptimize' => 'setUltimateOptimize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bindTable  用于描述多个拆分表的内在数据关联性，用于告知优化器在处理join时，把join下推到MySQL层执行。格式为:[{tb.col1,tb2.col2},{tb.col2,tb3.col1},...]。
    * characterSetServer  DDM服务端字符集，如果需要存储emoji表情符号，请选择utf8mb4,并设置RDS字符集也为utf8mb4。修改DDM服务端字符集时，DDM服务端字符序必须同步修改为对应类型的值。
    * collationServer  DDM服务端字符序。修改DDM服务端字符序时，DDM服务端字符集必须同步修改为对应类型的值。
    * concurrentExecutionLevel  逻辑表扫描时的分片并发执行级别: DATA_NODE: 分库间并行扫描，同一分库内各分片串行扫描;RDS_INSTANCE: RDS实例间并行扫描，同一RDS实例内各分片串行扫描;PHY_TABLE: 各物理分片全部并行扫描。
    * connectionIdleTimeout  服务器关闭连接之前等待连接活动的秒数，以秒为单位，取值范围为60-28800，默认值28800，表示服务器关闭连接之前等待28800秒后，关闭连接。
    * enableTableRecycle  是否开启表回收站。
    * insertToLoadData  insert 常量值使用load data执行。
    * liveTransactionTimeoutOnShutdown  在途事务等待时间窗口，以秒为单位，取值范围为0-100，默认值为1，表示服务器关闭前端连接之前等待1秒后关闭连接。
    * longQueryTime  记录慢查询的最小秒数,以秒为单位，取值范围为0.01-10，默认值为1，表示如果sql执行大于等于1秒就定义为慢sql。
    * maxAllowedPacket  包或任何生成的中间字符串的最大值。包缓冲区初始化为net_buffer_length字节，但需要时可以增长到max_allowed_packet字节。该值默认很小，以捕获大的（可能是错误的）数据包。该值必须设置为1024的倍数。取值范围为1024~1073741824，默认值为16777216。
    * maxBackendConnections  允许每个DDM节点同时连接RDS的最大客户端总数。0为默认值标识符,实际值等于(RDS的最大连接数-20)/DDM节点数。取值范围为0-10000000。
    * maxConnections  允许同时连接的客户端总数。与后端RDS规格及数量有关。以个数为单位，取值范围为10-40000，默认值为20000，表示允许同时连接的客户端总数不能超过40000。
    * minBackendConnections  允许每个DDM节点同时连接RDS的最小客户端总数。默认值为10。取值范围为0-10000000。
    * notFromPushdown  是否强制下推查询语句中不含from的语句。
    * secondsBehindMaster  主从rds节点延迟时间阈值，以秒为单位，取值范围为0-7200，默认值为30，表示主rds与从rds之间的数据同步时间值不能超过30秒，如果超过30s，读数据指令就不走当前读节点。
    * sqlAudit  开启或关闭SQL审计。
    * sqlExecuteTimeout  SQL执行超时秒数，以秒为单位，取值范围为100-28800，默认值28800，表示sql执行大于等于28800秒超时。
    * supportDdlBinlogHint  DDL语句添加binlog hint。
    * transactionPolicy  XA：XA 事务，保证原子性，保证可见性；FREE：允许多写，不保证原子性，无性能损耗；NO_DTX：单分片事务。
    * ultimateOptimize  开启或关闭优化器中的极致下推优化功能。
    *
    * @var string[]
    */
    protected static $getters = [
            'bindTable' => 'getBindTable',
            'characterSetServer' => 'getCharacterSetServer',
            'collationServer' => 'getCollationServer',
            'concurrentExecutionLevel' => 'getConcurrentExecutionLevel',
            'connectionIdleTimeout' => 'getConnectionIdleTimeout',
            'enableTableRecycle' => 'getEnableTableRecycle',
            'insertToLoadData' => 'getInsertToLoadData',
            'liveTransactionTimeoutOnShutdown' => 'getLiveTransactionTimeoutOnShutdown',
            'longQueryTime' => 'getLongQueryTime',
            'maxAllowedPacket' => 'getMaxAllowedPacket',
            'maxBackendConnections' => 'getMaxBackendConnections',
            'maxConnections' => 'getMaxConnections',
            'minBackendConnections' => 'getMinBackendConnections',
            'notFromPushdown' => 'getNotFromPushdown',
            'secondsBehindMaster' => 'getSecondsBehindMaster',
            'sqlAudit' => 'getSqlAudit',
            'sqlExecuteTimeout' => 'getSqlExecuteTimeout',
            'supportDdlBinlogHint' => 'getSupportDdlBinlogHint',
            'transactionPolicy' => 'getTransactionPolicy',
            'ultimateOptimize' => 'getUltimateOptimize'
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
    const CHARACTER_SET_SERVER_GBK = 'gbk';
    const CHARACTER_SET_SERVER_UTF8 = 'utf8';
    const CHARACTER_SET_SERVER_UTF8MB4 = 'utf8mb4';
    const COLLATION_SERVER_UTF8_UNICODE_CI = 'utf8_unicode_ci';
    const COLLATION_SERVER_UTF8_BIN = 'utf8_bin';
    const COLLATION_SERVER_GBK_CHINESE_CI = 'gbk_chinese_ci';
    const COLLATION_SERVER_GBK_BIN = 'gbk_bin';
    const COLLATION_SERVER_UTF8MB4_UNICODE_CI = 'utf8mb4_unicode_ci';
    const COLLATION_SERVER_UTF8MB4_BIN = 'utf8mb4_bin';
    const CONCURRENT_EXECUTION_LEVEL_RDS_INSTANCE = 'RDS_INSTANCE';
    const CONCURRENT_EXECUTION_LEVEL_DATA_NODE = 'DATA_NODE';
    const CONCURRENT_EXECUTION_LEVEL_PHY_TABLE = 'PHY_TABLE';
    const ENABLE_TABLE_RECYCLE_OFF = 'OFF';
    const ENABLE_TABLE_RECYCLE_ON = 'ON';
    const INSERT_TO_LOAD_DATA_OFF = 'OFF';
    const INSERT_TO_LOAD_DATA_ON = 'ON';
    const NOT_FROM_PUSHDOWN_OFF = 'OFF';
    const NOT_FROM_PUSHDOWN_ON = 'ON';
    const SQL_AUDIT_OFF = 'OFF';
    const SQL_AUDIT_ON = 'ON';
    const SUPPORT_DDL_BINLOG_HINT_OFF = 'OFF';
    const SUPPORT_DDL_BINLOG_HINT_ON = 'ON';
    const TRANSACTION_POLICY_XA = 'XA';
    const TRANSACTION_POLICY_FREE = 'FREE';
    const TRANSACTION_POLICY_NO_DTX = 'NO_DTX';
    const ULTIMATE_OPTIMIZE_OFF = 'OFF';
    const ULTIMATE_OPTIMIZE_ON = 'ON';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCharacterSetServerAllowableValues()
    {
        return [
            self::CHARACTER_SET_SERVER_GBK,
            self::CHARACTER_SET_SERVER_UTF8,
            self::CHARACTER_SET_SERVER_UTF8MB4,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCollationServerAllowableValues()
    {
        return [
            self::COLLATION_SERVER_UTF8_UNICODE_CI,
            self::COLLATION_SERVER_UTF8_BIN,
            self::COLLATION_SERVER_GBK_CHINESE_CI,
            self::COLLATION_SERVER_GBK_BIN,
            self::COLLATION_SERVER_UTF8MB4_UNICODE_CI,
            self::COLLATION_SERVER_UTF8MB4_BIN,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getConcurrentExecutionLevelAllowableValues()
    {
        return [
            self::CONCURRENT_EXECUTION_LEVEL_RDS_INSTANCE,
            self::CONCURRENT_EXECUTION_LEVEL_DATA_NODE,
            self::CONCURRENT_EXECUTION_LEVEL_PHY_TABLE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEnableTableRecycleAllowableValues()
    {
        return [
            self::ENABLE_TABLE_RECYCLE_OFF,
            self::ENABLE_TABLE_RECYCLE_ON,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInsertToLoadDataAllowableValues()
    {
        return [
            self::INSERT_TO_LOAD_DATA_OFF,
            self::INSERT_TO_LOAD_DATA_ON,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNotFromPushdownAllowableValues()
    {
        return [
            self::NOT_FROM_PUSHDOWN_OFF,
            self::NOT_FROM_PUSHDOWN_ON,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSqlAuditAllowableValues()
    {
        return [
            self::SQL_AUDIT_OFF,
            self::SQL_AUDIT_ON,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSupportDdlBinlogHintAllowableValues()
    {
        return [
            self::SUPPORT_DDL_BINLOG_HINT_OFF,
            self::SUPPORT_DDL_BINLOG_HINT_ON,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTransactionPolicyAllowableValues()
    {
        return [
            self::TRANSACTION_POLICY_XA,
            self::TRANSACTION_POLICY_FREE,
            self::TRANSACTION_POLICY_NO_DTX,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getUltimateOptimizeAllowableValues()
    {
        return [
            self::ULTIMATE_OPTIMIZE_OFF,
            self::ULTIMATE_OPTIMIZE_ON,
        ];
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
        $this->container['bindTable'] = isset($data['bindTable']) ? $data['bindTable'] : null;
        $this->container['characterSetServer'] = isset($data['characterSetServer']) ? $data['characterSetServer'] : null;
        $this->container['collationServer'] = isset($data['collationServer']) ? $data['collationServer'] : null;
        $this->container['concurrentExecutionLevel'] = isset($data['concurrentExecutionLevel']) ? $data['concurrentExecutionLevel'] : null;
        $this->container['connectionIdleTimeout'] = isset($data['connectionIdleTimeout']) ? $data['connectionIdleTimeout'] : null;
        $this->container['enableTableRecycle'] = isset($data['enableTableRecycle']) ? $data['enableTableRecycle'] : null;
        $this->container['insertToLoadData'] = isset($data['insertToLoadData']) ? $data['insertToLoadData'] : null;
        $this->container['liveTransactionTimeoutOnShutdown'] = isset($data['liveTransactionTimeoutOnShutdown']) ? $data['liveTransactionTimeoutOnShutdown'] : null;
        $this->container['longQueryTime'] = isset($data['longQueryTime']) ? $data['longQueryTime'] : null;
        $this->container['maxAllowedPacket'] = isset($data['maxAllowedPacket']) ? $data['maxAllowedPacket'] : null;
        $this->container['maxBackendConnections'] = isset($data['maxBackendConnections']) ? $data['maxBackendConnections'] : null;
        $this->container['maxConnections'] = isset($data['maxConnections']) ? $data['maxConnections'] : null;
        $this->container['minBackendConnections'] = isset($data['minBackendConnections']) ? $data['minBackendConnections'] : null;
        $this->container['notFromPushdown'] = isset($data['notFromPushdown']) ? $data['notFromPushdown'] : null;
        $this->container['secondsBehindMaster'] = isset($data['secondsBehindMaster']) ? $data['secondsBehindMaster'] : null;
        $this->container['sqlAudit'] = isset($data['sqlAudit']) ? $data['sqlAudit'] : null;
        $this->container['sqlExecuteTimeout'] = isset($data['sqlExecuteTimeout']) ? $data['sqlExecuteTimeout'] : null;
        $this->container['supportDdlBinlogHint'] = isset($data['supportDdlBinlogHint']) ? $data['supportDdlBinlogHint'] : null;
        $this->container['transactionPolicy'] = isset($data['transactionPolicy']) ? $data['transactionPolicy'] : null;
        $this->container['ultimateOptimize'] = isset($data['ultimateOptimize']) ? $data['ultimateOptimize'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getCharacterSetServerAllowableValues();
                if (!is_null($this->container['characterSetServer']) && !in_array($this->container['characterSetServer'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'characterSetServer', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getCollationServerAllowableValues();
                if (!is_null($this->container['collationServer']) && !in_array($this->container['collationServer'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'collationServer', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getConcurrentExecutionLevelAllowableValues();
                if (!is_null($this->container['concurrentExecutionLevel']) && !in_array($this->container['concurrentExecutionLevel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'concurrentExecutionLevel', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getEnableTableRecycleAllowableValues();
                if (!is_null($this->container['enableTableRecycle']) && !in_array($this->container['enableTableRecycle'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'enableTableRecycle', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getInsertToLoadDataAllowableValues();
                if (!is_null($this->container['insertToLoadData']) && !in_array($this->container['insertToLoadData'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'insertToLoadData', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getNotFromPushdownAllowableValues();
                if (!is_null($this->container['notFromPushdown']) && !in_array($this->container['notFromPushdown'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'notFromPushdown', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSqlAuditAllowableValues();
                if (!is_null($this->container['sqlAudit']) && !in_array($this->container['sqlAudit'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sqlAudit', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSupportDdlBinlogHintAllowableValues();
                if (!is_null($this->container['supportDdlBinlogHint']) && !in_array($this->container['supportDdlBinlogHint'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'supportDdlBinlogHint', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getTransactionPolicyAllowableValues();
                if (!is_null($this->container['transactionPolicy']) && !in_array($this->container['transactionPolicy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'transactionPolicy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getUltimateOptimizeAllowableValues();
                if (!is_null($this->container['ultimateOptimize']) && !in_array($this->container['ultimateOptimize'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ultimateOptimize', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets bindTable
    *  用于描述多个拆分表的内在数据关联性，用于告知优化器在处理join时，把join下推到MySQL层执行。格式为:[{tb.col1,tb2.col2},{tb.col2,tb3.col1},...]。
    *
    * @return string|null
    */
    public function getBindTable()
    {
        return $this->container['bindTable'];
    }

    /**
    * Sets bindTable
    *
    * @param string|null $bindTable 用于描述多个拆分表的内在数据关联性，用于告知优化器在处理join时，把join下推到MySQL层执行。格式为:[{tb.col1,tb2.col2},{tb.col2,tb3.col1},...]。
    *
    * @return $this
    */
    public function setBindTable($bindTable)
    {
        $this->container['bindTable'] = $bindTable;
        return $this;
    }

    /**
    * Gets characterSetServer
    *  DDM服务端字符集，如果需要存储emoji表情符号，请选择utf8mb4,并设置RDS字符集也为utf8mb4。修改DDM服务端字符集时，DDM服务端字符序必须同步修改为对应类型的值。
    *
    * @return string|null
    */
    public function getCharacterSetServer()
    {
        return $this->container['characterSetServer'];
    }

    /**
    * Sets characterSetServer
    *
    * @param string|null $characterSetServer DDM服务端字符集，如果需要存储emoji表情符号，请选择utf8mb4,并设置RDS字符集也为utf8mb4。修改DDM服务端字符集时，DDM服务端字符序必须同步修改为对应类型的值。
    *
    * @return $this
    */
    public function setCharacterSetServer($characterSetServer)
    {
        $this->container['characterSetServer'] = $characterSetServer;
        return $this;
    }

    /**
    * Gets collationServer
    *  DDM服务端字符序。修改DDM服务端字符序时，DDM服务端字符集必须同步修改为对应类型的值。
    *
    * @return string|null
    */
    public function getCollationServer()
    {
        return $this->container['collationServer'];
    }

    /**
    * Sets collationServer
    *
    * @param string|null $collationServer DDM服务端字符序。修改DDM服务端字符序时，DDM服务端字符集必须同步修改为对应类型的值。
    *
    * @return $this
    */
    public function setCollationServer($collationServer)
    {
        $this->container['collationServer'] = $collationServer;
        return $this;
    }

    /**
    * Gets concurrentExecutionLevel
    *  逻辑表扫描时的分片并发执行级别: DATA_NODE: 分库间并行扫描，同一分库内各分片串行扫描;RDS_INSTANCE: RDS实例间并行扫描，同一RDS实例内各分片串行扫描;PHY_TABLE: 各物理分片全部并行扫描。
    *
    * @return string|null
    */
    public function getConcurrentExecutionLevel()
    {
        return $this->container['concurrentExecutionLevel'];
    }

    /**
    * Sets concurrentExecutionLevel
    *
    * @param string|null $concurrentExecutionLevel 逻辑表扫描时的分片并发执行级别: DATA_NODE: 分库间并行扫描，同一分库内各分片串行扫描;RDS_INSTANCE: RDS实例间并行扫描，同一RDS实例内各分片串行扫描;PHY_TABLE: 各物理分片全部并行扫描。
    *
    * @return $this
    */
    public function setConcurrentExecutionLevel($concurrentExecutionLevel)
    {
        $this->container['concurrentExecutionLevel'] = $concurrentExecutionLevel;
        return $this;
    }

    /**
    * Gets connectionIdleTimeout
    *  服务器关闭连接之前等待连接活动的秒数，以秒为单位，取值范围为60-28800，默认值28800，表示服务器关闭连接之前等待28800秒后，关闭连接。
    *
    * @return string|null
    */
    public function getConnectionIdleTimeout()
    {
        return $this->container['connectionIdleTimeout'];
    }

    /**
    * Sets connectionIdleTimeout
    *
    * @param string|null $connectionIdleTimeout 服务器关闭连接之前等待连接活动的秒数，以秒为单位，取值范围为60-28800，默认值28800，表示服务器关闭连接之前等待28800秒后，关闭连接。
    *
    * @return $this
    */
    public function setConnectionIdleTimeout($connectionIdleTimeout)
    {
        $this->container['connectionIdleTimeout'] = $connectionIdleTimeout;
        return $this;
    }

    /**
    * Gets enableTableRecycle
    *  是否开启表回收站。
    *
    * @return string|null
    */
    public function getEnableTableRecycle()
    {
        return $this->container['enableTableRecycle'];
    }

    /**
    * Sets enableTableRecycle
    *
    * @param string|null $enableTableRecycle 是否开启表回收站。
    *
    * @return $this
    */
    public function setEnableTableRecycle($enableTableRecycle)
    {
        $this->container['enableTableRecycle'] = $enableTableRecycle;
        return $this;
    }

    /**
    * Gets insertToLoadData
    *  insert 常量值使用load data执行。
    *
    * @return string|null
    */
    public function getInsertToLoadData()
    {
        return $this->container['insertToLoadData'];
    }

    /**
    * Sets insertToLoadData
    *
    * @param string|null $insertToLoadData insert 常量值使用load data执行。
    *
    * @return $this
    */
    public function setInsertToLoadData($insertToLoadData)
    {
        $this->container['insertToLoadData'] = $insertToLoadData;
        return $this;
    }

    /**
    * Gets liveTransactionTimeoutOnShutdown
    *  在途事务等待时间窗口，以秒为单位，取值范围为0-100，默认值为1，表示服务器关闭前端连接之前等待1秒后关闭连接。
    *
    * @return string|null
    */
    public function getLiveTransactionTimeoutOnShutdown()
    {
        return $this->container['liveTransactionTimeoutOnShutdown'];
    }

    /**
    * Sets liveTransactionTimeoutOnShutdown
    *
    * @param string|null $liveTransactionTimeoutOnShutdown 在途事务等待时间窗口，以秒为单位，取值范围为0-100，默认值为1，表示服务器关闭前端连接之前等待1秒后关闭连接。
    *
    * @return $this
    */
    public function setLiveTransactionTimeoutOnShutdown($liveTransactionTimeoutOnShutdown)
    {
        $this->container['liveTransactionTimeoutOnShutdown'] = $liveTransactionTimeoutOnShutdown;
        return $this;
    }

    /**
    * Gets longQueryTime
    *  记录慢查询的最小秒数,以秒为单位，取值范围为0.01-10，默认值为1，表示如果sql执行大于等于1秒就定义为慢sql。
    *
    * @return string|null
    */
    public function getLongQueryTime()
    {
        return $this->container['longQueryTime'];
    }

    /**
    * Sets longQueryTime
    *
    * @param string|null $longQueryTime 记录慢查询的最小秒数,以秒为单位，取值范围为0.01-10，默认值为1，表示如果sql执行大于等于1秒就定义为慢sql。
    *
    * @return $this
    */
    public function setLongQueryTime($longQueryTime)
    {
        $this->container['longQueryTime'] = $longQueryTime;
        return $this;
    }

    /**
    * Gets maxAllowedPacket
    *  包或任何生成的中间字符串的最大值。包缓冲区初始化为net_buffer_length字节，但需要时可以增长到max_allowed_packet字节。该值默认很小，以捕获大的（可能是错误的）数据包。该值必须设置为1024的倍数。取值范围为1024~1073741824，默认值为16777216。
    *
    * @return string|null
    */
    public function getMaxAllowedPacket()
    {
        return $this->container['maxAllowedPacket'];
    }

    /**
    * Sets maxAllowedPacket
    *
    * @param string|null $maxAllowedPacket 包或任何生成的中间字符串的最大值。包缓冲区初始化为net_buffer_length字节，但需要时可以增长到max_allowed_packet字节。该值默认很小，以捕获大的（可能是错误的）数据包。该值必须设置为1024的倍数。取值范围为1024~1073741824，默认值为16777216。
    *
    * @return $this
    */
    public function setMaxAllowedPacket($maxAllowedPacket)
    {
        $this->container['maxAllowedPacket'] = $maxAllowedPacket;
        return $this;
    }

    /**
    * Gets maxBackendConnections
    *  允许每个DDM节点同时连接RDS的最大客户端总数。0为默认值标识符,实际值等于(RDS的最大连接数-20)/DDM节点数。取值范围为0-10000000。
    *
    * @return string|null
    */
    public function getMaxBackendConnections()
    {
        return $this->container['maxBackendConnections'];
    }

    /**
    * Sets maxBackendConnections
    *
    * @param string|null $maxBackendConnections 允许每个DDM节点同时连接RDS的最大客户端总数。0为默认值标识符,实际值等于(RDS的最大连接数-20)/DDM节点数。取值范围为0-10000000。
    *
    * @return $this
    */
    public function setMaxBackendConnections($maxBackendConnections)
    {
        $this->container['maxBackendConnections'] = $maxBackendConnections;
        return $this;
    }

    /**
    * Gets maxConnections
    *  允许同时连接的客户端总数。与后端RDS规格及数量有关。以个数为单位，取值范围为10-40000，默认值为20000，表示允许同时连接的客户端总数不能超过40000。
    *
    * @return string|null
    */
    public function getMaxConnections()
    {
        return $this->container['maxConnections'];
    }

    /**
    * Sets maxConnections
    *
    * @param string|null $maxConnections 允许同时连接的客户端总数。与后端RDS规格及数量有关。以个数为单位，取值范围为10-40000，默认值为20000，表示允许同时连接的客户端总数不能超过40000。
    *
    * @return $this
    */
    public function setMaxConnections($maxConnections)
    {
        $this->container['maxConnections'] = $maxConnections;
        return $this;
    }

    /**
    * Gets minBackendConnections
    *  允许每个DDM节点同时连接RDS的最小客户端总数。默认值为10。取值范围为0-10000000。
    *
    * @return string|null
    */
    public function getMinBackendConnections()
    {
        return $this->container['minBackendConnections'];
    }

    /**
    * Sets minBackendConnections
    *
    * @param string|null $minBackendConnections 允许每个DDM节点同时连接RDS的最小客户端总数。默认值为10。取值范围为0-10000000。
    *
    * @return $this
    */
    public function setMinBackendConnections($minBackendConnections)
    {
        $this->container['minBackendConnections'] = $minBackendConnections;
        return $this;
    }

    /**
    * Gets notFromPushdown
    *  是否强制下推查询语句中不含from的语句。
    *
    * @return string|null
    */
    public function getNotFromPushdown()
    {
        return $this->container['notFromPushdown'];
    }

    /**
    * Sets notFromPushdown
    *
    * @param string|null $notFromPushdown 是否强制下推查询语句中不含from的语句。
    *
    * @return $this
    */
    public function setNotFromPushdown($notFromPushdown)
    {
        $this->container['notFromPushdown'] = $notFromPushdown;
        return $this;
    }

    /**
    * Gets secondsBehindMaster
    *  主从rds节点延迟时间阈值，以秒为单位，取值范围为0-7200，默认值为30，表示主rds与从rds之间的数据同步时间值不能超过30秒，如果超过30s，读数据指令就不走当前读节点。
    *
    * @return string|null
    */
    public function getSecondsBehindMaster()
    {
        return $this->container['secondsBehindMaster'];
    }

    /**
    * Sets secondsBehindMaster
    *
    * @param string|null $secondsBehindMaster 主从rds节点延迟时间阈值，以秒为单位，取值范围为0-7200，默认值为30，表示主rds与从rds之间的数据同步时间值不能超过30秒，如果超过30s，读数据指令就不走当前读节点。
    *
    * @return $this
    */
    public function setSecondsBehindMaster($secondsBehindMaster)
    {
        $this->container['secondsBehindMaster'] = $secondsBehindMaster;
        return $this;
    }

    /**
    * Gets sqlAudit
    *  开启或关闭SQL审计。
    *
    * @return string|null
    */
    public function getSqlAudit()
    {
        return $this->container['sqlAudit'];
    }

    /**
    * Sets sqlAudit
    *
    * @param string|null $sqlAudit 开启或关闭SQL审计。
    *
    * @return $this
    */
    public function setSqlAudit($sqlAudit)
    {
        $this->container['sqlAudit'] = $sqlAudit;
        return $this;
    }

    /**
    * Gets sqlExecuteTimeout
    *  SQL执行超时秒数，以秒为单位，取值范围为100-28800，默认值28800，表示sql执行大于等于28800秒超时。
    *
    * @return string|null
    */
    public function getSqlExecuteTimeout()
    {
        return $this->container['sqlExecuteTimeout'];
    }

    /**
    * Sets sqlExecuteTimeout
    *
    * @param string|null $sqlExecuteTimeout SQL执行超时秒数，以秒为单位，取值范围为100-28800，默认值28800，表示sql执行大于等于28800秒超时。
    *
    * @return $this
    */
    public function setSqlExecuteTimeout($sqlExecuteTimeout)
    {
        $this->container['sqlExecuteTimeout'] = $sqlExecuteTimeout;
        return $this;
    }

    /**
    * Gets supportDdlBinlogHint
    *  DDL语句添加binlog hint。
    *
    * @return string|null
    */
    public function getSupportDdlBinlogHint()
    {
        return $this->container['supportDdlBinlogHint'];
    }

    /**
    * Sets supportDdlBinlogHint
    *
    * @param string|null $supportDdlBinlogHint DDL语句添加binlog hint。
    *
    * @return $this
    */
    public function setSupportDdlBinlogHint($supportDdlBinlogHint)
    {
        $this->container['supportDdlBinlogHint'] = $supportDdlBinlogHint;
        return $this;
    }

    /**
    * Gets transactionPolicy
    *  XA：XA 事务，保证原子性，保证可见性；FREE：允许多写，不保证原子性，无性能损耗；NO_DTX：单分片事务。
    *
    * @return string|null
    */
    public function getTransactionPolicy()
    {
        return $this->container['transactionPolicy'];
    }

    /**
    * Sets transactionPolicy
    *
    * @param string|null $transactionPolicy XA：XA 事务，保证原子性，保证可见性；FREE：允许多写，不保证原子性，无性能损耗；NO_DTX：单分片事务。
    *
    * @return $this
    */
    public function setTransactionPolicy($transactionPolicy)
    {
        $this->container['transactionPolicy'] = $transactionPolicy;
        return $this;
    }

    /**
    * Gets ultimateOptimize
    *  开启或关闭优化器中的极致下推优化功能。
    *
    * @return string|null
    */
    public function getUltimateOptimize()
    {
        return $this->container['ultimateOptimize'];
    }

    /**
    * Sets ultimateOptimize
    *
    * @param string|null $ultimateOptimize 开启或关闭优化器中的极致下推优化功能。
    *
    * @return $this
    */
    public function setUltimateOptimize($ultimateOptimize)
    {
        $this->container['ultimateOptimize'] = $ultimateOptimize;
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

