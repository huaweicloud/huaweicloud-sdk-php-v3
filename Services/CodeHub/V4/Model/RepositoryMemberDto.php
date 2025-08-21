<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RepositoryMemberDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RepositoryMemberDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userId  用户id
    * userIamId  用户iamId
    * userName  用户名称
    * userNickName  用户昵称
    * tenantName  租户名称
    * tenantId  租户id
    * isRepoCreator  是否为仓库所有者
    * isGroupCreator  是否为父代码组所有者
    * isProjectAdmin  是否为项目管理员
    * projectRoleName  项目角色名称
    * repositoryRoleName  仓库角色名称
    * repositoryRoleId  仓库角色id
    * memberSource  成员如果来自成员组，成员组名称
    * memberGroupSource  成员如果来自上层代码组，代码组名称
    * memberSourceId  成员来源id —— 代码组id或者成员组id
    * serviceLicenseStatus  成员服务级权限状态： 1-使用中、0-已停用
    * actionEnabled  是否有对应权限： true-有权限、false-无权限
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'userId' => 'int',
            'userIamId' => 'string',
            'userName' => 'string',
            'userNickName' => 'string',
            'tenantName' => 'string',
            'tenantId' => 'string',
            'isRepoCreator' => 'int',
            'isGroupCreator' => 'int',
            'isProjectAdmin' => 'int',
            'projectRoleName' => 'string',
            'repositoryRoleName' => 'string',
            'repositoryRoleId' => 'string',
            'memberSource' => 'string',
            'memberGroupSource' => 'string',
            'memberSourceId' => 'string',
            'serviceLicenseStatus' => 'int',
            'actionEnabled' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userId  用户id
    * userIamId  用户iamId
    * userName  用户名称
    * userNickName  用户昵称
    * tenantName  租户名称
    * tenantId  租户id
    * isRepoCreator  是否为仓库所有者
    * isGroupCreator  是否为父代码组所有者
    * isProjectAdmin  是否为项目管理员
    * projectRoleName  项目角色名称
    * repositoryRoleName  仓库角色名称
    * repositoryRoleId  仓库角色id
    * memberSource  成员如果来自成员组，成员组名称
    * memberGroupSource  成员如果来自上层代码组，代码组名称
    * memberSourceId  成员来源id —— 代码组id或者成员组id
    * serviceLicenseStatus  成员服务级权限状态： 1-使用中、0-已停用
    * actionEnabled  是否有对应权限： true-有权限、false-无权限
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'userId' => null,
        'userIamId' => null,
        'userName' => null,
        'userNickName' => null,
        'tenantName' => null,
        'tenantId' => null,
        'isRepoCreator' => null,
        'isGroupCreator' => null,
        'isProjectAdmin' => null,
        'projectRoleName' => null,
        'repositoryRoleName' => null,
        'repositoryRoleId' => null,
        'memberSource' => null,
        'memberGroupSource' => null,
        'memberSourceId' => null,
        'serviceLicenseStatus' => null,
        'actionEnabled' => null
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
    * userId  用户id
    * userIamId  用户iamId
    * userName  用户名称
    * userNickName  用户昵称
    * tenantName  租户名称
    * tenantId  租户id
    * isRepoCreator  是否为仓库所有者
    * isGroupCreator  是否为父代码组所有者
    * isProjectAdmin  是否为项目管理员
    * projectRoleName  项目角色名称
    * repositoryRoleName  仓库角色名称
    * repositoryRoleId  仓库角色id
    * memberSource  成员如果来自成员组，成员组名称
    * memberGroupSource  成员如果来自上层代码组，代码组名称
    * memberSourceId  成员来源id —— 代码组id或者成员组id
    * serviceLicenseStatus  成员服务级权限状态： 1-使用中、0-已停用
    * actionEnabled  是否有对应权限： true-有权限、false-无权限
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'userId' => 'user_id',
            'userIamId' => 'user_iam_id',
            'userName' => 'user_name',
            'userNickName' => 'user_nick_name',
            'tenantName' => 'tenant_name',
            'tenantId' => 'tenant_id',
            'isRepoCreator' => 'is_repo_creator',
            'isGroupCreator' => 'is_group_creator',
            'isProjectAdmin' => 'is_Project_admin',
            'projectRoleName' => 'project_role_name',
            'repositoryRoleName' => 'repository_role_name',
            'repositoryRoleId' => 'repository_role_Id',
            'memberSource' => 'member_source',
            'memberGroupSource' => 'member_group_source',
            'memberSourceId' => 'member_source_id',
            'serviceLicenseStatus' => 'service_license_status',
            'actionEnabled' => 'action_enabled'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userId  用户id
    * userIamId  用户iamId
    * userName  用户名称
    * userNickName  用户昵称
    * tenantName  租户名称
    * tenantId  租户id
    * isRepoCreator  是否为仓库所有者
    * isGroupCreator  是否为父代码组所有者
    * isProjectAdmin  是否为项目管理员
    * projectRoleName  项目角色名称
    * repositoryRoleName  仓库角色名称
    * repositoryRoleId  仓库角色id
    * memberSource  成员如果来自成员组，成员组名称
    * memberGroupSource  成员如果来自上层代码组，代码组名称
    * memberSourceId  成员来源id —— 代码组id或者成员组id
    * serviceLicenseStatus  成员服务级权限状态： 1-使用中、0-已停用
    * actionEnabled  是否有对应权限： true-有权限、false-无权限
    *
    * @var string[]
    */
    protected static $setters = [
            'userId' => 'setUserId',
            'userIamId' => 'setUserIamId',
            'userName' => 'setUserName',
            'userNickName' => 'setUserNickName',
            'tenantName' => 'setTenantName',
            'tenantId' => 'setTenantId',
            'isRepoCreator' => 'setIsRepoCreator',
            'isGroupCreator' => 'setIsGroupCreator',
            'isProjectAdmin' => 'setIsProjectAdmin',
            'projectRoleName' => 'setProjectRoleName',
            'repositoryRoleName' => 'setRepositoryRoleName',
            'repositoryRoleId' => 'setRepositoryRoleId',
            'memberSource' => 'setMemberSource',
            'memberGroupSource' => 'setMemberGroupSource',
            'memberSourceId' => 'setMemberSourceId',
            'serviceLicenseStatus' => 'setServiceLicenseStatus',
            'actionEnabled' => 'setActionEnabled'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userId  用户id
    * userIamId  用户iamId
    * userName  用户名称
    * userNickName  用户昵称
    * tenantName  租户名称
    * tenantId  租户id
    * isRepoCreator  是否为仓库所有者
    * isGroupCreator  是否为父代码组所有者
    * isProjectAdmin  是否为项目管理员
    * projectRoleName  项目角色名称
    * repositoryRoleName  仓库角色名称
    * repositoryRoleId  仓库角色id
    * memberSource  成员如果来自成员组，成员组名称
    * memberGroupSource  成员如果来自上层代码组，代码组名称
    * memberSourceId  成员来源id —— 代码组id或者成员组id
    * serviceLicenseStatus  成员服务级权限状态： 1-使用中、0-已停用
    * actionEnabled  是否有对应权限： true-有权限、false-无权限
    *
    * @var string[]
    */
    protected static $getters = [
            'userId' => 'getUserId',
            'userIamId' => 'getUserIamId',
            'userName' => 'getUserName',
            'userNickName' => 'getUserNickName',
            'tenantName' => 'getTenantName',
            'tenantId' => 'getTenantId',
            'isRepoCreator' => 'getIsRepoCreator',
            'isGroupCreator' => 'getIsGroupCreator',
            'isProjectAdmin' => 'getIsProjectAdmin',
            'projectRoleName' => 'getProjectRoleName',
            'repositoryRoleName' => 'getRepositoryRoleName',
            'repositoryRoleId' => 'getRepositoryRoleId',
            'memberSource' => 'getMemberSource',
            'memberGroupSource' => 'getMemberGroupSource',
            'memberSourceId' => 'getMemberSourceId',
            'serviceLicenseStatus' => 'getServiceLicenseStatus',
            'actionEnabled' => 'getActionEnabled'
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
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userIamId'] = isset($data['userIamId']) ? $data['userIamId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['userNickName'] = isset($data['userNickName']) ? $data['userNickName'] : null;
        $this->container['tenantName'] = isset($data['tenantName']) ? $data['tenantName'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['isRepoCreator'] = isset($data['isRepoCreator']) ? $data['isRepoCreator'] : null;
        $this->container['isGroupCreator'] = isset($data['isGroupCreator']) ? $data['isGroupCreator'] : null;
        $this->container['isProjectAdmin'] = isset($data['isProjectAdmin']) ? $data['isProjectAdmin'] : null;
        $this->container['projectRoleName'] = isset($data['projectRoleName']) ? $data['projectRoleName'] : null;
        $this->container['repositoryRoleName'] = isset($data['repositoryRoleName']) ? $data['repositoryRoleName'] : null;
        $this->container['repositoryRoleId'] = isset($data['repositoryRoleId']) ? $data['repositoryRoleId'] : null;
        $this->container['memberSource'] = isset($data['memberSource']) ? $data['memberSource'] : null;
        $this->container['memberGroupSource'] = isset($data['memberGroupSource']) ? $data['memberGroupSource'] : null;
        $this->container['memberSourceId'] = isset($data['memberSourceId']) ? $data['memberSourceId'] : null;
        $this->container['serviceLicenseStatus'] = isset($data['serviceLicenseStatus']) ? $data['serviceLicenseStatus'] : null;
        $this->container['actionEnabled'] = isset($data['actionEnabled']) ? $data['actionEnabled'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['userIamId']) && (mb_strlen($this->container['userIamId']) > 100000)) {
                $invalidProperties[] = "invalid value for 'userIamId', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['userIamId']) && (mb_strlen($this->container['userIamId']) < 1)) {
                $invalidProperties[] = "invalid value for 'userIamId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) > 100000)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) < 1)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userNickName']) && (mb_strlen($this->container['userNickName']) > 100000)) {
                $invalidProperties[] = "invalid value for 'userNickName', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['userNickName']) && (mb_strlen($this->container['userNickName']) < 1)) {
                $invalidProperties[] = "invalid value for 'userNickName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tenantName']) && (mb_strlen($this->container['tenantName']) > 100000)) {
                $invalidProperties[] = "invalid value for 'tenantName', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['tenantName']) && (mb_strlen($this->container['tenantName']) < 1)) {
                $invalidProperties[] = "invalid value for 'tenantName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) > 100000)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) < 1)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['isRepoCreator']) && ($this->container['isRepoCreator'] > 1)) {
                $invalidProperties[] = "invalid value for 'isRepoCreator', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['isRepoCreator']) && ($this->container['isRepoCreator'] < 0)) {
                $invalidProperties[] = "invalid value for 'isRepoCreator', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['isGroupCreator']) && ($this->container['isGroupCreator'] > 1)) {
                $invalidProperties[] = "invalid value for 'isGroupCreator', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['isGroupCreator']) && ($this->container['isGroupCreator'] < 0)) {
                $invalidProperties[] = "invalid value for 'isGroupCreator', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['isProjectAdmin']) && ($this->container['isProjectAdmin'] > 1)) {
                $invalidProperties[] = "invalid value for 'isProjectAdmin', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['isProjectAdmin']) && ($this->container['isProjectAdmin'] < 0)) {
                $invalidProperties[] = "invalid value for 'isProjectAdmin', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectRoleName']) && (mb_strlen($this->container['projectRoleName']) > 100000)) {
                $invalidProperties[] = "invalid value for 'projectRoleName', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['projectRoleName']) && (mb_strlen($this->container['projectRoleName']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectRoleName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['repositoryRoleName']) && (mb_strlen($this->container['repositoryRoleName']) > 100000)) {
                $invalidProperties[] = "invalid value for 'repositoryRoleName', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['repositoryRoleName']) && (mb_strlen($this->container['repositoryRoleName']) < 1)) {
                $invalidProperties[] = "invalid value for 'repositoryRoleName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['repositoryRoleId']) && (mb_strlen($this->container['repositoryRoleId']) > 100000)) {
                $invalidProperties[] = "invalid value for 'repositoryRoleId', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['repositoryRoleId']) && (mb_strlen($this->container['repositoryRoleId']) < 1)) {
                $invalidProperties[] = "invalid value for 'repositoryRoleId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['memberSource']) && (mb_strlen($this->container['memberSource']) > 100000)) {
                $invalidProperties[] = "invalid value for 'memberSource', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['memberSource']) && (mb_strlen($this->container['memberSource']) < 1)) {
                $invalidProperties[] = "invalid value for 'memberSource', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['memberGroupSource']) && (mb_strlen($this->container['memberGroupSource']) > 100000)) {
                $invalidProperties[] = "invalid value for 'memberGroupSource', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['memberGroupSource']) && (mb_strlen($this->container['memberGroupSource']) < 1)) {
                $invalidProperties[] = "invalid value for 'memberGroupSource', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['memberSourceId']) && (mb_strlen($this->container['memberSourceId']) > 100000)) {
                $invalidProperties[] = "invalid value for 'memberSourceId', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['memberSourceId']) && (mb_strlen($this->container['memberSourceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'memberSourceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['serviceLicenseStatus']) && ($this->container['serviceLicenseStatus'] > 1)) {
                $invalidProperties[] = "invalid value for 'serviceLicenseStatus', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['serviceLicenseStatus']) && ($this->container['serviceLicenseStatus'] < 0)) {
                $invalidProperties[] = "invalid value for 'serviceLicenseStatus', must be bigger than or equal to 0.";
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
    * Gets userId
    *  用户id
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
    * @param int|null $userId 用户id
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets userIamId
    *  用户iamId
    *
    * @return string|null
    */
    public function getUserIamId()
    {
        return $this->container['userIamId'];
    }

    /**
    * Sets userIamId
    *
    * @param string|null $userIamId 用户iamId
    *
    * @return $this
    */
    public function setUserIamId($userIamId)
    {
        $this->container['userIamId'] = $userIamId;
        return $this;
    }

    /**
    * Gets userName
    *  用户名称
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
    * @param string|null $userName 用户名称
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets userNickName
    *  用户昵称
    *
    * @return string|null
    */
    public function getUserNickName()
    {
        return $this->container['userNickName'];
    }

    /**
    * Sets userNickName
    *
    * @param string|null $userNickName 用户昵称
    *
    * @return $this
    */
    public function setUserNickName($userNickName)
    {
        $this->container['userNickName'] = $userNickName;
        return $this;
    }

    /**
    * Gets tenantName
    *  租户名称
    *
    * @return string|null
    */
    public function getTenantName()
    {
        return $this->container['tenantName'];
    }

    /**
    * Sets tenantName
    *
    * @param string|null $tenantName 租户名称
    *
    * @return $this
    */
    public function setTenantName($tenantName)
    {
        $this->container['tenantName'] = $tenantName;
        return $this;
    }

    /**
    * Gets tenantId
    *  租户id
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId 租户id
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets isRepoCreator
    *  是否为仓库所有者
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
    * @param int|null $isRepoCreator 是否为仓库所有者
    *
    * @return $this
    */
    public function setIsRepoCreator($isRepoCreator)
    {
        $this->container['isRepoCreator'] = $isRepoCreator;
        return $this;
    }

    /**
    * Gets isGroupCreator
    *  是否为父代码组所有者
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
    * @param int|null $isGroupCreator 是否为父代码组所有者
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
    *  是否为项目管理员
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
    * @param int|null $isProjectAdmin 是否为项目管理员
    *
    * @return $this
    */
    public function setIsProjectAdmin($isProjectAdmin)
    {
        $this->container['isProjectAdmin'] = $isProjectAdmin;
        return $this;
    }

    /**
    * Gets projectRoleName
    *  项目角色名称
    *
    * @return string|null
    */
    public function getProjectRoleName()
    {
        return $this->container['projectRoleName'];
    }

    /**
    * Sets projectRoleName
    *
    * @param string|null $projectRoleName 项目角色名称
    *
    * @return $this
    */
    public function setProjectRoleName($projectRoleName)
    {
        $this->container['projectRoleName'] = $projectRoleName;
        return $this;
    }

    /**
    * Gets repositoryRoleName
    *  仓库角色名称
    *
    * @return string|null
    */
    public function getRepositoryRoleName()
    {
        return $this->container['repositoryRoleName'];
    }

    /**
    * Sets repositoryRoleName
    *
    * @param string|null $repositoryRoleName 仓库角色名称
    *
    * @return $this
    */
    public function setRepositoryRoleName($repositoryRoleName)
    {
        $this->container['repositoryRoleName'] = $repositoryRoleName;
        return $this;
    }

    /**
    * Gets repositoryRoleId
    *  仓库角色id
    *
    * @return string|null
    */
    public function getRepositoryRoleId()
    {
        return $this->container['repositoryRoleId'];
    }

    /**
    * Sets repositoryRoleId
    *
    * @param string|null $repositoryRoleId 仓库角色id
    *
    * @return $this
    */
    public function setRepositoryRoleId($repositoryRoleId)
    {
        $this->container['repositoryRoleId'] = $repositoryRoleId;
        return $this;
    }

    /**
    * Gets memberSource
    *  成员如果来自成员组，成员组名称
    *
    * @return string|null
    */
    public function getMemberSource()
    {
        return $this->container['memberSource'];
    }

    /**
    * Sets memberSource
    *
    * @param string|null $memberSource 成员如果来自成员组，成员组名称
    *
    * @return $this
    */
    public function setMemberSource($memberSource)
    {
        $this->container['memberSource'] = $memberSource;
        return $this;
    }

    /**
    * Gets memberGroupSource
    *  成员如果来自上层代码组，代码组名称
    *
    * @return string|null
    */
    public function getMemberGroupSource()
    {
        return $this->container['memberGroupSource'];
    }

    /**
    * Sets memberGroupSource
    *
    * @param string|null $memberGroupSource 成员如果来自上层代码组，代码组名称
    *
    * @return $this
    */
    public function setMemberGroupSource($memberGroupSource)
    {
        $this->container['memberGroupSource'] = $memberGroupSource;
        return $this;
    }

    /**
    * Gets memberSourceId
    *  成员来源id —— 代码组id或者成员组id
    *
    * @return string|null
    */
    public function getMemberSourceId()
    {
        return $this->container['memberSourceId'];
    }

    /**
    * Sets memberSourceId
    *
    * @param string|null $memberSourceId 成员来源id —— 代码组id或者成员组id
    *
    * @return $this
    */
    public function setMemberSourceId($memberSourceId)
    {
        $this->container['memberSourceId'] = $memberSourceId;
        return $this;
    }

    /**
    * Gets serviceLicenseStatus
    *  成员服务级权限状态： 1-使用中、0-已停用
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
    * @param int|null $serviceLicenseStatus 成员服务级权限状态： 1-使用中、0-已停用
    *
    * @return $this
    */
    public function setServiceLicenseStatus($serviceLicenseStatus)
    {
        $this->container['serviceLicenseStatus'] = $serviceLicenseStatus;
        return $this;
    }

    /**
    * Gets actionEnabled
    *  是否有对应权限： true-有权限、false-无权限
    *
    * @return bool|null
    */
    public function getActionEnabled()
    {
        return $this->container['actionEnabled'];
    }

    /**
    * Sets actionEnabled
    *
    * @param bool|null $actionEnabled 是否有对应权限： true-有权限、false-无权限
    *
    * @return $this
    */
    public function setActionEnabled($actionEnabled)
    {
        $this->container['actionEnabled'] = $actionEnabled;
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

