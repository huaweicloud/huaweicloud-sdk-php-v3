<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDefaultProjectPermissionResponseBodyResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDefaultProjectPermissionResponseBody_result';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * roleId  角色ID
    * roleName  角色名
    * isCopy  是否有复制任务权限
    * isDelete  是否有删除任务权限
    * isExecute  是否有执行任务权限
    * isForbidden  是否有禁用任务权限
    * isManager  是否有管理任务权限
    * isModify  是否有修改任务权限
    * isView  是否有查看任务权限
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'roleId' => 'int',
            'roleName' => 'string',
            'isCopy' => 'bool',
            'isDelete' => 'bool',
            'isExecute' => 'bool',
            'isForbidden' => 'bool',
            'isManager' => 'bool',
            'isModify' => 'bool',
            'isView' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * roleId  角色ID
    * roleName  角色名
    * isCopy  是否有复制任务权限
    * isDelete  是否有删除任务权限
    * isExecute  是否有执行任务权限
    * isForbidden  是否有禁用任务权限
    * isManager  是否有管理任务权限
    * isModify  是否有修改任务权限
    * isView  是否有查看任务权限
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'roleId' => null,
        'roleName' => null,
        'isCopy' => null,
        'isDelete' => null,
        'isExecute' => null,
        'isForbidden' => null,
        'isManager' => null,
        'isModify' => null,
        'isView' => null
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
    * roleId  角色ID
    * roleName  角色名
    * isCopy  是否有复制任务权限
    * isDelete  是否有删除任务权限
    * isExecute  是否有执行任务权限
    * isForbidden  是否有禁用任务权限
    * isManager  是否有管理任务权限
    * isModify  是否有修改任务权限
    * isView  是否有查看任务权限
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'roleId' => 'role_id',
            'roleName' => 'role_name',
            'isCopy' => 'is_copy',
            'isDelete' => 'is_delete',
            'isExecute' => 'is_execute',
            'isForbidden' => 'is_forbidden',
            'isManager' => 'is_manager',
            'isModify' => 'is_modify',
            'isView' => 'is_view'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * roleId  角色ID
    * roleName  角色名
    * isCopy  是否有复制任务权限
    * isDelete  是否有删除任务权限
    * isExecute  是否有执行任务权限
    * isForbidden  是否有禁用任务权限
    * isManager  是否有管理任务权限
    * isModify  是否有修改任务权限
    * isView  是否有查看任务权限
    *
    * @var string[]
    */
    protected static $setters = [
            'roleId' => 'setRoleId',
            'roleName' => 'setRoleName',
            'isCopy' => 'setIsCopy',
            'isDelete' => 'setIsDelete',
            'isExecute' => 'setIsExecute',
            'isForbidden' => 'setIsForbidden',
            'isManager' => 'setIsManager',
            'isModify' => 'setIsModify',
            'isView' => 'setIsView'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * roleId  角色ID
    * roleName  角色名
    * isCopy  是否有复制任务权限
    * isDelete  是否有删除任务权限
    * isExecute  是否有执行任务权限
    * isForbidden  是否有禁用任务权限
    * isManager  是否有管理任务权限
    * isModify  是否有修改任务权限
    * isView  是否有查看任务权限
    *
    * @var string[]
    */
    protected static $getters = [
            'roleId' => 'getRoleId',
            'roleName' => 'getRoleName',
            'isCopy' => 'getIsCopy',
            'isDelete' => 'getIsDelete',
            'isExecute' => 'getIsExecute',
            'isForbidden' => 'getIsForbidden',
            'isManager' => 'getIsManager',
            'isModify' => 'getIsModify',
            'isView' => 'getIsView'
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
        $this->container['isCopy'] = isset($data['isCopy']) ? $data['isCopy'] : null;
        $this->container['isDelete'] = isset($data['isDelete']) ? $data['isDelete'] : null;
        $this->container['isExecute'] = isset($data['isExecute']) ? $data['isExecute'] : null;
        $this->container['isForbidden'] = isset($data['isForbidden']) ? $data['isForbidden'] : null;
        $this->container['isManager'] = isset($data['isManager']) ? $data['isManager'] : null;
        $this->container['isModify'] = isset($data['isModify']) ? $data['isModify'] : null;
        $this->container['isView'] = isset($data['isView']) ? $data['isView'] : null;
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
    * Gets isCopy
    *  是否有复制任务权限
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
    * @param bool|null $isCopy 是否有复制任务权限
    *
    * @return $this
    */
    public function setIsCopy($isCopy)
    {
        $this->container['isCopy'] = $isCopy;
        return $this;
    }

    /**
    * Gets isDelete
    *  是否有删除任务权限
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
    * @param bool|null $isDelete 是否有删除任务权限
    *
    * @return $this
    */
    public function setIsDelete($isDelete)
    {
        $this->container['isDelete'] = $isDelete;
        return $this;
    }

    /**
    * Gets isExecute
    *  是否有执行任务权限
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
    * @param bool|null $isExecute 是否有执行任务权限
    *
    * @return $this
    */
    public function setIsExecute($isExecute)
    {
        $this->container['isExecute'] = $isExecute;
        return $this;
    }

    /**
    * Gets isForbidden
    *  是否有禁用任务权限
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
    * @param bool|null $isForbidden 是否有禁用任务权限
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
    *  是否有管理任务权限
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
    * @param bool|null $isManager 是否有管理任务权限
    *
    * @return $this
    */
    public function setIsManager($isManager)
    {
        $this->container['isManager'] = $isManager;
        return $this;
    }

    /**
    * Gets isModify
    *  是否有修改任务权限
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
    * @param bool|null $isModify 是否有修改任务权限
    *
    * @return $this
    */
    public function setIsModify($isModify)
    {
        $this->container['isModify'] = $isModify;
        return $this;
    }

    /**
    * Gets isView
    *  是否有查看任务权限
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
    * @param bool|null $isView 是否有查看任务权限
    *
    * @return $this
    */
    public function setIsView($isView)
    {
        $this->container['isView'] = $isView;
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

