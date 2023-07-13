<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTopicStatusRespQueues implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTopicStatusResp_queues';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  队列ID。
    * minOffset  最小偏移量。
    * maxOffset  最大偏移量。
    * lastMessageTime  最后一条消息的时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'minOffset' => 'int',
            'maxOffset' => 'int',
            'lastMessageTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  队列ID。
    * minOffset  最小偏移量。
    * maxOffset  最大偏移量。
    * lastMessageTime  最后一条消息的时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'minOffset' => 'int32',
        'maxOffset' => 'int32',
        'lastMessageTime' => 'int64'
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
    * id  队列ID。
    * minOffset  最小偏移量。
    * maxOffset  最大偏移量。
    * lastMessageTime  最后一条消息的时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'minOffset' => 'min_offset',
            'maxOffset' => 'max_offset',
            'lastMessageTime' => 'last_message_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  队列ID。
    * minOffset  最小偏移量。
    * maxOffset  最大偏移量。
    * lastMessageTime  最后一条消息的时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'minOffset' => 'setMinOffset',
            'maxOffset' => 'setMaxOffset',
            'lastMessageTime' => 'setLastMessageTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  队列ID。
    * minOffset  最小偏移量。
    * maxOffset  最大偏移量。
    * lastMessageTime  最后一条消息的时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'minOffset' => 'getMinOffset',
            'maxOffset' => 'getMaxOffset',
            'lastMessageTime' => 'getLastMessageTime'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['minOffset'] = isset($data['minOffset']) ? $data['minOffset'] : null;
        $this->container['maxOffset'] = isset($data['maxOffset']) ? $data['maxOffset'] : null;
        $this->container['lastMessageTime'] = isset($data['lastMessageTime']) ? $data['lastMessageTime'] : null;
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
    * Gets id
    *  队列ID。
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 队列ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets minOffset
    *  最小偏移量。
    *
    * @return int|null
    */
    public function getMinOffset()
    {
        return $this->container['minOffset'];
    }

    /**
    * Sets minOffset
    *
    * @param int|null $minOffset 最小偏移量。
    *
    * @return $this
    */
    public function setMinOffset($minOffset)
    {
        $this->container['minOffset'] = $minOffset;
        return $this;
    }

    /**
    * Gets maxOffset
    *  最大偏移量。
    *
    * @return int|null
    */
    public function getMaxOffset()
    {
        return $this->container['maxOffset'];
    }

    /**
    * Sets maxOffset
    *
    * @param int|null $maxOffset 最大偏移量。
    *
    * @return $this
    */
    public function setMaxOffset($maxOffset)
    {
        $this->container['maxOffset'] = $maxOffset;
        return $this;
    }

    /**
    * Gets lastMessageTime
    *  最后一条消息的时间。
    *
    * @return int|null
    */
    public function getLastMessageTime()
    {
        return $this->container['lastMessageTime'];
    }

    /**
    * Sets lastMessageTime
    *
    * @param int|null $lastMessageTime 最后一条消息的时间。
    *
    * @return $this
    */
    public function setLastMessageTime($lastMessageTime)
    {
        $this->container['lastMessageTime'] = $lastMessageTime;
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

