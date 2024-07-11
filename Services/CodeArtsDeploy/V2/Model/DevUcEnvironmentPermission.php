<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DevUcEnvironmentPermission implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DevUcEnvironmentPermission';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  权限id
    * roleId  角色id
    * devucRoleIdList  角色id列表
    * roleType  角色类型， environment-creator： 环境创建者； project： 项目管理员；template-customized-inst：系统角色； template-project-customized、project-customized：自定义角色
    * name  角色名称
    * region  局点信息
    * environmentId  环境id
    * canView  是否有查看权限
    * canEdit  是否有编辑权限
    * canDelete  是否有删除权限
    * canDeploy  是否有部署权限
    * canManage  是否有权限管理权限
    * createTime  创建时间
    * updateTime  修改时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'roleId' => 'string',
            'devucRoleIdList' => 'string[]',
            'roleType' => 'string',
            'name' => 'string',
            'region' => 'string',
            'environmentId' => 'string',
            'canView' => 'bool',
            'canEdit' => 'bool',
            'canDelete' => 'bool',
            'canDeploy' => 'bool',
            'canManage' => 'bool',
            'createTime' => '\DateTime',
            'updateTime' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  权限id
    * roleId  角色id
    * devucRoleIdList  角色id列表
    * roleType  角色类型， environment-creator： 环境创建者； project： 项目管理员；template-customized-inst：系统角色； template-project-customized、project-customized：自定义角色
    * name  角色名称
    * region  局点信息
    * environmentId  环境id
    * canView  是否有查看权限
    * canEdit  是否有编辑权限
    * canDelete  是否有删除权限
    * canDeploy  是否有部署权限
    * canManage  是否有权限管理权限
    * createTime  创建时间
    * updateTime  修改时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'roleId' => null,
        'devucRoleIdList' => null,
        'roleType' => null,
        'name' => null,
        'region' => null,
        'environmentId' => null,
        'canView' => null,
        'canEdit' => null,
        'canDelete' => null,
        'canDeploy' => null,
        'canManage' => null,
        'createTime' => 'date-time',
        'updateTime' => 'date-time'
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
    * id  权限id
    * roleId  角色id
    * devucRoleIdList  角色id列表
    * roleType  角色类型， environment-creator： 环境创建者； project： 项目管理员；template-customized-inst：系统角色； template-project-customized、project-customized：自定义角色
    * name  角色名称
    * region  局点信息
    * environmentId  环境id
    * canView  是否有查看权限
    * canEdit  是否有编辑权限
    * canDelete  是否有删除权限
    * canDeploy  是否有部署权限
    * canManage  是否有权限管理权限
    * createTime  创建时间
    * updateTime  修改时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'roleId' => 'role_id',
            'devucRoleIdList' => 'devuc_role_id_list',
            'roleType' => 'role_type',
            'name' => 'name',
            'region' => 'region',
            'environmentId' => 'environment_id',
            'canView' => 'can_view',
            'canEdit' => 'can_edit',
            'canDelete' => 'can_delete',
            'canDeploy' => 'can_deploy',
            'canManage' => 'can_manage',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  权限id
    * roleId  角色id
    * devucRoleIdList  角色id列表
    * roleType  角色类型， environment-creator： 环境创建者； project： 项目管理员；template-customized-inst：系统角色； template-project-customized、project-customized：自定义角色
    * name  角色名称
    * region  局点信息
    * environmentId  环境id
    * canView  是否有查看权限
    * canEdit  是否有编辑权限
    * canDelete  是否有删除权限
    * canDeploy  是否有部署权限
    * canManage  是否有权限管理权限
    * createTime  创建时间
    * updateTime  修改时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'roleId' => 'setRoleId',
            'devucRoleIdList' => 'setDevucRoleIdList',
            'roleType' => 'setRoleType',
            'name' => 'setName',
            'region' => 'setRegion',
            'environmentId' => 'setEnvironmentId',
            'canView' => 'setCanView',
            'canEdit' => 'setCanEdit',
            'canDelete' => 'setCanDelete',
            'canDeploy' => 'setCanDeploy',
            'canManage' => 'setCanManage',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  权限id
    * roleId  角色id
    * devucRoleIdList  角色id列表
    * roleType  角色类型， environment-creator： 环境创建者； project： 项目管理员；template-customized-inst：系统角色； template-project-customized、project-customized：自定义角色
    * name  角色名称
    * region  局点信息
    * environmentId  环境id
    * canView  是否有查看权限
    * canEdit  是否有编辑权限
    * canDelete  是否有删除权限
    * canDeploy  是否有部署权限
    * canManage  是否有权限管理权限
    * createTime  创建时间
    * updateTime  修改时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'roleId' => 'getRoleId',
            'devucRoleIdList' => 'getDevucRoleIdList',
            'roleType' => 'getRoleType',
            'name' => 'getName',
            'region' => 'getRegion',
            'environmentId' => 'getEnvironmentId',
            'canView' => 'getCanView',
            'canEdit' => 'getCanEdit',
            'canDelete' => 'getCanDelete',
            'canDeploy' => 'getCanDeploy',
            'canManage' => 'getCanManage',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
    const ROLE_TYPE_ENVIRONMENT_CREATOR = 'environment-creator';
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
            self::ROLE_TYPE_ENVIRONMENT_CREATOR,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['roleId'] = isset($data['roleId']) ? $data['roleId'] : null;
        $this->container['devucRoleIdList'] = isset($data['devucRoleIdList']) ? $data['devucRoleIdList'] : null;
        $this->container['roleType'] = isset($data['roleType']) ? $data['roleType'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['environmentId'] = isset($data['environmentId']) ? $data['environmentId'] : null;
        $this->container['canView'] = isset($data['canView']) ? $data['canView'] : null;
        $this->container['canEdit'] = isset($data['canEdit']) ? $data['canEdit'] : null;
        $this->container['canDelete'] = isset($data['canDelete']) ? $data['canDelete'] : null;
        $this->container['canDeploy'] = isset($data['canDeploy']) ? $data['canDeploy'] : null;
        $this->container['canManage'] = isset($data['canManage']) ? $data['canManage'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
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
            if (!is_null($this->container['roleId']) && (mb_strlen($this->container['roleId']) < 1)) {
                $invalidProperties[] = "invalid value for 'roleId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['roleId']) && !preg_match("/^[A-Za-z0-9\\-_]{1,40}$/", $this->container['roleId'])) {
                $invalidProperties[] = "invalid value for 'roleId', must be conform to the pattern /^[A-Za-z0-9\\-_]{1,40}$/.";
            }
            $allowedValues = $this->getRoleTypeAllowableValues();
                if (!is_null($this->container['roleType']) && !in_array($this->container['roleType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'roleType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^[a-zA-Z0-9\\u4E00-\\u9FA5\\-_.]+(\\s+[a-zA-Z0-9\\u4E00-\\u9FA5\\-_.]+)*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z0-9\\u4E00-\\u9FA5\\-_.]+(\\s+[a-zA-Z0-9\\u4E00-\\u9FA5\\-_.]+)*$/.";
            }
            if (!is_null($this->container['environmentId']) && (mb_strlen($this->container['environmentId']) > 32)) {
                $invalidProperties[] = "invalid value for 'environmentId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['environmentId']) && (mb_strlen($this->container['environmentId']) < 0)) {
                $invalidProperties[] = "invalid value for 'environmentId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['environmentId']) && !preg_match("/^[0-9a-z]{32}$/", $this->container['environmentId'])) {
                $invalidProperties[] = "invalid value for 'environmentId', must be conform to the pattern /^[0-9a-z]{32}$/.";
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
    * Gets id
    *  权限id
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
    * @param int|null $id 权限id
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
    * Gets devucRoleIdList
    *  角色id列表
    *
    * @return string[]|null
    */
    public function getDevucRoleIdList()
    {
        return $this->container['devucRoleIdList'];
    }

    /**
    * Sets devucRoleIdList
    *
    * @param string[]|null $devucRoleIdList 角色id列表
    *
    * @return $this
    */
    public function setDevucRoleIdList($devucRoleIdList)
    {
        $this->container['devucRoleIdList'] = $devucRoleIdList;
        return $this;
    }

    /**
    * Gets roleType
    *  角色类型， environment-creator： 环境创建者； project： 项目管理员；template-customized-inst：系统角色； template-project-customized、project-customized：自定义角色
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
    * @param string|null $roleType 角色类型， environment-creator： 环境创建者； project： 项目管理员；template-customized-inst：系统角色； template-project-customized、project-customized：自定义角色
    *
    * @return $this
    */
    public function setRoleType($roleType)
    {
        $this->container['roleType'] = $roleType;
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
    * Gets environmentId
    *  环境id
    *
    * @return string|null
    */
    public function getEnvironmentId()
    {
        return $this->container['environmentId'];
    }

    /**
    * Sets environmentId
    *
    * @param string|null $environmentId 环境id
    *
    * @return $this
    */
    public function setEnvironmentId($environmentId)
    {
        $this->container['environmentId'] = $environmentId;
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
    * Gets canEdit
    *  是否有编辑权限
    *
    * @return bool|null
    */
    public function getCanEdit()
    {
        return $this->container['canEdit'];
    }

    /**
    * Sets canEdit
    *
    * @param bool|null $canEdit 是否有编辑权限
    *
    * @return $this
    */
    public function setCanEdit($canEdit)
    {
        $this->container['canEdit'] = $canEdit;
        return $this;
    }

    /**
    * Gets canDelete
    *  是否有删除权限
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
    * @param bool|null $canDelete 是否有删除权限
    *
    * @return $this
    */
    public function setCanDelete($canDelete)
    {
        $this->container['canDelete'] = $canDelete;
        return $this;
    }

    /**
    * Gets canDeploy
    *  是否有部署权限
    *
    * @return bool|null
    */
    public function getCanDeploy()
    {
        return $this->container['canDeploy'];
    }

    /**
    * Sets canDeploy
    *
    * @param bool|null $canDeploy 是否有部署权限
    *
    * @return $this
    */
    public function setCanDeploy($canDeploy)
    {
        $this->container['canDeploy'] = $canDeploy;
        return $this;
    }

    /**
    * Gets canManage
    *  是否有权限管理权限
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
    * @param bool|null $canManage 是否有权限管理权限
    *
    * @return $this
    */
    public function setCanManage($canManage)
    {
        $this->container['canManage'] = $canManage;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  修改时间
    *
    * @return \DateTime|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param \DateTime|null $updateTime 修改时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

