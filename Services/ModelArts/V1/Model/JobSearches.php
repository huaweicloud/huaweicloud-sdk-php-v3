<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobSearches implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobSearches';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * offset  查询作业的页数，最小为0。例如设置为0，则表示从第一页开始查询。
    * limit  查询作业的每页条目数。最小为1，最大为50。
    * sortBy  查询作业排列顺序的指标。默认使用create_time排序。
    * order  查询作业排列顺序，默认为“desc”，降序排序。也可以选择对应的“asc”，升序排序。
    * groupBy  查询作业要搜索的分组条件。
    * workspaceId  参数解释：工作空间ID。 约束限制：不涉及。 取值范围：0或长度为32的字符串。 默认取值：0。
    * trainType  **参数解释**：在开启自定义作业和精调作业联合查询时，只显示自定义或精调作业。 **约束限制**：不涉及。 **取值范围**：   - job: 只查自定义作业   - ftjob : 只查精调作业 **默认取值**：不涉及。
    * filters  查询作业要过滤的一系列条件。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'offset' => 'int',
            'limit' => 'int',
            'sortBy' => 'string',
            'order' => 'string',
            'groupBy' => 'string',
            'workspaceId' => 'string',
            'trainType' => 'string',
            'filters' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Filter[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * offset  查询作业的页数，最小为0。例如设置为0，则表示从第一页开始查询。
    * limit  查询作业的每页条目数。最小为1，最大为50。
    * sortBy  查询作业排列顺序的指标。默认使用create_time排序。
    * order  查询作业排列顺序，默认为“desc”，降序排序。也可以选择对应的“asc”，升序排序。
    * groupBy  查询作业要搜索的分组条件。
    * workspaceId  参数解释：工作空间ID。 约束限制：不涉及。 取值范围：0或长度为32的字符串。 默认取值：0。
    * trainType  **参数解释**：在开启自定义作业和精调作业联合查询时，只显示自定义或精调作业。 **约束限制**：不涉及。 **取值范围**：   - job: 只查自定义作业   - ftjob : 只查精调作业 **默认取值**：不涉及。
    * filters  查询作业要过滤的一系列条件。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'offset' => 'int32',
        'limit' => 'int32',
        'sortBy' => null,
        'order' => null,
        'groupBy' => null,
        'workspaceId' => null,
        'trainType' => null,
        'filters' => null
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
    * offset  查询作业的页数，最小为0。例如设置为0，则表示从第一页开始查询。
    * limit  查询作业的每页条目数。最小为1，最大为50。
    * sortBy  查询作业排列顺序的指标。默认使用create_time排序。
    * order  查询作业排列顺序，默认为“desc”，降序排序。也可以选择对应的“asc”，升序排序。
    * groupBy  查询作业要搜索的分组条件。
    * workspaceId  参数解释：工作空间ID。 约束限制：不涉及。 取值范围：0或长度为32的字符串。 默认取值：0。
    * trainType  **参数解释**：在开启自定义作业和精调作业联合查询时，只显示自定义或精调作业。 **约束限制**：不涉及。 **取值范围**：   - job: 只查自定义作业   - ftjob : 只查精调作业 **默认取值**：不涉及。
    * filters  查询作业要过滤的一系列条件。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'offset' => 'offset',
            'limit' => 'limit',
            'sortBy' => 'sort_by',
            'order' => 'order',
            'groupBy' => 'group_by',
            'workspaceId' => 'workspace_id',
            'trainType' => 'train_type',
            'filters' => 'filters'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * offset  查询作业的页数，最小为0。例如设置为0，则表示从第一页开始查询。
    * limit  查询作业的每页条目数。最小为1，最大为50。
    * sortBy  查询作业排列顺序的指标。默认使用create_time排序。
    * order  查询作业排列顺序，默认为“desc”，降序排序。也可以选择对应的“asc”，升序排序。
    * groupBy  查询作业要搜索的分组条件。
    * workspaceId  参数解释：工作空间ID。 约束限制：不涉及。 取值范围：0或长度为32的字符串。 默认取值：0。
    * trainType  **参数解释**：在开启自定义作业和精调作业联合查询时，只显示自定义或精调作业。 **约束限制**：不涉及。 **取值范围**：   - job: 只查自定义作业   - ftjob : 只查精调作业 **默认取值**：不涉及。
    * filters  查询作业要过滤的一系列条件。
    *
    * @var string[]
    */
    protected static $setters = [
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'sortBy' => 'setSortBy',
            'order' => 'setOrder',
            'groupBy' => 'setGroupBy',
            'workspaceId' => 'setWorkspaceId',
            'trainType' => 'setTrainType',
            'filters' => 'setFilters'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * offset  查询作业的页数，最小为0。例如设置为0，则表示从第一页开始查询。
    * limit  查询作业的每页条目数。最小为1，最大为50。
    * sortBy  查询作业排列顺序的指标。默认使用create_time排序。
    * order  查询作业排列顺序，默认为“desc”，降序排序。也可以选择对应的“asc”，升序排序。
    * groupBy  查询作业要搜索的分组条件。
    * workspaceId  参数解释：工作空间ID。 约束限制：不涉及。 取值范围：0或长度为32的字符串。 默认取值：0。
    * trainType  **参数解释**：在开启自定义作业和精调作业联合查询时，只显示自定义或精调作业。 **约束限制**：不涉及。 **取值范围**：   - job: 只查自定义作业   - ftjob : 只查精调作业 **默认取值**：不涉及。
    * filters  查询作业要过滤的一系列条件。
    *
    * @var string[]
    */
    protected static $getters = [
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'sortBy' => 'getSortBy',
            'order' => 'getOrder',
            'groupBy' => 'getGroupBy',
            'workspaceId' => 'getWorkspaceId',
            'trainType' => 'getTrainType',
            'filters' => 'getFilters'
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['sortBy'] = isset($data['sortBy']) ? $data['sortBy'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['groupBy'] = isset($data['groupBy']) ? $data['groupBy'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['trainType'] = isset($data['trainType']) ? $data['trainType'] : null;
        $this->container['filters'] = isset($data['filters']) ? $data['filters'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    *  查询作业的页数，最小为0。例如设置为0，则表示从第一页开始查询。
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
    * @param int|null $offset 查询作业的页数，最小为0。例如设置为0，则表示从第一页开始查询。
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
    *  查询作业的每页条目数。最小为1，最大为50。
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
    * @param int|null $limit 查询作业的每页条目数。最小为1，最大为50。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets sortBy
    *  查询作业排列顺序的指标。默认使用create_time排序。
    *
    * @return string|null
    */
    public function getSortBy()
    {
        return $this->container['sortBy'];
    }

    /**
    * Sets sortBy
    *
    * @param string|null $sortBy 查询作业排列顺序的指标。默认使用create_time排序。
    *
    * @return $this
    */
    public function setSortBy($sortBy)
    {
        $this->container['sortBy'] = $sortBy;
        return $this;
    }

    /**
    * Gets order
    *  查询作业排列顺序，默认为“desc”，降序排序。也可以选择对应的“asc”，升序排序。
    *
    * @return string|null
    */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
    * Sets order
    *
    * @param string|null $order 查询作业排列顺序，默认为“desc”，降序排序。也可以选择对应的“asc”，升序排序。
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
        return $this;
    }

    /**
    * Gets groupBy
    *  查询作业要搜索的分组条件。
    *
    * @return string|null
    */
    public function getGroupBy()
    {
        return $this->container['groupBy'];
    }

    /**
    * Sets groupBy
    *
    * @param string|null $groupBy 查询作业要搜索的分组条件。
    *
    * @return $this
    */
    public function setGroupBy($groupBy)
    {
        $this->container['groupBy'] = $groupBy;
        return $this;
    }

    /**
    * Gets workspaceId
    *  参数解释：工作空间ID。 约束限制：不涉及。 取值范围：0或长度为32的字符串。 默认取值：0。
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId 参数解释：工作空间ID。 约束限制：不涉及。 取值范围：0或长度为32的字符串。 默认取值：0。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets trainType
    *  **参数解释**：在开启自定义作业和精调作业联合查询时，只显示自定义或精调作业。 **约束限制**：不涉及。 **取值范围**：   - job: 只查自定义作业   - ftjob : 只查精调作业 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getTrainType()
    {
        return $this->container['trainType'];
    }

    /**
    * Sets trainType
    *
    * @param string|null $trainType **参数解释**：在开启自定义作业和精调作业联合查询时，只显示自定义或精调作业。 **约束限制**：不涉及。 **取值范围**：   - job: 只查自定义作业   - ftjob : 只查精调作业 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setTrainType($trainType)
    {
        $this->container['trainType'] = $trainType;
        return $this;
    }

    /**
    * Gets filters
    *  查询作业要过滤的一系列条件。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Filter[]|null
    */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
    * Sets filters
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Filter[]|null $filters 查询作业要过滤的一系列条件。
    *
    * @return $this
    */
    public function setFilters($filters)
    {
        $this->container['filters'] = $filters;
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

