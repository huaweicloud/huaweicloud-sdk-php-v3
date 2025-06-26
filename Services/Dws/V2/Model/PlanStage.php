<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PlanStage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PlanStage';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * month  **参数解释**： 计划月份。 **取值范围**： 不涉及。
    * day  **参数解释**： 计划日期。 **取值范围**： 不涉及。
    * planId  **参数解释**： 计划ID。 **取值范围**： 不涉及。
    * stageId  **参数解释**： 计划阶段ID。 **取值范围**： 不涉及。
    * stageName  **参数解释**： 计划阶段名称。 **取值范围**： 不涉及。
    * startTime  **参数解释**： 计划开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 计划结束时间。 **取值范围**： 不涉及。
    * nextValidTime  **参数解释**： 下次校验时间。 **取值范围**： 不涉及。
    * queueList  **参数解释**： 资源队列列表。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'month' => 'string',
            'day' => 'string',
            'planId' => 'string',
            'stageId' => 'string',
            'stageName' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'nextValidTime' => 'string',
            'queueList' => '\HuaweiCloud\SDK\Dws\V2\Model\QueueResourceItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * month  **参数解释**： 计划月份。 **取值范围**： 不涉及。
    * day  **参数解释**： 计划日期。 **取值范围**： 不涉及。
    * planId  **参数解释**： 计划ID。 **取值范围**： 不涉及。
    * stageId  **参数解释**： 计划阶段ID。 **取值范围**： 不涉及。
    * stageName  **参数解释**： 计划阶段名称。 **取值范围**： 不涉及。
    * startTime  **参数解释**： 计划开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 计划结束时间。 **取值范围**： 不涉及。
    * nextValidTime  **参数解释**： 下次校验时间。 **取值范围**： 不涉及。
    * queueList  **参数解释**： 资源队列列表。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'month' => null,
        'day' => null,
        'planId' => null,
        'stageId' => null,
        'stageName' => null,
        'startTime' => null,
        'endTime' => null,
        'nextValidTime' => null,
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
    * month  **参数解释**： 计划月份。 **取值范围**： 不涉及。
    * day  **参数解释**： 计划日期。 **取值范围**： 不涉及。
    * planId  **参数解释**： 计划ID。 **取值范围**： 不涉及。
    * stageId  **参数解释**： 计划阶段ID。 **取值范围**： 不涉及。
    * stageName  **参数解释**： 计划阶段名称。 **取值范围**： 不涉及。
    * startTime  **参数解释**： 计划开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 计划结束时间。 **取值范围**： 不涉及。
    * nextValidTime  **参数解释**： 下次校验时间。 **取值范围**： 不涉及。
    * queueList  **参数解释**： 资源队列列表。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'month' => 'month',
            'day' => 'day',
            'planId' => 'plan_id',
            'stageId' => 'stage_id',
            'stageName' => 'stage_name',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'nextValidTime' => 'next_valid_time',
            'queueList' => 'queue_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * month  **参数解释**： 计划月份。 **取值范围**： 不涉及。
    * day  **参数解释**： 计划日期。 **取值范围**： 不涉及。
    * planId  **参数解释**： 计划ID。 **取值范围**： 不涉及。
    * stageId  **参数解释**： 计划阶段ID。 **取值范围**： 不涉及。
    * stageName  **参数解释**： 计划阶段名称。 **取值范围**： 不涉及。
    * startTime  **参数解释**： 计划开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 计划结束时间。 **取值范围**： 不涉及。
    * nextValidTime  **参数解释**： 下次校验时间。 **取值范围**： 不涉及。
    * queueList  **参数解释**： 资源队列列表。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'month' => 'setMonth',
            'day' => 'setDay',
            'planId' => 'setPlanId',
            'stageId' => 'setStageId',
            'stageName' => 'setStageName',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'nextValidTime' => 'setNextValidTime',
            'queueList' => 'setQueueList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * month  **参数解释**： 计划月份。 **取值范围**： 不涉及。
    * day  **参数解释**： 计划日期。 **取值范围**： 不涉及。
    * planId  **参数解释**： 计划ID。 **取值范围**： 不涉及。
    * stageId  **参数解释**： 计划阶段ID。 **取值范围**： 不涉及。
    * stageName  **参数解释**： 计划阶段名称。 **取值范围**： 不涉及。
    * startTime  **参数解释**： 计划开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 计划结束时间。 **取值范围**： 不涉及。
    * nextValidTime  **参数解释**： 下次校验时间。 **取值范围**： 不涉及。
    * queueList  **参数解释**： 资源队列列表。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'month' => 'getMonth',
            'day' => 'getDay',
            'planId' => 'getPlanId',
            'stageId' => 'getStageId',
            'stageName' => 'getStageName',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'nextValidTime' => 'getNextValidTime',
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
        $this->container['month'] = isset($data['month']) ? $data['month'] : null;
        $this->container['day'] = isset($data['day']) ? $data['day'] : null;
        $this->container['planId'] = isset($data['planId']) ? $data['planId'] : null;
        $this->container['stageId'] = isset($data['stageId']) ? $data['stageId'] : null;
        $this->container['stageName'] = isset($data['stageName']) ? $data['stageName'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['nextValidTime'] = isset($data['nextValidTime']) ? $data['nextValidTime'] : null;
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
        if ($this->container['month'] === null) {
            $invalidProperties[] = "'month' can't be null";
        }
        if ($this->container['day'] === null) {
            $invalidProperties[] = "'day' can't be null";
        }
        if ($this->container['planId'] === null) {
            $invalidProperties[] = "'planId' can't be null";
        }
        if ($this->container['stageId'] === null) {
            $invalidProperties[] = "'stageId' can't be null";
        }
        if ($this->container['stageName'] === null) {
            $invalidProperties[] = "'stageName' can't be null";
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
    * Gets month
    *  **参数解释**： 计划月份。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getMonth()
    {
        return $this->container['month'];
    }

    /**
    * Sets month
    *
    * @param string $month **参数解释**： 计划月份。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMonth($month)
    {
        $this->container['month'] = $month;
        return $this;
    }

    /**
    * Gets day
    *  **参数解释**： 计划日期。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getDay()
    {
        return $this->container['day'];
    }

    /**
    * Sets day
    *
    * @param string $day **参数解释**： 计划日期。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDay($day)
    {
        $this->container['day'] = $day;
        return $this;
    }

    /**
    * Gets planId
    *  **参数解释**： 计划ID。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getPlanId()
    {
        return $this->container['planId'];
    }

    /**
    * Sets planId
    *
    * @param string $planId **参数解释**： 计划ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPlanId($planId)
    {
        $this->container['planId'] = $planId;
        return $this;
    }

    /**
    * Gets stageId
    *  **参数解释**： 计划阶段ID。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getStageId()
    {
        return $this->container['stageId'];
    }

    /**
    * Sets stageId
    *
    * @param string $stageId **参数解释**： 计划阶段ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setStageId($stageId)
    {
        $this->container['stageId'] = $stageId;
        return $this;
    }

    /**
    * Gets stageName
    *  **参数解释**： 计划阶段名称。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getStageName()
    {
        return $this->container['stageName'];
    }

    /**
    * Sets stageName
    *
    * @param string $stageName **参数解释**： 计划阶段名称。 **取值范围**： 不涉及。
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
    *  **参数解释**： 计划开始时间。 **取值范围**： 不涉及。
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
    * @param string|null $startTime **参数解释**： 计划开始时间。 **取值范围**： 不涉及。
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
    *  **参数解释**： 计划结束时间。 **取值范围**： 不涉及。
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
    * @param string|null $endTime **参数解释**： 计划结束时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets nextValidTime
    *  **参数解释**： 下次校验时间。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getNextValidTime()
    {
        return $this->container['nextValidTime'];
    }

    /**
    * Sets nextValidTime
    *
    * @param string|null $nextValidTime **参数解释**： 下次校验时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setNextValidTime($nextValidTime)
    {
        $this->container['nextValidTime'] = $nextValidTime;
        return $this;
    }

    /**
    * Gets queueList
    *  **参数解释**： 资源队列列表。 **取值范围**： 不涉及。
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
    * @param \HuaweiCloud\SDK\Dws\V2\Model\QueueResourceItem[]|null $queueList **参数解释**： 资源队列列表。 **取值范围**： 不涉及。
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

