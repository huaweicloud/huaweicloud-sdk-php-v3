<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StartInferServiceResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StartInferServiceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 服务名，用户在[创建服务](CreateInferService.xml)时自定义的名称。 **取值范围：** 支持1-64位字符，可包含字母、中文、数字、中划线、下划线。
    * workspaceId  **参数解释：** 工作空间ID。 **取值范围：** - 0：默认空间ID。 - 由数字和小写字母组成的32位字符：其他空间ID，可参考[工作空间创建](CreateWorkspace.xml)。
    * type  **参数解释：** 推理服务类型。 **取值范围：** - REAL_TIME：在线服务。 - ASYNC_REAL_TIME：异步服务。
    * deployType  **参数解释：** 部署方式。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。
    * status  **参数解释：** 服务当前状态。 **取值范围：** - DEPLOYING：部署中 。 - FAILED：失败 。 - STOPPED：停止。 - RUNNING：运行中。 - DELETING：删除中 。 - STOPPING：停止中 。 - CONCERNING：告警 。 - UPGRADING：升级中 。 - ERROR：异常 。 - INIT：待部署。
    * failureReason  **参数解释：** 在线服务失败原因。 **取值范围：** 不涉及。
    * version  version
    * predictUrl  **参数解释：** 在线服务访问地址，创建服务接口无返回，详情接口中返回。
    * dispatcherGroupId  **参数解释：** 服务绑定的dispatcher组ID，创建服务接口无返回，详情接口中返回。 **取值范围：** 不涉及。
    * tags  **参数解释：** TMS对接标签类。
    * deployTimeoutMinutes  **参数解释：** 部署超时时间。
    * schedule  **参数解释：** 定时停止配置。
    * createAt  **参数解释：** 创建时间，根据创建时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字，如1609459200000。
    * updateAt  **参数解释：** 更新时间，根据更新时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字，如1609459200000。
    * taskType  **参数解释：** 模型类型。 **取值范围：** - TEXT_GENERATION：文本生成 - IMAGE_UNDERSTANDING：图像理解 - VIDEO_GENERATION：视频生成 - IMAGE_GENERATION：图像生成 - RERANK：重排序 - VECTOR_MODEL：向量模型 - EMBEDDING：Embedding嵌入
    * provider  **参数解释：** 服务提供者的账号id（创建服务时通过X-Auth-Token-Provider请求头解析iam token而来），该值不为空时，该服务的所有更新操作需要在请求头中添加X-Auth-Token-Provider，取值为该账号id的domain级或project级token。
    * frozenInfos  **参数解释：** 当服务或者部署被冻结时返回的冻结类型信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'workspaceId' => 'string',
            'type' => 'string',
            'deployType' => 'string',
            'status' => 'string',
            'failureReason' => 'string',
            'version' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ServiceVersionResponse',
            'predictUrl' => '\HuaweiCloud\SDK\ModelArts\V1\Model\PredictUrlResponse[]',
            'dispatcherGroupId' => 'string',
            'tags' => '\HuaweiCloud\SDK\ModelArts\V1\Model\TagsResponse[]',
            'deployTimeoutMinutes' => 'int',
            'schedule' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ScheduleConfigResponse[]',
            'createAt' => 'string',
            'updateAt' => 'string',
            'taskType' => 'string',
            'provider' => 'string',
            'frozenInfos' => '\HuaweiCloud\SDK\ModelArts\V1\Model\FrozenInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 服务名，用户在[创建服务](CreateInferService.xml)时自定义的名称。 **取值范围：** 支持1-64位字符，可包含字母、中文、数字、中划线、下划线。
    * workspaceId  **参数解释：** 工作空间ID。 **取值范围：** - 0：默认空间ID。 - 由数字和小写字母组成的32位字符：其他空间ID，可参考[工作空间创建](CreateWorkspace.xml)。
    * type  **参数解释：** 推理服务类型。 **取值范围：** - REAL_TIME：在线服务。 - ASYNC_REAL_TIME：异步服务。
    * deployType  **参数解释：** 部署方式。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。
    * status  **参数解释：** 服务当前状态。 **取值范围：** - DEPLOYING：部署中 。 - FAILED：失败 。 - STOPPED：停止。 - RUNNING：运行中。 - DELETING：删除中 。 - STOPPING：停止中 。 - CONCERNING：告警 。 - UPGRADING：升级中 。 - ERROR：异常 。 - INIT：待部署。
    * failureReason  **参数解释：** 在线服务失败原因。 **取值范围：** 不涉及。
    * version  version
    * predictUrl  **参数解释：** 在线服务访问地址，创建服务接口无返回，详情接口中返回。
    * dispatcherGroupId  **参数解释：** 服务绑定的dispatcher组ID，创建服务接口无返回，详情接口中返回。 **取值范围：** 不涉及。
    * tags  **参数解释：** TMS对接标签类。
    * deployTimeoutMinutes  **参数解释：** 部署超时时间。
    * schedule  **参数解释：** 定时停止配置。
    * createAt  **参数解释：** 创建时间，根据创建时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字，如1609459200000。
    * updateAt  **参数解释：** 更新时间，根据更新时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字，如1609459200000。
    * taskType  **参数解释：** 模型类型。 **取值范围：** - TEXT_GENERATION：文本生成 - IMAGE_UNDERSTANDING：图像理解 - VIDEO_GENERATION：视频生成 - IMAGE_GENERATION：图像生成 - RERANK：重排序 - VECTOR_MODEL：向量模型 - EMBEDDING：Embedding嵌入
    * provider  **参数解释：** 服务提供者的账号id（创建服务时通过X-Auth-Token-Provider请求头解析iam token而来），该值不为空时，该服务的所有更新操作需要在请求头中添加X-Auth-Token-Provider，取值为该账号id的domain级或project级token。
    * frozenInfos  **参数解释：** 当服务或者部署被冻结时返回的冻结类型信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'workspaceId' => null,
        'type' => null,
        'deployType' => null,
        'status' => null,
        'failureReason' => null,
        'version' => null,
        'predictUrl' => null,
        'dispatcherGroupId' => null,
        'tags' => null,
        'deployTimeoutMinutes' => 'int32',
        'schedule' => null,
        'createAt' => null,
        'updateAt' => null,
        'taskType' => null,
        'provider' => null,
        'frozenInfos' => null
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
    * id  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 服务名，用户在[创建服务](CreateInferService.xml)时自定义的名称。 **取值范围：** 支持1-64位字符，可包含字母、中文、数字、中划线、下划线。
    * workspaceId  **参数解释：** 工作空间ID。 **取值范围：** - 0：默认空间ID。 - 由数字和小写字母组成的32位字符：其他空间ID，可参考[工作空间创建](CreateWorkspace.xml)。
    * type  **参数解释：** 推理服务类型。 **取值范围：** - REAL_TIME：在线服务。 - ASYNC_REAL_TIME：异步服务。
    * deployType  **参数解释：** 部署方式。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。
    * status  **参数解释：** 服务当前状态。 **取值范围：** - DEPLOYING：部署中 。 - FAILED：失败 。 - STOPPED：停止。 - RUNNING：运行中。 - DELETING：删除中 。 - STOPPING：停止中 。 - CONCERNING：告警 。 - UPGRADING：升级中 。 - ERROR：异常 。 - INIT：待部署。
    * failureReason  **参数解释：** 在线服务失败原因。 **取值范围：** 不涉及。
    * version  version
    * predictUrl  **参数解释：** 在线服务访问地址，创建服务接口无返回，详情接口中返回。
    * dispatcherGroupId  **参数解释：** 服务绑定的dispatcher组ID，创建服务接口无返回，详情接口中返回。 **取值范围：** 不涉及。
    * tags  **参数解释：** TMS对接标签类。
    * deployTimeoutMinutes  **参数解释：** 部署超时时间。
    * schedule  **参数解释：** 定时停止配置。
    * createAt  **参数解释：** 创建时间，根据创建时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字，如1609459200000。
    * updateAt  **参数解释：** 更新时间，根据更新时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字，如1609459200000。
    * taskType  **参数解释：** 模型类型。 **取值范围：** - TEXT_GENERATION：文本生成 - IMAGE_UNDERSTANDING：图像理解 - VIDEO_GENERATION：视频生成 - IMAGE_GENERATION：图像生成 - RERANK：重排序 - VECTOR_MODEL：向量模型 - EMBEDDING：Embedding嵌入
    * provider  **参数解释：** 服务提供者的账号id（创建服务时通过X-Auth-Token-Provider请求头解析iam token而来），该值不为空时，该服务的所有更新操作需要在请求头中添加X-Auth-Token-Provider，取值为该账号id的domain级或project级token。
    * frozenInfos  **参数解释：** 当服务或者部署被冻结时返回的冻结类型信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'workspaceId' => 'workspace_id',
            'type' => 'type',
            'deployType' => 'deploy_type',
            'status' => 'status',
            'failureReason' => 'failure_reason',
            'version' => 'version',
            'predictUrl' => 'predict_url',
            'dispatcherGroupId' => 'dispatcher_group_id',
            'tags' => 'tags',
            'deployTimeoutMinutes' => 'deploy_timeout_minutes',
            'schedule' => 'schedule',
            'createAt' => 'create_at',
            'updateAt' => 'update_at',
            'taskType' => 'task_type',
            'provider' => 'provider',
            'frozenInfos' => 'frozen_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 服务名，用户在[创建服务](CreateInferService.xml)时自定义的名称。 **取值范围：** 支持1-64位字符，可包含字母、中文、数字、中划线、下划线。
    * workspaceId  **参数解释：** 工作空间ID。 **取值范围：** - 0：默认空间ID。 - 由数字和小写字母组成的32位字符：其他空间ID，可参考[工作空间创建](CreateWorkspace.xml)。
    * type  **参数解释：** 推理服务类型。 **取值范围：** - REAL_TIME：在线服务。 - ASYNC_REAL_TIME：异步服务。
    * deployType  **参数解释：** 部署方式。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。
    * status  **参数解释：** 服务当前状态。 **取值范围：** - DEPLOYING：部署中 。 - FAILED：失败 。 - STOPPED：停止。 - RUNNING：运行中。 - DELETING：删除中 。 - STOPPING：停止中 。 - CONCERNING：告警 。 - UPGRADING：升级中 。 - ERROR：异常 。 - INIT：待部署。
    * failureReason  **参数解释：** 在线服务失败原因。 **取值范围：** 不涉及。
    * version  version
    * predictUrl  **参数解释：** 在线服务访问地址，创建服务接口无返回，详情接口中返回。
    * dispatcherGroupId  **参数解释：** 服务绑定的dispatcher组ID，创建服务接口无返回，详情接口中返回。 **取值范围：** 不涉及。
    * tags  **参数解释：** TMS对接标签类。
    * deployTimeoutMinutes  **参数解释：** 部署超时时间。
    * schedule  **参数解释：** 定时停止配置。
    * createAt  **参数解释：** 创建时间，根据创建时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字，如1609459200000。
    * updateAt  **参数解释：** 更新时间，根据更新时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字，如1609459200000。
    * taskType  **参数解释：** 模型类型。 **取值范围：** - TEXT_GENERATION：文本生成 - IMAGE_UNDERSTANDING：图像理解 - VIDEO_GENERATION：视频生成 - IMAGE_GENERATION：图像生成 - RERANK：重排序 - VECTOR_MODEL：向量模型 - EMBEDDING：Embedding嵌入
    * provider  **参数解释：** 服务提供者的账号id（创建服务时通过X-Auth-Token-Provider请求头解析iam token而来），该值不为空时，该服务的所有更新操作需要在请求头中添加X-Auth-Token-Provider，取值为该账号id的domain级或project级token。
    * frozenInfos  **参数解释：** 当服务或者部署被冻结时返回的冻结类型信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'workspaceId' => 'setWorkspaceId',
            'type' => 'setType',
            'deployType' => 'setDeployType',
            'status' => 'setStatus',
            'failureReason' => 'setFailureReason',
            'version' => 'setVersion',
            'predictUrl' => 'setPredictUrl',
            'dispatcherGroupId' => 'setDispatcherGroupId',
            'tags' => 'setTags',
            'deployTimeoutMinutes' => 'setDeployTimeoutMinutes',
            'schedule' => 'setSchedule',
            'createAt' => 'setCreateAt',
            'updateAt' => 'setUpdateAt',
            'taskType' => 'setTaskType',
            'provider' => 'setProvider',
            'frozenInfos' => 'setFrozenInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 服务名，用户在[创建服务](CreateInferService.xml)时自定义的名称。 **取值范围：** 支持1-64位字符，可包含字母、中文、数字、中划线、下划线。
    * workspaceId  **参数解释：** 工作空间ID。 **取值范围：** - 0：默认空间ID。 - 由数字和小写字母组成的32位字符：其他空间ID，可参考[工作空间创建](CreateWorkspace.xml)。
    * type  **参数解释：** 推理服务类型。 **取值范围：** - REAL_TIME：在线服务。 - ASYNC_REAL_TIME：异步服务。
    * deployType  **参数解释：** 部署方式。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。
    * status  **参数解释：** 服务当前状态。 **取值范围：** - DEPLOYING：部署中 。 - FAILED：失败 。 - STOPPED：停止。 - RUNNING：运行中。 - DELETING：删除中 。 - STOPPING：停止中 。 - CONCERNING：告警 。 - UPGRADING：升级中 。 - ERROR：异常 。 - INIT：待部署。
    * failureReason  **参数解释：** 在线服务失败原因。 **取值范围：** 不涉及。
    * version  version
    * predictUrl  **参数解释：** 在线服务访问地址，创建服务接口无返回，详情接口中返回。
    * dispatcherGroupId  **参数解释：** 服务绑定的dispatcher组ID，创建服务接口无返回，详情接口中返回。 **取值范围：** 不涉及。
    * tags  **参数解释：** TMS对接标签类。
    * deployTimeoutMinutes  **参数解释：** 部署超时时间。
    * schedule  **参数解释：** 定时停止配置。
    * createAt  **参数解释：** 创建时间，根据创建时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字，如1609459200000。
    * updateAt  **参数解释：** 更新时间，根据更新时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字，如1609459200000。
    * taskType  **参数解释：** 模型类型。 **取值范围：** - TEXT_GENERATION：文本生成 - IMAGE_UNDERSTANDING：图像理解 - VIDEO_GENERATION：视频生成 - IMAGE_GENERATION：图像生成 - RERANK：重排序 - VECTOR_MODEL：向量模型 - EMBEDDING：Embedding嵌入
    * provider  **参数解释：** 服务提供者的账号id（创建服务时通过X-Auth-Token-Provider请求头解析iam token而来），该值不为空时，该服务的所有更新操作需要在请求头中添加X-Auth-Token-Provider，取值为该账号id的domain级或project级token。
    * frozenInfos  **参数解释：** 当服务或者部署被冻结时返回的冻结类型信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'workspaceId' => 'getWorkspaceId',
            'type' => 'getType',
            'deployType' => 'getDeployType',
            'status' => 'getStatus',
            'failureReason' => 'getFailureReason',
            'version' => 'getVersion',
            'predictUrl' => 'getPredictUrl',
            'dispatcherGroupId' => 'getDispatcherGroupId',
            'tags' => 'getTags',
            'deployTimeoutMinutes' => 'getDeployTimeoutMinutes',
            'schedule' => 'getSchedule',
            'createAt' => 'getCreateAt',
            'updateAt' => 'getUpdateAt',
            'taskType' => 'getTaskType',
            'provider' => 'getProvider',
            'frozenInfos' => 'getFrozenInfos'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['deployType'] = isset($data['deployType']) ? $data['deployType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['failureReason'] = isset($data['failureReason']) ? $data['failureReason'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['predictUrl'] = isset($data['predictUrl']) ? $data['predictUrl'] : null;
        $this->container['dispatcherGroupId'] = isset($data['dispatcherGroupId']) ? $data['dispatcherGroupId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['deployTimeoutMinutes'] = isset($data['deployTimeoutMinutes']) ? $data['deployTimeoutMinutes'] : null;
        $this->container['schedule'] = isset($data['schedule']) ? $data['schedule'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['frozenInfos'] = isset($data['frozenInfos']) ? $data['frozenInfos'] : null;
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
    * Gets id
    *  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **取值范围：** 不涉及。
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
    * @param string|null $id **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 服务名，用户在[创建服务](CreateInferService.xml)时自定义的名称。 **取值范围：** 支持1-64位字符，可包含字母、中文、数字、中划线、下划线。
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
    * @param string|null $name **参数解释：** 服务名，用户在[创建服务](CreateInferService.xml)时自定义的名称。 **取值范围：** 支持1-64位字符，可包含字母、中文、数字、中划线、下划线。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets workspaceId
    *  **参数解释：** 工作空间ID。 **取值范围：** - 0：默认空间ID。 - 由数字和小写字母组成的32位字符：其他空间ID，可参考[工作空间创建](CreateWorkspace.xml)。
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId **参数解释：** 工作空间ID。 **取值范围：** - 0：默认空间ID。 - 由数字和小写字母组成的32位字符：其他空间ID，可参考[工作空间创建](CreateWorkspace.xml)。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 推理服务类型。 **取值范围：** - REAL_TIME：在线服务。 - ASYNC_REAL_TIME：异步服务。
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
    * @param string|null $type **参数解释：** 推理服务类型。 **取值范围：** - REAL_TIME：在线服务。 - ASYNC_REAL_TIME：异步服务。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets deployType
    *  **参数解释：** 部署方式。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。
    *
    * @return string|null
    */
    public function getDeployType()
    {
        return $this->container['deployType'];
    }

    /**
    * Sets deployType
    *
    * @param string|null $deployType **参数解释：** 部署方式。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。
    *
    * @return $this
    */
    public function setDeployType($deployType)
    {
        $this->container['deployType'] = $deployType;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 服务当前状态。 **取值范围：** - DEPLOYING：部署中 。 - FAILED：失败 。 - STOPPED：停止。 - RUNNING：运行中。 - DELETING：删除中 。 - STOPPING：停止中 。 - CONCERNING：告警 。 - UPGRADING：升级中 。 - ERROR：异常 。 - INIT：待部署。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释：** 服务当前状态。 **取值范围：** - DEPLOYING：部署中 。 - FAILED：失败 。 - STOPPED：停止。 - RUNNING：运行中。 - DELETING：删除中 。 - STOPPING：停止中 。 - CONCERNING：告警 。 - UPGRADING：升级中 。 - ERROR：异常 。 - INIT：待部署。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets failureReason
    *  **参数解释：** 在线服务失败原因。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getFailureReason()
    {
        return $this->container['failureReason'];
    }

    /**
    * Sets failureReason
    *
    * @param string|null $failureReason **参数解释：** 在线服务失败原因。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setFailureReason($failureReason)
    {
        $this->container['failureReason'] = $failureReason;
        return $this;
    }

    /**
    * Gets version
    *  version
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ServiceVersionResponse|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ServiceVersionResponse|null $version version
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets predictUrl
    *  **参数解释：** 在线服务访问地址，创建服务接口无返回，详情接口中返回。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\PredictUrlResponse[]|null
    */
    public function getPredictUrl()
    {
        return $this->container['predictUrl'];
    }

    /**
    * Sets predictUrl
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\PredictUrlResponse[]|null $predictUrl **参数解释：** 在线服务访问地址，创建服务接口无返回，详情接口中返回。
    *
    * @return $this
    */
    public function setPredictUrl($predictUrl)
    {
        $this->container['predictUrl'] = $predictUrl;
        return $this;
    }

    /**
    * Gets dispatcherGroupId
    *  **参数解释：** 服务绑定的dispatcher组ID，创建服务接口无返回，详情接口中返回。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getDispatcherGroupId()
    {
        return $this->container['dispatcherGroupId'];
    }

    /**
    * Sets dispatcherGroupId
    *
    * @param string|null $dispatcherGroupId **参数解释：** 服务绑定的dispatcher组ID，创建服务接口无返回，详情接口中返回。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDispatcherGroupId($dispatcherGroupId)
    {
        $this->container['dispatcherGroupId'] = $dispatcherGroupId;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释：** TMS对接标签类。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\TagsResponse[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\TagsResponse[]|null $tags **参数解释：** TMS对接标签类。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets deployTimeoutMinutes
    *  **参数解释：** 部署超时时间。
    *
    * @return int|null
    */
    public function getDeployTimeoutMinutes()
    {
        return $this->container['deployTimeoutMinutes'];
    }

    /**
    * Sets deployTimeoutMinutes
    *
    * @param int|null $deployTimeoutMinutes **参数解释：** 部署超时时间。
    *
    * @return $this
    */
    public function setDeployTimeoutMinutes($deployTimeoutMinutes)
    {
        $this->container['deployTimeoutMinutes'] = $deployTimeoutMinutes;
        return $this;
    }

    /**
    * Gets schedule
    *  **参数解释：** 定时停止配置。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ScheduleConfigResponse[]|null
    */
    public function getSchedule()
    {
        return $this->container['schedule'];
    }

    /**
    * Sets schedule
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ScheduleConfigResponse[]|null $schedule **参数解释：** 定时停止配置。
    *
    * @return $this
    */
    public function setSchedule($schedule)
    {
        $this->container['schedule'] = $schedule;
        return $this;
    }

    /**
    * Gets createAt
    *  **参数解释：** 创建时间，根据创建时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字，如1609459200000。
    *
    * @return string|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param string|null $createAt **参数解释：** 创建时间，根据创建时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字，如1609459200000。
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets updateAt
    *  **参数解释：** 更新时间，根据更新时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字，如1609459200000。
    *
    * @return string|null
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param string|null $updateAt **参数解释：** 更新时间，根据更新时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字，如1609459200000。
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
        return $this;
    }

    /**
    * Gets taskType
    *  **参数解释：** 模型类型。 **取值范围：** - TEXT_GENERATION：文本生成 - IMAGE_UNDERSTANDING：图像理解 - VIDEO_GENERATION：视频生成 - IMAGE_GENERATION：图像生成 - RERANK：重排序 - VECTOR_MODEL：向量模型 - EMBEDDING：Embedding嵌入
    *
    * @return string|null
    */
    public function getTaskType()
    {
        return $this->container['taskType'];
    }

    /**
    * Sets taskType
    *
    * @param string|null $taskType **参数解释：** 模型类型。 **取值范围：** - TEXT_GENERATION：文本生成 - IMAGE_UNDERSTANDING：图像理解 - VIDEO_GENERATION：视频生成 - IMAGE_GENERATION：图像生成 - RERANK：重排序 - VECTOR_MODEL：向量模型 - EMBEDDING：Embedding嵌入
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
        return $this;
    }

    /**
    * Gets provider
    *  **参数解释：** 服务提供者的账号id（创建服务时通过X-Auth-Token-Provider请求头解析iam token而来），该值不为空时，该服务的所有更新操作需要在请求头中添加X-Auth-Token-Provider，取值为该账号id的domain级或project级token。
    *
    * @return string|null
    */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
    * Sets provider
    *
    * @param string|null $provider **参数解释：** 服务提供者的账号id（创建服务时通过X-Auth-Token-Provider请求头解析iam token而来），该值不为空时，该服务的所有更新操作需要在请求头中添加X-Auth-Token-Provider，取值为该账号id的domain级或project级token。
    *
    * @return $this
    */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;
        return $this;
    }

    /**
    * Gets frozenInfos
    *  **参数解释：** 当服务或者部署被冻结时返回的冻结类型信息。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\FrozenInfo[]|null
    */
    public function getFrozenInfos()
    {
        return $this->container['frozenInfos'];
    }

    /**
    * Sets frozenInfos
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\FrozenInfo[]|null $frozenInfos **参数解释：** 当服务或者部署被冻结时返回的冻结类型信息。
    *
    * @return $this
    */
    public function setFrozenInfos($frozenInfos)
    {
        $this->container['frozenInfos'] = $frozenInfos;
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

