<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SeriesQueryItemResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SeriesQueryItemResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * namespace  命名空间。
    * dimensions  维度列表。
    * metricName  时间序列名称。
    * unit  时间序列单位。
    * dimensionValueHash  时间序列哈希值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'namespace' => 'string',
            'dimensions' => '\HuaweiCloud\SDK\Aom\V2\Model\DimensionSeries[]',
            'metricName' => 'string',
            'unit' => 'string',
            'dimensionValueHash' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * namespace  命名空间。
    * dimensions  维度列表。
    * metricName  时间序列名称。
    * unit  时间序列单位。
    * dimensionValueHash  时间序列哈希值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'namespace' => null,
        'dimensions' => null,
        'metricName' => null,
        'unit' => null,
        'dimensionValueHash' => null
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
    * namespace  命名空间。
    * dimensions  维度列表。
    * metricName  时间序列名称。
    * unit  时间序列单位。
    * dimensionValueHash  时间序列哈希值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'namespace' => 'namespace',
            'dimensions' => 'dimensions',
            'metricName' => 'metric_name',
            'unit' => 'unit',
            'dimensionValueHash' => 'dimension_value_hash'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * namespace  命名空间。
    * dimensions  维度列表。
    * metricName  时间序列名称。
    * unit  时间序列单位。
    * dimensionValueHash  时间序列哈希值。
    *
    * @var string[]
    */
    protected static $setters = [
            'namespace' => 'setNamespace',
            'dimensions' => 'setDimensions',
            'metricName' => 'setMetricName',
            'unit' => 'setUnit',
            'dimensionValueHash' => 'setDimensionValueHash'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * namespace  命名空间。
    * dimensions  维度列表。
    * metricName  时间序列名称。
    * unit  时间序列单位。
    * dimensionValueHash  时间序列哈希值。
    *
    * @var string[]
    */
    protected static $getters = [
            'namespace' => 'getNamespace',
            'dimensions' => 'getDimensions',
            'metricName' => 'getMetricName',
            'unit' => 'getUnit',
            'dimensionValueHash' => 'getDimensionValueHash'
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
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['dimensions'] = isset($data['dimensions']) ? $data['dimensions'] : null;
        $this->container['metricName'] = isset($data['metricName']) ? $data['metricName'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['dimensionValueHash'] = isset($data['dimensionValueHash']) ? $data['dimensionValueHash'] : null;
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
    * Gets namespace
    *  命名空间。
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace 命名空间。
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets dimensions
    *  维度列表。
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\DimensionSeries[]|null
    */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
    * Sets dimensions
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\DimensionSeries[]|null $dimensions 维度列表。
    *
    * @return $this
    */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;
        return $this;
    }

    /**
    * Gets metricName
    *  时间序列名称。
    *
    * @return string|null
    */
    public function getMetricName()
    {
        return $this->container['metricName'];
    }

    /**
    * Sets metricName
    *
    * @param string|null $metricName 时间序列名称。
    *
    * @return $this
    */
    public function setMetricName($metricName)
    {
        $this->container['metricName'] = $metricName;
        return $this;
    }

    /**
    * Gets unit
    *  时间序列单位。
    *
    * @return string|null
    */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
    * Sets unit
    *
    * @param string|null $unit 时间序列单位。
    *
    * @return $this
    */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;
        return $this;
    }

    /**
    * Gets dimensionValueHash
    *  时间序列哈希值。
    *
    * @return string|null
    */
    public function getDimensionValueHash()
    {
        return $this->container['dimensionValueHash'];
    }

    /**
    * Sets dimensionValueHash
    *
    * @param string|null $dimensionValueHash 时间序列哈希值。
    *
    * @return $this
    */
    public function setDimensionValueHash($dimensionValueHash)
    {
        $this->container['dimensionValueHash'] = $dimensionValueHash;
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

