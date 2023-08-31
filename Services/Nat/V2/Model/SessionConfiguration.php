<?php

namespace HuaweiCloud\SDK\Nat\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SessionConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SessionConfiguration';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tcpSessionExpireTime  TCP会话过期时间。
    * udpSessionExpireTime  UDP会话过期时间。
    * icmpSessionExpireTime  ICMP会话过期时间。
    * tcpTimeWaitTime  TCP连接关闭时TIME_WAIT状态持续时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tcpSessionExpireTime' => 'int',
            'udpSessionExpireTime' => 'int',
            'icmpSessionExpireTime' => 'int',
            'tcpTimeWaitTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tcpSessionExpireTime  TCP会话过期时间。
    * udpSessionExpireTime  UDP会话过期时间。
    * icmpSessionExpireTime  ICMP会话过期时间。
    * tcpTimeWaitTime  TCP连接关闭时TIME_WAIT状态持续时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tcpSessionExpireTime' => 'int32',
        'udpSessionExpireTime' => 'int32',
        'icmpSessionExpireTime' => 'int32',
        'tcpTimeWaitTime' => 'int32'
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
    * tcpSessionExpireTime  TCP会话过期时间。
    * udpSessionExpireTime  UDP会话过期时间。
    * icmpSessionExpireTime  ICMP会话过期时间。
    * tcpTimeWaitTime  TCP连接关闭时TIME_WAIT状态持续时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tcpSessionExpireTime' => 'tcp_session_expire_time',
            'udpSessionExpireTime' => 'udp_session_expire_time',
            'icmpSessionExpireTime' => 'icmp_session_expire_time',
            'tcpTimeWaitTime' => 'tcp_time_wait_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tcpSessionExpireTime  TCP会话过期时间。
    * udpSessionExpireTime  UDP会话过期时间。
    * icmpSessionExpireTime  ICMP会话过期时间。
    * tcpTimeWaitTime  TCP连接关闭时TIME_WAIT状态持续时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'tcpSessionExpireTime' => 'setTcpSessionExpireTime',
            'udpSessionExpireTime' => 'setUdpSessionExpireTime',
            'icmpSessionExpireTime' => 'setIcmpSessionExpireTime',
            'tcpTimeWaitTime' => 'setTcpTimeWaitTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tcpSessionExpireTime  TCP会话过期时间。
    * udpSessionExpireTime  UDP会话过期时间。
    * icmpSessionExpireTime  ICMP会话过期时间。
    * tcpTimeWaitTime  TCP连接关闭时TIME_WAIT状态持续时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'tcpSessionExpireTime' => 'getTcpSessionExpireTime',
            'udpSessionExpireTime' => 'getUdpSessionExpireTime',
            'icmpSessionExpireTime' => 'getIcmpSessionExpireTime',
            'tcpTimeWaitTime' => 'getTcpTimeWaitTime'
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
        $this->container['tcpSessionExpireTime'] = isset($data['tcpSessionExpireTime']) ? $data['tcpSessionExpireTime'] : null;
        $this->container['udpSessionExpireTime'] = isset($data['udpSessionExpireTime']) ? $data['udpSessionExpireTime'] : null;
        $this->container['icmpSessionExpireTime'] = isset($data['icmpSessionExpireTime']) ? $data['icmpSessionExpireTime'] : null;
        $this->container['tcpTimeWaitTime'] = isset($data['tcpTimeWaitTime']) ? $data['tcpTimeWaitTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['tcpSessionExpireTime']) && ($this->container['tcpSessionExpireTime'] > 7200)) {
                $invalidProperties[] = "invalid value for 'tcpSessionExpireTime', must be smaller than or equal to 7200.";
            }
            if (!is_null($this->container['tcpSessionExpireTime']) && ($this->container['tcpSessionExpireTime'] < 40)) {
                $invalidProperties[] = "invalid value for 'tcpSessionExpireTime', must be bigger than or equal to 40.";
            }
            if (!is_null($this->container['udpSessionExpireTime']) && ($this->container['udpSessionExpireTime'] > 7200)) {
                $invalidProperties[] = "invalid value for 'udpSessionExpireTime', must be smaller than or equal to 7200.";
            }
            if (!is_null($this->container['udpSessionExpireTime']) && ($this->container['udpSessionExpireTime'] < 40)) {
                $invalidProperties[] = "invalid value for 'udpSessionExpireTime', must be bigger than or equal to 40.";
            }
            if (!is_null($this->container['icmpSessionExpireTime']) && ($this->container['icmpSessionExpireTime'] > 7200)) {
                $invalidProperties[] = "invalid value for 'icmpSessionExpireTime', must be smaller than or equal to 7200.";
            }
            if (!is_null($this->container['icmpSessionExpireTime']) && ($this->container['icmpSessionExpireTime'] < 10)) {
                $invalidProperties[] = "invalid value for 'icmpSessionExpireTime', must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['tcpTimeWaitTime']) && ($this->container['tcpTimeWaitTime'] > 1800)) {
                $invalidProperties[] = "invalid value for 'tcpTimeWaitTime', must be smaller than or equal to 1800.";
            }
            if (!is_null($this->container['tcpTimeWaitTime']) && ($this->container['tcpTimeWaitTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'tcpTimeWaitTime', must be bigger than or equal to 0.";
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
    * Gets tcpSessionExpireTime
    *  TCP会话过期时间。
    *
    * @return int|null
    */
    public function getTcpSessionExpireTime()
    {
        return $this->container['tcpSessionExpireTime'];
    }

    /**
    * Sets tcpSessionExpireTime
    *
    * @param int|null $tcpSessionExpireTime TCP会话过期时间。
    *
    * @return $this
    */
    public function setTcpSessionExpireTime($tcpSessionExpireTime)
    {
        $this->container['tcpSessionExpireTime'] = $tcpSessionExpireTime;
        return $this;
    }

    /**
    * Gets udpSessionExpireTime
    *  UDP会话过期时间。
    *
    * @return int|null
    */
    public function getUdpSessionExpireTime()
    {
        return $this->container['udpSessionExpireTime'];
    }

    /**
    * Sets udpSessionExpireTime
    *
    * @param int|null $udpSessionExpireTime UDP会话过期时间。
    *
    * @return $this
    */
    public function setUdpSessionExpireTime($udpSessionExpireTime)
    {
        $this->container['udpSessionExpireTime'] = $udpSessionExpireTime;
        return $this;
    }

    /**
    * Gets icmpSessionExpireTime
    *  ICMP会话过期时间。
    *
    * @return int|null
    */
    public function getIcmpSessionExpireTime()
    {
        return $this->container['icmpSessionExpireTime'];
    }

    /**
    * Sets icmpSessionExpireTime
    *
    * @param int|null $icmpSessionExpireTime ICMP会话过期时间。
    *
    * @return $this
    */
    public function setIcmpSessionExpireTime($icmpSessionExpireTime)
    {
        $this->container['icmpSessionExpireTime'] = $icmpSessionExpireTime;
        return $this;
    }

    /**
    * Gets tcpTimeWaitTime
    *  TCP连接关闭时TIME_WAIT状态持续时间。
    *
    * @return int|null
    */
    public function getTcpTimeWaitTime()
    {
        return $this->container['tcpTimeWaitTime'];
    }

    /**
    * Sets tcpTimeWaitTime
    *
    * @param int|null $tcpTimeWaitTime TCP连接关闭时TIME_WAIT状态持续时间。
    *
    * @return $this
    */
    public function setTcpTimeWaitTime($tcpTimeWaitTime)
    {
        $this->container['tcpTimeWaitTime'] = $tcpTimeWaitTime;
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

