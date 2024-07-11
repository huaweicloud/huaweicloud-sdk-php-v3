<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApplicationPermissionVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApplicationPermissionVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * canModify  是否有编辑权限
    * canDelete  是否有删除的权限
    * canView  是否有查看权限
    * canExecute  是否有执行权限
    * canCopy  是否有复制权限
    * canManage  是否有管理权限，包含增删改查执行以及权限修改
    * canCreateEnv  是否有新建环境权限
    * canDisable  是否有禁用权限
    * name  角色名称
    * region  局点信息
    * roleId  角色id
    * roleType  角色类型， app-creator： 应用创建者； project： 项目管理员；template-customized-inst：系统角色； template-project-customized、project-customized：自定义角色
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'canModify' => 'bool',
            'canDelete' => 'bool',
            'canView' => 'bool',
            'canExecute' => 'bool',
            'canCopy' => 'bool',
            'canManage' => 'bool',
            'canCreateEnv' => 'bool',
            'canDisable' => 'bool',
            'name' => 'string',
            'region' => 'string',
            'roleId' => 'string',
            'roleType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * canModify  是否有编辑权限
    * canDelete  是否有删除的权限
    * canView  是否有查看权限
    * canExecute  是否有执行权限
    * canCopy  是否有复制权限
    * canManage  是否有管理权限，包含增删改查执行以及权限修改
    * canCreateEnv  是否有新建环境权限
    * canDisable  是否有禁用权限
    * name  角色名称
    * region  局点信息
    * roleId  角色id
    * roleType  角色类型， app-creator： 应用创建者； project： 项目管理员；template-customized-inst：系统角色； template-project-customized、project-customized：自定义角色
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'canModify' => null,
        'canDelete' => null,
        'canView' => null,
        'canExecute' => null,
        'canCopy' => null,
        'canManage' => null,
        'canCreateEnv' => null,
        'canDisable' => null,
        'name' => null,
        'region' => null,
        'roleId' => null,
        'roleType' => null
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
    * canModify  是否有编辑权限
    * canDelete  是否有删除的权限
    * canView  是否有查看权限
    * canExecute  是否有执行权限
    * canCopy  是否有复制权限
    * canManage  是否有管理权限，包含增删改查执行以及权限修改
    * canCreateEnv  是否有新建环境权限
    * canDisable  是否有禁用权限
    * name  角色名称
    * region  局点信息
    * roleId  角色id
    * roleType  角色类型， app-creator： 应用创建者； project： 项目管理员；template-customized-inst：系统角色； template-project-customized、project-customized：自定义角色
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'canModify' => 'can_modify',
            'canDelete' => 'can_delete',
            'canView' => 'can_view',
            'canExecute' => 'can_execute',
            'canCopy' => 'can_copy',
            'canManage' => 'can_manage',
            'canCreateEnv' => 'can_create_env',
            'canDisable' => 'can_disable',
            'name' => 'name',
            'region' => 'region',
            'roleId' => 'role_id',
            'roleType' => 'role_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * canModify  是否有编辑权限
    * canDelete  是否有删除的权限
    * canView  是否有查看权限
    * canExecute  是否有执行权限
    * canCopy  是否有复制权限
    * canManage  是否有管理权限，包含增删改查执行以及权限修改
    * canCreateEnv  是否有新建环境权限
    * canDisable  是否有禁用权限
    * name  角色名称
    * region  局点信息
    * roleId  角色id
    * roleType  角色类型， app-creator： 应用创建者； project： 项目管理员；template-customized-inst：系统角色； template-project-customized、project-customized：自定义角色
    *
    * @var string[]
    */
    protected static $setters = [
            'canModify' => 'setCanModify',
            'canDelete' => 'setCanDelete',
            'canView' => 'setCanView',
            'canExecute' => 'setCanExecute',
            'canCopy' => 'setCanCopy',
            'canManage' => 'setCanManage',
            'canCreateEnv' => 'setCanCreateEnv',
            'canDisable' => 'setCanDisable',
            'name' => 'setName',
            'region' => 'setRegion',
            'roleId' => 'setRoleId',
            'roleType' => 'setRoleType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * canModify  是否有编辑权限
    * canDelete  是否有删除的权限
    * canView  是否有查看权限
    * canExecute  是否有执行权限
    * canCopy  是否有复制权限
    * canManage  是否有管理权限，包含增删改查执行以及权限修改
    * canCreateEnv  是否有新建环境权限
    * canDisable  是否有禁用权限
    * name  角色名称
    * region  局点信息
    * roleId  角色id
    * roleType  角色类型， app-creator： 应用创建者； project： 项目管理员；template-customized-inst：系统角色； template-project-customized、project-customized：自定义角色
    *
    * @var string[]
    */
    protected static $getters = [
            'canModify' => 'getCanModify',
            'canDelete' => 'getCanDelete',
            'canView' => 'getCanView',
            'canExecute' => 'getCanExecute',
            'canCopy' => 'getCanCopy',
            'canManage' => 'getCanManage',
            'canCreateEnv' => 'getCanCreateEnv',
            'canDisable' => 'getCanDisable',
            'name' => 'getName',
            'region' => 'getRegion',
            'roleId' => 'getRoleId',
            'roleType' => 'getRoleType'
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
    const ROLE_TYPE_APP_CREATOR = 'app-creator';
    const ROLE_TYPE_PROJECT = 'project';
    const ROLE_TYPE_TEMPLATE_CUSTOMIZED_INST = 'template-customized-inst';
    const ROLE_TYPE_TEMPLATE_PROJECT_CUSTOMIZED = 'template-project-customized';
    const ROLE_TYPE_PROJECT_CUSTOMIZED = 'project-customized';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRoleTypeAllowableValues()
    {
        return [
            self::ROLE_TYPE_APP_CREATOR,
            self::ROLE_TYPE_PROJECT,
            self::ROLE_TYPE_TEMPLATE_CUSTOMIZED_INST,
            self::ROLE_TYPE_TEMPLATE_PROJECT_CUSTOMIZED,
            self::ROLE_TYPE_PROJECT_CUSTOMIZED,
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
        $this->container['canModify'] = isset($data['canModify']) ? $data['canModify'] : null;
        $this->container['canDelete'] = isset($data['canDelete']) ? $data['canDelete'] : null;
        $this->container['canView'] = isset($data['canView']) ? $data['canView'] : null;
        $this->container['canExecute'] = isset($data['canExecute']) ? $data['canExecute'] : null;
        $this->container['canCopy'] = isset($data['canCopy']) ? $data['canCopy'] : null;
        $this->container['canManage'] = isset($data['canManage']) ? $data['canManage'] : null;
        $this->container['canCreateEnv'] = isset($data['canCreateEnv']) ? $data['canCreateEnv'] : null;
        $this->container['canDisable'] = isset($data['canDisable']) ? $data['canDisable'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['roleId'] = isset($data['roleId']) ? $data['roleId'] : null;
        $this->container['roleType'] = isset($data['roleType']) ? $data['roleType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getRoleTypeAllowableValues();
                if (!is_null($this->container['roleType']) && !in_array($this->container['roleType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'roleType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets canModify
    *  是否有编辑权限
    *
    * @return bool|null
    */
    public function getCanModify()
    {
        return $this->container['canModify'];
    }

    /**
    * Sets canModify
    *
    * @param bool|null $canModify 是否有编辑权限
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
    *  是否有删除的权限
    *
    * @return bool|null
    */
    public function getCanDelete()
    {
        return $this->container['canDelete'];
    }

    /**
    * Sets canDelete
    *
    * @param bool|null $canDelete 是否有删除的权限
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
    *  是否有查看权限
    *
    * @return bool|null
    */
    public function getCanView()
    {
        return $this->container['canView'];
    }

    /**
    * Sets canView
    *
    * @param bool|null $canView 是否有查看权限
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
    *  是否有执行权限
    *
    * @return bool|null
    */
    public function getCanExecute()
    {
        return $this->container['canExecute'];
    }

    /**
    * Sets canExecute
    *
    * @param bool|null $canExecute 是否有执行权限
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
    *  是否有复制权限
    *
    * @return bool|null
    */
    public function getCanCopy()
    {
        return $this->container['canCopy'];
    }

    /**
    * Sets canCopy
    *
    * @param bool|null $canCopy 是否有复制权限
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
    *  是否有管理权限，包含增删改查执行以及权限修改
    *
    * @return bool|null
    */
    public function getCanManage()
    {
        return $this->container['canManage'];
    }

    /**
    * Sets canManage
    *
    * @param bool|null $canManage 是否有管理权限，包含增删改查执行以及权限修改
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
    *  是否有新建环境权限
    *
    * @return bool|null
    */
    public function getCanCreateEnv()
    {
        return $this->container['canCreateEnv'];
    }

    /**
    * Sets canCreateEnv
    *
    * @param bool|null $canCreateEnv 是否有新建环境权限
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
    *  是否有禁用权限
    *
    * @return bool|null
    */
    public function getCanDisable()
    {
        return $this->container['canDisable'];
    }

    /**
    * Sets canDisable
    *
    * @param bool|null $canDisable 是否有禁用权限
    *
    * @return $this
    */
    public function setCanDisable($canDisable)
    {
        $this->container['canDisable'] = $canDisable;
        return $this;
    }

    /**
    * Gets name
    *  角色名称
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
    * @param string|null $name 角色名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets region
    *  局点信息
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 局点信息
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
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
    * Gets roleType
    *  角色类型， app-creator： 应用创建者； project： 项目管理员；template-customized-inst：系统角色； template-project-customized、project-customized：自定义角色
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
    * @param string|null $roleType 角色类型， app-creator： 应用创建者； project： 项目管理员；template-customized-inst：系统角色； template-project-customized、project-customized：自定义角色
    *
    * @return $this
    */
    public function setRoleType($roleType)
    {
        $this->container['roleType'] = $roleType;
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

