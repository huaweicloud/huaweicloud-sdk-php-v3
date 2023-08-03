<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CycleParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CycleParams';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startDate  周期会议的开始日期，格式：YYYY-MM-DD。 开始日期不能早于当前日期。 > 日期是timeZoneID指定的时区的日期，非UTC时间的日期。
    * endDate  周期会议的结束日期，格式：YYYY-MM-DD。 开始日期和结束日期间的时间间隔最长不能超过1年。开始日期和结束日期之间最多允许50个子会议，若超过50个子会议，会自动调整结束日期。 > 日期是timeZoneID指定的时区的日期，非UTC时间的日期。
    * cycle  周期类型。 - Day: 天 - Week: 星期 - Month: 月
    * interval  子会议间隔。 - cycle选择了Day，表示每几天召开一次，取值范围[1,15] - cycle选择了Week，表示每几周召开一次，取值范围[1,5] - cycle选择了Month，Interval表示隔几月，取值范围[1,3]
    * point  周期内的会议召开点。仅当按周和月时有效。 - cycle选择了Week，point中填入了两个元素1和3，则表示每个周一和周三召开会议，0表示周日 - cycle选择了Month，point中填入了12和20则表示每个月的12号和20号召开会议，取值范围为[1,31]，若当月没有该值，则为月末
    * preRemindDays  提前通知天数。所有与会者在每个子会议开始前N天收到会议通知。取值范围[0,30]。 默认值是1。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startDate' => 'string',
            'endDate' => 'string',
            'cycle' => 'string',
            'interval' => 'int',
            'point' => 'int[]',
            'preRemindDays' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startDate  周期会议的开始日期，格式：YYYY-MM-DD。 开始日期不能早于当前日期。 > 日期是timeZoneID指定的时区的日期，非UTC时间的日期。
    * endDate  周期会议的结束日期，格式：YYYY-MM-DD。 开始日期和结束日期间的时间间隔最长不能超过1年。开始日期和结束日期之间最多允许50个子会议，若超过50个子会议，会自动调整结束日期。 > 日期是timeZoneID指定的时区的日期，非UTC时间的日期。
    * cycle  周期类型。 - Day: 天 - Week: 星期 - Month: 月
    * interval  子会议间隔。 - cycle选择了Day，表示每几天召开一次，取值范围[1,15] - cycle选择了Week，表示每几周召开一次，取值范围[1,5] - cycle选择了Month，Interval表示隔几月，取值范围[1,3]
    * point  周期内的会议召开点。仅当按周和月时有效。 - cycle选择了Week，point中填入了两个元素1和3，则表示每个周一和周三召开会议，0表示周日 - cycle选择了Month，point中填入了12和20则表示每个月的12号和20号召开会议，取值范围为[1,31]，若当月没有该值，则为月末
    * preRemindDays  提前通知天数。所有与会者在每个子会议开始前N天收到会议通知。取值范围[0,30]。 默认值是1。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startDate' => null,
        'endDate' => null,
        'cycle' => null,
        'interval' => 'int32',
        'point' => 'int32',
        'preRemindDays' => 'int32'
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
    * startDate  周期会议的开始日期，格式：YYYY-MM-DD。 开始日期不能早于当前日期。 > 日期是timeZoneID指定的时区的日期，非UTC时间的日期。
    * endDate  周期会议的结束日期，格式：YYYY-MM-DD。 开始日期和结束日期间的时间间隔最长不能超过1年。开始日期和结束日期之间最多允许50个子会议，若超过50个子会议，会自动调整结束日期。 > 日期是timeZoneID指定的时区的日期，非UTC时间的日期。
    * cycle  周期类型。 - Day: 天 - Week: 星期 - Month: 月
    * interval  子会议间隔。 - cycle选择了Day，表示每几天召开一次，取值范围[1,15] - cycle选择了Week，表示每几周召开一次，取值范围[1,5] - cycle选择了Month，Interval表示隔几月，取值范围[1,3]
    * point  周期内的会议召开点。仅当按周和月时有效。 - cycle选择了Week，point中填入了两个元素1和3，则表示每个周一和周三召开会议，0表示周日 - cycle选择了Month，point中填入了12和20则表示每个月的12号和20号召开会议，取值范围为[1,31]，若当月没有该值，则为月末
    * preRemindDays  提前通知天数。所有与会者在每个子会议开始前N天收到会议通知。取值范围[0,30]。 默认值是1。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startDate' => 'startDate',
            'endDate' => 'endDate',
            'cycle' => 'cycle',
            'interval' => 'interval',
            'point' => 'point',
            'preRemindDays' => 'preRemindDays'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startDate  周期会议的开始日期，格式：YYYY-MM-DD。 开始日期不能早于当前日期。 > 日期是timeZoneID指定的时区的日期，非UTC时间的日期。
    * endDate  周期会议的结束日期，格式：YYYY-MM-DD。 开始日期和结束日期间的时间间隔最长不能超过1年。开始日期和结束日期之间最多允许50个子会议，若超过50个子会议，会自动调整结束日期。 > 日期是timeZoneID指定的时区的日期，非UTC时间的日期。
    * cycle  周期类型。 - Day: 天 - Week: 星期 - Month: 月
    * interval  子会议间隔。 - cycle选择了Day，表示每几天召开一次，取值范围[1,15] - cycle选择了Week，表示每几周召开一次，取值范围[1,5] - cycle选择了Month，Interval表示隔几月，取值范围[1,3]
    * point  周期内的会议召开点。仅当按周和月时有效。 - cycle选择了Week，point中填入了两个元素1和3，则表示每个周一和周三召开会议，0表示周日 - cycle选择了Month，point中填入了12和20则表示每个月的12号和20号召开会议，取值范围为[1,31]，若当月没有该值，则为月末
    * preRemindDays  提前通知天数。所有与会者在每个子会议开始前N天收到会议通知。取值范围[0,30]。 默认值是1。
    *
    * @var string[]
    */
    protected static $setters = [
            'startDate' => 'setStartDate',
            'endDate' => 'setEndDate',
            'cycle' => 'setCycle',
            'interval' => 'setInterval',
            'point' => 'setPoint',
            'preRemindDays' => 'setPreRemindDays'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startDate  周期会议的开始日期，格式：YYYY-MM-DD。 开始日期不能早于当前日期。 > 日期是timeZoneID指定的时区的日期，非UTC时间的日期。
    * endDate  周期会议的结束日期，格式：YYYY-MM-DD。 开始日期和结束日期间的时间间隔最长不能超过1年。开始日期和结束日期之间最多允许50个子会议，若超过50个子会议，会自动调整结束日期。 > 日期是timeZoneID指定的时区的日期，非UTC时间的日期。
    * cycle  周期类型。 - Day: 天 - Week: 星期 - Month: 月
    * interval  子会议间隔。 - cycle选择了Day，表示每几天召开一次，取值范围[1,15] - cycle选择了Week，表示每几周召开一次，取值范围[1,5] - cycle选择了Month，Interval表示隔几月，取值范围[1,3]
    * point  周期内的会议召开点。仅当按周和月时有效。 - cycle选择了Week，point中填入了两个元素1和3，则表示每个周一和周三召开会议，0表示周日 - cycle选择了Month，point中填入了12和20则表示每个月的12号和20号召开会议，取值范围为[1,31]，若当月没有该值，则为月末
    * preRemindDays  提前通知天数。所有与会者在每个子会议开始前N天收到会议通知。取值范围[0,30]。 默认值是1。
    *
    * @var string[]
    */
    protected static $getters = [
            'startDate' => 'getStartDate',
            'endDate' => 'getEndDate',
            'cycle' => 'getCycle',
            'interval' => 'getInterval',
            'point' => 'getPoint',
            'preRemindDays' => 'getPreRemindDays'
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
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['cycle'] = isset($data['cycle']) ? $data['cycle'] : null;
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['point'] = isset($data['point']) ? $data['point'] : null;
        $this->container['preRemindDays'] = isset($data['preRemindDays']) ? $data['preRemindDays'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['startDate'] === null) {
            $invalidProperties[] = "'startDate' can't be null";
        }
        if ($this->container['endDate'] === null) {
            $invalidProperties[] = "'endDate' can't be null";
        }
        if ($this->container['cycle'] === null) {
            $invalidProperties[] = "'cycle' can't be null";
        }
        if ($this->container['preRemindDays'] === null) {
            $invalidProperties[] = "'preRemindDays' can't be null";
        }
            if (($this->container['preRemindDays'] > 30)) {
                $invalidProperties[] = "invalid value for 'preRemindDays', must be smaller than or equal to 30.";
            }
            if (($this->container['preRemindDays'] < 0)) {
                $invalidProperties[] = "invalid value for 'preRemindDays', must be bigger than or equal to 0.";
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
    * Gets startDate
    *  周期会议的开始日期，格式：YYYY-MM-DD。 开始日期不能早于当前日期。 > 日期是timeZoneID指定的时区的日期，非UTC时间的日期。
    *
    * @return string
    */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
    * Sets startDate
    *
    * @param string $startDate 周期会议的开始日期，格式：YYYY-MM-DD。 开始日期不能早于当前日期。 > 日期是timeZoneID指定的时区的日期，非UTC时间的日期。
    *
    * @return $this
    */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;
        return $this;
    }

    /**
    * Gets endDate
    *  周期会议的结束日期，格式：YYYY-MM-DD。 开始日期和结束日期间的时间间隔最长不能超过1年。开始日期和结束日期之间最多允许50个子会议，若超过50个子会议，会自动调整结束日期。 > 日期是timeZoneID指定的时区的日期，非UTC时间的日期。
    *
    * @return string
    */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
    * Sets endDate
    *
    * @param string $endDate 周期会议的结束日期，格式：YYYY-MM-DD。 开始日期和结束日期间的时间间隔最长不能超过1年。开始日期和结束日期之间最多允许50个子会议，若超过50个子会议，会自动调整结束日期。 > 日期是timeZoneID指定的时区的日期，非UTC时间的日期。
    *
    * @return $this
    */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;
        return $this;
    }

    /**
    * Gets cycle
    *  周期类型。 - Day: 天 - Week: 星期 - Month: 月
    *
    * @return string
    */
    public function getCycle()
    {
        return $this->container['cycle'];
    }

    /**
    * Sets cycle
    *
    * @param string $cycle 周期类型。 - Day: 天 - Week: 星期 - Month: 月
    *
    * @return $this
    */
    public function setCycle($cycle)
    {
        $this->container['cycle'] = $cycle;
        return $this;
    }

    /**
    * Gets interval
    *  子会议间隔。 - cycle选择了Day，表示每几天召开一次，取值范围[1,15] - cycle选择了Week，表示每几周召开一次，取值范围[1,5] - cycle选择了Month，Interval表示隔几月，取值范围[1,3]
    *
    * @return int|null
    */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
    * Sets interval
    *
    * @param int|null $interval 子会议间隔。 - cycle选择了Day，表示每几天召开一次，取值范围[1,15] - cycle选择了Week，表示每几周召开一次，取值范围[1,5] - cycle选择了Month，Interval表示隔几月，取值范围[1,3]
    *
    * @return $this
    */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;
        return $this;
    }

    /**
    * Gets point
    *  周期内的会议召开点。仅当按周和月时有效。 - cycle选择了Week，point中填入了两个元素1和3，则表示每个周一和周三召开会议，0表示周日 - cycle选择了Month，point中填入了12和20则表示每个月的12号和20号召开会议，取值范围为[1,31]，若当月没有该值，则为月末
    *
    * @return int[]|null
    */
    public function getPoint()
    {
        return $this->container['point'];
    }

    /**
    * Sets point
    *
    * @param int[]|null $point 周期内的会议召开点。仅当按周和月时有效。 - cycle选择了Week，point中填入了两个元素1和3，则表示每个周一和周三召开会议，0表示周日 - cycle选择了Month，point中填入了12和20则表示每个月的12号和20号召开会议，取值范围为[1,31]，若当月没有该值，则为月末
    *
    * @return $this
    */
    public function setPoint($point)
    {
        $this->container['point'] = $point;
        return $this;
    }

    /**
    * Gets preRemindDays
    *  提前通知天数。所有与会者在每个子会议开始前N天收到会议通知。取值范围[0,30]。 默认值是1。
    *
    * @return int
    */
    public function getPreRemindDays()
    {
        return $this->container['preRemindDays'];
    }

    /**
    * Sets preRemindDays
    *
    * @param int $preRemindDays 提前通知天数。所有与会者在每个子会议开始前N天收到会议通知。取值范围[0,30]。 默认值是1。
    *
    * @return $this
    */
    public function setPreRemindDays($preRemindDays)
    {
        $this->container['preRemindDays'] = $preRemindDays;
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

