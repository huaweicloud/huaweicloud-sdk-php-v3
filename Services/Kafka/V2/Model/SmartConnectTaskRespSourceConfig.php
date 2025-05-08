<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SmartConnectTaskRespSourceConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SmartConnectTaskRespSourceConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * currentClusterName  当前Kafka实例别名。（仅源端类型为Kafka时会显示）
    * clusterName  对端Kafka实例别名。（仅源端类型为Kafka时会显示）
    * userName  对端Kafka用户名。（仅源端类型为Kafka时会显示）
    * saslMechanism  对端Kafka认证机制。（仅源端类型为Kafka时会显示）
    * instanceId  对端Kafka实例ID。（仅源端类型为Kafka时会显示）
    * bootstrapServers  对端Kafka实例地址。（仅源端类型为Kafka时会显示）
    * securityProtocol  对端Kafka认证方式。（仅源端类型为Kafka时会显示）
    * direction  同步方向。（仅源端类型为Kafka时会显示）
    * syncConsumerOffsetsEnabled  是否同步消费进度。（仅源端类型为Kafka时会显示）
    * replicationFactor  副本数。（仅源端类型为Kafka时会显示）
    * taskNum  任务数。（仅源端类型为Kafka时会显示）
    * renameTopicEnabled  是否重命名Topic。（仅源端类型为Kafka时会显示）
    * provenanceHeaderEnabled  是否添加来源header。（仅源端类型为Kafka时会显示）
    * consumerStrategy  启动偏移量，latest为获取最新的数据，earliest为获取最早的数据。（仅源端类型为Kafka时会显示）
    * compressionType  压缩算法。（仅源端类型为Kafka时会显示）
    * topicsMapping  topic映射。（仅源端类型为Kafka时会显示）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'currentClusterName' => 'string',
            'clusterName' => 'string',
            'userName' => 'string',
            'saslMechanism' => 'string',
            'instanceId' => 'string',
            'bootstrapServers' => 'string',
            'securityProtocol' => 'string',
            'direction' => 'string',
            'syncConsumerOffsetsEnabled' => 'bool',
            'replicationFactor' => 'int',
            'taskNum' => 'int',
            'renameTopicEnabled' => 'bool',
            'provenanceHeaderEnabled' => 'bool',
            'consumerStrategy' => 'string',
            'compressionType' => 'string',
            'topicsMapping' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * currentClusterName  当前Kafka实例别名。（仅源端类型为Kafka时会显示）
    * clusterName  对端Kafka实例别名。（仅源端类型为Kafka时会显示）
    * userName  对端Kafka用户名。（仅源端类型为Kafka时会显示）
    * saslMechanism  对端Kafka认证机制。（仅源端类型为Kafka时会显示）
    * instanceId  对端Kafka实例ID。（仅源端类型为Kafka时会显示）
    * bootstrapServers  对端Kafka实例地址。（仅源端类型为Kafka时会显示）
    * securityProtocol  对端Kafka认证方式。（仅源端类型为Kafka时会显示）
    * direction  同步方向。（仅源端类型为Kafka时会显示）
    * syncConsumerOffsetsEnabled  是否同步消费进度。（仅源端类型为Kafka时会显示）
    * replicationFactor  副本数。（仅源端类型为Kafka时会显示）
    * taskNum  任务数。（仅源端类型为Kafka时会显示）
    * renameTopicEnabled  是否重命名Topic。（仅源端类型为Kafka时会显示）
    * provenanceHeaderEnabled  是否添加来源header。（仅源端类型为Kafka时会显示）
    * consumerStrategy  启动偏移量，latest为获取最新的数据，earliest为获取最早的数据。（仅源端类型为Kafka时会显示）
    * compressionType  压缩算法。（仅源端类型为Kafka时会显示）
    * topicsMapping  topic映射。（仅源端类型为Kafka时会显示）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'currentClusterName' => null,
        'clusterName' => null,
        'userName' => null,
        'saslMechanism' => null,
        'instanceId' => null,
        'bootstrapServers' => null,
        'securityProtocol' => null,
        'direction' => null,
        'syncConsumerOffsetsEnabled' => null,
        'replicationFactor' => 'int32',
        'taskNum' => 'int32',
        'renameTopicEnabled' => null,
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
    * currentClusterName  当前Kafka实例别名。（仅源端类型为Kafka时会显示）
    * clusterName  对端Kafka实例别名。（仅源端类型为Kafka时会显示）
    * userName  对端Kafka用户名。（仅源端类型为Kafka时会显示）
    * saslMechanism  对端Kafka认证机制。（仅源端类型为Kafka时会显示）
    * instanceId  对端Kafka实例ID。（仅源端类型为Kafka时会显示）
    * bootstrapServers  对端Kafka实例地址。（仅源端类型为Kafka时会显示）
    * securityProtocol  对端Kafka认证方式。（仅源端类型为Kafka时会显示）
    * direction  同步方向。（仅源端类型为Kafka时会显示）
    * syncConsumerOffsetsEnabled  是否同步消费进度。（仅源端类型为Kafka时会显示）
    * replicationFactor  副本数。（仅源端类型为Kafka时会显示）
    * taskNum  任务数。（仅源端类型为Kafka时会显示）
    * renameTopicEnabled  是否重命名Topic。（仅源端类型为Kafka时会显示）
    * provenanceHeaderEnabled  是否添加来源header。（仅源端类型为Kafka时会显示）
    * consumerStrategy  启动偏移量，latest为获取最新的数据，earliest为获取最早的数据。（仅源端类型为Kafka时会显示）
    * compressionType  压缩算法。（仅源端类型为Kafka时会显示）
    * topicsMapping  topic映射。（仅源端类型为Kafka时会显示）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'currentClusterName' => 'current_cluster_name',
            'clusterName' => 'cluster_name',
            'userName' => 'user_name',
            'saslMechanism' => 'sasl_mechanism',
            'instanceId' => 'instance_id',
            'bootstrapServers' => 'bootstrap_servers',
            'securityProtocol' => 'security_protocol',
            'direction' => 'direction',
            'syncConsumerOffsetsEnabled' => 'sync_consumer_offsets_enabled',
            'replicationFactor' => 'replication_factor',
            'taskNum' => 'task_num',
            'renameTopicEnabled' => 'rename_topic_enabled',
            'provenanceHeaderEnabled' => 'provenance_header_enabled',
            'consumerStrategy' => 'consumer_strategy',
            'compressionType' => 'compression_type',
            'topicsMapping' => 'topics_mapping'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * currentClusterName  当前Kafka实例别名。（仅源端类型为Kafka时会显示）
    * clusterName  对端Kafka实例别名。（仅源端类型为Kafka时会显示）
    * userName  对端Kafka用户名。（仅源端类型为Kafka时会显示）
    * saslMechanism  对端Kafka认证机制。（仅源端类型为Kafka时会显示）
    * instanceId  对端Kafka实例ID。（仅源端类型为Kafka时会显示）
    * bootstrapServers  对端Kafka实例地址。（仅源端类型为Kafka时会显示）
    * securityProtocol  对端Kafka认证方式。（仅源端类型为Kafka时会显示）
    * direction  同步方向。（仅源端类型为Kafka时会显示）
    * syncConsumerOffsetsEnabled  是否同步消费进度。（仅源端类型为Kafka时会显示）
    * replicationFactor  副本数。（仅源端类型为Kafka时会显示）
    * taskNum  任务数。（仅源端类型为Kafka时会显示）
    * renameTopicEnabled  是否重命名Topic。（仅源端类型为Kafka时会显示）
    * provenanceHeaderEnabled  是否添加来源header。（仅源端类型为Kafka时会显示）
    * consumerStrategy  启动偏移量，latest为获取最新的数据，earliest为获取最早的数据。（仅源端类型为Kafka时会显示）
    * compressionType  压缩算法。（仅源端类型为Kafka时会显示）
    * topicsMapping  topic映射。（仅源端类型为Kafka时会显示）
    *
    * @var string[]
    */
    protected static $setters = [
            'currentClusterName' => 'setCurrentClusterName',
            'clusterName' => 'setClusterName',
            'userName' => 'setUserName',
            'saslMechanism' => 'setSaslMechanism',
            'instanceId' => 'setInstanceId',
            'bootstrapServers' => 'setBootstrapServers',
            'securityProtocol' => 'setSecurityProtocol',
            'direction' => 'setDirection',
            'syncConsumerOffsetsEnabled' => 'setSyncConsumerOffsetsEnabled',
            'replicationFactor' => 'setReplicationFactor',
            'taskNum' => 'setTaskNum',
            'renameTopicEnabled' => 'setRenameTopicEnabled',
            'provenanceHeaderEnabled' => 'setProvenanceHeaderEnabled',
            'consumerStrategy' => 'setConsumerStrategy',
            'compressionType' => 'setCompressionType',
            'topicsMapping' => 'setTopicsMapping'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * currentClusterName  当前Kafka实例别名。（仅源端类型为Kafka时会显示）
    * clusterName  对端Kafka实例别名。（仅源端类型为Kafka时会显示）
    * userName  对端Kafka用户名。（仅源端类型为Kafka时会显示）
    * saslMechanism  对端Kafka认证机制。（仅源端类型为Kafka时会显示）
    * instanceId  对端Kafka实例ID。（仅源端类型为Kafka时会显示）
    * bootstrapServers  对端Kafka实例地址。（仅源端类型为Kafka时会显示）
    * securityProtocol  对端Kafka认证方式。（仅源端类型为Kafka时会显示）
    * direction  同步方向。（仅源端类型为Kafka时会显示）
    * syncConsumerOffsetsEnabled  是否同步消费进度。（仅源端类型为Kafka时会显示）
    * replicationFactor  副本数。（仅源端类型为Kafka时会显示）
    * taskNum  任务数。（仅源端类型为Kafka时会显示）
    * renameTopicEnabled  是否重命名Topic。（仅源端类型为Kafka时会显示）
    * provenanceHeaderEnabled  是否添加来源header。（仅源端类型为Kafka时会显示）
    * consumerStrategy  启动偏移量，latest为获取最新的数据，earliest为获取最早的数据。（仅源端类型为Kafka时会显示）
    * compressionType  压缩算法。（仅源端类型为Kafka时会显示）
    * topicsMapping  topic映射。（仅源端类型为Kafka时会显示）
    *
    * @var string[]
    */
    protected static $getters = [
            'currentClusterName' => 'getCurrentClusterName',
            'clusterName' => 'getClusterName',
            'userName' => 'getUserName',
            'saslMechanism' => 'getSaslMechanism',
            'instanceId' => 'getInstanceId',
            'bootstrapServers' => 'getBootstrapServers',
            'securityProtocol' => 'getSecurityProtocol',
            'direction' => 'getDirection',
            'syncConsumerOffsetsEnabled' => 'getSyncConsumerOffsetsEnabled',
            'replicationFactor' => 'getReplicationFactor',
            'taskNum' => 'getTaskNum',
            'renameTopicEnabled' => 'getRenameTopicEnabled',
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
        $this->container['currentClusterName'] = isset($data['currentClusterName']) ? $data['currentClusterName'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['saslMechanism'] = isset($data['saslMechanism']) ? $data['saslMechanism'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['bootstrapServers'] = isset($data['bootstrapServers']) ? $data['bootstrapServers'] : null;
        $this->container['securityProtocol'] = isset($data['securityProtocol']) ? $data['securityProtocol'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['syncConsumerOffsetsEnabled'] = isset($data['syncConsumerOffsetsEnabled']) ? $data['syncConsumerOffsetsEnabled'] : null;
        $this->container['replicationFactor'] = isset($data['replicationFactor']) ? $data['replicationFactor'] : null;
        $this->container['taskNum'] = isset($data['taskNum']) ? $data['taskNum'] : null;
        $this->container['renameTopicEnabled'] = isset($data['renameTopicEnabled']) ? $data['renameTopicEnabled'] : null;
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
    * Gets currentClusterName
    *  当前Kafka实例别名。（仅源端类型为Kafka时会显示）
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
    * @param string|null $currentClusterName 当前Kafka实例别名。（仅源端类型为Kafka时会显示）
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
    *  对端Kafka实例别名。（仅源端类型为Kafka时会显示）
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
    * @param string|null $clusterName 对端Kafka实例别名。（仅源端类型为Kafka时会显示）
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
    *  对端Kafka用户名。（仅源端类型为Kafka时会显示）
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
    * @param string|null $userName 对端Kafka用户名。（仅源端类型为Kafka时会显示）
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets saslMechanism
    *  对端Kafka认证机制。（仅源端类型为Kafka时会显示）
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
    * @param string|null $saslMechanism 对端Kafka认证机制。（仅源端类型为Kafka时会显示）
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
    *  对端Kafka实例ID。（仅源端类型为Kafka时会显示）
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
    * @param string|null $instanceId 对端Kafka实例ID。（仅源端类型为Kafka时会显示）
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
    *  对端Kafka实例地址。（仅源端类型为Kafka时会显示）
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
    * @param string|null $bootstrapServers 对端Kafka实例地址。（仅源端类型为Kafka时会显示）
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
    *  对端Kafka认证方式。（仅源端类型为Kafka时会显示）
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
    * @param string|null $securityProtocol 对端Kafka认证方式。（仅源端类型为Kafka时会显示）
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
    *  同步方向。（仅源端类型为Kafka时会显示）
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
    * @param string|null $direction 同步方向。（仅源端类型为Kafka时会显示）
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
    *  是否同步消费进度。（仅源端类型为Kafka时会显示）
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
    * @param bool|null $syncConsumerOffsetsEnabled 是否同步消费进度。（仅源端类型为Kafka时会显示）
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
    *  副本数。（仅源端类型为Kafka时会显示）
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
    * @param int|null $replicationFactor 副本数。（仅源端类型为Kafka时会显示）
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
    *  任务数。（仅源端类型为Kafka时会显示）
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
    * @param int|null $taskNum 任务数。（仅源端类型为Kafka时会显示）
    *
    * @return $this
    */
    public function setTaskNum($taskNum)
    {
        $this->container['taskNum'] = $taskNum;
        return $this;
    }

    /**
    * Gets renameTopicEnabled
    *  是否重命名Topic。（仅源端类型为Kafka时会显示）
    *
    * @return bool|null
    */
    public function getRenameTopicEnabled()
    {
        return $this->container['renameTopicEnabled'];
    }

    /**
    * Sets renameTopicEnabled
    *
    * @param bool|null $renameTopicEnabled 是否重命名Topic。（仅源端类型为Kafka时会显示）
    *
    * @return $this
    */
    public function setRenameTopicEnabled($renameTopicEnabled)
    {
        $this->container['renameTopicEnabled'] = $renameTopicEnabled;
        return $this;
    }

    /**
    * Gets provenanceHeaderEnabled
    *  是否添加来源header。（仅源端类型为Kafka时会显示）
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
    * @param bool|null $provenanceHeaderEnabled 是否添加来源header。（仅源端类型为Kafka时会显示）
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
    *  启动偏移量，latest为获取最新的数据，earliest为获取最早的数据。（仅源端类型为Kafka时会显示）
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
    * @param string|null $consumerStrategy 启动偏移量，latest为获取最新的数据，earliest为获取最早的数据。（仅源端类型为Kafka时会显示）
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
    *  压缩算法。（仅源端类型为Kafka时会显示）
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
    * @param string|null $compressionType 压缩算法。（仅源端类型为Kafka时会显示）
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
    *  topic映射。（仅源端类型为Kafka时会显示）
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
    * @param string|null $topicsMapping topic映射。（仅源端类型为Kafka时会显示）
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

