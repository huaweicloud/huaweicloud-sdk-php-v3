<?php

namespace HuaweiCloud\SDK\AntiDDoS\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListWeeklyReportsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListWeeklyReportsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ddosInterceptTimes  一周内DDoS拦截次数
    * weekdata  一周的攻击次数统计数据
    * top10  被攻击次数排名前10的IP地址
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ddosInterceptTimes' => 'int',
            'weekdata' => '\HuaweiCloud\SDK\AntiDDoS\V1\Model\WeeklyCount[]',
            'top10' => '\HuaweiCloud\SDK\AntiDDoS\V1\Model\WeeklyTop10[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ddosInterceptTimes  一周内DDoS拦截次数
    * weekdata  一周的攻击次数统计数据
    * top10  被攻击次数排名前10的IP地址
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ddosInterceptTimes' => 'int32',
        'weekdata' => null,
        'top10' => null
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
    * ddosInterceptTimes  一周内DDoS拦截次数
    * weekdata  一周的攻击次数统计数据
    * top10  被攻击次数排名前10的IP地址
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ddosInterceptTimes' => 'ddos_intercept_times',
            'weekdata' => 'weekdata',
            'top10' => 'top10'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ddosInterceptTimes  一周内DDoS拦截次数
    * weekdata  一周的攻击次数统计数据
    * top10  被攻击次数排名前10的IP地址
    *
    * @var string[]
    */
    protected static $setters = [
            'ddosInterceptTimes' => 'setDdosInterceptTimes',
            'weekdata' => 'setWeekdata',
            'top10' => 'setTop10'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ddosInterceptTimes  一周内DDoS拦截次数
    * weekdata  一周的攻击次数统计数据
    * top10  被攻击次数排名前10的IP地址
    *
    * @var string[]
    */
    protected static $getters = [
            'ddosInterceptTimes' => 'getDdosInterceptTimes',
            'weekdata' => 'getWeekdata',
            'top10' => 'getTop10'
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
        $this->container['ddosInterceptTimes'] = isset($data['ddosInterceptTimes']) ? $data['ddosInterceptTimes'] : null;
        $this->container['weekdata'] = isset($data['weekdata']) ? $data['weekdata'] : null;
        $this->container['top10'] = isset($data['top10']) ? $data['top10'] : null;
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
    * Gets ddosInterceptTimes
    *  一周内DDoS拦截次数
    *
    * @return int|null
    */
    public function getDdosInterceptTimes()
    {
        return $this->container['ddosInterceptTimes'];
    }

    /**
    * Sets ddosInterceptTimes
    *
    * @param int|null $ddosInterceptTimes 一周内DDoS拦截次数
    *
    * @return $this
    */
    public function setDdosInterceptTimes($ddosInterceptTimes)
    {
        $this->container['ddosInterceptTimes'] = $ddosInterceptTimes;
        return $this;
    }

    /**
    * Gets weekdata
    *  一周的攻击次数统计数据
    *
    * @return \HuaweiCloud\SDK\AntiDDoS\V1\Model\WeeklyCount[]|null
    */
    public function getWeekdata()
    {
        return $this->container['weekdata'];
    }

    /**
    * Sets weekdata
    *
    * @param \HuaweiCloud\SDK\AntiDDoS\V1\Model\WeeklyCount[]|null $weekdata 一周的攻击次数统计数据
    *
    * @return $this
    */
    public function setWeekdata($weekdata)
    {
        $this->container['weekdata'] = $weekdata;
        return $this;
    }

    /**
    * Gets top10
    *  被攻击次数排名前10的IP地址
    *
    * @return \HuaweiCloud\SDK\AntiDDoS\V1\Model\WeeklyTop10[]|null
    */
    public function getTop10()
    {
        return $this->container['top10'];
    }

    /**
    * Sets top10
    *
    * @param \HuaweiCloud\SDK\AntiDDoS\V1\Model\WeeklyTop10[]|null $top10 被攻击次数排名前10的IP地址
    *
    * @return $this
    */
    public function setTop10($top10)
    {
        $this->container['top10'] = $top10;
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

