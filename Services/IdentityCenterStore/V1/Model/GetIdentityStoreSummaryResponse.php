<?php

namespace HuaweiCloud\SDK\IdentityCenterStore\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetIdentityStoreSummaryResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetIdentityStoreSummaryResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * users  已创建的用户数量
    * usersQuota  用户配额
    * groups  已创建的用户组数量
    * groupsQuota  用户组配额
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'users' => 'int',
            'usersQuota' => 'int',
            'groups' => 'int',
            'groupsQuota' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * users  已创建的用户数量
    * usersQuota  用户配额
    * groups  已创建的用户组数量
    * groupsQuota  用户组配额
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'users' => 'int64',
        'usersQuota' => 'int64',
        'groups' => 'int64',
        'groupsQuota' => 'int64'
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
    * users  已创建的用户数量
    * usersQuota  用户配额
    * groups  已创建的用户组数量
    * groupsQuota  用户组配额
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'users' => 'users',
            'usersQuota' => 'users_quota',
            'groups' => 'groups',
            'groupsQuota' => 'groups_quota'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * users  已创建的用户数量
    * usersQuota  用户配额
    * groups  已创建的用户组数量
    * groupsQuota  用户组配额
    *
    * @var string[]
    */
    protected static $setters = [
            'users' => 'setUsers',
            'usersQuota' => 'setUsersQuota',
            'groups' => 'setGroups',
            'groupsQuota' => 'setGroupsQuota'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * users  已创建的用户数量
    * usersQuota  用户配额
    * groups  已创建的用户组数量
    * groupsQuota  用户组配额
    *
    * @var string[]
    */
    protected static $getters = [
            'users' => 'getUsers',
            'usersQuota' => 'getUsersQuota',
            'groups' => 'getGroups',
            'groupsQuota' => 'getGroupsQuota'
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
        $this->container['users'] = isset($data['users']) ? $data['users'] : null;
        $this->container['usersQuota'] = isset($data['usersQuota']) ? $data['usersQuota'] : null;
        $this->container['groups'] = isset($data['groups']) ? $data['groups'] : null;
        $this->container['groupsQuota'] = isset($data['groupsQuota']) ? $data['groupsQuota'] : null;
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
    * Gets users
    *  已创建的用户数量
    *
    * @return int|null
    */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
    * Sets users
    *
    * @param int|null $users 已创建的用户数量
    *
    * @return $this
    */
    public function setUsers($users)
    {
        $this->container['users'] = $users;
        return $this;
    }

    /**
    * Gets usersQuota
    *  用户配额
    *
    * @return int|null
    */
    public function getUsersQuota()
    {
        return $this->container['usersQuota'];
    }

    /**
    * Sets usersQuota
    *
    * @param int|null $usersQuota 用户配额
    *
    * @return $this
    */
    public function setUsersQuota($usersQuota)
    {
        $this->container['usersQuota'] = $usersQuota;
        return $this;
    }

    /**
    * Gets groups
    *  已创建的用户组数量
    *
    * @return int|null
    */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
    * Sets groups
    *
    * @param int|null $groups 已创建的用户组数量
    *
    * @return $this
    */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;
        return $this;
    }

    /**
    * Gets groupsQuota
    *  用户组配额
    *
    * @return int|null
    */
    public function getGroupsQuota()
    {
        return $this->container['groupsQuota'];
    }

    /**
    * Sets groupsQuota
    *
    * @param int|null $groupsQuota 用户组配额
    *
    * @return $this
    */
    public function setGroupsQuota($groupsQuota)
    {
        $this->container['groupsQuota'] = $groupsQuota;
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

