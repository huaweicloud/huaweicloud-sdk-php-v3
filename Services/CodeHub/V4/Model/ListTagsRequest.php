<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTagsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTagsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * creator  **参数解释：** 创建者，用户ID或者IamId。 **取值范围：** 字符串长度不少于1，不超过100000。
    * sort  **参数解释：** 排序方式。 **约束限制：** - asc，升序。 - desc，降序。
    * search  **参数解释：** 搜索条件，按标签名称搜索。 **取值范围：** 字符串长度不少于1，不超过2000。
    * orderBy  **参数解释：** 排序方式。 **取值范围：** - name，名字。 - created，创建时间。 - updated，更新时间。
    * view  **参数解释：** 结果集展示内容。 **取值范围：** - detail，返回标签的所有信息。 - basic，返回标签的基本信息。 - simple，返回标签的简单信息。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'repositoryId' => 'int',
            'creator' => 'string',
            'sort' => 'string',
            'search' => 'string',
            'orderBy' => 'string',
            'view' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * creator  **参数解释：** 创建者，用户ID或者IamId。 **取值范围：** 字符串长度不少于1，不超过100000。
    * sort  **参数解释：** 排序方式。 **约束限制：** - asc，升序。 - desc，降序。
    * search  **参数解释：** 搜索条件，按标签名称搜索。 **取值范围：** 字符串长度不少于1，不超过2000。
    * orderBy  **参数解释：** 排序方式。 **取值范围：** - name，名字。 - created，创建时间。 - updated，更新时间。
    * view  **参数解释：** 结果集展示内容。 **取值范围：** - detail，返回标签的所有信息。 - basic，返回标签的基本信息。 - simple，返回标签的简单信息。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'repositoryId' => null,
        'creator' => null,
        'sort' => null,
        'search' => null,
        'orderBy' => null,
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
    * creator  **参数解释：** 创建者，用户ID或者IamId。 **取值范围：** 字符串长度不少于1，不超过100000。
    * sort  **参数解释：** 排序方式。 **约束限制：** - asc，升序。 - desc，降序。
    * search  **参数解释：** 搜索条件，按标签名称搜索。 **取值范围：** 字符串长度不少于1，不超过2000。
    * orderBy  **参数解释：** 排序方式。 **取值范围：** - name，名字。 - created，创建时间。 - updated，更新时间。
    * view  **参数解释：** 结果集展示内容。 **取值范围：** - detail，返回标签的所有信息。 - basic，返回标签的基本信息。 - simple，返回标签的简单信息。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'repositoryId' => 'repository_id',
            'creator' => 'creator',
            'sort' => 'sort',
            'search' => 'search',
            'orderBy' => 'order_by',
            'view' => 'view',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * creator  **参数解释：** 创建者，用户ID或者IamId。 **取值范围：** 字符串长度不少于1，不超过100000。
    * sort  **参数解释：** 排序方式。 **约束限制：** - asc，升序。 - desc，降序。
    * search  **参数解释：** 搜索条件，按标签名称搜索。 **取值范围：** 字符串长度不少于1，不超过2000。
    * orderBy  **参数解释：** 排序方式。 **取值范围：** - name，名字。 - created，创建时间。 - updated，更新时间。
    * view  **参数解释：** 结果集展示内容。 **取值范围：** - detail，返回标签的所有信息。 - basic，返回标签的基本信息。 - simple，返回标签的简单信息。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'repositoryId' => 'setRepositoryId',
            'creator' => 'setCreator',
            'sort' => 'setSort',
            'search' => 'setSearch',
            'orderBy' => 'setOrderBy',
            'view' => 'setView',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * creator  **参数解释：** 创建者，用户ID或者IamId。 **取值范围：** 字符串长度不少于1，不超过100000。
    * sort  **参数解释：** 排序方式。 **约束限制：** - asc，升序。 - desc，降序。
    * search  **参数解释：** 搜索条件，按标签名称搜索。 **取值范围：** 字符串长度不少于1，不超过2000。
    * orderBy  **参数解释：** 排序方式。 **取值范围：** - name，名字。 - created，创建时间。 - updated，更新时间。
    * view  **参数解释：** 结果集展示内容。 **取值范围：** - detail，返回标签的所有信息。 - basic，返回标签的基本信息。 - simple，返回标签的简单信息。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'repositoryId' => 'getRepositoryId',
            'creator' => 'getCreator',
            'sort' => 'getSort',
            'search' => 'getSearch',
            'orderBy' => 'getOrderBy',
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
    const SORT_ASC = 'asc';
    const SORT_DESC = 'desc';
    const ORDER_BY_NAME = 'name';
    const ORDER_BY_UPDATED = 'updated';
    const ORDER_BY_CREATED = 'created';
    const VIEW_SIMPLE = 'simple';
    const VIEW_BASIC = 'basic';
    const VIEW_DETAIL = 'detail';
    

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
    public function getOrderByAllowableValues()
    {
        return [
            self::ORDER_BY_NAME,
            self::ORDER_BY_UPDATED,
            self::ORDER_BY_CREATED,
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
            self::VIEW_DETAIL,
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
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['search'] = isset($data['search']) ? $data['search'] : null;
        $this->container['orderBy'] = isset($data['orderBy']) ? $data['orderBy'] : null;
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

            $allowedValues = $this->getOrderByAllowableValues();
                if (!is_null($this->container['orderBy']) && !in_array($this->container['orderBy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'orderBy', must be one of '%s'",
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
    * Gets search
    *  **参数解释：** 搜索条件，按标签名称搜索。 **取值范围：** 字符串长度不少于1，不超过2000。
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
    * @param string|null $search **参数解释：** 搜索条件，按标签名称搜索。 **取值范围：** 字符串长度不少于1，不超过2000。
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
    *  **参数解释：** 排序方式。 **取值范围：** - name，名字。 - created，创建时间。 - updated，更新时间。
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
    * @param string|null $orderBy **参数解释：** 排序方式。 **取值范围：** - name，名字。 - created，创建时间。 - updated，更新时间。
    *
    * @return $this
    */
    public function setOrderBy($orderBy)
    {
        $this->container['orderBy'] = $orderBy;
        return $this;
    }

    /**
    * Gets view
    *  **参数解释：** 结果集展示内容。 **取值范围：** - detail，返回标签的所有信息。 - basic，返回标签的基本信息。 - simple，返回标签的简单信息。
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
    * @param string|null $view **参数解释：** 结果集展示内容。 **取值范围：** - detail，返回标签的所有信息。 - basic，返回标签的基本信息。 - simple，返回标签的简单信息。
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

