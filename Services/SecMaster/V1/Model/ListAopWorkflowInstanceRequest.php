<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAopWorkflowInstanceRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAopWorkflowInstanceRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * contentType  **参数解释：** 内容类型 - application/json;charset=UTF-8    普通API请求的类型  **约束限制：** 不涉及 **取值范围：** - application/json;charset=UTF-8  **默认取值：** 不涉及
    * workspaceId  **参数解释**: 工作空间ID **取值范围**: 不涉及
    * offset  **参数解释：** 偏移量 **约束限制：** 0-10000 **取值范围：** 不涉及 **默认取值：** 0
    * limit  **参数解释：** 数据量 **约束限制：** 1-100 **取值范围：** 不涉及 **默认取值：** 10
    * sortKey  **参数解释：** 排序字段， - create_time：创建时间 - update_time：更新时间  **约束限制：** 不涉及 **取值范围：** - create_time - update_time  **默认取值：** create_time
    * sortDir  **参数解释：** 排序顺序 - ASC：升序 - DESC：降序  **约束限制：** 不涉及 **取值范围：** - ASC：升序 - DESC：降序  **默认取值：** DESC
    * fromDate  **参数解释**: 开始时间 **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * toDate  **参数解释**: 截止时间 **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * workflowId  **参数解释**: 流程的ID **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * id  **参数解释**: 实例的ID **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * name  **参数解释**: 实例的名字 **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * dataobjectId  **参数解释**: 触发流程对象的id **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * dataclassId  **参数解释**: 数据类的ID **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * playbookId  **参数解释**: 剧本ID **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * defenceId  **参数解释**: 防线ID **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * status  **参数解释**:          流程实例的状态 - RUNNING   运行中 - FAILED    运行失败 - FINISHED  运行结束 - RETRYING  重试中 - TERMINATING 终止中 - TERMINATED  已终止  **约束限制**: 不涉及               **取值范围**: - RUNNING    - FAILED     - FINISHED   - RETRYING   - TERMINATING  - TERMINATED  **默认值**:  不涉及
    * triggerType  **参数解释**:          触发方式 - DEBUG   调试触发 - TIMER   定时触发 - EVENT   事件触发 - MANUAL  手动触发  **约束限制**: 不涉及               **取值范围**: - DEBUG - TIMER - EVENT - MANUAL  **默认值**:  不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'contentType' => 'string',
            'workspaceId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'sortKey' => 'string',
            'sortDir' => 'string',
            'fromDate' => '\DateTime',
            'toDate' => '\DateTime',
            'workflowId' => 'string',
            'id' => 'string',
            'name' => 'string',
            'dataobjectId' => 'string',
            'dataclassId' => 'string',
            'playbookId' => 'string',
            'defenceId' => 'string',
            'status' => 'string',
            'triggerType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * contentType  **参数解释：** 内容类型 - application/json;charset=UTF-8    普通API请求的类型  **约束限制：** 不涉及 **取值范围：** - application/json;charset=UTF-8  **默认取值：** 不涉及
    * workspaceId  **参数解释**: 工作空间ID **取值范围**: 不涉及
    * offset  **参数解释：** 偏移量 **约束限制：** 0-10000 **取值范围：** 不涉及 **默认取值：** 0
    * limit  **参数解释：** 数据量 **约束限制：** 1-100 **取值范围：** 不涉及 **默认取值：** 10
    * sortKey  **参数解释：** 排序字段， - create_time：创建时间 - update_time：更新时间  **约束限制：** 不涉及 **取值范围：** - create_time - update_time  **默认取值：** create_time
    * sortDir  **参数解释：** 排序顺序 - ASC：升序 - DESC：降序  **约束限制：** 不涉及 **取值范围：** - ASC：升序 - DESC：降序  **默认取值：** DESC
    * fromDate  **参数解释**: 开始时间 **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * toDate  **参数解释**: 截止时间 **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * workflowId  **参数解释**: 流程的ID **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * id  **参数解释**: 实例的ID **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * name  **参数解释**: 实例的名字 **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * dataobjectId  **参数解释**: 触发流程对象的id **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * dataclassId  **参数解释**: 数据类的ID **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * playbookId  **参数解释**: 剧本ID **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * defenceId  **参数解释**: 防线ID **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * status  **参数解释**:          流程实例的状态 - RUNNING   运行中 - FAILED    运行失败 - FINISHED  运行结束 - RETRYING  重试中 - TERMINATING 终止中 - TERMINATED  已终止  **约束限制**: 不涉及               **取值范围**: - RUNNING    - FAILED     - FINISHED   - RETRYING   - TERMINATING  - TERMINATED  **默认值**:  不涉及
    * triggerType  **参数解释**:          触发方式 - DEBUG   调试触发 - TIMER   定时触发 - EVENT   事件触发 - MANUAL  手动触发  **约束限制**: 不涉及               **取值范围**: - DEBUG - TIMER - EVENT - MANUAL  **默认值**:  不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'contentType' => null,
        'workspaceId' => null,
        'offset' => null,
        'limit' => null,
        'sortKey' => null,
        'sortDir' => null,
        'fromDate' => 'date',
        'toDate' => 'date',
        'workflowId' => null,
        'id' => null,
        'name' => null,
        'dataobjectId' => null,
        'dataclassId' => null,
        'playbookId' => null,
        'defenceId' => null,
        'status' => null,
        'triggerType' => null
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
    * contentType  **参数解释：** 内容类型 - application/json;charset=UTF-8    普通API请求的类型  **约束限制：** 不涉及 **取值范围：** - application/json;charset=UTF-8  **默认取值：** 不涉及
    * workspaceId  **参数解释**: 工作空间ID **取值范围**: 不涉及
    * offset  **参数解释：** 偏移量 **约束限制：** 0-10000 **取值范围：** 不涉及 **默认取值：** 0
    * limit  **参数解释：** 数据量 **约束限制：** 1-100 **取值范围：** 不涉及 **默认取值：** 10
    * sortKey  **参数解释：** 排序字段， - create_time：创建时间 - update_time：更新时间  **约束限制：** 不涉及 **取值范围：** - create_time - update_time  **默认取值：** create_time
    * sortDir  **参数解释：** 排序顺序 - ASC：升序 - DESC：降序  **约束限制：** 不涉及 **取值范围：** - ASC：升序 - DESC：降序  **默认取值：** DESC
    * fromDate  **参数解释**: 开始时间 **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * toDate  **参数解释**: 截止时间 **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * workflowId  **参数解释**: 流程的ID **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * id  **参数解释**: 实例的ID **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * name  **参数解释**: 实例的名字 **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * dataobjectId  **参数解释**: 触发流程对象的id **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * dataclassId  **参数解释**: 数据类的ID **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * playbookId  **参数解释**: 剧本ID **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * defenceId  **参数解释**: 防线ID **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * status  **参数解释**:          流程实例的状态 - RUNNING   运行中 - FAILED    运行失败 - FINISHED  运行结束 - RETRYING  重试中 - TERMINATING 终止中 - TERMINATED  已终止  **约束限制**: 不涉及               **取值范围**: - RUNNING    - FAILED     - FINISHED   - RETRYING   - TERMINATING  - TERMINATED  **默认值**:  不涉及
    * triggerType  **参数解释**:          触发方式 - DEBUG   调试触发 - TIMER   定时触发 - EVENT   事件触发 - MANUAL  手动触发  **约束限制**: 不涉及               **取值范围**: - DEBUG - TIMER - EVENT - MANUAL  **默认值**:  不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'contentType' => 'content-type',
            'workspaceId' => 'workspace_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'fromDate' => 'from_date',
            'toDate' => 'to_date',
            'workflowId' => 'workflow_id',
            'id' => 'id',
            'name' => 'name',
            'dataobjectId' => 'dataobject_id',
            'dataclassId' => 'dataclass_id',
            'playbookId' => 'playbook_id',
            'defenceId' => 'defence_id',
            'status' => 'status',
            'triggerType' => 'trigger_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * contentType  **参数解释：** 内容类型 - application/json;charset=UTF-8    普通API请求的类型  **约束限制：** 不涉及 **取值范围：** - application/json;charset=UTF-8  **默认取值：** 不涉及
    * workspaceId  **参数解释**: 工作空间ID **取值范围**: 不涉及
    * offset  **参数解释：** 偏移量 **约束限制：** 0-10000 **取值范围：** 不涉及 **默认取值：** 0
    * limit  **参数解释：** 数据量 **约束限制：** 1-100 **取值范围：** 不涉及 **默认取值：** 10
    * sortKey  **参数解释：** 排序字段， - create_time：创建时间 - update_time：更新时间  **约束限制：** 不涉及 **取值范围：** - create_time - update_time  **默认取值：** create_time
    * sortDir  **参数解释：** 排序顺序 - ASC：升序 - DESC：降序  **约束限制：** 不涉及 **取值范围：** - ASC：升序 - DESC：降序  **默认取值：** DESC
    * fromDate  **参数解释**: 开始时间 **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * toDate  **参数解释**: 截止时间 **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * workflowId  **参数解释**: 流程的ID **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * id  **参数解释**: 实例的ID **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * name  **参数解释**: 实例的名字 **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * dataobjectId  **参数解释**: 触发流程对象的id **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * dataclassId  **参数解释**: 数据类的ID **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * playbookId  **参数解释**: 剧本ID **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * defenceId  **参数解释**: 防线ID **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * status  **参数解释**:          流程实例的状态 - RUNNING   运行中 - FAILED    运行失败 - FINISHED  运行结束 - RETRYING  重试中 - TERMINATING 终止中 - TERMINATED  已终止  **约束限制**: 不涉及               **取值范围**: - RUNNING    - FAILED     - FINISHED   - RETRYING   - TERMINATING  - TERMINATED  **默认值**:  不涉及
    * triggerType  **参数解释**:          触发方式 - DEBUG   调试触发 - TIMER   定时触发 - EVENT   事件触发 - MANUAL  手动触发  **约束限制**: 不涉及               **取值范围**: - DEBUG - TIMER - EVENT - MANUAL  **默认值**:  不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'contentType' => 'setContentType',
            'workspaceId' => 'setWorkspaceId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'fromDate' => 'setFromDate',
            'toDate' => 'setToDate',
            'workflowId' => 'setWorkflowId',
            'id' => 'setId',
            'name' => 'setName',
            'dataobjectId' => 'setDataobjectId',
            'dataclassId' => 'setDataclassId',
            'playbookId' => 'setPlaybookId',
            'defenceId' => 'setDefenceId',
            'status' => 'setStatus',
            'triggerType' => 'setTriggerType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * contentType  **参数解释：** 内容类型 - application/json;charset=UTF-8    普通API请求的类型  **约束限制：** 不涉及 **取值范围：** - application/json;charset=UTF-8  **默认取值：** 不涉及
    * workspaceId  **参数解释**: 工作空间ID **取值范围**: 不涉及
    * offset  **参数解释：** 偏移量 **约束限制：** 0-10000 **取值范围：** 不涉及 **默认取值：** 0
    * limit  **参数解释：** 数据量 **约束限制：** 1-100 **取值范围：** 不涉及 **默认取值：** 10
    * sortKey  **参数解释：** 排序字段， - create_time：创建时间 - update_time：更新时间  **约束限制：** 不涉及 **取值范围：** - create_time - update_time  **默认取值：** create_time
    * sortDir  **参数解释：** 排序顺序 - ASC：升序 - DESC：降序  **约束限制：** 不涉及 **取值范围：** - ASC：升序 - DESC：降序  **默认取值：** DESC
    * fromDate  **参数解释**: 开始时间 **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * toDate  **参数解释**: 截止时间 **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * workflowId  **参数解释**: 流程的ID **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * id  **参数解释**: 实例的ID **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * name  **参数解释**: 实例的名字 **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * dataobjectId  **参数解释**: 触发流程对象的id **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * dataclassId  **参数解释**: 数据类的ID **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * playbookId  **参数解释**: 剧本ID **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * defenceId  **参数解释**: 防线ID **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    * status  **参数解释**:          流程实例的状态 - RUNNING   运行中 - FAILED    运行失败 - FINISHED  运行结束 - RETRYING  重试中 - TERMINATING 终止中 - TERMINATED  已终止  **约束限制**: 不涉及               **取值范围**: - RUNNING    - FAILED     - FINISHED   - RETRYING   - TERMINATING  - TERMINATED  **默认值**:  不涉及
    * triggerType  **参数解释**:          触发方式 - DEBUG   调试触发 - TIMER   定时触发 - EVENT   事件触发 - MANUAL  手动触发  **约束限制**: 不涉及               **取值范围**: - DEBUG - TIMER - EVENT - MANUAL  **默认值**:  不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'contentType' => 'getContentType',
            'workspaceId' => 'getWorkspaceId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
            'fromDate' => 'getFromDate',
            'toDate' => 'getToDate',
            'workflowId' => 'getWorkflowId',
            'id' => 'getId',
            'name' => 'getName',
            'dataobjectId' => 'getDataobjectId',
            'dataclassId' => 'getDataclassId',
            'playbookId' => 'getPlaybookId',
            'defenceId' => 'getDefenceId',
            'status' => 'getStatus',
            'triggerType' => 'getTriggerType'
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
    const SORT_KEY_UPDATE_TIME = 'update_time';
    const SORT_KEY_CREATE_TIME = 'create_time';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortKeyAllowableValues()
    {
        return [
            self::SORT_KEY_UPDATE_TIME,
            self::SORT_KEY_CREATE_TIME,
        ];
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
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['fromDate'] = isset($data['fromDate']) ? $data['fromDate'] : null;
        $this->container['toDate'] = isset($data['toDate']) ? $data['toDate'] : null;
        $this->container['workflowId'] = isset($data['workflowId']) ? $data['workflowId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['dataobjectId'] = isset($data['dataobjectId']) ? $data['dataobjectId'] : null;
        $this->container['dataclassId'] = isset($data['dataclassId']) ? $data['dataclassId'] : null;
        $this->container['playbookId'] = isset($data['playbookId']) ? $data['playbookId'] : null;
        $this->container['defenceId'] = isset($data['defenceId']) ? $data['defenceId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['triggerType'] = isset($data['triggerType']) ? $data['triggerType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['contentType'] === null) {
            $invalidProperties[] = "'contentType' can't be null";
        }
            if ((mb_strlen($this->container['contentType']) > 64)) {
                $invalidProperties[] = "invalid value for 'contentType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['contentType']) < 0)) {
                $invalidProperties[] = "invalid value for 'contentType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['workspaceId'] === null) {
            $invalidProperties[] = "'workspaceId' can't be null";
        }
            if ((mb_strlen($this->container['workspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['workspaceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 1000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getSortKeyAllowableValues();
                if (!is_null($this->container['sortKey']) && !in_array($this->container['sortKey'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortKey', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) > 64)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sortDir']) && (mb_strlen($this->container['sortDir']) > 64)) {
                $invalidProperties[] = "invalid value for 'sortDir', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sortDir']) && (mb_strlen($this->container['sortDir']) < 1)) {
                $invalidProperties[] = "invalid value for 'sortDir', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['workflowId']) && (mb_strlen($this->container['workflowId']) > 64)) {
                $invalidProperties[] = "invalid value for 'workflowId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['workflowId']) && (mb_strlen($this->container['workflowId']) < 1)) {
                $invalidProperties[] = "invalid value for 'workflowId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dataobjectId']) && (mb_strlen($this->container['dataobjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'dataobjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dataobjectId']) && (mb_strlen($this->container['dataobjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'dataobjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dataclassId']) && (mb_strlen($this->container['dataclassId']) > 64)) {
                $invalidProperties[] = "invalid value for 'dataclassId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dataclassId']) && (mb_strlen($this->container['dataclassId']) < 1)) {
                $invalidProperties[] = "invalid value for 'dataclassId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['playbookId']) && (mb_strlen($this->container['playbookId']) > 64)) {
                $invalidProperties[] = "invalid value for 'playbookId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['playbookId']) && (mb_strlen($this->container['playbookId']) < 1)) {
                $invalidProperties[] = "invalid value for 'playbookId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['defenceId']) && (mb_strlen($this->container['defenceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'defenceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['defenceId']) && (mb_strlen($this->container['defenceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'defenceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['triggerType']) && (mb_strlen($this->container['triggerType']) > 64)) {
                $invalidProperties[] = "invalid value for 'triggerType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['triggerType']) && (mb_strlen($this->container['triggerType']) < 1)) {
                $invalidProperties[] = "invalid value for 'triggerType', the character length must be bigger than or equal to 1.";
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
    * Gets contentType
    *  **参数解释：** 内容类型 - application/json;charset=UTF-8    普通API请求的类型  **约束限制：** 不涉及 **取值范围：** - application/json;charset=UTF-8  **默认取值：** 不涉及
    *
    * @return string
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string $contentType **参数解释：** 内容类型 - application/json;charset=UTF-8    普通API请求的类型  **约束限制：** 不涉及 **取值范围：** - application/json;charset=UTF-8  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
        return $this;
    }

    /**
    * Gets workspaceId
    *  **参数解释**: 工作空间ID **取值范围**: 不涉及
    *
    * @return string
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string $workspaceId **参数解释**: 工作空间ID **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释：** 偏移量 **约束限制：** 0-10000 **取值范围：** 不涉及 **默认取值：** 0
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
    * @param int|null $offset **参数解释：** 偏移量 **约束限制：** 0-10000 **取值范围：** 不涉及 **默认取值：** 0
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
    *  **参数解释：** 数据量 **约束限制：** 1-100 **取值范围：** 不涉及 **默认取值：** 10
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
    * @param int|null $limit **参数解释：** 数据量 **约束限制：** 1-100 **取值范围：** 不涉及 **默认取值：** 10
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
    *  **参数解释：** 排序字段， - create_time：创建时间 - update_time：更新时间  **约束限制：** 不涉及 **取值范围：** - create_time - update_time  **默认取值：** create_time
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
    * @param string|null $sortKey **参数解释：** 排序字段， - create_time：创建时间 - update_time：更新时间  **约束限制：** 不涉及 **取值范围：** - create_time - update_time  **默认取值：** create_time
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
    *  **参数解释：** 排序顺序 - ASC：升序 - DESC：降序  **约束限制：** 不涉及 **取值范围：** - ASC：升序 - DESC：降序  **默认取值：** DESC
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
    * @param string|null $sortDir **参数解释：** 排序顺序 - ASC：升序 - DESC：降序  **约束限制：** 不涉及 **取值范围：** - ASC：升序 - DESC：降序  **默认取值：** DESC
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets fromDate
    *  **参数解释**: 开始时间 **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return \DateTime|null
    */
    public function getFromDate()
    {
        return $this->container['fromDate'];
    }

    /**
    * Sets fromDate
    *
    * @param \DateTime|null $fromDate **参数解释**: 开始时间 **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return $this
    */
    public function setFromDate($fromDate)
    {
        $this->container['fromDate'] = $fromDate;
        return $this;
    }

    /**
    * Gets toDate
    *  **参数解释**: 截止时间 **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return \DateTime|null
    */
    public function getToDate()
    {
        return $this->container['toDate'];
    }

    /**
    * Sets toDate
    *
    * @param \DateTime|null $toDate **参数解释**: 截止时间 **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return $this
    */
    public function setToDate($toDate)
    {
        $this->container['toDate'] = $toDate;
        return $this;
    }

    /**
    * Gets workflowId
    *  **参数解释**: 流程的ID **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
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
    * @param string|null $workflowId **参数解释**: 流程的ID **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return $this
    */
    public function setWorkflowId($workflowId)
    {
        $this->container['workflowId'] = $workflowId;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**: 实例的ID **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
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
    * @param string|null $id **参数解释**: 实例的ID **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
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
    *  **参数解释**: 实例的名字 **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
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
    * @param string|null $name **参数解释**: 实例的名字 **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets dataobjectId
    *  **参数解释**: 触发流程对象的id **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return string|null
    */
    public function getDataobjectId()
    {
        return $this->container['dataobjectId'];
    }

    /**
    * Sets dataobjectId
    *
    * @param string|null $dataobjectId **参数解释**: 触发流程对象的id **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return $this
    */
    public function setDataobjectId($dataobjectId)
    {
        $this->container['dataobjectId'] = $dataobjectId;
        return $this;
    }

    /**
    * Gets dataclassId
    *  **参数解释**: 数据类的ID **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return string|null
    */
    public function getDataclassId()
    {
        return $this->container['dataclassId'];
    }

    /**
    * Sets dataclassId
    *
    * @param string|null $dataclassId **参数解释**: 数据类的ID **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return $this
    */
    public function setDataclassId($dataclassId)
    {
        $this->container['dataclassId'] = $dataclassId;
        return $this;
    }

    /**
    * Gets playbookId
    *  **参数解释**: 剧本ID **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return string|null
    */
    public function getPlaybookId()
    {
        return $this->container['playbookId'];
    }

    /**
    * Sets playbookId
    *
    * @param string|null $playbookId **参数解释**: 剧本ID **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return $this
    */
    public function setPlaybookId($playbookId)
    {
        $this->container['playbookId'] = $playbookId;
        return $this;
    }

    /**
    * Gets defenceId
    *  **参数解释**: 防线ID **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return string|null
    */
    public function getDefenceId()
    {
        return $this->container['defenceId'];
    }

    /**
    * Sets defenceId
    *
    * @param string|null $defenceId **参数解释**: 防线ID **约束限制**: 不涉及               **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return $this
    */
    public function setDefenceId($defenceId)
    {
        $this->container['defenceId'] = $defenceId;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**:          流程实例的状态 - RUNNING   运行中 - FAILED    运行失败 - FINISHED  运行结束 - RETRYING  重试中 - TERMINATING 终止中 - TERMINATED  已终止  **约束限制**: 不涉及               **取值范围**: - RUNNING    - FAILED     - FINISHED   - RETRYING   - TERMINATING  - TERMINATED  **默认值**:  不涉及
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
    * @param string|null $status **参数解释**:          流程实例的状态 - RUNNING   运行中 - FAILED    运行失败 - FINISHED  运行结束 - RETRYING  重试中 - TERMINATING 终止中 - TERMINATED  已终止  **约束限制**: 不涉及               **取值范围**: - RUNNING    - FAILED     - FINISHED   - RETRYING   - TERMINATING  - TERMINATED  **默认值**:  不涉及
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets triggerType
    *  **参数解释**:          触发方式 - DEBUG   调试触发 - TIMER   定时触发 - EVENT   事件触发 - MANUAL  手动触发  **约束限制**: 不涉及               **取值范围**: - DEBUG - TIMER - EVENT - MANUAL  **默认值**:  不涉及
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
    * @param string|null $triggerType **参数解释**:          触发方式 - DEBUG   调试触发 - TIMER   定时触发 - EVENT   事件触发 - MANUAL  手动触发  **约束限制**: 不涉及               **取值范围**: - DEBUG - TIMER - EVENT - MANUAL  **默认值**:  不涉及
    *
    * @return $this
    */
    public function setTriggerType($triggerType)
    {
        $this->container['triggerType'] = $triggerType;
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

