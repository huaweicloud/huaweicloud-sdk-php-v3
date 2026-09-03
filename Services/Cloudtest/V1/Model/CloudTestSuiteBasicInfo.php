<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CloudTestSuiteBasicInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CloudTestSuiteBasicInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * caseOperationInfo  caseOperationInfo
    * createTime  创建时间
    * createUser  创建人
    * createUserId  创建人ID
    * description  描述信息
    * docType  数据类型：0为测试套，1为文件夹，cloudTest前台传入
    * executeStatus  测试套状态
    * executeTimes  执行总次数
    * executeType  执行类型：0为冒烟测试，1为定时执行
    * executeWay  执行方式：1为串行，2为并行，与echo的executeModel字段相同
    * expirationStatus  测试套超期状态
    * extParam  参数配置
    * id  唯一ID，主键
    * iteratorVersionUri  测试计划Uri，TMSS需要此值
    * moduleId  模块Id
    * moduleName  模块名称
    * name  测试套名称，与echo的name字段相同
    * nodeId  目录Id
    * ownerId  处理者ID
    * planId  测试计划id，可为空
    * planEndTimestamp  计划结束时间
    * planStartTimestamp  计划开始时间
    * projectId  项目ID
    * projectUuId  项目UUID，与echo的testServiceId字段相同
    * releaseDev  版本号
    * result  测试套执行结果
    * status  测试套状态
    * tags  标签
    * testSuiteId  测试套id，更新时需要同时传id、testSuiteId，2个字段值相同，与echo的taskId字段相同
    * testSuiteNumber  编号
    * type  测试套类型：0为功能测试，1为接口测试，6为Pistar，cloudTest前台传入
    * updateTime  更新时间
    * updateUser  更新人
    * updateUserId  更新人ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'caseOperationInfo' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\CloudTestCaseOperationInfo',
            'createTime' => 'string',
            'createUser' => 'string',
            'createUserId' => 'string',
            'description' => 'string',
            'docType' => 'int',
            'executeStatus' => 'int',
            'executeTimes' => 'int',
            'executeType' => 'int',
            'executeWay' => 'string',
            'expirationStatus' => 'int',
            'extParam' => 'string',
            'id' => 'string',
            'iteratorVersionUri' => 'string',
            'moduleId' => 'string',
            'moduleName' => 'string',
            'name' => 'string',
            'nodeId' => 'string',
            'ownerId' => 'string',
            'planId' => 'string',
            'planEndTimestamp' => 'int',
            'planStartTimestamp' => 'int',
            'projectId' => 'int',
            'projectUuId' => 'string',
            'releaseDev' => 'string',
            'result' => 'int',
            'status' => 'int',
            'tags' => 'string[]',
            'testSuiteId' => 'string',
            'testSuiteNumber' => 'string',
            'type' => 'int',
            'updateTime' => 'string',
            'updateUser' => 'string',
            'updateUserId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * caseOperationInfo  caseOperationInfo
    * createTime  创建时间
    * createUser  创建人
    * createUserId  创建人ID
    * description  描述信息
    * docType  数据类型：0为测试套，1为文件夹，cloudTest前台传入
    * executeStatus  测试套状态
    * executeTimes  执行总次数
    * executeType  执行类型：0为冒烟测试，1为定时执行
    * executeWay  执行方式：1为串行，2为并行，与echo的executeModel字段相同
    * expirationStatus  测试套超期状态
    * extParam  参数配置
    * id  唯一ID，主键
    * iteratorVersionUri  测试计划Uri，TMSS需要此值
    * moduleId  模块Id
    * moduleName  模块名称
    * name  测试套名称，与echo的name字段相同
    * nodeId  目录Id
    * ownerId  处理者ID
    * planId  测试计划id，可为空
    * planEndTimestamp  计划结束时间
    * planStartTimestamp  计划开始时间
    * projectId  项目ID
    * projectUuId  项目UUID，与echo的testServiceId字段相同
    * releaseDev  版本号
    * result  测试套执行结果
    * status  测试套状态
    * tags  标签
    * testSuiteId  测试套id，更新时需要同时传id、testSuiteId，2个字段值相同，与echo的taskId字段相同
    * testSuiteNumber  编号
    * type  测试套类型：0为功能测试，1为接口测试，6为Pistar，cloudTest前台传入
    * updateTime  更新时间
    * updateUser  更新人
    * updateUserId  更新人ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'caseOperationInfo' => null,
        'createTime' => null,
        'createUser' => null,
        'createUserId' => null,
        'description' => null,
        'docType' => 'int32',
        'executeStatus' => 'int32',
        'executeTimes' => 'int32',
        'executeType' => 'int32',
        'executeWay' => null,
        'expirationStatus' => 'int32',
        'extParam' => null,
        'id' => null,
        'iteratorVersionUri' => null,
        'moduleId' => null,
        'moduleName' => null,
        'name' => null,
        'nodeId' => null,
        'ownerId' => null,
        'planId' => null,
        'planEndTimestamp' => 'int64',
        'planStartTimestamp' => 'int64',
        'projectId' => 'int64',
        'projectUuId' => null,
        'releaseDev' => null,
        'result' => 'int32',
        'status' => 'int32',
        'tags' => null,
        'testSuiteId' => null,
        'testSuiteNumber' => null,
        'type' => 'int32',
        'updateTime' => null,
        'updateUser' => null,
        'updateUserId' => null
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
    * caseOperationInfo  caseOperationInfo
    * createTime  创建时间
    * createUser  创建人
    * createUserId  创建人ID
    * description  描述信息
    * docType  数据类型：0为测试套，1为文件夹，cloudTest前台传入
    * executeStatus  测试套状态
    * executeTimes  执行总次数
    * executeType  执行类型：0为冒烟测试，1为定时执行
    * executeWay  执行方式：1为串行，2为并行，与echo的executeModel字段相同
    * expirationStatus  测试套超期状态
    * extParam  参数配置
    * id  唯一ID，主键
    * iteratorVersionUri  测试计划Uri，TMSS需要此值
    * moduleId  模块Id
    * moduleName  模块名称
    * name  测试套名称，与echo的name字段相同
    * nodeId  目录Id
    * ownerId  处理者ID
    * planId  测试计划id，可为空
    * planEndTimestamp  计划结束时间
    * planStartTimestamp  计划开始时间
    * projectId  项目ID
    * projectUuId  项目UUID，与echo的testServiceId字段相同
    * releaseDev  版本号
    * result  测试套执行结果
    * status  测试套状态
    * tags  标签
    * testSuiteId  测试套id，更新时需要同时传id、testSuiteId，2个字段值相同，与echo的taskId字段相同
    * testSuiteNumber  编号
    * type  测试套类型：0为功能测试，1为接口测试，6为Pistar，cloudTest前台传入
    * updateTime  更新时间
    * updateUser  更新人
    * updateUserId  更新人ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'caseOperationInfo' => 'caseOperationInfo',
            'createTime' => 'create_time',
            'createUser' => 'create_user',
            'createUserId' => 'create_user_id',
            'description' => 'description',
            'docType' => 'doc_type',
            'executeStatus' => 'execute_status',
            'executeTimes' => 'execute_times',
            'executeType' => 'execute_type',
            'executeWay' => 'execute_way',
            'expirationStatus' => 'expiration_status',
            'extParam' => 'extParam',
            'id' => 'id',
            'iteratorVersionUri' => 'iterator_version_uri',
            'moduleId' => 'moduleId',
            'moduleName' => 'moduleName',
            'name' => 'name',
            'nodeId' => 'nodeId',
            'ownerId' => 'ownerId',
            'planId' => 'planId',
            'planEndTimestamp' => 'plan_end_timestamp',
            'planStartTimestamp' => 'plan_start_timestamp',
            'projectId' => 'projectId',
            'projectUuId' => 'projectUUId',
            'releaseDev' => 'releaseDev',
            'result' => 'result',
            'status' => 'status',
            'tags' => 'tags',
            'testSuiteId' => 'testSuiteId',
            'testSuiteNumber' => 'testSuiteNumber',
            'type' => 'type',
            'updateTime' => 'update_time',
            'updateUser' => 'update_user',
            'updateUserId' => 'update_user_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * caseOperationInfo  caseOperationInfo
    * createTime  创建时间
    * createUser  创建人
    * createUserId  创建人ID
    * description  描述信息
    * docType  数据类型：0为测试套，1为文件夹，cloudTest前台传入
    * executeStatus  测试套状态
    * executeTimes  执行总次数
    * executeType  执行类型：0为冒烟测试，1为定时执行
    * executeWay  执行方式：1为串行，2为并行，与echo的executeModel字段相同
    * expirationStatus  测试套超期状态
    * extParam  参数配置
    * id  唯一ID，主键
    * iteratorVersionUri  测试计划Uri，TMSS需要此值
    * moduleId  模块Id
    * moduleName  模块名称
    * name  测试套名称，与echo的name字段相同
    * nodeId  目录Id
    * ownerId  处理者ID
    * planId  测试计划id，可为空
    * planEndTimestamp  计划结束时间
    * planStartTimestamp  计划开始时间
    * projectId  项目ID
    * projectUuId  项目UUID，与echo的testServiceId字段相同
    * releaseDev  版本号
    * result  测试套执行结果
    * status  测试套状态
    * tags  标签
    * testSuiteId  测试套id，更新时需要同时传id、testSuiteId，2个字段值相同，与echo的taskId字段相同
    * testSuiteNumber  编号
    * type  测试套类型：0为功能测试，1为接口测试，6为Pistar，cloudTest前台传入
    * updateTime  更新时间
    * updateUser  更新人
    * updateUserId  更新人ID
    *
    * @var string[]
    */
    protected static $setters = [
            'caseOperationInfo' => 'setCaseOperationInfo',
            'createTime' => 'setCreateTime',
            'createUser' => 'setCreateUser',
            'createUserId' => 'setCreateUserId',
            'description' => 'setDescription',
            'docType' => 'setDocType',
            'executeStatus' => 'setExecuteStatus',
            'executeTimes' => 'setExecuteTimes',
            'executeType' => 'setExecuteType',
            'executeWay' => 'setExecuteWay',
            'expirationStatus' => 'setExpirationStatus',
            'extParam' => 'setExtParam',
            'id' => 'setId',
            'iteratorVersionUri' => 'setIteratorVersionUri',
            'moduleId' => 'setModuleId',
            'moduleName' => 'setModuleName',
            'name' => 'setName',
            'nodeId' => 'setNodeId',
            'ownerId' => 'setOwnerId',
            'planId' => 'setPlanId',
            'planEndTimestamp' => 'setPlanEndTimestamp',
            'planStartTimestamp' => 'setPlanStartTimestamp',
            'projectId' => 'setProjectId',
            'projectUuId' => 'setProjectUuId',
            'releaseDev' => 'setReleaseDev',
            'result' => 'setResult',
            'status' => 'setStatus',
            'tags' => 'setTags',
            'testSuiteId' => 'setTestSuiteId',
            'testSuiteNumber' => 'setTestSuiteNumber',
            'type' => 'setType',
            'updateTime' => 'setUpdateTime',
            'updateUser' => 'setUpdateUser',
            'updateUserId' => 'setUpdateUserId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * caseOperationInfo  caseOperationInfo
    * createTime  创建时间
    * createUser  创建人
    * createUserId  创建人ID
    * description  描述信息
    * docType  数据类型：0为测试套，1为文件夹，cloudTest前台传入
    * executeStatus  测试套状态
    * executeTimes  执行总次数
    * executeType  执行类型：0为冒烟测试，1为定时执行
    * executeWay  执行方式：1为串行，2为并行，与echo的executeModel字段相同
    * expirationStatus  测试套超期状态
    * extParam  参数配置
    * id  唯一ID，主键
    * iteratorVersionUri  测试计划Uri，TMSS需要此值
    * moduleId  模块Id
    * moduleName  模块名称
    * name  测试套名称，与echo的name字段相同
    * nodeId  目录Id
    * ownerId  处理者ID
    * planId  测试计划id，可为空
    * planEndTimestamp  计划结束时间
    * planStartTimestamp  计划开始时间
    * projectId  项目ID
    * projectUuId  项目UUID，与echo的testServiceId字段相同
    * releaseDev  版本号
    * result  测试套执行结果
    * status  测试套状态
    * tags  标签
    * testSuiteId  测试套id，更新时需要同时传id、testSuiteId，2个字段值相同，与echo的taskId字段相同
    * testSuiteNumber  编号
    * type  测试套类型：0为功能测试，1为接口测试，6为Pistar，cloudTest前台传入
    * updateTime  更新时间
    * updateUser  更新人
    * updateUserId  更新人ID
    *
    * @var string[]
    */
    protected static $getters = [
            'caseOperationInfo' => 'getCaseOperationInfo',
            'createTime' => 'getCreateTime',
            'createUser' => 'getCreateUser',
            'createUserId' => 'getCreateUserId',
            'description' => 'getDescription',
            'docType' => 'getDocType',
            'executeStatus' => 'getExecuteStatus',
            'executeTimes' => 'getExecuteTimes',
            'executeType' => 'getExecuteType',
            'executeWay' => 'getExecuteWay',
            'expirationStatus' => 'getExpirationStatus',
            'extParam' => 'getExtParam',
            'id' => 'getId',
            'iteratorVersionUri' => 'getIteratorVersionUri',
            'moduleId' => 'getModuleId',
            'moduleName' => 'getModuleName',
            'name' => 'getName',
            'nodeId' => 'getNodeId',
            'ownerId' => 'getOwnerId',
            'planId' => 'getPlanId',
            'planEndTimestamp' => 'getPlanEndTimestamp',
            'planStartTimestamp' => 'getPlanStartTimestamp',
            'projectId' => 'getProjectId',
            'projectUuId' => 'getProjectUuId',
            'releaseDev' => 'getReleaseDev',
            'result' => 'getResult',
            'status' => 'getStatus',
            'tags' => 'getTags',
            'testSuiteId' => 'getTestSuiteId',
            'testSuiteNumber' => 'getTestSuiteNumber',
            'type' => 'getType',
            'updateTime' => 'getUpdateTime',
            'updateUser' => 'getUpdateUser',
            'updateUserId' => 'getUpdateUserId'
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
        $this->container['caseOperationInfo'] = isset($data['caseOperationInfo']) ? $data['caseOperationInfo'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['createUserId'] = isset($data['createUserId']) ? $data['createUserId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['docType'] = isset($data['docType']) ? $data['docType'] : null;
        $this->container['executeStatus'] = isset($data['executeStatus']) ? $data['executeStatus'] : null;
        $this->container['executeTimes'] = isset($data['executeTimes']) ? $data['executeTimes'] : null;
        $this->container['executeType'] = isset($data['executeType']) ? $data['executeType'] : null;
        $this->container['executeWay'] = isset($data['executeWay']) ? $data['executeWay'] : null;
        $this->container['expirationStatus'] = isset($data['expirationStatus']) ? $data['expirationStatus'] : null;
        $this->container['extParam'] = isset($data['extParam']) ? $data['extParam'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['iteratorVersionUri'] = isset($data['iteratorVersionUri']) ? $data['iteratorVersionUri'] : null;
        $this->container['moduleId'] = isset($data['moduleId']) ? $data['moduleId'] : null;
        $this->container['moduleName'] = isset($data['moduleName']) ? $data['moduleName'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['ownerId'] = isset($data['ownerId']) ? $data['ownerId'] : null;
        $this->container['planId'] = isset($data['planId']) ? $data['planId'] : null;
        $this->container['planEndTimestamp'] = isset($data['planEndTimestamp']) ? $data['planEndTimestamp'] : null;
        $this->container['planStartTimestamp'] = isset($data['planStartTimestamp']) ? $data['planStartTimestamp'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['projectUuId'] = isset($data['projectUuId']) ? $data['projectUuId'] : null;
        $this->container['releaseDev'] = isset($data['releaseDev']) ? $data['releaseDev'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['testSuiteId'] = isset($data['testSuiteId']) ? $data['testSuiteId'] : null;
        $this->container['testSuiteNumber'] = isset($data['testSuiteNumber']) ? $data['testSuiteNumber'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['updateUser'] = isset($data['updateUser']) ? $data['updateUser'] : null;
        $this->container['updateUserId'] = isset($data['updateUserId']) ? $data['updateUserId'] : null;
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
    * Gets caseOperationInfo
    *  caseOperationInfo
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\CloudTestCaseOperationInfo|null
    */
    public function getCaseOperationInfo()
    {
        return $this->container['caseOperationInfo'];
    }

    /**
    * Sets caseOperationInfo
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\CloudTestCaseOperationInfo|null $caseOperationInfo caseOperationInfo
    *
    * @return $this
    */
    public function setCaseOperationInfo($caseOperationInfo)
    {
        $this->container['caseOperationInfo'] = $caseOperationInfo;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间
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
    * Gets createUserId
    *  创建人ID
    *
    * @return string|null
    */
    public function getCreateUserId()
    {
        return $this->container['createUserId'];
    }

    /**
    * Sets createUserId
    *
    * @param string|null $createUserId 创建人ID
    *
    * @return $this
    */
    public function setCreateUserId($createUserId)
    {
        $this->container['createUserId'] = $createUserId;
        return $this;
    }

    /**
    * Gets description
    *  描述信息
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
    * @param string|null $description 描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets docType
    *  数据类型：0为测试套，1为文件夹，cloudTest前台传入
    *
    * @return int|null
    */
    public function getDocType()
    {
        return $this->container['docType'];
    }

    /**
    * Sets docType
    *
    * @param int|null $docType 数据类型：0为测试套，1为文件夹，cloudTest前台传入
    *
    * @return $this
    */
    public function setDocType($docType)
    {
        $this->container['docType'] = $docType;
        return $this;
    }

    /**
    * Gets executeStatus
    *  测试套状态
    *
    * @return int|null
    */
    public function getExecuteStatus()
    {
        return $this->container['executeStatus'];
    }

    /**
    * Sets executeStatus
    *
    * @param int|null $executeStatus 测试套状态
    *
    * @return $this
    */
    public function setExecuteStatus($executeStatus)
    {
        $this->container['executeStatus'] = $executeStatus;
        return $this;
    }

    /**
    * Gets executeTimes
    *  执行总次数
    *
    * @return int|null
    */
    public function getExecuteTimes()
    {
        return $this->container['executeTimes'];
    }

    /**
    * Sets executeTimes
    *
    * @param int|null $executeTimes 执行总次数
    *
    * @return $this
    */
    public function setExecuteTimes($executeTimes)
    {
        $this->container['executeTimes'] = $executeTimes;
        return $this;
    }

    /**
    * Gets executeType
    *  执行类型：0为冒烟测试，1为定时执行
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
    * @param int|null $executeType 执行类型：0为冒烟测试，1为定时执行
    *
    * @return $this
    */
    public function setExecuteType($executeType)
    {
        $this->container['executeType'] = $executeType;
        return $this;
    }

    /**
    * Gets executeWay
    *  执行方式：1为串行，2为并行，与echo的executeModel字段相同
    *
    * @return string|null
    */
    public function getExecuteWay()
    {
        return $this->container['executeWay'];
    }

    /**
    * Sets executeWay
    *
    * @param string|null $executeWay 执行方式：1为串行，2为并行，与echo的executeModel字段相同
    *
    * @return $this
    */
    public function setExecuteWay($executeWay)
    {
        $this->container['executeWay'] = $executeWay;
        return $this;
    }

    /**
    * Gets expirationStatus
    *  测试套超期状态
    *
    * @return int|null
    */
    public function getExpirationStatus()
    {
        return $this->container['expirationStatus'];
    }

    /**
    * Sets expirationStatus
    *
    * @param int|null $expirationStatus 测试套超期状态
    *
    * @return $this
    */
    public function setExpirationStatus($expirationStatus)
    {
        $this->container['expirationStatus'] = $expirationStatus;
        return $this;
    }

    /**
    * Gets extParam
    *  参数配置
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
    * @param string|null $extParam 参数配置
    *
    * @return $this
    */
    public function setExtParam($extParam)
    {
        $this->container['extParam'] = $extParam;
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
    * Gets iteratorVersionUri
    *  测试计划Uri，TMSS需要此值
    *
    * @return string|null
    */
    public function getIteratorVersionUri()
    {
        return $this->container['iteratorVersionUri'];
    }

    /**
    * Sets iteratorVersionUri
    *
    * @param string|null $iteratorVersionUri 测试计划Uri，TMSS需要此值
    *
    * @return $this
    */
    public function setIteratorVersionUri($iteratorVersionUri)
    {
        $this->container['iteratorVersionUri'] = $iteratorVersionUri;
        return $this;
    }

    /**
    * Gets moduleId
    *  模块Id
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
    * @param string|null $moduleId 模块Id
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
    * Gets name
    *  测试套名称，与echo的name字段相同
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
    * @param string|null $name 测试套名称，与echo的name字段相同
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets nodeId
    *  目录Id
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
    * @param string|null $nodeId 目录Id
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets ownerId
    *  处理者ID
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
    * @param string|null $ownerId 处理者ID
    *
    * @return $this
    */
    public function setOwnerId($ownerId)
    {
        $this->container['ownerId'] = $ownerId;
        return $this;
    }

    /**
    * Gets planId
    *  测试计划id，可为空
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
    * @param string|null $planId 测试计划id，可为空
    *
    * @return $this
    */
    public function setPlanId($planId)
    {
        $this->container['planId'] = $planId;
        return $this;
    }

    /**
    * Gets planEndTimestamp
    *  计划结束时间
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
    * @param int|null $planEndTimestamp 计划结束时间
    *
    * @return $this
    */
    public function setPlanEndTimestamp($planEndTimestamp)
    {
        $this->container['planEndTimestamp'] = $planEndTimestamp;
        return $this;
    }

    /**
    * Gets planStartTimestamp
    *  计划开始时间
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
    * @param int|null $planStartTimestamp 计划开始时间
    *
    * @return $this
    */
    public function setPlanStartTimestamp($planStartTimestamp)
    {
        $this->container['planStartTimestamp'] = $planStartTimestamp;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
    *
    * @return int|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param int|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets projectUuId
    *  项目UUID，与echo的testServiceId字段相同
    *
    * @return string|null
    */
    public function getProjectUuId()
    {
        return $this->container['projectUuId'];
    }

    /**
    * Sets projectUuId
    *
    * @param string|null $projectUuId 项目UUID，与echo的testServiceId字段相同
    *
    * @return $this
    */
    public function setProjectUuId($projectUuId)
    {
        $this->container['projectUuId'] = $projectUuId;
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
    * Gets result
    *  测试套执行结果
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
    * @param int|null $result 测试套执行结果
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets status
    *  测试套状态
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 测试套状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets tags
    *  标签
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
    * @param string[]|null $tags 标签
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets testSuiteId
    *  测试套id，更新时需要同时传id、testSuiteId，2个字段值相同，与echo的taskId字段相同
    *
    * @return string|null
    */
    public function getTestSuiteId()
    {
        return $this->container['testSuiteId'];
    }

    /**
    * Sets testSuiteId
    *
    * @param string|null $testSuiteId 测试套id，更新时需要同时传id、testSuiteId，2个字段值相同，与echo的taskId字段相同
    *
    * @return $this
    */
    public function setTestSuiteId($testSuiteId)
    {
        $this->container['testSuiteId'] = $testSuiteId;
        return $this;
    }

    /**
    * Gets testSuiteNumber
    *  编号
    *
    * @return string|null
    */
    public function getTestSuiteNumber()
    {
        return $this->container['testSuiteNumber'];
    }

    /**
    * Sets testSuiteNumber
    *
    * @param string|null $testSuiteNumber 编号
    *
    * @return $this
    */
    public function setTestSuiteNumber($testSuiteNumber)
    {
        $this->container['testSuiteNumber'] = $testSuiteNumber;
        return $this;
    }

    /**
    * Gets type
    *  测试套类型：0为功能测试，1为接口测试，6为Pistar，cloudTest前台传入
    *
    * @return int|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int|null $type 测试套类型：0为功能测试，1为接口测试，6为Pistar，cloudTest前台传入
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 更新时间
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
    * Gets updateUserId
    *  更新人ID
    *
    * @return string|null
    */
    public function getUpdateUserId()
    {
        return $this->container['updateUserId'];
    }

    /**
    * Sets updateUserId
    *
    * @param string|null $updateUserId 更新人ID
    *
    * @return $this
    */
    public function setUpdateUserId($updateUserId)
    {
        $this->container['updateUserId'] = $updateUserId;
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

