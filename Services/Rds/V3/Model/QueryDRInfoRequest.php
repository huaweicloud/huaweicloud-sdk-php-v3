<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryDRInfoRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryDRInfoRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  容灾关系id
    * status  容灾搭建状态
    * masterInstanceId  灾备实例id
    * masterRegion  主实例region
    * slaveInstanceId  灾备实例id
    * slaveRegion  灾备实例region
    * createAtStart  创建起始时间
    * createAtEnd  创建结束时间
    * order  排序方式。 DESC，降序。 ASC，升序。 默认降序。
    * sortField  排序字段。 status 容灾搭建状态。 time 容灾搭建时间。 master_region 主实例region。 slave_region 灾备实例region 默认容灾搭建时间。
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。默认为10，不能为负数，最小值为1，最大值为100。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'status' => 'string',
            'masterInstanceId' => 'string',
            'masterRegion' => 'string',
            'slaveInstanceId' => 'string',
            'slaveRegion' => 'string',
            'createAtStart' => 'int',
            'createAtEnd' => 'int',
            'order' => 'string',
            'sortField' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  容灾关系id
    * status  容灾搭建状态
    * masterInstanceId  灾备实例id
    * masterRegion  主实例region
    * slaveInstanceId  灾备实例id
    * slaveRegion  灾备实例region
    * createAtStart  创建起始时间
    * createAtEnd  创建结束时间
    * order  排序方式。 DESC，降序。 ASC，升序。 默认降序。
    * sortField  排序字段。 status 容灾搭建状态。 time 容灾搭建时间。 master_region 主实例region。 slave_region 灾备实例region 默认容灾搭建时间。
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。默认为10，不能为负数，最小值为1，最大值为100。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'status' => null,
        'masterInstanceId' => null,
        'masterRegion' => null,
        'slaveInstanceId' => null,
        'slaveRegion' => null,
        'createAtStart' => 'int64',
        'createAtEnd' => 'int64',
        'order' => null,
        'sortField' => null,
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
    * id  容灾关系id
    * status  容灾搭建状态
    * masterInstanceId  灾备实例id
    * masterRegion  主实例region
    * slaveInstanceId  灾备实例id
    * slaveRegion  灾备实例region
    * createAtStart  创建起始时间
    * createAtEnd  创建结束时间
    * order  排序方式。 DESC，降序。 ASC，升序。 默认降序。
    * sortField  排序字段。 status 容灾搭建状态。 time 容灾搭建时间。 master_region 主实例region。 slave_region 灾备实例region 默认容灾搭建时间。
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。默认为10，不能为负数，最小值为1，最大值为100。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'status' => 'status',
            'masterInstanceId' => 'master_instance_id',
            'masterRegion' => 'master_region',
            'slaveInstanceId' => 'slave_instance_id',
            'slaveRegion' => 'slave_region',
            'createAtStart' => 'create_at_start',
            'createAtEnd' => 'create_at_end',
            'order' => 'order',
            'sortField' => 'sort_field',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  容灾关系id
    * status  容灾搭建状态
    * masterInstanceId  灾备实例id
    * masterRegion  主实例region
    * slaveInstanceId  灾备实例id
    * slaveRegion  灾备实例region
    * createAtStart  创建起始时间
    * createAtEnd  创建结束时间
    * order  排序方式。 DESC，降序。 ASC，升序。 默认降序。
    * sortField  排序字段。 status 容灾搭建状态。 time 容灾搭建时间。 master_region 主实例region。 slave_region 灾备实例region 默认容灾搭建时间。
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。默认为10，不能为负数，最小值为1，最大值为100。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'status' => 'setStatus',
            'masterInstanceId' => 'setMasterInstanceId',
            'masterRegion' => 'setMasterRegion',
            'slaveInstanceId' => 'setSlaveInstanceId',
            'slaveRegion' => 'setSlaveRegion',
            'createAtStart' => 'setCreateAtStart',
            'createAtEnd' => 'setCreateAtEnd',
            'order' => 'setOrder',
            'sortField' => 'setSortField',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  容灾关系id
    * status  容灾搭建状态
    * masterInstanceId  灾备实例id
    * masterRegion  主实例region
    * slaveInstanceId  灾备实例id
    * slaveRegion  灾备实例region
    * createAtStart  创建起始时间
    * createAtEnd  创建结束时间
    * order  排序方式。 DESC，降序。 ASC，升序。 默认降序。
    * sortField  排序字段。 status 容灾搭建状态。 time 容灾搭建时间。 master_region 主实例region。 slave_region 灾备实例region 默认容灾搭建时间。
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。默认为10，不能为负数，最小值为1，最大值为100。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'status' => 'getStatus',
            'masterInstanceId' => 'getMasterInstanceId',
            'masterRegion' => 'getMasterRegion',
            'slaveInstanceId' => 'getSlaveInstanceId',
            'slaveRegion' => 'getSlaveRegion',
            'createAtStart' => 'getCreateAtStart',
            'createAtEnd' => 'getCreateAtEnd',
            'order' => 'getOrder',
            'sortField' => 'getSortField',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['masterInstanceId'] = isset($data['masterInstanceId']) ? $data['masterInstanceId'] : null;
        $this->container['masterRegion'] = isset($data['masterRegion']) ? $data['masterRegion'] : null;
        $this->container['slaveInstanceId'] = isset($data['slaveInstanceId']) ? $data['slaveInstanceId'] : null;
        $this->container['slaveRegion'] = isset($data['slaveRegion']) ? $data['slaveRegion'] : null;
        $this->container['createAtStart'] = isset($data['createAtStart']) ? $data['createAtStart'] : null;
        $this->container['createAtEnd'] = isset($data['createAtEnd']) ? $data['createAtEnd'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['sortField'] = isset($data['sortField']) ? $data['sortField'] : null;
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
    * Gets id
    *  容灾关系id
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 容灾关系id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets status
    *  容灾搭建状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 容灾搭建状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets masterInstanceId
    *  灾备实例id
    *
    * @return string|null
    */
    public function getMasterInstanceId()
    {
        return $this->container['masterInstanceId'];
    }

    /**
    * Sets masterInstanceId
    *
    * @param string|null $masterInstanceId 灾备实例id
    *
    * @return $this
    */
    public function setMasterInstanceId($masterInstanceId)
    {
        $this->container['masterInstanceId'] = $masterInstanceId;
        return $this;
    }

    /**
    * Gets masterRegion
    *  主实例region
    *
    * @return string|null
    */
    public function getMasterRegion()
    {
        return $this->container['masterRegion'];
    }

    /**
    * Sets masterRegion
    *
    * @param string|null $masterRegion 主实例region
    *
    * @return $this
    */
    public function setMasterRegion($masterRegion)
    {
        $this->container['masterRegion'] = $masterRegion;
        return $this;
    }

    /**
    * Gets slaveInstanceId
    *  灾备实例id
    *
    * @return string|null
    */
    public function getSlaveInstanceId()
    {
        return $this->container['slaveInstanceId'];
    }

    /**
    * Sets slaveInstanceId
    *
    * @param string|null $slaveInstanceId 灾备实例id
    *
    * @return $this
    */
    public function setSlaveInstanceId($slaveInstanceId)
    {
        $this->container['slaveInstanceId'] = $slaveInstanceId;
        return $this;
    }

    /**
    * Gets slaveRegion
    *  灾备实例region
    *
    * @return string|null
    */
    public function getSlaveRegion()
    {
        return $this->container['slaveRegion'];
    }

    /**
    * Sets slaveRegion
    *
    * @param string|null $slaveRegion 灾备实例region
    *
    * @return $this
    */
    public function setSlaveRegion($slaveRegion)
    {
        $this->container['slaveRegion'] = $slaveRegion;
        return $this;
    }

    /**
    * Gets createAtStart
    *  创建起始时间
    *
    * @return int|null
    */
    public function getCreateAtStart()
    {
        return $this->container['createAtStart'];
    }

    /**
    * Sets createAtStart
    *
    * @param int|null $createAtStart 创建起始时间
    *
    * @return $this
    */
    public function setCreateAtStart($createAtStart)
    {
        $this->container['createAtStart'] = $createAtStart;
        return $this;
    }

    /**
    * Gets createAtEnd
    *  创建结束时间
    *
    * @return int|null
    */
    public function getCreateAtEnd()
    {
        return $this->container['createAtEnd'];
    }

    /**
    * Sets createAtEnd
    *
    * @param int|null $createAtEnd 创建结束时间
    *
    * @return $this
    */
    public function setCreateAtEnd($createAtEnd)
    {
        $this->container['createAtEnd'] = $createAtEnd;
        return $this;
    }

    /**
    * Gets order
    *  排序方式。 DESC，降序。 ASC，升序。 默认降序。
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
    * @param string|null $order 排序方式。 DESC，降序。 ASC，升序。 默认降序。
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
        return $this;
    }

    /**
    * Gets sortField
    *  排序字段。 status 容灾搭建状态。 time 容灾搭建时间。 master_region 主实例region。 slave_region 灾备实例region 默认容灾搭建时间。
    *
    * @return string|null
    */
    public function getSortField()
    {
        return $this->container['sortField'];
    }

    /**
    * Sets sortField
    *
    * @param string|null $sortField 排序字段。 status 容灾搭建状态。 time 容灾搭建时间。 master_region 主实例region。 slave_region 灾备实例region 默认容灾搭建时间。
    *
    * @return $this
    */
    public function setSortField($sortField)
    {
        $this->container['sortField'] = $sortField;
        return $this;
    }

    /**
    * Gets offset
    *  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
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
    * @param int|null $offset 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
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
    *  查询记录数。默认为10，不能为负数，最小值为1，最大值为100。
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
    * @param int|null $limit 查询记录数。默认为10，不能为负数，最小值为1，最大值为100。
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

