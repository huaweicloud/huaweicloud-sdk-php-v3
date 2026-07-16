<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GroupConfigUpdateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GroupConfigUpdateRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 部署ID。 **约束限制：** 不填保留原有值。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * name  **参数解释：** 部署名称。 **约束限制：** 必填参数，不填不保留原有值。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * poolId  **参数解释：** 资源池ID，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **约束限制：** 不填保留原有值。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * framework  **参数解释：** 框架类型。 **约束限制：** 不填则为默认值。 **取值范围：** - COMMON：普通在线服务 - VLLM：VLLM框架 - MINDIE：MINDIE框架 **默认取值：** COMMON
    * count  **参数解释：** 部署场景下，服务实例数量。 **约束限制：** 不填则为默认值。 **取值范围：** [1, 128]。 **默认取值：** 1
    * deployType  **参数解释：** 部署类型。 **约束限制：** 不填保留原有值。 **取值范围：** - SINGLE：常规部署 - MULTI：分布式部署 **默认取值：** 不涉及
    * systemLogDumpEnable  **参数解释：** 系统日志转储开关。 **约束限制：** 不填则为默认值。 **取值范围：** 不涉及 **默认取值：** false
    * unitConfigs  **参数解释：** 实例单元配置。 **约束限制：** - 单机推理时，个数只会为1；如果是分布式推理时，根据不同框架，实例单元配置可灵活配置。 - 必填字段。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * weight  **参数解释：** 权重百分比，分配到此模型的流量权重，仅当模型部署为在线服务时需要配置。 **约束限制：** 不填保留原有值。 **取值范围：** [0, 100]。 **默认取值：** 不涉及
    * secretType  **参数解释：** 凭证类型相关配置，用户可以在此处选择使用的凭证类型（dew，agency） **约束限制：** 1.使用临时委托凭证类型约束限制:集群已安装CCE容器存储（Everest）v2.4.204及以上版本，且集群版本为v1.28及以上且确保局点已启用IAM5服务。 2.若插件版本不足或集群不支持临时委托凭证，则需通过DEW服务挂载。 3.不填保留原有值。 **取值范围：** - [dew：DEW密钥。](tag:hws,hws_hk,fcs) - agency：临时委托凭证。 **默认取值：** 不涉及。
    * secretName  **参数解释**： 认证凭证名称，用户使用dew类型凭证时可以在此处选择使用的凭证。 **约束限制**： secret_type是dew时必填，不填保留原有值。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * priority  **参数解释：** 服务优先级。 **约束限制：** - 如服务处于“运行中”，priority字段为必要参数，且value必须为原版的值； - 如服务处于“停止”，priority字段为非必要参数。 - 不填保留原有值。 **取值范围：** [1, 3]。 **默认取值：** 不涉及。
    * highAvailSwitch  **参数解释：** 高可用开关，开启后不同实例的pod将尽量均匀分布到不同的节点上。 **约束限制：** 不填则为默认值 **取值范围：** 不涉及 **默认取值：** true
    * description  **参数解释：** 部署备注。 **约束限制：** 不填则将部署描述清空。 **取值范围：** 长度不可以超过512，不能包含大于号，小于号。 **默认取值：** 默认为空。
    * advancedConfig  advancedConfig
    * model  model
    * mirrorTrafficEnable  **参数解释：** 镜像流量开关。 **约束限制：** 不填保留原有值 **取值范围：** 不涉及 **默认取值：** 不涉及
    * mirrorTrafficWeight  **参数解释：** 镜像流量权重。 **约束限制：** 不填保留原有值。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * status  **参数解释：** 部署状态。 **约束限制：** 不填保留原有值。 **取值范围：** - DEPLOYING：部署中 - FAILED：失败 - STOPPED：停止 - RUNNING：运行中 - DELETING：删除中 - STOPPING：停止中 - CONCERNING：存在潜在问题 - DELETED：删除 - RESTARTING：重启中 - UPGRADING：更新中 - ERROR：错误 - INTERRUPTING：中断中 **默认取值：** 不涉及
    * deploymentTaskLimit  deploymentTaskLimit
    * scheduleStrategy  **参数解释：** 调度策略。 **约束限制：** 不涉及。 **取值范围：** - HIGH_AVAILABILITY：高可用调度 - HIGH_UTILIZATION：紧凑调度 - HIGH_PERFORMANCE：高性能调度 **默认取值：** HIGH_AVAILABILITY。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'poolId' => 'string',
            'framework' => 'string',
            'count' => 'int',
            'deployType' => 'string',
            'systemLogDumpEnable' => 'bool',
            'unitConfigs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\UnitConfig[]',
            'weight' => 'int',
            'secretType' => 'string',
            'secretName' => 'string',
            'priority' => 'int',
            'highAvailSwitch' => 'bool',
            'description' => 'string',
            'advancedConfig' => '\HuaweiCloud\SDK\ModelArts\V1\Model\AdvancedConfig',
            'model' => '\HuaweiCloud\SDK\ModelArts\V1\Model\GroupModel',
            'mirrorTrafficEnable' => 'bool',
            'mirrorTrafficWeight' => 'int',
            'status' => 'string',
            'deploymentTaskLimit' => '\HuaweiCloud\SDK\ModelArts\V1\Model\DeploymentTaskLimit',
            'scheduleStrategy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 部署ID。 **约束限制：** 不填保留原有值。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * name  **参数解释：** 部署名称。 **约束限制：** 必填参数，不填不保留原有值。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * poolId  **参数解释：** 资源池ID，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **约束限制：** 不填保留原有值。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * framework  **参数解释：** 框架类型。 **约束限制：** 不填则为默认值。 **取值范围：** - COMMON：普通在线服务 - VLLM：VLLM框架 - MINDIE：MINDIE框架 **默认取值：** COMMON
    * count  **参数解释：** 部署场景下，服务实例数量。 **约束限制：** 不填则为默认值。 **取值范围：** [1, 128]。 **默认取值：** 1
    * deployType  **参数解释：** 部署类型。 **约束限制：** 不填保留原有值。 **取值范围：** - SINGLE：常规部署 - MULTI：分布式部署 **默认取值：** 不涉及
    * systemLogDumpEnable  **参数解释：** 系统日志转储开关。 **约束限制：** 不填则为默认值。 **取值范围：** 不涉及 **默认取值：** false
    * unitConfigs  **参数解释：** 实例单元配置。 **约束限制：** - 单机推理时，个数只会为1；如果是分布式推理时，根据不同框架，实例单元配置可灵活配置。 - 必填字段。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * weight  **参数解释：** 权重百分比，分配到此模型的流量权重，仅当模型部署为在线服务时需要配置。 **约束限制：** 不填保留原有值。 **取值范围：** [0, 100]。 **默认取值：** 不涉及
    * secretType  **参数解释：** 凭证类型相关配置，用户可以在此处选择使用的凭证类型（dew，agency） **约束限制：** 1.使用临时委托凭证类型约束限制:集群已安装CCE容器存储（Everest）v2.4.204及以上版本，且集群版本为v1.28及以上且确保局点已启用IAM5服务。 2.若插件版本不足或集群不支持临时委托凭证，则需通过DEW服务挂载。 3.不填保留原有值。 **取值范围：** - [dew：DEW密钥。](tag:hws,hws_hk,fcs) - agency：临时委托凭证。 **默认取值：** 不涉及。
    * secretName  **参数解释**： 认证凭证名称，用户使用dew类型凭证时可以在此处选择使用的凭证。 **约束限制**： secret_type是dew时必填，不填保留原有值。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * priority  **参数解释：** 服务优先级。 **约束限制：** - 如服务处于“运行中”，priority字段为必要参数，且value必须为原版的值； - 如服务处于“停止”，priority字段为非必要参数。 - 不填保留原有值。 **取值范围：** [1, 3]。 **默认取值：** 不涉及。
    * highAvailSwitch  **参数解释：** 高可用开关，开启后不同实例的pod将尽量均匀分布到不同的节点上。 **约束限制：** 不填则为默认值 **取值范围：** 不涉及 **默认取值：** true
    * description  **参数解释：** 部署备注。 **约束限制：** 不填则将部署描述清空。 **取值范围：** 长度不可以超过512，不能包含大于号，小于号。 **默认取值：** 默认为空。
    * advancedConfig  advancedConfig
    * model  model
    * mirrorTrafficEnable  **参数解释：** 镜像流量开关。 **约束限制：** 不填保留原有值 **取值范围：** 不涉及 **默认取值：** 不涉及
    * mirrorTrafficWeight  **参数解释：** 镜像流量权重。 **约束限制：** 不填保留原有值。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * status  **参数解释：** 部署状态。 **约束限制：** 不填保留原有值。 **取值范围：** - DEPLOYING：部署中 - FAILED：失败 - STOPPED：停止 - RUNNING：运行中 - DELETING：删除中 - STOPPING：停止中 - CONCERNING：存在潜在问题 - DELETED：删除 - RESTARTING：重启中 - UPGRADING：更新中 - ERROR：错误 - INTERRUPTING：中断中 **默认取值：** 不涉及
    * deploymentTaskLimit  deploymentTaskLimit
    * scheduleStrategy  **参数解释：** 调度策略。 **约束限制：** 不涉及。 **取值范围：** - HIGH_AVAILABILITY：高可用调度 - HIGH_UTILIZATION：紧凑调度 - HIGH_PERFORMANCE：高性能调度 **默认取值：** HIGH_AVAILABILITY。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'poolId' => null,
        'framework' => null,
        'count' => 'int32',
        'deployType' => null,
        'systemLogDumpEnable' => null,
        'unitConfigs' => null,
        'weight' => 'int32',
        'secretType' => null,
        'secretName' => null,
        'priority' => 'int32',
        'highAvailSwitch' => null,
        'description' => null,
        'advancedConfig' => null,
        'model' => null,
        'mirrorTrafficEnable' => null,
        'mirrorTrafficWeight' => null,
        'status' => null,
        'deploymentTaskLimit' => null,
        'scheduleStrategy' => null
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
    * id  **参数解释：** 部署ID。 **约束限制：** 不填保留原有值。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * name  **参数解释：** 部署名称。 **约束限制：** 必填参数，不填不保留原有值。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * poolId  **参数解释：** 资源池ID，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **约束限制：** 不填保留原有值。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * framework  **参数解释：** 框架类型。 **约束限制：** 不填则为默认值。 **取值范围：** - COMMON：普通在线服务 - VLLM：VLLM框架 - MINDIE：MINDIE框架 **默认取值：** COMMON
    * count  **参数解释：** 部署场景下，服务实例数量。 **约束限制：** 不填则为默认值。 **取值范围：** [1, 128]。 **默认取值：** 1
    * deployType  **参数解释：** 部署类型。 **约束限制：** 不填保留原有值。 **取值范围：** - SINGLE：常规部署 - MULTI：分布式部署 **默认取值：** 不涉及
    * systemLogDumpEnable  **参数解释：** 系统日志转储开关。 **约束限制：** 不填则为默认值。 **取值范围：** 不涉及 **默认取值：** false
    * unitConfigs  **参数解释：** 实例单元配置。 **约束限制：** - 单机推理时，个数只会为1；如果是分布式推理时，根据不同框架，实例单元配置可灵活配置。 - 必填字段。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * weight  **参数解释：** 权重百分比，分配到此模型的流量权重，仅当模型部署为在线服务时需要配置。 **约束限制：** 不填保留原有值。 **取值范围：** [0, 100]。 **默认取值：** 不涉及
    * secretType  **参数解释：** 凭证类型相关配置，用户可以在此处选择使用的凭证类型（dew，agency） **约束限制：** 1.使用临时委托凭证类型约束限制:集群已安装CCE容器存储（Everest）v2.4.204及以上版本，且集群版本为v1.28及以上且确保局点已启用IAM5服务。 2.若插件版本不足或集群不支持临时委托凭证，则需通过DEW服务挂载。 3.不填保留原有值。 **取值范围：** - [dew：DEW密钥。](tag:hws,hws_hk,fcs) - agency：临时委托凭证。 **默认取值：** 不涉及。
    * secretName  **参数解释**： 认证凭证名称，用户使用dew类型凭证时可以在此处选择使用的凭证。 **约束限制**： secret_type是dew时必填，不填保留原有值。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * priority  **参数解释：** 服务优先级。 **约束限制：** - 如服务处于“运行中”，priority字段为必要参数，且value必须为原版的值； - 如服务处于“停止”，priority字段为非必要参数。 - 不填保留原有值。 **取值范围：** [1, 3]。 **默认取值：** 不涉及。
    * highAvailSwitch  **参数解释：** 高可用开关，开启后不同实例的pod将尽量均匀分布到不同的节点上。 **约束限制：** 不填则为默认值 **取值范围：** 不涉及 **默认取值：** true
    * description  **参数解释：** 部署备注。 **约束限制：** 不填则将部署描述清空。 **取值范围：** 长度不可以超过512，不能包含大于号，小于号。 **默认取值：** 默认为空。
    * advancedConfig  advancedConfig
    * model  model
    * mirrorTrafficEnable  **参数解释：** 镜像流量开关。 **约束限制：** 不填保留原有值 **取值范围：** 不涉及 **默认取值：** 不涉及
    * mirrorTrafficWeight  **参数解释：** 镜像流量权重。 **约束限制：** 不填保留原有值。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * status  **参数解释：** 部署状态。 **约束限制：** 不填保留原有值。 **取值范围：** - DEPLOYING：部署中 - FAILED：失败 - STOPPED：停止 - RUNNING：运行中 - DELETING：删除中 - STOPPING：停止中 - CONCERNING：存在潜在问题 - DELETED：删除 - RESTARTING：重启中 - UPGRADING：更新中 - ERROR：错误 - INTERRUPTING：中断中 **默认取值：** 不涉及
    * deploymentTaskLimit  deploymentTaskLimit
    * scheduleStrategy  **参数解释：** 调度策略。 **约束限制：** 不涉及。 **取值范围：** - HIGH_AVAILABILITY：高可用调度 - HIGH_UTILIZATION：紧凑调度 - HIGH_PERFORMANCE：高性能调度 **默认取值：** HIGH_AVAILABILITY。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'poolId' => 'pool_id',
            'framework' => 'framework',
            'count' => 'count',
            'deployType' => 'deploy_type',
            'systemLogDumpEnable' => 'system_log_dump_enable',
            'unitConfigs' => 'unit_configs',
            'weight' => 'weight',
            'secretType' => 'secret_type',
            'secretName' => 'secret_name',
            'priority' => 'priority',
            'highAvailSwitch' => 'high_avail_switch',
            'description' => 'description',
            'advancedConfig' => 'advanced_config',
            'model' => 'model',
            'mirrorTrafficEnable' => 'mirror_traffic_enable',
            'mirrorTrafficWeight' => 'mirror_traffic_weight',
            'status' => 'status',
            'deploymentTaskLimit' => 'deployment_task_limit',
            'scheduleStrategy' => 'schedule_strategy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 部署ID。 **约束限制：** 不填保留原有值。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * name  **参数解释：** 部署名称。 **约束限制：** 必填参数，不填不保留原有值。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * poolId  **参数解释：** 资源池ID，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **约束限制：** 不填保留原有值。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * framework  **参数解释：** 框架类型。 **约束限制：** 不填则为默认值。 **取值范围：** - COMMON：普通在线服务 - VLLM：VLLM框架 - MINDIE：MINDIE框架 **默认取值：** COMMON
    * count  **参数解释：** 部署场景下，服务实例数量。 **约束限制：** 不填则为默认值。 **取值范围：** [1, 128]。 **默认取值：** 1
    * deployType  **参数解释：** 部署类型。 **约束限制：** 不填保留原有值。 **取值范围：** - SINGLE：常规部署 - MULTI：分布式部署 **默认取值：** 不涉及
    * systemLogDumpEnable  **参数解释：** 系统日志转储开关。 **约束限制：** 不填则为默认值。 **取值范围：** 不涉及 **默认取值：** false
    * unitConfigs  **参数解释：** 实例单元配置。 **约束限制：** - 单机推理时，个数只会为1；如果是分布式推理时，根据不同框架，实例单元配置可灵活配置。 - 必填字段。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * weight  **参数解释：** 权重百分比，分配到此模型的流量权重，仅当模型部署为在线服务时需要配置。 **约束限制：** 不填保留原有值。 **取值范围：** [0, 100]。 **默认取值：** 不涉及
    * secretType  **参数解释：** 凭证类型相关配置，用户可以在此处选择使用的凭证类型（dew，agency） **约束限制：** 1.使用临时委托凭证类型约束限制:集群已安装CCE容器存储（Everest）v2.4.204及以上版本，且集群版本为v1.28及以上且确保局点已启用IAM5服务。 2.若插件版本不足或集群不支持临时委托凭证，则需通过DEW服务挂载。 3.不填保留原有值。 **取值范围：** - [dew：DEW密钥。](tag:hws,hws_hk,fcs) - agency：临时委托凭证。 **默认取值：** 不涉及。
    * secretName  **参数解释**： 认证凭证名称，用户使用dew类型凭证时可以在此处选择使用的凭证。 **约束限制**： secret_type是dew时必填，不填保留原有值。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * priority  **参数解释：** 服务优先级。 **约束限制：** - 如服务处于“运行中”，priority字段为必要参数，且value必须为原版的值； - 如服务处于“停止”，priority字段为非必要参数。 - 不填保留原有值。 **取值范围：** [1, 3]。 **默认取值：** 不涉及。
    * highAvailSwitch  **参数解释：** 高可用开关，开启后不同实例的pod将尽量均匀分布到不同的节点上。 **约束限制：** 不填则为默认值 **取值范围：** 不涉及 **默认取值：** true
    * description  **参数解释：** 部署备注。 **约束限制：** 不填则将部署描述清空。 **取值范围：** 长度不可以超过512，不能包含大于号，小于号。 **默认取值：** 默认为空。
    * advancedConfig  advancedConfig
    * model  model
    * mirrorTrafficEnable  **参数解释：** 镜像流量开关。 **约束限制：** 不填保留原有值 **取值范围：** 不涉及 **默认取值：** 不涉及
    * mirrorTrafficWeight  **参数解释：** 镜像流量权重。 **约束限制：** 不填保留原有值。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * status  **参数解释：** 部署状态。 **约束限制：** 不填保留原有值。 **取值范围：** - DEPLOYING：部署中 - FAILED：失败 - STOPPED：停止 - RUNNING：运行中 - DELETING：删除中 - STOPPING：停止中 - CONCERNING：存在潜在问题 - DELETED：删除 - RESTARTING：重启中 - UPGRADING：更新中 - ERROR：错误 - INTERRUPTING：中断中 **默认取值：** 不涉及
    * deploymentTaskLimit  deploymentTaskLimit
    * scheduleStrategy  **参数解释：** 调度策略。 **约束限制：** 不涉及。 **取值范围：** - HIGH_AVAILABILITY：高可用调度 - HIGH_UTILIZATION：紧凑调度 - HIGH_PERFORMANCE：高性能调度 **默认取值：** HIGH_AVAILABILITY。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'poolId' => 'setPoolId',
            'framework' => 'setFramework',
            'count' => 'setCount',
            'deployType' => 'setDeployType',
            'systemLogDumpEnable' => 'setSystemLogDumpEnable',
            'unitConfigs' => 'setUnitConfigs',
            'weight' => 'setWeight',
            'secretType' => 'setSecretType',
            'secretName' => 'setSecretName',
            'priority' => 'setPriority',
            'highAvailSwitch' => 'setHighAvailSwitch',
            'description' => 'setDescription',
            'advancedConfig' => 'setAdvancedConfig',
            'model' => 'setModel',
            'mirrorTrafficEnable' => 'setMirrorTrafficEnable',
            'mirrorTrafficWeight' => 'setMirrorTrafficWeight',
            'status' => 'setStatus',
            'deploymentTaskLimit' => 'setDeploymentTaskLimit',
            'scheduleStrategy' => 'setScheduleStrategy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 部署ID。 **约束限制：** 不填保留原有值。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * name  **参数解释：** 部署名称。 **约束限制：** 必填参数，不填不保留原有值。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * poolId  **参数解释：** 资源池ID，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **约束限制：** 不填保留原有值。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * framework  **参数解释：** 框架类型。 **约束限制：** 不填则为默认值。 **取值范围：** - COMMON：普通在线服务 - VLLM：VLLM框架 - MINDIE：MINDIE框架 **默认取值：** COMMON
    * count  **参数解释：** 部署场景下，服务实例数量。 **约束限制：** 不填则为默认值。 **取值范围：** [1, 128]。 **默认取值：** 1
    * deployType  **参数解释：** 部署类型。 **约束限制：** 不填保留原有值。 **取值范围：** - SINGLE：常规部署 - MULTI：分布式部署 **默认取值：** 不涉及
    * systemLogDumpEnable  **参数解释：** 系统日志转储开关。 **约束限制：** 不填则为默认值。 **取值范围：** 不涉及 **默认取值：** false
    * unitConfigs  **参数解释：** 实例单元配置。 **约束限制：** - 单机推理时，个数只会为1；如果是分布式推理时，根据不同框架，实例单元配置可灵活配置。 - 必填字段。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * weight  **参数解释：** 权重百分比，分配到此模型的流量权重，仅当模型部署为在线服务时需要配置。 **约束限制：** 不填保留原有值。 **取值范围：** [0, 100]。 **默认取值：** 不涉及
    * secretType  **参数解释：** 凭证类型相关配置，用户可以在此处选择使用的凭证类型（dew，agency） **约束限制：** 1.使用临时委托凭证类型约束限制:集群已安装CCE容器存储（Everest）v2.4.204及以上版本，且集群版本为v1.28及以上且确保局点已启用IAM5服务。 2.若插件版本不足或集群不支持临时委托凭证，则需通过DEW服务挂载。 3.不填保留原有值。 **取值范围：** - [dew：DEW密钥。](tag:hws,hws_hk,fcs) - agency：临时委托凭证。 **默认取值：** 不涉及。
    * secretName  **参数解释**： 认证凭证名称，用户使用dew类型凭证时可以在此处选择使用的凭证。 **约束限制**： secret_type是dew时必填，不填保留原有值。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * priority  **参数解释：** 服务优先级。 **约束限制：** - 如服务处于“运行中”，priority字段为必要参数，且value必须为原版的值； - 如服务处于“停止”，priority字段为非必要参数。 - 不填保留原有值。 **取值范围：** [1, 3]。 **默认取值：** 不涉及。
    * highAvailSwitch  **参数解释：** 高可用开关，开启后不同实例的pod将尽量均匀分布到不同的节点上。 **约束限制：** 不填则为默认值 **取值范围：** 不涉及 **默认取值：** true
    * description  **参数解释：** 部署备注。 **约束限制：** 不填则将部署描述清空。 **取值范围：** 长度不可以超过512，不能包含大于号，小于号。 **默认取值：** 默认为空。
    * advancedConfig  advancedConfig
    * model  model
    * mirrorTrafficEnable  **参数解释：** 镜像流量开关。 **约束限制：** 不填保留原有值 **取值范围：** 不涉及 **默认取值：** 不涉及
    * mirrorTrafficWeight  **参数解释：** 镜像流量权重。 **约束限制：** 不填保留原有值。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * status  **参数解释：** 部署状态。 **约束限制：** 不填保留原有值。 **取值范围：** - DEPLOYING：部署中 - FAILED：失败 - STOPPED：停止 - RUNNING：运行中 - DELETING：删除中 - STOPPING：停止中 - CONCERNING：存在潜在问题 - DELETED：删除 - RESTARTING：重启中 - UPGRADING：更新中 - ERROR：错误 - INTERRUPTING：中断中 **默认取值：** 不涉及
    * deploymentTaskLimit  deploymentTaskLimit
    * scheduleStrategy  **参数解释：** 调度策略。 **约束限制：** 不涉及。 **取值范围：** - HIGH_AVAILABILITY：高可用调度 - HIGH_UTILIZATION：紧凑调度 - HIGH_PERFORMANCE：高性能调度 **默认取值：** HIGH_AVAILABILITY。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'poolId' => 'getPoolId',
            'framework' => 'getFramework',
            'count' => 'getCount',
            'deployType' => 'getDeployType',
            'systemLogDumpEnable' => 'getSystemLogDumpEnable',
            'unitConfigs' => 'getUnitConfigs',
            'weight' => 'getWeight',
            'secretType' => 'getSecretType',
            'secretName' => 'getSecretName',
            'priority' => 'getPriority',
            'highAvailSwitch' => 'getHighAvailSwitch',
            'description' => 'getDescription',
            'advancedConfig' => 'getAdvancedConfig',
            'model' => 'getModel',
            'mirrorTrafficEnable' => 'getMirrorTrafficEnable',
            'mirrorTrafficWeight' => 'getMirrorTrafficWeight',
            'status' => 'getStatus',
            'deploymentTaskLimit' => 'getDeploymentTaskLimit',
            'scheduleStrategy' => 'getScheduleStrategy'
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
        $this->container['poolId'] = isset($data['poolId']) ? $data['poolId'] : null;
        $this->container['framework'] = isset($data['framework']) ? $data['framework'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['deployType'] = isset($data['deployType']) ? $data['deployType'] : null;
        $this->container['systemLogDumpEnable'] = isset($data['systemLogDumpEnable']) ? $data['systemLogDumpEnable'] : null;
        $this->container['unitConfigs'] = isset($data['unitConfigs']) ? $data['unitConfigs'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['secretType'] = isset($data['secretType']) ? $data['secretType'] : null;
        $this->container['secretName'] = isset($data['secretName']) ? $data['secretName'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['highAvailSwitch'] = isset($data['highAvailSwitch']) ? $data['highAvailSwitch'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['advancedConfig'] = isset($data['advancedConfig']) ? $data['advancedConfig'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['mirrorTrafficEnable'] = isset($data['mirrorTrafficEnable']) ? $data['mirrorTrafficEnable'] : null;
        $this->container['mirrorTrafficWeight'] = isset($data['mirrorTrafficWeight']) ? $data['mirrorTrafficWeight'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['deploymentTaskLimit'] = isset($data['deploymentTaskLimit']) ? $data['deploymentTaskLimit'] : null;
        $this->container['scheduleStrategy'] = isset($data['scheduleStrategy']) ? $data['scheduleStrategy'] : null;
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
        if ($this->container['weight'] === null) {
            $invalidProperties[] = "'weight' can't be null";
        }
        if ($this->container['advancedConfig'] === null) {
            $invalidProperties[] = "'advancedConfig' can't be null";
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
    *  **参数解释：** 部署ID。 **约束限制：** 不填保留原有值。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string|null $id **参数解释：** 部署ID。 **约束限制：** 不填保留原有值。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    *  **参数解释：** 部署名称。 **约束限制：** 必填参数，不填不保留原有值。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string $name **参数解释：** 部署名称。 **约束限制：** 必填参数，不填不保留原有值。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets poolId
    *  **参数解释：** 资源池ID，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **约束限制：** 不填保留原有值。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string|null $poolId **参数解释：** 资源池ID，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **约束限制：** 不填保留原有值。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    *  **参数解释：** 框架类型。 **约束限制：** 不填则为默认值。 **取值范围：** - COMMON：普通在线服务 - VLLM：VLLM框架 - MINDIE：MINDIE框架 **默认取值：** COMMON
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
    * @param string|null $framework **参数解释：** 框架类型。 **约束限制：** 不填则为默认值。 **取值范围：** - COMMON：普通在线服务 - VLLM：VLLM框架 - MINDIE：MINDIE框架 **默认取值：** COMMON
    *
    * @return $this
    */
    public function setFramework($framework)
    {
        $this->container['framework'] = $framework;
        return $this;
    }

    /**
    * Gets count
    *  **参数解释：** 部署场景下，服务实例数量。 **约束限制：** 不填则为默认值。 **取值范围：** [1, 128]。 **默认取值：** 1
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
    * @param int|null $count **参数解释：** 部署场景下，服务实例数量。 **约束限制：** 不填则为默认值。 **取值范围：** [1, 128]。 **默认取值：** 1
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets deployType
    *  **参数解释：** 部署类型。 **约束限制：** 不填保留原有值。 **取值范围：** - SINGLE：常规部署 - MULTI：分布式部署 **默认取值：** 不涉及
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
    * @param string|null $deployType **参数解释：** 部署类型。 **约束限制：** 不填保留原有值。 **取值范围：** - SINGLE：常规部署 - MULTI：分布式部署 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setDeployType($deployType)
    {
        $this->container['deployType'] = $deployType;
        return $this;
    }

    /**
    * Gets systemLogDumpEnable
    *  **参数解释：** 系统日志转储开关。 **约束限制：** 不填则为默认值。 **取值范围：** 不涉及 **默认取值：** false
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
    * @param bool|null $systemLogDumpEnable **参数解释：** 系统日志转储开关。 **约束限制：** 不填则为默认值。 **取值范围：** 不涉及 **默认取值：** false
    *
    * @return $this
    */
    public function setSystemLogDumpEnable($systemLogDumpEnable)
    {
        $this->container['systemLogDumpEnable'] = $systemLogDumpEnable;
        return $this;
    }

    /**
    * Gets unitConfigs
    *  **参数解释：** 实例单元配置。 **约束限制：** - 单机推理时，个数只会为1；如果是分布式推理时，根据不同框架，实例单元配置可灵活配置。 - 必填字段。 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\UnitConfig[]|null $unitConfigs **参数解释：** 实例单元配置。 **约束限制：** - 单机推理时，个数只会为1；如果是分布式推理时，根据不同框架，实例单元配置可灵活配置。 - 必填字段。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setUnitConfigs($unitConfigs)
    {
        $this->container['unitConfigs'] = $unitConfigs;
        return $this;
    }

    /**
    * Gets weight
    *  **参数解释：** 权重百分比，分配到此模型的流量权重，仅当模型部署为在线服务时需要配置。 **约束限制：** 不填保留原有值。 **取值范围：** [0, 100]。 **默认取值：** 不涉及
    *
    * @return int
    */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
    * Sets weight
    *
    * @param int $weight **参数解释：** 权重百分比，分配到此模型的流量权重，仅当模型部署为在线服务时需要配置。 **约束限制：** 不填保留原有值。 **取值范围：** [0, 100]。 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;
        return $this;
    }

    /**
    * Gets secretType
    *  **参数解释：** 凭证类型相关配置，用户可以在此处选择使用的凭证类型（dew，agency） **约束限制：** 1.使用临时委托凭证类型约束限制:集群已安装CCE容器存储（Everest）v2.4.204及以上版本，且集群版本为v1.28及以上且确保局点已启用IAM5服务。 2.若插件版本不足或集群不支持临时委托凭证，则需通过DEW服务挂载。 3.不填保留原有值。 **取值范围：** - [dew：DEW密钥。](tag:hws,hws_hk,fcs) - agency：临时委托凭证。 **默认取值：** 不涉及。
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
    * @param string|null $secretType **参数解释：** 凭证类型相关配置，用户可以在此处选择使用的凭证类型（dew，agency） **约束限制：** 1.使用临时委托凭证类型约束限制:集群已安装CCE容器存储（Everest）v2.4.204及以上版本，且集群版本为v1.28及以上且确保局点已启用IAM5服务。 2.若插件版本不足或集群不支持临时委托凭证，则需通过DEW服务挂载。 3.不填保留原有值。 **取值范围：** - [dew：DEW密钥。](tag:hws,hws_hk,fcs) - agency：临时委托凭证。 **默认取值：** 不涉及。
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
    *  **参数解释**： 认证凭证名称，用户使用dew类型凭证时可以在此处选择使用的凭证。 **约束限制**： secret_type是dew时必填，不填保留原有值。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string|null $secretName **参数解释**： 认证凭证名称，用户使用dew类型凭证时可以在此处选择使用的凭证。 **约束限制**： secret_type是dew时必填，不填保留原有值。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setSecretName($secretName)
    {
        $this->container['secretName'] = $secretName;
        return $this;
    }

    /**
    * Gets priority
    *  **参数解释：** 服务优先级。 **约束限制：** - 如服务处于“运行中”，priority字段为必要参数，且value必须为原版的值； - 如服务处于“停止”，priority字段为非必要参数。 - 不填保留原有值。 **取值范围：** [1, 3]。 **默认取值：** 不涉及。
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
    * @param int|null $priority **参数解释：** 服务优先级。 **约束限制：** - 如服务处于“运行中”，priority字段为必要参数，且value必须为原版的值； - 如服务处于“停止”，priority字段为非必要参数。 - 不填保留原有值。 **取值范围：** [1, 3]。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets highAvailSwitch
    *  **参数解释：** 高可用开关，开启后不同实例的pod将尽量均匀分布到不同的节点上。 **约束限制：** 不填则为默认值 **取值范围：** 不涉及 **默认取值：** true
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
    * @param bool|null $highAvailSwitch **参数解释：** 高可用开关，开启后不同实例的pod将尽量均匀分布到不同的节点上。 **约束限制：** 不填则为默认值 **取值范围：** 不涉及 **默认取值：** true
    *
    * @return $this
    */
    public function setHighAvailSwitch($highAvailSwitch)
    {
        $this->container['highAvailSwitch'] = $highAvailSwitch;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：** 部署备注。 **约束限制：** 不填则将部署描述清空。 **取值范围：** 长度不可以超过512，不能包含大于号，小于号。 **默认取值：** 默认为空。
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
    * @param string|null $description **参数解释：** 部署备注。 **约束限制：** 不填则将部署描述清空。 **取值范围：** 长度不可以超过512，不能包含大于号，小于号。 **默认取值：** 默认为空。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets advancedConfig
    *  advancedConfig
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\AdvancedConfig
    */
    public function getAdvancedConfig()
    {
        return $this->container['advancedConfig'];
    }

    /**
    * Sets advancedConfig
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\AdvancedConfig $advancedConfig advancedConfig
    *
    * @return $this
    */
    public function setAdvancedConfig($advancedConfig)
    {
        $this->container['advancedConfig'] = $advancedConfig;
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
    * Gets mirrorTrafficEnable
    *  **参数解释：** 镜像流量开关。 **约束限制：** 不填保留原有值 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param bool|null $mirrorTrafficEnable **参数解释：** 镜像流量开关。 **约束限制：** 不填保留原有值 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    *  **参数解释：** 镜像流量权重。 **约束限制：** 不填保留原有值。 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param int|null $mirrorTrafficWeight **参数解释：** 镜像流量权重。 **约束限制：** 不填保留原有值。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setMirrorTrafficWeight($mirrorTrafficWeight)
    {
        $this->container['mirrorTrafficWeight'] = $mirrorTrafficWeight;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 部署状态。 **约束限制：** 不填保留原有值。 **取值范围：** - DEPLOYING：部署中 - FAILED：失败 - STOPPED：停止 - RUNNING：运行中 - DELETING：删除中 - STOPPING：停止中 - CONCERNING：存在潜在问题 - DELETED：删除 - RESTARTING：重启中 - UPGRADING：更新中 - ERROR：错误 - INTERRUPTING：中断中 **默认取值：** 不涉及
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
    * @param string|null $status **参数解释：** 部署状态。 **约束限制：** 不填保留原有值。 **取值范围：** - DEPLOYING：部署中 - FAILED：失败 - STOPPED：停止 - RUNNING：运行中 - DELETING：删除中 - STOPPING：停止中 - CONCERNING：存在潜在问题 - DELETED：删除 - RESTARTING：重启中 - UPGRADING：更新中 - ERROR：错误 - INTERRUPTING：中断中 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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
    * Gets scheduleStrategy
    *  **参数解释：** 调度策略。 **约束限制：** 不涉及。 **取值范围：** - HIGH_AVAILABILITY：高可用调度 - HIGH_UTILIZATION：紧凑调度 - HIGH_PERFORMANCE：高性能调度 **默认取值：** HIGH_AVAILABILITY。
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
    * @param string|null $scheduleStrategy **参数解释：** 调度策略。 **约束限制：** 不涉及。 **取值范围：** - HIGH_AVAILABILITY：高可用调度 - HIGH_UTILIZATION：紧凑调度 - HIGH_PERFORMANCE：高性能调度 **默认取值：** HIGH_AVAILABILITY。
    *
    * @return $this
    */
    public function setScheduleStrategy($scheduleStrategy)
    {
        $this->container['scheduleStrategy'] = $scheduleStrategy;
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

