<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IssueUpdateAttribute implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IssueUpdateAttribute';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * category  **参数解释**： 工作项类型编码。编辑工作项时，此字段必填、值为当前工作项正确的工作项类型，但不会更新此字段。 **约束限制**： 不涉及。 **取值范围**： 支持多种工作项类型，使用英文逗号分隔。 - 系统设备类项目：RR、SF、IR、SR、AR、Task、Bug - 独立软件类项目：RR、SF、IR、US、Task、Bug - 云服务类项目：RR、Epic、FE、US、Task、Bug **默认取值**： 不涉及。
    * description  **参数解释**： 工作项描述字段，可通过[查询树状工作项](ShowIpdIssueTree.xml)接口获取，响应消息体中的**description**字段的值就是工作项描述字段。 **约束限制**： 不涉及。 **取值范围**： 1~500000个字符。 **默认取值**： 不涉及。
    * parentId  **参数解释**： 父工作项ID，可通过[查询树状工作项](ShowIpdIssueTree.xml)接口获取，响应消息体中的**parent_id**字段的值就是父工作项ID。 **约束限制**： 不涉及。 **取值范围**： 18~19个字符的数字字符串。 **默认取值**： 不涉及。
    * status  **参数解释**： 工作项状态code。可通过[查询工作项状态](ListIssueStatues.xml)接口获取，响应消息体中的**code**字段的值就是工作项状态code。 **约束限制**： 不涉及。 **取值范围**： 2~32个字符。 **默认取值**： 不涉及。
    * assignee  assignee
    * assignedCc  **参数解释**： 工作项抄送人，支持多个抄送人。数组元素为UserUpdateAttribute对象。 **约束限制**： 同一工作项最多支持50个抄送人。
    * planEndDate  **参数解释**： 工作项计划结束日期，unix时间戳，单位：毫秒。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * workload  **参数解释**： 工作项计划工时。 **约束限制**： 保留一位小数。 **取值范围**： 0~999999999.9。 **默认取值**： 不涉及。
    * link  **参数解释**： 工作项关联项ID。 **约束限制**： 多个关联项用英文逗号分隔，同一工作项最多支持50个关联项。 **取值范围**： 0~2048个字符。 **默认取值**： 不涉及。
    * labels  **参数解释**： 工作项标签。数组元素为LabelEntity对象。 **约束限制**： 不涉及。 **取值范围**： 0~50个元素，每个元素为LabelEntity对象。 **默认取值**： 不涉及。
    * customFields  **参数解释**： 工作项自定义字段映射，用户添加的系统字段也在此列，格式为{\"code\":\"字段code\",\"value\":\"字段值\"}。数组元素为FieldCodeValuePair对象。 **约束限制**： 不涉及。 **取值范围**： 0~200个元素，每个元素为FieldCodeValuePair对象。 **默认取值**： 不涉及。
    * ir2feature  **参数解释**： IR和SF的关联字段。 **约束限制**： IR可以填写该字段。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * needBreak  **参数解释**： 工作项是否需要分解。 **约束限制**： 仅可以分解的工作项类型有此字段。 **取值范围**： - yes：需要分解 - no：不需要分解 **默认取值**： 不涉及。
    * baseline  **参数解释**： 工作项基线状态。 **约束限制**： 不涉及。 **取值范围**： - null：未基线 - baselined：已基线 - baseline-reviewing：基线评审中 **默认取值**： 不涉及。
    * priority  **参数解释**： 工作项优先级，部分工作项有此字段。 **约束限制**： 不涉及。 **取值范围**： - 低：低优先级。 - 中：中优先级。 - 高：高优先级。 **默认取值**： 不涉及。
    * relatedNetworkSecurity  **参数解释**： 是否涉及网络安全。 **约束限制**： 预设字段中，仅研发需求类型的工作项有此字段。 **取值范围**： - yes：涉及网络安全。 - no：不涉及网络安全。 **默认取值**： 不涉及。
    * businessDomain  **参数解释**： 领域字段。 **约束限制**： 不涉及。 **取值范围**： - software - soft-hardware - hardware - 性能 - 功能 - 运维 - 运营 - 用户体验 - 隐私保护 - 合规 - 韧性(可靠性/可用性) - 韧性(危险检测与相应恢复) - 透明 - 无害 - 安全 - API - 成本 - 可维护性 - 其他DFX - 可用性 - others **默认取值**： 不涉及。
    * planPi  **参数解释**： 工作项发布计划ID。通过[发布/迭代计划列表查询](ListPlan.xml)接口查询计划列表，返回参数中PlanVO里面的category=PI的对象的**id**字段就是迭代计划的ID。 **约束限制**： 不涉及。 **取值范围**： 18~19个字符的数字字符串。 **默认取值**： 不涉及。
    * planIteration  **参数解释**： 工作项完成的迭代计划ID，在Bug中为修复迭代计划ID。通过[发布/迭代计划列表查询](ListPlan.xml)接口查询计划列表，返回参数中PlanVO里面的category=Iteration的对象的**id**字段就是迭代计划的ID。 **约束限制**： 18~19个字符的数字字符串。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * noBreakReason  **参数解释**： 无需分解原因。 **约束限制**： need_break字段值为“no”时有此字段。 **取值范围**： 0~512个字符。 **默认取值**： 不涉及。
    * submittedBy  **参数解释**： 工作项提出人。数组元素为UserUpdateAttribute对象。 **约束限制**： 不涉及。
    * ir2rr  **参数解释**： IR关联的RR ID，可以通过[查询工作项列表](ListIpdProjectIssues.xml)或者[查询树状工作项](ShowIpdIssueTree.xml)接口获取，响应消息体中的**id**字段的值就是工作项ID。 **约束限制**： 多个关联项ID使用英文逗号分隔。 **取值范围**： 0~1024个字符。 **默认取值**： 不涉及。
    * featureSet  **参数解释**： 特性集ID，可以通过[查询特性集](ShowBaselineSnapshots.xml)接口获取，响应消息体中的**id**字段的值就是特性集ID。 **约束限制**： 不涉及。 **取值范围**： 18~19个字符的数字字符串。 **默认取值**： 不涉及。
    * expectedRepairDate  **参数解释**： 期望修复时间。预设字段中，仅Bug有此字段，unix时间戳，单位：毫秒。 **约束限制**： 不涉及。 **取值范围**： 11~19个字符。 **默认取值**： 不涉及。
    * foundPi  **参数解释**： 缺陷发现发布计划ID，预设字段中，仅Bug有此字段。通过[发布/迭代计划列表查询](ListPlan.xml)接口查询计划列表，返回参数中PlanVO里面的category=PI的对象的**id**字段就是迭代计划的ID。 **约束限制**： 不涉及。 **取值范围**： 18~19个字符的数字字符串。 **默认取值**： 不涉及。
    * foundIteration  **参数解释**： 缺陷发现迭代计划ID，预设字段中，仅Bug有此字段。通过[发布/迭代计划列表查询](ListPlan.xml)接口查询计划列表，返回参数中PlanVO里面的category=Iteration的对象的**id**字段就是迭代计划的ID。 **约束限制**： 不涉及。 **取值范围**： 18~19个字符的数字字符串。 **默认取值**： 不涉及。
    * reasonAnalysis  **参数解释**： 分析原因。 **约束限制**： 预设字段中，仅Bug有此字段。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    * repairSolution  **参数解释**： 修复方案。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    * testReport  **参数解释**： 测试报告。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    * sysNoRepairReason  **参数解释**： 无需修复原因。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    * sysActivationReason  **参数解释**： 激活原因。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    * sysReturnReason  **参数解释**： 退回原因。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    * testFailuresTimes  **参数解释**： 回归不通过次数。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~999999。 **默认取值**： 不涉及。
    * closeType  **参数解释**： 关闭类型。 **约束限制**： 不涉及。 **取值范围**： - problem_solved：问题解决关闭 - problem_to_requirement：问题转需求关闭 - duplicate_problem：重复问题关闭 - not_a_problem：非问题关闭 **默认取值**： 不涉及。
    * securityLevel  **参数解释**： 密级。低密级权限者不能访问高密级的工作项。可以通过[查询字段列表](ListIpdProjectFields.xml)接口获取，响应消息体中密级的**option**字段的值就是密级字段的可选值。 **约束限制**： 仅在涉密环境（SM）下存在此字段，非涉密环境下无此字段。涉密环境下必填。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * planOwner  planOwner
    * doingOwner  doingOwner
    * deliveredOwner  deliveredOwner
    * checkingOwner  checkingOwner
    * testOwner  testOwner
    * developOwner  developOwner
    * processingOwner  processingOwner
    * fixedOwner  fixedOwner
    * researchanddevelopOwner  researchanddevelopOwner
    * analyseOwner  analyseOwner
    * planStartDate  **参数解释**： 计划开始时间。工作项的计划启动日期，用于项目进度管理和排期。 **约束限制**： 不涉及。 **取值范围**： 11~19个字符的时间戳字符串，单位为毫秒（ms）。 **默认取值**： 不涉及。
    * expectDeliveryTime  **参数解释**： 期望完成时间。工作项的预期交付日期，用于跟踪工作项是否按期完成。 **约束限制**： 不涉及。 **取值范围**： 11~19个字符的时间戳字符串，单位为毫秒（ms）。 **默认取值**： 不涉及。
    * planTestEndDate  **参数解释**： 计划测试结束时间。Bug类型工作项的计划测试完成日期，用于跟踪Bug修复后的测试进度。 **约束限制**： 仅对Bug类型工作项生效，非Bug类型忽略此字段。 **取值范围**： 11~19个字符的时间戳字符串，单位为毫秒（ms）。 **默认取值**： 不涉及。
    * severity  **参数解释**： 严重程度。Bug类型工作项的严重级别，用于评估Bug的影响范围和修复优先级。 **约束限制**： 仅对Bug类型工作项生效，非Bug类型忽略此字段。 **取值范围**： - 致命：系统崩溃、数据丢失等严重影响 - 严重：主要功能无法使用 - 一般：次要功能异常，有替代方案 - 提示：界面优化、建议性问题 **默认取值**： 不涉及。
    * promised  **参数解释**： 是否承诺。RR（原始需求）类型工作项的承诺状态标识，用于标记需求是否已承诺交付。 **约束限制**： 仅对RR类型工作项生效，非RR类型忽略此字段。 **取值范围**： - yes：已承诺 - no：未承诺 **默认取值**： 不涉及。
    * recipient  **参数解释**： 承接人。RR（原始需求）类型工作项的需求承接责任人，负责需求的分析和转化。 **约束限制**： 仅对RR类型工作项生效，非RR类型忽略此字段。
    * sysNoDevelopReason  **参数解释**： 无需研发原因。RR（原始需求）类型工作项不需要进行研发的原因说明。 **约束限制**： 仅对RR类型工作项生效，非RR类型忽略此字段。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    * valFeature  **参数解释**： 价值特性。SF/FE类型工作项对应的业务价值特性描述，用于关联业务价值和技术实现。 **约束限制**： 仅对SF/FE类型工作项生效，其他类型忽略此字段。 **取值范围**： - yes：是 - no：否 **默认取值**： 不涉及。
    * functionScene  **参数解释**： 功能场景。SF/FE类型工作项的功能应用场景描述，用于说明特性的使用场景和用户故事。 **约束限制**： 仅对SF/FE类型工作项生效，其他类型忽略此字段。 **取值范围**： 0~512个字符。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'category' => 'string',
            'description' => 'string',
            'parentId' => 'string',
            'status' => 'string',
            'assignee' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute',
            'assignedCc' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute[]',
            'planEndDate' => 'string',
            'workload' => 'string',
            'link' => 'string',
            'labels' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\LabelEntity[]',
            'customFields' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\FieldCodeValuePair[]',
            'ir2feature' => 'string',
            'needBreak' => 'string',
            'baseline' => 'string',
            'priority' => 'string',
            'relatedNetworkSecurity' => 'string',
            'businessDomain' => 'string',
            'planPi' => 'string',
            'planIteration' => 'string',
            'noBreakReason' => 'string',
            'submittedBy' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute[]',
            'ir2rr' => 'string',
            'featureSet' => 'string',
            'expectedRepairDate' => 'string',
            'foundPi' => 'string',
            'foundIteration' => 'string',
            'reasonAnalysis' => 'string',
            'repairSolution' => 'string',
            'testReport' => 'string',
            'sysNoRepairReason' => 'string',
            'sysActivationReason' => 'string',
            'sysReturnReason' => 'string',
            'testFailuresTimes' => 'int',
            'closeType' => 'string',
            'securityLevel' => 'string',
            'planOwner' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute',
            'doingOwner' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute',
            'deliveredOwner' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute',
            'checkingOwner' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute',
            'testOwner' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute',
            'developOwner' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute',
            'processingOwner' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute',
            'fixedOwner' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute',
            'researchanddevelopOwner' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute',
            'analyseOwner' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute',
            'planStartDate' => 'string',
            'expectDeliveryTime' => 'string',
            'planTestEndDate' => 'string',
            'severity' => 'string',
            'promised' => 'string',
            'recipient' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute[]',
            'sysNoDevelopReason' => 'string',
            'valFeature' => 'string',
            'functionScene' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * category  **参数解释**： 工作项类型编码。编辑工作项时，此字段必填、值为当前工作项正确的工作项类型，但不会更新此字段。 **约束限制**： 不涉及。 **取值范围**： 支持多种工作项类型，使用英文逗号分隔。 - 系统设备类项目：RR、SF、IR、SR、AR、Task、Bug - 独立软件类项目：RR、SF、IR、US、Task、Bug - 云服务类项目：RR、Epic、FE、US、Task、Bug **默认取值**： 不涉及。
    * description  **参数解释**： 工作项描述字段，可通过[查询树状工作项](ShowIpdIssueTree.xml)接口获取，响应消息体中的**description**字段的值就是工作项描述字段。 **约束限制**： 不涉及。 **取值范围**： 1~500000个字符。 **默认取值**： 不涉及。
    * parentId  **参数解释**： 父工作项ID，可通过[查询树状工作项](ShowIpdIssueTree.xml)接口获取，响应消息体中的**parent_id**字段的值就是父工作项ID。 **约束限制**： 不涉及。 **取值范围**： 18~19个字符的数字字符串。 **默认取值**： 不涉及。
    * status  **参数解释**： 工作项状态code。可通过[查询工作项状态](ListIssueStatues.xml)接口获取，响应消息体中的**code**字段的值就是工作项状态code。 **约束限制**： 不涉及。 **取值范围**： 2~32个字符。 **默认取值**： 不涉及。
    * assignee  assignee
    * assignedCc  **参数解释**： 工作项抄送人，支持多个抄送人。数组元素为UserUpdateAttribute对象。 **约束限制**： 同一工作项最多支持50个抄送人。
    * planEndDate  **参数解释**： 工作项计划结束日期，unix时间戳，单位：毫秒。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * workload  **参数解释**： 工作项计划工时。 **约束限制**： 保留一位小数。 **取值范围**： 0~999999999.9。 **默认取值**： 不涉及。
    * link  **参数解释**： 工作项关联项ID。 **约束限制**： 多个关联项用英文逗号分隔，同一工作项最多支持50个关联项。 **取值范围**： 0~2048个字符。 **默认取值**： 不涉及。
    * labels  **参数解释**： 工作项标签。数组元素为LabelEntity对象。 **约束限制**： 不涉及。 **取值范围**： 0~50个元素，每个元素为LabelEntity对象。 **默认取值**： 不涉及。
    * customFields  **参数解释**： 工作项自定义字段映射，用户添加的系统字段也在此列，格式为{\"code\":\"字段code\",\"value\":\"字段值\"}。数组元素为FieldCodeValuePair对象。 **约束限制**： 不涉及。 **取值范围**： 0~200个元素，每个元素为FieldCodeValuePair对象。 **默认取值**： 不涉及。
    * ir2feature  **参数解释**： IR和SF的关联字段。 **约束限制**： IR可以填写该字段。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * needBreak  **参数解释**： 工作项是否需要分解。 **约束限制**： 仅可以分解的工作项类型有此字段。 **取值范围**： - yes：需要分解 - no：不需要分解 **默认取值**： 不涉及。
    * baseline  **参数解释**： 工作项基线状态。 **约束限制**： 不涉及。 **取值范围**： - null：未基线 - baselined：已基线 - baseline-reviewing：基线评审中 **默认取值**： 不涉及。
    * priority  **参数解释**： 工作项优先级，部分工作项有此字段。 **约束限制**： 不涉及。 **取值范围**： - 低：低优先级。 - 中：中优先级。 - 高：高优先级。 **默认取值**： 不涉及。
    * relatedNetworkSecurity  **参数解释**： 是否涉及网络安全。 **约束限制**： 预设字段中，仅研发需求类型的工作项有此字段。 **取值范围**： - yes：涉及网络安全。 - no：不涉及网络安全。 **默认取值**： 不涉及。
    * businessDomain  **参数解释**： 领域字段。 **约束限制**： 不涉及。 **取值范围**： - software - soft-hardware - hardware - 性能 - 功能 - 运维 - 运营 - 用户体验 - 隐私保护 - 合规 - 韧性(可靠性/可用性) - 韧性(危险检测与相应恢复) - 透明 - 无害 - 安全 - API - 成本 - 可维护性 - 其他DFX - 可用性 - others **默认取值**： 不涉及。
    * planPi  **参数解释**： 工作项发布计划ID。通过[发布/迭代计划列表查询](ListPlan.xml)接口查询计划列表，返回参数中PlanVO里面的category=PI的对象的**id**字段就是迭代计划的ID。 **约束限制**： 不涉及。 **取值范围**： 18~19个字符的数字字符串。 **默认取值**： 不涉及。
    * planIteration  **参数解释**： 工作项完成的迭代计划ID，在Bug中为修复迭代计划ID。通过[发布/迭代计划列表查询](ListPlan.xml)接口查询计划列表，返回参数中PlanVO里面的category=Iteration的对象的**id**字段就是迭代计划的ID。 **约束限制**： 18~19个字符的数字字符串。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * noBreakReason  **参数解释**： 无需分解原因。 **约束限制**： need_break字段值为“no”时有此字段。 **取值范围**： 0~512个字符。 **默认取值**： 不涉及。
    * submittedBy  **参数解释**： 工作项提出人。数组元素为UserUpdateAttribute对象。 **约束限制**： 不涉及。
    * ir2rr  **参数解释**： IR关联的RR ID，可以通过[查询工作项列表](ListIpdProjectIssues.xml)或者[查询树状工作项](ShowIpdIssueTree.xml)接口获取，响应消息体中的**id**字段的值就是工作项ID。 **约束限制**： 多个关联项ID使用英文逗号分隔。 **取值范围**： 0~1024个字符。 **默认取值**： 不涉及。
    * featureSet  **参数解释**： 特性集ID，可以通过[查询特性集](ShowBaselineSnapshots.xml)接口获取，响应消息体中的**id**字段的值就是特性集ID。 **约束限制**： 不涉及。 **取值范围**： 18~19个字符的数字字符串。 **默认取值**： 不涉及。
    * expectedRepairDate  **参数解释**： 期望修复时间。预设字段中，仅Bug有此字段，unix时间戳，单位：毫秒。 **约束限制**： 不涉及。 **取值范围**： 11~19个字符。 **默认取值**： 不涉及。
    * foundPi  **参数解释**： 缺陷发现发布计划ID，预设字段中，仅Bug有此字段。通过[发布/迭代计划列表查询](ListPlan.xml)接口查询计划列表，返回参数中PlanVO里面的category=PI的对象的**id**字段就是迭代计划的ID。 **约束限制**： 不涉及。 **取值范围**： 18~19个字符的数字字符串。 **默认取值**： 不涉及。
    * foundIteration  **参数解释**： 缺陷发现迭代计划ID，预设字段中，仅Bug有此字段。通过[发布/迭代计划列表查询](ListPlan.xml)接口查询计划列表，返回参数中PlanVO里面的category=Iteration的对象的**id**字段就是迭代计划的ID。 **约束限制**： 不涉及。 **取值范围**： 18~19个字符的数字字符串。 **默认取值**： 不涉及。
    * reasonAnalysis  **参数解释**： 分析原因。 **约束限制**： 预设字段中，仅Bug有此字段。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    * repairSolution  **参数解释**： 修复方案。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    * testReport  **参数解释**： 测试报告。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    * sysNoRepairReason  **参数解释**： 无需修复原因。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    * sysActivationReason  **参数解释**： 激活原因。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    * sysReturnReason  **参数解释**： 退回原因。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    * testFailuresTimes  **参数解释**： 回归不通过次数。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~999999。 **默认取值**： 不涉及。
    * closeType  **参数解释**： 关闭类型。 **约束限制**： 不涉及。 **取值范围**： - problem_solved：问题解决关闭 - problem_to_requirement：问题转需求关闭 - duplicate_problem：重复问题关闭 - not_a_problem：非问题关闭 **默认取值**： 不涉及。
    * securityLevel  **参数解释**： 密级。低密级权限者不能访问高密级的工作项。可以通过[查询字段列表](ListIpdProjectFields.xml)接口获取，响应消息体中密级的**option**字段的值就是密级字段的可选值。 **约束限制**： 仅在涉密环境（SM）下存在此字段，非涉密环境下无此字段。涉密环境下必填。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * planOwner  planOwner
    * doingOwner  doingOwner
    * deliveredOwner  deliveredOwner
    * checkingOwner  checkingOwner
    * testOwner  testOwner
    * developOwner  developOwner
    * processingOwner  processingOwner
    * fixedOwner  fixedOwner
    * researchanddevelopOwner  researchanddevelopOwner
    * analyseOwner  analyseOwner
    * planStartDate  **参数解释**： 计划开始时间。工作项的计划启动日期，用于项目进度管理和排期。 **约束限制**： 不涉及。 **取值范围**： 11~19个字符的时间戳字符串，单位为毫秒（ms）。 **默认取值**： 不涉及。
    * expectDeliveryTime  **参数解释**： 期望完成时间。工作项的预期交付日期，用于跟踪工作项是否按期完成。 **约束限制**： 不涉及。 **取值范围**： 11~19个字符的时间戳字符串，单位为毫秒（ms）。 **默认取值**： 不涉及。
    * planTestEndDate  **参数解释**： 计划测试结束时间。Bug类型工作项的计划测试完成日期，用于跟踪Bug修复后的测试进度。 **约束限制**： 仅对Bug类型工作项生效，非Bug类型忽略此字段。 **取值范围**： 11~19个字符的时间戳字符串，单位为毫秒（ms）。 **默认取值**： 不涉及。
    * severity  **参数解释**： 严重程度。Bug类型工作项的严重级别，用于评估Bug的影响范围和修复优先级。 **约束限制**： 仅对Bug类型工作项生效，非Bug类型忽略此字段。 **取值范围**： - 致命：系统崩溃、数据丢失等严重影响 - 严重：主要功能无法使用 - 一般：次要功能异常，有替代方案 - 提示：界面优化、建议性问题 **默认取值**： 不涉及。
    * promised  **参数解释**： 是否承诺。RR（原始需求）类型工作项的承诺状态标识，用于标记需求是否已承诺交付。 **约束限制**： 仅对RR类型工作项生效，非RR类型忽略此字段。 **取值范围**： - yes：已承诺 - no：未承诺 **默认取值**： 不涉及。
    * recipient  **参数解释**： 承接人。RR（原始需求）类型工作项的需求承接责任人，负责需求的分析和转化。 **约束限制**： 仅对RR类型工作项生效，非RR类型忽略此字段。
    * sysNoDevelopReason  **参数解释**： 无需研发原因。RR（原始需求）类型工作项不需要进行研发的原因说明。 **约束限制**： 仅对RR类型工作项生效，非RR类型忽略此字段。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    * valFeature  **参数解释**： 价值特性。SF/FE类型工作项对应的业务价值特性描述，用于关联业务价值和技术实现。 **约束限制**： 仅对SF/FE类型工作项生效，其他类型忽略此字段。 **取值范围**： - yes：是 - no：否 **默认取值**： 不涉及。
    * functionScene  **参数解释**： 功能场景。SF/FE类型工作项的功能应用场景描述，用于说明特性的使用场景和用户故事。 **约束限制**： 仅对SF/FE类型工作项生效，其他类型忽略此字段。 **取值范围**： 0~512个字符。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'category' => null,
        'description' => null,
        'parentId' => null,
        'status' => null,
        'assignee' => null,
        'assignedCc' => null,
        'planEndDate' => null,
        'workload' => null,
        'link' => null,
        'labels' => null,
        'customFields' => null,
        'ir2feature' => null,
        'needBreak' => null,
        'baseline' => null,
        'priority' => null,
        'relatedNetworkSecurity' => null,
        'businessDomain' => null,
        'planPi' => null,
        'planIteration' => null,
        'noBreakReason' => null,
        'submittedBy' => null,
        'ir2rr' => null,
        'featureSet' => null,
        'expectedRepairDate' => null,
        'foundPi' => null,
        'foundIteration' => null,
        'reasonAnalysis' => null,
        'repairSolution' => null,
        'testReport' => null,
        'sysNoRepairReason' => null,
        'sysActivationReason' => null,
        'sysReturnReason' => null,
        'testFailuresTimes' => 'int32',
        'closeType' => null,
        'securityLevel' => null,
        'planOwner' => null,
        'doingOwner' => null,
        'deliveredOwner' => null,
        'checkingOwner' => null,
        'testOwner' => null,
        'developOwner' => null,
        'processingOwner' => null,
        'fixedOwner' => null,
        'researchanddevelopOwner' => null,
        'analyseOwner' => null,
        'planStartDate' => null,
        'expectDeliveryTime' => null,
        'planTestEndDate' => null,
        'severity' => null,
        'promised' => null,
        'recipient' => null,
        'sysNoDevelopReason' => null,
        'valFeature' => null,
        'functionScene' => null
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
    * category  **参数解释**： 工作项类型编码。编辑工作项时，此字段必填、值为当前工作项正确的工作项类型，但不会更新此字段。 **约束限制**： 不涉及。 **取值范围**： 支持多种工作项类型，使用英文逗号分隔。 - 系统设备类项目：RR、SF、IR、SR、AR、Task、Bug - 独立软件类项目：RR、SF、IR、US、Task、Bug - 云服务类项目：RR、Epic、FE、US、Task、Bug **默认取值**： 不涉及。
    * description  **参数解释**： 工作项描述字段，可通过[查询树状工作项](ShowIpdIssueTree.xml)接口获取，响应消息体中的**description**字段的值就是工作项描述字段。 **约束限制**： 不涉及。 **取值范围**： 1~500000个字符。 **默认取值**： 不涉及。
    * parentId  **参数解释**： 父工作项ID，可通过[查询树状工作项](ShowIpdIssueTree.xml)接口获取，响应消息体中的**parent_id**字段的值就是父工作项ID。 **约束限制**： 不涉及。 **取值范围**： 18~19个字符的数字字符串。 **默认取值**： 不涉及。
    * status  **参数解释**： 工作项状态code。可通过[查询工作项状态](ListIssueStatues.xml)接口获取，响应消息体中的**code**字段的值就是工作项状态code。 **约束限制**： 不涉及。 **取值范围**： 2~32个字符。 **默认取值**： 不涉及。
    * assignee  assignee
    * assignedCc  **参数解释**： 工作项抄送人，支持多个抄送人。数组元素为UserUpdateAttribute对象。 **约束限制**： 同一工作项最多支持50个抄送人。
    * planEndDate  **参数解释**： 工作项计划结束日期，unix时间戳，单位：毫秒。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * workload  **参数解释**： 工作项计划工时。 **约束限制**： 保留一位小数。 **取值范围**： 0~999999999.9。 **默认取值**： 不涉及。
    * link  **参数解释**： 工作项关联项ID。 **约束限制**： 多个关联项用英文逗号分隔，同一工作项最多支持50个关联项。 **取值范围**： 0~2048个字符。 **默认取值**： 不涉及。
    * labels  **参数解释**： 工作项标签。数组元素为LabelEntity对象。 **约束限制**： 不涉及。 **取值范围**： 0~50个元素，每个元素为LabelEntity对象。 **默认取值**： 不涉及。
    * customFields  **参数解释**： 工作项自定义字段映射，用户添加的系统字段也在此列，格式为{\"code\":\"字段code\",\"value\":\"字段值\"}。数组元素为FieldCodeValuePair对象。 **约束限制**： 不涉及。 **取值范围**： 0~200个元素，每个元素为FieldCodeValuePair对象。 **默认取值**： 不涉及。
    * ir2feature  **参数解释**： IR和SF的关联字段。 **约束限制**： IR可以填写该字段。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * needBreak  **参数解释**： 工作项是否需要分解。 **约束限制**： 仅可以分解的工作项类型有此字段。 **取值范围**： - yes：需要分解 - no：不需要分解 **默认取值**： 不涉及。
    * baseline  **参数解释**： 工作项基线状态。 **约束限制**： 不涉及。 **取值范围**： - null：未基线 - baselined：已基线 - baseline-reviewing：基线评审中 **默认取值**： 不涉及。
    * priority  **参数解释**： 工作项优先级，部分工作项有此字段。 **约束限制**： 不涉及。 **取值范围**： - 低：低优先级。 - 中：中优先级。 - 高：高优先级。 **默认取值**： 不涉及。
    * relatedNetworkSecurity  **参数解释**： 是否涉及网络安全。 **约束限制**： 预设字段中，仅研发需求类型的工作项有此字段。 **取值范围**： - yes：涉及网络安全。 - no：不涉及网络安全。 **默认取值**： 不涉及。
    * businessDomain  **参数解释**： 领域字段。 **约束限制**： 不涉及。 **取值范围**： - software - soft-hardware - hardware - 性能 - 功能 - 运维 - 运营 - 用户体验 - 隐私保护 - 合规 - 韧性(可靠性/可用性) - 韧性(危险检测与相应恢复) - 透明 - 无害 - 安全 - API - 成本 - 可维护性 - 其他DFX - 可用性 - others **默认取值**： 不涉及。
    * planPi  **参数解释**： 工作项发布计划ID。通过[发布/迭代计划列表查询](ListPlan.xml)接口查询计划列表，返回参数中PlanVO里面的category=PI的对象的**id**字段就是迭代计划的ID。 **约束限制**： 不涉及。 **取值范围**： 18~19个字符的数字字符串。 **默认取值**： 不涉及。
    * planIteration  **参数解释**： 工作项完成的迭代计划ID，在Bug中为修复迭代计划ID。通过[发布/迭代计划列表查询](ListPlan.xml)接口查询计划列表，返回参数中PlanVO里面的category=Iteration的对象的**id**字段就是迭代计划的ID。 **约束限制**： 18~19个字符的数字字符串。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * noBreakReason  **参数解释**： 无需分解原因。 **约束限制**： need_break字段值为“no”时有此字段。 **取值范围**： 0~512个字符。 **默认取值**： 不涉及。
    * submittedBy  **参数解释**： 工作项提出人。数组元素为UserUpdateAttribute对象。 **约束限制**： 不涉及。
    * ir2rr  **参数解释**： IR关联的RR ID，可以通过[查询工作项列表](ListIpdProjectIssues.xml)或者[查询树状工作项](ShowIpdIssueTree.xml)接口获取，响应消息体中的**id**字段的值就是工作项ID。 **约束限制**： 多个关联项ID使用英文逗号分隔。 **取值范围**： 0~1024个字符。 **默认取值**： 不涉及。
    * featureSet  **参数解释**： 特性集ID，可以通过[查询特性集](ShowBaselineSnapshots.xml)接口获取，响应消息体中的**id**字段的值就是特性集ID。 **约束限制**： 不涉及。 **取值范围**： 18~19个字符的数字字符串。 **默认取值**： 不涉及。
    * expectedRepairDate  **参数解释**： 期望修复时间。预设字段中，仅Bug有此字段，unix时间戳，单位：毫秒。 **约束限制**： 不涉及。 **取值范围**： 11~19个字符。 **默认取值**： 不涉及。
    * foundPi  **参数解释**： 缺陷发现发布计划ID，预设字段中，仅Bug有此字段。通过[发布/迭代计划列表查询](ListPlan.xml)接口查询计划列表，返回参数中PlanVO里面的category=PI的对象的**id**字段就是迭代计划的ID。 **约束限制**： 不涉及。 **取值范围**： 18~19个字符的数字字符串。 **默认取值**： 不涉及。
    * foundIteration  **参数解释**： 缺陷发现迭代计划ID，预设字段中，仅Bug有此字段。通过[发布/迭代计划列表查询](ListPlan.xml)接口查询计划列表，返回参数中PlanVO里面的category=Iteration的对象的**id**字段就是迭代计划的ID。 **约束限制**： 不涉及。 **取值范围**： 18~19个字符的数字字符串。 **默认取值**： 不涉及。
    * reasonAnalysis  **参数解释**： 分析原因。 **约束限制**： 预设字段中，仅Bug有此字段。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    * repairSolution  **参数解释**： 修复方案。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    * testReport  **参数解释**： 测试报告。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    * sysNoRepairReason  **参数解释**： 无需修复原因。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    * sysActivationReason  **参数解释**： 激活原因。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    * sysReturnReason  **参数解释**： 退回原因。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    * testFailuresTimes  **参数解释**： 回归不通过次数。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~999999。 **默认取值**： 不涉及。
    * closeType  **参数解释**： 关闭类型。 **约束限制**： 不涉及。 **取值范围**： - problem_solved：问题解决关闭 - problem_to_requirement：问题转需求关闭 - duplicate_problem：重复问题关闭 - not_a_problem：非问题关闭 **默认取值**： 不涉及。
    * securityLevel  **参数解释**： 密级。低密级权限者不能访问高密级的工作项。可以通过[查询字段列表](ListIpdProjectFields.xml)接口获取，响应消息体中密级的**option**字段的值就是密级字段的可选值。 **约束限制**： 仅在涉密环境（SM）下存在此字段，非涉密环境下无此字段。涉密环境下必填。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * planOwner  planOwner
    * doingOwner  doingOwner
    * deliveredOwner  deliveredOwner
    * checkingOwner  checkingOwner
    * testOwner  testOwner
    * developOwner  developOwner
    * processingOwner  processingOwner
    * fixedOwner  fixedOwner
    * researchanddevelopOwner  researchanddevelopOwner
    * analyseOwner  analyseOwner
    * planStartDate  **参数解释**： 计划开始时间。工作项的计划启动日期，用于项目进度管理和排期。 **约束限制**： 不涉及。 **取值范围**： 11~19个字符的时间戳字符串，单位为毫秒（ms）。 **默认取值**： 不涉及。
    * expectDeliveryTime  **参数解释**： 期望完成时间。工作项的预期交付日期，用于跟踪工作项是否按期完成。 **约束限制**： 不涉及。 **取值范围**： 11~19个字符的时间戳字符串，单位为毫秒（ms）。 **默认取值**： 不涉及。
    * planTestEndDate  **参数解释**： 计划测试结束时间。Bug类型工作项的计划测试完成日期，用于跟踪Bug修复后的测试进度。 **约束限制**： 仅对Bug类型工作项生效，非Bug类型忽略此字段。 **取值范围**： 11~19个字符的时间戳字符串，单位为毫秒（ms）。 **默认取值**： 不涉及。
    * severity  **参数解释**： 严重程度。Bug类型工作项的严重级别，用于评估Bug的影响范围和修复优先级。 **约束限制**： 仅对Bug类型工作项生效，非Bug类型忽略此字段。 **取值范围**： - 致命：系统崩溃、数据丢失等严重影响 - 严重：主要功能无法使用 - 一般：次要功能异常，有替代方案 - 提示：界面优化、建议性问题 **默认取值**： 不涉及。
    * promised  **参数解释**： 是否承诺。RR（原始需求）类型工作项的承诺状态标识，用于标记需求是否已承诺交付。 **约束限制**： 仅对RR类型工作项生效，非RR类型忽略此字段。 **取值范围**： - yes：已承诺 - no：未承诺 **默认取值**： 不涉及。
    * recipient  **参数解释**： 承接人。RR（原始需求）类型工作项的需求承接责任人，负责需求的分析和转化。 **约束限制**： 仅对RR类型工作项生效，非RR类型忽略此字段。
    * sysNoDevelopReason  **参数解释**： 无需研发原因。RR（原始需求）类型工作项不需要进行研发的原因说明。 **约束限制**： 仅对RR类型工作项生效，非RR类型忽略此字段。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    * valFeature  **参数解释**： 价值特性。SF/FE类型工作项对应的业务价值特性描述，用于关联业务价值和技术实现。 **约束限制**： 仅对SF/FE类型工作项生效，其他类型忽略此字段。 **取值范围**： - yes：是 - no：否 **默认取值**： 不涉及。
    * functionScene  **参数解释**： 功能场景。SF/FE类型工作项的功能应用场景描述，用于说明特性的使用场景和用户故事。 **约束限制**： 仅对SF/FE类型工作项生效，其他类型忽略此字段。 **取值范围**： 0~512个字符。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'category' => 'category',
            'description' => 'description',
            'parentId' => 'parent_id',
            'status' => 'status',
            'assignee' => 'assignee',
            'assignedCc' => 'assigned_cc',
            'planEndDate' => 'plan_end_date',
            'workload' => 'workload',
            'link' => 'link',
            'labels' => 'labels',
            'customFields' => 'custom_fields',
            'ir2feature' => 'ir2feature',
            'needBreak' => 'need_break',
            'baseline' => 'baseline',
            'priority' => 'priority',
            'relatedNetworkSecurity' => 'related_network_security',
            'businessDomain' => 'business_domain',
            'planPi' => 'plan_pi',
            'planIteration' => 'plan_iteration',
            'noBreakReason' => 'no_break_reason',
            'submittedBy' => 'submitted_by',
            'ir2rr' => 'ir2rr',
            'featureSet' => 'feature_set',
            'expectedRepairDate' => 'expected_repair_date',
            'foundPi' => 'found_pi',
            'foundIteration' => 'found_iteration',
            'reasonAnalysis' => 'reason_analysis',
            'repairSolution' => 'repair_solution',
            'testReport' => 'test_report',
            'sysNoRepairReason' => 'sys_no_repair_reason',
            'sysActivationReason' => 'sys_activation_reason',
            'sysReturnReason' => 'sys_return_reason',
            'testFailuresTimes' => 'test_failures_times',
            'closeType' => 'close_type',
            'securityLevel' => 'security_level',
            'planOwner' => 'plan_owner',
            'doingOwner' => 'doing_owner',
            'deliveredOwner' => 'delivered_owner',
            'checkingOwner' => 'checking_owner',
            'testOwner' => 'test_owner',
            'developOwner' => 'develop_owner',
            'processingOwner' => 'processing_owner',
            'fixedOwner' => 'fixed_owner',
            'researchanddevelopOwner' => 'researchanddevelop_owner',
            'analyseOwner' => 'analyse_owner',
            'planStartDate' => 'plan_start_date',
            'expectDeliveryTime' => 'expect_delivery_time',
            'planTestEndDate' => 'plan_test_end_date',
            'severity' => 'severity',
            'promised' => 'promised',
            'recipient' => 'recipient',
            'sysNoDevelopReason' => 'sys_no_develop_reason',
            'valFeature' => 'val_feature',
            'functionScene' => 'function_scene'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * category  **参数解释**： 工作项类型编码。编辑工作项时，此字段必填、值为当前工作项正确的工作项类型，但不会更新此字段。 **约束限制**： 不涉及。 **取值范围**： 支持多种工作项类型，使用英文逗号分隔。 - 系统设备类项目：RR、SF、IR、SR、AR、Task、Bug - 独立软件类项目：RR、SF、IR、US、Task、Bug - 云服务类项目：RR、Epic、FE、US、Task、Bug **默认取值**： 不涉及。
    * description  **参数解释**： 工作项描述字段，可通过[查询树状工作项](ShowIpdIssueTree.xml)接口获取，响应消息体中的**description**字段的值就是工作项描述字段。 **约束限制**： 不涉及。 **取值范围**： 1~500000个字符。 **默认取值**： 不涉及。
    * parentId  **参数解释**： 父工作项ID，可通过[查询树状工作项](ShowIpdIssueTree.xml)接口获取，响应消息体中的**parent_id**字段的值就是父工作项ID。 **约束限制**： 不涉及。 **取值范围**： 18~19个字符的数字字符串。 **默认取值**： 不涉及。
    * status  **参数解释**： 工作项状态code。可通过[查询工作项状态](ListIssueStatues.xml)接口获取，响应消息体中的**code**字段的值就是工作项状态code。 **约束限制**： 不涉及。 **取值范围**： 2~32个字符。 **默认取值**： 不涉及。
    * assignee  assignee
    * assignedCc  **参数解释**： 工作项抄送人，支持多个抄送人。数组元素为UserUpdateAttribute对象。 **约束限制**： 同一工作项最多支持50个抄送人。
    * planEndDate  **参数解释**： 工作项计划结束日期，unix时间戳，单位：毫秒。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * workload  **参数解释**： 工作项计划工时。 **约束限制**： 保留一位小数。 **取值范围**： 0~999999999.9。 **默认取值**： 不涉及。
    * link  **参数解释**： 工作项关联项ID。 **约束限制**： 多个关联项用英文逗号分隔，同一工作项最多支持50个关联项。 **取值范围**： 0~2048个字符。 **默认取值**： 不涉及。
    * labels  **参数解释**： 工作项标签。数组元素为LabelEntity对象。 **约束限制**： 不涉及。 **取值范围**： 0~50个元素，每个元素为LabelEntity对象。 **默认取值**： 不涉及。
    * customFields  **参数解释**： 工作项自定义字段映射，用户添加的系统字段也在此列，格式为{\"code\":\"字段code\",\"value\":\"字段值\"}。数组元素为FieldCodeValuePair对象。 **约束限制**： 不涉及。 **取值范围**： 0~200个元素，每个元素为FieldCodeValuePair对象。 **默认取值**： 不涉及。
    * ir2feature  **参数解释**： IR和SF的关联字段。 **约束限制**： IR可以填写该字段。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * needBreak  **参数解释**： 工作项是否需要分解。 **约束限制**： 仅可以分解的工作项类型有此字段。 **取值范围**： - yes：需要分解 - no：不需要分解 **默认取值**： 不涉及。
    * baseline  **参数解释**： 工作项基线状态。 **约束限制**： 不涉及。 **取值范围**： - null：未基线 - baselined：已基线 - baseline-reviewing：基线评审中 **默认取值**： 不涉及。
    * priority  **参数解释**： 工作项优先级，部分工作项有此字段。 **约束限制**： 不涉及。 **取值范围**： - 低：低优先级。 - 中：中优先级。 - 高：高优先级。 **默认取值**： 不涉及。
    * relatedNetworkSecurity  **参数解释**： 是否涉及网络安全。 **约束限制**： 预设字段中，仅研发需求类型的工作项有此字段。 **取值范围**： - yes：涉及网络安全。 - no：不涉及网络安全。 **默认取值**： 不涉及。
    * businessDomain  **参数解释**： 领域字段。 **约束限制**： 不涉及。 **取值范围**： - software - soft-hardware - hardware - 性能 - 功能 - 运维 - 运营 - 用户体验 - 隐私保护 - 合规 - 韧性(可靠性/可用性) - 韧性(危险检测与相应恢复) - 透明 - 无害 - 安全 - API - 成本 - 可维护性 - 其他DFX - 可用性 - others **默认取值**： 不涉及。
    * planPi  **参数解释**： 工作项发布计划ID。通过[发布/迭代计划列表查询](ListPlan.xml)接口查询计划列表，返回参数中PlanVO里面的category=PI的对象的**id**字段就是迭代计划的ID。 **约束限制**： 不涉及。 **取值范围**： 18~19个字符的数字字符串。 **默认取值**： 不涉及。
    * planIteration  **参数解释**： 工作项完成的迭代计划ID，在Bug中为修复迭代计划ID。通过[发布/迭代计划列表查询](ListPlan.xml)接口查询计划列表，返回参数中PlanVO里面的category=Iteration的对象的**id**字段就是迭代计划的ID。 **约束限制**： 18~19个字符的数字字符串。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * noBreakReason  **参数解释**： 无需分解原因。 **约束限制**： need_break字段值为“no”时有此字段。 **取值范围**： 0~512个字符。 **默认取值**： 不涉及。
    * submittedBy  **参数解释**： 工作项提出人。数组元素为UserUpdateAttribute对象。 **约束限制**： 不涉及。
    * ir2rr  **参数解释**： IR关联的RR ID，可以通过[查询工作项列表](ListIpdProjectIssues.xml)或者[查询树状工作项](ShowIpdIssueTree.xml)接口获取，响应消息体中的**id**字段的值就是工作项ID。 **约束限制**： 多个关联项ID使用英文逗号分隔。 **取值范围**： 0~1024个字符。 **默认取值**： 不涉及。
    * featureSet  **参数解释**： 特性集ID，可以通过[查询特性集](ShowBaselineSnapshots.xml)接口获取，响应消息体中的**id**字段的值就是特性集ID。 **约束限制**： 不涉及。 **取值范围**： 18~19个字符的数字字符串。 **默认取值**： 不涉及。
    * expectedRepairDate  **参数解释**： 期望修复时间。预设字段中，仅Bug有此字段，unix时间戳，单位：毫秒。 **约束限制**： 不涉及。 **取值范围**： 11~19个字符。 **默认取值**： 不涉及。
    * foundPi  **参数解释**： 缺陷发现发布计划ID，预设字段中，仅Bug有此字段。通过[发布/迭代计划列表查询](ListPlan.xml)接口查询计划列表，返回参数中PlanVO里面的category=PI的对象的**id**字段就是迭代计划的ID。 **约束限制**： 不涉及。 **取值范围**： 18~19个字符的数字字符串。 **默认取值**： 不涉及。
    * foundIteration  **参数解释**： 缺陷发现迭代计划ID，预设字段中，仅Bug有此字段。通过[发布/迭代计划列表查询](ListPlan.xml)接口查询计划列表，返回参数中PlanVO里面的category=Iteration的对象的**id**字段就是迭代计划的ID。 **约束限制**： 不涉及。 **取值范围**： 18~19个字符的数字字符串。 **默认取值**： 不涉及。
    * reasonAnalysis  **参数解释**： 分析原因。 **约束限制**： 预设字段中，仅Bug有此字段。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    * repairSolution  **参数解释**： 修复方案。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    * testReport  **参数解释**： 测试报告。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    * sysNoRepairReason  **参数解释**： 无需修复原因。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    * sysActivationReason  **参数解释**： 激活原因。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    * sysReturnReason  **参数解释**： 退回原因。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    * testFailuresTimes  **参数解释**： 回归不通过次数。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~999999。 **默认取值**： 不涉及。
    * closeType  **参数解释**： 关闭类型。 **约束限制**： 不涉及。 **取值范围**： - problem_solved：问题解决关闭 - problem_to_requirement：问题转需求关闭 - duplicate_problem：重复问题关闭 - not_a_problem：非问题关闭 **默认取值**： 不涉及。
    * securityLevel  **参数解释**： 密级。低密级权限者不能访问高密级的工作项。可以通过[查询字段列表](ListIpdProjectFields.xml)接口获取，响应消息体中密级的**option**字段的值就是密级字段的可选值。 **约束限制**： 仅在涉密环境（SM）下存在此字段，非涉密环境下无此字段。涉密环境下必填。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * planOwner  planOwner
    * doingOwner  doingOwner
    * deliveredOwner  deliveredOwner
    * checkingOwner  checkingOwner
    * testOwner  testOwner
    * developOwner  developOwner
    * processingOwner  processingOwner
    * fixedOwner  fixedOwner
    * researchanddevelopOwner  researchanddevelopOwner
    * analyseOwner  analyseOwner
    * planStartDate  **参数解释**： 计划开始时间。工作项的计划启动日期，用于项目进度管理和排期。 **约束限制**： 不涉及。 **取值范围**： 11~19个字符的时间戳字符串，单位为毫秒（ms）。 **默认取值**： 不涉及。
    * expectDeliveryTime  **参数解释**： 期望完成时间。工作项的预期交付日期，用于跟踪工作项是否按期完成。 **约束限制**： 不涉及。 **取值范围**： 11~19个字符的时间戳字符串，单位为毫秒（ms）。 **默认取值**： 不涉及。
    * planTestEndDate  **参数解释**： 计划测试结束时间。Bug类型工作项的计划测试完成日期，用于跟踪Bug修复后的测试进度。 **约束限制**： 仅对Bug类型工作项生效，非Bug类型忽略此字段。 **取值范围**： 11~19个字符的时间戳字符串，单位为毫秒（ms）。 **默认取值**： 不涉及。
    * severity  **参数解释**： 严重程度。Bug类型工作项的严重级别，用于评估Bug的影响范围和修复优先级。 **约束限制**： 仅对Bug类型工作项生效，非Bug类型忽略此字段。 **取值范围**： - 致命：系统崩溃、数据丢失等严重影响 - 严重：主要功能无法使用 - 一般：次要功能异常，有替代方案 - 提示：界面优化、建议性问题 **默认取值**： 不涉及。
    * promised  **参数解释**： 是否承诺。RR（原始需求）类型工作项的承诺状态标识，用于标记需求是否已承诺交付。 **约束限制**： 仅对RR类型工作项生效，非RR类型忽略此字段。 **取值范围**： - yes：已承诺 - no：未承诺 **默认取值**： 不涉及。
    * recipient  **参数解释**： 承接人。RR（原始需求）类型工作项的需求承接责任人，负责需求的分析和转化。 **约束限制**： 仅对RR类型工作项生效，非RR类型忽略此字段。
    * sysNoDevelopReason  **参数解释**： 无需研发原因。RR（原始需求）类型工作项不需要进行研发的原因说明。 **约束限制**： 仅对RR类型工作项生效，非RR类型忽略此字段。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    * valFeature  **参数解释**： 价值特性。SF/FE类型工作项对应的业务价值特性描述，用于关联业务价值和技术实现。 **约束限制**： 仅对SF/FE类型工作项生效，其他类型忽略此字段。 **取值范围**： - yes：是 - no：否 **默认取值**： 不涉及。
    * functionScene  **参数解释**： 功能场景。SF/FE类型工作项的功能应用场景描述，用于说明特性的使用场景和用户故事。 **约束限制**： 仅对SF/FE类型工作项生效，其他类型忽略此字段。 **取值范围**： 0~512个字符。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'category' => 'setCategory',
            'description' => 'setDescription',
            'parentId' => 'setParentId',
            'status' => 'setStatus',
            'assignee' => 'setAssignee',
            'assignedCc' => 'setAssignedCc',
            'planEndDate' => 'setPlanEndDate',
            'workload' => 'setWorkload',
            'link' => 'setLink',
            'labels' => 'setLabels',
            'customFields' => 'setCustomFields',
            'ir2feature' => 'setIr2feature',
            'needBreak' => 'setNeedBreak',
            'baseline' => 'setBaseline',
            'priority' => 'setPriority',
            'relatedNetworkSecurity' => 'setRelatedNetworkSecurity',
            'businessDomain' => 'setBusinessDomain',
            'planPi' => 'setPlanPi',
            'planIteration' => 'setPlanIteration',
            'noBreakReason' => 'setNoBreakReason',
            'submittedBy' => 'setSubmittedBy',
            'ir2rr' => 'setIr2rr',
            'featureSet' => 'setFeatureSet',
            'expectedRepairDate' => 'setExpectedRepairDate',
            'foundPi' => 'setFoundPi',
            'foundIteration' => 'setFoundIteration',
            'reasonAnalysis' => 'setReasonAnalysis',
            'repairSolution' => 'setRepairSolution',
            'testReport' => 'setTestReport',
            'sysNoRepairReason' => 'setSysNoRepairReason',
            'sysActivationReason' => 'setSysActivationReason',
            'sysReturnReason' => 'setSysReturnReason',
            'testFailuresTimes' => 'setTestFailuresTimes',
            'closeType' => 'setCloseType',
            'securityLevel' => 'setSecurityLevel',
            'planOwner' => 'setPlanOwner',
            'doingOwner' => 'setDoingOwner',
            'deliveredOwner' => 'setDeliveredOwner',
            'checkingOwner' => 'setCheckingOwner',
            'testOwner' => 'setTestOwner',
            'developOwner' => 'setDevelopOwner',
            'processingOwner' => 'setProcessingOwner',
            'fixedOwner' => 'setFixedOwner',
            'researchanddevelopOwner' => 'setResearchanddevelopOwner',
            'analyseOwner' => 'setAnalyseOwner',
            'planStartDate' => 'setPlanStartDate',
            'expectDeliveryTime' => 'setExpectDeliveryTime',
            'planTestEndDate' => 'setPlanTestEndDate',
            'severity' => 'setSeverity',
            'promised' => 'setPromised',
            'recipient' => 'setRecipient',
            'sysNoDevelopReason' => 'setSysNoDevelopReason',
            'valFeature' => 'setValFeature',
            'functionScene' => 'setFunctionScene'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * category  **参数解释**： 工作项类型编码。编辑工作项时，此字段必填、值为当前工作项正确的工作项类型，但不会更新此字段。 **约束限制**： 不涉及。 **取值范围**： 支持多种工作项类型，使用英文逗号分隔。 - 系统设备类项目：RR、SF、IR、SR、AR、Task、Bug - 独立软件类项目：RR、SF、IR、US、Task、Bug - 云服务类项目：RR、Epic、FE、US、Task、Bug **默认取值**： 不涉及。
    * description  **参数解释**： 工作项描述字段，可通过[查询树状工作项](ShowIpdIssueTree.xml)接口获取，响应消息体中的**description**字段的值就是工作项描述字段。 **约束限制**： 不涉及。 **取值范围**： 1~500000个字符。 **默认取值**： 不涉及。
    * parentId  **参数解释**： 父工作项ID，可通过[查询树状工作项](ShowIpdIssueTree.xml)接口获取，响应消息体中的**parent_id**字段的值就是父工作项ID。 **约束限制**： 不涉及。 **取值范围**： 18~19个字符的数字字符串。 **默认取值**： 不涉及。
    * status  **参数解释**： 工作项状态code。可通过[查询工作项状态](ListIssueStatues.xml)接口获取，响应消息体中的**code**字段的值就是工作项状态code。 **约束限制**： 不涉及。 **取值范围**： 2~32个字符。 **默认取值**： 不涉及。
    * assignee  assignee
    * assignedCc  **参数解释**： 工作项抄送人，支持多个抄送人。数组元素为UserUpdateAttribute对象。 **约束限制**： 同一工作项最多支持50个抄送人。
    * planEndDate  **参数解释**： 工作项计划结束日期，unix时间戳，单位：毫秒。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * workload  **参数解释**： 工作项计划工时。 **约束限制**： 保留一位小数。 **取值范围**： 0~999999999.9。 **默认取值**： 不涉及。
    * link  **参数解释**： 工作项关联项ID。 **约束限制**： 多个关联项用英文逗号分隔，同一工作项最多支持50个关联项。 **取值范围**： 0~2048个字符。 **默认取值**： 不涉及。
    * labels  **参数解释**： 工作项标签。数组元素为LabelEntity对象。 **约束限制**： 不涉及。 **取值范围**： 0~50个元素，每个元素为LabelEntity对象。 **默认取值**： 不涉及。
    * customFields  **参数解释**： 工作项自定义字段映射，用户添加的系统字段也在此列，格式为{\"code\":\"字段code\",\"value\":\"字段值\"}。数组元素为FieldCodeValuePair对象。 **约束限制**： 不涉及。 **取值范围**： 0~200个元素，每个元素为FieldCodeValuePair对象。 **默认取值**： 不涉及。
    * ir2feature  **参数解释**： IR和SF的关联字段。 **约束限制**： IR可以填写该字段。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * needBreak  **参数解释**： 工作项是否需要分解。 **约束限制**： 仅可以分解的工作项类型有此字段。 **取值范围**： - yes：需要分解 - no：不需要分解 **默认取值**： 不涉及。
    * baseline  **参数解释**： 工作项基线状态。 **约束限制**： 不涉及。 **取值范围**： - null：未基线 - baselined：已基线 - baseline-reviewing：基线评审中 **默认取值**： 不涉及。
    * priority  **参数解释**： 工作项优先级，部分工作项有此字段。 **约束限制**： 不涉及。 **取值范围**： - 低：低优先级。 - 中：中优先级。 - 高：高优先级。 **默认取值**： 不涉及。
    * relatedNetworkSecurity  **参数解释**： 是否涉及网络安全。 **约束限制**： 预设字段中，仅研发需求类型的工作项有此字段。 **取值范围**： - yes：涉及网络安全。 - no：不涉及网络安全。 **默认取值**： 不涉及。
    * businessDomain  **参数解释**： 领域字段。 **约束限制**： 不涉及。 **取值范围**： - software - soft-hardware - hardware - 性能 - 功能 - 运维 - 运营 - 用户体验 - 隐私保护 - 合规 - 韧性(可靠性/可用性) - 韧性(危险检测与相应恢复) - 透明 - 无害 - 安全 - API - 成本 - 可维护性 - 其他DFX - 可用性 - others **默认取值**： 不涉及。
    * planPi  **参数解释**： 工作项发布计划ID。通过[发布/迭代计划列表查询](ListPlan.xml)接口查询计划列表，返回参数中PlanVO里面的category=PI的对象的**id**字段就是迭代计划的ID。 **约束限制**： 不涉及。 **取值范围**： 18~19个字符的数字字符串。 **默认取值**： 不涉及。
    * planIteration  **参数解释**： 工作项完成的迭代计划ID，在Bug中为修复迭代计划ID。通过[发布/迭代计划列表查询](ListPlan.xml)接口查询计划列表，返回参数中PlanVO里面的category=Iteration的对象的**id**字段就是迭代计划的ID。 **约束限制**： 18~19个字符的数字字符串。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * noBreakReason  **参数解释**： 无需分解原因。 **约束限制**： need_break字段值为“no”时有此字段。 **取值范围**： 0~512个字符。 **默认取值**： 不涉及。
    * submittedBy  **参数解释**： 工作项提出人。数组元素为UserUpdateAttribute对象。 **约束限制**： 不涉及。
    * ir2rr  **参数解释**： IR关联的RR ID，可以通过[查询工作项列表](ListIpdProjectIssues.xml)或者[查询树状工作项](ShowIpdIssueTree.xml)接口获取，响应消息体中的**id**字段的值就是工作项ID。 **约束限制**： 多个关联项ID使用英文逗号分隔。 **取值范围**： 0~1024个字符。 **默认取值**： 不涉及。
    * featureSet  **参数解释**： 特性集ID，可以通过[查询特性集](ShowBaselineSnapshots.xml)接口获取，响应消息体中的**id**字段的值就是特性集ID。 **约束限制**： 不涉及。 **取值范围**： 18~19个字符的数字字符串。 **默认取值**： 不涉及。
    * expectedRepairDate  **参数解释**： 期望修复时间。预设字段中，仅Bug有此字段，unix时间戳，单位：毫秒。 **约束限制**： 不涉及。 **取值范围**： 11~19个字符。 **默认取值**： 不涉及。
    * foundPi  **参数解释**： 缺陷发现发布计划ID，预设字段中，仅Bug有此字段。通过[发布/迭代计划列表查询](ListPlan.xml)接口查询计划列表，返回参数中PlanVO里面的category=PI的对象的**id**字段就是迭代计划的ID。 **约束限制**： 不涉及。 **取值范围**： 18~19个字符的数字字符串。 **默认取值**： 不涉及。
    * foundIteration  **参数解释**： 缺陷发现迭代计划ID，预设字段中，仅Bug有此字段。通过[发布/迭代计划列表查询](ListPlan.xml)接口查询计划列表，返回参数中PlanVO里面的category=Iteration的对象的**id**字段就是迭代计划的ID。 **约束限制**： 不涉及。 **取值范围**： 18~19个字符的数字字符串。 **默认取值**： 不涉及。
    * reasonAnalysis  **参数解释**： 分析原因。 **约束限制**： 预设字段中，仅Bug有此字段。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    * repairSolution  **参数解释**： 修复方案。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    * testReport  **参数解释**： 测试报告。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    * sysNoRepairReason  **参数解释**： 无需修复原因。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    * sysActivationReason  **参数解释**： 激活原因。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    * sysReturnReason  **参数解释**： 退回原因。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    * testFailuresTimes  **参数解释**： 回归不通过次数。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~999999。 **默认取值**： 不涉及。
    * closeType  **参数解释**： 关闭类型。 **约束限制**： 不涉及。 **取值范围**： - problem_solved：问题解决关闭 - problem_to_requirement：问题转需求关闭 - duplicate_problem：重复问题关闭 - not_a_problem：非问题关闭 **默认取值**： 不涉及。
    * securityLevel  **参数解释**： 密级。低密级权限者不能访问高密级的工作项。可以通过[查询字段列表](ListIpdProjectFields.xml)接口获取，响应消息体中密级的**option**字段的值就是密级字段的可选值。 **约束限制**： 仅在涉密环境（SM）下存在此字段，非涉密环境下无此字段。涉密环境下必填。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * planOwner  planOwner
    * doingOwner  doingOwner
    * deliveredOwner  deliveredOwner
    * checkingOwner  checkingOwner
    * testOwner  testOwner
    * developOwner  developOwner
    * processingOwner  processingOwner
    * fixedOwner  fixedOwner
    * researchanddevelopOwner  researchanddevelopOwner
    * analyseOwner  analyseOwner
    * planStartDate  **参数解释**： 计划开始时间。工作项的计划启动日期，用于项目进度管理和排期。 **约束限制**： 不涉及。 **取值范围**： 11~19个字符的时间戳字符串，单位为毫秒（ms）。 **默认取值**： 不涉及。
    * expectDeliveryTime  **参数解释**： 期望完成时间。工作项的预期交付日期，用于跟踪工作项是否按期完成。 **约束限制**： 不涉及。 **取值范围**： 11~19个字符的时间戳字符串，单位为毫秒（ms）。 **默认取值**： 不涉及。
    * planTestEndDate  **参数解释**： 计划测试结束时间。Bug类型工作项的计划测试完成日期，用于跟踪Bug修复后的测试进度。 **约束限制**： 仅对Bug类型工作项生效，非Bug类型忽略此字段。 **取值范围**： 11~19个字符的时间戳字符串，单位为毫秒（ms）。 **默认取值**： 不涉及。
    * severity  **参数解释**： 严重程度。Bug类型工作项的严重级别，用于评估Bug的影响范围和修复优先级。 **约束限制**： 仅对Bug类型工作项生效，非Bug类型忽略此字段。 **取值范围**： - 致命：系统崩溃、数据丢失等严重影响 - 严重：主要功能无法使用 - 一般：次要功能异常，有替代方案 - 提示：界面优化、建议性问题 **默认取值**： 不涉及。
    * promised  **参数解释**： 是否承诺。RR（原始需求）类型工作项的承诺状态标识，用于标记需求是否已承诺交付。 **约束限制**： 仅对RR类型工作项生效，非RR类型忽略此字段。 **取值范围**： - yes：已承诺 - no：未承诺 **默认取值**： 不涉及。
    * recipient  **参数解释**： 承接人。RR（原始需求）类型工作项的需求承接责任人，负责需求的分析和转化。 **约束限制**： 仅对RR类型工作项生效，非RR类型忽略此字段。
    * sysNoDevelopReason  **参数解释**： 无需研发原因。RR（原始需求）类型工作项不需要进行研发的原因说明。 **约束限制**： 仅对RR类型工作项生效，非RR类型忽略此字段。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    * valFeature  **参数解释**： 价值特性。SF/FE类型工作项对应的业务价值特性描述，用于关联业务价值和技术实现。 **约束限制**： 仅对SF/FE类型工作项生效，其他类型忽略此字段。 **取值范围**： - yes：是 - no：否 **默认取值**： 不涉及。
    * functionScene  **参数解释**： 功能场景。SF/FE类型工作项的功能应用场景描述，用于说明特性的使用场景和用户故事。 **约束限制**： 仅对SF/FE类型工作项生效，其他类型忽略此字段。 **取值范围**： 0~512个字符。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'category' => 'getCategory',
            'description' => 'getDescription',
            'parentId' => 'getParentId',
            'status' => 'getStatus',
            'assignee' => 'getAssignee',
            'assignedCc' => 'getAssignedCc',
            'planEndDate' => 'getPlanEndDate',
            'workload' => 'getWorkload',
            'link' => 'getLink',
            'labels' => 'getLabels',
            'customFields' => 'getCustomFields',
            'ir2feature' => 'getIr2feature',
            'needBreak' => 'getNeedBreak',
            'baseline' => 'getBaseline',
            'priority' => 'getPriority',
            'relatedNetworkSecurity' => 'getRelatedNetworkSecurity',
            'businessDomain' => 'getBusinessDomain',
            'planPi' => 'getPlanPi',
            'planIteration' => 'getPlanIteration',
            'noBreakReason' => 'getNoBreakReason',
            'submittedBy' => 'getSubmittedBy',
            'ir2rr' => 'getIr2rr',
            'featureSet' => 'getFeatureSet',
            'expectedRepairDate' => 'getExpectedRepairDate',
            'foundPi' => 'getFoundPi',
            'foundIteration' => 'getFoundIteration',
            'reasonAnalysis' => 'getReasonAnalysis',
            'repairSolution' => 'getRepairSolution',
            'testReport' => 'getTestReport',
            'sysNoRepairReason' => 'getSysNoRepairReason',
            'sysActivationReason' => 'getSysActivationReason',
            'sysReturnReason' => 'getSysReturnReason',
            'testFailuresTimes' => 'getTestFailuresTimes',
            'closeType' => 'getCloseType',
            'securityLevel' => 'getSecurityLevel',
            'planOwner' => 'getPlanOwner',
            'doingOwner' => 'getDoingOwner',
            'deliveredOwner' => 'getDeliveredOwner',
            'checkingOwner' => 'getCheckingOwner',
            'testOwner' => 'getTestOwner',
            'developOwner' => 'getDevelopOwner',
            'processingOwner' => 'getProcessingOwner',
            'fixedOwner' => 'getFixedOwner',
            'researchanddevelopOwner' => 'getResearchanddevelopOwner',
            'analyseOwner' => 'getAnalyseOwner',
            'planStartDate' => 'getPlanStartDate',
            'expectDeliveryTime' => 'getExpectDeliveryTime',
            'planTestEndDate' => 'getPlanTestEndDate',
            'severity' => 'getSeverity',
            'promised' => 'getPromised',
            'recipient' => 'getRecipient',
            'sysNoDevelopReason' => 'getSysNoDevelopReason',
            'valFeature' => 'getValFeature',
            'functionScene' => 'getFunctionScene'
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['assignee'] = isset($data['assignee']) ? $data['assignee'] : null;
        $this->container['assignedCc'] = isset($data['assignedCc']) ? $data['assignedCc'] : null;
        $this->container['planEndDate'] = isset($data['planEndDate']) ? $data['planEndDate'] : null;
        $this->container['workload'] = isset($data['workload']) ? $data['workload'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['customFields'] = isset($data['customFields']) ? $data['customFields'] : null;
        $this->container['ir2feature'] = isset($data['ir2feature']) ? $data['ir2feature'] : null;
        $this->container['needBreak'] = isset($data['needBreak']) ? $data['needBreak'] : null;
        $this->container['baseline'] = isset($data['baseline']) ? $data['baseline'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['relatedNetworkSecurity'] = isset($data['relatedNetworkSecurity']) ? $data['relatedNetworkSecurity'] : null;
        $this->container['businessDomain'] = isset($data['businessDomain']) ? $data['businessDomain'] : null;
        $this->container['planPi'] = isset($data['planPi']) ? $data['planPi'] : null;
        $this->container['planIteration'] = isset($data['planIteration']) ? $data['planIteration'] : null;
        $this->container['noBreakReason'] = isset($data['noBreakReason']) ? $data['noBreakReason'] : null;
        $this->container['submittedBy'] = isset($data['submittedBy']) ? $data['submittedBy'] : null;
        $this->container['ir2rr'] = isset($data['ir2rr']) ? $data['ir2rr'] : null;
        $this->container['featureSet'] = isset($data['featureSet']) ? $data['featureSet'] : null;
        $this->container['expectedRepairDate'] = isset($data['expectedRepairDate']) ? $data['expectedRepairDate'] : null;
        $this->container['foundPi'] = isset($data['foundPi']) ? $data['foundPi'] : null;
        $this->container['foundIteration'] = isset($data['foundIteration']) ? $data['foundIteration'] : null;
        $this->container['reasonAnalysis'] = isset($data['reasonAnalysis']) ? $data['reasonAnalysis'] : null;
        $this->container['repairSolution'] = isset($data['repairSolution']) ? $data['repairSolution'] : null;
        $this->container['testReport'] = isset($data['testReport']) ? $data['testReport'] : null;
        $this->container['sysNoRepairReason'] = isset($data['sysNoRepairReason']) ? $data['sysNoRepairReason'] : null;
        $this->container['sysActivationReason'] = isset($data['sysActivationReason']) ? $data['sysActivationReason'] : null;
        $this->container['sysReturnReason'] = isset($data['sysReturnReason']) ? $data['sysReturnReason'] : null;
        $this->container['testFailuresTimes'] = isset($data['testFailuresTimes']) ? $data['testFailuresTimes'] : null;
        $this->container['closeType'] = isset($data['closeType']) ? $data['closeType'] : null;
        $this->container['securityLevel'] = isset($data['securityLevel']) ? $data['securityLevel'] : null;
        $this->container['planOwner'] = isset($data['planOwner']) ? $data['planOwner'] : null;
        $this->container['doingOwner'] = isset($data['doingOwner']) ? $data['doingOwner'] : null;
        $this->container['deliveredOwner'] = isset($data['deliveredOwner']) ? $data['deliveredOwner'] : null;
        $this->container['checkingOwner'] = isset($data['checkingOwner']) ? $data['checkingOwner'] : null;
        $this->container['testOwner'] = isset($data['testOwner']) ? $data['testOwner'] : null;
        $this->container['developOwner'] = isset($data['developOwner']) ? $data['developOwner'] : null;
        $this->container['processingOwner'] = isset($data['processingOwner']) ? $data['processingOwner'] : null;
        $this->container['fixedOwner'] = isset($data['fixedOwner']) ? $data['fixedOwner'] : null;
        $this->container['researchanddevelopOwner'] = isset($data['researchanddevelopOwner']) ? $data['researchanddevelopOwner'] : null;
        $this->container['analyseOwner'] = isset($data['analyseOwner']) ? $data['analyseOwner'] : null;
        $this->container['planStartDate'] = isset($data['planStartDate']) ? $data['planStartDate'] : null;
        $this->container['expectDeliveryTime'] = isset($data['expectDeliveryTime']) ? $data['expectDeliveryTime'] : null;
        $this->container['planTestEndDate'] = isset($data['planTestEndDate']) ? $data['planTestEndDate'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['promised'] = isset($data['promised']) ? $data['promised'] : null;
        $this->container['recipient'] = isset($data['recipient']) ? $data['recipient'] : null;
        $this->container['sysNoDevelopReason'] = isset($data['sysNoDevelopReason']) ? $data['sysNoDevelopReason'] : null;
        $this->container['valFeature'] = isset($data['valFeature']) ? $data['valFeature'] : null;
        $this->container['functionScene'] = isset($data['functionScene']) ? $data['functionScene'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) > 16)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) < 2)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 50000)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 50000.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['parentId']) && (mb_strlen($this->container['parentId']) > 19)) {
                $invalidProperties[] = "invalid value for 'parentId', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['parentId']) && (mb_strlen($this->container['parentId']) < 18)) {
                $invalidProperties[] = "invalid value for 'parentId', the character length must be bigger than or equal to 18.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 32)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 2)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['planEndDate']) && (mb_strlen($this->container['planEndDate']) > 32)) {
                $invalidProperties[] = "invalid value for 'planEndDate', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['planEndDate']) && (mb_strlen($this->container['planEndDate']) < 0)) {
                $invalidProperties[] = "invalid value for 'planEndDate', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['workload']) && (mb_strlen($this->container['workload']) > 11)) {
                $invalidProperties[] = "invalid value for 'workload', the character length must be smaller than or equal to 11.";
            }
            if (!is_null($this->container['workload']) && (mb_strlen($this->container['workload']) < 0)) {
                $invalidProperties[] = "invalid value for 'workload', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['link']) && (mb_strlen($this->container['link']) > 2048)) {
                $invalidProperties[] = "invalid value for 'link', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['link']) && (mb_strlen($this->container['link']) < 0)) {
                $invalidProperties[] = "invalid value for 'link', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['planIteration']) && (mb_strlen($this->container['planIteration']) > 19)) {
                $invalidProperties[] = "invalid value for 'planIteration', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['planIteration']) && (mb_strlen($this->container['planIteration']) < 18)) {
                $invalidProperties[] = "invalid value for 'planIteration', the character length must be bigger than or equal to 18.";
            }
            if (!is_null($this->container['noBreakReason']) && (mb_strlen($this->container['noBreakReason']) > 512)) {
                $invalidProperties[] = "invalid value for 'noBreakReason', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['noBreakReason']) && (mb_strlen($this->container['noBreakReason']) < 0)) {
                $invalidProperties[] = "invalid value for 'noBreakReason', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ir2rr']) && (mb_strlen($this->container['ir2rr']) > 1024)) {
                $invalidProperties[] = "invalid value for 'ir2rr', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['ir2rr']) && (mb_strlen($this->container['ir2rr']) < 0)) {
                $invalidProperties[] = "invalid value for 'ir2rr', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['featureSet']) && (mb_strlen($this->container['featureSet']) > 19)) {
                $invalidProperties[] = "invalid value for 'featureSet', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['featureSet']) && (mb_strlen($this->container['featureSet']) < 18)) {
                $invalidProperties[] = "invalid value for 'featureSet', the character length must be bigger than or equal to 18.";
            }
            if (!is_null($this->container['expectedRepairDate']) && (mb_strlen($this->container['expectedRepairDate']) > 19)) {
                $invalidProperties[] = "invalid value for 'expectedRepairDate', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['expectedRepairDate']) && (mb_strlen($this->container['expectedRepairDate']) < 11)) {
                $invalidProperties[] = "invalid value for 'expectedRepairDate', the character length must be bigger than or equal to 11.";
            }
            if (!is_null($this->container['foundPi']) && (mb_strlen($this->container['foundPi']) > 19)) {
                $invalidProperties[] = "invalid value for 'foundPi', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['foundPi']) && (mb_strlen($this->container['foundPi']) < 18)) {
                $invalidProperties[] = "invalid value for 'foundPi', the character length must be bigger than or equal to 18.";
            }
            if (!is_null($this->container['foundIteration']) && (mb_strlen($this->container['foundIteration']) > 19)) {
                $invalidProperties[] = "invalid value for 'foundIteration', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['foundIteration']) && (mb_strlen($this->container['foundIteration']) < 18)) {
                $invalidProperties[] = "invalid value for 'foundIteration', the character length must be bigger than or equal to 18.";
            }
            if (!is_null($this->container['reasonAnalysis']) && (mb_strlen($this->container['reasonAnalysis']) > 50000)) {
                $invalidProperties[] = "invalid value for 'reasonAnalysis', the character length must be smaller than or equal to 50000.";
            }
            if (!is_null($this->container['reasonAnalysis']) && (mb_strlen($this->container['reasonAnalysis']) < 0)) {
                $invalidProperties[] = "invalid value for 'reasonAnalysis', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['repairSolution']) && (mb_strlen($this->container['repairSolution']) > 50000)) {
                $invalidProperties[] = "invalid value for 'repairSolution', the character length must be smaller than or equal to 50000.";
            }
            if (!is_null($this->container['repairSolution']) && (mb_strlen($this->container['repairSolution']) < 0)) {
                $invalidProperties[] = "invalid value for 'repairSolution', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['testReport']) && (mb_strlen($this->container['testReport']) > 50000)) {
                $invalidProperties[] = "invalid value for 'testReport', the character length must be smaller than or equal to 50000.";
            }
            if (!is_null($this->container['testReport']) && (mb_strlen($this->container['testReport']) < 0)) {
                $invalidProperties[] = "invalid value for 'testReport', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sysNoRepairReason']) && (mb_strlen($this->container['sysNoRepairReason']) > 50000)) {
                $invalidProperties[] = "invalid value for 'sysNoRepairReason', the character length must be smaller than or equal to 50000.";
            }
            if (!is_null($this->container['sysNoRepairReason']) && (mb_strlen($this->container['sysNoRepairReason']) < 0)) {
                $invalidProperties[] = "invalid value for 'sysNoRepairReason', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sysActivationReason']) && (mb_strlen($this->container['sysActivationReason']) > 50000)) {
                $invalidProperties[] = "invalid value for 'sysActivationReason', the character length must be smaller than or equal to 50000.";
            }
            if (!is_null($this->container['sysActivationReason']) && (mb_strlen($this->container['sysActivationReason']) < 0)) {
                $invalidProperties[] = "invalid value for 'sysActivationReason', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sysReturnReason']) && (mb_strlen($this->container['sysReturnReason']) > 50000)) {
                $invalidProperties[] = "invalid value for 'sysReturnReason', the character length must be smaller than or equal to 50000.";
            }
            if (!is_null($this->container['sysReturnReason']) && (mb_strlen($this->container['sysReturnReason']) < 0)) {
                $invalidProperties[] = "invalid value for 'sysReturnReason', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['testFailuresTimes']) && ($this->container['testFailuresTimes'] > 999999)) {
                $invalidProperties[] = "invalid value for 'testFailuresTimes', must be smaller than or equal to 999999.";
            }
            if (!is_null($this->container['testFailuresTimes']) && ($this->container['testFailuresTimes'] < 0)) {
                $invalidProperties[] = "invalid value for 'testFailuresTimes', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['closeType']) && (mb_strlen($this->container['closeType']) > 32)) {
                $invalidProperties[] = "invalid value for 'closeType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['closeType']) && (mb_strlen($this->container['closeType']) < 0)) {
                $invalidProperties[] = "invalid value for 'closeType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['planStartDate']) && (mb_strlen($this->container['planStartDate']) > 19)) {
                $invalidProperties[] = "invalid value for 'planStartDate', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['planStartDate']) && (mb_strlen($this->container['planStartDate']) < 11)) {
                $invalidProperties[] = "invalid value for 'planStartDate', the character length must be bigger than or equal to 11.";
            }
            if (!is_null($this->container['expectDeliveryTime']) && (mb_strlen($this->container['expectDeliveryTime']) > 19)) {
                $invalidProperties[] = "invalid value for 'expectDeliveryTime', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['expectDeliveryTime']) && (mb_strlen($this->container['expectDeliveryTime']) < 11)) {
                $invalidProperties[] = "invalid value for 'expectDeliveryTime', the character length must be bigger than or equal to 11.";
            }
            if (!is_null($this->container['planTestEndDate']) && (mb_strlen($this->container['planTestEndDate']) > 19)) {
                $invalidProperties[] = "invalid value for 'planTestEndDate', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['planTestEndDate']) && (mb_strlen($this->container['planTestEndDate']) < 11)) {
                $invalidProperties[] = "invalid value for 'planTestEndDate', the character length must be bigger than or equal to 11.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) > 32)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) < 1)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sysNoDevelopReason']) && (mb_strlen($this->container['sysNoDevelopReason']) > 50000)) {
                $invalidProperties[] = "invalid value for 'sysNoDevelopReason', the character length must be smaller than or equal to 50000.";
            }
            if (!is_null($this->container['sysNoDevelopReason']) && (mb_strlen($this->container['sysNoDevelopReason']) < 0)) {
                $invalidProperties[] = "invalid value for 'sysNoDevelopReason', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['valFeature']) && (mb_strlen($this->container['valFeature']) > 255)) {
                $invalidProperties[] = "invalid value for 'valFeature', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['valFeature']) && (mb_strlen($this->container['valFeature']) < 1)) {
                $invalidProperties[] = "invalid value for 'valFeature', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['functionScene']) && (mb_strlen($this->container['functionScene']) > 50000)) {
                $invalidProperties[] = "invalid value for 'functionScene', the character length must be smaller than or equal to 50000.";
            }
            if (!is_null($this->container['functionScene']) && (mb_strlen($this->container['functionScene']) < 0)) {
                $invalidProperties[] = "invalid value for 'functionScene', the character length must be bigger than or equal to 0.";
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
    * Gets category
    *  **参数解释**： 工作项类型编码。编辑工作项时，此字段必填、值为当前工作项正确的工作项类型，但不会更新此字段。 **约束限制**： 不涉及。 **取值范围**： 支持多种工作项类型，使用英文逗号分隔。 - 系统设备类项目：RR、SF、IR、SR、AR、Task、Bug - 独立软件类项目：RR、SF、IR、US、Task、Bug - 云服务类项目：RR、Epic、FE、US、Task、Bug **默认取值**： 不涉及。
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
    * @param string|null $category **参数解释**： 工作项类型编码。编辑工作项时，此字段必填、值为当前工作项正确的工作项类型，但不会更新此字段。 **约束限制**： 不涉及。 **取值范围**： 支持多种工作项类型，使用英文逗号分隔。 - 系统设备类项目：RR、SF、IR、SR、AR、Task、Bug - 独立软件类项目：RR、SF、IR、US、Task、Bug - 云服务类项目：RR、Epic、FE、US、Task、Bug **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**： 工作项描述字段，可通过[查询树状工作项](ShowIpdIssueTree.xml)接口获取，响应消息体中的**description**字段的值就是工作项描述字段。 **约束限制**： 不涉及。 **取值范围**： 1~500000个字符。 **默认取值**： 不涉及。
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
    * @param string|null $description **参数解释**： 工作项描述字段，可通过[查询树状工作项](ShowIpdIssueTree.xml)接口获取，响应消息体中的**description**字段的值就是工作项描述字段。 **约束限制**： 不涉及。 **取值范围**： 1~500000个字符。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets parentId
    *  **参数解释**： 父工作项ID，可通过[查询树状工作项](ShowIpdIssueTree.xml)接口获取，响应消息体中的**parent_id**字段的值就是父工作项ID。 **约束限制**： 不涉及。 **取值范围**： 18~19个字符的数字字符串。 **默认取值**： 不涉及。
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
    * @param string|null $parentId **参数解释**： 父工作项ID，可通过[查询树状工作项](ShowIpdIssueTree.xml)接口获取，响应消息体中的**parent_id**字段的值就是父工作项ID。 **约束限制**： 不涉及。 **取值范围**： 18~19个字符的数字字符串。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 工作项状态code。可通过[查询工作项状态](ListIssueStatues.xml)接口获取，响应消息体中的**code**字段的值就是工作项状态code。 **约束限制**： 不涉及。 **取值范围**： 2~32个字符。 **默认取值**： 不涉及。
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
    * @param string|null $status **参数解释**： 工作项状态code。可通过[查询工作项状态](ListIssueStatues.xml)接口获取，响应消息体中的**code**字段的值就是工作项状态code。 **约束限制**： 不涉及。 **取值范围**： 2~32个字符。 **默认取值**： 不涉及。
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
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute|null
    */
    public function getAssignee()
    {
        return $this->container['assignee'];
    }

    /**
    * Sets assignee
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute|null $assignee assignee
    *
    * @return $this
    */
    public function setAssignee($assignee)
    {
        $this->container['assignee'] = $assignee;
        return $this;
    }

    /**
    * Gets assignedCc
    *  **参数解释**： 工作项抄送人，支持多个抄送人。数组元素为UserUpdateAttribute对象。 **约束限制**： 同一工作项最多支持50个抄送人。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute[]|null
    */
    public function getAssignedCc()
    {
        return $this->container['assignedCc'];
    }

    /**
    * Sets assignedCc
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute[]|null $assignedCc **参数解释**： 工作项抄送人，支持多个抄送人。数组元素为UserUpdateAttribute对象。 **约束限制**： 同一工作项最多支持50个抄送人。
    *
    * @return $this
    */
    public function setAssignedCc($assignedCc)
    {
        $this->container['assignedCc'] = $assignedCc;
        return $this;
    }

    /**
    * Gets planEndDate
    *  **参数解释**： 工作项计划结束日期，unix时间戳，单位：毫秒。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $planEndDate **参数解释**： 工作项计划结束日期，unix时间戳，单位：毫秒。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setPlanEndDate($planEndDate)
    {
        $this->container['planEndDate'] = $planEndDate;
        return $this;
    }

    /**
    * Gets workload
    *  **参数解释**： 工作项计划工时。 **约束限制**： 保留一位小数。 **取值范围**： 0~999999999.9。 **默认取值**： 不涉及。
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
    * @param string|null $workload **参数解释**： 工作项计划工时。 **约束限制**： 保留一位小数。 **取值范围**： 0~999999999.9。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setWorkload($workload)
    {
        $this->container['workload'] = $workload;
        return $this;
    }

    /**
    * Gets link
    *  **参数解释**： 工作项关联项ID。 **约束限制**： 多个关联项用英文逗号分隔，同一工作项最多支持50个关联项。 **取值范围**： 0~2048个字符。 **默认取值**： 不涉及。
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
    * @param string|null $link **参数解释**： 工作项关联项ID。 **约束限制**： 多个关联项用英文逗号分隔，同一工作项最多支持50个关联项。 **取值范围**： 0~2048个字符。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setLink($link)
    {
        $this->container['link'] = $link;
        return $this;
    }

    /**
    * Gets labels
    *  **参数解释**： 工作项标签。数组元素为LabelEntity对象。 **约束限制**： 不涉及。 **取值范围**： 0~50个元素，每个元素为LabelEntity对象。 **默认取值**： 不涉及。
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
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\LabelEntity[]|null $labels **参数解释**： 工作项标签。数组元素为LabelEntity对象。 **约束限制**： 不涉及。 **取值范围**： 0~50个元素，每个元素为LabelEntity对象。 **默认取值**： 不涉及。
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
    *  **参数解释**： 工作项自定义字段映射，用户添加的系统字段也在此列，格式为{\"code\":\"字段code\",\"value\":\"字段值\"}。数组元素为FieldCodeValuePair对象。 **约束限制**： 不涉及。 **取值范围**： 0~200个元素，每个元素为FieldCodeValuePair对象。 **默认取值**： 不涉及。
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
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\FieldCodeValuePair[]|null $customFields **参数解释**： 工作项自定义字段映射，用户添加的系统字段也在此列，格式为{\"code\":\"字段code\",\"value\":\"字段值\"}。数组元素为FieldCodeValuePair对象。 **约束限制**： 不涉及。 **取值范围**： 0~200个元素，每个元素为FieldCodeValuePair对象。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setCustomFields($customFields)
    {
        $this->container['customFields'] = $customFields;
        return $this;
    }

    /**
    * Gets ir2feature
    *  **参数解释**： IR和SF的关联字段。 **约束限制**： IR可以填写该字段。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $ir2feature **参数解释**： IR和SF的关联字段。 **约束限制**： IR可以填写该字段。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 工作项是否需要分解。 **约束限制**： 仅可以分解的工作项类型有此字段。 **取值范围**： - yes：需要分解 - no：不需要分解 **默认取值**： 不涉及。
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
    * @param string|null $needBreak **参数解释**： 工作项是否需要分解。 **约束限制**： 仅可以分解的工作项类型有此字段。 **取值范围**： - yes：需要分解 - no：不需要分解 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setNeedBreak($needBreak)
    {
        $this->container['needBreak'] = $needBreak;
        return $this;
    }

    /**
    * Gets baseline
    *  **参数解释**： 工作项基线状态。 **约束限制**： 不涉及。 **取值范围**： - null：未基线 - baselined：已基线 - baseline-reviewing：基线评审中 **默认取值**： 不涉及。
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
    * @param string|null $baseline **参数解释**： 工作项基线状态。 **约束限制**： 不涉及。 **取值范围**： - null：未基线 - baselined：已基线 - baseline-reviewing：基线评审中 **默认取值**： 不涉及。
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
    *  **参数解释**： 工作项优先级，部分工作项有此字段。 **约束限制**： 不涉及。 **取值范围**： - 低：低优先级。 - 中：中优先级。 - 高：高优先级。 **默认取值**： 不涉及。
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
    * @param string|null $priority **参数解释**： 工作项优先级，部分工作项有此字段。 **约束限制**： 不涉及。 **取值范围**： - 低：低优先级。 - 中：中优先级。 - 高：高优先级。 **默认取值**： 不涉及。
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
    *  **参数解释**： 是否涉及网络安全。 **约束限制**： 预设字段中，仅研发需求类型的工作项有此字段。 **取值范围**： - yes：涉及网络安全。 - no：不涉及网络安全。 **默认取值**： 不涉及。
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
    * @param string|null $relatedNetworkSecurity **参数解释**： 是否涉及网络安全。 **约束限制**： 预设字段中，仅研发需求类型的工作项有此字段。 **取值范围**： - yes：涉及网络安全。 - no：不涉及网络安全。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setRelatedNetworkSecurity($relatedNetworkSecurity)
    {
        $this->container['relatedNetworkSecurity'] = $relatedNetworkSecurity;
        return $this;
    }

    /**
    * Gets businessDomain
    *  **参数解释**： 领域字段。 **约束限制**： 不涉及。 **取值范围**： - software - soft-hardware - hardware - 性能 - 功能 - 运维 - 运营 - 用户体验 - 隐私保护 - 合规 - 韧性(可靠性/可用性) - 韧性(危险检测与相应恢复) - 透明 - 无害 - 安全 - API - 成本 - 可维护性 - 其他DFX - 可用性 - others **默认取值**： 不涉及。
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
    * @param string|null $businessDomain **参数解释**： 领域字段。 **约束限制**： 不涉及。 **取值范围**： - software - soft-hardware - hardware - 性能 - 功能 - 运维 - 运营 - 用户体验 - 隐私保护 - 合规 - 韧性(可靠性/可用性) - 韧性(危险检测与相应恢复) - 透明 - 无害 - 安全 - API - 成本 - 可维护性 - 其他DFX - 可用性 - others **默认取值**： 不涉及。
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
    *  **参数解释**： 工作项发布计划ID。通过[发布/迭代计划列表查询](ListPlan.xml)接口查询计划列表，返回参数中PlanVO里面的category=PI的对象的**id**字段就是迭代计划的ID。 **约束限制**： 不涉及。 **取值范围**： 18~19个字符的数字字符串。 **默认取值**： 不涉及。
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
    * @param string|null $planPi **参数解释**： 工作项发布计划ID。通过[发布/迭代计划列表查询](ListPlan.xml)接口查询计划列表，返回参数中PlanVO里面的category=PI的对象的**id**字段就是迭代计划的ID。 **约束限制**： 不涉及。 **取值范围**： 18~19个字符的数字字符串。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setPlanPi($planPi)
    {
        $this->container['planPi'] = $planPi;
        return $this;
    }

    /**
    * Gets planIteration
    *  **参数解释**： 工作项完成的迭代计划ID，在Bug中为修复迭代计划ID。通过[发布/迭代计划列表查询](ListPlan.xml)接口查询计划列表，返回参数中PlanVO里面的category=Iteration的对象的**id**字段就是迭代计划的ID。 **约束限制**： 18~19个字符的数字字符串。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getPlanIteration()
    {
        return $this->container['planIteration'];
    }

    /**
    * Sets planIteration
    *
    * @param string|null $planIteration **参数解释**： 工作项完成的迭代计划ID，在Bug中为修复迭代计划ID。通过[发布/迭代计划列表查询](ListPlan.xml)接口查询计划列表，返回参数中PlanVO里面的category=Iteration的对象的**id**字段就是迭代计划的ID。 **约束限制**： 18~19个字符的数字字符串。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setPlanIteration($planIteration)
    {
        $this->container['planIteration'] = $planIteration;
        return $this;
    }

    /**
    * Gets noBreakReason
    *  **参数解释**： 无需分解原因。 **约束限制**： need_break字段值为“no”时有此字段。 **取值范围**： 0~512个字符。 **默认取值**： 不涉及。
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
    * @param string|null $noBreakReason **参数解释**： 无需分解原因。 **约束限制**： need_break字段值为“no”时有此字段。 **取值范围**： 0~512个字符。 **默认取值**： 不涉及。
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
    *  **参数解释**： 工作项提出人。数组元素为UserUpdateAttribute对象。 **约束限制**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute[]|null
    */
    public function getSubmittedBy()
    {
        return $this->container['submittedBy'];
    }

    /**
    * Sets submittedBy
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute[]|null $submittedBy **参数解释**： 工作项提出人。数组元素为UserUpdateAttribute对象。 **约束限制**： 不涉及。
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
    *  **参数解释**： IR关联的RR ID，可以通过[查询工作项列表](ListIpdProjectIssues.xml)或者[查询树状工作项](ShowIpdIssueTree.xml)接口获取，响应消息体中的**id**字段的值就是工作项ID。 **约束限制**： 多个关联项ID使用英文逗号分隔。 **取值范围**： 0~1024个字符。 **默认取值**： 不涉及。
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
    * @param string|null $ir2rr **参数解释**： IR关联的RR ID，可以通过[查询工作项列表](ListIpdProjectIssues.xml)或者[查询树状工作项](ShowIpdIssueTree.xml)接口获取，响应消息体中的**id**字段的值就是工作项ID。 **约束限制**： 多个关联项ID使用英文逗号分隔。 **取值范围**： 0~1024个字符。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setIr2rr($ir2rr)
    {
        $this->container['ir2rr'] = $ir2rr;
        return $this;
    }

    /**
    * Gets featureSet
    *  **参数解释**： 特性集ID，可以通过[查询特性集](ShowBaselineSnapshots.xml)接口获取，响应消息体中的**id**字段的值就是特性集ID。 **约束限制**： 不涉及。 **取值范围**： 18~19个字符的数字字符串。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getFeatureSet()
    {
        return $this->container['featureSet'];
    }

    /**
    * Sets featureSet
    *
    * @param string|null $featureSet **参数解释**： 特性集ID，可以通过[查询特性集](ShowBaselineSnapshots.xml)接口获取，响应消息体中的**id**字段的值就是特性集ID。 **约束限制**： 不涉及。 **取值范围**： 18~19个字符的数字字符串。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setFeatureSet($featureSet)
    {
        $this->container['featureSet'] = $featureSet;
        return $this;
    }

    /**
    * Gets expectedRepairDate
    *  **参数解释**： 期望修复时间。预设字段中，仅Bug有此字段，unix时间戳，单位：毫秒。 **约束限制**： 不涉及。 **取值范围**： 11~19个字符。 **默认取值**： 不涉及。
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
    * @param string|null $expectedRepairDate **参数解释**： 期望修复时间。预设字段中，仅Bug有此字段，unix时间戳，单位：毫秒。 **约束限制**： 不涉及。 **取值范围**： 11~19个字符。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setExpectedRepairDate($expectedRepairDate)
    {
        $this->container['expectedRepairDate'] = $expectedRepairDate;
        return $this;
    }

    /**
    * Gets foundPi
    *  **参数解释**： 缺陷发现发布计划ID，预设字段中，仅Bug有此字段。通过[发布/迭代计划列表查询](ListPlan.xml)接口查询计划列表，返回参数中PlanVO里面的category=PI的对象的**id**字段就是迭代计划的ID。 **约束限制**： 不涉及。 **取值范围**： 18~19个字符的数字字符串。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getFoundPi()
    {
        return $this->container['foundPi'];
    }

    /**
    * Sets foundPi
    *
    * @param string|null $foundPi **参数解释**： 缺陷发现发布计划ID，预设字段中，仅Bug有此字段。通过[发布/迭代计划列表查询](ListPlan.xml)接口查询计划列表，返回参数中PlanVO里面的category=PI的对象的**id**字段就是迭代计划的ID。 **约束限制**： 不涉及。 **取值范围**： 18~19个字符的数字字符串。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setFoundPi($foundPi)
    {
        $this->container['foundPi'] = $foundPi;
        return $this;
    }

    /**
    * Gets foundIteration
    *  **参数解释**： 缺陷发现迭代计划ID，预设字段中，仅Bug有此字段。通过[发布/迭代计划列表查询](ListPlan.xml)接口查询计划列表，返回参数中PlanVO里面的category=Iteration的对象的**id**字段就是迭代计划的ID。 **约束限制**： 不涉及。 **取值范围**： 18~19个字符的数字字符串。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getFoundIteration()
    {
        return $this->container['foundIteration'];
    }

    /**
    * Sets foundIteration
    *
    * @param string|null $foundIteration **参数解释**： 缺陷发现迭代计划ID，预设字段中，仅Bug有此字段。通过[发布/迭代计划列表查询](ListPlan.xml)接口查询计划列表，返回参数中PlanVO里面的category=Iteration的对象的**id**字段就是迭代计划的ID。 **约束限制**： 不涉及。 **取值范围**： 18~19个字符的数字字符串。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setFoundIteration($foundIteration)
    {
        $this->container['foundIteration'] = $foundIteration;
        return $this;
    }

    /**
    * Gets reasonAnalysis
    *  **参数解释**： 分析原因。 **约束限制**： 预设字段中，仅Bug有此字段。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
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
    * @param string|null $reasonAnalysis **参数解释**： 分析原因。 **约束限制**： 预设字段中，仅Bug有此字段。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setReasonAnalysis($reasonAnalysis)
    {
        $this->container['reasonAnalysis'] = $reasonAnalysis;
        return $this;
    }

    /**
    * Gets repairSolution
    *  **参数解释**： 修复方案。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
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
    * @param string|null $repairSolution **参数解释**： 修复方案。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setRepairSolution($repairSolution)
    {
        $this->container['repairSolution'] = $repairSolution;
        return $this;
    }

    /**
    * Gets testReport
    *  **参数解释**： 测试报告。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
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
    * @param string|null $testReport **参数解释**： 测试报告。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setTestReport($testReport)
    {
        $this->container['testReport'] = $testReport;
        return $this;
    }

    /**
    * Gets sysNoRepairReason
    *  **参数解释**： 无需修复原因。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
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
    * @param string|null $sysNoRepairReason **参数解释**： 无需修复原因。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setSysNoRepairReason($sysNoRepairReason)
    {
        $this->container['sysNoRepairReason'] = $sysNoRepairReason;
        return $this;
    }

    /**
    * Gets sysActivationReason
    *  **参数解释**： 激活原因。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
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
    * @param string|null $sysActivationReason **参数解释**： 激活原因。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setSysActivationReason($sysActivationReason)
    {
        $this->container['sysActivationReason'] = $sysActivationReason;
        return $this;
    }

    /**
    * Gets sysReturnReason
    *  **参数解释**： 退回原因。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
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
    * @param string|null $sysReturnReason **参数解释**： 退回原因。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setSysReturnReason($sysReturnReason)
    {
        $this->container['sysReturnReason'] = $sysReturnReason;
        return $this;
    }

    /**
    * Gets testFailuresTimes
    *  **参数解释**： 回归不通过次数。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~999999。 **默认取值**： 不涉及。
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
    * @param int|null $testFailuresTimes **参数解释**： 回归不通过次数。预设字段中，仅Bug有此字段。 **约束限制**： 不涉及。 **取值范围**： 0~999999。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setTestFailuresTimes($testFailuresTimes)
    {
        $this->container['testFailuresTimes'] = $testFailuresTimes;
        return $this;
    }

    /**
    * Gets closeType
    *  **参数解释**： 关闭类型。 **约束限制**： 不涉及。 **取值范围**： - problem_solved：问题解决关闭 - problem_to_requirement：问题转需求关闭 - duplicate_problem：重复问题关闭 - not_a_problem：非问题关闭 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getCloseType()
    {
        return $this->container['closeType'];
    }

    /**
    * Sets closeType
    *
    * @param string|null $closeType **参数解释**： 关闭类型。 **约束限制**： 不涉及。 **取值范围**： - problem_solved：问题解决关闭 - problem_to_requirement：问题转需求关闭 - duplicate_problem：重复问题关闭 - not_a_problem：非问题关闭 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setCloseType($closeType)
    {
        $this->container['closeType'] = $closeType;
        return $this;
    }

    /**
    * Gets securityLevel
    *  **参数解释**： 密级。低密级权限者不能访问高密级的工作项。可以通过[查询字段列表](ListIpdProjectFields.xml)接口获取，响应消息体中密级的**option**字段的值就是密级字段的可选值。 **约束限制**： 仅在涉密环境（SM）下存在此字段，非涉密环境下无此字段。涉密环境下必填。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getSecurityLevel()
    {
        return $this->container['securityLevel'];
    }

    /**
    * Sets securityLevel
    *
    * @param string|null $securityLevel **参数解释**： 密级。低密级权限者不能访问高密级的工作项。可以通过[查询字段列表](ListIpdProjectFields.xml)接口获取，响应消息体中密级的**option**字段的值就是密级字段的可选值。 **约束限制**： 仅在涉密环境（SM）下存在此字段，非涉密环境下无此字段。涉密环境下必填。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setSecurityLevel($securityLevel)
    {
        $this->container['securityLevel'] = $securityLevel;
        return $this;
    }

    /**
    * Gets planOwner
    *  planOwner
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute|null
    */
    public function getPlanOwner()
    {
        return $this->container['planOwner'];
    }

    /**
    * Sets planOwner
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute|null $planOwner planOwner
    *
    * @return $this
    */
    public function setPlanOwner($planOwner)
    {
        $this->container['planOwner'] = $planOwner;
        return $this;
    }

    /**
    * Gets doingOwner
    *  doingOwner
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute|null
    */
    public function getDoingOwner()
    {
        return $this->container['doingOwner'];
    }

    /**
    * Sets doingOwner
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute|null $doingOwner doingOwner
    *
    * @return $this
    */
    public function setDoingOwner($doingOwner)
    {
        $this->container['doingOwner'] = $doingOwner;
        return $this;
    }

    /**
    * Gets deliveredOwner
    *  deliveredOwner
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute|null
    */
    public function getDeliveredOwner()
    {
        return $this->container['deliveredOwner'];
    }

    /**
    * Sets deliveredOwner
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute|null $deliveredOwner deliveredOwner
    *
    * @return $this
    */
    public function setDeliveredOwner($deliveredOwner)
    {
        $this->container['deliveredOwner'] = $deliveredOwner;
        return $this;
    }

    /**
    * Gets checkingOwner
    *  checkingOwner
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute|null
    */
    public function getCheckingOwner()
    {
        return $this->container['checkingOwner'];
    }

    /**
    * Sets checkingOwner
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute|null $checkingOwner checkingOwner
    *
    * @return $this
    */
    public function setCheckingOwner($checkingOwner)
    {
        $this->container['checkingOwner'] = $checkingOwner;
        return $this;
    }

    /**
    * Gets testOwner
    *  testOwner
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute|null
    */
    public function getTestOwner()
    {
        return $this->container['testOwner'];
    }

    /**
    * Sets testOwner
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute|null $testOwner testOwner
    *
    * @return $this
    */
    public function setTestOwner($testOwner)
    {
        $this->container['testOwner'] = $testOwner;
        return $this;
    }

    /**
    * Gets developOwner
    *  developOwner
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute|null
    */
    public function getDevelopOwner()
    {
        return $this->container['developOwner'];
    }

    /**
    * Sets developOwner
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute|null $developOwner developOwner
    *
    * @return $this
    */
    public function setDevelopOwner($developOwner)
    {
        $this->container['developOwner'] = $developOwner;
        return $this;
    }

    /**
    * Gets processingOwner
    *  processingOwner
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute|null
    */
    public function getProcessingOwner()
    {
        return $this->container['processingOwner'];
    }

    /**
    * Sets processingOwner
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute|null $processingOwner processingOwner
    *
    * @return $this
    */
    public function setProcessingOwner($processingOwner)
    {
        $this->container['processingOwner'] = $processingOwner;
        return $this;
    }

    /**
    * Gets fixedOwner
    *  fixedOwner
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute|null
    */
    public function getFixedOwner()
    {
        return $this->container['fixedOwner'];
    }

    /**
    * Sets fixedOwner
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute|null $fixedOwner fixedOwner
    *
    * @return $this
    */
    public function setFixedOwner($fixedOwner)
    {
        $this->container['fixedOwner'] = $fixedOwner;
        return $this;
    }

    /**
    * Gets researchanddevelopOwner
    *  researchanddevelopOwner
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute|null
    */
    public function getResearchanddevelopOwner()
    {
        return $this->container['researchanddevelopOwner'];
    }

    /**
    * Sets researchanddevelopOwner
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute|null $researchanddevelopOwner researchanddevelopOwner
    *
    * @return $this
    */
    public function setResearchanddevelopOwner($researchanddevelopOwner)
    {
        $this->container['researchanddevelopOwner'] = $researchanddevelopOwner;
        return $this;
    }

    /**
    * Gets analyseOwner
    *  analyseOwner
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute|null
    */
    public function getAnalyseOwner()
    {
        return $this->container['analyseOwner'];
    }

    /**
    * Sets analyseOwner
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute|null $analyseOwner analyseOwner
    *
    * @return $this
    */
    public function setAnalyseOwner($analyseOwner)
    {
        $this->container['analyseOwner'] = $analyseOwner;
        return $this;
    }

    /**
    * Gets planStartDate
    *  **参数解释**： 计划开始时间。工作项的计划启动日期，用于项目进度管理和排期。 **约束限制**： 不涉及。 **取值范围**： 11~19个字符的时间戳字符串，单位为毫秒（ms）。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getPlanStartDate()
    {
        return $this->container['planStartDate'];
    }

    /**
    * Sets planStartDate
    *
    * @param string|null $planStartDate **参数解释**： 计划开始时间。工作项的计划启动日期，用于项目进度管理和排期。 **约束限制**： 不涉及。 **取值范围**： 11~19个字符的时间戳字符串，单位为毫秒（ms）。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setPlanStartDate($planStartDate)
    {
        $this->container['planStartDate'] = $planStartDate;
        return $this;
    }

    /**
    * Gets expectDeliveryTime
    *  **参数解释**： 期望完成时间。工作项的预期交付日期，用于跟踪工作项是否按期完成。 **约束限制**： 不涉及。 **取值范围**： 11~19个字符的时间戳字符串，单位为毫秒（ms）。 **默认取值**： 不涉及。
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
    * @param string|null $expectDeliveryTime **参数解释**： 期望完成时间。工作项的预期交付日期，用于跟踪工作项是否按期完成。 **约束限制**： 不涉及。 **取值范围**： 11~19个字符的时间戳字符串，单位为毫秒（ms）。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setExpectDeliveryTime($expectDeliveryTime)
    {
        $this->container['expectDeliveryTime'] = $expectDeliveryTime;
        return $this;
    }

    /**
    * Gets planTestEndDate
    *  **参数解释**： 计划测试结束时间。Bug类型工作项的计划测试完成日期，用于跟踪Bug修复后的测试进度。 **约束限制**： 仅对Bug类型工作项生效，非Bug类型忽略此字段。 **取值范围**： 11~19个字符的时间戳字符串，单位为毫秒（ms）。 **默认取值**： 不涉及。
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
    * @param string|null $planTestEndDate **参数解释**： 计划测试结束时间。Bug类型工作项的计划测试完成日期，用于跟踪Bug修复后的测试进度。 **约束限制**： 仅对Bug类型工作项生效，非Bug类型忽略此字段。 **取值范围**： 11~19个字符的时间戳字符串，单位为毫秒（ms）。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setPlanTestEndDate($planTestEndDate)
    {
        $this->container['planTestEndDate'] = $planTestEndDate;
        return $this;
    }

    /**
    * Gets severity
    *  **参数解释**： 严重程度。Bug类型工作项的严重级别，用于评估Bug的影响范围和修复优先级。 **约束限制**： 仅对Bug类型工作项生效，非Bug类型忽略此字段。 **取值范围**： - 致命：系统崩溃、数据丢失等严重影响 - 严重：主要功能无法使用 - 一般：次要功能异常，有替代方案 - 提示：界面优化、建议性问题 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param string|null $severity **参数解释**： 严重程度。Bug类型工作项的严重级别，用于评估Bug的影响范围和修复优先级。 **约束限制**： 仅对Bug类型工作项生效，非Bug类型忽略此字段。 **取值范围**： - 致命：系统崩溃、数据丢失等严重影响 - 严重：主要功能无法使用 - 一般：次要功能异常，有替代方案 - 提示：界面优化、建议性问题 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets promised
    *  **参数解释**： 是否承诺。RR（原始需求）类型工作项的承诺状态标识，用于标记需求是否已承诺交付。 **约束限制**： 仅对RR类型工作项生效，非RR类型忽略此字段。 **取值范围**： - yes：已承诺 - no：未承诺 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getPromised()
    {
        return $this->container['promised'];
    }

    /**
    * Sets promised
    *
    * @param string|null $promised **参数解释**： 是否承诺。RR（原始需求）类型工作项的承诺状态标识，用于标记需求是否已承诺交付。 **约束限制**： 仅对RR类型工作项生效，非RR类型忽略此字段。 **取值范围**： - yes：已承诺 - no：未承诺 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setPromised($promised)
    {
        $this->container['promised'] = $promised;
        return $this;
    }

    /**
    * Gets recipient
    *  **参数解释**： 承接人。RR（原始需求）类型工作项的需求承接责任人，负责需求的分析和转化。 **约束限制**： 仅对RR类型工作项生效，非RR类型忽略此字段。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute[]|null
    */
    public function getRecipient()
    {
        return $this->container['recipient'];
    }

    /**
    * Sets recipient
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserUpdateAttribute[]|null $recipient **参数解释**： 承接人。RR（原始需求）类型工作项的需求承接责任人，负责需求的分析和转化。 **约束限制**： 仅对RR类型工作项生效，非RR类型忽略此字段。
    *
    * @return $this
    */
    public function setRecipient($recipient)
    {
        $this->container['recipient'] = $recipient;
        return $this;
    }

    /**
    * Gets sysNoDevelopReason
    *  **参数解释**： 无需研发原因。RR（原始需求）类型工作项不需要进行研发的原因说明。 **约束限制**： 仅对RR类型工作项生效，非RR类型忽略此字段。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
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
    * @param string|null $sysNoDevelopReason **参数解释**： 无需研发原因。RR（原始需求）类型工作项不需要进行研发的原因说明。 **约束限制**： 仅对RR类型工作项生效，非RR类型忽略此字段。 **取值范围**： 0~50000个字符。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setSysNoDevelopReason($sysNoDevelopReason)
    {
        $this->container['sysNoDevelopReason'] = $sysNoDevelopReason;
        return $this;
    }

    /**
    * Gets valFeature
    *  **参数解释**： 价值特性。SF/FE类型工作项对应的业务价值特性描述，用于关联业务价值和技术实现。 **约束限制**： 仅对SF/FE类型工作项生效，其他类型忽略此字段。 **取值范围**： - yes：是 - no：否 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getValFeature()
    {
        return $this->container['valFeature'];
    }

    /**
    * Sets valFeature
    *
    * @param string|null $valFeature **参数解释**： 价值特性。SF/FE类型工作项对应的业务价值特性描述，用于关联业务价值和技术实现。 **约束限制**： 仅对SF/FE类型工作项生效，其他类型忽略此字段。 **取值范围**： - yes：是 - no：否 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setValFeature($valFeature)
    {
        $this->container['valFeature'] = $valFeature;
        return $this;
    }

    /**
    * Gets functionScene
    *  **参数解释**： 功能场景。SF/FE类型工作项的功能应用场景描述，用于说明特性的使用场景和用户故事。 **约束限制**： 仅对SF/FE类型工作项生效，其他类型忽略此字段。 **取值范围**： 0~512个字符。 **默认取值**： 不涉及。
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
    * @param string|null $functionScene **参数解释**： 功能场景。SF/FE类型工作项的功能应用场景描述，用于说明特性的使用场景和用户故事。 **约束限制**： 仅对SF/FE类型工作项生效，其他类型忽略此字段。 **取值范围**： 0~512个字符。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setFunctionScene($functionScene)
    {
        $this->container['functionScene'] = $functionScene;
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

