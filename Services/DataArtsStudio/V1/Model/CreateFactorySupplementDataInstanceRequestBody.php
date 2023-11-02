<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateFactorySupplementDataInstanceRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateFactorySupplementDataInstanceRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  补数据实例名称
    * jobName  作业名称
    * startDate  补数据开始时间
    * endDate  补数据结束时间
    * parallel  并行周期数
    * dependJobs  依赖作业信息
    * isDayGranularity  是否按天粒度补数据
    * priority  优先级
    * isStopWhenFail  失败时作业是否停止
    * reverseOrder  按照时间倒序补跑
    * supplementDataRunTime  supplementDataRunTime
    * supplementDataInstanceTime  supplementDataInstanceTime
    * force  当前有补数据实例在运行时，是否强制补数据
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'jobName' => 'string',
            'startDate' => 'string',
            'endDate' => 'string',
            'parallel' => 'int',
            'dependJobs' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateFactorySupplementDataInstanceRequestBodyDependJobs[]',
            'isDayGranularity' => 'bool',
            'priority' => 'int',
            'isStopWhenFail' => 'bool',
            'reverseOrder' => 'int',
            'supplementDataRunTime' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateFactorySupplementDataInstanceRequestBodySupplementDataRunTime',
            'supplementDataInstanceTime' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateFactorySupplementDataInstanceRequestBodySupplementDataInstanceTime',
            'force' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  补数据实例名称
    * jobName  作业名称
    * startDate  补数据开始时间
    * endDate  补数据结束时间
    * parallel  并行周期数
    * dependJobs  依赖作业信息
    * isDayGranularity  是否按天粒度补数据
    * priority  优先级
    * isStopWhenFail  失败时作业是否停止
    * reverseOrder  按照时间倒序补跑
    * supplementDataRunTime  supplementDataRunTime
    * supplementDataInstanceTime  supplementDataInstanceTime
    * force  当前有补数据实例在运行时，是否强制补数据
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'jobName' => null,
        'startDate' => null,
        'endDate' => null,
        'parallel' => 'int32',
        'dependJobs' => null,
        'isDayGranularity' => null,
        'priority' => 'int32',
        'isStopWhenFail' => null,
        'reverseOrder' => 'int32',
        'supplementDataRunTime' => null,
        'supplementDataInstanceTime' => null,
        'force' => null
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
    * name  补数据实例名称
    * jobName  作业名称
    * startDate  补数据开始时间
    * endDate  补数据结束时间
    * parallel  并行周期数
    * dependJobs  依赖作业信息
    * isDayGranularity  是否按天粒度补数据
    * priority  优先级
    * isStopWhenFail  失败时作业是否停止
    * reverseOrder  按照时间倒序补跑
    * supplementDataRunTime  supplementDataRunTime
    * supplementDataInstanceTime  supplementDataInstanceTime
    * force  当前有补数据实例在运行时，是否强制补数据
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'jobName' => 'job_name',
            'startDate' => 'start_date',
            'endDate' => 'end_date',
            'parallel' => 'parallel',
            'dependJobs' => 'depend_jobs',
            'isDayGranularity' => 'is_day_granularity',
            'priority' => 'priority',
            'isStopWhenFail' => 'is_stop_when_fail',
            'reverseOrder' => 'reverse_order',
            'supplementDataRunTime' => 'supplement_data_run_time',
            'supplementDataInstanceTime' => 'supplement_data_instance_time',
            'force' => 'force'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  补数据实例名称
    * jobName  作业名称
    * startDate  补数据开始时间
    * endDate  补数据结束时间
    * parallel  并行周期数
    * dependJobs  依赖作业信息
    * isDayGranularity  是否按天粒度补数据
    * priority  优先级
    * isStopWhenFail  失败时作业是否停止
    * reverseOrder  按照时间倒序补跑
    * supplementDataRunTime  supplementDataRunTime
    * supplementDataInstanceTime  supplementDataInstanceTime
    * force  当前有补数据实例在运行时，是否强制补数据
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'jobName' => 'setJobName',
            'startDate' => 'setStartDate',
            'endDate' => 'setEndDate',
            'parallel' => 'setParallel',
            'dependJobs' => 'setDependJobs',
            'isDayGranularity' => 'setIsDayGranularity',
            'priority' => 'setPriority',
            'isStopWhenFail' => 'setIsStopWhenFail',
            'reverseOrder' => 'setReverseOrder',
            'supplementDataRunTime' => 'setSupplementDataRunTime',
            'supplementDataInstanceTime' => 'setSupplementDataInstanceTime',
            'force' => 'setForce'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  补数据实例名称
    * jobName  作业名称
    * startDate  补数据开始时间
    * endDate  补数据结束时间
    * parallel  并行周期数
    * dependJobs  依赖作业信息
    * isDayGranularity  是否按天粒度补数据
    * priority  优先级
    * isStopWhenFail  失败时作业是否停止
    * reverseOrder  按照时间倒序补跑
    * supplementDataRunTime  supplementDataRunTime
    * supplementDataInstanceTime  supplementDataInstanceTime
    * force  当前有补数据实例在运行时，是否强制补数据
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'jobName' => 'getJobName',
            'startDate' => 'getStartDate',
            'endDate' => 'getEndDate',
            'parallel' => 'getParallel',
            'dependJobs' => 'getDependJobs',
            'isDayGranularity' => 'getIsDayGranularity',
            'priority' => 'getPriority',
            'isStopWhenFail' => 'getIsStopWhenFail',
            'reverseOrder' => 'getReverseOrder',
            'supplementDataRunTime' => 'getSupplementDataRunTime',
            'supplementDataInstanceTime' => 'getSupplementDataInstanceTime',
            'force' => 'getForce'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['parallel'] = isset($data['parallel']) ? $data['parallel'] : null;
        $this->container['dependJobs'] = isset($data['dependJobs']) ? $data['dependJobs'] : null;
        $this->container['isDayGranularity'] = isset($data['isDayGranularity']) ? $data['isDayGranularity'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['isStopWhenFail'] = isset($data['isStopWhenFail']) ? $data['isStopWhenFail'] : null;
        $this->container['reverseOrder'] = isset($data['reverseOrder']) ? $data['reverseOrder'] : null;
        $this->container['supplementDataRunTime'] = isset($data['supplementDataRunTime']) ? $data['supplementDataRunTime'] : null;
        $this->container['supplementDataInstanceTime'] = isset($data['supplementDataInstanceTime']) ? $data['supplementDataInstanceTime'] : null;
        $this->container['force'] = isset($data['force']) ? $data['force'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['jobName'] === null) {
            $invalidProperties[] = "'jobName' can't be null";
        }
        if ($this->container['startDate'] === null) {
            $invalidProperties[] = "'startDate' can't be null";
        }
        if ($this->container['endDate'] === null) {
            $invalidProperties[] = "'endDate' can't be null";
        }
        if ($this->container['parallel'] === null) {
            $invalidProperties[] = "'parallel' can't be null";
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
    * Gets name
    *  补数据实例名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 补数据实例名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets jobName
    *  作业名称
    *
    * @return string
    */
    public function getJobName()
    {
        return $this->container['jobName'];
    }

    /**
    * Sets jobName
    *
    * @param string $jobName 作业名称
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets startDate
    *  补数据开始时间
    *
    * @return string
    */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
    * Sets startDate
    *
    * @param string $startDate 补数据开始时间
    *
    * @return $this
    */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;
        return $this;
    }

    /**
    * Gets endDate
    *  补数据结束时间
    *
    * @return string
    */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
    * Sets endDate
    *
    * @param string $endDate 补数据结束时间
    *
    * @return $this
    */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;
        return $this;
    }

    /**
    * Gets parallel
    *  并行周期数
    *
    * @return int
    */
    public function getParallel()
    {
        return $this->container['parallel'];
    }

    /**
    * Sets parallel
    *
    * @param int $parallel 并行周期数
    *
    * @return $this
    */
    public function setParallel($parallel)
    {
        $this->container['parallel'] = $parallel;
        return $this;
    }

    /**
    * Gets dependJobs
    *  依赖作业信息
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateFactorySupplementDataInstanceRequestBodyDependJobs[]|null
    */
    public function getDependJobs()
    {
        return $this->container['dependJobs'];
    }

    /**
    * Sets dependJobs
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateFactorySupplementDataInstanceRequestBodyDependJobs[]|null $dependJobs 依赖作业信息
    *
    * @return $this
    */
    public function setDependJobs($dependJobs)
    {
        $this->container['dependJobs'] = $dependJobs;
        return $this;
    }

    /**
    * Gets isDayGranularity
    *  是否按天粒度补数据
    *
    * @return bool|null
    */
    public function getIsDayGranularity()
    {
        return $this->container['isDayGranularity'];
    }

    /**
    * Sets isDayGranularity
    *
    * @param bool|null $isDayGranularity 是否按天粒度补数据
    *
    * @return $this
    */
    public function setIsDayGranularity($isDayGranularity)
    {
        $this->container['isDayGranularity'] = $isDayGranularity;
        return $this;
    }

    /**
    * Gets priority
    *  优先级
    *
    * @return int|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int|null $priority 优先级
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets isStopWhenFail
    *  失败时作业是否停止
    *
    * @return bool|null
    */
    public function getIsStopWhenFail()
    {
        return $this->container['isStopWhenFail'];
    }

    /**
    * Sets isStopWhenFail
    *
    * @param bool|null $isStopWhenFail 失败时作业是否停止
    *
    * @return $this
    */
    public function setIsStopWhenFail($isStopWhenFail)
    {
        $this->container['isStopWhenFail'] = $isStopWhenFail;
        return $this;
    }

    /**
    * Gets reverseOrder
    *  按照时间倒序补跑
    *
    * @return int|null
    */
    public function getReverseOrder()
    {
        return $this->container['reverseOrder'];
    }

    /**
    * Sets reverseOrder
    *
    * @param int|null $reverseOrder 按照时间倒序补跑
    *
    * @return $this
    */
    public function setReverseOrder($reverseOrder)
    {
        $this->container['reverseOrder'] = $reverseOrder;
        return $this;
    }

    /**
    * Gets supplementDataRunTime
    *  supplementDataRunTime
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateFactorySupplementDataInstanceRequestBodySupplementDataRunTime|null
    */
    public function getSupplementDataRunTime()
    {
        return $this->container['supplementDataRunTime'];
    }

    /**
    * Sets supplementDataRunTime
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateFactorySupplementDataInstanceRequestBodySupplementDataRunTime|null $supplementDataRunTime supplementDataRunTime
    *
    * @return $this
    */
    public function setSupplementDataRunTime($supplementDataRunTime)
    {
        $this->container['supplementDataRunTime'] = $supplementDataRunTime;
        return $this;
    }

    /**
    * Gets supplementDataInstanceTime
    *  supplementDataInstanceTime
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateFactorySupplementDataInstanceRequestBodySupplementDataInstanceTime|null
    */
    public function getSupplementDataInstanceTime()
    {
        return $this->container['supplementDataInstanceTime'];
    }

    /**
    * Sets supplementDataInstanceTime
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\CreateFactorySupplementDataInstanceRequestBodySupplementDataInstanceTime|null $supplementDataInstanceTime supplementDataInstanceTime
    *
    * @return $this
    */
    public function setSupplementDataInstanceTime($supplementDataInstanceTime)
    {
        $this->container['supplementDataInstanceTime'] = $supplementDataInstanceTime;
        return $this;
    }

    /**
    * Gets force
    *  当前有补数据实例在运行时，是否强制补数据
    *
    * @return string|null
    */
    public function getForce()
    {
        return $this->container['force'];
    }

    /**
    * Sets force
    *
    * @param string|null $force 当前有补数据实例在运行时，是否强制补数据
    *
    * @return $this
    */
    public function setForce($force)
    {
        $this->container['force'] = $force;
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

