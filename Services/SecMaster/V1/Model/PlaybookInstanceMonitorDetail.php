<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PlaybookInstanceMonitorDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PlaybookInstanceMonitorDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalInstanceRunNum  运行总次数
    * scheduleInstanceRunNum  定时触发执行次数
    * eventInstanceRunNum  时间触发执行次数
    * averageRunTime  平均运行时间
    * minRunTimeInstance  minRunTimeInstance
    * maxRunTimeInstance  maxRunTimeInstance
    * totalInstanceNum  剧本实例总数
    * successInstanceNum  运行成功实例数量
    * failInstanceNum  运行失败实例数量
    * terminateInstanceNum  运行终止实例数量
    * runningInstanceNum  运行中实例数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalInstanceRunNum' => 'int',
            'scheduleInstanceRunNum' => 'int',
            'eventInstanceRunNum' => 'int',
            'averageRunTime' => 'float',
            'minRunTimeInstance' => '\HuaweiCloud\SDK\SecMaster\V1\Model\PlaybookInstanceRunStatistics',
            'maxRunTimeInstance' => '\HuaweiCloud\SDK\SecMaster\V1\Model\PlaybookInstanceRunStatistics',
            'totalInstanceNum' => 'int',
            'successInstanceNum' => 'int',
            'failInstanceNum' => 'int',
            'terminateInstanceNum' => 'int',
            'runningInstanceNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalInstanceRunNum  运行总次数
    * scheduleInstanceRunNum  定时触发执行次数
    * eventInstanceRunNum  时间触发执行次数
    * averageRunTime  平均运行时间
    * minRunTimeInstance  minRunTimeInstance
    * maxRunTimeInstance  maxRunTimeInstance
    * totalInstanceNum  剧本实例总数
    * successInstanceNum  运行成功实例数量
    * failInstanceNum  运行失败实例数量
    * terminateInstanceNum  运行终止实例数量
    * runningInstanceNum  运行中实例数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalInstanceRunNum' => 'float',
        'scheduleInstanceRunNum' => 'int32',
        'eventInstanceRunNum' => 'int32',
        'averageRunTime' => 'number',
        'minRunTimeInstance' => null,
        'maxRunTimeInstance' => null,
        'totalInstanceNum' => 'int32',
        'successInstanceNum' => 'int32',
        'failInstanceNum' => 'int32',
        'terminateInstanceNum' => 'int32',
        'runningInstanceNum' => 'int32'
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
    * totalInstanceRunNum  运行总次数
    * scheduleInstanceRunNum  定时触发执行次数
    * eventInstanceRunNum  时间触发执行次数
    * averageRunTime  平均运行时间
    * minRunTimeInstance  minRunTimeInstance
    * maxRunTimeInstance  maxRunTimeInstance
    * totalInstanceNum  剧本实例总数
    * successInstanceNum  运行成功实例数量
    * failInstanceNum  运行失败实例数量
    * terminateInstanceNum  运行终止实例数量
    * runningInstanceNum  运行中实例数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalInstanceRunNum' => 'total_instance_run_num',
            'scheduleInstanceRunNum' => 'schedule_instance_run_num',
            'eventInstanceRunNum' => 'event_instance_run_num',
            'averageRunTime' => 'average_run_time',
            'minRunTimeInstance' => 'min_run_time_instance',
            'maxRunTimeInstance' => 'max_run_time_instance',
            'totalInstanceNum' => 'total_instance_num',
            'successInstanceNum' => 'success_instance_num',
            'failInstanceNum' => 'fail_instance_num',
            'terminateInstanceNum' => 'terminate_instance_num',
            'runningInstanceNum' => 'running_instance_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalInstanceRunNum  运行总次数
    * scheduleInstanceRunNum  定时触发执行次数
    * eventInstanceRunNum  时间触发执行次数
    * averageRunTime  平均运行时间
    * minRunTimeInstance  minRunTimeInstance
    * maxRunTimeInstance  maxRunTimeInstance
    * totalInstanceNum  剧本实例总数
    * successInstanceNum  运行成功实例数量
    * failInstanceNum  运行失败实例数量
    * terminateInstanceNum  运行终止实例数量
    * runningInstanceNum  运行中实例数量
    *
    * @var string[]
    */
    protected static $setters = [
            'totalInstanceRunNum' => 'setTotalInstanceRunNum',
            'scheduleInstanceRunNum' => 'setScheduleInstanceRunNum',
            'eventInstanceRunNum' => 'setEventInstanceRunNum',
            'averageRunTime' => 'setAverageRunTime',
            'minRunTimeInstance' => 'setMinRunTimeInstance',
            'maxRunTimeInstance' => 'setMaxRunTimeInstance',
            'totalInstanceNum' => 'setTotalInstanceNum',
            'successInstanceNum' => 'setSuccessInstanceNum',
            'failInstanceNum' => 'setFailInstanceNum',
            'terminateInstanceNum' => 'setTerminateInstanceNum',
            'runningInstanceNum' => 'setRunningInstanceNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalInstanceRunNum  运行总次数
    * scheduleInstanceRunNum  定时触发执行次数
    * eventInstanceRunNum  时间触发执行次数
    * averageRunTime  平均运行时间
    * minRunTimeInstance  minRunTimeInstance
    * maxRunTimeInstance  maxRunTimeInstance
    * totalInstanceNum  剧本实例总数
    * successInstanceNum  运行成功实例数量
    * failInstanceNum  运行失败实例数量
    * terminateInstanceNum  运行终止实例数量
    * runningInstanceNum  运行中实例数量
    *
    * @var string[]
    */
    protected static $getters = [
            'totalInstanceRunNum' => 'getTotalInstanceRunNum',
            'scheduleInstanceRunNum' => 'getScheduleInstanceRunNum',
            'eventInstanceRunNum' => 'getEventInstanceRunNum',
            'averageRunTime' => 'getAverageRunTime',
            'minRunTimeInstance' => 'getMinRunTimeInstance',
            'maxRunTimeInstance' => 'getMaxRunTimeInstance',
            'totalInstanceNum' => 'getTotalInstanceNum',
            'successInstanceNum' => 'getSuccessInstanceNum',
            'failInstanceNum' => 'getFailInstanceNum',
            'terminateInstanceNum' => 'getTerminateInstanceNum',
            'runningInstanceNum' => 'getRunningInstanceNum'
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
        $this->container['totalInstanceRunNum'] = isset($data['totalInstanceRunNum']) ? $data['totalInstanceRunNum'] : null;
        $this->container['scheduleInstanceRunNum'] = isset($data['scheduleInstanceRunNum']) ? $data['scheduleInstanceRunNum'] : null;
        $this->container['eventInstanceRunNum'] = isset($data['eventInstanceRunNum']) ? $data['eventInstanceRunNum'] : null;
        $this->container['averageRunTime'] = isset($data['averageRunTime']) ? $data['averageRunTime'] : null;
        $this->container['minRunTimeInstance'] = isset($data['minRunTimeInstance']) ? $data['minRunTimeInstance'] : null;
        $this->container['maxRunTimeInstance'] = isset($data['maxRunTimeInstance']) ? $data['maxRunTimeInstance'] : null;
        $this->container['totalInstanceNum'] = isset($data['totalInstanceNum']) ? $data['totalInstanceNum'] : null;
        $this->container['successInstanceNum'] = isset($data['successInstanceNum']) ? $data['successInstanceNum'] : null;
        $this->container['failInstanceNum'] = isset($data['failInstanceNum']) ? $data['failInstanceNum'] : null;
        $this->container['terminateInstanceNum'] = isset($data['terminateInstanceNum']) ? $data['terminateInstanceNum'] : null;
        $this->container['runningInstanceNum'] = isset($data['runningInstanceNum']) ? $data['runningInstanceNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['totalInstanceRunNum']) && ($this->container['totalInstanceRunNum'] > 99999999)) {
                $invalidProperties[] = "invalid value for 'totalInstanceRunNum', must be smaller than or equal to 99999999.";
            }
            if (!is_null($this->container['totalInstanceRunNum']) && ($this->container['totalInstanceRunNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalInstanceRunNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scheduleInstanceRunNum']) && ($this->container['scheduleInstanceRunNum'] > 99999999)) {
                $invalidProperties[] = "invalid value for 'scheduleInstanceRunNum', must be smaller than or equal to 99999999.";
            }
            if (!is_null($this->container['scheduleInstanceRunNum']) && ($this->container['scheduleInstanceRunNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'scheduleInstanceRunNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['eventInstanceRunNum']) && ($this->container['eventInstanceRunNum'] > 99999999)) {
                $invalidProperties[] = "invalid value for 'eventInstanceRunNum', must be smaller than or equal to 99999999.";
            }
            if (!is_null($this->container['eventInstanceRunNum']) && ($this->container['eventInstanceRunNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'eventInstanceRunNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['averageRunTime']) && ($this->container['averageRunTime'] > 9999999999)) {
                $invalidProperties[] = "invalid value for 'averageRunTime', must be smaller than or equal to 9999999999.";
            }
            if (!is_null($this->container['averageRunTime']) && ($this->container['averageRunTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'averageRunTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['totalInstanceNum']) && ($this->container['totalInstanceNum'] > 99999999)) {
                $invalidProperties[] = "invalid value for 'totalInstanceNum', must be smaller than or equal to 99999999.";
            }
            if (!is_null($this->container['totalInstanceNum']) && ($this->container['totalInstanceNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalInstanceNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['successInstanceNum']) && ($this->container['successInstanceNum'] > 99999999)) {
                $invalidProperties[] = "invalid value for 'successInstanceNum', must be smaller than or equal to 99999999.";
            }
            if (!is_null($this->container['successInstanceNum']) && ($this->container['successInstanceNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'successInstanceNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['failInstanceNum']) && ($this->container['failInstanceNum'] > 99999999)) {
                $invalidProperties[] = "invalid value for 'failInstanceNum', must be smaller than or equal to 99999999.";
            }
            if (!is_null($this->container['failInstanceNum']) && ($this->container['failInstanceNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'failInstanceNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['terminateInstanceNum']) && ($this->container['terminateInstanceNum'] > 99999999)) {
                $invalidProperties[] = "invalid value for 'terminateInstanceNum', must be smaller than or equal to 99999999.";
            }
            if (!is_null($this->container['terminateInstanceNum']) && ($this->container['terminateInstanceNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'terminateInstanceNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['runningInstanceNum']) && ($this->container['runningInstanceNum'] > 99999999)) {
                $invalidProperties[] = "invalid value for 'runningInstanceNum', must be smaller than or equal to 99999999.";
            }
            if (!is_null($this->container['runningInstanceNum']) && ($this->container['runningInstanceNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'runningInstanceNum', must be bigger than or equal to 0.";
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
    * Gets totalInstanceRunNum
    *  运行总次数
    *
    * @return int|null
    */
    public function getTotalInstanceRunNum()
    {
        return $this->container['totalInstanceRunNum'];
    }

    /**
    * Sets totalInstanceRunNum
    *
    * @param int|null $totalInstanceRunNum 运行总次数
    *
    * @return $this
    */
    public function setTotalInstanceRunNum($totalInstanceRunNum)
    {
        $this->container['totalInstanceRunNum'] = $totalInstanceRunNum;
        return $this;
    }

    /**
    * Gets scheduleInstanceRunNum
    *  定时触发执行次数
    *
    * @return int|null
    */
    public function getScheduleInstanceRunNum()
    {
        return $this->container['scheduleInstanceRunNum'];
    }

    /**
    * Sets scheduleInstanceRunNum
    *
    * @param int|null $scheduleInstanceRunNum 定时触发执行次数
    *
    * @return $this
    */
    public function setScheduleInstanceRunNum($scheduleInstanceRunNum)
    {
        $this->container['scheduleInstanceRunNum'] = $scheduleInstanceRunNum;
        return $this;
    }

    /**
    * Gets eventInstanceRunNum
    *  时间触发执行次数
    *
    * @return int|null
    */
    public function getEventInstanceRunNum()
    {
        return $this->container['eventInstanceRunNum'];
    }

    /**
    * Sets eventInstanceRunNum
    *
    * @param int|null $eventInstanceRunNum 时间触发执行次数
    *
    * @return $this
    */
    public function setEventInstanceRunNum($eventInstanceRunNum)
    {
        $this->container['eventInstanceRunNum'] = $eventInstanceRunNum;
        return $this;
    }

    /**
    * Gets averageRunTime
    *  平均运行时间
    *
    * @return float|null
    */
    public function getAverageRunTime()
    {
        return $this->container['averageRunTime'];
    }

    /**
    * Sets averageRunTime
    *
    * @param float|null $averageRunTime 平均运行时间
    *
    * @return $this
    */
    public function setAverageRunTime($averageRunTime)
    {
        $this->container['averageRunTime'] = $averageRunTime;
        return $this;
    }

    /**
    * Gets minRunTimeInstance
    *  minRunTimeInstance
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\PlaybookInstanceRunStatistics|null
    */
    public function getMinRunTimeInstance()
    {
        return $this->container['minRunTimeInstance'];
    }

    /**
    * Sets minRunTimeInstance
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\PlaybookInstanceRunStatistics|null $minRunTimeInstance minRunTimeInstance
    *
    * @return $this
    */
    public function setMinRunTimeInstance($minRunTimeInstance)
    {
        $this->container['minRunTimeInstance'] = $minRunTimeInstance;
        return $this;
    }

    /**
    * Gets maxRunTimeInstance
    *  maxRunTimeInstance
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\PlaybookInstanceRunStatistics|null
    */
    public function getMaxRunTimeInstance()
    {
        return $this->container['maxRunTimeInstance'];
    }

    /**
    * Sets maxRunTimeInstance
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\PlaybookInstanceRunStatistics|null $maxRunTimeInstance maxRunTimeInstance
    *
    * @return $this
    */
    public function setMaxRunTimeInstance($maxRunTimeInstance)
    {
        $this->container['maxRunTimeInstance'] = $maxRunTimeInstance;
        return $this;
    }

    /**
    * Gets totalInstanceNum
    *  剧本实例总数
    *
    * @return int|null
    */
    public function getTotalInstanceNum()
    {
        return $this->container['totalInstanceNum'];
    }

    /**
    * Sets totalInstanceNum
    *
    * @param int|null $totalInstanceNum 剧本实例总数
    *
    * @return $this
    */
    public function setTotalInstanceNum($totalInstanceNum)
    {
        $this->container['totalInstanceNum'] = $totalInstanceNum;
        return $this;
    }

    /**
    * Gets successInstanceNum
    *  运行成功实例数量
    *
    * @return int|null
    */
    public function getSuccessInstanceNum()
    {
        return $this->container['successInstanceNum'];
    }

    /**
    * Sets successInstanceNum
    *
    * @param int|null $successInstanceNum 运行成功实例数量
    *
    * @return $this
    */
    public function setSuccessInstanceNum($successInstanceNum)
    {
        $this->container['successInstanceNum'] = $successInstanceNum;
        return $this;
    }

    /**
    * Gets failInstanceNum
    *  运行失败实例数量
    *
    * @return int|null
    */
    public function getFailInstanceNum()
    {
        return $this->container['failInstanceNum'];
    }

    /**
    * Sets failInstanceNum
    *
    * @param int|null $failInstanceNum 运行失败实例数量
    *
    * @return $this
    */
    public function setFailInstanceNum($failInstanceNum)
    {
        $this->container['failInstanceNum'] = $failInstanceNum;
        return $this;
    }

    /**
    * Gets terminateInstanceNum
    *  运行终止实例数量
    *
    * @return int|null
    */
    public function getTerminateInstanceNum()
    {
        return $this->container['terminateInstanceNum'];
    }

    /**
    * Sets terminateInstanceNum
    *
    * @param int|null $terminateInstanceNum 运行终止实例数量
    *
    * @return $this
    */
    public function setTerminateInstanceNum($terminateInstanceNum)
    {
        $this->container['terminateInstanceNum'] = $terminateInstanceNum;
        return $this;
    }

    /**
    * Gets runningInstanceNum
    *  运行中实例数量
    *
    * @return int|null
    */
    public function getRunningInstanceNum()
    {
        return $this->container['runningInstanceNum'];
    }

    /**
    * Sets runningInstanceNum
    *
    * @param int|null $runningInstanceNum 运行中实例数量
    *
    * @return $this
    */
    public function setRunningInstanceNum($runningInstanceNum)
    {
        $this->container['runningInstanceNum'] = $runningInstanceNum;
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

