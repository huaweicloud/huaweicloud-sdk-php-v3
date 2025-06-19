<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowIfTaskNameRepeatResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowIfTaskNameRepeatResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pageNo  当前页
    * pageSize  每页大小
    * totalPage  总页数
    * totalSize  总条数
    * pageList  查询到的告警模板
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pageNo' => 'int',
            'pageSize' => 'int',
            'totalPage' => 'int',
            'totalSize' => 'int',
            'pageList' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AlarmTemplateInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pageNo  当前页
    * pageSize  每页大小
    * totalPage  总页数
    * totalSize  总条数
    * pageList  查询到的告警模板
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pageNo' => 'int32',
        'pageSize' => 'int32',
        'totalPage' => 'int32',
        'totalSize' => 'int32',
        'pageList' => null
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
    * pageNo  当前页
    * pageSize  每页大小
    * totalPage  总页数
    * totalSize  总条数
    * pageList  查询到的告警模板
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pageNo' => 'pageNo',
            'pageSize' => 'pageSize',
            'totalPage' => 'totalPage',
            'totalSize' => 'totalSize',
            'pageList' => 'pageList'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pageNo  当前页
    * pageSize  每页大小
    * totalPage  总页数
    * totalSize  总条数
    * pageList  查询到的告警模板
    *
    * @var string[]
    */
    protected static $setters = [
            'pageNo' => 'setPageNo',
            'pageSize' => 'setPageSize',
            'totalPage' => 'setTotalPage',
            'totalSize' => 'setTotalSize',
            'pageList' => 'setPageList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pageNo  当前页
    * pageSize  每页大小
    * totalPage  总页数
    * totalSize  总条数
    * pageList  查询到的告警模板
    *
    * @var string[]
    */
    protected static $getters = [
            'pageNo' => 'getPageNo',
            'pageSize' => 'getPageSize',
            'totalPage' => 'getTotalPage',
            'totalSize' => 'getTotalSize',
            'pageList' => 'getPageList'
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
        $this->container['totalPage'] = isset($data['totalPage']) ? $data['totalPage'] : null;
        $this->container['totalSize'] = isset($data['totalSize']) ? $data['totalSize'] : null;
        $this->container['pageList'] = isset($data['pageList']) ? $data['pageList'] : null;
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
    * Gets pageNo
    *  当前页
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
    * @param int|null $pageNo 当前页
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
    *  每页大小
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
    * @param int|null $pageSize 每页大小
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
    * Gets pageList
    *  查询到的告警模板
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AlarmTemplateInfo[]|null
    */
    public function getPageList()
    {
        return $this->container['pageList'];
    }

    /**
    * Sets pageList
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AlarmTemplateInfo[]|null $pageList 查询到的告警模板
    *
    * @return $this
    */
    public function setPageList($pageList)
    {
        $this->container['pageList'] = $pageList;
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

