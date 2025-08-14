<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowUserProjectPermissionResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowUserProjectPermission_result';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  工程编号
    * createPermission  用户是否有创建权限
    * modifyPermission  用户是否有修改权限
    * groupPermission  用户是否有分类权限
    * deletePermission  用户是否有删除权限。
    * viewPermission  用户是否有查看权限。
    * executePermission  用户是否有执行权限。
    * copyPermission  用户是否有克隆权限。
    * forbiddenPermission  用户是否有禁用权限。
    * managerPermission  用户是否有管理权限。
    * roleId  角色ID
    * roleName  角色名
    * roleIds  角色编码集合。
    * roleNames  角色名称集合。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'createPermission' => 'bool',
            'modifyPermission' => 'bool',
            'groupPermission' => 'bool',
            'deletePermission' => 'bool',
            'viewPermission' => 'bool',
            'executePermission' => 'bool',
            'copyPermission' => 'bool',
            'forbiddenPermission' => 'bool',
            'managerPermission' => 'bool',
            'roleId' => 'string',
            'roleName' => 'string',
            'roleIds' => 'string[]',
            'roleNames' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  工程编号
    * createPermission  用户是否有创建权限
    * modifyPermission  用户是否有修改权限
    * groupPermission  用户是否有分类权限
    * deletePermission  用户是否有删除权限。
    * viewPermission  用户是否有查看权限。
    * executePermission  用户是否有执行权限。
    * copyPermission  用户是否有克隆权限。
    * forbiddenPermission  用户是否有禁用权限。
    * managerPermission  用户是否有管理权限。
    * roleId  角色ID
    * roleName  角色名
    * roleIds  角色编码集合。
    * roleNames  角色名称集合。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'createPermission' => null,
        'modifyPermission' => null,
        'groupPermission' => null,
        'deletePermission' => null,
        'viewPermission' => null,
        'executePermission' => null,
        'copyPermission' => null,
        'forbiddenPermission' => null,
        'managerPermission' => null,
        'roleId' => null,
        'roleName' => null,
        'roleIds' => null,
        'roleNames' => null
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
    * projectId  工程编号
    * createPermission  用户是否有创建权限
    * modifyPermission  用户是否有修改权限
    * groupPermission  用户是否有分类权限
    * deletePermission  用户是否有删除权限。
    * viewPermission  用户是否有查看权限。
    * executePermission  用户是否有执行权限。
    * copyPermission  用户是否有克隆权限。
    * forbiddenPermission  用户是否有禁用权限。
    * managerPermission  用户是否有管理权限。
    * roleId  角色ID
    * roleName  角色名
    * roleIds  角色编码集合。
    * roleNames  角色名称集合。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'createPermission' => 'create_permission',
            'modifyPermission' => 'modify_permission',
            'groupPermission' => 'group_permission',
            'deletePermission' => 'delete_permission',
            'viewPermission' => 'view_permission',
            'executePermission' => 'execute_permission',
            'copyPermission' => 'copy_permission',
            'forbiddenPermission' => 'forbidden_permission',
            'managerPermission' => 'manager_permission',
            'roleId' => 'role_id',
            'roleName' => 'role_name',
            'roleIds' => 'role_ids',
            'roleNames' => 'role_names'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  工程编号
    * createPermission  用户是否有创建权限
    * modifyPermission  用户是否有修改权限
    * groupPermission  用户是否有分类权限
    * deletePermission  用户是否有删除权限。
    * viewPermission  用户是否有查看权限。
    * executePermission  用户是否有执行权限。
    * copyPermission  用户是否有克隆权限。
    * forbiddenPermission  用户是否有禁用权限。
    * managerPermission  用户是否有管理权限。
    * roleId  角色ID
    * roleName  角色名
    * roleIds  角色编码集合。
    * roleNames  角色名称集合。
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'createPermission' => 'setCreatePermission',
            'modifyPermission' => 'setModifyPermission',
            'groupPermission' => 'setGroupPermission',
            'deletePermission' => 'setDeletePermission',
            'viewPermission' => 'setViewPermission',
            'executePermission' => 'setExecutePermission',
            'copyPermission' => 'setCopyPermission',
            'forbiddenPermission' => 'setForbiddenPermission',
            'managerPermission' => 'setManagerPermission',
            'roleId' => 'setRoleId',
            'roleName' => 'setRoleName',
            'roleIds' => 'setRoleIds',
            'roleNames' => 'setRoleNames'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  工程编号
    * createPermission  用户是否有创建权限
    * modifyPermission  用户是否有修改权限
    * groupPermission  用户是否有分类权限
    * deletePermission  用户是否有删除权限。
    * viewPermission  用户是否有查看权限。
    * executePermission  用户是否有执行权限。
    * copyPermission  用户是否有克隆权限。
    * forbiddenPermission  用户是否有禁用权限。
    * managerPermission  用户是否有管理权限。
    * roleId  角色ID
    * roleName  角色名
    * roleIds  角色编码集合。
    * roleNames  角色名称集合。
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'createPermission' => 'getCreatePermission',
            'modifyPermission' => 'getModifyPermission',
            'groupPermission' => 'getGroupPermission',
            'deletePermission' => 'getDeletePermission',
            'viewPermission' => 'getViewPermission',
            'executePermission' => 'getExecutePermission',
            'copyPermission' => 'getCopyPermission',
            'forbiddenPermission' => 'getForbiddenPermission',
            'managerPermission' => 'getManagerPermission',
            'roleId' => 'getRoleId',
            'roleName' => 'getRoleName',
            'roleIds' => 'getRoleIds',
            'roleNames' => 'getRoleNames'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['createPermission'] = isset($data['createPermission']) ? $data['createPermission'] : null;
        $this->container['modifyPermission'] = isset($data['modifyPermission']) ? $data['modifyPermission'] : null;
        $this->container['groupPermission'] = isset($data['groupPermission']) ? $data['groupPermission'] : null;
        $this->container['deletePermission'] = isset($data['deletePermission']) ? $data['deletePermission'] : null;
        $this->container['viewPermission'] = isset($data['viewPermission']) ? $data['viewPermission'] : null;
        $this->container['executePermission'] = isset($data['executePermission']) ? $data['executePermission'] : null;
        $this->container['copyPermission'] = isset($data['copyPermission']) ? $data['copyPermission'] : null;
        $this->container['forbiddenPermission'] = isset($data['forbiddenPermission']) ? $data['forbiddenPermission'] : null;
        $this->container['managerPermission'] = isset($data['managerPermission']) ? $data['managerPermission'] : null;
        $this->container['roleId'] = isset($data['roleId']) ? $data['roleId'] : null;
        $this->container['roleName'] = isset($data['roleName']) ? $data['roleName'] : null;
        $this->container['roleIds'] = isset($data['roleIds']) ? $data['roleIds'] : null;
        $this->container['roleNames'] = isset($data['roleNames']) ? $data['roleNames'] : null;
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
    * Gets projectId
    *  工程编号
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 工程编号
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets createPermission
    *  用户是否有创建权限
    *
    * @return bool|null
    */
    public function getCreatePermission()
    {
        return $this->container['createPermission'];
    }

    /**
    * Sets createPermission
    *
    * @param bool|null $createPermission 用户是否有创建权限
    *
    * @return $this
    */
    public function setCreatePermission($createPermission)
    {
        $this->container['createPermission'] = $createPermission;
        return $this;
    }

    /**
    * Gets modifyPermission
    *  用户是否有修改权限
    *
    * @return bool|null
    */
    public function getModifyPermission()
    {
        return $this->container['modifyPermission'];
    }

    /**
    * Sets modifyPermission
    *
    * @param bool|null $modifyPermission 用户是否有修改权限
    *
    * @return $this
    */
    public function setModifyPermission($modifyPermission)
    {
        $this->container['modifyPermission'] = $modifyPermission;
        return $this;
    }

    /**
    * Gets groupPermission
    *  用户是否有分类权限
    *
    * @return bool|null
    */
    public function getGroupPermission()
    {
        return $this->container['groupPermission'];
    }

    /**
    * Sets groupPermission
    *
    * @param bool|null $groupPermission 用户是否有分类权限
    *
    * @return $this
    */
    public function setGroupPermission($groupPermission)
    {
        $this->container['groupPermission'] = $groupPermission;
        return $this;
    }

    /**
    * Gets deletePermission
    *  用户是否有删除权限。
    *
    * @return bool|null
    */
    public function getDeletePermission()
    {
        return $this->container['deletePermission'];
    }

    /**
    * Sets deletePermission
    *
    * @param bool|null $deletePermission 用户是否有删除权限。
    *
    * @return $this
    */
    public function setDeletePermission($deletePermission)
    {
        $this->container['deletePermission'] = $deletePermission;
        return $this;
    }

    /**
    * Gets viewPermission
    *  用户是否有查看权限。
    *
    * @return bool|null
    */
    public function getViewPermission()
    {
        return $this->container['viewPermission'];
    }

    /**
    * Sets viewPermission
    *
    * @param bool|null $viewPermission 用户是否有查看权限。
    *
    * @return $this
    */
    public function setViewPermission($viewPermission)
    {
        $this->container['viewPermission'] = $viewPermission;
        return $this;
    }

    /**
    * Gets executePermission
    *  用户是否有执行权限。
    *
    * @return bool|null
    */
    public function getExecutePermission()
    {
        return $this->container['executePermission'];
    }

    /**
    * Sets executePermission
    *
    * @param bool|null $executePermission 用户是否有执行权限。
    *
    * @return $this
    */
    public function setExecutePermission($executePermission)
    {
        $this->container['executePermission'] = $executePermission;
        return $this;
    }

    /**
    * Gets copyPermission
    *  用户是否有克隆权限。
    *
    * @return bool|null
    */
    public function getCopyPermission()
    {
        return $this->container['copyPermission'];
    }

    /**
    * Sets copyPermission
    *
    * @param bool|null $copyPermission 用户是否有克隆权限。
    *
    * @return $this
    */
    public function setCopyPermission($copyPermission)
    {
        $this->container['copyPermission'] = $copyPermission;
        return $this;
    }

    /**
    * Gets forbiddenPermission
    *  用户是否有禁用权限。
    *
    * @return bool|null
    */
    public function getForbiddenPermission()
    {
        return $this->container['forbiddenPermission'];
    }

    /**
    * Sets forbiddenPermission
    *
    * @param bool|null $forbiddenPermission 用户是否有禁用权限。
    *
    * @return $this
    */
    public function setForbiddenPermission($forbiddenPermission)
    {
        $this->container['forbiddenPermission'] = $forbiddenPermission;
        return $this;
    }

    /**
    * Gets managerPermission
    *  用户是否有管理权限。
    *
    * @return bool|null
    */
    public function getManagerPermission()
    {
        return $this->container['managerPermission'];
    }

    /**
    * Sets managerPermission
    *
    * @param bool|null $managerPermission 用户是否有管理权限。
    *
    * @return $this
    */
    public function setManagerPermission($managerPermission)
    {
        $this->container['managerPermission'] = $managerPermission;
        return $this;
    }

    /**
    * Gets roleId
    *  角色ID
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
    * @param string|null $roleId 角色ID
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
    *  角色名
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
    * @param string|null $roleName 角色名
    *
    * @return $this
    */
    public function setRoleName($roleName)
    {
        $this->container['roleName'] = $roleName;
        return $this;
    }

    /**
    * Gets roleIds
    *  角色编码集合。
    *
    * @return string[]|null
    */
    public function getRoleIds()
    {
        return $this->container['roleIds'];
    }

    /**
    * Sets roleIds
    *
    * @param string[]|null $roleIds 角色编码集合。
    *
    * @return $this
    */
    public function setRoleIds($roleIds)
    {
        $this->container['roleIds'] = $roleIds;
        return $this;
    }

    /**
    * Gets roleNames
    *  角色名称集合。
    *
    * @return string[]|null
    */
    public function getRoleNames()
    {
        return $this->container['roleNames'];
    }

    /**
    * Sets roleNames
    *
    * @param string[]|null $roleNames 角色名称集合。
    *
    * @return $this
    */
    public function setRoleNames($roleNames)
    {
        $this->container['roleNames'] = $roleNames;
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

