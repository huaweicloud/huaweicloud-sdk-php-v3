<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScheduleVOPeriodic implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScheduleVO_periodic';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  **参数解释**： 周期计划类型 **取值范围**： 0：每天 1：每周的某几天 2：每周的一段时间
    * startTime  **参数解释**： 周期计划开始时间 **取值范围**： 不涉及
    * endTime  **参数解释**： 周期计划结束时间 **取值范围**： 不涉及
    * weekMask  **参数解释**： 每周的某几天 **取值范围**： 不涉及
    * startWeek  **参数解释**： 每周周期计划开始日 **取值范围**： 不涉及
    * endWeek  **参数解释**： 每周周期计划结束日 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'int',
            'startTime' => 'string',
            'endTime' => 'string',
            'weekMask' => 'int[]',
            'startWeek' => 'int',
            'endWeek' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  **参数解释**： 周期计划类型 **取值范围**： 0：每天 1：每周的某几天 2：每周的一段时间
    * startTime  **参数解释**： 周期计划开始时间 **取值范围**： 不涉及
    * endTime  **参数解释**： 周期计划结束时间 **取值范围**： 不涉及
    * weekMask  **参数解释**： 每周的某几天 **取值范围**： 不涉及
    * startWeek  **参数解释**： 每周周期计划开始日 **取值范围**： 不涉及
    * endWeek  **参数解释**： 每周周期计划结束日 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => 'int32',
        'startTime' => null,
        'endTime' => null,
        'weekMask' => 'int32',
        'startWeek' => 'int32',
        'endWeek' => 'int32'
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
    * type  **参数解释**： 周期计划类型 **取值范围**： 0：每天 1：每周的某几天 2：每周的一段时间
    * startTime  **参数解释**： 周期计划开始时间 **取值范围**： 不涉及
    * endTime  **参数解释**： 周期计划结束时间 **取值范围**： 不涉及
    * weekMask  **参数解释**： 每周的某几天 **取值范围**： 不涉及
    * startWeek  **参数解释**： 每周周期计划开始日 **取值范围**： 不涉及
    * endWeek  **参数解释**： 每周周期计划结束日 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'weekMask' => 'week_mask',
            'startWeek' => 'start_week',
            'endWeek' => 'end_week'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  **参数解释**： 周期计划类型 **取值范围**： 0：每天 1：每周的某几天 2：每周的一段时间
    * startTime  **参数解释**： 周期计划开始时间 **取值范围**： 不涉及
    * endTime  **参数解释**： 周期计划结束时间 **取值范围**： 不涉及
    * weekMask  **参数解释**： 每周的某几天 **取值范围**： 不涉及
    * startWeek  **参数解释**： 每周周期计划开始日 **取值范围**： 不涉及
    * endWeek  **参数解释**： 每周周期计划结束日 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'weekMask' => 'setWeekMask',
            'startWeek' => 'setStartWeek',
            'endWeek' => 'setEndWeek'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  **参数解释**： 周期计划类型 **取值范围**： 0：每天 1：每周的某几天 2：每周的一段时间
    * startTime  **参数解释**： 周期计划开始时间 **取值范围**： 不涉及
    * endTime  **参数解释**： 周期计划结束时间 **取值范围**： 不涉及
    * weekMask  **参数解释**： 每周的某几天 **取值范围**： 不涉及
    * startWeek  **参数解释**： 每周周期计划开始日 **取值范围**： 不涉及
    * endWeek  **参数解释**： 每周周期计划结束日 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'weekMask' => 'getWeekMask',
            'startWeek' => 'getStartWeek',
            'endWeek' => 'getEndWeek'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['weekMask'] = isset($data['weekMask']) ? $data['weekMask'] : null;
        $this->container['startWeek'] = isset($data['startWeek']) ? $data['startWeek'] : null;
        $this->container['endWeek'] = isset($data['endWeek']) ? $data['endWeek'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['startWeek']) && ($this->container['startWeek'] > 7)) {
                $invalidProperties[] = "invalid value for 'startWeek', must be smaller than or equal to 7.";
            }
            if (!is_null($this->container['startWeek']) && ($this->container['startWeek'] < 1)) {
                $invalidProperties[] = "invalid value for 'startWeek', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['endWeek']) && ($this->container['endWeek'] > 7)) {
                $invalidProperties[] = "invalid value for 'endWeek', must be smaller than or equal to 7.";
            }
            if (!is_null($this->container['endWeek']) && ($this->container['endWeek'] < 1)) {
                $invalidProperties[] = "invalid value for 'endWeek', must be bigger than or equal to 1.";
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
    * Gets type
    *  **参数解释**： 周期计划类型 **取值范围**： 0：每天 1：每周的某几天 2：每周的一段时间
    *
    * @return int|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int|null $type **参数解释**： 周期计划类型 **取值范围**： 0：每天 1：每周的某几天 2：每周的一段时间
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释**： 周期计划开始时间 **取值范围**： 不涉及
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
    * @param string|null $startTime **参数解释**： 周期计划开始时间 **取值范围**： 不涉及
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
    *  **参数解释**： 周期计划结束时间 **取值范围**： 不涉及
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
    * @param string|null $endTime **参数解释**： 周期计划结束时间 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets weekMask
    *  **参数解释**： 每周的某几天 **取值范围**： 不涉及
    *
    * @return int[]|null
    */
    public function getWeekMask()
    {
        return $this->container['weekMask'];
    }

    /**
    * Sets weekMask
    *
    * @param int[]|null $weekMask **参数解释**： 每周的某几天 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setWeekMask($weekMask)
    {
        $this->container['weekMask'] = $weekMask;
        return $this;
    }

    /**
    * Gets startWeek
    *  **参数解释**： 每周周期计划开始日 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getStartWeek()
    {
        return $this->container['startWeek'];
    }

    /**
    * Sets startWeek
    *
    * @param int|null $startWeek **参数解释**： 每周周期计划开始日 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setStartWeek($startWeek)
    {
        $this->container['startWeek'] = $startWeek;
        return $this;
    }

    /**
    * Gets endWeek
    *  **参数解释**： 每周周期计划结束日 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getEndWeek()
    {
        return $this->container['endWeek'];
    }

    /**
    * Sets endWeek
    *
    * @param int|null $endWeek **参数解释**： 每周周期计划结束日 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setEndWeek($endWeek)
    {
        $this->container['endWeek'] = $endWeek;
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

