<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInferDeploymentResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInferDeploymentResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 部署ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 部署名称。 **取值范围：** 不涉及。
    * poolId  **参数解释：** 资源池ID，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **取值范围：** 不涉及。
    * count  **参数解释：** 部署场景下，服务实例数量。 **约束限制：** 不涉及。 **取值范围：** [1, 128]。 **默认取值：** 不涉及。
    * systemLogDumpEnable  **参数解释：** 系统日志转储开关。 **约束限制：** 只有NPU资源池有，且逻辑池是没有的。 **取值范围：** 不涉及。 **默认取值：** false。
    * unitConfigs  **参数解释：** 推理单元配置。
    * weight  **参数解释：** 权重百分比，分配到此模型的流量权重，仅当模型部署为在线服务时需要配置。 **取值范围：** [0, 100]。
    * trafficRatio  **参数解释：** 流量比例，单个部署实例预期接收用户的流量与总流量比值，是由流量权重配置和部署状态计算所得的值。 **取值范围：** 0.00%~100.00%。
    * secretType  **参数解释：** 凭证类型相关配置，用户可以在此处选择使用的凭证类型（dew，agency） **约束限制：** 不涉及。 **取值范围：** - [dew：DEW密钥。](tag:hws,hws_hk,fcs) - agency：临时委托凭证。 **默认取值：** 不涉及。
    * secretName  **参数解释：** 凭证名称，用户使用dew类型凭证时可以在此处选择使用的凭证。 **约束限制：** 不涉及。
    * priority  **参数解释：** 服务优先级。 **约束限制：** 不涉及。 **取值范围：** [1, 3]。 **默认取值：** 不涉及。
    * highAvailSwitch  **参数解释：** 高可用开关，开启后不同实例的pod将尽量均匀分布到不同的节点上。（准备下线，请使用schedule_strategy字段） **取值范围：** - true: 高可用开启 - false: 高可用关闭。
    * framework  **参数解释：** 算法框架。 **取值范围：** - COMMON： 普通在线服务。
    * version  **参数解释：** 服务版本号，以数字及点号组成，形如1.0.1。 **约束限制：** 不涉及。 **取值范围：** 1.0.0 ~ 99.99.99，长度不超过8位。 **默认取值：** 不涉及。
    * versionId  **参数解释：** 版本id，可通过查询version列表查询。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * status  **参数解释：** 服务当前状态。 **取值范围：** - DEPLOYING：部署中。 - FAILED：失败。 - STOPPED：停止。 - RUNNING：运行中。 - DELETING：删除中。 - STOPPING：停止中。 - CONCERNING：告警。 - DELETED: 已删除。 - RESTARTING: 重启中。 - UPGRADING：升级中。 - ERROR：异常。 - INTERRUPTING：中断中。
    * runningCount  **参数解释：** 部署场景下，服务运行实例数量。 **约束限制：** 不涉及。 **取值范围：** [1, 128]。 **默认取值：** 不涉及。
    * deployType  **参数解释：** 部署类型。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。
    * mirrorTrafficEnable  **参数解释：** 是否开启镜像流量。 **取值范围：** 不涉及。
    * mirrorTrafficWeight  **参数解释：** 镜像流量权重。 **取值范围：** 50。
    * versionCount  **参数解释：** 服务版本数量。 **取值范围：** 不涉及。
    * workloadType  **参数解释：** 工作负载类型。 **取值范围：** 不涉及。
    * updateAt  **参数解释：** 更新时间，根据更新时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字。
    * ltsState  **参数解释：** 部署对接lts状态。 **取值范围：** - ON：开启。 - OFF：关闭。
    * inferName  **参数解释：** 部署ID。
    * model  model
    * advancedConfig  advancedConfig
    * description  **参数解释：** 部署描述。
    * createAt  参数解释： 创建时间，根据创建时的当前时间自动生成。 取值范围： 毫秒级时间戳，13位数字，如1609459200000。
    * scheduleStrategy  **参数解释：** 调度策略。 **取值范围：** - HIGH_AVAILABILITY：高可用调度 - HIGH_UTILIZATION：紧凑调度 - HIGH_PERFORMANCE：高性能调度
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'poolId' => 'string',
            'count' => 'int',
            'systemLogDumpEnable' => 'bool',
            'unitConfigs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\UnitConfigResponse[]',
            'weight' => 'int',
            'trafficRatio' => 'string',
            'secretType' => 'string',
            'secretName' => 'string',
            'priority' => 'int',
            'highAvailSwitch' => 'bool',
            'framework' => 'string',
            'version' => 'string',
            'versionId' => 'string',
            'status' => 'string',
            'runningCount' => 'int',
            'deployType' => 'string',
            'mirrorTrafficEnable' => 'bool',
            'mirrorTrafficWeight' => 'string',
            'versionCount' => 'int',
            'workloadType' => 'string',
            'updateAt' => 'int',
            'ltsState' => 'string',
            'inferName' => 'string',
            'model' => '\HuaweiCloud\SDK\ModelArts\V1\Model\InferModelResponse',
            'advancedConfig' => '\HuaweiCloud\SDK\ModelArts\V1\Model\AdvancedConfig',
            'description' => 'string',
            'createAt' => 'string',
            'scheduleStrategy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 部署ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 部署名称。 **取值范围：** 不涉及。
    * poolId  **参数解释：** 资源池ID，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **取值范围：** 不涉及。
    * count  **参数解释：** 部署场景下，服务实例数量。 **约束限制：** 不涉及。 **取值范围：** [1, 128]。 **默认取值：** 不涉及。
    * systemLogDumpEnable  **参数解释：** 系统日志转储开关。 **约束限制：** 只有NPU资源池有，且逻辑池是没有的。 **取值范围：** 不涉及。 **默认取值：** false。
    * unitConfigs  **参数解释：** 推理单元配置。
    * weight  **参数解释：** 权重百分比，分配到此模型的流量权重，仅当模型部署为在线服务时需要配置。 **取值范围：** [0, 100]。
    * trafficRatio  **参数解释：** 流量比例，单个部署实例预期接收用户的流量与总流量比值，是由流量权重配置和部署状态计算所得的值。 **取值范围：** 0.00%~100.00%。
    * secretType  **参数解释：** 凭证类型相关配置，用户可以在此处选择使用的凭证类型（dew，agency） **约束限制：** 不涉及。 **取值范围：** - [dew：DEW密钥。](tag:hws,hws_hk,fcs) - agency：临时委托凭证。 **默认取值：** 不涉及。
    * secretName  **参数解释：** 凭证名称，用户使用dew类型凭证时可以在此处选择使用的凭证。 **约束限制：** 不涉及。
    * priority  **参数解释：** 服务优先级。 **约束限制：** 不涉及。 **取值范围：** [1, 3]。 **默认取值：** 不涉及。
    * highAvailSwitch  **参数解释：** 高可用开关，开启后不同实例的pod将尽量均匀分布到不同的节点上。（准备下线，请使用schedule_strategy字段） **取值范围：** - true: 高可用开启 - false: 高可用关闭。
    * framework  **参数解释：** 算法框架。 **取值范围：** - COMMON： 普通在线服务。
    * version  **参数解释：** 服务版本号，以数字及点号组成，形如1.0.1。 **约束限制：** 不涉及。 **取值范围：** 1.0.0 ~ 99.99.99，长度不超过8位。 **默认取值：** 不涉及。
    * versionId  **参数解释：** 版本id，可通过查询version列表查询。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * status  **参数解释：** 服务当前状态。 **取值范围：** - DEPLOYING：部署中。 - FAILED：失败。 - STOPPED：停止。 - RUNNING：运行中。 - DELETING：删除中。 - STOPPING：停止中。 - CONCERNING：告警。 - DELETED: 已删除。 - RESTARTING: 重启中。 - UPGRADING：升级中。 - ERROR：异常。 - INTERRUPTING：中断中。
    * runningCount  **参数解释：** 部署场景下，服务运行实例数量。 **约束限制：** 不涉及。 **取值范围：** [1, 128]。 **默认取值：** 不涉及。
    * deployType  **参数解释：** 部署类型。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。
    * mirrorTrafficEnable  **参数解释：** 是否开启镜像流量。 **取值范围：** 不涉及。
    * mirrorTrafficWeight  **参数解释：** 镜像流量权重。 **取值范围：** 50。
    * versionCount  **参数解释：** 服务版本数量。 **取值范围：** 不涉及。
    * workloadType  **参数解释：** 工作负载类型。 **取值范围：** 不涉及。
    * updateAt  **参数解释：** 更新时间，根据更新时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字。
    * ltsState  **参数解释：** 部署对接lts状态。 **取值范围：** - ON：开启。 - OFF：关闭。
    * inferName  **参数解释：** 部署ID。
    * model  model
    * advancedConfig  advancedConfig
    * description  **参数解释：** 部署描述。
    * createAt  参数解释： 创建时间，根据创建时的当前时间自动生成。 取值范围： 毫秒级时间戳，13位数字，如1609459200000。
    * scheduleStrategy  **参数解释：** 调度策略。 **取值范围：** - HIGH_AVAILABILITY：高可用调度 - HIGH_UTILIZATION：紧凑调度 - HIGH_PERFORMANCE：高性能调度
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
        'trafficRatio' => null,
        'secretType' => null,
        'secretName' => null,
        'priority' => 'int32',
        'highAvailSwitch' => null,
        'framework' => null,
        'version' => null,
        'versionId' => null,
        'status' => null,
        'runningCount' => 'int32',
        'deployType' => null,
        'mirrorTrafficEnable' => null,
        'mirrorTrafficWeight' => null,
        'versionCount' => 'int32',
        'workloadType' => null,
        'updateAt' => 'int64',
        'ltsState' => null,
        'inferName' => null,
        'model' => null,
        'advancedConfig' => null,
        'description' => null,
        'createAt' => null,
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
    * id  **参数解释：** 部署ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 部署名称。 **取值范围：** 不涉及。
    * poolId  **参数解释：** 资源池ID，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **取值范围：** 不涉及。
    * count  **参数解释：** 部署场景下，服务实例数量。 **约束限制：** 不涉及。 **取值范围：** [1, 128]。 **默认取值：** 不涉及。
    * systemLogDumpEnable  **参数解释：** 系统日志转储开关。 **约束限制：** 只有NPU资源池有，且逻辑池是没有的。 **取值范围：** 不涉及。 **默认取值：** false。
    * unitConfigs  **参数解释：** 推理单元配置。
    * weight  **参数解释：** 权重百分比，分配到此模型的流量权重，仅当模型部署为在线服务时需要配置。 **取值范围：** [0, 100]。
    * trafficRatio  **参数解释：** 流量比例，单个部署实例预期接收用户的流量与总流量比值，是由流量权重配置和部署状态计算所得的值。 **取值范围：** 0.00%~100.00%。
    * secretType  **参数解释：** 凭证类型相关配置，用户可以在此处选择使用的凭证类型（dew，agency） **约束限制：** 不涉及。 **取值范围：** - [dew：DEW密钥。](tag:hws,hws_hk,fcs) - agency：临时委托凭证。 **默认取值：** 不涉及。
    * secretName  **参数解释：** 凭证名称，用户使用dew类型凭证时可以在此处选择使用的凭证。 **约束限制：** 不涉及。
    * priority  **参数解释：** 服务优先级。 **约束限制：** 不涉及。 **取值范围：** [1, 3]。 **默认取值：** 不涉及。
    * highAvailSwitch  **参数解释：** 高可用开关，开启后不同实例的pod将尽量均匀分布到不同的节点上。（准备下线，请使用schedule_strategy字段） **取值范围：** - true: 高可用开启 - false: 高可用关闭。
    * framework  **参数解释：** 算法框架。 **取值范围：** - COMMON： 普通在线服务。
    * version  **参数解释：** 服务版本号，以数字及点号组成，形如1.0.1。 **约束限制：** 不涉及。 **取值范围：** 1.0.0 ~ 99.99.99，长度不超过8位。 **默认取值：** 不涉及。
    * versionId  **参数解释：** 版本id，可通过查询version列表查询。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * status  **参数解释：** 服务当前状态。 **取值范围：** - DEPLOYING：部署中。 - FAILED：失败。 - STOPPED：停止。 - RUNNING：运行中。 - DELETING：删除中。 - STOPPING：停止中。 - CONCERNING：告警。 - DELETED: 已删除。 - RESTARTING: 重启中。 - UPGRADING：升级中。 - ERROR：异常。 - INTERRUPTING：中断中。
    * runningCount  **参数解释：** 部署场景下，服务运行实例数量。 **约束限制：** 不涉及。 **取值范围：** [1, 128]。 **默认取值：** 不涉及。
    * deployType  **参数解释：** 部署类型。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。
    * mirrorTrafficEnable  **参数解释：** 是否开启镜像流量。 **取值范围：** 不涉及。
    * mirrorTrafficWeight  **参数解释：** 镜像流量权重。 **取值范围：** 50。
    * versionCount  **参数解释：** 服务版本数量。 **取值范围：** 不涉及。
    * workloadType  **参数解释：** 工作负载类型。 **取值范围：** 不涉及。
    * updateAt  **参数解释：** 更新时间，根据更新时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字。
    * ltsState  **参数解释：** 部署对接lts状态。 **取值范围：** - ON：开启。 - OFF：关闭。
    * inferName  **参数解释：** 部署ID。
    * model  model
    * advancedConfig  advancedConfig
    * description  **参数解释：** 部署描述。
    * createAt  参数解释： 创建时间，根据创建时的当前时间自动生成。 取值范围： 毫秒级时间戳，13位数字，如1609459200000。
    * scheduleStrategy  **参数解释：** 调度策略。 **取值范围：** - HIGH_AVAILABILITY：高可用调度 - HIGH_UTILIZATION：紧凑调度 - HIGH_PERFORMANCE：高性能调度
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
            'trafficRatio' => 'traffic_ratio',
            'secretType' => 'secret_type',
            'secretName' => 'secret_name',
            'priority' => 'priority',
            'highAvailSwitch' => 'high_avail_switch',
            'framework' => 'framework',
            'version' => 'version',
            'versionId' => 'version_id',
            'status' => 'status',
            'runningCount' => 'running_count',
            'deployType' => 'deploy_type',
            'mirrorTrafficEnable' => 'mirror_traffic_enable',
            'mirrorTrafficWeight' => 'mirror_traffic_weight',
            'versionCount' => 'version_count',
            'workloadType' => 'workload_type',
            'updateAt' => 'update_at',
            'ltsState' => 'lts_state',
            'inferName' => 'infer_name',
            'model' => 'model',
            'advancedConfig' => 'advanced_config',
            'description' => 'description',
            'createAt' => 'create_at',
            'scheduleStrategy' => 'schedule_strategy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 部署ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 部署名称。 **取值范围：** 不涉及。
    * poolId  **参数解释：** 资源池ID，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **取值范围：** 不涉及。
    * count  **参数解释：** 部署场景下，服务实例数量。 **约束限制：** 不涉及。 **取值范围：** [1, 128]。 **默认取值：** 不涉及。
    * systemLogDumpEnable  **参数解释：** 系统日志转储开关。 **约束限制：** 只有NPU资源池有，且逻辑池是没有的。 **取值范围：** 不涉及。 **默认取值：** false。
    * unitConfigs  **参数解释：** 推理单元配置。
    * weight  **参数解释：** 权重百分比，分配到此模型的流量权重，仅当模型部署为在线服务时需要配置。 **取值范围：** [0, 100]。
    * trafficRatio  **参数解释：** 流量比例，单个部署实例预期接收用户的流量与总流量比值，是由流量权重配置和部署状态计算所得的值。 **取值范围：** 0.00%~100.00%。
    * secretType  **参数解释：** 凭证类型相关配置，用户可以在此处选择使用的凭证类型（dew，agency） **约束限制：** 不涉及。 **取值范围：** - [dew：DEW密钥。](tag:hws,hws_hk,fcs) - agency：临时委托凭证。 **默认取值：** 不涉及。
    * secretName  **参数解释：** 凭证名称，用户使用dew类型凭证时可以在此处选择使用的凭证。 **约束限制：** 不涉及。
    * priority  **参数解释：** 服务优先级。 **约束限制：** 不涉及。 **取值范围：** [1, 3]。 **默认取值：** 不涉及。
    * highAvailSwitch  **参数解释：** 高可用开关，开启后不同实例的pod将尽量均匀分布到不同的节点上。（准备下线，请使用schedule_strategy字段） **取值范围：** - true: 高可用开启 - false: 高可用关闭。
    * framework  **参数解释：** 算法框架。 **取值范围：** - COMMON： 普通在线服务。
    * version  **参数解释：** 服务版本号，以数字及点号组成，形如1.0.1。 **约束限制：** 不涉及。 **取值范围：** 1.0.0 ~ 99.99.99，长度不超过8位。 **默认取值：** 不涉及。
    * versionId  **参数解释：** 版本id，可通过查询version列表查询。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * status  **参数解释：** 服务当前状态。 **取值范围：** - DEPLOYING：部署中。 - FAILED：失败。 - STOPPED：停止。 - RUNNING：运行中。 - DELETING：删除中。 - STOPPING：停止中。 - CONCERNING：告警。 - DELETED: 已删除。 - RESTARTING: 重启中。 - UPGRADING：升级中。 - ERROR：异常。 - INTERRUPTING：中断中。
    * runningCount  **参数解释：** 部署场景下，服务运行实例数量。 **约束限制：** 不涉及。 **取值范围：** [1, 128]。 **默认取值：** 不涉及。
    * deployType  **参数解释：** 部署类型。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。
    * mirrorTrafficEnable  **参数解释：** 是否开启镜像流量。 **取值范围：** 不涉及。
    * mirrorTrafficWeight  **参数解释：** 镜像流量权重。 **取值范围：** 50。
    * versionCount  **参数解释：** 服务版本数量。 **取值范围：** 不涉及。
    * workloadType  **参数解释：** 工作负载类型。 **取值范围：** 不涉及。
    * updateAt  **参数解释：** 更新时间，根据更新时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字。
    * ltsState  **参数解释：** 部署对接lts状态。 **取值范围：** - ON：开启。 - OFF：关闭。
    * inferName  **参数解释：** 部署ID。
    * model  model
    * advancedConfig  advancedConfig
    * description  **参数解释：** 部署描述。
    * createAt  参数解释： 创建时间，根据创建时的当前时间自动生成。 取值范围： 毫秒级时间戳，13位数字，如1609459200000。
    * scheduleStrategy  **参数解释：** 调度策略。 **取值范围：** - HIGH_AVAILABILITY：高可用调度 - HIGH_UTILIZATION：紧凑调度 - HIGH_PERFORMANCE：高性能调度
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
            'trafficRatio' => 'setTrafficRatio',
            'secretType' => 'setSecretType',
            'secretName' => 'setSecretName',
            'priority' => 'setPriority',
            'highAvailSwitch' => 'setHighAvailSwitch',
            'framework' => 'setFramework',
            'version' => 'setVersion',
            'versionId' => 'setVersionId',
            'status' => 'setStatus',
            'runningCount' => 'setRunningCount',
            'deployType' => 'setDeployType',
            'mirrorTrafficEnable' => 'setMirrorTrafficEnable',
            'mirrorTrafficWeight' => 'setMirrorTrafficWeight',
            'versionCount' => 'setVersionCount',
            'workloadType' => 'setWorkloadType',
            'updateAt' => 'setUpdateAt',
            'ltsState' => 'setLtsState',
            'inferName' => 'setInferName',
            'model' => 'setModel',
            'advancedConfig' => 'setAdvancedConfig',
            'description' => 'setDescription',
            'createAt' => 'setCreateAt',
            'scheduleStrategy' => 'setScheduleStrategy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 部署ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 部署名称。 **取值范围：** 不涉及。
    * poolId  **参数解释：** 资源池ID，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **取值范围：** 不涉及。
    * count  **参数解释：** 部署场景下，服务实例数量。 **约束限制：** 不涉及。 **取值范围：** [1, 128]。 **默认取值：** 不涉及。
    * systemLogDumpEnable  **参数解释：** 系统日志转储开关。 **约束限制：** 只有NPU资源池有，且逻辑池是没有的。 **取值范围：** 不涉及。 **默认取值：** false。
    * unitConfigs  **参数解释：** 推理单元配置。
    * weight  **参数解释：** 权重百分比，分配到此模型的流量权重，仅当模型部署为在线服务时需要配置。 **取值范围：** [0, 100]。
    * trafficRatio  **参数解释：** 流量比例，单个部署实例预期接收用户的流量与总流量比值，是由流量权重配置和部署状态计算所得的值。 **取值范围：** 0.00%~100.00%。
    * secretType  **参数解释：** 凭证类型相关配置，用户可以在此处选择使用的凭证类型（dew，agency） **约束限制：** 不涉及。 **取值范围：** - [dew：DEW密钥。](tag:hws,hws_hk,fcs) - agency：临时委托凭证。 **默认取值：** 不涉及。
    * secretName  **参数解释：** 凭证名称，用户使用dew类型凭证时可以在此处选择使用的凭证。 **约束限制：** 不涉及。
    * priority  **参数解释：** 服务优先级。 **约束限制：** 不涉及。 **取值范围：** [1, 3]。 **默认取值：** 不涉及。
    * highAvailSwitch  **参数解释：** 高可用开关，开启后不同实例的pod将尽量均匀分布到不同的节点上。（准备下线，请使用schedule_strategy字段） **取值范围：** - true: 高可用开启 - false: 高可用关闭。
    * framework  **参数解释：** 算法框架。 **取值范围：** - COMMON： 普通在线服务。
    * version  **参数解释：** 服务版本号，以数字及点号组成，形如1.0.1。 **约束限制：** 不涉及。 **取值范围：** 1.0.0 ~ 99.99.99，长度不超过8位。 **默认取值：** 不涉及。
    * versionId  **参数解释：** 版本id，可通过查询version列表查询。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * status  **参数解释：** 服务当前状态。 **取值范围：** - DEPLOYING：部署中。 - FAILED：失败。 - STOPPED：停止。 - RUNNING：运行中。 - DELETING：删除中。 - STOPPING：停止中。 - CONCERNING：告警。 - DELETED: 已删除。 - RESTARTING: 重启中。 - UPGRADING：升级中。 - ERROR：异常。 - INTERRUPTING：中断中。
    * runningCount  **参数解释：** 部署场景下，服务运行实例数量。 **约束限制：** 不涉及。 **取值范围：** [1, 128]。 **默认取值：** 不涉及。
    * deployType  **参数解释：** 部署类型。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。
    * mirrorTrafficEnable  **参数解释：** 是否开启镜像流量。 **取值范围：** 不涉及。
    * mirrorTrafficWeight  **参数解释：** 镜像流量权重。 **取值范围：** 50。
    * versionCount  **参数解释：** 服务版本数量。 **取值范围：** 不涉及。
    * workloadType  **参数解释：** 工作负载类型。 **取值范围：** 不涉及。
    * updateAt  **参数解释：** 更新时间，根据更新时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字。
    * ltsState  **参数解释：** 部署对接lts状态。 **取值范围：** - ON：开启。 - OFF：关闭。
    * inferName  **参数解释：** 部署ID。
    * model  model
    * advancedConfig  advancedConfig
    * description  **参数解释：** 部署描述。
    * createAt  参数解释： 创建时间，根据创建时的当前时间自动生成。 取值范围： 毫秒级时间戳，13位数字，如1609459200000。
    * scheduleStrategy  **参数解释：** 调度策略。 **取值范围：** - HIGH_AVAILABILITY：高可用调度 - HIGH_UTILIZATION：紧凑调度 - HIGH_PERFORMANCE：高性能调度
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
            'trafficRatio' => 'getTrafficRatio',
            'secretType' => 'getSecretType',
            'secretName' => 'getSecretName',
            'priority' => 'getPriority',
            'highAvailSwitch' => 'getHighAvailSwitch',
            'framework' => 'getFramework',
            'version' => 'getVersion',
            'versionId' => 'getVersionId',
            'status' => 'getStatus',
            'runningCount' => 'getRunningCount',
            'deployType' => 'getDeployType',
            'mirrorTrafficEnable' => 'getMirrorTrafficEnable',
            'mirrorTrafficWeight' => 'getMirrorTrafficWeight',
            'versionCount' => 'getVersionCount',
            'workloadType' => 'getWorkloadType',
            'updateAt' => 'getUpdateAt',
            'ltsState' => 'getLtsState',
            'inferName' => 'getInferName',
            'model' => 'getModel',
            'advancedConfig' => 'getAdvancedConfig',
            'description' => 'getDescription',
            'createAt' => 'getCreateAt',
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
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['systemLogDumpEnable'] = isset($data['systemLogDumpEnable']) ? $data['systemLogDumpEnable'] : null;
        $this->container['unitConfigs'] = isset($data['unitConfigs']) ? $data['unitConfigs'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['trafficRatio'] = isset($data['trafficRatio']) ? $data['trafficRatio'] : null;
        $this->container['secretType'] = isset($data['secretType']) ? $data['secretType'] : null;
        $this->container['secretName'] = isset($data['secretName']) ? $data['secretName'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['highAvailSwitch'] = isset($data['highAvailSwitch']) ? $data['highAvailSwitch'] : null;
        $this->container['framework'] = isset($data['framework']) ? $data['framework'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['versionId'] = isset($data['versionId']) ? $data['versionId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['runningCount'] = isset($data['runningCount']) ? $data['runningCount'] : null;
        $this->container['deployType'] = isset($data['deployType']) ? $data['deployType'] : null;
        $this->container['mirrorTrafficEnable'] = isset($data['mirrorTrafficEnable']) ? $data['mirrorTrafficEnable'] : null;
        $this->container['mirrorTrafficWeight'] = isset($data['mirrorTrafficWeight']) ? $data['mirrorTrafficWeight'] : null;
        $this->container['versionCount'] = isset($data['versionCount']) ? $data['versionCount'] : null;
        $this->container['workloadType'] = isset($data['workloadType']) ? $data['workloadType'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
        $this->container['ltsState'] = isset($data['ltsState']) ? $data['ltsState'] : null;
        $this->container['inferName'] = isset($data['inferName']) ? $data['inferName'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['advancedConfig'] = isset($data['advancedConfig']) ? $data['advancedConfig'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
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
    *  **参数解释：** 部署ID。 **取值范围：** 不涉及。
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
    * @param string|null $id **参数解释：** 部署ID。 **取值范围：** 不涉及。
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
    *  **参数解释：** 部署名称。 **取值范围：** 不涉及。
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
    * @param string|null $name **参数解释：** 部署名称。 **取值范围：** 不涉及。
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
    *  **参数解释：** 资源池ID，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **取值范围：** 不涉及。
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
    * @param string|null $poolId **参数解释：** 资源池ID，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **取值范围：** 不涉及。
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
    *  **参数解释：** 推理单元配置。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\UnitConfigResponse[]|null
    */
    public function getUnitConfigs()
    {
        return $this->container['unitConfigs'];
    }

    /**
    * Sets unitConfigs
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\UnitConfigResponse[]|null $unitConfigs **参数解释：** 推理单元配置。
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
    *  **参数解释：** 权重百分比，分配到此模型的流量权重，仅当模型部署为在线服务时需要配置。 **取值范围：** [0, 100]。
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
    * @param int|null $weight **参数解释：** 权重百分比，分配到此模型的流量权重，仅当模型部署为在线服务时需要配置。 **取值范围：** [0, 100]。
    *
    * @return $this
    */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;
        return $this;
    }

    /**
    * Gets trafficRatio
    *  **参数解释：** 流量比例，单个部署实例预期接收用户的流量与总流量比值，是由流量权重配置和部署状态计算所得的值。 **取值范围：** 0.00%~100.00%。
    *
    * @return string|null
    */
    public function getTrafficRatio()
    {
        return $this->container['trafficRatio'];
    }

    /**
    * Sets trafficRatio
    *
    * @param string|null $trafficRatio **参数解释：** 流量比例，单个部署实例预期接收用户的流量与总流量比值，是由流量权重配置和部署状态计算所得的值。 **取值范围：** 0.00%~100.00%。
    *
    * @return $this
    */
    public function setTrafficRatio($trafficRatio)
    {
        $this->container['trafficRatio'] = $trafficRatio;
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
    *  **参数解释：** 凭证名称，用户使用dew类型凭证时可以在此处选择使用的凭证。 **约束限制：** 不涉及。
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
    * @param string|null $secretName **参数解释：** 凭证名称，用户使用dew类型凭证时可以在此处选择使用的凭证。 **约束限制：** 不涉及。
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
    * Gets highAvailSwitch
    *  **参数解释：** 高可用开关，开启后不同实例的pod将尽量均匀分布到不同的节点上。（准备下线，请使用schedule_strategy字段） **取值范围：** - true: 高可用开启 - false: 高可用关闭。
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
    * @param bool|null $highAvailSwitch **参数解释：** 高可用开关，开启后不同实例的pod将尽量均匀分布到不同的节点上。（准备下线，请使用schedule_strategy字段） **取值范围：** - true: 高可用开启 - false: 高可用关闭。
    *
    * @return $this
    */
    public function setHighAvailSwitch($highAvailSwitch)
    {
        $this->container['highAvailSwitch'] = $highAvailSwitch;
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
    * Gets status
    *  **参数解释：** 服务当前状态。 **取值范围：** - DEPLOYING：部署中。 - FAILED：失败。 - STOPPED：停止。 - RUNNING：运行中。 - DELETING：删除中。 - STOPPING：停止中。 - CONCERNING：告警。 - DELETED: 已删除。 - RESTARTING: 重启中。 - UPGRADING：升级中。 - ERROR：异常。 - INTERRUPTING：中断中。
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
    * @param string|null $status **参数解释：** 服务当前状态。 **取值范围：** - DEPLOYING：部署中。 - FAILED：失败。 - STOPPED：停止。 - RUNNING：运行中。 - DELETING：删除中。 - STOPPING：停止中。 - CONCERNING：告警。 - DELETED: 已删除。 - RESTARTING: 重启中。 - UPGRADING：升级中。 - ERROR：异常。 - INTERRUPTING：中断中。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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
    *  **参数解释：** 工作负载类型。 **取值范围：** 不涉及。
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
    * @param string|null $workloadType **参数解释：** 工作负载类型。 **取值范围：** 不涉及。
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
    * Gets ltsState
    *  **参数解释：** 部署对接lts状态。 **取值范围：** - ON：开启。 - OFF：关闭。
    *
    * @return string|null
    */
    public function getLtsState()
    {
        return $this->container['ltsState'];
    }

    /**
    * Sets ltsState
    *
    * @param string|null $ltsState **参数解释：** 部署对接lts状态。 **取值范围：** - ON：开启。 - OFF：关闭。
    *
    * @return $this
    */
    public function setLtsState($ltsState)
    {
        $this->container['ltsState'] = $ltsState;
        return $this;
    }

    /**
    * Gets inferName
    *  **参数解释：** 部署ID。
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
    * @param string|null $inferName **参数解释：** 部署ID。
    *
    * @return $this
    */
    public function setInferName($inferName)
    {
        $this->container['inferName'] = $inferName;
        return $this;
    }

    /**
    * Gets model
    *  model
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\InferModelResponse|null
    */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
    * Sets model
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\InferModelResponse|null $model model
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
    * Gets description
    *  **参数解释：** 部署描述。
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
    * @param string|null $description **参数解释：** 部署描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets createAt
    *  参数解释： 创建时间，根据创建时的当前时间自动生成。 取值范围： 毫秒级时间戳，13位数字，如1609459200000。
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
    * @param string|null $createAt 参数解释： 创建时间，根据创建时的当前时间自动生成。 取值范围： 毫秒级时间戳，13位数字，如1609459200000。
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets scheduleStrategy
    *  **参数解释：** 调度策略。 **取值范围：** - HIGH_AVAILABILITY：高可用调度 - HIGH_UTILIZATION：紧凑调度 - HIGH_PERFORMANCE：高性能调度
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
    * @param string|null $scheduleStrategy **参数解释：** 调度策略。 **取值范围：** - HIGH_AVAILABILITY：高可用调度 - HIGH_UTILIZATION：紧凑调度 - HIGH_PERFORMANCE：高性能调度
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

