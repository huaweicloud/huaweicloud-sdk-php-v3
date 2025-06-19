<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TestCaseListVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TestCaseListVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uri  用例URI
    * name  用例名称
    * owner  owner
    * status  status
    * result  result
    * module  module
    * iteration  iteration
    * exeplatform  执行平台，如：apittest,其他三方执行平台
    * number  用例编号
    * description  用例描述
    * rankId  用例等级
    * featureUri  目录URI
    * releaseDev  版本号
    * isKeyword  是否组合关键字
    * scriptUrl  脚本路径
    * reportUrl  实时报告地址
    * projectUuid  项目ID
    * serviceType  serviceType
    * testType  testType
    * createInfo  createInfo
    * executeInfo  executeInfo
    * associateIssueInfo  associateIssueInfo
    * associateDefectInfo  associateDefectInfo
    * caseType  用例类型
    * labels  用例标签名称列表
    * customFieldInfo  自定义字段信息
    * isTestDesign  是否来自测试设计（null：不限，false：否来自测试设计，true：来自测试设计）
    * lastModified  最后修改时间（null：不限）
    * reviewStatus  用例评审状态（null：0至127）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uri' => 'string',
            'name' => 'string',
            'owner' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo',
            'status' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo',
            'result' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo',
            'module' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo',
            'iteration' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo',
            'exeplatform' => 'string',
            'number' => 'string',
            'description' => 'string',
            'rankId' => 'string',
            'featureUri' => 'string',
            'releaseDev' => 'string',
            'isKeyword' => 'bool',
            'scriptUrl' => 'string',
            'reportUrl' => 'string',
            'projectUuid' => 'string',
            'serviceType' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo',
            'testType' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\IntegerIdAndNameVo',
            'createInfo' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\CreateInfoVo',
            'executeInfo' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\ExecuteInfoVo',
            'associateIssueInfo' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AssociateIssueInfoVo',
            'associateDefectInfo' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AssociateDefectInfoVo',
            'caseType' => 'int',
            'labels' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\LabelVo[]',
            'customFieldInfo' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\CustomFieldVo[]',
            'isTestDesign' => 'bool',
            'lastModified' => 'int',
            'reviewStatus' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uri  用例URI
    * name  用例名称
    * owner  owner
    * status  status
    * result  result
    * module  module
    * iteration  iteration
    * exeplatform  执行平台，如：apittest,其他三方执行平台
    * number  用例编号
    * description  用例描述
    * rankId  用例等级
    * featureUri  目录URI
    * releaseDev  版本号
    * isKeyword  是否组合关键字
    * scriptUrl  脚本路径
    * reportUrl  实时报告地址
    * projectUuid  项目ID
    * serviceType  serviceType
    * testType  testType
    * createInfo  createInfo
    * executeInfo  executeInfo
    * associateIssueInfo  associateIssueInfo
    * associateDefectInfo  associateDefectInfo
    * caseType  用例类型
    * labels  用例标签名称列表
    * customFieldInfo  自定义字段信息
    * isTestDesign  是否来自测试设计（null：不限，false：否来自测试设计，true：来自测试设计）
    * lastModified  最后修改时间（null：不限）
    * reviewStatus  用例评审状态（null：0至127）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uri' => null,
        'name' => null,
        'owner' => null,
        'status' => null,
        'result' => null,
        'module' => null,
        'iteration' => null,
        'exeplatform' => null,
        'number' => null,
        'description' => null,
        'rankId' => null,
        'featureUri' => null,
        'releaseDev' => null,
        'isKeyword' => null,
        'scriptUrl' => null,
        'reportUrl' => null,
        'projectUuid' => null,
        'serviceType' => null,
        'testType' => null,
        'createInfo' => null,
        'executeInfo' => null,
        'associateIssueInfo' => null,
        'associateDefectInfo' => null,
        'caseType' => 'int32',
        'labels' => null,
        'customFieldInfo' => null,
        'isTestDesign' => null,
        'lastModified' => 'int64',
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
    * uri  用例URI
    * name  用例名称
    * owner  owner
    * status  status
    * result  result
    * module  module
    * iteration  iteration
    * exeplatform  执行平台，如：apittest,其他三方执行平台
    * number  用例编号
    * description  用例描述
    * rankId  用例等级
    * featureUri  目录URI
    * releaseDev  版本号
    * isKeyword  是否组合关键字
    * scriptUrl  脚本路径
    * reportUrl  实时报告地址
    * projectUuid  项目ID
    * serviceType  serviceType
    * testType  testType
    * createInfo  createInfo
    * executeInfo  executeInfo
    * associateIssueInfo  associateIssueInfo
    * associateDefectInfo  associateDefectInfo
    * caseType  用例类型
    * labels  用例标签名称列表
    * customFieldInfo  自定义字段信息
    * isTestDesign  是否来自测试设计（null：不限，false：否来自测试设计，true：来自测试设计）
    * lastModified  最后修改时间（null：不限）
    * reviewStatus  用例评审状态（null：0至127）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uri' => 'uri',
            'name' => 'name',
            'owner' => 'owner',
            'status' => 'status',
            'result' => 'result',
            'module' => 'module',
            'iteration' => 'iteration',
            'exeplatform' => 'exeplatform',
            'number' => 'number',
            'description' => 'description',
            'rankId' => 'rank_id',
            'featureUri' => 'feature_uri',
            'releaseDev' => 'release_dev',
            'isKeyword' => 'is_keyword',
            'scriptUrl' => 'script_url',
            'reportUrl' => 'report_url',
            'projectUuid' => 'project_uuid',
            'serviceType' => 'service_type',
            'testType' => 'test_type',
            'createInfo' => 'create_info',
            'executeInfo' => 'execute_info',
            'associateIssueInfo' => 'associate_issue_info',
            'associateDefectInfo' => 'associate_defect_info',
            'caseType' => 'case_type',
            'labels' => 'labels',
            'customFieldInfo' => 'custom_field_info',
            'isTestDesign' => 'is_test_design',
            'lastModified' => 'last_modified',
            'reviewStatus' => 'review_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uri  用例URI
    * name  用例名称
    * owner  owner
    * status  status
    * result  result
    * module  module
    * iteration  iteration
    * exeplatform  执行平台，如：apittest,其他三方执行平台
    * number  用例编号
    * description  用例描述
    * rankId  用例等级
    * featureUri  目录URI
    * releaseDev  版本号
    * isKeyword  是否组合关键字
    * scriptUrl  脚本路径
    * reportUrl  实时报告地址
    * projectUuid  项目ID
    * serviceType  serviceType
    * testType  testType
    * createInfo  createInfo
    * executeInfo  executeInfo
    * associateIssueInfo  associateIssueInfo
    * associateDefectInfo  associateDefectInfo
    * caseType  用例类型
    * labels  用例标签名称列表
    * customFieldInfo  自定义字段信息
    * isTestDesign  是否来自测试设计（null：不限，false：否来自测试设计，true：来自测试设计）
    * lastModified  最后修改时间（null：不限）
    * reviewStatus  用例评审状态（null：0至127）
    *
    * @var string[]
    */
    protected static $setters = [
            'uri' => 'setUri',
            'name' => 'setName',
            'owner' => 'setOwner',
            'status' => 'setStatus',
            'result' => 'setResult',
            'module' => 'setModule',
            'iteration' => 'setIteration',
            'exeplatform' => 'setExeplatform',
            'number' => 'setNumber',
            'description' => 'setDescription',
            'rankId' => 'setRankId',
            'featureUri' => 'setFeatureUri',
            'releaseDev' => 'setReleaseDev',
            'isKeyword' => 'setIsKeyword',
            'scriptUrl' => 'setScriptUrl',
            'reportUrl' => 'setReportUrl',
            'projectUuid' => 'setProjectUuid',
            'serviceType' => 'setServiceType',
            'testType' => 'setTestType',
            'createInfo' => 'setCreateInfo',
            'executeInfo' => 'setExecuteInfo',
            'associateIssueInfo' => 'setAssociateIssueInfo',
            'associateDefectInfo' => 'setAssociateDefectInfo',
            'caseType' => 'setCaseType',
            'labels' => 'setLabels',
            'customFieldInfo' => 'setCustomFieldInfo',
            'isTestDesign' => 'setIsTestDesign',
            'lastModified' => 'setLastModified',
            'reviewStatus' => 'setReviewStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uri  用例URI
    * name  用例名称
    * owner  owner
    * status  status
    * result  result
    * module  module
    * iteration  iteration
    * exeplatform  执行平台，如：apittest,其他三方执行平台
    * number  用例编号
    * description  用例描述
    * rankId  用例等级
    * featureUri  目录URI
    * releaseDev  版本号
    * isKeyword  是否组合关键字
    * scriptUrl  脚本路径
    * reportUrl  实时报告地址
    * projectUuid  项目ID
    * serviceType  serviceType
    * testType  testType
    * createInfo  createInfo
    * executeInfo  executeInfo
    * associateIssueInfo  associateIssueInfo
    * associateDefectInfo  associateDefectInfo
    * caseType  用例类型
    * labels  用例标签名称列表
    * customFieldInfo  自定义字段信息
    * isTestDesign  是否来自测试设计（null：不限，false：否来自测试设计，true：来自测试设计）
    * lastModified  最后修改时间（null：不限）
    * reviewStatus  用例评审状态（null：0至127）
    *
    * @var string[]
    */
    protected static $getters = [
            'uri' => 'getUri',
            'name' => 'getName',
            'owner' => 'getOwner',
            'status' => 'getStatus',
            'result' => 'getResult',
            'module' => 'getModule',
            'iteration' => 'getIteration',
            'exeplatform' => 'getExeplatform',
            'number' => 'getNumber',
            'description' => 'getDescription',
            'rankId' => 'getRankId',
            'featureUri' => 'getFeatureUri',
            'releaseDev' => 'getReleaseDev',
            'isKeyword' => 'getIsKeyword',
            'scriptUrl' => 'getScriptUrl',
            'reportUrl' => 'getReportUrl',
            'projectUuid' => 'getProjectUuid',
            'serviceType' => 'getServiceType',
            'testType' => 'getTestType',
            'createInfo' => 'getCreateInfo',
            'executeInfo' => 'getExecuteInfo',
            'associateIssueInfo' => 'getAssociateIssueInfo',
            'associateDefectInfo' => 'getAssociateDefectInfo',
            'caseType' => 'getCaseType',
            'labels' => 'getLabels',
            'customFieldInfo' => 'getCustomFieldInfo',
            'isTestDesign' => 'getIsTestDesign',
            'lastModified' => 'getLastModified',
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
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['module'] = isset($data['module']) ? $data['module'] : null;
        $this->container['iteration'] = isset($data['iteration']) ? $data['iteration'] : null;
        $this->container['exeplatform'] = isset($data['exeplatform']) ? $data['exeplatform'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['rankId'] = isset($data['rankId']) ? $data['rankId'] : null;
        $this->container['featureUri'] = isset($data['featureUri']) ? $data['featureUri'] : null;
        $this->container['releaseDev'] = isset($data['releaseDev']) ? $data['releaseDev'] : null;
        $this->container['isKeyword'] = isset($data['isKeyword']) ? $data['isKeyword'] : null;
        $this->container['scriptUrl'] = isset($data['scriptUrl']) ? $data['scriptUrl'] : null;
        $this->container['reportUrl'] = isset($data['reportUrl']) ? $data['reportUrl'] : null;
        $this->container['projectUuid'] = isset($data['projectUuid']) ? $data['projectUuid'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['testType'] = isset($data['testType']) ? $data['testType'] : null;
        $this->container['createInfo'] = isset($data['createInfo']) ? $data['createInfo'] : null;
        $this->container['executeInfo'] = isset($data['executeInfo']) ? $data['executeInfo'] : null;
        $this->container['associateIssueInfo'] = isset($data['associateIssueInfo']) ? $data['associateIssueInfo'] : null;
        $this->container['associateDefectInfo'] = isset($data['associateDefectInfo']) ? $data['associateDefectInfo'] : null;
        $this->container['caseType'] = isset($data['caseType']) ? $data['caseType'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['customFieldInfo'] = isset($data['customFieldInfo']) ? $data['customFieldInfo'] : null;
        $this->container['isTestDesign'] = isset($data['isTestDesign']) ? $data['isTestDesign'] : null;
        $this->container['lastModified'] = isset($data['lastModified']) ? $data['lastModified'] : null;
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
    *  用例URI
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
    * @param string|null $uri 用例URI
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
    *  用例名称
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
    * @param string|null $name 用例名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets owner
    *  owner
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo|null $owner owner
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets result
    *  result
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo|null $result result
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets module
    *  module
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo|null
    */
    public function getModule()
    {
        return $this->container['module'];
    }

    /**
    * Sets module
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo|null $module module
    *
    * @return $this
    */
    public function setModule($module)
    {
        $this->container['module'] = $module;
        return $this;
    }

    /**
    * Gets iteration
    *  iteration
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo|null
    */
    public function getIteration()
    {
        return $this->container['iteration'];
    }

    /**
    * Sets iteration
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo|null $iteration iteration
    *
    * @return $this
    */
    public function setIteration($iteration)
    {
        $this->container['iteration'] = $iteration;
        return $this;
    }

    /**
    * Gets exeplatform
    *  执行平台，如：apittest,其他三方执行平台
    *
    * @return string|null
    */
    public function getExeplatform()
    {
        return $this->container['exeplatform'];
    }

    /**
    * Sets exeplatform
    *
    * @param string|null $exeplatform 执行平台，如：apittest,其他三方执行平台
    *
    * @return $this
    */
    public function setExeplatform($exeplatform)
    {
        $this->container['exeplatform'] = $exeplatform;
        return $this;
    }

    /**
    * Gets number
    *  用例编号
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
    * @param string|null $number 用例编号
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets description
    *  用例描述
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
    * @param string|null $description 用例描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets rankId
    *  用例等级
    *
    * @return string|null
    */
    public function getRankId()
    {
        return $this->container['rankId'];
    }

    /**
    * Sets rankId
    *
    * @param string|null $rankId 用例等级
    *
    * @return $this
    */
    public function setRankId($rankId)
    {
        $this->container['rankId'] = $rankId;
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
    * Gets scriptUrl
    *  脚本路径
    *
    * @return string|null
    */
    public function getScriptUrl()
    {
        return $this->container['scriptUrl'];
    }

    /**
    * Sets scriptUrl
    *
    * @param string|null $scriptUrl 脚本路径
    *
    * @return $this
    */
    public function setScriptUrl($scriptUrl)
    {
        $this->container['scriptUrl'] = $scriptUrl;
        return $this;
    }

    /**
    * Gets reportUrl
    *  实时报告地址
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
    * @param string|null $reportUrl 实时报告地址
    *
    * @return $this
    */
    public function setReportUrl($reportUrl)
    {
        $this->container['reportUrl'] = $reportUrl;
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
    * Gets serviceType
    *  serviceType
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo|null
    */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
    * Sets serviceType
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo|null $serviceType serviceType
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets testType
    *  testType
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\IntegerIdAndNameVo|null
    */
    public function getTestType()
    {
        return $this->container['testType'];
    }

    /**
    * Sets testType
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\IntegerIdAndNameVo|null $testType testType
    *
    * @return $this
    */
    public function setTestType($testType)
    {
        $this->container['testType'] = $testType;
        return $this;
    }

    /**
    * Gets createInfo
    *  createInfo
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\CreateInfoVo|null
    */
    public function getCreateInfo()
    {
        return $this->container['createInfo'];
    }

    /**
    * Sets createInfo
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\CreateInfoVo|null $createInfo createInfo
    *
    * @return $this
    */
    public function setCreateInfo($createInfo)
    {
        $this->container['createInfo'] = $createInfo;
        return $this;
    }

    /**
    * Gets executeInfo
    *  executeInfo
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\ExecuteInfoVo|null
    */
    public function getExecuteInfo()
    {
        return $this->container['executeInfo'];
    }

    /**
    * Sets executeInfo
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\ExecuteInfoVo|null $executeInfo executeInfo
    *
    * @return $this
    */
    public function setExecuteInfo($executeInfo)
    {
        $this->container['executeInfo'] = $executeInfo;
        return $this;
    }

    /**
    * Gets associateIssueInfo
    *  associateIssueInfo
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AssociateIssueInfoVo|null
    */
    public function getAssociateIssueInfo()
    {
        return $this->container['associateIssueInfo'];
    }

    /**
    * Sets associateIssueInfo
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AssociateIssueInfoVo|null $associateIssueInfo associateIssueInfo
    *
    * @return $this
    */
    public function setAssociateIssueInfo($associateIssueInfo)
    {
        $this->container['associateIssueInfo'] = $associateIssueInfo;
        return $this;
    }

    /**
    * Gets associateDefectInfo
    *  associateDefectInfo
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AssociateDefectInfoVo|null
    */
    public function getAssociateDefectInfo()
    {
        return $this->container['associateDefectInfo'];
    }

    /**
    * Sets associateDefectInfo
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AssociateDefectInfoVo|null $associateDefectInfo associateDefectInfo
    *
    * @return $this
    */
    public function setAssociateDefectInfo($associateDefectInfo)
    {
        $this->container['associateDefectInfo'] = $associateDefectInfo;
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
    * Gets labels
    *  用例标签名称列表
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\LabelVo[]|null
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\LabelVo[]|null $labels 用例标签名称列表
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets customFieldInfo
    *  自定义字段信息
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\CustomFieldVo[]|null
    */
    public function getCustomFieldInfo()
    {
        return $this->container['customFieldInfo'];
    }

    /**
    * Sets customFieldInfo
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\CustomFieldVo[]|null $customFieldInfo 自定义字段信息
    *
    * @return $this
    */
    public function setCustomFieldInfo($customFieldInfo)
    {
        $this->container['customFieldInfo'] = $customFieldInfo;
        return $this;
    }

    /**
    * Gets isTestDesign
    *  是否来自测试设计（null：不限，false：否来自测试设计，true：来自测试设计）
    *
    * @return bool|null
    */
    public function getIsTestDesign()
    {
        return $this->container['isTestDesign'];
    }

    /**
    * Sets isTestDesign
    *
    * @param bool|null $isTestDesign 是否来自测试设计（null：不限，false：否来自测试设计，true：来自测试设计）
    *
    * @return $this
    */
    public function setIsTestDesign($isTestDesign)
    {
        $this->container['isTestDesign'] = $isTestDesign;
        return $this;
    }

    /**
    * Gets lastModified
    *  最后修改时间（null：不限）
    *
    * @return int|null
    */
    public function getLastModified()
    {
        return $this->container['lastModified'];
    }

    /**
    * Sets lastModified
    *
    * @param int|null $lastModified 最后修改时间（null：不限）
    *
    * @return $this
    */
    public function setLastModified($lastModified)
    {
        $this->container['lastModified'] = $lastModified;
        return $this;
    }

    /**
    * Gets reviewStatus
    *  用例评审状态（null：0至127）
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
    * @param int|null $reviewStatus 用例评审状态（null：0至127）
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

