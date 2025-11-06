<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GroupBaseDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GroupBaseDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  **参数解释：** 项目id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * projectName  **参数解释：** 项目名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * ancestorIds  **参数解释：** 代码组id。
    * ancestorNames  **参数解释：** 代码组名称。
    * developMode  **参数解释：** 开发模式，normal，cr。 **取值范围：** 字符串长度不少于1，不超过1000。
    * id  **参数解释：** 记录id。
    * name  **参数解释：** 名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * path  **参数解释：** 路径。 **取值范围：** 字符串长度不少于1，不超过1000。
    * groupLevel  **参数解释：** 代码组层级。
    * description  **参数解释：** 描述。 **取值范围：** 字符串长度不少于1，不超过1000。
    * subgroupCount  **参数解释：** 子代码组数量。
    * projectCount  **参数解释：** 仓库数量。
    * groupRole  **参数解释：** 代码组角色。
    * groupMembersCount  **参数解释：** 代码组成员数量。
    * descendantType  **参数解释：** 类型。 **取值范围：** 字符串长度不少于1，不超过1000。
    * visibilityLevel  **参数解释：** 可见性 0 20。
    * visibility  **参数解释：** 可见性 private public。 **取值范围：** 字符串长度不少于1，不超过1000。
    * isProjectAdmin  **参数解释：** 是否为项目创建者。
    * isGroupCreator  **参数解释：** 是否为代码组创建者。
    * isRepoCreator  **参数解释：** 是否为仓库创建者。
    * lfsEnabled  **参数解释：** lfs是否开启。
    * fullName  **参数解释：** 全名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * fullPath  **参数解释：** 全路径。 **取值范围：** 字符串长度不少于1，不超过1000。
    * itemType  **参数解释：** item类型。 **取值范围：** 字符串长度不少于1，不超过1000。
    * parentId  **参数解释：** 父代码组id。
    * myRole  myRole
    * members  **参数解释：** 成员。
    * webUrl  **参数解释：** url地址。 **取值范围：** 字符串长度不少于1，不超过1000。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * subGroupCount  **参数解释：** 子代码组数量。
    * lastOwner  **参数解释：** 是否为最后所有者。
    * starred  **参数解释：** 是否关注。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'projectName' => 'string',
            'ancestorIds' => 'int[]',
            'ancestorNames' => 'string[]',
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
            'lfsEnabled' => 'bool',
            'fullName' => 'string',
            'fullPath' => 'string',
            'itemType' => 'string',
            'parentId' => 'int',
            'myRole' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\GroupMyRoleDtoV4',
            'members' => 'int',
            'webUrl' => 'string',
            'createdAt' => 'string',
            'subGroupCount' => 'int',
            'lastOwner' => 'bool',
            'starred' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  **参数解释：** 项目id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * projectName  **参数解释：** 项目名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * ancestorIds  **参数解释：** 代码组id。
    * ancestorNames  **参数解释：** 代码组名称。
    * developMode  **参数解释：** 开发模式，normal，cr。 **取值范围：** 字符串长度不少于1，不超过1000。
    * id  **参数解释：** 记录id。
    * name  **参数解释：** 名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * path  **参数解释：** 路径。 **取值范围：** 字符串长度不少于1，不超过1000。
    * groupLevel  **参数解释：** 代码组层级。
    * description  **参数解释：** 描述。 **取值范围：** 字符串长度不少于1，不超过1000。
    * subgroupCount  **参数解释：** 子代码组数量。
    * projectCount  **参数解释：** 仓库数量。
    * groupRole  **参数解释：** 代码组角色。
    * groupMembersCount  **参数解释：** 代码组成员数量。
    * descendantType  **参数解释：** 类型。 **取值范围：** 字符串长度不少于1，不超过1000。
    * visibilityLevel  **参数解释：** 可见性 0 20。
    * visibility  **参数解释：** 可见性 private public。 **取值范围：** 字符串长度不少于1，不超过1000。
    * isProjectAdmin  **参数解释：** 是否为项目创建者。
    * isGroupCreator  **参数解释：** 是否为代码组创建者。
    * isRepoCreator  **参数解释：** 是否为仓库创建者。
    * lfsEnabled  **参数解释：** lfs是否开启。
    * fullName  **参数解释：** 全名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * fullPath  **参数解释：** 全路径。 **取值范围：** 字符串长度不少于1，不超过1000。
    * itemType  **参数解释：** item类型。 **取值范围：** 字符串长度不少于1，不超过1000。
    * parentId  **参数解释：** 父代码组id。
    * myRole  myRole
    * members  **参数解释：** 成员。
    * webUrl  **参数解释：** url地址。 **取值范围：** 字符串长度不少于1，不超过1000。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * subGroupCount  **参数解释：** 子代码组数量。
    * lastOwner  **参数解释：** 是否为最后所有者。
    * starred  **参数解释：** 是否关注。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'projectName' => null,
        'ancestorIds' => 'int32',
        'ancestorNames' => null,
        'developMode' => null,
        'id' => 'int32',
        'name' => null,
        'path' => null,
        'groupLevel' => null,
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
        'lfsEnabled' => null,
        'fullName' => null,
        'fullPath' => null,
        'itemType' => null,
        'parentId' => 'int32',
        'myRole' => null,
        'members' => 'int32',
        'webUrl' => null,
        'createdAt' => null,
        'subGroupCount' => 'int32',
        'lastOwner' => null,
        'starred' => null
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
    * ancestorIds  **参数解释：** 代码组id。
    * ancestorNames  **参数解释：** 代码组名称。
    * developMode  **参数解释：** 开发模式，normal，cr。 **取值范围：** 字符串长度不少于1，不超过1000。
    * id  **参数解释：** 记录id。
    * name  **参数解释：** 名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * path  **参数解释：** 路径。 **取值范围：** 字符串长度不少于1，不超过1000。
    * groupLevel  **参数解释：** 代码组层级。
    * description  **参数解释：** 描述。 **取值范围：** 字符串长度不少于1，不超过1000。
    * subgroupCount  **参数解释：** 子代码组数量。
    * projectCount  **参数解释：** 仓库数量。
    * groupRole  **参数解释：** 代码组角色。
    * groupMembersCount  **参数解释：** 代码组成员数量。
    * descendantType  **参数解释：** 类型。 **取值范围：** 字符串长度不少于1，不超过1000。
    * visibilityLevel  **参数解释：** 可见性 0 20。
    * visibility  **参数解释：** 可见性 private public。 **取值范围：** 字符串长度不少于1，不超过1000。
    * isProjectAdmin  **参数解释：** 是否为项目创建者。
    * isGroupCreator  **参数解释：** 是否为代码组创建者。
    * isRepoCreator  **参数解释：** 是否为仓库创建者。
    * lfsEnabled  **参数解释：** lfs是否开启。
    * fullName  **参数解释：** 全名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * fullPath  **参数解释：** 全路径。 **取值范围：** 字符串长度不少于1，不超过1000。
    * itemType  **参数解释：** item类型。 **取值范围：** 字符串长度不少于1，不超过1000。
    * parentId  **参数解释：** 父代码组id。
    * myRole  myRole
    * members  **参数解释：** 成员。
    * webUrl  **参数解释：** url地址。 **取值范围：** 字符串长度不少于1，不超过1000。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * subGroupCount  **参数解释：** 子代码组数量。
    * lastOwner  **参数解释：** 是否为最后所有者。
    * starred  **参数解释：** 是否关注。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'projectName' => 'project_name',
            'ancestorIds' => 'ancestor_ids',
            'ancestorNames' => 'ancestor_names',
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
            'lfsEnabled' => 'lfs_enabled',
            'fullName' => 'full_name',
            'fullPath' => 'full_path',
            'itemType' => 'item_type',
            'parentId' => 'parent_id',
            'myRole' => 'my_role',
            'members' => 'members',
            'webUrl' => 'web_url',
            'createdAt' => 'created_at',
            'subGroupCount' => 'sub_group_count',
            'lastOwner' => 'last_owner',
            'starred' => 'starred'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  **参数解释：** 项目id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * projectName  **参数解释：** 项目名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * ancestorIds  **参数解释：** 代码组id。
    * ancestorNames  **参数解释：** 代码组名称。
    * developMode  **参数解释：** 开发模式，normal，cr。 **取值范围：** 字符串长度不少于1，不超过1000。
    * id  **参数解释：** 记录id。
    * name  **参数解释：** 名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * path  **参数解释：** 路径。 **取值范围：** 字符串长度不少于1，不超过1000。
    * groupLevel  **参数解释：** 代码组层级。
    * description  **参数解释：** 描述。 **取值范围：** 字符串长度不少于1，不超过1000。
    * subgroupCount  **参数解释：** 子代码组数量。
    * projectCount  **参数解释：** 仓库数量。
    * groupRole  **参数解释：** 代码组角色。
    * groupMembersCount  **参数解释：** 代码组成员数量。
    * descendantType  **参数解释：** 类型。 **取值范围：** 字符串长度不少于1，不超过1000。
    * visibilityLevel  **参数解释：** 可见性 0 20。
    * visibility  **参数解释：** 可见性 private public。 **取值范围：** 字符串长度不少于1，不超过1000。
    * isProjectAdmin  **参数解释：** 是否为项目创建者。
    * isGroupCreator  **参数解释：** 是否为代码组创建者。
    * isRepoCreator  **参数解释：** 是否为仓库创建者。
    * lfsEnabled  **参数解释：** lfs是否开启。
    * fullName  **参数解释：** 全名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * fullPath  **参数解释：** 全路径。 **取值范围：** 字符串长度不少于1，不超过1000。
    * itemType  **参数解释：** item类型。 **取值范围：** 字符串长度不少于1，不超过1000。
    * parentId  **参数解释：** 父代码组id。
    * myRole  myRole
    * members  **参数解释：** 成员。
    * webUrl  **参数解释：** url地址。 **取值范围：** 字符串长度不少于1，不超过1000。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * subGroupCount  **参数解释：** 子代码组数量。
    * lastOwner  **参数解释：** 是否为最后所有者。
    * starred  **参数解释：** 是否关注。
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'projectName' => 'setProjectName',
            'ancestorIds' => 'setAncestorIds',
            'ancestorNames' => 'setAncestorNames',
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
            'lfsEnabled' => 'setLfsEnabled',
            'fullName' => 'setFullName',
            'fullPath' => 'setFullPath',
            'itemType' => 'setItemType',
            'parentId' => 'setParentId',
            'myRole' => 'setMyRole',
            'members' => 'setMembers',
            'webUrl' => 'setWebUrl',
            'createdAt' => 'setCreatedAt',
            'subGroupCount' => 'setSubGroupCount',
            'lastOwner' => 'setLastOwner',
            'starred' => 'setStarred'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  **参数解释：** 项目id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * projectName  **参数解释：** 项目名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * ancestorIds  **参数解释：** 代码组id。
    * ancestorNames  **参数解释：** 代码组名称。
    * developMode  **参数解释：** 开发模式，normal，cr。 **取值范围：** 字符串长度不少于1，不超过1000。
    * id  **参数解释：** 记录id。
    * name  **参数解释：** 名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * path  **参数解释：** 路径。 **取值范围：** 字符串长度不少于1，不超过1000。
    * groupLevel  **参数解释：** 代码组层级。
    * description  **参数解释：** 描述。 **取值范围：** 字符串长度不少于1，不超过1000。
    * subgroupCount  **参数解释：** 子代码组数量。
    * projectCount  **参数解释：** 仓库数量。
    * groupRole  **参数解释：** 代码组角色。
    * groupMembersCount  **参数解释：** 代码组成员数量。
    * descendantType  **参数解释：** 类型。 **取值范围：** 字符串长度不少于1，不超过1000。
    * visibilityLevel  **参数解释：** 可见性 0 20。
    * visibility  **参数解释：** 可见性 private public。 **取值范围：** 字符串长度不少于1，不超过1000。
    * isProjectAdmin  **参数解释：** 是否为项目创建者。
    * isGroupCreator  **参数解释：** 是否为代码组创建者。
    * isRepoCreator  **参数解释：** 是否为仓库创建者。
    * lfsEnabled  **参数解释：** lfs是否开启。
    * fullName  **参数解释：** 全名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * fullPath  **参数解释：** 全路径。 **取值范围：** 字符串长度不少于1，不超过1000。
    * itemType  **参数解释：** item类型。 **取值范围：** 字符串长度不少于1，不超过1000。
    * parentId  **参数解释：** 父代码组id。
    * myRole  myRole
    * members  **参数解释：** 成员。
    * webUrl  **参数解释：** url地址。 **取值范围：** 字符串长度不少于1，不超过1000。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * subGroupCount  **参数解释：** 子代码组数量。
    * lastOwner  **参数解释：** 是否为最后所有者。
    * starred  **参数解释：** 是否关注。
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'projectName' => 'getProjectName',
            'ancestorIds' => 'getAncestorIds',
            'ancestorNames' => 'getAncestorNames',
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
            'lfsEnabled' => 'getLfsEnabled',
            'fullName' => 'getFullName',
            'fullPath' => 'getFullPath',
            'itemType' => 'getItemType',
            'parentId' => 'getParentId',
            'myRole' => 'getMyRole',
            'members' => 'getMembers',
            'webUrl' => 'getWebUrl',
            'createdAt' => 'getCreatedAt',
            'subGroupCount' => 'getSubGroupCount',
            'lastOwner' => 'getLastOwner',
            'starred' => 'getStarred'
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
        $this->container['ancestorIds'] = isset($data['ancestorIds']) ? $data['ancestorIds'] : null;
        $this->container['ancestorNames'] = isset($data['ancestorNames']) ? $data['ancestorNames'] : null;
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
        $this->container['lfsEnabled'] = isset($data['lfsEnabled']) ? $data['lfsEnabled'] : null;
        $this->container['fullName'] = isset($data['fullName']) ? $data['fullName'] : null;
        $this->container['fullPath'] = isset($data['fullPath']) ? $data['fullPath'] : null;
        $this->container['itemType'] = isset($data['itemType']) ? $data['itemType'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['myRole'] = isset($data['myRole']) ? $data['myRole'] : null;
        $this->container['members'] = isset($data['members']) ? $data['members'] : null;
        $this->container['webUrl'] = isset($data['webUrl']) ? $data['webUrl'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['subGroupCount'] = isset($data['subGroupCount']) ? $data['subGroupCount'] : null;
        $this->container['lastOwner'] = isset($data['lastOwner']) ? $data['lastOwner'] : null;
        $this->container['starred'] = isset($data['starred']) ? $data['starred'] : null;
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
            if (!is_null($this->container['itemType']) && (mb_strlen($this->container['itemType']) > 1000)) {
                $invalidProperties[] = "invalid value for 'itemType', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['itemType']) && (mb_strlen($this->container['itemType']) < 1)) {
                $invalidProperties[] = "invalid value for 'itemType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['parentId']) && ($this->container['parentId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'parentId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['parentId']) && ($this->container['parentId'] < 1)) {
                $invalidProperties[] = "invalid value for 'parentId', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['members']) && ($this->container['members'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'members', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['members']) && ($this->container['members'] < 1)) {
                $invalidProperties[] = "invalid value for 'members', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['webUrl']) && (mb_strlen($this->container['webUrl']) > 1000)) {
                $invalidProperties[] = "invalid value for 'webUrl', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['webUrl']) && (mb_strlen($this->container['webUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'webUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) > 1000)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) < 1)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['subGroupCount']) && ($this->container['subGroupCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'subGroupCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['subGroupCount']) && ($this->container['subGroupCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'subGroupCount', must be bigger than or equal to 1.";
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
    * Gets ancestorIds
    *  **参数解释：** 代码组id。
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
    * @param int[]|null $ancestorIds **参数解释：** 代码组id。
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
    *  **参数解释：** 代码组名称。
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
    * @param string[]|null $ancestorNames **参数解释：** 代码组名称。
    *
    * @return $this
    */
    public function setAncestorNames($ancestorNames)
    {
        $this->container['ancestorNames'] = $ancestorNames;
        return $this;
    }

    /**
    * Gets developMode
    *  **参数解释：** 开发模式，normal，cr。 **取值范围：** 字符串长度不少于1，不超过1000。
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
    * @param string|null $developMode **参数解释：** 开发模式，normal，cr。 **取值范围：** 字符串长度不少于1，不超过1000。
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
    *  **参数解释：** 记录id。
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
    * @param int|null $id **参数解释：** 记录id。
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
    *  **参数解释：** 名称。 **取值范围：** 字符串长度不少于1，不超过1000。
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
    * @param string|null $name **参数解释：** 名称。 **取值范围：** 字符串长度不少于1，不超过1000。
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
    *  **参数解释：** 描述。 **取值范围：** 字符串长度不少于1，不超过1000。
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
    * @param string|null $description **参数解释：** 描述。 **取值范围：** 字符串长度不少于1，不超过1000。
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
    *  **参数解释：** 类型。 **取值范围：** 字符串长度不少于1，不超过1000。
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
    * @param string|null $descendantType **参数解释：** 类型。 **取值范围：** 字符串长度不少于1，不超过1000。
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
    *  **参数解释：** 可见性 0 20。
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
    * @param int|null $visibilityLevel **参数解释：** 可见性 0 20。
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
    *  **参数解释：** 是否为项目创建者。
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
    * @param int|null $isProjectAdmin **参数解释：** 是否为项目创建者。
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
    *  **参数解释：** 是否为代码组创建者。
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
    * @param int|null $isGroupCreator **参数解释：** 是否为代码组创建者。
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
    *  **参数解释：** 是否为仓库创建者。
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
    * @param int|null $isRepoCreator **参数解释：** 是否为仓库创建者。
    *
    * @return $this
    */
    public function setIsRepoCreator($isRepoCreator)
    {
        $this->container['isRepoCreator'] = $isRepoCreator;
        return $this;
    }

    /**
    * Gets lfsEnabled
    *  **参数解释：** lfs是否开启。
    *
    * @return bool|null
    */
    public function getLfsEnabled()
    {
        return $this->container['lfsEnabled'];
    }

    /**
    * Sets lfsEnabled
    *
    * @param bool|null $lfsEnabled **参数解释：** lfs是否开启。
    *
    * @return $this
    */
    public function setLfsEnabled($lfsEnabled)
    {
        $this->container['lfsEnabled'] = $lfsEnabled;
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
    * Gets itemType
    *  **参数解释：** item类型。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getItemType()
    {
        return $this->container['itemType'];
    }

    /**
    * Sets itemType
    *
    * @param string|null $itemType **参数解释：** item类型。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setItemType($itemType)
    {
        $this->container['itemType'] = $itemType;
        return $this;
    }

    /**
    * Gets parentId
    *  **参数解释：** 父代码组id。
    *
    * @return int|null
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param int|null $parentId **参数解释：** 父代码组id。
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets myRole
    *  myRole
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\GroupMyRoleDtoV4|null
    */
    public function getMyRole()
    {
        return $this->container['myRole'];
    }

    /**
    * Sets myRole
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\GroupMyRoleDtoV4|null $myRole myRole
    *
    * @return $this
    */
    public function setMyRole($myRole)
    {
        $this->container['myRole'] = $myRole;
        return $this;
    }

    /**
    * Gets members
    *  **参数解释：** 成员。
    *
    * @return int|null
    */
    public function getMembers()
    {
        return $this->container['members'];
    }

    /**
    * Sets members
    *
    * @param int|null $members **参数解释：** 成员。
    *
    * @return $this
    */
    public function setMembers($members)
    {
        $this->container['members'] = $members;
        return $this;
    }

    /**
    * Gets webUrl
    *  **参数解释：** url地址。 **取值范围：** 字符串长度不少于1，不超过1000。
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
    * @param string|null $webUrl **参数解释：** url地址。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setWebUrl($webUrl)
    {
        $this->container['webUrl'] = $webUrl;
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
    * Gets subGroupCount
    *  **参数解释：** 子代码组数量。
    *
    * @return int|null
    */
    public function getSubGroupCount()
    {
        return $this->container['subGroupCount'];
    }

    /**
    * Sets subGroupCount
    *
    * @param int|null $subGroupCount **参数解释：** 子代码组数量。
    *
    * @return $this
    */
    public function setSubGroupCount($subGroupCount)
    {
        $this->container['subGroupCount'] = $subGroupCount;
        return $this;
    }

    /**
    * Gets lastOwner
    *  **参数解释：** 是否为最后所有者。
    *
    * @return bool|null
    */
    public function getLastOwner()
    {
        return $this->container['lastOwner'];
    }

    /**
    * Sets lastOwner
    *
    * @param bool|null $lastOwner **参数解释：** 是否为最后所有者。
    *
    * @return $this
    */
    public function setLastOwner($lastOwner)
    {
        $this->container['lastOwner'] = $lastOwner;
        return $this;
    }

    /**
    * Gets starred
    *  **参数解释：** 是否关注。
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
    * @param bool|null $starred **参数解释：** 是否关注。
    *
    * @return $this
    */
    public function setStarred($starred)
    {
        $this->container['starred'] = $starred;
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

