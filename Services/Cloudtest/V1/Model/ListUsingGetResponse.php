<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListUsingGetResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListUsingGetResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * list  返回结果
    * pageNum  页码
    * pageSize  分页大小
    * totalPage  总页数
    * totalSize  总条数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'list' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\DashboardDto[]',
            'pageNum' => 'int',
            'pageSize' => 'int',
            'totalPage' => 'int',
            'totalSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * list  返回结果
    * pageNum  页码
    * pageSize  分页大小
    * totalPage  总页数
    * totalSize  总条数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'list' => null,
        'pageNum' => 'int32',
        'pageSize' => 'int32',
        'totalPage' => 'int32',
        'totalSize' => 'int64'
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
    * list  返回结果
    * pageNum  页码
    * pageSize  分页大小
    * totalPage  总页数
    * totalSize  总条数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'list' => 'list',
            'pageNum' => 'page_num',
            'pageSize' => 'page_size',
            'totalPage' => 'total_page',
            'totalSize' => 'total_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * list  返回结果
    * pageNum  页码
    * pageSize  分页大小
    * totalPage  总页数
    * totalSize  总条数
    *
    * @var string[]
    */
    protected static $setters = [
            'list' => 'setList',
            'pageNum' => 'setPageNum',
            'pageSize' => 'setPageSize',
            'totalPage' => 'setTotalPage',
            'totalSize' => 'setTotalSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * list  返回结果
    * pageNum  页码
    * pageSize  分页大小
    * totalPage  总页数
    * totalSize  总条数
    *
    * @var string[]
    */
    protected static $getters = [
            'list' => 'getList',
            'pageNum' => 'getPageNum',
            'pageSize' => 'getPageSize',
            'totalPage' => 'getTotalPage',
            'totalSize' => 'getTotalSize'
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
        $this->container['list'] = isset($data['list']) ? $data['list'] : null;
        $this->container['pageNum'] = isset($data['pageNum']) ? $data['pageNum'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['totalPage'] = isset($data['totalPage']) ? $data['totalPage'] : null;
        $this->container['totalSize'] = isset($data['totalSize']) ? $data['totalSize'] : null;
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
    * Gets list
    *  返回结果
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\DashboardDto[]|null
    */
    public function getList()
    {
        return $this->container['list'];
    }

    /**
    * Sets list
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\DashboardDto[]|null $list 返回结果
    *
    * @return $this
    */
    public function setList($list)
    {
        $this->container['list'] = $list;
        return $this;
    }

    /**
    * Gets pageNum
    *  页码
    *
    * @return int|null
    */
    public function getPageNum()
    {
        return $this->container['pageNum'];
    }

    /**
    * Sets pageNum
    *
    * @param int|null $pageNum 页码
    *
    * @return $this
    */
    public function setPageNum($pageNum)
    {
        $this->container['pageNum'] = $pageNum;
        return $this;
    }

    /**
    * Gets pageSize
    *  分页大小
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
    * @param int|null $pageSize 分页大小
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets totalPage
    *  总页数
    *
    * @return int|null
    */
    public function getTotalPage()
    {
        return $this->container['totalPage'];
    }

    /**
    * Sets totalPage
    *
    * @param int|null $totalPage 总页数
    *
    * @return $this
    */
    public function setTotalPage($totalPage)
    {
        $this->container['totalPage'] = $totalPage;
        return $this;
    }

    /**
    * Gets totalSize
    *  总条数
    *
    * @return int|null
    */
    public function getTotalSize()
    {
        return $this->container['totalSize'];
    }

    /**
    * Sets totalSize
    *
    * @param int|null $totalSize 总条数
    *
    * @return $this
    */
    public function setTotalSize($totalSize)
    {
        $this->container['totalSize'] = $totalSize;
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

