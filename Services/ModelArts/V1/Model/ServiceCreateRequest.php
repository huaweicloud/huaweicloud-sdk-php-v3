<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServiceCreateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServiceCreateRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释：** 服务名，用户在[创建服务](CreateInferService.xml)时自定义的名称。 **约束限制：** 服务在删除之前名字不能重复。 **取值范围：** 支持1-64位字符，可包含字母、中文、数字、中划线、下划线。 **默认取值：** 不涉及。
    * version  **参数解释：** 服务版本号，以数字及点号组成，形如1.0.1。 **约束限制：** 不涉及。 **取值范围：** 1.0.0 ~ 99.99.99，长度不超过8位。 **默认取值：** 前端可不传默认设置为1.0.0。
    * description  **参数解释：** 服务备注。 **约束限制：** 不涉及。 **取值范围：** 长度不可以超过512，不能包含大于号，小于号。 **默认取值：** 默认为空。
    * type  **参数解释：** 推理服务类型。 **约束限制：** 不涉及。 **取值范围：** - REAL_TIME：在线服务。 - ASYNC_REAL_TIME：异步服务。 **默认取值：** 不涉及。
    * deployType  **参数解释：** 部署类型。 **约束限制：** 不涉及。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。 **默认取值：** 不涉及。
    * groupConfigs  **参数解释：** 服务实例组配置。 **约束限制：** 仅创建服务时group_configs可传[]空数组，group_configs的最大元素数量为1。
    * runtimeConfig  runtimeConfig
    * upgradeConfig  upgradeConfig
    * ltsStrategy  **参数解释：** 日志策略。 **约束限制：** 不涉及。 **取值范围：** - POOL：使用资源池日志插件配置的日志流。 - AUTO_CREATE：自动创建日志流。 - DEFAULT: 由系统决定日志策略 **默认取值：** AUTO_CREATE：自动创建日志流。
    * logConfigs  **参数解释：** 日志配置。 **约束限制：** 当开启LTS日志的时候，STDOUT类型为必填。 数量上限为2个。
    * tags  **参数解释：** 服务标签。 **约束限制：** 上限20个。
    * workspaceId  **参数解释：** 工作空间ID。 **约束限制：** 不涉及。 **取值范围：** - 0：默认空间ID。 - 由数字和小写字母组成的32位字符：其他空间ID，可参考[工作空间创建](CreateWorkspace.xml)。 **默认取值：** 不涉及。
    * schedule  **参数解释：** 定时停止配置。 **约束限制：** 最多支持一个定时任务。
    * customMetricsPath  **参数解释：** 该参数值由英文逗号隔开的协议、端口号、地址组成，比如：[http,8080,metrics]，其中地址长度不超过255 ，且需要与镜像给定的协议、地址、端口一致，否则指标无法上报。 **约束限制：** 长度不超过255。 **取值范围：** - 协议范围：http/https。 - 端口范围：1-65535。 - 地址范围：仅包含字母、数字、点号（.）、中划线（-)、下划线（_）、斜杠（/）的路径，非斜杠（/）开头。 **默认取值：** 不涉及。
    * deployTimeoutMinutes  **参数解释：** 服务部署超时时间，integer类型，取值在1~300 （860版本该参数在服务层级做保留兼容）。 **约束限制：** 不涉及。 **取值范围：** [0, 300]。 **默认取值：** 不涉及。
    * taskType  **参数解释：** 模型类型。 **取值范围：** - TEXT_GENERATION：文本生成 - IMAGE_UNDERSTANDING：图像理解 - VIDEO_GENERATION：视频生成 - IMAGE_GENERATION：图像生成 - RERANK：重排序 - VECTOR_MODEL：向量模型 - EMBEDDING：Embedding嵌入
    * workloadType  **参数解释：** 工作负载类型。 **取值范围：** - DEPLOYMENT：DEPLOYMENT类型 - LWS：LWS类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'version' => 'string',
            'description' => 'string',
            'type' => 'string',
            'deployType' => 'string',
            'groupConfigs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\GroupConfig[]',
            'runtimeConfig' => '\HuaweiCloud\SDK\ModelArts\V1\Model\RuntimeConfig',
            'upgradeConfig' => '\HuaweiCloud\SDK\ModelArts\V1\Model\UpgradeConfig',
            'ltsStrategy' => 'string',
            'logConfigs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\LtsConfig[]',
            'tags' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ServiceCreateRequestTags[]',
            'workspaceId' => 'string',
            'schedule' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ScheduleConfig[]',
            'customMetricsPath' => 'string',
            'deployTimeoutMinutes' => 'int',
            'taskType' => 'string',
            'workloadType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释：** 服务名，用户在[创建服务](CreateInferService.xml)时自定义的名称。 **约束限制：** 服务在删除之前名字不能重复。 **取值范围：** 支持1-64位字符，可包含字母、中文、数字、中划线、下划线。 **默认取值：** 不涉及。
    * version  **参数解释：** 服务版本号，以数字及点号组成，形如1.0.1。 **约束限制：** 不涉及。 **取值范围：** 1.0.0 ~ 99.99.99，长度不超过8位。 **默认取值：** 前端可不传默认设置为1.0.0。
    * description  **参数解释：** 服务备注。 **约束限制：** 不涉及。 **取值范围：** 长度不可以超过512，不能包含大于号，小于号。 **默认取值：** 默认为空。
    * type  **参数解释：** 推理服务类型。 **约束限制：** 不涉及。 **取值范围：** - REAL_TIME：在线服务。 - ASYNC_REAL_TIME：异步服务。 **默认取值：** 不涉及。
    * deployType  **参数解释：** 部署类型。 **约束限制：** 不涉及。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。 **默认取值：** 不涉及。
    * groupConfigs  **参数解释：** 服务实例组配置。 **约束限制：** 仅创建服务时group_configs可传[]空数组，group_configs的最大元素数量为1。
    * runtimeConfig  runtimeConfig
    * upgradeConfig  upgradeConfig
    * ltsStrategy  **参数解释：** 日志策略。 **约束限制：** 不涉及。 **取值范围：** - POOL：使用资源池日志插件配置的日志流。 - AUTO_CREATE：自动创建日志流。 - DEFAULT: 由系统决定日志策略 **默认取值：** AUTO_CREATE：自动创建日志流。
    * logConfigs  **参数解释：** 日志配置。 **约束限制：** 当开启LTS日志的时候，STDOUT类型为必填。 数量上限为2个。
    * tags  **参数解释：** 服务标签。 **约束限制：** 上限20个。
    * workspaceId  **参数解释：** 工作空间ID。 **约束限制：** 不涉及。 **取值范围：** - 0：默认空间ID。 - 由数字和小写字母组成的32位字符：其他空间ID，可参考[工作空间创建](CreateWorkspace.xml)。 **默认取值：** 不涉及。
    * schedule  **参数解释：** 定时停止配置。 **约束限制：** 最多支持一个定时任务。
    * customMetricsPath  **参数解释：** 该参数值由英文逗号隔开的协议、端口号、地址组成，比如：[http,8080,metrics]，其中地址长度不超过255 ，且需要与镜像给定的协议、地址、端口一致，否则指标无法上报。 **约束限制：** 长度不超过255。 **取值范围：** - 协议范围：http/https。 - 端口范围：1-65535。 - 地址范围：仅包含字母、数字、点号（.）、中划线（-)、下划线（_）、斜杠（/）的路径，非斜杠（/）开头。 **默认取值：** 不涉及。
    * deployTimeoutMinutes  **参数解释：** 服务部署超时时间，integer类型，取值在1~300 （860版本该参数在服务层级做保留兼容）。 **约束限制：** 不涉及。 **取值范围：** [0, 300]。 **默认取值：** 不涉及。
    * taskType  **参数解释：** 模型类型。 **取值范围：** - TEXT_GENERATION：文本生成 - IMAGE_UNDERSTANDING：图像理解 - VIDEO_GENERATION：视频生成 - IMAGE_GENERATION：图像生成 - RERANK：重排序 - VECTOR_MODEL：向量模型 - EMBEDDING：Embedding嵌入
    * workloadType  **参数解释：** 工作负载类型。 **取值范围：** - DEPLOYMENT：DEPLOYMENT类型 - LWS：LWS类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'version' => null,
        'description' => null,
        'type' => null,
        'deployType' => null,
        'groupConfigs' => null,
        'runtimeConfig' => null,
        'upgradeConfig' => null,
        'ltsStrategy' => null,
        'logConfigs' => null,
        'tags' => null,
        'workspaceId' => null,
        'schedule' => null,
        'customMetricsPath' => null,
        'deployTimeoutMinutes' => 'int32',
        'taskType' => null,
        'workloadType' => null
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
    * name  **参数解释：** 服务名，用户在[创建服务](CreateInferService.xml)时自定义的名称。 **约束限制：** 服务在删除之前名字不能重复。 **取值范围：** 支持1-64位字符，可包含字母、中文、数字、中划线、下划线。 **默认取值：** 不涉及。
    * version  **参数解释：** 服务版本号，以数字及点号组成，形如1.0.1。 **约束限制：** 不涉及。 **取值范围：** 1.0.0 ~ 99.99.99，长度不超过8位。 **默认取值：** 前端可不传默认设置为1.0.0。
    * description  **参数解释：** 服务备注。 **约束限制：** 不涉及。 **取值范围：** 长度不可以超过512，不能包含大于号，小于号。 **默认取值：** 默认为空。
    * type  **参数解释：** 推理服务类型。 **约束限制：** 不涉及。 **取值范围：** - REAL_TIME：在线服务。 - ASYNC_REAL_TIME：异步服务。 **默认取值：** 不涉及。
    * deployType  **参数解释：** 部署类型。 **约束限制：** 不涉及。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。 **默认取值：** 不涉及。
    * groupConfigs  **参数解释：** 服务实例组配置。 **约束限制：** 仅创建服务时group_configs可传[]空数组，group_configs的最大元素数量为1。
    * runtimeConfig  runtimeConfig
    * upgradeConfig  upgradeConfig
    * ltsStrategy  **参数解释：** 日志策略。 **约束限制：** 不涉及。 **取值范围：** - POOL：使用资源池日志插件配置的日志流。 - AUTO_CREATE：自动创建日志流。 - DEFAULT: 由系统决定日志策略 **默认取值：** AUTO_CREATE：自动创建日志流。
    * logConfigs  **参数解释：** 日志配置。 **约束限制：** 当开启LTS日志的时候，STDOUT类型为必填。 数量上限为2个。
    * tags  **参数解释：** 服务标签。 **约束限制：** 上限20个。
    * workspaceId  **参数解释：** 工作空间ID。 **约束限制：** 不涉及。 **取值范围：** - 0：默认空间ID。 - 由数字和小写字母组成的32位字符：其他空间ID，可参考[工作空间创建](CreateWorkspace.xml)。 **默认取值：** 不涉及。
    * schedule  **参数解释：** 定时停止配置。 **约束限制：** 最多支持一个定时任务。
    * customMetricsPath  **参数解释：** 该参数值由英文逗号隔开的协议、端口号、地址组成，比如：[http,8080,metrics]，其中地址长度不超过255 ，且需要与镜像给定的协议、地址、端口一致，否则指标无法上报。 **约束限制：** 长度不超过255。 **取值范围：** - 协议范围：http/https。 - 端口范围：1-65535。 - 地址范围：仅包含字母、数字、点号（.）、中划线（-)、下划线（_）、斜杠（/）的路径，非斜杠（/）开头。 **默认取值：** 不涉及。
    * deployTimeoutMinutes  **参数解释：** 服务部署超时时间，integer类型，取值在1~300 （860版本该参数在服务层级做保留兼容）。 **约束限制：** 不涉及。 **取值范围：** [0, 300]。 **默认取值：** 不涉及。
    * taskType  **参数解释：** 模型类型。 **取值范围：** - TEXT_GENERATION：文本生成 - IMAGE_UNDERSTANDING：图像理解 - VIDEO_GENERATION：视频生成 - IMAGE_GENERATION：图像生成 - RERANK：重排序 - VECTOR_MODEL：向量模型 - EMBEDDING：Embedding嵌入
    * workloadType  **参数解释：** 工作负载类型。 **取值范围：** - DEPLOYMENT：DEPLOYMENT类型 - LWS：LWS类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'version' => 'version',
            'description' => 'description',
            'type' => 'type',
            'deployType' => 'deploy_type',
            'groupConfigs' => 'group_configs',
            'runtimeConfig' => 'runtime_config',
            'upgradeConfig' => 'upgrade_config',
            'ltsStrategy' => 'lts_strategy',
            'logConfigs' => 'log_configs',
            'tags' => 'tags',
            'workspaceId' => 'workspace_id',
            'schedule' => 'schedule',
            'customMetricsPath' => 'custom_metrics_path',
            'deployTimeoutMinutes' => 'deploy_timeout_minutes',
            'taskType' => 'task_type',
            'workloadType' => 'workload_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释：** 服务名，用户在[创建服务](CreateInferService.xml)时自定义的名称。 **约束限制：** 服务在删除之前名字不能重复。 **取值范围：** 支持1-64位字符，可包含字母、中文、数字、中划线、下划线。 **默认取值：** 不涉及。
    * version  **参数解释：** 服务版本号，以数字及点号组成，形如1.0.1。 **约束限制：** 不涉及。 **取值范围：** 1.0.0 ~ 99.99.99，长度不超过8位。 **默认取值：** 前端可不传默认设置为1.0.0。
    * description  **参数解释：** 服务备注。 **约束限制：** 不涉及。 **取值范围：** 长度不可以超过512，不能包含大于号，小于号。 **默认取值：** 默认为空。
    * type  **参数解释：** 推理服务类型。 **约束限制：** 不涉及。 **取值范围：** - REAL_TIME：在线服务。 - ASYNC_REAL_TIME：异步服务。 **默认取值：** 不涉及。
    * deployType  **参数解释：** 部署类型。 **约束限制：** 不涉及。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。 **默认取值：** 不涉及。
    * groupConfigs  **参数解释：** 服务实例组配置。 **约束限制：** 仅创建服务时group_configs可传[]空数组，group_configs的最大元素数量为1。
    * runtimeConfig  runtimeConfig
    * upgradeConfig  upgradeConfig
    * ltsStrategy  **参数解释：** 日志策略。 **约束限制：** 不涉及。 **取值范围：** - POOL：使用资源池日志插件配置的日志流。 - AUTO_CREATE：自动创建日志流。 - DEFAULT: 由系统决定日志策略 **默认取值：** AUTO_CREATE：自动创建日志流。
    * logConfigs  **参数解释：** 日志配置。 **约束限制：** 当开启LTS日志的时候，STDOUT类型为必填。 数量上限为2个。
    * tags  **参数解释：** 服务标签。 **约束限制：** 上限20个。
    * workspaceId  **参数解释：** 工作空间ID。 **约束限制：** 不涉及。 **取值范围：** - 0：默认空间ID。 - 由数字和小写字母组成的32位字符：其他空间ID，可参考[工作空间创建](CreateWorkspace.xml)。 **默认取值：** 不涉及。
    * schedule  **参数解释：** 定时停止配置。 **约束限制：** 最多支持一个定时任务。
    * customMetricsPath  **参数解释：** 该参数值由英文逗号隔开的协议、端口号、地址组成，比如：[http,8080,metrics]，其中地址长度不超过255 ，且需要与镜像给定的协议、地址、端口一致，否则指标无法上报。 **约束限制：** 长度不超过255。 **取值范围：** - 协议范围：http/https。 - 端口范围：1-65535。 - 地址范围：仅包含字母、数字、点号（.）、中划线（-)、下划线（_）、斜杠（/）的路径，非斜杠（/）开头。 **默认取值：** 不涉及。
    * deployTimeoutMinutes  **参数解释：** 服务部署超时时间，integer类型，取值在1~300 （860版本该参数在服务层级做保留兼容）。 **约束限制：** 不涉及。 **取值范围：** [0, 300]。 **默认取值：** 不涉及。
    * taskType  **参数解释：** 模型类型。 **取值范围：** - TEXT_GENERATION：文本生成 - IMAGE_UNDERSTANDING：图像理解 - VIDEO_GENERATION：视频生成 - IMAGE_GENERATION：图像生成 - RERANK：重排序 - VECTOR_MODEL：向量模型 - EMBEDDING：Embedding嵌入
    * workloadType  **参数解释：** 工作负载类型。 **取值范围：** - DEPLOYMENT：DEPLOYMENT类型 - LWS：LWS类型
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'version' => 'setVersion',
            'description' => 'setDescription',
            'type' => 'setType',
            'deployType' => 'setDeployType',
            'groupConfigs' => 'setGroupConfigs',
            'runtimeConfig' => 'setRuntimeConfig',
            'upgradeConfig' => 'setUpgradeConfig',
            'ltsStrategy' => 'setLtsStrategy',
            'logConfigs' => 'setLogConfigs',
            'tags' => 'setTags',
            'workspaceId' => 'setWorkspaceId',
            'schedule' => 'setSchedule',
            'customMetricsPath' => 'setCustomMetricsPath',
            'deployTimeoutMinutes' => 'setDeployTimeoutMinutes',
            'taskType' => 'setTaskType',
            'workloadType' => 'setWorkloadType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释：** 服务名，用户在[创建服务](CreateInferService.xml)时自定义的名称。 **约束限制：** 服务在删除之前名字不能重复。 **取值范围：** 支持1-64位字符，可包含字母、中文、数字、中划线、下划线。 **默认取值：** 不涉及。
    * version  **参数解释：** 服务版本号，以数字及点号组成，形如1.0.1。 **约束限制：** 不涉及。 **取值范围：** 1.0.0 ~ 99.99.99，长度不超过8位。 **默认取值：** 前端可不传默认设置为1.0.0。
    * description  **参数解释：** 服务备注。 **约束限制：** 不涉及。 **取值范围：** 长度不可以超过512，不能包含大于号，小于号。 **默认取值：** 默认为空。
    * type  **参数解释：** 推理服务类型。 **约束限制：** 不涉及。 **取值范围：** - REAL_TIME：在线服务。 - ASYNC_REAL_TIME：异步服务。 **默认取值：** 不涉及。
    * deployType  **参数解释：** 部署类型。 **约束限制：** 不涉及。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。 **默认取值：** 不涉及。
    * groupConfigs  **参数解释：** 服务实例组配置。 **约束限制：** 仅创建服务时group_configs可传[]空数组，group_configs的最大元素数量为1。
    * runtimeConfig  runtimeConfig
    * upgradeConfig  upgradeConfig
    * ltsStrategy  **参数解释：** 日志策略。 **约束限制：** 不涉及。 **取值范围：** - POOL：使用资源池日志插件配置的日志流。 - AUTO_CREATE：自动创建日志流。 - DEFAULT: 由系统决定日志策略 **默认取值：** AUTO_CREATE：自动创建日志流。
    * logConfigs  **参数解释：** 日志配置。 **约束限制：** 当开启LTS日志的时候，STDOUT类型为必填。 数量上限为2个。
    * tags  **参数解释：** 服务标签。 **约束限制：** 上限20个。
    * workspaceId  **参数解释：** 工作空间ID。 **约束限制：** 不涉及。 **取值范围：** - 0：默认空间ID。 - 由数字和小写字母组成的32位字符：其他空间ID，可参考[工作空间创建](CreateWorkspace.xml)。 **默认取值：** 不涉及。
    * schedule  **参数解释：** 定时停止配置。 **约束限制：** 最多支持一个定时任务。
    * customMetricsPath  **参数解释：** 该参数值由英文逗号隔开的协议、端口号、地址组成，比如：[http,8080,metrics]，其中地址长度不超过255 ，且需要与镜像给定的协议、地址、端口一致，否则指标无法上报。 **约束限制：** 长度不超过255。 **取值范围：** - 协议范围：http/https。 - 端口范围：1-65535。 - 地址范围：仅包含字母、数字、点号（.）、中划线（-)、下划线（_）、斜杠（/）的路径，非斜杠（/）开头。 **默认取值：** 不涉及。
    * deployTimeoutMinutes  **参数解释：** 服务部署超时时间，integer类型，取值在1~300 （860版本该参数在服务层级做保留兼容）。 **约束限制：** 不涉及。 **取值范围：** [0, 300]。 **默认取值：** 不涉及。
    * taskType  **参数解释：** 模型类型。 **取值范围：** - TEXT_GENERATION：文本生成 - IMAGE_UNDERSTANDING：图像理解 - VIDEO_GENERATION：视频生成 - IMAGE_GENERATION：图像生成 - RERANK：重排序 - VECTOR_MODEL：向量模型 - EMBEDDING：Embedding嵌入
    * workloadType  **参数解释：** 工作负载类型。 **取值范围：** - DEPLOYMENT：DEPLOYMENT类型 - LWS：LWS类型
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'version' => 'getVersion',
            'description' => 'getDescription',
            'type' => 'getType',
            'deployType' => 'getDeployType',
            'groupConfigs' => 'getGroupConfigs',
            'runtimeConfig' => 'getRuntimeConfig',
            'upgradeConfig' => 'getUpgradeConfig',
            'ltsStrategy' => 'getLtsStrategy',
            'logConfigs' => 'getLogConfigs',
            'tags' => 'getTags',
            'workspaceId' => 'getWorkspaceId',
            'schedule' => 'getSchedule',
            'customMetricsPath' => 'getCustomMetricsPath',
            'deployTimeoutMinutes' => 'getDeployTimeoutMinutes',
            'taskType' => 'getTaskType',
            'workloadType' => 'getWorkloadType'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['deployType'] = isset($data['deployType']) ? $data['deployType'] : null;
        $this->container['groupConfigs'] = isset($data['groupConfigs']) ? $data['groupConfigs'] : null;
        $this->container['runtimeConfig'] = isset($data['runtimeConfig']) ? $data['runtimeConfig'] : null;
        $this->container['upgradeConfig'] = isset($data['upgradeConfig']) ? $data['upgradeConfig'] : null;
        $this->container['ltsStrategy'] = isset($data['ltsStrategy']) ? $data['ltsStrategy'] : null;
        $this->container['logConfigs'] = isset($data['logConfigs']) ? $data['logConfigs'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['schedule'] = isset($data['schedule']) ? $data['schedule'] : null;
        $this->container['customMetricsPath'] = isset($data['customMetricsPath']) ? $data['customMetricsPath'] : null;
        $this->container['deployTimeoutMinutes'] = isset($data['deployTimeoutMinutes']) ? $data['deployTimeoutMinutes'] : null;
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['workloadType'] = isset($data['workloadType']) ? $data['workloadType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['deployType'] === null) {
            $invalidProperties[] = "'deployType' can't be null";
        }
        if ($this->container['groupConfigs'] === null) {
            $invalidProperties[] = "'groupConfigs' can't be null";
        }
        if ($this->container['runtimeConfig'] === null) {
            $invalidProperties[] = "'runtimeConfig' can't be null";
        }
        if ($this->container['customMetricsPath'] === null) {
            $invalidProperties[] = "'customMetricsPath' can't be null";
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
    * Gets name
    *  **参数解释：** 服务名，用户在[创建服务](CreateInferService.xml)时自定义的名称。 **约束限制：** 服务在删除之前名字不能重复。 **取值范围：** 支持1-64位字符，可包含字母、中文、数字、中划线、下划线。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name **参数解释：** 服务名，用户在[创建服务](CreateInferService.xml)时自定义的名称。 **约束限制：** 服务在删除之前名字不能重复。 **取值范围：** 支持1-64位字符，可包含字母、中文、数字、中划线、下划线。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释：** 服务版本号，以数字及点号组成，形如1.0.1。 **约束限制：** 不涉及。 **取值范围：** 1.0.0 ~ 99.99.99，长度不超过8位。 **默认取值：** 前端可不传默认设置为1.0.0。
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
    * @param string|null $version **参数解释：** 服务版本号，以数字及点号组成，形如1.0.1。 **约束限制：** 不涉及。 **取值范围：** 1.0.0 ~ 99.99.99，长度不超过8位。 **默认取值：** 前端可不传默认设置为1.0.0。
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
    *  **参数解释：** 服务备注。 **约束限制：** 不涉及。 **取值范围：** 长度不可以超过512，不能包含大于号，小于号。 **默认取值：** 默认为空。
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
    * @param string|null $description **参数解释：** 服务备注。 **约束限制：** 不涉及。 **取值范围：** 长度不可以超过512，不能包含大于号，小于号。 **默认取值：** 默认为空。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 推理服务类型。 **约束限制：** 不涉及。 **取值范围：** - REAL_TIME：在线服务。 - ASYNC_REAL_TIME：异步服务。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type **参数解释：** 推理服务类型。 **约束限制：** 不涉及。 **取值范围：** - REAL_TIME：在线服务。 - ASYNC_REAL_TIME：异步服务。 **默认取值：** 不涉及。
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
    *  **参数解释：** 部署类型。 **约束限制：** 不涉及。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getDeployType()
    {
        return $this->container['deployType'];
    }

    /**
    * Sets deployType
    *
    * @param string $deployType **参数解释：** 部署类型。 **约束限制：** 不涉及。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setDeployType($deployType)
    {
        $this->container['deployType'] = $deployType;
        return $this;
    }

    /**
    * Gets groupConfigs
    *  **参数解释：** 服务实例组配置。 **约束限制：** 仅创建服务时group_configs可传[]空数组，group_configs的最大元素数量为1。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\GroupConfig[]
    */
    public function getGroupConfigs()
    {
        return $this->container['groupConfigs'];
    }

    /**
    * Sets groupConfigs
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\GroupConfig[] $groupConfigs **参数解释：** 服务实例组配置。 **约束限制：** 仅创建服务时group_configs可传[]空数组，group_configs的最大元素数量为1。
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
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\RuntimeConfig
    */
    public function getRuntimeConfig()
    {
        return $this->container['runtimeConfig'];
    }

    /**
    * Sets runtimeConfig
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\RuntimeConfig $runtimeConfig runtimeConfig
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
    *  **参数解释：** 日志配置。 **约束限制：** 当开启LTS日志的时候，STDOUT类型为必填。 数量上限为2个。
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
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\LtsConfig[]|null $logConfigs **参数解释：** 日志配置。 **约束限制：** 当开启LTS日志的时候，STDOUT类型为必填。 数量上限为2个。
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
    *  **参数解释：** 服务标签。 **约束限制：** 上限20个。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ServiceCreateRequestTags[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ServiceCreateRequestTags[]|null $tags **参数解释：** 服务标签。 **约束限制：** 上限20个。
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
    *  **参数解释：** 工作空间ID。 **约束限制：** 不涉及。 **取值范围：** - 0：默认空间ID。 - 由数字和小写字母组成的32位字符：其他空间ID，可参考[工作空间创建](CreateWorkspace.xml)。 **默认取值：** 不涉及。
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
    * @param string|null $workspaceId **参数解释：** 工作空间ID。 **约束限制：** 不涉及。 **取值范围：** - 0：默认空间ID。 - 由数字和小写字母组成的32位字符：其他空间ID，可参考[工作空间创建](CreateWorkspace.xml)。 **默认取值：** 不涉及。
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
    *  **参数解释：** 定时停止配置。 **约束限制：** 最多支持一个定时任务。
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
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ScheduleConfig[]|null $schedule **参数解释：** 定时停止配置。 **约束限制：** 最多支持一个定时任务。
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
    *  **参数解释：** 该参数值由英文逗号隔开的协议、端口号、地址组成，比如：[http,8080,metrics]，其中地址长度不超过255 ，且需要与镜像给定的协议、地址、端口一致，否则指标无法上报。 **约束限制：** 长度不超过255。 **取值范围：** - 协议范围：http/https。 - 端口范围：1-65535。 - 地址范围：仅包含字母、数字、点号（.）、中划线（-)、下划线（_）、斜杠（/）的路径，非斜杠（/）开头。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getCustomMetricsPath()
    {
        return $this->container['customMetricsPath'];
    }

    /**
    * Sets customMetricsPath
    *
    * @param string $customMetricsPath **参数解释：** 该参数值由英文逗号隔开的协议、端口号、地址组成，比如：[http,8080,metrics]，其中地址长度不超过255 ，且需要与镜像给定的协议、地址、端口一致，否则指标无法上报。 **约束限制：** 长度不超过255。 **取值范围：** - 协议范围：http/https。 - 端口范围：1-65535。 - 地址范围：仅包含字母、数字、点号（.）、中划线（-)、下划线（_）、斜杠（/）的路径，非斜杠（/）开头。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setCustomMetricsPath($customMetricsPath)
    {
        $this->container['customMetricsPath'] = $customMetricsPath;
        return $this;
    }

    /**
    * Gets deployTimeoutMinutes
    *  **参数解释：** 服务部署超时时间，integer类型，取值在1~300 （860版本该参数在服务层级做保留兼容）。 **约束限制：** 不涉及。 **取值范围：** [0, 300]。 **默认取值：** 不涉及。
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
    * @param int|null $deployTimeoutMinutes **参数解释：** 服务部署超时时间，integer类型，取值在1~300 （860版本该参数在服务层级做保留兼容）。 **约束限制：** 不涉及。 **取值范围：** [0, 300]。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setDeployTimeoutMinutes($deployTimeoutMinutes)
    {
        $this->container['deployTimeoutMinutes'] = $deployTimeoutMinutes;
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
    * Gets workloadType
    *  **参数解释：** 工作负载类型。 **取值范围：** - DEPLOYMENT：DEPLOYMENT类型 - LWS：LWS类型
    *
    * @return string|null
    */
    public function getWorkloadType()
    {
        return $this->container['workloadType'];
    }

    /**
    * Sets workloadType
    *
    * @param string|null $workloadType **参数解释：** 工作负载类型。 **取值范围：** - DEPLOYMENT：DEPLOYMENT类型 - LWS：LWS类型
    *
    * @return $this
    */
    public function setWorkloadType($workloadType)
    {
        $this->container['workloadType'] = $workloadType;
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

