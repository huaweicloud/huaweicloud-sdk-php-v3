<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateFlinkSqlJobRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateFlinkSqlJobRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  作业名称。长度限制：0-57个字符。
    * desc  作业描述。长度限制：0-2048个字符。
    * queueName  队列名称。长度限制：1-128个字符。
    * sqlBody  Stream SQL语句。长度限制：0-1024*1024个字符。
    * runMode  作业运行模式： shared_cluster：共享。 exclusive_cluster：独享。 edge_node：边缘节点。 默认值为shared_cluster。
    * cuNumber  用户为作业选择的CU数量。默认值为2。
    * parallelNumber  用户设置的作业并行数目。默认值为1。
    * checkpointEnabled  是否开启作业自动快照功能。 开启：true; 关闭：false; 默认：false.
    * checkpointMode  快照模式： 1表示ExactlyOnce：数据只被消费一次。 2表示AtLeastOnce：数据至少被消费一次。 默认值为1。
    * checkpointInterval  快照时间间隔, 单位为秒，默认值为10。
    * obsBucket  当checkpoint_enabled为true时，该参数是用户授权保存快照的OBS路径。当log_enabled 为true时，该参数是用户授权保存作业日志的OBS路径。
    * logEnabled  是否开启作业的日志上传到用户的OBS功能，默认为false。
    * smnTopic  当作业异常时，向该SMN主题推送告警信息。
    * restartWhenException  是否开启作业异常自动重启，默认为false。
    * idleStateRetention  空闲状态过期周期，单位为秒，默认值为3600。
    * edgeGroupIds  边缘计算组ID列表。
    * dirtyDataStrategy  作业脏数据策略。 “2”：保存； “1”：抛出异常； “0”：忽略； 默认值为“0”。
    * udfJarUrl  用户自定义UDF文件，在后续作业中可以调用插入Jar包中的自定义函数。 UDF Jar包的管理方式： 上传OBS管理UDF Jar包：提前将对应的Jar包上传至OBS桶中。并在此处选择对应的OBS路径。 上传DLI管理UDF Jar包：提前将对应的Jar包上传至OBS桶中，并在DLI管理控制台的“数据管理>程序包管理”中创建程序包。 Flink1.15版本不再支持DLI管理UDF Jar包。
    * managerCuNumber  用户为作业选择的管理单元（jobmanager）CU数量，默认值为“1”。
    * tmCus  每个taskmanager的CU数，默认值为“1”。
    * tmSlotNum  每个taskmanager的slot数，默认值为“(parallel_number*tm_cus)/(cu_number-manager_cu_number)”。
    * resumeCheckpoint  异常重启是否从checkpoint恢复。
    * resumeMaxNum  异常重试最大次数，单位：次/小时。取值范围：-1或大于0。默认值为“-1”，表示无限次数。
    * runtimeConfig  Flink作业运行时自定义优化参数。
    * operatorConfig  算子的并行度配置。
    * staticEstimatorConfig  每个算子的流量/命中率配置，json格式的字符串。例如： {\"operator_list\":[   {\"id\":\"0a448493b4782967b150582570326227\",\"rate_factor\":0.55},   {\"id\":\"6d2677a0ecc3fd8df0b72ec675edf8f4\",\"rate_factor\":1},   {\"id\":\"ea632d67b7d595e5b851708ae9ad79d6\",\"rate_factor\":0.55},   {\"id\":\"bc764cd8ddf7a0cff126f51c16239658\",\"output_rate\":2000} ]}
    * flinkVersion  Flink版本。当前只支持1.10和1.12。
    * executionAgencyUrn  授权给DLI的委托名。Flink1.15版本时支持配置该参数。
    * resourceConfigVersion  资源配置版本。可选值 \"v1\" ,\"v2\".默认为“v1”。v2版本对比于v1模版不支持设置CU数量，支持直接设置Job Manager Memory和Task Manager Memory。v1：适用于Flink 1.12、Flink 1.13、Flink 1.15。v2：适用于Flink 1.13、Flink 1.15、Flink 1.17。优先推荐使用V2版本的参数设置。
    * resourceConfig  resourceConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'desc' => 'string',
            'queueName' => 'string',
            'sqlBody' => 'string',
            'runMode' => 'string',
            'cuNumber' => 'int',
            'parallelNumber' => 'int',
            'checkpointEnabled' => 'bool',
            'checkpointMode' => 'int',
            'checkpointInterval' => 'int',
            'obsBucket' => 'string',
            'logEnabled' => 'bool',
            'smnTopic' => 'string',
            'restartWhenException' => 'bool',
            'idleStateRetention' => 'int',
            'edgeGroupIds' => 'string[]',
            'dirtyDataStrategy' => 'string',
            'udfJarUrl' => 'string',
            'managerCuNumber' => 'int',
            'tmCus' => 'int',
            'tmSlotNum' => 'int',
            'resumeCheckpoint' => 'bool',
            'resumeMaxNum' => 'int',
            'runtimeConfig' => 'string',
            'operatorConfig' => 'string',
            'staticEstimatorConfig' => 'string',
            'flinkVersion' => 'string',
            'executionAgencyUrn' => 'string',
            'resourceConfigVersion' => 'string',
            'resourceConfig' => '\HuaweiCloud\SDK\Dli\V1\Model\ResourceConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  作业名称。长度限制：0-57个字符。
    * desc  作业描述。长度限制：0-2048个字符。
    * queueName  队列名称。长度限制：1-128个字符。
    * sqlBody  Stream SQL语句。长度限制：0-1024*1024个字符。
    * runMode  作业运行模式： shared_cluster：共享。 exclusive_cluster：独享。 edge_node：边缘节点。 默认值为shared_cluster。
    * cuNumber  用户为作业选择的CU数量。默认值为2。
    * parallelNumber  用户设置的作业并行数目。默认值为1。
    * checkpointEnabled  是否开启作业自动快照功能。 开启：true; 关闭：false; 默认：false.
    * checkpointMode  快照模式： 1表示ExactlyOnce：数据只被消费一次。 2表示AtLeastOnce：数据至少被消费一次。 默认值为1。
    * checkpointInterval  快照时间间隔, 单位为秒，默认值为10。
    * obsBucket  当checkpoint_enabled为true时，该参数是用户授权保存快照的OBS路径。当log_enabled 为true时，该参数是用户授权保存作业日志的OBS路径。
    * logEnabled  是否开启作业的日志上传到用户的OBS功能，默认为false。
    * smnTopic  当作业异常时，向该SMN主题推送告警信息。
    * restartWhenException  是否开启作业异常自动重启，默认为false。
    * idleStateRetention  空闲状态过期周期，单位为秒，默认值为3600。
    * edgeGroupIds  边缘计算组ID列表。
    * dirtyDataStrategy  作业脏数据策略。 “2”：保存； “1”：抛出异常； “0”：忽略； 默认值为“0”。
    * udfJarUrl  用户自定义UDF文件，在后续作业中可以调用插入Jar包中的自定义函数。 UDF Jar包的管理方式： 上传OBS管理UDF Jar包：提前将对应的Jar包上传至OBS桶中。并在此处选择对应的OBS路径。 上传DLI管理UDF Jar包：提前将对应的Jar包上传至OBS桶中，并在DLI管理控制台的“数据管理>程序包管理”中创建程序包。 Flink1.15版本不再支持DLI管理UDF Jar包。
    * managerCuNumber  用户为作业选择的管理单元（jobmanager）CU数量，默认值为“1”。
    * tmCus  每个taskmanager的CU数，默认值为“1”。
    * tmSlotNum  每个taskmanager的slot数，默认值为“(parallel_number*tm_cus)/(cu_number-manager_cu_number)”。
    * resumeCheckpoint  异常重启是否从checkpoint恢复。
    * resumeMaxNum  异常重试最大次数，单位：次/小时。取值范围：-1或大于0。默认值为“-1”，表示无限次数。
    * runtimeConfig  Flink作业运行时自定义优化参数。
    * operatorConfig  算子的并行度配置。
    * staticEstimatorConfig  每个算子的流量/命中率配置，json格式的字符串。例如： {\"operator_list\":[   {\"id\":\"0a448493b4782967b150582570326227\",\"rate_factor\":0.55},   {\"id\":\"6d2677a0ecc3fd8df0b72ec675edf8f4\",\"rate_factor\":1},   {\"id\":\"ea632d67b7d595e5b851708ae9ad79d6\",\"rate_factor\":0.55},   {\"id\":\"bc764cd8ddf7a0cff126f51c16239658\",\"output_rate\":2000} ]}
    * flinkVersion  Flink版本。当前只支持1.10和1.12。
    * executionAgencyUrn  授权给DLI的委托名。Flink1.15版本时支持配置该参数。
    * resourceConfigVersion  资源配置版本。可选值 \"v1\" ,\"v2\".默认为“v1”。v2版本对比于v1模版不支持设置CU数量，支持直接设置Job Manager Memory和Task Manager Memory。v1：适用于Flink 1.12、Flink 1.13、Flink 1.15。v2：适用于Flink 1.13、Flink 1.15、Flink 1.17。优先推荐使用V2版本的参数设置。
    * resourceConfig  resourceConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'desc' => null,
        'queueName' => null,
        'sqlBody' => null,
        'runMode' => null,
        'cuNumber' => 'int32',
        'parallelNumber' => 'int32',
        'checkpointEnabled' => null,
        'checkpointMode' => 'int32',
        'checkpointInterval' => 'int32',
        'obsBucket' => null,
        'logEnabled' => null,
        'smnTopic' => null,
        'restartWhenException' => null,
        'idleStateRetention' => 'int32',
        'edgeGroupIds' => null,
        'dirtyDataStrategy' => null,
        'udfJarUrl' => null,
        'managerCuNumber' => 'int32',
        'tmCus' => 'int32',
        'tmSlotNum' => 'int32',
        'resumeCheckpoint' => null,
        'resumeMaxNum' => 'int32',
        'runtimeConfig' => null,
        'operatorConfig' => null,
        'staticEstimatorConfig' => null,
        'flinkVersion' => null,
        'executionAgencyUrn' => null,
        'resourceConfigVersion' => null,
        'resourceConfig' => null
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
    * name  作业名称。长度限制：0-57个字符。
    * desc  作业描述。长度限制：0-2048个字符。
    * queueName  队列名称。长度限制：1-128个字符。
    * sqlBody  Stream SQL语句。长度限制：0-1024*1024个字符。
    * runMode  作业运行模式： shared_cluster：共享。 exclusive_cluster：独享。 edge_node：边缘节点。 默认值为shared_cluster。
    * cuNumber  用户为作业选择的CU数量。默认值为2。
    * parallelNumber  用户设置的作业并行数目。默认值为1。
    * checkpointEnabled  是否开启作业自动快照功能。 开启：true; 关闭：false; 默认：false.
    * checkpointMode  快照模式： 1表示ExactlyOnce：数据只被消费一次。 2表示AtLeastOnce：数据至少被消费一次。 默认值为1。
    * checkpointInterval  快照时间间隔, 单位为秒，默认值为10。
    * obsBucket  当checkpoint_enabled为true时，该参数是用户授权保存快照的OBS路径。当log_enabled 为true时，该参数是用户授权保存作业日志的OBS路径。
    * logEnabled  是否开启作业的日志上传到用户的OBS功能，默认为false。
    * smnTopic  当作业异常时，向该SMN主题推送告警信息。
    * restartWhenException  是否开启作业异常自动重启，默认为false。
    * idleStateRetention  空闲状态过期周期，单位为秒，默认值为3600。
    * edgeGroupIds  边缘计算组ID列表。
    * dirtyDataStrategy  作业脏数据策略。 “2”：保存； “1”：抛出异常； “0”：忽略； 默认值为“0”。
    * udfJarUrl  用户自定义UDF文件，在后续作业中可以调用插入Jar包中的自定义函数。 UDF Jar包的管理方式： 上传OBS管理UDF Jar包：提前将对应的Jar包上传至OBS桶中。并在此处选择对应的OBS路径。 上传DLI管理UDF Jar包：提前将对应的Jar包上传至OBS桶中，并在DLI管理控制台的“数据管理>程序包管理”中创建程序包。 Flink1.15版本不再支持DLI管理UDF Jar包。
    * managerCuNumber  用户为作业选择的管理单元（jobmanager）CU数量，默认值为“1”。
    * tmCus  每个taskmanager的CU数，默认值为“1”。
    * tmSlotNum  每个taskmanager的slot数，默认值为“(parallel_number*tm_cus)/(cu_number-manager_cu_number)”。
    * resumeCheckpoint  异常重启是否从checkpoint恢复。
    * resumeMaxNum  异常重试最大次数，单位：次/小时。取值范围：-1或大于0。默认值为“-1”，表示无限次数。
    * runtimeConfig  Flink作业运行时自定义优化参数。
    * operatorConfig  算子的并行度配置。
    * staticEstimatorConfig  每个算子的流量/命中率配置，json格式的字符串。例如： {\"operator_list\":[   {\"id\":\"0a448493b4782967b150582570326227\",\"rate_factor\":0.55},   {\"id\":\"6d2677a0ecc3fd8df0b72ec675edf8f4\",\"rate_factor\":1},   {\"id\":\"ea632d67b7d595e5b851708ae9ad79d6\",\"rate_factor\":0.55},   {\"id\":\"bc764cd8ddf7a0cff126f51c16239658\",\"output_rate\":2000} ]}
    * flinkVersion  Flink版本。当前只支持1.10和1.12。
    * executionAgencyUrn  授权给DLI的委托名。Flink1.15版本时支持配置该参数。
    * resourceConfigVersion  资源配置版本。可选值 \"v1\" ,\"v2\".默认为“v1”。v2版本对比于v1模版不支持设置CU数量，支持直接设置Job Manager Memory和Task Manager Memory。v1：适用于Flink 1.12、Flink 1.13、Flink 1.15。v2：适用于Flink 1.13、Flink 1.15、Flink 1.17。优先推荐使用V2版本的参数设置。
    * resourceConfig  resourceConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'desc' => 'desc',
            'queueName' => 'queue_name',
            'sqlBody' => 'sql_body',
            'runMode' => 'run_mode',
            'cuNumber' => 'cu_number',
            'parallelNumber' => 'parallel_number',
            'checkpointEnabled' => 'checkpoint_enabled',
            'checkpointMode' => 'checkpoint_mode',
            'checkpointInterval' => 'checkpoint_interval',
            'obsBucket' => 'obs_bucket',
            'logEnabled' => 'log_enabled',
            'smnTopic' => 'smn_topic',
            'restartWhenException' => 'restart_when_exception',
            'idleStateRetention' => 'idle_state_retention',
            'edgeGroupIds' => 'edge_group_ids',
            'dirtyDataStrategy' => 'dirty_data_strategy',
            'udfJarUrl' => 'udf_jar_url',
            'managerCuNumber' => 'manager_cu_number',
            'tmCus' => 'tm_cus',
            'tmSlotNum' => 'tm_slot_num',
            'resumeCheckpoint' => 'resume_checkpoint',
            'resumeMaxNum' => 'resume_max_num',
            'runtimeConfig' => 'runtime_config',
            'operatorConfig' => 'operator_config',
            'staticEstimatorConfig' => 'static_estimator_config',
            'flinkVersion' => 'flink_version',
            'executionAgencyUrn' => 'execution_agency_urn',
            'resourceConfigVersion' => 'resource_config_version',
            'resourceConfig' => 'resource_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  作业名称。长度限制：0-57个字符。
    * desc  作业描述。长度限制：0-2048个字符。
    * queueName  队列名称。长度限制：1-128个字符。
    * sqlBody  Stream SQL语句。长度限制：0-1024*1024个字符。
    * runMode  作业运行模式： shared_cluster：共享。 exclusive_cluster：独享。 edge_node：边缘节点。 默认值为shared_cluster。
    * cuNumber  用户为作业选择的CU数量。默认值为2。
    * parallelNumber  用户设置的作业并行数目。默认值为1。
    * checkpointEnabled  是否开启作业自动快照功能。 开启：true; 关闭：false; 默认：false.
    * checkpointMode  快照模式： 1表示ExactlyOnce：数据只被消费一次。 2表示AtLeastOnce：数据至少被消费一次。 默认值为1。
    * checkpointInterval  快照时间间隔, 单位为秒，默认值为10。
    * obsBucket  当checkpoint_enabled为true时，该参数是用户授权保存快照的OBS路径。当log_enabled 为true时，该参数是用户授权保存作业日志的OBS路径。
    * logEnabled  是否开启作业的日志上传到用户的OBS功能，默认为false。
    * smnTopic  当作业异常时，向该SMN主题推送告警信息。
    * restartWhenException  是否开启作业异常自动重启，默认为false。
    * idleStateRetention  空闲状态过期周期，单位为秒，默认值为3600。
    * edgeGroupIds  边缘计算组ID列表。
    * dirtyDataStrategy  作业脏数据策略。 “2”：保存； “1”：抛出异常； “0”：忽略； 默认值为“0”。
    * udfJarUrl  用户自定义UDF文件，在后续作业中可以调用插入Jar包中的自定义函数。 UDF Jar包的管理方式： 上传OBS管理UDF Jar包：提前将对应的Jar包上传至OBS桶中。并在此处选择对应的OBS路径。 上传DLI管理UDF Jar包：提前将对应的Jar包上传至OBS桶中，并在DLI管理控制台的“数据管理>程序包管理”中创建程序包。 Flink1.15版本不再支持DLI管理UDF Jar包。
    * managerCuNumber  用户为作业选择的管理单元（jobmanager）CU数量，默认值为“1”。
    * tmCus  每个taskmanager的CU数，默认值为“1”。
    * tmSlotNum  每个taskmanager的slot数，默认值为“(parallel_number*tm_cus)/(cu_number-manager_cu_number)”。
    * resumeCheckpoint  异常重启是否从checkpoint恢复。
    * resumeMaxNum  异常重试最大次数，单位：次/小时。取值范围：-1或大于0。默认值为“-1”，表示无限次数。
    * runtimeConfig  Flink作业运行时自定义优化参数。
    * operatorConfig  算子的并行度配置。
    * staticEstimatorConfig  每个算子的流量/命中率配置，json格式的字符串。例如： {\"operator_list\":[   {\"id\":\"0a448493b4782967b150582570326227\",\"rate_factor\":0.55},   {\"id\":\"6d2677a0ecc3fd8df0b72ec675edf8f4\",\"rate_factor\":1},   {\"id\":\"ea632d67b7d595e5b851708ae9ad79d6\",\"rate_factor\":0.55},   {\"id\":\"bc764cd8ddf7a0cff126f51c16239658\",\"output_rate\":2000} ]}
    * flinkVersion  Flink版本。当前只支持1.10和1.12。
    * executionAgencyUrn  授权给DLI的委托名。Flink1.15版本时支持配置该参数。
    * resourceConfigVersion  资源配置版本。可选值 \"v1\" ,\"v2\".默认为“v1”。v2版本对比于v1模版不支持设置CU数量，支持直接设置Job Manager Memory和Task Manager Memory。v1：适用于Flink 1.12、Flink 1.13、Flink 1.15。v2：适用于Flink 1.13、Flink 1.15、Flink 1.17。优先推荐使用V2版本的参数设置。
    * resourceConfig  resourceConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'desc' => 'setDesc',
            'queueName' => 'setQueueName',
            'sqlBody' => 'setSqlBody',
            'runMode' => 'setRunMode',
            'cuNumber' => 'setCuNumber',
            'parallelNumber' => 'setParallelNumber',
            'checkpointEnabled' => 'setCheckpointEnabled',
            'checkpointMode' => 'setCheckpointMode',
            'checkpointInterval' => 'setCheckpointInterval',
            'obsBucket' => 'setObsBucket',
            'logEnabled' => 'setLogEnabled',
            'smnTopic' => 'setSmnTopic',
            'restartWhenException' => 'setRestartWhenException',
            'idleStateRetention' => 'setIdleStateRetention',
            'edgeGroupIds' => 'setEdgeGroupIds',
            'dirtyDataStrategy' => 'setDirtyDataStrategy',
            'udfJarUrl' => 'setUdfJarUrl',
            'managerCuNumber' => 'setManagerCuNumber',
            'tmCus' => 'setTmCus',
            'tmSlotNum' => 'setTmSlotNum',
            'resumeCheckpoint' => 'setResumeCheckpoint',
            'resumeMaxNum' => 'setResumeMaxNum',
            'runtimeConfig' => 'setRuntimeConfig',
            'operatorConfig' => 'setOperatorConfig',
            'staticEstimatorConfig' => 'setStaticEstimatorConfig',
            'flinkVersion' => 'setFlinkVersion',
            'executionAgencyUrn' => 'setExecutionAgencyUrn',
            'resourceConfigVersion' => 'setResourceConfigVersion',
            'resourceConfig' => 'setResourceConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  作业名称。长度限制：0-57个字符。
    * desc  作业描述。长度限制：0-2048个字符。
    * queueName  队列名称。长度限制：1-128个字符。
    * sqlBody  Stream SQL语句。长度限制：0-1024*1024个字符。
    * runMode  作业运行模式： shared_cluster：共享。 exclusive_cluster：独享。 edge_node：边缘节点。 默认值为shared_cluster。
    * cuNumber  用户为作业选择的CU数量。默认值为2。
    * parallelNumber  用户设置的作业并行数目。默认值为1。
    * checkpointEnabled  是否开启作业自动快照功能。 开启：true; 关闭：false; 默认：false.
    * checkpointMode  快照模式： 1表示ExactlyOnce：数据只被消费一次。 2表示AtLeastOnce：数据至少被消费一次。 默认值为1。
    * checkpointInterval  快照时间间隔, 单位为秒，默认值为10。
    * obsBucket  当checkpoint_enabled为true时，该参数是用户授权保存快照的OBS路径。当log_enabled 为true时，该参数是用户授权保存作业日志的OBS路径。
    * logEnabled  是否开启作业的日志上传到用户的OBS功能，默认为false。
    * smnTopic  当作业异常时，向该SMN主题推送告警信息。
    * restartWhenException  是否开启作业异常自动重启，默认为false。
    * idleStateRetention  空闲状态过期周期，单位为秒，默认值为3600。
    * edgeGroupIds  边缘计算组ID列表。
    * dirtyDataStrategy  作业脏数据策略。 “2”：保存； “1”：抛出异常； “0”：忽略； 默认值为“0”。
    * udfJarUrl  用户自定义UDF文件，在后续作业中可以调用插入Jar包中的自定义函数。 UDF Jar包的管理方式： 上传OBS管理UDF Jar包：提前将对应的Jar包上传至OBS桶中。并在此处选择对应的OBS路径。 上传DLI管理UDF Jar包：提前将对应的Jar包上传至OBS桶中，并在DLI管理控制台的“数据管理>程序包管理”中创建程序包。 Flink1.15版本不再支持DLI管理UDF Jar包。
    * managerCuNumber  用户为作业选择的管理单元（jobmanager）CU数量，默认值为“1”。
    * tmCus  每个taskmanager的CU数，默认值为“1”。
    * tmSlotNum  每个taskmanager的slot数，默认值为“(parallel_number*tm_cus)/(cu_number-manager_cu_number)”。
    * resumeCheckpoint  异常重启是否从checkpoint恢复。
    * resumeMaxNum  异常重试最大次数，单位：次/小时。取值范围：-1或大于0。默认值为“-1”，表示无限次数。
    * runtimeConfig  Flink作业运行时自定义优化参数。
    * operatorConfig  算子的并行度配置。
    * staticEstimatorConfig  每个算子的流量/命中率配置，json格式的字符串。例如： {\"operator_list\":[   {\"id\":\"0a448493b4782967b150582570326227\",\"rate_factor\":0.55},   {\"id\":\"6d2677a0ecc3fd8df0b72ec675edf8f4\",\"rate_factor\":1},   {\"id\":\"ea632d67b7d595e5b851708ae9ad79d6\",\"rate_factor\":0.55},   {\"id\":\"bc764cd8ddf7a0cff126f51c16239658\",\"output_rate\":2000} ]}
    * flinkVersion  Flink版本。当前只支持1.10和1.12。
    * executionAgencyUrn  授权给DLI的委托名。Flink1.15版本时支持配置该参数。
    * resourceConfigVersion  资源配置版本。可选值 \"v1\" ,\"v2\".默认为“v1”。v2版本对比于v1模版不支持设置CU数量，支持直接设置Job Manager Memory和Task Manager Memory。v1：适用于Flink 1.12、Flink 1.13、Flink 1.15。v2：适用于Flink 1.13、Flink 1.15、Flink 1.17。优先推荐使用V2版本的参数设置。
    * resourceConfig  resourceConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'desc' => 'getDesc',
            'queueName' => 'getQueueName',
            'sqlBody' => 'getSqlBody',
            'runMode' => 'getRunMode',
            'cuNumber' => 'getCuNumber',
            'parallelNumber' => 'getParallelNumber',
            'checkpointEnabled' => 'getCheckpointEnabled',
            'checkpointMode' => 'getCheckpointMode',
            'checkpointInterval' => 'getCheckpointInterval',
            'obsBucket' => 'getObsBucket',
            'logEnabled' => 'getLogEnabled',
            'smnTopic' => 'getSmnTopic',
            'restartWhenException' => 'getRestartWhenException',
            'idleStateRetention' => 'getIdleStateRetention',
            'edgeGroupIds' => 'getEdgeGroupIds',
            'dirtyDataStrategy' => 'getDirtyDataStrategy',
            'udfJarUrl' => 'getUdfJarUrl',
            'managerCuNumber' => 'getManagerCuNumber',
            'tmCus' => 'getTmCus',
            'tmSlotNum' => 'getTmSlotNum',
            'resumeCheckpoint' => 'getResumeCheckpoint',
            'resumeMaxNum' => 'getResumeMaxNum',
            'runtimeConfig' => 'getRuntimeConfig',
            'operatorConfig' => 'getOperatorConfig',
            'staticEstimatorConfig' => 'getStaticEstimatorConfig',
            'flinkVersion' => 'getFlinkVersion',
            'executionAgencyUrn' => 'getExecutionAgencyUrn',
            'resourceConfigVersion' => 'getResourceConfigVersion',
            'resourceConfig' => 'getResourceConfig'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
        $this->container['queueName'] = isset($data['queueName']) ? $data['queueName'] : null;
        $this->container['sqlBody'] = isset($data['sqlBody']) ? $data['sqlBody'] : null;
        $this->container['runMode'] = isset($data['runMode']) ? $data['runMode'] : null;
        $this->container['cuNumber'] = isset($data['cuNumber']) ? $data['cuNumber'] : null;
        $this->container['parallelNumber'] = isset($data['parallelNumber']) ? $data['parallelNumber'] : null;
        $this->container['checkpointEnabled'] = isset($data['checkpointEnabled']) ? $data['checkpointEnabled'] : null;
        $this->container['checkpointMode'] = isset($data['checkpointMode']) ? $data['checkpointMode'] : null;
        $this->container['checkpointInterval'] = isset($data['checkpointInterval']) ? $data['checkpointInterval'] : null;
        $this->container['obsBucket'] = isset($data['obsBucket']) ? $data['obsBucket'] : null;
        $this->container['logEnabled'] = isset($data['logEnabled']) ? $data['logEnabled'] : null;
        $this->container['smnTopic'] = isset($data['smnTopic']) ? $data['smnTopic'] : null;
        $this->container['restartWhenException'] = isset($data['restartWhenException']) ? $data['restartWhenException'] : null;
        $this->container['idleStateRetention'] = isset($data['idleStateRetention']) ? $data['idleStateRetention'] : null;
        $this->container['edgeGroupIds'] = isset($data['edgeGroupIds']) ? $data['edgeGroupIds'] : null;
        $this->container['dirtyDataStrategy'] = isset($data['dirtyDataStrategy']) ? $data['dirtyDataStrategy'] : null;
        $this->container['udfJarUrl'] = isset($data['udfJarUrl']) ? $data['udfJarUrl'] : null;
        $this->container['managerCuNumber'] = isset($data['managerCuNumber']) ? $data['managerCuNumber'] : null;
        $this->container['tmCus'] = isset($data['tmCus']) ? $data['tmCus'] : null;
        $this->container['tmSlotNum'] = isset($data['tmSlotNum']) ? $data['tmSlotNum'] : null;
        $this->container['resumeCheckpoint'] = isset($data['resumeCheckpoint']) ? $data['resumeCheckpoint'] : null;
        $this->container['resumeMaxNum'] = isset($data['resumeMaxNum']) ? $data['resumeMaxNum'] : null;
        $this->container['runtimeConfig'] = isset($data['runtimeConfig']) ? $data['runtimeConfig'] : null;
        $this->container['operatorConfig'] = isset($data['operatorConfig']) ? $data['operatorConfig'] : null;
        $this->container['staticEstimatorConfig'] = isset($data['staticEstimatorConfig']) ? $data['staticEstimatorConfig'] : null;
        $this->container['flinkVersion'] = isset($data['flinkVersion']) ? $data['flinkVersion'] : null;
        $this->container['executionAgencyUrn'] = isset($data['executionAgencyUrn']) ? $data['executionAgencyUrn'] : null;
        $this->container['resourceConfigVersion'] = isset($data['resourceConfigVersion']) ? $data['resourceConfigVersion'] : null;
        $this->container['resourceConfig'] = isset($data['resourceConfig']) ? $data['resourceConfig'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 57)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 57.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['desc']) && (mb_strlen($this->container['desc']) > 2048)) {
                $invalidProperties[] = "invalid value for 'desc', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['desc']) && (mb_strlen($this->container['desc']) < 0)) {
                $invalidProperties[] = "invalid value for 'desc', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['queueName']) && (mb_strlen($this->container['queueName']) > 128)) {
                $invalidProperties[] = "invalid value for 'queueName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['queueName']) && (mb_strlen($this->container['queueName']) < 1)) {
                $invalidProperties[] = "invalid value for 'queueName', the character length must be bigger than or equal to 1.";
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
    * Gets name
    *  作业名称。长度限制：0-57个字符。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 作业名称。长度限制：0-57个字符。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets desc
    *  作业描述。长度限制：0-2048个字符。
    *
    * @return string|null
    */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
    * Sets desc
    *
    * @param string|null $desc 作业描述。长度限制：0-2048个字符。
    *
    * @return $this
    */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;
        return $this;
    }

    /**
    * Gets queueName
    *  队列名称。长度限制：1-128个字符。
    *
    * @return string|null
    */
    public function getQueueName()
    {
        return $this->container['queueName'];
    }

    /**
    * Sets queueName
    *
    * @param string|null $queueName 队列名称。长度限制：1-128个字符。
    *
    * @return $this
    */
    public function setQueueName($queueName)
    {
        $this->container['queueName'] = $queueName;
        return $this;
    }

    /**
    * Gets sqlBody
    *  Stream SQL语句。长度限制：0-1024*1024个字符。
    *
    * @return string|null
    */
    public function getSqlBody()
    {
        return $this->container['sqlBody'];
    }

    /**
    * Sets sqlBody
    *
    * @param string|null $sqlBody Stream SQL语句。长度限制：0-1024*1024个字符。
    *
    * @return $this
    */
    public function setSqlBody($sqlBody)
    {
        $this->container['sqlBody'] = $sqlBody;
        return $this;
    }

    /**
    * Gets runMode
    *  作业运行模式： shared_cluster：共享。 exclusive_cluster：独享。 edge_node：边缘节点。 默认值为shared_cluster。
    *
    * @return string|null
    */
    public function getRunMode()
    {
        return $this->container['runMode'];
    }

    /**
    * Sets runMode
    *
    * @param string|null $runMode 作业运行模式： shared_cluster：共享。 exclusive_cluster：独享。 edge_node：边缘节点。 默认值为shared_cluster。
    *
    * @return $this
    */
    public function setRunMode($runMode)
    {
        $this->container['runMode'] = $runMode;
        return $this;
    }

    /**
    * Gets cuNumber
    *  用户为作业选择的CU数量。默认值为2。
    *
    * @return int|null
    */
    public function getCuNumber()
    {
        return $this->container['cuNumber'];
    }

    /**
    * Sets cuNumber
    *
    * @param int|null $cuNumber 用户为作业选择的CU数量。默认值为2。
    *
    * @return $this
    */
    public function setCuNumber($cuNumber)
    {
        $this->container['cuNumber'] = $cuNumber;
        return $this;
    }

    /**
    * Gets parallelNumber
    *  用户设置的作业并行数目。默认值为1。
    *
    * @return int|null
    */
    public function getParallelNumber()
    {
        return $this->container['parallelNumber'];
    }

    /**
    * Sets parallelNumber
    *
    * @param int|null $parallelNumber 用户设置的作业并行数目。默认值为1。
    *
    * @return $this
    */
    public function setParallelNumber($parallelNumber)
    {
        $this->container['parallelNumber'] = $parallelNumber;
        return $this;
    }

    /**
    * Gets checkpointEnabled
    *  是否开启作业自动快照功能。 开启：true; 关闭：false; 默认：false.
    *
    * @return bool|null
    */
    public function getCheckpointEnabled()
    {
        return $this->container['checkpointEnabled'];
    }

    /**
    * Sets checkpointEnabled
    *
    * @param bool|null $checkpointEnabled 是否开启作业自动快照功能。 开启：true; 关闭：false; 默认：false.
    *
    * @return $this
    */
    public function setCheckpointEnabled($checkpointEnabled)
    {
        $this->container['checkpointEnabled'] = $checkpointEnabled;
        return $this;
    }

    /**
    * Gets checkpointMode
    *  快照模式： 1表示ExactlyOnce：数据只被消费一次。 2表示AtLeastOnce：数据至少被消费一次。 默认值为1。
    *
    * @return int|null
    */
    public function getCheckpointMode()
    {
        return $this->container['checkpointMode'];
    }

    /**
    * Sets checkpointMode
    *
    * @param int|null $checkpointMode 快照模式： 1表示ExactlyOnce：数据只被消费一次。 2表示AtLeastOnce：数据至少被消费一次。 默认值为1。
    *
    * @return $this
    */
    public function setCheckpointMode($checkpointMode)
    {
        $this->container['checkpointMode'] = $checkpointMode;
        return $this;
    }

    /**
    * Gets checkpointInterval
    *  快照时间间隔, 单位为秒，默认值为10。
    *
    * @return int|null
    */
    public function getCheckpointInterval()
    {
        return $this->container['checkpointInterval'];
    }

    /**
    * Sets checkpointInterval
    *
    * @param int|null $checkpointInterval 快照时间间隔, 单位为秒，默认值为10。
    *
    * @return $this
    */
    public function setCheckpointInterval($checkpointInterval)
    {
        $this->container['checkpointInterval'] = $checkpointInterval;
        return $this;
    }

    /**
    * Gets obsBucket
    *  当checkpoint_enabled为true时，该参数是用户授权保存快照的OBS路径。当log_enabled 为true时，该参数是用户授权保存作业日志的OBS路径。
    *
    * @return string|null
    */
    public function getObsBucket()
    {
        return $this->container['obsBucket'];
    }

    /**
    * Sets obsBucket
    *
    * @param string|null $obsBucket 当checkpoint_enabled为true时，该参数是用户授权保存快照的OBS路径。当log_enabled 为true时，该参数是用户授权保存作业日志的OBS路径。
    *
    * @return $this
    */
    public function setObsBucket($obsBucket)
    {
        $this->container['obsBucket'] = $obsBucket;
        return $this;
    }

    /**
    * Gets logEnabled
    *  是否开启作业的日志上传到用户的OBS功能，默认为false。
    *
    * @return bool|null
    */
    public function getLogEnabled()
    {
        return $this->container['logEnabled'];
    }

    /**
    * Sets logEnabled
    *
    * @param bool|null $logEnabled 是否开启作业的日志上传到用户的OBS功能，默认为false。
    *
    * @return $this
    */
    public function setLogEnabled($logEnabled)
    {
        $this->container['logEnabled'] = $logEnabled;
        return $this;
    }

    /**
    * Gets smnTopic
    *  当作业异常时，向该SMN主题推送告警信息。
    *
    * @return string|null
    */
    public function getSmnTopic()
    {
        return $this->container['smnTopic'];
    }

    /**
    * Sets smnTopic
    *
    * @param string|null $smnTopic 当作业异常时，向该SMN主题推送告警信息。
    *
    * @return $this
    */
    public function setSmnTopic($smnTopic)
    {
        $this->container['smnTopic'] = $smnTopic;
        return $this;
    }

    /**
    * Gets restartWhenException
    *  是否开启作业异常自动重启，默认为false。
    *
    * @return bool|null
    */
    public function getRestartWhenException()
    {
        return $this->container['restartWhenException'];
    }

    /**
    * Sets restartWhenException
    *
    * @param bool|null $restartWhenException 是否开启作业异常自动重启，默认为false。
    *
    * @return $this
    */
    public function setRestartWhenException($restartWhenException)
    {
        $this->container['restartWhenException'] = $restartWhenException;
        return $this;
    }

    /**
    * Gets idleStateRetention
    *  空闲状态过期周期，单位为秒，默认值为3600。
    *
    * @return int|null
    */
    public function getIdleStateRetention()
    {
        return $this->container['idleStateRetention'];
    }

    /**
    * Sets idleStateRetention
    *
    * @param int|null $idleStateRetention 空闲状态过期周期，单位为秒，默认值为3600。
    *
    * @return $this
    */
    public function setIdleStateRetention($idleStateRetention)
    {
        $this->container['idleStateRetention'] = $idleStateRetention;
        return $this;
    }

    /**
    * Gets edgeGroupIds
    *  边缘计算组ID列表。
    *
    * @return string[]|null
    */
    public function getEdgeGroupIds()
    {
        return $this->container['edgeGroupIds'];
    }

    /**
    * Sets edgeGroupIds
    *
    * @param string[]|null $edgeGroupIds 边缘计算组ID列表。
    *
    * @return $this
    */
    public function setEdgeGroupIds($edgeGroupIds)
    {
        $this->container['edgeGroupIds'] = $edgeGroupIds;
        return $this;
    }

    /**
    * Gets dirtyDataStrategy
    *  作业脏数据策略。 “2”：保存； “1”：抛出异常； “0”：忽略； 默认值为“0”。
    *
    * @return string|null
    */
    public function getDirtyDataStrategy()
    {
        return $this->container['dirtyDataStrategy'];
    }

    /**
    * Sets dirtyDataStrategy
    *
    * @param string|null $dirtyDataStrategy 作业脏数据策略。 “2”：保存； “1”：抛出异常； “0”：忽略； 默认值为“0”。
    *
    * @return $this
    */
    public function setDirtyDataStrategy($dirtyDataStrategy)
    {
        $this->container['dirtyDataStrategy'] = $dirtyDataStrategy;
        return $this;
    }

    /**
    * Gets udfJarUrl
    *  用户自定义UDF文件，在后续作业中可以调用插入Jar包中的自定义函数。 UDF Jar包的管理方式： 上传OBS管理UDF Jar包：提前将对应的Jar包上传至OBS桶中。并在此处选择对应的OBS路径。 上传DLI管理UDF Jar包：提前将对应的Jar包上传至OBS桶中，并在DLI管理控制台的“数据管理>程序包管理”中创建程序包。 Flink1.15版本不再支持DLI管理UDF Jar包。
    *
    * @return string|null
    */
    public function getUdfJarUrl()
    {
        return $this->container['udfJarUrl'];
    }

    /**
    * Sets udfJarUrl
    *
    * @param string|null $udfJarUrl 用户自定义UDF文件，在后续作业中可以调用插入Jar包中的自定义函数。 UDF Jar包的管理方式： 上传OBS管理UDF Jar包：提前将对应的Jar包上传至OBS桶中。并在此处选择对应的OBS路径。 上传DLI管理UDF Jar包：提前将对应的Jar包上传至OBS桶中，并在DLI管理控制台的“数据管理>程序包管理”中创建程序包。 Flink1.15版本不再支持DLI管理UDF Jar包。
    *
    * @return $this
    */
    public function setUdfJarUrl($udfJarUrl)
    {
        $this->container['udfJarUrl'] = $udfJarUrl;
        return $this;
    }

    /**
    * Gets managerCuNumber
    *  用户为作业选择的管理单元（jobmanager）CU数量，默认值为“1”。
    *
    * @return int|null
    */
    public function getManagerCuNumber()
    {
        return $this->container['managerCuNumber'];
    }

    /**
    * Sets managerCuNumber
    *
    * @param int|null $managerCuNumber 用户为作业选择的管理单元（jobmanager）CU数量，默认值为“1”。
    *
    * @return $this
    */
    public function setManagerCuNumber($managerCuNumber)
    {
        $this->container['managerCuNumber'] = $managerCuNumber;
        return $this;
    }

    /**
    * Gets tmCus
    *  每个taskmanager的CU数，默认值为“1”。
    *
    * @return int|null
    */
    public function getTmCus()
    {
        return $this->container['tmCus'];
    }

    /**
    * Sets tmCus
    *
    * @param int|null $tmCus 每个taskmanager的CU数，默认值为“1”。
    *
    * @return $this
    */
    public function setTmCus($tmCus)
    {
        $this->container['tmCus'] = $tmCus;
        return $this;
    }

    /**
    * Gets tmSlotNum
    *  每个taskmanager的slot数，默认值为“(parallel_number*tm_cus)/(cu_number-manager_cu_number)”。
    *
    * @return int|null
    */
    public function getTmSlotNum()
    {
        return $this->container['tmSlotNum'];
    }

    /**
    * Sets tmSlotNum
    *
    * @param int|null $tmSlotNum 每个taskmanager的slot数，默认值为“(parallel_number*tm_cus)/(cu_number-manager_cu_number)”。
    *
    * @return $this
    */
    public function setTmSlotNum($tmSlotNum)
    {
        $this->container['tmSlotNum'] = $tmSlotNum;
        return $this;
    }

    /**
    * Gets resumeCheckpoint
    *  异常重启是否从checkpoint恢复。
    *
    * @return bool|null
    */
    public function getResumeCheckpoint()
    {
        return $this->container['resumeCheckpoint'];
    }

    /**
    * Sets resumeCheckpoint
    *
    * @param bool|null $resumeCheckpoint 异常重启是否从checkpoint恢复。
    *
    * @return $this
    */
    public function setResumeCheckpoint($resumeCheckpoint)
    {
        $this->container['resumeCheckpoint'] = $resumeCheckpoint;
        return $this;
    }

    /**
    * Gets resumeMaxNum
    *  异常重试最大次数，单位：次/小时。取值范围：-1或大于0。默认值为“-1”，表示无限次数。
    *
    * @return int|null
    */
    public function getResumeMaxNum()
    {
        return $this->container['resumeMaxNum'];
    }

    /**
    * Sets resumeMaxNum
    *
    * @param int|null $resumeMaxNum 异常重试最大次数，单位：次/小时。取值范围：-1或大于0。默认值为“-1”，表示无限次数。
    *
    * @return $this
    */
    public function setResumeMaxNum($resumeMaxNum)
    {
        $this->container['resumeMaxNum'] = $resumeMaxNum;
        return $this;
    }

    /**
    * Gets runtimeConfig
    *  Flink作业运行时自定义优化参数。
    *
    * @return string|null
    */
    public function getRuntimeConfig()
    {
        return $this->container['runtimeConfig'];
    }

    /**
    * Sets runtimeConfig
    *
    * @param string|null $runtimeConfig Flink作业运行时自定义优化参数。
    *
    * @return $this
    */
    public function setRuntimeConfig($runtimeConfig)
    {
        $this->container['runtimeConfig'] = $runtimeConfig;
        return $this;
    }

    /**
    * Gets operatorConfig
    *  算子的并行度配置。
    *
    * @return string|null
    */
    public function getOperatorConfig()
    {
        return $this->container['operatorConfig'];
    }

    /**
    * Sets operatorConfig
    *
    * @param string|null $operatorConfig 算子的并行度配置。
    *
    * @return $this
    */
    public function setOperatorConfig($operatorConfig)
    {
        $this->container['operatorConfig'] = $operatorConfig;
        return $this;
    }

    /**
    * Gets staticEstimatorConfig
    *  每个算子的流量/命中率配置，json格式的字符串。例如： {\"operator_list\":[   {\"id\":\"0a448493b4782967b150582570326227\",\"rate_factor\":0.55},   {\"id\":\"6d2677a0ecc3fd8df0b72ec675edf8f4\",\"rate_factor\":1},   {\"id\":\"ea632d67b7d595e5b851708ae9ad79d6\",\"rate_factor\":0.55},   {\"id\":\"bc764cd8ddf7a0cff126f51c16239658\",\"output_rate\":2000} ]}
    *
    * @return string|null
    */
    public function getStaticEstimatorConfig()
    {
        return $this->container['staticEstimatorConfig'];
    }

    /**
    * Sets staticEstimatorConfig
    *
    * @param string|null $staticEstimatorConfig 每个算子的流量/命中率配置，json格式的字符串。例如： {\"operator_list\":[   {\"id\":\"0a448493b4782967b150582570326227\",\"rate_factor\":0.55},   {\"id\":\"6d2677a0ecc3fd8df0b72ec675edf8f4\",\"rate_factor\":1},   {\"id\":\"ea632d67b7d595e5b851708ae9ad79d6\",\"rate_factor\":0.55},   {\"id\":\"bc764cd8ddf7a0cff126f51c16239658\",\"output_rate\":2000} ]}
    *
    * @return $this
    */
    public function setStaticEstimatorConfig($staticEstimatorConfig)
    {
        $this->container['staticEstimatorConfig'] = $staticEstimatorConfig;
        return $this;
    }

    /**
    * Gets flinkVersion
    *  Flink版本。当前只支持1.10和1.12。
    *
    * @return string|null
    */
    public function getFlinkVersion()
    {
        return $this->container['flinkVersion'];
    }

    /**
    * Sets flinkVersion
    *
    * @param string|null $flinkVersion Flink版本。当前只支持1.10和1.12。
    *
    * @return $this
    */
    public function setFlinkVersion($flinkVersion)
    {
        $this->container['flinkVersion'] = $flinkVersion;
        return $this;
    }

    /**
    * Gets executionAgencyUrn
    *  授权给DLI的委托名。Flink1.15版本时支持配置该参数。
    *
    * @return string|null
    */
    public function getExecutionAgencyUrn()
    {
        return $this->container['executionAgencyUrn'];
    }

    /**
    * Sets executionAgencyUrn
    *
    * @param string|null $executionAgencyUrn 授权给DLI的委托名。Flink1.15版本时支持配置该参数。
    *
    * @return $this
    */
    public function setExecutionAgencyUrn($executionAgencyUrn)
    {
        $this->container['executionAgencyUrn'] = $executionAgencyUrn;
        return $this;
    }

    /**
    * Gets resourceConfigVersion
    *  资源配置版本。可选值 \"v1\" ,\"v2\".默认为“v1”。v2版本对比于v1模版不支持设置CU数量，支持直接设置Job Manager Memory和Task Manager Memory。v1：适用于Flink 1.12、Flink 1.13、Flink 1.15。v2：适用于Flink 1.13、Flink 1.15、Flink 1.17。优先推荐使用V2版本的参数设置。
    *
    * @return string|null
    */
    public function getResourceConfigVersion()
    {
        return $this->container['resourceConfigVersion'];
    }

    /**
    * Sets resourceConfigVersion
    *
    * @param string|null $resourceConfigVersion 资源配置版本。可选值 \"v1\" ,\"v2\".默认为“v1”。v2版本对比于v1模版不支持设置CU数量，支持直接设置Job Manager Memory和Task Manager Memory。v1：适用于Flink 1.12、Flink 1.13、Flink 1.15。v2：适用于Flink 1.13、Flink 1.15、Flink 1.17。优先推荐使用V2版本的参数设置。
    *
    * @return $this
    */
    public function setResourceConfigVersion($resourceConfigVersion)
    {
        $this->container['resourceConfigVersion'] = $resourceConfigVersion;
        return $this;
    }

    /**
    * Gets resourceConfig
    *  resourceConfig
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\ResourceConfig|null
    */
    public function getResourceConfig()
    {
        return $this->container['resourceConfig'];
    }

    /**
    * Sets resourceConfig
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\ResourceConfig|null $resourceConfig resourceConfig
    *
    * @return $this
    */
    public function setResourceConfig($resourceConfig)
    {
        $this->container['resourceConfig'] = $resourceConfig;
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

