<?php

namespace HuaweiCloud\SDK\CloudRTC\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RTCCause implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RTCCause';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ts  异常事件的时间戳
    * eventId  异常事件ID
    * peerId  对端的用户ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ts' => 'string',
            'eventId' => 'string',
            'peerId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ts  异常事件的时间戳
    * eventId  异常事件ID
    * peerId  对端的用户ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ts' => null,
        'eventId' => null,
        'peerId' => null
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
    * ts  异常事件的时间戳
    * eventId  异常事件ID
    * peerId  对端的用户ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ts' => 'ts',
            'eventId' => 'event_id',
            'peerId' => 'peer_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ts  异常事件的时间戳
    * eventId  异常事件ID
    * peerId  对端的用户ID
    *
    * @var string[]
    */
    protected static $setters = [
            'ts' => 'setTs',
            'eventId' => 'setEventId',
            'peerId' => 'setPeerId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ts  异常事件的时间戳
    * eventId  异常事件ID
    * peerId  对端的用户ID
    *
    * @var string[]
    */
    protected static $getters = [
            'ts' => 'getTs',
            'eventId' => 'getEventId',
            'peerId' => 'getPeerId'
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
        $this->container['ts'] = isset($data['ts']) ? $data['ts'] : null;
        $this->container['eventId'] = isset($data['eventId']) ? $data['eventId'] : null;
        $this->container['peerId'] = isset($data['peerId']) ? $data['peerId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['ts']) && (mb_strlen($this->container['ts']) > 64)) {
                $invalidProperties[] = "invalid value for 'ts', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['ts']) && (mb_strlen($this->container['ts']) < 1)) {
                $invalidProperties[] = "invalid value for 'ts', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['eventId']) && (mb_strlen($this->container['eventId']) > 64)) {
                $invalidProperties[] = "invalid value for 'eventId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['eventId']) && (mb_strlen($this->container['eventId']) < 1)) {
                $invalidProperties[] = "invalid value for 'eventId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['peerId']) && (mb_strlen($this->container['peerId']) > 64)) {
                $invalidProperties[] = "invalid value for 'peerId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['peerId']) && (mb_strlen($this->container['peerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'peerId', the character length must be bigger than or equal to 1.";
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
    * Gets ts
    *  异常事件的时间戳
    *
    * @return string|null
    */
    public function getTs()
    {
        return $this->container['ts'];
    }

    /**
    * Sets ts
    *
    * @param string|null $ts 异常事件的时间戳
    *
    * @return $this
    */
    public function setTs($ts)
    {
        $this->container['ts'] = $ts;
        return $this;
    }

    /**
    * Gets eventId
    *  异常事件ID
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
    * @param string|null $eventId 异常事件ID
    *
    * @return $this
    */
    public function setEventId($eventId)
    {
        $this->container['eventId'] = $eventId;
        return $this;
    }

    /**
    * Gets peerId
    *  对端的用户ID
    *
    * @return string|null
    */
    public function getPeerId()
    {
        return $this->container['peerId'];
    }

    /**
    * Sets peerId
    *
    * @param string|null $peerId 对端的用户ID
    *
    * @return $this
    */
    public function setPeerId($peerId)
    {
        $this->container['peerId'] = $peerId;
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

