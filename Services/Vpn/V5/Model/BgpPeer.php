<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BgpPeer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BgpPeer';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * peerIpAddress  对端IP地址
    * peerAsn  对端AS号
    * state  状态
    * stateDuration  状态周期
    * numReceivedRoutes  接收到的路由数量
    * numMessageReceived  接收到的消息数量
    * numMessageSent  已发送的消息数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'peerIpAddress' => 'string',
            'peerAsn' => 'int',
            'state' => 'string',
            'stateDuration' => 'string',
            'numReceivedRoutes' => 'int',
            'numMessageReceived' => 'int',
            'numMessageSent' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * peerIpAddress  对端IP地址
    * peerAsn  对端AS号
    * state  状态
    * stateDuration  状态周期
    * numReceivedRoutes  接收到的路由数量
    * numMessageReceived  接收到的消息数量
    * numMessageSent  已发送的消息数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'peerIpAddress' => null,
        'peerAsn' => 'int64',
        'state' => null,
        'stateDuration' => null,
        'numReceivedRoutes' => null,
        'numMessageReceived' => null,
        'numMessageSent' => null
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
    * peerIpAddress  对端IP地址
    * peerAsn  对端AS号
    * state  状态
    * stateDuration  状态周期
    * numReceivedRoutes  接收到的路由数量
    * numMessageReceived  接收到的消息数量
    * numMessageSent  已发送的消息数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'peerIpAddress' => 'peer_ip_address',
            'peerAsn' => 'peer_asn',
            'state' => 'state',
            'stateDuration' => 'state_duration',
            'numReceivedRoutes' => 'num_received_routes',
            'numMessageReceived' => 'num_message_received',
            'numMessageSent' => 'num_message_sent'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * peerIpAddress  对端IP地址
    * peerAsn  对端AS号
    * state  状态
    * stateDuration  状态周期
    * numReceivedRoutes  接收到的路由数量
    * numMessageReceived  接收到的消息数量
    * numMessageSent  已发送的消息数量
    *
    * @var string[]
    */
    protected static $setters = [
            'peerIpAddress' => 'setPeerIpAddress',
            'peerAsn' => 'setPeerAsn',
            'state' => 'setState',
            'stateDuration' => 'setStateDuration',
            'numReceivedRoutes' => 'setNumReceivedRoutes',
            'numMessageReceived' => 'setNumMessageReceived',
            'numMessageSent' => 'setNumMessageSent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * peerIpAddress  对端IP地址
    * peerAsn  对端AS号
    * state  状态
    * stateDuration  状态周期
    * numReceivedRoutes  接收到的路由数量
    * numMessageReceived  接收到的消息数量
    * numMessageSent  已发送的消息数量
    *
    * @var string[]
    */
    protected static $getters = [
            'peerIpAddress' => 'getPeerIpAddress',
            'peerAsn' => 'getPeerAsn',
            'state' => 'getState',
            'stateDuration' => 'getStateDuration',
            'numReceivedRoutes' => 'getNumReceivedRoutes',
            'numMessageReceived' => 'getNumMessageReceived',
            'numMessageSent' => 'getNumMessageSent'
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
        $this->container['peerIpAddress'] = isset($data['peerIpAddress']) ? $data['peerIpAddress'] : null;
        $this->container['peerAsn'] = isset($data['peerAsn']) ? $data['peerAsn'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['stateDuration'] = isset($data['stateDuration']) ? $data['stateDuration'] : null;
        $this->container['numReceivedRoutes'] = isset($data['numReceivedRoutes']) ? $data['numReceivedRoutes'] : null;
        $this->container['numMessageReceived'] = isset($data['numMessageReceived']) ? $data['numMessageReceived'] : null;
        $this->container['numMessageSent'] = isset($data['numMessageSent']) ? $data['numMessageSent'] : null;
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
    * Gets peerIpAddress
    *  对端IP地址
    *
    * @return string|null
    */
    public function getPeerIpAddress()
    {
        return $this->container['peerIpAddress'];
    }

    /**
    * Sets peerIpAddress
    *
    * @param string|null $peerIpAddress 对端IP地址
    *
    * @return $this
    */
    public function setPeerIpAddress($peerIpAddress)
    {
        $this->container['peerIpAddress'] = $peerIpAddress;
        return $this;
    }

    /**
    * Gets peerAsn
    *  对端AS号
    *
    * @return int|null
    */
    public function getPeerAsn()
    {
        return $this->container['peerAsn'];
    }

    /**
    * Sets peerAsn
    *
    * @param int|null $peerAsn 对端AS号
    *
    * @return $this
    */
    public function setPeerAsn($peerAsn)
    {
        $this->container['peerAsn'] = $peerAsn;
        return $this;
    }

    /**
    * Gets state
    *  状态
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets stateDuration
    *  状态周期
    *
    * @return string|null
    */
    public function getStateDuration()
    {
        return $this->container['stateDuration'];
    }

    /**
    * Sets stateDuration
    *
    * @param string|null $stateDuration 状态周期
    *
    * @return $this
    */
    public function setStateDuration($stateDuration)
    {
        $this->container['stateDuration'] = $stateDuration;
        return $this;
    }

    /**
    * Gets numReceivedRoutes
    *  接收到的路由数量
    *
    * @return int|null
    */
    public function getNumReceivedRoutes()
    {
        return $this->container['numReceivedRoutes'];
    }

    /**
    * Sets numReceivedRoutes
    *
    * @param int|null $numReceivedRoutes 接收到的路由数量
    *
    * @return $this
    */
    public function setNumReceivedRoutes($numReceivedRoutes)
    {
        $this->container['numReceivedRoutes'] = $numReceivedRoutes;
        return $this;
    }

    /**
    * Gets numMessageReceived
    *  接收到的消息数量
    *
    * @return int|null
    */
    public function getNumMessageReceived()
    {
        return $this->container['numMessageReceived'];
    }

    /**
    * Sets numMessageReceived
    *
    * @param int|null $numMessageReceived 接收到的消息数量
    *
    * @return $this
    */
    public function setNumMessageReceived($numMessageReceived)
    {
        $this->container['numMessageReceived'] = $numMessageReceived;
        return $this;
    }

    /**
    * Gets numMessageSent
    *  已发送的消息数量
    *
    * @return int|null
    */
    public function getNumMessageSent()
    {
        return $this->container['numMessageSent'];
    }

    /**
    * Sets numMessageSent
    *
    * @param int|null $numMessageSent 已发送的消息数量
    *
    * @return $this
    */
    public function setNumMessageSent($numMessageSent)
    {
        $this->container['numMessageSent'] = $numMessageSent;
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

