<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FtMetricData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FtMetricData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * formatVersion  固定值 \"1.0\"，标识数据格式版本
    * timestamp  文件生成时间，ISO 8601 格式（如 2026-07-18T10:30:00Z）
    * metrics  metrics
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'formatVersion' => 'string',
            'timestamp' => 'string',
            'metrics' => '\HuaweiCloud\SDK\ModelArts\V1\Model\FtMetric[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * formatVersion  固定值 \"1.0\"，标识数据格式版本
    * timestamp  文件生成时间，ISO 8601 格式（如 2026-07-18T10:30:00Z）
    * metrics  metrics
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'formatVersion' => null,
        'timestamp' => null,
        'metrics' => null
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
    * formatVersion  固定值 \"1.0\"，标识数据格式版本
    * timestamp  文件生成时间，ISO 8601 格式（如 2026-07-18T10:30:00Z）
    * metrics  metrics
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'formatVersion' => 'format_version',
            'timestamp' => 'timestamp',
            'metrics' => 'metrics'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * formatVersion  固定值 \"1.0\"，标识数据格式版本
    * timestamp  文件生成时间，ISO 8601 格式（如 2026-07-18T10:30:00Z）
    * metrics  metrics
    *
    * @var string[]
    */
    protected static $setters = [
            'formatVersion' => 'setFormatVersion',
            'timestamp' => 'setTimestamp',
            'metrics' => 'setMetrics'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * formatVersion  固定值 \"1.0\"，标识数据格式版本
    * timestamp  文件生成时间，ISO 8601 格式（如 2026-07-18T10:30:00Z）
    * metrics  metrics
    *
    * @var string[]
    */
    protected static $getters = [
            'formatVersion' => 'getFormatVersion',
            'timestamp' => 'getTimestamp',
            'metrics' => 'getMetrics'
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
        $this->container['formatVersion'] = isset($data['formatVersion']) ? $data['formatVersion'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['metrics'] = isset($data['metrics']) ? $data['metrics'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['formatVersion'] === null) {
            $invalidProperties[] = "'formatVersion' can't be null";
        }
        if ($this->container['metrics'] === null) {
            $invalidProperties[] = "'metrics' can't be null";
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
    * Gets formatVersion
    *  固定值 \"1.0\"，标识数据格式版本
    *
    * @return string
    */
    public function getFormatVersion()
    {
        return $this->container['formatVersion'];
    }

    /**
    * Sets formatVersion
    *
    * @param string $formatVersion 固定值 \"1.0\"，标识数据格式版本
    *
    * @return $this
    */
    public function setFormatVersion($formatVersion)
    {
        $this->container['formatVersion'] = $formatVersion;
        return $this;
    }

    /**
    * Gets timestamp
    *  文件生成时间，ISO 8601 格式（如 2026-07-18T10:30:00Z）
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
    * @param string|null $timestamp 文件生成时间，ISO 8601 格式（如 2026-07-18T10:30:00Z）
    *
    * @return $this
    */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;
        return $this;
    }

    /**
    * Gets metrics
    *  metrics
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\FtMetric[]
    */
    public function getMetrics()
    {
        return $this->container['metrics'];
    }

    /**
    * Sets metrics
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\FtMetric[] $metrics metrics
    *
    * @return $this
    */
    public function setMetrics($metrics)
    {
        $this->container['metrics'] = $metrics;
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

