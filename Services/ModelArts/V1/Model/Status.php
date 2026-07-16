<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Status implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Status';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * phase  训练作业一级状态。可选值如下： - Creating：创建中 - Pending：等待中 - Running：运行中 - Failed：运行失败 - Completed：已完成 - Terminating：停止中 - Terminated：已停止 - Abnormal：异常
    * secondaryPhase  训练作业二级状态为内部详细状态，可能会增加、修改、删除，不建议依赖。可选值如下： - Creating：创建中 - Queuing：排队中 - Running：运行中 - Failed：运行失败 - Completed：已完成 - Terminating：停止中 - Terminated：已停止 - CreateFailed：创建失败 - TerminatedFailed：停止失败 - Unknown：未知状态 - Lost：异常
    * duration  训练作业运行时长，单位为毫秒。
    * nodeCountMetrics  训练作业运行时节点数变化指标。
    * tasks  训练作业子任务名称。
    * startTime  训练作业开始时间，格式为时间戳。
    * taskStatuses  训练在子任务状态信息。
    * runningRecords  训练作业运行及故障恢复记录。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'phase' => 'string',
            'secondaryPhase' => 'string',
            'duration' => 'int',
            'nodeCountMetrics' => 'int[][]',
            'tasks' => 'string[]',
            'startTime' => 'int',
            'taskStatuses' => '\HuaweiCloud\SDK\ModelArts\V1\Model\TaskStatuses[]',
            'runningRecords' => '\HuaweiCloud\SDK\ModelArts\V1\Model\RunningRecord[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * phase  训练作业一级状态。可选值如下： - Creating：创建中 - Pending：等待中 - Running：运行中 - Failed：运行失败 - Completed：已完成 - Terminating：停止中 - Terminated：已停止 - Abnormal：异常
    * secondaryPhase  训练作业二级状态为内部详细状态，可能会增加、修改、删除，不建议依赖。可选值如下： - Creating：创建中 - Queuing：排队中 - Running：运行中 - Failed：运行失败 - Completed：已完成 - Terminating：停止中 - Terminated：已停止 - CreateFailed：创建失败 - TerminatedFailed：停止失败 - Unknown：未知状态 - Lost：异常
    * duration  训练作业运行时长，单位为毫秒。
    * nodeCountMetrics  训练作业运行时节点数变化指标。
    * tasks  训练作业子任务名称。
    * startTime  训练作业开始时间，格式为时间戳。
    * taskStatuses  训练在子任务状态信息。
    * runningRecords  训练作业运行及故障恢复记录。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'phase' => null,
        'secondaryPhase' => null,
        'duration' => 'int64',
        'nodeCountMetrics' => null,
        'tasks' => null,
        'startTime' => 'int64',
        'taskStatuses' => null,
        'runningRecords' => null
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
    * phase  训练作业一级状态。可选值如下： - Creating：创建中 - Pending：等待中 - Running：运行中 - Failed：运行失败 - Completed：已完成 - Terminating：停止中 - Terminated：已停止 - Abnormal：异常
    * secondaryPhase  训练作业二级状态为内部详细状态，可能会增加、修改、删除，不建议依赖。可选值如下： - Creating：创建中 - Queuing：排队中 - Running：运行中 - Failed：运行失败 - Completed：已完成 - Terminating：停止中 - Terminated：已停止 - CreateFailed：创建失败 - TerminatedFailed：停止失败 - Unknown：未知状态 - Lost：异常
    * duration  训练作业运行时长，单位为毫秒。
    * nodeCountMetrics  训练作业运行时节点数变化指标。
    * tasks  训练作业子任务名称。
    * startTime  训练作业开始时间，格式为时间戳。
    * taskStatuses  训练在子任务状态信息。
    * runningRecords  训练作业运行及故障恢复记录。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'phase' => 'phase',
            'secondaryPhase' => 'secondary_phase',
            'duration' => 'duration',
            'nodeCountMetrics' => 'node_count_metrics',
            'tasks' => 'tasks',
            'startTime' => 'start_time',
            'taskStatuses' => 'task_statuses',
            'runningRecords' => 'running_records'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * phase  训练作业一级状态。可选值如下： - Creating：创建中 - Pending：等待中 - Running：运行中 - Failed：运行失败 - Completed：已完成 - Terminating：停止中 - Terminated：已停止 - Abnormal：异常
    * secondaryPhase  训练作业二级状态为内部详细状态，可能会增加、修改、删除，不建议依赖。可选值如下： - Creating：创建中 - Queuing：排队中 - Running：运行中 - Failed：运行失败 - Completed：已完成 - Terminating：停止中 - Terminated：已停止 - CreateFailed：创建失败 - TerminatedFailed：停止失败 - Unknown：未知状态 - Lost：异常
    * duration  训练作业运行时长，单位为毫秒。
    * nodeCountMetrics  训练作业运行时节点数变化指标。
    * tasks  训练作业子任务名称。
    * startTime  训练作业开始时间，格式为时间戳。
    * taskStatuses  训练在子任务状态信息。
    * runningRecords  训练作业运行及故障恢复记录。
    *
    * @var string[]
    */
    protected static $setters = [
            'phase' => 'setPhase',
            'secondaryPhase' => 'setSecondaryPhase',
            'duration' => 'setDuration',
            'nodeCountMetrics' => 'setNodeCountMetrics',
            'tasks' => 'setTasks',
            'startTime' => 'setStartTime',
            'taskStatuses' => 'setTaskStatuses',
            'runningRecords' => 'setRunningRecords'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * phase  训练作业一级状态。可选值如下： - Creating：创建中 - Pending：等待中 - Running：运行中 - Failed：运行失败 - Completed：已完成 - Terminating：停止中 - Terminated：已停止 - Abnormal：异常
    * secondaryPhase  训练作业二级状态为内部详细状态，可能会增加、修改、删除，不建议依赖。可选值如下： - Creating：创建中 - Queuing：排队中 - Running：运行中 - Failed：运行失败 - Completed：已完成 - Terminating：停止中 - Terminated：已停止 - CreateFailed：创建失败 - TerminatedFailed：停止失败 - Unknown：未知状态 - Lost：异常
    * duration  训练作业运行时长，单位为毫秒。
    * nodeCountMetrics  训练作业运行时节点数变化指标。
    * tasks  训练作业子任务名称。
    * startTime  训练作业开始时间，格式为时间戳。
    * taskStatuses  训练在子任务状态信息。
    * runningRecords  训练作业运行及故障恢复记录。
    *
    * @var string[]
    */
    protected static $getters = [
            'phase' => 'getPhase',
            'secondaryPhase' => 'getSecondaryPhase',
            'duration' => 'getDuration',
            'nodeCountMetrics' => 'getNodeCountMetrics',
            'tasks' => 'getTasks',
            'startTime' => 'getStartTime',
            'taskStatuses' => 'getTaskStatuses',
            'runningRecords' => 'getRunningRecords'
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
        $this->container['phase'] = isset($data['phase']) ? $data['phase'] : null;
        $this->container['secondaryPhase'] = isset($data['secondaryPhase']) ? $data['secondaryPhase'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['nodeCountMetrics'] = isset($data['nodeCountMetrics']) ? $data['nodeCountMetrics'] : null;
        $this->container['tasks'] = isset($data['tasks']) ? $data['tasks'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['taskStatuses'] = isset($data['taskStatuses']) ? $data['taskStatuses'] : null;
        $this->container['runningRecords'] = isset($data['runningRecords']) ? $data['runningRecords'] : null;
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
    * Gets phase
    *  训练作业一级状态。可选值如下： - Creating：创建中 - Pending：等待中 - Running：运行中 - Failed：运行失败 - Completed：已完成 - Terminating：停止中 - Terminated：已停止 - Abnormal：异常
    *
    * @return string|null
    */
    public function getPhase()
    {
        return $this->container['phase'];
    }

    /**
    * Sets phase
    *
    * @param string|null $phase 训练作业一级状态。可选值如下： - Creating：创建中 - Pending：等待中 - Running：运行中 - Failed：运行失败 - Completed：已完成 - Terminating：停止中 - Terminated：已停止 - Abnormal：异常
    *
    * @return $this
    */
    public function setPhase($phase)
    {
        $this->container['phase'] = $phase;
        return $this;
    }

    /**
    * Gets secondaryPhase
    *  训练作业二级状态为内部详细状态，可能会增加、修改、删除，不建议依赖。可选值如下： - Creating：创建中 - Queuing：排队中 - Running：运行中 - Failed：运行失败 - Completed：已完成 - Terminating：停止中 - Terminated：已停止 - CreateFailed：创建失败 - TerminatedFailed：停止失败 - Unknown：未知状态 - Lost：异常
    *
    * @return string|null
    */
    public function getSecondaryPhase()
    {
        return $this->container['secondaryPhase'];
    }

    /**
    * Sets secondaryPhase
    *
    * @param string|null $secondaryPhase 训练作业二级状态为内部详细状态，可能会增加、修改、删除，不建议依赖。可选值如下： - Creating：创建中 - Queuing：排队中 - Running：运行中 - Failed：运行失败 - Completed：已完成 - Terminating：停止中 - Terminated：已停止 - CreateFailed：创建失败 - TerminatedFailed：停止失败 - Unknown：未知状态 - Lost：异常
    *
    * @return $this
    */
    public function setSecondaryPhase($secondaryPhase)
    {
        $this->container['secondaryPhase'] = $secondaryPhase;
        return $this;
    }

    /**
    * Gets duration
    *  训练作业运行时长，单位为毫秒。
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
    * @param int|null $duration 训练作业运行时长，单位为毫秒。
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets nodeCountMetrics
    *  训练作业运行时节点数变化指标。
    *
    * @return int[][]|null
    */
    public function getNodeCountMetrics()
    {
        return $this->container['nodeCountMetrics'];
    }

    /**
    * Sets nodeCountMetrics
    *
    * @param int[][]|null $nodeCountMetrics 训练作业运行时节点数变化指标。
    *
    * @return $this
    */
    public function setNodeCountMetrics($nodeCountMetrics)
    {
        $this->container['nodeCountMetrics'] = $nodeCountMetrics;
        return $this;
    }

    /**
    * Gets tasks
    *  训练作业子任务名称。
    *
    * @return string[]|null
    */
    public function getTasks()
    {
        return $this->container['tasks'];
    }

    /**
    * Sets tasks
    *
    * @param string[]|null $tasks 训练作业子任务名称。
    *
    * @return $this
    */
    public function setTasks($tasks)
    {
        $this->container['tasks'] = $tasks;
        return $this;
    }

    /**
    * Gets startTime
    *  训练作业开始时间，格式为时间戳。
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
    * @param int|null $startTime 训练作业开始时间，格式为时间戳。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets taskStatuses
    *  训练在子任务状态信息。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\TaskStatuses[]|null
    */
    public function getTaskStatuses()
    {
        return $this->container['taskStatuses'];
    }

    /**
    * Sets taskStatuses
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\TaskStatuses[]|null $taskStatuses 训练在子任务状态信息。
    *
    * @return $this
    */
    public function setTaskStatuses($taskStatuses)
    {
        $this->container['taskStatuses'] = $taskStatuses;
        return $this;
    }

    /**
    * Gets runningRecords
    *  训练作业运行及故障恢复记录。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\RunningRecord[]|null
    */
    public function getRunningRecords()
    {
        return $this->container['runningRecords'];
    }

    /**
    * Sets runningRecords
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\RunningRecord[]|null $runningRecords 训练作业运行及故障恢复记录。
    *
    * @return $this
    */
    public function setRunningRecords($runningRecords)
    {
        $this->container['runningRecords'] = $runningRecords;
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

