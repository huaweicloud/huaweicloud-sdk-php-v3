<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListJobRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListJobRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pageIndex  分页页码，表示从此页开始查询，page_index大于等于0
    * pageSize  每页显示的条目数量，page_size小于等于100
    * search  查询关键字
    * sortField  排序字段
    * sortOrder  排序方式（ASC|DESC）
    * creatorId  创建人
    * buildStatus  构建状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pageIndex' => 'int',
            'pageSize' => 'int',
            'search' => 'string',
            'sortField' => 'string',
            'sortOrder' => 'string',
            'creatorId' => 'string',
            'buildStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pageIndex  分页页码，表示从此页开始查询，page_index大于等于0
    * pageSize  每页显示的条目数量，page_size小于等于100
    * search  查询关键字
    * sortField  排序字段
    * sortOrder  排序方式（ASC|DESC）
    * creatorId  创建人
    * buildStatus  构建状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pageIndex' => null,
        'pageSize' => null,
        'search' => null,
        'sortField' => null,
        'sortOrder' => null,
        'creatorId' => null,
        'buildStatus' => null
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
    * pageIndex  分页页码，表示从此页开始查询，page_index大于等于0
    * pageSize  每页显示的条目数量，page_size小于等于100
    * search  查询关键字
    * sortField  排序字段
    * sortOrder  排序方式（ASC|DESC）
    * creatorId  创建人
    * buildStatus  构建状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pageIndex' => 'page_index',
            'pageSize' => 'page_size',
            'search' => 'search',
            'sortField' => 'sort_field',
            'sortOrder' => 'sort_order',
            'creatorId' => 'creator_id',
            'buildStatus' => 'build_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pageIndex  分页页码，表示从此页开始查询，page_index大于等于0
    * pageSize  每页显示的条目数量，page_size小于等于100
    * search  查询关键字
    * sortField  排序字段
    * sortOrder  排序方式（ASC|DESC）
    * creatorId  创建人
    * buildStatus  构建状态
    *
    * @var string[]
    */
    protected static $setters = [
            'pageIndex' => 'setPageIndex',
            'pageSize' => 'setPageSize',
            'search' => 'setSearch',
            'sortField' => 'setSortField',
            'sortOrder' => 'setSortOrder',
            'creatorId' => 'setCreatorId',
            'buildStatus' => 'setBuildStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pageIndex  分页页码，表示从此页开始查询，page_index大于等于0
    * pageSize  每页显示的条目数量，page_size小于等于100
    * search  查询关键字
    * sortField  排序字段
    * sortOrder  排序方式（ASC|DESC）
    * creatorId  创建人
    * buildStatus  构建状态
    *
    * @var string[]
    */
    protected static $getters = [
            'pageIndex' => 'getPageIndex',
            'pageSize' => 'getPageSize',
            'search' => 'getSearch',
            'sortField' => 'getSortField',
            'sortOrder' => 'getSortOrder',
            'creatorId' => 'getCreatorId',
            'buildStatus' => 'getBuildStatus'
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
        $this->container['pageIndex'] = isset($data['pageIndex']) ? $data['pageIndex'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['search'] = isset($data['search']) ? $data['search'] : null;
        $this->container['sortField'] = isset($data['sortField']) ? $data['sortField'] : null;
        $this->container['sortOrder'] = isset($data['sortOrder']) ? $data['sortOrder'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['buildStatus'] = isset($data['buildStatus']) ? $data['buildStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['pageIndex']) && ($this->container['pageIndex'] < 0)) {
                $invalidProperties[] = "invalid value for 'pageIndex', must be bigger than or equal to 0.";
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
    * Gets pageIndex
    *  分页页码，表示从此页开始查询，page_index大于等于0
    *
    * @return int|null
    */
    public function getPageIndex()
    {
        return $this->container['pageIndex'];
    }

    /**
    * Sets pageIndex
    *
    * @param int|null $pageIndex 分页页码，表示从此页开始查询，page_index大于等于0
    *
    * @return $this
    */
    public function setPageIndex($pageIndex)
    {
        $this->container['pageIndex'] = $pageIndex;
        return $this;
    }

    /**
    * Gets pageSize
    *  每页显示的条目数量，page_size小于等于100
    *
    * @return int|null
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int|null $pageSize 每页显示的条目数量，page_size小于等于100
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets search
    *  查询关键字
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
    * @param string|null $search 查询关键字
    *
    * @return $this
    */
    public function setSearch($search)
    {
        $this->container['search'] = $search;
        return $this;
    }

    /**
    * Gets sortField
    *  排序字段
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
    * @param string|null $sortField 排序字段
    *
    * @return $this
    */
    public function setSortField($sortField)
    {
        $this->container['sortField'] = $sortField;
        return $this;
    }

    /**
    * Gets sortOrder
    *  排序方式（ASC|DESC）
    *
    * @return string|null
    */
    public function getSortOrder()
    {
        return $this->container['sortOrder'];
    }

    /**
    * Sets sortOrder
    *
    * @param string|null $sortOrder 排序方式（ASC|DESC）
    *
    * @return $this
    */
    public function setSortOrder($sortOrder)
    {
        $this->container['sortOrder'] = $sortOrder;
        return $this;
    }

    /**
    * Gets creatorId
    *  创建人
    *
    * @return string|null
    */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
    * Sets creatorId
    *
    * @param string|null $creatorId 创建人
    *
    * @return $this
    */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;
        return $this;
    }

    /**
    * Gets buildStatus
    *  构建状态
    *
    * @return string|null
    */
    public function getBuildStatus()
    {
        return $this->container['buildStatus'];
    }

    /**
    * Sets buildStatus
    *
    * @param string|null $buildStatus 构建状态
    *
    * @return $this
    */
    public function setBuildStatus($buildStatus)
    {
        $this->container['buildStatus'] = $buildStatus;
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

