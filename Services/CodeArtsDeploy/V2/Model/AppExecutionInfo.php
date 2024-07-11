<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AppExecutionInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AppExecutionInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  应用id
    * name  应用名称
    * duration  部署时间
    * isDisable  当前应用是否被禁用
    * projectId  项目id
    * projectName  项目名称
    * isCare  当前用户是否已收藏
    * canModify  是否有编辑权限
    * canDelete  是否有删除的权限
    * canView  是否有查看权限
    * canExecute  是否有部署权限
    * canCopy  是否有复制权限
    * canManage  是否有编辑应用权限矩阵的权限
    * canCreateEnv  是否有创建环境的权限
    * canDisable  是否有禁用应用的权限
    * deploySystem  部署类型模式，包括deployTemplate、ansible、shell
    * createUserId  应用创建者用户id
    * createTenantId  应用创建者租户id
    * createTime  创建时间
    * updateTime  修改时间
    * executionTime  最后一次部署时间
    * endTime  部署结束时间
    * executionState  部署状态
    * releaseId  部署记录序列号
    * executorId  部署者id
    * executorNickName  部署者名称
    * arrangeInfos  部署任务信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'duration' => 'string',
            'isDisable' => 'bool',
            'projectId' => 'string',
            'projectName' => 'string',
            'isCare' => 'bool',
            'canModify' => 'bool',
            'canDelete' => 'bool',
            'canView' => 'bool',
            'canExecute' => 'bool',
            'canCopy' => 'bool',
            'canManage' => 'bool',
            'canCreateEnv' => 'bool',
            'canDisable' => 'bool',
            'deploySystem' => 'string',
            'createUserId' => 'string',
            'createTenantId' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string',
            'executionTime' => 'string',
            'endTime' => 'string',
            'executionState' => 'string',
            'releaseId' => 'int',
            'executorId' => 'string',
            'executorNickName' => 'string',
            'arrangeInfos' => '\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\TaskBaseResponseBody[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  应用id
    * name  应用名称
    * duration  部署时间
    * isDisable  当前应用是否被禁用
    * projectId  项目id
    * projectName  项目名称
    * isCare  当前用户是否已收藏
    * canModify  是否有编辑权限
    * canDelete  是否有删除的权限
    * canView  是否有查看权限
    * canExecute  是否有部署权限
    * canCopy  是否有复制权限
    * canManage  是否有编辑应用权限矩阵的权限
    * canCreateEnv  是否有创建环境的权限
    * canDisable  是否有禁用应用的权限
    * deploySystem  部署类型模式，包括deployTemplate、ansible、shell
    * createUserId  应用创建者用户id
    * createTenantId  应用创建者租户id
    * createTime  创建时间
    * updateTime  修改时间
    * executionTime  最后一次部署时间
    * endTime  部署结束时间
    * executionState  部署状态
    * releaseId  部署记录序列号
    * executorId  部署者id
    * executorNickName  部署者名称
    * arrangeInfos  部署任务信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'duration' => null,
        'isDisable' => null,
        'projectId' => null,
        'projectName' => null,
        'isCare' => null,
        'canModify' => null,
        'canDelete' => null,
        'canView' => null,
        'canExecute' => null,
        'canCopy' => null,
        'canManage' => null,
        'canCreateEnv' => null,
        'canDisable' => null,
        'deploySystem' => null,
        'createUserId' => null,
        'createTenantId' => null,
        'createTime' => null,
        'updateTime' => null,
        'executionTime' => null,
        'endTime' => null,
        'executionState' => null,
        'releaseId' => 'int32',
        'executorId' => null,
        'executorNickName' => null,
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
    * duration  部署时间
    * isDisable  当前应用是否被禁用
    * projectId  项目id
    * projectName  项目名称
    * isCare  当前用户是否已收藏
    * canModify  是否有编辑权限
    * canDelete  是否有删除的权限
    * canView  是否有查看权限
    * canExecute  是否有部署权限
    * canCopy  是否有复制权限
    * canManage  是否有编辑应用权限矩阵的权限
    * canCreateEnv  是否有创建环境的权限
    * canDisable  是否有禁用应用的权限
    * deploySystem  部署类型模式，包括deployTemplate、ansible、shell
    * createUserId  应用创建者用户id
    * createTenantId  应用创建者租户id
    * createTime  创建时间
    * updateTime  修改时间
    * executionTime  最后一次部署时间
    * endTime  部署结束时间
    * executionState  部署状态
    * releaseId  部署记录序列号
    * executorId  部署者id
    * executorNickName  部署者名称
    * arrangeInfos  部署任务信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'duration' => 'duration',
            'isDisable' => 'is_disable',
            'projectId' => 'project_id',
            'projectName' => 'project_name',
            'isCare' => 'is_care',
            'canModify' => 'can_modify',
            'canDelete' => 'can_delete',
            'canView' => 'can_view',
            'canExecute' => 'can_execute',
            'canCopy' => 'can_copy',
            'canManage' => 'can_manage',
            'canCreateEnv' => 'can_create_env',
            'canDisable' => 'can_disable',
            'deploySystem' => 'deploy_system',
            'createUserId' => 'create_user_id',
            'createTenantId' => 'create_tenant_id',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'executionTime' => 'execution_time',
            'endTime' => 'end_time',
            'executionState' => 'execution_state',
            'releaseId' => 'release_id',
            'executorId' => 'executor_id',
            'executorNickName' => 'executor_nick_name',
            'arrangeInfos' => 'arrange_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  应用id
    * name  应用名称
    * duration  部署时间
    * isDisable  当前应用是否被禁用
    * projectId  项目id
    * projectName  项目名称
    * isCare  当前用户是否已收藏
    * canModify  是否有编辑权限
    * canDelete  是否有删除的权限
    * canView  是否有查看权限
    * canExecute  是否有部署权限
    * canCopy  是否有复制权限
    * canManage  是否有编辑应用权限矩阵的权限
    * canCreateEnv  是否有创建环境的权限
    * canDisable  是否有禁用应用的权限
    * deploySystem  部署类型模式，包括deployTemplate、ansible、shell
    * createUserId  应用创建者用户id
    * createTenantId  应用创建者租户id
    * createTime  创建时间
    * updateTime  修改时间
    * executionTime  最后一次部署时间
    * endTime  部署结束时间
    * executionState  部署状态
    * releaseId  部署记录序列号
    * executorId  部署者id
    * executorNickName  部署者名称
    * arrangeInfos  部署任务信息
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'duration' => 'setDuration',
            'isDisable' => 'setIsDisable',
            'projectId' => 'setProjectId',
            'projectName' => 'setProjectName',
            'isCare' => 'setIsCare',
            'canModify' => 'setCanModify',
            'canDelete' => 'setCanDelete',
            'canView' => 'setCanView',
            'canExecute' => 'setCanExecute',
            'canCopy' => 'setCanCopy',
            'canManage' => 'setCanManage',
            'canCreateEnv' => 'setCanCreateEnv',
            'canDisable' => 'setCanDisable',
            'deploySystem' => 'setDeploySystem',
            'createUserId' => 'setCreateUserId',
            'createTenantId' => 'setCreateTenantId',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'executionTime' => 'setExecutionTime',
            'endTime' => 'setEndTime',
            'executionState' => 'setExecutionState',
            'releaseId' => 'setReleaseId',
            'executorId' => 'setExecutorId',
            'executorNickName' => 'setExecutorNickName',
            'arrangeInfos' => 'setArrangeInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  应用id
    * name  应用名称
    * duration  部署时间
    * isDisable  当前应用是否被禁用
    * projectId  项目id
    * projectName  项目名称
    * isCare  当前用户是否已收藏
    * canModify  是否有编辑权限
    * canDelete  是否有删除的权限
    * canView  是否有查看权限
    * canExecute  是否有部署权限
    * canCopy  是否有复制权限
    * canManage  是否有编辑应用权限矩阵的权限
    * canCreateEnv  是否有创建环境的权限
    * canDisable  是否有禁用应用的权限
    * deploySystem  部署类型模式，包括deployTemplate、ansible、shell
    * createUserId  应用创建者用户id
    * createTenantId  应用创建者租户id
    * createTime  创建时间
    * updateTime  修改时间
    * executionTime  最后一次部署时间
    * endTime  部署结束时间
    * executionState  部署状态
    * releaseId  部署记录序列号
    * executorId  部署者id
    * executorNickName  部署者名称
    * arrangeInfos  部署任务信息
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'duration' => 'getDuration',
            'isDisable' => 'getIsDisable',
            'projectId' => 'getProjectId',
            'projectName' => 'getProjectName',
            'isCare' => 'getIsCare',
            'canModify' => 'getCanModify',
            'canDelete' => 'getCanDelete',
            'canView' => 'getCanView',
            'canExecute' => 'getCanExecute',
            'canCopy' => 'getCanCopy',
            'canManage' => 'getCanManage',
            'canCreateEnv' => 'getCanCreateEnv',
            'canDisable' => 'getCanDisable',
            'deploySystem' => 'getDeploySystem',
            'createUserId' => 'getCreateUserId',
            'createTenantId' => 'getCreateTenantId',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'executionTime' => 'getExecutionTime',
            'endTime' => 'getEndTime',
            'executionState' => 'getExecutionState',
            'releaseId' => 'getReleaseId',
            'executorId' => 'getExecutorId',
            'executorNickName' => 'getExecutorNickName',
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
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['isDisable'] = isset($data['isDisable']) ? $data['isDisable'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['isCare'] = isset($data['isCare']) ? $data['isCare'] : null;
        $this->container['canModify'] = isset($data['canModify']) ? $data['canModify'] : null;
        $this->container['canDelete'] = isset($data['canDelete']) ? $data['canDelete'] : null;
        $this->container['canView'] = isset($data['canView']) ? $data['canView'] : null;
        $this->container['canExecute'] = isset($data['canExecute']) ? $data['canExecute'] : null;
        $this->container['canCopy'] = isset($data['canCopy']) ? $data['canCopy'] : null;
        $this->container['canManage'] = isset($data['canManage']) ? $data['canManage'] : null;
        $this->container['canCreateEnv'] = isset($data['canCreateEnv']) ? $data['canCreateEnv'] : null;
        $this->container['canDisable'] = isset($data['canDisable']) ? $data['canDisable'] : null;
        $this->container['deploySystem'] = isset($data['deploySystem']) ? $data['deploySystem'] : null;
        $this->container['createUserId'] = isset($data['createUserId']) ? $data['createUserId'] : null;
        $this->container['createTenantId'] = isset($data['createTenantId']) ? $data['createTenantId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['executionTime'] = isset($data['executionTime']) ? $data['executionTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['executionState'] = isset($data['executionState']) ? $data['executionState'] : null;
        $this->container['releaseId'] = isset($data['releaseId']) ? $data['releaseId'] : null;
        $this->container['executorId'] = isset($data['executorId']) ? $data['executorId'] : null;
        $this->container['executorNickName'] = isset($data['executorNickName']) ? $data['executorNickName'] : null;
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
            if (!is_null($this->container['createUserId']) && !preg_match("/^[A-Za-z0-9]{32}$/", $this->container['createUserId'])) {
                $invalidProperties[] = "invalid value for 'createUserId', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
            }
            if (!is_null($this->container['createTenantId']) && !preg_match("/^[A-Za-z0-9]{32}$/", $this->container['createTenantId'])) {
                $invalidProperties[] = "invalid value for 'createTenantId', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
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
            if (!is_null($this->container['executionTime']) && (mb_strlen($this->container['executionTime']) > 128)) {
                $invalidProperties[] = "invalid value for 'executionTime', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['executionTime']) && (mb_strlen($this->container['executionTime']) < 3)) {
                $invalidProperties[] = "invalid value for 'executionTime', the character length must be bigger than or equal to 3.";
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
    * Gets createUserId
    *  应用创建者用户id
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
    * @param string|null $createUserId 应用创建者用户id
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
    *  应用创建者租户id
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
    * @param string|null $createTenantId 应用创建者租户id
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
    * Gets endTime
    *  部署结束时间
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 部署结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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
    * Gets arrangeInfos
    *  部署任务信息
    *
    * @return \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\TaskBaseResponseBody[]|null
    */
    public function getArrangeInfos()
    {
        return $this->container['arrangeInfos'];
    }

    /**
    * Sets arrangeInfos
    *
    * @param \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\TaskBaseResponseBody[]|null $arrangeInfos 部署任务信息
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

