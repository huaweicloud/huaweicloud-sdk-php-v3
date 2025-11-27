<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListReposRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListReposRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterid  集群id
    * limit  分页获取列表时，页的大小，默认为-1
    * offset  分页获取列表时，起始偏移量，默认为0
    * orderBy  分页获取列表时，排序参数，支持create_at和update_at，默认create_at： - create_at：按创建时间排序 - update_at：按更新时间排序
    * order  分页获取列表时，排序方向，支持desc和asc，默认desc： - desc：降序排序 - asc：升序排序
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterid' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'orderBy' => 'string',
            'order' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterid  集群id
    * limit  分页获取列表时，页的大小，默认为-1
    * offset  分页获取列表时，起始偏移量，默认为0
    * orderBy  分页获取列表时，排序参数，支持create_at和update_at，默认create_at： - create_at：按创建时间排序 - update_at：按更新时间排序
    * order  分页获取列表时，排序方向，支持desc和asc，默认desc： - desc：降序排序 - asc：升序排序
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterid' => null,
        'limit' => 'int32',
        'offset' => 'int32',
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
    * clusterid  集群id
    * limit  分页获取列表时，页的大小，默认为-1
    * offset  分页获取列表时，起始偏移量，默认为0
    * orderBy  分页获取列表时，排序参数，支持create_at和update_at，默认create_at： - create_at：按创建时间排序 - update_at：按更新时间排序
    * order  分页获取列表时，排序方向，支持desc和asc，默认desc： - desc：降序排序 - asc：升序排序
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterid' => 'clusterid',
            'limit' => 'limit',
            'offset' => 'offset',
            'orderBy' => 'order_by',
            'order' => 'order'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterid  集群id
    * limit  分页获取列表时，页的大小，默认为-1
    * offset  分页获取列表时，起始偏移量，默认为0
    * orderBy  分页获取列表时，排序参数，支持create_at和update_at，默认create_at： - create_at：按创建时间排序 - update_at：按更新时间排序
    * order  分页获取列表时，排序方向，支持desc和asc，默认desc： - desc：降序排序 - asc：升序排序
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterid' => 'setClusterid',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'orderBy' => 'setOrderBy',
            'order' => 'setOrder'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterid  集群id
    * limit  分页获取列表时，页的大小，默认为-1
    * offset  分页获取列表时，起始偏移量，默认为0
    * orderBy  分页获取列表时，排序参数，支持create_at和update_at，默认create_at： - create_at：按创建时间排序 - update_at：按更新时间排序
    * order  分页获取列表时，排序方向，支持desc和asc，默认desc： - desc：降序排序 - asc：升序排序
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterid' => 'getClusterid',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
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
        $this->container['clusterid'] = isset($data['clusterid']) ? $data['clusterid'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
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
        if ($this->container['clusterid'] === null) {
            $invalidProperties[] = "'clusterid' can't be null";
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
    * Gets clusterid
    *  集群id
    *
    * @return string
    */
    public function getClusterid()
    {
        return $this->container['clusterid'];
    }

    /**
    * Sets clusterid
    *
    * @param string $clusterid 集群id
    *
    * @return $this
    */
    public function setClusterid($clusterid)
    {
        $this->container['clusterid'] = $clusterid;
        return $this;
    }

    /**
    * Gets limit
    *  分页获取列表时，页的大小，默认为-1
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
    * @param int|null $limit 分页获取列表时，页的大小，默认为-1
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
    *  分页获取列表时，起始偏移量，默认为0
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
    * @param int|null $offset 分页获取列表时，起始偏移量，默认为0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets orderBy
    *  分页获取列表时，排序参数，支持create_at和update_at，默认create_at： - create_at：按创建时间排序 - update_at：按更新时间排序
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
    * @param string|null $orderBy 分页获取列表时，排序参数，支持create_at和update_at，默认create_at： - create_at：按创建时间排序 - update_at：按更新时间排序
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
    *  分页获取列表时，排序方向，支持desc和asc，默认desc： - desc：降序排序 - asc：升序排序
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
    * @param string|null $order 分页获取列表时，排序方向，支持desc和asc，默认desc： - desc：降序排序 - asc：升序排序
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

