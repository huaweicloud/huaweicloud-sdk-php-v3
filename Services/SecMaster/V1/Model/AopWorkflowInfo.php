<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AopWorkflowInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AopWorkflowInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**: 流程ID **取值范围**: 不涉及
    * name  **参数解释**: 流程名称 **取值范围**: 不涉及
    * description  **参数解释**: 流程的描述 **取值范围**: 不涉及
    * projectId  **参数解释**: 租户ID **取值范围**: 不涉及
    * ownerId  **参数解释**: 所有者ID **取值范围**: 不涉及
    * creatorId  **参数解释**: 创建者ID **取值范围**: 不涉及
    * creatorName  **参数解释**: 创建者的名称 **取值范围**: 不涉及
    * createTime  **参数解释**: 创建时间 **取值范围**: 不涉及
    * modifierId  **参数解释**: 更新者的ID **取值范围**: 不涉及
    * modifierName  **参数解释**: 更新者的名称 **取值范围**: 不涉及
    * updateTime  **参数解释**: 更新的时间 **取值范围**: 不涉及
    * editRole  **参数解释**: 编辑角色 **取值范围**: 不涉及
    * useRole  **参数解释**: 使用角色 **取值范围**: 不涉及
    * approveRole  **参数解释**: 审核角色 **取值范围**: 不涉及
    * enabled  **参数解释**: 是否已启用 **取值范围**: - true  已启用 - false 未启用
    * workspaceId  **参数解释**: 工作空间ID **取值范围**: 不涉及
    * versionId  **参数解释**: 流程激活版本ID **取值范围**: 不涉及
    * currentApprovalVersionId  **参数解释**: 当前待审核版本ID **取值范围**: 不涉及
    * currentRejectedVersionId  **参数解释**: 当前拒绝的版本ID **取值范围**: 不涉及
    * aopType  **参数解释**: 流程的类型 - NORMAL 通用 - SURVEY 调查 - HEMOSTASIS 止血 - EASE 缓解  **取值范围**: - NORMAL - SURVEY - HEMOSTASIS - EASE
    * engineType  **参数解释**: 引擎的类型 - public_engine 共享版  **取值范围**: - public_engine
    * dataclassId  **参数解释**: 数据类的ID **取值范围**: 不涉及
    * dataclassName  **参数解释**: 数据类的名称 **取值范围**: 不涉及
    * labels  **参数解释**: 流程实体类型 - IP IP - ACCOUNT 账号 - DOMAIN 域名  **取值范围**: - IP - ACCOUNT - DOMAIN
    * version  **参数解释**: 当前激活的流程的版本 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'projectId' => 'string',
            'ownerId' => 'string',
            'creatorId' => 'string',
            'creatorName' => 'string',
            'createTime' => 'string',
            'modifierId' => 'string',
            'modifierName' => 'string',
            'updateTime' => 'string',
            'editRole' => 'string',
            'useRole' => 'string',
            'approveRole' => 'string',
            'enabled' => 'bool',
            'workspaceId' => 'string',
            'versionId' => 'string',
            'currentApprovalVersionId' => 'string',
            'currentRejectedVersionId' => 'string',
            'aopType' => 'string',
            'engineType' => 'string',
            'dataclassId' => 'string',
            'dataclassName' => 'string',
            'labels' => 'string',
            'version' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**: 流程ID **取值范围**: 不涉及
    * name  **参数解释**: 流程名称 **取值范围**: 不涉及
    * description  **参数解释**: 流程的描述 **取值范围**: 不涉及
    * projectId  **参数解释**: 租户ID **取值范围**: 不涉及
    * ownerId  **参数解释**: 所有者ID **取值范围**: 不涉及
    * creatorId  **参数解释**: 创建者ID **取值范围**: 不涉及
    * creatorName  **参数解释**: 创建者的名称 **取值范围**: 不涉及
    * createTime  **参数解释**: 创建时间 **取值范围**: 不涉及
    * modifierId  **参数解释**: 更新者的ID **取值范围**: 不涉及
    * modifierName  **参数解释**: 更新者的名称 **取值范围**: 不涉及
    * updateTime  **参数解释**: 更新的时间 **取值范围**: 不涉及
    * editRole  **参数解释**: 编辑角色 **取值范围**: 不涉及
    * useRole  **参数解释**: 使用角色 **取值范围**: 不涉及
    * approveRole  **参数解释**: 审核角色 **取值范围**: 不涉及
    * enabled  **参数解释**: 是否已启用 **取值范围**: - true  已启用 - false 未启用
    * workspaceId  **参数解释**: 工作空间ID **取值范围**: 不涉及
    * versionId  **参数解释**: 流程激活版本ID **取值范围**: 不涉及
    * currentApprovalVersionId  **参数解释**: 当前待审核版本ID **取值范围**: 不涉及
    * currentRejectedVersionId  **参数解释**: 当前拒绝的版本ID **取值范围**: 不涉及
    * aopType  **参数解释**: 流程的类型 - NORMAL 通用 - SURVEY 调查 - HEMOSTASIS 止血 - EASE 缓解  **取值范围**: - NORMAL - SURVEY - HEMOSTASIS - EASE
    * engineType  **参数解释**: 引擎的类型 - public_engine 共享版  **取值范围**: - public_engine
    * dataclassId  **参数解释**: 数据类的ID **取值范围**: 不涉及
    * dataclassName  **参数解释**: 数据类的名称 **取值范围**: 不涉及
    * labels  **参数解释**: 流程实体类型 - IP IP - ACCOUNT 账号 - DOMAIN 域名  **取值范围**: - IP - ACCOUNT - DOMAIN
    * version  **参数解释**: 当前激活的流程的版本 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'projectId' => null,
        'ownerId' => null,
        'creatorId' => null,
        'creatorName' => null,
        'createTime' => null,
        'modifierId' => null,
        'modifierName' => null,
        'updateTime' => null,
        'editRole' => null,
        'useRole' => null,
        'approveRole' => null,
        'enabled' => null,
        'workspaceId' => null,
        'versionId' => null,
        'currentApprovalVersionId' => null,
        'currentRejectedVersionId' => null,
        'aopType' => null,
        'engineType' => null,
        'dataclassId' => null,
        'dataclassName' => null,
        'labels' => null,
        'version' => null
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
    * id  **参数解释**: 流程ID **取值范围**: 不涉及
    * name  **参数解释**: 流程名称 **取值范围**: 不涉及
    * description  **参数解释**: 流程的描述 **取值范围**: 不涉及
    * projectId  **参数解释**: 租户ID **取值范围**: 不涉及
    * ownerId  **参数解释**: 所有者ID **取值范围**: 不涉及
    * creatorId  **参数解释**: 创建者ID **取值范围**: 不涉及
    * creatorName  **参数解释**: 创建者的名称 **取值范围**: 不涉及
    * createTime  **参数解释**: 创建时间 **取值范围**: 不涉及
    * modifierId  **参数解释**: 更新者的ID **取值范围**: 不涉及
    * modifierName  **参数解释**: 更新者的名称 **取值范围**: 不涉及
    * updateTime  **参数解释**: 更新的时间 **取值范围**: 不涉及
    * editRole  **参数解释**: 编辑角色 **取值范围**: 不涉及
    * useRole  **参数解释**: 使用角色 **取值范围**: 不涉及
    * approveRole  **参数解释**: 审核角色 **取值范围**: 不涉及
    * enabled  **参数解释**: 是否已启用 **取值范围**: - true  已启用 - false 未启用
    * workspaceId  **参数解释**: 工作空间ID **取值范围**: 不涉及
    * versionId  **参数解释**: 流程激活版本ID **取值范围**: 不涉及
    * currentApprovalVersionId  **参数解释**: 当前待审核版本ID **取值范围**: 不涉及
    * currentRejectedVersionId  **参数解释**: 当前拒绝的版本ID **取值范围**: 不涉及
    * aopType  **参数解释**: 流程的类型 - NORMAL 通用 - SURVEY 调查 - HEMOSTASIS 止血 - EASE 缓解  **取值范围**: - NORMAL - SURVEY - HEMOSTASIS - EASE
    * engineType  **参数解释**: 引擎的类型 - public_engine 共享版  **取值范围**: - public_engine
    * dataclassId  **参数解释**: 数据类的ID **取值范围**: 不涉及
    * dataclassName  **参数解释**: 数据类的名称 **取值范围**: 不涉及
    * labels  **参数解释**: 流程实体类型 - IP IP - ACCOUNT 账号 - DOMAIN 域名  **取值范围**: - IP - ACCOUNT - DOMAIN
    * version  **参数解释**: 当前激活的流程的版本 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'projectId' => 'project_id',
            'ownerId' => 'owner_id',
            'creatorId' => 'creator_id',
            'creatorName' => 'creator_name',
            'createTime' => 'create_time',
            'modifierId' => 'modifier_id',
            'modifierName' => 'modifier_name',
            'updateTime' => 'update_time',
            'editRole' => 'edit_role',
            'useRole' => 'use_role',
            'approveRole' => 'approve_role',
            'enabled' => 'enabled',
            'workspaceId' => 'workspace_id',
            'versionId' => 'version_id',
            'currentApprovalVersionId' => 'current_approval_version_id',
            'currentRejectedVersionId' => 'current_rejected_version_id',
            'aopType' => 'aop_type',
            'engineType' => 'engine_type',
            'dataclassId' => 'dataclass_id',
            'dataclassName' => 'dataclass_name',
            'labels' => 'labels',
            'version' => 'version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**: 流程ID **取值范围**: 不涉及
    * name  **参数解释**: 流程名称 **取值范围**: 不涉及
    * description  **参数解释**: 流程的描述 **取值范围**: 不涉及
    * projectId  **参数解释**: 租户ID **取值范围**: 不涉及
    * ownerId  **参数解释**: 所有者ID **取值范围**: 不涉及
    * creatorId  **参数解释**: 创建者ID **取值范围**: 不涉及
    * creatorName  **参数解释**: 创建者的名称 **取值范围**: 不涉及
    * createTime  **参数解释**: 创建时间 **取值范围**: 不涉及
    * modifierId  **参数解释**: 更新者的ID **取值范围**: 不涉及
    * modifierName  **参数解释**: 更新者的名称 **取值范围**: 不涉及
    * updateTime  **参数解释**: 更新的时间 **取值范围**: 不涉及
    * editRole  **参数解释**: 编辑角色 **取值范围**: 不涉及
    * useRole  **参数解释**: 使用角色 **取值范围**: 不涉及
    * approveRole  **参数解释**: 审核角色 **取值范围**: 不涉及
    * enabled  **参数解释**: 是否已启用 **取值范围**: - true  已启用 - false 未启用
    * workspaceId  **参数解释**: 工作空间ID **取值范围**: 不涉及
    * versionId  **参数解释**: 流程激活版本ID **取值范围**: 不涉及
    * currentApprovalVersionId  **参数解释**: 当前待审核版本ID **取值范围**: 不涉及
    * currentRejectedVersionId  **参数解释**: 当前拒绝的版本ID **取值范围**: 不涉及
    * aopType  **参数解释**: 流程的类型 - NORMAL 通用 - SURVEY 调查 - HEMOSTASIS 止血 - EASE 缓解  **取值范围**: - NORMAL - SURVEY - HEMOSTASIS - EASE
    * engineType  **参数解释**: 引擎的类型 - public_engine 共享版  **取值范围**: - public_engine
    * dataclassId  **参数解释**: 数据类的ID **取值范围**: 不涉及
    * dataclassName  **参数解释**: 数据类的名称 **取值范围**: 不涉及
    * labels  **参数解释**: 流程实体类型 - IP IP - ACCOUNT 账号 - DOMAIN 域名  **取值范围**: - IP - ACCOUNT - DOMAIN
    * version  **参数解释**: 当前激活的流程的版本 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'projectId' => 'setProjectId',
            'ownerId' => 'setOwnerId',
            'creatorId' => 'setCreatorId',
            'creatorName' => 'setCreatorName',
            'createTime' => 'setCreateTime',
            'modifierId' => 'setModifierId',
            'modifierName' => 'setModifierName',
            'updateTime' => 'setUpdateTime',
            'editRole' => 'setEditRole',
            'useRole' => 'setUseRole',
            'approveRole' => 'setApproveRole',
            'enabled' => 'setEnabled',
            'workspaceId' => 'setWorkspaceId',
            'versionId' => 'setVersionId',
            'currentApprovalVersionId' => 'setCurrentApprovalVersionId',
            'currentRejectedVersionId' => 'setCurrentRejectedVersionId',
            'aopType' => 'setAopType',
            'engineType' => 'setEngineType',
            'dataclassId' => 'setDataclassId',
            'dataclassName' => 'setDataclassName',
            'labels' => 'setLabels',
            'version' => 'setVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**: 流程ID **取值范围**: 不涉及
    * name  **参数解释**: 流程名称 **取值范围**: 不涉及
    * description  **参数解释**: 流程的描述 **取值范围**: 不涉及
    * projectId  **参数解释**: 租户ID **取值范围**: 不涉及
    * ownerId  **参数解释**: 所有者ID **取值范围**: 不涉及
    * creatorId  **参数解释**: 创建者ID **取值范围**: 不涉及
    * creatorName  **参数解释**: 创建者的名称 **取值范围**: 不涉及
    * createTime  **参数解释**: 创建时间 **取值范围**: 不涉及
    * modifierId  **参数解释**: 更新者的ID **取值范围**: 不涉及
    * modifierName  **参数解释**: 更新者的名称 **取值范围**: 不涉及
    * updateTime  **参数解释**: 更新的时间 **取值范围**: 不涉及
    * editRole  **参数解释**: 编辑角色 **取值范围**: 不涉及
    * useRole  **参数解释**: 使用角色 **取值范围**: 不涉及
    * approveRole  **参数解释**: 审核角色 **取值范围**: 不涉及
    * enabled  **参数解释**: 是否已启用 **取值范围**: - true  已启用 - false 未启用
    * workspaceId  **参数解释**: 工作空间ID **取值范围**: 不涉及
    * versionId  **参数解释**: 流程激活版本ID **取值范围**: 不涉及
    * currentApprovalVersionId  **参数解释**: 当前待审核版本ID **取值范围**: 不涉及
    * currentRejectedVersionId  **参数解释**: 当前拒绝的版本ID **取值范围**: 不涉及
    * aopType  **参数解释**: 流程的类型 - NORMAL 通用 - SURVEY 调查 - HEMOSTASIS 止血 - EASE 缓解  **取值范围**: - NORMAL - SURVEY - HEMOSTASIS - EASE
    * engineType  **参数解释**: 引擎的类型 - public_engine 共享版  **取值范围**: - public_engine
    * dataclassId  **参数解释**: 数据类的ID **取值范围**: 不涉及
    * dataclassName  **参数解释**: 数据类的名称 **取值范围**: 不涉及
    * labels  **参数解释**: 流程实体类型 - IP IP - ACCOUNT 账号 - DOMAIN 域名  **取值范围**: - IP - ACCOUNT - DOMAIN
    * version  **参数解释**: 当前激活的流程的版本 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'projectId' => 'getProjectId',
            'ownerId' => 'getOwnerId',
            'creatorId' => 'getCreatorId',
            'creatorName' => 'getCreatorName',
            'createTime' => 'getCreateTime',
            'modifierId' => 'getModifierId',
            'modifierName' => 'getModifierName',
            'updateTime' => 'getUpdateTime',
            'editRole' => 'getEditRole',
            'useRole' => 'getUseRole',
            'approveRole' => 'getApproveRole',
            'enabled' => 'getEnabled',
            'workspaceId' => 'getWorkspaceId',
            'versionId' => 'getVersionId',
            'currentApprovalVersionId' => 'getCurrentApprovalVersionId',
            'currentRejectedVersionId' => 'getCurrentRejectedVersionId',
            'aopType' => 'getAopType',
            'engineType' => 'getEngineType',
            'dataclassId' => 'getDataclassId',
            'dataclassName' => 'getDataclassName',
            'labels' => 'getLabels',
            'version' => 'getVersion'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['ownerId'] = isset($data['ownerId']) ? $data['ownerId'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['modifierId'] = isset($data['modifierId']) ? $data['modifierId'] : null;
        $this->container['modifierName'] = isset($data['modifierName']) ? $data['modifierName'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['editRole'] = isset($data['editRole']) ? $data['editRole'] : null;
        $this->container['useRole'] = isset($data['useRole']) ? $data['useRole'] : null;
        $this->container['approveRole'] = isset($data['approveRole']) ? $data['approveRole'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['versionId'] = isset($data['versionId']) ? $data['versionId'] : null;
        $this->container['currentApprovalVersionId'] = isset($data['currentApprovalVersionId']) ? $data['currentApprovalVersionId'] : null;
        $this->container['currentRejectedVersionId'] = isset($data['currentRejectedVersionId']) ? $data['currentRejectedVersionId'] : null;
        $this->container['aopType'] = isset($data['aopType']) ? $data['aopType'] : null;
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['dataclassId'] = isset($data['dataclassId']) ? $data['dataclassId'] : null;
        $this->container['dataclassName'] = isset($data['dataclassName']) ? $data['dataclassName'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 512)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['ownerId']) && (mb_strlen($this->container['ownerId']) > 64)) {
                $invalidProperties[] = "invalid value for 'ownerId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['ownerId']) && (mb_strlen($this->container['ownerId']) < 32)) {
                $invalidProperties[] = "invalid value for 'ownerId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['creatorId']) && (mb_strlen($this->container['creatorId']) > 64)) {
                $invalidProperties[] = "invalid value for 'creatorId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['creatorId']) && (mb_strlen($this->container['creatorId']) < 32)) {
                $invalidProperties[] = "invalid value for 'creatorId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) > 64)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) < 1)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['modifierId']) && (mb_strlen($this->container['modifierId']) > 64)) {
                $invalidProperties[] = "invalid value for 'modifierId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['modifierId']) && (mb_strlen($this->container['modifierId']) < 32)) {
                $invalidProperties[] = "invalid value for 'modifierId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['modifierName']) && (mb_strlen($this->container['modifierName']) > 64)) {
                $invalidProperties[] = "invalid value for 'modifierName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['modifierName']) && (mb_strlen($this->container['modifierName']) < 1)) {
                $invalidProperties[] = "invalid value for 'modifierName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['editRole']) && (mb_strlen($this->container['editRole']) > 64)) {
                $invalidProperties[] = "invalid value for 'editRole', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['editRole']) && (mb_strlen($this->container['editRole']) < 32)) {
                $invalidProperties[] = "invalid value for 'editRole', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['useRole']) && (mb_strlen($this->container['useRole']) > 64)) {
                $invalidProperties[] = "invalid value for 'useRole', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['useRole']) && (mb_strlen($this->container['useRole']) < 32)) {
                $invalidProperties[] = "invalid value for 'useRole', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['approveRole']) && (mb_strlen($this->container['approveRole']) > 64)) {
                $invalidProperties[] = "invalid value for 'approveRole', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['approveRole']) && (mb_strlen($this->container['approveRole']) < 32)) {
                $invalidProperties[] = "invalid value for 'approveRole', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 32)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['versionId']) && (mb_strlen($this->container['versionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'versionId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['versionId']) && (mb_strlen($this->container['versionId']) < 32)) {
                $invalidProperties[] = "invalid value for 'versionId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['currentApprovalVersionId']) && (mb_strlen($this->container['currentApprovalVersionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'currentApprovalVersionId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['currentApprovalVersionId']) && (mb_strlen($this->container['currentApprovalVersionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'currentApprovalVersionId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['currentRejectedVersionId']) && (mb_strlen($this->container['currentRejectedVersionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'currentRejectedVersionId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['currentRejectedVersionId']) && (mb_strlen($this->container['currentRejectedVersionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'currentRejectedVersionId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['aopType']) && (mb_strlen($this->container['aopType']) > 64)) {
                $invalidProperties[] = "invalid value for 'aopType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['aopType']) && (mb_strlen($this->container['aopType']) < 1)) {
                $invalidProperties[] = "invalid value for 'aopType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['engineType']) && (mb_strlen($this->container['engineType']) > 64)) {
                $invalidProperties[] = "invalid value for 'engineType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['engineType']) && (mb_strlen($this->container['engineType']) < 1)) {
                $invalidProperties[] = "invalid value for 'engineType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dataclassId']) && (mb_strlen($this->container['dataclassId']) > 64)) {
                $invalidProperties[] = "invalid value for 'dataclassId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dataclassId']) && (mb_strlen($this->container['dataclassId']) < 1)) {
                $invalidProperties[] = "invalid value for 'dataclassId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dataclassName']) && (mb_strlen($this->container['dataclassName']) > 64)) {
                $invalidProperties[] = "invalid value for 'dataclassName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dataclassName']) && (mb_strlen($this->container['dataclassName']) < 1)) {
                $invalidProperties[] = "invalid value for 'dataclassName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['labels']) && (mb_strlen($this->container['labels']) > 64)) {
                $invalidProperties[] = "invalid value for 'labels', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['labels']) && (mb_strlen($this->container['labels']) < 0)) {
                $invalidProperties[] = "invalid value for 'labels', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 64)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 32)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 32.";
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
    *  **参数解释**: 流程ID **取值范围**: 不涉及
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
    * @param string|null $id **参数解释**: 流程ID **取值范围**: 不涉及
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
    *  **参数解释**: 流程名称 **取值范围**: 不涉及
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
    * @param string|null $name **参数解释**: 流程名称 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**: 流程的描述 **取值范围**: 不涉及
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
    * @param string|null $description **参数解释**: 流程的描述 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释**: 租户ID **取值范围**: 不涉及
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
    * @param string|null $projectId **参数解释**: 租户ID **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets ownerId
    *  **参数解释**: 所有者ID **取值范围**: 不涉及
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
    * @param string|null $ownerId **参数解释**: 所有者ID **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setOwnerId($ownerId)
    {
        $this->container['ownerId'] = $ownerId;
        return $this;
    }

    /**
    * Gets creatorId
    *  **参数解释**: 创建者ID **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
    * Sets creatorId
    *
    * @param string|null $creatorId **参数解释**: 创建者ID **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;
        return $this;
    }

    /**
    * Gets creatorName
    *  **参数解释**: 创建者的名称 **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getCreatorName()
    {
        return $this->container['creatorName'];
    }

    /**
    * Sets creatorName
    *
    * @param string|null $creatorName **参数解释**: 创建者的名称 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释**: 创建时间 **取值范围**: 不涉及
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
    * @param string|null $createTime **参数解释**: 创建时间 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets modifierId
    *  **参数解释**: 更新者的ID **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getModifierId()
    {
        return $this->container['modifierId'];
    }

    /**
    * Sets modifierId
    *
    * @param string|null $modifierId **参数解释**: 更新者的ID **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setModifierId($modifierId)
    {
        $this->container['modifierId'] = $modifierId;
        return $this;
    }

    /**
    * Gets modifierName
    *  **参数解释**: 更新者的名称 **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getModifierName()
    {
        return $this->container['modifierName'];
    }

    /**
    * Sets modifierName
    *
    * @param string|null $modifierName **参数解释**: 更新者的名称 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setModifierName($modifierName)
    {
        $this->container['modifierName'] = $modifierName;
        return $this;
    }

    /**
    * Gets updateTime
    *  **参数解释**: 更新的时间 **取值范围**: 不涉及
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
    * @param string|null $updateTime **参数解释**: 更新的时间 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets editRole
    *  **参数解释**: 编辑角色 **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getEditRole()
    {
        return $this->container['editRole'];
    }

    /**
    * Sets editRole
    *
    * @param string|null $editRole **参数解释**: 编辑角色 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setEditRole($editRole)
    {
        $this->container['editRole'] = $editRole;
        return $this;
    }

    /**
    * Gets useRole
    *  **参数解释**: 使用角色 **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getUseRole()
    {
        return $this->container['useRole'];
    }

    /**
    * Sets useRole
    *
    * @param string|null $useRole **参数解释**: 使用角色 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setUseRole($useRole)
    {
        $this->container['useRole'] = $useRole;
        return $this;
    }

    /**
    * Gets approveRole
    *  **参数解释**: 审核角色 **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getApproveRole()
    {
        return $this->container['approveRole'];
    }

    /**
    * Sets approveRole
    *
    * @param string|null $approveRole **参数解释**: 审核角色 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setApproveRole($approveRole)
    {
        $this->container['approveRole'] = $approveRole;
        return $this;
    }

    /**
    * Gets enabled
    *  **参数解释**: 是否已启用 **取值范围**: - true  已启用 - false 未启用
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled **参数解释**: 是否已启用 **取值范围**: - true  已启用 - false 未启用
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets workspaceId
    *  **参数解释**: 工作空间ID **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId **参数解释**: 工作空间ID **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets versionId
    *  **参数解释**: 流程激活版本ID **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getVersionId()
    {
        return $this->container['versionId'];
    }

    /**
    * Sets versionId
    *
    * @param string|null $versionId **参数解释**: 流程激活版本ID **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setVersionId($versionId)
    {
        $this->container['versionId'] = $versionId;
        return $this;
    }

    /**
    * Gets currentApprovalVersionId
    *  **参数解释**: 当前待审核版本ID **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getCurrentApprovalVersionId()
    {
        return $this->container['currentApprovalVersionId'];
    }

    /**
    * Sets currentApprovalVersionId
    *
    * @param string|null $currentApprovalVersionId **参数解释**: 当前待审核版本ID **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setCurrentApprovalVersionId($currentApprovalVersionId)
    {
        $this->container['currentApprovalVersionId'] = $currentApprovalVersionId;
        return $this;
    }

    /**
    * Gets currentRejectedVersionId
    *  **参数解释**: 当前拒绝的版本ID **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getCurrentRejectedVersionId()
    {
        return $this->container['currentRejectedVersionId'];
    }

    /**
    * Sets currentRejectedVersionId
    *
    * @param string|null $currentRejectedVersionId **参数解释**: 当前拒绝的版本ID **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setCurrentRejectedVersionId($currentRejectedVersionId)
    {
        $this->container['currentRejectedVersionId'] = $currentRejectedVersionId;
        return $this;
    }

    /**
    * Gets aopType
    *  **参数解释**: 流程的类型 - NORMAL 通用 - SURVEY 调查 - HEMOSTASIS 止血 - EASE 缓解  **取值范围**: - NORMAL - SURVEY - HEMOSTASIS - EASE
    *
    * @return string|null
    */
    public function getAopType()
    {
        return $this->container['aopType'];
    }

    /**
    * Sets aopType
    *
    * @param string|null $aopType **参数解释**: 流程的类型 - NORMAL 通用 - SURVEY 调查 - HEMOSTASIS 止血 - EASE 缓解  **取值范围**: - NORMAL - SURVEY - HEMOSTASIS - EASE
    *
    * @return $this
    */
    public function setAopType($aopType)
    {
        $this->container['aopType'] = $aopType;
        return $this;
    }

    /**
    * Gets engineType
    *  **参数解释**: 引擎的类型 - public_engine 共享版  **取值范围**: - public_engine
    *
    * @return string|null
    */
    public function getEngineType()
    {
        return $this->container['engineType'];
    }

    /**
    * Sets engineType
    *
    * @param string|null $engineType **参数解释**: 引擎的类型 - public_engine 共享版  **取值范围**: - public_engine
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
        return $this;
    }

    /**
    * Gets dataclassId
    *  **参数解释**: 数据类的ID **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getDataclassId()
    {
        return $this->container['dataclassId'];
    }

    /**
    * Sets dataclassId
    *
    * @param string|null $dataclassId **参数解释**: 数据类的ID **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setDataclassId($dataclassId)
    {
        $this->container['dataclassId'] = $dataclassId;
        return $this;
    }

    /**
    * Gets dataclassName
    *  **参数解释**: 数据类的名称 **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getDataclassName()
    {
        return $this->container['dataclassName'];
    }

    /**
    * Sets dataclassName
    *
    * @param string|null $dataclassName **参数解释**: 数据类的名称 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setDataclassName($dataclassName)
    {
        $this->container['dataclassName'] = $dataclassName;
        return $this;
    }

    /**
    * Gets labels
    *  **参数解释**: 流程实体类型 - IP IP - ACCOUNT 账号 - DOMAIN 域名  **取值范围**: - IP - ACCOUNT - DOMAIN
    *
    * @return string|null
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param string|null $labels **参数解释**: 流程实体类型 - IP IP - ACCOUNT 账号 - DOMAIN 域名  **取值范围**: - IP - ACCOUNT - DOMAIN
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释**: 当前激活的流程的版本 **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version **参数解释**: 当前激活的流程的版本 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
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

