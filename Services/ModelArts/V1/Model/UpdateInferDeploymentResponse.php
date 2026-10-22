<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateInferDeploymentResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateInferDeploymentResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  参数解释： 部署ID，在[添加部署](CreateInferDeployment.xml)时即可在返回体中获取，也可通过[查询服务部署列表](ListInferDeployments.xml)获取当前用户拥有的部署，其中deployment_id字段即为部署ID。 约束限制： 不涉及。 取值范围： 部署ID。 默认取值： 不涉及。
    * name  **参数解释：** 服务部署名字
    * deploymentName  参数解释： 服务部署名字。
    * inferName  参数解释： 部署id（废弃字段）。 取值范围： 不涉及。
    * description  参数解释： 描述 取值范围： 不涉及。
    * poolId  **参数解释：** 专属资源池ID。 **取值范围：** 不涉及。
    * framework  **参数解释：** 算法框架。 **取值范围：** - COMMON： 普通在线服务。
    * version  **参数解释：** 当前部署版本信息。
    * versionId  **参数解释：** 版本id，可通过查询version列表查询。 **取值范围：** 不涉及。
    * versionCount  **参数解释：** 服务版本数量。 **取值范围：** 不涉及。
    * count  **参数解释：** 服务部署实例数。
    * weight  **参数解释：** 权重百分比，分配到此模型的流量权重，仅当模型部署为在线服务时需要配置。 **约束限制：** 不涉及。 **取值范围：** [0, 100]。 **默认取值：** 不涉及。
    * priority  **参数解释：** 服务优先级。 **约束限制：** 不涉及。 **取值范围：** [1, 3]。 **默认取值：** 不涉及。
    * secretType  **参数解释：** 凭证类型相关配置，用户可以在此处选择使用的凭证类型（dew，agency） **约束限制：** 不涉及。 **取值范围：** - [dew：DEW密钥。](tag:hws,hws_hk,fcs) - agency：临时委托凭证。 **默认取值：** 不涉及。
    * secretName  **参数解释：** 凭证名称，用户使用dew类型凭证时可以在此处选择使用的凭证。 **取值范围：** 1-64个字符，只能包含字母、数字、连字符和下划线。
    * status  **参数解释：** 服务部署状态
    * deployType  **参数解释：** 部署类型。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。
    * workloadType  **参数解释：** 工作负载类型。 **取值范围：** - LWS - DEPLOYMENT **默认取值：** DEPLOYMENT
    * highAvailSwitch  **参数解释：** 高可用开关，开启后不同实例的pod将尽量均匀分布到不同的节点上。 **约束限制：** 不涉及 **取值范围：** - true: 高可用开启。 - false: 高可用关闭。
    * systemLogDumpEnable  **参数解释：** 系统日志转储开关。 **约束限制：** 只有NPU资源池有，且逻辑池是没有的 **取值范围：** 不涉及 **默认取值：** false
    * scheduleStrategy  **参数解释：** 调度策略。 **取值范围：** 不涉及。
    * unitConfigs  **参数解释：** 实例单元配置。 **约束限制：** 单机推理时，个数只会为1；如果是分布式推理时，根据不同框架，实例单元配置可灵活配置。
    * model  model
    * advancedConfig  advancedConfig
    * mirrorTrafficEnable  **参数解释：** 是否开启镜像流量。 **取值范围：** 不涉及。
    * mirrorTrafficWeight  **参数解释：** 镜像流量权重。 **取值范围：** 不涉及。
    * userName  **参数解释：** 用户名。 **取值范围：** 不涉及。
    * agencyName  **参数解释：** 委托名称。 **取值范围：** 不涉及。
    * lastUsedTime  **参数解释：** 最后使用时间。 **取值范围：** 不涉及。
    * deploymentTaskLimit  deploymentTaskLimit
    * frozenInfos  **参数解释：** 当服务或者部署被冻结时返回的冻结类型信息。
    * createAt  **参数解释：** 创建时间，根据创建时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字
    * updateAt  **参数解释：** 更新时间，根据更新时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'deploymentName' => 'string',
            'inferName' => 'string',
            'description' => 'string',
            'poolId' => 'string',
            'framework' => 'string',
            'version' => 'string',
            'versionId' => 'string',
            'versionCount' => 'int',
            'count' => 'int',
            'weight' => 'int',
            'priority' => 'int',
            'secretType' => 'string',
            'secretName' => 'string',
            'status' => 'string',
            'deployType' => 'string',
            'workloadType' => 'string',
            'highAvailSwitch' => 'bool',
            'systemLogDumpEnable' => 'bool',
            'scheduleStrategy' => 'string',
            'unitConfigs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\UnitConfig[]',
            'model' => '\HuaweiCloud\SDK\ModelArts\V1\Model\GroupModel',
            'advancedConfig' => '\HuaweiCloud\SDK\ModelArts\V1\Model\AdvancedConfig',
            'mirrorTrafficEnable' => 'bool',
            'mirrorTrafficWeight' => 'int',
            'userName' => 'string',
            'agencyName' => 'string',
            'lastUsedTime' => '\DateTime',
            'deploymentTaskLimit' => '\HuaweiCloud\SDK\ModelArts\V1\Model\DeploymentTaskLimit',
            'frozenInfos' => '\HuaweiCloud\SDK\ModelArts\V1\Model\FrozenInfo[]',
            'createAt' => '\DateTime',
            'updateAt' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  参数解释： 部署ID，在[添加部署](CreateInferDeployment.xml)时即可在返回体中获取，也可通过[查询服务部署列表](ListInferDeployments.xml)获取当前用户拥有的部署，其中deployment_id字段即为部署ID。 约束限制： 不涉及。 取值范围： 部署ID。 默认取值： 不涉及。
    * name  **参数解释：** 服务部署名字
    * deploymentName  参数解释： 服务部署名字。
    * inferName  参数解释： 部署id（废弃字段）。 取值范围： 不涉及。
    * description  参数解释： 描述 取值范围： 不涉及。
    * poolId  **参数解释：** 专属资源池ID。 **取值范围：** 不涉及。
    * framework  **参数解释：** 算法框架。 **取值范围：** - COMMON： 普通在线服务。
    * version  **参数解释：** 当前部署版本信息。
    * versionId  **参数解释：** 版本id，可通过查询version列表查询。 **取值范围：** 不涉及。
    * versionCount  **参数解释：** 服务版本数量。 **取值范围：** 不涉及。
    * count  **参数解释：** 服务部署实例数。
    * weight  **参数解释：** 权重百分比，分配到此模型的流量权重，仅当模型部署为在线服务时需要配置。 **约束限制：** 不涉及。 **取值范围：** [0, 100]。 **默认取值：** 不涉及。
    * priority  **参数解释：** 服务优先级。 **约束限制：** 不涉及。 **取值范围：** [1, 3]。 **默认取值：** 不涉及。
    * secretType  **参数解释：** 凭证类型相关配置，用户可以在此处选择使用的凭证类型（dew，agency） **约束限制：** 不涉及。 **取值范围：** - [dew：DEW密钥。](tag:hws,hws_hk,fcs) - agency：临时委托凭证。 **默认取值：** 不涉及。
    * secretName  **参数解释：** 凭证名称，用户使用dew类型凭证时可以在此处选择使用的凭证。 **取值范围：** 1-64个字符，只能包含字母、数字、连字符和下划线。
    * status  **参数解释：** 服务部署状态
    * deployType  **参数解释：** 部署类型。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。
    * workloadType  **参数解释：** 工作负载类型。 **取值范围：** - LWS - DEPLOYMENT **默认取值：** DEPLOYMENT
    * highAvailSwitch  **参数解释：** 高可用开关，开启后不同实例的pod将尽量均匀分布到不同的节点上。 **约束限制：** 不涉及 **取值范围：** - true: 高可用开启。 - false: 高可用关闭。
    * systemLogDumpEnable  **参数解释：** 系统日志转储开关。 **约束限制：** 只有NPU资源池有，且逻辑池是没有的 **取值范围：** 不涉及 **默认取值：** false
    * scheduleStrategy  **参数解释：** 调度策略。 **取值范围：** 不涉及。
    * unitConfigs  **参数解释：** 实例单元配置。 **约束限制：** 单机推理时，个数只会为1；如果是分布式推理时，根据不同框架，实例单元配置可灵活配置。
    * model  model
    * advancedConfig  advancedConfig
    * mirrorTrafficEnable  **参数解释：** 是否开启镜像流量。 **取值范围：** 不涉及。
    * mirrorTrafficWeight  **参数解释：** 镜像流量权重。 **取值范围：** 不涉及。
    * userName  **参数解释：** 用户名。 **取值范围：** 不涉及。
    * agencyName  **参数解释：** 委托名称。 **取值范围：** 不涉及。
    * lastUsedTime  **参数解释：** 最后使用时间。 **取值范围：** 不涉及。
    * deploymentTaskLimit  deploymentTaskLimit
    * frozenInfos  **参数解释：** 当服务或者部署被冻结时返回的冻结类型信息。
    * createAt  **参数解释：** 创建时间，根据创建时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字
    * updateAt  **参数解释：** 更新时间，根据更新时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'deploymentName' => null,
        'inferName' => null,
        'description' => null,
        'poolId' => null,
        'framework' => null,
        'version' => null,
        'versionId' => null,
        'versionCount' => 'int32',
        'count' => 'int32',
        'weight' => 'int32',
        'priority' => 'int32',
        'secretType' => null,
        'secretName' => null,
        'status' => null,
        'deployType' => null,
        'workloadType' => null,
        'highAvailSwitch' => null,
        'systemLogDumpEnable' => null,
        'scheduleStrategy' => null,
        'unitConfigs' => null,
        'model' => null,
        'advancedConfig' => null,
        'mirrorTrafficEnable' => null,
        'mirrorTrafficWeight' => 'int32',
        'userName' => null,
        'agencyName' => null,
        'lastUsedTime' => 'date-time',
        'deploymentTaskLimit' => null,
        'frozenInfos' => null,
        'createAt' => 'date-time',
        'updateAt' => 'date-time'
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
    * id  参数解释： 部署ID，在[添加部署](CreateInferDeployment.xml)时即可在返回体中获取，也可通过[查询服务部署列表](ListInferDeployments.xml)获取当前用户拥有的部署，其中deployment_id字段即为部署ID。 约束限制： 不涉及。 取值范围： 部署ID。 默认取值： 不涉及。
    * name  **参数解释：** 服务部署名字
    * deploymentName  参数解释： 服务部署名字。
    * inferName  参数解释： 部署id（废弃字段）。 取值范围： 不涉及。
    * description  参数解释： 描述 取值范围： 不涉及。
    * poolId  **参数解释：** 专属资源池ID。 **取值范围：** 不涉及。
    * framework  **参数解释：** 算法框架。 **取值范围：** - COMMON： 普通在线服务。
    * version  **参数解释：** 当前部署版本信息。
    * versionId  **参数解释：** 版本id，可通过查询version列表查询。 **取值范围：** 不涉及。
    * versionCount  **参数解释：** 服务版本数量。 **取值范围：** 不涉及。
    * count  **参数解释：** 服务部署实例数。
    * weight  **参数解释：** 权重百分比，分配到此模型的流量权重，仅当模型部署为在线服务时需要配置。 **约束限制：** 不涉及。 **取值范围：** [0, 100]。 **默认取值：** 不涉及。
    * priority  **参数解释：** 服务优先级。 **约束限制：** 不涉及。 **取值范围：** [1, 3]。 **默认取值：** 不涉及。
    * secretType  **参数解释：** 凭证类型相关配置，用户可以在此处选择使用的凭证类型（dew，agency） **约束限制：** 不涉及。 **取值范围：** - [dew：DEW密钥。](tag:hws,hws_hk,fcs) - agency：临时委托凭证。 **默认取值：** 不涉及。
    * secretName  **参数解释：** 凭证名称，用户使用dew类型凭证时可以在此处选择使用的凭证。 **取值范围：** 1-64个字符，只能包含字母、数字、连字符和下划线。
    * status  **参数解释：** 服务部署状态
    * deployType  **参数解释：** 部署类型。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。
    * workloadType  **参数解释：** 工作负载类型。 **取值范围：** - LWS - DEPLOYMENT **默认取值：** DEPLOYMENT
    * highAvailSwitch  **参数解释：** 高可用开关，开启后不同实例的pod将尽量均匀分布到不同的节点上。 **约束限制：** 不涉及 **取值范围：** - true: 高可用开启。 - false: 高可用关闭。
    * systemLogDumpEnable  **参数解释：** 系统日志转储开关。 **约束限制：** 只有NPU资源池有，且逻辑池是没有的 **取值范围：** 不涉及 **默认取值：** false
    * scheduleStrategy  **参数解释：** 调度策略。 **取值范围：** 不涉及。
    * unitConfigs  **参数解释：** 实例单元配置。 **约束限制：** 单机推理时，个数只会为1；如果是分布式推理时，根据不同框架，实例单元配置可灵活配置。
    * model  model
    * advancedConfig  advancedConfig
    * mirrorTrafficEnable  **参数解释：** 是否开启镜像流量。 **取值范围：** 不涉及。
    * mirrorTrafficWeight  **参数解释：** 镜像流量权重。 **取值范围：** 不涉及。
    * userName  **参数解释：** 用户名。 **取值范围：** 不涉及。
    * agencyName  **参数解释：** 委托名称。 **取值范围：** 不涉及。
    * lastUsedTime  **参数解释：** 最后使用时间。 **取值范围：** 不涉及。
    * deploymentTaskLimit  deploymentTaskLimit
    * frozenInfos  **参数解释：** 当服务或者部署被冻结时返回的冻结类型信息。
    * createAt  **参数解释：** 创建时间，根据创建时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字
    * updateAt  **参数解释：** 更新时间，根据更新时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'deploymentName' => 'deployment_name',
            'inferName' => 'infer_name',
            'description' => 'description',
            'poolId' => 'pool_id',
            'framework' => 'framework',
            'version' => 'version',
            'versionId' => 'version_id',
            'versionCount' => 'version_count',
            'count' => 'count',
            'weight' => 'weight',
            'priority' => 'priority',
            'secretType' => 'secret_type',
            'secretName' => 'secret_name',
            'status' => 'status',
            'deployType' => 'deploy_type',
            'workloadType' => 'workload_type',
            'highAvailSwitch' => 'high_avail_switch',
            'systemLogDumpEnable' => 'system_log_dump_enable',
            'scheduleStrategy' => 'schedule_strategy',
            'unitConfigs' => 'unit_configs',
            'model' => 'model',
            'advancedConfig' => 'advanced_config',
            'mirrorTrafficEnable' => 'mirror_traffic_enable',
            'mirrorTrafficWeight' => 'mirror_traffic_weight',
            'userName' => 'user_name',
            'agencyName' => 'agency_name',
            'lastUsedTime' => 'last_used_time',
            'deploymentTaskLimit' => 'deployment_task_limit',
            'frozenInfos' => 'frozen_infos',
            'createAt' => 'create_at',
            'updateAt' => 'update_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  参数解释： 部署ID，在[添加部署](CreateInferDeployment.xml)时即可在返回体中获取，也可通过[查询服务部署列表](ListInferDeployments.xml)获取当前用户拥有的部署，其中deployment_id字段即为部署ID。 约束限制： 不涉及。 取值范围： 部署ID。 默认取值： 不涉及。
    * name  **参数解释：** 服务部署名字
    * deploymentName  参数解释： 服务部署名字。
    * inferName  参数解释： 部署id（废弃字段）。 取值范围： 不涉及。
    * description  参数解释： 描述 取值范围： 不涉及。
    * poolId  **参数解释：** 专属资源池ID。 **取值范围：** 不涉及。
    * framework  **参数解释：** 算法框架。 **取值范围：** - COMMON： 普通在线服务。
    * version  **参数解释：** 当前部署版本信息。
    * versionId  **参数解释：** 版本id，可通过查询version列表查询。 **取值范围：** 不涉及。
    * versionCount  **参数解释：** 服务版本数量。 **取值范围：** 不涉及。
    * count  **参数解释：** 服务部署实例数。
    * weight  **参数解释：** 权重百分比，分配到此模型的流量权重，仅当模型部署为在线服务时需要配置。 **约束限制：** 不涉及。 **取值范围：** [0, 100]。 **默认取值：** 不涉及。
    * priority  **参数解释：** 服务优先级。 **约束限制：** 不涉及。 **取值范围：** [1, 3]。 **默认取值：** 不涉及。
    * secretType  **参数解释：** 凭证类型相关配置，用户可以在此处选择使用的凭证类型（dew，agency） **约束限制：** 不涉及。 **取值范围：** - [dew：DEW密钥。](tag:hws,hws_hk,fcs) - agency：临时委托凭证。 **默认取值：** 不涉及。
    * secretName  **参数解释：** 凭证名称，用户使用dew类型凭证时可以在此处选择使用的凭证。 **取值范围：** 1-64个字符，只能包含字母、数字、连字符和下划线。
    * status  **参数解释：** 服务部署状态
    * deployType  **参数解释：** 部署类型。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。
    * workloadType  **参数解释：** 工作负载类型。 **取值范围：** - LWS - DEPLOYMENT **默认取值：** DEPLOYMENT
    * highAvailSwitch  **参数解释：** 高可用开关，开启后不同实例的pod将尽量均匀分布到不同的节点上。 **约束限制：** 不涉及 **取值范围：** - true: 高可用开启。 - false: 高可用关闭。
    * systemLogDumpEnable  **参数解释：** 系统日志转储开关。 **约束限制：** 只有NPU资源池有，且逻辑池是没有的 **取值范围：** 不涉及 **默认取值：** false
    * scheduleStrategy  **参数解释：** 调度策略。 **取值范围：** 不涉及。
    * unitConfigs  **参数解释：** 实例单元配置。 **约束限制：** 单机推理时，个数只会为1；如果是分布式推理时，根据不同框架，实例单元配置可灵活配置。
    * model  model
    * advancedConfig  advancedConfig
    * mirrorTrafficEnable  **参数解释：** 是否开启镜像流量。 **取值范围：** 不涉及。
    * mirrorTrafficWeight  **参数解释：** 镜像流量权重。 **取值范围：** 不涉及。
    * userName  **参数解释：** 用户名。 **取值范围：** 不涉及。
    * agencyName  **参数解释：** 委托名称。 **取值范围：** 不涉及。
    * lastUsedTime  **参数解释：** 最后使用时间。 **取值范围：** 不涉及。
    * deploymentTaskLimit  deploymentTaskLimit
    * frozenInfos  **参数解释：** 当服务或者部署被冻结时返回的冻结类型信息。
    * createAt  **参数解释：** 创建时间，根据创建时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字
    * updateAt  **参数解释：** 更新时间，根据更新时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'deploymentName' => 'setDeploymentName',
            'inferName' => 'setInferName',
            'description' => 'setDescription',
            'poolId' => 'setPoolId',
            'framework' => 'setFramework',
            'version' => 'setVersion',
            'versionId' => 'setVersionId',
            'versionCount' => 'setVersionCount',
            'count' => 'setCount',
            'weight' => 'setWeight',
            'priority' => 'setPriority',
            'secretType' => 'setSecretType',
            'secretName' => 'setSecretName',
            'status' => 'setStatus',
            'deployType' => 'setDeployType',
            'workloadType' => 'setWorkloadType',
            'highAvailSwitch' => 'setHighAvailSwitch',
            'systemLogDumpEnable' => 'setSystemLogDumpEnable',
            'scheduleStrategy' => 'setScheduleStrategy',
            'unitConfigs' => 'setUnitConfigs',
            'model' => 'setModel',
            'advancedConfig' => 'setAdvancedConfig',
            'mirrorTrafficEnable' => 'setMirrorTrafficEnable',
            'mirrorTrafficWeight' => 'setMirrorTrafficWeight',
            'userName' => 'setUserName',
            'agencyName' => 'setAgencyName',
            'lastUsedTime' => 'setLastUsedTime',
            'deploymentTaskLimit' => 'setDeploymentTaskLimit',
            'frozenInfos' => 'setFrozenInfos',
            'createAt' => 'setCreateAt',
            'updateAt' => 'setUpdateAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  参数解释： 部署ID，在[添加部署](CreateInferDeployment.xml)时即可在返回体中获取，也可通过[查询服务部署列表](ListInferDeployments.xml)获取当前用户拥有的部署，其中deployment_id字段即为部署ID。 约束限制： 不涉及。 取值范围： 部署ID。 默认取值： 不涉及。
    * name  **参数解释：** 服务部署名字
    * deploymentName  参数解释： 服务部署名字。
    * inferName  参数解释： 部署id（废弃字段）。 取值范围： 不涉及。
    * description  参数解释： 描述 取值范围： 不涉及。
    * poolId  **参数解释：** 专属资源池ID。 **取值范围：** 不涉及。
    * framework  **参数解释：** 算法框架。 **取值范围：** - COMMON： 普通在线服务。
    * version  **参数解释：** 当前部署版本信息。
    * versionId  **参数解释：** 版本id，可通过查询version列表查询。 **取值范围：** 不涉及。
    * versionCount  **参数解释：** 服务版本数量。 **取值范围：** 不涉及。
    * count  **参数解释：** 服务部署实例数。
    * weight  **参数解释：** 权重百分比，分配到此模型的流量权重，仅当模型部署为在线服务时需要配置。 **约束限制：** 不涉及。 **取值范围：** [0, 100]。 **默认取值：** 不涉及。
    * priority  **参数解释：** 服务优先级。 **约束限制：** 不涉及。 **取值范围：** [1, 3]。 **默认取值：** 不涉及。
    * secretType  **参数解释：** 凭证类型相关配置，用户可以在此处选择使用的凭证类型（dew，agency） **约束限制：** 不涉及。 **取值范围：** - [dew：DEW密钥。](tag:hws,hws_hk,fcs) - agency：临时委托凭证。 **默认取值：** 不涉及。
    * secretName  **参数解释：** 凭证名称，用户使用dew类型凭证时可以在此处选择使用的凭证。 **取值范围：** 1-64个字符，只能包含字母、数字、连字符和下划线。
    * status  **参数解释：** 服务部署状态
    * deployType  **参数解释：** 部署类型。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。
    * workloadType  **参数解释：** 工作负载类型。 **取值范围：** - LWS - DEPLOYMENT **默认取值：** DEPLOYMENT
    * highAvailSwitch  **参数解释：** 高可用开关，开启后不同实例的pod将尽量均匀分布到不同的节点上。 **约束限制：** 不涉及 **取值范围：** - true: 高可用开启。 - false: 高可用关闭。
    * systemLogDumpEnable  **参数解释：** 系统日志转储开关。 **约束限制：** 只有NPU资源池有，且逻辑池是没有的 **取值范围：** 不涉及 **默认取值：** false
    * scheduleStrategy  **参数解释：** 调度策略。 **取值范围：** 不涉及。
    * unitConfigs  **参数解释：** 实例单元配置。 **约束限制：** 单机推理时，个数只会为1；如果是分布式推理时，根据不同框架，实例单元配置可灵活配置。
    * model  model
    * advancedConfig  advancedConfig
    * mirrorTrafficEnable  **参数解释：** 是否开启镜像流量。 **取值范围：** 不涉及。
    * mirrorTrafficWeight  **参数解释：** 镜像流量权重。 **取值范围：** 不涉及。
    * userName  **参数解释：** 用户名。 **取值范围：** 不涉及。
    * agencyName  **参数解释：** 委托名称。 **取值范围：** 不涉及。
    * lastUsedTime  **参数解释：** 最后使用时间。 **取值范围：** 不涉及。
    * deploymentTaskLimit  deploymentTaskLimit
    * frozenInfos  **参数解释：** 当服务或者部署被冻结时返回的冻结类型信息。
    * createAt  **参数解释：** 创建时间，根据创建时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字
    * updateAt  **参数解释：** 更新时间，根据更新时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'deploymentName' => 'getDeploymentName',
            'inferName' => 'getInferName',
            'description' => 'getDescription',
            'poolId' => 'getPoolId',
            'framework' => 'getFramework',
            'version' => 'getVersion',
            'versionId' => 'getVersionId',
            'versionCount' => 'getVersionCount',
            'count' => 'getCount',
            'weight' => 'getWeight',
            'priority' => 'getPriority',
            'secretType' => 'getSecretType',
            'secretName' => 'getSecretName',
            'status' => 'getStatus',
            'deployType' => 'getDeployType',
            'workloadType' => 'getWorkloadType',
            'highAvailSwitch' => 'getHighAvailSwitch',
            'systemLogDumpEnable' => 'getSystemLogDumpEnable',
            'scheduleStrategy' => 'getScheduleStrategy',
            'unitConfigs' => 'getUnitConfigs',
            'model' => 'getModel',
            'advancedConfig' => 'getAdvancedConfig',
            'mirrorTrafficEnable' => 'getMirrorTrafficEnable',
            'mirrorTrafficWeight' => 'getMirrorTrafficWeight',
            'userName' => 'getUserName',
            'agencyName' => 'getAgencyName',
            'lastUsedTime' => 'getLastUsedTime',
            'deploymentTaskLimit' => 'getDeploymentTaskLimit',
            'frozenInfos' => 'getFrozenInfos',
            'createAt' => 'getCreateAt',
            'updateAt' => 'getUpdateAt'
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
        $this->container['deploymentName'] = isset($data['deploymentName']) ? $data['deploymentName'] : null;
        $this->container['inferName'] = isset($data['inferName']) ? $data['inferName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['poolId'] = isset($data['poolId']) ? $data['poolId'] : null;
        $this->container['framework'] = isset($data['framework']) ? $data['framework'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['versionId'] = isset($data['versionId']) ? $data['versionId'] : null;
        $this->container['versionCount'] = isset($data['versionCount']) ? $data['versionCount'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['secretType'] = isset($data['secretType']) ? $data['secretType'] : null;
        $this->container['secretName'] = isset($data['secretName']) ? $data['secretName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['deployType'] = isset($data['deployType']) ? $data['deployType'] : null;
        $this->container['workloadType'] = isset($data['workloadType']) ? $data['workloadType'] : null;
        $this->container['highAvailSwitch'] = isset($data['highAvailSwitch']) ? $data['highAvailSwitch'] : null;
        $this->container['systemLogDumpEnable'] = isset($data['systemLogDumpEnable']) ? $data['systemLogDumpEnable'] : null;
        $this->container['scheduleStrategy'] = isset($data['scheduleStrategy']) ? $data['scheduleStrategy'] : null;
        $this->container['unitConfigs'] = isset($data['unitConfigs']) ? $data['unitConfigs'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['advancedConfig'] = isset($data['advancedConfig']) ? $data['advancedConfig'] : null;
        $this->container['mirrorTrafficEnable'] = isset($data['mirrorTrafficEnable']) ? $data['mirrorTrafficEnable'] : null;
        $this->container['mirrorTrafficWeight'] = isset($data['mirrorTrafficWeight']) ? $data['mirrorTrafficWeight'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['agencyName'] = isset($data['agencyName']) ? $data['agencyName'] : null;
        $this->container['lastUsedTime'] = isset($data['lastUsedTime']) ? $data['lastUsedTime'] : null;
        $this->container['deploymentTaskLimit'] = isset($data['deploymentTaskLimit']) ? $data['deploymentTaskLimit'] : null;
        $this->container['frozenInfos'] = isset($data['frozenInfos']) ? $data['frozenInfos'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['weight']) && ($this->container['weight'] > 100)) {
                $invalidProperties[] = "invalid value for 'weight', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['weight']) && ($this->container['weight'] < 0)) {
                $invalidProperties[] = "invalid value for 'weight', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['priority']) && ($this->container['priority'] > 3)) {
                $invalidProperties[] = "invalid value for 'priority', must be smaller than or equal to 3.";
            }
            if (!is_null($this->container['priority']) && ($this->container['priority'] < 1)) {
                $invalidProperties[] = "invalid value for 'priority', must be bigger than or equal to 1.";
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
    * Gets id
    *  参数解释： 部署ID，在[添加部署](CreateInferDeployment.xml)时即可在返回体中获取，也可通过[查询服务部署列表](ListInferDeployments.xml)获取当前用户拥有的部署，其中deployment_id字段即为部署ID。 约束限制： 不涉及。 取值范围： 部署ID。 默认取值： 不涉及。
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
    * @param string|null $id 参数解释： 部署ID，在[添加部署](CreateInferDeployment.xml)时即可在返回体中获取，也可通过[查询服务部署列表](ListInferDeployments.xml)获取当前用户拥有的部署，其中deployment_id字段即为部署ID。 约束限制： 不涉及。 取值范围： 部署ID。 默认取值： 不涉及。
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
    *  **参数解释：** 服务部署名字
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
    * @param string|null $name **参数解释：** 服务部署名字
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets deploymentName
    *  参数解释： 服务部署名字。
    *
    * @return string|null
    */
    public function getDeploymentName()
    {
        return $this->container['deploymentName'];
    }

    /**
    * Sets deploymentName
    *
    * @param string|null $deploymentName 参数解释： 服务部署名字。
    *
    * @return $this
    */
    public function setDeploymentName($deploymentName)
    {
        $this->container['deploymentName'] = $deploymentName;
        return $this;
    }

    /**
    * Gets inferName
    *  参数解释： 部署id（废弃字段）。 取值范围： 不涉及。
    *
    * @return string|null
    */
    public function getInferName()
    {
        return $this->container['inferName'];
    }

    /**
    * Sets inferName
    *
    * @param string|null $inferName 参数解释： 部署id（废弃字段）。 取值范围： 不涉及。
    *
    * @return $this
    */
    public function setInferName($inferName)
    {
        $this->container['inferName'] = $inferName;
        return $this;
    }

    /**
    * Gets description
    *  参数解释： 描述 取值范围： 不涉及。
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
    * @param string|null $description 参数解释： 描述 取值范围： 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets poolId
    *  **参数解释：** 专属资源池ID。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getPoolId()
    {
        return $this->container['poolId'];
    }

    /**
    * Sets poolId
    *
    * @param string|null $poolId **参数解释：** 专属资源池ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setPoolId($poolId)
    {
        $this->container['poolId'] = $poolId;
        return $this;
    }

    /**
    * Gets framework
    *  **参数解释：** 算法框架。 **取值范围：** - COMMON： 普通在线服务。
    *
    * @return string|null
    */
    public function getFramework()
    {
        return $this->container['framework'];
    }

    /**
    * Sets framework
    *
    * @param string|null $framework **参数解释：** 算法框架。 **取值范围：** - COMMON： 普通在线服务。
    *
    * @return $this
    */
    public function setFramework($framework)
    {
        $this->container['framework'] = $framework;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释：** 当前部署版本信息。
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
    * @param string|null $version **参数解释：** 当前部署版本信息。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets versionId
    *  **参数解释：** 版本id，可通过查询version列表查询。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getVersionId()
    {
        return $this->container['versionId'];
    }

    /**
    * Sets versionId
    *
    * @param string|null $versionId **参数解释：** 版本id，可通过查询version列表查询。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setVersionId($versionId)
    {
        $this->container['versionId'] = $versionId;
        return $this;
    }

    /**
    * Gets versionCount
    *  **参数解释：** 服务版本数量。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getVersionCount()
    {
        return $this->container['versionCount'];
    }

    /**
    * Sets versionCount
    *
    * @param int|null $versionCount **参数解释：** 服务版本数量。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setVersionCount($versionCount)
    {
        $this->container['versionCount'] = $versionCount;
        return $this;
    }

    /**
    * Gets count
    *  **参数解释：** 服务部署实例数。
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count **参数解释：** 服务部署实例数。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets weight
    *  **参数解释：** 权重百分比，分配到此模型的流量权重，仅当模型部署为在线服务时需要配置。 **约束限制：** 不涉及。 **取值范围：** [0, 100]。 **默认取值：** 不涉及。
    *
    * @return int|null
    */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
    * Sets weight
    *
    * @param int|null $weight **参数解释：** 权重百分比，分配到此模型的流量权重，仅当模型部署为在线服务时需要配置。 **约束限制：** 不涉及。 **取值范围：** [0, 100]。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;
        return $this;
    }

    /**
    * Gets priority
    *  **参数解释：** 服务优先级。 **约束限制：** 不涉及。 **取值范围：** [1, 3]。 **默认取值：** 不涉及。
    *
    * @return int|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int|null $priority **参数解释：** 服务优先级。 **约束限制：** 不涉及。 **取值范围：** [1, 3]。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets secretType
    *  **参数解释：** 凭证类型相关配置，用户可以在此处选择使用的凭证类型（dew，agency） **约束限制：** 不涉及。 **取值范围：** - [dew：DEW密钥。](tag:hws,hws_hk,fcs) - agency：临时委托凭证。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getSecretType()
    {
        return $this->container['secretType'];
    }

    /**
    * Sets secretType
    *
    * @param string|null $secretType **参数解释：** 凭证类型相关配置，用户可以在此处选择使用的凭证类型（dew，agency） **约束限制：** 不涉及。 **取值范围：** - [dew：DEW密钥。](tag:hws,hws_hk,fcs) - agency：临时委托凭证。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setSecretType($secretType)
    {
        $this->container['secretType'] = $secretType;
        return $this;
    }

    /**
    * Gets secretName
    *  **参数解释：** 凭证名称，用户使用dew类型凭证时可以在此处选择使用的凭证。 **取值范围：** 1-64个字符，只能包含字母、数字、连字符和下划线。
    *
    * @return string|null
    */
    public function getSecretName()
    {
        return $this->container['secretName'];
    }

    /**
    * Sets secretName
    *
    * @param string|null $secretName **参数解释：** 凭证名称，用户使用dew类型凭证时可以在此处选择使用的凭证。 **取值范围：** 1-64个字符，只能包含字母、数字、连字符和下划线。
    *
    * @return $this
    */
    public function setSecretName($secretName)
    {
        $this->container['secretName'] = $secretName;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 服务部署状态
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
    * @param string|null $status **参数解释：** 服务部署状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets deployType
    *  **参数解释：** 部署类型。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。
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
    * @param string|null $deployType **参数解释：** 部署类型。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。
    *
    * @return $this
    */
    public function setDeployType($deployType)
    {
        $this->container['deployType'] = $deployType;
        return $this;
    }

    /**
    * Gets workloadType
    *  **参数解释：** 工作负载类型。 **取值范围：** - LWS - DEPLOYMENT **默认取值：** DEPLOYMENT
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
    * @param string|null $workloadType **参数解释：** 工作负载类型。 **取值范围：** - LWS - DEPLOYMENT **默认取值：** DEPLOYMENT
    *
    * @return $this
    */
    public function setWorkloadType($workloadType)
    {
        $this->container['workloadType'] = $workloadType;
        return $this;
    }

    /**
    * Gets highAvailSwitch
    *  **参数解释：** 高可用开关，开启后不同实例的pod将尽量均匀分布到不同的节点上。 **约束限制：** 不涉及 **取值范围：** - true: 高可用开启。 - false: 高可用关闭。
    *
    * @return bool|null
    */
    public function getHighAvailSwitch()
    {
        return $this->container['highAvailSwitch'];
    }

    /**
    * Sets highAvailSwitch
    *
    * @param bool|null $highAvailSwitch **参数解释：** 高可用开关，开启后不同实例的pod将尽量均匀分布到不同的节点上。 **约束限制：** 不涉及 **取值范围：** - true: 高可用开启。 - false: 高可用关闭。
    *
    * @return $this
    */
    public function setHighAvailSwitch($highAvailSwitch)
    {
        $this->container['highAvailSwitch'] = $highAvailSwitch;
        return $this;
    }

    /**
    * Gets systemLogDumpEnable
    *  **参数解释：** 系统日志转储开关。 **约束限制：** 只有NPU资源池有，且逻辑池是没有的 **取值范围：** 不涉及 **默认取值：** false
    *
    * @return bool|null
    */
    public function getSystemLogDumpEnable()
    {
        return $this->container['systemLogDumpEnable'];
    }

    /**
    * Sets systemLogDumpEnable
    *
    * @param bool|null $systemLogDumpEnable **参数解释：** 系统日志转储开关。 **约束限制：** 只有NPU资源池有，且逻辑池是没有的 **取值范围：** 不涉及 **默认取值：** false
    *
    * @return $this
    */
    public function setSystemLogDumpEnable($systemLogDumpEnable)
    {
        $this->container['systemLogDumpEnable'] = $systemLogDumpEnable;
        return $this;
    }

    /**
    * Gets scheduleStrategy
    *  **参数解释：** 调度策略。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getScheduleStrategy()
    {
        return $this->container['scheduleStrategy'];
    }

    /**
    * Sets scheduleStrategy
    *
    * @param string|null $scheduleStrategy **参数解释：** 调度策略。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setScheduleStrategy($scheduleStrategy)
    {
        $this->container['scheduleStrategy'] = $scheduleStrategy;
        return $this;
    }

    /**
    * Gets unitConfigs
    *  **参数解释：** 实例单元配置。 **约束限制：** 单机推理时，个数只会为1；如果是分布式推理时，根据不同框架，实例单元配置可灵活配置。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\UnitConfig[]|null
    */
    public function getUnitConfigs()
    {
        return $this->container['unitConfigs'];
    }

    /**
    * Sets unitConfigs
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\UnitConfig[]|null $unitConfigs **参数解释：** 实例单元配置。 **约束限制：** 单机推理时，个数只会为1；如果是分布式推理时，根据不同框架，实例单元配置可灵活配置。
    *
    * @return $this
    */
    public function setUnitConfigs($unitConfigs)
    {
        $this->container['unitConfigs'] = $unitConfigs;
        return $this;
    }

    /**
    * Gets model
    *  model
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\GroupModel|null
    */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
    * Sets model
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\GroupModel|null $model model
    *
    * @return $this
    */
    public function setModel($model)
    {
        $this->container['model'] = $model;
        return $this;
    }

    /**
    * Gets advancedConfig
    *  advancedConfig
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\AdvancedConfig|null
    */
    public function getAdvancedConfig()
    {
        return $this->container['advancedConfig'];
    }

    /**
    * Sets advancedConfig
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\AdvancedConfig|null $advancedConfig advancedConfig
    *
    * @return $this
    */
    public function setAdvancedConfig($advancedConfig)
    {
        $this->container['advancedConfig'] = $advancedConfig;
        return $this;
    }

    /**
    * Gets mirrorTrafficEnable
    *  **参数解释：** 是否开启镜像流量。 **取值范围：** 不涉及。
    *
    * @return bool|null
    */
    public function getMirrorTrafficEnable()
    {
        return $this->container['mirrorTrafficEnable'];
    }

    /**
    * Sets mirrorTrafficEnable
    *
    * @param bool|null $mirrorTrafficEnable **参数解释：** 是否开启镜像流量。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setMirrorTrafficEnable($mirrorTrafficEnable)
    {
        $this->container['mirrorTrafficEnable'] = $mirrorTrafficEnable;
        return $this;
    }

    /**
    * Gets mirrorTrafficWeight
    *  **参数解释：** 镜像流量权重。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getMirrorTrafficWeight()
    {
        return $this->container['mirrorTrafficWeight'];
    }

    /**
    * Sets mirrorTrafficWeight
    *
    * @param int|null $mirrorTrafficWeight **参数解释：** 镜像流量权重。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setMirrorTrafficWeight($mirrorTrafficWeight)
    {
        $this->container['mirrorTrafficWeight'] = $mirrorTrafficWeight;
        return $this;
    }

    /**
    * Gets userName
    *  **参数解释：** 用户名。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName **参数解释：** 用户名。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets agencyName
    *  **参数解释：** 委托名称。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getAgencyName()
    {
        return $this->container['agencyName'];
    }

    /**
    * Sets agencyName
    *
    * @param string|null $agencyName **参数解释：** 委托名称。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setAgencyName($agencyName)
    {
        $this->container['agencyName'] = $agencyName;
        return $this;
    }

    /**
    * Gets lastUsedTime
    *  **参数解释：** 最后使用时间。 **取值范围：** 不涉及。
    *
    * @return \DateTime|null
    */
    public function getLastUsedTime()
    {
        return $this->container['lastUsedTime'];
    }

    /**
    * Sets lastUsedTime
    *
    * @param \DateTime|null $lastUsedTime **参数解释：** 最后使用时间。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setLastUsedTime($lastUsedTime)
    {
        $this->container['lastUsedTime'] = $lastUsedTime;
        return $this;
    }

    /**
    * Gets deploymentTaskLimit
    *  deploymentTaskLimit
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\DeploymentTaskLimit|null
    */
    public function getDeploymentTaskLimit()
    {
        return $this->container['deploymentTaskLimit'];
    }

    /**
    * Sets deploymentTaskLimit
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\DeploymentTaskLimit|null $deploymentTaskLimit deploymentTaskLimit
    *
    * @return $this
    */
    public function setDeploymentTaskLimit($deploymentTaskLimit)
    {
        $this->container['deploymentTaskLimit'] = $deploymentTaskLimit;
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
    * Gets createAt
    *  **参数解释：** 创建时间，根据创建时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字
    *
    * @return \DateTime|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param \DateTime|null $createAt **参数解释：** 创建时间，根据创建时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字
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
    *  **参数解释：** 更新时间，根据更新时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字。
    *
    * @return \DateTime|null
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param \DateTime|null $updateAt **参数解释：** 更新时间，根据更新时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字。
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
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

