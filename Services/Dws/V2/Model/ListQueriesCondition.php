<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListQueriesCondition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListQueriesCondition';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * field  字段名称参考下方字段列表 systemQuery boolean 是否隐藏系统查询 userName String 用户名称 applicationName String 应用名称 dbName String 数据库名称 resourcePool String 资源池 queryStatus String 查询状态 enqueue String 排队状态 lane String 快慢车道 instName String 接入CN pid String 会话ID blockTime int 阻塞时间（ms） duration int 执行时间（ms） minCpuTime int 最小cpu时间（ms） maxCpuTime int 最大cpu时间（ms） totalCpuTime int CPU时间（ms） cpuSkewPercent int CPU时间倾斜（%） spillInfo String dn下盘信息 minSpillSize int dn上下盘的最小数据量（mb） maxSpillSize int dn上下盘的最大数据量（mb） averageSpillSize int 平均下盘量（MB） spillSkewPercent int dn间下盘倾斜率 queryBand String 作业类型 jobName String 任务名称 jobInst String 任务实例 clientHostname String 主机名称 clientPort String TCP端口 waiting boolean 是否等待 estimateTotalTime int 预估总执行时间（ms） estimateLeftTime int 预估剩余时间（ms） controlGroup String cgroup minPeakMemory int dn最小内存峰值（mb） maxPeakMemory int dn最大内存峰值（mb） averagePeakMemory int 内存使用平均值（mb） memorySkewPercent int 各dn内存使用倾斜率 estimateMemory int 预估使用内存（mb） minDnTime int dn最小执行时间（ms） maxDnTime int dn最大执行时间（ms） averageDnTime int dn平均执行时间（ms） dntimeSkewPercent int 各dn的执行时间倾斜率 warning String 告警 averagePeakIops int dn每秒平均io 峰值（列存是次/s，行存是万次/s） iopsSkewPercent int dn间的io倾斜率 wlmStatus String 语句运行状态 wlmAttrib String 语句属性
    * value  字段值
    * operator  比较方式： String类型参数：=、!=、like、not like int类型参数：=、!=、>、<、>=、<= boolean类型参数：=、!=
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'field' => 'string',
            'value' => 'string',
            'operator' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * field  字段名称参考下方字段列表 systemQuery boolean 是否隐藏系统查询 userName String 用户名称 applicationName String 应用名称 dbName String 数据库名称 resourcePool String 资源池 queryStatus String 查询状态 enqueue String 排队状态 lane String 快慢车道 instName String 接入CN pid String 会话ID blockTime int 阻塞时间（ms） duration int 执行时间（ms） minCpuTime int 最小cpu时间（ms） maxCpuTime int 最大cpu时间（ms） totalCpuTime int CPU时间（ms） cpuSkewPercent int CPU时间倾斜（%） spillInfo String dn下盘信息 minSpillSize int dn上下盘的最小数据量（mb） maxSpillSize int dn上下盘的最大数据量（mb） averageSpillSize int 平均下盘量（MB） spillSkewPercent int dn间下盘倾斜率 queryBand String 作业类型 jobName String 任务名称 jobInst String 任务实例 clientHostname String 主机名称 clientPort String TCP端口 waiting boolean 是否等待 estimateTotalTime int 预估总执行时间（ms） estimateLeftTime int 预估剩余时间（ms） controlGroup String cgroup minPeakMemory int dn最小内存峰值（mb） maxPeakMemory int dn最大内存峰值（mb） averagePeakMemory int 内存使用平均值（mb） memorySkewPercent int 各dn内存使用倾斜率 estimateMemory int 预估使用内存（mb） minDnTime int dn最小执行时间（ms） maxDnTime int dn最大执行时间（ms） averageDnTime int dn平均执行时间（ms） dntimeSkewPercent int 各dn的执行时间倾斜率 warning String 告警 averagePeakIops int dn每秒平均io 峰值（列存是次/s，行存是万次/s） iopsSkewPercent int dn间的io倾斜率 wlmStatus String 语句运行状态 wlmAttrib String 语句属性
    * value  字段值
    * operator  比较方式： String类型参数：=、!=、like、not like int类型参数：=、!=、>、<、>=、<= boolean类型参数：=、!=
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'field' => null,
        'value' => null,
        'operator' => null
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
    * field  字段名称参考下方字段列表 systemQuery boolean 是否隐藏系统查询 userName String 用户名称 applicationName String 应用名称 dbName String 数据库名称 resourcePool String 资源池 queryStatus String 查询状态 enqueue String 排队状态 lane String 快慢车道 instName String 接入CN pid String 会话ID blockTime int 阻塞时间（ms） duration int 执行时间（ms） minCpuTime int 最小cpu时间（ms） maxCpuTime int 最大cpu时间（ms） totalCpuTime int CPU时间（ms） cpuSkewPercent int CPU时间倾斜（%） spillInfo String dn下盘信息 minSpillSize int dn上下盘的最小数据量（mb） maxSpillSize int dn上下盘的最大数据量（mb） averageSpillSize int 平均下盘量（MB） spillSkewPercent int dn间下盘倾斜率 queryBand String 作业类型 jobName String 任务名称 jobInst String 任务实例 clientHostname String 主机名称 clientPort String TCP端口 waiting boolean 是否等待 estimateTotalTime int 预估总执行时间（ms） estimateLeftTime int 预估剩余时间（ms） controlGroup String cgroup minPeakMemory int dn最小内存峰值（mb） maxPeakMemory int dn最大内存峰值（mb） averagePeakMemory int 内存使用平均值（mb） memorySkewPercent int 各dn内存使用倾斜率 estimateMemory int 预估使用内存（mb） minDnTime int dn最小执行时间（ms） maxDnTime int dn最大执行时间（ms） averageDnTime int dn平均执行时间（ms） dntimeSkewPercent int 各dn的执行时间倾斜率 warning String 告警 averagePeakIops int dn每秒平均io 峰值（列存是次/s，行存是万次/s） iopsSkewPercent int dn间的io倾斜率 wlmStatus String 语句运行状态 wlmAttrib String 语句属性
    * value  字段值
    * operator  比较方式： String类型参数：=、!=、like、not like int类型参数：=、!=、>、<、>=、<= boolean类型参数：=、!=
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'field' => 'field',
            'value' => 'value',
            'operator' => 'operator'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * field  字段名称参考下方字段列表 systemQuery boolean 是否隐藏系统查询 userName String 用户名称 applicationName String 应用名称 dbName String 数据库名称 resourcePool String 资源池 queryStatus String 查询状态 enqueue String 排队状态 lane String 快慢车道 instName String 接入CN pid String 会话ID blockTime int 阻塞时间（ms） duration int 执行时间（ms） minCpuTime int 最小cpu时间（ms） maxCpuTime int 最大cpu时间（ms） totalCpuTime int CPU时间（ms） cpuSkewPercent int CPU时间倾斜（%） spillInfo String dn下盘信息 minSpillSize int dn上下盘的最小数据量（mb） maxSpillSize int dn上下盘的最大数据量（mb） averageSpillSize int 平均下盘量（MB） spillSkewPercent int dn间下盘倾斜率 queryBand String 作业类型 jobName String 任务名称 jobInst String 任务实例 clientHostname String 主机名称 clientPort String TCP端口 waiting boolean 是否等待 estimateTotalTime int 预估总执行时间（ms） estimateLeftTime int 预估剩余时间（ms） controlGroup String cgroup minPeakMemory int dn最小内存峰值（mb） maxPeakMemory int dn最大内存峰值（mb） averagePeakMemory int 内存使用平均值（mb） memorySkewPercent int 各dn内存使用倾斜率 estimateMemory int 预估使用内存（mb） minDnTime int dn最小执行时间（ms） maxDnTime int dn最大执行时间（ms） averageDnTime int dn平均执行时间（ms） dntimeSkewPercent int 各dn的执行时间倾斜率 warning String 告警 averagePeakIops int dn每秒平均io 峰值（列存是次/s，行存是万次/s） iopsSkewPercent int dn间的io倾斜率 wlmStatus String 语句运行状态 wlmAttrib String 语句属性
    * value  字段值
    * operator  比较方式： String类型参数：=、!=、like、not like int类型参数：=、!=、>、<、>=、<= boolean类型参数：=、!=
    *
    * @var string[]
    */
    protected static $setters = [
            'field' => 'setField',
            'value' => 'setValue',
            'operator' => 'setOperator'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * field  字段名称参考下方字段列表 systemQuery boolean 是否隐藏系统查询 userName String 用户名称 applicationName String 应用名称 dbName String 数据库名称 resourcePool String 资源池 queryStatus String 查询状态 enqueue String 排队状态 lane String 快慢车道 instName String 接入CN pid String 会话ID blockTime int 阻塞时间（ms） duration int 执行时间（ms） minCpuTime int 最小cpu时间（ms） maxCpuTime int 最大cpu时间（ms） totalCpuTime int CPU时间（ms） cpuSkewPercent int CPU时间倾斜（%） spillInfo String dn下盘信息 minSpillSize int dn上下盘的最小数据量（mb） maxSpillSize int dn上下盘的最大数据量（mb） averageSpillSize int 平均下盘量（MB） spillSkewPercent int dn间下盘倾斜率 queryBand String 作业类型 jobName String 任务名称 jobInst String 任务实例 clientHostname String 主机名称 clientPort String TCP端口 waiting boolean 是否等待 estimateTotalTime int 预估总执行时间（ms） estimateLeftTime int 预估剩余时间（ms） controlGroup String cgroup minPeakMemory int dn最小内存峰值（mb） maxPeakMemory int dn最大内存峰值（mb） averagePeakMemory int 内存使用平均值（mb） memorySkewPercent int 各dn内存使用倾斜率 estimateMemory int 预估使用内存（mb） minDnTime int dn最小执行时间（ms） maxDnTime int dn最大执行时间（ms） averageDnTime int dn平均执行时间（ms） dntimeSkewPercent int 各dn的执行时间倾斜率 warning String 告警 averagePeakIops int dn每秒平均io 峰值（列存是次/s，行存是万次/s） iopsSkewPercent int dn间的io倾斜率 wlmStatus String 语句运行状态 wlmAttrib String 语句属性
    * value  字段值
    * operator  比较方式： String类型参数：=、!=、like、not like int类型参数：=、!=、>、<、>=、<= boolean类型参数：=、!=
    *
    * @var string[]
    */
    protected static $getters = [
            'field' => 'getField',
            'value' => 'getValue',
            'operator' => 'getOperator'
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
        $this->container['field'] = isset($data['field']) ? $data['field'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['field'] === null) {
            $invalidProperties[] = "'field' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if ($this->container['operator'] === null) {
            $invalidProperties[] = "'operator' can't be null";
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
    * Gets field
    *  字段名称参考下方字段列表 systemQuery boolean 是否隐藏系统查询 userName String 用户名称 applicationName String 应用名称 dbName String 数据库名称 resourcePool String 资源池 queryStatus String 查询状态 enqueue String 排队状态 lane String 快慢车道 instName String 接入CN pid String 会话ID blockTime int 阻塞时间（ms） duration int 执行时间（ms） minCpuTime int 最小cpu时间（ms） maxCpuTime int 最大cpu时间（ms） totalCpuTime int CPU时间（ms） cpuSkewPercent int CPU时间倾斜（%） spillInfo String dn下盘信息 minSpillSize int dn上下盘的最小数据量（mb） maxSpillSize int dn上下盘的最大数据量（mb） averageSpillSize int 平均下盘量（MB） spillSkewPercent int dn间下盘倾斜率 queryBand String 作业类型 jobName String 任务名称 jobInst String 任务实例 clientHostname String 主机名称 clientPort String TCP端口 waiting boolean 是否等待 estimateTotalTime int 预估总执行时间（ms） estimateLeftTime int 预估剩余时间（ms） controlGroup String cgroup minPeakMemory int dn最小内存峰值（mb） maxPeakMemory int dn最大内存峰值（mb） averagePeakMemory int 内存使用平均值（mb） memorySkewPercent int 各dn内存使用倾斜率 estimateMemory int 预估使用内存（mb） minDnTime int dn最小执行时间（ms） maxDnTime int dn最大执行时间（ms） averageDnTime int dn平均执行时间（ms） dntimeSkewPercent int 各dn的执行时间倾斜率 warning String 告警 averagePeakIops int dn每秒平均io 峰值（列存是次/s，行存是万次/s） iopsSkewPercent int dn间的io倾斜率 wlmStatus String 语句运行状态 wlmAttrib String 语句属性
    *
    * @return string
    */
    public function getField()
    {
        return $this->container['field'];
    }

    /**
    * Sets field
    *
    * @param string $field 字段名称参考下方字段列表 systemQuery boolean 是否隐藏系统查询 userName String 用户名称 applicationName String 应用名称 dbName String 数据库名称 resourcePool String 资源池 queryStatus String 查询状态 enqueue String 排队状态 lane String 快慢车道 instName String 接入CN pid String 会话ID blockTime int 阻塞时间（ms） duration int 执行时间（ms） minCpuTime int 最小cpu时间（ms） maxCpuTime int 最大cpu时间（ms） totalCpuTime int CPU时间（ms） cpuSkewPercent int CPU时间倾斜（%） spillInfo String dn下盘信息 minSpillSize int dn上下盘的最小数据量（mb） maxSpillSize int dn上下盘的最大数据量（mb） averageSpillSize int 平均下盘量（MB） spillSkewPercent int dn间下盘倾斜率 queryBand String 作业类型 jobName String 任务名称 jobInst String 任务实例 clientHostname String 主机名称 clientPort String TCP端口 waiting boolean 是否等待 estimateTotalTime int 预估总执行时间（ms） estimateLeftTime int 预估剩余时间（ms） controlGroup String cgroup minPeakMemory int dn最小内存峰值（mb） maxPeakMemory int dn最大内存峰值（mb） averagePeakMemory int 内存使用平均值（mb） memorySkewPercent int 各dn内存使用倾斜率 estimateMemory int 预估使用内存（mb） minDnTime int dn最小执行时间（ms） maxDnTime int dn最大执行时间（ms） averageDnTime int dn平均执行时间（ms） dntimeSkewPercent int 各dn的执行时间倾斜率 warning String 告警 averagePeakIops int dn每秒平均io 峰值（列存是次/s，行存是万次/s） iopsSkewPercent int dn间的io倾斜率 wlmStatus String 语句运行状态 wlmAttrib String 语句属性
    *
    * @return $this
    */
    public function setField($field)
    {
        $this->container['field'] = $field;
        return $this;
    }

    /**
    * Gets value
    *  字段值
    *
    * @return string
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string $value 字段值
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets operator
    *  比较方式： String类型参数：=、!=、like、not like int类型参数：=、!=、>、<、>=、<= boolean类型参数：=、!=
    *
    * @return string
    */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
    * Sets operator
    *
    * @param string $operator 比较方式： String类型参数：=、!=、like、not like int类型参数：=、!=、>、<、>=、<= boolean类型参数：=、!=
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
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

