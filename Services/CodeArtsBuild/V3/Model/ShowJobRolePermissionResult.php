<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowJobRolePermissionResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowJobRolePermission_result';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  数据库中ID
    * roleId  角色ID
    * roleName  角色名
    * jobId  任务ID
    * isModify  是否有修改任务权限
    * isDelete  是否有删除任务权限
    * isView  是否有查看任务权限
    * isExecute  是否有执行任务权限
    * isCopy  是否有复制任务权限
    * isForbidden  是否有禁用任务权限
    * isManager  是否有管理任务权限
    * createTime  任务创建时间
    * lastUpdateTime  任务最后修改时间
    * count  次数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'roleId' => 'int',
            'roleName' => 'string',
            'jobId' => 'string',
            'isModify' => 'bool',
            'isDelete' => 'bool',
            'isView' => 'bool',
            'isExecute' => 'bool',
            'isCopy' => 'bool',
            'isForbidden' => 'bool',
            'isManager' => 'bool',
            'createTime' => 'string',
            'lastUpdateTime' => 'string',
            'count' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  数据库中ID
    * roleId  角色ID
    * roleName  角色名
    * jobId  任务ID
    * isModify  是否有修改任务权限
    * isDelete  是否有删除任务权限
    * isView  是否有查看任务权限
    * isExecute  是否有执行任务权限
    * isCopy  是否有复制任务权限
    * isForbidden  是否有禁用任务权限
    * isManager  是否有管理任务权限
    * createTime  任务创建时间
    * lastUpdateTime  任务最后修改时间
    * count  次数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'roleId' => 'int32',
        'roleName' => null,
        'jobId' => null,
        'isModify' => null,
        'isDelete' => null,
        'isView' => null,
        'isExecute' => null,
        'isCopy' => null,
        'isForbidden' => null,
        'isManager' => null,
        'createTime' => null,
        'lastUpdateTime' => null,
        'count' => 'int32'
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
    * id  数据库中ID
    * roleId  角色ID
    * roleName  角色名
    * jobId  任务ID
    * isModify  是否有修改任务权限
    * isDelete  是否有删除任务权限
    * isView  是否有查看任务权限
    * isExecute  是否有执行任务权限
    * isCopy  是否有复制任务权限
    * isForbidden  是否有禁用任务权限
    * isManager  是否有管理任务权限
    * createTime  任务创建时间
    * lastUpdateTime  任务最后修改时间
    * count  次数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'roleId' => 'role_id',
            'roleName' => 'role_name',
            'jobId' => 'job_id',
            'isModify' => 'is_modify',
            'isDelete' => 'is_delete',
            'isView' => 'is_view',
            'isExecute' => 'is_execute',
            'isCopy' => 'is_copy',
            'isForbidden' => 'is_forbidden',
            'isManager' => 'is_manager',
            'createTime' => 'create_time',
            'lastUpdateTime' => 'last_update_time',
            'count' => 'count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  数据库中ID
    * roleId  角色ID
    * roleName  角色名
    * jobId  任务ID
    * isModify  是否有修改任务权限
    * isDelete  是否有删除任务权限
    * isView  是否有查看任务权限
    * isExecute  是否有执行任务权限
    * isCopy  是否有复制任务权限
    * isForbidden  是否有禁用任务权限
    * isManager  是否有管理任务权限
    * createTime  任务创建时间
    * lastUpdateTime  任务最后修改时间
    * count  次数
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'roleId' => 'setRoleId',
            'roleName' => 'setRoleName',
            'jobId' => 'setJobId',
            'isModify' => 'setIsModify',
            'isDelete' => 'setIsDelete',
            'isView' => 'setIsView',
            'isExecute' => 'setIsExecute',
            'isCopy' => 'setIsCopy',
            'isForbidden' => 'setIsForbidden',
            'isManager' => 'setIsManager',
            'createTime' => 'setCreateTime',
            'lastUpdateTime' => 'setLastUpdateTime',
            'count' => 'setCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  数据库中ID
    * roleId  角色ID
    * roleName  角色名
    * jobId  任务ID
    * isModify  是否有修改任务权限
    * isDelete  是否有删除任务权限
    * isView  是否有查看任务权限
    * isExecute  是否有执行任务权限
    * isCopy  是否有复制任务权限
    * isForbidden  是否有禁用任务权限
    * isManager  是否有管理任务权限
    * createTime  任务创建时间
    * lastUpdateTime  任务最后修改时间
    * count  次数
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'roleId' => 'getRoleId',
            'roleName' => 'getRoleName',
            'jobId' => 'getJobId',
            'isModify' => 'getIsModify',
            'isDelete' => 'getIsDelete',
            'isView' => 'getIsView',
            'isExecute' => 'getIsExecute',
            'isCopy' => 'getIsCopy',
            'isForbidden' => 'getIsForbidden',
            'isManager' => 'getIsManager',
            'createTime' => 'getCreateTime',
            'lastUpdateTime' => 'getLastUpdateTime',
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
        $this->container['roleName'] = isset($data['roleName']) ? $data['roleName'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['isModify'] = isset($data['isModify']) ? $data['isModify'] : null;
        $this->container['isDelete'] = isset($data['isDelete']) ? $data['isDelete'] : null;
        $this->container['isView'] = isset($data['isView']) ? $data['isView'] : null;
        $this->container['isExecute'] = isset($data['isExecute']) ? $data['isExecute'] : null;
        $this->container['isCopy'] = isset($data['isCopy']) ? $data['isCopy'] : null;
        $this->container['isForbidden'] = isset($data['isForbidden']) ? $data['isForbidden'] : null;
        $this->container['isManager'] = isset($data['isManager']) ? $data['isManager'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['lastUpdateTime'] = isset($data['lastUpdateTime']) ? $data['lastUpdateTime'] : null;
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
    *  数据库中ID
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
    * @param int|null $id 数据库中ID
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
    * Gets jobId
    *  任务ID
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId 任务ID
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
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
    * Gets createTime
    *  任务创建时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 任务创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets lastUpdateTime
    *  任务最后修改时间
    *
    * @return string|null
    */
    public function getLastUpdateTime()
    {
        return $this->container['lastUpdateTime'];
    }

    /**
    * Sets lastUpdateTime
    *
    * @param string|null $lastUpdateTime 任务最后修改时间
    *
    * @return $this
    */
    public function setLastUpdateTime($lastUpdateTime)
    {
        $this->container['lastUpdateTime'] = $lastUpdateTime;
        return $this;
    }

    /**
    * Gets count
    *  次数
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
    * @param int|null $count 次数
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

