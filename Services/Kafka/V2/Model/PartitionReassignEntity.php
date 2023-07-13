<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PartitionReassignEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PartitionReassignEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * topic  topic名称
    * brokers  分区重平衡到的broker列表，自动生成分配方案时需指定该参数。
    * replicationFactor  副本因子，自动生成分配方案时可指定。
    * assignment  手动指定的分配方案。brokers参数与该参数不能同时为空。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'topic' => 'string',
            'brokers' => 'int[]',
            'replicationFactor' => 'int',
            'assignment' => '\HuaweiCloud\SDK\Kafka\V2\Model\TopicAssignment[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * topic  topic名称
    * brokers  分区重平衡到的broker列表，自动生成分配方案时需指定该参数。
    * replicationFactor  副本因子，自动生成分配方案时可指定。
    * assignment  手动指定的分配方案。brokers参数与该参数不能同时为空。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'topic' => null,
        'brokers' => 'int32',
        'replicationFactor' => 'int32',
        'assignment' => null
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
    * topic  topic名称
    * brokers  分区重平衡到的broker列表，自动生成分配方案时需指定该参数。
    * replicationFactor  副本因子，自动生成分配方案时可指定。
    * assignment  手动指定的分配方案。brokers参数与该参数不能同时为空。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'topic' => 'topic',
            'brokers' => 'brokers',
            'replicationFactor' => 'replication_factor',
            'assignment' => 'assignment'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * topic  topic名称
    * brokers  分区重平衡到的broker列表，自动生成分配方案时需指定该参数。
    * replicationFactor  副本因子，自动生成分配方案时可指定。
    * assignment  手动指定的分配方案。brokers参数与该参数不能同时为空。
    *
    * @var string[]
    */
    protected static $setters = [
            'topic' => 'setTopic',
            'brokers' => 'setBrokers',
            'replicationFactor' => 'setReplicationFactor',
            'assignment' => 'setAssignment'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * topic  topic名称
    * brokers  分区重平衡到的broker列表，自动生成分配方案时需指定该参数。
    * replicationFactor  副本因子，自动生成分配方案时可指定。
    * assignment  手动指定的分配方案。brokers参数与该参数不能同时为空。
    *
    * @var string[]
    */
    protected static $getters = [
            'topic' => 'getTopic',
            'brokers' => 'getBrokers',
            'replicationFactor' => 'getReplicationFactor',
            'assignment' => 'getAssignment'
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
        $this->container['topic'] = isset($data['topic']) ? $data['topic'] : null;
        $this->container['brokers'] = isset($data['brokers']) ? $data['brokers'] : null;
        $this->container['replicationFactor'] = isset($data['replicationFactor']) ? $data['replicationFactor'] : null;
        $this->container['assignment'] = isset($data['assignment']) ? $data['assignment'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['topic'] === null) {
            $invalidProperties[] = "'topic' can't be null";
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
    * Gets topic
    *  topic名称
    *
    * @return string
    */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
    * Sets topic
    *
    * @param string $topic topic名称
    *
    * @return $this
    */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;
        return $this;
    }

    /**
    * Gets brokers
    *  分区重平衡到的broker列表，自动生成分配方案时需指定该参数。
    *
    * @return int[]|null
    */
    public function getBrokers()
    {
        return $this->container['brokers'];
    }

    /**
    * Sets brokers
    *
    * @param int[]|null $brokers 分区重平衡到的broker列表，自动生成分配方案时需指定该参数。
    *
    * @return $this
    */
    public function setBrokers($brokers)
    {
        $this->container['brokers'] = $brokers;
        return $this;
    }

    /**
    * Gets replicationFactor
    *  副本因子，自动生成分配方案时可指定。
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
    * @param int|null $replicationFactor 副本因子，自动生成分配方案时可指定。
    *
    * @return $this
    */
    public function setReplicationFactor($replicationFactor)
    {
        $this->container['replicationFactor'] = $replicationFactor;
        return $this;
    }

    /**
    * Gets assignment
    *  手动指定的分配方案。brokers参数与该参数不能同时为空。
    *
    * @return \HuaweiCloud\SDK\Kafka\V2\Model\TopicAssignment[]|null
    */
    public function getAssignment()
    {
        return $this->container['assignment'];
    }

    /**
    * Sets assignment
    *
    * @param \HuaweiCloud\SDK\Kafka\V2\Model\TopicAssignment[]|null $assignment 手动指定的分配方案。brokers参数与该参数不能同时为空。
    *
    * @return $this
    */
    public function setAssignment($assignment)
    {
        $this->container['assignment'] = $assignment;
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

