<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProjectProtectedActionResultApiDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProjectProtectedActionResultApiDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  **参数解释：** 事件名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * enable  **参数解释：** 是否启用。
    * users  **参数解释：** 用户列表。
    * userTeams  **参数解释：** 成员组列表。
    * roles  **参数解释：** 角色列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'enable' => 'bool',
            'users' => '\HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto[]',
            'userTeams' => '\HuaweiCloud\SDK\CodeHub\V4\Model\UserTeamBasicDto[]',
            'roles' => '\HuaweiCloud\SDK\CodeHub\V4\Model\RoleBasicDto[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  **参数解释：** 事件名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * enable  **参数解释：** 是否启用。
    * users  **参数解释：** 用户列表。
    * userTeams  **参数解释：** 成员组列表。
    * roles  **参数解释：** 角色列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'enable' => null,
        'users' => null,
        'userTeams' => null,
        'roles' => null
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
    * action  **参数解释：** 事件名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * enable  **参数解释：** 是否启用。
    * users  **参数解释：** 用户列表。
    * userTeams  **参数解释：** 成员组列表。
    * roles  **参数解释：** 角色列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'enable' => 'enable',
            'users' => 'users',
            'userTeams' => 'user_teams',
            'roles' => 'roles'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  **参数解释：** 事件名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * enable  **参数解释：** 是否启用。
    * users  **参数解释：** 用户列表。
    * userTeams  **参数解释：** 成员组列表。
    * roles  **参数解释：** 角色列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'enable' => 'setEnable',
            'users' => 'setUsers',
            'userTeams' => 'setUserTeams',
            'roles' => 'setRoles'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  **参数解释：** 事件名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * enable  **参数解释：** 是否启用。
    * users  **参数解释：** 用户列表。
    * userTeams  **参数解释：** 成员组列表。
    * roles  **参数解释：** 角色列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'enable' => 'getEnable',
            'users' => 'getUsers',
            'userTeams' => 'getUserTeams',
            'roles' => 'getRoles'
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['users'] = isset($data['users']) ? $data['users'] : null;
        $this->container['userTeams'] = isset($data['userTeams']) ? $data['userTeams'] : null;
        $this->container['roles'] = isset($data['roles']) ? $data['roles'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['action']) && (mb_strlen($this->container['action']) > 1000)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['action']) && (mb_strlen($this->container['action']) < 1)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be bigger than or equal to 1.";
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
    * Gets action
    *  **参数解释：** 事件名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action **参数解释：** 事件名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets enable
    *  **参数解释：** 是否启用。
    *
    * @return bool|null
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param bool|null $enable **参数解释：** 是否启用。
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets users
    *  **参数解释：** 用户列表。
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto[]|null
    */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
    * Sets users
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto[]|null $users **参数解释：** 用户列表。
    *
    * @return $this
    */
    public function setUsers($users)
    {
        $this->container['users'] = $users;
        return $this;
    }

    /**
    * Gets userTeams
    *  **参数解释：** 成员组列表。
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\UserTeamBasicDto[]|null
    */
    public function getUserTeams()
    {
        return $this->container['userTeams'];
    }

    /**
    * Sets userTeams
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\UserTeamBasicDto[]|null $userTeams **参数解释：** 成员组列表。
    *
    * @return $this
    */
    public function setUserTeams($userTeams)
    {
        $this->container['userTeams'] = $userTeams;
        return $this;
    }

    /**
    * Gets roles
    *  **参数解释：** 角色列表。
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\RoleBasicDto[]|null
    */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
    * Sets roles
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\RoleBasicDto[]|null $roles **参数解释：** 角色列表。
    *
    * @return $this
    */
    public function setRoles($roles)
    {
        $this->container['roles'] = $roles;
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

