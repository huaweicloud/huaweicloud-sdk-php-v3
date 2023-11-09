<?php

namespace HuaweiCloud\SDK\Tics\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProcessorVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProcessorVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * endTime  结束时间
    * execDurationNano  执行时长
    * id  执行过程id
    * lastStepTaskInsId  上游子任务id
    * startTime  开始时间
    * taskInRecordCnt  输入个数
    * taskName  执行过程名称
    * taskOutRecordCnt  输出个数
    * taskShowInfo  processor对外展示信息，k,v
    * taskStatus  执行状态，作业任务状态，NEW.新建,SUBMITING.提交中,ACCEPTED.已接收,DEPLOYING.部署中,RUNNING.运行中,SUCCEEDED.成功,FAILED.失败,TERMINATED.中止,TERMINATING.中止中,PENDING.等待中
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'endTime' => 'int',
            'execDurationNano' => 'int',
            'id' => 'string',
            'lastStepTaskInsId' => 'string[]',
            'startTime' => 'int',
            'taskInRecordCnt' => 'int',
            'taskName' => 'string',
            'taskOutRecordCnt' => 'int',
            'taskShowInfo' => 'object',
            'taskStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * endTime  结束时间
    * execDurationNano  执行时长
    * id  执行过程id
    * lastStepTaskInsId  上游子任务id
    * startTime  开始时间
    * taskInRecordCnt  输入个数
    * taskName  执行过程名称
    * taskOutRecordCnt  输出个数
    * taskShowInfo  processor对外展示信息，k,v
    * taskStatus  执行状态，作业任务状态，NEW.新建,SUBMITING.提交中,ACCEPTED.已接收,DEPLOYING.部署中,RUNNING.运行中,SUCCEEDED.成功,FAILED.失败,TERMINATED.中止,TERMINATING.中止中,PENDING.等待中
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'endTime' => 'int64',
        'execDurationNano' => 'int64',
        'id' => null,
        'lastStepTaskInsId' => null,
        'startTime' => 'int64',
        'taskInRecordCnt' => 'int64',
        'taskName' => null,
        'taskOutRecordCnt' => 'int64',
        'taskShowInfo' => null,
        'taskStatus' => null
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
    * endTime  结束时间
    * execDurationNano  执行时长
    * id  执行过程id
    * lastStepTaskInsId  上游子任务id
    * startTime  开始时间
    * taskInRecordCnt  输入个数
    * taskName  执行过程名称
    * taskOutRecordCnt  输出个数
    * taskShowInfo  processor对外展示信息，k,v
    * taskStatus  执行状态，作业任务状态，NEW.新建,SUBMITING.提交中,ACCEPTED.已接收,DEPLOYING.部署中,RUNNING.运行中,SUCCEEDED.成功,FAILED.失败,TERMINATED.中止,TERMINATING.中止中,PENDING.等待中
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'endTime' => 'end_time',
            'execDurationNano' => 'exec_duration_nano',
            'id' => 'id',
            'lastStepTaskInsId' => 'last_step_task_ins_id',
            'startTime' => 'start_time',
            'taskInRecordCnt' => 'task_in_record_cnt',
            'taskName' => 'task_name',
            'taskOutRecordCnt' => 'task_out_record_cnt',
            'taskShowInfo' => 'task_show_info',
            'taskStatus' => 'task_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * endTime  结束时间
    * execDurationNano  执行时长
    * id  执行过程id
    * lastStepTaskInsId  上游子任务id
    * startTime  开始时间
    * taskInRecordCnt  输入个数
    * taskName  执行过程名称
    * taskOutRecordCnt  输出个数
    * taskShowInfo  processor对外展示信息，k,v
    * taskStatus  执行状态，作业任务状态，NEW.新建,SUBMITING.提交中,ACCEPTED.已接收,DEPLOYING.部署中,RUNNING.运行中,SUCCEEDED.成功,FAILED.失败,TERMINATED.中止,TERMINATING.中止中,PENDING.等待中
    *
    * @var string[]
    */
    protected static $setters = [
            'endTime' => 'setEndTime',
            'execDurationNano' => 'setExecDurationNano',
            'id' => 'setId',
            'lastStepTaskInsId' => 'setLastStepTaskInsId',
            'startTime' => 'setStartTime',
            'taskInRecordCnt' => 'setTaskInRecordCnt',
            'taskName' => 'setTaskName',
            'taskOutRecordCnt' => 'setTaskOutRecordCnt',
            'taskShowInfo' => 'setTaskShowInfo',
            'taskStatus' => 'setTaskStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * endTime  结束时间
    * execDurationNano  执行时长
    * id  执行过程id
    * lastStepTaskInsId  上游子任务id
    * startTime  开始时间
    * taskInRecordCnt  输入个数
    * taskName  执行过程名称
    * taskOutRecordCnt  输出个数
    * taskShowInfo  processor对外展示信息，k,v
    * taskStatus  执行状态，作业任务状态，NEW.新建,SUBMITING.提交中,ACCEPTED.已接收,DEPLOYING.部署中,RUNNING.运行中,SUCCEEDED.成功,FAILED.失败,TERMINATED.中止,TERMINATING.中止中,PENDING.等待中
    *
    * @var string[]
    */
    protected static $getters = [
            'endTime' => 'getEndTime',
            'execDurationNano' => 'getExecDurationNano',
            'id' => 'getId',
            'lastStepTaskInsId' => 'getLastStepTaskInsId',
            'startTime' => 'getStartTime',
            'taskInRecordCnt' => 'getTaskInRecordCnt',
            'taskName' => 'getTaskName',
            'taskOutRecordCnt' => 'getTaskOutRecordCnt',
            'taskShowInfo' => 'getTaskShowInfo',
            'taskStatus' => 'getTaskStatus'
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
    const TASK_STATUS_ACCEPTED = 'ACCEPTED';
    const TASK_STATUS_DEPLOYING = 'DEPLOYING';
    const TASK_STATUS_FAILED = 'FAILED';
    const TASK_STATUS__NEW = 'NEW';
    const TASK_STATUS_PENDING = 'PENDING';
    const TASK_STATUS_RUNNING = 'RUNNING';
    const TASK_STATUS_SUBMITING = 'SUBMITING';
    const TASK_STATUS_SUCCEEDED = 'SUCCEEDED';
    const TASK_STATUS_TERMINATED = 'TERMINATED';
    const TASK_STATUS_TERMINATING = 'TERMINATING';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTaskStatusAllowableValues()
    {
        return [
            self::TASK_STATUS_ACCEPTED,
            self::TASK_STATUS_DEPLOYING,
            self::TASK_STATUS_FAILED,
            self::TASK_STATUS__NEW,
            self::TASK_STATUS_PENDING,
            self::TASK_STATUS_RUNNING,
            self::TASK_STATUS_SUBMITING,
            self::TASK_STATUS_SUCCEEDED,
            self::TASK_STATUS_TERMINATED,
            self::TASK_STATUS_TERMINATING,
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
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['execDurationNano'] = isset($data['execDurationNano']) ? $data['execDurationNano'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['lastStepTaskInsId'] = isset($data['lastStepTaskInsId']) ? $data['lastStepTaskInsId'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['taskInRecordCnt'] = isset($data['taskInRecordCnt']) ? $data['taskInRecordCnt'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['taskOutRecordCnt'] = isset($data['taskOutRecordCnt']) ? $data['taskOutRecordCnt'] : null;
        $this->container['taskShowInfo'] = isset($data['taskShowInfo']) ? $data['taskShowInfo'] : null;
        $this->container['taskStatus'] = isset($data['taskStatus']) ? $data['taskStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['taskName'] === null) {
            $invalidProperties[] = "'taskName' can't be null";
        }
            if ((mb_strlen($this->container['taskName']) > 128)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['taskName']) < 0)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getTaskStatusAllowableValues();
                if (!is_null($this->container['taskStatus']) && !in_array($this->container['taskStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'taskStatus', must be one of '%s'",
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
    * Gets endTime
    *  结束时间
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
    * @param int|null $endTime 结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets execDurationNano
    *  执行时长
    *
    * @return int|null
    */
    public function getExecDurationNano()
    {
        return $this->container['execDurationNano'];
    }

    /**
    * Sets execDurationNano
    *
    * @param int|null $execDurationNano 执行时长
    *
    * @return $this
    */
    public function setExecDurationNano($execDurationNano)
    {
        $this->container['execDurationNano'] = $execDurationNano;
        return $this;
    }

    /**
    * Gets id
    *  执行过程id
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 执行过程id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets lastStepTaskInsId
    *  上游子任务id
    *
    * @return string[]|null
    */
    public function getLastStepTaskInsId()
    {
        return $this->container['lastStepTaskInsId'];
    }

    /**
    * Sets lastStepTaskInsId
    *
    * @param string[]|null $lastStepTaskInsId 上游子任务id
    *
    * @return $this
    */
    public function setLastStepTaskInsId($lastStepTaskInsId)
    {
        $this->container['lastStepTaskInsId'] = $lastStepTaskInsId;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间
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
    * @param int|null $startTime 开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets taskInRecordCnt
    *  输入个数
    *
    * @return int|null
    */
    public function getTaskInRecordCnt()
    {
        return $this->container['taskInRecordCnt'];
    }

    /**
    * Sets taskInRecordCnt
    *
    * @param int|null $taskInRecordCnt 输入个数
    *
    * @return $this
    */
    public function setTaskInRecordCnt($taskInRecordCnt)
    {
        $this->container['taskInRecordCnt'] = $taskInRecordCnt;
        return $this;
    }

    /**
    * Gets taskName
    *  执行过程名称
    *
    * @return string
    */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
    * Sets taskName
    *
    * @param string $taskName 执行过程名称
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets taskOutRecordCnt
    *  输出个数
    *
    * @return int|null
    */
    public function getTaskOutRecordCnt()
    {
        return $this->container['taskOutRecordCnt'];
    }

    /**
    * Sets taskOutRecordCnt
    *
    * @param int|null $taskOutRecordCnt 输出个数
    *
    * @return $this
    */
    public function setTaskOutRecordCnt($taskOutRecordCnt)
    {
        $this->container['taskOutRecordCnt'] = $taskOutRecordCnt;
        return $this;
    }

    /**
    * Gets taskShowInfo
    *  processor对外展示信息，k,v
    *
    * @return object|null
    */
    public function getTaskShowInfo()
    {
        return $this->container['taskShowInfo'];
    }

    /**
    * Sets taskShowInfo
    *
    * @param object|null $taskShowInfo processor对外展示信息，k,v
    *
    * @return $this
    */
    public function setTaskShowInfo($taskShowInfo)
    {
        $this->container['taskShowInfo'] = $taskShowInfo;
        return $this;
    }

    /**
    * Gets taskStatus
    *  执行状态，作业任务状态，NEW.新建,SUBMITING.提交中,ACCEPTED.已接收,DEPLOYING.部署中,RUNNING.运行中,SUCCEEDED.成功,FAILED.失败,TERMINATED.中止,TERMINATING.中止中,PENDING.等待中
    *
    * @return string|null
    */
    public function getTaskStatus()
    {
        return $this->container['taskStatus'];
    }

    /**
    * Sets taskStatus
    *
    * @param string|null $taskStatus 执行状态，作业任务状态，NEW.新建,SUBMITING.提交中,ACCEPTED.已接收,DEPLOYING.部署中,RUNNING.运行中,SUCCEEDED.成功,FAILED.失败,TERMINATED.中止,TERMINATING.中止中,PENDING.等待中
    *
    * @return $this
    */
    public function setTaskStatus($taskStatus)
    {
        $this->container['taskStatus'] = $taskStatus;
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

