<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDeployTaskDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDeployTaskDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  部署任务id
    * name  应用名称
    * projectId  项目id
    * projectName  项目名称
    * deploySystem  部署类型模式，包括deployTemplate，ansible，shell
    * createTime  创建时间
    * updateTime  修改时间
    * state  应用状态，Draft表示草稿状态，Available表示可用状态
    * executionTime  最后一次部署时间
    * description  描述
    * isDefautPermission  是否使用默认权限矩阵
    * templateId  模板id
    * owner  应用创建者用户名
    * nickName  应用创建者昵称
    * ownerId  应用创建者用户id
    * tenantId  应用创建者租户id
    * tenantName  应用创建者租户名
    * slaveClusterId  slave集群id，默认为null时使用默认slave集群，用户自定义slave时为slave集群id
    * isCare  当前用户是否已收藏
    * canModify  是否有编辑权限
    * canDelete  是否有删除的权限
    * canView  是否有查看权限
    * canExecute  是否有部署权限
    * canCopy  是否有复制权限
    * canManage  是否有编辑应用权限矩阵的权限
    * canDisable  是否有禁用应用的权限
    * appComponentList  应用和AOM应用组件对应关系
    * roleId  角色id,0：应用创建者，-1：项目创建者，3：项目经理，4：开发人员，5：测试经理，6：测试人员，7：参与者，8：浏览者
    * id  部署任务id
    * releaseId  部署记录序列号
    * isDisable  当前应用是否被禁用
    * duration  部署时间
    * executionState  部署状态
    * executorId  部署者id
    * executorNickName  部署者名称
    * steps  部署步骤
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'name' => 'string',
            'projectId' => 'string',
            'projectName' => 'string',
            'deploySystem' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string',
            'state' => 'string',
            'executionTime' => 'string',
            'description' => 'string',
            'isDefautPermission' => 'bool',
            'templateId' => 'string',
            'owner' => 'string',
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
            'canDisable' => 'bool',
            'appComponentList' => '\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\AppComponentDao[]',
            'roleId' => 'int',
            'id' => 'string',
            'releaseId' => 'int',
            'isDisable' => 'bool',
            'duration' => 'string',
            'executionState' => 'string',
            'executorId' => 'string',
            'executorNickName' => 'string',
            'steps' => 'map[string,\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\Step]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  部署任务id
    * name  应用名称
    * projectId  项目id
    * projectName  项目名称
    * deploySystem  部署类型模式，包括deployTemplate，ansible，shell
    * createTime  创建时间
    * updateTime  修改时间
    * state  应用状态，Draft表示草稿状态，Available表示可用状态
    * executionTime  最后一次部署时间
    * description  描述
    * isDefautPermission  是否使用默认权限矩阵
    * templateId  模板id
    * owner  应用创建者用户名
    * nickName  应用创建者昵称
    * ownerId  应用创建者用户id
    * tenantId  应用创建者租户id
    * tenantName  应用创建者租户名
    * slaveClusterId  slave集群id，默认为null时使用默认slave集群，用户自定义slave时为slave集群id
    * isCare  当前用户是否已收藏
    * canModify  是否有编辑权限
    * canDelete  是否有删除的权限
    * canView  是否有查看权限
    * canExecute  是否有部署权限
    * canCopy  是否有复制权限
    * canManage  是否有编辑应用权限矩阵的权限
    * canDisable  是否有禁用应用的权限
    * appComponentList  应用和AOM应用组件对应关系
    * roleId  角色id,0：应用创建者，-1：项目创建者，3：项目经理，4：开发人员，5：测试经理，6：测试人员，7：参与者，8：浏览者
    * id  部署任务id
    * releaseId  部署记录序列号
    * isDisable  当前应用是否被禁用
    * duration  部署时间
    * executionState  部署状态
    * executorId  部署者id
    * executorNickName  部署者名称
    * steps  部署步骤
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'name' => null,
        'projectId' => null,
        'projectName' => null,
        'deploySystem' => null,
        'createTime' => null,
        'updateTime' => null,
        'state' => null,
        'executionTime' => null,
        'description' => null,
        'isDefautPermission' => null,
        'templateId' => null,
        'owner' => null,
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
        'canDisable' => null,
        'appComponentList' => null,
        'roleId' => 'int32',
        'id' => null,
        'releaseId' => 'int32',
        'isDisable' => null,
        'duration' => null,
        'executionState' => null,
        'executorId' => null,
        'executorNickName' => null,
        'steps' => null
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
    * taskId  部署任务id
    * name  应用名称
    * projectId  项目id
    * projectName  项目名称
    * deploySystem  部署类型模式，包括deployTemplate，ansible，shell
    * createTime  创建时间
    * updateTime  修改时间
    * state  应用状态，Draft表示草稿状态，Available表示可用状态
    * executionTime  最后一次部署时间
    * description  描述
    * isDefautPermission  是否使用默认权限矩阵
    * templateId  模板id
    * owner  应用创建者用户名
    * nickName  应用创建者昵称
    * ownerId  应用创建者用户id
    * tenantId  应用创建者租户id
    * tenantName  应用创建者租户名
    * slaveClusterId  slave集群id，默认为null时使用默认slave集群，用户自定义slave时为slave集群id
    * isCare  当前用户是否已收藏
    * canModify  是否有编辑权限
    * canDelete  是否有删除的权限
    * canView  是否有查看权限
    * canExecute  是否有部署权限
    * canCopy  是否有复制权限
    * canManage  是否有编辑应用权限矩阵的权限
    * canDisable  是否有禁用应用的权限
    * appComponentList  应用和AOM应用组件对应关系
    * roleId  角色id,0：应用创建者，-1：项目创建者，3：项目经理，4：开发人员，5：测试经理，6：测试人员，7：参与者，8：浏览者
    * id  部署任务id
    * releaseId  部署记录序列号
    * isDisable  当前应用是否被禁用
    * duration  部署时间
    * executionState  部署状态
    * executorId  部署者id
    * executorNickName  部署者名称
    * steps  部署步骤
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'name' => 'name',
            'projectId' => 'project_id',
            'projectName' => 'project_name',
            'deploySystem' => 'deploy_system',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'state' => 'state',
            'executionTime' => 'execution_time',
            'description' => 'description',
            'isDefautPermission' => 'is_defaut_permission',
            'templateId' => 'template_id',
            'owner' => 'owner',
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
            'canDisable' => 'can_disable',
            'appComponentList' => 'app_component_list',
            'roleId' => 'role_id',
            'id' => 'id',
            'releaseId' => 'release_id',
            'isDisable' => 'is_disable',
            'duration' => 'duration',
            'executionState' => 'execution_state',
            'executorId' => 'executor_id',
            'executorNickName' => 'executor_nick_name',
            'steps' => 'steps'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  部署任务id
    * name  应用名称
    * projectId  项目id
    * projectName  项目名称
    * deploySystem  部署类型模式，包括deployTemplate，ansible，shell
    * createTime  创建时间
    * updateTime  修改时间
    * state  应用状态，Draft表示草稿状态，Available表示可用状态
    * executionTime  最后一次部署时间
    * description  描述
    * isDefautPermission  是否使用默认权限矩阵
    * templateId  模板id
    * owner  应用创建者用户名
    * nickName  应用创建者昵称
    * ownerId  应用创建者用户id
    * tenantId  应用创建者租户id
    * tenantName  应用创建者租户名
    * slaveClusterId  slave集群id，默认为null时使用默认slave集群，用户自定义slave时为slave集群id
    * isCare  当前用户是否已收藏
    * canModify  是否有编辑权限
    * canDelete  是否有删除的权限
    * canView  是否有查看权限
    * canExecute  是否有部署权限
    * canCopy  是否有复制权限
    * canManage  是否有编辑应用权限矩阵的权限
    * canDisable  是否有禁用应用的权限
    * appComponentList  应用和AOM应用组件对应关系
    * roleId  角色id,0：应用创建者，-1：项目创建者，3：项目经理，4：开发人员，5：测试经理，6：测试人员，7：参与者，8：浏览者
    * id  部署任务id
    * releaseId  部署记录序列号
    * isDisable  当前应用是否被禁用
    * duration  部署时间
    * executionState  部署状态
    * executorId  部署者id
    * executorNickName  部署者名称
    * steps  部署步骤
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'name' => 'setName',
            'projectId' => 'setProjectId',
            'projectName' => 'setProjectName',
            'deploySystem' => 'setDeploySystem',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'state' => 'setState',
            'executionTime' => 'setExecutionTime',
            'description' => 'setDescription',
            'isDefautPermission' => 'setIsDefautPermission',
            'templateId' => 'setTemplateId',
            'owner' => 'setOwner',
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
            'canDisable' => 'setCanDisable',
            'appComponentList' => 'setAppComponentList',
            'roleId' => 'setRoleId',
            'id' => 'setId',
            'releaseId' => 'setReleaseId',
            'isDisable' => 'setIsDisable',
            'duration' => 'setDuration',
            'executionState' => 'setExecutionState',
            'executorId' => 'setExecutorId',
            'executorNickName' => 'setExecutorNickName',
            'steps' => 'setSteps'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  部署任务id
    * name  应用名称
    * projectId  项目id
    * projectName  项目名称
    * deploySystem  部署类型模式，包括deployTemplate，ansible，shell
    * createTime  创建时间
    * updateTime  修改时间
    * state  应用状态，Draft表示草稿状态，Available表示可用状态
    * executionTime  最后一次部署时间
    * description  描述
    * isDefautPermission  是否使用默认权限矩阵
    * templateId  模板id
    * owner  应用创建者用户名
    * nickName  应用创建者昵称
    * ownerId  应用创建者用户id
    * tenantId  应用创建者租户id
    * tenantName  应用创建者租户名
    * slaveClusterId  slave集群id，默认为null时使用默认slave集群，用户自定义slave时为slave集群id
    * isCare  当前用户是否已收藏
    * canModify  是否有编辑权限
    * canDelete  是否有删除的权限
    * canView  是否有查看权限
    * canExecute  是否有部署权限
    * canCopy  是否有复制权限
    * canManage  是否有编辑应用权限矩阵的权限
    * canDisable  是否有禁用应用的权限
    * appComponentList  应用和AOM应用组件对应关系
    * roleId  角色id,0：应用创建者，-1：项目创建者，3：项目经理，4：开发人员，5：测试经理，6：测试人员，7：参与者，8：浏览者
    * id  部署任务id
    * releaseId  部署记录序列号
    * isDisable  当前应用是否被禁用
    * duration  部署时间
    * executionState  部署状态
    * executorId  部署者id
    * executorNickName  部署者名称
    * steps  部署步骤
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'name' => 'getName',
            'projectId' => 'getProjectId',
            'projectName' => 'getProjectName',
            'deploySystem' => 'getDeploySystem',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'state' => 'getState',
            'executionTime' => 'getExecutionTime',
            'description' => 'getDescription',
            'isDefautPermission' => 'getIsDefautPermission',
            'templateId' => 'getTemplateId',
            'owner' => 'getOwner',
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
            'canDisable' => 'getCanDisable',
            'appComponentList' => 'getAppComponentList',
            'roleId' => 'getRoleId',
            'id' => 'getId',
            'releaseId' => 'getReleaseId',
            'isDisable' => 'getIsDisable',
            'duration' => 'getDuration',
            'executionState' => 'getExecutionState',
            'executorId' => 'getExecutorId',
            'executorNickName' => 'getExecutorNickName',
            'steps' => 'getSteps'
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
    const STATE_AVAILABLE = 'Available';
    const STATE_DRAFT = 'Draft';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_AVAILABLE,
            self::STATE_DRAFT,
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['deploySystem'] = isset($data['deploySystem']) ? $data['deploySystem'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['executionTime'] = isset($data['executionTime']) ? $data['executionTime'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['isDefautPermission'] = isset($data['isDefautPermission']) ? $data['isDefautPermission'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
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
        $this->container['canDisable'] = isset($data['canDisable']) ? $data['canDisable'] : null;
        $this->container['appComponentList'] = isset($data['appComponentList']) ? $data['appComponentList'] : null;
        $this->container['roleId'] = isset($data['roleId']) ? $data['roleId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['releaseId'] = isset($data['releaseId']) ? $data['releaseId'] : null;
        $this->container['isDisable'] = isset($data['isDisable']) ? $data['isDisable'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['executionState'] = isset($data['executionState']) ? $data['executionState'] : null;
        $this->container['executorId'] = isset($data['executorId']) ? $data['executorId'] : null;
        $this->container['executorNickName'] = isset($data['executorNickName']) ? $data['executorNickName'] : null;
        $this->container['steps'] = isset($data['steps']) ? $data['steps'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['taskId']) && !preg_match("/^[A-Za-z0-9]{32}$/", $this->container['taskId'])) {
                $invalidProperties[] = "invalid value for 'taskId', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
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
            if (!is_null($this->container['projectId']) && !preg_match("/^[A-Za-z0-9]{32}$/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
            }
            if (!is_null($this->container['projectName']) && (mb_strlen($this->container['projectName']) > 128)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['projectName']) && (mb_strlen($this->container['projectName']) < 3)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['deploySystem']) && !preg_match("/^[A-Za-z]{1,128}$/", $this->container['deploySystem'])) {
                $invalidProperties[] = "invalid value for 'deploySystem', must be conform to the pattern /^[A-Za-z]{1,128}$/.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 128)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 3)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 128)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 3)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 3.";
            }
            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['executionTime']) && (mb_strlen($this->container['executionTime']) > 128)) {
                $invalidProperties[] = "invalid value for 'executionTime', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['executionTime']) && (mb_strlen($this->container['executionTime']) < 3)) {
                $invalidProperties[] = "invalid value for 'executionTime', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['templateId']) && !preg_match("/^[A-Za-z0-9]{32}$/", $this->container['templateId'])) {
                $invalidProperties[] = "invalid value for 'templateId', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
            }
            if (!is_null($this->container['owner']) && (mb_strlen($this->container['owner']) > 128)) {
                $invalidProperties[] = "invalid value for 'owner', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['owner']) && (mb_strlen($this->container['owner']) < 0)) {
                $invalidProperties[] = "invalid value for 'owner', the character length must be bigger than or equal to 0.";
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
    * Gets taskId
    *  部署任务id
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId 部署任务id
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
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
    * Gets projectId
    *  项目id
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
    * @param string|null $projectId 项目id
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
    *  部署类型模式，包括deployTemplate，ansible，shell
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
    * @param string|null $deploySystem 部署类型模式，包括deployTemplate，ansible，shell
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
    * Gets state
    *  应用状态，Draft表示草稿状态，Available表示可用状态
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
    * @param string|null $state 应用状态，Draft表示草稿状态，Available表示可用状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets executionTime
    *  最后一次部署时间
    *
    * @return string|null
    */
    public function getExecutionTime()
    {
        return $this->container['executionTime'];
    }

    /**
    * Sets executionTime
    *
    * @param string|null $executionTime 最后一次部署时间
    *
    * @return $this
    */
    public function setExecutionTime($executionTime)
    {
        $this->container['executionTime'] = $executionTime;
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
    * Gets isDefautPermission
    *  是否使用默认权限矩阵
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
    * @param bool|null $isDefautPermission 是否使用默认权限矩阵
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
    * Gets owner
    *  应用创建者用户名
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
    * @param string|null $owner 应用创建者用户名
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
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
    *  应用创建者用户id
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
    * @param string|null $ownerId 应用创建者用户id
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
    *  应用创建者租户id
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
    * @param string|null $tenantId 应用创建者租户id
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
    *  应用和AOM应用组件对应关系
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
    * @param \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\AppComponentDao[]|null $appComponentList 应用和AOM应用组件对应关系
    *
    * @return $this
    */
    public function setAppComponentList($appComponentList)
    {
        $this->container['appComponentList'] = $appComponentList;
        return $this;
    }

    /**
    * Gets roleId
    *  角色id,0：应用创建者，-1：项目创建者，3：项目经理，4：开发人员，5：测试经理，6：测试人员，7：参与者，8：浏览者
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
    * @param int|null $roleId 角色id,0：应用创建者，-1：项目创建者，3：项目经理，4：开发人员，5：测试经理，6：测试人员，7：参与者，8：浏览者
    *
    * @return $this
    */
    public function setRoleId($roleId)
    {
        $this->container['roleId'] = $roleId;
        return $this;
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
    * Gets duration
    *  部署时间
    *
    * @return string|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param string|null $duration 部署时间
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets executionState
    *  部署状态
    *
    * @return string|null
    */
    public function getExecutionState()
    {
        return $this->container['executionState'];
    }

    /**
    * Sets executionState
    *
    * @param string|null $executionState 部署状态
    *
    * @return $this
    */
    public function setExecutionState($executionState)
    {
        $this->container['executionState'] = $executionState;
        return $this;
    }

    /**
    * Gets executorId
    *  部署者id
    *
    * @return string|null
    */
    public function getExecutorId()
    {
        return $this->container['executorId'];
    }

    /**
    * Sets executorId
    *
    * @param string|null $executorId 部署者id
    *
    * @return $this
    */
    public function setExecutorId($executorId)
    {
        $this->container['executorId'] = $executorId;
        return $this;
    }

    /**
    * Gets executorNickName
    *  部署者名称
    *
    * @return string|null
    */
    public function getExecutorNickName()
    {
        return $this->container['executorNickName'];
    }

    /**
    * Sets executorNickName
    *
    * @param string|null $executorNickName 部署者名称
    *
    * @return $this
    */
    public function setExecutorNickName($executorNickName)
    {
        $this->container['executorNickName'] = $executorNickName;
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

