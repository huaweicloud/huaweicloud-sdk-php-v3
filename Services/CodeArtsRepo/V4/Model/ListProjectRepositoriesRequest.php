<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListProjectRepositoriesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListProjectRepositoriesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  **参数解释：** 项目的32位uuid，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/en-us/api-projectman/ListProjectsV4.html)](tag:hws_hk)[[查询项目列表](https://support.huaweicloud.com/eu/api-projectman/ListProjectsV4.html)](tag:hws_eu)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **取值范围：** 字符串长度32。
    * search  **参数解释：** 仓库名称搜索关键字。 **取值范围：** 不涉及。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * orderBy  **参数解释：** 排序字段。 **取值范围：** - id，仓库ID。 - name，仓库名称。 - created_at，创建时间。 - updated_at，更新时间。 **约束限制：** 不涉及。 **默认取值：** updated_at。
    * sort  **参数解释：** 排序字段。 **取值范围：** - asc，升序。 - desc，逆序。 **约束限制：** 不涉及。 **默认取值：** desc。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'search' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'orderBy' => 'string',
            'sort' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  **参数解释：** 项目的32位uuid，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/en-us/api-projectman/ListProjectsV4.html)](tag:hws_hk)[[查询项目列表](https://support.huaweicloud.com/eu/api-projectman/ListProjectsV4.html)](tag:hws_eu)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **取值范围：** 字符串长度32。
    * search  **参数解释：** 仓库名称搜索关键字。 **取值范围：** 不涉及。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * orderBy  **参数解释：** 排序字段。 **取值范围：** - id，仓库ID。 - name，仓库名称。 - created_at，创建时间。 - updated_at，更新时间。 **约束限制：** 不涉及。 **默认取值：** updated_at。
    * sort  **参数解释：** 排序字段。 **取值范围：** - asc，升序。 - desc，逆序。 **约束限制：** 不涉及。 **默认取值：** desc。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'search' => null,
        'offset' => 'int32',
        'limit' => 'int32',
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
    * projectId  **参数解释：** 项目的32位uuid，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/en-us/api-projectman/ListProjectsV4.html)](tag:hws_hk)[[查询项目列表](https://support.huaweicloud.com/eu/api-projectman/ListProjectsV4.html)](tag:hws_eu)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **取值范围：** 字符串长度32。
    * search  **参数解释：** 仓库名称搜索关键字。 **取值范围：** 不涉及。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * orderBy  **参数解释：** 排序字段。 **取值范围：** - id，仓库ID。 - name，仓库名称。 - created_at，创建时间。 - updated_at，更新时间。 **约束限制：** 不涉及。 **默认取值：** updated_at。
    * sort  **参数解释：** 排序字段。 **取值范围：** - asc，升序。 - desc，逆序。 **约束限制：** 不涉及。 **默认取值：** desc。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'search' => 'search',
            'offset' => 'offset',
            'limit' => 'limit',
            'orderBy' => 'order_by',
            'sort' => 'sort'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  **参数解释：** 项目的32位uuid，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/en-us/api-projectman/ListProjectsV4.html)](tag:hws_hk)[[查询项目列表](https://support.huaweicloud.com/eu/api-projectman/ListProjectsV4.html)](tag:hws_eu)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **取值范围：** 字符串长度32。
    * search  **参数解释：** 仓库名称搜索关键字。 **取值范围：** 不涉及。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * orderBy  **参数解释：** 排序字段。 **取值范围：** - id，仓库ID。 - name，仓库名称。 - created_at，创建时间。 - updated_at，更新时间。 **约束限制：** 不涉及。 **默认取值：** updated_at。
    * sort  **参数解释：** 排序字段。 **取值范围：** - asc，升序。 - desc，逆序。 **约束限制：** 不涉及。 **默认取值：** desc。
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'search' => 'setSearch',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'orderBy' => 'setOrderBy',
            'sort' => 'setSort'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  **参数解释：** 项目的32位uuid，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/en-us/api-projectman/ListProjectsV4.html)](tag:hws_hk)[[查询项目列表](https://support.huaweicloud.com/eu/api-projectman/ListProjectsV4.html)](tag:hws_eu)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **取值范围：** 字符串长度32。
    * search  **参数解释：** 仓库名称搜索关键字。 **取值范围：** 不涉及。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * orderBy  **参数解释：** 排序字段。 **取值范围：** - id，仓库ID。 - name，仓库名称。 - created_at，创建时间。 - updated_at，更新时间。 **约束限制：** 不涉及。 **默认取值：** updated_at。
    * sort  **参数解释：** 排序字段。 **取值范围：** - asc，升序。 - desc，逆序。 **约束限制：** 不涉及。 **默认取值：** desc。
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'search' => 'getSearch',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
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
    const ORDER_BY_ID = 'id';
    const ORDER_BY_NAME = 'name';
    const ORDER_BY_CREATED_AT = 'created_at';
    const ORDER_BY_UPDATED_AT = 'updated_at';
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
            self::ORDER_BY_ID,
            self::ORDER_BY_NAME,
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['search'] = isset($data['search']) ? $data['search'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
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
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['search']) && (mb_strlen($this->container['search']) > 2000)) {
                $invalidProperties[] = "invalid value for 'search', the character length must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['search']) && (mb_strlen($this->container['search']) < 1)) {
                $invalidProperties[] = "invalid value for 'search', the character length must be bigger than or equal to 1.";
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
    * Gets projectId
    *  **参数解释：** 项目的32位uuid，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/en-us/api-projectman/ListProjectsV4.html)](tag:hws_hk)[[查询项目列表](https://support.huaweicloud.com/eu/api-projectman/ListProjectsV4.html)](tag:hws_eu)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **取值范围：** 字符串长度32。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId **参数解释：** 项目的32位uuid，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/en-us/api-projectman/ListProjectsV4.html)](tag:hws_hk)[[查询项目列表](https://support.huaweicloud.com/eu/api-projectman/ListProjectsV4.html)](tag:hws_eu)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **取值范围：** 字符串长度32。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets search
    *  **参数解释：** 仓库名称搜索关键字。 **取值范围：** 不涉及。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string|null $search **参数解释：** 仓库名称搜索关键字。 **取值范围：** 不涉及。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setSearch($search)
    {
        $this->container['search'] = $search;
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
    *  **参数解释：** 排序字段。 **取值范围：** - id，仓库ID。 - name，仓库名称。 - created_at，创建时间。 - updated_at，更新时间。 **约束限制：** 不涉及。 **默认取值：** updated_at。
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
    * @param string|null $orderBy **参数解释：** 排序字段。 **取值范围：** - id，仓库ID。 - name，仓库名称。 - created_at，创建时间。 - updated_at，更新时间。 **约束限制：** 不涉及。 **默认取值：** updated_at。
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
    *  **参数解释：** 排序字段。 **取值范围：** - asc，升序。 - desc，逆序。 **约束限制：** 不涉及。 **默认取值：** desc。
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
    * @param string|null $sort **参数解释：** 排序字段。 **取值范围：** - asc，升序。 - desc，逆序。 **约束限制：** 不涉及。 **默认取值：** desc。
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

