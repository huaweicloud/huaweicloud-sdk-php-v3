<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListExceptionMetricsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListExceptionMetricsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startTime  开始时间（Unix timestamp，毫秒）
    * endTime  结束时间（Unix timestamp，毫秒）
    * engineType  数据库引擎类型
    * nodeId  节点ID
    * metricNames  CES指标名列表
    * interval  聚合粒度
    * aggregationMode  聚合方式
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startTime' => 'int',
            'endTime' => 'int',
            'engineType' => 'string',
            'nodeId' => 'string',
            'metricNames' => 'string[]',
            'interval' => 'string',
            'aggregationMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startTime  开始时间（Unix timestamp，毫秒）
    * endTime  结束时间（Unix timestamp，毫秒）
    * engineType  数据库引擎类型
    * nodeId  节点ID
    * metricNames  CES指标名列表
    * interval  聚合粒度
    * aggregationMode  聚合方式
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startTime' => 'int64',
        'endTime' => 'int64',
        'engineType' => null,
        'nodeId' => null,
        'metricNames' => null,
        'interval' => null,
        'aggregationMode' => null
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
    * startTime  开始时间（Unix timestamp，毫秒）
    * endTime  结束时间（Unix timestamp，毫秒）
    * engineType  数据库引擎类型
    * nodeId  节点ID
    * metricNames  CES指标名列表
    * interval  聚合粒度
    * aggregationMode  聚合方式
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'engineType' => 'engine_type',
            'nodeId' => 'node_id',
            'metricNames' => 'metric_names',
            'interval' => 'interval',
            'aggregationMode' => 'aggregation_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startTime  开始时间（Unix timestamp，毫秒）
    * endTime  结束时间（Unix timestamp，毫秒）
    * engineType  数据库引擎类型
    * nodeId  节点ID
    * metricNames  CES指标名列表
    * interval  聚合粒度
    * aggregationMode  聚合方式
    *
    * @var string[]
    */
    protected static $setters = [
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'engineType' => 'setEngineType',
            'nodeId' => 'setNodeId',
            'metricNames' => 'setMetricNames',
            'interval' => 'setInterval',
            'aggregationMode' => 'setAggregationMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startTime  开始时间（Unix timestamp，毫秒）
    * endTime  结束时间（Unix timestamp，毫秒）
    * engineType  数据库引擎类型
    * nodeId  节点ID
    * metricNames  CES指标名列表
    * interval  聚合粒度
    * aggregationMode  聚合方式
    *
    * @var string[]
    */
    protected static $getters = [
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'engineType' => 'getEngineType',
            'nodeId' => 'getNodeId',
            'metricNames' => 'getMetricNames',
            'interval' => 'getInterval',
            'aggregationMode' => 'getAggregationMode'
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
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['metricNames'] = isset($data['metricNames']) ? $data['metricNames'] : null;
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['aggregationMode'] = isset($data['aggregationMode']) ? $data['aggregationMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
        if ($this->container['metricNames'] === null) {
            $invalidProperties[] = "'metricNames' can't be null";
        }
        if ($this->container['interval'] === null) {
            $invalidProperties[] = "'interval' can't be null";
        }
        if ($this->container['aggregationMode'] === null) {
            $invalidProperties[] = "'aggregationMode' can't be null";
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
    * Gets startTime
    *  开始时间（Unix timestamp，毫秒）
    *
    * @return int
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int $startTime 开始时间（Unix timestamp，毫秒）
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间（Unix timestamp，毫秒）
    *
    * @return int
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int $endTime 结束时间（Unix timestamp，毫秒）
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets engineType
    *  数据库引擎类型
    *
    * @return string|null
    */
    public function getEngineType()
    {
        return $this->container['engineType'];
    }

    /**
    * Sets engineType
    *
    * @param string|null $engineType 数据库引擎类型
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
        return $this;
    }

    /**
    * Gets nodeId
    *  节点ID
    *
    * @return string|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string|null $nodeId 节点ID
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets metricNames
    *  CES指标名列表
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
    * @param string[] $metricNames CES指标名列表
    *
    * @return $this
    */
    public function setMetricNames($metricNames)
    {
        $this->container['metricNames'] = $metricNames;
        return $this;
    }

    /**
    * Gets interval
    *  聚合粒度
    *
    * @return string
    */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
    * Sets interval
    *
    * @param string $interval 聚合粒度
    *
    * @return $this
    */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;
        return $this;
    }

    /**
    * Gets aggregationMode
    *  聚合方式
    *
    * @return string
    */
    public function getAggregationMode()
    {
        return $this->container['aggregationMode'];
    }

    /**
    * Sets aggregationMode
    *
    * @param string $aggregationMode 聚合方式
    *
    * @return $this
    */
    public function setAggregationMode($aggregationMode)
    {
        $this->container['aggregationMode'] = $aggregationMode;
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

