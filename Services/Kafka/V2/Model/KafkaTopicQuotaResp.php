<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KafkaTopicQuotaResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KafkaTopicQuotaResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * topic  Topic名称
    * producerByteRate  生产者速率
    * consumerByteRate  消费者速率
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'topic' => 'string',
            'producerByteRate' => 'int',
            'consumerByteRate' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * topic  Topic名称
    * producerByteRate  生产者速率
    * consumerByteRate  消费者速率
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'topic' => null,
        'producerByteRate' => null,
        'consumerByteRate' => null
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
    * topic  Topic名称
    * producerByteRate  生产者速率
    * consumerByteRate  消费者速率
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'topic' => 'topic',
            'producerByteRate' => 'producer-byte-rate',
            'consumerByteRate' => 'consumer-byte-rate'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * topic  Topic名称
    * producerByteRate  生产者速率
    * consumerByteRate  消费者速率
    *
    * @var string[]
    */
    protected static $setters = [
            'topic' => 'setTopic',
            'producerByteRate' => 'setProducerByteRate',
            'consumerByteRate' => 'setConsumerByteRate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * topic  Topic名称
    * producerByteRate  生产者速率
    * consumerByteRate  消费者速率
    *
    * @var string[]
    */
    protected static $getters = [
            'topic' => 'getTopic',
            'producerByteRate' => 'getProducerByteRate',
            'consumerByteRate' => 'getConsumerByteRate'
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
        $this->container['producerByteRate'] = isset($data['producerByteRate']) ? $data['producerByteRate'] : null;
        $this->container['consumerByteRate'] = isset($data['consumerByteRate']) ? $data['consumerByteRate'] : null;
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
    * Gets topic
    *  Topic名称
    *
    * @return string|null
    */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
    * Sets topic
    *
    * @param string|null $topic Topic名称
    *
    * @return $this
    */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;
        return $this;
    }

    /**
    * Gets producerByteRate
    *  生产者速率
    *
    * @return int|null
    */
    public function getProducerByteRate()
    {
        return $this->container['producerByteRate'];
    }

    /**
    * Sets producerByteRate
    *
    * @param int|null $producerByteRate 生产者速率
    *
    * @return $this
    */
    public function setProducerByteRate($producerByteRate)
    {
        $this->container['producerByteRate'] = $producerByteRate;
        return $this;
    }

    /**
    * Gets consumerByteRate
    *  消费者速率
    *
    * @return int|null
    */
    public function getConsumerByteRate()
    {
        return $this->container['consumerByteRate'];
    }

    /**
    * Sets consumerByteRate
    *
    * @param int|null $consumerByteRate 消费者速率
    *
    * @return $this
    */
    public function setConsumerByteRate($consumerByteRate)
    {
        $this->container['consumerByteRate'] = $consumerByteRate;
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

