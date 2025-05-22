<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BuildInfoRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BuildInfoRecord';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * number  构建编号
    * buildTime  执行时间
    * startTime  开始时间，时间戳
    * jobRunningStatus  运行状态
    * state  任务状态
    * userId  IAM用户ID
    * executor  触发构建用户
    * nickname  用户名称
    * dailyBuildNumber  构建编号，每日从1开始
    * triggerType  触发类型
    * costTime  执行时间
    * commitId  代码提交的commit id
    * commitInfo  commitInfo
    * buildType  构建类型
    * codeBranch  代码仓分支
    * scmType  代码源类型
    * scmWebUrl  代码源地址
    * commitDetailUrl  代码提交记录信息地址（代码源为Repo)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'number' => 'int',
            'buildTime' => 'int',
            'startTime' => 'int',
            'jobRunningStatus' => 'string',
            'state' => 'string',
            'userId' => 'string',
            'executor' => 'string',
            'nickname' => 'string',
            'dailyBuildNumber' => 'string',
            'triggerType' => 'string',
            'costTime' => 'int',
            'commitId' => 'string',
            'commitInfo' => '\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\BuildInfoRecordCommitInfo',
            'buildType' => 'string',
            'codeBranch' => 'string',
            'scmType' => 'string',
            'scmWebUrl' => 'string',
            'commitDetailUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * number  构建编号
    * buildTime  执行时间
    * startTime  开始时间，时间戳
    * jobRunningStatus  运行状态
    * state  任务状态
    * userId  IAM用户ID
    * executor  触发构建用户
    * nickname  用户名称
    * dailyBuildNumber  构建编号，每日从1开始
    * triggerType  触发类型
    * costTime  执行时间
    * commitId  代码提交的commit id
    * commitInfo  commitInfo
    * buildType  构建类型
    * codeBranch  代码仓分支
    * scmType  代码源类型
    * scmWebUrl  代码源地址
    * commitDetailUrl  代码提交记录信息地址（代码源为Repo)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'number' => null,
        'buildTime' => null,
        'startTime' => 'int64',
        'jobRunningStatus' => null,
        'state' => null,
        'userId' => null,
        'executor' => null,
        'nickname' => null,
        'dailyBuildNumber' => null,
        'triggerType' => null,
        'costTime' => null,
        'commitId' => null,
        'commitInfo' => null,
        'buildType' => null,
        'codeBranch' => null,
        'scmType' => null,
        'scmWebUrl' => null,
        'commitDetailUrl' => null
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
    * number  构建编号
    * buildTime  执行时间
    * startTime  开始时间，时间戳
    * jobRunningStatus  运行状态
    * state  任务状态
    * userId  IAM用户ID
    * executor  触发构建用户
    * nickname  用户名称
    * dailyBuildNumber  构建编号，每日从1开始
    * triggerType  触发类型
    * costTime  执行时间
    * commitId  代码提交的commit id
    * commitInfo  commitInfo
    * buildType  构建类型
    * codeBranch  代码仓分支
    * scmType  代码源类型
    * scmWebUrl  代码源地址
    * commitDetailUrl  代码提交记录信息地址（代码源为Repo)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'number' => 'number',
            'buildTime' => 'build_time',
            'startTime' => 'start_time',
            'jobRunningStatus' => 'job_running_status',
            'state' => 'state',
            'userId' => 'user_id',
            'executor' => 'executor',
            'nickname' => 'nickname',
            'dailyBuildNumber' => 'daily_build_number',
            'triggerType' => 'trigger_type',
            'costTime' => 'cost_time',
            'commitId' => 'commit_id',
            'commitInfo' => 'commit_info',
            'buildType' => 'build_type',
            'codeBranch' => 'code_branch',
            'scmType' => 'scm_type',
            'scmWebUrl' => 'scm_web_url',
            'commitDetailUrl' => 'commit_detail_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * number  构建编号
    * buildTime  执行时间
    * startTime  开始时间，时间戳
    * jobRunningStatus  运行状态
    * state  任务状态
    * userId  IAM用户ID
    * executor  触发构建用户
    * nickname  用户名称
    * dailyBuildNumber  构建编号，每日从1开始
    * triggerType  触发类型
    * costTime  执行时间
    * commitId  代码提交的commit id
    * commitInfo  commitInfo
    * buildType  构建类型
    * codeBranch  代码仓分支
    * scmType  代码源类型
    * scmWebUrl  代码源地址
    * commitDetailUrl  代码提交记录信息地址（代码源为Repo)
    *
    * @var string[]
    */
    protected static $setters = [
            'number' => 'setNumber',
            'buildTime' => 'setBuildTime',
            'startTime' => 'setStartTime',
            'jobRunningStatus' => 'setJobRunningStatus',
            'state' => 'setState',
            'userId' => 'setUserId',
            'executor' => 'setExecutor',
            'nickname' => 'setNickname',
            'dailyBuildNumber' => 'setDailyBuildNumber',
            'triggerType' => 'setTriggerType',
            'costTime' => 'setCostTime',
            'commitId' => 'setCommitId',
            'commitInfo' => 'setCommitInfo',
            'buildType' => 'setBuildType',
            'codeBranch' => 'setCodeBranch',
            'scmType' => 'setScmType',
            'scmWebUrl' => 'setScmWebUrl',
            'commitDetailUrl' => 'setCommitDetailUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * number  构建编号
    * buildTime  执行时间
    * startTime  开始时间，时间戳
    * jobRunningStatus  运行状态
    * state  任务状态
    * userId  IAM用户ID
    * executor  触发构建用户
    * nickname  用户名称
    * dailyBuildNumber  构建编号，每日从1开始
    * triggerType  触发类型
    * costTime  执行时间
    * commitId  代码提交的commit id
    * commitInfo  commitInfo
    * buildType  构建类型
    * codeBranch  代码仓分支
    * scmType  代码源类型
    * scmWebUrl  代码源地址
    * commitDetailUrl  代码提交记录信息地址（代码源为Repo)
    *
    * @var string[]
    */
    protected static $getters = [
            'number' => 'getNumber',
            'buildTime' => 'getBuildTime',
            'startTime' => 'getStartTime',
            'jobRunningStatus' => 'getJobRunningStatus',
            'state' => 'getState',
            'userId' => 'getUserId',
            'executor' => 'getExecutor',
            'nickname' => 'getNickname',
            'dailyBuildNumber' => 'getDailyBuildNumber',
            'triggerType' => 'getTriggerType',
            'costTime' => 'getCostTime',
            'commitId' => 'getCommitId',
            'commitInfo' => 'getCommitInfo',
            'buildType' => 'getBuildType',
            'codeBranch' => 'getCodeBranch',
            'scmType' => 'getScmType',
            'scmWebUrl' => 'getScmWebUrl',
            'commitDetailUrl' => 'getCommitDetailUrl'
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
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['buildTime'] = isset($data['buildTime']) ? $data['buildTime'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['jobRunningStatus'] = isset($data['jobRunningStatus']) ? $data['jobRunningStatus'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['executor'] = isset($data['executor']) ? $data['executor'] : null;
        $this->container['nickname'] = isset($data['nickname']) ? $data['nickname'] : null;
        $this->container['dailyBuildNumber'] = isset($data['dailyBuildNumber']) ? $data['dailyBuildNumber'] : null;
        $this->container['triggerType'] = isset($data['triggerType']) ? $data['triggerType'] : null;
        $this->container['costTime'] = isset($data['costTime']) ? $data['costTime'] : null;
        $this->container['commitId'] = isset($data['commitId']) ? $data['commitId'] : null;
        $this->container['commitInfo'] = isset($data['commitInfo']) ? $data['commitInfo'] : null;
        $this->container['buildType'] = isset($data['buildType']) ? $data['buildType'] : null;
        $this->container['codeBranch'] = isset($data['codeBranch']) ? $data['codeBranch'] : null;
        $this->container['scmType'] = isset($data['scmType']) ? $data['scmType'] : null;
        $this->container['scmWebUrl'] = isset($data['scmWebUrl']) ? $data['scmWebUrl'] : null;
        $this->container['commitDetailUrl'] = isset($data['commitDetailUrl']) ? $data['commitDetailUrl'] : null;
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
    * Gets number
    *  构建编号
    *
    * @return int|null
    */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
    * Sets number
    *
    * @param int|null $number 构建编号
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets buildTime
    *  执行时间
    *
    * @return int|null
    */
    public function getBuildTime()
    {
        return $this->container['buildTime'];
    }

    /**
    * Sets buildTime
    *
    * @param int|null $buildTime 执行时间
    *
    * @return $this
    */
    public function setBuildTime($buildTime)
    {
        $this->container['buildTime'] = $buildTime;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间，时间戳
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
    * @param int|null $startTime 开始时间，时间戳
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets jobRunningStatus
    *  运行状态
    *
    * @return string|null
    */
    public function getJobRunningStatus()
    {
        return $this->container['jobRunningStatus'];
    }

    /**
    * Sets jobRunningStatus
    *
    * @param string|null $jobRunningStatus 运行状态
    *
    * @return $this
    */
    public function setJobRunningStatus($jobRunningStatus)
    {
        $this->container['jobRunningStatus'] = $jobRunningStatus;
        return $this;
    }

    /**
    * Gets state
    *  任务状态
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 任务状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets userId
    *  IAM用户ID
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
    * @param string|null $userId IAM用户ID
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets executor
    *  触发构建用户
    *
    * @return string|null
    */
    public function getExecutor()
    {
        return $this->container['executor'];
    }

    /**
    * Sets executor
    *
    * @param string|null $executor 触发构建用户
    *
    * @return $this
    */
    public function setExecutor($executor)
    {
        $this->container['executor'] = $executor;
        return $this;
    }

    /**
    * Gets nickname
    *  用户名称
    *
    * @return string|null
    */
    public function getNickname()
    {
        return $this->container['nickname'];
    }

    /**
    * Sets nickname
    *
    * @param string|null $nickname 用户名称
    *
    * @return $this
    */
    public function setNickname($nickname)
    {
        $this->container['nickname'] = $nickname;
        return $this;
    }

    /**
    * Gets dailyBuildNumber
    *  构建编号，每日从1开始
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
    * @param string|null $dailyBuildNumber 构建编号，每日从1开始
    *
    * @return $this
    */
    public function setDailyBuildNumber($dailyBuildNumber)
    {
        $this->container['dailyBuildNumber'] = $dailyBuildNumber;
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
    * Gets costTime
    *  执行时间
    *
    * @return int|null
    */
    public function getCostTime()
    {
        return $this->container['costTime'];
    }

    /**
    * Sets costTime
    *
    * @param int|null $costTime 执行时间
    *
    * @return $this
    */
    public function setCostTime($costTime)
    {
        $this->container['costTime'] = $costTime;
        return $this;
    }

    /**
    * Gets commitId
    *  代码提交的commit id
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
    * @param string|null $commitId 代码提交的commit id
    *
    * @return $this
    */
    public function setCommitId($commitId)
    {
        $this->container['commitId'] = $commitId;
        return $this;
    }

    /**
    * Gets commitInfo
    *  commitInfo
    *
    * @return \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\BuildInfoRecordCommitInfo|null
    */
    public function getCommitInfo()
    {
        return $this->container['commitInfo'];
    }

    /**
    * Sets commitInfo
    *
    * @param \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\BuildInfoRecordCommitInfo|null $commitInfo commitInfo
    *
    * @return $this
    */
    public function setCommitInfo($commitInfo)
    {
        $this->container['commitInfo'] = $commitInfo;
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
    * Gets codeBranch
    *  代码仓分支
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
    * @param string|null $codeBranch 代码仓分支
    *
    * @return $this
    */
    public function setCodeBranch($codeBranch)
    {
        $this->container['codeBranch'] = $codeBranch;
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

