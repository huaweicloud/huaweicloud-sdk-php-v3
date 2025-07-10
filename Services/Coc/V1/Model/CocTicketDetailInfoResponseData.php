<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CocTicketDetailInfoResponseData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CocTicketDetailInfoResponseData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * issueCorrelationSla  问题关联SLA。
    * level  问题单级别。
    * rootCauseCloudService  问题单责任服务。
    * rootCauseType  问题单根因分类。
    * currentCloudServiceId  问题单服务。
    * issueContactPerson  问题单接口人。
    * issueVersion  发现问题版本号。
    * source  问题单来源。
    * commitUploadAttachment  上传附件。
    * sourceId  问题单来源id。
    * enterpriseProject  问题单企业项目。
    * virtualScheduleType  问题单排班类型。
    * title  问题单标题。
    * regions  问题单region信息。
    * description  问题单描述。
    * rootCauseComment  问题单根因分析。
    * solution  问题单解决方案。
    * regionsSerch  问题单区域搜索。
    * levelApproveConfig  问题单级别审批配置。
    * suspensionApproveConfig  问题单挂起审批配置。
    * handleTime  处理时长。
    * fountTime  发现时间。
    * isCommonIssue  是否共性问题。
    * isNeedChange  问题单是否需要变更。
    * isEnableSuspension  问题单是否开启挂起。
    * isStartProcessAsync  是否启动异步流程。
    * isUpdateNull  是否重新提交空字段。
    * creator  问题单创建人。
    * operator  问题单操作人。
    * isReturnFullInfo  是否返回所有字段信息。
    * isStartProcess  是否启动流程。
    * ticketId  问题单工单ID。
    * realTicketId  问题单工单单号。
    * assignee  问题单当前责任人。
    * participator  问题单参与人。
    * workFlowStatus  问题单状态。
    * engineErrorMsg  流程状态。
    * baselineStatus  基线状态。
    * ticketType  工单类型。
    * phase  问题单当前阶段信息。
    * subTickets  变更子单信息。
    * enumDataList  枚举列表。
    * id  主键uuid
    * metaDataVersion  应用版本
    * updateTime  更新时间。
    * createTime  创单时间戳。
    * isDeleted  工单是否被删除。
    * ticketTypeId  工单类型。
    * formInfo  动作信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'issueCorrelationSla' => 'string',
            'level' => 'string',
            'rootCauseCloudService' => 'string',
            'rootCauseType' => 'string',
            'currentCloudServiceId' => 'string',
            'issueContactPerson' => 'string',
            'issueVersion' => 'string',
            'source' => 'string',
            'commitUploadAttachment' => 'string',
            'sourceId' => 'string',
            'enterpriseProject' => 'string',
            'virtualScheduleType' => 'string',
            'title' => 'string',
            'regions' => 'string',
            'description' => 'string',
            'rootCauseComment' => 'string',
            'solution' => 'string',
            'regionsSerch' => 'string',
            'levelApproveConfig' => 'string',
            'suspensionApproveConfig' => 'string',
            'handleTime' => 'int',
            'fountTime' => 'int',
            'isCommonIssue' => 'bool',
            'isNeedChange' => 'bool',
            'isEnableSuspension' => 'bool',
            'isStartProcessAsync' => 'bool',
            'isUpdateNull' => 'bool',
            'creator' => 'string',
            'operator' => 'string',
            'isReturnFullInfo' => 'bool',
            'isStartProcess' => 'bool',
            'ticketId' => 'string',
            'realTicketId' => 'string',
            'assignee' => 'string',
            'participator' => 'string',
            'workFlowStatus' => 'string',
            'engineErrorMsg' => 'string',
            'baselineStatus' => 'string',
            'ticketType' => 'string',
            'phase' => 'string',
            'subTickets' => '\HuaweiCloud\SDK\Coc\V1\Model\CocTicketDetailInfoResponseDataSubTickets[]',
            'enumDataList' => '\HuaweiCloud\SDK\Coc\V1\Model\IssuesTicketInfoEnumData[]',
            'id' => 'string',
            'metaDataVersion' => 'int',
            'updateTime' => 'int',
            'createTime' => 'int',
            'isDeleted' => 'bool',
            'ticketTypeId' => 'string',
            'formInfo' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * issueCorrelationSla  问题关联SLA。
    * level  问题单级别。
    * rootCauseCloudService  问题单责任服务。
    * rootCauseType  问题单根因分类。
    * currentCloudServiceId  问题单服务。
    * issueContactPerson  问题单接口人。
    * issueVersion  发现问题版本号。
    * source  问题单来源。
    * commitUploadAttachment  上传附件。
    * sourceId  问题单来源id。
    * enterpriseProject  问题单企业项目。
    * virtualScheduleType  问题单排班类型。
    * title  问题单标题。
    * regions  问题单region信息。
    * description  问题单描述。
    * rootCauseComment  问题单根因分析。
    * solution  问题单解决方案。
    * regionsSerch  问题单区域搜索。
    * levelApproveConfig  问题单级别审批配置。
    * suspensionApproveConfig  问题单挂起审批配置。
    * handleTime  处理时长。
    * fountTime  发现时间。
    * isCommonIssue  是否共性问题。
    * isNeedChange  问题单是否需要变更。
    * isEnableSuspension  问题单是否开启挂起。
    * isStartProcessAsync  是否启动异步流程。
    * isUpdateNull  是否重新提交空字段。
    * creator  问题单创建人。
    * operator  问题单操作人。
    * isReturnFullInfo  是否返回所有字段信息。
    * isStartProcess  是否启动流程。
    * ticketId  问题单工单ID。
    * realTicketId  问题单工单单号。
    * assignee  问题单当前责任人。
    * participator  问题单参与人。
    * workFlowStatus  问题单状态。
    * engineErrorMsg  流程状态。
    * baselineStatus  基线状态。
    * ticketType  工单类型。
    * phase  问题单当前阶段信息。
    * subTickets  变更子单信息。
    * enumDataList  枚举列表。
    * id  主键uuid
    * metaDataVersion  应用版本
    * updateTime  更新时间。
    * createTime  创单时间戳。
    * isDeleted  工单是否被删除。
    * ticketTypeId  工单类型。
    * formInfo  动作信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'issueCorrelationSla' => null,
        'level' => null,
        'rootCauseCloudService' => null,
        'rootCauseType' => null,
        'currentCloudServiceId' => null,
        'issueContactPerson' => null,
        'issueVersion' => null,
        'source' => null,
        'commitUploadAttachment' => null,
        'sourceId' => null,
        'enterpriseProject' => null,
        'virtualScheduleType' => null,
        'title' => null,
        'regions' => null,
        'description' => null,
        'rootCauseComment' => null,
        'solution' => null,
        'regionsSerch' => null,
        'levelApproveConfig' => null,
        'suspensionApproveConfig' => null,
        'handleTime' => 'int64',
        'fountTime' => 'int64',
        'isCommonIssue' => null,
        'isNeedChange' => null,
        'isEnableSuspension' => null,
        'isStartProcessAsync' => null,
        'isUpdateNull' => null,
        'creator' => null,
        'operator' => null,
        'isReturnFullInfo' => null,
        'isStartProcess' => null,
        'ticketId' => null,
        'realTicketId' => null,
        'assignee' => null,
        'participator' => null,
        'workFlowStatus' => null,
        'engineErrorMsg' => null,
        'baselineStatus' => null,
        'ticketType' => null,
        'phase' => null,
        'subTickets' => null,
        'enumDataList' => null,
        'id' => null,
        'metaDataVersion' => 'int32',
        'updateTime' => 'int64',
        'createTime' => 'int64',
        'isDeleted' => null,
        'ticketTypeId' => null,
        'formInfo' => null
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
    * issueCorrelationSla  问题关联SLA。
    * level  问题单级别。
    * rootCauseCloudService  问题单责任服务。
    * rootCauseType  问题单根因分类。
    * currentCloudServiceId  问题单服务。
    * issueContactPerson  问题单接口人。
    * issueVersion  发现问题版本号。
    * source  问题单来源。
    * commitUploadAttachment  上传附件。
    * sourceId  问题单来源id。
    * enterpriseProject  问题单企业项目。
    * virtualScheduleType  问题单排班类型。
    * title  问题单标题。
    * regions  问题单region信息。
    * description  问题单描述。
    * rootCauseComment  问题单根因分析。
    * solution  问题单解决方案。
    * regionsSerch  问题单区域搜索。
    * levelApproveConfig  问题单级别审批配置。
    * suspensionApproveConfig  问题单挂起审批配置。
    * handleTime  处理时长。
    * fountTime  发现时间。
    * isCommonIssue  是否共性问题。
    * isNeedChange  问题单是否需要变更。
    * isEnableSuspension  问题单是否开启挂起。
    * isStartProcessAsync  是否启动异步流程。
    * isUpdateNull  是否重新提交空字段。
    * creator  问题单创建人。
    * operator  问题单操作人。
    * isReturnFullInfo  是否返回所有字段信息。
    * isStartProcess  是否启动流程。
    * ticketId  问题单工单ID。
    * realTicketId  问题单工单单号。
    * assignee  问题单当前责任人。
    * participator  问题单参与人。
    * workFlowStatus  问题单状态。
    * engineErrorMsg  流程状态。
    * baselineStatus  基线状态。
    * ticketType  工单类型。
    * phase  问题单当前阶段信息。
    * subTickets  变更子单信息。
    * enumDataList  枚举列表。
    * id  主键uuid
    * metaDataVersion  应用版本
    * updateTime  更新时间。
    * createTime  创单时间戳。
    * isDeleted  工单是否被删除。
    * ticketTypeId  工单类型。
    * formInfo  动作信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'issueCorrelationSla' => 'issue_correlation_sla',
            'level' => 'level',
            'rootCauseCloudService' => 'root_cause_cloud_service',
            'rootCauseType' => 'root_cause_type',
            'currentCloudServiceId' => 'current_cloud_service_id',
            'issueContactPerson' => 'issue_contact_person',
            'issueVersion' => 'issue_version',
            'source' => 'source',
            'commitUploadAttachment' => 'commit_upload_attachment',
            'sourceId' => 'source_id',
            'enterpriseProject' => 'enterprise_project',
            'virtualScheduleType' => 'virtual_schedule_type',
            'title' => 'title',
            'regions' => 'regions',
            'description' => 'description',
            'rootCauseComment' => 'root_cause_comment',
            'solution' => 'solution',
            'regionsSerch' => 'regions_serch',
            'levelApproveConfig' => 'level_approve_config',
            'suspensionApproveConfig' => 'suspension_approve_config',
            'handleTime' => 'handle_time',
            'fountTime' => 'fount_time',
            'isCommonIssue' => 'is_common_issue',
            'isNeedChange' => 'is_need_change',
            'isEnableSuspension' => 'is_enable_suspension',
            'isStartProcessAsync' => 'is_start_process_async',
            'isUpdateNull' => 'is_update_null',
            'creator' => 'creator',
            'operator' => 'operator',
            'isReturnFullInfo' => 'is_return_full_info',
            'isStartProcess' => 'is_start_process',
            'ticketId' => 'ticket_id',
            'realTicketId' => 'real_ticket_id',
            'assignee' => 'assignee',
            'participator' => 'participator',
            'workFlowStatus' => 'work_flow_status',
            'engineErrorMsg' => 'engine_error_msg',
            'baselineStatus' => 'baseline_status',
            'ticketType' => 'ticket_type',
            'phase' => 'phase',
            'subTickets' => 'sub_tickets',
            'enumDataList' => 'enum_data_list',
            'id' => 'id',
            'metaDataVersion' => 'meta_data_version',
            'updateTime' => 'update_time',
            'createTime' => 'create_time',
            'isDeleted' => 'is_deleted',
            'ticketTypeId' => 'ticket_type_id',
            'formInfo' => '_form_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * issueCorrelationSla  问题关联SLA。
    * level  问题单级别。
    * rootCauseCloudService  问题单责任服务。
    * rootCauseType  问题单根因分类。
    * currentCloudServiceId  问题单服务。
    * issueContactPerson  问题单接口人。
    * issueVersion  发现问题版本号。
    * source  问题单来源。
    * commitUploadAttachment  上传附件。
    * sourceId  问题单来源id。
    * enterpriseProject  问题单企业项目。
    * virtualScheduleType  问题单排班类型。
    * title  问题单标题。
    * regions  问题单region信息。
    * description  问题单描述。
    * rootCauseComment  问题单根因分析。
    * solution  问题单解决方案。
    * regionsSerch  问题单区域搜索。
    * levelApproveConfig  问题单级别审批配置。
    * suspensionApproveConfig  问题单挂起审批配置。
    * handleTime  处理时长。
    * fountTime  发现时间。
    * isCommonIssue  是否共性问题。
    * isNeedChange  问题单是否需要变更。
    * isEnableSuspension  问题单是否开启挂起。
    * isStartProcessAsync  是否启动异步流程。
    * isUpdateNull  是否重新提交空字段。
    * creator  问题单创建人。
    * operator  问题单操作人。
    * isReturnFullInfo  是否返回所有字段信息。
    * isStartProcess  是否启动流程。
    * ticketId  问题单工单ID。
    * realTicketId  问题单工单单号。
    * assignee  问题单当前责任人。
    * participator  问题单参与人。
    * workFlowStatus  问题单状态。
    * engineErrorMsg  流程状态。
    * baselineStatus  基线状态。
    * ticketType  工单类型。
    * phase  问题单当前阶段信息。
    * subTickets  变更子单信息。
    * enumDataList  枚举列表。
    * id  主键uuid
    * metaDataVersion  应用版本
    * updateTime  更新时间。
    * createTime  创单时间戳。
    * isDeleted  工单是否被删除。
    * ticketTypeId  工单类型。
    * formInfo  动作信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'issueCorrelationSla' => 'setIssueCorrelationSla',
            'level' => 'setLevel',
            'rootCauseCloudService' => 'setRootCauseCloudService',
            'rootCauseType' => 'setRootCauseType',
            'currentCloudServiceId' => 'setCurrentCloudServiceId',
            'issueContactPerson' => 'setIssueContactPerson',
            'issueVersion' => 'setIssueVersion',
            'source' => 'setSource',
            'commitUploadAttachment' => 'setCommitUploadAttachment',
            'sourceId' => 'setSourceId',
            'enterpriseProject' => 'setEnterpriseProject',
            'virtualScheduleType' => 'setVirtualScheduleType',
            'title' => 'setTitle',
            'regions' => 'setRegions',
            'description' => 'setDescription',
            'rootCauseComment' => 'setRootCauseComment',
            'solution' => 'setSolution',
            'regionsSerch' => 'setRegionsSerch',
            'levelApproveConfig' => 'setLevelApproveConfig',
            'suspensionApproveConfig' => 'setSuspensionApproveConfig',
            'handleTime' => 'setHandleTime',
            'fountTime' => 'setFountTime',
            'isCommonIssue' => 'setIsCommonIssue',
            'isNeedChange' => 'setIsNeedChange',
            'isEnableSuspension' => 'setIsEnableSuspension',
            'isStartProcessAsync' => 'setIsStartProcessAsync',
            'isUpdateNull' => 'setIsUpdateNull',
            'creator' => 'setCreator',
            'operator' => 'setOperator',
            'isReturnFullInfo' => 'setIsReturnFullInfo',
            'isStartProcess' => 'setIsStartProcess',
            'ticketId' => 'setTicketId',
            'realTicketId' => 'setRealTicketId',
            'assignee' => 'setAssignee',
            'participator' => 'setParticipator',
            'workFlowStatus' => 'setWorkFlowStatus',
            'engineErrorMsg' => 'setEngineErrorMsg',
            'baselineStatus' => 'setBaselineStatus',
            'ticketType' => 'setTicketType',
            'phase' => 'setPhase',
            'subTickets' => 'setSubTickets',
            'enumDataList' => 'setEnumDataList',
            'id' => 'setId',
            'metaDataVersion' => 'setMetaDataVersion',
            'updateTime' => 'setUpdateTime',
            'createTime' => 'setCreateTime',
            'isDeleted' => 'setIsDeleted',
            'ticketTypeId' => 'setTicketTypeId',
            'formInfo' => 'setFormInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * issueCorrelationSla  问题关联SLA。
    * level  问题单级别。
    * rootCauseCloudService  问题单责任服务。
    * rootCauseType  问题单根因分类。
    * currentCloudServiceId  问题单服务。
    * issueContactPerson  问题单接口人。
    * issueVersion  发现问题版本号。
    * source  问题单来源。
    * commitUploadAttachment  上传附件。
    * sourceId  问题单来源id。
    * enterpriseProject  问题单企业项目。
    * virtualScheduleType  问题单排班类型。
    * title  问题单标题。
    * regions  问题单region信息。
    * description  问题单描述。
    * rootCauseComment  问题单根因分析。
    * solution  问题单解决方案。
    * regionsSerch  问题单区域搜索。
    * levelApproveConfig  问题单级别审批配置。
    * suspensionApproveConfig  问题单挂起审批配置。
    * handleTime  处理时长。
    * fountTime  发现时间。
    * isCommonIssue  是否共性问题。
    * isNeedChange  问题单是否需要变更。
    * isEnableSuspension  问题单是否开启挂起。
    * isStartProcessAsync  是否启动异步流程。
    * isUpdateNull  是否重新提交空字段。
    * creator  问题单创建人。
    * operator  问题单操作人。
    * isReturnFullInfo  是否返回所有字段信息。
    * isStartProcess  是否启动流程。
    * ticketId  问题单工单ID。
    * realTicketId  问题单工单单号。
    * assignee  问题单当前责任人。
    * participator  问题单参与人。
    * workFlowStatus  问题单状态。
    * engineErrorMsg  流程状态。
    * baselineStatus  基线状态。
    * ticketType  工单类型。
    * phase  问题单当前阶段信息。
    * subTickets  变更子单信息。
    * enumDataList  枚举列表。
    * id  主键uuid
    * metaDataVersion  应用版本
    * updateTime  更新时间。
    * createTime  创单时间戳。
    * isDeleted  工单是否被删除。
    * ticketTypeId  工单类型。
    * formInfo  动作信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'issueCorrelationSla' => 'getIssueCorrelationSla',
            'level' => 'getLevel',
            'rootCauseCloudService' => 'getRootCauseCloudService',
            'rootCauseType' => 'getRootCauseType',
            'currentCloudServiceId' => 'getCurrentCloudServiceId',
            'issueContactPerson' => 'getIssueContactPerson',
            'issueVersion' => 'getIssueVersion',
            'source' => 'getSource',
            'commitUploadAttachment' => 'getCommitUploadAttachment',
            'sourceId' => 'getSourceId',
            'enterpriseProject' => 'getEnterpriseProject',
            'virtualScheduleType' => 'getVirtualScheduleType',
            'title' => 'getTitle',
            'regions' => 'getRegions',
            'description' => 'getDescription',
            'rootCauseComment' => 'getRootCauseComment',
            'solution' => 'getSolution',
            'regionsSerch' => 'getRegionsSerch',
            'levelApproveConfig' => 'getLevelApproveConfig',
            'suspensionApproveConfig' => 'getSuspensionApproveConfig',
            'handleTime' => 'getHandleTime',
            'fountTime' => 'getFountTime',
            'isCommonIssue' => 'getIsCommonIssue',
            'isNeedChange' => 'getIsNeedChange',
            'isEnableSuspension' => 'getIsEnableSuspension',
            'isStartProcessAsync' => 'getIsStartProcessAsync',
            'isUpdateNull' => 'getIsUpdateNull',
            'creator' => 'getCreator',
            'operator' => 'getOperator',
            'isReturnFullInfo' => 'getIsReturnFullInfo',
            'isStartProcess' => 'getIsStartProcess',
            'ticketId' => 'getTicketId',
            'realTicketId' => 'getRealTicketId',
            'assignee' => 'getAssignee',
            'participator' => 'getParticipator',
            'workFlowStatus' => 'getWorkFlowStatus',
            'engineErrorMsg' => 'getEngineErrorMsg',
            'baselineStatus' => 'getBaselineStatus',
            'ticketType' => 'getTicketType',
            'phase' => 'getPhase',
            'subTickets' => 'getSubTickets',
            'enumDataList' => 'getEnumDataList',
            'id' => 'getId',
            'metaDataVersion' => 'getMetaDataVersion',
            'updateTime' => 'getUpdateTime',
            'createTime' => 'getCreateTime',
            'isDeleted' => 'getIsDeleted',
            'ticketTypeId' => 'getTicketTypeId',
            'formInfo' => 'getFormInfo'
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
        $this->container['issueCorrelationSla'] = isset($data['issueCorrelationSla']) ? $data['issueCorrelationSla'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['rootCauseCloudService'] = isset($data['rootCauseCloudService']) ? $data['rootCauseCloudService'] : null;
        $this->container['rootCauseType'] = isset($data['rootCauseType']) ? $data['rootCauseType'] : null;
        $this->container['currentCloudServiceId'] = isset($data['currentCloudServiceId']) ? $data['currentCloudServiceId'] : null;
        $this->container['issueContactPerson'] = isset($data['issueContactPerson']) ? $data['issueContactPerson'] : null;
        $this->container['issueVersion'] = isset($data['issueVersion']) ? $data['issueVersion'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['commitUploadAttachment'] = isset($data['commitUploadAttachment']) ? $data['commitUploadAttachment'] : null;
        $this->container['sourceId'] = isset($data['sourceId']) ? $data['sourceId'] : null;
        $this->container['enterpriseProject'] = isset($data['enterpriseProject']) ? $data['enterpriseProject'] : null;
        $this->container['virtualScheduleType'] = isset($data['virtualScheduleType']) ? $data['virtualScheduleType'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['regions'] = isset($data['regions']) ? $data['regions'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['rootCauseComment'] = isset($data['rootCauseComment']) ? $data['rootCauseComment'] : null;
        $this->container['solution'] = isset($data['solution']) ? $data['solution'] : null;
        $this->container['regionsSerch'] = isset($data['regionsSerch']) ? $data['regionsSerch'] : null;
        $this->container['levelApproveConfig'] = isset($data['levelApproveConfig']) ? $data['levelApproveConfig'] : null;
        $this->container['suspensionApproveConfig'] = isset($data['suspensionApproveConfig']) ? $data['suspensionApproveConfig'] : null;
        $this->container['handleTime'] = isset($data['handleTime']) ? $data['handleTime'] : null;
        $this->container['fountTime'] = isset($data['fountTime']) ? $data['fountTime'] : null;
        $this->container['isCommonIssue'] = isset($data['isCommonIssue']) ? $data['isCommonIssue'] : null;
        $this->container['isNeedChange'] = isset($data['isNeedChange']) ? $data['isNeedChange'] : null;
        $this->container['isEnableSuspension'] = isset($data['isEnableSuspension']) ? $data['isEnableSuspension'] : null;
        $this->container['isStartProcessAsync'] = isset($data['isStartProcessAsync']) ? $data['isStartProcessAsync'] : null;
        $this->container['isUpdateNull'] = isset($data['isUpdateNull']) ? $data['isUpdateNull'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['isReturnFullInfo'] = isset($data['isReturnFullInfo']) ? $data['isReturnFullInfo'] : null;
        $this->container['isStartProcess'] = isset($data['isStartProcess']) ? $data['isStartProcess'] : null;
        $this->container['ticketId'] = isset($data['ticketId']) ? $data['ticketId'] : null;
        $this->container['realTicketId'] = isset($data['realTicketId']) ? $data['realTicketId'] : null;
        $this->container['assignee'] = isset($data['assignee']) ? $data['assignee'] : null;
        $this->container['participator'] = isset($data['participator']) ? $data['participator'] : null;
        $this->container['workFlowStatus'] = isset($data['workFlowStatus']) ? $data['workFlowStatus'] : null;
        $this->container['engineErrorMsg'] = isset($data['engineErrorMsg']) ? $data['engineErrorMsg'] : null;
        $this->container['baselineStatus'] = isset($data['baselineStatus']) ? $data['baselineStatus'] : null;
        $this->container['ticketType'] = isset($data['ticketType']) ? $data['ticketType'] : null;
        $this->container['phase'] = isset($data['phase']) ? $data['phase'] : null;
        $this->container['subTickets'] = isset($data['subTickets']) ? $data['subTickets'] : null;
        $this->container['enumDataList'] = isset($data['enumDataList']) ? $data['enumDataList'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['metaDataVersion'] = isset($data['metaDataVersion']) ? $data['metaDataVersion'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['isDeleted'] = isset($data['isDeleted']) ? $data['isDeleted'] : null;
        $this->container['ticketTypeId'] = isset($data['ticketTypeId']) ? $data['ticketTypeId'] : null;
        $this->container['formInfo'] = isset($data['formInfo']) ? $data['formInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['issueCorrelationSla']) && (mb_strlen($this->container['issueCorrelationSla']) > 255)) {
                $invalidProperties[] = "invalid value for 'issueCorrelationSla', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['issueCorrelationSla']) && (mb_strlen($this->container['issueCorrelationSla']) < 0)) {
                $invalidProperties[] = "invalid value for 'issueCorrelationSla', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) > 255)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) < 0)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['rootCauseCloudService']) && (mb_strlen($this->container['rootCauseCloudService']) > 255)) {
                $invalidProperties[] = "invalid value for 'rootCauseCloudService', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['rootCauseCloudService']) && (mb_strlen($this->container['rootCauseCloudService']) < 0)) {
                $invalidProperties[] = "invalid value for 'rootCauseCloudService', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['rootCauseType']) && (mb_strlen($this->container['rootCauseType']) > 255)) {
                $invalidProperties[] = "invalid value for 'rootCauseType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['rootCauseType']) && (mb_strlen($this->container['rootCauseType']) < 0)) {
                $invalidProperties[] = "invalid value for 'rootCauseType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['currentCloudServiceId']) && (mb_strlen($this->container['currentCloudServiceId']) > 255)) {
                $invalidProperties[] = "invalid value for 'currentCloudServiceId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['currentCloudServiceId']) && (mb_strlen($this->container['currentCloudServiceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'currentCloudServiceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['issueContactPerson']) && (mb_strlen($this->container['issueContactPerson']) > 255)) {
                $invalidProperties[] = "invalid value for 'issueContactPerson', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['issueContactPerson']) && (mb_strlen($this->container['issueContactPerson']) < 0)) {
                $invalidProperties[] = "invalid value for 'issueContactPerson', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['issueVersion']) && (mb_strlen($this->container['issueVersion']) > 255)) {
                $invalidProperties[] = "invalid value for 'issueVersion', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['issueVersion']) && (mb_strlen($this->container['issueVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'issueVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['source']) && (mb_strlen($this->container['source']) > 255)) {
                $invalidProperties[] = "invalid value for 'source', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['source']) && (mb_strlen($this->container['source']) < 0)) {
                $invalidProperties[] = "invalid value for 'source', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['commitUploadAttachment']) && (mb_strlen($this->container['commitUploadAttachment']) > 255)) {
                $invalidProperties[] = "invalid value for 'commitUploadAttachment', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['commitUploadAttachment']) && (mb_strlen($this->container['commitUploadAttachment']) < 0)) {
                $invalidProperties[] = "invalid value for 'commitUploadAttachment', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sourceId']) && (mb_strlen($this->container['sourceId']) > 255)) {
                $invalidProperties[] = "invalid value for 'sourceId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['sourceId']) && (mb_strlen($this->container['sourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'sourceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProject']) && (mb_strlen($this->container['enterpriseProject']) > 255)) {
                $invalidProperties[] = "invalid value for 'enterpriseProject', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['enterpriseProject']) && (mb_strlen($this->container['enterpriseProject']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProject', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['virtualScheduleType']) && (mb_strlen($this->container['virtualScheduleType']) > 255)) {
                $invalidProperties[] = "invalid value for 'virtualScheduleType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['virtualScheduleType']) && (mb_strlen($this->container['virtualScheduleType']) < 0)) {
                $invalidProperties[] = "invalid value for 'virtualScheduleType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 255)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 0)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['regions']) && (mb_strlen($this->container['regions']) > 255)) {
                $invalidProperties[] = "invalid value for 'regions', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['regions']) && (mb_strlen($this->container['regions']) < 0)) {
                $invalidProperties[] = "invalid value for 'regions', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['rootCauseComment']) && (mb_strlen($this->container['rootCauseComment']) > 99999)) {
                $invalidProperties[] = "invalid value for 'rootCauseComment', the character length must be smaller than or equal to 99999.";
            }
            if (!is_null($this->container['rootCauseComment']) && (mb_strlen($this->container['rootCauseComment']) < 0)) {
                $invalidProperties[] = "invalid value for 'rootCauseComment', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['solution']) && (mb_strlen($this->container['solution']) > 99999)) {
                $invalidProperties[] = "invalid value for 'solution', the character length must be smaller than or equal to 99999.";
            }
            if (!is_null($this->container['solution']) && (mb_strlen($this->container['solution']) < 0)) {
                $invalidProperties[] = "invalid value for 'solution', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['regionsSerch']) && (mb_strlen($this->container['regionsSerch']) > 99999)) {
                $invalidProperties[] = "invalid value for 'regionsSerch', the character length must be smaller than or equal to 99999.";
            }
            if (!is_null($this->container['regionsSerch']) && (mb_strlen($this->container['regionsSerch']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionsSerch', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['levelApproveConfig']) && (mb_strlen($this->container['levelApproveConfig']) > 9999999)) {
                $invalidProperties[] = "invalid value for 'levelApproveConfig', the character length must be smaller than or equal to 9999999.";
            }
            if (!is_null($this->container['levelApproveConfig']) && (mb_strlen($this->container['levelApproveConfig']) < 0)) {
                $invalidProperties[] = "invalid value for 'levelApproveConfig', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['suspensionApproveConfig']) && (mb_strlen($this->container['suspensionApproveConfig']) > 9999999)) {
                $invalidProperties[] = "invalid value for 'suspensionApproveConfig', the character length must be smaller than or equal to 9999999.";
            }
            if (!is_null($this->container['suspensionApproveConfig']) && (mb_strlen($this->container['suspensionApproveConfig']) < 0)) {
                $invalidProperties[] = "invalid value for 'suspensionApproveConfig', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['handleTime']) && ($this->container['handleTime'] > 9999999999)) {
                $invalidProperties[] = "invalid value for 'handleTime', must be smaller than or equal to 9999999999.";
            }
            if (!is_null($this->container['handleTime']) && ($this->container['handleTime'] < 1)) {
                $invalidProperties[] = "invalid value for 'handleTime', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fountTime']) && ($this->container['fountTime'] > 9999999999)) {
                $invalidProperties[] = "invalid value for 'fountTime', must be smaller than or equal to 9999999999.";
            }
            if (!is_null($this->container['fountTime']) && ($this->container['fountTime'] < 1)) {
                $invalidProperties[] = "invalid value for 'fountTime', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['creator']) && (mb_strlen($this->container['creator']) > 255)) {
                $invalidProperties[] = "invalid value for 'creator', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['creator']) && (mb_strlen($this->container['creator']) < 0)) {
                $invalidProperties[] = "invalid value for 'creator', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['operator']) && (mb_strlen($this->container['operator']) > 255)) {
                $invalidProperties[] = "invalid value for 'operator', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['operator']) && (mb_strlen($this->container['operator']) < 0)) {
                $invalidProperties[] = "invalid value for 'operator', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ticketId']) && (mb_strlen($this->container['ticketId']) > 255)) {
                $invalidProperties[] = "invalid value for 'ticketId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['ticketId']) && (mb_strlen($this->container['ticketId']) < 0)) {
                $invalidProperties[] = "invalid value for 'ticketId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['realTicketId']) && (mb_strlen($this->container['realTicketId']) > 255)) {
                $invalidProperties[] = "invalid value for 'realTicketId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['realTicketId']) && (mb_strlen($this->container['realTicketId']) < 0)) {
                $invalidProperties[] = "invalid value for 'realTicketId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assignee']) && (mb_strlen($this->container['assignee']) > 255)) {
                $invalidProperties[] = "invalid value for 'assignee', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['assignee']) && (mb_strlen($this->container['assignee']) < 0)) {
                $invalidProperties[] = "invalid value for 'assignee', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['participator']) && (mb_strlen($this->container['participator']) > 999999)) {
                $invalidProperties[] = "invalid value for 'participator', the character length must be smaller than or equal to 999999.";
            }
            if (!is_null($this->container['participator']) && (mb_strlen($this->container['participator']) < 0)) {
                $invalidProperties[] = "invalid value for 'participator', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['workFlowStatus']) && (mb_strlen($this->container['workFlowStatus']) > 255)) {
                $invalidProperties[] = "invalid value for 'workFlowStatus', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['workFlowStatus']) && (mb_strlen($this->container['workFlowStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'workFlowStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['engineErrorMsg']) && (mb_strlen($this->container['engineErrorMsg']) > 255)) {
                $invalidProperties[] = "invalid value for 'engineErrorMsg', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['engineErrorMsg']) && (mb_strlen($this->container['engineErrorMsg']) < 0)) {
                $invalidProperties[] = "invalid value for 'engineErrorMsg', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['baselineStatus']) && (mb_strlen($this->container['baselineStatus']) > 255)) {
                $invalidProperties[] = "invalid value for 'baselineStatus', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['baselineStatus']) && (mb_strlen($this->container['baselineStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'baselineStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ticketType']) && (mb_strlen($this->container['ticketType']) > 255)) {
                $invalidProperties[] = "invalid value for 'ticketType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['ticketType']) && (mb_strlen($this->container['ticketType']) < 0)) {
                $invalidProperties[] = "invalid value for 'ticketType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['phase']) && (mb_strlen($this->container['phase']) > 255)) {
                $invalidProperties[] = "invalid value for 'phase', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['phase']) && (mb_strlen($this->container['phase']) < 0)) {
                $invalidProperties[] = "invalid value for 'phase', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 50)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['metaDataVersion']) && ($this->container['metaDataVersion'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'metaDataVersion', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['metaDataVersion']) && ($this->container['metaDataVersion'] < 0)) {
                $invalidProperties[] = "invalid value for 'metaDataVersion', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 9999999999)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 9999999999.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 1)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 999999999)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 999999999.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ticketTypeId']) && (mb_strlen($this->container['ticketTypeId']) > 255)) {
                $invalidProperties[] = "invalid value for 'ticketTypeId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['ticketTypeId']) && (mb_strlen($this->container['ticketTypeId']) < 0)) {
                $invalidProperties[] = "invalid value for 'ticketTypeId', the character length must be bigger than or equal to 0.";
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
    * Gets issueCorrelationSla
    *  问题关联SLA。
    *
    * @return string|null
    */
    public function getIssueCorrelationSla()
    {
        return $this->container['issueCorrelationSla'];
    }

    /**
    * Sets issueCorrelationSla
    *
    * @param string|null $issueCorrelationSla 问题关联SLA。
    *
    * @return $this
    */
    public function setIssueCorrelationSla($issueCorrelationSla)
    {
        $this->container['issueCorrelationSla'] = $issueCorrelationSla;
        return $this;
    }

    /**
    * Gets level
    *  问题单级别。
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
    * @param string|null $level 问题单级别。
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets rootCauseCloudService
    *  问题单责任服务。
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
    * @param string|null $rootCauseCloudService 问题单责任服务。
    *
    * @return $this
    */
    public function setRootCauseCloudService($rootCauseCloudService)
    {
        $this->container['rootCauseCloudService'] = $rootCauseCloudService;
        return $this;
    }

    /**
    * Gets rootCauseType
    *  问题单根因分类。
    *
    * @return string|null
    */
    public function getRootCauseType()
    {
        return $this->container['rootCauseType'];
    }

    /**
    * Sets rootCauseType
    *
    * @param string|null $rootCauseType 问题单根因分类。
    *
    * @return $this
    */
    public function setRootCauseType($rootCauseType)
    {
        $this->container['rootCauseType'] = $rootCauseType;
        return $this;
    }

    /**
    * Gets currentCloudServiceId
    *  问题单服务。
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
    * @param string|null $currentCloudServiceId 问题单服务。
    *
    * @return $this
    */
    public function setCurrentCloudServiceId($currentCloudServiceId)
    {
        $this->container['currentCloudServiceId'] = $currentCloudServiceId;
        return $this;
    }

    /**
    * Gets issueContactPerson
    *  问题单接口人。
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
    * @param string|null $issueContactPerson 问题单接口人。
    *
    * @return $this
    */
    public function setIssueContactPerson($issueContactPerson)
    {
        $this->container['issueContactPerson'] = $issueContactPerson;
        return $this;
    }

    /**
    * Gets issueVersion
    *  发现问题版本号。
    *
    * @return string|null
    */
    public function getIssueVersion()
    {
        return $this->container['issueVersion'];
    }

    /**
    * Sets issueVersion
    *
    * @param string|null $issueVersion 发现问题版本号。
    *
    * @return $this
    */
    public function setIssueVersion($issueVersion)
    {
        $this->container['issueVersion'] = $issueVersion;
        return $this;
    }

    /**
    * Gets source
    *  问题单来源。
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
    * @param string|null $source 问题单来源。
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets commitUploadAttachment
    *  上传附件。
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
    * @param string|null $commitUploadAttachment 上传附件。
    *
    * @return $this
    */
    public function setCommitUploadAttachment($commitUploadAttachment)
    {
        $this->container['commitUploadAttachment'] = $commitUploadAttachment;
        return $this;
    }

    /**
    * Gets sourceId
    *  问题单来源id。
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
    * @param string|null $sourceId 问题单来源id。
    *
    * @return $this
    */
    public function setSourceId($sourceId)
    {
        $this->container['sourceId'] = $sourceId;
        return $this;
    }

    /**
    * Gets enterpriseProject
    *  问题单企业项目。
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
    * @param string|null $enterpriseProject 问题单企业项目。
    *
    * @return $this
    */
    public function setEnterpriseProject($enterpriseProject)
    {
        $this->container['enterpriseProject'] = $enterpriseProject;
        return $this;
    }

    /**
    * Gets virtualScheduleType
    *  问题单排班类型。
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
    * @param string|null $virtualScheduleType 问题单排班类型。
    *
    * @return $this
    */
    public function setVirtualScheduleType($virtualScheduleType)
    {
        $this->container['virtualScheduleType'] = $virtualScheduleType;
        return $this;
    }

    /**
    * Gets title
    *  问题单标题。
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
    * @param string|null $title 问题单标题。
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets regions
    *  问题单region信息。
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
    * @param string|null $regions 问题单region信息。
    *
    * @return $this
    */
    public function setRegions($regions)
    {
        $this->container['regions'] = $regions;
        return $this;
    }

    /**
    * Gets description
    *  问题单描述。
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
    * @param string|null $description 问题单描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets rootCauseComment
    *  问题单根因分析。
    *
    * @return string|null
    */
    public function getRootCauseComment()
    {
        return $this->container['rootCauseComment'];
    }

    /**
    * Sets rootCauseComment
    *
    * @param string|null $rootCauseComment 问题单根因分析。
    *
    * @return $this
    */
    public function setRootCauseComment($rootCauseComment)
    {
        $this->container['rootCauseComment'] = $rootCauseComment;
        return $this;
    }

    /**
    * Gets solution
    *  问题单解决方案。
    *
    * @return string|null
    */
    public function getSolution()
    {
        return $this->container['solution'];
    }

    /**
    * Sets solution
    *
    * @param string|null $solution 问题单解决方案。
    *
    * @return $this
    */
    public function setSolution($solution)
    {
        $this->container['solution'] = $solution;
        return $this;
    }

    /**
    * Gets regionsSerch
    *  问题单区域搜索。
    *
    * @return string|null
    */
    public function getRegionsSerch()
    {
        return $this->container['regionsSerch'];
    }

    /**
    * Sets regionsSerch
    *
    * @param string|null $regionsSerch 问题单区域搜索。
    *
    * @return $this
    */
    public function setRegionsSerch($regionsSerch)
    {
        $this->container['regionsSerch'] = $regionsSerch;
        return $this;
    }

    /**
    * Gets levelApproveConfig
    *  问题单级别审批配置。
    *
    * @return string|null
    */
    public function getLevelApproveConfig()
    {
        return $this->container['levelApproveConfig'];
    }

    /**
    * Sets levelApproveConfig
    *
    * @param string|null $levelApproveConfig 问题单级别审批配置。
    *
    * @return $this
    */
    public function setLevelApproveConfig($levelApproveConfig)
    {
        $this->container['levelApproveConfig'] = $levelApproveConfig;
        return $this;
    }

    /**
    * Gets suspensionApproveConfig
    *  问题单挂起审批配置。
    *
    * @return string|null
    */
    public function getSuspensionApproveConfig()
    {
        return $this->container['suspensionApproveConfig'];
    }

    /**
    * Sets suspensionApproveConfig
    *
    * @param string|null $suspensionApproveConfig 问题单挂起审批配置。
    *
    * @return $this
    */
    public function setSuspensionApproveConfig($suspensionApproveConfig)
    {
        $this->container['suspensionApproveConfig'] = $suspensionApproveConfig;
        return $this;
    }

    /**
    * Gets handleTime
    *  处理时长。
    *
    * @return int|null
    */
    public function getHandleTime()
    {
        return $this->container['handleTime'];
    }

    /**
    * Sets handleTime
    *
    * @param int|null $handleTime 处理时长。
    *
    * @return $this
    */
    public function setHandleTime($handleTime)
    {
        $this->container['handleTime'] = $handleTime;
        return $this;
    }

    /**
    * Gets fountTime
    *  发现时间。
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
    * @param int|null $fountTime 发现时间。
    *
    * @return $this
    */
    public function setFountTime($fountTime)
    {
        $this->container['fountTime'] = $fountTime;
        return $this;
    }

    /**
    * Gets isCommonIssue
    *  是否共性问题。
    *
    * @return bool|null
    */
    public function getIsCommonIssue()
    {
        return $this->container['isCommonIssue'];
    }

    /**
    * Sets isCommonIssue
    *
    * @param bool|null $isCommonIssue 是否共性问题。
    *
    * @return $this
    */
    public function setIsCommonIssue($isCommonIssue)
    {
        $this->container['isCommonIssue'] = $isCommonIssue;
        return $this;
    }

    /**
    * Gets isNeedChange
    *  问题单是否需要变更。
    *
    * @return bool|null
    */
    public function getIsNeedChange()
    {
        return $this->container['isNeedChange'];
    }

    /**
    * Sets isNeedChange
    *
    * @param bool|null $isNeedChange 问题单是否需要变更。
    *
    * @return $this
    */
    public function setIsNeedChange($isNeedChange)
    {
        $this->container['isNeedChange'] = $isNeedChange;
        return $this;
    }

    /**
    * Gets isEnableSuspension
    *  问题单是否开启挂起。
    *
    * @return bool|null
    */
    public function getIsEnableSuspension()
    {
        return $this->container['isEnableSuspension'];
    }

    /**
    * Sets isEnableSuspension
    *
    * @param bool|null $isEnableSuspension 问题单是否开启挂起。
    *
    * @return $this
    */
    public function setIsEnableSuspension($isEnableSuspension)
    {
        $this->container['isEnableSuspension'] = $isEnableSuspension;
        return $this;
    }

    /**
    * Gets isStartProcessAsync
    *  是否启动异步流程。
    *
    * @return bool|null
    */
    public function getIsStartProcessAsync()
    {
        return $this->container['isStartProcessAsync'];
    }

    /**
    * Sets isStartProcessAsync
    *
    * @param bool|null $isStartProcessAsync 是否启动异步流程。
    *
    * @return $this
    */
    public function setIsStartProcessAsync($isStartProcessAsync)
    {
        $this->container['isStartProcessAsync'] = $isStartProcessAsync;
        return $this;
    }

    /**
    * Gets isUpdateNull
    *  是否重新提交空字段。
    *
    * @return bool|null
    */
    public function getIsUpdateNull()
    {
        return $this->container['isUpdateNull'];
    }

    /**
    * Sets isUpdateNull
    *
    * @param bool|null $isUpdateNull 是否重新提交空字段。
    *
    * @return $this
    */
    public function setIsUpdateNull($isUpdateNull)
    {
        $this->container['isUpdateNull'] = $isUpdateNull;
        return $this;
    }

    /**
    * Gets creator
    *  问题单创建人。
    *
    * @return string|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param string|null $creator 问题单创建人。
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets operator
    *  问题单操作人。
    *
    * @return string|null
    */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
    * Sets operator
    *
    * @param string|null $operator 问题单操作人。
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
        return $this;
    }

    /**
    * Gets isReturnFullInfo
    *  是否返回所有字段信息。
    *
    * @return bool|null
    */
    public function getIsReturnFullInfo()
    {
        return $this->container['isReturnFullInfo'];
    }

    /**
    * Sets isReturnFullInfo
    *
    * @param bool|null $isReturnFullInfo 是否返回所有字段信息。
    *
    * @return $this
    */
    public function setIsReturnFullInfo($isReturnFullInfo)
    {
        $this->container['isReturnFullInfo'] = $isReturnFullInfo;
        return $this;
    }

    /**
    * Gets isStartProcess
    *  是否启动流程。
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
    * @param bool|null $isStartProcess 是否启动流程。
    *
    * @return $this
    */
    public function setIsStartProcess($isStartProcess)
    {
        $this->container['isStartProcess'] = $isStartProcess;
        return $this;
    }

    /**
    * Gets ticketId
    *  问题单工单ID。
    *
    * @return string|null
    */
    public function getTicketId()
    {
        return $this->container['ticketId'];
    }

    /**
    * Sets ticketId
    *
    * @param string|null $ticketId 问题单工单ID。
    *
    * @return $this
    */
    public function setTicketId($ticketId)
    {
        $this->container['ticketId'] = $ticketId;
        return $this;
    }

    /**
    * Gets realTicketId
    *  问题单工单单号。
    *
    * @return string|null
    */
    public function getRealTicketId()
    {
        return $this->container['realTicketId'];
    }

    /**
    * Sets realTicketId
    *
    * @param string|null $realTicketId 问题单工单单号。
    *
    * @return $this
    */
    public function setRealTicketId($realTicketId)
    {
        $this->container['realTicketId'] = $realTicketId;
        return $this;
    }

    /**
    * Gets assignee
    *  问题单当前责任人。
    *
    * @return string|null
    */
    public function getAssignee()
    {
        return $this->container['assignee'];
    }

    /**
    * Sets assignee
    *
    * @param string|null $assignee 问题单当前责任人。
    *
    * @return $this
    */
    public function setAssignee($assignee)
    {
        $this->container['assignee'] = $assignee;
        return $this;
    }

    /**
    * Gets participator
    *  问题单参与人。
    *
    * @return string|null
    */
    public function getParticipator()
    {
        return $this->container['participator'];
    }

    /**
    * Sets participator
    *
    * @param string|null $participator 问题单参与人。
    *
    * @return $this
    */
    public function setParticipator($participator)
    {
        $this->container['participator'] = $participator;
        return $this;
    }

    /**
    * Gets workFlowStatus
    *  问题单状态。
    *
    * @return string|null
    */
    public function getWorkFlowStatus()
    {
        return $this->container['workFlowStatus'];
    }

    /**
    * Sets workFlowStatus
    *
    * @param string|null $workFlowStatus 问题单状态。
    *
    * @return $this
    */
    public function setWorkFlowStatus($workFlowStatus)
    {
        $this->container['workFlowStatus'] = $workFlowStatus;
        return $this;
    }

    /**
    * Gets engineErrorMsg
    *  流程状态。
    *
    * @return string|null
    */
    public function getEngineErrorMsg()
    {
        return $this->container['engineErrorMsg'];
    }

    /**
    * Sets engineErrorMsg
    *
    * @param string|null $engineErrorMsg 流程状态。
    *
    * @return $this
    */
    public function setEngineErrorMsg($engineErrorMsg)
    {
        $this->container['engineErrorMsg'] = $engineErrorMsg;
        return $this;
    }

    /**
    * Gets baselineStatus
    *  基线状态。
    *
    * @return string|null
    */
    public function getBaselineStatus()
    {
        return $this->container['baselineStatus'];
    }

    /**
    * Sets baselineStatus
    *
    * @param string|null $baselineStatus 基线状态。
    *
    * @return $this
    */
    public function setBaselineStatus($baselineStatus)
    {
        $this->container['baselineStatus'] = $baselineStatus;
        return $this;
    }

    /**
    * Gets ticketType
    *  工单类型。
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
    * @param string|null $ticketType 工单类型。
    *
    * @return $this
    */
    public function setTicketType($ticketType)
    {
        $this->container['ticketType'] = $ticketType;
        return $this;
    }

    /**
    * Gets phase
    *  问题单当前阶段信息。
    *
    * @return string|null
    */
    public function getPhase()
    {
        return $this->container['phase'];
    }

    /**
    * Sets phase
    *
    * @param string|null $phase 问题单当前阶段信息。
    *
    * @return $this
    */
    public function setPhase($phase)
    {
        $this->container['phase'] = $phase;
        return $this;
    }

    /**
    * Gets subTickets
    *  变更子单信息。
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\CocTicketDetailInfoResponseDataSubTickets[]|null
    */
    public function getSubTickets()
    {
        return $this->container['subTickets'];
    }

    /**
    * Sets subTickets
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\CocTicketDetailInfoResponseDataSubTickets[]|null $subTickets 变更子单信息。
    *
    * @return $this
    */
    public function setSubTickets($subTickets)
    {
        $this->container['subTickets'] = $subTickets;
        return $this;
    }

    /**
    * Gets enumDataList
    *  枚举列表。
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\IssuesTicketInfoEnumData[]|null
    */
    public function getEnumDataList()
    {
        return $this->container['enumDataList'];
    }

    /**
    * Sets enumDataList
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\IssuesTicketInfoEnumData[]|null $enumDataList 枚举列表。
    *
    * @return $this
    */
    public function setEnumDataList($enumDataList)
    {
        $this->container['enumDataList'] = $enumDataList;
        return $this;
    }

    /**
    * Gets id
    *  主键uuid
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
    * @param string|null $id 主键uuid
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets metaDataVersion
    *  应用版本
    *
    * @return int|null
    */
    public function getMetaDataVersion()
    {
        return $this->container['metaDataVersion'];
    }

    /**
    * Sets metaDataVersion
    *
    * @param int|null $metaDataVersion 应用版本
    *
    * @return $this
    */
    public function setMetaDataVersion($metaDataVersion)
    {
        $this->container['metaDataVersion'] = $metaDataVersion;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间。
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 更新时间。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets createTime
    *  创单时间戳。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创单时间戳。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets isDeleted
    *  工单是否被删除。
    *
    * @return bool|null
    */
    public function getIsDeleted()
    {
        return $this->container['isDeleted'];
    }

    /**
    * Sets isDeleted
    *
    * @param bool|null $isDeleted 工单是否被删除。
    *
    * @return $this
    */
    public function setIsDeleted($isDeleted)
    {
        $this->container['isDeleted'] = $isDeleted;
        return $this;
    }

    /**
    * Gets ticketTypeId
    *  工单类型。
    *
    * @return string|null
    */
    public function getTicketTypeId()
    {
        return $this->container['ticketTypeId'];
    }

    /**
    * Sets ticketTypeId
    *
    * @param string|null $ticketTypeId 工单类型。
    *
    * @return $this
    */
    public function setTicketTypeId($ticketTypeId)
    {
        $this->container['ticketTypeId'] = $ticketTypeId;
        return $this;
    }

    /**
    * Gets formInfo
    *  动作信息。
    *
    * @return object|null
    */
    public function getFormInfo()
    {
        return $this->container['formInfo'];
    }

    /**
    * Sets formInfo
    *
    * @param object|null $formInfo 动作信息。
    *
    * @return $this
    */
    public function setFormInfo($formInfo)
    {
        $this->container['formInfo'] = $formInfo;
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

