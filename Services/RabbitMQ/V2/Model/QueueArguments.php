<?php

namespace HuaweiCloud\SDK\RabbitMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueueArguments implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueueArguments';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xMessageTtl  消息过期时间，发布到Queue的消息在被丢弃之前可以存活多长时间。
    * xDeadLetterExchange  死信Exchange名称，消息被拒绝或过期时将重新发布到该Exchange。
    * xDeadLetterRoutingKey  死信的RoutingKey，死信Exchange会发送死信消息到绑定对应RoutingKey的Queue上。
    * xQueueMode  惰性队列[（AMQP版本默认持久化所有消息，不涉及此参数）](tag:hws,hws_hk)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xMessageTtl' => 'int',
            'xDeadLetterExchange' => 'string',
            'xDeadLetterRoutingKey' => 'string',
            'xQueueMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xMessageTtl  消息过期时间，发布到Queue的消息在被丢弃之前可以存活多长时间。
    * xDeadLetterExchange  死信Exchange名称，消息被拒绝或过期时将重新发布到该Exchange。
    * xDeadLetterRoutingKey  死信的RoutingKey，死信Exchange会发送死信消息到绑定对应RoutingKey的Queue上。
    * xQueueMode  惰性队列[（AMQP版本默认持久化所有消息，不涉及此参数）](tag:hws,hws_hk)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xMessageTtl' => 'int64',
        'xDeadLetterExchange' => null,
        'xDeadLetterRoutingKey' => null,
        'xQueueMode' => null
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
    * xMessageTtl  消息过期时间，发布到Queue的消息在被丢弃之前可以存活多长时间。
    * xDeadLetterExchange  死信Exchange名称，消息被拒绝或过期时将重新发布到该Exchange。
    * xDeadLetterRoutingKey  死信的RoutingKey，死信Exchange会发送死信消息到绑定对应RoutingKey的Queue上。
    * xQueueMode  惰性队列[（AMQP版本默认持久化所有消息，不涉及此参数）](tag:hws,hws_hk)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xMessageTtl' => 'x-message-ttl',
            'xDeadLetterExchange' => 'x-dead-letter-exchange',
            'xDeadLetterRoutingKey' => 'x-dead-letter-routing-key',
            'xQueueMode' => 'x-queue-mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xMessageTtl  消息过期时间，发布到Queue的消息在被丢弃之前可以存活多长时间。
    * xDeadLetterExchange  死信Exchange名称，消息被拒绝或过期时将重新发布到该Exchange。
    * xDeadLetterRoutingKey  死信的RoutingKey，死信Exchange会发送死信消息到绑定对应RoutingKey的Queue上。
    * xQueueMode  惰性队列[（AMQP版本默认持久化所有消息，不涉及此参数）](tag:hws,hws_hk)
    *
    * @var string[]
    */
    protected static $setters = [
            'xMessageTtl' => 'setXMessageTtl',
            'xDeadLetterExchange' => 'setXDeadLetterExchange',
            'xDeadLetterRoutingKey' => 'setXDeadLetterRoutingKey',
            'xQueueMode' => 'setXQueueMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xMessageTtl  消息过期时间，发布到Queue的消息在被丢弃之前可以存活多长时间。
    * xDeadLetterExchange  死信Exchange名称，消息被拒绝或过期时将重新发布到该Exchange。
    * xDeadLetterRoutingKey  死信的RoutingKey，死信Exchange会发送死信消息到绑定对应RoutingKey的Queue上。
    * xQueueMode  惰性队列[（AMQP版本默认持久化所有消息，不涉及此参数）](tag:hws,hws_hk)
    *
    * @var string[]
    */
    protected static $getters = [
            'xMessageTtl' => 'getXMessageTtl',
            'xDeadLetterExchange' => 'getXDeadLetterExchange',
            'xDeadLetterRoutingKey' => 'getXDeadLetterRoutingKey',
            'xQueueMode' => 'getXQueueMode'
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
        $this->container['xMessageTtl'] = isset($data['xMessageTtl']) ? $data['xMessageTtl'] : null;
        $this->container['xDeadLetterExchange'] = isset($data['xDeadLetterExchange']) ? $data['xDeadLetterExchange'] : null;
        $this->container['xDeadLetterRoutingKey'] = isset($data['xDeadLetterRoutingKey']) ? $data['xDeadLetterRoutingKey'] : null;
        $this->container['xQueueMode'] = isset($data['xQueueMode']) ? $data['xQueueMode'] : null;
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
    * Gets xMessageTtl
    *  消息过期时间，发布到Queue的消息在被丢弃之前可以存活多长时间。
    *
    * @return int|null
    */
    public function getXMessageTtl()
    {
        return $this->container['xMessageTtl'];
    }

    /**
    * Sets xMessageTtl
    *
    * @param int|null $xMessageTtl 消息过期时间，发布到Queue的消息在被丢弃之前可以存活多长时间。
    *
    * @return $this
    */
    public function setXMessageTtl($xMessageTtl)
    {
        $this->container['xMessageTtl'] = $xMessageTtl;
        return $this;
    }

    /**
    * Gets xDeadLetterExchange
    *  死信Exchange名称，消息被拒绝或过期时将重新发布到该Exchange。
    *
    * @return string|null
    */
    public function getXDeadLetterExchange()
    {
        return $this->container['xDeadLetterExchange'];
    }

    /**
    * Sets xDeadLetterExchange
    *
    * @param string|null $xDeadLetterExchange 死信Exchange名称，消息被拒绝或过期时将重新发布到该Exchange。
    *
    * @return $this
    */
    public function setXDeadLetterExchange($xDeadLetterExchange)
    {
        $this->container['xDeadLetterExchange'] = $xDeadLetterExchange;
        return $this;
    }

    /**
    * Gets xDeadLetterRoutingKey
    *  死信的RoutingKey，死信Exchange会发送死信消息到绑定对应RoutingKey的Queue上。
    *
    * @return string|null
    */
    public function getXDeadLetterRoutingKey()
    {
        return $this->container['xDeadLetterRoutingKey'];
    }

    /**
    * Sets xDeadLetterRoutingKey
    *
    * @param string|null $xDeadLetterRoutingKey 死信的RoutingKey，死信Exchange会发送死信消息到绑定对应RoutingKey的Queue上。
    *
    * @return $this
    */
    public function setXDeadLetterRoutingKey($xDeadLetterRoutingKey)
    {
        $this->container['xDeadLetterRoutingKey'] = $xDeadLetterRoutingKey;
        return $this;
    }

    /**
    * Gets xQueueMode
    *  惰性队列[（AMQP版本默认持久化所有消息，不涉及此参数）](tag:hws,hws_hk)
    *
    * @return string|null
    */
    public function getXQueueMode()
    {
        return $this->container['xQueueMode'];
    }

    /**
    * Sets xQueueMode
    *
    * @param string|null $xQueueMode 惰性队列[（AMQP版本默认持久化所有消息，不涉及此参数）](tag:hws,hws_hk)
    *
    * @return $this
    */
    public function setXQueueMode($xQueueMode)
    {
        $this->container['xQueueMode'] = $xQueueMode;
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

