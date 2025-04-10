<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TableApprover implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TableApprover';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  审批人id
    * name  审批人姓名
    * permissionSetId  权限集id
    * type  审批人类型, 0 用户  1 用户组  2 角色（空间管理员）
    * workspaceId  空间id
    * tableApproverType  安全管理员：SECURITY_MANAGER，空间权限集管理员WORKSPACE_PERMISSION_SET_MANAGER，权限集管理员PERMISSION_SET_MANAGER
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'permissionSetId' => 'string',
            'type' => 'int',
            'workspaceId' => 'string',
            'tableApproverType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  审批人id
    * name  审批人姓名
    * permissionSetId  权限集id
    * type  审批人类型, 0 用户  1 用户组  2 角色（空间管理员）
    * workspaceId  空间id
    * tableApproverType  安全管理员：SECURITY_MANAGER，空间权限集管理员WORKSPACE_PERMISSION_SET_MANAGER，权限集管理员PERMISSION_SET_MANAGER
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'permissionSetId' => null,
        'type' => null,
        'workspaceId' => null,
        'tableApproverType' => null
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
    * id  审批人id
    * name  审批人姓名
    * permissionSetId  权限集id
    * type  审批人类型, 0 用户  1 用户组  2 角色（空间管理员）
    * workspaceId  空间id
    * tableApproverType  安全管理员：SECURITY_MANAGER，空间权限集管理员WORKSPACE_PERMISSION_SET_MANAGER，权限集管理员PERMISSION_SET_MANAGER
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'permissionSetId' => 'permission_set_id',
            'type' => 'type',
            'workspaceId' => 'workspace_id',
            'tableApproverType' => 'table_approver_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  审批人id
    * name  审批人姓名
    * permissionSetId  权限集id
    * type  审批人类型, 0 用户  1 用户组  2 角色（空间管理员）
    * workspaceId  空间id
    * tableApproverType  安全管理员：SECURITY_MANAGER，空间权限集管理员WORKSPACE_PERMISSION_SET_MANAGER，权限集管理员PERMISSION_SET_MANAGER
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'permissionSetId' => 'setPermissionSetId',
            'type' => 'setType',
            'workspaceId' => 'setWorkspaceId',
            'tableApproverType' => 'setTableApproverType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  审批人id
    * name  审批人姓名
    * permissionSetId  权限集id
    * type  审批人类型, 0 用户  1 用户组  2 角色（空间管理员）
    * workspaceId  空间id
    * tableApproverType  安全管理员：SECURITY_MANAGER，空间权限集管理员WORKSPACE_PERMISSION_SET_MANAGER，权限集管理员PERMISSION_SET_MANAGER
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'permissionSetId' => 'getPermissionSetId',
            'type' => 'getType',
            'workspaceId' => 'getWorkspaceId',
            'tableApproverType' => 'getTableApproverType'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['permissionSetId'] = isset($data['permissionSetId']) ? $data['permissionSetId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['tableApproverType'] = isset($data['tableApproverType']) ? $data['tableApproverType'] : null;
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
    * Gets id
    *  审批人id
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 审批人id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  审批人姓名
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 审批人姓名
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets permissionSetId
    *  权限集id
    *
    * @return string|null
    */
    public function getPermissionSetId()
    {
        return $this->container['permissionSetId'];
    }

    /**
    * Sets permissionSetId
    *
    * @param string|null $permissionSetId 权限集id
    *
    * @return $this
    */
    public function setPermissionSetId($permissionSetId)
    {
        $this->container['permissionSetId'] = $permissionSetId;
        return $this;
    }

    /**
    * Gets type
    *  审批人类型, 0 用户  1 用户组  2 角色（空间管理员）
    *
    * @return int|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int|null $type 审批人类型, 0 用户  1 用户组  2 角色（空间管理员）
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets workspaceId
    *  空间id
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId 空间id
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets tableApproverType
    *  安全管理员：SECURITY_MANAGER，空间权限集管理员WORKSPACE_PERMISSION_SET_MANAGER，权限集管理员PERMISSION_SET_MANAGER
    *
    * @return string|null
    */
    public function getTableApproverType()
    {
        return $this->container['tableApproverType'];
    }

    /**
    * Sets tableApproverType
    *
    * @param string|null $tableApproverType 安全管理员：SECURITY_MANAGER，空间权限集管理员WORKSPACE_PERMISSION_SET_MANAGER，权限集管理员PERMISSION_SET_MANAGER
    *
    * @return $this
    */
    public function setTableApproverType($tableApproverType)
    {
        $this->container['tableApproverType'] = $tableApproverType;
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

