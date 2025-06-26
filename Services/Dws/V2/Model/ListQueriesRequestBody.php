<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListQueriesRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListQueriesRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  **参数解释**： 集群ID。获取方法请参见[获取集群ID](dws_02_00068.xml)。 **约束限制**： 必须是有效的dws集群ID。 **取值范围**： 36位UUID。 **默认取值**： 不涉及。
    * projectId  **参数解释**： 项目ID。获取方法请参见[获取项目ID](dws_02_0011.xml)。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * offset  **参数解释**： 偏移量，表示从此偏移量开始查询，一般为页数减1。 **取值范围**： 大于等于0。
    * limit  **参数解释**： 每页显示的条目数量。 **取值范围**： 大于0。
    * conditions  **参数解释**： 查询条件数组。 **取值范围**： 不涉及。
    * orderBy  **参数解释**： 排序字段。 **取值范围**： 不涉及。
    * target  **参数解释**： 固定值db_queries。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'projectId' => 'string',
            'offset' => 'string',
            'limit' => 'string',
            'conditions' => '\HuaweiCloud\SDK\Dws\V2\Model\ListQueriesCondition[]',
            'orderBy' => 'string',
            'target' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  **参数解释**： 集群ID。获取方法请参见[获取集群ID](dws_02_00068.xml)。 **约束限制**： 必须是有效的dws集群ID。 **取值范围**： 36位UUID。 **默认取值**： 不涉及。
    * projectId  **参数解释**： 项目ID。获取方法请参见[获取项目ID](dws_02_0011.xml)。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * offset  **参数解释**： 偏移量，表示从此偏移量开始查询，一般为页数减1。 **取值范围**： 大于等于0。
    * limit  **参数解释**： 每页显示的条目数量。 **取值范围**： 大于0。
    * conditions  **参数解释**： 查询条件数组。 **取值范围**： 不涉及。
    * orderBy  **参数解释**： 排序字段。 **取值范围**： 不涉及。
    * target  **参数解释**： 固定值db_queries。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'projectId' => null,
        'offset' => null,
        'limit' => null,
        'conditions' => null,
        'orderBy' => null,
        'target' => null
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
    * clusterId  **参数解释**： 集群ID。获取方法请参见[获取集群ID](dws_02_00068.xml)。 **约束限制**： 必须是有效的dws集群ID。 **取值范围**： 36位UUID。 **默认取值**： 不涉及。
    * projectId  **参数解释**： 项目ID。获取方法请参见[获取项目ID](dws_02_0011.xml)。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * offset  **参数解释**： 偏移量，表示从此偏移量开始查询，一般为页数减1。 **取值范围**： 大于等于0。
    * limit  **参数解释**： 每页显示的条目数量。 **取值范围**： 大于0。
    * conditions  **参数解释**： 查询条件数组。 **取值范围**： 不涉及。
    * orderBy  **参数解释**： 排序字段。 **取值范围**： 不涉及。
    * target  **参数解释**： 固定值db_queries。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'projectId' => 'project_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'conditions' => 'conditions',
            'orderBy' => 'order_by',
            'target' => 'target'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  **参数解释**： 集群ID。获取方法请参见[获取集群ID](dws_02_00068.xml)。 **约束限制**： 必须是有效的dws集群ID。 **取值范围**： 36位UUID。 **默认取值**： 不涉及。
    * projectId  **参数解释**： 项目ID。获取方法请参见[获取项目ID](dws_02_0011.xml)。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * offset  **参数解释**： 偏移量，表示从此偏移量开始查询，一般为页数减1。 **取值范围**： 大于等于0。
    * limit  **参数解释**： 每页显示的条目数量。 **取值范围**： 大于0。
    * conditions  **参数解释**： 查询条件数组。 **取值范围**： 不涉及。
    * orderBy  **参数解释**： 排序字段。 **取值范围**： 不涉及。
    * target  **参数解释**： 固定值db_queries。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'projectId' => 'setProjectId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'conditions' => 'setConditions',
            'orderBy' => 'setOrderBy',
            'target' => 'setTarget'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  **参数解释**： 集群ID。获取方法请参见[获取集群ID](dws_02_00068.xml)。 **约束限制**： 必须是有效的dws集群ID。 **取值范围**： 36位UUID。 **默认取值**： 不涉及。
    * projectId  **参数解释**： 项目ID。获取方法请参见[获取项目ID](dws_02_0011.xml)。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * offset  **参数解释**： 偏移量，表示从此偏移量开始查询，一般为页数减1。 **取值范围**： 大于等于0。
    * limit  **参数解释**： 每页显示的条目数量。 **取值范围**： 大于0。
    * conditions  **参数解释**： 查询条件数组。 **取值范围**： 不涉及。
    * orderBy  **参数解释**： 排序字段。 **取值范围**： 不涉及。
    * target  **参数解释**： 固定值db_queries。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'projectId' => 'getProjectId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'conditions' => 'getConditions',
            'orderBy' => 'getOrderBy',
            'target' => 'getTarget'
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['orderBy'] = isset($data['orderBy']) ? $data['orderBy'] : null;
        $this->container['target'] = isset($data['target']) ? $data['target'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
        if ($this->container['conditions'] === null) {
            $invalidProperties[] = "'conditions' can't be null";
        }
        if ($this->container['target'] === null) {
            $invalidProperties[] = "'target' can't be null";
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
    * Gets clusterId
    *  **参数解释**： 集群ID。获取方法请参见[获取集群ID](dws_02_00068.xml)。 **约束限制**： 必须是有效的dws集群ID。 **取值范围**： 36位UUID。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string $clusterId **参数解释**： 集群ID。获取方法请参见[获取集群ID](dws_02_00068.xml)。 **约束限制**： 必须是有效的dws集群ID。 **取值范围**： 36位UUID。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释**： 项目ID。获取方法请参见[获取项目ID](dws_02_0011.xml)。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string $projectId **参数解释**： 项目ID。获取方法请参见[获取项目ID](dws_02_0011.xml)。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**： 偏移量，表示从此偏移量开始查询，一般为页数减1。 **取值范围**： 大于等于0。
    *
    * @return string
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param string $offset **参数解释**： 偏移量，表示从此偏移量开始查询，一般为页数减1。 **取值范围**： 大于等于0。
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
    *  **参数解释**： 每页显示的条目数量。 **取值范围**： 大于0。
    *
    * @return string
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param string $limit **参数解释**： 每页显示的条目数量。 **取值范围**： 大于0。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets conditions
    *  **参数解释**： 查询条件数组。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\ListQueriesCondition[]
    */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
    * Sets conditions
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\ListQueriesCondition[] $conditions **参数解释**： 查询条件数组。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;
        return $this;
    }

    /**
    * Gets orderBy
    *  **参数解释**： 排序字段。 **取值范围**： 不涉及。
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
    * @param string|null $orderBy **参数解释**： 排序字段。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setOrderBy($orderBy)
    {
        $this->container['orderBy'] = $orderBy;
        return $this;
    }

    /**
    * Gets target
    *  **参数解释**： 固定值db_queries。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
    * Sets target
    *
    * @param string $target **参数解释**： 固定值db_queries。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTarget($target)
    {
        $this->container['target'] = $target;
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

