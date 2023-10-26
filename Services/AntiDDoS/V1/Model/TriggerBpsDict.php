<?php

namespace HuaweiCloud\SDK\AntiDDoS\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TriggerBpsDict implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TriggerBpsDict';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * trafficPosId  流量分段ID
    * trafficPerSecond  每秒流量（Mbit/s）阈值
    * packetPerSecond  每秒报文数（个/s）阈值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'trafficPosId' => 'int',
            'trafficPerSecond' => 'int',
            'packetPerSecond' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * trafficPosId  流量分段ID
    * trafficPerSecond  每秒流量（Mbit/s）阈值
    * packetPerSecond  每秒报文数（个/s）阈值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'trafficPosId' => 'int64',
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
    * trafficPosId  流量分段ID
    * trafficPerSecond  每秒流量（Mbit/s）阈值
    * packetPerSecond  每秒报文数（个/s）阈值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'trafficPosId' => 'traffic_pos_id',
            'trafficPerSecond' => 'traffic_per_second',
            'packetPerSecond' => 'packet_per_second'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * trafficPosId  流量分段ID
    * trafficPerSecond  每秒流量（Mbit/s）阈值
    * packetPerSecond  每秒报文数（个/s）阈值
    *
    * @var string[]
    */
    protected static $setters = [
            'trafficPosId' => 'setTrafficPosId',
            'trafficPerSecond' => 'setTrafficPerSecond',
            'packetPerSecond' => 'setPacketPerSecond'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * trafficPosId  流量分段ID
    * trafficPerSecond  每秒流量（Mbit/s）阈值
    * packetPerSecond  每秒报文数（个/s）阈值
    *
    * @var string[]
    */
    protected static $getters = [
            'trafficPosId' => 'getTrafficPosId',
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
        $this->container['trafficPosId'] = isset($data['trafficPosId']) ? $data['trafficPosId'] : null;
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
        if ($this->container['trafficPosId'] === null) {
            $invalidProperties[] = "'trafficPosId' can't be null";
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
    * Gets trafficPosId
    *  流量分段ID
    *
    * @return int
    */
    public function getTrafficPosId()
    {
        return $this->container['trafficPosId'];
    }

    /**
    * Sets trafficPosId
    *
    * @param int $trafficPosId 流量分段ID
    *
    * @return $this
    */
    public function setTrafficPosId($trafficPosId)
    {
        $this->container['trafficPosId'] = $trafficPosId;
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

