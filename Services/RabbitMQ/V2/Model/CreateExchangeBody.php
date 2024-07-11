<?php

namespace HuaweiCloud\SDK\RabbitMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateExchangeBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateExchangeBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  Exchange名称
    * type  类型（direct、fanout、topic、headers）
    * durable  是否持久化[（AMQP版本默认持久化，不涉及此参数）](tag:hws,hws_hk)。
    * autoDelete  是否自动删除
    * internal  内部Exchange[（AMQP版本不支持内部Exchange，不涉及此参数）](tag:hws,hws_hk)。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'type' => 'string',
            'durable' => 'bool',
            'autoDelete' => 'bool',
            'internal' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  Exchange名称
    * type  类型（direct、fanout、topic、headers）
    * durable  是否持久化[（AMQP版本默认持久化，不涉及此参数）](tag:hws,hws_hk)。
    * autoDelete  是否自动删除
    * internal  内部Exchange[（AMQP版本不支持内部Exchange，不涉及此参数）](tag:hws,hws_hk)。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'type' => null,
        'durable' => null,
        'autoDelete' => null,
        'internal' => null
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
    * name  Exchange名称
    * type  类型（direct、fanout、topic、headers）
    * durable  是否持久化[（AMQP版本默认持久化，不涉及此参数）](tag:hws,hws_hk)。
    * autoDelete  是否自动删除
    * internal  内部Exchange[（AMQP版本不支持内部Exchange，不涉及此参数）](tag:hws,hws_hk)。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'type' => 'type',
            'durable' => 'durable',
            'autoDelete' => 'auto_delete',
            'internal' => 'internal'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  Exchange名称
    * type  类型（direct、fanout、topic、headers）
    * durable  是否持久化[（AMQP版本默认持久化，不涉及此参数）](tag:hws,hws_hk)。
    * autoDelete  是否自动删除
    * internal  内部Exchange[（AMQP版本不支持内部Exchange，不涉及此参数）](tag:hws,hws_hk)。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'type' => 'setType',
            'durable' => 'setDurable',
            'autoDelete' => 'setAutoDelete',
            'internal' => 'setInternal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  Exchange名称
    * type  类型（direct、fanout、topic、headers）
    * durable  是否持久化[（AMQP版本默认持久化，不涉及此参数）](tag:hws,hws_hk)。
    * autoDelete  是否自动删除
    * internal  内部Exchange[（AMQP版本不支持内部Exchange，不涉及此参数）](tag:hws,hws_hk)。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'type' => 'getType',
            'durable' => 'getDurable',
            'autoDelete' => 'getAutoDelete',
            'internal' => 'getInternal'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['durable'] = isset($data['durable']) ? $data['durable'] : null;
        $this->container['autoDelete'] = isset($data['autoDelete']) ? $data['autoDelete'] : null;
        $this->container['internal'] = isset($data['internal']) ? $data['internal'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['autoDelete'] === null) {
            $invalidProperties[] = "'autoDelete' can't be null";
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
    * Gets name
    *  Exchange名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name Exchange名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  类型（direct、fanout、topic、headers）
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 类型（direct、fanout、topic、headers）
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets durable
    *  是否持久化[（AMQP版本默认持久化，不涉及此参数）](tag:hws,hws_hk)。
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
    * @param bool|null $durable 是否持久化[（AMQP版本默认持久化，不涉及此参数）](tag:hws,hws_hk)。
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
    * @return bool
    */
    public function getAutoDelete()
    {
        return $this->container['autoDelete'];
    }

    /**
    * Sets autoDelete
    *
    * @param bool $autoDelete 是否自动删除
    *
    * @return $this
    */
    public function setAutoDelete($autoDelete)
    {
        $this->container['autoDelete'] = $autoDelete;
        return $this;
    }

    /**
    * Gets internal
    *  内部Exchange[（AMQP版本不支持内部Exchange，不涉及此参数）](tag:hws,hws_hk)。
    *
    * @return bool|null
    */
    public function getInternal()
    {
        return $this->container['internal'];
    }

    /**
    * Sets internal
    *
    * @param bool|null $internal 内部Exchange[（AMQP版本不支持内部Exchange，不涉及此参数）](tag:hws,hws_hk)。
    *
    * @return $this
    */
    public function setInternal($internal)
    {
        $this->container['internal'] = $internal;
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

