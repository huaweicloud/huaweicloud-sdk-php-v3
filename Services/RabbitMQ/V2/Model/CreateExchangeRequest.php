<?php

namespace HuaweiCloud\SDK\RabbitMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateExchangeRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateExchangeRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID
    * vhost  vhost名称，名称中包含/时，需要将/替换为__F_SLASH__，否则会调用失败。例如：Vhost名称为/test，入参值为__F_SLASH__test。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'vhost' => 'string',
            'body' => '\HuaweiCloud\SDK\RabbitMQ\V2\Model\CreateExchangeBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID
    * vhost  vhost名称，名称中包含/时，需要将/替换为__F_SLASH__，否则会调用失败。例如：Vhost名称为/test，入参值为__F_SLASH__test。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'vhost' => null,
        'body' => null
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
    * vhost  vhost名称，名称中包含/时，需要将/替换为__F_SLASH__，否则会调用失败。例如：Vhost名称为/test，入参值为__F_SLASH__test。
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'vhost' => 'vhost',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID
    * vhost  vhost名称，名称中包含/时，需要将/替换为__F_SLASH__，否则会调用失败。例如：Vhost名称为/test，入参值为__F_SLASH__test。
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'vhost' => 'setVhost',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID
    * vhost  vhost名称，名称中包含/时，需要将/替换为__F_SLASH__，否则会调用失败。例如：Vhost名称为/test，入参值为__F_SLASH__test。
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'vhost' => 'getVhost',
            'body' => 'getBody'
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
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
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
    *  vhost名称，名称中包含/时，需要将/替换为__F_SLASH__，否则会调用失败。例如：Vhost名称为/test，入参值为__F_SLASH__test。
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
    * @param string $vhost vhost名称，名称中包含/时，需要将/替换为__F_SLASH__，否则会调用失败。例如：Vhost名称为/test，入参值为__F_SLASH__test。
    *
    * @return $this
    */
    public function setVhost($vhost)
    {
        $this->container['vhost'] = $vhost;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\RabbitMQ\V2\Model\CreateExchangeBody|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\RabbitMQ\V2\Model\CreateExchangeBody|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

