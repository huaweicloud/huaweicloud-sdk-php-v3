<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**: 待办任务的ID **取值范围**: 不涉及
    * aopengineTaskId  **参数解释**: 待办任务的引擎任务Id **取值范围**: 不涉及.
    * name  **参数解释**: 待办任务的名称 **取值范围**: 不涉及
    * projectId  **参数解释**: 待办任务的项目Id **取值范围**: 不涉及
    * description  **参数解释**: 待办任务的描述 **取值范围**: 不涉及
    * createTime  **参数解释**: 待办的创建时间 **取值范围**: 不涉及
    * creatorId  **参数解释**: 待办的创建者ID **取值范围**: system
    * creatorName  **参数解释**: 待办的创建者名字 **取值范围**: 不涉及
    * updateTime  **参数解释**: 待办的更新时间 **取值范围**: 不涉及
    * modifierId  **参数解释**: 待办的修改者ID **取值范围**: system
    * modifierName  **参数解释**: 待办的修改者名字 **取值范围**: 不涉及
    * approveuserId  **参数解释**: 待办支持的审核人用户ID **取值范围**: 不涉及
    * approveuserName  **参数解释**: 待办支持的审核人用户名字 **取值范围**: 不涉及
    * approver  **参数解释**: 待办审核人用户名称 **取值范围**: 不涉及
    * notes  **参数解释**: 待办的备注 **取值范围**: 不涉及
    * definitionKey  **参数解释**: 待办的节点流程拓扑图的KEY **取值范围**: 不涉及
    * note  **参数解释**: 待办的备注 **取值范围**: 不涉及
    * dueDate  **参数解释**: 待办的超期时间 **取值范围**: 默认为创建时间+15天
    * actionId  **参数解释**: 待办的节点的流程或剧本ID 当 business_type是WORKFLOWPUBLISH或者WORKFLOWNODEAPPROVE，此时为流程ID 当 business_type是PLAYBOOKPUBLISH或者PLAYBOOKNODEAPPROVE，此时为剧本ID **取值范围**: 不涉及
    * actionVersionId  **参数解释**: 待办的节点的流程或剧本版本ID 当 business_type是WORKFLOWPUBLISH或者WORKFLOWNODEAPPROVE，此时为流程版本ID 当 business_type是PLAYBOOKPUBLISH或者PLAYBOOKNODEAPPROVE，此时为剧本版本ID  **取值范围**: 不涉及
    * actionInstanceId  **参数解释**: 待办的节点的流程或剧本的实例ID 当 business_type是WORKFLOWNODEAPPROVE，此时为流程实例ID 当 business_type是PLAYBOOKNODEAPPROVE，此时为剧本实例ID  **取值范围**: 不涉及
    * workspaceId  **参数解释**: 待办任务的空间ID **取值范围**: 不涉及
    * reviewComments  **参数解释**: 待办任务审核意见 **取值范围**: 不涉及
    * viewParameters  **参数解释**: 待办任务查看参数 **取值范围**: 不涉及
    * handleParameters  **参数解释**: 待办任务的人工处理参数 **取值范围**: 不涉及
    * businessType  **参数解释**: 待办的业务类型 - WORKFLOWPUBLISH 流程发布 - WORKFLOWNODEAPPROVE 流程节点审核 - PLAYBOOKPUBLISH 剧本发布 - PLAYBOOKNODEAPPROVE 剧本节点审核  **取值范围**: - WORKFLOWPUBLISH - WORKFLOWNODEAPPROVE - PLAYBOOKPUBLISH - PLAYBOOKNODEAPPROVE
    * relatedObject  **参数解释**: 待办任务的关联的流程 or 剧本名称 **取值范围**: 不涉及
    * attachmentIdList  **参数解释**: 待办节点的附件ID列表 **取值范围**: 不涉及
    * comments  **参数解释**: 待办节点的待办评论 **取值范围**: 不涉及
    * status  **参数解释**: 待办的业务类型 - waiting  待处理 - canceled 已取消 - finished 已完成  **取值范围**: - waiting - canceled - finished
    * dueHandle  **参数解释**: 待办的到期处理方式 - CONTINUE 继续执行 - INTERRUPT 终止  **取值范围**: - CONTINUE - INTERRUPT
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'aopengineTaskId' => 'string',
            'name' => 'string',
            'projectId' => 'string',
            'description' => 'string',
            'createTime' => 'string',
            'creatorId' => 'string',
            'creatorName' => 'string',
            'updateTime' => 'string',
            'modifierId' => 'string',
            'modifierName' => 'string',
            'approveuserId' => 'string',
            'approveuserName' => 'string',
            'approver' => 'string',
            'notes' => 'string',
            'definitionKey' => 'string',
            'note' => 'string',
            'dueDate' => 'string',
            'actionId' => 'string',
            'actionVersionId' => 'string',
            'actionInstanceId' => 'string',
            'workspaceId' => 'string',
            'reviewComments' => 'string',
            'viewParameters' => 'string',
            'handleParameters' => 'string',
            'businessType' => 'string',
            'relatedObject' => 'string',
            'attachmentIdList' => 'string[]',
            'comments' => '\HuaweiCloud\SDK\SecMaster\V1\Model\TaskCommentInfo[]',
            'status' => 'string',
            'dueHandle' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**: 待办任务的ID **取值范围**: 不涉及
    * aopengineTaskId  **参数解释**: 待办任务的引擎任务Id **取值范围**: 不涉及.
    * name  **参数解释**: 待办任务的名称 **取值范围**: 不涉及
    * projectId  **参数解释**: 待办任务的项目Id **取值范围**: 不涉及
    * description  **参数解释**: 待办任务的描述 **取值范围**: 不涉及
    * createTime  **参数解释**: 待办的创建时间 **取值范围**: 不涉及
    * creatorId  **参数解释**: 待办的创建者ID **取值范围**: system
    * creatorName  **参数解释**: 待办的创建者名字 **取值范围**: 不涉及
    * updateTime  **参数解释**: 待办的更新时间 **取值范围**: 不涉及
    * modifierId  **参数解释**: 待办的修改者ID **取值范围**: system
    * modifierName  **参数解释**: 待办的修改者名字 **取值范围**: 不涉及
    * approveuserId  **参数解释**: 待办支持的审核人用户ID **取值范围**: 不涉及
    * approveuserName  **参数解释**: 待办支持的审核人用户名字 **取值范围**: 不涉及
    * approver  **参数解释**: 待办审核人用户名称 **取值范围**: 不涉及
    * notes  **参数解释**: 待办的备注 **取值范围**: 不涉及
    * definitionKey  **参数解释**: 待办的节点流程拓扑图的KEY **取值范围**: 不涉及
    * note  **参数解释**: 待办的备注 **取值范围**: 不涉及
    * dueDate  **参数解释**: 待办的超期时间 **取值范围**: 默认为创建时间+15天
    * actionId  **参数解释**: 待办的节点的流程或剧本ID 当 business_type是WORKFLOWPUBLISH或者WORKFLOWNODEAPPROVE，此时为流程ID 当 business_type是PLAYBOOKPUBLISH或者PLAYBOOKNODEAPPROVE，此时为剧本ID **取值范围**: 不涉及
    * actionVersionId  **参数解释**: 待办的节点的流程或剧本版本ID 当 business_type是WORKFLOWPUBLISH或者WORKFLOWNODEAPPROVE，此时为流程版本ID 当 business_type是PLAYBOOKPUBLISH或者PLAYBOOKNODEAPPROVE，此时为剧本版本ID  **取值范围**: 不涉及
    * actionInstanceId  **参数解释**: 待办的节点的流程或剧本的实例ID 当 business_type是WORKFLOWNODEAPPROVE，此时为流程实例ID 当 business_type是PLAYBOOKNODEAPPROVE，此时为剧本实例ID  **取值范围**: 不涉及
    * workspaceId  **参数解释**: 待办任务的空间ID **取值范围**: 不涉及
    * reviewComments  **参数解释**: 待办任务审核意见 **取值范围**: 不涉及
    * viewParameters  **参数解释**: 待办任务查看参数 **取值范围**: 不涉及
    * handleParameters  **参数解释**: 待办任务的人工处理参数 **取值范围**: 不涉及
    * businessType  **参数解释**: 待办的业务类型 - WORKFLOWPUBLISH 流程发布 - WORKFLOWNODEAPPROVE 流程节点审核 - PLAYBOOKPUBLISH 剧本发布 - PLAYBOOKNODEAPPROVE 剧本节点审核  **取值范围**: - WORKFLOWPUBLISH - WORKFLOWNODEAPPROVE - PLAYBOOKPUBLISH - PLAYBOOKNODEAPPROVE
    * relatedObject  **参数解释**: 待办任务的关联的流程 or 剧本名称 **取值范围**: 不涉及
    * attachmentIdList  **参数解释**: 待办节点的附件ID列表 **取值范围**: 不涉及
    * comments  **参数解释**: 待办节点的待办评论 **取值范围**: 不涉及
    * status  **参数解释**: 待办的业务类型 - waiting  待处理 - canceled 已取消 - finished 已完成  **取值范围**: - waiting - canceled - finished
    * dueHandle  **参数解释**: 待办的到期处理方式 - CONTINUE 继续执行 - INTERRUPT 终止  **取值范围**: - CONTINUE - INTERRUPT
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'aopengineTaskId' => null,
        'name' => null,
        'projectId' => null,
        'description' => null,
        'createTime' => null,
        'creatorId' => null,
        'creatorName' => null,
        'updateTime' => null,
        'modifierId' => null,
        'modifierName' => null,
        'approveuserId' => null,
        'approveuserName' => null,
        'approver' => null,
        'notes' => null,
        'definitionKey' => null,
        'note' => null,
        'dueDate' => null,
        'actionId' => null,
        'actionVersionId' => null,
        'actionInstanceId' => null,
        'workspaceId' => null,
        'reviewComments' => null,
        'viewParameters' => null,
        'handleParameters' => null,
        'businessType' => null,
        'relatedObject' => null,
        'attachmentIdList' => null,
        'comments' => null,
        'status' => null,
        'dueHandle' => null
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
    * id  **参数解释**: 待办任务的ID **取值范围**: 不涉及
    * aopengineTaskId  **参数解释**: 待办任务的引擎任务Id **取值范围**: 不涉及.
    * name  **参数解释**: 待办任务的名称 **取值范围**: 不涉及
    * projectId  **参数解释**: 待办任务的项目Id **取值范围**: 不涉及
    * description  **参数解释**: 待办任务的描述 **取值范围**: 不涉及
    * createTime  **参数解释**: 待办的创建时间 **取值范围**: 不涉及
    * creatorId  **参数解释**: 待办的创建者ID **取值范围**: system
    * creatorName  **参数解释**: 待办的创建者名字 **取值范围**: 不涉及
    * updateTime  **参数解释**: 待办的更新时间 **取值范围**: 不涉及
    * modifierId  **参数解释**: 待办的修改者ID **取值范围**: system
    * modifierName  **参数解释**: 待办的修改者名字 **取值范围**: 不涉及
    * approveuserId  **参数解释**: 待办支持的审核人用户ID **取值范围**: 不涉及
    * approveuserName  **参数解释**: 待办支持的审核人用户名字 **取值范围**: 不涉及
    * approver  **参数解释**: 待办审核人用户名称 **取值范围**: 不涉及
    * notes  **参数解释**: 待办的备注 **取值范围**: 不涉及
    * definitionKey  **参数解释**: 待办的节点流程拓扑图的KEY **取值范围**: 不涉及
    * note  **参数解释**: 待办的备注 **取值范围**: 不涉及
    * dueDate  **参数解释**: 待办的超期时间 **取值范围**: 默认为创建时间+15天
    * actionId  **参数解释**: 待办的节点的流程或剧本ID 当 business_type是WORKFLOWPUBLISH或者WORKFLOWNODEAPPROVE，此时为流程ID 当 business_type是PLAYBOOKPUBLISH或者PLAYBOOKNODEAPPROVE，此时为剧本ID **取值范围**: 不涉及
    * actionVersionId  **参数解释**: 待办的节点的流程或剧本版本ID 当 business_type是WORKFLOWPUBLISH或者WORKFLOWNODEAPPROVE，此时为流程版本ID 当 business_type是PLAYBOOKPUBLISH或者PLAYBOOKNODEAPPROVE，此时为剧本版本ID  **取值范围**: 不涉及
    * actionInstanceId  **参数解释**: 待办的节点的流程或剧本的实例ID 当 business_type是WORKFLOWNODEAPPROVE，此时为流程实例ID 当 business_type是PLAYBOOKNODEAPPROVE，此时为剧本实例ID  **取值范围**: 不涉及
    * workspaceId  **参数解释**: 待办任务的空间ID **取值范围**: 不涉及
    * reviewComments  **参数解释**: 待办任务审核意见 **取值范围**: 不涉及
    * viewParameters  **参数解释**: 待办任务查看参数 **取值范围**: 不涉及
    * handleParameters  **参数解释**: 待办任务的人工处理参数 **取值范围**: 不涉及
    * businessType  **参数解释**: 待办的业务类型 - WORKFLOWPUBLISH 流程发布 - WORKFLOWNODEAPPROVE 流程节点审核 - PLAYBOOKPUBLISH 剧本发布 - PLAYBOOKNODEAPPROVE 剧本节点审核  **取值范围**: - WORKFLOWPUBLISH - WORKFLOWNODEAPPROVE - PLAYBOOKPUBLISH - PLAYBOOKNODEAPPROVE
    * relatedObject  **参数解释**: 待办任务的关联的流程 or 剧本名称 **取值范围**: 不涉及
    * attachmentIdList  **参数解释**: 待办节点的附件ID列表 **取值范围**: 不涉及
    * comments  **参数解释**: 待办节点的待办评论 **取值范围**: 不涉及
    * status  **参数解释**: 待办的业务类型 - waiting  待处理 - canceled 已取消 - finished 已完成  **取值范围**: - waiting - canceled - finished
    * dueHandle  **参数解释**: 待办的到期处理方式 - CONTINUE 继续执行 - INTERRUPT 终止  **取值范围**: - CONTINUE - INTERRUPT
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'aopengineTaskId' => 'aopengine_task_id',
            'name' => 'name',
            'projectId' => 'project_id',
            'description' => 'description',
            'createTime' => 'create_time',
            'creatorId' => 'creator_id',
            'creatorName' => 'creator_name',
            'updateTime' => 'update_time',
            'modifierId' => 'modifier_id',
            'modifierName' => 'modifier_name',
            'approveuserId' => 'approveuser_id',
            'approveuserName' => 'approveuser_name',
            'approver' => 'approver',
            'notes' => 'notes',
            'definitionKey' => 'definition_key',
            'note' => 'note',
            'dueDate' => 'due_date',
            'actionId' => 'action_id',
            'actionVersionId' => 'action_version_id',
            'actionInstanceId' => 'action_instance_id',
            'workspaceId' => 'workspace_id',
            'reviewComments' => 'review_comments',
            'viewParameters' => 'view_parameters',
            'handleParameters' => 'handle_parameters',
            'businessType' => 'business_type',
            'relatedObject' => 'related_object',
            'attachmentIdList' => 'attachment_id_list',
            'comments' => 'comments',
            'status' => 'status',
            'dueHandle' => 'due_handle'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**: 待办任务的ID **取值范围**: 不涉及
    * aopengineTaskId  **参数解释**: 待办任务的引擎任务Id **取值范围**: 不涉及.
    * name  **参数解释**: 待办任务的名称 **取值范围**: 不涉及
    * projectId  **参数解释**: 待办任务的项目Id **取值范围**: 不涉及
    * description  **参数解释**: 待办任务的描述 **取值范围**: 不涉及
    * createTime  **参数解释**: 待办的创建时间 **取值范围**: 不涉及
    * creatorId  **参数解释**: 待办的创建者ID **取值范围**: system
    * creatorName  **参数解释**: 待办的创建者名字 **取值范围**: 不涉及
    * updateTime  **参数解释**: 待办的更新时间 **取值范围**: 不涉及
    * modifierId  **参数解释**: 待办的修改者ID **取值范围**: system
    * modifierName  **参数解释**: 待办的修改者名字 **取值范围**: 不涉及
    * approveuserId  **参数解释**: 待办支持的审核人用户ID **取值范围**: 不涉及
    * approveuserName  **参数解释**: 待办支持的审核人用户名字 **取值范围**: 不涉及
    * approver  **参数解释**: 待办审核人用户名称 **取值范围**: 不涉及
    * notes  **参数解释**: 待办的备注 **取值范围**: 不涉及
    * definitionKey  **参数解释**: 待办的节点流程拓扑图的KEY **取值范围**: 不涉及
    * note  **参数解释**: 待办的备注 **取值范围**: 不涉及
    * dueDate  **参数解释**: 待办的超期时间 **取值范围**: 默认为创建时间+15天
    * actionId  **参数解释**: 待办的节点的流程或剧本ID 当 business_type是WORKFLOWPUBLISH或者WORKFLOWNODEAPPROVE，此时为流程ID 当 business_type是PLAYBOOKPUBLISH或者PLAYBOOKNODEAPPROVE，此时为剧本ID **取值范围**: 不涉及
    * actionVersionId  **参数解释**: 待办的节点的流程或剧本版本ID 当 business_type是WORKFLOWPUBLISH或者WORKFLOWNODEAPPROVE，此时为流程版本ID 当 business_type是PLAYBOOKPUBLISH或者PLAYBOOKNODEAPPROVE，此时为剧本版本ID  **取值范围**: 不涉及
    * actionInstanceId  **参数解释**: 待办的节点的流程或剧本的实例ID 当 business_type是WORKFLOWNODEAPPROVE，此时为流程实例ID 当 business_type是PLAYBOOKNODEAPPROVE，此时为剧本实例ID  **取值范围**: 不涉及
    * workspaceId  **参数解释**: 待办任务的空间ID **取值范围**: 不涉及
    * reviewComments  **参数解释**: 待办任务审核意见 **取值范围**: 不涉及
    * viewParameters  **参数解释**: 待办任务查看参数 **取值范围**: 不涉及
    * handleParameters  **参数解释**: 待办任务的人工处理参数 **取值范围**: 不涉及
    * businessType  **参数解释**: 待办的业务类型 - WORKFLOWPUBLISH 流程发布 - WORKFLOWNODEAPPROVE 流程节点审核 - PLAYBOOKPUBLISH 剧本发布 - PLAYBOOKNODEAPPROVE 剧本节点审核  **取值范围**: - WORKFLOWPUBLISH - WORKFLOWNODEAPPROVE - PLAYBOOKPUBLISH - PLAYBOOKNODEAPPROVE
    * relatedObject  **参数解释**: 待办任务的关联的流程 or 剧本名称 **取值范围**: 不涉及
    * attachmentIdList  **参数解释**: 待办节点的附件ID列表 **取值范围**: 不涉及
    * comments  **参数解释**: 待办节点的待办评论 **取值范围**: 不涉及
    * status  **参数解释**: 待办的业务类型 - waiting  待处理 - canceled 已取消 - finished 已完成  **取值范围**: - waiting - canceled - finished
    * dueHandle  **参数解释**: 待办的到期处理方式 - CONTINUE 继续执行 - INTERRUPT 终止  **取值范围**: - CONTINUE - INTERRUPT
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'aopengineTaskId' => 'setAopengineTaskId',
            'name' => 'setName',
            'projectId' => 'setProjectId',
            'description' => 'setDescription',
            'createTime' => 'setCreateTime',
            'creatorId' => 'setCreatorId',
            'creatorName' => 'setCreatorName',
            'updateTime' => 'setUpdateTime',
            'modifierId' => 'setModifierId',
            'modifierName' => 'setModifierName',
            'approveuserId' => 'setApproveuserId',
            'approveuserName' => 'setApproveuserName',
            'approver' => 'setApprover',
            'notes' => 'setNotes',
            'definitionKey' => 'setDefinitionKey',
            'note' => 'setNote',
            'dueDate' => 'setDueDate',
            'actionId' => 'setActionId',
            'actionVersionId' => 'setActionVersionId',
            'actionInstanceId' => 'setActionInstanceId',
            'workspaceId' => 'setWorkspaceId',
            'reviewComments' => 'setReviewComments',
            'viewParameters' => 'setViewParameters',
            'handleParameters' => 'setHandleParameters',
            'businessType' => 'setBusinessType',
            'relatedObject' => 'setRelatedObject',
            'attachmentIdList' => 'setAttachmentIdList',
            'comments' => 'setComments',
            'status' => 'setStatus',
            'dueHandle' => 'setDueHandle'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**: 待办任务的ID **取值范围**: 不涉及
    * aopengineTaskId  **参数解释**: 待办任务的引擎任务Id **取值范围**: 不涉及.
    * name  **参数解释**: 待办任务的名称 **取值范围**: 不涉及
    * projectId  **参数解释**: 待办任务的项目Id **取值范围**: 不涉及
    * description  **参数解释**: 待办任务的描述 **取值范围**: 不涉及
    * createTime  **参数解释**: 待办的创建时间 **取值范围**: 不涉及
    * creatorId  **参数解释**: 待办的创建者ID **取值范围**: system
    * creatorName  **参数解释**: 待办的创建者名字 **取值范围**: 不涉及
    * updateTime  **参数解释**: 待办的更新时间 **取值范围**: 不涉及
    * modifierId  **参数解释**: 待办的修改者ID **取值范围**: system
    * modifierName  **参数解释**: 待办的修改者名字 **取值范围**: 不涉及
    * approveuserId  **参数解释**: 待办支持的审核人用户ID **取值范围**: 不涉及
    * approveuserName  **参数解释**: 待办支持的审核人用户名字 **取值范围**: 不涉及
    * approver  **参数解释**: 待办审核人用户名称 **取值范围**: 不涉及
    * notes  **参数解释**: 待办的备注 **取值范围**: 不涉及
    * definitionKey  **参数解释**: 待办的节点流程拓扑图的KEY **取值范围**: 不涉及
    * note  **参数解释**: 待办的备注 **取值范围**: 不涉及
    * dueDate  **参数解释**: 待办的超期时间 **取值范围**: 默认为创建时间+15天
    * actionId  **参数解释**: 待办的节点的流程或剧本ID 当 business_type是WORKFLOWPUBLISH或者WORKFLOWNODEAPPROVE，此时为流程ID 当 business_type是PLAYBOOKPUBLISH或者PLAYBOOKNODEAPPROVE，此时为剧本ID **取值范围**: 不涉及
    * actionVersionId  **参数解释**: 待办的节点的流程或剧本版本ID 当 business_type是WORKFLOWPUBLISH或者WORKFLOWNODEAPPROVE，此时为流程版本ID 当 business_type是PLAYBOOKPUBLISH或者PLAYBOOKNODEAPPROVE，此时为剧本版本ID  **取值范围**: 不涉及
    * actionInstanceId  **参数解释**: 待办的节点的流程或剧本的实例ID 当 business_type是WORKFLOWNODEAPPROVE，此时为流程实例ID 当 business_type是PLAYBOOKNODEAPPROVE，此时为剧本实例ID  **取值范围**: 不涉及
    * workspaceId  **参数解释**: 待办任务的空间ID **取值范围**: 不涉及
    * reviewComments  **参数解释**: 待办任务审核意见 **取值范围**: 不涉及
    * viewParameters  **参数解释**: 待办任务查看参数 **取值范围**: 不涉及
    * handleParameters  **参数解释**: 待办任务的人工处理参数 **取值范围**: 不涉及
    * businessType  **参数解释**: 待办的业务类型 - WORKFLOWPUBLISH 流程发布 - WORKFLOWNODEAPPROVE 流程节点审核 - PLAYBOOKPUBLISH 剧本发布 - PLAYBOOKNODEAPPROVE 剧本节点审核  **取值范围**: - WORKFLOWPUBLISH - WORKFLOWNODEAPPROVE - PLAYBOOKPUBLISH - PLAYBOOKNODEAPPROVE
    * relatedObject  **参数解释**: 待办任务的关联的流程 or 剧本名称 **取值范围**: 不涉及
    * attachmentIdList  **参数解释**: 待办节点的附件ID列表 **取值范围**: 不涉及
    * comments  **参数解释**: 待办节点的待办评论 **取值范围**: 不涉及
    * status  **参数解释**: 待办的业务类型 - waiting  待处理 - canceled 已取消 - finished 已完成  **取值范围**: - waiting - canceled - finished
    * dueHandle  **参数解释**: 待办的到期处理方式 - CONTINUE 继续执行 - INTERRUPT 终止  **取值范围**: - CONTINUE - INTERRUPT
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'aopengineTaskId' => 'getAopengineTaskId',
            'name' => 'getName',
            'projectId' => 'getProjectId',
            'description' => 'getDescription',
            'createTime' => 'getCreateTime',
            'creatorId' => 'getCreatorId',
            'creatorName' => 'getCreatorName',
            'updateTime' => 'getUpdateTime',
            'modifierId' => 'getModifierId',
            'modifierName' => 'getModifierName',
            'approveuserId' => 'getApproveuserId',
            'approveuserName' => 'getApproveuserName',
            'approver' => 'getApprover',
            'notes' => 'getNotes',
            'definitionKey' => 'getDefinitionKey',
            'note' => 'getNote',
            'dueDate' => 'getDueDate',
            'actionId' => 'getActionId',
            'actionVersionId' => 'getActionVersionId',
            'actionInstanceId' => 'getActionInstanceId',
            'workspaceId' => 'getWorkspaceId',
            'reviewComments' => 'getReviewComments',
            'viewParameters' => 'getViewParameters',
            'handleParameters' => 'getHandleParameters',
            'businessType' => 'getBusinessType',
            'relatedObject' => 'getRelatedObject',
            'attachmentIdList' => 'getAttachmentIdList',
            'comments' => 'getComments',
            'status' => 'getStatus',
            'dueHandle' => 'getDueHandle'
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
        $this->container['aopengineTaskId'] = isset($data['aopengineTaskId']) ? $data['aopengineTaskId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['modifierId'] = isset($data['modifierId']) ? $data['modifierId'] : null;
        $this->container['modifierName'] = isset($data['modifierName']) ? $data['modifierName'] : null;
        $this->container['approveuserId'] = isset($data['approveuserId']) ? $data['approveuserId'] : null;
        $this->container['approveuserName'] = isset($data['approveuserName']) ? $data['approveuserName'] : null;
        $this->container['approver'] = isset($data['approver']) ? $data['approver'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['definitionKey'] = isset($data['definitionKey']) ? $data['definitionKey'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['dueDate'] = isset($data['dueDate']) ? $data['dueDate'] : null;
        $this->container['actionId'] = isset($data['actionId']) ? $data['actionId'] : null;
        $this->container['actionVersionId'] = isset($data['actionVersionId']) ? $data['actionVersionId'] : null;
        $this->container['actionInstanceId'] = isset($data['actionInstanceId']) ? $data['actionInstanceId'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['reviewComments'] = isset($data['reviewComments']) ? $data['reviewComments'] : null;
        $this->container['viewParameters'] = isset($data['viewParameters']) ? $data['viewParameters'] : null;
        $this->container['handleParameters'] = isset($data['handleParameters']) ? $data['handleParameters'] : null;
        $this->container['businessType'] = isset($data['businessType']) ? $data['businessType'] : null;
        $this->container['relatedObject'] = isset($data['relatedObject']) ? $data['relatedObject'] : null;
        $this->container['attachmentIdList'] = isset($data['attachmentIdList']) ? $data['attachmentIdList'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['dueHandle'] = isset($data['dueHandle']) ? $data['dueHandle'] : null;
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
            if (!is_null($this->container['aopengineTaskId']) && (mb_strlen($this->container['aopengineTaskId']) > 64)) {
                $invalidProperties[] = "invalid value for 'aopengineTaskId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['aopengineTaskId']) && (mb_strlen($this->container['aopengineTaskId']) < 32)) {
                $invalidProperties[] = "invalid value for 'aopengineTaskId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['creatorId']) && (mb_strlen($this->container['creatorId']) > 64)) {
                $invalidProperties[] = "invalid value for 'creatorId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['creatorId']) && (mb_strlen($this->container['creatorId']) < 1)) {
                $invalidProperties[] = "invalid value for 'creatorId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) > 64)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) < 1)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['modifierId']) && (mb_strlen($this->container['modifierId']) > 64)) {
                $invalidProperties[] = "invalid value for 'modifierId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['modifierId']) && (mb_strlen($this->container['modifierId']) < 1)) {
                $invalidProperties[] = "invalid value for 'modifierId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['modifierName']) && (mb_strlen($this->container['modifierName']) > 64)) {
                $invalidProperties[] = "invalid value for 'modifierName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['modifierName']) && (mb_strlen($this->container['modifierName']) < 1)) {
                $invalidProperties[] = "invalid value for 'modifierName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['approveuserId']) && (mb_strlen($this->container['approveuserId']) > 256)) {
                $invalidProperties[] = "invalid value for 'approveuserId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['approveuserId']) && (mb_strlen($this->container['approveuserId']) < 1)) {
                $invalidProperties[] = "invalid value for 'approveuserId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['approveuserName']) && (mb_strlen($this->container['approveuserName']) > 256)) {
                $invalidProperties[] = "invalid value for 'approveuserName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['approveuserName']) && (mb_strlen($this->container['approveuserName']) < 1)) {
                $invalidProperties[] = "invalid value for 'approveuserName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['approver']) && (mb_strlen($this->container['approver']) > 256)) {
                $invalidProperties[] = "invalid value for 'approver', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['approver']) && (mb_strlen($this->container['approver']) < 1)) {
                $invalidProperties[] = "invalid value for 'approver', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['notes']) && (mb_strlen($this->container['notes']) > 256)) {
                $invalidProperties[] = "invalid value for 'notes', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['notes']) && (mb_strlen($this->container['notes']) < 0)) {
                $invalidProperties[] = "invalid value for 'notes', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['definitionKey']) && (mb_strlen($this->container['definitionKey']) > 64)) {
                $invalidProperties[] = "invalid value for 'definitionKey', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['definitionKey']) && (mb_strlen($this->container['definitionKey']) < 32)) {
                $invalidProperties[] = "invalid value for 'definitionKey', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['note']) && (mb_strlen($this->container['note']) > 256)) {
                $invalidProperties[] = "invalid value for 'note', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['note']) && (mb_strlen($this->container['note']) < 1)) {
                $invalidProperties[] = "invalid value for 'note', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dueDate']) && (mb_strlen($this->container['dueDate']) > 64)) {
                $invalidProperties[] = "invalid value for 'dueDate', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dueDate']) && (mb_strlen($this->container['dueDate']) < 1)) {
                $invalidProperties[] = "invalid value for 'dueDate', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['actionId']) && (mb_strlen($this->container['actionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'actionId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['actionId']) && (mb_strlen($this->container['actionId']) < 32)) {
                $invalidProperties[] = "invalid value for 'actionId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['actionVersionId']) && (mb_strlen($this->container['actionVersionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'actionVersionId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['actionVersionId']) && (mb_strlen($this->container['actionVersionId']) < 32)) {
                $invalidProperties[] = "invalid value for 'actionVersionId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['actionInstanceId']) && (mb_strlen($this->container['actionInstanceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'actionInstanceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['actionInstanceId']) && (mb_strlen($this->container['actionInstanceId']) < 32)) {
                $invalidProperties[] = "invalid value for 'actionInstanceId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 256)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['reviewComments']) && (mb_strlen($this->container['reviewComments']) > 256)) {
                $invalidProperties[] = "invalid value for 'reviewComments', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['reviewComments']) && (mb_strlen($this->container['reviewComments']) < 1)) {
                $invalidProperties[] = "invalid value for 'reviewComments', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['viewParameters']) && (mb_strlen($this->container['viewParameters']) > 256)) {
                $invalidProperties[] = "invalid value for 'viewParameters', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['viewParameters']) && (mb_strlen($this->container['viewParameters']) < 1)) {
                $invalidProperties[] = "invalid value for 'viewParameters', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['handleParameters']) && (mb_strlen($this->container['handleParameters']) > 256)) {
                $invalidProperties[] = "invalid value for 'handleParameters', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['handleParameters']) && (mb_strlen($this->container['handleParameters']) < 1)) {
                $invalidProperties[] = "invalid value for 'handleParameters', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['businessType']) && (mb_strlen($this->container['businessType']) > 64)) {
                $invalidProperties[] = "invalid value for 'businessType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['businessType']) && (mb_strlen($this->container['businessType']) < 1)) {
                $invalidProperties[] = "invalid value for 'businessType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['relatedObject']) && (mb_strlen($this->container['relatedObject']) > 256)) {
                $invalidProperties[] = "invalid value for 'relatedObject', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['relatedObject']) && (mb_strlen($this->container['relatedObject']) < 1)) {
                $invalidProperties[] = "invalid value for 'relatedObject', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dueHandle']) && (mb_strlen($this->container['dueHandle']) > 64)) {
                $invalidProperties[] = "invalid value for 'dueHandle', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dueHandle']) && (mb_strlen($this->container['dueHandle']) < 1)) {
                $invalidProperties[] = "invalid value for 'dueHandle', the character length must be bigger than or equal to 1.";
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
    *  **参数解释**: 待办任务的ID **取值范围**: 不涉及
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
    * @param string|null $id **参数解释**: 待办任务的ID **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets aopengineTaskId
    *  **参数解释**: 待办任务的引擎任务Id **取值范围**: 不涉及.
    *
    * @return string|null
    */
    public function getAopengineTaskId()
    {
        return $this->container['aopengineTaskId'];
    }

    /**
    * Sets aopengineTaskId
    *
    * @param string|null $aopengineTaskId **参数解释**: 待办任务的引擎任务Id **取值范围**: 不涉及.
    *
    * @return $this
    */
    public function setAopengineTaskId($aopengineTaskId)
    {
        $this->container['aopengineTaskId'] = $aopengineTaskId;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**: 待办任务的名称 **取值范围**: 不涉及
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
    * @param string|null $name **参数解释**: 待办任务的名称 **取值范围**: 不涉及
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
    *  **参数解释**: 待办任务的项目Id **取值范围**: 不涉及
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
    * @param string|null $projectId **参数解释**: 待办任务的项目Id **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**: 待办任务的描述 **取值范围**: 不涉及
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
    * @param string|null $description **参数解释**: 待办任务的描述 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释**: 待办的创建时间 **取值范围**: 不涉及
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
    * @param string|null $createTime **参数解释**: 待办的创建时间 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets creatorId
    *  **参数解释**: 待办的创建者ID **取值范围**: system
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
    * @param string|null $creatorId **参数解释**: 待办的创建者ID **取值范围**: system
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
    *  **参数解释**: 待办的创建者名字 **取值范围**: 不涉及
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
    * @param string|null $creatorName **参数解释**: 待办的创建者名字 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets updateTime
    *  **参数解释**: 待办的更新时间 **取值范围**: 不涉及
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
    * @param string|null $updateTime **参数解释**: 待办的更新时间 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets modifierId
    *  **参数解释**: 待办的修改者ID **取值范围**: system
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
    * @param string|null $modifierId **参数解释**: 待办的修改者ID **取值范围**: system
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
    *  **参数解释**: 待办的修改者名字 **取值范围**: 不涉及
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
    * @param string|null $modifierName **参数解释**: 待办的修改者名字 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setModifierName($modifierName)
    {
        $this->container['modifierName'] = $modifierName;
        return $this;
    }

    /**
    * Gets approveuserId
    *  **参数解释**: 待办支持的审核人用户ID **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getApproveuserId()
    {
        return $this->container['approveuserId'];
    }

    /**
    * Sets approveuserId
    *
    * @param string|null $approveuserId **参数解释**: 待办支持的审核人用户ID **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setApproveuserId($approveuserId)
    {
        $this->container['approveuserId'] = $approveuserId;
        return $this;
    }

    /**
    * Gets approveuserName
    *  **参数解释**: 待办支持的审核人用户名字 **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getApproveuserName()
    {
        return $this->container['approveuserName'];
    }

    /**
    * Sets approveuserName
    *
    * @param string|null $approveuserName **参数解释**: 待办支持的审核人用户名字 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setApproveuserName($approveuserName)
    {
        $this->container['approveuserName'] = $approveuserName;
        return $this;
    }

    /**
    * Gets approver
    *  **参数解释**: 待办审核人用户名称 **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getApprover()
    {
        return $this->container['approver'];
    }

    /**
    * Sets approver
    *
    * @param string|null $approver **参数解释**: 待办审核人用户名称 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setApprover($approver)
    {
        $this->container['approver'] = $approver;
        return $this;
    }

    /**
    * Gets notes
    *  **参数解释**: 待办的备注 **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
    * Sets notes
    *
    * @param string|null $notes **参数解释**: 待办的备注 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;
        return $this;
    }

    /**
    * Gets definitionKey
    *  **参数解释**: 待办的节点流程拓扑图的KEY **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getDefinitionKey()
    {
        return $this->container['definitionKey'];
    }

    /**
    * Sets definitionKey
    *
    * @param string|null $definitionKey **参数解释**: 待办的节点流程拓扑图的KEY **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setDefinitionKey($definitionKey)
    {
        $this->container['definitionKey'] = $definitionKey;
        return $this;
    }

    /**
    * Gets note
    *  **参数解释**: 待办的备注 **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
    * Sets note
    *
    * @param string|null $note **参数解释**: 待办的备注 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setNote($note)
    {
        $this->container['note'] = $note;
        return $this;
    }

    /**
    * Gets dueDate
    *  **参数解释**: 待办的超期时间 **取值范围**: 默认为创建时间+15天
    *
    * @return string|null
    */
    public function getDueDate()
    {
        return $this->container['dueDate'];
    }

    /**
    * Sets dueDate
    *
    * @param string|null $dueDate **参数解释**: 待办的超期时间 **取值范围**: 默认为创建时间+15天
    *
    * @return $this
    */
    public function setDueDate($dueDate)
    {
        $this->container['dueDate'] = $dueDate;
        return $this;
    }

    /**
    * Gets actionId
    *  **参数解释**: 待办的节点的流程或剧本ID 当 business_type是WORKFLOWPUBLISH或者WORKFLOWNODEAPPROVE，此时为流程ID 当 business_type是PLAYBOOKPUBLISH或者PLAYBOOKNODEAPPROVE，此时为剧本ID **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getActionId()
    {
        return $this->container['actionId'];
    }

    /**
    * Sets actionId
    *
    * @param string|null $actionId **参数解释**: 待办的节点的流程或剧本ID 当 business_type是WORKFLOWPUBLISH或者WORKFLOWNODEAPPROVE，此时为流程ID 当 business_type是PLAYBOOKPUBLISH或者PLAYBOOKNODEAPPROVE，此时为剧本ID **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setActionId($actionId)
    {
        $this->container['actionId'] = $actionId;
        return $this;
    }

    /**
    * Gets actionVersionId
    *  **参数解释**: 待办的节点的流程或剧本版本ID 当 business_type是WORKFLOWPUBLISH或者WORKFLOWNODEAPPROVE，此时为流程版本ID 当 business_type是PLAYBOOKPUBLISH或者PLAYBOOKNODEAPPROVE，此时为剧本版本ID  **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getActionVersionId()
    {
        return $this->container['actionVersionId'];
    }

    /**
    * Sets actionVersionId
    *
    * @param string|null $actionVersionId **参数解释**: 待办的节点的流程或剧本版本ID 当 business_type是WORKFLOWPUBLISH或者WORKFLOWNODEAPPROVE，此时为流程版本ID 当 business_type是PLAYBOOKPUBLISH或者PLAYBOOKNODEAPPROVE，此时为剧本版本ID  **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setActionVersionId($actionVersionId)
    {
        $this->container['actionVersionId'] = $actionVersionId;
        return $this;
    }

    /**
    * Gets actionInstanceId
    *  **参数解释**: 待办的节点的流程或剧本的实例ID 当 business_type是WORKFLOWNODEAPPROVE，此时为流程实例ID 当 business_type是PLAYBOOKNODEAPPROVE，此时为剧本实例ID  **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getActionInstanceId()
    {
        return $this->container['actionInstanceId'];
    }

    /**
    * Sets actionInstanceId
    *
    * @param string|null $actionInstanceId **参数解释**: 待办的节点的流程或剧本的实例ID 当 business_type是WORKFLOWNODEAPPROVE，此时为流程实例ID 当 business_type是PLAYBOOKNODEAPPROVE，此时为剧本实例ID  **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setActionInstanceId($actionInstanceId)
    {
        $this->container['actionInstanceId'] = $actionInstanceId;
        return $this;
    }

    /**
    * Gets workspaceId
    *  **参数解释**: 待办任务的空间ID **取值范围**: 不涉及
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
    * @param string|null $workspaceId **参数解释**: 待办任务的空间ID **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets reviewComments
    *  **参数解释**: 待办任务审核意见 **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getReviewComments()
    {
        return $this->container['reviewComments'];
    }

    /**
    * Sets reviewComments
    *
    * @param string|null $reviewComments **参数解释**: 待办任务审核意见 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setReviewComments($reviewComments)
    {
        $this->container['reviewComments'] = $reviewComments;
        return $this;
    }

    /**
    * Gets viewParameters
    *  **参数解释**: 待办任务查看参数 **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getViewParameters()
    {
        return $this->container['viewParameters'];
    }

    /**
    * Sets viewParameters
    *
    * @param string|null $viewParameters **参数解释**: 待办任务查看参数 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setViewParameters($viewParameters)
    {
        $this->container['viewParameters'] = $viewParameters;
        return $this;
    }

    /**
    * Gets handleParameters
    *  **参数解释**: 待办任务的人工处理参数 **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getHandleParameters()
    {
        return $this->container['handleParameters'];
    }

    /**
    * Sets handleParameters
    *
    * @param string|null $handleParameters **参数解释**: 待办任务的人工处理参数 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setHandleParameters($handleParameters)
    {
        $this->container['handleParameters'] = $handleParameters;
        return $this;
    }

    /**
    * Gets businessType
    *  **参数解释**: 待办的业务类型 - WORKFLOWPUBLISH 流程发布 - WORKFLOWNODEAPPROVE 流程节点审核 - PLAYBOOKPUBLISH 剧本发布 - PLAYBOOKNODEAPPROVE 剧本节点审核  **取值范围**: - WORKFLOWPUBLISH - WORKFLOWNODEAPPROVE - PLAYBOOKPUBLISH - PLAYBOOKNODEAPPROVE
    *
    * @return string|null
    */
    public function getBusinessType()
    {
        return $this->container['businessType'];
    }

    /**
    * Sets businessType
    *
    * @param string|null $businessType **参数解释**: 待办的业务类型 - WORKFLOWPUBLISH 流程发布 - WORKFLOWNODEAPPROVE 流程节点审核 - PLAYBOOKPUBLISH 剧本发布 - PLAYBOOKNODEAPPROVE 剧本节点审核  **取值范围**: - WORKFLOWPUBLISH - WORKFLOWNODEAPPROVE - PLAYBOOKPUBLISH - PLAYBOOKNODEAPPROVE
    *
    * @return $this
    */
    public function setBusinessType($businessType)
    {
        $this->container['businessType'] = $businessType;
        return $this;
    }

    /**
    * Gets relatedObject
    *  **参数解释**: 待办任务的关联的流程 or 剧本名称 **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getRelatedObject()
    {
        return $this->container['relatedObject'];
    }

    /**
    * Sets relatedObject
    *
    * @param string|null $relatedObject **参数解释**: 待办任务的关联的流程 or 剧本名称 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setRelatedObject($relatedObject)
    {
        $this->container['relatedObject'] = $relatedObject;
        return $this;
    }

    /**
    * Gets attachmentIdList
    *  **参数解释**: 待办节点的附件ID列表 **取值范围**: 不涉及
    *
    * @return string[]|null
    */
    public function getAttachmentIdList()
    {
        return $this->container['attachmentIdList'];
    }

    /**
    * Sets attachmentIdList
    *
    * @param string[]|null $attachmentIdList **参数解释**: 待办节点的附件ID列表 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setAttachmentIdList($attachmentIdList)
    {
        $this->container['attachmentIdList'] = $attachmentIdList;
        return $this;
    }

    /**
    * Gets comments
    *  **参数解释**: 待办节点的待办评论 **取值范围**: 不涉及
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\TaskCommentInfo[]|null
    */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
    * Sets comments
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\TaskCommentInfo[]|null $comments **参数解释**: 待办节点的待办评论 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**: 待办的业务类型 - waiting  待处理 - canceled 已取消 - finished 已完成  **取值范围**: - waiting - canceled - finished
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
    * @param string|null $status **参数解释**: 待办的业务类型 - waiting  待处理 - canceled 已取消 - finished 已完成  **取值范围**: - waiting - canceled - finished
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets dueHandle
    *  **参数解释**: 待办的到期处理方式 - CONTINUE 继续执行 - INTERRUPT 终止  **取值范围**: - CONTINUE - INTERRUPT
    *
    * @return string|null
    */
    public function getDueHandle()
    {
        return $this->container['dueHandle'];
    }

    /**
    * Sets dueHandle
    *
    * @param string|null $dueHandle **参数解释**: 待办的到期处理方式 - CONTINUE 继续执行 - INTERRUPT 终止  **取值范围**: - CONTINUE - INTERRUPT
    *
    * @return $this
    */
    public function setDueHandle($dueHandle)
    {
        $this->container['dueHandle'] = $dueHandle;
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

