<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListLiveSampleLogsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListLiveSampleLogsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * playDomain  播放域名。
    * startTime  查询开始时间，UTC时间：YYYY-MM-DDTHH:mm:ssZ，如北京时间2020年3月4日16点00分00秒可表示为2020-03-04T08:00:00Z。仅支持查询最近3个月内的数据。
    * endTime  查询结束时间，UTC时间：YYYY-MM-DDTHH:mm:ssZ，如北京时间2020年3月4日16点00分00秒可表示为2020-03-04T08:00:00Z。查询时间跨度不能大于7天。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'playDomain' => 'string',
            'startTime' => '\DateTime',
            'endTime' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * playDomain  播放域名。
    * startTime  查询开始时间，UTC时间：YYYY-MM-DDTHH:mm:ssZ，如北京时间2020年3月4日16点00分00秒可表示为2020-03-04T08:00:00Z。仅支持查询最近3个月内的数据。
    * endTime  查询结束时间，UTC时间：YYYY-MM-DDTHH:mm:ssZ，如北京时间2020年3月4日16点00分00秒可表示为2020-03-04T08:00:00Z。查询时间跨度不能大于7天。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'playDomain' => null,
        'startTime' => 'date-time',
        'endTime' => 'date-time'
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
    * playDomain  播放域名。
    * startTime  查询开始时间，UTC时间：YYYY-MM-DDTHH:mm:ssZ，如北京时间2020年3月4日16点00分00秒可表示为2020-03-04T08:00:00Z。仅支持查询最近3个月内的数据。
    * endTime  查询结束时间，UTC时间：YYYY-MM-DDTHH:mm:ssZ，如北京时间2020年3月4日16点00分00秒可表示为2020-03-04T08:00:00Z。查询时间跨度不能大于7天。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'playDomain' => 'play_domain',
            'startTime' => 'start_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * playDomain  播放域名。
    * startTime  查询开始时间，UTC时间：YYYY-MM-DDTHH:mm:ssZ，如北京时间2020年3月4日16点00分00秒可表示为2020-03-04T08:00:00Z。仅支持查询最近3个月内的数据。
    * endTime  查询结束时间，UTC时间：YYYY-MM-DDTHH:mm:ssZ，如北京时间2020年3月4日16点00分00秒可表示为2020-03-04T08:00:00Z。查询时间跨度不能大于7天。
    *
    * @var string[]
    */
    protected static $setters = [
            'playDomain' => 'setPlayDomain',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * playDomain  播放域名。
    * startTime  查询开始时间，UTC时间：YYYY-MM-DDTHH:mm:ssZ，如北京时间2020年3月4日16点00分00秒可表示为2020-03-04T08:00:00Z。仅支持查询最近3个月内的数据。
    * endTime  查询结束时间，UTC时间：YYYY-MM-DDTHH:mm:ssZ，如北京时间2020年3月4日16点00分00秒可表示为2020-03-04T08:00:00Z。查询时间跨度不能大于7天。
    *
    * @var string[]
    */
    protected static $getters = [
            'playDomain' => 'getPlayDomain',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime'
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
        $this->container['playDomain'] = isset($data['playDomain']) ? $data['playDomain'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['playDomain'] === null) {
            $invalidProperties[] = "'playDomain' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
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
    * Gets playDomain
    *  播放域名。
    *
    * @return string
    */
    public function getPlayDomain()
    {
        return $this->container['playDomain'];
    }

    /**
    * Sets playDomain
    *
    * @param string $playDomain 播放域名。
    *
    * @return $this
    */
    public function setPlayDomain($playDomain)
    {
        $this->container['playDomain'] = $playDomain;
        return $this;
    }

    /**
    * Gets startTime
    *  查询开始时间，UTC时间：YYYY-MM-DDTHH:mm:ssZ，如北京时间2020年3月4日16点00分00秒可表示为2020-03-04T08:00:00Z。仅支持查询最近3个月内的数据。
    *
    * @return \DateTime
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param \DateTime $startTime 查询开始时间，UTC时间：YYYY-MM-DDTHH:mm:ssZ，如北京时间2020年3月4日16点00分00秒可表示为2020-03-04T08:00:00Z。仅支持查询最近3个月内的数据。
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
    *  查询结束时间，UTC时间：YYYY-MM-DDTHH:mm:ssZ，如北京时间2020年3月4日16点00分00秒可表示为2020-03-04T08:00:00Z。查询时间跨度不能大于7天。
    *
    * @return \DateTime
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param \DateTime $endTime 查询结束时间，UTC时间：YYYY-MM-DDTHH:mm:ssZ，如北京时间2020年3月4日16点00分00秒可表示为2020-03-04T08:00:00Z。查询时间跨度不能大于7天。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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

