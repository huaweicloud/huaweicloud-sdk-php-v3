<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListNotifiedHistoriesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListNotifiedHistoriesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eventSn  告警流水号
    * notifications  通知结果
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eventSn' => 'string',
            'notifications' => '\HuaweiCloud\SDK\Aom\V2\Model\Notifications[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eventSn  告警流水号
    * notifications  通知结果
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eventSn' => null,
        'notifications' => null
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
    * eventSn  告警流水号
    * notifications  通知结果
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eventSn' => 'event_sn',
            'notifications' => 'notifications'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eventSn  告警流水号
    * notifications  通知结果
    *
    * @var string[]
    */
    protected static $setters = [
            'eventSn' => 'setEventSn',
            'notifications' => 'setNotifications'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eventSn  告警流水号
    * notifications  通知结果
    *
    * @var string[]
    */
    protected static $getters = [
            'eventSn' => 'getEventSn',
            'notifications' => 'getNotifications'
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
        $this->container['eventSn'] = isset($data['eventSn']) ? $data['eventSn'] : null;
        $this->container['notifications'] = isset($data['notifications']) ? $data['notifications'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['eventSn']) && (mb_strlen($this->container['eventSn']) > 19)) {
                $invalidProperties[] = "invalid value for 'eventSn', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['eventSn']) && (mb_strlen($this->container['eventSn']) < 19)) {
                $invalidProperties[] = "invalid value for 'eventSn', the character length must be bigger than or equal to 19.";
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
    * Gets eventSn
    *  告警流水号
    *
    * @return string|null
    */
    public function getEventSn()
    {
        return $this->container['eventSn'];
    }

    /**
    * Sets eventSn
    *
    * @param string|null $eventSn 告警流水号
    *
    * @return $this
    */
    public function setEventSn($eventSn)
    {
        $this->container['eventSn'] = $eventSn;
        return $this;
    }

    /**
    * Gets notifications
    *  通知结果
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\Notifications[]|null
    */
    public function getNotifications()
    {
        return $this->container['notifications'];
    }

    /**
    * Sets notifications
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\Notifications[]|null $notifications 通知结果
    *
    * @return $this
    */
    public function setNotifications($notifications)
    {
        $this->container['notifications'] = $notifications;
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

