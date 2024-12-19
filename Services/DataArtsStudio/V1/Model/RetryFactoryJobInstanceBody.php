<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RetryFactoryJobInstanceBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RetryFactoryJobInstanceBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * retryLocation  重跑开始位置，取值有firstNode、errorNode和specifiedNode。
    * nodeName  节点名称。
    * retryTaskVersion  使用的作业参数，取值有original_version和current_version。
    * ignoreObsMonitor  是否忽略obs监听，默认为true。
    * taskRetrys  作业实例重跑参数，当重跑当前实例类型时，需要指定该参数的重跑信息，重跑当前作业及其上下游作业实例类型不需要指定该参数。
    * beginTime  实例开始时间，当重跑当前作业及其上下游作业实例类型时，该参数有效。
    * endTime  实例结束时间，当重跑当前作业及其上下游作业实例类型时，该参数有效。
    * jobs  作业实例重跑参数，当重跑当前作业及其上下游作业实例类型时，需要指定该参数的重跑信息，重跑当前实例类型不需要指定该参数。
    * concurrent  并行度，当重跑当前作业及其上下游作业实例类型时，该参数有效，默认值为1，取值范围为1到128。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'retryLocation' => 'string',
            'nodeName' => 'string',
            'retryTaskVersion' => 'string',
            'ignoreObsMonitor' => 'bool',
            'taskRetrys' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\RetryFactoryJobInstanceBodyTaskRetrys[]',
            'beginTime' => 'int',
            'endTime' => 'int',
            'jobs' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\RetryFactoryJobInstanceBodyJobs[]',
            'concurrent' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * retryLocation  重跑开始位置，取值有firstNode、errorNode和specifiedNode。
    * nodeName  节点名称。
    * retryTaskVersion  使用的作业参数，取值有original_version和current_version。
    * ignoreObsMonitor  是否忽略obs监听，默认为true。
    * taskRetrys  作业实例重跑参数，当重跑当前实例类型时，需要指定该参数的重跑信息，重跑当前作业及其上下游作业实例类型不需要指定该参数。
    * beginTime  实例开始时间，当重跑当前作业及其上下游作业实例类型时，该参数有效。
    * endTime  实例结束时间，当重跑当前作业及其上下游作业实例类型时，该参数有效。
    * jobs  作业实例重跑参数，当重跑当前作业及其上下游作业实例类型时，需要指定该参数的重跑信息，重跑当前实例类型不需要指定该参数。
    * concurrent  并行度，当重跑当前作业及其上下游作业实例类型时，该参数有效，默认值为1，取值范围为1到128。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'retryLocation' => null,
        'nodeName' => null,
        'retryTaskVersion' => null,
        'ignoreObsMonitor' => null,
        'taskRetrys' => null,
        'beginTime' => 'int64',
        'endTime' => 'int64',
        'jobs' => null,
        'concurrent' => 'int32'
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
    * retryLocation  重跑开始位置，取值有firstNode、errorNode和specifiedNode。
    * nodeName  节点名称。
    * retryTaskVersion  使用的作业参数，取值有original_version和current_version。
    * ignoreObsMonitor  是否忽略obs监听，默认为true。
    * taskRetrys  作业实例重跑参数，当重跑当前实例类型时，需要指定该参数的重跑信息，重跑当前作业及其上下游作业实例类型不需要指定该参数。
    * beginTime  实例开始时间，当重跑当前作业及其上下游作业实例类型时，该参数有效。
    * endTime  实例结束时间，当重跑当前作业及其上下游作业实例类型时，该参数有效。
    * jobs  作业实例重跑参数，当重跑当前作业及其上下游作业实例类型时，需要指定该参数的重跑信息，重跑当前实例类型不需要指定该参数。
    * concurrent  并行度，当重跑当前作业及其上下游作业实例类型时，该参数有效，默认值为1，取值范围为1到128。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'retryLocation' => 'retry_location',
            'nodeName' => 'node_name',
            'retryTaskVersion' => 'retry_task_version',
            'ignoreObsMonitor' => 'ignore_obs_monitor',
            'taskRetrys' => 'task_retrys',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'jobs' => 'jobs',
            'concurrent' => 'concurrent'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * retryLocation  重跑开始位置，取值有firstNode、errorNode和specifiedNode。
    * nodeName  节点名称。
    * retryTaskVersion  使用的作业参数，取值有original_version和current_version。
    * ignoreObsMonitor  是否忽略obs监听，默认为true。
    * taskRetrys  作业实例重跑参数，当重跑当前实例类型时，需要指定该参数的重跑信息，重跑当前作业及其上下游作业实例类型不需要指定该参数。
    * beginTime  实例开始时间，当重跑当前作业及其上下游作业实例类型时，该参数有效。
    * endTime  实例结束时间，当重跑当前作业及其上下游作业实例类型时，该参数有效。
    * jobs  作业实例重跑参数，当重跑当前作业及其上下游作业实例类型时，需要指定该参数的重跑信息，重跑当前实例类型不需要指定该参数。
    * concurrent  并行度，当重跑当前作业及其上下游作业实例类型时，该参数有效，默认值为1，取值范围为1到128。
    *
    * @var string[]
    */
    protected static $setters = [
            'retryLocation' => 'setRetryLocation',
            'nodeName' => 'setNodeName',
            'retryTaskVersion' => 'setRetryTaskVersion',
            'ignoreObsMonitor' => 'setIgnoreObsMonitor',
            'taskRetrys' => 'setTaskRetrys',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'jobs' => 'setJobs',
            'concurrent' => 'setConcurrent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * retryLocation  重跑开始位置，取值有firstNode、errorNode和specifiedNode。
    * nodeName  节点名称。
    * retryTaskVersion  使用的作业参数，取值有original_version和current_version。
    * ignoreObsMonitor  是否忽略obs监听，默认为true。
    * taskRetrys  作业实例重跑参数，当重跑当前实例类型时，需要指定该参数的重跑信息，重跑当前作业及其上下游作业实例类型不需要指定该参数。
    * beginTime  实例开始时间，当重跑当前作业及其上下游作业实例类型时，该参数有效。
    * endTime  实例结束时间，当重跑当前作业及其上下游作业实例类型时，该参数有效。
    * jobs  作业实例重跑参数，当重跑当前作业及其上下游作业实例类型时，需要指定该参数的重跑信息，重跑当前实例类型不需要指定该参数。
    * concurrent  并行度，当重跑当前作业及其上下游作业实例类型时，该参数有效，默认值为1，取值范围为1到128。
    *
    * @var string[]
    */
    protected static $getters = [
            'retryLocation' => 'getRetryLocation',
            'nodeName' => 'getNodeName',
            'retryTaskVersion' => 'getRetryTaskVersion',
            'ignoreObsMonitor' => 'getIgnoreObsMonitor',
            'taskRetrys' => 'getTaskRetrys',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'jobs' => 'getJobs',
            'concurrent' => 'getConcurrent'
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
        $this->container['retryLocation'] = isset($data['retryLocation']) ? $data['retryLocation'] : null;
        $this->container['nodeName'] = isset($data['nodeName']) ? $data['nodeName'] : null;
        $this->container['retryTaskVersion'] = isset($data['retryTaskVersion']) ? $data['retryTaskVersion'] : null;
        $this->container['ignoreObsMonitor'] = isset($data['ignoreObsMonitor']) ? $data['ignoreObsMonitor'] : null;
        $this->container['taskRetrys'] = isset($data['taskRetrys']) ? $data['taskRetrys'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['jobs'] = isset($data['jobs']) ? $data['jobs'] : null;
        $this->container['concurrent'] = isset($data['concurrent']) ? $data['concurrent'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['retryLocation'] === null) {
            $invalidProperties[] = "'retryLocation' can't be null";
        }
        if ($this->container['retryTaskVersion'] === null) {
            $invalidProperties[] = "'retryTaskVersion' can't be null";
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
    * Gets retryLocation
    *  重跑开始位置，取值有firstNode、errorNode和specifiedNode。
    *
    * @return string
    */
    public function getRetryLocation()
    {
        return $this->container['retryLocation'];
    }

    /**
    * Sets retryLocation
    *
    * @param string $retryLocation 重跑开始位置，取值有firstNode、errorNode和specifiedNode。
    *
    * @return $this
    */
    public function setRetryLocation($retryLocation)
    {
        $this->container['retryLocation'] = $retryLocation;
        return $this;
    }

    /**
    * Gets nodeName
    *  节点名称。
    *
    * @return string|null
    */
    public function getNodeName()
    {
        return $this->container['nodeName'];
    }

    /**
    * Sets nodeName
    *
    * @param string|null $nodeName 节点名称。
    *
    * @return $this
    */
    public function setNodeName($nodeName)
    {
        $this->container['nodeName'] = $nodeName;
        return $this;
    }

    /**
    * Gets retryTaskVersion
    *  使用的作业参数，取值有original_version和current_version。
    *
    * @return string
    */
    public function getRetryTaskVersion()
    {
        return $this->container['retryTaskVersion'];
    }

    /**
    * Sets retryTaskVersion
    *
    * @param string $retryTaskVersion 使用的作业参数，取值有original_version和current_version。
    *
    * @return $this
    */
    public function setRetryTaskVersion($retryTaskVersion)
    {
        $this->container['retryTaskVersion'] = $retryTaskVersion;
        return $this;
    }

    /**
    * Gets ignoreObsMonitor
    *  是否忽略obs监听，默认为true。
    *
    * @return bool|null
    */
    public function getIgnoreObsMonitor()
    {
        return $this->container['ignoreObsMonitor'];
    }

    /**
    * Sets ignoreObsMonitor
    *
    * @param bool|null $ignoreObsMonitor 是否忽略obs监听，默认为true。
    *
    * @return $this
    */
    public function setIgnoreObsMonitor($ignoreObsMonitor)
    {
        $this->container['ignoreObsMonitor'] = $ignoreObsMonitor;
        return $this;
    }

    /**
    * Gets taskRetrys
    *  作业实例重跑参数，当重跑当前实例类型时，需要指定该参数的重跑信息，重跑当前作业及其上下游作业实例类型不需要指定该参数。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\RetryFactoryJobInstanceBodyTaskRetrys[]|null
    */
    public function getTaskRetrys()
    {
        return $this->container['taskRetrys'];
    }

    /**
    * Sets taskRetrys
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\RetryFactoryJobInstanceBodyTaskRetrys[]|null $taskRetrys 作业实例重跑参数，当重跑当前实例类型时，需要指定该参数的重跑信息，重跑当前作业及其上下游作业实例类型不需要指定该参数。
    *
    * @return $this
    */
    public function setTaskRetrys($taskRetrys)
    {
        $this->container['taskRetrys'] = $taskRetrys;
        return $this;
    }

    /**
    * Gets beginTime
    *  实例开始时间，当重跑当前作业及其上下游作业实例类型时，该参数有效。
    *
    * @return int|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param int|null $beginTime 实例开始时间，当重跑当前作业及其上下游作业实例类型时，该参数有效。
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets endTime
    *  实例结束时间，当重跑当前作业及其上下游作业实例类型时，该参数有效。
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 实例结束时间，当重跑当前作业及其上下游作业实例类型时，该参数有效。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets jobs
    *  作业实例重跑参数，当重跑当前作业及其上下游作业实例类型时，需要指定该参数的重跑信息，重跑当前实例类型不需要指定该参数。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\RetryFactoryJobInstanceBodyJobs[]|null
    */
    public function getJobs()
    {
        return $this->container['jobs'];
    }

    /**
    * Sets jobs
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\RetryFactoryJobInstanceBodyJobs[]|null $jobs 作业实例重跑参数，当重跑当前作业及其上下游作业实例类型时，需要指定该参数的重跑信息，重跑当前实例类型不需要指定该参数。
    *
    * @return $this
    */
    public function setJobs($jobs)
    {
        $this->container['jobs'] = $jobs;
        return $this;
    }

    /**
    * Gets concurrent
    *  并行度，当重跑当前作业及其上下游作业实例类型时，该参数有效，默认值为1，取值范围为1到128。
    *
    * @return int|null
    */
    public function getConcurrent()
    {
        return $this->container['concurrent'];
    }

    /**
    * Sets concurrent
    *
    * @param int|null $concurrent 并行度，当重跑当前作业及其上下游作业实例类型时，该参数有效，默认值为1，取值范围为1到128。
    *
    * @return $this
    */
    public function setConcurrent($concurrent)
    {
        $this->container['concurrent'] = $concurrent;
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

