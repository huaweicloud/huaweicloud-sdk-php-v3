<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PermissionUpdateV2Body implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PermissionUpdateV2Body';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目id
    * roleId  角色id
    * permissionName  权限名称，can_view：查看权限；can_edit：编辑权限；can_delete：删除权限；can_add_host：添加主机权限；can_manage：权限管理权限；can_copy：复制主机权限
    * permissionValue  true 有权限，false 无权限
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'roleId' => 'string',
            'permissionName' => 'string',
            'permissionValue' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目id
    * roleId  角色id
    * permissionName  权限名称，can_view：查看权限；can_edit：编辑权限；can_delete：删除权限；can_add_host：添加主机权限；can_manage：权限管理权限；can_copy：复制主机权限
    * permissionValue  true 有权限，false 无权限
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
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
    * projectId  项目id
    * roleId  角色id
    * permissionName  权限名称，can_view：查看权限；can_edit：编辑权限；can_delete：删除权限；can_add_host：添加主机权限；can_manage：权限管理权限；can_copy：复制主机权限
    * permissionValue  true 有权限，false 无权限
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'roleId' => 'role_id',
            'permissionName' => 'permission_name',
            'permissionValue' => 'permission_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目id
    * roleId  角色id
    * permissionName  权限名称，can_view：查看权限；can_edit：编辑权限；can_delete：删除权限；can_add_host：添加主机权限；can_manage：权限管理权限；can_copy：复制主机权限
    * permissionValue  true 有权限，false 无权限
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'roleId' => 'setRoleId',
            'permissionName' => 'setPermissionName',
            'permissionValue' => 'setPermissionValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目id
    * roleId  角色id
    * permissionName  权限名称，can_view：查看权限；can_edit：编辑权限；can_delete：删除权限；can_add_host：添加主机权限；can_manage：权限管理权限；can_copy：复制主机权限
    * permissionValue  true 有权限，false 无权限
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
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
    const PERMISSION_NAME_CAN_ADD_HOST = 'can_add_host';
    const PERMISSION_NAME_CAN_MANAGE = 'can_manage';
    const PERMISSION_NAME_CAN_COPY = 'can_copy';
    

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
            self::PERMISSION_NAME_CAN_ADD_HOST,
            self::PERMISSION_NAME_CAN_MANAGE,
            self::PERMISSION_NAME_CAN_COPY,
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
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
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['projectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^[0-9a-z]{32}$/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /^[0-9a-z]{32}$/.";
            }
        if ($this->container['roleId'] === null) {
            $invalidProperties[] = "'roleId' can't be null";
        }
            if ((mb_strlen($this->container['roleId']) > 40)) {
                $invalidProperties[] = "invalid value for 'roleId', the character length must be smaller than or equal to 40.";
            }
            if ((mb_strlen($this->container['roleId']) < 1)) {
                $invalidProperties[] = "invalid value for 'roleId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[A-Za-z0-9\\-_]{1,40}$/", $this->container['roleId'])) {
                $invalidProperties[] = "invalid value for 'roleId', must be conform to the pattern /^[A-Za-z0-9\\-_]{1,40}$/.";
            }
        if ($this->container['permissionName'] === null) {
            $invalidProperties[] = "'permissionName' can't be null";
        }
            $allowedValues = $this->getPermissionNameAllowableValues();
                if (!is_null($this->container['permissionName']) && !in_array($this->container['permissionName'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'permissionName', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['permissionName']) > 128)) {
                $invalidProperties[] = "invalid value for 'permissionName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['permissionName']) < 0)) {
                $invalidProperties[] = "invalid value for 'permissionName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['permissionValue'] === null) {
            $invalidProperties[] = "'permissionValue' can't be null";
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
    * Gets projectId
    *  项目id
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets roleId
    *  角色id
    *
    * @return string
    */
    public function getRoleId()
    {
        return $this->container['roleId'];
    }

    /**
    * Sets roleId
    *
    * @param string $roleId 角色id
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
    *  权限名称，can_view：查看权限；can_edit：编辑权限；can_delete：删除权限；can_add_host：添加主机权限；can_manage：权限管理权限；can_copy：复制主机权限
    *
    * @return string
    */
    public function getPermissionName()
    {
        return $this->container['permissionName'];
    }

    /**
    * Sets permissionName
    *
    * @param string $permissionName 权限名称，can_view：查看权限；can_edit：编辑权限；can_delete：删除权限；can_add_host：添加主机权限；can_manage：权限管理权限；can_copy：复制主机权限
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
    * @return bool
    */
    public function getPermissionValue()
    {
        return $this->container['permissionValue'];
    }

    /**
    * Sets permissionValue
    *
    * @param bool $permissionValue true 有权限，false 无权限
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

