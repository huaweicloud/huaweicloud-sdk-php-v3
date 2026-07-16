<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Event implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Event';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sampleTime  采样时间
    * count  个数
    * sessionStatus  会话状态
    * waitEventType  等待事件类型
    * waitEventName  等待事件名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sampleTime' => 'string',
            'count' => 'int',
            'sessionStatus' => 'string',
            'waitEventType' => 'string',
            'waitEventName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sampleTime  采样时间
    * count  个数
    * sessionStatus  会话状态
    * waitEventType  等待事件类型
    * waitEventName  等待事件名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sampleTime' => null,
        'count' => 'int32',
        'sessionStatus' => null,
        'waitEventType' => null,
        'waitEventName' => null
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
    * sampleTime  采样时间
    * count  个数
    * sessionStatus  会话状态
    * waitEventType  等待事件类型
    * waitEventName  等待事件名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sampleTime' => 'sample_time',
            'count' => 'count',
            'sessionStatus' => 'session_status',
            'waitEventType' => 'wait_event_type',
            'waitEventName' => 'wait_event_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sampleTime  采样时间
    * count  个数
    * sessionStatus  会话状态
    * waitEventType  等待事件类型
    * waitEventName  等待事件名称
    *
    * @var string[]
    */
    protected static $setters = [
            'sampleTime' => 'setSampleTime',
            'count' => 'setCount',
            'sessionStatus' => 'setSessionStatus',
            'waitEventType' => 'setWaitEventType',
            'waitEventName' => 'setWaitEventName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sampleTime  采样时间
    * count  个数
    * sessionStatus  会话状态
    * waitEventType  等待事件类型
    * waitEventName  等待事件名称
    *
    * @var string[]
    */
    protected static $getters = [
            'sampleTime' => 'getSampleTime',
            'count' => 'getCount',
            'sessionStatus' => 'getSessionStatus',
            'waitEventType' => 'getWaitEventType',
            'waitEventName' => 'getWaitEventName'
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
        $this->container['sampleTime'] = isset($data['sampleTime']) ? $data['sampleTime'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['sessionStatus'] = isset($data['sessionStatus']) ? $data['sessionStatus'] : null;
        $this->container['waitEventType'] = isset($data['waitEventType']) ? $data['waitEventType'] : null;
        $this->container['waitEventName'] = isset($data['waitEventName']) ? $data['waitEventName'] : null;
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
    * Gets sampleTime
    *  采样时间
    *
    * @return string|null
    */
    public function getSampleTime()
    {
        return $this->container['sampleTime'];
    }

    /**
    * Sets sampleTime
    *
    * @param string|null $sampleTime 采样时间
    *
    * @return $this
    */
    public function setSampleTime($sampleTime)
    {
        $this->container['sampleTime'] = $sampleTime;
        return $this;
    }

    /**
    * Gets count
    *  个数
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 个数
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets sessionStatus
    *  会话状态
    *
    * @return string|null
    */
    public function getSessionStatus()
    {
        return $this->container['sessionStatus'];
    }

    /**
    * Sets sessionStatus
    *
    * @param string|null $sessionStatus 会话状态
    *
    * @return $this
    */
    public function setSessionStatus($sessionStatus)
    {
        $this->container['sessionStatus'] = $sessionStatus;
        return $this;
    }

    /**
    * Gets waitEventType
    *  等待事件类型
    *
    * @return string|null
    */
    public function getWaitEventType()
    {
        return $this->container['waitEventType'];
    }

    /**
    * Sets waitEventType
    *
    * @param string|null $waitEventType 等待事件类型
    *
    * @return $this
    */
    public function setWaitEventType($waitEventType)
    {
        $this->container['waitEventType'] = $waitEventType;
        return $this;
    }

    /**
    * Gets waitEventName
    *  等待事件名称
    *
    * @return string|null
    */
    public function getWaitEventName()
    {
        return $this->container['waitEventName'];
    }

    /**
    * Sets waitEventName
    *
    * @param string|null $waitEventName 等待事件名称
    *
    * @return $this
    */
    public function setWaitEventName($waitEventName)
    {
        $this->container['waitEventName'] = $waitEventName;
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

