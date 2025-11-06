<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GroupMemberDetailDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GroupMemberDetailDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 唯一标识id。
    * sourceId  **参数解释：** 资源id。
    * userId  **参数解释：** 用户id。
    * userFrom  **参数解释：** 用户来源。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleId  **参数解释：** 角色id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleName  **参数解释：** 角色名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * cnRoleName  **参数解释：** 角色中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * reqRoleId  **参数解释：** 项目角色id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * reqRoleName  **参数解释：** 项目角色名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * userGroupId  **参数解释：** 成员组id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * groupName  **参数解释：** 代码组名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * userName  **参数解释：** 用户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * domainId  **参数解释：** 租户id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * domainName  **参数解释：** 租户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * nickName  **参数解释：** 用户昵称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * isGroupCreator  **参数解释：** 是否为代码组创建者。
    * isProjectAdmin  **参数解释：** 是否为项目管理员。
    * path  **参数解释：** 路径。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleChineseName  **参数解释：** 角色中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * canRemove  **参数解释：** 是否可移除。
    * accessLevel  **参数解释：** 角色。
    * serviceLicenseStatus  **参数解释：** 服务license状态。
    * iamId  **参数解释：** 用户iam_id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * currentGroupMember  **参数解释：** 是否为当前代码组成员。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'sourceId' => 'int',
            'userId' => 'int',
            'userFrom' => 'string',
            'roleId' => 'string',
            'roleName' => 'string',
            'cnRoleName' => 'string',
            'reqRoleId' => 'string',
            'reqRoleName' => 'string',
            'userGroupId' => 'string',
            'groupName' => 'string',
            'userName' => 'string',
            'domainId' => 'string',
            'domainName' => 'string',
            'nickName' => 'string',
            'isGroupCreator' => 'bool',
            'isProjectAdmin' => 'bool',
            'path' => 'string',
            'roleChineseName' => 'string',
            'canRemove' => 'bool',
            'accessLevel' => 'int',
            'serviceLicenseStatus' => 'int',
            'iamId' => 'string',
            'currentGroupMember' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 唯一标识id。
    * sourceId  **参数解释：** 资源id。
    * userId  **参数解释：** 用户id。
    * userFrom  **参数解释：** 用户来源。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleId  **参数解释：** 角色id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleName  **参数解释：** 角色名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * cnRoleName  **参数解释：** 角色中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * reqRoleId  **参数解释：** 项目角色id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * reqRoleName  **参数解释：** 项目角色名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * userGroupId  **参数解释：** 成员组id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * groupName  **参数解释：** 代码组名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * userName  **参数解释：** 用户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * domainId  **参数解释：** 租户id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * domainName  **参数解释：** 租户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * nickName  **参数解释：** 用户昵称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * isGroupCreator  **参数解释：** 是否为代码组创建者。
    * isProjectAdmin  **参数解释：** 是否为项目管理员。
    * path  **参数解释：** 路径。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleChineseName  **参数解释：** 角色中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * canRemove  **参数解释：** 是否可移除。
    * accessLevel  **参数解释：** 角色。
    * serviceLicenseStatus  **参数解释：** 服务license状态。
    * iamId  **参数解释：** 用户iam_id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * currentGroupMember  **参数解释：** 是否为当前代码组成员。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'sourceId' => 'int32',
        'userId' => 'int32',
        'userFrom' => null,
        'roleId' => null,
        'roleName' => null,
        'cnRoleName' => null,
        'reqRoleId' => null,
        'reqRoleName' => null,
        'userGroupId' => null,
        'groupName' => null,
        'userName' => null,
        'domainId' => null,
        'domainName' => null,
        'nickName' => null,
        'isGroupCreator' => null,
        'isProjectAdmin' => null,
        'path' => null,
        'roleChineseName' => null,
        'canRemove' => null,
        'accessLevel' => 'int32',
        'serviceLicenseStatus' => 'int32',
        'iamId' => null,
        'currentGroupMember' => null
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
    * id  **参数解释：** 唯一标识id。
    * sourceId  **参数解释：** 资源id。
    * userId  **参数解释：** 用户id。
    * userFrom  **参数解释：** 用户来源。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleId  **参数解释：** 角色id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleName  **参数解释：** 角色名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * cnRoleName  **参数解释：** 角色中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * reqRoleId  **参数解释：** 项目角色id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * reqRoleName  **参数解释：** 项目角色名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * userGroupId  **参数解释：** 成员组id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * groupName  **参数解释：** 代码组名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * userName  **参数解释：** 用户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * domainId  **参数解释：** 租户id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * domainName  **参数解释：** 租户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * nickName  **参数解释：** 用户昵称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * isGroupCreator  **参数解释：** 是否为代码组创建者。
    * isProjectAdmin  **参数解释：** 是否为项目管理员。
    * path  **参数解释：** 路径。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleChineseName  **参数解释：** 角色中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * canRemove  **参数解释：** 是否可移除。
    * accessLevel  **参数解释：** 角色。
    * serviceLicenseStatus  **参数解释：** 服务license状态。
    * iamId  **参数解释：** 用户iam_id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * currentGroupMember  **参数解释：** 是否为当前代码组成员。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'sourceId' => 'source_id',
            'userId' => 'user_id',
            'userFrom' => 'user_from',
            'roleId' => 'role_id',
            'roleName' => 'role_name',
            'cnRoleName' => 'cn_role_name',
            'reqRoleId' => 'req_role_id',
            'reqRoleName' => 'req_role_name',
            'userGroupId' => 'user_group_id',
            'groupName' => 'group_name',
            'userName' => 'user_name',
            'domainId' => 'domain_id',
            'domainName' => 'domain_name',
            'nickName' => 'nick_name',
            'isGroupCreator' => 'is_group_creator',
            'isProjectAdmin' => 'is_project_admin',
            'path' => 'path',
            'roleChineseName' => 'role_chinese_name',
            'canRemove' => 'can_remove',
            'accessLevel' => 'access_level',
            'serviceLicenseStatus' => 'service_license_status',
            'iamId' => 'iam_id',
            'currentGroupMember' => 'current_group_member'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 唯一标识id。
    * sourceId  **参数解释：** 资源id。
    * userId  **参数解释：** 用户id。
    * userFrom  **参数解释：** 用户来源。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleId  **参数解释：** 角色id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleName  **参数解释：** 角色名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * cnRoleName  **参数解释：** 角色中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * reqRoleId  **参数解释：** 项目角色id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * reqRoleName  **参数解释：** 项目角色名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * userGroupId  **参数解释：** 成员组id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * groupName  **参数解释：** 代码组名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * userName  **参数解释：** 用户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * domainId  **参数解释：** 租户id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * domainName  **参数解释：** 租户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * nickName  **参数解释：** 用户昵称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * isGroupCreator  **参数解释：** 是否为代码组创建者。
    * isProjectAdmin  **参数解释：** 是否为项目管理员。
    * path  **参数解释：** 路径。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleChineseName  **参数解释：** 角色中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * canRemove  **参数解释：** 是否可移除。
    * accessLevel  **参数解释：** 角色。
    * serviceLicenseStatus  **参数解释：** 服务license状态。
    * iamId  **参数解释：** 用户iam_id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * currentGroupMember  **参数解释：** 是否为当前代码组成员。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'sourceId' => 'setSourceId',
            'userId' => 'setUserId',
            'userFrom' => 'setUserFrom',
            'roleId' => 'setRoleId',
            'roleName' => 'setRoleName',
            'cnRoleName' => 'setCnRoleName',
            'reqRoleId' => 'setReqRoleId',
            'reqRoleName' => 'setReqRoleName',
            'userGroupId' => 'setUserGroupId',
            'groupName' => 'setGroupName',
            'userName' => 'setUserName',
            'domainId' => 'setDomainId',
            'domainName' => 'setDomainName',
            'nickName' => 'setNickName',
            'isGroupCreator' => 'setIsGroupCreator',
            'isProjectAdmin' => 'setIsProjectAdmin',
            'path' => 'setPath',
            'roleChineseName' => 'setRoleChineseName',
            'canRemove' => 'setCanRemove',
            'accessLevel' => 'setAccessLevel',
            'serviceLicenseStatus' => 'setServiceLicenseStatus',
            'iamId' => 'setIamId',
            'currentGroupMember' => 'setCurrentGroupMember'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 唯一标识id。
    * sourceId  **参数解释：** 资源id。
    * userId  **参数解释：** 用户id。
    * userFrom  **参数解释：** 用户来源。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleId  **参数解释：** 角色id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleName  **参数解释：** 角色名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * cnRoleName  **参数解释：** 角色中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * reqRoleId  **参数解释：** 项目角色id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * reqRoleName  **参数解释：** 项目角色名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * userGroupId  **参数解释：** 成员组id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * groupName  **参数解释：** 代码组名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * userName  **参数解释：** 用户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * domainId  **参数解释：** 租户id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * domainName  **参数解释：** 租户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * nickName  **参数解释：** 用户昵称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * isGroupCreator  **参数解释：** 是否为代码组创建者。
    * isProjectAdmin  **参数解释：** 是否为项目管理员。
    * path  **参数解释：** 路径。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleChineseName  **参数解释：** 角色中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * canRemove  **参数解释：** 是否可移除。
    * accessLevel  **参数解释：** 角色。
    * serviceLicenseStatus  **参数解释：** 服务license状态。
    * iamId  **参数解释：** 用户iam_id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * currentGroupMember  **参数解释：** 是否为当前代码组成员。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'sourceId' => 'getSourceId',
            'userId' => 'getUserId',
            'userFrom' => 'getUserFrom',
            'roleId' => 'getRoleId',
            'roleName' => 'getRoleName',
            'cnRoleName' => 'getCnRoleName',
            'reqRoleId' => 'getReqRoleId',
            'reqRoleName' => 'getReqRoleName',
            'userGroupId' => 'getUserGroupId',
            'groupName' => 'getGroupName',
            'userName' => 'getUserName',
            'domainId' => 'getDomainId',
            'domainName' => 'getDomainName',
            'nickName' => 'getNickName',
            'isGroupCreator' => 'getIsGroupCreator',
            'isProjectAdmin' => 'getIsProjectAdmin',
            'path' => 'getPath',
            'roleChineseName' => 'getRoleChineseName',
            'canRemove' => 'getCanRemove',
            'accessLevel' => 'getAccessLevel',
            'serviceLicenseStatus' => 'getServiceLicenseStatus',
            'iamId' => 'getIamId',
            'currentGroupMember' => 'getCurrentGroupMember'
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
        $this->container['sourceId'] = isset($data['sourceId']) ? $data['sourceId'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userFrom'] = isset($data['userFrom']) ? $data['userFrom'] : null;
        $this->container['roleId'] = isset($data['roleId']) ? $data['roleId'] : null;
        $this->container['roleName'] = isset($data['roleName']) ? $data['roleName'] : null;
        $this->container['cnRoleName'] = isset($data['cnRoleName']) ? $data['cnRoleName'] : null;
        $this->container['reqRoleId'] = isset($data['reqRoleId']) ? $data['reqRoleId'] : null;
        $this->container['reqRoleName'] = isset($data['reqRoleName']) ? $data['reqRoleName'] : null;
        $this->container['userGroupId'] = isset($data['userGroupId']) ? $data['userGroupId'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['nickName'] = isset($data['nickName']) ? $data['nickName'] : null;
        $this->container['isGroupCreator'] = isset($data['isGroupCreator']) ? $data['isGroupCreator'] : null;
        $this->container['isProjectAdmin'] = isset($data['isProjectAdmin']) ? $data['isProjectAdmin'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['roleChineseName'] = isset($data['roleChineseName']) ? $data['roleChineseName'] : null;
        $this->container['canRemove'] = isset($data['canRemove']) ? $data['canRemove'] : null;
        $this->container['accessLevel'] = isset($data['accessLevel']) ? $data['accessLevel'] : null;
        $this->container['serviceLicenseStatus'] = isset($data['serviceLicenseStatus']) ? $data['serviceLicenseStatus'] : null;
        $this->container['iamId'] = isset($data['iamId']) ? $data['iamId'] : null;
        $this->container['currentGroupMember'] = isset($data['currentGroupMember']) ? $data['currentGroupMember'] : null;
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
            if (!is_null($this->container['sourceId']) && ($this->container['sourceId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'sourceId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['sourceId']) && ($this->container['sourceId'] < 1)) {
                $invalidProperties[] = "invalid value for 'sourceId', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userId']) && ($this->container['userId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'userId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['userId']) && ($this->container['userId'] < 1)) {
                $invalidProperties[] = "invalid value for 'userId', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userFrom']) && (mb_strlen($this->container['userFrom']) > 1000)) {
                $invalidProperties[] = "invalid value for 'userFrom', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['userFrom']) && (mb_strlen($this->container['userFrom']) < 1)) {
                $invalidProperties[] = "invalid value for 'userFrom', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['roleId']) && (mb_strlen($this->container['roleId']) > 1000)) {
                $invalidProperties[] = "invalid value for 'roleId', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['roleId']) && (mb_strlen($this->container['roleId']) < 1)) {
                $invalidProperties[] = "invalid value for 'roleId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['roleName']) && (mb_strlen($this->container['roleName']) > 1000)) {
                $invalidProperties[] = "invalid value for 'roleName', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['roleName']) && (mb_strlen($this->container['roleName']) < 1)) {
                $invalidProperties[] = "invalid value for 'roleName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['cnRoleName']) && (mb_strlen($this->container['cnRoleName']) > 1000)) {
                $invalidProperties[] = "invalid value for 'cnRoleName', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['cnRoleName']) && (mb_strlen($this->container['cnRoleName']) < 1)) {
                $invalidProperties[] = "invalid value for 'cnRoleName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['reqRoleId']) && (mb_strlen($this->container['reqRoleId']) > 1000)) {
                $invalidProperties[] = "invalid value for 'reqRoleId', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['reqRoleId']) && (mb_strlen($this->container['reqRoleId']) < 1)) {
                $invalidProperties[] = "invalid value for 'reqRoleId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['reqRoleName']) && (mb_strlen($this->container['reqRoleName']) > 1000)) {
                $invalidProperties[] = "invalid value for 'reqRoleName', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['reqRoleName']) && (mb_strlen($this->container['reqRoleName']) < 1)) {
                $invalidProperties[] = "invalid value for 'reqRoleName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userGroupId']) && (mb_strlen($this->container['userGroupId']) > 1000)) {
                $invalidProperties[] = "invalid value for 'userGroupId', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['userGroupId']) && (mb_strlen($this->container['userGroupId']) < 1)) {
                $invalidProperties[] = "invalid value for 'userGroupId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) > 1000)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) > 1000)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) < 1)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 1000)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 1)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['domainName']) && (mb_strlen($this->container['domainName']) > 1000)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['domainName']) && (mb_strlen($this->container['domainName']) < 1)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['nickName']) && (mb_strlen($this->container['nickName']) > 1000)) {
                $invalidProperties[] = "invalid value for 'nickName', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['nickName']) && (mb_strlen($this->container['nickName']) < 1)) {
                $invalidProperties[] = "invalid value for 'nickName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) > 1000)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) < 1)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['roleChineseName']) && (mb_strlen($this->container['roleChineseName']) > 1000)) {
                $invalidProperties[] = "invalid value for 'roleChineseName', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['roleChineseName']) && (mb_strlen($this->container['roleChineseName']) < 1)) {
                $invalidProperties[] = "invalid value for 'roleChineseName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['accessLevel']) && ($this->container['accessLevel'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'accessLevel', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['accessLevel']) && ($this->container['accessLevel'] < 1)) {
                $invalidProperties[] = "invalid value for 'accessLevel', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['serviceLicenseStatus']) && ($this->container['serviceLicenseStatus'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'serviceLicenseStatus', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['serviceLicenseStatus']) && ($this->container['serviceLicenseStatus'] < 1)) {
                $invalidProperties[] = "invalid value for 'serviceLicenseStatus', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['iamId']) && (mb_strlen($this->container['iamId']) > 1000)) {
                $invalidProperties[] = "invalid value for 'iamId', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['iamId']) && (mb_strlen($this->container['iamId']) < 1)) {
                $invalidProperties[] = "invalid value for 'iamId', the character length must be bigger than or equal to 1.";
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
    *  **参数解释：** 唯一标识id。
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
    * @param int|null $id **参数解释：** 唯一标识id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets sourceId
    *  **参数解释：** 资源id。
    *
    * @return int|null
    */
    public function getSourceId()
    {
        return $this->container['sourceId'];
    }

    /**
    * Sets sourceId
    *
    * @param int|null $sourceId **参数解释：** 资源id。
    *
    * @return $this
    */
    public function setSourceId($sourceId)
    {
        $this->container['sourceId'] = $sourceId;
        return $this;
    }

    /**
    * Gets userId
    *  **参数解释：** 用户id。
    *
    * @return int|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param int|null $userId **参数解释：** 用户id。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets userFrom
    *  **参数解释：** 用户来源。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getUserFrom()
    {
        return $this->container['userFrom'];
    }

    /**
    * Sets userFrom
    *
    * @param string|null $userFrom **参数解释：** 用户来源。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setUserFrom($userFrom)
    {
        $this->container['userFrom'] = $userFrom;
        return $this;
    }

    /**
    * Gets roleId
    *  **参数解释：** 角色id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getRoleId()
    {
        return $this->container['roleId'];
    }

    /**
    * Sets roleId
    *
    * @param string|null $roleId **参数解释：** 角色id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setRoleId($roleId)
    {
        $this->container['roleId'] = $roleId;
        return $this;
    }

    /**
    * Gets roleName
    *  **参数解释：** 角色名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getRoleName()
    {
        return $this->container['roleName'];
    }

    /**
    * Sets roleName
    *
    * @param string|null $roleName **参数解释：** 角色名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setRoleName($roleName)
    {
        $this->container['roleName'] = $roleName;
        return $this;
    }

    /**
    * Gets cnRoleName
    *  **参数解释：** 角色中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getCnRoleName()
    {
        return $this->container['cnRoleName'];
    }

    /**
    * Sets cnRoleName
    *
    * @param string|null $cnRoleName **参数解释：** 角色中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setCnRoleName($cnRoleName)
    {
        $this->container['cnRoleName'] = $cnRoleName;
        return $this;
    }

    /**
    * Gets reqRoleId
    *  **参数解释：** 项目角色id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getReqRoleId()
    {
        return $this->container['reqRoleId'];
    }

    /**
    * Sets reqRoleId
    *
    * @param string|null $reqRoleId **参数解释：** 项目角色id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setReqRoleId($reqRoleId)
    {
        $this->container['reqRoleId'] = $reqRoleId;
        return $this;
    }

    /**
    * Gets reqRoleName
    *  **参数解释：** 项目角色名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getReqRoleName()
    {
        return $this->container['reqRoleName'];
    }

    /**
    * Sets reqRoleName
    *
    * @param string|null $reqRoleName **参数解释：** 项目角色名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setReqRoleName($reqRoleName)
    {
        $this->container['reqRoleName'] = $reqRoleName;
        return $this;
    }

    /**
    * Gets userGroupId
    *  **参数解释：** 成员组id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getUserGroupId()
    {
        return $this->container['userGroupId'];
    }

    /**
    * Sets userGroupId
    *
    * @param string|null $userGroupId **参数解释：** 成员组id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setUserGroupId($userGroupId)
    {
        $this->container['userGroupId'] = $userGroupId;
        return $this;
    }

    /**
    * Gets groupName
    *  **参数解释：** 代码组名称。 **取值范围：** 字符串长度不少于1，不超过1000。
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
    * @param string|null $groupName **参数解释：** 代码组名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets userName
    *  **参数解释：** 用户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName **参数解释：** 用户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets domainId
    *  **参数解释：** 租户id。 **取值范围：** 字符串长度不少于1，不超过1000。
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
    * @param string|null $domainId **参数解释：** 租户id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets domainName
    *  **参数解释：** 租户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName **参数解释：** 租户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets nickName
    *  **参数解释：** 用户昵称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getNickName()
    {
        return $this->container['nickName'];
    }

    /**
    * Sets nickName
    *
    * @param string|null $nickName **参数解释：** 用户昵称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setNickName($nickName)
    {
        $this->container['nickName'] = $nickName;
        return $this;
    }

    /**
    * Gets isGroupCreator
    *  **参数解释：** 是否为代码组创建者。
    *
    * @return bool|null
    */
    public function getIsGroupCreator()
    {
        return $this->container['isGroupCreator'];
    }

    /**
    * Sets isGroupCreator
    *
    * @param bool|null $isGroupCreator **参数解释：** 是否为代码组创建者。
    *
    * @return $this
    */
    public function setIsGroupCreator($isGroupCreator)
    {
        $this->container['isGroupCreator'] = $isGroupCreator;
        return $this;
    }

    /**
    * Gets isProjectAdmin
    *  **参数解释：** 是否为项目管理员。
    *
    * @return bool|null
    */
    public function getIsProjectAdmin()
    {
        return $this->container['isProjectAdmin'];
    }

    /**
    * Sets isProjectAdmin
    *
    * @param bool|null $isProjectAdmin **参数解释：** 是否为项目管理员。
    *
    * @return $this
    */
    public function setIsProjectAdmin($isProjectAdmin)
    {
        $this->container['isProjectAdmin'] = $isProjectAdmin;
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
    * Gets roleChineseName
    *  **参数解释：** 角色中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getRoleChineseName()
    {
        return $this->container['roleChineseName'];
    }

    /**
    * Sets roleChineseName
    *
    * @param string|null $roleChineseName **参数解释：** 角色中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setRoleChineseName($roleChineseName)
    {
        $this->container['roleChineseName'] = $roleChineseName;
        return $this;
    }

    /**
    * Gets canRemove
    *  **参数解释：** 是否可移除。
    *
    * @return bool|null
    */
    public function getCanRemove()
    {
        return $this->container['canRemove'];
    }

    /**
    * Sets canRemove
    *
    * @param bool|null $canRemove **参数解释：** 是否可移除。
    *
    * @return $this
    */
    public function setCanRemove($canRemove)
    {
        $this->container['canRemove'] = $canRemove;
        return $this;
    }

    /**
    * Gets accessLevel
    *  **参数解释：** 角色。
    *
    * @return int|null
    */
    public function getAccessLevel()
    {
        return $this->container['accessLevel'];
    }

    /**
    * Sets accessLevel
    *
    * @param int|null $accessLevel **参数解释：** 角色。
    *
    * @return $this
    */
    public function setAccessLevel($accessLevel)
    {
        $this->container['accessLevel'] = $accessLevel;
        return $this;
    }

    /**
    * Gets serviceLicenseStatus
    *  **参数解释：** 服务license状态。
    *
    * @return int|null
    */
    public function getServiceLicenseStatus()
    {
        return $this->container['serviceLicenseStatus'];
    }

    /**
    * Sets serviceLicenseStatus
    *
    * @param int|null $serviceLicenseStatus **参数解释：** 服务license状态。
    *
    * @return $this
    */
    public function setServiceLicenseStatus($serviceLicenseStatus)
    {
        $this->container['serviceLicenseStatus'] = $serviceLicenseStatus;
        return $this;
    }

    /**
    * Gets iamId
    *  **参数解释：** 用户iam_id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getIamId()
    {
        return $this->container['iamId'];
    }

    /**
    * Sets iamId
    *
    * @param string|null $iamId **参数解释：** 用户iam_id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setIamId($iamId)
    {
        $this->container['iamId'] = $iamId;
        return $this;
    }

    /**
    * Gets currentGroupMember
    *  **参数解释：** 是否为当前代码组成员。
    *
    * @return bool|null
    */
    public function getCurrentGroupMember()
    {
        return $this->container['currentGroupMember'];
    }

    /**
    * Sets currentGroupMember
    *
    * @param bool|null $currentGroupMember **参数解释：** 是否为当前代码组成员。
    *
    * @return $this
    */
    public function setCurrentGroupMember($currentGroupMember)
    {
        $this->container['currentGroupMember'] = $currentGroupMember;
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

