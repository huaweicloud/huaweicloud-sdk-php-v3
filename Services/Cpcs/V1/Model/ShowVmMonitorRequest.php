<?php

namespace HuaweiCloud\SDK\Cpcs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowVmMonitorRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowVmMonitorRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * namespace  所属空间，分别从不同的来源获取监控数据，有：ECS，DHSM
    * metricName  指标名称，有：mem_util，cpu_uttl，network_outgoing_bytes_rate_inband
    * instanceId  实例id，默认空字符串，默认查询所有实例。
    * vsmId  虚拟机id
    * from  查询时间范围的起始时间，毫秒时间戳，默认0，默认查询从三天前。
    * to  查询时间范围的终止时间，毫秒时间戳，默认0，默认查询到当前时间。
    * period  统计数据周期，默认0，默认周期为5分钟
    * filter  统计值类型，默认min，默认查询最小值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'namespace' => 'string',
            'metricName' => 'string',
            'instanceId' => 'string',
            'vsmId' => 'string',
            'from' => 'int',
            'to' => 'int',
            'period' => 'int',
            'filter' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * namespace  所属空间，分别从不同的来源获取监控数据，有：ECS，DHSM
    * metricName  指标名称，有：mem_util，cpu_uttl，network_outgoing_bytes_rate_inband
    * instanceId  实例id，默认空字符串，默认查询所有实例。
    * vsmId  虚拟机id
    * from  查询时间范围的起始时间，毫秒时间戳，默认0，默认查询从三天前。
    * to  查询时间范围的终止时间，毫秒时间戳，默认0，默认查询到当前时间。
    * period  统计数据周期，默认0，默认周期为5分钟
    * filter  统计值类型，默认min，默认查询最小值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'namespace' => null,
        'metricName' => null,
        'instanceId' => null,
        'vsmId' => null,
        'from' => 'int64',
        'to' => 'int64',
        'period' => 'int32',
        'filter' => null
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
    * namespace  所属空间，分别从不同的来源获取监控数据，有：ECS，DHSM
    * metricName  指标名称，有：mem_util，cpu_uttl，network_outgoing_bytes_rate_inband
    * instanceId  实例id，默认空字符串，默认查询所有实例。
    * vsmId  虚拟机id
    * from  查询时间范围的起始时间，毫秒时间戳，默认0，默认查询从三天前。
    * to  查询时间范围的终止时间，毫秒时间戳，默认0，默认查询到当前时间。
    * period  统计数据周期，默认0，默认周期为5分钟
    * filter  统计值类型，默认min，默认查询最小值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'namespace' => 'namespace',
            'metricName' => 'metric_name',
            'instanceId' => 'instance_id',
            'vsmId' => 'vsm_id',
            'from' => 'from',
            'to' => 'to',
            'period' => 'period',
            'filter' => 'filter'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * namespace  所属空间，分别从不同的来源获取监控数据，有：ECS，DHSM
    * metricName  指标名称，有：mem_util，cpu_uttl，network_outgoing_bytes_rate_inband
    * instanceId  实例id，默认空字符串，默认查询所有实例。
    * vsmId  虚拟机id
    * from  查询时间范围的起始时间，毫秒时间戳，默认0，默认查询从三天前。
    * to  查询时间范围的终止时间，毫秒时间戳，默认0，默认查询到当前时间。
    * period  统计数据周期，默认0，默认周期为5分钟
    * filter  统计值类型，默认min，默认查询最小值
    *
    * @var string[]
    */
    protected static $setters = [
            'namespace' => 'setNamespace',
            'metricName' => 'setMetricName',
            'instanceId' => 'setInstanceId',
            'vsmId' => 'setVsmId',
            'from' => 'setFrom',
            'to' => 'setTo',
            'period' => 'setPeriod',
            'filter' => 'setFilter'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * namespace  所属空间，分别从不同的来源获取监控数据，有：ECS，DHSM
    * metricName  指标名称，有：mem_util，cpu_uttl，network_outgoing_bytes_rate_inband
    * instanceId  实例id，默认空字符串，默认查询所有实例。
    * vsmId  虚拟机id
    * from  查询时间范围的起始时间，毫秒时间戳，默认0，默认查询从三天前。
    * to  查询时间范围的终止时间，毫秒时间戳，默认0，默认查询到当前时间。
    * period  统计数据周期，默认0，默认周期为5分钟
    * filter  统计值类型，默认min，默认查询最小值
    *
    * @var string[]
    */
    protected static $getters = [
            'namespace' => 'getNamespace',
            'metricName' => 'getMetricName',
            'instanceId' => 'getInstanceId',
            'vsmId' => 'getVsmId',
            'from' => 'getFrom',
            'to' => 'getTo',
            'period' => 'getPeriod',
            'filter' => 'getFilter'
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
    const MODEL_NAMESPACE_ECS = 'ECS';
    const MODEL_NAMESPACE_DHSM = 'DHSM';
    const METRIC_NAME_MEM_UTIL = 'mem_util';
    const METRIC_NAME_CPU_UTTL = 'cpu_uttl';
    const METRIC_NAME_NETWORK_OUTGOING_BYTES_RATE_INBAND = 'network_outgoing_bytes_rate_inband';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNamespaceAllowableValues()
    {
        return [
            self::MODEL_NAMESPACE_ECS,
            self::MODEL_NAMESPACE_DHSM,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMetricNameAllowableValues()
    {
        return [
            self::METRIC_NAME_MEM_UTIL,
            self::METRIC_NAME_CPU_UTTL,
            self::METRIC_NAME_NETWORK_OUTGOING_BYTES_RATE_INBAND,
        ];
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['vsmId'] = isset($data['vsmId']) ? $data['vsmId'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
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
            $allowedValues = $this->getNamespaceAllowableValues();
                if (!is_null($this->container['namespace']) && !in_array($this->container['namespace'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'namespace', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['metricName'] === null) {
            $invalidProperties[] = "'metricName' can't be null";
        }
            $allowedValues = $this->getMetricNameAllowableValues();
                if (!is_null($this->container['metricName']) && !in_array($this->container['metricName'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'metricName', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  所属空间，分别从不同的来源获取监控数据，有：ECS，DHSM
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
    * @param string $namespace 所属空间，分别从不同的来源获取监控数据，有：ECS，DHSM
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
    *  指标名称，有：mem_util，cpu_uttl，network_outgoing_bytes_rate_inband
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
    * @param string $metricName 指标名称，有：mem_util，cpu_uttl，network_outgoing_bytes_rate_inband
    *
    * @return $this
    */
    public function setMetricName($metricName)
    {
        $this->container['metricName'] = $metricName;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例id，默认空字符串，默认查询所有实例。
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
    * @param string|null $instanceId 实例id，默认空字符串，默认查询所有实例。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets vsmId
    *  虚拟机id
    *
    * @return string|null
    */
    public function getVsmId()
    {
        return $this->container['vsmId'];
    }

    /**
    * Sets vsmId
    *
    * @param string|null $vsmId 虚拟机id
    *
    * @return $this
    */
    public function setVsmId($vsmId)
    {
        $this->container['vsmId'] = $vsmId;
        return $this;
    }

    /**
    * Gets from
    *  查询时间范围的起始时间，毫秒时间戳，默认0，默认查询从三天前。
    *
    * @return int|null
    */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
    * Sets from
    *
    * @param int|null $from 查询时间范围的起始时间，毫秒时间戳，默认0，默认查询从三天前。
    *
    * @return $this
    */
    public function setFrom($from)
    {
        $this->container['from'] = $from;
        return $this;
    }

    /**
    * Gets to
    *  查询时间范围的终止时间，毫秒时间戳，默认0，默认查询到当前时间。
    *
    * @return int|null
    */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
    * Sets to
    *
    * @param int|null $to 查询时间范围的终止时间，毫秒时间戳，默认0，默认查询到当前时间。
    *
    * @return $this
    */
    public function setTo($to)
    {
        $this->container['to'] = $to;
        return $this;
    }

    /**
    * Gets period
    *  统计数据周期，默认0，默认周期为5分钟
    *
    * @return int|null
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param int|null $period 统计数据周期，默认0，默认周期为5分钟
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
        return $this;
    }

    /**
    * Gets filter
    *  统计值类型，默认min，默认查询最小值
    *
    * @return string|null
    */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
    * Sets filter
    *
    * @param string|null $filter 统计值类型，默认min，默认查询最小值
    *
    * @return $this
    */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;
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

