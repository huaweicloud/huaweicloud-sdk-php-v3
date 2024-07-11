<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DevUcClusterPermission implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DevUcClusterPermission';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * region  局点信息
    * roleId  角色id
    * devucRoleIdList  角色id列表
    * name  角色名称
    * groupId  主机集群id
    * canView  是否有查看权限
    * canEdit  是否有编辑权限
    * canDelete  是否有删除权限
    * canAddHost  是否有添加主机权限
    * canManage  是否有权限管理权限
    * canCopy  是否有拷贝权限
    * createTime  创建时间
    * updateTime  修改时间
    * roleType  角色类型，project-customized：自定义角色；template-project-customized：系统自定义角色； template-customized-inst：系统角色；cluster-creator：集群创建者；project_admin：项目创建者
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'region' => 'string',
            'roleId' => 'string',
            'devucRoleIdList' => 'string[]',
            'name' => 'string',
            'groupId' => 'string',
            'canView' => 'bool',
            'canEdit' => 'bool',
            'canDelete' => 'bool',
            'canAddHost' => 'bool',
            'canManage' => 'bool',
            'canCopy' => 'bool',
            'createTime' => '\DateTime',
            'updateTime' => '\DateTime',
            'roleType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * region  局点信息
    * roleId  角色id
    * devucRoleIdList  角色id列表
    * name  角色名称
    * groupId  主机集群id
    * canView  是否有查看权限
    * canEdit  是否有编辑权限
    * canDelete  是否有删除权限
    * canAddHost  是否有添加主机权限
    * canManage  是否有权限管理权限
    * canCopy  是否有拷贝权限
    * createTime  创建时间
    * updateTime  修改时间
    * roleType  角色类型，project-customized：自定义角色；template-project-customized：系统自定义角色； template-customized-inst：系统角色；cluster-creator：集群创建者；project_admin：项目创建者
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'region' => null,
        'roleId' => null,
        'devucRoleIdList' => null,
        'name' => null,
        'groupId' => null,
        'canView' => null,
        'canEdit' => null,
        'canDelete' => null,
        'canAddHost' => null,
        'canManage' => null,
        'canCopy' => null,
        'createTime' => 'date-time',
        'updateTime' => 'date-time',
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
    * region  局点信息
    * roleId  角色id
    * devucRoleIdList  角色id列表
    * name  角色名称
    * groupId  主机集群id
    * canView  是否有查看权限
    * canEdit  是否有编辑权限
    * canDelete  是否有删除权限
    * canAddHost  是否有添加主机权限
    * canManage  是否有权限管理权限
    * canCopy  是否有拷贝权限
    * createTime  创建时间
    * updateTime  修改时间
    * roleType  角色类型，project-customized：自定义角色；template-project-customized：系统自定义角色； template-customized-inst：系统角色；cluster-creator：集群创建者；project_admin：项目创建者
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'region' => 'region',
            'roleId' => 'role_id',
            'devucRoleIdList' => 'devuc_role_id_list',
            'name' => 'name',
            'groupId' => 'group_id',
            'canView' => 'can_view',
            'canEdit' => 'can_edit',
            'canDelete' => 'can_delete',
            'canAddHost' => 'can_add_host',
            'canManage' => 'can_manage',
            'canCopy' => 'can_copy',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'roleType' => 'role_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * region  局点信息
    * roleId  角色id
    * devucRoleIdList  角色id列表
    * name  角色名称
    * groupId  主机集群id
    * canView  是否有查看权限
    * canEdit  是否有编辑权限
    * canDelete  是否有删除权限
    * canAddHost  是否有添加主机权限
    * canManage  是否有权限管理权限
    * canCopy  是否有拷贝权限
    * createTime  创建时间
    * updateTime  修改时间
    * roleType  角色类型，project-customized：自定义角色；template-project-customized：系统自定义角色； template-customized-inst：系统角色；cluster-creator：集群创建者；project_admin：项目创建者
    *
    * @var string[]
    */
    protected static $setters = [
            'region' => 'setRegion',
            'roleId' => 'setRoleId',
            'devucRoleIdList' => 'setDevucRoleIdList',
            'name' => 'setName',
            'groupId' => 'setGroupId',
            'canView' => 'setCanView',
            'canEdit' => 'setCanEdit',
            'canDelete' => 'setCanDelete',
            'canAddHost' => 'setCanAddHost',
            'canManage' => 'setCanManage',
            'canCopy' => 'setCanCopy',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'roleType' => 'setRoleType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * region  局点信息
    * roleId  角色id
    * devucRoleIdList  角色id列表
    * name  角色名称
    * groupId  主机集群id
    * canView  是否有查看权限
    * canEdit  是否有编辑权限
    * canDelete  是否有删除权限
    * canAddHost  是否有添加主机权限
    * canManage  是否有权限管理权限
    * canCopy  是否有拷贝权限
    * createTime  创建时间
    * updateTime  修改时间
    * roleType  角色类型，project-customized：自定义角色；template-project-customized：系统自定义角色； template-customized-inst：系统角色；cluster-creator：集群创建者；project_admin：项目创建者
    *
    * @var string[]
    */
    protected static $getters = [
            'region' => 'getRegion',
            'roleId' => 'getRoleId',
            'devucRoleIdList' => 'getDevucRoleIdList',
            'name' => 'getName',
            'groupId' => 'getGroupId',
            'canView' => 'getCanView',
            'canEdit' => 'getCanEdit',
            'canDelete' => 'getCanDelete',
            'canAddHost' => 'getCanAddHost',
            'canManage' => 'getCanManage',
            'canCopy' => 'getCanCopy',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
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
    const ROLE_TYPE_PROJECT_CUSTOMIZED = 'project-customized';
    const ROLE_TYPE_TEMPLATE_PROJECT_CUSTOMIZED = 'template-project-customized';
    const ROLE_TYPE_TEMPLATE_CUSTOMIZED_INST = 'template-customized-inst';
    const ROLE_TYPE_CLUSTER_CREATOR = 'cluster-creator';
    const ROLE_TYPE_PROJECT_ADMIN = 'project_admin';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRoleTypeAllowableValues()
    {
        return [
            self::ROLE_TYPE_PROJECT_CUSTOMIZED,
            self::ROLE_TYPE_TEMPLATE_PROJECT_CUSTOMIZED,
            self::ROLE_TYPE_TEMPLATE_CUSTOMIZED_INST,
            self::ROLE_TYPE_CLUSTER_CREATOR,
            self::ROLE_TYPE_PROJECT_ADMIN,
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
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['roleId'] = isset($data['roleId']) ? $data['roleId'] : null;
        $this->container['devucRoleIdList'] = isset($data['devucRoleIdList']) ? $data['devucRoleIdList'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['canView'] = isset($data['canView']) ? $data['canView'] : null;
        $this->container['canEdit'] = isset($data['canEdit']) ? $data['canEdit'] : null;
        $this->container['canDelete'] = isset($data['canDelete']) ? $data['canDelete'] : null;
        $this->container['canAddHost'] = isset($data['canAddHost']) ? $data['canAddHost'] : null;
        $this->container['canManage'] = isset($data['canManage']) ? $data['canManage'] : null;
        $this->container['canCopy'] = isset($data['canCopy']) ? $data['canCopy'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
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
            if (!is_null($this->container['roleId']) && (mb_strlen($this->container['roleId']) > 40)) {
                $invalidProperties[] = "invalid value for 'roleId', the character length must be smaller than or equal to 40.";
            }
            if (!is_null($this->container['roleId']) && (mb_strlen($this->container['roleId']) < 1)) {
                $invalidProperties[] = "invalid value for 'roleId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['roleId']) && !preg_match("/^[A-Za-z0-9\\-_]{1,40}$/", $this->container['roleId'])) {
                $invalidProperties[] = "invalid value for 'roleId', must be conform to the pattern /^[A-Za-z0-9\\-_]{1,40}$/.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 2)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^[a-zA-Z0-9\\u4E00-\\u9FA5-_]+$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z0-9\\u4E00-\\u9FA5-_]+$/.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 32)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) < 0)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['groupId']) && !preg_match("/^[0-9a-z]{32}$/", $this->container['groupId'])) {
                $invalidProperties[] = "invalid value for 'groupId', must be conform to the pattern /^[0-9a-z]{32}$/.";
            }
            $allowedValues = $this->getRoleTypeAllowableValues();
                if (!is_null($this->container['roleType']) && !in_array($this->container['roleType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'roleType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['roleType']) && (mb_strlen($this->container['roleType']) > 128)) {
                $invalidProperties[] = "invalid value for 'roleType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['roleType']) && (mb_strlen($this->container['roleType']) < 0)) {
                $invalidProperties[] = "invalid value for 'roleType', the character length must be bigger than or equal to 0.";
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
    * Gets groupId
    *  主机集群id
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId 主机集群id
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
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
    * Gets canAddHost
    *  是否有添加主机权限
    *
    * @return bool|null
    */
    public function getCanAddHost()
    {
        return $this->container['canAddHost'];
    }

    /**
    * Sets canAddHost
    *
    * @param bool|null $canAddHost 是否有添加主机权限
    *
    * @return $this
    */
    public function setCanAddHost($canAddHost)
    {
        $this->container['canAddHost'] = $canAddHost;
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
    * Gets canCopy
    *  是否有拷贝权限
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
    * @param bool|null $canCopy 是否有拷贝权限
    *
    * @return $this
    */
    public function setCanCopy($canCopy)
    {
        $this->container['canCopy'] = $canCopy;
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
    * Gets roleType
    *  角色类型，project-customized：自定义角色；template-project-customized：系统自定义角色； template-customized-inst：系统角色；cluster-creator：集群创建者；project_admin：项目创建者
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
    * @param string|null $roleType 角色类型，project-customized：自定义角色；template-project-customized：系统自定义角色； template-customized-inst：系统角色；cluster-creator：集群创建者；project_admin：项目创建者
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

