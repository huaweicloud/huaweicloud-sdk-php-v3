<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryRoleDetailResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryRoleDetailResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * role  角色。
    * comment  说明。
    * isTransfer  是否支持迁移。
    * privileges  角色权限。
    * inheritsRoles  继承的角色。
    * selected  是否选择。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'role' => 'string',
            'comment' => 'string',
            'isTransfer' => 'bool',
            'privileges' => 'string',
            'inheritsRoles' => 'string[]',
            'selected' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * role  角色。
    * comment  说明。
    * isTransfer  是否支持迁移。
    * privileges  角色权限。
    * inheritsRoles  继承的角色。
    * selected  是否选择。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'role' => null,
        'comment' => null,
        'isTransfer' => null,
        'privileges' => null,
        'inheritsRoles' => null,
        'selected' => null
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
    * role  角色。
    * comment  说明。
    * isTransfer  是否支持迁移。
    * privileges  角色权限。
    * inheritsRoles  继承的角色。
    * selected  是否选择。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'role' => 'role',
            'comment' => 'comment',
            'isTransfer' => 'is_transfer',
            'privileges' => 'privileges',
            'inheritsRoles' => 'inherits_roles',
            'selected' => 'selected'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * role  角色。
    * comment  说明。
    * isTransfer  是否支持迁移。
    * privileges  角色权限。
    * inheritsRoles  继承的角色。
    * selected  是否选择。
    *
    * @var string[]
    */
    protected static $setters = [
            'role' => 'setRole',
            'comment' => 'setComment',
            'isTransfer' => 'setIsTransfer',
            'privileges' => 'setPrivileges',
            'inheritsRoles' => 'setInheritsRoles',
            'selected' => 'setSelected'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * role  角色。
    * comment  说明。
    * isTransfer  是否支持迁移。
    * privileges  角色权限。
    * inheritsRoles  继承的角色。
    * selected  是否选择。
    *
    * @var string[]
    */
    protected static $getters = [
            'role' => 'getRole',
            'comment' => 'getComment',
            'isTransfer' => 'getIsTransfer',
            'privileges' => 'getPrivileges',
            'inheritsRoles' => 'getInheritsRoles',
            'selected' => 'getSelected'
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
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['isTransfer'] = isset($data['isTransfer']) ? $data['isTransfer'] : null;
        $this->container['privileges'] = isset($data['privileges']) ? $data['privileges'] : null;
        $this->container['inheritsRoles'] = isset($data['inheritsRoles']) ? $data['inheritsRoles'] : null;
        $this->container['selected'] = isset($data['selected']) ? $data['selected'] : null;
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
    * Gets role
    *  角色。
    *
    * @return string|null
    */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
    * Sets role
    *
    * @param string|null $role 角色。
    *
    * @return $this
    */
    public function setRole($role)
    {
        $this->container['role'] = $role;
        return $this;
    }

    /**
    * Gets comment
    *  说明。
    *
    * @return string|null
    */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
    * Sets comment
    *
    * @param string|null $comment 说明。
    *
    * @return $this
    */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;
        return $this;
    }

    /**
    * Gets isTransfer
    *  是否支持迁移。
    *
    * @return bool|null
    */
    public function getIsTransfer()
    {
        return $this->container['isTransfer'];
    }

    /**
    * Sets isTransfer
    *
    * @param bool|null $isTransfer 是否支持迁移。
    *
    * @return $this
    */
    public function setIsTransfer($isTransfer)
    {
        $this->container['isTransfer'] = $isTransfer;
        return $this;
    }

    /**
    * Gets privileges
    *  角色权限。
    *
    * @return string|null
    */
    public function getPrivileges()
    {
        return $this->container['privileges'];
    }

    /**
    * Sets privileges
    *
    * @param string|null $privileges 角色权限。
    *
    * @return $this
    */
    public function setPrivileges($privileges)
    {
        $this->container['privileges'] = $privileges;
        return $this;
    }

    /**
    * Gets inheritsRoles
    *  继承的角色。
    *
    * @return string[]|null
    */
    public function getInheritsRoles()
    {
        return $this->container['inheritsRoles'];
    }

    /**
    * Sets inheritsRoles
    *
    * @param string[]|null $inheritsRoles 继承的角色。
    *
    * @return $this
    */
    public function setInheritsRoles($inheritsRoles)
    {
        $this->container['inheritsRoles'] = $inheritsRoles;
        return $this;
    }

    /**
    * Gets selected
    *  是否选择。
    *
    * @return bool|null
    */
    public function getSelected()
    {
        return $this->container['selected'];
    }

    /**
    * Sets selected
    *
    * @param bool|null $selected 是否选择。
    *
    * @return $this
    */
    public function setSelected($selected)
    {
        $this->container['selected'] = $selected;
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

