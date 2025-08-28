<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryRiskTrendMetric implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryRiskTrend_metric';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * series  数值
    * timestamps  时间戳
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'series' => 'double[]',
            'timestamps' => 'int[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * series  数值
    * timestamps  时间戳
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'series' => 'double',
        'timestamps' => 'int64'
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
    * series  数值
    * timestamps  时间戳
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'series' => 'series',
            'timestamps' => 'timestamps'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * series  数值
    * timestamps  时间戳
    *
    * @var string[]
    */
    protected static $setters = [
            'series' => 'setSeries',
            'timestamps' => 'setTimestamps'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * series  数值
    * timestamps  时间戳
    *
    * @var string[]
    */
    protected static $getters = [
            'series' => 'getSeries',
            'timestamps' => 'getTimestamps'
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
        $this->container['series'] = isset($data['series']) ? $data['series'] : null;
        $this->container['timestamps'] = isset($data['timestamps']) ? $data['timestamps'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets series
    *  数值
    *
    * @return double[]|null
    */
    public function getSeries()
    {
        return $this->container['series'];
    }

    /**
    * Sets series
    *
    * @param double[]|null $series 数值
    *
    * @return $this
    */
    public function setSeries($series)
    {
        $this->container['series'] = $series;
        return $this;
    }

    /**
    * Gets timestamps
    *  时间戳
    *
    * @return int[]|null
    */
    public function getTimestamps()
    {
        return $this->container['timestamps'];
    }

    /**
    * Sets timestamps
    *
    * @param int[]|null $timestamps 时间戳
    *
    * @return $this
    */
    public function setTimestamps($timestamps)
    {
        $this->container['timestamps'] = $timestamps;
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

