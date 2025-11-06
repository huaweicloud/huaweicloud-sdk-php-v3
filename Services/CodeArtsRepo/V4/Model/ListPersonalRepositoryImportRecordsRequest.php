<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPersonalRepositoryImportRecordsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPersonalRepositoryImportRecordsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * state  **参数解释：** 状态 **取值范围：** - finished, 导入成功 - fail, 导入失败 - importing, 导入中
    * sourceType  **参数解释：** 导入来源 **取值范围：** - gitee - self_managed_gitlab - gitlab - github - git - svn - coding - bitbucket - gerrit - codeup
    * createdAfter  **参数解释：** 筛选在该时间之后导入的
    * createdBefore  **参数解释：** 筛选在该时间之前导入的
    * finishedAfter  **参数解释：** 筛选在该时间之后导入完成的
    * finishedBefore  **参数解释：** 筛选在该时间之前导入完成的
    * search  **参数解释：** 搜索仓库
    * orderBy  **参数解释：** 排序方式。 **取值范围：** - created_at, 导入时间 - source_repo_name, 源仓库路径 - size, 源仓库容量
    * sort  **参数解释：** 返回排序 - asc 正序返回 - desc 倒序返回
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'offset' => 'int',
            'limit' => 'int',
            'state' => 'string',
            'sourceType' => 'string',
            'createdAfter' => '\DateTime',
            'createdBefore' => '\DateTime',
            'finishedAfter' => '\DateTime',
            'finishedBefore' => '\DateTime',
            'search' => 'string',
            'orderBy' => 'string',
            'sort' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * state  **参数解释：** 状态 **取值范围：** - finished, 导入成功 - fail, 导入失败 - importing, 导入中
    * sourceType  **参数解释：** 导入来源 **取值范围：** - gitee - self_managed_gitlab - gitlab - github - git - svn - coding - bitbucket - gerrit - codeup
    * createdAfter  **参数解释：** 筛选在该时间之后导入的
    * createdBefore  **参数解释：** 筛选在该时间之前导入的
    * finishedAfter  **参数解释：** 筛选在该时间之后导入完成的
    * finishedBefore  **参数解释：** 筛选在该时间之前导入完成的
    * search  **参数解释：** 搜索仓库
    * orderBy  **参数解释：** 排序方式。 **取值范围：** - created_at, 导入时间 - source_repo_name, 源仓库路径 - size, 源仓库容量
    * sort  **参数解释：** 返回排序 - asc 正序返回 - desc 倒序返回
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'offset' => 'int32',
        'limit' => 'int32',
        'state' => null,
        'sourceType' => null,
        'createdAfter' => 'date-time',
        'createdBefore' => 'date-time',
        'finishedAfter' => 'date-time',
        'finishedBefore' => 'date-time',
        'search' => null,
        'orderBy' => null,
        'sort' => null
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
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * state  **参数解释：** 状态 **取值范围：** - finished, 导入成功 - fail, 导入失败 - importing, 导入中
    * sourceType  **参数解释：** 导入来源 **取值范围：** - gitee - self_managed_gitlab - gitlab - github - git - svn - coding - bitbucket - gerrit - codeup
    * createdAfter  **参数解释：** 筛选在该时间之后导入的
    * createdBefore  **参数解释：** 筛选在该时间之前导入的
    * finishedAfter  **参数解释：** 筛选在该时间之后导入完成的
    * finishedBefore  **参数解释：** 筛选在该时间之前导入完成的
    * search  **参数解释：** 搜索仓库
    * orderBy  **参数解释：** 排序方式。 **取值范围：** - created_at, 导入时间 - source_repo_name, 源仓库路径 - size, 源仓库容量
    * sort  **参数解释：** 返回排序 - asc 正序返回 - desc 倒序返回
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'offset' => 'offset',
            'limit' => 'limit',
            'state' => 'state',
            'sourceType' => 'source_type',
            'createdAfter' => 'created_after',
            'createdBefore' => 'created_before',
            'finishedAfter' => 'finished_after',
            'finishedBefore' => 'finished_before',
            'search' => 'search',
            'orderBy' => 'order_by',
            'sort' => 'sort'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * state  **参数解释：** 状态 **取值范围：** - finished, 导入成功 - fail, 导入失败 - importing, 导入中
    * sourceType  **参数解释：** 导入来源 **取值范围：** - gitee - self_managed_gitlab - gitlab - github - git - svn - coding - bitbucket - gerrit - codeup
    * createdAfter  **参数解释：** 筛选在该时间之后导入的
    * createdBefore  **参数解释：** 筛选在该时间之前导入的
    * finishedAfter  **参数解释：** 筛选在该时间之后导入完成的
    * finishedBefore  **参数解释：** 筛选在该时间之前导入完成的
    * search  **参数解释：** 搜索仓库
    * orderBy  **参数解释：** 排序方式。 **取值范围：** - created_at, 导入时间 - source_repo_name, 源仓库路径 - size, 源仓库容量
    * sort  **参数解释：** 返回排序 - asc 正序返回 - desc 倒序返回
    *
    * @var string[]
    */
    protected static $setters = [
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'state' => 'setState',
            'sourceType' => 'setSourceType',
            'createdAfter' => 'setCreatedAfter',
            'createdBefore' => 'setCreatedBefore',
            'finishedAfter' => 'setFinishedAfter',
            'finishedBefore' => 'setFinishedBefore',
            'search' => 'setSearch',
            'orderBy' => 'setOrderBy',
            'sort' => 'setSort'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * state  **参数解释：** 状态 **取值范围：** - finished, 导入成功 - fail, 导入失败 - importing, 导入中
    * sourceType  **参数解释：** 导入来源 **取值范围：** - gitee - self_managed_gitlab - gitlab - github - git - svn - coding - bitbucket - gerrit - codeup
    * createdAfter  **参数解释：** 筛选在该时间之后导入的
    * createdBefore  **参数解释：** 筛选在该时间之前导入的
    * finishedAfter  **参数解释：** 筛选在该时间之后导入完成的
    * finishedBefore  **参数解释：** 筛选在该时间之前导入完成的
    * search  **参数解释：** 搜索仓库
    * orderBy  **参数解释：** 排序方式。 **取值范围：** - created_at, 导入时间 - source_repo_name, 源仓库路径 - size, 源仓库容量
    * sort  **参数解释：** 返回排序 - asc 正序返回 - desc 倒序返回
    *
    * @var string[]
    */
    protected static $getters = [
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'state' => 'getState',
            'sourceType' => 'getSourceType',
            'createdAfter' => 'getCreatedAfter',
            'createdBefore' => 'getCreatedBefore',
            'finishedAfter' => 'getFinishedAfter',
            'finishedBefore' => 'getFinishedBefore',
            'search' => 'getSearch',
            'orderBy' => 'getOrderBy',
            'sort' => 'getSort'
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
    const STATE_FINISHED = 'finished';
    const STATE_FAIL = 'fail';
    const STATE_IMPORTING = 'importing';
    const SOURCE_TYPE_GITEE = 'gitee';
    const SOURCE_TYPE_SELF_MANAGED_GITLAB = 'self_managed_gitlab';
    const SOURCE_TYPE_GITLAB = 'gitlab';
    const SOURCE_TYPE_GITHUB = 'github';
    const SOURCE_TYPE_GIT = 'git';
    const SOURCE_TYPE_SVN = 'svn';
    const SOURCE_TYPE_CODING = 'coding';
    const SOURCE_TYPE_BITBUCKET = 'bitbucket';
    const SOURCE_TYPE_GERRIT = 'gerrit';
    const SOURCE_TYPE_CODEUP = 'codeup';
    const ORDER_BY_CREATED_AT = 'created_at';
    const ORDER_BY_SOURCE_REPO_NAME = 'source_repo_name';
    const ORDER_BY_SIZE = 'size';
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
            self::STATE_FINISHED,
            self::STATE_FAIL,
            self::STATE_IMPORTING,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSourceTypeAllowableValues()
    {
        return [
            self::SOURCE_TYPE_GITEE,
            self::SOURCE_TYPE_SELF_MANAGED_GITLAB,
            self::SOURCE_TYPE_GITLAB,
            self::SOURCE_TYPE_GITHUB,
            self::SOURCE_TYPE_GIT,
            self::SOURCE_TYPE_SVN,
            self::SOURCE_TYPE_CODING,
            self::SOURCE_TYPE_BITBUCKET,
            self::SOURCE_TYPE_GERRIT,
            self::SOURCE_TYPE_CODEUP,
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
            self::ORDER_BY_SOURCE_REPO_NAME,
            self::ORDER_BY_SIZE,
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['createdAfter'] = isset($data['createdAfter']) ? $data['createdAfter'] : null;
        $this->container['createdBefore'] = isset($data['createdBefore']) ? $data['createdBefore'] : null;
        $this->container['finishedAfter'] = isset($data['finishedAfter']) ? $data['finishedAfter'] : null;
        $this->container['finishedBefore'] = isset($data['finishedBefore']) ? $data['finishedBefore'] : null;
        $this->container['search'] = isset($data['search']) ? $data['search'] : null;
        $this->container['orderBy'] = isset($data['orderBy']) ? $data['orderBy'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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

            $allowedValues = $this->getSourceTypeAllowableValues();
                if (!is_null($this->container['sourceType']) && !in_array($this->container['sourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sourceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['search']) && (mb_strlen($this->container['search']) > 512)) {
                $invalidProperties[] = "invalid value for 'search', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['search']) && (mb_strlen($this->container['search']) < 1)) {
                $invalidProperties[] = "invalid value for 'search', the character length must be bigger than or equal to 1.";
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
    *  **参数解释：** 状态 **取值范围：** - finished, 导入成功 - fail, 导入失败 - importing, 导入中
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
    * @param string|null $state **参数解释：** 状态 **取值范围：** - finished, 导入成功 - fail, 导入失败 - importing, 导入中
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets sourceType
    *  **参数解释：** 导入来源 **取值范围：** - gitee - self_managed_gitlab - gitlab - github - git - svn - coding - bitbucket - gerrit - codeup
    *
    * @return string|null
    */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
    * Sets sourceType
    *
    * @param string|null $sourceType **参数解释：** 导入来源 **取值范围：** - gitee - self_managed_gitlab - gitlab - github - git - svn - coding - bitbucket - gerrit - codeup
    *
    * @return $this
    */
    public function setSourceType($sourceType)
    {
        $this->container['sourceType'] = $sourceType;
        return $this;
    }

    /**
    * Gets createdAfter
    *  **参数解释：** 筛选在该时间之后导入的
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
    * @param \DateTime|null $createdAfter **参数解释：** 筛选在该时间之后导入的
    *
    * @return $this
    */
    public function setCreatedAfter($createdAfter)
    {
        $this->container['createdAfter'] = $createdAfter;
        return $this;
    }

    /**
    * Gets createdBefore
    *  **参数解释：** 筛选在该时间之前导入的
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
    * @param \DateTime|null $createdBefore **参数解释：** 筛选在该时间之前导入的
    *
    * @return $this
    */
    public function setCreatedBefore($createdBefore)
    {
        $this->container['createdBefore'] = $createdBefore;
        return $this;
    }

    /**
    * Gets finishedAfter
    *  **参数解释：** 筛选在该时间之后导入完成的
    *
    * @return \DateTime|null
    */
    public function getFinishedAfter()
    {
        return $this->container['finishedAfter'];
    }

    /**
    * Sets finishedAfter
    *
    * @param \DateTime|null $finishedAfter **参数解释：** 筛选在该时间之后导入完成的
    *
    * @return $this
    */
    public function setFinishedAfter($finishedAfter)
    {
        $this->container['finishedAfter'] = $finishedAfter;
        return $this;
    }

    /**
    * Gets finishedBefore
    *  **参数解释：** 筛选在该时间之前导入完成的
    *
    * @return \DateTime|null
    */
    public function getFinishedBefore()
    {
        return $this->container['finishedBefore'];
    }

    /**
    * Sets finishedBefore
    *
    * @param \DateTime|null $finishedBefore **参数解释：** 筛选在该时间之前导入完成的
    *
    * @return $this
    */
    public function setFinishedBefore($finishedBefore)
    {
        $this->container['finishedBefore'] = $finishedBefore;
        return $this;
    }

    /**
    * Gets search
    *  **参数解释：** 搜索仓库
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
    * @param string|null $search **参数解释：** 搜索仓库
    *
    * @return $this
    */
    public function setSearch($search)
    {
        $this->container['search'] = $search;
        return $this;
    }

    /**
    * Gets orderBy
    *  **参数解释：** 排序方式。 **取值范围：** - created_at, 导入时间 - source_repo_name, 源仓库路径 - size, 源仓库容量
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
    * @param string|null $orderBy **参数解释：** 排序方式。 **取值范围：** - created_at, 导入时间 - source_repo_name, 源仓库路径 - size, 源仓库容量
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
    *  **参数解释：** 返回排序 - asc 正序返回 - desc 倒序返回
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
    * @param string|null $sort **参数解释：** 返回排序 - asc 正序返回 - desc 倒序返回
    *
    * @return $this
    */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;
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

