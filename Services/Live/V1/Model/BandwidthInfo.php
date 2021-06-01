<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BandwidthInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BandwidthInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bwBps  带宽峰值，单位：bps
    * timestamp  带宽数据采样周期起始时刻，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bwBps' => 'int',
            'timestamp' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bwBps  带宽峰值，单位：bps
    * timestamp  带宽数据采样周期起始时刻，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bwBps' => 'int32',
        'timestamp' => null
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
    * bwBps  带宽峰值，单位：bps
    * timestamp  带宽数据采样周期起始时刻，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bwBps' => 'bw_bps',
            'timestamp' => 'timestamp'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bwBps  带宽峰值，单位：bps
    * timestamp  带宽数据采样周期起始时刻，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    *
    * @var string[]
    */
    protected static $setters = [
            'bwBps' => 'setBwBps',
            'timestamp' => 'setTimestamp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bwBps  带宽峰值，单位：bps
    * timestamp  带宽数据采样周期起始时刻，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    *
    * @var string[]
    */
    protected static $getters = [
            'bwBps' => 'getBwBps',
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
        $this->container['bwBps'] = isset($data['bwBps']) ? $data['bwBps'] : null;
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
        if ($this->container['bwBps'] === null) {
            $invalidProperties[] = "'bwBps' can't be null";
        }
            if (($this->container['bwBps'] < 0)) {
                $invalidProperties[] = "invalid value for 'bwBps', must be bigger than or equal to 0.";
            }
        if ($this->container['timestamp'] === null) {
            $invalidProperties[] = "'timestamp' can't be null";
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
    * Gets bwBps
    *  带宽峰值，单位：bps
    *
    * @return int
    */
    public function getBwBps()
    {
        return $this->container['bwBps'];
    }

    /**
    * Sets bwBps
    *
    * @param int $bwBps 带宽峰值，单位：bps
    *
    * @return $this
    */
    public function setBwBps($bwBps)
    {
        $this->container['bwBps'] = $bwBps;
        return $this;
    }

    /**
    * Gets timestamp
    *  带宽数据采样周期起始时刻，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    *
    * @return string
    */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
    * Sets timestamp
    *
    * @param string $timestamp 带宽数据采样周期起始时刻，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
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

