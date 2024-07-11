<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AppPermission implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AppPermission';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * devRoleId  角色id
    * canModify  是否具有编辑权限
    * canDelete  是否具有删除权限
    * canView  是否具有查看权限
    * canExecute  是否具有执行权限
    * canCopy  是否具有复制权限
    * canManage  是否具有权限管理权限
    * canCreateEnv  是否具有创建环境权限
    * canDisable  是否具有禁用权限
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'devRoleId' => 'string',
            'canModify' => 'bool',
            'canDelete' => 'bool',
            'canView' => 'bool',
            'canExecute' => 'bool',
            'canCopy' => 'bool',
            'canManage' => 'bool',
            'canCreateEnv' => 'bool',
            'canDisable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * devRoleId  角色id
    * canModify  是否具有编辑权限
    * canDelete  是否具有删除权限
    * canView  是否具有查看权限
    * canExecute  是否具有执行权限
    * canCopy  是否具有复制权限
    * canManage  是否具有权限管理权限
    * canCreateEnv  是否具有创建环境权限
    * canDisable  是否具有禁用权限
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'devRoleId' => null,
        'canModify' => null,
        'canDelete' => null,
        'canView' => null,
        'canExecute' => null,
        'canCopy' => null,
        'canManage' => null,
        'canCreateEnv' => null,
        'canDisable' => null
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
    * devRoleId  角色id
    * canModify  是否具有编辑权限
    * canDelete  是否具有删除权限
    * canView  是否具有查看权限
    * canExecute  是否具有执行权限
    * canCopy  是否具有复制权限
    * canManage  是否具有权限管理权限
    * canCreateEnv  是否具有创建环境权限
    * canDisable  是否具有禁用权限
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'devRoleId' => 'dev_role_id',
            'canModify' => 'can_modify',
            'canDelete' => 'can_delete',
            'canView' => 'can_view',
            'canExecute' => 'can_execute',
            'canCopy' => 'can_copy',
            'canManage' => 'can_manage',
            'canCreateEnv' => 'can_create_env',
            'canDisable' => 'can_disable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * devRoleId  角色id
    * canModify  是否具有编辑权限
    * canDelete  是否具有删除权限
    * canView  是否具有查看权限
    * canExecute  是否具有执行权限
    * canCopy  是否具有复制权限
    * canManage  是否具有权限管理权限
    * canCreateEnv  是否具有创建环境权限
    * canDisable  是否具有禁用权限
    *
    * @var string[]
    */
    protected static $setters = [
            'devRoleId' => 'setDevRoleId',
            'canModify' => 'setCanModify',
            'canDelete' => 'setCanDelete',
            'canView' => 'setCanView',
            'canExecute' => 'setCanExecute',
            'canCopy' => 'setCanCopy',
            'canManage' => 'setCanManage',
            'canCreateEnv' => 'setCanCreateEnv',
            'canDisable' => 'setCanDisable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * devRoleId  角色id
    * canModify  是否具有编辑权限
    * canDelete  是否具有删除权限
    * canView  是否具有查看权限
    * canExecute  是否具有执行权限
    * canCopy  是否具有复制权限
    * canManage  是否具有权限管理权限
    * canCreateEnv  是否具有创建环境权限
    * canDisable  是否具有禁用权限
    *
    * @var string[]
    */
    protected static $getters = [
            'devRoleId' => 'getDevRoleId',
            'canModify' => 'getCanModify',
            'canDelete' => 'getCanDelete',
            'canView' => 'getCanView',
            'canExecute' => 'getCanExecute',
            'canCopy' => 'getCanCopy',
            'canManage' => 'getCanManage',
            'canCreateEnv' => 'getCanCreateEnv',
            'canDisable' => 'getCanDisable'
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
        $this->container['devRoleId'] = isset($data['devRoleId']) ? $data['devRoleId'] : null;
        $this->container['canModify'] = isset($data['canModify']) ? $data['canModify'] : null;
        $this->container['canDelete'] = isset($data['canDelete']) ? $data['canDelete'] : null;
        $this->container['canView'] = isset($data['canView']) ? $data['canView'] : null;
        $this->container['canExecute'] = isset($data['canExecute']) ? $data['canExecute'] : null;
        $this->container['canCopy'] = isset($data['canCopy']) ? $data['canCopy'] : null;
        $this->container['canManage'] = isset($data['canManage']) ? $data['canManage'] : null;
        $this->container['canCreateEnv'] = isset($data['canCreateEnv']) ? $data['canCreateEnv'] : null;
        $this->container['canDisable'] = isset($data['canDisable']) ? $data['canDisable'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['devRoleId'] === null) {
            $invalidProperties[] = "'devRoleId' can't be null";
        }
            if (!preg_match("/^[A-Za-z0-9\\-_]{1,40}$/", $this->container['devRoleId'])) {
                $invalidProperties[] = "invalid value for 'devRoleId', must be conform to the pattern /^[A-Za-z0-9\\-_]{1,40}$/.";
            }
        if ($this->container['canModify'] === null) {
            $invalidProperties[] = "'canModify' can't be null";
        }
        if ($this->container['canDelete'] === null) {
            $invalidProperties[] = "'canDelete' can't be null";
        }
        if ($this->container['canView'] === null) {
            $invalidProperties[] = "'canView' can't be null";
        }
        if ($this->container['canExecute'] === null) {
            $invalidProperties[] = "'canExecute' can't be null";
        }
        if ($this->container['canCopy'] === null) {
            $invalidProperties[] = "'canCopy' can't be null";
        }
        if ($this->container['canManage'] === null) {
            $invalidProperties[] = "'canManage' can't be null";
        }
        if ($this->container['canCreateEnv'] === null) {
            $invalidProperties[] = "'canCreateEnv' can't be null";
        }
        if ($this->container['canDisable'] === null) {
            $invalidProperties[] = "'canDisable' can't be null";
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
    * Gets devRoleId
    *  角色id
    *
    * @return string
    */
    public function getDevRoleId()
    {
        return $this->container['devRoleId'];
    }

    /**
    * Sets devRoleId
    *
    * @param string $devRoleId 角色id
    *
    * @return $this
    */
    public function setDevRoleId($devRoleId)
    {
        $this->container['devRoleId'] = $devRoleId;
        return $this;
    }

    /**
    * Gets canModify
    *  是否具有编辑权限
    *
    * @return bool
    */
    public function getCanModify()
    {
        return $this->container['canModify'];
    }

    /**
    * Sets canModify
    *
    * @param bool $canModify 是否具有编辑权限
    *
    * @return $this
    */
    public function setCanModify($canModify)
    {
        $this->container['canModify'] = $canModify;
        return $this;
    }

    /**
    * Gets canDelete
    *  是否具有删除权限
    *
    * @return bool
    */
    public function getCanDelete()
    {
        return $this->container['canDelete'];
    }

    /**
    * Sets canDelete
    *
    * @param bool $canDelete 是否具有删除权限
    *
    * @return $this
    */
    public function setCanDelete($canDelete)
    {
        $this->container['canDelete'] = $canDelete;
        return $this;
    }

    /**
    * Gets canView
    *  是否具有查看权限
    *
    * @return bool
    */
    public function getCanView()
    {
        return $this->container['canView'];
    }

    /**
    * Sets canView
    *
    * @param bool $canView 是否具有查看权限
    *
    * @return $this
    */
    public function setCanView($canView)
    {
        $this->container['canView'] = $canView;
        return $this;
    }

    /**
    * Gets canExecute
    *  是否具有执行权限
    *
    * @return bool
    */
    public function getCanExecute()
    {
        return $this->container['canExecute'];
    }

    /**
    * Sets canExecute
    *
    * @param bool $canExecute 是否具有执行权限
    *
    * @return $this
    */
    public function setCanExecute($canExecute)
    {
        $this->container['canExecute'] = $canExecute;
        return $this;
    }

    /**
    * Gets canCopy
    *  是否具有复制权限
    *
    * @return bool
    */
    public function getCanCopy()
    {
        return $this->container['canCopy'];
    }

    /**
    * Sets canCopy
    *
    * @param bool $canCopy 是否具有复制权限
    *
    * @return $this
    */
    public function setCanCopy($canCopy)
    {
        $this->container['canCopy'] = $canCopy;
        return $this;
    }

    /**
    * Gets canManage
    *  是否具有权限管理权限
    *
    * @return bool
    */
    public function getCanManage()
    {
        return $this->container['canManage'];
    }

    /**
    * Sets canManage
    *
    * @param bool $canManage 是否具有权限管理权限
    *
    * @return $this
    */
    public function setCanManage($canManage)
    {
        $this->container['canManage'] = $canManage;
        return $this;
    }

    /**
    * Gets canCreateEnv
    *  是否具有创建环境权限
    *
    * @return bool
    */
    public function getCanCreateEnv()
    {
        return $this->container['canCreateEnv'];
    }

    /**
    * Sets canCreateEnv
    *
    * @param bool $canCreateEnv 是否具有创建环境权限
    *
    * @return $this
    */
    public function setCanCreateEnv($canCreateEnv)
    {
        $this->container['canCreateEnv'] = $canCreateEnv;
        return $this;
    }

    /**
    * Gets canDisable
    *  是否具有禁用权限
    *
    * @return bool
    */
    public function getCanDisable()
    {
        return $this->container['canDisable'];
    }

    /**
    * Sets canDisable
    *
    * @param bool $canDisable 是否具有禁用权限
    *
    * @return $this
    */
    public function setCanDisable($canDisable)
    {
        $this->container['canDisable'] = $canDisable;
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

