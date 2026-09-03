<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExecuteWindow implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExecuteWindow';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * plannedExecutionDay  **参数解释**：  计划执行日期，格式为：“yyyy-MM-dd”。  **取值范围**：  不涉及。
    * startTime  **参数解释**：  事件执行窗口开始时间，格式为 \"hh:mm\"。  **取值范围**：  不涉及。
    * endTime  **参数解释**：  事件执行窗口结束时间，格式为 \"hh:mm\"。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'plannedExecutionDay' => 'string',
            'startTime' => 'string',
            'endTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * plannedExecutionDay  **参数解释**：  计划执行日期，格式为：“yyyy-MM-dd”。  **取值范围**：  不涉及。
    * startTime  **参数解释**：  事件执行窗口开始时间，格式为 \"hh:mm\"。  **取值范围**：  不涉及。
    * endTime  **参数解释**：  事件执行窗口结束时间，格式为 \"hh:mm\"。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'plannedExecutionDay' => null,
        'startTime' => null,
        'endTime' => null
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
    * plannedExecutionDay  **参数解释**：  计划执行日期，格式为：“yyyy-MM-dd”。  **取值范围**：  不涉及。
    * startTime  **参数解释**：  事件执行窗口开始时间，格式为 \"hh:mm\"。  **取值范围**：  不涉及。
    * endTime  **参数解释**：  事件执行窗口结束时间，格式为 \"hh:mm\"。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'plannedExecutionDay' => 'planned_execution_day',
            'startTime' => 'start_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * plannedExecutionDay  **参数解释**：  计划执行日期，格式为：“yyyy-MM-dd”。  **取值范围**：  不涉及。
    * startTime  **参数解释**：  事件执行窗口开始时间，格式为 \"hh:mm\"。  **取值范围**：  不涉及。
    * endTime  **参数解释**：  事件执行窗口结束时间，格式为 \"hh:mm\"。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'plannedExecutionDay' => 'setPlannedExecutionDay',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * plannedExecutionDay  **参数解释**：  计划执行日期，格式为：“yyyy-MM-dd”。  **取值范围**：  不涉及。
    * startTime  **参数解释**：  事件执行窗口开始时间，格式为 \"hh:mm\"。  **取值范围**：  不涉及。
    * endTime  **参数解释**：  事件执行窗口结束时间，格式为 \"hh:mm\"。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'plannedExecutionDay' => 'getPlannedExecutionDay',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime'
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
        $this->container['plannedExecutionDay'] = isset($data['plannedExecutionDay']) ? $data['plannedExecutionDay'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
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
    * Gets plannedExecutionDay
    *  **参数解释**：  计划执行日期，格式为：“yyyy-MM-dd”。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getPlannedExecutionDay()
    {
        return $this->container['plannedExecutionDay'];
    }

    /**
    * Sets plannedExecutionDay
    *
    * @param string|null $plannedExecutionDay **参数解释**：  计划执行日期，格式为：“yyyy-MM-dd”。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setPlannedExecutionDay($plannedExecutionDay)
    {
        $this->container['plannedExecutionDay'] = $plannedExecutionDay;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释**：  事件执行窗口开始时间，格式为 \"hh:mm\"。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime **参数解释**：  事件执行窗口开始时间，格式为 \"hh:mm\"。  **取值范围**：  不涉及。
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
    *  **参数解释**：  事件执行窗口结束时间，格式为 \"hh:mm\"。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime **参数解释**：  事件执行窗口结束时间，格式为 \"hh:mm\"。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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

