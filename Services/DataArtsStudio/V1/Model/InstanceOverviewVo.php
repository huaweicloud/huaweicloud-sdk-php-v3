<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceOverviewVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceOverviewVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  id
    * name  名称
    * taskId  task id
    * taskType  QUALITY_TASK:质量作业,CONSISTENCY_TASK:对账作业
    * runStatus  RUNNING:运行中,FAILED:失败,ALARMING:报警,SUCCESS:正常
    * notifyStatus  NOT_TRIGGERED:未触发,SUCCESS:成功,FAILED:失败
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'name' => 'string',
            'taskId' => 'int',
            'taskType' => 'string',
            'runStatus' => 'string',
            'notifyStatus' => 'string',
            'startTime' => 'int',
            'endTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  id
    * name  名称
    * taskId  task id
    * taskType  QUALITY_TASK:质量作业,CONSISTENCY_TASK:对账作业
    * runStatus  RUNNING:运行中,FAILED:失败,ALARMING:报警,SUCCESS:正常
    * notifyStatus  NOT_TRIGGERED:未触发,SUCCESS:成功,FAILED:失败
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'name' => null,
        'taskId' => 'int64',
        'taskType' => null,
        'runStatus' => null,
        'notifyStatus' => null,
        'startTime' => 'int64',
        'endTime' => 'int64'
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
    * id  id
    * name  名称
    * taskId  task id
    * taskType  QUALITY_TASK:质量作业,CONSISTENCY_TASK:对账作业
    * runStatus  RUNNING:运行中,FAILED:失败,ALARMING:报警,SUCCESS:正常
    * notifyStatus  NOT_TRIGGERED:未触发,SUCCESS:成功,FAILED:失败
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'taskId' => 'task_id',
            'taskType' => 'task_type',
            'runStatus' => 'run_status',
            'notifyStatus' => 'notify_status',
            'startTime' => 'start_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  id
    * name  名称
    * taskId  task id
    * taskType  QUALITY_TASK:质量作业,CONSISTENCY_TASK:对账作业
    * runStatus  RUNNING:运行中,FAILED:失败,ALARMING:报警,SUCCESS:正常
    * notifyStatus  NOT_TRIGGERED:未触发,SUCCESS:成功,FAILED:失败
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'taskId' => 'setTaskId',
            'taskType' => 'setTaskType',
            'runStatus' => 'setRunStatus',
            'notifyStatus' => 'setNotifyStatus',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  id
    * name  名称
    * taskId  task id
    * taskType  QUALITY_TASK:质量作业,CONSISTENCY_TASK:对账作业
    * runStatus  RUNNING:运行中,FAILED:失败,ALARMING:报警,SUCCESS:正常
    * notifyStatus  NOT_TRIGGERED:未触发,SUCCESS:成功,FAILED:失败
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'taskId' => 'getTaskId',
            'taskType' => 'getTaskType',
            'runStatus' => 'getRunStatus',
            'notifyStatus' => 'getNotifyStatus',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['runStatus'] = isset($data['runStatus']) ? $data['runStatus'] : null;
        $this->container['notifyStatus'] = isset($data['notifyStatus']) ? $data['notifyStatus'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
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
    * Gets id
    *  id
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets taskId
    *  task id
    *
    * @return int|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param int|null $taskId task id
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets taskType
    *  QUALITY_TASK:质量作业,CONSISTENCY_TASK:对账作业
    *
    * @return string|null
    */
    public function getTaskType()
    {
        return $this->container['taskType'];
    }

    /**
    * Sets taskType
    *
    * @param string|null $taskType QUALITY_TASK:质量作业,CONSISTENCY_TASK:对账作业
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
        return $this;
    }

    /**
    * Gets runStatus
    *  RUNNING:运行中,FAILED:失败,ALARMING:报警,SUCCESS:正常
    *
    * @return string|null
    */
    public function getRunStatus()
    {
        return $this->container['runStatus'];
    }

    /**
    * Sets runStatus
    *
    * @param string|null $runStatus RUNNING:运行中,FAILED:失败,ALARMING:报警,SUCCESS:正常
    *
    * @return $this
    */
    public function setRunStatus($runStatus)
    {
        $this->container['runStatus'] = $runStatus;
        return $this;
    }

    /**
    * Gets notifyStatus
    *  NOT_TRIGGERED:未触发,SUCCESS:成功,FAILED:失败
    *
    * @return string|null
    */
    public function getNotifyStatus()
    {
        return $this->container['notifyStatus'];
    }

    /**
    * Sets notifyStatus
    *
    * @param string|null $notifyStatus NOT_TRIGGERED:未触发,SUCCESS:成功,FAILED:失败
    *
    * @return $this
    */
    public function setNotifyStatus($notifyStatus)
    {
        $this->container['notifyStatus'] = $notifyStatus;
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

