<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRangeQueryAomPromPostRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRangeQueryAomPromPostRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * query  PromQL表达式(参考https://prometheus.io/docs/prometheus/latest/querying/basics/)。
    * start  起始时间戳(Unix时间戳格式，单位：秒）。
    * end  结束时间戳(Unix时间戳格式，单位：秒）。
    * step  查询时间步长，时间区内每step秒执行一次。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'query' => 'string',
            'start' => 'string',
            'end' => 'string',
            'step' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * query  PromQL表达式(参考https://prometheus.io/docs/prometheus/latest/querying/basics/)。
    * start  起始时间戳(Unix时间戳格式，单位：秒）。
    * end  结束时间戳(Unix时间戳格式，单位：秒）。
    * step  查询时间步长，时间区内每step秒执行一次。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'query' => null,
        'start' => null,
        'end' => null,
        'step' => null
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
    * query  PromQL表达式(参考https://prometheus.io/docs/prometheus/latest/querying/basics/)。
    * start  起始时间戳(Unix时间戳格式，单位：秒）。
    * end  结束时间戳(Unix时间戳格式，单位：秒）。
    * step  查询时间步长，时间区内每step秒执行一次。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'query' => 'query',
            'start' => 'start',
            'end' => 'end',
            'step' => 'step'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * query  PromQL表达式(参考https://prometheus.io/docs/prometheus/latest/querying/basics/)。
    * start  起始时间戳(Unix时间戳格式，单位：秒）。
    * end  结束时间戳(Unix时间戳格式，单位：秒）。
    * step  查询时间步长，时间区内每step秒执行一次。
    *
    * @var string[]
    */
    protected static $setters = [
            'query' => 'setQuery',
            'start' => 'setStart',
            'end' => 'setEnd',
            'step' => 'setStep'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * query  PromQL表达式(参考https://prometheus.io/docs/prometheus/latest/querying/basics/)。
    * start  起始时间戳(Unix时间戳格式，单位：秒）。
    * end  结束时间戳(Unix时间戳格式，单位：秒）。
    * step  查询时间步长，时间区内每step秒执行一次。
    *
    * @var string[]
    */
    protected static $getters = [
            'query' => 'getQuery',
            'start' => 'getStart',
            'end' => 'getEnd',
            'step' => 'getStep'
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
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['end'] = isset($data['end']) ? $data['end'] : null;
        $this->container['step'] = isset($data['step']) ? $data['step'] : null;
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
        if ($this->container['start'] === null) {
            $invalidProperties[] = "'start' can't be null";
        }
        if ($this->container['end'] === null) {
            $invalidProperties[] = "'end' can't be null";
        }
        if ($this->container['step'] === null) {
            $invalidProperties[] = "'step' can't be null";
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
    *  PromQL表达式(参考https://prometheus.io/docs/prometheus/latest/querying/basics/)。
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
    * @param string $query PromQL表达式(参考https://prometheus.io/docs/prometheus/latest/querying/basics/)。
    *
    * @return $this
    */
    public function setQuery($query)
    {
        $this->container['query'] = $query;
        return $this;
    }

    /**
    * Gets start
    *  起始时间戳(Unix时间戳格式，单位：秒）。
    *
    * @return string
    */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
    * Sets start
    *
    * @param string $start 起始时间戳(Unix时间戳格式，单位：秒）。
    *
    * @return $this
    */
    public function setStart($start)
    {
        $this->container['start'] = $start;
        return $this;
    }

    /**
    * Gets end
    *  结束时间戳(Unix时间戳格式，单位：秒）。
    *
    * @return string
    */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
    * Sets end
    *
    * @param string $end 结束时间戳(Unix时间戳格式，单位：秒）。
    *
    * @return $this
    */
    public function setEnd($end)
    {
        $this->container['end'] = $end;
        return $this;
    }

    /**
    * Gets step
    *  查询时间步长，时间区内每step秒执行一次。
    *
    * @return string
    */
    public function getStep()
    {
        return $this->container['step'];
    }

    /**
    * Sets step
    *
    * @param string $step 查询时间步长，时间区内每step秒执行一次。
    *
    * @return $this
    */
    public function setStep($step)
    {
        $this->container['step'] = $step;
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

