<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListGroupsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListGroupsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * search  **参数解释：** 检索内容
    * allAvailable  **参数解释：** 所有可用的代码组。
    * orderBy  **参数解释：** 排序字段，name 名称 path 路径 id 唯一标示 created_at 创建时间 updated_at 更新时间
    * sort  **参数解释：** 排序顺序 asc顺序 desc逆序
    * starred  **参数解释：** 是否关注。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * owned  **参数解释：**
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'search' => 'string',
            'allAvailable' => 'bool',
            'orderBy' => 'string',
            'sort' => 'string',
            'starred' => 'bool',
            'offset' => 'int',
            'limit' => 'int',
            'owned' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * search  **参数解释：** 检索内容
    * allAvailable  **参数解释：** 所有可用的代码组。
    * orderBy  **参数解释：** 排序字段，name 名称 path 路径 id 唯一标示 created_at 创建时间 updated_at 更新时间
    * sort  **参数解释：** 排序顺序 asc顺序 desc逆序
    * starred  **参数解释：** 是否关注。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * owned  **参数解释：**
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'search' => null,
        'allAvailable' => null,
        'orderBy' => null,
        'sort' => null,
        'starred' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'owned' => null
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
    * search  **参数解释：** 检索内容
    * allAvailable  **参数解释：** 所有可用的代码组。
    * orderBy  **参数解释：** 排序字段，name 名称 path 路径 id 唯一标示 created_at 创建时间 updated_at 更新时间
    * sort  **参数解释：** 排序顺序 asc顺序 desc逆序
    * starred  **参数解释：** 是否关注。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * owned  **参数解释：**
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'search' => 'search',
            'allAvailable' => 'all_available',
            'orderBy' => 'order_by',
            'sort' => 'sort',
            'starred' => 'starred',
            'offset' => 'offset',
            'limit' => 'limit',
            'owned' => 'owned'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * search  **参数解释：** 检索内容
    * allAvailable  **参数解释：** 所有可用的代码组。
    * orderBy  **参数解释：** 排序字段，name 名称 path 路径 id 唯一标示 created_at 创建时间 updated_at 更新时间
    * sort  **参数解释：** 排序顺序 asc顺序 desc逆序
    * starred  **参数解释：** 是否关注。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * owned  **参数解释：**
    *
    * @var string[]
    */
    protected static $setters = [
            'search' => 'setSearch',
            'allAvailable' => 'setAllAvailable',
            'orderBy' => 'setOrderBy',
            'sort' => 'setSort',
            'starred' => 'setStarred',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'owned' => 'setOwned'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * search  **参数解释：** 检索内容
    * allAvailable  **参数解释：** 所有可用的代码组。
    * orderBy  **参数解释：** 排序字段，name 名称 path 路径 id 唯一标示 created_at 创建时间 updated_at 更新时间
    * sort  **参数解释：** 排序顺序 asc顺序 desc逆序
    * starred  **参数解释：** 是否关注。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * owned  **参数解释：**
    *
    * @var string[]
    */
    protected static $getters = [
            'search' => 'getSearch',
            'allAvailable' => 'getAllAvailable',
            'orderBy' => 'getOrderBy',
            'sort' => 'getSort',
            'starred' => 'getStarred',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'owned' => 'getOwned'
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
    const ORDER_BY_PATH = 'path';
    const ORDER_BY_ID = 'id';
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
            self::ORDER_BY_NAME,
            self::ORDER_BY_PATH,
            self::ORDER_BY_ID,
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
        $this->container['search'] = isset($data['search']) ? $data['search'] : null;
        $this->container['allAvailable'] = isset($data['allAvailable']) ? $data['allAvailable'] : null;
        $this->container['orderBy'] = isset($data['orderBy']) ? $data['orderBy'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['starred'] = isset($data['starred']) ? $data['starred'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['owned'] = isset($data['owned']) ? $data['owned'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['search']) && (mb_strlen($this->container['search']) > 2000)) {
                $invalidProperties[] = "invalid value for 'search', the character length must be smaller than or equal to 2000.";
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
    * Gets search
    *  **参数解释：** 检索内容
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
    * @param string|null $search **参数解释：** 检索内容
    *
    * @return $this
    */
    public function setSearch($search)
    {
        $this->container['search'] = $search;
        return $this;
    }

    /**
    * Gets allAvailable
    *  **参数解释：** 所有可用的代码组。
    *
    * @return bool|null
    */
    public function getAllAvailable()
    {
        return $this->container['allAvailable'];
    }

    /**
    * Sets allAvailable
    *
    * @param bool|null $allAvailable **参数解释：** 所有可用的代码组。
    *
    * @return $this
    */
    public function setAllAvailable($allAvailable)
    {
        $this->container['allAvailable'] = $allAvailable;
        return $this;
    }

    /**
    * Gets orderBy
    *  **参数解释：** 排序字段，name 名称 path 路径 id 唯一标示 created_at 创建时间 updated_at 更新时间
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
    * @param string|null $orderBy **参数解释：** 排序字段，name 名称 path 路径 id 唯一标示 created_at 创建时间 updated_at 更新时间
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
    * Gets starred
    *  **参数解释：** 是否关注。
    *
    * @return bool|null
    */
    public function getStarred()
    {
        return $this->container['starred'];
    }

    /**
    * Sets starred
    *
    * @param bool|null $starred **参数解释：** 是否关注。
    *
    * @return $this
    */
    public function setStarred($starred)
    {
        $this->container['starred'] = $starred;
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
    * Gets owned
    *  **参数解释：**
    *
    * @return bool|null
    */
    public function getOwned()
    {
        return $this->container['owned'];
    }

    /**
    * Sets owned
    *
    * @param bool|null $owned **参数解释：**
    *
    * @return $this
    */
    public function setOwned($owned)
    {
        $this->container['owned'] = $owned;
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

