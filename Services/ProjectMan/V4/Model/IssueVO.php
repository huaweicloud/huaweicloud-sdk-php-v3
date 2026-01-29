<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IssueVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IssueVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sysAnalysisConclusion  **参数解释：**  分析结论，通常在接纳RR时填写。 **取值范围：**  不涉及。
    * sysRemark  **参数解释：**  备注。通常在提交验收RR时填写。 **取值范围：**  不涉及。
    * promised  promised
    * type  **参数解释：**  工作项的分类。 **取值范围：**  - requirement - raw requirement - bug - task - feature
    * belongInside  **参数解释：**  标识工作项是否跨项目提交。 **取值范围：**  - 1：跨项目提交工作项。 - 0：非跨项目提交工作项。
    * srcDomain  srcDomain
    * domainId  domainId
    * sendFrom  **参数解释：**  原始需求的协同上游需求Id。 **取值范围：**  不涉及。
    * number  **参数解释：**  工作项编号，由工作项类型+年月日+6位随机数组成。 **取值范围：**  不涉及。
    * sendTo  **参数解释：**  原始需求的协同下游需求Id。 **取值范围：**  不涉及。
    * path  **参数解释：**  工作项父子挂载路径关系。 **取值范围：**  不涉及。
    * workloadManDay  **参数解释：**  工作项计划工时。 **取值范围：**  不涉及。
    * sysCheckConclusion  **参数解释：**  验收结论。通常是验收RR时填写。 **取值范围：**  不涉及。
    * id  **参数解释：**  工作项唯一Id。 **取值范围：**  不涉及。
    * state  **参数解释：**  工作项生命周期。 **取值范围：**  - 正在工作：可正常操作的工作项； - 作废：软删除后的工作项，可在回收站恢复； - 删除：彻底删除后的工作项，无法恢复。
    * stayDays  **参数解释：**  工作项在当前状态的停留天数。 **取值范围：**  不涉及。
    * assignedCc  **参数解释：**  抄送人。 **取值范围：**  不涉及。
    * submitTime  **参数解释：**  工作项提交时间，指工作项进入工作流的时间，而不是创建时间。 **取值范围：**  不涉及。
    * workitem2label  **参数解释：**  工作项标签。 **取值范围：**  不涉及。
    * sysReturnConclusion  **参数解释：**  退回原因。通常为退回RR/Bug时填写。 **取值范围：**  不涉及。
    * closeTime  **参数解释：**  工作项完成时间。 **取值范围：**  不涉及。
    * priority  priority
    * modifiedDate  **参数解释：**  工作项最新修改时间。 **取值范围：**  不涉及。
    * createdBy  createdBy
    * breakStatus  breakStatus
    * statusModifiedDate  **参数解释：**  工作项上一次流转状态的时间，可用于计算停留天数。unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    * expectDeliveryTime  **参数解释：**  期望完成时间。Unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    * parentId  **参数解释：**  工作项的父工作项Id。 **取值范围：**  不涉及。
    * assignee  assignee
    * region  **参数解释：**  工作项所属租户的域。 **取值范围：**  不涉及。
    * status  status
    * tenantId  **参数解释：**  工作项所属租户Id。 **取值范围：**  不涉及。
    * planPi  planPi
    * link  **参数解释：**  关联工作项的关系字段。多值使用英文逗号分隔。 **取值范围：**  不涉及。
    * description  **参数解释：**  工作项描述，最多支持50w字符。 **取值范围：**  不涉及。
    * isSuspended  isSuspended
    * changeStatus  changeStatus
    * title  **参数解释：**  工作项标题。 **取值范围：**  不涉及。
    * sumWorkloadManDay  **参数解释：**  工作项实际工时。 **取值范围：**  不涉及。
    * sysCloseReason  **参数解释：**  工作项关闭原因。 **取值范围：**  不涉及。
    * sysResubmitReason  **参数解释：**  重新提交原因，通常用于RR/Bug退回后重新提交。 **取值范围：**  不涉及。
    * planEndDate  **参数解释：**  工作项计划完成时间。 **取值范围：**  不涉及。
    * rr2ir  **参数解释：**  RR的子IR的id。多值使用英文逗号分隔。 **取值范围：**  不涉及。
    * categoryLayerId  **参数解释：**  工作项类型层级id。 **取值范围：**  不涉及。
    * submittedBy  **参数解释：**  工作项提交人。 **取值范围：**  不涉及。
    * rr2us  **参数解释：**  RR的子US的id，多值使用英文逗号分隔。 **取值范围：**  不涉及。
    * sysNoDevelopReason  **参数解释：**  工作项无需开发原因。 **取值范围：**  不涉及。
    * planIteration  planIteration
    * sysReturnReason  **参数解释：**  退回原因。通常用于RR/bug退回。 **取值范围：**  不涉及。
    * cascadeDelete  **参数解释：**  是否级联删除标记。 **取值范围：**  不涉及。
    * recipient  **参数解释：**  承接人。通常用于RR。 **取值范围：**  不涉及。
    * modifiedBy  modifiedBy
    * createdDate  **参数解释：**  工作项创建时间。 **取值范围：**  不涉及。
    * category  **参数解释：**  工作项类型。 **取值范围：**  - 系统设备类项目：RR/SF/IR/SR/AR/Task/Bug。 - 独立软件类项目：RR/SF/IR/US/Task/Bug。 - 云服务类项目：RR/Epic/FE/US/Task/Bug。
    * collaborativeStatus  **参数解释：**  研发需求协同需求状态。 **取值范围：**  不涉及。
    * project  project
    * childIssues  **参数解释：**  子工作项列表。 **取值范围：**  不涉及。
    * activateTimes  **参数解释：**  激活次数。Bug激活时自动赋值。 **取值范围：**  不涉及。
    * baseline  baseline
    * businessDomain  businessDomain
    * children  **参数解释：**  子工作项Id，多值使用英文逗号分隔。 **取值范围：**  不涉及。
    * collaborativeHistory  **参数解释：**  协同需求的状态变化历史记录，内容为Json字符串。 **取值范围：**  不涉及。
    * collaboratives  **参数解释：**  协同需求中的记录Id。 **取值范围：**  不涉及。
    * convolutionActualHours  **参数解释：**  卷积实际工时。父工作项中将子工作项/协同工作项的实际工时卷积得到。 **取值范围：**  不涉及。
    * convolutionPlanHours  **参数解释：**  卷积计划工时。父工作项中将子工作项/协同工作项的计划工时卷积得到。 **取值范围：**  不涉及。
    * developOwner  **参数解释：**  开发责任人。通常用于“开发”状态节点责任人。 **取值范围：**  不涉及。
    * doneRatio  doneRatio
    * expectedRepairDate  **参数解释：**  期望修复时间。 **取值范围：**  不涉及。
    * feature2ir  **参数解释：**  SF的子IR的id。多值使用英文逗号分隔。 **取值范围：**  不涉及。
    * featureSet  featureSet
    * foundEnv  foundEnv
    * foundIteration  foundIteration
    * foundPi  foundPi
    * functionScene  **参数解释：**  功能场景。 **取值范围：**  不涉及。
    * ir2feature  **参数解释：**  IR关联的SF的Id，一个IR仅能关联一个SF。 **取值范围：**  不涉及。
    * ir2rr  **参数解释：**  IR关联父RR的Id，多值使用英文逗号分隔。 **取值范围：**  不涉及。
    * issueOpinionId  **参数解释：**  工作项关联的决策意见Id。 **取值范围：**  不涉及。
    * issueReviewId  **参数解释：**  工作项关联的评审意见Id。 **取值范围：**  不涉及。
    * module  module
    * needBreak  needBreak
    * needDevelop  needDevelop
    * noBreakReason  **参数解释：**  无需分解原因。 **取值范围：**  不涉及。
    * noDevelopReason  **参数解释：**  无需开发原因。 **取值范围：**  不涉及。
    * order  **参数解释：**  优先级顺序。 **取值范围：**  1~100。
    * planDevEndDate  **参数解释：**  计划开发结束时间。通常用于“开发”状态节点，Unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    * planProcessingEndDate  **参数解释：**  计划处理中结束时间。通常用于“处理中”状态节点，Unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    * planResearchanddevelopEndDate  **参数解释：**  计划研发结束时间。通常用于“研发”状态节点，Unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    * planTestEndDate  **参数解释：**  计划测试结束时间。通常用于“测试”状态节点，Unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    * positionFloat  **参数解释：**  标识工作项在列表中初始排序位置。 **取值范围：**  不涉及。
    * processingOwner  **参数解释：**  处理中责任人。通常用于“处理中”状态节点。 **取值范围：**  不涉及。
    * reasonAnalysis  **参数解释：**  分析原因。 **取值范围：**  不涉及。
    * regressionFailureNumber  **参数解释：**  回归不通过次数。缺陷测试不通过时自动赋值。 **取值范围：**  不涉及。
    * relatedNetworkSecurity  relatedNetworkSecurity
    * repairSolution  **参数解释：**  修复方案。常用于修复缺陷时。 **取值范围：**  不涉及。
    * researchanddevelopOwner  **参数解释：**  研发责任人。通常用于“研发”状态节点。 **取值范围：**  不涉及。
    * severity  severity
    * sysActivationReason  **参数解释：**  严重程度。 **取值范围：**  不涉及。
    * sysNoRepairReason  **参数解释：**  无需修复原因。通常用于在缺陷无需修复时。 **取值范围：**  不涉及。
    * testFailuresTimes  **参数解释：**  测试不通过次数。 **取值范围：**  不涉及。
    * testOwner  **参数解释：**  测试责任人。通常用于“测试”状态节点。 **取值范围：**  不涉及。
    * testReport  **参数解释：**  测试报告。 **取值范围：**  不涉及。
    * valFeature  valFeature
    * workitem2ganttchart  **参数解释：**  工作项关联的甘特图Id。 **取值范围：**  不涉及。
    * workitem2mindmap  **参数解释：**  工作项关联的思维导图Id。 **取值范围：**  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sysAnalysisConclusion' => 'string',
            'sysRemark' => 'string',
            'promised' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO',
            'type' => 'string',
            'belongInside' => 'string',
            'srcDomain' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\DomainVO',
            'domainId' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\DomainVO',
            'sendFrom' => 'string',
            'number' => 'string',
            'sendTo' => 'string',
            'path' => 'string',
            'workloadManDay' => 'string',
            'sysCheckConclusion' => 'string',
            'id' => 'string',
            'state' => 'string',
            'stayDays' => 'int',
            'assignedCc' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO[]',
            'submitTime' => 'string',
            'workitem2label' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\WorkItemLabelVO[]',
            'sysReturnConclusion' => 'string',
            'closeTime' => 'string',
            'priority' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO',
            'modifiedDate' => 'string',
            'createdBy' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO',
            'breakStatus' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO',
            'statusModifiedDate' => 'string',
            'expectDeliveryTime' => 'string',
            'parentId' => 'string',
            'assignee' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO',
            'region' => 'string',
            'status' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\AlmStatus',
            'tenantId' => 'string',
            'planPi' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\PlanVO',
            'link' => 'string',
            'description' => 'string',
            'isSuspended' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO',
            'changeStatus' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO',
            'title' => 'string',
            'sumWorkloadManDay' => 'string',
            'sysCloseReason' => 'string',
            'sysResubmitReason' => 'string',
            'planEndDate' => 'string',
            'rr2ir' => 'string',
            'categoryLayerId' => 'string',
            'submittedBy' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO[]',
            'rr2us' => 'string',
            'sysNoDevelopReason' => 'string',
            'planIteration' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\PlanVO',
            'sysReturnReason' => 'string',
            'cascadeDelete' => 'string',
            'recipient' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO[]',
            'modifiedBy' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO',
            'createdDate' => 'string',
            'category' => 'string',
            'collaborativeStatus' => 'string[]',
            'project' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\DomainVO',
            'childIssues' => 'map[string,\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueVO]',
            'activateTimes' => 'int',
            'baseline' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO',
            'businessDomain' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO',
            'children' => 'string',
            'collaborativeHistory' => 'string',
            'collaboratives' => 'string',
            'convolutionActualHours' => 'string',
            'convolutionPlanHours' => 'string',
            'developOwner' => 'string',
            'doneRatio' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO',
            'expectedRepairDate' => 'string',
            'feature2ir' => 'string',
            'featureSet' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO',
            'foundEnv' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO',
            'foundIteration' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\PlanVO',
            'foundPi' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\PlanVO',
            'functionScene' => 'string',
            'ir2feature' => 'string',
            'ir2rr' => 'string',
            'issueOpinionId' => 'string',
            'issueReviewId' => 'string',
            'module' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO',
            'needBreak' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO',
            'needDevelop' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO',
            'noBreakReason' => 'string',
            'noDevelopReason' => 'string',
            'order' => 'string',
            'planDevEndDate' => 'string',
            'planProcessingEndDate' => 'string',
            'planResearchanddevelopEndDate' => 'string',
            'planTestEndDate' => 'string',
            'positionFloat' => 'string',
            'processingOwner' => 'string',
            'reasonAnalysis' => 'string',
            'regressionFailureNumber' => 'int',
            'relatedNetworkSecurity' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO',
            'repairSolution' => 'string',
            'researchanddevelopOwner' => 'string',
            'severity' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO',
            'sysActivationReason' => 'string',
            'sysNoRepairReason' => 'string',
            'testFailuresTimes' => 'int',
            'testOwner' => 'string',
            'testReport' => 'string',
            'valFeature' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO',
            'workitem2ganttchart' => 'string',
            'workitem2mindmap' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sysAnalysisConclusion  **参数解释：**  分析结论，通常在接纳RR时填写。 **取值范围：**  不涉及。
    * sysRemark  **参数解释：**  备注。通常在提交验收RR时填写。 **取值范围：**  不涉及。
    * promised  promised
    * type  **参数解释：**  工作项的分类。 **取值范围：**  - requirement - raw requirement - bug - task - feature
    * belongInside  **参数解释：**  标识工作项是否跨项目提交。 **取值范围：**  - 1：跨项目提交工作项。 - 0：非跨项目提交工作项。
    * srcDomain  srcDomain
    * domainId  domainId
    * sendFrom  **参数解释：**  原始需求的协同上游需求Id。 **取值范围：**  不涉及。
    * number  **参数解释：**  工作项编号，由工作项类型+年月日+6位随机数组成。 **取值范围：**  不涉及。
    * sendTo  **参数解释：**  原始需求的协同下游需求Id。 **取值范围：**  不涉及。
    * path  **参数解释：**  工作项父子挂载路径关系。 **取值范围：**  不涉及。
    * workloadManDay  **参数解释：**  工作项计划工时。 **取值范围：**  不涉及。
    * sysCheckConclusion  **参数解释：**  验收结论。通常是验收RR时填写。 **取值范围：**  不涉及。
    * id  **参数解释：**  工作项唯一Id。 **取值范围：**  不涉及。
    * state  **参数解释：**  工作项生命周期。 **取值范围：**  - 正在工作：可正常操作的工作项； - 作废：软删除后的工作项，可在回收站恢复； - 删除：彻底删除后的工作项，无法恢复。
    * stayDays  **参数解释：**  工作项在当前状态的停留天数。 **取值范围：**  不涉及。
    * assignedCc  **参数解释：**  抄送人。 **取值范围：**  不涉及。
    * submitTime  **参数解释：**  工作项提交时间，指工作项进入工作流的时间，而不是创建时间。 **取值范围：**  不涉及。
    * workitem2label  **参数解释：**  工作项标签。 **取值范围：**  不涉及。
    * sysReturnConclusion  **参数解释：**  退回原因。通常为退回RR/Bug时填写。 **取值范围：**  不涉及。
    * closeTime  **参数解释：**  工作项完成时间。 **取值范围：**  不涉及。
    * priority  priority
    * modifiedDate  **参数解释：**  工作项最新修改时间。 **取值范围：**  不涉及。
    * createdBy  createdBy
    * breakStatus  breakStatus
    * statusModifiedDate  **参数解释：**  工作项上一次流转状态的时间，可用于计算停留天数。unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    * expectDeliveryTime  **参数解释：**  期望完成时间。Unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    * parentId  **参数解释：**  工作项的父工作项Id。 **取值范围：**  不涉及。
    * assignee  assignee
    * region  **参数解释：**  工作项所属租户的域。 **取值范围：**  不涉及。
    * status  status
    * tenantId  **参数解释：**  工作项所属租户Id。 **取值范围：**  不涉及。
    * planPi  planPi
    * link  **参数解释：**  关联工作项的关系字段。多值使用英文逗号分隔。 **取值范围：**  不涉及。
    * description  **参数解释：**  工作项描述，最多支持50w字符。 **取值范围：**  不涉及。
    * isSuspended  isSuspended
    * changeStatus  changeStatus
    * title  **参数解释：**  工作项标题。 **取值范围：**  不涉及。
    * sumWorkloadManDay  **参数解释：**  工作项实际工时。 **取值范围：**  不涉及。
    * sysCloseReason  **参数解释：**  工作项关闭原因。 **取值范围：**  不涉及。
    * sysResubmitReason  **参数解释：**  重新提交原因，通常用于RR/Bug退回后重新提交。 **取值范围：**  不涉及。
    * planEndDate  **参数解释：**  工作项计划完成时间。 **取值范围：**  不涉及。
    * rr2ir  **参数解释：**  RR的子IR的id。多值使用英文逗号分隔。 **取值范围：**  不涉及。
    * categoryLayerId  **参数解释：**  工作项类型层级id。 **取值范围：**  不涉及。
    * submittedBy  **参数解释：**  工作项提交人。 **取值范围：**  不涉及。
    * rr2us  **参数解释：**  RR的子US的id，多值使用英文逗号分隔。 **取值范围：**  不涉及。
    * sysNoDevelopReason  **参数解释：**  工作项无需开发原因。 **取值范围：**  不涉及。
    * planIteration  planIteration
    * sysReturnReason  **参数解释：**  退回原因。通常用于RR/bug退回。 **取值范围：**  不涉及。
    * cascadeDelete  **参数解释：**  是否级联删除标记。 **取值范围：**  不涉及。
    * recipient  **参数解释：**  承接人。通常用于RR。 **取值范围：**  不涉及。
    * modifiedBy  modifiedBy
    * createdDate  **参数解释：**  工作项创建时间。 **取值范围：**  不涉及。
    * category  **参数解释：**  工作项类型。 **取值范围：**  - 系统设备类项目：RR/SF/IR/SR/AR/Task/Bug。 - 独立软件类项目：RR/SF/IR/US/Task/Bug。 - 云服务类项目：RR/Epic/FE/US/Task/Bug。
    * collaborativeStatus  **参数解释：**  研发需求协同需求状态。 **取值范围：**  不涉及。
    * project  project
    * childIssues  **参数解释：**  子工作项列表。 **取值范围：**  不涉及。
    * activateTimes  **参数解释：**  激活次数。Bug激活时自动赋值。 **取值范围：**  不涉及。
    * baseline  baseline
    * businessDomain  businessDomain
    * children  **参数解释：**  子工作项Id，多值使用英文逗号分隔。 **取值范围：**  不涉及。
    * collaborativeHistory  **参数解释：**  协同需求的状态变化历史记录，内容为Json字符串。 **取值范围：**  不涉及。
    * collaboratives  **参数解释：**  协同需求中的记录Id。 **取值范围：**  不涉及。
    * convolutionActualHours  **参数解释：**  卷积实际工时。父工作项中将子工作项/协同工作项的实际工时卷积得到。 **取值范围：**  不涉及。
    * convolutionPlanHours  **参数解释：**  卷积计划工时。父工作项中将子工作项/协同工作项的计划工时卷积得到。 **取值范围：**  不涉及。
    * developOwner  **参数解释：**  开发责任人。通常用于“开发”状态节点责任人。 **取值范围：**  不涉及。
    * doneRatio  doneRatio
    * expectedRepairDate  **参数解释：**  期望修复时间。 **取值范围：**  不涉及。
    * feature2ir  **参数解释：**  SF的子IR的id。多值使用英文逗号分隔。 **取值范围：**  不涉及。
    * featureSet  featureSet
    * foundEnv  foundEnv
    * foundIteration  foundIteration
    * foundPi  foundPi
    * functionScene  **参数解释：**  功能场景。 **取值范围：**  不涉及。
    * ir2feature  **参数解释：**  IR关联的SF的Id，一个IR仅能关联一个SF。 **取值范围：**  不涉及。
    * ir2rr  **参数解释：**  IR关联父RR的Id，多值使用英文逗号分隔。 **取值范围：**  不涉及。
    * issueOpinionId  **参数解释：**  工作项关联的决策意见Id。 **取值范围：**  不涉及。
    * issueReviewId  **参数解释：**  工作项关联的评审意见Id。 **取值范围：**  不涉及。
    * module  module
    * needBreak  needBreak
    * needDevelop  needDevelop
    * noBreakReason  **参数解释：**  无需分解原因。 **取值范围：**  不涉及。
    * noDevelopReason  **参数解释：**  无需开发原因。 **取值范围：**  不涉及。
    * order  **参数解释：**  优先级顺序。 **取值范围：**  1~100。
    * planDevEndDate  **参数解释：**  计划开发结束时间。通常用于“开发”状态节点，Unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    * planProcessingEndDate  **参数解释：**  计划处理中结束时间。通常用于“处理中”状态节点，Unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    * planResearchanddevelopEndDate  **参数解释：**  计划研发结束时间。通常用于“研发”状态节点，Unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    * planTestEndDate  **参数解释：**  计划测试结束时间。通常用于“测试”状态节点，Unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    * positionFloat  **参数解释：**  标识工作项在列表中初始排序位置。 **取值范围：**  不涉及。
    * processingOwner  **参数解释：**  处理中责任人。通常用于“处理中”状态节点。 **取值范围：**  不涉及。
    * reasonAnalysis  **参数解释：**  分析原因。 **取值范围：**  不涉及。
    * regressionFailureNumber  **参数解释：**  回归不通过次数。缺陷测试不通过时自动赋值。 **取值范围：**  不涉及。
    * relatedNetworkSecurity  relatedNetworkSecurity
    * repairSolution  **参数解释：**  修复方案。常用于修复缺陷时。 **取值范围：**  不涉及。
    * researchanddevelopOwner  **参数解释：**  研发责任人。通常用于“研发”状态节点。 **取值范围：**  不涉及。
    * severity  severity
    * sysActivationReason  **参数解释：**  严重程度。 **取值范围：**  不涉及。
    * sysNoRepairReason  **参数解释：**  无需修复原因。通常用于在缺陷无需修复时。 **取值范围：**  不涉及。
    * testFailuresTimes  **参数解释：**  测试不通过次数。 **取值范围：**  不涉及。
    * testOwner  **参数解释：**  测试责任人。通常用于“测试”状态节点。 **取值范围：**  不涉及。
    * testReport  **参数解释：**  测试报告。 **取值范围：**  不涉及。
    * valFeature  valFeature
    * workitem2ganttchart  **参数解释：**  工作项关联的甘特图Id。 **取值范围：**  不涉及。
    * workitem2mindmap  **参数解释：**  工作项关联的思维导图Id。 **取值范围：**  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sysAnalysisConclusion' => null,
        'sysRemark' => null,
        'promised' => null,
        'type' => null,
        'belongInside' => null,
        'srcDomain' => null,
        'domainId' => null,
        'sendFrom' => null,
        'number' => null,
        'sendTo' => null,
        'path' => null,
        'workloadManDay' => null,
        'sysCheckConclusion' => null,
        'id' => null,
        'state' => null,
        'stayDays' => 'int32',
        'assignedCc' => null,
        'submitTime' => null,
        'workitem2label' => null,
        'sysReturnConclusion' => null,
        'closeTime' => null,
        'priority' => null,
        'modifiedDate' => null,
        'createdBy' => null,
        'breakStatus' => null,
        'statusModifiedDate' => null,
        'expectDeliveryTime' => null,
        'parentId' => null,
        'assignee' => null,
        'region' => null,
        'status' => null,
        'tenantId' => null,
        'planPi' => null,
        'link' => null,
        'description' => null,
        'isSuspended' => null,
        'changeStatus' => null,
        'title' => null,
        'sumWorkloadManDay' => null,
        'sysCloseReason' => null,
        'sysResubmitReason' => null,
        'planEndDate' => null,
        'rr2ir' => null,
        'categoryLayerId' => null,
        'submittedBy' => null,
        'rr2us' => null,
        'sysNoDevelopReason' => null,
        'planIteration' => null,
        'sysReturnReason' => null,
        'cascadeDelete' => null,
        'recipient' => null,
        'modifiedBy' => null,
        'createdDate' => null,
        'category' => null,
        'collaborativeStatus' => null,
        'project' => null,
        'childIssues' => null,
        'activateTimes' => 'int32',
        'baseline' => null,
        'businessDomain' => null,
        'children' => null,
        'collaborativeHistory' => null,
        'collaboratives' => null,
        'convolutionActualHours' => null,
        'convolutionPlanHours' => null,
        'developOwner' => null,
        'doneRatio' => null,
        'expectedRepairDate' => null,
        'feature2ir' => null,
        'featureSet' => null,
        'foundEnv' => null,
        'foundIteration' => null,
        'foundPi' => null,
        'functionScene' => null,
        'ir2feature' => null,
        'ir2rr' => null,
        'issueOpinionId' => null,
        'issueReviewId' => null,
        'module' => null,
        'needBreak' => null,
        'needDevelop' => null,
        'noBreakReason' => null,
        'noDevelopReason' => null,
        'order' => null,
        'planDevEndDate' => null,
        'planProcessingEndDate' => null,
        'planResearchanddevelopEndDate' => null,
        'planTestEndDate' => null,
        'positionFloat' => null,
        'processingOwner' => null,
        'reasonAnalysis' => null,
        'regressionFailureNumber' => 'int32',
        'relatedNetworkSecurity' => null,
        'repairSolution' => null,
        'researchanddevelopOwner' => null,
        'severity' => null,
        'sysActivationReason' => null,
        'sysNoRepairReason' => null,
        'testFailuresTimes' => 'int32',
        'testOwner' => null,
        'testReport' => null,
        'valFeature' => null,
        'workitem2ganttchart' => null,
        'workitem2mindmap' => null
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
    * sysAnalysisConclusion  **参数解释：**  分析结论，通常在接纳RR时填写。 **取值范围：**  不涉及。
    * sysRemark  **参数解释：**  备注。通常在提交验收RR时填写。 **取值范围：**  不涉及。
    * promised  promised
    * type  **参数解释：**  工作项的分类。 **取值范围：**  - requirement - raw requirement - bug - task - feature
    * belongInside  **参数解释：**  标识工作项是否跨项目提交。 **取值范围：**  - 1：跨项目提交工作项。 - 0：非跨项目提交工作项。
    * srcDomain  srcDomain
    * domainId  domainId
    * sendFrom  **参数解释：**  原始需求的协同上游需求Id。 **取值范围：**  不涉及。
    * number  **参数解释：**  工作项编号，由工作项类型+年月日+6位随机数组成。 **取值范围：**  不涉及。
    * sendTo  **参数解释：**  原始需求的协同下游需求Id。 **取值范围：**  不涉及。
    * path  **参数解释：**  工作项父子挂载路径关系。 **取值范围：**  不涉及。
    * workloadManDay  **参数解释：**  工作项计划工时。 **取值范围：**  不涉及。
    * sysCheckConclusion  **参数解释：**  验收结论。通常是验收RR时填写。 **取值范围：**  不涉及。
    * id  **参数解释：**  工作项唯一Id。 **取值范围：**  不涉及。
    * state  **参数解释：**  工作项生命周期。 **取值范围：**  - 正在工作：可正常操作的工作项； - 作废：软删除后的工作项，可在回收站恢复； - 删除：彻底删除后的工作项，无法恢复。
    * stayDays  **参数解释：**  工作项在当前状态的停留天数。 **取值范围：**  不涉及。
    * assignedCc  **参数解释：**  抄送人。 **取值范围：**  不涉及。
    * submitTime  **参数解释：**  工作项提交时间，指工作项进入工作流的时间，而不是创建时间。 **取值范围：**  不涉及。
    * workitem2label  **参数解释：**  工作项标签。 **取值范围：**  不涉及。
    * sysReturnConclusion  **参数解释：**  退回原因。通常为退回RR/Bug时填写。 **取值范围：**  不涉及。
    * closeTime  **参数解释：**  工作项完成时间。 **取值范围：**  不涉及。
    * priority  priority
    * modifiedDate  **参数解释：**  工作项最新修改时间。 **取值范围：**  不涉及。
    * createdBy  createdBy
    * breakStatus  breakStatus
    * statusModifiedDate  **参数解释：**  工作项上一次流转状态的时间，可用于计算停留天数。unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    * expectDeliveryTime  **参数解释：**  期望完成时间。Unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    * parentId  **参数解释：**  工作项的父工作项Id。 **取值范围：**  不涉及。
    * assignee  assignee
    * region  **参数解释：**  工作项所属租户的域。 **取值范围：**  不涉及。
    * status  status
    * tenantId  **参数解释：**  工作项所属租户Id。 **取值范围：**  不涉及。
    * planPi  planPi
    * link  **参数解释：**  关联工作项的关系字段。多值使用英文逗号分隔。 **取值范围：**  不涉及。
    * description  **参数解释：**  工作项描述，最多支持50w字符。 **取值范围：**  不涉及。
    * isSuspended  isSuspended
    * changeStatus  changeStatus
    * title  **参数解释：**  工作项标题。 **取值范围：**  不涉及。
    * sumWorkloadManDay  **参数解释：**  工作项实际工时。 **取值范围：**  不涉及。
    * sysCloseReason  **参数解释：**  工作项关闭原因。 **取值范围：**  不涉及。
    * sysResubmitReason  **参数解释：**  重新提交原因，通常用于RR/Bug退回后重新提交。 **取值范围：**  不涉及。
    * planEndDate  **参数解释：**  工作项计划完成时间。 **取值范围：**  不涉及。
    * rr2ir  **参数解释：**  RR的子IR的id。多值使用英文逗号分隔。 **取值范围：**  不涉及。
    * categoryLayerId  **参数解释：**  工作项类型层级id。 **取值范围：**  不涉及。
    * submittedBy  **参数解释：**  工作项提交人。 **取值范围：**  不涉及。
    * rr2us  **参数解释：**  RR的子US的id，多值使用英文逗号分隔。 **取值范围：**  不涉及。
    * sysNoDevelopReason  **参数解释：**  工作项无需开发原因。 **取值范围：**  不涉及。
    * planIteration  planIteration
    * sysReturnReason  **参数解释：**  退回原因。通常用于RR/bug退回。 **取值范围：**  不涉及。
    * cascadeDelete  **参数解释：**  是否级联删除标记。 **取值范围：**  不涉及。
    * recipient  **参数解释：**  承接人。通常用于RR。 **取值范围：**  不涉及。
    * modifiedBy  modifiedBy
    * createdDate  **参数解释：**  工作项创建时间。 **取值范围：**  不涉及。
    * category  **参数解释：**  工作项类型。 **取值范围：**  - 系统设备类项目：RR/SF/IR/SR/AR/Task/Bug。 - 独立软件类项目：RR/SF/IR/US/Task/Bug。 - 云服务类项目：RR/Epic/FE/US/Task/Bug。
    * collaborativeStatus  **参数解释：**  研发需求协同需求状态。 **取值范围：**  不涉及。
    * project  project
    * childIssues  **参数解释：**  子工作项列表。 **取值范围：**  不涉及。
    * activateTimes  **参数解释：**  激活次数。Bug激活时自动赋值。 **取值范围：**  不涉及。
    * baseline  baseline
    * businessDomain  businessDomain
    * children  **参数解释：**  子工作项Id，多值使用英文逗号分隔。 **取值范围：**  不涉及。
    * collaborativeHistory  **参数解释：**  协同需求的状态变化历史记录，内容为Json字符串。 **取值范围：**  不涉及。
    * collaboratives  **参数解释：**  协同需求中的记录Id。 **取值范围：**  不涉及。
    * convolutionActualHours  **参数解释：**  卷积实际工时。父工作项中将子工作项/协同工作项的实际工时卷积得到。 **取值范围：**  不涉及。
    * convolutionPlanHours  **参数解释：**  卷积计划工时。父工作项中将子工作项/协同工作项的计划工时卷积得到。 **取值范围：**  不涉及。
    * developOwner  **参数解释：**  开发责任人。通常用于“开发”状态节点责任人。 **取值范围：**  不涉及。
    * doneRatio  doneRatio
    * expectedRepairDate  **参数解释：**  期望修复时间。 **取值范围：**  不涉及。
    * feature2ir  **参数解释：**  SF的子IR的id。多值使用英文逗号分隔。 **取值范围：**  不涉及。
    * featureSet  featureSet
    * foundEnv  foundEnv
    * foundIteration  foundIteration
    * foundPi  foundPi
    * functionScene  **参数解释：**  功能场景。 **取值范围：**  不涉及。
    * ir2feature  **参数解释：**  IR关联的SF的Id，一个IR仅能关联一个SF。 **取值范围：**  不涉及。
    * ir2rr  **参数解释：**  IR关联父RR的Id，多值使用英文逗号分隔。 **取值范围：**  不涉及。
    * issueOpinionId  **参数解释：**  工作项关联的决策意见Id。 **取值范围：**  不涉及。
    * issueReviewId  **参数解释：**  工作项关联的评审意见Id。 **取值范围：**  不涉及。
    * module  module
    * needBreak  needBreak
    * needDevelop  needDevelop
    * noBreakReason  **参数解释：**  无需分解原因。 **取值范围：**  不涉及。
    * noDevelopReason  **参数解释：**  无需开发原因。 **取值范围：**  不涉及。
    * order  **参数解释：**  优先级顺序。 **取值范围：**  1~100。
    * planDevEndDate  **参数解释：**  计划开发结束时间。通常用于“开发”状态节点，Unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    * planProcessingEndDate  **参数解释：**  计划处理中结束时间。通常用于“处理中”状态节点，Unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    * planResearchanddevelopEndDate  **参数解释：**  计划研发结束时间。通常用于“研发”状态节点，Unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    * planTestEndDate  **参数解释：**  计划测试结束时间。通常用于“测试”状态节点，Unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    * positionFloat  **参数解释：**  标识工作项在列表中初始排序位置。 **取值范围：**  不涉及。
    * processingOwner  **参数解释：**  处理中责任人。通常用于“处理中”状态节点。 **取值范围：**  不涉及。
    * reasonAnalysis  **参数解释：**  分析原因。 **取值范围：**  不涉及。
    * regressionFailureNumber  **参数解释：**  回归不通过次数。缺陷测试不通过时自动赋值。 **取值范围：**  不涉及。
    * relatedNetworkSecurity  relatedNetworkSecurity
    * repairSolution  **参数解释：**  修复方案。常用于修复缺陷时。 **取值范围：**  不涉及。
    * researchanddevelopOwner  **参数解释：**  研发责任人。通常用于“研发”状态节点。 **取值范围：**  不涉及。
    * severity  severity
    * sysActivationReason  **参数解释：**  严重程度。 **取值范围：**  不涉及。
    * sysNoRepairReason  **参数解释：**  无需修复原因。通常用于在缺陷无需修复时。 **取值范围：**  不涉及。
    * testFailuresTimes  **参数解释：**  测试不通过次数。 **取值范围：**  不涉及。
    * testOwner  **参数解释：**  测试责任人。通常用于“测试”状态节点。 **取值范围：**  不涉及。
    * testReport  **参数解释：**  测试报告。 **取值范围：**  不涉及。
    * valFeature  valFeature
    * workitem2ganttchart  **参数解释：**  工作项关联的甘特图Id。 **取值范围：**  不涉及。
    * workitem2mindmap  **参数解释：**  工作项关联的思维导图Id。 **取值范围：**  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sysAnalysisConclusion' => 'sys_analysis_conclusion',
            'sysRemark' => 'sys_remark',
            'promised' => 'promised',
            'type' => 'type',
            'belongInside' => 'belong_inside',
            'srcDomain' => 'src_domain',
            'domainId' => 'domain_id',
            'sendFrom' => 'send_from',
            'number' => 'number',
            'sendTo' => 'send_to',
            'path' => 'path',
            'workloadManDay' => 'workload_man_day',
            'sysCheckConclusion' => 'sys_check_conclusion',
            'id' => 'id',
            'state' => 'state',
            'stayDays' => 'stay_days',
            'assignedCc' => 'assigned_cc',
            'submitTime' => 'submit_time',
            'workitem2label' => 'workitem2label',
            'sysReturnConclusion' => 'sys_return_conclusion',
            'closeTime' => 'close_time',
            'priority' => 'priority',
            'modifiedDate' => 'modified_date',
            'createdBy' => 'created_by',
            'breakStatus' => 'break_status',
            'statusModifiedDate' => 'status_modified_date',
            'expectDeliveryTime' => 'expect_delivery_time',
            'parentId' => 'parent_id',
            'assignee' => 'assignee',
            'region' => 'region',
            'status' => 'status',
            'tenantId' => 'tenant_id',
            'planPi' => 'plan_pi',
            'link' => 'link',
            'description' => 'description',
            'isSuspended' => 'is_suspended',
            'changeStatus' => 'change_status',
            'title' => 'title',
            'sumWorkloadManDay' => 'sum_workload_man_day',
            'sysCloseReason' => 'sys_close_reason',
            'sysResubmitReason' => 'sys_resubmit_reason',
            'planEndDate' => 'plan_end_date',
            'rr2ir' => 'rr2ir',
            'categoryLayerId' => 'category_layer_id',
            'submittedBy' => 'submitted_by',
            'rr2us' => 'rr2us',
            'sysNoDevelopReason' => 'sys_no_develop_reason',
            'planIteration' => 'plan_iteration',
            'sysReturnReason' => 'sys_return_reason',
            'cascadeDelete' => 'cascade_delete',
            'recipient' => 'recipient',
            'modifiedBy' => 'modified_by',
            'createdDate' => 'created_date',
            'category' => 'category',
            'collaborativeStatus' => 'collaborative_status',
            'project' => 'project',
            'childIssues' => 'child_issues',
            'activateTimes' => 'activate_times',
            'baseline' => 'baseline',
            'businessDomain' => 'business_domain',
            'children' => 'children',
            'collaborativeHistory' => 'collaborative_history',
            'collaboratives' => 'collaboratives',
            'convolutionActualHours' => 'convolution_actual_hours',
            'convolutionPlanHours' => 'convolution_plan_hours',
            'developOwner' => 'develop_owner',
            'doneRatio' => 'done_ratio',
            'expectedRepairDate' => 'expected_repair_date',
            'feature2ir' => 'feature2ir',
            'featureSet' => 'feature_set',
            'foundEnv' => 'found_env',
            'foundIteration' => 'found_iteration',
            'foundPi' => 'found_pi',
            'functionScene' => 'function_scene',
            'ir2feature' => 'ir2feature',
            'ir2rr' => 'ir2rr',
            'issueOpinionId' => 'issue_opinion_id',
            'issueReviewId' => 'issue_review_id',
            'module' => 'module',
            'needBreak' => 'need_break',
            'needDevelop' => 'need_develop',
            'noBreakReason' => 'no_break_reason',
            'noDevelopReason' => 'no_develop_reason',
            'order' => 'order',
            'planDevEndDate' => 'plan_dev_end_date',
            'planProcessingEndDate' => 'plan_processing_end_date',
            'planResearchanddevelopEndDate' => 'plan_researchanddevelop_end_date',
            'planTestEndDate' => 'plan_test_end_date',
            'positionFloat' => 'position_float',
            'processingOwner' => 'processing_owner',
            'reasonAnalysis' => 'reason_analysis',
            'regressionFailureNumber' => 'regression_failure_number',
            'relatedNetworkSecurity' => 'related_network_security',
            'repairSolution' => 'repair_solution',
            'researchanddevelopOwner' => 'researchanddevelop_owner',
            'severity' => 'severity',
            'sysActivationReason' => 'sys_activation_reason',
            'sysNoRepairReason' => 'sys_no_repair_reason',
            'testFailuresTimes' => 'test_failures_times',
            'testOwner' => 'test_owner',
            'testReport' => 'test_report',
            'valFeature' => 'val_feature',
            'workitem2ganttchart' => 'workitem2ganttchart',
            'workitem2mindmap' => 'workitem2mindmap'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sysAnalysisConclusion  **参数解释：**  分析结论，通常在接纳RR时填写。 **取值范围：**  不涉及。
    * sysRemark  **参数解释：**  备注。通常在提交验收RR时填写。 **取值范围：**  不涉及。
    * promised  promised
    * type  **参数解释：**  工作项的分类。 **取值范围：**  - requirement - raw requirement - bug - task - feature
    * belongInside  **参数解释：**  标识工作项是否跨项目提交。 **取值范围：**  - 1：跨项目提交工作项。 - 0：非跨项目提交工作项。
    * srcDomain  srcDomain
    * domainId  domainId
    * sendFrom  **参数解释：**  原始需求的协同上游需求Id。 **取值范围：**  不涉及。
    * number  **参数解释：**  工作项编号，由工作项类型+年月日+6位随机数组成。 **取值范围：**  不涉及。
    * sendTo  **参数解释：**  原始需求的协同下游需求Id。 **取值范围：**  不涉及。
    * path  **参数解释：**  工作项父子挂载路径关系。 **取值范围：**  不涉及。
    * workloadManDay  **参数解释：**  工作项计划工时。 **取值范围：**  不涉及。
    * sysCheckConclusion  **参数解释：**  验收结论。通常是验收RR时填写。 **取值范围：**  不涉及。
    * id  **参数解释：**  工作项唯一Id。 **取值范围：**  不涉及。
    * state  **参数解释：**  工作项生命周期。 **取值范围：**  - 正在工作：可正常操作的工作项； - 作废：软删除后的工作项，可在回收站恢复； - 删除：彻底删除后的工作项，无法恢复。
    * stayDays  **参数解释：**  工作项在当前状态的停留天数。 **取值范围：**  不涉及。
    * assignedCc  **参数解释：**  抄送人。 **取值范围：**  不涉及。
    * submitTime  **参数解释：**  工作项提交时间，指工作项进入工作流的时间，而不是创建时间。 **取值范围：**  不涉及。
    * workitem2label  **参数解释：**  工作项标签。 **取值范围：**  不涉及。
    * sysReturnConclusion  **参数解释：**  退回原因。通常为退回RR/Bug时填写。 **取值范围：**  不涉及。
    * closeTime  **参数解释：**  工作项完成时间。 **取值范围：**  不涉及。
    * priority  priority
    * modifiedDate  **参数解释：**  工作项最新修改时间。 **取值范围：**  不涉及。
    * createdBy  createdBy
    * breakStatus  breakStatus
    * statusModifiedDate  **参数解释：**  工作项上一次流转状态的时间，可用于计算停留天数。unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    * expectDeliveryTime  **参数解释：**  期望完成时间。Unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    * parentId  **参数解释：**  工作项的父工作项Id。 **取值范围：**  不涉及。
    * assignee  assignee
    * region  **参数解释：**  工作项所属租户的域。 **取值范围：**  不涉及。
    * status  status
    * tenantId  **参数解释：**  工作项所属租户Id。 **取值范围：**  不涉及。
    * planPi  planPi
    * link  **参数解释：**  关联工作项的关系字段。多值使用英文逗号分隔。 **取值范围：**  不涉及。
    * description  **参数解释：**  工作项描述，最多支持50w字符。 **取值范围：**  不涉及。
    * isSuspended  isSuspended
    * changeStatus  changeStatus
    * title  **参数解释：**  工作项标题。 **取值范围：**  不涉及。
    * sumWorkloadManDay  **参数解释：**  工作项实际工时。 **取值范围：**  不涉及。
    * sysCloseReason  **参数解释：**  工作项关闭原因。 **取值范围：**  不涉及。
    * sysResubmitReason  **参数解释：**  重新提交原因，通常用于RR/Bug退回后重新提交。 **取值范围：**  不涉及。
    * planEndDate  **参数解释：**  工作项计划完成时间。 **取值范围：**  不涉及。
    * rr2ir  **参数解释：**  RR的子IR的id。多值使用英文逗号分隔。 **取值范围：**  不涉及。
    * categoryLayerId  **参数解释：**  工作项类型层级id。 **取值范围：**  不涉及。
    * submittedBy  **参数解释：**  工作项提交人。 **取值范围：**  不涉及。
    * rr2us  **参数解释：**  RR的子US的id，多值使用英文逗号分隔。 **取值范围：**  不涉及。
    * sysNoDevelopReason  **参数解释：**  工作项无需开发原因。 **取值范围：**  不涉及。
    * planIteration  planIteration
    * sysReturnReason  **参数解释：**  退回原因。通常用于RR/bug退回。 **取值范围：**  不涉及。
    * cascadeDelete  **参数解释：**  是否级联删除标记。 **取值范围：**  不涉及。
    * recipient  **参数解释：**  承接人。通常用于RR。 **取值范围：**  不涉及。
    * modifiedBy  modifiedBy
    * createdDate  **参数解释：**  工作项创建时间。 **取值范围：**  不涉及。
    * category  **参数解释：**  工作项类型。 **取值范围：**  - 系统设备类项目：RR/SF/IR/SR/AR/Task/Bug。 - 独立软件类项目：RR/SF/IR/US/Task/Bug。 - 云服务类项目：RR/Epic/FE/US/Task/Bug。
    * collaborativeStatus  **参数解释：**  研发需求协同需求状态。 **取值范围：**  不涉及。
    * project  project
    * childIssues  **参数解释：**  子工作项列表。 **取值范围：**  不涉及。
    * activateTimes  **参数解释：**  激活次数。Bug激活时自动赋值。 **取值范围：**  不涉及。
    * baseline  baseline
    * businessDomain  businessDomain
    * children  **参数解释：**  子工作项Id，多值使用英文逗号分隔。 **取值范围：**  不涉及。
    * collaborativeHistory  **参数解释：**  协同需求的状态变化历史记录，内容为Json字符串。 **取值范围：**  不涉及。
    * collaboratives  **参数解释：**  协同需求中的记录Id。 **取值范围：**  不涉及。
    * convolutionActualHours  **参数解释：**  卷积实际工时。父工作项中将子工作项/协同工作项的实际工时卷积得到。 **取值范围：**  不涉及。
    * convolutionPlanHours  **参数解释：**  卷积计划工时。父工作项中将子工作项/协同工作项的计划工时卷积得到。 **取值范围：**  不涉及。
    * developOwner  **参数解释：**  开发责任人。通常用于“开发”状态节点责任人。 **取值范围：**  不涉及。
    * doneRatio  doneRatio
    * expectedRepairDate  **参数解释：**  期望修复时间。 **取值范围：**  不涉及。
    * feature2ir  **参数解释：**  SF的子IR的id。多值使用英文逗号分隔。 **取值范围：**  不涉及。
    * featureSet  featureSet
    * foundEnv  foundEnv
    * foundIteration  foundIteration
    * foundPi  foundPi
    * functionScene  **参数解释：**  功能场景。 **取值范围：**  不涉及。
    * ir2feature  **参数解释：**  IR关联的SF的Id，一个IR仅能关联一个SF。 **取值范围：**  不涉及。
    * ir2rr  **参数解释：**  IR关联父RR的Id，多值使用英文逗号分隔。 **取值范围：**  不涉及。
    * issueOpinionId  **参数解释：**  工作项关联的决策意见Id。 **取值范围：**  不涉及。
    * issueReviewId  **参数解释：**  工作项关联的评审意见Id。 **取值范围：**  不涉及。
    * module  module
    * needBreak  needBreak
    * needDevelop  needDevelop
    * noBreakReason  **参数解释：**  无需分解原因。 **取值范围：**  不涉及。
    * noDevelopReason  **参数解释：**  无需开发原因。 **取值范围：**  不涉及。
    * order  **参数解释：**  优先级顺序。 **取值范围：**  1~100。
    * planDevEndDate  **参数解释：**  计划开发结束时间。通常用于“开发”状态节点，Unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    * planProcessingEndDate  **参数解释：**  计划处理中结束时间。通常用于“处理中”状态节点，Unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    * planResearchanddevelopEndDate  **参数解释：**  计划研发结束时间。通常用于“研发”状态节点，Unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    * planTestEndDate  **参数解释：**  计划测试结束时间。通常用于“测试”状态节点，Unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    * positionFloat  **参数解释：**  标识工作项在列表中初始排序位置。 **取值范围：**  不涉及。
    * processingOwner  **参数解释：**  处理中责任人。通常用于“处理中”状态节点。 **取值范围：**  不涉及。
    * reasonAnalysis  **参数解释：**  分析原因。 **取值范围：**  不涉及。
    * regressionFailureNumber  **参数解释：**  回归不通过次数。缺陷测试不通过时自动赋值。 **取值范围：**  不涉及。
    * relatedNetworkSecurity  relatedNetworkSecurity
    * repairSolution  **参数解释：**  修复方案。常用于修复缺陷时。 **取值范围：**  不涉及。
    * researchanddevelopOwner  **参数解释：**  研发责任人。通常用于“研发”状态节点。 **取值范围：**  不涉及。
    * severity  severity
    * sysActivationReason  **参数解释：**  严重程度。 **取值范围：**  不涉及。
    * sysNoRepairReason  **参数解释：**  无需修复原因。通常用于在缺陷无需修复时。 **取值范围：**  不涉及。
    * testFailuresTimes  **参数解释：**  测试不通过次数。 **取值范围：**  不涉及。
    * testOwner  **参数解释：**  测试责任人。通常用于“测试”状态节点。 **取值范围：**  不涉及。
    * testReport  **参数解释：**  测试报告。 **取值范围：**  不涉及。
    * valFeature  valFeature
    * workitem2ganttchart  **参数解释：**  工作项关联的甘特图Id。 **取值范围：**  不涉及。
    * workitem2mindmap  **参数解释：**  工作项关联的思维导图Id。 **取值范围：**  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'sysAnalysisConclusion' => 'setSysAnalysisConclusion',
            'sysRemark' => 'setSysRemark',
            'promised' => 'setPromised',
            'type' => 'setType',
            'belongInside' => 'setBelongInside',
            'srcDomain' => 'setSrcDomain',
            'domainId' => 'setDomainId',
            'sendFrom' => 'setSendFrom',
            'number' => 'setNumber',
            'sendTo' => 'setSendTo',
            'path' => 'setPath',
            'workloadManDay' => 'setWorkloadManDay',
            'sysCheckConclusion' => 'setSysCheckConclusion',
            'id' => 'setId',
            'state' => 'setState',
            'stayDays' => 'setStayDays',
            'assignedCc' => 'setAssignedCc',
            'submitTime' => 'setSubmitTime',
            'workitem2label' => 'setWorkitem2label',
            'sysReturnConclusion' => 'setSysReturnConclusion',
            'closeTime' => 'setCloseTime',
            'priority' => 'setPriority',
            'modifiedDate' => 'setModifiedDate',
            'createdBy' => 'setCreatedBy',
            'breakStatus' => 'setBreakStatus',
            'statusModifiedDate' => 'setStatusModifiedDate',
            'expectDeliveryTime' => 'setExpectDeliveryTime',
            'parentId' => 'setParentId',
            'assignee' => 'setAssignee',
            'region' => 'setRegion',
            'status' => 'setStatus',
            'tenantId' => 'setTenantId',
            'planPi' => 'setPlanPi',
            'link' => 'setLink',
            'description' => 'setDescription',
            'isSuspended' => 'setIsSuspended',
            'changeStatus' => 'setChangeStatus',
            'title' => 'setTitle',
            'sumWorkloadManDay' => 'setSumWorkloadManDay',
            'sysCloseReason' => 'setSysCloseReason',
            'sysResubmitReason' => 'setSysResubmitReason',
            'planEndDate' => 'setPlanEndDate',
            'rr2ir' => 'setRr2ir',
            'categoryLayerId' => 'setCategoryLayerId',
            'submittedBy' => 'setSubmittedBy',
            'rr2us' => 'setRr2us',
            'sysNoDevelopReason' => 'setSysNoDevelopReason',
            'planIteration' => 'setPlanIteration',
            'sysReturnReason' => 'setSysReturnReason',
            'cascadeDelete' => 'setCascadeDelete',
            'recipient' => 'setRecipient',
            'modifiedBy' => 'setModifiedBy',
            'createdDate' => 'setCreatedDate',
            'category' => 'setCategory',
            'collaborativeStatus' => 'setCollaborativeStatus',
            'project' => 'setProject',
            'childIssues' => 'setChildIssues',
            'activateTimes' => 'setActivateTimes',
            'baseline' => 'setBaseline',
            'businessDomain' => 'setBusinessDomain',
            'children' => 'setChildren',
            'collaborativeHistory' => 'setCollaborativeHistory',
            'collaboratives' => 'setCollaboratives',
            'convolutionActualHours' => 'setConvolutionActualHours',
            'convolutionPlanHours' => 'setConvolutionPlanHours',
            'developOwner' => 'setDevelopOwner',
            'doneRatio' => 'setDoneRatio',
            'expectedRepairDate' => 'setExpectedRepairDate',
            'feature2ir' => 'setFeature2ir',
            'featureSet' => 'setFeatureSet',
            'foundEnv' => 'setFoundEnv',
            'foundIteration' => 'setFoundIteration',
            'foundPi' => 'setFoundPi',
            'functionScene' => 'setFunctionScene',
            'ir2feature' => 'setIr2feature',
            'ir2rr' => 'setIr2rr',
            'issueOpinionId' => 'setIssueOpinionId',
            'issueReviewId' => 'setIssueReviewId',
            'module' => 'setModule',
            'needBreak' => 'setNeedBreak',
            'needDevelop' => 'setNeedDevelop',
            'noBreakReason' => 'setNoBreakReason',
            'noDevelopReason' => 'setNoDevelopReason',
            'order' => 'setOrder',
            'planDevEndDate' => 'setPlanDevEndDate',
            'planProcessingEndDate' => 'setPlanProcessingEndDate',
            'planResearchanddevelopEndDate' => 'setPlanResearchanddevelopEndDate',
            'planTestEndDate' => 'setPlanTestEndDate',
            'positionFloat' => 'setPositionFloat',
            'processingOwner' => 'setProcessingOwner',
            'reasonAnalysis' => 'setReasonAnalysis',
            'regressionFailureNumber' => 'setRegressionFailureNumber',
            'relatedNetworkSecurity' => 'setRelatedNetworkSecurity',
            'repairSolution' => 'setRepairSolution',
            'researchanddevelopOwner' => 'setResearchanddevelopOwner',
            'severity' => 'setSeverity',
            'sysActivationReason' => 'setSysActivationReason',
            'sysNoRepairReason' => 'setSysNoRepairReason',
            'testFailuresTimes' => 'setTestFailuresTimes',
            'testOwner' => 'setTestOwner',
            'testReport' => 'setTestReport',
            'valFeature' => 'setValFeature',
            'workitem2ganttchart' => 'setWorkitem2ganttchart',
            'workitem2mindmap' => 'setWorkitem2mindmap'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sysAnalysisConclusion  **参数解释：**  分析结论，通常在接纳RR时填写。 **取值范围：**  不涉及。
    * sysRemark  **参数解释：**  备注。通常在提交验收RR时填写。 **取值范围：**  不涉及。
    * promised  promised
    * type  **参数解释：**  工作项的分类。 **取值范围：**  - requirement - raw requirement - bug - task - feature
    * belongInside  **参数解释：**  标识工作项是否跨项目提交。 **取值范围：**  - 1：跨项目提交工作项。 - 0：非跨项目提交工作项。
    * srcDomain  srcDomain
    * domainId  domainId
    * sendFrom  **参数解释：**  原始需求的协同上游需求Id。 **取值范围：**  不涉及。
    * number  **参数解释：**  工作项编号，由工作项类型+年月日+6位随机数组成。 **取值范围：**  不涉及。
    * sendTo  **参数解释：**  原始需求的协同下游需求Id。 **取值范围：**  不涉及。
    * path  **参数解释：**  工作项父子挂载路径关系。 **取值范围：**  不涉及。
    * workloadManDay  **参数解释：**  工作项计划工时。 **取值范围：**  不涉及。
    * sysCheckConclusion  **参数解释：**  验收结论。通常是验收RR时填写。 **取值范围：**  不涉及。
    * id  **参数解释：**  工作项唯一Id。 **取值范围：**  不涉及。
    * state  **参数解释：**  工作项生命周期。 **取值范围：**  - 正在工作：可正常操作的工作项； - 作废：软删除后的工作项，可在回收站恢复； - 删除：彻底删除后的工作项，无法恢复。
    * stayDays  **参数解释：**  工作项在当前状态的停留天数。 **取值范围：**  不涉及。
    * assignedCc  **参数解释：**  抄送人。 **取值范围：**  不涉及。
    * submitTime  **参数解释：**  工作项提交时间，指工作项进入工作流的时间，而不是创建时间。 **取值范围：**  不涉及。
    * workitem2label  **参数解释：**  工作项标签。 **取值范围：**  不涉及。
    * sysReturnConclusion  **参数解释：**  退回原因。通常为退回RR/Bug时填写。 **取值范围：**  不涉及。
    * closeTime  **参数解释：**  工作项完成时间。 **取值范围：**  不涉及。
    * priority  priority
    * modifiedDate  **参数解释：**  工作项最新修改时间。 **取值范围：**  不涉及。
    * createdBy  createdBy
    * breakStatus  breakStatus
    * statusModifiedDate  **参数解释：**  工作项上一次流转状态的时间，可用于计算停留天数。unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    * expectDeliveryTime  **参数解释：**  期望完成时间。Unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    * parentId  **参数解释：**  工作项的父工作项Id。 **取值范围：**  不涉及。
    * assignee  assignee
    * region  **参数解释：**  工作项所属租户的域。 **取值范围：**  不涉及。
    * status  status
    * tenantId  **参数解释：**  工作项所属租户Id。 **取值范围：**  不涉及。
    * planPi  planPi
    * link  **参数解释：**  关联工作项的关系字段。多值使用英文逗号分隔。 **取值范围：**  不涉及。
    * description  **参数解释：**  工作项描述，最多支持50w字符。 **取值范围：**  不涉及。
    * isSuspended  isSuspended
    * changeStatus  changeStatus
    * title  **参数解释：**  工作项标题。 **取值范围：**  不涉及。
    * sumWorkloadManDay  **参数解释：**  工作项实际工时。 **取值范围：**  不涉及。
    * sysCloseReason  **参数解释：**  工作项关闭原因。 **取值范围：**  不涉及。
    * sysResubmitReason  **参数解释：**  重新提交原因，通常用于RR/Bug退回后重新提交。 **取值范围：**  不涉及。
    * planEndDate  **参数解释：**  工作项计划完成时间。 **取值范围：**  不涉及。
    * rr2ir  **参数解释：**  RR的子IR的id。多值使用英文逗号分隔。 **取值范围：**  不涉及。
    * categoryLayerId  **参数解释：**  工作项类型层级id。 **取值范围：**  不涉及。
    * submittedBy  **参数解释：**  工作项提交人。 **取值范围：**  不涉及。
    * rr2us  **参数解释：**  RR的子US的id，多值使用英文逗号分隔。 **取值范围：**  不涉及。
    * sysNoDevelopReason  **参数解释：**  工作项无需开发原因。 **取值范围：**  不涉及。
    * planIteration  planIteration
    * sysReturnReason  **参数解释：**  退回原因。通常用于RR/bug退回。 **取值范围：**  不涉及。
    * cascadeDelete  **参数解释：**  是否级联删除标记。 **取值范围：**  不涉及。
    * recipient  **参数解释：**  承接人。通常用于RR。 **取值范围：**  不涉及。
    * modifiedBy  modifiedBy
    * createdDate  **参数解释：**  工作项创建时间。 **取值范围：**  不涉及。
    * category  **参数解释：**  工作项类型。 **取值范围：**  - 系统设备类项目：RR/SF/IR/SR/AR/Task/Bug。 - 独立软件类项目：RR/SF/IR/US/Task/Bug。 - 云服务类项目：RR/Epic/FE/US/Task/Bug。
    * collaborativeStatus  **参数解释：**  研发需求协同需求状态。 **取值范围：**  不涉及。
    * project  project
    * childIssues  **参数解释：**  子工作项列表。 **取值范围：**  不涉及。
    * activateTimes  **参数解释：**  激活次数。Bug激活时自动赋值。 **取值范围：**  不涉及。
    * baseline  baseline
    * businessDomain  businessDomain
    * children  **参数解释：**  子工作项Id，多值使用英文逗号分隔。 **取值范围：**  不涉及。
    * collaborativeHistory  **参数解释：**  协同需求的状态变化历史记录，内容为Json字符串。 **取值范围：**  不涉及。
    * collaboratives  **参数解释：**  协同需求中的记录Id。 **取值范围：**  不涉及。
    * convolutionActualHours  **参数解释：**  卷积实际工时。父工作项中将子工作项/协同工作项的实际工时卷积得到。 **取值范围：**  不涉及。
    * convolutionPlanHours  **参数解释：**  卷积计划工时。父工作项中将子工作项/协同工作项的计划工时卷积得到。 **取值范围：**  不涉及。
    * developOwner  **参数解释：**  开发责任人。通常用于“开发”状态节点责任人。 **取值范围：**  不涉及。
    * doneRatio  doneRatio
    * expectedRepairDate  **参数解释：**  期望修复时间。 **取值范围：**  不涉及。
    * feature2ir  **参数解释：**  SF的子IR的id。多值使用英文逗号分隔。 **取值范围：**  不涉及。
    * featureSet  featureSet
    * foundEnv  foundEnv
    * foundIteration  foundIteration
    * foundPi  foundPi
    * functionScene  **参数解释：**  功能场景。 **取值范围：**  不涉及。
    * ir2feature  **参数解释：**  IR关联的SF的Id，一个IR仅能关联一个SF。 **取值范围：**  不涉及。
    * ir2rr  **参数解释：**  IR关联父RR的Id，多值使用英文逗号分隔。 **取值范围：**  不涉及。
    * issueOpinionId  **参数解释：**  工作项关联的决策意见Id。 **取值范围：**  不涉及。
    * issueReviewId  **参数解释：**  工作项关联的评审意见Id。 **取值范围：**  不涉及。
    * module  module
    * needBreak  needBreak
    * needDevelop  needDevelop
    * noBreakReason  **参数解释：**  无需分解原因。 **取值范围：**  不涉及。
    * noDevelopReason  **参数解释：**  无需开发原因。 **取值范围：**  不涉及。
    * order  **参数解释：**  优先级顺序。 **取值范围：**  1~100。
    * planDevEndDate  **参数解释：**  计划开发结束时间。通常用于“开发”状态节点，Unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    * planProcessingEndDate  **参数解释：**  计划处理中结束时间。通常用于“处理中”状态节点，Unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    * planResearchanddevelopEndDate  **参数解释：**  计划研发结束时间。通常用于“研发”状态节点，Unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    * planTestEndDate  **参数解释：**  计划测试结束时间。通常用于“测试”状态节点，Unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    * positionFloat  **参数解释：**  标识工作项在列表中初始排序位置。 **取值范围：**  不涉及。
    * processingOwner  **参数解释：**  处理中责任人。通常用于“处理中”状态节点。 **取值范围：**  不涉及。
    * reasonAnalysis  **参数解释：**  分析原因。 **取值范围：**  不涉及。
    * regressionFailureNumber  **参数解释：**  回归不通过次数。缺陷测试不通过时自动赋值。 **取值范围：**  不涉及。
    * relatedNetworkSecurity  relatedNetworkSecurity
    * repairSolution  **参数解释：**  修复方案。常用于修复缺陷时。 **取值范围：**  不涉及。
    * researchanddevelopOwner  **参数解释：**  研发责任人。通常用于“研发”状态节点。 **取值范围：**  不涉及。
    * severity  severity
    * sysActivationReason  **参数解释：**  严重程度。 **取值范围：**  不涉及。
    * sysNoRepairReason  **参数解释：**  无需修复原因。通常用于在缺陷无需修复时。 **取值范围：**  不涉及。
    * testFailuresTimes  **参数解释：**  测试不通过次数。 **取值范围：**  不涉及。
    * testOwner  **参数解释：**  测试责任人。通常用于“测试”状态节点。 **取值范围：**  不涉及。
    * testReport  **参数解释：**  测试报告。 **取值范围：**  不涉及。
    * valFeature  valFeature
    * workitem2ganttchart  **参数解释：**  工作项关联的甘特图Id。 **取值范围：**  不涉及。
    * workitem2mindmap  **参数解释：**  工作项关联的思维导图Id。 **取值范围：**  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'sysAnalysisConclusion' => 'getSysAnalysisConclusion',
            'sysRemark' => 'getSysRemark',
            'promised' => 'getPromised',
            'type' => 'getType',
            'belongInside' => 'getBelongInside',
            'srcDomain' => 'getSrcDomain',
            'domainId' => 'getDomainId',
            'sendFrom' => 'getSendFrom',
            'number' => 'getNumber',
            'sendTo' => 'getSendTo',
            'path' => 'getPath',
            'workloadManDay' => 'getWorkloadManDay',
            'sysCheckConclusion' => 'getSysCheckConclusion',
            'id' => 'getId',
            'state' => 'getState',
            'stayDays' => 'getStayDays',
            'assignedCc' => 'getAssignedCc',
            'submitTime' => 'getSubmitTime',
            'workitem2label' => 'getWorkitem2label',
            'sysReturnConclusion' => 'getSysReturnConclusion',
            'closeTime' => 'getCloseTime',
            'priority' => 'getPriority',
            'modifiedDate' => 'getModifiedDate',
            'createdBy' => 'getCreatedBy',
            'breakStatus' => 'getBreakStatus',
            'statusModifiedDate' => 'getStatusModifiedDate',
            'expectDeliveryTime' => 'getExpectDeliveryTime',
            'parentId' => 'getParentId',
            'assignee' => 'getAssignee',
            'region' => 'getRegion',
            'status' => 'getStatus',
            'tenantId' => 'getTenantId',
            'planPi' => 'getPlanPi',
            'link' => 'getLink',
            'description' => 'getDescription',
            'isSuspended' => 'getIsSuspended',
            'changeStatus' => 'getChangeStatus',
            'title' => 'getTitle',
            'sumWorkloadManDay' => 'getSumWorkloadManDay',
            'sysCloseReason' => 'getSysCloseReason',
            'sysResubmitReason' => 'getSysResubmitReason',
            'planEndDate' => 'getPlanEndDate',
            'rr2ir' => 'getRr2ir',
            'categoryLayerId' => 'getCategoryLayerId',
            'submittedBy' => 'getSubmittedBy',
            'rr2us' => 'getRr2us',
            'sysNoDevelopReason' => 'getSysNoDevelopReason',
            'planIteration' => 'getPlanIteration',
            'sysReturnReason' => 'getSysReturnReason',
            'cascadeDelete' => 'getCascadeDelete',
            'recipient' => 'getRecipient',
            'modifiedBy' => 'getModifiedBy',
            'createdDate' => 'getCreatedDate',
            'category' => 'getCategory',
            'collaborativeStatus' => 'getCollaborativeStatus',
            'project' => 'getProject',
            'childIssues' => 'getChildIssues',
            'activateTimes' => 'getActivateTimes',
            'baseline' => 'getBaseline',
            'businessDomain' => 'getBusinessDomain',
            'children' => 'getChildren',
            'collaborativeHistory' => 'getCollaborativeHistory',
            'collaboratives' => 'getCollaboratives',
            'convolutionActualHours' => 'getConvolutionActualHours',
            'convolutionPlanHours' => 'getConvolutionPlanHours',
            'developOwner' => 'getDevelopOwner',
            'doneRatio' => 'getDoneRatio',
            'expectedRepairDate' => 'getExpectedRepairDate',
            'feature2ir' => 'getFeature2ir',
            'featureSet' => 'getFeatureSet',
            'foundEnv' => 'getFoundEnv',
            'foundIteration' => 'getFoundIteration',
            'foundPi' => 'getFoundPi',
            'functionScene' => 'getFunctionScene',
            'ir2feature' => 'getIr2feature',
            'ir2rr' => 'getIr2rr',
            'issueOpinionId' => 'getIssueOpinionId',
            'issueReviewId' => 'getIssueReviewId',
            'module' => 'getModule',
            'needBreak' => 'getNeedBreak',
            'needDevelop' => 'getNeedDevelop',
            'noBreakReason' => 'getNoBreakReason',
            'noDevelopReason' => 'getNoDevelopReason',
            'order' => 'getOrder',
            'planDevEndDate' => 'getPlanDevEndDate',
            'planProcessingEndDate' => 'getPlanProcessingEndDate',
            'planResearchanddevelopEndDate' => 'getPlanResearchanddevelopEndDate',
            'planTestEndDate' => 'getPlanTestEndDate',
            'positionFloat' => 'getPositionFloat',
            'processingOwner' => 'getProcessingOwner',
            'reasonAnalysis' => 'getReasonAnalysis',
            'regressionFailureNumber' => 'getRegressionFailureNumber',
            'relatedNetworkSecurity' => 'getRelatedNetworkSecurity',
            'repairSolution' => 'getRepairSolution',
            'researchanddevelopOwner' => 'getResearchanddevelopOwner',
            'severity' => 'getSeverity',
            'sysActivationReason' => 'getSysActivationReason',
            'sysNoRepairReason' => 'getSysNoRepairReason',
            'testFailuresTimes' => 'getTestFailuresTimes',
            'testOwner' => 'getTestOwner',
            'testReport' => 'getTestReport',
            'valFeature' => 'getValFeature',
            'workitem2ganttchart' => 'getWorkitem2ganttchart',
            'workitem2mindmap' => 'getWorkitem2mindmap'
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
        $this->container['sysAnalysisConclusion'] = isset($data['sysAnalysisConclusion']) ? $data['sysAnalysisConclusion'] : null;
        $this->container['sysRemark'] = isset($data['sysRemark']) ? $data['sysRemark'] : null;
        $this->container['promised'] = isset($data['promised']) ? $data['promised'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['belongInside'] = isset($data['belongInside']) ? $data['belongInside'] : null;
        $this->container['srcDomain'] = isset($data['srcDomain']) ? $data['srcDomain'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['sendFrom'] = isset($data['sendFrom']) ? $data['sendFrom'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['sendTo'] = isset($data['sendTo']) ? $data['sendTo'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['workloadManDay'] = isset($data['workloadManDay']) ? $data['workloadManDay'] : null;
        $this->container['sysCheckConclusion'] = isset($data['sysCheckConclusion']) ? $data['sysCheckConclusion'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['stayDays'] = isset($data['stayDays']) ? $data['stayDays'] : null;
        $this->container['assignedCc'] = isset($data['assignedCc']) ? $data['assignedCc'] : null;
        $this->container['submitTime'] = isset($data['submitTime']) ? $data['submitTime'] : null;
        $this->container['workitem2label'] = isset($data['workitem2label']) ? $data['workitem2label'] : null;
        $this->container['sysReturnConclusion'] = isset($data['sysReturnConclusion']) ? $data['sysReturnConclusion'] : null;
        $this->container['closeTime'] = isset($data['closeTime']) ? $data['closeTime'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['modifiedDate'] = isset($data['modifiedDate']) ? $data['modifiedDate'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['breakStatus'] = isset($data['breakStatus']) ? $data['breakStatus'] : null;
        $this->container['statusModifiedDate'] = isset($data['statusModifiedDate']) ? $data['statusModifiedDate'] : null;
        $this->container['expectDeliveryTime'] = isset($data['expectDeliveryTime']) ? $data['expectDeliveryTime'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['assignee'] = isset($data['assignee']) ? $data['assignee'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['planPi'] = isset($data['planPi']) ? $data['planPi'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['isSuspended'] = isset($data['isSuspended']) ? $data['isSuspended'] : null;
        $this->container['changeStatus'] = isset($data['changeStatus']) ? $data['changeStatus'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['sumWorkloadManDay'] = isset($data['sumWorkloadManDay']) ? $data['sumWorkloadManDay'] : null;
        $this->container['sysCloseReason'] = isset($data['sysCloseReason']) ? $data['sysCloseReason'] : null;
        $this->container['sysResubmitReason'] = isset($data['sysResubmitReason']) ? $data['sysResubmitReason'] : null;
        $this->container['planEndDate'] = isset($data['planEndDate']) ? $data['planEndDate'] : null;
        $this->container['rr2ir'] = isset($data['rr2ir']) ? $data['rr2ir'] : null;
        $this->container['categoryLayerId'] = isset($data['categoryLayerId']) ? $data['categoryLayerId'] : null;
        $this->container['submittedBy'] = isset($data['submittedBy']) ? $data['submittedBy'] : null;
        $this->container['rr2us'] = isset($data['rr2us']) ? $data['rr2us'] : null;
        $this->container['sysNoDevelopReason'] = isset($data['sysNoDevelopReason']) ? $data['sysNoDevelopReason'] : null;
        $this->container['planIteration'] = isset($data['planIteration']) ? $data['planIteration'] : null;
        $this->container['sysReturnReason'] = isset($data['sysReturnReason']) ? $data['sysReturnReason'] : null;
        $this->container['cascadeDelete'] = isset($data['cascadeDelete']) ? $data['cascadeDelete'] : null;
        $this->container['recipient'] = isset($data['recipient']) ? $data['recipient'] : null;
        $this->container['modifiedBy'] = isset($data['modifiedBy']) ? $data['modifiedBy'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['collaborativeStatus'] = isset($data['collaborativeStatus']) ? $data['collaborativeStatus'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['childIssues'] = isset($data['childIssues']) ? $data['childIssues'] : null;
        $this->container['activateTimes'] = isset($data['activateTimes']) ? $data['activateTimes'] : null;
        $this->container['baseline'] = isset($data['baseline']) ? $data['baseline'] : null;
        $this->container['businessDomain'] = isset($data['businessDomain']) ? $data['businessDomain'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
        $this->container['collaborativeHistory'] = isset($data['collaborativeHistory']) ? $data['collaborativeHistory'] : null;
        $this->container['collaboratives'] = isset($data['collaboratives']) ? $data['collaboratives'] : null;
        $this->container['convolutionActualHours'] = isset($data['convolutionActualHours']) ? $data['convolutionActualHours'] : null;
        $this->container['convolutionPlanHours'] = isset($data['convolutionPlanHours']) ? $data['convolutionPlanHours'] : null;
        $this->container['developOwner'] = isset($data['developOwner']) ? $data['developOwner'] : null;
        $this->container['doneRatio'] = isset($data['doneRatio']) ? $data['doneRatio'] : null;
        $this->container['expectedRepairDate'] = isset($data['expectedRepairDate']) ? $data['expectedRepairDate'] : null;
        $this->container['feature2ir'] = isset($data['feature2ir']) ? $data['feature2ir'] : null;
        $this->container['featureSet'] = isset($data['featureSet']) ? $data['featureSet'] : null;
        $this->container['foundEnv'] = isset($data['foundEnv']) ? $data['foundEnv'] : null;
        $this->container['foundIteration'] = isset($data['foundIteration']) ? $data['foundIteration'] : null;
        $this->container['foundPi'] = isset($data['foundPi']) ? $data['foundPi'] : null;
        $this->container['functionScene'] = isset($data['functionScene']) ? $data['functionScene'] : null;
        $this->container['ir2feature'] = isset($data['ir2feature']) ? $data['ir2feature'] : null;
        $this->container['ir2rr'] = isset($data['ir2rr']) ? $data['ir2rr'] : null;
        $this->container['issueOpinionId'] = isset($data['issueOpinionId']) ? $data['issueOpinionId'] : null;
        $this->container['issueReviewId'] = isset($data['issueReviewId']) ? $data['issueReviewId'] : null;
        $this->container['module'] = isset($data['module']) ? $data['module'] : null;
        $this->container['needBreak'] = isset($data['needBreak']) ? $data['needBreak'] : null;
        $this->container['needDevelop'] = isset($data['needDevelop']) ? $data['needDevelop'] : null;
        $this->container['noBreakReason'] = isset($data['noBreakReason']) ? $data['noBreakReason'] : null;
        $this->container['noDevelopReason'] = isset($data['noDevelopReason']) ? $data['noDevelopReason'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['planDevEndDate'] = isset($data['planDevEndDate']) ? $data['planDevEndDate'] : null;
        $this->container['planProcessingEndDate'] = isset($data['planProcessingEndDate']) ? $data['planProcessingEndDate'] : null;
        $this->container['planResearchanddevelopEndDate'] = isset($data['planResearchanddevelopEndDate']) ? $data['planResearchanddevelopEndDate'] : null;
        $this->container['planTestEndDate'] = isset($data['planTestEndDate']) ? $data['planTestEndDate'] : null;
        $this->container['positionFloat'] = isset($data['positionFloat']) ? $data['positionFloat'] : null;
        $this->container['processingOwner'] = isset($data['processingOwner']) ? $data['processingOwner'] : null;
        $this->container['reasonAnalysis'] = isset($data['reasonAnalysis']) ? $data['reasonAnalysis'] : null;
        $this->container['regressionFailureNumber'] = isset($data['regressionFailureNumber']) ? $data['regressionFailureNumber'] : null;
        $this->container['relatedNetworkSecurity'] = isset($data['relatedNetworkSecurity']) ? $data['relatedNetworkSecurity'] : null;
        $this->container['repairSolution'] = isset($data['repairSolution']) ? $data['repairSolution'] : null;
        $this->container['researchanddevelopOwner'] = isset($data['researchanddevelopOwner']) ? $data['researchanddevelopOwner'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['sysActivationReason'] = isset($data['sysActivationReason']) ? $data['sysActivationReason'] : null;
        $this->container['sysNoRepairReason'] = isset($data['sysNoRepairReason']) ? $data['sysNoRepairReason'] : null;
        $this->container['testFailuresTimes'] = isset($data['testFailuresTimes']) ? $data['testFailuresTimes'] : null;
        $this->container['testOwner'] = isset($data['testOwner']) ? $data['testOwner'] : null;
        $this->container['testReport'] = isset($data['testReport']) ? $data['testReport'] : null;
        $this->container['valFeature'] = isset($data['valFeature']) ? $data['valFeature'] : null;
        $this->container['workitem2ganttchart'] = isset($data['workitem2ganttchart']) ? $data['workitem2ganttchart'] : null;
        $this->container['workitem2mindmap'] = isset($data['workitem2mindmap']) ? $data['workitem2mindmap'] : null;
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
    * Gets sysAnalysisConclusion
    *  **参数解释：**  分析结论，通常在接纳RR时填写。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getSysAnalysisConclusion()
    {
        return $this->container['sysAnalysisConclusion'];
    }

    /**
    * Sets sysAnalysisConclusion
    *
    * @param string|null $sysAnalysisConclusion **参数解释：**  分析结论，通常在接纳RR时填写。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setSysAnalysisConclusion($sysAnalysisConclusion)
    {
        $this->container['sysAnalysisConclusion'] = $sysAnalysisConclusion;
        return $this;
    }

    /**
    * Gets sysRemark
    *  **参数解释：**  备注。通常在提交验收RR时填写。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getSysRemark()
    {
        return $this->container['sysRemark'];
    }

    /**
    * Sets sysRemark
    *
    * @param string|null $sysRemark **参数解释：**  备注。通常在提交验收RR时填写。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setSysRemark($sysRemark)
    {
        $this->container['sysRemark'] = $sysRemark;
        return $this;
    }

    /**
    * Gets promised
    *  promised
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO|null
    */
    public function getPromised()
    {
        return $this->container['promised'];
    }

    /**
    * Sets promised
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO|null $promised promised
    *
    * @return $this
    */
    public function setPromised($promised)
    {
        $this->container['promised'] = $promised;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：**  工作项的分类。 **取值范围：**  - requirement - raw requirement - bug - task - feature
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
    * @param string|null $type **参数解释：**  工作项的分类。 **取值范围：**  - requirement - raw requirement - bug - task - feature
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets belongInside
    *  **参数解释：**  标识工作项是否跨项目提交。 **取值范围：**  - 1：跨项目提交工作项。 - 0：非跨项目提交工作项。
    *
    * @return string|null
    */
    public function getBelongInside()
    {
        return $this->container['belongInside'];
    }

    /**
    * Sets belongInside
    *
    * @param string|null $belongInside **参数解释：**  标识工作项是否跨项目提交。 **取值范围：**  - 1：跨项目提交工作项。 - 0：非跨项目提交工作项。
    *
    * @return $this
    */
    public function setBelongInside($belongInside)
    {
        $this->container['belongInside'] = $belongInside;
        return $this;
    }

    /**
    * Gets srcDomain
    *  srcDomain
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\DomainVO|null
    */
    public function getSrcDomain()
    {
        return $this->container['srcDomain'];
    }

    /**
    * Sets srcDomain
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\DomainVO|null $srcDomain srcDomain
    *
    * @return $this
    */
    public function setSrcDomain($srcDomain)
    {
        $this->container['srcDomain'] = $srcDomain;
        return $this;
    }

    /**
    * Gets domainId
    *  domainId
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\DomainVO|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\DomainVO|null $domainId domainId
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets sendFrom
    *  **参数解释：**  原始需求的协同上游需求Id。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getSendFrom()
    {
        return $this->container['sendFrom'];
    }

    /**
    * Sets sendFrom
    *
    * @param string|null $sendFrom **参数解释：**  原始需求的协同上游需求Id。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setSendFrom($sendFrom)
    {
        $this->container['sendFrom'] = $sendFrom;
        return $this;
    }

    /**
    * Gets number
    *  **参数解释：**  工作项编号，由工作项类型+年月日+6位随机数组成。 **取值范围：**  不涉及。
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
    * @param string|null $number **参数解释：**  工作项编号，由工作项类型+年月日+6位随机数组成。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets sendTo
    *  **参数解释：**  原始需求的协同下游需求Id。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getSendTo()
    {
        return $this->container['sendTo'];
    }

    /**
    * Sets sendTo
    *
    * @param string|null $sendTo **参数解释：**  原始需求的协同下游需求Id。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setSendTo($sendTo)
    {
        $this->container['sendTo'] = $sendTo;
        return $this;
    }

    /**
    * Gets path
    *  **参数解释：**  工作项父子挂载路径关系。 **取值范围：**  不涉及。
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
    * @param string|null $path **参数解释：**  工作项父子挂载路径关系。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets workloadManDay
    *  **参数解释：**  工作项计划工时。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getWorkloadManDay()
    {
        return $this->container['workloadManDay'];
    }

    /**
    * Sets workloadManDay
    *
    * @param string|null $workloadManDay **参数解释：**  工作项计划工时。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setWorkloadManDay($workloadManDay)
    {
        $this->container['workloadManDay'] = $workloadManDay;
        return $this;
    }

    /**
    * Gets sysCheckConclusion
    *  **参数解释：**  验收结论。通常是验收RR时填写。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getSysCheckConclusion()
    {
        return $this->container['sysCheckConclusion'];
    }

    /**
    * Sets sysCheckConclusion
    *
    * @param string|null $sysCheckConclusion **参数解释：**  验收结论。通常是验收RR时填写。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setSysCheckConclusion($sysCheckConclusion)
    {
        $this->container['sysCheckConclusion'] = $sysCheckConclusion;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释：**  工作项唯一Id。 **取值范围：**  不涉及。
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
    * @param string|null $id **参数解释：**  工作项唯一Id。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets state
    *  **参数解释：**  工作项生命周期。 **取值范围：**  - 正在工作：可正常操作的工作项； - 作废：软删除后的工作项，可在回收站恢复； - 删除：彻底删除后的工作项，无法恢复。
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
    * @param string|null $state **参数解释：**  工作项生命周期。 **取值范围：**  - 正在工作：可正常操作的工作项； - 作废：软删除后的工作项，可在回收站恢复； - 删除：彻底删除后的工作项，无法恢复。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets stayDays
    *  **参数解释：**  工作项在当前状态的停留天数。 **取值范围：**  不涉及。
    *
    * @return int|null
    */
    public function getStayDays()
    {
        return $this->container['stayDays'];
    }

    /**
    * Sets stayDays
    *
    * @param int|null $stayDays **参数解释：**  工作项在当前状态的停留天数。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setStayDays($stayDays)
    {
        $this->container['stayDays'] = $stayDays;
        return $this;
    }

    /**
    * Gets assignedCc
    *  **参数解释：**  抄送人。 **取值范围：**  不涉及。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO[]|null
    */
    public function getAssignedCc()
    {
        return $this->container['assignedCc'];
    }

    /**
    * Sets assignedCc
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO[]|null $assignedCc **参数解释：**  抄送人。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setAssignedCc($assignedCc)
    {
        $this->container['assignedCc'] = $assignedCc;
        return $this;
    }

    /**
    * Gets submitTime
    *  **参数解释：**  工作项提交时间，指工作项进入工作流的时间，而不是创建时间。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getSubmitTime()
    {
        return $this->container['submitTime'];
    }

    /**
    * Sets submitTime
    *
    * @param string|null $submitTime **参数解释：**  工作项提交时间，指工作项进入工作流的时间，而不是创建时间。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setSubmitTime($submitTime)
    {
        $this->container['submitTime'] = $submitTime;
        return $this;
    }

    /**
    * Gets workitem2label
    *  **参数解释：**  工作项标签。 **取值范围：**  不涉及。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkItemLabelVO[]|null
    */
    public function getWorkitem2label()
    {
        return $this->container['workitem2label'];
    }

    /**
    * Sets workitem2label
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkItemLabelVO[]|null $workitem2label **参数解释：**  工作项标签。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setWorkitem2label($workitem2label)
    {
        $this->container['workitem2label'] = $workitem2label;
        return $this;
    }

    /**
    * Gets sysReturnConclusion
    *  **参数解释：**  退回原因。通常为退回RR/Bug时填写。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getSysReturnConclusion()
    {
        return $this->container['sysReturnConclusion'];
    }

    /**
    * Sets sysReturnConclusion
    *
    * @param string|null $sysReturnConclusion **参数解释：**  退回原因。通常为退回RR/Bug时填写。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setSysReturnConclusion($sysReturnConclusion)
    {
        $this->container['sysReturnConclusion'] = $sysReturnConclusion;
        return $this;
    }

    /**
    * Gets closeTime
    *  **参数解释：**  工作项完成时间。 **取值范围：**  不涉及。
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
    * @param string|null $closeTime **参数解释：**  工作项完成时间。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setCloseTime($closeTime)
    {
        $this->container['closeTime'] = $closeTime;
        return $this;
    }

    /**
    * Gets priority
    *  priority
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO|null $priority priority
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets modifiedDate
    *  **参数解释：**  工作项最新修改时间。 **取值范围：**  不涉及。
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
    * @param string|null $modifiedDate **参数解释：**  工作项最新修改时间。 **取值范围：**  不涉及。
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
    *  createdBy
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO|null $createdBy createdBy
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets breakStatus
    *  breakStatus
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO|null
    */
    public function getBreakStatus()
    {
        return $this->container['breakStatus'];
    }

    /**
    * Sets breakStatus
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO|null $breakStatus breakStatus
    *
    * @return $this
    */
    public function setBreakStatus($breakStatus)
    {
        $this->container['breakStatus'] = $breakStatus;
        return $this;
    }

    /**
    * Gets statusModifiedDate
    *  **参数解释：**  工作项上一次流转状态的时间，可用于计算停留天数。unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getStatusModifiedDate()
    {
        return $this->container['statusModifiedDate'];
    }

    /**
    * Sets statusModifiedDate
    *
    * @param string|null $statusModifiedDate **参数解释：**  工作项上一次流转状态的时间，可用于计算停留天数。unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setStatusModifiedDate($statusModifiedDate)
    {
        $this->container['statusModifiedDate'] = $statusModifiedDate;
        return $this;
    }

    /**
    * Gets expectDeliveryTime
    *  **参数解释：**  期望完成时间。Unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getExpectDeliveryTime()
    {
        return $this->container['expectDeliveryTime'];
    }

    /**
    * Sets expectDeliveryTime
    *
    * @param string|null $expectDeliveryTime **参数解释：**  期望完成时间。Unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setExpectDeliveryTime($expectDeliveryTime)
    {
        $this->container['expectDeliveryTime'] = $expectDeliveryTime;
        return $this;
    }

    /**
    * Gets parentId
    *  **参数解释：**  工作项的父工作项Id。 **取值范围：**  不涉及。
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
    * @param string|null $parentId **参数解释：**  工作项的父工作项Id。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets assignee
    *  assignee
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO|null
    */
    public function getAssignee()
    {
        return $this->container['assignee'];
    }

    /**
    * Sets assignee
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO|null $assignee assignee
    *
    * @return $this
    */
    public function setAssignee($assignee)
    {
        $this->container['assignee'] = $assignee;
        return $this;
    }

    /**
    * Gets region
    *  **参数解释：**  工作项所属租户的域。 **取值范围：**  不涉及。
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
    * @param string|null $region **参数解释：**  工作项所属租户的域。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\AlmStatus|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\AlmStatus|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets tenantId
    *  **参数解释：**  工作项所属租户Id。 **取值范围：**  不涉及。
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
    * @param string|null $tenantId **参数解释：**  工作项所属租户Id。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets planPi
    *  planPi
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\PlanVO|null
    */
    public function getPlanPi()
    {
        return $this->container['planPi'];
    }

    /**
    * Sets planPi
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\PlanVO|null $planPi planPi
    *
    * @return $this
    */
    public function setPlanPi($planPi)
    {
        $this->container['planPi'] = $planPi;
        return $this;
    }

    /**
    * Gets link
    *  **参数解释：**  关联工作项的关系字段。多值使用英文逗号分隔。 **取值范围：**  不涉及。
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
    * @param string|null $link **参数解释：**  关联工作项的关系字段。多值使用英文逗号分隔。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setLink($link)
    {
        $this->container['link'] = $link;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：**  工作项描述，最多支持50w字符。 **取值范围：**  不涉及。
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
    * @param string|null $description **参数解释：**  工作项描述，最多支持50w字符。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets isSuspended
    *  isSuspended
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO|null
    */
    public function getIsSuspended()
    {
        return $this->container['isSuspended'];
    }

    /**
    * Sets isSuspended
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO|null $isSuspended isSuspended
    *
    * @return $this
    */
    public function setIsSuspended($isSuspended)
    {
        $this->container['isSuspended'] = $isSuspended;
        return $this;
    }

    /**
    * Gets changeStatus
    *  changeStatus
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO|null
    */
    public function getChangeStatus()
    {
        return $this->container['changeStatus'];
    }

    /**
    * Sets changeStatus
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO|null $changeStatus changeStatus
    *
    * @return $this
    */
    public function setChangeStatus($changeStatus)
    {
        $this->container['changeStatus'] = $changeStatus;
        return $this;
    }

    /**
    * Gets title
    *  **参数解释：**  工作项标题。 **取值范围：**  不涉及。
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
    * @param string|null $title **参数解释：**  工作项标题。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets sumWorkloadManDay
    *  **参数解释：**  工作项实际工时。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getSumWorkloadManDay()
    {
        return $this->container['sumWorkloadManDay'];
    }

    /**
    * Sets sumWorkloadManDay
    *
    * @param string|null $sumWorkloadManDay **参数解释：**  工作项实际工时。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setSumWorkloadManDay($sumWorkloadManDay)
    {
        $this->container['sumWorkloadManDay'] = $sumWorkloadManDay;
        return $this;
    }

    /**
    * Gets sysCloseReason
    *  **参数解释：**  工作项关闭原因。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getSysCloseReason()
    {
        return $this->container['sysCloseReason'];
    }

    /**
    * Sets sysCloseReason
    *
    * @param string|null $sysCloseReason **参数解释：**  工作项关闭原因。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setSysCloseReason($sysCloseReason)
    {
        $this->container['sysCloseReason'] = $sysCloseReason;
        return $this;
    }

    /**
    * Gets sysResubmitReason
    *  **参数解释：**  重新提交原因，通常用于RR/Bug退回后重新提交。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getSysResubmitReason()
    {
        return $this->container['sysResubmitReason'];
    }

    /**
    * Sets sysResubmitReason
    *
    * @param string|null $sysResubmitReason **参数解释：**  重新提交原因，通常用于RR/Bug退回后重新提交。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setSysResubmitReason($sysResubmitReason)
    {
        $this->container['sysResubmitReason'] = $sysResubmitReason;
        return $this;
    }

    /**
    * Gets planEndDate
    *  **参数解释：**  工作项计划完成时间。 **取值范围：**  不涉及。
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
    * @param string|null $planEndDate **参数解释：**  工作项计划完成时间。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setPlanEndDate($planEndDate)
    {
        $this->container['planEndDate'] = $planEndDate;
        return $this;
    }

    /**
    * Gets rr2ir
    *  **参数解释：**  RR的子IR的id。多值使用英文逗号分隔。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getRr2ir()
    {
        return $this->container['rr2ir'];
    }

    /**
    * Sets rr2ir
    *
    * @param string|null $rr2ir **参数解释：**  RR的子IR的id。多值使用英文逗号分隔。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setRr2ir($rr2ir)
    {
        $this->container['rr2ir'] = $rr2ir;
        return $this;
    }

    /**
    * Gets categoryLayerId
    *  **参数解释：**  工作项类型层级id。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getCategoryLayerId()
    {
        return $this->container['categoryLayerId'];
    }

    /**
    * Sets categoryLayerId
    *
    * @param string|null $categoryLayerId **参数解释：**  工作项类型层级id。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setCategoryLayerId($categoryLayerId)
    {
        $this->container['categoryLayerId'] = $categoryLayerId;
        return $this;
    }

    /**
    * Gets submittedBy
    *  **参数解释：**  工作项提交人。 **取值范围：**  不涉及。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO[]|null
    */
    public function getSubmittedBy()
    {
        return $this->container['submittedBy'];
    }

    /**
    * Sets submittedBy
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO[]|null $submittedBy **参数解释：**  工作项提交人。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setSubmittedBy($submittedBy)
    {
        $this->container['submittedBy'] = $submittedBy;
        return $this;
    }

    /**
    * Gets rr2us
    *  **参数解释：**  RR的子US的id，多值使用英文逗号分隔。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getRr2us()
    {
        return $this->container['rr2us'];
    }

    /**
    * Sets rr2us
    *
    * @param string|null $rr2us **参数解释：**  RR的子US的id，多值使用英文逗号分隔。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setRr2us($rr2us)
    {
        $this->container['rr2us'] = $rr2us;
        return $this;
    }

    /**
    * Gets sysNoDevelopReason
    *  **参数解释：**  工作项无需开发原因。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getSysNoDevelopReason()
    {
        return $this->container['sysNoDevelopReason'];
    }

    /**
    * Sets sysNoDevelopReason
    *
    * @param string|null $sysNoDevelopReason **参数解释：**  工作项无需开发原因。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setSysNoDevelopReason($sysNoDevelopReason)
    {
        $this->container['sysNoDevelopReason'] = $sysNoDevelopReason;
        return $this;
    }

    /**
    * Gets planIteration
    *  planIteration
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\PlanVO|null
    */
    public function getPlanIteration()
    {
        return $this->container['planIteration'];
    }

    /**
    * Sets planIteration
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\PlanVO|null $planIteration planIteration
    *
    * @return $this
    */
    public function setPlanIteration($planIteration)
    {
        $this->container['planIteration'] = $planIteration;
        return $this;
    }

    /**
    * Gets sysReturnReason
    *  **参数解释：**  退回原因。通常用于RR/bug退回。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getSysReturnReason()
    {
        return $this->container['sysReturnReason'];
    }

    /**
    * Sets sysReturnReason
    *
    * @param string|null $sysReturnReason **参数解释：**  退回原因。通常用于RR/bug退回。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setSysReturnReason($sysReturnReason)
    {
        $this->container['sysReturnReason'] = $sysReturnReason;
        return $this;
    }

    /**
    * Gets cascadeDelete
    *  **参数解释：**  是否级联删除标记。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getCascadeDelete()
    {
        return $this->container['cascadeDelete'];
    }

    /**
    * Sets cascadeDelete
    *
    * @param string|null $cascadeDelete **参数解释：**  是否级联删除标记。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setCascadeDelete($cascadeDelete)
    {
        $this->container['cascadeDelete'] = $cascadeDelete;
        return $this;
    }

    /**
    * Gets recipient
    *  **参数解释：**  承接人。通常用于RR。 **取值范围：**  不涉及。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO[]|null
    */
    public function getRecipient()
    {
        return $this->container['recipient'];
    }

    /**
    * Sets recipient
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO[]|null $recipient **参数解释：**  承接人。通常用于RR。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setRecipient($recipient)
    {
        $this->container['recipient'] = $recipient;
        return $this;
    }

    /**
    * Gets modifiedBy
    *  modifiedBy
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO|null
    */
    public function getModifiedBy()
    {
        return $this->container['modifiedBy'];
    }

    /**
    * Sets modifiedBy
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO|null $modifiedBy modifiedBy
    *
    * @return $this
    */
    public function setModifiedBy($modifiedBy)
    {
        $this->container['modifiedBy'] = $modifiedBy;
        return $this;
    }

    /**
    * Gets createdDate
    *  **参数解释：**  工作项创建时间。 **取值范围：**  不涉及。
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
    * @param string|null $createdDate **参数解释：**  工作项创建时间。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;
        return $this;
    }

    /**
    * Gets category
    *  **参数解释：**  工作项类型。 **取值范围：**  - 系统设备类项目：RR/SF/IR/SR/AR/Task/Bug。 - 独立软件类项目：RR/SF/IR/US/Task/Bug。 - 云服务类项目：RR/Epic/FE/US/Task/Bug。
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
    * @param string|null $category **参数解释：**  工作项类型。 **取值范围：**  - 系统设备类项目：RR/SF/IR/SR/AR/Task/Bug。 - 独立软件类项目：RR/SF/IR/US/Task/Bug。 - 云服务类项目：RR/Epic/FE/US/Task/Bug。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets collaborativeStatus
    *  **参数解释：**  研发需求协同需求状态。 **取值范围：**  不涉及。
    *
    * @return string[]|null
    */
    public function getCollaborativeStatus()
    {
        return $this->container['collaborativeStatus'];
    }

    /**
    * Sets collaborativeStatus
    *
    * @param string[]|null $collaborativeStatus **参数解释：**  研发需求协同需求状态。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setCollaborativeStatus($collaborativeStatus)
    {
        $this->container['collaborativeStatus'] = $collaborativeStatus;
        return $this;
    }

    /**
    * Gets project
    *  project
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\DomainVO|null
    */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
    * Sets project
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\DomainVO|null $project project
    *
    * @return $this
    */
    public function setProject($project)
    {
        $this->container['project'] = $project;
        return $this;
    }

    /**
    * Gets childIssues
    *  **参数解释：**  子工作项列表。 **取值范围：**  不涉及。
    *
    * @return map[string,\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueVO]|null
    */
    public function getChildIssues()
    {
        return $this->container['childIssues'];
    }

    /**
    * Sets childIssues
    *
    * @param map[string,\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueVO]|null $childIssues **参数解释：**  子工作项列表。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setChildIssues($childIssues)
    {
        $this->container['childIssues'] = $childIssues;
        return $this;
    }

    /**
    * Gets activateTimes
    *  **参数解释：**  激活次数。Bug激活时自动赋值。 **取值范围：**  不涉及。
    *
    * @return int|null
    */
    public function getActivateTimes()
    {
        return $this->container['activateTimes'];
    }

    /**
    * Sets activateTimes
    *
    * @param int|null $activateTimes **参数解释：**  激活次数。Bug激活时自动赋值。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setActivateTimes($activateTimes)
    {
        $this->container['activateTimes'] = $activateTimes;
        return $this;
    }

    /**
    * Gets baseline
    *  baseline
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO|null
    */
    public function getBaseline()
    {
        return $this->container['baseline'];
    }

    /**
    * Sets baseline
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO|null $baseline baseline
    *
    * @return $this
    */
    public function setBaseline($baseline)
    {
        $this->container['baseline'] = $baseline;
        return $this;
    }

    /**
    * Gets businessDomain
    *  businessDomain
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO|null
    */
    public function getBusinessDomain()
    {
        return $this->container['businessDomain'];
    }

    /**
    * Sets businessDomain
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO|null $businessDomain businessDomain
    *
    * @return $this
    */
    public function setBusinessDomain($businessDomain)
    {
        $this->container['businessDomain'] = $businessDomain;
        return $this;
    }

    /**
    * Gets children
    *  **参数解释：**  子工作项Id，多值使用英文逗号分隔。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
    * Sets children
    *
    * @param string|null $children **参数解释：**  子工作项Id，多值使用英文逗号分隔。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setChildren($children)
    {
        $this->container['children'] = $children;
        return $this;
    }

    /**
    * Gets collaborativeHistory
    *  **参数解释：**  协同需求的状态变化历史记录，内容为Json字符串。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getCollaborativeHistory()
    {
        return $this->container['collaborativeHistory'];
    }

    /**
    * Sets collaborativeHistory
    *
    * @param string|null $collaborativeHistory **参数解释：**  协同需求的状态变化历史记录，内容为Json字符串。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setCollaborativeHistory($collaborativeHistory)
    {
        $this->container['collaborativeHistory'] = $collaborativeHistory;
        return $this;
    }

    /**
    * Gets collaboratives
    *  **参数解释：**  协同需求中的记录Id。 **取值范围：**  不涉及。
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
    * @param string|null $collaboratives **参数解释：**  协同需求中的记录Id。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setCollaboratives($collaboratives)
    {
        $this->container['collaboratives'] = $collaboratives;
        return $this;
    }

    /**
    * Gets convolutionActualHours
    *  **参数解释：**  卷积实际工时。父工作项中将子工作项/协同工作项的实际工时卷积得到。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getConvolutionActualHours()
    {
        return $this->container['convolutionActualHours'];
    }

    /**
    * Sets convolutionActualHours
    *
    * @param string|null $convolutionActualHours **参数解释：**  卷积实际工时。父工作项中将子工作项/协同工作项的实际工时卷积得到。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setConvolutionActualHours($convolutionActualHours)
    {
        $this->container['convolutionActualHours'] = $convolutionActualHours;
        return $this;
    }

    /**
    * Gets convolutionPlanHours
    *  **参数解释：**  卷积计划工时。父工作项中将子工作项/协同工作项的计划工时卷积得到。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getConvolutionPlanHours()
    {
        return $this->container['convolutionPlanHours'];
    }

    /**
    * Sets convolutionPlanHours
    *
    * @param string|null $convolutionPlanHours **参数解释：**  卷积计划工时。父工作项中将子工作项/协同工作项的计划工时卷积得到。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setConvolutionPlanHours($convolutionPlanHours)
    {
        $this->container['convolutionPlanHours'] = $convolutionPlanHours;
        return $this;
    }

    /**
    * Gets developOwner
    *  **参数解释：**  开发责任人。通常用于“开发”状态节点责任人。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getDevelopOwner()
    {
        return $this->container['developOwner'];
    }

    /**
    * Sets developOwner
    *
    * @param string|null $developOwner **参数解释：**  开发责任人。通常用于“开发”状态节点责任人。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setDevelopOwner($developOwner)
    {
        $this->container['developOwner'] = $developOwner;
        return $this;
    }

    /**
    * Gets doneRatio
    *  doneRatio
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO|null
    */
    public function getDoneRatio()
    {
        return $this->container['doneRatio'];
    }

    /**
    * Sets doneRatio
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO|null $doneRatio doneRatio
    *
    * @return $this
    */
    public function setDoneRatio($doneRatio)
    {
        $this->container['doneRatio'] = $doneRatio;
        return $this;
    }

    /**
    * Gets expectedRepairDate
    *  **参数解释：**  期望修复时间。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getExpectedRepairDate()
    {
        return $this->container['expectedRepairDate'];
    }

    /**
    * Sets expectedRepairDate
    *
    * @param string|null $expectedRepairDate **参数解释：**  期望修复时间。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setExpectedRepairDate($expectedRepairDate)
    {
        $this->container['expectedRepairDate'] = $expectedRepairDate;
        return $this;
    }

    /**
    * Gets feature2ir
    *  **参数解释：**  SF的子IR的id。多值使用英文逗号分隔。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getFeature2ir()
    {
        return $this->container['feature2ir'];
    }

    /**
    * Sets feature2ir
    *
    * @param string|null $feature2ir **参数解释：**  SF的子IR的id。多值使用英文逗号分隔。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setFeature2ir($feature2ir)
    {
        $this->container['feature2ir'] = $feature2ir;
        return $this;
    }

    /**
    * Gets featureSet
    *  featureSet
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO|null
    */
    public function getFeatureSet()
    {
        return $this->container['featureSet'];
    }

    /**
    * Sets featureSet
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO|null $featureSet featureSet
    *
    * @return $this
    */
    public function setFeatureSet($featureSet)
    {
        $this->container['featureSet'] = $featureSet;
        return $this;
    }

    /**
    * Gets foundEnv
    *  foundEnv
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO|null
    */
    public function getFoundEnv()
    {
        return $this->container['foundEnv'];
    }

    /**
    * Sets foundEnv
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO|null $foundEnv foundEnv
    *
    * @return $this
    */
    public function setFoundEnv($foundEnv)
    {
        $this->container['foundEnv'] = $foundEnv;
        return $this;
    }

    /**
    * Gets foundIteration
    *  foundIteration
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\PlanVO|null
    */
    public function getFoundIteration()
    {
        return $this->container['foundIteration'];
    }

    /**
    * Sets foundIteration
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\PlanVO|null $foundIteration foundIteration
    *
    * @return $this
    */
    public function setFoundIteration($foundIteration)
    {
        $this->container['foundIteration'] = $foundIteration;
        return $this;
    }

    /**
    * Gets foundPi
    *  foundPi
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\PlanVO|null
    */
    public function getFoundPi()
    {
        return $this->container['foundPi'];
    }

    /**
    * Sets foundPi
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\PlanVO|null $foundPi foundPi
    *
    * @return $this
    */
    public function setFoundPi($foundPi)
    {
        $this->container['foundPi'] = $foundPi;
        return $this;
    }

    /**
    * Gets functionScene
    *  **参数解释：**  功能场景。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getFunctionScene()
    {
        return $this->container['functionScene'];
    }

    /**
    * Sets functionScene
    *
    * @param string|null $functionScene **参数解释：**  功能场景。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setFunctionScene($functionScene)
    {
        $this->container['functionScene'] = $functionScene;
        return $this;
    }

    /**
    * Gets ir2feature
    *  **参数解释：**  IR关联的SF的Id，一个IR仅能关联一个SF。 **取值范围：**  不涉及。
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
    * @param string|null $ir2feature **参数解释：**  IR关联的SF的Id，一个IR仅能关联一个SF。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setIr2feature($ir2feature)
    {
        $this->container['ir2feature'] = $ir2feature;
        return $this;
    }

    /**
    * Gets ir2rr
    *  **参数解释：**  IR关联父RR的Id，多值使用英文逗号分隔。 **取值范围：**  不涉及。
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
    * @param string|null $ir2rr **参数解释：**  IR关联父RR的Id，多值使用英文逗号分隔。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setIr2rr($ir2rr)
    {
        $this->container['ir2rr'] = $ir2rr;
        return $this;
    }

    /**
    * Gets issueOpinionId
    *  **参数解释：**  工作项关联的决策意见Id。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getIssueOpinionId()
    {
        return $this->container['issueOpinionId'];
    }

    /**
    * Sets issueOpinionId
    *
    * @param string|null $issueOpinionId **参数解释：**  工作项关联的决策意见Id。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setIssueOpinionId($issueOpinionId)
    {
        $this->container['issueOpinionId'] = $issueOpinionId;
        return $this;
    }

    /**
    * Gets issueReviewId
    *  **参数解释：**  工作项关联的评审意见Id。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getIssueReviewId()
    {
        return $this->container['issueReviewId'];
    }

    /**
    * Sets issueReviewId
    *
    * @param string|null $issueReviewId **参数解释：**  工作项关联的评审意见Id。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setIssueReviewId($issueReviewId)
    {
        $this->container['issueReviewId'] = $issueReviewId;
        return $this;
    }

    /**
    * Gets module
    *  module
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO|null
    */
    public function getModule()
    {
        return $this->container['module'];
    }

    /**
    * Sets module
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO|null $module module
    *
    * @return $this
    */
    public function setModule($module)
    {
        $this->container['module'] = $module;
        return $this;
    }

    /**
    * Gets needBreak
    *  needBreak
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO|null
    */
    public function getNeedBreak()
    {
        return $this->container['needBreak'];
    }

    /**
    * Sets needBreak
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO|null $needBreak needBreak
    *
    * @return $this
    */
    public function setNeedBreak($needBreak)
    {
        $this->container['needBreak'] = $needBreak;
        return $this;
    }

    /**
    * Gets needDevelop
    *  needDevelop
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO|null
    */
    public function getNeedDevelop()
    {
        return $this->container['needDevelop'];
    }

    /**
    * Sets needDevelop
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO|null $needDevelop needDevelop
    *
    * @return $this
    */
    public function setNeedDevelop($needDevelop)
    {
        $this->container['needDevelop'] = $needDevelop;
        return $this;
    }

    /**
    * Gets noBreakReason
    *  **参数解释：**  无需分解原因。 **取值范围：**  不涉及。
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
    * @param string|null $noBreakReason **参数解释：**  无需分解原因。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setNoBreakReason($noBreakReason)
    {
        $this->container['noBreakReason'] = $noBreakReason;
        return $this;
    }

    /**
    * Gets noDevelopReason
    *  **参数解释：**  无需开发原因。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getNoDevelopReason()
    {
        return $this->container['noDevelopReason'];
    }

    /**
    * Sets noDevelopReason
    *
    * @param string|null $noDevelopReason **参数解释：**  无需开发原因。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setNoDevelopReason($noDevelopReason)
    {
        $this->container['noDevelopReason'] = $noDevelopReason;
        return $this;
    }

    /**
    * Gets order
    *  **参数解释：**  优先级顺序。 **取值范围：**  1~100。
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
    * @param string|null $order **参数解释：**  优先级顺序。 **取值范围：**  1~100。
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
        return $this;
    }

    /**
    * Gets planDevEndDate
    *  **参数解释：**  计划开发结束时间。通常用于“开发”状态节点，Unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getPlanDevEndDate()
    {
        return $this->container['planDevEndDate'];
    }

    /**
    * Sets planDevEndDate
    *
    * @param string|null $planDevEndDate **参数解释：**  计划开发结束时间。通常用于“开发”状态节点，Unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setPlanDevEndDate($planDevEndDate)
    {
        $this->container['planDevEndDate'] = $planDevEndDate;
        return $this;
    }

    /**
    * Gets planProcessingEndDate
    *  **参数解释：**  计划处理中结束时间。通常用于“处理中”状态节点，Unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getPlanProcessingEndDate()
    {
        return $this->container['planProcessingEndDate'];
    }

    /**
    * Sets planProcessingEndDate
    *
    * @param string|null $planProcessingEndDate **参数解释：**  计划处理中结束时间。通常用于“处理中”状态节点，Unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setPlanProcessingEndDate($planProcessingEndDate)
    {
        $this->container['planProcessingEndDate'] = $planProcessingEndDate;
        return $this;
    }

    /**
    * Gets planResearchanddevelopEndDate
    *  **参数解释：**  计划研发结束时间。通常用于“研发”状态节点，Unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getPlanResearchanddevelopEndDate()
    {
        return $this->container['planResearchanddevelopEndDate'];
    }

    /**
    * Sets planResearchanddevelopEndDate
    *
    * @param string|null $planResearchanddevelopEndDate **参数解释：**  计划研发结束时间。通常用于“研发”状态节点，Unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setPlanResearchanddevelopEndDate($planResearchanddevelopEndDate)
    {
        $this->container['planResearchanddevelopEndDate'] = $planResearchanddevelopEndDate;
        return $this;
    }

    /**
    * Gets planTestEndDate
    *  **参数解释：**  计划测试结束时间。通常用于“测试”状态节点，Unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getPlanTestEndDate()
    {
        return $this->container['planTestEndDate'];
    }

    /**
    * Sets planTestEndDate
    *
    * @param string|null $planTestEndDate **参数解释：**  计划测试结束时间。通常用于“测试”状态节点，Unix时间戳，单位为毫秒。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setPlanTestEndDate($planTestEndDate)
    {
        $this->container['planTestEndDate'] = $planTestEndDate;
        return $this;
    }

    /**
    * Gets positionFloat
    *  **参数解释：**  标识工作项在列表中初始排序位置。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getPositionFloat()
    {
        return $this->container['positionFloat'];
    }

    /**
    * Sets positionFloat
    *
    * @param string|null $positionFloat **参数解释：**  标识工作项在列表中初始排序位置。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setPositionFloat($positionFloat)
    {
        $this->container['positionFloat'] = $positionFloat;
        return $this;
    }

    /**
    * Gets processingOwner
    *  **参数解释：**  处理中责任人。通常用于“处理中”状态节点。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getProcessingOwner()
    {
        return $this->container['processingOwner'];
    }

    /**
    * Sets processingOwner
    *
    * @param string|null $processingOwner **参数解释：**  处理中责任人。通常用于“处理中”状态节点。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setProcessingOwner($processingOwner)
    {
        $this->container['processingOwner'] = $processingOwner;
        return $this;
    }

    /**
    * Gets reasonAnalysis
    *  **参数解释：**  分析原因。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getReasonAnalysis()
    {
        return $this->container['reasonAnalysis'];
    }

    /**
    * Sets reasonAnalysis
    *
    * @param string|null $reasonAnalysis **参数解释：**  分析原因。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setReasonAnalysis($reasonAnalysis)
    {
        $this->container['reasonAnalysis'] = $reasonAnalysis;
        return $this;
    }

    /**
    * Gets regressionFailureNumber
    *  **参数解释：**  回归不通过次数。缺陷测试不通过时自动赋值。 **取值范围：**  不涉及。
    *
    * @return int|null
    */
    public function getRegressionFailureNumber()
    {
        return $this->container['regressionFailureNumber'];
    }

    /**
    * Sets regressionFailureNumber
    *
    * @param int|null $regressionFailureNumber **参数解释：**  回归不通过次数。缺陷测试不通过时自动赋值。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setRegressionFailureNumber($regressionFailureNumber)
    {
        $this->container['regressionFailureNumber'] = $regressionFailureNumber;
        return $this;
    }

    /**
    * Gets relatedNetworkSecurity
    *  relatedNetworkSecurity
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO|null
    */
    public function getRelatedNetworkSecurity()
    {
        return $this->container['relatedNetworkSecurity'];
    }

    /**
    * Sets relatedNetworkSecurity
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO|null $relatedNetworkSecurity relatedNetworkSecurity
    *
    * @return $this
    */
    public function setRelatedNetworkSecurity($relatedNetworkSecurity)
    {
        $this->container['relatedNetworkSecurity'] = $relatedNetworkSecurity;
        return $this;
    }

    /**
    * Gets repairSolution
    *  **参数解释：**  修复方案。常用于修复缺陷时。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getRepairSolution()
    {
        return $this->container['repairSolution'];
    }

    /**
    * Sets repairSolution
    *
    * @param string|null $repairSolution **参数解释：**  修复方案。常用于修复缺陷时。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setRepairSolution($repairSolution)
    {
        $this->container['repairSolution'] = $repairSolution;
        return $this;
    }

    /**
    * Gets researchanddevelopOwner
    *  **参数解释：**  研发责任人。通常用于“研发”状态节点。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getResearchanddevelopOwner()
    {
        return $this->container['researchanddevelopOwner'];
    }

    /**
    * Sets researchanddevelopOwner
    *
    * @param string|null $researchanddevelopOwner **参数解释：**  研发责任人。通常用于“研发”状态节点。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setResearchanddevelopOwner($researchanddevelopOwner)
    {
        $this->container['researchanddevelopOwner'] = $researchanddevelopOwner;
        return $this;
    }

    /**
    * Gets severity
    *  severity
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO|null $severity severity
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets sysActivationReason
    *  **参数解释：**  严重程度。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getSysActivationReason()
    {
        return $this->container['sysActivationReason'];
    }

    /**
    * Sets sysActivationReason
    *
    * @param string|null $sysActivationReason **参数解释：**  严重程度。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setSysActivationReason($sysActivationReason)
    {
        $this->container['sysActivationReason'] = $sysActivationReason;
        return $this;
    }

    /**
    * Gets sysNoRepairReason
    *  **参数解释：**  无需修复原因。通常用于在缺陷无需修复时。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getSysNoRepairReason()
    {
        return $this->container['sysNoRepairReason'];
    }

    /**
    * Sets sysNoRepairReason
    *
    * @param string|null $sysNoRepairReason **参数解释：**  无需修复原因。通常用于在缺陷无需修复时。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setSysNoRepairReason($sysNoRepairReason)
    {
        $this->container['sysNoRepairReason'] = $sysNoRepairReason;
        return $this;
    }

    /**
    * Gets testFailuresTimes
    *  **参数解释：**  测试不通过次数。 **取值范围：**  不涉及。
    *
    * @return int|null
    */
    public function getTestFailuresTimes()
    {
        return $this->container['testFailuresTimes'];
    }

    /**
    * Sets testFailuresTimes
    *
    * @param int|null $testFailuresTimes **参数解释：**  测试不通过次数。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setTestFailuresTimes($testFailuresTimes)
    {
        $this->container['testFailuresTimes'] = $testFailuresTimes;
        return $this;
    }

    /**
    * Gets testOwner
    *  **参数解释：**  测试责任人。通常用于“测试”状态节点。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getTestOwner()
    {
        return $this->container['testOwner'];
    }

    /**
    * Sets testOwner
    *
    * @param string|null $testOwner **参数解释：**  测试责任人。通常用于“测试”状态节点。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setTestOwner($testOwner)
    {
        $this->container['testOwner'] = $testOwner;
        return $this;
    }

    /**
    * Gets testReport
    *  **参数解释：**  测试报告。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getTestReport()
    {
        return $this->container['testReport'];
    }

    /**
    * Sets testReport
    *
    * @param string|null $testReport **参数解释：**  测试报告。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setTestReport($testReport)
    {
        $this->container['testReport'] = $testReport;
        return $this;
    }

    /**
    * Gets valFeature
    *  valFeature
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO|null
    */
    public function getValFeature()
    {
        return $this->container['valFeature'];
    }

    /**
    * Sets valFeature
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\OptionVO|null $valFeature valFeature
    *
    * @return $this
    */
    public function setValFeature($valFeature)
    {
        $this->container['valFeature'] = $valFeature;
        return $this;
    }

    /**
    * Gets workitem2ganttchart
    *  **参数解释：**  工作项关联的甘特图Id。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getWorkitem2ganttchart()
    {
        return $this->container['workitem2ganttchart'];
    }

    /**
    * Sets workitem2ganttchart
    *
    * @param string|null $workitem2ganttchart **参数解释：**  工作项关联的甘特图Id。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setWorkitem2ganttchart($workitem2ganttchart)
    {
        $this->container['workitem2ganttchart'] = $workitem2ganttchart;
        return $this;
    }

    /**
    * Gets workitem2mindmap
    *  **参数解释：**  工作项关联的思维导图Id。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getWorkitem2mindmap()
    {
        return $this->container['workitem2mindmap'];
    }

    /**
    * Sets workitem2mindmap
    *
    * @param string|null $workitem2mindmap **参数解释：**  工作项关联的思维导图Id。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setWorkitem2mindmap($workitem2mindmap)
    {
        $this->container['workitem2mindmap'] = $workitem2mindmap;
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

