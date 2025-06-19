<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PageResultBasicAWInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PageResultBasicAWInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pageList  当前页数据
    * pageNo  当前页数
    * pageSize  每页条数
    * totalPage  总页数
    * totalSize  总条数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pageList' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\BasicAWInfo[]',
            'pageNo' => 'int',
            'pageSize' => 'int',
            'totalPage' => 'int',
            'totalSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pageList  当前页数据
    * pageNo  当前页数
    * pageSize  每页条数
    * totalPage  总页数
    * totalSize  总条数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pageList' => null,
        'pageNo' => 'int32',
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
    * pageList  当前页数据
    * pageNo  当前页数
    * pageSize  每页条数
    * totalPage  总页数
    * totalSize  总条数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pageList' => 'page_list',
            'pageNo' => 'page_no',
            'pageSize' => 'page_size',
            'totalPage' => 'total_page',
            'totalSize' => 'total_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pageList  当前页数据
    * pageNo  当前页数
    * pageSize  每页条数
    * totalPage  总页数
    * totalSize  总条数
    *
    * @var string[]
    */
    protected static $setters = [
            'pageList' => 'setPageList',
            'pageNo' => 'setPageNo',
            'pageSize' => 'setPageSize',
            'totalPage' => 'setTotalPage',
            'totalSize' => 'setTotalSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pageList  当前页数据
    * pageNo  当前页数
    * pageSize  每页条数
    * totalPage  总页数
    * totalSize  总条数
    *
    * @var string[]
    */
    protected static $getters = [
            'pageList' => 'getPageList',
            'pageNo' => 'getPageNo',
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
        $this->container['pageList'] = isset($data['pageList']) ? $data['pageList'] : null;
        $this->container['pageNo'] = isset($data['pageNo']) ? $data['pageNo'] : null;
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
    * Gets pageList
    *  当前页数据
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\BasicAWInfo[]|null
    */
    public function getPageList()
    {
        return $this->container['pageList'];
    }

    /**
    * Sets pageList
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\BasicAWInfo[]|null $pageList 当前页数据
    *
    * @return $this
    */
    public function setPageList($pageList)
    {
        $this->container['pageList'] = $pageList;
        return $this;
    }

    /**
    * Gets pageNo
    *  当前页数
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
    * @param int|null $pageNo 当前页数
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
    * @return int|null
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int|null $pageSize 每页条数
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

