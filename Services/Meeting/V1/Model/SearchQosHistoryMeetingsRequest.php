<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchQosHistoryMeetingsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchQosHistoryMeetingsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startDate  查询的起始日期，Unix时间戳（单位毫秒）。
    * endDate  查询的截止日期，Unix时间戳（单位毫秒）。
    * offset  查询偏移量。 * 取值：大于等于0，默认值为0 * 大于等于最大条目数量，则返回最后一页的数据
    * limit  查询的条目数量。 * 取值：1-500，默认值为20
    * searchKey  查询条件。会议主题、会议预约人和会议ID等可作为搜索内容。长度限制为1-512个字符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startDate' => 'int',
            'endDate' => 'int',
            'offset' => 'int',
            'limit' => 'int',
            'searchKey' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startDate  查询的起始日期，Unix时间戳（单位毫秒）。
    * endDate  查询的截止日期，Unix时间戳（单位毫秒）。
    * offset  查询偏移量。 * 取值：大于等于0，默认值为0 * 大于等于最大条目数量，则返回最后一页的数据
    * limit  查询的条目数量。 * 取值：1-500，默认值为20
    * searchKey  查询条件。会议主题、会议预约人和会议ID等可作为搜索内容。长度限制为1-512个字符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startDate' => 'int64',
        'endDate' => 'int64',
        'offset' => 'int32',
        'limit' => 'int32',
        'searchKey' => null
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
    * startDate  查询的起始日期，Unix时间戳（单位毫秒）。
    * endDate  查询的截止日期，Unix时间戳（单位毫秒）。
    * offset  查询偏移量。 * 取值：大于等于0，默认值为0 * 大于等于最大条目数量，则返回最后一页的数据
    * limit  查询的条目数量。 * 取值：1-500，默认值为20
    * searchKey  查询条件。会议主题、会议预约人和会议ID等可作为搜索内容。长度限制为1-512个字符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startDate' => 'startDate',
            'endDate' => 'endDate',
            'offset' => 'offset',
            'limit' => 'limit',
            'searchKey' => 'searchKey'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startDate  查询的起始日期，Unix时间戳（单位毫秒）。
    * endDate  查询的截止日期，Unix时间戳（单位毫秒）。
    * offset  查询偏移量。 * 取值：大于等于0，默认值为0 * 大于等于最大条目数量，则返回最后一页的数据
    * limit  查询的条目数量。 * 取值：1-500，默认值为20
    * searchKey  查询条件。会议主题、会议预约人和会议ID等可作为搜索内容。长度限制为1-512个字符。
    *
    * @var string[]
    */
    protected static $setters = [
            'startDate' => 'setStartDate',
            'endDate' => 'setEndDate',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'searchKey' => 'setSearchKey'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startDate  查询的起始日期，Unix时间戳（单位毫秒）。
    * endDate  查询的截止日期，Unix时间戳（单位毫秒）。
    * offset  查询偏移量。 * 取值：大于等于0，默认值为0 * 大于等于最大条目数量，则返回最后一页的数据
    * limit  查询的条目数量。 * 取值：1-500，默认值为20
    * searchKey  查询条件。会议主题、会议预约人和会议ID等可作为搜索内容。长度限制为1-512个字符。
    *
    * @var string[]
    */
    protected static $getters = [
            'startDate' => 'getStartDate',
            'endDate' => 'getEndDate',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'searchKey' => 'getSearchKey'
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
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : 0;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : 20;
        $this->container['searchKey'] = isset($data['searchKey']) ? $data['searchKey'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['startDate'] === null) {
            $invalidProperties[] = "'startDate' can't be null";
        }
        if ($this->container['endDate'] === null) {
            $invalidProperties[] = "'endDate' can't be null";
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
    * Gets startDate
    *  查询的起始日期，Unix时间戳（单位毫秒）。
    *
    * @return int
    */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
    * Sets startDate
    *
    * @param int $startDate 查询的起始日期，Unix时间戳（单位毫秒）。
    *
    * @return $this
    */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;
        return $this;
    }

    /**
    * Gets endDate
    *  查询的截止日期，Unix时间戳（单位毫秒）。
    *
    * @return int
    */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
    * Sets endDate
    *
    * @param int $endDate 查询的截止日期，Unix时间戳（单位毫秒）。
    *
    * @return $this
    */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;
        return $this;
    }

    /**
    * Gets offset
    *  查询偏移量。 * 取值：大于等于0，默认值为0 * 大于等于最大条目数量，则返回最后一页的数据
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
    * @param int|null $offset 查询偏移量。 * 取值：大于等于0，默认值为0 * 大于等于最大条目数量，则返回最后一页的数据
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
    *  查询的条目数量。 * 取值：1-500，默认值为20
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
    * @param int|null $limit 查询的条目数量。 * 取值：1-500，默认值为20
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets searchKey
    *  查询条件。会议主题、会议预约人和会议ID等可作为搜索内容。长度限制为1-512个字符。
    *
    * @return string|null
    */
    public function getSearchKey()
    {
        return $this->container['searchKey'];
    }

    /**
    * Sets searchKey
    *
    * @param string|null $searchKey 查询条件。会议主题、会议预约人和会议ID等可作为搜索内容。长度限制为1-512个字符。
    *
    * @return $this
    */
    public function setSearchKey($searchKey)
    {
        $this->container['searchKey'] = $searchKey;
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

