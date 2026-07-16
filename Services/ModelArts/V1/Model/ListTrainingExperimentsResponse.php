<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTrainingExperimentsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTrainingExperimentsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * total  **参数解释**：查询到所有训练实验总数。 **取值范围**：不涉及。
    * count  **参数解释**：查询到所有符合查询条件的训练实验总数。 **取值范围**：不涉及。
    * limit  **参数解释**：查询到所有训练实验限制个数。 **取值范围**：不涉及。
    * offset  **参数解释**：查询到所有训练实验查询偏移量。  **取值范围**：不涉及。
    * sortBy  **参数解释**：查询到所有训练实验排序依赖字段。 **取值范围**：不涉及。
    * order  **参数解释**：查询到所有训练实验排序方式。  **取值范围**： - asc：升序 - desc：降序
    * items  **参数解释**：查询到所有符合查询条件的训练实验详情。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'total' => 'int',
            'count' => 'int',
            'limit' => 'int',
            'offset' => 'int',
            'sortBy' => 'string',
            'order' => 'string',
            'items' => '\HuaweiCloud\SDK\ModelArts\V1\Model\TrainingExperimentResponse[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * total  **参数解释**：查询到所有训练实验总数。 **取值范围**：不涉及。
    * count  **参数解释**：查询到所有符合查询条件的训练实验总数。 **取值范围**：不涉及。
    * limit  **参数解释**：查询到所有训练实验限制个数。 **取值范围**：不涉及。
    * offset  **参数解释**：查询到所有训练实验查询偏移量。  **取值范围**：不涉及。
    * sortBy  **参数解释**：查询到所有训练实验排序依赖字段。 **取值范围**：不涉及。
    * order  **参数解释**：查询到所有训练实验排序方式。  **取值范围**： - asc：升序 - desc：降序
    * items  **参数解释**：查询到所有符合查询条件的训练实验详情。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'total' => 'int32',
        'count' => 'int32',
        'limit' => 'int32',
        'offset' => 'int32',
        'sortBy' => null,
        'order' => null,
        'items' => null
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
    * total  **参数解释**：查询到所有训练实验总数。 **取值范围**：不涉及。
    * count  **参数解释**：查询到所有符合查询条件的训练实验总数。 **取值范围**：不涉及。
    * limit  **参数解释**：查询到所有训练实验限制个数。 **取值范围**：不涉及。
    * offset  **参数解释**：查询到所有训练实验查询偏移量。  **取值范围**：不涉及。
    * sortBy  **参数解释**：查询到所有训练实验排序依赖字段。 **取值范围**：不涉及。
    * order  **参数解释**：查询到所有训练实验排序方式。  **取值范围**： - asc：升序 - desc：降序
    * items  **参数解释**：查询到所有符合查询条件的训练实验详情。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'total' => 'total',
            'count' => 'count',
            'limit' => 'limit',
            'offset' => 'offset',
            'sortBy' => 'sort_by',
            'order' => 'order',
            'items' => 'items'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * total  **参数解释**：查询到所有训练实验总数。 **取值范围**：不涉及。
    * count  **参数解释**：查询到所有符合查询条件的训练实验总数。 **取值范围**：不涉及。
    * limit  **参数解释**：查询到所有训练实验限制个数。 **取值范围**：不涉及。
    * offset  **参数解释**：查询到所有训练实验查询偏移量。  **取值范围**：不涉及。
    * sortBy  **参数解释**：查询到所有训练实验排序依赖字段。 **取值范围**：不涉及。
    * order  **参数解释**：查询到所有训练实验排序方式。  **取值范围**： - asc：升序 - desc：降序
    * items  **参数解释**：查询到所有符合查询条件的训练实验详情。
    *
    * @var string[]
    */
    protected static $setters = [
            'total' => 'setTotal',
            'count' => 'setCount',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'sortBy' => 'setSortBy',
            'order' => 'setOrder',
            'items' => 'setItems'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * total  **参数解释**：查询到所有训练实验总数。 **取值范围**：不涉及。
    * count  **参数解释**：查询到所有符合查询条件的训练实验总数。 **取值范围**：不涉及。
    * limit  **参数解释**：查询到所有训练实验限制个数。 **取值范围**：不涉及。
    * offset  **参数解释**：查询到所有训练实验查询偏移量。  **取值范围**：不涉及。
    * sortBy  **参数解释**：查询到所有训练实验排序依赖字段。 **取值范围**：不涉及。
    * order  **参数解释**：查询到所有训练实验排序方式。  **取值范围**： - asc：升序 - desc：降序
    * items  **参数解释**：查询到所有符合查询条件的训练实验详情。
    *
    * @var string[]
    */
    protected static $getters = [
            'total' => 'getTotal',
            'count' => 'getCount',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'sortBy' => 'getSortBy',
            'order' => 'getOrder',
            'items' => 'getItems'
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
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['sortBy'] = isset($data['sortBy']) ? $data['sortBy'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
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
    * Gets total
    *  **参数解释**：查询到所有训练实验总数。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total **参数解释**：查询到所有训练实验总数。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets count
    *  **参数解释**：查询到所有符合查询条件的训练实验总数。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count **参数解释**：查询到所有符合查询条件的训练实验总数。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**：查询到所有训练实验限制个数。 **取值范围**：不涉及。
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
    * @param int|null $limit **参数解释**：查询到所有训练实验限制个数。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**：查询到所有训练实验查询偏移量。  **取值范围**：不涉及。
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
    * @param int|null $offset **参数解释**：查询到所有训练实验查询偏移量。  **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets sortBy
    *  **参数解释**：查询到所有训练实验排序依赖字段。 **取值范围**：不涉及。
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
    * @param string|null $sortBy **参数解释**：查询到所有训练实验排序依赖字段。 **取值范围**：不涉及。
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
    *  **参数解释**：查询到所有训练实验排序方式。  **取值范围**： - asc：升序 - desc：降序
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
    * @param string|null $order **参数解释**：查询到所有训练实验排序方式。  **取值范围**： - asc：升序 - desc：降序
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
        return $this;
    }

    /**
    * Gets items
    *  **参数解释**：查询到所有符合查询条件的训练实验详情。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\TrainingExperimentResponse[]|null
    */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
    * Sets items
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\TrainingExperimentResponse[]|null $items **参数解释**：查询到所有符合查询条件的训练实验详情。
    *
    * @return $this
    */
    public function setItems($items)
    {
        $this->container['items'] = $items;
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

