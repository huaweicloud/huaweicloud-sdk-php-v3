<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListClusterNodesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListClusterNodesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  集群ID
    * deleted  是否被删除，true/false
    * nodeIds  节点ID列表
    * offset  分页查询，偏移
    * limit  分页查询，每页显示的条目数量
    * filterBy  过滤字段
    * filter  过滤字段内容
    * orderBy  排序字段
    * order  排序：升序/降序
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'deleted' => 'string',
            'nodeIds' => 'string[]',
            'offset' => 'int',
            'limit' => 'int',
            'filterBy' => 'string',
            'filter' => 'string',
            'orderBy' => 'string',
            'order' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  集群ID
    * deleted  是否被删除，true/false
    * nodeIds  节点ID列表
    * offset  分页查询，偏移
    * limit  分页查询，每页显示的条目数量
    * filterBy  过滤字段
    * filter  过滤字段内容
    * orderBy  排序字段
    * order  排序：升序/降序
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'deleted' => null,
        'nodeIds' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'filterBy' => null,
        'filter' => null,
        'orderBy' => null,
        'order' => null
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
    * clusterId  集群ID
    * deleted  是否被删除，true/false
    * nodeIds  节点ID列表
    * offset  分页查询，偏移
    * limit  分页查询，每页显示的条目数量
    * filterBy  过滤字段
    * filter  过滤字段内容
    * orderBy  排序字段
    * order  排序：升序/降序
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'deleted' => 'deleted',
            'nodeIds' => 'node_ids',
            'offset' => 'offset',
            'limit' => 'limit',
            'filterBy' => 'filter_by',
            'filter' => 'filter',
            'orderBy' => 'order_by',
            'order' => 'order'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  集群ID
    * deleted  是否被删除，true/false
    * nodeIds  节点ID列表
    * offset  分页查询，偏移
    * limit  分页查询，每页显示的条目数量
    * filterBy  过滤字段
    * filter  过滤字段内容
    * orderBy  排序字段
    * order  排序：升序/降序
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'deleted' => 'setDeleted',
            'nodeIds' => 'setNodeIds',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'filterBy' => 'setFilterBy',
            'filter' => 'setFilter',
            'orderBy' => 'setOrderBy',
            'order' => 'setOrder'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  集群ID
    * deleted  是否被删除，true/false
    * nodeIds  节点ID列表
    * offset  分页查询，偏移
    * limit  分页查询，每页显示的条目数量
    * filterBy  过滤字段
    * filter  过滤字段内容
    * orderBy  排序字段
    * order  排序：升序/降序
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'deleted' => 'getDeleted',
            'nodeIds' => 'getNodeIds',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'filterBy' => 'getFilterBy',
            'filter' => 'getFilter',
            'orderBy' => 'getOrderBy',
            'order' => 'getOrder'
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
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['nodeIds'] = isset($data['nodeIds']) ? $data['nodeIds'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['filterBy'] = isset($data['filterBy']) ? $data['filterBy'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['orderBy'] = isset($data['orderBy']) ? $data['orderBy'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
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
    *  集群ID
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
    * @param string $clusterId 集群ID
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets deleted
    *  是否被删除，true/false
    *
    * @return string|null
    */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
    * Sets deleted
    *
    * @param string|null $deleted 是否被删除，true/false
    *
    * @return $this
    */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;
        return $this;
    }

    /**
    * Gets nodeIds
    *  节点ID列表
    *
    * @return string[]|null
    */
    public function getNodeIds()
    {
        return $this->container['nodeIds'];
    }

    /**
    * Sets nodeIds
    *
    * @param string[]|null $nodeIds 节点ID列表
    *
    * @return $this
    */
    public function setNodeIds($nodeIds)
    {
        $this->container['nodeIds'] = $nodeIds;
        return $this;
    }

    /**
    * Gets offset
    *  分页查询，偏移
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
    * @param int|null $offset 分页查询，偏移
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
    *  分页查询，每页显示的条目数量
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
    * @param int|null $limit 分页查询，每页显示的条目数量
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets filterBy
    *  过滤字段
    *
    * @return string|null
    */
    public function getFilterBy()
    {
        return $this->container['filterBy'];
    }

    /**
    * Sets filterBy
    *
    * @param string|null $filterBy 过滤字段
    *
    * @return $this
    */
    public function setFilterBy($filterBy)
    {
        $this->container['filterBy'] = $filterBy;
        return $this;
    }

    /**
    * Gets filter
    *  过滤字段内容
    *
    * @return string|null
    */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
    * Sets filter
    *
    * @param string|null $filter 过滤字段内容
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
    *  排序字段
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
    * @param string|null $orderBy 排序字段
    *
    * @return $this
    */
    public function setOrderBy($orderBy)
    {
        $this->container['orderBy'] = $orderBy;
        return $this;
    }

    /**
    * Gets order
    *  排序：升序/降序
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
    * @param string|null $order 排序：升序/降序
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
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

