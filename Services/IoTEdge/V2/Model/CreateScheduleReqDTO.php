<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateScheduleReqDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateScheduleReqDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scheduleId  调度计划id，租户下唯一，选填如不填则随机生成
    * name  调度计划名称
    * cycleType  调度计划的循环类型，once表示在start_time执行，end_time结束；daliy表示start_time-end_time之间每天都执行
    * enabled  调度计划是否生效
    * startTime  调度计划起始时间，毫秒级别的时间戳，可选值，不填表示立即执行
    * endTime  调度计划结束时间，毫秒级别的时间戳
    * priority  调度计划优先级。
    * daily  daily
    * tasks  调度任务信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scheduleId' => 'string',
            'name' => 'string',
            'cycleType' => 'string',
            'enabled' => 'bool',
            'startTime' => 'int',
            'endTime' => 'int',
            'priority' => 'int',
            'daily' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\DailyDto',
            'tasks' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\ScheduleTask[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scheduleId  调度计划id，租户下唯一，选填如不填则随机生成
    * name  调度计划名称
    * cycleType  调度计划的循环类型，once表示在start_time执行，end_time结束；daliy表示start_time-end_time之间每天都执行
    * enabled  调度计划是否生效
    * startTime  调度计划起始时间，毫秒级别的时间戳，可选值，不填表示立即执行
    * endTime  调度计划结束时间，毫秒级别的时间戳
    * priority  调度计划优先级。
    * daily  daily
    * tasks  调度任务信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scheduleId' => null,
        'name' => null,
        'cycleType' => null,
        'enabled' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'priority' => 'int32',
        'daily' => null,
        'tasks' => null
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
    * scheduleId  调度计划id，租户下唯一，选填如不填则随机生成
    * name  调度计划名称
    * cycleType  调度计划的循环类型，once表示在start_time执行，end_time结束；daliy表示start_time-end_time之间每天都执行
    * enabled  调度计划是否生效
    * startTime  调度计划起始时间，毫秒级别的时间戳，可选值，不填表示立即执行
    * endTime  调度计划结束时间，毫秒级别的时间戳
    * priority  调度计划优先级。
    * daily  daily
    * tasks  调度任务信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scheduleId' => 'schedule_id',
            'name' => 'name',
            'cycleType' => 'cycle_type',
            'enabled' => 'enabled',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'priority' => 'priority',
            'daily' => 'daily',
            'tasks' => 'tasks'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scheduleId  调度计划id，租户下唯一，选填如不填则随机生成
    * name  调度计划名称
    * cycleType  调度计划的循环类型，once表示在start_time执行，end_time结束；daliy表示start_time-end_time之间每天都执行
    * enabled  调度计划是否生效
    * startTime  调度计划起始时间，毫秒级别的时间戳，可选值，不填表示立即执行
    * endTime  调度计划结束时间，毫秒级别的时间戳
    * priority  调度计划优先级。
    * daily  daily
    * tasks  调度任务信息
    *
    * @var string[]
    */
    protected static $setters = [
            'scheduleId' => 'setScheduleId',
            'name' => 'setName',
            'cycleType' => 'setCycleType',
            'enabled' => 'setEnabled',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'priority' => 'setPriority',
            'daily' => 'setDaily',
            'tasks' => 'setTasks'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scheduleId  调度计划id，租户下唯一，选填如不填则随机生成
    * name  调度计划名称
    * cycleType  调度计划的循环类型，once表示在start_time执行，end_time结束；daliy表示start_time-end_time之间每天都执行
    * enabled  调度计划是否生效
    * startTime  调度计划起始时间，毫秒级别的时间戳，可选值，不填表示立即执行
    * endTime  调度计划结束时间，毫秒级别的时间戳
    * priority  调度计划优先级。
    * daily  daily
    * tasks  调度任务信息
    *
    * @var string[]
    */
    protected static $getters = [
            'scheduleId' => 'getScheduleId',
            'name' => 'getName',
            'cycleType' => 'getCycleType',
            'enabled' => 'getEnabled',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'priority' => 'getPriority',
            'daily' => 'getDaily',
            'tasks' => 'getTasks'
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
        $this->container['scheduleId'] = isset($data['scheduleId']) ? $data['scheduleId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['cycleType'] = isset($data['cycleType']) ? $data['cycleType'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['daily'] = isset($data['daily']) ? $data['daily'] : null;
        $this->container['tasks'] = isset($data['tasks']) ? $data['tasks'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['scheduleId']) && (mb_strlen($this->container['scheduleId']) > 64)) {
                $invalidProperties[] = "invalid value for 'scheduleId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['scheduleId']) && (mb_strlen($this->container['scheduleId']) < 1)) {
                $invalidProperties[] = "invalid value for 'scheduleId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['scheduleId']) && !preg_match("/^[A-Za-z0-9-_]*$/", $this->container['scheduleId'])) {
                $invalidProperties[] = "invalid value for 'scheduleId', must be conform to the pattern /^[A-Za-z0-9-_]*$/.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9_\\-\\u4e00-\\u9fa5]*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z0-9_\\-\\u4e00-\\u9fa5]*$/.";
            }
        if ($this->container['cycleType'] === null) {
            $invalidProperties[] = "'cycleType' can't be null";
        }
            if ((mb_strlen($this->container['cycleType']) > 64)) {
                $invalidProperties[] = "invalid value for 'cycleType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['cycleType']) < 1)) {
                $invalidProperties[] = "invalid value for 'cycleType', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/(once|daily)/", $this->container['cycleType'])) {
                $invalidProperties[] = "invalid value for 'cycleType', must be conform to the pattern /(once|daily)/.";
            }
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
        }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] > 7983849600000)) {
                $invalidProperties[] = "invalid value for 'startTime', must be smaller than or equal to 7983849600000.";
            }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', must be bigger than or equal to 0.";
            }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
            if (($this->container['endTime'] > 7983849600000)) {
                $invalidProperties[] = "invalid value for 'endTime', must be smaller than or equal to 7983849600000.";
            }
            if (($this->container['endTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', must be bigger than or equal to 0.";
            }
        if ($this->container['priority'] === null) {
            $invalidProperties[] = "'priority' can't be null";
        }
            if (($this->container['priority'] > 16)) {
                $invalidProperties[] = "invalid value for 'priority', must be smaller than or equal to 16.";
            }
            if (($this->container['priority'] < 1)) {
                $invalidProperties[] = "invalid value for 'priority', must be bigger than or equal to 1.";
            }
        if ($this->container['tasks'] === null) {
            $invalidProperties[] = "'tasks' can't be null";
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
    * Gets scheduleId
    *  调度计划id，租户下唯一，选填如不填则随机生成
    *
    * @return string|null
    */
    public function getScheduleId()
    {
        return $this->container['scheduleId'];
    }

    /**
    * Sets scheduleId
    *
    * @param string|null $scheduleId 调度计划id，租户下唯一，选填如不填则随机生成
    *
    * @return $this
    */
    public function setScheduleId($scheduleId)
    {
        $this->container['scheduleId'] = $scheduleId;
        return $this;
    }

    /**
    * Gets name
    *  调度计划名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 调度计划名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets cycleType
    *  调度计划的循环类型，once表示在start_time执行，end_time结束；daliy表示start_time-end_time之间每天都执行
    *
    * @return string
    */
    public function getCycleType()
    {
        return $this->container['cycleType'];
    }

    /**
    * Sets cycleType
    *
    * @param string $cycleType 调度计划的循环类型，once表示在start_time执行，end_time结束；daliy表示start_time-end_time之间每天都执行
    *
    * @return $this
    */
    public function setCycleType($cycleType)
    {
        $this->container['cycleType'] = $cycleType;
        return $this;
    }

    /**
    * Gets enabled
    *  调度计划是否生效
    *
    * @return bool
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool $enabled 调度计划是否生效
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets startTime
    *  调度计划起始时间，毫秒级别的时间戳，可选值，不填表示立即执行
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
    * @param int|null $startTime 调度计划起始时间，毫秒级别的时间戳，可选值，不填表示立即执行
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
    *  调度计划结束时间，毫秒级别的时间戳
    *
    * @return int
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int $endTime 调度计划结束时间，毫秒级别的时间戳
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets priority
    *  调度计划优先级。
    *
    * @return int
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int $priority 调度计划优先级。
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets daily
    *  daily
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\DailyDto|null
    */
    public function getDaily()
    {
        return $this->container['daily'];
    }

    /**
    * Sets daily
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\DailyDto|null $daily daily
    *
    * @return $this
    */
    public function setDaily($daily)
    {
        $this->container['daily'] = $daily;
        return $this;
    }

    /**
    * Gets tasks
    *  调度任务信息
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\ScheduleTask[]
    */
    public function getTasks()
    {
        return $this->container['tasks'];
    }

    /**
    * Sets tasks
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\ScheduleTask[] $tasks 调度任务信息
    *
    * @return $this
    */
    public function setTasks($tasks)
    {
        $this->container['tasks'] = $tasks;
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

