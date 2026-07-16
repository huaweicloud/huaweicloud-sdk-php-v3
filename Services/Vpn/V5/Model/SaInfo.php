<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SaInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SaInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  网段协商ID
    * sourceIpCidr  源IP网段
    * destIpCidr  目的IP网段
    * packetsSent  发送包
    * packetsRecv  接收包
    * trafficSent  发送流量(Byte)
    * trafficRecv  接收流量(Byte)
    * collectedAt  数据收集时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'sourceIpCidr' => 'string',
            'destIpCidr' => 'string',
            'packetsSent' => 'float',
            'packetsRecv' => 'float',
            'trafficSent' => 'float',
            'trafficRecv' => 'float',
            'collectedAt' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  网段协商ID
    * sourceIpCidr  源IP网段
    * destIpCidr  目的IP网段
    * packetsSent  发送包
    * packetsRecv  接收包
    * trafficSent  发送流量(Byte)
    * trafficRecv  接收流量(Byte)
    * collectedAt  数据收集时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'sourceIpCidr' => null,
        'destIpCidr' => null,
        'packetsSent' => null,
        'packetsRecv' => null,
        'trafficSent' => null,
        'trafficRecv' => null,
        'collectedAt' => 'date-time'
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
    * id  网段协商ID
    * sourceIpCidr  源IP网段
    * destIpCidr  目的IP网段
    * packetsSent  发送包
    * packetsRecv  接收包
    * trafficSent  发送流量(Byte)
    * trafficRecv  接收流量(Byte)
    * collectedAt  数据收集时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'sourceIpCidr' => 'source_ip_cidr',
            'destIpCidr' => 'dest_ip_cidr',
            'packetsSent' => 'packets_sent',
            'packetsRecv' => 'packets_recv',
            'trafficSent' => 'traffic_sent',
            'trafficRecv' => 'traffic_recv',
            'collectedAt' => 'collected_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  网段协商ID
    * sourceIpCidr  源IP网段
    * destIpCidr  目的IP网段
    * packetsSent  发送包
    * packetsRecv  接收包
    * trafficSent  发送流量(Byte)
    * trafficRecv  接收流量(Byte)
    * collectedAt  数据收集时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'sourceIpCidr' => 'setSourceIpCidr',
            'destIpCidr' => 'setDestIpCidr',
            'packetsSent' => 'setPacketsSent',
            'packetsRecv' => 'setPacketsRecv',
            'trafficSent' => 'setTrafficSent',
            'trafficRecv' => 'setTrafficRecv',
            'collectedAt' => 'setCollectedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  网段协商ID
    * sourceIpCidr  源IP网段
    * destIpCidr  目的IP网段
    * packetsSent  发送包
    * packetsRecv  接收包
    * trafficSent  发送流量(Byte)
    * trafficRecv  接收流量(Byte)
    * collectedAt  数据收集时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'sourceIpCidr' => 'getSourceIpCidr',
            'destIpCidr' => 'getDestIpCidr',
            'packetsSent' => 'getPacketsSent',
            'packetsRecv' => 'getPacketsRecv',
            'trafficSent' => 'getTrafficSent',
            'trafficRecv' => 'getTrafficRecv',
            'collectedAt' => 'getCollectedAt'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['sourceIpCidr'] = isset($data['sourceIpCidr']) ? $data['sourceIpCidr'] : null;
        $this->container['destIpCidr'] = isset($data['destIpCidr']) ? $data['destIpCidr'] : null;
        $this->container['packetsSent'] = isset($data['packetsSent']) ? $data['packetsSent'] : null;
        $this->container['packetsRecv'] = isset($data['packetsRecv']) ? $data['packetsRecv'] : null;
        $this->container['trafficSent'] = isset($data['trafficSent']) ? $data['trafficSent'] : null;
        $this->container['trafficRecv'] = isset($data['trafficRecv']) ? $data['trafficRecv'] : null;
        $this->container['collectedAt'] = isset($data['collectedAt']) ? $data['collectedAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sourceIpCidr']) && (mb_strlen($this->container['sourceIpCidr']) > 32)) {
                $invalidProperties[] = "invalid value for 'sourceIpCidr', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['sourceIpCidr']) && (mb_strlen($this->container['sourceIpCidr']) < 1)) {
                $invalidProperties[] = "invalid value for 'sourceIpCidr', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['destIpCidr']) && (mb_strlen($this->container['destIpCidr']) > 32)) {
                $invalidProperties[] = "invalid value for 'destIpCidr', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['destIpCidr']) && (mb_strlen($this->container['destIpCidr']) < 1)) {
                $invalidProperties[] = "invalid value for 'destIpCidr', the character length must be bigger than or equal to 1.";
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
    * Gets id
    *  网段协商ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 网段协商ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets sourceIpCidr
    *  源IP网段
    *
    * @return string|null
    */
    public function getSourceIpCidr()
    {
        return $this->container['sourceIpCidr'];
    }

    /**
    * Sets sourceIpCidr
    *
    * @param string|null $sourceIpCidr 源IP网段
    *
    * @return $this
    */
    public function setSourceIpCidr($sourceIpCidr)
    {
        $this->container['sourceIpCidr'] = $sourceIpCidr;
        return $this;
    }

    /**
    * Gets destIpCidr
    *  目的IP网段
    *
    * @return string|null
    */
    public function getDestIpCidr()
    {
        return $this->container['destIpCidr'];
    }

    /**
    * Sets destIpCidr
    *
    * @param string|null $destIpCidr 目的IP网段
    *
    * @return $this
    */
    public function setDestIpCidr($destIpCidr)
    {
        $this->container['destIpCidr'] = $destIpCidr;
        return $this;
    }

    /**
    * Gets packetsSent
    *  发送包
    *
    * @return float|null
    */
    public function getPacketsSent()
    {
        return $this->container['packetsSent'];
    }

    /**
    * Sets packetsSent
    *
    * @param float|null $packetsSent 发送包
    *
    * @return $this
    */
    public function setPacketsSent($packetsSent)
    {
        $this->container['packetsSent'] = $packetsSent;
        return $this;
    }

    /**
    * Gets packetsRecv
    *  接收包
    *
    * @return float|null
    */
    public function getPacketsRecv()
    {
        return $this->container['packetsRecv'];
    }

    /**
    * Sets packetsRecv
    *
    * @param float|null $packetsRecv 接收包
    *
    * @return $this
    */
    public function setPacketsRecv($packetsRecv)
    {
        $this->container['packetsRecv'] = $packetsRecv;
        return $this;
    }

    /**
    * Gets trafficSent
    *  发送流量(Byte)
    *
    * @return float|null
    */
    public function getTrafficSent()
    {
        return $this->container['trafficSent'];
    }

    /**
    * Sets trafficSent
    *
    * @param float|null $trafficSent 发送流量(Byte)
    *
    * @return $this
    */
    public function setTrafficSent($trafficSent)
    {
        $this->container['trafficSent'] = $trafficSent;
        return $this;
    }

    /**
    * Gets trafficRecv
    *  接收流量(Byte)
    *
    * @return float|null
    */
    public function getTrafficRecv()
    {
        return $this->container['trafficRecv'];
    }

    /**
    * Sets trafficRecv
    *
    * @param float|null $trafficRecv 接收流量(Byte)
    *
    * @return $this
    */
    public function setTrafficRecv($trafficRecv)
    {
        $this->container['trafficRecv'] = $trafficRecv;
        return $this;
    }

    /**
    * Gets collectedAt
    *  数据收集时间
    *
    * @return \DateTime|null
    */
    public function getCollectedAt()
    {
        return $this->container['collectedAt'];
    }

    /**
    * Sets collectedAt
    *
    * @param \DateTime|null $collectedAt 数据收集时间
    *
    * @return $this
    */
    public function setCollectedAt($collectedAt)
    {
        $this->container['collectedAt'] = $collectedAt;
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

