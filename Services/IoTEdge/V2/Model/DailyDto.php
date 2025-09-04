<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DailyDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DailyDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * exceptionalDates  exceptionalDates
    * timeSpans  时间段描述
    * weekdays  描述此任务有效的星期几，为数组。如果为null，则表示start_time-endtime之间，每天都执行；如果为空数组，则表示start_time-endtime之间，每天都不执行；如果为[1, 2]，则表示每周一、二执行。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'exceptionalDates' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\ExceptionalDates',
            'timeSpans' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\TimeSpans[]',
            'weekdays' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * exceptionalDates  exceptionalDates
    * timeSpans  时间段描述
    * weekdays  描述此任务有效的星期几，为数组。如果为null，则表示start_time-endtime之间，每天都执行；如果为空数组，则表示start_time-endtime之间，每天都不执行；如果为[1, 2]，则表示每周一、二执行。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'exceptionalDates' => null,
        'timeSpans' => null,
        'weekdays' => null
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
    * exceptionalDates  exceptionalDates
    * timeSpans  时间段描述
    * weekdays  描述此任务有效的星期几，为数组。如果为null，则表示start_time-endtime之间，每天都执行；如果为空数组，则表示start_time-endtime之间，每天都不执行；如果为[1, 2]，则表示每周一、二执行。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'exceptionalDates' => 'exceptional_dates',
            'timeSpans' => 'time_spans',
            'weekdays' => 'weekdays'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * exceptionalDates  exceptionalDates
    * timeSpans  时间段描述
    * weekdays  描述此任务有效的星期几，为数组。如果为null，则表示start_time-endtime之间，每天都执行；如果为空数组，则表示start_time-endtime之间，每天都不执行；如果为[1, 2]，则表示每周一、二执行。
    *
    * @var string[]
    */
    protected static $setters = [
            'exceptionalDates' => 'setExceptionalDates',
            'timeSpans' => 'setTimeSpans',
            'weekdays' => 'setWeekdays'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * exceptionalDates  exceptionalDates
    * timeSpans  时间段描述
    * weekdays  描述此任务有效的星期几，为数组。如果为null，则表示start_time-endtime之间，每天都执行；如果为空数组，则表示start_time-endtime之间，每天都不执行；如果为[1, 2]，则表示每周一、二执行。
    *
    * @var string[]
    */
    protected static $getters = [
            'exceptionalDates' => 'getExceptionalDates',
            'timeSpans' => 'getTimeSpans',
            'weekdays' => 'getWeekdays'
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
        $this->container['exceptionalDates'] = isset($data['exceptionalDates']) ? $data['exceptionalDates'] : null;
        $this->container['timeSpans'] = isset($data['timeSpans']) ? $data['timeSpans'] : null;
        $this->container['weekdays'] = isset($data['weekdays']) ? $data['weekdays'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['timeSpans'] === null) {
            $invalidProperties[] = "'timeSpans' can't be null";
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
    * Gets exceptionalDates
    *  exceptionalDates
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\ExceptionalDates|null
    */
    public function getExceptionalDates()
    {
        return $this->container['exceptionalDates'];
    }

    /**
    * Sets exceptionalDates
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\ExceptionalDates|null $exceptionalDates exceptionalDates
    *
    * @return $this
    */
    public function setExceptionalDates($exceptionalDates)
    {
        $this->container['exceptionalDates'] = $exceptionalDates;
        return $this;
    }

    /**
    * Gets timeSpans
    *  时间段描述
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\TimeSpans[]
    */
    public function getTimeSpans()
    {
        return $this->container['timeSpans'];
    }

    /**
    * Sets timeSpans
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\TimeSpans[] $timeSpans 时间段描述
    *
    * @return $this
    */
    public function setTimeSpans($timeSpans)
    {
        $this->container['timeSpans'] = $timeSpans;
        return $this;
    }

    /**
    * Gets weekdays
    *  描述此任务有效的星期几，为数组。如果为null，则表示start_time-endtime之间，每天都执行；如果为空数组，则表示start_time-endtime之间，每天都不执行；如果为[1, 2]，则表示每周一、二执行。
    *
    * @return object|null
    */
    public function getWeekdays()
    {
        return $this->container['weekdays'];
    }

    /**
    * Sets weekdays
    *
    * @param object|null $weekdays 描述此任务有效的星期几，为数组。如果为null，则表示start_time-endtime之间，每天都执行；如果为空数组，则表示start_time-endtime之间，每天都不执行；如果为[1, 2]，则表示每周一、二执行。
    *
    * @return $this
    */
    public function setWeekdays($weekdays)
    {
        $this->container['weekdays'] = $weekdays;
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

