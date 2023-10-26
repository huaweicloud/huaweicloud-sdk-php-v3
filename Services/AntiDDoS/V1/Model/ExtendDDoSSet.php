<?php

namespace HuaweiCloud\SDK\AntiDDoS\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExtendDDoSSet implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExtendDDoSSet';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * setId  配置分段ID
    * newConnectionLimited  单一源IP新建连接个数
    * totalConnectionLimited  单一源IP连接数总个数
    * httpPacketPerSecond  每秒HTTP请求数（个/s）阈值
    * trafficPerSecond  每秒流量（Mbit/s）阈值
    * packetPerSecond  每秒报文数（个/s）阈值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'setId' => 'int',
            'newConnectionLimited' => 'int',
            'totalConnectionLimited' => 'int',
            'httpPacketPerSecond' => 'int',
            'trafficPerSecond' => 'int',
            'packetPerSecond' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * setId  配置分段ID
    * newConnectionLimited  单一源IP新建连接个数
    * totalConnectionLimited  单一源IP连接数总个数
    * httpPacketPerSecond  每秒HTTP请求数（个/s）阈值
    * trafficPerSecond  每秒流量（Mbit/s）阈值
    * packetPerSecond  每秒报文数（个/s）阈值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'setId' => 'int64',
        'newConnectionLimited' => 'int64',
        'totalConnectionLimited' => 'int64',
        'httpPacketPerSecond' => 'int64',
        'trafficPerSecond' => 'int64',
        'packetPerSecond' => 'int64'
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
    * setId  配置分段ID
    * newConnectionLimited  单一源IP新建连接个数
    * totalConnectionLimited  单一源IP连接数总个数
    * httpPacketPerSecond  每秒HTTP请求数（个/s）阈值
    * trafficPerSecond  每秒流量（Mbit/s）阈值
    * packetPerSecond  每秒报文数（个/s）阈值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'setId' => 'SetID',
            'newConnectionLimited' => 'new_connection_limited',
            'totalConnectionLimited' => 'total_connection_limited',
            'httpPacketPerSecond' => 'http_packet_per_second',
            'trafficPerSecond' => 'traffic_per_second',
            'packetPerSecond' => 'packet_per_second'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * setId  配置分段ID
    * newConnectionLimited  单一源IP新建连接个数
    * totalConnectionLimited  单一源IP连接数总个数
    * httpPacketPerSecond  每秒HTTP请求数（个/s）阈值
    * trafficPerSecond  每秒流量（Mbit/s）阈值
    * packetPerSecond  每秒报文数（个/s）阈值
    *
    * @var string[]
    */
    protected static $setters = [
            'setId' => 'setSetId',
            'newConnectionLimited' => 'setNewConnectionLimited',
            'totalConnectionLimited' => 'setTotalConnectionLimited',
            'httpPacketPerSecond' => 'setHttpPacketPerSecond',
            'trafficPerSecond' => 'setTrafficPerSecond',
            'packetPerSecond' => 'setPacketPerSecond'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * setId  配置分段ID
    * newConnectionLimited  单一源IP新建连接个数
    * totalConnectionLimited  单一源IP连接数总个数
    * httpPacketPerSecond  每秒HTTP请求数（个/s）阈值
    * trafficPerSecond  每秒流量（Mbit/s）阈值
    * packetPerSecond  每秒报文数（个/s）阈值
    *
    * @var string[]
    */
    protected static $getters = [
            'setId' => 'getSetId',
            'newConnectionLimited' => 'getNewConnectionLimited',
            'totalConnectionLimited' => 'getTotalConnectionLimited',
            'httpPacketPerSecond' => 'getHttpPacketPerSecond',
            'trafficPerSecond' => 'getTrafficPerSecond',
            'packetPerSecond' => 'getPacketPerSecond'
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
        $this->container['setId'] = isset($data['setId']) ? $data['setId'] : null;
        $this->container['newConnectionLimited'] = isset($data['newConnectionLimited']) ? $data['newConnectionLimited'] : null;
        $this->container['totalConnectionLimited'] = isset($data['totalConnectionLimited']) ? $data['totalConnectionLimited'] : null;
        $this->container['httpPacketPerSecond'] = isset($data['httpPacketPerSecond']) ? $data['httpPacketPerSecond'] : null;
        $this->container['trafficPerSecond'] = isset($data['trafficPerSecond']) ? $data['trafficPerSecond'] : null;
        $this->container['packetPerSecond'] = isset($data['packetPerSecond']) ? $data['packetPerSecond'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['setId'] === null) {
            $invalidProperties[] = "'setId' can't be null";
        }
        if ($this->container['newConnectionLimited'] === null) {
            $invalidProperties[] = "'newConnectionLimited' can't be null";
        }
        if ($this->container['totalConnectionLimited'] === null) {
            $invalidProperties[] = "'totalConnectionLimited' can't be null";
        }
        if ($this->container['httpPacketPerSecond'] === null) {
            $invalidProperties[] = "'httpPacketPerSecond' can't be null";
        }
        if ($this->container['trafficPerSecond'] === null) {
            $invalidProperties[] = "'trafficPerSecond' can't be null";
        }
        if ($this->container['packetPerSecond'] === null) {
            $invalidProperties[] = "'packetPerSecond' can't be null";
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
    * Gets setId
    *  配置分段ID
    *
    * @return int
    */
    public function getSetId()
    {
        return $this->container['setId'];
    }

    /**
    * Sets setId
    *
    * @param int $setId 配置分段ID
    *
    * @return $this
    */
    public function setSetId($setId)
    {
        $this->container['setId'] = $setId;
        return $this;
    }

    /**
    * Gets newConnectionLimited
    *  单一源IP新建连接个数
    *
    * @return int
    */
    public function getNewConnectionLimited()
    {
        return $this->container['newConnectionLimited'];
    }

    /**
    * Sets newConnectionLimited
    *
    * @param int $newConnectionLimited 单一源IP新建连接个数
    *
    * @return $this
    */
    public function setNewConnectionLimited($newConnectionLimited)
    {
        $this->container['newConnectionLimited'] = $newConnectionLimited;
        return $this;
    }

    /**
    * Gets totalConnectionLimited
    *  单一源IP连接数总个数
    *
    * @return int
    */
    public function getTotalConnectionLimited()
    {
        return $this->container['totalConnectionLimited'];
    }

    /**
    * Sets totalConnectionLimited
    *
    * @param int $totalConnectionLimited 单一源IP连接数总个数
    *
    * @return $this
    */
    public function setTotalConnectionLimited($totalConnectionLimited)
    {
        $this->container['totalConnectionLimited'] = $totalConnectionLimited;
        return $this;
    }

    /**
    * Gets httpPacketPerSecond
    *  每秒HTTP请求数（个/s）阈值
    *
    * @return int
    */
    public function getHttpPacketPerSecond()
    {
        return $this->container['httpPacketPerSecond'];
    }

    /**
    * Sets httpPacketPerSecond
    *
    * @param int $httpPacketPerSecond 每秒HTTP请求数（个/s）阈值
    *
    * @return $this
    */
    public function setHttpPacketPerSecond($httpPacketPerSecond)
    {
        $this->container['httpPacketPerSecond'] = $httpPacketPerSecond;
        return $this;
    }

    /**
    * Gets trafficPerSecond
    *  每秒流量（Mbit/s）阈值
    *
    * @return int
    */
    public function getTrafficPerSecond()
    {
        return $this->container['trafficPerSecond'];
    }

    /**
    * Sets trafficPerSecond
    *
    * @param int $trafficPerSecond 每秒流量（Mbit/s）阈值
    *
    * @return $this
    */
    public function setTrafficPerSecond($trafficPerSecond)
    {
        $this->container['trafficPerSecond'] = $trafficPerSecond;
        return $this;
    }

    /**
    * Gets packetPerSecond
    *  每秒报文数（个/s）阈值
    *
    * @return int
    */
    public function getPacketPerSecond()
    {
        return $this->container['packetPerSecond'];
    }

    /**
    * Sets packetPerSecond
    *
    * @param int $packetPerSecond 每秒报文数（个/s）阈值
    *
    * @return $this
    */
    public function setPacketPerSecond($packetPerSecond)
    {
        $this->container['packetPerSecond'] = $packetPerSecond;
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

