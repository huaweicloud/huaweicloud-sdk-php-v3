<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HealthReportRatioStat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HealthReportRatioStat';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * metric  指标名。
    * maxValue  最大值。
    * criticalRatio  高水位占比。
    * mediumRatio  中水位占比。
    * lightRatio  低水位占比。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'metric' => 'string',
            'maxValue' => 'double',
            'criticalRatio' => 'double',
            'mediumRatio' => 'double',
            'lightRatio' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * metric  指标名。
    * maxValue  最大值。
    * criticalRatio  高水位占比。
    * mediumRatio  中水位占比。
    * lightRatio  低水位占比。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'metric' => null,
        'maxValue' => 'double',
        'criticalRatio' => 'double',
        'mediumRatio' => 'double',
        'lightRatio' => 'double'
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
    * metric  指标名。
    * maxValue  最大值。
    * criticalRatio  高水位占比。
    * mediumRatio  中水位占比。
    * lightRatio  低水位占比。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'metric' => 'metric',
            'maxValue' => 'max_value',
            'criticalRatio' => 'critical_ratio',
            'mediumRatio' => 'medium_ratio',
            'lightRatio' => 'light_ratio'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * metric  指标名。
    * maxValue  最大值。
    * criticalRatio  高水位占比。
    * mediumRatio  中水位占比。
    * lightRatio  低水位占比。
    *
    * @var string[]
    */
    protected static $setters = [
            'metric' => 'setMetric',
            'maxValue' => 'setMaxValue',
            'criticalRatio' => 'setCriticalRatio',
            'mediumRatio' => 'setMediumRatio',
            'lightRatio' => 'setLightRatio'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * metric  指标名。
    * maxValue  最大值。
    * criticalRatio  高水位占比。
    * mediumRatio  中水位占比。
    * lightRatio  低水位占比。
    *
    * @var string[]
    */
    protected static $getters = [
            'metric' => 'getMetric',
            'maxValue' => 'getMaxValue',
            'criticalRatio' => 'getCriticalRatio',
            'mediumRatio' => 'getMediumRatio',
            'lightRatio' => 'getLightRatio'
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
        $this->container['maxValue'] = isset($data['maxValue']) ? $data['maxValue'] : null;
        $this->container['criticalRatio'] = isset($data['criticalRatio']) ? $data['criticalRatio'] : null;
        $this->container['mediumRatio'] = isset($data['mediumRatio']) ? $data['mediumRatio'] : null;
        $this->container['lightRatio'] = isset($data['lightRatio']) ? $data['lightRatio'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['metric'] === null) {
            $invalidProperties[] = "'metric' can't be null";
        }
        if ($this->container['maxValue'] === null) {
            $invalidProperties[] = "'maxValue' can't be null";
        }
        if ($this->container['criticalRatio'] === null) {
            $invalidProperties[] = "'criticalRatio' can't be null";
        }
        if ($this->container['mediumRatio'] === null) {
            $invalidProperties[] = "'mediumRatio' can't be null";
        }
        if ($this->container['lightRatio'] === null) {
            $invalidProperties[] = "'lightRatio' can't be null";
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
    * Gets metric
    *  指标名。
    *
    * @return string
    */
    public function getMetric()
    {
        return $this->container['metric'];
    }

    /**
    * Sets metric
    *
    * @param string $metric 指标名。
    *
    * @return $this
    */
    public function setMetric($metric)
    {
        $this->container['metric'] = $metric;
        return $this;
    }

    /**
    * Gets maxValue
    *  最大值。
    *
    * @return double
    */
    public function getMaxValue()
    {
        return $this->container['maxValue'];
    }

    /**
    * Sets maxValue
    *
    * @param double $maxValue 最大值。
    *
    * @return $this
    */
    public function setMaxValue($maxValue)
    {
        $this->container['maxValue'] = $maxValue;
        return $this;
    }

    /**
    * Gets criticalRatio
    *  高水位占比。
    *
    * @return double
    */
    public function getCriticalRatio()
    {
        return $this->container['criticalRatio'];
    }

    /**
    * Sets criticalRatio
    *
    * @param double $criticalRatio 高水位占比。
    *
    * @return $this
    */
    public function setCriticalRatio($criticalRatio)
    {
        $this->container['criticalRatio'] = $criticalRatio;
        return $this;
    }

    /**
    * Gets mediumRatio
    *  中水位占比。
    *
    * @return double
    */
    public function getMediumRatio()
    {
        return $this->container['mediumRatio'];
    }

    /**
    * Sets mediumRatio
    *
    * @param double $mediumRatio 中水位占比。
    *
    * @return $this
    */
    public function setMediumRatio($mediumRatio)
    {
        $this->container['mediumRatio'] = $mediumRatio;
        return $this;
    }

    /**
    * Gets lightRatio
    *  低水位占比。
    *
    * @return double
    */
    public function getLightRatio()
    {
        return $this->container['lightRatio'];
    }

    /**
    * Sets lightRatio
    *
    * @param double $lightRatio 低水位占比。
    *
    * @return $this
    */
    public function setLightRatio($lightRatio)
    {
        $this->container['lightRatio'] = $lightRatio;
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

