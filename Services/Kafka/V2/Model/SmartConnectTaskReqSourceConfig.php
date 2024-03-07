<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SmartConnectTaskReqSourceConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SmartConnectTaskReqSourceConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * redisAddress  Redis实例地址。（仅源端类型为Redis时需要填写）
    * redisType  Redis实例类型。（仅源端类型为Redis时需要填写）
    * dcsInstanceId  DCS实例ID。（仅源端类型为Redis时需要填写）
    * redisPassword  Redis密码。（仅源端类型为Redis时需要填写）
    * syncMode  同步类型，“RDB_ONLY”为全量同步，“CUSTOM_OFFSET”为全量同步+增量同步。（仅源端类型为Redis时需要填写）
    * fullSyncWaitMs  全量同步重试间隔时间，单位：毫秒。（仅源端类型为Redis时需要填写）
    * fullSyncMaxRetry  全量同步最大重试次数。（仅源端类型为Redis时需要填写）
    * ratelimit  限速，单位为KB/s。-1表示不限速。（仅源端类型为Redis时需要填写）
    * currentClusterName  当前Kafka实例别名。（仅源端类型为Kafka时需要填写）
    * clusterName  对端Kafka实例别名。（仅源端类型为Kafka时需要填写）
    * userName  对端Kafka开启SASL_SSL时设置的用户名，或者创建SASL_SSL用户时设置的用户名。（仅源端类型为Kafka且对端Kafka认证方式为“SASL_SSL”时需要填写）
    * password  对端Kafka开启SASL_SSL时设置的密码，或者创建SASL_SSL用户时设置的密码。（仅源端类型为Kafka且对端Kafka认证方式为“SASL_SSL”时需要填写）
    * saslMechanism  对端Kafka认证机制。（仅源端类型为Kafka且“认证方式”为“SASL_SSL”时需要填写）
    * instanceId  对端Kafka实例ID。（仅源端类型为Kafka时需要填写，instance_id和bootstrap_servers仅需要填写其中一个）
    * bootstrapServers  对端Kafka实例地址。（仅源端类型为Kafka时需要填写，instance_id和bootstrap_servers仅需要填写其中一个）
    * securityProtocol  对端Kafka认证方式。（仅源端类型为Kafka需要填写） 支持以下两种认证方式：   - SASL_SSL：表示实例已开启SASL_SSL。   - PLAINTEXT：表示实例未开启SASL_SSL。
    * direction  同步方向；pull为把对端Kafka实例数据复制到当前Kafka实例中，push为把当前Kafka实例数据复制到对端Kafka实例中，two-way为对两端Kafka实例数据进行双向复制。（仅源端类型为Kafka时需要填写）
    * syncConsumerOffsetsEnabled  是否同步消费进度。（仅源端类型为Kafka时需要填写）
    * replicationFactor  在对端实例中自动创建Topic时，指定Topic的副本数，此参数值不能超过对端实例的代理数。如果对端实例中设置了“default.replication.factor”，此参数的优先级高于“default.replication.factor”。（仅源端类型为Kafka时需要填写）
    * taskNum  数据复制的任务数。默认值为2，建议保持默认值。如果“同步方式”为“双向”，实际任务数=设置的任务数*2。（仅源端类型为Kafka时需要填写）
    * renameTopicEnable  是否重命名Topic，在目标Topic名称前添加源端Kafka实例的别名，形成目标Topic新的名称。（仅源端类型为Kafka时需要填写）
    * provenanceHeaderEnabled  目标Topic接收复制的消息，此消息header中包含消息来源。两端实例数据双向复制时，请开启“添加来源header”，防止循环复制。（仅源端类型为Kafka时需要填写）
    * consumerStrategy  启动偏移量，latest为获取最新的数据，earliest为获取最早的数据。（仅源端类型为Kafka时需要填写）
    * compressionType  复制消息所使用的压缩算法。（仅源端类型为Kafka时需要填写） - none - gzip - snappy - lz4 - zstd
    * topicsMapping  topic映射，用于自定义目标端Topic名称。不能同时设置“重命名Topic”和“topic映射”。topic映射请按照“源端topic:目的端topic”的格式填写，如涉及多个topic映射，请用“,”分隔开，例如：topic-sc-1:topic-sc-2,topic-sc-3:topic-sc-4。（仅源端类型为Kafka时需要填写）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'redisAddress' => 'string',
            'redisType' => 'string',
            'dcsInstanceId' => 'string',
            'redisPassword' => 'string',
            'syncMode' => 'string',
            'fullSyncWaitMs' => 'int',
            'fullSyncMaxRetry' => 'int',
            'ratelimit' => 'int',
            'currentClusterName' => 'string',
            'clusterName' => 'string',
            'userName' => 'string',
            'password' => 'string',
            'saslMechanism' => 'string',
            'instanceId' => 'string',
            'bootstrapServers' => 'string',
            'securityProtocol' => 'string',
            'direction' => 'string',
            'syncConsumerOffsetsEnabled' => 'bool',
            'replicationFactor' => 'int',
            'taskNum' => 'int',
            'renameTopicEnable' => 'bool',
            'provenanceHeaderEnabled' => 'bool',
            'consumerStrategy' => 'string',
            'compressionType' => 'string',
            'topicsMapping' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * redisAddress  Redis实例地址。（仅源端类型为Redis时需要填写）
    * redisType  Redis实例类型。（仅源端类型为Redis时需要填写）
    * dcsInstanceId  DCS实例ID。（仅源端类型为Redis时需要填写）
    * redisPassword  Redis密码。（仅源端类型为Redis时需要填写）
    * syncMode  同步类型，“RDB_ONLY”为全量同步，“CUSTOM_OFFSET”为全量同步+增量同步。（仅源端类型为Redis时需要填写）
    * fullSyncWaitMs  全量同步重试间隔时间，单位：毫秒。（仅源端类型为Redis时需要填写）
    * fullSyncMaxRetry  全量同步最大重试次数。（仅源端类型为Redis时需要填写）
    * ratelimit  限速，单位为KB/s。-1表示不限速。（仅源端类型为Redis时需要填写）
    * currentClusterName  当前Kafka实例别名。（仅源端类型为Kafka时需要填写）
    * clusterName  对端Kafka实例别名。（仅源端类型为Kafka时需要填写）
    * userName  对端Kafka开启SASL_SSL时设置的用户名，或者创建SASL_SSL用户时设置的用户名。（仅源端类型为Kafka且对端Kafka认证方式为“SASL_SSL”时需要填写）
    * password  对端Kafka开启SASL_SSL时设置的密码，或者创建SASL_SSL用户时设置的密码。（仅源端类型为Kafka且对端Kafka认证方式为“SASL_SSL”时需要填写）
    * saslMechanism  对端Kafka认证机制。（仅源端类型为Kafka且“认证方式”为“SASL_SSL”时需要填写）
    * instanceId  对端Kafka实例ID。（仅源端类型为Kafka时需要填写，instance_id和bootstrap_servers仅需要填写其中一个）
    * bootstrapServers  对端Kafka实例地址。（仅源端类型为Kafka时需要填写，instance_id和bootstrap_servers仅需要填写其中一个）
    * securityProtocol  对端Kafka认证方式。（仅源端类型为Kafka需要填写） 支持以下两种认证方式：   - SASL_SSL：表示实例已开启SASL_SSL。   - PLAINTEXT：表示实例未开启SASL_SSL。
    * direction  同步方向；pull为把对端Kafka实例数据复制到当前Kafka实例中，push为把当前Kafka实例数据复制到对端Kafka实例中，two-way为对两端Kafka实例数据进行双向复制。（仅源端类型为Kafka时需要填写）
    * syncConsumerOffsetsEnabled  是否同步消费进度。（仅源端类型为Kafka时需要填写）
    * replicationFactor  在对端实例中自动创建Topic时，指定Topic的副本数，此参数值不能超过对端实例的代理数。如果对端实例中设置了“default.replication.factor”，此参数的优先级高于“default.replication.factor”。（仅源端类型为Kafka时需要填写）
    * taskNum  数据复制的任务数。默认值为2，建议保持默认值。如果“同步方式”为“双向”，实际任务数=设置的任务数*2。（仅源端类型为Kafka时需要填写）
    * renameTopicEnable  是否重命名Topic，在目标Topic名称前添加源端Kafka实例的别名，形成目标Topic新的名称。（仅源端类型为Kafka时需要填写）
    * provenanceHeaderEnabled  目标Topic接收复制的消息，此消息header中包含消息来源。两端实例数据双向复制时，请开启“添加来源header”，防止循环复制。（仅源端类型为Kafka时需要填写）
    * consumerStrategy  启动偏移量，latest为获取最新的数据，earliest为获取最早的数据。（仅源端类型为Kafka时需要填写）
    * compressionType  复制消息所使用的压缩算法。（仅源端类型为Kafka时需要填写） - none - gzip - snappy - lz4 - zstd
    * topicsMapping  topic映射，用于自定义目标端Topic名称。不能同时设置“重命名Topic”和“topic映射”。topic映射请按照“源端topic:目的端topic”的格式填写，如涉及多个topic映射，请用“,”分隔开，例如：topic-sc-1:topic-sc-2,topic-sc-3:topic-sc-4。（仅源端类型为Kafka时需要填写）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'redisAddress' => null,
        'redisType' => null,
        'dcsInstanceId' => null,
        'redisPassword' => null,
        'syncMode' => null,
        'fullSyncWaitMs' => null,
        'fullSyncMaxRetry' => null,
        'ratelimit' => null,
        'currentClusterName' => null,
        'clusterName' => null,
        'userName' => null,
        'password' => null,
        'saslMechanism' => null,
        'instanceId' => null,
        'bootstrapServers' => null,
        'securityProtocol' => null,
        'direction' => null,
        'syncConsumerOffsetsEnabled' => null,
        'replicationFactor' => null,
        'taskNum' => null,
        'renameTopicEnable' => null,
        'provenanceHeaderEnabled' => null,
        'consumerStrategy' => null,
        'compressionType' => null,
        'topicsMapping' => null
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
    * redisAddress  Redis实例地址。（仅源端类型为Redis时需要填写）
    * redisType  Redis实例类型。（仅源端类型为Redis时需要填写）
    * dcsInstanceId  DCS实例ID。（仅源端类型为Redis时需要填写）
    * redisPassword  Redis密码。（仅源端类型为Redis时需要填写）
    * syncMode  同步类型，“RDB_ONLY”为全量同步，“CUSTOM_OFFSET”为全量同步+增量同步。（仅源端类型为Redis时需要填写）
    * fullSyncWaitMs  全量同步重试间隔时间，单位：毫秒。（仅源端类型为Redis时需要填写）
    * fullSyncMaxRetry  全量同步最大重试次数。（仅源端类型为Redis时需要填写）
    * ratelimit  限速，单位为KB/s。-1表示不限速。（仅源端类型为Redis时需要填写）
    * currentClusterName  当前Kafka实例别名。（仅源端类型为Kafka时需要填写）
    * clusterName  对端Kafka实例别名。（仅源端类型为Kafka时需要填写）
    * userName  对端Kafka开启SASL_SSL时设置的用户名，或者创建SASL_SSL用户时设置的用户名。（仅源端类型为Kafka且对端Kafka认证方式为“SASL_SSL”时需要填写）
    * password  对端Kafka开启SASL_SSL时设置的密码，或者创建SASL_SSL用户时设置的密码。（仅源端类型为Kafka且对端Kafka认证方式为“SASL_SSL”时需要填写）
    * saslMechanism  对端Kafka认证机制。（仅源端类型为Kafka且“认证方式”为“SASL_SSL”时需要填写）
    * instanceId  对端Kafka实例ID。（仅源端类型为Kafka时需要填写，instance_id和bootstrap_servers仅需要填写其中一个）
    * bootstrapServers  对端Kafka实例地址。（仅源端类型为Kafka时需要填写，instance_id和bootstrap_servers仅需要填写其中一个）
    * securityProtocol  对端Kafka认证方式。（仅源端类型为Kafka需要填写） 支持以下两种认证方式：   - SASL_SSL：表示实例已开启SASL_SSL。   - PLAINTEXT：表示实例未开启SASL_SSL。
    * direction  同步方向；pull为把对端Kafka实例数据复制到当前Kafka实例中，push为把当前Kafka实例数据复制到对端Kafka实例中，two-way为对两端Kafka实例数据进行双向复制。（仅源端类型为Kafka时需要填写）
    * syncConsumerOffsetsEnabled  是否同步消费进度。（仅源端类型为Kafka时需要填写）
    * replicationFactor  在对端实例中自动创建Topic时，指定Topic的副本数，此参数值不能超过对端实例的代理数。如果对端实例中设置了“default.replication.factor”，此参数的优先级高于“default.replication.factor”。（仅源端类型为Kafka时需要填写）
    * taskNum  数据复制的任务数。默认值为2，建议保持默认值。如果“同步方式”为“双向”，实际任务数=设置的任务数*2。（仅源端类型为Kafka时需要填写）
    * renameTopicEnable  是否重命名Topic，在目标Topic名称前添加源端Kafka实例的别名，形成目标Topic新的名称。（仅源端类型为Kafka时需要填写）
    * provenanceHeaderEnabled  目标Topic接收复制的消息，此消息header中包含消息来源。两端实例数据双向复制时，请开启“添加来源header”，防止循环复制。（仅源端类型为Kafka时需要填写）
    * consumerStrategy  启动偏移量，latest为获取最新的数据，earliest为获取最早的数据。（仅源端类型为Kafka时需要填写）
    * compressionType  复制消息所使用的压缩算法。（仅源端类型为Kafka时需要填写） - none - gzip - snappy - lz4 - zstd
    * topicsMapping  topic映射，用于自定义目标端Topic名称。不能同时设置“重命名Topic”和“topic映射”。topic映射请按照“源端topic:目的端topic”的格式填写，如涉及多个topic映射，请用“,”分隔开，例如：topic-sc-1:topic-sc-2,topic-sc-3:topic-sc-4。（仅源端类型为Kafka时需要填写）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'redisAddress' => 'redis_address',
            'redisType' => 'redis_type',
            'dcsInstanceId' => 'dcs_instance_id',
            'redisPassword' => 'redis_password',
            'syncMode' => 'sync_mode',
            'fullSyncWaitMs' => 'full_sync_wait_ms',
            'fullSyncMaxRetry' => 'full_sync_max_retry',
            'ratelimit' => 'ratelimit',
            'currentClusterName' => 'current_cluster_name',
            'clusterName' => 'cluster_name',
            'userName' => 'user_name',
            'password' => 'password',
            'saslMechanism' => 'sasl_mechanism',
            'instanceId' => 'instance_id',
            'bootstrapServers' => 'bootstrap_servers',
            'securityProtocol' => 'security_protocol',
            'direction' => 'direction',
            'syncConsumerOffsetsEnabled' => 'sync_consumer_offsets_enabled',
            'replicationFactor' => 'replication_factor',
            'taskNum' => 'task_num',
            'renameTopicEnable' => 'rename_topic_enable',
            'provenanceHeaderEnabled' => 'provenance_header_enabled',
            'consumerStrategy' => 'consumer_strategy',
            'compressionType' => 'compression_type',
            'topicsMapping' => 'topics_mapping'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * redisAddress  Redis实例地址。（仅源端类型为Redis时需要填写）
    * redisType  Redis实例类型。（仅源端类型为Redis时需要填写）
    * dcsInstanceId  DCS实例ID。（仅源端类型为Redis时需要填写）
    * redisPassword  Redis密码。（仅源端类型为Redis时需要填写）
    * syncMode  同步类型，“RDB_ONLY”为全量同步，“CUSTOM_OFFSET”为全量同步+增量同步。（仅源端类型为Redis时需要填写）
    * fullSyncWaitMs  全量同步重试间隔时间，单位：毫秒。（仅源端类型为Redis时需要填写）
    * fullSyncMaxRetry  全量同步最大重试次数。（仅源端类型为Redis时需要填写）
    * ratelimit  限速，单位为KB/s。-1表示不限速。（仅源端类型为Redis时需要填写）
    * currentClusterName  当前Kafka实例别名。（仅源端类型为Kafka时需要填写）
    * clusterName  对端Kafka实例别名。（仅源端类型为Kafka时需要填写）
    * userName  对端Kafka开启SASL_SSL时设置的用户名，或者创建SASL_SSL用户时设置的用户名。（仅源端类型为Kafka且对端Kafka认证方式为“SASL_SSL”时需要填写）
    * password  对端Kafka开启SASL_SSL时设置的密码，或者创建SASL_SSL用户时设置的密码。（仅源端类型为Kafka且对端Kafka认证方式为“SASL_SSL”时需要填写）
    * saslMechanism  对端Kafka认证机制。（仅源端类型为Kafka且“认证方式”为“SASL_SSL”时需要填写）
    * instanceId  对端Kafka实例ID。（仅源端类型为Kafka时需要填写，instance_id和bootstrap_servers仅需要填写其中一个）
    * bootstrapServers  对端Kafka实例地址。（仅源端类型为Kafka时需要填写，instance_id和bootstrap_servers仅需要填写其中一个）
    * securityProtocol  对端Kafka认证方式。（仅源端类型为Kafka需要填写） 支持以下两种认证方式：   - SASL_SSL：表示实例已开启SASL_SSL。   - PLAINTEXT：表示实例未开启SASL_SSL。
    * direction  同步方向；pull为把对端Kafka实例数据复制到当前Kafka实例中，push为把当前Kafka实例数据复制到对端Kafka实例中，two-way为对两端Kafka实例数据进行双向复制。（仅源端类型为Kafka时需要填写）
    * syncConsumerOffsetsEnabled  是否同步消费进度。（仅源端类型为Kafka时需要填写）
    * replicationFactor  在对端实例中自动创建Topic时，指定Topic的副本数，此参数值不能超过对端实例的代理数。如果对端实例中设置了“default.replication.factor”，此参数的优先级高于“default.replication.factor”。（仅源端类型为Kafka时需要填写）
    * taskNum  数据复制的任务数。默认值为2，建议保持默认值。如果“同步方式”为“双向”，实际任务数=设置的任务数*2。（仅源端类型为Kafka时需要填写）
    * renameTopicEnable  是否重命名Topic，在目标Topic名称前添加源端Kafka实例的别名，形成目标Topic新的名称。（仅源端类型为Kafka时需要填写）
    * provenanceHeaderEnabled  目标Topic接收复制的消息，此消息header中包含消息来源。两端实例数据双向复制时，请开启“添加来源header”，防止循环复制。（仅源端类型为Kafka时需要填写）
    * consumerStrategy  启动偏移量，latest为获取最新的数据，earliest为获取最早的数据。（仅源端类型为Kafka时需要填写）
    * compressionType  复制消息所使用的压缩算法。（仅源端类型为Kafka时需要填写） - none - gzip - snappy - lz4 - zstd
    * topicsMapping  topic映射，用于自定义目标端Topic名称。不能同时设置“重命名Topic”和“topic映射”。topic映射请按照“源端topic:目的端topic”的格式填写，如涉及多个topic映射，请用“,”分隔开，例如：topic-sc-1:topic-sc-2,topic-sc-3:topic-sc-4。（仅源端类型为Kafka时需要填写）
    *
    * @var string[]
    */
    protected static $setters = [
            'redisAddress' => 'setRedisAddress',
            'redisType' => 'setRedisType',
            'dcsInstanceId' => 'setDcsInstanceId',
            'redisPassword' => 'setRedisPassword',
            'syncMode' => 'setSyncMode',
            'fullSyncWaitMs' => 'setFullSyncWaitMs',
            'fullSyncMaxRetry' => 'setFullSyncMaxRetry',
            'ratelimit' => 'setRatelimit',
            'currentClusterName' => 'setCurrentClusterName',
            'clusterName' => 'setClusterName',
            'userName' => 'setUserName',
            'password' => 'setPassword',
            'saslMechanism' => 'setSaslMechanism',
            'instanceId' => 'setInstanceId',
            'bootstrapServers' => 'setBootstrapServers',
            'securityProtocol' => 'setSecurityProtocol',
            'direction' => 'setDirection',
            'syncConsumerOffsetsEnabled' => 'setSyncConsumerOffsetsEnabled',
            'replicationFactor' => 'setReplicationFactor',
            'taskNum' => 'setTaskNum',
            'renameTopicEnable' => 'setRenameTopicEnable',
            'provenanceHeaderEnabled' => 'setProvenanceHeaderEnabled',
            'consumerStrategy' => 'setConsumerStrategy',
            'compressionType' => 'setCompressionType',
            'topicsMapping' => 'setTopicsMapping'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * redisAddress  Redis实例地址。（仅源端类型为Redis时需要填写）
    * redisType  Redis实例类型。（仅源端类型为Redis时需要填写）
    * dcsInstanceId  DCS实例ID。（仅源端类型为Redis时需要填写）
    * redisPassword  Redis密码。（仅源端类型为Redis时需要填写）
    * syncMode  同步类型，“RDB_ONLY”为全量同步，“CUSTOM_OFFSET”为全量同步+增量同步。（仅源端类型为Redis时需要填写）
    * fullSyncWaitMs  全量同步重试间隔时间，单位：毫秒。（仅源端类型为Redis时需要填写）
    * fullSyncMaxRetry  全量同步最大重试次数。（仅源端类型为Redis时需要填写）
    * ratelimit  限速，单位为KB/s。-1表示不限速。（仅源端类型为Redis时需要填写）
    * currentClusterName  当前Kafka实例别名。（仅源端类型为Kafka时需要填写）
    * clusterName  对端Kafka实例别名。（仅源端类型为Kafka时需要填写）
    * userName  对端Kafka开启SASL_SSL时设置的用户名，或者创建SASL_SSL用户时设置的用户名。（仅源端类型为Kafka且对端Kafka认证方式为“SASL_SSL”时需要填写）
    * password  对端Kafka开启SASL_SSL时设置的密码，或者创建SASL_SSL用户时设置的密码。（仅源端类型为Kafka且对端Kafka认证方式为“SASL_SSL”时需要填写）
    * saslMechanism  对端Kafka认证机制。（仅源端类型为Kafka且“认证方式”为“SASL_SSL”时需要填写）
    * instanceId  对端Kafka实例ID。（仅源端类型为Kafka时需要填写，instance_id和bootstrap_servers仅需要填写其中一个）
    * bootstrapServers  对端Kafka实例地址。（仅源端类型为Kafka时需要填写，instance_id和bootstrap_servers仅需要填写其中一个）
    * securityProtocol  对端Kafka认证方式。（仅源端类型为Kafka需要填写） 支持以下两种认证方式：   - SASL_SSL：表示实例已开启SASL_SSL。   - PLAINTEXT：表示实例未开启SASL_SSL。
    * direction  同步方向；pull为把对端Kafka实例数据复制到当前Kafka实例中，push为把当前Kafka实例数据复制到对端Kafka实例中，two-way为对两端Kafka实例数据进行双向复制。（仅源端类型为Kafka时需要填写）
    * syncConsumerOffsetsEnabled  是否同步消费进度。（仅源端类型为Kafka时需要填写）
    * replicationFactor  在对端实例中自动创建Topic时，指定Topic的副本数，此参数值不能超过对端实例的代理数。如果对端实例中设置了“default.replication.factor”，此参数的优先级高于“default.replication.factor”。（仅源端类型为Kafka时需要填写）
    * taskNum  数据复制的任务数。默认值为2，建议保持默认值。如果“同步方式”为“双向”，实际任务数=设置的任务数*2。（仅源端类型为Kafka时需要填写）
    * renameTopicEnable  是否重命名Topic，在目标Topic名称前添加源端Kafka实例的别名，形成目标Topic新的名称。（仅源端类型为Kafka时需要填写）
    * provenanceHeaderEnabled  目标Topic接收复制的消息，此消息header中包含消息来源。两端实例数据双向复制时，请开启“添加来源header”，防止循环复制。（仅源端类型为Kafka时需要填写）
    * consumerStrategy  启动偏移量，latest为获取最新的数据，earliest为获取最早的数据。（仅源端类型为Kafka时需要填写）
    * compressionType  复制消息所使用的压缩算法。（仅源端类型为Kafka时需要填写） - none - gzip - snappy - lz4 - zstd
    * topicsMapping  topic映射，用于自定义目标端Topic名称。不能同时设置“重命名Topic”和“topic映射”。topic映射请按照“源端topic:目的端topic”的格式填写，如涉及多个topic映射，请用“,”分隔开，例如：topic-sc-1:topic-sc-2,topic-sc-3:topic-sc-4。（仅源端类型为Kafka时需要填写）
    *
    * @var string[]
    */
    protected static $getters = [
            'redisAddress' => 'getRedisAddress',
            'redisType' => 'getRedisType',
            'dcsInstanceId' => 'getDcsInstanceId',
            'redisPassword' => 'getRedisPassword',
            'syncMode' => 'getSyncMode',
            'fullSyncWaitMs' => 'getFullSyncWaitMs',
            'fullSyncMaxRetry' => 'getFullSyncMaxRetry',
            'ratelimit' => 'getRatelimit',
            'currentClusterName' => 'getCurrentClusterName',
            'clusterName' => 'getClusterName',
            'userName' => 'getUserName',
            'password' => 'getPassword',
            'saslMechanism' => 'getSaslMechanism',
            'instanceId' => 'getInstanceId',
            'bootstrapServers' => 'getBootstrapServers',
            'securityProtocol' => 'getSecurityProtocol',
            'direction' => 'getDirection',
            'syncConsumerOffsetsEnabled' => 'getSyncConsumerOffsetsEnabled',
            'replicationFactor' => 'getReplicationFactor',
            'taskNum' => 'getTaskNum',
            'renameTopicEnable' => 'getRenameTopicEnable',
            'provenanceHeaderEnabled' => 'getProvenanceHeaderEnabled',
            'consumerStrategy' => 'getConsumerStrategy',
            'compressionType' => 'getCompressionType',
            'topicsMapping' => 'getTopicsMapping'
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
        $this->container['redisAddress'] = isset($data['redisAddress']) ? $data['redisAddress'] : null;
        $this->container['redisType'] = isset($data['redisType']) ? $data['redisType'] : null;
        $this->container['dcsInstanceId'] = isset($data['dcsInstanceId']) ? $data['dcsInstanceId'] : null;
        $this->container['redisPassword'] = isset($data['redisPassword']) ? $data['redisPassword'] : null;
        $this->container['syncMode'] = isset($data['syncMode']) ? $data['syncMode'] : null;
        $this->container['fullSyncWaitMs'] = isset($data['fullSyncWaitMs']) ? $data['fullSyncWaitMs'] : null;
        $this->container['fullSyncMaxRetry'] = isset($data['fullSyncMaxRetry']) ? $data['fullSyncMaxRetry'] : null;
        $this->container['ratelimit'] = isset($data['ratelimit']) ? $data['ratelimit'] : null;
        $this->container['currentClusterName'] = isset($data['currentClusterName']) ? $data['currentClusterName'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['saslMechanism'] = isset($data['saslMechanism']) ? $data['saslMechanism'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['bootstrapServers'] = isset($data['bootstrapServers']) ? $data['bootstrapServers'] : null;
        $this->container['securityProtocol'] = isset($data['securityProtocol']) ? $data['securityProtocol'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['syncConsumerOffsetsEnabled'] = isset($data['syncConsumerOffsetsEnabled']) ? $data['syncConsumerOffsetsEnabled'] : null;
        $this->container['replicationFactor'] = isset($data['replicationFactor']) ? $data['replicationFactor'] : null;
        $this->container['taskNum'] = isset($data['taskNum']) ? $data['taskNum'] : null;
        $this->container['renameTopicEnable'] = isset($data['renameTopicEnable']) ? $data['renameTopicEnable'] : null;
        $this->container['provenanceHeaderEnabled'] = isset($data['provenanceHeaderEnabled']) ? $data['provenanceHeaderEnabled'] : null;
        $this->container['consumerStrategy'] = isset($data['consumerStrategy']) ? $data['consumerStrategy'] : null;
        $this->container['compressionType'] = isset($data['compressionType']) ? $data['compressionType'] : null;
        $this->container['topicsMapping'] = isset($data['topicsMapping']) ? $data['topicsMapping'] : null;
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
    * Gets redisAddress
    *  Redis实例地址。（仅源端类型为Redis时需要填写）
    *
    * @return string|null
    */
    public function getRedisAddress()
    {
        return $this->container['redisAddress'];
    }

    /**
    * Sets redisAddress
    *
    * @param string|null $redisAddress Redis实例地址。（仅源端类型为Redis时需要填写）
    *
    * @return $this
    */
    public function setRedisAddress($redisAddress)
    {
        $this->container['redisAddress'] = $redisAddress;
        return $this;
    }

    /**
    * Gets redisType
    *  Redis实例类型。（仅源端类型为Redis时需要填写）
    *
    * @return string|null
    */
    public function getRedisType()
    {
        return $this->container['redisType'];
    }

    /**
    * Sets redisType
    *
    * @param string|null $redisType Redis实例类型。（仅源端类型为Redis时需要填写）
    *
    * @return $this
    */
    public function setRedisType($redisType)
    {
        $this->container['redisType'] = $redisType;
        return $this;
    }

    /**
    * Gets dcsInstanceId
    *  DCS实例ID。（仅源端类型为Redis时需要填写）
    *
    * @return string|null
    */
    public function getDcsInstanceId()
    {
        return $this->container['dcsInstanceId'];
    }

    /**
    * Sets dcsInstanceId
    *
    * @param string|null $dcsInstanceId DCS实例ID。（仅源端类型为Redis时需要填写）
    *
    * @return $this
    */
    public function setDcsInstanceId($dcsInstanceId)
    {
        $this->container['dcsInstanceId'] = $dcsInstanceId;
        return $this;
    }

    /**
    * Gets redisPassword
    *  Redis密码。（仅源端类型为Redis时需要填写）
    *
    * @return string|null
    */
    public function getRedisPassword()
    {
        return $this->container['redisPassword'];
    }

    /**
    * Sets redisPassword
    *
    * @param string|null $redisPassword Redis密码。（仅源端类型为Redis时需要填写）
    *
    * @return $this
    */
    public function setRedisPassword($redisPassword)
    {
        $this->container['redisPassword'] = $redisPassword;
        return $this;
    }

    /**
    * Gets syncMode
    *  同步类型，“RDB_ONLY”为全量同步，“CUSTOM_OFFSET”为全量同步+增量同步。（仅源端类型为Redis时需要填写）
    *
    * @return string|null
    */
    public function getSyncMode()
    {
        return $this->container['syncMode'];
    }

    /**
    * Sets syncMode
    *
    * @param string|null $syncMode 同步类型，“RDB_ONLY”为全量同步，“CUSTOM_OFFSET”为全量同步+增量同步。（仅源端类型为Redis时需要填写）
    *
    * @return $this
    */
    public function setSyncMode($syncMode)
    {
        $this->container['syncMode'] = $syncMode;
        return $this;
    }

    /**
    * Gets fullSyncWaitMs
    *  全量同步重试间隔时间，单位：毫秒。（仅源端类型为Redis时需要填写）
    *
    * @return int|null
    */
    public function getFullSyncWaitMs()
    {
        return $this->container['fullSyncWaitMs'];
    }

    /**
    * Sets fullSyncWaitMs
    *
    * @param int|null $fullSyncWaitMs 全量同步重试间隔时间，单位：毫秒。（仅源端类型为Redis时需要填写）
    *
    * @return $this
    */
    public function setFullSyncWaitMs($fullSyncWaitMs)
    {
        $this->container['fullSyncWaitMs'] = $fullSyncWaitMs;
        return $this;
    }

    /**
    * Gets fullSyncMaxRetry
    *  全量同步最大重试次数。（仅源端类型为Redis时需要填写）
    *
    * @return int|null
    */
    public function getFullSyncMaxRetry()
    {
        return $this->container['fullSyncMaxRetry'];
    }

    /**
    * Sets fullSyncMaxRetry
    *
    * @param int|null $fullSyncMaxRetry 全量同步最大重试次数。（仅源端类型为Redis时需要填写）
    *
    * @return $this
    */
    public function setFullSyncMaxRetry($fullSyncMaxRetry)
    {
        $this->container['fullSyncMaxRetry'] = $fullSyncMaxRetry;
        return $this;
    }

    /**
    * Gets ratelimit
    *  限速，单位为KB/s。-1表示不限速。（仅源端类型为Redis时需要填写）
    *
    * @return int|null
    */
    public function getRatelimit()
    {
        return $this->container['ratelimit'];
    }

    /**
    * Sets ratelimit
    *
    * @param int|null $ratelimit 限速，单位为KB/s。-1表示不限速。（仅源端类型为Redis时需要填写）
    *
    * @return $this
    */
    public function setRatelimit($ratelimit)
    {
        $this->container['ratelimit'] = $ratelimit;
        return $this;
    }

    /**
    * Gets currentClusterName
    *  当前Kafka实例别名。（仅源端类型为Kafka时需要填写）
    *
    * @return string|null
    */
    public function getCurrentClusterName()
    {
        return $this->container['currentClusterName'];
    }

    /**
    * Sets currentClusterName
    *
    * @param string|null $currentClusterName 当前Kafka实例别名。（仅源端类型为Kafka时需要填写）
    *
    * @return $this
    */
    public function setCurrentClusterName($currentClusterName)
    {
        $this->container['currentClusterName'] = $currentClusterName;
        return $this;
    }

    /**
    * Gets clusterName
    *  对端Kafka实例别名。（仅源端类型为Kafka时需要填写）
    *
    * @return string|null
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string|null $clusterName 对端Kafka实例别名。（仅源端类型为Kafka时需要填写）
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets userName
    *  对端Kafka开启SASL_SSL时设置的用户名，或者创建SASL_SSL用户时设置的用户名。（仅源端类型为Kafka且对端Kafka认证方式为“SASL_SSL”时需要填写）
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
    * @param string|null $userName 对端Kafka开启SASL_SSL时设置的用户名，或者创建SASL_SSL用户时设置的用户名。（仅源端类型为Kafka且对端Kafka认证方式为“SASL_SSL”时需要填写）
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets password
    *  对端Kafka开启SASL_SSL时设置的密码，或者创建SASL_SSL用户时设置的密码。（仅源端类型为Kafka且对端Kafka认证方式为“SASL_SSL”时需要填写）
    *
    * @return string|null
    */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
    * Sets password
    *
    * @param string|null $password 对端Kafka开启SASL_SSL时设置的密码，或者创建SASL_SSL用户时设置的密码。（仅源端类型为Kafka且对端Kafka认证方式为“SASL_SSL”时需要填写）
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets saslMechanism
    *  对端Kafka认证机制。（仅源端类型为Kafka且“认证方式”为“SASL_SSL”时需要填写）
    *
    * @return string|null
    */
    public function getSaslMechanism()
    {
        return $this->container['saslMechanism'];
    }

    /**
    * Sets saslMechanism
    *
    * @param string|null $saslMechanism 对端Kafka认证机制。（仅源端类型为Kafka且“认证方式”为“SASL_SSL”时需要填写）
    *
    * @return $this
    */
    public function setSaslMechanism($saslMechanism)
    {
        $this->container['saslMechanism'] = $saslMechanism;
        return $this;
    }

    /**
    * Gets instanceId
    *  对端Kafka实例ID。（仅源端类型为Kafka时需要填写，instance_id和bootstrap_servers仅需要填写其中一个）
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
    * @param string|null $instanceId 对端Kafka实例ID。（仅源端类型为Kafka时需要填写，instance_id和bootstrap_servers仅需要填写其中一个）
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets bootstrapServers
    *  对端Kafka实例地址。（仅源端类型为Kafka时需要填写，instance_id和bootstrap_servers仅需要填写其中一个）
    *
    * @return string|null
    */
    public function getBootstrapServers()
    {
        return $this->container['bootstrapServers'];
    }

    /**
    * Sets bootstrapServers
    *
    * @param string|null $bootstrapServers 对端Kafka实例地址。（仅源端类型为Kafka时需要填写，instance_id和bootstrap_servers仅需要填写其中一个）
    *
    * @return $this
    */
    public function setBootstrapServers($bootstrapServers)
    {
        $this->container['bootstrapServers'] = $bootstrapServers;
        return $this;
    }

    /**
    * Gets securityProtocol
    *  对端Kafka认证方式。（仅源端类型为Kafka需要填写） 支持以下两种认证方式：   - SASL_SSL：表示实例已开启SASL_SSL。   - PLAINTEXT：表示实例未开启SASL_SSL。
    *
    * @return string|null
    */
    public function getSecurityProtocol()
    {
        return $this->container['securityProtocol'];
    }

    /**
    * Sets securityProtocol
    *
    * @param string|null $securityProtocol 对端Kafka认证方式。（仅源端类型为Kafka需要填写） 支持以下两种认证方式：   - SASL_SSL：表示实例已开启SASL_SSL。   - PLAINTEXT：表示实例未开启SASL_SSL。
    *
    * @return $this
    */
    public function setSecurityProtocol($securityProtocol)
    {
        $this->container['securityProtocol'] = $securityProtocol;
        return $this;
    }

    /**
    * Gets direction
    *  同步方向；pull为把对端Kafka实例数据复制到当前Kafka实例中，push为把当前Kafka实例数据复制到对端Kafka实例中，two-way为对两端Kafka实例数据进行双向复制。（仅源端类型为Kafka时需要填写）
    *
    * @return string|null
    */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
    * Sets direction
    *
    * @param string|null $direction 同步方向；pull为把对端Kafka实例数据复制到当前Kafka实例中，push为把当前Kafka实例数据复制到对端Kafka实例中，two-way为对两端Kafka实例数据进行双向复制。（仅源端类型为Kafka时需要填写）
    *
    * @return $this
    */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;
        return $this;
    }

    /**
    * Gets syncConsumerOffsetsEnabled
    *  是否同步消费进度。（仅源端类型为Kafka时需要填写）
    *
    * @return bool|null
    */
    public function getSyncConsumerOffsetsEnabled()
    {
        return $this->container['syncConsumerOffsetsEnabled'];
    }

    /**
    * Sets syncConsumerOffsetsEnabled
    *
    * @param bool|null $syncConsumerOffsetsEnabled 是否同步消费进度。（仅源端类型为Kafka时需要填写）
    *
    * @return $this
    */
    public function setSyncConsumerOffsetsEnabled($syncConsumerOffsetsEnabled)
    {
        $this->container['syncConsumerOffsetsEnabled'] = $syncConsumerOffsetsEnabled;
        return $this;
    }

    /**
    * Gets replicationFactor
    *  在对端实例中自动创建Topic时，指定Topic的副本数，此参数值不能超过对端实例的代理数。如果对端实例中设置了“default.replication.factor”，此参数的优先级高于“default.replication.factor”。（仅源端类型为Kafka时需要填写）
    *
    * @return int|null
    */
    public function getReplicationFactor()
    {
        return $this->container['replicationFactor'];
    }

    /**
    * Sets replicationFactor
    *
    * @param int|null $replicationFactor 在对端实例中自动创建Topic时，指定Topic的副本数，此参数值不能超过对端实例的代理数。如果对端实例中设置了“default.replication.factor”，此参数的优先级高于“default.replication.factor”。（仅源端类型为Kafka时需要填写）
    *
    * @return $this
    */
    public function setReplicationFactor($replicationFactor)
    {
        $this->container['replicationFactor'] = $replicationFactor;
        return $this;
    }

    /**
    * Gets taskNum
    *  数据复制的任务数。默认值为2，建议保持默认值。如果“同步方式”为“双向”，实际任务数=设置的任务数*2。（仅源端类型为Kafka时需要填写）
    *
    * @return int|null
    */
    public function getTaskNum()
    {
        return $this->container['taskNum'];
    }

    /**
    * Sets taskNum
    *
    * @param int|null $taskNum 数据复制的任务数。默认值为2，建议保持默认值。如果“同步方式”为“双向”，实际任务数=设置的任务数*2。（仅源端类型为Kafka时需要填写）
    *
    * @return $this
    */
    public function setTaskNum($taskNum)
    {
        $this->container['taskNum'] = $taskNum;
        return $this;
    }

    /**
    * Gets renameTopicEnable
    *  是否重命名Topic，在目标Topic名称前添加源端Kafka实例的别名，形成目标Topic新的名称。（仅源端类型为Kafka时需要填写）
    *
    * @return bool|null
    */
    public function getRenameTopicEnable()
    {
        return $this->container['renameTopicEnable'];
    }

    /**
    * Sets renameTopicEnable
    *
    * @param bool|null $renameTopicEnable 是否重命名Topic，在目标Topic名称前添加源端Kafka实例的别名，形成目标Topic新的名称。（仅源端类型为Kafka时需要填写）
    *
    * @return $this
    */
    public function setRenameTopicEnable($renameTopicEnable)
    {
        $this->container['renameTopicEnable'] = $renameTopicEnable;
        return $this;
    }

    /**
    * Gets provenanceHeaderEnabled
    *  目标Topic接收复制的消息，此消息header中包含消息来源。两端实例数据双向复制时，请开启“添加来源header”，防止循环复制。（仅源端类型为Kafka时需要填写）
    *
    * @return bool|null
    */
    public function getProvenanceHeaderEnabled()
    {
        return $this->container['provenanceHeaderEnabled'];
    }

    /**
    * Sets provenanceHeaderEnabled
    *
    * @param bool|null $provenanceHeaderEnabled 目标Topic接收复制的消息，此消息header中包含消息来源。两端实例数据双向复制时，请开启“添加来源header”，防止循环复制。（仅源端类型为Kafka时需要填写）
    *
    * @return $this
    */
    public function setProvenanceHeaderEnabled($provenanceHeaderEnabled)
    {
        $this->container['provenanceHeaderEnabled'] = $provenanceHeaderEnabled;
        return $this;
    }

    /**
    * Gets consumerStrategy
    *  启动偏移量，latest为获取最新的数据，earliest为获取最早的数据。（仅源端类型为Kafka时需要填写）
    *
    * @return string|null
    */
    public function getConsumerStrategy()
    {
        return $this->container['consumerStrategy'];
    }

    /**
    * Sets consumerStrategy
    *
    * @param string|null $consumerStrategy 启动偏移量，latest为获取最新的数据，earliest为获取最早的数据。（仅源端类型为Kafka时需要填写）
    *
    * @return $this
    */
    public function setConsumerStrategy($consumerStrategy)
    {
        $this->container['consumerStrategy'] = $consumerStrategy;
        return $this;
    }

    /**
    * Gets compressionType
    *  复制消息所使用的压缩算法。（仅源端类型为Kafka时需要填写） - none - gzip - snappy - lz4 - zstd
    *
    * @return string|null
    */
    public function getCompressionType()
    {
        return $this->container['compressionType'];
    }

    /**
    * Sets compressionType
    *
    * @param string|null $compressionType 复制消息所使用的压缩算法。（仅源端类型为Kafka时需要填写） - none - gzip - snappy - lz4 - zstd
    *
    * @return $this
    */
    public function setCompressionType($compressionType)
    {
        $this->container['compressionType'] = $compressionType;
        return $this;
    }

    /**
    * Gets topicsMapping
    *  topic映射，用于自定义目标端Topic名称。不能同时设置“重命名Topic”和“topic映射”。topic映射请按照“源端topic:目的端topic”的格式填写，如涉及多个topic映射，请用“,”分隔开，例如：topic-sc-1:topic-sc-2,topic-sc-3:topic-sc-4。（仅源端类型为Kafka时需要填写）
    *
    * @return string|null
    */
    public function getTopicsMapping()
    {
        return $this->container['topicsMapping'];
    }

    /**
    * Sets topicsMapping
    *
    * @param string|null $topicsMapping topic映射，用于自定义目标端Topic名称。不能同时设置“重命名Topic”和“topic映射”。topic映射请按照“源端topic:目的端topic”的格式填写，如涉及多个topic映射，请用“,”分隔开，例如：topic-sc-1:topic-sc-2,topic-sc-3:topic-sc-4。（仅源端类型为Kafka时需要填写）
    *
    * @return $this
    */
    public function setTopicsMapping($topicsMapping)
    {
        $this->container['topicsMapping'] = $topicsMapping;
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

