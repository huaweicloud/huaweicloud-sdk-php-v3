<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TopEventInfoResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TopEventInfoResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eventName  **参数解释**: 事件名。 **取值范围**: 不涉及。
    * eventTime  **参数解释**: 事件耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eventName' => 'string',
            'eventTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eventName  **参数解释**: 事件名。 **取值范围**: 不涉及。
    * eventTime  **参数解释**: 事件耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eventName' => null,
        'eventTime' => 'int64'
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
    * eventName  **参数解释**: 事件名。 **取值范围**: 不涉及。
    * eventTime  **参数解释**: 事件耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eventName' => 'event_name',
            'eventTime' => 'event_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eventName  **参数解释**: 事件名。 **取值范围**: 不涉及。
    * eventTime  **参数解释**: 事件耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'eventName' => 'setEventName',
            'eventTime' => 'setEventTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eventName  **参数解释**: 事件名。 **取值范围**: 不涉及。
    * eventTime  **参数解释**: 事件耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'eventName' => 'getEventName',
            'eventTime' => 'getEventTime'
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
        $this->container['eventName'] = isset($data['eventName']) ? $data['eventName'] : null;
        $this->container['eventTime'] = isset($data['eventTime']) ? $data['eventTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['eventName'] === null) {
            $invalidProperties[] = "'eventName' can't be null";
        }
        if ($this->container['eventTime'] === null) {
            $invalidProperties[] = "'eventTime' can't be null";
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
    * Gets eventName
    *  **参数解释**: 事件名。 **取值范围**: 不涉及。
    *
    * @return string
    */
    public function getEventName()
    {
        return $this->container['eventName'];
    }

    /**
    * Sets eventName
    *
    * @param string $eventName **参数解释**: 事件名。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setEventName($eventName)
    {
        $this->container['eventName'] = $eventName;
        return $this;
    }

    /**
    * Gets eventTime
    *  **参数解释**: 事件耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return int
    */
    public function getEventTime()
    {
        return $this->container['eventTime'];
    }

    /**
    * Sets eventTime
    *
    * @param int $eventTime **参数解释**: 事件耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setEventTime($eventTime)
    {
        $this->container['eventTime'] = $eventTime;
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

