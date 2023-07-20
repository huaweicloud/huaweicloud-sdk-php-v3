<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryLtsStructLogParamsNew implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryLtsStructLogParamsNew';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * query  sql语句字符串。
    * format  查询结果格式。当前仅支持：\"k-v\"。
    * timeRange  timeRange
    * whetherToRows  返回数据格式，是否为行数据，默认为false。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'query' => 'string',
            'format' => 'string',
            'timeRange' => '\HuaweiCloud\SDK\Lts\V2\Model\TimeRange',
            'whetherToRows' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * query  sql语句字符串。
    * format  查询结果格式。当前仅支持：\"k-v\"。
    * timeRange  timeRange
    * whetherToRows  返回数据格式，是否为行数据，默认为false。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'query' => null,
        'format' => null,
        'timeRange' => null,
        'whetherToRows' => null
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
    * query  sql语句字符串。
    * format  查询结果格式。当前仅支持：\"k-v\"。
    * timeRange  timeRange
    * whetherToRows  返回数据格式，是否为行数据，默认为false。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'query' => 'query',
            'format' => 'format',
            'timeRange' => 'time_range',
            'whetherToRows' => 'whether_to_rows'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * query  sql语句字符串。
    * format  查询结果格式。当前仅支持：\"k-v\"。
    * timeRange  timeRange
    * whetherToRows  返回数据格式，是否为行数据，默认为false。
    *
    * @var string[]
    */
    protected static $setters = [
            'query' => 'setQuery',
            'format' => 'setFormat',
            'timeRange' => 'setTimeRange',
            'whetherToRows' => 'setWhetherToRows'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * query  sql语句字符串。
    * format  查询结果格式。当前仅支持：\"k-v\"。
    * timeRange  timeRange
    * whetherToRows  返回数据格式，是否为行数据，默认为false。
    *
    * @var string[]
    */
    protected static $getters = [
            'query' => 'getQuery',
            'format' => 'getFormat',
            'timeRange' => 'getTimeRange',
            'whetherToRows' => 'getWhetherToRows'
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
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['timeRange'] = isset($data['timeRange']) ? $data['timeRange'] : null;
        $this->container['whetherToRows'] = isset($data['whetherToRows']) ? $data['whetherToRows'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['query'] === null) {
            $invalidProperties[] = "'query' can't be null";
        }
            if ((mb_strlen($this->container['query']) > 100)) {
                $invalidProperties[] = "invalid value for 'query', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['query']) < 0)) {
                $invalidProperties[] = "invalid value for 'query', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['format'] === null) {
            $invalidProperties[] = "'format' can't be null";
        }
            if ((mb_strlen($this->container['format']) > 100)) {
                $invalidProperties[] = "invalid value for 'format', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['format']) < 0)) {
                $invalidProperties[] = "invalid value for 'format', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['timeRange'] === null) {
            $invalidProperties[] = "'timeRange' can't be null";
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
    * Gets query
    *  sql语句字符串。
    *
    * @return string
    */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
    * Sets query
    *
    * @param string $query sql语句字符串。
    *
    * @return $this
    */
    public function setQuery($query)
    {
        $this->container['query'] = $query;
        return $this;
    }

    /**
    * Gets format
    *  查询结果格式。当前仅支持：\"k-v\"。
    *
    * @return string
    */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
    * Sets format
    *
    * @param string $format 查询结果格式。当前仅支持：\"k-v\"。
    *
    * @return $this
    */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
        return $this;
    }

    /**
    * Gets timeRange
    *  timeRange
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\TimeRange
    */
    public function getTimeRange()
    {
        return $this->container['timeRange'];
    }

    /**
    * Sets timeRange
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\TimeRange $timeRange timeRange
    *
    * @return $this
    */
    public function setTimeRange($timeRange)
    {
        $this->container['timeRange'] = $timeRange;
        return $this;
    }

    /**
    * Gets whetherToRows
    *  返回数据格式，是否为行数据，默认为false。
    *
    * @return bool|null
    */
    public function getWhetherToRows()
    {
        return $this->container['whetherToRows'];
    }

    /**
    * Sets whetherToRows
    *
    * @param bool|null $whetherToRows 返回数据格式，是否为行数据，默认为false。
    *
    * @return $this
    */
    public function setWhetherToRows($whetherToRows)
    {
        $this->container['whetherToRows'] = $whetherToRows;
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

