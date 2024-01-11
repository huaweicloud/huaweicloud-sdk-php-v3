<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkloadPlanStageReqWorkloadPlanStage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkloadPlanStageReq_workload_plan_stage';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * day  日期
    * month  月份
    * stageName  计划阶段
    * startTime  开始时间
    * endTime  结束时间
    * queueList  资源队列
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'day' => 'string',
            'month' => 'string',
            'stageName' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'queueList' => '\HuaweiCloud\SDK\Dws\V2\Model\QueueResourceItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * day  日期
    * month  月份
    * stageName  计划阶段
    * startTime  开始时间
    * endTime  结束时间
    * queueList  资源队列
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'day' => null,
        'month' => null,
        'stageName' => null,
        'startTime' => null,
        'endTime' => null,
        'queueList' => null
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
    * day  日期
    * month  月份
    * stageName  计划阶段
    * startTime  开始时间
    * endTime  结束时间
    * queueList  资源队列
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'day' => 'day',
            'month' => 'month',
            'stageName' => 'stage_name',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'queueList' => 'queue_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * day  日期
    * month  月份
    * stageName  计划阶段
    * startTime  开始时间
    * endTime  结束时间
    * queueList  资源队列
    *
    * @var string[]
    */
    protected static $setters = [
            'day' => 'setDay',
            'month' => 'setMonth',
            'stageName' => 'setStageName',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'queueList' => 'setQueueList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * day  日期
    * month  月份
    * stageName  计划阶段
    * startTime  开始时间
    * endTime  结束时间
    * queueList  资源队列
    *
    * @var string[]
    */
    protected static $getters = [
            'day' => 'getDay',
            'month' => 'getMonth',
            'stageName' => 'getStageName',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'queueList' => 'getQueueList'
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
        $this->container['day'] = isset($data['day']) ? $data['day'] : null;
        $this->container['month'] = isset($data['month']) ? $data['month'] : null;
        $this->container['stageName'] = isset($data['stageName']) ? $data['stageName'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['queueList'] = isset($data['queueList']) ? $data['queueList'] : null;
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
    * Gets day
    *  日期
    *
    * @return string|null
    */
    public function getDay()
    {
        return $this->container['day'];
    }

    /**
    * Sets day
    *
    * @param string|null $day 日期
    *
    * @return $this
    */
    public function setDay($day)
    {
        $this->container['day'] = $day;
        return $this;
    }

    /**
    * Gets month
    *  月份
    *
    * @return string|null
    */
    public function getMonth()
    {
        return $this->container['month'];
    }

    /**
    * Sets month
    *
    * @param string|null $month 月份
    *
    * @return $this
    */
    public function setMonth($month)
    {
        $this->container['month'] = $month;
        return $this;
    }

    /**
    * Gets stageName
    *  计划阶段
    *
    * @return string|null
    */
    public function getStageName()
    {
        return $this->container['stageName'];
    }

    /**
    * Sets stageName
    *
    * @param string|null $stageName 计划阶段
    *
    * @return $this
    */
    public function setStageName($stageName)
    {
        $this->container['stageName'] = $stageName;
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
    * Gets queueList
    *  资源队列
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\QueueResourceItem[]|null
    */
    public function getQueueList()
    {
        return $this->container['queueList'];
    }

    /**
    * Sets queueList
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\QueueResourceItem[]|null $queueList 资源队列
    *
    * @return $this
    */
    public function setQueueList($queueList)
    {
        $this->container['queueList'] = $queueList;
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

