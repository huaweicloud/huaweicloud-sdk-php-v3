<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResponsePermissionInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResponsePermissionInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * roleId  **参数解释：** 角色id **取值范围：** 不涉及。
    * roleName  **参数解释：** 角色名称 **取值范围：** 不涉及。
    * roleNameCn  **参数解释：** 角色中文名称 **取值范围：** 不涉及。
    * resourcePermissions  resourcePermissions
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'roleId' => 'string',
            'roleName' => 'string',
            'roleNameCn' => 'string',
            'resourcePermissions' => 'map[string,object]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * roleId  **参数解释：** 角色id **取值范围：** 不涉及。
    * roleName  **参数解释：** 角色名称 **取值范围：** 不涉及。
    * roleNameCn  **参数解释：** 角色中文名称 **取值范围：** 不涉及。
    * resourcePermissions  resourcePermissions
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'roleId' => null,
        'roleName' => null,
        'roleNameCn' => null,
        'resourcePermissions' => null
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
    * roleId  **参数解释：** 角色id **取值范围：** 不涉及。
    * roleName  **参数解释：** 角色名称 **取值范围：** 不涉及。
    * roleNameCn  **参数解释：** 角色中文名称 **取值范围：** 不涉及。
    * resourcePermissions  resourcePermissions
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'roleId' => 'role_id',
            'roleName' => 'role_name',
            'roleNameCn' => 'role_name_cn',
            'resourcePermissions' => 'resource_permissions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * roleId  **参数解释：** 角色id **取值范围：** 不涉及。
    * roleName  **参数解释：** 角色名称 **取值范围：** 不涉及。
    * roleNameCn  **参数解释：** 角色中文名称 **取值范围：** 不涉及。
    * resourcePermissions  resourcePermissions
    *
    * @var string[]
    */
    protected static $setters = [
            'roleId' => 'setRoleId',
            'roleName' => 'setRoleName',
            'roleNameCn' => 'setRoleNameCn',
            'resourcePermissions' => 'setResourcePermissions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * roleId  **参数解释：** 角色id **取值范围：** 不涉及。
    * roleName  **参数解释：** 角色名称 **取值范围：** 不涉及。
    * roleNameCn  **参数解释：** 角色中文名称 **取值范围：** 不涉及。
    * resourcePermissions  resourcePermissions
    *
    * @var string[]
    */
    protected static $getters = [
            'roleId' => 'getRoleId',
            'roleName' => 'getRoleName',
            'roleNameCn' => 'getRoleNameCn',
            'resourcePermissions' => 'getResourcePermissions'
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
        $this->container['roleId'] = isset($data['roleId']) ? $data['roleId'] : null;
        $this->container['roleName'] = isset($data['roleName']) ? $data['roleName'] : null;
        $this->container['roleNameCn'] = isset($data['roleNameCn']) ? $data['roleNameCn'] : null;
        $this->container['resourcePermissions'] = isset($data['resourcePermissions']) ? $data['resourcePermissions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['roleId']) && (mb_strlen($this->container['roleId']) > 255)) {
                $invalidProperties[] = "invalid value for 'roleId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['roleId']) && (mb_strlen($this->container['roleId']) < 0)) {
                $invalidProperties[] = "invalid value for 'roleId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['roleName']) && (mb_strlen($this->container['roleName']) > 255)) {
                $invalidProperties[] = "invalid value for 'roleName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['roleName']) && (mb_strlen($this->container['roleName']) < 0)) {
                $invalidProperties[] = "invalid value for 'roleName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['roleNameCn']) && (mb_strlen($this->container['roleNameCn']) > 255)) {
                $invalidProperties[] = "invalid value for 'roleNameCn', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['roleNameCn']) && (mb_strlen($this->container['roleNameCn']) < 0)) {
                $invalidProperties[] = "invalid value for 'roleNameCn', the character length must be bigger than or equal to 0.";
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
    * Gets roleId
    *  **参数解释：** 角色id **取值范围：** 不涉及。
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
    * @param string|null $roleId **参数解释：** 角色id **取值范围：** 不涉及。
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
    *  **参数解释：** 角色名称 **取值范围：** 不涉及。
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
    * @param string|null $roleName **参数解释：** 角色名称 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setRoleName($roleName)
    {
        $this->container['roleName'] = $roleName;
        return $this;
    }

    /**
    * Gets roleNameCn
    *  **参数解释：** 角色中文名称 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getRoleNameCn()
    {
        return $this->container['roleNameCn'];
    }

    /**
    * Sets roleNameCn
    *
    * @param string|null $roleNameCn **参数解释：** 角色中文名称 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setRoleNameCn($roleNameCn)
    {
        $this->container['roleNameCn'] = $roleNameCn;
        return $this;
    }

    /**
    * Gets resourcePermissions
    *  resourcePermissions
    *
    * @return map[string,object]|null
    */
    public function getResourcePermissions()
    {
        return $this->container['resourcePermissions'];
    }

    /**
    * Sets resourcePermissions
    *
    * @param map[string,object]|null $resourcePermissions resourcePermissions
    *
    * @return $this
    */
    public function setResourcePermissions($resourcePermissions)
    {
        $this->container['resourcePermissions'] = $resourcePermissions;
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

