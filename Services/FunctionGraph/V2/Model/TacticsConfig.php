<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TacticsConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TacticsConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cronConfigs  定时配置列表
    * metricConfigs  流量配置列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cronConfigs' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\CronConfig[]',
            'metricConfigs' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\MetricConfig[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cronConfigs  定时配置列表
    * metricConfigs  流量配置列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cronConfigs' => null,
        'metricConfigs' => null
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
    * cronConfigs  定时配置列表
    * metricConfigs  流量配置列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cronConfigs' => 'cron_configs',
            'metricConfigs' => 'metric_configs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cronConfigs  定时配置列表
    * metricConfigs  流量配置列表
    *
    * @var string[]
    */
    protected static $setters = [
            'cronConfigs' => 'setCronConfigs',
            'metricConfigs' => 'setMetricConfigs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cronConfigs  定时配置列表
    * metricConfigs  流量配置列表
    *
    * @var string[]
    */
    protected static $getters = [
            'cronConfigs' => 'getCronConfigs',
            'metricConfigs' => 'getMetricConfigs'
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
        $this->container['cronConfigs'] = isset($data['cronConfigs']) ? $data['cronConfigs'] : null;
        $this->container['metricConfigs'] = isset($data['metricConfigs']) ? $data['metricConfigs'] : null;
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
    * Gets cronConfigs
    *  定时配置列表
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\CronConfig[]|null
    */
    public function getCronConfigs()
    {
        return $this->container['cronConfigs'];
    }

    /**
    * Sets cronConfigs
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\CronConfig[]|null $cronConfigs 定时配置列表
    *
    * @return $this
    */
    public function setCronConfigs($cronConfigs)
    {
        $this->container['cronConfigs'] = $cronConfigs;
        return $this;
    }

    /**
    * Gets metricConfigs
    *  流量配置列表
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\MetricConfig[]|null
    */
    public function getMetricConfigs()
    {
        return $this->container['metricConfigs'];
    }

    /**
    * Sets metricConfigs
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\MetricConfig[]|null $metricConfigs 流量配置列表
    *
    * @return $this
    */
    public function setMetricConfigs($metricConfigs)
    {
        $this->container['metricConfigs'] = $metricConfigs;
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

