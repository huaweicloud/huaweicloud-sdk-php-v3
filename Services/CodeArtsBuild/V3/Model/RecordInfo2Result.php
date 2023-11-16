<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecordInfo2Result implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecordInfo2_result';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  id
    * buildProjectId  构建工程ID,唯一对应codeci_job_id
    * buildRecordId  构建记录ID
    * parentRecordId  父构建记录ID
    * devcloudProjectId  项目ID
    * codeciJobId  codeci任务ID,唯一对应build_project_id
    * userId  用户ID
    * buildNo  构建编号
    * dailyBuildNum  每日构建编号，每日从1开始
    * executionId  八爪鱼任务ID
    * repoName  仓库名称
    * repoId  仓库id
    * branch  仓库分支
    * tag  仓库tag
    * commit  仓库commit ID
    * commitMessage  仓库commit提交信息
    * commitCreateTime  commit创建时间
    * triggerType  触发类型
    * buildType  构建类型
    * status  构建状态
    * domainId  租户ID
    * createTime  任务创建时间
    * scheduleTime  构建下发耗时
    * queuedTime  构建排队耗时
    * startTime  开始构建时间
    * runnableTime  八爪鱼真正开始构建时间
    * finishTime  构建结束时间
    * duration  构建时长
    * recordStatus  record状态
    * usePrivateSlave  是否使用自定义执行机
    * region  租户所在region
    * errMsg  错误信息
    * buildConfigType  构建配置类型，YAML或ACTION
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'buildProjectId' => 'string',
            'buildRecordId' => 'string',
            'parentRecordId' => 'string',
            'devcloudProjectId' => 'string',
            'codeciJobId' => 'string',
            'userId' => 'string',
            'buildNo' => 'int',
            'dailyBuildNum' => 'string',
            'executionId' => 'string',
            'repoName' => 'string',
            'repoId' => 'string',
            'branch' => 'string',
            'tag' => 'string',
            'commit' => 'string',
            'commitMessage' => 'string',
            'commitCreateTime' => 'string',
            'triggerType' => 'string',
            'buildType' => 'string',
            'status' => 'string',
            'domainId' => 'string',
            'createTime' => 'string',
            'scheduleTime' => 'string',
            'queuedTime' => 'string',
            'startTime' => 'string',
            'runnableTime' => 'string',
            'finishTime' => 'string',
            'duration' => 'int',
            'recordStatus' => 'string',
            'usePrivateSlave' => 'int',
            'region' => 'string',
            'errMsg' => 'string',
            'buildConfigType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  id
    * buildProjectId  构建工程ID,唯一对应codeci_job_id
    * buildRecordId  构建记录ID
    * parentRecordId  父构建记录ID
    * devcloudProjectId  项目ID
    * codeciJobId  codeci任务ID,唯一对应build_project_id
    * userId  用户ID
    * buildNo  构建编号
    * dailyBuildNum  每日构建编号，每日从1开始
    * executionId  八爪鱼任务ID
    * repoName  仓库名称
    * repoId  仓库id
    * branch  仓库分支
    * tag  仓库tag
    * commit  仓库commit ID
    * commitMessage  仓库commit提交信息
    * commitCreateTime  commit创建时间
    * triggerType  触发类型
    * buildType  构建类型
    * status  构建状态
    * domainId  租户ID
    * createTime  任务创建时间
    * scheduleTime  构建下发耗时
    * queuedTime  构建排队耗时
    * startTime  开始构建时间
    * runnableTime  八爪鱼真正开始构建时间
    * finishTime  构建结束时间
    * duration  构建时长
    * recordStatus  record状态
    * usePrivateSlave  是否使用自定义执行机
    * region  租户所在region
    * errMsg  错误信息
    * buildConfigType  构建配置类型，YAML或ACTION
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'buildProjectId' => null,
        'buildRecordId' => null,
        'parentRecordId' => null,
        'devcloudProjectId' => null,
        'codeciJobId' => null,
        'userId' => null,
        'buildNo' => null,
        'dailyBuildNum' => null,
        'executionId' => null,
        'repoName' => null,
        'repoId' => null,
        'branch' => null,
        'tag' => null,
        'commit' => null,
        'commitMessage' => null,
        'commitCreateTime' => null,
        'triggerType' => null,
        'buildType' => null,
        'status' => null,
        'domainId' => null,
        'createTime' => null,
        'scheduleTime' => null,
        'queuedTime' => null,
        'startTime' => null,
        'runnableTime' => null,
        'finishTime' => null,
        'duration' => null,
        'recordStatus' => null,
        'usePrivateSlave' => null,
        'region' => null,
        'errMsg' => null,
        'buildConfigType' => null
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
    * id  id
    * buildProjectId  构建工程ID,唯一对应codeci_job_id
    * buildRecordId  构建记录ID
    * parentRecordId  父构建记录ID
    * devcloudProjectId  项目ID
    * codeciJobId  codeci任务ID,唯一对应build_project_id
    * userId  用户ID
    * buildNo  构建编号
    * dailyBuildNum  每日构建编号，每日从1开始
    * executionId  八爪鱼任务ID
    * repoName  仓库名称
    * repoId  仓库id
    * branch  仓库分支
    * tag  仓库tag
    * commit  仓库commit ID
    * commitMessage  仓库commit提交信息
    * commitCreateTime  commit创建时间
    * triggerType  触发类型
    * buildType  构建类型
    * status  构建状态
    * domainId  租户ID
    * createTime  任务创建时间
    * scheduleTime  构建下发耗时
    * queuedTime  构建排队耗时
    * startTime  开始构建时间
    * runnableTime  八爪鱼真正开始构建时间
    * finishTime  构建结束时间
    * duration  构建时长
    * recordStatus  record状态
    * usePrivateSlave  是否使用自定义执行机
    * region  租户所在region
    * errMsg  错误信息
    * buildConfigType  构建配置类型，YAML或ACTION
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'buildProjectId' => 'build_project_id',
            'buildRecordId' => 'build_record_id',
            'parentRecordId' => 'parent_record_id',
            'devcloudProjectId' => 'devcloud_project_id',
            'codeciJobId' => 'codeci_job_id',
            'userId' => 'user_id',
            'buildNo' => 'build_no',
            'dailyBuildNum' => 'daily_build_num',
            'executionId' => 'execution_id',
            'repoName' => 'repo_name',
            'repoId' => 'repo_id',
            'branch' => 'branch',
            'tag' => 'tag',
            'commit' => 'commit',
            'commitMessage' => 'commit_message',
            'commitCreateTime' => 'commit_create_time',
            'triggerType' => 'trigger_type',
            'buildType' => 'build_type',
            'status' => 'status',
            'domainId' => 'domain_id',
            'createTime' => 'create_time',
            'scheduleTime' => 'schedule_time',
            'queuedTime' => 'queued_time',
            'startTime' => 'start_time',
            'runnableTime' => 'runnable_time',
            'finishTime' => 'finish_time',
            'duration' => 'duration',
            'recordStatus' => 'record_status',
            'usePrivateSlave' => 'use_private_slave',
            'region' => 'region',
            'errMsg' => 'err_msg',
            'buildConfigType' => 'build_config_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  id
    * buildProjectId  构建工程ID,唯一对应codeci_job_id
    * buildRecordId  构建记录ID
    * parentRecordId  父构建记录ID
    * devcloudProjectId  项目ID
    * codeciJobId  codeci任务ID,唯一对应build_project_id
    * userId  用户ID
    * buildNo  构建编号
    * dailyBuildNum  每日构建编号，每日从1开始
    * executionId  八爪鱼任务ID
    * repoName  仓库名称
    * repoId  仓库id
    * branch  仓库分支
    * tag  仓库tag
    * commit  仓库commit ID
    * commitMessage  仓库commit提交信息
    * commitCreateTime  commit创建时间
    * triggerType  触发类型
    * buildType  构建类型
    * status  构建状态
    * domainId  租户ID
    * createTime  任务创建时间
    * scheduleTime  构建下发耗时
    * queuedTime  构建排队耗时
    * startTime  开始构建时间
    * runnableTime  八爪鱼真正开始构建时间
    * finishTime  构建结束时间
    * duration  构建时长
    * recordStatus  record状态
    * usePrivateSlave  是否使用自定义执行机
    * region  租户所在region
    * errMsg  错误信息
    * buildConfigType  构建配置类型，YAML或ACTION
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'buildProjectId' => 'setBuildProjectId',
            'buildRecordId' => 'setBuildRecordId',
            'parentRecordId' => 'setParentRecordId',
            'devcloudProjectId' => 'setDevcloudProjectId',
            'codeciJobId' => 'setCodeciJobId',
            'userId' => 'setUserId',
            'buildNo' => 'setBuildNo',
            'dailyBuildNum' => 'setDailyBuildNum',
            'executionId' => 'setExecutionId',
            'repoName' => 'setRepoName',
            'repoId' => 'setRepoId',
            'branch' => 'setBranch',
            'tag' => 'setTag',
            'commit' => 'setCommit',
            'commitMessage' => 'setCommitMessage',
            'commitCreateTime' => 'setCommitCreateTime',
            'triggerType' => 'setTriggerType',
            'buildType' => 'setBuildType',
            'status' => 'setStatus',
            'domainId' => 'setDomainId',
            'createTime' => 'setCreateTime',
            'scheduleTime' => 'setScheduleTime',
            'queuedTime' => 'setQueuedTime',
            'startTime' => 'setStartTime',
            'runnableTime' => 'setRunnableTime',
            'finishTime' => 'setFinishTime',
            'duration' => 'setDuration',
            'recordStatus' => 'setRecordStatus',
            'usePrivateSlave' => 'setUsePrivateSlave',
            'region' => 'setRegion',
            'errMsg' => 'setErrMsg',
            'buildConfigType' => 'setBuildConfigType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  id
    * buildProjectId  构建工程ID,唯一对应codeci_job_id
    * buildRecordId  构建记录ID
    * parentRecordId  父构建记录ID
    * devcloudProjectId  项目ID
    * codeciJobId  codeci任务ID,唯一对应build_project_id
    * userId  用户ID
    * buildNo  构建编号
    * dailyBuildNum  每日构建编号，每日从1开始
    * executionId  八爪鱼任务ID
    * repoName  仓库名称
    * repoId  仓库id
    * branch  仓库分支
    * tag  仓库tag
    * commit  仓库commit ID
    * commitMessage  仓库commit提交信息
    * commitCreateTime  commit创建时间
    * triggerType  触发类型
    * buildType  构建类型
    * status  构建状态
    * domainId  租户ID
    * createTime  任务创建时间
    * scheduleTime  构建下发耗时
    * queuedTime  构建排队耗时
    * startTime  开始构建时间
    * runnableTime  八爪鱼真正开始构建时间
    * finishTime  构建结束时间
    * duration  构建时长
    * recordStatus  record状态
    * usePrivateSlave  是否使用自定义执行机
    * region  租户所在region
    * errMsg  错误信息
    * buildConfigType  构建配置类型，YAML或ACTION
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'buildProjectId' => 'getBuildProjectId',
            'buildRecordId' => 'getBuildRecordId',
            'parentRecordId' => 'getParentRecordId',
            'devcloudProjectId' => 'getDevcloudProjectId',
            'codeciJobId' => 'getCodeciJobId',
            'userId' => 'getUserId',
            'buildNo' => 'getBuildNo',
            'dailyBuildNum' => 'getDailyBuildNum',
            'executionId' => 'getExecutionId',
            'repoName' => 'getRepoName',
            'repoId' => 'getRepoId',
            'branch' => 'getBranch',
            'tag' => 'getTag',
            'commit' => 'getCommit',
            'commitMessage' => 'getCommitMessage',
            'commitCreateTime' => 'getCommitCreateTime',
            'triggerType' => 'getTriggerType',
            'buildType' => 'getBuildType',
            'status' => 'getStatus',
            'domainId' => 'getDomainId',
            'createTime' => 'getCreateTime',
            'scheduleTime' => 'getScheduleTime',
            'queuedTime' => 'getQueuedTime',
            'startTime' => 'getStartTime',
            'runnableTime' => 'getRunnableTime',
            'finishTime' => 'getFinishTime',
            'duration' => 'getDuration',
            'recordStatus' => 'getRecordStatus',
            'usePrivateSlave' => 'getUsePrivateSlave',
            'region' => 'getRegion',
            'errMsg' => 'getErrMsg',
            'buildConfigType' => 'getBuildConfigType'
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
        $this->container['buildProjectId'] = isset($data['buildProjectId']) ? $data['buildProjectId'] : null;
        $this->container['buildRecordId'] = isset($data['buildRecordId']) ? $data['buildRecordId'] : null;
        $this->container['parentRecordId'] = isset($data['parentRecordId']) ? $data['parentRecordId'] : null;
        $this->container['devcloudProjectId'] = isset($data['devcloudProjectId']) ? $data['devcloudProjectId'] : null;
        $this->container['codeciJobId'] = isset($data['codeciJobId']) ? $data['codeciJobId'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['buildNo'] = isset($data['buildNo']) ? $data['buildNo'] : null;
        $this->container['dailyBuildNum'] = isset($data['dailyBuildNum']) ? $data['dailyBuildNum'] : null;
        $this->container['executionId'] = isset($data['executionId']) ? $data['executionId'] : null;
        $this->container['repoName'] = isset($data['repoName']) ? $data['repoName'] : null;
        $this->container['repoId'] = isset($data['repoId']) ? $data['repoId'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['commit'] = isset($data['commit']) ? $data['commit'] : null;
        $this->container['commitMessage'] = isset($data['commitMessage']) ? $data['commitMessage'] : null;
        $this->container['commitCreateTime'] = isset($data['commitCreateTime']) ? $data['commitCreateTime'] : null;
        $this->container['triggerType'] = isset($data['triggerType']) ? $data['triggerType'] : null;
        $this->container['buildType'] = isset($data['buildType']) ? $data['buildType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['scheduleTime'] = isset($data['scheduleTime']) ? $data['scheduleTime'] : null;
        $this->container['queuedTime'] = isset($data['queuedTime']) ? $data['queuedTime'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['runnableTime'] = isset($data['runnableTime']) ? $data['runnableTime'] : null;
        $this->container['finishTime'] = isset($data['finishTime']) ? $data['finishTime'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['recordStatus'] = isset($data['recordStatus']) ? $data['recordStatus'] : null;
        $this->container['usePrivateSlave'] = isset($data['usePrivateSlave']) ? $data['usePrivateSlave'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['errMsg'] = isset($data['errMsg']) ? $data['errMsg'] : null;
        $this->container['buildConfigType'] = isset($data['buildConfigType']) ? $data['buildConfigType'] : null;
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
    *  id
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
    * @param string|null $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets buildProjectId
    *  构建工程ID,唯一对应codeci_job_id
    *
    * @return string|null
    */
    public function getBuildProjectId()
    {
        return $this->container['buildProjectId'];
    }

    /**
    * Sets buildProjectId
    *
    * @param string|null $buildProjectId 构建工程ID,唯一对应codeci_job_id
    *
    * @return $this
    */
    public function setBuildProjectId($buildProjectId)
    {
        $this->container['buildProjectId'] = $buildProjectId;
        return $this;
    }

    /**
    * Gets buildRecordId
    *  构建记录ID
    *
    * @return string|null
    */
    public function getBuildRecordId()
    {
        return $this->container['buildRecordId'];
    }

    /**
    * Sets buildRecordId
    *
    * @param string|null $buildRecordId 构建记录ID
    *
    * @return $this
    */
    public function setBuildRecordId($buildRecordId)
    {
        $this->container['buildRecordId'] = $buildRecordId;
        return $this;
    }

    /**
    * Gets parentRecordId
    *  父构建记录ID
    *
    * @return string|null
    */
    public function getParentRecordId()
    {
        return $this->container['parentRecordId'];
    }

    /**
    * Sets parentRecordId
    *
    * @param string|null $parentRecordId 父构建记录ID
    *
    * @return $this
    */
    public function setParentRecordId($parentRecordId)
    {
        $this->container['parentRecordId'] = $parentRecordId;
        return $this;
    }

    /**
    * Gets devcloudProjectId
    *  项目ID
    *
    * @return string|null
    */
    public function getDevcloudProjectId()
    {
        return $this->container['devcloudProjectId'];
    }

    /**
    * Sets devcloudProjectId
    *
    * @param string|null $devcloudProjectId 项目ID
    *
    * @return $this
    */
    public function setDevcloudProjectId($devcloudProjectId)
    {
        $this->container['devcloudProjectId'] = $devcloudProjectId;
        return $this;
    }

    /**
    * Gets codeciJobId
    *  codeci任务ID,唯一对应build_project_id
    *
    * @return string|null
    */
    public function getCodeciJobId()
    {
        return $this->container['codeciJobId'];
    }

    /**
    * Sets codeciJobId
    *
    * @param string|null $codeciJobId codeci任务ID,唯一对应build_project_id
    *
    * @return $this
    */
    public function setCodeciJobId($codeciJobId)
    {
        $this->container['codeciJobId'] = $codeciJobId;
        return $this;
    }

    /**
    * Gets userId
    *  用户ID
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
    * @param string|null $userId 用户ID
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
    *  构建编号
    *
    * @return int|null
    */
    public function getBuildNo()
    {
        return $this->container['buildNo'];
    }

    /**
    * Sets buildNo
    *
    * @param int|null $buildNo 构建编号
    *
    * @return $this
    */
    public function setBuildNo($buildNo)
    {
        $this->container['buildNo'] = $buildNo;
        return $this;
    }

    /**
    * Gets dailyBuildNum
    *  每日构建编号，每日从1开始
    *
    * @return string|null
    */
    public function getDailyBuildNum()
    {
        return $this->container['dailyBuildNum'];
    }

    /**
    * Sets dailyBuildNum
    *
    * @param string|null $dailyBuildNum 每日构建编号，每日从1开始
    *
    * @return $this
    */
    public function setDailyBuildNum($dailyBuildNum)
    {
        $this->container['dailyBuildNum'] = $dailyBuildNum;
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
    * Gets repoName
    *  仓库名称
    *
    * @return string|null
    */
    public function getRepoName()
    {
        return $this->container['repoName'];
    }

    /**
    * Sets repoName
    *
    * @param string|null $repoName 仓库名称
    *
    * @return $this
    */
    public function setRepoName($repoName)
    {
        $this->container['repoName'] = $repoName;
        return $this;
    }

    /**
    * Gets repoId
    *  仓库id
    *
    * @return string|null
    */
    public function getRepoId()
    {
        return $this->container['repoId'];
    }

    /**
    * Sets repoId
    *
    * @param string|null $repoId 仓库id
    *
    * @return $this
    */
    public function setRepoId($repoId)
    {
        $this->container['repoId'] = $repoId;
        return $this;
    }

    /**
    * Gets branch
    *  仓库分支
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
    * @param string|null $branch 仓库分支
    *
    * @return $this
    */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;
        return $this;
    }

    /**
    * Gets tag
    *  仓库tag
    *
    * @return string|null
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param string|null $tag 仓库tag
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
        return $this;
    }

    /**
    * Gets commit
    *  仓库commit ID
    *
    * @return string|null
    */
    public function getCommit()
    {
        return $this->container['commit'];
    }

    /**
    * Sets commit
    *
    * @param string|null $commit 仓库commit ID
    *
    * @return $this
    */
    public function setCommit($commit)
    {
        $this->container['commit'] = $commit;
        return $this;
    }

    /**
    * Gets commitMessage
    *  仓库commit提交信息
    *
    * @return string|null
    */
    public function getCommitMessage()
    {
        return $this->container['commitMessage'];
    }

    /**
    * Sets commitMessage
    *
    * @param string|null $commitMessage 仓库commit提交信息
    *
    * @return $this
    */
    public function setCommitMessage($commitMessage)
    {
        $this->container['commitMessage'] = $commitMessage;
        return $this;
    }

    /**
    * Gets commitCreateTime
    *  commit创建时间
    *
    * @return string|null
    */
    public function getCommitCreateTime()
    {
        return $this->container['commitCreateTime'];
    }

    /**
    * Sets commitCreateTime
    *
    * @param string|null $commitCreateTime commit创建时间
    *
    * @return $this
    */
    public function setCommitCreateTime($commitCreateTime)
    {
        $this->container['commitCreateTime'] = $commitCreateTime;
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
    * Gets buildType
    *  构建类型
    *
    * @return string|null
    */
    public function getBuildType()
    {
        return $this->container['buildType'];
    }

    /**
    * Sets buildType
    *
    * @param string|null $buildType 构建类型
    *
    * @return $this
    */
    public function setBuildType($buildType)
    {
        $this->container['buildType'] = $buildType;
        return $this;
    }

    /**
    * Gets status
    *  构建状态
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
    * @param string|null $status 构建状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets domainId
    *  租户ID
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 租户ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets createTime
    *  任务创建时间
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
    * @param string|null $createTime 任务创建时间
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
    *  构建下发耗时
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
    * @param string|null $scheduleTime 构建下发耗时
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
    *  构建排队耗时
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
    * @param string|null $queuedTime 构建排队耗时
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
    *  开始构建时间
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
    * @param string|null $startTime 开始构建时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets runnableTime
    *  八爪鱼真正开始构建时间
    *
    * @return string|null
    */
    public function getRunnableTime()
    {
        return $this->container['runnableTime'];
    }

    /**
    * Sets runnableTime
    *
    * @param string|null $runnableTime 八爪鱼真正开始构建时间
    *
    * @return $this
    */
    public function setRunnableTime($runnableTime)
    {
        $this->container['runnableTime'] = $runnableTime;
        return $this;
    }

    /**
    * Gets finishTime
    *  构建结束时间
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
    * @param string|null $finishTime 构建结束时间
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
    *  构建时长
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
    * @param int|null $duration 构建时长
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets recordStatus
    *  record状态
    *
    * @return string|null
    */
    public function getRecordStatus()
    {
        return $this->container['recordStatus'];
    }

    /**
    * Sets recordStatus
    *
    * @param string|null $recordStatus record状态
    *
    * @return $this
    */
    public function setRecordStatus($recordStatus)
    {
        $this->container['recordStatus'] = $recordStatus;
        return $this;
    }

    /**
    * Gets usePrivateSlave
    *  是否使用自定义执行机
    *
    * @return int|null
    */
    public function getUsePrivateSlave()
    {
        return $this->container['usePrivateSlave'];
    }

    /**
    * Sets usePrivateSlave
    *
    * @param int|null $usePrivateSlave 是否使用自定义执行机
    *
    * @return $this
    */
    public function setUsePrivateSlave($usePrivateSlave)
    {
        $this->container['usePrivateSlave'] = $usePrivateSlave;
        return $this;
    }

    /**
    * Gets region
    *  租户所在region
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 租户所在region
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets errMsg
    *  错误信息
    *
    * @return string|null
    */
    public function getErrMsg()
    {
        return $this->container['errMsg'];
    }

    /**
    * Sets errMsg
    *
    * @param string|null $errMsg 错误信息
    *
    * @return $this
    */
    public function setErrMsg($errMsg)
    {
        $this->container['errMsg'] = $errMsg;
        return $this;
    }

    /**
    * Gets buildConfigType
    *  构建配置类型，YAML或ACTION
    *
    * @return string|null
    */
    public function getBuildConfigType()
    {
        return $this->container['buildConfigType'];
    }

    /**
    * Sets buildConfigType
    *
    * @param string|null $buildConfigType 构建配置类型，YAML或ACTION
    *
    * @return $this
    */
    public function setBuildConfigType($buildConfigType)
    {
        $this->container['buildConfigType'] = $buildConfigType;
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

