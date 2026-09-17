<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskStatusOpenResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskStatusOpenResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  **参数解释**： 任务ID。 **默认取值**： 不涉及。
    * taskDeadLine  **参数解释**： 任务截止时间。 **默认取值**： 不涉及。
    * category  **参数解释**： 分类信息。 **默认取值**： VacuumFull
    * status  **参数解释**： 状态。 **默认取值**： 不涉及。
    * timeLeft  **参数解释**： 剩余时间。 **默认取值**： 不涉及。
    * startTime  **参数解释**： 开始时间。 **默认取值**： 不涉及。
    * endTime  **参数解释**： 结束时间。 **默认取值**： 不涉及。
    * finishedPercentage  **参数解释**： 完成百分比。 **默认取值**： 不涉及。
    * vacuumedSpace  **参数解释**： 任务ID。 **默认取值**： 不涉及。
    * tableVacuumInfo  tableVacuumInfo
    * vacuumInfo  **参数解释**： Vacuum信息。 **默认取值**： 不涉及。
    * tableVacuumNumInfo  tableVacuumNumInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'taskDeadLine' => 'string',
            'category' => 'string',
            'status' => 'string',
            'timeLeft' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'finishedPercentage' => 'string',
            'vacuumedSpace' => 'string',
            'tableVacuumInfo' => '\HuaweiCloud\SDK\Dws\V2\Model\TableVacuumInfoOpen',
            'vacuumInfo' => 'object[]',
            'tableVacuumNumInfo' => '\HuaweiCloud\SDK\Dws\V2\Model\TableVacuumNumInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  **参数解释**： 任务ID。 **默认取值**： 不涉及。
    * taskDeadLine  **参数解释**： 任务截止时间。 **默认取值**： 不涉及。
    * category  **参数解释**： 分类信息。 **默认取值**： VacuumFull
    * status  **参数解释**： 状态。 **默认取值**： 不涉及。
    * timeLeft  **参数解释**： 剩余时间。 **默认取值**： 不涉及。
    * startTime  **参数解释**： 开始时间。 **默认取值**： 不涉及。
    * endTime  **参数解释**： 结束时间。 **默认取值**： 不涉及。
    * finishedPercentage  **参数解释**： 完成百分比。 **默认取值**： 不涉及。
    * vacuumedSpace  **参数解释**： 任务ID。 **默认取值**： 不涉及。
    * tableVacuumInfo  tableVacuumInfo
    * vacuumInfo  **参数解释**： Vacuum信息。 **默认取值**： 不涉及。
    * tableVacuumNumInfo  tableVacuumNumInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'taskDeadLine' => null,
        'category' => null,
        'status' => null,
        'timeLeft' => null,
        'startTime' => null,
        'endTime' => null,
        'finishedPercentage' => null,
        'vacuumedSpace' => null,
        'tableVacuumInfo' => null,
        'vacuumInfo' => null,
        'tableVacuumNumInfo' => null
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
    * taskId  **参数解释**： 任务ID。 **默认取值**： 不涉及。
    * taskDeadLine  **参数解释**： 任务截止时间。 **默认取值**： 不涉及。
    * category  **参数解释**： 分类信息。 **默认取值**： VacuumFull
    * status  **参数解释**： 状态。 **默认取值**： 不涉及。
    * timeLeft  **参数解释**： 剩余时间。 **默认取值**： 不涉及。
    * startTime  **参数解释**： 开始时间。 **默认取值**： 不涉及。
    * endTime  **参数解释**： 结束时间。 **默认取值**： 不涉及。
    * finishedPercentage  **参数解释**： 完成百分比。 **默认取值**： 不涉及。
    * vacuumedSpace  **参数解释**： 任务ID。 **默认取值**： 不涉及。
    * tableVacuumInfo  tableVacuumInfo
    * vacuumInfo  **参数解释**： Vacuum信息。 **默认取值**： 不涉及。
    * tableVacuumNumInfo  tableVacuumNumInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'taskDeadLine' => 'task_dead_line',
            'category' => 'category',
            'status' => 'status',
            'timeLeft' => 'time_left',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'finishedPercentage' => 'finished_percentage',
            'vacuumedSpace' => 'vacuumed_space',
            'tableVacuumInfo' => 'table_vacuum_info',
            'vacuumInfo' => 'vacuum_info',
            'tableVacuumNumInfo' => 'table_vacuum_num_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  **参数解释**： 任务ID。 **默认取值**： 不涉及。
    * taskDeadLine  **参数解释**： 任务截止时间。 **默认取值**： 不涉及。
    * category  **参数解释**： 分类信息。 **默认取值**： VacuumFull
    * status  **参数解释**： 状态。 **默认取值**： 不涉及。
    * timeLeft  **参数解释**： 剩余时间。 **默认取值**： 不涉及。
    * startTime  **参数解释**： 开始时间。 **默认取值**： 不涉及。
    * endTime  **参数解释**： 结束时间。 **默认取值**： 不涉及。
    * finishedPercentage  **参数解释**： 完成百分比。 **默认取值**： 不涉及。
    * vacuumedSpace  **参数解释**： 任务ID。 **默认取值**： 不涉及。
    * tableVacuumInfo  tableVacuumInfo
    * vacuumInfo  **参数解释**： Vacuum信息。 **默认取值**： 不涉及。
    * tableVacuumNumInfo  tableVacuumNumInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'taskDeadLine' => 'setTaskDeadLine',
            'category' => 'setCategory',
            'status' => 'setStatus',
            'timeLeft' => 'setTimeLeft',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'finishedPercentage' => 'setFinishedPercentage',
            'vacuumedSpace' => 'setVacuumedSpace',
            'tableVacuumInfo' => 'setTableVacuumInfo',
            'vacuumInfo' => 'setVacuumInfo',
            'tableVacuumNumInfo' => 'setTableVacuumNumInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  **参数解释**： 任务ID。 **默认取值**： 不涉及。
    * taskDeadLine  **参数解释**： 任务截止时间。 **默认取值**： 不涉及。
    * category  **参数解释**： 分类信息。 **默认取值**： VacuumFull
    * status  **参数解释**： 状态。 **默认取值**： 不涉及。
    * timeLeft  **参数解释**： 剩余时间。 **默认取值**： 不涉及。
    * startTime  **参数解释**： 开始时间。 **默认取值**： 不涉及。
    * endTime  **参数解释**： 结束时间。 **默认取值**： 不涉及。
    * finishedPercentage  **参数解释**： 完成百分比。 **默认取值**： 不涉及。
    * vacuumedSpace  **参数解释**： 任务ID。 **默认取值**： 不涉及。
    * tableVacuumInfo  tableVacuumInfo
    * vacuumInfo  **参数解释**： Vacuum信息。 **默认取值**： 不涉及。
    * tableVacuumNumInfo  tableVacuumNumInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'taskDeadLine' => 'getTaskDeadLine',
            'category' => 'getCategory',
            'status' => 'getStatus',
            'timeLeft' => 'getTimeLeft',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'finishedPercentage' => 'getFinishedPercentage',
            'vacuumedSpace' => 'getVacuumedSpace',
            'tableVacuumInfo' => 'getTableVacuumInfo',
            'vacuumInfo' => 'getVacuumInfo',
            'tableVacuumNumInfo' => 'getTableVacuumNumInfo'
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['taskDeadLine'] = isset($data['taskDeadLine']) ? $data['taskDeadLine'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['timeLeft'] = isset($data['timeLeft']) ? $data['timeLeft'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['finishedPercentage'] = isset($data['finishedPercentage']) ? $data['finishedPercentage'] : null;
        $this->container['vacuumedSpace'] = isset($data['vacuumedSpace']) ? $data['vacuumedSpace'] : null;
        $this->container['tableVacuumInfo'] = isset($data['tableVacuumInfo']) ? $data['tableVacuumInfo'] : null;
        $this->container['vacuumInfo'] = isset($data['vacuumInfo']) ? $data['vacuumInfo'] : null;
        $this->container['tableVacuumNumInfo'] = isset($data['tableVacuumNumInfo']) ? $data['tableVacuumNumInfo'] : null;
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
    * Gets taskId
    *  **参数解释**： 任务ID。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId **参数解释**： 任务ID。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets taskDeadLine
    *  **参数解释**： 任务截止时间。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getTaskDeadLine()
    {
        return $this->container['taskDeadLine'];
    }

    /**
    * Sets taskDeadLine
    *
    * @param string|null $taskDeadLine **参数解释**： 任务截止时间。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setTaskDeadLine($taskDeadLine)
    {
        $this->container['taskDeadLine'] = $taskDeadLine;
        return $this;
    }

    /**
    * Gets category
    *  **参数解释**： 分类信息。 **默认取值**： VacuumFull
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category **参数解释**： 分类信息。 **默认取值**： VacuumFull
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 状态。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释**： 状态。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets timeLeft
    *  **参数解释**： 剩余时间。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getTimeLeft()
    {
        return $this->container['timeLeft'];
    }

    /**
    * Sets timeLeft
    *
    * @param string|null $timeLeft **参数解释**： 剩余时间。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setTimeLeft($timeLeft)
    {
        $this->container['timeLeft'] = $timeLeft;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释**： 开始时间。 **默认取值**： 不涉及。
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
    * @param string|null $startTime **参数解释**： 开始时间。 **默认取值**： 不涉及。
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
    *  **参数解释**： 结束时间。 **默认取值**： 不涉及。
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
    * @param string|null $endTime **参数解释**： 结束时间。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets finishedPercentage
    *  **参数解释**： 完成百分比。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getFinishedPercentage()
    {
        return $this->container['finishedPercentage'];
    }

    /**
    * Sets finishedPercentage
    *
    * @param string|null $finishedPercentage **参数解释**： 完成百分比。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setFinishedPercentage($finishedPercentage)
    {
        $this->container['finishedPercentage'] = $finishedPercentage;
        return $this;
    }

    /**
    * Gets vacuumedSpace
    *  **参数解释**： 任务ID。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getVacuumedSpace()
    {
        return $this->container['vacuumedSpace'];
    }

    /**
    * Sets vacuumedSpace
    *
    * @param string|null $vacuumedSpace **参数解释**： 任务ID。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setVacuumedSpace($vacuumedSpace)
    {
        $this->container['vacuumedSpace'] = $vacuumedSpace;
        return $this;
    }

    /**
    * Gets tableVacuumInfo
    *  tableVacuumInfo
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\TableVacuumInfoOpen|null
    */
    public function getTableVacuumInfo()
    {
        return $this->container['tableVacuumInfo'];
    }

    /**
    * Sets tableVacuumInfo
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\TableVacuumInfoOpen|null $tableVacuumInfo tableVacuumInfo
    *
    * @return $this
    */
    public function setTableVacuumInfo($tableVacuumInfo)
    {
        $this->container['tableVacuumInfo'] = $tableVacuumInfo;
        return $this;
    }

    /**
    * Gets vacuumInfo
    *  **参数解释**： Vacuum信息。 **默认取值**： 不涉及。
    *
    * @return object[]|null
    */
    public function getVacuumInfo()
    {
        return $this->container['vacuumInfo'];
    }

    /**
    * Sets vacuumInfo
    *
    * @param object[]|null $vacuumInfo **参数解释**： Vacuum信息。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setVacuumInfo($vacuumInfo)
    {
        $this->container['vacuumInfo'] = $vacuumInfo;
        return $this;
    }

    /**
    * Gets tableVacuumNumInfo
    *  tableVacuumNumInfo
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\TableVacuumNumInfo|null
    */
    public function getTableVacuumNumInfo()
    {
        return $this->container['tableVacuumNumInfo'];
    }

    /**
    * Sets tableVacuumNumInfo
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\TableVacuumNumInfo|null $tableVacuumNumInfo tableVacuumNumInfo
    *
    * @return $this
    */
    public function setTableVacuumNumInfo($tableVacuumNumInfo)
    {
        $this->container['tableVacuumNumInfo'] = $tableVacuumNumInfo;
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

