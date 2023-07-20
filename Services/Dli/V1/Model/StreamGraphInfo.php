<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StreamGraphInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StreamGraphInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jid  flink作业id。
    * name  flink作业名字。
    * isStoppable  是否可停止。
    * state  作业运行状态。
    * startTime  作业启动时间。
    * endTime  作业停止时间。
    * duration  作业运行时长。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jid' => 'string',
            'name' => 'string',
            'isStoppable' => 'bool',
            'state' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'duration' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jid  flink作业id。
    * name  flink作业名字。
    * isStoppable  是否可停止。
    * state  作业运行状态。
    * startTime  作业启动时间。
    * endTime  作业停止时间。
    * duration  作业运行时长。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jid' => null,
        'name' => null,
        'isStoppable' => null,
        'state' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'duration' => 'int64'
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
    * jid  flink作业id。
    * name  flink作业名字。
    * isStoppable  是否可停止。
    * state  作业运行状态。
    * startTime  作业启动时间。
    * endTime  作业停止时间。
    * duration  作业运行时长。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jid' => 'jid',
            'name' => 'name',
            'isStoppable' => 'isStoppable',
            'state' => 'state',
            'startTime' => 'start-time',
            'endTime' => 'end-time',
            'duration' => 'duration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jid  flink作业id。
    * name  flink作业名字。
    * isStoppable  是否可停止。
    * state  作业运行状态。
    * startTime  作业启动时间。
    * endTime  作业停止时间。
    * duration  作业运行时长。
    *
    * @var string[]
    */
    protected static $setters = [
            'jid' => 'setJid',
            'name' => 'setName',
            'isStoppable' => 'setIsStoppable',
            'state' => 'setState',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'duration' => 'setDuration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jid  flink作业id。
    * name  flink作业名字。
    * isStoppable  是否可停止。
    * state  作业运行状态。
    * startTime  作业启动时间。
    * endTime  作业停止时间。
    * duration  作业运行时长。
    *
    * @var string[]
    */
    protected static $getters = [
            'jid' => 'getJid',
            'name' => 'getName',
            'isStoppable' => 'getIsStoppable',
            'state' => 'getState',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'duration' => 'getDuration'
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
        $this->container['jid'] = isset($data['jid']) ? $data['jid'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['isStoppable'] = isset($data['isStoppable']) ? $data['isStoppable'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
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
    * Gets jid
    *  flink作业id。
    *
    * @return string|null
    */
    public function getJid()
    {
        return $this->container['jid'];
    }

    /**
    * Sets jid
    *
    * @param string|null $jid flink作业id。
    *
    * @return $this
    */
    public function setJid($jid)
    {
        $this->container['jid'] = $jid;
        return $this;
    }

    /**
    * Gets name
    *  flink作业名字。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name flink作业名字。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets isStoppable
    *  是否可停止。
    *
    * @return bool|null
    */
    public function getIsStoppable()
    {
        return $this->container['isStoppable'];
    }

    /**
    * Sets isStoppable
    *
    * @param bool|null $isStoppable 是否可停止。
    *
    * @return $this
    */
    public function setIsStoppable($isStoppable)
    {
        $this->container['isStoppable'] = $isStoppable;
        return $this;
    }

    /**
    * Gets state
    *  作业运行状态。
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 作业运行状态。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets startTime
    *  作业启动时间。
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
    * @param int|null $startTime 作业启动时间。
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
    *  作业停止时间。
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
    * @param int|null $endTime 作业停止时间。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets duration
    *  作业运行时长。
    *
    * @return int|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param int|null $duration 作业运行时长。
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
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

