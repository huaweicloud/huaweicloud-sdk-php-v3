<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BuildRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BuildRecord';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  唯一标识
    * status  状态
    * statusCode  状态码
    * createTime  创建时间
    * scheduleTime  等待时间
    * queuedTime  排队时间
    * startTime  开始时间
    * finishTime  完成时间
    * duration  持续时间
    * buildDuration  构建时间
    * pendingDuration  等待时间
    * projectId  工程ID
    * displayName  子任务名称
    * triggerName  触发者名称
    * groupName  分组名
    * executionId  八爪鱼任务ID
    * parameters  构建执行参数列表
    * repository  仓库地址
    * branch  分支名
    * revision  commitId
    * buildYmlPath  yaml路径
    * buildYmlUrl  yaml地址
    * dailyBuildNumber  构建每日编号
    * buildRecordType  buildRecordType
    * triggerType  触发类型
    * scmType  代码源类型
    * scmWebUrl  代码源地址
    * userId  用户id
    * buildNo  构建编码
    * dailyBuildNo  构建每日编号
    * devCloudBuildType  构建类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'status' => 'string',
            'statusCode' => 'int',
            'createTime' => 'string',
            'scheduleTime' => 'string',
            'queuedTime' => 'string',
            'startTime' => 'string',
            'finishTime' => 'string',
            'duration' => 'int',
            'buildDuration' => 'int',
            'pendingDuration' => 'int',
            'projectId' => 'string',
            'displayName' => 'string',
            'triggerName' => 'string',
            'groupName' => 'string',
            'executionId' => 'string',
            'parameters' => '\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\BuildRecordParameters[]',
            'repository' => 'string',
            'branch' => 'string',
            'revision' => 'string',
            'buildYmlPath' => 'string',
            'buildYmlUrl' => 'string',
            'dailyBuildNumber' => 'string',
            'buildRecordType' => '\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\BuildRecordBuildRecordType',
            'triggerType' => 'string',
            'scmType' => 'string',
            'scmWebUrl' => 'string',
            'userId' => 'string',
            'buildNo' => 'string',
            'dailyBuildNo' => 'string',
            'devCloudBuildType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  唯一标识
    * status  状态
    * statusCode  状态码
    * createTime  创建时间
    * scheduleTime  等待时间
    * queuedTime  排队时间
    * startTime  开始时间
    * finishTime  完成时间
    * duration  持续时间
    * buildDuration  构建时间
    * pendingDuration  等待时间
    * projectId  工程ID
    * displayName  子任务名称
    * triggerName  触发者名称
    * groupName  分组名
    * executionId  八爪鱼任务ID
    * parameters  构建执行参数列表
    * repository  仓库地址
    * branch  分支名
    * revision  commitId
    * buildYmlPath  yaml路径
    * buildYmlUrl  yaml地址
    * dailyBuildNumber  构建每日编号
    * buildRecordType  buildRecordType
    * triggerType  触发类型
    * scmType  代码源类型
    * scmWebUrl  代码源地址
    * userId  用户id
    * buildNo  构建编码
    * dailyBuildNo  构建每日编号
    * devCloudBuildType  构建类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'status' => null,
        'statusCode' => null,
        'createTime' => null,
        'scheduleTime' => null,
        'queuedTime' => null,
        'startTime' => null,
        'finishTime' => null,
        'duration' => null,
        'buildDuration' => null,
        'pendingDuration' => null,
        'projectId' => null,
        'displayName' => null,
        'triggerName' => null,
        'groupName' => null,
        'executionId' => null,
        'parameters' => null,
        'repository' => null,
        'branch' => null,
        'revision' => null,
        'buildYmlPath' => null,
        'buildYmlUrl' => null,
        'dailyBuildNumber' => null,
        'buildRecordType' => null,
        'triggerType' => null,
        'scmType' => null,
        'scmWebUrl' => null,
        'userId' => null,
        'buildNo' => null,
        'dailyBuildNo' => null,
        'devCloudBuildType' => null
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
    * id  唯一标识
    * status  状态
    * statusCode  状态码
    * createTime  创建时间
    * scheduleTime  等待时间
    * queuedTime  排队时间
    * startTime  开始时间
    * finishTime  完成时间
    * duration  持续时间
    * buildDuration  构建时间
    * pendingDuration  等待时间
    * projectId  工程ID
    * displayName  子任务名称
    * triggerName  触发者名称
    * groupName  分组名
    * executionId  八爪鱼任务ID
    * parameters  构建执行参数列表
    * repository  仓库地址
    * branch  分支名
    * revision  commitId
    * buildYmlPath  yaml路径
    * buildYmlUrl  yaml地址
    * dailyBuildNumber  构建每日编号
    * buildRecordType  buildRecordType
    * triggerType  触发类型
    * scmType  代码源类型
    * scmWebUrl  代码源地址
    * userId  用户id
    * buildNo  构建编码
    * dailyBuildNo  构建每日编号
    * devCloudBuildType  构建类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'status' => 'status',
            'statusCode' => 'status_code',
            'createTime' => 'create_time',
            'scheduleTime' => 'schedule_time',
            'queuedTime' => 'queued_time',
            'startTime' => 'start_time',
            'finishTime' => 'finish_time',
            'duration' => 'duration',
            'buildDuration' => 'build_duration',
            'pendingDuration' => 'pending_duration',
            'projectId' => 'project_id',
            'displayName' => 'display_name',
            'triggerName' => 'trigger_name',
            'groupName' => 'group_name',
            'executionId' => 'execution_id',
            'parameters' => 'parameters',
            'repository' => 'repository',
            'branch' => 'branch',
            'revision' => 'revision',
            'buildYmlPath' => 'build_yml_path',
            'buildYmlUrl' => 'build_yml_url',
            'dailyBuildNumber' => 'daily_build_number',
            'buildRecordType' => 'build_record_type',
            'triggerType' => 'trigger_type',
            'scmType' => 'scm_type',
            'scmWebUrl' => 'scm_web_url',
            'userId' => 'user_id',
            'buildNo' => 'build_no',
            'dailyBuildNo' => 'daily_build_no',
            'devCloudBuildType' => 'dev_cloud_build_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  唯一标识
    * status  状态
    * statusCode  状态码
    * createTime  创建时间
    * scheduleTime  等待时间
    * queuedTime  排队时间
    * startTime  开始时间
    * finishTime  完成时间
    * duration  持续时间
    * buildDuration  构建时间
    * pendingDuration  等待时间
    * projectId  工程ID
    * displayName  子任务名称
    * triggerName  触发者名称
    * groupName  分组名
    * executionId  八爪鱼任务ID
    * parameters  构建执行参数列表
    * repository  仓库地址
    * branch  分支名
    * revision  commitId
    * buildYmlPath  yaml路径
    * buildYmlUrl  yaml地址
    * dailyBuildNumber  构建每日编号
    * buildRecordType  buildRecordType
    * triggerType  触发类型
    * scmType  代码源类型
    * scmWebUrl  代码源地址
    * userId  用户id
    * buildNo  构建编码
    * dailyBuildNo  构建每日编号
    * devCloudBuildType  构建类型
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'status' => 'setStatus',
            'statusCode' => 'setStatusCode',
            'createTime' => 'setCreateTime',
            'scheduleTime' => 'setScheduleTime',
            'queuedTime' => 'setQueuedTime',
            'startTime' => 'setStartTime',
            'finishTime' => 'setFinishTime',
            'duration' => 'setDuration',
            'buildDuration' => 'setBuildDuration',
            'pendingDuration' => 'setPendingDuration',
            'projectId' => 'setProjectId',
            'displayName' => 'setDisplayName',
            'triggerName' => 'setTriggerName',
            'groupName' => 'setGroupName',
            'executionId' => 'setExecutionId',
            'parameters' => 'setParameters',
            'repository' => 'setRepository',
            'branch' => 'setBranch',
            'revision' => 'setRevision',
            'buildYmlPath' => 'setBuildYmlPath',
            'buildYmlUrl' => 'setBuildYmlUrl',
            'dailyBuildNumber' => 'setDailyBuildNumber',
            'buildRecordType' => 'setBuildRecordType',
            'triggerType' => 'setTriggerType',
            'scmType' => 'setScmType',
            'scmWebUrl' => 'setScmWebUrl',
            'userId' => 'setUserId',
            'buildNo' => 'setBuildNo',
            'dailyBuildNo' => 'setDailyBuildNo',
            'devCloudBuildType' => 'setDevCloudBuildType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  唯一标识
    * status  状态
    * statusCode  状态码
    * createTime  创建时间
    * scheduleTime  等待时间
    * queuedTime  排队时间
    * startTime  开始时间
    * finishTime  完成时间
    * duration  持续时间
    * buildDuration  构建时间
    * pendingDuration  等待时间
    * projectId  工程ID
    * displayName  子任务名称
    * triggerName  触发者名称
    * groupName  分组名
    * executionId  八爪鱼任务ID
    * parameters  构建执行参数列表
    * repository  仓库地址
    * branch  分支名
    * revision  commitId
    * buildYmlPath  yaml路径
    * buildYmlUrl  yaml地址
    * dailyBuildNumber  构建每日编号
    * buildRecordType  buildRecordType
    * triggerType  触发类型
    * scmType  代码源类型
    * scmWebUrl  代码源地址
    * userId  用户id
    * buildNo  构建编码
    * dailyBuildNo  构建每日编号
    * devCloudBuildType  构建类型
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'status' => 'getStatus',
            'statusCode' => 'getStatusCode',
            'createTime' => 'getCreateTime',
            'scheduleTime' => 'getScheduleTime',
            'queuedTime' => 'getQueuedTime',
            'startTime' => 'getStartTime',
            'finishTime' => 'getFinishTime',
            'duration' => 'getDuration',
            'buildDuration' => 'getBuildDuration',
            'pendingDuration' => 'getPendingDuration',
            'projectId' => 'getProjectId',
            'displayName' => 'getDisplayName',
            'triggerName' => 'getTriggerName',
            'groupName' => 'getGroupName',
            'executionId' => 'getExecutionId',
            'parameters' => 'getParameters',
            'repository' => 'getRepository',
            'branch' => 'getBranch',
            'revision' => 'getRevision',
            'buildYmlPath' => 'getBuildYmlPath',
            'buildYmlUrl' => 'getBuildYmlUrl',
            'dailyBuildNumber' => 'getDailyBuildNumber',
            'buildRecordType' => 'getBuildRecordType',
            'triggerType' => 'getTriggerType',
            'scmType' => 'getScmType',
            'scmWebUrl' => 'getScmWebUrl',
            'userId' => 'getUserId',
            'buildNo' => 'getBuildNo',
            'dailyBuildNo' => 'getDailyBuildNo',
            'devCloudBuildType' => 'getDevCloudBuildType'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['statusCode'] = isset($data['statusCode']) ? $data['statusCode'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['scheduleTime'] = isset($data['scheduleTime']) ? $data['scheduleTime'] : null;
        $this->container['queuedTime'] = isset($data['queuedTime']) ? $data['queuedTime'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['finishTime'] = isset($data['finishTime']) ? $data['finishTime'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['buildDuration'] = isset($data['buildDuration']) ? $data['buildDuration'] : null;
        $this->container['pendingDuration'] = isset($data['pendingDuration']) ? $data['pendingDuration'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['triggerName'] = isset($data['triggerName']) ? $data['triggerName'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['executionId'] = isset($data['executionId']) ? $data['executionId'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['repository'] = isset($data['repository']) ? $data['repository'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['revision'] = isset($data['revision']) ? $data['revision'] : null;
        $this->container['buildYmlPath'] = isset($data['buildYmlPath']) ? $data['buildYmlPath'] : null;
        $this->container['buildYmlUrl'] = isset($data['buildYmlUrl']) ? $data['buildYmlUrl'] : null;
        $this->container['dailyBuildNumber'] = isset($data['dailyBuildNumber']) ? $data['dailyBuildNumber'] : null;
        $this->container['buildRecordType'] = isset($data['buildRecordType']) ? $data['buildRecordType'] : null;
        $this->container['triggerType'] = isset($data['triggerType']) ? $data['triggerType'] : null;
        $this->container['scmType'] = isset($data['scmType']) ? $data['scmType'] : null;
        $this->container['scmWebUrl'] = isset($data['scmWebUrl']) ? $data['scmWebUrl'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['buildNo'] = isset($data['buildNo']) ? $data['buildNo'] : null;
        $this->container['dailyBuildNo'] = isset($data['dailyBuildNo']) ? $data['dailyBuildNo'] : null;
        $this->container['devCloudBuildType'] = isset($data['devCloudBuildType']) ? $data['devCloudBuildType'] : null;
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
    *  唯一标识
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 唯一标识
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets status
    *  状态
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
    * @param string|null $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets statusCode
    *  状态码
    *
    * @return int|null
    */
    public function getStatusCode()
    {
        return $this->container['statusCode'];
    }

    /**
    * Sets statusCode
    *
    * @param int|null $statusCode 状态码
    *
    * @return $this
    */
    public function setStatusCode($statusCode)
    {
        $this->container['statusCode'] = $statusCode;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets scheduleTime
    *  等待时间
    *
    * @return string|null
    */
    public function getScheduleTime()
    {
        return $this->container['scheduleTime'];
    }

    /**
    * Sets scheduleTime
    *
    * @param string|null $scheduleTime 等待时间
    *
    * @return $this
    */
    public function setScheduleTime($scheduleTime)
    {
        $this->container['scheduleTime'] = $scheduleTime;
        return $this;
    }

    /**
    * Gets queuedTime
    *  排队时间
    *
    * @return string|null
    */
    public function getQueuedTime()
    {
        return $this->container['queuedTime'];
    }

    /**
    * Sets queuedTime
    *
    * @param string|null $queuedTime 排队时间
    *
    * @return $this
    */
    public function setQueuedTime($queuedTime)
    {
        $this->container['queuedTime'] = $queuedTime;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets finishTime
    *  完成时间
    *
    * @return string|null
    */
    public function getFinishTime()
    {
        return $this->container['finishTime'];
    }

    /**
    * Sets finishTime
    *
    * @param string|null $finishTime 完成时间
    *
    * @return $this
    */
    public function setFinishTime($finishTime)
    {
        $this->container['finishTime'] = $finishTime;
        return $this;
    }

    /**
    * Gets duration
    *  持续时间
    *
    * @return int|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param int|null $duration 持续时间
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets buildDuration
    *  构建时间
    *
    * @return int|null
    */
    public function getBuildDuration()
    {
        return $this->container['buildDuration'];
    }

    /**
    * Sets buildDuration
    *
    * @param int|null $buildDuration 构建时间
    *
    * @return $this
    */
    public function setBuildDuration($buildDuration)
    {
        $this->container['buildDuration'] = $buildDuration;
        return $this;
    }

    /**
    * Gets pendingDuration
    *  等待时间
    *
    * @return int|null
    */
    public function getPendingDuration()
    {
        return $this->container['pendingDuration'];
    }

    /**
    * Sets pendingDuration
    *
    * @param int|null $pendingDuration 等待时间
    *
    * @return $this
    */
    public function setPendingDuration($pendingDuration)
    {
        $this->container['pendingDuration'] = $pendingDuration;
        return $this;
    }

    /**
    * Gets projectId
    *  工程ID
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 工程ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets displayName
    *  子任务名称
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName 子任务名称
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets triggerName
    *  触发者名称
    *
    * @return string|null
    */
    public function getTriggerName()
    {
        return $this->container['triggerName'];
    }

    /**
    * Sets triggerName
    *
    * @param string|null $triggerName 触发者名称
    *
    * @return $this
    */
    public function setTriggerName($triggerName)
    {
        $this->container['triggerName'] = $triggerName;
        return $this;
    }

    /**
    * Gets groupName
    *  分组名
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName 分组名
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets executionId
    *  八爪鱼任务ID
    *
    * @return string|null
    */
    public function getExecutionId()
    {
        return $this->container['executionId'];
    }

    /**
    * Sets executionId
    *
    * @param string|null $executionId 八爪鱼任务ID
    *
    * @return $this
    */
    public function setExecutionId($executionId)
    {
        $this->container['executionId'] = $executionId;
        return $this;
    }

    /**
    * Gets parameters
    *  构建执行参数列表
    *
    * @return \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\BuildRecordParameters[]|null
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\BuildRecordParameters[]|null $parameters 构建执行参数列表
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
        return $this;
    }

    /**
    * Gets repository
    *  仓库地址
    *
    * @return string|null
    */
    public function getRepository()
    {
        return $this->container['repository'];
    }

    /**
    * Sets repository
    *
    * @param string|null $repository 仓库地址
    *
    * @return $this
    */
    public function setRepository($repository)
    {
        $this->container['repository'] = $repository;
        return $this;
    }

    /**
    * Gets branch
    *  分支名
    *
    * @return string|null
    */
    public function getBranch()
    {
        return $this->container['branch'];
    }

    /**
    * Sets branch
    *
    * @param string|null $branch 分支名
    *
    * @return $this
    */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;
        return $this;
    }

    /**
    * Gets revision
    *  commitId
    *
    * @return string|null
    */
    public function getRevision()
    {
        return $this->container['revision'];
    }

    /**
    * Sets revision
    *
    * @param string|null $revision commitId
    *
    * @return $this
    */
    public function setRevision($revision)
    {
        $this->container['revision'] = $revision;
        return $this;
    }

    /**
    * Gets buildYmlPath
    *  yaml路径
    *
    * @return string|null
    */
    public function getBuildYmlPath()
    {
        return $this->container['buildYmlPath'];
    }

    /**
    * Sets buildYmlPath
    *
    * @param string|null $buildYmlPath yaml路径
    *
    * @return $this
    */
    public function setBuildYmlPath($buildYmlPath)
    {
        $this->container['buildYmlPath'] = $buildYmlPath;
        return $this;
    }

    /**
    * Gets buildYmlUrl
    *  yaml地址
    *
    * @return string|null
    */
    public function getBuildYmlUrl()
    {
        return $this->container['buildYmlUrl'];
    }

    /**
    * Sets buildYmlUrl
    *
    * @param string|null $buildYmlUrl yaml地址
    *
    * @return $this
    */
    public function setBuildYmlUrl($buildYmlUrl)
    {
        $this->container['buildYmlUrl'] = $buildYmlUrl;
        return $this;
    }

    /**
    * Gets dailyBuildNumber
    *  构建每日编号
    *
    * @return string|null
    */
    public function getDailyBuildNumber()
    {
        return $this->container['dailyBuildNumber'];
    }

    /**
    * Sets dailyBuildNumber
    *
    * @param string|null $dailyBuildNumber 构建每日编号
    *
    * @return $this
    */
    public function setDailyBuildNumber($dailyBuildNumber)
    {
        $this->container['dailyBuildNumber'] = $dailyBuildNumber;
        return $this;
    }

    /**
    * Gets buildRecordType
    *  buildRecordType
    *
    * @return \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\BuildRecordBuildRecordType|null
    */
    public function getBuildRecordType()
    {
        return $this->container['buildRecordType'];
    }

    /**
    * Sets buildRecordType
    *
    * @param \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\BuildRecordBuildRecordType|null $buildRecordType buildRecordType
    *
    * @return $this
    */
    public function setBuildRecordType($buildRecordType)
    {
        $this->container['buildRecordType'] = $buildRecordType;
        return $this;
    }

    /**
    * Gets triggerType
    *  触发类型
    *
    * @return string|null
    */
    public function getTriggerType()
    {
        return $this->container['triggerType'];
    }

    /**
    * Sets triggerType
    *
    * @param string|null $triggerType 触发类型
    *
    * @return $this
    */
    public function setTriggerType($triggerType)
    {
        $this->container['triggerType'] = $triggerType;
        return $this;
    }

    /**
    * Gets scmType
    *  代码源类型
    *
    * @return string|null
    */
    public function getScmType()
    {
        return $this->container['scmType'];
    }

    /**
    * Sets scmType
    *
    * @param string|null $scmType 代码源类型
    *
    * @return $this
    */
    public function setScmType($scmType)
    {
        $this->container['scmType'] = $scmType;
        return $this;
    }

    /**
    * Gets scmWebUrl
    *  代码源地址
    *
    * @return string|null
    */
    public function getScmWebUrl()
    {
        return $this->container['scmWebUrl'];
    }

    /**
    * Sets scmWebUrl
    *
    * @param string|null $scmWebUrl 代码源地址
    *
    * @return $this
    */
    public function setScmWebUrl($scmWebUrl)
    {
        $this->container['scmWebUrl'] = $scmWebUrl;
        return $this;
    }

    /**
    * Gets userId
    *  用户id
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId 用户id
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets buildNo
    *  构建编码
    *
    * @return string|null
    */
    public function getBuildNo()
    {
        return $this->container['buildNo'];
    }

    /**
    * Sets buildNo
    *
    * @param string|null $buildNo 构建编码
    *
    * @return $this
    */
    public function setBuildNo($buildNo)
    {
        $this->container['buildNo'] = $buildNo;
        return $this;
    }

    /**
    * Gets dailyBuildNo
    *  构建每日编号
    *
    * @return string|null
    */
    public function getDailyBuildNo()
    {
        return $this->container['dailyBuildNo'];
    }

    /**
    * Sets dailyBuildNo
    *
    * @param string|null $dailyBuildNo 构建每日编号
    *
    * @return $this
    */
    public function setDailyBuildNo($dailyBuildNo)
    {
        $this->container['dailyBuildNo'] = $dailyBuildNo;
        return $this;
    }

    /**
    * Gets devCloudBuildType
    *  构建类型
    *
    * @return string|null
    */
    public function getDevCloudBuildType()
    {
        return $this->container['devCloudBuildType'];
    }

    /**
    * Sets devCloudBuildType
    *
    * @param string|null $devCloudBuildType 构建类型
    *
    * @return $this
    */
    public function setDevCloudBuildType($devCloudBuildType)
    {
        $this->container['devCloudBuildType'] = $devCloudBuildType;
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

