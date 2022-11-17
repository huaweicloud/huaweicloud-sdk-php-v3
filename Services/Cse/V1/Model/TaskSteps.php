<?php

namespace HuaweiCloud\SDK\Cse\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskSteps implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskSteps';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskName  处理阶段名称
    * taskNames  当前处理阶段包含的处理步骤名称列表
    * status  处理阶段状态
    * startTime  处理阶段开始时间
    * endTime  处理阶段结束时间
    * taskExecutorBrief  taskExecutorBrief
    * tasks  处理步骤
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskName' => 'string',
            'taskNames' => 'string[]',
            'status' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'taskExecutorBrief' => '\HuaweiCloud\SDK\Cse\V1\Model\TaskExecutorBrief',
            'tasks' => '\HuaweiCloud\SDK\Cse\V1\Model\Task[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskName  处理阶段名称
    * taskNames  当前处理阶段包含的处理步骤名称列表
    * status  处理阶段状态
    * startTime  处理阶段开始时间
    * endTime  处理阶段结束时间
    * taskExecutorBrief  taskExecutorBrief
    * tasks  处理步骤
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskName' => null,
        'taskNames' => null,
        'status' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'taskExecutorBrief' => null,
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
    * taskName  处理阶段名称
    * taskNames  当前处理阶段包含的处理步骤名称列表
    * status  处理阶段状态
    * startTime  处理阶段开始时间
    * endTime  处理阶段结束时间
    * taskExecutorBrief  taskExecutorBrief
    * tasks  处理步骤
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskName' => 'task_name',
            'taskNames' => 'task_names',
            'status' => 'status',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'taskExecutorBrief' => 'task_executor_brief',
            'tasks' => 'tasks'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskName  处理阶段名称
    * taskNames  当前处理阶段包含的处理步骤名称列表
    * status  处理阶段状态
    * startTime  处理阶段开始时间
    * endTime  处理阶段结束时间
    * taskExecutorBrief  taskExecutorBrief
    * tasks  处理步骤
    *
    * @var string[]
    */
    protected static $setters = [
            'taskName' => 'setTaskName',
            'taskNames' => 'setTaskNames',
            'status' => 'setStatus',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'taskExecutorBrief' => 'setTaskExecutorBrief',
            'tasks' => 'setTasks'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskName  处理阶段名称
    * taskNames  当前处理阶段包含的处理步骤名称列表
    * status  处理阶段状态
    * startTime  处理阶段开始时间
    * endTime  处理阶段结束时间
    * taskExecutorBrief  taskExecutorBrief
    * tasks  处理步骤
    *
    * @var string[]
    */
    protected static $getters = [
            'taskName' => 'getTaskName',
            'taskNames' => 'getTaskNames',
            'status' => 'getStatus',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'taskExecutorBrief' => 'getTaskExecutorBrief',
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
    const STATUS_INIT = 'Init';
    const STATUS_EXECUTING = 'Executing';
    const STATUS_ERROR = 'Error';
    const STATUS_TIMEOUT = 'Timeout';
    const STATUS_FINISHED = 'Finished';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_INIT,
            self::STATUS_EXECUTING,
            self::STATUS_ERROR,
            self::STATUS_TIMEOUT,
            self::STATUS_FINISHED,
        ];
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
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['taskNames'] = isset($data['taskNames']) ? $data['taskNames'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['taskExecutorBrief'] = isset($data['taskExecutorBrief']) ? $data['taskExecutorBrief'] : null;
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
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets taskName
    *  处理阶段名称
    *
    * @return string|null
    */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
    * Sets taskName
    *
    * @param string|null $taskName 处理阶段名称
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets taskNames
    *  当前处理阶段包含的处理步骤名称列表
    *
    * @return string[]|null
    */
    public function getTaskNames()
    {
        return $this->container['taskNames'];
    }

    /**
    * Sets taskNames
    *
    * @param string[]|null $taskNames 当前处理阶段包含的处理步骤名称列表
    *
    * @return $this
    */
    public function setTaskNames($taskNames)
    {
        $this->container['taskNames'] = $taskNames;
        return $this;
    }

    /**
    * Gets status
    *  处理阶段状态
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
    * @param string|null $status 处理阶段状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets startTime
    *  处理阶段开始时间
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
    * @param int|null $startTime 处理阶段开始时间
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
    *  处理阶段结束时间
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
    * @param int|null $endTime 处理阶段结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets taskExecutorBrief
    *  taskExecutorBrief
    *
    * @return \HuaweiCloud\SDK\Cse\V1\Model\TaskExecutorBrief|null
    */
    public function getTaskExecutorBrief()
    {
        return $this->container['taskExecutorBrief'];
    }

    /**
    * Sets taskExecutorBrief
    *
    * @param \HuaweiCloud\SDK\Cse\V1\Model\TaskExecutorBrief|null $taskExecutorBrief taskExecutorBrief
    *
    * @return $this
    */
    public function setTaskExecutorBrief($taskExecutorBrief)
    {
        $this->container['taskExecutorBrief'] = $taskExecutorBrief;
        return $this;
    }

    /**
    * Gets tasks
    *  处理步骤
    *
    * @return \HuaweiCloud\SDK\Cse\V1\Model\Task[]|null
    */
    public function getTasks()
    {
        return $this->container['tasks'];
    }

    /**
    * Sets tasks
    *
    * @param \HuaweiCloud\SDK\Cse\V1\Model\Task[]|null $tasks 处理步骤
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

