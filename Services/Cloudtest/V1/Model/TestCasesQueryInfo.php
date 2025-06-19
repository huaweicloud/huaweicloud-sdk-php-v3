<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TestCasesQueryInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TestCasesQueryInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keyword  关键字查询，用例名或编号
    * exeplatforms  执行平台
    * own  是否是我的
    * useOffset  useOffset
    * versionUri  版本URI
    * caseUris  用例URI集合
    * ownerIds  处理者ID集合
    * statusCodes  状态Code集合
    * rankIds  用例等级ID集合
    * moduleIds  模块ID集合
    * issueId  需求编号
    * creatorIds  创建者ID集合
    * resultCodes  结果Code集合
    * iterationIds  归属迭代ID集合
    * createStartTime  创建开始时间
    * createEndTime  创建结束时间
    * associatedIssue  是否关联需求（null：不限，false：未关联，true：已关联）
    * associatedDefects  是否关联缺陷（null：不限，false：未关联，true：已关联）
    * includeSubIssue  是否查询子需求关联的用例，默认true
    * includeSubFeature  是否查询子目录的用例，默认true
    * labelIds  标签ID集合
    * executeStartTime  执行开始时间
    * executeEndTime  执行结束时间
    * executorIds  执行者ID集合
    * testTypes  类型
    * isKeyword  是否组合关键字
    * issueTreeSearch  是否是需求树点击的查询关联用例
    * serviceType  服务类型
    * serviceTypes  服务类型集合
    * stageType  阶段过程（2：测试设计，3：测试执行，4：质量报告）
    * featureUri  目录URI
    * sortField  排序字段
    * sortType  排序方式
    * pageNo  当前页数
    * pageSize  每页条数
    * caseType  用例类型
    * customFieldInfo  用例自定义字段信息
    * taskUri  测试套uri
    * associateIssueDetail  是否返回需求具体信息（返回需求名称，需求id）
    * notAssignTask  该字段为false,则查询全量用例，为true表示查询未分配测试套的用例
    * testDesigns  是否来自测试设计（null或者[true, false]：不限，[true]：来自测试设计，[false]：否来自测试设计）
    * reviewStatus  用例评审状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keyword' => 'string',
            'exeplatforms' => 'string[]',
            'own' => 'bool',
            'useOffset' => 'bool',
            'versionUri' => 'string',
            'caseUris' => 'string[]',
            'ownerIds' => 'string[]',
            'statusCodes' => 'string[]',
            'rankIds' => 'string[]',
            'moduleIds' => 'string[]',
            'issueId' => 'string',
            'creatorIds' => 'string[]',
            'resultCodes' => 'string[]',
            'iterationIds' => 'string[]',
            'createStartTime' => 'string',
            'createEndTime' => 'string',
            'associatedIssue' => 'bool',
            'associatedDefects' => 'bool',
            'includeSubIssue' => 'bool',
            'includeSubFeature' => 'bool',
            'labelIds' => 'string[]',
            'executeStartTime' => 'string',
            'executeEndTime' => 'string',
            'executorIds' => 'string[]',
            'testTypes' => 'string[]',
            'isKeyword' => 'bool',
            'issueTreeSearch' => 'bool',
            'serviceType' => 'int',
            'serviceTypes' => 'int[]',
            'stageType' => 'int',
            'featureUri' => 'string',
            'sortField' => 'string',
            'sortType' => 'string',
            'pageNo' => 'int',
            'pageSize' => 'int',
            'caseType' => 'int',
            'customFieldInfo' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\QueryCustomFieldsInfo[]',
            'taskUri' => 'string',
            'associateIssueDetail' => 'bool',
            'notAssignTask' => 'bool',
            'testDesigns' => 'bool[]',
            'reviewStatus' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keyword  关键字查询，用例名或编号
    * exeplatforms  执行平台
    * own  是否是我的
    * useOffset  useOffset
    * versionUri  版本URI
    * caseUris  用例URI集合
    * ownerIds  处理者ID集合
    * statusCodes  状态Code集合
    * rankIds  用例等级ID集合
    * moduleIds  模块ID集合
    * issueId  需求编号
    * creatorIds  创建者ID集合
    * resultCodes  结果Code集合
    * iterationIds  归属迭代ID集合
    * createStartTime  创建开始时间
    * createEndTime  创建结束时间
    * associatedIssue  是否关联需求（null：不限，false：未关联，true：已关联）
    * associatedDefects  是否关联缺陷（null：不限，false：未关联，true：已关联）
    * includeSubIssue  是否查询子需求关联的用例，默认true
    * includeSubFeature  是否查询子目录的用例，默认true
    * labelIds  标签ID集合
    * executeStartTime  执行开始时间
    * executeEndTime  执行结束时间
    * executorIds  执行者ID集合
    * testTypes  类型
    * isKeyword  是否组合关键字
    * issueTreeSearch  是否是需求树点击的查询关联用例
    * serviceType  服务类型
    * serviceTypes  服务类型集合
    * stageType  阶段过程（2：测试设计，3：测试执行，4：质量报告）
    * featureUri  目录URI
    * sortField  排序字段
    * sortType  排序方式
    * pageNo  当前页数
    * pageSize  每页条数
    * caseType  用例类型
    * customFieldInfo  用例自定义字段信息
    * taskUri  测试套uri
    * associateIssueDetail  是否返回需求具体信息（返回需求名称，需求id）
    * notAssignTask  该字段为false,则查询全量用例，为true表示查询未分配测试套的用例
    * testDesigns  是否来自测试设计（null或者[true, false]：不限，[true]：来自测试设计，[false]：否来自测试设计）
    * reviewStatus  用例评审状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keyword' => null,
        'exeplatforms' => null,
        'own' => null,
        'useOffset' => null,
        'versionUri' => null,
        'caseUris' => null,
        'ownerIds' => null,
        'statusCodes' => null,
        'rankIds' => null,
        'moduleIds' => null,
        'issueId' => null,
        'creatorIds' => null,
        'resultCodes' => null,
        'iterationIds' => null,
        'createStartTime' => null,
        'createEndTime' => null,
        'associatedIssue' => null,
        'associatedDefects' => null,
        'includeSubIssue' => null,
        'includeSubFeature' => null,
        'labelIds' => null,
        'executeStartTime' => null,
        'executeEndTime' => null,
        'executorIds' => null,
        'testTypes' => null,
        'isKeyword' => null,
        'issueTreeSearch' => null,
        'serviceType' => 'int32',
        'serviceTypes' => 'int32',
        'stageType' => 'int32',
        'featureUri' => null,
        'sortField' => null,
        'sortType' => null,
        'pageNo' => 'int32',
        'pageSize' => 'int32',
        'caseType' => 'int32',
        'customFieldInfo' => null,
        'taskUri' => null,
        'associateIssueDetail' => null,
        'notAssignTask' => null,
        'testDesigns' => null,
        'reviewStatus' => 'int32'
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
    * keyword  关键字查询，用例名或编号
    * exeplatforms  执行平台
    * own  是否是我的
    * useOffset  useOffset
    * versionUri  版本URI
    * caseUris  用例URI集合
    * ownerIds  处理者ID集合
    * statusCodes  状态Code集合
    * rankIds  用例等级ID集合
    * moduleIds  模块ID集合
    * issueId  需求编号
    * creatorIds  创建者ID集合
    * resultCodes  结果Code集合
    * iterationIds  归属迭代ID集合
    * createStartTime  创建开始时间
    * createEndTime  创建结束时间
    * associatedIssue  是否关联需求（null：不限，false：未关联，true：已关联）
    * associatedDefects  是否关联缺陷（null：不限，false：未关联，true：已关联）
    * includeSubIssue  是否查询子需求关联的用例，默认true
    * includeSubFeature  是否查询子目录的用例，默认true
    * labelIds  标签ID集合
    * executeStartTime  执行开始时间
    * executeEndTime  执行结束时间
    * executorIds  执行者ID集合
    * testTypes  类型
    * isKeyword  是否组合关键字
    * issueTreeSearch  是否是需求树点击的查询关联用例
    * serviceType  服务类型
    * serviceTypes  服务类型集合
    * stageType  阶段过程（2：测试设计，3：测试执行，4：质量报告）
    * featureUri  目录URI
    * sortField  排序字段
    * sortType  排序方式
    * pageNo  当前页数
    * pageSize  每页条数
    * caseType  用例类型
    * customFieldInfo  用例自定义字段信息
    * taskUri  测试套uri
    * associateIssueDetail  是否返回需求具体信息（返回需求名称，需求id）
    * notAssignTask  该字段为false,则查询全量用例，为true表示查询未分配测试套的用例
    * testDesigns  是否来自测试设计（null或者[true, false]：不限，[true]：来自测试设计，[false]：否来自测试设计）
    * reviewStatus  用例评审状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keyword' => 'keyword',
            'exeplatforms' => 'exeplatforms',
            'own' => 'own',
            'useOffset' => 'useOffset',
            'versionUri' => 'version_uri',
            'caseUris' => 'case_uris',
            'ownerIds' => 'owner_ids',
            'statusCodes' => 'status_codes',
            'rankIds' => 'rank_ids',
            'moduleIds' => 'module_ids',
            'issueId' => 'issue_id',
            'creatorIds' => 'creator_ids',
            'resultCodes' => 'result_codes',
            'iterationIds' => 'iteration_ids',
            'createStartTime' => 'create_start_time',
            'createEndTime' => 'create_end_time',
            'associatedIssue' => 'associated_issue',
            'associatedDefects' => 'associated_defects',
            'includeSubIssue' => 'include_sub_issue',
            'includeSubFeature' => 'include_sub_feature',
            'labelIds' => 'label_ids',
            'executeStartTime' => 'execute_start_time',
            'executeEndTime' => 'execute_end_time',
            'executorIds' => 'executor_ids',
            'testTypes' => 'test_types',
            'isKeyword' => 'is_keyword',
            'issueTreeSearch' => 'issue_tree_search',
            'serviceType' => 'service_type',
            'serviceTypes' => 'service_types',
            'stageType' => 'stage_type',
            'featureUri' => 'feature_uri',
            'sortField' => 'sort_field',
            'sortType' => 'sort_type',
            'pageNo' => 'page_no',
            'pageSize' => 'page_size',
            'caseType' => 'case_type',
            'customFieldInfo' => 'custom_field_info',
            'taskUri' => 'task_uri',
            'associateIssueDetail' => 'associate_issue_detail',
            'notAssignTask' => 'not_assign_task',
            'testDesigns' => 'test_designs',
            'reviewStatus' => 'review_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keyword  关键字查询，用例名或编号
    * exeplatforms  执行平台
    * own  是否是我的
    * useOffset  useOffset
    * versionUri  版本URI
    * caseUris  用例URI集合
    * ownerIds  处理者ID集合
    * statusCodes  状态Code集合
    * rankIds  用例等级ID集合
    * moduleIds  模块ID集合
    * issueId  需求编号
    * creatorIds  创建者ID集合
    * resultCodes  结果Code集合
    * iterationIds  归属迭代ID集合
    * createStartTime  创建开始时间
    * createEndTime  创建结束时间
    * associatedIssue  是否关联需求（null：不限，false：未关联，true：已关联）
    * associatedDefects  是否关联缺陷（null：不限，false：未关联，true：已关联）
    * includeSubIssue  是否查询子需求关联的用例，默认true
    * includeSubFeature  是否查询子目录的用例，默认true
    * labelIds  标签ID集合
    * executeStartTime  执行开始时间
    * executeEndTime  执行结束时间
    * executorIds  执行者ID集合
    * testTypes  类型
    * isKeyword  是否组合关键字
    * issueTreeSearch  是否是需求树点击的查询关联用例
    * serviceType  服务类型
    * serviceTypes  服务类型集合
    * stageType  阶段过程（2：测试设计，3：测试执行，4：质量报告）
    * featureUri  目录URI
    * sortField  排序字段
    * sortType  排序方式
    * pageNo  当前页数
    * pageSize  每页条数
    * caseType  用例类型
    * customFieldInfo  用例自定义字段信息
    * taskUri  测试套uri
    * associateIssueDetail  是否返回需求具体信息（返回需求名称，需求id）
    * notAssignTask  该字段为false,则查询全量用例，为true表示查询未分配测试套的用例
    * testDesigns  是否来自测试设计（null或者[true, false]：不限，[true]：来自测试设计，[false]：否来自测试设计）
    * reviewStatus  用例评审状态
    *
    * @var string[]
    */
    protected static $setters = [
            'keyword' => 'setKeyword',
            'exeplatforms' => 'setExeplatforms',
            'own' => 'setOwn',
            'useOffset' => 'setUseOffset',
            'versionUri' => 'setVersionUri',
            'caseUris' => 'setCaseUris',
            'ownerIds' => 'setOwnerIds',
            'statusCodes' => 'setStatusCodes',
            'rankIds' => 'setRankIds',
            'moduleIds' => 'setModuleIds',
            'issueId' => 'setIssueId',
            'creatorIds' => 'setCreatorIds',
            'resultCodes' => 'setResultCodes',
            'iterationIds' => 'setIterationIds',
            'createStartTime' => 'setCreateStartTime',
            'createEndTime' => 'setCreateEndTime',
            'associatedIssue' => 'setAssociatedIssue',
            'associatedDefects' => 'setAssociatedDefects',
            'includeSubIssue' => 'setIncludeSubIssue',
            'includeSubFeature' => 'setIncludeSubFeature',
            'labelIds' => 'setLabelIds',
            'executeStartTime' => 'setExecuteStartTime',
            'executeEndTime' => 'setExecuteEndTime',
            'executorIds' => 'setExecutorIds',
            'testTypes' => 'setTestTypes',
            'isKeyword' => 'setIsKeyword',
            'issueTreeSearch' => 'setIssueTreeSearch',
            'serviceType' => 'setServiceType',
            'serviceTypes' => 'setServiceTypes',
            'stageType' => 'setStageType',
            'featureUri' => 'setFeatureUri',
            'sortField' => 'setSortField',
            'sortType' => 'setSortType',
            'pageNo' => 'setPageNo',
            'pageSize' => 'setPageSize',
            'caseType' => 'setCaseType',
            'customFieldInfo' => 'setCustomFieldInfo',
            'taskUri' => 'setTaskUri',
            'associateIssueDetail' => 'setAssociateIssueDetail',
            'notAssignTask' => 'setNotAssignTask',
            'testDesigns' => 'setTestDesigns',
            'reviewStatus' => 'setReviewStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keyword  关键字查询，用例名或编号
    * exeplatforms  执行平台
    * own  是否是我的
    * useOffset  useOffset
    * versionUri  版本URI
    * caseUris  用例URI集合
    * ownerIds  处理者ID集合
    * statusCodes  状态Code集合
    * rankIds  用例等级ID集合
    * moduleIds  模块ID集合
    * issueId  需求编号
    * creatorIds  创建者ID集合
    * resultCodes  结果Code集合
    * iterationIds  归属迭代ID集合
    * createStartTime  创建开始时间
    * createEndTime  创建结束时间
    * associatedIssue  是否关联需求（null：不限，false：未关联，true：已关联）
    * associatedDefects  是否关联缺陷（null：不限，false：未关联，true：已关联）
    * includeSubIssue  是否查询子需求关联的用例，默认true
    * includeSubFeature  是否查询子目录的用例，默认true
    * labelIds  标签ID集合
    * executeStartTime  执行开始时间
    * executeEndTime  执行结束时间
    * executorIds  执行者ID集合
    * testTypes  类型
    * isKeyword  是否组合关键字
    * issueTreeSearch  是否是需求树点击的查询关联用例
    * serviceType  服务类型
    * serviceTypes  服务类型集合
    * stageType  阶段过程（2：测试设计，3：测试执行，4：质量报告）
    * featureUri  目录URI
    * sortField  排序字段
    * sortType  排序方式
    * pageNo  当前页数
    * pageSize  每页条数
    * caseType  用例类型
    * customFieldInfo  用例自定义字段信息
    * taskUri  测试套uri
    * associateIssueDetail  是否返回需求具体信息（返回需求名称，需求id）
    * notAssignTask  该字段为false,则查询全量用例，为true表示查询未分配测试套的用例
    * testDesigns  是否来自测试设计（null或者[true, false]：不限，[true]：来自测试设计，[false]：否来自测试设计）
    * reviewStatus  用例评审状态
    *
    * @var string[]
    */
    protected static $getters = [
            'keyword' => 'getKeyword',
            'exeplatforms' => 'getExeplatforms',
            'own' => 'getOwn',
            'useOffset' => 'getUseOffset',
            'versionUri' => 'getVersionUri',
            'caseUris' => 'getCaseUris',
            'ownerIds' => 'getOwnerIds',
            'statusCodes' => 'getStatusCodes',
            'rankIds' => 'getRankIds',
            'moduleIds' => 'getModuleIds',
            'issueId' => 'getIssueId',
            'creatorIds' => 'getCreatorIds',
            'resultCodes' => 'getResultCodes',
            'iterationIds' => 'getIterationIds',
            'createStartTime' => 'getCreateStartTime',
            'createEndTime' => 'getCreateEndTime',
            'associatedIssue' => 'getAssociatedIssue',
            'associatedDefects' => 'getAssociatedDefects',
            'includeSubIssue' => 'getIncludeSubIssue',
            'includeSubFeature' => 'getIncludeSubFeature',
            'labelIds' => 'getLabelIds',
            'executeStartTime' => 'getExecuteStartTime',
            'executeEndTime' => 'getExecuteEndTime',
            'executorIds' => 'getExecutorIds',
            'testTypes' => 'getTestTypes',
            'isKeyword' => 'getIsKeyword',
            'issueTreeSearch' => 'getIssueTreeSearch',
            'serviceType' => 'getServiceType',
            'serviceTypes' => 'getServiceTypes',
            'stageType' => 'getStageType',
            'featureUri' => 'getFeatureUri',
            'sortField' => 'getSortField',
            'sortType' => 'getSortType',
            'pageNo' => 'getPageNo',
            'pageSize' => 'getPageSize',
            'caseType' => 'getCaseType',
            'customFieldInfo' => 'getCustomFieldInfo',
            'taskUri' => 'getTaskUri',
            'associateIssueDetail' => 'getAssociateIssueDetail',
            'notAssignTask' => 'getNotAssignTask',
            'testDesigns' => 'getTestDesigns',
            'reviewStatus' => 'getReviewStatus'
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
        $this->container['keyword'] = isset($data['keyword']) ? $data['keyword'] : null;
        $this->container['exeplatforms'] = isset($data['exeplatforms']) ? $data['exeplatforms'] : null;
        $this->container['own'] = isset($data['own']) ? $data['own'] : null;
        $this->container['useOffset'] = isset($data['useOffset']) ? $data['useOffset'] : null;
        $this->container['versionUri'] = isset($data['versionUri']) ? $data['versionUri'] : null;
        $this->container['caseUris'] = isset($data['caseUris']) ? $data['caseUris'] : null;
        $this->container['ownerIds'] = isset($data['ownerIds']) ? $data['ownerIds'] : null;
        $this->container['statusCodes'] = isset($data['statusCodes']) ? $data['statusCodes'] : null;
        $this->container['rankIds'] = isset($data['rankIds']) ? $data['rankIds'] : null;
        $this->container['moduleIds'] = isset($data['moduleIds']) ? $data['moduleIds'] : null;
        $this->container['issueId'] = isset($data['issueId']) ? $data['issueId'] : null;
        $this->container['creatorIds'] = isset($data['creatorIds']) ? $data['creatorIds'] : null;
        $this->container['resultCodes'] = isset($data['resultCodes']) ? $data['resultCodes'] : null;
        $this->container['iterationIds'] = isset($data['iterationIds']) ? $data['iterationIds'] : null;
        $this->container['createStartTime'] = isset($data['createStartTime']) ? $data['createStartTime'] : null;
        $this->container['createEndTime'] = isset($data['createEndTime']) ? $data['createEndTime'] : null;
        $this->container['associatedIssue'] = isset($data['associatedIssue']) ? $data['associatedIssue'] : null;
        $this->container['associatedDefects'] = isset($data['associatedDefects']) ? $data['associatedDefects'] : null;
        $this->container['includeSubIssue'] = isset($data['includeSubIssue']) ? $data['includeSubIssue'] : null;
        $this->container['includeSubFeature'] = isset($data['includeSubFeature']) ? $data['includeSubFeature'] : null;
        $this->container['labelIds'] = isset($data['labelIds']) ? $data['labelIds'] : null;
        $this->container['executeStartTime'] = isset($data['executeStartTime']) ? $data['executeStartTime'] : null;
        $this->container['executeEndTime'] = isset($data['executeEndTime']) ? $data['executeEndTime'] : null;
        $this->container['executorIds'] = isset($data['executorIds']) ? $data['executorIds'] : null;
        $this->container['testTypes'] = isset($data['testTypes']) ? $data['testTypes'] : null;
        $this->container['isKeyword'] = isset($data['isKeyword']) ? $data['isKeyword'] : null;
        $this->container['issueTreeSearch'] = isset($data['issueTreeSearch']) ? $data['issueTreeSearch'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['serviceTypes'] = isset($data['serviceTypes']) ? $data['serviceTypes'] : null;
        $this->container['stageType'] = isset($data['stageType']) ? $data['stageType'] : null;
        $this->container['featureUri'] = isset($data['featureUri']) ? $data['featureUri'] : null;
        $this->container['sortField'] = isset($data['sortField']) ? $data['sortField'] : null;
        $this->container['sortType'] = isset($data['sortType']) ? $data['sortType'] : null;
        $this->container['pageNo'] = isset($data['pageNo']) ? $data['pageNo'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['caseType'] = isset($data['caseType']) ? $data['caseType'] : null;
        $this->container['customFieldInfo'] = isset($data['customFieldInfo']) ? $data['customFieldInfo'] : null;
        $this->container['taskUri'] = isset($data['taskUri']) ? $data['taskUri'] : null;
        $this->container['associateIssueDetail'] = isset($data['associateIssueDetail']) ? $data['associateIssueDetail'] : null;
        $this->container['notAssignTask'] = isset($data['notAssignTask']) ? $data['notAssignTask'] : null;
        $this->container['testDesigns'] = isset($data['testDesigns']) ? $data['testDesigns'] : null;
        $this->container['reviewStatus'] = isset($data['reviewStatus']) ? $data['reviewStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['pageNo']) && ($this->container['pageNo'] < 1)) {
                $invalidProperties[] = "invalid value for 'pageNo', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] > 100)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be bigger than or equal to 1.";
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
    * Gets keyword
    *  关键字查询，用例名或编号
    *
    * @return string|null
    */
    public function getKeyword()
    {
        return $this->container['keyword'];
    }

    /**
    * Sets keyword
    *
    * @param string|null $keyword 关键字查询，用例名或编号
    *
    * @return $this
    */
    public function setKeyword($keyword)
    {
        $this->container['keyword'] = $keyword;
        return $this;
    }

    /**
    * Gets exeplatforms
    *  执行平台
    *
    * @return string[]|null
    */
    public function getExeplatforms()
    {
        return $this->container['exeplatforms'];
    }

    /**
    * Sets exeplatforms
    *
    * @param string[]|null $exeplatforms 执行平台
    *
    * @return $this
    */
    public function setExeplatforms($exeplatforms)
    {
        $this->container['exeplatforms'] = $exeplatforms;
        return $this;
    }

    /**
    * Gets own
    *  是否是我的
    *
    * @return bool|null
    */
    public function getOwn()
    {
        return $this->container['own'];
    }

    /**
    * Sets own
    *
    * @param bool|null $own 是否是我的
    *
    * @return $this
    */
    public function setOwn($own)
    {
        $this->container['own'] = $own;
        return $this;
    }

    /**
    * Gets useOffset
    *  useOffset
    *
    * @return bool|null
    */
    public function getUseOffset()
    {
        return $this->container['useOffset'];
    }

    /**
    * Sets useOffset
    *
    * @param bool|null $useOffset useOffset
    *
    * @return $this
    */
    public function setUseOffset($useOffset)
    {
        $this->container['useOffset'] = $useOffset;
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
    * Gets caseUris
    *  用例URI集合
    *
    * @return string[]|null
    */
    public function getCaseUris()
    {
        return $this->container['caseUris'];
    }

    /**
    * Sets caseUris
    *
    * @param string[]|null $caseUris 用例URI集合
    *
    * @return $this
    */
    public function setCaseUris($caseUris)
    {
        $this->container['caseUris'] = $caseUris;
        return $this;
    }

    /**
    * Gets ownerIds
    *  处理者ID集合
    *
    * @return string[]|null
    */
    public function getOwnerIds()
    {
        return $this->container['ownerIds'];
    }

    /**
    * Sets ownerIds
    *
    * @param string[]|null $ownerIds 处理者ID集合
    *
    * @return $this
    */
    public function setOwnerIds($ownerIds)
    {
        $this->container['ownerIds'] = $ownerIds;
        return $this;
    }

    /**
    * Gets statusCodes
    *  状态Code集合
    *
    * @return string[]|null
    */
    public function getStatusCodes()
    {
        return $this->container['statusCodes'];
    }

    /**
    * Sets statusCodes
    *
    * @param string[]|null $statusCodes 状态Code集合
    *
    * @return $this
    */
    public function setStatusCodes($statusCodes)
    {
        $this->container['statusCodes'] = $statusCodes;
        return $this;
    }

    /**
    * Gets rankIds
    *  用例等级ID集合
    *
    * @return string[]|null
    */
    public function getRankIds()
    {
        return $this->container['rankIds'];
    }

    /**
    * Sets rankIds
    *
    * @param string[]|null $rankIds 用例等级ID集合
    *
    * @return $this
    */
    public function setRankIds($rankIds)
    {
        $this->container['rankIds'] = $rankIds;
        return $this;
    }

    /**
    * Gets moduleIds
    *  模块ID集合
    *
    * @return string[]|null
    */
    public function getModuleIds()
    {
        return $this->container['moduleIds'];
    }

    /**
    * Sets moduleIds
    *
    * @param string[]|null $moduleIds 模块ID集合
    *
    * @return $this
    */
    public function setModuleIds($moduleIds)
    {
        $this->container['moduleIds'] = $moduleIds;
        return $this;
    }

    /**
    * Gets issueId
    *  需求编号
    *
    * @return string|null
    */
    public function getIssueId()
    {
        return $this->container['issueId'];
    }

    /**
    * Sets issueId
    *
    * @param string|null $issueId 需求编号
    *
    * @return $this
    */
    public function setIssueId($issueId)
    {
        $this->container['issueId'] = $issueId;
        return $this;
    }

    /**
    * Gets creatorIds
    *  创建者ID集合
    *
    * @return string[]|null
    */
    public function getCreatorIds()
    {
        return $this->container['creatorIds'];
    }

    /**
    * Sets creatorIds
    *
    * @param string[]|null $creatorIds 创建者ID集合
    *
    * @return $this
    */
    public function setCreatorIds($creatorIds)
    {
        $this->container['creatorIds'] = $creatorIds;
        return $this;
    }

    /**
    * Gets resultCodes
    *  结果Code集合
    *
    * @return string[]|null
    */
    public function getResultCodes()
    {
        return $this->container['resultCodes'];
    }

    /**
    * Sets resultCodes
    *
    * @param string[]|null $resultCodes 结果Code集合
    *
    * @return $this
    */
    public function setResultCodes($resultCodes)
    {
        $this->container['resultCodes'] = $resultCodes;
        return $this;
    }

    /**
    * Gets iterationIds
    *  归属迭代ID集合
    *
    * @return string[]|null
    */
    public function getIterationIds()
    {
        return $this->container['iterationIds'];
    }

    /**
    * Sets iterationIds
    *
    * @param string[]|null $iterationIds 归属迭代ID集合
    *
    * @return $this
    */
    public function setIterationIds($iterationIds)
    {
        $this->container['iterationIds'] = $iterationIds;
        return $this;
    }

    /**
    * Gets createStartTime
    *  创建开始时间
    *
    * @return string|null
    */
    public function getCreateStartTime()
    {
        return $this->container['createStartTime'];
    }

    /**
    * Sets createStartTime
    *
    * @param string|null $createStartTime 创建开始时间
    *
    * @return $this
    */
    public function setCreateStartTime($createStartTime)
    {
        $this->container['createStartTime'] = $createStartTime;
        return $this;
    }

    /**
    * Gets createEndTime
    *  创建结束时间
    *
    * @return string|null
    */
    public function getCreateEndTime()
    {
        return $this->container['createEndTime'];
    }

    /**
    * Sets createEndTime
    *
    * @param string|null $createEndTime 创建结束时间
    *
    * @return $this
    */
    public function setCreateEndTime($createEndTime)
    {
        $this->container['createEndTime'] = $createEndTime;
        return $this;
    }

    /**
    * Gets associatedIssue
    *  是否关联需求（null：不限，false：未关联，true：已关联）
    *
    * @return bool|null
    */
    public function getAssociatedIssue()
    {
        return $this->container['associatedIssue'];
    }

    /**
    * Sets associatedIssue
    *
    * @param bool|null $associatedIssue 是否关联需求（null：不限，false：未关联，true：已关联）
    *
    * @return $this
    */
    public function setAssociatedIssue($associatedIssue)
    {
        $this->container['associatedIssue'] = $associatedIssue;
        return $this;
    }

    /**
    * Gets associatedDefects
    *  是否关联缺陷（null：不限，false：未关联，true：已关联）
    *
    * @return bool|null
    */
    public function getAssociatedDefects()
    {
        return $this->container['associatedDefects'];
    }

    /**
    * Sets associatedDefects
    *
    * @param bool|null $associatedDefects 是否关联缺陷（null：不限，false：未关联，true：已关联）
    *
    * @return $this
    */
    public function setAssociatedDefects($associatedDefects)
    {
        $this->container['associatedDefects'] = $associatedDefects;
        return $this;
    }

    /**
    * Gets includeSubIssue
    *  是否查询子需求关联的用例，默认true
    *
    * @return bool|null
    */
    public function getIncludeSubIssue()
    {
        return $this->container['includeSubIssue'];
    }

    /**
    * Sets includeSubIssue
    *
    * @param bool|null $includeSubIssue 是否查询子需求关联的用例，默认true
    *
    * @return $this
    */
    public function setIncludeSubIssue($includeSubIssue)
    {
        $this->container['includeSubIssue'] = $includeSubIssue;
        return $this;
    }

    /**
    * Gets includeSubFeature
    *  是否查询子目录的用例，默认true
    *
    * @return bool|null
    */
    public function getIncludeSubFeature()
    {
        return $this->container['includeSubFeature'];
    }

    /**
    * Sets includeSubFeature
    *
    * @param bool|null $includeSubFeature 是否查询子目录的用例，默认true
    *
    * @return $this
    */
    public function setIncludeSubFeature($includeSubFeature)
    {
        $this->container['includeSubFeature'] = $includeSubFeature;
        return $this;
    }

    /**
    * Gets labelIds
    *  标签ID集合
    *
    * @return string[]|null
    */
    public function getLabelIds()
    {
        return $this->container['labelIds'];
    }

    /**
    * Sets labelIds
    *
    * @param string[]|null $labelIds 标签ID集合
    *
    * @return $this
    */
    public function setLabelIds($labelIds)
    {
        $this->container['labelIds'] = $labelIds;
        return $this;
    }

    /**
    * Gets executeStartTime
    *  执行开始时间
    *
    * @return string|null
    */
    public function getExecuteStartTime()
    {
        return $this->container['executeStartTime'];
    }

    /**
    * Sets executeStartTime
    *
    * @param string|null $executeStartTime 执行开始时间
    *
    * @return $this
    */
    public function setExecuteStartTime($executeStartTime)
    {
        $this->container['executeStartTime'] = $executeStartTime;
        return $this;
    }

    /**
    * Gets executeEndTime
    *  执行结束时间
    *
    * @return string|null
    */
    public function getExecuteEndTime()
    {
        return $this->container['executeEndTime'];
    }

    /**
    * Sets executeEndTime
    *
    * @param string|null $executeEndTime 执行结束时间
    *
    * @return $this
    */
    public function setExecuteEndTime($executeEndTime)
    {
        $this->container['executeEndTime'] = $executeEndTime;
        return $this;
    }

    /**
    * Gets executorIds
    *  执行者ID集合
    *
    * @return string[]|null
    */
    public function getExecutorIds()
    {
        return $this->container['executorIds'];
    }

    /**
    * Sets executorIds
    *
    * @param string[]|null $executorIds 执行者ID集合
    *
    * @return $this
    */
    public function setExecutorIds($executorIds)
    {
        $this->container['executorIds'] = $executorIds;
        return $this;
    }

    /**
    * Gets testTypes
    *  类型
    *
    * @return string[]|null
    */
    public function getTestTypes()
    {
        return $this->container['testTypes'];
    }

    /**
    * Sets testTypes
    *
    * @param string[]|null $testTypes 类型
    *
    * @return $this
    */
    public function setTestTypes($testTypes)
    {
        $this->container['testTypes'] = $testTypes;
        return $this;
    }

    /**
    * Gets isKeyword
    *  是否组合关键字
    *
    * @return bool|null
    */
    public function getIsKeyword()
    {
        return $this->container['isKeyword'];
    }

    /**
    * Sets isKeyword
    *
    * @param bool|null $isKeyword 是否组合关键字
    *
    * @return $this
    */
    public function setIsKeyword($isKeyword)
    {
        $this->container['isKeyword'] = $isKeyword;
        return $this;
    }

    /**
    * Gets issueTreeSearch
    *  是否是需求树点击的查询关联用例
    *
    * @return bool|null
    */
    public function getIssueTreeSearch()
    {
        return $this->container['issueTreeSearch'];
    }

    /**
    * Sets issueTreeSearch
    *
    * @param bool|null $issueTreeSearch 是否是需求树点击的查询关联用例
    *
    * @return $this
    */
    public function setIssueTreeSearch($issueTreeSearch)
    {
        $this->container['issueTreeSearch'] = $issueTreeSearch;
        return $this;
    }

    /**
    * Gets serviceType
    *  服务类型
    *
    * @return int|null
    */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
    * Sets serviceType
    *
    * @param int|null $serviceType 服务类型
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets serviceTypes
    *  服务类型集合
    *
    * @return int[]|null
    */
    public function getServiceTypes()
    {
        return $this->container['serviceTypes'];
    }

    /**
    * Sets serviceTypes
    *
    * @param int[]|null $serviceTypes 服务类型集合
    *
    * @return $this
    */
    public function setServiceTypes($serviceTypes)
    {
        $this->container['serviceTypes'] = $serviceTypes;
        return $this;
    }

    /**
    * Gets stageType
    *  阶段过程（2：测试设计，3：测试执行，4：质量报告）
    *
    * @return int|null
    */
    public function getStageType()
    {
        return $this->container['stageType'];
    }

    /**
    * Sets stageType
    *
    * @param int|null $stageType 阶段过程（2：测试设计，3：测试执行，4：质量报告）
    *
    * @return $this
    */
    public function setStageType($stageType)
    {
        $this->container['stageType'] = $stageType;
        return $this;
    }

    /**
    * Gets featureUri
    *  目录URI
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
    * @param string|null $featureUri 目录URI
    *
    * @return $this
    */
    public function setFeatureUri($featureUri)
    {
        $this->container['featureUri'] = $featureUri;
        return $this;
    }

    /**
    * Gets sortField
    *  排序字段
    *
    * @return string|null
    */
    public function getSortField()
    {
        return $this->container['sortField'];
    }

    /**
    * Sets sortField
    *
    * @param string|null $sortField 排序字段
    *
    * @return $this
    */
    public function setSortField($sortField)
    {
        $this->container['sortField'] = $sortField;
        return $this;
    }

    /**
    * Gets sortType
    *  排序方式
    *
    * @return string|null
    */
    public function getSortType()
    {
        return $this->container['sortType'];
    }

    /**
    * Sets sortType
    *
    * @param string|null $sortType 排序方式
    *
    * @return $this
    */
    public function setSortType($sortType)
    {
        $this->container['sortType'] = $sortType;
        return $this;
    }

    /**
    * Gets pageNo
    *  当前页数
    *
    * @return int|null
    */
    public function getPageNo()
    {
        return $this->container['pageNo'];
    }

    /**
    * Sets pageNo
    *
    * @param int|null $pageNo 当前页数
    *
    * @return $this
    */
    public function setPageNo($pageNo)
    {
        $this->container['pageNo'] = $pageNo;
        return $this;
    }

    /**
    * Gets pageSize
    *  每页条数
    *
    * @return int|null
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int|null $pageSize 每页条数
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets caseType
    *  用例类型
    *
    * @return int|null
    */
    public function getCaseType()
    {
        return $this->container['caseType'];
    }

    /**
    * Sets caseType
    *
    * @param int|null $caseType 用例类型
    *
    * @return $this
    */
    public function setCaseType($caseType)
    {
        $this->container['caseType'] = $caseType;
        return $this;
    }

    /**
    * Gets customFieldInfo
    *  用例自定义字段信息
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\QueryCustomFieldsInfo[]|null
    */
    public function getCustomFieldInfo()
    {
        return $this->container['customFieldInfo'];
    }

    /**
    * Sets customFieldInfo
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\QueryCustomFieldsInfo[]|null $customFieldInfo 用例自定义字段信息
    *
    * @return $this
    */
    public function setCustomFieldInfo($customFieldInfo)
    {
        $this->container['customFieldInfo'] = $customFieldInfo;
        return $this;
    }

    /**
    * Gets taskUri
    *  测试套uri
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
    * @param string|null $taskUri 测试套uri
    *
    * @return $this
    */
    public function setTaskUri($taskUri)
    {
        $this->container['taskUri'] = $taskUri;
        return $this;
    }

    /**
    * Gets associateIssueDetail
    *  是否返回需求具体信息（返回需求名称，需求id）
    *
    * @return bool|null
    */
    public function getAssociateIssueDetail()
    {
        return $this->container['associateIssueDetail'];
    }

    /**
    * Sets associateIssueDetail
    *
    * @param bool|null $associateIssueDetail 是否返回需求具体信息（返回需求名称，需求id）
    *
    * @return $this
    */
    public function setAssociateIssueDetail($associateIssueDetail)
    {
        $this->container['associateIssueDetail'] = $associateIssueDetail;
        return $this;
    }

    /**
    * Gets notAssignTask
    *  该字段为false,则查询全量用例，为true表示查询未分配测试套的用例
    *
    * @return bool|null
    */
    public function getNotAssignTask()
    {
        return $this->container['notAssignTask'];
    }

    /**
    * Sets notAssignTask
    *
    * @param bool|null $notAssignTask 该字段为false,则查询全量用例，为true表示查询未分配测试套的用例
    *
    * @return $this
    */
    public function setNotAssignTask($notAssignTask)
    {
        $this->container['notAssignTask'] = $notAssignTask;
        return $this;
    }

    /**
    * Gets testDesigns
    *  是否来自测试设计（null或者[true, false]：不限，[true]：来自测试设计，[false]：否来自测试设计）
    *
    * @return bool[]|null
    */
    public function getTestDesigns()
    {
        return $this->container['testDesigns'];
    }

    /**
    * Sets testDesigns
    *
    * @param bool[]|null $testDesigns 是否来自测试设计（null或者[true, false]：不限，[true]：来自测试设计，[false]：否来自测试设计）
    *
    * @return $this
    */
    public function setTestDesigns($testDesigns)
    {
        $this->container['testDesigns'] = $testDesigns;
        return $this;
    }

    /**
    * Gets reviewStatus
    *  用例评审状态
    *
    * @return int|null
    */
    public function getReviewStatus()
    {
        return $this->container['reviewStatus'];
    }

    /**
    * Sets reviewStatus
    *
    * @param int|null $reviewStatus 用例评审状态
    *
    * @return $this
    */
    public function setReviewStatus($reviewStatus)
    {
        $this->container['reviewStatus'] = $reviewStatus;
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

