<?php

namespace HuaweiCloud\SDK\RabbitMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListEnginePropertiesEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListEnginePropertiesEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * stepLength  节点增长步长。
    * maxQueuePerBroker  每个Broker的最大对列。
    * maxConnectionPerBroker  每个Broker的最大连接数。
    * maxPartitionPerBroker  每个Broker的最大分区数。
    * maxBroker  Broker的最大个数。
    * maxStoragePerNode  每个节点的最大存储。单位为GB。
    * maxConsumerPerBroker  每个Broker的最大消费者数。
    * minBroker  Broker的最小个数。
    * maxBandwidthPerBroker  每个Broker的最大带宽。
    * minStoragePerNode  每个节点的最小存储。单位为GB。
    * maxTpsPerBroker  每个Broker的最大TPS。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'stepLength' => 'string',
            'maxQueuePerBroker' => 'string',
            'maxConnectionPerBroker' => 'string',
            'maxPartitionPerBroker' => 'string',
            'maxBroker' => 'string',
            'maxStoragePerNode' => 'string',
            'maxConsumerPerBroker' => 'string',
            'minBroker' => 'string',
            'maxBandwidthPerBroker' => 'string',
            'minStoragePerNode' => 'string',
            'maxTpsPerBroker' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * stepLength  节点增长步长。
    * maxQueuePerBroker  每个Broker的最大对列。
    * maxConnectionPerBroker  每个Broker的最大连接数。
    * maxPartitionPerBroker  每个Broker的最大分区数。
    * maxBroker  Broker的最大个数。
    * maxStoragePerNode  每个节点的最大存储。单位为GB。
    * maxConsumerPerBroker  每个Broker的最大消费者数。
    * minBroker  Broker的最小个数。
    * maxBandwidthPerBroker  每个Broker的最大带宽。
    * minStoragePerNode  每个节点的最小存储。单位为GB。
    * maxTpsPerBroker  每个Broker的最大TPS。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'stepLength' => null,
        'maxQueuePerBroker' => null,
        'maxConnectionPerBroker' => null,
        'maxPartitionPerBroker' => null,
        'maxBroker' => null,
        'maxStoragePerNode' => null,
        'maxConsumerPerBroker' => null,
        'minBroker' => null,
        'maxBandwidthPerBroker' => null,
        'minStoragePerNode' => null,
        'maxTpsPerBroker' => null
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
    * stepLength  节点增长步长。
    * maxQueuePerBroker  每个Broker的最大对列。
    * maxConnectionPerBroker  每个Broker的最大连接数。
    * maxPartitionPerBroker  每个Broker的最大分区数。
    * maxBroker  Broker的最大个数。
    * maxStoragePerNode  每个节点的最大存储。单位为GB。
    * maxConsumerPerBroker  每个Broker的最大消费者数。
    * minBroker  Broker的最小个数。
    * maxBandwidthPerBroker  每个Broker的最大带宽。
    * minStoragePerNode  每个节点的最小存储。单位为GB。
    * maxTpsPerBroker  每个Broker的最大TPS。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'stepLength' => 'step_length',
            'maxQueuePerBroker' => 'max_queue_per_broker',
            'maxConnectionPerBroker' => 'max_connection_per_broker',
            'maxPartitionPerBroker' => 'max_partition_per_broker',
            'maxBroker' => 'max_broker',
            'maxStoragePerNode' => 'max_storage_per_node',
            'maxConsumerPerBroker' => 'max_consumer_per_broker',
            'minBroker' => 'min_broker',
            'maxBandwidthPerBroker' => 'max_bandwidth_per_broker',
            'minStoragePerNode' => 'min_storage_per_node',
            'maxTpsPerBroker' => 'max_tps_per_broker'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * stepLength  节点增长步长。
    * maxQueuePerBroker  每个Broker的最大对列。
    * maxConnectionPerBroker  每个Broker的最大连接数。
    * maxPartitionPerBroker  每个Broker的最大分区数。
    * maxBroker  Broker的最大个数。
    * maxStoragePerNode  每个节点的最大存储。单位为GB。
    * maxConsumerPerBroker  每个Broker的最大消费者数。
    * minBroker  Broker的最小个数。
    * maxBandwidthPerBroker  每个Broker的最大带宽。
    * minStoragePerNode  每个节点的最小存储。单位为GB。
    * maxTpsPerBroker  每个Broker的最大TPS。
    *
    * @var string[]
    */
    protected static $setters = [
            'stepLength' => 'setStepLength',
            'maxQueuePerBroker' => 'setMaxQueuePerBroker',
            'maxConnectionPerBroker' => 'setMaxConnectionPerBroker',
            'maxPartitionPerBroker' => 'setMaxPartitionPerBroker',
            'maxBroker' => 'setMaxBroker',
            'maxStoragePerNode' => 'setMaxStoragePerNode',
            'maxConsumerPerBroker' => 'setMaxConsumerPerBroker',
            'minBroker' => 'setMinBroker',
            'maxBandwidthPerBroker' => 'setMaxBandwidthPerBroker',
            'minStoragePerNode' => 'setMinStoragePerNode',
            'maxTpsPerBroker' => 'setMaxTpsPerBroker'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * stepLength  节点增长步长。
    * maxQueuePerBroker  每个Broker的最大对列。
    * maxConnectionPerBroker  每个Broker的最大连接数。
    * maxPartitionPerBroker  每个Broker的最大分区数。
    * maxBroker  Broker的最大个数。
    * maxStoragePerNode  每个节点的最大存储。单位为GB。
    * maxConsumerPerBroker  每个Broker的最大消费者数。
    * minBroker  Broker的最小个数。
    * maxBandwidthPerBroker  每个Broker的最大带宽。
    * minStoragePerNode  每个节点的最小存储。单位为GB。
    * maxTpsPerBroker  每个Broker的最大TPS。
    *
    * @var string[]
    */
    protected static $getters = [
            'stepLength' => 'getStepLength',
            'maxQueuePerBroker' => 'getMaxQueuePerBroker',
            'maxConnectionPerBroker' => 'getMaxConnectionPerBroker',
            'maxPartitionPerBroker' => 'getMaxPartitionPerBroker',
            'maxBroker' => 'getMaxBroker',
            'maxStoragePerNode' => 'getMaxStoragePerNode',
            'maxConsumerPerBroker' => 'getMaxConsumerPerBroker',
            'minBroker' => 'getMinBroker',
            'maxBandwidthPerBroker' => 'getMaxBandwidthPerBroker',
            'minStoragePerNode' => 'getMinStoragePerNode',
            'maxTpsPerBroker' => 'getMaxTpsPerBroker'
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
        $this->container['stepLength'] = isset($data['stepLength']) ? $data['stepLength'] : null;
        $this->container['maxQueuePerBroker'] = isset($data['maxQueuePerBroker']) ? $data['maxQueuePerBroker'] : null;
        $this->container['maxConnectionPerBroker'] = isset($data['maxConnectionPerBroker']) ? $data['maxConnectionPerBroker'] : null;
        $this->container['maxPartitionPerBroker'] = isset($data['maxPartitionPerBroker']) ? $data['maxPartitionPerBroker'] : null;
        $this->container['maxBroker'] = isset($data['maxBroker']) ? $data['maxBroker'] : null;
        $this->container['maxStoragePerNode'] = isset($data['maxStoragePerNode']) ? $data['maxStoragePerNode'] : null;
        $this->container['maxConsumerPerBroker'] = isset($data['maxConsumerPerBroker']) ? $data['maxConsumerPerBroker'] : null;
        $this->container['minBroker'] = isset($data['minBroker']) ? $data['minBroker'] : null;
        $this->container['maxBandwidthPerBroker'] = isset($data['maxBandwidthPerBroker']) ? $data['maxBandwidthPerBroker'] : null;
        $this->container['minStoragePerNode'] = isset($data['minStoragePerNode']) ? $data['minStoragePerNode'] : null;
        $this->container['maxTpsPerBroker'] = isset($data['maxTpsPerBroker']) ? $data['maxTpsPerBroker'] : null;
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
    * Gets stepLength
    *  节点增长步长。
    *
    * @return string|null
    */
    public function getStepLength()
    {
        return $this->container['stepLength'];
    }

    /**
    * Sets stepLength
    *
    * @param string|null $stepLength 节点增长步长。
    *
    * @return $this
    */
    public function setStepLength($stepLength)
    {
        $this->container['stepLength'] = $stepLength;
        return $this;
    }

    /**
    * Gets maxQueuePerBroker
    *  每个Broker的最大对列。
    *
    * @return string|null
    */
    public function getMaxQueuePerBroker()
    {
        return $this->container['maxQueuePerBroker'];
    }

    /**
    * Sets maxQueuePerBroker
    *
    * @param string|null $maxQueuePerBroker 每个Broker的最大对列。
    *
    * @return $this
    */
    public function setMaxQueuePerBroker($maxQueuePerBroker)
    {
        $this->container['maxQueuePerBroker'] = $maxQueuePerBroker;
        return $this;
    }

    /**
    * Gets maxConnectionPerBroker
    *  每个Broker的最大连接数。
    *
    * @return string|null
    */
    public function getMaxConnectionPerBroker()
    {
        return $this->container['maxConnectionPerBroker'];
    }

    /**
    * Sets maxConnectionPerBroker
    *
    * @param string|null $maxConnectionPerBroker 每个Broker的最大连接数。
    *
    * @return $this
    */
    public function setMaxConnectionPerBroker($maxConnectionPerBroker)
    {
        $this->container['maxConnectionPerBroker'] = $maxConnectionPerBroker;
        return $this;
    }

    /**
    * Gets maxPartitionPerBroker
    *  每个Broker的最大分区数。
    *
    * @return string|null
    */
    public function getMaxPartitionPerBroker()
    {
        return $this->container['maxPartitionPerBroker'];
    }

    /**
    * Sets maxPartitionPerBroker
    *
    * @param string|null $maxPartitionPerBroker 每个Broker的最大分区数。
    *
    * @return $this
    */
    public function setMaxPartitionPerBroker($maxPartitionPerBroker)
    {
        $this->container['maxPartitionPerBroker'] = $maxPartitionPerBroker;
        return $this;
    }

    /**
    * Gets maxBroker
    *  Broker的最大个数。
    *
    * @return string|null
    */
    public function getMaxBroker()
    {
        return $this->container['maxBroker'];
    }

    /**
    * Sets maxBroker
    *
    * @param string|null $maxBroker Broker的最大个数。
    *
    * @return $this
    */
    public function setMaxBroker($maxBroker)
    {
        $this->container['maxBroker'] = $maxBroker;
        return $this;
    }

    /**
    * Gets maxStoragePerNode
    *  每个节点的最大存储。单位为GB。
    *
    * @return string|null
    */
    public function getMaxStoragePerNode()
    {
        return $this->container['maxStoragePerNode'];
    }

    /**
    * Sets maxStoragePerNode
    *
    * @param string|null $maxStoragePerNode 每个节点的最大存储。单位为GB。
    *
    * @return $this
    */
    public function setMaxStoragePerNode($maxStoragePerNode)
    {
        $this->container['maxStoragePerNode'] = $maxStoragePerNode;
        return $this;
    }

    /**
    * Gets maxConsumerPerBroker
    *  每个Broker的最大消费者数。
    *
    * @return string|null
    */
    public function getMaxConsumerPerBroker()
    {
        return $this->container['maxConsumerPerBroker'];
    }

    /**
    * Sets maxConsumerPerBroker
    *
    * @param string|null $maxConsumerPerBroker 每个Broker的最大消费者数。
    *
    * @return $this
    */
    public function setMaxConsumerPerBroker($maxConsumerPerBroker)
    {
        $this->container['maxConsumerPerBroker'] = $maxConsumerPerBroker;
        return $this;
    }

    /**
    * Gets minBroker
    *  Broker的最小个数。
    *
    * @return string|null
    */
    public function getMinBroker()
    {
        return $this->container['minBroker'];
    }

    /**
    * Sets minBroker
    *
    * @param string|null $minBroker Broker的最小个数。
    *
    * @return $this
    */
    public function setMinBroker($minBroker)
    {
        $this->container['minBroker'] = $minBroker;
        return $this;
    }

    /**
    * Gets maxBandwidthPerBroker
    *  每个Broker的最大带宽。
    *
    * @return string|null
    */
    public function getMaxBandwidthPerBroker()
    {
        return $this->container['maxBandwidthPerBroker'];
    }

    /**
    * Sets maxBandwidthPerBroker
    *
    * @param string|null $maxBandwidthPerBroker 每个Broker的最大带宽。
    *
    * @return $this
    */
    public function setMaxBandwidthPerBroker($maxBandwidthPerBroker)
    {
        $this->container['maxBandwidthPerBroker'] = $maxBandwidthPerBroker;
        return $this;
    }

    /**
    * Gets minStoragePerNode
    *  每个节点的最小存储。单位为GB。
    *
    * @return string|null
    */
    public function getMinStoragePerNode()
    {
        return $this->container['minStoragePerNode'];
    }

    /**
    * Sets minStoragePerNode
    *
    * @param string|null $minStoragePerNode 每个节点的最小存储。单位为GB。
    *
    * @return $this
    */
    public function setMinStoragePerNode($minStoragePerNode)
    {
        $this->container['minStoragePerNode'] = $minStoragePerNode;
        return $this;
    }

    /**
    * Gets maxTpsPerBroker
    *  每个Broker的最大TPS。
    *
    * @return string|null
    */
    public function getMaxTpsPerBroker()
    {
        return $this->container['maxTpsPerBroker'];
    }

    /**
    * Sets maxTpsPerBroker
    *
    * @param string|null $maxTpsPerBroker 每个Broker的最大TPS。
    *
    * @return $this
    */
    public function setMaxTpsPerBroker($maxTpsPerBroker)
    {
        $this->container['maxTpsPerBroker'] = $maxTpsPerBroker;
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

