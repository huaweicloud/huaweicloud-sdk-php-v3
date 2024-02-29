<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobInstance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobInstance';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobName  作业名称。如果要查询指定批处理作业的实例列表，jobName就是批处理作业名。如果要查询实时作业下某个节点关联的子作业，jobName格式为[实时作业名称]_[节点名称]。
    * status  实例运行状态： - waiting：等待运行 - running：运行中 - success：运行成功 - fail： 运行失败 - running-exception：运行异常 - pause： 暂停 - manual-stop：取消 - skip-by-depend：跳过 - freeze：冻结
    * jobInstanceName  作业实例运行时日志记录的实例名称, 非作业定义的名称
    * planTime  作业实例计划执行时间
    * startTime  作业实例实际执行开始时间
    * endTime  作业实例实际执行结束时间
    * executeTime  执行耗时，单位：毫秒
    * instanceId  作业实例id
    * instanceType  作业实例类型
    * submitTime  作业提交运行时间
    * jobId  作业id
    * version  作业实例版本
    * forceSuccess  作业实例状态筛选为强制成功
    * ignoreSuccess  作业实例状态筛选为忽略失败
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobName' => 'string',
            'status' => 'string',
            'jobInstanceName' => 'string',
            'planTime' => 'int',
            'startTime' => 'int',
            'endTime' => 'int',
            'executeTime' => 'int',
            'instanceId' => 'int',
            'instanceType' => 'int',
            'submitTime' => 'int',
            'jobId' => 'int',
            'version' => 'int',
            'forceSuccess' => 'bool',
            'ignoreSuccess' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobName  作业名称。如果要查询指定批处理作业的实例列表，jobName就是批处理作业名。如果要查询实时作业下某个节点关联的子作业，jobName格式为[实时作业名称]_[节点名称]。
    * status  实例运行状态： - waiting：等待运行 - running：运行中 - success：运行成功 - fail： 运行失败 - running-exception：运行异常 - pause： 暂停 - manual-stop：取消 - skip-by-depend：跳过 - freeze：冻结
    * jobInstanceName  作业实例运行时日志记录的实例名称, 非作业定义的名称
    * planTime  作业实例计划执行时间
    * startTime  作业实例实际执行开始时间
    * endTime  作业实例实际执行结束时间
    * executeTime  执行耗时，单位：毫秒
    * instanceId  作业实例id
    * instanceType  作业实例类型
    * submitTime  作业提交运行时间
    * jobId  作业id
    * version  作业实例版本
    * forceSuccess  作业实例状态筛选为强制成功
    * ignoreSuccess  作业实例状态筛选为忽略失败
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobName' => null,
        'status' => null,
        'jobInstanceName' => null,
        'planTime' => 'int64',
        'startTime' => 'int64',
        'endTime' => 'int64',
        'executeTime' => 'int64',
        'instanceId' => 'int64',
        'instanceType' => null,
        'submitTime' => 'int64',
        'jobId' => 'int64',
        'version' => 'int32',
        'forceSuccess' => null,
        'ignoreSuccess' => null
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
    * jobName  作业名称。如果要查询指定批处理作业的实例列表，jobName就是批处理作业名。如果要查询实时作业下某个节点关联的子作业，jobName格式为[实时作业名称]_[节点名称]。
    * status  实例运行状态： - waiting：等待运行 - running：运行中 - success：运行成功 - fail： 运行失败 - running-exception：运行异常 - pause： 暂停 - manual-stop：取消 - skip-by-depend：跳过 - freeze：冻结
    * jobInstanceName  作业实例运行时日志记录的实例名称, 非作业定义的名称
    * planTime  作业实例计划执行时间
    * startTime  作业实例实际执行开始时间
    * endTime  作业实例实际执行结束时间
    * executeTime  执行耗时，单位：毫秒
    * instanceId  作业实例id
    * instanceType  作业实例类型
    * submitTime  作业提交运行时间
    * jobId  作业id
    * version  作业实例版本
    * forceSuccess  作业实例状态筛选为强制成功
    * ignoreSuccess  作业实例状态筛选为忽略失败
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobName' => 'job_name',
            'status' => 'status',
            'jobInstanceName' => 'job_instance_name',
            'planTime' => 'plan_time',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'executeTime' => 'execute_time',
            'instanceId' => 'instance_id',
            'instanceType' => 'instance_type',
            'submitTime' => 'submit_time',
            'jobId' => 'job_id',
            'version' => 'version',
            'forceSuccess' => 'force_success',
            'ignoreSuccess' => 'ignore_success'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobName  作业名称。如果要查询指定批处理作业的实例列表，jobName就是批处理作业名。如果要查询实时作业下某个节点关联的子作业，jobName格式为[实时作业名称]_[节点名称]。
    * status  实例运行状态： - waiting：等待运行 - running：运行中 - success：运行成功 - fail： 运行失败 - running-exception：运行异常 - pause： 暂停 - manual-stop：取消 - skip-by-depend：跳过 - freeze：冻结
    * jobInstanceName  作业实例运行时日志记录的实例名称, 非作业定义的名称
    * planTime  作业实例计划执行时间
    * startTime  作业实例实际执行开始时间
    * endTime  作业实例实际执行结束时间
    * executeTime  执行耗时，单位：毫秒
    * instanceId  作业实例id
    * instanceType  作业实例类型
    * submitTime  作业提交运行时间
    * jobId  作业id
    * version  作业实例版本
    * forceSuccess  作业实例状态筛选为强制成功
    * ignoreSuccess  作业实例状态筛选为忽略失败
    *
    * @var string[]
    */
    protected static $setters = [
            'jobName' => 'setJobName',
            'status' => 'setStatus',
            'jobInstanceName' => 'setJobInstanceName',
            'planTime' => 'setPlanTime',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'executeTime' => 'setExecuteTime',
            'instanceId' => 'setInstanceId',
            'instanceType' => 'setInstanceType',
            'submitTime' => 'setSubmitTime',
            'jobId' => 'setJobId',
            'version' => 'setVersion',
            'forceSuccess' => 'setForceSuccess',
            'ignoreSuccess' => 'setIgnoreSuccess'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobName  作业名称。如果要查询指定批处理作业的实例列表，jobName就是批处理作业名。如果要查询实时作业下某个节点关联的子作业，jobName格式为[实时作业名称]_[节点名称]。
    * status  实例运行状态： - waiting：等待运行 - running：运行中 - success：运行成功 - fail： 运行失败 - running-exception：运行异常 - pause： 暂停 - manual-stop：取消 - skip-by-depend：跳过 - freeze：冻结
    * jobInstanceName  作业实例运行时日志记录的实例名称, 非作业定义的名称
    * planTime  作业实例计划执行时间
    * startTime  作业实例实际执行开始时间
    * endTime  作业实例实际执行结束时间
    * executeTime  执行耗时，单位：毫秒
    * instanceId  作业实例id
    * instanceType  作业实例类型
    * submitTime  作业提交运行时间
    * jobId  作业id
    * version  作业实例版本
    * forceSuccess  作业实例状态筛选为强制成功
    * ignoreSuccess  作业实例状态筛选为忽略失败
    *
    * @var string[]
    */
    protected static $getters = [
            'jobName' => 'getJobName',
            'status' => 'getStatus',
            'jobInstanceName' => 'getJobInstanceName',
            'planTime' => 'getPlanTime',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'executeTime' => 'getExecuteTime',
            'instanceId' => 'getInstanceId',
            'instanceType' => 'getInstanceType',
            'submitTime' => 'getSubmitTime',
            'jobId' => 'getJobId',
            'version' => 'getVersion',
            'forceSuccess' => 'getForceSuccess',
            'ignoreSuccess' => 'getIgnoreSuccess'
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
    const STATUS_WAITING = 'waiting';
    const STATUS_RUNNING = 'running';
    const STATUS_SUCCESS = 'success';
    const STATUS_FAIL = 'fail';
    const STATUS_RUNNING_EXCEPTION = 'running-exception';
    const STATUS_PAUSE = 'pause';
    const STATUS_MANUAL_STOP = 'manual-stop';
    const STATUS_SKIP_BY_DEPEND = 'skip-by-depend';
    const STATUS_FREEZE = 'freeze';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_WAITING,
            self::STATUS_RUNNING,
            self::STATUS_SUCCESS,
            self::STATUS_FAIL,
            self::STATUS_RUNNING_EXCEPTION,
            self::STATUS_PAUSE,
            self::STATUS_MANUAL_STOP,
            self::STATUS_SKIP_BY_DEPEND,
            self::STATUS_FREEZE,
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
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['jobInstanceName'] = isset($data['jobInstanceName']) ? $data['jobInstanceName'] : null;
        $this->container['planTime'] = isset($data['planTime']) ? $data['planTime'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['executeTime'] = isset($data['executeTime']) ? $data['executeTime'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
        $this->container['submitTime'] = isset($data['submitTime']) ? $data['submitTime'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['forceSuccess'] = isset($data['forceSuccess']) ? $data['forceSuccess'] : null;
        $this->container['ignoreSuccess'] = isset($data['ignoreSuccess']) ? $data['ignoreSuccess'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    * Gets jobName
    *  作业名称。如果要查询指定批处理作业的实例列表，jobName就是批处理作业名。如果要查询实时作业下某个节点关联的子作业，jobName格式为[实时作业名称]_[节点名称]。
    *
    * @return string|null
    */
    public function getJobName()
    {
        return $this->container['jobName'];
    }

    /**
    * Sets jobName
    *
    * @param string|null $jobName 作业名称。如果要查询指定批处理作业的实例列表，jobName就是批处理作业名。如果要查询实时作业下某个节点关联的子作业，jobName格式为[实时作业名称]_[节点名称]。
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets status
    *  实例运行状态： - waiting：等待运行 - running：运行中 - success：运行成功 - fail： 运行失败 - running-exception：运行异常 - pause： 暂停 - manual-stop：取消 - skip-by-depend：跳过 - freeze：冻结
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 实例运行状态： - waiting：等待运行 - running：运行中 - success：运行成功 - fail： 运行失败 - running-exception：运行异常 - pause： 暂停 - manual-stop：取消 - skip-by-depend：跳过 - freeze：冻结
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets jobInstanceName
    *  作业实例运行时日志记录的实例名称, 非作业定义的名称
    *
    * @return string|null
    */
    public function getJobInstanceName()
    {
        return $this->container['jobInstanceName'];
    }

    /**
    * Sets jobInstanceName
    *
    * @param string|null $jobInstanceName 作业实例运行时日志记录的实例名称, 非作业定义的名称
    *
    * @return $this
    */
    public function setJobInstanceName($jobInstanceName)
    {
        $this->container['jobInstanceName'] = $jobInstanceName;
        return $this;
    }

    /**
    * Gets planTime
    *  作业实例计划执行时间
    *
    * @return int|null
    */
    public function getPlanTime()
    {
        return $this->container['planTime'];
    }

    /**
    * Sets planTime
    *
    * @param int|null $planTime 作业实例计划执行时间
    *
    * @return $this
    */
    public function setPlanTime($planTime)
    {
        $this->container['planTime'] = $planTime;
        return $this;
    }

    /**
    * Gets startTime
    *  作业实例实际执行开始时间
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime 作业实例实际执行开始时间
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
    *  作业实例实际执行结束时间
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
    * @param int|null $endTime 作业实例实际执行结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets executeTime
    *  执行耗时，单位：毫秒
    *
    * @return int|null
    */
    public function getExecuteTime()
    {
        return $this->container['executeTime'];
    }

    /**
    * Sets executeTime
    *
    * @param int|null $executeTime 执行耗时，单位：毫秒
    *
    * @return $this
    */
    public function setExecuteTime($executeTime)
    {
        $this->container['executeTime'] = $executeTime;
        return $this;
    }

    /**
    * Gets instanceId
    *  作业实例id
    *
    * @return int|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param int|null $instanceId 作业实例id
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceType
    *  作业实例类型
    *
    * @return int|null
    */
    public function getInstanceType()
    {
        return $this->container['instanceType'];
    }

    /**
    * Sets instanceType
    *
    * @param int|null $instanceType 作业实例类型
    *
    * @return $this
    */
    public function setInstanceType($instanceType)
    {
        $this->container['instanceType'] = $instanceType;
        return $this;
    }

    /**
    * Gets submitTime
    *  作业提交运行时间
    *
    * @return int|null
    */
    public function getSubmitTime()
    {
        return $this->container['submitTime'];
    }

    /**
    * Sets submitTime
    *
    * @param int|null $submitTime 作业提交运行时间
    *
    * @return $this
    */
    public function setSubmitTime($submitTime)
    {
        $this->container['submitTime'] = $submitTime;
        return $this;
    }

    /**
    * Gets jobId
    *  作业id
    *
    * @return int|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param int|null $jobId 作业id
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets version
    *  作业实例版本
    *
    * @return int|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param int|null $version 作业实例版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets forceSuccess
    *  作业实例状态筛选为强制成功
    *
    * @return bool|null
    */
    public function getForceSuccess()
    {
        return $this->container['forceSuccess'];
    }

    /**
    * Sets forceSuccess
    *
    * @param bool|null $forceSuccess 作业实例状态筛选为强制成功
    *
    * @return $this
    */
    public function setForceSuccess($forceSuccess)
    {
        $this->container['forceSuccess'] = $forceSuccess;
        return $this;
    }

    /**
    * Gets ignoreSuccess
    *  作业实例状态筛选为忽略失败
    *
    * @return bool|null
    */
    public function getIgnoreSuccess()
    {
        return $this->container['ignoreSuccess'];
    }

    /**
    * Sets ignoreSuccess
    *
    * @param bool|null $ignoreSuccess 作业实例状态筛选为忽略失败
    *
    * @return $this
    */
    public function setIgnoreSuccess($ignoreSuccess)
    {
        $this->container['ignoreSuccess'] = $ignoreSuccess;
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

