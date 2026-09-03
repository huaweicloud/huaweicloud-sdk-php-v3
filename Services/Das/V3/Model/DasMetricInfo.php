<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DasMetricInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DasMetricInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID
    * thresholdIndex  阈值索引
    * instanceStatus  实例状态
    * timestamp  指标采集时间戳
    * metrics  指标数据
    * thresholdMetrics  阈值指标数据
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'thresholdIndex' => 'int',
            'instanceStatus' => 'string',
            'timestamp' => 'int',
            'metrics' => 'object',
            'thresholdMetrics' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID
    * thresholdIndex  阈值索引
    * instanceStatus  实例状态
    * timestamp  指标采集时间戳
    * metrics  指标数据
    * thresholdMetrics  阈值指标数据
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'thresholdIndex' => 'int32',
        'instanceStatus' => null,
        'timestamp' => 'int64',
        'metrics' => null,
        'thresholdMetrics' => null
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
    * instanceId  实例ID
    * thresholdIndex  阈值索引
    * instanceStatus  实例状态
    * timestamp  指标采集时间戳
    * metrics  指标数据
    * thresholdMetrics  阈值指标数据
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'thresholdIndex' => 'threshold_index',
            'instanceStatus' => 'instance_status',
            'timestamp' => 'timestamp',
            'metrics' => 'metrics',
            'thresholdMetrics' => 'threshold_metrics'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID
    * thresholdIndex  阈值索引
    * instanceStatus  实例状态
    * timestamp  指标采集时间戳
    * metrics  指标数据
    * thresholdMetrics  阈值指标数据
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'thresholdIndex' => 'setThresholdIndex',
            'instanceStatus' => 'setInstanceStatus',
            'timestamp' => 'setTimestamp',
            'metrics' => 'setMetrics',
            'thresholdMetrics' => 'setThresholdMetrics'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID
    * thresholdIndex  阈值索引
    * instanceStatus  实例状态
    * timestamp  指标采集时间戳
    * metrics  指标数据
    * thresholdMetrics  阈值指标数据
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'thresholdIndex' => 'getThresholdIndex',
            'instanceStatus' => 'getInstanceStatus',
            'timestamp' => 'getTimestamp',
            'metrics' => 'getMetrics',
            'thresholdMetrics' => 'getThresholdMetrics'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['thresholdIndex'] = isset($data['thresholdIndex']) ? $data['thresholdIndex'] : null;
        $this->container['instanceStatus'] = isset($data['instanceStatus']) ? $data['instanceStatus'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['metrics'] = isset($data['metrics']) ? $data['metrics'] : null;
        $this->container['thresholdMetrics'] = isset($data['thresholdMetrics']) ? $data['thresholdMetrics'] : null;
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
    * Gets instanceId
    *  实例ID
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets thresholdIndex
    *  阈值索引
    *
    * @return int|null
    */
    public function getThresholdIndex()
    {
        return $this->container['thresholdIndex'];
    }

    /**
    * Sets thresholdIndex
    *
    * @param int|null $thresholdIndex 阈值索引
    *
    * @return $this
    */
    public function setThresholdIndex($thresholdIndex)
    {
        $this->container['thresholdIndex'] = $thresholdIndex;
        return $this;
    }

    /**
    * Gets instanceStatus
    *  实例状态
    *
    * @return string|null
    */
    public function getInstanceStatus()
    {
        return $this->container['instanceStatus'];
    }

    /**
    * Sets instanceStatus
    *
    * @param string|null $instanceStatus 实例状态
    *
    * @return $this
    */
    public function setInstanceStatus($instanceStatus)
    {
        $this->container['instanceStatus'] = $instanceStatus;
        return $this;
    }

    /**
    * Gets timestamp
    *  指标采集时间戳
    *
    * @return int|null
    */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
    * Sets timestamp
    *
    * @param int|null $timestamp 指标采集时间戳
    *
    * @return $this
    */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;
        return $this;
    }

    /**
    * Gets metrics
    *  指标数据
    *
    * @return object|null
    */
    public function getMetrics()
    {
        return $this->container['metrics'];
    }

    /**
    * Sets metrics
    *
    * @param object|null $metrics 指标数据
    *
    * @return $this
    */
    public function setMetrics($metrics)
    {
        $this->container['metrics'] = $metrics;
        return $this;
    }

    /**
    * Gets thresholdMetrics
    *  阈值指标数据
    *
    * @return object|null
    */
    public function getThresholdMetrics()
    {
        return $this->container['thresholdMetrics'];
    }

    /**
    * Sets thresholdMetrics
    *
    * @param object|null $thresholdMetrics 阈值指标数据
    *
    * @return $this
    */
    public function setThresholdMetrics($thresholdMetrics)
    {
        $this->container['thresholdMetrics'] = $thresholdMetrics;
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

