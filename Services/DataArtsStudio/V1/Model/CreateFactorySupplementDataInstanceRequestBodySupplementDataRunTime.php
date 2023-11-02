<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateFactorySupplementDataInstanceRequestBodySupplementDataRunTime implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateFactorySupplementDataInstanceRequestBody_supplement_data_run_time';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * timeOfDay  每天的可补数据时间段，如：每天的10点15分到23点30分，表示：10:15-23:30
    * dayOfWeek  每周的星期几可以补数据，如：每周一，周三的每天10点15分到23点30分。
    * dayOfMonth  每个月的哪几天可以补数据，如每月1号，3号，表示：1,3
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'timeOfDay' => 'string',
            'dayOfWeek' => 'string',
            'dayOfMonth' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * timeOfDay  每天的可补数据时间段，如：每天的10点15分到23点30分，表示：10:15-23:30
    * dayOfWeek  每周的星期几可以补数据，如：每周一，周三的每天10点15分到23点30分。
    * dayOfMonth  每个月的哪几天可以补数据，如每月1号，3号，表示：1,3
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'timeOfDay' => null,
        'dayOfWeek' => null,
        'dayOfMonth' => null
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
    * timeOfDay  每天的可补数据时间段，如：每天的10点15分到23点30分，表示：10:15-23:30
    * dayOfWeek  每周的星期几可以补数据，如：每周一，周三的每天10点15分到23点30分。
    * dayOfMonth  每个月的哪几天可以补数据，如每月1号，3号，表示：1,3
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'timeOfDay' => 'time_of_day',
            'dayOfWeek' => 'day_of_week',
            'dayOfMonth' => 'day_of_month'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * timeOfDay  每天的可补数据时间段，如：每天的10点15分到23点30分，表示：10:15-23:30
    * dayOfWeek  每周的星期几可以补数据，如：每周一，周三的每天10点15分到23点30分。
    * dayOfMonth  每个月的哪几天可以补数据，如每月1号，3号，表示：1,3
    *
    * @var string[]
    */
    protected static $setters = [
            'timeOfDay' => 'setTimeOfDay',
            'dayOfWeek' => 'setDayOfWeek',
            'dayOfMonth' => 'setDayOfMonth'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * timeOfDay  每天的可补数据时间段，如：每天的10点15分到23点30分，表示：10:15-23:30
    * dayOfWeek  每周的星期几可以补数据，如：每周一，周三的每天10点15分到23点30分。
    * dayOfMonth  每个月的哪几天可以补数据，如每月1号，3号，表示：1,3
    *
    * @var string[]
    */
    protected static $getters = [
            'timeOfDay' => 'getTimeOfDay',
            'dayOfWeek' => 'getDayOfWeek',
            'dayOfMonth' => 'getDayOfMonth'
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
        $this->container['timeOfDay'] = isset($data['timeOfDay']) ? $data['timeOfDay'] : null;
        $this->container['dayOfWeek'] = isset($data['dayOfWeek']) ? $data['dayOfWeek'] : null;
        $this->container['dayOfMonth'] = isset($data['dayOfMonth']) ? $data['dayOfMonth'] : null;
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
    * Gets timeOfDay
    *  每天的可补数据时间段，如：每天的10点15分到23点30分，表示：10:15-23:30
    *
    * @return string|null
    */
    public function getTimeOfDay()
    {
        return $this->container['timeOfDay'];
    }

    /**
    * Sets timeOfDay
    *
    * @param string|null $timeOfDay 每天的可补数据时间段，如：每天的10点15分到23点30分，表示：10:15-23:30
    *
    * @return $this
    */
    public function setTimeOfDay($timeOfDay)
    {
        $this->container['timeOfDay'] = $timeOfDay;
        return $this;
    }

    /**
    * Gets dayOfWeek
    *  每周的星期几可以补数据，如：每周一，周三的每天10点15分到23点30分。
    *
    * @return string|null
    */
    public function getDayOfWeek()
    {
        return $this->container['dayOfWeek'];
    }

    /**
    * Sets dayOfWeek
    *
    * @param string|null $dayOfWeek 每周的星期几可以补数据，如：每周一，周三的每天10点15分到23点30分。
    *
    * @return $this
    */
    public function setDayOfWeek($dayOfWeek)
    {
        $this->container['dayOfWeek'] = $dayOfWeek;
        return $this;
    }

    /**
    * Gets dayOfMonth
    *  每个月的哪几天可以补数据，如每月1号，3号，表示：1,3
    *
    * @return string|null
    */
    public function getDayOfMonth()
    {
        return $this->container['dayOfMonth'];
    }

    /**
    * Sets dayOfMonth
    *
    * @param string|null $dayOfMonth 每个月的哪几天可以补数据，如每月1号，3号，表示：1,3
    *
    * @return $this
    */
    public function setDayOfMonth($dayOfMonth)
    {
        $this->container['dayOfMonth'] = $dayOfMonth;
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

