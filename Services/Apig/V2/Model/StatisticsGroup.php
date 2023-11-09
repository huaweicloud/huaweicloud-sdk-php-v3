<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StatisticsGroup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StatisticsGroup';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * maxLatency  最大延时  单位：ms
    * avgLatency  平均延时  单位：ms
    * reqCount  请求总次数
    * reqCount2xx  2xx响应码总次数
    * reqCount4xx  4xx响应码总次数
    * reqCount5xx  5xx响应码总次数
    * reqCountError  错误次数
    * outputThroughput  下行吞吐量（byte）
    * inputThroughput  上行吞吐量（byte）
    * currentMinute  API访问的UTC时间戳
    * groupId  API分组编号
    * provider  API拥有者
    * reqTime  API请求时间
    * registerTime  记录时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'maxLatency' => 'int',
            'avgLatency' => 'float',
            'reqCount' => 'int',
            'reqCount2xx' => 'int',
            'reqCount4xx' => 'int',
            'reqCount5xx' => 'int',
            'reqCountError' => 'int',
            'outputThroughput' => 'int',
            'inputThroughput' => 'int',
            'currentMinute' => 'int',
            'groupId' => 'string',
            'provider' => 'string',
            'reqTime' => '\DateTime',
            'registerTime' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * maxLatency  最大延时  单位：ms
    * avgLatency  平均延时  单位：ms
    * reqCount  请求总次数
    * reqCount2xx  2xx响应码总次数
    * reqCount4xx  4xx响应码总次数
    * reqCount5xx  5xx响应码总次数
    * reqCountError  错误次数
    * outputThroughput  下行吞吐量（byte）
    * inputThroughput  上行吞吐量（byte）
    * currentMinute  API访问的UTC时间戳
    * groupId  API分组编号
    * provider  API拥有者
    * reqTime  API请求时间
    * registerTime  记录时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'maxLatency' => 'int32',
        'avgLatency' => 'float',
        'reqCount' => 'int32',
        'reqCount2xx' => 'int32',
        'reqCount4xx' => 'int32',
        'reqCount5xx' => 'int32',
        'reqCountError' => 'int32',
        'outputThroughput' => 'int64',
        'inputThroughput' => 'int64',
        'currentMinute' => 'int64',
        'groupId' => null,
        'provider' => null,
        'reqTime' => 'date-time',
        'registerTime' => 'date-time'
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
    * maxLatency  最大延时  单位：ms
    * avgLatency  平均延时  单位：ms
    * reqCount  请求总次数
    * reqCount2xx  2xx响应码总次数
    * reqCount4xx  4xx响应码总次数
    * reqCount5xx  5xx响应码总次数
    * reqCountError  错误次数
    * outputThroughput  下行吞吐量（byte）
    * inputThroughput  上行吞吐量（byte）
    * currentMinute  API访问的UTC时间戳
    * groupId  API分组编号
    * provider  API拥有者
    * reqTime  API请求时间
    * registerTime  记录时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'maxLatency' => 'max_latency',
            'avgLatency' => 'avg_latency',
            'reqCount' => 'req_count',
            'reqCount2xx' => 'req_count2xx',
            'reqCount4xx' => 'req_count4xx',
            'reqCount5xx' => 'req_count5xx',
            'reqCountError' => 'req_count_error',
            'outputThroughput' => 'output_throughput',
            'inputThroughput' => 'input_throughput',
            'currentMinute' => 'current_minute',
            'groupId' => 'group_id',
            'provider' => 'provider',
            'reqTime' => 'req_time',
            'registerTime' => 'register_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * maxLatency  最大延时  单位：ms
    * avgLatency  平均延时  单位：ms
    * reqCount  请求总次数
    * reqCount2xx  2xx响应码总次数
    * reqCount4xx  4xx响应码总次数
    * reqCount5xx  5xx响应码总次数
    * reqCountError  错误次数
    * outputThroughput  下行吞吐量（byte）
    * inputThroughput  上行吞吐量（byte）
    * currentMinute  API访问的UTC时间戳
    * groupId  API分组编号
    * provider  API拥有者
    * reqTime  API请求时间
    * registerTime  记录时间
    *
    * @var string[]
    */
    protected static $setters = [
            'maxLatency' => 'setMaxLatency',
            'avgLatency' => 'setAvgLatency',
            'reqCount' => 'setReqCount',
            'reqCount2xx' => 'setReqCount2xx',
            'reqCount4xx' => 'setReqCount4xx',
            'reqCount5xx' => 'setReqCount5xx',
            'reqCountError' => 'setReqCountError',
            'outputThroughput' => 'setOutputThroughput',
            'inputThroughput' => 'setInputThroughput',
            'currentMinute' => 'setCurrentMinute',
            'groupId' => 'setGroupId',
            'provider' => 'setProvider',
            'reqTime' => 'setReqTime',
            'registerTime' => 'setRegisterTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * maxLatency  最大延时  单位：ms
    * avgLatency  平均延时  单位：ms
    * reqCount  请求总次数
    * reqCount2xx  2xx响应码总次数
    * reqCount4xx  4xx响应码总次数
    * reqCount5xx  5xx响应码总次数
    * reqCountError  错误次数
    * outputThroughput  下行吞吐量（byte）
    * inputThroughput  上行吞吐量（byte）
    * currentMinute  API访问的UTC时间戳
    * groupId  API分组编号
    * provider  API拥有者
    * reqTime  API请求时间
    * registerTime  记录时间
    *
    * @var string[]
    */
    protected static $getters = [
            'maxLatency' => 'getMaxLatency',
            'avgLatency' => 'getAvgLatency',
            'reqCount' => 'getReqCount',
            'reqCount2xx' => 'getReqCount2xx',
            'reqCount4xx' => 'getReqCount4xx',
            'reqCount5xx' => 'getReqCount5xx',
            'reqCountError' => 'getReqCountError',
            'outputThroughput' => 'getOutputThroughput',
            'inputThroughput' => 'getInputThroughput',
            'currentMinute' => 'getCurrentMinute',
            'groupId' => 'getGroupId',
            'provider' => 'getProvider',
            'reqTime' => 'getReqTime',
            'registerTime' => 'getRegisterTime'
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
        $this->container['maxLatency'] = isset($data['maxLatency']) ? $data['maxLatency'] : null;
        $this->container['avgLatency'] = isset($data['avgLatency']) ? $data['avgLatency'] : null;
        $this->container['reqCount'] = isset($data['reqCount']) ? $data['reqCount'] : null;
        $this->container['reqCount2xx'] = isset($data['reqCount2xx']) ? $data['reqCount2xx'] : null;
        $this->container['reqCount4xx'] = isset($data['reqCount4xx']) ? $data['reqCount4xx'] : null;
        $this->container['reqCount5xx'] = isset($data['reqCount5xx']) ? $data['reqCount5xx'] : null;
        $this->container['reqCountError'] = isset($data['reqCountError']) ? $data['reqCountError'] : null;
        $this->container['outputThroughput'] = isset($data['outputThroughput']) ? $data['outputThroughput'] : null;
        $this->container['inputThroughput'] = isset($data['inputThroughput']) ? $data['inputThroughput'] : null;
        $this->container['currentMinute'] = isset($data['currentMinute']) ? $data['currentMinute'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['reqTime'] = isset($data['reqTime']) ? $data['reqTime'] : null;
        $this->container['registerTime'] = isset($data['registerTime']) ? $data['registerTime'] : null;
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
    * Gets maxLatency
    *  最大延时  单位：ms
    *
    * @return int|null
    */
    public function getMaxLatency()
    {
        return $this->container['maxLatency'];
    }

    /**
    * Sets maxLatency
    *
    * @param int|null $maxLatency 最大延时  单位：ms
    *
    * @return $this
    */
    public function setMaxLatency($maxLatency)
    {
        $this->container['maxLatency'] = $maxLatency;
        return $this;
    }

    /**
    * Gets avgLatency
    *  平均延时  单位：ms
    *
    * @return float|null
    */
    public function getAvgLatency()
    {
        return $this->container['avgLatency'];
    }

    /**
    * Sets avgLatency
    *
    * @param float|null $avgLatency 平均延时  单位：ms
    *
    * @return $this
    */
    public function setAvgLatency($avgLatency)
    {
        $this->container['avgLatency'] = $avgLatency;
        return $this;
    }

    /**
    * Gets reqCount
    *  请求总次数
    *
    * @return int|null
    */
    public function getReqCount()
    {
        return $this->container['reqCount'];
    }

    /**
    * Sets reqCount
    *
    * @param int|null $reqCount 请求总次数
    *
    * @return $this
    */
    public function setReqCount($reqCount)
    {
        $this->container['reqCount'] = $reqCount;
        return $this;
    }

    /**
    * Gets reqCount2xx
    *  2xx响应码总次数
    *
    * @return int|null
    */
    public function getReqCount2xx()
    {
        return $this->container['reqCount2xx'];
    }

    /**
    * Sets reqCount2xx
    *
    * @param int|null $reqCount2xx 2xx响应码总次数
    *
    * @return $this
    */
    public function setReqCount2xx($reqCount2xx)
    {
        $this->container['reqCount2xx'] = $reqCount2xx;
        return $this;
    }

    /**
    * Gets reqCount4xx
    *  4xx响应码总次数
    *
    * @return int|null
    */
    public function getReqCount4xx()
    {
        return $this->container['reqCount4xx'];
    }

    /**
    * Sets reqCount4xx
    *
    * @param int|null $reqCount4xx 4xx响应码总次数
    *
    * @return $this
    */
    public function setReqCount4xx($reqCount4xx)
    {
        $this->container['reqCount4xx'] = $reqCount4xx;
        return $this;
    }

    /**
    * Gets reqCount5xx
    *  5xx响应码总次数
    *
    * @return int|null
    */
    public function getReqCount5xx()
    {
        return $this->container['reqCount5xx'];
    }

    /**
    * Sets reqCount5xx
    *
    * @param int|null $reqCount5xx 5xx响应码总次数
    *
    * @return $this
    */
    public function setReqCount5xx($reqCount5xx)
    {
        $this->container['reqCount5xx'] = $reqCount5xx;
        return $this;
    }

    /**
    * Gets reqCountError
    *  错误次数
    *
    * @return int|null
    */
    public function getReqCountError()
    {
        return $this->container['reqCountError'];
    }

    /**
    * Sets reqCountError
    *
    * @param int|null $reqCountError 错误次数
    *
    * @return $this
    */
    public function setReqCountError($reqCountError)
    {
        $this->container['reqCountError'] = $reqCountError;
        return $this;
    }

    /**
    * Gets outputThroughput
    *  下行吞吐量（byte）
    *
    * @return int|null
    */
    public function getOutputThroughput()
    {
        return $this->container['outputThroughput'];
    }

    /**
    * Sets outputThroughput
    *
    * @param int|null $outputThroughput 下行吞吐量（byte）
    *
    * @return $this
    */
    public function setOutputThroughput($outputThroughput)
    {
        $this->container['outputThroughput'] = $outputThroughput;
        return $this;
    }

    /**
    * Gets inputThroughput
    *  上行吞吐量（byte）
    *
    * @return int|null
    */
    public function getInputThroughput()
    {
        return $this->container['inputThroughput'];
    }

    /**
    * Sets inputThroughput
    *
    * @param int|null $inputThroughput 上行吞吐量（byte）
    *
    * @return $this
    */
    public function setInputThroughput($inputThroughput)
    {
        $this->container['inputThroughput'] = $inputThroughput;
        return $this;
    }

    /**
    * Gets currentMinute
    *  API访问的UTC时间戳
    *
    * @return int|null
    */
    public function getCurrentMinute()
    {
        return $this->container['currentMinute'];
    }

    /**
    * Sets currentMinute
    *
    * @param int|null $currentMinute API访问的UTC时间戳
    *
    * @return $this
    */
    public function setCurrentMinute($currentMinute)
    {
        $this->container['currentMinute'] = $currentMinute;
        return $this;
    }

    /**
    * Gets groupId
    *  API分组编号
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId API分组编号
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets provider
    *  API拥有者
    *
    * @return string|null
    */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
    * Sets provider
    *
    * @param string|null $provider API拥有者
    *
    * @return $this
    */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;
        return $this;
    }

    /**
    * Gets reqTime
    *  API请求时间
    *
    * @return \DateTime|null
    */
    public function getReqTime()
    {
        return $this->container['reqTime'];
    }

    /**
    * Sets reqTime
    *
    * @param \DateTime|null $reqTime API请求时间
    *
    * @return $this
    */
    public function setReqTime($reqTime)
    {
        $this->container['reqTime'] = $reqTime;
        return $this;
    }

    /**
    * Gets registerTime
    *  记录时间
    *
    * @return \DateTime|null
    */
    public function getRegisterTime()
    {
        return $this->container['registerTime'];
    }

    /**
    * Sets registerTime
    *
    * @param \DateTime|null $registerTime 记录时间
    *
    * @return $this
    */
    public function setRegisterTime($registerTime)
    {
        $this->container['registerTime'] = $registerTime;
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

