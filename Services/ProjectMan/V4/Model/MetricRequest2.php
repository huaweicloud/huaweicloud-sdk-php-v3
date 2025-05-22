<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MetricRequest2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MetricRequest2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * metricType  指标类型
    * sprintId  迭代ID
    * dividend  dividend
    * divisor  指标分母过滤条件
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'metricType' => 'string',
            'sprintId' => 'string',
            'dividend' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\MetricRequest2Dividend',
            'divisor' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * metricType  指标类型
    * sprintId  迭代ID
    * dividend  dividend
    * divisor  指标分母过滤条件
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'metricType' => null,
        'sprintId' => null,
        'dividend' => null,
        'divisor' => null
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
    * metricType  指标类型
    * sprintId  迭代ID
    * dividend  dividend
    * divisor  指标分母过滤条件
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'metricType' => 'metric_type',
            'sprintId' => 'sprint_id',
            'dividend' => 'dividend',
            'divisor' => 'divisor'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * metricType  指标类型
    * sprintId  迭代ID
    * dividend  dividend
    * divisor  指标分母过滤条件
    *
    * @var string[]
    */
    protected static $setters = [
            'metricType' => 'setMetricType',
            'sprintId' => 'setSprintId',
            'dividend' => 'setDividend',
            'divisor' => 'setDivisor'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * metricType  指标类型
    * sprintId  迭代ID
    * dividend  dividend
    * divisor  指标分母过滤条件
    *
    * @var string[]
    */
    protected static $getters = [
            'metricType' => 'getMetricType',
            'sprintId' => 'getSprintId',
            'dividend' => 'getDividend',
            'divisor' => 'getDivisor'
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
        $this->container['metricType'] = isset($data['metricType']) ? $data['metricType'] : null;
        $this->container['sprintId'] = isset($data['sprintId']) ? $data['sprintId'] : null;
        $this->container['dividend'] = isset($data['dividend']) ? $data['dividend'] : null;
        $this->container['divisor'] = isset($data['divisor']) ? $data['divisor'] : null;
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
    * Gets metricType
    *  指标类型
    *
    * @return string|null
    */
    public function getMetricType()
    {
        return $this->container['metricType'];
    }

    /**
    * Sets metricType
    *
    * @param string|null $metricType 指标类型
    *
    * @return $this
    */
    public function setMetricType($metricType)
    {
        $this->container['metricType'] = $metricType;
        return $this;
    }

    /**
    * Gets sprintId
    *  迭代ID
    *
    * @return string|null
    */
    public function getSprintId()
    {
        return $this->container['sprintId'];
    }

    /**
    * Sets sprintId
    *
    * @param string|null $sprintId 迭代ID
    *
    * @return $this
    */
    public function setSprintId($sprintId)
    {
        $this->container['sprintId'] = $sprintId;
        return $this;
    }

    /**
    * Gets dividend
    *  dividend
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\MetricRequest2Dividend|null
    */
    public function getDividend()
    {
        return $this->container['dividend'];
    }

    /**
    * Sets dividend
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\MetricRequest2Dividend|null $dividend dividend
    *
    * @return $this
    */
    public function setDividend($dividend)
    {
        $this->container['dividend'] = $dividend;
        return $this;
    }

    /**
    * Gets divisor
    *  指标分母过滤条件
    *
    * @return object|null
    */
    public function getDivisor()
    {
        return $this->container['divisor'];
    }

    /**
    * Sets divisor
    *
    * @param object|null $divisor 指标分母过滤条件
    *
    * @return $this
    */
    public function setDivisor($divisor)
    {
        $this->container['divisor'] = $divisor;
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

