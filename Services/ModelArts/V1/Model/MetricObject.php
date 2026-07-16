<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MetricObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MetricObject';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * metric  运行指标，可选值如下： - cpuUsage：CPU使用率 - memUsage：物理内存使用率 - gpuUtil：GPU使用率 - gpuMemUsage：显存使用率 - npuUtil：NPU使用率 - npuMemUsage：NPU显存使用率
    * value  运行指标对应数值，1min统计一个平均值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'metric' => 'string',
            'value' => 'double[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * metric  运行指标，可选值如下： - cpuUsage：CPU使用率 - memUsage：物理内存使用率 - gpuUtil：GPU使用率 - gpuMemUsage：显存使用率 - npuUtil：NPU使用率 - npuMemUsage：NPU显存使用率
    * value  运行指标对应数值，1min统计一个平均值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'metric' => null,
        'value' => 'double'
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
    * metric  运行指标，可选值如下： - cpuUsage：CPU使用率 - memUsage：物理内存使用率 - gpuUtil：GPU使用率 - gpuMemUsage：显存使用率 - npuUtil：NPU使用率 - npuMemUsage：NPU显存使用率
    * value  运行指标对应数值，1min统计一个平均值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'metric' => 'metric',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * metric  运行指标，可选值如下： - cpuUsage：CPU使用率 - memUsage：物理内存使用率 - gpuUtil：GPU使用率 - gpuMemUsage：显存使用率 - npuUtil：NPU使用率 - npuMemUsage：NPU显存使用率
    * value  运行指标对应数值，1min统计一个平均值。
    *
    * @var string[]
    */
    protected static $setters = [
            'metric' => 'setMetric',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * metric  运行指标，可选值如下： - cpuUsage：CPU使用率 - memUsage：物理内存使用率 - gpuUtil：GPU使用率 - gpuMemUsage：显存使用率 - npuUtil：NPU使用率 - npuMemUsage：NPU显存使用率
    * value  运行指标对应数值，1min统计一个平均值。
    *
    * @var string[]
    */
    protected static $getters = [
            'metric' => 'getMetric',
            'value' => 'getValue'
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
        $this->container['metric'] = isset($data['metric']) ? $data['metric'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
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
    * Gets metric
    *  运行指标，可选值如下： - cpuUsage：CPU使用率 - memUsage：物理内存使用率 - gpuUtil：GPU使用率 - gpuMemUsage：显存使用率 - npuUtil：NPU使用率 - npuMemUsage：NPU显存使用率
    *
    * @return string|null
    */
    public function getMetric()
    {
        return $this->container['metric'];
    }

    /**
    * Sets metric
    *
    * @param string|null $metric 运行指标，可选值如下： - cpuUsage：CPU使用率 - memUsage：物理内存使用率 - gpuUtil：GPU使用率 - gpuMemUsage：显存使用率 - npuUtil：NPU使用率 - npuMemUsage：NPU显存使用率
    *
    * @return $this
    */
    public function setMetric($metric)
    {
        $this->container['metric'] = $metric;
        return $this;
    }

    /**
    * Gets value
    *  运行指标对应数值，1min统计一个平均值。
    *
    * @return double[]|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param double[]|null $value 运行指标对应数值，1min统计一个平均值。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
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

