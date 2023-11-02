<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApigWorkspaceUserbody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApigWorkspaceUserbody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  记录id
    * userId  用户id
    * userName  用户名
    * domainId  租户id
    * domainName  租户名
    * displayUserName  租户名
    * domainOwner  是否是空间所有者
    * description  描述
    * workspaceId  工作空间id
    * roles  角色列表
    * createTime  创建时间
    * createUser  创建人员
    * updateTime  更新时间
    * updateUser  更新人员
    * type  用户类型，0用户，1用户组
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'userId' => 'string',
            'userName' => 'string',
            'domainId' => 'string',
            'domainName' => 'string',
            'displayUserName' => 'string',
            'domainOwner' => 'bool',
            'description' => 'string',
            'workspaceId' => 'string',
            'roles' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApigRoleVo[]',
            'createTime' => 'float',
            'createUser' => 'string',
            'updateTime' => 'float',
            'updateUser' => 'string',
            'type' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  记录id
    * userId  用户id
    * userName  用户名
    * domainId  租户id
    * domainName  租户名
    * displayUserName  租户名
    * domainOwner  是否是空间所有者
    * description  描述
    * workspaceId  工作空间id
    * roles  角色列表
    * createTime  创建时间
    * createUser  创建人员
    * updateTime  更新时间
    * updateUser  更新人员
    * type  用户类型，0用户，1用户组
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'userId' => null,
        'userName' => null,
        'domainId' => null,
        'domainName' => null,
        'displayUserName' => null,
        'domainOwner' => null,
        'description' => null,
        'workspaceId' => null,
        'roles' => null,
        'createTime' => null,
        'createUser' => null,
        'updateTime' => null,
        'updateUser' => null,
        'type' => null
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
    * id  记录id
    * userId  用户id
    * userName  用户名
    * domainId  租户id
    * domainName  租户名
    * displayUserName  租户名
    * domainOwner  是否是空间所有者
    * description  描述
    * workspaceId  工作空间id
    * roles  角色列表
    * createTime  创建时间
    * createUser  创建人员
    * updateTime  更新时间
    * updateUser  更新人员
    * type  用户类型，0用户，1用户组
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'userId' => 'user_id',
            'userName' => 'user_name',
            'domainId' => 'domain_id',
            'domainName' => 'domain_name',
            'displayUserName' => 'display_user_name',
            'domainOwner' => 'domain_owner',
            'description' => 'description',
            'workspaceId' => 'workspace_id',
            'roles' => 'roles',
            'createTime' => 'create_time',
            'createUser' => 'create_user',
            'updateTime' => 'update_time',
            'updateUser' => 'update_user',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  记录id
    * userId  用户id
    * userName  用户名
    * domainId  租户id
    * domainName  租户名
    * displayUserName  租户名
    * domainOwner  是否是空间所有者
    * description  描述
    * workspaceId  工作空间id
    * roles  角色列表
    * createTime  创建时间
    * createUser  创建人员
    * updateTime  更新时间
    * updateUser  更新人员
    * type  用户类型，0用户，1用户组
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'userId' => 'setUserId',
            'userName' => 'setUserName',
            'domainId' => 'setDomainId',
            'domainName' => 'setDomainName',
            'displayUserName' => 'setDisplayUserName',
            'domainOwner' => 'setDomainOwner',
            'description' => 'setDescription',
            'workspaceId' => 'setWorkspaceId',
            'roles' => 'setRoles',
            'createTime' => 'setCreateTime',
            'createUser' => 'setCreateUser',
            'updateTime' => 'setUpdateTime',
            'updateUser' => 'setUpdateUser',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  记录id
    * userId  用户id
    * userName  用户名
    * domainId  租户id
    * domainName  租户名
    * displayUserName  租户名
    * domainOwner  是否是空间所有者
    * description  描述
    * workspaceId  工作空间id
    * roles  角色列表
    * createTime  创建时间
    * createUser  创建人员
    * updateTime  更新时间
    * updateUser  更新人员
    * type  用户类型，0用户，1用户组
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'userId' => 'getUserId',
            'userName' => 'getUserName',
            'domainId' => 'getDomainId',
            'domainName' => 'getDomainName',
            'displayUserName' => 'getDisplayUserName',
            'domainOwner' => 'getDomainOwner',
            'description' => 'getDescription',
            'workspaceId' => 'getWorkspaceId',
            'roles' => 'getRoles',
            'createTime' => 'getCreateTime',
            'createUser' => 'getCreateUser',
            'updateTime' => 'getUpdateTime',
            'updateUser' => 'getUpdateUser',
            'type' => 'getType'
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
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['displayUserName'] = isset($data['displayUserName']) ? $data['displayUserName'] : null;
        $this->container['domainOwner'] = isset($data['domainOwner']) ? $data['domainOwner'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['roles'] = isset($data['roles']) ? $data['roles'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['updateUser'] = isset($data['updateUser']) ? $data['updateUser'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 128)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userId']) && (mb_strlen($this->container['userId']) > 128)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['userId']) && (mb_strlen($this->container['userId']) < 1)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) > 128)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) < 1)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 128)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 1)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['domainName']) && (mb_strlen($this->container['domainName']) > 128)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['domainName']) && (mb_strlen($this->container['domainName']) < 1)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['displayUserName']) && (mb_strlen($this->container['displayUserName']) > 128)) {
                $invalidProperties[] = "invalid value for 'displayUserName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['displayUserName']) && (mb_strlen($this->container['displayUserName']) < 1)) {
                $invalidProperties[] = "invalid value for 'displayUserName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createUser']) && (mb_strlen($this->container['createUser']) > 128)) {
                $invalidProperties[] = "invalid value for 'createUser', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['createUser']) && (mb_strlen($this->container['createUser']) < 1)) {
                $invalidProperties[] = "invalid value for 'createUser', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateUser']) && (mb_strlen($this->container['updateUser']) > 128)) {
                $invalidProperties[] = "invalid value for 'updateUser', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['updateUser']) && (mb_strlen($this->container['updateUser']) < 1)) {
                $invalidProperties[] = "invalid value for 'updateUser', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['type']) && ($this->container['type'] > 1)) {
                $invalidProperties[] = "invalid value for 'type', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['type']) && ($this->container['type'] < 0)) {
                $invalidProperties[] = "invalid value for 'type', must be bigger than or equal to 0.";
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
    *  记录id
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
    * @param string|null $id 记录id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets userId
    *  用户id
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId 用户id
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets userName
    *  用户名
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
    * @param string|null $userName 用户名
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
    *  租户id
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
    * @param string|null $domainId 租户id
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
    *  租户名
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
    * @param string|null $domainName 租户名
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets displayUserName
    *  租户名
    *
    * @return string|null
    */
    public function getDisplayUserName()
    {
        return $this->container['displayUserName'];
    }

    /**
    * Sets displayUserName
    *
    * @param string|null $displayUserName 租户名
    *
    * @return $this
    */
    public function setDisplayUserName($displayUserName)
    {
        $this->container['displayUserName'] = $displayUserName;
        return $this;
    }

    /**
    * Gets domainOwner
    *  是否是空间所有者
    *
    * @return bool|null
    */
    public function getDomainOwner()
    {
        return $this->container['domainOwner'];
    }

    /**
    * Sets domainOwner
    *
    * @param bool|null $domainOwner 是否是空间所有者
    *
    * @return $this
    */
    public function setDomainOwner($domainOwner)
    {
        $this->container['domainOwner'] = $domainOwner;
        return $this;
    }

    /**
    * Gets description
    *  描述
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
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets workspaceId
    *  工作空间id
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId 工作空间id
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets roles
    *  角色列表
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApigRoleVo[]|null
    */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
    * Sets roles
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApigRoleVo[]|null $roles 角色列表
    *
    * @return $this
    */
    public function setRoles($roles)
    {
        $this->container['roles'] = $roles;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return float|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param float|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets createUser
    *  创建人员
    *
    * @return string|null
    */
    public function getCreateUser()
    {
        return $this->container['createUser'];
    }

    /**
    * Sets createUser
    *
    * @param string|null $createUser 创建人员
    *
    * @return $this
    */
    public function setCreateUser($createUser)
    {
        $this->container['createUser'] = $createUser;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
    *
    * @return float|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param float|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets updateUser
    *  更新人员
    *
    * @return string|null
    */
    public function getUpdateUser()
    {
        return $this->container['updateUser'];
    }

    /**
    * Sets updateUser
    *
    * @param string|null $updateUser 更新人员
    *
    * @return $this
    */
    public function setUpdateUser($updateUser)
    {
        $this->container['updateUser'] = $updateUser;
        return $this;
    }

    /**
    * Gets type
    *  用户类型，0用户，1用户组
    *
    * @return int|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int|null $type 用户类型，0用户，1用户组
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

