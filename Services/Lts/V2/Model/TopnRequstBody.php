<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TopnRequstBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TopnRequstBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * endTime  结束时间时间戳，毫秒时间
    * isDesc  是否降序  true / false
    * resourceType  资源类型，log_group / log_stream / tenant
    * sortBy  排序依据，index/write/storage/basicTransfer/seniorTransfer，必须是search_list中存在的数据
    * startTime  开始时间时间戳，毫秒时间，最多支持30天范围内的查询
    * topn  查询前多少数据，范围1~100
    * filter  过滤条件 {     \"log_group_id\": \"xxxxxx\" }过滤器，为一个map结构，键为过滤属性，值为属性值，不支持模糊匹配
    * searchList  查询数据类型，字符串数组可多种搭配，只能在index/write/storage/basicTransfer/seniorTransfer中选填
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'endTime' => 'int',
            'isDesc' => 'bool',
            'resourceType' => 'string',
            'sortBy' => 'string',
            'startTime' => 'int',
            'topn' => 'int',
            'filter' => 'map[string,string]',
            'searchList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * endTime  结束时间时间戳，毫秒时间
    * isDesc  是否降序  true / false
    * resourceType  资源类型，log_group / log_stream / tenant
    * sortBy  排序依据，index/write/storage/basicTransfer/seniorTransfer，必须是search_list中存在的数据
    * startTime  开始时间时间戳，毫秒时间，最多支持30天范围内的查询
    * topn  查询前多少数据，范围1~100
    * filter  过滤条件 {     \"log_group_id\": \"xxxxxx\" }过滤器，为一个map结构，键为过滤属性，值为属性值，不支持模糊匹配
    * searchList  查询数据类型，字符串数组可多种搭配，只能在index/write/storage/basicTransfer/seniorTransfer中选填
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'endTime' => 'int64',
        'isDesc' => null,
        'resourceType' => null,
        'sortBy' => null,
        'startTime' => 'int64',
        'topn' => 'int32',
        'filter' => null,
        'searchList' => null
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
    * endTime  结束时间时间戳，毫秒时间
    * isDesc  是否降序  true / false
    * resourceType  资源类型，log_group / log_stream / tenant
    * sortBy  排序依据，index/write/storage/basicTransfer/seniorTransfer，必须是search_list中存在的数据
    * startTime  开始时间时间戳，毫秒时间，最多支持30天范围内的查询
    * topn  查询前多少数据，范围1~100
    * filter  过滤条件 {     \"log_group_id\": \"xxxxxx\" }过滤器，为一个map结构，键为过滤属性，值为属性值，不支持模糊匹配
    * searchList  查询数据类型，字符串数组可多种搭配，只能在index/write/storage/basicTransfer/seniorTransfer中选填
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'endTime' => 'end_time',
            'isDesc' => 'is_desc',
            'resourceType' => 'resource_type',
            'sortBy' => 'sort_by',
            'startTime' => 'start_time',
            'topn' => 'topn',
            'filter' => 'filter',
            'searchList' => 'search_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * endTime  结束时间时间戳，毫秒时间
    * isDesc  是否降序  true / false
    * resourceType  资源类型，log_group / log_stream / tenant
    * sortBy  排序依据，index/write/storage/basicTransfer/seniorTransfer，必须是search_list中存在的数据
    * startTime  开始时间时间戳，毫秒时间，最多支持30天范围内的查询
    * topn  查询前多少数据，范围1~100
    * filter  过滤条件 {     \"log_group_id\": \"xxxxxx\" }过滤器，为一个map结构，键为过滤属性，值为属性值，不支持模糊匹配
    * searchList  查询数据类型，字符串数组可多种搭配，只能在index/write/storage/basicTransfer/seniorTransfer中选填
    *
    * @var string[]
    */
    protected static $setters = [
            'endTime' => 'setEndTime',
            'isDesc' => 'setIsDesc',
            'resourceType' => 'setResourceType',
            'sortBy' => 'setSortBy',
            'startTime' => 'setStartTime',
            'topn' => 'setTopn',
            'filter' => 'setFilter',
            'searchList' => 'setSearchList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * endTime  结束时间时间戳，毫秒时间
    * isDesc  是否降序  true / false
    * resourceType  资源类型，log_group / log_stream / tenant
    * sortBy  排序依据，index/write/storage/basicTransfer/seniorTransfer，必须是search_list中存在的数据
    * startTime  开始时间时间戳，毫秒时间，最多支持30天范围内的查询
    * topn  查询前多少数据，范围1~100
    * filter  过滤条件 {     \"log_group_id\": \"xxxxxx\" }过滤器，为一个map结构，键为过滤属性，值为属性值，不支持模糊匹配
    * searchList  查询数据类型，字符串数组可多种搭配，只能在index/write/storage/basicTransfer/seniorTransfer中选填
    *
    * @var string[]
    */
    protected static $getters = [
            'endTime' => 'getEndTime',
            'isDesc' => 'getIsDesc',
            'resourceType' => 'getResourceType',
            'sortBy' => 'getSortBy',
            'startTime' => 'getStartTime',
            'topn' => 'getTopn',
            'filter' => 'getFilter',
            'searchList' => 'getSearchList'
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
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['isDesc'] = isset($data['isDesc']) ? $data['isDesc'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['sortBy'] = isset($data['sortBy']) ? $data['sortBy'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['topn'] = isset($data['topn']) ? $data['topn'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['searchList'] = isset($data['searchList']) ? $data['searchList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
        if ($this->container['isDesc'] === null) {
            $invalidProperties[] = "'isDesc' can't be null";
        }
        if ($this->container['resourceType'] === null) {
            $invalidProperties[] = "'resourceType' can't be null";
        }
        if ($this->container['sortBy'] === null) {
            $invalidProperties[] = "'sortBy' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['topn'] === null) {
            $invalidProperties[] = "'topn' can't be null";
        }
        if ($this->container['filter'] === null) {
            $invalidProperties[] = "'filter' can't be null";
        }
        if ($this->container['searchList'] === null) {
            $invalidProperties[] = "'searchList' can't be null";
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
    * Gets endTime
    *  结束时间时间戳，毫秒时间
    *
    * @return int
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int $endTime 结束时间时间戳，毫秒时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets isDesc
    *  是否降序  true / false
    *
    * @return bool
    */
    public function getIsDesc()
    {
        return $this->container['isDesc'];
    }

    /**
    * Sets isDesc
    *
    * @param bool $isDesc 是否降序  true / false
    *
    * @return $this
    */
    public function setIsDesc($isDesc)
    {
        $this->container['isDesc'] = $isDesc;
        return $this;
    }

    /**
    * Gets resourceType
    *  资源类型，log_group / log_stream / tenant
    *
    * @return string
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string $resourceType 资源类型，log_group / log_stream / tenant
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets sortBy
    *  排序依据，index/write/storage/basicTransfer/seniorTransfer，必须是search_list中存在的数据
    *
    * @return string
    */
    public function getSortBy()
    {
        return $this->container['sortBy'];
    }

    /**
    * Sets sortBy
    *
    * @param string $sortBy 排序依据，index/write/storage/basicTransfer/seniorTransfer，必须是search_list中存在的数据
    *
    * @return $this
    */
    public function setSortBy($sortBy)
    {
        $this->container['sortBy'] = $sortBy;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间时间戳，毫秒时间，最多支持30天范围内的查询
    *
    * @return int
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int $startTime 开始时间时间戳，毫秒时间，最多支持30天范围内的查询
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets topn
    *  查询前多少数据，范围1~100
    *
    * @return int
    */
    public function getTopn()
    {
        return $this->container['topn'];
    }

    /**
    * Sets topn
    *
    * @param int $topn 查询前多少数据，范围1~100
    *
    * @return $this
    */
    public function setTopn($topn)
    {
        $this->container['topn'] = $topn;
        return $this;
    }

    /**
    * Gets filter
    *  过滤条件 {     \"log_group_id\": \"xxxxxx\" }过滤器，为一个map结构，键为过滤属性，值为属性值，不支持模糊匹配
    *
    * @return map[string,string]
    */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
    * Sets filter
    *
    * @param map[string,string] $filter 过滤条件 {     \"log_group_id\": \"xxxxxx\" }过滤器，为一个map结构，键为过滤属性，值为属性值，不支持模糊匹配
    *
    * @return $this
    */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;
        return $this;
    }

    /**
    * Gets searchList
    *  查询数据类型，字符串数组可多种搭配，只能在index/write/storage/basicTransfer/seniorTransfer中选填
    *
    * @return string[]
    */
    public function getSearchList()
    {
        return $this->container['searchList'];
    }

    /**
    * Sets searchList
    *
    * @param string[] $searchList 查询数据类型，字符串数组可多种搭配，只能在index/write/storage/basicTransfer/seniorTransfer中选填
    *
    * @return $this
    */
    public function setSearchList($searchList)
    {
        $this->container['searchList'] = $searchList;
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

