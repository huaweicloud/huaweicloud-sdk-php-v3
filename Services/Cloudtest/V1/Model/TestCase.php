<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TestCase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TestCase';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * autoType  自动化类型
    * caseDesignDesc  用例设计描述
    * caseName  用例名称
    * caseNum  用例编号
    * createTime  创建时间
    * creatorName  创建人名字
    * creatorNum  创建人工号
    * deleted  删除状态
    * expectedResults  预期结果
    * extraParam  额外模板字段：以json形式存储，前台解析
    * factorCombinationJson  因子组合json
    * operationAndExpectedResult  操作及预期结果
    * id  id 主键
    * isArchive  状态
    * mindmapId  脑图id
    * nodeId  节点id
    * batchId  批次id
    * branchId  分支ID
    * planId  计划ID
    * prerequisite  用例前置步骤
    * testCaseLevel  测试用例级别
    * testProcedure  测试步骤
    * updateName  更新人名字
    * updateNum  更新人工号
    * updateTime  更新时间
    * url  url
    * uri  uri
    * projectId  项目id
    * serviceId  服务id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'autoType' => 'string',
            'caseDesignDesc' => 'string',
            'caseName' => 'string',
            'caseNum' => 'string',
            'createTime' => '\DateTime',
            'creatorName' => 'string',
            'creatorNum' => 'string',
            'deleted' => 'string',
            'expectedResults' => 'string',
            'extraParam' => 'string',
            'factorCombinationJson' => 'string',
            'operationAndExpectedResult' => 'string',
            'id' => 'string',
            'isArchive' => 'bool',
            'mindmapId' => 'string',
            'nodeId' => 'string',
            'batchId' => 'string',
            'branchId' => 'string',
            'planId' => 'string',
            'prerequisite' => 'string',
            'testCaseLevel' => 'string',
            'testProcedure' => 'string',
            'updateName' => 'string',
            'updateNum' => 'string',
            'updateTime' => '\DateTime',
            'url' => 'string',
            'uri' => 'string',
            'projectId' => 'string',
            'serviceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * autoType  自动化类型
    * caseDesignDesc  用例设计描述
    * caseName  用例名称
    * caseNum  用例编号
    * createTime  创建时间
    * creatorName  创建人名字
    * creatorNum  创建人工号
    * deleted  删除状态
    * expectedResults  预期结果
    * extraParam  额外模板字段：以json形式存储，前台解析
    * factorCombinationJson  因子组合json
    * operationAndExpectedResult  操作及预期结果
    * id  id 主键
    * isArchive  状态
    * mindmapId  脑图id
    * nodeId  节点id
    * batchId  批次id
    * branchId  分支ID
    * planId  计划ID
    * prerequisite  用例前置步骤
    * testCaseLevel  测试用例级别
    * testProcedure  测试步骤
    * updateName  更新人名字
    * updateNum  更新人工号
    * updateTime  更新时间
    * url  url
    * uri  uri
    * projectId  项目id
    * serviceId  服务id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'autoType' => null,
        'caseDesignDesc' => null,
        'caseName' => null,
        'caseNum' => null,
        'createTime' => 'date-time',
        'creatorName' => null,
        'creatorNum' => null,
        'deleted' => null,
        'expectedResults' => null,
        'extraParam' => null,
        'factorCombinationJson' => null,
        'operationAndExpectedResult' => null,
        'id' => null,
        'isArchive' => null,
        'mindmapId' => null,
        'nodeId' => null,
        'batchId' => null,
        'branchId' => null,
        'planId' => null,
        'prerequisite' => null,
        'testCaseLevel' => null,
        'testProcedure' => null,
        'updateName' => null,
        'updateNum' => null,
        'updateTime' => 'date-time',
        'url' => null,
        'uri' => null,
        'projectId' => null,
        'serviceId' => null
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
    * autoType  自动化类型
    * caseDesignDesc  用例设计描述
    * caseName  用例名称
    * caseNum  用例编号
    * createTime  创建时间
    * creatorName  创建人名字
    * creatorNum  创建人工号
    * deleted  删除状态
    * expectedResults  预期结果
    * extraParam  额外模板字段：以json形式存储，前台解析
    * factorCombinationJson  因子组合json
    * operationAndExpectedResult  操作及预期结果
    * id  id 主键
    * isArchive  状态
    * mindmapId  脑图id
    * nodeId  节点id
    * batchId  批次id
    * branchId  分支ID
    * planId  计划ID
    * prerequisite  用例前置步骤
    * testCaseLevel  测试用例级别
    * testProcedure  测试步骤
    * updateName  更新人名字
    * updateNum  更新人工号
    * updateTime  更新时间
    * url  url
    * uri  uri
    * projectId  项目id
    * serviceId  服务id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'autoType' => 'auto_type',
            'caseDesignDesc' => 'case_design_desc',
            'caseName' => 'case_name',
            'caseNum' => 'case_num',
            'createTime' => 'create_time',
            'creatorName' => 'creator_name',
            'creatorNum' => 'creator_num',
            'deleted' => 'deleted',
            'expectedResults' => 'expected_results',
            'extraParam' => 'extra_param',
            'factorCombinationJson' => 'factor_combination_json',
            'operationAndExpectedResult' => 'operation_and_expected_result',
            'id' => 'id',
            'isArchive' => 'is_archive',
            'mindmapId' => 'mindmap_id',
            'nodeId' => 'node_id',
            'batchId' => 'batch_id',
            'branchId' => 'branch_id',
            'planId' => 'plan_id',
            'prerequisite' => 'prerequisite',
            'testCaseLevel' => 'test_case_level',
            'testProcedure' => 'test_procedure',
            'updateName' => 'update_name',
            'updateNum' => 'update_num',
            'updateTime' => 'update_time',
            'url' => 'url',
            'uri' => 'uri',
            'projectId' => 'project_id',
            'serviceId' => 'service_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * autoType  自动化类型
    * caseDesignDesc  用例设计描述
    * caseName  用例名称
    * caseNum  用例编号
    * createTime  创建时间
    * creatorName  创建人名字
    * creatorNum  创建人工号
    * deleted  删除状态
    * expectedResults  预期结果
    * extraParam  额外模板字段：以json形式存储，前台解析
    * factorCombinationJson  因子组合json
    * operationAndExpectedResult  操作及预期结果
    * id  id 主键
    * isArchive  状态
    * mindmapId  脑图id
    * nodeId  节点id
    * batchId  批次id
    * branchId  分支ID
    * planId  计划ID
    * prerequisite  用例前置步骤
    * testCaseLevel  测试用例级别
    * testProcedure  测试步骤
    * updateName  更新人名字
    * updateNum  更新人工号
    * updateTime  更新时间
    * url  url
    * uri  uri
    * projectId  项目id
    * serviceId  服务id
    *
    * @var string[]
    */
    protected static $setters = [
            'autoType' => 'setAutoType',
            'caseDesignDesc' => 'setCaseDesignDesc',
            'caseName' => 'setCaseName',
            'caseNum' => 'setCaseNum',
            'createTime' => 'setCreateTime',
            'creatorName' => 'setCreatorName',
            'creatorNum' => 'setCreatorNum',
            'deleted' => 'setDeleted',
            'expectedResults' => 'setExpectedResults',
            'extraParam' => 'setExtraParam',
            'factorCombinationJson' => 'setFactorCombinationJson',
            'operationAndExpectedResult' => 'setOperationAndExpectedResult',
            'id' => 'setId',
            'isArchive' => 'setIsArchive',
            'mindmapId' => 'setMindmapId',
            'nodeId' => 'setNodeId',
            'batchId' => 'setBatchId',
            'branchId' => 'setBranchId',
            'planId' => 'setPlanId',
            'prerequisite' => 'setPrerequisite',
            'testCaseLevel' => 'setTestCaseLevel',
            'testProcedure' => 'setTestProcedure',
            'updateName' => 'setUpdateName',
            'updateNum' => 'setUpdateNum',
            'updateTime' => 'setUpdateTime',
            'url' => 'setUrl',
            'uri' => 'setUri',
            'projectId' => 'setProjectId',
            'serviceId' => 'setServiceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * autoType  自动化类型
    * caseDesignDesc  用例设计描述
    * caseName  用例名称
    * caseNum  用例编号
    * createTime  创建时间
    * creatorName  创建人名字
    * creatorNum  创建人工号
    * deleted  删除状态
    * expectedResults  预期结果
    * extraParam  额外模板字段：以json形式存储，前台解析
    * factorCombinationJson  因子组合json
    * operationAndExpectedResult  操作及预期结果
    * id  id 主键
    * isArchive  状态
    * mindmapId  脑图id
    * nodeId  节点id
    * batchId  批次id
    * branchId  分支ID
    * planId  计划ID
    * prerequisite  用例前置步骤
    * testCaseLevel  测试用例级别
    * testProcedure  测试步骤
    * updateName  更新人名字
    * updateNum  更新人工号
    * updateTime  更新时间
    * url  url
    * uri  uri
    * projectId  项目id
    * serviceId  服务id
    *
    * @var string[]
    */
    protected static $getters = [
            'autoType' => 'getAutoType',
            'caseDesignDesc' => 'getCaseDesignDesc',
            'caseName' => 'getCaseName',
            'caseNum' => 'getCaseNum',
            'createTime' => 'getCreateTime',
            'creatorName' => 'getCreatorName',
            'creatorNum' => 'getCreatorNum',
            'deleted' => 'getDeleted',
            'expectedResults' => 'getExpectedResults',
            'extraParam' => 'getExtraParam',
            'factorCombinationJson' => 'getFactorCombinationJson',
            'operationAndExpectedResult' => 'getOperationAndExpectedResult',
            'id' => 'getId',
            'isArchive' => 'getIsArchive',
            'mindmapId' => 'getMindmapId',
            'nodeId' => 'getNodeId',
            'batchId' => 'getBatchId',
            'branchId' => 'getBranchId',
            'planId' => 'getPlanId',
            'prerequisite' => 'getPrerequisite',
            'testCaseLevel' => 'getTestCaseLevel',
            'testProcedure' => 'getTestProcedure',
            'updateName' => 'getUpdateName',
            'updateNum' => 'getUpdateNum',
            'updateTime' => 'getUpdateTime',
            'url' => 'getUrl',
            'uri' => 'getUri',
            'projectId' => 'getProjectId',
            'serviceId' => 'getServiceId'
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
        $this->container['autoType'] = isset($data['autoType']) ? $data['autoType'] : null;
        $this->container['caseDesignDesc'] = isset($data['caseDesignDesc']) ? $data['caseDesignDesc'] : null;
        $this->container['caseName'] = isset($data['caseName']) ? $data['caseName'] : null;
        $this->container['caseNum'] = isset($data['caseNum']) ? $data['caseNum'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['creatorNum'] = isset($data['creatorNum']) ? $data['creatorNum'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['expectedResults'] = isset($data['expectedResults']) ? $data['expectedResults'] : null;
        $this->container['extraParam'] = isset($data['extraParam']) ? $data['extraParam'] : null;
        $this->container['factorCombinationJson'] = isset($data['factorCombinationJson']) ? $data['factorCombinationJson'] : null;
        $this->container['operationAndExpectedResult'] = isset($data['operationAndExpectedResult']) ? $data['operationAndExpectedResult'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['isArchive'] = isset($data['isArchive']) ? $data['isArchive'] : null;
        $this->container['mindmapId'] = isset($data['mindmapId']) ? $data['mindmapId'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['batchId'] = isset($data['batchId']) ? $data['batchId'] : null;
        $this->container['branchId'] = isset($data['branchId']) ? $data['branchId'] : null;
        $this->container['planId'] = isset($data['planId']) ? $data['planId'] : null;
        $this->container['prerequisite'] = isset($data['prerequisite']) ? $data['prerequisite'] : null;
        $this->container['testCaseLevel'] = isset($data['testCaseLevel']) ? $data['testCaseLevel'] : null;
        $this->container['testProcedure'] = isset($data['testProcedure']) ? $data['testProcedure'] : null;
        $this->container['updateName'] = isset($data['updateName']) ? $data['updateName'] : null;
        $this->container['updateNum'] = isset($data['updateNum']) ? $data['updateNum'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['serviceId'] = isset($data['serviceId']) ? $data['serviceId'] : null;
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
    * Gets autoType
    *  自动化类型
    *
    * @return string|null
    */
    public function getAutoType()
    {
        return $this->container['autoType'];
    }

    /**
    * Sets autoType
    *
    * @param string|null $autoType 自动化类型
    *
    * @return $this
    */
    public function setAutoType($autoType)
    {
        $this->container['autoType'] = $autoType;
        return $this;
    }

    /**
    * Gets caseDesignDesc
    *  用例设计描述
    *
    * @return string|null
    */
    public function getCaseDesignDesc()
    {
        return $this->container['caseDesignDesc'];
    }

    /**
    * Sets caseDesignDesc
    *
    * @param string|null $caseDesignDesc 用例设计描述
    *
    * @return $this
    */
    public function setCaseDesignDesc($caseDesignDesc)
    {
        $this->container['caseDesignDesc'] = $caseDesignDesc;
        return $this;
    }

    /**
    * Gets caseName
    *  用例名称
    *
    * @return string|null
    */
    public function getCaseName()
    {
        return $this->container['caseName'];
    }

    /**
    * Sets caseName
    *
    * @param string|null $caseName 用例名称
    *
    * @return $this
    */
    public function setCaseName($caseName)
    {
        $this->container['caseName'] = $caseName;
        return $this;
    }

    /**
    * Gets caseNum
    *  用例编号
    *
    * @return string|null
    */
    public function getCaseNum()
    {
        return $this->container['caseNum'];
    }

    /**
    * Sets caseNum
    *
    * @param string|null $caseNum 用例编号
    *
    * @return $this
    */
    public function setCaseNum($caseNum)
    {
        $this->container['caseNum'] = $caseNum;
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
    * Gets creatorName
    *  创建人名字
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
    * @param string|null $creatorName 创建人名字
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets creatorNum
    *  创建人工号
    *
    * @return string|null
    */
    public function getCreatorNum()
    {
        return $this->container['creatorNum'];
    }

    /**
    * Sets creatorNum
    *
    * @param string|null $creatorNum 创建人工号
    *
    * @return $this
    */
    public function setCreatorNum($creatorNum)
    {
        $this->container['creatorNum'] = $creatorNum;
        return $this;
    }

    /**
    * Gets deleted
    *  删除状态
    *
    * @return string|null
    */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
    * Sets deleted
    *
    * @param string|null $deleted 删除状态
    *
    * @return $this
    */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;
        return $this;
    }

    /**
    * Gets expectedResults
    *  预期结果
    *
    * @return string|null
    */
    public function getExpectedResults()
    {
        return $this->container['expectedResults'];
    }

    /**
    * Sets expectedResults
    *
    * @param string|null $expectedResults 预期结果
    *
    * @return $this
    */
    public function setExpectedResults($expectedResults)
    {
        $this->container['expectedResults'] = $expectedResults;
        return $this;
    }

    /**
    * Gets extraParam
    *  额外模板字段：以json形式存储，前台解析
    *
    * @return string|null
    */
    public function getExtraParam()
    {
        return $this->container['extraParam'];
    }

    /**
    * Sets extraParam
    *
    * @param string|null $extraParam 额外模板字段：以json形式存储，前台解析
    *
    * @return $this
    */
    public function setExtraParam($extraParam)
    {
        $this->container['extraParam'] = $extraParam;
        return $this;
    }

    /**
    * Gets factorCombinationJson
    *  因子组合json
    *
    * @return string|null
    */
    public function getFactorCombinationJson()
    {
        return $this->container['factorCombinationJson'];
    }

    /**
    * Sets factorCombinationJson
    *
    * @param string|null $factorCombinationJson 因子组合json
    *
    * @return $this
    */
    public function setFactorCombinationJson($factorCombinationJson)
    {
        $this->container['factorCombinationJson'] = $factorCombinationJson;
        return $this;
    }

    /**
    * Gets operationAndExpectedResult
    *  操作及预期结果
    *
    * @return string|null
    */
    public function getOperationAndExpectedResult()
    {
        return $this->container['operationAndExpectedResult'];
    }

    /**
    * Sets operationAndExpectedResult
    *
    * @param string|null $operationAndExpectedResult 操作及预期结果
    *
    * @return $this
    */
    public function setOperationAndExpectedResult($operationAndExpectedResult)
    {
        $this->container['operationAndExpectedResult'] = $operationAndExpectedResult;
        return $this;
    }

    /**
    * Gets id
    *  id 主键
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
    * @param string|null $id id 主键
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets isArchive
    *  状态
    *
    * @return bool|null
    */
    public function getIsArchive()
    {
        return $this->container['isArchive'];
    }

    /**
    * Sets isArchive
    *
    * @param bool|null $isArchive 状态
    *
    * @return $this
    */
    public function setIsArchive($isArchive)
    {
        $this->container['isArchive'] = $isArchive;
        return $this;
    }

    /**
    * Gets mindmapId
    *  脑图id
    *
    * @return string|null
    */
    public function getMindmapId()
    {
        return $this->container['mindmapId'];
    }

    /**
    * Sets mindmapId
    *
    * @param string|null $mindmapId 脑图id
    *
    * @return $this
    */
    public function setMindmapId($mindmapId)
    {
        $this->container['mindmapId'] = $mindmapId;
        return $this;
    }

    /**
    * Gets nodeId
    *  节点id
    *
    * @return string|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string|null $nodeId 节点id
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets batchId
    *  批次id
    *
    * @return string|null
    */
    public function getBatchId()
    {
        return $this->container['batchId'];
    }

    /**
    * Sets batchId
    *
    * @param string|null $batchId 批次id
    *
    * @return $this
    */
    public function setBatchId($batchId)
    {
        $this->container['batchId'] = $batchId;
        return $this;
    }

    /**
    * Gets branchId
    *  分支ID
    *
    * @return string|null
    */
    public function getBranchId()
    {
        return $this->container['branchId'];
    }

    /**
    * Sets branchId
    *
    * @param string|null $branchId 分支ID
    *
    * @return $this
    */
    public function setBranchId($branchId)
    {
        $this->container['branchId'] = $branchId;
        return $this;
    }

    /**
    * Gets planId
    *  计划ID
    *
    * @return string|null
    */
    public function getPlanId()
    {
        return $this->container['planId'];
    }

    /**
    * Sets planId
    *
    * @param string|null $planId 计划ID
    *
    * @return $this
    */
    public function setPlanId($planId)
    {
        $this->container['planId'] = $planId;
        return $this;
    }

    /**
    * Gets prerequisite
    *  用例前置步骤
    *
    * @return string|null
    */
    public function getPrerequisite()
    {
        return $this->container['prerequisite'];
    }

    /**
    * Sets prerequisite
    *
    * @param string|null $prerequisite 用例前置步骤
    *
    * @return $this
    */
    public function setPrerequisite($prerequisite)
    {
        $this->container['prerequisite'] = $prerequisite;
        return $this;
    }

    /**
    * Gets testCaseLevel
    *  测试用例级别
    *
    * @return string|null
    */
    public function getTestCaseLevel()
    {
        return $this->container['testCaseLevel'];
    }

    /**
    * Sets testCaseLevel
    *
    * @param string|null $testCaseLevel 测试用例级别
    *
    * @return $this
    */
    public function setTestCaseLevel($testCaseLevel)
    {
        $this->container['testCaseLevel'] = $testCaseLevel;
        return $this;
    }

    /**
    * Gets testProcedure
    *  测试步骤
    *
    * @return string|null
    */
    public function getTestProcedure()
    {
        return $this->container['testProcedure'];
    }

    /**
    * Sets testProcedure
    *
    * @param string|null $testProcedure 测试步骤
    *
    * @return $this
    */
    public function setTestProcedure($testProcedure)
    {
        $this->container['testProcedure'] = $testProcedure;
        return $this;
    }

    /**
    * Gets updateName
    *  更新人名字
    *
    * @return string|null
    */
    public function getUpdateName()
    {
        return $this->container['updateName'];
    }

    /**
    * Sets updateName
    *
    * @param string|null $updateName 更新人名字
    *
    * @return $this
    */
    public function setUpdateName($updateName)
    {
        $this->container['updateName'] = $updateName;
        return $this;
    }

    /**
    * Gets updateNum
    *  更新人工号
    *
    * @return string|null
    */
    public function getUpdateNum()
    {
        return $this->container['updateNum'];
    }

    /**
    * Sets updateNum
    *
    * @param string|null $updateNum 更新人工号
    *
    * @return $this
    */
    public function setUpdateNum($updateNum)
    {
        $this->container['updateNum'] = $updateNum;
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
    * Gets url
    *  url
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url url
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets uri
    *  uri
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
    * @param string|null $uri uri
    *
    * @return $this
    */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;
        return $this;
    }

    /**
    * Gets projectId
    *  项目id
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
    * @param string|null $projectId 项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets serviceId
    *  服务id
    *
    * @return string|null
    */
    public function getServiceId()
    {
        return $this->container['serviceId'];
    }

    /**
    * Sets serviceId
    *
    * @param string|null $serviceId 服务id
    *
    * @return $this
    */
    public function setServiceId($serviceId)
    {
        $this->container['serviceId'] = $serviceId;
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

