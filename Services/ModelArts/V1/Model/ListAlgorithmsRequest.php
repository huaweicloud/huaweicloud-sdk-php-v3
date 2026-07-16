<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAlgorithmsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAlgorithmsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * offset  查询算法的偏移量，最小为0。例如设置为1，则表示从第二条开始查。
    * limit  查询算法的限制量。最小为1，最大为50。
    * sortBy  查询算法排列顺序的指标。默认使用create_time排序。
    * order  查询算法排列顺序，默认为“desc”，降序排序。也可以选择对应的“asc”，升序排序。
    * groupBy  查询算法要搜索的分组条件。
    * searches  查询算法所要过滤的条件，如算法名称模糊匹配。
    * workspaceId  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'offset' => 'int',
            'limit' => 'int',
            'sortBy' => 'string',
            'order' => 'string',
            'groupBy' => 'string',
            'searches' => 'string',
            'workspaceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * offset  查询算法的偏移量，最小为0。例如设置为1，则表示从第二条开始查。
    * limit  查询算法的限制量。最小为1，最大为50。
    * sortBy  查询算法排列顺序的指标。默认使用create_time排序。
    * order  查询算法排列顺序，默认为“desc”，降序排序。也可以选择对应的“asc”，升序排序。
    * groupBy  查询算法要搜索的分组条件。
    * searches  查询算法所要过滤的条件，如算法名称模糊匹配。
    * workspaceId  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'offset' => 'int32',
        'limit' => 'int32',
        'sortBy' => null,
        'order' => null,
        'groupBy' => null,
        'searches' => null,
        'workspaceId' => null
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
    * offset  查询算法的偏移量，最小为0。例如设置为1，则表示从第二条开始查。
    * limit  查询算法的限制量。最小为1，最大为50。
    * sortBy  查询算法排列顺序的指标。默认使用create_time排序。
    * order  查询算法排列顺序，默认为“desc”，降序排序。也可以选择对应的“asc”，升序排序。
    * groupBy  查询算法要搜索的分组条件。
    * searches  查询算法所要过滤的条件，如算法名称模糊匹配。
    * workspaceId  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'offset' => 'offset',
            'limit' => 'limit',
            'sortBy' => 'sort_by',
            'order' => 'order',
            'groupBy' => 'group_by',
            'searches' => 'searches',
            'workspaceId' => 'workspace_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * offset  查询算法的偏移量，最小为0。例如设置为1，则表示从第二条开始查。
    * limit  查询算法的限制量。最小为1，最大为50。
    * sortBy  查询算法排列顺序的指标。默认使用create_time排序。
    * order  查询算法排列顺序，默认为“desc”，降序排序。也可以选择对应的“asc”，升序排序。
    * groupBy  查询算法要搜索的分组条件。
    * searches  查询算法所要过滤的条件，如算法名称模糊匹配。
    * workspaceId  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    *
    * @var string[]
    */
    protected static $setters = [
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'sortBy' => 'setSortBy',
            'order' => 'setOrder',
            'groupBy' => 'setGroupBy',
            'searches' => 'setSearches',
            'workspaceId' => 'setWorkspaceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * offset  查询算法的偏移量，最小为0。例如设置为1，则表示从第二条开始查。
    * limit  查询算法的限制量。最小为1，最大为50。
    * sortBy  查询算法排列顺序的指标。默认使用create_time排序。
    * order  查询算法排列顺序，默认为“desc”，降序排序。也可以选择对应的“asc”，升序排序。
    * groupBy  查询算法要搜索的分组条件。
    * searches  查询算法所要过滤的条件，如算法名称模糊匹配。
    * workspaceId  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    *
    * @var string[]
    */
    protected static $getters = [
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'sortBy' => 'getSortBy',
            'order' => 'getOrder',
            'groupBy' => 'getGroupBy',
            'searches' => 'getSearches',
            'workspaceId' => 'getWorkspaceId'
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
        $this->container['searches'] = isset($data['searches']) ? $data['searches'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
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
    *  查询算法的偏移量，最小为0。例如设置为1，则表示从第二条开始查。
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
    * @param int|null $offset 查询算法的偏移量，最小为0。例如设置为1，则表示从第二条开始查。
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
    *  查询算法的限制量。最小为1，最大为50。
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
    * @param int|null $limit 查询算法的限制量。最小为1，最大为50。
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
    *  查询算法排列顺序的指标。默认使用create_time排序。
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
    * @param string|null $sortBy 查询算法排列顺序的指标。默认使用create_time排序。
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
    *  查询算法排列顺序，默认为“desc”，降序排序。也可以选择对应的“asc”，升序排序。
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
    * @param string|null $order 查询算法排列顺序，默认为“desc”，降序排序。也可以选择对应的“asc”，升序排序。
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
    *  查询算法要搜索的分组条件。
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
    * @param string|null $groupBy 查询算法要搜索的分组条件。
    *
    * @return $this
    */
    public function setGroupBy($groupBy)
    {
        $this->container['groupBy'] = $groupBy;
        return $this;
    }

    /**
    * Gets searches
    *  查询算法所要过滤的条件，如算法名称模糊匹配。
    *
    * @return string|null
    */
    public function getSearches()
    {
        return $this->container['searches'];
    }

    /**
    * Sets searches
    *
    * @param string|null $searches 查询算法所要过滤的条件，如算法名称模糊匹配。
    *
    * @return $this
    */
    public function setSearches($searches)
    {
        $this->container['searches'] = $searches;
        return $this;
    }

    /**
    * Gets workspaceId
    *  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
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
    * @param string|null $workspaceId 工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
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

