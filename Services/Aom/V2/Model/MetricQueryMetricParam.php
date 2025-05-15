<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MetricQueryMetricParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MetricQueryMetricParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dimensions  指标维度列表。取值范围：数组不能为空，同时数组中任何一个dimension对象name和value属性的值也不能为空。
    * metricName  指标名称。名称长度取值范围为1~255个字符。取值范围：AOM提供的基础指标，cpuUsage、cpuCoreUsed等cpuUsage：cpu使用率；cpuCoreUsed：cpu内核占用；用户上报的自定义指标名称。
    * namespace  指标命名空间。取值范围：PAAS.CONTAINER：组件指标、实例指标、进程指标和容器指标的命名空间，PAAS.NODE： 主机指标、网络指标、磁盘指标和文件系统指标的命名空间，PAAS.SLA：SLA指标的命名空间，PAAS.AGGR：集群指标的命名空间，CUSTOMMETRICS：默认的自定义指标的命名空间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dimensions' => '\HuaweiCloud\SDK\Aom\V2\Model\Dimension[]',
            'metricName' => 'string',
            'namespace' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dimensions  指标维度列表。取值范围：数组不能为空，同时数组中任何一个dimension对象name和value属性的值也不能为空。
    * metricName  指标名称。名称长度取值范围为1~255个字符。取值范围：AOM提供的基础指标，cpuUsage、cpuCoreUsed等cpuUsage：cpu使用率；cpuCoreUsed：cpu内核占用；用户上报的自定义指标名称。
    * namespace  指标命名空间。取值范围：PAAS.CONTAINER：组件指标、实例指标、进程指标和容器指标的命名空间，PAAS.NODE： 主机指标、网络指标、磁盘指标和文件系统指标的命名空间，PAAS.SLA：SLA指标的命名空间，PAAS.AGGR：集群指标的命名空间，CUSTOMMETRICS：默认的自定义指标的命名空间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dimensions' => null,
        'metricName' => null,
        'namespace' => null
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
    * dimensions  指标维度列表。取值范围：数组不能为空，同时数组中任何一个dimension对象name和value属性的值也不能为空。
    * metricName  指标名称。名称长度取值范围为1~255个字符。取值范围：AOM提供的基础指标，cpuUsage、cpuCoreUsed等cpuUsage：cpu使用率；cpuCoreUsed：cpu内核占用；用户上报的自定义指标名称。
    * namespace  指标命名空间。取值范围：PAAS.CONTAINER：组件指标、实例指标、进程指标和容器指标的命名空间，PAAS.NODE： 主机指标、网络指标、磁盘指标和文件系统指标的命名空间，PAAS.SLA：SLA指标的命名空间，PAAS.AGGR：集群指标的命名空间，CUSTOMMETRICS：默认的自定义指标的命名空间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dimensions' => 'dimensions',
            'metricName' => 'metricName',
            'namespace' => 'namespace'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dimensions  指标维度列表。取值范围：数组不能为空，同时数组中任何一个dimension对象name和value属性的值也不能为空。
    * metricName  指标名称。名称长度取值范围为1~255个字符。取值范围：AOM提供的基础指标，cpuUsage、cpuCoreUsed等cpuUsage：cpu使用率；cpuCoreUsed：cpu内核占用；用户上报的自定义指标名称。
    * namespace  指标命名空间。取值范围：PAAS.CONTAINER：组件指标、实例指标、进程指标和容器指标的命名空间，PAAS.NODE： 主机指标、网络指标、磁盘指标和文件系统指标的命名空间，PAAS.SLA：SLA指标的命名空间，PAAS.AGGR：集群指标的命名空间，CUSTOMMETRICS：默认的自定义指标的命名空间。
    *
    * @var string[]
    */
    protected static $setters = [
            'dimensions' => 'setDimensions',
            'metricName' => 'setMetricName',
            'namespace' => 'setNamespace'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dimensions  指标维度列表。取值范围：数组不能为空，同时数组中任何一个dimension对象name和value属性的值也不能为空。
    * metricName  指标名称。名称长度取值范围为1~255个字符。取值范围：AOM提供的基础指标，cpuUsage、cpuCoreUsed等cpuUsage：cpu使用率；cpuCoreUsed：cpu内核占用；用户上报的自定义指标名称。
    * namespace  指标命名空间。取值范围：PAAS.CONTAINER：组件指标、实例指标、进程指标和容器指标的命名空间，PAAS.NODE： 主机指标、网络指标、磁盘指标和文件系统指标的命名空间，PAAS.SLA：SLA指标的命名空间，PAAS.AGGR：集群指标的命名空间，CUSTOMMETRICS：默认的自定义指标的命名空间。
    *
    * @var string[]
    */
    protected static $getters = [
            'dimensions' => 'getDimensions',
            'metricName' => 'getMetricName',
            'namespace' => 'getNamespace'
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
        $this->container['metricName'] = isset($data['metricName']) ? $data['metricName'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dimensions'] === null) {
            $invalidProperties[] = "'dimensions' can't be null";
        }
        if ($this->container['metricName'] === null) {
            $invalidProperties[] = "'metricName' can't be null";
        }
        if ($this->container['namespace'] === null) {
            $invalidProperties[] = "'namespace' can't be null";
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
    * Gets dimensions
    *  指标维度列表。取值范围：数组不能为空，同时数组中任何一个dimension对象name和value属性的值也不能为空。
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\Dimension[]
    */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
    * Sets dimensions
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\Dimension[] $dimensions 指标维度列表。取值范围：数组不能为空，同时数组中任何一个dimension对象name和value属性的值也不能为空。
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
    *  指标名称。名称长度取值范围为1~255个字符。取值范围：AOM提供的基础指标，cpuUsage、cpuCoreUsed等cpuUsage：cpu使用率；cpuCoreUsed：cpu内核占用；用户上报的自定义指标名称。
    *
    * @return string
    */
    public function getMetricName()
    {
        return $this->container['metricName'];
    }

    /**
    * Sets metricName
    *
    * @param string $metricName 指标名称。名称长度取值范围为1~255个字符。取值范围：AOM提供的基础指标，cpuUsage、cpuCoreUsed等cpuUsage：cpu使用率；cpuCoreUsed：cpu内核占用；用户上报的自定义指标名称。
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
    *  指标命名空间。取值范围：PAAS.CONTAINER：组件指标、实例指标、进程指标和容器指标的命名空间，PAAS.NODE： 主机指标、网络指标、磁盘指标和文件系统指标的命名空间，PAAS.SLA：SLA指标的命名空间，PAAS.AGGR：集群指标的命名空间，CUSTOMMETRICS：默认的自定义指标的命名空间。
    *
    * @return string
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string $namespace 指标命名空间。取值范围：PAAS.CONTAINER：组件指标、实例指标、进程指标和容器指标的命名空间，PAAS.NODE： 主机指标、网络指标、磁盘指标和文件系统指标的命名空间，PAAS.SLA：SLA指标的命名空间，PAAS.AGGR：集群指标的命名空间，CUSTOMMETRICS：默认的自定义指标的命名空间。
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
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

