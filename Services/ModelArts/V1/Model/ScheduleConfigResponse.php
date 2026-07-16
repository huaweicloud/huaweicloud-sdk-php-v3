<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScheduleConfigResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScheduleConfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dueTime  **参数解释：** 触发时间，UTC毫秒，13位时间戳。 **取值范围：** 不涉及。
    * duration  **参数解释：** 对应的时间单位的数值。 **取值范围：** 不涉及。
    * timeUnit  **参数解释：** 调度时间单位。 **取值范围：** - MINUTES：分钟。 - HOURS：小时。 - DAYS：天。
    * type  **参数解释：** 调度类型，当前仅支持取值为STOP。 **取值范围：** - STOP：停止。
    * processed  **参数解释：** 表示是否处理完成。 **取值范围：** - true：该定时任务已经执行过。 - false：该定时任务尚未执行。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dueTime' => 'int',
            'duration' => 'int',
            'timeUnit' => 'string',
            'type' => 'string',
            'processed' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dueTime  **参数解释：** 触发时间，UTC毫秒，13位时间戳。 **取值范围：** 不涉及。
    * duration  **参数解释：** 对应的时间单位的数值。 **取值范围：** 不涉及。
    * timeUnit  **参数解释：** 调度时间单位。 **取值范围：** - MINUTES：分钟。 - HOURS：小时。 - DAYS：天。
    * type  **参数解释：** 调度类型，当前仅支持取值为STOP。 **取值范围：** - STOP：停止。
    * processed  **参数解释：** 表示是否处理完成。 **取值范围：** - true：该定时任务已经执行过。 - false：该定时任务尚未执行。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dueTime' => 'int64',
        'duration' => 'int32',
        'timeUnit' => null,
        'type' => null,
        'processed' => null
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
    * dueTime  **参数解释：** 触发时间，UTC毫秒，13位时间戳。 **取值范围：** 不涉及。
    * duration  **参数解释：** 对应的时间单位的数值。 **取值范围：** 不涉及。
    * timeUnit  **参数解释：** 调度时间单位。 **取值范围：** - MINUTES：分钟。 - HOURS：小时。 - DAYS：天。
    * type  **参数解释：** 调度类型，当前仅支持取值为STOP。 **取值范围：** - STOP：停止。
    * processed  **参数解释：** 表示是否处理完成。 **取值范围：** - true：该定时任务已经执行过。 - false：该定时任务尚未执行。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dueTime' => 'due_time',
            'duration' => 'duration',
            'timeUnit' => 'time_unit',
            'type' => 'type',
            'processed' => 'processed'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dueTime  **参数解释：** 触发时间，UTC毫秒，13位时间戳。 **取值范围：** 不涉及。
    * duration  **参数解释：** 对应的时间单位的数值。 **取值范围：** 不涉及。
    * timeUnit  **参数解释：** 调度时间单位。 **取值范围：** - MINUTES：分钟。 - HOURS：小时。 - DAYS：天。
    * type  **参数解释：** 调度类型，当前仅支持取值为STOP。 **取值范围：** - STOP：停止。
    * processed  **参数解释：** 表示是否处理完成。 **取值范围：** - true：该定时任务已经执行过。 - false：该定时任务尚未执行。
    *
    * @var string[]
    */
    protected static $setters = [
            'dueTime' => 'setDueTime',
            'duration' => 'setDuration',
            'timeUnit' => 'setTimeUnit',
            'type' => 'setType',
            'processed' => 'setProcessed'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dueTime  **参数解释：** 触发时间，UTC毫秒，13位时间戳。 **取值范围：** 不涉及。
    * duration  **参数解释：** 对应的时间单位的数值。 **取值范围：** 不涉及。
    * timeUnit  **参数解释：** 调度时间单位。 **取值范围：** - MINUTES：分钟。 - HOURS：小时。 - DAYS：天。
    * type  **参数解释：** 调度类型，当前仅支持取值为STOP。 **取值范围：** - STOP：停止。
    * processed  **参数解释：** 表示是否处理完成。 **取值范围：** - true：该定时任务已经执行过。 - false：该定时任务尚未执行。
    *
    * @var string[]
    */
    protected static $getters = [
            'dueTime' => 'getDueTime',
            'duration' => 'getDuration',
            'timeUnit' => 'getTimeUnit',
            'type' => 'getType',
            'processed' => 'getProcessed'
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
        $this->container['dueTime'] = isset($data['dueTime']) ? $data['dueTime'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['timeUnit'] = isset($data['timeUnit']) ? $data['timeUnit'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['processed'] = isset($data['processed']) ? $data['processed'] : null;
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
    * Gets dueTime
    *  **参数解释：** 触发时间，UTC毫秒，13位时间戳。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getDueTime()
    {
        return $this->container['dueTime'];
    }

    /**
    * Sets dueTime
    *
    * @param int|null $dueTime **参数解释：** 触发时间，UTC毫秒，13位时间戳。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDueTime($dueTime)
    {
        $this->container['dueTime'] = $dueTime;
        return $this;
    }

    /**
    * Gets duration
    *  **参数解释：** 对应的时间单位的数值。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param int|null $duration **参数解释：** 对应的时间单位的数值。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets timeUnit
    *  **参数解释：** 调度时间单位。 **取值范围：** - MINUTES：分钟。 - HOURS：小时。 - DAYS：天。
    *
    * @return string|null
    */
    public function getTimeUnit()
    {
        return $this->container['timeUnit'];
    }

    /**
    * Sets timeUnit
    *
    * @param string|null $timeUnit **参数解释：** 调度时间单位。 **取值范围：** - MINUTES：分钟。 - HOURS：小时。 - DAYS：天。
    *
    * @return $this
    */
    public function setTimeUnit($timeUnit)
    {
        $this->container['timeUnit'] = $timeUnit;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 调度类型，当前仅支持取值为STOP。 **取值范围：** - STOP：停止。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释：** 调度类型，当前仅支持取值为STOP。 **取值范围：** - STOP：停止。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets processed
    *  **参数解释：** 表示是否处理完成。 **取值范围：** - true：该定时任务已经执行过。 - false：该定时任务尚未执行。
    *
    * @return bool|null
    */
    public function getProcessed()
    {
        return $this->container['processed'];
    }

    /**
    * Sets processed
    *
    * @param bool|null $processed **参数解释：** 表示是否处理完成。 **取值范围：** - true：该定时任务已经执行过。 - false：该定时任务尚未执行。
    *
    * @return $this
    */
    public function setProcessed($processed)
    {
        $this->container['processed'] = $processed;
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

