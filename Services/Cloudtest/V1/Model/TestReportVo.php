<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TestReportVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TestReportVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uri  测试报告Uri
    * name  测试报告名称
    * creator  创建人ID
    * updator  修改人ID
    * versionUri  测试计划Uri
    * branchUri  分支Uri
    * versionName  测试计划名称
    * branchName  分支名称
    * testConclusion  测试结论
    * testConclusionDetails  测试结论描述
    * defectResolutionRate  缺陷解决率
    * defectResolutionScore  缺陷解决分数
    * caseExecutionRate  用例执行率
    * caseExecutionScore  用例执行分数
    * casePassRate  用例通过率
    * casePassScore  用例通过分数
    * issuePassRate  需求通过率
    * issuePassScore  需求通过分数
    * issueCoverageRate  需求覆盖率
    * issueCoverageScore  需求覆盖分数
    * projectResidualDefectIndex  项目总遗留DI
    * iteratorResidualDefectIndex  计划新增DI
    * caseAutomationDetails  caseAutomationDetails
    * caseValidityRatio  用例有效性比例
    * issueDetails  issueDetails
    * caseDetails  用例通过情况
    * defectDetailsBySeverity  缺陷严重程度
    * defectDetailsByModule  缺陷按照模块分布情况
    * casePassRateByTestType  每个测试类型的用例通过率
    * testReportCustomReportDetail  测试报告自定义报告详情
    * createTime  创建时间
    * createTimestamp  创建时间戳
    * creatorName  创建人名
    * updateTime  修改时间
    * updateTimestamp  修改时间戳
    * updatorName  修改人名
    * projectUuid  项目ID
    * riskAnalysis  风险分析
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uri' => 'string',
            'name' => 'string',
            'creator' => 'string',
            'updator' => 'string',
            'versionUri' => 'string',
            'branchUri' => 'string',
            'versionName' => 'string',
            'branchName' => 'string',
            'testConclusion' => 'string',
            'testConclusionDetails' => 'string',
            'defectResolutionRate' => 'string',
            'defectResolutionScore' => 'string',
            'caseExecutionRate' => 'string',
            'caseExecutionScore' => 'string',
            'casePassRate' => 'string',
            'casePassScore' => 'string',
            'issuePassRate' => 'string',
            'issuePassScore' => 'string',
            'issueCoverageRate' => 'string',
            'issueCoverageScore' => 'string',
            'projectResidualDefectIndex' => 'string',
            'iteratorResidualDefectIndex' => 'string',
            'caseAutomationDetails' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\CaseAutomationDetailsVo',
            'caseValidityRatio' => 'string',
            'issueDetails' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\IssuePassDetailsVo',
            'caseDetails' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndValueVo[]',
            'defectDetailsBySeverity' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\IdAndNameAndValueVo[]',
            'defectDetailsByModule' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\IdAndNameAndValueVo[]',
            'casePassRateByTestType' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\DetailTestTypeCasePassRateVo[]',
            'testReportCustomReportDetail' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\CustomReportListVo[]',
            'createTime' => '\DateTime',
            'createTimestamp' => 'int',
            'creatorName' => 'string',
            'updateTime' => '\DateTime',
            'updateTimestamp' => 'int',
            'updatorName' => 'string',
            'projectUuid' => 'string',
            'riskAnalysis' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uri  测试报告Uri
    * name  测试报告名称
    * creator  创建人ID
    * updator  修改人ID
    * versionUri  测试计划Uri
    * branchUri  分支Uri
    * versionName  测试计划名称
    * branchName  分支名称
    * testConclusion  测试结论
    * testConclusionDetails  测试结论描述
    * defectResolutionRate  缺陷解决率
    * defectResolutionScore  缺陷解决分数
    * caseExecutionRate  用例执行率
    * caseExecutionScore  用例执行分数
    * casePassRate  用例通过率
    * casePassScore  用例通过分数
    * issuePassRate  需求通过率
    * issuePassScore  需求通过分数
    * issueCoverageRate  需求覆盖率
    * issueCoverageScore  需求覆盖分数
    * projectResidualDefectIndex  项目总遗留DI
    * iteratorResidualDefectIndex  计划新增DI
    * caseAutomationDetails  caseAutomationDetails
    * caseValidityRatio  用例有效性比例
    * issueDetails  issueDetails
    * caseDetails  用例通过情况
    * defectDetailsBySeverity  缺陷严重程度
    * defectDetailsByModule  缺陷按照模块分布情况
    * casePassRateByTestType  每个测试类型的用例通过率
    * testReportCustomReportDetail  测试报告自定义报告详情
    * createTime  创建时间
    * createTimestamp  创建时间戳
    * creatorName  创建人名
    * updateTime  修改时间
    * updateTimestamp  修改时间戳
    * updatorName  修改人名
    * projectUuid  项目ID
    * riskAnalysis  风险分析
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uri' => null,
        'name' => null,
        'creator' => null,
        'updator' => null,
        'versionUri' => null,
        'branchUri' => null,
        'versionName' => null,
        'branchName' => null,
        'testConclusion' => null,
        'testConclusionDetails' => null,
        'defectResolutionRate' => null,
        'defectResolutionScore' => null,
        'caseExecutionRate' => null,
        'caseExecutionScore' => null,
        'casePassRate' => null,
        'casePassScore' => null,
        'issuePassRate' => null,
        'issuePassScore' => null,
        'issueCoverageRate' => null,
        'issueCoverageScore' => null,
        'projectResidualDefectIndex' => null,
        'iteratorResidualDefectIndex' => null,
        'caseAutomationDetails' => null,
        'caseValidityRatio' => null,
        'issueDetails' => null,
        'caseDetails' => null,
        'defectDetailsBySeverity' => null,
        'defectDetailsByModule' => null,
        'casePassRateByTestType' => null,
        'testReportCustomReportDetail' => null,
        'createTime' => 'date-time',
        'createTimestamp' => 'int64',
        'creatorName' => null,
        'updateTime' => 'date-time',
        'updateTimestamp' => 'int64',
        'updatorName' => null,
        'projectUuid' => null,
        'riskAnalysis' => null
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
    * uri  测试报告Uri
    * name  测试报告名称
    * creator  创建人ID
    * updator  修改人ID
    * versionUri  测试计划Uri
    * branchUri  分支Uri
    * versionName  测试计划名称
    * branchName  分支名称
    * testConclusion  测试结论
    * testConclusionDetails  测试结论描述
    * defectResolutionRate  缺陷解决率
    * defectResolutionScore  缺陷解决分数
    * caseExecutionRate  用例执行率
    * caseExecutionScore  用例执行分数
    * casePassRate  用例通过率
    * casePassScore  用例通过分数
    * issuePassRate  需求通过率
    * issuePassScore  需求通过分数
    * issueCoverageRate  需求覆盖率
    * issueCoverageScore  需求覆盖分数
    * projectResidualDefectIndex  项目总遗留DI
    * iteratorResidualDefectIndex  计划新增DI
    * caseAutomationDetails  caseAutomationDetails
    * caseValidityRatio  用例有效性比例
    * issueDetails  issueDetails
    * caseDetails  用例通过情况
    * defectDetailsBySeverity  缺陷严重程度
    * defectDetailsByModule  缺陷按照模块分布情况
    * casePassRateByTestType  每个测试类型的用例通过率
    * testReportCustomReportDetail  测试报告自定义报告详情
    * createTime  创建时间
    * createTimestamp  创建时间戳
    * creatorName  创建人名
    * updateTime  修改时间
    * updateTimestamp  修改时间戳
    * updatorName  修改人名
    * projectUuid  项目ID
    * riskAnalysis  风险分析
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uri' => 'uri',
            'name' => 'name',
            'creator' => 'creator',
            'updator' => 'updator',
            'versionUri' => 'version_uri',
            'branchUri' => 'branch_uri',
            'versionName' => 'version_name',
            'branchName' => 'branch_name',
            'testConclusion' => 'test_conclusion',
            'testConclusionDetails' => 'test_conclusion_details',
            'defectResolutionRate' => 'defect_resolution_rate',
            'defectResolutionScore' => 'defect_resolution_score',
            'caseExecutionRate' => 'case_execution_rate',
            'caseExecutionScore' => 'case_execution_score',
            'casePassRate' => 'case_pass_rate',
            'casePassScore' => 'case_pass_score',
            'issuePassRate' => 'issue_pass_rate',
            'issuePassScore' => 'issue_pass_score',
            'issueCoverageRate' => 'issue_coverage_rate',
            'issueCoverageScore' => 'issue_coverage_score',
            'projectResidualDefectIndex' => 'project_residual_defect_index',
            'iteratorResidualDefectIndex' => 'iterator_residual_defect_index',
            'caseAutomationDetails' => 'case_automation_details',
            'caseValidityRatio' => 'case_validity_ratio',
            'issueDetails' => 'issue_details',
            'caseDetails' => 'case_details',
            'defectDetailsBySeverity' => 'defect_details_by_severity',
            'defectDetailsByModule' => 'defect_details_by_module',
            'casePassRateByTestType' => 'case_pass_rate_by_test_type',
            'testReportCustomReportDetail' => 'test_report_custom_report_detail',
            'createTime' => 'create_time',
            'createTimestamp' => 'create_timestamp',
            'creatorName' => 'creator_name',
            'updateTime' => 'update_time',
            'updateTimestamp' => 'update_timestamp',
            'updatorName' => 'updator_name',
            'projectUuid' => 'project_uuid',
            'riskAnalysis' => 'risk_analysis'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uri  测试报告Uri
    * name  测试报告名称
    * creator  创建人ID
    * updator  修改人ID
    * versionUri  测试计划Uri
    * branchUri  分支Uri
    * versionName  测试计划名称
    * branchName  分支名称
    * testConclusion  测试结论
    * testConclusionDetails  测试结论描述
    * defectResolutionRate  缺陷解决率
    * defectResolutionScore  缺陷解决分数
    * caseExecutionRate  用例执行率
    * caseExecutionScore  用例执行分数
    * casePassRate  用例通过率
    * casePassScore  用例通过分数
    * issuePassRate  需求通过率
    * issuePassScore  需求通过分数
    * issueCoverageRate  需求覆盖率
    * issueCoverageScore  需求覆盖分数
    * projectResidualDefectIndex  项目总遗留DI
    * iteratorResidualDefectIndex  计划新增DI
    * caseAutomationDetails  caseAutomationDetails
    * caseValidityRatio  用例有效性比例
    * issueDetails  issueDetails
    * caseDetails  用例通过情况
    * defectDetailsBySeverity  缺陷严重程度
    * defectDetailsByModule  缺陷按照模块分布情况
    * casePassRateByTestType  每个测试类型的用例通过率
    * testReportCustomReportDetail  测试报告自定义报告详情
    * createTime  创建时间
    * createTimestamp  创建时间戳
    * creatorName  创建人名
    * updateTime  修改时间
    * updateTimestamp  修改时间戳
    * updatorName  修改人名
    * projectUuid  项目ID
    * riskAnalysis  风险分析
    *
    * @var string[]
    */
    protected static $setters = [
            'uri' => 'setUri',
            'name' => 'setName',
            'creator' => 'setCreator',
            'updator' => 'setUpdator',
            'versionUri' => 'setVersionUri',
            'branchUri' => 'setBranchUri',
            'versionName' => 'setVersionName',
            'branchName' => 'setBranchName',
            'testConclusion' => 'setTestConclusion',
            'testConclusionDetails' => 'setTestConclusionDetails',
            'defectResolutionRate' => 'setDefectResolutionRate',
            'defectResolutionScore' => 'setDefectResolutionScore',
            'caseExecutionRate' => 'setCaseExecutionRate',
            'caseExecutionScore' => 'setCaseExecutionScore',
            'casePassRate' => 'setCasePassRate',
            'casePassScore' => 'setCasePassScore',
            'issuePassRate' => 'setIssuePassRate',
            'issuePassScore' => 'setIssuePassScore',
            'issueCoverageRate' => 'setIssueCoverageRate',
            'issueCoverageScore' => 'setIssueCoverageScore',
            'projectResidualDefectIndex' => 'setProjectResidualDefectIndex',
            'iteratorResidualDefectIndex' => 'setIteratorResidualDefectIndex',
            'caseAutomationDetails' => 'setCaseAutomationDetails',
            'caseValidityRatio' => 'setCaseValidityRatio',
            'issueDetails' => 'setIssueDetails',
            'caseDetails' => 'setCaseDetails',
            'defectDetailsBySeverity' => 'setDefectDetailsBySeverity',
            'defectDetailsByModule' => 'setDefectDetailsByModule',
            'casePassRateByTestType' => 'setCasePassRateByTestType',
            'testReportCustomReportDetail' => 'setTestReportCustomReportDetail',
            'createTime' => 'setCreateTime',
            'createTimestamp' => 'setCreateTimestamp',
            'creatorName' => 'setCreatorName',
            'updateTime' => 'setUpdateTime',
            'updateTimestamp' => 'setUpdateTimestamp',
            'updatorName' => 'setUpdatorName',
            'projectUuid' => 'setProjectUuid',
            'riskAnalysis' => 'setRiskAnalysis'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uri  测试报告Uri
    * name  测试报告名称
    * creator  创建人ID
    * updator  修改人ID
    * versionUri  测试计划Uri
    * branchUri  分支Uri
    * versionName  测试计划名称
    * branchName  分支名称
    * testConclusion  测试结论
    * testConclusionDetails  测试结论描述
    * defectResolutionRate  缺陷解决率
    * defectResolutionScore  缺陷解决分数
    * caseExecutionRate  用例执行率
    * caseExecutionScore  用例执行分数
    * casePassRate  用例通过率
    * casePassScore  用例通过分数
    * issuePassRate  需求通过率
    * issuePassScore  需求通过分数
    * issueCoverageRate  需求覆盖率
    * issueCoverageScore  需求覆盖分数
    * projectResidualDefectIndex  项目总遗留DI
    * iteratorResidualDefectIndex  计划新增DI
    * caseAutomationDetails  caseAutomationDetails
    * caseValidityRatio  用例有效性比例
    * issueDetails  issueDetails
    * caseDetails  用例通过情况
    * defectDetailsBySeverity  缺陷严重程度
    * defectDetailsByModule  缺陷按照模块分布情况
    * casePassRateByTestType  每个测试类型的用例通过率
    * testReportCustomReportDetail  测试报告自定义报告详情
    * createTime  创建时间
    * createTimestamp  创建时间戳
    * creatorName  创建人名
    * updateTime  修改时间
    * updateTimestamp  修改时间戳
    * updatorName  修改人名
    * projectUuid  项目ID
    * riskAnalysis  风险分析
    *
    * @var string[]
    */
    protected static $getters = [
            'uri' => 'getUri',
            'name' => 'getName',
            'creator' => 'getCreator',
            'updator' => 'getUpdator',
            'versionUri' => 'getVersionUri',
            'branchUri' => 'getBranchUri',
            'versionName' => 'getVersionName',
            'branchName' => 'getBranchName',
            'testConclusion' => 'getTestConclusion',
            'testConclusionDetails' => 'getTestConclusionDetails',
            'defectResolutionRate' => 'getDefectResolutionRate',
            'defectResolutionScore' => 'getDefectResolutionScore',
            'caseExecutionRate' => 'getCaseExecutionRate',
            'caseExecutionScore' => 'getCaseExecutionScore',
            'casePassRate' => 'getCasePassRate',
            'casePassScore' => 'getCasePassScore',
            'issuePassRate' => 'getIssuePassRate',
            'issuePassScore' => 'getIssuePassScore',
            'issueCoverageRate' => 'getIssueCoverageRate',
            'issueCoverageScore' => 'getIssueCoverageScore',
            'projectResidualDefectIndex' => 'getProjectResidualDefectIndex',
            'iteratorResidualDefectIndex' => 'getIteratorResidualDefectIndex',
            'caseAutomationDetails' => 'getCaseAutomationDetails',
            'caseValidityRatio' => 'getCaseValidityRatio',
            'issueDetails' => 'getIssueDetails',
            'caseDetails' => 'getCaseDetails',
            'defectDetailsBySeverity' => 'getDefectDetailsBySeverity',
            'defectDetailsByModule' => 'getDefectDetailsByModule',
            'casePassRateByTestType' => 'getCasePassRateByTestType',
            'testReportCustomReportDetail' => 'getTestReportCustomReportDetail',
            'createTime' => 'getCreateTime',
            'createTimestamp' => 'getCreateTimestamp',
            'creatorName' => 'getCreatorName',
            'updateTime' => 'getUpdateTime',
            'updateTimestamp' => 'getUpdateTimestamp',
            'updatorName' => 'getUpdatorName',
            'projectUuid' => 'getProjectUuid',
            'riskAnalysis' => 'getRiskAnalysis'
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
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['updator'] = isset($data['updator']) ? $data['updator'] : null;
        $this->container['versionUri'] = isset($data['versionUri']) ? $data['versionUri'] : null;
        $this->container['branchUri'] = isset($data['branchUri']) ? $data['branchUri'] : null;
        $this->container['versionName'] = isset($data['versionName']) ? $data['versionName'] : null;
        $this->container['branchName'] = isset($data['branchName']) ? $data['branchName'] : null;
        $this->container['testConclusion'] = isset($data['testConclusion']) ? $data['testConclusion'] : null;
        $this->container['testConclusionDetails'] = isset($data['testConclusionDetails']) ? $data['testConclusionDetails'] : null;
        $this->container['defectResolutionRate'] = isset($data['defectResolutionRate']) ? $data['defectResolutionRate'] : null;
        $this->container['defectResolutionScore'] = isset($data['defectResolutionScore']) ? $data['defectResolutionScore'] : null;
        $this->container['caseExecutionRate'] = isset($data['caseExecutionRate']) ? $data['caseExecutionRate'] : null;
        $this->container['caseExecutionScore'] = isset($data['caseExecutionScore']) ? $data['caseExecutionScore'] : null;
        $this->container['casePassRate'] = isset($data['casePassRate']) ? $data['casePassRate'] : null;
        $this->container['casePassScore'] = isset($data['casePassScore']) ? $data['casePassScore'] : null;
        $this->container['issuePassRate'] = isset($data['issuePassRate']) ? $data['issuePassRate'] : null;
        $this->container['issuePassScore'] = isset($data['issuePassScore']) ? $data['issuePassScore'] : null;
        $this->container['issueCoverageRate'] = isset($data['issueCoverageRate']) ? $data['issueCoverageRate'] : null;
        $this->container['issueCoverageScore'] = isset($data['issueCoverageScore']) ? $data['issueCoverageScore'] : null;
        $this->container['projectResidualDefectIndex'] = isset($data['projectResidualDefectIndex']) ? $data['projectResidualDefectIndex'] : null;
        $this->container['iteratorResidualDefectIndex'] = isset($data['iteratorResidualDefectIndex']) ? $data['iteratorResidualDefectIndex'] : null;
        $this->container['caseAutomationDetails'] = isset($data['caseAutomationDetails']) ? $data['caseAutomationDetails'] : null;
        $this->container['caseValidityRatio'] = isset($data['caseValidityRatio']) ? $data['caseValidityRatio'] : null;
        $this->container['issueDetails'] = isset($data['issueDetails']) ? $data['issueDetails'] : null;
        $this->container['caseDetails'] = isset($data['caseDetails']) ? $data['caseDetails'] : null;
        $this->container['defectDetailsBySeverity'] = isset($data['defectDetailsBySeverity']) ? $data['defectDetailsBySeverity'] : null;
        $this->container['defectDetailsByModule'] = isset($data['defectDetailsByModule']) ? $data['defectDetailsByModule'] : null;
        $this->container['casePassRateByTestType'] = isset($data['casePassRateByTestType']) ? $data['casePassRateByTestType'] : null;
        $this->container['testReportCustomReportDetail'] = isset($data['testReportCustomReportDetail']) ? $data['testReportCustomReportDetail'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['createTimestamp'] = isset($data['createTimestamp']) ? $data['createTimestamp'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['updateTimestamp'] = isset($data['updateTimestamp']) ? $data['updateTimestamp'] : null;
        $this->container['updatorName'] = isset($data['updatorName']) ? $data['updatorName'] : null;
        $this->container['projectUuid'] = isset($data['projectUuid']) ? $data['projectUuid'] : null;
        $this->container['riskAnalysis'] = isset($data['riskAnalysis']) ? $data['riskAnalysis'] : null;
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
    *  测试报告Uri
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
    * @param string|null $uri 测试报告Uri
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
    *  测试报告名称
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
    * @param string|null $name 测试报告名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets creator
    *  创建人ID
    *
    * @return string|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param string|null $creator 创建人ID
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets updator
    *  修改人ID
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
    * @param string|null $updator 修改人ID
    *
    * @return $this
    */
    public function setUpdator($updator)
    {
        $this->container['updator'] = $updator;
        return $this;
    }

    /**
    * Gets versionUri
    *  测试计划Uri
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
    * @param string|null $versionUri 测试计划Uri
    *
    * @return $this
    */
    public function setVersionUri($versionUri)
    {
        $this->container['versionUri'] = $versionUri;
        return $this;
    }

    /**
    * Gets branchUri
    *  分支Uri
    *
    * @return string|null
    */
    public function getBranchUri()
    {
        return $this->container['branchUri'];
    }

    /**
    * Sets branchUri
    *
    * @param string|null $branchUri 分支Uri
    *
    * @return $this
    */
    public function setBranchUri($branchUri)
    {
        $this->container['branchUri'] = $branchUri;
        return $this;
    }

    /**
    * Gets versionName
    *  测试计划名称
    *
    * @return string|null
    */
    public function getVersionName()
    {
        return $this->container['versionName'];
    }

    /**
    * Sets versionName
    *
    * @param string|null $versionName 测试计划名称
    *
    * @return $this
    */
    public function setVersionName($versionName)
    {
        $this->container['versionName'] = $versionName;
        return $this;
    }

    /**
    * Gets branchName
    *  分支名称
    *
    * @return string|null
    */
    public function getBranchName()
    {
        return $this->container['branchName'];
    }

    /**
    * Sets branchName
    *
    * @param string|null $branchName 分支名称
    *
    * @return $this
    */
    public function setBranchName($branchName)
    {
        $this->container['branchName'] = $branchName;
        return $this;
    }

    /**
    * Gets testConclusion
    *  测试结论
    *
    * @return string|null
    */
    public function getTestConclusion()
    {
        return $this->container['testConclusion'];
    }

    /**
    * Sets testConclusion
    *
    * @param string|null $testConclusion 测试结论
    *
    * @return $this
    */
    public function setTestConclusion($testConclusion)
    {
        $this->container['testConclusion'] = $testConclusion;
        return $this;
    }

    /**
    * Gets testConclusionDetails
    *  测试结论描述
    *
    * @return string|null
    */
    public function getTestConclusionDetails()
    {
        return $this->container['testConclusionDetails'];
    }

    /**
    * Sets testConclusionDetails
    *
    * @param string|null $testConclusionDetails 测试结论描述
    *
    * @return $this
    */
    public function setTestConclusionDetails($testConclusionDetails)
    {
        $this->container['testConclusionDetails'] = $testConclusionDetails;
        return $this;
    }

    /**
    * Gets defectResolutionRate
    *  缺陷解决率
    *
    * @return string|null
    */
    public function getDefectResolutionRate()
    {
        return $this->container['defectResolutionRate'];
    }

    /**
    * Sets defectResolutionRate
    *
    * @param string|null $defectResolutionRate 缺陷解决率
    *
    * @return $this
    */
    public function setDefectResolutionRate($defectResolutionRate)
    {
        $this->container['defectResolutionRate'] = $defectResolutionRate;
        return $this;
    }

    /**
    * Gets defectResolutionScore
    *  缺陷解决分数
    *
    * @return string|null
    */
    public function getDefectResolutionScore()
    {
        return $this->container['defectResolutionScore'];
    }

    /**
    * Sets defectResolutionScore
    *
    * @param string|null $defectResolutionScore 缺陷解决分数
    *
    * @return $this
    */
    public function setDefectResolutionScore($defectResolutionScore)
    {
        $this->container['defectResolutionScore'] = $defectResolutionScore;
        return $this;
    }

    /**
    * Gets caseExecutionRate
    *  用例执行率
    *
    * @return string|null
    */
    public function getCaseExecutionRate()
    {
        return $this->container['caseExecutionRate'];
    }

    /**
    * Sets caseExecutionRate
    *
    * @param string|null $caseExecutionRate 用例执行率
    *
    * @return $this
    */
    public function setCaseExecutionRate($caseExecutionRate)
    {
        $this->container['caseExecutionRate'] = $caseExecutionRate;
        return $this;
    }

    /**
    * Gets caseExecutionScore
    *  用例执行分数
    *
    * @return string|null
    */
    public function getCaseExecutionScore()
    {
        return $this->container['caseExecutionScore'];
    }

    /**
    * Sets caseExecutionScore
    *
    * @param string|null $caseExecutionScore 用例执行分数
    *
    * @return $this
    */
    public function setCaseExecutionScore($caseExecutionScore)
    {
        $this->container['caseExecutionScore'] = $caseExecutionScore;
        return $this;
    }

    /**
    * Gets casePassRate
    *  用例通过率
    *
    * @return string|null
    */
    public function getCasePassRate()
    {
        return $this->container['casePassRate'];
    }

    /**
    * Sets casePassRate
    *
    * @param string|null $casePassRate 用例通过率
    *
    * @return $this
    */
    public function setCasePassRate($casePassRate)
    {
        $this->container['casePassRate'] = $casePassRate;
        return $this;
    }

    /**
    * Gets casePassScore
    *  用例通过分数
    *
    * @return string|null
    */
    public function getCasePassScore()
    {
        return $this->container['casePassScore'];
    }

    /**
    * Sets casePassScore
    *
    * @param string|null $casePassScore 用例通过分数
    *
    * @return $this
    */
    public function setCasePassScore($casePassScore)
    {
        $this->container['casePassScore'] = $casePassScore;
        return $this;
    }

    /**
    * Gets issuePassRate
    *  需求通过率
    *
    * @return string|null
    */
    public function getIssuePassRate()
    {
        return $this->container['issuePassRate'];
    }

    /**
    * Sets issuePassRate
    *
    * @param string|null $issuePassRate 需求通过率
    *
    * @return $this
    */
    public function setIssuePassRate($issuePassRate)
    {
        $this->container['issuePassRate'] = $issuePassRate;
        return $this;
    }

    /**
    * Gets issuePassScore
    *  需求通过分数
    *
    * @return string|null
    */
    public function getIssuePassScore()
    {
        return $this->container['issuePassScore'];
    }

    /**
    * Sets issuePassScore
    *
    * @param string|null $issuePassScore 需求通过分数
    *
    * @return $this
    */
    public function setIssuePassScore($issuePassScore)
    {
        $this->container['issuePassScore'] = $issuePassScore;
        return $this;
    }

    /**
    * Gets issueCoverageRate
    *  需求覆盖率
    *
    * @return string|null
    */
    public function getIssueCoverageRate()
    {
        return $this->container['issueCoverageRate'];
    }

    /**
    * Sets issueCoverageRate
    *
    * @param string|null $issueCoverageRate 需求覆盖率
    *
    * @return $this
    */
    public function setIssueCoverageRate($issueCoverageRate)
    {
        $this->container['issueCoverageRate'] = $issueCoverageRate;
        return $this;
    }

    /**
    * Gets issueCoverageScore
    *  需求覆盖分数
    *
    * @return string|null
    */
    public function getIssueCoverageScore()
    {
        return $this->container['issueCoverageScore'];
    }

    /**
    * Sets issueCoverageScore
    *
    * @param string|null $issueCoverageScore 需求覆盖分数
    *
    * @return $this
    */
    public function setIssueCoverageScore($issueCoverageScore)
    {
        $this->container['issueCoverageScore'] = $issueCoverageScore;
        return $this;
    }

    /**
    * Gets projectResidualDefectIndex
    *  项目总遗留DI
    *
    * @return string|null
    */
    public function getProjectResidualDefectIndex()
    {
        return $this->container['projectResidualDefectIndex'];
    }

    /**
    * Sets projectResidualDefectIndex
    *
    * @param string|null $projectResidualDefectIndex 项目总遗留DI
    *
    * @return $this
    */
    public function setProjectResidualDefectIndex($projectResidualDefectIndex)
    {
        $this->container['projectResidualDefectIndex'] = $projectResidualDefectIndex;
        return $this;
    }

    /**
    * Gets iteratorResidualDefectIndex
    *  计划新增DI
    *
    * @return string|null
    */
    public function getIteratorResidualDefectIndex()
    {
        return $this->container['iteratorResidualDefectIndex'];
    }

    /**
    * Sets iteratorResidualDefectIndex
    *
    * @param string|null $iteratorResidualDefectIndex 计划新增DI
    *
    * @return $this
    */
    public function setIteratorResidualDefectIndex($iteratorResidualDefectIndex)
    {
        $this->container['iteratorResidualDefectIndex'] = $iteratorResidualDefectIndex;
        return $this;
    }

    /**
    * Gets caseAutomationDetails
    *  caseAutomationDetails
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\CaseAutomationDetailsVo|null
    */
    public function getCaseAutomationDetails()
    {
        return $this->container['caseAutomationDetails'];
    }

    /**
    * Sets caseAutomationDetails
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\CaseAutomationDetailsVo|null $caseAutomationDetails caseAutomationDetails
    *
    * @return $this
    */
    public function setCaseAutomationDetails($caseAutomationDetails)
    {
        $this->container['caseAutomationDetails'] = $caseAutomationDetails;
        return $this;
    }

    /**
    * Gets caseValidityRatio
    *  用例有效性比例
    *
    * @return string|null
    */
    public function getCaseValidityRatio()
    {
        return $this->container['caseValidityRatio'];
    }

    /**
    * Sets caseValidityRatio
    *
    * @param string|null $caseValidityRatio 用例有效性比例
    *
    * @return $this
    */
    public function setCaseValidityRatio($caseValidityRatio)
    {
        $this->container['caseValidityRatio'] = $caseValidityRatio;
        return $this;
    }

    /**
    * Gets issueDetails
    *  issueDetails
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\IssuePassDetailsVo|null
    */
    public function getIssueDetails()
    {
        return $this->container['issueDetails'];
    }

    /**
    * Sets issueDetails
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\IssuePassDetailsVo|null $issueDetails issueDetails
    *
    * @return $this
    */
    public function setIssueDetails($issueDetails)
    {
        $this->container['issueDetails'] = $issueDetails;
        return $this;
    }

    /**
    * Gets caseDetails
    *  用例通过情况
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndValueVo[]|null
    */
    public function getCaseDetails()
    {
        return $this->container['caseDetails'];
    }

    /**
    * Sets caseDetails
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndValueVo[]|null $caseDetails 用例通过情况
    *
    * @return $this
    */
    public function setCaseDetails($caseDetails)
    {
        $this->container['caseDetails'] = $caseDetails;
        return $this;
    }

    /**
    * Gets defectDetailsBySeverity
    *  缺陷严重程度
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\IdAndNameAndValueVo[]|null
    */
    public function getDefectDetailsBySeverity()
    {
        return $this->container['defectDetailsBySeverity'];
    }

    /**
    * Sets defectDetailsBySeverity
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\IdAndNameAndValueVo[]|null $defectDetailsBySeverity 缺陷严重程度
    *
    * @return $this
    */
    public function setDefectDetailsBySeverity($defectDetailsBySeverity)
    {
        $this->container['defectDetailsBySeverity'] = $defectDetailsBySeverity;
        return $this;
    }

    /**
    * Gets defectDetailsByModule
    *  缺陷按照模块分布情况
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\IdAndNameAndValueVo[]|null
    */
    public function getDefectDetailsByModule()
    {
        return $this->container['defectDetailsByModule'];
    }

    /**
    * Sets defectDetailsByModule
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\IdAndNameAndValueVo[]|null $defectDetailsByModule 缺陷按照模块分布情况
    *
    * @return $this
    */
    public function setDefectDetailsByModule($defectDetailsByModule)
    {
        $this->container['defectDetailsByModule'] = $defectDetailsByModule;
        return $this;
    }

    /**
    * Gets casePassRateByTestType
    *  每个测试类型的用例通过率
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\DetailTestTypeCasePassRateVo[]|null
    */
    public function getCasePassRateByTestType()
    {
        return $this->container['casePassRateByTestType'];
    }

    /**
    * Sets casePassRateByTestType
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\DetailTestTypeCasePassRateVo[]|null $casePassRateByTestType 每个测试类型的用例通过率
    *
    * @return $this
    */
    public function setCasePassRateByTestType($casePassRateByTestType)
    {
        $this->container['casePassRateByTestType'] = $casePassRateByTestType;
        return $this;
    }

    /**
    * Gets testReportCustomReportDetail
    *  测试报告自定义报告详情
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\CustomReportListVo[]|null
    */
    public function getTestReportCustomReportDetail()
    {
        return $this->container['testReportCustomReportDetail'];
    }

    /**
    * Sets testReportCustomReportDetail
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\CustomReportListVo[]|null $testReportCustomReportDetail 测试报告自定义报告详情
    *
    * @return $this
    */
    public function setTestReportCustomReportDetail($testReportCustomReportDetail)
    {
        $this->container['testReportCustomReportDetail'] = $testReportCustomReportDetail;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets createTimestamp
    *  创建时间戳
    *
    * @return int|null
    */
    public function getCreateTimestamp()
    {
        return $this->container['createTimestamp'];
    }

    /**
    * Sets createTimestamp
    *
    * @param int|null $createTimestamp 创建时间戳
    *
    * @return $this
    */
    public function setCreateTimestamp($createTimestamp)
    {
        $this->container['createTimestamp'] = $createTimestamp;
        return $this;
    }

    /**
    * Gets creatorName
    *  创建人名
    *
    * @return string|null
    */
    public function getCreatorName()
    {
        return $this->container['creatorName'];
    }

    /**
    * Sets creatorName
    *
    * @param string|null $creatorName 创建人名
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets updateTime
    *  修改时间
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
    * @param \DateTime|null $updateTime 修改时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets updateTimestamp
    *  修改时间戳
    *
    * @return int|null
    */
    public function getUpdateTimestamp()
    {
        return $this->container['updateTimestamp'];
    }

    /**
    * Sets updateTimestamp
    *
    * @param int|null $updateTimestamp 修改时间戳
    *
    * @return $this
    */
    public function setUpdateTimestamp($updateTimestamp)
    {
        $this->container['updateTimestamp'] = $updateTimestamp;
        return $this;
    }

    /**
    * Gets updatorName
    *  修改人名
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
    * @param string|null $updatorName 修改人名
    *
    * @return $this
    */
    public function setUpdatorName($updatorName)
    {
        $this->container['updatorName'] = $updatorName;
        return $this;
    }

    /**
    * Gets projectUuid
    *  项目ID
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
    * @param string|null $projectUuid 项目ID
    *
    * @return $this
    */
    public function setProjectUuid($projectUuid)
    {
        $this->container['projectUuid'] = $projectUuid;
        return $this;
    }

    /**
    * Gets riskAnalysis
    *  风险分析
    *
    * @return string|null
    */
    public function getRiskAnalysis()
    {
        return $this->container['riskAnalysis'];
    }

    /**
    * Sets riskAnalysis
    *
    * @param string|null $riskAnalysis 风险分析
    *
    * @return $this
    */
    public function setRiskAnalysis($riskAnalysis)
    {
        $this->container['riskAnalysis'] = $riskAnalysis;
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

