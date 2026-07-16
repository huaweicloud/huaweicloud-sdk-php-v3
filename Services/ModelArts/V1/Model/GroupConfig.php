<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GroupConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GroupConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 部署ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * name  **参数解释：** 部署名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * poolId  **参数解释：** 资源池ID，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * count  **参数解释：** 部署场景下，服务实例数量。 **约束限制：** 不涉及。 **取值范围：** [1, 128]。 **默认取值：** 不涉及。
    * systemLogDumpEnable  **参数解释：** 系统日志转储开关。 **约束限制：** 只有NPU资源池有，且逻辑池是没有的。 **取值范围：** 不涉及。 **默认取值：** false。
    * unitConfigs  **参数解释：** 推理单元配置。 **约束限制：** 单机推理时，个数只会为1；如果是分布式推理时，根据不同框架，实例单元配置可灵活配置。
    * weight  **参数解释：** 权重百分比，分配到此模型的流量权重，仅当模型部署为在线服务时需要配置。 **约束限制：** 不涉及。 **取值范围：** [0, 100]。 **默认取值：** 不涉及。
    * secretType  **参数解释：** 凭证类型相关配置，用户可以在此处选择使用的凭证类型（dew，agency） **约束限制：** 1.使用临时委托凭证类型约束限制:集群已安装CCE容器存储（Everest）v2.4.204及以上版本，且集群版本为v1.28及以上且确保局点已启用IAM5服务。 2.若插件版本不足或集群不支持临时委托凭证，则需通过DEW服务挂载。 **取值范围：** - [dew：DEW密钥。](tag:hws,hws_hk,fcs) - agency：临时委托凭证。 **默认取值：** 不涉及。
    * secretName  **参数解释**： 凭证名称，用户使用dew类型凭证时可以在此处选择使用的凭证。 **约束限制**： 不涉及。
    * priority  **参数解释：** 服务优先级。 **约束限制：** - 如服务处于\"运行中\"，priority字段为必要参数，且value必须与原服务的priority值相同； - 如服务处于\"停止\"，priority字段为非必要参数。 **取值范围：** [1, 3]。 **默认取值：** 不涉及。
    * highAvailSwitch  **参数解释：** 高可用开关，开启后不同实例的pod将尽量均匀分布到不同的节点上。（准备下线，请使用schedule_strategy字段） **约束限制：** 不涉及。 **取值范围：** - true：高可用开启。 - false：高可用关闭。 **默认取值：** true。
    * scheduleStrategy  **参数解释：** 调度策略。 **约束限制：** 不涉及。 **取值范围：** - HIGH_AVAILABILITY：高可用调度 - HIGH_UTILIZATION：紧凑调度 - HIGH_PERFORMANCE：高性能调度 **默认取值：** HIGH_AVAILABILITY。
    * version  **参数解释：** 服务版本号，以数字及点号组成，形如1.0.1。 **约束限制：** 不涉及。 **取值范围：** 1.0.0 ~ 99.99.99，长度不超过8位。 **默认取值：** 不涉及。
    * versionId  **参数解释：** 版本id，可通过查询version列表查询。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * description  **参数解释：** 服务备注。 **约束限制：** 不涉及。 **取值范围：** 长度不可以超过512，不能包含大于号，小于号。 **默认取值：** 默认为空。
    * framework  **参数解释：** 服务框架。 **约束限制：** 仅支持以下枚举值：COMMON | VLLM | MINDIE。 **取值范围：** 仅支持以下枚举值：COMMON | VLLM | MINDIE。 **默认取值：** COMMON。
    * runningCount  **参数解释：** 部署场景下，服务运行实例数量。 **约束限制：** 不涉及。 **取值范围：** [1, 128]。 **默认取值：** 不涉及。
    * deployType  **参数解释：** 部署类型。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。
    * mirrorTrafficEnable  **参数解释：** 是否开启镜像流量。 **取值范围：** 不涉及。
    * mirrorTrafficWeight  **参数解释：** 镜像流量权重。 **取值范围：** 50。
    * versionCount  **参数解释：** 服务版本数量。 **取值范围：** 不涉及。
    * workloadType  **参数解释：** 工作负载类型。 **取值范围：** - DEPLOYMENT：DEPLOYMENT类型 - LWS：LWS类型
    * updateAt  **参数解释：** 更新时间，根据更新时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字。
    * model  model
    * advancedConfig  advancedConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'poolId' => 'string',
            'count' => 'int',
            'systemLogDumpEnable' => 'bool',
            'unitConfigs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\UnitConfig[]',
            'weight' => 'int',
            'secretType' => 'string',
            'secretName' => 'string',
            'priority' => 'int',
            'highAvailSwitch' => 'bool',
            'scheduleStrategy' => 'string',
            'version' => 'string',
            'versionId' => 'string',
            'description' => 'string',
            'framework' => 'string',
            'runningCount' => 'int',
            'deployType' => 'string',
            'mirrorTrafficEnable' => 'bool',
            'mirrorTrafficWeight' => 'string',
            'versionCount' => 'int',
            'workloadType' => 'string',
            'updateAt' => 'int',
            'model' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ModelResource',
            'advancedConfig' => '\HuaweiCloud\SDK\ModelArts\V1\Model\AdvancedConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 部署ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * name  **参数解释：** 部署名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * poolId  **参数解释：** 资源池ID，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * count  **参数解释：** 部署场景下，服务实例数量。 **约束限制：** 不涉及。 **取值范围：** [1, 128]。 **默认取值：** 不涉及。
    * systemLogDumpEnable  **参数解释：** 系统日志转储开关。 **约束限制：** 只有NPU资源池有，且逻辑池是没有的。 **取值范围：** 不涉及。 **默认取值：** false。
    * unitConfigs  **参数解释：** 推理单元配置。 **约束限制：** 单机推理时，个数只会为1；如果是分布式推理时，根据不同框架，实例单元配置可灵活配置。
    * weight  **参数解释：** 权重百分比，分配到此模型的流量权重，仅当模型部署为在线服务时需要配置。 **约束限制：** 不涉及。 **取值范围：** [0, 100]。 **默认取值：** 不涉及。
    * secretType  **参数解释：** 凭证类型相关配置，用户可以在此处选择使用的凭证类型（dew，agency） **约束限制：** 1.使用临时委托凭证类型约束限制:集群已安装CCE容器存储（Everest）v2.4.204及以上版本，且集群版本为v1.28及以上且确保局点已启用IAM5服务。 2.若插件版本不足或集群不支持临时委托凭证，则需通过DEW服务挂载。 **取值范围：** - [dew：DEW密钥。](tag:hws,hws_hk,fcs) - agency：临时委托凭证。 **默认取值：** 不涉及。
    * secretName  **参数解释**： 凭证名称，用户使用dew类型凭证时可以在此处选择使用的凭证。 **约束限制**： 不涉及。
    * priority  **参数解释：** 服务优先级。 **约束限制：** - 如服务处于\"运行中\"，priority字段为必要参数，且value必须与原服务的priority值相同； - 如服务处于\"停止\"，priority字段为非必要参数。 **取值范围：** [1, 3]。 **默认取值：** 不涉及。
    * highAvailSwitch  **参数解释：** 高可用开关，开启后不同实例的pod将尽量均匀分布到不同的节点上。（准备下线，请使用schedule_strategy字段） **约束限制：** 不涉及。 **取值范围：** - true：高可用开启。 - false：高可用关闭。 **默认取值：** true。
    * scheduleStrategy  **参数解释：** 调度策略。 **约束限制：** 不涉及。 **取值范围：** - HIGH_AVAILABILITY：高可用调度 - HIGH_UTILIZATION：紧凑调度 - HIGH_PERFORMANCE：高性能调度 **默认取值：** HIGH_AVAILABILITY。
    * version  **参数解释：** 服务版本号，以数字及点号组成，形如1.0.1。 **约束限制：** 不涉及。 **取值范围：** 1.0.0 ~ 99.99.99，长度不超过8位。 **默认取值：** 不涉及。
    * versionId  **参数解释：** 版本id，可通过查询version列表查询。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * description  **参数解释：** 服务备注。 **约束限制：** 不涉及。 **取值范围：** 长度不可以超过512，不能包含大于号，小于号。 **默认取值：** 默认为空。
    * framework  **参数解释：** 服务框架。 **约束限制：** 仅支持以下枚举值：COMMON | VLLM | MINDIE。 **取值范围：** 仅支持以下枚举值：COMMON | VLLM | MINDIE。 **默认取值：** COMMON。
    * runningCount  **参数解释：** 部署场景下，服务运行实例数量。 **约束限制：** 不涉及。 **取值范围：** [1, 128]。 **默认取值：** 不涉及。
    * deployType  **参数解释：** 部署类型。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。
    * mirrorTrafficEnable  **参数解释：** 是否开启镜像流量。 **取值范围：** 不涉及。
    * mirrorTrafficWeight  **参数解释：** 镜像流量权重。 **取值范围：** 50。
    * versionCount  **参数解释：** 服务版本数量。 **取值范围：** 不涉及。
    * workloadType  **参数解释：** 工作负载类型。 **取值范围：** - DEPLOYMENT：DEPLOYMENT类型 - LWS：LWS类型
    * updateAt  **参数解释：** 更新时间，根据更新时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字。
    * model  model
    * advancedConfig  advancedConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'poolId' => null,
        'count' => 'int32',
        'systemLogDumpEnable' => null,
        'unitConfigs' => null,
        'weight' => 'int32',
        'secretType' => null,
        'secretName' => null,
        'priority' => 'int32',
        'highAvailSwitch' => null,
        'scheduleStrategy' => null,
        'version' => null,
        'versionId' => null,
        'description' => null,
        'framework' => null,
        'runningCount' => 'int32',
        'deployType' => null,
        'mirrorTrafficEnable' => null,
        'mirrorTrafficWeight' => null,
        'versionCount' => 'int32',
        'workloadType' => null,
        'updateAt' => 'int64',
        'model' => null,
        'advancedConfig' => null
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
    * id  **参数解释：** 部署ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * name  **参数解释：** 部署名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * poolId  **参数解释：** 资源池ID，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * count  **参数解释：** 部署场景下，服务实例数量。 **约束限制：** 不涉及。 **取值范围：** [1, 128]。 **默认取值：** 不涉及。
    * systemLogDumpEnable  **参数解释：** 系统日志转储开关。 **约束限制：** 只有NPU资源池有，且逻辑池是没有的。 **取值范围：** 不涉及。 **默认取值：** false。
    * unitConfigs  **参数解释：** 推理单元配置。 **约束限制：** 单机推理时，个数只会为1；如果是分布式推理时，根据不同框架，实例单元配置可灵活配置。
    * weight  **参数解释：** 权重百分比，分配到此模型的流量权重，仅当模型部署为在线服务时需要配置。 **约束限制：** 不涉及。 **取值范围：** [0, 100]。 **默认取值：** 不涉及。
    * secretType  **参数解释：** 凭证类型相关配置，用户可以在此处选择使用的凭证类型（dew，agency） **约束限制：** 1.使用临时委托凭证类型约束限制:集群已安装CCE容器存储（Everest）v2.4.204及以上版本，且集群版本为v1.28及以上且确保局点已启用IAM5服务。 2.若插件版本不足或集群不支持临时委托凭证，则需通过DEW服务挂载。 **取值范围：** - [dew：DEW密钥。](tag:hws,hws_hk,fcs) - agency：临时委托凭证。 **默认取值：** 不涉及。
    * secretName  **参数解释**： 凭证名称，用户使用dew类型凭证时可以在此处选择使用的凭证。 **约束限制**： 不涉及。
    * priority  **参数解释：** 服务优先级。 **约束限制：** - 如服务处于\"运行中\"，priority字段为必要参数，且value必须与原服务的priority值相同； - 如服务处于\"停止\"，priority字段为非必要参数。 **取值范围：** [1, 3]。 **默认取值：** 不涉及。
    * highAvailSwitch  **参数解释：** 高可用开关，开启后不同实例的pod将尽量均匀分布到不同的节点上。（准备下线，请使用schedule_strategy字段） **约束限制：** 不涉及。 **取值范围：** - true：高可用开启。 - false：高可用关闭。 **默认取值：** true。
    * scheduleStrategy  **参数解释：** 调度策略。 **约束限制：** 不涉及。 **取值范围：** - HIGH_AVAILABILITY：高可用调度 - HIGH_UTILIZATION：紧凑调度 - HIGH_PERFORMANCE：高性能调度 **默认取值：** HIGH_AVAILABILITY。
    * version  **参数解释：** 服务版本号，以数字及点号组成，形如1.0.1。 **约束限制：** 不涉及。 **取值范围：** 1.0.0 ~ 99.99.99，长度不超过8位。 **默认取值：** 不涉及。
    * versionId  **参数解释：** 版本id，可通过查询version列表查询。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * description  **参数解释：** 服务备注。 **约束限制：** 不涉及。 **取值范围：** 长度不可以超过512，不能包含大于号，小于号。 **默认取值：** 默认为空。
    * framework  **参数解释：** 服务框架。 **约束限制：** 仅支持以下枚举值：COMMON | VLLM | MINDIE。 **取值范围：** 仅支持以下枚举值：COMMON | VLLM | MINDIE。 **默认取值：** COMMON。
    * runningCount  **参数解释：** 部署场景下，服务运行实例数量。 **约束限制：** 不涉及。 **取值范围：** [1, 128]。 **默认取值：** 不涉及。
    * deployType  **参数解释：** 部署类型。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。
    * mirrorTrafficEnable  **参数解释：** 是否开启镜像流量。 **取值范围：** 不涉及。
    * mirrorTrafficWeight  **参数解释：** 镜像流量权重。 **取值范围：** 50。
    * versionCount  **参数解释：** 服务版本数量。 **取值范围：** 不涉及。
    * workloadType  **参数解释：** 工作负载类型。 **取值范围：** - DEPLOYMENT：DEPLOYMENT类型 - LWS：LWS类型
    * updateAt  **参数解释：** 更新时间，根据更新时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字。
    * model  model
    * advancedConfig  advancedConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'poolId' => 'pool_id',
            'count' => 'count',
            'systemLogDumpEnable' => 'system_log_dump_enable',
            'unitConfigs' => 'unit_configs',
            'weight' => 'weight',
            'secretType' => 'secret_type',
            'secretName' => 'secret_name',
            'priority' => 'priority',
            'highAvailSwitch' => 'high_avail_switch',
            'scheduleStrategy' => 'schedule_strategy',
            'version' => 'version',
            'versionId' => 'version_id',
            'description' => 'description',
            'framework' => 'framework',
            'runningCount' => 'running_count',
            'deployType' => 'deploy_type',
            'mirrorTrafficEnable' => 'mirror_traffic_enable',
            'mirrorTrafficWeight' => 'mirror_traffic_weight',
            'versionCount' => 'version_count',
            'workloadType' => 'workload_type',
            'updateAt' => 'update_at',
            'model' => 'model',
            'advancedConfig' => 'advanced_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 部署ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * name  **参数解释：** 部署名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * poolId  **参数解释：** 资源池ID，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * count  **参数解释：** 部署场景下，服务实例数量。 **约束限制：** 不涉及。 **取值范围：** [1, 128]。 **默认取值：** 不涉及。
    * systemLogDumpEnable  **参数解释：** 系统日志转储开关。 **约束限制：** 只有NPU资源池有，且逻辑池是没有的。 **取值范围：** 不涉及。 **默认取值：** false。
    * unitConfigs  **参数解释：** 推理单元配置。 **约束限制：** 单机推理时，个数只会为1；如果是分布式推理时，根据不同框架，实例单元配置可灵活配置。
    * weight  **参数解释：** 权重百分比，分配到此模型的流量权重，仅当模型部署为在线服务时需要配置。 **约束限制：** 不涉及。 **取值范围：** [0, 100]。 **默认取值：** 不涉及。
    * secretType  **参数解释：** 凭证类型相关配置，用户可以在此处选择使用的凭证类型（dew，agency） **约束限制：** 1.使用临时委托凭证类型约束限制:集群已安装CCE容器存储（Everest）v2.4.204及以上版本，且集群版本为v1.28及以上且确保局点已启用IAM5服务。 2.若插件版本不足或集群不支持临时委托凭证，则需通过DEW服务挂载。 **取值范围：** - [dew：DEW密钥。](tag:hws,hws_hk,fcs) - agency：临时委托凭证。 **默认取值：** 不涉及。
    * secretName  **参数解释**： 凭证名称，用户使用dew类型凭证时可以在此处选择使用的凭证。 **约束限制**： 不涉及。
    * priority  **参数解释：** 服务优先级。 **约束限制：** - 如服务处于\"运行中\"，priority字段为必要参数，且value必须与原服务的priority值相同； - 如服务处于\"停止\"，priority字段为非必要参数。 **取值范围：** [1, 3]。 **默认取值：** 不涉及。
    * highAvailSwitch  **参数解释：** 高可用开关，开启后不同实例的pod将尽量均匀分布到不同的节点上。（准备下线，请使用schedule_strategy字段） **约束限制：** 不涉及。 **取值范围：** - true：高可用开启。 - false：高可用关闭。 **默认取值：** true。
    * scheduleStrategy  **参数解释：** 调度策略。 **约束限制：** 不涉及。 **取值范围：** - HIGH_AVAILABILITY：高可用调度 - HIGH_UTILIZATION：紧凑调度 - HIGH_PERFORMANCE：高性能调度 **默认取值：** HIGH_AVAILABILITY。
    * version  **参数解释：** 服务版本号，以数字及点号组成，形如1.0.1。 **约束限制：** 不涉及。 **取值范围：** 1.0.0 ~ 99.99.99，长度不超过8位。 **默认取值：** 不涉及。
    * versionId  **参数解释：** 版本id，可通过查询version列表查询。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * description  **参数解释：** 服务备注。 **约束限制：** 不涉及。 **取值范围：** 长度不可以超过512，不能包含大于号，小于号。 **默认取值：** 默认为空。
    * framework  **参数解释：** 服务框架。 **约束限制：** 仅支持以下枚举值：COMMON | VLLM | MINDIE。 **取值范围：** 仅支持以下枚举值：COMMON | VLLM | MINDIE。 **默认取值：** COMMON。
    * runningCount  **参数解释：** 部署场景下，服务运行实例数量。 **约束限制：** 不涉及。 **取值范围：** [1, 128]。 **默认取值：** 不涉及。
    * deployType  **参数解释：** 部署类型。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。
    * mirrorTrafficEnable  **参数解释：** 是否开启镜像流量。 **取值范围：** 不涉及。
    * mirrorTrafficWeight  **参数解释：** 镜像流量权重。 **取值范围：** 50。
    * versionCount  **参数解释：** 服务版本数量。 **取值范围：** 不涉及。
    * workloadType  **参数解释：** 工作负载类型。 **取值范围：** - DEPLOYMENT：DEPLOYMENT类型 - LWS：LWS类型
    * updateAt  **参数解释：** 更新时间，根据更新时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字。
    * model  model
    * advancedConfig  advancedConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'poolId' => 'setPoolId',
            'count' => 'setCount',
            'systemLogDumpEnable' => 'setSystemLogDumpEnable',
            'unitConfigs' => 'setUnitConfigs',
            'weight' => 'setWeight',
            'secretType' => 'setSecretType',
            'secretName' => 'setSecretName',
            'priority' => 'setPriority',
            'highAvailSwitch' => 'setHighAvailSwitch',
            'scheduleStrategy' => 'setScheduleStrategy',
            'version' => 'setVersion',
            'versionId' => 'setVersionId',
            'description' => 'setDescription',
            'framework' => 'setFramework',
            'runningCount' => 'setRunningCount',
            'deployType' => 'setDeployType',
            'mirrorTrafficEnable' => 'setMirrorTrafficEnable',
            'mirrorTrafficWeight' => 'setMirrorTrafficWeight',
            'versionCount' => 'setVersionCount',
            'workloadType' => 'setWorkloadType',
            'updateAt' => 'setUpdateAt',
            'model' => 'setModel',
            'advancedConfig' => 'setAdvancedConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 部署ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * name  **参数解释：** 部署名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * poolId  **参数解释：** 资源池ID，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * count  **参数解释：** 部署场景下，服务实例数量。 **约束限制：** 不涉及。 **取值范围：** [1, 128]。 **默认取值：** 不涉及。
    * systemLogDumpEnable  **参数解释：** 系统日志转储开关。 **约束限制：** 只有NPU资源池有，且逻辑池是没有的。 **取值范围：** 不涉及。 **默认取值：** false。
    * unitConfigs  **参数解释：** 推理单元配置。 **约束限制：** 单机推理时，个数只会为1；如果是分布式推理时，根据不同框架，实例单元配置可灵活配置。
    * weight  **参数解释：** 权重百分比，分配到此模型的流量权重，仅当模型部署为在线服务时需要配置。 **约束限制：** 不涉及。 **取值范围：** [0, 100]。 **默认取值：** 不涉及。
    * secretType  **参数解释：** 凭证类型相关配置，用户可以在此处选择使用的凭证类型（dew，agency） **约束限制：** 1.使用临时委托凭证类型约束限制:集群已安装CCE容器存储（Everest）v2.4.204及以上版本，且集群版本为v1.28及以上且确保局点已启用IAM5服务。 2.若插件版本不足或集群不支持临时委托凭证，则需通过DEW服务挂载。 **取值范围：** - [dew：DEW密钥。](tag:hws,hws_hk,fcs) - agency：临时委托凭证。 **默认取值：** 不涉及。
    * secretName  **参数解释**： 凭证名称，用户使用dew类型凭证时可以在此处选择使用的凭证。 **约束限制**： 不涉及。
    * priority  **参数解释：** 服务优先级。 **约束限制：** - 如服务处于\"运行中\"，priority字段为必要参数，且value必须与原服务的priority值相同； - 如服务处于\"停止\"，priority字段为非必要参数。 **取值范围：** [1, 3]。 **默认取值：** 不涉及。
    * highAvailSwitch  **参数解释：** 高可用开关，开启后不同实例的pod将尽量均匀分布到不同的节点上。（准备下线，请使用schedule_strategy字段） **约束限制：** 不涉及。 **取值范围：** - true：高可用开启。 - false：高可用关闭。 **默认取值：** true。
    * scheduleStrategy  **参数解释：** 调度策略。 **约束限制：** 不涉及。 **取值范围：** - HIGH_AVAILABILITY：高可用调度 - HIGH_UTILIZATION：紧凑调度 - HIGH_PERFORMANCE：高性能调度 **默认取值：** HIGH_AVAILABILITY。
    * version  **参数解释：** 服务版本号，以数字及点号组成，形如1.0.1。 **约束限制：** 不涉及。 **取值范围：** 1.0.0 ~ 99.99.99，长度不超过8位。 **默认取值：** 不涉及。
    * versionId  **参数解释：** 版本id，可通过查询version列表查询。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * description  **参数解释：** 服务备注。 **约束限制：** 不涉及。 **取值范围：** 长度不可以超过512，不能包含大于号，小于号。 **默认取值：** 默认为空。
    * framework  **参数解释：** 服务框架。 **约束限制：** 仅支持以下枚举值：COMMON | VLLM | MINDIE。 **取值范围：** 仅支持以下枚举值：COMMON | VLLM | MINDIE。 **默认取值：** COMMON。
    * runningCount  **参数解释：** 部署场景下，服务运行实例数量。 **约束限制：** 不涉及。 **取值范围：** [1, 128]。 **默认取值：** 不涉及。
    * deployType  **参数解释：** 部署类型。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。
    * mirrorTrafficEnable  **参数解释：** 是否开启镜像流量。 **取值范围：** 不涉及。
    * mirrorTrafficWeight  **参数解释：** 镜像流量权重。 **取值范围：** 50。
    * versionCount  **参数解释：** 服务版本数量。 **取值范围：** 不涉及。
    * workloadType  **参数解释：** 工作负载类型。 **取值范围：** - DEPLOYMENT：DEPLOYMENT类型 - LWS：LWS类型
    * updateAt  **参数解释：** 更新时间，根据更新时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字。
    * model  model
    * advancedConfig  advancedConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'poolId' => 'getPoolId',
            'count' => 'getCount',
            'systemLogDumpEnable' => 'getSystemLogDumpEnable',
            'unitConfigs' => 'getUnitConfigs',
            'weight' => 'getWeight',
            'secretType' => 'getSecretType',
            'secretName' => 'getSecretName',
            'priority' => 'getPriority',
            'highAvailSwitch' => 'getHighAvailSwitch',
            'scheduleStrategy' => 'getScheduleStrategy',
            'version' => 'getVersion',
            'versionId' => 'getVersionId',
            'description' => 'getDescription',
            'framework' => 'getFramework',
            'runningCount' => 'getRunningCount',
            'deployType' => 'getDeployType',
            'mirrorTrafficEnable' => 'getMirrorTrafficEnable',
            'mirrorTrafficWeight' => 'getMirrorTrafficWeight',
            'versionCount' => 'getVersionCount',
            'workloadType' => 'getWorkloadType',
            'updateAt' => 'getUpdateAt',
            'model' => 'getModel',
            'advancedConfig' => 'getAdvancedConfig'
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
    const FRAMEWORK_COMMON = 'COMMON';
    const FRAMEWORK_VLLM = 'VLLM';
    const FRAMEWORK_MINDIE = 'MINDIE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFrameworkAllowableValues()
    {
        return [
            self::FRAMEWORK_COMMON,
            self::FRAMEWORK_VLLM,
            self::FRAMEWORK_MINDIE,
        ];
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
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['systemLogDumpEnable'] = isset($data['systemLogDumpEnable']) ? $data['systemLogDumpEnable'] : null;
        $this->container['unitConfigs'] = isset($data['unitConfigs']) ? $data['unitConfigs'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['secretType'] = isset($data['secretType']) ? $data['secretType'] : null;
        $this->container['secretName'] = isset($data['secretName']) ? $data['secretName'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['highAvailSwitch'] = isset($data['highAvailSwitch']) ? $data['highAvailSwitch'] : null;
        $this->container['scheduleStrategy'] = isset($data['scheduleStrategy']) ? $data['scheduleStrategy'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['versionId'] = isset($data['versionId']) ? $data['versionId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['framework'] = isset($data['framework']) ? $data['framework'] : null;
        $this->container['runningCount'] = isset($data['runningCount']) ? $data['runningCount'] : null;
        $this->container['deployType'] = isset($data['deployType']) ? $data['deployType'] : null;
        $this->container['mirrorTrafficEnable'] = isset($data['mirrorTrafficEnable']) ? $data['mirrorTrafficEnable'] : null;
        $this->container['mirrorTrafficWeight'] = isset($data['mirrorTrafficWeight']) ? $data['mirrorTrafficWeight'] : null;
        $this->container['versionCount'] = isset($data['versionCount']) ? $data['versionCount'] : null;
        $this->container['workloadType'] = isset($data['workloadType']) ? $data['workloadType'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['advancedConfig'] = isset($data['advancedConfig']) ? $data['advancedConfig'] : null;
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
            $allowedValues = $this->getFrameworkAllowableValues();
                if (!is_null($this->container['framework']) && !in_array($this->container['framework'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'framework', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  **参数解释：** 部署ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string|null $id **参数解释：** 部署ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    *  **参数解释：** 部署名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string $name **参数解释：** 部署名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    *  **参数解释：** 资源池ID，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string|null $poolId **参数解释：** 资源池ID，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setPoolId($poolId)
    {
        $this->container['poolId'] = $poolId;
        return $this;
    }

    /**
    * Gets count
    *  **参数解释：** 部署场景下，服务实例数量。 **约束限制：** 不涉及。 **取值范围：** [1, 128]。 **默认取值：** 不涉及。
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
    * @param int|null $count **参数解释：** 部署场景下，服务实例数量。 **约束限制：** 不涉及。 **取值范围：** [1, 128]。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets systemLogDumpEnable
    *  **参数解释：** 系统日志转储开关。 **约束限制：** 只有NPU资源池有，且逻辑池是没有的。 **取值范围：** 不涉及。 **默认取值：** false。
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
    * @param bool|null $systemLogDumpEnable **参数解释：** 系统日志转储开关。 **约束限制：** 只有NPU资源池有，且逻辑池是没有的。 **取值范围：** 不涉及。 **默认取值：** false。
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
    *  **参数解释：** 推理单元配置。 **约束限制：** 单机推理时，个数只会为1；如果是分布式推理时，根据不同框架，实例单元配置可灵活配置。
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
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\UnitConfig[]|null $unitConfigs **参数解释：** 推理单元配置。 **约束限制：** 单机推理时，个数只会为1；如果是分布式推理时，根据不同框架，实例单元配置可灵活配置。
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
    *  **参数解释：** 权重百分比，分配到此模型的流量权重，仅当模型部署为在线服务时需要配置。 **约束限制：** 不涉及。 **取值范围：** [0, 100]。 **默认取值：** 不涉及。
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
    * @param int $weight **参数解释：** 权重百分比，分配到此模型的流量权重，仅当模型部署为在线服务时需要配置。 **约束限制：** 不涉及。 **取值范围：** [0, 100]。 **默认取值：** 不涉及。
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
    *  **参数解释：** 凭证类型相关配置，用户可以在此处选择使用的凭证类型（dew，agency） **约束限制：** 1.使用临时委托凭证类型约束限制:集群已安装CCE容器存储（Everest）v2.4.204及以上版本，且集群版本为v1.28及以上且确保局点已启用IAM5服务。 2.若插件版本不足或集群不支持临时委托凭证，则需通过DEW服务挂载。 **取值范围：** - [dew：DEW密钥。](tag:hws,hws_hk,fcs) - agency：临时委托凭证。 **默认取值：** 不涉及。
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
    * @param string|null $secretType **参数解释：** 凭证类型相关配置，用户可以在此处选择使用的凭证类型（dew，agency） **约束限制：** 1.使用临时委托凭证类型约束限制:集群已安装CCE容器存储（Everest）v2.4.204及以上版本，且集群版本为v1.28及以上且确保局点已启用IAM5服务。 2.若插件版本不足或集群不支持临时委托凭证，则需通过DEW服务挂载。 **取值范围：** - [dew：DEW密钥。](tag:hws,hws_hk,fcs) - agency：临时委托凭证。 **默认取值：** 不涉及。
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
    *  **参数解释**： 凭证名称，用户使用dew类型凭证时可以在此处选择使用的凭证。 **约束限制**： 不涉及。
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
    * @param string|null $secretName **参数解释**： 凭证名称，用户使用dew类型凭证时可以在此处选择使用的凭证。 **约束限制**： 不涉及。
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
    *  **参数解释：** 服务优先级。 **约束限制：** - 如服务处于\"运行中\"，priority字段为必要参数，且value必须与原服务的priority值相同； - 如服务处于\"停止\"，priority字段为非必要参数。 **取值范围：** [1, 3]。 **默认取值：** 不涉及。
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
    * @param int|null $priority **参数解释：** 服务优先级。 **约束限制：** - 如服务处于\"运行中\"，priority字段为必要参数，且value必须与原服务的priority值相同； - 如服务处于\"停止\"，priority字段为非必要参数。 **取值范围：** [1, 3]。 **默认取值：** 不涉及。
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
    *  **参数解释：** 高可用开关，开启后不同实例的pod将尽量均匀分布到不同的节点上。（准备下线，请使用schedule_strategy字段） **约束限制：** 不涉及。 **取值范围：** - true：高可用开启。 - false：高可用关闭。 **默认取值：** true。
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
    * @param bool|null $highAvailSwitch **参数解释：** 高可用开关，开启后不同实例的pod将尽量均匀分布到不同的节点上。（准备下线，请使用schedule_strategy字段） **约束限制：** 不涉及。 **取值范围：** - true：高可用开启。 - false：高可用关闭。 **默认取值：** true。
    *
    * @return $this
    */
    public function setHighAvailSwitch($highAvailSwitch)
    {
        $this->container['highAvailSwitch'] = $highAvailSwitch;
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
    * Gets version
    *  **参数解释：** 服务版本号，以数字及点号组成，形如1.0.1。 **约束限制：** 不涉及。 **取值范围：** 1.0.0 ~ 99.99.99，长度不超过8位。 **默认取值：** 不涉及。
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
    * @param string|null $version **参数解释：** 服务版本号，以数字及点号组成，形如1.0.1。 **约束限制：** 不涉及。 **取值范围：** 1.0.0 ~ 99.99.99，长度不超过8位。 **默认取值：** 不涉及。
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
    *  **参数解释：** 版本id，可通过查询version列表查询。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string|null $versionId **参数解释：** 版本id，可通过查询version列表查询。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setVersionId($versionId)
    {
        $this->container['versionId'] = $versionId;
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
    * Gets framework
    *  **参数解释：** 服务框架。 **约束限制：** 仅支持以下枚举值：COMMON | VLLM | MINDIE。 **取值范围：** 仅支持以下枚举值：COMMON | VLLM | MINDIE。 **默认取值：** COMMON。
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
    * @param string|null $framework **参数解释：** 服务框架。 **约束限制：** 仅支持以下枚举值：COMMON | VLLM | MINDIE。 **取值范围：** 仅支持以下枚举值：COMMON | VLLM | MINDIE。 **默认取值：** COMMON。
    *
    * @return $this
    */
    public function setFramework($framework)
    {
        $this->container['framework'] = $framework;
        return $this;
    }

    /**
    * Gets runningCount
    *  **参数解释：** 部署场景下，服务运行实例数量。 **约束限制：** 不涉及。 **取值范围：** [1, 128]。 **默认取值：** 不涉及。
    *
    * @return int|null
    */
    public function getRunningCount()
    {
        return $this->container['runningCount'];
    }

    /**
    * Sets runningCount
    *
    * @param int|null $runningCount **参数解释：** 部署场景下，服务运行实例数量。 **约束限制：** 不涉及。 **取值范围：** [1, 128]。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setRunningCount($runningCount)
    {
        $this->container['runningCount'] = $runningCount;
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
    *  **参数解释：** 镜像流量权重。 **取值范围：** 50。
    *
    * @return string|null
    */
    public function getMirrorTrafficWeight()
    {
        return $this->container['mirrorTrafficWeight'];
    }

    /**
    * Sets mirrorTrafficWeight
    *
    * @param string|null $mirrorTrafficWeight **参数解释：** 镜像流量权重。 **取值范围：** 50。
    *
    * @return $this
    */
    public function setMirrorTrafficWeight($mirrorTrafficWeight)
    {
        $this->container['mirrorTrafficWeight'] = $mirrorTrafficWeight;
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
    * Gets updateAt
    *  **参数解释：** 更新时间，根据更新时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字。
    *
    * @return int|null
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param int|null $updateAt **参数解释：** 更新时间，根据更新时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字。
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
        return $this;
    }

    /**
    * Gets model
    *  model
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ModelResource|null
    */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
    * Sets model
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ModelResource|null $model model
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

