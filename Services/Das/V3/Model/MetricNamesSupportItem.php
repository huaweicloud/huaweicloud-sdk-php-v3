<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MetricNamesSupportItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MetricNamesSupportItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * engineTypes  数据库类型
    * metricName  指标名称
    * unit  单位
    * metricNameDes  描述
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'engineTypes' => 'string[]',
            'metricName' => 'string',
            'unit' => 'string',
            'metricNameDes' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * engineTypes  数据库类型
    * metricName  指标名称
    * unit  单位
    * metricNameDes  描述
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'engineTypes' => null,
        'metricName' => null,
        'unit' => null,
        'metricNameDes' => null
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
    * engineTypes  数据库类型
    * metricName  指标名称
    * unit  单位
    * metricNameDes  描述
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'engineTypes' => 'engine_types',
            'metricName' => 'metric_name',
            'unit' => 'unit',
            'metricNameDes' => 'metric_name_des'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * engineTypes  数据库类型
    * metricName  指标名称
    * unit  单位
    * metricNameDes  描述
    *
    * @var string[]
    */
    protected static $setters = [
            'engineTypes' => 'setEngineTypes',
            'metricName' => 'setMetricName',
            'unit' => 'setUnit',
            'metricNameDes' => 'setMetricNameDes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * engineTypes  数据库类型
    * metricName  指标名称
    * unit  单位
    * metricNameDes  描述
    *
    * @var string[]
    */
    protected static $getters = [
            'engineTypes' => 'getEngineTypes',
            'metricName' => 'getMetricName',
            'unit' => 'getUnit',
            'metricNameDes' => 'getMetricNameDes'
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
        $this->container['engineTypes'] = isset($data['engineTypes']) ? $data['engineTypes'] : null;
        $this->container['metricName'] = isset($data['metricName']) ? $data['metricName'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['metricNameDes'] = isset($data['metricNameDes']) ? $data['metricNameDes'] : null;
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
    * Gets engineTypes
    *  数据库类型
    *
    * @return string[]|null
    */
    public function getEngineTypes()
    {
        return $this->container['engineTypes'];
    }

    /**
    * Sets engineTypes
    *
    * @param string[]|null $engineTypes 数据库类型
    *
    * @return $this
    */
    public function setEngineTypes($engineTypes)
    {
        $this->container['engineTypes'] = $engineTypes;
        return $this;
    }

    /**
    * Gets metricName
    *  指标名称
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
    * @param string|null $metricName 指标名称
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
    *  单位
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
    * @param string|null $unit 单位
    *
    * @return $this
    */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;
        return $this;
    }

    /**
    * Gets metricNameDes
    *  描述
    *
    * @return string|null
    */
    public function getMetricNameDes()
    {
        return $this->container['metricNameDes'];
    }

    /**
    * Sets metricNameDes
    *
    * @param string|null $metricNameDes 描述
    *
    * @return $this
    */
    public function setMetricNameDes($metricNameDes)
    {
        $this->container['metricNameDes'] = $metricNameDes;
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

