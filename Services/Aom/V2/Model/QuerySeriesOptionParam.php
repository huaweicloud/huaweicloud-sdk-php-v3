<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QuerySeriesOptionParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QuerySeriesOptionParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * namespace  时间序列命名空间。取值范围：PAAS.CONTAINER、PAAS.NODE、PAAS.SLA、PAAS.AGGR、CUSTOMMETRICS等。PAAS.CONTAINER：应用时间序列命名空间；PAAS.NODE：节点时间序列命名空间；PAAS.SLA：SLA时间序列命名空间；PAAS.AGGR：集群时间序列命名空间；CUSTOMMETRICS：自定义时间序列命名空间。
    * metricName  时间序列名称，名称长度取值范围为1~255个字符。取值范围：AOM提供的基础时间序列名称，cpuUsage、cpuCoreUsed等：cpuUsage：cpu使用率；cpuCoreUsed：cpu内核占用；用户上报的自定义时间序列名称。
    * dimensions  时间序列维度列表。可通过/v2/{project_id}/series接口中namespace+metric_name，查询当前监控的时间序列名称的时间序列维度列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'namespace' => 'string',
            'metricName' => 'string',
            'dimensions' => '\HuaweiCloud\SDK\Aom\V2\Model\DimensionSeries[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * namespace  时间序列命名空间。取值范围：PAAS.CONTAINER、PAAS.NODE、PAAS.SLA、PAAS.AGGR、CUSTOMMETRICS等。PAAS.CONTAINER：应用时间序列命名空间；PAAS.NODE：节点时间序列命名空间；PAAS.SLA：SLA时间序列命名空间；PAAS.AGGR：集群时间序列命名空间；CUSTOMMETRICS：自定义时间序列命名空间。
    * metricName  时间序列名称，名称长度取值范围为1~255个字符。取值范围：AOM提供的基础时间序列名称，cpuUsage、cpuCoreUsed等：cpuUsage：cpu使用率；cpuCoreUsed：cpu内核占用；用户上报的自定义时间序列名称。
    * dimensions  时间序列维度列表。可通过/v2/{project_id}/series接口中namespace+metric_name，查询当前监控的时间序列名称的时间序列维度列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'namespace' => null,
        'metricName' => null,
        'dimensions' => null
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
    * namespace  时间序列命名空间。取值范围：PAAS.CONTAINER、PAAS.NODE、PAAS.SLA、PAAS.AGGR、CUSTOMMETRICS等。PAAS.CONTAINER：应用时间序列命名空间；PAAS.NODE：节点时间序列命名空间；PAAS.SLA：SLA时间序列命名空间；PAAS.AGGR：集群时间序列命名空间；CUSTOMMETRICS：自定义时间序列命名空间。
    * metricName  时间序列名称，名称长度取值范围为1~255个字符。取值范围：AOM提供的基础时间序列名称，cpuUsage、cpuCoreUsed等：cpuUsage：cpu使用率；cpuCoreUsed：cpu内核占用；用户上报的自定义时间序列名称。
    * dimensions  时间序列维度列表。可通过/v2/{project_id}/series接口中namespace+metric_name，查询当前监控的时间序列名称的时间序列维度列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'namespace' => 'namespace',
            'metricName' => 'metric_name',
            'dimensions' => 'dimensions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * namespace  时间序列命名空间。取值范围：PAAS.CONTAINER、PAAS.NODE、PAAS.SLA、PAAS.AGGR、CUSTOMMETRICS等。PAAS.CONTAINER：应用时间序列命名空间；PAAS.NODE：节点时间序列命名空间；PAAS.SLA：SLA时间序列命名空间；PAAS.AGGR：集群时间序列命名空间；CUSTOMMETRICS：自定义时间序列命名空间。
    * metricName  时间序列名称，名称长度取值范围为1~255个字符。取值范围：AOM提供的基础时间序列名称，cpuUsage、cpuCoreUsed等：cpuUsage：cpu使用率；cpuCoreUsed：cpu内核占用；用户上报的自定义时间序列名称。
    * dimensions  时间序列维度列表。可通过/v2/{project_id}/series接口中namespace+metric_name，查询当前监控的时间序列名称的时间序列维度列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'namespace' => 'setNamespace',
            'metricName' => 'setMetricName',
            'dimensions' => 'setDimensions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * namespace  时间序列命名空间。取值范围：PAAS.CONTAINER、PAAS.NODE、PAAS.SLA、PAAS.AGGR、CUSTOMMETRICS等。PAAS.CONTAINER：应用时间序列命名空间；PAAS.NODE：节点时间序列命名空间；PAAS.SLA：SLA时间序列命名空间；PAAS.AGGR：集群时间序列命名空间；CUSTOMMETRICS：自定义时间序列命名空间。
    * metricName  时间序列名称，名称长度取值范围为1~255个字符。取值范围：AOM提供的基础时间序列名称，cpuUsage、cpuCoreUsed等：cpuUsage：cpu使用率；cpuCoreUsed：cpu内核占用；用户上报的自定义时间序列名称。
    * dimensions  时间序列维度列表。可通过/v2/{project_id}/series接口中namespace+metric_name，查询当前监控的时间序列名称的时间序列维度列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'namespace' => 'getNamespace',
            'metricName' => 'getMetricName',
            'dimensions' => 'getDimensions'
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
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['metricName'] = isset($data['metricName']) ? $data['metricName'] : null;
        $this->container['dimensions'] = isset($data['dimensions']) ? $data['dimensions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets namespace
    *  时间序列命名空间。取值范围：PAAS.CONTAINER、PAAS.NODE、PAAS.SLA、PAAS.AGGR、CUSTOMMETRICS等。PAAS.CONTAINER：应用时间序列命名空间；PAAS.NODE：节点时间序列命名空间；PAAS.SLA：SLA时间序列命名空间；PAAS.AGGR：集群时间序列命名空间；CUSTOMMETRICS：自定义时间序列命名空间。
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
    * @param string $namespace 时间序列命名空间。取值范围：PAAS.CONTAINER、PAAS.NODE、PAAS.SLA、PAAS.AGGR、CUSTOMMETRICS等。PAAS.CONTAINER：应用时间序列命名空间；PAAS.NODE：节点时间序列命名空间；PAAS.SLA：SLA时间序列命名空间；PAAS.AGGR：集群时间序列命名空间；CUSTOMMETRICS：自定义时间序列命名空间。
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets metricName
    *  时间序列名称，名称长度取值范围为1~255个字符。取值范围：AOM提供的基础时间序列名称，cpuUsage、cpuCoreUsed等：cpuUsage：cpu使用率；cpuCoreUsed：cpu内核占用；用户上报的自定义时间序列名称。
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
    * @param string|null $metricName 时间序列名称，名称长度取值范围为1~255个字符。取值范围：AOM提供的基础时间序列名称，cpuUsage、cpuCoreUsed等：cpuUsage：cpu使用率；cpuCoreUsed：cpu内核占用；用户上报的自定义时间序列名称。
    *
    * @return $this
    */
    public function setMetricName($metricName)
    {
        $this->container['metricName'] = $metricName;
        return $this;
    }

    /**
    * Gets dimensions
    *  时间序列维度列表。可通过/v2/{project_id}/series接口中namespace+metric_name，查询当前监控的时间序列名称的时间序列维度列表。
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\DimensionSeries[]|null
    */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
    * Sets dimensions
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\DimensionSeries[]|null $dimensions 时间序列维度列表。可通过/v2/{project_id}/series接口中namespace+metric_name，查询当前监控的时间序列名称的时间序列维度列表。
    *
    * @return $this
    */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;
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

