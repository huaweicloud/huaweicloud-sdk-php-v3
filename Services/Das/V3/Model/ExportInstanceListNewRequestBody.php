<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportInstanceListNewRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportInstanceListNewRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * engineType  数据库引擎类型
    * engineGroup  数据库引擎类型
    * instanceStatus  实例状态，取值范围：normal（正常）、abnormal（异常）、metricAbnormal（指标异常）、dataDiskFull（磁盘不足）、all（所有）
    * orderValue  排序条件
    * metricNames  指标名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'engineType' => 'string',
            'engineGroup' => 'string',
            'instanceStatus' => 'string',
            'orderValue' => 'string',
            'metricNames' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * engineType  数据库引擎类型
    * engineGroup  数据库引擎类型
    * instanceStatus  实例状态，取值范围：normal（正常）、abnormal（异常）、metricAbnormal（指标异常）、dataDiskFull（磁盘不足）、all（所有）
    * orderValue  排序条件
    * metricNames  指标名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'engineType' => null,
        'engineGroup' => null,
        'instanceStatus' => null,
        'orderValue' => null,
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
    * engineGroup  数据库引擎类型
    * instanceStatus  实例状态，取值范围：normal（正常）、abnormal（异常）、metricAbnormal（指标异常）、dataDiskFull（磁盘不足）、all（所有）
    * orderValue  排序条件
    * metricNames  指标名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'engineType' => 'engine_type',
            'engineGroup' => 'engine_group',
            'instanceStatus' => 'instance_status',
            'orderValue' => 'order_value',
            'metricNames' => 'metric_names'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * engineType  数据库引擎类型
    * engineGroup  数据库引擎类型
    * instanceStatus  实例状态，取值范围：normal（正常）、abnormal（异常）、metricAbnormal（指标异常）、dataDiskFull（磁盘不足）、all（所有）
    * orderValue  排序条件
    * metricNames  指标名称
    *
    * @var string[]
    */
    protected static $setters = [
            'engineType' => 'setEngineType',
            'engineGroup' => 'setEngineGroup',
            'instanceStatus' => 'setInstanceStatus',
            'orderValue' => 'setOrderValue',
            'metricNames' => 'setMetricNames'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * engineType  数据库引擎类型
    * engineGroup  数据库引擎类型
    * instanceStatus  实例状态，取值范围：normal（正常）、abnormal（异常）、metricAbnormal（指标异常）、dataDiskFull（磁盘不足）、all（所有）
    * orderValue  排序条件
    * metricNames  指标名称
    *
    * @var string[]
    */
    protected static $getters = [
            'engineType' => 'getEngineType',
            'engineGroup' => 'getEngineGroup',
            'instanceStatus' => 'getInstanceStatus',
            'orderValue' => 'getOrderValue',
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
        $this->container['engineGroup'] = isset($data['engineGroup']) ? $data['engineGroup'] : null;
        $this->container['instanceStatus'] = isset($data['instanceStatus']) ? $data['instanceStatus'] : null;
        $this->container['orderValue'] = isset($data['orderValue']) ? $data['orderValue'] : null;
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
        if ($this->container['engineGroup'] === null) {
            $invalidProperties[] = "'engineGroup' can't be null";
        }
        if ($this->container['instanceStatus'] === null) {
            $invalidProperties[] = "'instanceStatus' can't be null";
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
    * Gets engineGroup
    *  数据库引擎类型
    *
    * @return string
    */
    public function getEngineGroup()
    {
        return $this->container['engineGroup'];
    }

    /**
    * Sets engineGroup
    *
    * @param string $engineGroup 数据库引擎类型
    *
    * @return $this
    */
    public function setEngineGroup($engineGroup)
    {
        $this->container['engineGroup'] = $engineGroup;
        return $this;
    }

    /**
    * Gets instanceStatus
    *  实例状态，取值范围：normal（正常）、abnormal（异常）、metricAbnormal（指标异常）、dataDiskFull（磁盘不足）、all（所有）
    *
    * @return string
    */
    public function getInstanceStatus()
    {
        return $this->container['instanceStatus'];
    }

    /**
    * Sets instanceStatus
    *
    * @param string $instanceStatus 实例状态，取值范围：normal（正常）、abnormal（异常）、metricAbnormal（指标异常）、dataDiskFull（磁盘不足）、all（所有）
    *
    * @return $this
    */
    public function setInstanceStatus($instanceStatus)
    {
        $this->container['instanceStatus'] = $instanceStatus;
        return $this;
    }

    /**
    * Gets orderValue
    *  排序条件
    *
    * @return string|null
    */
    public function getOrderValue()
    {
        return $this->container['orderValue'];
    }

    /**
    * Sets orderValue
    *
    * @param string|null $orderValue 排序条件
    *
    * @return $this
    */
    public function setOrderValue($orderValue)
    {
        $this->container['orderValue'] = $orderValue;
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

