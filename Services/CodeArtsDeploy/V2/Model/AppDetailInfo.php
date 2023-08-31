<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AppDetailInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AppDetailInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  应用id
    * name  应用名称
    * region  应用所属区域
    * description  描述
    * createType  创建方式
    * projectId  项目ID
    * projectName  项目名称
    * slaveClusterId  slave集群id，默认为null时使用默认slave集群，用户自定义slave时为slave集群id
    * isCare  当前用户是否已收藏
    * canModify  是否有编辑权限
    * canDelete  是否有删除的权限
    * canView  是否有查看权限
    * canExecute  是否有部署权限
    * canCopy  是否有复制权限
    * canManage  是否有编辑应用权限矩阵的权限
    * canCreateEnv  是否有创建环境的权限
    * ownerTenantId  应用所属人租户ID
    * createUserId  应用创建者用户名
    * createTenantId  应用创建人租户ID
    * createTime  创建时间
    * updateTime  修改时间
    * permissionLevel  权限等级
    * arrangeInfos  部署任务信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'region' => 'string',
            'description' => 'string',
            'createType' => 'string',
            'projectId' => 'string',
            'projectName' => 'string',
            'slaveClusterId' => 'string',
            'isCare' => 'bool',
            'canModify' => 'bool',
            'canDelete' => 'bool',
            'canView' => 'bool',
            'canExecute' => 'bool',
            'canCopy' => 'bool',
            'canManage' => 'bool',
            'canCreateEnv' => 'bool',
            'ownerTenantId' => 'string',
            'createUserId' => 'string',
            'createTenantId' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string',
            'permissionLevel' => 'string',
            'arrangeInfos' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  应用id
    * name  应用名称
    * region  应用所属区域
    * description  描述
    * createType  创建方式
    * projectId  项目ID
    * projectName  项目名称
    * slaveClusterId  slave集群id，默认为null时使用默认slave集群，用户自定义slave时为slave集群id
    * isCare  当前用户是否已收藏
    * canModify  是否有编辑权限
    * canDelete  是否有删除的权限
    * canView  是否有查看权限
    * canExecute  是否有部署权限
    * canCopy  是否有复制权限
    * canManage  是否有编辑应用权限矩阵的权限
    * canCreateEnv  是否有创建环境的权限
    * ownerTenantId  应用所属人租户ID
    * createUserId  应用创建者用户名
    * createTenantId  应用创建人租户ID
    * createTime  创建时间
    * updateTime  修改时间
    * permissionLevel  权限等级
    * arrangeInfos  部署任务信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'region' => null,
        'description' => null,
        'createType' => null,
        'projectId' => null,
        'projectName' => null,
        'slaveClusterId' => null,
        'isCare' => null,
        'canModify' => null,
        'canDelete' => null,
        'canView' => null,
        'canExecute' => null,
        'canCopy' => null,
        'canManage' => null,
        'canCreateEnv' => null,
        'ownerTenantId' => null,
        'createUserId' => null,
        'createTenantId' => null,
        'createTime' => null,
        'updateTime' => null,
        'permissionLevel' => null,
        'arrangeInfos' => null
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
    * id  应用id
    * name  应用名称
    * region  应用所属区域
    * description  描述
    * createType  创建方式
    * projectId  项目ID
    * projectName  项目名称
    * slaveClusterId  slave集群id，默认为null时使用默认slave集群，用户自定义slave时为slave集群id
    * isCare  当前用户是否已收藏
    * canModify  是否有编辑权限
    * canDelete  是否有删除的权限
    * canView  是否有查看权限
    * canExecute  是否有部署权限
    * canCopy  是否有复制权限
    * canManage  是否有编辑应用权限矩阵的权限
    * canCreateEnv  是否有创建环境的权限
    * ownerTenantId  应用所属人租户ID
    * createUserId  应用创建者用户名
    * createTenantId  应用创建人租户ID
    * createTime  创建时间
    * updateTime  修改时间
    * permissionLevel  权限等级
    * arrangeInfos  部署任务信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'region' => 'region',
            'description' => 'description',
            'createType' => 'create_type',
            'projectId' => 'project_id',
            'projectName' => 'project_name',
            'slaveClusterId' => 'slave_cluster_id',
            'isCare' => 'is_care',
            'canModify' => 'can_modify',
            'canDelete' => 'can_delete',
            'canView' => 'can_view',
            'canExecute' => 'can_execute',
            'canCopy' => 'can_copy',
            'canManage' => 'can_manage',
            'canCreateEnv' => 'can_create_env',
            'ownerTenantId' => 'owner_tenant_id',
            'createUserId' => 'create_user_id',
            'createTenantId' => 'create_tenant_id',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'permissionLevel' => 'permission_level',
            'arrangeInfos' => 'arrange_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  应用id
    * name  应用名称
    * region  应用所属区域
    * description  描述
    * createType  创建方式
    * projectId  项目ID
    * projectName  项目名称
    * slaveClusterId  slave集群id，默认为null时使用默认slave集群，用户自定义slave时为slave集群id
    * isCare  当前用户是否已收藏
    * canModify  是否有编辑权限
    * canDelete  是否有删除的权限
    * canView  是否有查看权限
    * canExecute  是否有部署权限
    * canCopy  是否有复制权限
    * canManage  是否有编辑应用权限矩阵的权限
    * canCreateEnv  是否有创建环境的权限
    * ownerTenantId  应用所属人租户ID
    * createUserId  应用创建者用户名
    * createTenantId  应用创建人租户ID
    * createTime  创建时间
    * updateTime  修改时间
    * permissionLevel  权限等级
    * arrangeInfos  部署任务信息
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'region' => 'setRegion',
            'description' => 'setDescription',
            'createType' => 'setCreateType',
            'projectId' => 'setProjectId',
            'projectName' => 'setProjectName',
            'slaveClusterId' => 'setSlaveClusterId',
            'isCare' => 'setIsCare',
            'canModify' => 'setCanModify',
            'canDelete' => 'setCanDelete',
            'canView' => 'setCanView',
            'canExecute' => 'setCanExecute',
            'canCopy' => 'setCanCopy',
            'canManage' => 'setCanManage',
            'canCreateEnv' => 'setCanCreateEnv',
            'ownerTenantId' => 'setOwnerTenantId',
            'createUserId' => 'setCreateUserId',
            'createTenantId' => 'setCreateTenantId',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'permissionLevel' => 'setPermissionLevel',
            'arrangeInfos' => 'setArrangeInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  应用id
    * name  应用名称
    * region  应用所属区域
    * description  描述
    * createType  创建方式
    * projectId  项目ID
    * projectName  项目名称
    * slaveClusterId  slave集群id，默认为null时使用默认slave集群，用户自定义slave时为slave集群id
    * isCare  当前用户是否已收藏
    * canModify  是否有编辑权限
    * canDelete  是否有删除的权限
    * canView  是否有查看权限
    * canExecute  是否有部署权限
    * canCopy  是否有复制权限
    * canManage  是否有编辑应用权限矩阵的权限
    * canCreateEnv  是否有创建环境的权限
    * ownerTenantId  应用所属人租户ID
    * createUserId  应用创建者用户名
    * createTenantId  应用创建人租户ID
    * createTime  创建时间
    * updateTime  修改时间
    * permissionLevel  权限等级
    * arrangeInfos  部署任务信息
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'region' => 'getRegion',
            'description' => 'getDescription',
            'createType' => 'getCreateType',
            'projectId' => 'getProjectId',
            'projectName' => 'getProjectName',
            'slaveClusterId' => 'getSlaveClusterId',
            'isCare' => 'getIsCare',
            'canModify' => 'getCanModify',
            'canDelete' => 'getCanDelete',
            'canView' => 'getCanView',
            'canExecute' => 'getCanExecute',
            'canCopy' => 'getCanCopy',
            'canManage' => 'getCanManage',
            'canCreateEnv' => 'getCanCreateEnv',
            'ownerTenantId' => 'getOwnerTenantId',
            'createUserId' => 'getCreateUserId',
            'createTenantId' => 'getCreateTenantId',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'permissionLevel' => 'getPermissionLevel',
            'arrangeInfos' => 'getArrangeInfos'
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
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createType'] = isset($data['createType']) ? $data['createType'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['slaveClusterId'] = isset($data['slaveClusterId']) ? $data['slaveClusterId'] : null;
        $this->container['isCare'] = isset($data['isCare']) ? $data['isCare'] : null;
        $this->container['canModify'] = isset($data['canModify']) ? $data['canModify'] : null;
        $this->container['canDelete'] = isset($data['canDelete']) ? $data['canDelete'] : null;
        $this->container['canView'] = isset($data['canView']) ? $data['canView'] : null;
        $this->container['canExecute'] = isset($data['canExecute']) ? $data['canExecute'] : null;
        $this->container['canCopy'] = isset($data['canCopy']) ? $data['canCopy'] : null;
        $this->container['canManage'] = isset($data['canManage']) ? $data['canManage'] : null;
        $this->container['canCreateEnv'] = isset($data['canCreateEnv']) ? $data['canCreateEnv'] : null;
        $this->container['ownerTenantId'] = isset($data['ownerTenantId']) ? $data['ownerTenantId'] : null;
        $this->container['createUserId'] = isset($data['createUserId']) ? $data['createUserId'] : null;
        $this->container['createTenantId'] = isset($data['createTenantId']) ? $data['createTenantId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['permissionLevel'] = isset($data['permissionLevel']) ? $data['permissionLevel'] : null;
        $this->container['arrangeInfos'] = isset($data['arrangeInfos']) ? $data['arrangeInfos'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && !preg_match("/^[A-Za-z0-9]{32}$/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 3)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^[a-zA-Z0-9\\u4E00-\\u9FA5-_]+$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z0-9\\u4E00-\\u9FA5-_]+$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && !preg_match("/^[A-Za-z0-9]{32}$/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
            }
            if (!is_null($this->container['projectName']) && (mb_strlen($this->container['projectName']) > 128)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['projectName']) && (mb_strlen($this->container['projectName']) < 3)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['slaveClusterId']) && !preg_match("/^[A-Za-z0-9]{32}$/", $this->container['slaveClusterId'])) {
                $invalidProperties[] = "invalid value for 'slaveClusterId', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
            }
            if (!is_null($this->container['ownerTenantId']) && !preg_match("/^[A-Za-z0-9]{32}$/", $this->container['ownerTenantId'])) {
                $invalidProperties[] = "invalid value for 'ownerTenantId', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
            }
            if (!is_null($this->container['createUserId']) && !preg_match("/^[A-Za-z0-9]{32}$/", $this->container['createUserId'])) {
                $invalidProperties[] = "invalid value for 'createUserId', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
            }
            if (!is_null($this->container['createTenantId']) && !preg_match("/^[A-Za-z0-9]{32}$/", $this->container['createTenantId'])) {
                $invalidProperties[] = "invalid value for 'createTenantId', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
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
    *  应用id
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
    * @param string|null $id 应用id
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
    *  应用名称
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
    * @param string|null $name 应用名称
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
    *  应用所属区域
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
    * @param string|null $region 应用所属区域
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets description
    *  描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets createType
    *  创建方式
    *
    * @return string|null
    */
    public function getCreateType()
    {
        return $this->container['createType'];
    }

    /**
    * Sets createType
    *
    * @param string|null $createType 创建方式
    *
    * @return $this
    */
    public function setCreateType($createType)
    {
        $this->container['createType'] = $createType;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
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
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets projectName
    *  项目名称
    *
    * @return string|null
    */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
    * Sets projectName
    *
    * @param string|null $projectName 项目名称
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
        return $this;
    }

    /**
    * Gets slaveClusterId
    *  slave集群id，默认为null时使用默认slave集群，用户自定义slave时为slave集群id
    *
    * @return string|null
    */
    public function getSlaveClusterId()
    {
        return $this->container['slaveClusterId'];
    }

    /**
    * Sets slaveClusterId
    *
    * @param string|null $slaveClusterId slave集群id，默认为null时使用默认slave集群，用户自定义slave时为slave集群id
    *
    * @return $this
    */
    public function setSlaveClusterId($slaveClusterId)
    {
        $this->container['slaveClusterId'] = $slaveClusterId;
        return $this;
    }

    /**
    * Gets isCare
    *  当前用户是否已收藏
    *
    * @return bool|null
    */
    public function getIsCare()
    {
        return $this->container['isCare'];
    }

    /**
    * Sets isCare
    *
    * @param bool|null $isCare 当前用户是否已收藏
    *
    * @return $this
    */
    public function setIsCare($isCare)
    {
        $this->container['isCare'] = $isCare;
        return $this;
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
    *  是否有部署权限
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
    * @param bool|null $canExecute 是否有部署权限
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
    *  是否有编辑应用权限矩阵的权限
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
    * @param bool|null $canManage 是否有编辑应用权限矩阵的权限
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
    *  是否有创建环境的权限
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
    * @param bool|null $canCreateEnv 是否有创建环境的权限
    *
    * @return $this
    */
    public function setCanCreateEnv($canCreateEnv)
    {
        $this->container['canCreateEnv'] = $canCreateEnv;
        return $this;
    }

    /**
    * Gets ownerTenantId
    *  应用所属人租户ID
    *
    * @return string|null
    */
    public function getOwnerTenantId()
    {
        return $this->container['ownerTenantId'];
    }

    /**
    * Sets ownerTenantId
    *
    * @param string|null $ownerTenantId 应用所属人租户ID
    *
    * @return $this
    */
    public function setOwnerTenantId($ownerTenantId)
    {
        $this->container['ownerTenantId'] = $ownerTenantId;
        return $this;
    }

    /**
    * Gets createUserId
    *  应用创建者用户名
    *
    * @return string|null
    */
    public function getCreateUserId()
    {
        return $this->container['createUserId'];
    }

    /**
    * Sets createUserId
    *
    * @param string|null $createUserId 应用创建者用户名
    *
    * @return $this
    */
    public function setCreateUserId($createUserId)
    {
        $this->container['createUserId'] = $createUserId;
        return $this;
    }

    /**
    * Gets createTenantId
    *  应用创建人租户ID
    *
    * @return string|null
    */
    public function getCreateTenantId()
    {
        return $this->container['createTenantId'];
    }

    /**
    * Sets createTenantId
    *
    * @param string|null $createTenantId 应用创建人租户ID
    *
    * @return $this
    */
    public function setCreateTenantId($createTenantId)
    {
        $this->container['createTenantId'] = $createTenantId;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
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
    * @param string|null $createTime 创建时间
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
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 修改时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets permissionLevel
    *  权限等级
    *
    * @return string|null
    */
    public function getPermissionLevel()
    {
        return $this->container['permissionLevel'];
    }

    /**
    * Sets permissionLevel
    *
    * @param string|null $permissionLevel 权限等级
    *
    * @return $this
    */
    public function setPermissionLevel($permissionLevel)
    {
        $this->container['permissionLevel'] = $permissionLevel;
        return $this;
    }

    /**
    * Gets arrangeInfos
    *  部署任务信息
    *
    * @return object|null
    */
    public function getArrangeInfos()
    {
        return $this->container['arrangeInfos'];
    }

    /**
    * Sets arrangeInfos
    *
    * @param object|null $arrangeInfos 部署任务信息
    *
    * @return $this
    */
    public function setArrangeInfos($arrangeInfos)
    {
        $this->container['arrangeInfos'] = $arrangeInfos;
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

