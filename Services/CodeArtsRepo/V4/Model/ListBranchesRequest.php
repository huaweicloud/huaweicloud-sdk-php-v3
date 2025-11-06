<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListBranchesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListBranchesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * branchType  **参数解释：** 分支类型，默认返回全部分支，not_protect，返回非保护分支。 **约束限制：** 不涉及。 **取值范围：** 不涉及。
    * creator  **参数解释：** 创建者，用户ID或者IamId。 **取值范围：** 字符串长度不少于1，不超过100000。
    * sort  **参数解释：** 排序方式 **约束限制：** - name，分支名倒序。 - updated_desc，更新时间倒序。 - updated_asc，更新时间正序。
    * queryView  **参数解释：** 分支类型 **约束限制：** - my_branches，个人分支。 - active，活跃分支。 - stale，过时分支。 - all_branches，所有分支。
    * view  **参数解释：** 结果集属性，根据给定的参数返回不同的结果 **约束限制：** - all，返回分支的所有信息。 - basic，返回分支的基本信息。 - simple，返回分支的简单信息。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'repositoryId' => 'int',
            'branchType' => 'string',
            'creator' => 'string',
            'sort' => 'string',
            'queryView' => 'string',
            'view' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * branchType  **参数解释：** 分支类型，默认返回全部分支，not_protect，返回非保护分支。 **约束限制：** 不涉及。 **取值范围：** 不涉及。
    * creator  **参数解释：** 创建者，用户ID或者IamId。 **取值范围：** 字符串长度不少于1，不超过100000。
    * sort  **参数解释：** 排序方式 **约束限制：** - name，分支名倒序。 - updated_desc，更新时间倒序。 - updated_asc，更新时间正序。
    * queryView  **参数解释：** 分支类型 **约束限制：** - my_branches，个人分支。 - active，活跃分支。 - stale，过时分支。 - all_branches，所有分支。
    * view  **参数解释：** 结果集属性，根据给定的参数返回不同的结果 **约束限制：** - all，返回分支的所有信息。 - basic，返回分支的基本信息。 - simple，返回分支的简单信息。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'repositoryId' => null,
        'branchType' => null,
        'creator' => null,
        'sort' => null,
        'queryView' => null,
        'view' => null,
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
    * branchType  **参数解释：** 分支类型，默认返回全部分支，not_protect，返回非保护分支。 **约束限制：** 不涉及。 **取值范围：** 不涉及。
    * creator  **参数解释：** 创建者，用户ID或者IamId。 **取值范围：** 字符串长度不少于1，不超过100000。
    * sort  **参数解释：** 排序方式 **约束限制：** - name，分支名倒序。 - updated_desc，更新时间倒序。 - updated_asc，更新时间正序。
    * queryView  **参数解释：** 分支类型 **约束限制：** - my_branches，个人分支。 - active，活跃分支。 - stale，过时分支。 - all_branches，所有分支。
    * view  **参数解释：** 结果集属性，根据给定的参数返回不同的结果 **约束限制：** - all，返回分支的所有信息。 - basic，返回分支的基本信息。 - simple，返回分支的简单信息。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'repositoryId' => 'repository_id',
            'branchType' => 'branch_type',
            'creator' => 'creator',
            'sort' => 'sort',
            'queryView' => 'query_view',
            'view' => 'view',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * branchType  **参数解释：** 分支类型，默认返回全部分支，not_protect，返回非保护分支。 **约束限制：** 不涉及。 **取值范围：** 不涉及。
    * creator  **参数解释：** 创建者，用户ID或者IamId。 **取值范围：** 字符串长度不少于1，不超过100000。
    * sort  **参数解释：** 排序方式 **约束限制：** - name，分支名倒序。 - updated_desc，更新时间倒序。 - updated_asc，更新时间正序。
    * queryView  **参数解释：** 分支类型 **约束限制：** - my_branches，个人分支。 - active，活跃分支。 - stale，过时分支。 - all_branches，所有分支。
    * view  **参数解释：** 结果集属性，根据给定的参数返回不同的结果 **约束限制：** - all，返回分支的所有信息。 - basic，返回分支的基本信息。 - simple，返回分支的简单信息。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'repositoryId' => 'setRepositoryId',
            'branchType' => 'setBranchType',
            'creator' => 'setCreator',
            'sort' => 'setSort',
            'queryView' => 'setQueryView',
            'view' => 'setView',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * branchType  **参数解释：** 分支类型，默认返回全部分支，not_protect，返回非保护分支。 **约束限制：** 不涉及。 **取值范围：** 不涉及。
    * creator  **参数解释：** 创建者，用户ID或者IamId。 **取值范围：** 字符串长度不少于1，不超过100000。
    * sort  **参数解释：** 排序方式 **约束限制：** - name，分支名倒序。 - updated_desc，更新时间倒序。 - updated_asc，更新时间正序。
    * queryView  **参数解释：** 分支类型 **约束限制：** - my_branches，个人分支。 - active，活跃分支。 - stale，过时分支。 - all_branches，所有分支。
    * view  **参数解释：** 结果集属性，根据给定的参数返回不同的结果 **约束限制：** - all，返回分支的所有信息。 - basic，返回分支的基本信息。 - simple，返回分支的简单信息。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'repositoryId' => 'getRepositoryId',
            'branchType' => 'getBranchType',
            'creator' => 'getCreator',
            'sort' => 'getSort',
            'queryView' => 'getQueryView',
            'view' => 'getView',
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
    const BRANCH_TYPE_NOT_PROTECT = 'not_protect';
    const SORT_NAME = 'name';
    const SORT_UPDATED_DESC = 'updated_desc';
    const SORT_UPDATED_ASC = 'updated_asc';
    const QUERY_VIEW_MY_BRANCHES = 'my_branches';
    const QUERY_VIEW_ACTIVE = 'active';
    const QUERY_VIEW_STALE = 'stale';
    const QUERY_VIEW_ALL_BRANCHES = 'all_branches';
    const VIEW_SIMPLE = 'simple';
    const VIEW_BASIC = 'basic';
    const VIEW_ALL = 'all';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBranchTypeAllowableValues()
    {
        return [
            self::BRANCH_TYPE_NOT_PROTECT,
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
            self::SORT_NAME,
            self::SORT_UPDATED_DESC,
            self::SORT_UPDATED_ASC,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getQueryViewAllowableValues()
    {
        return [
            self::QUERY_VIEW_MY_BRANCHES,
            self::QUERY_VIEW_ACTIVE,
            self::QUERY_VIEW_STALE,
            self::QUERY_VIEW_ALL_BRANCHES,
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
            self::VIEW_ALL,
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
        $this->container['branchType'] = isset($data['branchType']) ? $data['branchType'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['queryView'] = isset($data['queryView']) ? $data['queryView'] : null;
        $this->container['view'] = isset($data['view']) ? $data['view'] : null;
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
            $allowedValues = $this->getBranchTypeAllowableValues();
                if (!is_null($this->container['branchType']) && !in_array($this->container['branchType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'branchType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['creator']) && (mb_strlen($this->container['creator']) > 100000)) {
                $invalidProperties[] = "invalid value for 'creator', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['creator']) && (mb_strlen($this->container['creator']) < 1)) {
                $invalidProperties[] = "invalid value for 'creator', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getSortAllowableValues();
                if (!is_null($this->container['sort']) && !in_array($this->container['sort'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sort', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getQueryViewAllowableValues();
                if (!is_null($this->container['queryView']) && !in_array($this->container['queryView'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'queryView', must be one of '%s'",
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
    * Gets branchType
    *  **参数解释：** 分支类型，默认返回全部分支，not_protect，返回非保护分支。 **约束限制：** 不涉及。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getBranchType()
    {
        return $this->container['branchType'];
    }

    /**
    * Sets branchType
    *
    * @param string|null $branchType **参数解释：** 分支类型，默认返回全部分支，not_protect，返回非保护分支。 **约束限制：** 不涉及。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setBranchType($branchType)
    {
        $this->container['branchType'] = $branchType;
        return $this;
    }

    /**
    * Gets creator
    *  **参数解释：** 创建者，用户ID或者IamId。 **取值范围：** 字符串长度不少于1，不超过100000。
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
    * @param string|null $creator **参数解释：** 创建者，用户ID或者IamId。 **取值范围：** 字符串长度不少于1，不超过100000。
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets sort
    *  **参数解释：** 排序方式 **约束限制：** - name，分支名倒序。 - updated_desc，更新时间倒序。 - updated_asc，更新时间正序。
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
    * @param string|null $sort **参数解释：** 排序方式 **约束限制：** - name，分支名倒序。 - updated_desc，更新时间倒序。 - updated_asc，更新时间正序。
    *
    * @return $this
    */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;
        return $this;
    }

    /**
    * Gets queryView
    *  **参数解释：** 分支类型 **约束限制：** - my_branches，个人分支。 - active，活跃分支。 - stale，过时分支。 - all_branches，所有分支。
    *
    * @return string|null
    */
    public function getQueryView()
    {
        return $this->container['queryView'];
    }

    /**
    * Sets queryView
    *
    * @param string|null $queryView **参数解释：** 分支类型 **约束限制：** - my_branches，个人分支。 - active，活跃分支。 - stale，过时分支。 - all_branches，所有分支。
    *
    * @return $this
    */
    public function setQueryView($queryView)
    {
        $this->container['queryView'] = $queryView;
        return $this;
    }

    /**
    * Gets view
    *  **参数解释：** 结果集属性，根据给定的参数返回不同的结果 **约束限制：** - all，返回分支的所有信息。 - basic，返回分支的基本信息。 - simple，返回分支的简单信息。
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
    * @param string|null $view **参数解释：** 结果集属性，根据给定的参数返回不同的结果 **约束限制：** - all，返回分支的所有信息。 - basic，返回分支的基本信息。 - simple，返回分支的简单信息。
    *
    * @return $this
    */
    public function setView($view)
    {
        $this->container['view'] = $view;
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

