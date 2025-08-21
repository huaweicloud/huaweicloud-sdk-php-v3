<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRepositoryReviewsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRepositoryReviewsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * noteableType  **参数解释：** 意见类型。 **取值范围：** - Commit，提交。 - MergeRequest，合并请求。
    * search  **参数解释：** 查询评论内容。
    * startDate  **参数解释：** 开始日期。
    * endDate  **参数解释：** 结束日期。
    * onlyCount  **参数解释：** 是否仅返回todo。 **取值范围：** - true，仅返回带有提交计数和diffs计数的结果。 - false，按照compare_view参数返回结果信息。
    * reviewCategories  **参数解释：** 搜索的检视意见分类。 **取值范围：** 字符串长度不少于1，不超过200。
    * reviewModules  **参数解释：** 搜索的检视意见模块。 **取值范围：** 字符串长度不少于1，不超过200。
    * severity  **参数解释：** 检视意见严重程度
    * assigneeId  **参数解释：** 检视意见指派人id。
    * proposerId  **参数解释：** 检视意见检视人id。
    * targetBranch  **参数解释：** 目标分支名称。 **取值范围：** 字符串长度不少于1，不超过2000。
    * includeReply  **参数解释：** 是否包含回复。 **取值范围：** - true，包含。 - false，不包含。
    * orderBy  **参数解释：** 排序方式。 **取值范围：** - created，创建时间。 - updated，更新时间。
    * sort  **参数解释：** 检视意见返回排序 - asc 按创建时间正序返回 - desc 按创建时间倒序返回
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'repositoryId' => 'int',
            'noteableType' => 'string',
            'search' => 'string',
            'startDate' => '\DateTime',
            'endDate' => '\DateTime',
            'onlyCount' => 'bool',
            'reviewCategories' => 'string',
            'reviewModules' => 'string',
            'severity' => 'string',
            'assigneeId' => 'int',
            'proposerId' => 'int',
            'targetBranch' => 'string',
            'includeReply' => 'bool',
            'orderBy' => 'string',
            'sort' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * noteableType  **参数解释：** 意见类型。 **取值范围：** - Commit，提交。 - MergeRequest，合并请求。
    * search  **参数解释：** 查询评论内容。
    * startDate  **参数解释：** 开始日期。
    * endDate  **参数解释：** 结束日期。
    * onlyCount  **参数解释：** 是否仅返回todo。 **取值范围：** - true，仅返回带有提交计数和diffs计数的结果。 - false，按照compare_view参数返回结果信息。
    * reviewCategories  **参数解释：** 搜索的检视意见分类。 **取值范围：** 字符串长度不少于1，不超过200。
    * reviewModules  **参数解释：** 搜索的检视意见模块。 **取值范围：** 字符串长度不少于1，不超过200。
    * severity  **参数解释：** 检视意见严重程度
    * assigneeId  **参数解释：** 检视意见指派人id。
    * proposerId  **参数解释：** 检视意见检视人id。
    * targetBranch  **参数解释：** 目标分支名称。 **取值范围：** 字符串长度不少于1，不超过2000。
    * includeReply  **参数解释：** 是否包含回复。 **取值范围：** - true，包含。 - false，不包含。
    * orderBy  **参数解释：** 排序方式。 **取值范围：** - created，创建时间。 - updated，更新时间。
    * sort  **参数解释：** 检视意见返回排序 - asc 按创建时间正序返回 - desc 按创建时间倒序返回
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'repositoryId' => null,
        'noteableType' => null,
        'search' => null,
        'startDate' => 'date-time',
        'endDate' => 'date-time',
        'onlyCount' => null,
        'reviewCategories' => null,
        'reviewModules' => null,
        'severity' => null,
        'assigneeId' => null,
        'proposerId' => null,
        'targetBranch' => null,
        'includeReply' => null,
        'orderBy' => null,
        'sort' => null,
        'offset' => 'int32',
        'limit' => 'int32'
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
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * noteableType  **参数解释：** 意见类型。 **取值范围：** - Commit，提交。 - MergeRequest，合并请求。
    * search  **参数解释：** 查询评论内容。
    * startDate  **参数解释：** 开始日期。
    * endDate  **参数解释：** 结束日期。
    * onlyCount  **参数解释：** 是否仅返回todo。 **取值范围：** - true，仅返回带有提交计数和diffs计数的结果。 - false，按照compare_view参数返回结果信息。
    * reviewCategories  **参数解释：** 搜索的检视意见分类。 **取值范围：** 字符串长度不少于1，不超过200。
    * reviewModules  **参数解释：** 搜索的检视意见模块。 **取值范围：** 字符串长度不少于1，不超过200。
    * severity  **参数解释：** 检视意见严重程度
    * assigneeId  **参数解释：** 检视意见指派人id。
    * proposerId  **参数解释：** 检视意见检视人id。
    * targetBranch  **参数解释：** 目标分支名称。 **取值范围：** 字符串长度不少于1，不超过2000。
    * includeReply  **参数解释：** 是否包含回复。 **取值范围：** - true，包含。 - false，不包含。
    * orderBy  **参数解释：** 排序方式。 **取值范围：** - created，创建时间。 - updated，更新时间。
    * sort  **参数解释：** 检视意见返回排序 - asc 按创建时间正序返回 - desc 按创建时间倒序返回
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'repositoryId' => 'repository_id',
            'noteableType' => 'noteable_type',
            'search' => 'search',
            'startDate' => 'start_date',
            'endDate' => 'end_date',
            'onlyCount' => 'only_count',
            'reviewCategories' => 'review_categories',
            'reviewModules' => 'review_modules',
            'severity' => 'severity',
            'assigneeId' => 'assignee_id',
            'proposerId' => 'proposer_id',
            'targetBranch' => 'target_branch',
            'includeReply' => 'include_reply',
            'orderBy' => 'order_by',
            'sort' => 'sort',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * noteableType  **参数解释：** 意见类型。 **取值范围：** - Commit，提交。 - MergeRequest，合并请求。
    * search  **参数解释：** 查询评论内容。
    * startDate  **参数解释：** 开始日期。
    * endDate  **参数解释：** 结束日期。
    * onlyCount  **参数解释：** 是否仅返回todo。 **取值范围：** - true，仅返回带有提交计数和diffs计数的结果。 - false，按照compare_view参数返回结果信息。
    * reviewCategories  **参数解释：** 搜索的检视意见分类。 **取值范围：** 字符串长度不少于1，不超过200。
    * reviewModules  **参数解释：** 搜索的检视意见模块。 **取值范围：** 字符串长度不少于1，不超过200。
    * severity  **参数解释：** 检视意见严重程度
    * assigneeId  **参数解释：** 检视意见指派人id。
    * proposerId  **参数解释：** 检视意见检视人id。
    * targetBranch  **参数解释：** 目标分支名称。 **取值范围：** 字符串长度不少于1，不超过2000。
    * includeReply  **参数解释：** 是否包含回复。 **取值范围：** - true，包含。 - false，不包含。
    * orderBy  **参数解释：** 排序方式。 **取值范围：** - created，创建时间。 - updated，更新时间。
    * sort  **参数解释：** 检视意见返回排序 - asc 按创建时间正序返回 - desc 按创建时间倒序返回
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'repositoryId' => 'setRepositoryId',
            'noteableType' => 'setNoteableType',
            'search' => 'setSearch',
            'startDate' => 'setStartDate',
            'endDate' => 'setEndDate',
            'onlyCount' => 'setOnlyCount',
            'reviewCategories' => 'setReviewCategories',
            'reviewModules' => 'setReviewModules',
            'severity' => 'setSeverity',
            'assigneeId' => 'setAssigneeId',
            'proposerId' => 'setProposerId',
            'targetBranch' => 'setTargetBranch',
            'includeReply' => 'setIncludeReply',
            'orderBy' => 'setOrderBy',
            'sort' => 'setSort',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * noteableType  **参数解释：** 意见类型。 **取值范围：** - Commit，提交。 - MergeRequest，合并请求。
    * search  **参数解释：** 查询评论内容。
    * startDate  **参数解释：** 开始日期。
    * endDate  **参数解释：** 结束日期。
    * onlyCount  **参数解释：** 是否仅返回todo。 **取值范围：** - true，仅返回带有提交计数和diffs计数的结果。 - false，按照compare_view参数返回结果信息。
    * reviewCategories  **参数解释：** 搜索的检视意见分类。 **取值范围：** 字符串长度不少于1，不超过200。
    * reviewModules  **参数解释：** 搜索的检视意见模块。 **取值范围：** 字符串长度不少于1，不超过200。
    * severity  **参数解释：** 检视意见严重程度
    * assigneeId  **参数解释：** 检视意见指派人id。
    * proposerId  **参数解释：** 检视意见检视人id。
    * targetBranch  **参数解释：** 目标分支名称。 **取值范围：** 字符串长度不少于1，不超过2000。
    * includeReply  **参数解释：** 是否包含回复。 **取值范围：** - true，包含。 - false，不包含。
    * orderBy  **参数解释：** 排序方式。 **取值范围：** - created，创建时间。 - updated，更新时间。
    * sort  **参数解释：** 检视意见返回排序 - asc 按创建时间正序返回 - desc 按创建时间倒序返回
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'repositoryId' => 'getRepositoryId',
            'noteableType' => 'getNoteableType',
            'search' => 'getSearch',
            'startDate' => 'getStartDate',
            'endDate' => 'getEndDate',
            'onlyCount' => 'getOnlyCount',
            'reviewCategories' => 'getReviewCategories',
            'reviewModules' => 'getReviewModules',
            'severity' => 'getSeverity',
            'assigneeId' => 'getAssigneeId',
            'proposerId' => 'getProposerId',
            'targetBranch' => 'getTargetBranch',
            'includeReply' => 'getIncludeReply',
            'orderBy' => 'getOrderBy',
            'sort' => 'getSort',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
    const NOTEABLE_TYPE_COMMIT = 'Commit';
    const NOTEABLE_TYPE_MERGE_REQUEST = 'MergeRequest';
    const SEVERITY_SUGGESTION = 'suggestion';
    const SEVERITY_MINOR = 'minor';
    const SEVERITY_MAJOR = 'major';
    const SEVERITY_FATAL = 'fatal';
    const ORDER_BY_CREATED_AT = 'created_at';
    const ORDER_BY_UPDATED_AT = 'updated_at';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNoteableTypeAllowableValues()
    {
        return [
            self::NOTEABLE_TYPE_COMMIT,
            self::NOTEABLE_TYPE_MERGE_REQUEST,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSeverityAllowableValues()
    {
        return [
            self::SEVERITY_SUGGESTION,
            self::SEVERITY_MINOR,
            self::SEVERITY_MAJOR,
            self::SEVERITY_FATAL,
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
        $this->container['repositoryId'] = isset($data['repositoryId']) ? $data['repositoryId'] : null;
        $this->container['noteableType'] = isset($data['noteableType']) ? $data['noteableType'] : null;
        $this->container['search'] = isset($data['search']) ? $data['search'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['onlyCount'] = isset($data['onlyCount']) ? $data['onlyCount'] : null;
        $this->container['reviewCategories'] = isset($data['reviewCategories']) ? $data['reviewCategories'] : null;
        $this->container['reviewModules'] = isset($data['reviewModules']) ? $data['reviewModules'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['assigneeId'] = isset($data['assigneeId']) ? $data['assigneeId'] : null;
        $this->container['proposerId'] = isset($data['proposerId']) ? $data['proposerId'] : null;
        $this->container['targetBranch'] = isset($data['targetBranch']) ? $data['targetBranch'] : null;
        $this->container['includeReply'] = isset($data['includeReply']) ? $data['includeReply'] : null;
        $this->container['orderBy'] = isset($data['orderBy']) ? $data['orderBy'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['repositoryId'] === null) {
            $invalidProperties[] = "'repositoryId' can't be null";
        }
            if (($this->container['repositoryId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'repositoryId', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['repositoryId'] < 1)) {
                $invalidProperties[] = "invalid value for 'repositoryId', must be bigger than or equal to 1.";
            }
        if ($this->container['noteableType'] === null) {
            $invalidProperties[] = "'noteableType' can't be null";
        }
            $allowedValues = $this->getNoteableTypeAllowableValues();
                if (!is_null($this->container['noteableType']) && !in_array($this->container['noteableType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'noteableType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['reviewCategories']) && (mb_strlen($this->container['reviewCategories']) > 200)) {
                $invalidProperties[] = "invalid value for 'reviewCategories', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['reviewCategories']) && (mb_strlen($this->container['reviewCategories']) < 1)) {
                $invalidProperties[] = "invalid value for 'reviewCategories', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['reviewModules']) && (mb_strlen($this->container['reviewModules']) > 200)) {
                $invalidProperties[] = "invalid value for 'reviewModules', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['reviewModules']) && (mb_strlen($this->container['reviewModules']) < 1)) {
                $invalidProperties[] = "invalid value for 'reviewModules', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getSeverityAllowableValues();
                if (!is_null($this->container['severity']) && !in_array($this->container['severity'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'severity', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['assigneeId']) && ($this->container['assigneeId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'assigneeId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['assigneeId']) && ($this->container['assigneeId'] < 1)) {
                $invalidProperties[] = "invalid value for 'assigneeId', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['proposerId']) && ($this->container['proposerId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'proposerId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['proposerId']) && ($this->container['proposerId'] < 1)) {
                $invalidProperties[] = "invalid value for 'proposerId', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getOrderByAllowableValues();
                if (!is_null($this->container['orderBy']) && !in_array($this->container['orderBy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'orderBy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2147483647.";
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
    * Gets repositoryId
    *  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    *
    * @return int
    */
    public function getRepositoryId()
    {
        return $this->container['repositoryId'];
    }

    /**
    * Sets repositoryId
    *
    * @param int $repositoryId **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setRepositoryId($repositoryId)
    {
        $this->container['repositoryId'] = $repositoryId;
        return $this;
    }

    /**
    * Gets noteableType
    *  **参数解释：** 意见类型。 **取值范围：** - Commit，提交。 - MergeRequest，合并请求。
    *
    * @return string
    */
    public function getNoteableType()
    {
        return $this->container['noteableType'];
    }

    /**
    * Sets noteableType
    *
    * @param string $noteableType **参数解释：** 意见类型。 **取值范围：** - Commit，提交。 - MergeRequest，合并请求。
    *
    * @return $this
    */
    public function setNoteableType($noteableType)
    {
        $this->container['noteableType'] = $noteableType;
        return $this;
    }

    /**
    * Gets search
    *  **参数解释：** 查询评论内容。
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
    * @param string|null $search **参数解释：** 查询评论内容。
    *
    * @return $this
    */
    public function setSearch($search)
    {
        $this->container['search'] = $search;
        return $this;
    }

    /**
    * Gets startDate
    *  **参数解释：** 开始日期。
    *
    * @return \DateTime|null
    */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
    * Sets startDate
    *
    * @param \DateTime|null $startDate **参数解释：** 开始日期。
    *
    * @return $this
    */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;
        return $this;
    }

    /**
    * Gets endDate
    *  **参数解释：** 结束日期。
    *
    * @return \DateTime|null
    */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
    * Sets endDate
    *
    * @param \DateTime|null $endDate **参数解释：** 结束日期。
    *
    * @return $this
    */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;
        return $this;
    }

    /**
    * Gets onlyCount
    *  **参数解释：** 是否仅返回todo。 **取值范围：** - true，仅返回带有提交计数和diffs计数的结果。 - false，按照compare_view参数返回结果信息。
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
    * @param bool|null $onlyCount **参数解释：** 是否仅返回todo。 **取值范围：** - true，仅返回带有提交计数和diffs计数的结果。 - false，按照compare_view参数返回结果信息。
    *
    * @return $this
    */
    public function setOnlyCount($onlyCount)
    {
        $this->container['onlyCount'] = $onlyCount;
        return $this;
    }

    /**
    * Gets reviewCategories
    *  **参数解释：** 搜索的检视意见分类。 **取值范围：** 字符串长度不少于1，不超过200。
    *
    * @return string|null
    */
    public function getReviewCategories()
    {
        return $this->container['reviewCategories'];
    }

    /**
    * Sets reviewCategories
    *
    * @param string|null $reviewCategories **参数解释：** 搜索的检视意见分类。 **取值范围：** 字符串长度不少于1，不超过200。
    *
    * @return $this
    */
    public function setReviewCategories($reviewCategories)
    {
        $this->container['reviewCategories'] = $reviewCategories;
        return $this;
    }

    /**
    * Gets reviewModules
    *  **参数解释：** 搜索的检视意见模块。 **取值范围：** 字符串长度不少于1，不超过200。
    *
    * @return string|null
    */
    public function getReviewModules()
    {
        return $this->container['reviewModules'];
    }

    /**
    * Sets reviewModules
    *
    * @param string|null $reviewModules **参数解释：** 搜索的检视意见模块。 **取值范围：** 字符串长度不少于1，不超过200。
    *
    * @return $this
    */
    public function setReviewModules($reviewModules)
    {
        $this->container['reviewModules'] = $reviewModules;
        return $this;
    }

    /**
    * Gets severity
    *  **参数解释：** 检视意见严重程度
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
    * @param string|null $severity **参数解释：** 检视意见严重程度
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets assigneeId
    *  **参数解释：** 检视意见指派人id。
    *
    * @return int|null
    */
    public function getAssigneeId()
    {
        return $this->container['assigneeId'];
    }

    /**
    * Sets assigneeId
    *
    * @param int|null $assigneeId **参数解释：** 检视意见指派人id。
    *
    * @return $this
    */
    public function setAssigneeId($assigneeId)
    {
        $this->container['assigneeId'] = $assigneeId;
        return $this;
    }

    /**
    * Gets proposerId
    *  **参数解释：** 检视意见检视人id。
    *
    * @return int|null
    */
    public function getProposerId()
    {
        return $this->container['proposerId'];
    }

    /**
    * Sets proposerId
    *
    * @param int|null $proposerId **参数解释：** 检视意见检视人id。
    *
    * @return $this
    */
    public function setProposerId($proposerId)
    {
        $this->container['proposerId'] = $proposerId;
        return $this;
    }

    /**
    * Gets targetBranch
    *  **参数解释：** 目标分支名称。 **取值范围：** 字符串长度不少于1，不超过2000。
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
    * @param string|null $targetBranch **参数解释：** 目标分支名称。 **取值范围：** 字符串长度不少于1，不超过2000。
    *
    * @return $this
    */
    public function setTargetBranch($targetBranch)
    {
        $this->container['targetBranch'] = $targetBranch;
        return $this;
    }

    /**
    * Gets includeReply
    *  **参数解释：** 是否包含回复。 **取值范围：** - true，包含。 - false，不包含。
    *
    * @return bool|null
    */
    public function getIncludeReply()
    {
        return $this->container['includeReply'];
    }

    /**
    * Sets includeReply
    *
    * @param bool|null $includeReply **参数解释：** 是否包含回复。 **取值范围：** - true，包含。 - false，不包含。
    *
    * @return $this
    */
    public function setIncludeReply($includeReply)
    {
        $this->container['includeReply'] = $includeReply;
        return $this;
    }

    /**
    * Gets orderBy
    *  **参数解释：** 排序方式。 **取值范围：** - created，创建时间。 - updated，更新时间。
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
    * @param string|null $orderBy **参数解释：** 排序方式。 **取值范围：** - created，创建时间。 - updated，更新时间。
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
    *  **参数解释：** 检视意见返回排序 - asc 按创建时间正序返回 - desc 按创建时间倒序返回
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
    * @param string|null $sort **参数解释：** 检视意见返回排序 - asc 按创建时间正序返回 - desc 按创建时间倒序返回
    *
    * @return $this
    */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释：** 偏移量，从0开始。
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
    * @param int|null $offset **参数解释：** 偏移量，从0开始。
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
    *  **参数解释：** 返回数量。
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
    * @param int|null $limit **参数解释：** 返回数量。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

