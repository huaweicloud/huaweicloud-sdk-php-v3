<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RocketMQExtendProductPropertiesEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RocketMQExtendProductPropertiesEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * maxBroker  Broker的最大个数。
    * maxTopicPerBroker  每个节点最多能创建的Topic个数。
    * maxConsumerPerBroker  每个节点的最大消费者数。
    * maxStoragePerNode  每个节点的最大存储。单位为GB
    * minBroker  Broker的最小个数。
    * engineVersions  消息引擎版本。
    * minStoragePerNode  每个节点的最小存储。单位为GB
    * productAlias  product_id的别名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'maxBroker' => 'string',
            'maxTopicPerBroker' => 'string',
            'maxConsumerPerBroker' => 'string',
            'maxStoragePerNode' => 'string',
            'minBroker' => 'string',
            'engineVersions' => 'string',
            'minStoragePerNode' => 'string',
            'productAlias' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * maxBroker  Broker的最大个数。
    * maxTopicPerBroker  每个节点最多能创建的Topic个数。
    * maxConsumerPerBroker  每个节点的最大消费者数。
    * maxStoragePerNode  每个节点的最大存储。单位为GB
    * minBroker  Broker的最小个数。
    * engineVersions  消息引擎版本。
    * minStoragePerNode  每个节点的最小存储。单位为GB
    * productAlias  product_id的别名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'maxBroker' => null,
        'maxTopicPerBroker' => null,
        'maxConsumerPerBroker' => null,
        'maxStoragePerNode' => null,
        'minBroker' => null,
        'engineVersions' => null,
        'minStoragePerNode' => null,
        'productAlias' => null
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
    * maxBroker  Broker的最大个数。
    * maxTopicPerBroker  每个节点最多能创建的Topic个数。
    * maxConsumerPerBroker  每个节点的最大消费者数。
    * maxStoragePerNode  每个节点的最大存储。单位为GB
    * minBroker  Broker的最小个数。
    * engineVersions  消息引擎版本。
    * minStoragePerNode  每个节点的最小存储。单位为GB
    * productAlias  product_id的别名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'maxBroker' => 'max_broker',
            'maxTopicPerBroker' => 'max_topic_per_broker',
            'maxConsumerPerBroker' => 'max_consumer_per_broker',
            'maxStoragePerNode' => 'max_storage_per_node',
            'minBroker' => 'min_broker',
            'engineVersions' => 'engine_versions',
            'minStoragePerNode' => 'min_storage_per_node',
            'productAlias' => 'product_alias'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * maxBroker  Broker的最大个数。
    * maxTopicPerBroker  每个节点最多能创建的Topic个数。
    * maxConsumerPerBroker  每个节点的最大消费者数。
    * maxStoragePerNode  每个节点的最大存储。单位为GB
    * minBroker  Broker的最小个数。
    * engineVersions  消息引擎版本。
    * minStoragePerNode  每个节点的最小存储。单位为GB
    * productAlias  product_id的别名
    *
    * @var string[]
    */
    protected static $setters = [
            'maxBroker' => 'setMaxBroker',
            'maxTopicPerBroker' => 'setMaxTopicPerBroker',
            'maxConsumerPerBroker' => 'setMaxConsumerPerBroker',
            'maxStoragePerNode' => 'setMaxStoragePerNode',
            'minBroker' => 'setMinBroker',
            'engineVersions' => 'setEngineVersions',
            'minStoragePerNode' => 'setMinStoragePerNode',
            'productAlias' => 'setProductAlias'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * maxBroker  Broker的最大个数。
    * maxTopicPerBroker  每个节点最多能创建的Topic个数。
    * maxConsumerPerBroker  每个节点的最大消费者数。
    * maxStoragePerNode  每个节点的最大存储。单位为GB
    * minBroker  Broker的最小个数。
    * engineVersions  消息引擎版本。
    * minStoragePerNode  每个节点的最小存储。单位为GB
    * productAlias  product_id的别名
    *
    * @var string[]
    */
    protected static $getters = [
            'maxBroker' => 'getMaxBroker',
            'maxTopicPerBroker' => 'getMaxTopicPerBroker',
            'maxConsumerPerBroker' => 'getMaxConsumerPerBroker',
            'maxStoragePerNode' => 'getMaxStoragePerNode',
            'minBroker' => 'getMinBroker',
            'engineVersions' => 'getEngineVersions',
            'minStoragePerNode' => 'getMinStoragePerNode',
            'productAlias' => 'getProductAlias'
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
        $this->container['maxBroker'] = isset($data['maxBroker']) ? $data['maxBroker'] : null;
        $this->container['maxTopicPerBroker'] = isset($data['maxTopicPerBroker']) ? $data['maxTopicPerBroker'] : null;
        $this->container['maxConsumerPerBroker'] = isset($data['maxConsumerPerBroker']) ? $data['maxConsumerPerBroker'] : null;
        $this->container['maxStoragePerNode'] = isset($data['maxStoragePerNode']) ? $data['maxStoragePerNode'] : null;
        $this->container['minBroker'] = isset($data['minBroker']) ? $data['minBroker'] : null;
        $this->container['engineVersions'] = isset($data['engineVersions']) ? $data['engineVersions'] : null;
        $this->container['minStoragePerNode'] = isset($data['minStoragePerNode']) ? $data['minStoragePerNode'] : null;
        $this->container['productAlias'] = isset($data['productAlias']) ? $data['productAlias'] : null;
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
    * Gets maxTopicPerBroker
    *  每个节点最多能创建的Topic个数。
    *
    * @return string|null
    */
    public function getMaxTopicPerBroker()
    {
        return $this->container['maxTopicPerBroker'];
    }

    /**
    * Sets maxTopicPerBroker
    *
    * @param string|null $maxTopicPerBroker 每个节点最多能创建的Topic个数。
    *
    * @return $this
    */
    public function setMaxTopicPerBroker($maxTopicPerBroker)
    {
        $this->container['maxTopicPerBroker'] = $maxTopicPerBroker;
        return $this;
    }

    /**
    * Gets maxConsumerPerBroker
    *  每个节点的最大消费者数。
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
    * @param string|null $maxConsumerPerBroker 每个节点的最大消费者数。
    *
    * @return $this
    */
    public function setMaxConsumerPerBroker($maxConsumerPerBroker)
    {
        $this->container['maxConsumerPerBroker'] = $maxConsumerPerBroker;
        return $this;
    }

    /**
    * Gets maxStoragePerNode
    *  每个节点的最大存储。单位为GB
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
    * @param string|null $maxStoragePerNode 每个节点的最大存储。单位为GB
    *
    * @return $this
    */
    public function setMaxStoragePerNode($maxStoragePerNode)
    {
        $this->container['maxStoragePerNode'] = $maxStoragePerNode;
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
    * Gets engineVersions
    *  消息引擎版本。
    *
    * @return string|null
    */
    public function getEngineVersions()
    {
        return $this->container['engineVersions'];
    }

    /**
    * Sets engineVersions
    *
    * @param string|null $engineVersions 消息引擎版本。
    *
    * @return $this
    */
    public function setEngineVersions($engineVersions)
    {
        $this->container['engineVersions'] = $engineVersions;
        return $this;
    }

    /**
    * Gets minStoragePerNode
    *  每个节点的最小存储。单位为GB
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
    * @param string|null $minStoragePerNode 每个节点的最小存储。单位为GB
    *
    * @return $this
    */
    public function setMinStoragePerNode($minStoragePerNode)
    {
        $this->container['minStoragePerNode'] = $minStoragePerNode;
        return $this;
    }

    /**
    * Gets productAlias
    *  product_id的别名
    *
    * @return string|null
    */
    public function getProductAlias()
    {
        return $this->container['productAlias'];
    }

    /**
    * Sets productAlias
    *
    * @param string|null $productAlias product_id的别名
    *
    * @return $this
    */
    public function setProductAlias($productAlias)
    {
        $this->container['productAlias'] = $productAlias;
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

