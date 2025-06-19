<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListOwnTestCasesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListOwnTestCasesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pageNo  当前页数
    * pageSize  每页条数
    * sortField  排序字段
    * sortType  排序方式
    * keyword  关键字查询，用例名或编号
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pageNo' => 'int',
            'pageSize' => 'int',
            'sortField' => 'string',
            'sortType' => 'string',
            'keyword' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pageNo  当前页数
    * pageSize  每页条数
    * sortField  排序字段
    * sortType  排序方式
    * keyword  关键字查询，用例名或编号
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pageNo' => 'int32',
        'pageSize' => 'int32',
        'sortField' => null,
        'sortType' => null,
        'keyword' => null
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
    * pageNo  当前页数
    * pageSize  每页条数
    * sortField  排序字段
    * sortType  排序方式
    * keyword  关键字查询，用例名或编号
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pageNo' => 'page_no',
            'pageSize' => 'page_size',
            'sortField' => 'sort_field',
            'sortType' => 'sort_type',
            'keyword' => 'keyword'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pageNo  当前页数
    * pageSize  每页条数
    * sortField  排序字段
    * sortType  排序方式
    * keyword  关键字查询，用例名或编号
    *
    * @var string[]
    */
    protected static $setters = [
            'pageNo' => 'setPageNo',
            'pageSize' => 'setPageSize',
            'sortField' => 'setSortField',
            'sortType' => 'setSortType',
            'keyword' => 'setKeyword'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pageNo  当前页数
    * pageSize  每页条数
    * sortField  排序字段
    * sortType  排序方式
    * keyword  关键字查询，用例名或编号
    *
    * @var string[]
    */
    protected static $getters = [
            'pageNo' => 'getPageNo',
            'pageSize' => 'getPageSize',
            'sortField' => 'getSortField',
            'sortType' => 'getSortType',
            'keyword' => 'getKeyword'
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
        $this->container['pageNo'] = isset($data['pageNo']) ? $data['pageNo'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['sortField'] = isset($data['sortField']) ? $data['sortField'] : null;
        $this->container['sortType'] = isset($data['sortType']) ? $data['sortType'] : null;
        $this->container['keyword'] = isset($data['keyword']) ? $data['keyword'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['pageNo'] === null) {
            $invalidProperties[] = "'pageNo' can't be null";
        }
            if (($this->container['pageNo'] < 1)) {
                $invalidProperties[] = "invalid value for 'pageNo', must be bigger than or equal to 1.";
            }
        if ($this->container['pageSize'] === null) {
            $invalidProperties[] = "'pageSize' can't be null";
        }
            if (($this->container['pageSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be bigger than or equal to 1.";
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
    * Gets pageNo
    *  当前页数
    *
    * @return int
    */
    public function getPageNo()
    {
        return $this->container['pageNo'];
    }

    /**
    * Sets pageNo
    *
    * @param int $pageNo 当前页数
    *
    * @return $this
    */
    public function setPageNo($pageNo)
    {
        $this->container['pageNo'] = $pageNo;
        return $this;
    }

    /**
    * Gets pageSize
    *  每页条数
    *
    * @return int
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int $pageSize 每页条数
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
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
    * Gets sortType
    *  排序方式
    *
    * @return string|null
    */
    public function getSortType()
    {
        return $this->container['sortType'];
    }

    /**
    * Sets sortType
    *
    * @param string|null $sortType 排序方式
    *
    * @return $this
    */
    public function setSortType($sortType)
    {
        $this->container['sortType'] = $sortType;
        return $this;
    }

    /**
    * Gets keyword
    *  关键字查询，用例名或编号
    *
    * @return string|null
    */
    public function getKeyword()
    {
        return $this->container['keyword'];
    }

    /**
    * Sets keyword
    *
    * @param string|null $keyword 关键字查询，用例名或编号
    *
    * @return $this
    */
    public function setKeyword($keyword)
    {
        $this->container['keyword'] = $keyword;
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

