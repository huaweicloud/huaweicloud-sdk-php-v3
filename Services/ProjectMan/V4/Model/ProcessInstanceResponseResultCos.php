<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProcessInstanceResponseResultCos implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProcessInstanceResponse_result_cos';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * region  区域
    * category  变更对象工作项类型，此处固定为CO
    * title  评审单标题
    * status  变更对象状态
    * assignee  assignee
    * description  评审单描述
    * number  变更对象关联的工作项编号
    * order  排序
    * co2cr  关联的变更评审标识
    * co2br  关联的基线评审标识
    * co2gr  关联的通用评审标识
    * id  审批对象Id
    * type  评审单类型
    * state  评审单工作状态，取值为\"正在工作\",\"作废\"
    * beforeChange  变更对象工作项修改前内容
    * afterChange  变更对象修改后内容
    * modifiedBy  评审单最后修改人
    * modifiedDate  评审单最后修改时间
    * createdBy  评审单创建人
    * createdDate  评审单创建时间
    * tenantId  工作项所属租户ID，可通过[查询树状工作项](ShowIpdIssueTree.xml)接口获取，响应消息体中的**tenant_id**字段的值就是工作项所属租户id
    * statusMap  工作项状态
    * domainId  租户id
    * sourceSystem  源系统
    * sourceSystemLink  源系统链接
    * issueCategory  变更对象关联的工作项类型
    * issueId  工作项ID
    * issueStatus  issueStatus
    * issueSeverity  工作项严重程度
    * issuePriority  issuePriority
    * domainTitle  归属项目名称
    * srcDomainTitle  提出项目名称
    * issueAssigneeName  责任人昵称
    * changeReason  评审原因
    * changeType  评审类型
    * sourceSystemId  源系统id
    * changeDescription  评审描述
    * hasDeleted  是否已删除
    * approvalPhaseResult  评审结果
    * approvalCompleteTime  评审完成时间
    * ccbDescription  评审描述
    * actualCcb  评审专家
    * ccbs  审批信息列表
    * ccbInfo  评审信息
    * opinions  变更对象评审专家Id列表（创建变更评审时使用）
    * opinionComments  评审意见
    * approvalTime  审批时间
    * srcDomainId  租户id
    * crossDomain  是否跨租户
    * domainMoved  归属项目是否迁移
    * reviewer  评审专家
    * approver  决策人
    * rounds  评审轮次
    * lastRoundResult  最近一轮决策结果
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'region' => 'string',
            'category' => 'string',
            'title' => 'string',
            'status' => 'string',
            'assignee' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\ProcessInstanceResponseResultAssignee',
            'description' => 'string',
            'number' => 'string',
            'order' => 'string',
            'co2cr' => 'string',
            'co2br' => 'string',
            'co2gr' => 'string',
            'id' => 'string',
            'type' => 'string',
            'state' => 'string',
            'beforeChange' => 'string',
            'afterChange' => 'string',
            'modifiedBy' => 'string',
            'modifiedDate' => 'string',
            'createdBy' => 'string',
            'createdDate' => 'string',
            'tenantId' => 'string',
            'statusMap' => 'string',
            'domainId' => 'string',
            'sourceSystem' => 'string',
            'sourceSystemLink' => 'string',
            'issueCategory' => 'string',
            'issueId' => 'string',
            'issueStatus' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\ProcessInstanceResponseResultIssueStatus',
            'issueSeverity' => 'string',
            'issuePriority' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\ProcessInstanceResponseResultIssuePriority',
            'domainTitle' => 'string',
            'srcDomainTitle' => 'string',
            'issueAssigneeName' => 'string',
            'changeReason' => 'string',
            'changeType' => 'string',
            'sourceSystemId' => 'string',
            'changeDescription' => 'string',
            'hasDeleted' => 'string',
            'approvalPhaseResult' => 'string',
            'approvalCompleteTime' => 'string',
            'ccbDescription' => 'string',
            'actualCcb' => 'string',
            'ccbs' => 'string',
            'ccbInfo' => 'string',
            'opinions' => 'string',
            'opinionComments' => 'string',
            'approvalTime' => 'string',
            'srcDomainId' => 'string',
            'crossDomain' => 'string',
            'domainMoved' => 'string',
            'reviewer' => 'string[]',
            'approver' => 'string[]',
            'rounds' => 'string',
            'lastRoundResult' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * region  区域
    * category  变更对象工作项类型，此处固定为CO
    * title  评审单标题
    * status  变更对象状态
    * assignee  assignee
    * description  评审单描述
    * number  变更对象关联的工作项编号
    * order  排序
    * co2cr  关联的变更评审标识
    * co2br  关联的基线评审标识
    * co2gr  关联的通用评审标识
    * id  审批对象Id
    * type  评审单类型
    * state  评审单工作状态，取值为\"正在工作\",\"作废\"
    * beforeChange  变更对象工作项修改前内容
    * afterChange  变更对象修改后内容
    * modifiedBy  评审单最后修改人
    * modifiedDate  评审单最后修改时间
    * createdBy  评审单创建人
    * createdDate  评审单创建时间
    * tenantId  工作项所属租户ID，可通过[查询树状工作项](ShowIpdIssueTree.xml)接口获取，响应消息体中的**tenant_id**字段的值就是工作项所属租户id
    * statusMap  工作项状态
    * domainId  租户id
    * sourceSystem  源系统
    * sourceSystemLink  源系统链接
    * issueCategory  变更对象关联的工作项类型
    * issueId  工作项ID
    * issueStatus  issueStatus
    * issueSeverity  工作项严重程度
    * issuePriority  issuePriority
    * domainTitle  归属项目名称
    * srcDomainTitle  提出项目名称
    * issueAssigneeName  责任人昵称
    * changeReason  评审原因
    * changeType  评审类型
    * sourceSystemId  源系统id
    * changeDescription  评审描述
    * hasDeleted  是否已删除
    * approvalPhaseResult  评审结果
    * approvalCompleteTime  评审完成时间
    * ccbDescription  评审描述
    * actualCcb  评审专家
    * ccbs  审批信息列表
    * ccbInfo  评审信息
    * opinions  变更对象评审专家Id列表（创建变更评审时使用）
    * opinionComments  评审意见
    * approvalTime  审批时间
    * srcDomainId  租户id
    * crossDomain  是否跨租户
    * domainMoved  归属项目是否迁移
    * reviewer  评审专家
    * approver  决策人
    * rounds  评审轮次
    * lastRoundResult  最近一轮决策结果
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'region' => null,
        'category' => null,
        'title' => null,
        'status' => null,
        'assignee' => null,
        'description' => null,
        'number' => null,
        'order' => null,
        'co2cr' => null,
        'co2br' => null,
        'co2gr' => null,
        'id' => null,
        'type' => null,
        'state' => null,
        'beforeChange' => null,
        'afterChange' => null,
        'modifiedBy' => null,
        'modifiedDate' => null,
        'createdBy' => null,
        'createdDate' => null,
        'tenantId' => null,
        'statusMap' => null,
        'domainId' => null,
        'sourceSystem' => null,
        'sourceSystemLink' => null,
        'issueCategory' => null,
        'issueId' => null,
        'issueStatus' => null,
        'issueSeverity' => null,
        'issuePriority' => null,
        'domainTitle' => null,
        'srcDomainTitle' => null,
        'issueAssigneeName' => null,
        'changeReason' => null,
        'changeType' => null,
        'sourceSystemId' => null,
        'changeDescription' => null,
        'hasDeleted' => null,
        'approvalPhaseResult' => null,
        'approvalCompleteTime' => null,
        'ccbDescription' => null,
        'actualCcb' => null,
        'ccbs' => null,
        'ccbInfo' => null,
        'opinions' => null,
        'opinionComments' => null,
        'approvalTime' => null,
        'srcDomainId' => null,
        'crossDomain' => null,
        'domainMoved' => null,
        'reviewer' => null,
        'approver' => null,
        'rounds' => null,
        'lastRoundResult' => null
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
    * region  区域
    * category  变更对象工作项类型，此处固定为CO
    * title  评审单标题
    * status  变更对象状态
    * assignee  assignee
    * description  评审单描述
    * number  变更对象关联的工作项编号
    * order  排序
    * co2cr  关联的变更评审标识
    * co2br  关联的基线评审标识
    * co2gr  关联的通用评审标识
    * id  审批对象Id
    * type  评审单类型
    * state  评审单工作状态，取值为\"正在工作\",\"作废\"
    * beforeChange  变更对象工作项修改前内容
    * afterChange  变更对象修改后内容
    * modifiedBy  评审单最后修改人
    * modifiedDate  评审单最后修改时间
    * createdBy  评审单创建人
    * createdDate  评审单创建时间
    * tenantId  工作项所属租户ID，可通过[查询树状工作项](ShowIpdIssueTree.xml)接口获取，响应消息体中的**tenant_id**字段的值就是工作项所属租户id
    * statusMap  工作项状态
    * domainId  租户id
    * sourceSystem  源系统
    * sourceSystemLink  源系统链接
    * issueCategory  变更对象关联的工作项类型
    * issueId  工作项ID
    * issueStatus  issueStatus
    * issueSeverity  工作项严重程度
    * issuePriority  issuePriority
    * domainTitle  归属项目名称
    * srcDomainTitle  提出项目名称
    * issueAssigneeName  责任人昵称
    * changeReason  评审原因
    * changeType  评审类型
    * sourceSystemId  源系统id
    * changeDescription  评审描述
    * hasDeleted  是否已删除
    * approvalPhaseResult  评审结果
    * approvalCompleteTime  评审完成时间
    * ccbDescription  评审描述
    * actualCcb  评审专家
    * ccbs  审批信息列表
    * ccbInfo  评审信息
    * opinions  变更对象评审专家Id列表（创建变更评审时使用）
    * opinionComments  评审意见
    * approvalTime  审批时间
    * srcDomainId  租户id
    * crossDomain  是否跨租户
    * domainMoved  归属项目是否迁移
    * reviewer  评审专家
    * approver  决策人
    * rounds  评审轮次
    * lastRoundResult  最近一轮决策结果
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'region' => 'region',
            'category' => 'category',
            'title' => 'title',
            'status' => 'status',
            'assignee' => 'assignee',
            'description' => 'description',
            'number' => 'number',
            'order' => 'order',
            'co2cr' => 'co2cr',
            'co2br' => 'co2br',
            'co2gr' => 'co2gr',
            'id' => 'id',
            'type' => 'type',
            'state' => 'state',
            'beforeChange' => 'before_change',
            'afterChange' => 'after_change',
            'modifiedBy' => 'modified_by',
            'modifiedDate' => 'modified_date',
            'createdBy' => 'created_by',
            'createdDate' => 'created_date',
            'tenantId' => 'tenant_id',
            'statusMap' => 'status_map',
            'domainId' => 'domain_id',
            'sourceSystem' => 'source_system',
            'sourceSystemLink' => 'source_system_link',
            'issueCategory' => 'issue_category',
            'issueId' => 'issue_id',
            'issueStatus' => 'issue_status',
            'issueSeverity' => 'issue_severity',
            'issuePriority' => 'issue_priority',
            'domainTitle' => 'domain_title',
            'srcDomainTitle' => 'src_domain_title',
            'issueAssigneeName' => 'issue_assignee_name',
            'changeReason' => 'change_reason',
            'changeType' => 'change_type',
            'sourceSystemId' => 'source_system_id',
            'changeDescription' => 'change_description',
            'hasDeleted' => 'has_deleted',
            'approvalPhaseResult' => 'approval_phase_result',
            'approvalCompleteTime' => 'approval_complete_time',
            'ccbDescription' => 'ccb_description',
            'actualCcb' => 'actual_ccb',
            'ccbs' => 'ccbs',
            'ccbInfo' => 'ccb_info',
            'opinions' => 'opinions',
            'opinionComments' => 'opinion_comments',
            'approvalTime' => 'approval_time',
            'srcDomainId' => 'src_domain_id',
            'crossDomain' => 'cross_domain',
            'domainMoved' => 'domain_moved',
            'reviewer' => 'reviewer',
            'approver' => 'approver',
            'rounds' => 'rounds',
            'lastRoundResult' => 'last_round_result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * region  区域
    * category  变更对象工作项类型，此处固定为CO
    * title  评审单标题
    * status  变更对象状态
    * assignee  assignee
    * description  评审单描述
    * number  变更对象关联的工作项编号
    * order  排序
    * co2cr  关联的变更评审标识
    * co2br  关联的基线评审标识
    * co2gr  关联的通用评审标识
    * id  审批对象Id
    * type  评审单类型
    * state  评审单工作状态，取值为\"正在工作\",\"作废\"
    * beforeChange  变更对象工作项修改前内容
    * afterChange  变更对象修改后内容
    * modifiedBy  评审单最后修改人
    * modifiedDate  评审单最后修改时间
    * createdBy  评审单创建人
    * createdDate  评审单创建时间
    * tenantId  工作项所属租户ID，可通过[查询树状工作项](ShowIpdIssueTree.xml)接口获取，响应消息体中的**tenant_id**字段的值就是工作项所属租户id
    * statusMap  工作项状态
    * domainId  租户id
    * sourceSystem  源系统
    * sourceSystemLink  源系统链接
    * issueCategory  变更对象关联的工作项类型
    * issueId  工作项ID
    * issueStatus  issueStatus
    * issueSeverity  工作项严重程度
    * issuePriority  issuePriority
    * domainTitle  归属项目名称
    * srcDomainTitle  提出项目名称
    * issueAssigneeName  责任人昵称
    * changeReason  评审原因
    * changeType  评审类型
    * sourceSystemId  源系统id
    * changeDescription  评审描述
    * hasDeleted  是否已删除
    * approvalPhaseResult  评审结果
    * approvalCompleteTime  评审完成时间
    * ccbDescription  评审描述
    * actualCcb  评审专家
    * ccbs  审批信息列表
    * ccbInfo  评审信息
    * opinions  变更对象评审专家Id列表（创建变更评审时使用）
    * opinionComments  评审意见
    * approvalTime  审批时间
    * srcDomainId  租户id
    * crossDomain  是否跨租户
    * domainMoved  归属项目是否迁移
    * reviewer  评审专家
    * approver  决策人
    * rounds  评审轮次
    * lastRoundResult  最近一轮决策结果
    *
    * @var string[]
    */
    protected static $setters = [
            'region' => 'setRegion',
            'category' => 'setCategory',
            'title' => 'setTitle',
            'status' => 'setStatus',
            'assignee' => 'setAssignee',
            'description' => 'setDescription',
            'number' => 'setNumber',
            'order' => 'setOrder',
            'co2cr' => 'setCo2cr',
            'co2br' => 'setCo2br',
            'co2gr' => 'setCo2gr',
            'id' => 'setId',
            'type' => 'setType',
            'state' => 'setState',
            'beforeChange' => 'setBeforeChange',
            'afterChange' => 'setAfterChange',
            'modifiedBy' => 'setModifiedBy',
            'modifiedDate' => 'setModifiedDate',
            'createdBy' => 'setCreatedBy',
            'createdDate' => 'setCreatedDate',
            'tenantId' => 'setTenantId',
            'statusMap' => 'setStatusMap',
            'domainId' => 'setDomainId',
            'sourceSystem' => 'setSourceSystem',
            'sourceSystemLink' => 'setSourceSystemLink',
            'issueCategory' => 'setIssueCategory',
            'issueId' => 'setIssueId',
            'issueStatus' => 'setIssueStatus',
            'issueSeverity' => 'setIssueSeverity',
            'issuePriority' => 'setIssuePriority',
            'domainTitle' => 'setDomainTitle',
            'srcDomainTitle' => 'setSrcDomainTitle',
            'issueAssigneeName' => 'setIssueAssigneeName',
            'changeReason' => 'setChangeReason',
            'changeType' => 'setChangeType',
            'sourceSystemId' => 'setSourceSystemId',
            'changeDescription' => 'setChangeDescription',
            'hasDeleted' => 'setHasDeleted',
            'approvalPhaseResult' => 'setApprovalPhaseResult',
            'approvalCompleteTime' => 'setApprovalCompleteTime',
            'ccbDescription' => 'setCcbDescription',
            'actualCcb' => 'setActualCcb',
            'ccbs' => 'setCcbs',
            'ccbInfo' => 'setCcbInfo',
            'opinions' => 'setOpinions',
            'opinionComments' => 'setOpinionComments',
            'approvalTime' => 'setApprovalTime',
            'srcDomainId' => 'setSrcDomainId',
            'crossDomain' => 'setCrossDomain',
            'domainMoved' => 'setDomainMoved',
            'reviewer' => 'setReviewer',
            'approver' => 'setApprover',
            'rounds' => 'setRounds',
            'lastRoundResult' => 'setLastRoundResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * region  区域
    * category  变更对象工作项类型，此处固定为CO
    * title  评审单标题
    * status  变更对象状态
    * assignee  assignee
    * description  评审单描述
    * number  变更对象关联的工作项编号
    * order  排序
    * co2cr  关联的变更评审标识
    * co2br  关联的基线评审标识
    * co2gr  关联的通用评审标识
    * id  审批对象Id
    * type  评审单类型
    * state  评审单工作状态，取值为\"正在工作\",\"作废\"
    * beforeChange  变更对象工作项修改前内容
    * afterChange  变更对象修改后内容
    * modifiedBy  评审单最后修改人
    * modifiedDate  评审单最后修改时间
    * createdBy  评审单创建人
    * createdDate  评审单创建时间
    * tenantId  工作项所属租户ID，可通过[查询树状工作项](ShowIpdIssueTree.xml)接口获取，响应消息体中的**tenant_id**字段的值就是工作项所属租户id
    * statusMap  工作项状态
    * domainId  租户id
    * sourceSystem  源系统
    * sourceSystemLink  源系统链接
    * issueCategory  变更对象关联的工作项类型
    * issueId  工作项ID
    * issueStatus  issueStatus
    * issueSeverity  工作项严重程度
    * issuePriority  issuePriority
    * domainTitle  归属项目名称
    * srcDomainTitle  提出项目名称
    * issueAssigneeName  责任人昵称
    * changeReason  评审原因
    * changeType  评审类型
    * sourceSystemId  源系统id
    * changeDescription  评审描述
    * hasDeleted  是否已删除
    * approvalPhaseResult  评审结果
    * approvalCompleteTime  评审完成时间
    * ccbDescription  评审描述
    * actualCcb  评审专家
    * ccbs  审批信息列表
    * ccbInfo  评审信息
    * opinions  变更对象评审专家Id列表（创建变更评审时使用）
    * opinionComments  评审意见
    * approvalTime  审批时间
    * srcDomainId  租户id
    * crossDomain  是否跨租户
    * domainMoved  归属项目是否迁移
    * reviewer  评审专家
    * approver  决策人
    * rounds  评审轮次
    * lastRoundResult  最近一轮决策结果
    *
    * @var string[]
    */
    protected static $getters = [
            'region' => 'getRegion',
            'category' => 'getCategory',
            'title' => 'getTitle',
            'status' => 'getStatus',
            'assignee' => 'getAssignee',
            'description' => 'getDescription',
            'number' => 'getNumber',
            'order' => 'getOrder',
            'co2cr' => 'getCo2cr',
            'co2br' => 'getCo2br',
            'co2gr' => 'getCo2gr',
            'id' => 'getId',
            'type' => 'getType',
            'state' => 'getState',
            'beforeChange' => 'getBeforeChange',
            'afterChange' => 'getAfterChange',
            'modifiedBy' => 'getModifiedBy',
            'modifiedDate' => 'getModifiedDate',
            'createdBy' => 'getCreatedBy',
            'createdDate' => 'getCreatedDate',
            'tenantId' => 'getTenantId',
            'statusMap' => 'getStatusMap',
            'domainId' => 'getDomainId',
            'sourceSystem' => 'getSourceSystem',
            'sourceSystemLink' => 'getSourceSystemLink',
            'issueCategory' => 'getIssueCategory',
            'issueId' => 'getIssueId',
            'issueStatus' => 'getIssueStatus',
            'issueSeverity' => 'getIssueSeverity',
            'issuePriority' => 'getIssuePriority',
            'domainTitle' => 'getDomainTitle',
            'srcDomainTitle' => 'getSrcDomainTitle',
            'issueAssigneeName' => 'getIssueAssigneeName',
            'changeReason' => 'getChangeReason',
            'changeType' => 'getChangeType',
            'sourceSystemId' => 'getSourceSystemId',
            'changeDescription' => 'getChangeDescription',
            'hasDeleted' => 'getHasDeleted',
            'approvalPhaseResult' => 'getApprovalPhaseResult',
            'approvalCompleteTime' => 'getApprovalCompleteTime',
            'ccbDescription' => 'getCcbDescription',
            'actualCcb' => 'getActualCcb',
            'ccbs' => 'getCcbs',
            'ccbInfo' => 'getCcbInfo',
            'opinions' => 'getOpinions',
            'opinionComments' => 'getOpinionComments',
            'approvalTime' => 'getApprovalTime',
            'srcDomainId' => 'getSrcDomainId',
            'crossDomain' => 'getCrossDomain',
            'domainMoved' => 'getDomainMoved',
            'reviewer' => 'getReviewer',
            'approver' => 'getApprover',
            'rounds' => 'getRounds',
            'lastRoundResult' => 'getLastRoundResult'
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
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['assignee'] = isset($data['assignee']) ? $data['assignee'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['co2cr'] = isset($data['co2cr']) ? $data['co2cr'] : null;
        $this->container['co2br'] = isset($data['co2br']) ? $data['co2br'] : null;
        $this->container['co2gr'] = isset($data['co2gr']) ? $data['co2gr'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['beforeChange'] = isset($data['beforeChange']) ? $data['beforeChange'] : null;
        $this->container['afterChange'] = isset($data['afterChange']) ? $data['afterChange'] : null;
        $this->container['modifiedBy'] = isset($data['modifiedBy']) ? $data['modifiedBy'] : null;
        $this->container['modifiedDate'] = isset($data['modifiedDate']) ? $data['modifiedDate'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['statusMap'] = isset($data['statusMap']) ? $data['statusMap'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['sourceSystem'] = isset($data['sourceSystem']) ? $data['sourceSystem'] : null;
        $this->container['sourceSystemLink'] = isset($data['sourceSystemLink']) ? $data['sourceSystemLink'] : null;
        $this->container['issueCategory'] = isset($data['issueCategory']) ? $data['issueCategory'] : null;
        $this->container['issueId'] = isset($data['issueId']) ? $data['issueId'] : null;
        $this->container['issueStatus'] = isset($data['issueStatus']) ? $data['issueStatus'] : null;
        $this->container['issueSeverity'] = isset($data['issueSeverity']) ? $data['issueSeverity'] : null;
        $this->container['issuePriority'] = isset($data['issuePriority']) ? $data['issuePriority'] : null;
        $this->container['domainTitle'] = isset($data['domainTitle']) ? $data['domainTitle'] : null;
        $this->container['srcDomainTitle'] = isset($data['srcDomainTitle']) ? $data['srcDomainTitle'] : null;
        $this->container['issueAssigneeName'] = isset($data['issueAssigneeName']) ? $data['issueAssigneeName'] : null;
        $this->container['changeReason'] = isset($data['changeReason']) ? $data['changeReason'] : null;
        $this->container['changeType'] = isset($data['changeType']) ? $data['changeType'] : null;
        $this->container['sourceSystemId'] = isset($data['sourceSystemId']) ? $data['sourceSystemId'] : null;
        $this->container['changeDescription'] = isset($data['changeDescription']) ? $data['changeDescription'] : null;
        $this->container['hasDeleted'] = isset($data['hasDeleted']) ? $data['hasDeleted'] : null;
        $this->container['approvalPhaseResult'] = isset($data['approvalPhaseResult']) ? $data['approvalPhaseResult'] : null;
        $this->container['approvalCompleteTime'] = isset($data['approvalCompleteTime']) ? $data['approvalCompleteTime'] : null;
        $this->container['ccbDescription'] = isset($data['ccbDescription']) ? $data['ccbDescription'] : null;
        $this->container['actualCcb'] = isset($data['actualCcb']) ? $data['actualCcb'] : null;
        $this->container['ccbs'] = isset($data['ccbs']) ? $data['ccbs'] : null;
        $this->container['ccbInfo'] = isset($data['ccbInfo']) ? $data['ccbInfo'] : null;
        $this->container['opinions'] = isset($data['opinions']) ? $data['opinions'] : null;
        $this->container['opinionComments'] = isset($data['opinionComments']) ? $data['opinionComments'] : null;
        $this->container['approvalTime'] = isset($data['approvalTime']) ? $data['approvalTime'] : null;
        $this->container['srcDomainId'] = isset($data['srcDomainId']) ? $data['srcDomainId'] : null;
        $this->container['crossDomain'] = isset($data['crossDomain']) ? $data['crossDomain'] : null;
        $this->container['domainMoved'] = isset($data['domainMoved']) ? $data['domainMoved'] : null;
        $this->container['reviewer'] = isset($data['reviewer']) ? $data['reviewer'] : null;
        $this->container['approver'] = isset($data['approver']) ? $data['approver'] : null;
        $this->container['rounds'] = isset($data['rounds']) ? $data['rounds'] : null;
        $this->container['lastRoundResult'] = isset($data['lastRoundResult']) ? $data['lastRoundResult'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    *  区域
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
    * @param string|null $region 区域
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets category
    *  变更对象工作项类型，此处固定为CO
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category 变更对象工作项类型，此处固定为CO
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets title
    *  评审单标题
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title 评审单标题
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets status
    *  变更对象状态
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
    * @param string|null $status 变更对象状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets assignee
    *  assignee
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\ProcessInstanceResponseResultAssignee|null
    */
    public function getAssignee()
    {
        return $this->container['assignee'];
    }

    /**
    * Sets assignee
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\ProcessInstanceResponseResultAssignee|null $assignee assignee
    *
    * @return $this
    */
    public function setAssignee($assignee)
    {
        $this->container['assignee'] = $assignee;
        return $this;
    }

    /**
    * Gets description
    *  评审单描述
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
    * @param string|null $description 评审单描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets number
    *  变更对象关联的工作项编号
    *
    * @return string|null
    */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
    * Sets number
    *
    * @param string|null $number 变更对象关联的工作项编号
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets order
    *  排序
    *
    * @return string|null
    */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
    * Sets order
    *
    * @param string|null $order 排序
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
        return $this;
    }

    /**
    * Gets co2cr
    *  关联的变更评审标识
    *
    * @return string|null
    */
    public function getCo2cr()
    {
        return $this->container['co2cr'];
    }

    /**
    * Sets co2cr
    *
    * @param string|null $co2cr 关联的变更评审标识
    *
    * @return $this
    */
    public function setCo2cr($co2cr)
    {
        $this->container['co2cr'] = $co2cr;
        return $this;
    }

    /**
    * Gets co2br
    *  关联的基线评审标识
    *
    * @return string|null
    */
    public function getCo2br()
    {
        return $this->container['co2br'];
    }

    /**
    * Sets co2br
    *
    * @param string|null $co2br 关联的基线评审标识
    *
    * @return $this
    */
    public function setCo2br($co2br)
    {
        $this->container['co2br'] = $co2br;
        return $this;
    }

    /**
    * Gets co2gr
    *  关联的通用评审标识
    *
    * @return string|null
    */
    public function getCo2gr()
    {
        return $this->container['co2gr'];
    }

    /**
    * Sets co2gr
    *
    * @param string|null $co2gr 关联的通用评审标识
    *
    * @return $this
    */
    public function setCo2gr($co2gr)
    {
        $this->container['co2gr'] = $co2gr;
        return $this;
    }

    /**
    * Gets id
    *  审批对象Id
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
    * @param string|null $id 审批对象Id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets type
    *  评审单类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 评审单类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets state
    *  评审单工作状态，取值为\"正在工作\",\"作废\"
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
    * @param string|null $state 评审单工作状态，取值为\"正在工作\",\"作废\"
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets beforeChange
    *  变更对象工作项修改前内容
    *
    * @return string|null
    */
    public function getBeforeChange()
    {
        return $this->container['beforeChange'];
    }

    /**
    * Sets beforeChange
    *
    * @param string|null $beforeChange 变更对象工作项修改前内容
    *
    * @return $this
    */
    public function setBeforeChange($beforeChange)
    {
        $this->container['beforeChange'] = $beforeChange;
        return $this;
    }

    /**
    * Gets afterChange
    *  变更对象修改后内容
    *
    * @return string|null
    */
    public function getAfterChange()
    {
        return $this->container['afterChange'];
    }

    /**
    * Sets afterChange
    *
    * @param string|null $afterChange 变更对象修改后内容
    *
    * @return $this
    */
    public function setAfterChange($afterChange)
    {
        $this->container['afterChange'] = $afterChange;
        return $this;
    }

    /**
    * Gets modifiedBy
    *  评审单最后修改人
    *
    * @return string|null
    */
    public function getModifiedBy()
    {
        return $this->container['modifiedBy'];
    }

    /**
    * Sets modifiedBy
    *
    * @param string|null $modifiedBy 评审单最后修改人
    *
    * @return $this
    */
    public function setModifiedBy($modifiedBy)
    {
        $this->container['modifiedBy'] = $modifiedBy;
        return $this;
    }

    /**
    * Gets modifiedDate
    *  评审单最后修改时间
    *
    * @return string|null
    */
    public function getModifiedDate()
    {
        return $this->container['modifiedDate'];
    }

    /**
    * Sets modifiedDate
    *
    * @param string|null $modifiedDate 评审单最后修改时间
    *
    * @return $this
    */
    public function setModifiedDate($modifiedDate)
    {
        $this->container['modifiedDate'] = $modifiedDate;
        return $this;
    }

    /**
    * Gets createdBy
    *  评审单创建人
    *
    * @return string|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param string|null $createdBy 评审单创建人
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets createdDate
    *  评审单创建时间
    *
    * @return string|null
    */
    public function getCreatedDate()
    {
        return $this->container['createdDate'];
    }

    /**
    * Sets createdDate
    *
    * @param string|null $createdDate 评审单创建时间
    *
    * @return $this
    */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;
        return $this;
    }

    /**
    * Gets tenantId
    *  工作项所属租户ID，可通过[查询树状工作项](ShowIpdIssueTree.xml)接口获取，响应消息体中的**tenant_id**字段的值就是工作项所属租户id
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
    * @param string|null $tenantId 工作项所属租户ID，可通过[查询树状工作项](ShowIpdIssueTree.xml)接口获取，响应消息体中的**tenant_id**字段的值就是工作项所属租户id
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets statusMap
    *  工作项状态
    *
    * @return string|null
    */
    public function getStatusMap()
    {
        return $this->container['statusMap'];
    }

    /**
    * Sets statusMap
    *
    * @param string|null $statusMap 工作项状态
    *
    * @return $this
    */
    public function setStatusMap($statusMap)
    {
        $this->container['statusMap'] = $statusMap;
        return $this;
    }

    /**
    * Gets domainId
    *  租户id
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 租户id
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets sourceSystem
    *  源系统
    *
    * @return string|null
    */
    public function getSourceSystem()
    {
        return $this->container['sourceSystem'];
    }

    /**
    * Sets sourceSystem
    *
    * @param string|null $sourceSystem 源系统
    *
    * @return $this
    */
    public function setSourceSystem($sourceSystem)
    {
        $this->container['sourceSystem'] = $sourceSystem;
        return $this;
    }

    /**
    * Gets sourceSystemLink
    *  源系统链接
    *
    * @return string|null
    */
    public function getSourceSystemLink()
    {
        return $this->container['sourceSystemLink'];
    }

    /**
    * Sets sourceSystemLink
    *
    * @param string|null $sourceSystemLink 源系统链接
    *
    * @return $this
    */
    public function setSourceSystemLink($sourceSystemLink)
    {
        $this->container['sourceSystemLink'] = $sourceSystemLink;
        return $this;
    }

    /**
    * Gets issueCategory
    *  变更对象关联的工作项类型
    *
    * @return string|null
    */
    public function getIssueCategory()
    {
        return $this->container['issueCategory'];
    }

    /**
    * Sets issueCategory
    *
    * @param string|null $issueCategory 变更对象关联的工作项类型
    *
    * @return $this
    */
    public function setIssueCategory($issueCategory)
    {
        $this->container['issueCategory'] = $issueCategory;
        return $this;
    }

    /**
    * Gets issueId
    *  工作项ID
    *
    * @return string|null
    */
    public function getIssueId()
    {
        return $this->container['issueId'];
    }

    /**
    * Sets issueId
    *
    * @param string|null $issueId 工作项ID
    *
    * @return $this
    */
    public function setIssueId($issueId)
    {
        $this->container['issueId'] = $issueId;
        return $this;
    }

    /**
    * Gets issueStatus
    *  issueStatus
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\ProcessInstanceResponseResultIssueStatus|null
    */
    public function getIssueStatus()
    {
        return $this->container['issueStatus'];
    }

    /**
    * Sets issueStatus
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\ProcessInstanceResponseResultIssueStatus|null $issueStatus issueStatus
    *
    * @return $this
    */
    public function setIssueStatus($issueStatus)
    {
        $this->container['issueStatus'] = $issueStatus;
        return $this;
    }

    /**
    * Gets issueSeverity
    *  工作项严重程度
    *
    * @return string|null
    */
    public function getIssueSeverity()
    {
        return $this->container['issueSeverity'];
    }

    /**
    * Sets issueSeverity
    *
    * @param string|null $issueSeverity 工作项严重程度
    *
    * @return $this
    */
    public function setIssueSeverity($issueSeverity)
    {
        $this->container['issueSeverity'] = $issueSeverity;
        return $this;
    }

    /**
    * Gets issuePriority
    *  issuePriority
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\ProcessInstanceResponseResultIssuePriority|null
    */
    public function getIssuePriority()
    {
        return $this->container['issuePriority'];
    }

    /**
    * Sets issuePriority
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\ProcessInstanceResponseResultIssuePriority|null $issuePriority issuePriority
    *
    * @return $this
    */
    public function setIssuePriority($issuePriority)
    {
        $this->container['issuePriority'] = $issuePriority;
        return $this;
    }

    /**
    * Gets domainTitle
    *  归属项目名称
    *
    * @return string|null
    */
    public function getDomainTitle()
    {
        return $this->container['domainTitle'];
    }

    /**
    * Sets domainTitle
    *
    * @param string|null $domainTitle 归属项目名称
    *
    * @return $this
    */
    public function setDomainTitle($domainTitle)
    {
        $this->container['domainTitle'] = $domainTitle;
        return $this;
    }

    /**
    * Gets srcDomainTitle
    *  提出项目名称
    *
    * @return string|null
    */
    public function getSrcDomainTitle()
    {
        return $this->container['srcDomainTitle'];
    }

    /**
    * Sets srcDomainTitle
    *
    * @param string|null $srcDomainTitle 提出项目名称
    *
    * @return $this
    */
    public function setSrcDomainTitle($srcDomainTitle)
    {
        $this->container['srcDomainTitle'] = $srcDomainTitle;
        return $this;
    }

    /**
    * Gets issueAssigneeName
    *  责任人昵称
    *
    * @return string|null
    */
    public function getIssueAssigneeName()
    {
        return $this->container['issueAssigneeName'];
    }

    /**
    * Sets issueAssigneeName
    *
    * @param string|null $issueAssigneeName 责任人昵称
    *
    * @return $this
    */
    public function setIssueAssigneeName($issueAssigneeName)
    {
        $this->container['issueAssigneeName'] = $issueAssigneeName;
        return $this;
    }

    /**
    * Gets changeReason
    *  评审原因
    *
    * @return string|null
    */
    public function getChangeReason()
    {
        return $this->container['changeReason'];
    }

    /**
    * Sets changeReason
    *
    * @param string|null $changeReason 评审原因
    *
    * @return $this
    */
    public function setChangeReason($changeReason)
    {
        $this->container['changeReason'] = $changeReason;
        return $this;
    }

    /**
    * Gets changeType
    *  评审类型
    *
    * @return string|null
    */
    public function getChangeType()
    {
        return $this->container['changeType'];
    }

    /**
    * Sets changeType
    *
    * @param string|null $changeType 评审类型
    *
    * @return $this
    */
    public function setChangeType($changeType)
    {
        $this->container['changeType'] = $changeType;
        return $this;
    }

    /**
    * Gets sourceSystemId
    *  源系统id
    *
    * @return string|null
    */
    public function getSourceSystemId()
    {
        return $this->container['sourceSystemId'];
    }

    /**
    * Sets sourceSystemId
    *
    * @param string|null $sourceSystemId 源系统id
    *
    * @return $this
    */
    public function setSourceSystemId($sourceSystemId)
    {
        $this->container['sourceSystemId'] = $sourceSystemId;
        return $this;
    }

    /**
    * Gets changeDescription
    *  评审描述
    *
    * @return string|null
    */
    public function getChangeDescription()
    {
        return $this->container['changeDescription'];
    }

    /**
    * Sets changeDescription
    *
    * @param string|null $changeDescription 评审描述
    *
    * @return $this
    */
    public function setChangeDescription($changeDescription)
    {
        $this->container['changeDescription'] = $changeDescription;
        return $this;
    }

    /**
    * Gets hasDeleted
    *  是否已删除
    *
    * @return string|null
    */
    public function getHasDeleted()
    {
        return $this->container['hasDeleted'];
    }

    /**
    * Sets hasDeleted
    *
    * @param string|null $hasDeleted 是否已删除
    *
    * @return $this
    */
    public function setHasDeleted($hasDeleted)
    {
        $this->container['hasDeleted'] = $hasDeleted;
        return $this;
    }

    /**
    * Gets approvalPhaseResult
    *  评审结果
    *
    * @return string|null
    */
    public function getApprovalPhaseResult()
    {
        return $this->container['approvalPhaseResult'];
    }

    /**
    * Sets approvalPhaseResult
    *
    * @param string|null $approvalPhaseResult 评审结果
    *
    * @return $this
    */
    public function setApprovalPhaseResult($approvalPhaseResult)
    {
        $this->container['approvalPhaseResult'] = $approvalPhaseResult;
        return $this;
    }

    /**
    * Gets approvalCompleteTime
    *  评审完成时间
    *
    * @return string|null
    */
    public function getApprovalCompleteTime()
    {
        return $this->container['approvalCompleteTime'];
    }

    /**
    * Sets approvalCompleteTime
    *
    * @param string|null $approvalCompleteTime 评审完成时间
    *
    * @return $this
    */
    public function setApprovalCompleteTime($approvalCompleteTime)
    {
        $this->container['approvalCompleteTime'] = $approvalCompleteTime;
        return $this;
    }

    /**
    * Gets ccbDescription
    *  评审描述
    *
    * @return string|null
    */
    public function getCcbDescription()
    {
        return $this->container['ccbDescription'];
    }

    /**
    * Sets ccbDescription
    *
    * @param string|null $ccbDescription 评审描述
    *
    * @return $this
    */
    public function setCcbDescription($ccbDescription)
    {
        $this->container['ccbDescription'] = $ccbDescription;
        return $this;
    }

    /**
    * Gets actualCcb
    *  评审专家
    *
    * @return string|null
    */
    public function getActualCcb()
    {
        return $this->container['actualCcb'];
    }

    /**
    * Sets actualCcb
    *
    * @param string|null $actualCcb 评审专家
    *
    * @return $this
    */
    public function setActualCcb($actualCcb)
    {
        $this->container['actualCcb'] = $actualCcb;
        return $this;
    }

    /**
    * Gets ccbs
    *  审批信息列表
    *
    * @return string|null
    */
    public function getCcbs()
    {
        return $this->container['ccbs'];
    }

    /**
    * Sets ccbs
    *
    * @param string|null $ccbs 审批信息列表
    *
    * @return $this
    */
    public function setCcbs($ccbs)
    {
        $this->container['ccbs'] = $ccbs;
        return $this;
    }

    /**
    * Gets ccbInfo
    *  评审信息
    *
    * @return string|null
    */
    public function getCcbInfo()
    {
        return $this->container['ccbInfo'];
    }

    /**
    * Sets ccbInfo
    *
    * @param string|null $ccbInfo 评审信息
    *
    * @return $this
    */
    public function setCcbInfo($ccbInfo)
    {
        $this->container['ccbInfo'] = $ccbInfo;
        return $this;
    }

    /**
    * Gets opinions
    *  变更对象评审专家Id列表（创建变更评审时使用）
    *
    * @return string|null
    */
    public function getOpinions()
    {
        return $this->container['opinions'];
    }

    /**
    * Sets opinions
    *
    * @param string|null $opinions 变更对象评审专家Id列表（创建变更评审时使用）
    *
    * @return $this
    */
    public function setOpinions($opinions)
    {
        $this->container['opinions'] = $opinions;
        return $this;
    }

    /**
    * Gets opinionComments
    *  评审意见
    *
    * @return string|null
    */
    public function getOpinionComments()
    {
        return $this->container['opinionComments'];
    }

    /**
    * Sets opinionComments
    *
    * @param string|null $opinionComments 评审意见
    *
    * @return $this
    */
    public function setOpinionComments($opinionComments)
    {
        $this->container['opinionComments'] = $opinionComments;
        return $this;
    }

    /**
    * Gets approvalTime
    *  审批时间
    *
    * @return string|null
    */
    public function getApprovalTime()
    {
        return $this->container['approvalTime'];
    }

    /**
    * Sets approvalTime
    *
    * @param string|null $approvalTime 审批时间
    *
    * @return $this
    */
    public function setApprovalTime($approvalTime)
    {
        $this->container['approvalTime'] = $approvalTime;
        return $this;
    }

    /**
    * Gets srcDomainId
    *  租户id
    *
    * @return string|null
    */
    public function getSrcDomainId()
    {
        return $this->container['srcDomainId'];
    }

    /**
    * Sets srcDomainId
    *
    * @param string|null $srcDomainId 租户id
    *
    * @return $this
    */
    public function setSrcDomainId($srcDomainId)
    {
        $this->container['srcDomainId'] = $srcDomainId;
        return $this;
    }

    /**
    * Gets crossDomain
    *  是否跨租户
    *
    * @return string|null
    */
    public function getCrossDomain()
    {
        return $this->container['crossDomain'];
    }

    /**
    * Sets crossDomain
    *
    * @param string|null $crossDomain 是否跨租户
    *
    * @return $this
    */
    public function setCrossDomain($crossDomain)
    {
        $this->container['crossDomain'] = $crossDomain;
        return $this;
    }

    /**
    * Gets domainMoved
    *  归属项目是否迁移
    *
    * @return string|null
    */
    public function getDomainMoved()
    {
        return $this->container['domainMoved'];
    }

    /**
    * Sets domainMoved
    *
    * @param string|null $domainMoved 归属项目是否迁移
    *
    * @return $this
    */
    public function setDomainMoved($domainMoved)
    {
        $this->container['domainMoved'] = $domainMoved;
        return $this;
    }

    /**
    * Gets reviewer
    *  评审专家
    *
    * @return string[]|null
    */
    public function getReviewer()
    {
        return $this->container['reviewer'];
    }

    /**
    * Sets reviewer
    *
    * @param string[]|null $reviewer 评审专家
    *
    * @return $this
    */
    public function setReviewer($reviewer)
    {
        $this->container['reviewer'] = $reviewer;
        return $this;
    }

    /**
    * Gets approver
    *  决策人
    *
    * @return string[]|null
    */
    public function getApprover()
    {
        return $this->container['approver'];
    }

    /**
    * Sets approver
    *
    * @param string[]|null $approver 决策人
    *
    * @return $this
    */
    public function setApprover($approver)
    {
        $this->container['approver'] = $approver;
        return $this;
    }

    /**
    * Gets rounds
    *  评审轮次
    *
    * @return string|null
    */
    public function getRounds()
    {
        return $this->container['rounds'];
    }

    /**
    * Sets rounds
    *
    * @param string|null $rounds 评审轮次
    *
    * @return $this
    */
    public function setRounds($rounds)
    {
        $this->container['rounds'] = $rounds;
        return $this;
    }

    /**
    * Gets lastRoundResult
    *  最近一轮决策结果
    *
    * @return string|null
    */
    public function getLastRoundResult()
    {
        return $this->container['lastRoundResult'];
    }

    /**
    * Sets lastRoundResult
    *
    * @param string|null $lastRoundResult 最近一轮决策结果
    *
    * @return $this
    */
    public function setLastRoundResult($lastRoundResult)
    {
        $this->container['lastRoundResult'] = $lastRoundResult;
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

