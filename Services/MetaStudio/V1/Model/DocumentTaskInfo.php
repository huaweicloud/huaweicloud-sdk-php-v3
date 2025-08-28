<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DocumentTaskInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DocumentTaskInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  任务ID
    * taskStatus  任务状态
    * taskProcess  任务进度
    * taskResult  任务结果
    * failReason  失败原因
    * createTime  任务创建时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * beginTime  任务开始时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * endTime  任务结束时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  任务更新时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'taskStatus' => 'string',
            'taskProcess' => 'string',
            'taskResult' => 'string',
            'failReason' => 'string',
            'createTime' => 'string',
            'beginTime' => 'string',
            'endTime' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  任务ID
    * taskStatus  任务状态
    * taskProcess  任务进度
    * taskResult  任务结果
    * failReason  失败原因
    * createTime  任务创建时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * beginTime  任务开始时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * endTime  任务结束时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  任务更新时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'taskStatus' => null,
        'taskProcess' => null,
        'taskResult' => null,
        'failReason' => null,
        'createTime' => null,
        'beginTime' => null,
        'endTime' => null,
        'updateTime' => null
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
    * taskId  任务ID
    * taskStatus  任务状态
    * taskProcess  任务进度
    * taskResult  任务结果
    * failReason  失败原因
    * createTime  任务创建时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * beginTime  任务开始时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * endTime  任务结束时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  任务更新时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'taskStatus' => 'task_status',
            'taskProcess' => 'task_process',
            'taskResult' => 'task_result',
            'failReason' => 'fail_reason',
            'createTime' => 'create_time',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  任务ID
    * taskStatus  任务状态
    * taskProcess  任务进度
    * taskResult  任务结果
    * failReason  失败原因
    * createTime  任务创建时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * beginTime  任务开始时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * endTime  任务结束时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  任务更新时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'taskStatus' => 'setTaskStatus',
            'taskProcess' => 'setTaskProcess',
            'taskResult' => 'setTaskResult',
            'failReason' => 'setFailReason',
            'createTime' => 'setCreateTime',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  任务ID
    * taskStatus  任务状态
    * taskProcess  任务进度
    * taskResult  任务结果
    * failReason  失败原因
    * createTime  任务创建时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * beginTime  任务开始时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * endTime  任务结束时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  任务更新时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'taskStatus' => 'getTaskStatus',
            'taskProcess' => 'getTaskProcess',
            'taskResult' => 'getTaskResult',
            'failReason' => 'getFailReason',
            'createTime' => 'getCreateTime',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'updateTime' => 'getUpdateTime'
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
        $this->container['taskStatus'] = isset($data['taskStatus']) ? $data['taskStatus'] : null;
        $this->container['taskProcess'] = isset($data['taskProcess']) ? $data['taskProcess'] : null;
        $this->container['taskResult'] = isset($data['taskResult']) ? $data['taskResult'] : null;
        $this->container['failReason'] = isset($data['failReason']) ? $data['failReason'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) > 64)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['taskStatus']) && (mb_strlen($this->container['taskStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'taskStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['taskStatus']) && (mb_strlen($this->container['taskStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['taskProcess']) && (mb_strlen($this->container['taskProcess']) > 64)) {
                $invalidProperties[] = "invalid value for 'taskProcess', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['taskProcess']) && (mb_strlen($this->container['taskProcess']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskProcess', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['taskResult']) && (mb_strlen($this->container['taskResult']) > 64)) {
                $invalidProperties[] = "invalid value for 'taskResult', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['taskResult']) && (mb_strlen($this->container['taskResult']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskResult', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['failReason']) && (mb_strlen($this->container['failReason']) > 512)) {
                $invalidProperties[] = "invalid value for 'failReason', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['failReason']) && (mb_strlen($this->container['failReason']) < 1)) {
                $invalidProperties[] = "invalid value for 'failReason', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['beginTime']) && (mb_strlen($this->container['beginTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'beginTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['beginTime']) && (mb_strlen($this->container['beginTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'beginTime', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 20.";
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
    * Gets taskId
    *  任务ID
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
    * @param string|null $taskId 任务ID
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets taskStatus
    *  任务状态
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
    * @param string|null $taskStatus 任务状态
    *
    * @return $this
    */
    public function setTaskStatus($taskStatus)
    {
        $this->container['taskStatus'] = $taskStatus;
        return $this;
    }

    /**
    * Gets taskProcess
    *  任务进度
    *
    * @return string|null
    */
    public function getTaskProcess()
    {
        return $this->container['taskProcess'];
    }

    /**
    * Sets taskProcess
    *
    * @param string|null $taskProcess 任务进度
    *
    * @return $this
    */
    public function setTaskProcess($taskProcess)
    {
        $this->container['taskProcess'] = $taskProcess;
        return $this;
    }

    /**
    * Gets taskResult
    *  任务结果
    *
    * @return string|null
    */
    public function getTaskResult()
    {
        return $this->container['taskResult'];
    }

    /**
    * Sets taskResult
    *
    * @param string|null $taskResult 任务结果
    *
    * @return $this
    */
    public function setTaskResult($taskResult)
    {
        $this->container['taskResult'] = $taskResult;
        return $this;
    }

    /**
    * Gets failReason
    *  失败原因
    *
    * @return string|null
    */
    public function getFailReason()
    {
        return $this->container['failReason'];
    }

    /**
    * Sets failReason
    *
    * @param string|null $failReason 失败原因
    *
    * @return $this
    */
    public function setFailReason($failReason)
    {
        $this->container['failReason'] = $failReason;
        return $this;
    }

    /**
    * Gets createTime
    *  任务创建时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 任务创建时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets beginTime
    *  任务开始时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return string|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param string|null $beginTime 任务开始时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets endTime
    *  任务结束时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
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
    * @param string|null $endTime 任务结束时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  任务更新时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 任务更新时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

