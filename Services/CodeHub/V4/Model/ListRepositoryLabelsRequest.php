<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRepositoryLabelsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRepositoryLabelsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * search  **参数解释：** 查询关键字，可模糊匹配标签名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * sort  **参数解释：**  排序。 **约束限制：** 不涉及。 **取值范围：** - name_asc，按标签名升序。 - name_desc，按标签名降序。 - created_asc，按标创建时间升序。 - created_desc，按标创建时间降序。 - updated_asc，按标更新时间升序。 - updated_desc，按标更新时间降序。 **默认取值：** name_asc
    * includeExpired  **参数解释：** 是否包含失效的标签。 **约束限制：** 不涉及。 **取值范围：** - true，包含。 - false，不包含。 **默认取值：** true
    * view  **参数解释：** 结果集属性，根据给定的参数返回不同的结果。 **约束限制：** 不涉及。 **取值范围：** - simple，返回简略信息。 - basic，返回基本信息。 - detail，返回详细信息。 **默认取值：** basic
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'repositoryId' => 'int',
            'offset' => 'int',
            'limit' => 'int',
            'search' => 'string',
            'sort' => 'string',
            'includeExpired' => 'bool',
            'view' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * search  **参数解释：** 查询关键字，可模糊匹配标签名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * sort  **参数解释：**  排序。 **约束限制：** 不涉及。 **取值范围：** - name_asc，按标签名升序。 - name_desc，按标签名降序。 - created_asc，按标创建时间升序。 - created_desc，按标创建时间降序。 - updated_asc，按标更新时间升序。 - updated_desc，按标更新时间降序。 **默认取值：** name_asc
    * includeExpired  **参数解释：** 是否包含失效的标签。 **约束限制：** 不涉及。 **取值范围：** - true，包含。 - false，不包含。 **默认取值：** true
    * view  **参数解释：** 结果集属性，根据给定的参数返回不同的结果。 **约束限制：** 不涉及。 **取值范围：** - simple，返回简略信息。 - basic，返回基本信息。 - detail，返回详细信息。 **默认取值：** basic
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'repositoryId' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'search' => null,
        'sort' => null,
        'includeExpired' => null,
        'view' => null
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
    * search  **参数解释：** 查询关键字，可模糊匹配标签名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * sort  **参数解释：**  排序。 **约束限制：** 不涉及。 **取值范围：** - name_asc，按标签名升序。 - name_desc，按标签名降序。 - created_asc，按标创建时间升序。 - created_desc，按标创建时间降序。 - updated_asc，按标更新时间升序。 - updated_desc，按标更新时间降序。 **默认取值：** name_asc
    * includeExpired  **参数解释：** 是否包含失效的标签。 **约束限制：** 不涉及。 **取值范围：** - true，包含。 - false，不包含。 **默认取值：** true
    * view  **参数解释：** 结果集属性，根据给定的参数返回不同的结果。 **约束限制：** 不涉及。 **取值范围：** - simple，返回简略信息。 - basic，返回基本信息。 - detail，返回详细信息。 **默认取值：** basic
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'repositoryId' => 'repository_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'search' => 'search',
            'sort' => 'sort',
            'includeExpired' => 'include_expired',
            'view' => 'view'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * search  **参数解释：** 查询关键字，可模糊匹配标签名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * sort  **参数解释：**  排序。 **约束限制：** 不涉及。 **取值范围：** - name_asc，按标签名升序。 - name_desc，按标签名降序。 - created_asc，按标创建时间升序。 - created_desc，按标创建时间降序。 - updated_asc，按标更新时间升序。 - updated_desc，按标更新时间降序。 **默认取值：** name_asc
    * includeExpired  **参数解释：** 是否包含失效的标签。 **约束限制：** 不涉及。 **取值范围：** - true，包含。 - false，不包含。 **默认取值：** true
    * view  **参数解释：** 结果集属性，根据给定的参数返回不同的结果。 **约束限制：** 不涉及。 **取值范围：** - simple，返回简略信息。 - basic，返回基本信息。 - detail，返回详细信息。 **默认取值：** basic
    *
    * @var string[]
    */
    protected static $setters = [
            'repositoryId' => 'setRepositoryId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'search' => 'setSearch',
            'sort' => 'setSort',
            'includeExpired' => 'setIncludeExpired',
            'view' => 'setView'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * search  **参数解释：** 查询关键字，可模糊匹配标签名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * sort  **参数解释：**  排序。 **约束限制：** 不涉及。 **取值范围：** - name_asc，按标签名升序。 - name_desc，按标签名降序。 - created_asc，按标创建时间升序。 - created_desc，按标创建时间降序。 - updated_asc，按标更新时间升序。 - updated_desc，按标更新时间降序。 **默认取值：** name_asc
    * includeExpired  **参数解释：** 是否包含失效的标签。 **约束限制：** 不涉及。 **取值范围：** - true，包含。 - false，不包含。 **默认取值：** true
    * view  **参数解释：** 结果集属性，根据给定的参数返回不同的结果。 **约束限制：** 不涉及。 **取值范围：** - simple，返回简略信息。 - basic，返回基本信息。 - detail，返回详细信息。 **默认取值：** basic
    *
    * @var string[]
    */
    protected static $getters = [
            'repositoryId' => 'getRepositoryId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'search' => 'getSearch',
            'sort' => 'getSort',
            'includeExpired' => 'getIncludeExpired',
            'view' => 'getView'
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
    const SORT_NAME_ASC = 'name_asc';
    const SORT_NAME_DESC = 'name_desc';
    const SORT_CREATED_ASC = 'created_asc';
    const SORT_CREATED_DESC = 'created_desc';
    const SORT_UPDATED_ASC = 'updated_asc';
    const SORT_UPDATED_DESC = 'updated_desc';
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
            self::SORT_NAME_ASC,
            self::SORT_NAME_DESC,
            self::SORT_CREATED_ASC,
            self::SORT_CREATED_DESC,
            self::SORT_UPDATED_ASC,
            self::SORT_UPDATED_DESC,
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['search'] = isset($data['search']) ? $data['search'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['includeExpired'] = isset($data['includeExpired']) ? $data['includeExpired'] : null;
        $this->container['view'] = isset($data['view']) ? $data['view'] : null;
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
            if (!is_null($this->container['search']) && (mb_strlen($this->container['search']) > 255)) {
                $invalidProperties[] = "invalid value for 'search', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['search']) && (mb_strlen($this->container['search']) < 1)) {
                $invalidProperties[] = "invalid value for 'search', the character length must be bigger than or equal to 1.";
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
    * Gets search
    *  **参数解释：** 查询关键字，可模糊匹配标签名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string|null $search **参数解释：** 查询关键字，可模糊匹配标签名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setSearch($search)
    {
        $this->container['search'] = $search;
        return $this;
    }

    /**
    * Gets sort
    *  **参数解释：**  排序。 **约束限制：** 不涉及。 **取值范围：** - name_asc，按标签名升序。 - name_desc，按标签名降序。 - created_asc，按标创建时间升序。 - created_desc，按标创建时间降序。 - updated_asc，按标更新时间升序。 - updated_desc，按标更新时间降序。 **默认取值：** name_asc
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
    * @param string|null $sort **参数解释：**  排序。 **约束限制：** 不涉及。 **取值范围：** - name_asc，按标签名升序。 - name_desc，按标签名降序。 - created_asc，按标创建时间升序。 - created_desc，按标创建时间降序。 - updated_asc，按标更新时间升序。 - updated_desc，按标更新时间降序。 **默认取值：** name_asc
    *
    * @return $this
    */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;
        return $this;
    }

    /**
    * Gets includeExpired
    *  **参数解释：** 是否包含失效的标签。 **约束限制：** 不涉及。 **取值范围：** - true，包含。 - false，不包含。 **默认取值：** true
    *
    * @return bool|null
    */
    public function getIncludeExpired()
    {
        return $this->container['includeExpired'];
    }

    /**
    * Sets includeExpired
    *
    * @param bool|null $includeExpired **参数解释：** 是否包含失效的标签。 **约束限制：** 不涉及。 **取值范围：** - true，包含。 - false，不包含。 **默认取值：** true
    *
    * @return $this
    */
    public function setIncludeExpired($includeExpired)
    {
        $this->container['includeExpired'] = $includeExpired;
        return $this;
    }

    /**
    * Gets view
    *  **参数解释：** 结果集属性，根据给定的参数返回不同的结果。 **约束限制：** 不涉及。 **取值范围：** - simple，返回简略信息。 - basic，返回基本信息。 - detail，返回详细信息。 **默认取值：** basic
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
    * @param string|null $view **参数解释：** 结果集属性，根据给定的参数返回不同的结果。 **约束限制：** 不涉及。 **取值范围：** - simple，返回简略信息。 - basic，返回基本信息。 - detail，返回详细信息。 **默认取值：** basic
    *
    * @return $this
    */
    public function setView($view)
    {
        $this->container['view'] = $view;
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

