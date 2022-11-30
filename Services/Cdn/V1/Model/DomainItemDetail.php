<?php

namespace HuaweiCloud\SDK\Cdn\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DomainItemDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DomainItemDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startTime  数据起始时间戳，可能与请求时间不一致
    * endTime  数据结束时间戳，可能与请求时间不一致
    * statType  指标类型
    * domains  指标统计数据列表，如果该时间段内无值，则为空数组[]
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startTime' => 'int',
            'endTime' => 'int',
            'statType' => 'string',
            'domains' => 'map[string,object][]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startTime  数据起始时间戳，可能与请求时间不一致
    * endTime  数据结束时间戳，可能与请求时间不一致
    * statType  指标类型
    * domains  指标统计数据列表，如果该时间段内无值，则为空数组[]
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startTime' => 'int64',
        'endTime' => 'int64',
        'statType' => null,
        'domains' => null
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
    * startTime  数据起始时间戳，可能与请求时间不一致
    * endTime  数据结束时间戳，可能与请求时间不一致
    * statType  指标类型
    * domains  指标统计数据列表，如果该时间段内无值，则为空数组[]
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'statType' => 'stat_type',
            'domains' => 'domains'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startTime  数据起始时间戳，可能与请求时间不一致
    * endTime  数据结束时间戳，可能与请求时间不一致
    * statType  指标类型
    * domains  指标统计数据列表，如果该时间段内无值，则为空数组[]
    *
    * @var string[]
    */
    protected static $setters = [
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'statType' => 'setStatType',
            'domains' => 'setDomains'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startTime  数据起始时间戳，可能与请求时间不一致
    * endTime  数据结束时间戳，可能与请求时间不一致
    * statType  指标类型
    * domains  指标统计数据列表，如果该时间段内无值，则为空数组[]
    *
    * @var string[]
    */
    protected static $getters = [
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'statType' => 'getStatType',
            'domains' => 'getDomains'
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
        $this->container['statType'] = isset($data['statType']) ? $data['statType'] : null;
        $this->container['domains'] = isset($data['domains']) ? $data['domains'] : null;
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
    *  数据起始时间戳，可能与请求时间不一致
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
    * @param int|null $startTime 数据起始时间戳，可能与请求时间不一致
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
    *  数据结束时间戳，可能与请求时间不一致
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
    * @param int|null $endTime 数据结束时间戳，可能与请求时间不一致
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
    *  指标类型
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
    * @param string|null $statType 指标类型
    *
    * @return $this
    */
    public function setStatType($statType)
    {
        $this->container['statType'] = $statType;
        return $this;
    }

    /**
    * Gets domains
    *  指标统计数据列表，如果该时间段内无值，则为空数组[]
    *
    * @return map[string,object][]|null
    */
    public function getDomains()
    {
        return $this->container['domains'];
    }

    /**
    * Sets domains
    *
    * @param map[string,object][]|null $domains 指标统计数据列表，如果该时间段内无值，则为空数组[]
    *
    * @return $this
    */
    public function setDomains($domains)
    {
        $this->container['domains'] = $domains;
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

