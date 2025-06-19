<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TestResultVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TestResultVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uri  结果URI
    * name  用例结果名称
    * author  创建人ID
    * rank  级别
    * result  测试结果Code
    * round  执行批次
    * preparation  前置条件
    * description  描述
    * region  逻辑Region
    * steps  测试步骤信息
    * number  用例结果编号
    * authorName  创建人名称
    * beginTime  执行开始时间
    * beginTimeTimestamp  执行开始时间时间戳
    * endTime  执行结束时间
    * endTimeTimestamp  执行结束时间时间戳
    * creationDate  创建时间
    * creationDateTimestamp  创建时间时间戳
    * lastModified  最后修改时间
    * lastModifiedTimestamp  最后修改时间
    * lastChangeTime  最后变更时间
    * lastChangeTimeTimestamp  最后变更时间
    * dfxTestResult  DFX测试结果
    * failureCause  失败原因
    * parentUri  父节点URI(分支用例URI或迭代用例URI)
    * testCaseUri  分支用例URI
    * testCaseName  用例名称
    * taskUri  测试任务URI
    * resultName  测试结果
    * testResultAe  是否自动化执行
    * executorId  执行人ID
    * executorName  执行人名称
    * taskId  执行机任务ID
    * executeId  执行ID
    * timeCost  执行耗时
    * stepTxt  测试步骤
    * stepExpect  测试步骤期望结果
    * stepActual  测试步骤实际结果
    * stepResult  测试步骤结果
    * releaseDev  版本号
    * creationVersionUri  创建版本URI
    * versionUri  版本URI
    * projectId  项目ID
    * reportUrl  第三方过来的执行结果，返回跳转到第三方的url
    * testCaseNumber  测试用例编号
    * serviceType  测试类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uri' => 'string',
            'name' => 'string',
            'author' => 'string',
            'rank' => 'int',
            'result' => 'int',
            'round' => 'int',
            'preparation' => 'string',
            'description' => 'string',
            'region' => 'string',
            'steps' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\ResultStepVo[]',
            'number' => 'string',
            'authorName' => 'string',
            'beginTime' => '\DateTime',
            'beginTimeTimestamp' => 'int',
            'endTime' => '\DateTime',
            'endTimeTimestamp' => 'int',
            'creationDate' => 'string',
            'creationDateTimestamp' => 'int',
            'lastModified' => '\DateTime',
            'lastModifiedTimestamp' => 'int',
            'lastChangeTime' => '\DateTime',
            'lastChangeTimeTimestamp' => 'int',
            'dfxTestResult' => 'string',
            'failureCause' => 'string',
            'parentUri' => 'string',
            'testCaseUri' => 'string',
            'testCaseName' => 'string',
            'taskUri' => 'string',
            'resultName' => 'string',
            'testResultAe' => 'string',
            'executorId' => 'string',
            'executorName' => 'string',
            'taskId' => 'string',
            'executeId' => 'string',
            'timeCost' => 'int',
            'stepTxt' => 'string',
            'stepExpect' => 'string',
            'stepActual' => 'string',
            'stepResult' => 'string',
            'releaseDev' => 'string',
            'creationVersionUri' => 'string',
            'versionUri' => 'string',
            'projectId' => 'string',
            'reportUrl' => 'string',
            'testCaseNumber' => 'string',
            'serviceType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uri  结果URI
    * name  用例结果名称
    * author  创建人ID
    * rank  级别
    * result  测试结果Code
    * round  执行批次
    * preparation  前置条件
    * description  描述
    * region  逻辑Region
    * steps  测试步骤信息
    * number  用例结果编号
    * authorName  创建人名称
    * beginTime  执行开始时间
    * beginTimeTimestamp  执行开始时间时间戳
    * endTime  执行结束时间
    * endTimeTimestamp  执行结束时间时间戳
    * creationDate  创建时间
    * creationDateTimestamp  创建时间时间戳
    * lastModified  最后修改时间
    * lastModifiedTimestamp  最后修改时间
    * lastChangeTime  最后变更时间
    * lastChangeTimeTimestamp  最后变更时间
    * dfxTestResult  DFX测试结果
    * failureCause  失败原因
    * parentUri  父节点URI(分支用例URI或迭代用例URI)
    * testCaseUri  分支用例URI
    * testCaseName  用例名称
    * taskUri  测试任务URI
    * resultName  测试结果
    * testResultAe  是否自动化执行
    * executorId  执行人ID
    * executorName  执行人名称
    * taskId  执行机任务ID
    * executeId  执行ID
    * timeCost  执行耗时
    * stepTxt  测试步骤
    * stepExpect  测试步骤期望结果
    * stepActual  测试步骤实际结果
    * stepResult  测试步骤结果
    * releaseDev  版本号
    * creationVersionUri  创建版本URI
    * versionUri  版本URI
    * projectId  项目ID
    * reportUrl  第三方过来的执行结果，返回跳转到第三方的url
    * testCaseNumber  测试用例编号
    * serviceType  测试类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uri' => null,
        'name' => null,
        'author' => null,
        'rank' => 'int32',
        'result' => 'int32',
        'round' => 'int32',
        'preparation' => null,
        'description' => null,
        'region' => null,
        'steps' => null,
        'number' => null,
        'authorName' => null,
        'beginTime' => 'date-time',
        'beginTimeTimestamp' => 'int64',
        'endTime' => 'date-time',
        'endTimeTimestamp' => 'int64',
        'creationDate' => null,
        'creationDateTimestamp' => 'int64',
        'lastModified' => 'date-time',
        'lastModifiedTimestamp' => 'int64',
        'lastChangeTime' => 'date-time',
        'lastChangeTimeTimestamp' => 'int64',
        'dfxTestResult' => null,
        'failureCause' => null,
        'parentUri' => null,
        'testCaseUri' => null,
        'testCaseName' => null,
        'taskUri' => null,
        'resultName' => null,
        'testResultAe' => null,
        'executorId' => null,
        'executorName' => null,
        'taskId' => null,
        'executeId' => null,
        'timeCost' => 'int32',
        'stepTxt' => null,
        'stepExpect' => null,
        'stepActual' => null,
        'stepResult' => null,
        'releaseDev' => null,
        'creationVersionUri' => null,
        'versionUri' => null,
        'projectId' => null,
        'reportUrl' => null,
        'testCaseNumber' => null,
        'serviceType' => null
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
    * uri  结果URI
    * name  用例结果名称
    * author  创建人ID
    * rank  级别
    * result  测试结果Code
    * round  执行批次
    * preparation  前置条件
    * description  描述
    * region  逻辑Region
    * steps  测试步骤信息
    * number  用例结果编号
    * authorName  创建人名称
    * beginTime  执行开始时间
    * beginTimeTimestamp  执行开始时间时间戳
    * endTime  执行结束时间
    * endTimeTimestamp  执行结束时间时间戳
    * creationDate  创建时间
    * creationDateTimestamp  创建时间时间戳
    * lastModified  最后修改时间
    * lastModifiedTimestamp  最后修改时间
    * lastChangeTime  最后变更时间
    * lastChangeTimeTimestamp  最后变更时间
    * dfxTestResult  DFX测试结果
    * failureCause  失败原因
    * parentUri  父节点URI(分支用例URI或迭代用例URI)
    * testCaseUri  分支用例URI
    * testCaseName  用例名称
    * taskUri  测试任务URI
    * resultName  测试结果
    * testResultAe  是否自动化执行
    * executorId  执行人ID
    * executorName  执行人名称
    * taskId  执行机任务ID
    * executeId  执行ID
    * timeCost  执行耗时
    * stepTxt  测试步骤
    * stepExpect  测试步骤期望结果
    * stepActual  测试步骤实际结果
    * stepResult  测试步骤结果
    * releaseDev  版本号
    * creationVersionUri  创建版本URI
    * versionUri  版本URI
    * projectId  项目ID
    * reportUrl  第三方过来的执行结果，返回跳转到第三方的url
    * testCaseNumber  测试用例编号
    * serviceType  测试类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uri' => 'uri',
            'name' => 'name',
            'author' => 'author',
            'rank' => 'rank',
            'result' => 'result',
            'round' => 'round',
            'preparation' => 'preparation',
            'description' => 'description',
            'region' => 'region',
            'steps' => 'steps',
            'number' => 'number',
            'authorName' => 'author_name',
            'beginTime' => 'begin_time',
            'beginTimeTimestamp' => 'begin_time_timestamp',
            'endTime' => 'end_time',
            'endTimeTimestamp' => 'end_time_timestamp',
            'creationDate' => 'creation_date',
            'creationDateTimestamp' => 'creation_date_timestamp',
            'lastModified' => 'last_modified',
            'lastModifiedTimestamp' => 'last_modified_timestamp',
            'lastChangeTime' => 'last_change_time',
            'lastChangeTimeTimestamp' => 'last_change_time_timestamp',
            'dfxTestResult' => 'dfx_test_result',
            'failureCause' => 'failure_cause',
            'parentUri' => 'parent_uri',
            'testCaseUri' => 'test_case_uri',
            'testCaseName' => 'test_case_name',
            'taskUri' => 'task_uri',
            'resultName' => 'result_name',
            'testResultAe' => 'test_result_ae',
            'executorId' => 'executor_id',
            'executorName' => 'executor_name',
            'taskId' => 'task_id',
            'executeId' => 'execute_id',
            'timeCost' => 'time_cost',
            'stepTxt' => 'step_txt',
            'stepExpect' => 'step_expect',
            'stepActual' => 'step_actual',
            'stepResult' => 'step_result',
            'releaseDev' => 'release_dev',
            'creationVersionUri' => 'creation_version_uri',
            'versionUri' => 'version_uri',
            'projectId' => 'project_id',
            'reportUrl' => 'report_url',
            'testCaseNumber' => 'test_case_number',
            'serviceType' => 'service_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uri  结果URI
    * name  用例结果名称
    * author  创建人ID
    * rank  级别
    * result  测试结果Code
    * round  执行批次
    * preparation  前置条件
    * description  描述
    * region  逻辑Region
    * steps  测试步骤信息
    * number  用例结果编号
    * authorName  创建人名称
    * beginTime  执行开始时间
    * beginTimeTimestamp  执行开始时间时间戳
    * endTime  执行结束时间
    * endTimeTimestamp  执行结束时间时间戳
    * creationDate  创建时间
    * creationDateTimestamp  创建时间时间戳
    * lastModified  最后修改时间
    * lastModifiedTimestamp  最后修改时间
    * lastChangeTime  最后变更时间
    * lastChangeTimeTimestamp  最后变更时间
    * dfxTestResult  DFX测试结果
    * failureCause  失败原因
    * parentUri  父节点URI(分支用例URI或迭代用例URI)
    * testCaseUri  分支用例URI
    * testCaseName  用例名称
    * taskUri  测试任务URI
    * resultName  测试结果
    * testResultAe  是否自动化执行
    * executorId  执行人ID
    * executorName  执行人名称
    * taskId  执行机任务ID
    * executeId  执行ID
    * timeCost  执行耗时
    * stepTxt  测试步骤
    * stepExpect  测试步骤期望结果
    * stepActual  测试步骤实际结果
    * stepResult  测试步骤结果
    * releaseDev  版本号
    * creationVersionUri  创建版本URI
    * versionUri  版本URI
    * projectId  项目ID
    * reportUrl  第三方过来的执行结果，返回跳转到第三方的url
    * testCaseNumber  测试用例编号
    * serviceType  测试类型
    *
    * @var string[]
    */
    protected static $setters = [
            'uri' => 'setUri',
            'name' => 'setName',
            'author' => 'setAuthor',
            'rank' => 'setRank',
            'result' => 'setResult',
            'round' => 'setRound',
            'preparation' => 'setPreparation',
            'description' => 'setDescription',
            'region' => 'setRegion',
            'steps' => 'setSteps',
            'number' => 'setNumber',
            'authorName' => 'setAuthorName',
            'beginTime' => 'setBeginTime',
            'beginTimeTimestamp' => 'setBeginTimeTimestamp',
            'endTime' => 'setEndTime',
            'endTimeTimestamp' => 'setEndTimeTimestamp',
            'creationDate' => 'setCreationDate',
            'creationDateTimestamp' => 'setCreationDateTimestamp',
            'lastModified' => 'setLastModified',
            'lastModifiedTimestamp' => 'setLastModifiedTimestamp',
            'lastChangeTime' => 'setLastChangeTime',
            'lastChangeTimeTimestamp' => 'setLastChangeTimeTimestamp',
            'dfxTestResult' => 'setDfxTestResult',
            'failureCause' => 'setFailureCause',
            'parentUri' => 'setParentUri',
            'testCaseUri' => 'setTestCaseUri',
            'testCaseName' => 'setTestCaseName',
            'taskUri' => 'setTaskUri',
            'resultName' => 'setResultName',
            'testResultAe' => 'setTestResultAe',
            'executorId' => 'setExecutorId',
            'executorName' => 'setExecutorName',
            'taskId' => 'setTaskId',
            'executeId' => 'setExecuteId',
            'timeCost' => 'setTimeCost',
            'stepTxt' => 'setStepTxt',
            'stepExpect' => 'setStepExpect',
            'stepActual' => 'setStepActual',
            'stepResult' => 'setStepResult',
            'releaseDev' => 'setReleaseDev',
            'creationVersionUri' => 'setCreationVersionUri',
            'versionUri' => 'setVersionUri',
            'projectId' => 'setProjectId',
            'reportUrl' => 'setReportUrl',
            'testCaseNumber' => 'setTestCaseNumber',
            'serviceType' => 'setServiceType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uri  结果URI
    * name  用例结果名称
    * author  创建人ID
    * rank  级别
    * result  测试结果Code
    * round  执行批次
    * preparation  前置条件
    * description  描述
    * region  逻辑Region
    * steps  测试步骤信息
    * number  用例结果编号
    * authorName  创建人名称
    * beginTime  执行开始时间
    * beginTimeTimestamp  执行开始时间时间戳
    * endTime  执行结束时间
    * endTimeTimestamp  执行结束时间时间戳
    * creationDate  创建时间
    * creationDateTimestamp  创建时间时间戳
    * lastModified  最后修改时间
    * lastModifiedTimestamp  最后修改时间
    * lastChangeTime  最后变更时间
    * lastChangeTimeTimestamp  最后变更时间
    * dfxTestResult  DFX测试结果
    * failureCause  失败原因
    * parentUri  父节点URI(分支用例URI或迭代用例URI)
    * testCaseUri  分支用例URI
    * testCaseName  用例名称
    * taskUri  测试任务URI
    * resultName  测试结果
    * testResultAe  是否自动化执行
    * executorId  执行人ID
    * executorName  执行人名称
    * taskId  执行机任务ID
    * executeId  执行ID
    * timeCost  执行耗时
    * stepTxt  测试步骤
    * stepExpect  测试步骤期望结果
    * stepActual  测试步骤实际结果
    * stepResult  测试步骤结果
    * releaseDev  版本号
    * creationVersionUri  创建版本URI
    * versionUri  版本URI
    * projectId  项目ID
    * reportUrl  第三方过来的执行结果，返回跳转到第三方的url
    * testCaseNumber  测试用例编号
    * serviceType  测试类型
    *
    * @var string[]
    */
    protected static $getters = [
            'uri' => 'getUri',
            'name' => 'getName',
            'author' => 'getAuthor',
            'rank' => 'getRank',
            'result' => 'getResult',
            'round' => 'getRound',
            'preparation' => 'getPreparation',
            'description' => 'getDescription',
            'region' => 'getRegion',
            'steps' => 'getSteps',
            'number' => 'getNumber',
            'authorName' => 'getAuthorName',
            'beginTime' => 'getBeginTime',
            'beginTimeTimestamp' => 'getBeginTimeTimestamp',
            'endTime' => 'getEndTime',
            'endTimeTimestamp' => 'getEndTimeTimestamp',
            'creationDate' => 'getCreationDate',
            'creationDateTimestamp' => 'getCreationDateTimestamp',
            'lastModified' => 'getLastModified',
            'lastModifiedTimestamp' => 'getLastModifiedTimestamp',
            'lastChangeTime' => 'getLastChangeTime',
            'lastChangeTimeTimestamp' => 'getLastChangeTimeTimestamp',
            'dfxTestResult' => 'getDfxTestResult',
            'failureCause' => 'getFailureCause',
            'parentUri' => 'getParentUri',
            'testCaseUri' => 'getTestCaseUri',
            'testCaseName' => 'getTestCaseName',
            'taskUri' => 'getTaskUri',
            'resultName' => 'getResultName',
            'testResultAe' => 'getTestResultAe',
            'executorId' => 'getExecutorId',
            'executorName' => 'getExecutorName',
            'taskId' => 'getTaskId',
            'executeId' => 'getExecuteId',
            'timeCost' => 'getTimeCost',
            'stepTxt' => 'getStepTxt',
            'stepExpect' => 'getStepExpect',
            'stepActual' => 'getStepActual',
            'stepResult' => 'getStepResult',
            'releaseDev' => 'getReleaseDev',
            'creationVersionUri' => 'getCreationVersionUri',
            'versionUri' => 'getVersionUri',
            'projectId' => 'getProjectId',
            'reportUrl' => 'getReportUrl',
            'testCaseNumber' => 'getTestCaseNumber',
            'serviceType' => 'getServiceType'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['rank'] = isset($data['rank']) ? $data['rank'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['round'] = isset($data['round']) ? $data['round'] : null;
        $this->container['preparation'] = isset($data['preparation']) ? $data['preparation'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['steps'] = isset($data['steps']) ? $data['steps'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['authorName'] = isset($data['authorName']) ? $data['authorName'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['beginTimeTimestamp'] = isset($data['beginTimeTimestamp']) ? $data['beginTimeTimestamp'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['endTimeTimestamp'] = isset($data['endTimeTimestamp']) ? $data['endTimeTimestamp'] : null;
        $this->container['creationDate'] = isset($data['creationDate']) ? $data['creationDate'] : null;
        $this->container['creationDateTimestamp'] = isset($data['creationDateTimestamp']) ? $data['creationDateTimestamp'] : null;
        $this->container['lastModified'] = isset($data['lastModified']) ? $data['lastModified'] : null;
        $this->container['lastModifiedTimestamp'] = isset($data['lastModifiedTimestamp']) ? $data['lastModifiedTimestamp'] : null;
        $this->container['lastChangeTime'] = isset($data['lastChangeTime']) ? $data['lastChangeTime'] : null;
        $this->container['lastChangeTimeTimestamp'] = isset($data['lastChangeTimeTimestamp']) ? $data['lastChangeTimeTimestamp'] : null;
        $this->container['dfxTestResult'] = isset($data['dfxTestResult']) ? $data['dfxTestResult'] : null;
        $this->container['failureCause'] = isset($data['failureCause']) ? $data['failureCause'] : null;
        $this->container['parentUri'] = isset($data['parentUri']) ? $data['parentUri'] : null;
        $this->container['testCaseUri'] = isset($data['testCaseUri']) ? $data['testCaseUri'] : null;
        $this->container['testCaseName'] = isset($data['testCaseName']) ? $data['testCaseName'] : null;
        $this->container['taskUri'] = isset($data['taskUri']) ? $data['taskUri'] : null;
        $this->container['resultName'] = isset($data['resultName']) ? $data['resultName'] : null;
        $this->container['testResultAe'] = isset($data['testResultAe']) ? $data['testResultAe'] : null;
        $this->container['executorId'] = isset($data['executorId']) ? $data['executorId'] : null;
        $this->container['executorName'] = isset($data['executorName']) ? $data['executorName'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['executeId'] = isset($data['executeId']) ? $data['executeId'] : null;
        $this->container['timeCost'] = isset($data['timeCost']) ? $data['timeCost'] : null;
        $this->container['stepTxt'] = isset($data['stepTxt']) ? $data['stepTxt'] : null;
        $this->container['stepExpect'] = isset($data['stepExpect']) ? $data['stepExpect'] : null;
        $this->container['stepActual'] = isset($data['stepActual']) ? $data['stepActual'] : null;
        $this->container['stepResult'] = isset($data['stepResult']) ? $data['stepResult'] : null;
        $this->container['releaseDev'] = isset($data['releaseDev']) ? $data['releaseDev'] : null;
        $this->container['creationVersionUri'] = isset($data['creationVersionUri']) ? $data['creationVersionUri'] : null;
        $this->container['versionUri'] = isset($data['versionUri']) ? $data['versionUri'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['reportUrl'] = isset($data['reportUrl']) ? $data['reportUrl'] : null;
        $this->container['testCaseNumber'] = isset($data['testCaseNumber']) ? $data['testCaseNumber'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
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
    *  结果URI
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
    * @param string|null $uri 结果URI
    *
    * @return $this
    */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;
        return $this;
    }

    /**
    * Gets name
    *  用例结果名称
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
    * @param string|null $name 用例结果名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets author
    *  创建人ID
    *
    * @return string|null
    */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
    * Sets author
    *
    * @param string|null $author 创建人ID
    *
    * @return $this
    */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;
        return $this;
    }

    /**
    * Gets rank
    *  级别
    *
    * @return int|null
    */
    public function getRank()
    {
        return $this->container['rank'];
    }

    /**
    * Sets rank
    *
    * @param int|null $rank 级别
    *
    * @return $this
    */
    public function setRank($rank)
    {
        $this->container['rank'] = $rank;
        return $this;
    }

    /**
    * Gets result
    *  测试结果Code
    *
    * @return int|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param int|null $result 测试结果Code
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets round
    *  执行批次
    *
    * @return int|null
    */
    public function getRound()
    {
        return $this->container['round'];
    }

    /**
    * Sets round
    *
    * @param int|null $round 执行批次
    *
    * @return $this
    */
    public function setRound($round)
    {
        $this->container['round'] = $round;
        return $this;
    }

    /**
    * Gets preparation
    *  前置条件
    *
    * @return string|null
    */
    public function getPreparation()
    {
        return $this->container['preparation'];
    }

    /**
    * Sets preparation
    *
    * @param string|null $preparation 前置条件
    *
    * @return $this
    */
    public function setPreparation($preparation)
    {
        $this->container['preparation'] = $preparation;
        return $this;
    }

    /**
    * Gets description
    *  描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets region
    *  逻辑Region
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
    * @param string|null $region 逻辑Region
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets steps
    *  测试步骤信息
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\ResultStepVo[]|null
    */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
    * Sets steps
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\ResultStepVo[]|null $steps 测试步骤信息
    *
    * @return $this
    */
    public function setSteps($steps)
    {
        $this->container['steps'] = $steps;
        return $this;
    }

    /**
    * Gets number
    *  用例结果编号
    *
    * @return string|null
    */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
    * Sets number
    *
    * @param string|null $number 用例结果编号
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets authorName
    *  创建人名称
    *
    * @return string|null
    */
    public function getAuthorName()
    {
        return $this->container['authorName'];
    }

    /**
    * Sets authorName
    *
    * @param string|null $authorName 创建人名称
    *
    * @return $this
    */
    public function setAuthorName($authorName)
    {
        $this->container['authorName'] = $authorName;
        return $this;
    }

    /**
    * Gets beginTime
    *  执行开始时间
    *
    * @return \DateTime|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param \DateTime|null $beginTime 执行开始时间
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets beginTimeTimestamp
    *  执行开始时间时间戳
    *
    * @return int|null
    */
    public function getBeginTimeTimestamp()
    {
        return $this->container['beginTimeTimestamp'];
    }

    /**
    * Sets beginTimeTimestamp
    *
    * @param int|null $beginTimeTimestamp 执行开始时间时间戳
    *
    * @return $this
    */
    public function setBeginTimeTimestamp($beginTimeTimestamp)
    {
        $this->container['beginTimeTimestamp'] = $beginTimeTimestamp;
        return $this;
    }

    /**
    * Gets endTime
    *  执行结束时间
    *
    * @return \DateTime|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param \DateTime|null $endTime 执行结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets endTimeTimestamp
    *  执行结束时间时间戳
    *
    * @return int|null
    */
    public function getEndTimeTimestamp()
    {
        return $this->container['endTimeTimestamp'];
    }

    /**
    * Sets endTimeTimestamp
    *
    * @param int|null $endTimeTimestamp 执行结束时间时间戳
    *
    * @return $this
    */
    public function setEndTimeTimestamp($endTimeTimestamp)
    {
        $this->container['endTimeTimestamp'] = $endTimeTimestamp;
        return $this;
    }

    /**
    * Gets creationDate
    *  创建时间
    *
    * @return string|null
    */
    public function getCreationDate()
    {
        return $this->container['creationDate'];
    }

    /**
    * Sets creationDate
    *
    * @param string|null $creationDate 创建时间
    *
    * @return $this
    */
    public function setCreationDate($creationDate)
    {
        $this->container['creationDate'] = $creationDate;
        return $this;
    }

    /**
    * Gets creationDateTimestamp
    *  创建时间时间戳
    *
    * @return int|null
    */
    public function getCreationDateTimestamp()
    {
        return $this->container['creationDateTimestamp'];
    }

    /**
    * Sets creationDateTimestamp
    *
    * @param int|null $creationDateTimestamp 创建时间时间戳
    *
    * @return $this
    */
    public function setCreationDateTimestamp($creationDateTimestamp)
    {
        $this->container['creationDateTimestamp'] = $creationDateTimestamp;
        return $this;
    }

    /**
    * Gets lastModified
    *  最后修改时间
    *
    * @return \DateTime|null
    */
    public function getLastModified()
    {
        return $this->container['lastModified'];
    }

    /**
    * Sets lastModified
    *
    * @param \DateTime|null $lastModified 最后修改时间
    *
    * @return $this
    */
    public function setLastModified($lastModified)
    {
        $this->container['lastModified'] = $lastModified;
        return $this;
    }

    /**
    * Gets lastModifiedTimestamp
    *  最后修改时间
    *
    * @return int|null
    */
    public function getLastModifiedTimestamp()
    {
        return $this->container['lastModifiedTimestamp'];
    }

    /**
    * Sets lastModifiedTimestamp
    *
    * @param int|null $lastModifiedTimestamp 最后修改时间
    *
    * @return $this
    */
    public function setLastModifiedTimestamp($lastModifiedTimestamp)
    {
        $this->container['lastModifiedTimestamp'] = $lastModifiedTimestamp;
        return $this;
    }

    /**
    * Gets lastChangeTime
    *  最后变更时间
    *
    * @return \DateTime|null
    */
    public function getLastChangeTime()
    {
        return $this->container['lastChangeTime'];
    }

    /**
    * Sets lastChangeTime
    *
    * @param \DateTime|null $lastChangeTime 最后变更时间
    *
    * @return $this
    */
    public function setLastChangeTime($lastChangeTime)
    {
        $this->container['lastChangeTime'] = $lastChangeTime;
        return $this;
    }

    /**
    * Gets lastChangeTimeTimestamp
    *  最后变更时间
    *
    * @return int|null
    */
    public function getLastChangeTimeTimestamp()
    {
        return $this->container['lastChangeTimeTimestamp'];
    }

    /**
    * Sets lastChangeTimeTimestamp
    *
    * @param int|null $lastChangeTimeTimestamp 最后变更时间
    *
    * @return $this
    */
    public function setLastChangeTimeTimestamp($lastChangeTimeTimestamp)
    {
        $this->container['lastChangeTimeTimestamp'] = $lastChangeTimeTimestamp;
        return $this;
    }

    /**
    * Gets dfxTestResult
    *  DFX测试结果
    *
    * @return string|null
    */
    public function getDfxTestResult()
    {
        return $this->container['dfxTestResult'];
    }

    /**
    * Sets dfxTestResult
    *
    * @param string|null $dfxTestResult DFX测试结果
    *
    * @return $this
    */
    public function setDfxTestResult($dfxTestResult)
    {
        $this->container['dfxTestResult'] = $dfxTestResult;
        return $this;
    }

    /**
    * Gets failureCause
    *  失败原因
    *
    * @return string|null
    */
    public function getFailureCause()
    {
        return $this->container['failureCause'];
    }

    /**
    * Sets failureCause
    *
    * @param string|null $failureCause 失败原因
    *
    * @return $this
    */
    public function setFailureCause($failureCause)
    {
        $this->container['failureCause'] = $failureCause;
        return $this;
    }

    /**
    * Gets parentUri
    *  父节点URI(分支用例URI或迭代用例URI)
    *
    * @return string|null
    */
    public function getParentUri()
    {
        return $this->container['parentUri'];
    }

    /**
    * Sets parentUri
    *
    * @param string|null $parentUri 父节点URI(分支用例URI或迭代用例URI)
    *
    * @return $this
    */
    public function setParentUri($parentUri)
    {
        $this->container['parentUri'] = $parentUri;
        return $this;
    }

    /**
    * Gets testCaseUri
    *  分支用例URI
    *
    * @return string|null
    */
    public function getTestCaseUri()
    {
        return $this->container['testCaseUri'];
    }

    /**
    * Sets testCaseUri
    *
    * @param string|null $testCaseUri 分支用例URI
    *
    * @return $this
    */
    public function setTestCaseUri($testCaseUri)
    {
        $this->container['testCaseUri'] = $testCaseUri;
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
    * Gets taskUri
    *  测试任务URI
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
    * @param string|null $taskUri 测试任务URI
    *
    * @return $this
    */
    public function setTaskUri($taskUri)
    {
        $this->container['taskUri'] = $taskUri;
        return $this;
    }

    /**
    * Gets resultName
    *  测试结果
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
    * @param string|null $resultName 测试结果
    *
    * @return $this
    */
    public function setResultName($resultName)
    {
        $this->container['resultName'] = $resultName;
        return $this;
    }

    /**
    * Gets testResultAe
    *  是否自动化执行
    *
    * @return string|null
    */
    public function getTestResultAe()
    {
        return $this->container['testResultAe'];
    }

    /**
    * Sets testResultAe
    *
    * @param string|null $testResultAe 是否自动化执行
    *
    * @return $this
    */
    public function setTestResultAe($testResultAe)
    {
        $this->container['testResultAe'] = $testResultAe;
        return $this;
    }

    /**
    * Gets executorId
    *  执行人ID
    *
    * @return string|null
    */
    public function getExecutorId()
    {
        return $this->container['executorId'];
    }

    /**
    * Sets executorId
    *
    * @param string|null $executorId 执行人ID
    *
    * @return $this
    */
    public function setExecutorId($executorId)
    {
        $this->container['executorId'] = $executorId;
        return $this;
    }

    /**
    * Gets executorName
    *  执行人名称
    *
    * @return string|null
    */
    public function getExecutorName()
    {
        return $this->container['executorName'];
    }

    /**
    * Sets executorName
    *
    * @param string|null $executorName 执行人名称
    *
    * @return $this
    */
    public function setExecutorName($executorName)
    {
        $this->container['executorName'] = $executorName;
        return $this;
    }

    /**
    * Gets taskId
    *  执行机任务ID
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
    * @param string|null $taskId 执行机任务ID
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets executeId
    *  执行ID
    *
    * @return string|null
    */
    public function getExecuteId()
    {
        return $this->container['executeId'];
    }

    /**
    * Sets executeId
    *
    * @param string|null $executeId 执行ID
    *
    * @return $this
    */
    public function setExecuteId($executeId)
    {
        $this->container['executeId'] = $executeId;
        return $this;
    }

    /**
    * Gets timeCost
    *  执行耗时
    *
    * @return int|null
    */
    public function getTimeCost()
    {
        return $this->container['timeCost'];
    }

    /**
    * Sets timeCost
    *
    * @param int|null $timeCost 执行耗时
    *
    * @return $this
    */
    public function setTimeCost($timeCost)
    {
        $this->container['timeCost'] = $timeCost;
        return $this;
    }

    /**
    * Gets stepTxt
    *  测试步骤
    *
    * @return string|null
    */
    public function getStepTxt()
    {
        return $this->container['stepTxt'];
    }

    /**
    * Sets stepTxt
    *
    * @param string|null $stepTxt 测试步骤
    *
    * @return $this
    */
    public function setStepTxt($stepTxt)
    {
        $this->container['stepTxt'] = $stepTxt;
        return $this;
    }

    /**
    * Gets stepExpect
    *  测试步骤期望结果
    *
    * @return string|null
    */
    public function getStepExpect()
    {
        return $this->container['stepExpect'];
    }

    /**
    * Sets stepExpect
    *
    * @param string|null $stepExpect 测试步骤期望结果
    *
    * @return $this
    */
    public function setStepExpect($stepExpect)
    {
        $this->container['stepExpect'] = $stepExpect;
        return $this;
    }

    /**
    * Gets stepActual
    *  测试步骤实际结果
    *
    * @return string|null
    */
    public function getStepActual()
    {
        return $this->container['stepActual'];
    }

    /**
    * Sets stepActual
    *
    * @param string|null $stepActual 测试步骤实际结果
    *
    * @return $this
    */
    public function setStepActual($stepActual)
    {
        $this->container['stepActual'] = $stepActual;
        return $this;
    }

    /**
    * Gets stepResult
    *  测试步骤结果
    *
    * @return string|null
    */
    public function getStepResult()
    {
        return $this->container['stepResult'];
    }

    /**
    * Sets stepResult
    *
    * @param string|null $stepResult 测试步骤结果
    *
    * @return $this
    */
    public function setStepResult($stepResult)
    {
        $this->container['stepResult'] = $stepResult;
        return $this;
    }

    /**
    * Gets releaseDev
    *  版本号
    *
    * @return string|null
    */
    public function getReleaseDev()
    {
        return $this->container['releaseDev'];
    }

    /**
    * Sets releaseDev
    *
    * @param string|null $releaseDev 版本号
    *
    * @return $this
    */
    public function setReleaseDev($releaseDev)
    {
        $this->container['releaseDev'] = $releaseDev;
        return $this;
    }

    /**
    * Gets creationVersionUri
    *  创建版本URI
    *
    * @return string|null
    */
    public function getCreationVersionUri()
    {
        return $this->container['creationVersionUri'];
    }

    /**
    * Sets creationVersionUri
    *
    * @param string|null $creationVersionUri 创建版本URI
    *
    * @return $this
    */
    public function setCreationVersionUri($creationVersionUri)
    {
        $this->container['creationVersionUri'] = $creationVersionUri;
        return $this;
    }

    /**
    * Gets versionUri
    *  版本URI
    *
    * @return string|null
    */
    public function getVersionUri()
    {
        return $this->container['versionUri'];
    }

    /**
    * Sets versionUri
    *
    * @param string|null $versionUri 版本URI
    *
    * @return $this
    */
    public function setVersionUri($versionUri)
    {
        $this->container['versionUri'] = $versionUri;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
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
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets reportUrl
    *  第三方过来的执行结果，返回跳转到第三方的url
    *
    * @return string|null
    */
    public function getReportUrl()
    {
        return $this->container['reportUrl'];
    }

    /**
    * Sets reportUrl
    *
    * @param string|null $reportUrl 第三方过来的执行结果，返回跳转到第三方的url
    *
    * @return $this
    */
    public function setReportUrl($reportUrl)
    {
        $this->container['reportUrl'] = $reportUrl;
        return $this;
    }

    /**
    * Gets testCaseNumber
    *  测试用例编号
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
    * @param string|null $testCaseNumber 测试用例编号
    *
    * @return $this
    */
    public function setTestCaseNumber($testCaseNumber)
    {
        $this->container['testCaseNumber'] = $testCaseNumber;
        return $this;
    }

    /**
    * Gets serviceType
    *  测试类型
    *
    * @return string|null
    */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
    * Sets serviceType
    *
    * @param string|null $serviceType 测试类型
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
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

