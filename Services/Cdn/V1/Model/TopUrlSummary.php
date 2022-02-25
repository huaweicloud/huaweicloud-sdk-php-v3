<?php

namespace HuaweiCloud\SDK\Cdn\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TopUrlSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TopUrlSummary';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * url  URL名称。
    * value  对应查询类型的值。（流量单位：Byte）
    * startTime  查询起始时间戳。
    * endTime  查询结束时间戳
    * statType  参数类型支持：flux(流量)，req_num(请求总数)。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'url' => 'string',
            'value' => 'int',
            'startTime' => 'int',
            'endTime' => 'int',
            'statType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * url  URL名称。
    * value  对应查询类型的值。（流量单位：Byte）
    * startTime  查询起始时间戳。
    * endTime  查询结束时间戳
    * statType  参数类型支持：flux(流量)，req_num(请求总数)。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'url' => null,
        'value' => 'int64',
        'startTime' => 'int64',
        'endTime' => 'int64',
        'statType' => null
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
    * url  URL名称。
    * value  对应查询类型的值。（流量单位：Byte）
    * startTime  查询起始时间戳。
    * endTime  查询结束时间戳
    * statType  参数类型支持：flux(流量)，req_num(请求总数)。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'url' => 'url',
            'value' => 'value',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'statType' => 'stat_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * url  URL名称。
    * value  对应查询类型的值。（流量单位：Byte）
    * startTime  查询起始时间戳。
    * endTime  查询结束时间戳
    * statType  参数类型支持：flux(流量)，req_num(请求总数)。
    *
    * @var string[]
    */
    protected static $setters = [
            'url' => 'setUrl',
            'value' => 'setValue',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'statType' => 'setStatType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * url  URL名称。
    * value  对应查询类型的值。（流量单位：Byte）
    * startTime  查询起始时间戳。
    * endTime  查询结束时间戳
    * statType  参数类型支持：flux(流量)，req_num(请求总数)。
    *
    * @var string[]
    */
    protected static $getters = [
            'url' => 'getUrl',
            'value' => 'getValue',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'statType' => 'getStatType'
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['statType'] = isset($data['statType']) ? $data['statType'] : null;
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
    * Gets url
    *  URL名称。
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
    * @param string|null $url URL名称。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets value
    *  对应查询类型的值。（流量单位：Byte）
    *
    * @return int|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param int|null $value 对应查询类型的值。（流量单位：Byte）
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets startTime
    *  查询起始时间戳。
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
    * @param int|null $startTime 查询起始时间戳。
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
    *  查询结束时间戳
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
    * @param int|null $endTime 查询结束时间戳
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets statType
    *  参数类型支持：flux(流量)，req_num(请求总数)。
    *
    * @return string|null
    */
    public function getStatType()
    {
        return $this->container['statType'];
    }

    /**
    * Sets statType
    *
    * @param string|null $statType 参数类型支持：flux(流量)，req_num(请求总数)。
    *
    * @return $this
    */
    public function setStatType($statType)
    {
        $this->container['statType'] = $statType;
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

