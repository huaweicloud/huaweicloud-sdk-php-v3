<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRepositoryResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRepositoryResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 仓库ID。
    * description  **参数解释：** 仓库描述信息。
    * name  **参数解释：** 仓库名称。
    * nameWithNamespace  **参数解释：** 仓库完整名称。
    * path  **参数解释：** 仓库路径。
    * pathWithNamespace  **参数解释：** 仓库完整路径。
    * createdAt  **参数解释：** 创建时间。
    * updatedAt  **参数解释：** 更新时间。
    * archived  **参数解释：** 是否归档。
    * sshUrlToRepo  **参数解释：** 仓库ssh地址。
    * httpUrlToRepo  **参数解释：** 仓库http地址。
    * webUrl  **参数解释：** 仓库页面链接。
    * readmeUrl  **参数解释：** 仓库readme文件链接。
    * projectId  **参数解释：** 仓库所属项目ID。
    * projectName  **参数解释：** 仓库所属项目名称。
    * developMode  **参数解释：** 仓库开发模式。 **取值范围：** - normal - CR
    * moderationResult  **参数解释：** 审核状态。
    * defaultBranch  **参数解释：** 仓库默认分支 **约束限制：** 不涉及。
    * avatarUrl  **参数解释：** 仓库图标url **约束限制：** 不涉及。
    * starCount  **参数解释：** 关注数 **约束限制：** 不涉及。
    * forksCount  **参数解释：** fork数 **约束限制：** 不涉及。
    * openIssuesCount  **参数解释：** 开启issue数 **约束限制：** 不涉及。
    * openMergeRequestsCount  **参数解释：** 开启中的CR、MR数量 **约束限制：** 不涉及。
    * lastActivityAt  **参数解释：** 最后活跃时间 **约束限制：** 不涉及。
    * namespace  namespace
    * emptyRepo  **参数解释：** 空仓库 **约束限制：** 不涉及。
    * starred  **参数解释：** 是否已关注 **约束限制：** 不涉及。
    * visibility  **参数解释：** 仓库可见等级 **约束限制：** 不涉及。
    * securityTag  **参数解释：** 仓库保密等级 **约束限制：** 不涉及。
    * security  **参数解释：** 仓库保密等级 **约束限制：** 不涉及。
    * networkType  **参数解释：** 网络类型 **约束限制：** 不涉及。
    * owner  owner
    * creator  creator
    * creatorId  **参数解释：** 创建者ID **约束限制：** 不涉及。
    * forkedFromRepository  forkedFromRepository
    * uuid  **参数解释：** 仓库唯一标识符。 **约束限制：** 不涉及。
    * ancestorIds  **参数解释：** 祖先仓库ID列表。 **约束限制：** 不涉及。
    * ancestorNames  **参数解释：** 祖先仓库名称列表。 **约束限制：** 不涉及。
    * importStatus  **参数解释：** 导入状态。 **约束限制：** 不涉及。
    * importUrl  **参数解释：** 导入源地址。 **约束限制：** 不涉及。
    * importError  **参数解释：** 导入错误信息。 **约束限制：** 不涉及。
    * repoType  **参数解释：** 仓库类型。 **约束限制：** 不涉及。
    * onlyAllowMergeIfPipelineSucceeds  **参数解释：** 是否仅在流水线成功时允许合并。 **约束限制：** 不涉及。
    * requestAccessEnabled  **参数解释：** 是否启用访问请求。 **约束限制：** 不涉及。
    * onlyAllowMergeIfAllDiscussionsAreResolved  **参数解释：** 是否仅在所有检视意见解决时允许合并。 **约束限制：** 不涉及。
    * mergeMethod  **参数解释：** 合并方法。 **约束限制：** 不涉及。
    * forkNetworkRepositories  **参数解释：** fork关联仓库列表。 **约束限制：** 不涉及。
    * permissions  permissions
    * repositoryType  **参数解释：** 仓库类型。 **约束限制：** 不涉及。
    * statistics  statistics
    * branchCount  **参数解释：** 分支数量。 **约束限制：** 不涉及。
    * tagCount  **参数解释：** Tag数量。 **约束限制：** 不涉及。
    * labelCount  **参数解释：** 标签数量。 **约束限制：** 不涉及。
    * memberCount  **参数解释：** 成员数量。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'description' => 'string',
            'name' => 'string',
            'nameWithNamespace' => 'string',
            'path' => 'string',
            'pathWithNamespace' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'archived' => 'bool',
            'sshUrlToRepo' => 'string',
            'httpUrlToRepo' => 'string',
            'webUrl' => 'string',
            'readmeUrl' => 'string',
            'projectId' => 'string',
            'projectName' => 'string',
            'developMode' => 'string',
            'moderationResult' => 'bool',
            'defaultBranch' => 'string',
            'avatarUrl' => 'string',
            'starCount' => 'int',
            'forksCount' => 'int',
            'openIssuesCount' => 'int',
            'openMergeRequestsCount' => 'int',
            'lastActivityAt' => 'string',
            'namespace' => '\HuaweiCloud\SDK\CodeHub\V4\Model\NamespaceBasicDto',
            'emptyRepo' => 'bool',
            'starred' => 'bool',
            'visibility' => 'string',
            'securityTag' => 'string',
            'security' => 'string',
            'networkType' => 'string',
            'owner' => '\HuaweiCloud\SDK\CodeHub\V4\Model\RepositoryUserBasicDto',
            'creator' => '\HuaweiCloud\SDK\CodeHub\V4\Model\RepositoryUserBasicDto',
            'creatorId' => 'int',
            'forkedFromRepository' => '\HuaweiCloud\SDK\CodeHub\V4\Model\RepositorySimpleDto',
            'uuid' => 'string',
            'ancestorIds' => 'int[]',
            'ancestorNames' => 'string[]',
            'importStatus' => 'string',
            'importUrl' => 'string',
            'importError' => 'string',
            'repoType' => 'string',
            'onlyAllowMergeIfPipelineSucceeds' => 'bool',
            'requestAccessEnabled' => 'bool',
            'onlyAllowMergeIfAllDiscussionsAreResolved' => 'bool',
            'mergeMethod' => 'string',
            'forkNetworkRepositories' => '\HuaweiCloud\SDK\CodeHub\V4\Model\RepositoryIdentityDto[]',
            'permissions' => '\HuaweiCloud\SDK\CodeHub\V4\Model\PermissionsDto',
            'repositoryType' => 'string',
            'statistics' => '\HuaweiCloud\SDK\CodeHub\V4\Model\RepositoryStatisticsDto',
            'branchCount' => 'int',
            'tagCount' => 'int',
            'labelCount' => 'int',
            'memberCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 仓库ID。
    * description  **参数解释：** 仓库描述信息。
    * name  **参数解释：** 仓库名称。
    * nameWithNamespace  **参数解释：** 仓库完整名称。
    * path  **参数解释：** 仓库路径。
    * pathWithNamespace  **参数解释：** 仓库完整路径。
    * createdAt  **参数解释：** 创建时间。
    * updatedAt  **参数解释：** 更新时间。
    * archived  **参数解释：** 是否归档。
    * sshUrlToRepo  **参数解释：** 仓库ssh地址。
    * httpUrlToRepo  **参数解释：** 仓库http地址。
    * webUrl  **参数解释：** 仓库页面链接。
    * readmeUrl  **参数解释：** 仓库readme文件链接。
    * projectId  **参数解释：** 仓库所属项目ID。
    * projectName  **参数解释：** 仓库所属项目名称。
    * developMode  **参数解释：** 仓库开发模式。 **取值范围：** - normal - CR
    * moderationResult  **参数解释：** 审核状态。
    * defaultBranch  **参数解释：** 仓库默认分支 **约束限制：** 不涉及。
    * avatarUrl  **参数解释：** 仓库图标url **约束限制：** 不涉及。
    * starCount  **参数解释：** 关注数 **约束限制：** 不涉及。
    * forksCount  **参数解释：** fork数 **约束限制：** 不涉及。
    * openIssuesCount  **参数解释：** 开启issue数 **约束限制：** 不涉及。
    * openMergeRequestsCount  **参数解释：** 开启中的CR、MR数量 **约束限制：** 不涉及。
    * lastActivityAt  **参数解释：** 最后活跃时间 **约束限制：** 不涉及。
    * namespace  namespace
    * emptyRepo  **参数解释：** 空仓库 **约束限制：** 不涉及。
    * starred  **参数解释：** 是否已关注 **约束限制：** 不涉及。
    * visibility  **参数解释：** 仓库可见等级 **约束限制：** 不涉及。
    * securityTag  **参数解释：** 仓库保密等级 **约束限制：** 不涉及。
    * security  **参数解释：** 仓库保密等级 **约束限制：** 不涉及。
    * networkType  **参数解释：** 网络类型 **约束限制：** 不涉及。
    * owner  owner
    * creator  creator
    * creatorId  **参数解释：** 创建者ID **约束限制：** 不涉及。
    * forkedFromRepository  forkedFromRepository
    * uuid  **参数解释：** 仓库唯一标识符。 **约束限制：** 不涉及。
    * ancestorIds  **参数解释：** 祖先仓库ID列表。 **约束限制：** 不涉及。
    * ancestorNames  **参数解释：** 祖先仓库名称列表。 **约束限制：** 不涉及。
    * importStatus  **参数解释：** 导入状态。 **约束限制：** 不涉及。
    * importUrl  **参数解释：** 导入源地址。 **约束限制：** 不涉及。
    * importError  **参数解释：** 导入错误信息。 **约束限制：** 不涉及。
    * repoType  **参数解释：** 仓库类型。 **约束限制：** 不涉及。
    * onlyAllowMergeIfPipelineSucceeds  **参数解释：** 是否仅在流水线成功时允许合并。 **约束限制：** 不涉及。
    * requestAccessEnabled  **参数解释：** 是否启用访问请求。 **约束限制：** 不涉及。
    * onlyAllowMergeIfAllDiscussionsAreResolved  **参数解释：** 是否仅在所有检视意见解决时允许合并。 **约束限制：** 不涉及。
    * mergeMethod  **参数解释：** 合并方法。 **约束限制：** 不涉及。
    * forkNetworkRepositories  **参数解释：** fork关联仓库列表。 **约束限制：** 不涉及。
    * permissions  permissions
    * repositoryType  **参数解释：** 仓库类型。 **约束限制：** 不涉及。
    * statistics  statistics
    * branchCount  **参数解释：** 分支数量。 **约束限制：** 不涉及。
    * tagCount  **参数解释：** Tag数量。 **约束限制：** 不涉及。
    * labelCount  **参数解释：** 标签数量。 **约束限制：** 不涉及。
    * memberCount  **参数解释：** 成员数量。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'description' => null,
        'name' => null,
        'nameWithNamespace' => null,
        'path' => null,
        'pathWithNamespace' => null,
        'createdAt' => 'yyyy-MM-dd'T'HH:mm:ss.SSSXXX',
        'updatedAt' => 'yyyy-MM-dd'T'HH:mm:ss.SSSXXX',
        'archived' => null,
        'sshUrlToRepo' => null,
        'httpUrlToRepo' => null,
        'webUrl' => null,
        'readmeUrl' => null,
        'projectId' => null,
        'projectName' => null,
        'developMode' => null,
        'moderationResult' => null,
        'defaultBranch' => null,
        'avatarUrl' => null,
        'starCount' => null,
        'forksCount' => null,
        'openIssuesCount' => null,
        'openMergeRequestsCount' => null,
        'lastActivityAt' => null,
        'namespace' => null,
        'emptyRepo' => null,
        'starred' => null,
        'visibility' => null,
        'securityTag' => null,
        'security' => null,
        'networkType' => null,
        'owner' => null,
        'creator' => null,
        'creatorId' => null,
        'forkedFromRepository' => null,
        'uuid' => null,
        'ancestorIds' => null,
        'ancestorNames' => null,
        'importStatus' => null,
        'importUrl' => null,
        'importError' => null,
        'repoType' => null,
        'onlyAllowMergeIfPipelineSucceeds' => null,
        'requestAccessEnabled' => null,
        'onlyAllowMergeIfAllDiscussionsAreResolved' => null,
        'mergeMethod' => null,
        'forkNetworkRepositories' => null,
        'permissions' => null,
        'repositoryType' => null,
        'statistics' => null,
        'branchCount' => null,
        'tagCount' => null,
        'labelCount' => null,
        'memberCount' => null
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
    * id  **参数解释：** 仓库ID。
    * description  **参数解释：** 仓库描述信息。
    * name  **参数解释：** 仓库名称。
    * nameWithNamespace  **参数解释：** 仓库完整名称。
    * path  **参数解释：** 仓库路径。
    * pathWithNamespace  **参数解释：** 仓库完整路径。
    * createdAt  **参数解释：** 创建时间。
    * updatedAt  **参数解释：** 更新时间。
    * archived  **参数解释：** 是否归档。
    * sshUrlToRepo  **参数解释：** 仓库ssh地址。
    * httpUrlToRepo  **参数解释：** 仓库http地址。
    * webUrl  **参数解释：** 仓库页面链接。
    * readmeUrl  **参数解释：** 仓库readme文件链接。
    * projectId  **参数解释：** 仓库所属项目ID。
    * projectName  **参数解释：** 仓库所属项目名称。
    * developMode  **参数解释：** 仓库开发模式。 **取值范围：** - normal - CR
    * moderationResult  **参数解释：** 审核状态。
    * defaultBranch  **参数解释：** 仓库默认分支 **约束限制：** 不涉及。
    * avatarUrl  **参数解释：** 仓库图标url **约束限制：** 不涉及。
    * starCount  **参数解释：** 关注数 **约束限制：** 不涉及。
    * forksCount  **参数解释：** fork数 **约束限制：** 不涉及。
    * openIssuesCount  **参数解释：** 开启issue数 **约束限制：** 不涉及。
    * openMergeRequestsCount  **参数解释：** 开启中的CR、MR数量 **约束限制：** 不涉及。
    * lastActivityAt  **参数解释：** 最后活跃时间 **约束限制：** 不涉及。
    * namespace  namespace
    * emptyRepo  **参数解释：** 空仓库 **约束限制：** 不涉及。
    * starred  **参数解释：** 是否已关注 **约束限制：** 不涉及。
    * visibility  **参数解释：** 仓库可见等级 **约束限制：** 不涉及。
    * securityTag  **参数解释：** 仓库保密等级 **约束限制：** 不涉及。
    * security  **参数解释：** 仓库保密等级 **约束限制：** 不涉及。
    * networkType  **参数解释：** 网络类型 **约束限制：** 不涉及。
    * owner  owner
    * creator  creator
    * creatorId  **参数解释：** 创建者ID **约束限制：** 不涉及。
    * forkedFromRepository  forkedFromRepository
    * uuid  **参数解释：** 仓库唯一标识符。 **约束限制：** 不涉及。
    * ancestorIds  **参数解释：** 祖先仓库ID列表。 **约束限制：** 不涉及。
    * ancestorNames  **参数解释：** 祖先仓库名称列表。 **约束限制：** 不涉及。
    * importStatus  **参数解释：** 导入状态。 **约束限制：** 不涉及。
    * importUrl  **参数解释：** 导入源地址。 **约束限制：** 不涉及。
    * importError  **参数解释：** 导入错误信息。 **约束限制：** 不涉及。
    * repoType  **参数解释：** 仓库类型。 **约束限制：** 不涉及。
    * onlyAllowMergeIfPipelineSucceeds  **参数解释：** 是否仅在流水线成功时允许合并。 **约束限制：** 不涉及。
    * requestAccessEnabled  **参数解释：** 是否启用访问请求。 **约束限制：** 不涉及。
    * onlyAllowMergeIfAllDiscussionsAreResolved  **参数解释：** 是否仅在所有检视意见解决时允许合并。 **约束限制：** 不涉及。
    * mergeMethod  **参数解释：** 合并方法。 **约束限制：** 不涉及。
    * forkNetworkRepositories  **参数解释：** fork关联仓库列表。 **约束限制：** 不涉及。
    * permissions  permissions
    * repositoryType  **参数解释：** 仓库类型。 **约束限制：** 不涉及。
    * statistics  statistics
    * branchCount  **参数解释：** 分支数量。 **约束限制：** 不涉及。
    * tagCount  **参数解释：** Tag数量。 **约束限制：** 不涉及。
    * labelCount  **参数解释：** 标签数量。 **约束限制：** 不涉及。
    * memberCount  **参数解释：** 成员数量。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'description' => 'description',
            'name' => 'name',
            'nameWithNamespace' => 'name_with_namespace',
            'path' => 'path',
            'pathWithNamespace' => 'path_with_namespace',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'archived' => 'archived',
            'sshUrlToRepo' => 'ssh_url_to_repo',
            'httpUrlToRepo' => 'http_url_to_repo',
            'webUrl' => 'web_url',
            'readmeUrl' => 'readme_url',
            'projectId' => 'project_id',
            'projectName' => 'project_name',
            'developMode' => 'develop_mode',
            'moderationResult' => 'moderation_result',
            'defaultBranch' => 'default_branch',
            'avatarUrl' => 'avatar_url',
            'starCount' => 'star_count',
            'forksCount' => 'forks_count',
            'openIssuesCount' => 'open_issues_count',
            'openMergeRequestsCount' => 'open_merge_requests_count',
            'lastActivityAt' => 'last_activity_at',
            'namespace' => 'namespace',
            'emptyRepo' => 'empty_repo',
            'starred' => 'starred',
            'visibility' => 'visibility',
            'securityTag' => 'security_tag',
            'security' => 'security',
            'networkType' => 'network_type',
            'owner' => 'owner',
            'creator' => 'creator',
            'creatorId' => 'creator_id',
            'forkedFromRepository' => 'forked_from_repository',
            'uuid' => 'uuid',
            'ancestorIds' => 'ancestor_ids',
            'ancestorNames' => 'ancestor_names',
            'importStatus' => 'import_status',
            'importUrl' => 'import_url',
            'importError' => 'import_error',
            'repoType' => 'repo_type',
            'onlyAllowMergeIfPipelineSucceeds' => 'only_allow_merge_if_pipeline_succeeds',
            'requestAccessEnabled' => 'request_access_enabled',
            'onlyAllowMergeIfAllDiscussionsAreResolved' => 'only_allow_merge_if_all_discussions_are_resolved',
            'mergeMethod' => 'merge_method',
            'forkNetworkRepositories' => 'fork_network_repositories',
            'permissions' => 'permissions',
            'repositoryType' => 'repository_type',
            'statistics' => 'statistics',
            'branchCount' => 'branch_count',
            'tagCount' => 'tag_count',
            'labelCount' => 'label_count',
            'memberCount' => 'member_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 仓库ID。
    * description  **参数解释：** 仓库描述信息。
    * name  **参数解释：** 仓库名称。
    * nameWithNamespace  **参数解释：** 仓库完整名称。
    * path  **参数解释：** 仓库路径。
    * pathWithNamespace  **参数解释：** 仓库完整路径。
    * createdAt  **参数解释：** 创建时间。
    * updatedAt  **参数解释：** 更新时间。
    * archived  **参数解释：** 是否归档。
    * sshUrlToRepo  **参数解释：** 仓库ssh地址。
    * httpUrlToRepo  **参数解释：** 仓库http地址。
    * webUrl  **参数解释：** 仓库页面链接。
    * readmeUrl  **参数解释：** 仓库readme文件链接。
    * projectId  **参数解释：** 仓库所属项目ID。
    * projectName  **参数解释：** 仓库所属项目名称。
    * developMode  **参数解释：** 仓库开发模式。 **取值范围：** - normal - CR
    * moderationResult  **参数解释：** 审核状态。
    * defaultBranch  **参数解释：** 仓库默认分支 **约束限制：** 不涉及。
    * avatarUrl  **参数解释：** 仓库图标url **约束限制：** 不涉及。
    * starCount  **参数解释：** 关注数 **约束限制：** 不涉及。
    * forksCount  **参数解释：** fork数 **约束限制：** 不涉及。
    * openIssuesCount  **参数解释：** 开启issue数 **约束限制：** 不涉及。
    * openMergeRequestsCount  **参数解释：** 开启中的CR、MR数量 **约束限制：** 不涉及。
    * lastActivityAt  **参数解释：** 最后活跃时间 **约束限制：** 不涉及。
    * namespace  namespace
    * emptyRepo  **参数解释：** 空仓库 **约束限制：** 不涉及。
    * starred  **参数解释：** 是否已关注 **约束限制：** 不涉及。
    * visibility  **参数解释：** 仓库可见等级 **约束限制：** 不涉及。
    * securityTag  **参数解释：** 仓库保密等级 **约束限制：** 不涉及。
    * security  **参数解释：** 仓库保密等级 **约束限制：** 不涉及。
    * networkType  **参数解释：** 网络类型 **约束限制：** 不涉及。
    * owner  owner
    * creator  creator
    * creatorId  **参数解释：** 创建者ID **约束限制：** 不涉及。
    * forkedFromRepository  forkedFromRepository
    * uuid  **参数解释：** 仓库唯一标识符。 **约束限制：** 不涉及。
    * ancestorIds  **参数解释：** 祖先仓库ID列表。 **约束限制：** 不涉及。
    * ancestorNames  **参数解释：** 祖先仓库名称列表。 **约束限制：** 不涉及。
    * importStatus  **参数解释：** 导入状态。 **约束限制：** 不涉及。
    * importUrl  **参数解释：** 导入源地址。 **约束限制：** 不涉及。
    * importError  **参数解释：** 导入错误信息。 **约束限制：** 不涉及。
    * repoType  **参数解释：** 仓库类型。 **约束限制：** 不涉及。
    * onlyAllowMergeIfPipelineSucceeds  **参数解释：** 是否仅在流水线成功时允许合并。 **约束限制：** 不涉及。
    * requestAccessEnabled  **参数解释：** 是否启用访问请求。 **约束限制：** 不涉及。
    * onlyAllowMergeIfAllDiscussionsAreResolved  **参数解释：** 是否仅在所有检视意见解决时允许合并。 **约束限制：** 不涉及。
    * mergeMethod  **参数解释：** 合并方法。 **约束限制：** 不涉及。
    * forkNetworkRepositories  **参数解释：** fork关联仓库列表。 **约束限制：** 不涉及。
    * permissions  permissions
    * repositoryType  **参数解释：** 仓库类型。 **约束限制：** 不涉及。
    * statistics  statistics
    * branchCount  **参数解释：** 分支数量。 **约束限制：** 不涉及。
    * tagCount  **参数解释：** Tag数量。 **约束限制：** 不涉及。
    * labelCount  **参数解释：** 标签数量。 **约束限制：** 不涉及。
    * memberCount  **参数解释：** 成员数量。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'description' => 'setDescription',
            'name' => 'setName',
            'nameWithNamespace' => 'setNameWithNamespace',
            'path' => 'setPath',
            'pathWithNamespace' => 'setPathWithNamespace',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'archived' => 'setArchived',
            'sshUrlToRepo' => 'setSshUrlToRepo',
            'httpUrlToRepo' => 'setHttpUrlToRepo',
            'webUrl' => 'setWebUrl',
            'readmeUrl' => 'setReadmeUrl',
            'projectId' => 'setProjectId',
            'projectName' => 'setProjectName',
            'developMode' => 'setDevelopMode',
            'moderationResult' => 'setModerationResult',
            'defaultBranch' => 'setDefaultBranch',
            'avatarUrl' => 'setAvatarUrl',
            'starCount' => 'setStarCount',
            'forksCount' => 'setForksCount',
            'openIssuesCount' => 'setOpenIssuesCount',
            'openMergeRequestsCount' => 'setOpenMergeRequestsCount',
            'lastActivityAt' => 'setLastActivityAt',
            'namespace' => 'setNamespace',
            'emptyRepo' => 'setEmptyRepo',
            'starred' => 'setStarred',
            'visibility' => 'setVisibility',
            'securityTag' => 'setSecurityTag',
            'security' => 'setSecurity',
            'networkType' => 'setNetworkType',
            'owner' => 'setOwner',
            'creator' => 'setCreator',
            'creatorId' => 'setCreatorId',
            'forkedFromRepository' => 'setForkedFromRepository',
            'uuid' => 'setUuid',
            'ancestorIds' => 'setAncestorIds',
            'ancestorNames' => 'setAncestorNames',
            'importStatus' => 'setImportStatus',
            'importUrl' => 'setImportUrl',
            'importError' => 'setImportError',
            'repoType' => 'setRepoType',
            'onlyAllowMergeIfPipelineSucceeds' => 'setOnlyAllowMergeIfPipelineSucceeds',
            'requestAccessEnabled' => 'setRequestAccessEnabled',
            'onlyAllowMergeIfAllDiscussionsAreResolved' => 'setOnlyAllowMergeIfAllDiscussionsAreResolved',
            'mergeMethod' => 'setMergeMethod',
            'forkNetworkRepositories' => 'setForkNetworkRepositories',
            'permissions' => 'setPermissions',
            'repositoryType' => 'setRepositoryType',
            'statistics' => 'setStatistics',
            'branchCount' => 'setBranchCount',
            'tagCount' => 'setTagCount',
            'labelCount' => 'setLabelCount',
            'memberCount' => 'setMemberCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 仓库ID。
    * description  **参数解释：** 仓库描述信息。
    * name  **参数解释：** 仓库名称。
    * nameWithNamespace  **参数解释：** 仓库完整名称。
    * path  **参数解释：** 仓库路径。
    * pathWithNamespace  **参数解释：** 仓库完整路径。
    * createdAt  **参数解释：** 创建时间。
    * updatedAt  **参数解释：** 更新时间。
    * archived  **参数解释：** 是否归档。
    * sshUrlToRepo  **参数解释：** 仓库ssh地址。
    * httpUrlToRepo  **参数解释：** 仓库http地址。
    * webUrl  **参数解释：** 仓库页面链接。
    * readmeUrl  **参数解释：** 仓库readme文件链接。
    * projectId  **参数解释：** 仓库所属项目ID。
    * projectName  **参数解释：** 仓库所属项目名称。
    * developMode  **参数解释：** 仓库开发模式。 **取值范围：** - normal - CR
    * moderationResult  **参数解释：** 审核状态。
    * defaultBranch  **参数解释：** 仓库默认分支 **约束限制：** 不涉及。
    * avatarUrl  **参数解释：** 仓库图标url **约束限制：** 不涉及。
    * starCount  **参数解释：** 关注数 **约束限制：** 不涉及。
    * forksCount  **参数解释：** fork数 **约束限制：** 不涉及。
    * openIssuesCount  **参数解释：** 开启issue数 **约束限制：** 不涉及。
    * openMergeRequestsCount  **参数解释：** 开启中的CR、MR数量 **约束限制：** 不涉及。
    * lastActivityAt  **参数解释：** 最后活跃时间 **约束限制：** 不涉及。
    * namespace  namespace
    * emptyRepo  **参数解释：** 空仓库 **约束限制：** 不涉及。
    * starred  **参数解释：** 是否已关注 **约束限制：** 不涉及。
    * visibility  **参数解释：** 仓库可见等级 **约束限制：** 不涉及。
    * securityTag  **参数解释：** 仓库保密等级 **约束限制：** 不涉及。
    * security  **参数解释：** 仓库保密等级 **约束限制：** 不涉及。
    * networkType  **参数解释：** 网络类型 **约束限制：** 不涉及。
    * owner  owner
    * creator  creator
    * creatorId  **参数解释：** 创建者ID **约束限制：** 不涉及。
    * forkedFromRepository  forkedFromRepository
    * uuid  **参数解释：** 仓库唯一标识符。 **约束限制：** 不涉及。
    * ancestorIds  **参数解释：** 祖先仓库ID列表。 **约束限制：** 不涉及。
    * ancestorNames  **参数解释：** 祖先仓库名称列表。 **约束限制：** 不涉及。
    * importStatus  **参数解释：** 导入状态。 **约束限制：** 不涉及。
    * importUrl  **参数解释：** 导入源地址。 **约束限制：** 不涉及。
    * importError  **参数解释：** 导入错误信息。 **约束限制：** 不涉及。
    * repoType  **参数解释：** 仓库类型。 **约束限制：** 不涉及。
    * onlyAllowMergeIfPipelineSucceeds  **参数解释：** 是否仅在流水线成功时允许合并。 **约束限制：** 不涉及。
    * requestAccessEnabled  **参数解释：** 是否启用访问请求。 **约束限制：** 不涉及。
    * onlyAllowMergeIfAllDiscussionsAreResolved  **参数解释：** 是否仅在所有检视意见解决时允许合并。 **约束限制：** 不涉及。
    * mergeMethod  **参数解释：** 合并方法。 **约束限制：** 不涉及。
    * forkNetworkRepositories  **参数解释：** fork关联仓库列表。 **约束限制：** 不涉及。
    * permissions  permissions
    * repositoryType  **参数解释：** 仓库类型。 **约束限制：** 不涉及。
    * statistics  statistics
    * branchCount  **参数解释：** 分支数量。 **约束限制：** 不涉及。
    * tagCount  **参数解释：** Tag数量。 **约束限制：** 不涉及。
    * labelCount  **参数解释：** 标签数量。 **约束限制：** 不涉及。
    * memberCount  **参数解释：** 成员数量。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'description' => 'getDescription',
            'name' => 'getName',
            'nameWithNamespace' => 'getNameWithNamespace',
            'path' => 'getPath',
            'pathWithNamespace' => 'getPathWithNamespace',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'archived' => 'getArchived',
            'sshUrlToRepo' => 'getSshUrlToRepo',
            'httpUrlToRepo' => 'getHttpUrlToRepo',
            'webUrl' => 'getWebUrl',
            'readmeUrl' => 'getReadmeUrl',
            'projectId' => 'getProjectId',
            'projectName' => 'getProjectName',
            'developMode' => 'getDevelopMode',
            'moderationResult' => 'getModerationResult',
            'defaultBranch' => 'getDefaultBranch',
            'avatarUrl' => 'getAvatarUrl',
            'starCount' => 'getStarCount',
            'forksCount' => 'getForksCount',
            'openIssuesCount' => 'getOpenIssuesCount',
            'openMergeRequestsCount' => 'getOpenMergeRequestsCount',
            'lastActivityAt' => 'getLastActivityAt',
            'namespace' => 'getNamespace',
            'emptyRepo' => 'getEmptyRepo',
            'starred' => 'getStarred',
            'visibility' => 'getVisibility',
            'securityTag' => 'getSecurityTag',
            'security' => 'getSecurity',
            'networkType' => 'getNetworkType',
            'owner' => 'getOwner',
            'creator' => 'getCreator',
            'creatorId' => 'getCreatorId',
            'forkedFromRepository' => 'getForkedFromRepository',
            'uuid' => 'getUuid',
            'ancestorIds' => 'getAncestorIds',
            'ancestorNames' => 'getAncestorNames',
            'importStatus' => 'getImportStatus',
            'importUrl' => 'getImportUrl',
            'importError' => 'getImportError',
            'repoType' => 'getRepoType',
            'onlyAllowMergeIfPipelineSucceeds' => 'getOnlyAllowMergeIfPipelineSucceeds',
            'requestAccessEnabled' => 'getRequestAccessEnabled',
            'onlyAllowMergeIfAllDiscussionsAreResolved' => 'getOnlyAllowMergeIfAllDiscussionsAreResolved',
            'mergeMethod' => 'getMergeMethod',
            'forkNetworkRepositories' => 'getForkNetworkRepositories',
            'permissions' => 'getPermissions',
            'repositoryType' => 'getRepositoryType',
            'statistics' => 'getStatistics',
            'branchCount' => 'getBranchCount',
            'tagCount' => 'getTagCount',
            'labelCount' => 'getLabelCount',
            'memberCount' => 'getMemberCount'
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
    const DEVELOP_MODE_NORMAL = 'normal';
    const DEVELOP_MODE_CR = 'CR';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDevelopModeAllowableValues()
    {
        return [
            self::DEVELOP_MODE_NORMAL,
            self::DEVELOP_MODE_CR,
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nameWithNamespace'] = isset($data['nameWithNamespace']) ? $data['nameWithNamespace'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['pathWithNamespace'] = isset($data['pathWithNamespace']) ? $data['pathWithNamespace'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['archived'] = isset($data['archived']) ? $data['archived'] : null;
        $this->container['sshUrlToRepo'] = isset($data['sshUrlToRepo']) ? $data['sshUrlToRepo'] : null;
        $this->container['httpUrlToRepo'] = isset($data['httpUrlToRepo']) ? $data['httpUrlToRepo'] : null;
        $this->container['webUrl'] = isset($data['webUrl']) ? $data['webUrl'] : null;
        $this->container['readmeUrl'] = isset($data['readmeUrl']) ? $data['readmeUrl'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['developMode'] = isset($data['developMode']) ? $data['developMode'] : null;
        $this->container['moderationResult'] = isset($data['moderationResult']) ? $data['moderationResult'] : null;
        $this->container['defaultBranch'] = isset($data['defaultBranch']) ? $data['defaultBranch'] : null;
        $this->container['avatarUrl'] = isset($data['avatarUrl']) ? $data['avatarUrl'] : null;
        $this->container['starCount'] = isset($data['starCount']) ? $data['starCount'] : null;
        $this->container['forksCount'] = isset($data['forksCount']) ? $data['forksCount'] : null;
        $this->container['openIssuesCount'] = isset($data['openIssuesCount']) ? $data['openIssuesCount'] : null;
        $this->container['openMergeRequestsCount'] = isset($data['openMergeRequestsCount']) ? $data['openMergeRequestsCount'] : null;
        $this->container['lastActivityAt'] = isset($data['lastActivityAt']) ? $data['lastActivityAt'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['emptyRepo'] = isset($data['emptyRepo']) ? $data['emptyRepo'] : null;
        $this->container['starred'] = isset($data['starred']) ? $data['starred'] : null;
        $this->container['visibility'] = isset($data['visibility']) ? $data['visibility'] : null;
        $this->container['securityTag'] = isset($data['securityTag']) ? $data['securityTag'] : null;
        $this->container['security'] = isset($data['security']) ? $data['security'] : null;
        $this->container['networkType'] = isset($data['networkType']) ? $data['networkType'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['forkedFromRepository'] = isset($data['forkedFromRepository']) ? $data['forkedFromRepository'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['ancestorIds'] = isset($data['ancestorIds']) ? $data['ancestorIds'] : null;
        $this->container['ancestorNames'] = isset($data['ancestorNames']) ? $data['ancestorNames'] : null;
        $this->container['importStatus'] = isset($data['importStatus']) ? $data['importStatus'] : null;
        $this->container['importUrl'] = isset($data['importUrl']) ? $data['importUrl'] : null;
        $this->container['importError'] = isset($data['importError']) ? $data['importError'] : null;
        $this->container['repoType'] = isset($data['repoType']) ? $data['repoType'] : null;
        $this->container['onlyAllowMergeIfPipelineSucceeds'] = isset($data['onlyAllowMergeIfPipelineSucceeds']) ? $data['onlyAllowMergeIfPipelineSucceeds'] : null;
        $this->container['requestAccessEnabled'] = isset($data['requestAccessEnabled']) ? $data['requestAccessEnabled'] : null;
        $this->container['onlyAllowMergeIfAllDiscussionsAreResolved'] = isset($data['onlyAllowMergeIfAllDiscussionsAreResolved']) ? $data['onlyAllowMergeIfAllDiscussionsAreResolved'] : null;
        $this->container['mergeMethod'] = isset($data['mergeMethod']) ? $data['mergeMethod'] : null;
        $this->container['forkNetworkRepositories'] = isset($data['forkNetworkRepositories']) ? $data['forkNetworkRepositories'] : null;
        $this->container['permissions'] = isset($data['permissions']) ? $data['permissions'] : null;
        $this->container['repositoryType'] = isset($data['repositoryType']) ? $data['repositoryType'] : null;
        $this->container['statistics'] = isset($data['statistics']) ? $data['statistics'] : null;
        $this->container['branchCount'] = isset($data['branchCount']) ? $data['branchCount'] : null;
        $this->container['tagCount'] = isset($data['tagCount']) ? $data['tagCount'] : null;
        $this->container['labelCount'] = isset($data['labelCount']) ? $data['labelCount'] : null;
        $this->container['memberCount'] = isset($data['memberCount']) ? $data['memberCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && ($this->container['id'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 1)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1000)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 512)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['nameWithNamespace']) && (mb_strlen($this->container['nameWithNamespace']) > 512)) {
                $invalidProperties[] = "invalid value for 'nameWithNamespace', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['nameWithNamespace']) && (mb_strlen($this->container['nameWithNamespace']) < 1)) {
                $invalidProperties[] = "invalid value for 'nameWithNamespace', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) > 512)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) < 1)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pathWithNamespace']) && (mb_strlen($this->container['pathWithNamespace']) > 512)) {
                $invalidProperties[] = "invalid value for 'pathWithNamespace', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['pathWithNamespace']) && (mb_strlen($this->container['pathWithNamespace']) < 1)) {
                $invalidProperties[] = "invalid value for 'pathWithNamespace', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sshUrlToRepo']) && (mb_strlen($this->container['sshUrlToRepo']) > 512)) {
                $invalidProperties[] = "invalid value for 'sshUrlToRepo', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['sshUrlToRepo']) && (mb_strlen($this->container['sshUrlToRepo']) < 1)) {
                $invalidProperties[] = "invalid value for 'sshUrlToRepo', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['httpUrlToRepo']) && (mb_strlen($this->container['httpUrlToRepo']) > 512)) {
                $invalidProperties[] = "invalid value for 'httpUrlToRepo', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['httpUrlToRepo']) && (mb_strlen($this->container['httpUrlToRepo']) < 1)) {
                $invalidProperties[] = "invalid value for 'httpUrlToRepo', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['webUrl']) && (mb_strlen($this->container['webUrl']) > 512)) {
                $invalidProperties[] = "invalid value for 'webUrl', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['webUrl']) && (mb_strlen($this->container['webUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'webUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['readmeUrl']) && (mb_strlen($this->container['readmeUrl']) > 512)) {
                $invalidProperties[] = "invalid value for 'readmeUrl', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['readmeUrl']) && (mb_strlen($this->container['readmeUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'readmeUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 255)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectName']) && (mb_strlen($this->container['projectName']) > 512)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['projectName']) && (mb_strlen($this->container['projectName']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getDevelopModeAllowableValues();
                if (!is_null($this->container['developMode']) && !in_array($this->container['developMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'developMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['defaultBranch']) && (mb_strlen($this->container['defaultBranch']) > 255)) {
                $invalidProperties[] = "invalid value for 'defaultBranch', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['defaultBranch']) && (mb_strlen($this->container['defaultBranch']) < 1)) {
                $invalidProperties[] = "invalid value for 'defaultBranch', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['avatarUrl']) && (mb_strlen($this->container['avatarUrl']) > 255)) {
                $invalidProperties[] = "invalid value for 'avatarUrl', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['avatarUrl']) && (mb_strlen($this->container['avatarUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'avatarUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['starCount']) && ($this->container['starCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'starCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['starCount']) && ($this->container['starCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'starCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['forksCount']) && ($this->container['forksCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'forksCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['forksCount']) && ($this->container['forksCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'forksCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['openIssuesCount']) && ($this->container['openIssuesCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'openIssuesCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['openIssuesCount']) && ($this->container['openIssuesCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'openIssuesCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['openMergeRequestsCount']) && ($this->container['openMergeRequestsCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'openMergeRequestsCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['openMergeRequestsCount']) && ($this->container['openMergeRequestsCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'openMergeRequestsCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['lastActivityAt']) && (mb_strlen($this->container['lastActivityAt']) > 255)) {
                $invalidProperties[] = "invalid value for 'lastActivityAt', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['lastActivityAt']) && (mb_strlen($this->container['lastActivityAt']) < 1)) {
                $invalidProperties[] = "invalid value for 'lastActivityAt', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['visibility']) && (mb_strlen($this->container['visibility']) > 255)) {
                $invalidProperties[] = "invalid value for 'visibility', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['visibility']) && (mb_strlen($this->container['visibility']) < 1)) {
                $invalidProperties[] = "invalid value for 'visibility', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['securityTag']) && (mb_strlen($this->container['securityTag']) > 255)) {
                $invalidProperties[] = "invalid value for 'securityTag', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['securityTag']) && (mb_strlen($this->container['securityTag']) < 1)) {
                $invalidProperties[] = "invalid value for 'securityTag', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['security']) && (mb_strlen($this->container['security']) > 255)) {
                $invalidProperties[] = "invalid value for 'security', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['security']) && (mb_strlen($this->container['security']) < 1)) {
                $invalidProperties[] = "invalid value for 'security', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['networkType']) && (mb_strlen($this->container['networkType']) > 255)) {
                $invalidProperties[] = "invalid value for 'networkType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['networkType']) && (mb_strlen($this->container['networkType']) < 1)) {
                $invalidProperties[] = "invalid value for 'networkType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['creatorId']) && ($this->container['creatorId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'creatorId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['creatorId']) && ($this->container['creatorId'] < 1)) {
                $invalidProperties[] = "invalid value for 'creatorId', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['uuid']) && (mb_strlen($this->container['uuid']) > 255)) {
                $invalidProperties[] = "invalid value for 'uuid', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['uuid']) && (mb_strlen($this->container['uuid']) < 1)) {
                $invalidProperties[] = "invalid value for 'uuid', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['importStatus']) && (mb_strlen($this->container['importStatus']) > 255)) {
                $invalidProperties[] = "invalid value for 'importStatus', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['importStatus']) && (mb_strlen($this->container['importStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'importStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['importUrl']) && (mb_strlen($this->container['importUrl']) > 255)) {
                $invalidProperties[] = "invalid value for 'importUrl', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['importUrl']) && (mb_strlen($this->container['importUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'importUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['importError']) && (mb_strlen($this->container['importError']) > 255)) {
                $invalidProperties[] = "invalid value for 'importError', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['importError']) && (mb_strlen($this->container['importError']) < 1)) {
                $invalidProperties[] = "invalid value for 'importError', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['repoType']) && (mb_strlen($this->container['repoType']) > 255)) {
                $invalidProperties[] = "invalid value for 'repoType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['repoType']) && (mb_strlen($this->container['repoType']) < 1)) {
                $invalidProperties[] = "invalid value for 'repoType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['mergeMethod']) && (mb_strlen($this->container['mergeMethod']) > 255)) {
                $invalidProperties[] = "invalid value for 'mergeMethod', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['mergeMethod']) && (mb_strlen($this->container['mergeMethod']) < 1)) {
                $invalidProperties[] = "invalid value for 'mergeMethod', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['repositoryType']) && (mb_strlen($this->container['repositoryType']) > 255)) {
                $invalidProperties[] = "invalid value for 'repositoryType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['repositoryType']) && (mb_strlen($this->container['repositoryType']) < 1)) {
                $invalidProperties[] = "invalid value for 'repositoryType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['branchCount']) && ($this->container['branchCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'branchCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['branchCount']) && ($this->container['branchCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'branchCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tagCount']) && ($this->container['tagCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'tagCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['tagCount']) && ($this->container['tagCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'tagCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['labelCount']) && ($this->container['labelCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'labelCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['labelCount']) && ($this->container['labelCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'labelCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['memberCount']) && ($this->container['memberCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'memberCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['memberCount']) && ($this->container['memberCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'memberCount', must be bigger than or equal to 1.";
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
    *  **参数解释：** 仓库ID。
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id **参数解释：** 仓库ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：** 仓库描述信息。
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
    * @param string|null $description **参数解释：** 仓库描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 仓库名称。
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
    * @param string|null $name **参数解释：** 仓库名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets nameWithNamespace
    *  **参数解释：** 仓库完整名称。
    *
    * @return string|null
    */
    public function getNameWithNamespace()
    {
        return $this->container['nameWithNamespace'];
    }

    /**
    * Sets nameWithNamespace
    *
    * @param string|null $nameWithNamespace **参数解释：** 仓库完整名称。
    *
    * @return $this
    */
    public function setNameWithNamespace($nameWithNamespace)
    {
        $this->container['nameWithNamespace'] = $nameWithNamespace;
        return $this;
    }

    /**
    * Gets path
    *  **参数解释：** 仓库路径。
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path **参数解释：** 仓库路径。
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets pathWithNamespace
    *  **参数解释：** 仓库完整路径。
    *
    * @return string|null
    */
    public function getPathWithNamespace()
    {
        return $this->container['pathWithNamespace'];
    }

    /**
    * Sets pathWithNamespace
    *
    * @param string|null $pathWithNamespace **参数解释：** 仓库完整路径。
    *
    * @return $this
    */
    public function setPathWithNamespace($pathWithNamespace)
    {
        $this->container['pathWithNamespace'] = $pathWithNamespace;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释：** 创建时间。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt **参数解释：** 创建时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  **参数解释：** 更新时间。
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt **参数解释：** 更新时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets archived
    *  **参数解释：** 是否归档。
    *
    * @return bool|null
    */
    public function getArchived()
    {
        return $this->container['archived'];
    }

    /**
    * Sets archived
    *
    * @param bool|null $archived **参数解释：** 是否归档。
    *
    * @return $this
    */
    public function setArchived($archived)
    {
        $this->container['archived'] = $archived;
        return $this;
    }

    /**
    * Gets sshUrlToRepo
    *  **参数解释：** 仓库ssh地址。
    *
    * @return string|null
    */
    public function getSshUrlToRepo()
    {
        return $this->container['sshUrlToRepo'];
    }

    /**
    * Sets sshUrlToRepo
    *
    * @param string|null $sshUrlToRepo **参数解释：** 仓库ssh地址。
    *
    * @return $this
    */
    public function setSshUrlToRepo($sshUrlToRepo)
    {
        $this->container['sshUrlToRepo'] = $sshUrlToRepo;
        return $this;
    }

    /**
    * Gets httpUrlToRepo
    *  **参数解释：** 仓库http地址。
    *
    * @return string|null
    */
    public function getHttpUrlToRepo()
    {
        return $this->container['httpUrlToRepo'];
    }

    /**
    * Sets httpUrlToRepo
    *
    * @param string|null $httpUrlToRepo **参数解释：** 仓库http地址。
    *
    * @return $this
    */
    public function setHttpUrlToRepo($httpUrlToRepo)
    {
        $this->container['httpUrlToRepo'] = $httpUrlToRepo;
        return $this;
    }

    /**
    * Gets webUrl
    *  **参数解释：** 仓库页面链接。
    *
    * @return string|null
    */
    public function getWebUrl()
    {
        return $this->container['webUrl'];
    }

    /**
    * Sets webUrl
    *
    * @param string|null $webUrl **参数解释：** 仓库页面链接。
    *
    * @return $this
    */
    public function setWebUrl($webUrl)
    {
        $this->container['webUrl'] = $webUrl;
        return $this;
    }

    /**
    * Gets readmeUrl
    *  **参数解释：** 仓库readme文件链接。
    *
    * @return string|null
    */
    public function getReadmeUrl()
    {
        return $this->container['readmeUrl'];
    }

    /**
    * Sets readmeUrl
    *
    * @param string|null $readmeUrl **参数解释：** 仓库readme文件链接。
    *
    * @return $this
    */
    public function setReadmeUrl($readmeUrl)
    {
        $this->container['readmeUrl'] = $readmeUrl;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释：** 仓库所属项目ID。
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
    * @param string|null $projectId **参数解释：** 仓库所属项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets projectName
    *  **参数解释：** 仓库所属项目名称。
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
    * @param string|null $projectName **参数解释：** 仓库所属项目名称。
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
        return $this;
    }

    /**
    * Gets developMode
    *  **参数解释：** 仓库开发模式。 **取值范围：** - normal - CR
    *
    * @return string|null
    */
    public function getDevelopMode()
    {
        return $this->container['developMode'];
    }

    /**
    * Sets developMode
    *
    * @param string|null $developMode **参数解释：** 仓库开发模式。 **取值范围：** - normal - CR
    *
    * @return $this
    */
    public function setDevelopMode($developMode)
    {
        $this->container['developMode'] = $developMode;
        return $this;
    }

    /**
    * Gets moderationResult
    *  **参数解释：** 审核状态。
    *
    * @return bool|null
    */
    public function getModerationResult()
    {
        return $this->container['moderationResult'];
    }

    /**
    * Sets moderationResult
    *
    * @param bool|null $moderationResult **参数解释：** 审核状态。
    *
    * @return $this
    */
    public function setModerationResult($moderationResult)
    {
        $this->container['moderationResult'] = $moderationResult;
        return $this;
    }

    /**
    * Gets defaultBranch
    *  **参数解释：** 仓库默认分支 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getDefaultBranch()
    {
        return $this->container['defaultBranch'];
    }

    /**
    * Sets defaultBranch
    *
    * @param string|null $defaultBranch **参数解释：** 仓库默认分支 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setDefaultBranch($defaultBranch)
    {
        $this->container['defaultBranch'] = $defaultBranch;
        return $this;
    }

    /**
    * Gets avatarUrl
    *  **参数解释：** 仓库图标url **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getAvatarUrl()
    {
        return $this->container['avatarUrl'];
    }

    /**
    * Sets avatarUrl
    *
    * @param string|null $avatarUrl **参数解释：** 仓库图标url **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setAvatarUrl($avatarUrl)
    {
        $this->container['avatarUrl'] = $avatarUrl;
        return $this;
    }

    /**
    * Gets starCount
    *  **参数解释：** 关注数 **约束限制：** 不涉及。
    *
    * @return int|null
    */
    public function getStarCount()
    {
        return $this->container['starCount'];
    }

    /**
    * Sets starCount
    *
    * @param int|null $starCount **参数解释：** 关注数 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setStarCount($starCount)
    {
        $this->container['starCount'] = $starCount;
        return $this;
    }

    /**
    * Gets forksCount
    *  **参数解释：** fork数 **约束限制：** 不涉及。
    *
    * @return int|null
    */
    public function getForksCount()
    {
        return $this->container['forksCount'];
    }

    /**
    * Sets forksCount
    *
    * @param int|null $forksCount **参数解释：** fork数 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setForksCount($forksCount)
    {
        $this->container['forksCount'] = $forksCount;
        return $this;
    }

    /**
    * Gets openIssuesCount
    *  **参数解释：** 开启issue数 **约束限制：** 不涉及。
    *
    * @return int|null
    */
    public function getOpenIssuesCount()
    {
        return $this->container['openIssuesCount'];
    }

    /**
    * Sets openIssuesCount
    *
    * @param int|null $openIssuesCount **参数解释：** 开启issue数 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setOpenIssuesCount($openIssuesCount)
    {
        $this->container['openIssuesCount'] = $openIssuesCount;
        return $this;
    }

    /**
    * Gets openMergeRequestsCount
    *  **参数解释：** 开启中的CR、MR数量 **约束限制：** 不涉及。
    *
    * @return int|null
    */
    public function getOpenMergeRequestsCount()
    {
        return $this->container['openMergeRequestsCount'];
    }

    /**
    * Sets openMergeRequestsCount
    *
    * @param int|null $openMergeRequestsCount **参数解释：** 开启中的CR、MR数量 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setOpenMergeRequestsCount($openMergeRequestsCount)
    {
        $this->container['openMergeRequestsCount'] = $openMergeRequestsCount;
        return $this;
    }

    /**
    * Gets lastActivityAt
    *  **参数解释：** 最后活跃时间 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getLastActivityAt()
    {
        return $this->container['lastActivityAt'];
    }

    /**
    * Sets lastActivityAt
    *
    * @param string|null $lastActivityAt **参数解释：** 最后活跃时间 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setLastActivityAt($lastActivityAt)
    {
        $this->container['lastActivityAt'] = $lastActivityAt;
        return $this;
    }

    /**
    * Gets namespace
    *  namespace
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\NamespaceBasicDto|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\NamespaceBasicDto|null $namespace namespace
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets emptyRepo
    *  **参数解释：** 空仓库 **约束限制：** 不涉及。
    *
    * @return bool|null
    */
    public function getEmptyRepo()
    {
        return $this->container['emptyRepo'];
    }

    /**
    * Sets emptyRepo
    *
    * @param bool|null $emptyRepo **参数解释：** 空仓库 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setEmptyRepo($emptyRepo)
    {
        $this->container['emptyRepo'] = $emptyRepo;
        return $this;
    }

    /**
    * Gets starred
    *  **参数解释：** 是否已关注 **约束限制：** 不涉及。
    *
    * @return bool|null
    */
    public function getStarred()
    {
        return $this->container['starred'];
    }

    /**
    * Sets starred
    *
    * @param bool|null $starred **参数解释：** 是否已关注 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setStarred($starred)
    {
        $this->container['starred'] = $starred;
        return $this;
    }

    /**
    * Gets visibility
    *  **参数解释：** 仓库可见等级 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getVisibility()
    {
        return $this->container['visibility'];
    }

    /**
    * Sets visibility
    *
    * @param string|null $visibility **参数解释：** 仓库可见等级 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setVisibility($visibility)
    {
        $this->container['visibility'] = $visibility;
        return $this;
    }

    /**
    * Gets securityTag
    *  **参数解释：** 仓库保密等级 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getSecurityTag()
    {
        return $this->container['securityTag'];
    }

    /**
    * Sets securityTag
    *
    * @param string|null $securityTag **参数解释：** 仓库保密等级 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setSecurityTag($securityTag)
    {
        $this->container['securityTag'] = $securityTag;
        return $this;
    }

    /**
    * Gets security
    *  **参数解释：** 仓库保密等级 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getSecurity()
    {
        return $this->container['security'];
    }

    /**
    * Sets security
    *
    * @param string|null $security **参数解释：** 仓库保密等级 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setSecurity($security)
    {
        $this->container['security'] = $security;
        return $this;
    }

    /**
    * Gets networkType
    *  **参数解释：** 网络类型 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getNetworkType()
    {
        return $this->container['networkType'];
    }

    /**
    * Sets networkType
    *
    * @param string|null $networkType **参数解释：** 网络类型 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setNetworkType($networkType)
    {
        $this->container['networkType'] = $networkType;
        return $this;
    }

    /**
    * Gets owner
    *  owner
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\RepositoryUserBasicDto|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\RepositoryUserBasicDto|null $owner owner
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets creator
    *  creator
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\RepositoryUserBasicDto|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\RepositoryUserBasicDto|null $creator creator
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets creatorId
    *  **参数解释：** 创建者ID **约束限制：** 不涉及。
    *
    * @return int|null
    */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
    * Sets creatorId
    *
    * @param int|null $creatorId **参数解释：** 创建者ID **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;
        return $this;
    }

    /**
    * Gets forkedFromRepository
    *  forkedFromRepository
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\RepositorySimpleDto|null
    */
    public function getForkedFromRepository()
    {
        return $this->container['forkedFromRepository'];
    }

    /**
    * Sets forkedFromRepository
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\RepositorySimpleDto|null $forkedFromRepository forkedFromRepository
    *
    * @return $this
    */
    public function setForkedFromRepository($forkedFromRepository)
    {
        $this->container['forkedFromRepository'] = $forkedFromRepository;
        return $this;
    }

    /**
    * Gets uuid
    *  **参数解释：** 仓库唯一标识符。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
    * Sets uuid
    *
    * @param string|null $uuid **参数解释：** 仓库唯一标识符。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;
        return $this;
    }

    /**
    * Gets ancestorIds
    *  **参数解释：** 祖先仓库ID列表。 **约束限制：** 不涉及。
    *
    * @return int[]|null
    */
    public function getAncestorIds()
    {
        return $this->container['ancestorIds'];
    }

    /**
    * Sets ancestorIds
    *
    * @param int[]|null $ancestorIds **参数解释：** 祖先仓库ID列表。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setAncestorIds($ancestorIds)
    {
        $this->container['ancestorIds'] = $ancestorIds;
        return $this;
    }

    /**
    * Gets ancestorNames
    *  **参数解释：** 祖先仓库名称列表。 **约束限制：** 不涉及。
    *
    * @return string[]|null
    */
    public function getAncestorNames()
    {
        return $this->container['ancestorNames'];
    }

    /**
    * Sets ancestorNames
    *
    * @param string[]|null $ancestorNames **参数解释：** 祖先仓库名称列表。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setAncestorNames($ancestorNames)
    {
        $this->container['ancestorNames'] = $ancestorNames;
        return $this;
    }

    /**
    * Gets importStatus
    *  **参数解释：** 导入状态。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getImportStatus()
    {
        return $this->container['importStatus'];
    }

    /**
    * Sets importStatus
    *
    * @param string|null $importStatus **参数解释：** 导入状态。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setImportStatus($importStatus)
    {
        $this->container['importStatus'] = $importStatus;
        return $this;
    }

    /**
    * Gets importUrl
    *  **参数解释：** 导入源地址。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getImportUrl()
    {
        return $this->container['importUrl'];
    }

    /**
    * Sets importUrl
    *
    * @param string|null $importUrl **参数解释：** 导入源地址。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setImportUrl($importUrl)
    {
        $this->container['importUrl'] = $importUrl;
        return $this;
    }

    /**
    * Gets importError
    *  **参数解释：** 导入错误信息。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getImportError()
    {
        return $this->container['importError'];
    }

    /**
    * Sets importError
    *
    * @param string|null $importError **参数解释：** 导入错误信息。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setImportError($importError)
    {
        $this->container['importError'] = $importError;
        return $this;
    }

    /**
    * Gets repoType
    *  **参数解释：** 仓库类型。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getRepoType()
    {
        return $this->container['repoType'];
    }

    /**
    * Sets repoType
    *
    * @param string|null $repoType **参数解释：** 仓库类型。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setRepoType($repoType)
    {
        $this->container['repoType'] = $repoType;
        return $this;
    }

    /**
    * Gets onlyAllowMergeIfPipelineSucceeds
    *  **参数解释：** 是否仅在流水线成功时允许合并。 **约束限制：** 不涉及。
    *
    * @return bool|null
    */
    public function getOnlyAllowMergeIfPipelineSucceeds()
    {
        return $this->container['onlyAllowMergeIfPipelineSucceeds'];
    }

    /**
    * Sets onlyAllowMergeIfPipelineSucceeds
    *
    * @param bool|null $onlyAllowMergeIfPipelineSucceeds **参数解释：** 是否仅在流水线成功时允许合并。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setOnlyAllowMergeIfPipelineSucceeds($onlyAllowMergeIfPipelineSucceeds)
    {
        $this->container['onlyAllowMergeIfPipelineSucceeds'] = $onlyAllowMergeIfPipelineSucceeds;
        return $this;
    }

    /**
    * Gets requestAccessEnabled
    *  **参数解释：** 是否启用访问请求。 **约束限制：** 不涉及。
    *
    * @return bool|null
    */
    public function getRequestAccessEnabled()
    {
        return $this->container['requestAccessEnabled'];
    }

    /**
    * Sets requestAccessEnabled
    *
    * @param bool|null $requestAccessEnabled **参数解释：** 是否启用访问请求。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setRequestAccessEnabled($requestAccessEnabled)
    {
        $this->container['requestAccessEnabled'] = $requestAccessEnabled;
        return $this;
    }

    /**
    * Gets onlyAllowMergeIfAllDiscussionsAreResolved
    *  **参数解释：** 是否仅在所有检视意见解决时允许合并。 **约束限制：** 不涉及。
    *
    * @return bool|null
    */
    public function getOnlyAllowMergeIfAllDiscussionsAreResolved()
    {
        return $this->container['onlyAllowMergeIfAllDiscussionsAreResolved'];
    }

    /**
    * Sets onlyAllowMergeIfAllDiscussionsAreResolved
    *
    * @param bool|null $onlyAllowMergeIfAllDiscussionsAreResolved **参数解释：** 是否仅在所有检视意见解决时允许合并。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setOnlyAllowMergeIfAllDiscussionsAreResolved($onlyAllowMergeIfAllDiscussionsAreResolved)
    {
        $this->container['onlyAllowMergeIfAllDiscussionsAreResolved'] = $onlyAllowMergeIfAllDiscussionsAreResolved;
        return $this;
    }

    /**
    * Gets mergeMethod
    *  **参数解释：** 合并方法。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getMergeMethod()
    {
        return $this->container['mergeMethod'];
    }

    /**
    * Sets mergeMethod
    *
    * @param string|null $mergeMethod **参数解释：** 合并方法。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setMergeMethod($mergeMethod)
    {
        $this->container['mergeMethod'] = $mergeMethod;
        return $this;
    }

    /**
    * Gets forkNetworkRepositories
    *  **参数解释：** fork关联仓库列表。 **约束限制：** 不涉及。
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\RepositoryIdentityDto[]|null
    */
    public function getForkNetworkRepositories()
    {
        return $this->container['forkNetworkRepositories'];
    }

    /**
    * Sets forkNetworkRepositories
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\RepositoryIdentityDto[]|null $forkNetworkRepositories **参数解释：** fork关联仓库列表。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setForkNetworkRepositories($forkNetworkRepositories)
    {
        $this->container['forkNetworkRepositories'] = $forkNetworkRepositories;
        return $this;
    }

    /**
    * Gets permissions
    *  permissions
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\PermissionsDto|null
    */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
    * Sets permissions
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\PermissionsDto|null $permissions permissions
    *
    * @return $this
    */
    public function setPermissions($permissions)
    {
        $this->container['permissions'] = $permissions;
        return $this;
    }

    /**
    * Gets repositoryType
    *  **参数解释：** 仓库类型。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getRepositoryType()
    {
        return $this->container['repositoryType'];
    }

    /**
    * Sets repositoryType
    *
    * @param string|null $repositoryType **参数解释：** 仓库类型。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setRepositoryType($repositoryType)
    {
        $this->container['repositoryType'] = $repositoryType;
        return $this;
    }

    /**
    * Gets statistics
    *  statistics
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\RepositoryStatisticsDto|null
    */
    public function getStatistics()
    {
        return $this->container['statistics'];
    }

    /**
    * Sets statistics
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\RepositoryStatisticsDto|null $statistics statistics
    *
    * @return $this
    */
    public function setStatistics($statistics)
    {
        $this->container['statistics'] = $statistics;
        return $this;
    }

    /**
    * Gets branchCount
    *  **参数解释：** 分支数量。 **约束限制：** 不涉及。
    *
    * @return int|null
    */
    public function getBranchCount()
    {
        return $this->container['branchCount'];
    }

    /**
    * Sets branchCount
    *
    * @param int|null $branchCount **参数解释：** 分支数量。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setBranchCount($branchCount)
    {
        $this->container['branchCount'] = $branchCount;
        return $this;
    }

    /**
    * Gets tagCount
    *  **参数解释：** Tag数量。 **约束限制：** 不涉及。
    *
    * @return int|null
    */
    public function getTagCount()
    {
        return $this->container['tagCount'];
    }

    /**
    * Sets tagCount
    *
    * @param int|null $tagCount **参数解释：** Tag数量。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setTagCount($tagCount)
    {
        $this->container['tagCount'] = $tagCount;
        return $this;
    }

    /**
    * Gets labelCount
    *  **参数解释：** 标签数量。 **约束限制：** 不涉及。
    *
    * @return int|null
    */
    public function getLabelCount()
    {
        return $this->container['labelCount'];
    }

    /**
    * Sets labelCount
    *
    * @param int|null $labelCount **参数解释：** 标签数量。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setLabelCount($labelCount)
    {
        $this->container['labelCount'] = $labelCount;
        return $this;
    }

    /**
    * Gets memberCount
    *  **参数解释：** 成员数量。 **约束限制：** 不涉及。
    *
    * @return int|null
    */
    public function getMemberCount()
    {
        return $this->container['memberCount'];
    }

    /**
    * Sets memberCount
    *
    * @param int|null $memberCount **参数解释：** 成员数量。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setMemberCount($memberCount)
    {
        $this->container['memberCount'] = $memberCount;
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

