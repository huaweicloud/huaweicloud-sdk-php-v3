<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UnitConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UnitConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 实例单元ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * name  **参数解释：** 实例单元角色名称。 **约束限制：** 最大长度为16字符，且需满足正则：^\\[a-z0-9]([-a-z0-9]*[a-z0-9])?$ **默认取值：** 不涉及。
    * role  **参数解释：** 实例单元角色。 **约束限制：** 不涉及。 **取值范围：** - COMMON：表示其他角色。 **默认取值：** 不涉及。
    * customSpec  customSpec
    * flavor  **参数解释：** 资源规格，根据所提供版本选择适合业务的规格。当specification为custom为自定义规格。由custom_spec指定部署的规格配置。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * flavorDisplayName  **参数解释：** 资源规格的显示名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * image  image
    * models  **参数解释：** 废弃参数，推荐使用files进行模型相关配置。 模型相关配置，用户可以在此处选择模型及权重文件配合镜像使用。 **约束限制：** 不涉及。
    * codes  **参数解释：** 废弃参数，推荐使用files进行代码相关配置。 代码相关配置，用户可以在此处选择代码所在的obs路径等。 **约束限制：** 不涉及。
    * files  **参数解释：** 模型和代码相关配置，用户可以在此处选择模型及权重文件配合镜像使用以及代码所在的obs路径等。 **约束限制：** 不涉及。
    * dumps  **参数解释：** 用户转储配置，用户可以在此处选择要转储的目的obs。 **约束限制：** 最多配置20组。
    * count  **参数解释：** 配置实例个数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * cmd  **参数解释：** 启动命令。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * terminationGrace  terminationGrace
    * envs  **参数解释：** 环境变量。 **约束限制：** 变量键长度不大于64，由字母、数字、下划线、中划线、点组成，不能以数字开头。值的输入内容不能存在HTML标签，包括<^>。
    * readinessHealth  readinessHealth
    * startupHealth  startupHealth
    * livenessHealth  livenessHealth
    * port  **参数解释：** 端口。 **约束限制：** 不涉及。 **取值范围：** [1,65535]。 **默认取值：** 不涉及。
    * recovery  **参数解释：** 自动重建策略，开启后，由于部署配置变更或者故障等原因导致Pod重启时，平台将按策略自动执行重建。若不开启，平台将不会主动干预处理。 **约束限制：** 不涉及。 **取值范围：** - Instance：部署副本重建，故障时重新拉起整个部署。 - Role：单元重建，当部署单元内的Pod出现故障时，重启该单元内的所有Pod。 - Pod：Pod重建，故障时重新拉起故障pod。 **默认取值：** 不涉及。
    * npuResetEnable  **参数解释：** 是否开启恢复策略。 **约束限制：** 不涉及。 **取值范围：** - true：开启恢复策略。 - false：不开启恢复策略。 **默认取值：** 不涉及。
    * groupCount  **参数解释：** 单元副本数，当部署类型deploy_type为SINGLE或工作负载类型workload_type为DEPLOYMENT时，该参数无效。 **约束限制：** 不涉及。 **取值范围：** [1, 100] 或者为空。 **默认取值：** 默认值为1。
    * affinity  affinity
    * securityConfig  securityConfig
    * poolResourceFlavor  **参数解释：** 节点池资源规格。 **约束限制：** 只能包含字母、数字、点、中划线和下划线。 **取值范围：** 长度不超过128字符。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'role' => 'string',
            'customSpec' => '\HuaweiCloud\SDK\ModelArts\V1\Model\CustomResourceSpec',
            'flavor' => 'string',
            'flavorDisplayName' => 'string',
            'image' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ImageInfo',
            'models' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ModelResource[]',
            'codes' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Code[]',
            'files' => '\HuaweiCloud\SDK\ModelArts\V1\Model\FileInfo[]',
            'dumps' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Dump[]',
            'count' => 'int',
            'cmd' => 'string',
            'terminationGrace' => '\HuaweiCloud\SDK\ModelArts\V1\Model\TerminationGrace',
            'envs' => 'map[string,string]',
            'readinessHealth' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Health',
            'startupHealth' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Health',
            'livenessHealth' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Health',
            'port' => 'int',
            'recovery' => 'string',
            'npuResetEnable' => 'bool',
            'groupCount' => 'int',
            'affinity' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Affinity',
            'securityConfig' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ServiceSecurityConfig',
            'poolResourceFlavor' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 实例单元ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * name  **参数解释：** 实例单元角色名称。 **约束限制：** 最大长度为16字符，且需满足正则：^\\[a-z0-9]([-a-z0-9]*[a-z0-9])?$ **默认取值：** 不涉及。
    * role  **参数解释：** 实例单元角色。 **约束限制：** 不涉及。 **取值范围：** - COMMON：表示其他角色。 **默认取值：** 不涉及。
    * customSpec  customSpec
    * flavor  **参数解释：** 资源规格，根据所提供版本选择适合业务的规格。当specification为custom为自定义规格。由custom_spec指定部署的规格配置。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * flavorDisplayName  **参数解释：** 资源规格的显示名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * image  image
    * models  **参数解释：** 废弃参数，推荐使用files进行模型相关配置。 模型相关配置，用户可以在此处选择模型及权重文件配合镜像使用。 **约束限制：** 不涉及。
    * codes  **参数解释：** 废弃参数，推荐使用files进行代码相关配置。 代码相关配置，用户可以在此处选择代码所在的obs路径等。 **约束限制：** 不涉及。
    * files  **参数解释：** 模型和代码相关配置，用户可以在此处选择模型及权重文件配合镜像使用以及代码所在的obs路径等。 **约束限制：** 不涉及。
    * dumps  **参数解释：** 用户转储配置，用户可以在此处选择要转储的目的obs。 **约束限制：** 最多配置20组。
    * count  **参数解释：** 配置实例个数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * cmd  **参数解释：** 启动命令。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * terminationGrace  terminationGrace
    * envs  **参数解释：** 环境变量。 **约束限制：** 变量键长度不大于64，由字母、数字、下划线、中划线、点组成，不能以数字开头。值的输入内容不能存在HTML标签，包括<^>。
    * readinessHealth  readinessHealth
    * startupHealth  startupHealth
    * livenessHealth  livenessHealth
    * port  **参数解释：** 端口。 **约束限制：** 不涉及。 **取值范围：** [1,65535]。 **默认取值：** 不涉及。
    * recovery  **参数解释：** 自动重建策略，开启后，由于部署配置变更或者故障等原因导致Pod重启时，平台将按策略自动执行重建。若不开启，平台将不会主动干预处理。 **约束限制：** 不涉及。 **取值范围：** - Instance：部署副本重建，故障时重新拉起整个部署。 - Role：单元重建，当部署单元内的Pod出现故障时，重启该单元内的所有Pod。 - Pod：Pod重建，故障时重新拉起故障pod。 **默认取值：** 不涉及。
    * npuResetEnable  **参数解释：** 是否开启恢复策略。 **约束限制：** 不涉及。 **取值范围：** - true：开启恢复策略。 - false：不开启恢复策略。 **默认取值：** 不涉及。
    * groupCount  **参数解释：** 单元副本数，当部署类型deploy_type为SINGLE或工作负载类型workload_type为DEPLOYMENT时，该参数无效。 **约束限制：** 不涉及。 **取值范围：** [1, 100] 或者为空。 **默认取值：** 默认值为1。
    * affinity  affinity
    * securityConfig  securityConfig
    * poolResourceFlavor  **参数解释：** 节点池资源规格。 **约束限制：** 只能包含字母、数字、点、中划线和下划线。 **取值范围：** 长度不超过128字符。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'role' => null,
        'customSpec' => null,
        'flavor' => null,
        'flavorDisplayName' => null,
        'image' => null,
        'models' => null,
        'codes' => null,
        'files' => null,
        'dumps' => null,
        'count' => 'int32',
        'cmd' => null,
        'terminationGrace' => null,
        'envs' => null,
        'readinessHealth' => null,
        'startupHealth' => null,
        'livenessHealth' => null,
        'port' => 'int32',
        'recovery' => null,
        'npuResetEnable' => null,
        'groupCount' => 'int32',
        'affinity' => null,
        'securityConfig' => null,
        'poolResourceFlavor' => null
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
    * id  **参数解释：** 实例单元ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * name  **参数解释：** 实例单元角色名称。 **约束限制：** 最大长度为16字符，且需满足正则：^\\[a-z0-9]([-a-z0-9]*[a-z0-9])?$ **默认取值：** 不涉及。
    * role  **参数解释：** 实例单元角色。 **约束限制：** 不涉及。 **取值范围：** - COMMON：表示其他角色。 **默认取值：** 不涉及。
    * customSpec  customSpec
    * flavor  **参数解释：** 资源规格，根据所提供版本选择适合业务的规格。当specification为custom为自定义规格。由custom_spec指定部署的规格配置。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * flavorDisplayName  **参数解释：** 资源规格的显示名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * image  image
    * models  **参数解释：** 废弃参数，推荐使用files进行模型相关配置。 模型相关配置，用户可以在此处选择模型及权重文件配合镜像使用。 **约束限制：** 不涉及。
    * codes  **参数解释：** 废弃参数，推荐使用files进行代码相关配置。 代码相关配置，用户可以在此处选择代码所在的obs路径等。 **约束限制：** 不涉及。
    * files  **参数解释：** 模型和代码相关配置，用户可以在此处选择模型及权重文件配合镜像使用以及代码所在的obs路径等。 **约束限制：** 不涉及。
    * dumps  **参数解释：** 用户转储配置，用户可以在此处选择要转储的目的obs。 **约束限制：** 最多配置20组。
    * count  **参数解释：** 配置实例个数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * cmd  **参数解释：** 启动命令。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * terminationGrace  terminationGrace
    * envs  **参数解释：** 环境变量。 **约束限制：** 变量键长度不大于64，由字母、数字、下划线、中划线、点组成，不能以数字开头。值的输入内容不能存在HTML标签，包括<^>。
    * readinessHealth  readinessHealth
    * startupHealth  startupHealth
    * livenessHealth  livenessHealth
    * port  **参数解释：** 端口。 **约束限制：** 不涉及。 **取值范围：** [1,65535]。 **默认取值：** 不涉及。
    * recovery  **参数解释：** 自动重建策略，开启后，由于部署配置变更或者故障等原因导致Pod重启时，平台将按策略自动执行重建。若不开启，平台将不会主动干预处理。 **约束限制：** 不涉及。 **取值范围：** - Instance：部署副本重建，故障时重新拉起整个部署。 - Role：单元重建，当部署单元内的Pod出现故障时，重启该单元内的所有Pod。 - Pod：Pod重建，故障时重新拉起故障pod。 **默认取值：** 不涉及。
    * npuResetEnable  **参数解释：** 是否开启恢复策略。 **约束限制：** 不涉及。 **取值范围：** - true：开启恢复策略。 - false：不开启恢复策略。 **默认取值：** 不涉及。
    * groupCount  **参数解释：** 单元副本数，当部署类型deploy_type为SINGLE或工作负载类型workload_type为DEPLOYMENT时，该参数无效。 **约束限制：** 不涉及。 **取值范围：** [1, 100] 或者为空。 **默认取值：** 默认值为1。
    * affinity  affinity
    * securityConfig  securityConfig
    * poolResourceFlavor  **参数解释：** 节点池资源规格。 **约束限制：** 只能包含字母、数字、点、中划线和下划线。 **取值范围：** 长度不超过128字符。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'role' => 'role',
            'customSpec' => 'custom_spec',
            'flavor' => 'flavor',
            'flavorDisplayName' => 'flavor_display_name',
            'image' => 'image',
            'models' => 'models',
            'codes' => 'codes',
            'files' => 'files',
            'dumps' => 'dumps',
            'count' => 'count',
            'cmd' => 'cmd',
            'terminationGrace' => 'termination_grace',
            'envs' => 'envs',
            'readinessHealth' => 'readiness_health',
            'startupHealth' => 'startup_health',
            'livenessHealth' => 'liveness_health',
            'port' => 'port',
            'recovery' => 'recovery',
            'npuResetEnable' => 'npu_reset_enable',
            'groupCount' => 'group_count',
            'affinity' => 'affinity',
            'securityConfig' => 'security_config',
            'poolResourceFlavor' => 'pool_resource_flavor'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 实例单元ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * name  **参数解释：** 实例单元角色名称。 **约束限制：** 最大长度为16字符，且需满足正则：^\\[a-z0-9]([-a-z0-9]*[a-z0-9])?$ **默认取值：** 不涉及。
    * role  **参数解释：** 实例单元角色。 **约束限制：** 不涉及。 **取值范围：** - COMMON：表示其他角色。 **默认取值：** 不涉及。
    * customSpec  customSpec
    * flavor  **参数解释：** 资源规格，根据所提供版本选择适合业务的规格。当specification为custom为自定义规格。由custom_spec指定部署的规格配置。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * flavorDisplayName  **参数解释：** 资源规格的显示名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * image  image
    * models  **参数解释：** 废弃参数，推荐使用files进行模型相关配置。 模型相关配置，用户可以在此处选择模型及权重文件配合镜像使用。 **约束限制：** 不涉及。
    * codes  **参数解释：** 废弃参数，推荐使用files进行代码相关配置。 代码相关配置，用户可以在此处选择代码所在的obs路径等。 **约束限制：** 不涉及。
    * files  **参数解释：** 模型和代码相关配置，用户可以在此处选择模型及权重文件配合镜像使用以及代码所在的obs路径等。 **约束限制：** 不涉及。
    * dumps  **参数解释：** 用户转储配置，用户可以在此处选择要转储的目的obs。 **约束限制：** 最多配置20组。
    * count  **参数解释：** 配置实例个数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * cmd  **参数解释：** 启动命令。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * terminationGrace  terminationGrace
    * envs  **参数解释：** 环境变量。 **约束限制：** 变量键长度不大于64，由字母、数字、下划线、中划线、点组成，不能以数字开头。值的输入内容不能存在HTML标签，包括<^>。
    * readinessHealth  readinessHealth
    * startupHealth  startupHealth
    * livenessHealth  livenessHealth
    * port  **参数解释：** 端口。 **约束限制：** 不涉及。 **取值范围：** [1,65535]。 **默认取值：** 不涉及。
    * recovery  **参数解释：** 自动重建策略，开启后，由于部署配置变更或者故障等原因导致Pod重启时，平台将按策略自动执行重建。若不开启，平台将不会主动干预处理。 **约束限制：** 不涉及。 **取值范围：** - Instance：部署副本重建，故障时重新拉起整个部署。 - Role：单元重建，当部署单元内的Pod出现故障时，重启该单元内的所有Pod。 - Pod：Pod重建，故障时重新拉起故障pod。 **默认取值：** 不涉及。
    * npuResetEnable  **参数解释：** 是否开启恢复策略。 **约束限制：** 不涉及。 **取值范围：** - true：开启恢复策略。 - false：不开启恢复策略。 **默认取值：** 不涉及。
    * groupCount  **参数解释：** 单元副本数，当部署类型deploy_type为SINGLE或工作负载类型workload_type为DEPLOYMENT时，该参数无效。 **约束限制：** 不涉及。 **取值范围：** [1, 100] 或者为空。 **默认取值：** 默认值为1。
    * affinity  affinity
    * securityConfig  securityConfig
    * poolResourceFlavor  **参数解释：** 节点池资源规格。 **约束限制：** 只能包含字母、数字、点、中划线和下划线。 **取值范围：** 长度不超过128字符。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'role' => 'setRole',
            'customSpec' => 'setCustomSpec',
            'flavor' => 'setFlavor',
            'flavorDisplayName' => 'setFlavorDisplayName',
            'image' => 'setImage',
            'models' => 'setModels',
            'codes' => 'setCodes',
            'files' => 'setFiles',
            'dumps' => 'setDumps',
            'count' => 'setCount',
            'cmd' => 'setCmd',
            'terminationGrace' => 'setTerminationGrace',
            'envs' => 'setEnvs',
            'readinessHealth' => 'setReadinessHealth',
            'startupHealth' => 'setStartupHealth',
            'livenessHealth' => 'setLivenessHealth',
            'port' => 'setPort',
            'recovery' => 'setRecovery',
            'npuResetEnable' => 'setNpuResetEnable',
            'groupCount' => 'setGroupCount',
            'affinity' => 'setAffinity',
            'securityConfig' => 'setSecurityConfig',
            'poolResourceFlavor' => 'setPoolResourceFlavor'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 实例单元ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * name  **参数解释：** 实例单元角色名称。 **约束限制：** 最大长度为16字符，且需满足正则：^\\[a-z0-9]([-a-z0-9]*[a-z0-9])?$ **默认取值：** 不涉及。
    * role  **参数解释：** 实例单元角色。 **约束限制：** 不涉及。 **取值范围：** - COMMON：表示其他角色。 **默认取值：** 不涉及。
    * customSpec  customSpec
    * flavor  **参数解释：** 资源规格，根据所提供版本选择适合业务的规格。当specification为custom为自定义规格。由custom_spec指定部署的规格配置。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * flavorDisplayName  **参数解释：** 资源规格的显示名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * image  image
    * models  **参数解释：** 废弃参数，推荐使用files进行模型相关配置。 模型相关配置，用户可以在此处选择模型及权重文件配合镜像使用。 **约束限制：** 不涉及。
    * codes  **参数解释：** 废弃参数，推荐使用files进行代码相关配置。 代码相关配置，用户可以在此处选择代码所在的obs路径等。 **约束限制：** 不涉及。
    * files  **参数解释：** 模型和代码相关配置，用户可以在此处选择模型及权重文件配合镜像使用以及代码所在的obs路径等。 **约束限制：** 不涉及。
    * dumps  **参数解释：** 用户转储配置，用户可以在此处选择要转储的目的obs。 **约束限制：** 最多配置20组。
    * count  **参数解释：** 配置实例个数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * cmd  **参数解释：** 启动命令。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * terminationGrace  terminationGrace
    * envs  **参数解释：** 环境变量。 **约束限制：** 变量键长度不大于64，由字母、数字、下划线、中划线、点组成，不能以数字开头。值的输入内容不能存在HTML标签，包括<^>。
    * readinessHealth  readinessHealth
    * startupHealth  startupHealth
    * livenessHealth  livenessHealth
    * port  **参数解释：** 端口。 **约束限制：** 不涉及。 **取值范围：** [1,65535]。 **默认取值：** 不涉及。
    * recovery  **参数解释：** 自动重建策略，开启后，由于部署配置变更或者故障等原因导致Pod重启时，平台将按策略自动执行重建。若不开启，平台将不会主动干预处理。 **约束限制：** 不涉及。 **取值范围：** - Instance：部署副本重建，故障时重新拉起整个部署。 - Role：单元重建，当部署单元内的Pod出现故障时，重启该单元内的所有Pod。 - Pod：Pod重建，故障时重新拉起故障pod。 **默认取值：** 不涉及。
    * npuResetEnable  **参数解释：** 是否开启恢复策略。 **约束限制：** 不涉及。 **取值范围：** - true：开启恢复策略。 - false：不开启恢复策略。 **默认取值：** 不涉及。
    * groupCount  **参数解释：** 单元副本数，当部署类型deploy_type为SINGLE或工作负载类型workload_type为DEPLOYMENT时，该参数无效。 **约束限制：** 不涉及。 **取值范围：** [1, 100] 或者为空。 **默认取值：** 默认值为1。
    * affinity  affinity
    * securityConfig  securityConfig
    * poolResourceFlavor  **参数解释：** 节点池资源规格。 **约束限制：** 只能包含字母、数字、点、中划线和下划线。 **取值范围：** 长度不超过128字符。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'role' => 'getRole',
            'customSpec' => 'getCustomSpec',
            'flavor' => 'getFlavor',
            'flavorDisplayName' => 'getFlavorDisplayName',
            'image' => 'getImage',
            'models' => 'getModels',
            'codes' => 'getCodes',
            'files' => 'getFiles',
            'dumps' => 'getDumps',
            'count' => 'getCount',
            'cmd' => 'getCmd',
            'terminationGrace' => 'getTerminationGrace',
            'envs' => 'getEnvs',
            'readinessHealth' => 'getReadinessHealth',
            'startupHealth' => 'getStartupHealth',
            'livenessHealth' => 'getLivenessHealth',
            'port' => 'getPort',
            'recovery' => 'getRecovery',
            'npuResetEnable' => 'getNpuResetEnable',
            'groupCount' => 'getGroupCount',
            'affinity' => 'getAffinity',
            'securityConfig' => 'getSecurityConfig',
            'poolResourceFlavor' => 'getPoolResourceFlavor'
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
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['customSpec'] = isset($data['customSpec']) ? $data['customSpec'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['flavorDisplayName'] = isset($data['flavorDisplayName']) ? $data['flavorDisplayName'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['models'] = isset($data['models']) ? $data['models'] : null;
        $this->container['codes'] = isset($data['codes']) ? $data['codes'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
        $this->container['dumps'] = isset($data['dumps']) ? $data['dumps'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['cmd'] = isset($data['cmd']) ? $data['cmd'] : null;
        $this->container['terminationGrace'] = isset($data['terminationGrace']) ? $data['terminationGrace'] : null;
        $this->container['envs'] = isset($data['envs']) ? $data['envs'] : null;
        $this->container['readinessHealth'] = isset($data['readinessHealth']) ? $data['readinessHealth'] : null;
        $this->container['startupHealth'] = isset($data['startupHealth']) ? $data['startupHealth'] : null;
        $this->container['livenessHealth'] = isset($data['livenessHealth']) ? $data['livenessHealth'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['recovery'] = isset($data['recovery']) ? $data['recovery'] : null;
        $this->container['npuResetEnable'] = isset($data['npuResetEnable']) ? $data['npuResetEnable'] : null;
        $this->container['groupCount'] = isset($data['groupCount']) ? $data['groupCount'] : null;
        $this->container['affinity'] = isset($data['affinity']) ? $data['affinity'] : null;
        $this->container['securityConfig'] = isset($data['securityConfig']) ? $data['securityConfig'] : null;
        $this->container['poolResourceFlavor'] = isset($data['poolResourceFlavor']) ? $data['poolResourceFlavor'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['image'] === null) {
            $invalidProperties[] = "'image' can't be null";
        }
            if (!is_null($this->container['poolResourceFlavor']) && (mb_strlen($this->container['poolResourceFlavor']) > 128)) {
                $invalidProperties[] = "invalid value for 'poolResourceFlavor', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['poolResourceFlavor']) && !preg_match("/^[a-zA-Z0-9._-]+$/", $this->container['poolResourceFlavor'])) {
                $invalidProperties[] = "invalid value for 'poolResourceFlavor', must be conform to the pattern /^[a-zA-Z0-9._-]+$/.";
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
    *  **参数解释：** 实例单元ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string|null $id **参数解释：** 实例单元ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    *  **参数解释：** 实例单元角色名称。 **约束限制：** 最大长度为16字符，且需满足正则：^\\[a-z0-9]([-a-z0-9]*[a-z0-9])?$ **默认取值：** 不涉及。
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
    * @param string|null $name **参数解释：** 实例单元角色名称。 **约束限制：** 最大长度为16字符，且需满足正则：^\\[a-z0-9]([-a-z0-9]*[a-z0-9])?$ **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets role
    *  **参数解释：** 实例单元角色。 **约束限制：** 不涉及。 **取值范围：** - COMMON：表示其他角色。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
    * Sets role
    *
    * @param string|null $role **参数解释：** 实例单元角色。 **约束限制：** 不涉及。 **取值范围：** - COMMON：表示其他角色。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setRole($role)
    {
        $this->container['role'] = $role;
        return $this;
    }

    /**
    * Gets customSpec
    *  customSpec
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\CustomResourceSpec|null
    */
    public function getCustomSpec()
    {
        return $this->container['customSpec'];
    }

    /**
    * Sets customSpec
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\CustomResourceSpec|null $customSpec customSpec
    *
    * @return $this
    */
    public function setCustomSpec($customSpec)
    {
        $this->container['customSpec'] = $customSpec;
        return $this;
    }

    /**
    * Gets flavor
    *  **参数解释：** 资源规格，根据所提供版本选择适合业务的规格。当specification为custom为自定义规格。由custom_spec指定部署的规格配置。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param string|null $flavor **参数解释：** 资源规格，根据所提供版本选择适合业务的规格。当specification为custom为自定义规格。由custom_spec指定部署的规格配置。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets flavorDisplayName
    *  **参数解释：** 资源规格的显示名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getFlavorDisplayName()
    {
        return $this->container['flavorDisplayName'];
    }

    /**
    * Sets flavorDisplayName
    *
    * @param string|null $flavorDisplayName **参数解释：** 资源规格的显示名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setFlavorDisplayName($flavorDisplayName)
    {
        $this->container['flavorDisplayName'] = $flavorDisplayName;
        return $this;
    }

    /**
    * Gets image
    *  image
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ImageInfo
    */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
    * Sets image
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ImageInfo $image image
    *
    * @return $this
    */
    public function setImage($image)
    {
        $this->container['image'] = $image;
        return $this;
    }

    /**
    * Gets models
    *  **参数解释：** 废弃参数，推荐使用files进行模型相关配置。 模型相关配置，用户可以在此处选择模型及权重文件配合镜像使用。 **约束限制：** 不涉及。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ModelResource[]|null
    */
    public function getModels()
    {
        return $this->container['models'];
    }

    /**
    * Sets models
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ModelResource[]|null $models **参数解释：** 废弃参数，推荐使用files进行模型相关配置。 模型相关配置，用户可以在此处选择模型及权重文件配合镜像使用。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setModels($models)
    {
        $this->container['models'] = $models;
        return $this;
    }

    /**
    * Gets codes
    *  **参数解释：** 废弃参数，推荐使用files进行代码相关配置。 代码相关配置，用户可以在此处选择代码所在的obs路径等。 **约束限制：** 不涉及。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Code[]|null
    */
    public function getCodes()
    {
        return $this->container['codes'];
    }

    /**
    * Sets codes
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Code[]|null $codes **参数解释：** 废弃参数，推荐使用files进行代码相关配置。 代码相关配置，用户可以在此处选择代码所在的obs路径等。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setCodes($codes)
    {
        $this->container['codes'] = $codes;
        return $this;
    }

    /**
    * Gets files
    *  **参数解释：** 模型和代码相关配置，用户可以在此处选择模型及权重文件配合镜像使用以及代码所在的obs路径等。 **约束限制：** 不涉及。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\FileInfo[]|null
    */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
    * Sets files
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\FileInfo[]|null $files **参数解释：** 模型和代码相关配置，用户可以在此处选择模型及权重文件配合镜像使用以及代码所在的obs路径等。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setFiles($files)
    {
        $this->container['files'] = $files;
        return $this;
    }

    /**
    * Gets dumps
    *  **参数解释：** 用户转储配置，用户可以在此处选择要转储的目的obs。 **约束限制：** 最多配置20组。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Dump[]|null
    */
    public function getDumps()
    {
        return $this->container['dumps'];
    }

    /**
    * Sets dumps
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Dump[]|null $dumps **参数解释：** 用户转储配置，用户可以在此处选择要转储的目的obs。 **约束限制：** 最多配置20组。
    *
    * @return $this
    */
    public function setDumps($dumps)
    {
        $this->container['dumps'] = $dumps;
        return $this;
    }

    /**
    * Gets count
    *  **参数解释：** 配置实例个数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param int|null $count **参数解释：** 配置实例个数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets cmd
    *  **参数解释：** 启动命令。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getCmd()
    {
        return $this->container['cmd'];
    }

    /**
    * Sets cmd
    *
    * @param string|null $cmd **参数解释：** 启动命令。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setCmd($cmd)
    {
        $this->container['cmd'] = $cmd;
        return $this;
    }

    /**
    * Gets terminationGrace
    *  terminationGrace
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\TerminationGrace|null
    */
    public function getTerminationGrace()
    {
        return $this->container['terminationGrace'];
    }

    /**
    * Sets terminationGrace
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\TerminationGrace|null $terminationGrace terminationGrace
    *
    * @return $this
    */
    public function setTerminationGrace($terminationGrace)
    {
        $this->container['terminationGrace'] = $terminationGrace;
        return $this;
    }

    /**
    * Gets envs
    *  **参数解释：** 环境变量。 **约束限制：** 变量键长度不大于64，由字母、数字、下划线、中划线、点组成，不能以数字开头。值的输入内容不能存在HTML标签，包括<^>。
    *
    * @return map[string,string]|null
    */
    public function getEnvs()
    {
        return $this->container['envs'];
    }

    /**
    * Sets envs
    *
    * @param map[string,string]|null $envs **参数解释：** 环境变量。 **约束限制：** 变量键长度不大于64，由字母、数字、下划线、中划线、点组成，不能以数字开头。值的输入内容不能存在HTML标签，包括<^>。
    *
    * @return $this
    */
    public function setEnvs($envs)
    {
        $this->container['envs'] = $envs;
        return $this;
    }

    /**
    * Gets readinessHealth
    *  readinessHealth
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Health|null
    */
    public function getReadinessHealth()
    {
        return $this->container['readinessHealth'];
    }

    /**
    * Sets readinessHealth
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Health|null $readinessHealth readinessHealth
    *
    * @return $this
    */
    public function setReadinessHealth($readinessHealth)
    {
        $this->container['readinessHealth'] = $readinessHealth;
        return $this;
    }

    /**
    * Gets startupHealth
    *  startupHealth
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Health|null
    */
    public function getStartupHealth()
    {
        return $this->container['startupHealth'];
    }

    /**
    * Sets startupHealth
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Health|null $startupHealth startupHealth
    *
    * @return $this
    */
    public function setStartupHealth($startupHealth)
    {
        $this->container['startupHealth'] = $startupHealth;
        return $this;
    }

    /**
    * Gets livenessHealth
    *  livenessHealth
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Health|null
    */
    public function getLivenessHealth()
    {
        return $this->container['livenessHealth'];
    }

    /**
    * Sets livenessHealth
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Health|null $livenessHealth livenessHealth
    *
    * @return $this
    */
    public function setLivenessHealth($livenessHealth)
    {
        $this->container['livenessHealth'] = $livenessHealth;
        return $this;
    }

    /**
    * Gets port
    *  **参数解释：** 端口。 **约束限制：** 不涉及。 **取值范围：** [1,65535]。 **默认取值：** 不涉及。
    *
    * @return int|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int|null $port **参数解释：** 端口。 **约束限制：** 不涉及。 **取值范围：** [1,65535]。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets recovery
    *  **参数解释：** 自动重建策略，开启后，由于部署配置变更或者故障等原因导致Pod重启时，平台将按策略自动执行重建。若不开启，平台将不会主动干预处理。 **约束限制：** 不涉及。 **取值范围：** - Instance：部署副本重建，故障时重新拉起整个部署。 - Role：单元重建，当部署单元内的Pod出现故障时，重启该单元内的所有Pod。 - Pod：Pod重建，故障时重新拉起故障pod。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getRecovery()
    {
        return $this->container['recovery'];
    }

    /**
    * Sets recovery
    *
    * @param string|null $recovery **参数解释：** 自动重建策略，开启后，由于部署配置变更或者故障等原因导致Pod重启时，平台将按策略自动执行重建。若不开启，平台将不会主动干预处理。 **约束限制：** 不涉及。 **取值范围：** - Instance：部署副本重建，故障时重新拉起整个部署。 - Role：单元重建，当部署单元内的Pod出现故障时，重启该单元内的所有Pod。 - Pod：Pod重建，故障时重新拉起故障pod。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setRecovery($recovery)
    {
        $this->container['recovery'] = $recovery;
        return $this;
    }

    /**
    * Gets npuResetEnable
    *  **参数解释：** 是否开启恢复策略。 **约束限制：** 不涉及。 **取值范围：** - true：开启恢复策略。 - false：不开启恢复策略。 **默认取值：** 不涉及。
    *
    * @return bool|null
    */
    public function getNpuResetEnable()
    {
        return $this->container['npuResetEnable'];
    }

    /**
    * Sets npuResetEnable
    *
    * @param bool|null $npuResetEnable **参数解释：** 是否开启恢复策略。 **约束限制：** 不涉及。 **取值范围：** - true：开启恢复策略。 - false：不开启恢复策略。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setNpuResetEnable($npuResetEnable)
    {
        $this->container['npuResetEnable'] = $npuResetEnable;
        return $this;
    }

    /**
    * Gets groupCount
    *  **参数解释：** 单元副本数，当部署类型deploy_type为SINGLE或工作负载类型workload_type为DEPLOYMENT时，该参数无效。 **约束限制：** 不涉及。 **取值范围：** [1, 100] 或者为空。 **默认取值：** 默认值为1。
    *
    * @return int|null
    */
    public function getGroupCount()
    {
        return $this->container['groupCount'];
    }

    /**
    * Sets groupCount
    *
    * @param int|null $groupCount **参数解释：** 单元副本数，当部署类型deploy_type为SINGLE或工作负载类型workload_type为DEPLOYMENT时，该参数无效。 **约束限制：** 不涉及。 **取值范围：** [1, 100] 或者为空。 **默认取值：** 默认值为1。
    *
    * @return $this
    */
    public function setGroupCount($groupCount)
    {
        $this->container['groupCount'] = $groupCount;
        return $this;
    }

    /**
    * Gets affinity
    *  affinity
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Affinity|null
    */
    public function getAffinity()
    {
        return $this->container['affinity'];
    }

    /**
    * Sets affinity
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Affinity|null $affinity affinity
    *
    * @return $this
    */
    public function setAffinity($affinity)
    {
        $this->container['affinity'] = $affinity;
        return $this;
    }

    /**
    * Gets securityConfig
    *  securityConfig
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ServiceSecurityConfig|null
    */
    public function getSecurityConfig()
    {
        return $this->container['securityConfig'];
    }

    /**
    * Sets securityConfig
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ServiceSecurityConfig|null $securityConfig securityConfig
    *
    * @return $this
    */
    public function setSecurityConfig($securityConfig)
    {
        $this->container['securityConfig'] = $securityConfig;
        return $this;
    }

    /**
    * Gets poolResourceFlavor
    *  **参数解释：** 节点池资源规格。 **约束限制：** 只能包含字母、数字、点、中划线和下划线。 **取值范围：** 长度不超过128字符。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getPoolResourceFlavor()
    {
        return $this->container['poolResourceFlavor'];
    }

    /**
    * Sets poolResourceFlavor
    *
    * @param string|null $poolResourceFlavor **参数解释：** 节点池资源规格。 **约束限制：** 只能包含字母、数字、点、中划线和下划线。 **取值范围：** 长度不超过128字符。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setPoolResourceFlavor($poolResourceFlavor)
    {
        $this->container['poolResourceFlavor'] = $poolResourceFlavor;
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

