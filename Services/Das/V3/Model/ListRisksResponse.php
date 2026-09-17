<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRisksResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRisksResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * metricCode  指标名
    * displayMetricCodes  指标展示名称
    * metricNames  指标名称
    * units  单位
    * items  风险实例列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'metricCode' => 'string',
            'displayMetricCodes' => 'string[]',
            'metricNames' => 'string[]',
            'units' => 'string[]',
            'items' => '\HuaweiCloud\SDK\Das\V3\Model\RiskInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * metricCode  指标名
    * displayMetricCodes  指标展示名称
    * metricNames  指标名称
    * units  单位
    * items  风险实例列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'metricCode' => null,
        'displayMetricCodes' => null,
        'metricNames' => null,
        'units' => null,
        'items' => null
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
    * metricCode  指标名
    * displayMetricCodes  指标展示名称
    * metricNames  指标名称
    * units  单位
    * items  风险实例列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'metricCode' => 'metric_code',
            'displayMetricCodes' => 'display_metric_codes',
            'metricNames' => 'metric_names',
            'units' => 'units',
            'items' => 'items'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * metricCode  指标名
    * displayMetricCodes  指标展示名称
    * metricNames  指标名称
    * units  单位
    * items  风险实例列表
    *
    * @var string[]
    */
    protected static $setters = [
            'metricCode' => 'setMetricCode',
            'displayMetricCodes' => 'setDisplayMetricCodes',
            'metricNames' => 'setMetricNames',
            'units' => 'setUnits',
            'items' => 'setItems'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * metricCode  指标名
    * displayMetricCodes  指标展示名称
    * metricNames  指标名称
    * units  单位
    * items  风险实例列表
    *
    * @var string[]
    */
    protected static $getters = [
            'metricCode' => 'getMetricCode',
            'displayMetricCodes' => 'getDisplayMetricCodes',
            'metricNames' => 'getMetricNames',
            'units' => 'getUnits',
            'items' => 'getItems'
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
        $this->container['metricCode'] = isset($data['metricCode']) ? $data['metricCode'] : null;
        $this->container['displayMetricCodes'] = isset($data['displayMetricCodes']) ? $data['displayMetricCodes'] : null;
        $this->container['metricNames'] = isset($data['metricNames']) ? $data['metricNames'] : null;
        $this->container['units'] = isset($data['units']) ? $data['units'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
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
    * Gets metricCode
    *  指标名
    *
    * @return string|null
    */
    public function getMetricCode()
    {
        return $this->container['metricCode'];
    }

    /**
    * Sets metricCode
    *
    * @param string|null $metricCode 指标名
    *
    * @return $this
    */
    public function setMetricCode($metricCode)
    {
        $this->container['metricCode'] = $metricCode;
        return $this;
    }

    /**
    * Gets displayMetricCodes
    *  指标展示名称
    *
    * @return string[]|null
    */
    public function getDisplayMetricCodes()
    {
        return $this->container['displayMetricCodes'];
    }

    /**
    * Sets displayMetricCodes
    *
    * @param string[]|null $displayMetricCodes 指标展示名称
    *
    * @return $this
    */
    public function setDisplayMetricCodes($displayMetricCodes)
    {
        $this->container['displayMetricCodes'] = $displayMetricCodes;
        return $this;
    }

    /**
    * Gets metricNames
    *  指标名称
    *
    * @return string[]|null
    */
    public function getMetricNames()
    {
        return $this->container['metricNames'];
    }

    /**
    * Sets metricNames
    *
    * @param string[]|null $metricNames 指标名称
    *
    * @return $this
    */
    public function setMetricNames($metricNames)
    {
        $this->container['metricNames'] = $metricNames;
        return $this;
    }

    /**
    * Gets units
    *  单位
    *
    * @return string[]|null
    */
    public function getUnits()
    {
        return $this->container['units'];
    }

    /**
    * Sets units
    *
    * @param string[]|null $units 单位
    *
    * @return $this
    */
    public function setUnits($units)
    {
        $this->container['units'] = $units;
        return $this;
    }

    /**
    * Gets items
    *  风险实例列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\RiskInfo[]|null
    */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
    * Sets items
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\RiskInfo[]|null $items 风险实例列表
    *
    * @return $this
    */
    public function setItems($items)
    {
        $this->container['items'] = $items;
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

