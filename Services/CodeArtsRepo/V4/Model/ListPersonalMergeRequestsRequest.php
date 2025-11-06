<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPersonalMergeRequestsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPersonalMergeRequestsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * state  **参数解释：** 合并请求状态 **约束限制：** - all，返回所有状态的合并请求。 - opened，返回开启中的合并请求。 - closed，返回关闭的合并请求。 - locked，返回锁定的合并请求。 - merged，返回已合并的合并请求。
    * orderBy  **参数解释：** 排序方式 **约束限制：** - created_at，根据创建时间排序。 - updated_at，根据更新时间排序。 - merged_at，根据合并时间排序。
    * sort  **参数解释：** 排序顺序 **约束限制：**   - asc，正序排序。   - desc，倒序排序。
    * labels  **参数解释：** 合并请求关联标签
    * createdBefore  **参数解释：** 指定时间前创建
    * createdAfter  **参数解释：** 指定时间后创建
    * updatedAfter  **参数解释：** 指定时间后更新
    * updatedBefore  **参数解释：** 指定时间前更新
    * view  **参数解释：** 结果集属性，根据给定的参数返回不同的结果， simple，返回简单数据，basic返回基本数据。
    * authorId  **参数解释：** 合并请求创建人
    * scope  **参数解释：**   - created_by_me 我创建的合并请求   - assigned_to_me 待我合并的合并请求   - need_my_review 待我检视的合并请求   - need_my_approve 待我审核的合并请求   - all 所有有权限访问的合并请求
    * sourceBranch  **参数解释：** 合并请求原分支
    * targetBranch  **参数解释：** 合并请求目标分支
    * search  **参数解释：** 根据合并请求标题、描述信息过滤关键字
    * wip  **参数解释：** 合并请求标题是否有WIP关键字
    * mergedBy  **参数解释：** 合并请求合并人
    * mergedAfter  **参数解释：** 指定时间后合入
    * mergedBefore  **参数解释：** 指定时间前合入
    * offset  **参数解释：** 分页参数偏移量
    * limit  **参数解释：** 分页参数结果数量限制
    * onlyCount  **参数解释：** 是否只返回合并请求总数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'state' => 'string',
            'orderBy' => 'string',
            'sort' => 'string',
            'labels' => 'string',
            'createdBefore' => '\DateTime',
            'createdAfter' => '\DateTime',
            'updatedAfter' => '\DateTime',
            'updatedBefore' => '\DateTime',
            'view' => 'string',
            'authorId' => 'string',
            'scope' => 'string',
            'sourceBranch' => 'string',
            'targetBranch' => 'string',
            'search' => 'string',
            'wip' => 'string',
            'mergedBy' => 'string',
            'mergedAfter' => '\DateTime',
            'mergedBefore' => '\DateTime',
            'offset' => 'int',
            'limit' => 'int',
            'onlyCount' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * state  **参数解释：** 合并请求状态 **约束限制：** - all，返回所有状态的合并请求。 - opened，返回开启中的合并请求。 - closed，返回关闭的合并请求。 - locked，返回锁定的合并请求。 - merged，返回已合并的合并请求。
    * orderBy  **参数解释：** 排序方式 **约束限制：** - created_at，根据创建时间排序。 - updated_at，根据更新时间排序。 - merged_at，根据合并时间排序。
    * sort  **参数解释：** 排序顺序 **约束限制：**   - asc，正序排序。   - desc，倒序排序。
    * labels  **参数解释：** 合并请求关联标签
    * createdBefore  **参数解释：** 指定时间前创建
    * createdAfter  **参数解释：** 指定时间后创建
    * updatedAfter  **参数解释：** 指定时间后更新
    * updatedBefore  **参数解释：** 指定时间前更新
    * view  **参数解释：** 结果集属性，根据给定的参数返回不同的结果， simple，返回简单数据，basic返回基本数据。
    * authorId  **参数解释：** 合并请求创建人
    * scope  **参数解释：**   - created_by_me 我创建的合并请求   - assigned_to_me 待我合并的合并请求   - need_my_review 待我检视的合并请求   - need_my_approve 待我审核的合并请求   - all 所有有权限访问的合并请求
    * sourceBranch  **参数解释：** 合并请求原分支
    * targetBranch  **参数解释：** 合并请求目标分支
    * search  **参数解释：** 根据合并请求标题、描述信息过滤关键字
    * wip  **参数解释：** 合并请求标题是否有WIP关键字
    * mergedBy  **参数解释：** 合并请求合并人
    * mergedAfter  **参数解释：** 指定时间后合入
    * mergedBefore  **参数解释：** 指定时间前合入
    * offset  **参数解释：** 分页参数偏移量
    * limit  **参数解释：** 分页参数结果数量限制
    * onlyCount  **参数解释：** 是否只返回合并请求总数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'state' => null,
        'orderBy' => null,
        'sort' => null,
        'labels' => null,
        'createdBefore' => 'date-time',
        'createdAfter' => 'date-time',
        'updatedAfter' => 'date-time',
        'updatedBefore' => 'date-time',
        'view' => null,
        'authorId' => null,
        'scope' => null,
        'sourceBranch' => null,
        'targetBranch' => null,
        'search' => null,
        'wip' => null,
        'mergedBy' => null,
        'mergedAfter' => 'date-time',
        'mergedBefore' => 'date-time',
        'offset' => null,
        'limit' => null,
        'onlyCount' => null
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
    * state  **参数解释：** 合并请求状态 **约束限制：** - all，返回所有状态的合并请求。 - opened，返回开启中的合并请求。 - closed，返回关闭的合并请求。 - locked，返回锁定的合并请求。 - merged，返回已合并的合并请求。
    * orderBy  **参数解释：** 排序方式 **约束限制：** - created_at，根据创建时间排序。 - updated_at，根据更新时间排序。 - merged_at，根据合并时间排序。
    * sort  **参数解释：** 排序顺序 **约束限制：**   - asc，正序排序。   - desc，倒序排序。
    * labels  **参数解释：** 合并请求关联标签
    * createdBefore  **参数解释：** 指定时间前创建
    * createdAfter  **参数解释：** 指定时间后创建
    * updatedAfter  **参数解释：** 指定时间后更新
    * updatedBefore  **参数解释：** 指定时间前更新
    * view  **参数解释：** 结果集属性，根据给定的参数返回不同的结果， simple，返回简单数据，basic返回基本数据。
    * authorId  **参数解释：** 合并请求创建人
    * scope  **参数解释：**   - created_by_me 我创建的合并请求   - assigned_to_me 待我合并的合并请求   - need_my_review 待我检视的合并请求   - need_my_approve 待我审核的合并请求   - all 所有有权限访问的合并请求
    * sourceBranch  **参数解释：** 合并请求原分支
    * targetBranch  **参数解释：** 合并请求目标分支
    * search  **参数解释：** 根据合并请求标题、描述信息过滤关键字
    * wip  **参数解释：** 合并请求标题是否有WIP关键字
    * mergedBy  **参数解释：** 合并请求合并人
    * mergedAfter  **参数解释：** 指定时间后合入
    * mergedBefore  **参数解释：** 指定时间前合入
    * offset  **参数解释：** 分页参数偏移量
    * limit  **参数解释：** 分页参数结果数量限制
    * onlyCount  **参数解释：** 是否只返回合并请求总数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'state' => 'state',
            'orderBy' => 'order_by',
            'sort' => 'sort',
            'labels' => 'labels',
            'createdBefore' => 'created_before',
            'createdAfter' => 'created_after',
            'updatedAfter' => 'updated_after',
            'updatedBefore' => 'updated_before',
            'view' => 'view',
            'authorId' => 'author_id',
            'scope' => 'scope',
            'sourceBranch' => 'source_branch',
            'targetBranch' => 'target_branch',
            'search' => 'search',
            'wip' => 'wip',
            'mergedBy' => 'merged_by',
            'mergedAfter' => 'merged_after',
            'mergedBefore' => 'merged_before',
            'offset' => 'offset',
            'limit' => 'limit',
            'onlyCount' => 'only_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * state  **参数解释：** 合并请求状态 **约束限制：** - all，返回所有状态的合并请求。 - opened，返回开启中的合并请求。 - closed，返回关闭的合并请求。 - locked，返回锁定的合并请求。 - merged，返回已合并的合并请求。
    * orderBy  **参数解释：** 排序方式 **约束限制：** - created_at，根据创建时间排序。 - updated_at，根据更新时间排序。 - merged_at，根据合并时间排序。
    * sort  **参数解释：** 排序顺序 **约束限制：**   - asc，正序排序。   - desc，倒序排序。
    * labels  **参数解释：** 合并请求关联标签
    * createdBefore  **参数解释：** 指定时间前创建
    * createdAfter  **参数解释：** 指定时间后创建
    * updatedAfter  **参数解释：** 指定时间后更新
    * updatedBefore  **参数解释：** 指定时间前更新
    * view  **参数解释：** 结果集属性，根据给定的参数返回不同的结果， simple，返回简单数据，basic返回基本数据。
    * authorId  **参数解释：** 合并请求创建人
    * scope  **参数解释：**   - created_by_me 我创建的合并请求   - assigned_to_me 待我合并的合并请求   - need_my_review 待我检视的合并请求   - need_my_approve 待我审核的合并请求   - all 所有有权限访问的合并请求
    * sourceBranch  **参数解释：** 合并请求原分支
    * targetBranch  **参数解释：** 合并请求目标分支
    * search  **参数解释：** 根据合并请求标题、描述信息过滤关键字
    * wip  **参数解释：** 合并请求标题是否有WIP关键字
    * mergedBy  **参数解释：** 合并请求合并人
    * mergedAfter  **参数解释：** 指定时间后合入
    * mergedBefore  **参数解释：** 指定时间前合入
    * offset  **参数解释：** 分页参数偏移量
    * limit  **参数解释：** 分页参数结果数量限制
    * onlyCount  **参数解释：** 是否只返回合并请求总数
    *
    * @var string[]
    */
    protected static $setters = [
            'state' => 'setState',
            'orderBy' => 'setOrderBy',
            'sort' => 'setSort',
            'labels' => 'setLabels',
            'createdBefore' => 'setCreatedBefore',
            'createdAfter' => 'setCreatedAfter',
            'updatedAfter' => 'setUpdatedAfter',
            'updatedBefore' => 'setUpdatedBefore',
            'view' => 'setView',
            'authorId' => 'setAuthorId',
            'scope' => 'setScope',
            'sourceBranch' => 'setSourceBranch',
            'targetBranch' => 'setTargetBranch',
            'search' => 'setSearch',
            'wip' => 'setWip',
            'mergedBy' => 'setMergedBy',
            'mergedAfter' => 'setMergedAfter',
            'mergedBefore' => 'setMergedBefore',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'onlyCount' => 'setOnlyCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * state  **参数解释：** 合并请求状态 **约束限制：** - all，返回所有状态的合并请求。 - opened，返回开启中的合并请求。 - closed，返回关闭的合并请求。 - locked，返回锁定的合并请求。 - merged，返回已合并的合并请求。
    * orderBy  **参数解释：** 排序方式 **约束限制：** - created_at，根据创建时间排序。 - updated_at，根据更新时间排序。 - merged_at，根据合并时间排序。
    * sort  **参数解释：** 排序顺序 **约束限制：**   - asc，正序排序。   - desc，倒序排序。
    * labels  **参数解释：** 合并请求关联标签
    * createdBefore  **参数解释：** 指定时间前创建
    * createdAfter  **参数解释：** 指定时间后创建
    * updatedAfter  **参数解释：** 指定时间后更新
    * updatedBefore  **参数解释：** 指定时间前更新
    * view  **参数解释：** 结果集属性，根据给定的参数返回不同的结果， simple，返回简单数据，basic返回基本数据。
    * authorId  **参数解释：** 合并请求创建人
    * scope  **参数解释：**   - created_by_me 我创建的合并请求   - assigned_to_me 待我合并的合并请求   - need_my_review 待我检视的合并请求   - need_my_approve 待我审核的合并请求   - all 所有有权限访问的合并请求
    * sourceBranch  **参数解释：** 合并请求原分支
    * targetBranch  **参数解释：** 合并请求目标分支
    * search  **参数解释：** 根据合并请求标题、描述信息过滤关键字
    * wip  **参数解释：** 合并请求标题是否有WIP关键字
    * mergedBy  **参数解释：** 合并请求合并人
    * mergedAfter  **参数解释：** 指定时间后合入
    * mergedBefore  **参数解释：** 指定时间前合入
    * offset  **参数解释：** 分页参数偏移量
    * limit  **参数解释：** 分页参数结果数量限制
    * onlyCount  **参数解释：** 是否只返回合并请求总数
    *
    * @var string[]
    */
    protected static $getters = [
            'state' => 'getState',
            'orderBy' => 'getOrderBy',
            'sort' => 'getSort',
            'labels' => 'getLabels',
            'createdBefore' => 'getCreatedBefore',
            'createdAfter' => 'getCreatedAfter',
            'updatedAfter' => 'getUpdatedAfter',
            'updatedBefore' => 'getUpdatedBefore',
            'view' => 'getView',
            'authorId' => 'getAuthorId',
            'scope' => 'getScope',
            'sourceBranch' => 'getSourceBranch',
            'targetBranch' => 'getTargetBranch',
            'search' => 'getSearch',
            'wip' => 'getWip',
            'mergedBy' => 'getMergedBy',
            'mergedAfter' => 'getMergedAfter',
            'mergedBefore' => 'getMergedBefore',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'onlyCount' => 'getOnlyCount'
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
    const STATE_OPENED = 'opened';
    const STATE_CLOSED = 'closed';
    const STATE_LOCKED = 'locked';
    const STATE_MERGED = 'merged';
    const STATE_ALL = 'all';
    const ORDER_BY_CREATED_AT = 'created_at';
    const ORDER_BY_UPDATED_AT = 'updated_at';
    const ORDER_BY_MERGED_AT = 'merged_at';
    const SORT_ASC = 'asc';
    const SORT_DESC = 'desc';
    const VIEW_SIMPLE = 'simple';
    const VIEW_BASIC = 'basic';
    const SCOPE_CREATED_BY_ME = 'created_by_me';
    const SCOPE_ASSIGNED_TO_ME = 'assigned_to_me';
    const SCOPE_NEED_MY_REVIEW = 'need_my_review';
    const SCOPE_NEED_MY_APPROVE = 'need_my_approve';
    const SCOPE_ALL = 'all';
    const WIP_TRUE = 'true';
    const WIP_FALSE = 'false';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_OPENED,
            self::STATE_CLOSED,
            self::STATE_LOCKED,
            self::STATE_MERGED,
            self::STATE_ALL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOrderByAllowableValues()
    {
        return [
            self::ORDER_BY_CREATED_AT,
            self::ORDER_BY_UPDATED_AT,
            self::ORDER_BY_MERGED_AT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortAllowableValues()
    {
        return [
            self::SORT_ASC,
            self::SORT_DESC,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getViewAllowableValues()
    {
        return [
            self::VIEW_SIMPLE,
            self::VIEW_BASIC,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getScopeAllowableValues()
    {
        return [
            self::SCOPE_CREATED_BY_ME,
            self::SCOPE_ASSIGNED_TO_ME,
            self::SCOPE_NEED_MY_REVIEW,
            self::SCOPE_NEED_MY_APPROVE,
            self::SCOPE_ALL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getWipAllowableValues()
    {
        return [
            self::WIP_TRUE,
            self::WIP_FALSE,
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
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['orderBy'] = isset($data['orderBy']) ? $data['orderBy'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['createdBefore'] = isset($data['createdBefore']) ? $data['createdBefore'] : null;
        $this->container['createdAfter'] = isset($data['createdAfter']) ? $data['createdAfter'] : null;
        $this->container['updatedAfter'] = isset($data['updatedAfter']) ? $data['updatedAfter'] : null;
        $this->container['updatedBefore'] = isset($data['updatedBefore']) ? $data['updatedBefore'] : null;
        $this->container['view'] = isset($data['view']) ? $data['view'] : null;
        $this->container['authorId'] = isset($data['authorId']) ? $data['authorId'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['sourceBranch'] = isset($data['sourceBranch']) ? $data['sourceBranch'] : null;
        $this->container['targetBranch'] = isset($data['targetBranch']) ? $data['targetBranch'] : null;
        $this->container['search'] = isset($data['search']) ? $data['search'] : null;
        $this->container['wip'] = isset($data['wip']) ? $data['wip'] : null;
        $this->container['mergedBy'] = isset($data['mergedBy']) ? $data['mergedBy'] : null;
        $this->container['mergedAfter'] = isset($data['mergedAfter']) ? $data['mergedAfter'] : null;
        $this->container['mergedBefore'] = isset($data['mergedBefore']) ? $data['mergedBefore'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['onlyCount'] = isset($data['onlyCount']) ? $data['onlyCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getOrderByAllowableValues();
                if (!is_null($this->container['orderBy']) && !in_array($this->container['orderBy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'orderBy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSortAllowableValues();
                if (!is_null($this->container['sort']) && !in_array($this->container['sort'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sort', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getViewAllowableValues();
                if (!is_null($this->container['view']) && !in_array($this->container['view'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'view', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getScopeAllowableValues();
                if (!is_null($this->container['scope']) && !in_array($this->container['scope'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'scope', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getWipAllowableValues();
                if (!is_null($this->container['wip']) && !in_array($this->container['wip'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'wip', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets state
    *  **参数解释：** 合并请求状态 **约束限制：** - all，返回所有状态的合并请求。 - opened，返回开启中的合并请求。 - closed，返回关闭的合并请求。 - locked，返回锁定的合并请求。 - merged，返回已合并的合并请求。
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
    * @param string|null $state **参数解释：** 合并请求状态 **约束限制：** - all，返回所有状态的合并请求。 - opened，返回开启中的合并请求。 - closed，返回关闭的合并请求。 - locked，返回锁定的合并请求。 - merged，返回已合并的合并请求。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets orderBy
    *  **参数解释：** 排序方式 **约束限制：** - created_at，根据创建时间排序。 - updated_at，根据更新时间排序。 - merged_at，根据合并时间排序。
    *
    * @return string|null
    */
    public function getOrderBy()
    {
        return $this->container['orderBy'];
    }

    /**
    * Sets orderBy
    *
    * @param string|null $orderBy **参数解释：** 排序方式 **约束限制：** - created_at，根据创建时间排序。 - updated_at，根据更新时间排序。 - merged_at，根据合并时间排序。
    *
    * @return $this
    */
    public function setOrderBy($orderBy)
    {
        $this->container['orderBy'] = $orderBy;
        return $this;
    }

    /**
    * Gets sort
    *  **参数解释：** 排序顺序 **约束限制：**   - asc，正序排序。   - desc，倒序排序。
    *
    * @return string|null
    */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
    * Sets sort
    *
    * @param string|null $sort **参数解释：** 排序顺序 **约束限制：**   - asc，正序排序。   - desc，倒序排序。
    *
    * @return $this
    */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;
        return $this;
    }

    /**
    * Gets labels
    *  **参数解释：** 合并请求关联标签
    *
    * @return string|null
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param string|null $labels **参数解释：** 合并请求关联标签
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets createdBefore
    *  **参数解释：** 指定时间前创建
    *
    * @return \DateTime|null
    */
    public function getCreatedBefore()
    {
        return $this->container['createdBefore'];
    }

    /**
    * Sets createdBefore
    *
    * @param \DateTime|null $createdBefore **参数解释：** 指定时间前创建
    *
    * @return $this
    */
    public function setCreatedBefore($createdBefore)
    {
        $this->container['createdBefore'] = $createdBefore;
        return $this;
    }

    /**
    * Gets createdAfter
    *  **参数解释：** 指定时间后创建
    *
    * @return \DateTime|null
    */
    public function getCreatedAfter()
    {
        return $this->container['createdAfter'];
    }

    /**
    * Sets createdAfter
    *
    * @param \DateTime|null $createdAfter **参数解释：** 指定时间后创建
    *
    * @return $this
    */
    public function setCreatedAfter($createdAfter)
    {
        $this->container['createdAfter'] = $createdAfter;
        return $this;
    }

    /**
    * Gets updatedAfter
    *  **参数解释：** 指定时间后更新
    *
    * @return \DateTime|null
    */
    public function getUpdatedAfter()
    {
        return $this->container['updatedAfter'];
    }

    /**
    * Sets updatedAfter
    *
    * @param \DateTime|null $updatedAfter **参数解释：** 指定时间后更新
    *
    * @return $this
    */
    public function setUpdatedAfter($updatedAfter)
    {
        $this->container['updatedAfter'] = $updatedAfter;
        return $this;
    }

    /**
    * Gets updatedBefore
    *  **参数解释：** 指定时间前更新
    *
    * @return \DateTime|null
    */
    public function getUpdatedBefore()
    {
        return $this->container['updatedBefore'];
    }

    /**
    * Sets updatedBefore
    *
    * @param \DateTime|null $updatedBefore **参数解释：** 指定时间前更新
    *
    * @return $this
    */
    public function setUpdatedBefore($updatedBefore)
    {
        $this->container['updatedBefore'] = $updatedBefore;
        return $this;
    }

    /**
    * Gets view
    *  **参数解释：** 结果集属性，根据给定的参数返回不同的结果， simple，返回简单数据，basic返回基本数据。
    *
    * @return string|null
    */
    public function getView()
    {
        return $this->container['view'];
    }

    /**
    * Sets view
    *
    * @param string|null $view **参数解释：** 结果集属性，根据给定的参数返回不同的结果， simple，返回简单数据，basic返回基本数据。
    *
    * @return $this
    */
    public function setView($view)
    {
        $this->container['view'] = $view;
        return $this;
    }

    /**
    * Gets authorId
    *  **参数解释：** 合并请求创建人
    *
    * @return string|null
    */
    public function getAuthorId()
    {
        return $this->container['authorId'];
    }

    /**
    * Sets authorId
    *
    * @param string|null $authorId **参数解释：** 合并请求创建人
    *
    * @return $this
    */
    public function setAuthorId($authorId)
    {
        $this->container['authorId'] = $authorId;
        return $this;
    }

    /**
    * Gets scope
    *  **参数解释：**   - created_by_me 我创建的合并请求   - assigned_to_me 待我合并的合并请求   - need_my_review 待我检视的合并请求   - need_my_approve 待我审核的合并请求   - all 所有有权限访问的合并请求
    *
    * @return string|null
    */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
    * Sets scope
    *
    * @param string|null $scope **参数解释：**   - created_by_me 我创建的合并请求   - assigned_to_me 待我合并的合并请求   - need_my_review 待我检视的合并请求   - need_my_approve 待我审核的合并请求   - all 所有有权限访问的合并请求
    *
    * @return $this
    */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;
        return $this;
    }

    /**
    * Gets sourceBranch
    *  **参数解释：** 合并请求原分支
    *
    * @return string|null
    */
    public function getSourceBranch()
    {
        return $this->container['sourceBranch'];
    }

    /**
    * Sets sourceBranch
    *
    * @param string|null $sourceBranch **参数解释：** 合并请求原分支
    *
    * @return $this
    */
    public function setSourceBranch($sourceBranch)
    {
        $this->container['sourceBranch'] = $sourceBranch;
        return $this;
    }

    /**
    * Gets targetBranch
    *  **参数解释：** 合并请求目标分支
    *
    * @return string|null
    */
    public function getTargetBranch()
    {
        return $this->container['targetBranch'];
    }

    /**
    * Sets targetBranch
    *
    * @param string|null $targetBranch **参数解释：** 合并请求目标分支
    *
    * @return $this
    */
    public function setTargetBranch($targetBranch)
    {
        $this->container['targetBranch'] = $targetBranch;
        return $this;
    }

    /**
    * Gets search
    *  **参数解释：** 根据合并请求标题、描述信息过滤关键字
    *
    * @return string|null
    */
    public function getSearch()
    {
        return $this->container['search'];
    }

    /**
    * Sets search
    *
    * @param string|null $search **参数解释：** 根据合并请求标题、描述信息过滤关键字
    *
    * @return $this
    */
    public function setSearch($search)
    {
        $this->container['search'] = $search;
        return $this;
    }

    /**
    * Gets wip
    *  **参数解释：** 合并请求标题是否有WIP关键字
    *
    * @return string|null
    */
    public function getWip()
    {
        return $this->container['wip'];
    }

    /**
    * Sets wip
    *
    * @param string|null $wip **参数解释：** 合并请求标题是否有WIP关键字
    *
    * @return $this
    */
    public function setWip($wip)
    {
        $this->container['wip'] = $wip;
        return $this;
    }

    /**
    * Gets mergedBy
    *  **参数解释：** 合并请求合并人
    *
    * @return string|null
    */
    public function getMergedBy()
    {
        return $this->container['mergedBy'];
    }

    /**
    * Sets mergedBy
    *
    * @param string|null $mergedBy **参数解释：** 合并请求合并人
    *
    * @return $this
    */
    public function setMergedBy($mergedBy)
    {
        $this->container['mergedBy'] = $mergedBy;
        return $this;
    }

    /**
    * Gets mergedAfter
    *  **参数解释：** 指定时间后合入
    *
    * @return \DateTime|null
    */
    public function getMergedAfter()
    {
        return $this->container['mergedAfter'];
    }

    /**
    * Sets mergedAfter
    *
    * @param \DateTime|null $mergedAfter **参数解释：** 指定时间后合入
    *
    * @return $this
    */
    public function setMergedAfter($mergedAfter)
    {
        $this->container['mergedAfter'] = $mergedAfter;
        return $this;
    }

    /**
    * Gets mergedBefore
    *  **参数解释：** 指定时间前合入
    *
    * @return \DateTime|null
    */
    public function getMergedBefore()
    {
        return $this->container['mergedBefore'];
    }

    /**
    * Sets mergedBefore
    *
    * @param \DateTime|null $mergedBefore **参数解释：** 指定时间前合入
    *
    * @return $this
    */
    public function setMergedBefore($mergedBefore)
    {
        $this->container['mergedBefore'] = $mergedBefore;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释：** 分页参数偏移量
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
    * @param int|null $offset **参数解释：** 分页参数偏移量
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
    *  **参数解释：** 分页参数结果数量限制
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
    * @param int|null $limit **参数解释：** 分页参数结果数量限制
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets onlyCount
    *  **参数解释：** 是否只返回合并请求总数
    *
    * @return bool|null
    */
    public function getOnlyCount()
    {
        return $this->container['onlyCount'];
    }

    /**
    * Sets onlyCount
    *
    * @param bool|null $onlyCount **参数解释：** 是否只返回合并请求总数
    *
    * @return $this
    */
    public function setOnlyCount($onlyCount)
    {
        $this->container['onlyCount'] = $onlyCount;
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

