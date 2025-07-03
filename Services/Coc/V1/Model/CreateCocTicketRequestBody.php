<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateCocTicketRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateCocTicketRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * title  **参数解释：** 工单标题。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * changeNotes  **参数解释：** 变更单描述。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 问题单描述信息。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * enterpriseProject  **参数解释：** 企业项目ID **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 0
    * changeType  **参数解释：** 变更类型。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。 **取值范围：** 枚举值 change_type_conventional：常规变更 change_type_urgentu：紧急变更 **默认取值：** 不涉及
    * level  **参数解释：** 工单级别。 **约束限制：** 不涉及 **取值范围：** 当ticket_type为change创建变更单时，枚举值 change_level_010 -- A级变更 change_level_020 -- B级变更 change_level_030 -- C级变更 change_level_040 -- D级变更 当ticket_type为issues_mgmt创建问题单时，枚举值 issues_level_1000 -- 致命 issues_level_2000 -- 严重 issues_level_3000 -- 一般 issues_level_4000 -- 提示 **默认取值：** 不涉及
    * ticketType  **参数解释：** 问题单类型，通过访问 云运维中心-->基础配置-->流程管理页签下问题流程-->问题类别可查询所有可传递的问题类型，此处传递问题类型ID。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * changeScheme  **参数解释：** 任务类型，可选作业或者变更指导书两种。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。当取值为change_scheme_guides时，请求参数change_guides必填。当取值为change_scheme_runbook时，参数plan_task_sub_type、plan_task_id、plan_task_name和plan_task_params必填。 **取值范围：** 枚举值 change_scheme_runbook：作业 change_scheme_guides：变更指导书 **默认取值：** 不涉及
    * changeGuides  **参数解释：** 变更指导书ID。 **约束限制：** 当ticket_type为change创建变更单，且任务选择变更指导书时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * commitUploadAttachment  **参数解释：** 问题单附件，上传附件ID。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * regions  **参数解释：** 问题单所属Region，此处传RegionID，多个Region用英文逗号隔开。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * changeSceneId  **参数解释：** 变更场景。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。 **取值范围：** 取配置页面【流程管理】下“变更场景”TAB页中列表属性ID列的值，示例：GOCMLL06 **默认取值：** 不涉及
    * currentCloudServiceId  **参数解释：** 归属应用。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * rootCauseCloudService  **参数解释：** 归属应用。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * source  **参数解释：** 问题单来源。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 当ticket_type为issues_mgmt创建问题单时，枚举值 issues_mgmt_associated_type_1000 -- 事件 issues_mgmt_associated_type_4000 -- 运维主动发现 issues_mgmt_associated_type_2000 -- 告警 issues_mgmt_associated_type_3000 -- WarRoom **默认取值：** 不涉及
    * sourceId  **参数解释：** 问题单来源工单单号。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。当source的值为issues_mgmt_associated_type_1000、issues_mgmt_associated_type_2000或issues_mgmt_associated_type_3000时，必填。需要填写关联的工单单号。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * fountTime  **参数解释：** 发现时间，时间戳。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * virtualScheduleType  **参数解释：** 问题单处理人类型。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段必填。 **取值范围：** 当ticket_type为issues_mgmt创建问题单时，枚举值 issues_mgmt_virtual_schedule_type_1000 -- 排班 issues_mgmt_virtual_schedule_type_2000 -- 个人 **默认取值：** 不涉及
    * issueContactPerson  **参数解释：** 问题单责任人工号ID。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。如需指定问题单责任人，则该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * scheduleScenes  **参数解释：** 问题单责任人从排班中获取，该值为排班场景ID。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * virtualScheduleRole  **参数解释：** 问题单责任人从排班中获取，该值为排班角色ID。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * locationId  **参数解释：** 变更区域ID。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * planTaskSubType  **参数解释：** 预案子类型。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。当任务类型change_scheme取值为change_scheme_runbook时，该值必填。 **取值范围：** 枚举值 CUSTOMIZATION：自定义作业 COMMUNAL：公共作业 **默认取值：** 不涉及
    * planTaskId  **参数解释：** 需要执行的作业ID。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。当任务类型change_scheme取值为change_scheme_runbook时，该值必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * planTaskName  **参数解释：** 需要执行的作业名称。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。当任务类型change_scheme取值为change_scheme_runbook时，该值必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * planTaskParams  **参数解释：** 执行作业时所需的参数信息。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。当任务类型change_scheme取值为change_scheme_runbook时，该值必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * isStartProcess  **参数解释：** 是否启动流程，当此值为false时，创建出来的工单为草稿状态。此值默认为true，创建出来的工单状态为未受理状态。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * subTickets  **参数解释：** 变更子单的信息，包含变更单涉及的服务和Region信息。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填且有效，当ticket_type非change时，该字段可置空。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'title' => 'string',
            'changeNotes' => 'string',
            'description' => 'string',
            'enterpriseProject' => 'string',
            'changeType' => 'string',
            'level' => 'string',
            'ticketType' => 'string',
            'changeScheme' => 'string',
            'changeGuides' => 'string',
            'commitUploadAttachment' => 'string',
            'regions' => 'string',
            'changeSceneId' => 'string',
            'currentCloudServiceId' => 'string',
            'rootCauseCloudService' => 'string',
            'source' => 'string',
            'sourceId' => 'string',
            'fountTime' => 'int',
            'virtualScheduleType' => 'string',
            'issueContactPerson' => 'string',
            'scheduleScenes' => 'string',
            'virtualScheduleRole' => 'string',
            'locationId' => 'string',
            'planTaskSubType' => 'string',
            'planTaskId' => 'string',
            'planTaskName' => 'string',
            'planTaskParams' => 'string',
            'isStartProcess' => 'bool',
            'subTickets' => '\HuaweiCloud\SDK\Coc\V1\Model\TicketCreateSubTicketInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * title  **参数解释：** 工单标题。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * changeNotes  **参数解释：** 变更单描述。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 问题单描述信息。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * enterpriseProject  **参数解释：** 企业项目ID **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 0
    * changeType  **参数解释：** 变更类型。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。 **取值范围：** 枚举值 change_type_conventional：常规变更 change_type_urgentu：紧急变更 **默认取值：** 不涉及
    * level  **参数解释：** 工单级别。 **约束限制：** 不涉及 **取值范围：** 当ticket_type为change创建变更单时，枚举值 change_level_010 -- A级变更 change_level_020 -- B级变更 change_level_030 -- C级变更 change_level_040 -- D级变更 当ticket_type为issues_mgmt创建问题单时，枚举值 issues_level_1000 -- 致命 issues_level_2000 -- 严重 issues_level_3000 -- 一般 issues_level_4000 -- 提示 **默认取值：** 不涉及
    * ticketType  **参数解释：** 问题单类型，通过访问 云运维中心-->基础配置-->流程管理页签下问题流程-->问题类别可查询所有可传递的问题类型，此处传递问题类型ID。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * changeScheme  **参数解释：** 任务类型，可选作业或者变更指导书两种。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。当取值为change_scheme_guides时，请求参数change_guides必填。当取值为change_scheme_runbook时，参数plan_task_sub_type、plan_task_id、plan_task_name和plan_task_params必填。 **取值范围：** 枚举值 change_scheme_runbook：作业 change_scheme_guides：变更指导书 **默认取值：** 不涉及
    * changeGuides  **参数解释：** 变更指导书ID。 **约束限制：** 当ticket_type为change创建变更单，且任务选择变更指导书时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * commitUploadAttachment  **参数解释：** 问题单附件，上传附件ID。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * regions  **参数解释：** 问题单所属Region，此处传RegionID，多个Region用英文逗号隔开。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * changeSceneId  **参数解释：** 变更场景。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。 **取值范围：** 取配置页面【流程管理】下“变更场景”TAB页中列表属性ID列的值，示例：GOCMLL06 **默认取值：** 不涉及
    * currentCloudServiceId  **参数解释：** 归属应用。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * rootCauseCloudService  **参数解释：** 归属应用。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * source  **参数解释：** 问题单来源。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 当ticket_type为issues_mgmt创建问题单时，枚举值 issues_mgmt_associated_type_1000 -- 事件 issues_mgmt_associated_type_4000 -- 运维主动发现 issues_mgmt_associated_type_2000 -- 告警 issues_mgmt_associated_type_3000 -- WarRoom **默认取值：** 不涉及
    * sourceId  **参数解释：** 问题单来源工单单号。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。当source的值为issues_mgmt_associated_type_1000、issues_mgmt_associated_type_2000或issues_mgmt_associated_type_3000时，必填。需要填写关联的工单单号。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * fountTime  **参数解释：** 发现时间，时间戳。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * virtualScheduleType  **参数解释：** 问题单处理人类型。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段必填。 **取值范围：** 当ticket_type为issues_mgmt创建问题单时，枚举值 issues_mgmt_virtual_schedule_type_1000 -- 排班 issues_mgmt_virtual_schedule_type_2000 -- 个人 **默认取值：** 不涉及
    * issueContactPerson  **参数解释：** 问题单责任人工号ID。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。如需指定问题单责任人，则该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * scheduleScenes  **参数解释：** 问题单责任人从排班中获取，该值为排班场景ID。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * virtualScheduleRole  **参数解释：** 问题单责任人从排班中获取，该值为排班角色ID。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * locationId  **参数解释：** 变更区域ID。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * planTaskSubType  **参数解释：** 预案子类型。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。当任务类型change_scheme取值为change_scheme_runbook时，该值必填。 **取值范围：** 枚举值 CUSTOMIZATION：自定义作业 COMMUNAL：公共作业 **默认取值：** 不涉及
    * planTaskId  **参数解释：** 需要执行的作业ID。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。当任务类型change_scheme取值为change_scheme_runbook时，该值必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * planTaskName  **参数解释：** 需要执行的作业名称。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。当任务类型change_scheme取值为change_scheme_runbook时，该值必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * planTaskParams  **参数解释：** 执行作业时所需的参数信息。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。当任务类型change_scheme取值为change_scheme_runbook时，该值必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * isStartProcess  **参数解释：** 是否启动流程，当此值为false时，创建出来的工单为草稿状态。此值默认为true，创建出来的工单状态为未受理状态。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * subTickets  **参数解释：** 变更子单的信息，包含变更单涉及的服务和Region信息。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填且有效，当ticket_type非change时，该字段可置空。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'title' => null,
        'changeNotes' => null,
        'description' => null,
        'enterpriseProject' => null,
        'changeType' => null,
        'level' => null,
        'ticketType' => null,
        'changeScheme' => null,
        'changeGuides' => null,
        'commitUploadAttachment' => null,
        'regions' => null,
        'changeSceneId' => null,
        'currentCloudServiceId' => null,
        'rootCauseCloudService' => null,
        'source' => null,
        'sourceId' => null,
        'fountTime' => 'int64',
        'virtualScheduleType' => null,
        'issueContactPerson' => null,
        'scheduleScenes' => null,
        'virtualScheduleRole' => null,
        'locationId' => null,
        'planTaskSubType' => null,
        'planTaskId' => null,
        'planTaskName' => null,
        'planTaskParams' => null,
        'isStartProcess' => null,
        'subTickets' => null
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
    * title  **参数解释：** 工单标题。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * changeNotes  **参数解释：** 变更单描述。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 问题单描述信息。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * enterpriseProject  **参数解释：** 企业项目ID **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 0
    * changeType  **参数解释：** 变更类型。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。 **取值范围：** 枚举值 change_type_conventional：常规变更 change_type_urgentu：紧急变更 **默认取值：** 不涉及
    * level  **参数解释：** 工单级别。 **约束限制：** 不涉及 **取值范围：** 当ticket_type为change创建变更单时，枚举值 change_level_010 -- A级变更 change_level_020 -- B级变更 change_level_030 -- C级变更 change_level_040 -- D级变更 当ticket_type为issues_mgmt创建问题单时，枚举值 issues_level_1000 -- 致命 issues_level_2000 -- 严重 issues_level_3000 -- 一般 issues_level_4000 -- 提示 **默认取值：** 不涉及
    * ticketType  **参数解释：** 问题单类型，通过访问 云运维中心-->基础配置-->流程管理页签下问题流程-->问题类别可查询所有可传递的问题类型，此处传递问题类型ID。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * changeScheme  **参数解释：** 任务类型，可选作业或者变更指导书两种。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。当取值为change_scheme_guides时，请求参数change_guides必填。当取值为change_scheme_runbook时，参数plan_task_sub_type、plan_task_id、plan_task_name和plan_task_params必填。 **取值范围：** 枚举值 change_scheme_runbook：作业 change_scheme_guides：变更指导书 **默认取值：** 不涉及
    * changeGuides  **参数解释：** 变更指导书ID。 **约束限制：** 当ticket_type为change创建变更单，且任务选择变更指导书时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * commitUploadAttachment  **参数解释：** 问题单附件，上传附件ID。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * regions  **参数解释：** 问题单所属Region，此处传RegionID，多个Region用英文逗号隔开。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * changeSceneId  **参数解释：** 变更场景。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。 **取值范围：** 取配置页面【流程管理】下“变更场景”TAB页中列表属性ID列的值，示例：GOCMLL06 **默认取值：** 不涉及
    * currentCloudServiceId  **参数解释：** 归属应用。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * rootCauseCloudService  **参数解释：** 归属应用。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * source  **参数解释：** 问题单来源。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 当ticket_type为issues_mgmt创建问题单时，枚举值 issues_mgmt_associated_type_1000 -- 事件 issues_mgmt_associated_type_4000 -- 运维主动发现 issues_mgmt_associated_type_2000 -- 告警 issues_mgmt_associated_type_3000 -- WarRoom **默认取值：** 不涉及
    * sourceId  **参数解释：** 问题单来源工单单号。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。当source的值为issues_mgmt_associated_type_1000、issues_mgmt_associated_type_2000或issues_mgmt_associated_type_3000时，必填。需要填写关联的工单单号。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * fountTime  **参数解释：** 发现时间，时间戳。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * virtualScheduleType  **参数解释：** 问题单处理人类型。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段必填。 **取值范围：** 当ticket_type为issues_mgmt创建问题单时，枚举值 issues_mgmt_virtual_schedule_type_1000 -- 排班 issues_mgmt_virtual_schedule_type_2000 -- 个人 **默认取值：** 不涉及
    * issueContactPerson  **参数解释：** 问题单责任人工号ID。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。如需指定问题单责任人，则该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * scheduleScenes  **参数解释：** 问题单责任人从排班中获取，该值为排班场景ID。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * virtualScheduleRole  **参数解释：** 问题单责任人从排班中获取，该值为排班角色ID。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * locationId  **参数解释：** 变更区域ID。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * planTaskSubType  **参数解释：** 预案子类型。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。当任务类型change_scheme取值为change_scheme_runbook时，该值必填。 **取值范围：** 枚举值 CUSTOMIZATION：自定义作业 COMMUNAL：公共作业 **默认取值：** 不涉及
    * planTaskId  **参数解释：** 需要执行的作业ID。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。当任务类型change_scheme取值为change_scheme_runbook时，该值必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * planTaskName  **参数解释：** 需要执行的作业名称。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。当任务类型change_scheme取值为change_scheme_runbook时，该值必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * planTaskParams  **参数解释：** 执行作业时所需的参数信息。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。当任务类型change_scheme取值为change_scheme_runbook时，该值必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * isStartProcess  **参数解释：** 是否启动流程，当此值为false时，创建出来的工单为草稿状态。此值默认为true，创建出来的工单状态为未受理状态。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * subTickets  **参数解释：** 变更子单的信息，包含变更单涉及的服务和Region信息。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填且有效，当ticket_type非change时，该字段可置空。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'title' => 'title',
            'changeNotes' => 'change_notes',
            'description' => 'description',
            'enterpriseProject' => 'enterprise_project',
            'changeType' => 'change_type',
            'level' => 'level',
            'ticketType' => 'ticket_type',
            'changeScheme' => 'change_scheme',
            'changeGuides' => 'change_guides',
            'commitUploadAttachment' => 'commit_upload_attachment',
            'regions' => 'regions',
            'changeSceneId' => 'change_scene_id',
            'currentCloudServiceId' => 'current_cloud_service_id',
            'rootCauseCloudService' => 'root_cause_cloud_service',
            'source' => 'source',
            'sourceId' => 'source_id',
            'fountTime' => 'fount_time',
            'virtualScheduleType' => 'virtual_schedule_type',
            'issueContactPerson' => 'issue_contact_person',
            'scheduleScenes' => 'schedule_scenes',
            'virtualScheduleRole' => 'virtual_schedule_role',
            'locationId' => 'location_id',
            'planTaskSubType' => 'plan_task_sub_type',
            'planTaskId' => 'plan_task_id',
            'planTaskName' => 'plan_task_name',
            'planTaskParams' => 'plan_task_params',
            'isStartProcess' => 'is_start_process',
            'subTickets' => 'sub_tickets'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * title  **参数解释：** 工单标题。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * changeNotes  **参数解释：** 变更单描述。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 问题单描述信息。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * enterpriseProject  **参数解释：** 企业项目ID **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 0
    * changeType  **参数解释：** 变更类型。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。 **取值范围：** 枚举值 change_type_conventional：常规变更 change_type_urgentu：紧急变更 **默认取值：** 不涉及
    * level  **参数解释：** 工单级别。 **约束限制：** 不涉及 **取值范围：** 当ticket_type为change创建变更单时，枚举值 change_level_010 -- A级变更 change_level_020 -- B级变更 change_level_030 -- C级变更 change_level_040 -- D级变更 当ticket_type为issues_mgmt创建问题单时，枚举值 issues_level_1000 -- 致命 issues_level_2000 -- 严重 issues_level_3000 -- 一般 issues_level_4000 -- 提示 **默认取值：** 不涉及
    * ticketType  **参数解释：** 问题单类型，通过访问 云运维中心-->基础配置-->流程管理页签下问题流程-->问题类别可查询所有可传递的问题类型，此处传递问题类型ID。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * changeScheme  **参数解释：** 任务类型，可选作业或者变更指导书两种。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。当取值为change_scheme_guides时，请求参数change_guides必填。当取值为change_scheme_runbook时，参数plan_task_sub_type、plan_task_id、plan_task_name和plan_task_params必填。 **取值范围：** 枚举值 change_scheme_runbook：作业 change_scheme_guides：变更指导书 **默认取值：** 不涉及
    * changeGuides  **参数解释：** 变更指导书ID。 **约束限制：** 当ticket_type为change创建变更单，且任务选择变更指导书时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * commitUploadAttachment  **参数解释：** 问题单附件，上传附件ID。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * regions  **参数解释：** 问题单所属Region，此处传RegionID，多个Region用英文逗号隔开。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * changeSceneId  **参数解释：** 变更场景。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。 **取值范围：** 取配置页面【流程管理】下“变更场景”TAB页中列表属性ID列的值，示例：GOCMLL06 **默认取值：** 不涉及
    * currentCloudServiceId  **参数解释：** 归属应用。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * rootCauseCloudService  **参数解释：** 归属应用。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * source  **参数解释：** 问题单来源。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 当ticket_type为issues_mgmt创建问题单时，枚举值 issues_mgmt_associated_type_1000 -- 事件 issues_mgmt_associated_type_4000 -- 运维主动发现 issues_mgmt_associated_type_2000 -- 告警 issues_mgmt_associated_type_3000 -- WarRoom **默认取值：** 不涉及
    * sourceId  **参数解释：** 问题单来源工单单号。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。当source的值为issues_mgmt_associated_type_1000、issues_mgmt_associated_type_2000或issues_mgmt_associated_type_3000时，必填。需要填写关联的工单单号。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * fountTime  **参数解释：** 发现时间，时间戳。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * virtualScheduleType  **参数解释：** 问题单处理人类型。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段必填。 **取值范围：** 当ticket_type为issues_mgmt创建问题单时，枚举值 issues_mgmt_virtual_schedule_type_1000 -- 排班 issues_mgmt_virtual_schedule_type_2000 -- 个人 **默认取值：** 不涉及
    * issueContactPerson  **参数解释：** 问题单责任人工号ID。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。如需指定问题单责任人，则该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * scheduleScenes  **参数解释：** 问题单责任人从排班中获取，该值为排班场景ID。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * virtualScheduleRole  **参数解释：** 问题单责任人从排班中获取，该值为排班角色ID。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * locationId  **参数解释：** 变更区域ID。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * planTaskSubType  **参数解释：** 预案子类型。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。当任务类型change_scheme取值为change_scheme_runbook时，该值必填。 **取值范围：** 枚举值 CUSTOMIZATION：自定义作业 COMMUNAL：公共作业 **默认取值：** 不涉及
    * planTaskId  **参数解释：** 需要执行的作业ID。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。当任务类型change_scheme取值为change_scheme_runbook时，该值必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * planTaskName  **参数解释：** 需要执行的作业名称。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。当任务类型change_scheme取值为change_scheme_runbook时，该值必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * planTaskParams  **参数解释：** 执行作业时所需的参数信息。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。当任务类型change_scheme取值为change_scheme_runbook时，该值必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * isStartProcess  **参数解释：** 是否启动流程，当此值为false时，创建出来的工单为草稿状态。此值默认为true，创建出来的工单状态为未受理状态。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * subTickets  **参数解释：** 变更子单的信息，包含变更单涉及的服务和Region信息。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填且有效，当ticket_type非change时，该字段可置空。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'title' => 'setTitle',
            'changeNotes' => 'setChangeNotes',
            'description' => 'setDescription',
            'enterpriseProject' => 'setEnterpriseProject',
            'changeType' => 'setChangeType',
            'level' => 'setLevel',
            'ticketType' => 'setTicketType',
            'changeScheme' => 'setChangeScheme',
            'changeGuides' => 'setChangeGuides',
            'commitUploadAttachment' => 'setCommitUploadAttachment',
            'regions' => 'setRegions',
            'changeSceneId' => 'setChangeSceneId',
            'currentCloudServiceId' => 'setCurrentCloudServiceId',
            'rootCauseCloudService' => 'setRootCauseCloudService',
            'source' => 'setSource',
            'sourceId' => 'setSourceId',
            'fountTime' => 'setFountTime',
            'virtualScheduleType' => 'setVirtualScheduleType',
            'issueContactPerson' => 'setIssueContactPerson',
            'scheduleScenes' => 'setScheduleScenes',
            'virtualScheduleRole' => 'setVirtualScheduleRole',
            'locationId' => 'setLocationId',
            'planTaskSubType' => 'setPlanTaskSubType',
            'planTaskId' => 'setPlanTaskId',
            'planTaskName' => 'setPlanTaskName',
            'planTaskParams' => 'setPlanTaskParams',
            'isStartProcess' => 'setIsStartProcess',
            'subTickets' => 'setSubTickets'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * title  **参数解释：** 工单标题。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * changeNotes  **参数解释：** 变更单描述。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 问题单描述信息。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * enterpriseProject  **参数解释：** 企业项目ID **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 0
    * changeType  **参数解释：** 变更类型。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。 **取值范围：** 枚举值 change_type_conventional：常规变更 change_type_urgentu：紧急变更 **默认取值：** 不涉及
    * level  **参数解释：** 工单级别。 **约束限制：** 不涉及 **取值范围：** 当ticket_type为change创建变更单时，枚举值 change_level_010 -- A级变更 change_level_020 -- B级变更 change_level_030 -- C级变更 change_level_040 -- D级变更 当ticket_type为issues_mgmt创建问题单时，枚举值 issues_level_1000 -- 致命 issues_level_2000 -- 严重 issues_level_3000 -- 一般 issues_level_4000 -- 提示 **默认取值：** 不涉及
    * ticketType  **参数解释：** 问题单类型，通过访问 云运维中心-->基础配置-->流程管理页签下问题流程-->问题类别可查询所有可传递的问题类型，此处传递问题类型ID。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * changeScheme  **参数解释：** 任务类型，可选作业或者变更指导书两种。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。当取值为change_scheme_guides时，请求参数change_guides必填。当取值为change_scheme_runbook时，参数plan_task_sub_type、plan_task_id、plan_task_name和plan_task_params必填。 **取值范围：** 枚举值 change_scheme_runbook：作业 change_scheme_guides：变更指导书 **默认取值：** 不涉及
    * changeGuides  **参数解释：** 变更指导书ID。 **约束限制：** 当ticket_type为change创建变更单，且任务选择变更指导书时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * commitUploadAttachment  **参数解释：** 问题单附件，上传附件ID。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * regions  **参数解释：** 问题单所属Region，此处传RegionID，多个Region用英文逗号隔开。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * changeSceneId  **参数解释：** 变更场景。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。 **取值范围：** 取配置页面【流程管理】下“变更场景”TAB页中列表属性ID列的值，示例：GOCMLL06 **默认取值：** 不涉及
    * currentCloudServiceId  **参数解释：** 归属应用。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * rootCauseCloudService  **参数解释：** 归属应用。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * source  **参数解释：** 问题单来源。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 当ticket_type为issues_mgmt创建问题单时，枚举值 issues_mgmt_associated_type_1000 -- 事件 issues_mgmt_associated_type_4000 -- 运维主动发现 issues_mgmt_associated_type_2000 -- 告警 issues_mgmt_associated_type_3000 -- WarRoom **默认取值：** 不涉及
    * sourceId  **参数解释：** 问题单来源工单单号。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。当source的值为issues_mgmt_associated_type_1000、issues_mgmt_associated_type_2000或issues_mgmt_associated_type_3000时，必填。需要填写关联的工单单号。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * fountTime  **参数解释：** 发现时间，时间戳。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * virtualScheduleType  **参数解释：** 问题单处理人类型。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段必填。 **取值范围：** 当ticket_type为issues_mgmt创建问题单时，枚举值 issues_mgmt_virtual_schedule_type_1000 -- 排班 issues_mgmt_virtual_schedule_type_2000 -- 个人 **默认取值：** 不涉及
    * issueContactPerson  **参数解释：** 问题单责任人工号ID。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。如需指定问题单责任人，则该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * scheduleScenes  **参数解释：** 问题单责任人从排班中获取，该值为排班场景ID。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * virtualScheduleRole  **参数解释：** 问题单责任人从排班中获取，该值为排班角色ID。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * locationId  **参数解释：** 变更区域ID。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * planTaskSubType  **参数解释：** 预案子类型。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。当任务类型change_scheme取值为change_scheme_runbook时，该值必填。 **取值范围：** 枚举值 CUSTOMIZATION：自定义作业 COMMUNAL：公共作业 **默认取值：** 不涉及
    * planTaskId  **参数解释：** 需要执行的作业ID。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。当任务类型change_scheme取值为change_scheme_runbook时，该值必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * planTaskName  **参数解释：** 需要执行的作业名称。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。当任务类型change_scheme取值为change_scheme_runbook时，该值必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * planTaskParams  **参数解释：** 执行作业时所需的参数信息。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。当任务类型change_scheme取值为change_scheme_runbook时，该值必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * isStartProcess  **参数解释：** 是否启动流程，当此值为false时，创建出来的工单为草稿状态。此值默认为true，创建出来的工单状态为未受理状态。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * subTickets  **参数解释：** 变更子单的信息，包含变更单涉及的服务和Region信息。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填且有效，当ticket_type非change时，该字段可置空。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'title' => 'getTitle',
            'changeNotes' => 'getChangeNotes',
            'description' => 'getDescription',
            'enterpriseProject' => 'getEnterpriseProject',
            'changeType' => 'getChangeType',
            'level' => 'getLevel',
            'ticketType' => 'getTicketType',
            'changeScheme' => 'getChangeScheme',
            'changeGuides' => 'getChangeGuides',
            'commitUploadAttachment' => 'getCommitUploadAttachment',
            'regions' => 'getRegions',
            'changeSceneId' => 'getChangeSceneId',
            'currentCloudServiceId' => 'getCurrentCloudServiceId',
            'rootCauseCloudService' => 'getRootCauseCloudService',
            'source' => 'getSource',
            'sourceId' => 'getSourceId',
            'fountTime' => 'getFountTime',
            'virtualScheduleType' => 'getVirtualScheduleType',
            'issueContactPerson' => 'getIssueContactPerson',
            'scheduleScenes' => 'getScheduleScenes',
            'virtualScheduleRole' => 'getVirtualScheduleRole',
            'locationId' => 'getLocationId',
            'planTaskSubType' => 'getPlanTaskSubType',
            'planTaskId' => 'getPlanTaskId',
            'planTaskName' => 'getPlanTaskName',
            'planTaskParams' => 'getPlanTaskParams',
            'isStartProcess' => 'getIsStartProcess',
            'subTickets' => 'getSubTickets'
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
        $this->container['changeNotes'] = isset($data['changeNotes']) ? $data['changeNotes'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enterpriseProject'] = isset($data['enterpriseProject']) ? $data['enterpriseProject'] : null;
        $this->container['changeType'] = isset($data['changeType']) ? $data['changeType'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['ticketType'] = isset($data['ticketType']) ? $data['ticketType'] : null;
        $this->container['changeScheme'] = isset($data['changeScheme']) ? $data['changeScheme'] : null;
        $this->container['changeGuides'] = isset($data['changeGuides']) ? $data['changeGuides'] : null;
        $this->container['commitUploadAttachment'] = isset($data['commitUploadAttachment']) ? $data['commitUploadAttachment'] : null;
        $this->container['regions'] = isset($data['regions']) ? $data['regions'] : null;
        $this->container['changeSceneId'] = isset($data['changeSceneId']) ? $data['changeSceneId'] : null;
        $this->container['currentCloudServiceId'] = isset($data['currentCloudServiceId']) ? $data['currentCloudServiceId'] : null;
        $this->container['rootCauseCloudService'] = isset($data['rootCauseCloudService']) ? $data['rootCauseCloudService'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['sourceId'] = isset($data['sourceId']) ? $data['sourceId'] : null;
        $this->container['fountTime'] = isset($data['fountTime']) ? $data['fountTime'] : null;
        $this->container['virtualScheduleType'] = isset($data['virtualScheduleType']) ? $data['virtualScheduleType'] : null;
        $this->container['issueContactPerson'] = isset($data['issueContactPerson']) ? $data['issueContactPerson'] : null;
        $this->container['scheduleScenes'] = isset($data['scheduleScenes']) ? $data['scheduleScenes'] : null;
        $this->container['virtualScheduleRole'] = isset($data['virtualScheduleRole']) ? $data['virtualScheduleRole'] : null;
        $this->container['locationId'] = isset($data['locationId']) ? $data['locationId'] : null;
        $this->container['planTaskSubType'] = isset($data['planTaskSubType']) ? $data['planTaskSubType'] : null;
        $this->container['planTaskId'] = isset($data['planTaskId']) ? $data['planTaskId'] : null;
        $this->container['planTaskName'] = isset($data['planTaskName']) ? $data['planTaskName'] : null;
        $this->container['planTaskParams'] = isset($data['planTaskParams']) ? $data['planTaskParams'] : null;
        $this->container['isStartProcess'] = isset($data['isStartProcess']) ? $data['isStartProcess'] : null;
        $this->container['subTickets'] = isset($data['subTickets']) ? $data['subTickets'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 255)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 1)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['changeNotes']) && (mb_strlen($this->container['changeNotes']) > 4096)) {
                $invalidProperties[] = "invalid value for 'changeNotes', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['changeNotes']) && (mb_strlen($this->container['changeNotes']) < 1)) {
                $invalidProperties[] = "invalid value for 'changeNotes', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1000)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProject']) && (mb_strlen($this->container['enterpriseProject']) > 1000)) {
                $invalidProperties[] = "invalid value for 'enterpriseProject', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['enterpriseProject']) && (mb_strlen($this->container['enterpriseProject']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProject', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['changeType']) && (mb_strlen($this->container['changeType']) > 255)) {
                $invalidProperties[] = "invalid value for 'changeType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['changeType']) && (mb_strlen($this->container['changeType']) < 1)) {
                $invalidProperties[] = "invalid value for 'changeType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) > 255)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) < 1)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ticketType']) && (mb_strlen($this->container['ticketType']) > 255)) {
                $invalidProperties[] = "invalid value for 'ticketType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['ticketType']) && (mb_strlen($this->container['ticketType']) < 1)) {
                $invalidProperties[] = "invalid value for 'ticketType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['changeScheme']) && (mb_strlen($this->container['changeScheme']) > 255)) {
                $invalidProperties[] = "invalid value for 'changeScheme', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['changeScheme']) && (mb_strlen($this->container['changeScheme']) < 1)) {
                $invalidProperties[] = "invalid value for 'changeScheme', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['changeGuides']) && (mb_strlen($this->container['changeGuides']) > 255)) {
                $invalidProperties[] = "invalid value for 'changeGuides', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['changeGuides']) && (mb_strlen($this->container['changeGuides']) < 1)) {
                $invalidProperties[] = "invalid value for 'changeGuides', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['commitUploadAttachment']) && (mb_strlen($this->container['commitUploadAttachment']) > 255)) {
                $invalidProperties[] = "invalid value for 'commitUploadAttachment', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['commitUploadAttachment']) && (mb_strlen($this->container['commitUploadAttachment']) < 1)) {
                $invalidProperties[] = "invalid value for 'commitUploadAttachment', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['regions']) && (mb_strlen($this->container['regions']) > 999999)) {
                $invalidProperties[] = "invalid value for 'regions', the character length must be smaller than or equal to 999999.";
            }
            if (!is_null($this->container['regions']) && (mb_strlen($this->container['regions']) < 0)) {
                $invalidProperties[] = "invalid value for 'regions', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['changeSceneId']) && (mb_strlen($this->container['changeSceneId']) > 255)) {
                $invalidProperties[] = "invalid value for 'changeSceneId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['changeSceneId']) && (mb_strlen($this->container['changeSceneId']) < 1)) {
                $invalidProperties[] = "invalid value for 'changeSceneId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['currentCloudServiceId']) && (mb_strlen($this->container['currentCloudServiceId']) > 255)) {
                $invalidProperties[] = "invalid value for 'currentCloudServiceId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['currentCloudServiceId']) && (mb_strlen($this->container['currentCloudServiceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'currentCloudServiceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['rootCauseCloudService']) && (mb_strlen($this->container['rootCauseCloudService']) > 255)) {
                $invalidProperties[] = "invalid value for 'rootCauseCloudService', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['rootCauseCloudService']) && (mb_strlen($this->container['rootCauseCloudService']) < 1)) {
                $invalidProperties[] = "invalid value for 'rootCauseCloudService', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['source']) && (mb_strlen($this->container['source']) > 255)) {
                $invalidProperties[] = "invalid value for 'source', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['source']) && (mb_strlen($this->container['source']) < 1)) {
                $invalidProperties[] = "invalid value for 'source', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sourceId']) && (mb_strlen($this->container['sourceId']) > 255)) {
                $invalidProperties[] = "invalid value for 'sourceId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['sourceId']) && (mb_strlen($this->container['sourceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'sourceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fountTime']) && ($this->container['fountTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'fountTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['fountTime']) && ($this->container['fountTime'] < 1)) {
                $invalidProperties[] = "invalid value for 'fountTime', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['virtualScheduleType']) && (mb_strlen($this->container['virtualScheduleType']) > 255)) {
                $invalidProperties[] = "invalid value for 'virtualScheduleType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['virtualScheduleType']) && (mb_strlen($this->container['virtualScheduleType']) < 1)) {
                $invalidProperties[] = "invalid value for 'virtualScheduleType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['issueContactPerson']) && (mb_strlen($this->container['issueContactPerson']) > 255)) {
                $invalidProperties[] = "invalid value for 'issueContactPerson', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['issueContactPerson']) && (mb_strlen($this->container['issueContactPerson']) < 1)) {
                $invalidProperties[] = "invalid value for 'issueContactPerson', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['scheduleScenes']) && (mb_strlen($this->container['scheduleScenes']) > 255)) {
                $invalidProperties[] = "invalid value for 'scheduleScenes', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['scheduleScenes']) && (mb_strlen($this->container['scheduleScenes']) < 1)) {
                $invalidProperties[] = "invalid value for 'scheduleScenes', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['virtualScheduleRole']) && (mb_strlen($this->container['virtualScheduleRole']) > 255)) {
                $invalidProperties[] = "invalid value for 'virtualScheduleRole', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['virtualScheduleRole']) && (mb_strlen($this->container['virtualScheduleRole']) < 1)) {
                $invalidProperties[] = "invalid value for 'virtualScheduleRole', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['locationId']) && (mb_strlen($this->container['locationId']) > 255)) {
                $invalidProperties[] = "invalid value for 'locationId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['locationId']) && (mb_strlen($this->container['locationId']) < 1)) {
                $invalidProperties[] = "invalid value for 'locationId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['planTaskSubType']) && (mb_strlen($this->container['planTaskSubType']) > 50)) {
                $invalidProperties[] = "invalid value for 'planTaskSubType', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['planTaskSubType']) && (mb_strlen($this->container['planTaskSubType']) < 0)) {
                $invalidProperties[] = "invalid value for 'planTaskSubType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['planTaskId']) && (mb_strlen($this->container['planTaskId']) > 50)) {
                $invalidProperties[] = "invalid value for 'planTaskId', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['planTaskId']) && (mb_strlen($this->container['planTaskId']) < 0)) {
                $invalidProperties[] = "invalid value for 'planTaskId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['planTaskName']) && (mb_strlen($this->container['planTaskName']) > 50)) {
                $invalidProperties[] = "invalid value for 'planTaskName', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['planTaskName']) && (mb_strlen($this->container['planTaskName']) < 0)) {
                $invalidProperties[] = "invalid value for 'planTaskName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['planTaskParams']) && (mb_strlen($this->container['planTaskParams']) > 999999999)) {
                $invalidProperties[] = "invalid value for 'planTaskParams', the character length must be smaller than or equal to 999999999.";
            }
            if (!is_null($this->container['planTaskParams']) && (mb_strlen($this->container['planTaskParams']) < 0)) {
                $invalidProperties[] = "invalid value for 'planTaskParams', the character length must be bigger than or equal to 0.";
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
    *  **参数解释：** 工单标题。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $title **参数解释：** 工单标题。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets changeNotes
    *  **参数解释：** 变更单描述。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getChangeNotes()
    {
        return $this->container['changeNotes'];
    }

    /**
    * Sets changeNotes
    *
    * @param string|null $changeNotes **参数解释：** 变更单描述。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setChangeNotes($changeNotes)
    {
        $this->container['changeNotes'] = $changeNotes;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：** 问题单描述信息。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $description **参数解释：** 问题单描述信息。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets enterpriseProject
    *  **参数解释：** 企业项目ID **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 0
    *
    * @return string|null
    */
    public function getEnterpriseProject()
    {
        return $this->container['enterpriseProject'];
    }

    /**
    * Sets enterpriseProject
    *
    * @param string|null $enterpriseProject **参数解释：** 企业项目ID **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 0
    *
    * @return $this
    */
    public function setEnterpriseProject($enterpriseProject)
    {
        $this->container['enterpriseProject'] = $enterpriseProject;
        return $this;
    }

    /**
    * Gets changeType
    *  **参数解释：** 变更类型。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。 **取值范围：** 枚举值 change_type_conventional：常规变更 change_type_urgentu：紧急变更 **默认取值：** 不涉及
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
    * @param string|null $changeType **参数解释：** 变更类型。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。 **取值范围：** 枚举值 change_type_conventional：常规变更 change_type_urgentu：紧急变更 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setChangeType($changeType)
    {
        $this->container['changeType'] = $changeType;
        return $this;
    }

    /**
    * Gets level
    *  **参数解释：** 工单级别。 **约束限制：** 不涉及 **取值范围：** 当ticket_type为change创建变更单时，枚举值 change_level_010 -- A级变更 change_level_020 -- B级变更 change_level_030 -- C级变更 change_level_040 -- D级变更 当ticket_type为issues_mgmt创建问题单时，枚举值 issues_level_1000 -- 致命 issues_level_2000 -- 严重 issues_level_3000 -- 一般 issues_level_4000 -- 提示 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string|null $level **参数解释：** 工单级别。 **约束限制：** 不涉及 **取值范围：** 当ticket_type为change创建变更单时，枚举值 change_level_010 -- A级变更 change_level_020 -- B级变更 change_level_030 -- C级变更 change_level_040 -- D级变更 当ticket_type为issues_mgmt创建问题单时，枚举值 issues_level_1000 -- 致命 issues_level_2000 -- 严重 issues_level_3000 -- 一般 issues_level_4000 -- 提示 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets ticketType
    *  **参数解释：** 问题单类型，通过访问 云运维中心-->基础配置-->流程管理页签下问题流程-->问题类别可查询所有可传递的问题类型，此处传递问题类型ID。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getTicketType()
    {
        return $this->container['ticketType'];
    }

    /**
    * Sets ticketType
    *
    * @param string|null $ticketType **参数解释：** 问题单类型，通过访问 云运维中心-->基础配置-->流程管理页签下问题流程-->问题类别可查询所有可传递的问题类型，此处传递问题类型ID。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTicketType($ticketType)
    {
        $this->container['ticketType'] = $ticketType;
        return $this;
    }

    /**
    * Gets changeScheme
    *  **参数解释：** 任务类型，可选作业或者变更指导书两种。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。当取值为change_scheme_guides时，请求参数change_guides必填。当取值为change_scheme_runbook时，参数plan_task_sub_type、plan_task_id、plan_task_name和plan_task_params必填。 **取值范围：** 枚举值 change_scheme_runbook：作业 change_scheme_guides：变更指导书 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getChangeScheme()
    {
        return $this->container['changeScheme'];
    }

    /**
    * Sets changeScheme
    *
    * @param string|null $changeScheme **参数解释：** 任务类型，可选作业或者变更指导书两种。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。当取值为change_scheme_guides时，请求参数change_guides必填。当取值为change_scheme_runbook时，参数plan_task_sub_type、plan_task_id、plan_task_name和plan_task_params必填。 **取值范围：** 枚举值 change_scheme_runbook：作业 change_scheme_guides：变更指导书 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setChangeScheme($changeScheme)
    {
        $this->container['changeScheme'] = $changeScheme;
        return $this;
    }

    /**
    * Gets changeGuides
    *  **参数解释：** 变更指导书ID。 **约束限制：** 当ticket_type为change创建变更单，且任务选择变更指导书时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getChangeGuides()
    {
        return $this->container['changeGuides'];
    }

    /**
    * Sets changeGuides
    *
    * @param string|null $changeGuides **参数解释：** 变更指导书ID。 **约束限制：** 当ticket_type为change创建变更单，且任务选择变更指导书时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setChangeGuides($changeGuides)
    {
        $this->container['changeGuides'] = $changeGuides;
        return $this;
    }

    /**
    * Gets commitUploadAttachment
    *  **参数解释：** 问题单附件，上传附件ID。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getCommitUploadAttachment()
    {
        return $this->container['commitUploadAttachment'];
    }

    /**
    * Sets commitUploadAttachment
    *
    * @param string|null $commitUploadAttachment **参数解释：** 问题单附件，上传附件ID。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setCommitUploadAttachment($commitUploadAttachment)
    {
        $this->container['commitUploadAttachment'] = $commitUploadAttachment;
        return $this;
    }

    /**
    * Gets regions
    *  **参数解释：** 问题单所属Region，此处传RegionID，多个Region用英文逗号隔开。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getRegions()
    {
        return $this->container['regions'];
    }

    /**
    * Sets regions
    *
    * @param string|null $regions **参数解释：** 问题单所属Region，此处传RegionID，多个Region用英文逗号隔开。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setRegions($regions)
    {
        $this->container['regions'] = $regions;
        return $this;
    }

    /**
    * Gets changeSceneId
    *  **参数解释：** 变更场景。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。 **取值范围：** 取配置页面【流程管理】下“变更场景”TAB页中列表属性ID列的值，示例：GOCMLL06 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getChangeSceneId()
    {
        return $this->container['changeSceneId'];
    }

    /**
    * Sets changeSceneId
    *
    * @param string|null $changeSceneId **参数解释：** 变更场景。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。 **取值范围：** 取配置页面【流程管理】下“变更场景”TAB页中列表属性ID列的值，示例：GOCMLL06 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setChangeSceneId($changeSceneId)
    {
        $this->container['changeSceneId'] = $changeSceneId;
        return $this;
    }

    /**
    * Gets currentCloudServiceId
    *  **参数解释：** 归属应用。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getCurrentCloudServiceId()
    {
        return $this->container['currentCloudServiceId'];
    }

    /**
    * Sets currentCloudServiceId
    *
    * @param string|null $currentCloudServiceId **参数解释：** 归属应用。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setCurrentCloudServiceId($currentCloudServiceId)
    {
        $this->container['currentCloudServiceId'] = $currentCloudServiceId;
        return $this;
    }

    /**
    * Gets rootCauseCloudService
    *  **参数解释：** 归属应用。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getRootCauseCloudService()
    {
        return $this->container['rootCauseCloudService'];
    }

    /**
    * Sets rootCauseCloudService
    *
    * @param string|null $rootCauseCloudService **参数解释：** 归属应用。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setRootCauseCloudService($rootCauseCloudService)
    {
        $this->container['rootCauseCloudService'] = $rootCauseCloudService;
        return $this;
    }

    /**
    * Gets source
    *  **参数解释：** 问题单来源。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 当ticket_type为issues_mgmt创建问题单时，枚举值 issues_mgmt_associated_type_1000 -- 事件 issues_mgmt_associated_type_4000 -- 运维主动发现 issues_mgmt_associated_type_2000 -- 告警 issues_mgmt_associated_type_3000 -- WarRoom **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param string|null $source **参数解释：** 问题单来源。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 当ticket_type为issues_mgmt创建问题单时，枚举值 issues_mgmt_associated_type_1000 -- 事件 issues_mgmt_associated_type_4000 -- 运维主动发现 issues_mgmt_associated_type_2000 -- 告警 issues_mgmt_associated_type_3000 -- WarRoom **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets sourceId
    *  **参数解释：** 问题单来源工单单号。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。当source的值为issues_mgmt_associated_type_1000、issues_mgmt_associated_type_2000或issues_mgmt_associated_type_3000时，必填。需要填写关联的工单单号。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getSourceId()
    {
        return $this->container['sourceId'];
    }

    /**
    * Sets sourceId
    *
    * @param string|null $sourceId **参数解释：** 问题单来源工单单号。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。当source的值为issues_mgmt_associated_type_1000、issues_mgmt_associated_type_2000或issues_mgmt_associated_type_3000时，必填。需要填写关联的工单单号。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setSourceId($sourceId)
    {
        $this->container['sourceId'] = $sourceId;
        return $this;
    }

    /**
    * Gets fountTime
    *  **参数解释：** 发现时间，时间戳。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getFountTime()
    {
        return $this->container['fountTime'];
    }

    /**
    * Sets fountTime
    *
    * @param int|null $fountTime **参数解释：** 发现时间，时间戳。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setFountTime($fountTime)
    {
        $this->container['fountTime'] = $fountTime;
        return $this;
    }

    /**
    * Gets virtualScheduleType
    *  **参数解释：** 问题单处理人类型。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段必填。 **取值范围：** 当ticket_type为issues_mgmt创建问题单时，枚举值 issues_mgmt_virtual_schedule_type_1000 -- 排班 issues_mgmt_virtual_schedule_type_2000 -- 个人 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getVirtualScheduleType()
    {
        return $this->container['virtualScheduleType'];
    }

    /**
    * Sets virtualScheduleType
    *
    * @param string|null $virtualScheduleType **参数解释：** 问题单处理人类型。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段必填。 **取值范围：** 当ticket_type为issues_mgmt创建问题单时，枚举值 issues_mgmt_virtual_schedule_type_1000 -- 排班 issues_mgmt_virtual_schedule_type_2000 -- 个人 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setVirtualScheduleType($virtualScheduleType)
    {
        $this->container['virtualScheduleType'] = $virtualScheduleType;
        return $this;
    }

    /**
    * Gets issueContactPerson
    *  **参数解释：** 问题单责任人工号ID。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。如需指定问题单责任人，则该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getIssueContactPerson()
    {
        return $this->container['issueContactPerson'];
    }

    /**
    * Sets issueContactPerson
    *
    * @param string|null $issueContactPerson **参数解释：** 问题单责任人工号ID。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。如需指定问题单责任人，则该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setIssueContactPerson($issueContactPerson)
    {
        $this->container['issueContactPerson'] = $issueContactPerson;
        return $this;
    }

    /**
    * Gets scheduleScenes
    *  **参数解释：** 问题单责任人从排班中获取，该值为排班场景ID。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getScheduleScenes()
    {
        return $this->container['scheduleScenes'];
    }

    /**
    * Sets scheduleScenes
    *
    * @param string|null $scheduleScenes **参数解释：** 问题单责任人从排班中获取，该值为排班场景ID。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setScheduleScenes($scheduleScenes)
    {
        $this->container['scheduleScenes'] = $scheduleScenes;
        return $this;
    }

    /**
    * Gets virtualScheduleRole
    *  **参数解释：** 问题单责任人从排班中获取，该值为排班角色ID。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getVirtualScheduleRole()
    {
        return $this->container['virtualScheduleRole'];
    }

    /**
    * Sets virtualScheduleRole
    *
    * @param string|null $virtualScheduleRole **参数解释：** 问题单责任人从排班中获取，该值为排班角色ID。 **约束限制：** 当ticket_type为issues_mgmt创建问题单时，该字段选填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setVirtualScheduleRole($virtualScheduleRole)
    {
        $this->container['virtualScheduleRole'] = $virtualScheduleRole;
        return $this;
    }

    /**
    * Gets locationId
    *  **参数解释：** 变更区域ID。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getLocationId()
    {
        return $this->container['locationId'];
    }

    /**
    * Sets locationId
    *
    * @param string|null $locationId **参数解释：** 变更区域ID。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setLocationId($locationId)
    {
        $this->container['locationId'] = $locationId;
        return $this;
    }

    /**
    * Gets planTaskSubType
    *  **参数解释：** 预案子类型。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。当任务类型change_scheme取值为change_scheme_runbook时，该值必填。 **取值范围：** 枚举值 CUSTOMIZATION：自定义作业 COMMUNAL：公共作业 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getPlanTaskSubType()
    {
        return $this->container['planTaskSubType'];
    }

    /**
    * Sets planTaskSubType
    *
    * @param string|null $planTaskSubType **参数解释：** 预案子类型。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。当任务类型change_scheme取值为change_scheme_runbook时，该值必填。 **取值范围：** 枚举值 CUSTOMIZATION：自定义作业 COMMUNAL：公共作业 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setPlanTaskSubType($planTaskSubType)
    {
        $this->container['planTaskSubType'] = $planTaskSubType;
        return $this;
    }

    /**
    * Gets planTaskId
    *  **参数解释：** 需要执行的作业ID。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。当任务类型change_scheme取值为change_scheme_runbook时，该值必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getPlanTaskId()
    {
        return $this->container['planTaskId'];
    }

    /**
    * Sets planTaskId
    *
    * @param string|null $planTaskId **参数解释：** 需要执行的作业ID。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。当任务类型change_scheme取值为change_scheme_runbook时，该值必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setPlanTaskId($planTaskId)
    {
        $this->container['planTaskId'] = $planTaskId;
        return $this;
    }

    /**
    * Gets planTaskName
    *  **参数解释：** 需要执行的作业名称。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。当任务类型change_scheme取值为change_scheme_runbook时，该值必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getPlanTaskName()
    {
        return $this->container['planTaskName'];
    }

    /**
    * Sets planTaskName
    *
    * @param string|null $planTaskName **参数解释：** 需要执行的作业名称。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。当任务类型change_scheme取值为change_scheme_runbook时，该值必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setPlanTaskName($planTaskName)
    {
        $this->container['planTaskName'] = $planTaskName;
        return $this;
    }

    /**
    * Gets planTaskParams
    *  **参数解释：** 执行作业时所需的参数信息。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。当任务类型change_scheme取值为change_scheme_runbook时，该值必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getPlanTaskParams()
    {
        return $this->container['planTaskParams'];
    }

    /**
    * Sets planTaskParams
    *
    * @param string|null $planTaskParams **参数解释：** 执行作业时所需的参数信息。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填。当任务类型change_scheme取值为change_scheme_runbook时，该值必填。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setPlanTaskParams($planTaskParams)
    {
        $this->container['planTaskParams'] = $planTaskParams;
        return $this;
    }

    /**
    * Gets isStartProcess
    *  **参数解释：** 是否启动流程，当此值为false时，创建出来的工单为草稿状态。此值默认为true，创建出来的工单状态为未受理状态。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return bool|null
    */
    public function getIsStartProcess()
    {
        return $this->container['isStartProcess'];
    }

    /**
    * Sets isStartProcess
    *
    * @param bool|null $isStartProcess **参数解释：** 是否启动流程，当此值为false时，创建出来的工单为草稿状态。此值默认为true，创建出来的工单状态为未受理状态。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setIsStartProcess($isStartProcess)
    {
        $this->container['isStartProcess'] = $isStartProcess;
        return $this;
    }

    /**
    * Gets subTickets
    *  **参数解释：** 变更子单的信息，包含变更单涉及的服务和Region信息。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填且有效，当ticket_type非change时，该字段可置空。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\TicketCreateSubTicketInfo[]|null
    */
    public function getSubTickets()
    {
        return $this->container['subTickets'];
    }

    /**
    * Sets subTickets
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\TicketCreateSubTicketInfo[]|null $subTickets **参数解释：** 变更子单的信息，包含变更单涉及的服务和Region信息。 **约束限制：** 当ticket_type为change创建变更单时，该字段必填且有效，当ticket_type非change时，该字段可置空。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setSubTickets($subTickets)
    {
        $this->container['subTickets'] = $subTickets;
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

