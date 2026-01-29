<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IssueEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IssueEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  工作项id
    * title  工作项标题
    * description  工作项描述字段
    * type  工作项大分类定义 requirement(研发需求)、bug(缺陷)、task(任务)、feature(特性)、raw_requirement(原始需求)
    * number  工作项编号
    * category  工作项类型，编辑工作项时，此字段必填、值为当前工作项正确的工作项类型，但不会更新此字段
    * parentId  父工作项id
    * projectId  工作项所属的项目id
    * status  工作项状态code
    * state  工作项的生命周期，可选值为\"正在工作\",\"作废\"
    * assignee  assignee
    * createdBy  createdBy
    * createdTime  工作项创建时间
    * modifiedBy  modifiedBy
    * modifiedTime  工作项最近更新时间
    * planEndDate  工作项计划结束日期，时间戳
    * closeTime  工作项关闭时间
    * workload  工作项计划工时，保留一位小数，取值范围为0~999999999.9
    * workloadSum  工作项计划工时，保留一位小数，取值范围为0~999999999.9，不可编辑
    * tenantId  工作项所属租户id
    * link  工作项关联项id，多个关联项用英文逗号分隔，同一工作项最多支持50个关联项
    * suspended  工作项是否已挂起
    * statusModifiedTime  工作项状态改变时间，可用于计算工作项在当前状态停留天数
    * labels  工作项标签
    * customFields  工作项自定义字段映射，用户添加的系统字段也在此列 { \"code\":\"字段code\", \"value\":\"字段值\" }
    * children  工作项的子工作项集合
    * path  子工作项的路径
    * ir2feature  IR和FE的关联字段，工作项类型为IR时，有此字段
    * needBreak  工作项是否需要分解,仅可以分解的工作项类型有此字段
    * breakStatus  分解状态 已分解—decomposed 未分解—undecomposed 不涉及— --
    * baseline  工作项基线状态 未基线 —— null 已基线 —— baselined 基线评审中——baseline-reviewing
    * priority  工作项优先级，部分工作项有此字段
    * relatedNetworkSecurity  是否涉及网络安全。预设字段中，仅研发需求有此字段
    * collaboratives  研发需求协同信息，协同任务id
    * businessDomain  领域字段
    * planPi  工作项发布(老版本名为PI) id
    * changeStatus  工作项变更状态 变更评审中——change-reviewing 已变更——changed 未变更-unchange或null
    * noBreakReason  无需分解原因，need_break=no时有此字段
    * submittedBy  提出人，部分工作项有此字段，多人时用英文逗号分隔
    * ir2rr  IR关联的RR id，多选时用英文逗号分隔
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'title' => 'string',
            'description' => 'string',
            'type' => 'string',
            'number' => 'string',
            'category' => 'string',
            'parentId' => 'string',
            'projectId' => 'string',
            'status' => 'string',
            'state' => 'string',
            'assignee' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity',
            'createdBy' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity',
            'createdTime' => 'string',
            'modifiedBy' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity',
            'modifiedTime' => 'string',
            'planEndDate' => 'string',
            'closeTime' => 'string',
            'workload' => 'string',
            'workloadSum' => 'string',
            'tenantId' => 'string',
            'link' => 'string',
            'suspended' => 'bool',
            'statusModifiedTime' => 'string',
            'labels' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\LabelEntity[]',
            'customFields' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\FieldCodeValuePair[]',
            'children' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueEntity[]',
            'path' => 'string',
            'ir2feature' => 'string',
            'needBreak' => 'string',
            'breakStatus' => 'string',
            'baseline' => 'string',
            'priority' => 'string',
            'relatedNetworkSecurity' => 'string',
            'collaboratives' => 'string',
            'businessDomain' => 'string',
            'planPi' => 'string',
            'changeStatus' => 'string',
            'noBreakReason' => 'string',
            'submittedBy' => 'string',
            'ir2rr' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  工作项id
    * title  工作项标题
    * description  工作项描述字段
    * type  工作项大分类定义 requirement(研发需求)、bug(缺陷)、task(任务)、feature(特性)、raw_requirement(原始需求)
    * number  工作项编号
    * category  工作项类型，编辑工作项时，此字段必填、值为当前工作项正确的工作项类型，但不会更新此字段
    * parentId  父工作项id
    * projectId  工作项所属的项目id
    * status  工作项状态code
    * state  工作项的生命周期，可选值为\"正在工作\",\"作废\"
    * assignee  assignee
    * createdBy  createdBy
    * createdTime  工作项创建时间
    * modifiedBy  modifiedBy
    * modifiedTime  工作项最近更新时间
    * planEndDate  工作项计划结束日期，时间戳
    * closeTime  工作项关闭时间
    * workload  工作项计划工时，保留一位小数，取值范围为0~999999999.9
    * workloadSum  工作项计划工时，保留一位小数，取值范围为0~999999999.9，不可编辑
    * tenantId  工作项所属租户id
    * link  工作项关联项id，多个关联项用英文逗号分隔，同一工作项最多支持50个关联项
    * suspended  工作项是否已挂起
    * statusModifiedTime  工作项状态改变时间，可用于计算工作项在当前状态停留天数
    * labels  工作项标签
    * customFields  工作项自定义字段映射，用户添加的系统字段也在此列 { \"code\":\"字段code\", \"value\":\"字段值\" }
    * children  工作项的子工作项集合
    * path  子工作项的路径
    * ir2feature  IR和FE的关联字段，工作项类型为IR时，有此字段
    * needBreak  工作项是否需要分解,仅可以分解的工作项类型有此字段
    * breakStatus  分解状态 已分解—decomposed 未分解—undecomposed 不涉及— --
    * baseline  工作项基线状态 未基线 —— null 已基线 —— baselined 基线评审中——baseline-reviewing
    * priority  工作项优先级，部分工作项有此字段
    * relatedNetworkSecurity  是否涉及网络安全。预设字段中，仅研发需求有此字段
    * collaboratives  研发需求协同信息，协同任务id
    * businessDomain  领域字段
    * planPi  工作项发布(老版本名为PI) id
    * changeStatus  工作项变更状态 变更评审中——change-reviewing 已变更——changed 未变更-unchange或null
    * noBreakReason  无需分解原因，need_break=no时有此字段
    * submittedBy  提出人，部分工作项有此字段，多人时用英文逗号分隔
    * ir2rr  IR关联的RR id，多选时用英文逗号分隔
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'title' => null,
        'description' => null,
        'type' => null,
        'number' => null,
        'category' => null,
        'parentId' => null,
        'projectId' => null,
        'status' => null,
        'state' => null,
        'assignee' => null,
        'createdBy' => null,
        'createdTime' => null,
        'modifiedBy' => null,
        'modifiedTime' => null,
        'planEndDate' => null,
        'closeTime' => null,
        'workload' => null,
        'workloadSum' => null,
        'tenantId' => null,
        'link' => null,
        'suspended' => null,
        'statusModifiedTime' => null,
        'labels' => null,
        'customFields' => null,
        'children' => null,
        'path' => null,
        'ir2feature' => null,
        'needBreak' => null,
        'breakStatus' => null,
        'baseline' => null,
        'priority' => null,
        'relatedNetworkSecurity' => null,
        'collaboratives' => null,
        'businessDomain' => null,
        'planPi' => null,
        'changeStatus' => null,
        'noBreakReason' => null,
        'submittedBy' => null,
        'ir2rr' => null
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
    * id  工作项id
    * title  工作项标题
    * description  工作项描述字段
    * type  工作项大分类定义 requirement(研发需求)、bug(缺陷)、task(任务)、feature(特性)、raw_requirement(原始需求)
    * number  工作项编号
    * category  工作项类型，编辑工作项时，此字段必填、值为当前工作项正确的工作项类型，但不会更新此字段
    * parentId  父工作项id
    * projectId  工作项所属的项目id
    * status  工作项状态code
    * state  工作项的生命周期，可选值为\"正在工作\",\"作废\"
    * assignee  assignee
    * createdBy  createdBy
    * createdTime  工作项创建时间
    * modifiedBy  modifiedBy
    * modifiedTime  工作项最近更新时间
    * planEndDate  工作项计划结束日期，时间戳
    * closeTime  工作项关闭时间
    * workload  工作项计划工时，保留一位小数，取值范围为0~999999999.9
    * workloadSum  工作项计划工时，保留一位小数，取值范围为0~999999999.9，不可编辑
    * tenantId  工作项所属租户id
    * link  工作项关联项id，多个关联项用英文逗号分隔，同一工作项最多支持50个关联项
    * suspended  工作项是否已挂起
    * statusModifiedTime  工作项状态改变时间，可用于计算工作项在当前状态停留天数
    * labels  工作项标签
    * customFields  工作项自定义字段映射，用户添加的系统字段也在此列 { \"code\":\"字段code\", \"value\":\"字段值\" }
    * children  工作项的子工作项集合
    * path  子工作项的路径
    * ir2feature  IR和FE的关联字段，工作项类型为IR时，有此字段
    * needBreak  工作项是否需要分解,仅可以分解的工作项类型有此字段
    * breakStatus  分解状态 已分解—decomposed 未分解—undecomposed 不涉及— --
    * baseline  工作项基线状态 未基线 —— null 已基线 —— baselined 基线评审中——baseline-reviewing
    * priority  工作项优先级，部分工作项有此字段
    * relatedNetworkSecurity  是否涉及网络安全。预设字段中，仅研发需求有此字段
    * collaboratives  研发需求协同信息，协同任务id
    * businessDomain  领域字段
    * planPi  工作项发布(老版本名为PI) id
    * changeStatus  工作项变更状态 变更评审中——change-reviewing 已变更——changed 未变更-unchange或null
    * noBreakReason  无需分解原因，need_break=no时有此字段
    * submittedBy  提出人，部分工作项有此字段，多人时用英文逗号分隔
    * ir2rr  IR关联的RR id，多选时用英文逗号分隔
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'title' => 'title',
            'description' => 'description',
            'type' => 'type',
            'number' => 'number',
            'category' => 'category',
            'parentId' => 'parent_id',
            'projectId' => 'project_id',
            'status' => 'status',
            'state' => 'state',
            'assignee' => 'assignee',
            'createdBy' => 'created_by',
            'createdTime' => 'created_time',
            'modifiedBy' => 'modified_by',
            'modifiedTime' => 'modified_time',
            'planEndDate' => 'plan_end_date',
            'closeTime' => 'close_time',
            'workload' => 'workload',
            'workloadSum' => 'workload_sum',
            'tenantId' => 'tenant_id',
            'link' => 'link',
            'suspended' => 'suspended',
            'statusModifiedTime' => 'status_modified_time',
            'labels' => 'labels',
            'customFields' => 'custom_fields',
            'children' => 'children',
            'path' => 'path',
            'ir2feature' => 'ir2feature',
            'needBreak' => 'need_break',
            'breakStatus' => 'break_status',
            'baseline' => 'baseline',
            'priority' => 'priority',
            'relatedNetworkSecurity' => 'related_network_security',
            'collaboratives' => 'collaboratives',
            'businessDomain' => 'business_domain',
            'planPi' => 'plan_pi',
            'changeStatus' => 'change_status',
            'noBreakReason' => 'no_break_reason',
            'submittedBy' => 'submitted_by',
            'ir2rr' => 'ir2rr'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  工作项id
    * title  工作项标题
    * description  工作项描述字段
    * type  工作项大分类定义 requirement(研发需求)、bug(缺陷)、task(任务)、feature(特性)、raw_requirement(原始需求)
    * number  工作项编号
    * category  工作项类型，编辑工作项时，此字段必填、值为当前工作项正确的工作项类型，但不会更新此字段
    * parentId  父工作项id
    * projectId  工作项所属的项目id
    * status  工作项状态code
    * state  工作项的生命周期，可选值为\"正在工作\",\"作废\"
    * assignee  assignee
    * createdBy  createdBy
    * createdTime  工作项创建时间
    * modifiedBy  modifiedBy
    * modifiedTime  工作项最近更新时间
    * planEndDate  工作项计划结束日期，时间戳
    * closeTime  工作项关闭时间
    * workload  工作项计划工时，保留一位小数，取值范围为0~999999999.9
    * workloadSum  工作项计划工时，保留一位小数，取值范围为0~999999999.9，不可编辑
    * tenantId  工作项所属租户id
    * link  工作项关联项id，多个关联项用英文逗号分隔，同一工作项最多支持50个关联项
    * suspended  工作项是否已挂起
    * statusModifiedTime  工作项状态改变时间，可用于计算工作项在当前状态停留天数
    * labels  工作项标签
    * customFields  工作项自定义字段映射，用户添加的系统字段也在此列 { \"code\":\"字段code\", \"value\":\"字段值\" }
    * children  工作项的子工作项集合
    * path  子工作项的路径
    * ir2feature  IR和FE的关联字段，工作项类型为IR时，有此字段
    * needBreak  工作项是否需要分解,仅可以分解的工作项类型有此字段
    * breakStatus  分解状态 已分解—decomposed 未分解—undecomposed 不涉及— --
    * baseline  工作项基线状态 未基线 —— null 已基线 —— baselined 基线评审中——baseline-reviewing
    * priority  工作项优先级，部分工作项有此字段
    * relatedNetworkSecurity  是否涉及网络安全。预设字段中，仅研发需求有此字段
    * collaboratives  研发需求协同信息，协同任务id
    * businessDomain  领域字段
    * planPi  工作项发布(老版本名为PI) id
    * changeStatus  工作项变更状态 变更评审中——change-reviewing 已变更——changed 未变更-unchange或null
    * noBreakReason  无需分解原因，need_break=no时有此字段
    * submittedBy  提出人，部分工作项有此字段，多人时用英文逗号分隔
    * ir2rr  IR关联的RR id，多选时用英文逗号分隔
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'title' => 'setTitle',
            'description' => 'setDescription',
            'type' => 'setType',
            'number' => 'setNumber',
            'category' => 'setCategory',
            'parentId' => 'setParentId',
            'projectId' => 'setProjectId',
            'status' => 'setStatus',
            'state' => 'setState',
            'assignee' => 'setAssignee',
            'createdBy' => 'setCreatedBy',
            'createdTime' => 'setCreatedTime',
            'modifiedBy' => 'setModifiedBy',
            'modifiedTime' => 'setModifiedTime',
            'planEndDate' => 'setPlanEndDate',
            'closeTime' => 'setCloseTime',
            'workload' => 'setWorkload',
            'workloadSum' => 'setWorkloadSum',
            'tenantId' => 'setTenantId',
            'link' => 'setLink',
            'suspended' => 'setSuspended',
            'statusModifiedTime' => 'setStatusModifiedTime',
            'labels' => 'setLabels',
            'customFields' => 'setCustomFields',
            'children' => 'setChildren',
            'path' => 'setPath',
            'ir2feature' => 'setIr2feature',
            'needBreak' => 'setNeedBreak',
            'breakStatus' => 'setBreakStatus',
            'baseline' => 'setBaseline',
            'priority' => 'setPriority',
            'relatedNetworkSecurity' => 'setRelatedNetworkSecurity',
            'collaboratives' => 'setCollaboratives',
            'businessDomain' => 'setBusinessDomain',
            'planPi' => 'setPlanPi',
            'changeStatus' => 'setChangeStatus',
            'noBreakReason' => 'setNoBreakReason',
            'submittedBy' => 'setSubmittedBy',
            'ir2rr' => 'setIr2rr'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  工作项id
    * title  工作项标题
    * description  工作项描述字段
    * type  工作项大分类定义 requirement(研发需求)、bug(缺陷)、task(任务)、feature(特性)、raw_requirement(原始需求)
    * number  工作项编号
    * category  工作项类型，编辑工作项时，此字段必填、值为当前工作项正确的工作项类型，但不会更新此字段
    * parentId  父工作项id
    * projectId  工作项所属的项目id
    * status  工作项状态code
    * state  工作项的生命周期，可选值为\"正在工作\",\"作废\"
    * assignee  assignee
    * createdBy  createdBy
    * createdTime  工作项创建时间
    * modifiedBy  modifiedBy
    * modifiedTime  工作项最近更新时间
    * planEndDate  工作项计划结束日期，时间戳
    * closeTime  工作项关闭时间
    * workload  工作项计划工时，保留一位小数，取值范围为0~999999999.9
    * workloadSum  工作项计划工时，保留一位小数，取值范围为0~999999999.9，不可编辑
    * tenantId  工作项所属租户id
    * link  工作项关联项id，多个关联项用英文逗号分隔，同一工作项最多支持50个关联项
    * suspended  工作项是否已挂起
    * statusModifiedTime  工作项状态改变时间，可用于计算工作项在当前状态停留天数
    * labels  工作项标签
    * customFields  工作项自定义字段映射，用户添加的系统字段也在此列 { \"code\":\"字段code\", \"value\":\"字段值\" }
    * children  工作项的子工作项集合
    * path  子工作项的路径
    * ir2feature  IR和FE的关联字段，工作项类型为IR时，有此字段
    * needBreak  工作项是否需要分解,仅可以分解的工作项类型有此字段
    * breakStatus  分解状态 已分解—decomposed 未分解—undecomposed 不涉及— --
    * baseline  工作项基线状态 未基线 —— null 已基线 —— baselined 基线评审中——baseline-reviewing
    * priority  工作项优先级，部分工作项有此字段
    * relatedNetworkSecurity  是否涉及网络安全。预设字段中，仅研发需求有此字段
    * collaboratives  研发需求协同信息，协同任务id
    * businessDomain  领域字段
    * planPi  工作项发布(老版本名为PI) id
    * changeStatus  工作项变更状态 变更评审中——change-reviewing 已变更——changed 未变更-unchange或null
    * noBreakReason  无需分解原因，need_break=no时有此字段
    * submittedBy  提出人，部分工作项有此字段，多人时用英文逗号分隔
    * ir2rr  IR关联的RR id，多选时用英文逗号分隔
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'title' => 'getTitle',
            'description' => 'getDescription',
            'type' => 'getType',
            'number' => 'getNumber',
            'category' => 'getCategory',
            'parentId' => 'getParentId',
            'projectId' => 'getProjectId',
            'status' => 'getStatus',
            'state' => 'getState',
            'assignee' => 'getAssignee',
            'createdBy' => 'getCreatedBy',
            'createdTime' => 'getCreatedTime',
            'modifiedBy' => 'getModifiedBy',
            'modifiedTime' => 'getModifiedTime',
            'planEndDate' => 'getPlanEndDate',
            'closeTime' => 'getCloseTime',
            'workload' => 'getWorkload',
            'workloadSum' => 'getWorkloadSum',
            'tenantId' => 'getTenantId',
            'link' => 'getLink',
            'suspended' => 'getSuspended',
            'statusModifiedTime' => 'getStatusModifiedTime',
            'labels' => 'getLabels',
            'customFields' => 'getCustomFields',
            'children' => 'getChildren',
            'path' => 'getPath',
            'ir2feature' => 'getIr2feature',
            'needBreak' => 'getNeedBreak',
            'breakStatus' => 'getBreakStatus',
            'baseline' => 'getBaseline',
            'priority' => 'getPriority',
            'relatedNetworkSecurity' => 'getRelatedNetworkSecurity',
            'collaboratives' => 'getCollaboratives',
            'businessDomain' => 'getBusinessDomain',
            'planPi' => 'getPlanPi',
            'changeStatus' => 'getChangeStatus',
            'noBreakReason' => 'getNoBreakReason',
            'submittedBy' => 'getSubmittedBy',
            'ir2rr' => 'getIr2rr'
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['assignee'] = isset($data['assignee']) ? $data['assignee'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['modifiedBy'] = isset($data['modifiedBy']) ? $data['modifiedBy'] : null;
        $this->container['modifiedTime'] = isset($data['modifiedTime']) ? $data['modifiedTime'] : null;
        $this->container['planEndDate'] = isset($data['planEndDate']) ? $data['planEndDate'] : null;
        $this->container['closeTime'] = isset($data['closeTime']) ? $data['closeTime'] : null;
        $this->container['workload'] = isset($data['workload']) ? $data['workload'] : null;
        $this->container['workloadSum'] = isset($data['workloadSum']) ? $data['workloadSum'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['suspended'] = isset($data['suspended']) ? $data['suspended'] : null;
        $this->container['statusModifiedTime'] = isset($data['statusModifiedTime']) ? $data['statusModifiedTime'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['customFields'] = isset($data['customFields']) ? $data['customFields'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['ir2feature'] = isset($data['ir2feature']) ? $data['ir2feature'] : null;
        $this->container['needBreak'] = isset($data['needBreak']) ? $data['needBreak'] : null;
        $this->container['breakStatus'] = isset($data['breakStatus']) ? $data['breakStatus'] : null;
        $this->container['baseline'] = isset($data['baseline']) ? $data['baseline'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['relatedNetworkSecurity'] = isset($data['relatedNetworkSecurity']) ? $data['relatedNetworkSecurity'] : null;
        $this->container['collaboratives'] = isset($data['collaboratives']) ? $data['collaboratives'] : null;
        $this->container['businessDomain'] = isset($data['businessDomain']) ? $data['businessDomain'] : null;
        $this->container['planPi'] = isset($data['planPi']) ? $data['planPi'] : null;
        $this->container['changeStatus'] = isset($data['changeStatus']) ? $data['changeStatus'] : null;
        $this->container['noBreakReason'] = isset($data['noBreakReason']) ? $data['noBreakReason'] : null;
        $this->container['submittedBy'] = isset($data['submittedBy']) ? $data['submittedBy'] : null;
        $this->container['ir2rr'] = isset($data['ir2rr']) ? $data['ir2rr'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 19)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 18)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 18.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 256)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 1)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 50000)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 50000.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 128)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['number']) && (mb_strlen($this->container['number']) > 128)) {
                $invalidProperties[] = "invalid value for 'number', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['number']) && (mb_strlen($this->container['number']) < 0)) {
                $invalidProperties[] = "invalid value for 'number', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) > 16)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) < 2)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['parentId']) && (mb_strlen($this->container['parentId']) > 19)) {
                $invalidProperties[] = "invalid value for 'parentId', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['parentId']) && (mb_strlen($this->container['parentId']) < 18)) {
                $invalidProperties[] = "invalid value for 'parentId', the character length must be bigger than or equal to 18.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 32)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 2)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 8)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 8.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) < 2)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['createdTime']) && (mb_strlen($this->container['createdTime']) > 19)) {
                $invalidProperties[] = "invalid value for 'createdTime', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['createdTime']) && (mb_strlen($this->container['createdTime']) < 13)) {
                $invalidProperties[] = "invalid value for 'createdTime', the character length must be bigger than or equal to 13.";
            }
            if (!is_null($this->container['modifiedTime']) && (mb_strlen($this->container['modifiedTime']) > 19)) {
                $invalidProperties[] = "invalid value for 'modifiedTime', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['modifiedTime']) && (mb_strlen($this->container['modifiedTime']) < 13)) {
                $invalidProperties[] = "invalid value for 'modifiedTime', the character length must be bigger than or equal to 13.";
            }
            if (!is_null($this->container['planEndDate']) && (mb_strlen($this->container['planEndDate']) > 32)) {
                $invalidProperties[] = "invalid value for 'planEndDate', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['planEndDate']) && (mb_strlen($this->container['planEndDate']) < 0)) {
                $invalidProperties[] = "invalid value for 'planEndDate', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['closeTime']) && (mb_strlen($this->container['closeTime']) > 19)) {
                $invalidProperties[] = "invalid value for 'closeTime', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['closeTime']) && (mb_strlen($this->container['closeTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'closeTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['workload']) && (mb_strlen($this->container['workload']) > 11)) {
                $invalidProperties[] = "invalid value for 'workload', the character length must be smaller than or equal to 11.";
            }
            if (!is_null($this->container['workload']) && (mb_strlen($this->container['workload']) < 0)) {
                $invalidProperties[] = "invalid value for 'workload', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['workloadSum']) && (mb_strlen($this->container['workloadSum']) > 11)) {
                $invalidProperties[] = "invalid value for 'workloadSum', the character length must be smaller than or equal to 11.";
            }
            if (!is_null($this->container['workloadSum']) && (mb_strlen($this->container['workloadSum']) < 0)) {
                $invalidProperties[] = "invalid value for 'workloadSum', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) > 32)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) < 32)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['link']) && (mb_strlen($this->container['link']) > 2048)) {
                $invalidProperties[] = "invalid value for 'link', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['link']) && (mb_strlen($this->container['link']) < 0)) {
                $invalidProperties[] = "invalid value for 'link', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['statusModifiedTime']) && (mb_strlen($this->container['statusModifiedTime']) > 19)) {
                $invalidProperties[] = "invalid value for 'statusModifiedTime', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['statusModifiedTime']) && (mb_strlen($this->container['statusModifiedTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'statusModifiedTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) > 256)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) < 0)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ir2feature']) && (mb_strlen($this->container['ir2feature']) > 19)) {
                $invalidProperties[] = "invalid value for 'ir2feature', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['ir2feature']) && (mb_strlen($this->container['ir2feature']) < 18)) {
                $invalidProperties[] = "invalid value for 'ir2feature', the character length must be bigger than or equal to 18.";
            }
            if (!is_null($this->container['needBreak']) && (mb_strlen($this->container['needBreak']) > 32)) {
                $invalidProperties[] = "invalid value for 'needBreak', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['needBreak']) && (mb_strlen($this->container['needBreak']) < 0)) {
                $invalidProperties[] = "invalid value for 'needBreak', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['breakStatus']) && (mb_strlen($this->container['breakStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'breakStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['breakStatus']) && (mb_strlen($this->container['breakStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'breakStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['baseline']) && (mb_strlen($this->container['baseline']) > 32)) {
                $invalidProperties[] = "invalid value for 'baseline', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['baseline']) && (mb_strlen($this->container['baseline']) < 0)) {
                $invalidProperties[] = "invalid value for 'baseline', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['priority']) && (mb_strlen($this->container['priority']) > 32)) {
                $invalidProperties[] = "invalid value for 'priority', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['priority']) && (mb_strlen($this->container['priority']) < 0)) {
                $invalidProperties[] = "invalid value for 'priority', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['relatedNetworkSecurity']) && (mb_strlen($this->container['relatedNetworkSecurity']) > 32)) {
                $invalidProperties[] = "invalid value for 'relatedNetworkSecurity', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['relatedNetworkSecurity']) && (mb_strlen($this->container['relatedNetworkSecurity']) < 0)) {
                $invalidProperties[] = "invalid value for 'relatedNetworkSecurity', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['collaboratives']) && (mb_strlen($this->container['collaboratives']) > 256)) {
                $invalidProperties[] = "invalid value for 'collaboratives', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['collaboratives']) && (mb_strlen($this->container['collaboratives']) < 0)) {
                $invalidProperties[] = "invalid value for 'collaboratives', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['businessDomain']) && (mb_strlen($this->container['businessDomain']) > 32)) {
                $invalidProperties[] = "invalid value for 'businessDomain', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['businessDomain']) && (mb_strlen($this->container['businessDomain']) < 0)) {
                $invalidProperties[] = "invalid value for 'businessDomain', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['planPi']) && (mb_strlen($this->container['planPi']) > 19)) {
                $invalidProperties[] = "invalid value for 'planPi', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['planPi']) && (mb_strlen($this->container['planPi']) < 18)) {
                $invalidProperties[] = "invalid value for 'planPi', the character length must be bigger than or equal to 18.";
            }
            if (!is_null($this->container['changeStatus']) && (mb_strlen($this->container['changeStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'changeStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['changeStatus']) && (mb_strlen($this->container['changeStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'changeStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['noBreakReason']) && (mb_strlen($this->container['noBreakReason']) > 512)) {
                $invalidProperties[] = "invalid value for 'noBreakReason', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['noBreakReason']) && (mb_strlen($this->container['noBreakReason']) < 0)) {
                $invalidProperties[] = "invalid value for 'noBreakReason', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['submittedBy']) && (mb_strlen($this->container['submittedBy']) > 2048)) {
                $invalidProperties[] = "invalid value for 'submittedBy', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['submittedBy']) && (mb_strlen($this->container['submittedBy']) < 0)) {
                $invalidProperties[] = "invalid value for 'submittedBy', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ir2rr']) && (mb_strlen($this->container['ir2rr']) > 1024)) {
                $invalidProperties[] = "invalid value for 'ir2rr', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['ir2rr']) && (mb_strlen($this->container['ir2rr']) < 0)) {
                $invalidProperties[] = "invalid value for 'ir2rr', the character length must be bigger than or equal to 0.";
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
    *  工作项id
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
    * @param string|null $id 工作项id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets title
    *  工作项标题
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
    * @param string|null $title 工作项标题
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets description
    *  工作项描述字段
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
    * @param string|null $description 工作项描述字段
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets type
    *  工作项大分类定义 requirement(研发需求)、bug(缺陷)、task(任务)、feature(特性)、raw_requirement(原始需求)
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
    * @param string|null $type 工作项大分类定义 requirement(研发需求)、bug(缺陷)、task(任务)、feature(特性)、raw_requirement(原始需求)
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets number
    *  工作项编号
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
    * @param string|null $number 工作项编号
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets category
    *  工作项类型，编辑工作项时，此字段必填、值为当前工作项正确的工作项类型，但不会更新此字段
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
    * @param string|null $category 工作项类型，编辑工作项时，此字段必填、值为当前工作项正确的工作项类型，但不会更新此字段
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets parentId
    *  父工作项id
    *
    * @return string|null
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param string|null $parentId 父工作项id
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets projectId
    *  工作项所属的项目id
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
    * @param string|null $projectId 工作项所属的项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets status
    *  工作项状态code
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
    * @param string|null $status 工作项状态code
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets state
    *  工作项的生命周期，可选值为\"正在工作\",\"作废\"
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
    * @param string|null $state 工作项的生命周期，可选值为\"正在工作\",\"作废\"
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets assignee
    *  assignee
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null
    */
    public function getAssignee()
    {
        return $this->container['assignee'];
    }

    /**
    * Sets assignee
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null $assignee assignee
    *
    * @return $this
    */
    public function setAssignee($assignee)
    {
        $this->container['assignee'] = $assignee;
        return $this;
    }

    /**
    * Gets createdBy
    *  createdBy
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null $createdBy createdBy
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets createdTime
    *  工作项创建时间
    *
    * @return string|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param string|null $createdTime 工作项创建时间
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
        return $this;
    }

    /**
    * Gets modifiedBy
    *  modifiedBy
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null
    */
    public function getModifiedBy()
    {
        return $this->container['modifiedBy'];
    }

    /**
    * Sets modifiedBy
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null $modifiedBy modifiedBy
    *
    * @return $this
    */
    public function setModifiedBy($modifiedBy)
    {
        $this->container['modifiedBy'] = $modifiedBy;
        return $this;
    }

    /**
    * Gets modifiedTime
    *  工作项最近更新时间
    *
    * @return string|null
    */
    public function getModifiedTime()
    {
        return $this->container['modifiedTime'];
    }

    /**
    * Sets modifiedTime
    *
    * @param string|null $modifiedTime 工作项最近更新时间
    *
    * @return $this
    */
    public function setModifiedTime($modifiedTime)
    {
        $this->container['modifiedTime'] = $modifiedTime;
        return $this;
    }

    /**
    * Gets planEndDate
    *  工作项计划结束日期，时间戳
    *
    * @return string|null
    */
    public function getPlanEndDate()
    {
        return $this->container['planEndDate'];
    }

    /**
    * Sets planEndDate
    *
    * @param string|null $planEndDate 工作项计划结束日期，时间戳
    *
    * @return $this
    */
    public function setPlanEndDate($planEndDate)
    {
        $this->container['planEndDate'] = $planEndDate;
        return $this;
    }

    /**
    * Gets closeTime
    *  工作项关闭时间
    *
    * @return string|null
    */
    public function getCloseTime()
    {
        return $this->container['closeTime'];
    }

    /**
    * Sets closeTime
    *
    * @param string|null $closeTime 工作项关闭时间
    *
    * @return $this
    */
    public function setCloseTime($closeTime)
    {
        $this->container['closeTime'] = $closeTime;
        return $this;
    }

    /**
    * Gets workload
    *  工作项计划工时，保留一位小数，取值范围为0~999999999.9
    *
    * @return string|null
    */
    public function getWorkload()
    {
        return $this->container['workload'];
    }

    /**
    * Sets workload
    *
    * @param string|null $workload 工作项计划工时，保留一位小数，取值范围为0~999999999.9
    *
    * @return $this
    */
    public function setWorkload($workload)
    {
        $this->container['workload'] = $workload;
        return $this;
    }

    /**
    * Gets workloadSum
    *  工作项计划工时，保留一位小数，取值范围为0~999999999.9，不可编辑
    *
    * @return string|null
    */
    public function getWorkloadSum()
    {
        return $this->container['workloadSum'];
    }

    /**
    * Sets workloadSum
    *
    * @param string|null $workloadSum 工作项计划工时，保留一位小数，取值范围为0~999999999.9，不可编辑
    *
    * @return $this
    */
    public function setWorkloadSum($workloadSum)
    {
        $this->container['workloadSum'] = $workloadSum;
        return $this;
    }

    /**
    * Gets tenantId
    *  工作项所属租户id
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
    * @param string|null $tenantId 工作项所属租户id
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets link
    *  工作项关联项id，多个关联项用英文逗号分隔，同一工作项最多支持50个关联项
    *
    * @return string|null
    */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
    * Sets link
    *
    * @param string|null $link 工作项关联项id，多个关联项用英文逗号分隔，同一工作项最多支持50个关联项
    *
    * @return $this
    */
    public function setLink($link)
    {
        $this->container['link'] = $link;
        return $this;
    }

    /**
    * Gets suspended
    *  工作项是否已挂起
    *
    * @return bool|null
    */
    public function getSuspended()
    {
        return $this->container['suspended'];
    }

    /**
    * Sets suspended
    *
    * @param bool|null $suspended 工作项是否已挂起
    *
    * @return $this
    */
    public function setSuspended($suspended)
    {
        $this->container['suspended'] = $suspended;
        return $this;
    }

    /**
    * Gets statusModifiedTime
    *  工作项状态改变时间，可用于计算工作项在当前状态停留天数
    *
    * @return string|null
    */
    public function getStatusModifiedTime()
    {
        return $this->container['statusModifiedTime'];
    }

    /**
    * Sets statusModifiedTime
    *
    * @param string|null $statusModifiedTime 工作项状态改变时间，可用于计算工作项在当前状态停留天数
    *
    * @return $this
    */
    public function setStatusModifiedTime($statusModifiedTime)
    {
        $this->container['statusModifiedTime'] = $statusModifiedTime;
        return $this;
    }

    /**
    * Gets labels
    *  工作项标签
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\LabelEntity[]|null
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\LabelEntity[]|null $labels 工作项标签
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets customFields
    *  工作项自定义字段映射，用户添加的系统字段也在此列 { \"code\":\"字段code\", \"value\":\"字段值\" }
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\FieldCodeValuePair[]|null
    */
    public function getCustomFields()
    {
        return $this->container['customFields'];
    }

    /**
    * Sets customFields
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\FieldCodeValuePair[]|null $customFields 工作项自定义字段映射，用户添加的系统字段也在此列 { \"code\":\"字段code\", \"value\":\"字段值\" }
    *
    * @return $this
    */
    public function setCustomFields($customFields)
    {
        $this->container['customFields'] = $customFields;
        return $this;
    }

    /**
    * Gets children
    *  工作项的子工作项集合
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueEntity[]|null
    */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
    * Sets children
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueEntity[]|null $children 工作项的子工作项集合
    *
    * @return $this
    */
    public function setChildren($children)
    {
        $this->container['children'] = $children;
        return $this;
    }

    /**
    * Gets path
    *  子工作项的路径
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path 子工作项的路径
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets ir2feature
    *  IR和FE的关联字段，工作项类型为IR时，有此字段
    *
    * @return string|null
    */
    public function getIr2feature()
    {
        return $this->container['ir2feature'];
    }

    /**
    * Sets ir2feature
    *
    * @param string|null $ir2feature IR和FE的关联字段，工作项类型为IR时，有此字段
    *
    * @return $this
    */
    public function setIr2feature($ir2feature)
    {
        $this->container['ir2feature'] = $ir2feature;
        return $this;
    }

    /**
    * Gets needBreak
    *  工作项是否需要分解,仅可以分解的工作项类型有此字段
    *
    * @return string|null
    */
    public function getNeedBreak()
    {
        return $this->container['needBreak'];
    }

    /**
    * Sets needBreak
    *
    * @param string|null $needBreak 工作项是否需要分解,仅可以分解的工作项类型有此字段
    *
    * @return $this
    */
    public function setNeedBreak($needBreak)
    {
        $this->container['needBreak'] = $needBreak;
        return $this;
    }

    /**
    * Gets breakStatus
    *  分解状态 已分解—decomposed 未分解—undecomposed 不涉及— --
    *
    * @return string|null
    */
    public function getBreakStatus()
    {
        return $this->container['breakStatus'];
    }

    /**
    * Sets breakStatus
    *
    * @param string|null $breakStatus 分解状态 已分解—decomposed 未分解—undecomposed 不涉及— --
    *
    * @return $this
    */
    public function setBreakStatus($breakStatus)
    {
        $this->container['breakStatus'] = $breakStatus;
        return $this;
    }

    /**
    * Gets baseline
    *  工作项基线状态 未基线 —— null 已基线 —— baselined 基线评审中——baseline-reviewing
    *
    * @return string|null
    */
    public function getBaseline()
    {
        return $this->container['baseline'];
    }

    /**
    * Sets baseline
    *
    * @param string|null $baseline 工作项基线状态 未基线 —— null 已基线 —— baselined 基线评审中——baseline-reviewing
    *
    * @return $this
    */
    public function setBaseline($baseline)
    {
        $this->container['baseline'] = $baseline;
        return $this;
    }

    /**
    * Gets priority
    *  工作项优先级，部分工作项有此字段
    *
    * @return string|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param string|null $priority 工作项优先级，部分工作项有此字段
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets relatedNetworkSecurity
    *  是否涉及网络安全。预设字段中，仅研发需求有此字段
    *
    * @return string|null
    */
    public function getRelatedNetworkSecurity()
    {
        return $this->container['relatedNetworkSecurity'];
    }

    /**
    * Sets relatedNetworkSecurity
    *
    * @param string|null $relatedNetworkSecurity 是否涉及网络安全。预设字段中，仅研发需求有此字段
    *
    * @return $this
    */
    public function setRelatedNetworkSecurity($relatedNetworkSecurity)
    {
        $this->container['relatedNetworkSecurity'] = $relatedNetworkSecurity;
        return $this;
    }

    /**
    * Gets collaboratives
    *  研发需求协同信息，协同任务id
    *
    * @return string|null
    */
    public function getCollaboratives()
    {
        return $this->container['collaboratives'];
    }

    /**
    * Sets collaboratives
    *
    * @param string|null $collaboratives 研发需求协同信息，协同任务id
    *
    * @return $this
    */
    public function setCollaboratives($collaboratives)
    {
        $this->container['collaboratives'] = $collaboratives;
        return $this;
    }

    /**
    * Gets businessDomain
    *  领域字段
    *
    * @return string|null
    */
    public function getBusinessDomain()
    {
        return $this->container['businessDomain'];
    }

    /**
    * Sets businessDomain
    *
    * @param string|null $businessDomain 领域字段
    *
    * @return $this
    */
    public function setBusinessDomain($businessDomain)
    {
        $this->container['businessDomain'] = $businessDomain;
        return $this;
    }

    /**
    * Gets planPi
    *  工作项发布(老版本名为PI) id
    *
    * @return string|null
    */
    public function getPlanPi()
    {
        return $this->container['planPi'];
    }

    /**
    * Sets planPi
    *
    * @param string|null $planPi 工作项发布(老版本名为PI) id
    *
    * @return $this
    */
    public function setPlanPi($planPi)
    {
        $this->container['planPi'] = $planPi;
        return $this;
    }

    /**
    * Gets changeStatus
    *  工作项变更状态 变更评审中——change-reviewing 已变更——changed 未变更-unchange或null
    *
    * @return string|null
    */
    public function getChangeStatus()
    {
        return $this->container['changeStatus'];
    }

    /**
    * Sets changeStatus
    *
    * @param string|null $changeStatus 工作项变更状态 变更评审中——change-reviewing 已变更——changed 未变更-unchange或null
    *
    * @return $this
    */
    public function setChangeStatus($changeStatus)
    {
        $this->container['changeStatus'] = $changeStatus;
        return $this;
    }

    /**
    * Gets noBreakReason
    *  无需分解原因，need_break=no时有此字段
    *
    * @return string|null
    */
    public function getNoBreakReason()
    {
        return $this->container['noBreakReason'];
    }

    /**
    * Sets noBreakReason
    *
    * @param string|null $noBreakReason 无需分解原因，need_break=no时有此字段
    *
    * @return $this
    */
    public function setNoBreakReason($noBreakReason)
    {
        $this->container['noBreakReason'] = $noBreakReason;
        return $this;
    }

    /**
    * Gets submittedBy
    *  提出人，部分工作项有此字段，多人时用英文逗号分隔
    *
    * @return string|null
    */
    public function getSubmittedBy()
    {
        return $this->container['submittedBy'];
    }

    /**
    * Sets submittedBy
    *
    * @param string|null $submittedBy 提出人，部分工作项有此字段，多人时用英文逗号分隔
    *
    * @return $this
    */
    public function setSubmittedBy($submittedBy)
    {
        $this->container['submittedBy'] = $submittedBy;
        return $this;
    }

    /**
    * Gets ir2rr
    *  IR关联的RR id，多选时用英文逗号分隔
    *
    * @return string|null
    */
    public function getIr2rr()
    {
        return $this->container['ir2rr'];
    }

    /**
    * Sets ir2rr
    *
    * @param string|null $ir2rr IR关联的RR id，多选时用英文逗号分隔
    *
    * @return $this
    */
    public function setIr2rr($ir2rr)
    {
        $this->container['ir2rr'] = $ir2rr;
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

