<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MetricDataValue implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MetricDataValue';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dataPoints  重点指标。
    * metric  metric
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dataPoints' => '\HuaweiCloud\SDK\Aom\V2\Model\MetricDataPoints[]',
            'metric' => '\HuaweiCloud\SDK\Aom\V2\Model\MetricQueryMeritcParam'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dataPoints  重点指标。
    * metric  metric
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dataPoints' => null,
        'metric' => null
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
    * dataPoints  重点指标。
    * metric  metric
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dataPoints' => 'dataPoints',
            'metric' => 'metric'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dataPoints  重点指标。
    * metric  metric
    *
    * @var string[]
    */
    protected static $setters = [
            'dataPoints' => 'setDataPoints',
            'metric' => 'setMetric'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dataPoints  重点指标。
    * metric  metric
    *
    * @var string[]
    */
    protected static $getters = [
            'dataPoints' => 'getDataPoints',
            'metric' => 'getMetric'
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
        $this->container['dataPoints'] = isset($data['dataPoints']) ? $data['dataPoints'] : null;
        $this->container['metric'] = isset($data['metric']) ? $data['metric'] : null;
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
    * Gets dataPoints
    *  重点指标。
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\MetricDataPoints[]|null
    */
    public function getDataPoints()
    {
        return $this->container['dataPoints'];
    }

    /**
    * Sets dataPoints
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\MetricDataPoints[]|null $dataPoints 重点指标。
    *
    * @return $this
    */
    public function setDataPoints($dataPoints)
    {
        $this->container['dataPoints'] = $dataPoints;
        return $this;
    }

    /**
    * Gets metric
    *  metric
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\MetricQueryMeritcParam|null
    */
    public function getMetric()
    {
        return $this->container['metric'];
    }

    /**
    * Sets metric
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\MetricQueryMeritcParam|null $metric metric
    *
    * @return $this
    */
    public function setMetric($metric)
    {
        $this->container['metric'] = $metric;
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

