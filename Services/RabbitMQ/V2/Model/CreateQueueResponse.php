<?php

namespace HuaweiCloud\SDK\RabbitMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateQueueResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateQueueResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  Queue名称
    * autoDelete  是否自动删除
    * durable  是否持久化[（AMQP版本默认持久化，不涉及此字段）](tag:hws,hws_hk)
    * deadLetterExchange  死信Exchange名称，消息被拒绝或过期时将重新发布到该Exchange。
    * deadLetterRoutingKey  死信Exchange的RoutingKey，死信Exchange会发送死信消息到绑定对应RoutingKey的Queue上。
    * messageTtl  发布到Queue的消息在被丢弃之前可以存活多长时间
    * lazyMode  若设置惰性队列，请输入lazy。惰性队列模式会在磁盘上存储尽可能多的消息以减少内存使用；若不设置，队列将消息存储在内存缓存以尽可能快地传递消息。[（AMQP版本默认将消息存储到磁盘，不涉及此字段）](tag:hws,hws_hk)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'autoDelete' => 'bool',
            'durable' => 'bool',
            'deadLetterExchange' => 'string',
            'deadLetterRoutingKey' => 'string',
            'messageTtl' => 'int',
            'lazyMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  Queue名称
    * autoDelete  是否自动删除
    * durable  是否持久化[（AMQP版本默认持久化，不涉及此字段）](tag:hws,hws_hk)
    * deadLetterExchange  死信Exchange名称，消息被拒绝或过期时将重新发布到该Exchange。
    * deadLetterRoutingKey  死信Exchange的RoutingKey，死信Exchange会发送死信消息到绑定对应RoutingKey的Queue上。
    * messageTtl  发布到Queue的消息在被丢弃之前可以存活多长时间
    * lazyMode  若设置惰性队列，请输入lazy。惰性队列模式会在磁盘上存储尽可能多的消息以减少内存使用；若不设置，队列将消息存储在内存缓存以尽可能快地传递消息。[（AMQP版本默认将消息存储到磁盘，不涉及此字段）](tag:hws,hws_hk)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'autoDelete' => null,
        'durable' => null,
        'deadLetterExchange' => null,
        'deadLetterRoutingKey' => null,
        'messageTtl' => 'int64',
        'lazyMode' => null
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
    * name  Queue名称
    * autoDelete  是否自动删除
    * durable  是否持久化[（AMQP版本默认持久化，不涉及此字段）](tag:hws,hws_hk)
    * deadLetterExchange  死信Exchange名称，消息被拒绝或过期时将重新发布到该Exchange。
    * deadLetterRoutingKey  死信Exchange的RoutingKey，死信Exchange会发送死信消息到绑定对应RoutingKey的Queue上。
    * messageTtl  发布到Queue的消息在被丢弃之前可以存活多长时间
    * lazyMode  若设置惰性队列，请输入lazy。惰性队列模式会在磁盘上存储尽可能多的消息以减少内存使用；若不设置，队列将消息存储在内存缓存以尽可能快地传递消息。[（AMQP版本默认将消息存储到磁盘，不涉及此字段）](tag:hws,hws_hk)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'autoDelete' => 'auto_delete',
            'durable' => 'durable',
            'deadLetterExchange' => 'dead_letter_exchange',
            'deadLetterRoutingKey' => 'dead_letter_routing_key',
            'messageTtl' => 'message_ttl',
            'lazyMode' => 'lazy_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  Queue名称
    * autoDelete  是否自动删除
    * durable  是否持久化[（AMQP版本默认持久化，不涉及此字段）](tag:hws,hws_hk)
    * deadLetterExchange  死信Exchange名称，消息被拒绝或过期时将重新发布到该Exchange。
    * deadLetterRoutingKey  死信Exchange的RoutingKey，死信Exchange会发送死信消息到绑定对应RoutingKey的Queue上。
    * messageTtl  发布到Queue的消息在被丢弃之前可以存活多长时间
    * lazyMode  若设置惰性队列，请输入lazy。惰性队列模式会在磁盘上存储尽可能多的消息以减少内存使用；若不设置，队列将消息存储在内存缓存以尽可能快地传递消息。[（AMQP版本默认将消息存储到磁盘，不涉及此字段）](tag:hws,hws_hk)
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'autoDelete' => 'setAutoDelete',
            'durable' => 'setDurable',
            'deadLetterExchange' => 'setDeadLetterExchange',
            'deadLetterRoutingKey' => 'setDeadLetterRoutingKey',
            'messageTtl' => 'setMessageTtl',
            'lazyMode' => 'setLazyMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  Queue名称
    * autoDelete  是否自动删除
    * durable  是否持久化[（AMQP版本默认持久化，不涉及此字段）](tag:hws,hws_hk)
    * deadLetterExchange  死信Exchange名称，消息被拒绝或过期时将重新发布到该Exchange。
    * deadLetterRoutingKey  死信Exchange的RoutingKey，死信Exchange会发送死信消息到绑定对应RoutingKey的Queue上。
    * messageTtl  发布到Queue的消息在被丢弃之前可以存活多长时间
    * lazyMode  若设置惰性队列，请输入lazy。惰性队列模式会在磁盘上存储尽可能多的消息以减少内存使用；若不设置，队列将消息存储在内存缓存以尽可能快地传递消息。[（AMQP版本默认将消息存储到磁盘，不涉及此字段）](tag:hws,hws_hk)
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'autoDelete' => 'getAutoDelete',
            'durable' => 'getDurable',
            'deadLetterExchange' => 'getDeadLetterExchange',
            'deadLetterRoutingKey' => 'getDeadLetterRoutingKey',
            'messageTtl' => 'getMessageTtl',
            'lazyMode' => 'getLazyMode'
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
        $this->container['autoDelete'] = isset($data['autoDelete']) ? $data['autoDelete'] : null;
        $this->container['durable'] = isset($data['durable']) ? $data['durable'] : null;
        $this->container['deadLetterExchange'] = isset($data['deadLetterExchange']) ? $data['deadLetterExchange'] : null;
        $this->container['deadLetterRoutingKey'] = isset($data['deadLetterRoutingKey']) ? $data['deadLetterRoutingKey'] : null;
        $this->container['messageTtl'] = isset($data['messageTtl']) ? $data['messageTtl'] : null;
        $this->container['lazyMode'] = isset($data['lazyMode']) ? $data['lazyMode'] : null;
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
    * Gets name
    *  Queue名称
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
    * @param string|null $name Queue名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets autoDelete
    *  是否自动删除
    *
    * @return bool|null
    */
    public function getAutoDelete()
    {
        return $this->container['autoDelete'];
    }

    /**
    * Sets autoDelete
    *
    * @param bool|null $autoDelete 是否自动删除
    *
    * @return $this
    */
    public function setAutoDelete($autoDelete)
    {
        $this->container['autoDelete'] = $autoDelete;
        return $this;
    }

    /**
    * Gets durable
    *  是否持久化[（AMQP版本默认持久化，不涉及此字段）](tag:hws,hws_hk)
    *
    * @return bool|null
    */
    public function getDurable()
    {
        return $this->container['durable'];
    }

    /**
    * Sets durable
    *
    * @param bool|null $durable 是否持久化[（AMQP版本默认持久化，不涉及此字段）](tag:hws,hws_hk)
    *
    * @return $this
    */
    public function setDurable($durable)
    {
        $this->container['durable'] = $durable;
        return $this;
    }

    /**
    * Gets deadLetterExchange
    *  死信Exchange名称，消息被拒绝或过期时将重新发布到该Exchange。
    *
    * @return string|null
    */
    public function getDeadLetterExchange()
    {
        return $this->container['deadLetterExchange'];
    }

    /**
    * Sets deadLetterExchange
    *
    * @param string|null $deadLetterExchange 死信Exchange名称，消息被拒绝或过期时将重新发布到该Exchange。
    *
    * @return $this
    */
    public function setDeadLetterExchange($deadLetterExchange)
    {
        $this->container['deadLetterExchange'] = $deadLetterExchange;
        return $this;
    }

    /**
    * Gets deadLetterRoutingKey
    *  死信Exchange的RoutingKey，死信Exchange会发送死信消息到绑定对应RoutingKey的Queue上。
    *
    * @return string|null
    */
    public function getDeadLetterRoutingKey()
    {
        return $this->container['deadLetterRoutingKey'];
    }

    /**
    * Sets deadLetterRoutingKey
    *
    * @param string|null $deadLetterRoutingKey 死信Exchange的RoutingKey，死信Exchange会发送死信消息到绑定对应RoutingKey的Queue上。
    *
    * @return $this
    */
    public function setDeadLetterRoutingKey($deadLetterRoutingKey)
    {
        $this->container['deadLetterRoutingKey'] = $deadLetterRoutingKey;
        return $this;
    }

    /**
    * Gets messageTtl
    *  发布到Queue的消息在被丢弃之前可以存活多长时间
    *
    * @return int|null
    */
    public function getMessageTtl()
    {
        return $this->container['messageTtl'];
    }

    /**
    * Sets messageTtl
    *
    * @param int|null $messageTtl 发布到Queue的消息在被丢弃之前可以存活多长时间
    *
    * @return $this
    */
    public function setMessageTtl($messageTtl)
    {
        $this->container['messageTtl'] = $messageTtl;
        return $this;
    }

    /**
    * Gets lazyMode
    *  若设置惰性队列，请输入lazy。惰性队列模式会在磁盘上存储尽可能多的消息以减少内存使用；若不设置，队列将消息存储在内存缓存以尽可能快地传递消息。[（AMQP版本默认将消息存储到磁盘，不涉及此字段）](tag:hws,hws_hk)
    *
    * @return string|null
    */
    public function getLazyMode()
    {
        return $this->container['lazyMode'];
    }

    /**
    * Sets lazyMode
    *
    * @param string|null $lazyMode 若设置惰性队列，请输入lazy。惰性队列模式会在磁盘上存储尽可能多的消息以减少内存使用；若不设置，队列将消息存储在内存缓存以尽可能快地传递消息。[（AMQP版本默认将消息存储到磁盘，不涉及此字段）](tag:hws,hws_hk)
    *
    * @return $this
    */
    public function setLazyMode($lazyMode)
    {
        $this->container['lazyMode'] = $lazyMode;
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

