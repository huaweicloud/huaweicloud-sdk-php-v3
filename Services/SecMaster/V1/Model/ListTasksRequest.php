<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTasksRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTasksRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * contentType  **参数解释：** 内容类型 - application/json;charset=UTF-8    普通API请求的类型  **约束限制：** 不涉及 **取值范围：** - application/json;charset=UTF-8  **默认取值：** 不涉及
    * workspaceId  **参数解释**: 工作空间ID **取值范围**: 不涉及
    * offset  **参数解释**: 待办请求的偏移量 **约束限制**: 不涉及         **取值范围**: 0-9999 **默认值**:  0
    * limit  **参数解释**: 待办分页大小 **约束限制**: 不涉及         **取值范围**: 1-100 **默认值**:  10
    * sortKey  **参数解释**: 待办的排序字段 - create_time 按照创建时间排序 - update_time 按照更新时间排序  **约束限制**: 不涉及         **取值范围**: - create_time - update_time  **默认值**:  create_time
    * sortDir  **参数解释**: 待办的排序方式 - ASC 按照升序排序 - DESC 按照降序排序  **约束限制**: 不涉及         **取值范围**: - ASC - DESC  **默认值**:  DESC
    * note  **参数解释**: 待办的备注 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * name  **参数解释**: 待办的任务名称 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * businessType  **参数解释**: 待办的业务类型 - WORKFLOWPUBLISH 流程发布 - WORKFLOWNODEAPPROVE 流程节点审核 - PLAYBOOKPUBLISH 剧本发布 - PLAYBOOKNODEAPPROVE 剧本节点审核  **约束限制**: 不涉及         **取值范围**: - WORKFLOWPUBLISH - WORKFLOWNODEAPPROVE - PLAYBOOKPUBLISH - PLAYBOOKNODEAPPROVE  **默认值**:  不涉及
    * creatorName  **参数解释**: 待办的创建人 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * queryType  **参数解释**: 待办的分类 - my_todo 待处理的待办 - all_handled 已处理的待办   **约束限制**: 不涉及         **取值范围**: - my_todo - all_handled   **默认值**:  my_todo
    * fromDate  **参数解释**: 起始时间，格式是 \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'Z\" **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * toDate  **参数解释**: 的截止时间，格式是 \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'Z\" **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
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
            'note' => 'string',
            'name' => 'string',
            'businessType' => 'string',
            'creatorName' => 'string',
            'queryType' => 'string',
            'fromDate' => 'string',
            'toDate' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * contentType  **参数解释：** 内容类型 - application/json;charset=UTF-8    普通API请求的类型  **约束限制：** 不涉及 **取值范围：** - application/json;charset=UTF-8  **默认取值：** 不涉及
    * workspaceId  **参数解释**: 工作空间ID **取值范围**: 不涉及
    * offset  **参数解释**: 待办请求的偏移量 **约束限制**: 不涉及         **取值范围**: 0-9999 **默认值**:  0
    * limit  **参数解释**: 待办分页大小 **约束限制**: 不涉及         **取值范围**: 1-100 **默认值**:  10
    * sortKey  **参数解释**: 待办的排序字段 - create_time 按照创建时间排序 - update_time 按照更新时间排序  **约束限制**: 不涉及         **取值范围**: - create_time - update_time  **默认值**:  create_time
    * sortDir  **参数解释**: 待办的排序方式 - ASC 按照升序排序 - DESC 按照降序排序  **约束限制**: 不涉及         **取值范围**: - ASC - DESC  **默认值**:  DESC
    * note  **参数解释**: 待办的备注 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * name  **参数解释**: 待办的任务名称 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * businessType  **参数解释**: 待办的业务类型 - WORKFLOWPUBLISH 流程发布 - WORKFLOWNODEAPPROVE 流程节点审核 - PLAYBOOKPUBLISH 剧本发布 - PLAYBOOKNODEAPPROVE 剧本节点审核  **约束限制**: 不涉及         **取值范围**: - WORKFLOWPUBLISH - WORKFLOWNODEAPPROVE - PLAYBOOKPUBLISH - PLAYBOOKNODEAPPROVE  **默认值**:  不涉及
    * creatorName  **参数解释**: 待办的创建人 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * queryType  **参数解释**: 待办的分类 - my_todo 待处理的待办 - all_handled 已处理的待办   **约束限制**: 不涉及         **取值范围**: - my_todo - all_handled   **默认值**:  my_todo
    * fromDate  **参数解释**: 起始时间，格式是 \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'Z\" **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * toDate  **参数解释**: 的截止时间，格式是 \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'Z\" **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
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
        'note' => null,
        'name' => null,
        'businessType' => null,
        'creatorName' => null,
        'queryType' => null,
        'fromDate' => 'yyyy-MM-dd'T'HH:mm:ss.SSS'Z'Z',
        'toDate' => 'yyyy-MM-dd'T'HH:mm:ss.SSS'Z'Z'
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
    * offset  **参数解释**: 待办请求的偏移量 **约束限制**: 不涉及         **取值范围**: 0-9999 **默认值**:  0
    * limit  **参数解释**: 待办分页大小 **约束限制**: 不涉及         **取值范围**: 1-100 **默认值**:  10
    * sortKey  **参数解释**: 待办的排序字段 - create_time 按照创建时间排序 - update_time 按照更新时间排序  **约束限制**: 不涉及         **取值范围**: - create_time - update_time  **默认值**:  create_time
    * sortDir  **参数解释**: 待办的排序方式 - ASC 按照升序排序 - DESC 按照降序排序  **约束限制**: 不涉及         **取值范围**: - ASC - DESC  **默认值**:  DESC
    * note  **参数解释**: 待办的备注 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * name  **参数解释**: 待办的任务名称 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * businessType  **参数解释**: 待办的业务类型 - WORKFLOWPUBLISH 流程发布 - WORKFLOWNODEAPPROVE 流程节点审核 - PLAYBOOKPUBLISH 剧本发布 - PLAYBOOKNODEAPPROVE 剧本节点审核  **约束限制**: 不涉及         **取值范围**: - WORKFLOWPUBLISH - WORKFLOWNODEAPPROVE - PLAYBOOKPUBLISH - PLAYBOOKNODEAPPROVE  **默认值**:  不涉及
    * creatorName  **参数解释**: 待办的创建人 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * queryType  **参数解释**: 待办的分类 - my_todo 待处理的待办 - all_handled 已处理的待办   **约束限制**: 不涉及         **取值范围**: - my_todo - all_handled   **默认值**:  my_todo
    * fromDate  **参数解释**: 起始时间，格式是 \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'Z\" **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * toDate  **参数解释**: 的截止时间，格式是 \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'Z\" **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'contentType' => 'Content-Type',
            'workspaceId' => 'workspace_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'note' => 'note',
            'name' => 'name',
            'businessType' => 'business_type',
            'creatorName' => 'creator_name',
            'queryType' => 'query_type',
            'fromDate' => 'from_date',
            'toDate' => 'to_date'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * contentType  **参数解释：** 内容类型 - application/json;charset=UTF-8    普通API请求的类型  **约束限制：** 不涉及 **取值范围：** - application/json;charset=UTF-8  **默认取值：** 不涉及
    * workspaceId  **参数解释**: 工作空间ID **取值范围**: 不涉及
    * offset  **参数解释**: 待办请求的偏移量 **约束限制**: 不涉及         **取值范围**: 0-9999 **默认值**:  0
    * limit  **参数解释**: 待办分页大小 **约束限制**: 不涉及         **取值范围**: 1-100 **默认值**:  10
    * sortKey  **参数解释**: 待办的排序字段 - create_time 按照创建时间排序 - update_time 按照更新时间排序  **约束限制**: 不涉及         **取值范围**: - create_time - update_time  **默认值**:  create_time
    * sortDir  **参数解释**: 待办的排序方式 - ASC 按照升序排序 - DESC 按照降序排序  **约束限制**: 不涉及         **取值范围**: - ASC - DESC  **默认值**:  DESC
    * note  **参数解释**: 待办的备注 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * name  **参数解释**: 待办的任务名称 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * businessType  **参数解释**: 待办的业务类型 - WORKFLOWPUBLISH 流程发布 - WORKFLOWNODEAPPROVE 流程节点审核 - PLAYBOOKPUBLISH 剧本发布 - PLAYBOOKNODEAPPROVE 剧本节点审核  **约束限制**: 不涉及         **取值范围**: - WORKFLOWPUBLISH - WORKFLOWNODEAPPROVE - PLAYBOOKPUBLISH - PLAYBOOKNODEAPPROVE  **默认值**:  不涉及
    * creatorName  **参数解释**: 待办的创建人 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * queryType  **参数解释**: 待办的分类 - my_todo 待处理的待办 - all_handled 已处理的待办   **约束限制**: 不涉及         **取值范围**: - my_todo - all_handled   **默认值**:  my_todo
    * fromDate  **参数解释**: 起始时间，格式是 \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'Z\" **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * toDate  **参数解释**: 的截止时间，格式是 \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'Z\" **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
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
            'note' => 'setNote',
            'name' => 'setName',
            'businessType' => 'setBusinessType',
            'creatorName' => 'setCreatorName',
            'queryType' => 'setQueryType',
            'fromDate' => 'setFromDate',
            'toDate' => 'setToDate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * contentType  **参数解释：** 内容类型 - application/json;charset=UTF-8    普通API请求的类型  **约束限制：** 不涉及 **取值范围：** - application/json;charset=UTF-8  **默认取值：** 不涉及
    * workspaceId  **参数解释**: 工作空间ID **取值范围**: 不涉及
    * offset  **参数解释**: 待办请求的偏移量 **约束限制**: 不涉及         **取值范围**: 0-9999 **默认值**:  0
    * limit  **参数解释**: 待办分页大小 **约束限制**: 不涉及         **取值范围**: 1-100 **默认值**:  10
    * sortKey  **参数解释**: 待办的排序字段 - create_time 按照创建时间排序 - update_time 按照更新时间排序  **约束限制**: 不涉及         **取值范围**: - create_time - update_time  **默认值**:  create_time
    * sortDir  **参数解释**: 待办的排序方式 - ASC 按照升序排序 - DESC 按照降序排序  **约束限制**: 不涉及         **取值范围**: - ASC - DESC  **默认值**:  DESC
    * note  **参数解释**: 待办的备注 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * name  **参数解释**: 待办的任务名称 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * businessType  **参数解释**: 待办的业务类型 - WORKFLOWPUBLISH 流程发布 - WORKFLOWNODEAPPROVE 流程节点审核 - PLAYBOOKPUBLISH 剧本发布 - PLAYBOOKNODEAPPROVE 剧本节点审核  **约束限制**: 不涉及         **取值范围**: - WORKFLOWPUBLISH - WORKFLOWNODEAPPROVE - PLAYBOOKPUBLISH - PLAYBOOKNODEAPPROVE  **默认值**:  不涉及
    * creatorName  **参数解释**: 待办的创建人 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * queryType  **参数解释**: 待办的分类 - my_todo 待处理的待办 - all_handled 已处理的待办   **约束限制**: 不涉及         **取值范围**: - my_todo - all_handled   **默认值**:  my_todo
    * fromDate  **参数解释**: 起始时间，格式是 \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'Z\" **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * toDate  **参数解释**: 的截止时间，格式是 \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'Z\" **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
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
            'note' => 'getNote',
            'name' => 'getName',
            'businessType' => 'getBusinessType',
            'creatorName' => 'getCreatorName',
            'queryType' => 'getQueryType',
            'fromDate' => 'getFromDate',
            'toDate' => 'getToDate'
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
    const BUSINESS_TYPE_WORKFLOWPUBLISH = 'WORKFLOWPUBLISH';
    const BUSINESS_TYPE_WORKFLOWNODEAPPROVE = 'WORKFLOWNODEAPPROVE';
    const BUSINESS_TYPE_PLAYBOOKPUBLISH = 'PLAYBOOKPUBLISH';
    const BUSINESS_TYPE_PLAYBOOKNODEAPPROVE = 'PLAYBOOKNODEAPPROVE';
    const QUERY_TYPE_MY_TODO = 'my_todo';
    const QUERY_TYPE_ALL_HANDLED = 'all_handled';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBusinessTypeAllowableValues()
    {
        return [
            self::BUSINESS_TYPE_WORKFLOWPUBLISH,
            self::BUSINESS_TYPE_WORKFLOWNODEAPPROVE,
            self::BUSINESS_TYPE_PLAYBOOKPUBLISH,
            self::BUSINESS_TYPE_PLAYBOOKNODEAPPROVE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getQueryTypeAllowableValues()
    {
        return [
            self::QUERY_TYPE_MY_TODO,
            self::QUERY_TYPE_ALL_HANDLED,
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
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['businessType'] = isset($data['businessType']) ? $data['businessType'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['queryType'] = isset($data['queryType']) ? $data['queryType'] : null;
        $this->container['fromDate'] = isset($data['fromDate']) ? $data['fromDate'] : null;
        $this->container['toDate'] = isset($data['toDate']) ? $data['toDate'] : null;
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
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 9999)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 9999.";
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
            if (!is_null($this->container['note']) && (mb_strlen($this->container['note']) > 64)) {
                $invalidProperties[] = "invalid value for 'note', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['note']) && (mb_strlen($this->container['note']) < 1)) {
                $invalidProperties[] = "invalid value for 'note', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getBusinessTypeAllowableValues();
                if (!is_null($this->container['businessType']) && !in_array($this->container['businessType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'businessType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['businessType']) && (mb_strlen($this->container['businessType']) > 64)) {
                $invalidProperties[] = "invalid value for 'businessType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['businessType']) && (mb_strlen($this->container['businessType']) < 1)) {
                $invalidProperties[] = "invalid value for 'businessType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) > 64)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) < 1)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getQueryTypeAllowableValues();
                if (!is_null($this->container['queryType']) && !in_array($this->container['queryType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'queryType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['queryType']) && (mb_strlen($this->container['queryType']) > 64)) {
                $invalidProperties[] = "invalid value for 'queryType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['queryType']) && (mb_strlen($this->container['queryType']) < 1)) {
                $invalidProperties[] = "invalid value for 'queryType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fromDate']) && (mb_strlen($this->container['fromDate']) > 64)) {
                $invalidProperties[] = "invalid value for 'fromDate', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['fromDate']) && (mb_strlen($this->container['fromDate']) < 1)) {
                $invalidProperties[] = "invalid value for 'fromDate', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['toDate']) && (mb_strlen($this->container['toDate']) > 64)) {
                $invalidProperties[] = "invalid value for 'toDate', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['toDate']) && (mb_strlen($this->container['toDate']) < 1)) {
                $invalidProperties[] = "invalid value for 'toDate', the character length must be bigger than or equal to 1.";
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
    *  **参数解释**: 待办请求的偏移量 **约束限制**: 不涉及         **取值范围**: 0-9999 **默认值**:  0
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
    * @param int|null $offset **参数解释**: 待办请求的偏移量 **约束限制**: 不涉及         **取值范围**: 0-9999 **默认值**:  0
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
    *  **参数解释**: 待办分页大小 **约束限制**: 不涉及         **取值范围**: 1-100 **默认值**:  10
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
    * @param int|null $limit **参数解释**: 待办分页大小 **约束限制**: 不涉及         **取值范围**: 1-100 **默认值**:  10
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
    *  **参数解释**: 待办的排序字段 - create_time 按照创建时间排序 - update_time 按照更新时间排序  **约束限制**: 不涉及         **取值范围**: - create_time - update_time  **默认值**:  create_time
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
    * @param string|null $sortKey **参数解释**: 待办的排序字段 - create_time 按照创建时间排序 - update_time 按照更新时间排序  **约束限制**: 不涉及         **取值范围**: - create_time - update_time  **默认值**:  create_time
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
    *  **参数解释**: 待办的排序方式 - ASC 按照升序排序 - DESC 按照降序排序  **约束限制**: 不涉及         **取值范围**: - ASC - DESC  **默认值**:  DESC
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
    * @param string|null $sortDir **参数解释**: 待办的排序方式 - ASC 按照升序排序 - DESC 按照降序排序  **约束限制**: 不涉及         **取值范围**: - ASC - DESC  **默认值**:  DESC
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets note
    *  **参数解释**: 待办的备注 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return string|null
    */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
    * Sets note
    *
    * @param string|null $note **参数解释**: 待办的备注 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return $this
    */
    public function setNote($note)
    {
        $this->container['note'] = $note;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**: 待办的任务名称 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
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
    * @param string|null $name **参数解释**: 待办的任务名称 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets businessType
    *  **参数解释**: 待办的业务类型 - WORKFLOWPUBLISH 流程发布 - WORKFLOWNODEAPPROVE 流程节点审核 - PLAYBOOKPUBLISH 剧本发布 - PLAYBOOKNODEAPPROVE 剧本节点审核  **约束限制**: 不涉及         **取值范围**: - WORKFLOWPUBLISH - WORKFLOWNODEAPPROVE - PLAYBOOKPUBLISH - PLAYBOOKNODEAPPROVE  **默认值**:  不涉及
    *
    * @return string|null
    */
    public function getBusinessType()
    {
        return $this->container['businessType'];
    }

    /**
    * Sets businessType
    *
    * @param string|null $businessType **参数解释**: 待办的业务类型 - WORKFLOWPUBLISH 流程发布 - WORKFLOWNODEAPPROVE 流程节点审核 - PLAYBOOKPUBLISH 剧本发布 - PLAYBOOKNODEAPPROVE 剧本节点审核  **约束限制**: 不涉及         **取值范围**: - WORKFLOWPUBLISH - WORKFLOWNODEAPPROVE - PLAYBOOKPUBLISH - PLAYBOOKNODEAPPROVE  **默认值**:  不涉及
    *
    * @return $this
    */
    public function setBusinessType($businessType)
    {
        $this->container['businessType'] = $businessType;
        return $this;
    }

    /**
    * Gets creatorName
    *  **参数解释**: 待办的创建人 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return string|null
    */
    public function getCreatorName()
    {
        return $this->container['creatorName'];
    }

    /**
    * Sets creatorName
    *
    * @param string|null $creatorName **参数解释**: 待办的创建人 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets queryType
    *  **参数解释**: 待办的分类 - my_todo 待处理的待办 - all_handled 已处理的待办   **约束限制**: 不涉及         **取值范围**: - my_todo - all_handled   **默认值**:  my_todo
    *
    * @return string|null
    */
    public function getQueryType()
    {
        return $this->container['queryType'];
    }

    /**
    * Sets queryType
    *
    * @param string|null $queryType **参数解释**: 待办的分类 - my_todo 待处理的待办 - all_handled 已处理的待办   **约束限制**: 不涉及         **取值范围**: - my_todo - all_handled   **默认值**:  my_todo
    *
    * @return $this
    */
    public function setQueryType($queryType)
    {
        $this->container['queryType'] = $queryType;
        return $this;
    }

    /**
    * Gets fromDate
    *  **参数解释**: 起始时间，格式是 \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'Z\" **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return string|null
    */
    public function getFromDate()
    {
        return $this->container['fromDate'];
    }

    /**
    * Sets fromDate
    *
    * @param string|null $fromDate **参数解释**: 起始时间，格式是 \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'Z\" **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
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
    *  **参数解释**: 的截止时间，格式是 \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'Z\" **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return string|null
    */
    public function getToDate()
    {
        return $this->container['toDate'];
    }

    /**
    * Sets toDate
    *
    * @param string|null $toDate **参数解释**: 的截止时间，格式是 \"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'Z\" **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return $this
    */
    public function setToDate($toDate)
    {
        $this->container['toDate'] = $toDate;
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

