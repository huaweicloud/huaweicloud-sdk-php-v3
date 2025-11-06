<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GroupMyRoleDtoV4 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GroupMyRoleDtoV4';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 记录id。
    * accessLevel  **参数解释：** 角色。
    * roleNamecn  **参数解释：** 角色中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleNamen  **参数解释：** 角色英文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * sourceId  **参数解释：** 资源id。
    * sourceType  **参数解释：** 资源类型。 **取值范围：Group Project** 字符串长度不少于1，不超过1000。
    * userId  **参数解释：** 用户id。
    * notificationLevel  **参数解释：** 通知。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * updatedAt  **参数解释：** 更新时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * isProjectAdmin  **参数解释：** 是否是项目创建者。
    * isGroupCreator  **参数解释：** 是否是代码组创建者。
    * isRepoCreator  **参数解释：** 是否是仓库创建者。
    * roleShowFlag  **参数解释：** 角色展示。
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
            'isProjectAdmin' => 'int',
            'isGroupCreator' => 'int',
            'isRepoCreator' => 'int',
            'roleShowFlag' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 记录id。
    * accessLevel  **参数解释：** 角色。
    * roleNamecn  **参数解释：** 角色中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleNamen  **参数解释：** 角色英文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * sourceId  **参数解释：** 资源id。
    * sourceType  **参数解释：** 资源类型。 **取值范围：Group Project** 字符串长度不少于1，不超过1000。
    * userId  **参数解释：** 用户id。
    * notificationLevel  **参数解释：** 通知。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * updatedAt  **参数解释：** 更新时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * isProjectAdmin  **参数解释：** 是否是项目创建者。
    * isGroupCreator  **参数解释：** 是否是代码组创建者。
    * isRepoCreator  **参数解释：** 是否是仓库创建者。
    * roleShowFlag  **参数解释：** 角色展示。
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
    * id  **参数解释：** 记录id。
    * accessLevel  **参数解释：** 角色。
    * roleNamecn  **参数解释：** 角色中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleNamen  **参数解释：** 角色英文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * sourceId  **参数解释：** 资源id。
    * sourceType  **参数解释：** 资源类型。 **取值范围：Group Project** 字符串长度不少于1，不超过1000。
    * userId  **参数解释：** 用户id。
    * notificationLevel  **参数解释：** 通知。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * updatedAt  **参数解释：** 更新时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * isProjectAdmin  **参数解释：** 是否是项目创建者。
    * isGroupCreator  **参数解释：** 是否是代码组创建者。
    * isRepoCreator  **参数解释：** 是否是仓库创建者。
    * roleShowFlag  **参数解释：** 角色展示。
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
            'isProjectAdmin' => 'is_project_admin',
            'isGroupCreator' => 'is_group_creator',
            'isRepoCreator' => 'is_repo_creator',
            'roleShowFlag' => 'role_show_flag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 记录id。
    * accessLevel  **参数解释：** 角色。
    * roleNamecn  **参数解释：** 角色中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleNamen  **参数解释：** 角色英文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * sourceId  **参数解释：** 资源id。
    * sourceType  **参数解释：** 资源类型。 **取值范围：Group Project** 字符串长度不少于1，不超过1000。
    * userId  **参数解释：** 用户id。
    * notificationLevel  **参数解释：** 通知。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * updatedAt  **参数解释：** 更新时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * isProjectAdmin  **参数解释：** 是否是项目创建者。
    * isGroupCreator  **参数解释：** 是否是代码组创建者。
    * isRepoCreator  **参数解释：** 是否是仓库创建者。
    * roleShowFlag  **参数解释：** 角色展示。
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
            'isProjectAdmin' => 'setIsProjectAdmin',
            'isGroupCreator' => 'setIsGroupCreator',
            'isRepoCreator' => 'setIsRepoCreator',
            'roleShowFlag' => 'setRoleShowFlag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 记录id。
    * accessLevel  **参数解释：** 角色。
    * roleNamecn  **参数解释：** 角色中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleNamen  **参数解释：** 角色英文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * sourceId  **参数解释：** 资源id。
    * sourceType  **参数解释：** 资源类型。 **取值范围：Group Project** 字符串长度不少于1，不超过1000。
    * userId  **参数解释：** 用户id。
    * notificationLevel  **参数解释：** 通知。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * updatedAt  **参数解释：** 更新时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * isProjectAdmin  **参数解释：** 是否是项目创建者。
    * isGroupCreator  **参数解释：** 是否是代码组创建者。
    * isRepoCreator  **参数解释：** 是否是仓库创建者。
    * roleShowFlag  **参数解释：** 角色展示。
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
            if (!is_null($this->container['id']) && ($this->container['id'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 1)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['accessLevel']) && ($this->container['accessLevel'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'accessLevel', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['accessLevel']) && ($this->container['accessLevel'] < 1)) {
                $invalidProperties[] = "invalid value for 'accessLevel', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['roleNamecn']) && (mb_strlen($this->container['roleNamecn']) > 1000)) {
                $invalidProperties[] = "invalid value for 'roleNamecn', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['roleNamecn']) && (mb_strlen($this->container['roleNamecn']) < 1)) {
                $invalidProperties[] = "invalid value for 'roleNamecn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['roleNamen']) && (mb_strlen($this->container['roleNamen']) > 1000)) {
                $invalidProperties[] = "invalid value for 'roleNamen', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['roleNamen']) && (mb_strlen($this->container['roleNamen']) < 1)) {
                $invalidProperties[] = "invalid value for 'roleNamen', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sourceId']) && ($this->container['sourceId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'sourceId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['sourceId']) && ($this->container['sourceId'] < 1)) {
                $invalidProperties[] = "invalid value for 'sourceId', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sourceType']) && (mb_strlen($this->container['sourceType']) > 1000)) {
                $invalidProperties[] = "invalid value for 'sourceType', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['sourceType']) && (mb_strlen($this->container['sourceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'sourceType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userId']) && ($this->container['userId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'userId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['userId']) && ($this->container['userId'] < 1)) {
                $invalidProperties[] = "invalid value for 'userId', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['notificationLevel']) && ($this->container['notificationLevel'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'notificationLevel', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['notificationLevel']) && ($this->container['notificationLevel'] < 1)) {
                $invalidProperties[] = "invalid value for 'notificationLevel', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) > 1000)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) < 1)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updatedAt']) && (mb_strlen($this->container['updatedAt']) > 1000)) {
                $invalidProperties[] = "invalid value for 'updatedAt', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['updatedAt']) && (mb_strlen($this->container['updatedAt']) < 1)) {
                $invalidProperties[] = "invalid value for 'updatedAt', the character length must be bigger than or equal to 1.";
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
    * Gets roleNamen
    *  **参数解释：** 角色英文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
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
    * @param string|null $roleNamen **参数解释：** 角色英文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
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
    * Gets sourceType
    *  **参数解释：** 资源类型。 **取值范围：Group Project** 字符串长度不少于1，不超过1000。
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
    * @param string|null $sourceType **参数解释：** 资源类型。 **取值范围：Group Project** 字符串长度不少于1，不超过1000。
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
    * Gets notificationLevel
    *  **参数解释：** 通知。
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
    * @param int|null $notificationLevel **参数解释：** 通知。
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
    * Gets updatedAt
    *  **参数解释：** 更新时间。 **取值范围：** 字符串长度不少于1，不超过1000。
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
    * @param string|null $updatedAt **参数解释：** 更新时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets isProjectAdmin
    *  **参数解释：** 是否是项目创建者。
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
    * @param int|null $isProjectAdmin **参数解释：** 是否是项目创建者。
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
    *  **参数解释：** 是否是代码组创建者。
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
    * @param int|null $isGroupCreator **参数解释：** 是否是代码组创建者。
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
    *  **参数解释：** 是否是仓库创建者。
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
    * @param int|null $isRepoCreator **参数解释：** 是否是仓库创建者。
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
    *  **参数解释：** 角色展示。
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
    * @param int|null $roleShowFlag **参数解释：** 角色展示。
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

