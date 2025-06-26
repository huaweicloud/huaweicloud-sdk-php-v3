<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListMetricsDataRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListMetricsDataRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  **参数解释**： 集群ID。获取方法请参见[获取集群ID](dws_02_00068.xml)。 **约束限制**： 必须是有效的dws集群ID。 **取值范围**： 36位UUID。 **默认取值**： 不涉及。
    * metricName  **参数解释**： 指标名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * offset  **参数解释**： 分页偏移量，从0开始，页数减1。 **约束限制**： 不涉及。 **取值范围**： 大于等于0。 **默认取值**： 0
    * limit  **参数解释**： 分页单页大小。 **约束限制**： 不涉及。 **取值范围**： 大于0，最大1000。 **默认取值**： 不限制。
    * from  **参数解释**： 采集开始时间，13位时间戳。 **约束限制**： 不涉及。 **取值范围**： 13位时间戳。 **默认取值**： 不涉及。
    * to  **参数解释**： 采集结束时间，13位时间戳。 **约束限制**： 开始时间到结束时间最多不超过一天。 **取值范围**： 13位时间戳。 **默认取值**： 不涉及。
    * orderBy  **参数解释**： 排序字段，固定取值。 **约束限制**： 不涉及。 **取值范围**： ctime：采集时间。 **默认取值**： 不涉及。
    * sortBy  **参数解释**： 描述信息请求。 **约束限制**： 正序还是倒序，固定取值。 **取值范围**： asc：正序。 desc：倒序。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'metricName' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'from' => 'int',
            'to' => 'int',
            'orderBy' => 'string',
            'sortBy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  **参数解释**： 集群ID。获取方法请参见[获取集群ID](dws_02_00068.xml)。 **约束限制**： 必须是有效的dws集群ID。 **取值范围**： 36位UUID。 **默认取值**： 不涉及。
    * metricName  **参数解释**： 指标名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * offset  **参数解释**： 分页偏移量，从0开始，页数减1。 **约束限制**： 不涉及。 **取值范围**： 大于等于0。 **默认取值**： 0
    * limit  **参数解释**： 分页单页大小。 **约束限制**： 不涉及。 **取值范围**： 大于0，最大1000。 **默认取值**： 不限制。
    * from  **参数解释**： 采集开始时间，13位时间戳。 **约束限制**： 不涉及。 **取值范围**： 13位时间戳。 **默认取值**： 不涉及。
    * to  **参数解释**： 采集结束时间，13位时间戳。 **约束限制**： 开始时间到结束时间最多不超过一天。 **取值范围**： 13位时间戳。 **默认取值**： 不涉及。
    * orderBy  **参数解释**： 排序字段，固定取值。 **约束限制**： 不涉及。 **取值范围**： ctime：采集时间。 **默认取值**： 不涉及。
    * sortBy  **参数解释**： 描述信息请求。 **约束限制**： 正序还是倒序，固定取值。 **取值范围**： asc：正序。 desc：倒序。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'metricName' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'from' => 'int64',
        'to' => 'int64',
        'orderBy' => null,
        'sortBy' => null
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
    * metricName  **参数解释**： 指标名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * offset  **参数解释**： 分页偏移量，从0开始，页数减1。 **约束限制**： 不涉及。 **取值范围**： 大于等于0。 **默认取值**： 0
    * limit  **参数解释**： 分页单页大小。 **约束限制**： 不涉及。 **取值范围**： 大于0，最大1000。 **默认取值**： 不限制。
    * from  **参数解释**： 采集开始时间，13位时间戳。 **约束限制**： 不涉及。 **取值范围**： 13位时间戳。 **默认取值**： 不涉及。
    * to  **参数解释**： 采集结束时间，13位时间戳。 **约束限制**： 开始时间到结束时间最多不超过一天。 **取值范围**： 13位时间戳。 **默认取值**： 不涉及。
    * orderBy  **参数解释**： 排序字段，固定取值。 **约束限制**： 不涉及。 **取值范围**： ctime：采集时间。 **默认取值**： 不涉及。
    * sortBy  **参数解释**： 描述信息请求。 **约束限制**： 正序还是倒序，固定取值。 **取值范围**： asc：正序。 desc：倒序。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'metricName' => 'metric_name',
            'offset' => 'offset',
            'limit' => 'limit',
            'from' => 'from',
            'to' => 'to',
            'orderBy' => 'order_by',
            'sortBy' => 'sort_by'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  **参数解释**： 集群ID。获取方法请参见[获取集群ID](dws_02_00068.xml)。 **约束限制**： 必须是有效的dws集群ID。 **取值范围**： 36位UUID。 **默认取值**： 不涉及。
    * metricName  **参数解释**： 指标名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * offset  **参数解释**： 分页偏移量，从0开始，页数减1。 **约束限制**： 不涉及。 **取值范围**： 大于等于0。 **默认取值**： 0
    * limit  **参数解释**： 分页单页大小。 **约束限制**： 不涉及。 **取值范围**： 大于0，最大1000。 **默认取值**： 不限制。
    * from  **参数解释**： 采集开始时间，13位时间戳。 **约束限制**： 不涉及。 **取值范围**： 13位时间戳。 **默认取值**： 不涉及。
    * to  **参数解释**： 采集结束时间，13位时间戳。 **约束限制**： 开始时间到结束时间最多不超过一天。 **取值范围**： 13位时间戳。 **默认取值**： 不涉及。
    * orderBy  **参数解释**： 排序字段，固定取值。 **约束限制**： 不涉及。 **取值范围**： ctime：采集时间。 **默认取值**： 不涉及。
    * sortBy  **参数解释**： 描述信息请求。 **约束限制**： 正序还是倒序，固定取值。 **取值范围**： asc：正序。 desc：倒序。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'metricName' => 'setMetricName',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'from' => 'setFrom',
            'to' => 'setTo',
            'orderBy' => 'setOrderBy',
            'sortBy' => 'setSortBy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  **参数解释**： 集群ID。获取方法请参见[获取集群ID](dws_02_00068.xml)。 **约束限制**： 必须是有效的dws集群ID。 **取值范围**： 36位UUID。 **默认取值**： 不涉及。
    * metricName  **参数解释**： 指标名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * offset  **参数解释**： 分页偏移量，从0开始，页数减1。 **约束限制**： 不涉及。 **取值范围**： 大于等于0。 **默认取值**： 0
    * limit  **参数解释**： 分页单页大小。 **约束限制**： 不涉及。 **取值范围**： 大于0，最大1000。 **默认取值**： 不限制。
    * from  **参数解释**： 采集开始时间，13位时间戳。 **约束限制**： 不涉及。 **取值范围**： 13位时间戳。 **默认取值**： 不涉及。
    * to  **参数解释**： 采集结束时间，13位时间戳。 **约束限制**： 开始时间到结束时间最多不超过一天。 **取值范围**： 13位时间戳。 **默认取值**： 不涉及。
    * orderBy  **参数解释**： 排序字段，固定取值。 **约束限制**： 不涉及。 **取值范围**： ctime：采集时间。 **默认取值**： 不涉及。
    * sortBy  **参数解释**： 描述信息请求。 **约束限制**： 正序还是倒序，固定取值。 **取值范围**： asc：正序。 desc：倒序。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'metricName' => 'getMetricName',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'from' => 'getFrom',
            'to' => 'getTo',
            'orderBy' => 'getOrderBy',
            'sortBy' => 'getSortBy'
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
        $this->container['metricName'] = isset($data['metricName']) ? $data['metricName'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['orderBy'] = isset($data['orderBy']) ? $data['orderBy'] : null;
        $this->container['sortBy'] = isset($data['sortBy']) ? $data['sortBy'] : null;
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
        if ($this->container['metricName'] === null) {
            $invalidProperties[] = "'metricName' can't be null";
        }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
        if ($this->container['from'] === null) {
            $invalidProperties[] = "'from' can't be null";
        }
        if ($this->container['to'] === null) {
            $invalidProperties[] = "'to' can't be null";
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
    * Gets metricName
    *  **参数解释**： 指标名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getMetricName()
    {
        return $this->container['metricName'];
    }

    /**
    * Sets metricName
    *
    * @param string $metricName **参数解释**： 指标名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setMetricName($metricName)
    {
        $this->container['metricName'] = $metricName;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**： 分页偏移量，从0开始，页数减1。 **约束限制**： 不涉及。 **取值范围**： 大于等于0。 **默认取值**： 0
    *
    * @return int
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int $offset **参数解释**： 分页偏移量，从0开始，页数减1。 **约束限制**： 不涉及。 **取值范围**： 大于等于0。 **默认取值**： 0
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
    *  **参数解释**： 分页单页大小。 **约束限制**： 不涉及。 **取值范围**： 大于0，最大1000。 **默认取值**： 不限制。
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit **参数解释**： 分页单页大小。 **约束限制**： 不涉及。 **取值范围**： 大于0，最大1000。 **默认取值**： 不限制。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets from
    *  **参数解释**： 采集开始时间，13位时间戳。 **约束限制**： 不涉及。 **取值范围**： 13位时间戳。 **默认取值**： 不涉及。
    *
    * @return int
    */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
    * Sets from
    *
    * @param int $from **参数解释**： 采集开始时间，13位时间戳。 **约束限制**： 不涉及。 **取值范围**： 13位时间戳。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setFrom($from)
    {
        $this->container['from'] = $from;
        return $this;
    }

    /**
    * Gets to
    *  **参数解释**： 采集结束时间，13位时间戳。 **约束限制**： 开始时间到结束时间最多不超过一天。 **取值范围**： 13位时间戳。 **默认取值**： 不涉及。
    *
    * @return int
    */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
    * Sets to
    *
    * @param int $to **参数解释**： 采集结束时间，13位时间戳。 **约束限制**： 开始时间到结束时间最多不超过一天。 **取值范围**： 13位时间戳。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setTo($to)
    {
        $this->container['to'] = $to;
        return $this;
    }

    /**
    * Gets orderBy
    *  **参数解释**： 排序字段，固定取值。 **约束限制**： 不涉及。 **取值范围**： ctime：采集时间。 **默认取值**： 不涉及。
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
    * @param string|null $orderBy **参数解释**： 排序字段，固定取值。 **约束限制**： 不涉及。 **取值范围**： ctime：采集时间。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setOrderBy($orderBy)
    {
        $this->container['orderBy'] = $orderBy;
        return $this;
    }

    /**
    * Gets sortBy
    *  **参数解释**： 描述信息请求。 **约束限制**： 正序还是倒序，固定取值。 **取值范围**： asc：正序。 desc：倒序。 **默认取值**： 不涉及。
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
    * @param string|null $sortBy **参数解释**： 描述信息请求。 **约束限制**： 正序还是倒序，固定取值。 **取值范围**： asc：正序。 desc：倒序。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setSortBy($sortBy)
    {
        $this->container['sortBy'] = $sortBy;
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

