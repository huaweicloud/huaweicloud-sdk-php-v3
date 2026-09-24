<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IssueCreateEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IssueCreateEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * title  **参数解释**： 工作项标题。 **约束限制**：  不涉及。 **取值范围**： 2~256个字符。 **默认取值**： 不涉及。
    * description  **参数解释**： 工作项描述字段。 **约束限制**： 不涉及。 **取值范围**： 0~500000个字符。 **默认取值**： 不涉及。
    * category  **参数解释**： 工作项类型编码。编辑工作项时，此字段必填、值为当前工作项正确的工作项类型，但不会更新此字段。 **约束限制**： 不涉及。 **取值范围**： 支持多种工作项类型，使用英文逗号分隔。 - 系统设备类项目：RR、SF、IR、SR、AR、Task、Bug - 独立软件类项目：RR、SF、IR、US、Task、Bug - 云服务类项目：RR、Epic、FE、US、Task、Bug **默认取值**： 不涉及。
    * categoryLayerId  **参数解释**： 工作项类型层级关系ID，此参数影响工作项的层级显示。通过[获取模型树配置信息](GetModelConfig.xml)获取，根据参数中的category在响应消息体中category_layer_config中找到对应的category_code，和category_code同级的id就是工作项类型层级关系ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * parentId  **参数解释**： 父工作项ID。 **约束限制**： 创建子工作项时必填，其他场景非必填。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * status  **参数解释**： 工作项状态code。可通过[查询工作项状态](ListIssueStatues.xml)接口获取，响应消息体中的**code**字段的值就是工作项状态code。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * assignee  assignee
    * recipient  **参数解释**： 原始需求承接人。 **约束限制**： 当工作项类型为RR时字段必填，其他工作项类型无此字段。
    * assignedCc  **参数解释**： 工作项抄送人，支持多个抄送人。 **约束限制**： 同一工作项最多支持50个抄送人。
    * planEndDate  **参数解释**： 工作项计划结束日期。 **约束限制**： 0~13个字符的数字字符串，可选负号前缀。 **取值范围**： 时间戳。 **默认取值**： 不涉及。
    * workload  **参数解释**： 工作项计划工时。 **约束限制**： 不涉及。 **取值范围**： 0~999999999.9中的数字字符串。 **默认取值**： 不涉及。
    * link  **参数解释**： 工作项关联项ID。 **约束限制**： 多个关联项用英文逗号分隔，同一工作项最多支持50个关联项。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * labels  **参数解释**： 工作项标签。 **约束限制**： 不涉及。
    * customFields  **参数解释**： 工作项自定义字段映射。用户添加的系统字段也在此列。 **约束限制**： 不涉及。
    * ir2feature  **参数解释**： IR和SF的关联字段。 **约束限制**： IR可以填写该字段。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * priority  **参数解释**： 工作项优先级。 **约束限制**： RR、SF、FE、IR、SR、AR、Task、Bug可以填写该字段。 **取值范围**： - 低：低优先级。 - 中：中优先级。 - 高：高优先级。 **默认取值**： 不涉及。
    * relatedNetworkSecurity  **参数解释**： 是否涉及网络安全。 **约束限制**： 仅研发需求有此字段。 **取值范围**： - yes：涉及网络安全。 - no：不涉及网络安全。 **默认取值**： 不涉及。
    * collaboratives  **参数解释**： 研发需求协同信息，协同任务ID，可通过[查询树状工作项](ShowIpdIssueTree.xml)接口获取，响应消息体中的**collaboratives**字段的值就是研发需求协同信息，协同任务ID。 **约束限制**： 协同任务ID。IR、SR、AR、US有此字段。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * businessDomain  **参数解释**： 领域字段。 **约束限制**：  FE、SF、IR、SR、AR、Bug有此字段。 **取值范围**： - software - soft-hardware - hardware - 性能 - 功能 - 运维 - 运营 - 用户体验 - 隐私保护 - 合规 - 韧性(可靠性/可用性) - 韧性(危险检测与相应恢复) - 透明 - 无害 - 安全 - API - 成本 - 可维护性 - 其他DFX - 可用性 - others **默认取值**： 不涉及。
    * planPi  **参数解释**： 工作项发布计划ID。 **约束限制**： 默认SR、AR、US、Task、Bug有此字段。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * submittedBy  **参数解释**： 工作项提出人。 **约束限制**： 仅RR、Bug有此字段。
    * ir2rr  **参数解释**： IR关联的RR的Id。 **约束限制**： 仅IR有此字段，多选时用英文逗号分隔。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * featureSet  **参数解释**： 特性集ID。 **约束限制**： 仅SF/FE有此字段。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * securityLevel  **参数解释**： 密级。低密级权限者不能访问高密级的工作项。可以通过[[查询字段列表](ListIpdProjectFields.xml)]接口获取，响应消息体中密级的**option**字段的值就是密级字段的可选值。 **约束限制**： 仅在涉密环境（SM）下存在此字段，非涉密环境下无此字段。涉密环境下必填。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'title' => 'string',
            'description' => 'string',
            'category' => 'string',
            'categoryLayerId' => 'string',
            'parentId' => 'string',
            'status' => 'string',
            'assignee' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity',
            'recipient' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity[]',
            'assignedCc' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity[]',
            'planEndDate' => 'string',
            'workload' => 'string',
            'link' => 'string',
            'labels' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\LabelEntity[]',
            'customFields' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\FieldCodeValuePair[]',
            'ir2feature' => 'string',
            'priority' => 'string',
            'relatedNetworkSecurity' => 'string',
            'collaboratives' => 'string',
            'businessDomain' => 'string',
            'planPi' => 'string',
            'submittedBy' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity[]',
            'ir2rr' => 'string',
            'featureSet' => 'string',
            'securityLevel' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * title  **参数解释**： 工作项标题。 **约束限制**：  不涉及。 **取值范围**： 2~256个字符。 **默认取值**： 不涉及。
    * description  **参数解释**： 工作项描述字段。 **约束限制**： 不涉及。 **取值范围**： 0~500000个字符。 **默认取值**： 不涉及。
    * category  **参数解释**： 工作项类型编码。编辑工作项时，此字段必填、值为当前工作项正确的工作项类型，但不会更新此字段。 **约束限制**： 不涉及。 **取值范围**： 支持多种工作项类型，使用英文逗号分隔。 - 系统设备类项目：RR、SF、IR、SR、AR、Task、Bug - 独立软件类项目：RR、SF、IR、US、Task、Bug - 云服务类项目：RR、Epic、FE、US、Task、Bug **默认取值**： 不涉及。
    * categoryLayerId  **参数解释**： 工作项类型层级关系ID，此参数影响工作项的层级显示。通过[获取模型树配置信息](GetModelConfig.xml)获取，根据参数中的category在响应消息体中category_layer_config中找到对应的category_code，和category_code同级的id就是工作项类型层级关系ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * parentId  **参数解释**： 父工作项ID。 **约束限制**： 创建子工作项时必填，其他场景非必填。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * status  **参数解释**： 工作项状态code。可通过[查询工作项状态](ListIssueStatues.xml)接口获取，响应消息体中的**code**字段的值就是工作项状态code。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * assignee  assignee
    * recipient  **参数解释**： 原始需求承接人。 **约束限制**： 当工作项类型为RR时字段必填，其他工作项类型无此字段。
    * assignedCc  **参数解释**： 工作项抄送人，支持多个抄送人。 **约束限制**： 同一工作项最多支持50个抄送人。
    * planEndDate  **参数解释**： 工作项计划结束日期。 **约束限制**： 0~13个字符的数字字符串，可选负号前缀。 **取值范围**： 时间戳。 **默认取值**： 不涉及。
    * workload  **参数解释**： 工作项计划工时。 **约束限制**： 不涉及。 **取值范围**： 0~999999999.9中的数字字符串。 **默认取值**： 不涉及。
    * link  **参数解释**： 工作项关联项ID。 **约束限制**： 多个关联项用英文逗号分隔，同一工作项最多支持50个关联项。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * labels  **参数解释**： 工作项标签。 **约束限制**： 不涉及。
    * customFields  **参数解释**： 工作项自定义字段映射。用户添加的系统字段也在此列。 **约束限制**： 不涉及。
    * ir2feature  **参数解释**： IR和SF的关联字段。 **约束限制**： IR可以填写该字段。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * priority  **参数解释**： 工作项优先级。 **约束限制**： RR、SF、FE、IR、SR、AR、Task、Bug可以填写该字段。 **取值范围**： - 低：低优先级。 - 中：中优先级。 - 高：高优先级。 **默认取值**： 不涉及。
    * relatedNetworkSecurity  **参数解释**： 是否涉及网络安全。 **约束限制**： 仅研发需求有此字段。 **取值范围**： - yes：涉及网络安全。 - no：不涉及网络安全。 **默认取值**： 不涉及。
    * collaboratives  **参数解释**： 研发需求协同信息，协同任务ID，可通过[查询树状工作项](ShowIpdIssueTree.xml)接口获取，响应消息体中的**collaboratives**字段的值就是研发需求协同信息，协同任务ID。 **约束限制**： 协同任务ID。IR、SR、AR、US有此字段。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * businessDomain  **参数解释**： 领域字段。 **约束限制**：  FE、SF、IR、SR、AR、Bug有此字段。 **取值范围**： - software - soft-hardware - hardware - 性能 - 功能 - 运维 - 运营 - 用户体验 - 隐私保护 - 合规 - 韧性(可靠性/可用性) - 韧性(危险检测与相应恢复) - 透明 - 无害 - 安全 - API - 成本 - 可维护性 - 其他DFX - 可用性 - others **默认取值**： 不涉及。
    * planPi  **参数解释**： 工作项发布计划ID。 **约束限制**： 默认SR、AR、US、Task、Bug有此字段。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * submittedBy  **参数解释**： 工作项提出人。 **约束限制**： 仅RR、Bug有此字段。
    * ir2rr  **参数解释**： IR关联的RR的Id。 **约束限制**： 仅IR有此字段，多选时用英文逗号分隔。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * featureSet  **参数解释**： 特性集ID。 **约束限制**： 仅SF/FE有此字段。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * securityLevel  **参数解释**： 密级。低密级权限者不能访问高密级的工作项。可以通过[[查询字段列表](ListIpdProjectFields.xml)]接口获取，响应消息体中密级的**option**字段的值就是密级字段的可选值。 **约束限制**： 仅在涉密环境（SM）下存在此字段，非涉密环境下无此字段。涉密环境下必填。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'title' => null,
        'description' => null,
        'category' => null,
        'categoryLayerId' => null,
        'parentId' => null,
        'status' => null,
        'assignee' => null,
        'recipient' => null,
        'assignedCc' => null,
        'planEndDate' => null,
        'workload' => null,
        'link' => null,
        'labels' => null,
        'customFields' => null,
        'ir2feature' => null,
        'priority' => null,
        'relatedNetworkSecurity' => null,
        'collaboratives' => null,
        'businessDomain' => null,
        'planPi' => null,
        'submittedBy' => null,
        'ir2rr' => null,
        'featureSet' => null,
        'securityLevel' => null
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
    * title  **参数解释**： 工作项标题。 **约束限制**：  不涉及。 **取值范围**： 2~256个字符。 **默认取值**： 不涉及。
    * description  **参数解释**： 工作项描述字段。 **约束限制**： 不涉及。 **取值范围**： 0~500000个字符。 **默认取值**： 不涉及。
    * category  **参数解释**： 工作项类型编码。编辑工作项时，此字段必填、值为当前工作项正确的工作项类型，但不会更新此字段。 **约束限制**： 不涉及。 **取值范围**： 支持多种工作项类型，使用英文逗号分隔。 - 系统设备类项目：RR、SF、IR、SR、AR、Task、Bug - 独立软件类项目：RR、SF、IR、US、Task、Bug - 云服务类项目：RR、Epic、FE、US、Task、Bug **默认取值**： 不涉及。
    * categoryLayerId  **参数解释**： 工作项类型层级关系ID，此参数影响工作项的层级显示。通过[获取模型树配置信息](GetModelConfig.xml)获取，根据参数中的category在响应消息体中category_layer_config中找到对应的category_code，和category_code同级的id就是工作项类型层级关系ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * parentId  **参数解释**： 父工作项ID。 **约束限制**： 创建子工作项时必填，其他场景非必填。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * status  **参数解释**： 工作项状态code。可通过[查询工作项状态](ListIssueStatues.xml)接口获取，响应消息体中的**code**字段的值就是工作项状态code。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * assignee  assignee
    * recipient  **参数解释**： 原始需求承接人。 **约束限制**： 当工作项类型为RR时字段必填，其他工作项类型无此字段。
    * assignedCc  **参数解释**： 工作项抄送人，支持多个抄送人。 **约束限制**： 同一工作项最多支持50个抄送人。
    * planEndDate  **参数解释**： 工作项计划结束日期。 **约束限制**： 0~13个字符的数字字符串，可选负号前缀。 **取值范围**： 时间戳。 **默认取值**： 不涉及。
    * workload  **参数解释**： 工作项计划工时。 **约束限制**： 不涉及。 **取值范围**： 0~999999999.9中的数字字符串。 **默认取值**： 不涉及。
    * link  **参数解释**： 工作项关联项ID。 **约束限制**： 多个关联项用英文逗号分隔，同一工作项最多支持50个关联项。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * labels  **参数解释**： 工作项标签。 **约束限制**： 不涉及。
    * customFields  **参数解释**： 工作项自定义字段映射。用户添加的系统字段也在此列。 **约束限制**： 不涉及。
    * ir2feature  **参数解释**： IR和SF的关联字段。 **约束限制**： IR可以填写该字段。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * priority  **参数解释**： 工作项优先级。 **约束限制**： RR、SF、FE、IR、SR、AR、Task、Bug可以填写该字段。 **取值范围**： - 低：低优先级。 - 中：中优先级。 - 高：高优先级。 **默认取值**： 不涉及。
    * relatedNetworkSecurity  **参数解释**： 是否涉及网络安全。 **约束限制**： 仅研发需求有此字段。 **取值范围**： - yes：涉及网络安全。 - no：不涉及网络安全。 **默认取值**： 不涉及。
    * collaboratives  **参数解释**： 研发需求协同信息，协同任务ID，可通过[查询树状工作项](ShowIpdIssueTree.xml)接口获取，响应消息体中的**collaboratives**字段的值就是研发需求协同信息，协同任务ID。 **约束限制**： 协同任务ID。IR、SR、AR、US有此字段。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * businessDomain  **参数解释**： 领域字段。 **约束限制**：  FE、SF、IR、SR、AR、Bug有此字段。 **取值范围**： - software - soft-hardware - hardware - 性能 - 功能 - 运维 - 运营 - 用户体验 - 隐私保护 - 合规 - 韧性(可靠性/可用性) - 韧性(危险检测与相应恢复) - 透明 - 无害 - 安全 - API - 成本 - 可维护性 - 其他DFX - 可用性 - others **默认取值**： 不涉及。
    * planPi  **参数解释**： 工作项发布计划ID。 **约束限制**： 默认SR、AR、US、Task、Bug有此字段。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * submittedBy  **参数解释**： 工作项提出人。 **约束限制**： 仅RR、Bug有此字段。
    * ir2rr  **参数解释**： IR关联的RR的Id。 **约束限制**： 仅IR有此字段，多选时用英文逗号分隔。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * featureSet  **参数解释**： 特性集ID。 **约束限制**： 仅SF/FE有此字段。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * securityLevel  **参数解释**： 密级。低密级权限者不能访问高密级的工作项。可以通过[[查询字段列表](ListIpdProjectFields.xml)]接口获取，响应消息体中密级的**option**字段的值就是密级字段的可选值。 **约束限制**： 仅在涉密环境（SM）下存在此字段，非涉密环境下无此字段。涉密环境下必填。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'title' => 'title',
            'description' => 'description',
            'category' => 'category',
            'categoryLayerId' => 'category_layer_id',
            'parentId' => 'parent_id',
            'status' => 'status',
            'assignee' => 'assignee',
            'recipient' => 'recipient',
            'assignedCc' => 'assigned_cc',
            'planEndDate' => 'plan_end_date',
            'workload' => 'workload',
            'link' => 'link',
            'labels' => 'labels',
            'customFields' => 'custom_fields',
            'ir2feature' => 'ir2feature',
            'priority' => 'priority',
            'relatedNetworkSecurity' => 'related_network_security',
            'collaboratives' => 'collaboratives',
            'businessDomain' => 'business_domain',
            'planPi' => 'plan_pi',
            'submittedBy' => 'submitted_by',
            'ir2rr' => 'ir2rr',
            'featureSet' => 'feature_set',
            'securityLevel' => 'security_level'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * title  **参数解释**： 工作项标题。 **约束限制**：  不涉及。 **取值范围**： 2~256个字符。 **默认取值**： 不涉及。
    * description  **参数解释**： 工作项描述字段。 **约束限制**： 不涉及。 **取值范围**： 0~500000个字符。 **默认取值**： 不涉及。
    * category  **参数解释**： 工作项类型编码。编辑工作项时，此字段必填、值为当前工作项正确的工作项类型，但不会更新此字段。 **约束限制**： 不涉及。 **取值范围**： 支持多种工作项类型，使用英文逗号分隔。 - 系统设备类项目：RR、SF、IR、SR、AR、Task、Bug - 独立软件类项目：RR、SF、IR、US、Task、Bug - 云服务类项目：RR、Epic、FE、US、Task、Bug **默认取值**： 不涉及。
    * categoryLayerId  **参数解释**： 工作项类型层级关系ID，此参数影响工作项的层级显示。通过[获取模型树配置信息](GetModelConfig.xml)获取，根据参数中的category在响应消息体中category_layer_config中找到对应的category_code，和category_code同级的id就是工作项类型层级关系ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * parentId  **参数解释**： 父工作项ID。 **约束限制**： 创建子工作项时必填，其他场景非必填。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * status  **参数解释**： 工作项状态code。可通过[查询工作项状态](ListIssueStatues.xml)接口获取，响应消息体中的**code**字段的值就是工作项状态code。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * assignee  assignee
    * recipient  **参数解释**： 原始需求承接人。 **约束限制**： 当工作项类型为RR时字段必填，其他工作项类型无此字段。
    * assignedCc  **参数解释**： 工作项抄送人，支持多个抄送人。 **约束限制**： 同一工作项最多支持50个抄送人。
    * planEndDate  **参数解释**： 工作项计划结束日期。 **约束限制**： 0~13个字符的数字字符串，可选负号前缀。 **取值范围**： 时间戳。 **默认取值**： 不涉及。
    * workload  **参数解释**： 工作项计划工时。 **约束限制**： 不涉及。 **取值范围**： 0~999999999.9中的数字字符串。 **默认取值**： 不涉及。
    * link  **参数解释**： 工作项关联项ID。 **约束限制**： 多个关联项用英文逗号分隔，同一工作项最多支持50个关联项。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * labels  **参数解释**： 工作项标签。 **约束限制**： 不涉及。
    * customFields  **参数解释**： 工作项自定义字段映射。用户添加的系统字段也在此列。 **约束限制**： 不涉及。
    * ir2feature  **参数解释**： IR和SF的关联字段。 **约束限制**： IR可以填写该字段。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * priority  **参数解释**： 工作项优先级。 **约束限制**： RR、SF、FE、IR、SR、AR、Task、Bug可以填写该字段。 **取值范围**： - 低：低优先级。 - 中：中优先级。 - 高：高优先级。 **默认取值**： 不涉及。
    * relatedNetworkSecurity  **参数解释**： 是否涉及网络安全。 **约束限制**： 仅研发需求有此字段。 **取值范围**： - yes：涉及网络安全。 - no：不涉及网络安全。 **默认取值**： 不涉及。
    * collaboratives  **参数解释**： 研发需求协同信息，协同任务ID，可通过[查询树状工作项](ShowIpdIssueTree.xml)接口获取，响应消息体中的**collaboratives**字段的值就是研发需求协同信息，协同任务ID。 **约束限制**： 协同任务ID。IR、SR、AR、US有此字段。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * businessDomain  **参数解释**： 领域字段。 **约束限制**：  FE、SF、IR、SR、AR、Bug有此字段。 **取值范围**： - software - soft-hardware - hardware - 性能 - 功能 - 运维 - 运营 - 用户体验 - 隐私保护 - 合规 - 韧性(可靠性/可用性) - 韧性(危险检测与相应恢复) - 透明 - 无害 - 安全 - API - 成本 - 可维护性 - 其他DFX - 可用性 - others **默认取值**： 不涉及。
    * planPi  **参数解释**： 工作项发布计划ID。 **约束限制**： 默认SR、AR、US、Task、Bug有此字段。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * submittedBy  **参数解释**： 工作项提出人。 **约束限制**： 仅RR、Bug有此字段。
    * ir2rr  **参数解释**： IR关联的RR的Id。 **约束限制**： 仅IR有此字段，多选时用英文逗号分隔。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * featureSet  **参数解释**： 特性集ID。 **约束限制**： 仅SF/FE有此字段。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * securityLevel  **参数解释**： 密级。低密级权限者不能访问高密级的工作项。可以通过[[查询字段列表](ListIpdProjectFields.xml)]接口获取，响应消息体中密级的**option**字段的值就是密级字段的可选值。 **约束限制**： 仅在涉密环境（SM）下存在此字段，非涉密环境下无此字段。涉密环境下必填。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'title' => 'setTitle',
            'description' => 'setDescription',
            'category' => 'setCategory',
            'categoryLayerId' => 'setCategoryLayerId',
            'parentId' => 'setParentId',
            'status' => 'setStatus',
            'assignee' => 'setAssignee',
            'recipient' => 'setRecipient',
            'assignedCc' => 'setAssignedCc',
            'planEndDate' => 'setPlanEndDate',
            'workload' => 'setWorkload',
            'link' => 'setLink',
            'labels' => 'setLabels',
            'customFields' => 'setCustomFields',
            'ir2feature' => 'setIr2feature',
            'priority' => 'setPriority',
            'relatedNetworkSecurity' => 'setRelatedNetworkSecurity',
            'collaboratives' => 'setCollaboratives',
            'businessDomain' => 'setBusinessDomain',
            'planPi' => 'setPlanPi',
            'submittedBy' => 'setSubmittedBy',
            'ir2rr' => 'setIr2rr',
            'featureSet' => 'setFeatureSet',
            'securityLevel' => 'setSecurityLevel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * title  **参数解释**： 工作项标题。 **约束限制**：  不涉及。 **取值范围**： 2~256个字符。 **默认取值**： 不涉及。
    * description  **参数解释**： 工作项描述字段。 **约束限制**： 不涉及。 **取值范围**： 0~500000个字符。 **默认取值**： 不涉及。
    * category  **参数解释**： 工作项类型编码。编辑工作项时，此字段必填、值为当前工作项正确的工作项类型，但不会更新此字段。 **约束限制**： 不涉及。 **取值范围**： 支持多种工作项类型，使用英文逗号分隔。 - 系统设备类项目：RR、SF、IR、SR、AR、Task、Bug - 独立软件类项目：RR、SF、IR、US、Task、Bug - 云服务类项目：RR、Epic、FE、US、Task、Bug **默认取值**： 不涉及。
    * categoryLayerId  **参数解释**： 工作项类型层级关系ID，此参数影响工作项的层级显示。通过[获取模型树配置信息](GetModelConfig.xml)获取，根据参数中的category在响应消息体中category_layer_config中找到对应的category_code，和category_code同级的id就是工作项类型层级关系ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * parentId  **参数解释**： 父工作项ID。 **约束限制**： 创建子工作项时必填，其他场景非必填。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * status  **参数解释**： 工作项状态code。可通过[查询工作项状态](ListIssueStatues.xml)接口获取，响应消息体中的**code**字段的值就是工作项状态code。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * assignee  assignee
    * recipient  **参数解释**： 原始需求承接人。 **约束限制**： 当工作项类型为RR时字段必填，其他工作项类型无此字段。
    * assignedCc  **参数解释**： 工作项抄送人，支持多个抄送人。 **约束限制**： 同一工作项最多支持50个抄送人。
    * planEndDate  **参数解释**： 工作项计划结束日期。 **约束限制**： 0~13个字符的数字字符串，可选负号前缀。 **取值范围**： 时间戳。 **默认取值**： 不涉及。
    * workload  **参数解释**： 工作项计划工时。 **约束限制**： 不涉及。 **取值范围**： 0~999999999.9中的数字字符串。 **默认取值**： 不涉及。
    * link  **参数解释**： 工作项关联项ID。 **约束限制**： 多个关联项用英文逗号分隔，同一工作项最多支持50个关联项。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * labels  **参数解释**： 工作项标签。 **约束限制**： 不涉及。
    * customFields  **参数解释**： 工作项自定义字段映射。用户添加的系统字段也在此列。 **约束限制**： 不涉及。
    * ir2feature  **参数解释**： IR和SF的关联字段。 **约束限制**： IR可以填写该字段。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * priority  **参数解释**： 工作项优先级。 **约束限制**： RR、SF、FE、IR、SR、AR、Task、Bug可以填写该字段。 **取值范围**： - 低：低优先级。 - 中：中优先级。 - 高：高优先级。 **默认取值**： 不涉及。
    * relatedNetworkSecurity  **参数解释**： 是否涉及网络安全。 **约束限制**： 仅研发需求有此字段。 **取值范围**： - yes：涉及网络安全。 - no：不涉及网络安全。 **默认取值**： 不涉及。
    * collaboratives  **参数解释**： 研发需求协同信息，协同任务ID，可通过[查询树状工作项](ShowIpdIssueTree.xml)接口获取，响应消息体中的**collaboratives**字段的值就是研发需求协同信息，协同任务ID。 **约束限制**： 协同任务ID。IR、SR、AR、US有此字段。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * businessDomain  **参数解释**： 领域字段。 **约束限制**：  FE、SF、IR、SR、AR、Bug有此字段。 **取值范围**： - software - soft-hardware - hardware - 性能 - 功能 - 运维 - 运营 - 用户体验 - 隐私保护 - 合规 - 韧性(可靠性/可用性) - 韧性(危险检测与相应恢复) - 透明 - 无害 - 安全 - API - 成本 - 可维护性 - 其他DFX - 可用性 - others **默认取值**： 不涉及。
    * planPi  **参数解释**： 工作项发布计划ID。 **约束限制**： 默认SR、AR、US、Task、Bug有此字段。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * submittedBy  **参数解释**： 工作项提出人。 **约束限制**： 仅RR、Bug有此字段。
    * ir2rr  **参数解释**： IR关联的RR的Id。 **约束限制**： 仅IR有此字段，多选时用英文逗号分隔。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * featureSet  **参数解释**： 特性集ID。 **约束限制**： 仅SF/FE有此字段。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * securityLevel  **参数解释**： 密级。低密级权限者不能访问高密级的工作项。可以通过[[查询字段列表](ListIpdProjectFields.xml)]接口获取，响应消息体中密级的**option**字段的值就是密级字段的可选值。 **约束限制**： 仅在涉密环境（SM）下存在此字段，非涉密环境下无此字段。涉密环境下必填。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'title' => 'getTitle',
            'description' => 'getDescription',
            'category' => 'getCategory',
            'categoryLayerId' => 'getCategoryLayerId',
            'parentId' => 'getParentId',
            'status' => 'getStatus',
            'assignee' => 'getAssignee',
            'recipient' => 'getRecipient',
            'assignedCc' => 'getAssignedCc',
            'planEndDate' => 'getPlanEndDate',
            'workload' => 'getWorkload',
            'link' => 'getLink',
            'labels' => 'getLabels',
            'customFields' => 'getCustomFields',
            'ir2feature' => 'getIr2feature',
            'priority' => 'getPriority',
            'relatedNetworkSecurity' => 'getRelatedNetworkSecurity',
            'collaboratives' => 'getCollaboratives',
            'businessDomain' => 'getBusinessDomain',
            'planPi' => 'getPlanPi',
            'submittedBy' => 'getSubmittedBy',
            'ir2rr' => 'getIr2rr',
            'featureSet' => 'getFeatureSet',
            'securityLevel' => 'getSecurityLevel'
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['categoryLayerId'] = isset($data['categoryLayerId']) ? $data['categoryLayerId'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['assignee'] = isset($data['assignee']) ? $data['assignee'] : null;
        $this->container['recipient'] = isset($data['recipient']) ? $data['recipient'] : null;
        $this->container['assignedCc'] = isset($data['assignedCc']) ? $data['assignedCc'] : null;
        $this->container['planEndDate'] = isset($data['planEndDate']) ? $data['planEndDate'] : null;
        $this->container['workload'] = isset($data['workload']) ? $data['workload'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['customFields'] = isset($data['customFields']) ? $data['customFields'] : null;
        $this->container['ir2feature'] = isset($data['ir2feature']) ? $data['ir2feature'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['relatedNetworkSecurity'] = isset($data['relatedNetworkSecurity']) ? $data['relatedNetworkSecurity'] : null;
        $this->container['collaboratives'] = isset($data['collaboratives']) ? $data['collaboratives'] : null;
        $this->container['businessDomain'] = isset($data['businessDomain']) ? $data['businessDomain'] : null;
        $this->container['planPi'] = isset($data['planPi']) ? $data['planPi'] : null;
        $this->container['submittedBy'] = isset($data['submittedBy']) ? $data['submittedBy'] : null;
        $this->container['ir2rr'] = isset($data['ir2rr']) ? $data['ir2rr'] : null;
        $this->container['featureSet'] = isset($data['featureSet']) ? $data['featureSet'] : null;
        $this->container['securityLevel'] = isset($data['securityLevel']) ? $data['securityLevel'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
            if ((mb_strlen($this->container['title']) > 256)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['title']) < 1)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
            if ((mb_strlen($this->container['description']) > 50000)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 50000.";
            }
            if ((mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
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
            if (!is_null($this->container['parentId']) && (mb_strlen($this->container['parentId']) < 0)) {
                $invalidProperties[] = "invalid value for 'parentId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            if ((mb_strlen($this->container['status']) > 32)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['status']) < 2)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['assignee'] === null) {
            $invalidProperties[] = "'assignee' can't be null";
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
    * Gets title
    *  **参数解释**： 工作项标题。 **约束限制**：  不涉及。 **取值范围**： 2~256个字符。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string $title **参数解释**： 工作项标题。 **约束限制**：  不涉及。 **取值范围**： 2~256个字符。 **默认取值**： 不涉及。
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
    *  **参数解释**： 工作项描述字段。 **约束限制**： 不涉及。 **取值范围**： 0~500000个字符。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description **参数解释**： 工作项描述字段。 **约束限制**： 不涉及。 **取值范围**： 0~500000个字符。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets category
    *  **参数解释**： 工作项类型编码。编辑工作项时，此字段必填、值为当前工作项正确的工作项类型，但不会更新此字段。 **约束限制**： 不涉及。 **取值范围**： 支持多种工作项类型，使用英文逗号分隔。 - 系统设备类项目：RR、SF、IR、SR、AR、Task、Bug - 独立软件类项目：RR、SF、IR、US、Task、Bug - 云服务类项目：RR、Epic、FE、US、Task、Bug **默认取值**： 不涉及。
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
    * @param string $category **参数解释**： 工作项类型编码。编辑工作项时，此字段必填、值为当前工作项正确的工作项类型，但不会更新此字段。 **约束限制**： 不涉及。 **取值范围**： 支持多种工作项类型，使用英文逗号分隔。 - 系统设备类项目：RR、SF、IR、SR、AR、Task、Bug - 独立软件类项目：RR、SF、IR、US、Task、Bug - 云服务类项目：RR、Epic、FE、US、Task、Bug **默认取值**： 不涉及。
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
    *  **参数解释**： 工作项类型层级关系ID，此参数影响工作项的层级显示。通过[获取模型树配置信息](GetModelConfig.xml)获取，根据参数中的category在响应消息体中category_layer_config中找到对应的category_code，和category_code同级的id就是工作项类型层级关系ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string $categoryLayerId **参数解释**： 工作项类型层级关系ID，此参数影响工作项的层级显示。通过[获取模型树配置信息](GetModelConfig.xml)获取，根据参数中的category在响应消息体中category_layer_config中找到对应的category_code，和category_code同级的id就是工作项类型层级关系ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 父工作项ID。 **约束限制**： 创建子工作项时必填，其他场景非必填。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $parentId **参数解释**： 父工作项ID。 **约束限制**： 创建子工作项时必填，其他场景非必填。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 工作项状态code。可通过[查询工作项状态](ListIssueStatues.xml)接口获取，响应消息体中的**code**字段的值就是工作项状态code。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status **参数解释**： 工作项状态code。可通过[查询工作项状态](ListIssueStatues.xml)接口获取，响应消息体中的**code**字段的值就是工作项状态code。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity
    */
    public function getAssignee()
    {
        return $this->container['assignee'];
    }

    /**
    * Sets assignee
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity $assignee assignee
    *
    * @return $this
    */
    public function setAssignee($assignee)
    {
        $this->container['assignee'] = $assignee;
        return $this;
    }

    /**
    * Gets recipient
    *  **参数解释**： 原始需求承接人。 **约束限制**： 当工作项类型为RR时字段必填，其他工作项类型无此字段。
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
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity[]|null $recipient **参数解释**： 原始需求承接人。 **约束限制**： 当工作项类型为RR时字段必填，其他工作项类型无此字段。
    *
    * @return $this
    */
    public function setRecipient($recipient)
    {
        $this->container['recipient'] = $recipient;
        return $this;
    }

    /**
    * Gets assignedCc
    *  **参数解释**： 工作项抄送人，支持多个抄送人。 **约束限制**： 同一工作项最多支持50个抄送人。
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
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity[]|null $assignedCc **参数解释**： 工作项抄送人，支持多个抄送人。 **约束限制**： 同一工作项最多支持50个抄送人。
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
    *  **参数解释**： 工作项计划结束日期。 **约束限制**： 0~13个字符的数字字符串，可选负号前缀。 **取值范围**： 时间戳。 **默认取值**： 不涉及。
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
    * @param string|null $planEndDate **参数解释**： 工作项计划结束日期。 **约束限制**： 0~13个字符的数字字符串，可选负号前缀。 **取值范围**： 时间戳。 **默认取值**： 不涉及。
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
    *  **参数解释**： 工作项计划工时。 **约束限制**： 不涉及。 **取值范围**： 0~999999999.9中的数字字符串。 **默认取值**： 不涉及。
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
    * @param string|null $workload **参数解释**： 工作项计划工时。 **约束限制**： 不涉及。 **取值范围**： 0~999999999.9中的数字字符串。 **默认取值**： 不涉及。
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
    *  **参数解释**： 工作项关联项ID。 **约束限制**： 多个关联项用英文逗号分隔，同一工作项最多支持50个关联项。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $link **参数解释**： 工作项关联项ID。 **约束限制**： 多个关联项用英文逗号分隔，同一工作项最多支持50个关联项。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 工作项标签。 **约束限制**： 不涉及。
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
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\LabelEntity[]|null $labels **参数解释**： 工作项标签。 **约束限制**： 不涉及。
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
    *  **参数解释**： 工作项自定义字段映射。用户添加的系统字段也在此列。 **约束限制**： 不涉及。
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
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\FieldCodeValuePair[]|null $customFields **参数解释**： 工作项自定义字段映射。用户添加的系统字段也在此列。 **约束限制**： 不涉及。
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
    * Gets priority
    *  **参数解释**： 工作项优先级。 **约束限制**： RR、SF、FE、IR、SR、AR、Task、Bug可以填写该字段。 **取值范围**： - 低：低优先级。 - 中：中优先级。 - 高：高优先级。 **默认取值**： 不涉及。
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
    * @param string|null $priority **参数解释**： 工作项优先级。 **约束限制**： RR、SF、FE、IR、SR、AR、Task、Bug可以填写该字段。 **取值范围**： - 低：低优先级。 - 中：中优先级。 - 高：高优先级。 **默认取值**： 不涉及。
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
    *  **参数解释**： 是否涉及网络安全。 **约束限制**： 仅研发需求有此字段。 **取值范围**： - yes：涉及网络安全。 - no：不涉及网络安全。 **默认取值**： 不涉及。
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
    * @param string|null $relatedNetworkSecurity **参数解释**： 是否涉及网络安全。 **约束限制**： 仅研发需求有此字段。 **取值范围**： - yes：涉及网络安全。 - no：不涉及网络安全。 **默认取值**： 不涉及。
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
    *  **参数解释**： 研发需求协同信息，协同任务ID，可通过[查询树状工作项](ShowIpdIssueTree.xml)接口获取，响应消息体中的**collaboratives**字段的值就是研发需求协同信息，协同任务ID。 **约束限制**： 协同任务ID。IR、SR、AR、US有此字段。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $collaboratives **参数解释**： 研发需求协同信息，协同任务ID，可通过[查询树状工作项](ShowIpdIssueTree.xml)接口获取，响应消息体中的**collaboratives**字段的值就是研发需求协同信息，协同任务ID。 **约束限制**： 协同任务ID。IR、SR、AR、US有此字段。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 领域字段。 **约束限制**：  FE、SF、IR、SR、AR、Bug有此字段。 **取值范围**： - software - soft-hardware - hardware - 性能 - 功能 - 运维 - 运营 - 用户体验 - 隐私保护 - 合规 - 韧性(可靠性/可用性) - 韧性(危险检测与相应恢复) - 透明 - 无害 - 安全 - API - 成本 - 可维护性 - 其他DFX - 可用性 - others **默认取值**： 不涉及。
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
    * @param string|null $businessDomain **参数解释**： 领域字段。 **约束限制**：  FE、SF、IR、SR、AR、Bug有此字段。 **取值范围**： - software - soft-hardware - hardware - 性能 - 功能 - 运维 - 运营 - 用户体验 - 隐私保护 - 合规 - 韧性(可靠性/可用性) - 韧性(危险检测与相应恢复) - 透明 - 无害 - 安全 - API - 成本 - 可维护性 - 其他DFX - 可用性 - others **默认取值**： 不涉及。
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
    *  **参数解释**： 工作项发布计划ID。 **约束限制**： 默认SR、AR、US、Task、Bug有此字段。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $planPi **参数解释**： 工作项发布计划ID。 **约束限制**： 默认SR、AR、US、Task、Bug有此字段。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setPlanPi($planPi)
    {
        $this->container['planPi'] = $planPi;
        return $this;
    }

    /**
    * Gets submittedBy
    *  **参数解释**： 工作项提出人。 **约束限制**： 仅RR、Bug有此字段。
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
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity[]|null $submittedBy **参数解释**： 工作项提出人。 **约束限制**： 仅RR、Bug有此字段。
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
    *  **参数解释**： IR关联的RR的Id。 **约束限制**： 仅IR有此字段，多选时用英文逗号分隔。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $ir2rr **参数解释**： IR关联的RR的Id。 **约束限制**： 仅IR有此字段，多选时用英文逗号分隔。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 特性集ID。 **约束限制**： 仅SF/FE有此字段。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $featureSet **参数解释**： 特性集ID。 **约束限制**： 仅SF/FE有此字段。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setFeatureSet($featureSet)
    {
        $this->container['featureSet'] = $featureSet;
        return $this;
    }

    /**
    * Gets securityLevel
    *  **参数解释**： 密级。低密级权限者不能访问高密级的工作项。可以通过[[查询字段列表](ListIpdProjectFields.xml)]接口获取，响应消息体中密级的**option**字段的值就是密级字段的可选值。 **约束限制**： 仅在涉密环境（SM）下存在此字段，非涉密环境下无此字段。涉密环境下必填。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $securityLevel **参数解释**： 密级。低密级权限者不能访问高密级的工作项。可以通过[[查询字段列表](ListIpdProjectFields.xml)]接口获取，响应消息体中密级的**option**字段的值就是密级字段的可选值。 **约束限制**： 仅在涉密环境（SM）下存在此字段，非涉密环境下无此字段。涉密环境下必填。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setSecurityLevel($securityLevel)
    {
        $this->container['securityLevel'] = $securityLevel;
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

