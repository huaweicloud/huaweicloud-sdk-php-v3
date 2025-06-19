<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskAssignCaseDetailVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskAssignCaseDetailVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uri  关联关系uri
    * sort  排序顺序
    * owner  责任人id
    * stage  测试阶段
    * projectUuid  项目id
    * taskUri  任务uri
    * updateTime  更新时间
    * updatorName  更新人
    * updator  更新人id
    * caseUri  用例uri
    * isAvailable  是否可用
    * testCaseName  用例名称
    * featureUri  用例目录Uri
    * testCaseNumber  用例编号
    * svnScriptPath  脚本路径
    * statusCode  状态
    * statusName  状态名称
    * resultCode  结果id
    * resultName  结果名称
    * ownerName  责任人名称
    * executeLatestTime  最新执行时间
    * executeDuration  执行时长
    * isKeyword  是否是关键用例
    * netWorkScriptName  脚本名称
    * rankId  用例等级
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uri' => 'string',
            'sort' => 'int',
            'owner' => 'string',
            'stage' => 'int',
            'projectUuid' => 'string',
            'taskUri' => 'string',
            'updateTime' => '\DateTime',
            'updatorName' => 'string',
            'updator' => 'string',
            'caseUri' => 'string',
            'isAvailable' => 'int',
            'testCaseName' => 'string',
            'featureUri' => 'string',
            'testCaseNumber' => 'string',
            'svnScriptPath' => 'string',
            'statusCode' => 'string',
            'statusName' => 'string',
            'resultCode' => 'string',
            'resultName' => 'string',
            'ownerName' => 'string',
            'executeLatestTime' => '\DateTime',
            'executeDuration' => 'string',
            'isKeyword' => 'int',
            'netWorkScriptName' => 'string',
            'rankId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uri  关联关系uri
    * sort  排序顺序
    * owner  责任人id
    * stage  测试阶段
    * projectUuid  项目id
    * taskUri  任务uri
    * updateTime  更新时间
    * updatorName  更新人
    * updator  更新人id
    * caseUri  用例uri
    * isAvailable  是否可用
    * testCaseName  用例名称
    * featureUri  用例目录Uri
    * testCaseNumber  用例编号
    * svnScriptPath  脚本路径
    * statusCode  状态
    * statusName  状态名称
    * resultCode  结果id
    * resultName  结果名称
    * ownerName  责任人名称
    * executeLatestTime  最新执行时间
    * executeDuration  执行时长
    * isKeyword  是否是关键用例
    * netWorkScriptName  脚本名称
    * rankId  用例等级
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uri' => null,
        'sort' => 'int32',
        'owner' => null,
        'stage' => 'int32',
        'projectUuid' => null,
        'taskUri' => null,
        'updateTime' => 'date-time',
        'updatorName' => null,
        'updator' => null,
        'caseUri' => null,
        'isAvailable' => 'int32',
        'testCaseName' => null,
        'featureUri' => null,
        'testCaseNumber' => null,
        'svnScriptPath' => null,
        'statusCode' => null,
        'statusName' => null,
        'resultCode' => null,
        'resultName' => null,
        'ownerName' => null,
        'executeLatestTime' => 'date-time',
        'executeDuration' => null,
        'isKeyword' => 'int32',
        'netWorkScriptName' => null,
        'rankId' => 'int32'
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
    * uri  关联关系uri
    * sort  排序顺序
    * owner  责任人id
    * stage  测试阶段
    * projectUuid  项目id
    * taskUri  任务uri
    * updateTime  更新时间
    * updatorName  更新人
    * updator  更新人id
    * caseUri  用例uri
    * isAvailable  是否可用
    * testCaseName  用例名称
    * featureUri  用例目录Uri
    * testCaseNumber  用例编号
    * svnScriptPath  脚本路径
    * statusCode  状态
    * statusName  状态名称
    * resultCode  结果id
    * resultName  结果名称
    * ownerName  责任人名称
    * executeLatestTime  最新执行时间
    * executeDuration  执行时长
    * isKeyword  是否是关键用例
    * netWorkScriptName  脚本名称
    * rankId  用例等级
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uri' => 'uri',
            'sort' => 'sort',
            'owner' => 'owner',
            'stage' => 'stage',
            'projectUuid' => 'project_uuid',
            'taskUri' => 'task_uri',
            'updateTime' => 'update_time',
            'updatorName' => 'updator_name',
            'updator' => 'updator',
            'caseUri' => 'case_uri',
            'isAvailable' => 'is_available',
            'testCaseName' => 'test_case_name',
            'featureUri' => 'feature_uri',
            'testCaseNumber' => 'test_case_number',
            'svnScriptPath' => 'svn_script_path',
            'statusCode' => 'status_code',
            'statusName' => 'status_name',
            'resultCode' => 'result_code',
            'resultName' => 'result_name',
            'ownerName' => 'owner_name',
            'executeLatestTime' => 'execute_latest_time',
            'executeDuration' => 'execute_duration',
            'isKeyword' => 'is_keyword',
            'netWorkScriptName' => 'net_work_script_name',
            'rankId' => 'rank_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uri  关联关系uri
    * sort  排序顺序
    * owner  责任人id
    * stage  测试阶段
    * projectUuid  项目id
    * taskUri  任务uri
    * updateTime  更新时间
    * updatorName  更新人
    * updator  更新人id
    * caseUri  用例uri
    * isAvailable  是否可用
    * testCaseName  用例名称
    * featureUri  用例目录Uri
    * testCaseNumber  用例编号
    * svnScriptPath  脚本路径
    * statusCode  状态
    * statusName  状态名称
    * resultCode  结果id
    * resultName  结果名称
    * ownerName  责任人名称
    * executeLatestTime  最新执行时间
    * executeDuration  执行时长
    * isKeyword  是否是关键用例
    * netWorkScriptName  脚本名称
    * rankId  用例等级
    *
    * @var string[]
    */
    protected static $setters = [
            'uri' => 'setUri',
            'sort' => 'setSort',
            'owner' => 'setOwner',
            'stage' => 'setStage',
            'projectUuid' => 'setProjectUuid',
            'taskUri' => 'setTaskUri',
            'updateTime' => 'setUpdateTime',
            'updatorName' => 'setUpdatorName',
            'updator' => 'setUpdator',
            'caseUri' => 'setCaseUri',
            'isAvailable' => 'setIsAvailable',
            'testCaseName' => 'setTestCaseName',
            'featureUri' => 'setFeatureUri',
            'testCaseNumber' => 'setTestCaseNumber',
            'svnScriptPath' => 'setSvnScriptPath',
            'statusCode' => 'setStatusCode',
            'statusName' => 'setStatusName',
            'resultCode' => 'setResultCode',
            'resultName' => 'setResultName',
            'ownerName' => 'setOwnerName',
            'executeLatestTime' => 'setExecuteLatestTime',
            'executeDuration' => 'setExecuteDuration',
            'isKeyword' => 'setIsKeyword',
            'netWorkScriptName' => 'setNetWorkScriptName',
            'rankId' => 'setRankId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uri  关联关系uri
    * sort  排序顺序
    * owner  责任人id
    * stage  测试阶段
    * projectUuid  项目id
    * taskUri  任务uri
    * updateTime  更新时间
    * updatorName  更新人
    * updator  更新人id
    * caseUri  用例uri
    * isAvailable  是否可用
    * testCaseName  用例名称
    * featureUri  用例目录Uri
    * testCaseNumber  用例编号
    * svnScriptPath  脚本路径
    * statusCode  状态
    * statusName  状态名称
    * resultCode  结果id
    * resultName  结果名称
    * ownerName  责任人名称
    * executeLatestTime  最新执行时间
    * executeDuration  执行时长
    * isKeyword  是否是关键用例
    * netWorkScriptName  脚本名称
    * rankId  用例等级
    *
    * @var string[]
    */
    protected static $getters = [
            'uri' => 'getUri',
            'sort' => 'getSort',
            'owner' => 'getOwner',
            'stage' => 'getStage',
            'projectUuid' => 'getProjectUuid',
            'taskUri' => 'getTaskUri',
            'updateTime' => 'getUpdateTime',
            'updatorName' => 'getUpdatorName',
            'updator' => 'getUpdator',
            'caseUri' => 'getCaseUri',
            'isAvailable' => 'getIsAvailable',
            'testCaseName' => 'getTestCaseName',
            'featureUri' => 'getFeatureUri',
            'testCaseNumber' => 'getTestCaseNumber',
            'svnScriptPath' => 'getSvnScriptPath',
            'statusCode' => 'getStatusCode',
            'statusName' => 'getStatusName',
            'resultCode' => 'getResultCode',
            'resultName' => 'getResultName',
            'ownerName' => 'getOwnerName',
            'executeLatestTime' => 'getExecuteLatestTime',
            'executeDuration' => 'getExecuteDuration',
            'isKeyword' => 'getIsKeyword',
            'netWorkScriptName' => 'getNetWorkScriptName',
            'rankId' => 'getRankId'
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
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['stage'] = isset($data['stage']) ? $data['stage'] : null;
        $this->container['projectUuid'] = isset($data['projectUuid']) ? $data['projectUuid'] : null;
        $this->container['taskUri'] = isset($data['taskUri']) ? $data['taskUri'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['updatorName'] = isset($data['updatorName']) ? $data['updatorName'] : null;
        $this->container['updator'] = isset($data['updator']) ? $data['updator'] : null;
        $this->container['caseUri'] = isset($data['caseUri']) ? $data['caseUri'] : null;
        $this->container['isAvailable'] = isset($data['isAvailable']) ? $data['isAvailable'] : null;
        $this->container['testCaseName'] = isset($data['testCaseName']) ? $data['testCaseName'] : null;
        $this->container['featureUri'] = isset($data['featureUri']) ? $data['featureUri'] : null;
        $this->container['testCaseNumber'] = isset($data['testCaseNumber']) ? $data['testCaseNumber'] : null;
        $this->container['svnScriptPath'] = isset($data['svnScriptPath']) ? $data['svnScriptPath'] : null;
        $this->container['statusCode'] = isset($data['statusCode']) ? $data['statusCode'] : null;
        $this->container['statusName'] = isset($data['statusName']) ? $data['statusName'] : null;
        $this->container['resultCode'] = isset($data['resultCode']) ? $data['resultCode'] : null;
        $this->container['resultName'] = isset($data['resultName']) ? $data['resultName'] : null;
        $this->container['ownerName'] = isset($data['ownerName']) ? $data['ownerName'] : null;
        $this->container['executeLatestTime'] = isset($data['executeLatestTime']) ? $data['executeLatestTime'] : null;
        $this->container['executeDuration'] = isset($data['executeDuration']) ? $data['executeDuration'] : null;
        $this->container['isKeyword'] = isset($data['isKeyword']) ? $data['isKeyword'] : null;
        $this->container['netWorkScriptName'] = isset($data['netWorkScriptName']) ? $data['netWorkScriptName'] : null;
        $this->container['rankId'] = isset($data['rankId']) ? $data['rankId'] : null;
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
    * Gets uri
    *  关联关系uri
    *
    * @return string|null
    */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
    * Sets uri
    *
    * @param string|null $uri 关联关系uri
    *
    * @return $this
    */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;
        return $this;
    }

    /**
    * Gets sort
    *  排序顺序
    *
    * @return int|null
    */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
    * Sets sort
    *
    * @param int|null $sort 排序顺序
    *
    * @return $this
    */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;
        return $this;
    }

    /**
    * Gets owner
    *  责任人id
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
    * @param string|null $owner 责任人id
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets stage
    *  测试阶段
    *
    * @return int|null
    */
    public function getStage()
    {
        return $this->container['stage'];
    }

    /**
    * Sets stage
    *
    * @param int|null $stage 测试阶段
    *
    * @return $this
    */
    public function setStage($stage)
    {
        $this->container['stage'] = $stage;
        return $this;
    }

    /**
    * Gets projectUuid
    *  项目id
    *
    * @return string|null
    */
    public function getProjectUuid()
    {
        return $this->container['projectUuid'];
    }

    /**
    * Sets projectUuid
    *
    * @param string|null $projectUuid 项目id
    *
    * @return $this
    */
    public function setProjectUuid($projectUuid)
    {
        $this->container['projectUuid'] = $projectUuid;
        return $this;
    }

    /**
    * Gets taskUri
    *  任务uri
    *
    * @return string|null
    */
    public function getTaskUri()
    {
        return $this->container['taskUri'];
    }

    /**
    * Sets taskUri
    *
    * @param string|null $taskUri 任务uri
    *
    * @return $this
    */
    public function setTaskUri($taskUri)
    {
        $this->container['taskUri'] = $taskUri;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
    *
    * @return \DateTime|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param \DateTime|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets updatorName
    *  更新人
    *
    * @return string|null
    */
    public function getUpdatorName()
    {
        return $this->container['updatorName'];
    }

    /**
    * Sets updatorName
    *
    * @param string|null $updatorName 更新人
    *
    * @return $this
    */
    public function setUpdatorName($updatorName)
    {
        $this->container['updatorName'] = $updatorName;
        return $this;
    }

    /**
    * Gets updator
    *  更新人id
    *
    * @return string|null
    */
    public function getUpdator()
    {
        return $this->container['updator'];
    }

    /**
    * Sets updator
    *
    * @param string|null $updator 更新人id
    *
    * @return $this
    */
    public function setUpdator($updator)
    {
        $this->container['updator'] = $updator;
        return $this;
    }

    /**
    * Gets caseUri
    *  用例uri
    *
    * @return string|null
    */
    public function getCaseUri()
    {
        return $this->container['caseUri'];
    }

    /**
    * Sets caseUri
    *
    * @param string|null $caseUri 用例uri
    *
    * @return $this
    */
    public function setCaseUri($caseUri)
    {
        $this->container['caseUri'] = $caseUri;
        return $this;
    }

    /**
    * Gets isAvailable
    *  是否可用
    *
    * @return int|null
    */
    public function getIsAvailable()
    {
        return $this->container['isAvailable'];
    }

    /**
    * Sets isAvailable
    *
    * @param int|null $isAvailable 是否可用
    *
    * @return $this
    */
    public function setIsAvailable($isAvailable)
    {
        $this->container['isAvailable'] = $isAvailable;
        return $this;
    }

    /**
    * Gets testCaseName
    *  用例名称
    *
    * @return string|null
    */
    public function getTestCaseName()
    {
        return $this->container['testCaseName'];
    }

    /**
    * Sets testCaseName
    *
    * @param string|null $testCaseName 用例名称
    *
    * @return $this
    */
    public function setTestCaseName($testCaseName)
    {
        $this->container['testCaseName'] = $testCaseName;
        return $this;
    }

    /**
    * Gets featureUri
    *  用例目录Uri
    *
    * @return string|null
    */
    public function getFeatureUri()
    {
        return $this->container['featureUri'];
    }

    /**
    * Sets featureUri
    *
    * @param string|null $featureUri 用例目录Uri
    *
    * @return $this
    */
    public function setFeatureUri($featureUri)
    {
        $this->container['featureUri'] = $featureUri;
        return $this;
    }

    /**
    * Gets testCaseNumber
    *  用例编号
    *
    * @return string|null
    */
    public function getTestCaseNumber()
    {
        return $this->container['testCaseNumber'];
    }

    /**
    * Sets testCaseNumber
    *
    * @param string|null $testCaseNumber 用例编号
    *
    * @return $this
    */
    public function setTestCaseNumber($testCaseNumber)
    {
        $this->container['testCaseNumber'] = $testCaseNumber;
        return $this;
    }

    /**
    * Gets svnScriptPath
    *  脚本路径
    *
    * @return string|null
    */
    public function getSvnScriptPath()
    {
        return $this->container['svnScriptPath'];
    }

    /**
    * Sets svnScriptPath
    *
    * @param string|null $svnScriptPath 脚本路径
    *
    * @return $this
    */
    public function setSvnScriptPath($svnScriptPath)
    {
        $this->container['svnScriptPath'] = $svnScriptPath;
        return $this;
    }

    /**
    * Gets statusCode
    *  状态
    *
    * @return string|null
    */
    public function getStatusCode()
    {
        return $this->container['statusCode'];
    }

    /**
    * Sets statusCode
    *
    * @param string|null $statusCode 状态
    *
    * @return $this
    */
    public function setStatusCode($statusCode)
    {
        $this->container['statusCode'] = $statusCode;
        return $this;
    }

    /**
    * Gets statusName
    *  状态名称
    *
    * @return string|null
    */
    public function getStatusName()
    {
        return $this->container['statusName'];
    }

    /**
    * Sets statusName
    *
    * @param string|null $statusName 状态名称
    *
    * @return $this
    */
    public function setStatusName($statusName)
    {
        $this->container['statusName'] = $statusName;
        return $this;
    }

    /**
    * Gets resultCode
    *  结果id
    *
    * @return string|null
    */
    public function getResultCode()
    {
        return $this->container['resultCode'];
    }

    /**
    * Sets resultCode
    *
    * @param string|null $resultCode 结果id
    *
    * @return $this
    */
    public function setResultCode($resultCode)
    {
        $this->container['resultCode'] = $resultCode;
        return $this;
    }

    /**
    * Gets resultName
    *  结果名称
    *
    * @return string|null
    */
    public function getResultName()
    {
        return $this->container['resultName'];
    }

    /**
    * Sets resultName
    *
    * @param string|null $resultName 结果名称
    *
    * @return $this
    */
    public function setResultName($resultName)
    {
        $this->container['resultName'] = $resultName;
        return $this;
    }

    /**
    * Gets ownerName
    *  责任人名称
    *
    * @return string|null
    */
    public function getOwnerName()
    {
        return $this->container['ownerName'];
    }

    /**
    * Sets ownerName
    *
    * @param string|null $ownerName 责任人名称
    *
    * @return $this
    */
    public function setOwnerName($ownerName)
    {
        $this->container['ownerName'] = $ownerName;
        return $this;
    }

    /**
    * Gets executeLatestTime
    *  最新执行时间
    *
    * @return \DateTime|null
    */
    public function getExecuteLatestTime()
    {
        return $this->container['executeLatestTime'];
    }

    /**
    * Sets executeLatestTime
    *
    * @param \DateTime|null $executeLatestTime 最新执行时间
    *
    * @return $this
    */
    public function setExecuteLatestTime($executeLatestTime)
    {
        $this->container['executeLatestTime'] = $executeLatestTime;
        return $this;
    }

    /**
    * Gets executeDuration
    *  执行时长
    *
    * @return string|null
    */
    public function getExecuteDuration()
    {
        return $this->container['executeDuration'];
    }

    /**
    * Sets executeDuration
    *
    * @param string|null $executeDuration 执行时长
    *
    * @return $this
    */
    public function setExecuteDuration($executeDuration)
    {
        $this->container['executeDuration'] = $executeDuration;
        return $this;
    }

    /**
    * Gets isKeyword
    *  是否是关键用例
    *
    * @return int|null
    */
    public function getIsKeyword()
    {
        return $this->container['isKeyword'];
    }

    /**
    * Sets isKeyword
    *
    * @param int|null $isKeyword 是否是关键用例
    *
    * @return $this
    */
    public function setIsKeyword($isKeyword)
    {
        $this->container['isKeyword'] = $isKeyword;
        return $this;
    }

    /**
    * Gets netWorkScriptName
    *  脚本名称
    *
    * @return string|null
    */
    public function getNetWorkScriptName()
    {
        return $this->container['netWorkScriptName'];
    }

    /**
    * Sets netWorkScriptName
    *
    * @param string|null $netWorkScriptName 脚本名称
    *
    * @return $this
    */
    public function setNetWorkScriptName($netWorkScriptName)
    {
        $this->container['netWorkScriptName'] = $netWorkScriptName;
        return $this;
    }

    /**
    * Gets rankId
    *  用例等级
    *
    * @return int|null
    */
    public function getRankId()
    {
        return $this->container['rankId'];
    }

    /**
    * Sets rankId
    *
    * @param int|null $rankId 用例等级
    *
    * @return $this
    */
    public function setRankId($rankId)
    {
        $this->container['rankId'] = $rankId;
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

