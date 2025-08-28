<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListBotMTimelineResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListBotMTimelineResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startTime  **参数解释：** 统计开始时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * endTime  **参数解释：** 统计结束时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * timeSpan  **参数解释：** 时间间隔（如1h表示每小时） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * timelines  timelines
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startTime' => 'int',
            'endTime' => 'int',
            'timeSpan' => 'int',
            'timelines' => '\HuaweiCloud\SDK\Waf\V1\Model\BotRequestTimeline[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startTime  **参数解释：** 统计开始时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * endTime  **参数解释：** 统计结束时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * timeSpan  **参数解释：** 时间间隔（如1h表示每小时） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * timelines  timelines
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startTime' => 'int64',
        'endTime' => 'int64',
        'timeSpan' => 'int64',
        'timelines' => null
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
    * startTime  **参数解释：** 统计开始时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * endTime  **参数解释：** 统计结束时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * timeSpan  **参数解释：** 时间间隔（如1h表示每小时） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * timelines  timelines
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'timeSpan' => 'time_span',
            'timelines' => 'timelines'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startTime  **参数解释：** 统计开始时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * endTime  **参数解释：** 统计结束时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * timeSpan  **参数解释：** 时间间隔（如1h表示每小时） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * timelines  timelines
    *
    * @var string[]
    */
    protected static $setters = [
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'timeSpan' => 'setTimeSpan',
            'timelines' => 'setTimelines'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startTime  **参数解释：** 统计开始时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * endTime  **参数解释：** 统计结束时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * timeSpan  **参数解释：** 时间间隔（如1h表示每小时） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * timelines  timelines
    *
    * @var string[]
    */
    protected static $getters = [
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'timeSpan' => 'getTimeSpan',
            'timelines' => 'getTimelines'
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
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['timeSpan'] = isset($data['timeSpan']) ? $data['timeSpan'] : null;
        $this->container['timelines'] = isset($data['timelines']) ? $data['timelines'] : null;
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
    * Gets startTime
    *  **参数解释：** 统计开始时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime **参数解释：** 统计开始时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    *  **参数解释：** 统计结束时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime **参数解释：** 统计结束时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets timeSpan
    *  **参数解释：** 时间间隔（如1h表示每小时） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getTimeSpan()
    {
        return $this->container['timeSpan'];
    }

    /**
    * Sets timeSpan
    *
    * @param int|null $timeSpan **参数解释：** 时间间隔（如1h表示每小时） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTimeSpan($timeSpan)
    {
        $this->container['timeSpan'] = $timeSpan;
        return $this;
    }

    /**
    * Gets timelines
    *  timelines
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\BotRequestTimeline[]|null
    */
    public function getTimelines()
    {
        return $this->container['timelines'];
    }

    /**
    * Sets timelines
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\BotRequestTimeline[]|null $timelines timelines
    *
    * @return $this
    */
    public function setTimelines($timelines)
    {
        $this->container['timelines'] = $timelines;
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

