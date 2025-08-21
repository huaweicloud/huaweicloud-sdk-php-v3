<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRepositoryContributorsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRepositoryContributorsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * orderBy  **参数解释：** 排序方式。 **取值范围：** - name，名字。 - email，邮箱。 - commits，提交数量。
    * sort  **参数解释：** 返回排序 - asc 按提交数量正序返回 - desc 按提交数量倒序返回
    * refName  **参数解释：** 分支或者tag名称。 **约束限制：** 不支持以 - . refs/heads/ refs/remotes/ 开头，不支持空格 [ \\ < ~ ^ : ? * ! ( ) ' \" | 等特殊字符，不支持以. / .lock结尾。 **取值范围：** 字符串长度不少于1，不超过200。 **默认取值：** 仓库默认分支。
    * skipMerge  **参数解释：** 是否跳过合并。 **约束限制：** 不涉及。 **取值范围：** - false, 跳过合并 - true, 不跳过合并
    * author  **参数解释：** 提交者。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'repositoryId' => 'int',
            'offset' => 'int',
            'limit' => 'int',
            'orderBy' => 'string',
            'sort' => 'string',
            'refName' => 'string',
            'skipMerge' => 'bool',
            'author' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * orderBy  **参数解释：** 排序方式。 **取值范围：** - name，名字。 - email，邮箱。 - commits，提交数量。
    * sort  **参数解释：** 返回排序 - asc 按提交数量正序返回 - desc 按提交数量倒序返回
    * refName  **参数解释：** 分支或者tag名称。 **约束限制：** 不支持以 - . refs/heads/ refs/remotes/ 开头，不支持空格 [ \\ < ~ ^ : ? * ! ( ) ' \" | 等特殊字符，不支持以. / .lock结尾。 **取值范围：** 字符串长度不少于1，不超过200。 **默认取值：** 仓库默认分支。
    * skipMerge  **参数解释：** 是否跳过合并。 **约束限制：** 不涉及。 **取值范围：** - false, 跳过合并 - true, 不跳过合并
    * author  **参数解释：** 提交者。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'repositoryId' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'orderBy' => null,
        'sort' => null,
        'refName' => null,
        'skipMerge' => null,
        'author' => null
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
    * orderBy  **参数解释：** 排序方式。 **取值范围：** - name，名字。 - email，邮箱。 - commits，提交数量。
    * sort  **参数解释：** 返回排序 - asc 按提交数量正序返回 - desc 按提交数量倒序返回
    * refName  **参数解释：** 分支或者tag名称。 **约束限制：** 不支持以 - . refs/heads/ refs/remotes/ 开头，不支持空格 [ \\ < ~ ^ : ? * ! ( ) ' \" | 等特殊字符，不支持以. / .lock结尾。 **取值范围：** 字符串长度不少于1，不超过200。 **默认取值：** 仓库默认分支。
    * skipMerge  **参数解释：** 是否跳过合并。 **约束限制：** 不涉及。 **取值范围：** - false, 跳过合并 - true, 不跳过合并
    * author  **参数解释：** 提交者。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'repositoryId' => 'repository_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'orderBy' => 'order_by',
            'sort' => 'sort',
            'refName' => 'ref_name',
            'skipMerge' => 'skip_merge',
            'author' => 'author'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * orderBy  **参数解释：** 排序方式。 **取值范围：** - name，名字。 - email，邮箱。 - commits，提交数量。
    * sort  **参数解释：** 返回排序 - asc 按提交数量正序返回 - desc 按提交数量倒序返回
    * refName  **参数解释：** 分支或者tag名称。 **约束限制：** 不支持以 - . refs/heads/ refs/remotes/ 开头，不支持空格 [ \\ < ~ ^ : ? * ! ( ) ' \" | 等特殊字符，不支持以. / .lock结尾。 **取值范围：** 字符串长度不少于1，不超过200。 **默认取值：** 仓库默认分支。
    * skipMerge  **参数解释：** 是否跳过合并。 **约束限制：** 不涉及。 **取值范围：** - false, 跳过合并 - true, 不跳过合并
    * author  **参数解释：** 提交者。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'repositoryId' => 'setRepositoryId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'orderBy' => 'setOrderBy',
            'sort' => 'setSort',
            'refName' => 'setRefName',
            'skipMerge' => 'setSkipMerge',
            'author' => 'setAuthor'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * orderBy  **参数解释：** 排序方式。 **取值范围：** - name，名字。 - email，邮箱。 - commits，提交数量。
    * sort  **参数解释：** 返回排序 - asc 按提交数量正序返回 - desc 按提交数量倒序返回
    * refName  **参数解释：** 分支或者tag名称。 **约束限制：** 不支持以 - . refs/heads/ refs/remotes/ 开头，不支持空格 [ \\ < ~ ^ : ? * ! ( ) ' \" | 等特殊字符，不支持以. / .lock结尾。 **取值范围：** 字符串长度不少于1，不超过200。 **默认取值：** 仓库默认分支。
    * skipMerge  **参数解释：** 是否跳过合并。 **约束限制：** 不涉及。 **取值范围：** - false, 跳过合并 - true, 不跳过合并
    * author  **参数解释：** 提交者。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'repositoryId' => 'getRepositoryId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'orderBy' => 'getOrderBy',
            'sort' => 'getSort',
            'refName' => 'getRefName',
            'skipMerge' => 'getSkipMerge',
            'author' => 'getAuthor'
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
    const ORDER_BY_NAME = 'name';
    const ORDER_BY_EMAIL = 'email';
    const ORDER_BY_COMMITS = 'commits';
    const SORT_ASC = 'asc';
    const SORT_DESC = 'desc';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOrderByAllowableValues()
    {
        return [
            self::ORDER_BY_NAME,
            self::ORDER_BY_EMAIL,
            self::ORDER_BY_COMMITS,
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
        $this->container['orderBy'] = isset($data['orderBy']) ? $data['orderBy'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['refName'] = isset($data['refName']) ? $data['refName'] : null;
        $this->container['skipMerge'] = isset($data['skipMerge']) ? $data['skipMerge'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
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

            if (!is_null($this->container['refName']) && (mb_strlen($this->container['refName']) > 255)) {
                $invalidProperties[] = "invalid value for 'refName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['refName']) && (mb_strlen($this->container['refName']) < 1)) {
                $invalidProperties[] = "invalid value for 'refName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['author']) && (mb_strlen($this->container['author']) > 255)) {
                $invalidProperties[] = "invalid value for 'author', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['author']) && (mb_strlen($this->container['author']) < 1)) {
                $invalidProperties[] = "invalid value for 'author', the character length must be bigger than or equal to 1.";
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
    * Gets orderBy
    *  **参数解释：** 排序方式。 **取值范围：** - name，名字。 - email，邮箱。 - commits，提交数量。
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
    * @param string|null $orderBy **参数解释：** 排序方式。 **取值范围：** - name，名字。 - email，邮箱。 - commits，提交数量。
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
    *  **参数解释：** 返回排序 - asc 按提交数量正序返回 - desc 按提交数量倒序返回
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
    * @param string|null $sort **参数解释：** 返回排序 - asc 按提交数量正序返回 - desc 按提交数量倒序返回
    *
    * @return $this
    */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;
        return $this;
    }

    /**
    * Gets refName
    *  **参数解释：** 分支或者tag名称。 **约束限制：** 不支持以 - . refs/heads/ refs/remotes/ 开头，不支持空格 [ \\ < ~ ^ : ? * ! ( ) ' \" | 等特殊字符，不支持以. / .lock结尾。 **取值范围：** 字符串长度不少于1，不超过200。 **默认取值：** 仓库默认分支。
    *
    * @return string|null
    */
    public function getRefName()
    {
        return $this->container['refName'];
    }

    /**
    * Sets refName
    *
    * @param string|null $refName **参数解释：** 分支或者tag名称。 **约束限制：** 不支持以 - . refs/heads/ refs/remotes/ 开头，不支持空格 [ \\ < ~ ^ : ? * ! ( ) ' \" | 等特殊字符，不支持以. / .lock结尾。 **取值范围：** 字符串长度不少于1，不超过200。 **默认取值：** 仓库默认分支。
    *
    * @return $this
    */
    public function setRefName($refName)
    {
        $this->container['refName'] = $refName;
        return $this;
    }

    /**
    * Gets skipMerge
    *  **参数解释：** 是否跳过合并。 **约束限制：** 不涉及。 **取值范围：** - false, 跳过合并 - true, 不跳过合并
    *
    * @return bool|null
    */
    public function getSkipMerge()
    {
        return $this->container['skipMerge'];
    }

    /**
    * Sets skipMerge
    *
    * @param bool|null $skipMerge **参数解释：** 是否跳过合并。 **约束限制：** 不涉及。 **取值范围：** - false, 跳过合并 - true, 不跳过合并
    *
    * @return $this
    */
    public function setSkipMerge($skipMerge)
    {
        $this->container['skipMerge'] = $skipMerge;
        return $this;
    }

    /**
    * Gets author
    *  **参数解释：** 提交者。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
    * Sets author
    *
    * @param string|null $author **参数解释：** 提交者。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;
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

