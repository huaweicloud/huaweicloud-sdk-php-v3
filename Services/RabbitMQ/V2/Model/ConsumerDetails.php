<?php

namespace HuaweiCloud\SDK\RabbitMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConsumerDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConsumerDetails';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * consumerTag  消费者标识
    * channelDetails  channelDetails
    * ackRequired  消费者客户端是否设置手动ack
    * prefetchCount  消费者客户端预取值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'consumerTag' => 'string',
            'channelDetails' => '\HuaweiCloud\SDK\RabbitMQ\V2\Model\ChannelDetails',
            'ackRequired' => 'bool',
            'prefetchCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * consumerTag  消费者标识
    * channelDetails  channelDetails
    * ackRequired  消费者客户端是否设置手动ack
    * prefetchCount  消费者客户端预取值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'consumerTag' => null,
        'channelDetails' => null,
        'ackRequired' => null,
        'prefetchCount' => 'int32'
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
    * consumerTag  消费者标识
    * channelDetails  channelDetails
    * ackRequired  消费者客户端是否设置手动ack
    * prefetchCount  消费者客户端预取值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'consumerTag' => 'consumer_tag',
            'channelDetails' => 'channel_details',
            'ackRequired' => 'ack_required',
            'prefetchCount' => 'prefetch_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * consumerTag  消费者标识
    * channelDetails  channelDetails
    * ackRequired  消费者客户端是否设置手动ack
    * prefetchCount  消费者客户端预取值
    *
    * @var string[]
    */
    protected static $setters = [
            'consumerTag' => 'setConsumerTag',
            'channelDetails' => 'setChannelDetails',
            'ackRequired' => 'setAckRequired',
            'prefetchCount' => 'setPrefetchCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * consumerTag  消费者标识
    * channelDetails  channelDetails
    * ackRequired  消费者客户端是否设置手动ack
    * prefetchCount  消费者客户端预取值
    *
    * @var string[]
    */
    protected static $getters = [
            'consumerTag' => 'getConsumerTag',
            'channelDetails' => 'getChannelDetails',
            'ackRequired' => 'getAckRequired',
            'prefetchCount' => 'getPrefetchCount'
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
        $this->container['consumerTag'] = isset($data['consumerTag']) ? $data['consumerTag'] : null;
        $this->container['channelDetails'] = isset($data['channelDetails']) ? $data['channelDetails'] : null;
        $this->container['ackRequired'] = isset($data['ackRequired']) ? $data['ackRequired'] : null;
        $this->container['prefetchCount'] = isset($data['prefetchCount']) ? $data['prefetchCount'] : null;
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
    * Gets consumerTag
    *  消费者标识
    *
    * @return string|null
    */
    public function getConsumerTag()
    {
        return $this->container['consumerTag'];
    }

    /**
    * Sets consumerTag
    *
    * @param string|null $consumerTag 消费者标识
    *
    * @return $this
    */
    public function setConsumerTag($consumerTag)
    {
        $this->container['consumerTag'] = $consumerTag;
        return $this;
    }

    /**
    * Gets channelDetails
    *  channelDetails
    *
    * @return \HuaweiCloud\SDK\RabbitMQ\V2\Model\ChannelDetails|null
    */
    public function getChannelDetails()
    {
        return $this->container['channelDetails'];
    }

    /**
    * Sets channelDetails
    *
    * @param \HuaweiCloud\SDK\RabbitMQ\V2\Model\ChannelDetails|null $channelDetails channelDetails
    *
    * @return $this
    */
    public function setChannelDetails($channelDetails)
    {
        $this->container['channelDetails'] = $channelDetails;
        return $this;
    }

    /**
    * Gets ackRequired
    *  消费者客户端是否设置手动ack
    *
    * @return bool|null
    */
    public function getAckRequired()
    {
        return $this->container['ackRequired'];
    }

    /**
    * Sets ackRequired
    *
    * @param bool|null $ackRequired 消费者客户端是否设置手动ack
    *
    * @return $this
    */
    public function setAckRequired($ackRequired)
    {
        $this->container['ackRequired'] = $ackRequired;
        return $this;
    }

    /**
    * Gets prefetchCount
    *  消费者客户端预取值
    *
    * @return int|null
    */
    public function getPrefetchCount()
    {
        return $this->container['prefetchCount'];
    }

    /**
    * Sets prefetchCount
    *
    * @param int|null $prefetchCount 消费者客户端预取值
    *
    * @return $this
    */
    public function setPrefetchCount($prefetchCount)
    {
        $this->container['prefetchCount'] = $prefetchCount;
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

