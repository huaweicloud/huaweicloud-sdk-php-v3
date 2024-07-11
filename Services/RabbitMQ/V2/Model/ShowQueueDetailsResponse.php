<?php

namespace HuaweiCloud\SDK\RabbitMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowQueueDetailsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowQueueDetailsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vhost  Queue所属Vhost名称
    * name  Queue名称
    * durable  是否持久化
    * autoDelete  是否自动删除
    * messages  待消费消息数
    * consumers  连接的消费者数
    * policy  策略[（AMQP版本不支持policy，不涉及此参数）](tag:hws,hws_hk)
    * arguments  arguments
    * consumerDetails  订阅该Queue的消费者信息。
    * queueBindings  以此Queue为目标的绑定信息列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vhost' => 'string',
            'name' => 'string',
            'durable' => 'bool',
            'autoDelete' => 'bool',
            'messages' => 'int',
            'consumers' => 'int',
            'policy' => 'string',
            'arguments' => '\HuaweiCloud\SDK\RabbitMQ\V2\Model\QueueArguments',
            'consumerDetails' => '\HuaweiCloud\SDK\RabbitMQ\V2\Model\ConsumerDetails[]',
            'queueBindings' => '\HuaweiCloud\SDK\RabbitMQ\V2\Model\BindingsDetails[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vhost  Queue所属Vhost名称
    * name  Queue名称
    * durable  是否持久化
    * autoDelete  是否自动删除
    * messages  待消费消息数
    * consumers  连接的消费者数
    * policy  策略[（AMQP版本不支持policy，不涉及此参数）](tag:hws,hws_hk)
    * arguments  arguments
    * consumerDetails  订阅该Queue的消费者信息。
    * queueBindings  以此Queue为目标的绑定信息列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vhost' => null,
        'name' => null,
        'durable' => null,
        'autoDelete' => null,
        'messages' => 'int32',
        'consumers' => 'int32',
        'policy' => null,
        'arguments' => null,
        'consumerDetails' => null,
        'queueBindings' => null
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
    * vhost  Queue所属Vhost名称
    * name  Queue名称
    * durable  是否持久化
    * autoDelete  是否自动删除
    * messages  待消费消息数
    * consumers  连接的消费者数
    * policy  策略[（AMQP版本不支持policy，不涉及此参数）](tag:hws,hws_hk)
    * arguments  arguments
    * consumerDetails  订阅该Queue的消费者信息。
    * queueBindings  以此Queue为目标的绑定信息列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vhost' => 'vhost',
            'name' => 'name',
            'durable' => 'durable',
            'autoDelete' => 'auto_delete',
            'messages' => 'messages',
            'consumers' => 'consumers',
            'policy' => 'policy',
            'arguments' => 'arguments',
            'consumerDetails' => 'consumer_details',
            'queueBindings' => 'queue_bindings'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vhost  Queue所属Vhost名称
    * name  Queue名称
    * durable  是否持久化
    * autoDelete  是否自动删除
    * messages  待消费消息数
    * consumers  连接的消费者数
    * policy  策略[（AMQP版本不支持policy，不涉及此参数）](tag:hws,hws_hk)
    * arguments  arguments
    * consumerDetails  订阅该Queue的消费者信息。
    * queueBindings  以此Queue为目标的绑定信息列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'vhost' => 'setVhost',
            'name' => 'setName',
            'durable' => 'setDurable',
            'autoDelete' => 'setAutoDelete',
            'messages' => 'setMessages',
            'consumers' => 'setConsumers',
            'policy' => 'setPolicy',
            'arguments' => 'setArguments',
            'consumerDetails' => 'setConsumerDetails',
            'queueBindings' => 'setQueueBindings'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vhost  Queue所属Vhost名称
    * name  Queue名称
    * durable  是否持久化
    * autoDelete  是否自动删除
    * messages  待消费消息数
    * consumers  连接的消费者数
    * policy  策略[（AMQP版本不支持policy，不涉及此参数）](tag:hws,hws_hk)
    * arguments  arguments
    * consumerDetails  订阅该Queue的消费者信息。
    * queueBindings  以此Queue为目标的绑定信息列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'vhost' => 'getVhost',
            'name' => 'getName',
            'durable' => 'getDurable',
            'autoDelete' => 'getAutoDelete',
            'messages' => 'getMessages',
            'consumers' => 'getConsumers',
            'policy' => 'getPolicy',
            'arguments' => 'getArguments',
            'consumerDetails' => 'getConsumerDetails',
            'queueBindings' => 'getQueueBindings'
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
        $this->container['vhost'] = isset($data['vhost']) ? $data['vhost'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['durable'] = isset($data['durable']) ? $data['durable'] : null;
        $this->container['autoDelete'] = isset($data['autoDelete']) ? $data['autoDelete'] : null;
        $this->container['messages'] = isset($data['messages']) ? $data['messages'] : null;
        $this->container['consumers'] = isset($data['consumers']) ? $data['consumers'] : null;
        $this->container['policy'] = isset($data['policy']) ? $data['policy'] : null;
        $this->container['arguments'] = isset($data['arguments']) ? $data['arguments'] : null;
        $this->container['consumerDetails'] = isset($data['consumerDetails']) ? $data['consumerDetails'] : null;
        $this->container['queueBindings'] = isset($data['queueBindings']) ? $data['queueBindings'] : null;
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
    * Gets vhost
    *  Queue所属Vhost名称
    *
    * @return string|null
    */
    public function getVhost()
    {
        return $this->container['vhost'];
    }

    /**
    * Sets vhost
    *
    * @param string|null $vhost Queue所属Vhost名称
    *
    * @return $this
    */
    public function setVhost($vhost)
    {
        $this->container['vhost'] = $vhost;
        return $this;
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
    * Gets durable
    *  是否持久化
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
    * @param bool|null $durable 是否持久化
    *
    * @return $this
    */
    public function setDurable($durable)
    {
        $this->container['durable'] = $durable;
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
    * Gets messages
    *  待消费消息数
    *
    * @return int|null
    */
    public function getMessages()
    {
        return $this->container['messages'];
    }

    /**
    * Sets messages
    *
    * @param int|null $messages 待消费消息数
    *
    * @return $this
    */
    public function setMessages($messages)
    {
        $this->container['messages'] = $messages;
        return $this;
    }

    /**
    * Gets consumers
    *  连接的消费者数
    *
    * @return int|null
    */
    public function getConsumers()
    {
        return $this->container['consumers'];
    }

    /**
    * Sets consumers
    *
    * @param int|null $consumers 连接的消费者数
    *
    * @return $this
    */
    public function setConsumers($consumers)
    {
        $this->container['consumers'] = $consumers;
        return $this;
    }

    /**
    * Gets policy
    *  策略[（AMQP版本不支持policy，不涉及此参数）](tag:hws,hws_hk)
    *
    * @return string|null
    */
    public function getPolicy()
    {
        return $this->container['policy'];
    }

    /**
    * Sets policy
    *
    * @param string|null $policy 策略[（AMQP版本不支持policy，不涉及此参数）](tag:hws,hws_hk)
    *
    * @return $this
    */
    public function setPolicy($policy)
    {
        $this->container['policy'] = $policy;
        return $this;
    }

    /**
    * Gets arguments
    *  arguments
    *
    * @return \HuaweiCloud\SDK\RabbitMQ\V2\Model\QueueArguments|null
    */
    public function getArguments()
    {
        return $this->container['arguments'];
    }

    /**
    * Sets arguments
    *
    * @param \HuaweiCloud\SDK\RabbitMQ\V2\Model\QueueArguments|null $arguments arguments
    *
    * @return $this
    */
    public function setArguments($arguments)
    {
        $this->container['arguments'] = $arguments;
        return $this;
    }

    /**
    * Gets consumerDetails
    *  订阅该Queue的消费者信息。
    *
    * @return \HuaweiCloud\SDK\RabbitMQ\V2\Model\ConsumerDetails[]|null
    */
    public function getConsumerDetails()
    {
        return $this->container['consumerDetails'];
    }

    /**
    * Sets consumerDetails
    *
    * @param \HuaweiCloud\SDK\RabbitMQ\V2\Model\ConsumerDetails[]|null $consumerDetails 订阅该Queue的消费者信息。
    *
    * @return $this
    */
    public function setConsumerDetails($consumerDetails)
    {
        $this->container['consumerDetails'] = $consumerDetails;
        return $this;
    }

    /**
    * Gets queueBindings
    *  以此Queue为目标的绑定信息列表。
    *
    * @return \HuaweiCloud\SDK\RabbitMQ\V2\Model\BindingsDetails[]|null
    */
    public function getQueueBindings()
    {
        return $this->container['queueBindings'];
    }

    /**
    * Sets queueBindings
    *
    * @param \HuaweiCloud\SDK\RabbitMQ\V2\Model\BindingsDetails[]|null $queueBindings 以此Queue为目标的绑定信息列表。
    *
    * @return $this
    */
    public function setQueueBindings($queueBindings)
    {
        $this->container['queueBindings'] = $queueBindings;
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

