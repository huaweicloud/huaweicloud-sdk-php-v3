<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServiceUpdateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServiceUpdateRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 服务ID **约束限制：** 不涉及。 **取值范围：** 不涉及
    * name  **参数解释：** 服务名称。 **约束限制：** 不涉及。 **取值范围：** 支持1-128个字符，可以包含字母、汉字、数字、连字符和下划线。 **默认取值：** 不涉及。
    * deployTimeoutMinutes  **参数解释：** 服务部署超时时间，integer类型，取值在1~300（860版本该参数做保留兼容）。 **约束限制：** 不涉及。 **取值范围：** [0, 300]。 **默认取值：** 不涉及。
    * version  **参数解释：** 必填，填了之后，数据库中如果存在相同版本号，将会报错（仅修改描述的场景除外）。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * description  **参数解释：** 非必填，仅更新描述的场景直接修改对应version的数据库字段，不新增版本号。 **约束限制：** 不涉及。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * groupConfigs  **参数解释：** 仅修改服务时不需传，兼容部署分离之前版本。 **约束限制：** group_configs的最大元素数量为1。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * runtimeConfig  runtimeConfig
    * upgradeConfig  upgradeConfig
    * ltsStrategy  **参数解释：** 日志策略。 **约束限制：** 不涉及。 **取值范围：** - POOL：使用资源池日志插件配置的日志流。 - AUTO_CREATE：自动创建日志流。 - DEFAULT: 由系统决定日志策略 **默认取值：** AUTO_CREATE：自动创建日志流。
    * logConfigs  **参数解释：** 日志配置，当开启LTS日志的时候，STDOUT类型为必填。 **约束限制：** 当开启LTS日志的时候，STDOUT类型为必填。 数量上限为2个。
    * tags  **参数解释：** 服务标签,上限20个 **约束限制：** 不涉及。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * workspaceId  **参数解释：** 工作空间id，默认是“0” **约束限制：** 不涉及。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * schedule  **参数解释：** 定时停止配置。 **约束限制：** 仅当body中另一个参数description为空时，此参数才生效。
    * customMetricsPath  **参数解释：** 该参数值由英文逗号隔开的协议、端口号、地址组成，其中地址长度不超过255 ，且需要与镜像给定的协议、地址、端口一致，否则指标无法上报。
    * taskType  **参数解释：** 模型类型。 **取值范围：** - TEXT_GENERATION：文本生成 - IMAGE_UNDERSTANDING：图像理解 - VIDEO_GENERATION：视频生成 - IMAGE_GENERATION：图像生成 - RERANK：重排序 - VECTOR_MODEL：向量模型 - EMBEDDING：Embedding嵌入
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'deployTimeoutMinutes' => 'int',
            'version' => 'string',
            'description' => 'string',
            'groupConfigs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\GroupConfig[]',
            'runtimeConfig' => '\HuaweiCloud\SDK\ModelArts\V1\Model\RuntimeConfig',
            'upgradeConfig' => '\HuaweiCloud\SDK\ModelArts\V1\Model\UpgradeConfig',
            'ltsStrategy' => 'string',
            'logConfigs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\LtsConfig[]',
            'tags' => 'string',
            'workspaceId' => 'string',
            'schedule' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ScheduleConfig[]',
            'customMetricsPath' => 'string',
            'taskType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 服务ID **约束限制：** 不涉及。 **取值范围：** 不涉及
    * name  **参数解释：** 服务名称。 **约束限制：** 不涉及。 **取值范围：** 支持1-128个字符，可以包含字母、汉字、数字、连字符和下划线。 **默认取值：** 不涉及。
    * deployTimeoutMinutes  **参数解释：** 服务部署超时时间，integer类型，取值在1~300（860版本该参数做保留兼容）。 **约束限制：** 不涉及。 **取值范围：** [0, 300]。 **默认取值：** 不涉及。
    * version  **参数解释：** 必填，填了之后，数据库中如果存在相同版本号，将会报错（仅修改描述的场景除外）。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * description  **参数解释：** 非必填，仅更新描述的场景直接修改对应version的数据库字段，不新增版本号。 **约束限制：** 不涉及。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * groupConfigs  **参数解释：** 仅修改服务时不需传，兼容部署分离之前版本。 **约束限制：** group_configs的最大元素数量为1。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * runtimeConfig  runtimeConfig
    * upgradeConfig  upgradeConfig
    * ltsStrategy  **参数解释：** 日志策略。 **约束限制：** 不涉及。 **取值范围：** - POOL：使用资源池日志插件配置的日志流。 - AUTO_CREATE：自动创建日志流。 - DEFAULT: 由系统决定日志策略 **默认取值：** AUTO_CREATE：自动创建日志流。
    * logConfigs  **参数解释：** 日志配置，当开启LTS日志的时候，STDOUT类型为必填。 **约束限制：** 当开启LTS日志的时候，STDOUT类型为必填。 数量上限为2个。
    * tags  **参数解释：** 服务标签,上限20个 **约束限制：** 不涉及。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * workspaceId  **参数解释：** 工作空间id，默认是“0” **约束限制：** 不涉及。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * schedule  **参数解释：** 定时停止配置。 **约束限制：** 仅当body中另一个参数description为空时，此参数才生效。
    * customMetricsPath  **参数解释：** 该参数值由英文逗号隔开的协议、端口号、地址组成，其中地址长度不超过255 ，且需要与镜像给定的协议、地址、端口一致，否则指标无法上报。
    * taskType  **参数解释：** 模型类型。 **取值范围：** - TEXT_GENERATION：文本生成 - IMAGE_UNDERSTANDING：图像理解 - VIDEO_GENERATION：视频生成 - IMAGE_GENERATION：图像生成 - RERANK：重排序 - VECTOR_MODEL：向量模型 - EMBEDDING：Embedding嵌入
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'deployTimeoutMinutes' => 'int32',
        'version' => null,
        'description' => null,
        'groupConfigs' => null,
        'runtimeConfig' => null,
        'upgradeConfig' => null,
        'ltsStrategy' => null,
        'logConfigs' => null,
        'tags' => null,
        'workspaceId' => null,
        'schedule' => null,
        'customMetricsPath' => null,
        'taskType' => null
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
    * id  **参数解释：** 服务ID **约束限制：** 不涉及。 **取值范围：** 不涉及
    * name  **参数解释：** 服务名称。 **约束限制：** 不涉及。 **取值范围：** 支持1-128个字符，可以包含字母、汉字、数字、连字符和下划线。 **默认取值：** 不涉及。
    * deployTimeoutMinutes  **参数解释：** 服务部署超时时间，integer类型，取值在1~300（860版本该参数做保留兼容）。 **约束限制：** 不涉及。 **取值范围：** [0, 300]。 **默认取值：** 不涉及。
    * version  **参数解释：** 必填，填了之后，数据库中如果存在相同版本号，将会报错（仅修改描述的场景除外）。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * description  **参数解释：** 非必填，仅更新描述的场景直接修改对应version的数据库字段，不新增版本号。 **约束限制：** 不涉及。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * groupConfigs  **参数解释：** 仅修改服务时不需传，兼容部署分离之前版本。 **约束限制：** group_configs的最大元素数量为1。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * runtimeConfig  runtimeConfig
    * upgradeConfig  upgradeConfig
    * ltsStrategy  **参数解释：** 日志策略。 **约束限制：** 不涉及。 **取值范围：** - POOL：使用资源池日志插件配置的日志流。 - AUTO_CREATE：自动创建日志流。 - DEFAULT: 由系统决定日志策略 **默认取值：** AUTO_CREATE：自动创建日志流。
    * logConfigs  **参数解释：** 日志配置，当开启LTS日志的时候，STDOUT类型为必填。 **约束限制：** 当开启LTS日志的时候，STDOUT类型为必填。 数量上限为2个。
    * tags  **参数解释：** 服务标签,上限20个 **约束限制：** 不涉及。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * workspaceId  **参数解释：** 工作空间id，默认是“0” **约束限制：** 不涉及。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * schedule  **参数解释：** 定时停止配置。 **约束限制：** 仅当body中另一个参数description为空时，此参数才生效。
    * customMetricsPath  **参数解释：** 该参数值由英文逗号隔开的协议、端口号、地址组成，其中地址长度不超过255 ，且需要与镜像给定的协议、地址、端口一致，否则指标无法上报。
    * taskType  **参数解释：** 模型类型。 **取值范围：** - TEXT_GENERATION：文本生成 - IMAGE_UNDERSTANDING：图像理解 - VIDEO_GENERATION：视频生成 - IMAGE_GENERATION：图像生成 - RERANK：重排序 - VECTOR_MODEL：向量模型 - EMBEDDING：Embedding嵌入
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'deployTimeoutMinutes' => 'deploy_timeout_minutes',
            'version' => 'version',
            'description' => 'description',
            'groupConfigs' => 'group_configs',
            'runtimeConfig' => 'runtime_config',
            'upgradeConfig' => 'upgrade_config',
            'ltsStrategy' => 'lts_strategy',
            'logConfigs' => 'log_configs',
            'tags' => 'tags',
            'workspaceId' => 'workspace_id',
            'schedule' => 'schedule',
            'customMetricsPath' => 'custom_metrics_path',
            'taskType' => 'task_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 服务ID **约束限制：** 不涉及。 **取值范围：** 不涉及
    * name  **参数解释：** 服务名称。 **约束限制：** 不涉及。 **取值范围：** 支持1-128个字符，可以包含字母、汉字、数字、连字符和下划线。 **默认取值：** 不涉及。
    * deployTimeoutMinutes  **参数解释：** 服务部署超时时间，integer类型，取值在1~300（860版本该参数做保留兼容）。 **约束限制：** 不涉及。 **取值范围：** [0, 300]。 **默认取值：** 不涉及。
    * version  **参数解释：** 必填，填了之后，数据库中如果存在相同版本号，将会报错（仅修改描述的场景除外）。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * description  **参数解释：** 非必填，仅更新描述的场景直接修改对应version的数据库字段，不新增版本号。 **约束限制：** 不涉及。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * groupConfigs  **参数解释：** 仅修改服务时不需传，兼容部署分离之前版本。 **约束限制：** group_configs的最大元素数量为1。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * runtimeConfig  runtimeConfig
    * upgradeConfig  upgradeConfig
    * ltsStrategy  **参数解释：** 日志策略。 **约束限制：** 不涉及。 **取值范围：** - POOL：使用资源池日志插件配置的日志流。 - AUTO_CREATE：自动创建日志流。 - DEFAULT: 由系统决定日志策略 **默认取值：** AUTO_CREATE：自动创建日志流。
    * logConfigs  **参数解释：** 日志配置，当开启LTS日志的时候，STDOUT类型为必填。 **约束限制：** 当开启LTS日志的时候，STDOUT类型为必填。 数量上限为2个。
    * tags  **参数解释：** 服务标签,上限20个 **约束限制：** 不涉及。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * workspaceId  **参数解释：** 工作空间id，默认是“0” **约束限制：** 不涉及。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * schedule  **参数解释：** 定时停止配置。 **约束限制：** 仅当body中另一个参数description为空时，此参数才生效。
    * customMetricsPath  **参数解释：** 该参数值由英文逗号隔开的协议、端口号、地址组成，其中地址长度不超过255 ，且需要与镜像给定的协议、地址、端口一致，否则指标无法上报。
    * taskType  **参数解释：** 模型类型。 **取值范围：** - TEXT_GENERATION：文本生成 - IMAGE_UNDERSTANDING：图像理解 - VIDEO_GENERATION：视频生成 - IMAGE_GENERATION：图像生成 - RERANK：重排序 - VECTOR_MODEL：向量模型 - EMBEDDING：Embedding嵌入
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'deployTimeoutMinutes' => 'setDeployTimeoutMinutes',
            'version' => 'setVersion',
            'description' => 'setDescription',
            'groupConfigs' => 'setGroupConfigs',
            'runtimeConfig' => 'setRuntimeConfig',
            'upgradeConfig' => 'setUpgradeConfig',
            'ltsStrategy' => 'setLtsStrategy',
            'logConfigs' => 'setLogConfigs',
            'tags' => 'setTags',
            'workspaceId' => 'setWorkspaceId',
            'schedule' => 'setSchedule',
            'customMetricsPath' => 'setCustomMetricsPath',
            'taskType' => 'setTaskType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 服务ID **约束限制：** 不涉及。 **取值范围：** 不涉及
    * name  **参数解释：** 服务名称。 **约束限制：** 不涉及。 **取值范围：** 支持1-128个字符，可以包含字母、汉字、数字、连字符和下划线。 **默认取值：** 不涉及。
    * deployTimeoutMinutes  **参数解释：** 服务部署超时时间，integer类型，取值在1~300（860版本该参数做保留兼容）。 **约束限制：** 不涉及。 **取值范围：** [0, 300]。 **默认取值：** 不涉及。
    * version  **参数解释：** 必填，填了之后，数据库中如果存在相同版本号，将会报错（仅修改描述的场景除外）。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * description  **参数解释：** 非必填，仅更新描述的场景直接修改对应version的数据库字段，不新增版本号。 **约束限制：** 不涉及。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * groupConfigs  **参数解释：** 仅修改服务时不需传，兼容部署分离之前版本。 **约束限制：** group_configs的最大元素数量为1。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * runtimeConfig  runtimeConfig
    * upgradeConfig  upgradeConfig
    * ltsStrategy  **参数解释：** 日志策略。 **约束限制：** 不涉及。 **取值范围：** - POOL：使用资源池日志插件配置的日志流。 - AUTO_CREATE：自动创建日志流。 - DEFAULT: 由系统决定日志策略 **默认取值：** AUTO_CREATE：自动创建日志流。
    * logConfigs  **参数解释：** 日志配置，当开启LTS日志的时候，STDOUT类型为必填。 **约束限制：** 当开启LTS日志的时候，STDOUT类型为必填。 数量上限为2个。
    * tags  **参数解释：** 服务标签,上限20个 **约束限制：** 不涉及。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * workspaceId  **参数解释：** 工作空间id，默认是“0” **约束限制：** 不涉及。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * schedule  **参数解释：** 定时停止配置。 **约束限制：** 仅当body中另一个参数description为空时，此参数才生效。
    * customMetricsPath  **参数解释：** 该参数值由英文逗号隔开的协议、端口号、地址组成，其中地址长度不超过255 ，且需要与镜像给定的协议、地址、端口一致，否则指标无法上报。
    * taskType  **参数解释：** 模型类型。 **取值范围：** - TEXT_GENERATION：文本生成 - IMAGE_UNDERSTANDING：图像理解 - VIDEO_GENERATION：视频生成 - IMAGE_GENERATION：图像生成 - RERANK：重排序 - VECTOR_MODEL：向量模型 - EMBEDDING：Embedding嵌入
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'deployTimeoutMinutes' => 'getDeployTimeoutMinutes',
            'version' => 'getVersion',
            'description' => 'getDescription',
            'groupConfigs' => 'getGroupConfigs',
            'runtimeConfig' => 'getRuntimeConfig',
            'upgradeConfig' => 'getUpgradeConfig',
            'ltsStrategy' => 'getLtsStrategy',
            'logConfigs' => 'getLogConfigs',
            'tags' => 'getTags',
            'workspaceId' => 'getWorkspaceId',
            'schedule' => 'getSchedule',
            'customMetricsPath' => 'getCustomMetricsPath',
            'taskType' => 'getTaskType'
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
        $this->container['deployTimeoutMinutes'] = isset($data['deployTimeoutMinutes']) ? $data['deployTimeoutMinutes'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['groupConfigs'] = isset($data['groupConfigs']) ? $data['groupConfigs'] : null;
        $this->container['runtimeConfig'] = isset($data['runtimeConfig']) ? $data['runtimeConfig'] : null;
        $this->container['upgradeConfig'] = isset($data['upgradeConfig']) ? $data['upgradeConfig'] : null;
        $this->container['ltsStrategy'] = isset($data['ltsStrategy']) ? $data['ltsStrategy'] : null;
        $this->container['logConfigs'] = isset($data['logConfigs']) ? $data['logConfigs'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['schedule'] = isset($data['schedule']) ? $data['schedule'] : null;
        $this->container['customMetricsPath'] = isset($data['customMetricsPath']) ? $data['customMetricsPath'] : null;
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
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
    *  **参数解释：** 服务ID **约束限制：** 不涉及。 **取值范围：** 不涉及
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
    * @param string|null $id **参数解释：** 服务ID **约束限制：** 不涉及。 **取值范围：** 不涉及
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
    *  **参数解释：** 服务名称。 **约束限制：** 不涉及。 **取值范围：** 支持1-128个字符，可以包含字母、汉字、数字、连字符和下划线。 **默认取值：** 不涉及。
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
    * @param string|null $name **参数解释：** 服务名称。 **约束限制：** 不涉及。 **取值范围：** 支持1-128个字符，可以包含字母、汉字、数字、连字符和下划线。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets deployTimeoutMinutes
    *  **参数解释：** 服务部署超时时间，integer类型，取值在1~300（860版本该参数做保留兼容）。 **约束限制：** 不涉及。 **取值范围：** [0, 300]。 **默认取值：** 不涉及。
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
    * @param int|null $deployTimeoutMinutes **参数解释：** 服务部署超时时间，integer类型，取值在1~300（860版本该参数做保留兼容）。 **约束限制：** 不涉及。 **取值范围：** [0, 300]。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setDeployTimeoutMinutes($deployTimeoutMinutes)
    {
        $this->container['deployTimeoutMinutes'] = $deployTimeoutMinutes;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释：** 必填，填了之后，数据库中如果存在相同版本号，将会报错（仅修改描述的场景除外）。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string|null $version **参数解释：** 必填，填了之后，数据库中如果存在相同版本号，将会报错（仅修改描述的场景除外）。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：** 非必填，仅更新描述的场景直接修改对应version的数据库字段，不新增版本号。 **约束限制：** 不涉及。 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $description **参数解释：** 非必填，仅更新描述的场景直接修改对应version的数据库字段，不新增版本号。 **约束限制：** 不涉及。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets groupConfigs
    *  **参数解释：** 仅修改服务时不需传，兼容部署分离之前版本。 **约束限制：** group_configs的最大元素数量为1。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\GroupConfig[]|null
    */
    public function getGroupConfigs()
    {
        return $this->container['groupConfigs'];
    }

    /**
    * Sets groupConfigs
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\GroupConfig[]|null $groupConfigs **参数解释：** 仅修改服务时不需传，兼容部署分离之前版本。 **约束限制：** group_configs的最大元素数量为1。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setGroupConfigs($groupConfigs)
    {
        $this->container['groupConfigs'] = $groupConfigs;
        return $this;
    }

    /**
    * Gets runtimeConfig
    *  runtimeConfig
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\RuntimeConfig|null
    */
    public function getRuntimeConfig()
    {
        return $this->container['runtimeConfig'];
    }

    /**
    * Sets runtimeConfig
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\RuntimeConfig|null $runtimeConfig runtimeConfig
    *
    * @return $this
    */
    public function setRuntimeConfig($runtimeConfig)
    {
        $this->container['runtimeConfig'] = $runtimeConfig;
        return $this;
    }

    /**
    * Gets upgradeConfig
    *  upgradeConfig
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\UpgradeConfig|null
    */
    public function getUpgradeConfig()
    {
        return $this->container['upgradeConfig'];
    }

    /**
    * Sets upgradeConfig
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\UpgradeConfig|null $upgradeConfig upgradeConfig
    *
    * @return $this
    */
    public function setUpgradeConfig($upgradeConfig)
    {
        $this->container['upgradeConfig'] = $upgradeConfig;
        return $this;
    }

    /**
    * Gets ltsStrategy
    *  **参数解释：** 日志策略。 **约束限制：** 不涉及。 **取值范围：** - POOL：使用资源池日志插件配置的日志流。 - AUTO_CREATE：自动创建日志流。 - DEFAULT: 由系统决定日志策略 **默认取值：** AUTO_CREATE：自动创建日志流。
    *
    * @return string|null
    */
    public function getLtsStrategy()
    {
        return $this->container['ltsStrategy'];
    }

    /**
    * Sets ltsStrategy
    *
    * @param string|null $ltsStrategy **参数解释：** 日志策略。 **约束限制：** 不涉及。 **取值范围：** - POOL：使用资源池日志插件配置的日志流。 - AUTO_CREATE：自动创建日志流。 - DEFAULT: 由系统决定日志策略 **默认取值：** AUTO_CREATE：自动创建日志流。
    *
    * @return $this
    */
    public function setLtsStrategy($ltsStrategy)
    {
        $this->container['ltsStrategy'] = $ltsStrategy;
        return $this;
    }

    /**
    * Gets logConfigs
    *  **参数解释：** 日志配置，当开启LTS日志的时候，STDOUT类型为必填。 **约束限制：** 当开启LTS日志的时候，STDOUT类型为必填。 数量上限为2个。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\LtsConfig[]|null
    */
    public function getLogConfigs()
    {
        return $this->container['logConfigs'];
    }

    /**
    * Sets logConfigs
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\LtsConfig[]|null $logConfigs **参数解释：** 日志配置，当开启LTS日志的时候，STDOUT类型为必填。 **约束限制：** 当开启LTS日志的时候，STDOUT类型为必填。 数量上限为2个。
    *
    * @return $this
    */
    public function setLogConfigs($logConfigs)
    {
        $this->container['logConfigs'] = $logConfigs;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释：** 服务标签,上限20个 **约束限制：** 不涉及。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string|null $tags **参数解释：** 服务标签,上限20个 **约束限制：** 不涉及。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets workspaceId
    *  **参数解释：** 工作空间id，默认是“0” **约束限制：** 不涉及。 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $workspaceId **参数解释：** 工作空间id，默认是“0” **约束限制：** 不涉及。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets schedule
    *  **参数解释：** 定时停止配置。 **约束限制：** 仅当body中另一个参数description为空时，此参数才生效。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ScheduleConfig[]|null
    */
    public function getSchedule()
    {
        return $this->container['schedule'];
    }

    /**
    * Sets schedule
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ScheduleConfig[]|null $schedule **参数解释：** 定时停止配置。 **约束限制：** 仅当body中另一个参数description为空时，此参数才生效。
    *
    * @return $this
    */
    public function setSchedule($schedule)
    {
        $this->container['schedule'] = $schedule;
        return $this;
    }

    /**
    * Gets customMetricsPath
    *  **参数解释：** 该参数值由英文逗号隔开的协议、端口号、地址组成，其中地址长度不超过255 ，且需要与镜像给定的协议、地址、端口一致，否则指标无法上报。
    *
    * @return string|null
    */
    public function getCustomMetricsPath()
    {
        return $this->container['customMetricsPath'];
    }

    /**
    * Sets customMetricsPath
    *
    * @param string|null $customMetricsPath **参数解释：** 该参数值由英文逗号隔开的协议、端口号、地址组成，其中地址长度不超过255 ，且需要与镜像给定的协议、地址、端口一致，否则指标无法上报。
    *
    * @return $this
    */
    public function setCustomMetricsPath($customMetricsPath)
    {
        $this->container['customMetricsPath'] = $customMetricsPath;
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

