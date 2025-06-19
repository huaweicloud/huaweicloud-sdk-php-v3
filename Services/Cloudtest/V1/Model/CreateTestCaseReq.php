<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTestCaseReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateTestCaseReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * activityId  活动id
    * addToPlan  是否添加到计划
    * awCataList  创建时可选择导入的aw目录直接产生测试步骤
    * awInstance  awInstance
    * caseType  用例类型：0商用现有类型，1从内部导过来的用例类型
    * caseVariableList  用例局部变量
    * demoFlag  演示标志
    * errorStep  错误测试阶段
    * id  id
    * importInfoList  import信息List
    * isKeyWord  是否设置为关键字操作
    * isSync  是否同步
    * issueId  问题ID
    * name  名称
    * oldTmssCaseUri  被复制用例的tmsscaseuri
    * oldTmssCaseUriList  被复制用例的tmsscaseuri列表，内部使用
    * packageName  包名
    * planId  计划ID
    * projectId  工程ID
    * releaseDev  新服务新建用例版本号
    * scriptName  脚本名(类名)
    * scriptPath  脚本路径
    * source  来源
    * sourceWay  来源的方式
    * srcTmssCaseUri  选择用例中测试步骤生成关键字时的原用例tmssCaseUri
    * tmssCaseUri  tmss用例uri
    * tmssFeatureUri  tmss用例uri
    * tmssProperty  tmssProperty
    * type  类型
    * variableGroupId  环境参数分组id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'activityId' => 'string',
            'addToPlan' => 'bool',
            'awCataList' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\BasicAwCata[]',
            'awInstance' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\CaseAwInstance',
            'caseType' => 'int',
            'caseVariableList' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AwVariable[]',
            'demoFlag' => 'string',
            'errorStep' => 'int[]',
            'id' => 'string',
            'importInfoList' => 'string[]',
            'isKeyWord' => 'int',
            'isSync' => 'bool',
            'issueId' => 'string',
            'name' => 'string',
            'oldTmssCaseUri' => 'string',
            'oldTmssCaseUriList' => 'string[]',
            'packageName' => 'string',
            'planId' => 'string',
            'projectId' => 'string',
            'releaseDev' => 'string',
            'scriptName' => 'string',
            'scriptPath' => 'string',
            'source' => 'string',
            'sourceWay' => 'string',
            'srcTmssCaseUri' => 'string',
            'tmssCaseUri' => 'string',
            'tmssFeatureUri' => 'string',
            'tmssProperty' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\TmssTestcase',
            'type' => 'string',
            'variableGroupId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * activityId  活动id
    * addToPlan  是否添加到计划
    * awCataList  创建时可选择导入的aw目录直接产生测试步骤
    * awInstance  awInstance
    * caseType  用例类型：0商用现有类型，1从内部导过来的用例类型
    * caseVariableList  用例局部变量
    * demoFlag  演示标志
    * errorStep  错误测试阶段
    * id  id
    * importInfoList  import信息List
    * isKeyWord  是否设置为关键字操作
    * isSync  是否同步
    * issueId  问题ID
    * name  名称
    * oldTmssCaseUri  被复制用例的tmsscaseuri
    * oldTmssCaseUriList  被复制用例的tmsscaseuri列表，内部使用
    * packageName  包名
    * planId  计划ID
    * projectId  工程ID
    * releaseDev  新服务新建用例版本号
    * scriptName  脚本名(类名)
    * scriptPath  脚本路径
    * source  来源
    * sourceWay  来源的方式
    * srcTmssCaseUri  选择用例中测试步骤生成关键字时的原用例tmssCaseUri
    * tmssCaseUri  tmss用例uri
    * tmssFeatureUri  tmss用例uri
    * tmssProperty  tmssProperty
    * type  类型
    * variableGroupId  环境参数分组id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'activityId' => null,
        'addToPlan' => null,
        'awCataList' => null,
        'awInstance' => null,
        'caseType' => 'int32',
        'caseVariableList' => null,
        'demoFlag' => null,
        'errorStep' => 'int32',
        'id' => null,
        'importInfoList' => null,
        'isKeyWord' => 'int32',
        'isSync' => null,
        'issueId' => null,
        'name' => null,
        'oldTmssCaseUri' => null,
        'oldTmssCaseUriList' => null,
        'packageName' => null,
        'planId' => null,
        'projectId' => null,
        'releaseDev' => null,
        'scriptName' => null,
        'scriptPath' => null,
        'source' => null,
        'sourceWay' => null,
        'srcTmssCaseUri' => null,
        'tmssCaseUri' => null,
        'tmssFeatureUri' => null,
        'tmssProperty' => null,
        'type' => null,
        'variableGroupId' => null
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
    * activityId  活动id
    * addToPlan  是否添加到计划
    * awCataList  创建时可选择导入的aw目录直接产生测试步骤
    * awInstance  awInstance
    * caseType  用例类型：0商用现有类型，1从内部导过来的用例类型
    * caseVariableList  用例局部变量
    * demoFlag  演示标志
    * errorStep  错误测试阶段
    * id  id
    * importInfoList  import信息List
    * isKeyWord  是否设置为关键字操作
    * isSync  是否同步
    * issueId  问题ID
    * name  名称
    * oldTmssCaseUri  被复制用例的tmsscaseuri
    * oldTmssCaseUriList  被复制用例的tmsscaseuri列表，内部使用
    * packageName  包名
    * planId  计划ID
    * projectId  工程ID
    * releaseDev  新服务新建用例版本号
    * scriptName  脚本名(类名)
    * scriptPath  脚本路径
    * source  来源
    * sourceWay  来源的方式
    * srcTmssCaseUri  选择用例中测试步骤生成关键字时的原用例tmssCaseUri
    * tmssCaseUri  tmss用例uri
    * tmssFeatureUri  tmss用例uri
    * tmssProperty  tmssProperty
    * type  类型
    * variableGroupId  环境参数分组id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'activityId' => 'activity_id',
            'addToPlan' => 'addToPlan',
            'awCataList' => 'aw_cata_list',
            'awInstance' => 'aw_instance',
            'caseType' => 'case_type',
            'caseVariableList' => 'case_variable_list',
            'demoFlag' => 'demoFlag',
            'errorStep' => 'errorStep',
            'id' => 'id',
            'importInfoList' => 'import_info_list',
            'isKeyWord' => 'isKeyWord',
            'isSync' => 'isSync',
            'issueId' => 'issueId',
            'name' => 'name',
            'oldTmssCaseUri' => 'old_tmss_case_uri',
            'oldTmssCaseUriList' => 'old_tmss_case_uri_list',
            'packageName' => 'package_name',
            'planId' => 'planId',
            'projectId' => 'project_id',
            'releaseDev' => 'releaseDev',
            'scriptName' => 'script_name',
            'scriptPath' => 'script_path',
            'source' => 'source',
            'sourceWay' => 'sourceWay',
            'srcTmssCaseUri' => 'src_tmss_case_uri',
            'tmssCaseUri' => 'tmss_case_uri',
            'tmssFeatureUri' => 'tmss_feature_uri',
            'tmssProperty' => 'tmss_property',
            'type' => 'type',
            'variableGroupId' => 'variableGroupId'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * activityId  活动id
    * addToPlan  是否添加到计划
    * awCataList  创建时可选择导入的aw目录直接产生测试步骤
    * awInstance  awInstance
    * caseType  用例类型：0商用现有类型，1从内部导过来的用例类型
    * caseVariableList  用例局部变量
    * demoFlag  演示标志
    * errorStep  错误测试阶段
    * id  id
    * importInfoList  import信息List
    * isKeyWord  是否设置为关键字操作
    * isSync  是否同步
    * issueId  问题ID
    * name  名称
    * oldTmssCaseUri  被复制用例的tmsscaseuri
    * oldTmssCaseUriList  被复制用例的tmsscaseuri列表，内部使用
    * packageName  包名
    * planId  计划ID
    * projectId  工程ID
    * releaseDev  新服务新建用例版本号
    * scriptName  脚本名(类名)
    * scriptPath  脚本路径
    * source  来源
    * sourceWay  来源的方式
    * srcTmssCaseUri  选择用例中测试步骤生成关键字时的原用例tmssCaseUri
    * tmssCaseUri  tmss用例uri
    * tmssFeatureUri  tmss用例uri
    * tmssProperty  tmssProperty
    * type  类型
    * variableGroupId  环境参数分组id
    *
    * @var string[]
    */
    protected static $setters = [
            'activityId' => 'setActivityId',
            'addToPlan' => 'setAddToPlan',
            'awCataList' => 'setAwCataList',
            'awInstance' => 'setAwInstance',
            'caseType' => 'setCaseType',
            'caseVariableList' => 'setCaseVariableList',
            'demoFlag' => 'setDemoFlag',
            'errorStep' => 'setErrorStep',
            'id' => 'setId',
            'importInfoList' => 'setImportInfoList',
            'isKeyWord' => 'setIsKeyWord',
            'isSync' => 'setIsSync',
            'issueId' => 'setIssueId',
            'name' => 'setName',
            'oldTmssCaseUri' => 'setOldTmssCaseUri',
            'oldTmssCaseUriList' => 'setOldTmssCaseUriList',
            'packageName' => 'setPackageName',
            'planId' => 'setPlanId',
            'projectId' => 'setProjectId',
            'releaseDev' => 'setReleaseDev',
            'scriptName' => 'setScriptName',
            'scriptPath' => 'setScriptPath',
            'source' => 'setSource',
            'sourceWay' => 'setSourceWay',
            'srcTmssCaseUri' => 'setSrcTmssCaseUri',
            'tmssCaseUri' => 'setTmssCaseUri',
            'tmssFeatureUri' => 'setTmssFeatureUri',
            'tmssProperty' => 'setTmssProperty',
            'type' => 'setType',
            'variableGroupId' => 'setVariableGroupId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * activityId  活动id
    * addToPlan  是否添加到计划
    * awCataList  创建时可选择导入的aw目录直接产生测试步骤
    * awInstance  awInstance
    * caseType  用例类型：0商用现有类型，1从内部导过来的用例类型
    * caseVariableList  用例局部变量
    * demoFlag  演示标志
    * errorStep  错误测试阶段
    * id  id
    * importInfoList  import信息List
    * isKeyWord  是否设置为关键字操作
    * isSync  是否同步
    * issueId  问题ID
    * name  名称
    * oldTmssCaseUri  被复制用例的tmsscaseuri
    * oldTmssCaseUriList  被复制用例的tmsscaseuri列表，内部使用
    * packageName  包名
    * planId  计划ID
    * projectId  工程ID
    * releaseDev  新服务新建用例版本号
    * scriptName  脚本名(类名)
    * scriptPath  脚本路径
    * source  来源
    * sourceWay  来源的方式
    * srcTmssCaseUri  选择用例中测试步骤生成关键字时的原用例tmssCaseUri
    * tmssCaseUri  tmss用例uri
    * tmssFeatureUri  tmss用例uri
    * tmssProperty  tmssProperty
    * type  类型
    * variableGroupId  环境参数分组id
    *
    * @var string[]
    */
    protected static $getters = [
            'activityId' => 'getActivityId',
            'addToPlan' => 'getAddToPlan',
            'awCataList' => 'getAwCataList',
            'awInstance' => 'getAwInstance',
            'caseType' => 'getCaseType',
            'caseVariableList' => 'getCaseVariableList',
            'demoFlag' => 'getDemoFlag',
            'errorStep' => 'getErrorStep',
            'id' => 'getId',
            'importInfoList' => 'getImportInfoList',
            'isKeyWord' => 'getIsKeyWord',
            'isSync' => 'getIsSync',
            'issueId' => 'getIssueId',
            'name' => 'getName',
            'oldTmssCaseUri' => 'getOldTmssCaseUri',
            'oldTmssCaseUriList' => 'getOldTmssCaseUriList',
            'packageName' => 'getPackageName',
            'planId' => 'getPlanId',
            'projectId' => 'getProjectId',
            'releaseDev' => 'getReleaseDev',
            'scriptName' => 'getScriptName',
            'scriptPath' => 'getScriptPath',
            'source' => 'getSource',
            'sourceWay' => 'getSourceWay',
            'srcTmssCaseUri' => 'getSrcTmssCaseUri',
            'tmssCaseUri' => 'getTmssCaseUri',
            'tmssFeatureUri' => 'getTmssFeatureUri',
            'tmssProperty' => 'getTmssProperty',
            'type' => 'getType',
            'variableGroupId' => 'getVariableGroupId'
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
        $this->container['activityId'] = isset($data['activityId']) ? $data['activityId'] : null;
        $this->container['addToPlan'] = isset($data['addToPlan']) ? $data['addToPlan'] : null;
        $this->container['awCataList'] = isset($data['awCataList']) ? $data['awCataList'] : null;
        $this->container['awInstance'] = isset($data['awInstance']) ? $data['awInstance'] : null;
        $this->container['caseType'] = isset($data['caseType']) ? $data['caseType'] : null;
        $this->container['caseVariableList'] = isset($data['caseVariableList']) ? $data['caseVariableList'] : null;
        $this->container['demoFlag'] = isset($data['demoFlag']) ? $data['demoFlag'] : null;
        $this->container['errorStep'] = isset($data['errorStep']) ? $data['errorStep'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['importInfoList'] = isset($data['importInfoList']) ? $data['importInfoList'] : null;
        $this->container['isKeyWord'] = isset($data['isKeyWord']) ? $data['isKeyWord'] : null;
        $this->container['isSync'] = isset($data['isSync']) ? $data['isSync'] : null;
        $this->container['issueId'] = isset($data['issueId']) ? $data['issueId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['oldTmssCaseUri'] = isset($data['oldTmssCaseUri']) ? $data['oldTmssCaseUri'] : null;
        $this->container['oldTmssCaseUriList'] = isset($data['oldTmssCaseUriList']) ? $data['oldTmssCaseUriList'] : null;
        $this->container['packageName'] = isset($data['packageName']) ? $data['packageName'] : null;
        $this->container['planId'] = isset($data['planId']) ? $data['planId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['releaseDev'] = isset($data['releaseDev']) ? $data['releaseDev'] : null;
        $this->container['scriptName'] = isset($data['scriptName']) ? $data['scriptName'] : null;
        $this->container['scriptPath'] = isset($data['scriptPath']) ? $data['scriptPath'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['sourceWay'] = isset($data['sourceWay']) ? $data['sourceWay'] : null;
        $this->container['srcTmssCaseUri'] = isset($data['srcTmssCaseUri']) ? $data['srcTmssCaseUri'] : null;
        $this->container['tmssCaseUri'] = isset($data['tmssCaseUri']) ? $data['tmssCaseUri'] : null;
        $this->container['tmssFeatureUri'] = isset($data['tmssFeatureUri']) ? $data['tmssFeatureUri'] : null;
        $this->container['tmssProperty'] = isset($data['tmssProperty']) ? $data['tmssProperty'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['variableGroupId'] = isset($data['variableGroupId']) ? $data['variableGroupId'] : null;
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
    * Gets activityId
    *  活动id
    *
    * @return string|null
    */
    public function getActivityId()
    {
        return $this->container['activityId'];
    }

    /**
    * Sets activityId
    *
    * @param string|null $activityId 活动id
    *
    * @return $this
    */
    public function setActivityId($activityId)
    {
        $this->container['activityId'] = $activityId;
        return $this;
    }

    /**
    * Gets addToPlan
    *  是否添加到计划
    *
    * @return bool|null
    */
    public function getAddToPlan()
    {
        return $this->container['addToPlan'];
    }

    /**
    * Sets addToPlan
    *
    * @param bool|null $addToPlan 是否添加到计划
    *
    * @return $this
    */
    public function setAddToPlan($addToPlan)
    {
        $this->container['addToPlan'] = $addToPlan;
        return $this;
    }

    /**
    * Gets awCataList
    *  创建时可选择导入的aw目录直接产生测试步骤
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\BasicAwCata[]|null
    */
    public function getAwCataList()
    {
        return $this->container['awCataList'];
    }

    /**
    * Sets awCataList
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\BasicAwCata[]|null $awCataList 创建时可选择导入的aw目录直接产生测试步骤
    *
    * @return $this
    */
    public function setAwCataList($awCataList)
    {
        $this->container['awCataList'] = $awCataList;
        return $this;
    }

    /**
    * Gets awInstance
    *  awInstance
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\CaseAwInstance|null
    */
    public function getAwInstance()
    {
        return $this->container['awInstance'];
    }

    /**
    * Sets awInstance
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\CaseAwInstance|null $awInstance awInstance
    *
    * @return $this
    */
    public function setAwInstance($awInstance)
    {
        $this->container['awInstance'] = $awInstance;
        return $this;
    }

    /**
    * Gets caseType
    *  用例类型：0商用现有类型，1从内部导过来的用例类型
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
    * @param int|null $caseType 用例类型：0商用现有类型，1从内部导过来的用例类型
    *
    * @return $this
    */
    public function setCaseType($caseType)
    {
        $this->container['caseType'] = $caseType;
        return $this;
    }

    /**
    * Gets caseVariableList
    *  用例局部变量
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AwVariable[]|null
    */
    public function getCaseVariableList()
    {
        return $this->container['caseVariableList'];
    }

    /**
    * Sets caseVariableList
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AwVariable[]|null $caseVariableList 用例局部变量
    *
    * @return $this
    */
    public function setCaseVariableList($caseVariableList)
    {
        $this->container['caseVariableList'] = $caseVariableList;
        return $this;
    }

    /**
    * Gets demoFlag
    *  演示标志
    *
    * @return string|null
    */
    public function getDemoFlag()
    {
        return $this->container['demoFlag'];
    }

    /**
    * Sets demoFlag
    *
    * @param string|null $demoFlag 演示标志
    *
    * @return $this
    */
    public function setDemoFlag($demoFlag)
    {
        $this->container['demoFlag'] = $demoFlag;
        return $this;
    }

    /**
    * Gets errorStep
    *  错误测试阶段
    *
    * @return int[]|null
    */
    public function getErrorStep()
    {
        return $this->container['errorStep'];
    }

    /**
    * Sets errorStep
    *
    * @param int[]|null $errorStep 错误测试阶段
    *
    * @return $this
    */
    public function setErrorStep($errorStep)
    {
        $this->container['errorStep'] = $errorStep;
        return $this;
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
    * Gets importInfoList
    *  import信息List
    *
    * @return string[]|null
    */
    public function getImportInfoList()
    {
        return $this->container['importInfoList'];
    }

    /**
    * Sets importInfoList
    *
    * @param string[]|null $importInfoList import信息List
    *
    * @return $this
    */
    public function setImportInfoList($importInfoList)
    {
        $this->container['importInfoList'] = $importInfoList;
        return $this;
    }

    /**
    * Gets isKeyWord
    *  是否设置为关键字操作
    *
    * @return int|null
    */
    public function getIsKeyWord()
    {
        return $this->container['isKeyWord'];
    }

    /**
    * Sets isKeyWord
    *
    * @param int|null $isKeyWord 是否设置为关键字操作
    *
    * @return $this
    */
    public function setIsKeyWord($isKeyWord)
    {
        $this->container['isKeyWord'] = $isKeyWord;
        return $this;
    }

    /**
    * Gets isSync
    *  是否同步
    *
    * @return bool|null
    */
    public function getIsSync()
    {
        return $this->container['isSync'];
    }

    /**
    * Sets isSync
    *
    * @param bool|null $isSync 是否同步
    *
    * @return $this
    */
    public function setIsSync($isSync)
    {
        $this->container['isSync'] = $isSync;
        return $this;
    }

    /**
    * Gets issueId
    *  问题ID
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
    * @param string|null $issueId 问题ID
    *
    * @return $this
    */
    public function setIssueId($issueId)
    {
        $this->container['issueId'] = $issueId;
        return $this;
    }

    /**
    * Gets name
    *  名称
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
    * @param string|null $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets oldTmssCaseUri
    *  被复制用例的tmsscaseuri
    *
    * @return string|null
    */
    public function getOldTmssCaseUri()
    {
        return $this->container['oldTmssCaseUri'];
    }

    /**
    * Sets oldTmssCaseUri
    *
    * @param string|null $oldTmssCaseUri 被复制用例的tmsscaseuri
    *
    * @return $this
    */
    public function setOldTmssCaseUri($oldTmssCaseUri)
    {
        $this->container['oldTmssCaseUri'] = $oldTmssCaseUri;
        return $this;
    }

    /**
    * Gets oldTmssCaseUriList
    *  被复制用例的tmsscaseuri列表，内部使用
    *
    * @return string[]|null
    */
    public function getOldTmssCaseUriList()
    {
        return $this->container['oldTmssCaseUriList'];
    }

    /**
    * Sets oldTmssCaseUriList
    *
    * @param string[]|null $oldTmssCaseUriList 被复制用例的tmsscaseuri列表，内部使用
    *
    * @return $this
    */
    public function setOldTmssCaseUriList($oldTmssCaseUriList)
    {
        $this->container['oldTmssCaseUriList'] = $oldTmssCaseUriList;
        return $this;
    }

    /**
    * Gets packageName
    *  包名
    *
    * @return string|null
    */
    public function getPackageName()
    {
        return $this->container['packageName'];
    }

    /**
    * Sets packageName
    *
    * @param string|null $packageName 包名
    *
    * @return $this
    */
    public function setPackageName($packageName)
    {
        $this->container['packageName'] = $packageName;
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
    * Gets releaseDev
    *  新服务新建用例版本号
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
    * @param string|null $releaseDev 新服务新建用例版本号
    *
    * @return $this
    */
    public function setReleaseDev($releaseDev)
    {
        $this->container['releaseDev'] = $releaseDev;
        return $this;
    }

    /**
    * Gets scriptName
    *  脚本名(类名)
    *
    * @return string|null
    */
    public function getScriptName()
    {
        return $this->container['scriptName'];
    }

    /**
    * Sets scriptName
    *
    * @param string|null $scriptName 脚本名(类名)
    *
    * @return $this
    */
    public function setScriptName($scriptName)
    {
        $this->container['scriptName'] = $scriptName;
        return $this;
    }

    /**
    * Gets scriptPath
    *  脚本路径
    *
    * @return string|null
    */
    public function getScriptPath()
    {
        return $this->container['scriptPath'];
    }

    /**
    * Sets scriptPath
    *
    * @param string|null $scriptPath 脚本路径
    *
    * @return $this
    */
    public function setScriptPath($scriptPath)
    {
        $this->container['scriptPath'] = $scriptPath;
        return $this;
    }

    /**
    * Gets source
    *  来源
    *
    * @return string|null
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param string|null $source 来源
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets sourceWay
    *  来源的方式
    *
    * @return string|null
    */
    public function getSourceWay()
    {
        return $this->container['sourceWay'];
    }

    /**
    * Sets sourceWay
    *
    * @param string|null $sourceWay 来源的方式
    *
    * @return $this
    */
    public function setSourceWay($sourceWay)
    {
        $this->container['sourceWay'] = $sourceWay;
        return $this;
    }

    /**
    * Gets srcTmssCaseUri
    *  选择用例中测试步骤生成关键字时的原用例tmssCaseUri
    *
    * @return string|null
    */
    public function getSrcTmssCaseUri()
    {
        return $this->container['srcTmssCaseUri'];
    }

    /**
    * Sets srcTmssCaseUri
    *
    * @param string|null $srcTmssCaseUri 选择用例中测试步骤生成关键字时的原用例tmssCaseUri
    *
    * @return $this
    */
    public function setSrcTmssCaseUri($srcTmssCaseUri)
    {
        $this->container['srcTmssCaseUri'] = $srcTmssCaseUri;
        return $this;
    }

    /**
    * Gets tmssCaseUri
    *  tmss用例uri
    *
    * @return string|null
    */
    public function getTmssCaseUri()
    {
        return $this->container['tmssCaseUri'];
    }

    /**
    * Sets tmssCaseUri
    *
    * @param string|null $tmssCaseUri tmss用例uri
    *
    * @return $this
    */
    public function setTmssCaseUri($tmssCaseUri)
    {
        $this->container['tmssCaseUri'] = $tmssCaseUri;
        return $this;
    }

    /**
    * Gets tmssFeatureUri
    *  tmss用例uri
    *
    * @return string|null
    */
    public function getTmssFeatureUri()
    {
        return $this->container['tmssFeatureUri'];
    }

    /**
    * Sets tmssFeatureUri
    *
    * @param string|null $tmssFeatureUri tmss用例uri
    *
    * @return $this
    */
    public function setTmssFeatureUri($tmssFeatureUri)
    {
        $this->container['tmssFeatureUri'] = $tmssFeatureUri;
        return $this;
    }

    /**
    * Gets tmssProperty
    *  tmssProperty
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\TmssTestcase|null
    */
    public function getTmssProperty()
    {
        return $this->container['tmssProperty'];
    }

    /**
    * Sets tmssProperty
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\TmssTestcase|null $tmssProperty tmssProperty
    *
    * @return $this
    */
    public function setTmssProperty($tmssProperty)
    {
        $this->container['tmssProperty'] = $tmssProperty;
        return $this;
    }

    /**
    * Gets type
    *  类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets variableGroupId
    *  环境参数分组id
    *
    * @return string|null
    */
    public function getVariableGroupId()
    {
        return $this->container['variableGroupId'];
    }

    /**
    * Sets variableGroupId
    *
    * @param string|null $variableGroupId 环境参数分组id
    *
    * @return $this
    */
    public function setVariableGroupId($variableGroupId)
    {
        $this->container['variableGroupId'] = $variableGroupId;
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

