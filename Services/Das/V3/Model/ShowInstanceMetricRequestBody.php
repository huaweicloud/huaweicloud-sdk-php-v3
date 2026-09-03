<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceMetricRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceMetricRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * engineType  数据库引擎类型
    * infos  实例信息列表
    * metricNames  指标名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'engineType' => 'string',
            'infos' => '\HuaweiCloud\SDK\Das\V3\Model\InstanceInfoForMetric[]',
            'metricNames' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * engineType  数据库引擎类型
    * infos  实例信息列表
    * metricNames  指标名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'engineType' => null,
        'infos' => null,
        'metricNames' => null
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
    * engineType  数据库引擎类型
    * infos  实例信息列表
    * metricNames  指标名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'engineType' => 'engine_type',
            'infos' => 'infos',
            'metricNames' => 'metric_names'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * engineType  数据库引擎类型
    * infos  实例信息列表
    * metricNames  指标名称
    *
    * @var string[]
    */
    protected static $setters = [
            'engineType' => 'setEngineType',
            'infos' => 'setInfos',
            'metricNames' => 'setMetricNames'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * engineType  数据库引擎类型
    * infos  实例信息列表
    * metricNames  指标名称
    *
    * @var string[]
    */
    protected static $getters = [
            'engineType' => 'getEngineType',
            'infos' => 'getInfos',
            'metricNames' => 'getMetricNames'
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
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['infos'] = isset($data['infos']) ? $data['infos'] : null;
        $this->container['metricNames'] = isset($data['metricNames']) ? $data['metricNames'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['engineType'] === null) {
            $invalidProperties[] = "'engineType' can't be null";
        }
        if ($this->container['infos'] === null) {
            $invalidProperties[] = "'infos' can't be null";
        }
        if ($this->container['metricNames'] === null) {
            $invalidProperties[] = "'metricNames' can't be null";
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
    * Gets engineType
    *  数据库引擎类型
    *
    * @return string
    */
    public function getEngineType()
    {
        return $this->container['engineType'];
    }

    /**
    * Sets engineType
    *
    * @param string $engineType 数据库引擎类型
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
        return $this;
    }

    /**
    * Gets infos
    *  实例信息列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\InstanceInfoForMetric[]
    */
    public function getInfos()
    {
        return $this->container['infos'];
    }

    /**
    * Sets infos
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\InstanceInfoForMetric[] $infos 实例信息列表
    *
    * @return $this
    */
    public function setInfos($infos)
    {
        $this->container['infos'] = $infos;
        return $this;
    }

    /**
    * Gets metricNames
    *  指标名称
    *
    * @return string[]
    */
    public function getMetricNames()
    {
        return $this->container['metricNames'];
    }

    /**
    * Sets metricNames
    *
    * @param string[] $metricNames 指标名称
    *
    * @return $this
    */
    public function setMetricNames($metricNames)
    {
        $this->container['metricNames'] = $metricNames;
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

