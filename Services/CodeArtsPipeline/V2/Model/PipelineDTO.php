<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PipelineDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PipelineDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**： 流水线名称。 **约束限制**： 不涉及。 **取值范围**： 仅包含中文、大小写英文字母、数字、'-'和'_'，且长度为[1,128]个字符。 **默认取值**： 不涉及。
    * description  **参数解释**： 流水线描述。 **约束限制**： 不涉及。 **取值范围**： 不超过1024字符。 **默认取值**： 不涉及。
    * isPublish  **参数解释**： 是否为变更流水线。 **约束限制**： 不涉及。 **取值范围**： - true：变更流水线。 - false：非变更流水线。 **默认取值**： 不涉及。
    * sources  **参数解释**： 流水线源信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * variables  **参数解释**： 流水线自定义全局变量列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * schedules  **参数解释**： 流水线定时执行配置列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * triggers  **参数解释**： 流水线代码事件触发配置。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * manifestVersion  **参数解释**： 流水线结构定义版本。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 3.0。
    * definition  **参数解释**： 流水线结构定义JSON。该字段结构复杂，建议使用页面编辑流水线后，从[查询流水线详情](ShowPipelineDetail.xml)接口获取。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * projectName  **参数解释**： 项目名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * groupId  **参数解释**： 流水线组ID。 **约束限制**： 不涉及。 **取值范围**： 32位字符，仅由数字和字母组成。 **默认取值**： 不涉及。
    * id  **参数解释**： 复制场景使用，为原流水线ID。 **约束限制**： 不涉及。 **取值范围**： 32位字符，仅由数字和字母组成。 **默认取值**： 不涉及。
    * concurrencyControl  concurrencyControl
    * securityLevel  **参数解释**： 流水线涉密等级。 **约束限制**： 非涉密场景不涉及，涉密场景必填。 **取值范围**： 正整数（1为最低密级）。 **默认取值**： 不涉及。
    * disableReleaseBranchManagement  **参数解释**： 是否禁用自动生成阶段，仅变更流水线适用。默认值为false，即默认启用自动生成阶段。 **约束限制**： 不涉及。 **取值范围**： - true：禁用自动生成阶段。 - false：启用自动生成阶段。 **默认取值**： false。
    * executionPlans  **参数解释**： 流水线执行计划列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * projectId  **参数解释**： 项目ID。 **约束限制**： 不涉及。 **取值范围**： 32位字符，仅由数字和字母组成。 **默认取值**： 不涉及。
    * cancelStrategy  **参数解释**： 流水线取消运行策略。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * confidentialityCode  **参数解释**： 流水线密级code。 **约束限制**： 非涉密场景不涉及，涉密场景必填。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * agencyName  **参数解释**： 委托名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * variableGroupIds  **参数解释**： 关联的通用参数组ID列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'isPublish' => 'bool',
            'sources' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CodeSource[]',
            'variables' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CustomVariable[]',
            'schedules' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineSchedule[]',
            'triggers' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineTrigger[]',
            'manifestVersion' => 'string',
            'definition' => 'string',
            'projectName' => 'string',
            'groupId' => 'string',
            'id' => 'string',
            'concurrencyControl' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineConcurrencyMgmt',
            'securityLevel' => 'int',
            'disableReleaseBranchManagement' => 'bool',
            'executionPlans' => 'object[]',
            'projectId' => 'string',
            'cancelStrategy' => 'object',
            'confidentialityCode' => 'string',
            'agencyName' => 'string',
            'variableGroupIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**： 流水线名称。 **约束限制**： 不涉及。 **取值范围**： 仅包含中文、大小写英文字母、数字、'-'和'_'，且长度为[1,128]个字符。 **默认取值**： 不涉及。
    * description  **参数解释**： 流水线描述。 **约束限制**： 不涉及。 **取值范围**： 不超过1024字符。 **默认取值**： 不涉及。
    * isPublish  **参数解释**： 是否为变更流水线。 **约束限制**： 不涉及。 **取值范围**： - true：变更流水线。 - false：非变更流水线。 **默认取值**： 不涉及。
    * sources  **参数解释**： 流水线源信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * variables  **参数解释**： 流水线自定义全局变量列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * schedules  **参数解释**： 流水线定时执行配置列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * triggers  **参数解释**： 流水线代码事件触发配置。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * manifestVersion  **参数解释**： 流水线结构定义版本。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 3.0。
    * definition  **参数解释**： 流水线结构定义JSON。该字段结构复杂，建议使用页面编辑流水线后，从[查询流水线详情](ShowPipelineDetail.xml)接口获取。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * projectName  **参数解释**： 项目名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * groupId  **参数解释**： 流水线组ID。 **约束限制**： 不涉及。 **取值范围**： 32位字符，仅由数字和字母组成。 **默认取值**： 不涉及。
    * id  **参数解释**： 复制场景使用，为原流水线ID。 **约束限制**： 不涉及。 **取值范围**： 32位字符，仅由数字和字母组成。 **默认取值**： 不涉及。
    * concurrencyControl  concurrencyControl
    * securityLevel  **参数解释**： 流水线涉密等级。 **约束限制**： 非涉密场景不涉及，涉密场景必填。 **取值范围**： 正整数（1为最低密级）。 **默认取值**： 不涉及。
    * disableReleaseBranchManagement  **参数解释**： 是否禁用自动生成阶段，仅变更流水线适用。默认值为false，即默认启用自动生成阶段。 **约束限制**： 不涉及。 **取值范围**： - true：禁用自动生成阶段。 - false：启用自动生成阶段。 **默认取值**： false。
    * executionPlans  **参数解释**： 流水线执行计划列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * projectId  **参数解释**： 项目ID。 **约束限制**： 不涉及。 **取值范围**： 32位字符，仅由数字和字母组成。 **默认取值**： 不涉及。
    * cancelStrategy  **参数解释**： 流水线取消运行策略。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * confidentialityCode  **参数解释**： 流水线密级code。 **约束限制**： 非涉密场景不涉及，涉密场景必填。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * agencyName  **参数解释**： 委托名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * variableGroupIds  **参数解释**： 关联的通用参数组ID列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'isPublish' => null,
        'sources' => null,
        'variables' => null,
        'schedules' => null,
        'triggers' => null,
        'manifestVersion' => null,
        'definition' => null,
        'projectName' => null,
        'groupId' => null,
        'id' => null,
        'concurrencyControl' => null,
        'securityLevel' => null,
        'disableReleaseBranchManagement' => null,
        'executionPlans' => null,
        'projectId' => null,
        'cancelStrategy' => null,
        'confidentialityCode' => null,
        'agencyName' => null,
        'variableGroupIds' => null
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
    * name  **参数解释**： 流水线名称。 **约束限制**： 不涉及。 **取值范围**： 仅包含中文、大小写英文字母、数字、'-'和'_'，且长度为[1,128]个字符。 **默认取值**： 不涉及。
    * description  **参数解释**： 流水线描述。 **约束限制**： 不涉及。 **取值范围**： 不超过1024字符。 **默认取值**： 不涉及。
    * isPublish  **参数解释**： 是否为变更流水线。 **约束限制**： 不涉及。 **取值范围**： - true：变更流水线。 - false：非变更流水线。 **默认取值**： 不涉及。
    * sources  **参数解释**： 流水线源信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * variables  **参数解释**： 流水线自定义全局变量列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * schedules  **参数解释**： 流水线定时执行配置列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * triggers  **参数解释**： 流水线代码事件触发配置。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * manifestVersion  **参数解释**： 流水线结构定义版本。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 3.0。
    * definition  **参数解释**： 流水线结构定义JSON。该字段结构复杂，建议使用页面编辑流水线后，从[查询流水线详情](ShowPipelineDetail.xml)接口获取。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * projectName  **参数解释**： 项目名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * groupId  **参数解释**： 流水线组ID。 **约束限制**： 不涉及。 **取值范围**： 32位字符，仅由数字和字母组成。 **默认取值**： 不涉及。
    * id  **参数解释**： 复制场景使用，为原流水线ID。 **约束限制**： 不涉及。 **取值范围**： 32位字符，仅由数字和字母组成。 **默认取值**： 不涉及。
    * concurrencyControl  concurrencyControl
    * securityLevel  **参数解释**： 流水线涉密等级。 **约束限制**： 非涉密场景不涉及，涉密场景必填。 **取值范围**： 正整数（1为最低密级）。 **默认取值**： 不涉及。
    * disableReleaseBranchManagement  **参数解释**： 是否禁用自动生成阶段，仅变更流水线适用。默认值为false，即默认启用自动生成阶段。 **约束限制**： 不涉及。 **取值范围**： - true：禁用自动生成阶段。 - false：启用自动生成阶段。 **默认取值**： false。
    * executionPlans  **参数解释**： 流水线执行计划列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * projectId  **参数解释**： 项目ID。 **约束限制**： 不涉及。 **取值范围**： 32位字符，仅由数字和字母组成。 **默认取值**： 不涉及。
    * cancelStrategy  **参数解释**： 流水线取消运行策略。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * confidentialityCode  **参数解释**： 流水线密级code。 **约束限制**： 非涉密场景不涉及，涉密场景必填。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * agencyName  **参数解释**： 委托名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * variableGroupIds  **参数解释**： 关联的通用参数组ID列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'isPublish' => 'is_publish',
            'sources' => 'sources',
            'variables' => 'variables',
            'schedules' => 'schedules',
            'triggers' => 'triggers',
            'manifestVersion' => 'manifest_version',
            'definition' => 'definition',
            'projectName' => 'project_name',
            'groupId' => 'group_id',
            'id' => 'id',
            'concurrencyControl' => 'concurrency_control',
            'securityLevel' => 'security_level',
            'disableReleaseBranchManagement' => 'disable_release_branch_management',
            'executionPlans' => 'execution_plans',
            'projectId' => 'project_id',
            'cancelStrategy' => 'cancel_strategy',
            'confidentialityCode' => 'confidentiality_code',
            'agencyName' => 'agency_name',
            'variableGroupIds' => 'variable_group_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**： 流水线名称。 **约束限制**： 不涉及。 **取值范围**： 仅包含中文、大小写英文字母、数字、'-'和'_'，且长度为[1,128]个字符。 **默认取值**： 不涉及。
    * description  **参数解释**： 流水线描述。 **约束限制**： 不涉及。 **取值范围**： 不超过1024字符。 **默认取值**： 不涉及。
    * isPublish  **参数解释**： 是否为变更流水线。 **约束限制**： 不涉及。 **取值范围**： - true：变更流水线。 - false：非变更流水线。 **默认取值**： 不涉及。
    * sources  **参数解释**： 流水线源信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * variables  **参数解释**： 流水线自定义全局变量列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * schedules  **参数解释**： 流水线定时执行配置列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * triggers  **参数解释**： 流水线代码事件触发配置。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * manifestVersion  **参数解释**： 流水线结构定义版本。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 3.0。
    * definition  **参数解释**： 流水线结构定义JSON。该字段结构复杂，建议使用页面编辑流水线后，从[查询流水线详情](ShowPipelineDetail.xml)接口获取。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * projectName  **参数解释**： 项目名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * groupId  **参数解释**： 流水线组ID。 **约束限制**： 不涉及。 **取值范围**： 32位字符，仅由数字和字母组成。 **默认取值**： 不涉及。
    * id  **参数解释**： 复制场景使用，为原流水线ID。 **约束限制**： 不涉及。 **取值范围**： 32位字符，仅由数字和字母组成。 **默认取值**： 不涉及。
    * concurrencyControl  concurrencyControl
    * securityLevel  **参数解释**： 流水线涉密等级。 **约束限制**： 非涉密场景不涉及，涉密场景必填。 **取值范围**： 正整数（1为最低密级）。 **默认取值**： 不涉及。
    * disableReleaseBranchManagement  **参数解释**： 是否禁用自动生成阶段，仅变更流水线适用。默认值为false，即默认启用自动生成阶段。 **约束限制**： 不涉及。 **取值范围**： - true：禁用自动生成阶段。 - false：启用自动生成阶段。 **默认取值**： false。
    * executionPlans  **参数解释**： 流水线执行计划列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * projectId  **参数解释**： 项目ID。 **约束限制**： 不涉及。 **取值范围**： 32位字符，仅由数字和字母组成。 **默认取值**： 不涉及。
    * cancelStrategy  **参数解释**： 流水线取消运行策略。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * confidentialityCode  **参数解释**： 流水线密级code。 **约束限制**： 非涉密场景不涉及，涉密场景必填。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * agencyName  **参数解释**： 委托名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * variableGroupIds  **参数解释**： 关联的通用参数组ID列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'isPublish' => 'setIsPublish',
            'sources' => 'setSources',
            'variables' => 'setVariables',
            'schedules' => 'setSchedules',
            'triggers' => 'setTriggers',
            'manifestVersion' => 'setManifestVersion',
            'definition' => 'setDefinition',
            'projectName' => 'setProjectName',
            'groupId' => 'setGroupId',
            'id' => 'setId',
            'concurrencyControl' => 'setConcurrencyControl',
            'securityLevel' => 'setSecurityLevel',
            'disableReleaseBranchManagement' => 'setDisableReleaseBranchManagement',
            'executionPlans' => 'setExecutionPlans',
            'projectId' => 'setProjectId',
            'cancelStrategy' => 'setCancelStrategy',
            'confidentialityCode' => 'setConfidentialityCode',
            'agencyName' => 'setAgencyName',
            'variableGroupIds' => 'setVariableGroupIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**： 流水线名称。 **约束限制**： 不涉及。 **取值范围**： 仅包含中文、大小写英文字母、数字、'-'和'_'，且长度为[1,128]个字符。 **默认取值**： 不涉及。
    * description  **参数解释**： 流水线描述。 **约束限制**： 不涉及。 **取值范围**： 不超过1024字符。 **默认取值**： 不涉及。
    * isPublish  **参数解释**： 是否为变更流水线。 **约束限制**： 不涉及。 **取值范围**： - true：变更流水线。 - false：非变更流水线。 **默认取值**： 不涉及。
    * sources  **参数解释**： 流水线源信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * variables  **参数解释**： 流水线自定义全局变量列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * schedules  **参数解释**： 流水线定时执行配置列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * triggers  **参数解释**： 流水线代码事件触发配置。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * manifestVersion  **参数解释**： 流水线结构定义版本。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 3.0。
    * definition  **参数解释**： 流水线结构定义JSON。该字段结构复杂，建议使用页面编辑流水线后，从[查询流水线详情](ShowPipelineDetail.xml)接口获取。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * projectName  **参数解释**： 项目名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * groupId  **参数解释**： 流水线组ID。 **约束限制**： 不涉及。 **取值范围**： 32位字符，仅由数字和字母组成。 **默认取值**： 不涉及。
    * id  **参数解释**： 复制场景使用，为原流水线ID。 **约束限制**： 不涉及。 **取值范围**： 32位字符，仅由数字和字母组成。 **默认取值**： 不涉及。
    * concurrencyControl  concurrencyControl
    * securityLevel  **参数解释**： 流水线涉密等级。 **约束限制**： 非涉密场景不涉及，涉密场景必填。 **取值范围**： 正整数（1为最低密级）。 **默认取值**： 不涉及。
    * disableReleaseBranchManagement  **参数解释**： 是否禁用自动生成阶段，仅变更流水线适用。默认值为false，即默认启用自动生成阶段。 **约束限制**： 不涉及。 **取值范围**： - true：禁用自动生成阶段。 - false：启用自动生成阶段。 **默认取值**： false。
    * executionPlans  **参数解释**： 流水线执行计划列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * projectId  **参数解释**： 项目ID。 **约束限制**： 不涉及。 **取值范围**： 32位字符，仅由数字和字母组成。 **默认取值**： 不涉及。
    * cancelStrategy  **参数解释**： 流水线取消运行策略。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * confidentialityCode  **参数解释**： 流水线密级code。 **约束限制**： 非涉密场景不涉及，涉密场景必填。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * agencyName  **参数解释**： 委托名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * variableGroupIds  **参数解释**： 关联的通用参数组ID列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'isPublish' => 'getIsPublish',
            'sources' => 'getSources',
            'variables' => 'getVariables',
            'schedules' => 'getSchedules',
            'triggers' => 'getTriggers',
            'manifestVersion' => 'getManifestVersion',
            'definition' => 'getDefinition',
            'projectName' => 'getProjectName',
            'groupId' => 'getGroupId',
            'id' => 'getId',
            'concurrencyControl' => 'getConcurrencyControl',
            'securityLevel' => 'getSecurityLevel',
            'disableReleaseBranchManagement' => 'getDisableReleaseBranchManagement',
            'executionPlans' => 'getExecutionPlans',
            'projectId' => 'getProjectId',
            'cancelStrategy' => 'getCancelStrategy',
            'confidentialityCode' => 'getConfidentialityCode',
            'agencyName' => 'getAgencyName',
            'variableGroupIds' => 'getVariableGroupIds'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['isPublish'] = isset($data['isPublish']) ? $data['isPublish'] : null;
        $this->container['sources'] = isset($data['sources']) ? $data['sources'] : null;
        $this->container['variables'] = isset($data['variables']) ? $data['variables'] : null;
        $this->container['schedules'] = isset($data['schedules']) ? $data['schedules'] : null;
        $this->container['triggers'] = isset($data['triggers']) ? $data['triggers'] : null;
        $this->container['manifestVersion'] = isset($data['manifestVersion']) ? $data['manifestVersion'] : null;
        $this->container['definition'] = isset($data['definition']) ? $data['definition'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['concurrencyControl'] = isset($data['concurrencyControl']) ? $data['concurrencyControl'] : null;
        $this->container['securityLevel'] = isset($data['securityLevel']) ? $data['securityLevel'] : null;
        $this->container['disableReleaseBranchManagement'] = isset($data['disableReleaseBranchManagement']) ? $data['disableReleaseBranchManagement'] : null;
        $this->container['executionPlans'] = isset($data['executionPlans']) ? $data['executionPlans'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['cancelStrategy'] = isset($data['cancelStrategy']) ? $data['cancelStrategy'] : null;
        $this->container['confidentialityCode'] = isset($data['confidentialityCode']) ? $data['confidentialityCode'] : null;
        $this->container['agencyName'] = isset($data['agencyName']) ? $data['agencyName'] : null;
        $this->container['variableGroupIds'] = isset($data['variableGroupIds']) ? $data['variableGroupIds'] : null;
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
        if ($this->container['isPublish'] === null) {
            $invalidProperties[] = "'isPublish' can't be null";
        }
        if ($this->container['definition'] === null) {
            $invalidProperties[] = "'definition' can't be null";
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
    *  **参数解释**： 流水线名称。 **约束限制**： 不涉及。 **取值范围**： 仅包含中文、大小写英文字母、数字、'-'和'_'，且长度为[1,128]个字符。 **默认取值**： 不涉及。
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
    * @param string $name **参数解释**： 流水线名称。 **约束限制**： 不涉及。 **取值范围**： 仅包含中文、大小写英文字母、数字、'-'和'_'，且长度为[1,128]个字符。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**： 流水线描述。 **约束限制**： 不涉及。 **取值范围**： 不超过1024字符。 **默认取值**： 不涉及。
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
    * @param string|null $description **参数解释**： 流水线描述。 **约束限制**： 不涉及。 **取值范围**： 不超过1024字符。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets isPublish
    *  **参数解释**： 是否为变更流水线。 **约束限制**： 不涉及。 **取值范围**： - true：变更流水线。 - false：非变更流水线。 **默认取值**： 不涉及。
    *
    * @return bool
    */
    public function getIsPublish()
    {
        return $this->container['isPublish'];
    }

    /**
    * Sets isPublish
    *
    * @param bool $isPublish **参数解释**： 是否为变更流水线。 **约束限制**： 不涉及。 **取值范围**： - true：变更流水线。 - false：非变更流水线。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setIsPublish($isPublish)
    {
        $this->container['isPublish'] = $isPublish;
        return $this;
    }

    /**
    * Gets sources
    *  **参数解释**： 流水线源信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CodeSource[]|null
    */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
    * Sets sources
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CodeSource[]|null $sources **参数解释**： 流水线源信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setSources($sources)
    {
        $this->container['sources'] = $sources;
        return $this;
    }

    /**
    * Gets variables
    *  **参数解释**： 流水线自定义全局变量列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CustomVariable[]|null
    */
    public function getVariables()
    {
        return $this->container['variables'];
    }

    /**
    * Sets variables
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CustomVariable[]|null $variables **参数解释**： 流水线自定义全局变量列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setVariables($variables)
    {
        $this->container['variables'] = $variables;
        return $this;
    }

    /**
    * Gets schedules
    *  **参数解释**： 流水线定时执行配置列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineSchedule[]|null
    */
    public function getSchedules()
    {
        return $this->container['schedules'];
    }

    /**
    * Sets schedules
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineSchedule[]|null $schedules **参数解释**： 流水线定时执行配置列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setSchedules($schedules)
    {
        $this->container['schedules'] = $schedules;
        return $this;
    }

    /**
    * Gets triggers
    *  **参数解释**： 流水线代码事件触发配置。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineTrigger[]|null
    */
    public function getTriggers()
    {
        return $this->container['triggers'];
    }

    /**
    * Sets triggers
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineTrigger[]|null $triggers **参数解释**： 流水线代码事件触发配置。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setTriggers($triggers)
    {
        $this->container['triggers'] = $triggers;
        return $this;
    }

    /**
    * Gets manifestVersion
    *  **参数解释**： 流水线结构定义版本。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 3.0。
    *
    * @return string|null
    */
    public function getManifestVersion()
    {
        return $this->container['manifestVersion'];
    }

    /**
    * Sets manifestVersion
    *
    * @param string|null $manifestVersion **参数解释**： 流水线结构定义版本。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 3.0。
    *
    * @return $this
    */
    public function setManifestVersion($manifestVersion)
    {
        $this->container['manifestVersion'] = $manifestVersion;
        return $this;
    }

    /**
    * Gets definition
    *  **参数解释**： 流水线结构定义JSON。该字段结构复杂，建议使用页面编辑流水线后，从[查询流水线详情](ShowPipelineDetail.xml)接口获取。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getDefinition()
    {
        return $this->container['definition'];
    }

    /**
    * Sets definition
    *
    * @param string $definition **参数解释**： 流水线结构定义JSON。该字段结构复杂，建议使用页面编辑流水线后，从[查询流水线详情](ShowPipelineDetail.xml)接口获取。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setDefinition($definition)
    {
        $this->container['definition'] = $definition;
        return $this;
    }

    /**
    * Gets projectName
    *  **参数解释**： 项目名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
    * Sets projectName
    *
    * @param string|null $projectName **参数解释**： 项目名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
        return $this;
    }

    /**
    * Gets groupId
    *  **参数解释**： 流水线组ID。 **约束限制**： 不涉及。 **取值范围**： 32位字符，仅由数字和字母组成。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId **参数解释**： 流水线组ID。 **约束限制**： 不涉及。 **取值范围**： 32位字符，仅由数字和字母组成。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**： 复制场景使用，为原流水线ID。 **约束限制**： 不涉及。 **取值范围**： 32位字符，仅由数字和字母组成。 **默认取值**： 不涉及。
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
    * @param string|null $id **参数解释**： 复制场景使用，为原流水线ID。 **约束限制**： 不涉及。 **取值范围**： 32位字符，仅由数字和字母组成。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets concurrencyControl
    *  concurrencyControl
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineConcurrencyMgmt|null
    */
    public function getConcurrencyControl()
    {
        return $this->container['concurrencyControl'];
    }

    /**
    * Sets concurrencyControl
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineConcurrencyMgmt|null $concurrencyControl concurrencyControl
    *
    * @return $this
    */
    public function setConcurrencyControl($concurrencyControl)
    {
        $this->container['concurrencyControl'] = $concurrencyControl;
        return $this;
    }

    /**
    * Gets securityLevel
    *  **参数解释**： 流水线涉密等级。 **约束限制**： 非涉密场景不涉及，涉密场景必填。 **取值范围**： 正整数（1为最低密级）。 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getSecurityLevel()
    {
        return $this->container['securityLevel'];
    }

    /**
    * Sets securityLevel
    *
    * @param int|null $securityLevel **参数解释**： 流水线涉密等级。 **约束限制**： 非涉密场景不涉及，涉密场景必填。 **取值范围**： 正整数（1为最低密级）。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setSecurityLevel($securityLevel)
    {
        $this->container['securityLevel'] = $securityLevel;
        return $this;
    }

    /**
    * Gets disableReleaseBranchManagement
    *  **参数解释**： 是否禁用自动生成阶段，仅变更流水线适用。默认值为false，即默认启用自动生成阶段。 **约束限制**： 不涉及。 **取值范围**： - true：禁用自动生成阶段。 - false：启用自动生成阶段。 **默认取值**： false。
    *
    * @return bool|null
    */
    public function getDisableReleaseBranchManagement()
    {
        return $this->container['disableReleaseBranchManagement'];
    }

    /**
    * Sets disableReleaseBranchManagement
    *
    * @param bool|null $disableReleaseBranchManagement **参数解释**： 是否禁用自动生成阶段，仅变更流水线适用。默认值为false，即默认启用自动生成阶段。 **约束限制**： 不涉及。 **取值范围**： - true：禁用自动生成阶段。 - false：启用自动生成阶段。 **默认取值**： false。
    *
    * @return $this
    */
    public function setDisableReleaseBranchManagement($disableReleaseBranchManagement)
    {
        $this->container['disableReleaseBranchManagement'] = $disableReleaseBranchManagement;
        return $this;
    }

    /**
    * Gets executionPlans
    *  **参数解释**： 流水线执行计划列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return object[]|null
    */
    public function getExecutionPlans()
    {
        return $this->container['executionPlans'];
    }

    /**
    * Sets executionPlans
    *
    * @param object[]|null $executionPlans **参数解释**： 流水线执行计划列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setExecutionPlans($executionPlans)
    {
        $this->container['executionPlans'] = $executionPlans;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释**： 项目ID。 **约束限制**： 不涉及。 **取值范围**： 32位字符，仅由数字和字母组成。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId **参数解释**： 项目ID。 **约束限制**： 不涉及。 **取值范围**： 32位字符，仅由数字和字母组成。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets cancelStrategy
    *  **参数解释**： 流水线取消运行策略。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return object|null
    */
    public function getCancelStrategy()
    {
        return $this->container['cancelStrategy'];
    }

    /**
    * Sets cancelStrategy
    *
    * @param object|null $cancelStrategy **参数解释**： 流水线取消运行策略。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setCancelStrategy($cancelStrategy)
    {
        $this->container['cancelStrategy'] = $cancelStrategy;
        return $this;
    }

    /**
    * Gets confidentialityCode
    *  **参数解释**： 流水线密级code。 **约束限制**： 非涉密场景不涉及，涉密场景必填。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getConfidentialityCode()
    {
        return $this->container['confidentialityCode'];
    }

    /**
    * Sets confidentialityCode
    *
    * @param string|null $confidentialityCode **参数解释**： 流水线密级code。 **约束限制**： 非涉密场景不涉及，涉密场景必填。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setConfidentialityCode($confidentialityCode)
    {
        $this->container['confidentialityCode'] = $confidentialityCode;
        return $this;
    }

    /**
    * Gets agencyName
    *  **参数解释**： 委托名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $agencyName **参数解释**： 委托名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setAgencyName($agencyName)
    {
        $this->container['agencyName'] = $agencyName;
        return $this;
    }

    /**
    * Gets variableGroupIds
    *  **参数解释**： 关联的通用参数组ID列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string[]|null
    */
    public function getVariableGroupIds()
    {
        return $this->container['variableGroupIds'];
    }

    /**
    * Sets variableGroupIds
    *
    * @param string[]|null $variableGroupIds **参数解释**： 关联的通用参数组ID列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setVariableGroupIds($variableGroupIds)
    {
        $this->container['variableGroupIds'] = $variableGroupIds;
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

