<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScheduleConf implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScheduleConf';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scheduleStart  **参数解释**： 调度开始时间。 **取值范围**： 不涉及。
    * scheduleEnd  **参数解释**： 调度结束时间。 **取值范围**： 不涉及。
    * scheduleType  **参数解释**： 调度类型。 **取值范围**： 不涉及。
    * scheduleDate  **参数解释**： 调度日期。 **取值范围**： 不涉及。
    * scheduleTime  **参数解释**： 调度时间列表。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scheduleStart' => 'string',
            'scheduleEnd' => 'string',
            'scheduleType' => 'string',
            'scheduleDate' => 'int[]',
            'scheduleTime' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scheduleStart  **参数解释**： 调度开始时间。 **取值范围**： 不涉及。
    * scheduleEnd  **参数解释**： 调度结束时间。 **取值范围**： 不涉及。
    * scheduleType  **参数解释**： 调度类型。 **取值范围**： 不涉及。
    * scheduleDate  **参数解释**： 调度日期。 **取值范围**： 不涉及。
    * scheduleTime  **参数解释**： 调度时间列表。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scheduleStart' => null,
        'scheduleEnd' => null,
        'scheduleType' => null,
        'scheduleDate' => 'int32',
        'scheduleTime' => null
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
    * scheduleStart  **参数解释**： 调度开始时间。 **取值范围**： 不涉及。
    * scheduleEnd  **参数解释**： 调度结束时间。 **取值范围**： 不涉及。
    * scheduleType  **参数解释**： 调度类型。 **取值范围**： 不涉及。
    * scheduleDate  **参数解释**： 调度日期。 **取值范围**： 不涉及。
    * scheduleTime  **参数解释**： 调度时间列表。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scheduleStart' => 'schedule_start',
            'scheduleEnd' => 'schedule_end',
            'scheduleType' => 'schedule_type',
            'scheduleDate' => 'schedule_date',
            'scheduleTime' => 'schedule_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scheduleStart  **参数解释**： 调度开始时间。 **取值范围**： 不涉及。
    * scheduleEnd  **参数解释**： 调度结束时间。 **取值范围**： 不涉及。
    * scheduleType  **参数解释**： 调度类型。 **取值范围**： 不涉及。
    * scheduleDate  **参数解释**： 调度日期。 **取值范围**： 不涉及。
    * scheduleTime  **参数解释**： 调度时间列表。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'scheduleStart' => 'setScheduleStart',
            'scheduleEnd' => 'setScheduleEnd',
            'scheduleType' => 'setScheduleType',
            'scheduleDate' => 'setScheduleDate',
            'scheduleTime' => 'setScheduleTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scheduleStart  **参数解释**： 调度开始时间。 **取值范围**： 不涉及。
    * scheduleEnd  **参数解释**： 调度结束时间。 **取值范围**： 不涉及。
    * scheduleType  **参数解释**： 调度类型。 **取值范围**： 不涉及。
    * scheduleDate  **参数解释**： 调度日期。 **取值范围**： 不涉及。
    * scheduleTime  **参数解释**： 调度时间列表。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'scheduleStart' => 'getScheduleStart',
            'scheduleEnd' => 'getScheduleEnd',
            'scheduleType' => 'getScheduleType',
            'scheduleDate' => 'getScheduleDate',
            'scheduleTime' => 'getScheduleTime'
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
        $this->container['scheduleStart'] = isset($data['scheduleStart']) ? $data['scheduleStart'] : null;
        $this->container['scheduleEnd'] = isset($data['scheduleEnd']) ? $data['scheduleEnd'] : null;
        $this->container['scheduleType'] = isset($data['scheduleType']) ? $data['scheduleType'] : null;
        $this->container['scheduleDate'] = isset($data['scheduleDate']) ? $data['scheduleDate'] : null;
        $this->container['scheduleTime'] = isset($data['scheduleTime']) ? $data['scheduleTime'] : null;
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
    * Gets scheduleStart
    *  **参数解释**： 调度开始时间。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getScheduleStart()
    {
        return $this->container['scheduleStart'];
    }

    /**
    * Sets scheduleStart
    *
    * @param string|null $scheduleStart **参数解释**： 调度开始时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setScheduleStart($scheduleStart)
    {
        $this->container['scheduleStart'] = $scheduleStart;
        return $this;
    }

    /**
    * Gets scheduleEnd
    *  **参数解释**： 调度结束时间。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getScheduleEnd()
    {
        return $this->container['scheduleEnd'];
    }

    /**
    * Sets scheduleEnd
    *
    * @param string|null $scheduleEnd **参数解释**： 调度结束时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setScheduleEnd($scheduleEnd)
    {
        $this->container['scheduleEnd'] = $scheduleEnd;
        return $this;
    }

    /**
    * Gets scheduleType
    *  **参数解释**： 调度类型。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getScheduleType()
    {
        return $this->container['scheduleType'];
    }

    /**
    * Sets scheduleType
    *
    * @param string|null $scheduleType **参数解释**： 调度类型。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setScheduleType($scheduleType)
    {
        $this->container['scheduleType'] = $scheduleType;
        return $this;
    }

    /**
    * Gets scheduleDate
    *  **参数解释**： 调度日期。 **取值范围**： 不涉及。
    *
    * @return int[]|null
    */
    public function getScheduleDate()
    {
        return $this->container['scheduleDate'];
    }

    /**
    * Sets scheduleDate
    *
    * @param int[]|null $scheduleDate **参数解释**： 调度日期。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setScheduleDate($scheduleDate)
    {
        $this->container['scheduleDate'] = $scheduleDate;
        return $this;
    }

    /**
    * Gets scheduleTime
    *  **参数解释**： 调度时间列表。 **取值范围**： 不涉及。
    *
    * @return string[]|null
    */
    public function getScheduleTime()
    {
        return $this->container['scheduleTime'];
    }

    /**
    * Sets scheduleTime
    *
    * @param string[]|null $scheduleTime **参数解释**： 调度时间列表。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setScheduleTime($scheduleTime)
    {
        $this->container['scheduleTime'] = $scheduleTime;
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

