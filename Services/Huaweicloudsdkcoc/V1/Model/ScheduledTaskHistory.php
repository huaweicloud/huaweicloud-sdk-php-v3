<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScheduledTaskHistory implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScheduledTaskHistory';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  历史记录ID
    * taskType  引用任务类型
    * executionId  执行ID
    * associatedTaskName  引用任务名称
    * associatedTaskNameEn  引用任务名称(英文)
    * region  区域
    * createdBy  创建人
    * startedTime  开始时间时间戳
    * finishedTime  结束时间时间戳
    * status  状态
    * executionMsg  执行结果描述
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'taskType' => 'string',
            'executionId' => 'string',
            'associatedTaskName' => 'string',
            'associatedTaskNameEn' => 'string',
            'region' => 'string',
            'createdBy' => 'string',
            'startedTime' => 'int',
            'finishedTime' => 'int',
            'status' => 'string',
            'executionMsg' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  历史记录ID
    * taskType  引用任务类型
    * executionId  执行ID
    * associatedTaskName  引用任务名称
    * associatedTaskNameEn  引用任务名称(英文)
    * region  区域
    * createdBy  创建人
    * startedTime  开始时间时间戳
    * finishedTime  结束时间时间戳
    * status  状态
    * executionMsg  执行结果描述
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'taskType' => null,
        'executionId' => null,
        'associatedTaskName' => null,
        'associatedTaskNameEn' => null,
        'region' => null,
        'createdBy' => null,
        'startedTime' => 'int64',
        'finishedTime' => 'int64',
        'status' => null,
        'executionMsg' => null
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
    * id  历史记录ID
    * taskType  引用任务类型
    * executionId  执行ID
    * associatedTaskName  引用任务名称
    * associatedTaskNameEn  引用任务名称(英文)
    * region  区域
    * createdBy  创建人
    * startedTime  开始时间时间戳
    * finishedTime  结束时间时间戳
    * status  状态
    * executionMsg  执行结果描述
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'taskType' => 'task_type',
            'executionId' => 'execution_id',
            'associatedTaskName' => 'associated_task_name',
            'associatedTaskNameEn' => 'associated_task_name_en',
            'region' => 'region',
            'createdBy' => 'created_by',
            'startedTime' => 'started_time',
            'finishedTime' => 'finished_time',
            'status' => 'status',
            'executionMsg' => 'execution_msg'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  历史记录ID
    * taskType  引用任务类型
    * executionId  执行ID
    * associatedTaskName  引用任务名称
    * associatedTaskNameEn  引用任务名称(英文)
    * region  区域
    * createdBy  创建人
    * startedTime  开始时间时间戳
    * finishedTime  结束时间时间戳
    * status  状态
    * executionMsg  执行结果描述
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'taskType' => 'setTaskType',
            'executionId' => 'setExecutionId',
            'associatedTaskName' => 'setAssociatedTaskName',
            'associatedTaskNameEn' => 'setAssociatedTaskNameEn',
            'region' => 'setRegion',
            'createdBy' => 'setCreatedBy',
            'startedTime' => 'setStartedTime',
            'finishedTime' => 'setFinishedTime',
            'status' => 'setStatus',
            'executionMsg' => 'setExecutionMsg'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  历史记录ID
    * taskType  引用任务类型
    * executionId  执行ID
    * associatedTaskName  引用任务名称
    * associatedTaskNameEn  引用任务名称(英文)
    * region  区域
    * createdBy  创建人
    * startedTime  开始时间时间戳
    * finishedTime  结束时间时间戳
    * status  状态
    * executionMsg  执行结果描述
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'taskType' => 'getTaskType',
            'executionId' => 'getExecutionId',
            'associatedTaskName' => 'getAssociatedTaskName',
            'associatedTaskNameEn' => 'getAssociatedTaskNameEn',
            'region' => 'getRegion',
            'createdBy' => 'getCreatedBy',
            'startedTime' => 'getStartedTime',
            'finishedTime' => 'getFinishedTime',
            'status' => 'getStatus',
            'executionMsg' => 'getExecutionMsg'
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
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['executionId'] = isset($data['executionId']) ? $data['executionId'] : null;
        $this->container['associatedTaskName'] = isset($data['associatedTaskName']) ? $data['associatedTaskName'] : null;
        $this->container['associatedTaskNameEn'] = isset($data['associatedTaskNameEn']) ? $data['associatedTaskNameEn'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['startedTime'] = isset($data['startedTime']) ? $data['startedTime'] : null;
        $this->container['finishedTime'] = isset($data['finishedTime']) ? $data['finishedTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['executionMsg'] = isset($data['executionMsg']) ? $data['executionMsg'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['executionMsg']) && (mb_strlen($this->container['executionMsg']) > 512)) {
                $invalidProperties[] = "invalid value for 'executionMsg', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['executionMsg']) && (mb_strlen($this->container['executionMsg']) < 0)) {
                $invalidProperties[] = "invalid value for 'executionMsg', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  历史记录ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 历史记录ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets taskType
    *  引用任务类型
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
    * @param string|null $taskType 引用任务类型
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
        return $this;
    }

    /**
    * Gets executionId
    *  执行ID
    *
    * @return string|null
    */
    public function getExecutionId()
    {
        return $this->container['executionId'];
    }

    /**
    * Sets executionId
    *
    * @param string|null $executionId 执行ID
    *
    * @return $this
    */
    public function setExecutionId($executionId)
    {
        $this->container['executionId'] = $executionId;
        return $this;
    }

    /**
    * Gets associatedTaskName
    *  引用任务名称
    *
    * @return string|null
    */
    public function getAssociatedTaskName()
    {
        return $this->container['associatedTaskName'];
    }

    /**
    * Sets associatedTaskName
    *
    * @param string|null $associatedTaskName 引用任务名称
    *
    * @return $this
    */
    public function setAssociatedTaskName($associatedTaskName)
    {
        $this->container['associatedTaskName'] = $associatedTaskName;
        return $this;
    }

    /**
    * Gets associatedTaskNameEn
    *  引用任务名称(英文)
    *
    * @return string|null
    */
    public function getAssociatedTaskNameEn()
    {
        return $this->container['associatedTaskNameEn'];
    }

    /**
    * Sets associatedTaskNameEn
    *
    * @param string|null $associatedTaskNameEn 引用任务名称(英文)
    *
    * @return $this
    */
    public function setAssociatedTaskNameEn($associatedTaskNameEn)
    {
        $this->container['associatedTaskNameEn'] = $associatedTaskNameEn;
        return $this;
    }

    /**
    * Gets region
    *  区域
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 区域
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets createdBy
    *  创建人
    *
    * @return string|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param string|null $createdBy 创建人
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets startedTime
    *  开始时间时间戳
    *
    * @return int|null
    */
    public function getStartedTime()
    {
        return $this->container['startedTime'];
    }

    /**
    * Sets startedTime
    *
    * @param int|null $startedTime 开始时间时间戳
    *
    * @return $this
    */
    public function setStartedTime($startedTime)
    {
        $this->container['startedTime'] = $startedTime;
        return $this;
    }

    /**
    * Gets finishedTime
    *  结束时间时间戳
    *
    * @return int|null
    */
    public function getFinishedTime()
    {
        return $this->container['finishedTime'];
    }

    /**
    * Sets finishedTime
    *
    * @param int|null $finishedTime 结束时间时间戳
    *
    * @return $this
    */
    public function setFinishedTime($finishedTime)
    {
        $this->container['finishedTime'] = $finishedTime;
        return $this;
    }

    /**
    * Gets status
    *  状态
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
    * @param string|null $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets executionMsg
    *  执行结果描述
    *
    * @return string|null
    */
    public function getExecutionMsg()
    {
        return $this->container['executionMsg'];
    }

    /**
    * Sets executionMsg
    *
    * @param string|null $executionMsg 执行结果描述
    *
    * @return $this
    */
    public function setExecutionMsg($executionMsg)
    {
        $this->container['executionMsg'] = $executionMsg;
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

