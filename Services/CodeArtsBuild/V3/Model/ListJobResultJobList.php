<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListJobResultJobList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListJob_result_job_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  任务ID
    * jobName  任务名称
    * jobCreator  任务创建者
    * userId  用户id
    * userName  用户名
    * nickName  用户昵称
    * projectId  构建任务所在项目的ID
    * projectName  构建任务所在项目的名称
    * lastBuildTime  最新执行时间
    * healthScore  健康分值
    * sourceCode  代码来源
    * lastBuildStatus  最新构建状态
    * lastJobRunningStatus  最新运行状态
    * lastBuildUser  执行用户
    * lastBuildUserId  执行用户ID
    * isFinished  是否已结束
    * disabled  是否已禁用
    * favorite  是否已收藏
    * isModify  是否有修改任务权限
    * isDelete  是否有删除任务权限
    * isView  是否有查看任务权限
    * isExecute  是否有执行任务权限
    * isCopy  是否有复制任务权限
    * isForbidden  是否有禁用任务权限
    * taskId  任务记录编号
    * codeBranch  代码分支
    * commitId  代码提交ID
    * triggerType  触发类型
    * buildTime  执行时间
    * scmWebUrl  代码源地址
    * scmType  仓库类别，Repo、Github等
    * repoId  repo的id
    * commitDetailUrl  代码提交记录信息地址（代码源为Repo)
    * buildNumber  构建编号
    * forbiddenMsg  禁用消息
    * buildProjectId  构建工程ID,唯一对应codeci_job_id
    * buildType  构建类别
    * tag  仓库tag
    * projectPermissionSwitch  使用项目权限
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'jobName' => 'string',
            'jobCreator' => 'string',
            'userId' => 'string',
            'userName' => 'string',
            'nickName' => 'string',
            'projectId' => 'string',
            'projectName' => 'string',
            'lastBuildTime' => 'float',
            'healthScore' => 'int',
            'sourceCode' => 'string',
            'lastBuildStatus' => 'string',
            'lastJobRunningStatus' => 'string',
            'lastBuildUser' => 'string',
            'lastBuildUserId' => 'string',
            'isFinished' => 'bool',
            'disabled' => 'bool',
            'favorite' => 'bool',
            'isModify' => 'bool',
            'isDelete' => 'bool',
            'isView' => 'bool',
            'isExecute' => 'bool',
            'isCopy' => 'bool',
            'isForbidden' => 'bool',
            'taskId' => 'string',
            'codeBranch' => 'string',
            'commitId' => 'string',
            'triggerType' => 'string',
            'buildTime' => 'float',
            'scmWebUrl' => 'string',
            'scmType' => 'string',
            'repoId' => 'string',
            'commitDetailUrl' => 'string',
            'buildNumber' => 'string',
            'forbiddenMsg' => 'string',
            'buildProjectId' => 'string',
            'buildType' => 'string',
            'tag' => 'string',
            'projectPermissionSwitch' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  任务ID
    * jobName  任务名称
    * jobCreator  任务创建者
    * userId  用户id
    * userName  用户名
    * nickName  用户昵称
    * projectId  构建任务所在项目的ID
    * projectName  构建任务所在项目的名称
    * lastBuildTime  最新执行时间
    * healthScore  健康分值
    * sourceCode  代码来源
    * lastBuildStatus  最新构建状态
    * lastJobRunningStatus  最新运行状态
    * lastBuildUser  执行用户
    * lastBuildUserId  执行用户ID
    * isFinished  是否已结束
    * disabled  是否已禁用
    * favorite  是否已收藏
    * isModify  是否有修改任务权限
    * isDelete  是否有删除任务权限
    * isView  是否有查看任务权限
    * isExecute  是否有执行任务权限
    * isCopy  是否有复制任务权限
    * isForbidden  是否有禁用任务权限
    * taskId  任务记录编号
    * codeBranch  代码分支
    * commitId  代码提交ID
    * triggerType  触发类型
    * buildTime  执行时间
    * scmWebUrl  代码源地址
    * scmType  仓库类别，Repo、Github等
    * repoId  repo的id
    * commitDetailUrl  代码提交记录信息地址（代码源为Repo)
    * buildNumber  构建编号
    * forbiddenMsg  禁用消息
    * buildProjectId  构建工程ID,唯一对应codeci_job_id
    * buildType  构建类别
    * tag  仓库tag
    * projectPermissionSwitch  使用项目权限
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'jobName' => null,
        'jobCreator' => null,
        'userId' => null,
        'userName' => null,
        'nickName' => null,
        'projectId' => null,
        'projectName' => null,
        'lastBuildTime' => null,
        'healthScore' => null,
        'sourceCode' => null,
        'lastBuildStatus' => null,
        'lastJobRunningStatus' => null,
        'lastBuildUser' => null,
        'lastBuildUserId' => null,
        'isFinished' => null,
        'disabled' => null,
        'favorite' => null,
        'isModify' => null,
        'isDelete' => null,
        'isView' => null,
        'isExecute' => null,
        'isCopy' => null,
        'isForbidden' => null,
        'taskId' => null,
        'codeBranch' => null,
        'commitId' => null,
        'triggerType' => null,
        'buildTime' => null,
        'scmWebUrl' => null,
        'scmType' => null,
        'repoId' => null,
        'commitDetailUrl' => null,
        'buildNumber' => null,
        'forbiddenMsg' => null,
        'buildProjectId' => null,
        'buildType' => null,
        'tag' => null,
        'projectPermissionSwitch' => null
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
    * id  任务ID
    * jobName  任务名称
    * jobCreator  任务创建者
    * userId  用户id
    * userName  用户名
    * nickName  用户昵称
    * projectId  构建任务所在项目的ID
    * projectName  构建任务所在项目的名称
    * lastBuildTime  最新执行时间
    * healthScore  健康分值
    * sourceCode  代码来源
    * lastBuildStatus  最新构建状态
    * lastJobRunningStatus  最新运行状态
    * lastBuildUser  执行用户
    * lastBuildUserId  执行用户ID
    * isFinished  是否已结束
    * disabled  是否已禁用
    * favorite  是否已收藏
    * isModify  是否有修改任务权限
    * isDelete  是否有删除任务权限
    * isView  是否有查看任务权限
    * isExecute  是否有执行任务权限
    * isCopy  是否有复制任务权限
    * isForbidden  是否有禁用任务权限
    * taskId  任务记录编号
    * codeBranch  代码分支
    * commitId  代码提交ID
    * triggerType  触发类型
    * buildTime  执行时间
    * scmWebUrl  代码源地址
    * scmType  仓库类别，Repo、Github等
    * repoId  repo的id
    * commitDetailUrl  代码提交记录信息地址（代码源为Repo)
    * buildNumber  构建编号
    * forbiddenMsg  禁用消息
    * buildProjectId  构建工程ID,唯一对应codeci_job_id
    * buildType  构建类别
    * tag  仓库tag
    * projectPermissionSwitch  使用项目权限
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'jobName' => 'job_name',
            'jobCreator' => 'job_creator',
            'userId' => 'user_id',
            'userName' => 'user_name',
            'nickName' => 'nick_name',
            'projectId' => 'project_id',
            'projectName' => 'project_name',
            'lastBuildTime' => 'last_build_time',
            'healthScore' => 'health_score',
            'sourceCode' => 'source_code',
            'lastBuildStatus' => 'last_build_status',
            'lastJobRunningStatus' => 'last_job_running_status',
            'lastBuildUser' => 'last_build_user',
            'lastBuildUserId' => 'last_build_user_id',
            'isFinished' => 'is_finished',
            'disabled' => 'disabled',
            'favorite' => 'favorite',
            'isModify' => 'is_modify',
            'isDelete' => 'is_delete',
            'isView' => 'is_view',
            'isExecute' => 'is_execute',
            'isCopy' => 'is_copy',
            'isForbidden' => 'is_forbidden',
            'taskId' => 'task_id',
            'codeBranch' => 'code_branch',
            'commitId' => 'commit_id',
            'triggerType' => 'trigger_type',
            'buildTime' => 'build_time',
            'scmWebUrl' => 'scm_web_url',
            'scmType' => 'scm_type',
            'repoId' => 'repo_id',
            'commitDetailUrl' => 'commit_detail_url',
            'buildNumber' => 'build_number',
            'forbiddenMsg' => 'forbidden_msg',
            'buildProjectId' => 'build_project_id',
            'buildType' => 'build_type',
            'tag' => 'tag',
            'projectPermissionSwitch' => 'project_permission_switch'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  任务ID
    * jobName  任务名称
    * jobCreator  任务创建者
    * userId  用户id
    * userName  用户名
    * nickName  用户昵称
    * projectId  构建任务所在项目的ID
    * projectName  构建任务所在项目的名称
    * lastBuildTime  最新执行时间
    * healthScore  健康分值
    * sourceCode  代码来源
    * lastBuildStatus  最新构建状态
    * lastJobRunningStatus  最新运行状态
    * lastBuildUser  执行用户
    * lastBuildUserId  执行用户ID
    * isFinished  是否已结束
    * disabled  是否已禁用
    * favorite  是否已收藏
    * isModify  是否有修改任务权限
    * isDelete  是否有删除任务权限
    * isView  是否有查看任务权限
    * isExecute  是否有执行任务权限
    * isCopy  是否有复制任务权限
    * isForbidden  是否有禁用任务权限
    * taskId  任务记录编号
    * codeBranch  代码分支
    * commitId  代码提交ID
    * triggerType  触发类型
    * buildTime  执行时间
    * scmWebUrl  代码源地址
    * scmType  仓库类别，Repo、Github等
    * repoId  repo的id
    * commitDetailUrl  代码提交记录信息地址（代码源为Repo)
    * buildNumber  构建编号
    * forbiddenMsg  禁用消息
    * buildProjectId  构建工程ID,唯一对应codeci_job_id
    * buildType  构建类别
    * tag  仓库tag
    * projectPermissionSwitch  使用项目权限
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'jobName' => 'setJobName',
            'jobCreator' => 'setJobCreator',
            'userId' => 'setUserId',
            'userName' => 'setUserName',
            'nickName' => 'setNickName',
            'projectId' => 'setProjectId',
            'projectName' => 'setProjectName',
            'lastBuildTime' => 'setLastBuildTime',
            'healthScore' => 'setHealthScore',
            'sourceCode' => 'setSourceCode',
            'lastBuildStatus' => 'setLastBuildStatus',
            'lastJobRunningStatus' => 'setLastJobRunningStatus',
            'lastBuildUser' => 'setLastBuildUser',
            'lastBuildUserId' => 'setLastBuildUserId',
            'isFinished' => 'setIsFinished',
            'disabled' => 'setDisabled',
            'favorite' => 'setFavorite',
            'isModify' => 'setIsModify',
            'isDelete' => 'setIsDelete',
            'isView' => 'setIsView',
            'isExecute' => 'setIsExecute',
            'isCopy' => 'setIsCopy',
            'isForbidden' => 'setIsForbidden',
            'taskId' => 'setTaskId',
            'codeBranch' => 'setCodeBranch',
            'commitId' => 'setCommitId',
            'triggerType' => 'setTriggerType',
            'buildTime' => 'setBuildTime',
            'scmWebUrl' => 'setScmWebUrl',
            'scmType' => 'setScmType',
            'repoId' => 'setRepoId',
            'commitDetailUrl' => 'setCommitDetailUrl',
            'buildNumber' => 'setBuildNumber',
            'forbiddenMsg' => 'setForbiddenMsg',
            'buildProjectId' => 'setBuildProjectId',
            'buildType' => 'setBuildType',
            'tag' => 'setTag',
            'projectPermissionSwitch' => 'setProjectPermissionSwitch'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  任务ID
    * jobName  任务名称
    * jobCreator  任务创建者
    * userId  用户id
    * userName  用户名
    * nickName  用户昵称
    * projectId  构建任务所在项目的ID
    * projectName  构建任务所在项目的名称
    * lastBuildTime  最新执行时间
    * healthScore  健康分值
    * sourceCode  代码来源
    * lastBuildStatus  最新构建状态
    * lastJobRunningStatus  最新运行状态
    * lastBuildUser  执行用户
    * lastBuildUserId  执行用户ID
    * isFinished  是否已结束
    * disabled  是否已禁用
    * favorite  是否已收藏
    * isModify  是否有修改任务权限
    * isDelete  是否有删除任务权限
    * isView  是否有查看任务权限
    * isExecute  是否有执行任务权限
    * isCopy  是否有复制任务权限
    * isForbidden  是否有禁用任务权限
    * taskId  任务记录编号
    * codeBranch  代码分支
    * commitId  代码提交ID
    * triggerType  触发类型
    * buildTime  执行时间
    * scmWebUrl  代码源地址
    * scmType  仓库类别，Repo、Github等
    * repoId  repo的id
    * commitDetailUrl  代码提交记录信息地址（代码源为Repo)
    * buildNumber  构建编号
    * forbiddenMsg  禁用消息
    * buildProjectId  构建工程ID,唯一对应codeci_job_id
    * buildType  构建类别
    * tag  仓库tag
    * projectPermissionSwitch  使用项目权限
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'jobName' => 'getJobName',
            'jobCreator' => 'getJobCreator',
            'userId' => 'getUserId',
            'userName' => 'getUserName',
            'nickName' => 'getNickName',
            'projectId' => 'getProjectId',
            'projectName' => 'getProjectName',
            'lastBuildTime' => 'getLastBuildTime',
            'healthScore' => 'getHealthScore',
            'sourceCode' => 'getSourceCode',
            'lastBuildStatus' => 'getLastBuildStatus',
            'lastJobRunningStatus' => 'getLastJobRunningStatus',
            'lastBuildUser' => 'getLastBuildUser',
            'lastBuildUserId' => 'getLastBuildUserId',
            'isFinished' => 'getIsFinished',
            'disabled' => 'getDisabled',
            'favorite' => 'getFavorite',
            'isModify' => 'getIsModify',
            'isDelete' => 'getIsDelete',
            'isView' => 'getIsView',
            'isExecute' => 'getIsExecute',
            'isCopy' => 'getIsCopy',
            'isForbidden' => 'getIsForbidden',
            'taskId' => 'getTaskId',
            'codeBranch' => 'getCodeBranch',
            'commitId' => 'getCommitId',
            'triggerType' => 'getTriggerType',
            'buildTime' => 'getBuildTime',
            'scmWebUrl' => 'getScmWebUrl',
            'scmType' => 'getScmType',
            'repoId' => 'getRepoId',
            'commitDetailUrl' => 'getCommitDetailUrl',
            'buildNumber' => 'getBuildNumber',
            'forbiddenMsg' => 'getForbiddenMsg',
            'buildProjectId' => 'getBuildProjectId',
            'buildType' => 'getBuildType',
            'tag' => 'getTag',
            'projectPermissionSwitch' => 'getProjectPermissionSwitch'
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
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['jobCreator'] = isset($data['jobCreator']) ? $data['jobCreator'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['nickName'] = isset($data['nickName']) ? $data['nickName'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['lastBuildTime'] = isset($data['lastBuildTime']) ? $data['lastBuildTime'] : null;
        $this->container['healthScore'] = isset($data['healthScore']) ? $data['healthScore'] : null;
        $this->container['sourceCode'] = isset($data['sourceCode']) ? $data['sourceCode'] : null;
        $this->container['lastBuildStatus'] = isset($data['lastBuildStatus']) ? $data['lastBuildStatus'] : null;
        $this->container['lastJobRunningStatus'] = isset($data['lastJobRunningStatus']) ? $data['lastJobRunningStatus'] : null;
        $this->container['lastBuildUser'] = isset($data['lastBuildUser']) ? $data['lastBuildUser'] : null;
        $this->container['lastBuildUserId'] = isset($data['lastBuildUserId']) ? $data['lastBuildUserId'] : null;
        $this->container['isFinished'] = isset($data['isFinished']) ? $data['isFinished'] : null;
        $this->container['disabled'] = isset($data['disabled']) ? $data['disabled'] : null;
        $this->container['favorite'] = isset($data['favorite']) ? $data['favorite'] : null;
        $this->container['isModify'] = isset($data['isModify']) ? $data['isModify'] : null;
        $this->container['isDelete'] = isset($data['isDelete']) ? $data['isDelete'] : null;
        $this->container['isView'] = isset($data['isView']) ? $data['isView'] : null;
        $this->container['isExecute'] = isset($data['isExecute']) ? $data['isExecute'] : null;
        $this->container['isCopy'] = isset($data['isCopy']) ? $data['isCopy'] : null;
        $this->container['isForbidden'] = isset($data['isForbidden']) ? $data['isForbidden'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['codeBranch'] = isset($data['codeBranch']) ? $data['codeBranch'] : null;
        $this->container['commitId'] = isset($data['commitId']) ? $data['commitId'] : null;
        $this->container['triggerType'] = isset($data['triggerType']) ? $data['triggerType'] : null;
        $this->container['buildTime'] = isset($data['buildTime']) ? $data['buildTime'] : null;
        $this->container['scmWebUrl'] = isset($data['scmWebUrl']) ? $data['scmWebUrl'] : null;
        $this->container['scmType'] = isset($data['scmType']) ? $data['scmType'] : null;
        $this->container['repoId'] = isset($data['repoId']) ? $data['repoId'] : null;
        $this->container['commitDetailUrl'] = isset($data['commitDetailUrl']) ? $data['commitDetailUrl'] : null;
        $this->container['buildNumber'] = isset($data['buildNumber']) ? $data['buildNumber'] : null;
        $this->container['forbiddenMsg'] = isset($data['forbiddenMsg']) ? $data['forbiddenMsg'] : null;
        $this->container['buildProjectId'] = isset($data['buildProjectId']) ? $data['buildProjectId'] : null;
        $this->container['buildType'] = isset($data['buildType']) ? $data['buildType'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['projectPermissionSwitch'] = isset($data['projectPermissionSwitch']) ? $data['projectPermissionSwitch'] : null;
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
    *  任务ID
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
    * @param string|null $id 任务ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets jobName
    *  任务名称
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
    * @param string|null $jobName 任务名称
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets jobCreator
    *  任务创建者
    *
    * @return string|null
    */
    public function getJobCreator()
    {
        return $this->container['jobCreator'];
    }

    /**
    * Sets jobCreator
    *
    * @param string|null $jobCreator 任务创建者
    *
    * @return $this
    */
    public function setJobCreator($jobCreator)
    {
        $this->container['jobCreator'] = $jobCreator;
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
    * Gets userName
    *  用户名
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 用户名
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets nickName
    *  用户昵称
    *
    * @return string|null
    */
    public function getNickName()
    {
        return $this->container['nickName'];
    }

    /**
    * Sets nickName
    *
    * @param string|null $nickName 用户昵称
    *
    * @return $this
    */
    public function setNickName($nickName)
    {
        $this->container['nickName'] = $nickName;
        return $this;
    }

    /**
    * Gets projectId
    *  构建任务所在项目的ID
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
    * @param string|null $projectId 构建任务所在项目的ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets projectName
    *  构建任务所在项目的名称
    *
    * @return string|null
    */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
    * Sets projectName
    *
    * @param string|null $projectName 构建任务所在项目的名称
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
        return $this;
    }

    /**
    * Gets lastBuildTime
    *  最新执行时间
    *
    * @return float|null
    */
    public function getLastBuildTime()
    {
        return $this->container['lastBuildTime'];
    }

    /**
    * Sets lastBuildTime
    *
    * @param float|null $lastBuildTime 最新执行时间
    *
    * @return $this
    */
    public function setLastBuildTime($lastBuildTime)
    {
        $this->container['lastBuildTime'] = $lastBuildTime;
        return $this;
    }

    /**
    * Gets healthScore
    *  健康分值
    *
    * @return int|null
    */
    public function getHealthScore()
    {
        return $this->container['healthScore'];
    }

    /**
    * Sets healthScore
    *
    * @param int|null $healthScore 健康分值
    *
    * @return $this
    */
    public function setHealthScore($healthScore)
    {
        $this->container['healthScore'] = $healthScore;
        return $this;
    }

    /**
    * Gets sourceCode
    *  代码来源
    *
    * @return string|null
    */
    public function getSourceCode()
    {
        return $this->container['sourceCode'];
    }

    /**
    * Sets sourceCode
    *
    * @param string|null $sourceCode 代码来源
    *
    * @return $this
    */
    public function setSourceCode($sourceCode)
    {
        $this->container['sourceCode'] = $sourceCode;
        return $this;
    }

    /**
    * Gets lastBuildStatus
    *  最新构建状态
    *
    * @return string|null
    */
    public function getLastBuildStatus()
    {
        return $this->container['lastBuildStatus'];
    }

    /**
    * Sets lastBuildStatus
    *
    * @param string|null $lastBuildStatus 最新构建状态
    *
    * @return $this
    */
    public function setLastBuildStatus($lastBuildStatus)
    {
        $this->container['lastBuildStatus'] = $lastBuildStatus;
        return $this;
    }

    /**
    * Gets lastJobRunningStatus
    *  最新运行状态
    *
    * @return string|null
    */
    public function getLastJobRunningStatus()
    {
        return $this->container['lastJobRunningStatus'];
    }

    /**
    * Sets lastJobRunningStatus
    *
    * @param string|null $lastJobRunningStatus 最新运行状态
    *
    * @return $this
    */
    public function setLastJobRunningStatus($lastJobRunningStatus)
    {
        $this->container['lastJobRunningStatus'] = $lastJobRunningStatus;
        return $this;
    }

    /**
    * Gets lastBuildUser
    *  执行用户
    *
    * @return string|null
    */
    public function getLastBuildUser()
    {
        return $this->container['lastBuildUser'];
    }

    /**
    * Sets lastBuildUser
    *
    * @param string|null $lastBuildUser 执行用户
    *
    * @return $this
    */
    public function setLastBuildUser($lastBuildUser)
    {
        $this->container['lastBuildUser'] = $lastBuildUser;
        return $this;
    }

    /**
    * Gets lastBuildUserId
    *  执行用户ID
    *
    * @return string|null
    */
    public function getLastBuildUserId()
    {
        return $this->container['lastBuildUserId'];
    }

    /**
    * Sets lastBuildUserId
    *
    * @param string|null $lastBuildUserId 执行用户ID
    *
    * @return $this
    */
    public function setLastBuildUserId($lastBuildUserId)
    {
        $this->container['lastBuildUserId'] = $lastBuildUserId;
        return $this;
    }

    /**
    * Gets isFinished
    *  是否已结束
    *
    * @return bool|null
    */
    public function getIsFinished()
    {
        return $this->container['isFinished'];
    }

    /**
    * Sets isFinished
    *
    * @param bool|null $isFinished 是否已结束
    *
    * @return $this
    */
    public function setIsFinished($isFinished)
    {
        $this->container['isFinished'] = $isFinished;
        return $this;
    }

    /**
    * Gets disabled
    *  是否已禁用
    *
    * @return bool|null
    */
    public function getDisabled()
    {
        return $this->container['disabled'];
    }

    /**
    * Sets disabled
    *
    * @param bool|null $disabled 是否已禁用
    *
    * @return $this
    */
    public function setDisabled($disabled)
    {
        $this->container['disabled'] = $disabled;
        return $this;
    }

    /**
    * Gets favorite
    *  是否已收藏
    *
    * @return bool|null
    */
    public function getFavorite()
    {
        return $this->container['favorite'];
    }

    /**
    * Sets favorite
    *
    * @param bool|null $favorite 是否已收藏
    *
    * @return $this
    */
    public function setFavorite($favorite)
    {
        $this->container['favorite'] = $favorite;
        return $this;
    }

    /**
    * Gets isModify
    *  是否有修改任务权限
    *
    * @return bool|null
    */
    public function getIsModify()
    {
        return $this->container['isModify'];
    }

    /**
    * Sets isModify
    *
    * @param bool|null $isModify 是否有修改任务权限
    *
    * @return $this
    */
    public function setIsModify($isModify)
    {
        $this->container['isModify'] = $isModify;
        return $this;
    }

    /**
    * Gets isDelete
    *  是否有删除任务权限
    *
    * @return bool|null
    */
    public function getIsDelete()
    {
        return $this->container['isDelete'];
    }

    /**
    * Sets isDelete
    *
    * @param bool|null $isDelete 是否有删除任务权限
    *
    * @return $this
    */
    public function setIsDelete($isDelete)
    {
        $this->container['isDelete'] = $isDelete;
        return $this;
    }

    /**
    * Gets isView
    *  是否有查看任务权限
    *
    * @return bool|null
    */
    public function getIsView()
    {
        return $this->container['isView'];
    }

    /**
    * Sets isView
    *
    * @param bool|null $isView 是否有查看任务权限
    *
    * @return $this
    */
    public function setIsView($isView)
    {
        $this->container['isView'] = $isView;
        return $this;
    }

    /**
    * Gets isExecute
    *  是否有执行任务权限
    *
    * @return bool|null
    */
    public function getIsExecute()
    {
        return $this->container['isExecute'];
    }

    /**
    * Sets isExecute
    *
    * @param bool|null $isExecute 是否有执行任务权限
    *
    * @return $this
    */
    public function setIsExecute($isExecute)
    {
        $this->container['isExecute'] = $isExecute;
        return $this;
    }

    /**
    * Gets isCopy
    *  是否有复制任务权限
    *
    * @return bool|null
    */
    public function getIsCopy()
    {
        return $this->container['isCopy'];
    }

    /**
    * Sets isCopy
    *
    * @param bool|null $isCopy 是否有复制任务权限
    *
    * @return $this
    */
    public function setIsCopy($isCopy)
    {
        $this->container['isCopy'] = $isCopy;
        return $this;
    }

    /**
    * Gets isForbidden
    *  是否有禁用任务权限
    *
    * @return bool|null
    */
    public function getIsForbidden()
    {
        return $this->container['isForbidden'];
    }

    /**
    * Sets isForbidden
    *
    * @param bool|null $isForbidden 是否有禁用任务权限
    *
    * @return $this
    */
    public function setIsForbidden($isForbidden)
    {
        $this->container['isForbidden'] = $isForbidden;
        return $this;
    }

    /**
    * Gets taskId
    *  任务记录编号
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId 任务记录编号
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets codeBranch
    *  代码分支
    *
    * @return string|null
    */
    public function getCodeBranch()
    {
        return $this->container['codeBranch'];
    }

    /**
    * Sets codeBranch
    *
    * @param string|null $codeBranch 代码分支
    *
    * @return $this
    */
    public function setCodeBranch($codeBranch)
    {
        $this->container['codeBranch'] = $codeBranch;
        return $this;
    }

    /**
    * Gets commitId
    *  代码提交ID
    *
    * @return string|null
    */
    public function getCommitId()
    {
        return $this->container['commitId'];
    }

    /**
    * Sets commitId
    *
    * @param string|null $commitId 代码提交ID
    *
    * @return $this
    */
    public function setCommitId($commitId)
    {
        $this->container['commitId'] = $commitId;
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
    * Gets buildTime
    *  执行时间
    *
    * @return float|null
    */
    public function getBuildTime()
    {
        return $this->container['buildTime'];
    }

    /**
    * Sets buildTime
    *
    * @param float|null $buildTime 执行时间
    *
    * @return $this
    */
    public function setBuildTime($buildTime)
    {
        $this->container['buildTime'] = $buildTime;
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
    * Gets scmType
    *  仓库类别，Repo、Github等
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
    * @param string|null $scmType 仓库类别，Repo、Github等
    *
    * @return $this
    */
    public function setScmType($scmType)
    {
        $this->container['scmType'] = $scmType;
        return $this;
    }

    /**
    * Gets repoId
    *  repo的id
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
    * @param string|null $repoId repo的id
    *
    * @return $this
    */
    public function setRepoId($repoId)
    {
        $this->container['repoId'] = $repoId;
        return $this;
    }

    /**
    * Gets commitDetailUrl
    *  代码提交记录信息地址（代码源为Repo)
    *
    * @return string|null
    */
    public function getCommitDetailUrl()
    {
        return $this->container['commitDetailUrl'];
    }

    /**
    * Sets commitDetailUrl
    *
    * @param string|null $commitDetailUrl 代码提交记录信息地址（代码源为Repo)
    *
    * @return $this
    */
    public function setCommitDetailUrl($commitDetailUrl)
    {
        $this->container['commitDetailUrl'] = $commitDetailUrl;
        return $this;
    }

    /**
    * Gets buildNumber
    *  构建编号
    *
    * @return string|null
    */
    public function getBuildNumber()
    {
        return $this->container['buildNumber'];
    }

    /**
    * Sets buildNumber
    *
    * @param string|null $buildNumber 构建编号
    *
    * @return $this
    */
    public function setBuildNumber($buildNumber)
    {
        $this->container['buildNumber'] = $buildNumber;
        return $this;
    }

    /**
    * Gets forbiddenMsg
    *  禁用消息
    *
    * @return string|null
    */
    public function getForbiddenMsg()
    {
        return $this->container['forbiddenMsg'];
    }

    /**
    * Sets forbiddenMsg
    *
    * @param string|null $forbiddenMsg 禁用消息
    *
    * @return $this
    */
    public function setForbiddenMsg($forbiddenMsg)
    {
        $this->container['forbiddenMsg'] = $forbiddenMsg;
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
    * Gets buildType
    *  构建类别
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
    * @param string|null $buildType 构建类别
    *
    * @return $this
    */
    public function setBuildType($buildType)
    {
        $this->container['buildType'] = $buildType;
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
    * Gets projectPermissionSwitch
    *  使用项目权限
    *
    * @return bool|null
    */
    public function getProjectPermissionSwitch()
    {
        return $this->container['projectPermissionSwitch'];
    }

    /**
    * Sets projectPermissionSwitch
    *
    * @param bool|null $projectPermissionSwitch 使用项目权限
    *
    * @return $this
    */
    public function setProjectPermissionSwitch($projectPermissionSwitch)
    {
        $this->container['projectPermissionSwitch'] = $projectPermissionSwitch;
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

