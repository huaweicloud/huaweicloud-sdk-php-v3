<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowPipelineDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowPipelineDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 流水线ID，可以通过[查询流水线列表](ListPipelines.xml)接口，其中pipelines.pipelineId即为流水线ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * name  **参数解释**： 流水线名称。 **取值范围**： 仅包含中文、大小写英文字母、数字、'-'和'_'，且长度为[1,128]个字符。
    * description  **参数解释**： 对流水线的补充描述。 **取值范围**： 不超过1024字符。
    * manifestVersion  **参数解释**： 流水线版本，默认为3.0。 **取值范围**： 不涉及。
    * region  **参数解释**： 当前环境所属局点。 **取值范围**： 不涉及。
    * domainId  **参数解释**： 所属租户ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * projectId  **参数解释**： 项目ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * componentId  **参数解释**： 所属微服务ID。可以通过[查询微服务列表](ListMicroservice.xml)接口获取，其中data.id即为微服务ID。 **取值范围**： 不涉及。
    * isPublish  **参数解释**： 是否为变更流水线。 **取值范围**： - true：是变更流水线。 - false：不是变更流水线。
    * creatorId  **参数解释**： 流水线创建人ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * creatorName  **参数解释**： 流水线创建人名称。 **取值范围**： 不涉及。
    * updaterId  **参数解释**： 流水线上次更新人ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * createTime  **参数解释**： 流水线创建时间。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 流水线更新时间。 **取值范围**： 不涉及。
    * isCollect  **参数解释**： 流水线是否被当前用户收藏。 **取值范围**： - true：流水线已被收藏。 - false：流水线未被收藏。
    * sources  **参数解释**： 流水线源列表。 **取值范围**： 不涉及。
    * variables  **参数解释**： 流水线自定义参数。 **取值范围**： 不涉及。
    * schedules  **参数解释**： 流水线定时任务设置。 **取值范围**： 不涉及。
    * triggers  **参数解释**： 流水线事件触发设置。 **取值范围**： 不涉及。
    * groupId  **参数解释**： 流水线所属分组ID。 **取值范围**： 不涉及。
    * definition  **参数解释**： 流水线定义JSON。 **取值范围**： 不涉及。
    * securityLevel  **参数解释**： 流水线涉密等级。 **取值范围**： 不涉及。
    * originId  **参数解释**： 复制流水线场景下，原流水线ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * disableReleaseBranchManagement  **参数解释**： 是否禁用发布分支管理。 **取值范围**： - true：禁用发布分支管理。 - false：不禁用发布分支管理。
    * deleted  **参数解释**： 流水线是否已被删除。 **取值范围**： - true：已删除。 - false：未删除。
    * banned  **参数解释**： 流水线是否被禁用。 **取值范围**： - true：已禁用。 - false：未禁用。
    * fromGitCode  **参数解释**： 是否来自CodeHub代码仓。 **取值范围**： - true：来自CodeHub代码仓。 - false：非来自CodeHub代码仓。
    * fromGitCodeRepo  **参数解释**： 是否来自CodeHub代码仓库。 **取值范围**： - true：来自CodeHub代码仓库。 - false：非来自CodeHub代码仓库。
    * gitCodeRepoId  **参数解释**： CodeHub代码仓库ID。 **取值范围**： 不涉及。
    * yamlDefinition  **参数解释**： YAML格式流水线定义。 **取值范围**： 不涉及。
    * pacRepoRelation  **参数解释**： PAC代码仓关联信息。 **取值范围**： 不涉及。
    * yamlContent  **参数解释**： YAML流水线文件内容。 **取值范围**： 不涉及。
    * agencyName  **参数解释**： 委托名称。 **取值范围**： 不涉及。
    * executionPlans  **参数解释**： 执行计划列表。 **取值范围**： 不涉及。
    * fromSource  **参数解释**： 流水线来源。 **取值范围**： - 0：默认。 - 1：普通模板创建。 - 2：老数据转换。 - 3：CloudInit凤凰商城触发模板创建。 - 4：CloudInit其他触发模板创建。 - 5：创建模板。
    * projectName  **参数解释**： 项目名称。 **取值范围**： 不涉及。
    * groupName  **参数解释**： 流水线所属分组名称。 **取值范围**： 不涉及。
    * concurrencyControl  concurrencyControl
    * cancelStrategy  **参数解释**： 流水线取消运行策略。 **取值范围**： 不涉及。
    * tagIds  **参数解释**： 流水线标签ID列表。 **取值范围**： 不涉及。
    * variableGroups  **参数解释**： 流水线变量组列表。 **取值范围**： 不涉及。
    * securityLevelCode  **参数解释**： 流水线密级代码。 **取值范围**： 不涉及。
    * permissions  **参数解释**： 流水线权限信息。 **取值范围**： 不涉及。
    * subjectId  **参数解释**： 主体ID，即流水线ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * detailUrl  **参数解释**： 流水线详情页URL。 **取值范围**： 不涉及。
    * modifyUrl  **参数解释**： 流水线编辑页URL。 **取值范围**： 不涉及。
    * tags  **参数解释**： 流水线标签列表。 **取值范围**： 不涉及。
    * isCrModel  **参数解释**： 是否为CR（变更）模型流水线。 **取值范围**： - true：是CR模型流水线。 - false：非CR模型流水线。
    * archiveSource  **参数解释**： PAC归档源信息。 **取值范围**： 不涉及。
    * yamlRepoProperties  **参数解释**： V2 YAML流水线的代码仓相关信息。 **取值范围**： 不涉及。
    * variableGroupIds  **参数解释**： 关联的通用参数组ID列表。 **取值范围**： 不涉及。
    * pacSourceAlias  **参数解释**： PAC代码源别名。 **取值范围**： 不涉及。
    * pacSourceRepoHttpsEndpoint  **参数解释**： PAC代码源CodeHub仓库的HTTPS端点ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'manifestVersion' => 'string',
            'region' => 'string',
            'domainId' => 'string',
            'projectId' => 'string',
            'componentId' => 'string',
            'isPublish' => 'bool',
            'creatorId' => 'string',
            'creatorName' => 'string',
            'updaterId' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int',
            'isCollect' => 'bool',
            'sources' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineSource[]',
            'variables' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineVariable[]',
            'schedules' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineSchedule[]',
            'triggers' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineTrigger[]',
            'groupId' => 'string',
            'definition' => 'string',
            'securityLevel' => 'int',
            'originId' => 'string',
            'disableReleaseBranchManagement' => 'bool',
            'deleted' => 'bool',
            'banned' => 'bool',
            'fromGitCode' => 'bool',
            'fromGitCodeRepo' => 'bool',
            'gitCodeRepoId' => 'string',
            'yamlDefinition' => 'string',
            'pacRepoRelation' => 'object',
            'yamlContent' => 'string',
            'agencyName' => 'string',
            'executionPlans' => 'object[]',
            'fromSource' => 'int',
            'projectName' => 'string',
            'groupName' => 'string',
            'concurrencyControl' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineConcurrencyMgmt',
            'cancelStrategy' => 'object',
            'tagIds' => 'string[]',
            'variableGroups' => 'string[]',
            'securityLevelCode' => 'string',
            'permissions' => 'object',
            'subjectId' => 'string',
            'detailUrl' => 'string',
            'modifyUrl' => 'string',
            'tags' => 'object[]',
            'isCrModel' => 'bool',
            'archiveSource' => 'object',
            'yamlRepoProperties' => 'object',
            'variableGroupIds' => 'string[]',
            'pacSourceAlias' => 'string',
            'pacSourceRepoHttpsEndpoint' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 流水线ID，可以通过[查询流水线列表](ListPipelines.xml)接口，其中pipelines.pipelineId即为流水线ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * name  **参数解释**： 流水线名称。 **取值范围**： 仅包含中文、大小写英文字母、数字、'-'和'_'，且长度为[1,128]个字符。
    * description  **参数解释**： 对流水线的补充描述。 **取值范围**： 不超过1024字符。
    * manifestVersion  **参数解释**： 流水线版本，默认为3.0。 **取值范围**： 不涉及。
    * region  **参数解释**： 当前环境所属局点。 **取值范围**： 不涉及。
    * domainId  **参数解释**： 所属租户ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * projectId  **参数解释**： 项目ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * componentId  **参数解释**： 所属微服务ID。可以通过[查询微服务列表](ListMicroservice.xml)接口获取，其中data.id即为微服务ID。 **取值范围**： 不涉及。
    * isPublish  **参数解释**： 是否为变更流水线。 **取值范围**： - true：是变更流水线。 - false：不是变更流水线。
    * creatorId  **参数解释**： 流水线创建人ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * creatorName  **参数解释**： 流水线创建人名称。 **取值范围**： 不涉及。
    * updaterId  **参数解释**： 流水线上次更新人ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * createTime  **参数解释**： 流水线创建时间。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 流水线更新时间。 **取值范围**： 不涉及。
    * isCollect  **参数解释**： 流水线是否被当前用户收藏。 **取值范围**： - true：流水线已被收藏。 - false：流水线未被收藏。
    * sources  **参数解释**： 流水线源列表。 **取值范围**： 不涉及。
    * variables  **参数解释**： 流水线自定义参数。 **取值范围**： 不涉及。
    * schedules  **参数解释**： 流水线定时任务设置。 **取值范围**： 不涉及。
    * triggers  **参数解释**： 流水线事件触发设置。 **取值范围**： 不涉及。
    * groupId  **参数解释**： 流水线所属分组ID。 **取值范围**： 不涉及。
    * definition  **参数解释**： 流水线定义JSON。 **取值范围**： 不涉及。
    * securityLevel  **参数解释**： 流水线涉密等级。 **取值范围**： 不涉及。
    * originId  **参数解释**： 复制流水线场景下，原流水线ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * disableReleaseBranchManagement  **参数解释**： 是否禁用发布分支管理。 **取值范围**： - true：禁用发布分支管理。 - false：不禁用发布分支管理。
    * deleted  **参数解释**： 流水线是否已被删除。 **取值范围**： - true：已删除。 - false：未删除。
    * banned  **参数解释**： 流水线是否被禁用。 **取值范围**： - true：已禁用。 - false：未禁用。
    * fromGitCode  **参数解释**： 是否来自CodeHub代码仓。 **取值范围**： - true：来自CodeHub代码仓。 - false：非来自CodeHub代码仓。
    * fromGitCodeRepo  **参数解释**： 是否来自CodeHub代码仓库。 **取值范围**： - true：来自CodeHub代码仓库。 - false：非来自CodeHub代码仓库。
    * gitCodeRepoId  **参数解释**： CodeHub代码仓库ID。 **取值范围**： 不涉及。
    * yamlDefinition  **参数解释**： YAML格式流水线定义。 **取值范围**： 不涉及。
    * pacRepoRelation  **参数解释**： PAC代码仓关联信息。 **取值范围**： 不涉及。
    * yamlContent  **参数解释**： YAML流水线文件内容。 **取值范围**： 不涉及。
    * agencyName  **参数解释**： 委托名称。 **取值范围**： 不涉及。
    * executionPlans  **参数解释**： 执行计划列表。 **取值范围**： 不涉及。
    * fromSource  **参数解释**： 流水线来源。 **取值范围**： - 0：默认。 - 1：普通模板创建。 - 2：老数据转换。 - 3：CloudInit凤凰商城触发模板创建。 - 4：CloudInit其他触发模板创建。 - 5：创建模板。
    * projectName  **参数解释**： 项目名称。 **取值范围**： 不涉及。
    * groupName  **参数解释**： 流水线所属分组名称。 **取值范围**： 不涉及。
    * concurrencyControl  concurrencyControl
    * cancelStrategy  **参数解释**： 流水线取消运行策略。 **取值范围**： 不涉及。
    * tagIds  **参数解释**： 流水线标签ID列表。 **取值范围**： 不涉及。
    * variableGroups  **参数解释**： 流水线变量组列表。 **取值范围**： 不涉及。
    * securityLevelCode  **参数解释**： 流水线密级代码。 **取值范围**： 不涉及。
    * permissions  **参数解释**： 流水线权限信息。 **取值范围**： 不涉及。
    * subjectId  **参数解释**： 主体ID，即流水线ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * detailUrl  **参数解释**： 流水线详情页URL。 **取值范围**： 不涉及。
    * modifyUrl  **参数解释**： 流水线编辑页URL。 **取值范围**： 不涉及。
    * tags  **参数解释**： 流水线标签列表。 **取值范围**： 不涉及。
    * isCrModel  **参数解释**： 是否为CR（变更）模型流水线。 **取值范围**： - true：是CR模型流水线。 - false：非CR模型流水线。
    * archiveSource  **参数解释**： PAC归档源信息。 **取值范围**： 不涉及。
    * yamlRepoProperties  **参数解释**： V2 YAML流水线的代码仓相关信息。 **取值范围**： 不涉及。
    * variableGroupIds  **参数解释**： 关联的通用参数组ID列表。 **取值范围**： 不涉及。
    * pacSourceAlias  **参数解释**： PAC代码源别名。 **取值范围**： 不涉及。
    * pacSourceRepoHttpsEndpoint  **参数解释**： PAC代码源CodeHub仓库的HTTPS端点ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'manifestVersion' => null,
        'region' => null,
        'domainId' => null,
        'projectId' => null,
        'componentId' => null,
        'isPublish' => null,
        'creatorId' => null,
        'creatorName' => null,
        'updaterId' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'isCollect' => null,
        'sources' => null,
        'variables' => null,
        'schedules' => null,
        'triggers' => null,
        'groupId' => null,
        'definition' => null,
        'securityLevel' => null,
        'originId' => null,
        'disableReleaseBranchManagement' => null,
        'deleted' => null,
        'banned' => null,
        'fromGitCode' => null,
        'fromGitCodeRepo' => null,
        'gitCodeRepoId' => null,
        'yamlDefinition' => null,
        'pacRepoRelation' => null,
        'yamlContent' => null,
        'agencyName' => null,
        'executionPlans' => null,
        'fromSource' => null,
        'projectName' => null,
        'groupName' => null,
        'concurrencyControl' => null,
        'cancelStrategy' => null,
        'tagIds' => null,
        'variableGroups' => null,
        'securityLevelCode' => null,
        'permissions' => null,
        'subjectId' => null,
        'detailUrl' => null,
        'modifyUrl' => null,
        'tags' => null,
        'isCrModel' => null,
        'archiveSource' => null,
        'yamlRepoProperties' => null,
        'variableGroupIds' => null,
        'pacSourceAlias' => null,
        'pacSourceRepoHttpsEndpoint' => null
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
    * id  **参数解释**： 流水线ID，可以通过[查询流水线列表](ListPipelines.xml)接口，其中pipelines.pipelineId即为流水线ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * name  **参数解释**： 流水线名称。 **取值范围**： 仅包含中文、大小写英文字母、数字、'-'和'_'，且长度为[1,128]个字符。
    * description  **参数解释**： 对流水线的补充描述。 **取值范围**： 不超过1024字符。
    * manifestVersion  **参数解释**： 流水线版本，默认为3.0。 **取值范围**： 不涉及。
    * region  **参数解释**： 当前环境所属局点。 **取值范围**： 不涉及。
    * domainId  **参数解释**： 所属租户ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * projectId  **参数解释**： 项目ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * componentId  **参数解释**： 所属微服务ID。可以通过[查询微服务列表](ListMicroservice.xml)接口获取，其中data.id即为微服务ID。 **取值范围**： 不涉及。
    * isPublish  **参数解释**： 是否为变更流水线。 **取值范围**： - true：是变更流水线。 - false：不是变更流水线。
    * creatorId  **参数解释**： 流水线创建人ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * creatorName  **参数解释**： 流水线创建人名称。 **取值范围**： 不涉及。
    * updaterId  **参数解释**： 流水线上次更新人ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * createTime  **参数解释**： 流水线创建时间。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 流水线更新时间。 **取值范围**： 不涉及。
    * isCollect  **参数解释**： 流水线是否被当前用户收藏。 **取值范围**： - true：流水线已被收藏。 - false：流水线未被收藏。
    * sources  **参数解释**： 流水线源列表。 **取值范围**： 不涉及。
    * variables  **参数解释**： 流水线自定义参数。 **取值范围**： 不涉及。
    * schedules  **参数解释**： 流水线定时任务设置。 **取值范围**： 不涉及。
    * triggers  **参数解释**： 流水线事件触发设置。 **取值范围**： 不涉及。
    * groupId  **参数解释**： 流水线所属分组ID。 **取值范围**： 不涉及。
    * definition  **参数解释**： 流水线定义JSON。 **取值范围**： 不涉及。
    * securityLevel  **参数解释**： 流水线涉密等级。 **取值范围**： 不涉及。
    * originId  **参数解释**： 复制流水线场景下，原流水线ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * disableReleaseBranchManagement  **参数解释**： 是否禁用发布分支管理。 **取值范围**： - true：禁用发布分支管理。 - false：不禁用发布分支管理。
    * deleted  **参数解释**： 流水线是否已被删除。 **取值范围**： - true：已删除。 - false：未删除。
    * banned  **参数解释**： 流水线是否被禁用。 **取值范围**： - true：已禁用。 - false：未禁用。
    * fromGitCode  **参数解释**： 是否来自CodeHub代码仓。 **取值范围**： - true：来自CodeHub代码仓。 - false：非来自CodeHub代码仓。
    * fromGitCodeRepo  **参数解释**： 是否来自CodeHub代码仓库。 **取值范围**： - true：来自CodeHub代码仓库。 - false：非来自CodeHub代码仓库。
    * gitCodeRepoId  **参数解释**： CodeHub代码仓库ID。 **取值范围**： 不涉及。
    * yamlDefinition  **参数解释**： YAML格式流水线定义。 **取值范围**： 不涉及。
    * pacRepoRelation  **参数解释**： PAC代码仓关联信息。 **取值范围**： 不涉及。
    * yamlContent  **参数解释**： YAML流水线文件内容。 **取值范围**： 不涉及。
    * agencyName  **参数解释**： 委托名称。 **取值范围**： 不涉及。
    * executionPlans  **参数解释**： 执行计划列表。 **取值范围**： 不涉及。
    * fromSource  **参数解释**： 流水线来源。 **取值范围**： - 0：默认。 - 1：普通模板创建。 - 2：老数据转换。 - 3：CloudInit凤凰商城触发模板创建。 - 4：CloudInit其他触发模板创建。 - 5：创建模板。
    * projectName  **参数解释**： 项目名称。 **取值范围**： 不涉及。
    * groupName  **参数解释**： 流水线所属分组名称。 **取值范围**： 不涉及。
    * concurrencyControl  concurrencyControl
    * cancelStrategy  **参数解释**： 流水线取消运行策略。 **取值范围**： 不涉及。
    * tagIds  **参数解释**： 流水线标签ID列表。 **取值范围**： 不涉及。
    * variableGroups  **参数解释**： 流水线变量组列表。 **取值范围**： 不涉及。
    * securityLevelCode  **参数解释**： 流水线密级代码。 **取值范围**： 不涉及。
    * permissions  **参数解释**： 流水线权限信息。 **取值范围**： 不涉及。
    * subjectId  **参数解释**： 主体ID，即流水线ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * detailUrl  **参数解释**： 流水线详情页URL。 **取值范围**： 不涉及。
    * modifyUrl  **参数解释**： 流水线编辑页URL。 **取值范围**： 不涉及。
    * tags  **参数解释**： 流水线标签列表。 **取值范围**： 不涉及。
    * isCrModel  **参数解释**： 是否为CR（变更）模型流水线。 **取值范围**： - true：是CR模型流水线。 - false：非CR模型流水线。
    * archiveSource  **参数解释**： PAC归档源信息。 **取值范围**： 不涉及。
    * yamlRepoProperties  **参数解释**： V2 YAML流水线的代码仓相关信息。 **取值范围**： 不涉及。
    * variableGroupIds  **参数解释**： 关联的通用参数组ID列表。 **取值范围**： 不涉及。
    * pacSourceAlias  **参数解释**： PAC代码源别名。 **取值范围**： 不涉及。
    * pacSourceRepoHttpsEndpoint  **参数解释**： PAC代码源CodeHub仓库的HTTPS端点ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'manifestVersion' => 'manifest_version',
            'region' => 'region',
            'domainId' => 'domain_id',
            'projectId' => 'project_id',
            'componentId' => 'component_id',
            'isPublish' => 'is_publish',
            'creatorId' => 'creator_id',
            'creatorName' => 'creator_name',
            'updaterId' => 'updater_id',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'isCollect' => 'is_collect',
            'sources' => 'sources',
            'variables' => 'variables',
            'schedules' => 'schedules',
            'triggers' => 'triggers',
            'groupId' => 'group_id',
            'definition' => 'definition',
            'securityLevel' => 'security_level',
            'originId' => 'origin_id',
            'disableReleaseBranchManagement' => 'disable_release_branch_management',
            'deleted' => 'deleted',
            'banned' => 'banned',
            'fromGitCode' => 'from_git_code',
            'fromGitCodeRepo' => 'from_git_code_repo',
            'gitCodeRepoId' => 'git_code_repo_id',
            'yamlDefinition' => 'yaml_definition',
            'pacRepoRelation' => 'pac_repo_relation',
            'yamlContent' => 'yaml_content',
            'agencyName' => 'agency_name',
            'executionPlans' => 'execution_plans',
            'fromSource' => 'from_source',
            'projectName' => 'project_name',
            'groupName' => 'group_name',
            'concurrencyControl' => 'concurrency_control',
            'cancelStrategy' => 'cancel_strategy',
            'tagIds' => 'tag_ids',
            'variableGroups' => 'variable_groups',
            'securityLevelCode' => 'security_level_code',
            'permissions' => 'permissions',
            'subjectId' => 'subject_id',
            'detailUrl' => 'detail_url',
            'modifyUrl' => 'modify_url',
            'tags' => 'tags',
            'isCrModel' => 'is_cr_model',
            'archiveSource' => 'archive_source',
            'yamlRepoProperties' => 'yaml_repo_properties',
            'variableGroupIds' => 'variable_group_ids',
            'pacSourceAlias' => 'pac_source_alias',
            'pacSourceRepoHttpsEndpoint' => 'pac_source_repo_https_endpoint'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 流水线ID，可以通过[查询流水线列表](ListPipelines.xml)接口，其中pipelines.pipelineId即为流水线ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * name  **参数解释**： 流水线名称。 **取值范围**： 仅包含中文、大小写英文字母、数字、'-'和'_'，且长度为[1,128]个字符。
    * description  **参数解释**： 对流水线的补充描述。 **取值范围**： 不超过1024字符。
    * manifestVersion  **参数解释**： 流水线版本，默认为3.0。 **取值范围**： 不涉及。
    * region  **参数解释**： 当前环境所属局点。 **取值范围**： 不涉及。
    * domainId  **参数解释**： 所属租户ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * projectId  **参数解释**： 项目ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * componentId  **参数解释**： 所属微服务ID。可以通过[查询微服务列表](ListMicroservice.xml)接口获取，其中data.id即为微服务ID。 **取值范围**： 不涉及。
    * isPublish  **参数解释**： 是否为变更流水线。 **取值范围**： - true：是变更流水线。 - false：不是变更流水线。
    * creatorId  **参数解释**： 流水线创建人ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * creatorName  **参数解释**： 流水线创建人名称。 **取值范围**： 不涉及。
    * updaterId  **参数解释**： 流水线上次更新人ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * createTime  **参数解释**： 流水线创建时间。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 流水线更新时间。 **取值范围**： 不涉及。
    * isCollect  **参数解释**： 流水线是否被当前用户收藏。 **取值范围**： - true：流水线已被收藏。 - false：流水线未被收藏。
    * sources  **参数解释**： 流水线源列表。 **取值范围**： 不涉及。
    * variables  **参数解释**： 流水线自定义参数。 **取值范围**： 不涉及。
    * schedules  **参数解释**： 流水线定时任务设置。 **取值范围**： 不涉及。
    * triggers  **参数解释**： 流水线事件触发设置。 **取值范围**： 不涉及。
    * groupId  **参数解释**： 流水线所属分组ID。 **取值范围**： 不涉及。
    * definition  **参数解释**： 流水线定义JSON。 **取值范围**： 不涉及。
    * securityLevel  **参数解释**： 流水线涉密等级。 **取值范围**： 不涉及。
    * originId  **参数解释**： 复制流水线场景下，原流水线ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * disableReleaseBranchManagement  **参数解释**： 是否禁用发布分支管理。 **取值范围**： - true：禁用发布分支管理。 - false：不禁用发布分支管理。
    * deleted  **参数解释**： 流水线是否已被删除。 **取值范围**： - true：已删除。 - false：未删除。
    * banned  **参数解释**： 流水线是否被禁用。 **取值范围**： - true：已禁用。 - false：未禁用。
    * fromGitCode  **参数解释**： 是否来自CodeHub代码仓。 **取值范围**： - true：来自CodeHub代码仓。 - false：非来自CodeHub代码仓。
    * fromGitCodeRepo  **参数解释**： 是否来自CodeHub代码仓库。 **取值范围**： - true：来自CodeHub代码仓库。 - false：非来自CodeHub代码仓库。
    * gitCodeRepoId  **参数解释**： CodeHub代码仓库ID。 **取值范围**： 不涉及。
    * yamlDefinition  **参数解释**： YAML格式流水线定义。 **取值范围**： 不涉及。
    * pacRepoRelation  **参数解释**： PAC代码仓关联信息。 **取值范围**： 不涉及。
    * yamlContent  **参数解释**： YAML流水线文件内容。 **取值范围**： 不涉及。
    * agencyName  **参数解释**： 委托名称。 **取值范围**： 不涉及。
    * executionPlans  **参数解释**： 执行计划列表。 **取值范围**： 不涉及。
    * fromSource  **参数解释**： 流水线来源。 **取值范围**： - 0：默认。 - 1：普通模板创建。 - 2：老数据转换。 - 3：CloudInit凤凰商城触发模板创建。 - 4：CloudInit其他触发模板创建。 - 5：创建模板。
    * projectName  **参数解释**： 项目名称。 **取值范围**： 不涉及。
    * groupName  **参数解释**： 流水线所属分组名称。 **取值范围**： 不涉及。
    * concurrencyControl  concurrencyControl
    * cancelStrategy  **参数解释**： 流水线取消运行策略。 **取值范围**： 不涉及。
    * tagIds  **参数解释**： 流水线标签ID列表。 **取值范围**： 不涉及。
    * variableGroups  **参数解释**： 流水线变量组列表。 **取值范围**： 不涉及。
    * securityLevelCode  **参数解释**： 流水线密级代码。 **取值范围**： 不涉及。
    * permissions  **参数解释**： 流水线权限信息。 **取值范围**： 不涉及。
    * subjectId  **参数解释**： 主体ID，即流水线ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * detailUrl  **参数解释**： 流水线详情页URL。 **取值范围**： 不涉及。
    * modifyUrl  **参数解释**： 流水线编辑页URL。 **取值范围**： 不涉及。
    * tags  **参数解释**： 流水线标签列表。 **取值范围**： 不涉及。
    * isCrModel  **参数解释**： 是否为CR（变更）模型流水线。 **取值范围**： - true：是CR模型流水线。 - false：非CR模型流水线。
    * archiveSource  **参数解释**： PAC归档源信息。 **取值范围**： 不涉及。
    * yamlRepoProperties  **参数解释**： V2 YAML流水线的代码仓相关信息。 **取值范围**： 不涉及。
    * variableGroupIds  **参数解释**： 关联的通用参数组ID列表。 **取值范围**： 不涉及。
    * pacSourceAlias  **参数解释**： PAC代码源别名。 **取值范围**： 不涉及。
    * pacSourceRepoHttpsEndpoint  **参数解释**： PAC代码源CodeHub仓库的HTTPS端点ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'manifestVersion' => 'setManifestVersion',
            'region' => 'setRegion',
            'domainId' => 'setDomainId',
            'projectId' => 'setProjectId',
            'componentId' => 'setComponentId',
            'isPublish' => 'setIsPublish',
            'creatorId' => 'setCreatorId',
            'creatorName' => 'setCreatorName',
            'updaterId' => 'setUpdaterId',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'isCollect' => 'setIsCollect',
            'sources' => 'setSources',
            'variables' => 'setVariables',
            'schedules' => 'setSchedules',
            'triggers' => 'setTriggers',
            'groupId' => 'setGroupId',
            'definition' => 'setDefinition',
            'securityLevel' => 'setSecurityLevel',
            'originId' => 'setOriginId',
            'disableReleaseBranchManagement' => 'setDisableReleaseBranchManagement',
            'deleted' => 'setDeleted',
            'banned' => 'setBanned',
            'fromGitCode' => 'setFromGitCode',
            'fromGitCodeRepo' => 'setFromGitCodeRepo',
            'gitCodeRepoId' => 'setGitCodeRepoId',
            'yamlDefinition' => 'setYamlDefinition',
            'pacRepoRelation' => 'setPacRepoRelation',
            'yamlContent' => 'setYamlContent',
            'agencyName' => 'setAgencyName',
            'executionPlans' => 'setExecutionPlans',
            'fromSource' => 'setFromSource',
            'projectName' => 'setProjectName',
            'groupName' => 'setGroupName',
            'concurrencyControl' => 'setConcurrencyControl',
            'cancelStrategy' => 'setCancelStrategy',
            'tagIds' => 'setTagIds',
            'variableGroups' => 'setVariableGroups',
            'securityLevelCode' => 'setSecurityLevelCode',
            'permissions' => 'setPermissions',
            'subjectId' => 'setSubjectId',
            'detailUrl' => 'setDetailUrl',
            'modifyUrl' => 'setModifyUrl',
            'tags' => 'setTags',
            'isCrModel' => 'setIsCrModel',
            'archiveSource' => 'setArchiveSource',
            'yamlRepoProperties' => 'setYamlRepoProperties',
            'variableGroupIds' => 'setVariableGroupIds',
            'pacSourceAlias' => 'setPacSourceAlias',
            'pacSourceRepoHttpsEndpoint' => 'setPacSourceRepoHttpsEndpoint'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 流水线ID，可以通过[查询流水线列表](ListPipelines.xml)接口，其中pipelines.pipelineId即为流水线ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * name  **参数解释**： 流水线名称。 **取值范围**： 仅包含中文、大小写英文字母、数字、'-'和'_'，且长度为[1,128]个字符。
    * description  **参数解释**： 对流水线的补充描述。 **取值范围**： 不超过1024字符。
    * manifestVersion  **参数解释**： 流水线版本，默认为3.0。 **取值范围**： 不涉及。
    * region  **参数解释**： 当前环境所属局点。 **取值范围**： 不涉及。
    * domainId  **参数解释**： 所属租户ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * projectId  **参数解释**： 项目ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * componentId  **参数解释**： 所属微服务ID。可以通过[查询微服务列表](ListMicroservice.xml)接口获取，其中data.id即为微服务ID。 **取值范围**： 不涉及。
    * isPublish  **参数解释**： 是否为变更流水线。 **取值范围**： - true：是变更流水线。 - false：不是变更流水线。
    * creatorId  **参数解释**： 流水线创建人ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * creatorName  **参数解释**： 流水线创建人名称。 **取值范围**： 不涉及。
    * updaterId  **参数解释**： 流水线上次更新人ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * createTime  **参数解释**： 流水线创建时间。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 流水线更新时间。 **取值范围**： 不涉及。
    * isCollect  **参数解释**： 流水线是否被当前用户收藏。 **取值范围**： - true：流水线已被收藏。 - false：流水线未被收藏。
    * sources  **参数解释**： 流水线源列表。 **取值范围**： 不涉及。
    * variables  **参数解释**： 流水线自定义参数。 **取值范围**： 不涉及。
    * schedules  **参数解释**： 流水线定时任务设置。 **取值范围**： 不涉及。
    * triggers  **参数解释**： 流水线事件触发设置。 **取值范围**： 不涉及。
    * groupId  **参数解释**： 流水线所属分组ID。 **取值范围**： 不涉及。
    * definition  **参数解释**： 流水线定义JSON。 **取值范围**： 不涉及。
    * securityLevel  **参数解释**： 流水线涉密等级。 **取值范围**： 不涉及。
    * originId  **参数解释**： 复制流水线场景下，原流水线ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * disableReleaseBranchManagement  **参数解释**： 是否禁用发布分支管理。 **取值范围**： - true：禁用发布分支管理。 - false：不禁用发布分支管理。
    * deleted  **参数解释**： 流水线是否已被删除。 **取值范围**： - true：已删除。 - false：未删除。
    * banned  **参数解释**： 流水线是否被禁用。 **取值范围**： - true：已禁用。 - false：未禁用。
    * fromGitCode  **参数解释**： 是否来自CodeHub代码仓。 **取值范围**： - true：来自CodeHub代码仓。 - false：非来自CodeHub代码仓。
    * fromGitCodeRepo  **参数解释**： 是否来自CodeHub代码仓库。 **取值范围**： - true：来自CodeHub代码仓库。 - false：非来自CodeHub代码仓库。
    * gitCodeRepoId  **参数解释**： CodeHub代码仓库ID。 **取值范围**： 不涉及。
    * yamlDefinition  **参数解释**： YAML格式流水线定义。 **取值范围**： 不涉及。
    * pacRepoRelation  **参数解释**： PAC代码仓关联信息。 **取值范围**： 不涉及。
    * yamlContent  **参数解释**： YAML流水线文件内容。 **取值范围**： 不涉及。
    * agencyName  **参数解释**： 委托名称。 **取值范围**： 不涉及。
    * executionPlans  **参数解释**： 执行计划列表。 **取值范围**： 不涉及。
    * fromSource  **参数解释**： 流水线来源。 **取值范围**： - 0：默认。 - 1：普通模板创建。 - 2：老数据转换。 - 3：CloudInit凤凰商城触发模板创建。 - 4：CloudInit其他触发模板创建。 - 5：创建模板。
    * projectName  **参数解释**： 项目名称。 **取值范围**： 不涉及。
    * groupName  **参数解释**： 流水线所属分组名称。 **取值范围**： 不涉及。
    * concurrencyControl  concurrencyControl
    * cancelStrategy  **参数解释**： 流水线取消运行策略。 **取值范围**： 不涉及。
    * tagIds  **参数解释**： 流水线标签ID列表。 **取值范围**： 不涉及。
    * variableGroups  **参数解释**： 流水线变量组列表。 **取值范围**： 不涉及。
    * securityLevelCode  **参数解释**： 流水线密级代码。 **取值范围**： 不涉及。
    * permissions  **参数解释**： 流水线权限信息。 **取值范围**： 不涉及。
    * subjectId  **参数解释**： 主体ID，即流水线ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * detailUrl  **参数解释**： 流水线详情页URL。 **取值范围**： 不涉及。
    * modifyUrl  **参数解释**： 流水线编辑页URL。 **取值范围**： 不涉及。
    * tags  **参数解释**： 流水线标签列表。 **取值范围**： 不涉及。
    * isCrModel  **参数解释**： 是否为CR（变更）模型流水线。 **取值范围**： - true：是CR模型流水线。 - false：非CR模型流水线。
    * archiveSource  **参数解释**： PAC归档源信息。 **取值范围**： 不涉及。
    * yamlRepoProperties  **参数解释**： V2 YAML流水线的代码仓相关信息。 **取值范围**： 不涉及。
    * variableGroupIds  **参数解释**： 关联的通用参数组ID列表。 **取值范围**： 不涉及。
    * pacSourceAlias  **参数解释**： PAC代码源别名。 **取值范围**： 不涉及。
    * pacSourceRepoHttpsEndpoint  **参数解释**： PAC代码源CodeHub仓库的HTTPS端点ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'manifestVersion' => 'getManifestVersion',
            'region' => 'getRegion',
            'domainId' => 'getDomainId',
            'projectId' => 'getProjectId',
            'componentId' => 'getComponentId',
            'isPublish' => 'getIsPublish',
            'creatorId' => 'getCreatorId',
            'creatorName' => 'getCreatorName',
            'updaterId' => 'getUpdaterId',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'isCollect' => 'getIsCollect',
            'sources' => 'getSources',
            'variables' => 'getVariables',
            'schedules' => 'getSchedules',
            'triggers' => 'getTriggers',
            'groupId' => 'getGroupId',
            'definition' => 'getDefinition',
            'securityLevel' => 'getSecurityLevel',
            'originId' => 'getOriginId',
            'disableReleaseBranchManagement' => 'getDisableReleaseBranchManagement',
            'deleted' => 'getDeleted',
            'banned' => 'getBanned',
            'fromGitCode' => 'getFromGitCode',
            'fromGitCodeRepo' => 'getFromGitCodeRepo',
            'gitCodeRepoId' => 'getGitCodeRepoId',
            'yamlDefinition' => 'getYamlDefinition',
            'pacRepoRelation' => 'getPacRepoRelation',
            'yamlContent' => 'getYamlContent',
            'agencyName' => 'getAgencyName',
            'executionPlans' => 'getExecutionPlans',
            'fromSource' => 'getFromSource',
            'projectName' => 'getProjectName',
            'groupName' => 'getGroupName',
            'concurrencyControl' => 'getConcurrencyControl',
            'cancelStrategy' => 'getCancelStrategy',
            'tagIds' => 'getTagIds',
            'variableGroups' => 'getVariableGroups',
            'securityLevelCode' => 'getSecurityLevelCode',
            'permissions' => 'getPermissions',
            'subjectId' => 'getSubjectId',
            'detailUrl' => 'getDetailUrl',
            'modifyUrl' => 'getModifyUrl',
            'tags' => 'getTags',
            'isCrModel' => 'getIsCrModel',
            'archiveSource' => 'getArchiveSource',
            'yamlRepoProperties' => 'getYamlRepoProperties',
            'variableGroupIds' => 'getVariableGroupIds',
            'pacSourceAlias' => 'getPacSourceAlias',
            'pacSourceRepoHttpsEndpoint' => 'getPacSourceRepoHttpsEndpoint'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['manifestVersion'] = isset($data['manifestVersion']) ? $data['manifestVersion'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['componentId'] = isset($data['componentId']) ? $data['componentId'] : null;
        $this->container['isPublish'] = isset($data['isPublish']) ? $data['isPublish'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['updaterId'] = isset($data['updaterId']) ? $data['updaterId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['isCollect'] = isset($data['isCollect']) ? $data['isCollect'] : null;
        $this->container['sources'] = isset($data['sources']) ? $data['sources'] : null;
        $this->container['variables'] = isset($data['variables']) ? $data['variables'] : null;
        $this->container['schedules'] = isset($data['schedules']) ? $data['schedules'] : null;
        $this->container['triggers'] = isset($data['triggers']) ? $data['triggers'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['definition'] = isset($data['definition']) ? $data['definition'] : null;
        $this->container['securityLevel'] = isset($data['securityLevel']) ? $data['securityLevel'] : null;
        $this->container['originId'] = isset($data['originId']) ? $data['originId'] : null;
        $this->container['disableReleaseBranchManagement'] = isset($data['disableReleaseBranchManagement']) ? $data['disableReleaseBranchManagement'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['banned'] = isset($data['banned']) ? $data['banned'] : null;
        $this->container['fromGitCode'] = isset($data['fromGitCode']) ? $data['fromGitCode'] : null;
        $this->container['fromGitCodeRepo'] = isset($data['fromGitCodeRepo']) ? $data['fromGitCodeRepo'] : null;
        $this->container['gitCodeRepoId'] = isset($data['gitCodeRepoId']) ? $data['gitCodeRepoId'] : null;
        $this->container['yamlDefinition'] = isset($data['yamlDefinition']) ? $data['yamlDefinition'] : null;
        $this->container['pacRepoRelation'] = isset($data['pacRepoRelation']) ? $data['pacRepoRelation'] : null;
        $this->container['yamlContent'] = isset($data['yamlContent']) ? $data['yamlContent'] : null;
        $this->container['agencyName'] = isset($data['agencyName']) ? $data['agencyName'] : null;
        $this->container['executionPlans'] = isset($data['executionPlans']) ? $data['executionPlans'] : null;
        $this->container['fromSource'] = isset($data['fromSource']) ? $data['fromSource'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['concurrencyControl'] = isset($data['concurrencyControl']) ? $data['concurrencyControl'] : null;
        $this->container['cancelStrategy'] = isset($data['cancelStrategy']) ? $data['cancelStrategy'] : null;
        $this->container['tagIds'] = isset($data['tagIds']) ? $data['tagIds'] : null;
        $this->container['variableGroups'] = isset($data['variableGroups']) ? $data['variableGroups'] : null;
        $this->container['securityLevelCode'] = isset($data['securityLevelCode']) ? $data['securityLevelCode'] : null;
        $this->container['permissions'] = isset($data['permissions']) ? $data['permissions'] : null;
        $this->container['subjectId'] = isset($data['subjectId']) ? $data['subjectId'] : null;
        $this->container['detailUrl'] = isset($data['detailUrl']) ? $data['detailUrl'] : null;
        $this->container['modifyUrl'] = isset($data['modifyUrl']) ? $data['modifyUrl'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['isCrModel'] = isset($data['isCrModel']) ? $data['isCrModel'] : null;
        $this->container['archiveSource'] = isset($data['archiveSource']) ? $data['archiveSource'] : null;
        $this->container['yamlRepoProperties'] = isset($data['yamlRepoProperties']) ? $data['yamlRepoProperties'] : null;
        $this->container['variableGroupIds'] = isset($data['variableGroupIds']) ? $data['variableGroupIds'] : null;
        $this->container['pacSourceAlias'] = isset($data['pacSourceAlias']) ? $data['pacSourceAlias'] : null;
        $this->container['pacSourceRepoHttpsEndpoint'] = isset($data['pacSourceRepoHttpsEndpoint']) ? $data['pacSourceRepoHttpsEndpoint'] : null;
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
    *  **参数解释**： 流水线ID，可以通过[查询流水线列表](ListPipelines.xml)接口，其中pipelines.pipelineId即为流水线ID。 **取值范围**： 32位字符，仅由数字和字母组成。
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
    * @param string|null $id **参数解释**： 流水线ID，可以通过[查询流水线列表](ListPipelines.xml)接口，其中pipelines.pipelineId即为流水线ID。 **取值范围**： 32位字符，仅由数字和字母组成。
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
    *  **参数解释**： 流水线名称。 **取值范围**： 仅包含中文、大小写英文字母、数字、'-'和'_'，且长度为[1,128]个字符。
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
    * @param string|null $name **参数解释**： 流水线名称。 **取值范围**： 仅包含中文、大小写英文字母、数字、'-'和'_'，且长度为[1,128]个字符。
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
    *  **参数解释**： 对流水线的补充描述。 **取值范围**： 不超过1024字符。
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
    * @param string|null $description **参数解释**： 对流水线的补充描述。 **取值范围**： 不超过1024字符。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets manifestVersion
    *  **参数解释**： 流水线版本，默认为3.0。 **取值范围**： 不涉及。
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
    * @param string|null $manifestVersion **参数解释**： 流水线版本，默认为3.0。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setManifestVersion($manifestVersion)
    {
        $this->container['manifestVersion'] = $manifestVersion;
        return $this;
    }

    /**
    * Gets region
    *  **参数解释**： 当前环境所属局点。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region **参数解释**： 当前环境所属局点。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets domainId
    *  **参数解释**： 所属租户ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId **参数解释**： 所属租户ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释**： 项目ID。 **取值范围**： 32位字符，仅由数字和字母组成。
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
    * @param string|null $projectId **参数解释**： 项目ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets componentId
    *  **参数解释**： 所属微服务ID。可以通过[查询微服务列表](ListMicroservice.xml)接口获取，其中data.id即为微服务ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getComponentId()
    {
        return $this->container['componentId'];
    }

    /**
    * Sets componentId
    *
    * @param string|null $componentId **参数解释**： 所属微服务ID。可以通过[查询微服务列表](ListMicroservice.xml)接口获取，其中data.id即为微服务ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setComponentId($componentId)
    {
        $this->container['componentId'] = $componentId;
        return $this;
    }

    /**
    * Gets isPublish
    *  **参数解释**： 是否为变更流水线。 **取值范围**： - true：是变更流水线。 - false：不是变更流水线。
    *
    * @return bool|null
    */
    public function getIsPublish()
    {
        return $this->container['isPublish'];
    }

    /**
    * Sets isPublish
    *
    * @param bool|null $isPublish **参数解释**： 是否为变更流水线。 **取值范围**： - true：是变更流水线。 - false：不是变更流水线。
    *
    * @return $this
    */
    public function setIsPublish($isPublish)
    {
        $this->container['isPublish'] = $isPublish;
        return $this;
    }

    /**
    * Gets creatorId
    *  **参数解释**： 流水线创建人ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    *
    * @return string|null
    */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
    * Sets creatorId
    *
    * @param string|null $creatorId **参数解释**： 流水线创建人ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    *
    * @return $this
    */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;
        return $this;
    }

    /**
    * Gets creatorName
    *  **参数解释**： 流水线创建人名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getCreatorName()
    {
        return $this->container['creatorName'];
    }

    /**
    * Sets creatorName
    *
    * @param string|null $creatorName **参数解释**： 流水线创建人名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets updaterId
    *  **参数解释**： 流水线上次更新人ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    *
    * @return string|null
    */
    public function getUpdaterId()
    {
        return $this->container['updaterId'];
    }

    /**
    * Sets updaterId
    *
    * @param string|null $updaterId **参数解释**： 流水线上次更新人ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    *
    * @return $this
    */
    public function setUpdaterId($updaterId)
    {
        $this->container['updaterId'] = $updaterId;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释**： 流水线创建时间。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime **参数解释**： 流水线创建时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  **参数解释**： 流水线更新时间。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime **参数解释**： 流水线更新时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets isCollect
    *  **参数解释**： 流水线是否被当前用户收藏。 **取值范围**： - true：流水线已被收藏。 - false：流水线未被收藏。
    *
    * @return bool|null
    */
    public function getIsCollect()
    {
        return $this->container['isCollect'];
    }

    /**
    * Sets isCollect
    *
    * @param bool|null $isCollect **参数解释**： 流水线是否被当前用户收藏。 **取值范围**： - true：流水线已被收藏。 - false：流水线未被收藏。
    *
    * @return $this
    */
    public function setIsCollect($isCollect)
    {
        $this->container['isCollect'] = $isCollect;
        return $this;
    }

    /**
    * Gets sources
    *  **参数解释**： 流水线源列表。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineSource[]|null
    */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
    * Sets sources
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineSource[]|null $sources **参数解释**： 流水线源列表。 **取值范围**： 不涉及。
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
    *  **参数解释**： 流水线自定义参数。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineVariable[]|null
    */
    public function getVariables()
    {
        return $this->container['variables'];
    }

    /**
    * Sets variables
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineVariable[]|null $variables **参数解释**： 流水线自定义参数。 **取值范围**： 不涉及。
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
    *  **参数解释**： 流水线定时任务设置。 **取值范围**： 不涉及。
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
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineSchedule[]|null $schedules **参数解释**： 流水线定时任务设置。 **取值范围**： 不涉及。
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
    *  **参数解释**： 流水线事件触发设置。 **取值范围**： 不涉及。
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
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineTrigger[]|null $triggers **参数解释**： 流水线事件触发设置。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTriggers($triggers)
    {
        $this->container['triggers'] = $triggers;
        return $this;
    }

    /**
    * Gets groupId
    *  **参数解释**： 流水线所属分组ID。 **取值范围**： 不涉及。
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
    * @param string|null $groupId **参数解释**： 流水线所属分组ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets definition
    *  **参数解释**： 流水线定义JSON。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDefinition()
    {
        return $this->container['definition'];
    }

    /**
    * Sets definition
    *
    * @param string|null $definition **参数解释**： 流水线定义JSON。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDefinition($definition)
    {
        $this->container['definition'] = $definition;
        return $this;
    }

    /**
    * Gets securityLevel
    *  **参数解释**： 流水线涉密等级。 **取值范围**： 不涉及。
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
    * @param int|null $securityLevel **参数解释**： 流水线涉密等级。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSecurityLevel($securityLevel)
    {
        $this->container['securityLevel'] = $securityLevel;
        return $this;
    }

    /**
    * Gets originId
    *  **参数解释**： 复制流水线场景下，原流水线ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    *
    * @return string|null
    */
    public function getOriginId()
    {
        return $this->container['originId'];
    }

    /**
    * Sets originId
    *
    * @param string|null $originId **参数解释**： 复制流水线场景下，原流水线ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    *
    * @return $this
    */
    public function setOriginId($originId)
    {
        $this->container['originId'] = $originId;
        return $this;
    }

    /**
    * Gets disableReleaseBranchManagement
    *  **参数解释**： 是否禁用发布分支管理。 **取值范围**： - true：禁用发布分支管理。 - false：不禁用发布分支管理。
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
    * @param bool|null $disableReleaseBranchManagement **参数解释**： 是否禁用发布分支管理。 **取值范围**： - true：禁用发布分支管理。 - false：不禁用发布分支管理。
    *
    * @return $this
    */
    public function setDisableReleaseBranchManagement($disableReleaseBranchManagement)
    {
        $this->container['disableReleaseBranchManagement'] = $disableReleaseBranchManagement;
        return $this;
    }

    /**
    * Gets deleted
    *  **参数解释**： 流水线是否已被删除。 **取值范围**： - true：已删除。 - false：未删除。
    *
    * @return bool|null
    */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
    * Sets deleted
    *
    * @param bool|null $deleted **参数解释**： 流水线是否已被删除。 **取值范围**： - true：已删除。 - false：未删除。
    *
    * @return $this
    */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;
        return $this;
    }

    /**
    * Gets banned
    *  **参数解释**： 流水线是否被禁用。 **取值范围**： - true：已禁用。 - false：未禁用。
    *
    * @return bool|null
    */
    public function getBanned()
    {
        return $this->container['banned'];
    }

    /**
    * Sets banned
    *
    * @param bool|null $banned **参数解释**： 流水线是否被禁用。 **取值范围**： - true：已禁用。 - false：未禁用。
    *
    * @return $this
    */
    public function setBanned($banned)
    {
        $this->container['banned'] = $banned;
        return $this;
    }

    /**
    * Gets fromGitCode
    *  **参数解释**： 是否来自CodeHub代码仓。 **取值范围**： - true：来自CodeHub代码仓。 - false：非来自CodeHub代码仓。
    *
    * @return bool|null
    */
    public function getFromGitCode()
    {
        return $this->container['fromGitCode'];
    }

    /**
    * Sets fromGitCode
    *
    * @param bool|null $fromGitCode **参数解释**： 是否来自CodeHub代码仓。 **取值范围**： - true：来自CodeHub代码仓。 - false：非来自CodeHub代码仓。
    *
    * @return $this
    */
    public function setFromGitCode($fromGitCode)
    {
        $this->container['fromGitCode'] = $fromGitCode;
        return $this;
    }

    /**
    * Gets fromGitCodeRepo
    *  **参数解释**： 是否来自CodeHub代码仓库。 **取值范围**： - true：来自CodeHub代码仓库。 - false：非来自CodeHub代码仓库。
    *
    * @return bool|null
    */
    public function getFromGitCodeRepo()
    {
        return $this->container['fromGitCodeRepo'];
    }

    /**
    * Sets fromGitCodeRepo
    *
    * @param bool|null $fromGitCodeRepo **参数解释**： 是否来自CodeHub代码仓库。 **取值范围**： - true：来自CodeHub代码仓库。 - false：非来自CodeHub代码仓库。
    *
    * @return $this
    */
    public function setFromGitCodeRepo($fromGitCodeRepo)
    {
        $this->container['fromGitCodeRepo'] = $fromGitCodeRepo;
        return $this;
    }

    /**
    * Gets gitCodeRepoId
    *  **参数解释**： CodeHub代码仓库ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getGitCodeRepoId()
    {
        return $this->container['gitCodeRepoId'];
    }

    /**
    * Sets gitCodeRepoId
    *
    * @param string|null $gitCodeRepoId **参数解释**： CodeHub代码仓库ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setGitCodeRepoId($gitCodeRepoId)
    {
        $this->container['gitCodeRepoId'] = $gitCodeRepoId;
        return $this;
    }

    /**
    * Gets yamlDefinition
    *  **参数解释**： YAML格式流水线定义。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getYamlDefinition()
    {
        return $this->container['yamlDefinition'];
    }

    /**
    * Sets yamlDefinition
    *
    * @param string|null $yamlDefinition **参数解释**： YAML格式流水线定义。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setYamlDefinition($yamlDefinition)
    {
        $this->container['yamlDefinition'] = $yamlDefinition;
        return $this;
    }

    /**
    * Gets pacRepoRelation
    *  **参数解释**： PAC代码仓关联信息。 **取值范围**： 不涉及。
    *
    * @return object|null
    */
    public function getPacRepoRelation()
    {
        return $this->container['pacRepoRelation'];
    }

    /**
    * Sets pacRepoRelation
    *
    * @param object|null $pacRepoRelation **参数解释**： PAC代码仓关联信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPacRepoRelation($pacRepoRelation)
    {
        $this->container['pacRepoRelation'] = $pacRepoRelation;
        return $this;
    }

    /**
    * Gets yamlContent
    *  **参数解释**： YAML流水线文件内容。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getYamlContent()
    {
        return $this->container['yamlContent'];
    }

    /**
    * Sets yamlContent
    *
    * @param string|null $yamlContent **参数解释**： YAML流水线文件内容。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setYamlContent($yamlContent)
    {
        $this->container['yamlContent'] = $yamlContent;
        return $this;
    }

    /**
    * Gets agencyName
    *  **参数解释**： 委托名称。 **取值范围**： 不涉及。
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
    * @param string|null $agencyName **参数解释**： 委托名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAgencyName($agencyName)
    {
        $this->container['agencyName'] = $agencyName;
        return $this;
    }

    /**
    * Gets executionPlans
    *  **参数解释**： 执行计划列表。 **取值范围**： 不涉及。
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
    * @param object[]|null $executionPlans **参数解释**： 执行计划列表。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setExecutionPlans($executionPlans)
    {
        $this->container['executionPlans'] = $executionPlans;
        return $this;
    }

    /**
    * Gets fromSource
    *  **参数解释**： 流水线来源。 **取值范围**： - 0：默认。 - 1：普通模板创建。 - 2：老数据转换。 - 3：CloudInit凤凰商城触发模板创建。 - 4：CloudInit其他触发模板创建。 - 5：创建模板。
    *
    * @return int|null
    */
    public function getFromSource()
    {
        return $this->container['fromSource'];
    }

    /**
    * Sets fromSource
    *
    * @param int|null $fromSource **参数解释**： 流水线来源。 **取值范围**： - 0：默认。 - 1：普通模板创建。 - 2：老数据转换。 - 3：CloudInit凤凰商城触发模板创建。 - 4：CloudInit其他触发模板创建。 - 5：创建模板。
    *
    * @return $this
    */
    public function setFromSource($fromSource)
    {
        $this->container['fromSource'] = $fromSource;
        return $this;
    }

    /**
    * Gets projectName
    *  **参数解释**： 项目名称。 **取值范围**： 不涉及。
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
    * @param string|null $projectName **参数解释**： 项目名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
        return $this;
    }

    /**
    * Gets groupName
    *  **参数解释**： 流水线所属分组名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName **参数解释**： 流水线所属分组名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
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
    * Gets cancelStrategy
    *  **参数解释**： 流水线取消运行策略。 **取值范围**： 不涉及。
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
    * @param object|null $cancelStrategy **参数解释**： 流水线取消运行策略。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCancelStrategy($cancelStrategy)
    {
        $this->container['cancelStrategy'] = $cancelStrategy;
        return $this;
    }

    /**
    * Gets tagIds
    *  **参数解释**： 流水线标签ID列表。 **取值范围**： 不涉及。
    *
    * @return string[]|null
    */
    public function getTagIds()
    {
        return $this->container['tagIds'];
    }

    /**
    * Sets tagIds
    *
    * @param string[]|null $tagIds **参数解释**： 流水线标签ID列表。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTagIds($tagIds)
    {
        $this->container['tagIds'] = $tagIds;
        return $this;
    }

    /**
    * Gets variableGroups
    *  **参数解释**： 流水线变量组列表。 **取值范围**： 不涉及。
    *
    * @return string[]|null
    */
    public function getVariableGroups()
    {
        return $this->container['variableGroups'];
    }

    /**
    * Sets variableGroups
    *
    * @param string[]|null $variableGroups **参数解释**： 流水线变量组列表。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setVariableGroups($variableGroups)
    {
        $this->container['variableGroups'] = $variableGroups;
        return $this;
    }

    /**
    * Gets securityLevelCode
    *  **参数解释**： 流水线密级代码。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getSecurityLevelCode()
    {
        return $this->container['securityLevelCode'];
    }

    /**
    * Sets securityLevelCode
    *
    * @param string|null $securityLevelCode **参数解释**： 流水线密级代码。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSecurityLevelCode($securityLevelCode)
    {
        $this->container['securityLevelCode'] = $securityLevelCode;
        return $this;
    }

    /**
    * Gets permissions
    *  **参数解释**： 流水线权限信息。 **取值范围**： 不涉及。
    *
    * @return object|null
    */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
    * Sets permissions
    *
    * @param object|null $permissions **参数解释**： 流水线权限信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPermissions($permissions)
    {
        $this->container['permissions'] = $permissions;
        return $this;
    }

    /**
    * Gets subjectId
    *  **参数解释**： 主体ID，即流水线ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    *
    * @return string|null
    */
    public function getSubjectId()
    {
        return $this->container['subjectId'];
    }

    /**
    * Sets subjectId
    *
    * @param string|null $subjectId **参数解释**： 主体ID，即流水线ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    *
    * @return $this
    */
    public function setSubjectId($subjectId)
    {
        $this->container['subjectId'] = $subjectId;
        return $this;
    }

    /**
    * Gets detailUrl
    *  **参数解释**： 流水线详情页URL。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDetailUrl()
    {
        return $this->container['detailUrl'];
    }

    /**
    * Sets detailUrl
    *
    * @param string|null $detailUrl **参数解释**： 流水线详情页URL。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDetailUrl($detailUrl)
    {
        $this->container['detailUrl'] = $detailUrl;
        return $this;
    }

    /**
    * Gets modifyUrl
    *  **参数解释**： 流水线编辑页URL。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getModifyUrl()
    {
        return $this->container['modifyUrl'];
    }

    /**
    * Sets modifyUrl
    *
    * @param string|null $modifyUrl **参数解释**： 流水线编辑页URL。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setModifyUrl($modifyUrl)
    {
        $this->container['modifyUrl'] = $modifyUrl;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释**： 流水线标签列表。 **取值范围**： 不涉及。
    *
    * @return object[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param object[]|null $tags **参数解释**： 流水线标签列表。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets isCrModel
    *  **参数解释**： 是否为CR（变更）模型流水线。 **取值范围**： - true：是CR模型流水线。 - false：非CR模型流水线。
    *
    * @return bool|null
    */
    public function getIsCrModel()
    {
        return $this->container['isCrModel'];
    }

    /**
    * Sets isCrModel
    *
    * @param bool|null $isCrModel **参数解释**： 是否为CR（变更）模型流水线。 **取值范围**： - true：是CR模型流水线。 - false：非CR模型流水线。
    *
    * @return $this
    */
    public function setIsCrModel($isCrModel)
    {
        $this->container['isCrModel'] = $isCrModel;
        return $this;
    }

    /**
    * Gets archiveSource
    *  **参数解释**： PAC归档源信息。 **取值范围**： 不涉及。
    *
    * @return object|null
    */
    public function getArchiveSource()
    {
        return $this->container['archiveSource'];
    }

    /**
    * Sets archiveSource
    *
    * @param object|null $archiveSource **参数解释**： PAC归档源信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setArchiveSource($archiveSource)
    {
        $this->container['archiveSource'] = $archiveSource;
        return $this;
    }

    /**
    * Gets yamlRepoProperties
    *  **参数解释**： V2 YAML流水线的代码仓相关信息。 **取值范围**： 不涉及。
    *
    * @return object|null
    */
    public function getYamlRepoProperties()
    {
        return $this->container['yamlRepoProperties'];
    }

    /**
    * Sets yamlRepoProperties
    *
    * @param object|null $yamlRepoProperties **参数解释**： V2 YAML流水线的代码仓相关信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setYamlRepoProperties($yamlRepoProperties)
    {
        $this->container['yamlRepoProperties'] = $yamlRepoProperties;
        return $this;
    }

    /**
    * Gets variableGroupIds
    *  **参数解释**： 关联的通用参数组ID列表。 **取值范围**： 不涉及。
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
    * @param string[]|null $variableGroupIds **参数解释**： 关联的通用参数组ID列表。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setVariableGroupIds($variableGroupIds)
    {
        $this->container['variableGroupIds'] = $variableGroupIds;
        return $this;
    }

    /**
    * Gets pacSourceAlias
    *  **参数解释**： PAC代码源别名。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getPacSourceAlias()
    {
        return $this->container['pacSourceAlias'];
    }

    /**
    * Sets pacSourceAlias
    *
    * @param string|null $pacSourceAlias **参数解释**： PAC代码源别名。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPacSourceAlias($pacSourceAlias)
    {
        $this->container['pacSourceAlias'] = $pacSourceAlias;
        return $this;
    }

    /**
    * Gets pacSourceRepoHttpsEndpoint
    *  **参数解释**： PAC代码源CodeHub仓库的HTTPS端点ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getPacSourceRepoHttpsEndpoint()
    {
        return $this->container['pacSourceRepoHttpsEndpoint'];
    }

    /**
    * Sets pacSourceRepoHttpsEndpoint
    *
    * @param string|null $pacSourceRepoHttpsEndpoint **参数解释**： PAC代码源CodeHub仓库的HTTPS端点ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPacSourceRepoHttpsEndpoint($pacSourceRepoHttpsEndpoint)
    {
        $this->container['pacSourceRepoHttpsEndpoint'] = $pacSourceRepoHttpsEndpoint;
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

