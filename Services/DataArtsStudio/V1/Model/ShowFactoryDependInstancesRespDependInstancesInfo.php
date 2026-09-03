<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowFactoryDependInstancesRespDependInstancesInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowFactoryDependInstancesResp_depend_instances_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例ID。
    * jobId  作业id。
    * jobName  作业名称。
    * directoryPath  作业路径。
    * forceSuccess  实例是否是执行了强制成功。
    * ignoreSuccess  实例是否是执行了忽略失败。
    * parentInstanceIds  依赖的上游实例ID。
    * planTime  计划开始时间。
    * runningTime  运行时长，单位：毫秒。 - 当实例是运行中时，运行时长为当前时间减去开始时间； - 当实例运行结束时，运行时长为结束时间减去开始时间；
    * startTime  开始时间。
    * endTime  结束时间。
    * status  实例状态。
    * submitTime  提交时间。
    * version  版本号。
    * workspaceId  所在的工作空间ID。
    * workspaceName  所在的工作空间名称。
    * avgExecuteTimeMs  作业平均执行时长，单位：毫秒。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'jobId' => 'int',
            'jobName' => 'string',
            'directoryPath' => 'string',
            'forceSuccess' => 'bool',
            'ignoreSuccess' => 'bool',
            'parentInstanceIds' => 'int[]',
            'planTime' => 'int',
            'runningTime' => 'int',
            'startTime' => 'int',
            'endTime' => 'int',
            'status' => 'string',
            'submitTime' => 'int',
            'version' => 'int',
            'workspaceId' => 'string',
            'workspaceName' => 'string',
            'avgExecuteTimeMs' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例ID。
    * jobId  作业id。
    * jobName  作业名称。
    * directoryPath  作业路径。
    * forceSuccess  实例是否是执行了强制成功。
    * ignoreSuccess  实例是否是执行了忽略失败。
    * parentInstanceIds  依赖的上游实例ID。
    * planTime  计划开始时间。
    * runningTime  运行时长，单位：毫秒。 - 当实例是运行中时，运行时长为当前时间减去开始时间； - 当实例运行结束时，运行时长为结束时间减去开始时间；
    * startTime  开始时间。
    * endTime  结束时间。
    * status  实例状态。
    * submitTime  提交时间。
    * version  版本号。
    * workspaceId  所在的工作空间ID。
    * workspaceName  所在的工作空间名称。
    * avgExecuteTimeMs  作业平均执行时长，单位：毫秒。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'jobId' => 'int64',
        'jobName' => null,
        'directoryPath' => null,
        'forceSuccess' => null,
        'ignoreSuccess' => null,
        'parentInstanceIds' => 'int64',
        'planTime' => 'int64',
        'runningTime' => 'int64',
        'startTime' => 'int64',
        'endTime' => 'int64',
        'status' => null,
        'submitTime' => 'int64',
        'version' => 'int32',
        'workspaceId' => null,
        'workspaceName' => null,
        'avgExecuteTimeMs' => 'int64'
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
    * id  实例ID。
    * jobId  作业id。
    * jobName  作业名称。
    * directoryPath  作业路径。
    * forceSuccess  实例是否是执行了强制成功。
    * ignoreSuccess  实例是否是执行了忽略失败。
    * parentInstanceIds  依赖的上游实例ID。
    * planTime  计划开始时间。
    * runningTime  运行时长，单位：毫秒。 - 当实例是运行中时，运行时长为当前时间减去开始时间； - 当实例运行结束时，运行时长为结束时间减去开始时间；
    * startTime  开始时间。
    * endTime  结束时间。
    * status  实例状态。
    * submitTime  提交时间。
    * version  版本号。
    * workspaceId  所在的工作空间ID。
    * workspaceName  所在的工作空间名称。
    * avgExecuteTimeMs  作业平均执行时长，单位：毫秒。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'jobId' => 'job_id',
            'jobName' => 'job_name',
            'directoryPath' => 'directory_path',
            'forceSuccess' => 'force_success',
            'ignoreSuccess' => 'ignore_success',
            'parentInstanceIds' => 'parent_instance_ids',
            'planTime' => 'plan_time',
            'runningTime' => 'running_time',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'status' => 'status',
            'submitTime' => 'submit_time',
            'version' => 'version',
            'workspaceId' => 'workspace_id',
            'workspaceName' => 'workspace_name',
            'avgExecuteTimeMs' => 'avg_execute_time_ms'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例ID。
    * jobId  作业id。
    * jobName  作业名称。
    * directoryPath  作业路径。
    * forceSuccess  实例是否是执行了强制成功。
    * ignoreSuccess  实例是否是执行了忽略失败。
    * parentInstanceIds  依赖的上游实例ID。
    * planTime  计划开始时间。
    * runningTime  运行时长，单位：毫秒。 - 当实例是运行中时，运行时长为当前时间减去开始时间； - 当实例运行结束时，运行时长为结束时间减去开始时间；
    * startTime  开始时间。
    * endTime  结束时间。
    * status  实例状态。
    * submitTime  提交时间。
    * version  版本号。
    * workspaceId  所在的工作空间ID。
    * workspaceName  所在的工作空间名称。
    * avgExecuteTimeMs  作业平均执行时长，单位：毫秒。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'jobId' => 'setJobId',
            'jobName' => 'setJobName',
            'directoryPath' => 'setDirectoryPath',
            'forceSuccess' => 'setForceSuccess',
            'ignoreSuccess' => 'setIgnoreSuccess',
            'parentInstanceIds' => 'setParentInstanceIds',
            'planTime' => 'setPlanTime',
            'runningTime' => 'setRunningTime',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'status' => 'setStatus',
            'submitTime' => 'setSubmitTime',
            'version' => 'setVersion',
            'workspaceId' => 'setWorkspaceId',
            'workspaceName' => 'setWorkspaceName',
            'avgExecuteTimeMs' => 'setAvgExecuteTimeMs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例ID。
    * jobId  作业id。
    * jobName  作业名称。
    * directoryPath  作业路径。
    * forceSuccess  实例是否是执行了强制成功。
    * ignoreSuccess  实例是否是执行了忽略失败。
    * parentInstanceIds  依赖的上游实例ID。
    * planTime  计划开始时间。
    * runningTime  运行时长，单位：毫秒。 - 当实例是运行中时，运行时长为当前时间减去开始时间； - 当实例运行结束时，运行时长为结束时间减去开始时间；
    * startTime  开始时间。
    * endTime  结束时间。
    * status  实例状态。
    * submitTime  提交时间。
    * version  版本号。
    * workspaceId  所在的工作空间ID。
    * workspaceName  所在的工作空间名称。
    * avgExecuteTimeMs  作业平均执行时长，单位：毫秒。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'jobId' => 'getJobId',
            'jobName' => 'getJobName',
            'directoryPath' => 'getDirectoryPath',
            'forceSuccess' => 'getForceSuccess',
            'ignoreSuccess' => 'getIgnoreSuccess',
            'parentInstanceIds' => 'getParentInstanceIds',
            'planTime' => 'getPlanTime',
            'runningTime' => 'getRunningTime',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'status' => 'getStatus',
            'submitTime' => 'getSubmitTime',
            'version' => 'getVersion',
            'workspaceId' => 'getWorkspaceId',
            'workspaceName' => 'getWorkspaceName',
            'avgExecuteTimeMs' => 'getAvgExecuteTimeMs'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['directoryPath'] = isset($data['directoryPath']) ? $data['directoryPath'] : null;
        $this->container['forceSuccess'] = isset($data['forceSuccess']) ? $data['forceSuccess'] : null;
        $this->container['ignoreSuccess'] = isset($data['ignoreSuccess']) ? $data['ignoreSuccess'] : null;
        $this->container['parentInstanceIds'] = isset($data['parentInstanceIds']) ? $data['parentInstanceIds'] : null;
        $this->container['planTime'] = isset($data['planTime']) ? $data['planTime'] : null;
        $this->container['runningTime'] = isset($data['runningTime']) ? $data['runningTime'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['submitTime'] = isset($data['submitTime']) ? $data['submitTime'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['workspaceName'] = isset($data['workspaceName']) ? $data['workspaceName'] : null;
        $this->container['avgExecuteTimeMs'] = isset($data['avgExecuteTimeMs']) ? $data['avgExecuteTimeMs'] : null;
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
    * Gets id
    *  实例ID。
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 实例ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets jobId
    *  作业id。
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
    * @param int|null $jobId 作业id。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets jobName
    *  作业名称。
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
    * @param string|null $jobName 作业名称。
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets directoryPath
    *  作业路径。
    *
    * @return string|null
    */
    public function getDirectoryPath()
    {
        return $this->container['directoryPath'];
    }

    /**
    * Sets directoryPath
    *
    * @param string|null $directoryPath 作业路径。
    *
    * @return $this
    */
    public function setDirectoryPath($directoryPath)
    {
        $this->container['directoryPath'] = $directoryPath;
        return $this;
    }

    /**
    * Gets forceSuccess
    *  实例是否是执行了强制成功。
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
    * @param bool|null $forceSuccess 实例是否是执行了强制成功。
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
    *  实例是否是执行了忽略失败。
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
    * @param bool|null $ignoreSuccess 实例是否是执行了忽略失败。
    *
    * @return $this
    */
    public function setIgnoreSuccess($ignoreSuccess)
    {
        $this->container['ignoreSuccess'] = $ignoreSuccess;
        return $this;
    }

    /**
    * Gets parentInstanceIds
    *  依赖的上游实例ID。
    *
    * @return int[]|null
    */
    public function getParentInstanceIds()
    {
        return $this->container['parentInstanceIds'];
    }

    /**
    * Sets parentInstanceIds
    *
    * @param int[]|null $parentInstanceIds 依赖的上游实例ID。
    *
    * @return $this
    */
    public function setParentInstanceIds($parentInstanceIds)
    {
        $this->container['parentInstanceIds'] = $parentInstanceIds;
        return $this;
    }

    /**
    * Gets planTime
    *  计划开始时间。
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
    * @param int|null $planTime 计划开始时间。
    *
    * @return $this
    */
    public function setPlanTime($planTime)
    {
        $this->container['planTime'] = $planTime;
        return $this;
    }

    /**
    * Gets runningTime
    *  运行时长，单位：毫秒。 - 当实例是运行中时，运行时长为当前时间减去开始时间； - 当实例运行结束时，运行时长为结束时间减去开始时间；
    *
    * @return int|null
    */
    public function getRunningTime()
    {
        return $this->container['runningTime'];
    }

    /**
    * Sets runningTime
    *
    * @param int|null $runningTime 运行时长，单位：毫秒。 - 当实例是运行中时，运行时长为当前时间减去开始时间； - 当实例运行结束时，运行时长为结束时间减去开始时间；
    *
    * @return $this
    */
    public function setRunningTime($runningTime)
    {
        $this->container['runningTime'] = $runningTime;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间。
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
    * @param int|null $startTime 开始时间。
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
    *  结束时间。
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
    * @param int|null $endTime 结束时间。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets status
    *  实例状态。
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
    * @param string|null $status 实例状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets submitTime
    *  提交时间。
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
    * @param int|null $submitTime 提交时间。
    *
    * @return $this
    */
    public function setSubmitTime($submitTime)
    {
        $this->container['submitTime'] = $submitTime;
        return $this;
    }

    /**
    * Gets version
    *  版本号。
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
    * @param int|null $version 版本号。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets workspaceId
    *  所在的工作空间ID。
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId 所在的工作空间ID。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets workspaceName
    *  所在的工作空间名称。
    *
    * @return string|null
    */
    public function getWorkspaceName()
    {
        return $this->container['workspaceName'];
    }

    /**
    * Sets workspaceName
    *
    * @param string|null $workspaceName 所在的工作空间名称。
    *
    * @return $this
    */
    public function setWorkspaceName($workspaceName)
    {
        $this->container['workspaceName'] = $workspaceName;
        return $this;
    }

    /**
    * Gets avgExecuteTimeMs
    *  作业平均执行时长，单位：毫秒。
    *
    * @return int|null
    */
    public function getAvgExecuteTimeMs()
    {
        return $this->container['avgExecuteTimeMs'];
    }

    /**
    * Sets avgExecuteTimeMs
    *
    * @param int|null $avgExecuteTimeMs 作业平均执行时长，单位：毫秒。
    *
    * @return $this
    */
    public function setAvgExecuteTimeMs($avgExecuteTimeMs)
    {
        $this->container['avgExecuteTimeMs'] = $avgExecuteTimeMs;
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

