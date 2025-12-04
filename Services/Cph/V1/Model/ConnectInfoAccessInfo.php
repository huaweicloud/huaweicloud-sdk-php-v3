<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConnectInfoAccessInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConnectInfo_access_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accessIp  云手机实例的公网访问IP
    * intranetIp  云手机实例的内网访问IP
    * accessIpv6  云手机服务器IPv6 IP
    * accessPort  云手机实例的访问端口
    * sessionId  本次接入的会话ID
    * timestamp  时间戳
    * ticket  签名令牌
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accessIp' => 'string',
            'intranetIp' => 'string',
            'accessIpv6' => 'string',
            'accessPort' => 'int',
            'sessionId' => 'string',
            'timestamp' => 'string',
            'ticket' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accessIp  云手机实例的公网访问IP
    * intranetIp  云手机实例的内网访问IP
    * accessIpv6  云手机服务器IPv6 IP
    * accessPort  云手机实例的访问端口
    * sessionId  本次接入的会话ID
    * timestamp  时间戳
    * ticket  签名令牌
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accessIp' => null,
        'intranetIp' => null,
        'accessIpv6' => null,
        'accessPort' => null,
        'sessionId' => null,
        'timestamp' => null,
        'ticket' => null
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
    * accessIp  云手机实例的公网访问IP
    * intranetIp  云手机实例的内网访问IP
    * accessIpv6  云手机服务器IPv6 IP
    * accessPort  云手机实例的访问端口
    * sessionId  本次接入的会话ID
    * timestamp  时间戳
    * ticket  签名令牌
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accessIp' => 'access_ip',
            'intranetIp' => 'intranet_ip',
            'accessIpv6' => 'access_ipv6',
            'accessPort' => 'access_port',
            'sessionId' => 'session_id',
            'timestamp' => 'timestamp',
            'ticket' => 'ticket'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accessIp  云手机实例的公网访问IP
    * intranetIp  云手机实例的内网访问IP
    * accessIpv6  云手机服务器IPv6 IP
    * accessPort  云手机实例的访问端口
    * sessionId  本次接入的会话ID
    * timestamp  时间戳
    * ticket  签名令牌
    *
    * @var string[]
    */
    protected static $setters = [
            'accessIp' => 'setAccessIp',
            'intranetIp' => 'setIntranetIp',
            'accessIpv6' => 'setAccessIpv6',
            'accessPort' => 'setAccessPort',
            'sessionId' => 'setSessionId',
            'timestamp' => 'setTimestamp',
            'ticket' => 'setTicket'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accessIp  云手机实例的公网访问IP
    * intranetIp  云手机实例的内网访问IP
    * accessIpv6  云手机服务器IPv6 IP
    * accessPort  云手机实例的访问端口
    * sessionId  本次接入的会话ID
    * timestamp  时间戳
    * ticket  签名令牌
    *
    * @var string[]
    */
    protected static $getters = [
            'accessIp' => 'getAccessIp',
            'intranetIp' => 'getIntranetIp',
            'accessIpv6' => 'getAccessIpv6',
            'accessPort' => 'getAccessPort',
            'sessionId' => 'getSessionId',
            'timestamp' => 'getTimestamp',
            'ticket' => 'getTicket'
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
        $this->container['accessIp'] = isset($data['accessIp']) ? $data['accessIp'] : null;
        $this->container['intranetIp'] = isset($data['intranetIp']) ? $data['intranetIp'] : null;
        $this->container['accessIpv6'] = isset($data['accessIpv6']) ? $data['accessIpv6'] : null;
        $this->container['accessPort'] = isset($data['accessPort']) ? $data['accessPort'] : null;
        $this->container['sessionId'] = isset($data['sessionId']) ? $data['sessionId'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['ticket'] = isset($data['ticket']) ? $data['ticket'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['accessIp']) && (mb_strlen($this->container['accessIp']) > 1024)) {
                $invalidProperties[] = "invalid value for 'accessIp', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['accessIp']) && (mb_strlen($this->container['accessIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'accessIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['intranetIp']) && (mb_strlen($this->container['intranetIp']) > 1024)) {
                $invalidProperties[] = "invalid value for 'intranetIp', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['intranetIp']) && (mb_strlen($this->container['intranetIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'intranetIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['accessIpv6']) && (mb_strlen($this->container['accessIpv6']) > 1024)) {
                $invalidProperties[] = "invalid value for 'accessIpv6', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['accessIpv6']) && (mb_strlen($this->container['accessIpv6']) < 0)) {
                $invalidProperties[] = "invalid value for 'accessIpv6', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['accessPort']) && ($this->container['accessPort'] > 8096)) {
                $invalidProperties[] = "invalid value for 'accessPort', must be smaller than or equal to 8096.";
            }
            if (!is_null($this->container['accessPort']) && ($this->container['accessPort'] < 0)) {
                $invalidProperties[] = "invalid value for 'accessPort', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sessionId']) && (mb_strlen($this->container['sessionId']) > 1024)) {
                $invalidProperties[] = "invalid value for 'sessionId', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['sessionId']) && (mb_strlen($this->container['sessionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'sessionId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['timestamp']) && (mb_strlen($this->container['timestamp']) > 1024)) {
                $invalidProperties[] = "invalid value for 'timestamp', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['timestamp']) && (mb_strlen($this->container['timestamp']) < 0)) {
                $invalidProperties[] = "invalid value for 'timestamp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ticket']) && (mb_strlen($this->container['ticket']) > 1024)) {
                $invalidProperties[] = "invalid value for 'ticket', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['ticket']) && (mb_strlen($this->container['ticket']) < 0)) {
                $invalidProperties[] = "invalid value for 'ticket', the character length must be bigger than or equal to 0.";
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
    * Gets accessIp
    *  云手机实例的公网访问IP
    *
    * @return string|null
    */
    public function getAccessIp()
    {
        return $this->container['accessIp'];
    }

    /**
    * Sets accessIp
    *
    * @param string|null $accessIp 云手机实例的公网访问IP
    *
    * @return $this
    */
    public function setAccessIp($accessIp)
    {
        $this->container['accessIp'] = $accessIp;
        return $this;
    }

    /**
    * Gets intranetIp
    *  云手机实例的内网访问IP
    *
    * @return string|null
    */
    public function getIntranetIp()
    {
        return $this->container['intranetIp'];
    }

    /**
    * Sets intranetIp
    *
    * @param string|null $intranetIp 云手机实例的内网访问IP
    *
    * @return $this
    */
    public function setIntranetIp($intranetIp)
    {
        $this->container['intranetIp'] = $intranetIp;
        return $this;
    }

    /**
    * Gets accessIpv6
    *  云手机服务器IPv6 IP
    *
    * @return string|null
    */
    public function getAccessIpv6()
    {
        return $this->container['accessIpv6'];
    }

    /**
    * Sets accessIpv6
    *
    * @param string|null $accessIpv6 云手机服务器IPv6 IP
    *
    * @return $this
    */
    public function setAccessIpv6($accessIpv6)
    {
        $this->container['accessIpv6'] = $accessIpv6;
        return $this;
    }

    /**
    * Gets accessPort
    *  云手机实例的访问端口
    *
    * @return int|null
    */
    public function getAccessPort()
    {
        return $this->container['accessPort'];
    }

    /**
    * Sets accessPort
    *
    * @param int|null $accessPort 云手机实例的访问端口
    *
    * @return $this
    */
    public function setAccessPort($accessPort)
    {
        $this->container['accessPort'] = $accessPort;
        return $this;
    }

    /**
    * Gets sessionId
    *  本次接入的会话ID
    *
    * @return string|null
    */
    public function getSessionId()
    {
        return $this->container['sessionId'];
    }

    /**
    * Sets sessionId
    *
    * @param string|null $sessionId 本次接入的会话ID
    *
    * @return $this
    */
    public function setSessionId($sessionId)
    {
        $this->container['sessionId'] = $sessionId;
        return $this;
    }

    /**
    * Gets timestamp
    *  时间戳
    *
    * @return string|null
    */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
    * Sets timestamp
    *
    * @param string|null $timestamp 时间戳
    *
    * @return $this
    */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;
        return $this;
    }

    /**
    * Gets ticket
    *  签名令牌
    *
    * @return string|null
    */
    public function getTicket()
    {
        return $this->container['ticket'];
    }

    /**
    * Sets ticket
    *
    * @param string|null $ticket 签名令牌
    *
    * @return $this
    */
    public function setTicket($ticket)
    {
        $this->container['ticket'] = $ticket;
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

