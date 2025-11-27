<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListBanUrlRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListBanUrlRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startTime  查询起始时间戳（毫秒），需与结束时间戳同时指定。
    * endTime  查询结束时间戳（毫秒），需与开始时间戳同时指定。
    * pageSize  封禁的url所显示单页最大数量，取值范围为1-50。page_size和page_number必须同时传值。默认值10.
    * pageNumber  封禁的url当前查询为第几页，取值范围为1-65535。默认值1
    * url  封禁的url地址。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startTime' => 'int',
            'endTime' => 'int',
            'pageSize' => 'int',
            'pageNumber' => 'int',
            'url' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startTime  查询起始时间戳（毫秒），需与结束时间戳同时指定。
    * endTime  查询结束时间戳（毫秒），需与开始时间戳同时指定。
    * pageSize  封禁的url所显示单页最大数量，取值范围为1-50。page_size和page_number必须同时传值。默认值10.
    * pageNumber  封禁的url当前查询为第几页，取值范围为1-65535。默认值1
    * url  封禁的url地址。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startTime' => 'int64',
        'endTime' => 'int64',
        'pageSize' => null,
        'pageNumber' => null,
        'url' => null
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
    * startTime  查询起始时间戳（毫秒），需与结束时间戳同时指定。
    * endTime  查询结束时间戳（毫秒），需与开始时间戳同时指定。
    * pageSize  封禁的url所显示单页最大数量，取值范围为1-50。page_size和page_number必须同时传值。默认值10.
    * pageNumber  封禁的url当前查询为第几页，取值范围为1-65535。默认值1
    * url  封禁的url地址。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'pageSize' => 'page_size',
            'pageNumber' => 'page_number',
            'url' => 'url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startTime  查询起始时间戳（毫秒），需与结束时间戳同时指定。
    * endTime  查询结束时间戳（毫秒），需与开始时间戳同时指定。
    * pageSize  封禁的url所显示单页最大数量，取值范围为1-50。page_size和page_number必须同时传值。默认值10.
    * pageNumber  封禁的url当前查询为第几页，取值范围为1-65535。默认值1
    * url  封禁的url地址。
    *
    * @var string[]
    */
    protected static $setters = [
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'pageSize' => 'setPageSize',
            'pageNumber' => 'setPageNumber',
            'url' => 'setUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startTime  查询起始时间戳（毫秒），需与结束时间戳同时指定。
    * endTime  查询结束时间戳（毫秒），需与开始时间戳同时指定。
    * pageSize  封禁的url所显示单页最大数量，取值范围为1-50。page_size和page_number必须同时传值。默认值10.
    * pageNumber  封禁的url当前查询为第几页，取值范围为1-65535。默认值1
    * url  封禁的url地址。
    *
    * @var string[]
    */
    protected static $getters = [
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'pageSize' => 'getPageSize',
            'pageNumber' => 'getPageNumber',
            'url' => 'getUrl'
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
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['pageNumber'] = isset($data['pageNumber']) ? $data['pageNumber'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
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
    * Gets startTime
    *  查询起始时间戳（毫秒），需与结束时间戳同时指定。
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime 查询起始时间戳（毫秒），需与结束时间戳同时指定。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  查询结束时间戳（毫秒），需与开始时间戳同时指定。
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 查询结束时间戳（毫秒），需与开始时间戳同时指定。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets pageSize
    *  封禁的url所显示单页最大数量，取值范围为1-50。page_size和page_number必须同时传值。默认值10.
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
    * @param int|null $pageSize 封禁的url所显示单页最大数量，取值范围为1-50。page_size和page_number必须同时传值。默认值10.
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets pageNumber
    *  封禁的url当前查询为第几页，取值范围为1-65535。默认值1
    *
    * @return int|null
    */
    public function getPageNumber()
    {
        return $this->container['pageNumber'];
    }

    /**
    * Sets pageNumber
    *
    * @param int|null $pageNumber 封禁的url当前查询为第几页，取值范围为1-65535。默认值1
    *
    * @return $this
    */
    public function setPageNumber($pageNumber)
    {
        $this->container['pageNumber'] = $pageNumber;
        return $this;
    }

    /**
    * Gets url
    *  封禁的url地址。
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url 封禁的url地址。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
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

