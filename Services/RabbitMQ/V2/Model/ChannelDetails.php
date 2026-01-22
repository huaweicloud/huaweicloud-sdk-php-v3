<?php

namespace HuaweiCloud\SDK\RabbitMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChannelDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChannelDetails';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**： channel信息，包括客户端IP:Port到服务端IP:Port(channel_id)。 **取值范围**： 不涉及。
    * number  **参数解释**： channel数量。 **取值范围**： 不涉及。
    * user  **参数解释**： 消费者用户名，在开启ACL访问控制后返回真实用户名，未开启ACL时返回null。 **取值范围**： 不涉及。
    * connectionName  **参数解释**： connection信息，包括客户端IP:Port到服务端IP:Port。 **取值范围**： 不涉及。
    * peerHost  **参数解释**： 连接的消费者IP。 **取值范围**： 不涉及。
    * peerPort  **参数解释**： 连接的消费者进程端口号。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'number' => 'int',
            'user' => 'string',
            'connectionName' => 'string',
            'peerHost' => 'string',
            'peerPort' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**： channel信息，包括客户端IP:Port到服务端IP:Port(channel_id)。 **取值范围**： 不涉及。
    * number  **参数解释**： channel数量。 **取值范围**： 不涉及。
    * user  **参数解释**： 消费者用户名，在开启ACL访问控制后返回真实用户名，未开启ACL时返回null。 **取值范围**： 不涉及。
    * connectionName  **参数解释**： connection信息，包括客户端IP:Port到服务端IP:Port。 **取值范围**： 不涉及。
    * peerHost  **参数解释**： 连接的消费者IP。 **取值范围**： 不涉及。
    * peerPort  **参数解释**： 连接的消费者进程端口号。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'number' => 'int32',
        'user' => null,
        'connectionName' => null,
        'peerHost' => null,
        'peerPort' => 'int32'
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
    * name  **参数解释**： channel信息，包括客户端IP:Port到服务端IP:Port(channel_id)。 **取值范围**： 不涉及。
    * number  **参数解释**： channel数量。 **取值范围**： 不涉及。
    * user  **参数解释**： 消费者用户名，在开启ACL访问控制后返回真实用户名，未开启ACL时返回null。 **取值范围**： 不涉及。
    * connectionName  **参数解释**： connection信息，包括客户端IP:Port到服务端IP:Port。 **取值范围**： 不涉及。
    * peerHost  **参数解释**： 连接的消费者IP。 **取值范围**： 不涉及。
    * peerPort  **参数解释**： 连接的消费者进程端口号。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'number' => 'number',
            'user' => 'user',
            'connectionName' => 'connection_name',
            'peerHost' => 'peer_host',
            'peerPort' => 'peer_port'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**： channel信息，包括客户端IP:Port到服务端IP:Port(channel_id)。 **取值范围**： 不涉及。
    * number  **参数解释**： channel数量。 **取值范围**： 不涉及。
    * user  **参数解释**： 消费者用户名，在开启ACL访问控制后返回真实用户名，未开启ACL时返回null。 **取值范围**： 不涉及。
    * connectionName  **参数解释**： connection信息，包括客户端IP:Port到服务端IP:Port。 **取值范围**： 不涉及。
    * peerHost  **参数解释**： 连接的消费者IP。 **取值范围**： 不涉及。
    * peerPort  **参数解释**： 连接的消费者进程端口号。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'number' => 'setNumber',
            'user' => 'setUser',
            'connectionName' => 'setConnectionName',
            'peerHost' => 'setPeerHost',
            'peerPort' => 'setPeerPort'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**： channel信息，包括客户端IP:Port到服务端IP:Port(channel_id)。 **取值范围**： 不涉及。
    * number  **参数解释**： channel数量。 **取值范围**： 不涉及。
    * user  **参数解释**： 消费者用户名，在开启ACL访问控制后返回真实用户名，未开启ACL时返回null。 **取值范围**： 不涉及。
    * connectionName  **参数解释**： connection信息，包括客户端IP:Port到服务端IP:Port。 **取值范围**： 不涉及。
    * peerHost  **参数解释**： 连接的消费者IP。 **取值范围**： 不涉及。
    * peerPort  **参数解释**： 连接的消费者进程端口号。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'number' => 'getNumber',
            'user' => 'getUser',
            'connectionName' => 'getConnectionName',
            'peerHost' => 'getPeerHost',
            'peerPort' => 'getPeerPort'
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
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['connectionName'] = isset($data['connectionName']) ? $data['connectionName'] : null;
        $this->container['peerHost'] = isset($data['peerHost']) ? $data['peerHost'] : null;
        $this->container['peerPort'] = isset($data['peerPort']) ? $data['peerPort'] : null;
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
    *  **参数解释**： channel信息，包括客户端IP:Port到服务端IP:Port(channel_id)。 **取值范围**： 不涉及。
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
    * @param string|null $name **参数解释**： channel信息，包括客户端IP:Port到服务端IP:Port(channel_id)。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets number
    *  **参数解释**： channel数量。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
    * Sets number
    *
    * @param int|null $number **参数解释**： channel数量。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets user
    *  **参数解释**： 消费者用户名，在开启ACL访问控制后返回真实用户名，未开启ACL时返回null。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param string|null $user **参数解释**： 消费者用户名，在开启ACL访问控制后返回真实用户名，未开启ACL时返回null。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets connectionName
    *  **参数解释**： connection信息，包括客户端IP:Port到服务端IP:Port。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getConnectionName()
    {
        return $this->container['connectionName'];
    }

    /**
    * Sets connectionName
    *
    * @param string|null $connectionName **参数解释**： connection信息，包括客户端IP:Port到服务端IP:Port。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setConnectionName($connectionName)
    {
        $this->container['connectionName'] = $connectionName;
        return $this;
    }

    /**
    * Gets peerHost
    *  **参数解释**： 连接的消费者IP。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getPeerHost()
    {
        return $this->container['peerHost'];
    }

    /**
    * Sets peerHost
    *
    * @param string|null $peerHost **参数解释**： 连接的消费者IP。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPeerHost($peerHost)
    {
        $this->container['peerHost'] = $peerHost;
        return $this;
    }

    /**
    * Gets peerPort
    *  **参数解释**： 连接的消费者进程端口号。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getPeerPort()
    {
        return $this->container['peerPort'];
    }

    /**
    * Sets peerPort
    *
    * @param int|null $peerPort **参数解释**： 连接的消费者进程端口号。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPeerPort($peerPort)
    {
        $this->container['peerPort'] = $peerPort;
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

