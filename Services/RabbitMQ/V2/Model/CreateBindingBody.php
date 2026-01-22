<?php

namespace HuaweiCloud\SDK\RabbitMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateBindingBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateBindingBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * destination  要投递的Exchange或Queue名称
    * routingKey  **参数解释**： 绑定键值，用于告知Exchange应该将消息投递到哪些Queue或Exchange中。 **约束限制**： - 不允许包含+和~。 - 最长128个字符。 - 不能包含中文。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * destinationType  **参数解释**： 绑定目标端类型。 **约束限制**： [不涉及。](tag:sbc,cmcc,tm,hk_tm,ax,hk_sbc)[AMQP版本只支持绑定Queue。](tag:hws,hws_hk,hws_eu) **取值范围**： - exchange：交换机。 - queue：队列。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'destination' => 'string',
            'routingKey' => 'string',
            'destinationType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * destination  要投递的Exchange或Queue名称
    * routingKey  **参数解释**： 绑定键值，用于告知Exchange应该将消息投递到哪些Queue或Exchange中。 **约束限制**： - 不允许包含+和~。 - 最长128个字符。 - 不能包含中文。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * destinationType  **参数解释**： 绑定目标端类型。 **约束限制**： [不涉及。](tag:sbc,cmcc,tm,hk_tm,ax,hk_sbc)[AMQP版本只支持绑定Queue。](tag:hws,hws_hk,hws_eu) **取值范围**： - exchange：交换机。 - queue：队列。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'destination' => null,
        'routingKey' => null,
        'destinationType' => null
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
    * destination  要投递的Exchange或Queue名称
    * routingKey  **参数解释**： 绑定键值，用于告知Exchange应该将消息投递到哪些Queue或Exchange中。 **约束限制**： - 不允许包含+和~。 - 最长128个字符。 - 不能包含中文。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * destinationType  **参数解释**： 绑定目标端类型。 **约束限制**： [不涉及。](tag:sbc,cmcc,tm,hk_tm,ax,hk_sbc)[AMQP版本只支持绑定Queue。](tag:hws,hws_hk,hws_eu) **取值范围**： - exchange：交换机。 - queue：队列。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'destination' => 'destination',
            'routingKey' => 'routing_key',
            'destinationType' => 'destination_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * destination  要投递的Exchange或Queue名称
    * routingKey  **参数解释**： 绑定键值，用于告知Exchange应该将消息投递到哪些Queue或Exchange中。 **约束限制**： - 不允许包含+和~。 - 最长128个字符。 - 不能包含中文。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * destinationType  **参数解释**： 绑定目标端类型。 **约束限制**： [不涉及。](tag:sbc,cmcc,tm,hk_tm,ax,hk_sbc)[AMQP版本只支持绑定Queue。](tag:hws,hws_hk,hws_eu) **取值范围**： - exchange：交换机。 - queue：队列。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'destination' => 'setDestination',
            'routingKey' => 'setRoutingKey',
            'destinationType' => 'setDestinationType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * destination  要投递的Exchange或Queue名称
    * routingKey  **参数解释**： 绑定键值，用于告知Exchange应该将消息投递到哪些Queue或Exchange中。 **约束限制**： - 不允许包含+和~。 - 最长128个字符。 - 不能包含中文。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * destinationType  **参数解释**： 绑定目标端类型。 **约束限制**： [不涉及。](tag:sbc,cmcc,tm,hk_tm,ax,hk_sbc)[AMQP版本只支持绑定Queue。](tag:hws,hws_hk,hws_eu) **取值范围**： - exchange：交换机。 - queue：队列。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'destination' => 'getDestination',
            'routingKey' => 'getRoutingKey',
            'destinationType' => 'getDestinationType'
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
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
        $this->container['routingKey'] = isset($data['routingKey']) ? $data['routingKey'] : null;
        $this->container['destinationType'] = isset($data['destinationType']) ? $data['destinationType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['destination'] === null) {
            $invalidProperties[] = "'destination' can't be null";
        }
        if ($this->container['routingKey'] === null) {
            $invalidProperties[] = "'routingKey' can't be null";
        }
        if ($this->container['destinationType'] === null) {
            $invalidProperties[] = "'destinationType' can't be null";
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
    * Gets destination
    *  要投递的Exchange或Queue名称
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
    * @param string $destination 要投递的Exchange或Queue名称
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
    *  **参数解释**： 绑定键值，用于告知Exchange应该将消息投递到哪些Queue或Exchange中。 **约束限制**： - 不允许包含+和~。 - 最长128个字符。 - 不能包含中文。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getRoutingKey()
    {
        return $this->container['routingKey'];
    }

    /**
    * Sets routingKey
    *
    * @param string $routingKey **参数解释**： 绑定键值，用于告知Exchange应该将消息投递到哪些Queue或Exchange中。 **约束限制**： - 不允许包含+和~。 - 最长128个字符。 - 不能包含中文。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setRoutingKey($routingKey)
    {
        $this->container['routingKey'] = $routingKey;
        return $this;
    }

    /**
    * Gets destinationType
    *  **参数解释**： 绑定目标端类型。 **约束限制**： [不涉及。](tag:sbc,cmcc,tm,hk_tm,ax,hk_sbc)[AMQP版本只支持绑定Queue。](tag:hws,hws_hk,hws_eu) **取值范围**： - exchange：交换机。 - queue：队列。 **默认取值**： 不涉及。
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
    * @param string $destinationType **参数解释**： 绑定目标端类型。 **约束限制**： [不涉及。](tag:sbc,cmcc,tm,hk_tm,ax,hk_sbc)[AMQP版本只支持绑定Queue。](tag:hws,hws_hk,hws_eu) **取值范围**： - exchange：交换机。 - queue：队列。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setDestinationType($destinationType)
    {
        $this->container['destinationType'] = $destinationType;
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

