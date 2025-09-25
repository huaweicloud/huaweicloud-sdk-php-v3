<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventTimeInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventTimeInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * events  **参数解释**: TOP5事件耗时信息列表。
    * leftTime  **参数解释**: 其余事件耗时（单位：微秒）。 **取值范围**: 不涉及。
    * otherTime  **参数解释**: 事件外耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'events' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\TopEventInfoResult[]',
            'leftTime' => 'int',
            'otherTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * events  **参数解释**: TOP5事件耗时信息列表。
    * leftTime  **参数解释**: 其余事件耗时（单位：微秒）。 **取值范围**: 不涉及。
    * otherTime  **参数解释**: 事件外耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'events' => null,
        'leftTime' => 'int64',
        'otherTime' => 'int64'
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
    * events  **参数解释**: TOP5事件耗时信息列表。
    * leftTime  **参数解释**: 其余事件耗时（单位：微秒）。 **取值范围**: 不涉及。
    * otherTime  **参数解释**: 事件外耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'events' => 'events',
            'leftTime' => 'left_time',
            'otherTime' => 'other_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * events  **参数解释**: TOP5事件耗时信息列表。
    * leftTime  **参数解释**: 其余事件耗时（单位：微秒）。 **取值范围**: 不涉及。
    * otherTime  **参数解释**: 事件外耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'events' => 'setEvents',
            'leftTime' => 'setLeftTime',
            'otherTime' => 'setOtherTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * events  **参数解释**: TOP5事件耗时信息列表。
    * leftTime  **参数解释**: 其余事件耗时（单位：微秒）。 **取值范围**: 不涉及。
    * otherTime  **参数解释**: 事件外耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'events' => 'getEvents',
            'leftTime' => 'getLeftTime',
            'otherTime' => 'getOtherTime'
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
        $this->container['events'] = isset($data['events']) ? $data['events'] : null;
        $this->container['leftTime'] = isset($data['leftTime']) ? $data['leftTime'] : null;
        $this->container['otherTime'] = isset($data['otherTime']) ? $data['otherTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['events'] === null) {
            $invalidProperties[] = "'events' can't be null";
        }
        if ($this->container['leftTime'] === null) {
            $invalidProperties[] = "'leftTime' can't be null";
        }
        if ($this->container['otherTime'] === null) {
            $invalidProperties[] = "'otherTime' can't be null";
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
    * Gets events
    *  **参数解释**: TOP5事件耗时信息列表。
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\TopEventInfoResult[]
    */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
    * Sets events
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\TopEventInfoResult[] $events **参数解释**: TOP5事件耗时信息列表。
    *
    * @return $this
    */
    public function setEvents($events)
    {
        $this->container['events'] = $events;
        return $this;
    }

    /**
    * Gets leftTime
    *  **参数解释**: 其余事件耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return int
    */
    public function getLeftTime()
    {
        return $this->container['leftTime'];
    }

    /**
    * Sets leftTime
    *
    * @param int $leftTime **参数解释**: 其余事件耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setLeftTime($leftTime)
    {
        $this->container['leftTime'] = $leftTime;
        return $this;
    }

    /**
    * Gets otherTime
    *  **参数解释**: 事件外耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return int
    */
    public function getOtherTime()
    {
        return $this->container['otherTime'];
    }

    /**
    * Sets otherTime
    *
    * @param int $otherTime **参数解释**: 事件外耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setOtherTime($otherTime)
    {
        $this->container['otherTime'] = $otherTime;
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

