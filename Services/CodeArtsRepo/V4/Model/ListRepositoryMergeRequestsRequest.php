<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRepositoryMergeRequestsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRepositoryMergeRequestsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * state  **参数解释：** 返回指定状态的合并请求。 **约束限制：** - all，表示所有状态。 - opened，表示开启中状态 - closed，表示已关闭状态 - merged，表示已合并状态
    * orderBy  **参数解释：** 排序方式。 **取值范围：** - created_at，创建时间。 - updated_at，更新时间。
    * sort  **参数解释：** 排序方式。 **约束限制：** - asc，升序。 - desc，降序。
    * authorId  **参数解释：** 返回由指定ID用户创建的合并请求。 多个ID以逗号','分隔，返回满足条件的合并请求并集。
    * sourceBranch  **参数解释：** 返回指定源分支的合并请求。
    * targetBranch  **参数解释：** 返回指定目标分支的合并请求。
    * search  **参数解释：** 合并请求关键字搜索。 返回标题或者描述包含对应关键字的合并请求。
    * sourceRepositoryId  **参数解释：** 查询指定源仓库的数据。
    * onlyCount  **参数解释：** 是否仅返回合并请求计数。 **取值范围：** - true，仅返回合并请求计数。 - false，返回合并请求详细信息。
    * labels  **参数解释：** 查询包含指定labels的合并请求。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'repositoryId' => 'int',
            'offset' => 'int',
            'limit' => 'int',
            'state' => 'string',
            'orderBy' => 'string',
            'sort' => 'string',
            'authorId' => 'string',
            'sourceBranch' => 'string',
            'targetBranch' => 'string',
            'search' => 'string',
            'sourceRepositoryId' => 'int',
            'onlyCount' => 'bool',
            'labels' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * state  **参数解释：** 返回指定状态的合并请求。 **约束限制：** - all，表示所有状态。 - opened，表示开启中状态 - closed，表示已关闭状态 - merged，表示已合并状态
    * orderBy  **参数解释：** 排序方式。 **取值范围：** - created_at，创建时间。 - updated_at，更新时间。
    * sort  **参数解释：** 排序方式。 **约束限制：** - asc，升序。 - desc，降序。
    * authorId  **参数解释：** 返回由指定ID用户创建的合并请求。 多个ID以逗号','分隔，返回满足条件的合并请求并集。
    * sourceBranch  **参数解释：** 返回指定源分支的合并请求。
    * targetBranch  **参数解释：** 返回指定目标分支的合并请求。
    * search  **参数解释：** 合并请求关键字搜索。 返回标题或者描述包含对应关键字的合并请求。
    * sourceRepositoryId  **参数解释：** 查询指定源仓库的数据。
    * onlyCount  **参数解释：** 是否仅返回合并请求计数。 **取值范围：** - true，仅返回合并请求计数。 - false，返回合并请求详细信息。
    * labels  **参数解释：** 查询包含指定labels的合并请求。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'repositoryId' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'state' => null,
        'orderBy' => null,
        'sort' => null,
        'authorId' => null,
        'sourceBranch' => null,
        'targetBranch' => null,
        'search' => null,
        'sourceRepositoryId' => 'int32',
        'onlyCount' => null,
        'labels' => null
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
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * state  **参数解释：** 返回指定状态的合并请求。 **约束限制：** - all，表示所有状态。 - opened，表示开启中状态 - closed，表示已关闭状态 - merged，表示已合并状态
    * orderBy  **参数解释：** 排序方式。 **取值范围：** - created_at，创建时间。 - updated_at，更新时间。
    * sort  **参数解释：** 排序方式。 **约束限制：** - asc，升序。 - desc，降序。
    * authorId  **参数解释：** 返回由指定ID用户创建的合并请求。 多个ID以逗号','分隔，返回满足条件的合并请求并集。
    * sourceBranch  **参数解释：** 返回指定源分支的合并请求。
    * targetBranch  **参数解释：** 返回指定目标分支的合并请求。
    * search  **参数解释：** 合并请求关键字搜索。 返回标题或者描述包含对应关键字的合并请求。
    * sourceRepositoryId  **参数解释：** 查询指定源仓库的数据。
    * onlyCount  **参数解释：** 是否仅返回合并请求计数。 **取值范围：** - true，仅返回合并请求计数。 - false，返回合并请求详细信息。
    * labels  **参数解释：** 查询包含指定labels的合并请求。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'repositoryId' => 'repository_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'state' => 'state',
            'orderBy' => 'order_by',
            'sort' => 'sort',
            'authorId' => 'author_id',
            'sourceBranch' => 'source_branch',
            'targetBranch' => 'target_branch',
            'search' => 'search',
            'sourceRepositoryId' => 'source_repository_id',
            'onlyCount' => 'only_count',
            'labels' => 'labels'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * state  **参数解释：** 返回指定状态的合并请求。 **约束限制：** - all，表示所有状态。 - opened，表示开启中状态 - closed，表示已关闭状态 - merged，表示已合并状态
    * orderBy  **参数解释：** 排序方式。 **取值范围：** - created_at，创建时间。 - updated_at，更新时间。
    * sort  **参数解释：** 排序方式。 **约束限制：** - asc，升序。 - desc，降序。
    * authorId  **参数解释：** 返回由指定ID用户创建的合并请求。 多个ID以逗号','分隔，返回满足条件的合并请求并集。
    * sourceBranch  **参数解释：** 返回指定源分支的合并请求。
    * targetBranch  **参数解释：** 返回指定目标分支的合并请求。
    * search  **参数解释：** 合并请求关键字搜索。 返回标题或者描述包含对应关键字的合并请求。
    * sourceRepositoryId  **参数解释：** 查询指定源仓库的数据。
    * onlyCount  **参数解释：** 是否仅返回合并请求计数。 **取值范围：** - true，仅返回合并请求计数。 - false，返回合并请求详细信息。
    * labels  **参数解释：** 查询包含指定labels的合并请求。
    *
    * @var string[]
    */
    protected static $setters = [
            'repositoryId' => 'setRepositoryId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'state' => 'setState',
            'orderBy' => 'setOrderBy',
            'sort' => 'setSort',
            'authorId' => 'setAuthorId',
            'sourceBranch' => 'setSourceBranch',
            'targetBranch' => 'setTargetBranch',
            'search' => 'setSearch',
            'sourceRepositoryId' => 'setSourceRepositoryId',
            'onlyCount' => 'setOnlyCount',
            'labels' => 'setLabels'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * state  **参数解释：** 返回指定状态的合并请求。 **约束限制：** - all，表示所有状态。 - opened，表示开启中状态 - closed，表示已关闭状态 - merged，表示已合并状态
    * orderBy  **参数解释：** 排序方式。 **取值范围：** - created_at，创建时间。 - updated_at，更新时间。
    * sort  **参数解释：** 排序方式。 **约束限制：** - asc，升序。 - desc，降序。
    * authorId  **参数解释：** 返回由指定ID用户创建的合并请求。 多个ID以逗号','分隔，返回满足条件的合并请求并集。
    * sourceBranch  **参数解释：** 返回指定源分支的合并请求。
    * targetBranch  **参数解释：** 返回指定目标分支的合并请求。
    * search  **参数解释：** 合并请求关键字搜索。 返回标题或者描述包含对应关键字的合并请求。
    * sourceRepositoryId  **参数解释：** 查询指定源仓库的数据。
    * onlyCount  **参数解释：** 是否仅返回合并请求计数。 **取值范围：** - true，仅返回合并请求计数。 - false，返回合并请求详细信息。
    * labels  **参数解释：** 查询包含指定labels的合并请求。
    *
    * @var string[]
    */
    protected static $getters = [
            'repositoryId' => 'getRepositoryId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'state' => 'getState',
            'orderBy' => 'getOrderBy',
            'sort' => 'getSort',
            'authorId' => 'getAuthorId',
            'sourceBranch' => 'getSourceBranch',
            'targetBranch' => 'getTargetBranch',
            'search' => 'getSearch',
            'sourceRepositoryId' => 'getSourceRepositoryId',
            'onlyCount' => 'getOnlyCount',
            'labels' => 'getLabels'
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
    const STATE_ALL = 'all';
    const STATE_OPENED = 'opened';
    const STATE_CLOSED = 'closed';
    const STATE_MERGED = 'merged';
    const ORDER_BY_CREATED_AT = 'created_at';
    const ORDER_BY_UPDATED_AT = 'updated_at';
    const SORT_ASC = 'asc';
    const SORT_DESC = 'desc';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_ALL,
            self::STATE_OPENED,
            self::STATE_CLOSED,
            self::STATE_MERGED,
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['orderBy'] = isset($data['orderBy']) ? $data['orderBy'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['authorId'] = isset($data['authorId']) ? $data['authorId'] : null;
        $this->container['sourceBranch'] = isset($data['sourceBranch']) ? $data['sourceBranch'] : null;
        $this->container['targetBranch'] = isset($data['targetBranch']) ? $data['targetBranch'] : null;
        $this->container['search'] = isset($data['search']) ? $data['search'] : null;
        $this->container['sourceRepositoryId'] = isset($data['sourceRepositoryId']) ? $data['sourceRepositoryId'] : null;
        $this->container['onlyCount'] = isset($data['onlyCount']) ? $data['onlyCount'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
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

            if (!is_null($this->container['authorId']) && (mb_strlen($this->container['authorId']) > 100000)) {
                $invalidProperties[] = "invalid value for 'authorId', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['authorId']) && (mb_strlen($this->container['authorId']) < 1)) {
                $invalidProperties[] = "invalid value for 'authorId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sourceBranch']) && (mb_strlen($this->container['sourceBranch']) > 100000)) {
                $invalidProperties[] = "invalid value for 'sourceBranch', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['sourceBranch']) && (mb_strlen($this->container['sourceBranch']) < 1)) {
                $invalidProperties[] = "invalid value for 'sourceBranch', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['targetBranch']) && (mb_strlen($this->container['targetBranch']) > 100000)) {
                $invalidProperties[] = "invalid value for 'targetBranch', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['targetBranch']) && (mb_strlen($this->container['targetBranch']) < 1)) {
                $invalidProperties[] = "invalid value for 'targetBranch', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['search']) && (mb_strlen($this->container['search']) > 100000)) {
                $invalidProperties[] = "invalid value for 'search', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['search']) && (mb_strlen($this->container['search']) < 1)) {
                $invalidProperties[] = "invalid value for 'search', the character length must be bigger than or equal to 1.";
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
    * Gets state
    *  **参数解释：** 返回指定状态的合并请求。 **约束限制：** - all，表示所有状态。 - opened，表示开启中状态 - closed，表示已关闭状态 - merged，表示已合并状态
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
    * @param string|null $state **参数解释：** 返回指定状态的合并请求。 **约束限制：** - all，表示所有状态。 - opened，表示开启中状态 - closed，表示已关闭状态 - merged，表示已合并状态
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
    *  **参数解释：** 排序方式。 **取值范围：** - created_at，创建时间。 - updated_at，更新时间。
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
    * @param string|null $orderBy **参数解释：** 排序方式。 **取值范围：** - created_at，创建时间。 - updated_at，更新时间。
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
    *  **参数解释：** 排序方式。 **约束限制：** - asc，升序。 - desc，降序。
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
    * @param string|null $sort **参数解释：** 排序方式。 **约束限制：** - asc，升序。 - desc，降序。
    *
    * @return $this
    */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;
        return $this;
    }

    /**
    * Gets authorId
    *  **参数解释：** 返回由指定ID用户创建的合并请求。 多个ID以逗号','分隔，返回满足条件的合并请求并集。
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
    * @param string|null $authorId **参数解释：** 返回由指定ID用户创建的合并请求。 多个ID以逗号','分隔，返回满足条件的合并请求并集。
    *
    * @return $this
    */
    public function setAuthorId($authorId)
    {
        $this->container['authorId'] = $authorId;
        return $this;
    }

    /**
    * Gets sourceBranch
    *  **参数解释：** 返回指定源分支的合并请求。
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
    * @param string|null $sourceBranch **参数解释：** 返回指定源分支的合并请求。
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
    *  **参数解释：** 返回指定目标分支的合并请求。
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
    * @param string|null $targetBranch **参数解释：** 返回指定目标分支的合并请求。
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
    *  **参数解释：** 合并请求关键字搜索。 返回标题或者描述包含对应关键字的合并请求。
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
    * @param string|null $search **参数解释：** 合并请求关键字搜索。 返回标题或者描述包含对应关键字的合并请求。
    *
    * @return $this
    */
    public function setSearch($search)
    {
        $this->container['search'] = $search;
        return $this;
    }

    /**
    * Gets sourceRepositoryId
    *  **参数解释：** 查询指定源仓库的数据。
    *
    * @return int|null
    */
    public function getSourceRepositoryId()
    {
        return $this->container['sourceRepositoryId'];
    }

    /**
    * Sets sourceRepositoryId
    *
    * @param int|null $sourceRepositoryId **参数解释：** 查询指定源仓库的数据。
    *
    * @return $this
    */
    public function setSourceRepositoryId($sourceRepositoryId)
    {
        $this->container['sourceRepositoryId'] = $sourceRepositoryId;
        return $this;
    }

    /**
    * Gets onlyCount
    *  **参数解释：** 是否仅返回合并请求计数。 **取值范围：** - true，仅返回合并请求计数。 - false，返回合并请求详细信息。
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
    * @param bool|null $onlyCount **参数解释：** 是否仅返回合并请求计数。 **取值范围：** - true，仅返回合并请求计数。 - false，返回合并请求详细信息。
    *
    * @return $this
    */
    public function setOnlyCount($onlyCount)
    {
        $this->container['onlyCount'] = $onlyCount;
        return $this;
    }

    /**
    * Gets labels
    *  **参数解释：** 查询包含指定labels的合并请求。
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
    * @param string|null $labels **参数解释：** 查询包含指定labels的合并请求。
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
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

