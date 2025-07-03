<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TraceTopologyLineInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TraceTopologyLineInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startTime  开始时间。
    * timeUsed  耗时。
    * argument  参数信息，比如调用的url信息等。
    * eventId  event的id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startTime' => 'int',
            'timeUsed' => 'int',
            'argument' => 'string',
            'eventId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startTime  开始时间。
    * timeUsed  耗时。
    * argument  参数信息，比如调用的url信息等。
    * eventId  event的id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startTime' => 'int64',
        'timeUsed' => 'int64',
        'argument' => null,
        'eventId' => null
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
    * startTime  开始时间。
    * timeUsed  耗时。
    * argument  参数信息，比如调用的url信息等。
    * eventId  event的id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startTime' => 'start_time',
            'timeUsed' => 'time_used',
            'argument' => 'argument',
            'eventId' => 'event_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startTime  开始时间。
    * timeUsed  耗时。
    * argument  参数信息，比如调用的url信息等。
    * eventId  event的id。
    *
    * @var string[]
    */
    protected static $setters = [
            'startTime' => 'setStartTime',
            'timeUsed' => 'setTimeUsed',
            'argument' => 'setArgument',
            'eventId' => 'setEventId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startTime  开始时间。
    * timeUsed  耗时。
    * argument  参数信息，比如调用的url信息等。
    * eventId  event的id。
    *
    * @var string[]
    */
    protected static $getters = [
            'startTime' => 'getStartTime',
            'timeUsed' => 'getTimeUsed',
            'argument' => 'getArgument',
            'eventId' => 'getEventId'
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
        $this->container['timeUsed'] = isset($data['timeUsed']) ? $data['timeUsed'] : null;
        $this->container['argument'] = isset($data['argument']) ? $data['argument'] : null;
        $this->container['eventId'] = isset($data['eventId']) ? $data['eventId'] : null;
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
    *  开始时间。
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
    * @param int|null $startTime 开始时间。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets timeUsed
    *  耗时。
    *
    * @return int|null
    */
    public function getTimeUsed()
    {
        return $this->container['timeUsed'];
    }

    /**
    * Sets timeUsed
    *
    * @param int|null $timeUsed 耗时。
    *
    * @return $this
    */
    public function setTimeUsed($timeUsed)
    {
        $this->container['timeUsed'] = $timeUsed;
        return $this;
    }

    /**
    * Gets argument
    *  参数信息，比如调用的url信息等。
    *
    * @return string|null
    */
    public function getArgument()
    {
        return $this->container['argument'];
    }

    /**
    * Sets argument
    *
    * @param string|null $argument 参数信息，比如调用的url信息等。
    *
    * @return $this
    */
    public function setArgument($argument)
    {
        $this->container['argument'] = $argument;
        return $this;
    }

    /**
    * Gets eventId
    *  event的id。
    *
    * @return string|null
    */
    public function getEventId()
    {
        return $this->container['eventId'];
    }

    /**
    * Sets eventId
    *
    * @param string|null $eventId event的id。
    *
    * @return $this
    */
    public function setEventId($eventId)
    {
        $this->container['eventId'] = $eventId;
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

