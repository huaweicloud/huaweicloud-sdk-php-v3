<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uri  指定创建任务的uri
    * versionUri  分支/迭代uri
    * name  名称
    * ownerId  处理人/责任人id
    * parentUri  父任务uri
    * testCaseCondition  动态任务用例过滤条件
    * stage  测试阶段
    * serviceType  服务类型0:功能测试 1:接口测试 11:性能测试
    * number  编号
    * tags  标记id
    * moduleId  模块id
    * moduleName  模块名称
    * releaseDev  发布版本号
    * statusCode  状态code
    * extParam  扩展参数
    * executeWay  执行方式 1：串行，2：并行
    * executeType  执行类型（0：冒烟，1：定时）
    * description  描述
    * planStartTimestamp  计划开始时间戳，当传入-1时，时间置为空
    * planEndTimestamp  计划结束时间戳，当传入-1时，时间置为空
    * region  区域
    * assignCaseUris  任务关联用例uri数组，CloudDragon环境
    * caseOperationInfo  caseOperationInfo
    * onlyUpdateStatus  是否只需要修改测试套状态
    * isAsync  是否异步
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uri' => 'string',
            'versionUri' => 'string',
            'name' => 'string',
            'ownerId' => 'string',
            'parentUri' => 'string',
            'testCaseCondition' => 'string',
            'stage' => 'string',
            'serviceType' => 'int',
            'number' => 'string',
            'tags' => 'string[]',
            'moduleId' => 'string',
            'moduleName' => 'string',
            'releaseDev' => 'string',
            'statusCode' => 'int',
            'extParam' => 'string',
            'executeWay' => 'int',
            'executeType' => 'int',
            'description' => 'string',
            'planStartTimestamp' => 'int',
            'planEndTimestamp' => 'int',
            'region' => 'string',
            'assignCaseUris' => 'string[]',
            'caseOperationInfo' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\CaseOperationInfo',
            'onlyUpdateStatus' => 'bool',
            'isAsync' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uri  指定创建任务的uri
    * versionUri  分支/迭代uri
    * name  名称
    * ownerId  处理人/责任人id
    * parentUri  父任务uri
    * testCaseCondition  动态任务用例过滤条件
    * stage  测试阶段
    * serviceType  服务类型0:功能测试 1:接口测试 11:性能测试
    * number  编号
    * tags  标记id
    * moduleId  模块id
    * moduleName  模块名称
    * releaseDev  发布版本号
    * statusCode  状态code
    * extParam  扩展参数
    * executeWay  执行方式 1：串行，2：并行
    * executeType  执行类型（0：冒烟，1：定时）
    * description  描述
    * planStartTimestamp  计划开始时间戳，当传入-1时，时间置为空
    * planEndTimestamp  计划结束时间戳，当传入-1时，时间置为空
    * region  区域
    * assignCaseUris  任务关联用例uri数组，CloudDragon环境
    * caseOperationInfo  caseOperationInfo
    * onlyUpdateStatus  是否只需要修改测试套状态
    * isAsync  是否异步
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uri' => null,
        'versionUri' => null,
        'name' => null,
        'ownerId' => null,
        'parentUri' => null,
        'testCaseCondition' => null,
        'stage' => null,
        'serviceType' => null,
        'number' => null,
        'tags' => null,
        'moduleId' => null,
        'moduleName' => null,
        'releaseDev' => null,
        'statusCode' => null,
        'extParam' => null,
        'executeWay' => null,
        'executeType' => null,
        'description' => null,
        'planStartTimestamp' => 'int64',
        'planEndTimestamp' => 'int64',
        'region' => null,
        'assignCaseUris' => null,
        'caseOperationInfo' => null,
        'onlyUpdateStatus' => null,
        'isAsync' => null
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
    * uri  指定创建任务的uri
    * versionUri  分支/迭代uri
    * name  名称
    * ownerId  处理人/责任人id
    * parentUri  父任务uri
    * testCaseCondition  动态任务用例过滤条件
    * stage  测试阶段
    * serviceType  服务类型0:功能测试 1:接口测试 11:性能测试
    * number  编号
    * tags  标记id
    * moduleId  模块id
    * moduleName  模块名称
    * releaseDev  发布版本号
    * statusCode  状态code
    * extParam  扩展参数
    * executeWay  执行方式 1：串行，2：并行
    * executeType  执行类型（0：冒烟，1：定时）
    * description  描述
    * planStartTimestamp  计划开始时间戳，当传入-1时，时间置为空
    * planEndTimestamp  计划结束时间戳，当传入-1时，时间置为空
    * region  区域
    * assignCaseUris  任务关联用例uri数组，CloudDragon环境
    * caseOperationInfo  caseOperationInfo
    * onlyUpdateStatus  是否只需要修改测试套状态
    * isAsync  是否异步
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uri' => 'uri',
            'versionUri' => 'version_uri',
            'name' => 'name',
            'ownerId' => 'owner_id',
            'parentUri' => 'parent_uri',
            'testCaseCondition' => 'test_case_condition',
            'stage' => 'stage',
            'serviceType' => 'service_type',
            'number' => 'number',
            'tags' => 'tags',
            'moduleId' => 'module_id',
            'moduleName' => 'module_name',
            'releaseDev' => 'release_dev',
            'statusCode' => 'status_code',
            'extParam' => 'ext_param',
            'executeWay' => 'execute_way',
            'executeType' => 'execute_type',
            'description' => 'description',
            'planStartTimestamp' => 'plan_start_timestamp',
            'planEndTimestamp' => 'plan_end_timestamp',
            'region' => 'region',
            'assignCaseUris' => 'assign_case_uris',
            'caseOperationInfo' => 'case_operation_info',
            'onlyUpdateStatus' => 'only_update_status',
            'isAsync' => 'is_async'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uri  指定创建任务的uri
    * versionUri  分支/迭代uri
    * name  名称
    * ownerId  处理人/责任人id
    * parentUri  父任务uri
    * testCaseCondition  动态任务用例过滤条件
    * stage  测试阶段
    * serviceType  服务类型0:功能测试 1:接口测试 11:性能测试
    * number  编号
    * tags  标记id
    * moduleId  模块id
    * moduleName  模块名称
    * releaseDev  发布版本号
    * statusCode  状态code
    * extParam  扩展参数
    * executeWay  执行方式 1：串行，2：并行
    * executeType  执行类型（0：冒烟，1：定时）
    * description  描述
    * planStartTimestamp  计划开始时间戳，当传入-1时，时间置为空
    * planEndTimestamp  计划结束时间戳，当传入-1时，时间置为空
    * region  区域
    * assignCaseUris  任务关联用例uri数组，CloudDragon环境
    * caseOperationInfo  caseOperationInfo
    * onlyUpdateStatus  是否只需要修改测试套状态
    * isAsync  是否异步
    *
    * @var string[]
    */
    protected static $setters = [
            'uri' => 'setUri',
            'versionUri' => 'setVersionUri',
            'name' => 'setName',
            'ownerId' => 'setOwnerId',
            'parentUri' => 'setParentUri',
            'testCaseCondition' => 'setTestCaseCondition',
            'stage' => 'setStage',
            'serviceType' => 'setServiceType',
            'number' => 'setNumber',
            'tags' => 'setTags',
            'moduleId' => 'setModuleId',
            'moduleName' => 'setModuleName',
            'releaseDev' => 'setReleaseDev',
            'statusCode' => 'setStatusCode',
            'extParam' => 'setExtParam',
            'executeWay' => 'setExecuteWay',
            'executeType' => 'setExecuteType',
            'description' => 'setDescription',
            'planStartTimestamp' => 'setPlanStartTimestamp',
            'planEndTimestamp' => 'setPlanEndTimestamp',
            'region' => 'setRegion',
            'assignCaseUris' => 'setAssignCaseUris',
            'caseOperationInfo' => 'setCaseOperationInfo',
            'onlyUpdateStatus' => 'setOnlyUpdateStatus',
            'isAsync' => 'setIsAsync'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uri  指定创建任务的uri
    * versionUri  分支/迭代uri
    * name  名称
    * ownerId  处理人/责任人id
    * parentUri  父任务uri
    * testCaseCondition  动态任务用例过滤条件
    * stage  测试阶段
    * serviceType  服务类型0:功能测试 1:接口测试 11:性能测试
    * number  编号
    * tags  标记id
    * moduleId  模块id
    * moduleName  模块名称
    * releaseDev  发布版本号
    * statusCode  状态code
    * extParam  扩展参数
    * executeWay  执行方式 1：串行，2：并行
    * executeType  执行类型（0：冒烟，1：定时）
    * description  描述
    * planStartTimestamp  计划开始时间戳，当传入-1时，时间置为空
    * planEndTimestamp  计划结束时间戳，当传入-1时，时间置为空
    * region  区域
    * assignCaseUris  任务关联用例uri数组，CloudDragon环境
    * caseOperationInfo  caseOperationInfo
    * onlyUpdateStatus  是否只需要修改测试套状态
    * isAsync  是否异步
    *
    * @var string[]
    */
    protected static $getters = [
            'uri' => 'getUri',
            'versionUri' => 'getVersionUri',
            'name' => 'getName',
            'ownerId' => 'getOwnerId',
            'parentUri' => 'getParentUri',
            'testCaseCondition' => 'getTestCaseCondition',
            'stage' => 'getStage',
            'serviceType' => 'getServiceType',
            'number' => 'getNumber',
            'tags' => 'getTags',
            'moduleId' => 'getModuleId',
            'moduleName' => 'getModuleName',
            'releaseDev' => 'getReleaseDev',
            'statusCode' => 'getStatusCode',
            'extParam' => 'getExtParam',
            'executeWay' => 'getExecuteWay',
            'executeType' => 'getExecuteType',
            'description' => 'getDescription',
            'planStartTimestamp' => 'getPlanStartTimestamp',
            'planEndTimestamp' => 'getPlanEndTimestamp',
            'region' => 'getRegion',
            'assignCaseUris' => 'getAssignCaseUris',
            'caseOperationInfo' => 'getCaseOperationInfo',
            'onlyUpdateStatus' => 'getOnlyUpdateStatus',
            'isAsync' => 'getIsAsync'
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
        $this->container['versionUri'] = isset($data['versionUri']) ? $data['versionUri'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ownerId'] = isset($data['ownerId']) ? $data['ownerId'] : null;
        $this->container['parentUri'] = isset($data['parentUri']) ? $data['parentUri'] : null;
        $this->container['testCaseCondition'] = isset($data['testCaseCondition']) ? $data['testCaseCondition'] : null;
        $this->container['stage'] = isset($data['stage']) ? $data['stage'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['moduleId'] = isset($data['moduleId']) ? $data['moduleId'] : null;
        $this->container['moduleName'] = isset($data['moduleName']) ? $data['moduleName'] : null;
        $this->container['releaseDev'] = isset($data['releaseDev']) ? $data['releaseDev'] : null;
        $this->container['statusCode'] = isset($data['statusCode']) ? $data['statusCode'] : null;
        $this->container['extParam'] = isset($data['extParam']) ? $data['extParam'] : null;
        $this->container['executeWay'] = isset($data['executeWay']) ? $data['executeWay'] : null;
        $this->container['executeType'] = isset($data['executeType']) ? $data['executeType'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['planStartTimestamp'] = isset($data['planStartTimestamp']) ? $data['planStartTimestamp'] : null;
        $this->container['planEndTimestamp'] = isset($data['planEndTimestamp']) ? $data['planEndTimestamp'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['assignCaseUris'] = isset($data['assignCaseUris']) ? $data['assignCaseUris'] : null;
        $this->container['caseOperationInfo'] = isset($data['caseOperationInfo']) ? $data['caseOperationInfo'] : null;
        $this->container['onlyUpdateStatus'] = isset($data['onlyUpdateStatus']) ? $data['onlyUpdateStatus'] : null;
        $this->container['isAsync'] = isset($data['isAsync']) ? $data['isAsync'] : null;
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
    *  指定创建任务的uri
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
    * @param string|null $uri 指定创建任务的uri
    *
    * @return $this
    */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;
        return $this;
    }

    /**
    * Gets versionUri
    *  分支/迭代uri
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
    * @param string|null $versionUri 分支/迭代uri
    *
    * @return $this
    */
    public function setVersionUri($versionUri)
    {
        $this->container['versionUri'] = $versionUri;
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
    * Gets ownerId
    *  处理人/责任人id
    *
    * @return string|null
    */
    public function getOwnerId()
    {
        return $this->container['ownerId'];
    }

    /**
    * Sets ownerId
    *
    * @param string|null $ownerId 处理人/责任人id
    *
    * @return $this
    */
    public function setOwnerId($ownerId)
    {
        $this->container['ownerId'] = $ownerId;
        return $this;
    }

    /**
    * Gets parentUri
    *  父任务uri
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
    * @param string|null $parentUri 父任务uri
    *
    * @return $this
    */
    public function setParentUri($parentUri)
    {
        $this->container['parentUri'] = $parentUri;
        return $this;
    }

    /**
    * Gets testCaseCondition
    *  动态任务用例过滤条件
    *
    * @return string|null
    */
    public function getTestCaseCondition()
    {
        return $this->container['testCaseCondition'];
    }

    /**
    * Sets testCaseCondition
    *
    * @param string|null $testCaseCondition 动态任务用例过滤条件
    *
    * @return $this
    */
    public function setTestCaseCondition($testCaseCondition)
    {
        $this->container['testCaseCondition'] = $testCaseCondition;
        return $this;
    }

    /**
    * Gets stage
    *  测试阶段
    *
    * @return string|null
    */
    public function getStage()
    {
        return $this->container['stage'];
    }

    /**
    * Sets stage
    *
    * @param string|null $stage 测试阶段
    *
    * @return $this
    */
    public function setStage($stage)
    {
        $this->container['stage'] = $stage;
        return $this;
    }

    /**
    * Gets serviceType
    *  服务类型0:功能测试 1:接口测试 11:性能测试
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
    * @param int|null $serviceType 服务类型0:功能测试 1:接口测试 11:性能测试
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets number
    *  编号
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
    * @param string|null $number 编号
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets tags
    *  标记id
    *
    * @return string[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string[]|null $tags 标记id
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets moduleId
    *  模块id
    *
    * @return string|null
    */
    public function getModuleId()
    {
        return $this->container['moduleId'];
    }

    /**
    * Sets moduleId
    *
    * @param string|null $moduleId 模块id
    *
    * @return $this
    */
    public function setModuleId($moduleId)
    {
        $this->container['moduleId'] = $moduleId;
        return $this;
    }

    /**
    * Gets moduleName
    *  模块名称
    *
    * @return string|null
    */
    public function getModuleName()
    {
        return $this->container['moduleName'];
    }

    /**
    * Sets moduleName
    *
    * @param string|null $moduleName 模块名称
    *
    * @return $this
    */
    public function setModuleName($moduleName)
    {
        $this->container['moduleName'] = $moduleName;
        return $this;
    }

    /**
    * Gets releaseDev
    *  发布版本号
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
    * @param string|null $releaseDev 发布版本号
    *
    * @return $this
    */
    public function setReleaseDev($releaseDev)
    {
        $this->container['releaseDev'] = $releaseDev;
        return $this;
    }

    /**
    * Gets statusCode
    *  状态code
    *
    * @return int|null
    */
    public function getStatusCode()
    {
        return $this->container['statusCode'];
    }

    /**
    * Sets statusCode
    *
    * @param int|null $statusCode 状态code
    *
    * @return $this
    */
    public function setStatusCode($statusCode)
    {
        $this->container['statusCode'] = $statusCode;
        return $this;
    }

    /**
    * Gets extParam
    *  扩展参数
    *
    * @return string|null
    */
    public function getExtParam()
    {
        return $this->container['extParam'];
    }

    /**
    * Sets extParam
    *
    * @param string|null $extParam 扩展参数
    *
    * @return $this
    */
    public function setExtParam($extParam)
    {
        $this->container['extParam'] = $extParam;
        return $this;
    }

    /**
    * Gets executeWay
    *  执行方式 1：串行，2：并行
    *
    * @return int|null
    */
    public function getExecuteWay()
    {
        return $this->container['executeWay'];
    }

    /**
    * Sets executeWay
    *
    * @param int|null $executeWay 执行方式 1：串行，2：并行
    *
    * @return $this
    */
    public function setExecuteWay($executeWay)
    {
        $this->container['executeWay'] = $executeWay;
        return $this;
    }

    /**
    * Gets executeType
    *  执行类型（0：冒烟，1：定时）
    *
    * @return int|null
    */
    public function getExecuteType()
    {
        return $this->container['executeType'];
    }

    /**
    * Sets executeType
    *
    * @param int|null $executeType 执行类型（0：冒烟，1：定时）
    *
    * @return $this
    */
    public function setExecuteType($executeType)
    {
        $this->container['executeType'] = $executeType;
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
    * Gets planStartTimestamp
    *  计划开始时间戳，当传入-1时，时间置为空
    *
    * @return int|null
    */
    public function getPlanStartTimestamp()
    {
        return $this->container['planStartTimestamp'];
    }

    /**
    * Sets planStartTimestamp
    *
    * @param int|null $planStartTimestamp 计划开始时间戳，当传入-1时，时间置为空
    *
    * @return $this
    */
    public function setPlanStartTimestamp($planStartTimestamp)
    {
        $this->container['planStartTimestamp'] = $planStartTimestamp;
        return $this;
    }

    /**
    * Gets planEndTimestamp
    *  计划结束时间戳，当传入-1时，时间置为空
    *
    * @return int|null
    */
    public function getPlanEndTimestamp()
    {
        return $this->container['planEndTimestamp'];
    }

    /**
    * Sets planEndTimestamp
    *
    * @param int|null $planEndTimestamp 计划结束时间戳，当传入-1时，时间置为空
    *
    * @return $this
    */
    public function setPlanEndTimestamp($planEndTimestamp)
    {
        $this->container['planEndTimestamp'] = $planEndTimestamp;
        return $this;
    }

    /**
    * Gets region
    *  区域
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
    * @param string|null $region 区域
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets assignCaseUris
    *  任务关联用例uri数组，CloudDragon环境
    *
    * @return string[]|null
    */
    public function getAssignCaseUris()
    {
        return $this->container['assignCaseUris'];
    }

    /**
    * Sets assignCaseUris
    *
    * @param string[]|null $assignCaseUris 任务关联用例uri数组，CloudDragon环境
    *
    * @return $this
    */
    public function setAssignCaseUris($assignCaseUris)
    {
        $this->container['assignCaseUris'] = $assignCaseUris;
        return $this;
    }

    /**
    * Gets caseOperationInfo
    *  caseOperationInfo
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\CaseOperationInfo|null
    */
    public function getCaseOperationInfo()
    {
        return $this->container['caseOperationInfo'];
    }

    /**
    * Sets caseOperationInfo
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\CaseOperationInfo|null $caseOperationInfo caseOperationInfo
    *
    * @return $this
    */
    public function setCaseOperationInfo($caseOperationInfo)
    {
        $this->container['caseOperationInfo'] = $caseOperationInfo;
        return $this;
    }

    /**
    * Gets onlyUpdateStatus
    *  是否只需要修改测试套状态
    *
    * @return bool|null
    */
    public function getOnlyUpdateStatus()
    {
        return $this->container['onlyUpdateStatus'];
    }

    /**
    * Sets onlyUpdateStatus
    *
    * @param bool|null $onlyUpdateStatus 是否只需要修改测试套状态
    *
    * @return $this
    */
    public function setOnlyUpdateStatus($onlyUpdateStatus)
    {
        $this->container['onlyUpdateStatus'] = $onlyUpdateStatus;
        return $this;
    }

    /**
    * Gets isAsync
    *  是否异步
    *
    * @return bool|null
    */
    public function getIsAsync()
    {
        return $this->container['isAsync'];
    }

    /**
    * Sets isAsync
    *
    * @param bool|null $isAsync 是否异步
    *
    * @return $this
    */
    public function setIsAsync($isAsync)
    {
        $this->container['isAsync'] = $isAsync;
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

