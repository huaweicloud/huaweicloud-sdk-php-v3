<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SetInstanceScheduleEventsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SetInstanceScheduleEventsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operationType  **参数解释**：  事件操作类型。  **约束限制**：  不涉及。  **取值范围**：  - execute：授权立即执行。 - cancel：授权取消执行。 - reservation：授权预约执行。  **默认取值**：  不涉及。
    * eventInstances  **参数解释**：  事件信息。  **约束限制**：  批量事件个数不得超过20个。
    * eventScheduleWindow  eventScheduleWindow
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operationType' => 'string',
            'eventInstances' => '\HuaweiCloud\SDK\GaussDB\V3\Model\EventInstances[]',
            'eventScheduleWindow' => '\HuaweiCloud\SDK\GaussDB\V3\Model\EventScheduleWindow'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operationType  **参数解释**：  事件操作类型。  **约束限制**：  不涉及。  **取值范围**：  - execute：授权立即执行。 - cancel：授权取消执行。 - reservation：授权预约执行。  **默认取值**：  不涉及。
    * eventInstances  **参数解释**：  事件信息。  **约束限制**：  批量事件个数不得超过20个。
    * eventScheduleWindow  eventScheduleWindow
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operationType' => null,
        'eventInstances' => null,
        'eventScheduleWindow' => null
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
    * operationType  **参数解释**：  事件操作类型。  **约束限制**：  不涉及。  **取值范围**：  - execute：授权立即执行。 - cancel：授权取消执行。 - reservation：授权预约执行。  **默认取值**：  不涉及。
    * eventInstances  **参数解释**：  事件信息。  **约束限制**：  批量事件个数不得超过20个。
    * eventScheduleWindow  eventScheduleWindow
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operationType' => 'operation_type',
            'eventInstances' => 'event_instances',
            'eventScheduleWindow' => 'event_schedule_window'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operationType  **参数解释**：  事件操作类型。  **约束限制**：  不涉及。  **取值范围**：  - execute：授权立即执行。 - cancel：授权取消执行。 - reservation：授权预约执行。  **默认取值**：  不涉及。
    * eventInstances  **参数解释**：  事件信息。  **约束限制**：  批量事件个数不得超过20个。
    * eventScheduleWindow  eventScheduleWindow
    *
    * @var string[]
    */
    protected static $setters = [
            'operationType' => 'setOperationType',
            'eventInstances' => 'setEventInstances',
            'eventScheduleWindow' => 'setEventScheduleWindow'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operationType  **参数解释**：  事件操作类型。  **约束限制**：  不涉及。  **取值范围**：  - execute：授权立即执行。 - cancel：授权取消执行。 - reservation：授权预约执行。  **默认取值**：  不涉及。
    * eventInstances  **参数解释**：  事件信息。  **约束限制**：  批量事件个数不得超过20个。
    * eventScheduleWindow  eventScheduleWindow
    *
    * @var string[]
    */
    protected static $getters = [
            'operationType' => 'getOperationType',
            'eventInstances' => 'getEventInstances',
            'eventScheduleWindow' => 'getEventScheduleWindow'
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
        $this->container['operationType'] = isset($data['operationType']) ? $data['operationType'] : null;
        $this->container['eventInstances'] = isset($data['eventInstances']) ? $data['eventInstances'] : null;
        $this->container['eventScheduleWindow'] = isset($data['eventScheduleWindow']) ? $data['eventScheduleWindow'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['operationType'] === null) {
            $invalidProperties[] = "'operationType' can't be null";
        }
        if ($this->container['eventInstances'] === null) {
            $invalidProperties[] = "'eventInstances' can't be null";
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
    * Gets operationType
    *  **参数解释**：  事件操作类型。  **约束限制**：  不涉及。  **取值范围**：  - execute：授权立即执行。 - cancel：授权取消执行。 - reservation：授权预约执行。  **默认取值**：  不涉及。
    *
    * @return string
    */
    public function getOperationType()
    {
        return $this->container['operationType'];
    }

    /**
    * Sets operationType
    *
    * @param string $operationType **参数解释**：  事件操作类型。  **约束限制**：  不涉及。  **取值范围**：  - execute：授权立即执行。 - cancel：授权取消执行。 - reservation：授权预约执行。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setOperationType($operationType)
    {
        $this->container['operationType'] = $operationType;
        return $this;
    }

    /**
    * Gets eventInstances
    *  **参数解释**：  事件信息。  **约束限制**：  批量事件个数不得超过20个。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\EventInstances[]
    */
    public function getEventInstances()
    {
        return $this->container['eventInstances'];
    }

    /**
    * Sets eventInstances
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\EventInstances[] $eventInstances **参数解释**：  事件信息。  **约束限制**：  批量事件个数不得超过20个。
    *
    * @return $this
    */
    public function setEventInstances($eventInstances)
    {
        $this->container['eventInstances'] = $eventInstances;
        return $this;
    }

    /**
    * Gets eventScheduleWindow
    *  eventScheduleWindow
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\EventScheduleWindow|null
    */
    public function getEventScheduleWindow()
    {
        return $this->container['eventScheduleWindow'];
    }

    /**
    * Sets eventScheduleWindow
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\EventScheduleWindow|null $eventScheduleWindow eventScheduleWindow
    *
    * @return $this
    */
    public function setEventScheduleWindow($eventScheduleWindow)
    {
        $this->container['eventScheduleWindow'] = $eventScheduleWindow;
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

