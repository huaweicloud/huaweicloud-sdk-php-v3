<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RoleSyncDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RoleSyncDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 角色记录id。
    * roleId  **参数解释：** 角色id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleSyncEnabled  **参数解释：** 角色同步开关。
    * roleName  **参数解释：** 角色名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleType  **参数解释：** 角色类型。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleChineseName  **参数解释：** 角色中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * updatedAt  **参数解释：** 更新时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'roleId' => 'string',
            'roleSyncEnabled' => 'bool',
            'roleName' => 'string',
            'roleType' => 'string',
            'roleChineseName' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 角色记录id。
    * roleId  **参数解释：** 角色id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleSyncEnabled  **参数解释：** 角色同步开关。
    * roleName  **参数解释：** 角色名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleType  **参数解释：** 角色类型。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleChineseName  **参数解释：** 角色中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * updatedAt  **参数解释：** 更新时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'roleId' => null,
        'roleSyncEnabled' => null,
        'roleName' => null,
        'roleType' => null,
        'roleChineseName' => null,
        'createdAt' => null,
        'updatedAt' => null
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
    * id  **参数解释：** 角色记录id。
    * roleId  **参数解释：** 角色id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleSyncEnabled  **参数解释：** 角色同步开关。
    * roleName  **参数解释：** 角色名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleType  **参数解释：** 角色类型。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleChineseName  **参数解释：** 角色中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * updatedAt  **参数解释：** 更新时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'roleId' => 'role_id',
            'roleSyncEnabled' => 'role_sync_enabled',
            'roleName' => 'role_name',
            'roleType' => 'role_type',
            'roleChineseName' => 'role_chinese_name',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 角色记录id。
    * roleId  **参数解释：** 角色id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleSyncEnabled  **参数解释：** 角色同步开关。
    * roleName  **参数解释：** 角色名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleType  **参数解释：** 角色类型。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleChineseName  **参数解释：** 角色中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * updatedAt  **参数解释：** 更新时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'roleId' => 'setRoleId',
            'roleSyncEnabled' => 'setRoleSyncEnabled',
            'roleName' => 'setRoleName',
            'roleType' => 'setRoleType',
            'roleChineseName' => 'setRoleChineseName',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 角色记录id。
    * roleId  **参数解释：** 角色id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleSyncEnabled  **参数解释：** 角色同步开关。
    * roleName  **参数解释：** 角色名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleType  **参数解释：** 角色类型。 **取值范围：** 字符串长度不少于1，不超过1000。
    * roleChineseName  **参数解释：** 角色中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * updatedAt  **参数解释：** 更新时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'roleId' => 'getRoleId',
            'roleSyncEnabled' => 'getRoleSyncEnabled',
            'roleName' => 'getRoleName',
            'roleType' => 'getRoleType',
            'roleChineseName' => 'getRoleChineseName',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt'
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
        $this->container['roleId'] = isset($data['roleId']) ? $data['roleId'] : null;
        $this->container['roleSyncEnabled'] = isset($data['roleSyncEnabled']) ? $data['roleSyncEnabled'] : null;
        $this->container['roleName'] = isset($data['roleName']) ? $data['roleName'] : null;
        $this->container['roleType'] = isset($data['roleType']) ? $data['roleType'] : null;
        $this->container['roleChineseName'] = isset($data['roleChineseName']) ? $data['roleChineseName'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
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
            if (!is_null($this->container['roleType']) && (mb_strlen($this->container['roleType']) > 1000)) {
                $invalidProperties[] = "invalid value for 'roleType', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['roleType']) && (mb_strlen($this->container['roleType']) < 1)) {
                $invalidProperties[] = "invalid value for 'roleType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['roleChineseName']) && (mb_strlen($this->container['roleChineseName']) > 1000)) {
                $invalidProperties[] = "invalid value for 'roleChineseName', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['roleChineseName']) && (mb_strlen($this->container['roleChineseName']) < 1)) {
                $invalidProperties[] = "invalid value for 'roleChineseName', the character length must be bigger than or equal to 1.";
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
    *  **参数解释：** 角色记录id。
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
    * @param int|null $id **参数解释：** 角色记录id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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
    * Gets roleSyncEnabled
    *  **参数解释：** 角色同步开关。
    *
    * @return bool|null
    */
    public function getRoleSyncEnabled()
    {
        return $this->container['roleSyncEnabled'];
    }

    /**
    * Sets roleSyncEnabled
    *
    * @param bool|null $roleSyncEnabled **参数解释：** 角色同步开关。
    *
    * @return $this
    */
    public function setRoleSyncEnabled($roleSyncEnabled)
    {
        $this->container['roleSyncEnabled'] = $roleSyncEnabled;
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
    * Gets roleType
    *  **参数解释：** 角色类型。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getRoleType()
    {
        return $this->container['roleType'];
    }

    /**
    * Sets roleType
    *
    * @param string|null $roleType **参数解释：** 角色类型。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setRoleType($roleType)
    {
        $this->container['roleType'] = $roleType;
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

