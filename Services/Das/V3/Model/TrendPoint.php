<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TrendPoint implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TrendPoint';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * timestamp  时间点（毫秒时间戳）
    * size  key大小（size/storage维度返回）
    * qps  QPS值（qps维度返回）
    * trafficIn  入口流量（traffic维度返回，字节/秒）
    * trafficOut  出口流量（traffic维度返回，字节/秒）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'timestamp' => 'int',
            'size' => 'int',
            'qps' => 'int',
            'trafficIn' => 'int',
            'trafficOut' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * timestamp  时间点（毫秒时间戳）
    * size  key大小（size/storage维度返回）
    * qps  QPS值（qps维度返回）
    * trafficIn  入口流量（traffic维度返回，字节/秒）
    * trafficOut  出口流量（traffic维度返回，字节/秒）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'timestamp' => 'int64',
        'size' => 'int64',
        'qps' => 'int64',
        'trafficIn' => 'int64',
        'trafficOut' => 'int64'
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
    * timestamp  时间点（毫秒时间戳）
    * size  key大小（size/storage维度返回）
    * qps  QPS值（qps维度返回）
    * trafficIn  入口流量（traffic维度返回，字节/秒）
    * trafficOut  出口流量（traffic维度返回，字节/秒）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'timestamp' => 'timestamp',
            'size' => 'size',
            'qps' => 'qps',
            'trafficIn' => 'traffic_in',
            'trafficOut' => 'traffic_out'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * timestamp  时间点（毫秒时间戳）
    * size  key大小（size/storage维度返回）
    * qps  QPS值（qps维度返回）
    * trafficIn  入口流量（traffic维度返回，字节/秒）
    * trafficOut  出口流量（traffic维度返回，字节/秒）
    *
    * @var string[]
    */
    protected static $setters = [
            'timestamp' => 'setTimestamp',
            'size' => 'setSize',
            'qps' => 'setQps',
            'trafficIn' => 'setTrafficIn',
            'trafficOut' => 'setTrafficOut'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * timestamp  时间点（毫秒时间戳）
    * size  key大小（size/storage维度返回）
    * qps  QPS值（qps维度返回）
    * trafficIn  入口流量（traffic维度返回，字节/秒）
    * trafficOut  出口流量（traffic维度返回，字节/秒）
    *
    * @var string[]
    */
    protected static $getters = [
            'timestamp' => 'getTimestamp',
            'size' => 'getSize',
            'qps' => 'getQps',
            'trafficIn' => 'getTrafficIn',
            'trafficOut' => 'getTrafficOut'
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
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['qps'] = isset($data['qps']) ? $data['qps'] : null;
        $this->container['trafficIn'] = isset($data['trafficIn']) ? $data['trafficIn'] : null;
        $this->container['trafficOut'] = isset($data['trafficOut']) ? $data['trafficOut'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['timestamp']) && ($this->container['timestamp'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'timestamp', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['timestamp']) && ($this->container['timestamp'] < 0)) {
                $invalidProperties[] = "invalid value for 'timestamp', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] < 0)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['qps']) && ($this->container['qps'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'qps', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['qps']) && ($this->container['qps'] < 0)) {
                $invalidProperties[] = "invalid value for 'qps', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['trafficIn']) && ($this->container['trafficIn'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'trafficIn', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['trafficIn']) && ($this->container['trafficIn'] < 0)) {
                $invalidProperties[] = "invalid value for 'trafficIn', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['trafficOut']) && ($this->container['trafficOut'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'trafficOut', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['trafficOut']) && ($this->container['trafficOut'] < 0)) {
                $invalidProperties[] = "invalid value for 'trafficOut', must be bigger than or equal to 0.";
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
    * Gets timestamp
    *  时间点（毫秒时间戳）
    *
    * @return int|null
    */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
    * Sets timestamp
    *
    * @param int|null $timestamp 时间点（毫秒时间戳）
    *
    * @return $this
    */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;
        return $this;
    }

    /**
    * Gets size
    *  key大小（size/storage维度返回）
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size key大小（size/storage维度返回）
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets qps
    *  QPS值（qps维度返回）
    *
    * @return int|null
    */
    public function getQps()
    {
        return $this->container['qps'];
    }

    /**
    * Sets qps
    *
    * @param int|null $qps QPS值（qps维度返回）
    *
    * @return $this
    */
    public function setQps($qps)
    {
        $this->container['qps'] = $qps;
        return $this;
    }

    /**
    * Gets trafficIn
    *  入口流量（traffic维度返回，字节/秒）
    *
    * @return int|null
    */
    public function getTrafficIn()
    {
        return $this->container['trafficIn'];
    }

    /**
    * Sets trafficIn
    *
    * @param int|null $trafficIn 入口流量（traffic维度返回，字节/秒）
    *
    * @return $this
    */
    public function setTrafficIn($trafficIn)
    {
        $this->container['trafficIn'] = $trafficIn;
        return $this;
    }

    /**
    * Gets trafficOut
    *  出口流量（traffic维度返回，字节/秒）
    *
    * @return int|null
    */
    public function getTrafficOut()
    {
        return $this->container['trafficOut'];
    }

    /**
    * Sets trafficOut
    *
    * @param int|null $trafficOut 出口流量（traffic维度返回，字节/秒）
    *
    * @return $this
    */
    public function setTrafficOut($trafficOut)
    {
        $this->container['trafficOut'] = $trafficOut;
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

