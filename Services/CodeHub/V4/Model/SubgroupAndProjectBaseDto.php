<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubgroupAndProjectBaseDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubgroupAndProjectBaseDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  **参数解释：** 项目id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * projectName  **参数解释：** 项目名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleNamecn  **参数解释：** 角色中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleNameen  **参数解释：** 角色英文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * fullName  **参数解释：** 全名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * fullPath  **参数解释：** 全路径。 **取值范围：** 字符串长度不少于1，不超过1000。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * updatedAtTimestamp  **参数解释：** 更新时间戳。 **取值范围：** 字符串长度不少于1，不超过1000。
    * starTime  **参数解释：** 开始时间戳。 **取值范围：** 字符串长度不少于1，不超过1000。
    * starred  **参数解释：** 是否收藏。
    * developMode  **参数解释：** 开发模式，cr,\"normal\"。 **取值范围：** 字符串长度不少于1，不超过1000。
    * id  **参数解释：** 仓库或者代码组id。
    * name  **参数解释：** 代码组或仓库名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * path  **参数解释：** 路径。 **取值范围：** 字符串长度不少于1，不超过1000。
    * groupLevel  **参数解释：** 代码组层级。
    * description  **参数解释：** 代码组或仓库描述。 **取值范围：** 字符串长度不少于1，不超过1000。
    * subgroupCount  **参数解释：** 子代码组数量。
    * projectCount  **参数解释：** 仓库数量。
    * groupRole  **参数解释：** 代码组角色。
    * groupMembersCount  **参数解释：** 代码组成员数量。
    * descendantType  **参数解释：** 资源类型 group,project。 **取值范围：** 字符串长度不少于1，不超过1000。
    * visibilityLevel  **参数解释：** 可见性level 0(私有),20(公开)
    * visibility  **参数解释：** 可见性 private public。 **取值范围：** 字符串长度不少于1，不超过1000。
    * isProjectAdmin  **参数解释：** 当前用户是否为项目创建者。
    * isGroupCreator  **参数解释：** 当前用户是否为代码组创建者。
    * isRepoCreator  **参数解释：** 当前用户是否为仓库创建者。
    * roleShowFlag  **参数解释：** 角色展示标记。
    * uuid  **参数解释：** 仓库的uuid。 **取值范围：** 字符串长度不少于1，不超过1000。
    * forksCount  **参数解释：** fork数量。
    * isKia  **参数解释：** 是否为kia。
    * isOwner  **参数解释：** 是否为所有者。
    * archived  **参数解释：** 是否为存档。
    * lastRepositoryUpdatedAt  **参数解释：** 仓库的最后更新时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * openMergeRequestsCount  **参数解释：** 开启的mr数量。
    * allMergeRequestsCount  **参数解释：** 所有的mr数量。
    * projectRole  **参数解释：** 仓库角色。
    * projectMembersCount  **参数解释：** fork数量。
    * projectCreator  projectCreator
    * starCount  **参数解释：** fork数量。
    * tagList  **参数解释：** tag列表。
    * httpUrlToRepo  **参数解释：** 仓库的http url。 **取值范围：** 字符串长度不少于1，不超过1000。
    * sshUrlToRepo  **参数解释：** 仓库的ssh url。 **取值范围：** 字符串长度不少于1，不超过1000。
    * status  **参数解释：** 状态。
    * activeStatistic  **参数解释：** 活跃统计。
    * securityTag  **参数解释：** 安全标签。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'projectName' => 'string',
            'roleNamecn' => 'string',
            'roleNameen' => 'string',
            'fullName' => 'string',
            'fullPath' => 'string',
            'createdAt' => 'string',
            'updatedAtTimestamp' => 'string',
            'starTime' => 'string',
            'starred' => 'bool',
            'developMode' => 'string',
            'id' => 'int',
            'name' => 'string',
            'path' => 'string',
            'groupLevel' => 'int',
            'description' => 'string',
            'subgroupCount' => 'int',
            'projectCount' => 'int',
            'groupRole' => 'int',
            'groupMembersCount' => 'int',
            'descendantType' => 'string',
            'visibilityLevel' => 'int',
            'visibility' => 'string',
            'isProjectAdmin' => 'int',
            'isGroupCreator' => 'int',
            'isRepoCreator' => 'int',
            'roleShowFlag' => 'int',
            'uuid' => 'string',
            'forksCount' => 'int',
            'isKia' => 'bool',
            'isOwner' => 'bool',
            'archived' => 'bool',
            'lastRepositoryUpdatedAt' => 'string',
            'openMergeRequestsCount' => 'int',
            'allMergeRequestsCount' => 'int',
            'projectRole' => 'int',
            'projectMembersCount' => 'int',
            'projectCreator' => '\HuaweiCloud\SDK\CodeHub\V4\Model\ProjectCreatorDto',
            'starCount' => 'int',
            'tagList' => 'string[]',
            'httpUrlToRepo' => 'string',
            'sshUrlToRepo' => 'string',
            'status' => 'int',
            'activeStatistic' => 'int[]',
            'securityTag' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  **参数解释：** 项目id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * projectName  **参数解释：** 项目名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleNamecn  **参数解释：** 角色中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleNameen  **参数解释：** 角色英文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * fullName  **参数解释：** 全名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * fullPath  **参数解释：** 全路径。 **取值范围：** 字符串长度不少于1，不超过1000。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * updatedAtTimestamp  **参数解释：** 更新时间戳。 **取值范围：** 字符串长度不少于1，不超过1000。
    * starTime  **参数解释：** 开始时间戳。 **取值范围：** 字符串长度不少于1，不超过1000。
    * starred  **参数解释：** 是否收藏。
    * developMode  **参数解释：** 开发模式，cr,\"normal\"。 **取值范围：** 字符串长度不少于1，不超过1000。
    * id  **参数解释：** 仓库或者代码组id。
    * name  **参数解释：** 代码组或仓库名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * path  **参数解释：** 路径。 **取值范围：** 字符串长度不少于1，不超过1000。
    * groupLevel  **参数解释：** 代码组层级。
    * description  **参数解释：** 代码组或仓库描述。 **取值范围：** 字符串长度不少于1，不超过1000。
    * subgroupCount  **参数解释：** 子代码组数量。
    * projectCount  **参数解释：** 仓库数量。
    * groupRole  **参数解释：** 代码组角色。
    * groupMembersCount  **参数解释：** 代码组成员数量。
    * descendantType  **参数解释：** 资源类型 group,project。 **取值范围：** 字符串长度不少于1，不超过1000。
    * visibilityLevel  **参数解释：** 可见性level 0(私有),20(公开)
    * visibility  **参数解释：** 可见性 private public。 **取值范围：** 字符串长度不少于1，不超过1000。
    * isProjectAdmin  **参数解释：** 当前用户是否为项目创建者。
    * isGroupCreator  **参数解释：** 当前用户是否为代码组创建者。
    * isRepoCreator  **参数解释：** 当前用户是否为仓库创建者。
    * roleShowFlag  **参数解释：** 角色展示标记。
    * uuid  **参数解释：** 仓库的uuid。 **取值范围：** 字符串长度不少于1，不超过1000。
    * forksCount  **参数解释：** fork数量。
    * isKia  **参数解释：** 是否为kia。
    * isOwner  **参数解释：** 是否为所有者。
    * archived  **参数解释：** 是否为存档。
    * lastRepositoryUpdatedAt  **参数解释：** 仓库的最后更新时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * openMergeRequestsCount  **参数解释：** 开启的mr数量。
    * allMergeRequestsCount  **参数解释：** 所有的mr数量。
    * projectRole  **参数解释：** 仓库角色。
    * projectMembersCount  **参数解释：** fork数量。
    * projectCreator  projectCreator
    * starCount  **参数解释：** fork数量。
    * tagList  **参数解释：** tag列表。
    * httpUrlToRepo  **参数解释：** 仓库的http url。 **取值范围：** 字符串长度不少于1，不超过1000。
    * sshUrlToRepo  **参数解释：** 仓库的ssh url。 **取值范围：** 字符串长度不少于1，不超过1000。
    * status  **参数解释：** 状态。
    * activeStatistic  **参数解释：** 活跃统计。
    * securityTag  **参数解释：** 安全标签。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'projectName' => null,
        'roleNamecn' => null,
        'roleNameen' => null,
        'fullName' => null,
        'fullPath' => null,
        'createdAt' => null,
        'updatedAtTimestamp' => null,
        'starTime' => null,
        'starred' => null,
        'developMode' => null,
        'id' => 'int32',
        'name' => null,
        'path' => null,
        'groupLevel' => 'int32',
        'description' => null,
        'subgroupCount' => 'int32',
        'projectCount' => 'int32',
        'groupRole' => 'int32',
        'groupMembersCount' => 'int32',
        'descendantType' => null,
        'visibilityLevel' => 'int32',
        'visibility' => null,
        'isProjectAdmin' => 'int32',
        'isGroupCreator' => 'int32',
        'isRepoCreator' => 'int32',
        'roleShowFlag' => 'int3',
        'uuid' => null,
        'forksCount' => 'int32',
        'isKia' => null,
        'isOwner' => null,
        'archived' => null,
        'lastRepositoryUpdatedAt' => null,
        'openMergeRequestsCount' => 'int32',
        'allMergeRequestsCount' => 'int32',
        'projectRole' => 'int32',
        'projectMembersCount' => 'int32',
        'projectCreator' => null,
        'starCount' => 'int32',
        'tagList' => null,
        'httpUrlToRepo' => null,
        'sshUrlToRepo' => null,
        'status' => 'int32',
        'activeStatistic' => 'int32',
        'securityTag' => null
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
    * projectId  **参数解释：** 项目id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * projectName  **参数解释：** 项目名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleNamecn  **参数解释：** 角色中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleNameen  **参数解释：** 角色英文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * fullName  **参数解释：** 全名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * fullPath  **参数解释：** 全路径。 **取值范围：** 字符串长度不少于1，不超过1000。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * updatedAtTimestamp  **参数解释：** 更新时间戳。 **取值范围：** 字符串长度不少于1，不超过1000。
    * starTime  **参数解释：** 开始时间戳。 **取值范围：** 字符串长度不少于1，不超过1000。
    * starred  **参数解释：** 是否收藏。
    * developMode  **参数解释：** 开发模式，cr,\"normal\"。 **取值范围：** 字符串长度不少于1，不超过1000。
    * id  **参数解释：** 仓库或者代码组id。
    * name  **参数解释：** 代码组或仓库名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * path  **参数解释：** 路径。 **取值范围：** 字符串长度不少于1，不超过1000。
    * groupLevel  **参数解释：** 代码组层级。
    * description  **参数解释：** 代码组或仓库描述。 **取值范围：** 字符串长度不少于1，不超过1000。
    * subgroupCount  **参数解释：** 子代码组数量。
    * projectCount  **参数解释：** 仓库数量。
    * groupRole  **参数解释：** 代码组角色。
    * groupMembersCount  **参数解释：** 代码组成员数量。
    * descendantType  **参数解释：** 资源类型 group,project。 **取值范围：** 字符串长度不少于1，不超过1000。
    * visibilityLevel  **参数解释：** 可见性level 0(私有),20(公开)
    * visibility  **参数解释：** 可见性 private public。 **取值范围：** 字符串长度不少于1，不超过1000。
    * isProjectAdmin  **参数解释：** 当前用户是否为项目创建者。
    * isGroupCreator  **参数解释：** 当前用户是否为代码组创建者。
    * isRepoCreator  **参数解释：** 当前用户是否为仓库创建者。
    * roleShowFlag  **参数解释：** 角色展示标记。
    * uuid  **参数解释：** 仓库的uuid。 **取值范围：** 字符串长度不少于1，不超过1000。
    * forksCount  **参数解释：** fork数量。
    * isKia  **参数解释：** 是否为kia。
    * isOwner  **参数解释：** 是否为所有者。
    * archived  **参数解释：** 是否为存档。
    * lastRepositoryUpdatedAt  **参数解释：** 仓库的最后更新时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * openMergeRequestsCount  **参数解释：** 开启的mr数量。
    * allMergeRequestsCount  **参数解释：** 所有的mr数量。
    * projectRole  **参数解释：** 仓库角色。
    * projectMembersCount  **参数解释：** fork数量。
    * projectCreator  projectCreator
    * starCount  **参数解释：** fork数量。
    * tagList  **参数解释：** tag列表。
    * httpUrlToRepo  **参数解释：** 仓库的http url。 **取值范围：** 字符串长度不少于1，不超过1000。
    * sshUrlToRepo  **参数解释：** 仓库的ssh url。 **取值范围：** 字符串长度不少于1，不超过1000。
    * status  **参数解释：** 状态。
    * activeStatistic  **参数解释：** 活跃统计。
    * securityTag  **参数解释：** 安全标签。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'projectName' => 'project_name',
            'roleNamecn' => 'role_namecn',
            'roleNameen' => 'role_nameen',
            'fullName' => 'full_name',
            'fullPath' => 'full_path',
            'createdAt' => 'created_at',
            'updatedAtTimestamp' => 'updated_at_timestamp',
            'starTime' => 'star_time',
            'starred' => 'starred',
            'developMode' => 'develop_mode',
            'id' => 'id',
            'name' => 'name',
            'path' => 'path',
            'groupLevel' => 'group_level',
            'description' => 'description',
            'subgroupCount' => 'subgroup_count',
            'projectCount' => 'project_count',
            'groupRole' => 'group_role',
            'groupMembersCount' => 'group_members_count',
            'descendantType' => 'descendant_type',
            'visibilityLevel' => 'visibility_level',
            'visibility' => 'visibility',
            'isProjectAdmin' => 'is_project_admin',
            'isGroupCreator' => 'is_group_creator',
            'isRepoCreator' => 'is_repo_creator',
            'roleShowFlag' => 'role_show_flag',
            'uuid' => 'uuid',
            'forksCount' => 'forks_count',
            'isKia' => 'is_kia',
            'isOwner' => 'is_owner',
            'archived' => 'archived',
            'lastRepositoryUpdatedAt' => 'last_repository_updated_at',
            'openMergeRequestsCount' => 'open_merge_requests_count',
            'allMergeRequestsCount' => 'all_merge_requests_count',
            'projectRole' => 'project_role',
            'projectMembersCount' => 'project_members_count',
            'projectCreator' => 'project_creator',
            'starCount' => 'star_count',
            'tagList' => 'tag_list',
            'httpUrlToRepo' => 'http_url_to_repo',
            'sshUrlToRepo' => 'ssh_url_to_repo',
            'status' => 'status',
            'activeStatistic' => 'active_statistic',
            'securityTag' => 'security_tag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  **参数解释：** 项目id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * projectName  **参数解释：** 项目名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleNamecn  **参数解释：** 角色中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleNameen  **参数解释：** 角色英文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * fullName  **参数解释：** 全名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * fullPath  **参数解释：** 全路径。 **取值范围：** 字符串长度不少于1，不超过1000。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * updatedAtTimestamp  **参数解释：** 更新时间戳。 **取值范围：** 字符串长度不少于1，不超过1000。
    * starTime  **参数解释：** 开始时间戳。 **取值范围：** 字符串长度不少于1，不超过1000。
    * starred  **参数解释：** 是否收藏。
    * developMode  **参数解释：** 开发模式，cr,\"normal\"。 **取值范围：** 字符串长度不少于1，不超过1000。
    * id  **参数解释：** 仓库或者代码组id。
    * name  **参数解释：** 代码组或仓库名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * path  **参数解释：** 路径。 **取值范围：** 字符串长度不少于1，不超过1000。
    * groupLevel  **参数解释：** 代码组层级。
    * description  **参数解释：** 代码组或仓库描述。 **取值范围：** 字符串长度不少于1，不超过1000。
    * subgroupCount  **参数解释：** 子代码组数量。
    * projectCount  **参数解释：** 仓库数量。
    * groupRole  **参数解释：** 代码组角色。
    * groupMembersCount  **参数解释：** 代码组成员数量。
    * descendantType  **参数解释：** 资源类型 group,project。 **取值范围：** 字符串长度不少于1，不超过1000。
    * visibilityLevel  **参数解释：** 可见性level 0(私有),20(公开)
    * visibility  **参数解释：** 可见性 private public。 **取值范围：** 字符串长度不少于1，不超过1000。
    * isProjectAdmin  **参数解释：** 当前用户是否为项目创建者。
    * isGroupCreator  **参数解释：** 当前用户是否为代码组创建者。
    * isRepoCreator  **参数解释：** 当前用户是否为仓库创建者。
    * roleShowFlag  **参数解释：** 角色展示标记。
    * uuid  **参数解释：** 仓库的uuid。 **取值范围：** 字符串长度不少于1，不超过1000。
    * forksCount  **参数解释：** fork数量。
    * isKia  **参数解释：** 是否为kia。
    * isOwner  **参数解释：** 是否为所有者。
    * archived  **参数解释：** 是否为存档。
    * lastRepositoryUpdatedAt  **参数解释：** 仓库的最后更新时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * openMergeRequestsCount  **参数解释：** 开启的mr数量。
    * allMergeRequestsCount  **参数解释：** 所有的mr数量。
    * projectRole  **参数解释：** 仓库角色。
    * projectMembersCount  **参数解释：** fork数量。
    * projectCreator  projectCreator
    * starCount  **参数解释：** fork数量。
    * tagList  **参数解释：** tag列表。
    * httpUrlToRepo  **参数解释：** 仓库的http url。 **取值范围：** 字符串长度不少于1，不超过1000。
    * sshUrlToRepo  **参数解释：** 仓库的ssh url。 **取值范围：** 字符串长度不少于1，不超过1000。
    * status  **参数解释：** 状态。
    * activeStatistic  **参数解释：** 活跃统计。
    * securityTag  **参数解释：** 安全标签。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'projectName' => 'setProjectName',
            'roleNamecn' => 'setRoleNamecn',
            'roleNameen' => 'setRoleNameen',
            'fullName' => 'setFullName',
            'fullPath' => 'setFullPath',
            'createdAt' => 'setCreatedAt',
            'updatedAtTimestamp' => 'setUpdatedAtTimestamp',
            'starTime' => 'setStarTime',
            'starred' => 'setStarred',
            'developMode' => 'setDevelopMode',
            'id' => 'setId',
            'name' => 'setName',
            'path' => 'setPath',
            'groupLevel' => 'setGroupLevel',
            'description' => 'setDescription',
            'subgroupCount' => 'setSubgroupCount',
            'projectCount' => 'setProjectCount',
            'groupRole' => 'setGroupRole',
            'groupMembersCount' => 'setGroupMembersCount',
            'descendantType' => 'setDescendantType',
            'visibilityLevel' => 'setVisibilityLevel',
            'visibility' => 'setVisibility',
            'isProjectAdmin' => 'setIsProjectAdmin',
            'isGroupCreator' => 'setIsGroupCreator',
            'isRepoCreator' => 'setIsRepoCreator',
            'roleShowFlag' => 'setRoleShowFlag',
            'uuid' => 'setUuid',
            'forksCount' => 'setForksCount',
            'isKia' => 'setIsKia',
            'isOwner' => 'setIsOwner',
            'archived' => 'setArchived',
            'lastRepositoryUpdatedAt' => 'setLastRepositoryUpdatedAt',
            'openMergeRequestsCount' => 'setOpenMergeRequestsCount',
            'allMergeRequestsCount' => 'setAllMergeRequestsCount',
            'projectRole' => 'setProjectRole',
            'projectMembersCount' => 'setProjectMembersCount',
            'projectCreator' => 'setProjectCreator',
            'starCount' => 'setStarCount',
            'tagList' => 'setTagList',
            'httpUrlToRepo' => 'setHttpUrlToRepo',
            'sshUrlToRepo' => 'setSshUrlToRepo',
            'status' => 'setStatus',
            'activeStatistic' => 'setActiveStatistic',
            'securityTag' => 'setSecurityTag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  **参数解释：** 项目id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * projectName  **参数解释：** 项目名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleNamecn  **参数解释：** 角色中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleNameen  **参数解释：** 角色英文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * fullName  **参数解释：** 全名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * fullPath  **参数解释：** 全路径。 **取值范围：** 字符串长度不少于1，不超过1000。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * updatedAtTimestamp  **参数解释：** 更新时间戳。 **取值范围：** 字符串长度不少于1，不超过1000。
    * starTime  **参数解释：** 开始时间戳。 **取值范围：** 字符串长度不少于1，不超过1000。
    * starred  **参数解释：** 是否收藏。
    * developMode  **参数解释：** 开发模式，cr,\"normal\"。 **取值范围：** 字符串长度不少于1，不超过1000。
    * id  **参数解释：** 仓库或者代码组id。
    * name  **参数解释：** 代码组或仓库名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * path  **参数解释：** 路径。 **取值范围：** 字符串长度不少于1，不超过1000。
    * groupLevel  **参数解释：** 代码组层级。
    * description  **参数解释：** 代码组或仓库描述。 **取值范围：** 字符串长度不少于1，不超过1000。
    * subgroupCount  **参数解释：** 子代码组数量。
    * projectCount  **参数解释：** 仓库数量。
    * groupRole  **参数解释：** 代码组角色。
    * groupMembersCount  **参数解释：** 代码组成员数量。
    * descendantType  **参数解释：** 资源类型 group,project。 **取值范围：** 字符串长度不少于1，不超过1000。
    * visibilityLevel  **参数解释：** 可见性level 0(私有),20(公开)
    * visibility  **参数解释：** 可见性 private public。 **取值范围：** 字符串长度不少于1，不超过1000。
    * isProjectAdmin  **参数解释：** 当前用户是否为项目创建者。
    * isGroupCreator  **参数解释：** 当前用户是否为代码组创建者。
    * isRepoCreator  **参数解释：** 当前用户是否为仓库创建者。
    * roleShowFlag  **参数解释：** 角色展示标记。
    * uuid  **参数解释：** 仓库的uuid。 **取值范围：** 字符串长度不少于1，不超过1000。
    * forksCount  **参数解释：** fork数量。
    * isKia  **参数解释：** 是否为kia。
    * isOwner  **参数解释：** 是否为所有者。
    * archived  **参数解释：** 是否为存档。
    * lastRepositoryUpdatedAt  **参数解释：** 仓库的最后更新时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * openMergeRequestsCount  **参数解释：** 开启的mr数量。
    * allMergeRequestsCount  **参数解释：** 所有的mr数量。
    * projectRole  **参数解释：** 仓库角色。
    * projectMembersCount  **参数解释：** fork数量。
    * projectCreator  projectCreator
    * starCount  **参数解释：** fork数量。
    * tagList  **参数解释：** tag列表。
    * httpUrlToRepo  **参数解释：** 仓库的http url。 **取值范围：** 字符串长度不少于1，不超过1000。
    * sshUrlToRepo  **参数解释：** 仓库的ssh url。 **取值范围：** 字符串长度不少于1，不超过1000。
    * status  **参数解释：** 状态。
    * activeStatistic  **参数解释：** 活跃统计。
    * securityTag  **参数解释：** 安全标签。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'projectName' => 'getProjectName',
            'roleNamecn' => 'getRoleNamecn',
            'roleNameen' => 'getRoleNameen',
            'fullName' => 'getFullName',
            'fullPath' => 'getFullPath',
            'createdAt' => 'getCreatedAt',
            'updatedAtTimestamp' => 'getUpdatedAtTimestamp',
            'starTime' => 'getStarTime',
            'starred' => 'getStarred',
            'developMode' => 'getDevelopMode',
            'id' => 'getId',
            'name' => 'getName',
            'path' => 'getPath',
            'groupLevel' => 'getGroupLevel',
            'description' => 'getDescription',
            'subgroupCount' => 'getSubgroupCount',
            'projectCount' => 'getProjectCount',
            'groupRole' => 'getGroupRole',
            'groupMembersCount' => 'getGroupMembersCount',
            'descendantType' => 'getDescendantType',
            'visibilityLevel' => 'getVisibilityLevel',
            'visibility' => 'getVisibility',
            'isProjectAdmin' => 'getIsProjectAdmin',
            'isGroupCreator' => 'getIsGroupCreator',
            'isRepoCreator' => 'getIsRepoCreator',
            'roleShowFlag' => 'getRoleShowFlag',
            'uuid' => 'getUuid',
            'forksCount' => 'getForksCount',
            'isKia' => 'getIsKia',
            'isOwner' => 'getIsOwner',
            'archived' => 'getArchived',
            'lastRepositoryUpdatedAt' => 'getLastRepositoryUpdatedAt',
            'openMergeRequestsCount' => 'getOpenMergeRequestsCount',
            'allMergeRequestsCount' => 'getAllMergeRequestsCount',
            'projectRole' => 'getProjectRole',
            'projectMembersCount' => 'getProjectMembersCount',
            'projectCreator' => 'getProjectCreator',
            'starCount' => 'getStarCount',
            'tagList' => 'getTagList',
            'httpUrlToRepo' => 'getHttpUrlToRepo',
            'sshUrlToRepo' => 'getSshUrlToRepo',
            'status' => 'getStatus',
            'activeStatistic' => 'getActiveStatistic',
            'securityTag' => 'getSecurityTag'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['roleNamecn'] = isset($data['roleNamecn']) ? $data['roleNamecn'] : null;
        $this->container['roleNameen'] = isset($data['roleNameen']) ? $data['roleNameen'] : null;
        $this->container['fullName'] = isset($data['fullName']) ? $data['fullName'] : null;
        $this->container['fullPath'] = isset($data['fullPath']) ? $data['fullPath'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAtTimestamp'] = isset($data['updatedAtTimestamp']) ? $data['updatedAtTimestamp'] : null;
        $this->container['starTime'] = isset($data['starTime']) ? $data['starTime'] : null;
        $this->container['starred'] = isset($data['starred']) ? $data['starred'] : null;
        $this->container['developMode'] = isset($data['developMode']) ? $data['developMode'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['groupLevel'] = isset($data['groupLevel']) ? $data['groupLevel'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['subgroupCount'] = isset($data['subgroupCount']) ? $data['subgroupCount'] : null;
        $this->container['projectCount'] = isset($data['projectCount']) ? $data['projectCount'] : null;
        $this->container['groupRole'] = isset($data['groupRole']) ? $data['groupRole'] : null;
        $this->container['groupMembersCount'] = isset($data['groupMembersCount']) ? $data['groupMembersCount'] : null;
        $this->container['descendantType'] = isset($data['descendantType']) ? $data['descendantType'] : null;
        $this->container['visibilityLevel'] = isset($data['visibilityLevel']) ? $data['visibilityLevel'] : null;
        $this->container['visibility'] = isset($data['visibility']) ? $data['visibility'] : null;
        $this->container['isProjectAdmin'] = isset($data['isProjectAdmin']) ? $data['isProjectAdmin'] : null;
        $this->container['isGroupCreator'] = isset($data['isGroupCreator']) ? $data['isGroupCreator'] : null;
        $this->container['isRepoCreator'] = isset($data['isRepoCreator']) ? $data['isRepoCreator'] : null;
        $this->container['roleShowFlag'] = isset($data['roleShowFlag']) ? $data['roleShowFlag'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['forksCount'] = isset($data['forksCount']) ? $data['forksCount'] : null;
        $this->container['isKia'] = isset($data['isKia']) ? $data['isKia'] : null;
        $this->container['isOwner'] = isset($data['isOwner']) ? $data['isOwner'] : null;
        $this->container['archived'] = isset($data['archived']) ? $data['archived'] : null;
        $this->container['lastRepositoryUpdatedAt'] = isset($data['lastRepositoryUpdatedAt']) ? $data['lastRepositoryUpdatedAt'] : null;
        $this->container['openMergeRequestsCount'] = isset($data['openMergeRequestsCount']) ? $data['openMergeRequestsCount'] : null;
        $this->container['allMergeRequestsCount'] = isset($data['allMergeRequestsCount']) ? $data['allMergeRequestsCount'] : null;
        $this->container['projectRole'] = isset($data['projectRole']) ? $data['projectRole'] : null;
        $this->container['projectMembersCount'] = isset($data['projectMembersCount']) ? $data['projectMembersCount'] : null;
        $this->container['projectCreator'] = isset($data['projectCreator']) ? $data['projectCreator'] : null;
        $this->container['starCount'] = isset($data['starCount']) ? $data['starCount'] : null;
        $this->container['tagList'] = isset($data['tagList']) ? $data['tagList'] : null;
        $this->container['httpUrlToRepo'] = isset($data['httpUrlToRepo']) ? $data['httpUrlToRepo'] : null;
        $this->container['sshUrlToRepo'] = isset($data['sshUrlToRepo']) ? $data['sshUrlToRepo'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['activeStatistic'] = isset($data['activeStatistic']) ? $data['activeStatistic'] : null;
        $this->container['securityTag'] = isset($data['securityTag']) ? $data['securityTag'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 1000)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectName']) && (mb_strlen($this->container['projectName']) > 1000)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['projectName']) && (mb_strlen($this->container['projectName']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['roleNamecn']) && (mb_strlen($this->container['roleNamecn']) > 1000)) {
                $invalidProperties[] = "invalid value for 'roleNamecn', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['roleNamecn']) && (mb_strlen($this->container['roleNamecn']) < 1)) {
                $invalidProperties[] = "invalid value for 'roleNamecn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['roleNameen']) && (mb_strlen($this->container['roleNameen']) > 1000)) {
                $invalidProperties[] = "invalid value for 'roleNameen', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['roleNameen']) && (mb_strlen($this->container['roleNameen']) < 1)) {
                $invalidProperties[] = "invalid value for 'roleNameen', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fullName']) && (mb_strlen($this->container['fullName']) > 1000)) {
                $invalidProperties[] = "invalid value for 'fullName', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['fullName']) && (mb_strlen($this->container['fullName']) < 1)) {
                $invalidProperties[] = "invalid value for 'fullName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fullPath']) && (mb_strlen($this->container['fullPath']) > 1000)) {
                $invalidProperties[] = "invalid value for 'fullPath', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['fullPath']) && (mb_strlen($this->container['fullPath']) < 1)) {
                $invalidProperties[] = "invalid value for 'fullPath', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) > 1000)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) < 1)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updatedAtTimestamp']) && (mb_strlen($this->container['updatedAtTimestamp']) > 1000)) {
                $invalidProperties[] = "invalid value for 'updatedAtTimestamp', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['updatedAtTimestamp']) && (mb_strlen($this->container['updatedAtTimestamp']) < 1)) {
                $invalidProperties[] = "invalid value for 'updatedAtTimestamp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['starTime']) && (mb_strlen($this->container['starTime']) > 1000)) {
                $invalidProperties[] = "invalid value for 'starTime', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['starTime']) && (mb_strlen($this->container['starTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'starTime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['developMode']) && (mb_strlen($this->container['developMode']) > 1000)) {
                $invalidProperties[] = "invalid value for 'developMode', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['developMode']) && (mb_strlen($this->container['developMode']) < 1)) {
                $invalidProperties[] = "invalid value for 'developMode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 1)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 1000)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) > 1000)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) < 1)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['groupLevel']) && ($this->container['groupLevel'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'groupLevel', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['groupLevel']) && ($this->container['groupLevel'] < 1)) {
                $invalidProperties[] = "invalid value for 'groupLevel', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1000)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['subgroupCount']) && ($this->container['subgroupCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'subgroupCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['subgroupCount']) && ($this->container['subgroupCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'subgroupCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectCount']) && ($this->container['projectCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'projectCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['projectCount']) && ($this->container['projectCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'projectCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['groupRole']) && ($this->container['groupRole'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'groupRole', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['groupRole']) && ($this->container['groupRole'] < 1)) {
                $invalidProperties[] = "invalid value for 'groupRole', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['groupMembersCount']) && ($this->container['groupMembersCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'groupMembersCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['groupMembersCount']) && ($this->container['groupMembersCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'groupMembersCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['descendantType']) && (mb_strlen($this->container['descendantType']) > 1000)) {
                $invalidProperties[] = "invalid value for 'descendantType', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['descendantType']) && (mb_strlen($this->container['descendantType']) < 1)) {
                $invalidProperties[] = "invalid value for 'descendantType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['visibilityLevel']) && ($this->container['visibilityLevel'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'visibilityLevel', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['visibilityLevel']) && ($this->container['visibilityLevel'] < 1)) {
                $invalidProperties[] = "invalid value for 'visibilityLevel', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['visibility']) && (mb_strlen($this->container['visibility']) > 1000)) {
                $invalidProperties[] = "invalid value for 'visibility', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['visibility']) && (mb_strlen($this->container['visibility']) < 1)) {
                $invalidProperties[] = "invalid value for 'visibility', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['isProjectAdmin']) && ($this->container['isProjectAdmin'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'isProjectAdmin', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['isProjectAdmin']) && ($this->container['isProjectAdmin'] < 1)) {
                $invalidProperties[] = "invalid value for 'isProjectAdmin', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['isGroupCreator']) && ($this->container['isGroupCreator'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'isGroupCreator', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['isGroupCreator']) && ($this->container['isGroupCreator'] < 1)) {
                $invalidProperties[] = "invalid value for 'isGroupCreator', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['isRepoCreator']) && ($this->container['isRepoCreator'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'isRepoCreator', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['isRepoCreator']) && ($this->container['isRepoCreator'] < 1)) {
                $invalidProperties[] = "invalid value for 'isRepoCreator', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['roleShowFlag']) && ($this->container['roleShowFlag'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'roleShowFlag', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['roleShowFlag']) && ($this->container['roleShowFlag'] < 1)) {
                $invalidProperties[] = "invalid value for 'roleShowFlag', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['uuid']) && (mb_strlen($this->container['uuid']) > 1000)) {
                $invalidProperties[] = "invalid value for 'uuid', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['uuid']) && (mb_strlen($this->container['uuid']) < 1)) {
                $invalidProperties[] = "invalid value for 'uuid', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['forksCount']) && ($this->container['forksCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'forksCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['forksCount']) && ($this->container['forksCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'forksCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['lastRepositoryUpdatedAt']) && (mb_strlen($this->container['lastRepositoryUpdatedAt']) > 1000)) {
                $invalidProperties[] = "invalid value for 'lastRepositoryUpdatedAt', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['lastRepositoryUpdatedAt']) && (mb_strlen($this->container['lastRepositoryUpdatedAt']) < 1)) {
                $invalidProperties[] = "invalid value for 'lastRepositoryUpdatedAt', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['openMergeRequestsCount']) && ($this->container['openMergeRequestsCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'openMergeRequestsCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['openMergeRequestsCount']) && ($this->container['openMergeRequestsCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'openMergeRequestsCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['allMergeRequestsCount']) && ($this->container['allMergeRequestsCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'allMergeRequestsCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['allMergeRequestsCount']) && ($this->container['allMergeRequestsCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'allMergeRequestsCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectRole']) && ($this->container['projectRole'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'projectRole', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['projectRole']) && ($this->container['projectRole'] < 1)) {
                $invalidProperties[] = "invalid value for 'projectRole', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectMembersCount']) && ($this->container['projectMembersCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'projectMembersCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['projectMembersCount']) && ($this->container['projectMembersCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'projectMembersCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['starCount']) && ($this->container['starCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'starCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['starCount']) && ($this->container['starCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'starCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['httpUrlToRepo']) && (mb_strlen($this->container['httpUrlToRepo']) > 1000)) {
                $invalidProperties[] = "invalid value for 'httpUrlToRepo', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['httpUrlToRepo']) && (mb_strlen($this->container['httpUrlToRepo']) < 1)) {
                $invalidProperties[] = "invalid value for 'httpUrlToRepo', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sshUrlToRepo']) && (mb_strlen($this->container['sshUrlToRepo']) > 1000)) {
                $invalidProperties[] = "invalid value for 'sshUrlToRepo', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['sshUrlToRepo']) && (mb_strlen($this->container['sshUrlToRepo']) < 1)) {
                $invalidProperties[] = "invalid value for 'sshUrlToRepo', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'status', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] < 1)) {
                $invalidProperties[] = "invalid value for 'status', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['securityTag']) && (mb_strlen($this->container['securityTag']) > 1000)) {
                $invalidProperties[] = "invalid value for 'securityTag', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['securityTag']) && (mb_strlen($this->container['securityTag']) < 1)) {
                $invalidProperties[] = "invalid value for 'securityTag', the character length must be bigger than or equal to 1.";
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
    * Gets projectId
    *  **参数解释：** 项目id。 **取值范围：** 字符串长度不少于1，不超过1000。
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
    * @param string|null $projectId **参数解释：** 项目id。 **取值范围：** 字符串长度不少于1，不超过1000。
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
    *  **参数解释：** 项目名称。 **取值范围：** 字符串长度不少于1，不超过1000。
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
    * @param string|null $projectName **参数解释：** 项目名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
        return $this;
    }

    /**
    * Gets roleNamecn
    *  **参数解释：** 角色中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getRoleNamecn()
    {
        return $this->container['roleNamecn'];
    }

    /**
    * Sets roleNamecn
    *
    * @param string|null $roleNamecn **参数解释：** 角色中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setRoleNamecn($roleNamecn)
    {
        $this->container['roleNamecn'] = $roleNamecn;
        return $this;
    }

    /**
    * Gets roleNameen
    *  **参数解释：** 角色英文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getRoleNameen()
    {
        return $this->container['roleNameen'];
    }

    /**
    * Sets roleNameen
    *
    * @param string|null $roleNameen **参数解释：** 角色英文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setRoleNameen($roleNameen)
    {
        $this->container['roleNameen'] = $roleNameen;
        return $this;
    }

    /**
    * Gets fullName
    *  **参数解释：** 全名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getFullName()
    {
        return $this->container['fullName'];
    }

    /**
    * Sets fullName
    *
    * @param string|null $fullName **参数解释：** 全名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setFullName($fullName)
    {
        $this->container['fullName'] = $fullName;
        return $this;
    }

    /**
    * Gets fullPath
    *  **参数解释：** 全路径。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getFullPath()
    {
        return $this->container['fullPath'];
    }

    /**
    * Sets fullPath
    *
    * @param string|null $fullPath **参数解释：** 全路径。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setFullPath($fullPath)
    {
        $this->container['fullPath'] = $fullPath;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
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
    * @param string|null $createdAt **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAtTimestamp
    *  **参数解释：** 更新时间戳。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getUpdatedAtTimestamp()
    {
        return $this->container['updatedAtTimestamp'];
    }

    /**
    * Sets updatedAtTimestamp
    *
    * @param string|null $updatedAtTimestamp **参数解释：** 更新时间戳。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setUpdatedAtTimestamp($updatedAtTimestamp)
    {
        $this->container['updatedAtTimestamp'] = $updatedAtTimestamp;
        return $this;
    }

    /**
    * Gets starTime
    *  **参数解释：** 开始时间戳。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getStarTime()
    {
        return $this->container['starTime'];
    }

    /**
    * Sets starTime
    *
    * @param string|null $starTime **参数解释：** 开始时间戳。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setStarTime($starTime)
    {
        $this->container['starTime'] = $starTime;
        return $this;
    }

    /**
    * Gets starred
    *  **参数解释：** 是否收藏。
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
    * @param bool|null $starred **参数解释：** 是否收藏。
    *
    * @return $this
    */
    public function setStarred($starred)
    {
        $this->container['starred'] = $starred;
        return $this;
    }

    /**
    * Gets developMode
    *  **参数解释：** 开发模式，cr,\"normal\"。 **取值范围：** 字符串长度不少于1，不超过1000。
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
    * @param string|null $developMode **参数解释：** 开发模式，cr,\"normal\"。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setDevelopMode($developMode)
    {
        $this->container['developMode'] = $developMode;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释：** 仓库或者代码组id。
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
    * @param int|null $id **参数解释：** 仓库或者代码组id。
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
    *  **参数解释：** 代码组或仓库名称。 **取值范围：** 字符串长度不少于1，不超过1000。
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
    * @param string|null $name **参数解释：** 代码组或仓库名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets path
    *  **参数解释：** 路径。 **取值范围：** 字符串长度不少于1，不超过1000。
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
    * @param string|null $path **参数解释：** 路径。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets groupLevel
    *  **参数解释：** 代码组层级。
    *
    * @return int|null
    */
    public function getGroupLevel()
    {
        return $this->container['groupLevel'];
    }

    /**
    * Sets groupLevel
    *
    * @param int|null $groupLevel **参数解释：** 代码组层级。
    *
    * @return $this
    */
    public function setGroupLevel($groupLevel)
    {
        $this->container['groupLevel'] = $groupLevel;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：** 代码组或仓库描述。 **取值范围：** 字符串长度不少于1，不超过1000。
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
    * @param string|null $description **参数解释：** 代码组或仓库描述。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets subgroupCount
    *  **参数解释：** 子代码组数量。
    *
    * @return int|null
    */
    public function getSubgroupCount()
    {
        return $this->container['subgroupCount'];
    }

    /**
    * Sets subgroupCount
    *
    * @param int|null $subgroupCount **参数解释：** 子代码组数量。
    *
    * @return $this
    */
    public function setSubgroupCount($subgroupCount)
    {
        $this->container['subgroupCount'] = $subgroupCount;
        return $this;
    }

    /**
    * Gets projectCount
    *  **参数解释：** 仓库数量。
    *
    * @return int|null
    */
    public function getProjectCount()
    {
        return $this->container['projectCount'];
    }

    /**
    * Sets projectCount
    *
    * @param int|null $projectCount **参数解释：** 仓库数量。
    *
    * @return $this
    */
    public function setProjectCount($projectCount)
    {
        $this->container['projectCount'] = $projectCount;
        return $this;
    }

    /**
    * Gets groupRole
    *  **参数解释：** 代码组角色。
    *
    * @return int|null
    */
    public function getGroupRole()
    {
        return $this->container['groupRole'];
    }

    /**
    * Sets groupRole
    *
    * @param int|null $groupRole **参数解释：** 代码组角色。
    *
    * @return $this
    */
    public function setGroupRole($groupRole)
    {
        $this->container['groupRole'] = $groupRole;
        return $this;
    }

    /**
    * Gets groupMembersCount
    *  **参数解释：** 代码组成员数量。
    *
    * @return int|null
    */
    public function getGroupMembersCount()
    {
        return $this->container['groupMembersCount'];
    }

    /**
    * Sets groupMembersCount
    *
    * @param int|null $groupMembersCount **参数解释：** 代码组成员数量。
    *
    * @return $this
    */
    public function setGroupMembersCount($groupMembersCount)
    {
        $this->container['groupMembersCount'] = $groupMembersCount;
        return $this;
    }

    /**
    * Gets descendantType
    *  **参数解释：** 资源类型 group,project。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getDescendantType()
    {
        return $this->container['descendantType'];
    }

    /**
    * Sets descendantType
    *
    * @param string|null $descendantType **参数解释：** 资源类型 group,project。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setDescendantType($descendantType)
    {
        $this->container['descendantType'] = $descendantType;
        return $this;
    }

    /**
    * Gets visibilityLevel
    *  **参数解释：** 可见性level 0(私有),20(公开)
    *
    * @return int|null
    */
    public function getVisibilityLevel()
    {
        return $this->container['visibilityLevel'];
    }

    /**
    * Sets visibilityLevel
    *
    * @param int|null $visibilityLevel **参数解释：** 可见性level 0(私有),20(公开)
    *
    * @return $this
    */
    public function setVisibilityLevel($visibilityLevel)
    {
        $this->container['visibilityLevel'] = $visibilityLevel;
        return $this;
    }

    /**
    * Gets visibility
    *  **参数解释：** 可见性 private public。 **取值范围：** 字符串长度不少于1，不超过1000。
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
    * @param string|null $visibility **参数解释：** 可见性 private public。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setVisibility($visibility)
    {
        $this->container['visibility'] = $visibility;
        return $this;
    }

    /**
    * Gets isProjectAdmin
    *  **参数解释：** 当前用户是否为项目创建者。
    *
    * @return int|null
    */
    public function getIsProjectAdmin()
    {
        return $this->container['isProjectAdmin'];
    }

    /**
    * Sets isProjectAdmin
    *
    * @param int|null $isProjectAdmin **参数解释：** 当前用户是否为项目创建者。
    *
    * @return $this
    */
    public function setIsProjectAdmin($isProjectAdmin)
    {
        $this->container['isProjectAdmin'] = $isProjectAdmin;
        return $this;
    }

    /**
    * Gets isGroupCreator
    *  **参数解释：** 当前用户是否为代码组创建者。
    *
    * @return int|null
    */
    public function getIsGroupCreator()
    {
        return $this->container['isGroupCreator'];
    }

    /**
    * Sets isGroupCreator
    *
    * @param int|null $isGroupCreator **参数解释：** 当前用户是否为代码组创建者。
    *
    * @return $this
    */
    public function setIsGroupCreator($isGroupCreator)
    {
        $this->container['isGroupCreator'] = $isGroupCreator;
        return $this;
    }

    /**
    * Gets isRepoCreator
    *  **参数解释：** 当前用户是否为仓库创建者。
    *
    * @return int|null
    */
    public function getIsRepoCreator()
    {
        return $this->container['isRepoCreator'];
    }

    /**
    * Sets isRepoCreator
    *
    * @param int|null $isRepoCreator **参数解释：** 当前用户是否为仓库创建者。
    *
    * @return $this
    */
    public function setIsRepoCreator($isRepoCreator)
    {
        $this->container['isRepoCreator'] = $isRepoCreator;
        return $this;
    }

    /**
    * Gets roleShowFlag
    *  **参数解释：** 角色展示标记。
    *
    * @return int|null
    */
    public function getRoleShowFlag()
    {
        return $this->container['roleShowFlag'];
    }

    /**
    * Sets roleShowFlag
    *
    * @param int|null $roleShowFlag **参数解释：** 角色展示标记。
    *
    * @return $this
    */
    public function setRoleShowFlag($roleShowFlag)
    {
        $this->container['roleShowFlag'] = $roleShowFlag;
        return $this;
    }

    /**
    * Gets uuid
    *  **参数解释：** 仓库的uuid。 **取值范围：** 字符串长度不少于1，不超过1000。
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
    * @param string|null $uuid **参数解释：** 仓库的uuid。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;
        return $this;
    }

    /**
    * Gets forksCount
    *  **参数解释：** fork数量。
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
    * @param int|null $forksCount **参数解释：** fork数量。
    *
    * @return $this
    */
    public function setForksCount($forksCount)
    {
        $this->container['forksCount'] = $forksCount;
        return $this;
    }

    /**
    * Gets isKia
    *  **参数解释：** 是否为kia。
    *
    * @return bool|null
    */
    public function getIsKia()
    {
        return $this->container['isKia'];
    }

    /**
    * Sets isKia
    *
    * @param bool|null $isKia **参数解释：** 是否为kia。
    *
    * @return $this
    */
    public function setIsKia($isKia)
    {
        $this->container['isKia'] = $isKia;
        return $this;
    }

    /**
    * Gets isOwner
    *  **参数解释：** 是否为所有者。
    *
    * @return bool|null
    */
    public function getIsOwner()
    {
        return $this->container['isOwner'];
    }

    /**
    * Sets isOwner
    *
    * @param bool|null $isOwner **参数解释：** 是否为所有者。
    *
    * @return $this
    */
    public function setIsOwner($isOwner)
    {
        $this->container['isOwner'] = $isOwner;
        return $this;
    }

    /**
    * Gets archived
    *  **参数解释：** 是否为存档。
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
    * @param bool|null $archived **参数解释：** 是否为存档。
    *
    * @return $this
    */
    public function setArchived($archived)
    {
        $this->container['archived'] = $archived;
        return $this;
    }

    /**
    * Gets lastRepositoryUpdatedAt
    *  **参数解释：** 仓库的最后更新时间。 **取值范围：** 字符串长度不少于1，不超过1000。
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
    * @param string|null $lastRepositoryUpdatedAt **参数解释：** 仓库的最后更新时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setLastRepositoryUpdatedAt($lastRepositoryUpdatedAt)
    {
        $this->container['lastRepositoryUpdatedAt'] = $lastRepositoryUpdatedAt;
        return $this;
    }

    /**
    * Gets openMergeRequestsCount
    *  **参数解释：** 开启的mr数量。
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
    * @param int|null $openMergeRequestsCount **参数解释：** 开启的mr数量。
    *
    * @return $this
    */
    public function setOpenMergeRequestsCount($openMergeRequestsCount)
    {
        $this->container['openMergeRequestsCount'] = $openMergeRequestsCount;
        return $this;
    }

    /**
    * Gets allMergeRequestsCount
    *  **参数解释：** 所有的mr数量。
    *
    * @return int|null
    */
    public function getAllMergeRequestsCount()
    {
        return $this->container['allMergeRequestsCount'];
    }

    /**
    * Sets allMergeRequestsCount
    *
    * @param int|null $allMergeRequestsCount **参数解释：** 所有的mr数量。
    *
    * @return $this
    */
    public function setAllMergeRequestsCount($allMergeRequestsCount)
    {
        $this->container['allMergeRequestsCount'] = $allMergeRequestsCount;
        return $this;
    }

    /**
    * Gets projectRole
    *  **参数解释：** 仓库角色。
    *
    * @return int|null
    */
    public function getProjectRole()
    {
        return $this->container['projectRole'];
    }

    /**
    * Sets projectRole
    *
    * @param int|null $projectRole **参数解释：** 仓库角色。
    *
    * @return $this
    */
    public function setProjectRole($projectRole)
    {
        $this->container['projectRole'] = $projectRole;
        return $this;
    }

    /**
    * Gets projectMembersCount
    *  **参数解释：** fork数量。
    *
    * @return int|null
    */
    public function getProjectMembersCount()
    {
        return $this->container['projectMembersCount'];
    }

    /**
    * Sets projectMembersCount
    *
    * @param int|null $projectMembersCount **参数解释：** fork数量。
    *
    * @return $this
    */
    public function setProjectMembersCount($projectMembersCount)
    {
        $this->container['projectMembersCount'] = $projectMembersCount;
        return $this;
    }

    /**
    * Gets projectCreator
    *  projectCreator
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\ProjectCreatorDto|null
    */
    public function getProjectCreator()
    {
        return $this->container['projectCreator'];
    }

    /**
    * Sets projectCreator
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\ProjectCreatorDto|null $projectCreator projectCreator
    *
    * @return $this
    */
    public function setProjectCreator($projectCreator)
    {
        $this->container['projectCreator'] = $projectCreator;
        return $this;
    }

    /**
    * Gets starCount
    *  **参数解释：** fork数量。
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
    * @param int|null $starCount **参数解释：** fork数量。
    *
    * @return $this
    */
    public function setStarCount($starCount)
    {
        $this->container['starCount'] = $starCount;
        return $this;
    }

    /**
    * Gets tagList
    *  **参数解释：** tag列表。
    *
    * @return string[]|null
    */
    public function getTagList()
    {
        return $this->container['tagList'];
    }

    /**
    * Sets tagList
    *
    * @param string[]|null $tagList **参数解释：** tag列表。
    *
    * @return $this
    */
    public function setTagList($tagList)
    {
        $this->container['tagList'] = $tagList;
        return $this;
    }

    /**
    * Gets httpUrlToRepo
    *  **参数解释：** 仓库的http url。 **取值范围：** 字符串长度不少于1，不超过1000。
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
    * @param string|null $httpUrlToRepo **参数解释：** 仓库的http url。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setHttpUrlToRepo($httpUrlToRepo)
    {
        $this->container['httpUrlToRepo'] = $httpUrlToRepo;
        return $this;
    }

    /**
    * Gets sshUrlToRepo
    *  **参数解释：** 仓库的ssh url。 **取值范围：** 字符串长度不少于1，不超过1000。
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
    * @param string|null $sshUrlToRepo **参数解释：** 仓库的ssh url。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setSshUrlToRepo($sshUrlToRepo)
    {
        $this->container['sshUrlToRepo'] = $sshUrlToRepo;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 状态。
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status **参数解释：** 状态。
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
    *  **参数解释：** 活跃统计。
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
    * @param int[]|null $activeStatistic **参数解释：** 活跃统计。
    *
    * @return $this
    */
    public function setActiveStatistic($activeStatistic)
    {
        $this->container['activeStatistic'] = $activeStatistic;
        return $this;
    }

    /**
    * Gets securityTag
    *  **参数解释：** 安全标签。 **取值范围：** 字符串长度不少于1，不超过1000。
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
    * @param string|null $securityTag **参数解释：** 安全标签。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setSecurityTag($securityTag)
    {
        $this->container['securityTag'] = $securityTag;
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

