<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GroupMyRoleDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GroupMyRoleDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  成员id
    * accessLevel  成员角色值
    * roleNamecn  角色中文名称
    * roleNamen  角色名称
    * sourceId  来源代码组id
    * sourceType  来源类型
    * userId  用户id
    * notificationLevel  提示级别
    * createdAt  创建时间
    * updatedAt  更新时间
    * createdById  创建者id
    * inviteEmail  邀请邮箱
    * inviteToken  邀请token
    * inviteAcceptedAt  邀请接受时间
    * requestedAt  请求时间
    * expiresAt  过期时间
    * limited  限制
    * isProjectAdmin  是否为项目管理员
    * isGroupCreator  是否为组织创建者
    * isRepoCreator  是否仓库创建者
    * roleShowFlag  展示标记
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'accessLevel' => 'int',
            'roleNamecn' => 'string',
            'roleNamen' => 'string',
            'sourceId' => 'int',
            'sourceType' => 'string',
            'userId' => 'int',
            'notificationLevel' => 'int',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'createdById' => 'int',
            'inviteEmail' => 'string',
            'inviteToken' => 'string',
            'inviteAcceptedAt' => 'string',
            'requestedAt' => 'string',
            'expiresAt' => 'string',
            'limited' => 'bool',
            'isProjectAdmin' => 'int',
            'isGroupCreator' => 'int',
            'isRepoCreator' => 'int',
            'roleShowFlag' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  成员id
    * accessLevel  成员角色值
    * roleNamecn  角色中文名称
    * roleNamen  角色名称
    * sourceId  来源代码组id
    * sourceType  来源类型
    * userId  用户id
    * notificationLevel  提示级别
    * createdAt  创建时间
    * updatedAt  更新时间
    * createdById  创建者id
    * inviteEmail  邀请邮箱
    * inviteToken  邀请token
    * inviteAcceptedAt  邀请接受时间
    * requestedAt  请求时间
    * expiresAt  过期时间
    * limited  限制
    * isProjectAdmin  是否为项目管理员
    * isGroupCreator  是否为组织创建者
    * isRepoCreator  是否仓库创建者
    * roleShowFlag  展示标记
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'accessLevel' => 'int32',
        'roleNamecn' => null,
        'roleNamen' => null,
        'sourceId' => 'int32',
        'sourceType' => null,
        'userId' => 'int32',
        'notificationLevel' => 'int32',
        'createdAt' => null,
        'updatedAt' => null,
        'createdById' => 'nullable',
        'inviteEmail' => 'nullable',
        'inviteToken' => 'nullable',
        'inviteAcceptedAt' => 'nullable',
        'requestedAt' => 'nullable',
        'expiresAt' => 'nullable',
        'limited' => null,
        'isProjectAdmin' => 'int32',
        'isGroupCreator' => 'int32',
        'isRepoCreator' => 'int32',
        'roleShowFlag' => 'int32'
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
    * id  成员id
    * accessLevel  成员角色值
    * roleNamecn  角色中文名称
    * roleNamen  角色名称
    * sourceId  来源代码组id
    * sourceType  来源类型
    * userId  用户id
    * notificationLevel  提示级别
    * createdAt  创建时间
    * updatedAt  更新时间
    * createdById  创建者id
    * inviteEmail  邀请邮箱
    * inviteToken  邀请token
    * inviteAcceptedAt  邀请接受时间
    * requestedAt  请求时间
    * expiresAt  过期时间
    * limited  限制
    * isProjectAdmin  是否为项目管理员
    * isGroupCreator  是否为组织创建者
    * isRepoCreator  是否仓库创建者
    * roleShowFlag  展示标记
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'accessLevel' => 'access_level',
            'roleNamecn' => 'role_namecn',
            'roleNamen' => 'role_namen',
            'sourceId' => 'source_id',
            'sourceType' => 'source_type',
            'userId' => 'user_id',
            'notificationLevel' => 'notification_level',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'createdById' => 'created_by_id',
            'inviteEmail' => 'invite_email',
            'inviteToken' => 'invite_token',
            'inviteAcceptedAt' => 'invite_accepted_at',
            'requestedAt' => 'requested_at',
            'expiresAt' => 'expires_at',
            'limited' => 'limited',
            'isProjectAdmin' => 'isProjectAdmin',
            'isGroupCreator' => 'isGroupCreator',
            'isRepoCreator' => 'isRepoCreator',
            'roleShowFlag' => 'roleShowFlag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  成员id
    * accessLevel  成员角色值
    * roleNamecn  角色中文名称
    * roleNamen  角色名称
    * sourceId  来源代码组id
    * sourceType  来源类型
    * userId  用户id
    * notificationLevel  提示级别
    * createdAt  创建时间
    * updatedAt  更新时间
    * createdById  创建者id
    * inviteEmail  邀请邮箱
    * inviteToken  邀请token
    * inviteAcceptedAt  邀请接受时间
    * requestedAt  请求时间
    * expiresAt  过期时间
    * limited  限制
    * isProjectAdmin  是否为项目管理员
    * isGroupCreator  是否为组织创建者
    * isRepoCreator  是否仓库创建者
    * roleShowFlag  展示标记
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'accessLevel' => 'setAccessLevel',
            'roleNamecn' => 'setRoleNamecn',
            'roleNamen' => 'setRoleNamen',
            'sourceId' => 'setSourceId',
            'sourceType' => 'setSourceType',
            'userId' => 'setUserId',
            'notificationLevel' => 'setNotificationLevel',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'createdById' => 'setCreatedById',
            'inviteEmail' => 'setInviteEmail',
            'inviteToken' => 'setInviteToken',
            'inviteAcceptedAt' => 'setInviteAcceptedAt',
            'requestedAt' => 'setRequestedAt',
            'expiresAt' => 'setExpiresAt',
            'limited' => 'setLimited',
            'isProjectAdmin' => 'setIsProjectAdmin',
            'isGroupCreator' => 'setIsGroupCreator',
            'isRepoCreator' => 'setIsRepoCreator',
            'roleShowFlag' => 'setRoleShowFlag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  成员id
    * accessLevel  成员角色值
    * roleNamecn  角色中文名称
    * roleNamen  角色名称
    * sourceId  来源代码组id
    * sourceType  来源类型
    * userId  用户id
    * notificationLevel  提示级别
    * createdAt  创建时间
    * updatedAt  更新时间
    * createdById  创建者id
    * inviteEmail  邀请邮箱
    * inviteToken  邀请token
    * inviteAcceptedAt  邀请接受时间
    * requestedAt  请求时间
    * expiresAt  过期时间
    * limited  限制
    * isProjectAdmin  是否为项目管理员
    * isGroupCreator  是否为组织创建者
    * isRepoCreator  是否仓库创建者
    * roleShowFlag  展示标记
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'accessLevel' => 'getAccessLevel',
            'roleNamecn' => 'getRoleNamecn',
            'roleNamen' => 'getRoleNamen',
            'sourceId' => 'getSourceId',
            'sourceType' => 'getSourceType',
            'userId' => 'getUserId',
            'notificationLevel' => 'getNotificationLevel',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'createdById' => 'getCreatedById',
            'inviteEmail' => 'getInviteEmail',
            'inviteToken' => 'getInviteToken',
            'inviteAcceptedAt' => 'getInviteAcceptedAt',
            'requestedAt' => 'getRequestedAt',
            'expiresAt' => 'getExpiresAt',
            'limited' => 'getLimited',
            'isProjectAdmin' => 'getIsProjectAdmin',
            'isGroupCreator' => 'getIsGroupCreator',
            'isRepoCreator' => 'getIsRepoCreator',
            'roleShowFlag' => 'getRoleShowFlag'
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
        $this->container['accessLevel'] = isset($data['accessLevel']) ? $data['accessLevel'] : null;
        $this->container['roleNamecn'] = isset($data['roleNamecn']) ? $data['roleNamecn'] : null;
        $this->container['roleNamen'] = isset($data['roleNamen']) ? $data['roleNamen'] : null;
        $this->container['sourceId'] = isset($data['sourceId']) ? $data['sourceId'] : null;
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['notificationLevel'] = isset($data['notificationLevel']) ? $data['notificationLevel'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['createdById'] = isset($data['createdById']) ? $data['createdById'] : null;
        $this->container['inviteEmail'] = isset($data['inviteEmail']) ? $data['inviteEmail'] : null;
        $this->container['inviteToken'] = isset($data['inviteToken']) ? $data['inviteToken'] : null;
        $this->container['inviteAcceptedAt'] = isset($data['inviteAcceptedAt']) ? $data['inviteAcceptedAt'] : null;
        $this->container['requestedAt'] = isset($data['requestedAt']) ? $data['requestedAt'] : null;
        $this->container['expiresAt'] = isset($data['expiresAt']) ? $data['expiresAt'] : null;
        $this->container['limited'] = isset($data['limited']) ? $data['limited'] : null;
        $this->container['isProjectAdmin'] = isset($data['isProjectAdmin']) ? $data['isProjectAdmin'] : null;
        $this->container['isGroupCreator'] = isset($data['isGroupCreator']) ? $data['isGroupCreator'] : null;
        $this->container['isRepoCreator'] = isset($data['isRepoCreator']) ? $data['isRepoCreator'] : null;
        $this->container['roleShowFlag'] = isset($data['roleShowFlag']) ? $data['roleShowFlag'] : null;
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
    *  成员id
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
    * @param int|null $id 成员id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets accessLevel
    *  成员角色值
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
    * @param int|null $accessLevel 成员角色值
    *
    * @return $this
    */
    public function setAccessLevel($accessLevel)
    {
        $this->container['accessLevel'] = $accessLevel;
        return $this;
    }

    /**
    * Gets roleNamecn
    *  角色中文名称
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
    * @param string|null $roleNamecn 角色中文名称
    *
    * @return $this
    */
    public function setRoleNamecn($roleNamecn)
    {
        $this->container['roleNamecn'] = $roleNamecn;
        return $this;
    }

    /**
    * Gets roleNamen
    *  角色名称
    *
    * @return string|null
    */
    public function getRoleNamen()
    {
        return $this->container['roleNamen'];
    }

    /**
    * Sets roleNamen
    *
    * @param string|null $roleNamen 角色名称
    *
    * @return $this
    */
    public function setRoleNamen($roleNamen)
    {
        $this->container['roleNamen'] = $roleNamen;
        return $this;
    }

    /**
    * Gets sourceId
    *  来源代码组id
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
    * @param int|null $sourceId 来源代码组id
    *
    * @return $this
    */
    public function setSourceId($sourceId)
    {
        $this->container['sourceId'] = $sourceId;
        return $this;
    }

    /**
    * Gets sourceType
    *  来源类型
    *
    * @return string|null
    */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
    * Sets sourceType
    *
    * @param string|null $sourceType 来源类型
    *
    * @return $this
    */
    public function setSourceType($sourceType)
    {
        $this->container['sourceType'] = $sourceType;
        return $this;
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
    * Gets notificationLevel
    *  提示级别
    *
    * @return int|null
    */
    public function getNotificationLevel()
    {
        return $this->container['notificationLevel'];
    }

    /**
    * Sets notificationLevel
    *
    * @param int|null $notificationLevel 提示级别
    *
    * @return $this
    */
    public function setNotificationLevel($notificationLevel)
    {
        $this->container['notificationLevel'] = $notificationLevel;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间
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
    * @param string|null $createdAt 创建时间
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
    *  更新时间
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
    * @param string|null $updatedAt 更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets createdById
    *  创建者id
    *
    * @return int|null
    */
    public function getCreatedById()
    {
        return $this->container['createdById'];
    }

    /**
    * Sets createdById
    *
    * @param int|null $createdById 创建者id
    *
    * @return $this
    */
    public function setCreatedById($createdById)
    {
        $this->container['createdById'] = $createdById;
        return $this;
    }

    /**
    * Gets inviteEmail
    *  邀请邮箱
    *
    * @return string|null
    */
    public function getInviteEmail()
    {
        return $this->container['inviteEmail'];
    }

    /**
    * Sets inviteEmail
    *
    * @param string|null $inviteEmail 邀请邮箱
    *
    * @return $this
    */
    public function setInviteEmail($inviteEmail)
    {
        $this->container['inviteEmail'] = $inviteEmail;
        return $this;
    }

    /**
    * Gets inviteToken
    *  邀请token
    *
    * @return string|null
    */
    public function getInviteToken()
    {
        return $this->container['inviteToken'];
    }

    /**
    * Sets inviteToken
    *
    * @param string|null $inviteToken 邀请token
    *
    * @return $this
    */
    public function setInviteToken($inviteToken)
    {
        $this->container['inviteToken'] = $inviteToken;
        return $this;
    }

    /**
    * Gets inviteAcceptedAt
    *  邀请接受时间
    *
    * @return string|null
    */
    public function getInviteAcceptedAt()
    {
        return $this->container['inviteAcceptedAt'];
    }

    /**
    * Sets inviteAcceptedAt
    *
    * @param string|null $inviteAcceptedAt 邀请接受时间
    *
    * @return $this
    */
    public function setInviteAcceptedAt($inviteAcceptedAt)
    {
        $this->container['inviteAcceptedAt'] = $inviteAcceptedAt;
        return $this;
    }

    /**
    * Gets requestedAt
    *  请求时间
    *
    * @return string|null
    */
    public function getRequestedAt()
    {
        return $this->container['requestedAt'];
    }

    /**
    * Sets requestedAt
    *
    * @param string|null $requestedAt 请求时间
    *
    * @return $this
    */
    public function setRequestedAt($requestedAt)
    {
        $this->container['requestedAt'] = $requestedAt;
        return $this;
    }

    /**
    * Gets expiresAt
    *  过期时间
    *
    * @return string|null
    */
    public function getExpiresAt()
    {
        return $this->container['expiresAt'];
    }

    /**
    * Sets expiresAt
    *
    * @param string|null $expiresAt 过期时间
    *
    * @return $this
    */
    public function setExpiresAt($expiresAt)
    {
        $this->container['expiresAt'] = $expiresAt;
        return $this;
    }

    /**
    * Gets limited
    *  限制
    *
    * @return bool|null
    */
    public function getLimited()
    {
        return $this->container['limited'];
    }

    /**
    * Sets limited
    *
    * @param bool|null $limited 限制
    *
    * @return $this
    */
    public function setLimited($limited)
    {
        $this->container['limited'] = $limited;
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
    * Gets isGroupCreator
    *  是否为组织创建者
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
    * @param int|null $isGroupCreator 是否为组织创建者
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
    *  是否仓库创建者
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
    * @param int|null $isRepoCreator 是否仓库创建者
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
    *  展示标记
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
    * @param int|null $roleShowFlag 展示标记
    *
    * @return $this
    */
    public function setRoleShowFlag($roleShowFlag)
    {
        $this->container['roleShowFlag'] = $roleShowFlag;
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

