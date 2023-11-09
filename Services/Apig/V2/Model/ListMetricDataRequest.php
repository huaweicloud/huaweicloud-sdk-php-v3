<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListMetricDataRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListMetricDataRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID，在API网关控制台的“实例信息”中获取。
    * dim  指标维度 - inbound_eip：入口公网带宽，仅ELB类型实例支持 - outbound_eip：出口公网带宽
    * metricName  指标名称 - upstream_bandwidth：出网带宽 - downstream_bandwidth：入网带宽 - upstream_bandwidth_usage：出网带宽使用率 - downstream_bandwidth_usage：入网带宽使用率 - up_stream：出网流量 - down_stream：入网流量
    * from  查询数据起始时间，UNIX时间戳，单位毫秒。
    * to  查询数据截止时间UNIX时间戳，单位毫秒。from必须小于to。
    * period  监控数据粒度。 - 1：实时数据 - 300：5分钟粒度 - 1200：20分钟粒度 - 3600：1小时粒度 - 14400：4小时粒度 - 86400：1天粒度
    * filter  数据聚合方式。 - average：聚合周期内指标数据的平均值。 - max：聚合周期内指标数据的最大值。 - min：聚合周期内指标数据的最小值。 - sum：聚合周期内指标数据的求和值。 - variance：聚合周期内指标数据的方差。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'dim' => 'string',
            'metricName' => 'string',
            'from' => 'string',
            'to' => 'string',
            'period' => 'int',
            'filter' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID，在API网关控制台的“实例信息”中获取。
    * dim  指标维度 - inbound_eip：入口公网带宽，仅ELB类型实例支持 - outbound_eip：出口公网带宽
    * metricName  指标名称 - upstream_bandwidth：出网带宽 - downstream_bandwidth：入网带宽 - upstream_bandwidth_usage：出网带宽使用率 - downstream_bandwidth_usage：入网带宽使用率 - up_stream：出网流量 - down_stream：入网流量
    * from  查询数据起始时间，UNIX时间戳，单位毫秒。
    * to  查询数据截止时间UNIX时间戳，单位毫秒。from必须小于to。
    * period  监控数据粒度。 - 1：实时数据 - 300：5分钟粒度 - 1200：20分钟粒度 - 3600：1小时粒度 - 14400：4小时粒度 - 86400：1天粒度
    * filter  数据聚合方式。 - average：聚合周期内指标数据的平均值。 - max：聚合周期内指标数据的最大值。 - min：聚合周期内指标数据的最小值。 - sum：聚合周期内指标数据的求和值。 - variance：聚合周期内指标数据的方差。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'dim' => null,
        'metricName' => null,
        'from' => null,
        'to' => null,
        'period' => null,
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
    * instanceId  实例ID，在API网关控制台的“实例信息”中获取。
    * dim  指标维度 - inbound_eip：入口公网带宽，仅ELB类型实例支持 - outbound_eip：出口公网带宽
    * metricName  指标名称 - upstream_bandwidth：出网带宽 - downstream_bandwidth：入网带宽 - upstream_bandwidth_usage：出网带宽使用率 - downstream_bandwidth_usage：入网带宽使用率 - up_stream：出网流量 - down_stream：入网流量
    * from  查询数据起始时间，UNIX时间戳，单位毫秒。
    * to  查询数据截止时间UNIX时间戳，单位毫秒。from必须小于to。
    * period  监控数据粒度。 - 1：实时数据 - 300：5分钟粒度 - 1200：20分钟粒度 - 3600：1小时粒度 - 14400：4小时粒度 - 86400：1天粒度
    * filter  数据聚合方式。 - average：聚合周期内指标数据的平均值。 - max：聚合周期内指标数据的最大值。 - min：聚合周期内指标数据的最小值。 - sum：聚合周期内指标数据的求和值。 - variance：聚合周期内指标数据的方差。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'dim' => 'dim',
            'metricName' => 'metric_name',
            'from' => 'from',
            'to' => 'to',
            'period' => 'period',
            'filter' => 'filter'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID，在API网关控制台的“实例信息”中获取。
    * dim  指标维度 - inbound_eip：入口公网带宽，仅ELB类型实例支持 - outbound_eip：出口公网带宽
    * metricName  指标名称 - upstream_bandwidth：出网带宽 - downstream_bandwidth：入网带宽 - upstream_bandwidth_usage：出网带宽使用率 - downstream_bandwidth_usage：入网带宽使用率 - up_stream：出网流量 - down_stream：入网流量
    * from  查询数据起始时间，UNIX时间戳，单位毫秒。
    * to  查询数据截止时间UNIX时间戳，单位毫秒。from必须小于to。
    * period  监控数据粒度。 - 1：实时数据 - 300：5分钟粒度 - 1200：20分钟粒度 - 3600：1小时粒度 - 14400：4小时粒度 - 86400：1天粒度
    * filter  数据聚合方式。 - average：聚合周期内指标数据的平均值。 - max：聚合周期内指标数据的最大值。 - min：聚合周期内指标数据的最小值。 - sum：聚合周期内指标数据的求和值。 - variance：聚合周期内指标数据的方差。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'dim' => 'setDim',
            'metricName' => 'setMetricName',
            'from' => 'setFrom',
            'to' => 'setTo',
            'period' => 'setPeriod',
            'filter' => 'setFilter'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID，在API网关控制台的“实例信息”中获取。
    * dim  指标维度 - inbound_eip：入口公网带宽，仅ELB类型实例支持 - outbound_eip：出口公网带宽
    * metricName  指标名称 - upstream_bandwidth：出网带宽 - downstream_bandwidth：入网带宽 - upstream_bandwidth_usage：出网带宽使用率 - downstream_bandwidth_usage：入网带宽使用率 - up_stream：出网流量 - down_stream：入网流量
    * from  查询数据起始时间，UNIX时间戳，单位毫秒。
    * to  查询数据截止时间UNIX时间戳，单位毫秒。from必须小于to。
    * period  监控数据粒度。 - 1：实时数据 - 300：5分钟粒度 - 1200：20分钟粒度 - 3600：1小时粒度 - 14400：4小时粒度 - 86400：1天粒度
    * filter  数据聚合方式。 - average：聚合周期内指标数据的平均值。 - max：聚合周期内指标数据的最大值。 - min：聚合周期内指标数据的最小值。 - sum：聚合周期内指标数据的求和值。 - variance：聚合周期内指标数据的方差。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'dim' => 'getDim',
            'metricName' => 'getMetricName',
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
    const DIM_INBOUND_EIP = 'inbound_eip';
    const DIM_OUTBOUND_EIP = 'outbound_eip';
    const METRIC_NAME_UPSTREAM_BANDWIDTH = 'upstream_bandwidth';
    const METRIC_NAME_DOWNSTREAM_BANDWIDTH = 'downstream_bandwidth';
    const METRIC_NAME_UPSTREAM_BANDWIDTH_USAGE = 'upstream_bandwidth_usage';
    const METRIC_NAME_DOWNSTREAM_BANDWIDTH_USAGE = 'downstream_bandwidth_usage';
    const METRIC_NAME_UP_STREAM = 'up_stream';
    const METRIC_NAME_DOWN_STREAM = 'down_stream';
    const PERIOD_1 = 1;
    const PERIOD_300 = 300;
    const PERIOD_1200 = 1200;
    const PERIOD_3600 = 3600;
    const PERIOD_14400 = 14400;
    const PERIOD_86400 = 86400;
    const FILTER_AVERAGE = 'average';
    const FILTER_MAX = 'max';
    const FILTER_MIN = 'min';
    const FILTER_SUM = 'sum';
    const FILTER_VARIANCE = 'variance';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDimAllowableValues()
    {
        return [
            self::DIM_INBOUND_EIP,
            self::DIM_OUTBOUND_EIP,
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
            self::METRIC_NAME_UPSTREAM_BANDWIDTH,
            self::METRIC_NAME_DOWNSTREAM_BANDWIDTH,
            self::METRIC_NAME_UPSTREAM_BANDWIDTH_USAGE,
            self::METRIC_NAME_DOWNSTREAM_BANDWIDTH_USAGE,
            self::METRIC_NAME_UP_STREAM,
            self::METRIC_NAME_DOWN_STREAM,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPeriodAllowableValues()
    {
        return [
            self::PERIOD_1,
            self::PERIOD_300,
            self::PERIOD_1200,
            self::PERIOD_3600,
            self::PERIOD_14400,
            self::PERIOD_86400,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFilterAllowableValues()
    {
        return [
            self::FILTER_AVERAGE,
            self::FILTER_MAX,
            self::FILTER_MIN,
            self::FILTER_SUM,
            self::FILTER_VARIANCE,
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['dim'] = isset($data['dim']) ? $data['dim'] : null;
        $this->container['metricName'] = isset($data['metricName']) ? $data['metricName'] : null;
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
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['dim'] === null) {
            $invalidProperties[] = "'dim' can't be null";
        }
            $allowedValues = $this->getDimAllowableValues();
                if (!is_null($this->container['dim']) && !in_array($this->container['dim'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dim', must be one of '%s'",
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

        if ($this->container['from'] === null) {
            $invalidProperties[] = "'from' can't be null";
        }
        if ($this->container['to'] === null) {
            $invalidProperties[] = "'to' can't be null";
        }
        if ($this->container['period'] === null) {
            $invalidProperties[] = "'period' can't be null";
        }
            $allowedValues = $this->getPeriodAllowableValues();
                if (!is_null($this->container['period']) && !in_array($this->container['period'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'period', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['filter'] === null) {
            $invalidProperties[] = "'filter' can't be null";
        }
            $allowedValues = $this->getFilterAllowableValues();
                if (!is_null($this->container['filter']) && !in_array($this->container['filter'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'filter', must be one of '%s'",
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
    * Gets instanceId
    *  实例ID，在API网关控制台的“实例信息”中获取。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 实例ID，在API网关控制台的“实例信息”中获取。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets dim
    *  指标维度 - inbound_eip：入口公网带宽，仅ELB类型实例支持 - outbound_eip：出口公网带宽
    *
    * @return string
    */
    public function getDim()
    {
        return $this->container['dim'];
    }

    /**
    * Sets dim
    *
    * @param string $dim 指标维度 - inbound_eip：入口公网带宽，仅ELB类型实例支持 - outbound_eip：出口公网带宽
    *
    * @return $this
    */
    public function setDim($dim)
    {
        $this->container['dim'] = $dim;
        return $this;
    }

    /**
    * Gets metricName
    *  指标名称 - upstream_bandwidth：出网带宽 - downstream_bandwidth：入网带宽 - upstream_bandwidth_usage：出网带宽使用率 - downstream_bandwidth_usage：入网带宽使用率 - up_stream：出网流量 - down_stream：入网流量
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
    * @param string $metricName 指标名称 - upstream_bandwidth：出网带宽 - downstream_bandwidth：入网带宽 - upstream_bandwidth_usage：出网带宽使用率 - downstream_bandwidth_usage：入网带宽使用率 - up_stream：出网流量 - down_stream：入网流量
    *
    * @return $this
    */
    public function setMetricName($metricName)
    {
        $this->container['metricName'] = $metricName;
        return $this;
    }

    /**
    * Gets from
    *  查询数据起始时间，UNIX时间戳，单位毫秒。
    *
    * @return string
    */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
    * Sets from
    *
    * @param string $from 查询数据起始时间，UNIX时间戳，单位毫秒。
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
    *  查询数据截止时间UNIX时间戳，单位毫秒。from必须小于to。
    *
    * @return string
    */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
    * Sets to
    *
    * @param string $to 查询数据截止时间UNIX时间戳，单位毫秒。from必须小于to。
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
    *  监控数据粒度。 - 1：实时数据 - 300：5分钟粒度 - 1200：20分钟粒度 - 3600：1小时粒度 - 14400：4小时粒度 - 86400：1天粒度
    *
    * @return int
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param int $period 监控数据粒度。 - 1：实时数据 - 300：5分钟粒度 - 1200：20分钟粒度 - 3600：1小时粒度 - 14400：4小时粒度 - 86400：1天粒度
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
    *  数据聚合方式。 - average：聚合周期内指标数据的平均值。 - max：聚合周期内指标数据的最大值。 - min：聚合周期内指标数据的最小值。 - sum：聚合周期内指标数据的求和值。 - variance：聚合周期内指标数据的方差。
    *
    * @return string
    */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
    * Sets filter
    *
    * @param string $filter 数据聚合方式。 - average：聚合周期内指标数据的平均值。 - max：聚合周期内指标数据的最大值。 - min：聚合周期内指标数据的最小值。 - sum：聚合周期内指标数据的求和值。 - variance：聚合周期内指标数据的方差。
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

