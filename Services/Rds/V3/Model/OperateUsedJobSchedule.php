<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OperateUsedJobSchedule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OperateUsedJobSchedule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  策略id。
    * jobScheduleType  计划类型。默认值recurring。  automatically：SQL Server代理启动时自动启动。 cpu_idle：CPU空闲时启动。 recurring：重复执行。 one_time：执行一次。
    * oneTimeOccurrence  oneTimeOccurrence
    * frequency  frequency
    * dailyFrequency  dailyFrequency
    * duration  duration
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'jobScheduleType' => 'string',
            'oneTimeOccurrence' => '\HuaweiCloud\SDK\Rds\V3\Model\JobScheduleOneTimeOccurrenceInfo',
            'frequency' => '\HuaweiCloud\SDK\Rds\V3\Model\JobScheduleFrequencyInfo',
            'dailyFrequency' => '\HuaweiCloud\SDK\Rds\V3\Model\JobScheduleDailyFrequencyInfo',
            'duration' => '\HuaweiCloud\SDK\Rds\V3\Model\JobScheduleDurationInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  策略id。
    * jobScheduleType  计划类型。默认值recurring。  automatically：SQL Server代理启动时自动启动。 cpu_idle：CPU空闲时启动。 recurring：重复执行。 one_time：执行一次。
    * oneTimeOccurrence  oneTimeOccurrence
    * frequency  frequency
    * dailyFrequency  dailyFrequency
    * duration  duration
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'jobScheduleType' => null,
        'oneTimeOccurrence' => null,
        'frequency' => null,
        'dailyFrequency' => null,
        'duration' => null
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
    * id  策略id。
    * jobScheduleType  计划类型。默认值recurring。  automatically：SQL Server代理启动时自动启动。 cpu_idle：CPU空闲时启动。 recurring：重复执行。 one_time：执行一次。
    * oneTimeOccurrence  oneTimeOccurrence
    * frequency  frequency
    * dailyFrequency  dailyFrequency
    * duration  duration
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'jobScheduleType' => 'job_schedule_type',
            'oneTimeOccurrence' => 'one_time_occurrence',
            'frequency' => 'frequency',
            'dailyFrequency' => 'daily_frequency',
            'duration' => 'duration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  策略id。
    * jobScheduleType  计划类型。默认值recurring。  automatically：SQL Server代理启动时自动启动。 cpu_idle：CPU空闲时启动。 recurring：重复执行。 one_time：执行一次。
    * oneTimeOccurrence  oneTimeOccurrence
    * frequency  frequency
    * dailyFrequency  dailyFrequency
    * duration  duration
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'jobScheduleType' => 'setJobScheduleType',
            'oneTimeOccurrence' => 'setOneTimeOccurrence',
            'frequency' => 'setFrequency',
            'dailyFrequency' => 'setDailyFrequency',
            'duration' => 'setDuration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  策略id。
    * jobScheduleType  计划类型。默认值recurring。  automatically：SQL Server代理启动时自动启动。 cpu_idle：CPU空闲时启动。 recurring：重复执行。 one_time：执行一次。
    * oneTimeOccurrence  oneTimeOccurrence
    * frequency  frequency
    * dailyFrequency  dailyFrequency
    * duration  duration
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'jobScheduleType' => 'getJobScheduleType',
            'oneTimeOccurrence' => 'getOneTimeOccurrence',
            'frequency' => 'getFrequency',
            'dailyFrequency' => 'getDailyFrequency',
            'duration' => 'getDuration'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['jobScheduleType'] = isset($data['jobScheduleType']) ? $data['jobScheduleType'] : null;
        $this->container['oneTimeOccurrence'] = isset($data['oneTimeOccurrence']) ? $data['oneTimeOccurrence'] : null;
        $this->container['frequency'] = isset($data['frequency']) ? $data['frequency'] : null;
        $this->container['dailyFrequency'] = isset($data['dailyFrequency']) ? $data['dailyFrequency'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['jobScheduleType'] === null) {
            $invalidProperties[] = "'jobScheduleType' can't be null";
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
    * Gets id
    *  策略id。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 策略id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets jobScheduleType
    *  计划类型。默认值recurring。  automatically：SQL Server代理启动时自动启动。 cpu_idle：CPU空闲时启动。 recurring：重复执行。 one_time：执行一次。
    *
    * @return string
    */
    public function getJobScheduleType()
    {
        return $this->container['jobScheduleType'];
    }

    /**
    * Sets jobScheduleType
    *
    * @param string $jobScheduleType 计划类型。默认值recurring。  automatically：SQL Server代理启动时自动启动。 cpu_idle：CPU空闲时启动。 recurring：重复执行。 one_time：执行一次。
    *
    * @return $this
    */
    public function setJobScheduleType($jobScheduleType)
    {
        $this->container['jobScheduleType'] = $jobScheduleType;
        return $this;
    }

    /**
    * Gets oneTimeOccurrence
    *  oneTimeOccurrence
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\JobScheduleOneTimeOccurrenceInfo|null
    */
    public function getOneTimeOccurrence()
    {
        return $this->container['oneTimeOccurrence'];
    }

    /**
    * Sets oneTimeOccurrence
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\JobScheduleOneTimeOccurrenceInfo|null $oneTimeOccurrence oneTimeOccurrence
    *
    * @return $this
    */
    public function setOneTimeOccurrence($oneTimeOccurrence)
    {
        $this->container['oneTimeOccurrence'] = $oneTimeOccurrence;
        return $this;
    }

    /**
    * Gets frequency
    *  frequency
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\JobScheduleFrequencyInfo|null
    */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
    * Sets frequency
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\JobScheduleFrequencyInfo|null $frequency frequency
    *
    * @return $this
    */
    public function setFrequency($frequency)
    {
        $this->container['frequency'] = $frequency;
        return $this;
    }

    /**
    * Gets dailyFrequency
    *  dailyFrequency
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\JobScheduleDailyFrequencyInfo|null
    */
    public function getDailyFrequency()
    {
        return $this->container['dailyFrequency'];
    }

    /**
    * Sets dailyFrequency
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\JobScheduleDailyFrequencyInfo|null $dailyFrequency dailyFrequency
    *
    * @return $this
    */
    public function setDailyFrequency($dailyFrequency)
    {
        $this->container['dailyFrequency'] = $dailyFrequency;
        return $this;
    }

    /**
    * Gets duration
    *  duration
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\JobScheduleDurationInfo|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\JobScheduleDurationInfo|null $duration duration
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
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

