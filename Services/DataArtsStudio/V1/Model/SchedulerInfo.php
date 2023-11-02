<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SchedulerInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SchedulerInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cronExpression  表达式
    * endTime  结束时间
    * maxTimeOut  最大超时时间
    * interval  间隔
    * scheduleType  调度类型
    * startTime  开始时间
    * jobId  工作id
    * enabled  启用
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cronExpression' => 'string',
            'endTime' => 'string',
            'maxTimeOut' => 'int',
            'interval' => 'string',
            'scheduleType' => 'string',
            'startTime' => 'string',
            'jobId' => 'int',
            'enabled' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cronExpression  表达式
    * endTime  结束时间
    * maxTimeOut  最大超时时间
    * interval  间隔
    * scheduleType  调度类型
    * startTime  开始时间
    * jobId  工作id
    * enabled  启用
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cronExpression' => null,
        'endTime' => null,
        'maxTimeOut' => null,
        'interval' => null,
        'scheduleType' => null,
        'startTime' => null,
        'jobId' => null,
        'enabled' => null
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
    * cronExpression  表达式
    * endTime  结束时间
    * maxTimeOut  最大超时时间
    * interval  间隔
    * scheduleType  调度类型
    * startTime  开始时间
    * jobId  工作id
    * enabled  启用
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cronExpression' => 'cron_expression',
            'endTime' => 'end_time',
            'maxTimeOut' => 'max_time_out',
            'interval' => 'interval',
            'scheduleType' => 'schedule_type',
            'startTime' => 'start_time',
            'jobId' => 'job_id',
            'enabled' => 'enabled'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cronExpression  表达式
    * endTime  结束时间
    * maxTimeOut  最大超时时间
    * interval  间隔
    * scheduleType  调度类型
    * startTime  开始时间
    * jobId  工作id
    * enabled  启用
    *
    * @var string[]
    */
    protected static $setters = [
            'cronExpression' => 'setCronExpression',
            'endTime' => 'setEndTime',
            'maxTimeOut' => 'setMaxTimeOut',
            'interval' => 'setInterval',
            'scheduleType' => 'setScheduleType',
            'startTime' => 'setStartTime',
            'jobId' => 'setJobId',
            'enabled' => 'setEnabled'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cronExpression  表达式
    * endTime  结束时间
    * maxTimeOut  最大超时时间
    * interval  间隔
    * scheduleType  调度类型
    * startTime  开始时间
    * jobId  工作id
    * enabled  启用
    *
    * @var string[]
    */
    protected static $getters = [
            'cronExpression' => 'getCronExpression',
            'endTime' => 'getEndTime',
            'maxTimeOut' => 'getMaxTimeOut',
            'interval' => 'getInterval',
            'scheduleType' => 'getScheduleType',
            'startTime' => 'getStartTime',
            'jobId' => 'getJobId',
            'enabled' => 'getEnabled'
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
        $this->container['cronExpression'] = isset($data['cronExpression']) ? $data['cronExpression'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['maxTimeOut'] = isset($data['maxTimeOut']) ? $data['maxTimeOut'] : null;
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['scheduleType'] = isset($data['scheduleType']) ? $data['scheduleType'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
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
    * Gets cronExpression
    *  表达式
    *
    * @return string|null
    */
    public function getCronExpression()
    {
        return $this->container['cronExpression'];
    }

    /**
    * Sets cronExpression
    *
    * @param string|null $cronExpression 表达式
    *
    * @return $this
    */
    public function setCronExpression($cronExpression)
    {
        $this->container['cronExpression'] = $cronExpression;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间
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
    * @param string|null $endTime 结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets maxTimeOut
    *  最大超时时间
    *
    * @return int|null
    */
    public function getMaxTimeOut()
    {
        return $this->container['maxTimeOut'];
    }

    /**
    * Sets maxTimeOut
    *
    * @param int|null $maxTimeOut 最大超时时间
    *
    * @return $this
    */
    public function setMaxTimeOut($maxTimeOut)
    {
        $this->container['maxTimeOut'] = $maxTimeOut;
        return $this;
    }

    /**
    * Gets interval
    *  间隔
    *
    * @return string|null
    */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
    * Sets interval
    *
    * @param string|null $interval 间隔
    *
    * @return $this
    */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;
        return $this;
    }

    /**
    * Gets scheduleType
    *  调度类型
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
    * @param string|null $scheduleType 调度类型
    *
    * @return $this
    */
    public function setScheduleType($scheduleType)
    {
        $this->container['scheduleType'] = $scheduleType;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间
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
    * @param string|null $startTime 开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets jobId
    *  工作id
    *
    * @return int|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param int|null $jobId 工作id
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets enabled
    *  启用
    *
    * @return int|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param int|null $enabled 启用
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
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

