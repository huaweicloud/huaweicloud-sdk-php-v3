<?php

namespace HuaweiCloud\SDK\AntiDDoS\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DailyLog implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DailyLog';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startTime  开始时间
    * endTime  结束时间
    * status  防护状态，可选范围： - 1：表示清洗 - 2：表示黑洞
    * triggerBps  触发时流量
    * triggerPps  触发时报文速率
    * triggerHttpPps  触发时HTTP请求速率
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startTime' => 'int',
            'endTime' => 'int',
            'status' => 'int',
            'triggerBps' => 'int',
            'triggerPps' => 'int',
            'triggerHttpPps' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startTime  开始时间
    * endTime  结束时间
    * status  防护状态，可选范围： - 1：表示清洗 - 2：表示黑洞
    * triggerBps  触发时流量
    * triggerPps  触发时报文速率
    * triggerHttpPps  触发时HTTP请求速率
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startTime' => 'int64',
        'endTime' => 'int64',
        'status' => 'int32',
        'triggerBps' => 'int32',
        'triggerPps' => 'int32',
        'triggerHttpPps' => 'int32'
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
    * startTime  开始时间
    * endTime  结束时间
    * status  防护状态，可选范围： - 1：表示清洗 - 2：表示黑洞
    * triggerBps  触发时流量
    * triggerPps  触发时报文速率
    * triggerHttpPps  触发时HTTP请求速率
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'status' => 'status',
            'triggerBps' => 'trigger_bps',
            'triggerPps' => 'trigger_pps',
            'triggerHttpPps' => 'trigger_http_pps'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startTime  开始时间
    * endTime  结束时间
    * status  防护状态，可选范围： - 1：表示清洗 - 2：表示黑洞
    * triggerBps  触发时流量
    * triggerPps  触发时报文速率
    * triggerHttpPps  触发时HTTP请求速率
    *
    * @var string[]
    */
    protected static $setters = [
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'status' => 'setStatus',
            'triggerBps' => 'setTriggerBps',
            'triggerPps' => 'setTriggerPps',
            'triggerHttpPps' => 'setTriggerHttpPps'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startTime  开始时间
    * endTime  结束时间
    * status  防护状态，可选范围： - 1：表示清洗 - 2：表示黑洞
    * triggerBps  触发时流量
    * triggerPps  触发时报文速率
    * triggerHttpPps  触发时HTTP请求速率
    *
    * @var string[]
    */
    protected static $getters = [
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'status' => 'getStatus',
            'triggerBps' => 'getTriggerBps',
            'triggerPps' => 'getTriggerPps',
            'triggerHttpPps' => 'getTriggerHttpPps'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['triggerBps'] = isset($data['triggerBps']) ? $data['triggerBps'] : null;
        $this->container['triggerPps'] = isset($data['triggerPps']) ? $data['triggerPps'] : null;
        $this->container['triggerHttpPps'] = isset($data['triggerHttpPps']) ? $data['triggerHttpPps'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['triggerBps'] === null) {
            $invalidProperties[] = "'triggerBps' can't be null";
        }
        if ($this->container['triggerPps'] === null) {
            $invalidProperties[] = "'triggerPps' can't be null";
        }
        if ($this->container['triggerHttpPps'] === null) {
            $invalidProperties[] = "'triggerHttpPps' can't be null";
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
    * Gets startTime
    *  开始时间
    *
    * @return int
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int $startTime 开始时间
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
    *  结束时间
    *
    * @return int
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int $endTime 结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets status
    *  防护状态，可选范围： - 1：表示清洗 - 2：表示黑洞
    *
    * @return int
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int $status 防护状态，可选范围： - 1：表示清洗 - 2：表示黑洞
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets triggerBps
    *  触发时流量
    *
    * @return int
    */
    public function getTriggerBps()
    {
        return $this->container['triggerBps'];
    }

    /**
    * Sets triggerBps
    *
    * @param int $triggerBps 触发时流量
    *
    * @return $this
    */
    public function setTriggerBps($triggerBps)
    {
        $this->container['triggerBps'] = $triggerBps;
        return $this;
    }

    /**
    * Gets triggerPps
    *  触发时报文速率
    *
    * @return int
    */
    public function getTriggerPps()
    {
        return $this->container['triggerPps'];
    }

    /**
    * Sets triggerPps
    *
    * @param int $triggerPps 触发时报文速率
    *
    * @return $this
    */
    public function setTriggerPps($triggerPps)
    {
        $this->container['triggerPps'] = $triggerPps;
        return $this;
    }

    /**
    * Gets triggerHttpPps
    *  触发时HTTP请求速率
    *
    * @return int
    */
    public function getTriggerHttpPps()
    {
        return $this->container['triggerHttpPps'];
    }

    /**
    * Sets triggerHttpPps
    *
    * @param int $triggerHttpPps 触发时HTTP请求速率
    *
    * @return $this
    */
    public function setTriggerHttpPps($triggerHttpPps)
    {
        $this->container['triggerHttpPps'] = $triggerHttpPps;
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

