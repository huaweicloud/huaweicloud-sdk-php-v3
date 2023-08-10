<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DatapointForBatchMetric implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DatapointForBatchMetric';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * max  聚合周期内指标数据的最大值。
    * min  聚合周期内指标数据的最小值。
    * average  聚合周期内指标数据的平均值。
    * sum  聚合周期内指标数据的求和值。
    * variance  聚合周期内指标数据的方差。
    * timestamp  指标采集时间，UNIX时间戳，单位毫秒。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'max' => 'double',
            'min' => 'double',
            'average' => 'double',
            'sum' => 'double',
            'variance' => 'double',
            'timestamp' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * max  聚合周期内指标数据的最大值。
    * min  聚合周期内指标数据的最小值。
    * average  聚合周期内指标数据的平均值。
    * sum  聚合周期内指标数据的求和值。
    * variance  聚合周期内指标数据的方差。
    * timestamp  指标采集时间，UNIX时间戳，单位毫秒。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'max' => 'double',
        'min' => 'double',
        'average' => 'double',
        'sum' => 'double',
        'variance' => 'double',
        'timestamp' => 'int64'
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
    * max  聚合周期内指标数据的最大值。
    * min  聚合周期内指标数据的最小值。
    * average  聚合周期内指标数据的平均值。
    * sum  聚合周期内指标数据的求和值。
    * variance  聚合周期内指标数据的方差。
    * timestamp  指标采集时间，UNIX时间戳，单位毫秒。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'max' => 'max',
            'min' => 'min',
            'average' => 'average',
            'sum' => 'sum',
            'variance' => 'variance',
            'timestamp' => 'timestamp'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * max  聚合周期内指标数据的最大值。
    * min  聚合周期内指标数据的最小值。
    * average  聚合周期内指标数据的平均值。
    * sum  聚合周期内指标数据的求和值。
    * variance  聚合周期内指标数据的方差。
    * timestamp  指标采集时间，UNIX时间戳，单位毫秒。
    *
    * @var string[]
    */
    protected static $setters = [
            'max' => 'setMax',
            'min' => 'setMin',
            'average' => 'setAverage',
            'sum' => 'setSum',
            'variance' => 'setVariance',
            'timestamp' => 'setTimestamp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * max  聚合周期内指标数据的最大值。
    * min  聚合周期内指标数据的最小值。
    * average  聚合周期内指标数据的平均值。
    * sum  聚合周期内指标数据的求和值。
    * variance  聚合周期内指标数据的方差。
    * timestamp  指标采集时间，UNIX时间戳，单位毫秒。
    *
    * @var string[]
    */
    protected static $getters = [
            'max' => 'getMax',
            'min' => 'getMin',
            'average' => 'getAverage',
            'sum' => 'getSum',
            'variance' => 'getVariance',
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
        $this->container['max'] = isset($data['max']) ? $data['max'] : null;
        $this->container['min'] = isset($data['min']) ? $data['min'] : null;
        $this->container['average'] = isset($data['average']) ? $data['average'] : null;
        $this->container['sum'] = isset($data['sum']) ? $data['sum'] : null;
        $this->container['variance'] = isset($data['variance']) ? $data['variance'] : null;
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
    * Gets max
    *  聚合周期内指标数据的最大值。
    *
    * @return double|null
    */
    public function getMax()
    {
        return $this->container['max'];
    }

    /**
    * Sets max
    *
    * @param double|null $max 聚合周期内指标数据的最大值。
    *
    * @return $this
    */
    public function setMax($max)
    {
        $this->container['max'] = $max;
        return $this;
    }

    /**
    * Gets min
    *  聚合周期内指标数据的最小值。
    *
    * @return double|null
    */
    public function getMin()
    {
        return $this->container['min'];
    }

    /**
    * Sets min
    *
    * @param double|null $min 聚合周期内指标数据的最小值。
    *
    * @return $this
    */
    public function setMin($min)
    {
        $this->container['min'] = $min;
        return $this;
    }

    /**
    * Gets average
    *  聚合周期内指标数据的平均值。
    *
    * @return double|null
    */
    public function getAverage()
    {
        return $this->container['average'];
    }

    /**
    * Sets average
    *
    * @param double|null $average 聚合周期内指标数据的平均值。
    *
    * @return $this
    */
    public function setAverage($average)
    {
        $this->container['average'] = $average;
        return $this;
    }

    /**
    * Gets sum
    *  聚合周期内指标数据的求和值。
    *
    * @return double|null
    */
    public function getSum()
    {
        return $this->container['sum'];
    }

    /**
    * Sets sum
    *
    * @param double|null $sum 聚合周期内指标数据的求和值。
    *
    * @return $this
    */
    public function setSum($sum)
    {
        $this->container['sum'] = $sum;
        return $this;
    }

    /**
    * Gets variance
    *  聚合周期内指标数据的方差。
    *
    * @return double|null
    */
    public function getVariance()
    {
        return $this->container['variance'];
    }

    /**
    * Sets variance
    *
    * @param double|null $variance 聚合周期内指标数据的方差。
    *
    * @return $this
    */
    public function setVariance($variance)
    {
        $this->container['variance'] = $variance;
        return $this;
    }

    /**
    * Gets timestamp
    *  指标采集时间，UNIX时间戳，单位毫秒。
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
    * @param int $timestamp 指标采集时间，UNIX时间戳，单位毫秒。
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

