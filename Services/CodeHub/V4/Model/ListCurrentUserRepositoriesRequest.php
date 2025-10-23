<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCurrentUserRepositoriesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCurrentUserRepositoriesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * orderBy  **参数解释：** 排序字段。 **取值范围：** - created_at，创建时间。 - updated_at，更新时间。 **约束限制：** 不涉及。 **默认取值：** created_at。
    * sort  **参数解释：** 排序字段。 **取值范围：** - asc，升序。 - desc，逆序。 **约束限制：** 不涉及。 **默认取值：** desc。
    * archived  **参数解释：** 是否归档。 **取值范围：** - true，归档。 - false，未归档。 **约束限制：** 不涉及。 **默认取值：** false。
    * search  **参数解释：** 仓库搜索。 **取值范围：** 1-512。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * starred  **参数解释：** 关注的仓库。 **取值范围：** - true，关注。 - false，未关注。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * membership  **参数解释：** 参与的仓库（有仓库成员身份）。 **取值范围：** - true，筛选我参与的仓库。 - false，不筛选。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * userCreated  **参数解释：** 创建的仓库。 **取值范围：** - true，筛选我创建的仓库。 - false，不筛选。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * includeAbnormal  **参数解释：** 包含异常状态的仓库。 **取值范围：** - true，筛选包含异常状态的仓库。 - false，不筛选。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'offset' => 'int',
            'limit' => 'int',
            'orderBy' => 'string',
            'sort' => 'string',
            'archived' => 'bool',
            'search' => 'string',
            'starred' => 'bool',
            'membership' => 'bool',
            'userCreated' => 'bool',
            'includeAbnormal' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * orderBy  **参数解释：** 排序字段。 **取值范围：** - created_at，创建时间。 - updated_at，更新时间。 **约束限制：** 不涉及。 **默认取值：** created_at。
    * sort  **参数解释：** 排序字段。 **取值范围：** - asc，升序。 - desc，逆序。 **约束限制：** 不涉及。 **默认取值：** desc。
    * archived  **参数解释：** 是否归档。 **取值范围：** - true，归档。 - false，未归档。 **约束限制：** 不涉及。 **默认取值：** false。
    * search  **参数解释：** 仓库搜索。 **取值范围：** 1-512。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * starred  **参数解释：** 关注的仓库。 **取值范围：** - true，关注。 - false，未关注。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * membership  **参数解释：** 参与的仓库（有仓库成员身份）。 **取值范围：** - true，筛选我参与的仓库。 - false，不筛选。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * userCreated  **参数解释：** 创建的仓库。 **取值范围：** - true，筛选我创建的仓库。 - false，不筛选。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * includeAbnormal  **参数解释：** 包含异常状态的仓库。 **取值范围：** - true，筛选包含异常状态的仓库。 - false，不筛选。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'offset' => 'int32',
        'limit' => 'int32',
        'orderBy' => null,
        'sort' => null,
        'archived' => null,
        'search' => null,
        'starred' => null,
        'membership' => null,
        'userCreated' => null,
        'includeAbnormal' => null
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
    * orderBy  **参数解释：** 排序字段。 **取值范围：** - created_at，创建时间。 - updated_at，更新时间。 **约束限制：** 不涉及。 **默认取值：** created_at。
    * sort  **参数解释：** 排序字段。 **取值范围：** - asc，升序。 - desc，逆序。 **约束限制：** 不涉及。 **默认取值：** desc。
    * archived  **参数解释：** 是否归档。 **取值范围：** - true，归档。 - false，未归档。 **约束限制：** 不涉及。 **默认取值：** false。
    * search  **参数解释：** 仓库搜索。 **取值范围：** 1-512。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * starred  **参数解释：** 关注的仓库。 **取值范围：** - true，关注。 - false，未关注。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * membership  **参数解释：** 参与的仓库（有仓库成员身份）。 **取值范围：** - true，筛选我参与的仓库。 - false，不筛选。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * userCreated  **参数解释：** 创建的仓库。 **取值范围：** - true，筛选我创建的仓库。 - false，不筛选。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * includeAbnormal  **参数解释：** 包含异常状态的仓库。 **取值范围：** - true，筛选包含异常状态的仓库。 - false，不筛选。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'offset' => 'offset',
            'limit' => 'limit',
            'orderBy' => 'order_by',
            'sort' => 'sort',
            'archived' => 'archived',
            'search' => 'search',
            'starred' => 'starred',
            'membership' => 'membership',
            'userCreated' => 'user_created',
            'includeAbnormal' => 'include_abnormal'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * orderBy  **参数解释：** 排序字段。 **取值范围：** - created_at，创建时间。 - updated_at，更新时间。 **约束限制：** 不涉及。 **默认取值：** created_at。
    * sort  **参数解释：** 排序字段。 **取值范围：** - asc，升序。 - desc，逆序。 **约束限制：** 不涉及。 **默认取值：** desc。
    * archived  **参数解释：** 是否归档。 **取值范围：** - true，归档。 - false，未归档。 **约束限制：** 不涉及。 **默认取值：** false。
    * search  **参数解释：** 仓库搜索。 **取值范围：** 1-512。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * starred  **参数解释：** 关注的仓库。 **取值范围：** - true，关注。 - false，未关注。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * membership  **参数解释：** 参与的仓库（有仓库成员身份）。 **取值范围：** - true，筛选我参与的仓库。 - false，不筛选。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * userCreated  **参数解释：** 创建的仓库。 **取值范围：** - true，筛选我创建的仓库。 - false，不筛选。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * includeAbnormal  **参数解释：** 包含异常状态的仓库。 **取值范围：** - true，筛选包含异常状态的仓库。 - false，不筛选。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'orderBy' => 'setOrderBy',
            'sort' => 'setSort',
            'archived' => 'setArchived',
            'search' => 'setSearch',
            'starred' => 'setStarred',
            'membership' => 'setMembership',
            'userCreated' => 'setUserCreated',
            'includeAbnormal' => 'setIncludeAbnormal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * orderBy  **参数解释：** 排序字段。 **取值范围：** - created_at，创建时间。 - updated_at，更新时间。 **约束限制：** 不涉及。 **默认取值：** created_at。
    * sort  **参数解释：** 排序字段。 **取值范围：** - asc，升序。 - desc，逆序。 **约束限制：** 不涉及。 **默认取值：** desc。
    * archived  **参数解释：** 是否归档。 **取值范围：** - true，归档。 - false，未归档。 **约束限制：** 不涉及。 **默认取值：** false。
    * search  **参数解释：** 仓库搜索。 **取值范围：** 1-512。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * starred  **参数解释：** 关注的仓库。 **取值范围：** - true，关注。 - false，未关注。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * membership  **参数解释：** 参与的仓库（有仓库成员身份）。 **取值范围：** - true，筛选我参与的仓库。 - false，不筛选。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * userCreated  **参数解释：** 创建的仓库。 **取值范围：** - true，筛选我创建的仓库。 - false，不筛选。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * includeAbnormal  **参数解释：** 包含异常状态的仓库。 **取值范围：** - true，筛选包含异常状态的仓库。 - false，不筛选。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'orderBy' => 'getOrderBy',
            'sort' => 'getSort',
            'archived' => 'getArchived',
            'search' => 'getSearch',
            'starred' => 'getStarred',
            'membership' => 'getMembership',
            'userCreated' => 'getUserCreated',
            'includeAbnormal' => 'getIncludeAbnormal'
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['orderBy'] = isset($data['orderBy']) ? $data['orderBy'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['archived'] = isset($data['archived']) ? $data['archived'] : null;
        $this->container['search'] = isset($data['search']) ? $data['search'] : null;
        $this->container['starred'] = isset($data['starred']) ? $data['starred'] : null;
        $this->container['membership'] = isset($data['membership']) ? $data['membership'] : null;
        $this->container['userCreated'] = isset($data['userCreated']) ? $data['userCreated'] : null;
        $this->container['includeAbnormal'] = isset($data['includeAbnormal']) ? $data['includeAbnormal'] : null;
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

            if (!is_null($this->container['search']) && (mb_strlen($this->container['search']) > 512)) {
                $invalidProperties[] = "invalid value for 'search', the character length must be smaller than or equal to 512.";
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
    *  **参数解释：** 排序字段。 **取值范围：** - created_at，创建时间。 - updated_at，更新时间。 **约束限制：** 不涉及。 **默认取值：** created_at。
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
    * @param string|null $orderBy **参数解释：** 排序字段。 **取值范围：** - created_at，创建时间。 - updated_at，更新时间。 **约束限制：** 不涉及。 **默认取值：** created_at。
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
    * Gets archived
    *  **参数解释：** 是否归档。 **取值范围：** - true，归档。 - false，未归档。 **约束限制：** 不涉及。 **默认取值：** false。
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
    * @param bool|null $archived **参数解释：** 是否归档。 **取值范围：** - true，归档。 - false，未归档。 **约束限制：** 不涉及。 **默认取值：** false。
    *
    * @return $this
    */
    public function setArchived($archived)
    {
        $this->container['archived'] = $archived;
        return $this;
    }

    /**
    * Gets search
    *  **参数解释：** 仓库搜索。 **取值范围：** 1-512。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string|null $search **参数解释：** 仓库搜索。 **取值范围：** 1-512。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setSearch($search)
    {
        $this->container['search'] = $search;
        return $this;
    }

    /**
    * Gets starred
    *  **参数解释：** 关注的仓库。 **取值范围：** - true，关注。 - false，未关注。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
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
    * @param bool|null $starred **参数解释：** 关注的仓库。 **取值范围：** - true，关注。 - false，未关注。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setStarred($starred)
    {
        $this->container['starred'] = $starred;
        return $this;
    }

    /**
    * Gets membership
    *  **参数解释：** 参与的仓库（有仓库成员身份）。 **取值范围：** - true，筛选我参与的仓库。 - false，不筛选。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return bool|null
    */
    public function getMembership()
    {
        return $this->container['membership'];
    }

    /**
    * Sets membership
    *
    * @param bool|null $membership **参数解释：** 参与的仓库（有仓库成员身份）。 **取值范围：** - true，筛选我参与的仓库。 - false，不筛选。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setMembership($membership)
    {
        $this->container['membership'] = $membership;
        return $this;
    }

    /**
    * Gets userCreated
    *  **参数解释：** 创建的仓库。 **取值范围：** - true，筛选我创建的仓库。 - false，不筛选。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return bool|null
    */
    public function getUserCreated()
    {
        return $this->container['userCreated'];
    }

    /**
    * Sets userCreated
    *
    * @param bool|null $userCreated **参数解释：** 创建的仓库。 **取值范围：** - true，筛选我创建的仓库。 - false，不筛选。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setUserCreated($userCreated)
    {
        $this->container['userCreated'] = $userCreated;
        return $this;
    }

    /**
    * Gets includeAbnormal
    *  **参数解释：** 包含异常状态的仓库。 **取值范围：** - true，筛选包含异常状态的仓库。 - false，不筛选。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return bool|null
    */
    public function getIncludeAbnormal()
    {
        return $this->container['includeAbnormal'];
    }

    /**
    * Sets includeAbnormal
    *
    * @param bool|null $includeAbnormal **参数解释：** 包含异常状态的仓库。 **取值范围：** - true，筛选包含异常状态的仓库。 - false，不筛选。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setIncludeAbnormal($includeAbnormal)
    {
        $this->container['includeAbnormal'] = $includeAbnormal;
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

