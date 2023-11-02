<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApigWorkspaceUserDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApigWorkspaceUserDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  用户类型，0:添加用户;1:添加用户组
    * userIds  用户列表信息
    * groups  用户组列表信息
    * rolesIds  空间角色列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'int',
            'userIds' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApigIamUserDto[]',
            'groups' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\Group[]',
            'rolesIds' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApigRole[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  用户类型，0:添加用户;1:添加用户组
    * userIds  用户列表信息
    * groups  用户组列表信息
    * rolesIds  空间角色列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'userIds' => null,
        'groups' => null,
        'rolesIds' => null
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
    * type  用户类型，0:添加用户;1:添加用户组
    * userIds  用户列表信息
    * groups  用户组列表信息
    * rolesIds  空间角色列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'userIds' => 'user_ids',
            'groups' => 'groups',
            'rolesIds' => 'roles_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  用户类型，0:添加用户;1:添加用户组
    * userIds  用户列表信息
    * groups  用户组列表信息
    * rolesIds  空间角色列表
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'userIds' => 'setUserIds',
            'groups' => 'setGroups',
            'rolesIds' => 'setRolesIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  用户类型，0:添加用户;1:添加用户组
    * userIds  用户列表信息
    * groups  用户组列表信息
    * rolesIds  空间角色列表
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'userIds' => 'getUserIds',
            'groups' => 'getGroups',
            'rolesIds' => 'getRolesIds'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['userIds'] = isset($data['userIds']) ? $data['userIds'] : null;
        $this->container['groups'] = isset($data['groups']) ? $data['groups'] : null;
        $this->container['rolesIds'] = isset($data['rolesIds']) ? $data['rolesIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if (($this->container['type'] > 1)) {
                $invalidProperties[] = "invalid value for 'type', must be smaller than or equal to 1.";
            }
            if (($this->container['type'] < 0)) {
                $invalidProperties[] = "invalid value for 'type', must be bigger than or equal to 0.";
            }
        if ($this->container['rolesIds'] === null) {
            $invalidProperties[] = "'rolesIds' can't be null";
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
    * Gets type
    *  用户类型，0:添加用户;1:添加用户组
    *
    * @return int
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int $type 用户类型，0:添加用户;1:添加用户组
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets userIds
    *  用户列表信息
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApigIamUserDto[]|null
    */
    public function getUserIds()
    {
        return $this->container['userIds'];
    }

    /**
    * Sets userIds
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApigIamUserDto[]|null $userIds 用户列表信息
    *
    * @return $this
    */
    public function setUserIds($userIds)
    {
        $this->container['userIds'] = $userIds;
        return $this;
    }

    /**
    * Gets groups
    *  用户组列表信息
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Group[]|null
    */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
    * Sets groups
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Group[]|null $groups 用户组列表信息
    *
    * @return $this
    */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;
        return $this;
    }

    /**
    * Gets rolesIds
    *  空间角色列表
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApigRole[]
    */
    public function getRolesIds()
    {
        return $this->container['rolesIds'];
    }

    /**
    * Sets rolesIds
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApigRole[] $rolesIds 空间角色列表
    *
    * @return $this
    */
    public function setRolesIds($rolesIds)
    {
        $this->container['rolesIds'] = $rolesIds;
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

