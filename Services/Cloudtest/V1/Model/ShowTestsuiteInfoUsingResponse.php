<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTestsuiteInfoUsingResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTestsuiteInfoUsingResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alertAction  智能告警开关：0为置灰，1为可用
    * alertConfig  alertConfig
    * buildProducts  流水线启动测试套件，携带构建产物
    * casePackageEnvName  用例环境参数
    * casePackageId  用例包ID
    * casePackageName  用例包名
    * caseTotal  用例总数
    * clientType  客户端类型，deviceTest使用
    * cloudTestSuiteBasicInfo  cloudTestSuiteBasicInfo
    * comments  版本
    * createTime  创建时间
    * createUser  创建人
    * envType  环境类型（内部工具使用）：0表示用例包环境，1表示全局环境
    * environmentGroupId  environmentId环境信息
    * executeStrategies  executeStrategies
    * executorType  用例类型
    * extParams  扩展参数
    * favorite  收藏
    * id  唯一ID，主键
    * ipGroup  ipGroup
    * ipKey  小网拨测替换application的hostIP
    * isDebugTask  任务类型，是否debug任务
    * label  执行标签
    * labelName  商用资源池名称
    * labelType  商用资源池类型
    * lastStopTime  最近一次停止时间
    * locationIds  执行区域，冗余处理，修改更新在执行配置字段
    * name  任务名
    * planId  测试计划Id
    * preTestCaseInfo  preTestCaseInfo
    * resourcePool  resourcePool
    * state  任务状态
    * subtaskId  商用apitest冒烟测试使用
    * subtaskTotal  子任务总数
    * taskTypeId  任务类型：{@link TaskType}
    * testCaseAlertGroups  告警模板列表
    * testCases  测试用例列表
    * testServiceId  项目id
    * testSuiteType  测试套类型，商用版本使用
    * tip  提示信息，用于任务操作过程中需要提供给前端的提示信息
    * updateTime  创建时间
    * updateUser  更新人
    * version  版本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alertAction' => 'string',
            'alertConfig' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AlertConfigVo',
            'buildProducts' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\BuildProduct[]',
            'casePackageEnvName' => 'string',
            'casePackageId' => 'string',
            'casePackageName' => 'string',
            'caseTotal' => 'int',
            'clientType' => 'string',
            'cloudTestSuiteBasicInfo' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\CloudTestSuiteBasicInfo',
            'comments' => 'string',
            'createTime' => '\DateTime',
            'createUser' => 'string',
            'envType' => 'int',
            'environmentGroupId' => 'string',
            'executeStrategies' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\ExecuteStrategiesVo',
            'executorType' => 'string',
            'extParams' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\TaskExtParam[]',
            'favorite' => 'string',
            'id' => 'string',
            'ipGroup' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\IpGroup',
            'ipKey' => 'string',
            'isDebugTask' => 'int',
            'label' => 'string',
            'labelName' => 'string',
            'labelType' => 'string',
            'lastStopTime' => 'int',
            'locationIds' => 'string[]',
            'name' => 'string',
            'planId' => 'string',
            'preTestCaseInfo' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\PreTestCaseInfo',
            'resourcePool' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\ResourcePool',
            'state' => 'int',
            'subtaskId' => 'string',
            'subtaskTotal' => 'int',
            'taskTypeId' => 'string',
            'testCaseAlertGroups' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\TestCaseTemplateVo[]',
            'testCases' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\TestCaseBasicInfo[]',
            'testServiceId' => 'string',
            'testSuiteType' => 'int',
            'tip' => 'string',
            'updateTime' => '\DateTime',
            'updateUser' => 'string',
            'version' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alertAction  智能告警开关：0为置灰，1为可用
    * alertConfig  alertConfig
    * buildProducts  流水线启动测试套件，携带构建产物
    * casePackageEnvName  用例环境参数
    * casePackageId  用例包ID
    * casePackageName  用例包名
    * caseTotal  用例总数
    * clientType  客户端类型，deviceTest使用
    * cloudTestSuiteBasicInfo  cloudTestSuiteBasicInfo
    * comments  版本
    * createTime  创建时间
    * createUser  创建人
    * envType  环境类型（内部工具使用）：0表示用例包环境，1表示全局环境
    * environmentGroupId  environmentId环境信息
    * executeStrategies  executeStrategies
    * executorType  用例类型
    * extParams  扩展参数
    * favorite  收藏
    * id  唯一ID，主键
    * ipGroup  ipGroup
    * ipKey  小网拨测替换application的hostIP
    * isDebugTask  任务类型，是否debug任务
    * label  执行标签
    * labelName  商用资源池名称
    * labelType  商用资源池类型
    * lastStopTime  最近一次停止时间
    * locationIds  执行区域，冗余处理，修改更新在执行配置字段
    * name  任务名
    * planId  测试计划Id
    * preTestCaseInfo  preTestCaseInfo
    * resourcePool  resourcePool
    * state  任务状态
    * subtaskId  商用apitest冒烟测试使用
    * subtaskTotal  子任务总数
    * taskTypeId  任务类型：{@link TaskType}
    * testCaseAlertGroups  告警模板列表
    * testCases  测试用例列表
    * testServiceId  项目id
    * testSuiteType  测试套类型，商用版本使用
    * tip  提示信息，用于任务操作过程中需要提供给前端的提示信息
    * updateTime  创建时间
    * updateUser  更新人
    * version  版本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alertAction' => null,
        'alertConfig' => null,
        'buildProducts' => null,
        'casePackageEnvName' => null,
        'casePackageId' => null,
        'casePackageName' => null,
        'caseTotal' => 'int32',
        'clientType' => null,
        'cloudTestSuiteBasicInfo' => null,
        'comments' => null,
        'createTime' => 'date-time',
        'createUser' => null,
        'envType' => 'int32',
        'environmentGroupId' => null,
        'executeStrategies' => null,
        'executorType' => null,
        'extParams' => null,
        'favorite' => null,
        'id' => null,
        'ipGroup' => null,
        'ipKey' => null,
        'isDebugTask' => 'int32',
        'label' => null,
        'labelName' => null,
        'labelType' => null,
        'lastStopTime' => 'int64',
        'locationIds' => null,
        'name' => null,
        'planId' => null,
        'preTestCaseInfo' => null,
        'resourcePool' => null,
        'state' => 'int32',
        'subtaskId' => null,
        'subtaskTotal' => 'int64',
        'taskTypeId' => null,
        'testCaseAlertGroups' => null,
        'testCases' => null,
        'testServiceId' => null,
        'testSuiteType' => 'int32',
        'tip' => null,
        'updateTime' => 'date-time',
        'updateUser' => null,
        'version' => null
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
    * alertAction  智能告警开关：0为置灰，1为可用
    * alertConfig  alertConfig
    * buildProducts  流水线启动测试套件，携带构建产物
    * casePackageEnvName  用例环境参数
    * casePackageId  用例包ID
    * casePackageName  用例包名
    * caseTotal  用例总数
    * clientType  客户端类型，deviceTest使用
    * cloudTestSuiteBasicInfo  cloudTestSuiteBasicInfo
    * comments  版本
    * createTime  创建时间
    * createUser  创建人
    * envType  环境类型（内部工具使用）：0表示用例包环境，1表示全局环境
    * environmentGroupId  environmentId环境信息
    * executeStrategies  executeStrategies
    * executorType  用例类型
    * extParams  扩展参数
    * favorite  收藏
    * id  唯一ID，主键
    * ipGroup  ipGroup
    * ipKey  小网拨测替换application的hostIP
    * isDebugTask  任务类型，是否debug任务
    * label  执行标签
    * labelName  商用资源池名称
    * labelType  商用资源池类型
    * lastStopTime  最近一次停止时间
    * locationIds  执行区域，冗余处理，修改更新在执行配置字段
    * name  任务名
    * planId  测试计划Id
    * preTestCaseInfo  preTestCaseInfo
    * resourcePool  resourcePool
    * state  任务状态
    * subtaskId  商用apitest冒烟测试使用
    * subtaskTotal  子任务总数
    * taskTypeId  任务类型：{@link TaskType}
    * testCaseAlertGroups  告警模板列表
    * testCases  测试用例列表
    * testServiceId  项目id
    * testSuiteType  测试套类型，商用版本使用
    * tip  提示信息，用于任务操作过程中需要提供给前端的提示信息
    * updateTime  创建时间
    * updateUser  更新人
    * version  版本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alertAction' => 'alertAction',
            'alertConfig' => 'alert_config',
            'buildProducts' => 'build_products',
            'casePackageEnvName' => 'case_package_env_name',
            'casePackageId' => 'case_package_id',
            'casePackageName' => 'case_package_name',
            'caseTotal' => 'case_total',
            'clientType' => 'client_type',
            'cloudTestSuiteBasicInfo' => 'cloudTestSuite_basicInfo',
            'comments' => 'comments',
            'createTime' => 'create_time',
            'createUser' => 'create_user',
            'envType' => 'env_type',
            'environmentGroupId' => 'environment_group_id',
            'executeStrategies' => 'executeStrategies',
            'executorType' => 'executor_type',
            'extParams' => 'extParams',
            'favorite' => 'favorite',
            'id' => 'id',
            'ipGroup' => 'ipGroup',
            'ipKey' => 'ipKey',
            'isDebugTask' => 'isDebugTask',
            'label' => 'label',
            'labelName' => 'labelName',
            'labelType' => 'labelType',
            'lastStopTime' => 'lastStopTime',
            'locationIds' => 'location_ids',
            'name' => 'name',
            'planId' => 'planId',
            'preTestCaseInfo' => 'preTestCaseInfo',
            'resourcePool' => 'resourcePool',
            'state' => 'state',
            'subtaskId' => 'subtask_id',
            'subtaskTotal' => 'subtaskTotal',
            'taskTypeId' => 'taskTypeId',
            'testCaseAlertGroups' => 'testCaseAlertGroups',
            'testCases' => 'testCases',
            'testServiceId' => 'test_service_id',
            'testSuiteType' => 'testSuiteType',
            'tip' => 'tip',
            'updateTime' => 'update_time',
            'updateUser' => 'update_user',
            'version' => 'version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alertAction  智能告警开关：0为置灰，1为可用
    * alertConfig  alertConfig
    * buildProducts  流水线启动测试套件，携带构建产物
    * casePackageEnvName  用例环境参数
    * casePackageId  用例包ID
    * casePackageName  用例包名
    * caseTotal  用例总数
    * clientType  客户端类型，deviceTest使用
    * cloudTestSuiteBasicInfo  cloudTestSuiteBasicInfo
    * comments  版本
    * createTime  创建时间
    * createUser  创建人
    * envType  环境类型（内部工具使用）：0表示用例包环境，1表示全局环境
    * environmentGroupId  environmentId环境信息
    * executeStrategies  executeStrategies
    * executorType  用例类型
    * extParams  扩展参数
    * favorite  收藏
    * id  唯一ID，主键
    * ipGroup  ipGroup
    * ipKey  小网拨测替换application的hostIP
    * isDebugTask  任务类型，是否debug任务
    * label  执行标签
    * labelName  商用资源池名称
    * labelType  商用资源池类型
    * lastStopTime  最近一次停止时间
    * locationIds  执行区域，冗余处理，修改更新在执行配置字段
    * name  任务名
    * planId  测试计划Id
    * preTestCaseInfo  preTestCaseInfo
    * resourcePool  resourcePool
    * state  任务状态
    * subtaskId  商用apitest冒烟测试使用
    * subtaskTotal  子任务总数
    * taskTypeId  任务类型：{@link TaskType}
    * testCaseAlertGroups  告警模板列表
    * testCases  测试用例列表
    * testServiceId  项目id
    * testSuiteType  测试套类型，商用版本使用
    * tip  提示信息，用于任务操作过程中需要提供给前端的提示信息
    * updateTime  创建时间
    * updateUser  更新人
    * version  版本
    *
    * @var string[]
    */
    protected static $setters = [
            'alertAction' => 'setAlertAction',
            'alertConfig' => 'setAlertConfig',
            'buildProducts' => 'setBuildProducts',
            'casePackageEnvName' => 'setCasePackageEnvName',
            'casePackageId' => 'setCasePackageId',
            'casePackageName' => 'setCasePackageName',
            'caseTotal' => 'setCaseTotal',
            'clientType' => 'setClientType',
            'cloudTestSuiteBasicInfo' => 'setCloudTestSuiteBasicInfo',
            'comments' => 'setComments',
            'createTime' => 'setCreateTime',
            'createUser' => 'setCreateUser',
            'envType' => 'setEnvType',
            'environmentGroupId' => 'setEnvironmentGroupId',
            'executeStrategies' => 'setExecuteStrategies',
            'executorType' => 'setExecutorType',
            'extParams' => 'setExtParams',
            'favorite' => 'setFavorite',
            'id' => 'setId',
            'ipGroup' => 'setIpGroup',
            'ipKey' => 'setIpKey',
            'isDebugTask' => 'setIsDebugTask',
            'label' => 'setLabel',
            'labelName' => 'setLabelName',
            'labelType' => 'setLabelType',
            'lastStopTime' => 'setLastStopTime',
            'locationIds' => 'setLocationIds',
            'name' => 'setName',
            'planId' => 'setPlanId',
            'preTestCaseInfo' => 'setPreTestCaseInfo',
            'resourcePool' => 'setResourcePool',
            'state' => 'setState',
            'subtaskId' => 'setSubtaskId',
            'subtaskTotal' => 'setSubtaskTotal',
            'taskTypeId' => 'setTaskTypeId',
            'testCaseAlertGroups' => 'setTestCaseAlertGroups',
            'testCases' => 'setTestCases',
            'testServiceId' => 'setTestServiceId',
            'testSuiteType' => 'setTestSuiteType',
            'tip' => 'setTip',
            'updateTime' => 'setUpdateTime',
            'updateUser' => 'setUpdateUser',
            'version' => 'setVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alertAction  智能告警开关：0为置灰，1为可用
    * alertConfig  alertConfig
    * buildProducts  流水线启动测试套件，携带构建产物
    * casePackageEnvName  用例环境参数
    * casePackageId  用例包ID
    * casePackageName  用例包名
    * caseTotal  用例总数
    * clientType  客户端类型，deviceTest使用
    * cloudTestSuiteBasicInfo  cloudTestSuiteBasicInfo
    * comments  版本
    * createTime  创建时间
    * createUser  创建人
    * envType  环境类型（内部工具使用）：0表示用例包环境，1表示全局环境
    * environmentGroupId  environmentId环境信息
    * executeStrategies  executeStrategies
    * executorType  用例类型
    * extParams  扩展参数
    * favorite  收藏
    * id  唯一ID，主键
    * ipGroup  ipGroup
    * ipKey  小网拨测替换application的hostIP
    * isDebugTask  任务类型，是否debug任务
    * label  执行标签
    * labelName  商用资源池名称
    * labelType  商用资源池类型
    * lastStopTime  最近一次停止时间
    * locationIds  执行区域，冗余处理，修改更新在执行配置字段
    * name  任务名
    * planId  测试计划Id
    * preTestCaseInfo  preTestCaseInfo
    * resourcePool  resourcePool
    * state  任务状态
    * subtaskId  商用apitest冒烟测试使用
    * subtaskTotal  子任务总数
    * taskTypeId  任务类型：{@link TaskType}
    * testCaseAlertGroups  告警模板列表
    * testCases  测试用例列表
    * testServiceId  项目id
    * testSuiteType  测试套类型，商用版本使用
    * tip  提示信息，用于任务操作过程中需要提供给前端的提示信息
    * updateTime  创建时间
    * updateUser  更新人
    * version  版本
    *
    * @var string[]
    */
    protected static $getters = [
            'alertAction' => 'getAlertAction',
            'alertConfig' => 'getAlertConfig',
            'buildProducts' => 'getBuildProducts',
            'casePackageEnvName' => 'getCasePackageEnvName',
            'casePackageId' => 'getCasePackageId',
            'casePackageName' => 'getCasePackageName',
            'caseTotal' => 'getCaseTotal',
            'clientType' => 'getClientType',
            'cloudTestSuiteBasicInfo' => 'getCloudTestSuiteBasicInfo',
            'comments' => 'getComments',
            'createTime' => 'getCreateTime',
            'createUser' => 'getCreateUser',
            'envType' => 'getEnvType',
            'environmentGroupId' => 'getEnvironmentGroupId',
            'executeStrategies' => 'getExecuteStrategies',
            'executorType' => 'getExecutorType',
            'extParams' => 'getExtParams',
            'favorite' => 'getFavorite',
            'id' => 'getId',
            'ipGroup' => 'getIpGroup',
            'ipKey' => 'getIpKey',
            'isDebugTask' => 'getIsDebugTask',
            'label' => 'getLabel',
            'labelName' => 'getLabelName',
            'labelType' => 'getLabelType',
            'lastStopTime' => 'getLastStopTime',
            'locationIds' => 'getLocationIds',
            'name' => 'getName',
            'planId' => 'getPlanId',
            'preTestCaseInfo' => 'getPreTestCaseInfo',
            'resourcePool' => 'getResourcePool',
            'state' => 'getState',
            'subtaskId' => 'getSubtaskId',
            'subtaskTotal' => 'getSubtaskTotal',
            'taskTypeId' => 'getTaskTypeId',
            'testCaseAlertGroups' => 'getTestCaseAlertGroups',
            'testCases' => 'getTestCases',
            'testServiceId' => 'getTestServiceId',
            'testSuiteType' => 'getTestSuiteType',
            'tip' => 'getTip',
            'updateTime' => 'getUpdateTime',
            'updateUser' => 'getUpdateUser',
            'version' => 'getVersion'
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
        $this->container['alertAction'] = isset($data['alertAction']) ? $data['alertAction'] : null;
        $this->container['alertConfig'] = isset($data['alertConfig']) ? $data['alertConfig'] : null;
        $this->container['buildProducts'] = isset($data['buildProducts']) ? $data['buildProducts'] : null;
        $this->container['casePackageEnvName'] = isset($data['casePackageEnvName']) ? $data['casePackageEnvName'] : null;
        $this->container['casePackageId'] = isset($data['casePackageId']) ? $data['casePackageId'] : null;
        $this->container['casePackageName'] = isset($data['casePackageName']) ? $data['casePackageName'] : null;
        $this->container['caseTotal'] = isset($data['caseTotal']) ? $data['caseTotal'] : null;
        $this->container['clientType'] = isset($data['clientType']) ? $data['clientType'] : null;
        $this->container['cloudTestSuiteBasicInfo'] = isset($data['cloudTestSuiteBasicInfo']) ? $data['cloudTestSuiteBasicInfo'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['envType'] = isset($data['envType']) ? $data['envType'] : null;
        $this->container['environmentGroupId'] = isset($data['environmentGroupId']) ? $data['environmentGroupId'] : null;
        $this->container['executeStrategies'] = isset($data['executeStrategies']) ? $data['executeStrategies'] : null;
        $this->container['executorType'] = isset($data['executorType']) ? $data['executorType'] : null;
        $this->container['extParams'] = isset($data['extParams']) ? $data['extParams'] : null;
        $this->container['favorite'] = isset($data['favorite']) ? $data['favorite'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['ipGroup'] = isset($data['ipGroup']) ? $data['ipGroup'] : null;
        $this->container['ipKey'] = isset($data['ipKey']) ? $data['ipKey'] : null;
        $this->container['isDebugTask'] = isset($data['isDebugTask']) ? $data['isDebugTask'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['labelName'] = isset($data['labelName']) ? $data['labelName'] : null;
        $this->container['labelType'] = isset($data['labelType']) ? $data['labelType'] : null;
        $this->container['lastStopTime'] = isset($data['lastStopTime']) ? $data['lastStopTime'] : null;
        $this->container['locationIds'] = isset($data['locationIds']) ? $data['locationIds'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['planId'] = isset($data['planId']) ? $data['planId'] : null;
        $this->container['preTestCaseInfo'] = isset($data['preTestCaseInfo']) ? $data['preTestCaseInfo'] : null;
        $this->container['resourcePool'] = isset($data['resourcePool']) ? $data['resourcePool'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['subtaskId'] = isset($data['subtaskId']) ? $data['subtaskId'] : null;
        $this->container['subtaskTotal'] = isset($data['subtaskTotal']) ? $data['subtaskTotal'] : null;
        $this->container['taskTypeId'] = isset($data['taskTypeId']) ? $data['taskTypeId'] : null;
        $this->container['testCaseAlertGroups'] = isset($data['testCaseAlertGroups']) ? $data['testCaseAlertGroups'] : null;
        $this->container['testCases'] = isset($data['testCases']) ? $data['testCases'] : null;
        $this->container['testServiceId'] = isset($data['testServiceId']) ? $data['testServiceId'] : null;
        $this->container['testSuiteType'] = isset($data['testSuiteType']) ? $data['testSuiteType'] : null;
        $this->container['tip'] = isset($data['tip']) ? $data['tip'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['updateUser'] = isset($data['updateUser']) ? $data['updateUser'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
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
    * Gets alertAction
    *  智能告警开关：0为置灰，1为可用
    *
    * @return string|null
    */
    public function getAlertAction()
    {
        return $this->container['alertAction'];
    }

    /**
    * Sets alertAction
    *
    * @param string|null $alertAction 智能告警开关：0为置灰，1为可用
    *
    * @return $this
    */
    public function setAlertAction($alertAction)
    {
        $this->container['alertAction'] = $alertAction;
        return $this;
    }

    /**
    * Gets alertConfig
    *  alertConfig
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AlertConfigVo|null
    */
    public function getAlertConfig()
    {
        return $this->container['alertConfig'];
    }

    /**
    * Sets alertConfig
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AlertConfigVo|null $alertConfig alertConfig
    *
    * @return $this
    */
    public function setAlertConfig($alertConfig)
    {
        $this->container['alertConfig'] = $alertConfig;
        return $this;
    }

    /**
    * Gets buildProducts
    *  流水线启动测试套件，携带构建产物
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\BuildProduct[]|null
    */
    public function getBuildProducts()
    {
        return $this->container['buildProducts'];
    }

    /**
    * Sets buildProducts
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\BuildProduct[]|null $buildProducts 流水线启动测试套件，携带构建产物
    *
    * @return $this
    */
    public function setBuildProducts($buildProducts)
    {
        $this->container['buildProducts'] = $buildProducts;
        return $this;
    }

    /**
    * Gets casePackageEnvName
    *  用例环境参数
    *
    * @return string|null
    */
    public function getCasePackageEnvName()
    {
        return $this->container['casePackageEnvName'];
    }

    /**
    * Sets casePackageEnvName
    *
    * @param string|null $casePackageEnvName 用例环境参数
    *
    * @return $this
    */
    public function setCasePackageEnvName($casePackageEnvName)
    {
        $this->container['casePackageEnvName'] = $casePackageEnvName;
        return $this;
    }

    /**
    * Gets casePackageId
    *  用例包ID
    *
    * @return string|null
    */
    public function getCasePackageId()
    {
        return $this->container['casePackageId'];
    }

    /**
    * Sets casePackageId
    *
    * @param string|null $casePackageId 用例包ID
    *
    * @return $this
    */
    public function setCasePackageId($casePackageId)
    {
        $this->container['casePackageId'] = $casePackageId;
        return $this;
    }

    /**
    * Gets casePackageName
    *  用例包名
    *
    * @return string|null
    */
    public function getCasePackageName()
    {
        return $this->container['casePackageName'];
    }

    /**
    * Sets casePackageName
    *
    * @param string|null $casePackageName 用例包名
    *
    * @return $this
    */
    public function setCasePackageName($casePackageName)
    {
        $this->container['casePackageName'] = $casePackageName;
        return $this;
    }

    /**
    * Gets caseTotal
    *  用例总数
    *
    * @return int|null
    */
    public function getCaseTotal()
    {
        return $this->container['caseTotal'];
    }

    /**
    * Sets caseTotal
    *
    * @param int|null $caseTotal 用例总数
    *
    * @return $this
    */
    public function setCaseTotal($caseTotal)
    {
        $this->container['caseTotal'] = $caseTotal;
        return $this;
    }

    /**
    * Gets clientType
    *  客户端类型，deviceTest使用
    *
    * @return string|null
    */
    public function getClientType()
    {
        return $this->container['clientType'];
    }

    /**
    * Sets clientType
    *
    * @param string|null $clientType 客户端类型，deviceTest使用
    *
    * @return $this
    */
    public function setClientType($clientType)
    {
        $this->container['clientType'] = $clientType;
        return $this;
    }

    /**
    * Gets cloudTestSuiteBasicInfo
    *  cloudTestSuiteBasicInfo
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\CloudTestSuiteBasicInfo|null
    */
    public function getCloudTestSuiteBasicInfo()
    {
        return $this->container['cloudTestSuiteBasicInfo'];
    }

    /**
    * Sets cloudTestSuiteBasicInfo
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\CloudTestSuiteBasicInfo|null $cloudTestSuiteBasicInfo cloudTestSuiteBasicInfo
    *
    * @return $this
    */
    public function setCloudTestSuiteBasicInfo($cloudTestSuiteBasicInfo)
    {
        $this->container['cloudTestSuiteBasicInfo'] = $cloudTestSuiteBasicInfo;
        return $this;
    }

    /**
    * Gets comments
    *  版本
    *
    * @return string|null
    */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
    * Sets comments
    *
    * @param string|null $comments 版本
    *
    * @return $this
    */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;
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
    * Gets createUser
    *  创建人
    *
    * @return string|null
    */
    public function getCreateUser()
    {
        return $this->container['createUser'];
    }

    /**
    * Sets createUser
    *
    * @param string|null $createUser 创建人
    *
    * @return $this
    */
    public function setCreateUser($createUser)
    {
        $this->container['createUser'] = $createUser;
        return $this;
    }

    /**
    * Gets envType
    *  环境类型（内部工具使用）：0表示用例包环境，1表示全局环境
    *
    * @return int|null
    */
    public function getEnvType()
    {
        return $this->container['envType'];
    }

    /**
    * Sets envType
    *
    * @param int|null $envType 环境类型（内部工具使用）：0表示用例包环境，1表示全局环境
    *
    * @return $this
    */
    public function setEnvType($envType)
    {
        $this->container['envType'] = $envType;
        return $this;
    }

    /**
    * Gets environmentGroupId
    *  environmentId环境信息
    *
    * @return string|null
    */
    public function getEnvironmentGroupId()
    {
        return $this->container['environmentGroupId'];
    }

    /**
    * Sets environmentGroupId
    *
    * @param string|null $environmentGroupId environmentId环境信息
    *
    * @return $this
    */
    public function setEnvironmentGroupId($environmentGroupId)
    {
        $this->container['environmentGroupId'] = $environmentGroupId;
        return $this;
    }

    /**
    * Gets executeStrategies
    *  executeStrategies
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\ExecuteStrategiesVo|null
    */
    public function getExecuteStrategies()
    {
        return $this->container['executeStrategies'];
    }

    /**
    * Sets executeStrategies
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\ExecuteStrategiesVo|null $executeStrategies executeStrategies
    *
    * @return $this
    */
    public function setExecuteStrategies($executeStrategies)
    {
        $this->container['executeStrategies'] = $executeStrategies;
        return $this;
    }

    /**
    * Gets executorType
    *  用例类型
    *
    * @return string|null
    */
    public function getExecutorType()
    {
        return $this->container['executorType'];
    }

    /**
    * Sets executorType
    *
    * @param string|null $executorType 用例类型
    *
    * @return $this
    */
    public function setExecutorType($executorType)
    {
        $this->container['executorType'] = $executorType;
        return $this;
    }

    /**
    * Gets extParams
    *  扩展参数
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\TaskExtParam[]|null
    */
    public function getExtParams()
    {
        return $this->container['extParams'];
    }

    /**
    * Sets extParams
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\TaskExtParam[]|null $extParams 扩展参数
    *
    * @return $this
    */
    public function setExtParams($extParams)
    {
        $this->container['extParams'] = $extParams;
        return $this;
    }

    /**
    * Gets favorite
    *  收藏
    *
    * @return string|null
    */
    public function getFavorite()
    {
        return $this->container['favorite'];
    }

    /**
    * Sets favorite
    *
    * @param string|null $favorite 收藏
    *
    * @return $this
    */
    public function setFavorite($favorite)
    {
        $this->container['favorite'] = $favorite;
        return $this;
    }

    /**
    * Gets id
    *  唯一ID，主键
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
    * @param string|null $id 唯一ID，主键
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets ipGroup
    *  ipGroup
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\IpGroup|null
    */
    public function getIpGroup()
    {
        return $this->container['ipGroup'];
    }

    /**
    * Sets ipGroup
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\IpGroup|null $ipGroup ipGroup
    *
    * @return $this
    */
    public function setIpGroup($ipGroup)
    {
        $this->container['ipGroup'] = $ipGroup;
        return $this;
    }

    /**
    * Gets ipKey
    *  小网拨测替换application的hostIP
    *
    * @return string|null
    */
    public function getIpKey()
    {
        return $this->container['ipKey'];
    }

    /**
    * Sets ipKey
    *
    * @param string|null $ipKey 小网拨测替换application的hostIP
    *
    * @return $this
    */
    public function setIpKey($ipKey)
    {
        $this->container['ipKey'] = $ipKey;
        return $this;
    }

    /**
    * Gets isDebugTask
    *  任务类型，是否debug任务
    *
    * @return int|null
    */
    public function getIsDebugTask()
    {
        return $this->container['isDebugTask'];
    }

    /**
    * Sets isDebugTask
    *
    * @param int|null $isDebugTask 任务类型，是否debug任务
    *
    * @return $this
    */
    public function setIsDebugTask($isDebugTask)
    {
        $this->container['isDebugTask'] = $isDebugTask;
        return $this;
    }

    /**
    * Gets label
    *  执行标签
    *
    * @return string|null
    */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
    * Sets label
    *
    * @param string|null $label 执行标签
    *
    * @return $this
    */
    public function setLabel($label)
    {
        $this->container['label'] = $label;
        return $this;
    }

    /**
    * Gets labelName
    *  商用资源池名称
    *
    * @return string|null
    */
    public function getLabelName()
    {
        return $this->container['labelName'];
    }

    /**
    * Sets labelName
    *
    * @param string|null $labelName 商用资源池名称
    *
    * @return $this
    */
    public function setLabelName($labelName)
    {
        $this->container['labelName'] = $labelName;
        return $this;
    }

    /**
    * Gets labelType
    *  商用资源池类型
    *
    * @return string|null
    */
    public function getLabelType()
    {
        return $this->container['labelType'];
    }

    /**
    * Sets labelType
    *
    * @param string|null $labelType 商用资源池类型
    *
    * @return $this
    */
    public function setLabelType($labelType)
    {
        $this->container['labelType'] = $labelType;
        return $this;
    }

    /**
    * Gets lastStopTime
    *  最近一次停止时间
    *
    * @return int|null
    */
    public function getLastStopTime()
    {
        return $this->container['lastStopTime'];
    }

    /**
    * Sets lastStopTime
    *
    * @param int|null $lastStopTime 最近一次停止时间
    *
    * @return $this
    */
    public function setLastStopTime($lastStopTime)
    {
        $this->container['lastStopTime'] = $lastStopTime;
        return $this;
    }

    /**
    * Gets locationIds
    *  执行区域，冗余处理，修改更新在执行配置字段
    *
    * @return string[]|null
    */
    public function getLocationIds()
    {
        return $this->container['locationIds'];
    }

    /**
    * Sets locationIds
    *
    * @param string[]|null $locationIds 执行区域，冗余处理，修改更新在执行配置字段
    *
    * @return $this
    */
    public function setLocationIds($locationIds)
    {
        $this->container['locationIds'] = $locationIds;
        return $this;
    }

    /**
    * Gets name
    *  任务名
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
    * @param string|null $name 任务名
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets planId
    *  测试计划Id
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
    * @param string|null $planId 测试计划Id
    *
    * @return $this
    */
    public function setPlanId($planId)
    {
        $this->container['planId'] = $planId;
        return $this;
    }

    /**
    * Gets preTestCaseInfo
    *  preTestCaseInfo
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\PreTestCaseInfo|null
    */
    public function getPreTestCaseInfo()
    {
        return $this->container['preTestCaseInfo'];
    }

    /**
    * Sets preTestCaseInfo
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\PreTestCaseInfo|null $preTestCaseInfo preTestCaseInfo
    *
    * @return $this
    */
    public function setPreTestCaseInfo($preTestCaseInfo)
    {
        $this->container['preTestCaseInfo'] = $preTestCaseInfo;
        return $this;
    }

    /**
    * Gets resourcePool
    *  resourcePool
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\ResourcePool|null
    */
    public function getResourcePool()
    {
        return $this->container['resourcePool'];
    }

    /**
    * Sets resourcePool
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\ResourcePool|null $resourcePool resourcePool
    *
    * @return $this
    */
    public function setResourcePool($resourcePool)
    {
        $this->container['resourcePool'] = $resourcePool;
        return $this;
    }

    /**
    * Gets state
    *  任务状态
    *
    * @return int|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param int|null $state 任务状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets subtaskId
    *  商用apitest冒烟测试使用
    *
    * @return string|null
    */
    public function getSubtaskId()
    {
        return $this->container['subtaskId'];
    }

    /**
    * Sets subtaskId
    *
    * @param string|null $subtaskId 商用apitest冒烟测试使用
    *
    * @return $this
    */
    public function setSubtaskId($subtaskId)
    {
        $this->container['subtaskId'] = $subtaskId;
        return $this;
    }

    /**
    * Gets subtaskTotal
    *  子任务总数
    *
    * @return int|null
    */
    public function getSubtaskTotal()
    {
        return $this->container['subtaskTotal'];
    }

    /**
    * Sets subtaskTotal
    *
    * @param int|null $subtaskTotal 子任务总数
    *
    * @return $this
    */
    public function setSubtaskTotal($subtaskTotal)
    {
        $this->container['subtaskTotal'] = $subtaskTotal;
        return $this;
    }

    /**
    * Gets taskTypeId
    *  任务类型：{@link TaskType}
    *
    * @return string|null
    */
    public function getTaskTypeId()
    {
        return $this->container['taskTypeId'];
    }

    /**
    * Sets taskTypeId
    *
    * @param string|null $taskTypeId 任务类型：{@link TaskType}
    *
    * @return $this
    */
    public function setTaskTypeId($taskTypeId)
    {
        $this->container['taskTypeId'] = $taskTypeId;
        return $this;
    }

    /**
    * Gets testCaseAlertGroups
    *  告警模板列表
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\TestCaseTemplateVo[]|null
    */
    public function getTestCaseAlertGroups()
    {
        return $this->container['testCaseAlertGroups'];
    }

    /**
    * Sets testCaseAlertGroups
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\TestCaseTemplateVo[]|null $testCaseAlertGroups 告警模板列表
    *
    * @return $this
    */
    public function setTestCaseAlertGroups($testCaseAlertGroups)
    {
        $this->container['testCaseAlertGroups'] = $testCaseAlertGroups;
        return $this;
    }

    /**
    * Gets testCases
    *  测试用例列表
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\TestCaseBasicInfo[]|null
    */
    public function getTestCases()
    {
        return $this->container['testCases'];
    }

    /**
    * Sets testCases
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\TestCaseBasicInfo[]|null $testCases 测试用例列表
    *
    * @return $this
    */
    public function setTestCases($testCases)
    {
        $this->container['testCases'] = $testCases;
        return $this;
    }

    /**
    * Gets testServiceId
    *  项目id
    *
    * @return string|null
    */
    public function getTestServiceId()
    {
        return $this->container['testServiceId'];
    }

    /**
    * Sets testServiceId
    *
    * @param string|null $testServiceId 项目id
    *
    * @return $this
    */
    public function setTestServiceId($testServiceId)
    {
        $this->container['testServiceId'] = $testServiceId;
        return $this;
    }

    /**
    * Gets testSuiteType
    *  测试套类型，商用版本使用
    *
    * @return int|null
    */
    public function getTestSuiteType()
    {
        return $this->container['testSuiteType'];
    }

    /**
    * Sets testSuiteType
    *
    * @param int|null $testSuiteType 测试套类型，商用版本使用
    *
    * @return $this
    */
    public function setTestSuiteType($testSuiteType)
    {
        $this->container['testSuiteType'] = $testSuiteType;
        return $this;
    }

    /**
    * Gets tip
    *  提示信息，用于任务操作过程中需要提供给前端的提示信息
    *
    * @return string|null
    */
    public function getTip()
    {
        return $this->container['tip'];
    }

    /**
    * Sets tip
    *
    * @param string|null $tip 提示信息，用于任务操作过程中需要提供给前端的提示信息
    *
    * @return $this
    */
    public function setTip($tip)
    {
        $this->container['tip'] = $tip;
        return $this;
    }

    /**
    * Gets updateTime
    *  创建时间
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
    * @param \DateTime|null $updateTime 创建时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets updateUser
    *  更新人
    *
    * @return string|null
    */
    public function getUpdateUser()
    {
        return $this->container['updateUser'];
    }

    /**
    * Sets updateUser
    *
    * @param string|null $updateUser 更新人
    *
    * @return $this
    */
    public function setUpdateUser($updateUser)
    {
        $this->container['updateUser'] = $updateUser;
        return $this;
    }

    /**
    * Gets version
    *  版本
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
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

