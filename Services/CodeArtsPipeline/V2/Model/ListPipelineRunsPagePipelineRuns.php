<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPipelineRunsPagePipelineRuns implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPipelineRunsPage_pipeline_runs';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pipelineId  **参数解释**： 流水线ID，可以通过[查询流水线列表](ListPipelines.xml)接口，其中pipelines.pipelineId即为流水线ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * pipelineRunId  **参数解释**： 流水线运行实例ID，[启动流水线](RunPipeline.xml)接口的返回值即为流水线运行实例ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * executorId  **参数解释**： 执行人ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * executorName  **参数解释**： 执行人名称。 **取值范围**： 不涉及。
    * stageStatusList  **参数解释**： 阶段信息列表。 **取值范围**： 不涉及。
    * status  **参数解释**： 流水线运行实例状态。 **取值范围**： - COMPLETED：已完成。 - RUNNING：运行中。 - FAILED：失败。 - CANCELED：取消。 - PAUSED：暂停。 - SUSPEND：挂起。 - IGNORED：忽略。
    * runNumber  **参数解释**： 流水线运行序号。 **取值范围**： 大于等于 1。
    * triggerType  **参数解释**： 触发类型 **取值范围**： - Manual：手动触发。 - Scheduler：定时任务。 - MR：MR触发。 - Push：Push事件触发。 - CreateTag：Tag事件触发。 - Issue：Issue触发。 - Note：评论触发。
    * buildParams  buildParams
    * artifactParams  artifactParams
    * startTime  **参数解释**： 流水线开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 流水线结束时间。 **取值范围**： 不涉及。
    * detailUrl  **参数解释**： 详情页地址，如果x-auth-token中的region信息为空，则详情页地址也返回空。 **取值范围**： 不涉及。
    * modifyUrl  **参数解释**： 修改页地址，如果x-auth-token中的region信息为空，则修改页地址也返回空。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pipelineId' => 'string',
            'pipelineRunId' => 'string',
            'executorId' => 'string',
            'executorName' => 'string',
            'stageStatusList' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListPipelineRunsPageStageStatusList[]',
            'status' => 'string',
            'runNumber' => 'int',
            'triggerType' => 'string',
            'buildParams' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListPipelineRunsPageBuildParams',
            'artifactParams' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineLatestRunArtifactParams',
            'startTime' => 'int',
            'endTime' => 'int',
            'detailUrl' => 'string',
            'modifyUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pipelineId  **参数解释**： 流水线ID，可以通过[查询流水线列表](ListPipelines.xml)接口，其中pipelines.pipelineId即为流水线ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * pipelineRunId  **参数解释**： 流水线运行实例ID，[启动流水线](RunPipeline.xml)接口的返回值即为流水线运行实例ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * executorId  **参数解释**： 执行人ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * executorName  **参数解释**： 执行人名称。 **取值范围**： 不涉及。
    * stageStatusList  **参数解释**： 阶段信息列表。 **取值范围**： 不涉及。
    * status  **参数解释**： 流水线运行实例状态。 **取值范围**： - COMPLETED：已完成。 - RUNNING：运行中。 - FAILED：失败。 - CANCELED：取消。 - PAUSED：暂停。 - SUSPEND：挂起。 - IGNORED：忽略。
    * runNumber  **参数解释**： 流水线运行序号。 **取值范围**： 大于等于 1。
    * triggerType  **参数解释**： 触发类型 **取值范围**： - Manual：手动触发。 - Scheduler：定时任务。 - MR：MR触发。 - Push：Push事件触发。 - CreateTag：Tag事件触发。 - Issue：Issue触发。 - Note：评论触发。
    * buildParams  buildParams
    * artifactParams  artifactParams
    * startTime  **参数解释**： 流水线开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 流水线结束时间。 **取值范围**： 不涉及。
    * detailUrl  **参数解释**： 详情页地址，如果x-auth-token中的region信息为空，则详情页地址也返回空。 **取值范围**： 不涉及。
    * modifyUrl  **参数解释**： 修改页地址，如果x-auth-token中的region信息为空，则修改页地址也返回空。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pipelineId' => null,
        'pipelineRunId' => null,
        'executorId' => null,
        'executorName' => null,
        'stageStatusList' => null,
        'status' => null,
        'runNumber' => 'int32',
        'triggerType' => null,
        'buildParams' => null,
        'artifactParams' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'detailUrl' => null,
        'modifyUrl' => null
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
    * pipelineId  **参数解释**： 流水线ID，可以通过[查询流水线列表](ListPipelines.xml)接口，其中pipelines.pipelineId即为流水线ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * pipelineRunId  **参数解释**： 流水线运行实例ID，[启动流水线](RunPipeline.xml)接口的返回值即为流水线运行实例ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * executorId  **参数解释**： 执行人ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * executorName  **参数解释**： 执行人名称。 **取值范围**： 不涉及。
    * stageStatusList  **参数解释**： 阶段信息列表。 **取值范围**： 不涉及。
    * status  **参数解释**： 流水线运行实例状态。 **取值范围**： - COMPLETED：已完成。 - RUNNING：运行中。 - FAILED：失败。 - CANCELED：取消。 - PAUSED：暂停。 - SUSPEND：挂起。 - IGNORED：忽略。
    * runNumber  **参数解释**： 流水线运行序号。 **取值范围**： 大于等于 1。
    * triggerType  **参数解释**： 触发类型 **取值范围**： - Manual：手动触发。 - Scheduler：定时任务。 - MR：MR触发。 - Push：Push事件触发。 - CreateTag：Tag事件触发。 - Issue：Issue触发。 - Note：评论触发。
    * buildParams  buildParams
    * artifactParams  artifactParams
    * startTime  **参数解释**： 流水线开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 流水线结束时间。 **取值范围**： 不涉及。
    * detailUrl  **参数解释**： 详情页地址，如果x-auth-token中的region信息为空，则详情页地址也返回空。 **取值范围**： 不涉及。
    * modifyUrl  **参数解释**： 修改页地址，如果x-auth-token中的region信息为空，则修改页地址也返回空。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pipelineId' => 'pipeline_id',
            'pipelineRunId' => 'pipeline_run_id',
            'executorId' => 'executor_id',
            'executorName' => 'executor_name',
            'stageStatusList' => 'stage_status_list',
            'status' => 'status',
            'runNumber' => 'run_number',
            'triggerType' => 'trigger_type',
            'buildParams' => 'build_params',
            'artifactParams' => 'artifact_params',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'detailUrl' => 'detail_url',
            'modifyUrl' => 'modify_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pipelineId  **参数解释**： 流水线ID，可以通过[查询流水线列表](ListPipelines.xml)接口，其中pipelines.pipelineId即为流水线ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * pipelineRunId  **参数解释**： 流水线运行实例ID，[启动流水线](RunPipeline.xml)接口的返回值即为流水线运行实例ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * executorId  **参数解释**： 执行人ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * executorName  **参数解释**： 执行人名称。 **取值范围**： 不涉及。
    * stageStatusList  **参数解释**： 阶段信息列表。 **取值范围**： 不涉及。
    * status  **参数解释**： 流水线运行实例状态。 **取值范围**： - COMPLETED：已完成。 - RUNNING：运行中。 - FAILED：失败。 - CANCELED：取消。 - PAUSED：暂停。 - SUSPEND：挂起。 - IGNORED：忽略。
    * runNumber  **参数解释**： 流水线运行序号。 **取值范围**： 大于等于 1。
    * triggerType  **参数解释**： 触发类型 **取值范围**： - Manual：手动触发。 - Scheduler：定时任务。 - MR：MR触发。 - Push：Push事件触发。 - CreateTag：Tag事件触发。 - Issue：Issue触发。 - Note：评论触发。
    * buildParams  buildParams
    * artifactParams  artifactParams
    * startTime  **参数解释**： 流水线开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 流水线结束时间。 **取值范围**： 不涉及。
    * detailUrl  **参数解释**： 详情页地址，如果x-auth-token中的region信息为空，则详情页地址也返回空。 **取值范围**： 不涉及。
    * modifyUrl  **参数解释**： 修改页地址，如果x-auth-token中的region信息为空，则修改页地址也返回空。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'pipelineId' => 'setPipelineId',
            'pipelineRunId' => 'setPipelineRunId',
            'executorId' => 'setExecutorId',
            'executorName' => 'setExecutorName',
            'stageStatusList' => 'setStageStatusList',
            'status' => 'setStatus',
            'runNumber' => 'setRunNumber',
            'triggerType' => 'setTriggerType',
            'buildParams' => 'setBuildParams',
            'artifactParams' => 'setArtifactParams',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'detailUrl' => 'setDetailUrl',
            'modifyUrl' => 'setModifyUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pipelineId  **参数解释**： 流水线ID，可以通过[查询流水线列表](ListPipelines.xml)接口，其中pipelines.pipelineId即为流水线ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * pipelineRunId  **参数解释**： 流水线运行实例ID，[启动流水线](RunPipeline.xml)接口的返回值即为流水线运行实例ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * executorId  **参数解释**： 执行人ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * executorName  **参数解释**： 执行人名称。 **取值范围**： 不涉及。
    * stageStatusList  **参数解释**： 阶段信息列表。 **取值范围**： 不涉及。
    * status  **参数解释**： 流水线运行实例状态。 **取值范围**： - COMPLETED：已完成。 - RUNNING：运行中。 - FAILED：失败。 - CANCELED：取消。 - PAUSED：暂停。 - SUSPEND：挂起。 - IGNORED：忽略。
    * runNumber  **参数解释**： 流水线运行序号。 **取值范围**： 大于等于 1。
    * triggerType  **参数解释**： 触发类型 **取值范围**： - Manual：手动触发。 - Scheduler：定时任务。 - MR：MR触发。 - Push：Push事件触发。 - CreateTag：Tag事件触发。 - Issue：Issue触发。 - Note：评论触发。
    * buildParams  buildParams
    * artifactParams  artifactParams
    * startTime  **参数解释**： 流水线开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 流水线结束时间。 **取值范围**： 不涉及。
    * detailUrl  **参数解释**： 详情页地址，如果x-auth-token中的region信息为空，则详情页地址也返回空。 **取值范围**： 不涉及。
    * modifyUrl  **参数解释**： 修改页地址，如果x-auth-token中的region信息为空，则修改页地址也返回空。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'pipelineId' => 'getPipelineId',
            'pipelineRunId' => 'getPipelineRunId',
            'executorId' => 'getExecutorId',
            'executorName' => 'getExecutorName',
            'stageStatusList' => 'getStageStatusList',
            'status' => 'getStatus',
            'runNumber' => 'getRunNumber',
            'triggerType' => 'getTriggerType',
            'buildParams' => 'getBuildParams',
            'artifactParams' => 'getArtifactParams',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'detailUrl' => 'getDetailUrl',
            'modifyUrl' => 'getModifyUrl'
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
        $this->container['pipelineId'] = isset($data['pipelineId']) ? $data['pipelineId'] : null;
        $this->container['pipelineRunId'] = isset($data['pipelineRunId']) ? $data['pipelineRunId'] : null;
        $this->container['executorId'] = isset($data['executorId']) ? $data['executorId'] : null;
        $this->container['executorName'] = isset($data['executorName']) ? $data['executorName'] : null;
        $this->container['stageStatusList'] = isset($data['stageStatusList']) ? $data['stageStatusList'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['runNumber'] = isset($data['runNumber']) ? $data['runNumber'] : null;
        $this->container['triggerType'] = isset($data['triggerType']) ? $data['triggerType'] : null;
        $this->container['buildParams'] = isset($data['buildParams']) ? $data['buildParams'] : null;
        $this->container['artifactParams'] = isset($data['artifactParams']) ? $data['artifactParams'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['detailUrl'] = isset($data['detailUrl']) ? $data['detailUrl'] : null;
        $this->container['modifyUrl'] = isset($data['modifyUrl']) ? $data['modifyUrl'] : null;
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
    * Gets pipelineId
    *  **参数解释**： 流水线ID，可以通过[查询流水线列表](ListPipelines.xml)接口，其中pipelines.pipelineId即为流水线ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    *
    * @return string|null
    */
    public function getPipelineId()
    {
        return $this->container['pipelineId'];
    }

    /**
    * Sets pipelineId
    *
    * @param string|null $pipelineId **参数解释**： 流水线ID，可以通过[查询流水线列表](ListPipelines.xml)接口，其中pipelines.pipelineId即为流水线ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    *
    * @return $this
    */
    public function setPipelineId($pipelineId)
    {
        $this->container['pipelineId'] = $pipelineId;
        return $this;
    }

    /**
    * Gets pipelineRunId
    *  **参数解释**： 流水线运行实例ID，[启动流水线](RunPipeline.xml)接口的返回值即为流水线运行实例ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    *
    * @return string|null
    */
    public function getPipelineRunId()
    {
        return $this->container['pipelineRunId'];
    }

    /**
    * Sets pipelineRunId
    *
    * @param string|null $pipelineRunId **参数解释**： 流水线运行实例ID，[启动流水线](RunPipeline.xml)接口的返回值即为流水线运行实例ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    *
    * @return $this
    */
    public function setPipelineRunId($pipelineRunId)
    {
        $this->container['pipelineRunId'] = $pipelineRunId;
        return $this;
    }

    /**
    * Gets executorId
    *  **参数解释**： 执行人ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    *
    * @return string|null
    */
    public function getExecutorId()
    {
        return $this->container['executorId'];
    }

    /**
    * Sets executorId
    *
    * @param string|null $executorId **参数解释**： 执行人ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    *
    * @return $this
    */
    public function setExecutorId($executorId)
    {
        $this->container['executorId'] = $executorId;
        return $this;
    }

    /**
    * Gets executorName
    *  **参数解释**： 执行人名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getExecutorName()
    {
        return $this->container['executorName'];
    }

    /**
    * Sets executorName
    *
    * @param string|null $executorName **参数解释**： 执行人名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setExecutorName($executorName)
    {
        $this->container['executorName'] = $executorName;
        return $this;
    }

    /**
    * Gets stageStatusList
    *  **参数解释**： 阶段信息列表。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListPipelineRunsPageStageStatusList[]|null
    */
    public function getStageStatusList()
    {
        return $this->container['stageStatusList'];
    }

    /**
    * Sets stageStatusList
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListPipelineRunsPageStageStatusList[]|null $stageStatusList **参数解释**： 阶段信息列表。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setStageStatusList($stageStatusList)
    {
        $this->container['stageStatusList'] = $stageStatusList;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 流水线运行实例状态。 **取值范围**： - COMPLETED：已完成。 - RUNNING：运行中。 - FAILED：失败。 - CANCELED：取消。 - PAUSED：暂停。 - SUSPEND：挂起。 - IGNORED：忽略。
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
    * @param string|null $status **参数解释**： 流水线运行实例状态。 **取值范围**： - COMPLETED：已完成。 - RUNNING：运行中。 - FAILED：失败。 - CANCELED：取消。 - PAUSED：暂停。 - SUSPEND：挂起。 - IGNORED：忽略。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets runNumber
    *  **参数解释**： 流水线运行序号。 **取值范围**： 大于等于 1。
    *
    * @return int|null
    */
    public function getRunNumber()
    {
        return $this->container['runNumber'];
    }

    /**
    * Sets runNumber
    *
    * @param int|null $runNumber **参数解释**： 流水线运行序号。 **取值范围**： 大于等于 1。
    *
    * @return $this
    */
    public function setRunNumber($runNumber)
    {
        $this->container['runNumber'] = $runNumber;
        return $this;
    }

    /**
    * Gets triggerType
    *  **参数解释**： 触发类型 **取值范围**： - Manual：手动触发。 - Scheduler：定时任务。 - MR：MR触发。 - Push：Push事件触发。 - CreateTag：Tag事件触发。 - Issue：Issue触发。 - Note：评论触发。
    *
    * @return string|null
    */
    public function getTriggerType()
    {
        return $this->container['triggerType'];
    }

    /**
    * Sets triggerType
    *
    * @param string|null $triggerType **参数解释**： 触发类型 **取值范围**： - Manual：手动触发。 - Scheduler：定时任务。 - MR：MR触发。 - Push：Push事件触发。 - CreateTag：Tag事件触发。 - Issue：Issue触发。 - Note：评论触发。
    *
    * @return $this
    */
    public function setTriggerType($triggerType)
    {
        $this->container['triggerType'] = $triggerType;
        return $this;
    }

    /**
    * Gets buildParams
    *  buildParams
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListPipelineRunsPageBuildParams|null
    */
    public function getBuildParams()
    {
        return $this->container['buildParams'];
    }

    /**
    * Sets buildParams
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListPipelineRunsPageBuildParams|null $buildParams buildParams
    *
    * @return $this
    */
    public function setBuildParams($buildParams)
    {
        $this->container['buildParams'] = $buildParams;
        return $this;
    }

    /**
    * Gets artifactParams
    *  artifactParams
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineLatestRunArtifactParams|null
    */
    public function getArtifactParams()
    {
        return $this->container['artifactParams'];
    }

    /**
    * Sets artifactParams
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineLatestRunArtifactParams|null $artifactParams artifactParams
    *
    * @return $this
    */
    public function setArtifactParams($artifactParams)
    {
        $this->container['artifactParams'] = $artifactParams;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释**： 流水线开始时间。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime **参数解释**： 流水线开始时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  **参数解释**： 流水线结束时间。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime **参数解释**： 流水线结束时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets detailUrl
    *  **参数解释**： 详情页地址，如果x-auth-token中的region信息为空，则详情页地址也返回空。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDetailUrl()
    {
        return $this->container['detailUrl'];
    }

    /**
    * Sets detailUrl
    *
    * @param string|null $detailUrl **参数解释**： 详情页地址，如果x-auth-token中的region信息为空，则详情页地址也返回空。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDetailUrl($detailUrl)
    {
        $this->container['detailUrl'] = $detailUrl;
        return $this;
    }

    /**
    * Gets modifyUrl
    *  **参数解释**： 修改页地址，如果x-auth-token中的region信息为空，则修改页地址也返回空。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getModifyUrl()
    {
        return $this->container['modifyUrl'];
    }

    /**
    * Sets modifyUrl
    *
    * @param string|null $modifyUrl **参数解释**： 修改页地址，如果x-auth-token中的region信息为空，则修改页地址也返回空。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setModifyUrl($modifyUrl)
    {
        $this->container['modifyUrl'] = $modifyUrl;
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

