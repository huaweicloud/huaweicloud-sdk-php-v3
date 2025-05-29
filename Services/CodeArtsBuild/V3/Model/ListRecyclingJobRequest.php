<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRecyclingJobRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRecyclingJobRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pageSize  每页显示的条目数量，page_size小于等于100
    * pageNo  分页页码， 表示从此页开始查询， page_no大于等于1
    * search  搜索的任务名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pageSize' => 'int',
            'pageNo' => 'int',
            'search' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pageSize  每页显示的条目数量，page_size小于等于100
    * pageNo  分页页码， 表示从此页开始查询， page_no大于等于1
    * search  搜索的任务名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pageSize' => 'int32',
        'pageNo' => 'int32',
        'search' => null
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
    * pageSize  每页显示的条目数量，page_size小于等于100
    * pageNo  分页页码， 表示从此页开始查询， page_no大于等于1
    * search  搜索的任务名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pageSize' => 'page_size',
            'pageNo' => 'page_no',
            'search' => 'search'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pageSize  每页显示的条目数量，page_size小于等于100
    * pageNo  分页页码， 表示从此页开始查询， page_no大于等于1
    * search  搜索的任务名称
    *
    * @var string[]
    */
    protected static $setters = [
            'pageSize' => 'setPageSize',
            'pageNo' => 'setPageNo',
            'search' => 'setSearch'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pageSize  每页显示的条目数量，page_size小于等于100
    * pageNo  分页页码， 表示从此页开始查询， page_no大于等于1
    * search  搜索的任务名称
    *
    * @var string[]
    */
    protected static $getters = [
            'pageSize' => 'getPageSize',
            'pageNo' => 'getPageNo',
            'search' => 'getSearch'
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
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['pageNo'] = isset($data['pageNo']) ? $data['pageNo'] : null;
        $this->container['search'] = isset($data['search']) ? $data['search'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['pageNo']) && ($this->container['pageNo'] < 0)) {
                $invalidProperties[] = "invalid value for 'pageNo', must be bigger than or equal to 0.";
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
    * Gets pageNo
    *  分页页码， 表示从此页开始查询， page_no大于等于1
    *
    * @return int|null
    */
    public function getPageNo()
    {
        return $this->container['pageNo'];
    }

    /**
    * Sets pageNo
    *
    * @param int|null $pageNo 分页页码， 表示从此页开始查询， page_no大于等于1
    *
    * @return $this
    */
    public function setPageNo($pageNo)
    {
        $this->container['pageNo'] = $pageNo;
        return $this;
    }

    /**
    * Gets search
    *  搜索的任务名称
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
    * @param string|null $search 搜索的任务名称
    *
    * @return $this
    */
    public function setSearch($search)
    {
        $this->container['search'] = $search;
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

