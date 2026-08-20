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
    * id  需要更新的工作项ID，可通过查询树状工作项接口获取，响应消息体中的id字段的值就是工作项ID。
    * title  工作项标题，可通过查询树状工作项接口获取，响应消息体中的title字段的值就是工作项标题。
    * description  工作项描述字段，可通过查询树状工作项接口获取，响应消息体中的description字段的值就是工作项描述字段。
    * type  工作项大分类定义。工作项创建、编辑无此字段，仅作展示用，可通过查询树状工作项接口获取，响应消息体中的type字段的值就是工作项大分类定义。
    * number  工作项编号，可通过查询树状工作项接口获取，响应消息体中的number字段的值就是工作项编号。
    * category  工作项类型，可通过查询树状工作项接口获取，响应消息体中的category字段的值就是工作项类型。
    * categoryLayerId  工作项类型层级关系ID，此参数影响工作项的层级显示。通过获取模型树配置信息获取，根据参数中的category在响应消息体中category_layer_config中找到对应的category_code，和category_code同级的id就是工作项类型层级关系ID。
    * parentId  父工作项ID，可通过查询树状工作项接口获取，响应消息体中的parent_id字段的值就是父工作项ID。
    * projectId  项目的32位uuid，项目唯一标识，通过查询IPD项目列表接口获取，响应消息体中的project_id字段的值就是项目ID。
    * status  工作项状态code。可通过查询工作项状态接口获取，响应消息体中的code字段的值就是工作项工作项状态code。
    * state  工作项的生命周期，可选值为“正在工作”，“作废”，可通过查询树状工作项接口获取，响应消息体中的state字段的值就是工作项的生命周期。
    * assignee  assignee
    * assignedCc  工作项抄送人，支持多个抄送人。数组元素为UserEntity对象。
    * createdBy  createdBy
    * createdTime  工作项创建时间，unix时间戳，单位：毫秒。
    * modifiedBy  modifiedBy
    * modifiedTime  工作项最近更新时间，unix时间戳，单位：毫秒。
    * planEndDate  工作项计划结束日期，unix时间戳，单位：毫秒。
    * closeTime  工作项关闭时间，unix时间戳，单位：毫秒。
    * workload  工作项计划工时。
    * workloadSum  工作项实际工时。
    * tenantId  工作项所属租户ID，可通过查询树状工作项接口获取，响应消息体中的tenant_id字段的值就是工作项所属租户ID。
    * link  工作项关联项ID。
    * suspended  工作项是否已挂起。
    * statusModifiedTime  工作项状态改变时间，可用于计算工作项在当前状态停留天数，unix时间戳，单位：毫秒。
    * labels  工作项标签。数组元素为LabelEntity对象。
    * customFields  工作项自定义字段映射，用户添加的系统字段也在此列，格式为{\"code\":\"字段code\",\"value\":\"字段值\"}。数组元素为FieldCodeValuePair对象。
    * children  工作项的子工作项集合。数组元素为IssueEntity对象。
    * path  子工作项的路径。
    * ir2feature  IR和SF的关联字段。
    * needBreak  工作项是否需要分解。
    * breakStatus  分解状态。
    * baseline  工作项基线状态。
    * priority  工作项优先级，部分工作项有此字段。
    * relatedNetworkSecurity  是否涉及网络安全。
    * collaboratives  研发需求协同信息，协同任务ID，可通过查询树状工作项接口获取，响应消息体中的collaboratives字段的值就是研发需求协同信息，协同任务ID。
    * businessDomain  领域字段。
    * planPi  工作项发布计划ID。通过发布/迭代计划列表查询接口查询计划列表，返回参数中PlanVO里面的category=PI的对象的id字段就是迭代计划的ID。
    * planIteration  工作项完成的迭代计划ID，在Bug中为修复迭代计划ID。通过发布/迭代计划列表查询接口查询计划列表，返回参数中PlanVO里面的category=Iteration的对象的id字段就是迭代计划的ID。
    * changeStatus  工作项变更状态。
    * noBreakReason  无需分解原因。
    * submittedBy  工作项提出人。数组元素为UserEntity对象。
    * ir2rr  IR关联的RR ID，可以通过查询工作项列表或者查询树状工作项接口获取，响应消息体中的id字段的值就是工作项ID。
    * featureSet  特性集ID，可以通过查询特性集接口获取，响应消息体中的id字段的值就是特性集ID。
    * expectedRepairDate  期望修复时间。预设字段中，仅Bug有此字段，unix时间戳，单位：毫秒。
    * foundPi  缺陷发现发布计划ID，预设字段中，仅Bug有此字段。通过发布/迭代计划列表查询接口查询计划列表，返回参数中PlanVO里面的category=PI的对象的id字段就是迭代计划的ID。
    * foundIteration  缺陷发现迭代计划ID，预设字段中，仅Bug有此字段。通过发布/迭代计划列表查询接口查询计划列表，返回参数中PlanVO里面的category=Iteration的对象的id字段就是迭代计划的ID。
    * reasonAnalysis  分析原因。
    * repairSolution  修复方案。预设字段中，仅Bug有此字段。
    * testReport  测试报告。预设字段中，仅Bug有此字段。
    * sysNoRepairReason  无需修复原因。预设字段中，仅Bug有此字段。
    * sysActivationReason  激活原因。预设字段中，仅Bug有此字段。
    * sysReturnReason  退回原因。预设字段中，仅Bug有此字段。
    * testFailuresTimes  回归不通过次数。预设字段中，仅Bug有此字段。
    * closeType  关闭类型。
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
    * planStartDate  计划开始时间。工作项的计划启动日期，用于项目进度管理和排期。
    * expectDeliveryTime  期望完成时间。工作项的预期交付日期，用于跟踪工作项是否按期完成。
    * planTestEndDate  计划测试结束时间。Bug类型工作项的计划测试完成日期，用于跟踪Bug修复后的测试进度。
    * severity  严重程度。Bug类型工作项的严重级别，用于评估Bug的影响范围和修复优先级。
    * promised  是否承诺。RR（原始需求）类型工作项的承诺状态标识，用于标记需求是否已承诺交付。
    * recipient  承接人。RR（原始需求）类型工作项的需求承接责任人，负责需求的分析和转化。
    * sysNoDevelopReason  无需研发原因。RR（原始需求）类型工作项不需要进行研发的原因说明。
    * valFeature  价值特性。SF/FE类型工作项对应的业务价值特性描述，用于关联业务价值和技术实现。
    * functionScene  功能场景。SF/FE类型工作项的功能应用场景描述，用于说明特性的使用场景和用户故事。
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
            'categoryLayerId' => 'string',
            'parentId' => 'string',
            'projectId' => 'string',
            'status' => 'string',
            'state' => 'string',
            'assignee' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity',
            'assignedCc' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity[]',
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
            'planIteration' => 'string',
            'changeStatus' => 'string',
            'noBreakReason' => 'string',
            'submittedBy' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity[]',
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
            'planOwner' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity',
            'doingOwner' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity',
            'deliveredOwner' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity',
            'checkingOwner' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity',
            'testOwner' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity',
            'developOwner' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity',
            'processingOwner' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity',
            'fixedOwner' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity',
            'researchanddevelopOwner' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity',
            'analyseOwner' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity',
            'planStartDate' => 'string',
            'expectDeliveryTime' => 'string',
            'planTestEndDate' => 'string',
            'severity' => 'string',
            'promised' => 'string',
            'recipient' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity[]',
            'sysNoDevelopReason' => 'string',
            'valFeature' => 'string',
            'functionScene' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  需要更新的工作项ID，可通过查询树状工作项接口获取，响应消息体中的id字段的值就是工作项ID。
    * title  工作项标题，可通过查询树状工作项接口获取，响应消息体中的title字段的值就是工作项标题。
    * description  工作项描述字段，可通过查询树状工作项接口获取，响应消息体中的description字段的值就是工作项描述字段。
    * type  工作项大分类定义。工作项创建、编辑无此字段，仅作展示用，可通过查询树状工作项接口获取，响应消息体中的type字段的值就是工作项大分类定义。
    * number  工作项编号，可通过查询树状工作项接口获取，响应消息体中的number字段的值就是工作项编号。
    * category  工作项类型，可通过查询树状工作项接口获取，响应消息体中的category字段的值就是工作项类型。
    * categoryLayerId  工作项类型层级关系ID，此参数影响工作项的层级显示。通过获取模型树配置信息获取，根据参数中的category在响应消息体中category_layer_config中找到对应的category_code，和category_code同级的id就是工作项类型层级关系ID。
    * parentId  父工作项ID，可通过查询树状工作项接口获取，响应消息体中的parent_id字段的值就是父工作项ID。
    * projectId  项目的32位uuid，项目唯一标识，通过查询IPD项目列表接口获取，响应消息体中的project_id字段的值就是项目ID。
    * status  工作项状态code。可通过查询工作项状态接口获取，响应消息体中的code字段的值就是工作项工作项状态code。
    * state  工作项的生命周期，可选值为“正在工作”，“作废”，可通过查询树状工作项接口获取，响应消息体中的state字段的值就是工作项的生命周期。
    * assignee  assignee
    * assignedCc  工作项抄送人，支持多个抄送人。数组元素为UserEntity对象。
    * createdBy  createdBy
    * createdTime  工作项创建时间，unix时间戳，单位：毫秒。
    * modifiedBy  modifiedBy
    * modifiedTime  工作项最近更新时间，unix时间戳，单位：毫秒。
    * planEndDate  工作项计划结束日期，unix时间戳，单位：毫秒。
    * closeTime  工作项关闭时间，unix时间戳，单位：毫秒。
    * workload  工作项计划工时。
    * workloadSum  工作项实际工时。
    * tenantId  工作项所属租户ID，可通过查询树状工作项接口获取，响应消息体中的tenant_id字段的值就是工作项所属租户ID。
    * link  工作项关联项ID。
    * suspended  工作项是否已挂起。
    * statusModifiedTime  工作项状态改变时间，可用于计算工作项在当前状态停留天数，unix时间戳，单位：毫秒。
    * labels  工作项标签。数组元素为LabelEntity对象。
    * customFields  工作项自定义字段映射，用户添加的系统字段也在此列，格式为{\"code\":\"字段code\",\"value\":\"字段值\"}。数组元素为FieldCodeValuePair对象。
    * children  工作项的子工作项集合。数组元素为IssueEntity对象。
    * path  子工作项的路径。
    * ir2feature  IR和SF的关联字段。
    * needBreak  工作项是否需要分解。
    * breakStatus  分解状态。
    * baseline  工作项基线状态。
    * priority  工作项优先级，部分工作项有此字段。
    * relatedNetworkSecurity  是否涉及网络安全。
    * collaboratives  研发需求协同信息，协同任务ID，可通过查询树状工作项接口获取，响应消息体中的collaboratives字段的值就是研发需求协同信息，协同任务ID。
    * businessDomain  领域字段。
    * planPi  工作项发布计划ID。通过发布/迭代计划列表查询接口查询计划列表，返回参数中PlanVO里面的category=PI的对象的id字段就是迭代计划的ID。
    * planIteration  工作项完成的迭代计划ID，在Bug中为修复迭代计划ID。通过发布/迭代计划列表查询接口查询计划列表，返回参数中PlanVO里面的category=Iteration的对象的id字段就是迭代计划的ID。
    * changeStatus  工作项变更状态。
    * noBreakReason  无需分解原因。
    * submittedBy  工作项提出人。数组元素为UserEntity对象。
    * ir2rr  IR关联的RR ID，可以通过查询工作项列表或者查询树状工作项接口获取，响应消息体中的id字段的值就是工作项ID。
    * featureSet  特性集ID，可以通过查询特性集接口获取，响应消息体中的id字段的值就是特性集ID。
    * expectedRepairDate  期望修复时间。预设字段中，仅Bug有此字段，unix时间戳，单位：毫秒。
    * foundPi  缺陷发现发布计划ID，预设字段中，仅Bug有此字段。通过发布/迭代计划列表查询接口查询计划列表，返回参数中PlanVO里面的category=PI的对象的id字段就是迭代计划的ID。
    * foundIteration  缺陷发现迭代计划ID，预设字段中，仅Bug有此字段。通过发布/迭代计划列表查询接口查询计划列表，返回参数中PlanVO里面的category=Iteration的对象的id字段就是迭代计划的ID。
    * reasonAnalysis  分析原因。
    * repairSolution  修复方案。预设字段中，仅Bug有此字段。
    * testReport  测试报告。预设字段中，仅Bug有此字段。
    * sysNoRepairReason  无需修复原因。预设字段中，仅Bug有此字段。
    * sysActivationReason  激活原因。预设字段中，仅Bug有此字段。
    * sysReturnReason  退回原因。预设字段中，仅Bug有此字段。
    * testFailuresTimes  回归不通过次数。预设字段中，仅Bug有此字段。
    * closeType  关闭类型。
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
    * planStartDate  计划开始时间。工作项的计划启动日期，用于项目进度管理和排期。
    * expectDeliveryTime  期望完成时间。工作项的预期交付日期，用于跟踪工作项是否按期完成。
    * planTestEndDate  计划测试结束时间。Bug类型工作项的计划测试完成日期，用于跟踪Bug修复后的测试进度。
    * severity  严重程度。Bug类型工作项的严重级别，用于评估Bug的影响范围和修复优先级。
    * promised  是否承诺。RR（原始需求）类型工作项的承诺状态标识，用于标记需求是否已承诺交付。
    * recipient  承接人。RR（原始需求）类型工作项的需求承接责任人，负责需求的分析和转化。
    * sysNoDevelopReason  无需研发原因。RR（原始需求）类型工作项不需要进行研发的原因说明。
    * valFeature  价值特性。SF/FE类型工作项对应的业务价值特性描述，用于关联业务价值和技术实现。
    * functionScene  功能场景。SF/FE类型工作项的功能应用场景描述，用于说明特性的使用场景和用户故事。
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
        'categoryLayerId' => null,
        'parentId' => null,
        'projectId' => null,
        'status' => null,
        'state' => null,
        'assignee' => null,
        'assignedCc' => null,
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
        'planIteration' => null,
        'changeStatus' => null,
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
    * id  需要更新的工作项ID，可通过查询树状工作项接口获取，响应消息体中的id字段的值就是工作项ID。
    * title  工作项标题，可通过查询树状工作项接口获取，响应消息体中的title字段的值就是工作项标题。
    * description  工作项描述字段，可通过查询树状工作项接口获取，响应消息体中的description字段的值就是工作项描述字段。
    * type  工作项大分类定义。工作项创建、编辑无此字段，仅作展示用，可通过查询树状工作项接口获取，响应消息体中的type字段的值就是工作项大分类定义。
    * number  工作项编号，可通过查询树状工作项接口获取，响应消息体中的number字段的值就是工作项编号。
    * category  工作项类型，可通过查询树状工作项接口获取，响应消息体中的category字段的值就是工作项类型。
    * categoryLayerId  工作项类型层级关系ID，此参数影响工作项的层级显示。通过获取模型树配置信息获取，根据参数中的category在响应消息体中category_layer_config中找到对应的category_code，和category_code同级的id就是工作项类型层级关系ID。
    * parentId  父工作项ID，可通过查询树状工作项接口获取，响应消息体中的parent_id字段的值就是父工作项ID。
    * projectId  项目的32位uuid，项目唯一标识，通过查询IPD项目列表接口获取，响应消息体中的project_id字段的值就是项目ID。
    * status  工作项状态code。可通过查询工作项状态接口获取，响应消息体中的code字段的值就是工作项工作项状态code。
    * state  工作项的生命周期，可选值为“正在工作”，“作废”，可通过查询树状工作项接口获取，响应消息体中的state字段的值就是工作项的生命周期。
    * assignee  assignee
    * assignedCc  工作项抄送人，支持多个抄送人。数组元素为UserEntity对象。
    * createdBy  createdBy
    * createdTime  工作项创建时间，unix时间戳，单位：毫秒。
    * modifiedBy  modifiedBy
    * modifiedTime  工作项最近更新时间，unix时间戳，单位：毫秒。
    * planEndDate  工作项计划结束日期，unix时间戳，单位：毫秒。
    * closeTime  工作项关闭时间，unix时间戳，单位：毫秒。
    * workload  工作项计划工时。
    * workloadSum  工作项实际工时。
    * tenantId  工作项所属租户ID，可通过查询树状工作项接口获取，响应消息体中的tenant_id字段的值就是工作项所属租户ID。
    * link  工作项关联项ID。
    * suspended  工作项是否已挂起。
    * statusModifiedTime  工作项状态改变时间，可用于计算工作项在当前状态停留天数，unix时间戳，单位：毫秒。
    * labels  工作项标签。数组元素为LabelEntity对象。
    * customFields  工作项自定义字段映射，用户添加的系统字段也在此列，格式为{\"code\":\"字段code\",\"value\":\"字段值\"}。数组元素为FieldCodeValuePair对象。
    * children  工作项的子工作项集合。数组元素为IssueEntity对象。
    * path  子工作项的路径。
    * ir2feature  IR和SF的关联字段。
    * needBreak  工作项是否需要分解。
    * breakStatus  分解状态。
    * baseline  工作项基线状态。
    * priority  工作项优先级，部分工作项有此字段。
    * relatedNetworkSecurity  是否涉及网络安全。
    * collaboratives  研发需求协同信息，协同任务ID，可通过查询树状工作项接口获取，响应消息体中的collaboratives字段的值就是研发需求协同信息，协同任务ID。
    * businessDomain  领域字段。
    * planPi  工作项发布计划ID。通过发布/迭代计划列表查询接口查询计划列表，返回参数中PlanVO里面的category=PI的对象的id字段就是迭代计划的ID。
    * planIteration  工作项完成的迭代计划ID，在Bug中为修复迭代计划ID。通过发布/迭代计划列表查询接口查询计划列表，返回参数中PlanVO里面的category=Iteration的对象的id字段就是迭代计划的ID。
    * changeStatus  工作项变更状态。
    * noBreakReason  无需分解原因。
    * submittedBy  工作项提出人。数组元素为UserEntity对象。
    * ir2rr  IR关联的RR ID，可以通过查询工作项列表或者查询树状工作项接口获取，响应消息体中的id字段的值就是工作项ID。
    * featureSet  特性集ID，可以通过查询特性集接口获取，响应消息体中的id字段的值就是特性集ID。
    * expectedRepairDate  期望修复时间。预设字段中，仅Bug有此字段，unix时间戳，单位：毫秒。
    * foundPi  缺陷发现发布计划ID，预设字段中，仅Bug有此字段。通过发布/迭代计划列表查询接口查询计划列表，返回参数中PlanVO里面的category=PI的对象的id字段就是迭代计划的ID。
    * foundIteration  缺陷发现迭代计划ID，预设字段中，仅Bug有此字段。通过发布/迭代计划列表查询接口查询计划列表，返回参数中PlanVO里面的category=Iteration的对象的id字段就是迭代计划的ID。
    * reasonAnalysis  分析原因。
    * repairSolution  修复方案。预设字段中，仅Bug有此字段。
    * testReport  测试报告。预设字段中，仅Bug有此字段。
    * sysNoRepairReason  无需修复原因。预设字段中，仅Bug有此字段。
    * sysActivationReason  激活原因。预设字段中，仅Bug有此字段。
    * sysReturnReason  退回原因。预设字段中，仅Bug有此字段。
    * testFailuresTimes  回归不通过次数。预设字段中，仅Bug有此字段。
    * closeType  关闭类型。
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
    * planStartDate  计划开始时间。工作项的计划启动日期，用于项目进度管理和排期。
    * expectDeliveryTime  期望完成时间。工作项的预期交付日期，用于跟踪工作项是否按期完成。
    * planTestEndDate  计划测试结束时间。Bug类型工作项的计划测试完成日期，用于跟踪Bug修复后的测试进度。
    * severity  严重程度。Bug类型工作项的严重级别，用于评估Bug的影响范围和修复优先级。
    * promised  是否承诺。RR（原始需求）类型工作项的承诺状态标识，用于标记需求是否已承诺交付。
    * recipient  承接人。RR（原始需求）类型工作项的需求承接责任人，负责需求的分析和转化。
    * sysNoDevelopReason  无需研发原因。RR（原始需求）类型工作项不需要进行研发的原因说明。
    * valFeature  价值特性。SF/FE类型工作项对应的业务价值特性描述，用于关联业务价值和技术实现。
    * functionScene  功能场景。SF/FE类型工作项的功能应用场景描述，用于说明特性的使用场景和用户故事。
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
            'categoryLayerId' => 'category_layer_id',
            'parentId' => 'parent_id',
            'projectId' => 'project_id',
            'status' => 'status',
            'state' => 'state',
            'assignee' => 'assignee',
            'assignedCc' => 'assigned_cc',
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
            'planIteration' => 'plan_iteration',
            'changeStatus' => 'change_status',
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
    * id  需要更新的工作项ID，可通过查询树状工作项接口获取，响应消息体中的id字段的值就是工作项ID。
    * title  工作项标题，可通过查询树状工作项接口获取，响应消息体中的title字段的值就是工作项标题。
    * description  工作项描述字段，可通过查询树状工作项接口获取，响应消息体中的description字段的值就是工作项描述字段。
    * type  工作项大分类定义。工作项创建、编辑无此字段，仅作展示用，可通过查询树状工作项接口获取，响应消息体中的type字段的值就是工作项大分类定义。
    * number  工作项编号，可通过查询树状工作项接口获取，响应消息体中的number字段的值就是工作项编号。
    * category  工作项类型，可通过查询树状工作项接口获取，响应消息体中的category字段的值就是工作项类型。
    * categoryLayerId  工作项类型层级关系ID，此参数影响工作项的层级显示。通过获取模型树配置信息获取，根据参数中的category在响应消息体中category_layer_config中找到对应的category_code，和category_code同级的id就是工作项类型层级关系ID。
    * parentId  父工作项ID，可通过查询树状工作项接口获取，响应消息体中的parent_id字段的值就是父工作项ID。
    * projectId  项目的32位uuid，项目唯一标识，通过查询IPD项目列表接口获取，响应消息体中的project_id字段的值就是项目ID。
    * status  工作项状态code。可通过查询工作项状态接口获取，响应消息体中的code字段的值就是工作项工作项状态code。
    * state  工作项的生命周期，可选值为“正在工作”，“作废”，可通过查询树状工作项接口获取，响应消息体中的state字段的值就是工作项的生命周期。
    * assignee  assignee
    * assignedCc  工作项抄送人，支持多个抄送人。数组元素为UserEntity对象。
    * createdBy  createdBy
    * createdTime  工作项创建时间，unix时间戳，单位：毫秒。
    * modifiedBy  modifiedBy
    * modifiedTime  工作项最近更新时间，unix时间戳，单位：毫秒。
    * planEndDate  工作项计划结束日期，unix时间戳，单位：毫秒。
    * closeTime  工作项关闭时间，unix时间戳，单位：毫秒。
    * workload  工作项计划工时。
    * workloadSum  工作项实际工时。
    * tenantId  工作项所属租户ID，可通过查询树状工作项接口获取，响应消息体中的tenant_id字段的值就是工作项所属租户ID。
    * link  工作项关联项ID。
    * suspended  工作项是否已挂起。
    * statusModifiedTime  工作项状态改变时间，可用于计算工作项在当前状态停留天数，unix时间戳，单位：毫秒。
    * labels  工作项标签。数组元素为LabelEntity对象。
    * customFields  工作项自定义字段映射，用户添加的系统字段也在此列，格式为{\"code\":\"字段code\",\"value\":\"字段值\"}。数组元素为FieldCodeValuePair对象。
    * children  工作项的子工作项集合。数组元素为IssueEntity对象。
    * path  子工作项的路径。
    * ir2feature  IR和SF的关联字段。
    * needBreak  工作项是否需要分解。
    * breakStatus  分解状态。
    * baseline  工作项基线状态。
    * priority  工作项优先级，部分工作项有此字段。
    * relatedNetworkSecurity  是否涉及网络安全。
    * collaboratives  研发需求协同信息，协同任务ID，可通过查询树状工作项接口获取，响应消息体中的collaboratives字段的值就是研发需求协同信息，协同任务ID。
    * businessDomain  领域字段。
    * planPi  工作项发布计划ID。通过发布/迭代计划列表查询接口查询计划列表，返回参数中PlanVO里面的category=PI的对象的id字段就是迭代计划的ID。
    * planIteration  工作项完成的迭代计划ID，在Bug中为修复迭代计划ID。通过发布/迭代计划列表查询接口查询计划列表，返回参数中PlanVO里面的category=Iteration的对象的id字段就是迭代计划的ID。
    * changeStatus  工作项变更状态。
    * noBreakReason  无需分解原因。
    * submittedBy  工作项提出人。数组元素为UserEntity对象。
    * ir2rr  IR关联的RR ID，可以通过查询工作项列表或者查询树状工作项接口获取，响应消息体中的id字段的值就是工作项ID。
    * featureSet  特性集ID，可以通过查询特性集接口获取，响应消息体中的id字段的值就是特性集ID。
    * expectedRepairDate  期望修复时间。预设字段中，仅Bug有此字段，unix时间戳，单位：毫秒。
    * foundPi  缺陷发现发布计划ID，预设字段中，仅Bug有此字段。通过发布/迭代计划列表查询接口查询计划列表，返回参数中PlanVO里面的category=PI的对象的id字段就是迭代计划的ID。
    * foundIteration  缺陷发现迭代计划ID，预设字段中，仅Bug有此字段。通过发布/迭代计划列表查询接口查询计划列表，返回参数中PlanVO里面的category=Iteration的对象的id字段就是迭代计划的ID。
    * reasonAnalysis  分析原因。
    * repairSolution  修复方案。预设字段中，仅Bug有此字段。
    * testReport  测试报告。预设字段中，仅Bug有此字段。
    * sysNoRepairReason  无需修复原因。预设字段中，仅Bug有此字段。
    * sysActivationReason  激活原因。预设字段中，仅Bug有此字段。
    * sysReturnReason  退回原因。预设字段中，仅Bug有此字段。
    * testFailuresTimes  回归不通过次数。预设字段中，仅Bug有此字段。
    * closeType  关闭类型。
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
    * planStartDate  计划开始时间。工作项的计划启动日期，用于项目进度管理和排期。
    * expectDeliveryTime  期望完成时间。工作项的预期交付日期，用于跟踪工作项是否按期完成。
    * planTestEndDate  计划测试结束时间。Bug类型工作项的计划测试完成日期，用于跟踪Bug修复后的测试进度。
    * severity  严重程度。Bug类型工作项的严重级别，用于评估Bug的影响范围和修复优先级。
    * promised  是否承诺。RR（原始需求）类型工作项的承诺状态标识，用于标记需求是否已承诺交付。
    * recipient  承接人。RR（原始需求）类型工作项的需求承接责任人，负责需求的分析和转化。
    * sysNoDevelopReason  无需研发原因。RR（原始需求）类型工作项不需要进行研发的原因说明。
    * valFeature  价值特性。SF/FE类型工作项对应的业务价值特性描述，用于关联业务价值和技术实现。
    * functionScene  功能场景。SF/FE类型工作项的功能应用场景描述，用于说明特性的使用场景和用户故事。
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
            'categoryLayerId' => 'setCategoryLayerId',
            'parentId' => 'setParentId',
            'projectId' => 'setProjectId',
            'status' => 'setStatus',
            'state' => 'setState',
            'assignee' => 'setAssignee',
            'assignedCc' => 'setAssignedCc',
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
            'planIteration' => 'setPlanIteration',
            'changeStatus' => 'setChangeStatus',
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
    * id  需要更新的工作项ID，可通过查询树状工作项接口获取，响应消息体中的id字段的值就是工作项ID。
    * title  工作项标题，可通过查询树状工作项接口获取，响应消息体中的title字段的值就是工作项标题。
    * description  工作项描述字段，可通过查询树状工作项接口获取，响应消息体中的description字段的值就是工作项描述字段。
    * type  工作项大分类定义。工作项创建、编辑无此字段，仅作展示用，可通过查询树状工作项接口获取，响应消息体中的type字段的值就是工作项大分类定义。
    * number  工作项编号，可通过查询树状工作项接口获取，响应消息体中的number字段的值就是工作项编号。
    * category  工作项类型，可通过查询树状工作项接口获取，响应消息体中的category字段的值就是工作项类型。
    * categoryLayerId  工作项类型层级关系ID，此参数影响工作项的层级显示。通过获取模型树配置信息获取，根据参数中的category在响应消息体中category_layer_config中找到对应的category_code，和category_code同级的id就是工作项类型层级关系ID。
    * parentId  父工作项ID，可通过查询树状工作项接口获取，响应消息体中的parent_id字段的值就是父工作项ID。
    * projectId  项目的32位uuid，项目唯一标识，通过查询IPD项目列表接口获取，响应消息体中的project_id字段的值就是项目ID。
    * status  工作项状态code。可通过查询工作项状态接口获取，响应消息体中的code字段的值就是工作项工作项状态code。
    * state  工作项的生命周期，可选值为“正在工作”，“作废”，可通过查询树状工作项接口获取，响应消息体中的state字段的值就是工作项的生命周期。
    * assignee  assignee
    * assignedCc  工作项抄送人，支持多个抄送人。数组元素为UserEntity对象。
    * createdBy  createdBy
    * createdTime  工作项创建时间，unix时间戳，单位：毫秒。
    * modifiedBy  modifiedBy
    * modifiedTime  工作项最近更新时间，unix时间戳，单位：毫秒。
    * planEndDate  工作项计划结束日期，unix时间戳，单位：毫秒。
    * closeTime  工作项关闭时间，unix时间戳，单位：毫秒。
    * workload  工作项计划工时。
    * workloadSum  工作项实际工时。
    * tenantId  工作项所属租户ID，可通过查询树状工作项接口获取，响应消息体中的tenant_id字段的值就是工作项所属租户ID。
    * link  工作项关联项ID。
    * suspended  工作项是否已挂起。
    * statusModifiedTime  工作项状态改变时间，可用于计算工作项在当前状态停留天数，unix时间戳，单位：毫秒。
    * labels  工作项标签。数组元素为LabelEntity对象。
    * customFields  工作项自定义字段映射，用户添加的系统字段也在此列，格式为{\"code\":\"字段code\",\"value\":\"字段值\"}。数组元素为FieldCodeValuePair对象。
    * children  工作项的子工作项集合。数组元素为IssueEntity对象。
    * path  子工作项的路径。
    * ir2feature  IR和SF的关联字段。
    * needBreak  工作项是否需要分解。
    * breakStatus  分解状态。
    * baseline  工作项基线状态。
    * priority  工作项优先级，部分工作项有此字段。
    * relatedNetworkSecurity  是否涉及网络安全。
    * collaboratives  研发需求协同信息，协同任务ID，可通过查询树状工作项接口获取，响应消息体中的collaboratives字段的值就是研发需求协同信息，协同任务ID。
    * businessDomain  领域字段。
    * planPi  工作项发布计划ID。通过发布/迭代计划列表查询接口查询计划列表，返回参数中PlanVO里面的category=PI的对象的id字段就是迭代计划的ID。
    * planIteration  工作项完成的迭代计划ID，在Bug中为修复迭代计划ID。通过发布/迭代计划列表查询接口查询计划列表，返回参数中PlanVO里面的category=Iteration的对象的id字段就是迭代计划的ID。
    * changeStatus  工作项变更状态。
    * noBreakReason  无需分解原因。
    * submittedBy  工作项提出人。数组元素为UserEntity对象。
    * ir2rr  IR关联的RR ID，可以通过查询工作项列表或者查询树状工作项接口获取，响应消息体中的id字段的值就是工作项ID。
    * featureSet  特性集ID，可以通过查询特性集接口获取，响应消息体中的id字段的值就是特性集ID。
    * expectedRepairDate  期望修复时间。预设字段中，仅Bug有此字段，unix时间戳，单位：毫秒。
    * foundPi  缺陷发现发布计划ID，预设字段中，仅Bug有此字段。通过发布/迭代计划列表查询接口查询计划列表，返回参数中PlanVO里面的category=PI的对象的id字段就是迭代计划的ID。
    * foundIteration  缺陷发现迭代计划ID，预设字段中，仅Bug有此字段。通过发布/迭代计划列表查询接口查询计划列表，返回参数中PlanVO里面的category=Iteration的对象的id字段就是迭代计划的ID。
    * reasonAnalysis  分析原因。
    * repairSolution  修复方案。预设字段中，仅Bug有此字段。
    * testReport  测试报告。预设字段中，仅Bug有此字段。
    * sysNoRepairReason  无需修复原因。预设字段中，仅Bug有此字段。
    * sysActivationReason  激活原因。预设字段中，仅Bug有此字段。
    * sysReturnReason  退回原因。预设字段中，仅Bug有此字段。
    * testFailuresTimes  回归不通过次数。预设字段中，仅Bug有此字段。
    * closeType  关闭类型。
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
    * planStartDate  计划开始时间。工作项的计划启动日期，用于项目进度管理和排期。
    * expectDeliveryTime  期望完成时间。工作项的预期交付日期，用于跟踪工作项是否按期完成。
    * planTestEndDate  计划测试结束时间。Bug类型工作项的计划测试完成日期，用于跟踪Bug修复后的测试进度。
    * severity  严重程度。Bug类型工作项的严重级别，用于评估Bug的影响范围和修复优先级。
    * promised  是否承诺。RR（原始需求）类型工作项的承诺状态标识，用于标记需求是否已承诺交付。
    * recipient  承接人。RR（原始需求）类型工作项的需求承接责任人，负责需求的分析和转化。
    * sysNoDevelopReason  无需研发原因。RR（原始需求）类型工作项不需要进行研发的原因说明。
    * valFeature  价值特性。SF/FE类型工作项对应的业务价值特性描述，用于关联业务价值和技术实现。
    * functionScene  功能场景。SF/FE类型工作项的功能应用场景描述，用于说明特性的使用场景和用户故事。
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
            'categoryLayerId' => 'getCategoryLayerId',
            'parentId' => 'getParentId',
            'projectId' => 'getProjectId',
            'status' => 'getStatus',
            'state' => 'getState',
            'assignee' => 'getAssignee',
            'assignedCc' => 'getAssignedCc',
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
            'planIteration' => 'getPlanIteration',
            'changeStatus' => 'getChangeStatus',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['categoryLayerId'] = isset($data['categoryLayerId']) ? $data['categoryLayerId'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['assignee'] = isset($data['assignee']) ? $data['assignee'] : null;
        $this->container['assignedCc'] = isset($data['assignedCc']) ? $data['assignedCc'] : null;
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
        $this->container['planIteration'] = isset($data['planIteration']) ? $data['planIteration'] : null;
        $this->container['changeStatus'] = isset($data['changeStatus']) ? $data['changeStatus'] : null;
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
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
            if ((mb_strlen($this->container['category']) > 16)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['category']) < 2)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['categoryLayerId'] === null) {
            $invalidProperties[] = "'categoryLayerId' can't be null";
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
            if (!is_null($this->container['planIteration']) && (mb_strlen($this->container['planIteration']) > 19)) {
                $invalidProperties[] = "invalid value for 'planIteration', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['planIteration']) && (mb_strlen($this->container['planIteration']) < 18)) {
                $invalidProperties[] = "invalid value for 'planIteration', the character length must be bigger than or equal to 18.";
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
    * Gets id
    *  需要更新的工作项ID，可通过查询树状工作项接口获取，响应消息体中的id字段的值就是工作项ID。
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
    * @param string|null $id 需要更新的工作项ID，可通过查询树状工作项接口获取，响应消息体中的id字段的值就是工作项ID。
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
    *  工作项标题，可通过查询树状工作项接口获取，响应消息体中的title字段的值就是工作项标题。
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
    * @param string|null $title 工作项标题，可通过查询树状工作项接口获取，响应消息体中的title字段的值就是工作项标题。
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
    *  工作项描述字段，可通过查询树状工作项接口获取，响应消息体中的description字段的值就是工作项描述字段。
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
    * @param string|null $description 工作项描述字段，可通过查询树状工作项接口获取，响应消息体中的description字段的值就是工作项描述字段。
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
    *  工作项大分类定义。工作项创建、编辑无此字段，仅作展示用，可通过查询树状工作项接口获取，响应消息体中的type字段的值就是工作项大分类定义。
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
    * @param string|null $type 工作项大分类定义。工作项创建、编辑无此字段，仅作展示用，可通过查询树状工作项接口获取，响应消息体中的type字段的值就是工作项大分类定义。
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
    *  工作项编号，可通过查询树状工作项接口获取，响应消息体中的number字段的值就是工作项编号。
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
    * @param string|null $number 工作项编号，可通过查询树状工作项接口获取，响应消息体中的number字段的值就是工作项编号。
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
    *  工作项类型，可通过查询树状工作项接口获取，响应消息体中的category字段的值就是工作项类型。
    *
    * @return string
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string $category 工作项类型，可通过查询树状工作项接口获取，响应消息体中的category字段的值就是工作项类型。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets categoryLayerId
    *  工作项类型层级关系ID，此参数影响工作项的层级显示。通过获取模型树配置信息获取，根据参数中的category在响应消息体中category_layer_config中找到对应的category_code，和category_code同级的id就是工作项类型层级关系ID。
    *
    * @return string
    */
    public function getCategoryLayerId()
    {
        return $this->container['categoryLayerId'];
    }

    /**
    * Sets categoryLayerId
    *
    * @param string $categoryLayerId 工作项类型层级关系ID，此参数影响工作项的层级显示。通过获取模型树配置信息获取，根据参数中的category在响应消息体中category_layer_config中找到对应的category_code，和category_code同级的id就是工作项类型层级关系ID。
    *
    * @return $this
    */
    public function setCategoryLayerId($categoryLayerId)
    {
        $this->container['categoryLayerId'] = $categoryLayerId;
        return $this;
    }

    /**
    * Gets parentId
    *  父工作项ID，可通过查询树状工作项接口获取，响应消息体中的parent_id字段的值就是父工作项ID。
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
    * @param string|null $parentId 父工作项ID，可通过查询树状工作项接口获取，响应消息体中的parent_id字段的值就是父工作项ID。
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
    *  项目的32位uuid，项目唯一标识，通过查询IPD项目列表接口获取，响应消息体中的project_id字段的值就是项目ID。
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
    * @param string|null $projectId 项目的32位uuid，项目唯一标识，通过查询IPD项目列表接口获取，响应消息体中的project_id字段的值就是项目ID。
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
    *  工作项状态code。可通过查询工作项状态接口获取，响应消息体中的code字段的值就是工作项工作项状态code。
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
    * @param string|null $status 工作项状态code。可通过查询工作项状态接口获取，响应消息体中的code字段的值就是工作项工作项状态code。
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
    *  工作项的生命周期，可选值为“正在工作”，“作废”，可通过查询树状工作项接口获取，响应消息体中的state字段的值就是工作项的生命周期。
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
    * @param string|null $state 工作项的生命周期，可选值为“正在工作”，“作废”，可通过查询树状工作项接口获取，响应消息体中的state字段的值就是工作项的生命周期。
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
    * Gets assignedCc
    *  工作项抄送人，支持多个抄送人。数组元素为UserEntity对象。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity[]|null
    */
    public function getAssignedCc()
    {
        return $this->container['assignedCc'];
    }

    /**
    * Sets assignedCc
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity[]|null $assignedCc 工作项抄送人，支持多个抄送人。数组元素为UserEntity对象。
    *
    * @return $this
    */
    public function setAssignedCc($assignedCc)
    {
        $this->container['assignedCc'] = $assignedCc;
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
    *  工作项创建时间，unix时间戳，单位：毫秒。
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
    * @param string|null $createdTime 工作项创建时间，unix时间戳，单位：毫秒。
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
    *  工作项最近更新时间，unix时间戳，单位：毫秒。
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
    * @param string|null $modifiedTime 工作项最近更新时间，unix时间戳，单位：毫秒。
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
    *  工作项计划结束日期，unix时间戳，单位：毫秒。
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
    * @param string|null $planEndDate 工作项计划结束日期，unix时间戳，单位：毫秒。
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
    *  工作项关闭时间，unix时间戳，单位：毫秒。
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
    * @param string|null $closeTime 工作项关闭时间，unix时间戳，单位：毫秒。
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
    *  工作项计划工时。
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
    * @param string|null $workload 工作项计划工时。
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
    *  工作项实际工时。
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
    * @param string|null $workloadSum 工作项实际工时。
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
    *  工作项所属租户ID，可通过查询树状工作项接口获取，响应消息体中的tenant_id字段的值就是工作项所属租户ID。
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
    * @param string|null $tenantId 工作项所属租户ID，可通过查询树状工作项接口获取，响应消息体中的tenant_id字段的值就是工作项所属租户ID。
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
    *  工作项关联项ID。
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
    * @param string|null $link 工作项关联项ID。
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
    *  工作项是否已挂起。
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
    * @param bool|null $suspended 工作项是否已挂起。
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
    *  工作项状态改变时间，可用于计算工作项在当前状态停留天数，unix时间戳，单位：毫秒。
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
    * @param string|null $statusModifiedTime 工作项状态改变时间，可用于计算工作项在当前状态停留天数，unix时间戳，单位：毫秒。
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
    *  工作项标签。数组元素为LabelEntity对象。
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
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\LabelEntity[]|null $labels 工作项标签。数组元素为LabelEntity对象。
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
    *  工作项自定义字段映射，用户添加的系统字段也在此列，格式为{\"code\":\"字段code\",\"value\":\"字段值\"}。数组元素为FieldCodeValuePair对象。
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
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\FieldCodeValuePair[]|null $customFields 工作项自定义字段映射，用户添加的系统字段也在此列，格式为{\"code\":\"字段code\",\"value\":\"字段值\"}。数组元素为FieldCodeValuePair对象。
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
    *  工作项的子工作项集合。数组元素为IssueEntity对象。
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
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueEntity[]|null $children 工作项的子工作项集合。数组元素为IssueEntity对象。
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
    *  子工作项的路径。
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
    * @param string|null $path 子工作项的路径。
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
    *  IR和SF的关联字段。
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
    * @param string|null $ir2feature IR和SF的关联字段。
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
    *  工作项是否需要分解。
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
    * @param string|null $needBreak 工作项是否需要分解。
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
    *  分解状态。
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
    * @param string|null $breakStatus 分解状态。
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
    *  工作项基线状态。
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
    * @param string|null $baseline 工作项基线状态。
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
    *  工作项优先级，部分工作项有此字段。
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
    * @param string|null $priority 工作项优先级，部分工作项有此字段。
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
    *  是否涉及网络安全。
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
    * @param string|null $relatedNetworkSecurity 是否涉及网络安全。
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
    *  研发需求协同信息，协同任务ID，可通过查询树状工作项接口获取，响应消息体中的collaboratives字段的值就是研发需求协同信息，协同任务ID。
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
    * @param string|null $collaboratives 研发需求协同信息，协同任务ID，可通过查询树状工作项接口获取，响应消息体中的collaboratives字段的值就是研发需求协同信息，协同任务ID。
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
    *  领域字段。
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
    * @param string|null $businessDomain 领域字段。
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
    *  工作项发布计划ID。通过发布/迭代计划列表查询接口查询计划列表，返回参数中PlanVO里面的category=PI的对象的id字段就是迭代计划的ID。
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
    * @param string|null $planPi 工作项发布计划ID。通过发布/迭代计划列表查询接口查询计划列表，返回参数中PlanVO里面的category=PI的对象的id字段就是迭代计划的ID。
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
    *  工作项完成的迭代计划ID，在Bug中为修复迭代计划ID。通过发布/迭代计划列表查询接口查询计划列表，返回参数中PlanVO里面的category=Iteration的对象的id字段就是迭代计划的ID。
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
    * @param string|null $planIteration 工作项完成的迭代计划ID，在Bug中为修复迭代计划ID。通过发布/迭代计划列表查询接口查询计划列表，返回参数中PlanVO里面的category=Iteration的对象的id字段就是迭代计划的ID。
    *
    * @return $this
    */
    public function setPlanIteration($planIteration)
    {
        $this->container['planIteration'] = $planIteration;
        return $this;
    }

    /**
    * Gets changeStatus
    *  工作项变更状态。
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
    * @param string|null $changeStatus 工作项变更状态。
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
    *  无需分解原因。
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
    * @param string|null $noBreakReason 无需分解原因。
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
    *  工作项提出人。数组元素为UserEntity对象。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity[]|null
    */
    public function getSubmittedBy()
    {
        return $this->container['submittedBy'];
    }

    /**
    * Sets submittedBy
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity[]|null $submittedBy 工作项提出人。数组元素为UserEntity对象。
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
    *  IR关联的RR ID，可以通过查询工作项列表或者查询树状工作项接口获取，响应消息体中的id字段的值就是工作项ID。
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
    * @param string|null $ir2rr IR关联的RR ID，可以通过查询工作项列表或者查询树状工作项接口获取，响应消息体中的id字段的值就是工作项ID。
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
    *  特性集ID，可以通过查询特性集接口获取，响应消息体中的id字段的值就是特性集ID。
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
    * @param string|null $featureSet 特性集ID，可以通过查询特性集接口获取，响应消息体中的id字段的值就是特性集ID。
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
    *  期望修复时间。预设字段中，仅Bug有此字段，unix时间戳，单位：毫秒。
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
    * @param string|null $expectedRepairDate 期望修复时间。预设字段中，仅Bug有此字段，unix时间戳，单位：毫秒。
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
    *  缺陷发现发布计划ID，预设字段中，仅Bug有此字段。通过发布/迭代计划列表查询接口查询计划列表，返回参数中PlanVO里面的category=PI的对象的id字段就是迭代计划的ID。
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
    * @param string|null $foundPi 缺陷发现发布计划ID，预设字段中，仅Bug有此字段。通过发布/迭代计划列表查询接口查询计划列表，返回参数中PlanVO里面的category=PI的对象的id字段就是迭代计划的ID。
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
    *  缺陷发现迭代计划ID，预设字段中，仅Bug有此字段。通过发布/迭代计划列表查询接口查询计划列表，返回参数中PlanVO里面的category=Iteration的对象的id字段就是迭代计划的ID。
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
    * @param string|null $foundIteration 缺陷发现迭代计划ID，预设字段中，仅Bug有此字段。通过发布/迭代计划列表查询接口查询计划列表，返回参数中PlanVO里面的category=Iteration的对象的id字段就是迭代计划的ID。
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
    *  分析原因。
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
    * @param string|null $reasonAnalysis 分析原因。
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
    *  修复方案。预设字段中，仅Bug有此字段。
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
    * @param string|null $repairSolution 修复方案。预设字段中，仅Bug有此字段。
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
    *  测试报告。预设字段中，仅Bug有此字段。
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
    * @param string|null $testReport 测试报告。预设字段中，仅Bug有此字段。
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
    *  无需修复原因。预设字段中，仅Bug有此字段。
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
    * @param string|null $sysNoRepairReason 无需修复原因。预设字段中，仅Bug有此字段。
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
    *  激活原因。预设字段中，仅Bug有此字段。
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
    * @param string|null $sysActivationReason 激活原因。预设字段中，仅Bug有此字段。
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
    *  退回原因。预设字段中，仅Bug有此字段。
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
    * @param string|null $sysReturnReason 退回原因。预设字段中，仅Bug有此字段。
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
    *  回归不通过次数。预设字段中，仅Bug有此字段。
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
    * @param int|null $testFailuresTimes 回归不通过次数。预设字段中，仅Bug有此字段。
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
    *  关闭类型。
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
    * @param string|null $closeType 关闭类型。
    *
    * @return $this
    */
    public function setCloseType($closeType)
    {
        $this->container['closeType'] = $closeType;
        return $this;
    }

    /**
    * Gets planOwner
    *  planOwner
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null
    */
    public function getPlanOwner()
    {
        return $this->container['planOwner'];
    }

    /**
    * Sets planOwner
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null $planOwner planOwner
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
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null
    */
    public function getDoingOwner()
    {
        return $this->container['doingOwner'];
    }

    /**
    * Sets doingOwner
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null $doingOwner doingOwner
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
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null
    */
    public function getDeliveredOwner()
    {
        return $this->container['deliveredOwner'];
    }

    /**
    * Sets deliveredOwner
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null $deliveredOwner deliveredOwner
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
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null
    */
    public function getCheckingOwner()
    {
        return $this->container['checkingOwner'];
    }

    /**
    * Sets checkingOwner
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null $checkingOwner checkingOwner
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
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null
    */
    public function getTestOwner()
    {
        return $this->container['testOwner'];
    }

    /**
    * Sets testOwner
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null $testOwner testOwner
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
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null
    */
    public function getDevelopOwner()
    {
        return $this->container['developOwner'];
    }

    /**
    * Sets developOwner
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null $developOwner developOwner
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
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null
    */
    public function getProcessingOwner()
    {
        return $this->container['processingOwner'];
    }

    /**
    * Sets processingOwner
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null $processingOwner processingOwner
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
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null
    */
    public function getFixedOwner()
    {
        return $this->container['fixedOwner'];
    }

    /**
    * Sets fixedOwner
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null $fixedOwner fixedOwner
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
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null
    */
    public function getResearchanddevelopOwner()
    {
        return $this->container['researchanddevelopOwner'];
    }

    /**
    * Sets researchanddevelopOwner
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null $researchanddevelopOwner researchanddevelopOwner
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
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null
    */
    public function getAnalyseOwner()
    {
        return $this->container['analyseOwner'];
    }

    /**
    * Sets analyseOwner
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null $analyseOwner analyseOwner
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
    *  计划开始时间。工作项的计划启动日期，用于项目进度管理和排期。
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
    * @param string|null $planStartDate 计划开始时间。工作项的计划启动日期，用于项目进度管理和排期。
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
    *  期望完成时间。工作项的预期交付日期，用于跟踪工作项是否按期完成。
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
    * @param string|null $expectDeliveryTime 期望完成时间。工作项的预期交付日期，用于跟踪工作项是否按期完成。
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
    *  计划测试结束时间。Bug类型工作项的计划测试完成日期，用于跟踪Bug修复后的测试进度。
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
    * @param string|null $planTestEndDate 计划测试结束时间。Bug类型工作项的计划测试完成日期，用于跟踪Bug修复后的测试进度。
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
    *  严重程度。Bug类型工作项的严重级别，用于评估Bug的影响范围和修复优先级。
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
    * @param string|null $severity 严重程度。Bug类型工作项的严重级别，用于评估Bug的影响范围和修复优先级。
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
    *  是否承诺。RR（原始需求）类型工作项的承诺状态标识，用于标记需求是否已承诺交付。
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
    * @param string|null $promised 是否承诺。RR（原始需求）类型工作项的承诺状态标识，用于标记需求是否已承诺交付。
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
    *  承接人。RR（原始需求）类型工作项的需求承接责任人，负责需求的分析和转化。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity[]|null
    */
    public function getRecipient()
    {
        return $this->container['recipient'];
    }

    /**
    * Sets recipient
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity[]|null $recipient 承接人。RR（原始需求）类型工作项的需求承接责任人，负责需求的分析和转化。
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
    *  无需研发原因。RR（原始需求）类型工作项不需要进行研发的原因说明。
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
    * @param string|null $sysNoDevelopReason 无需研发原因。RR（原始需求）类型工作项不需要进行研发的原因说明。
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
    *  价值特性。SF/FE类型工作项对应的业务价值特性描述，用于关联业务价值和技术实现。
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
    * @param string|null $valFeature 价值特性。SF/FE类型工作项对应的业务价值特性描述，用于关联业务价值和技术实现。
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
    *  功能场景。SF/FE类型工作项的功能应用场景描述，用于说明特性的使用场景和用户故事。
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
    * @param string|null $functionScene 功能场景。SF/FE类型工作项的功能应用场景描述，用于说明特性的使用场景和用户故事。
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

