<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MigrationRabbitQueueMetadata implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MigrationRabbitQueueMetadata';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vhost  **参数解释**： vhost名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * name  **参数解释**： 队列名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * durable  **参数解释**： 是否持久化。 **约束限制**： 不涉及。 **取值范围**： - true：持久化。 - false：不进行持久化。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vhost' => 'string',
            'name' => 'string',
            'durable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vhost  **参数解释**： vhost名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * name  **参数解释**： 队列名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * durable  **参数解释**： 是否持久化。 **约束限制**： 不涉及。 **取值范围**： - true：持久化。 - false：不进行持久化。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vhost' => null,
        'name' => null,
        'durable' => null
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
    * name  **参数解释**： 队列名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * durable  **参数解释**： 是否持久化。 **约束限制**： 不涉及。 **取值范围**： - true：持久化。 - false：不进行持久化。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vhost' => 'vhost',
            'name' => 'name',
            'durable' => 'durable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vhost  **参数解释**： vhost名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * name  **参数解释**： 队列名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * durable  **参数解释**： 是否持久化。 **约束限制**： 不涉及。 **取值范围**： - true：持久化。 - false：不进行持久化。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'vhost' => 'setVhost',
            'name' => 'setName',
            'durable' => 'setDurable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vhost  **参数解释**： vhost名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * name  **参数解释**： 队列名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * durable  **参数解释**： 是否持久化。 **约束限制**： 不涉及。 **取值范围**： - true：持久化。 - false：不进行持久化。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'vhost' => 'getVhost',
            'name' => 'getName',
            'durable' => 'getDurable'
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
    * Gets name
    *  **参数解释**： 队列名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $name **参数解释**： 队列名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 是否持久化。 **约束限制**： 不涉及。 **取值范围**： - true：持久化。 - false：不进行持久化。 **默认取值**： 不涉及。
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
    * @param bool|null $durable **参数解释**： 是否持久化。 **约束限制**： 不涉及。 **取值范围**： - true：持久化。 - false：不进行持久化。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setDurable($durable)
    {
        $this->container['durable'] = $durable;
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

