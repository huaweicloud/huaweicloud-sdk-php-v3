<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MigrationRabbitBindingMetadata implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MigrationRabbitBindingMetadata';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vhost  **参数解释**： vhost名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * source  **参数解释**： 消息的来源。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * destination  **参数解释**： 消息的目标。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * destinationType  **参数解释**： 目标的类型。 **约束限制**： 不涉及。 **取值范围**： - exchange：交换机。 - queue：队列。[RabbitMQ AMQP版本只支持绑定queue。](tag:hws,hws_hk) **默认取值**： 不涉及。
    * routingKey  **参数解释**： 路由键。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vhost' => 'string',
            'source' => 'string',
            'destination' => 'string',
            'destinationType' => 'string',
            'routingKey' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vhost  **参数解释**： vhost名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * source  **参数解释**： 消息的来源。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * destination  **参数解释**： 消息的目标。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * destinationType  **参数解释**： 目标的类型。 **约束限制**： 不涉及。 **取值范围**： - exchange：交换机。 - queue：队列。[RabbitMQ AMQP版本只支持绑定queue。](tag:hws,hws_hk) **默认取值**： 不涉及。
    * routingKey  **参数解释**： 路由键。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vhost' => null,
        'source' => null,
        'destination' => null,
        'destinationType' => null,
        'routingKey' => null
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
    * vhost  **参数解释**： vhost名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * source  **参数解释**： 消息的来源。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * destination  **参数解释**： 消息的目标。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * destinationType  **参数解释**： 目标的类型。 **约束限制**： 不涉及。 **取值范围**： - exchange：交换机。 - queue：队列。[RabbitMQ AMQP版本只支持绑定queue。](tag:hws,hws_hk) **默认取值**： 不涉及。
    * routingKey  **参数解释**： 路由键。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vhost' => 'vhost',
            'source' => 'source',
            'destination' => 'destination',
            'destinationType' => 'destination_type',
            'routingKey' => 'routing_key'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vhost  **参数解释**： vhost名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * source  **参数解释**： 消息的来源。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * destination  **参数解释**： 消息的目标。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * destinationType  **参数解释**： 目标的类型。 **约束限制**： 不涉及。 **取值范围**： - exchange：交换机。 - queue：队列。[RabbitMQ AMQP版本只支持绑定queue。](tag:hws,hws_hk) **默认取值**： 不涉及。
    * routingKey  **参数解释**： 路由键。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'vhost' => 'setVhost',
            'source' => 'setSource',
            'destination' => 'setDestination',
            'destinationType' => 'setDestinationType',
            'routingKey' => 'setRoutingKey'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vhost  **参数解释**： vhost名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * source  **参数解释**： 消息的来源。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * destination  **参数解释**： 消息的目标。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * destinationType  **参数解释**： 目标的类型。 **约束限制**： 不涉及。 **取值范围**： - exchange：交换机。 - queue：队列。[RabbitMQ AMQP版本只支持绑定queue。](tag:hws,hws_hk) **默认取值**： 不涉及。
    * routingKey  **参数解释**： 路由键。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'vhost' => 'getVhost',
            'source' => 'getSource',
            'destination' => 'getDestination',
            'destinationType' => 'getDestinationType',
            'routingKey' => 'getRoutingKey'
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
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
        $this->container['destinationType'] = isset($data['destinationType']) ? $data['destinationType'] : null;
        $this->container['routingKey'] = isset($data['routingKey']) ? $data['routingKey'] : null;
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
    *  **参数解释**： vhost名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $vhost **参数解释**： vhost名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setVhost($vhost)
    {
        $this->container['vhost'] = $vhost;
        return $this;
    }

    /**
    * Gets source
    *  **参数解释**： 消息的来源。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param string|null $source **参数解释**： 消息的来源。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets destination
    *  **参数解释**： 消息的目标。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
    * Sets destination
    *
    * @param string|null $destination **参数解释**： 消息的目标。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setDestination($destination)
    {
        $this->container['destination'] = $destination;
        return $this;
    }

    /**
    * Gets destinationType
    *  **参数解释**： 目标的类型。 **约束限制**： 不涉及。 **取值范围**： - exchange：交换机。 - queue：队列。[RabbitMQ AMQP版本只支持绑定queue。](tag:hws,hws_hk) **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getDestinationType()
    {
        return $this->container['destinationType'];
    }

    /**
    * Sets destinationType
    *
    * @param string|null $destinationType **参数解释**： 目标的类型。 **约束限制**： 不涉及。 **取值范围**： - exchange：交换机。 - queue：队列。[RabbitMQ AMQP版本只支持绑定queue。](tag:hws,hws_hk) **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setDestinationType($destinationType)
    {
        $this->container['destinationType'] = $destinationType;
        return $this;
    }

    /**
    * Gets routingKey
    *  **参数解释**： 路由键。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getRoutingKey()
    {
        return $this->container['routingKey'];
    }

    /**
    * Sets routingKey
    *
    * @param string|null $routingKey **参数解释**： 路由键。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setRoutingKey($routingKey)
    {
        $this->container['routingKey'] = $routingKey;
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

