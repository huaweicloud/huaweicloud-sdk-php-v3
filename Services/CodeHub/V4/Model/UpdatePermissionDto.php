<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdatePermissionDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdatePermissionDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * roleId  **参数解释：** 角色id **取值范围：** 不涉及。
    * roleName  **参数解释：** 角色名称 **取值范围：** 不涉及。
    * permissions  **参数解释：** 更新权限点详情 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'roleId' => 'string',
            'roleName' => 'string',
            'permissions' => '\HuaweiCloud\SDK\CodeHub\V4\Model\UpdatePermissionDetail[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * roleId  **参数解释：** 角色id **取值范围：** 不涉及。
    * roleName  **参数解释：** 角色名称 **取值范围：** 不涉及。
    * permissions  **参数解释：** 更新权限点详情 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'roleId' => null,
        'roleName' => null,
        'permissions' => null
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
    * permissions  **参数解释：** 更新权限点详情 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'roleId' => 'role_id',
            'roleName' => 'role_name',
            'permissions' => 'permissions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * roleId  **参数解释：** 角色id **取值范围：** 不涉及。
    * roleName  **参数解释：** 角色名称 **取值范围：** 不涉及。
    * permissions  **参数解释：** 更新权限点详情 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'roleId' => 'setRoleId',
            'roleName' => 'setRoleName',
            'permissions' => 'setPermissions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * roleId  **参数解释：** 角色id **取值范围：** 不涉及。
    * roleName  **参数解释：** 角色名称 **取值范围：** 不涉及。
    * permissions  **参数解释：** 更新权限点详情 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'roleId' => 'getRoleId',
            'roleName' => 'getRoleName',
            'permissions' => 'getPermissions'
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
        $this->container['permissions'] = isset($data['permissions']) ? $data['permissions'] : null;
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
    * Gets permissions
    *  **参数解释：** 更新权限点详情 **取值范围：** 不涉及。
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\UpdatePermissionDetail[]|null
    */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
    * Sets permissions
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\UpdatePermissionDetail[]|null $permissions **参数解释：** 更新权限点详情 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setPermissions($permissions)
    {
        $this->container['permissions'] = $permissions;
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

