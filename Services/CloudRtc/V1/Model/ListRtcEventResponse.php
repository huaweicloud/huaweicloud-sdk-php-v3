<?php

namespace HuaweiCloud\SDK\CloudRTC\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRtcEventResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRtcEventResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ctime  时间
    * eventId  异常事件ID
    * eventInfo  异常事件信息
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ctime' => 'string',
            'eventId' => 'string',
            'eventInfo' => 'string',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ctime  时间
    * eventId  异常事件ID
    * eventInfo  异常事件信息
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ctime' => null,
        'eventId' => null,
        'eventInfo' => null,
        'xRequestId' => null
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
    * ctime  时间
    * eventId  异常事件ID
    * eventInfo  异常事件信息
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ctime' => 'ctime',
            'eventId' => 'event_id',
            'eventInfo' => 'event_info',
            'xRequestId' => 'X-request-id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ctime  时间
    * eventId  异常事件ID
    * eventInfo  异常事件信息
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'ctime' => 'setCtime',
            'eventId' => 'setEventId',
            'eventInfo' => 'setEventInfo',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ctime  时间
    * eventId  异常事件ID
    * eventInfo  异常事件信息
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'ctime' => 'getCtime',
            'eventId' => 'getEventId',
            'eventInfo' => 'getEventInfo',
            'xRequestId' => 'getXRequestId'
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
        $this->container['ctime'] = isset($data['ctime']) ? $data['ctime'] : null;
        $this->container['eventId'] = isset($data['eventId']) ? $data['eventId'] : null;
        $this->container['eventInfo'] = isset($data['eventInfo']) ? $data['eventInfo'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['ctime']) && (mb_strlen($this->container['ctime']) > 64)) {
                $invalidProperties[] = "invalid value for 'ctime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['ctime']) && (mb_strlen($this->container['ctime']) < 1)) {
                $invalidProperties[] = "invalid value for 'ctime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['eventId']) && (mb_strlen($this->container['eventId']) > 64)) {
                $invalidProperties[] = "invalid value for 'eventId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['eventId']) && (mb_strlen($this->container['eventId']) < 1)) {
                $invalidProperties[] = "invalid value for 'eventId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['eventInfo']) && (mb_strlen($this->container['eventInfo']) > 64)) {
                $invalidProperties[] = "invalid value for 'eventInfo', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['eventInfo']) && (mb_strlen($this->container['eventInfo']) < 1)) {
                $invalidProperties[] = "invalid value for 'eventInfo', the character length must be bigger than or equal to 1.";
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
    * Gets ctime
    *  时间
    *
    * @return string|null
    */
    public function getCtime()
    {
        return $this->container['ctime'];
    }

    /**
    * Sets ctime
    *
    * @param string|null $ctime 时间
    *
    * @return $this
    */
    public function setCtime($ctime)
    {
        $this->container['ctime'] = $ctime;
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
    * Gets eventInfo
    *  异常事件信息
    *
    * @return string|null
    */
    public function getEventInfo()
    {
        return $this->container['eventInfo'];
    }

    /**
    * Sets eventInfo
    *
    * @param string|null $eventInfo 异常事件信息
    *
    * @return $this
    */
    public function setEventInfo($eventInfo)
    {
        $this->container['eventInfo'] = $eventInfo;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

