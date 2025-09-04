<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobRolePermission implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobRolePermission';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  主键ID
    * roleId  角色ID
    * devucRoleId  devuc的角色ID
    * roleName  角色名称
    * isModify  修改权限
    * isDelete  删除权限
    * isView  查看权限
    * isExecute  执行权限
    * isCopy  复制权限
    * isForbidden  禁用权限
    * isManager  管理权限
    * count  数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'roleId' => 'int',
            'devucRoleId' => 'string',
            'roleName' => 'string',
            'isModify' => 'bool',
            'isDelete' => 'bool',
            'isView' => 'bool',
            'isExecute' => 'bool',
            'isCopy' => 'bool',
            'isForbidden' => 'bool',
            'isManager' => 'bool',
            'count' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  主键ID
    * roleId  角色ID
    * devucRoleId  devuc的角色ID
    * roleName  角色名称
    * isModify  修改权限
    * isDelete  删除权限
    * isView  查看权限
    * isExecute  执行权限
    * isCopy  复制权限
    * isForbidden  禁用权限
    * isManager  管理权限
    * count  数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'roleId' => null,
        'devucRoleId' => null,
        'roleName' => null,
        'isModify' => null,
        'isDelete' => null,
        'isView' => null,
        'isExecute' => null,
        'isCopy' => null,
        'isForbidden' => null,
        'isManager' => null,
        'count' => null
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
    * id  主键ID
    * roleId  角色ID
    * devucRoleId  devuc的角色ID
    * roleName  角色名称
    * isModify  修改权限
    * isDelete  删除权限
    * isView  查看权限
    * isExecute  执行权限
    * isCopy  复制权限
    * isForbidden  禁用权限
    * isManager  管理权限
    * count  数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'roleId' => 'role_id',
            'devucRoleId' => 'devuc_role_id',
            'roleName' => 'role_name',
            'isModify' => 'is_modify',
            'isDelete' => 'is_delete',
            'isView' => 'is_view',
            'isExecute' => 'is_execute',
            'isCopy' => 'is_copy',
            'isForbidden' => 'is_forbidden',
            'isManager' => 'is_manager',
            'count' => 'count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  主键ID
    * roleId  角色ID
    * devucRoleId  devuc的角色ID
    * roleName  角色名称
    * isModify  修改权限
    * isDelete  删除权限
    * isView  查看权限
    * isExecute  执行权限
    * isCopy  复制权限
    * isForbidden  禁用权限
    * isManager  管理权限
    * count  数量
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'roleId' => 'setRoleId',
            'devucRoleId' => 'setDevucRoleId',
            'roleName' => 'setRoleName',
            'isModify' => 'setIsModify',
            'isDelete' => 'setIsDelete',
            'isView' => 'setIsView',
            'isExecute' => 'setIsExecute',
            'isCopy' => 'setIsCopy',
            'isForbidden' => 'setIsForbidden',
            'isManager' => 'setIsManager',
            'count' => 'setCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  主键ID
    * roleId  角色ID
    * devucRoleId  devuc的角色ID
    * roleName  角色名称
    * isModify  修改权限
    * isDelete  删除权限
    * isView  查看权限
    * isExecute  执行权限
    * isCopy  复制权限
    * isForbidden  禁用权限
    * isManager  管理权限
    * count  数量
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'roleId' => 'getRoleId',
            'devucRoleId' => 'getDevucRoleId',
            'roleName' => 'getRoleName',
            'isModify' => 'getIsModify',
            'isDelete' => 'getIsDelete',
            'isView' => 'getIsView',
            'isExecute' => 'getIsExecute',
            'isCopy' => 'getIsCopy',
            'isForbidden' => 'getIsForbidden',
            'isManager' => 'getIsManager',
            'count' => 'getCount'
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
        $this->container['devucRoleId'] = isset($data['devucRoleId']) ? $data['devucRoleId'] : null;
        $this->container['roleName'] = isset($data['roleName']) ? $data['roleName'] : null;
        $this->container['isModify'] = isset($data['isModify']) ? $data['isModify'] : null;
        $this->container['isDelete'] = isset($data['isDelete']) ? $data['isDelete'] : null;
        $this->container['isView'] = isset($data['isView']) ? $data['isView'] : null;
        $this->container['isExecute'] = isset($data['isExecute']) ? $data['isExecute'] : null;
        $this->container['isCopy'] = isset($data['isCopy']) ? $data['isCopy'] : null;
        $this->container['isForbidden'] = isset($data['isForbidden']) ? $data['isForbidden'] : null;
        $this->container['isManager'] = isset($data['isManager']) ? $data['isManager'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
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
    *  主键ID
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
    * @param int|null $id 主键ID
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
    *  角色ID
    *
    * @return int|null
    */
    public function getRoleId()
    {
        return $this->container['roleId'];
    }

    /**
    * Sets roleId
    *
    * @param int|null $roleId 角色ID
    *
    * @return $this
    */
    public function setRoleId($roleId)
    {
        $this->container['roleId'] = $roleId;
        return $this;
    }

    /**
    * Gets devucRoleId
    *  devuc的角色ID
    *
    * @return string|null
    */
    public function getDevucRoleId()
    {
        return $this->container['devucRoleId'];
    }

    /**
    * Sets devucRoleId
    *
    * @param string|null $devucRoleId devuc的角色ID
    *
    * @return $this
    */
    public function setDevucRoleId($devucRoleId)
    {
        $this->container['devucRoleId'] = $devucRoleId;
        return $this;
    }

    /**
    * Gets roleName
    *  角色名称
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
    * @param string|null $roleName 角色名称
    *
    * @return $this
    */
    public function setRoleName($roleName)
    {
        $this->container['roleName'] = $roleName;
        return $this;
    }

    /**
    * Gets isModify
    *  修改权限
    *
    * @return bool|null
    */
    public function getIsModify()
    {
        return $this->container['isModify'];
    }

    /**
    * Sets isModify
    *
    * @param bool|null $isModify 修改权限
    *
    * @return $this
    */
    public function setIsModify($isModify)
    {
        $this->container['isModify'] = $isModify;
        return $this;
    }

    /**
    * Gets isDelete
    *  删除权限
    *
    * @return bool|null
    */
    public function getIsDelete()
    {
        return $this->container['isDelete'];
    }

    /**
    * Sets isDelete
    *
    * @param bool|null $isDelete 删除权限
    *
    * @return $this
    */
    public function setIsDelete($isDelete)
    {
        $this->container['isDelete'] = $isDelete;
        return $this;
    }

    /**
    * Gets isView
    *  查看权限
    *
    * @return bool|null
    */
    public function getIsView()
    {
        return $this->container['isView'];
    }

    /**
    * Sets isView
    *
    * @param bool|null $isView 查看权限
    *
    * @return $this
    */
    public function setIsView($isView)
    {
        $this->container['isView'] = $isView;
        return $this;
    }

    /**
    * Gets isExecute
    *  执行权限
    *
    * @return bool|null
    */
    public function getIsExecute()
    {
        return $this->container['isExecute'];
    }

    /**
    * Sets isExecute
    *
    * @param bool|null $isExecute 执行权限
    *
    * @return $this
    */
    public function setIsExecute($isExecute)
    {
        $this->container['isExecute'] = $isExecute;
        return $this;
    }

    /**
    * Gets isCopy
    *  复制权限
    *
    * @return bool|null
    */
    public function getIsCopy()
    {
        return $this->container['isCopy'];
    }

    /**
    * Sets isCopy
    *
    * @param bool|null $isCopy 复制权限
    *
    * @return $this
    */
    public function setIsCopy($isCopy)
    {
        $this->container['isCopy'] = $isCopy;
        return $this;
    }

    /**
    * Gets isForbidden
    *  禁用权限
    *
    * @return bool|null
    */
    public function getIsForbidden()
    {
        return $this->container['isForbidden'];
    }

    /**
    * Sets isForbidden
    *
    * @param bool|null $isForbidden 禁用权限
    *
    * @return $this
    */
    public function setIsForbidden($isForbidden)
    {
        $this->container['isForbidden'] = $isForbidden;
        return $this;
    }

    /**
    * Gets isManager
    *  管理权限
    *
    * @return bool|null
    */
    public function getIsManager()
    {
        return $this->container['isManager'];
    }

    /**
    * Sets isManager
    *
    * @param bool|null $isManager 管理权限
    *
    * @return $this
    */
    public function setIsManager($isManager)
    {
        $this->container['isManager'] = $isManager;
        return $this;
    }

    /**
    * Gets count
    *  数量
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 数量
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
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

