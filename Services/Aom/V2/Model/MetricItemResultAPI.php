<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MetricItemResultAPI implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MetricItemResultAPI';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dimensions  指标维度列表。
    * dimensionvaluehash  指标哈希值。
    * metricName  指标名称。
    * namespace  命名空间。
    * unit  指标单位。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dimensions' => '\HuaweiCloud\SDK\Aom\V2\Model\Dimension[]',
            'dimensionvaluehash' => 'string',
            'metricName' => 'string',
            'namespace' => 'string',
            'unit' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dimensions  指标维度列表。
    * dimensionvaluehash  指标哈希值。
    * metricName  指标名称。
    * namespace  命名空间。
    * unit  指标单位。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dimensions' => null,
        'dimensionvaluehash' => null,
        'metricName' => null,
        'namespace' => null,
        'unit' => null
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
    * dimensions  指标维度列表。
    * dimensionvaluehash  指标哈希值。
    * metricName  指标名称。
    * namespace  命名空间。
    * unit  指标单位。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dimensions' => 'dimensions',
            'dimensionvaluehash' => 'dimensionvaluehash',
            'metricName' => 'metricName',
            'namespace' => 'namespace',
            'unit' => 'unit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dimensions  指标维度列表。
    * dimensionvaluehash  指标哈希值。
    * metricName  指标名称。
    * namespace  命名空间。
    * unit  指标单位。
    *
    * @var string[]
    */
    protected static $setters = [
            'dimensions' => 'setDimensions',
            'dimensionvaluehash' => 'setDimensionvaluehash',
            'metricName' => 'setMetricName',
            'namespace' => 'setNamespace',
            'unit' => 'setUnit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dimensions  指标维度列表。
    * dimensionvaluehash  指标哈希值。
    * metricName  指标名称。
    * namespace  命名空间。
    * unit  指标单位。
    *
    * @var string[]
    */
    protected static $getters = [
            'dimensions' => 'getDimensions',
            'dimensionvaluehash' => 'getDimensionvaluehash',
            'metricName' => 'getMetricName',
            'namespace' => 'getNamespace',
            'unit' => 'getUnit'
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
        $this->container['dimensions'] = isset($data['dimensions']) ? $data['dimensions'] : null;
        $this->container['dimensionvaluehash'] = isset($data['dimensionvaluehash']) ? $data['dimensionvaluehash'] : null;
        $this->container['metricName'] = isset($data['metricName']) ? $data['metricName'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
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
    * Gets dimensions
    *  指标维度列表。
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\Dimension[]|null
    */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
    * Sets dimensions
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\Dimension[]|null $dimensions 指标维度列表。
    *
    * @return $this
    */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;
        return $this;
    }

    /**
    * Gets dimensionvaluehash
    *  指标哈希值。
    *
    * @return string|null
    */
    public function getDimensionvaluehash()
    {
        return $this->container['dimensionvaluehash'];
    }

    /**
    * Sets dimensionvaluehash
    *
    * @param string|null $dimensionvaluehash 指标哈希值。
    *
    * @return $this
    */
    public function setDimensionvaluehash($dimensionvaluehash)
    {
        $this->container['dimensionvaluehash'] = $dimensionvaluehash;
        return $this;
    }

    /**
    * Gets metricName
    *  指标名称。
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
    * @param string|null $metricName 指标名称。
    *
    * @return $this
    */
    public function setMetricName($metricName)
    {
        $this->container['metricName'] = $metricName;
        return $this;
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
    * Gets unit
    *  指标单位。
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
    * @param string|null $unit 指标单位。
    *
    * @return $this
    */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;
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

