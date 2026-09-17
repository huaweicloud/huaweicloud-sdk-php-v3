<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPipelineRunsQuery implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPipelineRunsQuery';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  **参数解释**： 流水线状态列表。 **约束限制**： 不涉及。 **取值范围**： - COMPLETED：已完成。 - RUNNING：运行中。 - FAILED：失败。 - CANCELED：取消。 - PAUSED：暂停。 - SUSPEND：挂起。 - IGNORED：忽略。 **默认取值**： 不涉及。
    * startTime  **参数解释**： 流水线开始时间。 **约束限制**： 不涉及。 **取值范围**： 时间戳或者yyyy-MM-dd HH:mm:ss格式均可。 **默认取值**： 不涉及。
    * endTime  **参数解释**： 流水线结束时间。 **约束限制**： 不涉及。 **取值范围**： 时间戳或者yyyy-MM-dd HH:mm:ss格式均可。 **默认取值**： 不涉及。
    * updateTime  **参数解释**： 流水线状态更新时间。 **约束限制**： 不涉及。 **取值范围**： 时间戳或者yyyy-MM-dd HH:mm:ss格式均可。 **默认取值**： 不涉及。
    * triggerType  **参数解释**： 触发类型列表。 **约束限制**： 不涉及。 **取值范围**： - Manual：手动触发。 - Scheduler：定时触发。 - RollBack：回退触发。 - CreateTag：Tag事件触发。 - Note：评论触发。 - Issue：Issue触发。 - MR：MR触发。 - CR：CR触发。 - Generic：流水线触发器触发。 - Push：Push事件触发。 - SubPipeline：子流水线触发。 **默认取值**： 不涉及。
    * executorIds  **参数解释**： 执行人ID列表。 **约束限制**： 不涉及。 **取值范围**： 32位字符，仅由数字和字母组成。 **默认取值**： 不涉及。
    * offset  **参数解释**： 起始偏移。 **约束限制**： 不涉及。 **取值范围**： 大于等于零。 **默认取值**： 不涉及。
    * limit  **参数解释**： 查询数量。 **约束限制**： 不涉及。 **取值范围**： 大于等于零。 **默认取值**： 不涉及。
    * sortKey  **参数解释**： 排序字段名称。 **约束限制**： 不涉及。 **取值范围**： \"start_time\" - 流水线开始时间。 \"update_time\" - 流水线更新时间。 **默认取值**： 不涉及。
    * sortDir  **参数解释**： 排序规则。 **约束限制**： 不涉及。 **取值范围**： - asc：按排序字段升序。 - desc：按排序字段降序。 **默认取值**： 不涉及。
    * showJobDetails  **参数解释**： 是否返回Job状态详情。 **约束限制**： 不涉及。 **取值范围**： - true：返回Job状态列表。 - false：不返回。 **默认取值**： false。
    * stageId  **参数解释**： 阶段ID，用于指定返回Job状态详情的阶段。 **约束限制**： 不涉及。 **取值范围**： 32位字符，仅由数字和字母组成。 **默认取值**： 不涉及，为空时默认取流水线最后一个阶段。
    * jobId  **参数解释**： Job ID，仅在show_job_details为true时生效，用于过滤包含指定Job的执行记录。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string[]',
            'startTime' => 'string',
            'endTime' => 'string',
            'updateTime' => 'string',
            'triggerType' => 'string[]',
            'executorIds' => 'string[]',
            'offset' => 'int',
            'limit' => 'int',
            'sortKey' => 'string',
            'sortDir' => 'string',
            'showJobDetails' => 'bool',
            'stageId' => 'string',
            'jobId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  **参数解释**： 流水线状态列表。 **约束限制**： 不涉及。 **取值范围**： - COMPLETED：已完成。 - RUNNING：运行中。 - FAILED：失败。 - CANCELED：取消。 - PAUSED：暂停。 - SUSPEND：挂起。 - IGNORED：忽略。 **默认取值**： 不涉及。
    * startTime  **参数解释**： 流水线开始时间。 **约束限制**： 不涉及。 **取值范围**： 时间戳或者yyyy-MM-dd HH:mm:ss格式均可。 **默认取值**： 不涉及。
    * endTime  **参数解释**： 流水线结束时间。 **约束限制**： 不涉及。 **取值范围**： 时间戳或者yyyy-MM-dd HH:mm:ss格式均可。 **默认取值**： 不涉及。
    * updateTime  **参数解释**： 流水线状态更新时间。 **约束限制**： 不涉及。 **取值范围**： 时间戳或者yyyy-MM-dd HH:mm:ss格式均可。 **默认取值**： 不涉及。
    * triggerType  **参数解释**： 触发类型列表。 **约束限制**： 不涉及。 **取值范围**： - Manual：手动触发。 - Scheduler：定时触发。 - RollBack：回退触发。 - CreateTag：Tag事件触发。 - Note：评论触发。 - Issue：Issue触发。 - MR：MR触发。 - CR：CR触发。 - Generic：流水线触发器触发。 - Push：Push事件触发。 - SubPipeline：子流水线触发。 **默认取值**： 不涉及。
    * executorIds  **参数解释**： 执行人ID列表。 **约束限制**： 不涉及。 **取值范围**： 32位字符，仅由数字和字母组成。 **默认取值**： 不涉及。
    * offset  **参数解释**： 起始偏移。 **约束限制**： 不涉及。 **取值范围**： 大于等于零。 **默认取值**： 不涉及。
    * limit  **参数解释**： 查询数量。 **约束限制**： 不涉及。 **取值范围**： 大于等于零。 **默认取值**： 不涉及。
    * sortKey  **参数解释**： 排序字段名称。 **约束限制**： 不涉及。 **取值范围**： \"start_time\" - 流水线开始时间。 \"update_time\" - 流水线更新时间。 **默认取值**： 不涉及。
    * sortDir  **参数解释**： 排序规则。 **约束限制**： 不涉及。 **取值范围**： - asc：按排序字段升序。 - desc：按排序字段降序。 **默认取值**： 不涉及。
    * showJobDetails  **参数解释**： 是否返回Job状态详情。 **约束限制**： 不涉及。 **取值范围**： - true：返回Job状态列表。 - false：不返回。 **默认取值**： false。
    * stageId  **参数解释**： 阶段ID，用于指定返回Job状态详情的阶段。 **约束限制**： 不涉及。 **取值范围**： 32位字符，仅由数字和字母组成。 **默认取值**： 不涉及，为空时默认取流水线最后一个阶段。
    * jobId  **参数解释**： Job ID，仅在show_job_details为true时生效，用于过滤包含指定Job的执行记录。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'startTime' => null,
        'endTime' => null,
        'updateTime' => null,
        'triggerType' => null,
        'executorIds' => null,
        'offset' => 'int64',
        'limit' => 'int64',
        'sortKey' => null,
        'sortDir' => null,
        'showJobDetails' => null,
        'stageId' => null,
        'jobId' => null
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
    * status  **参数解释**： 流水线状态列表。 **约束限制**： 不涉及。 **取值范围**： - COMPLETED：已完成。 - RUNNING：运行中。 - FAILED：失败。 - CANCELED：取消。 - PAUSED：暂停。 - SUSPEND：挂起。 - IGNORED：忽略。 **默认取值**： 不涉及。
    * startTime  **参数解释**： 流水线开始时间。 **约束限制**： 不涉及。 **取值范围**： 时间戳或者yyyy-MM-dd HH:mm:ss格式均可。 **默认取值**： 不涉及。
    * endTime  **参数解释**： 流水线结束时间。 **约束限制**： 不涉及。 **取值范围**： 时间戳或者yyyy-MM-dd HH:mm:ss格式均可。 **默认取值**： 不涉及。
    * updateTime  **参数解释**： 流水线状态更新时间。 **约束限制**： 不涉及。 **取值范围**： 时间戳或者yyyy-MM-dd HH:mm:ss格式均可。 **默认取值**： 不涉及。
    * triggerType  **参数解释**： 触发类型列表。 **约束限制**： 不涉及。 **取值范围**： - Manual：手动触发。 - Scheduler：定时触发。 - RollBack：回退触发。 - CreateTag：Tag事件触发。 - Note：评论触发。 - Issue：Issue触发。 - MR：MR触发。 - CR：CR触发。 - Generic：流水线触发器触发。 - Push：Push事件触发。 - SubPipeline：子流水线触发。 **默认取值**： 不涉及。
    * executorIds  **参数解释**： 执行人ID列表。 **约束限制**： 不涉及。 **取值范围**： 32位字符，仅由数字和字母组成。 **默认取值**： 不涉及。
    * offset  **参数解释**： 起始偏移。 **约束限制**： 不涉及。 **取值范围**： 大于等于零。 **默认取值**： 不涉及。
    * limit  **参数解释**： 查询数量。 **约束限制**： 不涉及。 **取值范围**： 大于等于零。 **默认取值**： 不涉及。
    * sortKey  **参数解释**： 排序字段名称。 **约束限制**： 不涉及。 **取值范围**： \"start_time\" - 流水线开始时间。 \"update_time\" - 流水线更新时间。 **默认取值**： 不涉及。
    * sortDir  **参数解释**： 排序规则。 **约束限制**： 不涉及。 **取值范围**： - asc：按排序字段升序。 - desc：按排序字段降序。 **默认取值**： 不涉及。
    * showJobDetails  **参数解释**： 是否返回Job状态详情。 **约束限制**： 不涉及。 **取值范围**： - true：返回Job状态列表。 - false：不返回。 **默认取值**： false。
    * stageId  **参数解释**： 阶段ID，用于指定返回Job状态详情的阶段。 **约束限制**： 不涉及。 **取值范围**： 32位字符，仅由数字和字母组成。 **默认取值**： 不涉及，为空时默认取流水线最后一个阶段。
    * jobId  **参数解释**： Job ID，仅在show_job_details为true时生效，用于过滤包含指定Job的执行记录。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'updateTime' => 'update_time',
            'triggerType' => 'trigger_type',
            'executorIds' => 'executor_ids',
            'offset' => 'offset',
            'limit' => 'limit',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'showJobDetails' => 'show_job_details',
            'stageId' => 'stage_id',
            'jobId' => 'job_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  **参数解释**： 流水线状态列表。 **约束限制**： 不涉及。 **取值范围**： - COMPLETED：已完成。 - RUNNING：运行中。 - FAILED：失败。 - CANCELED：取消。 - PAUSED：暂停。 - SUSPEND：挂起。 - IGNORED：忽略。 **默认取值**： 不涉及。
    * startTime  **参数解释**： 流水线开始时间。 **约束限制**： 不涉及。 **取值范围**： 时间戳或者yyyy-MM-dd HH:mm:ss格式均可。 **默认取值**： 不涉及。
    * endTime  **参数解释**： 流水线结束时间。 **约束限制**： 不涉及。 **取值范围**： 时间戳或者yyyy-MM-dd HH:mm:ss格式均可。 **默认取值**： 不涉及。
    * updateTime  **参数解释**： 流水线状态更新时间。 **约束限制**： 不涉及。 **取值范围**： 时间戳或者yyyy-MM-dd HH:mm:ss格式均可。 **默认取值**： 不涉及。
    * triggerType  **参数解释**： 触发类型列表。 **约束限制**： 不涉及。 **取值范围**： - Manual：手动触发。 - Scheduler：定时触发。 - RollBack：回退触发。 - CreateTag：Tag事件触发。 - Note：评论触发。 - Issue：Issue触发。 - MR：MR触发。 - CR：CR触发。 - Generic：流水线触发器触发。 - Push：Push事件触发。 - SubPipeline：子流水线触发。 **默认取值**： 不涉及。
    * executorIds  **参数解释**： 执行人ID列表。 **约束限制**： 不涉及。 **取值范围**： 32位字符，仅由数字和字母组成。 **默认取值**： 不涉及。
    * offset  **参数解释**： 起始偏移。 **约束限制**： 不涉及。 **取值范围**： 大于等于零。 **默认取值**： 不涉及。
    * limit  **参数解释**： 查询数量。 **约束限制**： 不涉及。 **取值范围**： 大于等于零。 **默认取值**： 不涉及。
    * sortKey  **参数解释**： 排序字段名称。 **约束限制**： 不涉及。 **取值范围**： \"start_time\" - 流水线开始时间。 \"update_time\" - 流水线更新时间。 **默认取值**： 不涉及。
    * sortDir  **参数解释**： 排序规则。 **约束限制**： 不涉及。 **取值范围**： - asc：按排序字段升序。 - desc：按排序字段降序。 **默认取值**： 不涉及。
    * showJobDetails  **参数解释**： 是否返回Job状态详情。 **约束限制**： 不涉及。 **取值范围**： - true：返回Job状态列表。 - false：不返回。 **默认取值**： false。
    * stageId  **参数解释**： 阶段ID，用于指定返回Job状态详情的阶段。 **约束限制**： 不涉及。 **取值范围**： 32位字符，仅由数字和字母组成。 **默认取值**： 不涉及，为空时默认取流水线最后一个阶段。
    * jobId  **参数解释**： Job ID，仅在show_job_details为true时生效，用于过滤包含指定Job的执行记录。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'updateTime' => 'setUpdateTime',
            'triggerType' => 'setTriggerType',
            'executorIds' => 'setExecutorIds',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'showJobDetails' => 'setShowJobDetails',
            'stageId' => 'setStageId',
            'jobId' => 'setJobId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  **参数解释**： 流水线状态列表。 **约束限制**： 不涉及。 **取值范围**： - COMPLETED：已完成。 - RUNNING：运行中。 - FAILED：失败。 - CANCELED：取消。 - PAUSED：暂停。 - SUSPEND：挂起。 - IGNORED：忽略。 **默认取值**： 不涉及。
    * startTime  **参数解释**： 流水线开始时间。 **约束限制**： 不涉及。 **取值范围**： 时间戳或者yyyy-MM-dd HH:mm:ss格式均可。 **默认取值**： 不涉及。
    * endTime  **参数解释**： 流水线结束时间。 **约束限制**： 不涉及。 **取值范围**： 时间戳或者yyyy-MM-dd HH:mm:ss格式均可。 **默认取值**： 不涉及。
    * updateTime  **参数解释**： 流水线状态更新时间。 **约束限制**： 不涉及。 **取值范围**： 时间戳或者yyyy-MM-dd HH:mm:ss格式均可。 **默认取值**： 不涉及。
    * triggerType  **参数解释**： 触发类型列表。 **约束限制**： 不涉及。 **取值范围**： - Manual：手动触发。 - Scheduler：定时触发。 - RollBack：回退触发。 - CreateTag：Tag事件触发。 - Note：评论触发。 - Issue：Issue触发。 - MR：MR触发。 - CR：CR触发。 - Generic：流水线触发器触发。 - Push：Push事件触发。 - SubPipeline：子流水线触发。 **默认取值**： 不涉及。
    * executorIds  **参数解释**： 执行人ID列表。 **约束限制**： 不涉及。 **取值范围**： 32位字符，仅由数字和字母组成。 **默认取值**： 不涉及。
    * offset  **参数解释**： 起始偏移。 **约束限制**： 不涉及。 **取值范围**： 大于等于零。 **默认取值**： 不涉及。
    * limit  **参数解释**： 查询数量。 **约束限制**： 不涉及。 **取值范围**： 大于等于零。 **默认取值**： 不涉及。
    * sortKey  **参数解释**： 排序字段名称。 **约束限制**： 不涉及。 **取值范围**： \"start_time\" - 流水线开始时间。 \"update_time\" - 流水线更新时间。 **默认取值**： 不涉及。
    * sortDir  **参数解释**： 排序规则。 **约束限制**： 不涉及。 **取值范围**： - asc：按排序字段升序。 - desc：按排序字段降序。 **默认取值**： 不涉及。
    * showJobDetails  **参数解释**： 是否返回Job状态详情。 **约束限制**： 不涉及。 **取值范围**： - true：返回Job状态列表。 - false：不返回。 **默认取值**： false。
    * stageId  **参数解释**： 阶段ID，用于指定返回Job状态详情的阶段。 **约束限制**： 不涉及。 **取值范围**： 32位字符，仅由数字和字母组成。 **默认取值**： 不涉及，为空时默认取流水线最后一个阶段。
    * jobId  **参数解释**： Job ID，仅在show_job_details为true时生效，用于过滤包含指定Job的执行记录。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'updateTime' => 'getUpdateTime',
            'triggerType' => 'getTriggerType',
            'executorIds' => 'getExecutorIds',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
            'showJobDetails' => 'getShowJobDetails',
            'stageId' => 'getStageId',
            'jobId' => 'getJobId'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['triggerType'] = isset($data['triggerType']) ? $data['triggerType'] : null;
        $this->container['executorIds'] = isset($data['executorIds']) ? $data['executorIds'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['showJobDetails'] = isset($data['showJobDetails']) ? $data['showJobDetails'] : null;
        $this->container['stageId'] = isset($data['stageId']) ? $data['stageId'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
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
    * Gets status
    *  **参数解释**： 流水线状态列表。 **约束限制**： 不涉及。 **取值范围**： - COMPLETED：已完成。 - RUNNING：运行中。 - FAILED：失败。 - CANCELED：取消。 - PAUSED：暂停。 - SUSPEND：挂起。 - IGNORED：忽略。 **默认取值**： 不涉及。
    *
    * @return string[]|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string[]|null $status **参数解释**： 流水线状态列表。 **约束限制**： 不涉及。 **取值范围**： - COMPLETED：已完成。 - RUNNING：运行中。 - FAILED：失败。 - CANCELED：取消。 - PAUSED：暂停。 - SUSPEND：挂起。 - IGNORED：忽略。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释**： 流水线开始时间。 **约束限制**： 不涉及。 **取值范围**： 时间戳或者yyyy-MM-dd HH:mm:ss格式均可。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime **参数解释**： 流水线开始时间。 **约束限制**： 不涉及。 **取值范围**： 时间戳或者yyyy-MM-dd HH:mm:ss格式均可。 **默认取值**： 不涉及。
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
    *  **参数解释**： 流水线结束时间。 **约束限制**： 不涉及。 **取值范围**： 时间戳或者yyyy-MM-dd HH:mm:ss格式均可。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime **参数解释**： 流水线结束时间。 **约束限制**： 不涉及。 **取值范围**： 时间戳或者yyyy-MM-dd HH:mm:ss格式均可。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  **参数解释**： 流水线状态更新时间。 **约束限制**： 不涉及。 **取值范围**： 时间戳或者yyyy-MM-dd HH:mm:ss格式均可。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime **参数解释**： 流水线状态更新时间。 **约束限制**： 不涉及。 **取值范围**： 时间戳或者yyyy-MM-dd HH:mm:ss格式均可。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets triggerType
    *  **参数解释**： 触发类型列表。 **约束限制**： 不涉及。 **取值范围**： - Manual：手动触发。 - Scheduler：定时触发。 - RollBack：回退触发。 - CreateTag：Tag事件触发。 - Note：评论触发。 - Issue：Issue触发。 - MR：MR触发。 - CR：CR触发。 - Generic：流水线触发器触发。 - Push：Push事件触发。 - SubPipeline：子流水线触发。 **默认取值**： 不涉及。
    *
    * @return string[]|null
    */
    public function getTriggerType()
    {
        return $this->container['triggerType'];
    }

    /**
    * Sets triggerType
    *
    * @param string[]|null $triggerType **参数解释**： 触发类型列表。 **约束限制**： 不涉及。 **取值范围**： - Manual：手动触发。 - Scheduler：定时触发。 - RollBack：回退触发。 - CreateTag：Tag事件触发。 - Note：评论触发。 - Issue：Issue触发。 - MR：MR触发。 - CR：CR触发。 - Generic：流水线触发器触发。 - Push：Push事件触发。 - SubPipeline：子流水线触发。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setTriggerType($triggerType)
    {
        $this->container['triggerType'] = $triggerType;
        return $this;
    }

    /**
    * Gets executorIds
    *  **参数解释**： 执行人ID列表。 **约束限制**： 不涉及。 **取值范围**： 32位字符，仅由数字和字母组成。 **默认取值**： 不涉及。
    *
    * @return string[]|null
    */
    public function getExecutorIds()
    {
        return $this->container['executorIds'];
    }

    /**
    * Sets executorIds
    *
    * @param string[]|null $executorIds **参数解释**： 执行人ID列表。 **约束限制**： 不涉及。 **取值范围**： 32位字符，仅由数字和字母组成。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setExecutorIds($executorIds)
    {
        $this->container['executorIds'] = $executorIds;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**： 起始偏移。 **约束限制**： 不涉及。 **取值范围**： 大于等于零。 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset **参数解释**： 起始偏移。 **约束限制**： 不涉及。 **取值范围**： 大于等于零。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**： 查询数量。 **约束限制**： 不涉及。 **取值范围**： 大于等于零。 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit **参数解释**： 查询数量。 **约束限制**： 不涉及。 **取值范围**： 大于等于零。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets sortKey
    *  **参数解释**： 排序字段名称。 **约束限制**： 不涉及。 **取值范围**： \"start_time\" - 流水线开始时间。 \"update_time\" - 流水线更新时间。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey **参数解释**： 排序字段名称。 **约束限制**： 不涉及。 **取值范围**： \"start_time\" - 流水线开始时间。 \"update_time\" - 流水线更新时间。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets sortDir
    *  **参数解释**： 排序规则。 **约束限制**： 不涉及。 **取值范围**： - asc：按排序字段升序。 - desc：按排序字段降序。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir **参数解释**： 排序规则。 **约束限制**： 不涉及。 **取值范围**： - asc：按排序字段升序。 - desc：按排序字段降序。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets showJobDetails
    *  **参数解释**： 是否返回Job状态详情。 **约束限制**： 不涉及。 **取值范围**： - true：返回Job状态列表。 - false：不返回。 **默认取值**： false。
    *
    * @return bool|null
    */
    public function getShowJobDetails()
    {
        return $this->container['showJobDetails'];
    }

    /**
    * Sets showJobDetails
    *
    * @param bool|null $showJobDetails **参数解释**： 是否返回Job状态详情。 **约束限制**： 不涉及。 **取值范围**： - true：返回Job状态列表。 - false：不返回。 **默认取值**： false。
    *
    * @return $this
    */
    public function setShowJobDetails($showJobDetails)
    {
        $this->container['showJobDetails'] = $showJobDetails;
        return $this;
    }

    /**
    * Gets stageId
    *  **参数解释**： 阶段ID，用于指定返回Job状态详情的阶段。 **约束限制**： 不涉及。 **取值范围**： 32位字符，仅由数字和字母组成。 **默认取值**： 不涉及，为空时默认取流水线最后一个阶段。
    *
    * @return string|null
    */
    public function getStageId()
    {
        return $this->container['stageId'];
    }

    /**
    * Sets stageId
    *
    * @param string|null $stageId **参数解释**： 阶段ID，用于指定返回Job状态详情的阶段。 **约束限制**： 不涉及。 **取值范围**： 32位字符，仅由数字和字母组成。 **默认取值**： 不涉及，为空时默认取流水线最后一个阶段。
    *
    * @return $this
    */
    public function setStageId($stageId)
    {
        $this->container['stageId'] = $stageId;
        return $this;
    }

    /**
    * Gets jobId
    *  **参数解释**： Job ID，仅在show_job_details为true时生效，用于过滤包含指定Job的执行记录。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $jobId **参数解释**： Job ID，仅在show_job_details为true时生效，用于过滤包含指定Job的执行记录。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
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

