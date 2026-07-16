<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateInferDeploymentScaleResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateInferDeploymentScaleResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  参数解释： 部署ID，在[添加部署](CreateInferDeployment.xml)时即可在返回体中获取，也可通过[查询服务部署列表](ListInferDeployments.xml)获取当前用户拥有的部署，其中deployment_id字段即为部署ID。 约束限制： 不涉及。 取值范围： 部署ID。 默认取值： 不涉及。
    * name  **参数解释：** 服务部署名字
    * inferName  参数解释： 部署id（废弃字段）。 取值范围： 不涉及。
    * createAt  **参数解释：** 创建时间，根据创建时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字
    * description  参数解释： 描述 取值范围： 不涉及。
    * poolId  **参数解释：** 专属资源池ID。 **取值范围：** 不涉及。
    * framework  **参数解释：** 算法框架。 **取值范围：** - COMMON： 普通在线服务。
    * priority  **参数解释：** 服务优先级。 **约束限制：** 不涉及。 **取值范围：** [1, 3]。 **默认取值：** 不涉及。
    * secretType  **参数解释：** 凭证类型相关配置，用户可以在此处选择使用的凭证类型（dew，agency） **约束限制：** 不涉及。 **取值范围：** - [dew：DEW密钥。](tag:hws,hws_hk,fcs) - agency：临时委托凭证。 **默认取值：** 不涉及。
    * status  **参数解释：** 服务部署状态
    * count  **参数解释：** 服务实例数
    * highAvailSwitch  **参数解释：** 高可用开关，开启后不同实例的pod将尽量均匀分布到不同的节点上。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** true
    * systemLogDumpEnable  **参数解释：** 系统日志转储开关。 **约束限制：** 只有NPU资源池有，且逻辑池是没有的 **取值范围：** 不涉及 **默认取值：** false
    * unitConfigs  **参数解释：** 实例单元配置。 **约束限制：** 单机推理时，个数只会为1；如果是分布式推理时，根据不同框架，实例单元配置可灵活配置。
    * updateAt  **参数解释：** 更新时间，根据更新时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字。
    * version  **参数解释：** 当前服务版本信息。
    * versionCount  **参数解释：** 服务版本数量。 **取值范围：** 不涉及。
    * weight  **参数解释：** 权重百分比，分配到此模型的流量权重，仅当模型部署为在线服务时需要配置。 **约束限制：** 不涉及。 **取值范围：** [0, 100]。 **默认取值：** 不涉及。
    * advancedConfig  advancedConfig
    * jobId  **参数解释：** 巫山工作流ID。 **取值范围：** 不涉及。
    * deploymentName  参数解释： 服务部署名字。
    * frozenInfos  **参数解释：** 当服务或者部署被冻结时返回的冻结类型信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'inferName' => 'string',
            'createAt' => '\DateTime',
            'description' => 'string',
            'poolId' => 'string',
            'framework' => 'string',
            'priority' => 'string',
            'secretType' => 'string',
            'status' => 'string',
            'count' => 'int',
            'highAvailSwitch' => 'string',
            'systemLogDumpEnable' => 'string',
            'unitConfigs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\UnitConfig[]',
            'updateAt' => '\DateTime',
            'version' => 'string',
            'versionCount' => 'int',
            'weight' => 'int',
            'advancedConfig' => '\HuaweiCloud\SDK\ModelArts\V1\Model\AdvancedConfig',
            'jobId' => 'string',
            'deploymentName' => 'string',
            'frozenInfos' => '\HuaweiCloud\SDK\ModelArts\V1\Model\FrozenInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  参数解释： 部署ID，在[添加部署](CreateInferDeployment.xml)时即可在返回体中获取，也可通过[查询服务部署列表](ListInferDeployments.xml)获取当前用户拥有的部署，其中deployment_id字段即为部署ID。 约束限制： 不涉及。 取值范围： 部署ID。 默认取值： 不涉及。
    * name  **参数解释：** 服务部署名字
    * inferName  参数解释： 部署id（废弃字段）。 取值范围： 不涉及。
    * createAt  **参数解释：** 创建时间，根据创建时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字
    * description  参数解释： 描述 取值范围： 不涉及。
    * poolId  **参数解释：** 专属资源池ID。 **取值范围：** 不涉及。
    * framework  **参数解释：** 算法框架。 **取值范围：** - COMMON： 普通在线服务。
    * priority  **参数解释：** 服务优先级。 **约束限制：** 不涉及。 **取值范围：** [1, 3]。 **默认取值：** 不涉及。
    * secretType  **参数解释：** 凭证类型相关配置，用户可以在此处选择使用的凭证类型（dew，agency） **约束限制：** 不涉及。 **取值范围：** - [dew：DEW密钥。](tag:hws,hws_hk,fcs) - agency：临时委托凭证。 **默认取值：** 不涉及。
    * status  **参数解释：** 服务部署状态
    * count  **参数解释：** 服务实例数
    * highAvailSwitch  **参数解释：** 高可用开关，开启后不同实例的pod将尽量均匀分布到不同的节点上。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** true
    * systemLogDumpEnable  **参数解释：** 系统日志转储开关。 **约束限制：** 只有NPU资源池有，且逻辑池是没有的 **取值范围：** 不涉及 **默认取值：** false
    * unitConfigs  **参数解释：** 实例单元配置。 **约束限制：** 单机推理时，个数只会为1；如果是分布式推理时，根据不同框架，实例单元配置可灵活配置。
    * updateAt  **参数解释：** 更新时间，根据更新时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字。
    * version  **参数解释：** 当前服务版本信息。
    * versionCount  **参数解释：** 服务版本数量。 **取值范围：** 不涉及。
    * weight  **参数解释：** 权重百分比，分配到此模型的流量权重，仅当模型部署为在线服务时需要配置。 **约束限制：** 不涉及。 **取值范围：** [0, 100]。 **默认取值：** 不涉及。
    * advancedConfig  advancedConfig
    * jobId  **参数解释：** 巫山工作流ID。 **取值范围：** 不涉及。
    * deploymentName  参数解释： 服务部署名字。
    * frozenInfos  **参数解释：** 当服务或者部署被冻结时返回的冻结类型信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'inferName' => null,
        'createAt' => 'date-time',
        'description' => null,
        'poolId' => null,
        'framework' => null,
        'priority' => null,
        'secretType' => null,
        'status' => null,
        'count' => 'int32',
        'highAvailSwitch' => null,
        'systemLogDumpEnable' => null,
        'unitConfigs' => null,
        'updateAt' => 'date-time',
        'version' => null,
        'versionCount' => 'int32',
        'weight' => 'int32',
        'advancedConfig' => null,
        'jobId' => null,
        'deploymentName' => null,
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
    * id  参数解释： 部署ID，在[添加部署](CreateInferDeployment.xml)时即可在返回体中获取，也可通过[查询服务部署列表](ListInferDeployments.xml)获取当前用户拥有的部署，其中deployment_id字段即为部署ID。 约束限制： 不涉及。 取值范围： 部署ID。 默认取值： 不涉及。
    * name  **参数解释：** 服务部署名字
    * inferName  参数解释： 部署id（废弃字段）。 取值范围： 不涉及。
    * createAt  **参数解释：** 创建时间，根据创建时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字
    * description  参数解释： 描述 取值范围： 不涉及。
    * poolId  **参数解释：** 专属资源池ID。 **取值范围：** 不涉及。
    * framework  **参数解释：** 算法框架。 **取值范围：** - COMMON： 普通在线服务。
    * priority  **参数解释：** 服务优先级。 **约束限制：** 不涉及。 **取值范围：** [1, 3]。 **默认取值：** 不涉及。
    * secretType  **参数解释：** 凭证类型相关配置，用户可以在此处选择使用的凭证类型（dew，agency） **约束限制：** 不涉及。 **取值范围：** - [dew：DEW密钥。](tag:hws,hws_hk,fcs) - agency：临时委托凭证。 **默认取值：** 不涉及。
    * status  **参数解释：** 服务部署状态
    * count  **参数解释：** 服务实例数
    * highAvailSwitch  **参数解释：** 高可用开关，开启后不同实例的pod将尽量均匀分布到不同的节点上。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** true
    * systemLogDumpEnable  **参数解释：** 系统日志转储开关。 **约束限制：** 只有NPU资源池有，且逻辑池是没有的 **取值范围：** 不涉及 **默认取值：** false
    * unitConfigs  **参数解释：** 实例单元配置。 **约束限制：** 单机推理时，个数只会为1；如果是分布式推理时，根据不同框架，实例单元配置可灵活配置。
    * updateAt  **参数解释：** 更新时间，根据更新时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字。
    * version  **参数解释：** 当前服务版本信息。
    * versionCount  **参数解释：** 服务版本数量。 **取值范围：** 不涉及。
    * weight  **参数解释：** 权重百分比，分配到此模型的流量权重，仅当模型部署为在线服务时需要配置。 **约束限制：** 不涉及。 **取值范围：** [0, 100]。 **默认取值：** 不涉及。
    * advancedConfig  advancedConfig
    * jobId  **参数解释：** 巫山工作流ID。 **取值范围：** 不涉及。
    * deploymentName  参数解释： 服务部署名字。
    * frozenInfos  **参数解释：** 当服务或者部署被冻结时返回的冻结类型信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'inferName' => 'infer_name',
            'createAt' => 'create_at',
            'description' => 'description',
            'poolId' => 'pool_id',
            'framework' => 'framework',
            'priority' => 'priority',
            'secretType' => 'secret_type',
            'status' => 'status',
            'count' => 'count',
            'highAvailSwitch' => 'high_avail_switch',
            'systemLogDumpEnable' => 'system_log_dump_enable',
            'unitConfigs' => 'unit_configs',
            'updateAt' => 'update_at',
            'version' => 'version',
            'versionCount' => 'version_count',
            'weight' => 'weight',
            'advancedConfig' => 'advanced_config',
            'jobId' => 'job_id',
            'deploymentName' => 'deployment_name',
            'frozenInfos' => 'frozen_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  参数解释： 部署ID，在[添加部署](CreateInferDeployment.xml)时即可在返回体中获取，也可通过[查询服务部署列表](ListInferDeployments.xml)获取当前用户拥有的部署，其中deployment_id字段即为部署ID。 约束限制： 不涉及。 取值范围： 部署ID。 默认取值： 不涉及。
    * name  **参数解释：** 服务部署名字
    * inferName  参数解释： 部署id（废弃字段）。 取值范围： 不涉及。
    * createAt  **参数解释：** 创建时间，根据创建时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字
    * description  参数解释： 描述 取值范围： 不涉及。
    * poolId  **参数解释：** 专属资源池ID。 **取值范围：** 不涉及。
    * framework  **参数解释：** 算法框架。 **取值范围：** - COMMON： 普通在线服务。
    * priority  **参数解释：** 服务优先级。 **约束限制：** 不涉及。 **取值范围：** [1, 3]。 **默认取值：** 不涉及。
    * secretType  **参数解释：** 凭证类型相关配置，用户可以在此处选择使用的凭证类型（dew，agency） **约束限制：** 不涉及。 **取值范围：** - [dew：DEW密钥。](tag:hws,hws_hk,fcs) - agency：临时委托凭证。 **默认取值：** 不涉及。
    * status  **参数解释：** 服务部署状态
    * count  **参数解释：** 服务实例数
    * highAvailSwitch  **参数解释：** 高可用开关，开启后不同实例的pod将尽量均匀分布到不同的节点上。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** true
    * systemLogDumpEnable  **参数解释：** 系统日志转储开关。 **约束限制：** 只有NPU资源池有，且逻辑池是没有的 **取值范围：** 不涉及 **默认取值：** false
    * unitConfigs  **参数解释：** 实例单元配置。 **约束限制：** 单机推理时，个数只会为1；如果是分布式推理时，根据不同框架，实例单元配置可灵活配置。
    * updateAt  **参数解释：** 更新时间，根据更新时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字。
    * version  **参数解释：** 当前服务版本信息。
    * versionCount  **参数解释：** 服务版本数量。 **取值范围：** 不涉及。
    * weight  **参数解释：** 权重百分比，分配到此模型的流量权重，仅当模型部署为在线服务时需要配置。 **约束限制：** 不涉及。 **取值范围：** [0, 100]。 **默认取值：** 不涉及。
    * advancedConfig  advancedConfig
    * jobId  **参数解释：** 巫山工作流ID。 **取值范围：** 不涉及。
    * deploymentName  参数解释： 服务部署名字。
    * frozenInfos  **参数解释：** 当服务或者部署被冻结时返回的冻结类型信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'inferName' => 'setInferName',
            'createAt' => 'setCreateAt',
            'description' => 'setDescription',
            'poolId' => 'setPoolId',
            'framework' => 'setFramework',
            'priority' => 'setPriority',
            'secretType' => 'setSecretType',
            'status' => 'setStatus',
            'count' => 'setCount',
            'highAvailSwitch' => 'setHighAvailSwitch',
            'systemLogDumpEnable' => 'setSystemLogDumpEnable',
            'unitConfigs' => 'setUnitConfigs',
            'updateAt' => 'setUpdateAt',
            'version' => 'setVersion',
            'versionCount' => 'setVersionCount',
            'weight' => 'setWeight',
            'advancedConfig' => 'setAdvancedConfig',
            'jobId' => 'setJobId',
            'deploymentName' => 'setDeploymentName',
            'frozenInfos' => 'setFrozenInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  参数解释： 部署ID，在[添加部署](CreateInferDeployment.xml)时即可在返回体中获取，也可通过[查询服务部署列表](ListInferDeployments.xml)获取当前用户拥有的部署，其中deployment_id字段即为部署ID。 约束限制： 不涉及。 取值范围： 部署ID。 默认取值： 不涉及。
    * name  **参数解释：** 服务部署名字
    * inferName  参数解释： 部署id（废弃字段）。 取值范围： 不涉及。
    * createAt  **参数解释：** 创建时间，根据创建时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字
    * description  参数解释： 描述 取值范围： 不涉及。
    * poolId  **参数解释：** 专属资源池ID。 **取值范围：** 不涉及。
    * framework  **参数解释：** 算法框架。 **取值范围：** - COMMON： 普通在线服务。
    * priority  **参数解释：** 服务优先级。 **约束限制：** 不涉及。 **取值范围：** [1, 3]。 **默认取值：** 不涉及。
    * secretType  **参数解释：** 凭证类型相关配置，用户可以在此处选择使用的凭证类型（dew，agency） **约束限制：** 不涉及。 **取值范围：** - [dew：DEW密钥。](tag:hws,hws_hk,fcs) - agency：临时委托凭证。 **默认取值：** 不涉及。
    * status  **参数解释：** 服务部署状态
    * count  **参数解释：** 服务实例数
    * highAvailSwitch  **参数解释：** 高可用开关，开启后不同实例的pod将尽量均匀分布到不同的节点上。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** true
    * systemLogDumpEnable  **参数解释：** 系统日志转储开关。 **约束限制：** 只有NPU资源池有，且逻辑池是没有的 **取值范围：** 不涉及 **默认取值：** false
    * unitConfigs  **参数解释：** 实例单元配置。 **约束限制：** 单机推理时，个数只会为1；如果是分布式推理时，根据不同框架，实例单元配置可灵活配置。
    * updateAt  **参数解释：** 更新时间，根据更新时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字。
    * version  **参数解释：** 当前服务版本信息。
    * versionCount  **参数解释：** 服务版本数量。 **取值范围：** 不涉及。
    * weight  **参数解释：** 权重百分比，分配到此模型的流量权重，仅当模型部署为在线服务时需要配置。 **约束限制：** 不涉及。 **取值范围：** [0, 100]。 **默认取值：** 不涉及。
    * advancedConfig  advancedConfig
    * jobId  **参数解释：** 巫山工作流ID。 **取值范围：** 不涉及。
    * deploymentName  参数解释： 服务部署名字。
    * frozenInfos  **参数解释：** 当服务或者部署被冻结时返回的冻结类型信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'inferName' => 'getInferName',
            'createAt' => 'getCreateAt',
            'description' => 'getDescription',
            'poolId' => 'getPoolId',
            'framework' => 'getFramework',
            'priority' => 'getPriority',
            'secretType' => 'getSecretType',
            'status' => 'getStatus',
            'count' => 'getCount',
            'highAvailSwitch' => 'getHighAvailSwitch',
            'systemLogDumpEnable' => 'getSystemLogDumpEnable',
            'unitConfigs' => 'getUnitConfigs',
            'updateAt' => 'getUpdateAt',
            'version' => 'getVersion',
            'versionCount' => 'getVersionCount',
            'weight' => 'getWeight',
            'advancedConfig' => 'getAdvancedConfig',
            'jobId' => 'getJobId',
            'deploymentName' => 'getDeploymentName',
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
        $this->container['inferName'] = isset($data['inferName']) ? $data['inferName'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['poolId'] = isset($data['poolId']) ? $data['poolId'] : null;
        $this->container['framework'] = isset($data['framework']) ? $data['framework'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['secretType'] = isset($data['secretType']) ? $data['secretType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['highAvailSwitch'] = isset($data['highAvailSwitch']) ? $data['highAvailSwitch'] : null;
        $this->container['systemLogDumpEnable'] = isset($data['systemLogDumpEnable']) ? $data['systemLogDumpEnable'] : null;
        $this->container['unitConfigs'] = isset($data['unitConfigs']) ? $data['unitConfigs'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['versionCount'] = isset($data['versionCount']) ? $data['versionCount'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['advancedConfig'] = isset($data['advancedConfig']) ? $data['advancedConfig'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['deploymentName'] = isset($data['deploymentName']) ? $data['deploymentName'] : null;
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
    * Gets priority
    *  **参数解释：** 服务优先级。 **约束限制：** 不涉及。 **取值范围：** [1, 3]。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param string|null $priority **参数解释：** 服务优先级。 **约束限制：** 不涉及。 **取值范围：** [1, 3]。 **默认取值：** 不涉及。
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
    * Gets count
    *  **参数解释：** 服务实例数
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
    * @param int|null $count **参数解释：** 服务实例数
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets highAvailSwitch
    *  **参数解释：** 高可用开关，开启后不同实例的pod将尽量均匀分布到不同的节点上。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** true
    *
    * @return string|null
    */
    public function getHighAvailSwitch()
    {
        return $this->container['highAvailSwitch'];
    }

    /**
    * Sets highAvailSwitch
    *
    * @param string|null $highAvailSwitch **参数解释：** 高可用开关，开启后不同实例的pod将尽量均匀分布到不同的节点上。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** true
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
    * @return string|null
    */
    public function getSystemLogDumpEnable()
    {
        return $this->container['systemLogDumpEnable'];
    }

    /**
    * Sets systemLogDumpEnable
    *
    * @param string|null $systemLogDumpEnable **参数解释：** 系统日志转储开关。 **约束限制：** 只有NPU资源池有，且逻辑池是没有的 **取值范围：** 不涉及 **默认取值：** false
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
    * Gets version
    *  **参数解释：** 当前服务版本信息。
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
    * @param string|null $version **参数解释：** 当前服务版本信息。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
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
    * Gets jobId
    *  **参数解释：** 巫山工作流ID。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId **参数解释：** 巫山工作流ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
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

