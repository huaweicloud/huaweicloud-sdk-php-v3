<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowClusterRespCluster implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowClusterResp_cluster';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * controller  控制器ID。
    * brokers  节点列表。
    * topicsCount  主题数量。
    * partitionsCount  分区数量。
    * onlinePartitionsCount  在线分区数量。
    * replicasCount  副本数量。
    * isrReplicasCount  ISR（In-Sync Replicas） 副本总数。
    * consumersCount  消费组数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'controller' => 'string',
            'brokers' => '\HuaweiCloud\SDK\Kafka\V2\Model\ShowClusterRespClusterBrokers[]',
            'topicsCount' => 'int',
            'partitionsCount' => 'int',
            'onlinePartitionsCount' => 'int',
            'replicasCount' => 'int',
            'isrReplicasCount' => 'int',
            'consumersCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * controller  控制器ID。
    * brokers  节点列表。
    * topicsCount  主题数量。
    * partitionsCount  分区数量。
    * onlinePartitionsCount  在线分区数量。
    * replicasCount  副本数量。
    * isrReplicasCount  ISR（In-Sync Replicas） 副本总数。
    * consumersCount  消费组数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'controller' => null,
        'brokers' => null,
        'topicsCount' => null,
        'partitionsCount' => null,
        'onlinePartitionsCount' => null,
        'replicasCount' => null,
        'isrReplicasCount' => null,
        'consumersCount' => null
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
    * controller  控制器ID。
    * brokers  节点列表。
    * topicsCount  主题数量。
    * partitionsCount  分区数量。
    * onlinePartitionsCount  在线分区数量。
    * replicasCount  副本数量。
    * isrReplicasCount  ISR（In-Sync Replicas） 副本总数。
    * consumersCount  消费组数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'controller' => 'controller',
            'brokers' => 'brokers',
            'topicsCount' => 'topics_count',
            'partitionsCount' => 'partitions_count',
            'onlinePartitionsCount' => 'online_partitions_count',
            'replicasCount' => 'replicas_count',
            'isrReplicasCount' => 'isr_replicas_count',
            'consumersCount' => 'consumers_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * controller  控制器ID。
    * brokers  节点列表。
    * topicsCount  主题数量。
    * partitionsCount  分区数量。
    * onlinePartitionsCount  在线分区数量。
    * replicasCount  副本数量。
    * isrReplicasCount  ISR（In-Sync Replicas） 副本总数。
    * consumersCount  消费组数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'controller' => 'setController',
            'brokers' => 'setBrokers',
            'topicsCount' => 'setTopicsCount',
            'partitionsCount' => 'setPartitionsCount',
            'onlinePartitionsCount' => 'setOnlinePartitionsCount',
            'replicasCount' => 'setReplicasCount',
            'isrReplicasCount' => 'setIsrReplicasCount',
            'consumersCount' => 'setConsumersCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * controller  控制器ID。
    * brokers  节点列表。
    * topicsCount  主题数量。
    * partitionsCount  分区数量。
    * onlinePartitionsCount  在线分区数量。
    * replicasCount  副本数量。
    * isrReplicasCount  ISR（In-Sync Replicas） 副本总数。
    * consumersCount  消费组数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'controller' => 'getController',
            'brokers' => 'getBrokers',
            'topicsCount' => 'getTopicsCount',
            'partitionsCount' => 'getPartitionsCount',
            'onlinePartitionsCount' => 'getOnlinePartitionsCount',
            'replicasCount' => 'getReplicasCount',
            'isrReplicasCount' => 'getIsrReplicasCount',
            'consumersCount' => 'getConsumersCount'
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
        $this->container['controller'] = isset($data['controller']) ? $data['controller'] : null;
        $this->container['brokers'] = isset($data['brokers']) ? $data['brokers'] : null;
        $this->container['topicsCount'] = isset($data['topicsCount']) ? $data['topicsCount'] : null;
        $this->container['partitionsCount'] = isset($data['partitionsCount']) ? $data['partitionsCount'] : null;
        $this->container['onlinePartitionsCount'] = isset($data['onlinePartitionsCount']) ? $data['onlinePartitionsCount'] : null;
        $this->container['replicasCount'] = isset($data['replicasCount']) ? $data['replicasCount'] : null;
        $this->container['isrReplicasCount'] = isset($data['isrReplicasCount']) ? $data['isrReplicasCount'] : null;
        $this->container['consumersCount'] = isset($data['consumersCount']) ? $data['consumersCount'] : null;
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
    * Gets controller
    *  控制器ID。
    *
    * @return string|null
    */
    public function getController()
    {
        return $this->container['controller'];
    }

    /**
    * Sets controller
    *
    * @param string|null $controller 控制器ID。
    *
    * @return $this
    */
    public function setController($controller)
    {
        $this->container['controller'] = $controller;
        return $this;
    }

    /**
    * Gets brokers
    *  节点列表。
    *
    * @return \HuaweiCloud\SDK\Kafka\V2\Model\ShowClusterRespClusterBrokers[]|null
    */
    public function getBrokers()
    {
        return $this->container['brokers'];
    }

    /**
    * Sets brokers
    *
    * @param \HuaweiCloud\SDK\Kafka\V2\Model\ShowClusterRespClusterBrokers[]|null $brokers 节点列表。
    *
    * @return $this
    */
    public function setBrokers($brokers)
    {
        $this->container['brokers'] = $brokers;
        return $this;
    }

    /**
    * Gets topicsCount
    *  主题数量。
    *
    * @return int|null
    */
    public function getTopicsCount()
    {
        return $this->container['topicsCount'];
    }

    /**
    * Sets topicsCount
    *
    * @param int|null $topicsCount 主题数量。
    *
    * @return $this
    */
    public function setTopicsCount($topicsCount)
    {
        $this->container['topicsCount'] = $topicsCount;
        return $this;
    }

    /**
    * Gets partitionsCount
    *  分区数量。
    *
    * @return int|null
    */
    public function getPartitionsCount()
    {
        return $this->container['partitionsCount'];
    }

    /**
    * Sets partitionsCount
    *
    * @param int|null $partitionsCount 分区数量。
    *
    * @return $this
    */
    public function setPartitionsCount($partitionsCount)
    {
        $this->container['partitionsCount'] = $partitionsCount;
        return $this;
    }

    /**
    * Gets onlinePartitionsCount
    *  在线分区数量。
    *
    * @return int|null
    */
    public function getOnlinePartitionsCount()
    {
        return $this->container['onlinePartitionsCount'];
    }

    /**
    * Sets onlinePartitionsCount
    *
    * @param int|null $onlinePartitionsCount 在线分区数量。
    *
    * @return $this
    */
    public function setOnlinePartitionsCount($onlinePartitionsCount)
    {
        $this->container['onlinePartitionsCount'] = $onlinePartitionsCount;
        return $this;
    }

    /**
    * Gets replicasCount
    *  副本数量。
    *
    * @return int|null
    */
    public function getReplicasCount()
    {
        return $this->container['replicasCount'];
    }

    /**
    * Sets replicasCount
    *
    * @param int|null $replicasCount 副本数量。
    *
    * @return $this
    */
    public function setReplicasCount($replicasCount)
    {
        $this->container['replicasCount'] = $replicasCount;
        return $this;
    }

    /**
    * Gets isrReplicasCount
    *  ISR（In-Sync Replicas） 副本总数。
    *
    * @return int|null
    */
    public function getIsrReplicasCount()
    {
        return $this->container['isrReplicasCount'];
    }

    /**
    * Sets isrReplicasCount
    *
    * @param int|null $isrReplicasCount ISR（In-Sync Replicas） 副本总数。
    *
    * @return $this
    */
    public function setIsrReplicasCount($isrReplicasCount)
    {
        $this->container['isrReplicasCount'] = $isrReplicasCount;
        return $this;
    }

    /**
    * Gets consumersCount
    *  消费组数量。
    *
    * @return int|null
    */
    public function getConsumersCount()
    {
        return $this->container['consumersCount'];
    }

    /**
    * Sets consumersCount
    *
    * @param int|null $consumersCount 消费组数量。
    *
    * @return $this
    */
    public function setConsumersCount($consumersCount)
    {
        $this->container['consumersCount'] = $consumersCount;
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

