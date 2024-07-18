<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Connection implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Connection';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * connectionId  连接ID
    * clientVirtualIp  客户端虚拟IP
    * clientIp  客户端IP
    * clientUserName  客户端用户名称
    * inboundPackets  入网包数
    * outboundPackets  出网包数
    * inboundBytes  入网字节数
    * outboundBytes  出网字节数
    * connectionEstablishedTime  连接建立时间
    * timestamp  时间戳
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'connectionId' => 'string',
            'clientVirtualIp' => 'string',
            'clientIp' => 'string',
            'clientUserName' => 'string',
            'inboundPackets' => 'int',
            'outboundPackets' => 'int',
            'inboundBytes' => 'int',
            'outboundBytes' => 'int',
            'connectionEstablishedTime' => '\DateTime',
            'timestamp' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * connectionId  连接ID
    * clientVirtualIp  客户端虚拟IP
    * clientIp  客户端IP
    * clientUserName  客户端用户名称
    * inboundPackets  入网包数
    * outboundPackets  出网包数
    * inboundBytes  入网字节数
    * outboundBytes  出网字节数
    * connectionEstablishedTime  连接建立时间
    * timestamp  时间戳
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'connectionId' => null,
        'clientVirtualIp' => null,
        'clientIp' => null,
        'clientUserName' => null,
        'inboundPackets' => 'int64',
        'outboundPackets' => 'int64',
        'inboundBytes' => 'int64',
        'outboundBytes' => 'int64',
        'connectionEstablishedTime' => 'date-time',
        'timestamp' => 'date-time'
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
    * connectionId  连接ID
    * clientVirtualIp  客户端虚拟IP
    * clientIp  客户端IP
    * clientUserName  客户端用户名称
    * inboundPackets  入网包数
    * outboundPackets  出网包数
    * inboundBytes  入网字节数
    * outboundBytes  出网字节数
    * connectionEstablishedTime  连接建立时间
    * timestamp  时间戳
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'connectionId' => 'connection_id',
            'clientVirtualIp' => 'client_virtual_ip',
            'clientIp' => 'client_ip',
            'clientUserName' => 'client_user_name',
            'inboundPackets' => 'inbound_packets',
            'outboundPackets' => 'outbound_packets',
            'inboundBytes' => 'inbound_bytes',
            'outboundBytes' => 'outbound_bytes',
            'connectionEstablishedTime' => 'connection_established_time',
            'timestamp' => 'timestamp'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * connectionId  连接ID
    * clientVirtualIp  客户端虚拟IP
    * clientIp  客户端IP
    * clientUserName  客户端用户名称
    * inboundPackets  入网包数
    * outboundPackets  出网包数
    * inboundBytes  入网字节数
    * outboundBytes  出网字节数
    * connectionEstablishedTime  连接建立时间
    * timestamp  时间戳
    *
    * @var string[]
    */
    protected static $setters = [
            'connectionId' => 'setConnectionId',
            'clientVirtualIp' => 'setClientVirtualIp',
            'clientIp' => 'setClientIp',
            'clientUserName' => 'setClientUserName',
            'inboundPackets' => 'setInboundPackets',
            'outboundPackets' => 'setOutboundPackets',
            'inboundBytes' => 'setInboundBytes',
            'outboundBytes' => 'setOutboundBytes',
            'connectionEstablishedTime' => 'setConnectionEstablishedTime',
            'timestamp' => 'setTimestamp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * connectionId  连接ID
    * clientVirtualIp  客户端虚拟IP
    * clientIp  客户端IP
    * clientUserName  客户端用户名称
    * inboundPackets  入网包数
    * outboundPackets  出网包数
    * inboundBytes  入网字节数
    * outboundBytes  出网字节数
    * connectionEstablishedTime  连接建立时间
    * timestamp  时间戳
    *
    * @var string[]
    */
    protected static $getters = [
            'connectionId' => 'getConnectionId',
            'clientVirtualIp' => 'getClientVirtualIp',
            'clientIp' => 'getClientIp',
            'clientUserName' => 'getClientUserName',
            'inboundPackets' => 'getInboundPackets',
            'outboundPackets' => 'getOutboundPackets',
            'inboundBytes' => 'getInboundBytes',
            'outboundBytes' => 'getOutboundBytes',
            'connectionEstablishedTime' => 'getConnectionEstablishedTime',
            'timestamp' => 'getTimestamp'
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
        $this->container['connectionId'] = isset($data['connectionId']) ? $data['connectionId'] : null;
        $this->container['clientVirtualIp'] = isset($data['clientVirtualIp']) ? $data['clientVirtualIp'] : null;
        $this->container['clientIp'] = isset($data['clientIp']) ? $data['clientIp'] : null;
        $this->container['clientUserName'] = isset($data['clientUserName']) ? $data['clientUserName'] : null;
        $this->container['inboundPackets'] = isset($data['inboundPackets']) ? $data['inboundPackets'] : null;
        $this->container['outboundPackets'] = isset($data['outboundPackets']) ? $data['outboundPackets'] : null;
        $this->container['inboundBytes'] = isset($data['inboundBytes']) ? $data['inboundBytes'] : null;
        $this->container['outboundBytes'] = isset($data['outboundBytes']) ? $data['outboundBytes'] : null;
        $this->container['connectionEstablishedTime'] = isset($data['connectionEstablishedTime']) ? $data['connectionEstablishedTime'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['connectionId']) && (mb_strlen($this->container['connectionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'connectionId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['clientVirtualIp']) && (mb_strlen($this->container['clientVirtualIp']) > 64)) {
                $invalidProperties[] = "invalid value for 'clientVirtualIp', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['clientIp']) && (mb_strlen($this->container['clientIp']) > 64)) {
                $invalidProperties[] = "invalid value for 'clientIp', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['clientUserName']) && (mb_strlen($this->container['clientUserName']) > 64)) {
                $invalidProperties[] = "invalid value for 'clientUserName', the character length must be smaller than or equal to 64.";
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
    * Gets connectionId
    *  连接ID
    *
    * @return string|null
    */
    public function getConnectionId()
    {
        return $this->container['connectionId'];
    }

    /**
    * Sets connectionId
    *
    * @param string|null $connectionId 连接ID
    *
    * @return $this
    */
    public function setConnectionId($connectionId)
    {
        $this->container['connectionId'] = $connectionId;
        return $this;
    }

    /**
    * Gets clientVirtualIp
    *  客户端虚拟IP
    *
    * @return string|null
    */
    public function getClientVirtualIp()
    {
        return $this->container['clientVirtualIp'];
    }

    /**
    * Sets clientVirtualIp
    *
    * @param string|null $clientVirtualIp 客户端虚拟IP
    *
    * @return $this
    */
    public function setClientVirtualIp($clientVirtualIp)
    {
        $this->container['clientVirtualIp'] = $clientVirtualIp;
        return $this;
    }

    /**
    * Gets clientIp
    *  客户端IP
    *
    * @return string|null
    */
    public function getClientIp()
    {
        return $this->container['clientIp'];
    }

    /**
    * Sets clientIp
    *
    * @param string|null $clientIp 客户端IP
    *
    * @return $this
    */
    public function setClientIp($clientIp)
    {
        $this->container['clientIp'] = $clientIp;
        return $this;
    }

    /**
    * Gets clientUserName
    *  客户端用户名称
    *
    * @return string|null
    */
    public function getClientUserName()
    {
        return $this->container['clientUserName'];
    }

    /**
    * Sets clientUserName
    *
    * @param string|null $clientUserName 客户端用户名称
    *
    * @return $this
    */
    public function setClientUserName($clientUserName)
    {
        $this->container['clientUserName'] = $clientUserName;
        return $this;
    }

    /**
    * Gets inboundPackets
    *  入网包数
    *
    * @return int|null
    */
    public function getInboundPackets()
    {
        return $this->container['inboundPackets'];
    }

    /**
    * Sets inboundPackets
    *
    * @param int|null $inboundPackets 入网包数
    *
    * @return $this
    */
    public function setInboundPackets($inboundPackets)
    {
        $this->container['inboundPackets'] = $inboundPackets;
        return $this;
    }

    /**
    * Gets outboundPackets
    *  出网包数
    *
    * @return int|null
    */
    public function getOutboundPackets()
    {
        return $this->container['outboundPackets'];
    }

    /**
    * Sets outboundPackets
    *
    * @param int|null $outboundPackets 出网包数
    *
    * @return $this
    */
    public function setOutboundPackets($outboundPackets)
    {
        $this->container['outboundPackets'] = $outboundPackets;
        return $this;
    }

    /**
    * Gets inboundBytes
    *  入网字节数
    *
    * @return int|null
    */
    public function getInboundBytes()
    {
        return $this->container['inboundBytes'];
    }

    /**
    * Sets inboundBytes
    *
    * @param int|null $inboundBytes 入网字节数
    *
    * @return $this
    */
    public function setInboundBytes($inboundBytes)
    {
        $this->container['inboundBytes'] = $inboundBytes;
        return $this;
    }

    /**
    * Gets outboundBytes
    *  出网字节数
    *
    * @return int|null
    */
    public function getOutboundBytes()
    {
        return $this->container['outboundBytes'];
    }

    /**
    * Sets outboundBytes
    *
    * @param int|null $outboundBytes 出网字节数
    *
    * @return $this
    */
    public function setOutboundBytes($outboundBytes)
    {
        $this->container['outboundBytes'] = $outboundBytes;
        return $this;
    }

    /**
    * Gets connectionEstablishedTime
    *  连接建立时间
    *
    * @return \DateTime|null
    */
    public function getConnectionEstablishedTime()
    {
        return $this->container['connectionEstablishedTime'];
    }

    /**
    * Sets connectionEstablishedTime
    *
    * @param \DateTime|null $connectionEstablishedTime 连接建立时间
    *
    * @return $this
    */
    public function setConnectionEstablishedTime($connectionEstablishedTime)
    {
        $this->container['connectionEstablishedTime'] = $connectionEstablishedTime;
        return $this;
    }

    /**
    * Gets timestamp
    *  时间戳
    *
    * @return \DateTime|null
    */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
    * Sets timestamp
    *
    * @param \DateTime|null $timestamp 时间戳
    *
    * @return $this
    */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;
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

