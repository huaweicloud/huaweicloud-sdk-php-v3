<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListGroupSubgroupsAndRepositoriesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListGroupSubgroupsAndRepositoriesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  **参数解释：** 代码组id，代码组首页，Group ID后的数字Id
    * filter  **参数解释：** 检索条件，名称。
    * orderBy  **参数解释：** 排序字段 id 唯一标识 name 名称 created_at 创建时间 updated_at 更新时间
    * sort  **参数解释：** 排序顺序 asc顺序 desc逆序
    * archived  **参数解释：** 是否归档
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'int',
            'filter' => 'int',
            'orderBy' => 'string',
            'sort' => 'string',
            'archived' => 'bool',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  **参数解释：** 代码组id，代码组首页，Group ID后的数字Id
    * filter  **参数解释：** 检索条件，名称。
    * orderBy  **参数解释：** 排序字段 id 唯一标识 name 名称 created_at 创建时间 updated_at 更新时间
    * sort  **参数解释：** 排序顺序 asc顺序 desc逆序
    * archived  **参数解释：** 是否归档
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => 'int32',
        'filter' => 'int32',
        'orderBy' => null,
        'sort' => null,
        'archived' => null,
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
    * groupId  **参数解释：** 代码组id，代码组首页，Group ID后的数字Id
    * filter  **参数解释：** 检索条件，名称。
    * orderBy  **参数解释：** 排序字段 id 唯一标识 name 名称 created_at 创建时间 updated_at 更新时间
    * sort  **参数解释：** 排序顺序 asc顺序 desc逆序
    * archived  **参数解释：** 是否归档
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'group_id',
            'filter' => 'filter',
            'orderBy' => 'order_by',
            'sort' => 'sort',
            'archived' => 'archived',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  **参数解释：** 代码组id，代码组首页，Group ID后的数字Id
    * filter  **参数解释：** 检索条件，名称。
    * orderBy  **参数解释：** 排序字段 id 唯一标识 name 名称 created_at 创建时间 updated_at 更新时间
    * sort  **参数解释：** 排序顺序 asc顺序 desc逆序
    * archived  **参数解释：** 是否归档
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'filter' => 'setFilter',
            'orderBy' => 'setOrderBy',
            'sort' => 'setSort',
            'archived' => 'setArchived',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  **参数解释：** 代码组id，代码组首页，Group ID后的数字Id
    * filter  **参数解释：** 检索条件，名称。
    * orderBy  **参数解释：** 排序字段 id 唯一标识 name 名称 created_at 创建时间 updated_at 更新时间
    * sort  **参数解释：** 排序顺序 asc顺序 desc逆序
    * archived  **参数解释：** 是否归档
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'filter' => 'getFilter',
            'orderBy' => 'getOrderBy',
            'sort' => 'getSort',
            'archived' => 'getArchived',
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['orderBy'] = isset($data['orderBy']) ? $data['orderBy'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['archived'] = isset($data['archived']) ? $data['archived'] : null;
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
        if ($this->container['groupId'] === null) {
            $invalidProperties[] = "'groupId' can't be null";
        }
            if (($this->container['groupId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'groupId', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['groupId'] < 1)) {
                $invalidProperties[] = "invalid value for 'groupId', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['filter']) && ($this->container['filter'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'filter', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['filter']) && ($this->container['filter'] < 1)) {
                $invalidProperties[] = "invalid value for 'filter', must be bigger than or equal to 1.";
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
    * Gets groupId
    *  **参数解释：** 代码组id，代码组首页，Group ID后的数字Id
    *
    * @return int
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param int $groupId **参数解释：** 代码组id，代码组首页，Group ID后的数字Id
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets filter
    *  **参数解释：** 检索条件，名称。
    *
    * @return int|null
    */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
    * Sets filter
    *
    * @param int|null $filter **参数解释：** 检索条件，名称。
    *
    * @return $this
    */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;
        return $this;
    }

    /**
    * Gets orderBy
    *  **参数解释：** 排序字段 id 唯一标识 name 名称 created_at 创建时间 updated_at 更新时间
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
    * @param string|null $orderBy **参数解释：** 排序字段 id 唯一标识 name 名称 created_at 创建时间 updated_at 更新时间
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
    *  **参数解释：** 排序顺序 asc顺序 desc逆序
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
    * @param string|null $sort **参数解释：** 排序顺序 asc顺序 desc逆序
    *
    * @return $this
    */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;
        return $this;
    }

    /**
    * Gets archived
    *  **参数解释：** 是否归档
    *
    * @return bool|null
    */
    public function getArchived()
    {
        return $this->container['archived'];
    }

    /**
    * Sets archived
    *
    * @param bool|null $archived **参数解释：** 是否归档
    *
    * @return $this
    */
    public function setArchived($archived)
    {
        $this->container['archived'] = $archived;
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

