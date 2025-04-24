<?php

namespace HuaweiCloud\SDK\RabbitMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExchangeDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExchangeDetails';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * durable  是否持久化
    * default  是否是默认Exchange
    * internal  是否是内部Exchange
    * arguments  参数列表
    * name  Exchange名称
    * autoDelete  是否自动删除
    * type  Exchange类型
    * vhost  所属Vhost
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'durable' => 'bool',
            'default' => 'bool',
            'internal' => 'bool',
            'arguments' => 'object',
            'name' => 'string',
            'autoDelete' => 'bool',
            'type' => 'string',
            'vhost' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * durable  是否持久化
    * default  是否是默认Exchange
    * internal  是否是内部Exchange
    * arguments  参数列表
    * name  Exchange名称
    * autoDelete  是否自动删除
    * type  Exchange类型
    * vhost  所属Vhost
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'durable' => null,
        'default' => null,
        'internal' => null,
        'arguments' => null,
        'name' => null,
        'autoDelete' => null,
        'type' => null,
        'vhost' => null
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
    * durable  是否持久化
    * default  是否是默认Exchange
    * internal  是否是内部Exchange
    * arguments  参数列表
    * name  Exchange名称
    * autoDelete  是否自动删除
    * type  Exchange类型
    * vhost  所属Vhost
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'durable' => 'durable',
            'default' => 'default',
            'internal' => 'internal',
            'arguments' => 'arguments',
            'name' => 'name',
            'autoDelete' => 'auto_delete',
            'type' => 'type',
            'vhost' => 'vhost'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * durable  是否持久化
    * default  是否是默认Exchange
    * internal  是否是内部Exchange
    * arguments  参数列表
    * name  Exchange名称
    * autoDelete  是否自动删除
    * type  Exchange类型
    * vhost  所属Vhost
    *
    * @var string[]
    */
    protected static $setters = [
            'durable' => 'setDurable',
            'default' => 'setDefault',
            'internal' => 'setInternal',
            'arguments' => 'setArguments',
            'name' => 'setName',
            'autoDelete' => 'setAutoDelete',
            'type' => 'setType',
            'vhost' => 'setVhost'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * durable  是否持久化
    * default  是否是默认Exchange
    * internal  是否是内部Exchange
    * arguments  参数列表
    * name  Exchange名称
    * autoDelete  是否自动删除
    * type  Exchange类型
    * vhost  所属Vhost
    *
    * @var string[]
    */
    protected static $getters = [
            'durable' => 'getDurable',
            'default' => 'getDefault',
            'internal' => 'getInternal',
            'arguments' => 'getArguments',
            'name' => 'getName',
            'autoDelete' => 'getAutoDelete',
            'type' => 'getType',
            'vhost' => 'getVhost'
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
        $this->container['durable'] = isset($data['durable']) ? $data['durable'] : null;
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
        $this->container['internal'] = isset($data['internal']) ? $data['internal'] : null;
        $this->container['arguments'] = isset($data['arguments']) ? $data['arguments'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['autoDelete'] = isset($data['autoDelete']) ? $data['autoDelete'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['vhost'] = isset($data['vhost']) ? $data['vhost'] : null;
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
    * Gets default
    *  是否是默认Exchange
    *
    * @return bool|null
    */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
    * Sets default
    *
    * @param bool|null $default 是否是默认Exchange
    *
    * @return $this
    */
    public function setDefault($default)
    {
        $this->container['default'] = $default;
        return $this;
    }

    /**
    * Gets internal
    *  是否是内部Exchange
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
    * @param bool|null $internal 是否是内部Exchange
    *
    * @return $this
    */
    public function setInternal($internal)
    {
        $this->container['internal'] = $internal;
        return $this;
    }

    /**
    * Gets arguments
    *  参数列表
    *
    * @return object|null
    */
    public function getArguments()
    {
        return $this->container['arguments'];
    }

    /**
    * Sets arguments
    *
    * @param object|null $arguments 参数列表
    *
    * @return $this
    */
    public function setArguments($arguments)
    {
        $this->container['arguments'] = $arguments;
        return $this;
    }

    /**
    * Gets name
    *  Exchange名称
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
    * @param string|null $name Exchange名称
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
    * Gets type
    *  Exchange类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type Exchange类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets vhost
    *  所属Vhost
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
    * @param string|null $vhost 所属Vhost
    *
    * @return $this
    */
    public function setVhost($vhost)
    {
        $this->container['vhost'] = $vhost;
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

