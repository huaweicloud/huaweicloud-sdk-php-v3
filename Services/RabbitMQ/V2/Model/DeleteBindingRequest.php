<?php

namespace HuaweiCloud\SDK\RabbitMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteBindingRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteBindingRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID
    * vhost  Vhost名称
    * exchange  Exchange名称
    * destinationType  绑定目标端类型，Exchange或Queue（AMQP版本只支持Queue绑定类型）
    * destination  绑定的目标端名称
    * propertiesKey  绑定路由键，经过URL转译后routing_key，可通过调用[查询Exchange绑定列表](ListBindings.xml)或者[查询指定Queue详情](ShowQueueDetails.xml)接口的响应信息获取。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'vhost' => 'string',
            'exchange' => 'string',
            'destinationType' => 'string',
            'destination' => 'string',
            'propertiesKey' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID
    * vhost  Vhost名称
    * exchange  Exchange名称
    * destinationType  绑定目标端类型，Exchange或Queue（AMQP版本只支持Queue绑定类型）
    * destination  绑定的目标端名称
    * propertiesKey  绑定路由键，经过URL转译后routing_key，可通过调用[查询Exchange绑定列表](ListBindings.xml)或者[查询指定Queue详情](ShowQueueDetails.xml)接口的响应信息获取。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'vhost' => null,
        'exchange' => null,
        'destinationType' => null,
        'destination' => null,
        'propertiesKey' => null
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
    * instanceId  实例ID
    * vhost  Vhost名称
    * exchange  Exchange名称
    * destinationType  绑定目标端类型，Exchange或Queue（AMQP版本只支持Queue绑定类型）
    * destination  绑定的目标端名称
    * propertiesKey  绑定路由键，经过URL转译后routing_key，可通过调用[查询Exchange绑定列表](ListBindings.xml)或者[查询指定Queue详情](ShowQueueDetails.xml)接口的响应信息获取。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'vhost' => 'vhost',
            'exchange' => 'exchange',
            'destinationType' => 'destination_type',
            'destination' => 'destination',
            'propertiesKey' => 'properties_key'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID
    * vhost  Vhost名称
    * exchange  Exchange名称
    * destinationType  绑定目标端类型，Exchange或Queue（AMQP版本只支持Queue绑定类型）
    * destination  绑定的目标端名称
    * propertiesKey  绑定路由键，经过URL转译后routing_key，可通过调用[查询Exchange绑定列表](ListBindings.xml)或者[查询指定Queue详情](ShowQueueDetails.xml)接口的响应信息获取。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'vhost' => 'setVhost',
            'exchange' => 'setExchange',
            'destinationType' => 'setDestinationType',
            'destination' => 'setDestination',
            'propertiesKey' => 'setPropertiesKey'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID
    * vhost  Vhost名称
    * exchange  Exchange名称
    * destinationType  绑定目标端类型，Exchange或Queue（AMQP版本只支持Queue绑定类型）
    * destination  绑定的目标端名称
    * propertiesKey  绑定路由键，经过URL转译后routing_key，可通过调用[查询Exchange绑定列表](ListBindings.xml)或者[查询指定Queue详情](ShowQueueDetails.xml)接口的响应信息获取。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'vhost' => 'getVhost',
            'exchange' => 'getExchange',
            'destinationType' => 'getDestinationType',
            'destination' => 'getDestination',
            'propertiesKey' => 'getPropertiesKey'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['vhost'] = isset($data['vhost']) ? $data['vhost'] : null;
        $this->container['exchange'] = isset($data['exchange']) ? $data['exchange'] : null;
        $this->container['destinationType'] = isset($data['destinationType']) ? $data['destinationType'] : null;
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
        $this->container['propertiesKey'] = isset($data['propertiesKey']) ? $data['propertiesKey'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['vhost'] === null) {
            $invalidProperties[] = "'vhost' can't be null";
        }
        if ($this->container['exchange'] === null) {
            $invalidProperties[] = "'exchange' can't be null";
        }
        if ($this->container['destinationType'] === null) {
            $invalidProperties[] = "'destinationType' can't be null";
        }
        if ($this->container['destination'] === null) {
            $invalidProperties[] = "'destination' can't be null";
        }
        if ($this->container['propertiesKey'] === null) {
            $invalidProperties[] = "'propertiesKey' can't be null";
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
    * Gets instanceId
    *  实例ID
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets vhost
    *  Vhost名称
    *
    * @return string
    */
    public function getVhost()
    {
        return $this->container['vhost'];
    }

    /**
    * Sets vhost
    *
    * @param string $vhost Vhost名称
    *
    * @return $this
    */
    public function setVhost($vhost)
    {
        $this->container['vhost'] = $vhost;
        return $this;
    }

    /**
    * Gets exchange
    *  Exchange名称
    *
    * @return string
    */
    public function getExchange()
    {
        return $this->container['exchange'];
    }

    /**
    * Sets exchange
    *
    * @param string $exchange Exchange名称
    *
    * @return $this
    */
    public function setExchange($exchange)
    {
        $this->container['exchange'] = $exchange;
        return $this;
    }

    /**
    * Gets destinationType
    *  绑定目标端类型，Exchange或Queue（AMQP版本只支持Queue绑定类型）
    *
    * @return string
    */
    public function getDestinationType()
    {
        return $this->container['destinationType'];
    }

    /**
    * Sets destinationType
    *
    * @param string $destinationType 绑定目标端类型，Exchange或Queue（AMQP版本只支持Queue绑定类型）
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
    *  绑定的目标端名称
    *
    * @return string
    */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
    * Sets destination
    *
    * @param string $destination 绑定的目标端名称
    *
    * @return $this
    */
    public function setDestination($destination)
    {
        $this->container['destination'] = $destination;
        return $this;
    }

    /**
    * Gets propertiesKey
    *  绑定路由键，经过URL转译后routing_key，可通过调用[查询Exchange绑定列表](ListBindings.xml)或者[查询指定Queue详情](ShowQueueDetails.xml)接口的响应信息获取。
    *
    * @return string
    */
    public function getPropertiesKey()
    {
        return $this->container['propertiesKey'];
    }

    /**
    * Sets propertiesKey
    *
    * @param string $propertiesKey 绑定路由键，经过URL转译后routing_key，可通过调用[查询Exchange绑定列表](ListBindings.xml)或者[查询指定Queue详情](ShowQueueDetails.xml)接口的响应信息获取。
    *
    * @return $this
    */
    public function setPropertiesKey($propertiesKey)
    {
        $this->container['propertiesKey'] = $propertiesKey;
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

