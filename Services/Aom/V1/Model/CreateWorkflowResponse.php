<?php

namespace HuaweiCloud\SDK\Aom\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateWorkflowResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateWorkflowResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  工作流id，唯一标识，根据project_id和workflow_name生成。
    * name  工作流名称。
    * type  工作流类型，可以为cron、manual
    * description  工作流描述信息。
    * tags  标签键和值列表，标签键值对数量范围是0至20。
    * createTime  工作流创建时间，为utc时间毫秒数。
    * createBy  工作流创人，从接口调用传入的token中获取。
    * updateTime  工作流更新时间，为utc时间毫秒数。
    * updateBy  工作流更新人，从接口调用传入的token中获取。
    * templateName  模板名称。
    * templateId  模板id
    * input  任务执行时需要的参数列表。
    * lastExecutionId  最近一次执行id，也是工作流id
    * status  任务状态，包含success，fail,executing
    * citationUrns  工作流的引用。
    * lastExecutionEndTime  最近一次执行结束时间，为utc时间毫秒数
    * lastExecutionStartTime  最近一次执行开始时间，为utc时间毫秒数
    * quote  引用，参数引用
    * jobName  作业名称
    * jobId  作业id
    * serviceScenario  服务场景分类
    * serviceName  服务名称
    * taskType  任务类型
    * projectId  functiongraph返回的PROJECT_ID
    * workflowId  functiongraph返回的WORKFLOW_ID
    * taskStatus  任务状态
    * nodes  任务节点
    * editTime  编辑时间
    * executionActionRules  执行动作细粒度权限
    * executionPermission  云服务权限
    * globalParameters  全局参数
    * isDelete  逻辑删除
    * steps  任务步骤
    * output  任务输出
    * triggerId  触发器id
    * triggerStatus  触发器状态
    * approveId  审批id
    * templateI18n  templateI18n
    * enterpriseProjectId  任务所属的企业项目
    * lastExecuteBy  任务最后一次执行人
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'type' => 'string',
            'description' => 'string',
            'tags' => 'map[string,string]',
            'createTime' => 'int',
            'createBy' => 'string',
            'updateTime' => 'int',
            'updateBy' => 'string',
            'templateName' => 'string',
            'templateId' => 'string',
            'input' => 'map[string,object]',
            'lastExecutionId' => 'string',
            'status' => 'string',
            'citationUrns' => 'string[]',
            'lastExecutionEndTime' => 'int',
            'lastExecutionStartTime' => 'int',
            'quote' => 'string[]',
            'jobName' => 'string',
            'jobId' => 'string',
            'serviceScenario' => 'string',
            'serviceName' => 'string',
            'taskType' => 'string',
            'projectId' => 'string',
            'workflowId' => 'string',
            'taskStatus' => 'string',
            'nodes' => '\HuaweiCloud\SDK\Aom\V1\Model\Node[]',
            'editTime' => 'int',
            'executionActionRules' => 'string[]',
            'executionPermission' => 'string[]',
            'globalParameters' => '\HuaweiCloud\SDK\Aom\V1\Model\Parameter[]',
            'isDelete' => 'bool',
            'steps' => '\HuaweiCloud\SDK\Aom\V1\Model\Step[]',
            'output' => 'string',
            'triggerId' => 'string',
            'triggerStatus' => 'string',
            'approveId' => 'string',
            'templateI18n' => '\HuaweiCloud\SDK\Aom\V1\Model\WorkFlowModel',
            'enterpriseProjectId' => 'string',
            'lastExecuteBy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  工作流id，唯一标识，根据project_id和workflow_name生成。
    * name  工作流名称。
    * type  工作流类型，可以为cron、manual
    * description  工作流描述信息。
    * tags  标签键和值列表，标签键值对数量范围是0至20。
    * createTime  工作流创建时间，为utc时间毫秒数。
    * createBy  工作流创人，从接口调用传入的token中获取。
    * updateTime  工作流更新时间，为utc时间毫秒数。
    * updateBy  工作流更新人，从接口调用传入的token中获取。
    * templateName  模板名称。
    * templateId  模板id
    * input  任务执行时需要的参数列表。
    * lastExecutionId  最近一次执行id，也是工作流id
    * status  任务状态，包含success，fail,executing
    * citationUrns  工作流的引用。
    * lastExecutionEndTime  最近一次执行结束时间，为utc时间毫秒数
    * lastExecutionStartTime  最近一次执行开始时间，为utc时间毫秒数
    * quote  引用，参数引用
    * jobName  作业名称
    * jobId  作业id
    * serviceScenario  服务场景分类
    * serviceName  服务名称
    * taskType  任务类型
    * projectId  functiongraph返回的PROJECT_ID
    * workflowId  functiongraph返回的WORKFLOW_ID
    * taskStatus  任务状态
    * nodes  任务节点
    * editTime  编辑时间
    * executionActionRules  执行动作细粒度权限
    * executionPermission  云服务权限
    * globalParameters  全局参数
    * isDelete  逻辑删除
    * steps  任务步骤
    * output  任务输出
    * triggerId  触发器id
    * triggerStatus  触发器状态
    * approveId  审批id
    * templateI18n  templateI18n
    * enterpriseProjectId  任务所属的企业项目
    * lastExecuteBy  任务最后一次执行人
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'type' => null,
        'description' => null,
        'tags' => null,
        'createTime' => 'int64',
        'createBy' => null,
        'updateTime' => 'int64',
        'updateBy' => null,
        'templateName' => null,
        'templateId' => null,
        'input' => null,
        'lastExecutionId' => null,
        'status' => null,
        'citationUrns' => null,
        'lastExecutionEndTime' => 'int64',
        'lastExecutionStartTime' => 'int64',
        'quote' => null,
        'jobName' => null,
        'jobId' => null,
        'serviceScenario' => null,
        'serviceName' => null,
        'taskType' => null,
        'projectId' => null,
        'workflowId' => null,
        'taskStatus' => null,
        'nodes' => null,
        'editTime' => 'int64',
        'executionActionRules' => null,
        'executionPermission' => null,
        'globalParameters' => null,
        'isDelete' => null,
        'steps' => null,
        'output' => null,
        'triggerId' => null,
        'triggerStatus' => null,
        'approveId' => null,
        'templateI18n' => null,
        'enterpriseProjectId' => null,
        'lastExecuteBy' => null
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
    * id  工作流id，唯一标识，根据project_id和workflow_name生成。
    * name  工作流名称。
    * type  工作流类型，可以为cron、manual
    * description  工作流描述信息。
    * tags  标签键和值列表，标签键值对数量范围是0至20。
    * createTime  工作流创建时间，为utc时间毫秒数。
    * createBy  工作流创人，从接口调用传入的token中获取。
    * updateTime  工作流更新时间，为utc时间毫秒数。
    * updateBy  工作流更新人，从接口调用传入的token中获取。
    * templateName  模板名称。
    * templateId  模板id
    * input  任务执行时需要的参数列表。
    * lastExecutionId  最近一次执行id，也是工作流id
    * status  任务状态，包含success，fail,executing
    * citationUrns  工作流的引用。
    * lastExecutionEndTime  最近一次执行结束时间，为utc时间毫秒数
    * lastExecutionStartTime  最近一次执行开始时间，为utc时间毫秒数
    * quote  引用，参数引用
    * jobName  作业名称
    * jobId  作业id
    * serviceScenario  服务场景分类
    * serviceName  服务名称
    * taskType  任务类型
    * projectId  functiongraph返回的PROJECT_ID
    * workflowId  functiongraph返回的WORKFLOW_ID
    * taskStatus  任务状态
    * nodes  任务节点
    * editTime  编辑时间
    * executionActionRules  执行动作细粒度权限
    * executionPermission  云服务权限
    * globalParameters  全局参数
    * isDelete  逻辑删除
    * steps  任务步骤
    * output  任务输出
    * triggerId  触发器id
    * triggerStatus  触发器状态
    * approveId  审批id
    * templateI18n  templateI18n
    * enterpriseProjectId  任务所属的企业项目
    * lastExecuteBy  任务最后一次执行人
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'type' => 'type',
            'description' => 'description',
            'tags' => 'tags',
            'createTime' => 'create_time',
            'createBy' => 'create_by',
            'updateTime' => 'update_time',
            'updateBy' => 'update_by',
            'templateName' => 'template_name',
            'templateId' => 'template_id',
            'input' => 'input',
            'lastExecutionId' => 'last_execution_id',
            'status' => 'status',
            'citationUrns' => 'citation_urns',
            'lastExecutionEndTime' => 'last_execution_end_time',
            'lastExecutionStartTime' => 'last_execution_start_time',
            'quote' => 'quote',
            'jobName' => 'job_name',
            'jobId' => 'job_id',
            'serviceScenario' => 'service_scenario',
            'serviceName' => 'service_name',
            'taskType' => 'task_type',
            'projectId' => 'project_id',
            'workflowId' => 'workflow_id',
            'taskStatus' => 'task_status',
            'nodes' => 'nodes',
            'editTime' => 'edit_time',
            'executionActionRules' => 'execution_action_rules',
            'executionPermission' => 'execution_permission',
            'globalParameters' => 'global_parameters',
            'isDelete' => 'is_delete',
            'steps' => 'steps',
            'output' => 'output',
            'triggerId' => 'trigger_id',
            'triggerStatus' => 'trigger_status',
            'approveId' => 'approve_id',
            'templateI18n' => 'template_i18n',
            'enterpriseProjectId' => 'enterprise_project_id',
            'lastExecuteBy' => 'last_execute_by'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  工作流id，唯一标识，根据project_id和workflow_name生成。
    * name  工作流名称。
    * type  工作流类型，可以为cron、manual
    * description  工作流描述信息。
    * tags  标签键和值列表，标签键值对数量范围是0至20。
    * createTime  工作流创建时间，为utc时间毫秒数。
    * createBy  工作流创人，从接口调用传入的token中获取。
    * updateTime  工作流更新时间，为utc时间毫秒数。
    * updateBy  工作流更新人，从接口调用传入的token中获取。
    * templateName  模板名称。
    * templateId  模板id
    * input  任务执行时需要的参数列表。
    * lastExecutionId  最近一次执行id，也是工作流id
    * status  任务状态，包含success，fail,executing
    * citationUrns  工作流的引用。
    * lastExecutionEndTime  最近一次执行结束时间，为utc时间毫秒数
    * lastExecutionStartTime  最近一次执行开始时间，为utc时间毫秒数
    * quote  引用，参数引用
    * jobName  作业名称
    * jobId  作业id
    * serviceScenario  服务场景分类
    * serviceName  服务名称
    * taskType  任务类型
    * projectId  functiongraph返回的PROJECT_ID
    * workflowId  functiongraph返回的WORKFLOW_ID
    * taskStatus  任务状态
    * nodes  任务节点
    * editTime  编辑时间
    * executionActionRules  执行动作细粒度权限
    * executionPermission  云服务权限
    * globalParameters  全局参数
    * isDelete  逻辑删除
    * steps  任务步骤
    * output  任务输出
    * triggerId  触发器id
    * triggerStatus  触发器状态
    * approveId  审批id
    * templateI18n  templateI18n
    * enterpriseProjectId  任务所属的企业项目
    * lastExecuteBy  任务最后一次执行人
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'type' => 'setType',
            'description' => 'setDescription',
            'tags' => 'setTags',
            'createTime' => 'setCreateTime',
            'createBy' => 'setCreateBy',
            'updateTime' => 'setUpdateTime',
            'updateBy' => 'setUpdateBy',
            'templateName' => 'setTemplateName',
            'templateId' => 'setTemplateId',
            'input' => 'setInput',
            'lastExecutionId' => 'setLastExecutionId',
            'status' => 'setStatus',
            'citationUrns' => 'setCitationUrns',
            'lastExecutionEndTime' => 'setLastExecutionEndTime',
            'lastExecutionStartTime' => 'setLastExecutionStartTime',
            'quote' => 'setQuote',
            'jobName' => 'setJobName',
            'jobId' => 'setJobId',
            'serviceScenario' => 'setServiceScenario',
            'serviceName' => 'setServiceName',
            'taskType' => 'setTaskType',
            'projectId' => 'setProjectId',
            'workflowId' => 'setWorkflowId',
            'taskStatus' => 'setTaskStatus',
            'nodes' => 'setNodes',
            'editTime' => 'setEditTime',
            'executionActionRules' => 'setExecutionActionRules',
            'executionPermission' => 'setExecutionPermission',
            'globalParameters' => 'setGlobalParameters',
            'isDelete' => 'setIsDelete',
            'steps' => 'setSteps',
            'output' => 'setOutput',
            'triggerId' => 'setTriggerId',
            'triggerStatus' => 'setTriggerStatus',
            'approveId' => 'setApproveId',
            'templateI18n' => 'setTemplateI18n',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'lastExecuteBy' => 'setLastExecuteBy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  工作流id，唯一标识，根据project_id和workflow_name生成。
    * name  工作流名称。
    * type  工作流类型，可以为cron、manual
    * description  工作流描述信息。
    * tags  标签键和值列表，标签键值对数量范围是0至20。
    * createTime  工作流创建时间，为utc时间毫秒数。
    * createBy  工作流创人，从接口调用传入的token中获取。
    * updateTime  工作流更新时间，为utc时间毫秒数。
    * updateBy  工作流更新人，从接口调用传入的token中获取。
    * templateName  模板名称。
    * templateId  模板id
    * input  任务执行时需要的参数列表。
    * lastExecutionId  最近一次执行id，也是工作流id
    * status  任务状态，包含success，fail,executing
    * citationUrns  工作流的引用。
    * lastExecutionEndTime  最近一次执行结束时间，为utc时间毫秒数
    * lastExecutionStartTime  最近一次执行开始时间，为utc时间毫秒数
    * quote  引用，参数引用
    * jobName  作业名称
    * jobId  作业id
    * serviceScenario  服务场景分类
    * serviceName  服务名称
    * taskType  任务类型
    * projectId  functiongraph返回的PROJECT_ID
    * workflowId  functiongraph返回的WORKFLOW_ID
    * taskStatus  任务状态
    * nodes  任务节点
    * editTime  编辑时间
    * executionActionRules  执行动作细粒度权限
    * executionPermission  云服务权限
    * globalParameters  全局参数
    * isDelete  逻辑删除
    * steps  任务步骤
    * output  任务输出
    * triggerId  触发器id
    * triggerStatus  触发器状态
    * approveId  审批id
    * templateI18n  templateI18n
    * enterpriseProjectId  任务所属的企业项目
    * lastExecuteBy  任务最后一次执行人
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'type' => 'getType',
            'description' => 'getDescription',
            'tags' => 'getTags',
            'createTime' => 'getCreateTime',
            'createBy' => 'getCreateBy',
            'updateTime' => 'getUpdateTime',
            'updateBy' => 'getUpdateBy',
            'templateName' => 'getTemplateName',
            'templateId' => 'getTemplateId',
            'input' => 'getInput',
            'lastExecutionId' => 'getLastExecutionId',
            'status' => 'getStatus',
            'citationUrns' => 'getCitationUrns',
            'lastExecutionEndTime' => 'getLastExecutionEndTime',
            'lastExecutionStartTime' => 'getLastExecutionStartTime',
            'quote' => 'getQuote',
            'jobName' => 'getJobName',
            'jobId' => 'getJobId',
            'serviceScenario' => 'getServiceScenario',
            'serviceName' => 'getServiceName',
            'taskType' => 'getTaskType',
            'projectId' => 'getProjectId',
            'workflowId' => 'getWorkflowId',
            'taskStatus' => 'getTaskStatus',
            'nodes' => 'getNodes',
            'editTime' => 'getEditTime',
            'executionActionRules' => 'getExecutionActionRules',
            'executionPermission' => 'getExecutionPermission',
            'globalParameters' => 'getGlobalParameters',
            'isDelete' => 'getIsDelete',
            'steps' => 'getSteps',
            'output' => 'getOutput',
            'triggerId' => 'getTriggerId',
            'triggerStatus' => 'getTriggerStatus',
            'approveId' => 'getApproveId',
            'templateI18n' => 'getTemplateI18n',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'lastExecuteBy' => 'getLastExecuteBy'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['updateBy'] = isset($data['updateBy']) ? $data['updateBy'] : null;
        $this->container['templateName'] = isset($data['templateName']) ? $data['templateName'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['input'] = isset($data['input']) ? $data['input'] : null;
        $this->container['lastExecutionId'] = isset($data['lastExecutionId']) ? $data['lastExecutionId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['citationUrns'] = isset($data['citationUrns']) ? $data['citationUrns'] : null;
        $this->container['lastExecutionEndTime'] = isset($data['lastExecutionEndTime']) ? $data['lastExecutionEndTime'] : null;
        $this->container['lastExecutionStartTime'] = isset($data['lastExecutionStartTime']) ? $data['lastExecutionStartTime'] : null;
        $this->container['quote'] = isset($data['quote']) ? $data['quote'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['serviceScenario'] = isset($data['serviceScenario']) ? $data['serviceScenario'] : null;
        $this->container['serviceName'] = isset($data['serviceName']) ? $data['serviceName'] : null;
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['workflowId'] = isset($data['workflowId']) ? $data['workflowId'] : null;
        $this->container['taskStatus'] = isset($data['taskStatus']) ? $data['taskStatus'] : null;
        $this->container['nodes'] = isset($data['nodes']) ? $data['nodes'] : null;
        $this->container['editTime'] = isset($data['editTime']) ? $data['editTime'] : null;
        $this->container['executionActionRules'] = isset($data['executionActionRules']) ? $data['executionActionRules'] : null;
        $this->container['executionPermission'] = isset($data['executionPermission']) ? $data['executionPermission'] : null;
        $this->container['globalParameters'] = isset($data['globalParameters']) ? $data['globalParameters'] : null;
        $this->container['isDelete'] = isset($data['isDelete']) ? $data['isDelete'] : null;
        $this->container['steps'] = isset($data['steps']) ? $data['steps'] : null;
        $this->container['output'] = isset($data['output']) ? $data['output'] : null;
        $this->container['triggerId'] = isset($data['triggerId']) ? $data['triggerId'] : null;
        $this->container['triggerStatus'] = isset($data['triggerStatus']) ? $data['triggerStatus'] : null;
        $this->container['approveId'] = isset($data['approveId']) ? $data['approveId'] : null;
        $this->container['templateI18n'] = isset($data['templateI18n']) ? $data['templateI18n'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['lastExecuteBy'] = isset($data['lastExecuteBy']) ? $data['lastExecuteBy'] : null;
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
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && !preg_match("/[^\\\\>+<^;#\"\\s&?%='$￥@*_\/\\]\\[【】{}|:,.，。：‘’“、—！!~`·？《》…]{1,64}/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /[^\\\\>+<^;#\"\\s&?%='$￥@*_\/\\]\\[【】{}|:,.，。：‘’“、—！!~`·？《》…]{1,64}/.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 16)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 128)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createBy']) && (mb_strlen($this->container['createBy']) > 64)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createBy']) && (mb_strlen($this->container['createBy']) < 1)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateBy']) && (mb_strlen($this->container['updateBy']) > 64)) {
                $invalidProperties[] = "invalid value for 'updateBy', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['updateBy']) && (mb_strlen($this->container['updateBy']) < 1)) {
                $invalidProperties[] = "invalid value for 'updateBy', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['templateName']) && (mb_strlen($this->container['templateName']) > 64)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['templateName']) && (mb_strlen($this->container['templateName']) < 1)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['templateId']) && (mb_strlen($this->container['templateId']) > 64)) {
                $invalidProperties[] = "invalid value for 'templateId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['templateId']) && (mb_strlen($this->container['templateId']) < 1)) {
                $invalidProperties[] = "invalid value for 'templateId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['lastExecutionId']) && (mb_strlen($this->container['lastExecutionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'lastExecutionId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['lastExecutionId']) && (mb_strlen($this->container['lastExecutionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'lastExecutionId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 16)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['lastExecutionEndTime']) && ($this->container['lastExecutionEndTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'lastExecutionEndTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['lastExecutionEndTime']) && ($this->container['lastExecutionEndTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'lastExecutionEndTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lastExecutionStartTime']) && ($this->container['lastExecutionStartTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'lastExecutionStartTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['lastExecutionStartTime']) && ($this->container['lastExecutionStartTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'lastExecutionStartTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['jobName']) && (mb_strlen($this->container['jobName']) > 64)) {
                $invalidProperties[] = "invalid value for 'jobName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['jobName']) && (mb_strlen($this->container['jobName']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) > 64)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['serviceScenario']) && (mb_strlen($this->container['serviceScenario']) > 64)) {
                $invalidProperties[] = "invalid value for 'serviceScenario', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['serviceScenario']) && (mb_strlen($this->container['serviceScenario']) < 1)) {
                $invalidProperties[] = "invalid value for 'serviceScenario', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['serviceName']) && (mb_strlen($this->container['serviceName']) > 64)) {
                $invalidProperties[] = "invalid value for 'serviceName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['serviceName']) && (mb_strlen($this->container['serviceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'serviceName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['taskType']) && (mb_strlen($this->container['taskType']) > 16)) {
                $invalidProperties[] = "invalid value for 'taskType', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['taskType']) && (mb_strlen($this->container['taskType']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['workflowId']) && (mb_strlen($this->container['workflowId']) > 64)) {
                $invalidProperties[] = "invalid value for 'workflowId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['workflowId']) && (mb_strlen($this->container['workflowId']) < 1)) {
                $invalidProperties[] = "invalid value for 'workflowId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['taskStatus']) && (mb_strlen($this->container['taskStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'taskStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['taskStatus']) && (mb_strlen($this->container['taskStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['editTime']) && ($this->container['editTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'editTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['editTime']) && ($this->container['editTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'editTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['output']) && (mb_strlen($this->container['output']) > 40960)) {
                $invalidProperties[] = "invalid value for 'output', the character length must be smaller than or equal to 40960.";
            }
            if (!is_null($this->container['output']) && (mb_strlen($this->container['output']) < 1)) {
                $invalidProperties[] = "invalid value for 'output', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['triggerId']) && (mb_strlen($this->container['triggerId']) > 64)) {
                $invalidProperties[] = "invalid value for 'triggerId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['triggerId']) && (mb_strlen($this->container['triggerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'triggerId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['triggerStatus']) && (mb_strlen($this->container['triggerStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'triggerStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['triggerStatus']) && (mb_strlen($this->container['triggerStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'triggerStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['approveId']) && (mb_strlen($this->container['approveId']) > 64)) {
                $invalidProperties[] = "invalid value for 'approveId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['approveId']) && (mb_strlen($this->container['approveId']) < 1)) {
                $invalidProperties[] = "invalid value for 'approveId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['lastExecuteBy']) && (mb_strlen($this->container['lastExecuteBy']) > 64)) {
                $invalidProperties[] = "invalid value for 'lastExecuteBy', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['lastExecuteBy']) && (mb_strlen($this->container['lastExecuteBy']) < 1)) {
                $invalidProperties[] = "invalid value for 'lastExecuteBy', the character length must be bigger than or equal to 1.";
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
    *  工作流id，唯一标识，根据project_id和workflow_name生成。
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
    * @param string|null $id 工作流id，唯一标识，根据project_id和workflow_name生成。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  工作流名称。
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
    * @param string|null $name 工作流名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  工作流类型，可以为cron、manual
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
    * @param string|null $type 工作流类型，可以为cron、manual
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets description
    *  工作流描述信息。
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
    * @param string|null $description 工作流描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets tags
    *  标签键和值列表，标签键值对数量范围是0至20。
    *
    * @return map[string,string]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param map[string,string]|null $tags 标签键和值列表，标签键值对数量范围是0至20。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets createTime
    *  工作流创建时间，为utc时间毫秒数。
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
    * @param int|null $createTime 工作流创建时间，为utc时间毫秒数。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets createBy
    *  工作流创人，从接口调用传入的token中获取。
    *
    * @return string|null
    */
    public function getCreateBy()
    {
        return $this->container['createBy'];
    }

    /**
    * Sets createBy
    *
    * @param string|null $createBy 工作流创人，从接口调用传入的token中获取。
    *
    * @return $this
    */
    public function setCreateBy($createBy)
    {
        $this->container['createBy'] = $createBy;
        return $this;
    }

    /**
    * Gets updateTime
    *  工作流更新时间，为utc时间毫秒数。
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
    * @param int|null $updateTime 工作流更新时间，为utc时间毫秒数。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets updateBy
    *  工作流更新人，从接口调用传入的token中获取。
    *
    * @return string|null
    */
    public function getUpdateBy()
    {
        return $this->container['updateBy'];
    }

    /**
    * Sets updateBy
    *
    * @param string|null $updateBy 工作流更新人，从接口调用传入的token中获取。
    *
    * @return $this
    */
    public function setUpdateBy($updateBy)
    {
        $this->container['updateBy'] = $updateBy;
        return $this;
    }

    /**
    * Gets templateName
    *  模板名称。
    *
    * @return string|null
    */
    public function getTemplateName()
    {
        return $this->container['templateName'];
    }

    /**
    * Sets templateName
    *
    * @param string|null $templateName 模板名称。
    *
    * @return $this
    */
    public function setTemplateName($templateName)
    {
        $this->container['templateName'] = $templateName;
        return $this;
    }

    /**
    * Gets templateId
    *  模板id
    *
    * @return string|null
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param string|null $templateId 模板id
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets input
    *  任务执行时需要的参数列表。
    *
    * @return map[string,object]|null
    */
    public function getInput()
    {
        return $this->container['input'];
    }

    /**
    * Sets input
    *
    * @param map[string,object]|null $input 任务执行时需要的参数列表。
    *
    * @return $this
    */
    public function setInput($input)
    {
        $this->container['input'] = $input;
        return $this;
    }

    /**
    * Gets lastExecutionId
    *  最近一次执行id，也是工作流id
    *
    * @return string|null
    */
    public function getLastExecutionId()
    {
        return $this->container['lastExecutionId'];
    }

    /**
    * Sets lastExecutionId
    *
    * @param string|null $lastExecutionId 最近一次执行id，也是工作流id
    *
    * @return $this
    */
    public function setLastExecutionId($lastExecutionId)
    {
        $this->container['lastExecutionId'] = $lastExecutionId;
        return $this;
    }

    /**
    * Gets status
    *  任务状态，包含success，fail,executing
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
    * @param string|null $status 任务状态，包含success，fail,executing
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets citationUrns
    *  工作流的引用。
    *
    * @return string[]|null
    */
    public function getCitationUrns()
    {
        return $this->container['citationUrns'];
    }

    /**
    * Sets citationUrns
    *
    * @param string[]|null $citationUrns 工作流的引用。
    *
    * @return $this
    */
    public function setCitationUrns($citationUrns)
    {
        $this->container['citationUrns'] = $citationUrns;
        return $this;
    }

    /**
    * Gets lastExecutionEndTime
    *  最近一次执行结束时间，为utc时间毫秒数
    *
    * @return int|null
    */
    public function getLastExecutionEndTime()
    {
        return $this->container['lastExecutionEndTime'];
    }

    /**
    * Sets lastExecutionEndTime
    *
    * @param int|null $lastExecutionEndTime 最近一次执行结束时间，为utc时间毫秒数
    *
    * @return $this
    */
    public function setLastExecutionEndTime($lastExecutionEndTime)
    {
        $this->container['lastExecutionEndTime'] = $lastExecutionEndTime;
        return $this;
    }

    /**
    * Gets lastExecutionStartTime
    *  最近一次执行开始时间，为utc时间毫秒数
    *
    * @return int|null
    */
    public function getLastExecutionStartTime()
    {
        return $this->container['lastExecutionStartTime'];
    }

    /**
    * Sets lastExecutionStartTime
    *
    * @param int|null $lastExecutionStartTime 最近一次执行开始时间，为utc时间毫秒数
    *
    * @return $this
    */
    public function setLastExecutionStartTime($lastExecutionStartTime)
    {
        $this->container['lastExecutionStartTime'] = $lastExecutionStartTime;
        return $this;
    }

    /**
    * Gets quote
    *  引用，参数引用
    *
    * @return string[]|null
    */
    public function getQuote()
    {
        return $this->container['quote'];
    }

    /**
    * Sets quote
    *
    * @param string[]|null $quote 引用，参数引用
    *
    * @return $this
    */
    public function setQuote($quote)
    {
        $this->container['quote'] = $quote;
        return $this;
    }

    /**
    * Gets jobName
    *  作业名称
    *
    * @return string|null
    */
    public function getJobName()
    {
        return $this->container['jobName'];
    }

    /**
    * Sets jobName
    *
    * @param string|null $jobName 作业名称
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets jobId
    *  作业id
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId 作业id
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets serviceScenario
    *  服务场景分类
    *
    * @return string|null
    */
    public function getServiceScenario()
    {
        return $this->container['serviceScenario'];
    }

    /**
    * Sets serviceScenario
    *
    * @param string|null $serviceScenario 服务场景分类
    *
    * @return $this
    */
    public function setServiceScenario($serviceScenario)
    {
        $this->container['serviceScenario'] = $serviceScenario;
        return $this;
    }

    /**
    * Gets serviceName
    *  服务名称
    *
    * @return string|null
    */
    public function getServiceName()
    {
        return $this->container['serviceName'];
    }

    /**
    * Sets serviceName
    *
    * @param string|null $serviceName 服务名称
    *
    * @return $this
    */
    public function setServiceName($serviceName)
    {
        $this->container['serviceName'] = $serviceName;
        return $this;
    }

    /**
    * Gets taskType
    *  任务类型
    *
    * @return string|null
    */
    public function getTaskType()
    {
        return $this->container['taskType'];
    }

    /**
    * Sets taskType
    *
    * @param string|null $taskType 任务类型
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
        return $this;
    }

    /**
    * Gets projectId
    *  functiongraph返回的PROJECT_ID
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
    * @param string|null $projectId functiongraph返回的PROJECT_ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets workflowId
    *  functiongraph返回的WORKFLOW_ID
    *
    * @return string|null
    */
    public function getWorkflowId()
    {
        return $this->container['workflowId'];
    }

    /**
    * Sets workflowId
    *
    * @param string|null $workflowId functiongraph返回的WORKFLOW_ID
    *
    * @return $this
    */
    public function setWorkflowId($workflowId)
    {
        $this->container['workflowId'] = $workflowId;
        return $this;
    }

    /**
    * Gets taskStatus
    *  任务状态
    *
    * @return string|null
    */
    public function getTaskStatus()
    {
        return $this->container['taskStatus'];
    }

    /**
    * Sets taskStatus
    *
    * @param string|null $taskStatus 任务状态
    *
    * @return $this
    */
    public function setTaskStatus($taskStatus)
    {
        $this->container['taskStatus'] = $taskStatus;
        return $this;
    }

    /**
    * Gets nodes
    *  任务节点
    *
    * @return \HuaweiCloud\SDK\Aom\V1\Model\Node[]|null
    */
    public function getNodes()
    {
        return $this->container['nodes'];
    }

    /**
    * Sets nodes
    *
    * @param \HuaweiCloud\SDK\Aom\V1\Model\Node[]|null $nodes 任务节点
    *
    * @return $this
    */
    public function setNodes($nodes)
    {
        $this->container['nodes'] = $nodes;
        return $this;
    }

    /**
    * Gets editTime
    *  编辑时间
    *
    * @return int|null
    */
    public function getEditTime()
    {
        return $this->container['editTime'];
    }

    /**
    * Sets editTime
    *
    * @param int|null $editTime 编辑时间
    *
    * @return $this
    */
    public function setEditTime($editTime)
    {
        $this->container['editTime'] = $editTime;
        return $this;
    }

    /**
    * Gets executionActionRules
    *  执行动作细粒度权限
    *
    * @return string[]|null
    */
    public function getExecutionActionRules()
    {
        return $this->container['executionActionRules'];
    }

    /**
    * Sets executionActionRules
    *
    * @param string[]|null $executionActionRules 执行动作细粒度权限
    *
    * @return $this
    */
    public function setExecutionActionRules($executionActionRules)
    {
        $this->container['executionActionRules'] = $executionActionRules;
        return $this;
    }

    /**
    * Gets executionPermission
    *  云服务权限
    *
    * @return string[]|null
    */
    public function getExecutionPermission()
    {
        return $this->container['executionPermission'];
    }

    /**
    * Sets executionPermission
    *
    * @param string[]|null $executionPermission 云服务权限
    *
    * @return $this
    */
    public function setExecutionPermission($executionPermission)
    {
        $this->container['executionPermission'] = $executionPermission;
        return $this;
    }

    /**
    * Gets globalParameters
    *  全局参数
    *
    * @return \HuaweiCloud\SDK\Aom\V1\Model\Parameter[]|null
    */
    public function getGlobalParameters()
    {
        return $this->container['globalParameters'];
    }

    /**
    * Sets globalParameters
    *
    * @param \HuaweiCloud\SDK\Aom\V1\Model\Parameter[]|null $globalParameters 全局参数
    *
    * @return $this
    */
    public function setGlobalParameters($globalParameters)
    {
        $this->container['globalParameters'] = $globalParameters;
        return $this;
    }

    /**
    * Gets isDelete
    *  逻辑删除
    *
    * @return bool|null
    */
    public function getIsDelete()
    {
        return $this->container['isDelete'];
    }

    /**
    * Sets isDelete
    *
    * @param bool|null $isDelete 逻辑删除
    *
    * @return $this
    */
    public function setIsDelete($isDelete)
    {
        $this->container['isDelete'] = $isDelete;
        return $this;
    }

    /**
    * Gets steps
    *  任务步骤
    *
    * @return \HuaweiCloud\SDK\Aom\V1\Model\Step[]|null
    */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
    * Sets steps
    *
    * @param \HuaweiCloud\SDK\Aom\V1\Model\Step[]|null $steps 任务步骤
    *
    * @return $this
    */
    public function setSteps($steps)
    {
        $this->container['steps'] = $steps;
        return $this;
    }

    /**
    * Gets output
    *  任务输出
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
    * @param string|null $output 任务输出
    *
    * @return $this
    */
    public function setOutput($output)
    {
        $this->container['output'] = $output;
        return $this;
    }

    /**
    * Gets triggerId
    *  触发器id
    *
    * @return string|null
    */
    public function getTriggerId()
    {
        return $this->container['triggerId'];
    }

    /**
    * Sets triggerId
    *
    * @param string|null $triggerId 触发器id
    *
    * @return $this
    */
    public function setTriggerId($triggerId)
    {
        $this->container['triggerId'] = $triggerId;
        return $this;
    }

    /**
    * Gets triggerStatus
    *  触发器状态
    *
    * @return string|null
    */
    public function getTriggerStatus()
    {
        return $this->container['triggerStatus'];
    }

    /**
    * Sets triggerStatus
    *
    * @param string|null $triggerStatus 触发器状态
    *
    * @return $this
    */
    public function setTriggerStatus($triggerStatus)
    {
        $this->container['triggerStatus'] = $triggerStatus;
        return $this;
    }

    /**
    * Gets approveId
    *  审批id
    *
    * @return string|null
    */
    public function getApproveId()
    {
        return $this->container['approveId'];
    }

    /**
    * Sets approveId
    *
    * @param string|null $approveId 审批id
    *
    * @return $this
    */
    public function setApproveId($approveId)
    {
        $this->container['approveId'] = $approveId;
        return $this;
    }

    /**
    * Gets templateI18n
    *  templateI18n
    *
    * @return \HuaweiCloud\SDK\Aom\V1\Model\WorkFlowModel|null
    */
    public function getTemplateI18n()
    {
        return $this->container['templateI18n'];
    }

    /**
    * Sets templateI18n
    *
    * @param \HuaweiCloud\SDK\Aom\V1\Model\WorkFlowModel|null $templateI18n templateI18n
    *
    * @return $this
    */
    public function setTemplateI18n($templateI18n)
    {
        $this->container['templateI18n'] = $templateI18n;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  任务所属的企业项目
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 任务所属的企业项目
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets lastExecuteBy
    *  任务最后一次执行人
    *
    * @return string|null
    */
    public function getLastExecuteBy()
    {
        return $this->container['lastExecuteBy'];
    }

    /**
    * Sets lastExecuteBy
    *
    * @param string|null $lastExecuteBy 任务最后一次执行人
    *
    * @return $this
    */
    public function setLastExecuteBy($lastExecuteBy)
    {
        $this->container['lastExecuteBy'] = $lastExecuteBy;
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

