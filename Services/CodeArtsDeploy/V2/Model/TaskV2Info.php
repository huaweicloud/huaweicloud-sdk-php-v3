<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskV2Info implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskV2Info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  部署任务id
    * name  部署任务名称
    * state  部署任务状态
    * description  描述
    * owner  部署任务所属人
    * steps  部署步骤
    * projectId  项目ID
    * projectName  项目名称
    * deploySystem  部署类型模式，包括deployTemplate、ansible、shell
    * createTime  创建时间
    * updateTime  修改时间
    * roleId  角色ID
    * isDefautPermission  是否为默认角色
    * templateId  模板id
    * nickName  应用创建者昵称
    * ownerId  应用创建者用户ID
    * tenantId  应用创建者租户ID
    * tenantName  应用创建者租户名
    * slaveClusterId  slave集群id，默认为null时使用默认slave集群，用户自定义slave时为slave集群id
    * isCare  当前用户是否已收藏
    * canModify  是否有编辑权限
    * canDelete  是否有删除的权限
    * canView  是否有查看权限
    * canExecute  是否有部署权限
    * canCopy  是否有复制权限
    * canManage  是否有编辑应用权限矩阵的权限
    * canCreateEnv  是否有创建环境的权限
    * canDisable  是否有禁用应用的权限
    * appComponentList  应用组件列表
    * releaseId  部署记录序列号
    * appId  部署任务所属应用id
    * isDisable  当前应用是否被禁用
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'state' => 'string',
            'description' => 'string',
            'owner' => 'string',
            'steps' => 'map[string,\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\Step]',
            'projectId' => 'string',
            'projectName' => 'string',
            'deploySystem' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string',
            'roleId' => 'int',
            'isDefautPermission' => 'bool',
            'templateId' => 'string',
            'nickName' => 'string',
            'ownerId' => 'string',
            'tenantId' => 'string',
            'tenantName' => 'string',
            'slaveClusterId' => 'string',
            'isCare' => 'bool',
            'canModify' => 'bool',
            'canDelete' => 'bool',
            'canView' => 'bool',
            'canExecute' => 'bool',
            'canCopy' => 'bool',
            'canManage' => 'bool',
            'canCreateEnv' => 'bool',
            'canDisable' => 'bool',
            'appComponentList' => '\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\AppComponentDao[]',
            'releaseId' => 'int',
            'appId' => 'string',
            'isDisable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  部署任务id
    * name  部署任务名称
    * state  部署任务状态
    * description  描述
    * owner  部署任务所属人
    * steps  部署步骤
    * projectId  项目ID
    * projectName  项目名称
    * deploySystem  部署类型模式，包括deployTemplate、ansible、shell
    * createTime  创建时间
    * updateTime  修改时间
    * roleId  角色ID
    * isDefautPermission  是否为默认角色
    * templateId  模板id
    * nickName  应用创建者昵称
    * ownerId  应用创建者用户ID
    * tenantId  应用创建者租户ID
    * tenantName  应用创建者租户名
    * slaveClusterId  slave集群id，默认为null时使用默认slave集群，用户自定义slave时为slave集群id
    * isCare  当前用户是否已收藏
    * canModify  是否有编辑权限
    * canDelete  是否有删除的权限
    * canView  是否有查看权限
    * canExecute  是否有部署权限
    * canCopy  是否有复制权限
    * canManage  是否有编辑应用权限矩阵的权限
    * canCreateEnv  是否有创建环境的权限
    * canDisable  是否有禁用应用的权限
    * appComponentList  应用组件列表
    * releaseId  部署记录序列号
    * appId  部署任务所属应用id
    * isDisable  当前应用是否被禁用
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'state' => null,
        'description' => null,
        'owner' => null,
        'steps' => null,
        'projectId' => null,
        'projectName' => null,
        'deploySystem' => null,
        'createTime' => null,
        'updateTime' => null,
        'roleId' => 'int32',
        'isDefautPermission' => null,
        'templateId' => null,
        'nickName' => null,
        'ownerId' => null,
        'tenantId' => null,
        'tenantName' => null,
        'slaveClusterId' => null,
        'isCare' => null,
        'canModify' => null,
        'canDelete' => null,
        'canView' => null,
        'canExecute' => null,
        'canCopy' => null,
        'canManage' => null,
        'canCreateEnv' => null,
        'canDisable' => null,
        'appComponentList' => null,
        'releaseId' => 'int32',
        'appId' => null,
        'isDisable' => null
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
    * id  部署任务id
    * name  部署任务名称
    * state  部署任务状态
    * description  描述
    * owner  部署任务所属人
    * steps  部署步骤
    * projectId  项目ID
    * projectName  项目名称
    * deploySystem  部署类型模式，包括deployTemplate、ansible、shell
    * createTime  创建时间
    * updateTime  修改时间
    * roleId  角色ID
    * isDefautPermission  是否为默认角色
    * templateId  模板id
    * nickName  应用创建者昵称
    * ownerId  应用创建者用户ID
    * tenantId  应用创建者租户ID
    * tenantName  应用创建者租户名
    * slaveClusterId  slave集群id，默认为null时使用默认slave集群，用户自定义slave时为slave集群id
    * isCare  当前用户是否已收藏
    * canModify  是否有编辑权限
    * canDelete  是否有删除的权限
    * canView  是否有查看权限
    * canExecute  是否有部署权限
    * canCopy  是否有复制权限
    * canManage  是否有编辑应用权限矩阵的权限
    * canCreateEnv  是否有创建环境的权限
    * canDisable  是否有禁用应用的权限
    * appComponentList  应用组件列表
    * releaseId  部署记录序列号
    * appId  部署任务所属应用id
    * isDisable  当前应用是否被禁用
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'state' => 'state',
            'description' => 'description',
            'owner' => 'owner',
            'steps' => 'steps',
            'projectId' => 'project_id',
            'projectName' => 'project_name',
            'deploySystem' => 'deploy_system',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'roleId' => 'role_id',
            'isDefautPermission' => 'is_defaut_permission',
            'templateId' => 'template_id',
            'nickName' => 'nick_name',
            'ownerId' => 'owner_id',
            'tenantId' => 'tenant_id',
            'tenantName' => 'tenant_name',
            'slaveClusterId' => 'slave_cluster_id',
            'isCare' => 'is_care',
            'canModify' => 'can_modify',
            'canDelete' => 'can_delete',
            'canView' => 'can_view',
            'canExecute' => 'can_execute',
            'canCopy' => 'can_copy',
            'canManage' => 'can_manage',
            'canCreateEnv' => 'can_create_env',
            'canDisable' => 'can_disable',
            'appComponentList' => 'app_component_list',
            'releaseId' => 'release_id',
            'appId' => 'app_id',
            'isDisable' => 'is_disable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  部署任务id
    * name  部署任务名称
    * state  部署任务状态
    * description  描述
    * owner  部署任务所属人
    * steps  部署步骤
    * projectId  项目ID
    * projectName  项目名称
    * deploySystem  部署类型模式，包括deployTemplate、ansible、shell
    * createTime  创建时间
    * updateTime  修改时间
    * roleId  角色ID
    * isDefautPermission  是否为默认角色
    * templateId  模板id
    * nickName  应用创建者昵称
    * ownerId  应用创建者用户ID
    * tenantId  应用创建者租户ID
    * tenantName  应用创建者租户名
    * slaveClusterId  slave集群id，默认为null时使用默认slave集群，用户自定义slave时为slave集群id
    * isCare  当前用户是否已收藏
    * canModify  是否有编辑权限
    * canDelete  是否有删除的权限
    * canView  是否有查看权限
    * canExecute  是否有部署权限
    * canCopy  是否有复制权限
    * canManage  是否有编辑应用权限矩阵的权限
    * canCreateEnv  是否有创建环境的权限
    * canDisable  是否有禁用应用的权限
    * appComponentList  应用组件列表
    * releaseId  部署记录序列号
    * appId  部署任务所属应用id
    * isDisable  当前应用是否被禁用
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'state' => 'setState',
            'description' => 'setDescription',
            'owner' => 'setOwner',
            'steps' => 'setSteps',
            'projectId' => 'setProjectId',
            'projectName' => 'setProjectName',
            'deploySystem' => 'setDeploySystem',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'roleId' => 'setRoleId',
            'isDefautPermission' => 'setIsDefautPermission',
            'templateId' => 'setTemplateId',
            'nickName' => 'setNickName',
            'ownerId' => 'setOwnerId',
            'tenantId' => 'setTenantId',
            'tenantName' => 'setTenantName',
            'slaveClusterId' => 'setSlaveClusterId',
            'isCare' => 'setIsCare',
            'canModify' => 'setCanModify',
            'canDelete' => 'setCanDelete',
            'canView' => 'setCanView',
            'canExecute' => 'setCanExecute',
            'canCopy' => 'setCanCopy',
            'canManage' => 'setCanManage',
            'canCreateEnv' => 'setCanCreateEnv',
            'canDisable' => 'setCanDisable',
            'appComponentList' => 'setAppComponentList',
            'releaseId' => 'setReleaseId',
            'appId' => 'setAppId',
            'isDisable' => 'setIsDisable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  部署任务id
    * name  部署任务名称
    * state  部署任务状态
    * description  描述
    * owner  部署任务所属人
    * steps  部署步骤
    * projectId  项目ID
    * projectName  项目名称
    * deploySystem  部署类型模式，包括deployTemplate、ansible、shell
    * createTime  创建时间
    * updateTime  修改时间
    * roleId  角色ID
    * isDefautPermission  是否为默认角色
    * templateId  模板id
    * nickName  应用创建者昵称
    * ownerId  应用创建者用户ID
    * tenantId  应用创建者租户ID
    * tenantName  应用创建者租户名
    * slaveClusterId  slave集群id，默认为null时使用默认slave集群，用户自定义slave时为slave集群id
    * isCare  当前用户是否已收藏
    * canModify  是否有编辑权限
    * canDelete  是否有删除的权限
    * canView  是否有查看权限
    * canExecute  是否有部署权限
    * canCopy  是否有复制权限
    * canManage  是否有编辑应用权限矩阵的权限
    * canCreateEnv  是否有创建环境的权限
    * canDisable  是否有禁用应用的权限
    * appComponentList  应用组件列表
    * releaseId  部署记录序列号
    * appId  部署任务所属应用id
    * isDisable  当前应用是否被禁用
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'state' => 'getState',
            'description' => 'getDescription',
            'owner' => 'getOwner',
            'steps' => 'getSteps',
            'projectId' => 'getProjectId',
            'projectName' => 'getProjectName',
            'deploySystem' => 'getDeploySystem',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'roleId' => 'getRoleId',
            'isDefautPermission' => 'getIsDefautPermission',
            'templateId' => 'getTemplateId',
            'nickName' => 'getNickName',
            'ownerId' => 'getOwnerId',
            'tenantId' => 'getTenantId',
            'tenantName' => 'getTenantName',
            'slaveClusterId' => 'getSlaveClusterId',
            'isCare' => 'getIsCare',
            'canModify' => 'getCanModify',
            'canDelete' => 'getCanDelete',
            'canView' => 'getCanView',
            'canExecute' => 'getCanExecute',
            'canCopy' => 'getCanCopy',
            'canManage' => 'getCanManage',
            'canCreateEnv' => 'getCanCreateEnv',
            'canDisable' => 'getCanDisable',
            'appComponentList' => 'getAppComponentList',
            'releaseId' => 'getReleaseId',
            'appId' => 'getAppId',
            'isDisable' => 'getIsDisable'
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
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['steps'] = isset($data['steps']) ? $data['steps'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['deploySystem'] = isset($data['deploySystem']) ? $data['deploySystem'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['roleId'] = isset($data['roleId']) ? $data['roleId'] : null;
        $this->container['isDefautPermission'] = isset($data['isDefautPermission']) ? $data['isDefautPermission'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['nickName'] = isset($data['nickName']) ? $data['nickName'] : null;
        $this->container['ownerId'] = isset($data['ownerId']) ? $data['ownerId'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['tenantName'] = isset($data['tenantName']) ? $data['tenantName'] : null;
        $this->container['slaveClusterId'] = isset($data['slaveClusterId']) ? $data['slaveClusterId'] : null;
        $this->container['isCare'] = isset($data['isCare']) ? $data['isCare'] : null;
        $this->container['canModify'] = isset($data['canModify']) ? $data['canModify'] : null;
        $this->container['canDelete'] = isset($data['canDelete']) ? $data['canDelete'] : null;
        $this->container['canView'] = isset($data['canView']) ? $data['canView'] : null;
        $this->container['canExecute'] = isset($data['canExecute']) ? $data['canExecute'] : null;
        $this->container['canCopy'] = isset($data['canCopy']) ? $data['canCopy'] : null;
        $this->container['canManage'] = isset($data['canManage']) ? $data['canManage'] : null;
        $this->container['canCreateEnv'] = isset($data['canCreateEnv']) ? $data['canCreateEnv'] : null;
        $this->container['canDisable'] = isset($data['canDisable']) ? $data['canDisable'] : null;
        $this->container['appComponentList'] = isset($data['appComponentList']) ? $data['appComponentList'] : null;
        $this->container['releaseId'] = isset($data['releaseId']) ? $data['releaseId'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['isDisable'] = isset($data['isDisable']) ? $data['isDisable'] : null;
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
            if (!is_null($this->container['templateId']) && !preg_match("/^[A-Za-z0-9]{32}$/", $this->container['templateId'])) {
                $invalidProperties[] = "invalid value for 'templateId', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
            }
            if (!is_null($this->container['nickName']) && (mb_strlen($this->container['nickName']) > 128)) {
                $invalidProperties[] = "invalid value for 'nickName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['nickName']) && (mb_strlen($this->container['nickName']) < 0)) {
                $invalidProperties[] = "invalid value for 'nickName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ownerId']) && !preg_match("/^[A-Za-z0-9]{32}$/", $this->container['ownerId'])) {
                $invalidProperties[] = "invalid value for 'ownerId', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
            }
            if (!is_null($this->container['tenantId']) && !preg_match("/^[A-Za-z0-9]{32}$/", $this->container['tenantId'])) {
                $invalidProperties[] = "invalid value for 'tenantId', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
            }
            if (!is_null($this->container['tenantName']) && (mb_strlen($this->container['tenantName']) > 128)) {
                $invalidProperties[] = "invalid value for 'tenantName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['tenantName']) && (mb_strlen($this->container['tenantName']) < 0)) {
                $invalidProperties[] = "invalid value for 'tenantName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['slaveClusterId']) && !preg_match("/^[A-Za-z0-9]{1,32}$/", $this->container['slaveClusterId'])) {
                $invalidProperties[] = "invalid value for 'slaveClusterId', must be conform to the pattern /^[A-Za-z0-9]{1,32}$/.";
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
    *  部署任务id
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
    * @param string|null $id 部署任务id
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
    *  部署任务名称
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
    * @param string|null $name 部署任务名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets state
    *  部署任务状态
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 部署任务状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
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
    * Gets owner
    *  部署任务所属人
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner 部署任务所属人
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets steps
    *  部署步骤
    *
    * @return map[string,\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\Step]|null
    */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
    * Sets steps
    *
    * @param map[string,\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\Step]|null $steps 部署步骤
    *
    * @return $this
    */
    public function setSteps($steps)
    {
        $this->container['steps'] = $steps;
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
    * Gets deploySystem
    *  部署类型模式，包括deployTemplate、ansible、shell
    *
    * @return string|null
    */
    public function getDeploySystem()
    {
        return $this->container['deploySystem'];
    }

    /**
    * Sets deploySystem
    *
    * @param string|null $deploySystem 部署类型模式，包括deployTemplate、ansible、shell
    *
    * @return $this
    */
    public function setDeploySystem($deploySystem)
    {
        $this->container['deploySystem'] = $deploySystem;
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
    * Gets isDefautPermission
    *  是否为默认角色
    *
    * @return bool|null
    */
    public function getIsDefautPermission()
    {
        return $this->container['isDefautPermission'];
    }

    /**
    * Sets isDefautPermission
    *
    * @param bool|null $isDefautPermission 是否为默认角色
    *
    * @return $this
    */
    public function setIsDefautPermission($isDefautPermission)
    {
        $this->container['isDefautPermission'] = $isDefautPermission;
        return $this;
    }

    /**
    * Gets templateId
    *  模板id
    *
    * @return string|null
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param string|null $templateId 模板id
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets nickName
    *  应用创建者昵称
    *
    * @return string|null
    */
    public function getNickName()
    {
        return $this->container['nickName'];
    }

    /**
    * Sets nickName
    *
    * @param string|null $nickName 应用创建者昵称
    *
    * @return $this
    */
    public function setNickName($nickName)
    {
        $this->container['nickName'] = $nickName;
        return $this;
    }

    /**
    * Gets ownerId
    *  应用创建者用户ID
    *
    * @return string|null
    */
    public function getOwnerId()
    {
        return $this->container['ownerId'];
    }

    /**
    * Sets ownerId
    *
    * @param string|null $ownerId 应用创建者用户ID
    *
    * @return $this
    */
    public function setOwnerId($ownerId)
    {
        $this->container['ownerId'] = $ownerId;
        return $this;
    }

    /**
    * Gets tenantId
    *  应用创建者租户ID
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId 应用创建者租户ID
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets tenantName
    *  应用创建者租户名
    *
    * @return string|null
    */
    public function getTenantName()
    {
        return $this->container['tenantName'];
    }

    /**
    * Sets tenantName
    *
    * @param string|null $tenantName 应用创建者租户名
    *
    * @return $this
    */
    public function setTenantName($tenantName)
    {
        $this->container['tenantName'] = $tenantName;
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
    * Gets canDisable
    *  是否有禁用应用的权限
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
    * @param bool|null $canDisable 是否有禁用应用的权限
    *
    * @return $this
    */
    public function setCanDisable($canDisable)
    {
        $this->container['canDisable'] = $canDisable;
        return $this;
    }

    /**
    * Gets appComponentList
    *  应用组件列表
    *
    * @return \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\AppComponentDao[]|null
    */
    public function getAppComponentList()
    {
        return $this->container['appComponentList'];
    }

    /**
    * Sets appComponentList
    *
    * @param \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\AppComponentDao[]|null $appComponentList 应用组件列表
    *
    * @return $this
    */
    public function setAppComponentList($appComponentList)
    {
        $this->container['appComponentList'] = $appComponentList;
        return $this;
    }

    /**
    * Gets releaseId
    *  部署记录序列号
    *
    * @return int|null
    */
    public function getReleaseId()
    {
        return $this->container['releaseId'];
    }

    /**
    * Sets releaseId
    *
    * @param int|null $releaseId 部署记录序列号
    *
    * @return $this
    */
    public function setReleaseId($releaseId)
    {
        $this->container['releaseId'] = $releaseId;
        return $this;
    }

    /**
    * Gets appId
    *  部署任务所属应用id
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId 部署任务所属应用id
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets isDisable
    *  当前应用是否被禁用
    *
    * @return bool|null
    */
    public function getIsDisable()
    {
        return $this->container['isDisable'];
    }

    /**
    * Sets isDisable
    *
    * @param bool|null $isDisable 当前应用是否被禁用
    *
    * @return $this
    */
    public function setIsDisable($isDisable)
    {
        $this->container['isDisable'] = $isDisable;
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

