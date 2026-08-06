<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobResultV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobResultV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  作业名称。
    * jobType  作业类型： - BATCH: 批处理作业 - REAL_TIME: 实时作业
    * status  作业状态。
    * createUser  作业创建者。
    * createTime  作业创建时间，13位时间戳。
    * startTime  作业开始时间，13位时间戳。
    * endTime  作业结束时间，13位时间戳。
    * lastInstanceStatus  上次实例运行状态。
    * lastInstanceEndTime  上次实例结束时间，13位时间戳。
    * owner  作业负责人。
    * lastUpdateUser  最后更新人。
    * priority  作业优先级。
    * flinkJobInfo  Flink作业信息。
    * path  作业路径。
    * singleNodeJobFlag  是否为单节点作业。
    * alarms  告警信息列表。
    * lastUpdateTime  最后更新时间，13位时间戳。
    * singleNodeJobType  单节点作业类型。
    * emptyRunningJob  空跑作业标识。
    * nextPlanTime  下次计划执行时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'jobType' => 'string',
            'status' => 'string',
            'createUser' => 'string',
            'createTime' => 'int',
            'startTime' => 'int',
            'endTime' => 'int',
            'lastInstanceStatus' => 'string',
            'lastInstanceEndTime' => 'int',
            'owner' => 'string',
            'lastUpdateUser' => 'string',
            'priority' => 'int',
            'flinkJobInfo' => 'string',
            'path' => 'string',
            'singleNodeJobFlag' => 'bool',
            'alarms' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\JobAlarm[]',
            'lastUpdateTime' => 'int',
            'singleNodeJobType' => 'string',
            'emptyRunningJob' => 'string',
            'nextPlanTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  作业名称。
    * jobType  作业类型： - BATCH: 批处理作业 - REAL_TIME: 实时作业
    * status  作业状态。
    * createUser  作业创建者。
    * createTime  作业创建时间，13位时间戳。
    * startTime  作业开始时间，13位时间戳。
    * endTime  作业结束时间，13位时间戳。
    * lastInstanceStatus  上次实例运行状态。
    * lastInstanceEndTime  上次实例结束时间，13位时间戳。
    * owner  作业负责人。
    * lastUpdateUser  最后更新人。
    * priority  作业优先级。
    * flinkJobInfo  Flink作业信息。
    * path  作业路径。
    * singleNodeJobFlag  是否为单节点作业。
    * alarms  告警信息列表。
    * lastUpdateTime  最后更新时间，13位时间戳。
    * singleNodeJobType  单节点作业类型。
    * emptyRunningJob  空跑作业标识。
    * nextPlanTime  下次计划执行时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'jobType' => null,
        'status' => null,
        'createUser' => null,
        'createTime' => 'int64',
        'startTime' => 'int64',
        'endTime' => 'int64',
        'lastInstanceStatus' => null,
        'lastInstanceEndTime' => 'int64',
        'owner' => null,
        'lastUpdateUser' => null,
        'priority' => 'int32',
        'flinkJobInfo' => null,
        'path' => null,
        'singleNodeJobFlag' => null,
        'alarms' => null,
        'lastUpdateTime' => 'int64',
        'singleNodeJobType' => null,
        'emptyRunningJob' => null,
        'nextPlanTime' => null
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
    * name  作业名称。
    * jobType  作业类型： - BATCH: 批处理作业 - REAL_TIME: 实时作业
    * status  作业状态。
    * createUser  作业创建者。
    * createTime  作业创建时间，13位时间戳。
    * startTime  作业开始时间，13位时间戳。
    * endTime  作业结束时间，13位时间戳。
    * lastInstanceStatus  上次实例运行状态。
    * lastInstanceEndTime  上次实例结束时间，13位时间戳。
    * owner  作业负责人。
    * lastUpdateUser  最后更新人。
    * priority  作业优先级。
    * flinkJobInfo  Flink作业信息。
    * path  作业路径。
    * singleNodeJobFlag  是否为单节点作业。
    * alarms  告警信息列表。
    * lastUpdateTime  最后更新时间，13位时间戳。
    * singleNodeJobType  单节点作业类型。
    * emptyRunningJob  空跑作业标识。
    * nextPlanTime  下次计划执行时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'jobType' => 'job_type',
            'status' => 'status',
            'createUser' => 'create_user',
            'createTime' => 'create_time',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'lastInstanceStatus' => 'last_instance_status',
            'lastInstanceEndTime' => 'last_instance_end_time',
            'owner' => 'owner',
            'lastUpdateUser' => 'last_update_user',
            'priority' => 'priority',
            'flinkJobInfo' => 'flink_job_info',
            'path' => 'path',
            'singleNodeJobFlag' => 'single_node_job_flag',
            'alarms' => 'alarms',
            'lastUpdateTime' => 'last_update_time',
            'singleNodeJobType' => 'single_node_job_type',
            'emptyRunningJob' => 'empty_running_job',
            'nextPlanTime' => 'next_plan_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  作业名称。
    * jobType  作业类型： - BATCH: 批处理作业 - REAL_TIME: 实时作业
    * status  作业状态。
    * createUser  作业创建者。
    * createTime  作业创建时间，13位时间戳。
    * startTime  作业开始时间，13位时间戳。
    * endTime  作业结束时间，13位时间戳。
    * lastInstanceStatus  上次实例运行状态。
    * lastInstanceEndTime  上次实例结束时间，13位时间戳。
    * owner  作业负责人。
    * lastUpdateUser  最后更新人。
    * priority  作业优先级。
    * flinkJobInfo  Flink作业信息。
    * path  作业路径。
    * singleNodeJobFlag  是否为单节点作业。
    * alarms  告警信息列表。
    * lastUpdateTime  最后更新时间，13位时间戳。
    * singleNodeJobType  单节点作业类型。
    * emptyRunningJob  空跑作业标识。
    * nextPlanTime  下次计划执行时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'jobType' => 'setJobType',
            'status' => 'setStatus',
            'createUser' => 'setCreateUser',
            'createTime' => 'setCreateTime',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'lastInstanceStatus' => 'setLastInstanceStatus',
            'lastInstanceEndTime' => 'setLastInstanceEndTime',
            'owner' => 'setOwner',
            'lastUpdateUser' => 'setLastUpdateUser',
            'priority' => 'setPriority',
            'flinkJobInfo' => 'setFlinkJobInfo',
            'path' => 'setPath',
            'singleNodeJobFlag' => 'setSingleNodeJobFlag',
            'alarms' => 'setAlarms',
            'lastUpdateTime' => 'setLastUpdateTime',
            'singleNodeJobType' => 'setSingleNodeJobType',
            'emptyRunningJob' => 'setEmptyRunningJob',
            'nextPlanTime' => 'setNextPlanTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  作业名称。
    * jobType  作业类型： - BATCH: 批处理作业 - REAL_TIME: 实时作业
    * status  作业状态。
    * createUser  作业创建者。
    * createTime  作业创建时间，13位时间戳。
    * startTime  作业开始时间，13位时间戳。
    * endTime  作业结束时间，13位时间戳。
    * lastInstanceStatus  上次实例运行状态。
    * lastInstanceEndTime  上次实例结束时间，13位时间戳。
    * owner  作业负责人。
    * lastUpdateUser  最后更新人。
    * priority  作业优先级。
    * flinkJobInfo  Flink作业信息。
    * path  作业路径。
    * singleNodeJobFlag  是否为单节点作业。
    * alarms  告警信息列表。
    * lastUpdateTime  最后更新时间，13位时间戳。
    * singleNodeJobType  单节点作业类型。
    * emptyRunningJob  空跑作业标识。
    * nextPlanTime  下次计划执行时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'jobType' => 'getJobType',
            'status' => 'getStatus',
            'createUser' => 'getCreateUser',
            'createTime' => 'getCreateTime',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'lastInstanceStatus' => 'getLastInstanceStatus',
            'lastInstanceEndTime' => 'getLastInstanceEndTime',
            'owner' => 'getOwner',
            'lastUpdateUser' => 'getLastUpdateUser',
            'priority' => 'getPriority',
            'flinkJobInfo' => 'getFlinkJobInfo',
            'path' => 'getPath',
            'singleNodeJobFlag' => 'getSingleNodeJobFlag',
            'alarms' => 'getAlarms',
            'lastUpdateTime' => 'getLastUpdateTime',
            'singleNodeJobType' => 'getSingleNodeJobType',
            'emptyRunningJob' => 'getEmptyRunningJob',
            'nextPlanTime' => 'getNextPlanTime'
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
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['lastInstanceStatus'] = isset($data['lastInstanceStatus']) ? $data['lastInstanceStatus'] : null;
        $this->container['lastInstanceEndTime'] = isset($data['lastInstanceEndTime']) ? $data['lastInstanceEndTime'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['lastUpdateUser'] = isset($data['lastUpdateUser']) ? $data['lastUpdateUser'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['flinkJobInfo'] = isset($data['flinkJobInfo']) ? $data['flinkJobInfo'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['singleNodeJobFlag'] = isset($data['singleNodeJobFlag']) ? $data['singleNodeJobFlag'] : null;
        $this->container['alarms'] = isset($data['alarms']) ? $data['alarms'] : null;
        $this->container['lastUpdateTime'] = isset($data['lastUpdateTime']) ? $data['lastUpdateTime'] : null;
        $this->container['singleNodeJobType'] = isset($data['singleNodeJobType']) ? $data['singleNodeJobType'] : null;
        $this->container['emptyRunningJob'] = isset($data['emptyRunningJob']) ? $data['emptyRunningJob'] : null;
        $this->container['nextPlanTime'] = isset($data['nextPlanTime']) ? $data['nextPlanTime'] : null;
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
    * Gets name
    *  作业名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 作业名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets jobType
    *  作业类型： - BATCH: 批处理作业 - REAL_TIME: 实时作业
    *
    * @return string|null
    */
    public function getJobType()
    {
        return $this->container['jobType'];
    }

    /**
    * Sets jobType
    *
    * @param string|null $jobType 作业类型： - BATCH: 批处理作业 - REAL_TIME: 实时作业
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets status
    *  作业状态。
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
    * @param string|null $status 作业状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createUser
    *  作业创建者。
    *
    * @return string|null
    */
    public function getCreateUser()
    {
        return $this->container['createUser'];
    }

    /**
    * Sets createUser
    *
    * @param string|null $createUser 作业创建者。
    *
    * @return $this
    */
    public function setCreateUser($createUser)
    {
        $this->container['createUser'] = $createUser;
        return $this;
    }

    /**
    * Gets createTime
    *  作业创建时间，13位时间戳。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 作业创建时间，13位时间戳。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets startTime
    *  作业开始时间，13位时间戳。
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
    * @param int|null $startTime 作业开始时间，13位时间戳。
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
    *  作业结束时间，13位时间戳。
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
    * @param int|null $endTime 作业结束时间，13位时间戳。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets lastInstanceStatus
    *  上次实例运行状态。
    *
    * @return string|null
    */
    public function getLastInstanceStatus()
    {
        return $this->container['lastInstanceStatus'];
    }

    /**
    * Sets lastInstanceStatus
    *
    * @param string|null $lastInstanceStatus 上次实例运行状态。
    *
    * @return $this
    */
    public function setLastInstanceStatus($lastInstanceStatus)
    {
        $this->container['lastInstanceStatus'] = $lastInstanceStatus;
        return $this;
    }

    /**
    * Gets lastInstanceEndTime
    *  上次实例结束时间，13位时间戳。
    *
    * @return int|null
    */
    public function getLastInstanceEndTime()
    {
        return $this->container['lastInstanceEndTime'];
    }

    /**
    * Sets lastInstanceEndTime
    *
    * @param int|null $lastInstanceEndTime 上次实例结束时间，13位时间戳。
    *
    * @return $this
    */
    public function setLastInstanceEndTime($lastInstanceEndTime)
    {
        $this->container['lastInstanceEndTime'] = $lastInstanceEndTime;
        return $this;
    }

    /**
    * Gets owner
    *  作业负责人。
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner 作业负责人。
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets lastUpdateUser
    *  最后更新人。
    *
    * @return string|null
    */
    public function getLastUpdateUser()
    {
        return $this->container['lastUpdateUser'];
    }

    /**
    * Sets lastUpdateUser
    *
    * @param string|null $lastUpdateUser 最后更新人。
    *
    * @return $this
    */
    public function setLastUpdateUser($lastUpdateUser)
    {
        $this->container['lastUpdateUser'] = $lastUpdateUser;
        return $this;
    }

    /**
    * Gets priority
    *  作业优先级。
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
    * @param int|null $priority 作业优先级。
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets flinkJobInfo
    *  Flink作业信息。
    *
    * @return string|null
    */
    public function getFlinkJobInfo()
    {
        return $this->container['flinkJobInfo'];
    }

    /**
    * Sets flinkJobInfo
    *
    * @param string|null $flinkJobInfo Flink作业信息。
    *
    * @return $this
    */
    public function setFlinkJobInfo($flinkJobInfo)
    {
        $this->container['flinkJobInfo'] = $flinkJobInfo;
        return $this;
    }

    /**
    * Gets path
    *  作业路径。
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path 作业路径。
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets singleNodeJobFlag
    *  是否为单节点作业。
    *
    * @return bool|null
    */
    public function getSingleNodeJobFlag()
    {
        return $this->container['singleNodeJobFlag'];
    }

    /**
    * Sets singleNodeJobFlag
    *
    * @param bool|null $singleNodeJobFlag 是否为单节点作业。
    *
    * @return $this
    */
    public function setSingleNodeJobFlag($singleNodeJobFlag)
    {
        $this->container['singleNodeJobFlag'] = $singleNodeJobFlag;
        return $this;
    }

    /**
    * Gets alarms
    *  告警信息列表。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\JobAlarm[]|null
    */
    public function getAlarms()
    {
        return $this->container['alarms'];
    }

    /**
    * Sets alarms
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\JobAlarm[]|null $alarms 告警信息列表。
    *
    * @return $this
    */
    public function setAlarms($alarms)
    {
        $this->container['alarms'] = $alarms;
        return $this;
    }

    /**
    * Gets lastUpdateTime
    *  最后更新时间，13位时间戳。
    *
    * @return int|null
    */
    public function getLastUpdateTime()
    {
        return $this->container['lastUpdateTime'];
    }

    /**
    * Sets lastUpdateTime
    *
    * @param int|null $lastUpdateTime 最后更新时间，13位时间戳。
    *
    * @return $this
    */
    public function setLastUpdateTime($lastUpdateTime)
    {
        $this->container['lastUpdateTime'] = $lastUpdateTime;
        return $this;
    }

    /**
    * Gets singleNodeJobType
    *  单节点作业类型。
    *
    * @return string|null
    */
    public function getSingleNodeJobType()
    {
        return $this->container['singleNodeJobType'];
    }

    /**
    * Sets singleNodeJobType
    *
    * @param string|null $singleNodeJobType 单节点作业类型。
    *
    * @return $this
    */
    public function setSingleNodeJobType($singleNodeJobType)
    {
        $this->container['singleNodeJobType'] = $singleNodeJobType;
        return $this;
    }

    /**
    * Gets emptyRunningJob
    *  空跑作业标识。
    *
    * @return string|null
    */
    public function getEmptyRunningJob()
    {
        return $this->container['emptyRunningJob'];
    }

    /**
    * Sets emptyRunningJob
    *
    * @param string|null $emptyRunningJob 空跑作业标识。
    *
    * @return $this
    */
    public function setEmptyRunningJob($emptyRunningJob)
    {
        $this->container['emptyRunningJob'] = $emptyRunningJob;
        return $this;
    }

    /**
    * Gets nextPlanTime
    *  下次计划执行时间。
    *
    * @return string|null
    */
    public function getNextPlanTime()
    {
        return $this->container['nextPlanTime'];
    }

    /**
    * Sets nextPlanTime
    *
    * @param string|null $nextPlanTime 下次计划执行时间。
    *
    * @return $this
    */
    public function setNextPlanTime($nextPlanTime)
    {
        $this->container['nextPlanTime'] = $nextPlanTime;
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

