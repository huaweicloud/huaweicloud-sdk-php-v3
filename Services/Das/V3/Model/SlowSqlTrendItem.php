<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SlowSqlTrendItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SlowSqlTrendItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * timestamp  毫秒时间戳。表示统计数据的时间范围为timestamp到timestamp + interval_millis。
    * slowLogCount  慢SQL数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'timestamp' => 'int',
            'slowLogCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * timestamp  毫秒时间戳。表示统计数据的时间范围为timestamp到timestamp + interval_millis。
    * slowLogCount  慢SQL数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'timestamp' => 'int64',
        'slowLogCount' => 'int64'
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
    * timestamp  毫秒时间戳。表示统计数据的时间范围为timestamp到timestamp + interval_millis。
    * slowLogCount  慢SQL数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'timestamp' => 'timestamp',
            'slowLogCount' => 'slow_log_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * timestamp  毫秒时间戳。表示统计数据的时间范围为timestamp到timestamp + interval_millis。
    * slowLogCount  慢SQL数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'timestamp' => 'setTimestamp',
            'slowLogCount' => 'setSlowLogCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * timestamp  毫秒时间戳。表示统计数据的时间范围为timestamp到timestamp + interval_millis。
    * slowLogCount  慢SQL数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'timestamp' => 'getTimestamp',
            'slowLogCount' => 'getSlowLogCount'
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
        $this->container['slowLogCount'] = isset($data['slowLogCount']) ? $data['slowLogCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['timestamp'] === null) {
            $invalidProperties[] = "'timestamp' can't be null";
        }
        if ($this->container['slowLogCount'] === null) {
            $invalidProperties[] = "'slowLogCount' can't be null";
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
    *  毫秒时间戳。表示统计数据的时间范围为timestamp到timestamp + interval_millis。
    *
    * @return int
    */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
    * Sets timestamp
    *
    * @param int $timestamp 毫秒时间戳。表示统计数据的时间范围为timestamp到timestamp + interval_millis。
    *
    * @return $this
    */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;
        return $this;
    }

    /**
    * Gets slowLogCount
    *  慢SQL数量。
    *
    * @return int
    */
    public function getSlowLogCount()
    {
        return $this->container['slowLogCount'];
    }

    /**
    * Sets slowLogCount
    *
    * @param int $slowLogCount 慢SQL数量。
    *
    * @return $this
    */
    public function setSlowLogCount($slowLogCount)
    {
        $this->container['slowLogCount'] = $slowLogCount;
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

