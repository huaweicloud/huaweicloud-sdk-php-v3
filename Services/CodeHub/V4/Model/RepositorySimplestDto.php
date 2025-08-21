<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RepositorySimplestDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RepositorySimplestDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 仓库ID **约束限制：** 不涉及。
    * name  **参数解释：** 仓库名称。 **约束限制：** 不涉及。
    * namespace  **参数解释：** 命名空间。 **约束限制：** 不涉及。
    * path  **参数解释：** 仓库路径。 **约束限制：** 不涉及。
    * developMode  **参数解释：** 开发模式。 **约束限制：** 不涉及。
    * visibility  **参数解释：** 可见性。 **约束限制：** 不涉及。
    * security  **参数解释：** 安全级别。 **约束限制：** 不涉及。
    * starCount  **参数解释：** 关注数。 **约束限制：** 不涉及。
    * forksCount  **参数解释：** Fork数。 **约束限制：** 不涉及。
    * openIssuesCount  **参数解释：** 开放的问题数。 **约束限制：** 不涉及。
    * openMergeRequestsCount  **参数解释：** 开放的合并请求数。 **约束限制：** 不涉及。
    * starred  **参数解释：** 是否已关注。 **约束限制：** 不涉及。
    * nameWithNamespace  **参数解释：** 包含命名空间的仓库名称。 **约束限制：** 不涉及。
    * lastActivityAt  **参数解释：** 最后活跃时间。 **约束限制：** 不涉及。
    * forkedFromRepository  forkedFromRepository
    * permissions  **参数解释：** 权限。 **约束限制：** 不涉及。
    * archived  **参数解释：** 是否归档。 **约束限制：** 不涉及。
    * memberCount  **参数解释：** 成员数。 **约束限制：** 不涉及。
    * uuid  **参数解释：** 仓库唯一标识符。 **约束限制：** 不涉及。
    * description  **参数解释：** 仓库描述。 **约束限制：** 不涉及。
    * lastRepositoryUpdatedAt  **参数解释：** 最后更新时间。 **约束限制：** 不涉及。
    * sshUrlToRepo  **参数解释：** SSH仓库URL。 **约束限制：** 不涉及。
    * httpUrlToRepo  **参数解释：** HTTP仓库URL。 **约束限制：** 不涉及。
    * status  **参数解释：** 仓库状态。 **约束限制：** 不涉及。
    * activeStatistic  **参数解释：** 活跃统计。 **约束限制：** 不涉及。
    * projectName  **参数解释：** 项目名称。 **约束限制：** 不涉及。
    * projectId  **参数解释：** 项目ID。 **约束限制：** 不涉及。
    * projectIsDelete  **参数解释：** 项目是否删除。 **约束限制：** 不涉及。
    * creatorId  **参数解释：** 创建者ID **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'name' => 'string',
            'namespace' => 'string',
            'path' => 'string',
            'developMode' => 'string',
            'visibility' => 'string',
            'security' => 'string',
            'starCount' => 'int',
            'forksCount' => 'int',
            'openIssuesCount' => 'int',
            'openMergeRequestsCount' => 'int',
            'starred' => 'bool',
            'nameWithNamespace' => 'string',
            'lastActivityAt' => 'string',
            'forkedFromRepository' => '\HuaweiCloud\SDK\CodeHub\V4\Model\ForkedFromRepositorySimplestDto',
            'permissions' => 'int',
            'archived' => 'bool',
            'memberCount' => 'int',
            'uuid' => 'string',
            'description' => 'string',
            'lastRepositoryUpdatedAt' => 'string',
            'sshUrlToRepo' => 'string',
            'httpUrlToRepo' => 'string',
            'status' => 'string',
            'activeStatistic' => 'int[]',
            'projectName' => 'string',
            'projectId' => 'string',
            'projectIsDelete' => 'bool',
            'creatorId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 仓库ID **约束限制：** 不涉及。
    * name  **参数解释：** 仓库名称。 **约束限制：** 不涉及。
    * namespace  **参数解释：** 命名空间。 **约束限制：** 不涉及。
    * path  **参数解释：** 仓库路径。 **约束限制：** 不涉及。
    * developMode  **参数解释：** 开发模式。 **约束限制：** 不涉及。
    * visibility  **参数解释：** 可见性。 **约束限制：** 不涉及。
    * security  **参数解释：** 安全级别。 **约束限制：** 不涉及。
    * starCount  **参数解释：** 关注数。 **约束限制：** 不涉及。
    * forksCount  **参数解释：** Fork数。 **约束限制：** 不涉及。
    * openIssuesCount  **参数解释：** 开放的问题数。 **约束限制：** 不涉及。
    * openMergeRequestsCount  **参数解释：** 开放的合并请求数。 **约束限制：** 不涉及。
    * starred  **参数解释：** 是否已关注。 **约束限制：** 不涉及。
    * nameWithNamespace  **参数解释：** 包含命名空间的仓库名称。 **约束限制：** 不涉及。
    * lastActivityAt  **参数解释：** 最后活跃时间。 **约束限制：** 不涉及。
    * forkedFromRepository  forkedFromRepository
    * permissions  **参数解释：** 权限。 **约束限制：** 不涉及。
    * archived  **参数解释：** 是否归档。 **约束限制：** 不涉及。
    * memberCount  **参数解释：** 成员数。 **约束限制：** 不涉及。
    * uuid  **参数解释：** 仓库唯一标识符。 **约束限制：** 不涉及。
    * description  **参数解释：** 仓库描述。 **约束限制：** 不涉及。
    * lastRepositoryUpdatedAt  **参数解释：** 最后更新时间。 **约束限制：** 不涉及。
    * sshUrlToRepo  **参数解释：** SSH仓库URL。 **约束限制：** 不涉及。
    * httpUrlToRepo  **参数解释：** HTTP仓库URL。 **约束限制：** 不涉及。
    * status  **参数解释：** 仓库状态。 **约束限制：** 不涉及。
    * activeStatistic  **参数解释：** 活跃统计。 **约束限制：** 不涉及。
    * projectName  **参数解释：** 项目名称。 **约束限制：** 不涉及。
    * projectId  **参数解释：** 项目ID。 **约束限制：** 不涉及。
    * projectIsDelete  **参数解释：** 项目是否删除。 **约束限制：** 不涉及。
    * creatorId  **参数解释：** 创建者ID **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'namespace' => null,
        'path' => null,
        'developMode' => null,
        'visibility' => null,
        'security' => null,
        'starCount' => null,
        'forksCount' => null,
        'openIssuesCount' => null,
        'openMergeRequestsCount' => null,
        'starred' => null,
        'nameWithNamespace' => null,
        'lastActivityAt' => null,
        'forkedFromRepository' => null,
        'permissions' => null,
        'archived' => null,
        'memberCount' => null,
        'uuid' => null,
        'description' => null,
        'lastRepositoryUpdatedAt' => null,
        'sshUrlToRepo' => null,
        'httpUrlToRepo' => null,
        'status' => null,
        'activeStatistic' => null,
        'projectName' => null,
        'projectId' => null,
        'projectIsDelete' => null,
        'creatorId' => null
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
    * id  **参数解释：** 仓库ID **约束限制：** 不涉及。
    * name  **参数解释：** 仓库名称。 **约束限制：** 不涉及。
    * namespace  **参数解释：** 命名空间。 **约束限制：** 不涉及。
    * path  **参数解释：** 仓库路径。 **约束限制：** 不涉及。
    * developMode  **参数解释：** 开发模式。 **约束限制：** 不涉及。
    * visibility  **参数解释：** 可见性。 **约束限制：** 不涉及。
    * security  **参数解释：** 安全级别。 **约束限制：** 不涉及。
    * starCount  **参数解释：** 关注数。 **约束限制：** 不涉及。
    * forksCount  **参数解释：** Fork数。 **约束限制：** 不涉及。
    * openIssuesCount  **参数解释：** 开放的问题数。 **约束限制：** 不涉及。
    * openMergeRequestsCount  **参数解释：** 开放的合并请求数。 **约束限制：** 不涉及。
    * starred  **参数解释：** 是否已关注。 **约束限制：** 不涉及。
    * nameWithNamespace  **参数解释：** 包含命名空间的仓库名称。 **约束限制：** 不涉及。
    * lastActivityAt  **参数解释：** 最后活跃时间。 **约束限制：** 不涉及。
    * forkedFromRepository  forkedFromRepository
    * permissions  **参数解释：** 权限。 **约束限制：** 不涉及。
    * archived  **参数解释：** 是否归档。 **约束限制：** 不涉及。
    * memberCount  **参数解释：** 成员数。 **约束限制：** 不涉及。
    * uuid  **参数解释：** 仓库唯一标识符。 **约束限制：** 不涉及。
    * description  **参数解释：** 仓库描述。 **约束限制：** 不涉及。
    * lastRepositoryUpdatedAt  **参数解释：** 最后更新时间。 **约束限制：** 不涉及。
    * sshUrlToRepo  **参数解释：** SSH仓库URL。 **约束限制：** 不涉及。
    * httpUrlToRepo  **参数解释：** HTTP仓库URL。 **约束限制：** 不涉及。
    * status  **参数解释：** 仓库状态。 **约束限制：** 不涉及。
    * activeStatistic  **参数解释：** 活跃统计。 **约束限制：** 不涉及。
    * projectName  **参数解释：** 项目名称。 **约束限制：** 不涉及。
    * projectId  **参数解释：** 项目ID。 **约束限制：** 不涉及。
    * projectIsDelete  **参数解释：** 项目是否删除。 **约束限制：** 不涉及。
    * creatorId  **参数解释：** 创建者ID **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'namespace' => 'namespace',
            'path' => 'path',
            'developMode' => 'develop_mode',
            'visibility' => 'visibility',
            'security' => 'security',
            'starCount' => 'star_count',
            'forksCount' => 'forks_count',
            'openIssuesCount' => 'open_issues_count',
            'openMergeRequestsCount' => 'open_merge_requests_count',
            'starred' => 'starred',
            'nameWithNamespace' => 'name_with_namespace',
            'lastActivityAt' => 'last_activity_at',
            'forkedFromRepository' => 'forked_from_repository',
            'permissions' => 'permissions',
            'archived' => 'archived',
            'memberCount' => 'member_count',
            'uuid' => 'uuid',
            'description' => 'description',
            'lastRepositoryUpdatedAt' => 'last_repository_updated_at',
            'sshUrlToRepo' => 'ssh_url_to_repo',
            'httpUrlToRepo' => 'http_url_to_repo',
            'status' => 'status',
            'activeStatistic' => 'active_statistic',
            'projectName' => 'project_name',
            'projectId' => 'project_id',
            'projectIsDelete' => 'project_is_delete',
            'creatorId' => 'creator_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 仓库ID **约束限制：** 不涉及。
    * name  **参数解释：** 仓库名称。 **约束限制：** 不涉及。
    * namespace  **参数解释：** 命名空间。 **约束限制：** 不涉及。
    * path  **参数解释：** 仓库路径。 **约束限制：** 不涉及。
    * developMode  **参数解释：** 开发模式。 **约束限制：** 不涉及。
    * visibility  **参数解释：** 可见性。 **约束限制：** 不涉及。
    * security  **参数解释：** 安全级别。 **约束限制：** 不涉及。
    * starCount  **参数解释：** 关注数。 **约束限制：** 不涉及。
    * forksCount  **参数解释：** Fork数。 **约束限制：** 不涉及。
    * openIssuesCount  **参数解释：** 开放的问题数。 **约束限制：** 不涉及。
    * openMergeRequestsCount  **参数解释：** 开放的合并请求数。 **约束限制：** 不涉及。
    * starred  **参数解释：** 是否已关注。 **约束限制：** 不涉及。
    * nameWithNamespace  **参数解释：** 包含命名空间的仓库名称。 **约束限制：** 不涉及。
    * lastActivityAt  **参数解释：** 最后活跃时间。 **约束限制：** 不涉及。
    * forkedFromRepository  forkedFromRepository
    * permissions  **参数解释：** 权限。 **约束限制：** 不涉及。
    * archived  **参数解释：** 是否归档。 **约束限制：** 不涉及。
    * memberCount  **参数解释：** 成员数。 **约束限制：** 不涉及。
    * uuid  **参数解释：** 仓库唯一标识符。 **约束限制：** 不涉及。
    * description  **参数解释：** 仓库描述。 **约束限制：** 不涉及。
    * lastRepositoryUpdatedAt  **参数解释：** 最后更新时间。 **约束限制：** 不涉及。
    * sshUrlToRepo  **参数解释：** SSH仓库URL。 **约束限制：** 不涉及。
    * httpUrlToRepo  **参数解释：** HTTP仓库URL。 **约束限制：** 不涉及。
    * status  **参数解释：** 仓库状态。 **约束限制：** 不涉及。
    * activeStatistic  **参数解释：** 活跃统计。 **约束限制：** 不涉及。
    * projectName  **参数解释：** 项目名称。 **约束限制：** 不涉及。
    * projectId  **参数解释：** 项目ID。 **约束限制：** 不涉及。
    * projectIsDelete  **参数解释：** 项目是否删除。 **约束限制：** 不涉及。
    * creatorId  **参数解释：** 创建者ID **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'namespace' => 'setNamespace',
            'path' => 'setPath',
            'developMode' => 'setDevelopMode',
            'visibility' => 'setVisibility',
            'security' => 'setSecurity',
            'starCount' => 'setStarCount',
            'forksCount' => 'setForksCount',
            'openIssuesCount' => 'setOpenIssuesCount',
            'openMergeRequestsCount' => 'setOpenMergeRequestsCount',
            'starred' => 'setStarred',
            'nameWithNamespace' => 'setNameWithNamespace',
            'lastActivityAt' => 'setLastActivityAt',
            'forkedFromRepository' => 'setForkedFromRepository',
            'permissions' => 'setPermissions',
            'archived' => 'setArchived',
            'memberCount' => 'setMemberCount',
            'uuid' => 'setUuid',
            'description' => 'setDescription',
            'lastRepositoryUpdatedAt' => 'setLastRepositoryUpdatedAt',
            'sshUrlToRepo' => 'setSshUrlToRepo',
            'httpUrlToRepo' => 'setHttpUrlToRepo',
            'status' => 'setStatus',
            'activeStatistic' => 'setActiveStatistic',
            'projectName' => 'setProjectName',
            'projectId' => 'setProjectId',
            'projectIsDelete' => 'setProjectIsDelete',
            'creatorId' => 'setCreatorId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 仓库ID **约束限制：** 不涉及。
    * name  **参数解释：** 仓库名称。 **约束限制：** 不涉及。
    * namespace  **参数解释：** 命名空间。 **约束限制：** 不涉及。
    * path  **参数解释：** 仓库路径。 **约束限制：** 不涉及。
    * developMode  **参数解释：** 开发模式。 **约束限制：** 不涉及。
    * visibility  **参数解释：** 可见性。 **约束限制：** 不涉及。
    * security  **参数解释：** 安全级别。 **约束限制：** 不涉及。
    * starCount  **参数解释：** 关注数。 **约束限制：** 不涉及。
    * forksCount  **参数解释：** Fork数。 **约束限制：** 不涉及。
    * openIssuesCount  **参数解释：** 开放的问题数。 **约束限制：** 不涉及。
    * openMergeRequestsCount  **参数解释：** 开放的合并请求数。 **约束限制：** 不涉及。
    * starred  **参数解释：** 是否已关注。 **约束限制：** 不涉及。
    * nameWithNamespace  **参数解释：** 包含命名空间的仓库名称。 **约束限制：** 不涉及。
    * lastActivityAt  **参数解释：** 最后活跃时间。 **约束限制：** 不涉及。
    * forkedFromRepository  forkedFromRepository
    * permissions  **参数解释：** 权限。 **约束限制：** 不涉及。
    * archived  **参数解释：** 是否归档。 **约束限制：** 不涉及。
    * memberCount  **参数解释：** 成员数。 **约束限制：** 不涉及。
    * uuid  **参数解释：** 仓库唯一标识符。 **约束限制：** 不涉及。
    * description  **参数解释：** 仓库描述。 **约束限制：** 不涉及。
    * lastRepositoryUpdatedAt  **参数解释：** 最后更新时间。 **约束限制：** 不涉及。
    * sshUrlToRepo  **参数解释：** SSH仓库URL。 **约束限制：** 不涉及。
    * httpUrlToRepo  **参数解释：** HTTP仓库URL。 **约束限制：** 不涉及。
    * status  **参数解释：** 仓库状态。 **约束限制：** 不涉及。
    * activeStatistic  **参数解释：** 活跃统计。 **约束限制：** 不涉及。
    * projectName  **参数解释：** 项目名称。 **约束限制：** 不涉及。
    * projectId  **参数解释：** 项目ID。 **约束限制：** 不涉及。
    * projectIsDelete  **参数解释：** 项目是否删除。 **约束限制：** 不涉及。
    * creatorId  **参数解释：** 创建者ID **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'namespace' => 'getNamespace',
            'path' => 'getPath',
            'developMode' => 'getDevelopMode',
            'visibility' => 'getVisibility',
            'security' => 'getSecurity',
            'starCount' => 'getStarCount',
            'forksCount' => 'getForksCount',
            'openIssuesCount' => 'getOpenIssuesCount',
            'openMergeRequestsCount' => 'getOpenMergeRequestsCount',
            'starred' => 'getStarred',
            'nameWithNamespace' => 'getNameWithNamespace',
            'lastActivityAt' => 'getLastActivityAt',
            'forkedFromRepository' => 'getForkedFromRepository',
            'permissions' => 'getPermissions',
            'archived' => 'getArchived',
            'memberCount' => 'getMemberCount',
            'uuid' => 'getUuid',
            'description' => 'getDescription',
            'lastRepositoryUpdatedAt' => 'getLastRepositoryUpdatedAt',
            'sshUrlToRepo' => 'getSshUrlToRepo',
            'httpUrlToRepo' => 'getHttpUrlToRepo',
            'status' => 'getStatus',
            'activeStatistic' => 'getActiveStatistic',
            'projectName' => 'getProjectName',
            'projectId' => 'getProjectId',
            'projectIsDelete' => 'getProjectIsDelete',
            'creatorId' => 'getCreatorId'
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
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['developMode'] = isset($data['developMode']) ? $data['developMode'] : null;
        $this->container['visibility'] = isset($data['visibility']) ? $data['visibility'] : null;
        $this->container['security'] = isset($data['security']) ? $data['security'] : null;
        $this->container['starCount'] = isset($data['starCount']) ? $data['starCount'] : null;
        $this->container['forksCount'] = isset($data['forksCount']) ? $data['forksCount'] : null;
        $this->container['openIssuesCount'] = isset($data['openIssuesCount']) ? $data['openIssuesCount'] : null;
        $this->container['openMergeRequestsCount'] = isset($data['openMergeRequestsCount']) ? $data['openMergeRequestsCount'] : null;
        $this->container['starred'] = isset($data['starred']) ? $data['starred'] : null;
        $this->container['nameWithNamespace'] = isset($data['nameWithNamespace']) ? $data['nameWithNamespace'] : null;
        $this->container['lastActivityAt'] = isset($data['lastActivityAt']) ? $data['lastActivityAt'] : null;
        $this->container['forkedFromRepository'] = isset($data['forkedFromRepository']) ? $data['forkedFromRepository'] : null;
        $this->container['permissions'] = isset($data['permissions']) ? $data['permissions'] : null;
        $this->container['archived'] = isset($data['archived']) ? $data['archived'] : null;
        $this->container['memberCount'] = isset($data['memberCount']) ? $data['memberCount'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['lastRepositoryUpdatedAt'] = isset($data['lastRepositoryUpdatedAt']) ? $data['lastRepositoryUpdatedAt'] : null;
        $this->container['sshUrlToRepo'] = isset($data['sshUrlToRepo']) ? $data['sshUrlToRepo'] : null;
        $this->container['httpUrlToRepo'] = isset($data['httpUrlToRepo']) ? $data['httpUrlToRepo'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['activeStatistic'] = isset($data['activeStatistic']) ? $data['activeStatistic'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['projectIsDelete'] = isset($data['projectIsDelete']) ? $data['projectIsDelete'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
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
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 255)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 1)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) > 255)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) < 1)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['developMode']) && (mb_strlen($this->container['developMode']) > 255)) {
                $invalidProperties[] = "invalid value for 'developMode', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['developMode']) && (mb_strlen($this->container['developMode']) < 1)) {
                $invalidProperties[] = "invalid value for 'developMode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['visibility']) && (mb_strlen($this->container['visibility']) > 255)) {
                $invalidProperties[] = "invalid value for 'visibility', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['visibility']) && (mb_strlen($this->container['visibility']) < 1)) {
                $invalidProperties[] = "invalid value for 'visibility', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['security']) && (mb_strlen($this->container['security']) > 255)) {
                $invalidProperties[] = "invalid value for 'security', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['security']) && (mb_strlen($this->container['security']) < 1)) {
                $invalidProperties[] = "invalid value for 'security', the character length must be bigger than or equal to 1.";
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
            if (!is_null($this->container['nameWithNamespace']) && (mb_strlen($this->container['nameWithNamespace']) > 255)) {
                $invalidProperties[] = "invalid value for 'nameWithNamespace', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['nameWithNamespace']) && (mb_strlen($this->container['nameWithNamespace']) < 1)) {
                $invalidProperties[] = "invalid value for 'nameWithNamespace', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['lastActivityAt']) && (mb_strlen($this->container['lastActivityAt']) > 255)) {
                $invalidProperties[] = "invalid value for 'lastActivityAt', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['lastActivityAt']) && (mb_strlen($this->container['lastActivityAt']) < 1)) {
                $invalidProperties[] = "invalid value for 'lastActivityAt', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['permissions']) && ($this->container['permissions'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'permissions', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['permissions']) && ($this->container['permissions'] < 1)) {
                $invalidProperties[] = "invalid value for 'permissions', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['memberCount']) && ($this->container['memberCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'memberCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['memberCount']) && ($this->container['memberCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'memberCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['uuid']) && (mb_strlen($this->container['uuid']) > 255)) {
                $invalidProperties[] = "invalid value for 'uuid', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['uuid']) && (mb_strlen($this->container['uuid']) < 1)) {
                $invalidProperties[] = "invalid value for 'uuid', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['lastRepositoryUpdatedAt']) && (mb_strlen($this->container['lastRepositoryUpdatedAt']) > 255)) {
                $invalidProperties[] = "invalid value for 'lastRepositoryUpdatedAt', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['lastRepositoryUpdatedAt']) && (mb_strlen($this->container['lastRepositoryUpdatedAt']) < 1)) {
                $invalidProperties[] = "invalid value for 'lastRepositoryUpdatedAt', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sshUrlToRepo']) && (mb_strlen($this->container['sshUrlToRepo']) > 255)) {
                $invalidProperties[] = "invalid value for 'sshUrlToRepo', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['sshUrlToRepo']) && (mb_strlen($this->container['sshUrlToRepo']) < 1)) {
                $invalidProperties[] = "invalid value for 'sshUrlToRepo', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['httpUrlToRepo']) && (mb_strlen($this->container['httpUrlToRepo']) > 255)) {
                $invalidProperties[] = "invalid value for 'httpUrlToRepo', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['httpUrlToRepo']) && (mb_strlen($this->container['httpUrlToRepo']) < 1)) {
                $invalidProperties[] = "invalid value for 'httpUrlToRepo', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 255)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectName']) && (mb_strlen($this->container['projectName']) > 255)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['projectName']) && (mb_strlen($this->container['projectName']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 255)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['creatorId']) && ($this->container['creatorId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'creatorId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['creatorId']) && ($this->container['creatorId'] < 1)) {
                $invalidProperties[] = "invalid value for 'creatorId', must be bigger than or equal to 1.";
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
    *  **参数解释：** 仓库ID **约束限制：** 不涉及。
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
    * @param int|null $id **参数解释：** 仓库ID **约束限制：** 不涉及。
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
    *  **参数解释：** 仓库名称。 **约束限制：** 不涉及。
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
    * @param string|null $name **参数解释：** 仓库名称。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets namespace
    *  **参数解释：** 命名空间。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace **参数解释：** 命名空间。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets path
    *  **参数解释：** 仓库路径。 **约束限制：** 不涉及。
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
    * @param string|null $path **参数解释：** 仓库路径。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets developMode
    *  **参数解释：** 开发模式。 **约束限制：** 不涉及。
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
    * @param string|null $developMode **参数解释：** 开发模式。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setDevelopMode($developMode)
    {
        $this->container['developMode'] = $developMode;
        return $this;
    }

    /**
    * Gets visibility
    *  **参数解释：** 可见性。 **约束限制：** 不涉及。
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
    * @param string|null $visibility **参数解释：** 可见性。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setVisibility($visibility)
    {
        $this->container['visibility'] = $visibility;
        return $this;
    }

    /**
    * Gets security
    *  **参数解释：** 安全级别。 **约束限制：** 不涉及。
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
    * @param string|null $security **参数解释：** 安全级别。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setSecurity($security)
    {
        $this->container['security'] = $security;
        return $this;
    }

    /**
    * Gets starCount
    *  **参数解释：** 关注数。 **约束限制：** 不涉及。
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
    * @param int|null $starCount **参数解释：** 关注数。 **约束限制：** 不涉及。
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
    *  **参数解释：** Fork数。 **约束限制：** 不涉及。
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
    * @param int|null $forksCount **参数解释：** Fork数。 **约束限制：** 不涉及。
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
    *  **参数解释：** 开放的问题数。 **约束限制：** 不涉及。
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
    * @param int|null $openIssuesCount **参数解释：** 开放的问题数。 **约束限制：** 不涉及。
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
    *  **参数解释：** 开放的合并请求数。 **约束限制：** 不涉及。
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
    * @param int|null $openMergeRequestsCount **参数解释：** 开放的合并请求数。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setOpenMergeRequestsCount($openMergeRequestsCount)
    {
        $this->container['openMergeRequestsCount'] = $openMergeRequestsCount;
        return $this;
    }

    /**
    * Gets starred
    *  **参数解释：** 是否已关注。 **约束限制：** 不涉及。
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
    * @param bool|null $starred **参数解释：** 是否已关注。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setStarred($starred)
    {
        $this->container['starred'] = $starred;
        return $this;
    }

    /**
    * Gets nameWithNamespace
    *  **参数解释：** 包含命名空间的仓库名称。 **约束限制：** 不涉及。
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
    * @param string|null $nameWithNamespace **参数解释：** 包含命名空间的仓库名称。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setNameWithNamespace($nameWithNamespace)
    {
        $this->container['nameWithNamespace'] = $nameWithNamespace;
        return $this;
    }

    /**
    * Gets lastActivityAt
    *  **参数解释：** 最后活跃时间。 **约束限制：** 不涉及。
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
    * @param string|null $lastActivityAt **参数解释：** 最后活跃时间。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setLastActivityAt($lastActivityAt)
    {
        $this->container['lastActivityAt'] = $lastActivityAt;
        return $this;
    }

    /**
    * Gets forkedFromRepository
    *  forkedFromRepository
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\ForkedFromRepositorySimplestDto|null
    */
    public function getForkedFromRepository()
    {
        return $this->container['forkedFromRepository'];
    }

    /**
    * Sets forkedFromRepository
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\ForkedFromRepositorySimplestDto|null $forkedFromRepository forkedFromRepository
    *
    * @return $this
    */
    public function setForkedFromRepository($forkedFromRepository)
    {
        $this->container['forkedFromRepository'] = $forkedFromRepository;
        return $this;
    }

    /**
    * Gets permissions
    *  **参数解释：** 权限。 **约束限制：** 不涉及。
    *
    * @return int|null
    */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
    * Sets permissions
    *
    * @param int|null $permissions **参数解释：** 权限。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setPermissions($permissions)
    {
        $this->container['permissions'] = $permissions;
        return $this;
    }

    /**
    * Gets archived
    *  **参数解释：** 是否归档。 **约束限制：** 不涉及。
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
    * @param bool|null $archived **参数解释：** 是否归档。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setArchived($archived)
    {
        $this->container['archived'] = $archived;
        return $this;
    }

    /**
    * Gets memberCount
    *  **参数解释：** 成员数。 **约束限制：** 不涉及。
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
    * @param int|null $memberCount **参数解释：** 成员数。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setMemberCount($memberCount)
    {
        $this->container['memberCount'] = $memberCount;
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
    * Gets description
    *  **参数解释：** 仓库描述。 **约束限制：** 不涉及。
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
    * @param string|null $description **参数解释：** 仓库描述。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets lastRepositoryUpdatedAt
    *  **参数解释：** 最后更新时间。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getLastRepositoryUpdatedAt()
    {
        return $this->container['lastRepositoryUpdatedAt'];
    }

    /**
    * Sets lastRepositoryUpdatedAt
    *
    * @param string|null $lastRepositoryUpdatedAt **参数解释：** 最后更新时间。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setLastRepositoryUpdatedAt($lastRepositoryUpdatedAt)
    {
        $this->container['lastRepositoryUpdatedAt'] = $lastRepositoryUpdatedAt;
        return $this;
    }

    /**
    * Gets sshUrlToRepo
    *  **参数解释：** SSH仓库URL。 **约束限制：** 不涉及。
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
    * @param string|null $sshUrlToRepo **参数解释：** SSH仓库URL。 **约束限制：** 不涉及。
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
    *  **参数解释：** HTTP仓库URL。 **约束限制：** 不涉及。
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
    * @param string|null $httpUrlToRepo **参数解释：** HTTP仓库URL。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setHttpUrlToRepo($httpUrlToRepo)
    {
        $this->container['httpUrlToRepo'] = $httpUrlToRepo;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 仓库状态。 **约束限制：** 不涉及。
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
    * @param string|null $status **参数解释：** 仓库状态。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets activeStatistic
    *  **参数解释：** 活跃统计。 **约束限制：** 不涉及。
    *
    * @return int[]|null
    */
    public function getActiveStatistic()
    {
        return $this->container['activeStatistic'];
    }

    /**
    * Sets activeStatistic
    *
    * @param int[]|null $activeStatistic **参数解释：** 活跃统计。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setActiveStatistic($activeStatistic)
    {
        $this->container['activeStatistic'] = $activeStatistic;
        return $this;
    }

    /**
    * Gets projectName
    *  **参数解释：** 项目名称。 **约束限制：** 不涉及。
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
    * @param string|null $projectName **参数解释：** 项目名称。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释：** 项目ID。 **约束限制：** 不涉及。
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
    * @param string|null $projectId **参数解释：** 项目ID。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets projectIsDelete
    *  **参数解释：** 项目是否删除。 **约束限制：** 不涉及。
    *
    * @return bool|null
    */
    public function getProjectIsDelete()
    {
        return $this->container['projectIsDelete'];
    }

    /**
    * Sets projectIsDelete
    *
    * @param bool|null $projectIsDelete **参数解释：** 项目是否删除。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setProjectIsDelete($projectIsDelete)
    {
        $this->container['projectIsDelete'] = $projectIsDelete;
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

