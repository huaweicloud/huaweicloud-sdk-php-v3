<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StateInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StateInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  任务执行状态
    * nickName  用户昵称
    * recordId  执行记录id
    * taskId  任务id
    * step  步骤状态
    * startTime  开始时间
    * endTime  结束时间
    * executor  执行人
    * taskName  任务名称
    * stepState  子步骤信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'nickName' => 'string',
            'recordId' => 'string',
            'taskId' => 'string',
            'step' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'executor' => 'string',
            'taskName' => 'string',
            'stepState' => '\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\StepInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  任务执行状态
    * nickName  用户昵称
    * recordId  执行记录id
    * taskId  任务id
    * step  步骤状态
    * startTime  开始时间
    * endTime  结束时间
    * executor  执行人
    * taskName  任务名称
    * stepState  子步骤信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'nickName' => null,
        'recordId' => null,
        'taskId' => null,
        'step' => null,
        'startTime' => null,
        'endTime' => null,
        'executor' => null,
        'taskName' => null,
        'stepState' => null
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
    * status  任务执行状态
    * nickName  用户昵称
    * recordId  执行记录id
    * taskId  任务id
    * step  步骤状态
    * startTime  开始时间
    * endTime  结束时间
    * executor  执行人
    * taskName  任务名称
    * stepState  子步骤信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'nickName' => 'nick_name',
            'recordId' => 'record_id',
            'taskId' => 'task_id',
            'step' => 'step',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'executor' => 'executor',
            'taskName' => 'task_name',
            'stepState' => 'step_state'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  任务执行状态
    * nickName  用户昵称
    * recordId  执行记录id
    * taskId  任务id
    * step  步骤状态
    * startTime  开始时间
    * endTime  结束时间
    * executor  执行人
    * taskName  任务名称
    * stepState  子步骤信息
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'nickName' => 'setNickName',
            'recordId' => 'setRecordId',
            'taskId' => 'setTaskId',
            'step' => 'setStep',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'executor' => 'setExecutor',
            'taskName' => 'setTaskName',
            'stepState' => 'setStepState'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  任务执行状态
    * nickName  用户昵称
    * recordId  执行记录id
    * taskId  任务id
    * step  步骤状态
    * startTime  开始时间
    * endTime  结束时间
    * executor  执行人
    * taskName  任务名称
    * stepState  子步骤信息
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'nickName' => 'getNickName',
            'recordId' => 'getRecordId',
            'taskId' => 'getTaskId',
            'step' => 'getStep',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'executor' => 'getExecutor',
            'taskName' => 'getTaskName',
            'stepState' => 'getStepState'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['nickName'] = isset($data['nickName']) ? $data['nickName'] : null;
        $this->container['recordId'] = isset($data['recordId']) ? $data['recordId'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['step'] = isset($data['step']) ? $data['step'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['executor'] = isset($data['executor']) ? $data['executor'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['stepState'] = isset($data['stepState']) ? $data['stepState'] : null;
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
    * Gets status
    *  任务执行状态
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
    * @param string|null $status 任务执行状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets nickName
    *  用户昵称
    *
    * @return string|null
    */
    public function getNickName()
    {
        return $this->container['nickName'];
    }

    /**
    * Sets nickName
    *
    * @param string|null $nickName 用户昵称
    *
    * @return $this
    */
    public function setNickName($nickName)
    {
        $this->container['nickName'] = $nickName;
        return $this;
    }

    /**
    * Gets recordId
    *  执行记录id
    *
    * @return string|null
    */
    public function getRecordId()
    {
        return $this->container['recordId'];
    }

    /**
    * Sets recordId
    *
    * @param string|null $recordId 执行记录id
    *
    * @return $this
    */
    public function setRecordId($recordId)
    {
        $this->container['recordId'] = $recordId;
        return $this;
    }

    /**
    * Gets taskId
    *  任务id
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
    * @param string|null $taskId 任务id
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets step
    *  步骤状态
    *
    * @return string|null
    */
    public function getStep()
    {
        return $this->container['step'];
    }

    /**
    * Sets step
    *
    * @param string|null $step 步骤状态
    *
    * @return $this
    */
    public function setStep($step)
    {
        $this->container['step'] = $step;
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
    * Gets executor
    *  执行人
    *
    * @return string|null
    */
    public function getExecutor()
    {
        return $this->container['executor'];
    }

    /**
    * Sets executor
    *
    * @param string|null $executor 执行人
    *
    * @return $this
    */
    public function setExecutor($executor)
    {
        $this->container['executor'] = $executor;
        return $this;
    }

    /**
    * Gets taskName
    *  任务名称
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
    * @param string|null $taskName 任务名称
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets stepState
    *  子步骤信息
    *
    * @return \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\StepInfo[]|null
    */
    public function getStepState()
    {
        return $this->container['stepState'];
    }

    /**
    * Sets stepState
    *
    * @param \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\StepInfo[]|null $stepState 子步骤信息
    *
    * @return $this
    */
    public function setStepState($stepState)
    {
        $this->container['stepState'] = $stepState;
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

