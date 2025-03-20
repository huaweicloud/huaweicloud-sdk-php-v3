<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlarmHandleHistory implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlarmHandleHistory';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workOrderId  执行工单id
    * createName  创建人名
    * createAlias  创建人名
    * taskType  任务类型
    * startTime  开始时间
    * endTime  结束时间
    * duration  总耗时
    * status  状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workOrderId' => 'string',
            'createName' => 'string',
            'createAlias' => 'string',
            'taskType' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'duration' => 'int',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workOrderId  执行工单id
    * createName  创建人名
    * createAlias  创建人名
    * taskType  任务类型
    * startTime  开始时间
    * endTime  结束时间
    * duration  总耗时
    * status  状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workOrderId' => null,
        'createName' => null,
        'createAlias' => null,
        'taskType' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'duration' => 'int64',
        'status' => null
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
    * workOrderId  执行工单id
    * createName  创建人名
    * createAlias  创建人名
    * taskType  任务类型
    * startTime  开始时间
    * endTime  结束时间
    * duration  总耗时
    * status  状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workOrderId' => 'work_order_id',
            'createName' => 'create_name',
            'createAlias' => 'create_alias',
            'taskType' => 'task_type',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'duration' => 'duration',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workOrderId  执行工单id
    * createName  创建人名
    * createAlias  创建人名
    * taskType  任务类型
    * startTime  开始时间
    * endTime  结束时间
    * duration  总耗时
    * status  状态
    *
    * @var string[]
    */
    protected static $setters = [
            'workOrderId' => 'setWorkOrderId',
            'createName' => 'setCreateName',
            'createAlias' => 'setCreateAlias',
            'taskType' => 'setTaskType',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'duration' => 'setDuration',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workOrderId  执行工单id
    * createName  创建人名
    * createAlias  创建人名
    * taskType  任务类型
    * startTime  开始时间
    * endTime  结束时间
    * duration  总耗时
    * status  状态
    *
    * @var string[]
    */
    protected static $getters = [
            'workOrderId' => 'getWorkOrderId',
            'createName' => 'getCreateName',
            'createAlias' => 'getCreateAlias',
            'taskType' => 'getTaskType',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'duration' => 'getDuration',
            'status' => 'getStatus'
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
        $this->container['workOrderId'] = isset($data['workOrderId']) ? $data['workOrderId'] : null;
        $this->container['createName'] = isset($data['createName']) ? $data['createName'] : null;
        $this->container['createAlias'] = isset($data['createAlias']) ? $data['createAlias'] : null;
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
    * Gets workOrderId
    *  执行工单id
    *
    * @return string|null
    */
    public function getWorkOrderId()
    {
        return $this->container['workOrderId'];
    }

    /**
    * Sets workOrderId
    *
    * @param string|null $workOrderId 执行工单id
    *
    * @return $this
    */
    public function setWorkOrderId($workOrderId)
    {
        $this->container['workOrderId'] = $workOrderId;
        return $this;
    }

    /**
    * Gets createName
    *  创建人名
    *
    * @return string|null
    */
    public function getCreateName()
    {
        return $this->container['createName'];
    }

    /**
    * Sets createName
    *
    * @param string|null $createName 创建人名
    *
    * @return $this
    */
    public function setCreateName($createName)
    {
        $this->container['createName'] = $createName;
        return $this;
    }

    /**
    * Gets createAlias
    *  创建人名
    *
    * @return string|null
    */
    public function getCreateAlias()
    {
        return $this->container['createAlias'];
    }

    /**
    * Sets createAlias
    *
    * @param string|null $createAlias 创建人名
    *
    * @return $this
    */
    public function setCreateAlias($createAlias)
    {
        $this->container['createAlias'] = $createAlias;
        return $this;
    }

    /**
    * Gets taskType
    *  任务类型
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
    * @param string|null $taskType 任务类型
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
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
    * Gets duration
    *  总耗时
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
    * @param int|null $duration 总耗时
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
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

