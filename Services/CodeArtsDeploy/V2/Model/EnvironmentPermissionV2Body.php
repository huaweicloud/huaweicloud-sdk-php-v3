<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EnvironmentPermissionV2Body implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EnvironmentPermissionV2Body';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * roleId  角色id
    * permissionName  权限名称，can_view：查看权限；can_edit：编辑权限；can_delete：删除权限；can_deploy：部署权限；can_manage：权限管理权限
    * permissionValue  true 有权限，false 无权限
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'roleId' => 'string',
            'permissionName' => 'string',
            'permissionValue' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * roleId  角色id
    * permissionName  权限名称，can_view：查看权限；can_edit：编辑权限；can_delete：删除权限；can_deploy：部署权限；can_manage：权限管理权限
    * permissionValue  true 有权限，false 无权限
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'roleId' => null,
        'permissionName' => null,
        'permissionValue' => null
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
    * roleId  角色id
    * permissionName  权限名称，can_view：查看权限；can_edit：编辑权限；can_delete：删除权限；can_deploy：部署权限；can_manage：权限管理权限
    * permissionValue  true 有权限，false 无权限
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'roleId' => 'role_id',
            'permissionName' => 'permission_name',
            'permissionValue' => 'permission_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * roleId  角色id
    * permissionName  权限名称，can_view：查看权限；can_edit：编辑权限；can_delete：删除权限；can_deploy：部署权限；can_manage：权限管理权限
    * permissionValue  true 有权限，false 无权限
    *
    * @var string[]
    */
    protected static $setters = [
            'roleId' => 'setRoleId',
            'permissionName' => 'setPermissionName',
            'permissionValue' => 'setPermissionValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * roleId  角色id
    * permissionName  权限名称，can_view：查看权限；can_edit：编辑权限；can_delete：删除权限；can_deploy：部署权限；can_manage：权限管理权限
    * permissionValue  true 有权限，false 无权限
    *
    * @var string[]
    */
    protected static $getters = [
            'roleId' => 'getRoleId',
            'permissionName' => 'getPermissionName',
            'permissionValue' => 'getPermissionValue'
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
    const PERMISSION_NAME_CAN_VIEW = 'can_view';
    const PERMISSION_NAME_CAN_EDIT = 'can_edit';
    const PERMISSION_NAME_CAN_DELETE = 'can_delete';
    const PERMISSION_NAME_CAN_DEPLOY = 'can_deploy';
    const PERMISSION_NAME_CAN_MANAGE = 'can_manage';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPermissionNameAllowableValues()
    {
        return [
            self::PERMISSION_NAME_CAN_VIEW,
            self::PERMISSION_NAME_CAN_EDIT,
            self::PERMISSION_NAME_CAN_DELETE,
            self::PERMISSION_NAME_CAN_DEPLOY,
            self::PERMISSION_NAME_CAN_MANAGE,
        ];
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
        $this->container['permissionName'] = isset($data['permissionName']) ? $data['permissionName'] : null;
        $this->container['permissionValue'] = isset($data['permissionValue']) ? $data['permissionValue'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['roleId']) && (mb_strlen($this->container['roleId']) > 40)) {
                $invalidProperties[] = "invalid value for 'roleId', the character length must be smaller than or equal to 40.";
            }
            if (!is_null($this->container['roleId']) && (mb_strlen($this->container['roleId']) < 0)) {
                $invalidProperties[] = "invalid value for 'roleId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['roleId']) && !preg_match("/^[A-Za-z0-9\\-_]{1,40}$/", $this->container['roleId'])) {
                $invalidProperties[] = "invalid value for 'roleId', must be conform to the pattern /^[A-Za-z0-9\\-_]{1,40}$/.";
            }
            $allowedValues = $this->getPermissionNameAllowableValues();
                if (!is_null($this->container['permissionName']) && !in_array($this->container['permissionName'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'permissionName', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['permissionName']) && (mb_strlen($this->container['permissionName']) > 32)) {
                $invalidProperties[] = "invalid value for 'permissionName', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['permissionName']) && (mb_strlen($this->container['permissionName']) < 0)) {
                $invalidProperties[] = "invalid value for 'permissionName', the character length must be bigger than or equal to 0.";
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
    *  角色id
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
    * @param string|null $roleId 角色id
    *
    * @return $this
    */
    public function setRoleId($roleId)
    {
        $this->container['roleId'] = $roleId;
        return $this;
    }

    /**
    * Gets permissionName
    *  权限名称，can_view：查看权限；can_edit：编辑权限；can_delete：删除权限；can_deploy：部署权限；can_manage：权限管理权限
    *
    * @return string|null
    */
    public function getPermissionName()
    {
        return $this->container['permissionName'];
    }

    /**
    * Sets permissionName
    *
    * @param string|null $permissionName 权限名称，can_view：查看权限；can_edit：编辑权限；can_delete：删除权限；can_deploy：部署权限；can_manage：权限管理权限
    *
    * @return $this
    */
    public function setPermissionName($permissionName)
    {
        $this->container['permissionName'] = $permissionName;
        return $this;
    }

    /**
    * Gets permissionValue
    *  true 有权限，false 无权限
    *
    * @return bool|null
    */
    public function getPermissionValue()
    {
        return $this->container['permissionValue'];
    }

    /**
    * Sets permissionValue
    *
    * @param bool|null $permissionValue true 有权限，false 无权限
    *
    * @return $this
    */
    public function setPermissionValue($permissionValue)
    {
        $this->container['permissionValue'] = $permissionValue;
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

