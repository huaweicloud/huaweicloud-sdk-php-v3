<?php

namespace HuaweiCloud\SDK\RabbitMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateBindingResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateBindingResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * source  绑定对象
    * destinationType  绑定Exchange或者Queue
    * destination  要投递的Exchange或Queue名称
    * routingKey  绑定键值，用于告知Exchange应该将消息投递到哪些Queue中
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'source' => 'string',
            'destinationType' => 'string',
            'destination' => 'string',
            'routingKey' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * source  绑定对象
    * destinationType  绑定Exchange或者Queue
    * destination  要投递的Exchange或Queue名称
    * routingKey  绑定键值，用于告知Exchange应该将消息投递到哪些Queue中
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'source' => null,
        'destinationType' => null,
        'destination' => null,
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
    * source  绑定对象
    * destinationType  绑定Exchange或者Queue
    * destination  要投递的Exchange或Queue名称
    * routingKey  绑定键值，用于告知Exchange应该将消息投递到哪些Queue中
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'source' => 'source',
            'destinationType' => 'destination_type',
            'destination' => 'destination',
            'routingKey' => 'routing_key'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * source  绑定对象
    * destinationType  绑定Exchange或者Queue
    * destination  要投递的Exchange或Queue名称
    * routingKey  绑定键值，用于告知Exchange应该将消息投递到哪些Queue中
    *
    * @var string[]
    */
    protected static $setters = [
            'source' => 'setSource',
            'destinationType' => 'setDestinationType',
            'destination' => 'setDestination',
            'routingKey' => 'setRoutingKey'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * source  绑定对象
    * destinationType  绑定Exchange或者Queue
    * destination  要投递的Exchange或Queue名称
    * routingKey  绑定键值，用于告知Exchange应该将消息投递到哪些Queue中
    *
    * @var string[]
    */
    protected static $getters = [
            'source' => 'getSource',
            'destinationType' => 'getDestinationType',
            'destination' => 'getDestination',
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
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['destinationType'] = isset($data['destinationType']) ? $data['destinationType'] : null;
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
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
    * Gets source
    *  绑定对象
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
    * @param string|null $source 绑定对象
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets destinationType
    *  绑定Exchange或者Queue
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
    * @param string|null $destinationType 绑定Exchange或者Queue
    *
    * @return $this
    */
    public function setDestinationType($destinationType)
    {
        $this->container['destinationType'] = $destinationType;
        return $this;
    }

    /**
    * Gets destination
    *  要投递的Exchange或Queue名称
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
    * @param string|null $destination 要投递的Exchange或Queue名称
    *
    * @return $this
    */
    public function setDestination($destination)
    {
        $this->container['destination'] = $destination;
        return $this;
    }

    /**
    * Gets routingKey
    *  绑定键值，用于告知Exchange应该将消息投递到哪些Queue中
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
    * @param string|null $routingKey 绑定键值，用于告知Exchange应该将消息投递到哪些Queue中
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
