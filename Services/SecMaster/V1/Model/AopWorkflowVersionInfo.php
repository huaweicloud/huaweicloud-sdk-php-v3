<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AopWorkflowVersionInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AopWorkflowVersionInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**: 流程版本ID **约束限制**: 不涉及
    * versionId  **参数解释**: 流程版本ID **约束限制**: 不涉及
    * name  **参数解释**: 流程版本名字 **约束限制**: 不涉及
    * aopworkflowId  **参数解释**: 流程ID **约束限制**: 不涉及
    * description  **参数解释**: 流程版本的描述 **取值范围**: 不涉及
    * projectId  **参数解释**: 租户的项目ID **约束限制**: 不涉及
    * ownerId  **参数解释**: 所有者ID **约束限制**: 不涉及
    * creatorId  **参数解释**: 创建者ID **取值范围**: 不涉及
    * creatorName  **参数解释**: 创建者的名称 **取值范围**: 不涉及
    * createTime  **参数解释**: 创建时间 **取值范围**: 不涉及
    * modifierId  **参数解释**: 更新者的ID **取值范围**: 不涉及
    * modifierName  **参数解释**: 更新者的名称 **取值范围**: 不涉及
    * updateTime  **参数解释**: 更新的时间 **取值范围**: 不涉及
    * enabled  **参数解释**: 是否已启用 **约束限制**: 不涉及         **取值范围**: - true  已启用 - false 未启用  **默认值**:  false
    * status  **参数解释**: 流程的状态 - pending_submit 草稿 - pending_approval 待审核 - publishing 发布中 - publish_failed 发布失败 - not_activated 未激活 - activated 已激活 - rejected 审核拒绝  **取值范围**: - pending_submit - pending_approval - publishing - publish_failed - not_activated - activated - rejected
    * version  **参数解释**: 当前流程的版本 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * taskconfig  **参数解释**: 流程拓扑图的参数配置 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * taskflow  **参数解释**: 流程的拓扑图的BASE64编码 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * taskflowType  **参数解释**: 流程的类型 **约束限制**: 不涉及         **取值范围**: - JSON  **默认值**:  不涉及
    * aopType  **参数解释**: 流程的类型 - NORMAL 通用 - SURVEY 调查 - HEMOSTASIS 止血 - EASE 缓解  **约束限制**: 不涉及         **取值范围**: - NORMAL - SURVEY - HEMOSTASIS - EASE  **默认值**:  不涉及
    * input  **参数解释**: 流程的输入 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * output  **参数解释**: 流程的输出 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * dataclassId  **参数解释**: 数据类的ID **取值范围**: 不涉及
    * dataclassName  **参数解释**: 数据类的名称 **取值范围**: 不涉及
    * workspaceId  **参数解释**: 工作空间ID **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'versionId' => 'string',
            'name' => 'string',
            'aopworkflowId' => 'string',
            'description' => 'string',
            'projectId' => 'string',
            'ownerId' => 'string',
            'creatorId' => 'string',
            'creatorName' => 'string',
            'createTime' => 'string',
            'modifierId' => 'string',
            'modifierName' => 'string',
            'updateTime' => 'string',
            'enabled' => 'bool',
            'status' => 'string',
            'version' => 'string',
            'taskconfig' => 'string',
            'taskflow' => 'string',
            'taskflowType' => 'string',
            'aopType' => 'string',
            'input' => 'string',
            'output' => 'string',
            'dataclassId' => 'string',
            'dataclassName' => 'string',
            'workspaceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**: 流程版本ID **约束限制**: 不涉及
    * versionId  **参数解释**: 流程版本ID **约束限制**: 不涉及
    * name  **参数解释**: 流程版本名字 **约束限制**: 不涉及
    * aopworkflowId  **参数解释**: 流程ID **约束限制**: 不涉及
    * description  **参数解释**: 流程版本的描述 **取值范围**: 不涉及
    * projectId  **参数解释**: 租户的项目ID **约束限制**: 不涉及
    * ownerId  **参数解释**: 所有者ID **约束限制**: 不涉及
    * creatorId  **参数解释**: 创建者ID **取值范围**: 不涉及
    * creatorName  **参数解释**: 创建者的名称 **取值范围**: 不涉及
    * createTime  **参数解释**: 创建时间 **取值范围**: 不涉及
    * modifierId  **参数解释**: 更新者的ID **取值范围**: 不涉及
    * modifierName  **参数解释**: 更新者的名称 **取值范围**: 不涉及
    * updateTime  **参数解释**: 更新的时间 **取值范围**: 不涉及
    * enabled  **参数解释**: 是否已启用 **约束限制**: 不涉及         **取值范围**: - true  已启用 - false 未启用  **默认值**:  false
    * status  **参数解释**: 流程的状态 - pending_submit 草稿 - pending_approval 待审核 - publishing 发布中 - publish_failed 发布失败 - not_activated 未激活 - activated 已激活 - rejected 审核拒绝  **取值范围**: - pending_submit - pending_approval - publishing - publish_failed - not_activated - activated - rejected
    * version  **参数解释**: 当前流程的版本 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * taskconfig  **参数解释**: 流程拓扑图的参数配置 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * taskflow  **参数解释**: 流程的拓扑图的BASE64编码 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * taskflowType  **参数解释**: 流程的类型 **约束限制**: 不涉及         **取值范围**: - JSON  **默认值**:  不涉及
    * aopType  **参数解释**: 流程的类型 - NORMAL 通用 - SURVEY 调查 - HEMOSTASIS 止血 - EASE 缓解  **约束限制**: 不涉及         **取值范围**: - NORMAL - SURVEY - HEMOSTASIS - EASE  **默认值**:  不涉及
    * input  **参数解释**: 流程的输入 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * output  **参数解释**: 流程的输出 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * dataclassId  **参数解释**: 数据类的ID **取值范围**: 不涉及
    * dataclassName  **参数解释**: 数据类的名称 **取值范围**: 不涉及
    * workspaceId  **参数解释**: 工作空间ID **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'versionId' => null,
        'name' => null,
        'aopworkflowId' => null,
        'description' => null,
        'projectId' => null,
        'ownerId' => null,
        'creatorId' => null,
        'creatorName' => null,
        'createTime' => null,
        'modifierId' => null,
        'modifierName' => null,
        'updateTime' => null,
        'enabled' => null,
        'status' => null,
        'version' => null,
        'taskconfig' => null,
        'taskflow' => null,
        'taskflowType' => null,
        'aopType' => null,
        'input' => null,
        'output' => null,
        'dataclassId' => null,
        'dataclassName' => null,
        'workspaceId' => null
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
    * id  **参数解释**: 流程版本ID **约束限制**: 不涉及
    * versionId  **参数解释**: 流程版本ID **约束限制**: 不涉及
    * name  **参数解释**: 流程版本名字 **约束限制**: 不涉及
    * aopworkflowId  **参数解释**: 流程ID **约束限制**: 不涉及
    * description  **参数解释**: 流程版本的描述 **取值范围**: 不涉及
    * projectId  **参数解释**: 租户的项目ID **约束限制**: 不涉及
    * ownerId  **参数解释**: 所有者ID **约束限制**: 不涉及
    * creatorId  **参数解释**: 创建者ID **取值范围**: 不涉及
    * creatorName  **参数解释**: 创建者的名称 **取值范围**: 不涉及
    * createTime  **参数解释**: 创建时间 **取值范围**: 不涉及
    * modifierId  **参数解释**: 更新者的ID **取值范围**: 不涉及
    * modifierName  **参数解释**: 更新者的名称 **取值范围**: 不涉及
    * updateTime  **参数解释**: 更新的时间 **取值范围**: 不涉及
    * enabled  **参数解释**: 是否已启用 **约束限制**: 不涉及         **取值范围**: - true  已启用 - false 未启用  **默认值**:  false
    * status  **参数解释**: 流程的状态 - pending_submit 草稿 - pending_approval 待审核 - publishing 发布中 - publish_failed 发布失败 - not_activated 未激活 - activated 已激活 - rejected 审核拒绝  **取值范围**: - pending_submit - pending_approval - publishing - publish_failed - not_activated - activated - rejected
    * version  **参数解释**: 当前流程的版本 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * taskconfig  **参数解释**: 流程拓扑图的参数配置 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * taskflow  **参数解释**: 流程的拓扑图的BASE64编码 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * taskflowType  **参数解释**: 流程的类型 **约束限制**: 不涉及         **取值范围**: - JSON  **默认值**:  不涉及
    * aopType  **参数解释**: 流程的类型 - NORMAL 通用 - SURVEY 调查 - HEMOSTASIS 止血 - EASE 缓解  **约束限制**: 不涉及         **取值范围**: - NORMAL - SURVEY - HEMOSTASIS - EASE  **默认值**:  不涉及
    * input  **参数解释**: 流程的输入 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * output  **参数解释**: 流程的输出 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * dataclassId  **参数解释**: 数据类的ID **取值范围**: 不涉及
    * dataclassName  **参数解释**: 数据类的名称 **取值范围**: 不涉及
    * workspaceId  **参数解释**: 工作空间ID **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'versionId' => 'version_id',
            'name' => 'name',
            'aopworkflowId' => 'aopworkflow_id',
            'description' => 'description',
            'projectId' => 'project_id',
            'ownerId' => 'owner_id',
            'creatorId' => 'creator_id',
            'creatorName' => 'creator_name',
            'createTime' => 'create_time',
            'modifierId' => 'modifier_id',
            'modifierName' => 'modifier_name',
            'updateTime' => 'update_time',
            'enabled' => 'enabled',
            'status' => 'status',
            'version' => 'version',
            'taskconfig' => 'taskconfig',
            'taskflow' => 'taskflow',
            'taskflowType' => 'taskflow_type',
            'aopType' => 'aop_type',
            'input' => 'input',
            'output' => 'output',
            'dataclassId' => 'dataclass_id',
            'dataclassName' => 'dataclass_name',
            'workspaceId' => 'workspace_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**: 流程版本ID **约束限制**: 不涉及
    * versionId  **参数解释**: 流程版本ID **约束限制**: 不涉及
    * name  **参数解释**: 流程版本名字 **约束限制**: 不涉及
    * aopworkflowId  **参数解释**: 流程ID **约束限制**: 不涉及
    * description  **参数解释**: 流程版本的描述 **取值范围**: 不涉及
    * projectId  **参数解释**: 租户的项目ID **约束限制**: 不涉及
    * ownerId  **参数解释**: 所有者ID **约束限制**: 不涉及
    * creatorId  **参数解释**: 创建者ID **取值范围**: 不涉及
    * creatorName  **参数解释**: 创建者的名称 **取值范围**: 不涉及
    * createTime  **参数解释**: 创建时间 **取值范围**: 不涉及
    * modifierId  **参数解释**: 更新者的ID **取值范围**: 不涉及
    * modifierName  **参数解释**: 更新者的名称 **取值范围**: 不涉及
    * updateTime  **参数解释**: 更新的时间 **取值范围**: 不涉及
    * enabled  **参数解释**: 是否已启用 **约束限制**: 不涉及         **取值范围**: - true  已启用 - false 未启用  **默认值**:  false
    * status  **参数解释**: 流程的状态 - pending_submit 草稿 - pending_approval 待审核 - publishing 发布中 - publish_failed 发布失败 - not_activated 未激活 - activated 已激活 - rejected 审核拒绝  **取值范围**: - pending_submit - pending_approval - publishing - publish_failed - not_activated - activated - rejected
    * version  **参数解释**: 当前流程的版本 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * taskconfig  **参数解释**: 流程拓扑图的参数配置 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * taskflow  **参数解释**: 流程的拓扑图的BASE64编码 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * taskflowType  **参数解释**: 流程的类型 **约束限制**: 不涉及         **取值范围**: - JSON  **默认值**:  不涉及
    * aopType  **参数解释**: 流程的类型 - NORMAL 通用 - SURVEY 调查 - HEMOSTASIS 止血 - EASE 缓解  **约束限制**: 不涉及         **取值范围**: - NORMAL - SURVEY - HEMOSTASIS - EASE  **默认值**:  不涉及
    * input  **参数解释**: 流程的输入 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * output  **参数解释**: 流程的输出 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * dataclassId  **参数解释**: 数据类的ID **取值范围**: 不涉及
    * dataclassName  **参数解释**: 数据类的名称 **取值范围**: 不涉及
    * workspaceId  **参数解释**: 工作空间ID **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'versionId' => 'setVersionId',
            'name' => 'setName',
            'aopworkflowId' => 'setAopworkflowId',
            'description' => 'setDescription',
            'projectId' => 'setProjectId',
            'ownerId' => 'setOwnerId',
            'creatorId' => 'setCreatorId',
            'creatorName' => 'setCreatorName',
            'createTime' => 'setCreateTime',
            'modifierId' => 'setModifierId',
            'modifierName' => 'setModifierName',
            'updateTime' => 'setUpdateTime',
            'enabled' => 'setEnabled',
            'status' => 'setStatus',
            'version' => 'setVersion',
            'taskconfig' => 'setTaskconfig',
            'taskflow' => 'setTaskflow',
            'taskflowType' => 'setTaskflowType',
            'aopType' => 'setAopType',
            'input' => 'setInput',
            'output' => 'setOutput',
            'dataclassId' => 'setDataclassId',
            'dataclassName' => 'setDataclassName',
            'workspaceId' => 'setWorkspaceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**: 流程版本ID **约束限制**: 不涉及
    * versionId  **参数解释**: 流程版本ID **约束限制**: 不涉及
    * name  **参数解释**: 流程版本名字 **约束限制**: 不涉及
    * aopworkflowId  **参数解释**: 流程ID **约束限制**: 不涉及
    * description  **参数解释**: 流程版本的描述 **取值范围**: 不涉及
    * projectId  **参数解释**: 租户的项目ID **约束限制**: 不涉及
    * ownerId  **参数解释**: 所有者ID **约束限制**: 不涉及
    * creatorId  **参数解释**: 创建者ID **取值范围**: 不涉及
    * creatorName  **参数解释**: 创建者的名称 **取值范围**: 不涉及
    * createTime  **参数解释**: 创建时间 **取值范围**: 不涉及
    * modifierId  **参数解释**: 更新者的ID **取值范围**: 不涉及
    * modifierName  **参数解释**: 更新者的名称 **取值范围**: 不涉及
    * updateTime  **参数解释**: 更新的时间 **取值范围**: 不涉及
    * enabled  **参数解释**: 是否已启用 **约束限制**: 不涉及         **取值范围**: - true  已启用 - false 未启用  **默认值**:  false
    * status  **参数解释**: 流程的状态 - pending_submit 草稿 - pending_approval 待审核 - publishing 发布中 - publish_failed 发布失败 - not_activated 未激活 - activated 已激活 - rejected 审核拒绝  **取值范围**: - pending_submit - pending_approval - publishing - publish_failed - not_activated - activated - rejected
    * version  **参数解释**: 当前流程的版本 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * taskconfig  **参数解释**: 流程拓扑图的参数配置 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * taskflow  **参数解释**: 流程的拓扑图的BASE64编码 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * taskflowType  **参数解释**: 流程的类型 **约束限制**: 不涉及         **取值范围**: - JSON  **默认值**:  不涉及
    * aopType  **参数解释**: 流程的类型 - NORMAL 通用 - SURVEY 调查 - HEMOSTASIS 止血 - EASE 缓解  **约束限制**: 不涉及         **取值范围**: - NORMAL - SURVEY - HEMOSTASIS - EASE  **默认值**:  不涉及
    * input  **参数解释**: 流程的输入 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * output  **参数解释**: 流程的输出 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * dataclassId  **参数解释**: 数据类的ID **取值范围**: 不涉及
    * dataclassName  **参数解释**: 数据类的名称 **取值范围**: 不涉及
    * workspaceId  **参数解释**: 工作空间ID **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'versionId' => 'getVersionId',
            'name' => 'getName',
            'aopworkflowId' => 'getAopworkflowId',
            'description' => 'getDescription',
            'projectId' => 'getProjectId',
            'ownerId' => 'getOwnerId',
            'creatorId' => 'getCreatorId',
            'creatorName' => 'getCreatorName',
            'createTime' => 'getCreateTime',
            'modifierId' => 'getModifierId',
            'modifierName' => 'getModifierName',
            'updateTime' => 'getUpdateTime',
            'enabled' => 'getEnabled',
            'status' => 'getStatus',
            'version' => 'getVersion',
            'taskconfig' => 'getTaskconfig',
            'taskflow' => 'getTaskflow',
            'taskflowType' => 'getTaskflowType',
            'aopType' => 'getAopType',
            'input' => 'getInput',
            'output' => 'getOutput',
            'dataclassId' => 'getDataclassId',
            'dataclassName' => 'getDataclassName',
            'workspaceId' => 'getWorkspaceId'
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
        $this->container['versionId'] = isset($data['versionId']) ? $data['versionId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['aopworkflowId'] = isset($data['aopworkflowId']) ? $data['aopworkflowId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['ownerId'] = isset($data['ownerId']) ? $data['ownerId'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['modifierId'] = isset($data['modifierId']) ? $data['modifierId'] : null;
        $this->container['modifierName'] = isset($data['modifierName']) ? $data['modifierName'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['taskconfig'] = isset($data['taskconfig']) ? $data['taskconfig'] : null;
        $this->container['taskflow'] = isset($data['taskflow']) ? $data['taskflow'] : null;
        $this->container['taskflowType'] = isset($data['taskflowType']) ? $data['taskflowType'] : null;
        $this->container['aopType'] = isset($data['aopType']) ? $data['aopType'] : null;
        $this->container['input'] = isset($data['input']) ? $data['input'] : null;
        $this->container['output'] = isset($data['output']) ? $data['output'] : null;
        $this->container['dataclassId'] = isset($data['dataclassId']) ? $data['dataclassId'] : null;
        $this->container['dataclassName'] = isset($data['dataclassName']) ? $data['dataclassName'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
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
            if (!is_null($this->container['versionId']) && (mb_strlen($this->container['versionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'versionId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['versionId']) && (mb_strlen($this->container['versionId']) < 32)) {
                $invalidProperties[] = "invalid value for 'versionId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['aopworkflowId']) && (mb_strlen($this->container['aopworkflowId']) > 64)) {
                $invalidProperties[] = "invalid value for 'aopworkflowId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['aopworkflowId']) && (mb_strlen($this->container['aopworkflowId']) < 32)) {
                $invalidProperties[] = "invalid value for 'aopworkflowId', the character length must be bigger than or equal to 32.";
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
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 64)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 0)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['taskconfig']) && (mb_strlen($this->container['taskconfig']) > 65535)) {
                $invalidProperties[] = "invalid value for 'taskconfig', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['taskconfig']) && (mb_strlen($this->container['taskconfig']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskconfig', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['taskflow']) && (mb_strlen($this->container['taskflow']) > 65535)) {
                $invalidProperties[] = "invalid value for 'taskflow', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['taskflow']) && (mb_strlen($this->container['taskflow']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskflow', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['taskflowType']) && (mb_strlen($this->container['taskflowType']) > 64)) {
                $invalidProperties[] = "invalid value for 'taskflowType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['taskflowType']) && (mb_strlen($this->container['taskflowType']) < 0)) {
                $invalidProperties[] = "invalid value for 'taskflowType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['aopType']) && (mb_strlen($this->container['aopType']) > 64)) {
                $invalidProperties[] = "invalid value for 'aopType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['aopType']) && (mb_strlen($this->container['aopType']) < 1)) {
                $invalidProperties[] = "invalid value for 'aopType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['input']) && (mb_strlen($this->container['input']) > 65535)) {
                $invalidProperties[] = "invalid value for 'input', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['input']) && (mb_strlen($this->container['input']) < 0)) {
                $invalidProperties[] = "invalid value for 'input', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['output']) && (mb_strlen($this->container['output']) > 65535)) {
                $invalidProperties[] = "invalid value for 'output', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['output']) && (mb_strlen($this->container['output']) < 0)) {
                $invalidProperties[] = "invalid value for 'output', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 32)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 32.";
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
    *  **参数解释**: 流程版本ID **约束限制**: 不涉及
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
    * @param string|null $id **参数解释**: 流程版本ID **约束限制**: 不涉及
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets versionId
    *  **参数解释**: 流程版本ID **约束限制**: 不涉及
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
    * @param string|null $versionId **参数解释**: 流程版本ID **约束限制**: 不涉及
    *
    * @return $this
    */
    public function setVersionId($versionId)
    {
        $this->container['versionId'] = $versionId;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**: 流程版本名字 **约束限制**: 不涉及
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
    * @param string|null $name **参数解释**: 流程版本名字 **约束限制**: 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets aopworkflowId
    *  **参数解释**: 流程ID **约束限制**: 不涉及
    *
    * @return string|null
    */
    public function getAopworkflowId()
    {
        return $this->container['aopworkflowId'];
    }

    /**
    * Sets aopworkflowId
    *
    * @param string|null $aopworkflowId **参数解释**: 流程ID **约束限制**: 不涉及
    *
    * @return $this
    */
    public function setAopworkflowId($aopworkflowId)
    {
        $this->container['aopworkflowId'] = $aopworkflowId;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**: 流程版本的描述 **取值范围**: 不涉及
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
    * @param string|null $description **参数解释**: 流程版本的描述 **取值范围**: 不涉及
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
    *  **参数解释**: 租户的项目ID **约束限制**: 不涉及
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
    * @param string|null $projectId **参数解释**: 租户的项目ID **约束限制**: 不涉及
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
    *  **参数解释**: 所有者ID **约束限制**: 不涉及
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
    * @param string|null $ownerId **参数解释**: 所有者ID **约束限制**: 不涉及
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
    * Gets enabled
    *  **参数解释**: 是否已启用 **约束限制**: 不涉及         **取值范围**: - true  已启用 - false 未启用  **默认值**:  false
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
    * @param bool|null $enabled **参数解释**: 是否已启用 **约束限制**: 不涉及         **取值范围**: - true  已启用 - false 未启用  **默认值**:  false
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**: 流程的状态 - pending_submit 草稿 - pending_approval 待审核 - publishing 发布中 - publish_failed 发布失败 - not_activated 未激活 - activated 已激活 - rejected 审核拒绝  **取值范围**: - pending_submit - pending_approval - publishing - publish_failed - not_activated - activated - rejected
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释**: 流程的状态 - pending_submit 草稿 - pending_approval 待审核 - publishing 发布中 - publish_failed 发布失败 - not_activated 未激活 - activated 已激活 - rejected 审核拒绝  **取值范围**: - pending_submit - pending_approval - publishing - publish_failed - not_activated - activated - rejected
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释**: 当前流程的版本 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
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
    * @param string|null $version **参数解释**: 当前流程的版本 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets taskconfig
    *  **参数解释**: 流程拓扑图的参数配置 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return string|null
    */
    public function getTaskconfig()
    {
        return $this->container['taskconfig'];
    }

    /**
    * Sets taskconfig
    *
    * @param string|null $taskconfig **参数解释**: 流程拓扑图的参数配置 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return $this
    */
    public function setTaskconfig($taskconfig)
    {
        $this->container['taskconfig'] = $taskconfig;
        return $this;
    }

    /**
    * Gets taskflow
    *  **参数解释**: 流程的拓扑图的BASE64编码 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return string|null
    */
    public function getTaskflow()
    {
        return $this->container['taskflow'];
    }

    /**
    * Sets taskflow
    *
    * @param string|null $taskflow **参数解释**: 流程的拓扑图的BASE64编码 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return $this
    */
    public function setTaskflow($taskflow)
    {
        $this->container['taskflow'] = $taskflow;
        return $this;
    }

    /**
    * Gets taskflowType
    *  **参数解释**: 流程的类型 **约束限制**: 不涉及         **取值范围**: - JSON  **默认值**:  不涉及
    *
    * @return string|null
    */
    public function getTaskflowType()
    {
        return $this->container['taskflowType'];
    }

    /**
    * Sets taskflowType
    *
    * @param string|null $taskflowType **参数解释**: 流程的类型 **约束限制**: 不涉及         **取值范围**: - JSON  **默认值**:  不涉及
    *
    * @return $this
    */
    public function setTaskflowType($taskflowType)
    {
        $this->container['taskflowType'] = $taskflowType;
        return $this;
    }

    /**
    * Gets aopType
    *  **参数解释**: 流程的类型 - NORMAL 通用 - SURVEY 调查 - HEMOSTASIS 止血 - EASE 缓解  **约束限制**: 不涉及         **取值范围**: - NORMAL - SURVEY - HEMOSTASIS - EASE  **默认值**:  不涉及
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
    * @param string|null $aopType **参数解释**: 流程的类型 - NORMAL 通用 - SURVEY 调查 - HEMOSTASIS 止血 - EASE 缓解  **约束限制**: 不涉及         **取值范围**: - NORMAL - SURVEY - HEMOSTASIS - EASE  **默认值**:  不涉及
    *
    * @return $this
    */
    public function setAopType($aopType)
    {
        $this->container['aopType'] = $aopType;
        return $this;
    }

    /**
    * Gets input
    *  **参数解释**: 流程的输入 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return string|null
    */
    public function getInput()
    {
        return $this->container['input'];
    }

    /**
    * Sets input
    *
    * @param string|null $input **参数解释**: 流程的输入 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return $this
    */
    public function setInput($input)
    {
        $this->container['input'] = $input;
        return $this;
    }

    /**
    * Gets output
    *  **参数解释**: 流程的输出 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return string|null
    */
    public function getOutput()
    {
        return $this->container['output'];
    }

    /**
    * Sets output
    *
    * @param string|null $output **参数解释**: 流程的输出 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return $this
    */
    public function setOutput($output)
    {
        $this->container['output'] = $output;
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

